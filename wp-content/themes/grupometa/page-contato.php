<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="wrapper container12">


		<?php while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class('page simple-page col-2'); ?>>

				<header class="page-title">
					<h1><?php the_title(); ?></h1>
				</header>

				<div class="content">
					<?php the_content(); ?>
				</div>

			</article>
			<!-- /article -->
			<aside class="col-1-3 page">
						<h2>Unidades Grupo Meta</h2>
				<?php $args = array( 'post_type' => 'unidades', 'order'=> 'ASC', 'posts_per_page' => '9999'  );
						$myposts = get_posts( $args );
						foreach ( $myposts as $k => $post ) :  ?>
							<div class="list-unidades list-<?php echo $k ?> ">
								<figure>
									<?php the_post_thumbnail('thumb100'); ?>
								</figure>
								<div class="content">
									<p class="title"><?php the_title() ?></p>
									<p class="address"><?php echo get_field('endereco') ?></p>
									<p class="address"><?php echo get_field('bairro') ?></p>
									<p class="phone"><?php echo get_field('telefone') ?></p>
								</div>
								<div class="clearfix"></div>
							</div>
						<?php endforeach; ?>
						<?php wp_reset_postdata(); ?>
			</aside>
			<div class="clearfix"></div>
			<br><br><br>

		<?php endwhile; ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
