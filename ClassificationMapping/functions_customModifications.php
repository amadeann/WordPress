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

// Override the settind with maximum 50 product
// variables being added at a time

define( 'WC_MAX_LINKED_VARIATIONS', 150 );

/*
Changed element:

	echo '</strong>&nbsp;&nbsp;<strong><a href="http://'.$str_foobturl.'"><img src="//tylers-storage.s3-us-west-1.amazonaws.com/wp-content/uploads/2015/09/07185505/Drawing1.png" alt="Drawing" width="16" height="16" /></a></strong></div></div></div>';

to hight and width 8x8. Code mofified, and not added to the end of the file as this is overwrite and not a new funciton.

*/

?>