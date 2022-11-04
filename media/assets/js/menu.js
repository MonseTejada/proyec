$(document).ready(function() {

	var menuActive = false;
	var contactActive = false;

	$(".menu-trigger").click(function() {
		if (menuActive) {
			$(".burger").removeClass("slice-off");
			$(".slice-left").removeClass("slice-x-left");
			$(".slice-right").removeClass("slice-x-right");

			$(".burger").css("transition-delay", ".4s");
			$(".slice-left").css("transition-delay", ".0s");
			$(".slice-right").css("transition-delay", ".0s");

			$("body").removeClass("disable-scroll");

			menuActive = !menuActive;
		} else {
			$(".burger").addClass("slice-off");
			$(".slice-left").addClass("slice-x-left");
			$(".slice-right").addClass("slice-x-right");

			$(".burger").css("transition-delay", "0s");
			$(".slice-left").css("transition-delay", ".4s");
			$(".slice-right").css("transition-delay", ".4s");

			$("body").addClass("disable-scroll");

			menuActive = !menuActive;
		}
	});

	$("html").click(function() {
		$(".contact-list").removeClass("contact-active");
		$("body").removeClass("disable-scroll");
	});

	$(".contact-trigger").click(function(event){
	     event.stopPropagation();
	});

	$(".contact-trigger").click(function(event) {
		$(".contact-list").addClass("contact-active");
		$("body").addClass("disable-scroll");
	});

	$(".size").text($(window).width() + " X " + $(window).height());

	$(window).resize(function() {
		$(".size").text($(window).width() + " X " + $(window).height());
	});

})