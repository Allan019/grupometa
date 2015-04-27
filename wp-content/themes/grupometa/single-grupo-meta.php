<?php get_header(); ?>

	<main role="main">
	<!-- section -->
	<section class="wrapper container12 post-list">

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<section id="post-<?php the_ID(); ?>" <?php post_class("single-post single-meta post-item-1"); ?>>


				<article class="page">
					<div class="content col-2-3">
						<?php the_content(); // Dynamic Content ?>
						<!-- <p>Com enfoque global na entrega de serviços, a META responde aos ambientes complexos e desafiadores dos seus clientes, reconhecendo os seus segmentos de indústria, comércio e serviços.</p> -->
						<!-- <p>Interessado nesse serviço? <a href="/contato">Entre em contato</a></p> -->
					</div>
					<div class="figure col-1-3">
						<img src="<?php $img = get_field('logo'); echo $img['sizes']['grupo']; ?>" alt="<?php the_title() ?>">
					</div>
					<div class="clearfix"></div>
				</article>

		</section>
		<!-- /article -->

	<?php endwhile; ?>
	<?php endif; ?>
		

	</section>
	<!-- /section -->
	</main>
	<section class="wrapper container12 grupo-meta-diferenciais">
		<header class="header-title header-title-grupo">

		<?php 
			$title = (get_field('titulo_diferenciais') != "") ? get_field('titulo_diferenciais') : 'Conheça nossos diferenciais';

			$title = explode(' ',$title);
			$ini = array_slice($title, 0, count($title) - 1);
			$end = $title[count($title) - 1];


				$args = array( 'post_type' => (get_field('tipo') != '' ? get_field('tipo') : $post->post_name), 'order'=> 'ASC', 'meta_key'		=> 'ordem', 'orderby'	=> 'meta_value_num', 'posts_per_page' => '9999'  );
				$myposts = get_posts( $args );

				if (count($myposts) > 0) {
		 ?>
			<h2><?php echo implode(' ',$ini); ?> <strong><?php echo $end; ?></strong></h2>
			<?php } ?>
		</header>

		<?php $hasExtra = 0; ?>
		<div class="col-2-3">

				<?php 
				global $post; ?>
				<div class="box-list">
				<?php 
				foreach ( $myposts as $k => $post ) : setup_postdata($post); $hasExtra = 1;  ?>
					<div class="box-list-item list-<?php echo $k ?> col-2">
							<figure>
								<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('servicos'); ?></a>
							</figure>
							<div class="box-list-content">
								<header>
									<div class="box-list-category">
										<?php $cat = get_the_category(); echo $cat[0]->name; ?>
									</div>
									<h2 class="box-list-title">
										<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
									</h2>
								</header>
								<article>
									<div class="box-list-excerpt">
									<?php echo implode(' ',array_slice(explode(' ',get_the_excerpt()),0,30)) ?>...
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

			<?php $icon = get_field('icone'); 

			?>
			<style>
				.widget-ebook .header-ebook .ebook-qualidade span { background: url(<?php echo $icon['url'] ?>) 0 0 no-repeat; }
				.widget-ebook .header-ebook .ebook-text strong,
				.widget-ebook .header-ebook .ebook-qualidade,
				.widget-ebook .content-ebook strong,
				.single-grupo-meta .single-meta .content a,
				.widget-ebook .header-title strong { color: <?php echo get_field('cor'); ?>; }
				.widget-ebook .content-ebook form input[type=submit] { background: <?php echo get_field('cor'); ?>; }
				.widget-ebook .content-ebook form input[type=submit]:hover { background: rgba(<?php echo implode(',',hex2rgb(get_field('cor'))); ?>,0.5); }

				.widget-ebook .header-ebook { background: rgba(<?php echo implode(',',hex2rgb(get_field('cor'))); ?>,0.15); }
			</style>
		<aside class="col-1-3 sidebar">
			<?php  if ($hasExtra && dynamic_sidebar('Ebook')) { get_sidebar('Ebook'); } ?>
		</aside>
	</section>


<?php get_footer(); ?>
