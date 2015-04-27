<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section class="wrapper container12">


		<?php while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class('page simple-page col-2-3'); ?>>

				<header class="page-title">
					<h1><?php the_title(); ?></h1>
				</header>

				<div class="content">
					<?php the_content(); ?>
				</div>

			</article>
			<!-- /article -->
			<aside class="col-1-3">
				<?php  if (dynamic_sidebar('Newsletter')) { get_sidebar('Newsletter'); } ?>
			</aside>
			<div class="clearfix"></div>
			<br><br><br>

		<?php endwhile; ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
