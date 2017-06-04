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
        // AA: Enqueue the child theme styles after the parent theme 
		wp_enqueue_style( 'illdy-style', get_stylesheet_uri(), array('parent-style'), '1.0.16', 'all' );
	}
}

/* Enqueue parent styles */

add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );
function enqueue_parent_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

/**

 *    WP Enqueue JavaScripts
    Dequeue the layout/js/scripts.js file to get rid of the problem with smoothScrollAnchors function. Function was breaking my collapsible services section.
    I had to modify a selector in this function, not to call a function on click on #collapsibleServices link

 */

// Notice, that very low prio (100) is set here. This will make sure that the troublesome script is dequed
add_action('wp_enqueue_scripts', 'layout_js_scripts_fix', 100);
function layout_js_scripts_fix()
{
    wp_dequeue_script('illdy-scripts');
    wp_enqueue_script('illdy-scripts-fixed', get_stylesheet_directory_uri().'/layout/js/scripts.js', array('jquery'));
}

/* Allow more HTML tags in sections */

if( !function_exists( 'illdy_sanitize_html' ) ) {

    function illdy_sanitize_html( $input ) {

        $input = force_balance_tags( $input );



        $allowed_html = array(

            'a' => array(

                'class' => array(),

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
    wp_register_script('jQueryScriptsSpicAndSpan', get_stylesheet_directory_uri() . '/jQuery/jQuerySpicAndSpan.js', array('jquery'),'', true);
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

// Check wheter the WooCommerce page is active
// Function comes from here: https://faish.al/2014/01/06/check-if-it-is-woocommerce-page/

/**
* is_realy_woocommerce_page - Returns true if on a page which uses WooCommerce templates (cart and checkout are standard pages with shortcodes and which are also included)
*/

/* I am not sure why I don't have to use add_action, but my hunch is that I am just defining a function here and not using it
It's completely different to the case when I am enquing scripts or sth like that
function is used in header.php */


function is_really_woocommerce () {
        if(  function_exists ( "is_woocommerce" ) && is_woocommerce()){
                return true;
        }
        $woocommerce_keys   =   array ( "woocommerce_shop_page_id" ,
                                        "woocommerce_terms_page_id" ,
                                        "woocommerce_cart_page_id" ,
                                        "woocommerce_checkout_page_id" ,
                                        "woocommerce_pay_page_id" ,
                                        "woocommerce_thanks_page_id" ,
                                        "woocommerce_myaccount_page_id" ,
                                        "woocommerce_edit_address_page_id" ,
                                        "woocommerce_view_order_page_id" ,
                                        "woocommerce_change_password_page_id" ,
                                        "woocommerce_logout_page_id" ,
                                        "woocommerce_lost_password_page_id" ) ;
        foreach ( $woocommerce_keys as $wc_page_id ) {
                if ( get_the_ID () == get_option ( $wc_page_id , 0 ) ) {
                        return true ;
                }
        }
        return false;
}

/* Send coupon requests to Zapier */

    add_action( 'wp_loaded', 'send_coupon_subscriber_to_zapier' );

    function send_coupon_subscriber_to_zapier () {

        if(isset($_GET['promo_action']) && $_GET['promo_action']==="coupon") {

            if (isset($_GET["email_coupon"]) && !empty($_GET["email_coupon"])) {

                // Solution below comes from this website:
                // https://davidwalsh.name/curl-post

                //set POST variables
                $url = 'https://hooks.zapier.com/hooks/catch/1810442/t1wsw4/';
                $fields = array(
                    'email_address' => urlencode($_GET['email_coupon']),
                    'status' => urlencode('subscribed')
                );

                //url-ify the data for the POST
                foreach($fields as $key=>$value) { $fields_string .= $key.'='.$value.'&'; }
                rtrim($fields_string, '&');

                //open connection
                $ch = curl_init();

                //set the url, number of POST vars, POST data
                curl_setopt($ch,CURLOPT_URL, $url);
                curl_setopt($ch,CURLOPT_POST, count($fields));
                curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);

                //execute post
                $result = curl_exec($ch);

                //close connection
                curl_close($ch);

            }

        }

        return true;

    }

/* AA: Store welcome message
Priority is set to 10 to ensure that the function is executed before the product count and sorting menu
*/

    add_action( 'woocommerce_archive_description', 'store_welcome_message', 10 );

    function store_welcome_message() {

        $welcome_message = '<div class="store-welcome-message"><p>We search every day through thousands of offers available in the market and pick the best ones for you. All products featured in our <span class="spic-and-span-text">STORE<span class="spic-and-span-text-after-dot">.</span></span> have been tested and are used by our cleaning teams on a regular basis. We guarantee you 100% satisfaction with these products.</p><p>There are no delivery costs for our regular customers. If you are not our customer yet, a flat rate for delivery is €10 within Germany and €20 outside Germany.</p><p>Have you got any additional questions? Would you like to know more about our featured products? Please, call us at <span class="telephone"><a href="tel:+49 174 130 45 02">+49 174 130 45 02</a></span> or write to us at <span class="email"><a href="mailto:info@spicandspan.de" title="info@spicandspan.de">info@spicandspan.de</a></span>. Our Customer Support Team is available 24 hours a day, 7 days a week.</p></div>';
        echo $welcome_message;
    }

    /*
    AA: Store closing message
    Displays below the lower page navigation on product archive pages
     */

    add_action( 'woocommerce_after_shop_loop', 'store_closing_message', 20 );

    function store_closing_message() {

        $closing_message = '<div class="store-closing-message"><p>Did not find what you are looking for? No worries. <a href="tel:+491741304502">Call us</a> or <a href="/#contact-us">write to us</a> and let us know what you are looking for. We will select the best products and deliver to you right away!</p></div>';

        echo $closing_message;

    }
/* AA: fallback for browsers not supporting date field in the contact form (e.g. Firefox and Safari)
solution from:
http://contactform7.com/faq/does-contact-form-7-support-html5-input-types/ */

    add_filter( 'wpcf7_support_html5_fallback', '__return_true' );

/*
AA: Hook breadcrumbs on product pages and archive pages
Priority is set to 5 to display breadcrumbs before the images
*/

add_action( 'woocommerce_before_single_product_summary', 'product_page_breadcrumbs', 5 );
add_action( 'woocommerce_before_shop_loop', 'product_page_breadcrumbs', 5 );

function product_page_breadcrumbs() {
    woocommerce_breadcrumb();
}

/*
AA: Change the 'Home' text in breadcrumbs to 'Spic And Span Store'
Based on solution from: https://docs.woocommerce.com/document/customise-the-woocommerce-breadcrumb/
*/

add_filter( 'woocommerce_breadcrumb_defaults', 'jk_change_breadcrumb_home_text' );
function jk_change_breadcrumb_home_text( $defaults ) {
    $defaults['home'] = 'Spic And Span Store';
    return $defaults;
}

/*
AA: Change the Home Url from mail page Url to store Url
I don't like hardcoding it, as it may cause problems when we implement https
Based on solution from: https://docs.woocommerce.com/document/customise-the-woocommerce-breadcrumb/
*/

add_filter( 'woocommerce_breadcrumb_home_url', 'woo_custom_breadrumb_home_url' );
function woo_custom_breadrumb_home_url() {
    return 'https://www.spicandspan.de/store';
}

/*

AA: Register new sidebar - services hidden in the collapsible menu

*/

// Collapsible Services Sidebar

register_sidebar( array(
    'name'          => __( 'Front page - Collapsible Services Sidebar', 'illdy' ),
    'id'            => 'front-page-collapsible-services-sidebar',
    'description'   => __( 'The widgets added in this sidebar will appear in services section from front page. Widgets are by default collapsed', 'illdy' ),
    'before_widget' => '<div id="%1$s" class="col-sm-4 %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '',
    'after_title'   => '',
) );