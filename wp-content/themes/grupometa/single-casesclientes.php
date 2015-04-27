<?php get_header(); ?>

	<main role="main">
	<!-- section -->
	<section class="wrapper container12 post-list">

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- post title -->
		<header class="page-title col-2-3">
			<h1>
			
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>

				<!-- post thumbnail -->
				<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
					<div class="figure">
					<?php the_post_thumbnail('case'); // Fullsize image for the single post ?>
					</div>
				<?php endif; ?>
				<!-- /post thumbnail -->
				<div class="clearfix"></div>
			</h1>
		</header>
		<!-- /post title -->
		<!-- article -->
		<section id="post-<?php the_ID(); ?>" <?php post_class("col-2-3 single-post post-item-1"); ?>>


				<article class="page">
				<?php the_content(); // Dynamic Content ?>
				</article>

		</section>
		<!-- /article -->

	<?php endwhile; ?>
	<?php endif; ?>
		
		<aside class="col-1-3 sidebar">
			<?php  if (dynamic_sidebar('Ebook')) { get_sidebar('Ebook'); } ?>
		</aside>

	</section>
	<!-- /section -->
	</main>


<?php get_footer(); ?>
