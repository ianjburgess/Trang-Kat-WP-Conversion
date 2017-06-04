<div class="blog-post">
	<h2 class="blog-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<p class="blog-post-meta">
		<?php the_date(); ?>
	</p>
    <div class="blog-content">
	    <?php the_post_thumbnail(); ?>
        <?php the_content(); ?>
    </div>
</div>
<!-- /.blog-post -->