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


// Register Widgets
add_action( 'widgets_init', 'cns_widgets_init' );
function cns_widgets_init() {

    // Register Sidebar Widget
    register_sidebar( array(
        'name' => __( 'Sidebar Widget Area', 'pet' ),
        'id' => 'sidebar-widget-area',
        'description' => __( 'The sidebar widget area', 'pet' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

    // First footer widget area, located in the footer. Empty by default.
    register_sidebar( array(
        'name' => __( 'First Footer Widget Area', 'pet' ),
        'id' => 'first-footer-widget-area',
        'description' => __( 'The first footer widget area', 'pet' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

    // Second Footer Widget Area, located in the footer. Empty by default.
    register_sidebar( array(
        'name' => __( 'Second Footer Widget Area', 'pet' ),
        'id' => 'second-footer-widget-area',
        'description' => __( 'The second footer widget area', 'pet' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

    // Third Footer Widget Area, located in the footer. Empty by default.
    register_sidebar( array(
        'name' => __( 'Third Footer Widget Area', 'pet' ),
        'id' => 'third-footer-widget-area',
        'description' => __( 'The third footer widget area', 'pet' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

    // Fourth Footer Widget Area, located in the footer. Empty by default.
    register_sidebar( array(
        'name' => __( 'Fourth Footer Widget Area', 'pet' ),
        'id' => 'fourth-footer-widget-area',
        'description' => __( 'The fourth footer widget area', 'pet' ),
        'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

}