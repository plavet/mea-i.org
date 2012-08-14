$(document).ready(function() {

	$('.home-content-wrap').masonry({
	  itemSelector: '#home-wrap',
	  columnWidth: 180,
	  gutterWidth: -20,
	  isAnimated: true,
	  isFitWidth: true
	});

$("ul#menu-navigation li a").attr('rel', 'loadedpage').each(function() {
   var _href = $(this).attr("href"); 
   $(this).attr("href", _href + '?iframe=true&width=90%&height=90%');
});

$("ul#menu-navigation li.home a").attr('rel', 'noloadedpage').each(function(){
        $(this).attr('href',$(this).attr('href').replace('?iframe=true&width=90%&height=90%',''));
});

$("ul#menu-navigation li.gal1 a, ul#menu-navigation li.gal2 a, ul#menu-navigation li.gal3 a").attr('rel', 'galeryPage').each(function(){
        $(this).attr('href',$(this).attr('href').replace('?iframe=true&width=90%&height=90%',''));
});

$("#home-wrap.format-link .home-content a").attr('rel', 'noloadedpage').each(function(){
        $(this).attr('href',$(this).attr('href').replace('?iframe=true&width=100%&height=100%',''));
});

$("a[rel^='loadedpage']").loadedPage({
			animation_speed: 'fast', /* fast/slow/normal */
			slideshow: 5000, /* false OR interval time in ms */
			autoplay_slideshow: false, /* true/false */
			opacity: 0.80, /* Value between 0 and 1 */
			show_title: true, /* true/false */
			allow_resize: true, /* Resize the photos bigger than viewport. true/false */
			default_width: 500,
			default_height: 330,
			counter_separator_label: '/', /* The separator for the gallery counter 1 "of" 2 */
			theme: 'light_square', /* light_rounded / dark_rounded / light_square / dark_square / facebook */
			horizontal_padding: 20, /* The padding on each side of the picture */
			hideflash: false, /* Hides all the flash object on a page, set to TRUE if flash appears over prettyPhoto */
			wmode: 'opaque', /* Set the flash wmode attribute */
			autoplay: true, /* Automatically start videos: True/False */
			modal: false, /* If set to true, only the close button will close the window */
			deeplinking: false, /* Allow prettyPhoto to update the url to enable deeplinking. */
			overlay_gallery: true, /* If set to true, a gallery will overlay the fullscreen image on mouse over */
			keyboard_shortcuts: true, /* Set to false if you open forms inside prettyPhoto */
			changepicturecallback: function(){$('body').addClass('skrolbar');}, /* Called everytime an item is shown/changed */
			callback: function(){$('body').removeClass('skrolbar');}, /* Called when prettyPhoto is closed */
			ie6_fallback: true,
			markup: '<div class="pp_pic_holder"> \
						<div class="ppt">&nbsp;</div> \
						<a class="pp_close" href="#">X</a> \
						<div class="pp_content_container"> \
							<div class="pp_left"> \
							<div class="pp_right"> \
								<div class="pp_content"> \
									<div class="pp_loaderIcon"></div> \
									<div class="pp_fade"> \
										<div class="pp_hoverContainer"> \
											<a class="pp_next" href="#">next</a> \
											<a class="pp_previous" href="#">previous</a> \
										</div> \
										<div id="pp_full_res"></div> \
										<div class="pp_details"> \
											<div class="pp_nav"> \
												<a href="#" class="pp_arrow_previous">Previous</a> \
												<p class="currentTextHolder">0/0</p> \
												<a href="#" class="pp_arrow_next">Next</a> \
											</div> \
											{pp_social} \
										</div> \
									</div> \
								</div> \
							</div> \
							</div> \
						</div> \
					</div> \
					<div class="pp_overlay"></div>',
			gallery_markup: '<div class="pp_gallery"> \
								<a href="#" class="pp_arrow_previous">Previous</a> \
								<div> \
									<ul> \
										{gallery} \
									</ul> \
								</div> \
								<a href="#" class="pp_arrow_next">Next</a> \
							</div>',
			image_markup: '<img id="fullResImage" src="{path}" />',
			flash_markup: '<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="{width}" height="{height}"><param name="wmode" value="{wmode}" /><param name="allowfullscreen" value="true" /><param name="allowscriptaccess" value="always" /><param name="movie" value="{path}" /><embed src="{path}" type="application/x-shockwave-flash" allowfullscreen="true" allowscriptaccess="always" width="{width}" height="{height}" wmode="{wmode}"></embed></object>',
			quicktime_markup: '<object classid="clsid:02BF25D5-8C17-4B23-BC80-D3488ABDDC6B" codebase="http://www.apple.com/qtactivex/qtplugin.cab" height="{height}" width="{width}"><param name="src" value="{path}"><param name="autoplay" value="{autoplay}"><param name="type" value="video/quicktime"><embed src="{path}" height="{height}" width="{width}" autoplay="{autoplay}" type="video/quicktime" pluginspage="http://www.apple.com/quicktime/download/"></embed></object>',
			iframe_markup: '<iframe src ="{path}" width="{width}" height="{height}" frameborder="no"></iframe>',
			inline_markup: '<div class="pp_inline">{content}</div>',
			custom_markup: '',
			social_tools: '<div class="pp_social"><div class="twitter"><a href="http://twitter.com/share" class="twitter-share-button" data-count="none">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script></div><div class="facebook"><iframe src="http://www.facebook.com/plugins/like.php?locale=en_US&href='+location.href+'&amp;layout=button_count&amp;show_faces=true&amp;width=500&amp;action=like&amp;font&amp;colorscheme=light&amp;height=23" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:500px; height:23px;" allowTransparency="true"></iframe></div></div>' /* html or false to disable */
		});

var link = location.href + 'wp-content/themes/mea-i/images/gallery/';
api_images = [link + '1.jpg', link + '2.jpg', link + '3.jpg', link + '4.jpg', link + '5.jpg', link + '6.jpg', link + '7.jpg', link + '8.jpg', link + '9.jpg', link + '10.jpg', link + '11.jpg', link + '12.jpg', link + '13.jpg', link + '14.jpg', link + '15.jpg', link + '16.jpg', link + '17.jpg', link + '18.jpg', link + '19.jpg', link + '20.jpg', link + '21.jpg', link + '22.jpg', link + '23.jpg', link + '24.jpg', link + '25.jpg', link + '26.jpg', link + '27.jpg', link + '28.jpg', link + '29.jpg', link + '30.jpg', link + '31.jpg', link + '32.jpg'];
api_titles = ['Title 1','Title 2','Title 3'];
api_descriptions = ['Description 1','Description 2','Description 3','Description 4','Description 5','Description 6','Description 7','Description 8','Description 9','Description 10','Description 11','Description 12','Description 13','Description 14','Description 15','Description 16','Description 17','Description 18','Description 19','Description 20','Description 21','Description 22','Description 23','Description 24','Description 25','Description 26','HP LIFE Training of Trainers course, San Francisco, October 2011','Description 28','Description 29','Description 30','Description 31','Description 32']

 function launchPrettyPhoto(event) {


$("a[rel^='galeryPage']").loadedPage({
			animation_speed: 'fast', /* fast/slow/normal */
			slideshow: 5000, /* false OR interval time in ms */
			autoplay_slideshow: false, /* true/false */
			opacity: 0.80, /* Value between 0 and 1 */
			show_title: false, /* true/false */
			allow_resize: true, /* Resize the photos bigger than viewport. true/false */
			default_width: 500,
			default_height: 330,
			counter_separator_label: '/', /* The separator for the gallery counter 1 "of" 2 */
			theme: 'pp_default', /* light_rounded / dark_rounded / light_square / dark_square / facebook */
			horizontal_padding: 20, /* The padding on each side of the picture */
			hideflash: false, /* Hides all the flash object on a page, set to TRUE if flash appears over prettyPhoto */
			wmode: 'opaque', /* Set the flash wmode attribute */
			autoplay: true, /* Automatically start videos: True/False */
			modal: false, /* If set to true, only the close button will close the window */
			deeplinking: false, /* Allow prettyPhoto to update the url to enable deeplinking. */
			overlay_gallery: false, /* If set to true, a gallery will overlay the fullscreen image on mouse over */
			keyboard_shortcuts: true, /* Set to false if you open forms inside prettyPhoto */
			ie6_fallback: true,
			markup: '<div class="pp_pic_holder"> \
						<div class="ppt">&nbsp;</div> \
						<a class="pp_close" href="#">X</a> \
						<div class="pp_content_container"> \
							<div class="pp_left"> \
							<div class="pp_right"> \
								<div class="pp_content"> \
									<div class="pp_loaderIcon"></div> \
									<div class="pp_fade"> \
										<div class="pp_hoverContainer"> \
											<a class="pp_next" href="#">next</a> \
											<a class="pp_previous" href="#">previous</a> \
										</div> \
										<div id="pp_full_res"></div> \
										<div class="pp_details"> \
											<div class="pp_nav"> \
												<a href="#" class="pp_arrow_previous">Previous</a> \
												<p class="currentTextHolder">0/0</p> \
												<a href="#" class="pp_arrow_next">Next</a> \
											</div> \
											<p class="pp_description"></p> \
											{pp_social} \
										</div> \
									</div> \
								</div> \
							</div> \
							</div> \
						</div> \
					</div> \
					<div class="pp_overlay"></div>',
			gallery_markup: '<div class="pp_gallery"> \
								<a href="#" class="pp_arrow_previous">Previous</a> \
								<div> \
									<ul> \
										{gallery} \
									</ul> \
								</div> \
								<a href="#" class="pp_arrow_next">Next</a> \
							</div>',
			image_markup: '<img id="fullResImage" src="{path}" />',
			flash_markup: '<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="{width}" height="{height}"><param name="wmode" value="{wmode}" /><param name="allowfullscreen" value="true" /><param name="allowscriptaccess" value="always" /><param name="movie" value="{path}" /><embed src="{path}" type="application/x-shockwave-flash" allowfullscreen="true" allowscriptaccess="always" width="{width}" height="{height}" wmode="{wmode}"></embed></object>',
			quicktime_markup: '<object classid="clsid:02BF25D5-8C17-4B23-BC80-D3488ABDDC6B" codebase="http://www.apple.com/qtactivex/qtplugin.cab" height="{height}" width="{width}"><param name="src" value="{path}"><param name="autoplay" value="{autoplay}"><param name="type" value="video/quicktime"><embed src="{path}" height="{height}" width="{width}" autoplay="{autoplay}" type="video/quicktime" pluginspage="http://www.apple.com/quicktime/download/"></embed></object>',
			iframe_markup: '<iframe src ="{path}" width="{width}" height="{height}" frameborder="no"></iframe>',
			inline_markup: '<div class="pp_inline">{content}</div>',
			custom_markup: '',
			social_tools: false
	});

 	event.preventDefault();
	$.loadedPage.open(api_images,api_titles,api_descriptions);
	$.loadedPage.changePage('next');
	$.loadedPage.changePage('previous');
    $.loadedPage.close();
	$.loadedPage.trigger(launchPrettyPhoto);
}

$("a[rel^='galeryPage']").click(launchPrettyPhoto);

});