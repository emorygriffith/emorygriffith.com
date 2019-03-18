<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		<!-- <link href="https://fonts.googleapis.com/css?family=Roboto+Slab|Roboto:300,400" rel="stylesheet"> -->

		<!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
		<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> -->



		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // end analytics ?>

	</head>

	<body class="site" <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

	<div class="nav container">
		<div class="nav-menu-items">
				<?php wp_nav_menu(array(
					'container' => false,                           // remove nav container
					'container_class' => 'menu cf',                 // class of container (should you choose to use it)
					'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name
					'menu_class' => 'nav-li',     				    // adding custom nav class
					'theme_location' => 'main-nav',                 // where it's located in the theme
					'before' => '',                                 // before the menu
					'after' => '',                                  // after the menu
					'link_before' => '',                            // before each link
					'link_after' => '',                             // after each link
					'depth' => 0,                                   // limit the depth of the nav
					'fallback_cb' => '',
						));
				?>
		</div>
	</div> 
	

	<h1 class="name container"><?php bloginfo('name'); ?></h1>

	
	<div class="main-body container">
