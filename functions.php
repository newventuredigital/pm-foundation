<?php
function pm_foundation_styles() {
  wp_enqueue_style( 'foundation-normalize', get_template_directory_uri() . '/css/normalize.min.css' );
  wp_enqueue_style( 'foundation', get_template_directory_uri() . '/css/foundation.min.css' );
  wp_enqueue_style( 'pm_foundation-style', get_template_directory_uri() . '/style.css' );
  wp_enqueue_style( 'wordpress-helper', get_template_directory_uri() . '/css/wp.min.css' );
  wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,700,700italic,900,900italic' );
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

if (function_exists('acf_add_options_page')) {
  acf_add_options_page('Theme Options');
}


add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );

add_theme_support('menus');
function register_main_nav_menu() {
  register_nav_menu('main-nav-menu',__( 'Main Nav Menu' ));
}
add_action( 'init', 'register_main_nav_menu' );

/*
// Register a Sidebar
function a_sidebar() {
  $args = array(
    'id'            => 'a_sidebar',
    'class'         => 'a-sidebar',
    'name'          => 'A Sidebar',
    'description'   => 'A Sidebar that appears ______',
  );
  register_sidebar( $args );
}
add_action( 'widgets_init', 'a_sidebar' );
*/

// Register a Custom Post Type
/*
function custom_post_type() {
  $labels = array(
    'name'                => 'Plural',
    'singular_name'       => 'Singluar',
    'menu_name'           => 'Plural',
    'name_admin_bar'      => 'Plural',
    'parent_item_colon'   => 'Parent Singluar:',
    'all_items'           => 'All Plural',
    'add_new_item'        => 'Add New Singluar',
    'add_new'             => 'Add New',
    'new_item'            => 'New Singluar',
    'edit_item'           => 'Edit Singluar',
    'update_item'         => 'Update Singluar',
    'view_item'           => 'View Singluar',
    'search_items'        => 'Search Plural',
    'not_found'           => 'Not found',
    'not_found_in_trash'  => 'Not found in Trash',
  );
  $args = array(
    'label'               => 'Singluar',
    'description'         => 'Singluars shown on the home page.',
    'labels'              => $labels,
    'supports'            => array( 'title', 'revisions'),
    'hierarchical'        => false,
    'public'              => true,
    'show_ui'             => true,
    'show_in_menu'        => true,
    'menu_position'       => 5,
    'menu_icon'           => 'dashicons-awards',
    'show_in_admin_bar'   => true,
    'show_in_nav_menus'   => true,
    'can_export'          => true,
    'has_archive'         => true,    
    'exclude_from_search' => false,
    'publicly_queryable'  => true,
    'capability_type'     => 'page',
  );
  register_post_type( 'power_award', $args );}
add_action( 'init', 'custom_post_type', 0 );
*/

?>