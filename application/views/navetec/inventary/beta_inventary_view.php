<!DOCTYPE html>
<html lang="es_MX">
<head>
	<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" contet="ie=edge">
	<meta name="author" content="Ing. Saúl Fernando Torres Hernández">
	<meta name="description" content="Grúpo CCIMA S.A. de C.V."/>
	<meta name="keywords" content="grupo ccima, navetec, constructora, servicio de construccion, desarrolladora, llave en mano, built to suit, renta de maquinaria, renta de gruas, maquinaria pesada para construccion, naves industriales, renta naves industriales, venta naves industriales, parques industriales, terrenos, terrenos industriales, terrenos habitacionales, bienes raices, inmobiliaria"/>

	<title>Grupo CCIMA</title>

	<script type="text/javascript" src="media/assets/js/analytics.js"></script>

	<link rel="stylesheet" type="text/css" href="media/bower_components/materialize/css/materialize.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="media/assets/css/portto-blanco.css">
	<link rel="stylesheet" type="text/css" href="media/assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="media/assets/css/navetec.css">
	<link rel="stylesheet" type="text/css" href="media/assets/css/quote.css">
	<link rel="stylesheet" type="text/css" href="media/assets/css/helpers.css">

	<script type="text/javascript" src="media/bower_components/jquery.min.js"></script>
	<script type="text/javascript" src="media/bower_components/materialize/js/materialize.min.js"></script>

</head>

<body ng-controller="NvtBetaCtrl as nvtBeta">
  
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

	<div class="modal__panel" ng-class="nvtBeta.nvtBetaListDialogDisplay">
		<div class="container__panel">
			<div class="toolbar__panel blue-txt">
				<p>BETA - Naves</p>
				<span class="close__panel" ng-click="nvtBeta.closeNvtBetaListDialog()"><i class="material-icons" style="margin:0;">close</i></span>
    		</div>
			<div class="content__panel">
				<ul class="saufth-collapsable">
					<li ng-repeat="property in nvtBeta.inmovablesData.inmovables">
						<div class="collapsable__header" ng-click="">
							<div>
								<p class="futura-book collapsable__heading" style="margin: 0;">Nave {{property.number}}</p>
								<p class="collapsable__text" style="margin: 0;">{{property.condominium}}</p>
							</div>
							<div class="pl-40">
								<p class="collapsable__heading" style="margin: 0;">{{property.type}}</p>
								<p class="collapsable__text" style="margin: 0;">{{property.area}} M&sup2;</p>
							</div>
							<div flex></div>
							<div class="blue-pb00__bg">
								<div class="p-20 pointer" ng-class="nvtBeta.inmovablesClassList[$index]" ng-click="nvtBeta.setLeadProperty(nvtBeta.inmovablesData.inmovables[$index])"></div>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="modal-dialog" ng-class="nvtBeta.dialogDisplay">
		<div class="backdrop-dialog" ng-click="nvtBeta.closeDialog()"></div>
		<div class="container-dialog p-20">
			<div class="toolbar-dialog blue-txt">
				Asosiar Lote
				<span ng-click="nvtBeta.closeDialog()">
					<img class="btn-close-dialog mt-4" src="media/assets/img/icons/close.svg">
				</span>
			</div>
			<div class="content-dialog">
				<p>{{nvtBeta.propertyData.reference}}</p>
				<ul class="saufth-collapsable">
					<li ng-repeat="user in nvtBeta.activeUsers" ng-if="user.idProfile > 1">
						<div class="saufth-collapsable-header" ng-click="nvtBeta.selectUser(lead.idLead, $index)" ng-class="nvtBeta.activeUsers[$index].collapsableHeaderClass">
							<div style="display:flex;"><i class="material-icons pr-15">account_circle</i>{{user.name + ' ' + user.last_name}}</div>
							<div class="py-5 pl-15"></div>
							<div class="saufth-badge blue-bg light-txt ml-15">{{user.leads.length}}</div>
						</div>
						<ul class="saufth-collapsable-body" ng-class="nvtBeta.activeUsers[$index].collapsableBodyClass">
							<li class="saufth-collapsable-body-li" ng-repeat="lead in user.leads">
								<div class="saufth-collapsable-item-h" ng-click="nvtBeta.selectLeadPropertyStatus(lead.idUser, lead.idLead)">
									<i class="material-icons px-15">assignment_ind</i>{{lead.name + ' ' + lead.last_name}}
								</div>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="modal-dialog" ng-class="nvtBeta.dialogStatusDisplay">
		<div class="backdrop-dialog" ng-click="nvtBeta.closeDialogStatus()"></div>
		<div class="container-dialog p-20 status-dialog">
			<div class="toolbar-dialog blue-txt">
				Asosiar Lote
				<span ng-click="nvtBeta.closeDialogStatus()">
					<img class="btn-close-dialog mt-4" src="media/assets/img/icons/close.svg">
				</span>
			</div>
			<div class="content-dialog">
				<p>{{nvtBeta.propertyData.reference}}</p>
				<ul class="saufth-collapsable w100">
					<li>
						<div class="saufth-collapsable-header" ng-click="nvtBeta.setStatus(1)"><div class="color-block pb-property-active-bg mr-15"></div>Disponible</div>
					</li>
					<li>
						<div class="saufth-collapsable-header" ng-click="nvtBeta.setStatus(6)"><div class="color-block darkgray__bg mr-15"></div>Estratégico</div>
					</li>
					<li>
						<div class="saufth-collapsable-header" ng-click="nvtBeta.setStatus(2)"><div class="color-block pb_lightred-bg mr-15"></div>En espera</div>
					</li>
					<li>
						<div class="saufth-collapsable-header" ng-click="nvtBeta.setStatus(3)"><div class="color-block brown mr-15"></div>Apartado</div>
					</li>
					<li>
						<div class="saufth-collapsable-header" ng-click="nvtBeta.setStatus(4)"><div class="color-block mustard-bg mr-15"></div>Enganchado</div>
					</li>
					<li>
						<div class="saufth-collapsable-header" ng-click="nvtBeta.setStatus(5)"><div class="color-block pb_teal-bg mr-15"></div>Vendido</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
	
	<div class="plano_container">

		<div class="container mt-64">
			<div class="row quote-header">
				<div class="col s12">
					<h1 class="center-align">BETA</h1>
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
				<p class="pl-40 py-2">Disponible</p>
			</div>
			<div class="color-table">
				<div class="color-block darkgray__bg left"></div>
				<p class="pl-40 py-2">Estratégico</p>
			</div>
			<div>
				<div class="color-block pb_lightred-bg left"></div>
				<p class="pl-40 py-2">En espera</p>
			</div>
			<div>
				<div class="color-block brown left"></div>
				<p class="pl-40 py-2">Apartado</p>
			</div>
			<div>
				<div class="color-block mustard-bg left"></div>
				<p class="pl-40 py-2">Enganchado</p>
			</div>
			<div>
				<div class="color-block pb_teal-bg left"></div>
				<p class="pl-40 py-2">Vendido</p>
			</div>
			<div>
				<button class="btn-flat right"><i style="font-size:30px;" class="material-icons" ng-click="nvtBeta.showInmovablesList()">list</i></button>
			</div>
		</div>

		<div class="mt-64 pt-64 fs__26px" style="margin-left:10%;">Locales comerciales planta baja</div>

		<svg version="1.1" class="quote__map" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
			viewBox="0 0 1366 340.5" style="enable-background:new 0 0 1366 340.5;" xml:space="preserve">

			<style type="text/css">
				.stz0{fill:#DCAF76;}
				.stz2{fill:#CCD609;}
				.stz4{font-size:9.3978px;}
				.stz8{font-size:7.8315px;}
				.stz9{opacity:0.6;fill:#ECAC3A;enable-background:new;}
				.stz10{fill:none;stroke:#FFFFFF;stroke-miterlimit:10;}
				.stz11{fill:none;stroke:#000000;stroke-width:3;stroke-miterlimit:10;}
			</style>

			<image style="overflow:visible;enable-background:new;" width="1366" height="345" xlink:href="media/assets/img/navetec/app/beta/shops/beta-shops-l0.jpg"  transform="matrix(1 0 0 1 3.333334e-02 6.666667e-02)"></image>

			<g id="base_planta_baja">
				<polygon class="stz0" points="644.2,72.1 734.1,72.2 734.1,117.2 644.2,117.2"/>
			</g>
			<g id="isla_c_comercial">
				<g id="almacen_2_">
					<polygon class="property nvt-sprite-2" points="6.2,0 60.9,0.1 60.9,127.8 6.2,127.8"/>
					<g>
						<text transform="matrix(0.9736 0 0 1 11.3394 54.0303)" class="stz2 futura-book stz4">ALMACEN</text>
					</g>
				</g>
				<g ng-class="nvtBeta.inmovablesClassList[34]" ng-click="nvtBeta.setLeadProperty(nvtBeta.inmovablesData.inmovables[34])">
					<polygon class="property nvt-sprite-1" points="60.9,0.1 117.5,0.1 117.5,127.8 60.9,127.8"/>
					<g id="Info_1_">
						<g id="Titulo_1_">
							<text transform="matrix(0.9736 0 0 1 72.9888 54.0303)" class="stz2 futura-book stz4">LOCAL </text>
							<text transform="matrix(0.9736 0 0 1 83.9902 65.3301)" class="stz2 futura-book stz4">01</text>
						</g>
						<g id="Detalles_1_">
							<text transform="matrix(1 0 0 1 78.7084 8.3621)" class="white__fill futura-light stz8">04.00</text>
							<text transform="matrix(1 0 0 1 78.7084 125.0085)" class="white__fill futura-light stz8">04.00</text>
							<text transform="matrix(0 -1 1 0 68.564 76.4658)" class="white__fill futura-light stz8">09.00</text>
							<text transform="matrix(1 0 0 1 73.4799 74.1648)" class="white__fill futura-light stz8">36.00m2</text>
						</g>
					</g>
				</g>
				<g ng-class="nvtBeta.inmovablesClassList[35]" ng-click="nvtBeta.setLeadProperty(nvtBeta.inmovablesData.inmovables[35])">
					<polygon class="property nvt-sprite-2" points="174,0 174,127.9 117.5,127.8 117.5,0.1"/>
					<text transform="matrix(1 0 0 1 135.2494 8.3621)" class="white__fill futura-light stz8">04.00</text>
					<text transform="matrix(1 0 0 1 135.2494 125.0085)" class="white__fill futura-light stz8">04.00</text>
					<text transform="matrix(0 -1 1 0 125.1049 76.4658)" class="white__fill futura-light stz8">09.00</text>
					<text transform="matrix(1 0 0 1 130.9115 74.1648)" class="white__fill futura-light stz8">36.00m2</text>
					<g>
						<text transform="matrix(0.9736 0 0 1 130.4204 54.0303)" class="stz2 futura-book stz4">LOCAL </text>
						<text transform="matrix(0.9736 0 0 1 141.4219 65.3301)" class="stz2 futura-book stz4">02</text>
					</g>
				</g>
				<g ng-class="nvtBeta.inmovablesClassList[36]" ng-click="nvtBeta.setLeadProperty(nvtBeta.inmovablesData.inmovables[36])">
					<polygon class="property nvt-sprite-1" points="230.5,0 230.5,127.8 174,127.9 174,0"/>
					<text transform="matrix(1 0 0 1 190.976 8.3621)" class="white__fill futura-light stz8">04.00</text>
					<text transform="matrix(1 0 0 1 190.9779 125.0085)" class="white__fill futura-light stz8">04.00</text>
					<text transform="matrix(0 -1 1 0 180.8334 76.4658)" class="white__fill futura-light stz8">09.00</text>
					<text transform="matrix(1 0 0 1 186.64 74.1648)" class="white__fill futura-light stz8">36.00m2</text>
					<g>
						<text transform="matrix(0.9736 0 0 1 186.1489 54.0303)" class="stz2 futura-book stz4">LOCAL </text>
						<text transform="matrix(0.9736 0 0 1 197.1504 65.3301)" class="stz2 futura-book stz4">03</text>
					</g>
				</g>
				<g ng-class="nvtBeta.inmovablesClassList[37]" ng-click="nvtBeta.setLeadProperty(nvtBeta.inmovablesData.inmovables[37])">
					<polygon class="property nvt-sprite-2" points="287,0 286.9,127.5 230.5,127.8 230.5,0"/>
					<text transform="matrix(1 0 0 1 247.4818 8.3621)" class="white__fill futura-light stz8">04.00</text>
					<text transform="matrix(1 0 0 1 247.4818 125.0085)" class="white__fill futura-light stz8">04.00</text>
					<text transform="matrix(0 -1 1 0 237.3373 76.4658)" class="white__fill futura-light stz8">09.00</text>
					<text transform="matrix(1 0 0 1 243.144 74.1648)" class="white__fill futura-light stz8">36.00m2</text>
					<g>
						<text transform="matrix(0.9736 0 0 1 242.6528 54.0303)" class="stz2 futura-book stz4">LOCAL </text>
						<text transform="matrix(0.9736 0 0 1 253.6543 65.3301)" class="stz2 futura-book stz4">04</text>
					</g>
				</g>
				<g ng-class="nvtBeta.inmovablesClassList[38]" ng-click="nvtBeta.setLeadProperty(nvtBeta.inmovablesData.inmovables[38])">
					<polygon class="property nvt-sprite-1" points="343.9,0 343.9,127.4 286.9,127.5 287,0"/>
					<text transform="matrix(1 0 0 1 304.1303 8.3621)" class="white__fill futura-light stz8">04.00</text>
					<text transform="matrix(1 0 0 1 304.1303 125.0085)" class="white__fill futura-light stz8">04.00</text>
					<text transform="matrix(0 -1 1 0 293.9857 76.4658)" class="white__fill futura-light stz8">09.00</text>
					<text transform="matrix(1 0 0 1 299.7924 74.1648)" class="white__fill futura-light stz8">36.00m2</text>
					<g>
						<text transform="matrix(0.9736 0 0 1 299.3013 54.0303)" class="stz2 futura-book stz4">LOCAL </text>
						<text transform="matrix(0.9736 0 0 1 310.3027 65.3301)" class="stz2 futura-book stz4">05</text>
					</g>
				</g>
				<g ng-class="nvtBeta.inmovablesClassList[39]" ng-click="nvtBeta.setLeadProperty(nvtBeta.inmovablesData.inmovables[39])">
					<polygon class="property nvt-sprite-2" points="411.1,0 411.1,127.4 343.9,127.4 343.9,0"/>
					<text transform="matrix(1 0 0 1 366.2299 8.3621)" class="white__fill futura-light stz8">04.75</text>
					<text transform="matrix(1 0 0 1 366.2299 125.0085)" class="white__fill futura-light stz8">04.75</text>
					<text transform="matrix(0 -1 1 0 351.2886 76.4658)" class="white__fill futura-light stz8">09.00</text>
					<text transform="matrix(1 0 0 1 361.894 74.1648)" class="white__fill futura-light stz8">42.75m2</text>
					<g>
						<text transform="matrix(0.9736 0 0 1 361.4028 54.0303)" class="stz2 futura-book stz4">LOCAL </text>
						<text transform="matrix(0.9736 0 0 1 372.4043 65.3301)" class="stz2 futura-book stz4">06</text>
					</g>
					<g>
						<rect x="348.4" y="45.7" transform="matrix(0.6925 -0.7214 0.7214 0.6925 72.583 269.3182)" class="stz9" width="7.6" height="7.6"/>
						<polygon class="stz9" points="352.3,54.9 352.2,49.7 352.1,44.2 357.6,49.4"/>
					</g>
				</g>
				<g ng-class="nvtBeta.inmovablesClassList[40]" ng-click="nvtBeta.setLeadProperty(nvtBeta.inmovablesData.inmovables[40])">
					<polygon class="property nvt-sprite-1" points="479.4,0.1 479.4,127.6 411.1,127.4 411.1,0"/>
					<text transform="matrix(1 0 0 1 433.9682 8.3621)" class="white__fill futura-light stz8">04.75</text>
					<text transform="matrix(1 0 0 1 433.9682 125.0085)" class="white__fill futura-light stz8">04.75</text>
					<text transform="matrix(0 -1 1 0 418.4818 76.4658)" class="white__fill futura-light stz8">09.00</text>
					<text transform="matrix(0 -1 1 0 476.4272 76.4658)" class="white__fill futura-light stz8">09.00</text>
					<text transform="matrix(1 0 0 1 429.6322 74.1648)" class="white__fill futura-light stz8">42.75m2</text>
					<g>
						<text transform="matrix(0.9736 0 0 1 429.1411 54.0303)" class="stz2 futura-book stz4">LOCAL </text>
						<text transform="matrix(0.9736 0 0 1 440.1426 65.3301)" class="stz2 futura-book stz4">07</text>
					</g>
					<g>
						<rect x="416.1" y="45.7" transform="matrix(0.6925 -0.7214 0.7214 0.6925 93.4219 318.1562)" class="stz9" width="7.6" height="7.6"/>
						<polygon class="stz9" points="420,54.9 419.9,49.7 419.8,44.2 425.3,49.4"/>
					</g>
				</g>
				<g id="lineas_1_">
					<line class="stz10" x1="60.9" y1="0.1" x2="60.9" y2="127.8"/>
					<line class="stz10" x1="117.5" y1="0.1" x2="117.5" y2="127.8"/>
					<line class="stz10" x1="174" y1="0" x2="174" y2="127.9"/>
					<line class="stz10" x1="230.5" y1="0" x2="230.5" y2="127.8"/>
					<line class="stz10" x1="287" y1="0" x2="286.9" y2="127.5"/>
					<line class="stz10" x1="343.9" y1="0" x2="343.9" y2="127.4"/>
					<line class="stz10" x1="411.1" y1="0" x2="411.1" y2="127.4"/>
				</g>
			</g>
			<g id="completento">
				<polygon class="stz11" points="1364.3,0 1365.1,343.5 1.2,343.5 1.6,0"/>
			</g>
		</svg>

		<div class="fs__26px" style="margin-left:10%;">Locales comerciales planta alta</div>
		
		<svg version="1.1" class="quote__map" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
			viewBox="0 0 1366 345.4" style="enable-background:new 0 0 1366 345.4;" xml:space="preserve">

			<style type="text/css">
				.st0{fill:#DCAF76;}
				.stx1{fill:none;stroke:#000000;stroke-miterlimit:10;}
				.stx3{fill:#CCD609;}
				.stx5{font-size:9.4047px;}
				.stx7{fill:#FFFFFF;}
				.stx9{font-size:7.8324px;}
				.stx10{opacity:0.6;fill:#ECAC3A;enable-background:new;}
				.stx11{fill:none;stroke:#FFFFFF;stroke-miterlimit:10;}
				.stx12{fill:none;stroke:#000000;stroke-width:3;stroke-miterlimit:10;}
			</style>

			<image style="overflow:visible;enable-background:new;" width="1366" height="345" xlink:href="media/assets/img/navetec/app/beta/shops/beta-shops-l1.jpg"  transform="matrix(1 0 0 1 0.424 -0.4892)"></image>

			<g id="base_planta_alta">
				<polygon class="st0" points="643.7,73.5 733.7,73.6 733.7,118.7 643.7,118.7"/>
				<g>
					<g>
						<line class="stx1" x1="19.2" y1="338.3" x2="6.7" y2="343.2"/>
						<line class="stx1" x1="45.7" y1="328" x2="33.2" y2="332.9"/>
						<line class="stx1" x1="72.2" y1="317.7" x2="59.7" y2="322.5"/>
						<line class="stx1" x1="98.8" y1="307.4" x2="86.3" y2="312.2"/>
						<line class="stx1" x1="125.3" y1="297.1" x2="112.8" y2="301.9"/>
						<line class="stx1" x1="151.9" y1="286.7" x2="139.3" y2="291.6"/>
						<line class="stx1" x1="178.4" y1="276.4" x2="165.9" y2="281.3"/>
						<line class="stx1" x1="204.9" y1="266.1" x2="192.4" y2="271"/>
						<line class="stx1" x1="231.5" y1="255.8" x2="219" y2="260.7"/>
						<line class="stx1" x1="258" y1="245.5" x2="245.5" y2="250.4"/>
						<line class="stx1" x1="284.5" y1="235.2" x2="272" y2="240"/>
						<line class="stx1" x1="311.1" y1="224.9" x2="298.6" y2="229.7"/>
						<line class="stx1" x1="337.6" y1="214.6" x2="325.1" y2="219.4"/>
						<line class="stx1" x1="364.2" y1="204.2" x2="351.7" y2="209.1"/>
						<line class="stx1" x1="390.7" y1="193.9" x2="378.2" y2="198.8"/>
						<line class="stx1" x1="417.2" y1="183.6" x2="404.7" y2="188.5"/>
						<line class="stx1" x1="443.8" y1="173.3" x2="431.3" y2="178.2"/>
						<line class="stx1" x1="470.3" y1="163" x2="457.8" y2="167.9"/>
						<line class="stx1" x1="494.8" y1="153.6" x2="482.3" y2="158.5"/>
					</g>
					<g>
						<line class="stx1" x1="517.1" y1="334.1" x2="494.8" y2="342.8"/>
						<line class="stx1" x1="564.4" y1="315.5" x2="542.1" y2="324.3"/>
						<line class="stx1" x1="611.7" y1="296.9" x2="589.4" y2="305.7"/>
						<line class="stx1" x1="658.9" y1="278.4" x2="636.6" y2="287.1"/>
						<line class="stx1" x1="706.2" y1="259.8" x2="683.9" y2="268.5"/>
						<line class="stx1" x1="753.5" y1="241.2" x2="731.2" y2="250"/>
						<line class="stx1" x1="800.8" y1="222.6" x2="778.5" y2="231.4"/>
						<line class="stx1" x1="848" y1="204" x2="825.7" y2="212.8"/>
						<line class="stx1" x1="895.3" y1="185.5" x2="873" y2="194.2"/>
						<line class="stx1" x1="942.6" y1="166.9" x2="920.3" y2="175.6"/>
						<line class="stx1" x1="989.8" y1="148.3" x2="967.6" y2="157.1"/>
						<line class="stx1" x1="1037.1" y1="129.7" x2="1014.8" y2="138.5"/>
						<line class="stx1" x1="1084.4" y1="111.2" x2="1062.1" y2="119.9"/>
						<line class="stx1" x1="1131.7" y1="92.6" x2="1109.4" y2="101.3"/>
						<line class="stx1" x1="1178.9" y1="74" x2="1156.7" y2="82.8"/>
						<line class="stx1" x1="1226.2" y1="55.4" x2="1203.9" y2="64.2"/>
						<line class="stx1" x1="1273.5" y1="36.8" x2="1251.2" y2="45.6"/>
						<line class="stx1" x1="1320.8" y1="18.3" x2="1298.5" y2="27"/>
						<line class="stx1" x1="1364.4" y1="1.4" x2="1342.1" y2="10.1"/>
					</g>
					<g>
						<line class="stx1" x1="1342.5" y1="334.3" x2="1365.2" y2="343.2"/>
						<line class="stx1" x1="1294.4" y1="315.6" x2="1317.1" y2="324.5"/>
						<line class="stx1" x1="1246.3" y1="296.9" x2="1269" y2="305.8"/>
						<line class="stx1" x1="1198.3" y1="278.2" x2="1220.9" y2="287.1"/>
						<line class="stx1" x1="1150.2" y1="259.5" x2="1172.8" y2="268.4"/>
						<line class="stx1" x1="1102.1" y1="240.8" x2="1124.8" y2="249.7"/>
						<line class="stx1" x1="1054" y1="222.1" x2="1076.7" y2="231"/>
						<line class="stx1" x1="1005.9" y1="203.4" x2="1028.6" y2="212.3"/>
						<line class="stx1" x1="957.8" y1="184.7" x2="980.5" y2="193.6"/>
						<line class="stx1" x1="909.8" y1="166" x2="932.4" y2="174.9"/>
						<line class="stx1" x1="861.7" y1="147.3" x2="884.3" y2="156.2"/>
						<line class="stx1" x1="813.6" y1="128.6" x2="836.3" y2="137.5"/>
						<line class="stx1" x1="765.5" y1="109.9" x2="788.2" y2="118.8"/>
						<line class="stx1" x1="717.4" y1="91.2" x2="740.1" y2="100.1"/>
						<line class="stx1" x1="669.3" y1="72.5" x2="692" y2="81.4"/>
						<line class="stx1" x1="621.3" y1="53.8" x2="643.9" y2="62.7"/>
						<line class="stx1" x1="573.2" y1="35.1" x2="595.8" y2="44"/>
						<line class="stx1" x1="525.1" y1="16.4" x2="547.8" y2="25.3"/>
						<line class="stx1" x1="480.7" y1="-0.6" x2="503.4" y2="8.3"/>
					</g>
					<g>
						<line class="stx1" x1="482.3" y1="338" x2="494.8" y2="342.8"/>
						<line class="stx1" x1="455.8" y1="327.7" x2="468.3" y2="332.5"/>
						<line class="stx1" x1="429.2" y1="317.4" x2="441.7" y2="322.2"/>
						<line class="stx1" x1="402.7" y1="307" x2="415.2" y2="311.9"/>
						<line class="stx1" x1="376.2" y1="296.7" x2="388.7" y2="301.6"/>
						<line class="stx1" x1="349.6" y1="286.4" x2="362.1" y2="291.3"/>
						<line class="stx1" x1="323.1" y1="276.1" x2="335.6" y2="281"/>
						<line class="stx1" x1="296.5" y1="265.8" x2="309.1" y2="270.7"/>
						<line class="stx1" x1="270" y1="255.5" x2="282.5" y2="260.3"/>
						<line class="stx1" x1="243.5" y1="245.2" x2="256" y2="250"/>
						<line class="stx1" x1="216.9" y1="234.9" x2="229.4" y2="239.7"/>
						<line class="stx1" x1="190.4" y1="224.5" x2="202.9" y2="229.4"/>
						<line class="stx1" x1="163.8" y1="214.2" x2="176.4" y2="219.1"/>
						<line class="stx1" x1="137.3" y1="203.9" x2="149.8" y2="208.8"/>
						<line class="stx1" x1="110.8" y1="193.6" x2="123.3" y2="198.5"/>
						<line class="stx1" x1="84.2" y1="183.3" x2="96.7" y2="188.2"/>
						<line class="stx1" x1="57.7" y1="173" x2="70.2" y2="177.8"/>
						<line class="stx1" x1="31.2" y1="162.7" x2="43.7" y2="167.5"/>
						<line class="stx1" x1="6.7" y1="153.3" x2="19.2" y2="158.1"/>
					</g>
				</g>
			</g>
			<g id="isla_d_cmercial">
				<g id="cuarto_de_maquinas_2_">
					<polygon id="cuarto_de_maquinas_3_" class="pb-sprite-2" points="5.3,1.4 60.1,1.4 60.1,129.3 5.3,129.3"/>
					<g>
						<text transform="matrix(0.9736 0 0 1 14.3652 55.418)" class="stx3 futura-book stx5">CUARTO</text>
						<text transform="matrix(0.9736 0 0 1 27.1191 66.7178)" class="stx3 futura-book stx5">DE</text>
						<text transform="matrix(0.9736 0 0 1 7.9395 78.0176)" class="stx3 futura-book stx5">MÁQUINAS</text>
					</g>
				</g>
				<g ng-class="nvtBeta.inmovablesClassList[41]" ng-click="nvtBeta.setLeadProperty(nvtBeta.inmovablesData.inmovables[41])">
					<polygon class="property nvt-sprite-1" points="60.1,1.4 116.7,1.4 116.7,129.3 60.1,129.3"/>
					<g>
						<text transform="matrix(0.9736 0 0 1 72.1265 55.418)" class="stx3 futura-book stx5">LOCAL </text>
						<text transform="matrix(0.9736 0 0 1 83.1279 66.7178)" class="stx3 futura-book stx5">16</text>
					</g>
					<text transform="matrix(1 0 0 1 77.8514 9.7161)" class="stx7 futura-light stx9">04.00</text>
					<text transform="matrix(1 0 0 1 77.8514 126.446)" class="stx7 futura-light stx9">04.00</text>
					<text transform="matrix(0 -1 1 0 67.6985 77.8672)" class="stx7 futura-light stx9">09.00</text>
					<text transform="matrix(1 0 0 1 72.6272 75.5671)" class="stx7 futura-light stx9">36.00m2</text>
				</g>
				<g ng-class="nvtBeta.inmovablesClassList[42]" ng-click="nvtBeta.setLeadProperty(nvtBeta.inmovablesData.inmovables[42])">
					<polygon class="property nvt-sprite-2" points="173.2,1.3 173.2,129.3 116.7,129.3 116.7,1.4"/>
					<text transform="matrix(1 0 0 1 134.4329 9.7161)" class="stx7 futura-light stx9">04.00</text>
					<text transform="matrix(1 0 0 1 134.4329 126.446)" class="stx7 futura-light stx9">04.00</text>
					<text transform="matrix(0 -1 1 0 124.2786 77.8672)" class="stx7 futura-light stx9">09.00</text>
					<text transform="matrix(1 0 0 1 130.1004 75.5671)" class="stx7 futura-light stx9">36.00m2</text>
					<g>
						<text transform="matrix(0.9736 0 0 1 129.5996 55.418)" class="stx3 futura-book stx5">LOCAL </text>
						<text transform="matrix(0.9736 0 0 1 140.6011 66.7178)" class="stx3 futura-book stx5">17</text>
					</g>
				</g>
				<g ng-class="nvtBeta.inmovablesClassList[43]" ng-click="nvtBeta.setLeadProperty(nvtBeta.inmovablesData.inmovables[43])">
					<polygon class="property nvt-sprite-1" points="229.8,1.4 229.8,129.2 173.2,129.3 173.2,1.3"/>
					<text transform="matrix(1 0 0 1 190.198 9.7161)" class="stx7 futura-light stx9">04.00</text>
					<text transform="matrix(1 0 0 1 190.2019 126.446)" class="stx7 futura-light stx9">04.00</text>
					<text transform="matrix(0 -1 1 0 180.0471 77.8672)" class="stx7 futura-light stx9">09.00</text>
					<text transform="matrix(1 0 0 1 185.8689 75.5671)" class="stx7 futura-light stx9">36.00m2</text>
					<g>
						<text transform="matrix(0.9736 0 0 1 185.3682 55.418)" class="stx3 futura-book stx5">LOCAL </text>
						<text transform="matrix(0.9736 0 0 1 196.3696 66.7178)" class="stx3 futura-book stx5">18</text>
					</g>
				</g>
				<g ng-class="nvtBeta.inmovablesClassList[44]" ng-click="nvtBeta.setLeadProperty(nvtBeta.inmovablesData.inmovables[44])">
					<polygon class="property nvt-sprite-2" points="286.3,1.4 286.2,128.9 229.8,129.2 229.8,1.4"/>
					<text transform="matrix(1 0 0 1 246.7469 9.7161)" class="stx7 futura-light stx9">04.00</text>
					<text transform="matrix(1 0 0 1 246.7469 126.446)" class="stx7 futura-light stx9">04.00</text>
					<text transform="matrix(0 -1 1 0 236.594 77.8672)" class="stx7 futura-light stx9">09.00</text>
					<text transform="matrix(1 0 0 1 242.4138 75.5671)" class="stx7 futura-light stx9">36.00m2</text>
					<g>
						<text transform="matrix(0.9736 0 0 1 241.9131 55.418)" class="stx3 futura-book stx5">LOCAL </text>
						<text transform="matrix(0.9736 0 0 1 252.9146 66.7178)" class="stx3 futura-book stx5">19</text>
					</g>
				</g>
				<g ng-class="nvtBeta.inmovablesClassList[45]" ng-click="nvtBeta.setLeadProperty(nvtBeta.inmovablesData.inmovables[45])">
					<polygon class="property nvt-sprite-1" points="343.2,1.4 343.2,128.8 286.2,128.9 286.3,1.4"/>
					<text transform="matrix(1 0 0 1 303.4358 9.7161)" class="stx7 futura-light stx9">04.00</text>
					<text transform="matrix(1 0 0 1 303.4358 126.446)" class="stx7 futura-light stx9">04.00</text>
					<text transform="matrix(0 -1 1 0 293.2834 77.8672)" class="stx7 futura-light stx9">09.00</text>
					<text transform="matrix(1 0 0 1 299.1033 75.5671)" class="stx7 futura-light stx9">36.00m2</text>
					<g>
						<text transform="matrix(0.9736 0 0 1 298.6025 55.418)" class="stx3 futura-book stx5">LOCAL </text>
						<text transform="matrix(0.9736 0 0 1 309.604 66.7178)" class="stx3 futura-book stx5">20</text>
					</g>
				</g>
				<g ng-class="nvtBeta.inmovablesClassList[46]" ng-click="nvtBeta.setLeadProperty(nvtBeta.inmovablesData.inmovables[46])">
					<polygon class="property nvt-sprite-2" points="410.4,1.4 410.5,128.9 343.2,128.8 343.2,1.4"/>
					<text transform="matrix(1 0 0 1 365.5799 9.7161)" class="stx7 futura-light stx9">04.75</text>
					<text transform="matrix(1 0 0 1 365.5799 126.446)" class="stx7 futura-light stx9">04.75</text>
					<text transform="matrix(0 -1 1 0 350.6272 77.8672)" class="stx7 futura-light stx9">09.00</text>
					<text transform="matrix(1 0 0 1 361.2508 75.5671)" class="stx7 futura-light stx9">42.75m2</text>
					<g>
						<text transform="matrix(0.9736 0 0 1 360.75 55.418)" class="stx3 futura-book stx5">LOCAL </text>
						<text transform="matrix(0.9736 0 0 1 371.7515 66.7178)" class="stx3 futura-book stx5">21</text>
					</g>
					<g>
						<rect x="347.7" y="47.1" transform="matrix(0.6925 -0.7214 0.7214 0.6925 71.3803 269.2332)" class="stx10" width="7.6" height="7.6"/>
						<polygon class="stx10" points="351.6,56.3 351.5,51.1 351.4,45.5 356.9,50.8"/>
					</g>
				</g>
				<g ng-class="nvtBeta.inmovablesClassList[47]" ng-click="nvtBeta.setLeadProperty(nvtBeta.inmovablesData.inmovables[47])">
					<polygon class="property nvt-sprite-1" points="478.8,1.4 478.9,129.1 410.5,128.9 410.4,1.4"/>
					<g>
						<text transform="matrix(1 0 0 1 433.368 9.7161)" class="stx7 futura-light stx9">04.75</text>
						<text transform="matrix(1 0 0 1 433.368 126.446)" class="stx7 futura-light stx9">04.75</text>
						<text transform="matrix(0 -1 1 0 417.8699 77.8672)" class="stx7 futura-light stx9">09.00</text>
						<text transform="matrix(0 -1 1 0 475.8572 77.8672)" class="stx7 futura-light stx9">09.00</text>
						<text transform="matrix(1 0 0 1 429.0369 75.5671)" class="stx7 futura-light stx9">42.75m2</text>
						<g>
							<text transform="matrix(0.9736 0 0 1 428.5361 55.418)" class="stx3 futura-book stx5">LOCAL </text>
							<text transform="matrix(0.9736 0 0 1 439.5376 66.7178)" class="stx3 futura-book stx5">22</text>
						</g>
						<g>
							<rect x="415.5" y="47.1" transform="matrix(0.6925 -0.7214 0.7214 0.6925 92.2201 318.1437)" class="stx10" width="7.6" height="7.6"/>
							<polygon class="stx10" points="419.4,56.3 419.3,51.1 419.2,45.5 424.7,50.8"/>
						</g>
					</g>
				</g>
				<g id="lineas_2_">
					<line class="stx11" x1="60.1" y1="1.4" x2="60.1" y2="129.3"/>
					<line class="stx11" x1="116.7" y1="1.4" x2="116.7" y2="129.3"/>
					<line class="stx11" x1="173.2" y1="1.3" x2="173.2" y2="129.3"/>
					<line class="stx11" x1="229.8" y1="1.4" x2="229.8" y2="129.2"/>
					<line class="stx11" x1="286.3" y1="1.4" x2="286.2" y2="128.9"/>
					<line class="stx11" x1="343.2" y1="1.4" x2="343.2" y2="128.8"/>
					<line class="stx11" x1="410.4" y1="1.4" x2="410.5" y2="128.9"/>
				</g>
			</g>
			<g id="completento">
				<polygon class="stx12" points="1364.6,0.7 1365.4,345.1 1.2,345.1 1.6,0.7"/>
			</g>
		</svg>

		<svg class="quote__map" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
			viewBox="0 0 1366 454" style="enable-background:new 0 0 1366 454;" xml:space="preserve">

			<style type="text/css">
				.st1{fill:#FFFFFF;}
				.st3{font-size:8.7px;}
				.st4{fill:#CED435;}
				.st6{font-size:10.44px;}
				.st7{opacity:0.6;fill:#DCAF4C;enable-background:new;}
				.st9{fill:none;stroke:#FFFFFF;stroke-width:0.87;stroke-miterlimit:10;}
				.st10{fill:none;stroke:#FFFFFF;stroke-width:1.74;stroke-miterlimit:10;}
			</style>

			<image style="overflow:visible;" width="1366" height="454" xlink:href="media/assets/img/navetec/app/beta/beta.jpg"  transform="matrix(1 0 0 1 0.235 0)"></image>
			
			<g class="beta__container">
				
				<g id="isla_a1">
					<g class="property__active" ng-class="nvtBeta.inmovablesClassList[0]" ng-click="nvtBeta.setLeadProperty(nvtBeta.inmovablesData.inmovables[0])">
						<rect x="258.7" y="2.5" class="property nvt-sprite-1" width="65.1" height="183.3"/>
						<text transform="matrix(1 0 0 1 279.0939 10.5149)" class="st1 futura-light st3">14.00</text>
						<text transform="matrix(1 0 0 1 279.0939 182.635)" class="st1 futura-light st3">14.00</text>
						<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 266.7439 97.0752)" class="st1 futura-light st3">40.00</text>
						<text transform="matrix(1 0 0 1 273.8539 94.5149)" class="st1 futura-light st3">560.00m2</text>
						<text transform="matrix(0.97 0 0 1 278.4642 72.3153)" class="st4 futura-med st6">NAVE </text>
						<text transform="matrix(0.97 0 0 1 287.8827 84.8451)" class="st4 futura-med st6">32</text>
						
						<rect x="288.9" y="47" transform="matrix(0.7034 -0.7108 0.7108 0.7034 50.3496 224.0265)" class="st7" width="9.3" height="9.3"/>
						<polygon class="st7" points="293.6,58.3 293.6,51.9 293.6,45.1 300.2,51.7"/>
					</g>
					<g class="property__active" ng-class="nvtBeta.inmovablesClassList[1]" ng-click="nvtBeta.setLeadProperty(nvtBeta.inmovablesData.inmovables[1])">
						<rect x="323.8" y="2.5" class="property nvt-sprite-2" width="64.9" height="183.3"/>
						<text transform="matrix(1 0 0 1 344.2139 10.5149)" class="st1 futura-light st3">14.00</text>
						<text transform="matrix(1 0 0 1 344.2139 182.635)" class="st1 futura-light st3">14.00</text>
						<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 331.8639 97.0752)" class="st1 futura-light st3">40.00</text>
						<text transform="matrix(1 0 0 1 338.9739 94.5149)" class="st1 futura-light st3">560.00m2</text>
						<text transform="matrix(0.97 0 0 1 343.5839 72.3153)" class="st4 futura-med st6">NAVE </text>
						<text transform="matrix(0.97 0 0 1 353.0028 84.8451)" class="st4 futura-med st6">33</text>
					</g>
					<g class="property__active" ng-class="nvtBeta.inmovablesClassList[2]" ng-click="nvtBeta.setLeadProperty(nvtBeta.inmovablesData.inmovables[2])">
						<rect x="388.8" y="2.5" class="property nvt-sprite-1" width="65.1" height="183.3"/>
						<text transform="matrix(1 0 0 1 409.1139 10.5149)" class="st1 futura-light st3">14.00</text>
						<text transform="matrix(1 0 0 1 409.1139 182.635)" class="st1 futura-light st3">14.00</text>
						<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 396.7639 97.0752)" class="st1 futura-light st3">40.00</text>
						<text transform="matrix(1 0 0 1 403.8739 94.5149)" class="st1 futura-light st3">560.00m2</text>
						<text transform="matrix(0.97 0 0 1 408.4843 72.3153)" class="st4 futura-med st6">NAVE </text>
						<text transform="matrix(0.97 0 0 1 417.9027 84.8451)" class="st4 futura-med st6">34</text>
					</g>
					<g class="property__active" ng-class="nvtBeta.inmovablesClassList[3]" ng-click="nvtBeta.setLeadProperty(nvtBeta.inmovablesData.inmovables[3])">
						<rect x="453.9" y="2.5" class="property nvt-sprite-2" width="65.1" height="183.3"/>
						<text transform="matrix(1 0 0 1 475.5839 10.5149)" class="st1 futura-light st3">14.00</text>
						<text transform="matrix(1 0 0 1 475.5839 182.635)" class="st1 futura-light st3">14.00</text>
						<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 463.2339 97.0752)" class="st1 futura-light st3">40.00</text>
						<text transform="matrix(1 0 0 1 470.3439 94.5149)" class="st1 futura-light st3">560.00m2</text>
						<text transform="matrix(0.97 0 0 1 474.9442 72.3153)" class="st4 futura-med st6">NAVE </text>
						<text transform="matrix(0.97 0 0 1 484.3627 84.8451)" class="st4 futura-med st6">35</text>
					</g>
					<g class="property__active" ng-class="nvtBeta.inmovablesClassList[4]" ng-click="nvtBeta.setLeadProperty(nvtBeta.inmovablesData.inmovables[4])">
						<rect x="519" y="2.5" class="property nvt-sprite-1" width="65.1" height="183.3"/>
						<text transform="matrix(1 0 0 1 540.0239 10.5149)" class="st1 futura-light st3">14.00</text>
						<text transform="matrix(1 0 0 1 540.0239 182.635)" class="st1 futura-light st3">14.00</text>
						<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 527.684 97.0752)" class="st1 futura-light st3">40.00</text>
						<text transform="matrix(1 0 0 1 534.7839 94.5149)" class="st1 futura-light st3">560.00m2</text>
						<text transform="matrix(0.97 0 0 1 539.3939 72.3153)" class="st4 futura-med st6">NAVE </text>
						<text transform="matrix(0.97 0 0 1 548.8129 84.8451)" class="st4 futura-med st6">36</text>
					</g>
					<g class="property__active" ng-class="nvtBeta.inmovablesClassList[5]" ng-click="nvtBeta.setLeadProperty(nvtBeta.inmovablesData.inmovables[5])">
						<rect x="584.1" y="2.5" class="property nvt-sprite-2" width="64.9" height="183.3"/>
						<text transform="matrix(1 0 0 1 605.5939 10.5149)" class="st1 futura-light st3">14.00</text>
						<text transform="matrix(1 0 0 1 605.5939 182.635)" class="st1 futura-light st3">14.00</text>
						<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 593.2539 97.0752)" class="st1 futura-light st3">40.00</text>
						<text transform="matrix(1 0 0 1 600.3539 94.5149)" class="st1 futura-light st3">560.00m2</text>
						<text transform="matrix(0.97 0 0 1 604.9642 72.3153)" class="st4 futura-med st6">NAVE </text>
						<text transform="matrix(0.97 0 0 1 614.3827 84.8451)" class="st4 futura-med st6">37</text>
					</g>
					<g class="property__active" ng-class="nvtBeta.inmovablesClassList[6]" ng-click="nvtBeta.setLeadProperty(nvtBeta.inmovablesData.inmovables[6])">
						<rect x="649" y="2.5" class="property nvt-sprite-1" width="65.1" height="183.3"/>
						<text transform="matrix(1 0 0 1 670.2739 10.5149)" class="st1 futura-light st3">14.00</text>
						<text transform="matrix(1 0 0 1 670.2739 182.635)" class="st1 futura-light st3">14.00</text>
						<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 657.924 97.0752)" class="st1 futura-light st3">40.00</text>
						<text transform="matrix(1 0 0 1 665.0239 94.5149)" class="st1 futura-light st3">560.00m2</text>
						<text transform="matrix(0.97 0 0 1 669.6342 72.3153)" class="st4 futura-med st6">NAVE </text>
						<text transform="matrix(0.97 0 0 1 679.0526 84.8451)" class="st4 futura-med st6">38</text>
					</g>
					<g class="property__active" ng-class="nvtBeta.inmovablesClassList[7]" ng-click="nvtBeta.setLeadProperty(nvtBeta.inmovablesData.inmovables[7])">
						<rect x="714.1" y="2.5" class="property nvt-sprite-2" width="65.1" height="183.3"/>
						<text transform="matrix(1 0 0 1 735.8439 10.5149)" class="st1 futura-light st3">14.00</text>
						<text transform="matrix(1 0 0 1 735.8439 182.635)" class="st1 futura-light st3">14.00</text>
						<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 723.4939 97.0752)" class="st1 futura-light st3">40.00</text>
						<text transform="matrix(1 0 0 1 730.6039 94.5149)" class="st1 futura-light st3">560.00m2</text>
						<text transform="matrix(0.97 0 0 1 735.204 72.3153)" class="st4 futura-med st6">NAVE </text>
						<text transform="matrix(0.97 0 0 1 744.6229 84.8451)" class="st4 futura-med st6">39</text>
					</g>
					<g class="property__active" ng-class="nvtBeta.inmovablesClassList[8]" ng-click="nvtBeta.setLeadProperty(nvtBeta.inmovablesData.inmovables[8])">
						<rect x="779.2" y="2.5" class="property nvt-sprite-1" width="65.1" height="183.3"/>
						<text transform="matrix(1 0 0 1 800.7339 10.5149)" class="st1 futura-light st3">14.00</text>
						<text transform="matrix(1 0 0 1 800.7339 182.635)" class="st1 futura-light st3">14.00</text>
						<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 788.3939 97.0752)" class="st1 futura-light st3">40.00</text>
						<text transform="matrix(1 0 0 1 795.4939 94.5149)" class="st1 futura-light st3">560.00m2</text>
						<text transform="matrix(0.97 0 0 1 800.1044 72.3153)" class="st4 futura-med st6">NAVE </text>
						<text transform="matrix(0.97 0 0 1 809.5223 84.8451)" class="st4 futura-med st6">40</text>
					</g>
					<g class="property__active" ng-class="nvtBeta.inmovablesClassList[9]" ng-click="nvtBeta.setLeadProperty(nvtBeta.inmovablesData.inmovables[9])">
						<rect x="844.3" y="2.5" class="property nvt-sprite-2" width="64.9" height="183.3"/>
						<text transform="matrix(1 0 0 1 866.0839 10.5149)" class="st1 futura-light st3">14.00</text>
						<text transform="matrix(1 0 0 1 866.0839 182.635)" class="st1 futura-light st3">14.00</text>
						<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 853.7339 97.0752)" class="st1 futura-light st3">40.00</text>
						<text transform="matrix(1 0 0 1 860.8439 94.5149)" class="st1 futura-light st3">560.00m2</text>
						<text transform="matrix(0.97 0 0 1 865.454 72.3153)" class="st4 futura-med st6">NAVE </text>
						<text transform="matrix(0.97 0 0 1 874.8729 84.8451)" class="st4 futura-med st6">41</text>
					</g>
					<g class="property__active" ng-class="nvtBeta.inmovablesClassList[10]" ng-click="nvtBeta.setLeadProperty(nvtBeta.inmovablesData.inmovables[10])">
						<rect x="909.2" y="2.5" class="property nvt-sprite-1" width="65.1" height="183.3"/>
						<text transform="matrix(1 0 0 1 931.4239 10.5149)" class="st1 futura-light st3">14.00</text>
						<text transform="matrix(1 0 0 1 931.4239 182.635)" class="st1 futura-light st3">14.00</text>
						<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 919.0839 97.0752)" class="st1 futura-light st3">40.00</text>
						<text transform="matrix(1 0 0 1 926.1839 94.5149)" class="st1 futura-light st3">560.00m2</text>
						<text transform="matrix(0.97 0 0 1 930.7938 72.3153)" class="st4 futura-med st6">NAVE </text>
						<text transform="matrix(0.97 0 0 1 940.2128 84.8451)" class="st4 futura-med st6">42</text>
					</g>
					<g class="property__active" ng-class="nvtBeta.inmovablesClassList[11]" ng-click="nvtBeta.setLeadProperty(nvtBeta.inmovablesData.inmovables[11])">
						<rect x="974.3" y="2.5" class="property nvt-sprite-2" width="64.9" height="183.3"/>
						<text transform="matrix(1 0 0 1 996.3239 10.5149)" class="st1 futura-light st3">14.00</text>
						<text transform="matrix(1 0 0 1 996.3239 182.635)" class="st1 futura-light st3">14.00</text>
						<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 983.9739 97.0752)" class="st1 futura-light st3">40.00</text>
						<text transform="matrix(1 0 0 1 991.0839 94.5149)" class="st1 futura-light st3">560.00m2</text>
						<text transform="matrix(0.97 0 0 1 995.6942 72.3153)" class="st4 futura-med st6">NAVE </text>
						<text transform="matrix(0.97 0 0 1 1005.1132 84.8451)" class="st4 futura-med st6">43</text>
					</g>
					<g class="property__active" ng-class="nvtBeta.inmovablesClassList[12]" ng-click="nvtBeta.setLeadProperty(nvtBeta.inmovablesData.inmovables[12])">
						<rect x="1039.2" y="2.5" class="property nvt-sprite-1" width="65.1" height="183.3"/>
						<text transform="matrix(1 0 0 1 1061.1838 10.5149)" class="st1 futura-light st3">14.00</text>
						<text transform="matrix(1 0 0 1 1061.1838 182.635)" class="st1 futura-light st3">14.00</text>
						<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 1048.834 97.0752)" class="st1 futura-light st3">40.00</text>
						<text transform="matrix(1 0 0 1 1055.9438 94.5149)" class="st1 futura-light st3">560.00m2</text>
						<text transform="matrix(0.97 0 0 1 1060.5536 72.3153)" class="st4 futura-med st6">NAVE </text>
						<text transform="matrix(0.97 0 0 1 1069.9725 84.8451)" class="st4 futura-med st6">44</text>
					</g>
					<g class="property__active" ng-class="nvtBeta.inmovablesClassList[13]" ng-click="nvtBeta.setLeadProperty(nvtBeta.inmovablesData.inmovables[13])">
						<rect x="1104.3" y="2.5" class="property nvt-sprite-2" width="65.1" height="183.3"/>
						<text transform="matrix(1 0 0 1 1126.5239 10.5149)" class="st1 futura-light st3">14.00</text>
						<text transform="matrix(1 0 0 1 1126.5239 182.635)" class="st1 futura-light st3">14.00</text>
						<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 1114.1838 97.0752)" class="st1 futura-light st3">40.00</text>
						<text transform="matrix(1 0 0 1 1121.2839 94.5149)" class="st1 futura-light st3">560.00m2</text>
						<text transform="matrix(0.97 0 0 1 1125.8944 72.3153)" class="st4 futura-med st6">NAVE </text>
						<text transform="matrix(0.97 0 0 1 1135.3134 84.8451)" class="st4 futura-med st6">45</text>
					</g>
					<g class="property__active" ng-class="nvtBeta.inmovablesClassList[14]" ng-click="nvtBeta.setLeadProperty(nvtBeta.inmovablesData.inmovables[14])">
						<rect x="1169.4" y="2.5" class="property nvt-sprite-1" width="65.1" height="183.3"/>
						<text transform="matrix(1 0 0 1 1192.7739 10.5149)" class="st1 futura-light st3">14.00</text>
						<text transform="matrix(1 0 0 1 1192.7739 182.635)" class="st1 futura-light st3">14.00</text>
						<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 1180.4238 97.0752)" class="st1 futura-light st3">40.00</text>
						<text transform="matrix(1 0 0 1 1187.5338 94.5149)" class="st1 futura-light st3">560.00m2</text>
						<text transform="matrix(0.97 0 0 1 1192.1444 72.3153)" class="st4 futura-med st6">NAVE </text>
						<text transform="matrix(0.97 0 0 1 1201.5634 84.8451)" class="st4 futura-med st6">46</text>
					</g>
					<g class="property__active" ng-class="nvtBeta.inmovablesClassList[15]" ng-click="nvtBeta.setLeadProperty(nvtBeta.inmovablesData.inmovables[15])">
						<rect x="1234.5" y="2.5" class="property nvt-sprite-2" width="64.9" height="183.3"/>
						<text transform="matrix(1 0 0 1 1256.5438 10.5149)" class="st1 futura-light st3">14.00</text>
						<text transform="matrix(1 0 0 1 1256.5438 182.635)" class="st1 futura-light st3">14.00</text>
						<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 1244.1938 97.0752)" class="st1 futura-light st3">40.00</text>
						<text transform="matrix(1 0 0 1 1251.3038 94.5149)" class="st1 futura-light st3">560.00m2</text>
						<text transform="matrix(0.97 0 0 1 1255.9139 72.3153)" class="st4 futura-med st6">NAVE </text>
						<text transform="matrix(0.97 0 0 1 1265.3329 84.8451)" class="st4 futura-med st6">47</text>
					</g>
					<g class="property__active" ng-class="nvtBeta.inmovablesClassList[16]" ng-click="nvtBeta.setLeadProperty(nvtBeta.inmovablesData.inmovables[16])">
						<polygon class="property nvt-sprite-1" points="1299.4,2.5 1364.7,2.5 1364.4,185.8 1299.4,185.8"/>
						<text transform="matrix(1 0 0 1 1321.4739 10.5149)" class="st1 futura-light st3">14.60</text>
						<text transform="matrix(1 0 0 1 1321.4739 182.635)" class="st1 futura-light st3">15.74</text>
						<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 1309.1239 97.0752)" class="st1 futura-light st3">40.00</text>
						<text transform="matrix(-2.984068e-02 -0.9996 0.9996 -2.984068e-02 1362.4438 97.0048)" class="st1 futura-light st3">40.02</text>
						<text transform="matrix(1 0 0 1 1312.3138 94.5149)" class="st1 futura-light st3">606.58m2</text>
						<text transform="matrix(0.97 0 0 1 1316.9247 72.3153)" class="st4 futura-med st6">NAVE </text>
						<text transform="matrix(0.97 0 0 1 1326.3427 84.8451)" class="st4 futura-med st6">48</text>
						
						<rect x="1327.3" y="47" transform="matrix(0.7034 -0.7108 0.7108 0.7034 358.348 962.1108)" class="st7" width="9.3" height="9.3"/>
						<polygon class="st7" points="1332,58.3 1332,51.9 1331.9,45.1 1338.6,51.7"/>
					</g>
				</g>

				<g id="isla_a2">
					<g class="property__active" ng-class="nvtBeta.inmovablesClassList[17]" ng-click="nvtBeta.setLeadProperty(nvtBeta.inmovablesData.inmovables[17])">
						<polygon class="property nvt-sprite-2" points="1299.4,268.2 1364.2,268.2 1363.9,451.5 1299.4,451.5"/>
						<text transform="matrix(1 0 0 1 1325.3739 276.8351)" class="st1 futura-light st3">16.21</text>
						<text transform="matrix(1 0 0 1 1329.6339 448.9551)" class="st1 futura-light st3">17.34</text>
						<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 1309.1539 363.3848)" class="st1 futura-light st3">40.00</text>
						<text transform="matrix(-3.943425e-02 -0.9992 0.9992 -3.943425e-02 1361.7839 363.2754)" class="st1 futura-light st3">40.02</text>
						<text transform="matrix(1 0 0 1 1312.2039 360.8251)" class="st1 futura-light st3">670.70m2</text>
						<text transform="matrix(0.97 0 0 1 1316.8143 338.455)" class="st4 futura-med st6">NAVE </text>
						<text transform="matrix(0.97 0 0 1 1326.2333 350.9852)" class="st4 futura-med st6">49</text>
						
						<rect x="1327.3" y="313.1" transform="matrix(0.7034 -0.7108 0.7108 0.7034 169.1923 1041.0447)" class="st7" width="9.3" height="9.3"/>
						<polygon class="st7" points="1332,324.4 1332,318 1331.9,311.2 1338.6,317.8"/>
					</g>
					<g class="property__active" ng-class="nvtBeta.inmovablesClassList[18]" ng-click="nvtBeta.setLeadProperty(nvtBeta.inmovablesData.inmovables[18])">
						<rect x="1234.5" y="268.2" class="property nvt-sprite-1" width="64.9" height="183.3"/>
						<text transform="matrix(1 0 0 1 1256.5438 276.8351)" class="st1 futura-light st3">14.00</text>
						<text transform="matrix(1 0 0 1 1256.5438 448.9551)" class="st1 futura-light st3">14.00</text>
						<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 1244.1938 363.3848)" class="st1 futura-light st3">40.00</text>
						<text transform="matrix(1 0 0 1 1251.3038 360.8251)" class="st1 futura-light st3">560.00m2</text>
						<text transform="matrix(0.97 0 0 1 1255.9139 338.455)" class="st4 futura-med st6">NAVE </text>
						<text transform="matrix(0.97 0 0 1 1265.3329 350.9852)" class="st4 futura-med st6">50</text>
					</g>
					<g class="property__active" ng-class="nvtBeta.inmovablesClassList[19]" ng-click="nvtBeta.setLeadProperty(nvtBeta.inmovablesData.inmovables[19])">
						<rect x="1169.4" y="268.2" class="property nvt-sprite-2" width="65.1" height="183.3"/>
						<text transform="matrix(1 0 0 1 1191.6938 276.8351)" class="st1 futura-light st3">14.00</text>
						<text transform="matrix(1 0 0 1 1191.6938 448.9551)" class="st1 futura-light st3">14.00</text>
						<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 1179.3439 363.3848)" class="st1 futura-light st3">40.00</text>
						<text transform="matrix(1 0 0 1 1186.4539 360.8251)" class="st1 futura-light st3">560.00m2</text>
						<text transform="matrix(0.97 0 0 1 1191.0536 338.455)" class="st4 futura-med st6">NAVE </text>
						<text transform="matrix(0.97 0 0 1 1200.4725 350.9852)" class="st4 futura-med st6">51</text>
					</g>
					<g class="property__active" ng-class="nvtBeta.inmovablesClassList[20]" ng-click="nvtBeta.setLeadProperty(nvtBeta.inmovablesData.inmovables[20])">
						<rect x="1104.5" y="268.2" class="property nvt-sprite-1" width="64.9" height="183.3"/>
						<text transform="matrix(1 0 0 1 1126.5239 276.8351)" class="st1 futura-light st3">14.00</text>
						<text transform="matrix(1 0 0 1 1126.5239 448.9551)" class="st1 futura-light st3">14.00</text>
						<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 1114.1838 363.3848)" class="st1 futura-light st3">40.00</text>
						<text transform="matrix(1 0 0 1 1121.2839 360.8251)" class="st1 futura-light st3">560.00m2</text>
						<text transform="matrix(0.97 0 0 1 1125.8944 338.455)" class="st4 futura-med st6">NAVE </text>
						<text transform="matrix(0.97 0 0 1 1135.3134 350.9852)" class="st4 futura-med st6">52</text>
					</g>
					<g class="property__active" ng-class="nvtBeta.inmovablesClassList[21]" ng-click="nvtBeta.setLeadProperty(nvtBeta.inmovablesData.inmovables[21])">
						<rect x="1039.4" y="268.2" class="property nvt-sprite-2" width="65.1" height="183.3"/>
						<text transform="matrix(1 0 0 1 1063.2039 276.8351)" class="st1 futura-light st3">14.00</text>
						<text transform="matrix(1 0 0 1 1063.2039 448.9551)" class="st1 futura-light st3">14.00</text>
						<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 1050.8539 363.3848)" class="st1 futura-light st3">40.00</text>
						<text transform="matrix(1 0 0 1 1057.9639 360.8251)" class="st1 futura-light st3">560.00m2</text>
						<text transform="matrix(0.97 0 0 1 1062.5741 338.455)" class="st4 futura-med st6">NAVE </text>
						<text transform="matrix(0.97 0 0 1 1071.993 350.9852)" class="st4 futura-med st6">53</text>
					</g>
					<g class="property__active" ng-class="nvtBeta.inmovablesClassList[22]" ng-click="nvtBeta.setLeadProperty(nvtBeta.inmovablesData.inmovables[22])">
						<rect x="974.3" y="268.2" class="property nvt-sprite-1" width="65.1" height="183.3"/>
						<text transform="matrix(1 0 0 1 998.1939 276.8351)" class="st1 futura-light st3">14.00</text>
						<text transform="matrix(1 0 0 1 998.1939 448.9551)" class="st1 futura-light st3">14.00</text>
						<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 985.8439 363.3848)" class="st1 futura-light st3">40.00</text>
						<text transform="matrix(1 0 0 1 992.9539 360.8251)" class="st1 futura-light st3">560.00m2</text>
						<text transform="matrix(0.97 0 0 1 997.5643 338.455)" class="st4 futura-med st6">NAVE </text>
						<text transform="matrix(0.97 0 0 1 1006.9833 350.9852)" class="st4 futura-med st6">54</text>
					</g>
					<g class="property__active" ng-class="nvtBeta.inmovablesClassList[23]" ng-click="nvtBeta.setLeadProperty(nvtBeta.inmovablesData.inmovables[23])">
						<rect x="909.2" y="268.2" class="property nvt-sprite-2" width="65.1" height="183.3"/>
						<text transform="matrix(1 0 0 1 931.4239 276.8351)" class="st1 futura-light st3">14.00</text>
						<text transform="matrix(1 0 0 1 931.4239 448.9551)" class="st1 futura-light st3">14.00</text>
						<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 919.0839 363.3848)" class="st1 futura-light st3">40.00</text>
						<text transform="matrix(1 0 0 1 926.1839 360.8251)" class="st1 futura-light st3">560.00m2</text>
						<text transform="matrix(0.97 0 0 1 930.7938 338.455)" class="st4 futura-med st6">NAVE </text>
						<text transform="matrix(0.97 0 0 1 940.2128 350.9852)" class="st4 futura-med st6">55</text>
					</g>
					<g class="property__active" ng-class="nvtBeta.inmovablesClassList[24]" ng-click="nvtBeta.setLeadProperty(nvtBeta.inmovablesData.inmovables[24])">
						<rect x="844.3" y="268.2" class="property nvt-sprite-1" width="64.9" height="183.3"/>
						<text transform="matrix(1 0 0 1 866.0839 276.8351)" class="st1 futura-light st3">14.00</text>
						<text transform="matrix(1 0 0 1 866.0839 448.9551)" class="st1 futura-light st3">14.00</text>
						<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 853.7339 363.3848)" class="st1 futura-light st3">40.00</text>
						<text transform="matrix(1 0 0 1 860.8439 360.8251)" class="st1 futura-light st3">560.00m2</text>
						<text transform="matrix(0.97 0 0 1 865.454 338.455)" class="st4 futura-med st6">NAVE </text>
						<text transform="matrix(0.97 0 0 1 874.8729 350.9852)" class="st4 futura-med st6">56</text>
					</g>
					<g class="property__active" ng-class="nvtBeta.inmovablesClassList[25]" ng-click="nvtBeta.setLeadProperty(nvtBeta.inmovablesData.inmovables[25])">
						<rect x="779.2" y="268.2" class="property nvt-sprite-2" width="65.1" height="183.3"/>
						<text transform="matrix(1 0 0 1 802.7539 276.8351)" class="st1 futura-light st3">14.00</text>
						<text transform="matrix(1 0 0 1 802.7539 448.9551)" class="st1 futura-light st3">14.00</text>
						<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 790.4139 363.3848)" class="st1 futura-light st3">40.00</text>
						<text transform="matrix(1 0 0 1 797.5139 360.8251)" class="st1 futura-light st3">560.00m2</text>
						<text transform="matrix(0.97 0 0 1 802.1239 338.455)" class="st4 futura-med st6">NAVE </text>
						<text transform="matrix(0.97 0 0 1 811.5428 350.9852)" class="st4 futura-med st6">57</text>
					</g>
					<g class="property__active" ng-class="nvtBeta.inmovablesClassList[26]" ng-click="nvtBeta.setLeadProperty(nvtBeta.inmovablesData.inmovables[26])">
						<rect x="714.1" y="268.2" class="property nvt-sprite-1" width="65.1" height="183.3"/>
						<text transform="matrix(1 0 0 1 737.7439 276.8351)" class="st1 futura-light st3">14.00</text>
						<text transform="matrix(1 0 0 1 737.7439 448.9551)" class="st1 futura-light st3">14.00</text>
						<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 725.4039 363.3848)" class="st1 futura-light st3">40.00</text>
						<text transform="matrix(1 0 0 1 732.5039 360.8251)" class="st1 futura-light st3">560.00m2</text>
						<text transform="matrix(0.97 0 0 1 737.1141 338.455)" class="st4 futura-med st6">NAVE </text>
						<text transform="matrix(0.97 0 0 1 746.5326 350.9852)" class="st4 futura-med st6">58</text>
					</g>
					<g class="property__active" ng-class="nvtBeta.inmovablesClassList[27]" ng-click="nvtBeta.setLeadProperty(nvtBeta.inmovablesData.inmovables[27])">
						<rect x="649" y="268.2" class="property nvt-sprite-2" width="65.1" height="183.3"/>
						<text transform="matrix(1 0 0 1 672.2139 276.8351)" class="st1 futura-light st3">14.00</text>
						<text transform="matrix(1 0 0 1 672.2139 448.9551)" class="st1 futura-light st3">14.00</text>
						<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 659.8739 363.3848)" class="st1 futura-light st3">40.00</text>
						<text transform="matrix(1 0 0 1 666.9739 360.8251)" class="st1 futura-light st3">560.00m2</text>
						<text transform="matrix(0.97 0 0 1 671.5839 338.455)" class="st4 futura-med st6">NAVE </text>
						<text transform="matrix(0.97 0 0 1 681.0028 350.9852)" class="st4 futura-med st6">59</text>
					</g>
					<g class="property__active" ng-class="nvtBeta.inmovablesClassList[28]" ng-click="nvtBeta.setLeadProperty(nvtBeta.inmovablesData.inmovables[28])">
						<rect x="584.1" y="268.2" class="property nvt-sprite-1" width="64.9" height="183.3"/>
						<text transform="matrix(1 0 0 1 607.8839 276.8351)" class="st1 futura-light st3">14.00</text>
						<text transform="matrix(1 0 0 1 607.8839 448.9551)" class="st1 futura-light st3">14.00</text>
						<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 595.5339 363.3848)" class="st1 futura-light st3">40.00</text>
						<text transform="matrix(1 0 0 1 602.6439 360.8251)" class="st1 futura-light st3">560.00m2</text>
						<text transform="matrix(0.97 0 0 1 607.2543 338.455)" class="st4 futura-med st6">NAVE </text>
						<text transform="matrix(0.97 0 0 1 616.6727 350.9852)" class="st4 futura-med st6">60</text>
					</g>
					<g class="property__active" ng-class="nvtBeta.inmovablesClassList[29]" ng-click="nvtBeta.setLeadProperty(nvtBeta.inmovablesData.inmovables[29])">
						<rect x="519" y="268.2" class="property nvt-sprite-2" width="65.1" height="183.3"/>
						<text transform="matrix(1 0 0 1 542.8739 276.8351)" class="st1 futura-light st3">14.00</text>
						<text transform="matrix(1 0 0 1 542.8739 448.9551)" class="st1 futura-light st3">14.00</text>
						<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 530.5239 363.3848)" class="st1 futura-light st3">40.00</text>
						<text transform="matrix(1 0 0 1 537.6339 360.8251)" class="st1 futura-light st3">560.00m2</text>
						<text transform="matrix(0.97 0 0 1 542.244 338.455)" class="st4 futura-med st6">NAVE </text>
						<text transform="matrix(0.97 0 0 1 551.663 350.9852)" class="st4 futura-med st6">61</text>
					</g>
					<g class="property__active" ng-class="nvtBeta.inmovablesClassList[30]" ng-click="nvtBeta.setLeadProperty(nvtBeta.inmovablesData.inmovables[30])">
						<rect x="453.8" y="268.2" class="property nvt-sprite-1" width="65.1" height="183.3"/>
						<text transform="matrix(1 0 0 1 478.8739 276.8351)" class="st1 futura-light st3">14.00</text>
						<text transform="matrix(1 0 0 1 478.8739 448.9551)" class="st1 futura-light st3">14.00</text>
						<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 466.5239 363.3848)" class="st1 futura-light st3">40.00</text>
						<text transform="matrix(1 0 0 1 473.6339 360.8251)" class="st1 futura-light st3">560.00m2</text>
						<text transform="matrix(0.97 0 0 1 478.244 338.455)" class="st4 futura-med st6">NAVE </text>
						<text transform="matrix(0.97 0 0 1 487.663 350.9852)" class="st4 futura-med st6">62</text>
					</g>
					<g class="property__active" ng-class="nvtBeta.inmovablesClassList[31]" ng-click="nvtBeta.setLeadProperty(nvtBeta.inmovablesData.inmovables[31])">
						<rect x="388.7" y="268.2" class="property nvt-sprite-2" width="65.1" height="183.3"/>
						<text transform="matrix(1 0 0 1 412.5239 276.8351)" class="st1 futura-light st3">14.00</text>
						<text transform="matrix(1 0 0 1 412.5239 448.9551)" class="st1 futura-light st3">14.00</text>
						<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 400.174 363.3848)" class="st1 futura-light st3">40.00</text>
						<text transform="matrix(1 0 0 1 407.2739 360.8251)" class="st1 futura-light st3">560.00m2</text>
						<text transform="matrix(0.97 0 0 1 411.8842 338.455)" class="st4 futura-med st6">NAVE </text>
						<text transform="matrix(0.97 0 0 1 421.3026 350.9852)" class="st4 futura-med st6">63</text>
					</g>
					<g class="property__active" ng-class="nvtBeta.inmovablesClassList[32]" ng-click="nvtBeta.setLeadProperty(nvtBeta.inmovablesData.inmovables[32])">
						<rect x="323.8" y="268.2" class="property nvt-sprite-1" width="64.9" height="183.3"/>
						<text transform="matrix(1 0 0 1 346.3539 276.8351)" class="st1 futura-light st3">14.00</text>
						<text transform="matrix(1 0 0 1 346.3539 448.9551)" class="st1 futura-light st3">14.00</text>
						<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 334.0039 363.3848)" class="st1 futura-light st3">40.00</text>
						<text transform="matrix(1 0 0 1 341.1039 360.8251)" class="st1 futura-light st3">560.00m2</text>
						<text transform="matrix(0.97 0 0 1 345.7142 338.455)" class="st4 futura-med st6">NAVE </text>
						<text transform="matrix(0.97 0 0 1 355.1327 350.9852)" class="st4 futura-med st6">64</text>
					</g>
					<g class="property__active" ng-class="nvtBeta.inmovablesClassList[33]" ng-click="nvtBeta.setLeadProperty(nvtBeta.inmovablesData.inmovables[33])">
						<rect x="258.7" y="268.2" class="property nvt-sprite-2" width="65.1" height="183.3"/>
						<text transform="matrix(1 0 0 1 282.3539 276.8351)" class="st1 futura-light st3">14.00</text>
						<text transform="matrix(1 0 0 1 282.3539 448.9551)" class="st1 futura-light st3">14.00</text>
						<text transform="matrix(6.123234e-17 -1 1 6.123234e-17 270.0039 363.3848)" class="st1 futura-light st3">40.00</text>
						<text transform="matrix(1 0 0 1 277.1139 360.8251)" class="st1 futura-light st3">560.00m2</text>
						<text transform="matrix(0.97 0 0 1 281.7142 338.455)" class="st4 futura-med st6">NAVE </text>
						<text transform="matrix(0.97 0 0 1 291.1327 350.9852)" class="st4 futura-med st6">65</text>
						
						<rect x="290.9" y="315.1" transform="matrix(0.7034 -0.7108 0.7108 0.7034 -139.6235 304.9697)" class="st7" width="9.3" height="9.3"/>
						<polygon class="st7" points="295.6,326.4 295.6,320 295.6,313.2 302.2,319.7"/>
					</g>
				</g>
			</g>
		</svg>

		</div>

</body>
</html>