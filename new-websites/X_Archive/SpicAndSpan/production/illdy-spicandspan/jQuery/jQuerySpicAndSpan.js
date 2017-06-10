/* format text after dot in each occurance of SPIC AND SPAN */



jQuery(document).ready(function($) {

	jQuery(".spic-and-span-text").each(function () {
		var spicAndSpan = jQuery(this).text();
		var dotPosition = spicAndSpan.indexOf(".")
		var replacedElement = spicAndSpan.substring(dotPosition, spicAndSpan.length);
	    jQuery(this).html(jQuery(this).html().replace(replacedElement , "<span class='spic-and-span-text-after-dot'>" + replacedElement +"</span>"));
	});

});

/* Send the contact form through Zapier */

function submitFormToZapier(form){
	    var url = "https://hooks.zapier.com/hooks/catch/1810442/tmyyp5";
	    var formData = jQuery(form).serializeArray();
	    jQuery.post(url, formData);
};

/* Send the new order notification to IFTTT */

function submitFormToIFTTT(form){
	    var url = "https://maker.ifttt.com/trigger/new_order_spic_and_span/with/key/gNM9l2wzjcNu9Sg878eY6_TqUMUacx3aV9qCR1cC-CR";
	    var url2 = "https://maker.ifttt.com/trigger/new_order_spic_and_span/with/key/o488JCaQ5sHFeXvsAhpTi746FvjMjAPDshOoITcHY4G";
	    var formData = jQuery(form).serializeArray();
	    // send package name, cleaning date and cleaning time
	    jQuery.post(url, { value1: formData[8].value, value2: formData[9].value, value3: formData[10].value});
	    jQuery.post(url2, { value1: formData[8].value, value2: formData[9].value, value3: formData[10].value});
};

/* Send coupon requests to Zapier */

// POST sent on 'subscribe' button click

// Unfortunately, this does not work, as the popup element doesn't load on document ready

/*

jQuery(document).ready(function($) {

	jQuery("button.sumome-popup-button").click(function() {

		// Get the email of the user (value that was typen in in the email field when the user clicked submit)

		var userEmailZapierMailChimp = jQuery('input.sumome-popup-input').val();

		jQuery.ajax({
				type: "POST",
		        url: "https://hooks.zapier.com/hooks/catch/1810442/t1wsw4/",
		        data: {"email_address":userEmailZapierMailChimp, "status":"subscribed"},
		        success: true
		        });

	});

});

*/

/* Load twitter widget.js 
downloaded from: 
https://dev.twitter.com/web/javascript/loading */


window.twttr = (function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0],
    t = window.twttr || {};
  if (d.getElementById(id)) return t;
  js = d.createElement(s);
  js.id = id;
  js.src = "https://platform.twitter.com/widgets.js";
  fjs.parentNode.insertBefore(js, fjs);

  t._e = [];
  t.ready = function(f) {
    t._e.push(f);
  };

  return t;
}(document, "script", "twitter-wjs"));