			<!-- footer -->
			<section class="footer-widgets " role="widgets">
			
				<!-- wrapper -->
				<div class="wrapper container12">
					<div class="col-1-3">

						<?php  if (dynamic_sidebar('Box Footer 1')) { get_sidebar('Box Footer 1'); } else { ?>
						<h5>Unidades Grupo Meta</h5>
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
						<?php } ?>
					</div>
					<div class="col-1-3">
						<?php  if (dynamic_sidebar('Box Footer 2')) { get_sidebar('Box Footer 2'); } else { ?>
						<h5>Materiais Educativos</h5>
						<p>Baixe e-books com conteúdo gratuito e de qualidade para que você aprenda muito mais sobre como gerir sua empresa.</p>

						<a href="/materiais-educativos" class="footer-ebook">
							<img src="/wp-content/themes/grupometa/img/ebook.png" alt="Aprenda mais e GRATUITAMENTE">
						</a>
						<?php } ?>
					</div>
					<div class="col-1-3">
						<?php  if (dynamic_sidebar('Box Footer 3')) { get_sidebar('Box Footer 3'); } else { ?>
						<h5>Nossos canais sociais</h5>

						<ul class="social">
							<li>
								<a target="_blank" href="https://www.facebook.com/grupometaonline"><i class="facebook"></i> Acesse nosso <strong>facebook</strong></a>
							</li>
							<li>
								<a target="_blank" href="https://www.linkedin.com/company/2720943"><i class="linkedin"></i>Acesse nosso <strong>linkedin</strong></a>
							</li>
							<li>
								<a target="_blank" href="https://twitter.com/grupometaonline"><i class="twitter"></i>Acesse nosso <strong>twitter</strong></a>
							</li>
						</ul>
						<?php } ?>
					</div>
				</div>
				<!-- /wrapper -->
			</section>
			<!-- /footer -->

			<!-- footer -->
			<footer class="footer " role="contentinfo">
			
				<!-- wrapper -->
				<div class="wrapper container12">
					<div class="column11">
						<!-- copyright -->
						<p class="copyright">
							&copy;  Copyright <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. Todos os direitos reservados 
							
						</p>
						<!-- /copyright -->
					</div>
					<div class="column1">
						<a href="http://www.nextidea.com.br" title="NextIdea" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/logo-next.png" alt="NextIdea"></a>
					</div>
				</div>
				<!-- /wrapper -->

			</footer>
			<!-- /footer -->


		<?php wp_footer(); ?>
    	<script src="<?php echo get_template_directory_uri(); ?>/owl/owl.carousel.min.js"></script>

		<!-- analytics -->
		<script>
		// (function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		// (f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		// l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		// })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		// ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		// ga('send', 'pageview');
		</script>

	</body>
</html>
