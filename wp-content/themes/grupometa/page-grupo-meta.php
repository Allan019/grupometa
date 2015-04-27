<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="wrapper container12">

			<header class="page-title">
				<h1><?php the_title(); ?></h1>
			</header>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?> " <?php post_class("col-2 page"); ?>>

				<?php the_content(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>
		<?php endif; ?>
			<aside class="col-2">
				<?php 
					$args = array( 'post_type' => 'grupo-meta', 'meta_key' => 'mostrar', 'meta_value' => 1, 'order'=> 'desc', 'posts_per_page' => '9999'  );
					$myposts = get_posts( $args );
					foreach ( $myposts as $k => $post ) :  ?>
						<div class="list-item-grupo list-<?php echo $k ?> ">
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								<figure>
									<img src="<?php $img = get_field('logo'); echo $img['sizes']['grupo-small']; ?>" alt="<?php the_title() ?>">
								</figure>
								<article>
									<div class="title"><?php the_title() ?></div>
									<p><?php echo html5wp_excerpt2($post) ?></p>
								</article>
							</a>
						</div>
					<?php endforeach; ?>
			</aside>

		</section>
		<!-- /section -->
	</main>


<?php get_footer(); ?>
