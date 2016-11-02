<?php

/**
 *    WP Enqueue Stylesheets
 */
if ( ! function_exists( 'illdy_enqueue_stylesheets' ) ) {
	add_action( 'wp_enqueue_scripts', 'illdy_enqueue_stylesheets' );

	function illdy_enqueue_stylesheets() {

		// Google Fonts
		$google_fonts_args = array(
			'family' => 'Source+Sans+Pro:400,900,700,300,300italic',
		);

		// WP Register Style
		wp_register_style( 'illdy-google-fonts', add_query_arg( $google_fonts_args, 'https://fonts.googleapis.com/css' ), array(), null );

		// WP Enqueue Style
		if ( get_theme_mod( 'illdy_preloader_enable', 1 ) == 1 ) {
			wp_enqueue_style( 'illdy-pace', get_template_directory_uri() . '/layout/css/pace.min.css', array(), '', 'all' );
		}

		wp_enqueue_style( 'illdy-google-fonts' );
		wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/layout/css/bootstrap.min.css', array(), '3.3.6', 'all' );
		wp_enqueue_style( 'bootstrap-theme', get_template_directory_uri() . '/layout/css/bootstrap-theme.min.css', array(), '3.3.6', 'all' );
		wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/layout/css/font-awesome.min.css', array(), '4.5.0', 'all' );
		wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/layout/css/owl-carousel.min.css', array(), '2.0.0', 'all' );
		wp_enqueue_style( 'illdy-main', get_template_directory_uri() . '/layout/css/main.css', array(), '', 'all' );
		wp_enqueue_style( 'illdy-custom', get_template_directory_uri() . '/layout/css/custom.min.css', array(), '', 'all' );
		wp_enqueue_style( 'illdy-style', get_stylesheet_uri(), array(), '1.0.16', 'all' );
	}
}

/* Enqueue parent styles */

add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );
function enqueue_parent_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

/* Allow more HTML tags in sections */

if( !function_exists( 'illdy_sanitize_html' ) ) {

    function illdy_sanitize_html( $input ) {

        $input = force_balance_tags( $input );

        

        $allowed_html = array(

            'a' => array(

                'href' => array(),

                'title' => array()

            ),

            // This is the part I modified

            'ul' => array(

                'class' => array()

            ),

            'br' => array(),

            // This is the part I modified

            'div' => array(

                'class' => array(),

                'id' => array(),

                'style' => array()

            ),

            'em' => array(),

            'i' => array(

                    'class' => array(),

                    'style' => array()

                ),            

            'img' => array(

                'alt' => array(),

                'src' => array(),

                'srcset' => array(),

                'title' => array()

            ),

            'li' => array(),

            'p' => array(

                    'class' => array(),

                    'style' => array()

                ),

            'span' => array(

                    'class' => array(),

                    'style' => array()

                ),

            'strong' => array(),

        );

        $output = wp_kses( $input, $allowed_html );

        return $output;

    }

}

/* Format SpicAndSpan Text (yellow after dot)  */

function add_jQueryScriptsSpicAndSpan() {
wp_register_script('jQueryScriptsSpicAndSpan', 'https://s3.eu-central-1.amazonaws.com/spicandspande/jQueryScriptsSpicAndSpan.js', array('jquery'),'', true);
wp_enqueue_script('jQueryScriptsSpicAndSpan');
}
 
add_action( 'wp_enqueue_scripts', 'add_jQueryScriptsSpicAndSpan' ); 

/* Remove query strings from scripts to speed up the site */
/* This is a recommendation from: https://www.sourcewp.com/remove-query-strings-static-resources/ */

function _remove_script_version( $src ){
$parts = explode( '?ver', $src );
return $parts[0];
}
add_filter( 'script_loader_src', '_remove_script_version', 15, 1 );
add_filter( 'style_loader_src', '_remove_script_version', 15, 1 );