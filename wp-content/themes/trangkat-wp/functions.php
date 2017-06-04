<?php
// Register Custom Navigation Walker
require_once('wp-bootstrap-navwalker.php');
update_option( 'siteurl', 'https://www.trangkat.com.au/wordpress' );
update_option( 'home', 'https://www.trangkat.com.au/' );
/* enqueue styles and scripts */
function my_assets() {

    if ( is_page( 'home' ) ) {
        wp_enqueue_style( 'font' , '//fonts.googleapis.com/css?family=Dancing+Script:700' );
    }
    
    wp_register_style( 'bootstrap-min' , get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style( 'bootstrap-css' , get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_register_style( 'blog' , get_template_directory_uri() . '/css/blog.css');
    wp_enqueue_style( 'blog-css' , get_template_directory_uri() . '/css/blog.css' );
    wp_enqueue_style( 'style' , get_stylesheet_uri() );
    wp_enqueue_script( 'bootstrap-js' , get_template_directory_uri() . '/js/bootstrap.min.js' , array( 'jquery' ) , false , true );

    /* add theme menu area */
    register_nav_menus (array(
    'primary' => __( 'Primary Menu' ),
    'gallery' => __( 'Gallery Menu' )
    ));
}

add_action( 'wp_enqueue_scripts', 'my_assets' );




function custom_pagination($numpages = '', $pagerange = '', $paged='') {

  if (empty($pagerange)) {
    $pagerange = 2;
  }

  /**
   * This first part of our function is a fallback
   * for custom pagination inside a regular loop that
   * uses the global $paged and global $wp_query variables.
   * 
   * It's good because we can now override default pagination
   * in our theme, and use this function in default quries
   * and custom queries.
   */
  global $paged;
  if (empty($paged)) {
    $paged = 1;
  }
  if ($numpages == '') {
    global $wp_query;
    $numpages = $wp_query->max_num_pages;
    if(!$numpages) {
        $numpages = 1;
    }
  }

  /** 
   * We construct the pagination arguments to enter into our paginate_links
   * function. 
   */
  $pagination_args = array(
    'base'            => get_pagenum_link(1) . '%_%',
    'format'          => 'page/%#%',
    'total'           => $numpages,
    'current'         => $paged,
    'show_all'        => False,
    'end_size'        => 1,
    'mid_size'        => $pagerange,
    'prev_next'       => True,
    'prev_text'       => __('&laquo;'),
    'next_text'       => __('&raquo;'),
    'type'            => 'plain',
    'add_args'        => false,
    'add_fragment'    => ''
  );

  $paginate_links = paginate_links($pagination_args);

  if ($paginate_links) {
    echo "<nav class='custom-pagination'>";
      echo "<span class='page-numbers page-num'>Page " . $paged . " of " . $numpages . "</span> ";
      echo $paginate_links;
    echo "</nav>";
  }

}

// Support Featured Images
add_theme_support( 'post-thumbnails' );


// Custom Post Type
function create_my_custom_post() {
	register_post_type('my-custom-post',
			array(
			'labels' => array(
					'name' => __('My Custom Post'),
					'singular_name' => __('My Custom Post'),
			),
			'public' => true,
			'has_archive' => true,
			'supports' => array(
					'title',
					'editor',
					'thumbnail',
				  'custom-fields'
			)
	));
}
add_action('init', 'create_my_custom_post');

?>