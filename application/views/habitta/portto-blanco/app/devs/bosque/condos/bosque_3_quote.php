<!DOCTYPE html>
<html lang="es_MX">
<head>
	<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" contet="ie=edge">
	<meta name="author" content="Ing. Saúl Fernando Torres Hernández">
	<meta name="description" content="Grúpo CCIMA S.A. de C.V." />
	<meta name="keywords" content="grupo ccima, navetec, constructora, servicio de construccion, desarrolladora, llave en mano, built to suit, renta de maquinaria, renta de gruas, maquinaria pesada para construccion, naves industriales, renta naves industriales, venta naves industriales, parques industriales, terrenos, terrenos industriales, terrenos habitacionales, bienes raices, inmobiliaria" />

	<title>Portto Blanco</title>

	<script type="text/javascript" src="media/assets/js/analytics.js"></script>

	<link rel="stylesheet" type="text/css" href="media/bower_components/materialize/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="media/assets/css/portto-blanco.css">
	<link rel="stylesheet" type="text/css" href="media/assets/css/helpers.css">
	<link rel="stylesheet" type="text/css" href="media/assets/css/quote.css">

	<script type="text/javascript" src="media/bower_components/jquery.min.js"></script>
	<script type="text/javascript" src="media/bower_components/materialize/js/materialize.min.js"></script>

</head>

<body ng-controller="PBBosqueQuoteCtrl as bosque">

	<md-sidenav class="cc-sidenav md-sidenav-left md-whiteframe-4dp" md-component-id="left">
		<md-toolbar class="md-hue-2">
			<h1 class="md-toolbar-tools">NAVEGACIÓN</h1>
		</md-toolbar>
		<a href="#!/portto_blanco" ng-click="close()">
			<div class="link-sidenav">
				<span>Inicio</span>
			</div>
		</a>
		<md-divider></md-divider>
		<a href="#!/portto_blanco-promociones" ng-click="close()">
			<div class="link-sidenav">
				<span>Promociones</span>
			</div>
		</a>
		<md-divider></md-divider>
		<a href="#!/portto_blanco-amenidades" ng-click="close()">
			<div class="link-sidenav">
				<span>Áreas comunes</span>
			</div>
		</a>
		<md-divider></md-divider>
		<a href="#!/portto_blanco-ubicacion" ng-click="close()">
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

				<a href="#!/portto_blanco" class="brand-logo white left"><img class="logo-pb" src="media/assets/img/habitta/portto-blanco/logos/logo.svg"></a>

				<ul class="nav-menu hide-on-med-and-down">
					<li><a href="#!/portto_blanco">Inicio</a></li>
					<li><a href="#!/portto_blanco-promociones">Promociones</a></li>
					<li><a href="#!/portto_blanco-amenidades">Áreas comunes</a></li>
					<li><a href="#!/portto_blanco-ubicacion">Ubicación</a></li>
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


	<div class="modal-dialog" ng-class="bosque.dialogDisplay">
		<div class="backdrop-dialog" ng-click="bosque.closeDialog()"></div>
		<div class="container-dialog p-20">
			<div class="toolbar-dialog blue-txt">
				Cotización
				<span ng-click="bosque.closeDialog()">
					<img class="btn-close-dialog mt-4" src="media/assets/img/icons/close.svg">
				</span>
			</div>
			<div class="content-dialog">

				<div class="divider"></div>

				<div class="p-20 grey lighten-5">
					<div class="p-5">
						<h6 class="futura-med">Portto Blanco {{bosque.propertyData.condominium}}</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light">Número {{bosque.propertyData.number}}</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light">Área {{bosque.propertyData.area}} M&sup2;</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light">Precio por M&sup2; ${{bosque.propertyData.cost_m2}} MXN</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light green-text" style="text-decoration: line-through;">Precio de ${{bosque.propertyData.total}} MXN</h6>
					</div>

					<div class="divider"></div>

					<div class="py-20 ">
					<h5 class="center-align grey-text futura-book">Promociones de Lanzamiento Digital</h5>
					</div>
					
					<div class="divider"></div>

					<div class="p-20">
						<h6 class="deep-purple-text futura-light">{{bosque.propertyData.discountPlan1}}% para propiedades pagadas de contado al 100%</h6>
						<h6 class="green-text futura-light">Precio de ${{bosque.propertyData.totalPlan1}} MXN</h6>
						<p class="promo__description grey-text">¡Oferta limitada!</p>
					</div>
					
					<div class="divider"></div>

					<div class="p-20">
						<h6 class="deep-purple-text futura-light">{{bosque.propertyData.discountPlan2}}% de descuento para propiedades con financiamiento hasta 180 Meses</h6>
						<h6 class="green-text futura-light">Precio de ${{bosque.propertyData.totalPlan2}} MXN</h6>
						<p class="promo__description grey-text">¡Oferta limitada!</p>
					</div>

					<div class="divider"></div>
					
					<div class="divider"></div>

					<div class="p-20">
						<h6 class="deep-purple-text futura-light">Compra en {{bosque.month}} y paga la primera mensualidad hasta {{bosque.nextMonth}}</h6>
						<p class="promo__description grey-text">*Pagando el 100% de enganche</p>
						<p class="promo__description grey-text">*Aplica para todas las operaciones a crédito realizadas en {{bosque.month + ' ' + bosque.year}}</p>
					</div>
					
					<div class="divider"></div>

					<a class="p-20">
						<p class="blue-text futura-book">¡Apártalo ahora!</p>
						<p class="green-text">Con tan solo $10,000 MXN</p>
					</a>
				</div>

			</div>

			<div class="divider"></div>
			<div class="option-menu-dialog" ng-controller="ContactMenuCtrl as contactCtrl">
				<a class="btn blue-bg no-shadows futura-demi lighter right mt-10" href="https://wa.me/+524422912223?text=Me%20interesa%20informacion%20de%20PorttoBlanco">APÁRTAR AQUÍ</a>
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
					<h1 class="center-align">Bosque 3</h1>
					<div class="quote-description">
						<p class="left">Cotiza facilmente con un solo Click</p>
						<img class="quote-icon-tap mt-15 ml-10 left" src="media/assets/img/icons/tap.svg">
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="color-table">
				<div class="color-block pb-property-active-bg left"></div>
				<p class="pl-40 py-2">DISPONIBLE</p>
			</div>
			<div>
				<div class="color-block pb__apart__bg left"></div>
				<p class="pl-40 py-2">NO DISPONIBLE</p>
			</div>
		</div>

		<svg version="1.1" class="quote__map" id="CONDO_BOSQUE_4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
			y="0px" viewBox="0 0 1366 853.4" style="enable-background:new 0 0 1366 853.4;" xml:space="preserve">
			
			<style type="text/css">
				.st1{fill:#FFFFFF;}
				.st3{font-size:7.7442px;}
				.st6{font-size:9.293px;}
				.st7{fill-rule:evenodd;clip-rule:evenodd;fill:#E0A843;}
				.st8{opacity:0.6;fill-rule:evenodd;clip-rule:evenodd;fill:#E0A843;enable-background:new    ;}
				.stx10{fill:none;stroke:#FFFFFF;stroke-width:1.5488;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
				.st11{font-size:7.7441px;}
				.st12{font-size:7.7447px;}
				.st13{font-size:9.2936px;}
				.st14{fill:#03234B;}
				.st15{font-size:5.9751px;}
				.st16{font-size:5.975px;}
				.st17{fill:none;stroke:#002856;stroke-width:3.0977;stroke-miterlimit:10;}
			</style>

			<image style="overflow:visible;enable-background:new;" width="3675" height="2296" xlink:href="media/assets/img/habitta/portto-blanco/app/devs/bosque/condos/bosque_3.jpg" transform="matrix(0.3717 0 0 0.3717 0 0)"></image>
			
			<g id="ISLA_A">
				<g class="property__active" ng-class="bosque.inmovablesClassList[227]" ng-click="bosque.showPropertyData(38, '1')">
					<polyline id="AL01" class="property pb-sprite-1" points="346.6,115.5 346.6,237.1 303.4,237.1 303.4,115.5 346.6,115.5"/>
					<text transform="matrix(0 -1 1 0 330.7524 193.5564)" class="st1 futura-light st3">18</text>
					<text transform="matrix(0 -1 1 0 330.7524 184.9704)" class="st1 futura-light st3">0.00 m2</text>
					<text transform="matrix(0 -1 1 0 342.3013 185.717)" class="st1 futura-light st3">22.5</text>
					<text transform="matrix(0 -1 1 0 342.3013 170.7751)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 317.6719 122.8855)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 328.3394 122.8855)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 317.6719 235.4987)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 328.3394 235.4987)" class="st1 futura-light st3">0</text>
					<g>
						<text transform="matrix(0 -1 1 0 323.1416 180.531)" class="mustard__fill futura-book st6">01</text>
					</g>
					<g>
						<polyline class="st7" points="325,220.9 319.3,215.1 325,209.4 325,220.9"/>
						<polyline class="st8" points="325,209.4 330.7,215.1 325,220.9 325,209.4"/>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[228]" ng-click="bosque.showPropertyData(38, '2')">
					<polyline id="AL02" class="property pb-sprite-2" points="303.4,115.5 303.4,237.1 260.2,237.1 260.2,115.5 303.4,115.5"/>
					<text transform="matrix(0 -1 1 0 287.2041 193.5564)" class="st1 futura-light st3">18</text>
					<text transform="matrix(0 -1 1 0 287.2041 184.9704)" class="st1 futura-light st3">0.00 m2</text>
					<text transform="matrix(0 -1 1 0 300.103 185.717)" class="st1 futura-light st3">22.5</text>
					<text transform="matrix(0 -1 1 0 300.103 170.7751)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 274.4287 122.8855)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 285.0967 122.8855)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 274.4287 235.4987)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 285.0967 235.4987)" class="st1 futura-light st3">0</text>
					<g>
						<text transform="matrix(0 -1 1 0 279.8926 180.528)" class="mustard__fill futura-book st6">02</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[229]" ng-click="bosque.showPropertyData(38, '3')">
					<polyline id="AL03" class="property pb-sprite-1" points="260.2,115.5 260.2,237.1 216.9,237.1 216.9,115.5 260.2,115.5"/>
					<text transform="matrix(0 -1 1 0 243.8945 193.5564)" class="st1 futura-light st3">18</text>
					<text transform="matrix(0 -1 1 0 243.8945 184.9704)" class="st1 futura-light st3">0.00 m2</text>
					<text transform="matrix(0 -1 1 0 256.1948 185.717)" class="st1 futura-light st3">22.5</text>
					<text transform="matrix(0 -1 1 0 256.1948 170.7751)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 231.1802 122.8855)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 241.8481 122.8855)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 231.1802 235.4987)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 241.8481 235.4987)" class="st1 futura-light st3">0</text>
					<g>
						<text transform="matrix(0 -1 1 0 236.668 180.531)" class="mustard__fill futura-book st6">03</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[230]" ng-click="bosque.showPropertyData(38, '4')">
					<polyline id="AL04" class="property pb-sprite-2" points="216.9,115.5 216.9,237.1 173.7,237.1 173.7,115.5 216.9,115.5"/>
					<text transform="matrix(0 -1 1 0 200.9409 193.5564)" class="st1 futura-light st3">18</text>
					<text transform="matrix(0 -1 1 0 200.9409 184.9704)" class="st1 futura-light st3">0.00 m2</text>
					<text transform="matrix(0 -1 1 0 213.4604 185.717)" class="st1 futura-light st3">22.5</text>
					<text transform="matrix(0 -1 1 0 213.4604 170.7751)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 187.9365 122.8855)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 198.6045 122.8855)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 187.9365 235.4987)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 198.6045 235.4987)" class="st1 futura-light st3">0</text>
					<g>
						<text transform="matrix(0 -1 1 0 193.4243 180.531)" class="mustard__fill futura-book st6">04</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[231]" ng-click="bosque.showPropertyData(38, '5')">
					<polyline id="AL05" class="property pb-sprite-1" points="173.7,115.5 173.7,237.1 130.4,237.1 130.4,115.5 173.7,115.5"/>
					<text transform="matrix(0 -1 1 0 157.7319 193.5564)" class="st1 futura-light st3">18</text>
					<text transform="matrix(0 -1 1 0 157.7319 184.9704)" class="st1 futura-light st3">0.00 m2</text>
					<text transform="matrix(0 -1 1 0 170.1592 185.717)" class="st1 futura-light st3">22.5</text>
					<text transform="matrix(0 -1 1 0 170.1592 170.7751)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 144.7041 122.8855)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 155.3721 122.8855)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 144.7041 235.4987)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 155.3721 235.4987)" class="st1 futura-light st3">0</text>
					<g>
						<text transform="matrix(0 -1 1 0 150.1875 180.531)" class="mustard__fill futura-book st6">05</text>
					</g>
					
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[232]" ng-click="bosque.showPropertyData(38, '6')">
					<polyline id="AL06" class="property pb-sprite-2" points="130.4,115.5 130.4,237.1 87.2,237.1 87.2,115.5 130.4,115.5"/>
					<text transform="matrix(0 -1 1 0 114.5757 193.5564)" class="st1 futura-light st3">18</text>
					<text transform="matrix(0 -1 1 0 114.5757 184.9704)" class="st1 futura-light st3">0.00 m2</text>
					<text transform="matrix(0 -1 1 0 127.5903 185.717)" class="st1 futura-light st3">22.5</text>
					<text transform="matrix(0 -1 1 0 127.5903 170.7751)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 101.4688 122.8855)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 112.1367 122.8855)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 101.4688 235.4987)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 112.1367 235.4987)" class="st1 futura-light st3">0</text>
					<g>
						<text transform="matrix(0 -1 1 0 106.9492 180.531)" class="mustard__fill futura-book st6">06</text>
					</g>
					
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[233]" ng-click="bosque.showPropertyData(38, '7')">
					<polyline id="AL07" class="property pb-sprite-1" points="87.2,115.5 87.2,237.1 44,237.1 44,115.5 87.2,115.5"/>
					<text transform="matrix(0 -1 1 0 71.5088 193.5564)" class="st1 futura-light st3">18</text>
					<text transform="matrix(0 -1 1 0 71.5088 184.9704)" class="st1 futura-light st3">0.00 m2</text>
					<text transform="matrix(0 -1 1 0 84.0527 185.717)" class="st1 futura-light st3">22.5</text>
					<text transform="matrix(0 -1 1 0 84.0527 170.7751)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 58.229 122.8855)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 68.897 122.8855)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 58.229 235.4987)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 68.897 235.4987)" class="st1 futura-light st3">0</text>
					<g>
						<text transform="matrix(0 -1 1 0 63.7046 180.531)" class="mustard__fill futura-book st6">07</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[234]" ng-click="bosque.showPropertyData(38, '8')">
					<polyline id="AL08" class="property pb-sprite-2" points="44,115.5 44,237.1 0.7,237.1 0.7,115.5 44,115.5"/>
					<text transform="matrix(0 -1 1 0 28.4766 193.5564)" class="st1 futura-light st3">18</text>
					<text transform="matrix(0 -1 1 0 28.4766 184.9704)" class="st1 futura-light st3">0.00 m2</text>
					<text transform="matrix(0 -1 1 0 40.7085 185.717)" class="st1 futura-light st3">22.5</text>
					<text transform="matrix(0 -1 1 0 40.7085 170.7751)" class="st1 futura-light st3">0</text>
					<text transform="matrix(0 -1 1 0 9.251 185.717)" class="st1 futura-light st3">22.5</text>
					<text transform="matrix(0 -1 1 0 9.251 170.7751)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 14.9854 122.8855)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 25.6533 122.8855)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 14.9854 235.4987)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 25.6533 235.4987)" class="st1 futura-light st3">0</text>
					<g>
						<text transform="matrix(0 -1 1 0 20.4658 180.531)" class="mustard__fill futura-book st6">08</text>
					</g>
					<polyline class="st7" points="22.4,220.9 16.7,215.1 22.4,209.4 22.4,220.9"/>
					<polyline class="st8" points="22.4,209.4 28.1,215.1 22.4,220.9 22.4,209.4"/>
				</g>
				<g id="DIVISIONES">
					<line class="stx10" x1="44" y1="237.1" x2="44" y2="115.5"/>
					<line class="stx10" x1="87.2" y1="237.1" x2="87.2" y2="115.5"/>
					<line class="stx10" x1="130.4" y1="237.1" x2="130.4" y2="115.5"/>
					<line class="stx10" x1="173.7" y1="237.1" x2="173.7" y2="115.5"/>
					<line class="stx10" x1="216.9" y1="237.1" x2="216.9" y2="115.5"/>
					<line class="stx10" x1="260.2" y1="237.1" x2="260.2" y2="115.5"/>
					<line class="stx10" x1="303.4" y1="237.1" x2="303.4" y2="115.5"/>
					<line class="stx10" x1="346.6" y1="237.1" x2="346.6" y2="115.5"/>
				</g>
			</g>
			<g id="ISLA_B">
				<g class="property__active" ng-class="bosque.inmovablesClassList[235]" ng-click="bosque.showPropertyData(38, '9')">
					<polyline id="BL09_2_" class="property pb-sprite-2" points="0.7,287.3 108.8,287.3 108.8,336 0.7,336 0.7,287.3"/>
					<text transform="matrix(1 0 0 1 37.1094 318.8518)" class="st1 futura-light st3">18</text>
					<text transform="matrix(1 0 0 1 45.6958 318.8518)" class="st1 futura-light st3">0.00 m2</text>
					<text transform="matrix(0 -1 1 0 106.249 318.9997)" class="st1 futura-light st3">9.0</text>
					<text transform="matrix(0 -1 1 0 106.249 308.3322)" class="st1 futura-light st3">0</text>
					<text transform="matrix(0 -1 1 0 9.9487 318.9997)" class="st1 futura-light st3">9.0</text>
					<text transform="matrix(0 -1 1 0 9.9487 308.3322)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 45.3062 295.0378)" class="st1 futura-light st3">20.0</text>
					<text transform="matrix(1 0 0 1 60.2485 295.0378)" class="st1 futura-light st3">0</text>
					<g>
						<text transform="matrix(1 0 0 1 50.4966 311.3279)" class="mustard__fill futura-book st6">09</text>
					</g>
					<g>
						<polyline class="st7" points="89.6,314.7 83.8,309 89.6,303.2 89.6,314.7"/>
						<polyline class="st8" points="89.6,303.2 95.3,309 89.6,314.7 89.6,303.2"/>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[236]" ng-click="bosque.showPropertyData(38, '10')">
					<polyline id="BL10_2_" class="property pb-sprite-1" points="0.7,336 108.8,336 108.8,379.2 0.7,379.2 0.7,336"/>
					<text transform="matrix(1 0 0 1 37.1094 366.3034)" class="st1 futura-light st3">16</text>
					<text transform="matrix(1 0 0 1 45.6958 366.3034)" class="st1 futura-light st3">0.00 m2</text>
					<text transform="matrix(0 -1 1 0 106.249 364.9485)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(0 -1 1 0 106.249 354.281)" class="st1 futura-light st3">0</text>
					<text transform="matrix(0 -1 1 0 9.9487 364.9485)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(0 -1 1 0 9.9487 354.281)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 45.3062 345.0647)" class="st1 futura-light st3">20.0</text>
					<text transform="matrix(1 0 0 1 60.2485 345.0647)" class="st1 futura-light st3">0</text>
					<g>
						<text transform="matrix(1 0 0 1 50.4966 358.8503)" class="mustard__fill futura-book st6">10</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[237]" ng-click="bosque.showPropertyData(38, '11')">
					<polyline id="BL11_2_" class="property pb-sprite-2" points="0.7,379.2 108.8,379.2 108.8,422.4 0.7,422.4 0.7,379.2"/>
					<text transform="matrix(1 0 0 1 37.1094 409.8972)" class="st1 futura-light st3">16</text>
					<text transform="matrix(1 0 0 1 45.6958 409.8972)" class="st1 futura-light st3">0.00 m2</text>
					<text transform="matrix(0 -1 1 0 106.249 408.1799)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(0 -1 1 0 106.249 397.5124)" class="st1 futura-light st3">0</text>
					<text transform="matrix(0 -1 1 0 9.9487 408.1799)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(0 -1 1 0 9.9487 397.5124)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 45.3062 388.9773)" class="st1 futura-light st3">20.0</text>
					<text transform="matrix(1 0 0 1 60.2485 388.9773)" class="st1 futura-light st3">0</text>
					<g>
						<text transform="matrix(1 0 0 1 50.4966 402.0901)" class="mustard__fill futura-book st6">11</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[238]" ng-click="bosque.showPropertyData(38, '12')">
					<polyline id="BL12_2_" class="property pb-sprite-1" points="0.7,422.4 108.8,422.4 108.8,465.7 0.7,465.7 0.7,422.4"/>
					<text transform="matrix(1 0 0 1 37.1094 454.2092)" class="st1 futura-light st3">16</text>
					<text transform="matrix(1 0 0 1 45.6958 454.2092)" class="st1 futura-light st3">0.00 m2</text>
					<text transform="matrix(0 -1 1 0 106.249 451.427)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(0 -1 1 0 106.249 440.759)" class="st1 futura-light st3">0</text>
					<text transform="matrix(0 -1 1 0 9.9487 451.427)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(0 -1 1 0 9.9487 440.759)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 45.3062 431.5764)" class="st1 futura-light st3">20.0</text>
					<text transform="matrix(1 0 0 1 60.2485 431.5764)" class="st1 futura-light st3">0</text>
					<g>
						<text transform="matrix(1 0 0 1 50.4966 445.3293)" class="mustard__fill futura-book st6">12</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[239]" ng-click="bosque.showPropertyData(38, '13')">
					<polyline id="BL13_2_" class="property pb-sprite-2" points="0.7,465.7 108.8,465.7 108.8,508.9 0.7,508.9 0.7,465.7"/>
					<text transform="matrix(1 0 0 1 37.1094 496.9758)" class="st1 futura-light st3">16</text>
					<text transform="matrix(1 0 0 1 45.6958 496.9758)" class="st1 futura-light st3">0.00 m2</text>
					<text transform="matrix(0 -1 1 0 106.249 494.6643)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(0 -1 1 0 106.249 483.9973)" class="st1 futura-light st3">0</text>
					<text transform="matrix(0 -1 1 0 9.9487 494.6643)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(0 -1 1 0 9.9487 483.9973)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 45.3062 474.342)" class="st1 futura-light st3">20.0</text>
					<text transform="matrix(1 0 0 1 60.2485 474.342)" class="st1 futura-light st3">0</text>
					<g>
						<text transform="matrix(1 0 0 1 50.4966 488.5627)" class="mustard__fill futura-book st6">13</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[240]" ng-click="bosque.showPropertyData(38, '14')">
					<polyline id="BL14_2_" class="property pb-sprite-1" points="0.7,508.9 108.8,508.9 108.8,552.2 0.7,552.2 0.7,508.9"/>
					<text transform="matrix(1 0 0 1 37.1094 540.1945)" class="st1 futura-light st3">16</text>
					<text transform="matrix(1 0 0 1 45.6958 540.1945)" class="st1 futura-light st3">0.00 m2</text>
					<text transform="matrix(0 -1 1 0 106.249 537.9064)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(0 -1 1 0 106.249 527.2394)" class="st1 futura-light st3">0</text>
					<text transform="matrix(0 -1 1 0 9.9487 537.9064)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(0 -1 1 0 9.9487 527.2394)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 45.3062 517.8732)" class="st1 futura-light st3">20.0</text>
					<text transform="matrix(1 0 0 1 60.2485 517.8732)" class="st1 futura-light st3">0</text>
					<g>
						<text transform="matrix(1 0 0 1 50.4966 531.6828)" class="mustard__fill futura-book st6">14</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[241]" ng-click="bosque.showPropertyData(38, '15')">
					<polyline id="BL15_2_" class="property pb-sprite-2" points="0.7,552.2 108.8,552.2 108.8,595.4 0.7,595.4 0.7,552.2"/>
					<text transform="matrix(1 0 0 1 37.1094 584.2307)" class="st1 futura-light st3">16</text>
					<text transform="matrix(1 0 0 1 45.6958 584.2307)" class="st1 futura-light st3">0.00 m2</text>
					<text transform="matrix(0 -1 1 0 106.249 581.1418)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(0 -1 1 0 106.249 570.4738)" class="st1 futura-light st3">0</text>
					<text transform="matrix(0 -1 1 0 9.9487 581.1418)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(0 -1 1 0 9.9487 570.4738)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 45.3062 563.424)" class="st1 futura-light st3">20.0</text>
					<text transform="matrix(1 0 0 1 60.2485 563.424)" class="st1 futura-light st3">0</text>
					<g>
						<text transform="matrix(1 0 0 1 50.4966 575.0119)" class="mustard__fill futura-book st6">15</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[242]" ng-click="bosque.showPropertyData(38, '16')">
					<polyline id="BL16_2_" class="property pb-sprite-1" points="0.7,595.4 108.8,595.4 108.8,644 0.7,644 0.7,595.4"/>
					<text transform="matrix(1 0 0 1 37.1094 628.2756)" class="st1 futura-light st3">18</text>
					<text transform="matrix(1 0 0 1 45.6958 628.2756)" class="st1 futura-light st3">0.00 m2</text>
					<text transform="matrix(0 -1 1 0 106.249 627.0832)" class="st1 futura-light st3">9.0</text>
					<text transform="matrix(0 -1 1 0 106.249 616.4172)" class="st1 futura-light st3">0</text>
					<text transform="matrix(0 -1 1 0 9.9487 627.0832)" class="st1 futura-light st3">9.0</text>
					<text transform="matrix(0 -1 1 0 9.9487 616.4172)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 45.3062 605.1418)" class="st1 futura-light st3">20.0</text>
					<text transform="matrix(1 0 0 1 60.2485 605.1418)" class="st1 futura-light st3">0</text>
					<g>
						<text transform="matrix(1 0 0 1 50.4966 620.9592)" class="mustard__fill futura-book st6">16</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[243]" ng-click="bosque.showPropertyData(38, '17')">
					<polyline id="BL17_2_" class="property pb-sprite-2" points="0.7,644 108.8,644 108.8,693.9 0.7,693.9 0.7,644"/>
					<text transform="matrix(1 0 0 1 37.1094 676.0822)" class="st1 futura-light st3">18</text>
					<text transform="matrix(1 0 0 1 45.6958 676.0822)" class="st1 futura-light st3">4.60 m2</text>
					<text transform="matrix(0 -1 1 0 106.249 677.7316)" class="st1 futura-light st3">9.23</text>
					<text transform="matrix(0 -1 1 0 9.9487 677.7316)" class="st1 futura-light st3">9.23</text>
					<text transform="matrix(1 0 0 1 45.3062 653.6848)" class="st1 futura-light st3">20.0</text>
					<text transform="matrix(1 0 0 1 60.2485 653.6848)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 45.3062 691.0324)" class="st1 futura-light st3">20.0</text>
					<text transform="matrix(1 0 0 1 60.2485 691.0324)" class="st1 futura-light st3">0</text>
					<g>
						<text transform="matrix(1 0 0 1 50.4966 668.6594)" class="mustard__fill futura-book st6">17</text>
					</g>
					<g>
						<polyline class="st7" points="89.6,674.7 83.8,669 89.6,663.3 89.6,674.7"/>
						<polyline class="st8" points="89.6,663.3 95.3,669 89.6,674.7 89.6,663.3"/>
					</g>
				</g>
				<g id="DIVISIONES_15_">
					<line class="stx10" x1="0.7" y1="644" x2="108.8" y2="644"/>
					<line class="stx10" x1="0.7" y1="595.4" x2="108.8" y2="595.4"/>
					<line class="stx10" x1="0.7" y1="552.2" x2="108.8" y2="552.2"/>
					<line class="stx10" x1="0.7" y1="508.9" x2="108.8" y2="508.9"/>
					<line class="stx10" x1="0.7" y1="465.7" x2="108.8" y2="465.7"/>
					<line class="stx10" x1="0.7" y1="422.4" x2="108.8" y2="422.4"/>
					<line class="stx10" x1="0.7" y1="379.2" x2="108.8" y2="379.2"/>
					<line class="stx10" x1="0.7" y1="336" x2="108.8" y2="336"/>
				</g>
			</g>
			<g id="ISLA_C">
				<g class="property__active" ng-class="bosque.inmovablesClassList[244]" ng-click="bosque.showPropertyData(38, '18')">
					<polyline id="CL18" class="property pb-sprite-1" points="45.5,744.6 45.5,852.7 2.3,852.7 2.3,744.6 45.5,744.6"/>
					<text transform="matrix(0 -1 1 0 30.811 816.2883)" class="st1 futura-light st3">16</text>
					<text transform="matrix(0 -1 1 0 30.811 807.7023)" class="st1 futura-light st3">0.00 m2</text>
					<text transform="matrix(0 -1 1 0 11.2559 806.1887)" class="st1 futura-light st3">20.0</text>
					<text transform="matrix(0 -1 1 0 11.2559 791.2453)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 18.0313 849.2766)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 28.6987 849.2766)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 18.0313 751.4699)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 28.6987 751.4699)" class="st1 futura-light st3">0</text>
					<g>
						<text transform="matrix(0 -1 1 0 23.585 802.9455)" class="mustard__fill futura-book st6">18</text>
					</g>
					<g>
						<polyline class="st7" points="23.9,769.5 18.2,763.8 23.9,758.1 23.9,769.5"/>
						<polyline class="st8" points="23.9,758.1 29.6,763.8 23.9,769.5 23.9,758.1"/>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[245]" ng-click="bosque.showPropertyData(38, '19')">
					<polyline id="CL19" class="property pb-sprite-2" points="88.8,744.6 88.8,852.7 45.5,852.7 45.5,744.6 88.8,744.6"/>
					<text transform="matrix(0 -1 1 0 74.3154 816.2883)" class="st1 futura-light st3">16</text>
					<text transform="matrix(0 -1 1 0 74.3154 807.7023)" class="st1 futura-light st3">0.00 m2</text>
					<text transform="matrix(1 0 0 1 61.2666 849.2766)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 71.9346 849.2766)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 61.2666 751.4699)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 71.9346 751.4699)" class="st1 futura-light st3">0</text>
					<text transform="matrix(0 -1 1 0 54.2173 806.1887)" class="st1 futura-light st3">20.0</text>
					<text transform="matrix(0 -1 1 0 54.2173 791.2453)" class="st1 futura-light st3">0</text>
					<g>
						<text transform="matrix(0 -1 1 0 66.8232 802.9455)" class="mustard__fill futura-book st6">19</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[246]" ng-click="bosque.showPropertyData(38, '20')">
					<polyline id="CL20" class="property pb-sprite-1" points="132,744.6 132,852.7 88.8,852.7 88.8,744.6 132,744.6"/>
					<text transform="matrix(0 -1 1 0 117.9839 816.2883)" class="st1 futura-light st3">16</text>
					<text transform="matrix(0 -1 1 0 117.9839 807.7023)" class="st1 futura-light st3">0.00 m2</text>
					<text transform="matrix(1 0 0 1 104.5088 849.2766)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 115.1768 849.2766)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 104.5088 751.4699)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 115.1768 751.4699)" class="st1 futura-light st3">0</text>
					<text transform="matrix(0 -1 1 0 97.689 806.1887)" class="st1 futura-light st3">20.0</text>
					<text transform="matrix(0 -1 1 0 97.689 791.2453)" class="st1 futura-light st3">0</text>
					<g>
						<text transform="matrix(0 -1 1 0 110.0684 802.9455)" class="mustard__fill futura-book st6">20</text>
					</g>
				
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[247]" ng-click="bosque.showPropertyData(38, '21')">
					<polyline id="CL21" class="property pb-sprite-2" points="175.3,744.6 175.3,852.7 132,852.7 132,744.6 175.3,744.6"/>
					<text transform="matrix(0 -1 1 0 162.0796 816.2883)" class="st1 futura-light st3">16</text>
					<text transform="matrix(0 -1 1 0 162.0796 807.7023)" class="st1 futura-light st3">0.00 m2</text>
					<text transform="matrix(1 0 0 1 147.7441 849.2766)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 158.4121 849.2766)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 147.7441 751.4699)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 158.4121 751.4699)" class="st1 futura-light st3">0</text>
					<text transform="matrix(0 -1 1 0 140.6406 806.1887)" class="st1 futura-light st3">20.0</text>
					<text transform="matrix(0 -1 1 0 140.6406 791.2453)" class="st1 futura-light st3">0</text>
					<g>
						<text transform="matrix(0 -1 1 0 153.3062 802.9455)" class="mustard__fill futura-book st6">21</text>
					</g>
				
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[248]" ng-click="bosque.showPropertyData(38, '22')">
					<polyline id="CL22" class="property pb-sprite-1" points="218.5,744.6 218.5,852.7 175.3,852.7 175.3,744.6 218.5,744.6"/>
					<text transform="matrix(0 -1 1 0 203.8071 816.2883)" class="st1 futura-light st3">16</text>
					<text transform="matrix(0 -1 1 0 203.8071 807.7023)" class="st1 futura-light st3">0.00 m2</text>
					<text transform="matrix(1 0 0 1 190.9941 849.2766)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 201.6621 849.2766)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 190.9941 751.4699)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 201.6621 751.4699)" class="st1 futura-light st3">0</text>
					<text transform="matrix(0 -1 1 0 184.1436 806.1887)" class="st1 futura-light st3">20.0</text>
					<text transform="matrix(0 -1 1 0 184.1436 791.2453)" class="st1 futura-light st3">0</text>
					<g>
						<text transform="matrix(0 -1 1 0 196.543 802.9455)" class="mustard__fill futura-book st6">22</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[249]" ng-click="bosque.showPropertyData(38, '23')">
					<polyline id="CL23" class="property pb-sprite-2" points="261.7,744.6 261.7,852.7 218.5,852.7 218.5,744.6 261.7,744.6"/>
					<text transform="matrix(0 -1 1 0 247.0132 816.2883)" class="st1 futura-light st3">16</text>
					<text transform="matrix(0 -1 1 0 247.0132 807.7023)" class="st1 futura-light st3">0.00 m2</text>
					<text transform="matrix(1 0 0 1 234.2192 849.2766)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 244.8867 849.2766)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 234.2192 751.4699)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 244.8867 751.4699)" class="st1 futura-light st3">0</text>
					<text transform="matrix(0 -1 1 0 227.2642 806.1887)" class="st1 futura-light st3">20.0</text>
					<text transform="matrix(0 -1 1 0 227.2642 791.2453)" class="st1 futura-light st3">0</text>
					<g>
						<text transform="matrix(0 -1 1 0 239.7866 802.8859)" class="mustard__fill futura-book st6">23</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[250]" ng-click="bosque.showPropertyData(38, '24')">
					<polyline id="CL24" class="property pb-sprite-1" points="304.9,744.6 304.9,852.7 261.7,852.7 261.7,744.6 304.9,744.6"/>
					<text transform="matrix(0 -1 1 0 290.8125 816.2883)" class="st1 futura-light st3">16</text>
					<text transform="matrix(0 -1 1 0 290.8125 807.7023)" class="st1 futura-light st3">0.00 m2</text>
					<text transform="matrix(1 0 0 1 277.4663 849.2766)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 288.1343 849.2766)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 277.4663 751.4699)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 288.1343 751.4699)" class="st1 futura-light st3">0</text>
					<text transform="matrix(0 -1 1 0 270.5664 806.1887)" class="st1 futura-light st3">20.0</text>
					<text transform="matrix(0 -1 1 0 270.5664 791.2453)" class="st1 futura-light st3">0</text>
					<g>
						<text transform="matrix(0 -1 1 0 283.0151 802.8859)" class="mustard__fill futura-book st6">24</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[251]" ng-click="bosque.showPropertyData(38, '25')">
					<polyline id="CL25" class="property pb-sprite-2" points="348.2,744.6 348.2,852.7 304.9,852.7 304.9,744.6 348.2,744.6"/>
					<text transform="matrix(0 -1 1 0 334.6104 816.2883)" class="st1 futura-light st3">16</text>
					<text transform="matrix(0 -1 1 0 334.6104 807.7023)" class="st1 futura-light st3">0.00 m2</text>
					<text transform="matrix(1 0 0 1 320.7148 849.2766)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 331.3828 849.2766)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 320.7148 751.4699)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 331.3828 751.4699)" class="st1 futura-light st3">0</text>
					<text transform="matrix(0 -1 1 0 313.5444 806.1887)" class="st1 futura-light st3">20.0</text>
					<text transform="matrix(0 -1 1 0 313.5444 791.2453)" class="st1 futura-light st3">0</text>
					<g>
						<text transform="matrix(0 -1 1 0 326.2598 802.8859)" class="mustard__fill futura-book st6">25</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[252]" ng-click="bosque.showPropertyData(38, '26')">
					<polyline id="CL26" class="property pb-sprite-1" points="391.4,744.6 391.4,852.7 348.2,852.7 348.2,744.6 391.4,744.6"/>
					<text transform="matrix(0 -1 1 0 377.8223 816.2883)" class="st1 futura-light st3">16</text>
					<text transform="matrix(0 -1 1 0 377.8223 807.7023)" class="st1 futura-light st3">0.00 m2</text>
					<text transform="matrix(1 0 0 1 363.9385 849.2766)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 374.6064 849.2766)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 363.9385 751.4699)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 374.6064 751.4699)" class="st1 futura-light st3">0</text>
					<text transform="matrix(0 -1 1 0 357.3457 806.1887)" class="st1 futura-light st3">20.0</text>
					<text transform="matrix(0 -1 1 0 357.3457 791.2453)" class="st1 futura-light st3">0</text>
					<g>
						<text transform="matrix(0 -1 1 0 369.5068 802.8859)" class="mustard__fill futura-book st6">26</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[253]" ng-click="bosque.showPropertyData(38, '27')">
					<polyline id="CL27" class="property pb-sprite-2" points="434.7,744.6 434.7,852.7 391.4,852.7 391.4,744.6 434.7,744.6"/>
					<text transform="matrix(0 -1 1 0 421.0308 816.2883)" class="st1 futura-light st3">16</text>
					<text transform="matrix(0 -1 1 0 421.0308 807.7023)" class="st1 futura-light st3">0.00 m2</text>
					<text transform="matrix(1 0 0 1 407.1816 849.2766)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 417.8501 849.2766)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 407.1816 751.4699)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 417.8501 751.4699)" class="st1 futura-light st3">0</text>
					<text transform="matrix(0 -1 1 0 400.5488 806.1887)" class="st1 futura-light st3">20.0</text>
					<text transform="matrix(0 -1 1 0 400.5488 791.2453)" class="st1 futura-light st3">0</text>
					<g>
						<text transform="matrix(0 -1 1 0 412.749 802.8859)" class="mustard__fill futura-book st6">27</text>
					</g>
					
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[254]" ng-click="bosque.showPropertyData(38, '28')">
					<polyline id="CL28" class="property pb-sprite-1" points="477.9,744.6 477.9,852.7 434.7,852.7 434.7,744.6 477.9,744.6"/>
					<text transform="matrix(0 -1 1 0 463.3945 816.2883)" class="st1 futura-light st3">16</text>
					<text transform="matrix(0 -1 1 0 463.3945 807.7023)" class="st1 futura-light st3">0.00 m2</text>
					<text transform="matrix(1 0 0 1 450.4238 849.2766)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 461.0923 849.2766)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 450.4238 751.4699)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 461.0923 751.4699)" class="st1 futura-light st3">0</text>
					<text transform="matrix(0 -1 1 0 444.3457 806.1887)" class="st1 futura-light st3">20.0</text>
					<text transform="matrix(0 -1 1 0 444.3457 791.2453)" class="st1 futura-light st3">0</text>
					<g>
						<text transform="matrix(0 -1 1 0 455.9766 802.8859)" class="mustard__fill futura-book st6">28</text>
					</g>
				
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[255]" ng-click="bosque.showPropertyData(38, '29')">
					<polyline id="CL29" class="property pb-sprite-2" points="521.2,744.6 521.2,852.7 477.9,852.7 477.9,744.6 521.2,744.6"/>
					<text transform="matrix(0 -1 1 0 507.4878 816.2883)" class="st1 futura-light st3">16</text>
					<text transform="matrix(0 -1 1 0 507.4878 807.7023)" class="st1 futura-light st3">0.00 m2</text>
					<text transform="matrix(1 0 0 1 493.6753 849.2766)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 504.3428 849.2766)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 493.6753 751.4699)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 504.3428 751.4699)" class="st1 futura-light st3">0</text>
					<text transform="matrix(0 -1 1 0 487.457 806.1887)" class="st1 futura-light st3">20.0</text>
					<text transform="matrix(0 -1 1 0 487.457 791.2453)" class="st1 futura-light st3">0</text>
					<g>
						<text transform="matrix(0 -1 1 0 499.2188 802.8859)" class="mustard__fill futura-book st6">29</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[256]" ng-click="bosque.showPropertyData(38, '30')">
					<polyline id="CL30" class="property pb-sprite-1" points="564.4,744.6 564.4,852.7 521.2,852.7 521.2,744.6 564.4,744.6"/>
					<text transform="matrix(0 -1 1 0 550.0918 816.2883)" class="st1 futura-light st3">16</text>
					<text transform="matrix(0 -1 1 0 550.0918 807.7023)" class="st1 futura-light st3">0.00 m2</text>
					<text transform="matrix(1 0 0 1 536.8999 849.2766)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 547.5674 849.2766)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 536.8999 751.4699)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 547.5674 751.4699)" class="st1 futura-light st3">0</text>
					<text transform="matrix(0 -1 1 0 530.5674 806.1887)" class="st1 futura-light st3">20.0</text>
					<text transform="matrix(0 -1 1 0 530.5674 791.2453)" class="st1 futura-light st3">0</text>
					<g>
						<text transform="matrix(0 -1 1 0 542.4648 802.8859)" class="mustard__fill futura-book st6">30</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[257]" ng-click="bosque.showPropertyData(38, '31')">
					<polyline id="CL31" class="property pb-sprite-2" points="607.6,744.6 607.6,852.7 564.4,852.7 564.4,744.6 607.6,744.6"/>
					<text transform="matrix(0 -1 1 0 593.1382 816.2883)" class="st1 futura-light st3">16</text>
					<text transform="matrix(0 -1 1 0 593.1382 807.7023)" class="st1 futura-light st3">0.00 m2</text>
					<text transform="matrix(1 0 0 1 580.1421 849.2766)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 590.8096 849.2766)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 580.1421 751.4699)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 590.8096 751.4699)" class="st1 futura-light st3">0</text>
					<text transform="matrix(0 -1 1 0 573.8716 806.1887)" class="st1 futura-light st3">20.0</text>
					<text transform="matrix(0 -1 1 0 573.8716 791.2453)" class="st1 futura-light st3">0</text>
					<g>
						<text transform="matrix(0 -1 1 0 585.688 802.8859)" class="mustard__fill futura-book st6">31</text>
					</g>
					
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[258]" ng-click="bosque.showPropertyData(38, '32')">
					<polyline id="CL32" class="property pb-sprite-1" points="650.9,744.6 650.9,852.7 607.6,852.7 607.6,744.6 650.9,744.6"/>
					<text transform="matrix(0 -1 1 0 637.2344 816.2883)" class="st1 futura-light st3">16</text>
					<text transform="matrix(0 -1 1 0 637.2344 807.7023)" class="st1 futura-light st3">0.00 m2</text>
					<text transform="matrix(1 0 0 1 623.3857 849.2766)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 634.0532 849.2766)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 623.3857 751.4699)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 634.0532 751.4699)" class="st1 futura-light st3">0</text>
					<text transform="matrix(0 -1 1 0 616.8135 806.1887)" class="st1 futura-light st3">20.0</text>
					<text transform="matrix(0 -1 1 0 616.8135 791.2453)" class="st1 futura-light st3">0</text>
					<g>
						<text transform="matrix(0 -1 1 0 628.9365 802.8859)" class="mustard__fill futura-book st6">32</text>
					</g>
					<g>
						<polyline class="st7" points="629.3,769.5 623.5,763.8 629.3,758.1 629.3,769.5"/>
						<polyline class="st8" points="629.3,758.1 635,763.8 629.3,769.5 629.3,758.1"/>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[259]" ng-click="bosque.showPropertyData(38, '33')">
					<polyline id="CL33" class="property pb-sprite-2" points="694.1,744.6 694.1,852.7 650.9,852.7 650.9,744.6 694.1,744.6"/>
					<text transform="matrix(0 -1 1 0 680.0435 816.2883)" class="st1 futura-light st3">16</text>
					<text transform="matrix(0 -1 1 0 680.0435 807.7023)" class="st1 futura-light st3">0.00 m2</text>
					<text transform="matrix(1 0 0 1 666.6074 849.2766)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 677.2749 849.2766)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 666.6074 751.4699)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 677.2749 751.4699)" class="st1 futura-light st3">0</text>
					<text transform="matrix(0 -1 1 0 660.7988 806.1887)" class="st1 futura-light st3">20.0</text>
					<text transform="matrix(0 -1 1 0 660.7988 791.2453)" class="st1 futura-light st3">0</text>
					<g>
						<text transform="matrix(0 -1 1 0 672.1787 802.8859)" class="mustard__fill futura-book st6">33</text>
					</g>
					<g>
						<polyline class="st7" points="672.5,769.5 666.8,763.8 672.5,758.1 672.5,769.5"/>
						<polyline class="st8" points="672.5,758.1 678.2,763.8 672.5,769.5 672.5,758.1"/>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[260]" ng-click="bosque.showPropertyData(38, '34')">
					<polyline id="CL34" class="property pb-sprite-1" points="737.3,744.6 737.3,852.7 694.1,852.7 694.1,744.6 737.3,744.6"/>
					<text transform="matrix(0 -1 1 0 723.1816 816.2883)" class="st1 futura-light st3">16</text>
					<text transform="matrix(0 -1 1 0 723.1816 807.7023)" class="st1 futura-light st3">0.00 m2</text>
					<text transform="matrix(1 0 0 1 709.8555 849.2766)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 720.5234 849.2766)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 709.8555 751.4699)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 720.5234 751.4699)" class="st1 futura-light st3">0</text>
					<text transform="matrix(0 -1 1 0 703.5645 806.1887)" class="st1 futura-light st3">20.0</text>
					<text transform="matrix(0 -1 1 0 703.5645 791.2453)" class="st1 futura-light st3">0</text>
					<g>
						<text transform="matrix(0 -1 1 0 715.4258 802.8859)" class="mustard__fill futura-book st6">34</text>
					</g>
					<g>
						<polyline class="st7" points="715.7,769.5 710,763.8 715.7,758.1 715.7,769.5"/>
						<polyline class="st8" points="715.7,758.1 721.5,763.8 715.7,769.5 715.7,758.1"/>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[261]" ng-click="bosque.showPropertyData(38, '35')">
					<polyline id="CL35" class="property pb-sprite-2" points="780.6,744.6 780.6,852.7 737.3,852.7 737.3,744.6 780.6,744.6"/>
					<text transform="matrix(0 -1 1 0 766.5156 816.2883)" class="st1 futura-light st3">16</text>
					<text transform="matrix(0 -1 1 0 766.5156 807.7023)" class="st1 futura-light st3">0.00 m2</text>
					<text transform="matrix(1 0 0 1 753.1055 849.2766)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 763.7725 849.2766)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 753.1055 751.4699)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 763.7725 751.4699)" class="st1 futura-light st3">0</text>
					<text transform="matrix(0 -1 1 0 746.7549 806.1887)" class="st1 futura-light st3">20.0</text>
					<text transform="matrix(0 -1 1 0 746.7549 791.2453)" class="st1 futura-light st3">0</text>
					<g>
						<text transform="matrix(0 -1 1 0 758.6504 802.8859)" class="mustard__fill futura-book st6">35</text>
					</g>
					<g>
						<polyline class="st7" points="759,769.5 753.3,763.8 759,758.1 759,769.5"/>
						<polyline class="st8" points="759,758.1 764.7,763.8 759,769.5 759,758.1"/>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[262]" ng-click="bosque.showPropertyData(38, '36')">
					<polyline id="CL36" class="property pb-sprite-1" points="823.8,744.6 823.8,852.7 780.6,852.7 780.6,744.6 823.8,744.6"/>
					<text transform="matrix(0 -1 1 0 809.4277 816.2883)" class="st1 futura-light st3">16</text>
					<text transform="matrix(0 -1 1 0 809.4277 807.7023)" class="st1 futura-light st3">0.00 m2</text>
					<text transform="matrix(1 0 0 1 796.3516 849.2766)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 807.0195 849.2766)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 796.3516 751.4699)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 807.0195 751.4699)" class="st1 futura-light st3">0</text>
					<text transform="matrix(0 -1 1 0 790.5762 806.1887)" class="st1 futura-light st3">20.0</text>
					<text transform="matrix(0 -1 1 0 790.5762 791.2453)" class="st1 futura-light st3">0</text>
					<g>
						<text transform="matrix(0 -1 1 0 801.8984 802.8859)" class="mustard__fill futura-book st6">36</text>
					</g>
					<g>
						<polyline class="st7" points="802.2,769.5 796.5,763.8 802.2,758.1 802.2,769.5"/>
						<polyline class="st8" points="802.2,758.1 808,763.8 802.2,769.5 802.2,758.1"/>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[263]" ng-click="bosque.showPropertyData(38, '37')">
					<polyline id="CL37" class="property pb-sprite-2" points="867.1,744.6 867.1,852.7 823.8,852.7 823.8,744.6 867.1,744.6"/>
					<text transform="matrix(0 -1 1 0 853.125 816.2883)" class="st1 futura-light st3">16</text>
					<text transform="matrix(0 -1 1 0 853.125 807.7023)" class="st1 futura-light st3">0.00 m2</text>
					<text transform="matrix(1 0 0 1 839.5742 849.2766)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 850.2422 849.2766)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 839.5742 751.4699)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 850.2422 751.4699)" class="st1 futura-light st3">0</text>
					<text transform="matrix(0 -1 1 0 833.5322 806.1887)" class="st1 futura-light st3">20.0</text>
					<text transform="matrix(0 -1 1 0 833.5322 791.2453)" class="st1 futura-light st3">0</text>
					<g>
						<text transform="matrix(0 -1 1 0 845.1406 802.8859)" class="mustard__fill futura-book st6">37</text>
					</g>
					<g>
						<polyline class="st7" points="845.5,769.5 839.7,763.8 845.5,758.1 845.5,769.5"/>
						<polyline class="st8" points="845.5,758.1 851.2,763.8 845.5,769.5 845.5,758.1"/>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[264]" ng-click="bosque.showPropertyData(38, '38')">
					<polyline id="CL38" class="property pb-sprite-1" points="910.3,744.6 910.3,852.7 867.1,852.7 867.1,744.6 910.3,744.6"/>
					<text transform="matrix(0 -1 1 0 896.6436 816.2883)" class="st1 futura-light st3">16</text>
					<text transform="matrix(0 -1 1 0 896.6436 807.7023)" class="st1 futura-light st3">0.00 m2</text>
					<text transform="matrix(1 0 0 1 882.8164 849.2766)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 893.4844 849.2766)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 882.8164 751.4699)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 893.4844 751.4699)" class="st1 futura-light st3">0</text>
					<text transform="matrix(0 -1 1 0 876.3789 806.1887)" class="st1 futura-light st3">20.0</text>
					<text transform="matrix(0 -1 1 0 876.3789 791.2453)" class="st1 futura-light st3">0</text>
					<g>
						<text transform="matrix(0 -1 1 0 888.3652 802.8859)" class="mustard__fill futura-book st6">38</text>
					</g>
					
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[265]" ng-click="bosque.showPropertyData(38, '39')">
					<polyline id="CL39" class="property pb-sprite-2" points="953.6,744.6 953.6,852.7 910.3,852.7 910.3,744.6 953.6,744.6"/>
					<text transform="matrix(0 -1 1 0 939.8008 816.2883)" class="st1 futura-light st3">16</text>
					<text transform="matrix(0 -1 1 0 939.8008 807.7023)" class="st1 futura-light st3">0.00 m2</text>
					<text transform="matrix(1 0 0 1 926.0557 849.2766)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 936.7236 849.2766)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 926.0557 751.4699)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 936.7236 751.4699)" class="st1 futura-light st3">0</text>
					<text transform="matrix(0 -1 1 0 919.4688 806.1877)" class="st1 futura-light st3">20.0</text>
					<text transform="matrix(0 -1 1 0 919.4688 791.2453)" class="st1 futura-light st3">0</text>
					<g>
						<text transform="matrix(0 -1 1 0 931.6084 802.8801)" class="mustard__fill futura-book st6">39</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[266]" ng-click="bosque.showPropertyData(38, '40')">
					<polyline id="CL40" class="property pb-sprite-1" points="996.8,744.6 996.8,852.7 953.6,852.7 953.6,744.6 996.8,744.6"/>
					<text transform="matrix(0 -1 1 0 982.749 816.2883)" class="st1 futura-light st3">16</text>
					<text transform="matrix(0 -1 1 0 982.749 807.7023)" class="st1 futura-light st3">0.00 m2</text>
					<text transform="matrix(1 0 0 1 969.2832 849.2766)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 979.9512 849.2766)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 969.2832 751.4699)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 979.9512 751.4699)" class="st1 futura-light st3">0</text>
					<text transform="matrix(0 -1 1 0 963.3076 806.1877)" class="st1 futura-light st3">20.0</text>
					<text transform="matrix(0 -1 1 0 963.3076 791.2453)" class="st1 futura-light st3">0</text>
					<g>
						<text transform="matrix(0 -1 1 0 974.8496 802.8859)" class="mustard__fill futura-book st6">40</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[267]" ng-click="bosque.showPropertyData(38, '41')">
					<polyline id="CL41" class="property pb-sprite-2" points="1040,744.6 1040,852.7 996.8,852.7 996.8,744.6 1040,744.6"/>
					<text transform="matrix(0 -1 1 0 1025.957 816.2883)" class="st1 futura-light st3">16</text>
					<text transform="matrix(0 -1 1 0 1025.957 807.7023)" class="st1 futura-light st3">0.00 m2</text>
					<text transform="matrix(1 0 0 1 1012.5313 849.2766)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 1023.1992 849.2766)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 1012.5313 751.4699)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 1023.1992 751.4699)" class="st1 futura-light st3">0</text>
					<text transform="matrix(0 -1 1 0 1006.6699 806.1877)" class="st1 futura-light st3">20.0</text>
					<text transform="matrix(0 -1 1 0 1006.6699 791.2453)" class="st1 futura-light st3">0</text>
					<g>
						<text transform="matrix(0 -1 1 0 1018.0977 802.8859)" class="mustard__fill futura-book st6">41</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[268]" ng-click="bosque.showPropertyData(38, '42')">
					<polyline id="CL42" class="property pb-sprite-1" points="1083.3,744.6 1083.3,852.7 1040,852.7 1040,744.6 1083.3,744.6"/>
					<text transform="matrix(0 -1 1 0 1070.0928 816.2883)" class="st1 futura-light st3">16</text>
					<text transform="matrix(0 -1 1 0 1070.0928 807.7023)" class="st1 futura-light st3">0.00 m2</text>
					<text transform="matrix(1 0 0 1 1055.7793 849.2766)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 1066.4473 849.2766)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 1055.7793 751.4699)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 1066.4473 751.4699)" class="st1 futura-light st3">0</text>
					<text transform="matrix(0 -1 1 0 1049.6973 806.1877)" class="st1 futura-light st3">20.0</text>
					<text transform="matrix(0 -1 1 0 1049.6973 791.2453)" class="st1 futura-light st3">0</text>
					<g>
						<text transform="matrix(0 -1 1 0 1061.3203 802.8859)" class="mustard__fill futura-book st6">42</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[269]" ng-click="bosque.showPropertyData(38, '43')">
					<polyline id="CL43" class="property pb-sprite-2" points="1126.5,744.6 1126.5,852.7 1083.3,852.7 1083.3,744.6 1126.5,744.6"/>
					<text transform="matrix(0 -1 1 0 1113.082 816.2883)" class="st1 futura-light st3">16</text>
					<text transform="matrix(0 -1 1 0 1113.082 807.7023)" class="st1 futura-light st3">0.00 m2</text>
					<text transform="matrix(1 0 0 1 1099.0234 849.2766)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 1109.6904 849.2766)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 1099.0234 751.4699)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 1109.6904 751.4699)" class="st1 futura-light st3">0</text>
					<text transform="matrix(0 -1 1 0 1092.4336 806.1877)" class="st1 futura-light st3">20.0</text>
					<text transform="matrix(0 -1 1 0 1092.4336 791.2453)" class="st1 futura-light st3">0</text>
					<g>
						<text transform="matrix(0 -1 1 0 1104.5684 802.8859)" class="mustard__fill futura-book st6">43</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[270]" ng-click="bosque.showPropertyData(38, '44')">
					<polyline id="CL44" class="property pb-sprite-1" points="1169.7,744.6 1169.7,852.7 1126.5,852.7 1126.5,744.6 1169.7,744.6"/>
					<text transform="matrix(0 -1 1 0 1155.5039 816.2883)" class="st1 futura-light st3">16</text>
					<text transform="matrix(0 -1 1 0 1155.5039 807.7023)" class="st1 futura-light st3">0.00 m2</text>
					<text transform="matrix(1 0 0 1 1142.25 849.2766)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 1152.918 849.2766)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 1142.25 751.4699)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 1152.918 751.4699)" class="st1 futura-light st3">0</text>
					<text transform="matrix(0 -1 1 0 1136.2637 806.1877)" class="st1 futura-light st3">20.0</text>
					<text transform="matrix(0 -1 1 0 1136.2637 791.2453)" class="st1 futura-light st3">0</text>
					<g>
						<text transform="matrix(0 -1 1 0 1147.8164 802.8859)" class="mustard__fill futura-book st6">44</text>
					</g>
					
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[271]" ng-click="bosque.showPropertyData(38, '45')">
					<polyline id="CL45" class="property pb-sprite-2" points="1213,744.6 1213,852.7 1169.7,852.7 1169.7,744.6 1213,744.6"/>
					<text transform="matrix(0 -1 1 0 1199.0898 816.2883)" class="st1 futura-light st3">16</text>
					<text transform="matrix(0 -1 1 0 1199.0898 807.7023)" class="st1 futura-light st3">0.00 m2</text>
					<text transform="matrix(1 0 0 1 1185.4941 849.2766)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 1196.1621 849.2766)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 1185.4941 751.4699)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 1196.1621 751.4699)" class="st1 futura-light st3">0</text>
					<text transform="matrix(0 -1 1 0 1179.4941 806.1877)" class="st1 futura-light st3">20.0</text>
					<text transform="matrix(0 -1 1 0 1179.4941 791.2453)" class="st1 futura-light st3">0</text>
					<g>
						<text transform="matrix(0 -1 1 0 1191.0391 802.8859)" class="mustard__fill futura-book st6">45</text>
					</g>
					
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[272]" ng-click="bosque.showPropertyData(38, '46')">
					<polyline id="CL46" class="property pb-sprite-1" points="1256.2,744.6 1256.2,852.7 1213,852.7 1213,744.6 1256.2,744.6"/>
					<text transform="matrix(0 -1 1 0 1242.5 816.2883)" class="st1 futura-light st3">16</text>
					<text transform="matrix(0 -1 1 0 1242.5 807.7023)" class="st1 futura-light st3">0.00 m2</text>
					<text transform="matrix(1 0 0 1 1228.7363 849.2766)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 1239.4043 849.2766)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 1228.7363 751.4699)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 1239.4043 751.4699)" class="st1 futura-light st3">0</text>
					<text transform="matrix(0 -1 1 0 1221.877 806.1877)" class="st1 futura-light st3">20.0</text>
					<text transform="matrix(0 -1 1 0 1221.877 791.2453)" class="st1 futura-light st3">0</text>
					<g>
						<text transform="matrix(0 -1 1 0 1234.293 802.8859)" class="mustard__fill futura-book st6">46</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[273]" ng-click="bosque.showPropertyData(38, '47')">
					<polyline id="CL47" class="property pb-sprite-2" points="1312.6,744.6 1299.9,852.7 1256.2,852.7 1256.2,744.6 1312.6,744.6"/>
					<text transform="matrix(0 -1 1 0 1284.9844 816.2883)" class="st1 futura-light st3">18</text>
					<text transform="matrix(0 -1 1 0 1284.9844 807.7023)" class="st1 futura-light st3">5.24 m2</text>
					<text transform="matrix(1 0 0 1 1272.2139 849.2766)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 1282.8809 849.2766)" class="st1 futura-light st3">9</text>
					<text transform="matrix(1 0 0 1 1275.7617 751.4699)" class="st1 futura-light st3">1</text>
					<text transform="matrix(1 0 0 1 1280.0352 751.4699)" class="st1 futura-light st3">0.44</text>
					<text transform="matrix(0 -1 1 0 1265.959 806.1877)" class="st1 futura-light st3">20.0</text>
					<text transform="matrix(0 -1 1 0 1265.959 791.2453)" class="st1 futura-light st3">0</text>
					<text transform="matrix(5.286021e-02 -0.9986 0.9986 5.286021e-02 1303.3839 806.2832)" class="st1 futura-light st11">20.14</text>
					<g>
						<text transform="matrix(0 -1 1 0 1277.5313 802.8859)" class="mustard__fill futura-book st6">47</text>
					</g>
					<polyline class="st7" points="1285.7,769.5 1280,763.8 1285.7,758.1 1285.7,769.5"/>
					<polyline class="st8" points="1285.7,758.1 1291.4,763.8 1285.7,769.5 1285.7,758.1"/>
				</g>
				<g id="DIVISIONES_2_">
					<line class="stx10" x1="45.5" y1="744.6" x2="45.5" y2="852.7"/>
					<line class="stx10" x1="88.8" y1="744.6" x2="88.8" y2="852.7"/>
					<line class="stx10" x1="132" y1="744.6" x2="132" y2="852.7"/>
					<line class="stx10" x1="175.3" y1="744.6" x2="175.3" y2="852.7"/>
					<line class="stx10" x1="218.5" y1="746.2" x2="218.5" y2="852.7"/>
					<line class="stx10" x1="261.7" y1="744.6" x2="261.7" y2="852.7"/>
					<line class="stx10" x1="304.9" y1="744.6" x2="304.9" y2="852.7"/>
					<line class="stx10" x1="348.2" y1="744.6" x2="348.2" y2="852.7"/>
					<line class="stx10" x1="391.4" y1="744.6" x2="391.4" y2="852.7"/>
					<line class="stx10" x1="434.7" y1="744.6" x2="434.7" y2="852.7"/>
					<line class="stx10" x1="521.2" y1="744.6" x2="521.2" y2="852.7"/>
					<line class="stx10" x1="477.9" y1="744.6" x2="477.9" y2="852.7"/>
					<line class="stx10" x1="564.4" y1="744.6" x2="564.4" y2="852.7"/>
					<line class="stx10" x1="607.6" y1="744.6" x2="607.6" y2="852.7"/>
					<line class="stx10" x1="650.9" y1="744.6" x2="650.9" y2="852.7"/>
					<line class="stx10" x1="694.1" y1="744.6" x2="694.1" y2="852.7"/>
					<line class="stx10" x1="1256.2" y1="744.6" x2="1256.2" y2="852.7"/>
					<line class="stx10" x1="1213" y1="744.6" x2="1213" y2="852.7"/>
					<line class="stx10" x1="1169.7" y1="744.6" x2="1169.7" y2="852.7"/>
					<line class="stx10" x1="1126.5" y1="744.6" x2="1126.5" y2="852.7"/>
					<line class="stx10" x1="1083.3" y1="744.6" x2="1083.3" y2="852.7"/>
					<line class="stx10" x1="1040" y1="744.6" x2="1040" y2="852.7"/>
					<line class="stx10" x1="996.8" y1="744.6" x2="996.8" y2="852.7"/>
					<line class="stx10" x1="953.6" y1="744.6" x2="953.6" y2="852.7"/>
					<line class="stx10" x1="737.3" y1="744.6" x2="737.3" y2="852.7"/>
					<line class="stx10" x1="780.6" y1="744.6" x2="780.6" y2="852.7"/>
					<line class="stx10" x1="823.8" y1="744.6" x2="823.8" y2="852.7"/>
					<line class="stx10" x1="867.1" y1="744.6" x2="867.1" y2="852.7"/>
					<line class="stx10" x1="910.3" y1="744.6" x2="910.3" y2="852.7"/>
				</g>
			</g>
			<g id="ISLA_D">
				<g class="property__active" ng-class="bosque.inmovablesClassList[274]" ng-click="bosque.showPropertyData(38, '48')">
					<polyline id="DL48_2_" class="property pb-sprite-1" points="1318.1,694.3 1209.3,694.3 1216.3,634.7 1323.7,647.3 1318.1,694.3"/>
					<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1249.4847 673.2118)" class="st1 futura-light st12">19</text>
					<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1258.0139 674.2145)" class="st1 futura-light st12">8.75 m2</text>
					<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1219.5479 674.7336)" class="st1 futura-light st12">11.1</text>
					<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1221.2917 659.8923)" class="st1 futura-light st12">1</text>
					<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1318.0533 679.182)" class="st1 futura-light st12">8.77</text>
					<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1259.6437 647.3726)" class="st1 futura-light st12">20.0</text>
					<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1274.484 649.1163)" class="st1 futura-light st12">0</text>
					<text transform="matrix(1 0 0 1 1252.8555 692.6525)" class="st1 futura-light st3">2</text>
					<text transform="matrix(1 0 0 1 1257.1289 692.6525)" class="st1 futura-light st3">0.14</text>
					<g>
						<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1263.2106 666.9416)" class="mustard__fill futura-book st13">48</text>
					</g>
					<g>
						<polyline class="st7" points="1232.9,675.3 1227.1,669.6 1232.9,663.9 1232.9,675.3"/>
						<polyline class="st8" points="1232.9,663.9 1238.6,669.6 1232.9,675.3 1232.9,663.9"/>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[275]" ng-click="bosque.showPropertyData(38, '49')">
					<polyline id="DL49_2_" class="property pb-sprite-2" points="1323.7,647.3 1216.3,634.7 1221.3,591.7 1328.7,604.3 1323.7,647.3"/>
					<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1253.0164 624.4102)" class="st1 futura-light st12">16</text>
					<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1261.5446 625.4122)" class="st1 futura-light st12">0.00 m2</text>
					<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1225.8025 621.335)" class="st1 futura-light st12">8.0</text>
					<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1227.0474 610.7404)" class="st1 futura-light st12">0</text>
					<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1323.4844 632.8011)" class="st1 futura-light st12">8.0</text>
					<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1324.7292 622.2065)" class="st1 futura-light st12">0</text>
					<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1264.7151 604.1948)" class="st1 futura-light st12">20.0</text>
					<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1279.5563 605.9387)" class="st1 futura-light st12">0</text>
					<g>
						<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1268.245 618.5884)" class="mustard__fill futura-book st13">49</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[276]" ng-click="bosque.showPropertyData(38, '50')">
					<polyline id="DL50_2_" class="property pb-sprite-1" points="1328.7,604.3 1221.3,591.7 1226.4,548.8 1333.7,561.4 1328.7,604.3"/>
					<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1257.9598 580.8058)" class="st1 futura-light st12">16</text>
					<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1266.489 581.808)" class="st1 futura-light st12">0.00 m2</text>
					<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1230.8402 578.3936)" class="st1 futura-light st12">8.0</text>
					<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1232.0851 567.7985)" class="st1 futura-light st12">0</text>
					<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1328.5182 589.8515)" class="st1 futura-light st12">8.0</text>
					<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1329.7631 579.2569)" class="st1 futura-light st12">0</text>
					<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1269.7924 560.975)" class="st1 futura-light st12">20.0</text>
					<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1284.6337 562.7188)" class="st1 futura-light st12">0</text>
					<g>
						<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1273.2975 575.6473)" class="mustard__fill futura-book st13">50</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[277]" ng-click="bosque.showPropertyData(38, '51')">
					<polyline id="DL51_2_" class="property pb-sprite-2" points="1333.7,561.4 1226.4,548.8 1231.4,505.8 1338.8,518.4 1333.7,561.4"/>
					<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1264.6016 538.7156)" class="st1 futura-light st12">16</text>
					<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1273.1307 539.7178)" class="st1 futura-light st12">0.00 m2</text>
					<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1235.8884 535.4461)" class="st1 futura-light st12">8.0</text>
					<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1237.1334 524.851)" class="st1 futura-light st12">0</text>
					<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1333.5732 546.9131)" class="st1 futura-light st12">8.0</text>
					<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1334.8181 536.3176)" class="st1 futura-light st12">0</text>
					<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1274.767 518.5621)" class="st1 futura-light st12">20.0</text>
					<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1289.6073 520.3058)" class="st1 futura-light st12">0</text>
					<g>
						<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1278.3339 532.6999)" class="mustard__fill futura-book st13">51</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[278]" ng-click="bosque.showPropertyData(38, '52')">
					<polyline id="DL52_2_" class="property pb-sprite-1" points="1338.8,518.4 1231.4,505.8 1236.9,458.8 1345.8,458.8 1338.8,518.4"/>
					<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1269.6432 495.7743)" class="st1 futura-light st12">19</text>
					<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1278.1714 496.7763)" class="st1 futura-light st12">8.75 m2</text>
					<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1240.9961 491.8429)" class="st1 futura-light st12">8.77</text>
					<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1339.3473 497.7127)" class="st1 futura-light st12">11.1</text>
					<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1341.0911 482.8724)" class="st1 futura-light st12">1</text>
					<text transform="matrix(1 0 0 1 1280.502 466.7453)" class="st1 futura-light st3">2</text>
					<text transform="matrix(1 0 0 1 1284.7764 466.7453)" class="st1 futura-light st3">0.14</text>
					<g>
						<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1283.3702 489.7618)" class="mustard__fill futura-book st13">52</text>
					</g>
					<g>
						<polyline class="st7" points="1253.9,489.2 1248.2,483.4 1253.9,477.7 1253.9,489.2"/>
						<polyline class="st8" points="1253.9,477.7 1259.7,483.4 1253.9,489.2 1253.9,477.7"/>
					</g>
				</g>
				<g id="DIVISIONES_11_">
					<line class="stx10" x1="1216.3" y1="634.7" x2="1323.7" y2="647.3"/>
					<line class="stx10" x1="1221.3" y1="591.7" x2="1328.7" y2="604.3"/>
					<line class="stx10" x1="1226.4" y1="548.8" x2="1333.7" y2="561.4"/>
					<line class="stx10" x1="1231.4" y1="505.8" x2="1338.8" y2="518.4"/>
				</g>
			</g>
			<g id="ISLA_E">
				<g class="property__active" ng-class="bosque.inmovablesClassList[279]" ng-click="bosque.showPropertyData(38, '53')">
					<polyline id="EL53" class="property pb-sprite-1" points="1364,299.2 1351.3,407.3 1304.6,407.3 1304.6,299.2 1364,299.2"/>
					<text transform="matrix(0 -1 1 0 1335.377 370.7385)" class="st1 futura-light st3">19</text>
					<text transform="matrix(0 -1 1 0 1335.377 362.1521)" class="st1 futura-light st3">6.19 m2</text>
					<text transform="matrix(0 -1 1 0 1312.0176 362.6853)" class="st1 futura-light st3">20.0</text>
					<text transform="matrix(0 -1 1 0 1312.0176 347.7434)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 1319.2139 405.073)" class="st1 futura-light st3">8.64</text>
					<text transform="matrix(1 0 0 1 1323.4336 306.8464)" class="st1 futura-light st3">1</text>
					<text transform="matrix(1 0 0 1 1327.709 306.8464)" class="st1 futura-light st3">0.99</text>
					<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1355.2729 363.7811)" class="st1 futura-light st12">2</text>
					<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1355.7717 359.5359)" class="st1 futura-light st12">0.14</text>
					<g>
						<text transform="matrix(0 -1 1 0 1327.6396 357.4924)" class="mustard__fill futura-book st6">53</text>
					</g>
					<g>
						<polyline class="st7" points="1327.9,393.7 1322.2,388 1327.9,382.3 1327.9,393.7"/>
						<polyline class="st8" points="1327.9,382.3 1333.7,388 1327.9,393.7 1327.9,382.3"/>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[280]" ng-click="bosque.showPropertyData(38, '54')">
					<polyline id="EL54" class="property pb-sprite-2" points="1304.6,299.2 1304.6,407.3 1261.4,407.3 1261.4,299.2 1304.6,299.2"/>
					<text transform="matrix(0 -1 1 0 1290.0781 370.7385)" class="st1 futura-light st3">16</text>
					<text transform="matrix(0 -1 1 0 1290.0781 362.1521)" class="st1 futura-light st3">0.00 m2</text>
					<text transform="matrix(0 -1 1 0 1269.0986 362.6853)" class="st1 futura-light st3">20.0</text>
					<text transform="matrix(0 -1 1 0 1269.0986 347.7434)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 1275.6367 405.073)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 1286.3047 405.073)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 1275.6367 306.8464)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 1286.3047 306.8464)" class="st1 futura-light st3">0</text>
					<g>
						<text transform="matrix(0 -1 1 0 1282.6758 357.4924)" class="mustard__fill futura-book st6">54</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[281]" ng-click="bosque.showPropertyData(38, '55')">
					<polyline id="EL55" class="property pb-sprite-1" points="1261.4,299.2 1261.4,407.3 1218.1,407.3 1218.1,299.2 1261.4,299.2"/>
					<text transform="matrix(0 -1 1 0 1246.6777 370.7385)" class="st1 futura-light st3">16</text>
					<text transform="matrix(0 -1 1 0 1246.6777 362.1521)" class="st1 futura-light st3">0.00 m2</text>
					<text transform="matrix(0 -1 1 0 1225.5508 362.6853)" class="st1 futura-light st3">20.0</text>
					<text transform="matrix(0 -1 1 0 1225.5508 347.7434)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 1232.3926 405.073)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 1243.0605 405.073)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 1232.3926 306.8464)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 1243.0605 306.8464)" class="st1 futura-light st3">0</text>
					<g>
						<text transform="matrix(0 -1 1 0 1239.4316 357.4924)" class="mustard__fill futura-book st6">55</text>
					</g>
				
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[282]" ng-click="bosque.showPropertyData(38, '56')">
					<polyline id="EL56" class="property pb-sprite-2" points="1218.1,299.2 1218.1,407.3 1174.9,407.3 1174.9,299.2 1218.1,299.2"/>
					<text transform="matrix(0 -1 1 0 1204.7988 370.7385)" class="st1 futura-light st3">16</text>
					<text transform="matrix(0 -1 1 0 1204.7988 362.1521)" class="st1 futura-light st3">0.00 m2</text>
					<text transform="matrix(0 -1 1 0 1182.3027 362.6853)" class="st1 futura-light st3">20.0</text>
					<text transform="matrix(0 -1 1 0 1182.3027 347.7434)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 1189.1709 405.073)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 1199.8389 405.073)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 1189.1709 306.8464)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 1199.8389 306.8464)" class="st1 futura-light st3">0</text>
					<g>
						<text transform="matrix(0 -1 1 0 1196.1895 357.4924)" class="mustard__fill futura-book st6">56</text>
					</g>
				
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[283]" ng-click="bosque.showPropertyData(38, '57')">
					<polyline id="EL57" class="property pb-sprite-1" points="1174.9,299.2 1174.9,407.3 1131.6,407.3 1131.6,299.2 1174.9,299.2"/>
					<text transform="matrix(0 -1 1 0 1160.9883 370.7385)" class="st1 futura-light st3">16</text>
					<text transform="matrix(0 -1 1 0 1160.9883 362.1521)" class="st1 futura-light st3">0.00 m2</text>
					<text transform="matrix(0 -1 1 0 1139.5742 362.6853)" class="st1 futura-light st3">20.0</text>
					<text transform="matrix(0 -1 1 0 1139.5742 347.7434)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 1145.9238 405.073)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 1156.5908 405.073)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 1145.9238 306.8464)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 1156.5908 306.8464)" class="st1 futura-light st3">0</text>
					<g>
						<text transform="matrix(0 -1 1 0 1152.957 357.4997)" class="mustard__fill futura-book st6">57</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[284]" ng-click="bosque.showPropertyData(38, '58')">
					<polyline id="EL58" class="property pb-sprite-2" points="1131.6,299.2 1131.6,407.3 1088.4,407.3 1088.4,299.2 1131.6,299.2"/>
					<text transform="matrix(0 -1 1 0 1118.8945 370.7385)" class="st1 futura-light st3">16</text>
					<text transform="matrix(0 -1 1 0 1118.8945 362.1521)" class="st1 futura-light st3">0.00 m2</text>
					<text transform="matrix(0 -1 1 0 1096.1416 362.6843)" class="st1 futura-light st3">20.0</text>
					<text transform="matrix(0 -1 1 0 1096.1416 347.7424)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 1102.6797 405.073)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 1113.3477 405.073)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 1102.6797 306.8464)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 1113.3477 306.8464)" class="st1 futura-light st3">0</text>
					<g>
						<text transform="matrix(0 -1 1 0 1109.7129 357.4997)" class="mustard__fill futura-book st6">58</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[285]" ng-click="bosque.showPropertyData(38, '59')">
					<polyline id="EL59" class="property pb-sprite-1" points="1088.4,299.2 1088.4,407.3 1045.2,407.3 1045.2,299.2 1088.4,299.2"/>
					<text transform="matrix(0 -1 1 0 1074.0605 370.7385)" class="st1 futura-light st3">16</text>
					<text transform="matrix(0 -1 1 0 1074.0605 362.1521)" class="st1 futura-light st3">0.00 m2</text>
					<text transform="matrix(0 -1 1 0 1052.6895 362.6853)" class="st1 futura-light st3">20.0</text>
					<text transform="matrix(0 -1 1 0 1052.6895 347.7434)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 1059.4512 405.073)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 1070.1201 405.073)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 1059.4512 306.8464)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 1070.1201 306.8464)" class="st1 futura-light st3">0</text>
					<g>
						<text transform="matrix(0 -1 1 0 1066.4746 357.4997)" class="mustard__fill futura-book st6">59</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[286]" ng-click="bosque.showPropertyData(38, '60')">
					<polyline id="EL60" class="property pb-sprite-2" points="1045.2,299.2 1045.2,407.3 1002,407.3 1002,299.2 1045.2,299.2"/>
					<text transform="matrix(0 -1 1 0 1031.4902 370.4494)" class="st1 futura-light st3">16</text>
					<text transform="matrix(0 -1 1 0 1031.4902 361.863)" class="st1 futura-light st3">0.00 m2</text>
					<text transform="matrix(0 -1 1 0 1010.0947 362.6853)" class="st1 futura-light st3">20.0</text>
					<text transform="matrix(0 -1 1 0 1010.0947 347.7434)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 1016.209 405.073)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 1026.876 405.073)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 1016.209 306.8464)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 1026.876 306.8464)" class="st1 futura-light st3">0</text>
					<g>
						<text transform="matrix(0 -1 1 0 1023.2305 357.4997)" class="mustard__fill futura-book st6">60</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[287]" ng-click="bosque.showPropertyData(38, '61')">
					<polyline id="EL61" class="property pb-sprite-1" points="1002,299.2 1002,407.3 958.7,407.3 958.7,299.2 1002,299.2"/>
					<text transform="matrix(0 -1 1 0 988.291 370.3205)" class="st1 futura-light st3">16</text>
					<text transform="matrix(0 -1 1 0 988.291 361.7341)" class="st1 futura-light st3">0.00 m2</text>
					<text transform="matrix(0 -1 1 0 967.4746 362.6853)" class="st1 futura-light st3">20.0</text>
					<text transform="matrix(0 -1 1 0 967.4746 347.7434)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 972.9648 405.073)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 983.6328 405.073)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 972.9648 306.8464)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 983.6328 306.8464)" class="st1 futura-light st3">0</text>
					<g>
						<text transform="matrix(0 -1 1 0 979.9961 358.1594)" class="mustard__fill futura-book st6">61</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[288]" ng-click="bosque.showPropertyData(38, '62')">
					<polyline id="EL62" class="property pb-sprite-2" points="958.7,299.2 958.7,407.3 915.5,407.3 915.5,299.2 958.7,299.2"/>
					<text transform="matrix(0 -1 1 0 945.5059 370.3205)" class="st1 futura-light st3">16</text>
					<text transform="matrix(0 -1 1 0 945.5059 361.7341)" class="st1 futura-light st3">0.00 m2</text>
					<text transform="matrix(0 -1 1 0 923.9824 362.6853)" class="st1 futura-light st3">20.0</text>
					<text transform="matrix(0 -1 1 0 923.9824 347.7434)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 929.7246 405.073)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 940.3926 405.073)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 929.7246 306.8464)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 940.3926 306.8464)" class="st1 futura-light st3">0</text>
					<g>
						<text transform="matrix(0 -1 1 0 936.7637 358.0554)" class="mustard__fill futura-book st6">62</text>
					</g>
				
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[289]" ng-click="bosque.showPropertyData(38, '63')">
					<polyline id="EL63" class="property pb-sprite-1" points="915.5,299.2 915.5,407.3 872.2,407.3 872.2,299.2 915.5,299.2"/>
					<text transform="matrix(0 -1 1 0 901.2188 370.3205)" class="st1 futura-light st3">16</text>
					<text transform="matrix(0 -1 1 0 901.2188 361.7341)" class="st1 futura-light st3">0.00 m2</text>
					<text transform="matrix(0 -1 1 0 880.8145 362.6853)" class="st1 futura-light st3">20.0</text>
					<text transform="matrix(0 -1 1 0 880.8145 347.7434)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 886.5 405.073)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 897.167 405.073)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 886.5 306.8464)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 897.167 306.8464)" class="st1 futura-light st3">0</text>
					<g>
						<text transform="matrix(0 -1 1 0 893.5156 357.9138)" class="mustard__fill futura-book st6">63</text>
					</g>
					
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[290]" ng-click="bosque.showPropertyData(38, '64')">
					<polyline id="EL64" class="property pb-sprite-2" points="872.2,299.2 872.2,407.3 829,407.3 829,299.2 872.2,299.2"/>
					<text transform="matrix(0 -1 1 0 857.7227 370.3205)" class="st1 futura-light st3">16</text>
					<text transform="matrix(0 -1 1 0 857.7227 361.7341)" class="st1 futura-light st3">0.00 m2</text>
					<text transform="matrix(0 -1 1 0 837.5283 362.6853)" class="st1 futura-light st3">20.0</text>
					<text transform="matrix(0 -1 1 0 837.5283 347.7434)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 843.252 405.073)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 853.9209 405.073)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 843.252 306.8464)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 853.9209 306.8464)" class="st1 futura-light st3">0</text>
					<g>
						<text transform="matrix(0 -1 1 0 850.291 357.778)" class="mustard__fill futura-book st6">64</text>
					</g>
					<g>
						<polyline class="st7" points="850.6,393.7 844.9,388 850.6,382.3 850.6,393.7"/>
						<polyline class="st8" points="850.6,382.3 856.3,388 850.6,393.7 850.6,382.3"/>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[291]" ng-click="bosque.showPropertyData(38, '65')">
					<polyline id="EL65" class="property pb-sprite-1" points="829,299.2 829,407.3 785.7,407.3 785.7,299.2 829,299.2"/>
					<text transform="matrix(0 -1 1 0 815.3525 370.3205)" class="st1 futura-light st3">16</text>
					<text transform="matrix(0 -1 1 0 815.3525 361.7341)" class="st1 futura-light st3">0.00 m2</text>
					<text transform="matrix(0 -1 1 0 794.2715 362.6853)" class="st1 futura-light st3">20.0</text>
					<text transform="matrix(0 -1 1 0 794.2715 347.7434)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 800.0039 405.073)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 810.6719 405.073)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 800.0039 306.8464)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 810.6719 306.8464)" class="st1 futura-light st3">0</text>
					<g>
						<text transform="matrix(0 -1 1 0 807.0449 357.6384)" class="mustard__fill futura-book st6">65</text>
					</g>
					<g>
						<polyline class="st7" points="807.4,393.7 801.6,388 807.4,382.3 807.4,393.7"/>
						<polyline class="st8" points="807.4,382.3 813.1,388 807.4,393.7 807.4,382.3"/>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[292]" ng-click="bosque.showPropertyData(38, '66')">
					<polyline id="EL66" class="property pb-sprite-2" points="785.7,299.2 785.7,407.3 742.5,407.3 742.5,299.2 785.7,299.2"/>
					<text transform="matrix(0 -1 1 0 772.1621 370.3205)" class="st1 futura-light st3">16</text>
					<text transform="matrix(0 -1 1 0 772.1621 361.7341)" class="st1 futura-light st3">0.00 m2</text>
					<text transform="matrix(0 -1 1 0 752.3262 362.6853)" class="st1 futura-light st3">20.0</text>
					<text transform="matrix(0 -1 1 0 752.3262 347.7434)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 756.7813 405.073)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 767.4492 405.073)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 756.7813 306.8464)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 767.4492 306.8464)" class="st1 futura-light st3">0</text>
					<g>
						<text transform="matrix(0 -1 1 0 763.8008 357.4997)" class="mustard__fill futura-book st6">66</text>
					</g>
					<g>
						<polyline class="st7" points="764.1,393.7 758.4,388 764.1,382.3 764.1,393.7"/>
						<polyline class="st8" points="764.1,382.3 769.9,388 764.1,393.7 764.1,382.3"/>
					</g>
				</g>
				<g id="DIVISIONES_4_">
					<line class="stx10" x1="1304.6" y1="407.3" x2="1304.6" y2="299.2"/>
					<line class="stx10" x1="1261.4" y1="407.3" x2="1261.4" y2="299.2"/>
					<line class="stx10" x1="1218.1" y1="407.3" x2="1218.1" y2="299.2"/>
					<line class="stx10" x1="1174.9" y1="407.3" x2="1174.9" y2="299.2"/>
					<line class="stx10" x1="1131.6" y1="407.3" x2="1131.6" y2="299.2"/>
					<line class="stx10" x1="1088.4" y1="407.3" x2="1088.4" y2="299.2"/>
					<line class="stx10" x1="1045.2" y1="407.3" x2="1045.2" y2="299.2"/>
					<line class="stx10" x1="1002" y1="407.3" x2="1002" y2="299.2"/>
					<line class="stx10" x1="958.7" y1="407.3" x2="958.7" y2="299.2"/>
					<line class="stx10" x1="785.7" y1="407.3" x2="785.7" y2="299.2"/>
					<line class="stx10" x1="829" y1="407.3" x2="829" y2="299.2"/>
					<line class="stx10" x1="872.2" y1="407.3" x2="872.2" y2="299.2"/>
					<line class="stx10" x1="915.5" y1="407.3" x2="915.5" y2="299.2"/>
				</g>
			</g>
			<g id="ISLA_F">
				<g class="property__active" ng-class="bosque.inmovablesClassList[293]" ng-click="bosque.showPropertyData(38, '67')">
					<polyline id="FL-67_2_" class="property pb-sprite-1" points="741.7,128.9 741.7,237.1 698.5,237.1 698.5,128.9 741.7,128.9"/>
					<text transform="matrix(0 -1 1 0 727.3926 200.4909)" class="st1 futura-light st3">16</text>
					<text transform="matrix(0 -1 1 0 727.3926 191.9045)" class="st1 futura-light st3">0.00 m2</text>
					<text transform="matrix(1 0 0 1 712.75 234.6194)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 723.418 234.6194)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 712.75 136.5588)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 723.418 136.5588)" class="st1 futura-light st3">0</text>
					<text transform="matrix(0 -1 1 0 706.3652 192.4763)" class="st1 futura-light st3">20.0</text>
					<text transform="matrix(0 -1 1 0 706.3652 177.5344)" class="st1 futura-light st3">0</text>
					<g>
						<text transform="matrix(0 -1 1 0 719.7656 188.2829)" class="mustard__fill futura-book st6">67</text>
					</g>
					<g>
						<polyline class="st7" points="720.1,223.5 714.4,217.8 720.1,212.1 720.1,223.5"/>
						<polyline class="st8" points="720.1,212.1 725.8,217.8 720.1,223.5 720.1,212.1"/>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[294]" ng-click="bosque.showPropertyData(38, '68')">
					<polyline id="FL68_2_" class="property pb-sprite-2" points="698.5,128.9 698.5,237.1 655.2,237.1 655.2,128.9 698.5,128.9"/>
					<text transform="matrix(0 -1 1 0 684.1484 200.4909)" class="st1 futura-light st3">16</text>
					<text transform="matrix(0 -1 1 0 684.1484 191.9045)" class="st1 futura-light st3">0.00 m2</text>
					<text transform="matrix(1 0 0 1 669.5039 234.6194)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 680.1714 234.6194)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 669.5039 136.5588)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 680.1714 136.5588)" class="st1 futura-light st3">0</text>
					<text transform="matrix(0 -1 1 0 662.8311 192.4763)" class="st1 futura-light st3">20.0</text>
					<text transform="matrix(0 -1 1 0 662.8311 177.5344)" class="st1 futura-light st3">0</text>
					<g>
						<text transform="matrix(0 -1 1 0 676.5371 188.1462)" class="mustard__fill futura-book st6">68</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[295]" ng-click="bosque.showPropertyData(38, '69')">
					<polyline id="FL69_2_" class="property pb-sprite-1" points="655.2,115.5 655.2,237.1 612,237.1 612,115.5 655.2,115.5"/>
					<text transform="matrix(0 -1 1 0 639.9917 191.8064)" class="st1 futura-light st3">18</text>
					<text transform="matrix(0 -1 1 0 639.9917 183.2204)" class="st1 futura-light st3">0.00 m2</text>
					<text transform="matrix(1 0 0 1 626.2603 234.6194)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 636.9282 234.6194)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 626.2603 122.7995)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 636.9282 122.7995)" class="st1 futura-light st3">0</text>
					<text transform="matrix(0 -1 1 0 619.7788 185.717)" class="st1 futura-light st3">22.5</text>
					<text transform="matrix(0 -1 1 0 619.7788 170.7751)" class="st1 futura-light st3">0</text>
					<g>
						<text transform="matrix(0 -1 1 0 632.8276 178.6052)" class="mustard__fill futura-book st6">69</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[296]" ng-click="bosque.showPropertyData(38, '70')">
					<polyline id="FL70_2_" class="property pb-sprite-2" points="612,115.5 612,237.1 568.7,237.1 568.7,115.5 612,115.5"/>
					<text transform="matrix(0 -1 1 0 597.7598 191.8064)" class="st1 futura-light st3">18</text>
					<text transform="matrix(0 -1 1 0 597.7598 183.2204)" class="st1 futura-light st3">0.00 m2</text>
					<text transform="matrix(1 0 0 1 583.0313 234.6194)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 593.6987 234.6194)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 583.0313 122.7995)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 593.6987 122.7995)" class="st1 futura-light st3">0</text>
					<text transform="matrix(0 -1 1 0 577.5449 185.717)" class="st1 futura-light st3">22.5</text>
					<text transform="matrix(0 -1 1 0 577.5449 170.7751)" class="st1 futura-light st3">0</text>
					<g>
						<text transform="matrix(0 -1 1 0 590.0527 178.6052)" class="mustard__fill futura-book st6">70</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[297]" ng-click="bosque.showPropertyData(38, '71')">
					<polyline id="FL71_2_" class="property pb-sprite-1" points="568.7,115.5 568.7,237.1 525.5,237.1 525.5,115.5 568.7,115.5"/>
					<text transform="matrix(0 -1 1 0 554.4365 191.8064)" class="st1 futura-light st3">18</text>
					<text transform="matrix(0 -1 1 0 554.4365 183.2204)" class="st1 futura-light st3">0.00 m2</text>
					<text transform="matrix(1 0 0 1 539.7891 234.6194)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 550.4565 234.6194)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 539.7891 122.7995)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(1 0 0 1 550.4565 122.7995)" class="st1 futura-light st3">0</text>
					<text transform="matrix(0 -1 1 0 533.688 185.717)" class="st1 futura-light st3">22.5</text>
					<text transform="matrix(0 -1 1 0 533.688 170.7751)" class="st1 futura-light st3">0</text>
					<g>
						<text transform="matrix(0 -1 1 0 546.8281 178.6052)" class="mustard__fill futura-book st6">71</text>
					</g>
					<g>
						<polyline class="st7" points="547.1,223.5 541.4,217.8 547.1,212.1 547.1,223.5"/>
						<polyline class="st8" points="547.1,212.1 552.9,217.8 547.1,223.5 547.1,212.1"/>
					</g>
				</g>
				<g id="DIVISIONES_7_">
					<line class="stx10" x1="698.5" y1="237.1" x2="698.5" y2="128.9"/>
					<line class="stx10" x1="655.2" y1="237.1" x2="655.2" y2="128.9"/>
					<line class="stx10" x1="612" y1="237.1" x2="612" y2="115.5"/>
					<line class="stx10" x1="568.7" y1="237.1" x2="568.7" y2="115.5"/>
					<line class="stx10" x1="525.5" y1="237.1" x2="525.5" y2="115.5"/>
				</g>
			</g>
			<g id="ISLA_G">
				<g class="property__active" ng-class="bosque.inmovablesClassList[298]" ng-click="bosque.showPropertyData(38, '72')">
					<polyline id="GL72" class="property pb-sprite-1" points="280.7,336 159.1,336 159.1,287.3 280.7,287.3 280.7,336"/>
					<text transform="matrix(1 0 0 1 204.4775 319.0051)" class="st1 futura-light st3">20</text>
					<text transform="matrix(1 0 0 1 213.0635 319.0051)" class="st1 futura-light st3">2.50 m2</text>
					<text transform="matrix(1 0 0 1 210.436 295.0378)" class="st1 futura-light st3">22.5</text>
					<text transform="matrix(1 0 0 1 225.3784 295.0378)" class="st1 futura-light st3">0</text>
					<text transform="matrix(0 -1 1 0 167.6387 318.9997)" class="st1 futura-light st3">9.0</text>
					<text transform="matrix(0 -1 1 0 167.6387 308.3322)" class="st1 futura-light st3">0</text>
					<text transform="matrix(0 -1 1 0 277.5757 319.0041)" class="st1 futura-light st3">9.0</text>
					<text transform="matrix(0 -1 1 0 277.5757 308.3362)" class="st1 futura-light st3">0</text>
					<g>
						<text transform="matrix(1 1.749992e-03 -1.749992e-03 1 215.7739 311.8158)" class="mustard__fill futura-book st6">72</text>
					</g>
					<g>
						<polyline class="st7" points="178.3,317.4 172.6,311.6 178.3,305.9 178.3,317.4"/>
						<polyline class="st8" points="178.3,305.9 184.1,311.6 178.3,317.4 178.3,305.9"/>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[299]" ng-click="bosque.showPropertyData(38, '73')">
					<polyline id="GL73" class="property pb-sprite-2" points="280.7,379.2 159.1,379.2 159.1,336 280.7,336 280.7,379.2"/>
					<text transform="matrix(1 0 0 1 204.4775 365.7668)" class="st1 futura-light st3">18</text>
					<text transform="matrix(1 0 0 1 213.0635 365.7668)" class="st1 futura-light st3">0.00 m2</text>
					<text transform="matrix(0 -1 1 0 167.6387 364.9485)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(0 -1 1 0 167.6387 354.281)" class="st1 futura-light st3">0</text>
					<text transform="matrix(0 -1 1 0 277.5757 364.9485)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(0 -1 1 0 277.5757 354.281)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 210.436 342.864)" class="st1 futura-light st3">22.5</text>
					<text transform="matrix(1 0 0 1 225.3784 342.864)" class="st1 futura-light st3">0</text>
					<g>
						<text transform="matrix(1 1.749992e-03 -1.749992e-03 1 215.7721 357.7553)" class="mustard__fill futura-book st6">73</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[300]" ng-click="bosque.showPropertyData(38, '74')">
					<polyline id="GL74" class="property pb-sprite-1" points="280.7,422.4 159.1,422.4 159.1,379.2 280.7,379.2 280.7,422.4"/>
					<text transform="matrix(1 0 0 1 204.4775 407.7419)" class="st1 futura-light st3">18</text>
					<text transform="matrix(1 0 0 1 213.0635 407.7419)" class="st1 futura-light st3">0.00 m2</text>
					<text transform="matrix(0 -1 1 0 167.6436 408.1799)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(0 -1 1 0 167.6436 397.5124)" class="st1 futura-light st3">0</text>
					<text transform="matrix(0 -1 1 0 277.5757 408.1799)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(0 -1 1 0 277.5757 397.5124)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 210.436 385.9577)" class="st1 futura-light st3">22.5</text>
					<text transform="matrix(1 0 0 1 225.3784 385.9577)" class="st1 futura-light st3">0</text>
					<g>
						<text transform="matrix(1 1.749992e-03 -1.749992e-03 1 215.7683 400.9898)" class="mustard__fill futura-book st6">74</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[301]" ng-click="bosque.showPropertyData(38, '75')">
					<polyline id="GL75" class="property pb-sprite-2" points="280.7,465.7 159.1,465.7 159.1,422.4 280.7,422.4 280.7,465.7"/>
					<text transform="matrix(1 0 0 1 204.4775 451.2434)" class="st1 futura-light st3">18</text>
					<text transform="matrix(1 0 0 1 213.0635 451.2434)" class="st1 futura-light st3">0.00 m2</text>
					<text transform="matrix(0 -1 1 0 167.6436 451.427)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(0 -1 1 0 167.6436 440.759)" class="st1 futura-light st3">0</text>
					<text transform="matrix(0 -1 1 0 277.5757 451.4192)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(0 -1 1 0 277.5757 440.7512)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 210.436 430.1428)" class="st1 futura-light st3">22.5</text>
					<text transform="matrix(1 0 0 1 225.3784 430.1428)" class="st1 futura-light st3">0</text>
					<g>
						<text transform="matrix(1 1.749992e-03 -1.749992e-03 1 215.7683 444.2341)" class="mustard__fill futura-book st6">75</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[302]" ng-click="bosque.showPropertyData(38, '76')">
					<polyline id="GL76" class="property pb-sprite-1" points="280.7,508.9 159.1,508.9 159.1,465.7 280.7,465.7 280.7,508.9"/>
					<text transform="matrix(1 0 0 1 204.4775 494.4338)" class="st1 futura-light st3">18</text>
					<text transform="matrix(1 0 0 1 213.0635 494.4338)" class="st1 futura-light st3">0.00 m2</text>
					<text transform="matrix(0 -1 1 0 167.6436 494.6574)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(0 -1 1 0 167.6436 483.9914)" class="st1 futura-light st3">0</text>
					<text transform="matrix(0 -1 1 0 277.5757 494.6574)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(0 -1 1 0 277.5757 483.9914)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 210.436 473.6428)" class="st1 futura-light st3">22.5</text>
					<text transform="matrix(1 0 0 1 225.3784 473.6428)" class="st1 futura-light st3">0</text>
					<g>
						<text transform="matrix(1 0 0 1 215.6226 486.9836)" class="mustard__fill futura-book st6">76</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[303]" ng-click="bosque.showPropertyData(38, '77')">
					<polyline id="GL77" class="property pb-sprite-2" points="280.7,552.2 159.1,552.2 159.1,508.9 280.7,508.9 280.7,552.2"/>
					<text transform="matrix(1 0 0 1 204.4775 537.9533)" class="st1 futura-light st3">18</text>
					<text transform="matrix(1 0 0 1 213.0635 537.9533)" class="st1 futura-light st3">0.00 m2</text>
					<text transform="matrix(0 -1 1 0 167.6436 537.9064)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(0 -1 1 0 167.6436 527.2394)" class="st1 futura-light st3">0</text>
					<text transform="matrix(0 -1 1 0 277.5757 537.8957)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(0 -1 1 0 277.5757 527.2277)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 210.436 516.0754)" class="st1 futura-light st3">22.5</text>
					<text transform="matrix(1 0 0 1 225.3784 516.0754)" class="st1 futura-light st3">0</text>
					<g>
						<text transform="matrix(1 0 0 1 215.6226 530.2258)" class="mustard__fill futura-book st6">77</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[304]" ng-click="bosque.showPropertyData(38, '78')">
					<polyline id="GL78" class="property pb-sprite-1" points="280.7,595.4 159.1,595.4 159.1,552.2 280.7,552.2 280.7,595.4"/>
					<text transform="matrix(1 0 0 1 204.4775 580.9855)" class="st1 futura-light st3">18</text>
					<text transform="matrix(1 0 0 1 213.0635 580.9855)" class="st1 futura-light st3">0.00 m2</text>
					<text transform="matrix(0 -1 1 0 167.6436 581.1418)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(0 -1 1 0 167.6436 570.4738)" class="st1 futura-light st3">0</text>
					<text transform="matrix(0 -1 1 0 277.5757 581.1418)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(0 -1 1 0 277.5757 570.4738)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 210.436 558.8488)" class="st1 futura-light st3">22.5</text>
					<text transform="matrix(1 0 0 1 225.3784 558.8488)" class="st1 futura-light st3">0</text>
					<g>
						<text transform="matrix(1 0 0 1 215.6226 574.2297)" class="mustard__fill futura-book st6">78</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[305]" ng-click="bosque.showPropertyData(38, '79')">
					<polyline id="GL79" class="property pb-sprite-2" points="280.7,644 159.1,644 159.1,595.4 280.7,595.4 280.7,644"/>
					<text transform="matrix(1 0 0 1 204.4775 626.8762)" class="st1 futura-light st3">20</text>
					<text transform="matrix(1 0 0 1 213.0635 626.8762)" class="st1 futura-light st3">2.50 m2</text>
					<text transform="matrix(0 -1 1 0 167.6387 627.0812)" class="st1 futura-light st3">9.0</text>
					<text transform="matrix(0 -1 1 0 167.6387 616.4133)" class="st1 futura-light st3">0</text>
					<text transform="matrix(0 -1 1 0 277.5757 627.0832)" class="st1 futura-light st3">9.0</text>
					<text transform="matrix(0 -1 1 0 277.5757 616.4172)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 210.436 603.5119)" class="st1 futura-light st3">22.5</text>
					<text transform="matrix(1 0 0 1 225.3784 603.5119)" class="st1 futura-light st3">0</text>
					<g>
						<text transform="matrix(1 0 0 1 215.6226 619.4113)" class="mustard__fill futura-book st6">79</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[306]" ng-click="bosque.showPropertyData(38, '80')">
					<polyline id="GL80" class="property pb-sprite-1" points="280.7,693.9 159.1,693.9 159.1,644 280.7,644 280.7,693.9"/>
					<text transform="matrix(1 0 0 1 204.4775 676.2023)" class="st1 futura-light st3">20</text>
					<text transform="matrix(1 0 0 1 213.0635 676.2023)" class="st1 futura-light st3">7.68 m2</text>
					<text transform="matrix(0 -1 1 0 167.6387 677.7316)" class="st1 futura-light st3">9.23</text>
					<text transform="matrix(0 -1 1 0 277.5757 677.7316)" class="st1 futura-light st3">9.23</text>
					<text transform="matrix(1 0 0 1 210.436 651.4553)" class="st1 futura-light st3">22.5</text>
					<text transform="matrix(1 0 0 1 225.3784 651.4553)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 210.436 692.1613)" class="st1 futura-light st3">22.5</text>
					<text transform="matrix(1 0 0 1 225.3784 692.1613)" class="st1 futura-light st3">0</text>
					<g>
						<text transform="matrix(1 0 0 1 215.6226 668.6594)" class="mustard__fill futura-book st6">80</text>
					</g>
					<g>
						<polyline class="st7" points="178.3,674.7 172.6,669 178.3,663.3 178.3,674.7"/>
						<polyline class="st8" points="178.3,663.3 184.1,669 178.3,674.7 178.3,663.3"/>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[307]" ng-click="bosque.showPropertyData(38, '81')">
					<polyline id="GL81" class="property pb-sprite-2" points="402.3,693.9 280.7,693.9 280.7,644 402.3,644 402.3,693.9"/>
					<text transform="matrix(1 0 0 1 324.0576 676.2023)" class="st1 futura-light st3">20</text>
					<text transform="matrix(1 0 0 1 332.644 676.2023)" class="st1 futura-light st3">7.68 m2</text>
					<text transform="matrix(0 -1 1 0 288.5562 677.7316)" class="st1 futura-light st3">9.23</text>
					<text transform="matrix(0 -1 1 0 400.7856 677.7316)" class="st1 futura-light st3">9.23</text>
					<text transform="matrix(1 0 0 1 332.0303 651.4553)" class="st1 futura-light st3">22.5</text>
					<text transform="matrix(1 0 0 1 346.9722 651.4553)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 332.0303 692.1613)" class="st1 futura-light st3">22.5</text>
					<text transform="matrix(1 0 0 1 346.9722 692.1613)" class="st1 futura-light st3">0</text>
					<g>
						<text transform="matrix(1 0 0 1 337.2383 668.6594)" class="mustard__fill futura-book st6">81</text>
					</g>
					<g>
						<polyline class="st7" points="383.1,674.7 377.3,669 383.1,663.3 383.1,674.7"/>
						<polyline class="st8" points="383.1,663.3 388.8,669 383.1,674.7 383.1,663.3"/>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[308]" ng-click="bosque.showPropertyData(38, '82')">
					<polyline id="GL82" class="property pb-sprite-1" points="402.3,644 280.7,644 280.7,595.4 402.3,595.4 402.3,644"/>
					<text transform="matrix(1 0 0 1 324.0576 626.8762)" class="st1 futura-light st3">20</text>
					<text transform="matrix(1 0 0 1 332.644 626.8762)" class="st1 futura-light st3">2.50 m2</text>
					<text transform="matrix(0 -1 1 0 288.5562 627.0812)" class="st1 futura-light st3">9.0</text>
					<text transform="matrix(0 -1 1 0 288.5562 616.4133)" class="st1 futura-light st3">0</text>
					<text transform="matrix(0 -1 1 0 400.7808 627.0812)" class="st1 futura-light st3">9.0</text>
					<text transform="matrix(0 -1 1 0 400.7808 616.4133)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 332.0303 603.5119)" class="st1 futura-light st3">22.5</text>
					<text transform="matrix(1 0 0 1 346.9722 603.5119)" class="st1 futura-light st3">0</text>
					<g>
						<text transform="matrix(1 0 0 1 337.2383 619.4113)" class="mustard__fill futura-book st6">82</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[309]" ng-click="bosque.showPropertyData(38, '83')">
					<polyline id="GL83" class="property pb-sprite-2" points="402.3,595.4 280.7,595.4 280.7,552.2 402.3,552.2 402.3,595.4"/>
					<text transform="matrix(1 0 0 1 324.0576 580.9855)" class="st1 futura-light st3">18</text>
					<text transform="matrix(1 0 0 1 332.644 580.9855)" class="st1 futura-light st3">0.00 m2</text>
					<text transform="matrix(0 -1 1 0 288.5562 581.1418)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(0 -1 1 0 288.5562 570.4738)" class="st1 futura-light st3">0</text>
					<text transform="matrix(0 -1 1 0 400.7856 581.1418)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(0 -1 1 0 400.7856 570.4738)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 332.0303 558.8488)" class="st1 futura-light st3">22.5</text>
					<text transform="matrix(1 0 0 1 346.9722 558.8488)" class="st1 futura-light st3">0</text>
					<g>
						<text transform="matrix(1 0 0 1 337.2383 573.4641)" class="mustard__fill futura-book st6">83</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[310]" ng-click="bosque.showPropertyData(38, '84')">
					<polyline id="GL84" class="property pb-sprite-1" points="402.3,552.2 280.7,552.2 280.7,508.9 402.3,508.9 402.3,552.2"/>
					<text transform="matrix(1 0 0 1 324.0576 537.9533)" class="st1 futura-light st3">18</text>
					<text transform="matrix(1 0 0 1 332.644 537.9533)" class="st1 futura-light st3">0.00 m2</text>
					<text transform="matrix(0 -1 1 0 288.5562 537.9064)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(0 -1 1 0 288.5562 527.2394)" class="st1 futura-light st3">0</text>
					<text transform="matrix(0 -1 1 0 400.7856 537.9064)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(0 -1 1 0 400.7856 527.2394)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 332.0303 516.0754)" class="st1 futura-light st3">22.5</text>
					<text transform="matrix(1 0 0 1 346.9722 516.0754)" class="st1 futura-light st3">0</text>
					<g>
						<text transform="matrix(1 0 0 1 337.2383 530.2258)" class="mustard__fill futura-book st6">84</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[311]" ng-click="bosque.showPropertyData(38, '85')">
					<polyline id="GL85" class="property pb-sprite-2" points="402.3,508.9 280.7,508.9 280.7,465.7 402.3,465.7 402.3,508.9"/>
					<text transform="matrix(1 0 0 1 324.0576 494.4338)" class="st1 futura-light st3">18</text>
					<text transform="matrix(1 0 0 1 332.644 494.4338)" class="st1 futura-light st3">0.00 m2</text>
					<text transform="matrix(0 -1 1 0 288.5562 494.6643)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(0 -1 1 0 288.5562 483.9973)" class="st1 futura-light st3">0</text>
					<text transform="matrix(0 -1 1 0 400.7856 494.6643)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(0 -1 1 0 400.7856 483.9973)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 332.0303 473.6428)" class="st1 futura-light st3">22.5</text>
					<text transform="matrix(1 0 0 1 346.9722 473.6428)" class="st1 futura-light st3">0</text>
					<g>
						<text transform="matrix(1 0 0 1 337.2383 486.9836)" class="mustard__fill futura-book st6">85</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[312]" ng-click="bosque.showPropertyData(38, '86')">
					<polyline id="GL86" class="property pb-sprite-1" points="402.3,465.7 280.7,465.7 280.7,422.4 402.3,422.4 402.3,465.7"/>
					<text transform="matrix(1 0 0 1 324.0576 451.2434)" class="st1 futura-light st3">18</text>
					<text transform="matrix(1 0 0 1 332.644 451.2434)" class="st1 futura-light st3">0.00 m2</text>
					<text transform="matrix(0 -1 1 0 288.5562 451.4192)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(0 -1 1 0 288.5562 440.7512)" class="st1 futura-light st3">0</text>
					<text transform="matrix(0 -1 1 0 400.7856 451.427)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(0 -1 1 0 400.7856 440.759)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 332.0303 430.1428)" class="st1 futura-light st3">22.5</text>
					<text transform="matrix(1 0 0 1 346.9722 430.1428)" class="st1 futura-light st3">0</text>
					<g>
						<text transform="matrix(1 0 0 1 337.2383 443.7434)" class="mustard__fill futura-book st6">86</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[313]" ng-click="bosque.showPropertyData(38, '87')">
					<polyline id="GL87" class="property pb-sprite-2" points="402.3,422.4 280.7,422.4 280.7,379.2 402.3,379.2 402.3,422.4"/>
					<text transform="matrix(1 0 0 1 324.0576 407.7419)" class="st1 futura-light st3">18</text>
					<text transform="matrix(1 0 0 1 332.644 407.7419)" class="st1 futura-light st3">0.00 m2</text>
					<text transform="matrix(0 -1 1 0 288.5562 408.1799)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(0 -1 1 0 288.5562 397.5124)" class="st1 futura-light st3">0</text>
					<text transform="matrix(0 -1 1 0 400.7856 408.1799)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(0 -1 1 0 400.7856 397.5124)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 332.0303 385.9577)" class="st1 futura-light st3">22.5</text>
					<text transform="matrix(1 0 0 1 346.9722 385.9577)" class="st1 futura-light st3">0</text>
					<g>
						<text transform="matrix(1 0 0 1 336.418 400.5051)" class="mustard__fill futura-book st6">87</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[314]" ng-click="bosque.showPropertyData(38, '88')">
					<polyline id="GL88" class="property pb-sprite-1" points="402.3,379.2 280.7,379.2 280.7,336 402.3,336 402.3,379.2"/>
					<text transform="matrix(1 0 0 1 324.0576 365.7668)" class="st1 futura-light st3">18</text>
					<text transform="matrix(1 0 0 1 332.644 365.7668)" class="st1 futura-light st3">0.00 m2</text>
					<text transform="matrix(0 -1 1 0 288.5562 364.9485)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(0 -1 1 0 288.5562 354.281)" class="st1 futura-light st3">0</text>
					<text transform="matrix(0 -1 1 0 400.7856 364.9485)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(0 -1 1 0 400.7856 354.281)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 332.0303 342.864)" class="st1 futura-light st3">22.5</text>
					<text transform="matrix(1 0 0 1 346.9722 342.864)" class="st1 futura-light st3">0</text>
					<g>
						<text transform="matrix(1 0 0 1 337.2383 357.2668)" class="mustard__fill futura-book st6">88</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[315]" ng-click="bosque.showPropertyData(38, '89')">
					<polyline id="GL89" class="property pb-sprite-2" points="402.3,336 280.7,336 280.7,287.3 402.3,287.3 402.3,336"/>
					<text transform="matrix(1 0 0 1 324.0576 319.0051)" class="st1 futura-light st3">20</text>
					<text transform="matrix(1 0 0 1 332.644 319.0051)" class="st1 futura-light st3">2.50 m2</text>
					<text transform="matrix(1 0 0 1 332.0303 295.0378)" class="st1 futura-light st3">22.5</text>
					<text transform="matrix(1 0 0 1 346.9722 295.0378)" class="st1 futura-light st3">0</text>
					<text transform="matrix(0 -1 1 0 288.5562 318.9997)" class="st1 futura-light st3">9.0</text>
					<text transform="matrix(0 -1 1 0 288.5562 308.3322)" class="st1 futura-light st3">0</text>
					<text transform="matrix(0 -1 1 0 400.7856 319.0041)" class="st1 futura-light st3">9.0</text>
					<text transform="matrix(0 -1 1 0 400.7856 308.3362)" class="st1 futura-light st3">0</text>
					<g>
						<text transform="matrix(1 0 0 1 337.2383 311.3279)" class="mustard__fill futura-book st6">89</text>
					</g>
					<g>
						<polyline class="st7" points="383.1,317.4 377.3,311.6 383.1,305.9 383.1,317.4"/>
						<polyline class="st8" points="383.1,305.9 388.8,311.6 383.1,317.4 383.1,305.9"/>
					</g>
				</g>
				<g id="DIVISIONES_6_">
					<line class="stx10" x1="159.1" y1="595.4" x2="402.3" y2="595.4"/>
					<line class="stx10" x1="159.1" y1="644" x2="402.3" y2="644"/>
					<line class="stx10" x1="159.1" y1="465.7" x2="402.3" y2="465.7"/>
					<line class="stx10" x1="159.1" y1="508.9" x2="402.3" y2="508.9"/>
					<line class="stx10" x1="159.1" y1="552.2" x2="402.3" y2="552.2"/>
					<line class="stx10" x1="280.7" y1="287.3" x2="280.7" y2="693.9"/>
					<line class="stx10" x1="159.1" y1="336" x2="402.3" y2="336"/>
					<line class="stx10" x1="159.1" y1="379.2" x2="402.3" y2="379.2"/>
					<line class="stx10" x1="159.1" y1="422.4" x2="402.3" y2="422.4"/>
				</g>
			</g>
			<g id="ISLA_H">
				<g class="property__active" ng-class="bosque.inmovablesClassList[316]" ng-click="bosque.showPropertyData(38, '90')">
					<polyline id="HL90_2_" class="property pb-sprite-2" points="572,330.6 452.6,330.6 452.6,287.3 572,287.3 572,330.6"/>
					<text transform="matrix(1 0 0 1 497.3413 316.1291)" class="st1 futura-light st3">17</text>
					<text transform="matrix(1 0 0 1 505.9272 316.1291)" class="st1 futura-light st3">6.80 m2</text>
					<text transform="matrix(1 0 0 1 502.8354 295.0378)" class="st1 futura-light st3">22.1</text>
					<text transform="matrix(1 0 0 1 517.7773 295.0378)" class="st1 futura-light st3">0</text>
					<text transform="matrix(0 -1 1 0 461.7305 316.3049)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(0 -1 1 0 461.7305 305.6374)" class="st1 futura-light st3">0</text>
					<text transform="matrix(0 -1 1 0 568.1411 316.3005)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(0 -1 1 0 568.1411 305.633)" class="st1 futura-light st3">0</text>
					<g>
						<text transform="matrix(1 0 0 1 508.02 308.6237)" class="mustard__fill futura-book st6">90</text>
					</g>
					<g>
						<polyline class="st7" points="471.8,314.7 466.1,309 471.8,303.2 471.8,314.7"/>
						<polyline class="st8" points="471.8,303.2 477.6,309 471.8,314.7 471.8,303.2"/>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[317]" ng-click="bosque.showPropertyData(38, '91')">
					<polyline id="HL91_2_" class="property pb-sprite-1" points="572,373.8 452.6,373.8 452.6,330.6 572,330.6 572,373.8"/>
					<text transform="matrix(1 0 0 1 497.3413 359.3728)" class="st1 futura-light st3">17</text>
					<text transform="matrix(1 0 0 1 505.9272 359.3728)" class="st1 futura-light st3">6.80 m2</text>
					<text transform="matrix(1 0 0 1 502.8354 337.9734)" class="st1 futura-light st3">22.1</text>
					<text transform="matrix(1 0 0 1 517.7773 337.9734)" class="st1 futura-light st3">0</text>
					<text transform="matrix(0 -1 1 0 461.7305 359.5383)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(0 -1 1 0 461.7305 348.8708)" class="st1 futura-light st3">0</text>
					<text transform="matrix(0 -1 1 0 568.1411 359.5344)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(0 -1 1 0 568.1411 348.8664)" class="st1 futura-light st3">0</text>
					<g>
						<text transform="matrix(1 0 0 1 508.02 351.8615)" class="mustard__fill futura-book st6">91</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[318]" ng-click="bosque.showPropertyData(38, '92')">
					<polyline id="HL92_2_" class="property pb-sprite-2" points="572,417 452.6,417 452.6,373.8 572,373.8 572,417"/>
					<text transform="matrix(1 0 0 1 497.3413 402.6159)" class="st1 futura-light st3">17</text>
					<text transform="matrix(1 0 0 1 505.9272 402.6159)" class="st1 futura-light st3">6.80 m2</text>
					<text transform="matrix(1 0 0 1 502.8354 381.2434)" class="st1 futura-light st3">22.1</text>
					<text transform="matrix(1 0 0 1 517.7773 381.2434)" class="st1 futura-light st3">0</text>
					<text transform="matrix(0 -1 1 0 461.7305 402.7776)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(0 -1 1 0 461.7305 392.1101)" class="st1 futura-light st3">0</text>
					<text transform="matrix(0 -1 1 0 568.1411 402.7702)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(0 -1 1 0 568.1411 392.1023)" class="st1 futura-light st3">0</text>
					<g>
						<text transform="matrix(1 0 0 1 508.02 395.1057)" class="mustard__fill futura-book st6">92</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[319]" ng-click="bosque.showPropertyData(38, '93')">
					<polyline id="HL93_2_" class="property pb-sprite-1" points="572,460.3 452.6,460.3 452.6,417 572,417 572,460.3"/>
					<text transform="matrix(1 0 0 1 497.3413 445.8488)" class="st1 futura-light st3">17</text>
					<text transform="matrix(1 0 0 1 505.9272 445.8488)" class="st1 futura-light st3">6.80 m2</text>
					<text transform="matrix(1 0 0 1 502.8354 425.2756)" class="st1 futura-light st3">22.1</text>
					<text transform="matrix(1 0 0 1 517.7773 425.2756)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 502.8354 457.7824)" class="st1 futura-light st3">22.1</text>
					<text transform="matrix(1 0 0 1 517.7773 457.7824)" class="st1 futura-light st3">0</text>
					<text transform="matrix(0 -1 1 0 461.7305 446.0168)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(0 -1 1 0 461.7305 435.3488)" class="st1 futura-light st3">0</text>
					<text transform="matrix(0 -1 1 0 568.1411 446.0197)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(0 -1 1 0 568.1411 435.3518)" class="st1 futura-light st3">0</text>
					<g>
						<text transform="matrix(1 0 0 1 508.02 438.3401)" class="mustard__fill futura-book st6">93</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[320]" ng-click="bosque.showPropertyData(38, '94')">
					<polyline id="HL94_2_" class="property pb-sprite-2" points="587.7,503.5 452.6,503.5 452.6,460.3 587.7,460.3 587.7,503.5"/>
					<text transform="matrix(1 0 0 1 502.4131 488.9133)" class="st1 futura-light st3">20</text>
					<text transform="matrix(1 0 0 1 510.999 488.9133)" class="st1 futura-light st3">0.00 m2</text>
					<text transform="matrix(1 0 0 1 510.6675 469.1242)" class="st1 futura-light st3">25.0</text>
					<text transform="matrix(1 0 0 1 525.6094 469.1242)" class="st1 futura-light st3">0</text>
					<text transform="matrix(0 -1 1 0 583.3027 489.259)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(0 -1 1 0 583.3027 478.593)" class="st1 futura-light st3">0</text>
					<text transform="matrix(0 -1 1 0 461.7305 489.259)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(0 -1 1 0 461.7305 478.593)" class="st1 futura-light st3">0</text>
					<g>
						<text transform="matrix(1 0 0 1 515.8579 481.5822)" class="mustard__fill futura-book st6">94</text>
					</g>
					<g>
						<polyline class="st7" points="471.8,487.6 466.1,481.9 471.8,476.2 471.8,487.6"/>
						<polyline class="st8" points="471.8,476.2 477.6,481.9 471.8,487.6 471.8,476.2"/>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[321]" ng-click="bosque.showPropertyData(38, '95')">
					<polyline id="HL95_2_" class="property pb-sprite-1" points="587.7,546.8 452.6,546.8 452.6,503.5 587.7,503.5 587.7,546.8"/>
					<text transform="matrix(1 0 0 1 502.4131 532.1555)" class="st1 futura-light st3">20</text>
					<text transform="matrix(1 0 0 1 510.999 532.1555)" class="st1 futura-light st3">0.00 m2</text>
					<text transform="matrix(0 -1 1 0 583.3027 532.4953)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(0 -1 1 0 583.3027 521.8273)" class="st1 futura-light st3">0</text>
					<text transform="matrix(0 -1 1 0 461.7305 532.4973)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(0 -1 1 0 461.7305 521.8293)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 510.6675 512.0021)" class="st1 futura-light st3">25.0</text>
					<text transform="matrix(1 0 0 1 525.6094 512.0021)" class="st1 futura-light st3">0</text>
					<g>
						<text transform="matrix(1 0 0 1 515.8579 524.8156)" class="mustard__fill futura-book st6">95</text>
					</g>
					<g>
						<polyline class="st7" points="471.8,530.9 466.1,525.1 471.8,519.4 471.8,530.9"/>
						<polyline class="st8" points="471.8,519.4 477.6,525.1 471.8,530.9 471.8,519.4"/>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[322]" ng-click="bosque.showPropertyData(38, '96')">
					<polyline id="HL96_2_" class="property pb-sprite-2" points="587.7,595.4 452.6,595.4 452.6,546.8 587.7,546.8 587.7,595.4"/>
					<text transform="matrix(1 0 0 1 502.4131 578.0998)" class="st1 futura-light st3">22</text>
					<text transform="matrix(1 0 0 1 510.999 578.0998)" class="st1 futura-light st3">5.00 m2</text>
					<text transform="matrix(0 -1 1 0 583.3027 578.4348)" class="st1 futura-light st3">9.0</text>
					<text transform="matrix(0 -1 1 0 583.3027 567.7668)" class="st1 futura-light st3">0</text>
					<text transform="matrix(0 -1 1 0 461.7246 578.4348)" class="st1 futura-light st3">9.0</text>
					<text transform="matrix(0 -1 1 0 461.7246 567.7668)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 510.6675 554.048)" class="st1 futura-light st3">25.0</text>
					<text transform="matrix(1 0 0 1 525.6094 554.048)" class="st1 futura-light st3">0</text>
					<g>
						<text transform="matrix(1 0 0 1 515.8579 570.7687)" class="mustard__fill futura-book st6">96</text>
					</g>
					<g>
						<polyline class="st7" points="471.8,576.8 466.1,571.1 471.8,565.4 471.8,576.8"/>
						<polyline class="st8" points="471.8,565.4 477.6,571.1 471.8,576.8 471.8,565.4"/>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[323]" ng-click="bosque.showPropertyData(38, '97')">
					<polyline id="HL97_2_" class="property pb-sprite-1" points="587.7,644 452.6,644 452.6,595.4 587.7,595.4 587.7,644"/>
					<text transform="matrix(1 0 0 1 502.4131 626.7443)" class="st1 futura-light st3">22</text>
					<text transform="matrix(1 0 0 1 510.999 626.7443)" class="st1 futura-light st3">5.00 m2</text>
					<text transform="matrix(0 -1 1 0 583.3027 627.0812)" class="st1 futura-light st3">9.0</text>
					<text transform="matrix(0 -1 1 0 583.3027 616.4133)" class="st1 futura-light st3">0</text>
					<text transform="matrix(0 -1 1 0 461.7246 627.0812)" class="st1 futura-light st3">9.0</text>
					<text transform="matrix(0 -1 1 0 461.7246 616.4133)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 510.6675 603.3215)" class="st1 futura-light st3">25.0</text>
					<text transform="matrix(1 0 0 1 525.6094 603.3215)" class="st1 futura-light st3">0</text>
					<g>
						<text transform="matrix(1 0 0 1 515.8579 619.4113)" class="mustard__fill futura-book st6">97</text>
					</g>
					<g>
						<polyline class="st7" points="471.8,625.5 466.1,619.7 471.8,614 471.8,625.5"/>
						<polyline class="st8" points="471.8,614 477.6,619.7 471.8,625.5 471.8,614"/>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[324]" ng-click="bosque.showPropertyData(38, '98')">
					<polyline id="HL98_2_" class="property pb-sprite-2" points="587.7,693.9 452.6,693.9 452.6,644 587.7,644 587.7,693.9"/>
					<text transform="matrix(1 0 0 1 502.4131 675.9953)" class="st1 futura-light st3">23</text>
					<text transform="matrix(1 0 0 1 510.999 675.9953)" class="st1 futura-light st3">0.75 m2</text>
					<text transform="matrix(0 -1 1 0 583.3027 677.7316)" class="st1 futura-light st3">9.23</text>
					<text transform="matrix(0 -1 1 0 461.7305 677.7316)" class="st1 futura-light st3">9.23</text>
					<text transform="matrix(1 0 0 1 510.6675 692.2199)" class="st1 futura-light st3">25.0</text>
					<text transform="matrix(1 0 0 1 525.6094 692.2199)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 510.6675 651.7951)" class="st1 futura-light st3">25.0</text>
					<text transform="matrix(1 0 0 1 525.6094 651.7951)" class="st1 futura-light st3">0</text>
					<g>
						<text transform="matrix(1 0 0 1 515.8579 668.6594)" class="mustard__fill futura-book st6">98</text>
					</g>
					<g>
						<polyline class="st7" points="471.8,674.7 466.1,669 471.8,663.3 471.8,674.7"/>
						<polyline class="st8" points="471.8,663.3 477.6,669 471.8,674.7 471.8,663.3"/>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[325]" ng-click="bosque.showPropertyData(38, '99')">
					<polyline id="HL99_2_" class="property pb-sprite-1" points="691.4,330.6 572,330.6 572,287.3 691.4,287.3 691.4,330.6"/>
					<text transform="matrix(1 0 0 1 613.936 316.1291)" class="st1 futura-light st3">17</text>
					<text transform="matrix(1 0 0 1 622.5225 316.1291)" class="st1 futura-light st3">6.80 m2</text>
					<text transform="matrix(1 0 0 1 622.2734 295.0378)" class="st1 futura-light st3">22.1</text>
					<text transform="matrix(1 0 0 1 637.2158 295.0378)" class="st1 futura-light st3">0</text>
					<text transform="matrix(0 -1 1 0 581.0474 316.3005)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(0 -1 1 0 581.0474 305.633)" class="st1 futura-light st3">0</text>
					<text transform="matrix(0 -1 1 0 689.582 316.3005)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(0 -1 1 0 689.582 305.633)" class="st1 futura-light st3">0</text>
					<g>
						<text transform="matrix(1 0 0 1 627.4624 308.6237)" class="mustard__fill futura-book st6">99</text>
					</g>
					<g>
						<polyline class="st7" points="672.2,314.7 666.5,309 672.2,303.2 672.2,314.7"/>
						<polyline class="st8" points="672.2,303.2 677.9,309 672.2,314.7 672.2,303.2"/>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[326]" ng-click="bosque.showPropertyData(38, '100')">
					<polyline id="HL100_2_" class="property pb-sprite-2" points="691.4,373.8 572,373.8 572,330.6 691.4,330.6 691.4,373.8"/>
					<text transform="matrix(1 0 0 1 613.936 359.3728)" class="st1 futura-light st3">17</text>
					<text transform="matrix(1 0 0 1 622.5225 359.3728)" class="st1 futura-light st3">6.80 m2</text>
					<text transform="matrix(1 0 0 1 622.2734 337.9734)" class="st1 futura-light st3">22.1</text>
					<text transform="matrix(1 0 0 1 637.2158 337.9734)" class="st1 futura-light st3">0</text>
					<text transform="matrix(0 -1 1 0 581.0474 359.5344)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(0 -1 1 0 581.0474 348.8664)" class="st1 futura-light st3">0</text>
					<text transform="matrix(0 -1 1 0 689.582 359.5344)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(0 -1 1 0 689.582 348.8664)" class="st1 futura-light st3">0</text>
					<g>
						<text transform="matrix(1 0 0 1 625.3198 351.8615)" class="mustard__fill futura-book st6">100</text>
					</g>
					
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[327]" ng-click="bosque.showPropertyData(38, '101')">
					<polyline id="HL101_2_" class="property pb-sprite-1" points="691.4,417 572,417 572,373.8 691.4,373.8 691.4,417"/>
					<text transform="matrix(1 0 0 1 613.936 402.6159)" class="st1 futura-light st3">17</text>
					<text transform="matrix(1 0 0 1 622.5225 402.6159)" class="st1 futura-light st3">6.80 m2</text>
					<text transform="matrix(1 0 0 1 622.2734 381.2434)" class="st1 futura-light st3">22.1</text>
					<text transform="matrix(1 0 0 1 637.2158 381.2434)" class="st1 futura-light st3">0</text>
					<text transform="matrix(0 -1 1 0 581.0474 402.7776)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(0 -1 1 0 581.0474 392.1101)" class="st1 futura-light st3">0</text>
					<text transform="matrix(0 -1 1 0 689.582 402.7849)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(0 -1 1 0 689.582 392.1174)" class="st1 futura-light st3">0</text>
					<g>
						<text transform="matrix(1 0 0 1 625.3198 395.1057)" class="mustard__fill futura-book st6">101</text>
					</g>
				
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[328]" ng-click="bosque.showPropertyData(38, '102')">
					<polyline id="HL102_2_" class="property pb-sprite-2" points="691.4,460.3 572,460.3 572,417 691.4,417 691.4,460.3"/>
					<text transform="matrix(1 0 0 1 613.936 445.8488)" class="st1 futura-light st3">17</text>
					<text transform="matrix(1 0 0 1 622.5225 445.8488)" class="st1 futura-light st3">6.80 m2</text>
					<text transform="matrix(1 0 0 1 622.2734 425.2756)" class="st1 futura-light st3">22.1</text>
					<text transform="matrix(1 0 0 1 637.2158 425.2756)" class="st1 futura-light st3">0</text>
					<text transform="matrix(1 0 0 1 622.2734 457.7824)" class="st1 futura-light st3">22.1</text>
					<text transform="matrix(1 0 0 1 637.2158 457.7824)" class="st1 futura-light st3">0</text>
					<text transform="matrix(0 -1 1 0 581.0474 446.0168)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(0 -1 1 0 581.0474 435.3488)" class="st1 futura-light st3">0</text>
					<text transform="matrix(0 -1 1 0 689.582 446.0197)" class="st1 futura-light st3">8.0</text>
					<text transform="matrix(0 -1 1 0 689.582 435.3518)" class="st1 futura-light st3">0</text>
					<g>
						<text transform="matrix(1 0 0 1 625.3198 438.3401)" class="mustard__fill futura-book st6">102</text>
					</g>
					<g>
						<polyline class="st7" points="672.2,444.4 666.5,438.6 672.2,432.9 672.2,444.4"/>
						<polyline class="st8" points="672.2,432.9 677.9,438.6 672.2,444.4 672.2,432.9"/>
					</g>
				</g>
				<g id="DIVISIONES_3_">
					<line class="stx10" x1="587.7" y1="693.9" x2="587.7" y2="460.3"/>
					<line class="stx10" x1="691.4" y1="330.6" x2="452.6" y2="330.6"/>
					<line class="stx10" x1="691.4" y1="373.8" x2="452.6" y2="373.8"/>
					<line class="stx10" x1="691.4" y1="417" x2="452.6" y2="417"/>
					<line class="stx10" x1="587.7" y1="644" x2="452.6" y2="644"/>
					<line class="stx10" x1="691.4" y1="460.3" x2="452.6" y2="460.3"/>
					<line class="stx10" x1="587.7" y1="503.5" x2="452.6" y2="503.5"/>
					<line class="stx10" x1="587.7" y1="546.8" x2="452.6" y2="546.8"/>
					<line class="stx10" x1="587.7" y1="595.4" x2="452.6" y2="595.4"/>
					<line class="stx10" x1="572" y1="460.3" x2="572" y2="287.3"/>
				</g>
			</g>
			<g id="ISLA_I">
				<g class="property__active" ng-class="bosque.inmovablesClassList[329]" ng-click="bosque.showPropertyData(38, '103')">
					<polyline id="IL103" class="property pb-sprite-1" points="1056.1,520 921.9,504.3 927.2,458.8 1063.3,458.8 1056.1,520"/>
					<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 973.2242 494.1945)" class="st1 futura-light st12">24</text>
					<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 981.7515 495.1964)" class="st1 futura-light st12">8.43 m2</text>
					<text transform="matrix(1 0 0 1 985.8047 467.3352)" class="st1 futura-light st3">25.1</text>
					<text transform="matrix(1 0 0 1 1000.748 467.3352)" class="st1 futura-light st3">7</text>
					<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 932.7629 489.8115)" class="st1 futura-light st12">8.4</text>
					<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 934.0079 479.2164)" class="st1 futura-light st12">7</text>
					<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1054.3379 499.6176)" class="st1 futura-light st12">1</text>
					<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1054.8367 495.3724)" class="st1 futura-light st12">1.41</text>
					<g>
						<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 985.3159 488.25)" class="mustard__fill futura-book st13">103</text>
					</g>
					<g>
						<polyline class="st7" points="948.3,489.9 942.6,484.2 948.3,478.5 948.3,489.9"/>
						<polyline class="st8" points="948.3,478.5 954.1,484.2 948.3,489.9 948.3,478.5"/>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[330]" ng-click="bosque.showPropertyData(38, '104')">
					<polyline id="IL104" class="property pb-sprite-2" points="1051.1,563 916.9,547.2 921.9,504.3 1056.1,520 1051.1,563"/>
					<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 966.8129 539.2861)" class="st1 futura-light st12">20</text>
					<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 975.3411 540.2882)" class="st1 futura-light st12">0.00 m2</text>
					<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 927.5834 534.0105)" class="st1 futura-light st12">8.0</text>
					<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 928.8283 523.415)" class="st1 futura-light st12">0</text>
					<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1048.6433 548.2246)" class="st1 futura-light st12">8.0</text>
					<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1049.8884 537.6286)" class="st1 futura-light st12">0</text>
					<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 978.677 518.6674)" class="st1 futura-light st12">25.0</text>
					<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 993.5173 520.4112)" class="st1 futura-light st12">0</text>
					<g>
						<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 980.1308 532.4547)" class="mustard__fill futura-book st13">104</text>
					</g>
					<g>
						<polyline class="st7" points="942.6,533.9 936.9,528.2 942.6,522.5 942.6,533.9"/>
						<polyline class="st8" points="942.6,522.5 948.3,528.2 942.6,533.9 942.6,522.5"/>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[331]" ng-click="bosque.showPropertyData(38, '105')">
					<polyline id="IL105" class="property pb-sprite-1" points="1046,605.9 911.8,590.1 916.9,547.2 1051.1,563 1046,605.9"/>
					<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 962.7018 581.8644)" class="st1 futura-light st12">20</text>
					<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 971.2301 582.8665)" class="st1 futura-light st12">0.00 m2</text>
					<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 922.5404 576.9631)" class="st1 futura-light st12">8.0</text>
					<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 923.7853 566.368)" class="st1 futura-light st12">0</text>
					<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1043.583 591.1658)" class="st1 futura-light st12">8.0</text>
					<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1044.828 580.5702)" class="st1 futura-light st12">0</text>
					<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 973.532 562.4384)" class="st1 futura-light st12">25.0</text>
					<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 988.3723 564.1821)" class="st1 futura-light st12">0</text>
					<g>
						<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 975.0947 575.3987)" class="mustard__fill futura-book st13">105</text>
					</g>
					<g>
						<polyline class="st7" points="936.7,576.5 931,570.8 936.7,565 936.7,576.5"/>
						<polyline class="st8" points="936.7,565 942.4,570.8 936.7,576.5 936.7,565"/>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[332]" ng-click="bosque.showPropertyData(38, '106')">
					<polyline id="IL106" class="property pb-sprite-2" points="1041,648.8 906.8,633.1 911.8,590.1 1046,605.9 1041,648.8"/>
					<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 957.9542 624.4371)" class="st1 futura-light st12">20</text>
					<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 966.4835 625.4393)" class="st1 futura-light st12">0.00 m2</text>
					<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 917.511 619.9093)" class="st1 futura-light st12">8.0</text>
					<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 918.756 609.3127)" class="st1 futura-light st12">0</text>
					<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1038.557 634.1085)" class="st1 futura-light st12">8.0</text>
					<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1039.802 623.5125)" class="st1 futura-light st12">0</text>
					<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 968.5272 605.0665)" class="st1 futura-light st12">25.0</text>
					<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 983.3685 606.8103)" class="st1 futura-light st12">0</text>
					<g>
						<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 970.0408 618.3441)" class="mustard__fill futura-book st13">106</text>
					</g>
					<g>
						<polyline class="st7" points="930.6,619 924.8,613.3 930.6,607.5 930.6,619"/>
						<polyline class="st8" points="930.6,607.5 936.3,613.3 930.6,619 930.6,607.5"/>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[333]" ng-click="bosque.showPropertyData(38, '107')">
					<polyline id="IL107" class="property pb-sprite-1" points="1035.7,694.3 899.6,694.3 906.8,633.1 1041,648.8 1035.7,694.3"/>
					<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 952.7509 668.7883)" class="st1 futura-light st12">24</text>
					<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 961.2791 669.7903)" class="st1 futura-light st12">8.43 m2</text>
					<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 910.9896 675.4698)" class="st1 futura-light st12">1</text>
					<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 911.4885 671.2241)" class="st1 futura-light st12">1.41</text>
					<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1033.3694 678.3169)" class="st1 futura-light st12">8.4</text>
					<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1034.6143 667.7223)" class="st1 futura-light st12">7</text>
					<text transform="matrix(1 0 0 1 958.1563 691.0734)" class="st1 futura-light st3">25.1</text>
					<text transform="matrix(1 0 0 1 973.0996 691.0734)" class="st1 futura-light st3">7</text>
					<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 963.4454 648.3994)" class="st1 futura-light st12">25.0</text>
					<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 978.2867 650.1432)" class="st1 futura-light st12">0</text>
					<g>
						<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 965.5816 661.785)" class="mustard__fill futura-book st13">107</text>
					</g>
					<g>
						<polyline class="st7" points="923.9,675.7 918.2,669.9 923.9,664.2 923.9,675.7"/>
						<polyline class="st8" points="923.9,664.2 929.7,669.9 923.9,675.7 923.9,664.2"/>
					</g>
				</g>
                <g class="property__active" ng-class="bosque.inmovablesClassList[334]" ng-click="bosque.showPropertyData(38, '108')">
					<polyline id="IL108" class="property pb-sprite-2" points="1158.1,694.3 1035.7,694.3 1042.7,633.9 1163.5,648.1 1158.1,694.3"/>
					<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1081.8782 669.0403)" class="st1 futura-light st12">22</text>
					<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1090.4064 670.0423)" class="st1 futura-light st12">3.59 m2</text>
					<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1047.516 674.5248)" class="st1 futura-light st12">11.2</text>
					<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1049.2598 659.6846)" class="st1 futura-light st12">6</text>
					<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1156.7714 679.437)" class="st1 futura-light st12">8.62</text>
					<text transform="matrix(1 0 0 1 1086.0254 691.0734)" class="st1 futura-light st3">2</text>
					<text transform="matrix(1 0 0 1 1090.2998 691.0734)" class="st1 futura-light st3">2.66</text>
					<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1092.6675 648.5893)" class="st1 futura-light st12">22.5</text>
					<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1107.5088 650.3331)" class="st1 futura-light st12">0</text>
					<g>
						<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1094.7815 662.1798)" class="mustard__fill futura-book st13">108</text>
					</g>
					<g>
						<polyline class="st7" points="1139.3,676.4 1133.5,670.7 1139.3,664.9 1139.3,676.4"/>
						<polyline class="st8" points="1139.3,664.9 1145,670.7 1139.3,676.4 1139.3,664.9"/>
					</g>
				</g>
                <g class="property__active" ng-class="bosque.inmovablesClassList[335]" ng-click="bosque.showPropertyData(38, '109')">
					<polyline id="IL109" class="property pb-sprite-1" points="1163.5,648.1 1042.7,633.9 1047.8,590.9 1168.6,605.1 1163.5,648.1"/>
					<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1087.0911 624.4401)" class="st1 futura-light st12">18</text>
					<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1095.6194 625.4421)" class="st1 futura-light st12">0.00 m2</text>
					<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1053.8268 620.7326)" class="st1 futura-light st12">8.0</text>
					<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1055.0697 610.1378)" class="st1 futura-light st12">0</text>
					<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1162.1685 633.4449)" class="st1 futura-light st12">8.0</text>
					<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1163.4124 622.8498)" class="st1 futura-light st12">0</text>
					<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1097.7358 605.4456)" class="st1 futura-light st12">22.5</text>
					<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1112.5771 607.1894)" class="st1 futura-light st12">0</text>
					<g>
						<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1099.2972 618.3423)" class="mustard__fill futura-book st13">109</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[336]" ng-click="bosque.showPropertyData(38, '110')">
					<polyline id="IL110" class="property pb-sprite-2" points="1168.6,605.1 1047.8,590.9 1052.8,548 1173.6,562.2 1168.6,605.1"/>
					<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1093.3875 582.5527)" class="st1 futura-light st12">18</text>
					<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1101.9156 583.5547)" class="st1 futura-light st12">0.00 m2</text>
					<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1058.8644 577.7913)" class="st1 futura-light st12">8.0</text>
					<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1060.1094 567.1962)" class="st1 futura-light st12">0</text>
					<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1167.2029 590.5067)" class="st1 futura-light st12">8.0</text>
					<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1168.4478 579.9116)" class="st1 futura-light st12">0</text>
					<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1102.8903 561.57)" class="st1 futura-light st12">22.5</text>
					<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1117.7314 563.3138)" class="st1 futura-light st12">0</text>
					<g>
						<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1104.3326 575.4037)" class="mustard__fill futura-book st13">110</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[337]" ng-click="bosque.showPropertyData(38, '111')">
					<polyline id="IL111" class="property pb-sprite-1" points="1173.6,562.2 1052.8,548 1057.9,505.1 1178.7,519.2 1173.6,562.2"/>
					<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1095.8879 539.505)" class="st1 futura-light st12">18</text>
					<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1104.4153 540.5069)" class="st1 futura-light st12">0.00 m2</text>
					<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1063.9147 534.844)" class="st1 futura-light st12">8.0</text>
					<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1065.1595 524.249)" class="st1 futura-light st12">0</text>
					<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1172.234 547.5537)" class="st1 futura-light st12">8.0</text>
					<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1173.4789 536.9587)" class="st1 futura-light st12">0</text>
					<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1107.8995 518.8362)" class="st1 futura-light st12">22.5</text>
					<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1122.7408 520.5801)" class="st1 futura-light st12">0</text>
					<g>
						<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1109.3673 532.4546)" class="mustard__fill futura-book st13">111</text>
					</g>
				</g>
				<g class="property__active" ng-class="bosque.inmovablesClassList[338]" ng-click="bosque.showPropertyData(38, '112')">
					<polyline id="IL112" class="property pb-sprite-2" points="1178.7,519.2 1057.9,505.1 1063.3,458.8 1185.7,458.8 1178.7,519.2"/>
					<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1102.4088 493.9503)" class="st1 futura-light st12">22</text>
					<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1110.936 494.9522)" class="st1 futura-light st12">3.59 m2</text>
					<text transform="matrix(1 0 0 1 1113.6465 467.3352)" class="st1 futura-light st3">2</text>
					<text transform="matrix(1 0 0 1 1117.9219 467.3352)" class="st1 futura-light st3">2.66</text>
					<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1068.9862 491.6308)" class="st1 futura-light st12">8.62</text>
					<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1178.0664 497.9659)" class="st1 futura-light st12">11.2</text>
					<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1179.8102 483.1256)" class="st1 futura-light st12">6</text>
					<g>
						<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1114.6104 487.8579)" class="mustard__fill futura-book st13">112</text>
					</g>
					<g>
						<polyline class="st7" points="1158.4,492.8 1152.7,487.1 1158.4,481.4 1158.4,492.8"/>
						<polyline class="st8" points="1158.4,481.4 1164.2,487.1 1158.4,492.8 1158.4,481.4"/>
					</g>
				</g>
				<g id="DIVISIONES_8_">
					<line class="stx10" x1="1035.7" y1="694.3" x2="1063.3" y2="458.8"/>
					<line class="stx10" x1="921.9" y1="504.3" x2="1056.1" y2="520"/>
					<line class="stx10" x1="916.9" y1="547.2" x2="1051.1" y2="563"/>
					<line class="stx10" x1="911.8" y1="590.1" x2="1046" y2="605.9"/>
					<line class="stx10" x1="906.8" y1="633.1" x2="1041" y2="648.8"/>
					<line class="stx10" x1="1057.9" y1="505.1" x2="1178.7" y2="519.2"/>
					<line class="stx10" x1="1052.8" y1="548" x2="1173.6" y2="562.2"/>
					<line class="stx10" x1="1047.8" y1="590.9" x2="1168.6" y2="605.1"/>
					<line class="stx10" x1="1042.7" y1="633.9" x2="1163.5" y2="648.1"/>
				</g>
			</g>
			<g id="COMPLEMENTO">
				<g>
					<text transform="matrix(0.903 2.324116e-02 -2.128008e-02 0.9998 373.0462 133.8704)" class="st14 futura-book st15">ACCESO</text>
					<path class="st14" d="M383.7,142c2.9,0,5.3-2.5,5.5-5.6l7.7,0.1l-6.6,6.3l-6.6,6.3l-6.5-6.4l-6.5-6.4l7.7,0.1
						C378.5,139.4,380.8,142,383.7,142"/>
				</g>
				<g>
					<text transform="matrix(0.9061 7.883800e-04 1.785064e-02 0.9998 437.3215 149.387)" class="st14 futura-book st16">SALIDA</text>
					<path class="st14" d="M445.7,138.2c2.9,0,5.2,2.5,5.5,5.6h7.6l-6.6-6.2l-6.6-6.2l-6.3,6.2l-6.3,6.2h7.6
						C440.6,140.7,442.9,138.2,445.7,138.2"/>
				</g>
				<polyline class="st17" points="358.4,114.2 0.6,114.2 0.6,852.7 1301.1,852.7 1364.4,298.1 743.2,298.1 743.2,127.8 656.5,127.8 
					656.5,114.2 472.7,114.2"/>
			</g>
		</svg>

    </div>

</body>
</html>