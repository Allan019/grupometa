

<?php 

/*
Template Name: Materiais Educativos
*/
get_header(); ?>
		
	<?php 

	 ?>
 
	<main role="main" class="main-2">
		<!-- section -->
		<section class="wrapper container12">
	

	<?php 
			$blog = get_page(291);
				$post = $blog;
			setup_postdata($post); ?>


			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class('page simple-page col-2-3'); ?>>

				<header class="page-title">
					<h1><?php the_title(); ?></h1>
				</header>

				<div class="content">
					<?php the_content(); ?>
				</div>
				<br><br>

			</article>
		<?php 

			// $args = array( 'post_type' => 'aprenda', 'order'=> 'ASC', 'posts_per_page' => '9999'  );
			// $myposts = get_posts( $args );

		 ?>
		</header>

		<?php wp_reset_postdata(); ?>
		<?php $hasExtra = 0; ?>
		<div class="clearfix"></div>
		<div class="col-2-3">

				<?php 
				global $post; ?>
				<div class="box-list">
		<?php while (have_posts()) : the_post(); ?>
					<div class="box-list-item list-<?php echo $k ?> col-2">
							<figure>
								<a href="<?php echo get_field('link') ?>"><?php the_post_thumbnail('servicos'); ?></a>
							</figure>
							<div class="box-list-content">
								<header>
									<h2 class="box-list-title">
										<a href="<?php echo get_field('link') ?>"><?php the_title(); ?></a>
									</h2>
								</header>
								<article>
									<div class="box-list-excerpt">
									<?php echo implode(' ',array_slice(explode(' ',get_the_excerpt()),0,20)) ?>...
									</div>
									<div class="box-list-link">
										<a href="<?php echo get_field('link') ?>">Baixar</a>
									</div>
								</article>
							</div>
					</div>
		<?php endwhile; ?>
				</div>
		</div>
		<div class="col-1-3">
			
			<?php  if (dynamic_sidebar('Materiais Educativos')) { get_sidebar('Materiais Educativos'); } ?>
		</div>
			<div class="clearfix"></div>
			<br><br><br>


		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
