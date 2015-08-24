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
</head>
<body>

<header>
  <!-- Logo Image Link -->
  <div class="logo"><a href="<?php echo $site_url; ?>"><img src="#" alt=""></a></div>
  
  <!-- Basic Navigation Menu -->
  <?php wp_nav_menu(array('container' => false, 'menu' => 'Main Nav', 'menu_id' => 'main', 'items_wrap' => '<nav class="inline-list %2$s">%3$s</nav>')); ?>

<?php wp_head(); ?>
</header>