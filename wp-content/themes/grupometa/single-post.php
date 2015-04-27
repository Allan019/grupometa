<?php get_header(); ?>

	<main role="main" class="main-2">
	<!-- section -->
	<section class="wrapper container12 post-list ">

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class("col-2-3 single-post post-item-1"); ?>>

			<div class="post-list-content">
				<!-- post title -->
				<div class="post-list-category">
					<?php $cat = get_the_category(); echo $cat[0]->name; ?>
				</div>
				<h1>
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
				</h1>
				<!-- /post title -->
				<!-- post details -->
				<div class="author"><?php _e( 'por:', 'html5blank' ); ?> <?php the_author_posts_link(); ?></div>
				<div class="date"><?php the_time('d/m/Y - H:i'); ?></div> <br>
				<!-- /post details -->

				<!-- post thumbnail -->
				<?php /*if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
					<div class=" figure">
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
							<?php the_post_thumbnail('blog'); // Fullsize image for the single post ?>
						</a>
					</div>
				<?php endif; */ ?>
				<!-- /post thumbnail -->

				<div class="post-data">
				<?php the_content(); // Dynamic Content ?>
				</div>

				<!-- <p><?php //_e( 'Categorised in: ', 'html5blank' ); the_category(', '); // Separated by commas ?></p> -->

				<!-- <p><?php //_e( 'This post was written by ', 'html5blank' ); the_author(); ?></p> -->

				<?php //edit_post_link(); // Always handy to have Edit Post Links available ?>


				<div class="clearfix"></div>
				
				<?php echo do_shortcode('[wpsr_socialbts type="32px"]'); ?>
				<?php if (get_the_tags() != ''): ?>
					
				<div class="post-tags">
				<?php the_tags( __( 'Tags  |  ', 'html5blank' ), ', ', '<br>'); // Separated by commas with a line break at the end ?>
				</div>
				<?php endif ?>
				<?php comments_template(); ?>

			</div>
		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article class="col-2-3 sidebar">

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>
			
			<aside class="col-1-3 sidebar">
				<?php  if (dynamic_sidebar('Blog')) { get_sidebar('Blog'); } ?>
			<?php  //if (dynamic_sidebar('Ebook')) { get_sidebar('Ebook'); } ?>

			</aside>

	</section>
	<!-- /section -->
	</main>


<?php get_footer(); ?>