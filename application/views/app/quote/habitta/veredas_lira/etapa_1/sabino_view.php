<!DOCTYPE html>
<html lang="es_MX">
<head>
	<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" contet="ie=edge">
	<meta name="author" content="Ing. Saúl Fernando Torres Hernández">
	<meta name="description" content="Grúpo CCIMA S.A. de C.V." />
	<meta name="keywords" content="grupo ccima, navetec, constructora, servicio de construccion, desarrolladora, llave en mano, built to suit, renta de maquinaria, renta de gruas, maquinaria pesada para construccion, naves industriales, renta naves industriales, venta naves industriales, parques industriales, terrenos, terrenos industriales, terrenos habitacionales, bienes raices, inmobiliaria" />

	<title>Veredas de Lira</title>

	<script type="text/javascript" src="media/assets/js/analytics.js"></script>

	<link rel="stylesheet" type="text/css" href="media/bower_components/materialize/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="media/assets/css/portto-blanco.css">
	<link rel="stylesheet" type="text/css" href="media/assets/css/veredas-lira.css">
	<link rel="stylesheet" type="text/css" href="media/assets/css/quote.css">
	<link rel="stylesheet" type="text/css" href="media/assets/css/helpers.css">

	<script type="text/javascript" src="media/bower_components/jquery.min.js"></script>
	<script type="text/javascript" src="media/bower_components/materialize/js/materialize.min.js"></script>

</head>

<body ng-controller="VLSabinoQuoteCtrl as vlSabino">

	<md-sidenav class="cc-sidenav md-sidenav-left md-whiteframe-4dp" md-component-id="left">
		<md-toolbar class="md-hue-2">
			<h1 class="md-toolbar-tools">NAVEGACIÓN</h1>
		</md-toolbar>
		<a href="#!/veredas_lira" ng-click="close()">
			<div class="link-sidenav">
				<span>Inicio</span>
			</div>
		</a>
		<md-divider></md-divider>
		<a href="#!/veredas_lira-promociones" ng-click="close()">
			<div class="link-sidenav">
				<span>Promociones</span>
			</div>
		</a>
		<md-divider></md-divider>
		<a href="#!/veredas_lira-amenidades" ng-click="close()">
			<div class="link-sidenav">
				<span>Áreas comunes</span>
			</div>
		</a>
		<md-divider></md-divider>
		<a href="#!/veredas_lira-ubicacion" ng-click="close()">
			<div class="link-sidenav">
				<span>Ubicación</span>
			</div>
		</a>
		<md-divider></md-divider>
		<a href="#!/habitta" ng-click="close()">
			<div class="link-sidenav">
				<span>Habitta</span>
			</div>
		</a>
		<md-divider></md-divider>
		<a href="#!/" ng-click="close()">
			<div class="link-sidenav">
				<span>Grupo CCIMA</span>
			</div>
		</a>
		<md-divider></md-divider>

	</md-sidenav>

	<div class="navbar-fixed" ng-controller="sideNavCtrl">
		<nav class="white no-shadows" role="navigation" ng-controller="ContactMenuCtrl as contactCtrl">

			<div class="nav-wrapper">

				<a href="#!/veredas_lira" class="brand-logo white left"><img class="logo-pb" src="media/assets/img/habitta/veredas-lira/logos/logo.svg"></a>

				<ul class="nav-menu hide-on-med-and-down">
					<li><a href="#!/veredas_lira">Inicio</a></li>
					<li><a href="#!/veredas_lira-promociones">Promociones</a></li>
					<li><a href="#!/veredas_lira-amenidades">Áreas comunes</a></li>
					<li><a href="#!/veredas_lira-ubicacion">Ubicación</a></li>
					<li class="quote-item">
						<md-menu>
							<button class="btn blue-bg futura-demi lighter ml-10" ng-click="contactCtrl.openMenu($mdMenu, $event)">CONTACTO</button>
							<md-menu-content width="4">
								<md-menu-item>
									<md-button disabled="disabled">
										+52 1 442 127 5214
									</md-button>
								</md-menu-item>
								<md-menu-divider></md-menu-divider>
								<md-menu-item>
									<md-button ng-click="contactCtrl.toWhatsapp()">
										Whatsapp
									</md-button>
								</md-menu-item>
								<md-menu-item>
									<md-button ng-click="contactCtrl.toCall()">
										Llamada
									</md-button>
								</md-menu-item>
							</md-menu-content>
						</md-menu>
					</li>
				</ul>

				<ul class="right hide-on-large-only">
					<li><md-button class="md-icon-button md-noink" ng-click="toggleLeft()">
						<svg viewBox="0 0 24 24" width="24"><path d="M3,18h18v-2H3V18z M3,13h18v-2H3V13z M3,6v2h18V6H3z" fill="#5F6368"></path></svg>
					</md-button></li>
				</ul>

				<div class="quote-item right hide-on-large-only">
					<md-menu>
						<button class="btn blue-bg futura-demi lighter ml-10" ng-click="contactCtrl.openMenu($mdMenu, $event)">CONTACTO</button>
						<md-menu-content width="4">
							<md-menu-item>
								<md-button disabled="disabled">
									+52 1 442 127 5214
								</md-button>
							</md-menu-item>
							<md-menu-divider></md-menu-divider>
							<md-menu-item>
								<md-button ng-click="contactCtrl.toWhatsapp()">
									Whatsapp
								</md-button>
							</md-menu-item>
							<md-menu-item>
								<md-button ng-click="contactCtrl.toCall()">
									Llamada
								</md-button>
							</md-menu-item>
						</md-menu-content>
					</md-menu>
				</div>

			</div>

		</nav>
	</div>

	<div class="modal-dialog" ng-class="vlSabino.dialogDisplay">
		<div class="backdrop-dialog" ng-click="vlSabino.closeDialog()"></div>
		<div class="container-dialog p-20">
			<div class="toolbar-dialog blue-txt">
				Cotización
				<span ng-click="vlSabino.closeDialog()">
					<img class="btn-close-dialog mt-4" src="media/assets/img/icons/close.svg">
				</span>
			</div>
			<div class="content-dialog">

				<div class="divider"></div>

				<div class="p-20 grey lighten-5">
					<div class="p-5">
						<h6 class="futura-med">Portto Blanco {{vlSabino.propertyData.condominium}}</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light">Número {{vlSabino.propertyData.number}}</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light">Área {{vlSabino.propertyData.area}} M&sup2;</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light">Precio por M&sup2; {{vlSabino.propertyData.cost_m2}} MXN</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light green-text" style="text-decoration: line-through;">Precio de ${{vlSabino.propertyData.total}} MXN</h6>
					</div>

					<div class="divider"></div>

					<div class="py-20 ">
					<h5 class="center-align grey-text futura-book">Promociones de Lanzamiento Digital</h5>
					</div>
					
					<div class="divider"></div>

					<div class="p-20">
						<h6 class="deep-purple-text futura-light">{{vlSabino.propertyData.discountPlan1}}% para propiedades pagadas de contado al 100%</h6>
						<h6 class="green-text futura-light">Precio de ${{vlSabino.propertyData.totalPlan1}} MXN</h6>
						<p class="promo__description grey-text">¡Oferta limitada!</p>
					</div>
					
					<div class="divider"></div>

					<div class="p-20">
						<h6 class="deep-purple-text futura-light">{{vlSabino.propertyData.discountPlan2}}% de descuento para propiedades con financiamiento hasta 180 Meses</h6>
						<h6 class="green-text futura-light">Precio de ${{vlSabino.propertyData.totalPlan2}} MXN</h6>
						<p class="promo__description grey-text">¡Oferta limitada!</p>
					</div>
					
					<div class="divider"></div>

					<a class="p-20">
						<p class="blue-text futura-book">¡Apártalo ahora!</p>
						<p class="green-text">Con tan solo $10,000 MXN</p>
						<a href="https://pay.billpocket.com/habitta" class="btn blue-bg no__shadow futura-bold">Apártar ahora</>
					</a>
				</div>

			</div>

			<div class="divider"></div>
			<div class="option-menu-dialog" ng-controller="ContactMenuCtrl as contactCtrl">
				<a class="btn blue-bg no-shadows futura-demi lighter right mt-10" href="https://pay.billpocket.com/habitta">APÁRTAR AQUÍ</a>
				<md-menu class="right mr-20 mt-10"  md-offset="0 -60">
					<button aria-label="Abrir Menu de Contacto" class="btn-flat futura-ligt" ng-click="contactCtrl.openMenu($mdMenu, $event)">
						Contacto
					</button>
					<md-menu-content width="4">
						<md-menu-item>
							<md-button disabled="disabled">
								+52 1 442 127 5214
							</md-button>
						</md-menu-item>
						<md-menu-divider></md-menu-divider>
						<md-menu-item>
							<md-button ng-click="contactCtrl.toWhatsapp()">
								Whatsapp
							</md-button>
						</md-menu-item>
						<md-menu-item>
							<md-button ng-click="contactCtrl.toCall()">
								Llamada
							</md-button>
						</md-menu-item>
					</md-menu-content>
				</md-menu>
			</div>
		</div>
	</div>



	<div class="plano_container">

		<div class="container mt-64">
			<div class="row quote-header">
				<div class="col s12">
					<h1 class="center-align">SABINO</h1>
					<div class="quote-description">
						<p class="left">Cotiza facilmente con un solo Click</p>
						<img class="quote-icon-tap mt-15 ml-10 left" src="media/assets/img/icons/tap.svg">
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="color-table">
				<div class="color-block vl-property-active-bg left"></div>
				<p class="pl-40 py-2">DISPONIBLE</p>
			</div>
			<div>
				<div class="color-block mustard-bg left"></div>
				<p class="pl-40 py-2">NO DISPONIBLE</p>
			</div>
		</div>

		<svg class="quote__map" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
			viewBox="0 0 1366 740" style="enable-background:new 0 0 1366 740;" xml:space="preserve">
			<style type="text/css">
				.st1{fill:#FFFFFF;}
				.st3{font-size:10.37px;}
				.st4{font-size:9.53px;}
				.st5{fill:#E9E439;}
				.st7{font-size:19.06px;}
				.st8{fill:#CB6120;}
				.st9{opacity:0.75;fill:#CB6120;enable-background:new;}
				.st11{font-size:10.22px;}
				.st12{fill:none;stroke:#FFFFFF;stroke-width:1.48;stroke-miterlimit:10;}
				.st13{font-family:'CenturyGothic';}
				.st14{fill:none;stroke:#FFFFFF;stroke-width:1.49;stroke-miterlimit:10;}
				.st15{fill:#FFFFFF;stroke:#FFFFFF;stroke-width:1.49;stroke-miterlimit:10;}
			</style>
			<image style="overflow:visible;" width="1366" height="740" xlink:href="media/assets/img/habitta/veredas-lira/app/quote/etapa_1/sabino.jpg"></image>
			<g>
				<g>
					<g ng-class="vlSabino.inmovablesClassList[58]" ng-click="vlSabino.showPropertyData(5, '1')">
						<polygon class="property vl-sprite-1" points="170.4,19.1 141.4,156.6 210.1,156.6 218.2,19.1"/>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 160.52 155.6649)" class="st1 futura-light st3">08.35</text>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 178.72 32.235)" class="st1 futura-light st3">06.00</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 196.46 111.7451)" class="st1 futura-light st4">129.20 m2</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 185.4901 102.7246)" class="st5 futura-book st7">01</text>
						<text transform="matrix(9.219681e-02 -0.9957 0.9957 9.219681e-02 168.37 103.4046)" class="st1 futura-light st3">18.15</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 207.6 100.2652)" class="st1 futura-light st3">18.00</text>
						<polygon class="st8" points="186.7,120 178.5,127.7 170.7,119.5 170.7,119.5"/>
						<polygon class="st9" points="186.7,120 170.7,119.5 178.9,111.7"/>
					</g>
					<g ng-class="vlSabino.inmovablesClassList[59]" ng-click="vlSabino.showPropertyData(5, '2')">
						<polygon class="property vl-sprite-2" points="218.2,19.1 210.1,156.6 266.9,156.7 274.4,19.1"/>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 223.12 155.6649)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 231.71 32.235)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 254.67 111.7549)" class="st1 futura-light st4">126.00 m2</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 243.69 102.7246)" class="st5 futura-book st7">02</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 265.8 100.2652)" class="st1 futura-light st3">18.00</text>
					</g>
					<g ng-class="vlSabino.inmovablesClassList[60]" ng-click="vlSabino.showPropertyData(5, '3')">
						<polygon class="property vl-sprite-1" points="274.4,19.1 266.9,156.7 324.1,156.7 329.8,19.1"/>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 278.48 155.6649)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 287.08 32.235)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 310.03 111.7451)" class="st1 futura-light st4">126.00 m2</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 299.06 102.7246)" class="st5 futura-book st7">03</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 321.17 100.2652)" class="st1 futura-light st3">18.00</text>
					</g>
					<g ng-class="vlSabino.inmovablesClassList[61]" ng-click="vlSabino.showPropertyData(5, '4')">
						<polygon class="property vl-sprite-2" points="329.8,19.1 324.1,156.7 380.9,156.7 385.9,19.1"/>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 334.91 155.6649)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 343.51 32.235)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 366.46 111.7451)" class="st1 futura-light st4">126.00 m2</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 355.4899 102.7246)" class="st5 futura-book st7">04</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 377.6 100.2652)" class="st1 futura-light st3">18.00</text>
					</g>
					<g ng-class="vlSabino.inmovablesClassList[62]" ng-click="vlSabino.showPropertyData(5, '5')">
						<polygon class="property vl-sprite-1" points="385.9,19.1 380.9,156.7 437.6,156.7 441.9,19.2"/>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 392.53 155.6649)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 398.08 32.235)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 425.44 111.7451)" class="st1 futura-light st4">126.00 m2</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 414.47 102.7246)" class="st5 futura-book st7">05</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 436.57 100.2652)" class="st1 futura-light st3">18.00</text>
					</g>
					<g ng-class="vlSabino.inmovablesClassList[63]" ng-click="vlSabino.showPropertyData(5, '6')">
						<polygon class="property vl-sprite-2" points="441.9,19.2 437.6,156.7 494.4,156.7 497.9,19.2"/>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 448.49 155.765)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 453.95 32.235)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 481.31 111.7451)" class="st1 futura-light st4">126.00 m2</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 470.43 102.8154)" class="st5 futura-book st7">06</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 492.44 100.2652)" class="st1 futura-light st3">18.00</text>
					</g>
					<g ng-class="vlSabino.inmovablesClassList[64]" ng-click="vlSabino.showPropertyData(5, '7')">
						<polygon class="property vl-sprite-1" points="497.9,19.2 494.4,156.7 551.2,156.7 553.7,19.2"/>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 503.45 154.715)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 509 32.235)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 536.3599 111.7451)" class="st1 futura-light st4">126.00 m2</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 525.39 102.7246)" class="st5 futura-book st7">07</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 547.5001 100.2652)" class="st1 futura-light st3">18.00</text>
					</g>
					<g ng-class="vlSabino.inmovablesClassList[65]" ng-click="vlSabino.showPropertyData(5, '8')">
						<polygon class="property vl-sprite-2" points="553.7,19.2 551.2,156.7 608.6,156.7 609.9,19.2"/>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 563.11 155.6649)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 567.01 32.235)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 596.02 111.7451)" class="st1 futura-light st4">126.00 m2</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 585.05 102.7246)" class="st5 futura-book st7">08</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 607.16 100.2652)" class="st1 futura-light st3">18.00</text>
					</g>
					<g ng-class="vlSabino.inmovablesClassList[66]" ng-click="vlSabino.showPropertyData(5, '9')">
						<polygon class="property vl-sprite-1" points="609.9,19.2 608.6,156.7 665.3,156.7 665.3,19.2"/>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 616.86 155.6649)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 620.75 32.235)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 649.7599 111.7451)" class="st1 futura-light st4">126.00 m2</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 638.79 102.7246)" class="st5 futura-book st7">09</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 660.9001 100.2652)" class="st1 futura-light st3">18.00</text>
					</g>
					<g ng-class="vlSabino.inmovablesClassList[67]" ng-click="vlSabino.showPropertyData(5, '10')">
						<polygon class="property vl-sprite-2" points="665.3,19.2 665.3,156.7 722.1,156.8 721.2,19.2"/>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 676.49 155.6649)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 680.38 32.235)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 706.47 111.7451)" class="st1 futura-light st4">126.00 m2</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 695.49 102.7246)" class="st5 futura-book st7">10</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 717.61 100.2652)" class="st1 futura-light st3">18.00</text>
					</g>
					<g ng-class="vlSabino.inmovablesClassList[68]" ng-click="vlSabino.showPropertyData(5, '11')">
						<polygon class="property vl-sprite-1" points="721.2,19.2 722.1,156.8 778.3,156.8 777,19.2"/>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 731.25 155.6649)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 735.14 32.235)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 761.23 111.7451)" class="st1 futura-light st4">126.00 m2</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 750.25 102.7246)" class="st5 futura-book st7">11</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 772.36 100.275)" class="st1 futura-light st3">18.00</text>
					</g>
					<g ng-class="vlSabino.inmovablesClassList[69]" ng-click="vlSabino.showPropertyData(5, '12')">
						<polygon class="property vl-sprite-2" points="777,19.2 778.3,156.8 835.3,156.8 833.4,19.3"/>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 787.65 155.6649)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 791.36 32.235)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 817.62 111.7451)" class="st1 futura-light st4">126.00 m2</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 806.65 102.7246)" class="st5 futura-book st7">12</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 828.76 100.2652)" class="st1 futura-light st3">18.00</text>
					</g>
					<g ng-class="vlSabino.inmovablesClassList[70]" ng-click="vlSabino.showPropertyData(5, '13')">
						<polygon class="property vl-sprite-1" points="833.4,19.3 835.3,156.8 892.1,156.8 888.8,19.3"/>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 843.52 155.6649)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 846.93 32.235)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 873.49 111.7451)" class="st1 futura-light st4">126.00 m2</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 862.52 102.7246)" class="st5 futura-book st7">13</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 884.63 100.2652)" class="st1 futura-light st3">18.00</text>
					</g>
					<g ng-class="vlSabino.inmovablesClassList[71]" ng-click="vlSabino.showPropertyData(5, '14')">
						<polygon class="property vl-sprite-2" points="888.8,19.3 892.1,156.8 949.2,156.8 944.8,19.3"/>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 899.24 155.6649)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 902.65 32.235)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 929.21 111.7451)" class="st1 futura-light st4">126.00 m2</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 918.24 102.7246)" class="st5 futura-book st7">14</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 940.35 100.2652)" class="st1 futura-light st3">18.00</text>
					</g>
					<g ng-class="vlSabino.inmovablesClassList[72]" ng-click="vlSabino.showPropertyData(5, '15')">
						<polygon class="property vl-sprite-1" points="944.8,19.3 949.2,156.8 1006,156.8 1000.6,19.3"/>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 957.28 155.6649)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 957.28 32.235)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 987.25 111.7451)" class="st1 futura-light st4">126.00 m2</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 976.28 102.7246)" class="st5 futura-book st7">15</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 998.39 100.2652)" class="st1 futura-light st3">18.00</text>
					</g>
					<g ng-class="vlSabino.inmovablesClassList[73]" ng-click="vlSabino.showPropertyData(5, '16')">
						<polygon class="property vl-sprite-2" points="1000.6,19.3 1006,156.8 1063.3,156.8 1056.5,19.3"/>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 1017.59 155.6649)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 1017.6 32.235)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 1045.63 111.7451)" class="st1 futura-light st4">126.00 m2</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 1034.65 102.7246)" class="st5 futura-book st7">16</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 1056.76 100.2652)" class="st1 futura-light st3">18.00</text>
					</g>
					<g ng-class="vlSabino.inmovablesClassList[74]" ng-click="vlSabino.showPropertyData(5, '17')">
						<polygon class="property vl-sprite-1" points="1056.5,19.3 1063.3,156.8 1119.3,156.8 1112.3,19.3"/>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 1073.15 155.095)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 1070.28 32.235)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 1101.16 111.7451)" class="st1 futura-light st4">126.00 m2</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 1090.1899 102.7246)" class="st5 futura-book st7">17</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 1112.29 100.2652)" class="st1 futura-light st3">18.00</text>
					</g>
					<g ng-class="vlSabino.inmovablesClassList[75]" ng-click="vlSabino.showPropertyData(5, '18')">
						<polygon class="property vl-sprite-2" points="1112.3,19.3 1119.3,156.8 1191.6,156.9 1183,19.4"/>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 1138.11 155.6649)" class="st1 futura-light st3">08.85</text>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 1135.26 32.235)" class="st1 futura-light st3">08.85</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 1166.14 111.7451)" class="st1 futura-light st4">159.35 m2</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 1155.17 102.7246)" class="st5 futura-book st7">18</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 1183.41 100.2652)" class="st1 futura-light st3">18.00</text>
						<polygon class="st8" points="1158.1,120 1149.9,127.7 1142.2,119.5 1142.2,119.5"/>
						<polygon class="st9" points="1158.1,120 1142.2,119.5 1150.4,111.8"/>
					</g>
					<g ng-class="vlSabino.inmovablesClassList[76]" ng-click="vlSabino.showPropertyData(5, '19')">
						<polygon class="property vl-sprite-1" points="1183,19.4 1191.6,156.9 1263.3,156.9 1253.6,19.4"/>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 1199.67 99.565)" class="st1 futura-light st11">20.00</text>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 1210.16 155.6649)" class="st1 futura-light st3">08.85</text>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 1207.3101 32.235)" class="st1 futura-light st3">08.85</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 1238.1801 111.7451)" class="st1 futura-light st4">159.35 m2</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 1227.22 102.7246)" class="st5 futura-book st7">19</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 1255.46 100.2652)" class="st1 futura-light st3">18.00</text>
						<polygon class="st8" points="1230.3,119.7 1222.1,127.4 1214.4,119.2 1214.4,119.2"/>
						<polygon class="st9" points="1230.3,119.7 1214.4,119.2 1222.6,111.5"/>
					</g>
					<g ng-class="vlSabino.inmovablesClassList[77]" ng-click="vlSabino.showPropertyData(5, '20')">
						<polygon class="property vl-sprite-2" points="1336.7,19.4 1253.6,19.4 1263.3,156.9 1332.7,156.9"/>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 1286.5601 155.6649)" class="st1 futura-light st3">08.85</text>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 1283.71 32.235)" class="st1 futura-light st3">10.87</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 1310.26 111.7451)" class="st1 futura-light st4">177.50 m2</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 1299.29 102.7246)" class="st5 futura-book st7">20</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 1333.83 100.2652)" class="st1 futura-light st3">18.11</text>
						<polygon class="st8" points="1301.9,120 1293.7,127.7 1285.9,119.5 1285.9,119.5"/>
						<polygon class="st9" points="1301.9,120 1285.9,119.5 1294.1,111.8"/>
					</g>
					<g>
						<line class="st12" x1="218.3" y1="19" x2="210" y2="157.3"/>
						<line class="st12" x1="274.5" y1="19" x2="266.8" y2="157.3"/>
						<line class="st12" x1="329.9" y1="19" x2="324" y2="157.3"/>
						<line class="st12" x1="385.9" y1="19" x2="380.8" y2="157.3"/>
						<line class="st12" x1="441.9" y1="19" x2="437.6" y2="157.3"/>
						<line class="st12" x1="497.9" y1="19.2" x2="494.4" y2="157.5"/>
						<line class="st12" x1="553.7" y1="19.2" x2="551.2" y2="157.5"/>
						<line class="st12" x1="609.9" y1="19.2" x2="608.5" y2="157.5"/>
						<line class="st12" x1="665.3" y1="19.2" x2="665.3" y2="157.5"/>
						<line class="st12" x1="721.2" y1="19.2" x2="722.1" y2="157.5"/>
						<line class="st12" x1="777" y1="19.2" x2="778.3" y2="157.5"/>
						<line class="st12" x1="833.4" y1="19.2" x2="835.3" y2="157.5"/>
						<line class="st12" x1="888.8" y1="19.2" x2="892.1" y2="157.5"/>
						<line class="st12" x1="944.8" y1="19.2" x2="949.3" y2="157.5"/>
						<line class="st12" x1="1000.6" y1="19.4" x2="1006.1" y2="158.1"/>
						<line class="st12" x1="1056.4" y1="19.4" x2="1063.5" y2="158.1"/>
						<line class="st12" x1="1112.2" y1="19.4" x2="1119.5" y2="158.1"/>
						<line class="st12" x1="1182.9" y1="19.4" x2="1191.8" y2="158.1"/>
						<line class="st12" x1="1253.5" y1="19.4" x2="1263.5" y2="158.1"/>
					</g>
				</g>
				<g>
					<g ng-class="vlSabino.inmovablesClassList[78]" ng-click="vlSabino.showPropertyData(5, '21')">
						<path class="property vl-sprite-1" d="M270.3,358h26l6.4-139.5h-47c-2.4,0-4.8,0.5-7,1.5c-1.2,0.5-2.4,1.3-3.3,2.2l-7.7,135.8
							L270.3,358z"/>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 257.88 355.565)" class="st1 st13 st3">07.00</text>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 265.35 230.6549)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 284.9999 310.1748)" class="st1 futura-light st4">119.60 m2</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 274.03 301.1553)" class="st5 futura-book st7">21</text>
						<text transform="matrix(-2.984068e-02 -0.9996 0.9996 -2.984068e-02 254.61 301.4754)" class="st1 futura-light st3">16.24</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 296.1301 298.6851)" class="st1 st13 st3">17.15</text>
						<polygon class="st8" points="276.4,319.9 268.2,327.7 260.4,319.5 260.4,319.5"/>
						<polygon class="st9" points="276.4,319.9 260.4,319.5 268.6,311.7"/>
					</g>
					<g ng-class="vlSabino.inmovablesClassList[79]" ng-click="vlSabino.showPropertyData(5, '22')">
						<polygon class="property vl-sprite-2" points="329.1,358 329.1,358 354.7,358 360.1,218.6 302.7,218.6 296.3,358"/>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 315.5 355.565)" class="st1 st13 st3">07.00</text>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 319.44 230.6549)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 339.09 310.1748)" class="st1 futura-light st4">120.00 m2</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 328.1199 301.1445)" class="st5 futura-book st7">22</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 350.23 298.6949)" class="st1 futura-light st3">17.15</text>
					</g>
					<g ng-class="vlSabino.inmovablesClassList[80]" ng-click="vlSabino.showPropertyData(5, '23')">
						<polygon class="property vl-sprite-1" points="387.1,358 387.1,358 412.4,358 417.3,218.7 360.1,218.6 354.6,358"/>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 371.79 355.565)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 375.14 230.6549)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 394.78 310.1748)" class="st1 futura-light st4">120.00 m2</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 383.81 301.1553)" class="st5 futura-book st7">23</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 405.92 298.6949)" class="st1 futura-light st3">17.15</text>
					</g>
					<g ng-class="vlSabino.inmovablesClassList[81]" ng-click="vlSabino.showPropertyData(5, '24')">
						<polygon class="property vl-sprite-2" points="445.8,358.1 445.8,358.1 471.4,358.1 474.9,218.7 417.3,218.7 412.4,358"/>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 432.92 355.565)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 433.92 230.6549)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 453.56 310.1748)" class="st1 futura-light st4">120.00 m2</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 442.59 301.1553)" class="st5 futura-book st7">24</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 464.7 298.6851)" class="st1 futura-light st3">17.15</text>
					</g>
					<g ng-class="vlSabino.inmovablesClassList[82]" ng-click="vlSabino.showPropertyData(5, '25')">
						<polygon class="property vl-sprite-1" points="503.6,358.1 503.6,358.1 529.8,358.1 532.3,218.8 474.9,218.7 471.4,358.1"/>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 490.91 355.565)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 491.9 230.6549)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 511.55 310.1748)" class="st1 futura-light st4">120.00 m2</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 500.58 301.1445)" class="st5 futura-book st7">25</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 522.68 298.6949)" class="st1 futura-light st3">17.15</text>
					</g>
					<g ng-class="vlSabino.inmovablesClassList[83]" ng-click="vlSabino.showPropertyData(5, '26')">
						<polygon class="property vl-sprite-2" points="562.4,358.1 562.4,358.1 588.3,358.1 589.9,218.9 532.3,218.8 529.8,358.1"/>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 547.13 355.115)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 548.22 230.6549)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 567.86 310.1748)" class="st1 futura-light st4">120.00 m2</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 556.8901 301.1445)" class="st5 futura-book st7">26</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 579.0001 298.6949)" class="st1 futura-light st3">17.15</text>
					</g>
					<g ng-class="vlSabino.inmovablesClassList[84]" ng-click="vlSabino.showPropertyData(5, '27')">
						<polygon class="property vl-sprite-1" points="620.7,358.1 620.7,358.1 645.9,358.1 646.7,218.9 589.9,218.9 588.3,358.1"/>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 603.89 355.125)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 604.97 230.6549)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 624.61 310.165)" class="st1 futura-light st4">120.00 m2</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 613.6401 301.1445)" class="st5 futura-book st7">27</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 635.7501 298.6949)" class="st1 futura-light st3">17.15</text>
					</g>
					<g ng-class="vlSabino.inmovablesClassList[85]" ng-click="vlSabino.showPropertyData(5, '28')">
						<polygon class="property vl-sprite-2" points="679.1,358.1 679.1,358.1 704.3,358.1 704.3,219 646.7,218.9 645.9,358.1"/>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 661.78 355.125)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 662.87 230.6549)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 682.51 310.1748)" class="st1 futura-light st4">120.00 m2</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 671.54 301.1445)" class="st5 futura-book st7">28</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 693.6501 298.6851)" class="st1 futura-light st3">17.15</text>
					</g>
					<g ng-class="vlSabino.inmovablesClassList[86]" ng-click="vlSabino.showPropertyData(5, '29')">
						<polygon class="property vl-sprite-1" points="737.1,358.1 737.1,358.1 762.2,358.1 761,219 704.3,219 704.3,358.1"/>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 720.72 353.825)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 721.71 230.6549)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 741.36 310.1748)" class="st1 futura-light st4">120.00 m2</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 730.39 301.1553)" class="st5 futura-book st7">29</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 752.4899 298.6851)" class="st1 futura-light st3">17.15</text>
					</g>
					<g ng-class="vlSabino.inmovablesClassList[87]" ng-click="vlSabino.showPropertyData(5, '30')">
						<polygon class="property vl-sprite-2" points="795.4,358.1 795.4,358.1 820.6,358.1 818.5,219.1 761,219 762.2,358.1"/>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 779.67 353.825)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 777.12 230.6549)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 796.77 310.1748)" class="st1 futura-light st4">120.00 m2</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 785.8 301.1445)" class="st5 futura-book st7">30</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 807.91 298.6949)" class="st1 futura-light st3">17.15</text>
					</g>
					<g ng-class="vlSabino.inmovablesClassList[88]" ng-click="vlSabino.showPropertyData(5, '31')">
						<polygon class="property vl-sprite-1" points="853.8,358.1 853.8,358.1 879.1,358.1 875.8,219.1 818.5,219.1 820.6,358.1"/>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 834.3 353.835)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 831.46 230.6549)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 851.11 310.1748)" class="st1 futura-light st4">120.00 m2</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 840.14 301.1445)" class="st5 futura-book st7">31</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 862.24 298.6851)" class="st1 futura-light st3">17.15</text>
					</g>
					<g ng-class="vlSabino.inmovablesClassList[89]" ng-click="vlSabino.showPropertyData(5, '32')">
						<polygon class="property vl-sprite-2" points="912.2,358.1 912.2,358.1 937.3,358.1 933.3,219.2 875.8,219.1 879.1,358.1"/>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 894.77 353.825)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 891.63 230.6549)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 911.28 310.165)" class="st1 futura-light st4">120.00 m2</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 900.31 301.1445)" class="st5 futura-book st7">32</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 922.41 298.6949)" class="st1 futura-light st3">17.15</text>
					</g>
					<g ng-class="vlSabino.inmovablesClassList[90]" ng-click="vlSabino.showPropertyData(5, '33')">
						<polygon class="property vl-sprite-1" points="970.3,358.1 970.3,358.1 996.1,358.1 990.9,219.2 933.3,219.2 937.3,358.1"/>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 951.05 353.825)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 946.15 230.6549)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 965.79 310.165)" class="st1 futura-light st4">120.00 m2</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 954.82 301.1445)" class="st5 futura-book st7">33</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 976.93 298.6949)" class="st1 futura-light st3">17.15</text>
					</g>
					<g ng-class="vlSabino.inmovablesClassList[91]" ng-click="vlSabino.showPropertyData(5, '34')">
						<polygon class="property vl-sprite-2" points="1029.3,358.1 1029.3,358.1 1073.1,358.1 1066.5,219.3 990.9,219.2 996.1,358.1"/>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 1017.59 353.835)" class="st1 futura-light st3">09.23</text>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 1012.77 230.6549)" class="st1 futura-light st3">09.23</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 1032.41 310.1748)" class="st1 futura-light st4">158.23 m2</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 1021.44 301.1445)" class="st5 futura-book st7">34</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 1052.4399 298.6949)" class="st1 futura-light st3">17.15</text>
					</g>
					<g ng-class="vlSabino.inmovablesClassList[92]" ng-click="vlSabino.showPropertyData(5, '35')">
						<path class="property vl-sprite-1" d="M1090,358.1h56.5l-6.7-124.8c0,0,0.5-2.7-3-8s-10.9-5.9-10.9-5.9l-59.4-0.1l6.6,138.8
							L1090,358.1z"/>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 1093.14 353.835)" class="st1 futura-light st3">09.23</text>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 1088.63 230.6549)" class="st1 futura-light st3">09.23</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 1108.28 310.165)" class="st1 futura-light st4">157.37 m2</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 1097.3101 301.1445)" class="st5 futura-book st7">35</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 1128.3 298.6949)" class="st1 futura-light st3">15.15</text>
						<polygon class="st8" points="1099.2,318.4 1091,326.1 1083.2,317.9 1083.2,317.9"/>
						<polygon class="st9" points="1099.2,318.4 1083.2,317.9 1091.4,310.2"/>
					</g>
					<g ng-class="vlSabino.inmovablesClassList[93]" ng-click="vlSabino.showPropertyData(5, '36')">
						<path class="property vl-sprite-1" d="M212.2,358l-7.7,143.1h58.6l7.3-143.1L212.2,358z"/>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 223.12 497.875)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 229.55 372.975)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 249.31 452.4854)" class="st1 futura-light st4">120.00 m2</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 238.34 443.4551)" class="st5 futura-book st7">36</text>
						<text transform="matrix(-2.984068e-02 -0.9996 0.9996 -2.984068e-02 222.64 443.7849)" class="st1 futura-light st3">17.15</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 260.44 440.9947)" class="st1 futura-light st3">17.15</text>
						<polygon class="st8" points="239.7,465.4 231.5,473.2 223.7,465 223.7,465"/>
						<polygon class="st9" points="239.7,465.4 223.7,465 231.9,457.2"/>
					</g>
					<g ng-class="vlSabino.inmovablesClassList[94]" ng-click="vlSabino.showPropertyData(5, '37')">
						<path class="property vl-sprite-2" d="M296.3,358h-26L263,501.2h59.7l6.4-143.1L296.3,358z"/>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 281.44 497.875)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 289.22 372.975)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 309.2499 452.4854)" class="st1 futura-light st4">120.00 m2</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 298.28 443.4551)" class="st5 futura-book st7">37</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 322.6201 441.0054)" class="st1 futura-light st3">17.15</text>
					</g>
					<g ng-class="vlSabino.inmovablesClassList[95]" ng-click="vlSabino.showPropertyData(5, '38')">
						<path class="property vl-sprite-1" d="M354.6,358h-25.5l-6.4,143.1h58.9l5.4-143.2L354.6,358z"/>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 343.51 497.875)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 343.71 372.965)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 365.9 452.4854)" class="st1 futura-light st4">120.00 m2</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 354.93 443.4551)" class="st5 futura-book st7">38</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 379.27 441.0054)" class="st1 futura-light st3">17.15</text>
					</g>
					<g ng-class="vlSabino.inmovablesClassList[96]" ng-click="vlSabino.showPropertyData(5, '39')">
						<path class="property vl-sprite-2" d="M412.4,358h-25.4l-5.4,143.2h59.9l4.3-143.2L412.4,358z"/>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 402.86 497.885)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 405.92 372.975)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 426.39 452.4854)" class="st1 futura-light st4">120.00 m2</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 415.42 443.4648)" class="st5 futura-book st7">39</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 438.8901 441.0054)" class="st1 futura-light st3">17.15</text>
					</g>
					<g ng-class="vlSabino.inmovablesClassList[97]" ng-click="vlSabino.showPropertyData(5, '40')">
						<path class="property vl-sprite-1" d="M471.4,358.1h-25.6l-4.3,143.2h59.1l2.9-143.2L471.4,358.1z"/>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 460.48 497.875)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 462.28 372.965)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 486.31 453.1953)" class="st1 futura-light st4">120.00 m2</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 475.34 444.165)" class="st5 futura-book st7">40</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 498.81 441.7047)" class="st1 futura-light st3">17.15</text>
					</g>
					<g ng-class="vlSabino.inmovablesClassList[98]" ng-click="vlSabino.showPropertyData(5, '41')">
						<path class="property vl-sprite-2" d="M529.8,358.1h-26.1l-2.9,143.2h59.7l1.9-143.2L529.8,358.1z"/>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 521.53 497.875)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 521.52 372.965)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 546.82 452.4854)" class="st1 futura-light st4">120.00 m2</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 535.85 443.4551)" class="st5 futura-book st7">41</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 557.96 441.0054)" class="st1 futura-light st3">17.15</text>
					</g>
					<g ng-class="vlSabino.inmovablesClassList[99]" ng-click="vlSabino.showPropertyData(5, '42')">
						<path class="property vl-sprite-1" d="M588.3,358.1h-25.9l-1.9,143.2h58.9l1.3-143.2L588.3,358.1z"/>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 579.51 497.875)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 579.51 372.975)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 604.81 452.4854)" class="st1 futura-light st4">120.00 m2</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 593.84 443.4551)" class="st5 futura-book st7">42</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 615.94 441.0054)" class="st1 futura-light st3">17.15</text>
					</g>
					<g ng-class="vlSabino.inmovablesClassList[100]" ng-click="vlSabino.showPropertyData(5, '43')">
						<path class="property vl-sprite-2" d="M645.9,358.1h-25.2l-1.3,143.2h59.7V358.1H645.9z"/>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 639.91 497.875)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 637.49 372.965)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 662.79 452.4854)" class="st1 futura-light st4">120.00 m2</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 651.82 443.4551)" class="st5 futura-book st7">43</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 673.93 441.0054)" class="st1 futura-light st3">17.15</text>
					</g>
					<g ng-class="vlSabino.inmovablesClassList[101]" ng-click="vlSabino.showPropertyData(5, '44')">
						<path class="property vl-sprite-1" d="M704.3,358.1h-25.2v143.2H738L737,358L704.3,358.1z"/>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 697.78 497.875)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 693.12 372.965)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 722.38 452.4854)" class="st1 futura-light st4">120.00 m2</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 711.41 443.4551)" class="st5 futura-book st7">44</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 733.5099 441.0054)" class="st1 futura-light st3">17.15</text>
					</g>
					<g ng-class="vlSabino.inmovablesClassList[102]" ng-click="vlSabino.showPropertyData(5, '45')">
						<path class="property vl-sprite-2" d="M762.2,358.1h-25.1l1,143.2h59.1L795.5,358L762.2,358.1z"/>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 756.44 497.875)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 751.78 372.965)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 781.03 452.4854)" class="st1 futura-light st4">120.00 m2</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 770.06 443.4551)" class="st5 futura-book st7">45</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 792.16 441.0054)" class="st1 futura-light st3">17.15</text>
					</g>
					<g ng-class="vlSabino.inmovablesClassList[103]" ng-click="vlSabino.showPropertyData(5, '46')">
						<path class="property vl-sprite-1" d="M820.6,358.1h-25.2l1.7,143.3h59.1l-2.5-143.3H820.6z"/>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 813.69 497.875)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 811.29 372.965)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 839.96 452.4854)" class="st1 futura-light st4">120.00 m2</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 828.99 443.4551)" class="st5 futura-book st7">46</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 851.09 441.0054)" class="st1 futura-light st3">17.15</text>
					</g>
					<g ng-class="vlSabino.inmovablesClassList[104]" ng-click="vlSabino.showPropertyData(5, '47')">
						<path class="property vl-sprite-2" d="M879.1,358.1h-25.4l2.5,143.3h59.9l-4-143.3L879.1,358.1z"/>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 873.47 497.885)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 868.77 372.975)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 897.43 452.4854)" class="st1 futura-light st4">120.00 m2</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 886.46 443.4551)" class="st5 futura-book st7">47</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 908.57 441.0054)" class="st1 futura-light st3">17.15</text>
					</g>
					<g ng-class="vlSabino.inmovablesClassList[105]" ng-click="vlSabino.showPropertyData(5, '48')">
						<path class="property vl-sprite-1" d="M937.3,358.1h-25.2l4,143.3h59.3l-5.2-143.3L937.3,358.1z"/>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 930.76 497.875)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 929.19 372.965)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 958.14 452.4854)" class="st1 futura-light st4">120.00 m2</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 947.17 443.4551)" class="st5 futura-book st7">48</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 969.27 441.0054)" class="st1 futura-light st3">17.15</text>
					</g>
					<g ng-class="vlSabino.inmovablesClassList[106]" ng-click="vlSabino.showPropertyData(5, '49')">
						<path class="property vl-sprite-2" d="M996.1,358.1h-25.8l5.2,143.3h59.2l-5.4-143.3L996.1,358.1z"/>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 990.76 497.875)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 987.23 372.975)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 1014.26 452.4854)" class="st1 futura-light st4">120.00 m2</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 1003.29 443.4551)" class="st5 futura-book st7">49</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 1027.3099 441.0054)" class="st1 futura-light st3">17.15</text>
					</g>
					<g ng-class="vlSabino.inmovablesClassList[107]" ng-click="vlSabino.showPropertyData(5, '50')">
						<path class="property vl-sprite-1" d="M1073.1,358.1h-43.8l5.4,143.3h61.5l-6.2-143.3L1073.1,358.1z"/>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 1048.95 497.875)" class="st1 futura-light st3">07.26</text>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 1045.61 372.965)" class="st1 futura-light st3">07.26</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 1073.15 451.9453)" class="st1 futura-light st4">124.44 m2</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 1062.1801 442.915)" class="st5 futura-book st7">50</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 1088.54 441.0054)" class="st1 futura-light st3">17.15</text>
					</g>
					<g ng-class="vlSabino.inmovablesClassList[108]" ng-click="vlSabino.showPropertyData(5, '51')">
						<path class="property vl-sprite-2" d="M1153.6,489.4l-7.1-131.3H1090l6.2,143.3h47.3c0.5,0,3.8-0.6,7.3-4.1
							C1152.9,495.2,1153.9,492.3,1153.6,489.4z"/>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 1108.26 497.875)" class="st1 futura-light st3">07.26</text>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 1104.41 372.965)" class="st1 futura-light st3">07.26</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 1135.46 452.4746)" class="st1 futura-light st4">123.58 m2</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 1124.49 443.4551)" class="st5 futura-book st7">51</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 1146.6 441.0054)" class="st1 futura-light st3">15.15</text>
						<polygon class="st8" points="1126.8,460.2 1118.6,467.9 1110.8,459.7 1110.8,459.7"/>
						<polygon class="st9" points="1126.8,460.2 1110.8,459.7 1119,451.9"/>
					</g>
					<g>
						<line class="st12" x1="212" y1="358.1" x2="1147.1" y2="358.1"/>
						<line class="st12" x1="245.3" y1="223.9" x2="237.6" y2="358.1"/>
						<line class="st12" x1="302.5" y1="219" x2="296" y2="358.1"/>
						<line class="st12" x1="359.6" y1="219.2" x2="354.2" y2="358.1"/>
						<line class="st12" x1="416.6" y1="219.2" x2="411.8" y2="358.1"/>
						<line class="st12" x1="474" y1="219.2" x2="470.5" y2="358.1"/>
						<line class="st12" x1="531.2" y1="219.2" x2="528.7" y2="358.1"/>
						<line class="st12" x1="588.6" y1="219.2" x2="587.1" y2="358.1"/>
						<line class="st12" x1="645.2" y1="219.2" x2="644.5" y2="358.1"/>
						<line class="st12" x1="702.6" y1="219.2" x2="702.6" y2="358.1"/>
						<line class="st12" x1="759.2" y1="219.2" x2="760.4" y2="358.1"/>
						<line class="st12" x1="816.4" y1="219.2" x2="818.6" y2="358.1"/>
						<line class="st12" x1="873.6" y1="219.2" x2="877" y2="358.1"/>
						<line class="st12" x1="930.8" y1="218.7" x2="935" y2="358.1"/>
						<line class="st12" x1="988.2" y1="218.7" x2="993.5" y2="358.1"/>
						<line class="st12" x1="1063.6" y1="218.7" x2="1070.3" y2="358.1"/>
						<line class="st12" x1="204.3" y1="501.7" x2="212.2" y2="358.1"/>
						<line class="st12" x1="262.7" y1="501.7" x2="269.9" y2="358.1"/>
						<line class="st12" x1="322.2" y1="501.7" x2="328.7" y2="358.1"/>
						<line class="st12" x1="381" y1="501.7" x2="386.5" y2="358.1"/>
						<line class="st12" x1="440.8" y1="501.7" x2="445.1" y2="358.1"/>
						<line class="st12" x1="499.7" y1="501.9" x2="502.6" y2="358.1"/>
						<line class="st12" x1="559.3" y1="501.9" x2="561.2" y2="358.1"/>
						<line class="st12" x1="618" y1="501.9" x2="619.4" y2="358.1"/>
						<line class="st12" x1="677.6" y1="501.9" x2="677.6" y2="358.1"/>
						<line class="st12" x1="736.3" y1="501.9" x2="735.3" y2="358.1"/>
						<line class="st12" x1="795.3" y1="502.1" x2="793.5" y2="358.1"/>
						<line class="st12" x1="854.2" y1="502.1" x2="851.7" y2="358.1"/>
						<line class="st12" x1="914" y1="502.1" x2="909.9" y2="358.1"/>
						<line class="st12" x1="973.1" y1="502.1" x2="967.8" y2="358.1"/>
						<line class="st12" x1="1032.1" y1="502.1" x2="1026.6" y2="358.1"/>
						<line class="st12" x1="1093.4" y1="502.1" x2="1087.1" y2="358.1"/>
					</g>
				</g>
				<g>
					<g ng-class="vlSabino.inmovablesClassList[109]" ng-click="vlSabino.showPropertyData(5, '52')">
						<polygon class="property vl-sprite-1" points="58.8,568.3 28.5,718.3 107.1,718.4 117.2,568.3"/>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 56.58 713.3049)" class="st1 futura-light st3">09.15</text>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 77.96 580.145)" class="st1 futura-light st3">06.91</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 85.13 667.915)" class="st1 futura-light st4">137.76 m2</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 74.16 658.8848)" class="st5 futura-book st7">52</text>
						<text transform="matrix(3.699259e-02 -0.9993 0.9993 3.699259e-02 53.34 659.3647)" class="st1 futura-light st3">17.30</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 106.85 656.4351)" class="st1 futura-light st3">17.15</text>
						<polygon class="st8" points="74.2,677.1 65.9,684.9 58.2,676.7 58.2,676.7"/>
						<polygon class="st9" points="74.2,677.1 58.2,676.7 66.4,668.9"/>
					</g>
					<g ng-class="vlSabino.inmovablesClassList[110]" ng-click="vlSabino.showPropertyData(5, '53')">
						<polygon class="property vl-sprite-2" points="117.2,568.3 107.1,718.4 168.4,718.5 176.7,568.3"/>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 128.7 713.3049)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 140.94 580.145)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 152.9901 667.915)" class="st1 futura-light st4">120.00 m2</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 142.02 658.8945)" class="st5 futura-book st7">53</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 169.61 656.4351)" class="st1 futura-light st3">17.15</text>
					</g>
					<g ng-class="vlSabino.inmovablesClassList[111]" ng-click="vlSabino.showPropertyData(5, '54')">
						<polygon class="property vl-sprite-1" points="176.7,568.3 168.4,718.5 228.6,718.6 236.3,568.3"/>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 188.22 713.3049)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 197.8 580.145)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 215.34 667.915)" class="st1 futura-light st4">120.00 m2</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 204.3699 658.8848)" class="st5 futura-book st7">54</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 229.55 656.4351)" class="st1 futura-light st3">17.15</text>
					</g>
					<g ng-class="vlSabino.inmovablesClassList[112]" ng-click="vlSabino.showPropertyData(5, '55')">
						<polygon class="property vl-sprite-2" points="236.3,568.3 228.6,718.6 289.5,718.7 296.3,568.3"/>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 251.16 713.3049)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 259.07 580.145)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 275.66 667.915)" class="st1 futura-light st4">120.00 m2</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 264.69 658.8848)" class="st5 futura-book st7">55</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 290.2501 656.4351)" class="st1 futura-light st3">17.15</text>
					</g>
					<g ng-class="vlSabino.inmovablesClassList[113]" ng-click="vlSabino.showPropertyData(5, '56')">
						<polygon class="property vl-sprite-1" points="296.3,568.3 289.5,718.7 349.7,718.8 356.3,568.3"/>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 307.59 713.3049)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 315.5 580.145)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 335.55 667.915)" class="st1 futura-light st4">120.00 m2</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 324.58 658.8848)" class="st5 futura-book st7">56</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 350.23 656.4351)" class="st1 futura-light st3">17.15</text>
					</g>
					<g ng-class="vlSabino.inmovablesClassList[114]" ng-click="vlSabino.showPropertyData(5, '57')">
						<polygon class="property vl-sprite-2" points="356.3,568.3 349.7,718.8 411.1,718.9 416.3,568.3"/>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 371.87 713.3049)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 379.27 580.145)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 392.52 667.915)" class="st1 futura-light st4">120.00 m2</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 381.55 658.8848)" class="st5 futura-book st7">57</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 411.09 656.4351)" class="st1 futura-light st3">17.15</text>
					</g>
					<g ng-class="vlSabino.inmovablesClassList[115]" ng-click="vlSabino.showPropertyData(5, '58')">
						<polygon class="property vl-sprite-1" points="416.3,568.3 411.1,718.9 471.6,719 475.2,568.3"/>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 431.03 713.3049)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 438.42 580.145)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 451.66 667.915)" class="st1 futura-light st4">120.00 m2</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 440.69 658.8945)" class="st5 futura-book st7">58</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 470.2401 656.4351)" class="st1 futura-light st3">17.15</text>
					</g>
					<g ng-class="vlSabino.inmovablesClassList[116]" ng-click="vlSabino.showPropertyData(5, '59')">
						<polygon class="property vl-sprite-2" points="475.2,568.3 471.6,719 533.4,719.1 535.6,568.3"/>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 495.48 713.3049)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 498.81 580.145)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 520.06 667.915)" class="st1 futura-light st4">120.00 m2</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 509.09 658.8848)" class="st5 futura-book st7">59</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 531.2 656.4351)" class="st1 futura-light st3">17.15</text>
					</g>
					<g ng-class="vlSabino.inmovablesClassList[117]" ng-click="vlSabino.showPropertyData(5, '60')">
						<polygon class="property vl-sprite-1" points="535.6,568.3 533.4,719.1 593.2,719.2 595,568.3"/>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 554.59 713.3049)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 557.4 580.145)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 576.2299 667.915)" class="st1 futura-light st4">120.00 m2</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 565.2599 658.8848)" class="st5 futura-book st7">60</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 590.6 656.4351)" class="st1 futura-light st3">17.15</text>
					</g>
					<g ng-class="vlSabino.inmovablesClassList[118]" ng-click="vlSabino.showPropertyData(5, '61')">
						<polygon class="property vl-sprite-2" points="595,568.3 593.2,719.2 654.5,719.3 655.3,568.3"/>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 619.3 713.3049)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 614.64 580.145)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 639.94 667.915)" class="st1 futura-light st4">120.00 m2</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 628.96 658.8945)" class="st5 futura-book st7">61</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 651.07 656.4351)" class="st1 futura-light st3">17.15</text>
					</g>
					<g ng-class="vlSabino.inmovablesClassList[119]" ng-click="vlSabino.showPropertyData(5, '62')">
						<path class="property vl-sprite-1" d="M655.3,568.3l-0.8,151l60.4,0.1V568.3H655.3z"/>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 675.65 713.3049)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 676.43 580.145)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 696.29 667.915)" class="st1 futura-light st4">120.00 m2</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 685.32 658.8848)" class="st5 futura-book st7">62</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 707.42 656.4351)" class="st1 futura-light st3">17.15</text>
					</g>
					<g ng-class="vlSabino.inmovablesClassList[120]" ng-click="vlSabino.showPropertyData(5, '63')">
						<path class="property vl-sprite-2" d="M714.9,568.3v151.1l61.2,0.1l-1.5-151.2H714.9z"/>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 738.08 713.3049)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 733.84 580.145)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 758.71 667.915)" class="st1 futura-light st4">120.00 m2</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 747.75 658.8848)" class="st5 futura-book st7">63</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 769.85 656.4351)" class="st1 futura-light st3">17.15</text>
					</g>
					<g ng-class="vlSabino.inmovablesClassList[121]" ng-click="vlSabino.showPropertyData(5, '64')">
						<polygon class="property vl-sprite-1" points="774.5,568.3 776,719.5 835.8,719.6 834,568.3"/>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 793.07 713.3049)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 793.85 580.145)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 820.32 667.915)" class="st1 futura-light st4">120.00 m2</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 809.35 658.8848)" class="st5 futura-book st7">64</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 831.46 656.4351)" class="st1 futura-light st3">17.15</text>
					</g>
					<g ng-class="vlSabino.inmovablesClassList[122]" ng-click="vlSabino.showPropertyData(5, '65')">
						<polygon class="property vl-sprite-2" points="834,568.3 835.8,719.6 897.2,719.7 894,568.3"/>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 853.65 713.3049)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 853.65 580.145)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 874.29 667.915)" class="st1 futura-light st4">120.00 m2</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 863.32 658.8848)" class="st5 futura-book st7">65</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 893.08 656.4351)" class="st1 futura-light st3">17.15</text>
					</g>
					<g ng-class="vlSabino.inmovablesClassList[123]" ng-click="vlSabino.showPropertyData(5, '66')">
						<polygon class="property vl-sprite-1" points="894,568.3 897.2,719.7 958.2,719.8 953.6,568.3"/>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 920.86 713.3049)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 911.25 580.145)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 937.53 667.915)" class="st1 futura-light st4">120.00 m2</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 926.56 658.8848)" class="st5 futura-book st7">66</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 953.08 656.4351)" class="st1 futura-light st3">17.15</text>
					</g>
					<g ng-class="vlSabino.inmovablesClassList[124]" ng-click="vlSabino.showPropertyData(5, '67')">
						<polygon class="property vl-sprite-2" points="953.6,568.3 958.2,719.8 1019.3,719.9 1013.5,568.3"/>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 978.31 713.3049)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 972.12 580.145)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 998.32 667.915)" class="st1 futura-light st4">120.00 m2</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 987.35 658.8848)" class="st5 futura-book st7">67</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 1014.23 656.4254)" class="st1 futura-light st3">17.15</text>
					</g>
					<g ng-class="vlSabino.inmovablesClassList[125]" ng-click="vlSabino.showPropertyData(5, '68')">
						<polygon class="property vl-sprite-1" points="1013.5,568.3 1019.3,719.9 1079.9,720 1073.5,568.3"/>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 1035.9299 713.3049)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 1031.9 580.145)" class="st1 futura-light st3">07.00</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 1056.6899 667.915)" class="st1 futura-light st4">120.00 m2</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 1045.72 658.8848)" class="st5 futura-book st7">68</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 1074.51 656.4351)" class="st1 futura-light st3">17.15</text>
					</g>
					<g ng-class="vlSabino.inmovablesClassList[126]" ng-click="vlSabino.showPropertyData(5, '69')">
						<polygon class="property vl-sprite-2" points="1073.5,568.3 1079.9,720 1163.6,720.1 1155.1,568.3"/>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 1105.97 713.3049)" class="st1 futura-light st3">09.64</text>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 1104.41 580.145)" class="st1 futura-light st3">09.64</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 1133.3199 667.915)" class="st1 futura-light st4">165.38 m2</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 1122.34 658.8848)" class="st5 futura-book st7">69</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 1155.17 656.4351)" class="st1 futura-light st3">17.15</text>
					</g>
					<g ng-class="vlSabino.inmovablesClassList[127]" ng-click="vlSabino.showPropertyData(5, '70')">
						<polygon class="property vl-sprite-1" points="1155.1,568.3 1163.6,720.1 1246.7,720.2 1237.7,568.3"/>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 1192.26 713.3049)" class="st1 futura-light st3">09.64</text>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 1189.97 580.145)" class="st1 futura-light st3">09.64</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 1216.3199 667.915)" class="st1 futura-light st4">165.38 m2</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 1205.35 658.8848)" class="st5 futura-book st7">70</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 1238.1801 656.4351)" class="st1 futura-light st3">17.15</text>
						<polygon class="st8" points="1207.7,674.5 1199.4,682.3 1191.7,674.1 1191.7,674.1"/>
						<polygon class="st9" points="1207.7,674.5 1191.7,674.1 1199.9,666.3"/>
					</g>
					<g ng-class="vlSabino.inmovablesClassList[128]" ng-click="vlSabino.showPropertyData(5, '71')">
						<polygon class="property vl-sprite-2" points="1318.3,568.3 1237.7,568.3 1246.7,720.2 1313.2,720.4"/>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 1269.53 713.3049)" class="st1 futura-light st3">07.72</text>
						<text transform="matrix(0.9999 -1.099535e-02 1.099535e-02 0.9999 1264.42 580.145)" class="st1 futura-light st3">09.64</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 1290.76 667.9053)" class="st1 futura-light st4">148.83 m2</text>
						<text transform="matrix(6.283155e-03 -1 1 6.283155e-03 1279.79 658.8848)" class="st5 futura-book st7">71</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 1314.64 656.4351)" class="st1 futura-light st3">17.26</text>
						<polygon class="st8" points="1282.4,674.5 1274.2,682.3 1266.4,674.1 1266.4,674.1"/>
						<polygon class="st9" points="1282.4,674.5 1266.4,674.1 1274.6,666.3"/>
					</g>
					<g>
						<line class="st14" x1="106.8" y1="721" x2="117.4" y2="568"/>
						<line class="st14" x1="168.2" y1="721" x2="176.9" y2="568"/>
						<line class="st14" x1="228.4" y1="721" x2="236.5" y2="568"/>
						<line class="st14" x1="289.4" y1="720.6" x2="296.5" y2="567.6"/>
						<line class="st14" x1="349.6" y1="720.6" x2="356.5" y2="567.6"/>
						<line class="st14" x1="411" y1="720.6" x2="416.5" y2="567.6"/>
						<line class="st14" x1="471.6" y1="720.6" x2="475.3" y2="567.6"/>
						<line class="st14" x1="533.3" y1="720.6" x2="535.7" y2="567.6"/>
						<line class="st14" x1="593.1" y1="720.6" x2="595.1" y2="567.6"/>
						<line class="st14" x1="654.5" y1="720.6" x2="655.3" y2="567.6"/>
						<path class="st15" d="M714.9,720.6V568.2"/>
						<line class="st14" x1="776.1" y1="720.6" x2="774.5" y2="567.6"/>
						<line class="st14" x1="835.9" y1="721" x2="833.9" y2="568.4"/>
						<line class="st14" x1="897.3" y1="721" x2="893.9" y2="568.4"/>
						<line class="st14" x1="958.2" y1="721" x2="953.5" y2="568.4"/>
						<line class="st14" x1="1019.4" y1="721" x2="1013.3" y2="568.4"/>
						<line class="st14" x1="1080" y1="721" x2="1073.3" y2="568.4"/>
						<line class="st14" x1="1163.7" y1="721" x2="1154.9" y2="568.4"/>
						<line class="st14" x1="1246.9" y1="721" x2="1237.5" y2="567.6"/>
					</g>
				</g>
			</g>
		</svg>


	</div>


</body>
</html>