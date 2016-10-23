<?php

/* Enqueue parent styles */

add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );
function enqueue_parent_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

/* Enqueue other styles */

add_action( 'wp_enqueue_scripts', 'illdy_enqueue_stylesheets' );
function enqueue_flag_sprites() {
	/* flag sprites */
	wp_enqueue_style( 'flags', get_template_directory_uri() . '/css-sprites'/flags.css);
}