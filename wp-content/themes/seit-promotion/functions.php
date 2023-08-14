<?php
add_action('wp_enqueue_scripts', 'seitpromotion_styles');
add_action('wp_enqueue_scripts', 'seitpromotion_scripts');

function seitpromotion_styles(){
    wp_enqueue_style('seitpromotion-style', get_stylesheet_uri());
}

function seitpromotion_scripts(){
    wp_enqueue_script( 'swiper-lib', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', array(), null, true );
    wp_enqueue_script( 'swiper', get_template_directory_uri() . '/assets/js/swiper.js', array('swiper-lib'), null, true );
    wp_enqueue_script( 'current-year', get_template_directory_uri() . '/assets/js/date.js', array(), null, true );
    wp_enqueue_script( 'mobile-menu', get_template_directory_uri() . '/assets/js/mobile-menu.js', array(), null, true );   
    wp_enqueue_script( 'modal', get_template_directory_uri() . '/assets/js/modal.js', array(), null, true );   
    wp_enqueue_script( 'scrolling', get_template_directory_uri() . '/assets/js/scrolling.js', array(), null, true );   
}

add_theme_support( 'custom-logo' );


?>