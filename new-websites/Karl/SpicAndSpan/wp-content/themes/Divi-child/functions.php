<?php
function my_theme_enqueue_styles() {

    $parent_style = 'divi-style';
    $child_style = 'child-style';
    $bootstrap_style = 'bootstrap-iso';

    // enqueue isolated bootstrap styles
    wp_enqueue_style( 
        $bootstrap_style, 
        get_stylesheet_directory_uri() . '/assets/css/bootstrap-iso.css'
    );

    wp_enqueue_style( 
        $parent_style, 
        get_template_directory_uri() . '/style.css',
        array( $bootstrap_style ) 
    );

    wp_enqueue_style( $child_style,
        get_stylesheet_directory_uri() . '/style.css',
        array( $bootstrap_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

/* Load intl-tel-input package */

function enqueue_intl_tel_input() {
	wp_enqueue_style(
        'intl-tel-input-css', 
        'https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.13/css/intlTelInput.css', 
        false 
    ); 

	wp_enqueue_script(
        'intl-tel-input-js',
        'https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.13/js/intlTelInput.min.js',
        array('jquery') 
    );

	/* wp_enqueue_script(
        'intl-tel-input-utils-js',
        'https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.13/js/utils.js',
        array('jquery','intl-tel-input-js') 
    ); */
}

function enqueue_jquery_ui() {
	wp_enqueue_style(
        'jquery-ui-css', 
        '//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css', 
        false 
    );

	wp_enqueue_script(
        'jquery-ui-js',
        'https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js',
        array('jquery') 
    );     
}

function enqueue_incons() {
	wp_enqueue_style(
        'font-awesome', 
        'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', 
        false 
    );  
}

function enqueue_vuejs() {

	wp_enqueue_script(
        'vuejs',
        'https://unpkg.com/vue',
        false,
        null
    );     
}

add_action( 'wp_enqueue_scripts', 'enqueue_intl_tel_input' );

add_action( 'wp_enqueue_scripts', 'enqueue_jquery_ui' );

add_action( 'wp_enqueue_scripts', 'enqueue_incons' );

add_action( 'wp_enqueue_scripts', 'enqueue_vuejs' );

?>