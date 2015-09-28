<?php
function pm_foundation_styles() {
  wp_enqueue_style( 'foundation-normalize', get_template_directory_uri() . '/css/foundation/normalize.min.css' );
  wp_enqueue_style( 'foundation', get_template_directory_uri() . '/css/foundation.min.css' );
  wp_enqueue_style( 'pm_foundation-style', get_template_directory_uri() . '/style.css' );
  wp_enqueue_style( 'wordpress-helper', get_template_directory_uri() . '/css/wp.min.css' );
  wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Biryani:200,400,300,600,700,800,900' );
  wp_enqueue_style( 'font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css' );
  wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/vendor/modernizr.js', array(), '1.0.0', false );
}
add_action( 'wp_enqueue_scripts', 'pm_foundation_styles' );

function pm_foundation_scripts() {
  wp_enqueue_script( 'my-jquery', get_template_directory_uri() . '/js/vendor/jquery.js', array(), '1.0.0', true );
  wp_enqueue_script( 'foundation-js', get_template_directory_uri() . '/js/foundation.min.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'pm_foundation_scripts' );

// Custom Excerpt Lengths
function excerpt($limit) {
$excerpt = explode(' ', get_the_excerpt(), $limit);
if (count($excerpt)>=$limit) {
  array_pop($excerpt);
  $excerpt = implode(" ",$excerpt).' &hellip;';
} else { $excerpt = implode(" ",$excerpt);} 
$excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
$link = get_the_permalink();
$excerpt .= ' <a href="' . $link . '" class="read-more">(read more) </a>';
return $excerpt;
}
function content($limit) {
$content = explode(' ', get_the_content(), $limit);
if (count($content)>=$limit) {array_pop($content);
  $content = implode(" ",$content).'...';
} else {$content = implode(" ",$content);
} $content = preg_replace('/\[.+\]/','', $content);
$content = apply_filters('the_content', $content); 
$content = str_replace(']]>', ']]&gt;', $content);
return $content;
}

add_theme_support('menus');
add_theme_support( 'post-thumbnails' ); 

?>