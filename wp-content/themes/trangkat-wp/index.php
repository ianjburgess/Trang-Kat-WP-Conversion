<?php get_header(); ?>
<div class="container content-container">
	<div class="row">
		<div class="blog-main">
			<?php 
			if ( have_posts() ) : while ( have_posts() ) : the_post();
				get_template_part( 'content', get_post_format() );
			endwhile; ?>
				<nav>
					<ul class="pager">
						<?php custom_pagination(); ?>
					</ul>
				</nav>
				<?php endif; ?>
		</div>	<!-- /.blog-main -->
	</div> 	<!-- /.row -->
</div>		

<?php get_footer(); ?>