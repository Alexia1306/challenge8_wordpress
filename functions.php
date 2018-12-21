<?php
/**
* @package themeAlex
*/


function themeAlex_scripts() {
    wp_enqueue_style( 'bootstrap-CSS', '/node_modules/bootstrap/dist/css/bootstrap.min.css');
    wp_enqueue_style( 'themeAlex-style', get_stylesheet_uri()); //pas besoin de precicer le nom du css ca y va directement //
    wp_enqueue_script( 'jquery', '/node_modules/jquery/dist/jquery.min.js', array(), '20151215', true  ) ;
    wp_enqueue_script( 'bootstrap-JS', '/node_modules/bootstrap/dist/js/bootstrap.min.js' );
    wp_enqueue_script( 'themeAlex-JS', '/js/script.js' );
}
add_action( 'wp_enqueue_scripts', 'themeAlex_scripts' );





// pour la nav wordpress
function register_my_menu() {
	register_nav_menu('new-menu',__( 'New Menu' ));
  }
  add_action( 'init', 'register_my_menu' );



  function init_theme() {
      add_theme_support( 'post-thumbnails' );

  }
  add_action( 'after_setup_theme', 'init_theme' );
