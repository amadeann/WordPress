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

remove_action( 'woocommerce_before_main_content','woocommerce_breadcrumb', 20, 0);

// Remove "has been added to your cart" mesasge
// Code was taken from here: http://businessbloomer.com/woocommerce-remove-product-successfully-added-cart-message/

add_filter( 'wc_add_to_cart_message', 'custom_add_to_cart_message' );
 
function custom_add_to_cart_message() {
 
global $woocommerce;
$return_to  = get_permalink(woocommerce_get_page_id('shop'));
$message    = sprintf(
	'<a href="%s" class="button wc-forwards">%s</a> %s', $return_to, __('Continue Shopping', 'woocommerce'), __('Product successfully added to your cart.', 'woocommerce') );
return $message;
}

?>