<html lang="es_MX">
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" contet="ie=edge">
    <meta name="author" content="Ing. Saúl Fernando Torres Hernández">
    <meta name="description" content="Grúpo CCIMA S.A. de C.V." />
    <meta name="keywords" content="grupo ccima, navetec, constructora, servicio de construccion, desarrolladora, llave en mano, built to suit, renta de maquinaria, renta de gruas, maquinaria pesada para construccion, naves industriales, renta naves industriales, venta naves industriales, parques industriales, terrenos, terrenos industriales, terrenos habitacionales, bienes raices, inmobiliaria" />

    <title>Grupo CCIMA</title>

    <script type="text/javascript" src="media/assets/js/analytics.js"></script>

    <link rel="stylesheet" type="text/css" href="media/bower_components/materialize/css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="media/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="media/assets/css/helpers.css">
	<link rel="stylesheet" type="text/css" href="media/assets/css/quote.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <script type="text/javascript" src="media/bower_components/jquery.min.js"></script>
    <script type="text/javascript" src="media/bower_components/materialize/js/materialize.min.js"></script>
    <script type="text/javascript" src="media/assets/js/init.js"></script>
</head>
<body ng-controller="DashboardUsersCtrl as dashboard">

    <md-sidenav class="cc-sidenav md-sidenav-left md-whiteframe-4dp" md-component-id="left">
		<md-toolbar class="md-hue-2">
			<h1 class="md-toolbar-tools">GENERATING PROGRESS</h1>
		</md-toolbar>
		<a href="#!/habitta" ng-click="close()">
			<div class="link-body link-dev valign-wrapper">
				<span class="" style="width: 66%;">Desarrollo Habitacional</span><img class="" src="media/assets/img/logos/logo-habitta.svg" height="18">
			</div>
		</a>
		<md-divider></md-divider>
		<a href="#!/Navetec" ng-click="close()">
			<div class="link-body link-dev valign-wrapper">
				<span class="" style="width: 66%;">Desarrollo Industrial</span><img class="" src="media/assets/img/logos/logo-navetec.svg" height="28">
			</div>
		</a>
		<!-- <md-divider></md-divider>
		<a href="" ng-click="close()">
			<div class="link-body link-dev valign-wrapper">
				<span class="" style="width: 66%;">Construcción</span><img class="" src="media/assets/img/logos/logo-construye.svg" height="34">
			</div>
		</a>
		<md-divider></md-divider>
		<a href="" ng-click="close()">
			<div class="link-body link-dev valign-wrapper">
				<span class="" style="width: 66%;">Renta de Maquinaria</span><img class="" src="media/assets/img/logos/logo-rent.svg" height="28">
			</div>
		</a> -->
		<md-toolbar class="md-hue-2">
			<h1 class="md-toolbar-tools">NAVEGACIÓN</h1>
		</md-toolbar>
		<a href="#!" ng-click="close()">
			<div class="link-body link-nav">
				Inicio
			</div>
		</a>
		<md-divider></md-divider>
		<a href="#!/dashboard" ng-click="close()">
			<div class="link-body link-nav">
				Dashboard
			</div>
		</a>
		<md-divider></md-divider>
		<a href="#!/quote_tool" ng-click="close()">
			<div class="link-body link-nav">
				Cotizador
			</div>
		</a>
		<md-divider></md-divider>
		<a href="#!/Dashboard-Desarrollos" ng-click="close()">
			<div class="link-body link-nav">
				Desarrollos
			</div>
		</a>
		<md-divider></md-divider>
		<a href="#!/users" ng-click="close()">
			<div class="link-body link-nav">
				Usuarios
			</div>
		</a>
		<md-divider></md-divider>
		<a href="#!/Cambiar_Contraseña" ng-click="close()">
			<div class="link-body link-nav">
				Cambiar contraseña
			</div>
		</a>
		<md-divider></md-divider>
		<a href="#!/login" ng-click="close()">
			<div class="link-body link-nav">
				Cerrar sesión
			</div>
		</a>
		<md-divider></md-divider>
	</md-sidenav>

    <div ng-controller="sideNavCtrl" class="navbar-fixed">
        <nav class="cc-nav white" role="navigation">
            <div class="nav-wrapper">
                <div class="container">
                    <ul>
                        <li><a href="#!" class="nav-logo"><img src="media/assets/img/logos/logo.png"></a></li>
                        <li class="right"><md-button class="md-icon-button md-noink" ng-click="toggleLeft()">
                            <svg viewBox="0 0 24 24" width="24"><path d="M3,18h18v-2H3V18z M3,13h18v-2H3V13z M3,6v2h18V6H3z" fill="#5F6368"></path></svg>
                        </md-button></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

	<div class="plano_container">

		<div class="container mt-64">
			<div class="row quote-header">
				<div class="col s12">
					<h1 class="center-align">CLUSTER DESIERTO</h1>
				</div>
			</div>
		</div>

		
		<svg class="quote__map" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
			viewBox="0 0 1366 1061" style="enable-background:new 0 0 1366 1061;" xml:space="preserve">
			<image style="overflow:visible;" width="1366" height="1061" xlink:href="media/assets/img/habitta/portto-blanco/quote/desierto/desierto.jpg"></image>
			<g>
				<a href="#!/Portto_Blanco-Desierto_Uno-Inventario" class="pb__condo">
					<path class="pb__condo-bg" d="M0.6,574.5l5.6-1.5l-1.5-5.7L24,561l19.4-8.3l18.4-9.9l167.1-108.2l62.4,97.3l-2,23.6
						c0,0,12.1,4.3,13,16.3c1,13.5-9.3,19-9.3,19l296.6,457.8l-13.7,12.5L133.5,1008L0.6,574.5z"/>
					<g>
						<rect class="blue__fill" x="140.9" y="775.5" width="201.9" height="40"/>
						<text class="desierto__heading white__fill futura-med" transform="matrix(1 0 0 1 159.2575 804.8844)">DESIERTO 01</text>
					</g>
				</a>
				<a href="#!/Portto_Blanco-Desierto_Dos-Inventario" class="pb__condo">
					<path class="pb__condo-bg" d="M488.3,266.6L228.9,434.5l62.4,97.3l-2,23.6c0,0,12.1,4.3,13,16.3c1,13.5-9.3,19-9.3,19
						l296.6,457.8L843,813.4L488.3,266.6z"/>
					<g>
						<rect class="blue__fill" x="412.1" y="587.8" width="201.9" height="40"/>
						<text class="desierto__heading white__fill futura-med" transform="matrix(1 0 0 1 430.4499 617.1902)">DESIERTO 02</text>
					</g>
				</a>
				<a href="#!/Portto_Blanco-Desierto_Tres-Inventario" class="pb__condo">
					<path class="pb__condo-bg" d="M488.3,266.6l172.1-111.5l14.6-8.4l11.5-5.1l7.3-2.5L872.6,91L916,192.3l6.6,14.6
						c0,0-17.3,8.4-11,25.2c6.6,17.8,25.4,12.1,25.4,12.1l183.2,428.5l-90.4,30.3l-83.9,14.8L843,813.2L488.3,266.6z"/>
					<g>
						<rect class="blue__fill" x="690.9" y="384" width="201.9" height="40"/>
						<text class="desierto__heading white__fill futura-med" transform="matrix(1 0 0 1 709.2863 413.5138)">DESIERTO 03</text>
					</g>
				</a>
				<a href="#!/Portto_Blanco-Desierto_Cuatro-Inventario" class="pb__condo">
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