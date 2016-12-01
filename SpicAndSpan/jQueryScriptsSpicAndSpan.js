/* format text after dot in each occurance of SPIC AND SPAN */



jQuery(document).ready(function($) {

	jQuery(".spic-and-span-text").each(function () {
		var spicAndSpan = jQuery(this).text();
		var dotPosition = spicAndSpan.indexOf(".")
		var replacedElement = spicAndSpan.substring(dotPosition, spicAndSpan.length);
	    jQuery(this).html(jQuery(this).html().replace(replacedElement , "<span class='spic-and-span-text-after-dot'>" + replacedElement +"</span>"));
	});

});

/* Send the contact form thorugh Zapier */
	
function submitFormToZapier(form){
    var url = "http://requestb.in/qc9tklqc";
    var formData = jQuery(form).serializeArray();
    jQuery.post(url, formData).done(function (data) {
        alert(data);
	});
};