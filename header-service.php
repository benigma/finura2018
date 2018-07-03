<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?php wp_title('|','true','right'); ?></title>
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon-32x32.png" sizes="32x32" />
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon-16x16.png" sizes="16x16" />
	<link href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon-180x180.png" rel="apple-touch-icon" sizes="180x180" />
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/android-chrome-192x192.png" sizes="192x192">
	
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
	
	<?php wp_head(); ?>
</head>
<body>
    <div class="service__container">
        <nav>
            <div class="logo"><a href="<?php echo get_site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/svg/logo-white.svg" alt="Finura" /></a></div>
            <div class="line-menu"><img src="<?php echo get_template_directory_uri(); ?>/img/svg/menu.svg" /></div>
        </nav>
        <div id="navigation__container">
            <div class="menu__structure">
                <div class="close__menu">Close <img src="<?php echo get_template_directory_uri(); ?>/img/svg/arrow-right-small.svg" /></div>
                <?php wp_nav_menu( array( 'theme_location' => 'primary-menu' ) ); ?>
            </div>
        </div>