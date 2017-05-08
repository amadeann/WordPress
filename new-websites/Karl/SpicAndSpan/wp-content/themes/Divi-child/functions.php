<?php
function my_theme_enqueue_styles() {

    $parent_style = 'parent-style';
    $child_style = 'child-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( $child_style,
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
    // enqueue isolated bootstrap styles
    wp_enqueue_style( 
        'bootstrap-iso', 
        get_stylesheet_directory_uri() . '/assets/css/bootstrap-iso.css',
        array( $parent_style ) 
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
?>