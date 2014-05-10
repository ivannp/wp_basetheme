<?php
/**
 * The template for displaying header on any page
 *
 */
?>
<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

        <!--[if lt IE 9]>
        <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
        <![endif]-->

        <?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<!-- wrapper -->
		<div class="wrapper">
			<!-- header -->
			<header class="header clearfix" role="banner">
					<a class="logo" href="<?php echo home_url(); ?>">
						<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="">
					</a>
					<div class="hdr-cta-cont">
						<?php
							wp_nav_menu(array(
								'theme_location'  => 'header-menu',
								'container'       => false,
								'container_class' => '',
								'container_id'    => '',
								'menu_class'      => 'hdr-menu',
								'menu_id'         => '',
								'before'          => '',
								'after'           => '',
								'depth'           => 1,
							));
							dynamic_sidebar('hdr-cta');

						?>

					</div>
					<!-- nav -->
					<nav class="nav clearfix" role="navigation">
						<?php
							wp_nav_menu(array(
								'theme_location'  => 'main-menu',
								'menu_class'      => 'main-menu clearfix',
								'menu_id'         => '',
								'before'          => '',
								'after'           => '',
								'depth'           => 2,
							));
						?>
					</nav>
					<!-- /nav -->

			</header>
		</div>
			<!-- /header -->
