/*
	jphotoschanger jQuery Plugin
	© 2012 icoder.by
	For any questions please visit mail me at renat.ganbarov@gmail.com 
*/

;(function($){
	var settings = {}; 
	var element = {};
	var currFrameForward = currFrameBackward = 0;
	var tm = null;
	
	$.fn.jphotoschanger = function(sett){
		element = $(this);
		settings = $.extend({}, $.fn.jphotoschanger.defaults, sett);
        function _build(){
			element.width(settings.frameWidth);
			element.height(settings.frameHeight);
			element.css('background-position', '0 0');
		};
		_build();
		element.mouseover(function(){forward()})
		element.mouseout(function(){backward()})
	};
	function forward(){
		var tmFn = function(){ forward();};
		var bgPos = element.css('background-position');
		var ie = true;
		if(bgPos == 'undefined' || bgPos == null){
			bgPos = parseInt(element.css('background-position-y'));
		}else{
			bgPos = bgPos.split(' ');
			bgPos = parseInt(bgPos[1]);
            ie = false;
		}  
        bgPos -= settings.frameHeight;
		if(ie){ element.css('background-position-y', bgPos + 'px'); } 
		else { element.css('background-position', ('0px ' + bgPos + 'px')); }
		currFrameForward++;
		if(currFrameForward == (settings.totalFrames - 1)){
			currFrameForward = 0;
			return false;
		}
		tm = setTimeout(tmFn, settings.speed);
	}
	
	function backward(){
		var tmFn = function(){ backward();};
		var bgPos = element.css('background-position');
		var ie = true;
		if(bgPos == 'undefined' || bgPos == null){
	    	bgPos = parseInt(element.css('background-position-y'));
	    }else{
	    	bgPos = bgPos.split(' ');
	    	bgPos = parseInt(bgPos[1]);
	        ie = false;
	    }    
	    bgPos += settings.frameHeight;
		if(ie){ element.css('background-position-y', bgPos + 'px'); } 
		else { element.css('background-position', ('0px ' + bgPos + 'px')); }
		currFrameBackward++;
		if(currFrameBackward == (settings.totalFrames - 1)){
			currFrameBackward = 0;
			return false;
		}
		tm = setTimeout(tmFn, settings.speed);
	}
	/*  Default Settings  */
    $.fn.jphotoschanger.defaults = {
        frameWidth:      100,
        frameHeight:     100,
        speed:           100,
        totalFrames:     0
    };	
})(jQuery);