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
					<h1 class="center-align">BOSQUE</h1>
				</div>
			</div>
		</div>

        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
             y="0px" viewBox="0 0 1374.5 2811.6" style="enable-background:new 0 0 1374.5 2811.6;" xml:space="preserve">

            <style type="text/css">
                .st0{fill:#4C6EA3;stroke:#2C2A4E;stroke-width:3.1984;stroke-miterlimit:10;}
                .st4{font-size:65.4463px;}
            </style>

            <image style="overflow:visible;" width="1366" height="2791" xlink:href="media/assets/img/habitta/portto-blanco/app/devs/bosque/bosque.jpg"  transform="matrix(1 0 0 1 4.25 10.3)"></image>

            <a href="#!/Portto_Blanco-Bosque_1" class="pb__condo">
                <path class="pb__condo-bg" d="M1247.6,1596.4l-135.7,1163.9l-61.7,2.7c0,0-43.4-36.2-100-35.2c-51.1,0.9-96.9,41.8-96.9,41.8L599.4,2783 l33.2-1186.6H1247.6z"/>
                <g>
                    <rect x="755" y="1959.5" class="pb-sprite-1" width="341.7" height="77.4"/>
                    <text transform="matrix(1 0 0 1 776.0197 2025.6737)" class="white__fill futura-book st4">BOSQUE 1 </text>
                </g>
            </a>

            <a href="#!/Portto_Blanco-Bosque_2" class="pb__condo">
                <polygon class="pb__condo-bg" points="632.6,1597.9 599.4,2783 5.4,2807 1.5,1596.4"/>
                <g>
                    <rect x="161.7" y="1959.5" class="pb-sprite-1" width="351" height="77.4"/>
                    <text transform="matrix(1 0 0 1 182.7097 2025.6737)" class="white__fill futura-book st4">BOSQUE 2</text>
                </g>
			</a>

            <a href="#!/Portto_Blanco-Bosque_3" class="pb__condo">
                <polygon class="pb__condo-bg" points="630.4,883.4 630.4,896.6 710.6,895.7 713.6,1060.9 1308.9,1062.3 1247.6,1596.4 1.5,1596.4 -0.7,881.9"/>
                <g>
                    <rect x="432.4" y="1245" class="pb-sprite-1" width="348.4" height="77.4"/>
                    <text transform="matrix(1 0 0 1 453.3315 1311.1709)" class="white__fill futura-book st4">BOSQUE 3</text>
                </g>
            </a>

            <a href="#!/Portto_Blanco-Bosque_4" class="pb__condo">
                <polygon class="pb__condo-bg" points="1368.9,549.3 900,203.8 623,4.5 623,881.2 629.7,882.5 629.7,895.7 712.7,895.6 712.7,1060.1 1309.2,1060.1"/>
                <g>
                    <rect x="795.1" y="618.3" class="pb-sprite-1" width="352.4" height="77.4"/>
                    <text transform="matrix(1 0 0 1 816.0383 684.4943)" class="white__fill futura-book st4">BOSQUE 4</text>
                </g>
            </a>

        </svg>

    </div>

</body>
</html>
