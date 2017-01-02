/* Add the country flags in the footer menu */

jQuery(document).ready(function($) {
	jQuery("ul#menu-footer-menu > li > a").filter(function() {
	    return jQuery(this).text() === "Deutsch";
	}).before('<img src="https://s3.eu-central-1.amazonaws.com/altair-seatcovers/css-sprites/blank.png" class="flag flag-de" alt="German" />');

	jQuery("ul#menu-footer-menu > li > a").filter(function() {
	    return jQuery(this).text() === "English";
	}).before('<img src="https://s3.eu-central-1.amazonaws.com/altair-seatcovers/css-sprites/blank.png" class="flag flag-us" alt="English" />');

	jQuery("ul#menu-footer-menu > li > a").filter(function() {
	    return jQuery(this).text() === "Polski";
	}).before('<img src="https://s3.eu-central-1.amazonaws.com/altair-seatcovers/css-sprites/blank.png" class="flag flag-pl" alt="Polski" />');
});

/* Place credit card icons in the order form */

jQuery(document).ready(function($) {
	jQuery(".credit-card-icons").html('<i class="fa fa-cc-paypal fa-2x"></i><i class="fa fa-cc-mastercard fa-2x"></i><i class="fa fa-cc-visa fa-2x"></i><i class="fa fa-cc-amex fa-2x"></i><i class="fa fa-cc-diners-club fa-2x"></i><i class="fa fa-cc-discover fa-2x"></i>');
});

/* Bold the 'Jetzt Bestellen' link in the main menu */

jQuery(document).ready(function($) {
	jQuery("ul#menu-header-menu > li > a").filter(function() {
		    return jQuery(this).text() === "Jetzt Bestellen";
		}).css("font-weight","bold");
});

/* Bold the 'Order Now' link in the main menu */

jQuery(document).ready(function($) {
	jQuery("ul#menu-header-menu > li > a").filter(function() {
		    return jQuery(this).text() === "Order Now";
		}).css("font-weight","bold");
});

/* Replace the site title with the image */ 

jQuery(document).ready(function($) {
	jQuery('#site-title').replaceWith('<img alt="Altair Logo" src="/wp-content/uploads/logos/altair_logo_300_150.png" height="300" width="150" style="margin-bottom: 0px;">');
});

/* Initialize the fabric carousel */

jQuery(window).load(function($) {
  jQuery("#main-fabrics-list").flexisel();
});