<?php

add_action( 'wp_enqueue_scripts', 'arch_styles' );


function arch_styles() {
	wp_enqueue_style( 'normolize-style', get_template_directory_uri() . '/assets/css/normolize.css' );


	wp_enqueue_style( 'main-style', get_stylesheet_uri() ); //hello//
	

// 	wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true );
}