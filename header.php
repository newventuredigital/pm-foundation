<!doctype html>
<html class="no-js" lang="en">
<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/foundation.css" />
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css" />
  <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/wp.css" />
  <script src="<?php bloginfo('template_directory'); ?>/js/vendor/modernizr.js"></script>
  <link href='http://fonts.googleapis.com/css?family=Crimson+Text:400,400italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- Start off Canvas Opening -->
<div class="off-canvas-wrap" data-offcanvas>
<div class="inner-wrap">
<aside class="left-off-canvas-menu">
  <?php wp_nav_menu(array('container' => false, 'menu' => 'Main Nav', 'menu_id' => 'main', 'items_wrap' => '<nav class="%2$s"><ul>%3$s</ul></nav>')); ?>
</aside>
<!-- End off Canvas Opening -->

<header>
  <div class="row">
    <div class="columns">
      <!-- Logo Image Link -->
      <div class="logo"><a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/x.jpg" alt=""></a></div>
      
      <!-- Basic Navigation Menu -->
      <?php wp_nav_menu(array('container' => false, 'menu' => 'Main Nav', 'menu_id' => 'main', 'items_wrap' => '<nav class="show-for-large-up %2$s"><ul>%3$s</ul></nav>')); ?>
      <a class="left-off-canvas-toggle hide-for-large-up" href="#" ><i class="fa fa-bars"></i></a>
    </div>
  </div>

</header>