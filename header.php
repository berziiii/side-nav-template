<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title>
  <?php if ( is_category() ) {
		echo single_cat_title(); echo ' | '; bloginfo( 'name' ); echo ' | '; echo 'Northeastern University';
	} elseif ( is_tag() ) {
		echo 'Tag Archive for &quot;'; single_tag_title(); echo '&quot; | '; bloginfo( 'name' );  echo ' | '; echo 'Northeastern University';
	} elseif ( is_archive() ) {
		wp_title(''); echo ' Archive | '; bloginfo( 'name' );  echo ' | '; echo 'Northeastern University';
	} elseif ( is_search() ) {
		echo 'Search for &quot;'.wp_specialchars($s).'&quot; | '; bloginfo( 'name' ); echo ' | '; echo 'Northeastern University';
	} elseif ( is_home() || is_front_page() ) {
		bloginfo( 'name' ); echo ' | '; bloginfo( 'description' ); echo ' | '; echo 'Northeastern University';
	}  elseif ( is_404() ) {
		echo 'Error 404 Not Found | '; bloginfo( 'name' ); echo ' | '; echo 'Northeastern University';
	} elseif ( is_single() ) {
		echo wp_title(''); echo ' | '; bloginfo( 'name' ); echo ' | '; echo 'Northeastern University';
	} else {
		echo wp_title(''); echo ' | '; bloginfo( 'name' ); echo ' | '; echo 'Northeastern University';
	} ?>
  </title>

	<meta name="description" content="<?php wp_title(''); echo ' | '; bloginfo( 'description' ); ?>" />
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<meta name="viewport" content="width=device-width; initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0"/><?php /* Add "maximum-scale=1" to fix the Mobile Safari auto-zoom bug on orientation changes, but keep in mind that it will disable user-zooming completely. Bad for accessibility. */ ?>
	<link rel="icon" href="<?php bloginfo('template_url'); ?>/favicon.ico" type="image/x-icon" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'rss2_url' ); ?>" />
	<link rel="alternate" type="application/atom+xml" title="<?php bloginfo( 'name' ); ?>" href="<?php bloginfo( 'atom_url' ); ?>" />
	<?php wp_enqueue_script("jquery"); /* Loads jQuery if it hasn't been loaded already */ ?>
	<?php /* The HTML5 Shim is required for older browsers, mainly older versions IE */ ?>
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?> <?php /* this is used by many Wordpress features and for plugins to work proporly */ ?>
	<?php /* Remove the Less Framework CSS line to not include the CSS Reset, basic styles/positioning, and Less Framework itself */?>


  <link type="text/css" rel="stylesheet" href="http://fast.fonts.com/cssapi/bec9bb03-a56a-4183-97b2-4d5fd50eeed6.css"/>
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700" rel="stylesheet">
  <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/index.min.css" />
  <script src="http://www.northeastern.edu/scripts/modernizr-1.7.min.js" type="text/javascript"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js" type="text/javascript" ></script>

</head>

<body <?php body_class(); ?>>
  <div id="main"><!-- this encompasses the entire Web site -->
    <div id="body">
      <div class="container">
