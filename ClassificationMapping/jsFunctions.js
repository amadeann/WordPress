// When classification mapping selected, redirect the user to the 'product not available page'
if (jQuery("[data-gtm4wp_product_id=185]").length > 0) {
    jQuery('.wc-proceed-to-checkout').find('a').attr( "href", "http://www.classificationmapping.com/checkout500/" )
}

// Format recent post on the homepage

jQuery(".listing-item .title").each(function() {jQuery(this).after("<br /><br />")});

jQuery( ".listing-item .image" ).each(function() {jQuery(this).wrap("<div style='min-height: 250px;'></div>")});
jQuery( ".listing-item .title" ).each(function() {jQuery(this).wrap("<div style='text-align:center'></div>")});
jQuery( ".listing-item .excerpt" ).each(function() {jQuery(this).wrap("<div style='text-align:justify'></div>")});