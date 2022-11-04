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

<body>

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

	<div class="plano_container">

		<div class="container mt-64">
			<div class="row quote-header">
				<div class="col s12">
					<h1 class="center-align">CLUSTER DESIERTO</h1>
					<div class="quote-description">
						<p class="left">Cotiza facilmente con un solo Click</p>
						<img class="quote-icon-tap mt-15 ml-10 left" src="media/assets/img/icons/tap.svg">
					</div>
				</div>
			</div>
		</div>

		<svg class="quote__map" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
			viewBox="0 0 1366 1061" style="enable-background:new 0 0 1366 1061;" xml:space="preserve">
			<image style="overflow:visible;" width="1366" height="1061" xlink:href="media/assets/img/habitta/portto-blanco/quote/desierto/desierto.jpg"></image>
			<g>
				<a href="#!/Portto_Blanco-Desierto_Uno" class="pb__condo">
					<path class="pb__condo-bg" d="M0.6,574.5l5.6-1.5l-1.5-5.7L24,561l19.4-8.3l18.4-9.9l167.1-108.2l62.4,97.3l-2,23.6
						c0,0,12.1,4.3,13,16.3c1,13.5-9.3,19-9.3,19l296.6,457.8l-13.7,12.5L133.5,1008L0.6,574.5z"/>
					<g>
						<rect class="blue__fill" x="140.9" y="775.5" width="201.9" height="40"/>
						<text class="desierto__heading white__fill futura-med" transform="matrix(1 0 0 1 159.2575 804.8844)">DESIERTO 01</text>
					</g>
				</a>
				<a href="#!/Portto_Blanco-Desierto_Dos" class="pb__condo">
					<path class="pb__condo-bg" d="M488.3,266.6L228.9,434.5l62.4,97.3l-2,23.6c0,0,12.1,4.3,13,16.3c1,13.5-9.3,19-9.3,19
						l296.6,457.8L843,813.4L488.3,266.6z"/>
					<g>
						<rect class="blue__fill" x="412.1" y="587.8" width="201.9" height="40"/>
						<text class="desierto__heading white__fill futura-med" transform="matrix(1 0 0 1 430.4499 617.1902)">DESIERTO 02</text>
					</g>
				</a>
				<a href="#!/Portto_Blanco-Desierto_Tres" class="pb__condo">
					<path class="pb__condo-bg" d="M488.3,266.6l172.1-111.5l14.6-8.4l11.5-5.1l7.3-2.5L872.6,91L916,192.3l6.6,14.6
						c0,0-17.3,8.4-11,25.2c6.6,17.8,25.4,12.1,25.4,12.1l183.2,428.5l-90.4,30.3l-83.9,14.8L843,813.2L488.3,266.6z"/>
					<g>
						<rect class="blue__fill" x="690.9" y="384" width="201.9" height="40"/>
						<text class="desierto__heading white__fill futura-med" transform="matrix(1 0 0 1 709.2863 413.5138)">DESIERTO 03</text>
					</g>
				</a>
				<a href="#!/Portto_Blanco-Desierto_Cuatro" class="pb__condo">
					<path class="pb__condo-bg" d="M1227.4,96.9L1201.8,0l-148,42.6L872.6,91L916,192.4l6.6,14.6c0,0-17.3,8.4-11,25.2
						c6.6,17.8,25.4,12.1,25.4,12.1L1118.5,669l3.3,7.9l244-81.2L1227.4,96.9z"/>
					<g>
						<rect class="blue__fill" x="1013.8" y="273.6" width="201.9" height="40"/>
						<text class="desierto__heading white__fill futura-med" transform="matrix(1 0 0 1 1032.1174 303.0084)">DESIERTO 04</text>
					</g>
				</a>
			</g>
		</svg>

	</div>

</body>
</html>