<div class="blog-post">
	<h2 class="blog-post-title"><?php the_title(); ?></h2>
	<p class="blog-post-meta"><?php the_date(); ?></p>
	<?php if ( has_post_thumbnail() ) {
		the_post_thumbnail();
	} ?>

    <div class="blog-single-page">
	    <?php the_content(); ?>
    </div>
</div><!-- /.blog-post -->