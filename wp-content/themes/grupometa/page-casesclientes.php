<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="wrapper container12">

			<header class="page-title">
				<h1><?php the_title(); ?></h1>
			</header>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?> page" <?php post_class(); ?>>

				<?php the_content(); ?>

				
				<ul class="caseclient-list">
					<?php 
					$args = array( 'post_type' => 'casesclientes', 'order'=> 'DESC', 'posts_per_page' => '-1' );
					$myposts = get_posts( $args );
					foreach ( $myposts as $k => $post ) :  ?>
						<li class="<?php echo $k == 0 ? 'active' : '' ?> list-<?php echo $k ?>">
							<?php if (get_field('mostrar') == 1): ?>
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								<?php the_post_thumbnail('case') ?>
							</a>
							<?php else: ?>
								<?php the_post_thumbnail('case') ?>
							<?php endif ?>
						</li>
					<?php endforeach; ?>
				</ul>
				<div class="clearfix"></div>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>


<?php get_footer(); ?>
