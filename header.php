<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title><?php wp_title('|', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	<?php wp_head(); ?>
	<?php include('favicon.php'); ?>
</head>

<body <?php body_class(); ?>>

<!-- Start off Canvas Opening -->
<div class="off-canvas-wrap" data-offcanvas>
<div class="inner-wrap">
<aside class="left-off-canvas-menu">
<?php wp_nav_menu(array('container' => false, 'theme_location' => 'main-nav-menu', 'items_wrap' => '<nav class="%2$s"><ul>%3$s</ul></nav>')); ?>
</aside>
<!-- End off Canvas Opening -->

<header>
	<div class="row">
		<div class="columns">
			<!-- Logo Image Link -->
			<div class="logo">
				<a href="<?php bloginfo('url'); ?>">
					<img src="<?php // bloginfo('template_directory'); ?>http://placehold.it/260x80" alt="<?php bloginfo('name'); ?>">
				</a>
			</div>

			<!-- Menu with Background -->
			<?php wp_nav_menu(array(
				'container' => false, 'theme_location' => 'main-nav-menu', 'items_wrap' => '<nav class="show-for-large-up background %2$s"><ul>%3$s</ul></nav>')); ?>
				
			<!-- Flush Menu w/No Background -->
			<?php wp_nav_menu(array('container' => false, 'theme_location' => 'main-nav-menu', 'items_wrap' => '<nav class="show-for-large-up flush %2$s"><ul>%3$s</ul></nav>')); ?>
			

			<a class="left-off-canvas-toggle hide-for-large-up" href="#" ><i class="fa fa-bars"></i> Menu</a>
		</div>
	</div>
</header>