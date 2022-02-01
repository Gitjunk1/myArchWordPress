<?php

add_action( 'wp_enqueue_scripts', 'arch_styles' );
add_action( 'wp_enqueue_scripts', 'arch_scripts' );


function arch_styles() {
	wp_enqueue_style( 'normolize-style', get_template_directory_uri() . '/assets/css/normolize.css' );
	wp_enqueue_style( 'magnific-style', get_template_directory_uri() . '/assets/libs/magnific-popup/magnific-popup.css' );
	wp_enqueue_style( 'slick-style', get_template_directory_uri() . '/assets/lobs/slick/slick.css' );
    wp_enqueue_style( 'main-style', get_stylesheet_uri() ); 
}

function arch_scripts() {
    wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', false, null, true );
	wp_enqueue_script( 'jquery' );

    // wp_enqueue_script( 'slick-script', get_template_directory_uri() .'/assets/libs/slick/slick.min.js', array(jquery), null, true );
    // wp_enqueue_script( 'magnific-script', get_template_directory_uri() .'/assets/libs/magnific-popup/jquery.magnific-popup.js', array(jquery), null, true );
    // wp_enqueue_script( 'main-script', get_template_directory_uri() .'/assets/js/main.js', array(jquery), null, true );
}
