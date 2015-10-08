/* News slider */
function newsSlider() {
	jQuery('.f_newsSlideshow').slick({
	  slidesToShow: 1,
	  slidesToScroll: 1,
	  autoplay: true,
	  autoplaySpeed: 2000,
	  dots: true
	});
}

jQuery(window).load(function() {
  /* Navigation */
	// jQuery('#main-menu > ul').superfish({
	// 	delay:       500,								// 0.1 second delay on mouseout
	// 	animation:   { opacity:'show',height:'show'},	// fade-in and slide-down animation
	// 	dropShadows: true								// disable drop shadows
	// });

	jQuery('#main-menu > ul').mobileMenu({
		prependTo:'.mobilenavi'
	});

	/* My functions */
	newsSlider();
});


( function() {
	var is_webkit = navigator.userAgent.toLowerCase().indexOf( 'webkit' ) > -1,
	    is_opera  = navigator.userAgent.toLowerCase().indexOf( 'opera' )  > -1,
	    is_ie     = navigator.userAgent.toLowerCase().indexOf( 'msie' )   > -1;

	if ( ( is_webkit || is_opera || is_ie ) && 'undefined' !== typeof( document.getElementById ) ) {
		var eventMethod = ( window.addEventListener ) ? 'addEventListener' : 'attachEvent';
		window[ eventMethod ]( 'hashchange', function() {
			var element = document.getElementById( location.hash.substring( 1 ) );

			if ( element ) {
				if ( ! /^(?:a|select|input|button|textarea)$/i.test( element.tagName ) )
					element.tabIndex = -1;

				element.focus();
			}
		}, false );
	}
})();
