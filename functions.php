<?php
  function wpbootstrap_my_styles() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'my_style', get_template_directory_uri() . 'style.css' );
  }
  add_action('wp_enqueue_scripts', 'wpbootstrap_my_styles');

  function wpbootstrap_enqueue_scripts() {
    wp_enqueue_script( 'bootstrap_script', get_template_directory_uri() . '/assets/dist/js/bootstrap.bundle.min.js', array (), 1.1, true);
  }
  add_action('wp_enqueue_scripts', 'wpbootstrap_enqueue_scripts');
  	
add_theme_support( 'post-thumbnails' );