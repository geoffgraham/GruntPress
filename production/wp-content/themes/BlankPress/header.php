<?php
/**
 * HEADER
 * @package WordPress
 * @subpackage BlankPress
 * @since BlankPress 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html no-js <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
  
  <!--[if (lt IE 9) & (!IEMobile)]>
    <link rel="stylesheet" href="lib/styles/ie-min.css" />
  <![endif]-->
</head>

<body <?php body_class(); ?>>

  <header role="banner">
    <div class="wrapper" role="row">
      <h1><a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a></h1>
    </div> <!-- wrapper -->
  </header>