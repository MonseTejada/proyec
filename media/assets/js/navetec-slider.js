
	/*  Navetec
========================================================================== */

$(document).ready(function() {
	
	var win = $(window);

	var Index = 0;
	
	/********** Buttons **********/
	var bttnGamma = $("#bttn-gamma");
	var bttnBeta = $("#bttn-beta");
	var bttnSrosa = $("#bttn-srosa");
	var bttnCalamanda = $("#bttn-calamanda");

	/********** Indicadores **********/
	var indGamma = $("#ind-gamma");
	var indBeta = $("#ind-beta");
	var indSrosa = $("#ind-srosa");
	var indCalamanda = $("#ind-calamanda");

	/********** Slider Items Navetec **********/
	var iGamma = $("#igamma");
	var iBeta = $("#ibeta");
	var iSrosa = $("#isrosa");
	var iCalamanda = $("#icalamanda");

	/********** Headings Navetec **********/
	var wombatGamma = $("#wombat-gamma");
	var wombatBeta = $("#wombat-beta");
	var wombatSrosa = $("#wombat-srosa");
	var wombatCalamanda= $("#wombat-calamanda");

	var whGamma = $("#wh-gamma");
	var whBeta = $("#wh-beta");
	var whSrosa = $("#wh-srosa");
	var whCalamanda= $("#wh-calamanda");

	var wdGamma = $("#wd-gamma");
	var wdBeta = $("#wd-beta");
	var wdSrosa = $("#wd-srosa");
	var wdCalamanda= $("#wd-calamanda");

	var wlGamma = $("#wl-gamma");
	var wlBeta = $("#wl-beta");
	var wlSrosa = $("#wl-srosa");
	var wlCalamanda= $("#wl-calamanda");


	bttnGamma.click(function() {

		switch(Index) {

			case 1:

				indBeta.removeClass("indicator-active");
				indGamma.addClass("indicator-active");

				iBeta.removeClass("wombat-portada-active");
				iGamma.addClass("wombat-portada-active");

				wombatBeta.removeClass("wombat-active");
				wombatGamma.addClass("wombat-active");

				break;

			case 2:

				indSrosa.removeClass("indicator-active");
				indGamma.addClass("indicator-active");

				iSrosa.removeClass("wombat-portada-active");
				iGamma.addClass("wombat-portada-active");

				wombatSrosa.removeClass("wombat-active");
				wombatGamma.addClass("wombat-active");


				break;

			case 3:

				indCalamanda.removeClass("indicator-active");
				indGamma.addClass("indicator-active");

				iCalamanda.removeClass("wombat-portada-active");
				iGamma.addClass("wombat-portada-active");

				wombatCalamanda.removeClass("wombat-active");
				wombatGamma.addClass("wombat-active");

		}

		Index = 0;
	});

	bttnBeta.click(function() {

		switch(Index) {

			case 0:

				indGamma.removeClass("indicator-active");
				indBeta.addClass("indicator-active");

				iGamma.removeClass("wombat-portada-active");
				iBeta.addClass("wombat-portada-active");

				wombatGamma.removeClass("wombat-active");
				wombatBeta.addClass("wombat-active");

				break;

			case 2:

				indSrosa.removeClass("indicator-active");
				indBeta.addClass("indicator-active");

				iSrosa.removeClass("wombat-portada-active");
				iBeta.addClass("wombat-portada-active");

				wombatSrosa.removeClass("wombat-active");
				wombatBeta.addClass("wombat-active");

				break;

			case 3:

				indCalamanda.removeClass("indicator-active");
				indBeta.addClass("indicator-active");

				iCalamanda.removeClass("wombat-portada-active");
				iBeta.addClass("wombat-portada-active");

				wombatCalamanda.removeClass("wombat-active");
				wombatBeta.addClass("wombat-active");
		}

		Index = 1;
	});

	bttnSrosa.click(function() {

		switch(Index) {

			case 0:

				indGamma.removeClass("indicator-active");
				indSrosa.addClass("indicator-active");

				iGamma.removeClass("wombat-portada-active");
				iSrosa.addClass("wombat-portada-active");

				wombatGamma.removeClass("wombat-active");
				wombatSrosa.addClass("wombat-active");

				break;

			case 1:

				indBeta.removeClass("indicator-active");
				indSrosa.addClass("indicator-active");

				iBeta.removeClass("wombat-portada-active");
				iSrosa.addClass("wombat-portada-active");

				wombatBeta.removeClass("wombat-active");
				wombatSrosa.addClass("wombat-active");

				break;

			case 3:

				indCalamanda.removeClass("indicator-active");
				indSrosa.addClass("indicator-active");

				iCalamanda.removeClass("wombat-portada-active");
				iSrosa.addClass("wombat-portada-active");

				wombatCalamanda.removeClass("wombat-active");
				wombatSrosa.addClass("wombat-active");
		}

		Index = 2;
	});

	bttnCalamanda.click(function() {

		switch(Index) {

			case 0:

				indGamma.removeClass("indicator-active");
				indCalamanda.addClass("indicator-active");

				iGamma.removeClass("wombat-portada-active");
				iCalamanda.addClass("wombat-portada-active");

				wombatGamma.removeClass("wombat-active");
				wombatCalamanda.addClass("wombat-active");

				break;

			case 1:

				indBeta.removeClass("indicator-active");
				indCalamanda.addClass("indicator-active");

				iBeta.removeClass("wombat-portada-active");
				iCalamanda.addClass("wombat-portada-active");

				wombatBeta.removeClass("wombat-active");
				wombatCalamanda.addClass("wombat-active");

				break;

			case 2:

				indSrosa.removeClass("indicator-active");
				indCalamanda.addClass("indicator-active");

				iSrosa.removeClass("wombat-portada-active");
				iCalamanda.addClass("wombat-portada-active");

				wombatSrosa.removeClass("wombat-active");
				wombatCalamanda.addClass("wombat-active");
		}

		Index = 3;
	});

})