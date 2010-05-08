jQuery(document).ready(function(){
	// menu
	jQuery(" #nav ul ").css({display: "none"});
	jQuery(" #nav li").hover(function(){
		jQuery(this).find('ul:first').css({visibility: "visible",display: "none"}).fadeIn(400);
	},function(){
		jQuery(this).find('ul:first').css({visibility: "hidden"});
	});
	 
	var position = jQuery('li.current_page_item').position().left;
	if(jQuery.browser.msie && jQuery.browser.version == 6){
		position = jQuery('li.current_page_item').position().left - jQuery('#nav').width();
	}
	
	// menu pointer
	jQuery('#menu ul#nav').append("<li class='pointer'><img src='/wp-content/themes/kreativik/images/arrow.jpg' /></li>");
	jQuery('.pointer').css({
		'text-align': 'center',
		'position' : 'absolute',
		'left': position + 20,
		'width': (parseInt(jQuery('li.current_page_item').innerWidth()) - 20) + 'px',
		'height' : '15px',
		'margin-top' : '26px',
		'z-index' : '0'
	}).find("img").css({
		'width': '11px',
		'height': '9px'
	});
	
	var lis;
	
	if(!$.browser.msie || ($.browser.msie && $.browser.version == 8)){
		lis = $('ul#nav>li').not('.pointer');
	} else {
		lis = $('ul#nav>li').not('.pointer').not(':has(ul)');
	}
	
	jQuery(lis).hover(function(){
		jQuery('.pointer').stop();
		var position = jQuery(this).position().left;
		if(jQuery.browser.msie && jQuery.browser.version == 6){
			position = jQuery(this).position().left - jQuery('#nav').width();
		}
		jQuery('.pointer').animate({
			'left' : position + 20,
			'width': (parseInt(jQuery(this).innerWidth()) - 20) + 'px'
		});
	},function(){
		jQuery('.pointer').stop();
		var position = jQuery('li.current_page_item').position().left;
		if(jQuery.browser.msie && jQuery.browser.version == 6){
			var position = jQuery('li.current_page_item').position().left - jQuery('#nav').width();
		}
		jQuery('.pointer').animate({
			'left': position + 20,
			'width': (parseInt(jQuery('li.current_page_item').innerWidth()) - 20) + 'px'
		});
	});
	
	// fix pointer on resize
	$(window).resize(function(){
		$('.pointer').css({
			'text-align': 'center',
			'position' : 'absolute',
			'left': position + 20,
			'width': (parseInt(jQuery('li.current_page_item').innerWidth()) - 20) + 'px',
			'height' : '15px',
			'margin-top' : '26px',
			'z-index' : '0'
		});
	});
	
	// IE6
	if(jQuery.browser.msie && jQuery.browser.version == 6){	
		jQuery('#wrapper-shadow').css('background-image', 'none');
	}
	
	if(typeof $('#portfolio').cycle != 'undefined'){
		// portfolio cycle
		$('#portfolio').cycle({
			timeout: 0,
			fx: 'scrollLeft',
			next: '#next',
			prev: '#prev'
		});
	}
	
	// disallow horizonal resizing
	jQuery('#add-comment textarea').css('resize', 'vertical');
});

/**
 *	make sure the log does not break JavaScript
 */
var log = function(variable){
	try {
		console.log(variable);
	} catch (Err) {}
}

/**
 *	these are animation functions used by the animate() function
 */
var animFunc1 = function(rows, cols){
	var n = rows*cols;
	for(i = 0; i < n; i++){
		setTimeout(
			"jQuery('#square'+"+i+").stop().animate({'opacity': 1}, "+anim_speed+");", 
			Math.round(Math.random() * anim_speed)
		);
	}
}

var animFunc2 = function(rows, cols){
	var n = rows*cols;
	for(i = 0; i < n; i++){
		setTimeout(
			"jQuery('#square'+"+i+").stop().animate({'opacity': 1}, "+anim_speed+");", 
			i * 70
		);
	}
}

var animFunc3 = function(rows, cols){
	var n = 0;
	for(i = 0; i < cols; i++){
		for(j = 0; j < rows; j++){
			setTimeout(
				"jQuery('#square'+"+(j*10+i)+").stop().animate({'opacity': 1}, "+anim_speed+");", 
				n * 70
			);
			n++;
		}
	}
}

/**
 *	this function is in charge of swapping images and running the animation functions
 */
var animate = function(rows, cols){
	// move current image to background
	jQuery('#billboard').css({
		'background-image': 'url('+images[cur_img]+')'
	});
	
	// set next image as bg to all the animation divs, and set their opacity to 0
	jQuery('#billboard div').css({
		'background-image': 'url('+images[nxt_img]+')',
		'opacity': '0'
	});
	
	// run the effect function
	eval("animFunc"+cur_eff+"("+rows+", "+cols+");");
	
	if(cur_eff == 3) cur_eff = 1; else cur_eff++; // loop effect pointer
	if(images.length - 1 == cur_img) cur_img = 0; else cur_img++; // loop current image pointer
	if(images.length - 1 == nxt_img) nxt_img = 0; else nxt_img++; // loop next image pointer
		
	// clear timeout, just to be sure
	if(typeof t != 'undefined'){
		clearTimeout(t);
	}
	// and run self after specified time
	window.t = setTimeout("animate("+rows+", "+cols+");", interval);
};

jQuery(window).load(function($){
	// no images to swith between, returning
	if(jQuery('#billboard img').size() < 2){
		return;
	}
	
	if(jQuery.browser.msie && jQuery.browser.version == 6){
		jQuery('#billboard').cycle({
			fx: 'fade'
		});
		return;
	}
	
	window.squares = [];
	window.images = [];
	window.cur_img = 0;
	window.nxt_img = 1;
	window.cur_eff = 1;
	window.interval = 8000;
	window.anim_speed = 1000;
	var variant = 94; // 47 or 94
	var rows = 376 / variant;
	var cols = 940 / variant;
	var billboard = jQuery('#billboard');
	
	// parse images within the billboard, add their sources to an array and remove them
	jQuery('#billboard img').each(function(){
		images.push(jQuery(this).attr('src'));
		jQuery(this).remove();
	});
	
	// set billboard background
	jQuery('#billboard').css({
		'background-image': 'url('+images[cur_img]+')'
	});
	
	// create divs for animation
	var n = 0;
	for(y = 0; y < rows; y++){
		for(x = 0; x < cols; x++){
			var current = document.createElement('div');
			current.style.backgroundPosition = -x*variant+'px '+(-y*variant)+'px';
			current.id = 'square'+n;
			billboard.append(current);
			squares.push(current.id);
			n++;
		}
	}
	
	jQuery('#billboard div').css({
		'opacity': '0',
		'width': variant+'px',
		'height': variant+'px',
		'float': 'left',
		'position': 'relative',
		'z-index': 1
	});
	
	// and we're off
	setTimeout("animate("+rows+", "+cols+");", interval - anim_speed - 2000);
});