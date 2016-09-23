//------------------------------------------------------------------------
// Spilt Clothing
// Robert Willis
// 20 October 2014
//
// functions.js
//------------------------------------------------------------------------

// Browser detection for when you get desparate. A measure of last resort.
// http://rog.ie/post/9089341529/html5boilerplatejs

// var b = document.documentElement;
// b.setAttribute('data-useragent',  navigator.userAgent);
// b.setAttribute('data-platform', navigator.platform);

// sample CSS: html[data-useragent*='Chrome/13.0'] { ... }


// remap jQuery to $
(function($){

	/* trigger when page is ready */
	$(document).ready(function (){

            // http://codex.wordpress.org/Navigation_Menus
            function register_my_menu() {
                register_nav_menu('header-menu',__( 'Header Menu' ));
            }
            add_action( 'init', 'register_my_menu' );

	
	});
	
	
	/* optional triggers
	
	$(window).load(function() {
		
	});
	
	$(window).resize(function() {
		
	});
	
	*/

})(window.jQuery);