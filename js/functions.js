/* -------------------------------------------------- *
 * Project scripts
 * -------------------------------------------------- *
 * Author: Renat Ganbarov
 * URL: http://www.icoder.by/
 * Copyright: 2014 Renat Ganbarov
** -------------------------------------------------- */

(function($) {
	var clickEvent = (('ontouchstart' in window))? 'touchstart': 'click'; //'touchstart': 'click';

	
	$(document)
		.on(clickEvent,".js-social-share", function(){
			$('#social-list').toggleClass('social-list-show')
		})
		.on(clickEvent,".btn-nav", function(){
			$("body").toggleClass("nav-open");
		})
	;

})(jQuery);
