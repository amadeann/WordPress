<?php

// Modifications of the functions.php file
// They are added at the end of the functions.php file

/*

** Remove tabs from product details page

*/

add_filter( 'woocommerce_product_tabs', 'woo_remove_product_tabs', 98 );

function woo_remove_product_tabs( $tabs ) {

    unset( $tabs['description'] );      	// Remove the description tab
    unset( $tabs['reviews'] ); 			// Remove the reviews tab
    unset( $tabs['additional_information'] );  	// Remove the additional information tab

    return $tabs;

}

// Remove the SKUs from the shop
// Source to the how to article: https://www.skyverge.com/blog/how-to-hide-sku-woocommerce-product-pages/

add_filter( 'wc_product_sku_enabled', '__return_false' );

// Remove breadcrumb - that small path displayed at the top of the product page (e.g. "Home / Classification Mapping")

remove_action( 'woocommerce_before_main_content','cc', 20, 0);


// Remove "has been added to your cart" mesasge
// Code was taken from here: http://businessbloomer.com/woocommerce-remove-product-successfully-added-cart-message/

add_filter( 'wc_add_to_cart_message', '__return_false' );

// Remove versioning from all styles and sctripts
// This code is implemented so that the changes in  .css files are immediatelly visible

/* THIS FRAGMENT IS COMMENTED OUT TO SPEED UP THE WEBSITE

// Remove WP Version From Styles	
add_filter( 'style_loader_src', 'sdt_remove_ver_css_js', 9999 );
// Remove WP Version From Scripts
// add_filter( 'script_loader_src', 'sdt_remove_ver_css_js', 9999 );

// Function to remove version numbers
function sdt_remove_ver_css_js( $src ) {
	if ( strpos( $src, 'ver=' ) )
		$src = remove_query_arg( 'ver', $src );
	return $src;
}

*/

// Override the setting with maximum 50 product
// variables being added at a time

define( 'WC_MAX_LINKED_VARIATIONS', 150 );

/*
Changed element:

	echo '</strong>&nbsp;&nbsp;<strong><a href="http://'.$str_foobturl.'"><img src="//tylers-storage.s3-us-west-1.amazonaws.com/wp-content/uploads/2015/09/07185505/Drawing1.png" alt="Drawing" width="16" height="16" /></a></strong></div></div></div>';

to hight and width 8x8. Code mofified, and not added to the end of the file as this is overwrite and not a new funciton.

*/

/* Move the product short description below the 'add to cart' button */
/* this was done based on the tutorial here: */
/* http://wpbackoffice.com/reorder-product-page-contents-woocommerce/ */


remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 60 );

/* Making the 'order completed' page PayPal-compliant */

function paypal_order_received_text( $text, $order_id ) {
	$order = new WC_Order($order_id);
	$payment_method = get_post_meta( $order->id, '_payment_method', true );
	switch ($payment_method) {
    	case 'bacs':
    		return $text.'<br /><br />';
    		break;
    	case paypal;
    		$new = 'Thank you for your payment. Your transaction has been completed, and a receipt for your purchase has been emailed to you. You may log into your account at <a href = "www.paypal.com/ee">www.paypal.com/ee</a> to view details of this transaction.<br /><br />';
    		return $new;
    		break;
    }
}
add_filter('woocommerce_thankyou_order_received_text', 'paypal_order_received_text', 10, 2 );

/* Modification !!! */
/* The following fragment of the code has been commented out in functions.php in order to fix the problem with Google Fonts */
/* wp_enqueue_style( 'tesseract-fonts', tesseract_fonts_url(), array(), '1.0.0' ); */
/* This was commented out withing a tesseract_scripts() function */

/* Remove image on product pages */

remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10);
remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_images', 20);

?>