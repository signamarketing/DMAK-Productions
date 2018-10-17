<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie ie6 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta name="author" content="DMAK Productions">
	<meta name="dcterms.rightsHolder" content="Copyright DMAK Productions 2014. All Rights Reserved.">
	<meta name="keywords" content="[ENTER KEYWORDS]"/>

	<!-- icons and favicons -->

	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.min.css">
	<title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>

	<!-- keep Modernizr at top, all other JS at bottom -->
	<!-- <script src="<?php bloginfo('template_directory'); ?>/_/js/modernizr-1.7.min.js"></script> -->

	<?php wp_head(); ?>
	
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-P598F3');</script>
<!-- End Google Tag Manager -->
	
</head>

<body <?php body_class($class); ?>> 

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-P598F3"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

	<header id="headerbg" class="bg headerstick">
		<div id="header" class="container insidepad">
			<div id="logo-and-mobile-menu-btn">
				<a href="<?php echo get_option('home'); ?>/" title="DMAK Productions" id="logo"><img alt="DMAK Productions" title="DMAK Productions" src="/wp-content/uploads/2018/10/DMAK_Grey_BlackBG-min.jpg"></a>
				<div id="toggle-bar">
    				<a class="navicon mtoggle" href="#"><i class="fa fa-bars"></i></a>
				</div>
			</div>
			<nav class="nav">
				<?php main_nav(); ?>
			</nav>

			<div class="phone-number">
				<p>START YOUR PROJECT</p>
				<a href="tel:<?php the_field('phone_number', page-id-1205); ?>"><i class="fa fa-phone"></i><?php the_field('phone_number', page-id-1205); ?></a>
				<!-- PHONE NUMBER CHANGED THROUGH ADVANCED CUSTOM FIELDS CONTACT PAGE -->
			</div>


			<nav id="mobilenav" class="nav mobile">
				<?php main_nav(); ?>
			</nav>
		</div>
	</header>

	<header id="floatheaderbg" class="bg headerstick">
		<div id="floatheader" class="container insidepad">
			<a href="<?php echo get_option('home'); ?>/" title="DMAK Productions" id="floatlogo"><img alt="floating header logo" title="dmak productions" src="/wp-content/uploads/2018/10/DMAK_Grey_BlackBG-min.jpg"></a>

			<nav class="nav">
				<?php main_nav(); ?>
			</nav>

			<div class="float-phone-number">
				<p>START YOUR PROJECT</p>
				<a href="tel:<?php the_field('phone_number', page-id-1205); ?>"><i class="fa fa-phone"></i><?php the_field('phone_number', page-id-1205); ?></a>
				<!-- PHONE NUMBER CHANGED THROUGH ADVANCED CUSTOM FIELDS CONTACT PAGE -->
			</div>

		</div>
	</header>