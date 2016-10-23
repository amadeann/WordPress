/* format text after dot in each occurance of SPIC AND SPAN */

jQuery(".spic-and-span-text").each(function () {
	var spicAndSpan = jQuery(this).text();
	var dotPosition = spicAndSpan.indexOf(".")
	var replacedElement = spicAndSpan.substring(dotPosition, spicAndSpan.length);
    jQuery(this).html(jQuery(this).html().replace(replacedElement , "<span class='spic-and-span-text-after-dot'>" + replacedElement +"</span>"));
});