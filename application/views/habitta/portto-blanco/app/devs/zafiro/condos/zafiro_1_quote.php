<!DOCTYPE html>
<html lang="es_MX">

<head>
	<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" contet="ie=edge">
	<meta name="author" content="Ing. Saúl Fernando Torres Hernández">
	<meta name="description" content="Grúpo CCIMA S.A. de C.V." />
	<meta name="keywords"
		content="grupo ccima, navetec, constructora, servicio de construccion, desarrolladora, llave en mano, built to suit, renta de maquinaria, renta de gruas, maquinaria pesada para construccion, naves industriales, renta naves industriales, venta naves industriales, parques industriales, terrenos, terrenos industriales, terrenos habitacionales, bienes raices, inmobiliaria" />

	<title>Portto Blanco Bernal</title>

	<script type="text/javascript" src="media/assets/js/analytics.js"></script>

	<link rel="stylesheet" type="text/css" href="media/bower_components/materialize/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="media/assets/css/portto-blanco.css">
	<link rel="stylesheet" type="text/css" href="media/assets/css/helpers.css">
	<link rel="stylesheet" type="text/css" href="media/assets/css/quote.css">

	<script type="text/javascript" src="media/bower_components/jquery.min.js"></script>
	<script type="text/javascript" src="media/bower_components/materialize/js/materialize.min.js"></script>

</head>

<body ng-controller="PBBZafiroQuoteCtrl as zafiro">

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

				<a href="#!/portto_blanco" class="brand-logo white left"><img class="logo-pb"
						src="media/assets/img/habitta/portto-blanco/logos/logo.svg"></a>

				<ul class="nav-menu hide-on-med-and-down">
					<li><a href="#!/portto_blanco">Inicio</a></li>
					<li><a href="#!/portto_blanco-promociones">Promociones</a></li>
					<li><a href="#!/portto_blanco-amenidades">Áreas comunes</a></li>
					<li><a href="#!/portto_blanco-ubicacion">Ubicación</a></li>
					<li class="quote-item">
						<md-menu>
							<button class="btn blue-bg futura-demi lighter ml-10"
								ng-click="contactCtrl.openMenu($mdMenu, $event)">CONTACTO</button>
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
					<li>
						<md-button class="md-icon-button md-noink" ng-click="toggleLeft()">
							<svg viewBox="0 0 24 24" width="24">
								<path d="M3,18h18v-2H3V18z M3,13h18v-2H3V13z M3,6v2h18V6H3z" fill="#5F6368"></path>
							</svg>
						</md-button>
					</li>
				</ul>

				<div class="quote-item right hide-on-large-only">
					<md-menu>
						<button class="btn blue-bg futura-demi lighter ml-10"
							ng-click="contactCtrl.openMenu($mdMenu, $event)">CONTACTO</button>
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

	<div class="modal-dialog" ng-class="zafiro.dialogDisplay">
		<div class="backdrop-dialog" ng-click="zafiro.closeDialog()"></div>
		<div class="container-dialog p-20">
			<div class="toolbar-dialog blue-txt">
				Cotización
				<span ng-click="zafiro.closeDialog()">
					<img class="btn-close-dialog mt-4" src="media/assets/img/icons/close.svg">
				</span>
			</div>
			<div class="content-dialog">

				<div class="divider"></div>

				<div class="p-20 grey lighten-5">
					<div class="p-5">
						<h6 class="futura-med">Portto Blanco Bernal {{ zafiro.propertyData.condominium }}</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light">Número {{ zafiro.propertyData.number }}</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light">Área {{ zafiro.propertyData.area }} M&sup2;</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light">Precio por M&sup2; ${{ zafiro.propertyData.cost_m2 }} MXN</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light green-text" style="text-decoration: line-through;">Precio de
							${{ zafiro.propertyData.total }} MXN</h6>
					</div>

					<div class="divider"></div>

					<div class="py-20 ">
						<h5 class="center-align grey-text futura-book">Promociones de Lanzamiento Digital</h5>
					</div>

					<div class="divider"></div>

					<div class="p-20">
						<h6 class="deep-purple-text futura-light">{{ zafiro.propertyData.discountPlan1 }}% para
							propiedades pagadas de contado al 100%</h6>
						<h6 class="green-text futura-light">Precio de ${{ zafiro.propertyData.totalPlan1 }} MXN</h6>
						<p class="promo__description grey-text">¡Oferta limitada!</p>
					</div>

					<div class="divider"></div>

					<div class="p-20">
						<h6 class="deep-purple-text futura-light">{{ zafiro.propertyData.discountPlan2 }}% de descuento
							para propiedades con financiamiento hasta 180 Meses</h6>
						<h6 class="green-text futura-light">Precio de ${{ zafiro.propertyData.totalPlan2 }} MXN</h6>
						<p class="promo__description grey-text">¡Oferta limitada!</p>
					</div>

					<div class="divider"></div>

					<div class="divider"></div>

					<div class="p-20">
						<h6 class="deep-purple-text futura-light">Compra en {{ zafiro.month }} y paga la primera
							mensualidad hasta Noviembre</h6>
						<p class="promo__description grey-text">*Pagando el 100% de enganche</p>
						<p class="promo__description grey-text">*Aplica para todas las operaciones a crédito realizadas
							en {{ zafiro.month + ' ' + zafiro.year }}</p>
					</div>

					<div class="divider"></div>

					<a class="p-20">
						<p class="blue-text futura-book">¡Apártalo ahora!</p>
						<p class="green-text">Con tan solo $5,000 MXN</p>
					</a>
				</div>

			</div>

			<div class="divider"></div>
			<div class="option-menu-dialog" ng-controller="ContactMenuCtrl as contactCtrl">
				<md-menu class="right mr-20 mt-10" md-offset="0 -60">
					<button aria-label="Abrir Menu de Contacto" class="btn-flat futura-ligt"
						ng-click="contactCtrl.openMenu($mdMenu, $event)">
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
					<h1 class="center-align">Zafiro 1</h1>
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

		<svg version="1.1" id="CLÚSTER_ZAFIRO" xmlns="http://www.w3.org/2000/svg"
			xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1366 1372"
			style="enable-background:new 0 0 1366 1372;" xml:space="preserve">
			<style type="text/css">
				.st0 {
					fill-rule: evenodd;
					clip-rule: evenodd;
					fill: #64768C;
				}

				.st1 {
					fill: #FFFFFF;
				}

				.st2 {
					font-family: 'CenturyGothic';
				}

				.st3 {
					font-size: 9.7298px;
				}

				.st4 {
					font-size: 9.7299px;
				}

				.st5 {
					fill: #FFBF00;
				}

				.st6 {
					font-family: 'CenturyGothic-Bold';
				}

				.st7 {
					fill-rule: evenodd;
					clip-rule: evenodd;
					fill: #4076AE;
				}

				.st8 {
					font-size: 9.7297px;
				}

				.st9 {
					fill-rule: evenodd;
					clip-rule: evenodd;
					fill: #FFBF00;
				}

				.st10 {
					opacity: 0.5;
					fill-rule: evenodd;
					clip-rule: evenodd;
					fill: #FFBF00;
				}

				.st11 {
					font-size: 9.6525px;
				}

				.st12 {
					fill: none;
					stroke: #FFFFFF;
					stroke-width: 2.0981;
					stroke-miterlimit: 10;
				}

				.st13 {
					font-size: 9.7296px;
				}

				.st14 {
					fill: none;
					stroke: #002856;
					stroke-width: 5.2454;
					stroke-miterlimit: 10;
				}

				.st15 {
					fill: #03234B;
				}

				.st16 {
					font-size: 6.7701px;
				}

				.st17 {
					font-size: 7.2419px;
				}
			</style>
			<g id="MACHOTE">
			</g>
			<g id="BASE">
				<image style="overflow:visible;enable-background:new    ;" width="1366" height="1372"
					xlink:href="media/assets/img/habitta/portto-blanco/app/devs/zafiro/condos/zafiro_1.jpg">
				</image>
			</g>
			<g id="A-01_2_" class="property__active" ng-class="zafiro.inmovablesClassList[0]" ng-click="zafiro.showPropertyData(51, '1')">
				<polyline id="A-L01_2_" class="property pb-sprite-1"
					points="1083.4,449.3 1109.5,501.2 985.7,561.8 960.9,512.5 1083.4,449.3 	" />
				<text transform="matrix(0.4679 0.8838 -0.8838 0.4679 973.251 529.2587)">
					<tspan x="0" y="0" class="st1 st2 st3">8.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st3">0</tspan>
				</text>
				<text transform="matrix(0.4478 0.8942 -0.8942 0.4478 1083.584 472.225)">
					<tspan x="0" y="0" class="st1 st2 st4">8.5</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st4">9</tspan>
				</text>
				<text transform="matrix(0.8788 -0.4772 0.4772 0.8788 1033.923 535.2129)">
					<tspan x="0" y="0" class="st1 st2 st3">20.0</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st3">0</tspan>
				</text>
				<text transform="matrix(0.8894 -0.4571 0.4571 0.8894 1016.4323 495.8213)">
					<tspan x="0" y="0" class="st1 st2 st3">20.0</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st3">0</tspan>
				</text>
				<text transform="matrix(0.8894 -0.4571 0.4571 0.8894 1018.5448 522.396)">
					<tspan x="0" y="0" class="st1 st2 st3">16</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st3">4.35 m2</tspan>
				</text>
				<text transform="matrix(0.8988 -0.4384 0.4384 0.8988 1029.2407 507.2116)" class="st5 st6 st4">01</text>
			</g>
			<g id="A-02_2_" class="property__active" ng-class="zafiro.inmovablesClassList[1]" ng-click="zafiro.showPropertyData(51, '2')">
				<polyline id="A-L02_2_" class="property pb-sprite-2"
					points="935.1,463.8 1056.2,397.9 1083.4,449.3 960.9,512.5 935.1,463.8 	" />
				<text transform="matrix(0.4679 0.8838 -0.8838 0.4679 946.9396 478.3815)">
					<tspan x="0" y="0" class="st1 st2 st3">8.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st3">0</tspan>
				</text>
				<text transform="matrix(0.4679 0.8838 -0.8838 0.4679 1056.5543 420.2952)">
					<tspan x="0" y="0" class="st1 st2 st3">8.4</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st3">4</tspan>
				</text>
				<text transform="matrix(0.8788 -0.4772 0.4772 0.8788 990.1591 445.8577)">
					<tspan x="0" y="0" class="st1 st2 st3">20.0</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st3">0</tspan>
				</text>
				<text transform="matrix(0.8788 -0.4772 0.4772 0.8788 992.9003 472.3033)">
					<tspan x="0" y="0" class="st1 st2 st3">16</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st3">4.35 m2</tspan>
				</text>
				<text transform="matrix(0.8788 -0.4772 0.4772 0.8788 1002.3527 455.9289)" class="st5 st6 st3">02</text>
			</g>
			<g id="A-03_2_" class="property__active" ng-class="zafiro.inmovablesClassList[2]" ng-click="zafiro.showPropertyData(51, '3')">
				<polyline id="A-L03_2_" class="property pb-sprite-1"
					points="1027.9,347.2 1056.2,397.9 935.1,463.8 908.2,415.6 1027.9,347.2 	" />
				<text transform="matrix(0.4863 0.8738 -0.8738 0.4863 920.4005 429.7846)">
					<tspan x="0" y="0" class="st1 st2 st8">8.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0.4863 0.8738 -0.8738 0.4863 1028.7211 369.3314)">
					<tspan x="0" y="0" class="st1 st2 st8">8.4</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">4</tspan>
				</text>
				<text transform="matrix(0.8686 -0.4955 0.4955 0.8686 962.6375 396.2782)">
					<tspan x="0" y="0" class="st1 st2 st8">20.0</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0.8686 -0.4955 0.4955 0.8686 965.5905 422.8587)">
					<tspan x="0" y="0" class="st1 st2 st8">16</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st8">4.35 m2</tspan>
				</text>
				<text transform="matrix(0.8686 -0.4955 0.4955 0.8686 974.9625 405.66)" class="st5 st6 st8">03</text>
			</g>
			<g id="A-04_2_" class="property__active" ng-class="zafiro.inmovablesClassList[3]" ng-click="zafiro.showPropertyData(51, '4')">
				<polyline id="A-L04_2_" class="property pb-sprite-2"
					points="880.3,368.1 998.4,297 1027.9,347.2 908.2,415.6 880.3,368.1 	" />
				<text transform="matrix(0.506 0.8625 -0.8625 0.506 892.6582 382.1112)">
					<tspan x="0" y="0" class="st1 st2 st3">8.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st3">0</tspan>
				</text>
				<text transform="matrix(0.506 0.8625 -0.8625 0.506 999.6398 319.3147)">
					<tspan x="0" y="0" class="st1 st2 st3">8.4</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st3">4</tspan>
				</text>
				<text transform="matrix(0.8572 -0.515 0.515 0.8572 934.5532 347.7883)">
					<tspan x="0" y="0" class="st1 st2 st3">20.0</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st3">0</tspan>
				</text>
				<text transform="matrix(0.8572 -0.515 0.515 0.8572 938.7207 373.9226)">
					<tspan x="0" y="0" class="st1 st2 st3">16</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st3">4.35 m2</tspan>
				</text>
				<text transform="matrix(0.8686 -0.4955 0.4955 0.8686 946.6924 357.2112)" class="st5 st6 st8">04</text>
			</g>
			<g id="A-05_2_" class="property__active" ng-class="zafiro.inmovablesClassList[4]" ng-click="zafiro.showPropertyData(51, '5')">
				<polyline id="A-L05_2_" class="property pb-sprite-1"
					points="998.4,297 880.3,368.1 851.4,321.2 967.9,247.5 998.4,297 	" />
				<text transform="matrix(0.524 0.8517 -0.8517 0.524 864.2495 335.0372)">
					<tspan x="0" y="0" class="st1 st2 st4">8.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st4">0</tspan>
				</text>
				<text transform="matrix(0.524 0.8517 -0.8517 0.524 969.8385 269.9256)">
					<tspan x="0" y="0" class="st1 st2 st4">8.4</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st4">4</tspan>
				</text>
				<text transform="matrix(0.8462 -0.5329 0.5329 0.8462 905.212 299.3929)">
					<tspan x="0" y="0" class="st1 st2 st3">20.0</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st3">0</tspan>
				</text>
				<text transform="matrix(0.8462 -0.5329 0.5329 0.8462 909.9158 325.4498)">
					<tspan x="0" y="0" class="st1 st2 st3">16</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st3">4.35 m2</tspan>
				</text>
				<text transform="matrix(0.8462 -0.5329 0.5329 0.8462 917.4105 307.2945)" class="st5 st6 st3">05</text>
			</g>
			<g id="A-06_2_" class="property__active" ng-class="zafiro.inmovablesClassList[5]" ng-click="zafiro.showPropertyData(51, '6')">
				<polyline id="A-L06_2_" class="property pb-sprite-2"
					points="967.9,247.5 851.4,321.2 821.4,274.9 936.3,198.7 967.9,247.5 	" />
				<text transform="matrix(0.5432 0.8396 -0.8396 0.5432 834.6032 288.3903)">
					<tspan x="0" y="0" class="st1 st2 st3">8.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st3">0</tspan>
				</text>
				<text transform="matrix(0.5432 0.8396 -0.8396 0.5432 938.755 221.0015)">
					<tspan x="0" y="0" class="st1 st2 st3">8.4</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st3">4</tspan>
				</text>
				<text transform="matrix(0.8339 -0.5519 0.5519 0.8339 874.8498 252.3279)">
					<tspan x="0" y="0" class="st1 st2 st4">20.0</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st4">0</tspan>
				</text>
				<text transform="matrix(0.8339 -0.5519 0.5519 0.8339 879.4857 278.6939)">
					<tspan x="0" y="0" class="st1 st2 st4">16</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st4">4.35 m2</tspan>
				</text>
				<text transform="matrix(0.8339 -0.5519 0.5519 0.8339 887.1774 259.8389)" class="st5 st6 st4">06</text>
			</g>
			<g id="A-07_2_" class="property__active" ng-class="zafiro.inmovablesClassList[6]" ng-click="zafiro.showPropertyData(51, '7')">
				<polyline id="A-L07_2_" class="property pb-sprite-1"
					points="903.7,150.6 936.3,198.7 821.4,274.9 790.5,229.3 903.7,150.6 	" />
				<text transform="matrix(0.5606 0.8281 -0.8281 0.5606 803.7169 242.257)">
					<tspan x="0" y="0" class="st1 st2 st8">8.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0.5606 0.8281 -0.8281 0.5606 906.3786 172.6211)">
					<tspan x="0" y="0" class="st1 st2 st8">8.4</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">4</tspan>
				</text>
				<text transform="matrix(0.8221 -0.5693 0.5693 0.8221 843.3746 205.6376)">
					<tspan x="0" y="0" class="st1 st2 st4">20.0</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st4">0</tspan>
				</text>
				<text transform="matrix(0.8221 -0.5693 0.5693 0.8221 849.3637 232.3395)">
					<tspan x="0" y="0" class="st1 st2 st4">16</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st4">4.35 m2</tspan>
				</text>
				<text transform="matrix(0.8221 -0.5693 0.5693 0.8221 855.8164 212.7446)" class="st5 st6 st4">07</text>
			</g>
			<g id="A-08_2_" class="property__active" ng-class="zafiro.inmovablesClassList[7]" ng-click="zafiro.showPropertyData(51, '8')">
				<polyline id="A-L08_2_" class="property pb-sprite-2"
					points="758.6,184.3 870,103.2 903.7,150.6 790.5,229.3 758.6,184.3 	" />
				<text transform="matrix(0.5779 0.8161 -0.8161 0.5779 772.1895 197.2392)">
					<tspan x="0" y="0" class="st1 st2 st3">8.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st3">0</tspan>
				</text>
				<text transform="matrix(0.5779 0.8161 -0.8161 0.5779 873.3086 125.3807)">
					<tspan x="0" y="0" class="st1 st2 st3">8.4</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st3">4</tspan>
				</text>
				<text transform="matrix(0.809 -0.5878 0.5878 0.809 810.8998 159.3797)">
					<tspan x="0" y="0" class="st1 st2 st4">20.0</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st4">0</tspan>
				</text>
				<text transform="matrix(0.809 -0.5878 0.5878 0.809 817.2122 185.1931)">
					<tspan x="0" y="0" class="st1 st2 st4">16</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st4">4.35 m2</tspan>
				</text>
				<text transform="matrix(0.809 -0.5878 0.5878 0.809 823.4825 166.1377)" class="st5 st6 st4">08</text>
			</g>
			<g id="A-09_2_" class="property__active" ng-class="zafiro.inmovablesClassList[8]" ng-click="zafiro.showPropertyData(51, '9')">
				<polyline id="A-L09_2_" class="property pb-sprite-1" points="741.2,19.2 756.4,19.4 771.6,18.5 786.7,16.4 801.5,13.1 836.3,57.8 870,103.2 
		758.6,184.3 725.6,140.1 741.2,19.2 	" />
				<text transform="matrix(0.5962 0.8028 -0.8028 0.5962 739.6599 152.8228)">
					<tspan x="0" y="0" class="st1 st2 st4">8.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st4">0</tspan>
				</text>
				<text transform="matrix(0.6046 0.7965 -0.7965 0.6046 820.7811 54.4529)">
					<tspan x="0" y="0" class="st1 st2 st8">16.4</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st8">3</tspan>
				</text>
				<text transform="matrix(0.9949 -0.1011 0.1011 0.9949 763.3724 30.0553)">
					<tspan x="0" y="0" class="st1 st2 st8">8.8</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">3</tspan>
				</text>
				<text transform="matrix(0.1288 -0.9917 0.9917 0.1288 741.5277 92.9431)">
					<tspan x="0" y="0" class="st1 st2 st8">17.6</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st8">8</tspan>
				</text>
				<text transform="matrix(0.809 -0.5878 0.5878 0.809 779.0526 132.5261)">
					<tspan x="0" y="0" class="st1 st2 st4">31</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st4">8.12 m2</tspan>
				</text>
				<text transform="matrix(0.809 -0.5878 0.5878 0.809 785.2311 113.5314)" class="st5 st6 st4">09</text>
				<text transform="matrix(0.809 -0.5878 0.5878 0.809 800.0807 146.1354)">
					<tspan x="0" y="0" class="st1 st2 st4">20.0</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st4">0</tspan>
				</text>
			</g>
			<g id="A-10_2_" class="property__active" ng-class="zafiro.inmovablesClassList[9]" ng-click="zafiro.showPropertyData(51, '10')">
				<polyline id="A-L10_2_" class="property pb-sprite-2" points="607.5,48.2 682,6.6 696.4,11.5 711.1,15.2 726.1,17.8 741.2,19.2 725.6,140.1 
		674.8,168.5 607.5,48.2 	" />
				<text transform="matrix(0.9778 0.2096 -0.2096 0.9778 699.5658 23.8276)">
					<tspan x="0" y="0" class="st1 st2 st3">8.8</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st3">3</tspan>
				</text>
				<text transform="matrix(0.8729 -0.4879 0.4879 0.8729 639.0995 42.1975)">
					<tspan x="0" y="0" class="st1 st2 st8">12.3</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st8">8</tspan>
				</text>
				<text transform="matrix(0.8729 -0.4879 0.4879 0.8729 690.2219 155.7516)">
					<tspan x="0" y="0" class="st1 st2 st8">8.4</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">5</tspan>
				</text>
				<text transform="matrix(0.4879 0.8729 -0.8729 0.4879 640.6201 93.2634)">
					<tspan x="0" y="0" class="st1 st2 st8">20.0</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0.4879 0.8729 -0.8729 0.4879 658.3444 74.259)">
					<tspan x="0" y="0" class="st1 st2 st8">28</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st8">3.77 m2</tspan>
				</text>
				<text transform="matrix(0.1288 -0.9917 0.9917 0.1288 728.0544 91.9026)">
					<tspan x="0" y="0" class="st1 st2 st8">17.6</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st8">8</tspan>
				</text>
				<text transform="matrix(0.4879 0.8729 -0.8729 0.4879 674.6699 83.2192)" class="st5 st6 st8">10</text>
			</g>
			<g id="A-11_2_" class="property__active" ng-class="zafiro.inmovablesClassList[10]" ng-click="zafiro.showPropertyData(51, '11')">
				<polyline id="A-L11_2_" class="property pb-sprite-1"
					points="559.4,75.2 607.5,48.2 674.8,168.5 626.7,195.4 559.4,75.2 	" />
				<text transform="matrix(0.8729 -0.4879 0.4879 0.8729 580.1666 75.1766)">
					<tspan x="0" y="0" class="st1 st2 st8">8.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0.8729 -0.4879 0.4879 0.8729 640.7468 183.4382)">
					<tspan x="0" y="0" class="st1 st2 st8">8.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0.4879 0.8729 -0.8729 0.4879 625.23 103.3067)">
					<tspan x="0" y="0" class="st1 st2 st8">20.0</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0.4879 0.8729 -0.8729 0.4879 600.3894 106.6848)">
					<tspan x="0" y="0" class="st1 st2 st8">16</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st8">0.00 m2</tspan>
				</text>
				<text transform="matrix(0.4879 0.8729 -0.8729 0.4879 616.7158 115.649)" class="st5 st6 st8">11</text>
			</g>
			<g id="A-12_2_" class="property__active" ng-class="zafiro.inmovablesClassList[11]" ng-click="zafiro.showPropertyData(51, '12')">
				<polyline id="A-L12_2_" class="property pb-sprite-2"
					points="511.3,102.1 559.4,75.2 626.7,195.4 578.6,222.4 511.3,102.1 	" />
				<text transform="matrix(0.8729 -0.4879 0.4879 0.8729 532.0519 102.0984)">
					<tspan x="0" y="0" class="st1 st2 st8">8.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0.8729 -0.4879 0.4879 0.8729 592.6311 210.3583)">
					<tspan x="0" y="0" class="st1 st2 st8">8.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0.4879 0.8729 -0.8729 0.4879 577.1158 130.2305)">
					<tspan x="0" y="0" class="st1 st2 st8">20.0</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0.4879 0.8729 -0.8729 0.4879 552.2736 133.6118)">
					<tspan x="0" y="0" class="st1 st2 st8">16</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st8">0.00 m2</tspan>
				</text>
				<text transform="matrix(0.4879 0.8729 -0.8729 0.4879 568.6 142.5715)" class="st5 st6 st8">12</text>
			</g>
			<g id="A-13_2_" class="property__active" ng-class="zafiro.inmovablesClassList[12]" ng-click="zafiro.showPropertyData(51, '13')">
				<polyline id="A-L13_2_" class="property pb-sprite-1"
					points="463.2,129 511.3,102.1 578.6,222.4 530.5,249.3 463.2,129 	" />
				<text transform="matrix(0.8729 -0.4879 0.4879 0.8729 483.9387 129.0216)">
					<tspan x="0" y="0" class="st1 st2 st8">8.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0.8729 -0.4879 0.4879 0.8729 544.5184 237.2813)">
					<tspan x="0" y="0" class="st1 st2 st8">8.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0.4879 0.8729 -0.8729 0.4879 529.0042 157.1573)">
					<tspan x="0" y="0" class="st1 st2 st8">20.0</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0.4879 0.8729 -0.8729 0.4879 504.1622 160.5362)">
					<tspan x="0" y="0" class="st1 st2 st8">16</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st8">0.00 m2</tspan>
				</text>
				<text transform="matrix(0.4879 0.8729 -0.8729 0.4879 520.4874 169.4966)" class="st5 st6 st8">13</text>
			</g>
			<g id="A-14_2_" class="property__active" ng-class="zafiro.inmovablesClassList[13]" ng-click="zafiro.showPropertyData(51, '14')">
				<polyline id="A-L14_2_" class="property pb-sprite-2" points="415,155.9 463.2,129 530.5,249.3 482.4,276.2 415,155.9 	" />
				<text transform="matrix(0.8729 -0.4879 0.4879 0.8729 435.8249 155.9497)">
					<tspan x="0" y="0" class="st1 st2 st8">8.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0.8729 -0.4879 0.4879 0.8729 496.4054 264.2078)">
					<tspan x="0" y="0" class="st1 st2 st8">8.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0.4879 0.8729 -0.8729 0.4879 480.8862 184.082)">
					<tspan x="0" y="0" class="st1 st2 st8">20.0</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0.4879 0.8729 -0.8729 0.4879 456.0472 187.4581)">
					<tspan x="0" y="0" class="st1 st2 st8">16</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st8">0.00 m2</tspan>
				</text>
				<text transform="matrix(0.4879 0.8729 -0.8729 0.4879 472.3759 196.4244)" class="st5 st6 st8">14</text>
			</g>
			<g id="A-15_2_" class="property__active" ng-class="zafiro.inmovablesClassList[14]" ng-click="zafiro.showPropertyData(51, '15')">
				<polyline id="A-L15_2_" class="property pb-sprite-1"
					points="360.9,186.2 415,155.9 482.4,276.2 428.2,306.5 360.9,186.2 	" />
				<text transform="matrix(0.8729 -0.4879 0.4879 0.8729 384.7056 184.5596)">
					<tspan x="0" y="0" class="st1 st2 st8">9.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0.8729 -0.4879 0.4879 0.8729 445.2838 292.8145)">
					<tspan x="0" y="0" class="st1 st2 st8">9.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0.4879 0.8729 -0.8729 0.4879 432.7718 211.0014)">
					<tspan x="0" y="0" class="st1 st2 st8">20.0</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0.4879 0.8729 -0.8729 0.4879 404.9265 216.0656)">
					<tspan x="0" y="0" class="st1 st2 st8">18</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st8">0.00 m2</tspan>
				</text>
				<text transform="matrix(0.4879 0.8729 -0.8729 0.4879 421.2536 225.0316)" class="st5 st6 st8">15</text>
			</g>
			<g id="A-16_2_" class="property__active" ng-class="zafiro.inmovablesClassList[15]" ng-click="zafiro.showPropertyData(51, '16')">
				<polyline id="A-L16_2_" class="property pb-sprite-2"
					points="306.8,216.5 360.9,186.2 428.2,306.5 374.1,336.8 306.8,216.5 	" />
				<text transform="matrix(0.8729 -0.4879 0.4879 0.8729 330.5751 214.8458)">
					<tspan x="0" y="0" class="st1 st2 st8">9.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0.8729 -0.4879 0.4879 0.8729 391.1565 323.1056)">
					<tspan x="0" y="0" class="st1 st2 st8">9.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0.4879 0.8729 -0.8729 0.4879 378.6462 241.2938)">
					<tspan x="0" y="0" class="st1 st2 st8">20.0</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0.4879 0.8729 -0.8729 0.4879 350.798 246.3573)">
					<tspan x="0" y="0" class="st1 st2 st8">18</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st8">0.00 m2</tspan>
				</text>
				<text transform="matrix(0.4879 0.8729 -0.8729 0.4879 367.1246 255.3214)" class="st5 st6 st8">16</text>
			</g>
			<g id="A-17_2_" class="property__active" ng-class="zafiro.inmovablesClassList[16]" ng-click="zafiro.showPropertyData(51, '17')">
				<polyline id="A-L17_2_" class="property pb-sprite-1"
					points="252.7,246.8 306.8,216.5 374.1,336.8 320,367.1 252.7,246.8 	" />
				<g>
					<polyline class="st9" points="331.6,320.1 331.6,334.7 324.3,327.4 331.6,320.1 		" />
					<polyline class="st10" points="331.6,320.1 338.9,327.4 331.6,334.7 331.6,320.1 		" />
				</g>
				<text transform="matrix(0.8729 -0.4879 0.4879 0.8729 276.4479 245.1379)">
					<tspan x="0" y="0" class="st1 st2 st8">9.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0.8729 -0.4879 0.4879 0.8729 337.0272 353.3933)">
					<tspan x="0" y="0" class="st1 st2 st8">9.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0.4879 0.8729 -0.8729 0.4879 324.5173 271.5858)">
					<tspan x="0" y="0" class="st1 st2 st8">20.0</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0.4879 0.8729 -0.8729 0.4879 296.669 276.6471)">
					<tspan x="0" y="0" class="st1 st2 st8">18</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st8">0.00 m2</tspan>
				</text>
				<text transform="matrix(0.4879 0.8729 -0.8729 0.4879 312.9991 285.6115)" class="st5 st6 st8">17</text>
			</g>
			<g id="A-18_2_" class="property__active" ng-class="zafiro.inmovablesClassList[17]" ng-click="zafiro.showPropertyData(51, '18')">
				<polyline id="A-L18_2_" class="property pb-sprite-2" points="320,367.1 271.9,394 126.9,317.2 252.7,246.8 320,367.1 	" />
				<g>
					<polyline class="st9" points="279.5,351.5 279.5,366.1 272.2,358.8 279.5,351.5 		" />
					<polyline class="st10" points="279.5,351.5 286.9,358.8 279.5,366.1 279.5,351.5 		" />
				</g>
				<text transform="matrix(0.4879 0.8729 -0.8729 0.4879 237.0676 309.9998)">
					<tspan x="0" y="0" class="st1 st2 st8">28</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st8">9.14 m2</tspan>
				</text>
				<text transform="matrix(0.8729 -0.4879 0.4879 0.8729 184.1463 296.7864)">
					<tspan x="0" y="0" class="st1 st2 st8">20.9</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st8">1</tspan>
				</text>
				<text transform="matrix(0.8729 -0.4879 0.4879 0.8729 285.9042 381.9987)">
					<tspan x="0" y="0" class="st1 st2 st8">8.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0.4879 0.8729 -0.8729 0.4879 270.3894 301.8727)">
					<tspan x="0" y="0" class="st1 st2 st8">20.0</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0.4879 0.8729 -0.8729 0.4879 253.3933 318.9622)" class="st5 st6 st8">18</text>
			</g>
			<g id="A-19_2_" class="property__active" ng-class="zafiro.inmovablesClassList[18]" ng-click="zafiro.showPropertyData(51, '19')">
				<polyline id="A-L19_2_" class="property pb-sprite-1" points="105,412.2 126.9,317.2 271.9,394 259.5,447.7 105,412.2 	" />
				<g>
					<polyline class="st9" points="245.1,410.5 245.1,425 237.9,417.7 245.1,410.5 		" />
					<polyline class="st10" points="245.1,410.5 252.4,417.7 245.1,425 245.1,410.5 		" />
				</g>
				<text transform="matrix(0.9744 0.225 -0.225 0.9744 163.6972 408.2943)">
					<tspan x="0" y="0" class="st1 st2 st8">25</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st8">4.65 m2</tspan>
				</text>
				<text transform="matrix(0.225 -0.9744 0.9744 0.225 260.2012 429.0915)">
					<tspan x="0" y="0" class="st1 st2 st11">8.0</tspan>
					<tspan x="13.3" y="0" class="st1 st2 st11">0</tspan>
				</text>
				<text transform="matrix(0.225 -0.9744 0.9744 0.225 123.2405 378.7518)">
					<tspan x="0" y="0" class="st1 st2 st8">14.1</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st8">4</tspan>
				</text>
				<text transform="matrix(0.8829 0.4695 -0.4695 0.8829 183.9814 359.1119)">
					<tspan x="0" y="0" class="st1 st2 st3">23.8</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st3">1</tspan>
				</text>
				<text transform="matrix(0.9744 0.225 -0.225 0.9744 184.361 399.3235)" class="st5 st6 st11">19</text>
			</g>
			<g id="A-20_1_" class="property__active" ng-class="zafiro.inmovablesClassList[19]" ng-click="zafiro.showPropertyData(51, '20')">
				<polyline id="A-L20_2_" class="property pb-sprite-2"
					points="91.1,472.6 105,412.2 259.5,447.7 245.6,508.2 91.1,472.6 	" />
				<g>
					<polyline class="st9" points="231.8,467.6 231.8,482.2 224.5,474.9 231.8,467.6 		" />
					<polyline class="st10" points="231.8,467.6 239.1,474.9 231.8,482.2 231.8,467.6 		" />
				</g>
				<text transform="matrix(0.225 -0.9744 0.9744 0.225 246.9966 486.3218)">
					<tspan x="0" y="0" class="st1 st2 st8">9.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0.225 -0.9744 0.9744 0.225 105.9528 453.8502)">
					<tspan x="0" y="0" class="st1 st2 st8">9.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0.9744 0.225 -0.225 0.9744 168.1539 437.2559)">
					<tspan x="0" y="0" class="st1 st2 st8">23.0</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0.9744 0.225 -0.225 0.9744 151.329 462.0148)">
					<tspan x="0" y="0" class="st1 st2 st8">20</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st8">7.00 m2</tspan>
				</text>
				<text transform="matrix(0.9744 0.225 -0.225 0.9744 170.5533 456.3184)" class="st5 st6 st8">20</text>
			</g>
			<g id="A-21_2_" class="property__active" ng-class="zafiro.inmovablesClassList[20]" ng-click="zafiro.showPropertyData(51, '21')">
				<polyline id="A-L21_2_" class="property pb-sprite-1"
					points="77.2,533.1 91.1,472.6 245.6,508.2 231.7,568.6 77.2,533.1 	" />
				<g>
					<polyline class="st9" points="217.9,528 217.9,542.6 210.6,535.3 217.9,528 		" />
					<polyline class="st10" points="217.9,528 225.2,535.3 217.9,542.6 217.9,528 		" />
				</g>
				<text transform="matrix(0.225 -0.9744 0.9744 0.225 233.0813 546.7697)">
					<tspan x="0" y="0" class="st1 st2 st8">9.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0.225 -0.9744 0.9744 0.225 92.0356 514.2975)">
					<tspan x="0" y="0" class="st1 st2 st8">9.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0.9744 0.225 -0.225 0.9744 154.2314 497.7)">
					<tspan x="0" y="0" class="st1 st2 st8">23.0</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0.9744 0.225 -0.225 0.9744 137.4143 522.4598)">
					<tspan x="0" y="0" class="st1 st2 st8">20</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st8">7.00 m2</tspan>
				</text>
				<text transform="matrix(0.9744 0.225 -0.225 0.9744 156.6378 516.7671)" class="st5 st6 st8">21</text>
			</g>
			<g id="A-22_2_" class="property__active" ng-class="zafiro.inmovablesClassList[21]" ng-click="zafiro.showPropertyData(51, '22')">
				<polyline id="A-L22_2_" class="property pb-sprite-2"
					points="63.3,593.5 77.2,533.1 231.7,568.6 217.7,629.1 63.3,593.5 	" />
				<g>
					<polyline class="st9" points="204,588.5 204,603.1 196.6,595.8 204,588.5 		" />
					<polyline class="st10" points="204,588.5 211.3,595.8 204,603.1 204,588.5 		" />
				</g>
				<text transform="matrix(0.225 -0.9744 0.9744 0.225 219.1591 607.2124)">
					<tspan x="0" y="0" class="st1 st2 st8">9.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0.225 -0.9744 0.9744 0.225 78.1153 574.7407)">
					<tspan x="0" y="0" class="st1 st2 st8">9.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0.9744 0.225 -0.225 0.9744 140.3167 558.1454)">
					<tspan x="0" y="0" class="st1 st2 st8">23.0</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0.9744 0.225 -0.225 0.9744 123.4992 582.9111)">
					<tspan x="0" y="0" class="st1 st2 st8">20</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st8">7.00 m2</tspan>
				</text>
				<text transform="matrix(0.9744 0.225 -0.225 0.9744 142.7205 577.206)" class="st5 st6 st8">22</text>
			</g>
			<g id="A-23_2_" class="property__active" ng-class="zafiro.inmovablesClassList[22]" ng-click="zafiro.showPropertyData(51, '23')">
				<polyline id="A-L23_2_" class="property pb-sprite-1" points="49.3,654 63.3,593.5 217.7,629.1 203.8,689.5 49.3,654 	" />
				<g>
					<polyline class="st9" points="190,648.9 190,663.5 182.7,656.2 190,648.9 		" />
					<polyline class="st10" points="190,648.9 197.3,656.2 190,663.5 190,648.9 		" />
				</g>
				<text transform="matrix(0.225 -0.9744 0.9744 0.225 205.2438 667.6602)">
					<tspan x="0" y="0" class="st1 st2 st8">9.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0.225 -0.9744 0.9744 0.225 64.2063 635.1874)">
					<tspan x="0" y="0" class="st1 st2 st8">9.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0.9744 0.225 -0.225 0.9744 126.4016 618.5923)">
					<tspan x="0" y="0" class="st1 st2 st8">23.0</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0.9744 0.225 -0.225 0.9744 109.5824 643.3566)">
					<tspan x="0" y="0" class="st1 st2 st8">20</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st8">7.00 m2</tspan>
				</text>
				<text transform="matrix(0.9744 0.225 -0.225 0.9744 128.7968 637.6553)" class="st5 st6 st8">23</text>
			</g>
			<g id="A-24_2_" class="property__active" ng-class="zafiro.inmovablesClassList[23]" ng-click="zafiro.showPropertyData(51, '24')">
				<polyline id="A-L24_2_" class="property pb-sprite-2" points="35.4,714.4 49.3,654 203.8,689.5 189.9,750 35.4,714.4 	" />
				<g>
					<polyline class="st9" points="176.1,709.3 176.1,724 168.8,716.7 176.1,709.3 		" />
					<polyline class="st10" points="176.1,709.3 183.4,716.7 176.1,724 176.1,709.3 		" />
				</g>
				<text transform="matrix(0.225 -0.9744 0.9744 0.225 191.3307 728.107)">
					<tspan x="0" y="0" class="st1 st2 st8">9.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0.225 -0.9744 0.9744 0.225 50.2898 695.636)">
					<tspan x="0" y="0" class="st1 st2 st8">9.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0.9744 0.225 -0.225 0.9744 112.4845 679.0392)">
					<tspan x="0" y="0" class="st1 st2 st8">23.0</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0.9744 0.225 -0.225 0.9744 95.6685 703.7983)">
					<tspan x="0" y="0" class="st1 st2 st8">20</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st8">7.00 m2</tspan>
				</text>
				<text transform="matrix(0.9744 0.225 -0.225 0.9744 114.8779 698.1013)" class="st5 st6 st8">24</text>
			</g>
			<g id="A-25_2_" class="property__active" ng-class="zafiro.inmovablesClassList[24]" ng-click="zafiro.showPropertyData(51, '25')">
				<polyline id="A-L25_2_" class="property pb-sprite-1"
					points="31.1,777.1 33.7,722.1 35.4,714.4 189.9,750 176,810.4 31.1,777.1 	" />
				<g>
					<polyline class="st9" points="162.2,769.8 162.2,784.4 154.9,777.1 162.2,769.8 		" />
					<polyline class="st10" points="162.2,769.8 169.5,777.1 162.2,784.4 162.2,769.8 		" />
				</g>
				<text transform="matrix(0.225 -0.9744 0.9744 0.225 177.4157 788.5494)">
					<tspan x="0" y="0" class="st1 st2 st8">9.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0.225 -0.9744 0.9744 0.225 42.3704 738.1873)">
					<tspan x="0" y="0" class="st1 st2 st8">1.1</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">5</tspan>
				</text>
				<text transform="matrix(0.9744 0.225 -0.225 0.9744 98.57 739.4832)">
					<tspan x="0" y="0" class="st1 st2 st8">23.0</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(4.884981e-02 -0.9988 0.9988 4.884981e-02 42.4361 766.3657)">
					<tspan x="0" y="0" class="st1 st2 st3">7.9</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st3">8</tspan>
				</text>
				<text transform="matrix(0.9744 0.225 -0.225 0.9744 82.2971 764.3777)">
					<tspan x="0" y="0" class="st1 st2 st8">20</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st8">1.42 m2</tspan>
				</text>
				<text transform="matrix(0.9744 0.225 -0.225 0.9744 99.7949 758.5492)" class="st5 st6 st8">25</text>
			</g>
			<g id="A-26_2_" class="property__active" ng-class="zafiro.inmovablesClassList[25]" ng-click="zafiro.showPropertyData(51, '26')">
				<polyline id="A-L26_2_" class="property pb-sprite-2"
					points="27.2,858.9 31.1,777.1 176,810.4 165.3,856.9 164.9,865.4 27.2,858.9 	" />
				<text transform="matrix(0.9744 0.225 -0.225 0.9744 71.8173 828.9852)">
					<tspan x="0" y="0" class="st1 st2 st8">20</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st8">5.88 m2</tspan>
				</text>
				<text transform="matrix(0.225 -0.9744 0.9744 0.225 165.1053 842.0278)">
					<tspan x="0" y="0" class="st1 st2 st8">6.9</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">2</tspan>
				</text>
				<text transform="matrix(0.9744 0.225 -0.225 0.9744 89.4281 801.0306)">
					<tspan x="0" y="0" class="st1 st2 st8">21.5</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st8">8</tspan>
				</text>
				<text transform="matrix(4.884981e-02 -0.9988 0.9988 4.884981e-02 159.7268 865.6671)">
					<tspan x="0" y="0" class="st1 st2 st3">1.2</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st3">3</tspan>
				</text>
				<text transform="matrix(4.884981e-02 -0.9988 0.9988 4.884981e-02 39.0816 830.6561)">
					<tspan x="0" y="0" class="st1 st2 st3">11.8</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st3">9</tspan>
				</text>
				<text transform="matrix(0.9744 0.225 -0.225 0.9744 91.0911 823.2916)" class="st5 st6 st8">26</text>
			</g>
			<g id="A-27_2_" class="property__active" ng-class="zafiro.inmovablesClassList[26]" ng-click="zafiro.showPropertyData(51, '27')">
				<polyline id="A-L27_2_" class="property pb-sprite-1" points="24.3,920.8 27.2,858.9 164.9,865.4 162,927.3 24.3,920.8 	" />
				<text transform="matrix(4.884981e-02 -0.9988 0.9988 4.884981e-02 159.728 905.7154)">
					<tspan x="0" y="0" class="st1 st2 st3">9.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st3">0</tspan>
				</text>
				<text transform="matrix(4.884981e-02 -0.9988 0.9988 4.884981e-02 35.8164 899.8672)">
					<tspan x="0" y="0" class="st1 st2 st3">9.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st3">0</tspan>
				</text>
				<text transform="matrix(0.9988 4.884981e-02 -4.884981e-02 0.9988 83.6925 872.0972)">
					<tspan x="0" y="0" class="st1 st2 st3">20.0</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st3">0</tspan>
				</text>
				<text transform="matrix(0.9988 4.884981e-02 -4.884981e-02 0.9988 71.6443 899.4774)">
					<tspan x="0" y="0" class="st1 st2 st3">18</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st3">0.00 m2</tspan>
				</text>
				<text transform="matrix(0.9988 4.884981e-02 -4.884981e-02 0.9988 89.4551 890.4328)"
					class="st5 st6 st3">27</text>
			</g>
			<g id="A-28_2_" class="property__active" ng-class="zafiro.inmovablesClassList[27]" ng-click="zafiro.showPropertyData(51, '28')">
				<polyline id="A-L28_2_" class="property pb-sprite-2" points="21.3,982.8 24.3,920.8 162,927.3 159,989.3 21.3,982.8 	" />
				<text transform="matrix(4.884981e-02 -0.9988 0.9988 4.884981e-02 156.8134 967.6758)">
					<tspan x="0" y="0" class="st1 st2 st3">9.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st3">0</tspan>
				</text>
				<text transform="matrix(4.884981e-02 -0.9988 0.9988 4.884981e-02 32.8921 961.8272)">
					<tspan x="0" y="0" class="st1 st2 st3">9.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st3">0</tspan>
				</text>
				<text transform="matrix(0.9988 4.884981e-02 -4.884981e-02 0.9988 80.7684 934.0532)">
					<tspan x="0" y="0" class="st1 st2 st3">20.0</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st3">0</tspan>
				</text>
				<text transform="matrix(0.9988 4.884981e-02 -4.884981e-02 0.9988 68.7256 961.3642)">
					<tspan x="0" y="0" class="st1 st2 st3">18</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st3">0.00 m2</tspan>
				</text>
				<text transform="matrix(0.9988 4.884981e-02 -4.884981e-02 0.9988 86.529 952.3902)"
					class="st5 st6 st3">28</text>
			</g>
			<g id="A-29_2_" class="property__active" ng-class="zafiro.inmovablesClassList[28]" ng-click="zafiro.showPropertyData(51, '29')">
				<polyline id="A-L29_2_" class="property pb-sprite-1"
					points="18.4,1044.8 21.3,982.8 159,989.3 156.1,1051.3 18.4,1044.8 	" />
				<text transform="matrix(4.884981e-02 -0.9988 0.9988 4.884981e-02 153.8855 1029.6311)">
					<tspan x="0" y="0" class="st1 st2 st3">9.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st3">0</tspan>
				</text>
				<text transform="matrix(4.884981e-02 -0.9988 0.9988 4.884981e-02 29.9642 1023.7825)">
					<tspan x="0" y="0" class="st1 st2 st3">9.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st3">0</tspan>
				</text>
				<text transform="matrix(0.9988 4.884981e-02 -4.884981e-02 0.9988 77.8479 996.0167)">
					<tspan x="0" y="0" class="st1 st2 st3">20.0</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st3">0</tspan>
				</text>
				<text transform="matrix(0.9988 4.884981e-02 -4.884981e-02 0.9988 65.8067 1023.2535)">
					<tspan x="0" y="0" class="st1 st2 st3">18</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st3">0.00 m2</tspan>
				</text>
				<text transform="matrix(0.9988 4.884981e-02 -4.884981e-02 0.9988 83.6047 1014.3501)"
					class="st5 st6 st3">29</text>
			</g>
			<g id="A-30_2_" class="property__active" ng-class="zafiro.inmovablesClassList[29]" ng-click="zafiro.showPropertyData(51, '30')">
				<polyline id="A-L30_2_" class="property pb-sprite-2"
					points="15.5,1106.7 18.4,1044.8 156.1,1051.3 153.2,1113.2 15.5,1106.7 	" />
				<text transform="matrix(4.884981e-02 -0.9988 0.9988 4.884981e-02 150.9632 1091.5907)">
					<tspan x="0" y="0" class="st1 st2 st3">9.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st3">0</tspan>
				</text>
				<text transform="matrix(4.884981e-02 -0.9988 0.9988 4.884981e-02 27.0419 1085.7421)">
					<tspan x="0" y="0" class="st1 st2 st3">9.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st3">0</tspan>
				</text>
				<text transform="matrix(0.9988 4.884981e-02 -4.884981e-02 0.9988 74.9275 1057.9768)">
					<tspan x="0" y="0" class="st1 st2 st3">20.0</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st3">0</tspan>
				</text>
				<text transform="matrix(0.9988 4.884981e-02 -4.884981e-02 0.9988 62.8858 1085.1447)">
					<tspan x="0" y="0" class="st1 st2 st3">18</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st3">0.00 m2</tspan>
				</text>
				<text transform="matrix(0.9988 4.884981e-02 -4.884981e-02 0.9988 80.6805 1076.3081)"
					class="st5 st6 st3">30</text>
			</g>
			<g id="A-31_2_" class="property__active" ng-class="zafiro.inmovablesClassList[30]" ng-click="zafiro.showPropertyData(51, '31')">
				<polyline id="A-L31_2_" class="property pb-sprite-1"
					points="12.6,1168.3 15.5,1106.7 153.2,1113.2 150.6,1168.3 12.6,1168.3 	" />
				<g>
					<polyline class="st9" points="125.2,1129.6 125.2,1144.3 117.9,1137 125.2,1129.6 		" />
					<polyline class="st10" points="125.2,1129.6 132.5,1137 125.2,1144.3 125.2,1129.6 		" />
				</g>
				<text transform="matrix(4.884981e-02 -0.9988 0.9988 4.884981e-02 148.1976 1150.1055)">
					<tspan x="0" y="0" class="st1 st2 st3">8.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st3">0</tspan>
				</text>
				<text transform="matrix(4.884981e-02 -0.9988 0.9988 4.884981e-02 24.127 1147.5104)">
					<tspan x="0" y="0" class="st1 st2 st3">8.9</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st3">4</tspan>
				</text>
				<text transform="matrix(0.9988 4.884981e-02 -4.884981e-02 0.9988 71.997 1119.936)">
					<tspan x="0" y="0" class="st1 st2 st3">20.0</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st3">0</tspan>
				</text>
				<text transform="matrix(1 0 0 1 69.4854 1164.8125)">
					<tspan x="0" y="0" class="st1 st2 st8">20.0</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st8">2</tspan>
				</text>
				<text transform="matrix(0.9988 4.884981e-02 -4.884981e-02 0.9988 60.1138 1143.5928)">
					<tspan x="0" y="0" class="st1 st2 st3">16</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st3">9.44 m2</tspan>
				</text>
				<text transform="matrix(0.9988 4.884981e-02 -4.884981e-02 0.9988 77.9208 1134.8232)"
					class="st5 st6 st3">31</text>
			</g>
			<g id="DIVISIONES_12_">
				<line class="st12" x1="758.6" y1="184.3" x2="870" y2="103.2" />
				<line class="st12" x1="790.5" y1="229.3" x2="903.7" y2="150.6" />
				<line class="st12" x1="821.4" y1="274.9" x2="936.3" y2="198.7" />
				<line class="st12" x1="851.4" y1="321.2" x2="967.9" y2="247.5" />
				<line class="st12" x1="880.3" y1="368.1" x2="998.4" y2="297" />
				<line class="st12" x1="908.2" y1="415.6" x2="1027.9" y2="347.2" />
				<line class="st12" x1="935.1" y1="463.8" x2="1056.2" y2="397.9" />
				<line class="st12" x1="960.9" y1="512.5" x2="1083.4" y2="449.3" />
				<line class="st12" x1="725.6" y1="140.1" x2="741.2" y2="19.2" />
				<line class="st12" x1="271.9" y1="394" x2="126.9" y2="317.2" />
				<line class="st12" x1="320" y1="367.1" x2="252.7" y2="246.8" />
				<line class="st12" x1="374.1" y1="336.8" x2="306.8" y2="216.5" />
				<line class="st12" x1="428.2" y1="306.5" x2="360.9" y2="186.2" />
				<line class="st12" x1="482.4" y1="276.2" x2="415" y2="155.9" />
				<line class="st12" x1="530.5" y1="249.3" x2="463.2" y2="129" />
				<line class="st12" x1="578.6" y1="222.4" x2="511.3" y2="102.1" />
				<line class="st12" x1="626.7" y1="195.4" x2="559.4" y2="75.2" />
				<line class="st12" x1="674.8" y1="168.5" x2="607.5" y2="48.2" />
				<line class="st12" x1="259.5" y1="447.7" x2="105" y2="412.2" />
				<line class="st12" x1="245.6" y1="508.2" x2="91.1" y2="472.6" />
				<line class="st12" x1="231.7" y1="568.6" x2="77.2" y2="533.1" />
				<line class="st12" x1="217.7" y1="629.1" x2="63.3" y2="593.5" />
				<line class="st12" x1="203.8" y1="689.5" x2="49.3" y2="654" />
				<line class="st12" x1="189.9" y1="750" x2="35.4" y2="714.4" />
				<line class="st12" x1="153.2" y1="1113.2" x2="15.5" y2="1106.7" />
				<line class="st12" x1="156.1" y1="1051.3" x2="18.4" y2="1044.8" />
				<line class="st12" x1="159" y1="989.3" x2="21.3" y2="982.8" />
				<line class="st12" x1="162" y1="927.3" x2="24.3" y2="920.8" />
				<line class="st12" x1="164.9" y1="865.4" x2="27.2" y2="858.9" />
				<line class="st12" x1="176" y1="810.4" x2="31.1" y2="777.1" />
			</g>
			<g id="B-32"class="property__active" ng-class="zafiro.inmovablesClassList[31]" ng-click="zafiro.showPropertyData(51, '32')">
				<polyline id="B-L32" class="property pb-sprite-2" points="9.6,1232.4 69.1,1232.4 69.1,1370.2 2.2,1370.2 9.6,1232.4 	" />
				<g>
					<polyline class="st9" points="39.3,1246.2 39.3,1260.8 32,1253.5 39.3,1246.2 		" />
					<polyline class="st10" points="39.3,1246.2 46.7,1253.5 39.3,1260.8 39.3,1246.2 		" />
				</g>
				<text transform="matrix(1 0 0 1 29.9355 1242.6875)">
					<tspan x="0" y="0" class="st1 st2 st8">8.6</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">4</tspan>
				</text>
				<text transform="matrix(5.407982e-02 -0.9985 0.9985 5.407982e-02 15.7311 1314.0598)">
					<tspan x="0" y="0" class="st1 st2 st3">20.0</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st3">3</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 46.5439 1324.127)">
					<tspan x="0" y="0" class="st1 st2 st8">18</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st8">3.57 m2</tspan>
				</text>
				<text transform="matrix(1.750015e-03 -1 1 1.750015e-03 36.3986 1306.4464)"
					class="st5 st6 st13">32</text>
				<text transform="matrix(1 0 0 1 26.2324 1363.3574)">
					<tspan x="0" y="0" class="st1 st2 st8">9.7</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">2</tspan>
				</text>
			</g>
			<g id="B-33"class="property__active" ng-class="zafiro.inmovablesClassList[32]" ng-click="zafiro.showPropertyData(51, '33')">
				<polyline id="B-L33" class="property pb-sprite-1"
					points="69.1,1232.4 131.2,1232.4 131.2,1370.2 69.1,1370.2 69.1,1232.4 	" />
				<text transform="matrix(1 0 0 1 90.7266 1242.6875)">
					<tspan x="0" y="0" class="st1 st2 st8">9.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(1 0 0 1 90.7266 1363.3574)">
					<tspan x="0" y="0" class="st1 st2 st8">9.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 79.4204 1313.916)">
					<tspan x="0" y="0" class="st1 st2 st8">20.1</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st8">5</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 107.3325 1324.127)">
					<tspan x="0" y="0" class="st1 st2 st8">18</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st8">0.00 m2</tspan>
				</text>
				<text transform="matrix(1.750015e-03 -1 1 1.750015e-03 97.1858 1306.457)" class="st5 st6 st13">33</text>
			</g>
			<g id="B-34"class="property__active" ng-class="zafiro.inmovablesClassList[33]" ng-click="zafiro.showPropertyData(51, '34')">
				<polyline id="B-L34" class="property pb-sprite-2"
					points="131.2,1232.4 186.3,1232.4 186.3,1370.2 131.2,1370.2 131.2,1232.4 	" />
				<text id="_x38_.00" transform="matrix(1 0 0 1 149.3066 1242.6875)">
					<tspan x="0" y="0" class="st1 st2 st8">8.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(1 0 0 1 149.3066 1363.3574)">
					<tspan x="0" y="0" class="st1 st2 st8">8.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 141.4512 1313.916)">
					<tspan x="0" y="0" class="st1 st2 st8">20.1</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st8">5</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 165.9189 1324.127)">
					<tspan x="0" y="0" class="st1 st2 st8">16</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st8">0.00 m2</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 156.0425 1306.7998)" class="st5 st6 st8">34</text>
			</g>
			<g id="B-35"class="property__active" ng-class="zafiro.inmovablesClassList[34]" ng-click="zafiro.showPropertyData(51, '35')">
				<polyline id="B-L35" class="property pb-sprite-1"
					points="186.3,1232.4 241.4,1232.4 241.4,1370.2 186.3,1370.2 186.3,1232.4 	" />
				<text transform="matrix(1 0 0 1 204.439 1242.6875)">
					<tspan x="0" y="0" class="st1 st2 st8">8.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(1 0 0 1 204.439 1363.3574)">
					<tspan x="0" y="0" class="st1 st2 st8">8.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 196.5811 1313.916)">
					<tspan x="0" y="0" class="st1 st2 st8">20.1</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st8">5</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 221.0469 1324.127)">
					<tspan x="0" y="0" class="st1 st2 st8">16</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st8">0.00 m2</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 211.1782 1306.8018)" class="st5 st6 st8">35</text>
			</g>
			<g id="B-36"class="property__active" ng-class="zafiro.inmovablesClassList[35]" ng-click="zafiro.showPropertyData(51, '36')">
				<polyline id="B-L36" class="property pb-sprite-2"
					points="241.4,1232.4 296.6,1232.4 296.6,1370.2 241.4,1370.2 241.4,1232.4 	" />
				<text transform="matrix(1 0 0 1 259.5767 1242.6875)">
					<tspan x="0" y="0" class="st1 st2 st8">8.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(1 0 0 1 259.5767 1363.3574)">
					<tspan x="0" y="0" class="st1 st2 st8">8.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 251.7207 1313.916)">
					<tspan x="0" y="0" class="st1 st2 st8">20.1</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st8">5</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 276.1846 1324.127)">
					<tspan x="0" y="0" class="st1 st2 st8">16</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st8">0.00 m2</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 266.3164 1306.7998)" class="st5 st6 st8">36</text>
			</g>
			<g id="B-37"class="property__active" ng-class="zafiro.inmovablesClassList[36]" ng-click="zafiro.showPropertyData(51, '37')">
				<polyline id="B-L37" class="property pb-sprite-1"
					points="296.6,1232.4 351.7,1232.4 351.7,1370.2 296.6,1370.2 296.6,1232.4 	" />
				<text transform="matrix(1 0 0 1 314.7104 1242.6875)">
					<tspan x="0" y="0" class="st1 st2 st8">8.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(1 0 0 1 314.7104 1363.3574)">
					<tspan x="0" y="0" class="st1 st2 st8">8.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 306.8545 1313.916)">
					<tspan x="0" y="0" class="st1 st2 st8">20.1</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st8">5</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 331.3203 1324.127)">
					<tspan x="0" y="0" class="st1 st2 st8">16</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st8">0.00 m2</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 321.4502 1306.8018)" class="st5 st6 st8">37</text>
			</g>
			<g id="B-38"class="property__active" ng-class="zafiro.inmovablesClassList[37]" ng-click="zafiro.showPropertyData(51, '38')">
				<polyline id="B-L38" class="property pb-sprite-2"
					points="351.7,1232.4 406.8,1232.4 406.8,1370.2 351.7,1370.2 351.7,1232.4 	" />
				<text transform="matrix(1 0 0 1 369.8462 1242.6875)">
					<tspan x="0" y="0" class="st1 st2 st8">8.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(1 0 0 1 369.8462 1363.3574)">
					<tspan x="0" y="0" class="st1 st2 st8">8.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 361.9902 1313.916)">
					<tspan x="0" y="0" class="st1 st2 st8">20.1</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st8">5</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 386.458 1324.127)">
					<tspan x="0" y="0" class="st1 st2 st8">16</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st8">0.00 m2</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 376.5859 1306.8018)" class="st5 st6 st8">38</text>
			</g>
			<g id="B-39"class="property__active" ng-class="zafiro.inmovablesClassList[38]" ng-click="zafiro.showPropertyData(51, '39')">
				<polyline id="B-L39" class="property pb-sprite-1"
					points="406.8,1232.4 462,1232.4 462,1370.2 406.8,1370.2 406.8,1232.4 	" />
				<text transform="matrix(1 0 0 1 424.9819 1242.6875)">
					<tspan x="0" y="0" class="st1 st2 st8">8.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(1 0 0 1 424.9819 1363.3574)">
					<tspan x="0" y="0" class="st1 st2 st8">8.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 417.126 1313.9219)">
					<tspan x="0" y="0" class="st1 st2 st8">20.1</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st8">5</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 441.5938 1324.1309)">
					<tspan x="0" y="0" class="st1 st2 st8">16</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st8">0.00 m2</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 431.7197 1306.7998)" class="st5 st6 st8">39</text>
			</g>
			<g id="B-40" class="property__active" ng-class="zafiro.inmovablesClassList[39]" ng-click="zafiro.showPropertyData(51, '40')">
				<polyline id="B-L40" class="property pb-sprite-2"
					points="462,1232.4 517.1,1232.4 517.1,1370.2 462,1370.2 462,1232.4 	" />
				<text transform="matrix(1 0 0 1 480.1177 1242.6875)">
					<tspan x="0" y="0" class="st1 st2 st8">8.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(1 0 0 1 480.1177 1363.3574)">
					<tspan x="0" y="0" class="st1 st2 st8">8.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 472.2622 1313.9219)">
					<tspan x="0" y="0" class="st1 st2 st8">20.1</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st8">5</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 496.73 1324.1309)">
					<tspan x="0" y="0" class="st1 st2 st8">16</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st8">0.00 m2</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 486.8555 1306.8018)" class="st5 st6 st8">40</text>
			</g>
			<g id="B-41" class="property__active" ng-class="zafiro.inmovablesClassList[40]" ng-click="zafiro.showPropertyData(51, '41')">
				<polyline id="B-L41" class="property pb-sprite-1"
					points="517.1,1232.4 572.2,1232.4 572.2,1370.2 517.1,1370.2 517.1,1232.4 	" />
				<text transform="matrix(1 0 0 1 535.2578 1242.6875)">
					<tspan x="0" y="0" class="st1 st2 st8">8.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(1 0 0 1 535.2578 1363.3574)">
					<tspan x="0" y="0" class="st1 st2 st8">8.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 527.3999 1313.9219)">
					<tspan x="0" y="0" class="st1 st2 st8">20.1</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st8">5</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 551.8618 1324.1309)">
					<tspan x="0" y="0" class="st1 st2 st8">16</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st8">0.00 m2</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 541.9893 1306.8018)" class="st5 st6 st8">41</text>
			</g>
			<g id="B-42" class="property__active" ng-class="zafiro.inmovablesClassList[41]" ng-click="zafiro.showPropertyData(51, '42')">
				<polyline id="B-L42" class="property pb-sprite-2"
					points="572.2,1232.4 627.4,1232.4 627.4,1370.2 572.2,1370.2 572.2,1232.4 	" />
				<text transform="matrix(1 0 0 1 590.3877 1242.6875)">
					<tspan x="0" y="0" class="st1 st2 st8">8.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(1 0 0 1 590.3877 1363.3574)">
					<tspan x="0" y="0" class="st1 st2 st8">8.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 582.5278 1313.9219)">
					<tspan x="0" y="0" class="st1 st2 st8">20.1</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st8">5</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 606.9995 1324.1309)">
					<tspan x="0" y="0" class="st1 st2 st8">16</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st8">0.00 m2</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 597.1274 1306.8018)" class="st5 st6 st8">42</text>
			</g>
			<g id="B-43" class="property__active" ng-class="zafiro.inmovablesClassList[42]" ng-click="zafiro.showPropertyData(51, '43')">
				<polyline id="B-L43" class="property pb-sprite-1"
					points="627.4,1232.4 682.5,1232.4 682.5,1370.2 627.4,1370.2 627.4,1232.4 	" />
				<text transform="matrix(1 0 0 1 645.5254 1242.6875)">
					<tspan x="0" y="0" class="st1 st2 st8">8.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(1 0 0 1 645.5254 1363.3574)">
					<tspan x="0" y="0" class="st1 st2 st8">8.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 637.6675 1313.9219)">
					<tspan x="0" y="0" class="st1 st2 st8">20.1</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st8">5</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 662.1396 1324.1309)">
					<tspan x="0" y="0" class="st1 st2 st8">16</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st8">0.00 m2</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 652.2607 1306.8057)" class="st5 st6 st8">43</text>
			</g>
			<g id="B-44" class="property__active" ng-class="zafiro.inmovablesClassList[43]" ng-click="zafiro.showPropertyData(51, '44')">
				<polyline id="B-L44" class="property pb-sprite-2"
					points="682.5,1232.4 737.6,1232.4 737.6,1370.2 682.5,1370.2 682.5,1232.4 	" />
				<text transform="matrix(1 0 0 1 700.6631 1242.6875)">
					<tspan x="0" y="0" class="st1 st2 st8">8.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(1 0 0 1 700.6631 1363.3574)">
					<tspan x="0" y="0" class="st1 st2 st8">8.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 692.8018 1313.9258)">
					<tspan x="0" y="0" class="st1 st2 st8">20.1</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st8">5</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 717.2656 1324.1309)">
					<tspan x="0" y="0" class="st1 st2 st8">16</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st8">0.00 m2</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 708.8994 1306.8018)" class="st5 st6 st8">44</text>
			</g>
			<g id="B-45" class="property__active" ng-class="zafiro.inmovablesClassList[44]" ng-click="zafiro.showPropertyData(51, '45')">
				<polyline id="B-L45" class="property pb-sprite-1"
					points="737.6,1232.4 792.8,1232.4 792.8,1370.2 737.6,1370.2 737.6,1232.4 	" />
				<text transform="matrix(1 0 0 1 755.793 1242.6875)">
					<tspan x="0" y="0" class="st1 st2 st8">8.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(1 0 0 1 755.793 1363.3574)">
					<tspan x="0" y="0" class="st1 st2 st8">8.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 747.9395 1313.9219)">
					<tspan x="0" y="0" class="st1 st2 st8">20.1</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st8">5</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 772.4072 1324.1309)">
					<tspan x="0" y="0" class="st1 st2 st8">16</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st8">0.00 m2</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 762.5332 1306.8057)" class="st5 st6 st8">45</text>
			</g>
			<g id="B-46" class="property__active" ng-class="zafiro.inmovablesClassList[45]" ng-click="zafiro.showPropertyData(51, '46')">
				<polyline id="B-L46" class="property pb-sprite-2"
					points="792.8,1232.4 847.9,1232.4 847.9,1370.2 792.8,1370.2 792.8,1232.4 	" />
				<text transform="matrix(1 0 0 1 810.9307 1242.6875)">
					<tspan x="0" y="0" class="st1 st2 st8">8.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(1 0 0 1 810.9307 1363.3574)">
					<tspan x="0" y="0" class="st1 st2 st8">8.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 803.0732 1313.9219)">
					<tspan x="0" y="0" class="st1 st2 st8">20.1</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st8">5</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 827.5449 1324.1309)">
					<tspan x="0" y="0" class="st1 st2 st8">16</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st8">0.00 m2</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 817.6748 1306.8018)" class="st5 st6 st8">46</text>
			</g>
			<g id="B-47" class="property__active" ng-class="zafiro.inmovablesClassList[46]" ng-click="zafiro.showPropertyData(51, '47')">
				<polyline id="B-L47" class="property pb-sprite-1"
					points="847.9,1232.4 903,1232.4 903,1370.2 847.9,1370.2 847.9,1232.4 	" />
				<text transform="matrix(1 0 0 1 866.0684 1242.6875)">
					<tspan x="0" y="0" class="st1 st2 st8">8.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(1 0 0 1 866.0684 1363.3574)">
					<tspan x="0" y="0" class="st1 st2 st8">8.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 858.2109 1313.9219)">
					<tspan x="0" y="0" class="st1 st2 st8">20.1</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st8">5</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 882.6787 1324.1309)">
					<tspan x="0" y="0" class="st1 st2 st8">16</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st8">0.00 m2</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 872.8047 1306.8096)" class="st5 st6 st8">47</text>
			</g>
			<g id="B-49" class="property__active" ng-class="zafiro.inmovablesClassList[48]" ng-click="zafiro.showPropertyData(51, '49')">
				<polyline id="B-L49" class="property pb-sprite-1"
					points="958.2,1232.4 1013.3,1232.4 1013.3,1370.2 958.2,1370.2 958.2,1232.4 	" />
				<text transform="matrix(1 0 0 1 976.3379 1242.6875)">
					<tspan x="0" y="0" class="st1 st2 st8">8.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(1 0 0 1 976.3379 1363.3574)">
					<tspan x="0" y="0" class="st1 st2 st8">8.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 968.4824 1313.9219)">
					<tspan x="0" y="0" class="st1 st2 st8">20.1</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st8">5</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 992.9443 1324.1309)">
					<tspan x="0" y="0" class="st1 st2 st8">16</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st8">0.00 m2</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 983.0781 1306.8096)" class="st5 st6 st8">49</text>
			</g>
			<g id="B-50" class="property__active" ng-class="zafiro.inmovablesClassList[49]" ng-click="zafiro.showPropertyData(51, '50')">
				<polyline id="B-L50" class="property pb-sprite-2"
					points="1013.3,1232.4 1068.4,1232.4 1068.4,1370.2 1013.3,1370.2 1013.3,1232.4 	" />
				<text transform="matrix(1 0 0 1 1031.4717 1242.6875)">
					<tspan x="0" y="0" class="st1 st2 st8">8.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(1 0 0 1 1031.4717 1363.3574)">
					<tspan x="0" y="0" class="st1 st2 st8">8.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 1023.6201 1313.9219)">
					<tspan x="0" y="0" class="st1 st2 st8">20.1</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st8">5</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 1048.082 1324.1309)">
					<tspan x="0" y="0" class="st1 st2 st8">16</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st8">0.00 m2</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 1038.2158 1306.8018)" class="st5 st6 st8">50</text>
			</g>
			<g id="B-51" class="property__active" ng-class="zafiro.inmovablesClassList[50]" ng-click="zafiro.showPropertyData(51, '51')">
				<polyline id="B-L51" class="property pb-sprite-1"
					points="1068.4,1232.4 1123.6,1232.4 1123.6,1370.2 1068.4,1370.2 1068.4,1232.4 	" />
				<text transform="matrix(1 0 0 1 1086.6025 1242.6875)">
					<tspan x="0" y="0" class="st1 st2 st8">8.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(1 0 0 1 1086.6025 1363.3574)">
					<tspan x="0" y="0" class="st1 st2 st8">8.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 1078.75 1313.9219)">
					<tspan x="0" y="0" class="st1 st2 st8">20.1</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st8">5</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 1103.2197 1324.1309)">
					<tspan x="0" y="0" class="st1 st2 st8">16</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st8">0.00 m2</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 1093.3438 1306.8018)" class="st5 st6 st8">51</text>
			</g>
			<g id="B-52" class="property__active" ng-class="zafiro.inmovablesClassList[51]" ng-click="zafiro.showPropertyData(51, '52')">
				<polyline id="B-L52" class="property pb-sprite-2"
					points="1123.6,1232.4 1178.7,1232.4 1178.7,1370.2 1123.6,1370.2 1123.6,1232.4 	" />
				<text transform="matrix(1 0 0 1 1141.7402 1242.6875)">
					<tspan x="0" y="0" class="st1 st2 st8">8.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(1 0 0 1 1141.7402 1363.3574)">
					<tspan x="0" y="0" class="st1 st2 st8">8.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 1133.8838 1313.9219)">
					<tspan x="0" y="0" class="st1 st2 st8">20.1</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st8">5</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 1158.3535 1324.1309)">
					<tspan x="0" y="0" class="st1 st2 st8">16</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st8">0.00 m2</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 1148.4814 1306.8018)" class="st5 st6 st8">52</text>
			</g>
			<g id="B-48" class="property__active" ng-class="zafiro.inmovablesClassList[47]" ng-click="zafiro.showPropertyData(51, '48')">
				<polyline id="B-L48" class="property pb-sprite-2"
					points="903,1232.4 958.2,1232.4 958.2,1370.2 903,1370.2 903,1232.4 	" />
				<text transform="matrix(1 0 0 1 921.2002 1242.6875)">
					<tspan x="0" y="0" class="st1 st2 st8">8.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(1 0 0 1 921.2002 1363.3574)">
					<tspan x="0" y="0" class="st1 st2 st8">8.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 913.3486 1313.9219)">
					<tspan x="0" y="0" class="st1 st2 st8">20.1</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st8">5</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 937.8066 1324.1309)">
					<tspan x="0" y="0" class="st1 st2 st8">16</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st8">0.00 m2</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 927.9404 1306.8018)" class="st5 st6 st8">48</text>
			</g>
			<g id="B-53" class="property__active" ng-class="zafiro.inmovablesClassList[52]" ng-click="zafiro.showPropertyData(51, '53')">
				<polyline id="B-L53" class="property pb-sprite-1"
					points="1178.7,1232.4 1233.9,1232.4 1233.9,1370.2 1178.7,1370.2 1178.7,1232.4 	" />
				<text transform="matrix(1 0 0 1 1196.8818 1242.6875)">
					<tspan x="0" y="0" class="st1 st2 st8">8.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(1 0 0 1 1196.8818 1363.3574)">
					<tspan x="0" y="0" class="st1 st2 st8">8.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 1189.0215 1313.9219)">
					<tspan x="0" y="0" class="st1 st2 st8">20.1</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st8">5</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 1213.4873 1324.1309)">
					<tspan x="0" y="0" class="st1 st2 st8">16</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st8">0.00 m2</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 1203.6152 1306.8018)" class="st5 st6 st8">53</text>
			</g>
			<g id="B-54" class="property__active" ng-class="zafiro.inmovablesClassList[53]" ng-click="zafiro.showPropertyData(51, '54')">
				<polyline id="B-L54" class="property pb-sprite-2"
					points="1233.9,1232.4 1289,1232.4 1289,1370.2 1233.9,1370.2 1233.9,1232.4 	" />
				<text transform="matrix(1 0 0 1 1252.0098 1242.6875)">
					<tspan x="0" y="0" class="st1 st2 st8">8.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(1 0 0 1 1252.0098 1363.3574)">
					<tspan x="0" y="0" class="st1 st2 st8">8.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 1244.1592 1313.9219)">
					<tspan x="0" y="0" class="st1 st2 st8">20.1</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st8">5</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 1268.6211 1324.1309)">
					<tspan x="0" y="0" class="st1 st2 st8">16</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st8">0.00 m2</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 1258.749 1306.8057)" class="st5 st6 st8">54</text>
			</g>
			<g id="B-55" class="property__active" ng-class="zafiro.inmovablesClassList[54]" ng-click="zafiro.showPropertyData(51, '55')">
				<polyline id="B-L55" class="property pb-sprite-1"
					points="1289,1232.4 1344.1,1232.4 1354.8,1301.2 1363.6,1370.2 1289,1370.2 1289,1232.4 	" />
				<g>
					<polyline class="st9" points="1316.6,1246.2 1316.6,1260.8 1309.3,1253.5 1316.6,1246.2 		" />
					<polyline class="st10" points="1316.6,1246.2 1323.9,1253.5 1316.6,1260.8 1316.6,1246.2 		" />
				</g>
				<text transform="matrix(1 0 0 1 1307.1533 1242.6875)">
					<tspan x="0" y="0" class="st1 st2 st8">8.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(1 0 0 1 1314.1895 1363.3574)">
					<tspan x="0" y="0" class="st1 st2 st8">10.8</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st8">2</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 1299.2891 1313.9219)">
					<tspan x="0" y="0" class="st1 st2 st8">20.1</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st8">5</tspan>
				</text>
				<text transform="matrix(0.1392 0.9903 -0.9903 0.1392 1342.861 1290.689)">
					<tspan x="0" y="0" class="st1 st2 st3">20.2</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st3">0</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 1323.7549 1324.1309)">
					<tspan x="0" y="0" class="st1 st2 st8">19</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st8">0.01 m2</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 1313.8867 1306.8018)" class="st5 st6 st8">55</text>
			</g>
			<g id="DIVISIONES_9_">
				<line class="st12" x1="69.1" y1="1232.4" x2="69.1" y2="1370.2" />
				<line class="st12" x1="131.2" y1="1232.4" x2="131.2" y2="1370.2" />
				<line class="st12" x1="186.3" y1="1232.4" x2="186.3" y2="1370.2" />
				<line class="st12" x1="241.4" y1="1232.4" x2="241.4" y2="1370.2" />
				<line class="st12" x1="296.6" y1="1232.4" x2="296.6" y2="1370.2" />
				<line class="st12" x1="351.7" y1="1232.4" x2="351.7" y2="1370.2" />
				<line class="st12" x1="406.8" y1="1232.4" x2="406.8" y2="1370.2" />
				<line class="st12" x1="462" y1="1232.4" x2="462" y2="1370.2" />
				<line class="st12" x1="517.1" y1="1232.4" x2="517.1" y2="1370.2" />
				<line class="st12" x1="572.2" y1="1232.4" x2="572.2" y2="1370.2" />
				<line class="st12" x1="627.4" y1="1232.4" x2="627.4" y2="1370.2" />
				<line class="st12" x1="682.5" y1="1232.4" x2="682.5" y2="1370.2" />
				<line class="st12" x1="737.6" y1="1232.4" x2="737.6" y2="1370.2" />
				<line class="st12" x1="792.8" y1="1232.4" x2="792.8" y2="1370.2" />
				<line class="st12" x1="847.9" y1="1232.4" x2="847.9" y2="1370.2" />
				<line class="st12" x1="903" y1="1232.4" x2="903" y2="1370.2" />
				<line class="st12" x1="958.2" y1="1232.4" x2="958.2" y2="1370.2" />
				<line class="st12" x1="1013.3" y1="1232.4" x2="1013.3" y2="1370.2" />
				<line class="st12" x1="1068.4" y1="1232.4" x2="1068.4" y2="1370.2" />
				<line class="st12" x1="1123.6" y1="1232.4" x2="1123.6" y2="1370.2" />
				<line class="st12" x1="1178.7" y1="1232.4" x2="1178.7" y2="1370.2" />
				<line class="st12" x1="1233.9" y1="1232.4" x2="1233.9" y2="1370.2" />
				<line class="st12" x1="1289" y1="1232.4" x2="1289" y2="1370.2" />
			</g>
			<g id="C-56_2_" class="property__active" ng-class="zafiro.inmovablesClassList[55]" ng-click="zafiro.showPropertyData(51, '56')">
				<polyline id="C-L56_2_" class="property pb-sprite-2"
					points="1180.4,1114.4 1314.9,1083.9 1324,1126 1332.6,1168.3 1192,1168.3 1180.4,1114.4 	" />
				<g>
					<polyline class="st9" points="1207.2,1131.1 1207.2,1145.7 1199.9,1138.4 1207.2,1131.1 		" />
					<polyline class="st10" points="1207.2,1131.1 1214.5,1138.4 1207.2,1145.7 1207.2,1131.1 		" />
				</g>
				<text transform="matrix(0.2096 0.9778 -0.9778 0.2096 1187.6594 1131.3208)">
					<tspan x="0" y="0" class="st1 st2 st3">8.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st3">0</tspan>
				</text>
				<text transform="matrix(0.2045 0.9789 -0.9789 0.2045 1311.6588 1116.5596)">
					<tspan x="0" y="0" class="st1 st2 st3">12.5</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st3">1</tspan>
				</text>
				<text transform="matrix(0.9755 -0.2199 0.2199 0.9755 1238.1677 1111.6685)">
					<tspan x="0" y="0" class="st1 st2 st8">20.0</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(1 0 0 1 1250.1953 1164.8125)">
					<tspan x="0" y="0" class="st1 st2 st8">20.3</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st8">9</tspan>
				</text>
				<text transform="matrix(0.9755 -0.2199 0.2199 0.9755 1233.1782 1137.9614)">
					<tspan x="0" y="0" class="st1 st2 st8">20</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st8">5.12 m2</tspan>
				</text>
				<text transform="matrix(0.9755 -0.2199 0.2199 0.9755 1247.866 1124.5106)" class="st5 st6 st8">56</text>
			</g>
			<g id="C-57_2_" class="property__active" ng-class="zafiro.inmovablesClassList[56]" ng-click="zafiro.showPropertyData(51, '57')">
				<polyline id="C-L57_2_" class="property pb-sprite-1"
					points="1167.7,1060.8 1301.4,1027.4 1314.9,1083.9 1180.4,1114.4 1167.7,1060.8 	" />
				<text transform="matrix(0.23 0.9732 -0.9732 0.23 1175.4524 1077.6553)">
					<tspan x="0" y="0" class="st1 st2 st3">8.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st3">0</tspan>
				</text>
				<text transform="matrix(0.23 0.9732 -0.9732 0.23 1296.1121 1048.9167)">
					<tspan x="0" y="0" class="st1 st2 st3">8.4</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st3">4</tspan>
				</text>
				<text transform="matrix(0.9703 -0.2419 0.2419 0.9703 1225.4923 1057.2626)">
					<tspan x="0" y="0" class="st1 st2 st3">20.0</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st3">0</tspan>
				</text>
				<text transform="matrix(0.9703 -0.2419 0.2419 0.9703 1221.3745 1083.5865)">
					<tspan x="0" y="0" class="st1 st2 st3">16</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st3">4.35 m2</tspan>
				</text>
				<text transform="matrix(0.9703 -0.2419 0.2419 0.9703 1235.4718 1069.9376)" class="st5 st6 st3">57</text>
			</g>
			<g id="C-58_2_" class="property__active" ng-class="zafiro.inmovablesClassList[57]" ng-click="zafiro.showPropertyData(51, '58')">
				<polyline id="C-L58_2_" class="property pb-sprite-2"
					points="1153.7,1007.4 1286.7,971.1 1301.4,1027.4 1167.7,1060.8 1153.7,1007.4 	" />
				<text transform="matrix(0.2521 0.9677 -0.9677 0.2521 1161.8866 1024.1361)">
					<tspan x="0" y="0" class="st1 st2 st3">8.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st3">0</tspan>
				</text>
				<text transform="matrix(0.2521 0.9677 -0.9677 0.2521 1281.8969 992.7738)">
					<tspan x="0" y="0" class="st1 st2 st3">8.4</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st3">4</tspan>
				</text>
				<text transform="matrix(0.965 -0.2622 0.2622 0.965 1211.4856 1002.6022)">
					<tspan x="0" y="0" class="st1 st2 st3">20.0</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st3">0</tspan>
				</text>
				<text transform="matrix(0.965 -0.2622 0.2622 0.965 1207.8524 1029.0331)">
					<tspan x="0" y="0" class="st1 st2 st3">16</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st3">4.35 m2</tspan>
				</text>
				<text transform="matrix(0.965 -0.2622 0.2622 0.965 1221.7449 1015.057)" class="st5 st6 st3">58</text>
			</g>
			<g id="C-59_2_" class="property__active" ng-class="zafiro.inmovablesClassList[58]" ng-click="zafiro.showPropertyData(51, '59')">
				<polyline id="C-L59_2_" class="property pb-sprite-1"
					points="1138.6,954.4 1270.8,915.2 1286.7,971.1 1153.7,1007.4 1138.6,954.4 	" />
				<text transform="matrix(0.2723 0.9622 -0.9622 0.2723 1147.158 970.9689)">
					<tspan x="0" y="0" class="st1 st2 st3">8.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st3">0</tspan>
				</text>
				<text transform="matrix(0.2723 0.9622 -0.9622 0.2723 1266.4596 937.0101)">
					<tspan x="0" y="0" class="st1 st2 st3">8.4</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st3">4</tspan>
				</text>
				<text transform="matrix(0.9588 -0.284 0.284 0.9588 1196.1809 948.104)">
					<tspan x="0" y="0" class="st1 st2 st3">20.0</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st3">0</tspan>
				</text>
				<text transform="matrix(0.9588 -0.284 0.284 0.9588 1192.7244 977.314)">
					<tspan x="0" y="0" class="st1 st2 st3">16</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st3">4.35 m2</tspan>
				</text>
				<text transform="matrix(0.9588 -0.284 0.284 0.9588 1206.6947 960.2957)" class="st5 st6 st3">59</text>
			</g>
			<g id="C-60_2_" class="property__active" ng-class="zafiro.inmovablesClassList[59]" ng-click="zafiro.showPropertyData(51, '60')" >
				<polyline id="C-L60_2_" class="property pb-sprite-2"
					points="1122.4,901.7 1253.6,859.7 1270.8,915.2 1138.6,954.4 1122.4,901.7 	" />
				<text transform="matrix(0.294 0.9558 -0.9558 0.294 1131.0408 917.8763)">
					<tspan x="0" y="0" class="st1 st2 st3">8.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st3">0</tspan>
				</text>
				<text transform="matrix(0.294 0.9558 -0.9558 0.294 1249.571 881.3298)">
					<tspan x="0" y="0" class="st1 st2 st3">8.4</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st3">4</tspan>
				</text>
				<text transform="matrix(0.9527 -0.304 0.304 0.9527 1179.4458 894.1012)">
					<tspan x="0" y="0" class="st1 st2 st8">20.0</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0.9527 -0.304 0.304 0.9527 1177.1594 920.6026)">
					<tspan x="0" y="0" class="st1 st2 st8">16</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st8">4.35 m2</tspan>
				</text>
				<text transform="matrix(0.9527 -0.304 0.304 0.9527 1190.219 906.0599)" class="st5 st6 st8">60</text>
			</g>
			<g id="C-61_2_" class="property__active" ng-class="zafiro.inmovablesClassList[60]" ng-click="zafiro.showPropertyData(51, '61')">
				<polyline id="C-L61_2_" class="property pb-sprite-1"
					points="1105,849.4 1235.3,804.5 1253.6,859.7 1122.4,901.7 1105,849.4 	" />
				<text transform="matrix(0.314 0.9494 -0.9494 0.314 1114.2279 865.658)">
					<tspan x="0" y="0" class="st1 st2 st3">8.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st3">0</tspan>
				</text>
				<text transform="matrix(0.314 0.9494 -0.9494 0.314 1231.9343 826.5405)">
					<tspan x="0" y="0" class="st1 st2 st3">8.4</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st3">4</tspan>
				</text>
				<text transform="matrix(0.9455 -0.3256 0.3256 0.9455 1162.2041 840.6929)">
					<tspan x="0" y="0" class="st1 st2 st3">20.0</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st3">0</tspan>
				</text>
				<text transform="matrix(0.9455 -0.3256 0.3256 0.9455 1159.9139 867.4313)">
					<tspan x="0" y="0" class="st1 st2 st3">16</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st3">4.35 m2</tspan>
				</text>
				<text transform="matrix(0.9455 -0.3256 0.3256 0.9455 1173.2393 852.4042)" class="st5 st6 st3">61</text>
			</g>
			<g id="C-62_2_" class="property__active" ng-class="zafiro.inmovablesClassList[61]" ng-click="zafiro.showPropertyData(51, '62')">
				<polyline id="C-L62_2_" class="property pb-sprite-2"
					points="1086.5,797.5 1215.8,749.7 1235.3,804.5 1105,849.4 1086.5,797.5 	" />
				<text transform="matrix(0.3354 0.9421 -0.9421 0.3354 1096.0078 813.4219)">
					<tspan x="0" y="0" class="st1 st2 st3">8.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st3">0</tspan>
				</text>
				<text transform="matrix(0.3354 0.9421 -0.9421 0.3354 1212.8362 771.7542)">
					<tspan x="0" y="0" class="st1 st2 st3">8.4</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st3">4</tspan>
				</text>
				<text transform="matrix(0.9385 -0.3453 0.3453 0.9385 1143.4691 787.337)">
					<tspan x="0" y="0" class="st1 st2 st3">20.0</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st3">0</tspan>
				</text>
				<text transform="matrix(0.9385 -0.3453 0.3453 0.9385 1142.4047 813.8864)">
					<tspan x="0" y="0" class="st1 st2 st3">16</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st3">4.35 m2</tspan>
				</text>
				<text transform="matrix(0.9385 -0.3453 0.3453 0.9385 1154.7561 798.8052)" class="st5 st6 st3">62</text>
			</g>
			<g id="C-63_2_" class="property__active" ng-class="zafiro.inmovablesClassList[62]" ng-click="zafiro.showPropertyData(51, '63')">
				<polyline id="C-L63_2_" class="property pb-sprite-1"
					points="1215.8,749.7 1086.5,797.5 1066.8,745.9 1195.1,695.4 1215.8,749.7 	" />
				<g>
					<polyline class="st9" points="1097,759.4 1097,774 1089.7,766.7 1097,759.4 		" />
					<polyline class="st10" points="1097,759.4 1104.3,766.7 1097,774 1097,759.4 		" />
				</g>
				<text transform="matrix(0.3551 0.9348 -0.9348 0.3551 1076.9081 761.9489)">
					<tspan x="0" y="0" class="st1 st2 st4">8.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st4">0</tspan>
				</text>
				<text transform="matrix(0.3551 0.9348 -0.9348 0.3551 1192.8124 717.7494)">
					<tspan x="0" y="0" class="st1 st2 st4">8.4</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st4">4</tspan>
				</text>
				<text transform="matrix(0.9304 -0.3665 0.3665 0.9304 1123.5637 734.8395)">
					<tspan x="0" y="0" class="st1 st2 st3">20.0</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st3">0</tspan>
				</text>
				<text transform="matrix(0.9304 -0.3665 0.3665 0.9304 1123.5924 761.2465)">
					<tspan x="0" y="0" class="st1 st2 st3">16</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st3">4.35 m2</tspan>
				</text>
				<text transform="matrix(0.9304 -0.3665 0.3665 0.9304 1135.0988 746.068)" class="st5 st6 st3">63</text>
			</g>
			<g id="DIVISIONES_8_">
				<line class="st12" x1="1066.8" y1="745.9" x2="1195.1" y2="695.4" />
				<line class="st12" x1="1086.5" y1="797.5" x2="1215.8" y2="749.7" />
				<line class="st12" x1="1105" y1="849.4" x2="1235.3" y2="804.5" />
				<line class="st12" x1="1122.4" y1="901.7" x2="1253.6" y2="859.7" />
				<line class="st12" x1="1138.6" y1="954.4" x2="1270.8" y2="915.2" />
				<line class="st12" x1="1153.7" y1="1007.4" x2="1286.7" y2="971.1" />
				<line class="st12" x1="1167.7" y1="1060.8" x2="1301.4" y2="1027.4" />
				<line class="st12" x1="1180.4" y1="1114.4" x2="1314.9" y2="1083.9" />
			</g>
			<g id="D-64" class="property__active" ng-class="zafiro.inmovablesClassList[63]" ng-click="zafiro.showPropertyData(51, '64')">
				<polyline id="D-L64" class="property pb-sprite-2" points="847.6,744.4 973.3,687.6 998.8,748.5 871,800.2 847.6,744.4 	" />
				<g>
					<polyline class="st9" points="966.3,716.1 966.3,730.7 958.9,723.4 966.3,716.1 		" />
					<polyline class="st10" points="966.3,716.1 973.6,723.4 966.3,730.7 966.3,716.1 		" />
				</g>
				<text transform="matrix(0.3859 0.9225 -0.9225 0.3859 973.2906 713.5509)">
					<tspan x="0" y="0" class="st1 st2 st3">9.5</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st3">8</tspan>
				</text>
				<text transform="matrix(0.3859 0.9225 -0.9225 0.3859 859.2658 762.4229)">
					<tspan x="0" y="0" class="st1 st2 st3">8.7</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st3">9</tspan>
				</text>
				<text transform="matrix(0.9121 -0.4099 0.4099 0.9121 903.5322 730.3575)">
					<tspan x="0" y="0" class="st1 st2 st8">20.0</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0.9272 -0.3746 0.3746 0.9272 905.5518 761.0065)">
					<tspan x="0" y="0" class="st1 st2 st3">18</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st3">3.65 m2</tspan>
				</text>
				<text transform="matrix(0.9121 -0.4099 0.4099 0.9121 917.7311 745.7234)" class="st5 st6 st8">64</text>
			</g>
			<g id="D-65" class="property__active" ng-class="zafiro.inmovablesClassList[64]" ng-click="zafiro.showPropertyData(51, '65')">
				<polyline id="D-L65" class="property pb-sprite-1"
					points="871,800.2 998.8,748.5 1020.1,802.9 891.1,851.5 879.8,822.2 871,800.2 	" />
				<text transform="matrix(0.3633 0.9317 -0.9317 0.3633 996.5181 770.5075)">
					<tspan x="0" y="0" class="st1 st2 st8">8.4</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">7</tspan>
				</text>
				<text transform="matrix(0.3633 0.9317 -0.9317 0.3633 880.9729 815.6573)">
					<tspan x="0" y="0" class="st1 st2 st8">8.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0.9272 -0.3746 0.3746 0.9272 927.7328 788.282)">
					<tspan x="0" y="0" class="st1 st2 st3">20.0</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st3">0</tspan>
				</text>
				<text transform="matrix(0.9272 -0.3746 0.3746 0.9272 927.3364 815.0496)">
					<tspan x="0" y="0" class="st1 st2 st3">16</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st3">4.73 m2</tspan>
				</text>
				<text transform="matrix(0.9272 -0.3746 0.3746 0.9272 939.1544 798.0633)" class="st5 st6 st3">65</text>
			</g>
			<g id="D-66" class="property__active" ng-class="zafiro.inmovablesClassList[65]" ng-click="zafiro.showPropertyData(51, '66')">
				<polyline id="D-L66" class="property pb-sprite-2" points="891.1,851.5 1020.1,802.9 1040,857.8 910,903.4 891.1,851.5 	" />
				<text transform="matrix(0.3404 0.9403 -0.9403 0.3404 1017.3734 825.0671)">
					<tspan x="0" y="0" class="st1 st2 st3">8.4</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st3">7</tspan>
				</text>
				<text transform="matrix(0.3404 0.9403 -0.9403 0.3404 900.796 867.4783)">
					<tspan x="0" y="0" class="st1 st2 st3">8.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st3">0</tspan>
				</text>
				<text transform="matrix(0.9361 -0.3518 0.3518 0.9361 947.8819 841.1553)">
					<tspan x="0" y="0" class="st1 st2 st8">20.0</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0.9361 -0.3518 0.3518 0.9361 946.9153 867.8883)">
					<tspan x="0" y="0" class="st1 st2 st8">16</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st8">4.73 m2</tspan>
				</text>
				<text transform="matrix(0.9272 -0.3746 0.3746 0.9272 957.7589 852.6425)" class="st5 st6 st3">66</text>
			</g>
			<g id="D-67" class="property__active" ng-class="zafiro.inmovablesClassList[66]" ng-click="zafiro.showPropertyData(51, '67')">
				<polyline id="D-L67" class="property pb-sprite-1"
					points="910,903.4 1040,857.8 1058.7,913.1 927.6,955.6 924.5,946.2 910,903.4 	" />
				<text transform="matrix(0.319 0.9478 -0.9478 0.319 1036.8402 879.8724)">
					<tspan x="0" y="0" class="st1 st2 st3">8.4</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st3">7</tspan>
				</text>
				<text transform="matrix(0.319 0.9478 -0.9478 0.319 919.293 919.519)">
					<tspan x="0" y="0" class="st1 st2 st3">8.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st3">0</tspan>
				</text>
				<text transform="matrix(0.9438 -0.3305 0.3305 0.9438 966.8038 894.2269)">
					<tspan x="0" y="0" class="st1 st2 st8">20.0</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0.9438 -0.3305 0.3305 0.9438 965.5109 920.8206)">
					<tspan x="0" y="0" class="st1 st2 st8">16</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st8">4.73 m2</tspan>
				</text>
				<text transform="matrix(0.9272 -0.3746 0.3746 0.9272 977.1522 906.6679)" class="st5 st6 st3">67</text>
			</g>
			<g id="D-68" class="property__active" ng-class="zafiro.inmovablesClassList[67]" ng-click="zafiro.showPropertyData(51, '68')">
				<polyline id="D-L68" class="property pb-sprite-2"
					points="927.6,955.6 1058.7,913.1 1076.1,968.8 944,1008.2 927.6,955.6 	" />
				<text transform="matrix(0.2957 0.9553 -0.9553 0.2957 1055.0059 935.1477)">
					<tspan x="0" y="0" class="st1 st2 st3">8.4</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st3">7</tspan>
				</text>
				<text transform="matrix(0.2957 0.9553 -0.9553 0.2957 936.5519 972.0005)">
					<tspan x="0" y="0" class="st1 st2 st3">8.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st3">0</tspan>
				</text>
				<text transform="matrix(0.9516 -0.3074 0.3074 0.9516 984.8904 947.6965)">
					<tspan x="0" y="0" class="st1 st2 st8">20.0</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0.9516 -0.3074 0.3074 0.9516 981.5637 974.7041)">
					<tspan x="0" y="0" class="st1 st2 st8">16</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st8">4.73 m2</tspan>
				</text>
				<text transform="matrix(0.9272 -0.3746 0.3746 0.9272 992.3554 961.6154)" class="st5 st6 st3">68</text>
			</g>
			<g id="D-69" class="property__active" ng-class="zafiro.inmovablesClassList[68]" ng-click="zafiro.showPropertyData(51, '69')">
				<polyline id="D-L69" class="property pb-sprite-1"
					points="944,1008.2 1076.1,968.8 1092.1,1025 959.1,1061.3 944,1008.2 	" />
				<text transform="matrix(0.274 0.9617 -0.9617 0.274 1071.729 990.6064)">
					<tspan x="0" y="0" class="st1 st2 st8">8.4</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">7</tspan>
				</text>
				<text transform="matrix(0.274 0.9617 -0.9617 0.274 952.4408 1024.6476)">
					<tspan x="0" y="0" class="st1 st2 st8">8.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0.9583 -0.2857 0.2857 0.9583 1001.2576 1001.7137)">
					<tspan x="0" y="0" class="st1 st2 st8">20.0</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0.9583 -0.2857 0.2857 0.9583 998.713 1028.2172)">
					<tspan x="0" y="0" class="st1 st2 st8">16</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st8">4.73 m2</tspan>
				</text>
				<text transform="matrix(0.9272 -0.3746 0.3746 0.9272 1010.4486 1014.6516)" class="st5 st6 st3">69</text>
			</g>
			<g id="D-70" class="property__active" ng-class="zafiro.inmovablesClassList[69]" ng-click="zafiro.showPropertyData(51, '70')" >
				<polyline id="D-L70" class="property pb-sprite-2"
					points="959.1,1061.3 1092.1,1025 1106.8,1081.5 973,1114.6 962.1,1072.6 959.1,1061.3 	" />
				<text transform="matrix(0.2504 0.9681 -0.9681 0.2504 1087.3196 1046.8516)">
					<tspan x="0" y="0" class="st1 st2 st3">8.4</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st3">7</tspan>
				</text>
				<text transform="matrix(0.2504 0.9681 -0.9681 0.2504 967.2562 1078.0645)">
					<tspan x="0" y="0" class="st1 st2 st3">8.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st3">0</tspan>
				</text>
				<text transform="matrix(0.965 -0.2622 0.2622 0.965 1016.8629 1056.4656)">
					<tspan x="0" y="0" class="st1 st2 st3">20.0</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st3">0</tspan>
				</text>
				<text transform="matrix(0.965 -0.2622 0.2622 0.965 1012.7339 1083.2002)">
					<tspan x="0" y="0" class="st1 st2 st3">16</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st3">4.73 m2</tspan>
				</text>
				<text transform="matrix(0.9272 -0.3746 0.3746 0.9272 1027.4939 1070.4253)" class="st5 st6 st3">70</text>
			</g>
			<g id="D-71" class="property__active" ng-class="zafiro.inmovablesClassList[70]" ng-click="zafiro.showPropertyData(51, '71')"> 
				<polyline id="D-L71" class="property pb-sprite-1"
					points="973,1114.6 1106.8,1081.5 1117.1,1124.8 1126.6,1168.3 985.6,1168.3 973,1114.6 	" />
				<g>
					<polyline class="st9" points="1096.3,1120.6 1096.3,1135.2 1089,1127.9 1096.3,1120.6 		" />
					<polyline class="st10" points="1096.3,1120.6 1103.6,1127.9 1096.3,1135.2 1096.3,1120.6 		" />
				</g>
				<text transform="matrix(0.2215 0.9751 -0.9751 0.2215 1104.3909 1115.384)">
					<tspan x="0" y="0" class="st1 st2 st3">12.9</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st3">2</tspan>
				</text>
				<text transform="matrix(0.2283 0.9736 -0.9736 0.2283 980.674 1131.5103)">
					<tspan x="0" y="0" class="st1 st2 st3">8.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st3">0</tspan>
				</text>
				<text transform="matrix(0.9711 -0.2385 0.2385 0.9711 1030.8486 1111.3246)">
					<tspan x="0" y="0" class="st1 st2 st4">20.0</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st4">0</tspan>
				</text>
				<text transform="matrix(1 0 0 1 1043.9746 1164.8125)">
					<tspan x="0" y="0" class="st1 st2 st8">20.4</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st8">6</tspan>
				</text>
				<text transform="matrix(0.9711 -0.2385 0.2385 0.9711 1026.2103 1137.8751)">
					<tspan x="0" y="0" class="st1 st2 st4">20</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st4">9.18 m2</tspan>
				</text>
				<text transform="matrix(0.9711 -0.2385 0.2385 0.9711 1040.0345 1120.9001)" class="st5 st6 st4">71</text>
			</g>
			<g id="D-72" class="property__active" ng-class="zafiro.inmovablesClassList[71]" ng-click="zafiro.showPropertyData(51, '72')"> 
				<polyline id="D-L72" class="property pb-sprite-2"
					points="829,1108.1 962.1,1072.6 974.4,1120.3 985.6,1168.3 844.1,1168.3 829,1108.1 	" />
				<g>
					<polyline class="st9" points="868.6,1126.6 868.6,1141.2 861.3,1133.9 868.6,1126.6 		" />
					<polyline class="st10" points="868.6,1126.6 875.9,1133.9 868.6,1141.2 868.6,1126.6 		" />
				</g>
				<text transform="matrix(0.2368 0.9715 -0.9715 0.2368 961.54 1111.0948)">
					<tspan x="0" y="0" class="st1 st2 st3">14.3</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st3">0</tspan>
				</text>
				<text transform="matrix(0.2436 0.9699 -0.9699 0.2436 837.92 1128.1986)">
					<tspan x="0" y="0" class="st1 st2 st8">9.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0.9664 -0.2571 0.2571 0.9664 886.6859 1103.6803)">
					<tspan x="0" y="0" class="st1 st2 st3">20.0</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st3">0</tspan>
				</text>
				<text transform="matrix(1 0 0 1 902.7588 1164.8125)">
					<tspan x="0" y="0" class="st1 st2 st8">20.5</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st8">2</tspan>
				</text>
				<text transform="matrix(0.9664 -0.2571 0.2571 0.9664 883.8647 1133.5881)">
					<tspan x="0" y="0" class="st1 st2 st3">23</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st3">3.04 m2</tspan>
				</text>
				<text transform="matrix(0.9664 -0.2571 0.2571 0.9664 897.7564 1119.4873)" class="st5 st6 st3">72</text>
			</g>
			<g id="D-73" class="property__active" ng-class="zafiro.inmovablesClassList[72]" ng-click="zafiro.showPropertyData(51, '73')"> 
				<polyline class="property pb-sprite-1" points="962.1,1072.6 829,1108.1 812.1,1048.5 944.2,1009.1 962.1,1072.6 	" />
				<text transform="matrix(0.2706 0.9627 -0.9627 0.2706 940.8787 1034.4116)">
					<tspan x="0" y="0" class="st1 st2 st8">9.5</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">7</tspan>
				</text>
				<text transform="matrix(0.2706 0.9627 -0.9627 0.2706 821.5048 1068.1335)">
					<tspan x="0" y="0" class="st1 st2 st8">9.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0.9588 -0.284 0.284 0.9588 869.6736 1042.1152)">
					<tspan x="0" y="0" class="st1 st2 st3">20.0</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st3">0</tspan>
				</text>
				<text transform="matrix(0.9673 -0.2538 0.2538 0.9673 866.2522 1070.9739)">
					<tspan x="0" y="0" class="st1 st2 st3">18</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st3">5.65 m2</tspan>
				</text>
				<text transform="matrix(0.9272 -0.3746 0.3746 0.9272 881.2647 1056.7211)" class="st5 st6 st3">73</text>
			</g>
			<g id="D-74" class="property__active" ng-class="zafiro.inmovablesClassList[73]" ng-click="zafiro.showPropertyData(51, '74')"> 
				<polyline id="D-L74" class="property pb-sprite-2"
					points="793.6,989.3 924.5,946.2 944.2,1009.1 812.1,1048.5 793.6,989.3 	" />
				<text transform="matrix(0.2974 0.9548 -0.9548 0.2974 922.0769 971.814)">
					<tspan x="0" y="0" class="st1 st2 st8">9.5</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">7</tspan>
				</text>
				<text transform="matrix(0.2974 0.9548 -0.9548 0.2974 803.6978 1008.8871)">
					<tspan x="0" y="0" class="st1 st2 st8">9.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0.95 -0.3123 0.3123 0.95 850.8092 981.1885)">
					<tspan x="0" y="0" class="st1 st2 st8">20.0</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0.951 -0.309 0.309 0.951 850.8224 1010.8768)">
					<tspan x="0" y="0" class="st1 st2 st3">18</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st3">5.65 m2</tspan>
				</text>
				<text transform="matrix(0.9272 -0.3746 0.3746 0.9272 862.9379 994.4568)" class="st5 st6 st3">74</text>
			</g>
			<g id="D-75" class="property__active" ng-class="zafiro.inmovablesClassList[74]" ng-click="zafiro.showPropertyData(51, '75')"> 
				<polyline id="D-L75" class="property pb-sprite-1" points="773.4,930.6 903,883.9 924.5,946.2 793.6,989.3 773.4,930.6 	" />
				<text transform="matrix(0.3256 0.9455 -0.9455 0.3256 901.2908 909.5818)">
					<tspan x="0" y="0" class="st1 st2 st3">9.5</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st3">7</tspan>
				</text>
				<text transform="matrix(0.3256 0.9455 -0.9455 0.3256 784.0096 949.9879)">
					<tspan x="0" y="0" class="st1 st2 st3">9.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st3">0</tspan>
				</text>
				<text transform="matrix(0.9409 -0.3387 0.3387 0.9409 830.335 921.0068)">
					<tspan x="0" y="0" class="st1 st2 st8">20.0</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0.9486 -0.3166 0.3166 0.9486 830.6254 954.6187)">
					<tspan x="0" y="0" class="st1 st2 st3">18</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st3">5.65 m2</tspan>
				</text>
				<text transform="matrix(0.9272 -0.3746 0.3746 0.9272 845.3264 937.9451)" class="st5 st6 st3">75</text>
			</g>
			<g id="D-76" class="property__active" ng-class="zafiro.inmovablesClassList[75]" ng-click="zafiro.showPropertyData(51, '76')"> 
				<polyline id="D-L76" class="property pb-sprite-2" points="751.5,872.6 879.8,822.2 903,883.9 773.4,930.6 751.5,872.6 	" />
				<text transform="matrix(0.3518 0.9361 -0.9361 0.3518 878.6443 847.7626)">
					<tspan x="0" y="0" class="st1 st2 st8">9.5</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">7</tspan>
				</text>
				<text transform="matrix(0.3518 0.9361 -0.9361 0.3518 762.5528 891.4692)">
					<tspan x="0" y="0" class="st1 st2 st8">9.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0.9311 -0.3649 0.3649 0.9311 808.5123 861.641)">
					<tspan x="0" y="0" class="st1 st2 st4">20.0</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st4">0</tspan>
				</text>
				<text transform="matrix(0.9503 -0.3113 0.3113 0.9503 809.4398 891.6277)">
					<tspan x="0" y="0" class="st1 st2 st3">18</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st3">5.65 m2</tspan>
				</text>
				<text transform="matrix(0.9272 -0.3746 0.3746 0.9272 823.6638 877.7806)" class="st5 st6 st3">76</text>
			</g>
			<g id="D-77" class="property__active" ng-class="zafiro.inmovablesClassList[76]" ng-click="zafiro.showPropertyData(51, '77')"> 
				<polyline id="D-L77" class="property pb-sprite-1"
					points="722,801.1 847.6,744.4 864.1,783.1 879.8,822.2 751.5,872.6 737.1,836.7 722,801.1 	" />
				<g>
					<polyline class="st9" points="757.1,824 757.1,838.7 749.8,831.3 757.1,824 		" />
					<polyline class="st10" points="757.1,824 764.4,831.3 757.1,838.7 757.1,824 		" />
				</g>
				<text transform="matrix(0.3811 0.9245 -0.9245 0.3811 850.0143 776.1113)">
					<tspan x="0" y="0" class="st1 st2 st3">12.2</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st3">2</tspan>
				</text>
				<text transform="matrix(0.3811 0.9245 -0.9245 0.3811 735.7548 824.4063)">
					<tspan x="0" y="0" class="st1 st2 st3">11.2</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st3">3</tspan>
				</text>
				<text transform="matrix(0.9121 -0.4099 0.4099 0.9121 777.8946 787.0746)">
					<tspan x="0" y="0" class="st1 st2 st8">20.0</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0.9293 -0.3693 0.3693 0.9293 781.2569 820.5493)">
					<tspan x="0" y="0" class="st1 st2 st3">23</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st3">4.49 m2</tspan>
				</text>
				<text transform="matrix(0.9272 -0.3746 0.3746 0.9272 791.8403 803.0082)" class="st5 st6 st3">77</text>
			</g>
			<g id="DIVISIONES_1_">
				<line class="st12" x1="973" y1="1114.6" x2="1106.8" y2="1081.5" />
				<line class="st12" x1="959.1" y1="1061.3" x2="1092.1" y2="1025" />
				<line class="st12" x1="944" y1="1008.2" x2="1076.1" y2="968.8" />
				<line class="st12" x1="927.6" y1="955.6" x2="1058.7" y2="913.1" />
				<line class="st12" x1="910" y1="903.4" x2="1040" y2="857.8" />
				<line class="st12" x1="891.1" y1="851.5" x2="1020.1" y2="802.9" />
				<line class="st12" x1="871" y1="800.2" x2="998.8" y2="748.5" />
				<line class="st12" x1="829" y1="1108.1" x2="962.1" y2="1072.6" />
				<line class="st12" x1="812.1" y1="1048.5" x2="944.2" y2="1009.1" />
				<line class="st12" x1="793.6" y1="989.3" x2="924.5" y2="946.2" />
				<line class="st12" x1="773.4" y1="930.6" x2="903" y2="883.9" />
				<line class="st12" x1="751.5" y1="872.6" x2="879.8" y2="822.2" />
				<path class="st12" d="M847.6,744.4c59.4,136.6,105.6,278.5,138,423.9" />
			</g>
			<g id="E-78_2_" class="property__active" ng-class="zafiro.inmovablesClassList[77]" ng-click="zafiro.showPropertyData(51, '78')">
				<polyline id="E-L78_2_" class="property pb-sprite-1" points="684.4,1030.5 739.5,1030.5 753.4,1076.1 766.4,1122.1 778.2,1168.3 684.4,1168.3 
		684.4,1030.5 	" />
				<g>
					<polyline class="st9" points="731.3,1139.9 731.3,1154.5 724,1147.2 731.3,1139.9 		" />
					<polyline class="st10" points="731.3,1139.9 738.6,1147.2 731.3,1154.5 731.3,1139.9 		" />
				</g>
				<text transform="matrix(0 -1 1 0 697.7188 1111.4639)">
					<tspan x="0" y="0" class="st1 st2 st8">20.0</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(1 0 0 1 702.5479 1040.7549)">
					<tspan x="0" y="0" class="st1 st2 st8">8.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(1 0 0 1 719.1973 1164.8125)">
					<tspan x="0" y="0" class="st1 st2 st8">13.6</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st8">1</tspan>
				</text>
				<text transform="matrix(0.2689 0.9632 -0.9632 0.2689 746.8148 1090.0302)">
					<tspan x="0" y="0" class="st1 st2 st8">20.7</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st8">8</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 730.9189 1118.3164)">
					<tspan x="0" y="0" class="st1 st2 st8">21</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st8">8.55 m2</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 719.0049 1104.8535)" class="st5 st6 st8">78</text>
			</g>
			<g id="E-79_2_" class="property__active" ng-class="zafiro.inmovablesClassList[78]" ng-click="zafiro.showPropertyData(51, '79')">
				<polyline id="E-L79_2_" class="property pb-sprite-2"
					points="684.4,1168.3 622.4,1168.3 622.4,1030.5 684.4,1030.5 684.4,1168.3 	" />
				<text transform="matrix(1 0 0 1 643.9717 1040.7549)">
					<tspan x="0" y="0" class="st1 st2 st8">9.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(1 0 0 1 643.9717 1164.8125)">
					<tspan x="0" y="0" class="st1 st2 st8">9.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 636.7944 1111.4639)">
					<tspan x="0" y="0" class="st1 st2 st8">20.0</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 660.5762 1118.3164)">
					<tspan x="0" y="0" class="st1 st2 st8">18</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st8">0.00 m2</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 650.7061 1104.8535)" class="st5 st6 st8">79</text>
			</g>
			<g id="E-80_2_" class="property__active" ng-class="zafiro.inmovablesClassList[79]" ng-click="zafiro.showPropertyData(51, '80')" >
				<polyline id="E-L80_2_" class="property pb-sprite-1"
					points="622.1,1168.4 560.1,1168.2 560.6,1030.3 622.6,1030.6 622.1,1168.4 	" />
				<text transform="matrix(1 3.620012e-03 -3.620012e-03 1 582.0844 1040.4777)">
					<tspan x="0" y="0" class="st1 st2 st8">9.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(1 3.620012e-03 -3.620012e-03 1 581.6353 1164.5364)">
					<tspan x="0" y="0" class="st1 st2 st8">9.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(3.620012e-03 -1 1 3.620012e-03 571.723 1111.1505)">
					<tspan x="0" y="0" class="st1 st2 st8">20.0</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(3.620012e-03 -1 1 3.620012e-03 598.4133 1118.0948)">
					<tspan x="0" y="0" class="st1 st2 st8">18</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st8">0.00 m2</tspan>
				</text>
				<text transform="matrix(3.620012e-03 -1 1 3.620012e-03 588.592 1104.6022)" class="st5 st6 st8">80</text>
			</g>
			<g id="E-81_2_" class="property__active" ng-class="zafiro.inmovablesClassList[80]" ng-click="zafiro.showPropertyData(51, '81')">
				<polyline id="E-L81_2_" class="property pb-sprite-2"
					points="560.3,1168.3 498.3,1168.3 498.3,1030.5 560.3,1030.5 560.3,1168.3 	" />
				<text transform="matrix(1 0 0 1 519.9087 1040.7549)">
					<tspan x="0" y="0" class="st1 st2 st8">9.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(1 0 0 1 519.9087 1164.8125)">
					<tspan x="0" y="0" class="st1 st2 st8">9.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 511.4429 1111.4639)">
					<tspan x="0" y="0" class="st1 st2 st8">20.0</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 536.519 1118.3105)">
					<tspan x="0" y="0" class="st1 st2 st8">18</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st8">0.00 m2</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 526.6465 1104.8535)" class="st5 st6 st8">81</text>
			</g>
			<g id="E-82_2_" class="property__active" ng-class="zafiro.inmovablesClassList[81]" ng-click="zafiro.showPropertyData(51, '82')">
				<polyline id="E-L82_2_" class="property pb-sprite-1"
					points="498.3,1168.3 443.2,1168.3 443.2,1030.5 498.3,1030.5 498.3,1168.3 	" />
				<text transform="matrix(1 0 0 1 461.3286 1040.7549)">
					<tspan x="0" y="0" class="st1 st2 st8">8.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(1 0 0 1 461.3286 1164.8125)">
					<tspan x="0" y="0" class="st1 st2 st8">8.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 455.0342 1111.4639)">
					<tspan x="0" y="0" class="st1 st2 st8">20.0</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 477.9385 1118.3105)">
					<tspan x="0" y="0" class="st1 st2 st8">16</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st8">0.00 m2</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 468.0664 1104.8535)" class="st5 st6 st8">82</text>
			</g>
			<g id="E-83_2_" class="property__active" ng-class="zafiro.inmovablesClassList[82]" ng-click="zafiro.showPropertyData(51, '83')">
				<polyline id="E-L83_2_" class="property pb-sprite-2"
					points="443.2,1168.3 388,1168.3 388,1030.5 443.2,1030.5 443.2,1168.3 	" />
				<text transform="matrix(1 0 0 1 406.1929 1040.7549)">
					<tspan x="0" y="0" class="st1 st2 st8">8.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(1 0 0 1 406.1929 1164.8125)">
					<tspan x="0" y="0" class="st1 st2 st8">8.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 399.6514 1111.4639)">
					<tspan x="0" y="0" class="st1 st2 st8">20.0</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 422.8008 1118.3105)">
					<tspan x="0" y="0" class="st1 st2 st8">16</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st8">0.00 m2</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 412.9346 1104.8477)" class="st5 st6 st8">83</text>
			</g>
			<g id="E-84_2_" class="property__active" ng-class="zafiro.inmovablesClassList[83]" ng-click="zafiro.showPropertyData(51, '84')">
				<polyline id="E-L84_2_" class="property pb-sprite-1"
					points="388,1168.3 332.9,1168.3 332.9,1030.5 388,1030.5 388,1168.3 	" />
				<text transform="matrix(1 0 0 1 351.0591 1040.7549)">
					<tspan x="0" y="0" class="st1 st2 st8">8.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(1 0 0 1 351.0591 1164.8125)">
					<tspan x="0" y="0" class="st1 st2 st8">8.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 345.1411 1111.4639)">
					<tspan x="0" y="0" class="st1 st2 st8">20.0</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 367.667 1118.3105)">
					<tspan x="0" y="0" class="st1 st2 st8">16</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st8">0.00 m2</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 357.7988 1104.8477)" class="st5 st6 st8">84</text>
			</g>
			<g id="E-85_2_" class="property__active" ng-class="zafiro.inmovablesClassList[84]" ng-click="zafiro.showPropertyData(51, '85')">
				<polyline id="E-L85_2_" class="property pb-sprite-2"
					points="332.9,1168.3 277.8,1168.3 277.8,1030.5 332.9,1030.5 332.9,1168.3 	" />
				<text transform="matrix(1 0 0 1 295.9253 1040.7549)">
					<tspan x="0" y="0" class="st1 st2 st8">8.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(1 0 0 1 295.9253 1164.8125)">
					<tspan x="0" y="0" class="st1 st2 st8">8.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 288.0654 1111.4639)">
					<tspan x="0" y="0" class="st1 st2 st8">20.0</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 312.5293 1118.3164)">
					<tspan x="0" y="0" class="st1 st2 st8">16</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st8">0.00 m2</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 302.6606 1104.8477)" class="st5 st6 st8">85</text>
			</g>
			<g id="E-86_2_" class="property__active" ng-class="zafiro.inmovablesClassList[85]" ng-click="zafiro.showPropertyData(51, '86')">
				<polyline id="E-L86_2_" class="property pb-sprite-1"
					points="277.8,1168.3 214.8,1168.3 221.3,1030.5 277.8,1030.5 277.8,1168.3 	" />
				<g>
					<polyline class="st9" points="246.3,1139.9 246.3,1154.5 238.9,1147.2 246.3,1139.9 		" />
					<polyline class="st10" points="246.3,1139.9 253.6,1147.2 246.3,1154.5 246.3,1139.9 		" />
				</g>
				<text transform="matrix(1 0 0 1 240.1006 1040.7549)">
					<tspan x="0" y="0" class="st1 st2 st8">8.2</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(1 0 0 1 236.8447 1164.8125)">
					<tspan x="0" y="0" class="st1 st2 st8">9.1</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">4</tspan>
				</text>
				<text transform="matrix(4.884981e-02 -0.9988 0.9988 4.884981e-02 227.9619 1112.061)">
					<tspan x="0" y="0" class="st1 st2 st3">20.0</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st3">2</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 263.1758 1118.3086)">
					<tspan x="0" y="0" class="st1 st2 st8">17</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st8">3.43 m2</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 246.8384 1104.8477)" class="st5 st6 st8">86</text>
			</g>
			<g id="E-87_2_" class="property__active" ng-class="zafiro.inmovablesClassList[86]" ng-click="zafiro.showPropertyData(51, '87')">
				<polyline id="E-L87_2_" class="property pb-sprite-2"
					points="228.7,871.9 283.9,871.9 283.9,1030.5 221.3,1030.5 228.7,871.9 	" />
				<g>
					<polyline class="st9" points="261.9,890.9 261.9,905.5 254.5,898.2 261.9,890.9 		" />
					<polyline class="st10" points="261.9,890.9 269.2,898.2 261.9,905.5 261.9,890.9 		" />
				</g>
				<text transform="matrix(1 0 0 1 243.1509 1026.9717)">
					<tspan x="0" y="0" class="st1 st2 st8">9.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">9</tspan>
				</text>
				<text transform="matrix(1 0 0 1 246.8936 882.2441)">
					<tspan x="0" y="0" class="st1 st2 st8">8.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(4.884981e-02 -0.9988 0.9988 4.884981e-02 234.9536 963.8873)">
					<tspan x="0" y="0" class="st1 st2 st3">23.0</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st3">3</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 263.5015 973.2852)">
					<tspan x="0" y="0" class="st1 st2 st8">19</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st8">6.48 m2</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 253.6333 956.6738)" class="st5 st6 st8">87</text>
			</g>
			<g id="E-88_2_" class="property__active" ng-class="zafiro.inmovablesClassList[87]" ng-click="zafiro.showPropertyData(51, '88')">
				<polyline id="E-L88_2_" class="property pb-sprite-1"
					points="283.9,871.9 349.3,871.9 349.3,1030.5 283.9,1030.5 283.9,871.9 	" />
				<g>
					<polyline class="st9" points="319.4,891.6 319.4,906.2 312.1,898.9 319.4,891.6 		" />
					<polyline class="st10" points="319.4,891.6 326.7,898.9 319.4,906.2 319.4,891.6 		" />
				</g>
				<text transform="matrix(1 0 0 1 307.1978 1026.9717)">
					<tspan x="0" y="0" class="st1 st2 st8">9.5</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(1 0 0 1 307.1978 882.2441)">
					<tspan x="0" y="0" class="st1 st2 st8">9.5</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 294.1714 963.2939)">
					<tspan x="0" y="0" class="st1 st2 st8">23.0</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 323.8037 973.2852)">
					<tspan x="0" y="0" class="st1 st2 st8">21</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st8">8.50 m2</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 313.9355 956.6738)" class="st5 st6 st8">88</text>
			</g>
			<g id="E-89_2_" class="property__active" ng-class="zafiro.inmovablesClassList[88]" ng-click="zafiro.showPropertyData(51, '89')">
				<polyline id="E-L89_2_" class="property pb-sprite-2"
					points="349.3,871.9 418.3,871.9 418.3,1030.5 349.3,1030.5 349.3,871.9 	" />
				<g>
					<polyline class="st9" points="383.3,891.6 383.3,906.2 376,898.9 383.3,891.6 		" />
					<polyline class="st10" points="383.3,891.6 390.6,898.9 383.3,906.2 383.3,891.6 		" />
				</g>
				<text transform="matrix(1 0 0 1 371.7036 1026.9717)">
					<tspan x="0" y="0" class="st1 st2 st8">10.0</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(1 0 0 1 371.7036 882.2441)">
					<tspan x="0" y="0" class="st1 st2 st8">10.0</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 359.6445 963.292)">
					<tspan x="0" y="0" class="st1 st2 st8">23.0</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 391.0029 973.2852)">
					<tspan x="0" y="0" class="st1 st2 st8">23</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st8">0.00 m2</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 381.1328 956.6738)" class="st5 st6 st8">89</text>
			</g>
			<g id="E-90_2_" class="property__active" ng-class="zafiro.inmovablesClassList[89]" ng-click="zafiro.showPropertyData(51, '90')">
				<polyline id="E-L90_2_" class="property pb-sprite-1"
					points="418.3,871.9 487.2,871.9 487.2,1030.5 418.3,1030.5 418.3,871.9 	" />
				<g>
					<polyline class="st9" points="452.9,889.5 452.9,904.1 445.5,896.8 452.9,889.5 		" />
					<polyline class="st10" points="452.9,889.5 460.2,896.8 452.9,904.1 452.9,889.5 		" />
				</g>
				<text transform="matrix(1 0 0 1 440.623 1026.9717)">
					<tspan x="0" y="0" class="st1 st2 st8">10.0</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(1 0 0 1 440.623 882.2441)">
					<tspan x="0" y="0" class="st1 st2 st8">10.0</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 428.5635 963.292)">
					<tspan x="0" y="0" class="st1 st2 st8">23.0</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 459.9224 973.2852)">
					<tspan x="0" y="0" class="st1 st2 st8">23</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st8">0.00 m2</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 450.0498 956.6777)" class="st5 st6 st8">90</text>
			</g>
			<g id="E-91_2_" class="property__active" ng-class="zafiro.inmovablesClassList[90]" ng-click="zafiro.showPropertyData(51, '91')">
				<polyline id="E-L91_2_" class="property pb-sprite-2"
					points="487.2,871.9 556.1,871.9 556.1,1030.5 487.2,1030.5 487.2,871.9 	" />
				<g>
					<polyline class="st9" points="524.6,894.4 524.6,909.1 517.2,901.7 524.6,894.4 		" />
					<polyline class="st10" points="524.6,894.4 531.9,901.7 524.6,909.1 524.6,894.4 		" />
				</g>
				<text transform="matrix(1 0 0 1 509.5405 1026.9717)">
					<tspan x="0" y="0" class="st1 st2 st8">10.0</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 497.4829 963.2939)">
					<tspan x="0" y="0" class="st1 st2 st8">23.0</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 528.8433 973.2852)">
					<tspan x="0" y="0" class="st1 st2 st8">23</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st8">0.00 m2</tspan>
				</text>
				<text transform="matrix(1 0 0 1 509.5405 882.2441)">
					<tspan x="0" y="0" class="st1 st2 st8">10.0</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 518.9712 956.6738)" class="st5 st6 st8">91</text>
			</g>
			<g id="E-92_2_" class="property__active" ng-class="zafiro.inmovablesClassList[91]" ng-click="zafiro.showPropertyData(51, '92')">
				<polyline id="E-L92_2_" class="property pb-sprite-1"
					points="556.1,871.9 625,871.9 625,1030.5 556.1,1030.5 556.1,871.9 	" />
				<g>
					<polyline class="st9" points="593.4,893 593.4,907.6 586.1,900.3 593.4,893 		" />
					<polyline class="st10" points="593.4,893 600.7,900.3 593.4,907.6 593.4,893 		" />
				</g>
				<text transform="matrix(1 0 0 1 578.4595 1026.9717)">
					<tspan x="0" y="0" class="st1 st2 st8">10.0</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 597.7607 973.2852)">
					<tspan x="0" y="0" class="st1 st2 st8">23</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st8">0.00 m2</tspan>
				</text>
				<text transform="matrix(1 0 0 1 578.4595 882.2441)">
					<tspan x="0" y="0" class="st1 st2 st8">10.0</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 566.3984 963.2939)">
					<tspan x="0" y="0" class="st1 st2 st8">23.0</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 587.8887 956.6777)" class="st5 st6 st8">92</text>
			</g>
			<g id="E-93_2_" class="property__active" ng-class="zafiro.inmovablesClassList[92]" ng-click="zafiro.showPropertyData(51, '93')">
				<polyline id="E-L93_2_" class="property pb-sprite-2" points="625,871.9 682.2,871.9 702.7,924.3 721.8,977.1 739.5,1030.5 625,1030.5 625,871.9 	
		" />
				<g>
					<polyline class="st9" points="658.8,888.8 658.8,903.4 651.4,896.1 658.8,888.8 		" />
					<polyline class="st10" points="658.8,888.8 666.1,896.1 658.8,903.4 658.8,888.8 		" />
				</g>
				<text transform="matrix(1 0 0 1 670.1699 1026.9717)">
					<tspan x="0" y="0" class="st1 st2 st8">16.6</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st8">1</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 635.3198 963.2939)">
					<tspan x="0" y="0" class="st1 st2 st8">23.0</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0.3387 0.9409 -0.9409 0.3387 698.7278 942.753)">
					<tspan x="0" y="0" class="st1 st2 st8">24.4</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st8">6</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 670.542 973.2852)">
					<tspan x="0" y="0" class="st1 st2 st8">29</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st8">0.47 m2</tspan>
				</text>
				<text transform="matrix(1 0 0 1 641.6182 882.2441)">
					<tspan x="0" y="0" class="st1 st2 st8">8.3</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0 -1 1 0 660.6699 956.6738)" class="st5 st6 st8">93</text>
			</g>
			<g id="DIVISIONES_5_">
				<line class="st12" x1="625" y1="871.9" x2="625" y2="1030.5" />
				<line class="st12" x1="556.1" y1="871.9" x2="556.1" y2="1030.5" />
				<line class="st12" x1="487.2" y1="871.9" x2="487.2" y2="1030.5" />
				<line class="st12" x1="418.3" y1="871.9" x2="418.3" y2="1030.5" />
				<line class="st12" x1="349.3" y1="871.9" x2="349.3" y2="1030.5" />
				<line class="st12" x1="283.9" y1="871.9" x2="283.9" y2="1030.5" />
				<line class="st12" x1="277.8" y1="1030.5" x2="277.8" y2="1168.3" />
				<line class="st12" x1="332.9" y1="1030.5" x2="332.9" y2="1168.3" />
				<line class="st12" x1="388" y1="1030.5" x2="388" y2="1168.3" />
				<line class="st12" x1="443.2" y1="1030.5" x2="443.2" y2="1168.3" />
				<line class="st12" x1="498.3" y1="1030.5" x2="498.3" y2="1168.3" />
				<line class="st12" x1="560.3" y1="1030.5" x2="560.3" y2="1168.3" />
				<line class="st12" x1="622.4" y1="1030.5" x2="622.4" y2="1168.3" />
				<line class="st12" x1="684.4" y1="1030.5" x2="684.4" y2="1168.3" />
				<line class="st12" x1="221.3" y1="1030.5" x2="739.5" y2="1030.5" />
			</g>
			<g id="F-94" class="property__active" ng-class="zafiro.inmovablesClassList[93]" ng-click="zafiro.showPropertyData(51, '94')">
				<polyline id="F-L94" class="property pb-sprite-2"
					points="791.1,624 806.4,654.9 821.2,685.9 676.8,751.2 649.6,695.4 791.1,624 	" />
				<g>
					<polyline class="st9" points="692.4,700.9 692.4,715.6 685.1,708.2 692.4,700.9 		" />
					<polyline class="st10" points="692.4,700.9 699.7,708.2 692.4,715.6 692.4,700.9 		" />
				</g>
				<text transform="matrix(0.4368 0.8996 -0.8996 0.4368 791.8402 648.5436)">
					<tspan x="0" y="0" class="st1 st2 st3">10.0</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st3">0</tspan>
				</text>
				<text transform="matrix(0.4368 0.8996 -0.8996 0.4368 662.3797 713.2687)">
					<tspan x="0" y="0" class="st1 st2 st3">9.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st3">0</tspan>
				</text>
				<text transform="matrix(0.9121 -0.4099 0.4099 0.9121 736.4255 720.3539)">
					<tspan x="0" y="0" class="st1 st2 st8">23.0</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0.8934 -0.4493 0.4493 0.8934 714.1548 674.2778)">
					<tspan x="0" y="0" class="st1 st2 st8">23.0</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0.9034 -0.4289 0.4289 0.9034 716.2933 700.6525)">
					<tspan x="0" y="0" class="st1 st2 st8">21</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st8">8.45 m2</tspan>
				</text>
				<text transform="matrix(0.866 -0.5 0.5 0.866 727.6274 684.4863)" class="st5 st6 st3">94</text>
			</g>
			<g id="F-95" class="property__active" ng-class="zafiro.inmovablesClassList[94]" ng-click="zafiro.showPropertyData(51, '95')">
				<polyline id="F-L95" class="property pb-sprite-1"
					points="760.3,565 775.9,594.4 791.1,624 649.6,695.4 620.9,640.4 760.3,565 	" />
				<g>
					<polyline class="st9" points="663.8,648.8 663.8,663.4 656.5,656.1 663.8,648.8 		" />
					<polyline class="st10" points="663.8,648.8 671.1,656.1 663.8,663.4 663.8,648.8 		" />
				</g>
				<text transform="matrix(0.4618 0.887 -0.887 0.4618 762.459 590.8411)">
					<tspan x="0" y="0" class="st1 st2 st8">9.6</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">6</tspan>
				</text>
				<text transform="matrix(0.4618 0.887 -0.887 0.4618 634.1862 657.8703)">
					<tspan x="0" y="0" class="st1 st2 st8">9.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0.8797 -0.4756 0.4756 0.8797 684.7682 617.5952)">
					<tspan x="0" y="0" class="st1 st2 st8">23.0</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0.9073 -0.4204 0.4204 0.9073 687.0961 643.4537)">
					<tspan x="0" y="0" class="st1 st2 st4">21</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st4">4.55 m2</tspan>
				</text>
				<text transform="matrix(0.866 -0.5 0.5 0.866 697.4581 627.2595)" class="st5 st6 st3">95</text>
			</g>
			<g id="F-96" class="property__active" ng-class="zafiro.inmovablesClassList[95]" ng-click="zafiro.showPropertyData(51, '96')">
				<polyline id="F-L96" class="property pb-sprite-2"
					points="727.8,506.9 744.3,535.9 760.3,565 620.9,640.4 590.6,586.3 727.8,506.9 	" />
				<g>
					<polyline class="st9" points="632.1,592.6 632.1,607.2 624.8,599.9 632.1,592.6 		" />
					<polyline class="st10" points="632.1,592.6 639.4,599.9 632.1,607.2 632.1,592.6 		" />
				</g>
				<text transform="matrix(0.4879 0.8729 -0.8729 0.4879 730.6276 532.5861)">
					<tspan x="0" y="0" class="st1 st2 st8">9.6</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">6</tspan>
				</text>
				<text transform="matrix(0.4879 0.8729 -0.8729 0.4879 604.3325 603.2552)">
					<tspan x="0" y="0" class="st1 st2 st8">9.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0.866 -0.5 0.5 0.866 654.0454 561.7102)">
					<tspan x="0" y="0" class="st1 st2 st3">23.0</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st3">0</tspan>
				</text>
				<text transform="matrix(0.8799 -0.4752 0.4752 0.8799 656.7631 587.797)">
					<tspan x="0" y="0" class="st1 st2 st13">21</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st13">4.55 m2</tspan>
				</text>
				<text transform="matrix(0.866 -0.5 0.5 0.866 666.4581 571.5485)" class="st5 st6 st3">96</text>
			</g>
			<g id="F-97" class="property__active" ng-class="zafiro.inmovablesClassList[96]" ng-click="zafiro.showPropertyData(51, '97')">
				<polyline id="F-L97" class="property pb-sprite-1"
					points="693.7,449.8 710.9,478.3 727.8,506.9 590.6,586.3 558.8,533.1 693.7,449.8 	" />
				<g>
					<polyline class="st9" points="600.4,534.3 600.4,548.9 593.1,541.6 600.4,534.3 		" />
					<polyline class="st10" points="600.4,534.3 607.7,541.6 600.4,548.9 600.4,534.3 		" />
				</g>
				<text transform="matrix(0.512 0.859 -0.859 0.512 697.1545 475.366)">
					<tspan x="0" y="0" class="st1 st2 st8">9.6</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">6</tspan>
				</text>
				<text transform="matrix(0.512 0.859 -0.859 0.512 572.9201 549.6049)">
					<tspan x="0" y="0" class="st1 st2 st8">9.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0.8517 -0.524 0.524 0.8517 621.6589 506.7521)">
					<tspan x="0" y="0" class="st1 st2 st4">23.0</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st4">0</tspan>
				</text>
				<text transform="matrix(0.8844 -0.4667 0.4667 0.8844 624.6099 532.0337)">
					<tspan x="0" y="0" class="st1 st2 st8">21</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st8">4.55 m2</tspan>
				</text>
				<text transform="matrix(0.866 -0.5 0.5 0.866 634.3544 517.0826)" class="st5 st6 st3">97</text>
			</g>
			<g id="F-98" class="property__active" ng-class="zafiro.inmovablesClassList[97]" ng-click="zafiro.showPropertyData(51, '98')">
				<polyline id="F-L98" class="property pb-sprite-2"
					points="525.4,480.8 657.9,393.7 676,421.6 693.7,449.8 558.8,533.1 525.4,480.8 	" />
				<g>
					<polyline class="st9" points="568.7,482.1 568.7,496.8 561.4,489.4 568.7,482.1 		" />
					<polyline class="st10" points="568.7,482.1 576,489.4 568.7,496.8 568.7,482.1 		" />
				</g>
				<text transform="matrix(0.5358 0.8443 -0.8443 0.5358 662.4177 419.4732)">
					<tspan x="0" y="0" class="st1 st2 st3">9.6</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st3">6</tspan>
				</text>
				<text transform="matrix(0.5358 0.8443 -0.8443 0.5358 540.3483 497.229)">
					<tspan x="0" y="0" class="st1 st2 st3">9.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st3">0</tspan>
				</text>
				<text transform="matrix(0.8358 -0.549 0.549 0.8358 587.2514 452.602)">
					<tspan x="0" y="0" class="st1 st2 st8">23.0</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0.8266 -0.5628 0.5628 0.8266 592.9818 479.7351)">
					<tspan x="0" y="0" class="st1 st2 st4">21</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st4">4.55 m2</tspan>
				</text>
				<text transform="matrix(0.866 -0.5 0.5 0.866 600.9086 462.3372)" class="st5 st6 st3">98</text>
			</g>
			<g id="F-99" class="property__active" ng-class="zafiro.inmovablesClassList[98]" ng-click="zafiro.showPropertyData(51, '99')">
				<polyline id="F-L99" class="property pb-sprite-1"
					points="657.9,393.7 525.4,480.8 490.6,429.4 620.6,338.6 639.4,366 657.9,393.7 	" />
				<g>
					<polyline class="st9" points="534,432 534,446.7 526.6,439.3 534,432 		" />
					<polyline class="st10" points="534,432 541.3,439.3 534,446.7 534,432 		" />
				</g>
				<text transform="matrix(0.5606 0.8281 -0.8281 0.5606 625.653 364.0303)">
					<tspan x="0" y="0" class="st1 st2 st8">9.6</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">6</tspan>
				</text>
				<text transform="matrix(0.5606 0.8281 -0.8281 0.5606 505.8591 445.2408)">
					<tspan x="0" y="0" class="st1 st2 st8">9.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0.8201 -0.5721 0.5721 0.8201 551.6673 399.3256)">
					<tspan x="0" y="0" class="st1 st2 st8">23.0</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0.8448 -0.5351 0.5351 0.8448 559.0228 427.2778)">
					<tspan x="0" y="0" class="st1 st2 st3">21</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st3">4.55 m2</tspan>
				</text>
				<text transform="matrix(0.866 -0.5 0.5 0.866 565.2778 408.6165)" class="st5 st6 st3">99</text>
			</g>
			<g id="F-100" class="property__active" ng-class="zafiro.inmovablesClassList[99]" ng-click="zafiro.showPropertyData(51, '100')">
				<polyline id="F-L100" class="property pb-sprite-2"
					points="447.1,369.4 586.6,291.3 620.6,338.6 490.6,429.4 469.1,399.2 447.1,369.4 	" />
				<g>
					<polyline class="st9" points="492.5,378.7 492.5,393.3 485.2,386 492.5,378.7 		" />
					<polyline class="st10" points="492.5,378.7 499.9,386 492.5,393.3 492.5,378.7 		" />
				</g>
				<text transform="matrix(0.5821 0.8131 -0.8131 0.5821 589.7474 313.0505)">
					<tspan x="0" y="0" class="st1 st2 st8">8.4</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">5</tspan>
				</text>
				<text transform="matrix(0.5864 0.81 -0.81 0.5864 464.7453 387.1776)">
					<tspan x="0" y="0" class="st1 st2 st8">10.7</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st8">6</tspan>
				</text>
				<text transform="matrix(0.8729 -0.4879 0.4879 0.8729 511.2557 345.138)">
					<tspan x="0" y="0" class="st1 st2 st8">23.1</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st8">9</tspan>
				</text>
				<text transform="matrix(0.8185 -0.5746 0.5746 0.8185 520.3134 378.6244)">
					<tspan x="0" y="0" class="st1 st2 st8">22</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st8">0.85 m2</tspan>
				</text>
				<text transform="matrix(0.866 -0.5 0.5 0.866 523.8951 360.6107)" class="st5 st6 st3">100</text>
			</g>
			<g id="F-101" class="property__active" ng-class="zafiro.inmovablesClassList[100]" ng-click="zafiro.showPropertyData(51, '101')">
				<polyline id="F-L101" class="property pb-sprite-1"
					points="745.7,277.2 632,355.2 609.6,323 586.6,291.3 707.8,223.5 745.7,277.2 	" />
				<g>
					<polyline class="st9" points="707.3,260.3 707.3,275 700,267.7 707.3,260.3 		" />
					<polyline class="st10" points="707.3,260.3 714.6,267.7 707.3,275 707.3,260.3 		" />
				</g>
				<text transform="matrix(0.5764 0.8171 -0.8171 0.5764 713.0958 248.6454)">
					<tspan x="0" y="0" class="st1 st2 st3">9.5</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st3">3</tspan>
				</text>
				<text transform="matrix(0.5793 0.8151 -0.8151 0.5793 605.4252 311.2368)">
					<tspan x="0" y="0" class="st1 st2 st3">11.3</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st3">7</tspan>
				</text>
				<text transform="matrix(0.8729 -0.4879 0.4879 0.8729 641.5914 272.2061)">
					<tspan x="0" y="0" class="st1 st2 st8">20.1</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st8">5</tspan>
				</text>
				<text transform="matrix(0.8251 -0.565 0.565 0.8251 655.2834 308.245)">
					<tspan x="0" y="0" class="st1 st2 st3">20</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st3">8.99 m2</tspan>
				</text>
				<text transform="matrix(0.866 -0.5 0.5 0.866 657.2871 288.5475)" class="st5 st6 st3">101</text>
			</g>
			<g id="F-102" class="property__active" ng-class="zafiro.inmovablesClassList[101]" ng-click="zafiro.showPropertyData(51, '102')">
				<polyline id="F-L102" class="property pb-sprite-2"
					points="632,355.2 745.7,277.2 782.1,331.8 666.4,406.8 661.7,399.5 632,355.2 	" />
				<text transform="matrix(0.5534 0.8329 -0.8329 0.5534 750.1965 302.1376)">
					<tspan x="0" y="0" class="st1 st2 st8">9.5</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">3</tspan>
				</text>
				<text transform="matrix(0.5534 0.8329 -0.8329 0.5534 646.9843 370.9566)">
					<tspan x="0" y="0" class="st1 st2 st8">9.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0.8251 -0.565 0.565 0.8251 684.9652 331.3623)">
					<tspan x="0" y="0" class="st1 st2 st3">20.0</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st3">0</tspan>
				</text>
				<text transform="matrix(0.8396 -0.5432 0.5432 0.8396 692.0739 359.92)">
					<tspan x="0" y="0" class="st1 st2 st3">18</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st3">5.32 m2</tspan>
				</text>
				<text transform="matrix(0.866 -0.5 0.5 0.866 699.6082 339.9076)" class="st5 st6 st3">102</text>
			</g>
			<g id="F-103" class="property__active" ng-class="zafiro.inmovablesClassList[102]" ng-click="zafiro.showPropertyData(51, '103')">
				<polyline id="F-L103" class="property pb-sprite-1"
					points="782.1,331.8 817.1,387.4 699.5,459.3 697.3,455.7 666.4,406.8 782.1,331.8 	" />
				<text transform="matrix(0.5314 0.8471 -0.8471 0.5314 786.0753 356.9916)">
					<tspan x="0" y="0" class="st1 st2 st8">9.5</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">3</tspan>
				</text>
				<text transform="matrix(0.5314 0.8471 -0.8471 0.5314 681.065 423.0365)">
					<tspan x="0" y="0" class="st1 st2 st8">9.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0.8396 -0.5432 0.5432 0.8396 719.974 384.5645)">
					<tspan x="0" y="0" class="st1 st2 st3">20.0</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st3">0</tspan>
				</text>
				<text transform="matrix(0.8536 -0.521 0.521 0.8536 725.6571 413.2883)">
					<tspan x="0" y="0" class="st1 st2 st8">18</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st8">5.32 m2</tspan>
				</text>
				<text transform="matrix(0.866 -0.5 0.5 0.866 732.0703 394.9649)" class="st5 st6 st3">103</text>
			</g>
			<g id="F-104" class="property__active" ng-class="zafiro.inmovablesClassList[103]" ng-click="zafiro.showPropertyData(51, '104')">
				<polyline id="F-L104" class="property pb-sprite-2"
					points="699.5,459.3 817.1,387.4 850.6,444 731.1,512.6 699.5,459.3 	" />
				<text transform="matrix(0.509 0.8607 -0.8607 0.509 820.2795 412.5767)">
					<tspan x="0" y="0" class="st1 st2 st8">9.5</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">3</tspan>
				</text>
				<text transform="matrix(0.509 0.8607 -0.8607 0.509 713.5549 475.8081)">
					<tspan x="0" y="0" class="st1 st2 st8">9.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0.8536 -0.521 0.521 0.8536 753.3029 438.4195)">
					<tspan x="0" y="0" class="st1 st2 st8">20.0</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0.8678 -0.497 0.497 0.8678 758.5582 467.2743)">
					<tspan x="0" y="0" class="st1 st2 st3">18</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st3">5.32 m2</tspan>
				</text>
				<text transform="matrix(0.866 -0.5 0.5 0.866 766.1738 449.617)" class="st5 st6 st3">104</text>
			</g>
			<g id="F-105" class="property__active" ng-class="zafiro.inmovablesClassList[104]" ng-click="zafiro.showPropertyData(51, '105')">
				<polyline id="F-L105" class="property pb-sprite-1" points="850.6,444 882.6,501.3 761.3,566.8 731.1,512.6 850.6,444 	" />
				<text transform="matrix(0.4863 0.8738 -0.8738 0.4863 853.3175 469.3874)">
					<tspan x="0" y="0" class="st1 st2 st8">9.5</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">3</tspan>
				</text>
				<text transform="matrix(0.4863 0.8738 -0.8738 0.4863 744.9474 529.7664)">
					<tspan x="0" y="0" class="st1 st2 st8">9.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0.8678 -0.497 0.497 0.8678 785.712 493.0255)">
					<tspan x="0" y="0" class="st1 st2 st3">20.0</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st3">0</tspan>
				</text>
				<text transform="matrix(0.8805 -0.4741 0.4741 0.8805 790.9058 522.0372)">
					<tspan x="0" y="0" class="st1 st2 st3">18</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st3">5.32 m2</tspan>
				</text>
				<text transform="matrix(0.866 -0.5 0.5 0.866 800.0284 502.1598)" class="st5 st6 st3">105</text>
			</g>
			<g id="F-106" class="property__active" ng-class="zafiro.inmovablesClassList[105]" ng-click="zafiro.showPropertyData(51, '106')">
				<polyline id="F-L106" class="property pb-sprite-2"
					points="763.6,571.1 761.3,566.8 882.6,501.3 913,559.6 790,621.8 763.6,571.1 	" />
				<text transform="matrix(0.4618 0.887 -0.887 0.4618 884.5098 526.7878)">
					<tspan x="0" y="0" class="st1 st2 st8">9.5</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">3</tspan>
				</text>
				<text transform="matrix(0.4618 0.887 -0.887 0.4618 774.5757 584.2571)">
					<tspan x="0" y="0" class="st1 st2 st8">9.0</tspan>
					<tspan x="13.4" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0.8805 -0.4741 0.4741 0.8805 816.3763 549.0399)">
					<tspan x="0" y="0" class="st1 st2 st3">20.0</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st3">0</tspan>
				</text>
				<text transform="matrix(0.8926 -0.4509 0.4509 0.8926 820.0906 578.3346)">
					<tspan x="0" y="0" class="st1 st2 st4">18</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st4">5.32 m2</tspan>
				</text>
				<text transform="matrix(0.866 -0.5 0.5 0.866 828.3825 559.7885)" class="st5 st6 st3">106</text>
			</g>
			<g id="F-107" class="property__active" ng-class="zafiro.inmovablesClassList[106]" ng-click="zafiro.showPropertyData(51, '107')">
				<polyline id="F-L107" class="property pb-sprite-1" points="790,621.8 913,559.6 930.2,594.3 946.9,629.2 821.2,685.9 806.4,654.9 791.1,624 
		790,621.8 	" />
				<g>
					<polyline class="st9" points="906.1,593.6 906.1,608.2 898.8,600.9 906.1,593.6 		" />
					<polyline class="st10" points="906.1,593.6 913.4,600.9 906.1,608.2 906.1,593.6 		" />
				</g>
				<text transform="matrix(0.4368 0.8996 -0.8996 0.4368 915.6414 587.9387)">
					<tspan x="0" y="0" class="st1 st2 st3">11.2</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st3">4</tspan>
				</text>
				<text transform="matrix(0.4368 0.8996 -0.8996 0.4368 803.688 641.3956)">
					<tspan x="0" y="0" class="st1 st2 st3">10.3</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st3">6</tspan>
				</text>
				<text transform="matrix(0.9121 -0.4099 0.4099 0.9121 871.4911 659.3782)">
					<tspan x="0" y="0" class="st1 st2 st8">20.0</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st8">0</tspan>
				</text>
				<text transform="matrix(0.8926 -0.4509 0.4509 0.8926 845.6795 605.5714)">
					<tspan x="0" y="0" class="st1 st2 st4">20.0</tspan>
					<tspan x="18.8" y="0" class="st1 st2 st4">0</tspan>
				</text>
				<text transform="matrix(0.9121 -0.4099 0.4099 0.9121 850.3792 638.3463)">
					<tspan x="0" y="0" class="st1 st2 st8">21</tspan>
					<tspan x="10.8" y="0" class="st1 st2 st8">5.97 m2</tspan>
				</text>
				<text transform="matrix(0.866 -0.5 0.5 0.866 857.5533 619.6734)" class="st5 st6 st3">107</text>
			</g>
			<g id="DIVISIONES_4_">
				<line class="st12" x1="632" y1="355.2" x2="745.7" y2="277.2" />
				<line class="st12" x1="666.4" y1="406.8" x2="782.1" y2="331.8" />
				<line class="st12" x1="699.5" y1="459.3" x2="817.1" y2="387.4" />
				<line class="st12" x1="731.1" y1="512.6" x2="850.6" y2="444" />
				<line class="st12" x1="761.3" y1="566.8" x2="882.6" y2="501.3" />
				<line class="st12" x1="790" y1="621.8" x2="913" y2="559.6" />
				<line class="st12" x1="490.6" y1="429.4" x2="620.6" y2="338.6" />
				<line class="st12" x1="525.4" y1="480.8" x2="657.9" y2="393.7" />
				<line class="st12" x1="558.8" y1="533.1" x2="693.7" y2="449.8" />
				<line class="st12" x1="590.6" y1="586.3" x2="727.8" y2="506.9" />
				<line class="st12" x1="620.9" y1="640.4" x2="760.3" y2="565" />
				<line class="st12" x1="649.6" y1="695.4" x2="791.1" y2="624" />
				<path class="st12" d="M586.6,291.3c91,123.5,169.6,255.7,234.6,394.6" />
			</g>
			<path class="st14" d="M1189.3,677.3c43.3,105,86.6,230.2,120.6,373.9c27.4,116,44,223.4,53.7,319c-453.8,0.3-907.7,0.7-1361.5,1
	c9.7-217.4,19.4-434.8,29-652.2C61.9,585,92.7,451,123.5,316.9C309.7,212.4,495.9,107.9,682.1,3.3c11.4,5.8,32,14.4,59.1,15.9
	c27.6,1.6,49.4-4.9,61.4-9.5c56.2,70.7,115.2,152.3,173.1,245c64.7,103.5,116.5,202.2,158.1,291.9" />
			<g>
				<text transform="matrix(0.3898 0.9209 -1.0176 0.4361 1094.5253 584.3729)"
					class="st15 st6 st16">ACCESO</text>
				<path class="st15" d="M1090.5,600.7c1.5,3.3,5.6,4.8,9.3,3.3l3.9,8.9l-10.6-4.3l-10.6-4.3l4-10.8l4-10.8l3.9,8.9
		C1090.8,593.3,1089.1,597.3,1090.5,600.7" />
			</g>
			<g>
				<text transform="matrix(0.4125 0.9107 -0.9964 0.474 1114.099 663.721)"
					class="st15 st6 st17">SALIDA</text>
				<path class="st15" d="M1132.3,667.8c1.6,3.5-0.1,7.7-3.8,9.7l4.2,9.2l3.9-11.4l3.9-11.4l-11.1-4.2l-11.1-4.2l4.2,9.2
		C1126.5,663,1130.8,664.4,1132.3,667.8" />
			</g>
		</svg>


	</div>

</body>

</html>