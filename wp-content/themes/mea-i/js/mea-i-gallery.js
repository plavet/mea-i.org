$(document).ready(function() {
	//hover fx on captions
	$("p.wp-caption-text").hide();

	$(".wp-caption").hover(
	  function () {
	    $(this).children("p.wp-caption-text").stop(true,true).fadeIn('fast');
	  },
	  function () {
	    $(this).children("p.wp-caption-text").stop(true,true).fadeOut('fast');
	  });


	//masonry layout for gallery
	$('#gallery-wrap').masonry({
	  itemSelector: '.wp-caption',
	  columnWidth: 500,
	  gutterWidth: 10,
	  isAnimated: true,
	  isFitWidth: true
	});
});