<?php

/* Enqueue parent styles */

add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );
function enqueue_parent_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

/* Enqueue other styles */

add_action( 'wp_enqueue_scripts', 'enqueue_other_styles' );

function enqueue_other_styles() {
	/* flag sprites */
	wp_enqueue_style( 'flags', get_stylesheet_directory_uri() . '/css-sprites/flags.css');
	wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/bootstrap/css/bootstrap.min.css', array() );
	wp_enqueue_style( 'bootstrap-theme', get_stylesheet_directory_uri() . '/bootstrap/css/bootstrap-theme.min.css', array() );
  wp_enqueue_style( 'flexisel-css', get_stylesheet_directory_uri() . '/jQuery/flexisel/flexisel.css', array() );
}

/* Enqueue scripts  */

add_action( 'wp_enqueue_scripts', 'add_scripts_altair' ); 

function add_scripts_altair() {
 // AA: The scrollbox script is not needed anymore. Remove by end of Jan 2017 if nothing breaks until then
 // wp_enqueue_script( 'scrollbox', get_stylesheet_directory_uri() . '/jQuery/jquery.scrollbox.js', array( 'jquery' ));
  wp_enqueue_script( 'flexisel', get_stylesheet_directory_uri() . '/jQuery/flexisel/jquery.flexisel.js', array( 'jquery' ));
	wp_enqueue_script('jQueryScriptsAltair', get_stylesheet_directory_uri() . '/jQueryAltair.js', array('flexisel'));
	wp_enqueue_script( 'bootstrap-js', get_stylesheet_directory_uri() . '/bootstrap/js/bootstrap.min.js', array( 'jquery' ));
	wp_enqueue_script( 'dynamicCarSelection', get_stylesheet_directory_uri() . '/jQuery/dynamicCarSelection.js', array( 'jquery' ));
}


/* Modify the default footer message */

if ( ! function_exists( 'ample_footer_copyright' ) ) :
function ample_footer_copyright() {
   $site_link = '<a href="' . esc_url( home_url( '/' ) ) . '" title="' . esc_attr( get_bloginfo( 'name', 'display' ) ) . '" ><span>' . get_bloginfo( 'name', 'display' ) . '</span></a>';

   $default_footer_value = sprintf( 'Copyright &copy; %1$s %2$s.', date( 'Y' ), $site_link );

   $ample_footer_copyright = '<div class="copyright">'.$default_footer_value.'</div>';
   echo $ample_footer_copyright;
}
endif;

// remove wp version param from any enqueued scripts
function vc_remove_wp_ver_css_js( $src ) {
    if ( strpos( $src, 'ver=' ) )
        $src = remove_query_arg( 'ver', $src );
    return $src;
}
add_filter( 'style_loader_src', 'vc_remove_wp_ver_css_js', 9999 );
add_filter( 'script_loader_src', 'vc_remove_wp_ver_css_js', 9999 );