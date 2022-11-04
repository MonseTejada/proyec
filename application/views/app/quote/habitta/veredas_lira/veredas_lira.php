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
	<link rel="stylesheet" type="text/css" href="media/assets/css/habitta-quote.css">
	<link rel="stylesheet" type="text/css" href="media/assets/css/helpers.css">

	<script type="text/javascript" src="media/bower_components/jquery.min.js"></script>
	<script type="text/javascript" src="media/bower_components/materialize/js/materialize.min.js"></script>

</head>

<body>

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

	<div class="plano_container">

		<div class="container mt-64">
			<div class="row quote-header">
				<div class="col s12">
					<h1 class="center-align">CEDRO</h1>
					<div class="quote-description">
						<p class="left">Cotiza facilmente con un solo Click</p>
						<img class="quote-icon-tap mt-15 ml-10 left" src="media/assets/img/icons/tap.svg">
					</div>
				</div>
			</div>
		</div>

		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 698.88 881.75">

			<defs>
				<style>
					.cls-1{fill:#31929f;}.cls-2{fill:#004e5d;opacity:0.55;}.cls-3{font-size:20px;font-family:MyriadPro-Regular, Myriad Pro;}.cls-11,.cls-3,.cls-8{fill:#fff;}.cls-4{letter-spacing:0em;}.cls-5{letter-spacing:-0.03em;}.cls-6{letter-spacing:-0.01em;}.cls-7{letter-spacing:0em;}.cls-8{font-size:30.86px;}.cls-11,.cls-8{font-family:FuturaBT-Book, Futura Bk BT;}.cls-9{letter-spacing:-0.07em;}.cls-10{letter-spacing:-0.05em;}.cls-11{font-size:16.71px;}.cls-12{letter-spacing:-0.05em;}

					.cls-13{fill:#4CAF50;opacity:.5; stroke: #000;}
					.cedro-g:hover .cls-13, .sabino-g:hover .cls-13{opacity:1; cursor:pointer;}

					.cedro-g .cls-8, .sabino-g .cls-8 {
						cursor:pointer;
					}

				</style>
			</defs>

			<title>veredas_lira</title>

			<g>

				<image width="6937" height="8930" transform="translate(6.41) scale(0.1)" xlink:href="media/assets/img/habitta/veredas-lira/app/quote/veredas_lira-master_plan.png"/>

				<path class="cls-1" d="M144.75,14.1l546.62,5.36L646,655.14l-5.61,87.22,5.5,4.67-4.42,67.69-1.62,39.35L8.17,855.73,22.85,761l-2.61-.38L45.61,609.81l3-1.37,13.06-80-1.62.25L144.75,14.1M138.82,7l-1,5.93L53.13,527.57l-1.56,9.52,1.63-.25L42.29,603.63l-3,1.36-.62,3.66L13.33,759.41l-1.19,7.08,2.71.38L1.25,854.66,0,862.75l8.19,0,631.69-1.66,6.7,0,.28-6.69,1.62-39.27,4.42-67.6.23-3.51-2.69-2.28-2.82-2.4L653,655.58,698.35,20l.53-7.42-7.44-.07L144.82,7.1l-6-.06Z"/>

				<rect class="cls-2" x="47" y="709.39" width="84.13" height="25.99"/>

				<rect class="cls-2" x="144.5" y="706.14" width="181.01" height="50.35"/>

				<rect class="cls-2" x="441.51" y="744.63" width="156.89" height="31.83"/>

				<text class="cls-8" transform="translate(177.95 184.49)">E<tspan class="cls-9" x="16.08" y="0">T</tspan><tspan x="29.47" y="0">A</tspan><tspan class="cls-10" x="48.76" y="0">P</tspan><tspan x="62.74" y="0">A 4</tspan></text>

				<text class="cls-8" transform="translate(462.5 197.21)">E<tspan class="cls-9" x="16.08" y="0">T</tspan><tspan x="29.47" y="0">A</tspan><tspan class="cls-10" x="48.76" y="0">P</tspan><tspan x="62.74" y="0">A 2</tspan></text>

				<text class="cls-11" transform="translate(53.26 728.44)">ESCUELA</text>

				<text class="cls-11" transform="translate(159.24 728.45)">ÁREA COMERCIAL Y<tspan x="0" y="20.05">ENTRETENIMIEN</tspan><tspan class="cls-12" x="122.17" y="20.05">T</tspan><tspan x="129.73" y="20.05">O</tspan></text>

				<text class="cls-11" transform="translate(450.31 767.18)">ÁREA COMERCIAL</text>

				<text class="cls-8" transform="translate(122.3 426.09)">E<tspan class="cls-9" x="16.08" y="0">T</tspan><tspan x="29.47" y="0">A</tspan><tspan class="cls-10" x="48.76" y="0">P</tspan><tspan x="62.74" y="0">A 2</tspan></text>

				<a href="#!/veredas_lira-cedro" class="cedro-g">
					<rect class="cls-13" x="381.89" y="409.55" width="281.7" height="169.5"/>
					<text class="cls-8" transform="translate(473.65 505.29)">CEDRO</text>
				</a>

				<a href="#!/veredas_lira-sabino" class="sabino-g">
					<rect class="cls-13" x="367.99" y="580.05" width="281.7" height="169.5"/>
					<text class="cls-8" transform="translate(457.34 672.09)">SABINO</text>
				</a>

			</g>
		</svg>

	</div>


</body>
</html>