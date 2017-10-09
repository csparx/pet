<?php
function cns_enqueue_style() {
  wp_enqueue_script('jquery');
    if ( is_child_theme() ) {
      // load parent stylesheet first if this is a child theme
      wp_enqueue_style( 'parent-stylesheet', trailingslashit( get_template_directory_uri() ) . 'style.css', false );
    }
    // load active theme stylesheet in both cases
    wp_enqueue_style( 'theme-stylesheet', get_stylesheet_uri(), false );
    // wp_enqueue_style( 'media-query', get_template_directory_uri() . '/assets/css/media-query.css' );
    // wp_enqueue_style( 'list-nav', get_template_directory_uri() . '/assets/css/listnav.css' );
    // wp_enqueue_script( 'jquery-listnav', get_template_directory_uri() . '/assets/js/jquery-listnav.min.js', array( 'jquery' ), true );

    // if( is_home() ){
    //   wp_enqueue_script( 'theme-stylesheet', get_template_directory_uri() . '/slick/slick.min.js', array( 'jquery' ), true );
    //   wp_enqueue_style( 'parent-stylesheet', trailingslashit( get_template_directory_uri() ) . '/slick/slick.css', false );
    //   wp_enqueue_style( 'parent-stylesheet', trailingslashit( get_template_directory_uri() ) . '/slick/slick-theme.css', false );
    // }
    // wp_enqueue_style( 'parent-stylesheet', trailingslashit( get_template_directory_uri() ) . '/assets/css/media-query.css', false );
}

add_action( 'wp_enqueue_scripts', 'cns_enqueue_style' );