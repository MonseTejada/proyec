<!DOCTYPE html>
<html lang="es_MX">
<head>
	<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" contet="ie=edge">
	<meta name="author" content="Ing. Saúl Fernando Torres Hernández">
	<meta name="description" content="Grúpo CCIMA S.A. de C.V." />
	<meta name="keywords" content="grupo ccima, navetec, constructora, servicio de construccion, desarrolladora, llave en mano, built to suit, renta de maquinaria, renta de gruas, maquinaria pesada para construccion, naves industriales, renta naves industriales, venta naves industriales, parques industriales, terrenos, terrenos industriales, terrenos habitacionales, bienes raices, inmobiliaria" />

	<title>Bosque - Portto Blanco</title>

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

				<a href="#!/portto_blanco" class="brand-logo white left"><img class="logo-pb" src="media/assets/img/habitta/portto-blanco/logos/lomas_pb_logo.svg"></a>

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
					<h1 class="center-align">LOMAS DE PORTTO BLANCO CIMATARIO</h1>
				</div>
			</div>
		</div>

				
		<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
		viewBox="0 0 1366 995" style="enable-background:new 0 0 1366 995;" xml:space="preserve">
		<style type="text/css">
		.st0{fill-rule:evenodd;clip-rule:evenodd;fill:#5170A2;stroke:#002856;stroke-width:2.9992;stroke-miterlimit:10;}
		.st1{fill:#0F264B;}
		.st2{fill:#FFFFFF;}
		.st3{font-family:'CenturyGothic-Bold';}
		.st4{font-size:23.8218px;}
		</style>
		<g id="PORTTO_BLANCO_CIMATARIO_II">
		<g id="MACHOTE">
		</g>
		<g id="BASE">
		</g>
		<g id="ETAPA_1">
		<g id="ISLA_A">
		</g>
		<g id="ISLA_B">
		</g>
		<g id="ISLA_C">
		</g>
		<g id="ISLA_D">
		</g>
		</g>
		<g id="ETAPA_2">
		<g id="ISLA_E">
		</g>
		<g id="ISLA_F">
		</g>
		<g id="ISLA_G">
		</g>
		<g id="ISLA_H">
		</g>
		<g id="ISLA_I">
		</g>
		</g>
		<g id="COMPLEMENTO">
		</g>
		<g id="ETAPA_3_Y_4_1_">
		</g>
		<g id="ETAPA_1_Y_2">
		</g>
		</g>
		<g id="Capa_1_1_">

		<image style="overflow:visible;enable-background:new    ;" width="1366" height="995" xlink:href="media/assets/img/habitta/portto-blanco/app/devs/lomas/lomas_fondo.jpg"  transform="matrix(1 0 0 1 -3.576194e-03 -3.411537e-02)">
		</image>
		<g>

		<g>
			<polygon class="st0" points="0.8,2.4 61.4,330.1 759.2,331 759.2,85.1 224.7,84.7 224.7,7.1 158,1.4 			"/>
		</g>
		<g>
			<rect x="313.4" y="176.7" class="st1" width="121.8" height="40"/>
			<text id="desierto_03_3_" transform="matrix(1 0 0 1 328.7183 205.4551)" class="st2 futura-book st4">ETAPA 4</text>
		</g>
		</g>
		<g>
			<a href="#!/Portto_Blanco-Lomas_2" class="pb__condo">
				<g>
					<polygon class="pb__condo-bg" points="1349.2,213.7 1280,331.1 759.2,331 759.2,85.1 1364.2,85.6 			"/>
				</g>
				<g>
					<rect x="954.7" y="175.4" class="st1" width="121.8" height="40"/>
					<text id="desierto_03_4_" transform="matrix(1 0 0 1 970.0516 204.1217)" class="st2 futura-book st4">ETAPA 2</text>
				</g>
			</a>
		</g>
		<g id="ETAPA_3_Y_4_2_">
		<g>
			<a href="#!/Portto_Blanco-Lomas_1" class="pb__condo">
			<polygon class="pb__condo-bg"   points="597.6,331 1280,331 971.4,862.2 774.6,649.3 812.9,627.2 782.6,595.5 662.6,664.8 			"/>
			<g>
				<rect x="808.1" y="450" class="st1" width="121.8" height="40"/>
				<text id="desierto_03_1_" transform="matrix(1 0 0 1 823.4806 478.7549)" class="st2 futura-book st4">ETAPA 1</text>
			</g>
			</a>

		</g>
		</g>
		<g id="ETAPA_3_Y_4_3_">
		<g>
		    <a href="#!/Portto_Blanco-Lomas_3" class="pb__condo">
			<polygon  class="pb__condo-bg" points="597.6,331 61,331 183.5,993.4 812.9,627.2 782.6,595.5 662.6,664.8 			"/>
			<g>
				<rect x="329.4" y="550" class="st1" width="121.8" height="40"/>
				<text id="desierto_03_2_" transform="matrix(1 0 0 1 344.814 578.7549)" class="st2 futura-book st4">ETAPA 3</text>
			</g>
			</a>
		</g>
		</g>
		</g>
		</svg>


    </div>

</body>
</html>
