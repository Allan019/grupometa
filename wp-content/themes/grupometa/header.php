<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/favicon.png" rel="shortcut icon">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		

		<link href='http://fonts.googleapis.com/css?family=Roboto:300,700,400' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	    <link href="<?php echo get_template_directory_uri(); ?>/owl/owl.carousel.css" rel="stylesheet">
	    <link href="<?php echo get_template_directory_uri(); ?>/owl/owl.theme.css" rel="stylesheet">
		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        // conditionizr.config({
        //     assets: '<?php echo get_template_directory_uri(); ?>',
        //     tests: {}
        // });
        </script>

        <style>

        </style>

	</head>
	<body <?php body_class(); ?>>
	
		<!-- header -->
		<header class="header" role="nav">
			
				<div class="blurheader">
				</div>
			<!-- wrapper -->
			<div class="header-data">
			<div class="wrapper container12">
					
				<!-- logo -->
				<div class="logo column3">
					<a href="<?php echo home_url(); ?>">
						<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
						<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo" class="logo-img">
					</a>
				</div>
				<!-- /logo -->

				<!-- nav -->
				<nav class="nav column9 navbar" role="navigation">
					
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button>
					<?php html5blank_nav(); ?>
				</nav>
				<!-- /nav -->
			</div>
			</div>
			<!-- /wrapper -->
		</header>
		<!-- /header -->

		<!-- header-top -->
		<div class="header-top" role="shortcuts">
			
			<!-- wrapper -->
			<div class="wrapper container12">

				<div class="column5">
					<div class="right">
					<span>ESTÁ PROCURANDO VAGAS? </span>
					<a href="http://www.grupometa.wancorarh.com.br/portalcand/cadastro/" target="_blank" class="button button-clean button-white">ENVIAR CURRÍCULO</a>
					</div>
				</div>
				<div class="column7">
					<div class="">
						<a href="/dicas" target="_blank" class="button button-clean">Dicas</a>
						<a href="http://www.grupometa.wancorarh.com.br/site/" target="_blank" class="button button-clean">Vagas</a>
						<a href="http://www.grupometa.wancorarh.com.br/portalcand/login/" target="_blank" class="button button-clean"><i class="fa fa-male"></i> Acesso Candidatos</a>
						<span class="header-separator"></span>
						<a href="http://grupometa.com/questor/index.htm" target="_blank" class="button button-clean"><i class="fa fa-line-chart"></i> Acesso de Clientes</a>
					</div>
				</div>

				
				<?php /* ?>
				<!-- logo -->
				<div class="logo">
					<a href="<?php echo home_url(); ?>">
						<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
						<img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="Logo" class="logo-img">
					</a>
				</div>
				<!-- /logo -->

				<!-- nav -->
				<nav class="nav" role="navigation">
					<?php //html5blank_nav(); ?>
				</nav>
				<!-- /nav -->
				*/ ?>
			</div>
			<!-- /wrapper -->
		</div>
		<!-- /header-top -->


		<?php  

			$corTexto = get_field('cor_texto'); 
			$pageTitle = get_the_title(); 
			$corFundo = get_field('cor_fundo'); 
			$imagemDestaque = ''; //has_post_thumbnail() ? wp_get_attachment_image_src(get_post_thumbnail_id(), 'header') : ''; 

		?>

		<?php global $post;
		$slug = get_post( $post )->post_name; 
		$_post = $post; 
		$posttype = (get_post_type() == 'meta-multiservice') ? 'meta-rh' : get_post_type();
		?>
		<?php if ($slug != 'home'): ?>

		<?php 
		if (is_tax()) {
			$blog = get_page(291);
				$post = $blog;
			setup_postdata($post);
		}
		elseif ((is_single() || is_home() || is_tag() || is_archive() || is_category()) && ($posttype != 'grupo-meta') && ($posttype != 'oquebusca')) {

			$blog = get_page_by_path($posttype == 'post' ? 'blog' : $posttype);

			if(!$blog) {
				$blog = get_page_by_path($posttype, OBJECT, 'grupo-meta');
			}

			$post = $blog;
			setup_postdata($post);
		} else {

		}
		$url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'header' );


			function hex2rgb($hex) {
			   $hex = str_replace("#", "", $hex);

			   if(strlen($hex) == 3) {
			      $r = hexdec(substr($hex,0,1).substr($hex,0,1));
			      $g = hexdec(substr($hex,1,1).substr($hex,1,1));
			      $b = hexdec(substr($hex,2,1).substr($hex,2,1));
			   } else {
			      $r = hexdec(substr($hex,0,2));
			      $g = hexdec(substr($hex,2,2));
			      $b = hexdec(substr($hex,4,2));
			   }
			   $rgb = array($r, $g, $b);
			   //return implode(",", $rgb); // returns the rgb values separated by commas
			   return $rgb; // returns an array with the rgb values
			}

		 ?>

		 <?php if (get_field('cor') != ''): ?>
		 	
			<?php $icon = get_field('icone'); 


			?>
			<style>
				.icon-grow { background: url(<?php echo $icon['url'] ?>) 0 0 no-repeat; }
				.grupo-list .grupo-servicos h2,
				.grupo-list .grupo-servicos li,
				.quero-solucao h2 { color: <?php echo get_field('cor'); ?>; }
				.quero-solucao .box-form input[type=submit] { background: <?php echo get_field('cor'); ?>; } 
				.quero-solucao .box-form input[type=submit]:hover { background: rgba(<?php echo implode(',',hex2rgb(get_field('cor'))); ?>,0.5); }

			</style>
		 <?php endif ?>
		 <!-- .header-page -->
		 <style>
			.blurheader { background: url(<?php echo ($imagemDestaque != "") ? $imagemDestaque[0] : $url[0]; ?>) top center repeat-x; }
		 </style>
		<div class="header-page" style="background: url(<?php echo ($imagemDestaque != "") ? $imagemDestaque[0] : $url[0]; ?>) top center repeat-x;">
			<div class="data-color">
				<style>
					<?php if (get_field('cor_texto') != "") : ?>
						.header-page h1, .header-page #breadcrumbs li a, .header-page #breadcrumbs li { color: <?php echo get_field('cor_texto'); ?>; }
					<?php endif; ?>
					<?php if (get_field('cor_fundo') != "") : ?>
						.data-color { background: <?php echo get_field('cor_fundo'); ?>;  background: rgba(<?php echo implode(',',hex2rgb(get_field('cor_fundo'))); ?>,0.9); }
					<?php endif; ?>

				</style>
				<div class="wrapper container12">
					<?php the_breadcrumb($_post) ?>
					<h1>
						<?php 
						/*if (in_array($posttype,array('casesclientes','grupo-meta'))) {
										
							echo get_the_title($_post);
						} else the_title();*/
							echo $pageTitle;
						?>
					</h1>
				</div>
			</div>
		</div>
		<?php 

			$post = $_post;
			setup_postdata($post);
			 ?>
		<!-- /.header-page -->
		<?php endif ?>