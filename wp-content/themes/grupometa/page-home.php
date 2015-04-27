<?php get_header(); ?>

	<section class="banner" role="banner">
		<div class="banner-list" id="owl-demo">
		<?php 
			$args = array( 'post_type' => 'banner', 'order'=> 'ASC', 'meta_key'		=> 'ordem', 'orderby'		=> 'meta_value_num', );
			$myposts = get_posts( $args );
			foreach ( $myposts as $k => $post ) :  ?>
				<div class="item">
				<?php $img = get_field('imagem') ?>
					<?php if (get_field('url') != ''): ?>
						
					<a href="<?php echo get_field('url'); ?>" title="<?php the_title(); ?>" target="<?php echo get_field('clique'); ?>">
					<img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>" alt="">
					</a>
					<?php else : ?>
					<img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>" alt="">
					<?php endif ?>
				</div>
			<?php endforeach; ?>
		</div>
		<?php wp_reset_postdata(); ?>
		<?php the_post(); ?>
	</section>

	<main role="main" class="main">
		<!-- section -->
		<section class="wrapper container12">
			<article class="home-description">
				<?php the_content(); ?>
			</article>

			<section class="o-que-busca">
				<header class="header-title">
					<h2>O que você <strong>busca</strong>?</h2>
					<p>Procure em nossas soluções tudo o que sua empresa precisa para crescer de forma integrada</p>
				</header>
				<?php 
					$args = array( 'post_type' => 'oquebusca', 'order'=> 'ASC', 'posts_per_page' => '9999'  );
					$myposts = get_posts( $args );
					foreach ( $myposts as $k => $post ) :  
			setup_postdata($post); ?>
						<?php $img = get_field('imagem'); ?>
						<div class="list-item list-<?php echo $k ?> ">
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
								<figure>
									<img src="<?php echo wp_get_attachment_url( $img['id'] ); ?>" alt="">
									<figcaption><?php the_title(); ?></figcaption>
								</figure>
							</a>
						</div>
					<?php endforeach; ?>
		<?php wp_reset_postdata(); ?>
					<div class="clearfix"></div>
			</section>
	
			<?php /* ?>
			<h1><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>
			*/ ?>
		</section>
		<!-- /section -->
	</main>
	<div role="home-blog" class="home-blog">
		<section class="wrapper container12">
			<div class="col-2-3">
				<header class="header-title">
					<h2>Blog <strong>META</strong></h2>
					<p>Novidades sobre o mercado e o Grupo Meta</p>
				</header>
				<div class="box-list">
				<?php 
				$args = array( 'post_type' => 'post', 'posts_per_page' => '2'  );
				$myposts = get_posts( $args );
				foreach ( $myposts as $k => $post ) : setup_postdata($post);  ?>
					<div class="box-list-item list-<?php echo $k ?> col-2">
							<figure>
								<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('blog-small-list'); ?></a>
							</figure>
							<div class="box-list-content">
								<header>
									<div class="box-list-category">
										<?php $cat = get_the_category(); echo $cat[0]->name; ?>
									</div>
									<h2 class="box-list-title">
										<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
									</h2>
									<div class="box-list-date">
										<?php echo get_the_date('d/m/Y') ?>
									</div>
								</header>
								<article>
									<div class="box-list-excerpt">
									<?php the_excerpt() ?>
									</div>
									<div class="box-list-link">
										<a href="<?php the_permalink() ?>">Leia Mais</a>
									</div>
								</article>
							</div>
					</div>
				<?php endforeach; ?>
		<?php wp_reset_postdata(); ?>
				</div>
			</div>
			<div class="col-1-3">
				<?php  if (dynamic_sidebar('Newsletter')) { get_sidebar('Newsletter'); } ?>
			</div>
			<div class="clearfix"></div>
		</section>
	</div>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
