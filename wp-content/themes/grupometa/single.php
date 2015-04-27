<?php get_header(); ?>

	<main role="main">
	<!-- section -->
	<section class="wrapper container12 grupo-list">

	<?php while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class("post-item-1"); ?>>

			<div class="post-list-content">
				<!-- post title -->
				<h1>
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php echo implode('',array_slice(explode(' ',get_the_title()),0,1)); ?> <strong><?php echo implode(' ',array_slice(explode(' ',get_the_title()),1)); ?></strong></a>
				</h1>
				<!-- /post title -->


				<div class="<?php echo (get_field('servicos') != '') ? 'col-1-3' : ''; ?> grupo-content">
					<?php the_content(); // Dynamic Content ?>
				</div>
				<?php if (get_field('servicos') != ''): ?>
				<div class="col-2-3 grupo-servicos">
					<!-- <h2>Serviços Prestados</h2> -->
					<?php echo get_field('servicos'); // Dynamic Content ?>
					<div class="clearfix"></div>
				</div>
				<?php endif ?>
				<div class="clearfix"></div>
		</article>
		<!-- /article -->
		

	<?php endwhile; ?>

	</section>
	<?php if (get_field('quero') == 1): ?>
		
	<section class="wrapper container12 quero-solucao">

		<div class="col-1-3">
			<span class="icon-grow"></span>
			<h2><?php echo (get_field('titulo_form') != "" ) ? get_field('titulo_form') : "QUERO ESTA SOLUÇÃO"; ?></h2>
			<p><?php echo (get_field('texto_form') != "" ) ? get_field('texto_form') : "Preencha os campos abaixo e um de nossos consultores entrará em contato."; ?></p>
		</div>
		<div class="col-2-3 box-form">
			<?php echo (get_field('form') != "" ) ? do_shortcode(get_field('form')) : do_shortcode('[contact-form-7 id="155" title="Quero esta Solução"]'); ?>
		</div>
	</section>
	<?php endif; ?>
				<?php 
				global $post;

				if (get_field('veja_tambem') != '') {
					$myposts = get_field('veja_tambem');
				} else {


					$args = array( 'post_type' => array('meta-contabil', 'meta-multiservice', 'meta-folpag', 'meta-sistemas',  'meta-cloud'), 'orderby'=> 'rand', 'post__not_in' => array($post->ID) );
					$myposts = get_posts( $args );
				}


				if (count($myposts) > 0) :
				?>
	<section class="wrapper container12 veja-tambem">

		<h2>Veja também</h2>
				<div class="box-list">
				<?php 
				foreach ( $myposts as $k => $post ) : setup_postdata($post);  ?>
					<div class="box-list-item list-<?php echo $k ?> csol-1-3">
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
									<?php echo implode(' ',array_slice(explode(' ',get_the_excerpt()),0,20)) ?>...
									</div>
									<div class="box-list-link">
										<a href="<?php the_permalink() ?>">Leia Mais</a>
									</div>
								</article>
							</div>
					</div>
				<?php endforeach; ?>
					</div>
					<div class="clearfix"></div>
		<?php wp_reset_postdata(); ?>
	</section>
<?php endif; ?>
	<!-- /section -->
	</main>


<?php get_footer(); ?>
