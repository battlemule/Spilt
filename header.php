<!doctype html>
<!--
    Spilt Clothing - header.php
    Designed and Coded by Robert Willis.
    Version 2.0. Updated 23 September 2016.
-->

<!--
    Allows targeting of individual browser versions for specific styling.
-->
<!--[if lt IE 7 ]> <html class="ie ie6 ie-lt10 ie-lt9 ie-lt8 ie-lt7 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]> <html class="ie ie7 ie-lt10 ie-lt9 ie-lt8 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]> <html class="ie ie8 ie-lt10 ie-lt9 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]> <html class="ie ie9 ie-lt10 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->
<!-- the "no-js" class is for Modernizr. -->

<head>

    <!-- Import Permanent Marker font from Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Permanent+Marker' rel='stylesheet'
    type='text/css'>

    <!-- Charset -->
    <meta charset="<?php bloginfo('charset'); ?>">
	
    <!-- Always force latest IE rendering engine (even in intranet) -->
    <!--[if IE ]>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <![endif]-->
	
    <!-- Site meta-data -->
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <meta name="title" content="<?php wp_title( '|', true, 'right' ); ?>">
    <meta name="author" content="Robert Willis" />
    <meta name="description" content="<?php bloginfo('description'); ?>" />
	
    <!-- Copyright meta-data -->
    <meta name="Copyright" content="Copyright &copy; <?php bloginfo('name'); ?> <?php echo date('Y'); ?>. All Rights Reserved.">
	
    <!-- reset.css -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/reset.css" />
    <!-- style.css -->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css" />
	
    <!-- Lea Verou's Prefix Free, lets you use un-prefixed properties in your CSS files -->
    <script src="<?php bloginfo('template_directory'); ?>/_/js/libs/prefixfree.min.js"></script>
	
    <!-- This is an un-minified, complete version of Modernizr. -->
    <script src="<?php bloginfo('template_directory'); ?>/_/js/libs/modernizr-2.7.1.dev.js"></script>

    <!-- End of head -->
    <?php wp_head(); ?>

</head>

<!-- Body -->
<body <?php body_class(); ?>>

<!-- Wrapper using HTML5 Reset clearfix -->
<div class="wrapper clearfix">
	
    <!-- Header -->
    <header>
        
        <!-- For search engines, not visible on page -->
        <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( 
		    get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); 
		    ?></a></h1>
        
        <!-- Logo in header links to home -->
        <a id="logo" href="<?php echo home_url(); ?>"> <img src="<?php bloginfo('template_directory'); ?>/_/img/spilt-logo-header.png"> </a>
        
        <!-- Navigation -->
        <nav id="nav" role="navigation">
            <?php wp_nav_menu( array('menu' => 'primary') ); ?>
        </nav>
        
    <!-- End Header -->
    </header>