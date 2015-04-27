<?php 
    global $wp_query; ?>
<?php $i = (isset($wp_query->query['paged']) && $wp_query->query['paged'] > 1) ? 1 : 0; if (have_posts()): while (have_posts()) : the_post(); $i++; ?>

	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class('post-item-'.(($i == 1 || !get_the_post_thumbnail()) ? 'first' : 'others')); ?>>

		<!-- post thumbnail -->
		<div class="post-list-content">
			<?php if ($i == 1): ?>
			<h2>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			</h2>
			<!-- /post title -->
		<?php endif ?>
		</div>
		
		<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
			<?php $img = wp_get_attachment_image_src( get_post_thumbnail_id(), 'blog-header' ); ?>
		<div class="figure <?php echo ($i == 1) ? 'destaque' : ''; ?>" style="background: url(<?php echo ($i == 1) ? $img[0] : '' ?>) center center no-repeat; background-size: 100%;" >
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
			<?php if ($i == 1): ?>
				<?php //the_post_thumbnail('blog-header'); // Declare pixel size you need inside the array ?>
			<?php else: ?>
				<?php the_post_thumbnail('blog-tiny-list'); // Declare pixel size you need inside the array ?>

			<?php endif ?>
			</a>
		</div class="figure">
		<?php endif; ?>
		<!-- /post thumbnail -->

		<div class="post-list-content">
			<!-- post title -->
			<?php if ($i != 1): ?>
			<div class="post-list-category">
				<?php $cat = get_the_category(); echo $cat[0]->name; ?>
			</div>
			<h2> 
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
			</h2>
			<!-- /post title -->
			<?php endif ?>

			<!-- post details -->
			<br>
			<div class="author"><?php _e( 'por:', 'html5blank' ); ?> <?php the_author_posts_link(); ?></div>
			<div class="date"><?php the_time('d/m/Y - H:i'); ?></div>
			<!-- /post details -->
			<?php if ( !get_the_post_thumbnail() || $i == 1) : // Check if thumbnail exists ?>
				<p class="post-data">
					<?php (get_the_excerpt() != '') ? the_excerpt() : implode(' ',array_slice(explode(' ',strip_tags(get_the_content())),0,20)); // Build your custom callback length in functions.php ?>
					<a href="<?php the_permalink() ?>">[LEIA MAIS]</a>
				</p>
			<?php endif ?>
		</div>
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