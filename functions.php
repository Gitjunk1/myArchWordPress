<?php

define('THEME_ROOT', get_template_directory_uri());  
define('CSS_DIR', THEME_ROOT . '/assets/css');  
define('JS_DIR', THEME_ROOT . '/assets/js');  
define('LIBS_DIR', THEME_ROOT . '/assets/libs');  
define('IMG_DIR', THEME_ROOT . '/assets/images');  


add_action( 'wp_enqueue_scripts', 'arch_styles' );
add_action( 'wp_enqueue_scripts', 'arch_scripts' );


function arch_styles() {
	wp_enqueue_style( 'normolize-style', CSS_DIR . '/normolize.css' );
	wp_enqueue_style( 'magnific-style', LIBS_DIR. '/magnific-popup/magnific-popup.css' );
	wp_enqueue_style( 'slick-style', LIBS_DIR . '/slick/slick.css' );
    wp_enqueue_style( 'main-style', get_stylesheet_uri());
}

function arch_scripts() {
    wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', false, null, true );
	wp_enqueue_script( 'jquery' );

    // wp_enqueue_script( 'slick-script', LIBS_DIR .'/slick/slick.min.js', array(jquery), null, true );
    // wp_enqueue_script( 'magnific-script', LIBS_DIR .'/magnific-popup/jquery.magnific-popup.min.js', array(jquery), null, true );
    // wp_enqueue_script( 'main-script', JS_DIR .'/main.js', array(jquery), null, true );
}
