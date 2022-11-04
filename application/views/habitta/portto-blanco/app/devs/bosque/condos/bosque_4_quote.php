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
					<h1 class="center-align">Bosque 4</h1>
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

		<svg version="1.1" class="quote__map" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 1366 1922" style="enable-background:new 0 0 1366 1922;" xml:space="preserve">
<style type="text/css">
	.st0{clip-path:url(#SVGID_2_);}
	.st1{clip-path:url(#SVGID_4_);}
	.st2{fill-rule:evenodd;clip-rule:evenodd;fill:#64768C;}
	.st3{opacity:0.6;fill-rule:evenodd;clip-rule:evenodd;fill:#E0A843;}
	.st4{fill-rule:evenodd;clip-rule:evenodd;fill:#E0A843;}
	.st5{fill:#FFFFFF;}
	.st6{font-family:'CenturyGothic';}
	.st7{font-size:14.3645px;}
	.st8{fill:#FFBF00;}
	.st9{font-family:'CenturyGothic-Bold';}
	.st10{font-size:20.1103px;}
	.st11{fill-rule:evenodd;clip-rule:evenodd;fill:#4076AE;}
	.st12{font-size:20.1104px;}
	.st13{font-size:14.3646px;}
	.st14{fill:none;stroke:#FFFFFF;stroke-width:2.1547;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
	.st15{fill:#03234B;}
	.st16{font-size:9.4141px;}
	.st17{font-size:9.4459px;}
	.st18{fill:none;stroke:#002856;stroke-width:5.7458;stroke-miterlimit:10;}
</style>
<g id="MAPA_BASE_1_">
	
	<image style="overflow:visible;" width="1355" height="1930" xlink:href="media/assets/img/habitta/portto-blanco/app/devs/bosque/condos/bosque_4.jpg"  transform="matrix(1 0 0 1 -0.3031 0)">
	
	</image>
	<g>
		<defs>
			<path id="SVGID_1_" d="M2.6,1401c0-466.4,0-932.8,0-1399.2c452.1,330.7,904.1,661.3,1356.2,992
				c-36.2,308.8-72.5,617.6-108.7,926.4c-361.2,0-722.4,0-1083.6,0c0-99.4,0-198.8,0-298.2c-49.8-0.5-99.6-0.9-149.3-1.4
				c0-7.4,0-14.8,0-22.1c-7.1,0-14.2,0-21.4,0"/>
		</defs>
		<clipPath id="SVGID_2_">
			<use xlink:href="#SVGID_1_"  style="overflow:visible;"/>
		</clipPath>
		<g class="st0">
			<g>
				<defs>
					<rect id="SVGID_3_" x="-1232.4" y="-81.1" width="2661.5" height="5314.1"/>
				</defs>
				<clipPath id="SVGID_4_">
					<use xlink:href="#SVGID_3_"  style="overflow:visible;"/>
				</clipPath>
				<g class="st1">
					<defs>
						<rect id="SVGID_5_" x="-1232.4" y="-81.1" width="2661.5" height="5314.1"/>
					</defs>
					<clipPath id="SVGID_6_">
						<use xlink:href="#SVGID_5_"  style="overflow:visible;"/>
					</clipPath>
				</g>
			</g>
		</g>
	</g>
</g>
<g id="CONDO_BOSQUE_4">
	<g id="MACHOTE">
	</g>
	<g id="ISLA_A">
		<!--dasdsad-->
		<g id="A-01_2_" class="property__active" ng-class="bosque.inmovablesClassList[339]" ng-click="bosque.showPropertyData(39, '1')">
			<polyline id="AL-01_2_" class="property pb-sprite-2" points="237.5,1311.2 1.4,1311.2 1.4,1235.7 237.5,1235.7 237.5,1311.2 			"/>
			<g>
				<polyline class="st3" points="184.4,1263.4 194.4,1273.4 184.4,1283.5 184.4,1263.4 				"/>
				<polyline class="st4" points="184.4,1283.5 174.4,1273.4 184.4,1263.4 184.4,1283.5 				"/>
			</g>
			<text transform="matrix(1 0 0 1 88.8596 1285.8151)"><tspan x="0" y="0" class="st5 futura-light st7">20</tspan><tspan x="15.9" y="0" class="st5 futura-light st7">0.00 m2</tspan></text>
			<text transform="matrix(0 -1 1 0 18.4671 1286.2877)"><tspan x="0" y="0" class="st5 futura-light st7">8.0</tspan><tspan x="19.8" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(0 -1 1 0 232.7796 1286.2877)"><tspan x="0" y="0" class="st5 futura-light st7">8.0</tspan><tspan x="19.8" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(1 0 0 1 102.9339 1306.4908)"><tspan x="0" y="0" class="st5 futura-light st7">25.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(1 0 0 1 110.5003 1269.8287)" class="st8 futura-book st10">01</text>
		</g>
		<g id="A-02_2_" class="property__active" ng-class="bosque.inmovablesClassList[340]" ng-click="bosque.showPropertyData(39, '2')">
			<polyline id="AL-02_2_" class="property pb-sprite-1" points="237.5,1235.7 1.4,1235.7 1.4,1160.1 237.5,1160.1 237.5,1235.7 			"/>
			<text transform="matrix(1 0 0 1 88.8596 1210.2623)"><tspan x="0" y="0" class="st5 futura-light st7">20</tspan><tspan x="15.9" y="0" class="st5 futura-light st7">0.00 m2</tspan></text>
			<text transform="matrix(0 -1 1 0 18.4671 1210.7369)"><tspan x="0" y="0" class="st5 futura-light st7">8.0</tspan><tspan x="19.8" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(0 -1 1 0 232.7796 1210.7369)"><tspan x="0" y="0" class="st5 futura-light st7">8.0</tspan><tspan x="19.8" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(1 0 0 1 102.9339 1230.9479)"><tspan x="0" y="0" class="st5 futura-light st7">25.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(1 0 0 1 110.5003 1193.1725)" class="st8 futura-book st10">02</text>
		</g>
		<g id="A-03_2_" class="property__active" ng-class="bosque.inmovablesClassList[341]" ng-click="bosque.showPropertyData(39, '3')">
			<polyline id="AL-03_2_" class="property pb-sprite-2" points="237.5,1160.1 1.4,1160.1 1.4,1084.6 237.5,1084.6 237.5,1160.1 			"/>
			<text transform="matrix(1 0 0 1 88.8596 1134.7311)"><tspan x="0" y="0" class="st5 futura-light st7">20</tspan><tspan x="15.9" y="0" class="st5 futura-light st7">0.00 m2</tspan></text>
			<text transform="matrix(0 -1 1 0 18.4671 1135.2037)"><tspan x="0" y="0" class="st5 futura-light st7">8.0</tspan><tspan x="19.8" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(0 -1 1 0 232.7796 1135.2037)"><tspan x="0" y="0" class="st5 futura-light st7">8.0</tspan><tspan x="19.8" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(1 0 0 1 102.9339 1155.4088)"><tspan x="0" y="0" class="st5 futura-light st7">25.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(1 0 0 1 110.5003 1117.6315)" class="st8 futura-book st10">03</text>
		</g>
		<g id="A-04_2_" class="property__active" ng-class="bosque.inmovablesClassList[342]" ng-click="bosque.showPropertyData(39, '4')">
			<polyline id="AL-04_2_" class="property pb-sprite-1" points="237.5,1084.6 1.4,1084.6 1.4,1009 237.5,1009 237.5,1084.6 			"/>
			<text transform="matrix(1 0 0 1 88.8596 1059.192)"><tspan x="0" y="0" class="st5 futura-light st7">20</tspan><tspan x="15.9" y="0" class="st5 futura-light st7">0.00 m2</tspan></text>
			<text transform="matrix(0 -1 1 0 18.4671 1059.6608)"><tspan x="0" y="0" class="st5 futura-light st7">8.0</tspan><tspan x="19.8" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(0 -1 1 0 232.7796 1059.6608)"><tspan x="0" y="0" class="st5 futura-light st7">8.0</tspan><tspan x="19.8" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(1 0 0 1 102.9339 1079.8658)"><tspan x="0" y="0" class="st5 futura-light st7">25.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(1 0 0 1 110.5003 1042.0944)" class="st8 futura-book st10">04</text>
		</g>
		<g id="A-05_2_" class="property__active" ng-class="bosque.inmovablesClassList[343]" ng-click="bosque.showPropertyData(39, '5')">
			<polyline id="AL-05_2_" class="property pb-sprite-2" points="237.5,1009 1.4,1009 1.4,933.5 237.5,933.5 237.5,1009 			"/>
			<text transform="matrix(1 0 0 1 88.8596 983.6491)"><tspan x="0" y="0" class="st5 futura-light st7">20</tspan><tspan x="15.9" y="0" class="st5 futura-light st7">0.00 m2</tspan></text>
			<text transform="matrix(0 -1 1 0 18.4671 984.1198)"><tspan x="0" y="0" class="st5 futura-light st7">8.0</tspan><tspan x="19.8" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(0 -1 1 0 232.7796 984.1198)"><tspan x="0" y="0" class="st5 futura-light st7">8.0</tspan><tspan x="19.8" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(1 0 0 1 102.9339 1004.3229)"><tspan x="0" y="0" class="st5 futura-light st7">25.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(1 0 0 1 110.5003 966.5436)" class="st8 futura-book st10">05</text>
		</g>
		<g id="A-06_2_" class="property__active" ng-class="bosque.inmovablesClassList[344]" ng-click="bosque.showPropertyData(39, '6')">
			<polyline id="AL-06_2_" class="property pb-sprite-1" points="237.5,933.5 1.4,933.5 1.4,858 237.5,858 237.5,933.5 			"/>
			<text transform="matrix(1 0 0 1 88.8596 908.11)"><tspan x="0" y="0" class="st5 futura-light st7">20</tspan><tspan x="15.9" y="0" class="st5 futura-light st7">0.00 m2</tspan></text>
			<text transform="matrix(0 -1 1 0 18.4671 908.5807)"><tspan x="0" y="0" class="st5 futura-light st7">8.0</tspan><tspan x="19.8" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(0 -1 1 0 232.7796 908.5807)"><tspan x="0" y="0" class="st5 futura-light st7">8.0</tspan><tspan x="19.8" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(1 0 0 1 102.9339 928.7839)"><tspan x="0" y="0" class="st5 futura-light st7">25.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(1 1.749997e-03 -1.749997e-03 1 110.6131 891.3474)" class="st8 futura-book st12">06</text>
		</g>
		<g id="A-07_2_" class="property__active" ng-class="bosque.inmovablesClassList[345]" ng-click="bosque.showPropertyData(39, '7')">
			<polyline id="AL-07_2_" class="property pb-sprite-2" points="237.5,858 1.4,858 1.4,782.4 237.5,782.4 237.5,858 			"/>
			<text transform="matrix(1 0 0 1 88.8596 832.571)"><tspan x="0" y="0" class="st5 futura-light st7">20</tspan><tspan x="15.9" y="0" class="st5 futura-light st7">0.00 m2</tspan></text>
			<text transform="matrix(0 -1 1 0 18.4671 833.0339)"><tspan x="0" y="0" class="st5 futura-light st7">8.0</tspan><tspan x="19.8" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(0 -1 1 0 232.7796 833.0339)"><tspan x="0" y="0" class="st5 futura-light st7">8.0</tspan><tspan x="19.8" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(1 0 0 1 102.9339 853.2429)"><tspan x="0" y="0" class="st5 futura-light st7">25.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(1 1.749997e-03 -1.749997e-03 1 110.6164 815.8062)" class="st8 futura-book st12">07</text>
		</g>
		<g id="A-08_2_" class="property__active" ng-class="bosque.inmovablesClassList[346]" ng-click="bosque.showPropertyData(39, '8')">
			<polyline id="AL-08_2_" class="property pb-sprite-1" points="237.5,782.4 1.4,782.4 1.4,706.9 237.5,706.9 237.5,782.4 			"/>
			<text transform="matrix(1 0 0 1 88.8596 757.0261)"><tspan x="0" y="0" class="st5 futura-light st7">20</tspan><tspan x="15.9" y="0" class="st5 futura-light st7">0.00 m2</tspan></text>
			<text transform="matrix(0 -1 1 0 18.4671 757.4968)"><tspan x="0" y="0" class="st5 futura-light st7">8.0</tspan><tspan x="19.8" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(0 -1 1 0 232.7796 757.4968)"><tspan x="0" y="0" class="st5 futura-light st7">8.0</tspan><tspan x="19.8" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(1 0 0 1 102.9339 777.6979)"><tspan x="0" y="0" class="st5 futura-light st7">25.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(1 1.749997e-03 -1.749997e-03 1 110.6138 740.261)" class="st8 futura-book st12">08</text>
		</g>
		<g id="A-09_2_" class="property__active" ng-class="bosque.inmovablesClassList[347]" ng-click="bosque.showPropertyData(39, '9')">
			<polyline id="AL-09_2_" class="property pb-sprite-2" points="237.5,706.9 1.4,706.9 1.4,631.3 237.5,631.3 237.5,706.9 			"/>
			<text transform="matrix(1 0 0 1 88.8596 681.487)"><tspan x="0" y="0" class="st5 futura-light st7">20</tspan><tspan x="15.9" y="0" class="st5 futura-light st7">0.00 m2</tspan></text>
			<text transform="matrix(0 -1 1 0 18.4671 681.9577)"><tspan x="0" y="0" class="st5 futura-light st7">8.0</tspan><tspan x="19.8" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(0 -1 1 0 232.7796 681.9577)"><tspan x="0" y="0" class="st5 futura-light st7">8.0</tspan><tspan x="19.8" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(1 0 0 1 102.9339 702.1608)"><tspan x="0" y="0" class="st5 futura-light st7">25.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(1 1.749997e-03 -1.749997e-03 1 110.6112 664.7198)" class="st8 futura-book st12">09</text>
		</g>
		<g id="A-10_2_" class="property__active" ng-class="bosque.inmovablesClassList[348]" ng-click="bosque.showPropertyData(39, '10')">
			<polyline id="AL-10_2_" class="property pb-sprite-1" points="237.5,631.3 1.4,631.3 1.4,555.8 237.5,555.8 237.5,631.3 			"/>
			<text transform="matrix(1 0 0 1 88.8596 605.9499)"><tspan x="0" y="0" class="st5 futura-light st7">20</tspan><tspan x="15.9" y="0" class="st5 futura-light st7">0.00 m2</tspan></text>
			<text transform="matrix(0 -1 1 0 18.4671 606.4128)"><tspan x="0" y="0" class="st5 futura-light st7">8.0</tspan><tspan x="19.8" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(0 -1 1 0 232.7796 606.4128)"><tspan x="0" y="0" class="st5 futura-light st7">8.0</tspan><tspan x="19.8" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(1 0 0 1 102.9339 626.6198)"><tspan x="0" y="0" class="st5 futura-light st7">25.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(1 1.749997e-03 -1.749997e-03 1 110.6145 589.1824)" class="st8 futura-book st12">10</text>
		</g>
		<g id="A-11_2_" class="property__active" ng-class="bosque.inmovablesClassList[349]" ng-click="bosque.showPropertyData(39, '11')">
			<polyline id="AL-11_2_" class="property pb-sprite-2" points="237.5,555.8 1.4,555.8 1.4,480.3 237.5,480.3 237.5,555.8 			"/>
			<text transform="matrix(1 0 0 1 88.8596 530.403)"><tspan x="0" y="0" class="st5 futura-light st7">20</tspan><tspan x="15.9" y="0" class="st5 futura-light st7">0.00 m2</tspan></text>
			<text transform="matrix(0 -1 1 0 15.594 530.8757)"><tspan x="0" y="0" class="st5 futura-light st7">8.0</tspan><tspan x="19.8" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(0 -1 1 0 232.7796 530.8757)"><tspan x="0" y="0" class="st5 futura-light st7">8.0</tspan><tspan x="19.8" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(1 0 0 1 102.9339 551.0749)"><tspan x="0" y="0" class="st5 futura-light st7">25.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(1 1.749997e-03 -1.749997e-03 1 110.6178 513.6373)" class="st8 futura-book st12">11</text>
		</g>
		<g id="A-12_2_" class="property__active" ng-class="bosque.inmovablesClassList[350]" ng-click="bosque.showPropertyData(39, '12')">
			<polyline id="AL-12_2_" class="property pb-sprite-1" points="237.5,480.3 1.4,480.3 1.4,404.7 237.5,404.7 237.5,480.3 			"/>
			<text transform="matrix(1 0 0 1 88.8596 454.8639)"><tspan x="0" y="0" class="st5 futura-light st7">20</tspan><tspan x="15.9" y="0" class="st5 futura-light st7">0.00 m2</tspan></text>
			<text transform="matrix(0 -1 1 0 18.4671 455.3346)"><tspan x="0" y="0" class="st5 futura-light st7">8.0</tspan><tspan x="19.8" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(0 -1 1 0 232.7854 455.3346)"><tspan x="0" y="0" class="st5 futura-light st7">8.0</tspan><tspan x="19.8" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(1 0 0 1 102.9339 475.5378)"><tspan x="0" y="0" class="st5 futura-light st7">25.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(1 1.749997e-03 -1.749997e-03 1 110.5195 438.0959)" class="st8 futura-book st12">12</text>
		</g>
		<g id="A-13_2_" class="property__active" ng-class="bosque.inmovablesClassList[351]" ng-click="bosque.showPropertyData(39, '13')">
			<polyline id="AL-13_2_" class="property pb-sprite-2" points="237.5,404.7 1.4,404.7 1.4,329.2 237.5,329.2 237.5,404.7 			"/>
			<text transform="matrix(1 0 0 1 88.8596 379.321)"><tspan x="0" y="0" class="st5 futura-light st7">20</tspan><tspan x="15.9" y="0" class="st5 futura-light st7">0.00 m2</tspan></text>
			<text transform="matrix(0 -1 1 0 18.4671 379.7897)"><tspan x="0" y="0" class="st5 futura-light st7">8.0</tspan><tspan x="19.8" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(0 -1 1 0 232.7796 379.7897)"><tspan x="0" y="0" class="st5 futura-light st7">8.0</tspan><tspan x="19.8" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(1 0 0 1 102.9339 399.9987)"><tspan x="0" y="0" class="st5 futura-light st7">25.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(1 0 0 1 110.3108 362.2174)" class="st8 futura-book st10">13</text>
		</g>
		<g id="A-14_2_" class="property__active" ng-class="bosque.inmovablesClassList[352]" ng-click="bosque.showPropertyData(39, '14')">
			<polyline id="AL-14_2_" class="property pb-sprite-1" points="237.5,329.2 1.4,329.2 1.4,253.6 237.5,253.6 237.5,329.2 			"/>
			<text transform="matrix(1 0 0 1 88.8596 303.7799)"><tspan x="0" y="0" class="st5 futura-light st7">20</tspan><tspan x="15.9" y="0" class="st5 futura-light st7">0.00 m2</tspan></text>
			<text transform="matrix(0 -1 1 0 18.4671 304.2487)"><tspan x="0" y="0" class="st5 futura-light st7">8.0</tspan><tspan x="19.8" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(0 -1 1 0 232.7796 304.2487)"><tspan x="0" y="0" class="st5 futura-light st7">8.0</tspan><tspan x="19.8" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(1 0 0 1 102.9339 324.4557)"><tspan x="0" y="0" class="st5 futura-light st7">25.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(1 0 0 1 110.5003 286.6745)" class="st8 futura-book st10">14</text>
		</g>
		<g id="A-15_1_" class="property__active" ng-class="bosque.inmovablesClassList[353]" ng-click="bosque.showPropertyData(39, '15')">
			<polyline id="AL-15_2_" class="property pb-sprite-2" points="237.5,253.6 1.4,253.6 1.4,5.4 237.5,178.1 237.5,253.6 			"/>
			<g>
				<polyline class="st4" points="184.4,221.8 174.4,211.8 184.4,201.8 184.4,221.8 				"/>
				<polyline class="st3" points="184.4,201.8 194.4,211.8 184.4,221.8 184.4,201.8 				"/>
			</g>
			<text transform="matrix(1 0 0 1 88.8596 193.3854)"><tspan x="0" y="0" class="st5 futura-light st7">42</tspan><tspan x="15.9" y="0" class="st5 futura-light st7">8.57 m2</tspan></text>
			<text transform="matrix(0 -1 1 0 18.4671 146.0573)"><tspan x="0" y="0" class="st5 futura-light st7">26.2</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">9</tspan></text>
			<text transform="matrix(0.807 0.5906 -0.5906 0.807 97.7369 93.5596)"><tspan x="0" y="0" class="st5 futura-light st13">30.9</tspan><tspan x="27.7" y="0" class="st5 futura-light st13">7</tspan></text>
			<text transform="matrix(0 -1 1 0 232.7796 228.7057)"><tspan x="0" y="0" class="st5 futura-light st7">8.0</tspan><tspan x="19.8" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(1 0 0 1 102.9339 248.9147)"><tspan x="0" y="0" class="st5 futura-light st7">25.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(1 0 0 1 110.5003 173.3581)" class="st8 futura-book st10">15</text>
		</g>
		<g id="DIVISIONES_8_">
			<line class="st14" x1="1.4" y1="1235.7" x2="237.5" y2="1235.7"/>
			<line class="st14" x1="1.4" y1="1311.2" x2="237.5" y2="1311.2"/>
			<line class="st14" x1="1.4" y1="1160.1" x2="237.5" y2="1160.1"/>
			<line class="st14" x1="1.4" y1="1084.6" x2="237.5" y2="1084.6"/>
			<line class="st14" x1="1.4" y1="1009" x2="237.5" y2="1009"/>
			<line class="st14" x1="1.4" y1="933.5" x2="237.5" y2="933.5"/>
			<line class="st14" x1="1.4" y1="858" x2="237.5" y2="858"/>
			<line class="st14" x1="1.4" y1="782.4" x2="237.5" y2="782.4"/>
			<line class="st14" x1="1.4" y1="706.9" x2="237.5" y2="706.9"/>
			<line class="st14" x1="1.4" y1="555.8" x2="237.5" y2="555.8"/>
			<line class="st14" x1="1.4" y1="631.3" x2="237.5" y2="631.3"/>
			<line class="st14" x1="1.4" y1="480.3" x2="237.5" y2="480.3"/>
			<line class="st14" x1="1.4" y1="404.7" x2="237.5" y2="404.7"/>
			<line class="st14" x1="1.4" y1="329.2" x2="237.5" y2="329.2"/>
			<line class="st14" x1="1.4" y1="253.6" x2="237.5" y2="253.6"/>
		</g>
	</g>
	<g id="ISLA_B">
		<!--asdasdasdasda-->
		<g id="B-16" class="property__active" ng-class="bosque.inmovablesClassList[354]" ng-click="bosque.showPropertyData(39, '16')">
			<polyline id="BL-16" class="property pb-sprite-1" points="325.3,499 447.6,331.8 531.4,393.1 392.1,583.6 325.3,534.8 325.3,499 			"/>
			<g>
				<polyline class="st4" points="376.7,534.7 366.7,524.7 376.7,514.7 376.7,534.7 				"/>
				<polyline class="st3" points="376.7,514.7 386.8,524.7 376.7,534.7 376.7,514.7 				"/>
			</g>
			<text transform="matrix(0.5906 -0.807 0.807 0.5906 415.1199 493.2937)"><tspan x="0" y="0" class="st5 futura-light st13">27</tspan><tspan x="15.9" y="0" class="st5 futura-light st13">1.57 m2</tspan></text>
			<text transform="matrix(0.807 0.5906 -0.5906 0.807 351.0938 547.9551)"><tspan x="0" y="0" class="st5 futura-light st13">8.7</tspan><tspan x="19.8" y="0" class="st5 futura-light st13">6</tspan></text>
			<text transform="matrix(0.807 0.5906 -0.5906 0.807 467.7901 364.238)"><tspan x="0" y="0" class="st5 futura-light st13">11.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st13">0</tspan></text>
			<text transform="matrix(0.5906 -0.807 0.807 0.5906 392.0543 436.4397)"><tspan x="0" y="0" class="st5 futura-light st13">21.9</tspan><tspan x="27.7" y="0" class="st5 futura-light st13">4</tspan></text>
			<text transform="matrix(0 -1 1 0 339.4729 529.7194)"><tspan x="0" y="0" class="st5 futura-light st7">3.7</tspan><tspan x="19.8" y="0" class="st5 futura-light st7">9</tspan></text>
			<text transform="matrix(0.5906 -0.807 0.807 0.5906 414.0129 464.6863)" class="st8 futura-book st12">16</text>
		</g>
		<g id="B-17" class="property__active" ng-class="bosque.inmovablesClassList[355]" ng-click="bosque.showPropertyData(39, '17')">
			<polyline id="BL-17" class="property pb-sprite-2" points="607.7,448.8 468.3,639.4 392.1,583.6 531.4,393.1 607.7,448.8 			"/>
			<text transform="matrix(0.5906 -0.807 0.807 0.5906 491.5751 549.2164)"><tspan x="0" y="0" class="st5 futura-light st13">25</tspan><tspan x="15.9" y="0" class="st5 futura-light st13">0.00 m2</tspan></text>
			<text transform="matrix(0.807 0.5906 -0.5906 0.807 419.6118 598.0687)"><tspan x="0" y="0" class="st5 futura-light st13">10.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st13">0</tspan></text>
			<text transform="matrix(0.807 0.5906 -0.5906 0.807 547.8184 422.7723)"><tspan x="0" y="0" class="st5 futura-light st13">10.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st13">0</tspan></text>
			<text transform="matrix(0.5906 -0.807 0.807 0.5906 467.3435 509.4257)"><tspan x="0" y="0" class="st5 futura-light st13">25.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st13">0</tspan></text>
			<text transform="matrix(0.5906 -0.807 0.807 0.5906 488.7657 523.0674)" class="st8 futura-book st12">17</text>
		</g>
		<g id="B-18" class="property__active" ng-class="bosque.inmovablesClassList[356]" ng-click="bosque.showPropertyData(39, '18')">
			<polyline id="BL-18" class="property pb-sprite-1" points="683.9,504.6 544.5,695.1 468.3,639.4 607.7,448.8 683.9,504.6 			"/>
			<text transform="matrix(0.5906 -0.807 0.807 0.5906 564.1311 602.2787)"><tspan x="0" y="0" class="st5 futura-light st13">25</tspan><tspan x="15.9" y="0" class="st5 futura-light st13">0.00 m2</tspan></text>
			<text transform="matrix(0.807 0.5906 -0.5906 0.807 495.8231 653.8122)"><tspan x="0" y="0" class="st5 futura-light st13">10.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st13">0</tspan></text>
			<text transform="matrix(0.807 0.5906 -0.5906 0.807 624.0373 478.522)"><tspan x="0" y="0" class="st5 futura-light st13">10.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st13">0</tspan></text>
			<text transform="matrix(0.5906 -0.807 0.807 0.5906 543.5665 565.1729)"><tspan x="0" y="0" class="st5 futura-light st13">25.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st13">0</tspan></text>
			<text transform="matrix(0.5906 -0.807 0.807 0.5906 560.2468 575.3495)" class="st8 futura-book st12">18</text>
		</g>
		<g id="B-19" class="property__active" ng-class="bosque.inmovablesClassList[357]" ng-click="bosque.showPropertyData(39, '19')">
			<polyline id="BL-19" class="property pb-sprite-2" points="760.1,560.3 620.7,750.9 544.5,695.1 683.9,504.6 760.1,560.3 			"/>
			<text transform="matrix(0.5906 -0.807 0.807 0.5906 644.0074 660.7065)"><tspan x="0" y="0" class="st5 futura-light st13">25</tspan><tspan x="15.9" y="0" class="st5 futura-light st13">0.00 m2</tspan></text>
			<text transform="matrix(0.807 0.5906 -0.5906 0.807 572.0324 709.5616)"><tspan x="0" y="0" class="st5 futura-light st13">10.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st13">0</tspan></text>
			<text transform="matrix(0.807 0.5906 -0.5906 0.807 700.2522 534.267)"><tspan x="0" y="0" class="st5 futura-light st13">10.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st13">0</tspan></text>
			<text transform="matrix(0.5906 -0.807 0.807 0.5906 617.9426 619.5843)"><tspan x="0" y="0" class="st5 futura-light st13">25.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st13">0</tspan></text>
			<text transform="matrix(0.5906 -0.807 0.807 0.5906 641.2381 634.5886)" class="st8 futura-book st12">19</text>
		</g>
		<g id="B-20" class="property__active" ng-class="bosque.inmovablesClassList[358]" ng-click="bosque.showPropertyData(39, '20')">
			<polyline id="BL-20" class="property pb-sprite-1" points="836.3,616.1 696.9,806.6 620.7,750.9 760.1,560.3 836.3,616.1 			"/>
			<text transform="matrix(0.5906 -0.807 0.807 0.5906 719.9886 716.2816)"><tspan x="0" y="0" class="st5 futura-light st13">25</tspan><tspan x="15.9" y="0" class="st5 futura-light st13">0.00 m2</tspan></text>
			<text transform="matrix(0.807 0.5906 -0.5906 0.807 648.2433 765.3055)"><tspan x="0" y="0" class="st5 futura-light st13">10.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st13">0</tspan></text>
			<text transform="matrix(0.807 0.5906 -0.5906 0.807 776.4683 590.0105)"><tspan x="0" y="0" class="st5 futura-light st13">10.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st13">0</tspan></text>
			<text transform="matrix(0.5906 -0.807 0.807 0.5906 694.1616 675.3304)"><tspan x="0" y="0" class="st5 futura-light st13">25.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st13">0</tspan></text>
			<text transform="matrix(0.5906 -0.807 0.807 0.5906 716.5183 689.6598)" class="st8 futura-book st12">20</text>
		</g>
		<g id="B-21" class="property__active" ng-class="bosque.inmovablesClassList[359]" ng-click="bosque.showPropertyData(39, '21')">
			<polyline id="BL-21" class="property pb-sprite-2" points="912.5,671.8 773.1,862.4 696.9,806.6 836.3,616.1 912.5,671.8 			"/>
			<text transform="matrix(0.5906 -0.807 0.807 0.5906 796.4399 772.1996)"><tspan x="0" y="0" class="st5 futura-light st13">25</tspan><tspan x="15.9" y="0" class="st5 futura-light st13">0.00 m2</tspan></text>
			<text transform="matrix(0.807 0.5906 -0.5906 0.807 724.4646 821.0552)"><tspan x="0" y="0" class="st5 futura-light st13">10.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st13">0</tspan></text>
			<text transform="matrix(0.807 0.5906 -0.5906 0.807 852.6855 645.759)"><tspan x="0" y="0" class="st5 futura-light st13">10.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st13">0</tspan></text>
			<text transform="matrix(0.5906 -0.807 0.807 0.5906 770.3726 731.0744)"><tspan x="0" y="0" class="st5 futura-light st13">25.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st13">0</tspan></text>
			<text transform="matrix(0.5906 -0.807 0.807 0.5906 795.6318 747.5226)" class="st8 futura-book st12">21</text>
		</g>
		<g id="B-22" class="property__active" ng-class="bosque.inmovablesClassList[360]" ng-click="bosque.showPropertyData(39, '22')">
			<polyline id="BL-22" class="property pb-sprite-1" points="988.7,727.6 849.4,918.1 773.1,862.4 912.5,671.8 988.7,727.6 			"/>
			<g>
				<polyline class="st4" points="846.1,858.8 836.1,848.8 846.1,838.8 846.1,858.8 				"/>
				<polyline class="st3" points="846.1,838.8 856.1,848.8 846.1,858.8 846.1,838.8 				"/>
			</g>
			<text transform="matrix(0.5906 -0.807 0.807 0.5906 868.9794 825.2613)"><tspan x="0" y="0" class="st5 futura-light st13">25</tspan><tspan x="15.9" y="0" class="st5 futura-light st13">0.00 m2</tspan></text>
			<text transform="matrix(0.807 0.5906 -0.5906 0.807 800.6755 876.7991)"><tspan x="0" y="0" class="st5 futura-light st13">10.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st13">0</tspan></text>
			<text transform="matrix(0.807 0.5906 -0.5906 0.807 928.9005 701.5041)"><tspan x="0" y="0" class="st5 futura-light st13">10.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st13">0</tspan></text>
			<text transform="matrix(0.5906 -0.807 0.807 0.5906 846.595 786.8224)"><tspan x="0" y="0" class="st5 futura-light st13">25.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st13">0</tspan></text>
			<text transform="matrix(0.5906 -0.807 0.807 0.5906 869.478 801.537)" class="st8 futura-book st12">22</text>
		</g>
		<g id="B-23" class="property__active" ng-class="bosque.inmovablesClassList[361]" ng-click="bosque.showPropertyData(39, '23')">
			<polyline id="BL-23_1_" class="property pb-sprite-2" points="988.7,727.6 1057.3,777.7 1052.9,815.8 933.2,979.4 849.4,918.1 988.7,727.6 			"/>
			<g>
				<polyline class="st4" points="915.7,908.1 905.7,898.1 915.7,888.1 915.7,908.1 				"/>
				<polyline class="st3" points="915.7,888.1 925.7,898.1 915.7,908.1 915.7,888.1 				"/>
			</g>
			<text transform="matrix(0.5906 -0.807 0.807 0.5906 937.765 893.1878)"><tspan x="0" y="0" class="st5 futura-light st13">27</tspan><tspan x="15.9" y="0" class="st5 futura-light st13">1.46 m2</tspan></text>
			<text transform="matrix(0.807 0.5906 -0.5906 0.807 880.7064 935.3333)"><tspan x="0" y="0" class="st5 futura-light st13">11.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st13">0</tspan></text>
			<text transform="matrix(0.807 0.5906 -0.5906 0.807 1004.2807 756.6436)"><tspan x="0" y="0" class="st5 futura-light st13">9.0</tspan><tspan x="19.8" y="0" class="st5 futura-light st13">0</tspan></text>
			<text transform="matrix(0.5906 -0.807 0.807 0.5906 922.8051 842.5676)"><tspan x="0" y="0" class="st5 futura-light st13">25.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st13">0</tspan></text>
			<text transform="matrix(0.5906 -0.807 0.807 0.5906 979.428 908.3284)"><tspan x="0" y="0" class="st5 futura-light st13">21.4</tspan><tspan x="27.7" y="0" class="st5 futura-light st13">6</tspan></text>
			<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1048.9032 808.966)"><tspan x="0" y="0" class="st5 futura-light st7">4.0</tspan><tspan x="19.8" y="0" class="st5 futura-light st7">6</tspan></text>
			<text transform="matrix(0.5906 -0.807 0.807 0.5906 945.1967 852.9998)" class="st8 futura-book st12">23</text>
		</g>
		<g>
			<line class="st14" x1="544.5" y1="695.1" x2="683.9" y2="504.6"/>
			<line class="st14" x1="392.1" y1="583.6" x2="531.4" y2="393.1"/>
			<line class="st14" x1="849.4" y1="918.1" x2="988.7" y2="727.6"/>
			<line class="st14" x1="773.1" y1="862.4" x2="912.5" y2="671.8"/>
			<line class="st14" x1="696.9" y1="806.6" x2="836.3" y2="616.1"/>
			<line class="st14" x1="620.7" y1="750.9" x2="760.1" y2="560.3"/>
			<line class="st14" x1="468.3" y1="639.4" x2="607.7" y2="448.8"/>
			<line class="st14" x1="325.3" y1="499" x2="447.6" y2="331.8"/>
			<line class="st14" x1="933.2" y1="979.4" x2="1052.9" y2="815.8"/>
		</g>
	</g>
	<g id="ISLA_C">
		<!--dasdasdasdasas---->
		<g id="C-24_2_" class="property__active" ng-class="bosque.inmovablesClassList[362]" ng-click="bosque.showPropertyData(39, '24')">
			<polyline id="CL-24_2_" class="property pb-sprite-2" points="1347.7,1081.8 1113.3,1054.3 1138.7,837.3 1357.6,997.4 1347.7,1081.8 			"/>
			<g>
				<polyline class="st4" points="1160.9,961.7 1150.9,951.6 1160.9,941.6 1160.9,961.7 				"/>
				<polyline class="st3" points="1160.9,941.6 1170.9,951.6 1160.9,961.7 1160.9,941.6 				"/>
			</g>
			<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1207.1567 1001.5081)"><tspan x="0" y="0" class="st5 futura-light st7">40</tspan><tspan x="15.9" y="0" class="st5 futura-light st7">1.73 m2</tspan></text>
			<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1344.1766 1053.1682)"><tspan x="0" y="0" class="st5 futura-light st7">9.0</tspan><tspan x="19.8" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(0.807 0.5906 -0.5906 0.807 1224.4916 921.8635)"><tspan x="0" y="0" class="st5 futura-light st13">28.7</tspan><tspan x="27.7" y="0" class="st5 futura-light st13">2</tspan></text>
			<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1138.1604 963.8397)"><tspan x="0" y="0" class="st5 futura-light st7">23.1</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">4</tspan></text>
			<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1214.6454 1061.406)"><tspan x="0" y="0" class="st5 futura-light st7">25.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1231.0254 986.8549)" class="st8 futura-book st10">24</text>
		</g>
		<g id="C-25_2_" class="property__active" ng-class="bosque.inmovablesClassList[363]" ng-click="bosque.showPropertyData(39, '25')">
			<polyline id="CL-25_2_" class="property pb-sprite-1" points="1336.7,1175.6 1102.3,1148.1 1113.3,1054.3 1347.7,1081.8 1336.7,1175.6 			"/>
			<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1192.9524 1122.5249)"><tspan x="0" y="0" class="st5 futura-light st7">25</tspan><tspan x="15.9" y="0" class="st5 futura-light st7">0.00 m2</tspan></text>
			<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1333.2843 1145.9235)"><tspan x="0" y="0" class="st5 futura-light st7">10.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1119.9203 1119.2279)"><tspan x="0" y="0" class="st5 futura-light st7">10.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1203.6461 1155.189)"><tspan x="0" y="0" class="st5 futura-light st7">25.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1216.9963 1106.38)" class="st8 futura-book st10">25</text>
		</g>
		<g id="C-26_2_" class="property__active" ng-class="bosque.inmovablesClassList[364]" ng-click="bosque.showPropertyData(39, '26')">
			<polyline id="CL-26_2_" class="property pb-sprite-2" points="1325.7,1269.4 1091.3,1241.9 1102.3,1148.1 1336.7,1175.6 1325.7,1269.4 			"/>
			<g>
				<polyline class="st4" points="1136.2,1206.1 1126.2,1196.1 1136.2,1186.1 1136.2,1206.1 				"/>
				<polyline class="st3" points="1136.2,1186.1 1146.2,1196.1 1136.2,1206.1 1136.2,1186.1 				"/>
			</g>
			<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1181.9496 1216.3055)"><tspan x="0" y="0" class="st5 futura-light st7">25</tspan><tspan x="15.9" y="0" class="st5 futura-light st7">0.00 m2</tspan></text>
			<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1322.2778 1239.7017)"><tspan x="0" y="0" class="st5 futura-light st7">10.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1108.916 1213.0044)"><tspan x="0" y="0" class="st5 futura-light st7">10.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1192.636 1248.9648)"><tspan x="0" y="0" class="st5 futura-light st7">25.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1205.8396 1201.4365)" class="st8 futura-book st10">26</text>
		</g>
		<g id="C-27_2_" class="property__active" ng-class="bosque.inmovablesClassList[365]" ng-click="bosque.showPropertyData(39, '27')">
			<polyline id="CL-27_2_" class="property pb-sprite-1" points="1314.7,1363.2 1080.3,1335.6 1091.3,1241.9 1325.7,1269.4 1314.7,1363.2 			"/>
			<g>
				<polyline class="st4" points="1125.2,1299.9 1115.2,1289.9 1125.2,1279.8 1125.2,1299.9 				"/>
				<polyline class="st3" points="1125.2,1279.8 1135.2,1289.9 1125.2,1299.9 1125.2,1279.8 				"/>
			</g>
			<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1171.4293 1305.8773)"><tspan x="0" y="0" class="st5 futura-light st7">25</tspan><tspan x="15.9" y="0" class="st5 futura-light st7">0.00 m2</tspan></text>
			<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1311.2827 1333.4832)"><tspan x="0" y="0" class="st5 futura-light st7">10.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1097.9115 1306.7985)"><tspan x="0" y="0" class="st5 futura-light st7">10.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1181.6313 1342.7609)"><tspan x="0" y="0" class="st5 futura-light st7">25.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1195.3951 1290.447)" class="st8 futura-book st10">27</text>
		</g>
		<g id="C-28_2_" class="property__active" ng-class="bosque.inmovablesClassList[366]" ng-click="bosque.showPropertyData(39, '28')">
			<polyline id="CL-28_2_" class="property pb-sprite-2" points="1303.7,1456.9 1069.3,1429.4 1080.3,1335.6 1314.7,1363.2 1303.7,1456.9 			"/>
			<g>
				<polyline class="st4" points="1114.2,1393.7 1104.2,1383.6 1114.2,1373.6 1114.2,1393.7 				"/>
				<polyline class="st3" points="1114.2,1373.6 1124.2,1383.6 1114.2,1393.7 1114.2,1373.6 				"/>
			</g>
			<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1159.9347 1403.8774)"><tspan x="0" y="0" class="st5 futura-light st7">25</tspan><tspan x="15.9" y="0" class="st5 futura-light st7">0.00 m2</tspan></text>
			<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1300.2727 1427.2747)"><tspan x="0" y="0" class="st5 futura-light st7">10.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1086.9106 1400.5793)"><tspan x="0" y="0" class="st5 futura-light st7">10.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1170.623 1436.5369)"><tspan x="0" y="0" class="st5 futura-light st7">25.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1183.561 1391.3373)" class="st8 futura-book st10">28</text>
		</g>
		<g id="C-29_2_" class="property__active" ng-class="bosque.inmovablesClassList[367]" ng-click="bosque.showPropertyData(39, '29')">
			<polyline id="CL-29_2_" class="property pb-sprite-1" points="1292.7,1550.7 1058.3,1523.2 1069.3,1429.4 1303.7,1456.9 1292.7,1550.7 			"/>
			<g>
				<polyline class="st4" points="1103.2,1487.4 1093.2,1477.4 1103.2,1467.4 1103.2,1487.4 				"/>
				<polyline class="st3" points="1103.2,1467.4 1113.2,1477.4 1103.2,1487.4 1103.2,1467.4 				"/>
			</g>
			<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1148.9299 1497.6577)"><tspan x="0" y="0" class="st5 futura-light st7">25</tspan><tspan x="15.9" y="0" class="st5 futura-light st7">0.00 m2</tspan></text>
			<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1289.2621 1521.0543)"><tspan x="0" y="0" class="st5 futura-light st7">10.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1075.8989 1494.351)"><tspan x="0" y="0" class="st5 futura-light st7">10.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1159.6185 1530.3153)"><tspan x="0" y="0" class="st5 futura-light st7">25.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1172.8916 1482.2131)" class="st8 futura-book st10">29</text>
		</g>
		<g id="C-30_2_" class="property__active" ng-class="bosque.inmovablesClassList[368]" ng-click="bosque.showPropertyData(39, '30')">
			<polyline id="CL-30_2_" class="property pb-sprite-2" points="1281.7,1644.5 1047.3,1617 1058.3,1523.2 1292.7,1550.7 1281.7,1644.5 			"/>
			<g>
				<polyline class="st4" points="1092.2,1581.2 1082.2,1571.2 1092.2,1561.2 1092.2,1581.2 				"/>
				<polyline class="st3" points="1092.2,1561.2 1102.2,1571.2 1092.2,1581.2 1092.2,1561.2 				"/>
			</g>
			<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1137.9237 1591.4497)"><tspan x="0" y="0" class="st5 futura-light st7">25</tspan><tspan x="15.9" y="0" class="st5 futura-light st7">0.00 m2</tspan></text>
			<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1278.2562 1614.8268)"><tspan x="0" y="0" class="st5 futura-light st7">10.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1064.8962 1588.1473)"><tspan x="0" y="0" class="st5 futura-light st7">10.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1148.6125 1624.1053)"><tspan x="0" y="0" class="st5 futura-light st7">25.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1163.1865 1577.6683)" class="st8 futura-book st10">30</text>
		</g>
		<g id="C-31_2_" class="property__active" ng-class="bosque.inmovablesClassList[369]" ng-click="bosque.showPropertyData(39, '31')">
			<polyline id="CL-31_2_" class="property pb-sprite-1" points="1270.7,1738.3 1036.2,1710.8 1047.3,1617 1281.7,1644.5 1270.7,1738.3 			"/>
			<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1126.9172 1685.2279)"><tspan x="0" y="0" class="st5 futura-light st7">25</tspan><tspan x="15.9" y="0" class="st5 futura-light st7">0.00 m2</tspan></text>
			<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1267.2617 1708.6201)"><tspan x="0" y="0" class="st5 futura-light st7">10.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1053.8861 1681.9231)"><tspan x="0" y="0" class="st5 futura-light st7">10.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1137.6078 1717.8857)"><tspan x="0" y="0" class="st5 futura-light st7">25.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1152.644 1667.4636)" class="st8 futura-book st10">31</text>
		</g>
		<g id="C-32_2_" class="property__active" ng-class="bosque.inmovablesClassList[370]" ng-click="bosque.showPropertyData(39, '32')">
			<polyline id="CL-32_2_" class="property pb-sprite-2" points="1259.7,1832.1 1025.2,1804.6 1036.2,1710.8 1270.7,1738.3 1259.7,1832.1 			"/>
			<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1115.9131 1779.0024)"><tspan x="0" y="0" class="st5 futura-light st7">25</tspan><tspan x="15.9" y="0" class="st5 futura-light st7">0.00 m2</tspan></text>
			<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1256.257 1802.4004)"><tspan x="0" y="0" class="st5 futura-light st7">10.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1042.8832 1775.7037)"><tspan x="0" y="0" class="st5 futura-light st7">10.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1126.5952 1811.6652)"><tspan x="0" y="0" class="st5 futura-light st7">25.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1141.208 1765.0654)" class="st8 futura-book st10">32</text>
		</g>
		<g id="C-33_2_" class="property__active" ng-class="bosque.inmovablesClassList[371]" ng-click="bosque.showPropertyData(39, '33')">
			<polyline id="CL-33_2_" class="property pb-sprite-1" points="1248.9,1923.7 1011.3,1923.7 1025.2,1804.6 1259.7,1832.1 1248.9,1923.7 			"/>
			<g>
				<polyline class="st4" points="1054.6,1869.8 1044.5,1859.8 1054.6,1849.8 1054.6,1869.8 				"/>
				<polyline class="st3" points="1054.6,1849.8 1064.6,1859.8 1054.6,1869.8 1054.6,1849.8 				"/>
			</g>
			<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1103.2056 1882.0045)"><tspan x="0" y="0" class="st5 futura-light st7">28</tspan><tspan x="15.9" y="0" class="st5 futura-light st7">0.94 m2</tspan></text>
			<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1245.7963 1891.4482)"><tspan x="0" y="0" class="st5 futura-light st7">9.7</tspan><tspan x="19.8" y="0" class="st5 futura-light st7">7</tspan></text>
			<text transform="matrix(1 0 0 1 1113.5647 1918.9928)"><tspan x="0" y="0" class="st5 futura-light st7">25.1</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">7</tspan></text>
			<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 1030.3907 1882.1647)"><tspan x="0" y="0" class="st5 futura-light st7">12.7</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(0.9932 0.1167 -0.1167 0.9932 1129.4028 1865.6426)" class="st8 futura-book st10">33</text>
		</g>
		<g id="DIVISIONES_5_">
			<line class="st14" x1="1025.2" y1="1804.6" x2="1259.7" y2="1832.1"/>
			<line class="st14" x1="1036.2" y1="1710.8" x2="1270.7" y2="1738.3"/>
			<line class="st14" x1="1047.3" y1="1617" x2="1281.7" y2="1644.5"/>
			<line class="st14" x1="1058.3" y1="1523.2" x2="1292.7" y2="1550.7"/>
			<line class="st14" x1="1069.3" y1="1429.4" x2="1303.7" y2="1456.9"/>
			<line class="st14" x1="1080.3" y1="1335.6" x2="1314.7" y2="1363.2"/>
			<line class="st14" x1="1091.3" y1="1241.9" x2="1325.7" y2="1269.4"/>
			<line class="st14" x1="1102.3" y1="1148.1" x2="1336.7" y2="1175.6"/>
			<line class="st14" x1="1113.3" y1="1054.3" x2="1347.7" y2="1081.8"/>
		</g>
	</g>
	<g id="ISLA_D">
		<!--dasdsadadadsad-->
		<g id="D-34" class="property__active" ng-class="bosque.inmovablesClassList[372]" ng-click="bosque.showPropertyData(39, '34')">
			<polyline id="DL-34" class="property pb-sprite-2" points="957.7,1639.5 924.4,1922.8 828.3,1922.8 828.3,1639.5 957.7,1639.5 			"/>
			<g>
				<polyline class="st4" points="893,1689 883,1679 893,1669 893,1689 				"/>
				<polyline class="st3" points="893,1669 903,1679 893,1689 893,1669 				"/>
			</g>
			<text transform="matrix(0 -1 1 0 887.7288 1810.525)"><tspan x="0" y="0" class="st5 futura-light st7">35</tspan><tspan x="15.9" y="0" class="st5 futura-light st7">8.30 m2</tspan></text>
			<text transform="matrix(1 0 0 1 876.4436 1653.6715)"><tspan x="0" y="0" class="st5 futura-light st7">13.7</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(1 0 0 1 859.8127 1918.0719)"><tspan x="0" y="0" class="st5 futura-light st7">10.1</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">8</tspan></text>
			<text transform="matrix(0 -1 1 0 842.4358 1797.6793)"><tspan x="0" y="0" class="st5 futura-light st7">30.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(0.1167 -0.9932 0.9932 0.1167 934.4292 1796.9847)"><tspan x="0" y="0" class="st5 futura-light st7">30.2</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">1</tspan></text>
			<text transform="matrix(0 -1 1 0 875.7874 1790.6481)" class="st8 futura-book st10">34</text>
		</g>
		<g id="D-35" class="property__active" ng-class="bosque.inmovablesClassList[373]" ng-click="bosque.showPropertyData(39, '35')">
			<polyline id="DL-35" class="property pb-sprite-1" points="828.3,1639.5 828.3,1922.8 733.8,1922.8 733.8,1639.5 828.3,1639.5 			"/>
			<g>
				<polyline class="st4" points="781.1,1689 771,1679 781.1,1669 781.1,1689 				"/>
				<polyline class="st3" points="781.1,1669 791.1,1679 781.1,1689 781.1,1669 				"/>
			</g>
			<text transform="matrix(0 -1 1 0 793.3088 1810.525)"><tspan x="0" y="0" class="st5 futura-light st7">30</tspan><tspan x="15.9" y="0" class="st5 futura-light st7">0.00 m2</tspan></text>
			<text transform="matrix(1 0 0 1 764.5295 1653.6715)"><tspan x="0" y="0" class="st5 futura-light st7">10.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(1 0 0 1 764.5295 1918.0719)"><tspan x="0" y="0" class="st5 futura-light st7">10.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(0 -1 1 0 748.0022 1797.6793)"><tspan x="0" y="0" class="st5 futura-light st7">30.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(0 -1 1 0 780.4963 1788.6149)" class="st8 futura-book st10">35</text>
		</g>
		<g id="D-36" class="property__active" ng-class="bosque.inmovablesClassList[374]" ng-click="bosque.showPropertyData(39, '36')">
			<polyline id="DL-36" class="property pb-sprite-2" points="733.8,1639.5 733.8,1922.8 639.4,1922.8 639.4,1639.5 733.8,1639.5 			"/>
			<text transform="matrix(0 -1 1 0 698.8772 1810.5309)"><tspan x="0" y="0" class="st5 futura-light st7">30</tspan><tspan x="15.9" y="0" class="st5 futura-light st7">0.00 m2</tspan></text>
			<text transform="matrix(1 0 0 1 670.0979 1653.6715)"><tspan x="0" y="0" class="st5 futura-light st7">10.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(1 0 0 1 670.0979 1918.0719)"><tspan x="0" y="0" class="st5 futura-light st7">10.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(0 -1 1 0 653.5901 1797.6793)"><tspan x="0" y="0" class="st5 futura-light st7">30.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(0 -1 1 0 686.0725 1788.6149)" class="st8 futura-book st10">36</text>
		</g>
		<g id="D-37" class="property__active" ng-class="bosque.inmovablesClassList[375]" ng-click="bosque.showPropertyData(39, '37')">
			<polyline id="DL-37" class="property pb-sprite-1" points="639.4,1639.5 639.4,1922.8 545,1922.8 545,1639.5 639.4,1639.5 			"/>
			<text transform="matrix(0 -1 1 0 604.4495 1810.525)"><tspan x="0" y="0" class="st5 futura-light st7">30</tspan><tspan x="15.9" y="0" class="st5 futura-light st7">0.00 m2</tspan></text>
			<text transform="matrix(1 0 0 1 575.6721 1653.6715)"><tspan x="0" y="0" class="st5 futura-light st7">10.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(1 0 0 1 575.6721 1918.0719)"><tspan x="0" y="0" class="st5 futura-light st7">10.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(0 -1 1 0 559.1565 1797.6793)"><tspan x="0" y="0" class="st5 futura-light st7">30.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(0 -1 1 0 591.6428 1788.6149)" class="st8 futura-book st10">37</text>
		</g>
		<g id="D-38" class="property__active" ng-class="bosque.inmovablesClassList[376]" ng-click="bosque.showPropertyData(39, '38')">
			<polyline id="DL-38" class="property pb-sprite-2" points="545,1639.5 545,1922.8 450.6,1922.8 450.6,1639.5 545,1639.5 			"/>
			<text transform="matrix(0 -1 1 0 510.0218 1810.525)"><tspan x="0" y="0" class="st5 futura-light st7">30</tspan><tspan x="15.9" y="0" class="st5 futura-light st7">0.00 m2</tspan></text>
			<text transform="matrix(1 0 0 1 481.2425 1653.6715)"><tspan x="0" y="0" class="st5 futura-light st7">10.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(1 0 0 1 481.2425 1918.0719)"><tspan x="0" y="0" class="st5 futura-light st7">10.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(0 -1 1 0 464.7229 1797.6793)"><tspan x="0" y="0" class="st5 futura-light st7">30.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(0 -1 1 0 497.2093 1788.6149)" class="st8 futura-book st10">38</text>
		</g>
		<g id="D-39" class="property__active" ng-class="bosque.inmovablesClassList[377]" ng-click="bosque.showPropertyData(39, '39')">
			<polyline id="DL-39" class="property pb-sprite-1" points="450.6,1639.5 450.6,1922.8 356.1,1922.8 356.1,1639.5 450.6,1639.5 			"/>
			<text transform="matrix(0 -1 1 0 415.596 1810.525)"><tspan x="0" y="0" class="st5 futura-light st7">30</tspan><tspan x="15.9" y="0" class="st5 futura-light st7">0.00 m2</tspan></text>
			<text transform="matrix(1 0 0 1 386.8264 1653.6715)"><tspan x="0" y="0" class="st5 futura-light st7">10.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(1 0 0 1 386.8264 1918.0719)"><tspan x="0" y="0" class="st5 futura-light st7">10.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(0 -1 1 0 370.303 1797.6793)"><tspan x="0" y="0" class="st5 futura-light st7">30.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(0 -1 1 0 402.7854 1788.6149)" class="st8 futura-book st10">39</text>
		</g>
		<g id="D-40" class="property__active" ng-class="bosque.inmovablesClassList[378]" ng-click="bosque.showPropertyData(39, '40')">
			<polyline id="DL-40" class="property pb-sprite-2" points="356.1,1639.5 356.1,1922.8 261.7,1922.8 261.7,1639.5 356.1,1639.5 			"/>
			<text transform="matrix(0 -1 1 0 321.1741 1810.525)"><tspan x="0" y="0" class="st5 futura-light st7">30</tspan><tspan x="15.9" y="0" class="st5 futura-light st7">0.00 m2</tspan></text>
			<text transform="matrix(1 0 0 1 292.3948 1653.6715)"><tspan x="0" y="0" class="st5 futura-light st7">10.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(1 0 0 1 292.3948 1918.0719)"><tspan x="0" y="0" class="st5 futura-light st7">10.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(0 -1 1 0 275.8694 1797.6793)"><tspan x="0" y="0" class="st5 futura-light st7">30.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(0 -1 1 0 308.3557 1788.6149)" class="st8 futura-book st10">40</text>
		</g>
		<g id="D-41" class="property__active" ng-class="bosque.inmovablesClassList[379]" ng-click="bosque.showPropertyData(39, '41')">
			<polyline id="DL-41" class="property pb-sprite-1" points="261.7,1639.5 261.7,1922.8 167.3,1922.8 167.3,1639.5 261.7,1639.5 			"/>
			<g>
				<polyline class="st4" points="214.5,1690.5 204.5,1680.5 214.5,1670.5 214.5,1690.5 				"/>
				<polyline class="st3" points="214.5,1670.5 224.5,1680.5 214.5,1690.5 214.5,1670.5 				"/>
			</g>
			<text transform="matrix(0 -1 1 0 226.7464 1810.525)"><tspan x="0" y="0" class="st5 futura-light st7">30</tspan><tspan x="15.9" y="0" class="st5 futura-light st7">0.00 m2</tspan></text>
			<text transform="matrix(1 0 0 1 197.9612 1653.6715)"><tspan x="0" y="0" class="st5 futura-light st7">10.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(1 0 0 1 197.9612 1918.0719)"><tspan x="0" y="0" class="st5 futura-light st7">10.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(0 -1 1 0 181.4534 1797.6793)"><tspan x="0" y="0" class="st5 futura-light st7">30.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(0 -1 1 0 213.928 1788.6149)" class="st8 futura-book st10">41</text>
		</g>
		<g id="DIVISIONES_1_">
			<line class="st14" x1="261.7" y1="1639.5" x2="261.7" y2="1922.8"/>
			<line class="st14" x1="356.1" y1="1639.5" x2="356.1" y2="1922.8"/>
			<line class="st14" x1="450.6" y1="1639.5" x2="450.6" y2="1922.8"/>
			<line class="st14" x1="639.4" y1="1639.5" x2="639.4" y2="1922.8"/>
			<line class="st14" x1="545" y1="1639.5" x2="545" y2="1922.8"/>
			<line class="st14" x1="733.8" y1="1639.5" x2="733.8" y2="1922.8"/>
			<line class="st14" x1="828.3" y1="1639.5" x2="828.3" y2="1922.8"/>
		</g>
	</g>
	<g id="ISLA_E">
		<g id="E-42_2_" class="property__active" ng-class="bosque.inmovablesClassList[380]" ng-click="bosque.showPropertyData(39, '42')">
			<polyline id="EL-42_2_" class="property pb-sprite-1" points="514.2,1552.6 325.3,1552.6 325.3,1448.7 514.2,1448.7 514.2,1552.6 			"/>
			<g>
				<polyline class="st4" points="356,1509.9 346,1499.9 356,1489.9 356,1509.9 				"/>
				<polyline class="st3" points="356,1489.9 366,1499.9 356,1509.9 356,1489.9 				"/>
			</g>
			<text transform="matrix(0 -1 1 0 509.4358 1517.2115)"><tspan x="0" y="0" class="st5 futura-light st7">11.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(1 0 0 1 403.2151 1547.903)"><tspan x="0" y="0" class="st5 futura-light st7">20.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(1 0 0 1 403.2151 1462.9186)"><tspan x="0" y="0" class="st5 futura-light st7">20.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(0 -1 1 0 339.4729 1517.2115)"><tspan x="0" y="0" class="st5 futura-light st7">11.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(1 0 0 1 388.9573 1505.8717)"><tspan x="0" y="0" class="st5 futura-light st7">22</tspan><tspan x="15.9" y="0" class="st5 futura-light st7">0.00 m2</tspan></text>
			<text transform="matrix(1 0 0 1 412.2718 1489.9615)" class="st8 futura-book st10">42</text>
		</g>
		<g id="E-43_2_" class="property__active" ng-class="bosque.inmovablesClassList[381]" ng-click="bosque.showPropertyData(39, '43')">
			<polyline id="EL-43_2_" class="property pb-sprite-2" points="514.2,1448.7 325.3,1448.7 325.3,1354.3 514.2,1354.3 514.2,1448.7 			"/>
			<text transform="matrix(0 -1 1 0 509.4358 1418.0631)"><tspan x="0" y="0" class="st5 futura-light st7">10.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(1 0 0 1 403.2151 1368.483)"><tspan x="0" y="0" class="st5 futura-light st7">20.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(0 -1 1 0 339.4729 1418.0631)"><tspan x="0" y="0" class="st5 futura-light st7">10.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(1 0 0 1 388.9573 1411.4401)"><tspan x="0" y="0" class="st5 futura-light st7">20</tspan><tspan x="15.9" y="0" class="st5 futura-light st7">0.00 m2</tspan></text>
			<text transform="matrix(1 0 0 1 412.2718 1395.5397)" class="st8 futura-book st10">43</text>
		</g>
		<g id="E-44_2_" class="property__active" ng-class="bosque.inmovablesClassList[382]" ng-click="bosque.showPropertyData(39, '44')">
			<polyline id="EL-44_2_" class="property pb-sprite-1" points="514.2,1354.3 325.3,1354.3 325.3,1259.9 514.2,1259.9 514.2,1354.3 			"/>
			<text transform="matrix(0 -1 1 0 509.4358 1323.6373)"><tspan x="0" y="0" class="st5 futura-light st7">10.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(1 0 0 1 403.2151 1274.0514)"><tspan x="0" y="0" class="st5 futura-light st7">20.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(0 -1 1 0 339.4729 1323.6373)"><tspan x="0" y="0" class="st5 futura-light st7">10.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(1 0 0 1 388.9573 1317.026)"><tspan x="0" y="0" class="st5 futura-light st7">20</tspan><tspan x="15.9" y="0" class="st5 futura-light st7">0.00 m2</tspan></text>
			<text transform="matrix(1 0 0 1 412.2718 1301.1158)" class="st8 futura-book st10">44</text>
		</g>
		<g id="E-45_2_" class="property__active" ng-class="bosque.inmovablesClassList[383]" ng-click="bosque.showPropertyData(39, '45')">
			<polyline id="EL-45_2_" class="property pb-sprite-2" points="514.2,1259.9 325.3,1259.9 325.3,1165.5 514.2,1165.5 514.2,1259.9 			"/>
			<text transform="matrix(0 -1 1 0 509.4358 1229.2155)"><tspan x="0" y="0" class="st5 futura-light st7">10.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(0 -1 1 0 339.4729 1229.2155)"><tspan x="0" y="0" class="st5 futura-light st7">10.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(1 0 0 1 403.2151 1179.6354)"><tspan x="0" y="0" class="st5 futura-light st7">20.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(1 0 0 1 388.9573 1222.5963)"><tspan x="0" y="0" class="st5 futura-light st7">20</tspan><tspan x="15.9" y="0" class="st5 futura-light st7">0.00 m2</tspan></text>
			<text transform="matrix(1 0 0 1 412.2718 1206.6842)" class="st8 futura-book st10">45</text>
		</g>
		<g id="E-46_2_" class="property__active" ng-class="bosque.inmovablesClassList[384]" ng-click="bosque.showPropertyData(39, '46')">
			<polyline id="EL-46_2_" class="property pb-sprite-1" points="514.2,1165.5 325.3,1165.5 325.3,1071 514.2,1071 514.2,1165.5 			"/>
			<text transform="matrix(0 -1 1 0 509.4358 1134.7858)"><tspan x="0" y="0" class="st5 futura-light st7">10.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(0 -1 1 0 339.4729 1134.7819)"><tspan x="0" y="0" class="st5 futura-light st7">10.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(1 0 0 1 403.2151 1085.2057)"><tspan x="0" y="0" class="st5 futura-light st7">20.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(1 0 0 1 388.9573 1128.1725)"><tspan x="0" y="0" class="st5 futura-light st7">20</tspan><tspan x="15.9" y="0" class="st5 futura-light st7">0.00 m2</tspan></text>
			<text transform="matrix(1 0 0 1 412.2718 1112.2623)" class="st8 futura-book st10">46</text>
		</g>
		<g id="E-47_2_" class="property__active" ng-class="bosque.inmovablesClassList[385]" ng-click="bosque.showPropertyData(39, '47')">
			<polyline id="EL-47_2_" class="property pb-sprite-2" points="514.2,1071 325.3,1071 325.3,976.6 514.2,976.6 514.2,1071 			"/>
			<text transform="matrix(0 -1 1 0 509.4358 1040.358)"><tspan x="0" y="0" class="st5 futura-light st7">10.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(0 -1 1 0 339.4729 1040.358)"><tspan x="0" y="0" class="st5 futura-light st7">10.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(1 0 0 1 403.2151 990.7761)"><tspan x="0" y="0" class="st5 futura-light st7">20.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(1 0 0 1 388.9573 1033.7428)"><tspan x="0" y="0" class="st5 futura-light st7">20</tspan><tspan x="15.9" y="0" class="st5 futura-light st7">0.00 m2</tspan></text>
			<text transform="matrix(1 0 0 1 412.2718 1017.8405)" class="st8 futura-book st10">47</text>
		</g>
		<g id="E-48_2_" class="property__active" ng-class="bosque.inmovablesClassList[386]" ng-click="bosque.showPropertyData(39, '48')">
			<polyline id="EL-48_2_" class="property pb-sprite-1" points="514.2,976.6 325.3,976.6 325.3,882.2 514.2,882.2 514.2,976.6 			"/>
			<text transform="matrix(0 -1 1 0 509.4358 945.9284)"><tspan x="0" y="0" class="st5 futura-light st7">10.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(0 -1 1 0 339.4729 945.9284)"><tspan x="0" y="0" class="st5 futura-light st7">10.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(1 0 0 1 403.2151 896.3542)"><tspan x="0" y="0" class="st5 futura-light st7">20.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(1 0 0 1 388.9573 939.321)"><tspan x="0" y="0" class="st5 futura-light st7">20</tspan><tspan x="15.9" y="0" class="st5 futura-light st7">0.00 m2</tspan></text>
			<text transform="matrix(1 1.749997e-03 -1.749997e-03 1 412.3952 923.7545)" class="st8 futura-book st12">48</text>
		</g>
		<g id="E-49_2_" class="property__active" ng-class="bosque.inmovablesClassList[387]" ng-click="bosque.showPropertyData(39, '49')">
			<polyline id="EL-49_2_" class="property pb-sprite-2" points="514.2,882.2 325.3,882.2 325.3,781.7 514.2,781.7 514.2,882.2 			"/>
			<g>
				<polyline class="st4" points="357.2,839.9 347.2,829.9 357.2,819.9 357.2,839.9 				"/>
				<polyline class="st3" points="357.2,819.9 367.2,829.9 357.2,839.9 357.2,819.9 				"/>
			</g>
			<text transform="matrix(0 -1 1 0 509.4358 848.4909)"><tspan x="0" y="0" class="st5 futura-light st7">10.6</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">4</tspan></text>
			<text transform="matrix(0 -1 1 0 339.4729 848.4909)"><tspan x="0" y="0" class="st5 futura-light st7">10.6</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">4</tspan></text>
			<text transform="matrix(1 0 0 1 403.2151 795.8972)"><tspan x="0" y="0" class="st5 futura-light st7">20.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(1 0 0 1 388.9573 844.8913)"><tspan x="0" y="0" class="st5 futura-light st7">21</tspan><tspan x="15.9" y="0" class="st5 futura-light st7">2.80 m2</tspan></text>
			<text transform="matrix(1 1.749997e-03 -1.749997e-03 1 412.3912 830.0258)" class="st8 futura-book st12">49</text>
		</g>
		<g id="E-50_2_" class="property__active" ng-class="bosque.inmovablesClassList[388]" ng-click="bosque.showPropertyData(39, '50')">
			<polyline id="EL-50_2_" class="property pb-sprite-2" points="514.2,995.5 514.2,901.1 677.3,901.1 703,919.9 703,995.5 514.2,995.5 			"/>
			<g>
				<polyline class="st4" points="673.5,958.3 663.5,948.3 673.5,938.3 673.5,958.3 				"/>
				<polyline class="st3" points="673.5,938.3 683.6,948.3 673.5,958.3 673.5,938.3 				"/>
			</g>
			<text transform="matrix(0 -1 1 0 528.3342 964.819)"><tspan x="0" y="0" class="st5 futura-light st7">10.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(0 -1 1 0 698.301 970.5222)"><tspan x="0" y="0" class="st5 futura-light st7">8.0</tspan><tspan x="19.8" y="0" class="st5 futura-light st7">1</tspan></text>
			<text transform="matrix(0.7325 0.6808 -0.6808 0.7325 673.5479 915.3036)" class="st5 futura-light st7">3.37</text>
			<text transform="matrix(1 0 0 1 579.219 915.2429)"><tspan x="0" y="0" class="st5 futura-light st7">17.2</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">8</tspan></text>
			<text transform="matrix(1 0 0 1 577.8108 958.1999)"><tspan x="0" y="0" class="st5 futura-light st7">19</tspan><tspan x="15.9" y="0" class="st5 futura-light st7">7.29 m2</tspan></text>
			<text transform="matrix(1 1.749997e-03 -1.749997e-03 1 601.2455 942.6417)" class="st8 futura-book st12">50</text>
		</g>
		<g id="E-51_2_" class="property__active" ng-class="bosque.inmovablesClassList[389]" ng-click="bosque.showPropertyData(39, '51')">
			<polyline id="EL-51_2_" class="property pb-sprite-1" points="514.2,1080.5 514.2,995.5 703,995.5 703,1080.5 514.2,1080.5 			"/>
			<g>
				<polyline class="st4" points="673.5,1048 663.5,1038 673.5,1028 673.5,1048 				"/>
				<polyline class="st3" points="673.5,1028 683.6,1038 673.5,1048 673.5,1028 				"/>
			</g>
			<text transform="matrix(0 -1 1 0 528.3342 1050.8365)"><tspan x="0" y="0" class="st5 futura-light st7">9.0</tspan><tspan x="19.8" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(0 -1 1 0 698.301 1050.8365)"><tspan x="0" y="0" class="st5 futura-light st7">9.0</tspan><tspan x="19.8" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(1 0 0 1 592.0627 1009.6589)"><tspan x="0" y="0" class="st5 futura-light st7">20.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(1 0 0 1 581.2698 1047.903)"><tspan x="0" y="0" class="st5 futura-light st7">18</tspan><tspan x="15.9" y="0" class="st5 futura-light st7">0.00 m2</tspan></text>
			<text transform="matrix(1 1.749997e-03 -1.749997e-03 1 601.2429 1032.3451)" class="st8 futura-book st12">51</text>
		</g>
		<g id="E-52_2_" class="property__active" ng-class="bosque.inmovablesClassList[390]" ng-click="bosque.showPropertyData(39, '52')">
			<polyline id="EL-52_2_" class="property pb-sprite-2" points="703,1174.9 514.2,1174.9 514.2,1080.5 703,1080.5 703,1174.9 			"/>
			<g>
				<polyline class="st4" points="673.5,1137.7 663.5,1127.7 673.5,1117.7 673.5,1137.7 				"/>
				<polyline class="st3" points="673.5,1117.7 683.6,1127.7 673.5,1137.7 673.5,1117.7 				"/>
			</g>
			<text transform="matrix(0 -1 1 0 528.3342 1144.2252)"><tspan x="0" y="0" class="st5 futura-light st7">10.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(0 -1 1 0 698.301 1144.2311)"><tspan x="0" y="0" class="st5 futura-light st7">10.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(1 0 0 1 592.0627 1094.651)"><tspan x="0" y="0" class="st5 futura-light st7">20.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(1 0 0 1 577.8108 1137.61)"><tspan x="0" y="0" class="st5 futura-light st7">20</tspan><tspan x="15.9" y="0" class="st5 futura-light st7">0.00 m2</tspan></text>
			<text transform="matrix(1 0 0 1 601.1252 1121.7057)" class="st8 futura-book st10">52</text>
		</g>
		<g id="E-53_2_" class="property__active" ng-class="bosque.inmovablesClassList[391]" ng-click="bosque.showPropertyData(39, '53')">
			<polyline id="EL-53_2_" class="property pb-sprite-1" points="703,1269.3 514.2,1269.3 514.2,1174.9 703,1174.9 703,1269.3 			"/>
			<g>
				<polyline class="st4" points="673.5,1232.1 663.5,1222.1 673.5,1212.1 673.5,1232.1 				"/>
				<polyline class="st3" points="673.5,1212.1 683.6,1222.1 673.5,1232.1 673.5,1212.1 				"/>
			</g>
			<text transform="matrix(0 -1 1 0 528.3342 1238.651)"><tspan x="0" y="0" class="st5 futura-light st7">10.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(0 -1 1 0 698.301 1238.651)"><tspan x="0" y="0" class="st5 futura-light st7">10.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(1 0 0 1 592.0627 1189.0651)"><tspan x="0" y="0" class="st5 futura-light st7">20.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(1 0 0 1 577.8108 1232.0397)"><tspan x="0" y="0" class="st5 futura-light st7">20</tspan><tspan x="15.9" y="0" class="st5 futura-light st7">0.00 m2</tspan></text>
			<text transform="matrix(1 1.749997e-03 -1.749997e-03 1 601.2429 1216.4727)" class="st8 futura-book st12">53</text>
		</g>
		<g id="E-54_2_" class="property__active" ng-class="bosque.inmovablesClassList[392]" ng-click="bosque.showPropertyData(39, '54')">
			<polyline id="EL-54_2_" class="property pb-sprite-2" points="703,1363.8 514.2,1363.8 514.2,1269.3 703,1269.3 703,1363.8 			"/>
			<g>
				<polyline class="st4" points="673.5,1326.6 663.5,1316.5 673.5,1306.5 673.5,1326.6 				"/>
				<polyline class="st3" points="673.5,1306.5 683.6,1316.5 673.5,1326.6 673.5,1306.5 				"/>
			</g>
			<text transform="matrix(0 -1 1 0 528.3342 1333.0807)"><tspan x="0" y="0" class="st5 futura-light st7">10.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(0 -1 1 0 698.301 1333.0807)"><tspan x="0" y="0" class="st5 futura-light st7">10.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(1 0 0 1 592.0627 1283.5026)"><tspan x="0" y="0" class="st5 futura-light st7">20.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(1 0 0 1 577.8108 1326.4596)"><tspan x="0" y="0" class="st5 futura-light st7">20</tspan><tspan x="15.9" y="0" class="st5 futura-light st7">0.00 m2</tspan></text>
			<text transform="matrix(1 1.749997e-03 -1.749997e-03 1 601.2436 1310.9143)" class="st8 futura-book st12">54</text>
		</g>
		<g id="E-55_2_" class="property__active" ng-class="bosque.inmovablesClassList[393]" ng-click="bosque.showPropertyData(39, '55')">
			<polyline id="EL-55_2_" class="property pb-sprite-1" points="703,1458.2 514.2,1458.2 514.2,1363.8 703,1363.8 703,1458.2 			"/>
			<g>
				<polyline class="st4" points="673.5,1421 663.5,1411 673.5,1401 673.5,1421 				"/>
				<polyline class="st3" points="673.5,1401 683.6,1411 673.5,1421 673.5,1401 				"/>
			</g>
			<text transform="matrix(0 -1 1 0 528.3342 1427.5104)"><tspan x="0" y="0" class="st5 futura-light st7">10.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(0 -1 1 0 698.301 1427.5104)"><tspan x="0" y="0" class="st5 futura-light st7">10.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(1 0 0 1 592.0627 1377.9303)"><tspan x="0" y="0" class="st5 futura-light st7">20.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(1 0 0 1 577.8108 1420.8834)"><tspan x="0" y="0" class="st5 futura-light st7">20</tspan><tspan x="15.9" y="0" class="st5 futura-light st7">0.00 m2</tspan></text>
			<text transform="matrix(1 1.749997e-03 -1.749997e-03 1 601.2405 1405.3268)" class="st8 futura-book st12">55</text>
		</g>
		<g id="E-56_2_" class="property__active" ng-class="bosque.inmovablesClassList[394]" ng-click="bosque.showPropertyData(39, '56')">
			<polyline id="EL-56_2_" class="property pb-sprite-2" points="703,1552.6 514.2,1552.6 514.2,1458.2 703,1458.2 703,1552.6 			"/>
			<g>
				<polyline class="st4" points="673.5,1515.4 663.5,1505.4 673.5,1495.4 673.5,1515.4 				"/>
				<polyline class="st3" points="673.5,1495.4 683.6,1505.4 673.5,1515.4 673.5,1495.4 				"/>
			</g>
			<text transform="matrix(1 0 0 1 592.0627 1547.903)"><tspan x="0" y="0" class="st5 futura-light st7">20.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(0 -1 1 0 528.3284 1521.9303)"><tspan x="0" y="0" class="st5 futura-light st7">10.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(0 -1 1 0 698.301 1521.9303)"><tspan x="0" y="0" class="st5 futura-light st7">10.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(1 0 0 1 592.0627 1472.3463)"><tspan x="0" y="0" class="st5 futura-light st7">20.0</tspan><tspan x="27.7" y="0" class="st5 futura-light st7">0</tspan></text>
			<text transform="matrix(1 0 0 1 577.8108 1513.7272)"><tspan x="0" y="0" class="st5 futura-light st7">20</tspan><tspan x="15.9" y="0" class="st5 futura-light st7">0.00 m2</tspan></text>
			<text transform="matrix(1 1.749997e-03 -1.749997e-03 1 601.2413 1499.7606)" class="st8 futura-book st12">56</text>
		</g>
		<g id="DIVISIONES_2_">
			<line class="st14" x1="514.2" y1="1552.6" x2="514.2" y2="781.7"/>
			<line class="st14" x1="325.3" y1="1354.3" x2="514.2" y2="1354.3"/>
			<line class="st14" x1="325.3" y1="1165.5" x2="514.2" y2="1165.5"/>
			<line class="st14" x1="325.3" y1="1071" x2="514.2" y2="1071"/>
			<line class="st14" x1="325.3" y1="882.2" x2="514.2" y2="882.2"/>
			<line class="st14" x1="325.3" y1="976.6" x2="514.2" y2="976.6"/>
			<line class="st14" x1="325.3" y1="1259.9" x2="514.2" y2="1259.9"/>
			<line class="st14" x1="325.3" y1="781.7" x2="514.2" y2="781.7"/>
			<line class="st14" x1="325.3" y1="1448.7" x2="514.2" y2="1448.7"/>
			<line class="st14" x1="703" y1="1363.8" x2="514.2" y2="1363.8"/>
			<line class="st14" x1="703" y1="1269.3" x2="514.2" y2="1269.3"/>
			<line class="st14" x1="514.2" y1="1174.9" x2="703" y2="1174.9"/>
			<line class="st14" x1="514.2" y1="901.1" x2="677.3" y2="901.1"/>
			<line class="st14" x1="703" y1="1458.2" x2="514.2" y2="1458.2"/>
			<line class="st14" x1="514.2" y1="1080.5" x2="703" y2="1080.5"/>
			<line class="st14" x1="514.2" y1="995.5" x2="703" y2="995.5"/>
		</g>
	</g>
	<g id="COMPLEMENTO">
		<g>
			<text transform="matrix(2.572983e-02 -0.9997 1.1068 2.355875e-02 35.9623 1578.0179)" class="st15 st9 st16">ACCESO</text>
			<path class="st15" d="M50.1,1559.2c0.1-5.1-4.3-9.2-9.8-9.6l0.2-13.5l11,11.5l11,11.5l-11.2,11.4l-11.2,11.4l0.2-13.5
				C45.6,1568.4,50.1,1564.3,50.1,1559.2"/>
		</g>
		<g>
			<text transform="matrix(8.698353e-04 -0.9998 1.1032 -1.969517e-02 63.0509 1467.6366)" class="st15 st9 st17">SALIDA</text>
			<path class="st15" d="M43.6,1453.6c0-5,4.3-9.1,9.7-9.5l0-13.2l-10.8,11.5l-10.8,11.5l10.9,11l10.9,11l0-13.2
				C47.9,1462.6,43.6,1458.6,43.6,1453.6"/>
		</g>
		<path class="st18" d="M1.4,1404.6c0-466.4,0-932.8,0-1399.2c452.1,330.7,904.1,661.3,1356.2,992
			c-36.2,308.8-72.5,617.6-108.7,926.4c-361.2,0-722.4,0-1083.6,0c0-99.4,0-198.8,0-298.2c-49.8-0.5-99.6-0.9-149.3-1.4
			c0-7.4,0-14.8,0-22.1c-7.1,0-14.2,0-21.4,0"/>
		<path class="st18" d="M1006,279.5"/>
		<rect x="65.9" y="1488.6" class="st15" width="37.6" height="27.5"/>
	</g>
</g>
</svg> 

    </div>
</body>
</html>