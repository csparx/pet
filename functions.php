<?php
function cns_enqueue_style() {
  wp_enqueue_script('jquery');
    if ( is_child_theme() ) {
      // load parent stylesheet first if this is a child theme
      wp_enqueue_style( 'parent-stylesheet', trailingslashit( get_template_directory_uri() ) . 'style.css', false );
    }
    // load active theme stylesheet in both cases
    wp_enqueue_style( 'theme-stylesheet', get_stylesheet_uri(), false );
    wp_enqueue_style( 'media-query', get_template_directory_uri() . '/assets/css/media.css' );
    wp_enqueue_script( 'base', get_template_directory_uri() . '/assets/js/base.js', array( 'jquery' ), true );

    // if( is_home() ){
    // }
}

add_action( 'wp_enqueue_scripts', 'cns_enqueue_style' );

// Register menu
function register_main_menu() {
  register_nav_menu('primary-menu',__( 'Primary Menu' ));
}
add_action( 'init', 'register_main_menu' );

// Adds Featured Image to posts
add_theme_support( 'post-thumbnails', array( 'post', 'page' ) );
