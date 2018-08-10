<?php

add_action( 'wp_enqueue_scripts', 'enqueue_child_theme_styles', PHP_INT_MAX);

function enqueue_child_theme_styles() {
  wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
  wp_enqueue_style('ordered-eating-styles', get_stylesheet_directory_uri() . '/css/main.css', array(), filemtime( get_stylesheet_directory() . '/css/main.css' ) );
}



?>
