<?php
/**
* Displays all of the <head> section and everything up till <div id="main">
* @package robingreenhouse
*/
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo('name'); ?></title>

		<link rel="profile" href="http://gmpg.org/xfn/11"><!-- What is this? -->
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

		<!-- Icons & Favicons -->
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.png">
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-icon-touch.png" />	

		<!-- Font: Icon
        –––––––––––––––––––––––––––––––––––––––––––––––––– -->
        <script src="https://kit.fontawesome.com/3798695583.js" crossorigin="anonymous"></script>
		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?> style="background:url(<?php the_field('bg_image','option'); ?>;">
		<header> 
			<nav class="navbar navbar-expand-md navbar-offcanvas"> 
				<div class="container">
					<?php if ( is_front_page() && is_home() ) : ?>
						<h1><?php bloginfo( 'name' ); ?></h1>
					<?php else : ?>
						<h1><a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
								<?php bloginfo( 'name' ); ?></a></h1>
					<?php endif; ?>
					
					<?php /* Toggle: And works with the below wp_nav_menu
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> 
						<span class="navbar-toggler-icon"></span> 
					</button>
					*/ ?>

					<div class="d-md-none">
						<button class="btn btn-primary atmButtonNav" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i class="fas fa-bars"></i></button>
					</div>
					
					<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
					 	<div class="offcanvas-header">
					    	<h2 id="offcanvasRightLabel">Logo</h2>
							<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"><i class="fas fa-lg fa-times"></i></button>
					 	</div>
						<div class="offcanvas-body">
							<?php robingreenhouse_nav(); ?>
					    </div>
					</div>
					
					<?php /*
						1. Set wrapper 
						2. Get Template part 
						3. 4 to choose from: offcanvas, offcanvas-topbar, title-bar, topbar 
						4. Pulls in '<?php joints_top_nav(); ?>abd that is then stipulated from 'functions.php' via:
							// Register custom menus and menu walkers
							require_once(get_template_directory().'/functions/menu.php'); 
					*/ ?>
				</div> 
			</nav> 
		</header>
		<main style="background-color: rgba(0,0,0,<?php the_field('bg_overlay_value','option'); ?>);">
