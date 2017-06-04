<?php get_header(); ?>
    <div class="container content-container">
        <div class="row">
            <div class="col-sm-12 blog-content">
                <?php 
                    if ( have_posts() ) : while ( have_posts() ) : the_post();
                        get_template_part( 'content-single', get_post_format() );
                    endwhile; endif; 
                ?>
            </div> <!-- /.col -->
        </div> <!-- /.row -->
    </div>
<?php get_footer(); ?>