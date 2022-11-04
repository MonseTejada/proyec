$(document).ready(function() {

		/* Header Animation
========================================================================== */

	/************ Control ************/

	const border = 5;
	var lastScrollTop = 0;

	var index = 0;
	var indexNavetec = 0;

	/************ Elements ************/

	var win = $(window);
	var nav = $(".nav");
	var sectionOpt = $(".section-opt");
	var logoWrap = $(".logo-wrap");
	var mainLogo = $(".main-logo");
	var sloganLogo = $(".slogan-logo");
	var navetec = $(".navetec");
	var naveOffer = $(".offer");
	
	win.scroll(function(event) {

		var winPos = $(this).scrollTop();

		if (Math.abs(lastScrollTop - winPos) <= border)
			return;

		if (winPos > lastScrollTop && win.width() > 750) {
			nav.css({"transition": "opacity .4s ease", "opacity": "0"});
			nav.css({"transition": "top .4s ease", "transition-delay": ".8s", "top": "-84px"});
		} else {
			nav.css({"transition": "opacity .4s ease", "opacity": "1"});
			nav.css({"top": "0"});
		}

		lastScrollTop = winPos;


		if (winPos > border && win.width() > 750) {

			if(index < 1) {
				
				nav.addClass("nav-on");
				logoWrap.addClass("logo-wrap-on");
				mainLogo.addClass("logo-on");
				sloganLogo.addClass("slogan-logo-on");
				naveOffer.addClass("offer-on");
				
				index = 1;
			}

		} else {

			if (index > 0) {

				nav.removeClass("nav-on");
				logoWrap.removeClass("logo-wrap-on");
				mainLogo.removeClass("logo-on");
				sloganLogo.removeClass("slogan-logo-on");
				naveOffer.removeClass("offer-on");

				index = 0;
			}
		}

	});
})