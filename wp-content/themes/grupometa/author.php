<?php get_header(); ?>

	<main role="main" class="main main-2">
		<!-- section -->
		<section class="wrapper container12">
			
			<div class="col-2-3 post-list">
				<h1><?php _e( 'Autor ', 'html5blank' ); echo get_the_author(); ?></h1>
				<?php get_template_part('loop'); ?>
				<?php get_template_part('pagination'); ?>
			</div>	
			<aside class="col-1-3 sidebar">
				<?php  if (dynamic_sidebar('Blog')) { get_sidebar('Blog'); } ?>
				<?php  //if (dynamic_sidebar('Newsletter')) { get_sidebar('Newsletter'); } ?>
			</aside>	
			
		</section>
		<!-- /section -->
	</main>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
