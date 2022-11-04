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

<body ng-controller="NvtGammaDosCtrl as nvtGammaDos">
  
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

	<div ng-class="is_scrollin">
    	<div class="plano_container">

			<div class="container mt-64">
				<div class="row quote-header">
					<div class="col s12">
						<h1 class="center-align futura-med blue-txt">GAMMA II</h1>
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
					<button class="btn-flat right"><i style="font-size:30px;" class="material-icons" ng-click="nvtGammaDos.openList()">list</i></button>
				</div>
			</div>

			<svg version="1.1" class="quote__map" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
				viewBox="0 0 1366 886" style="enable-background:new 0 0 1366 886;" xml:space="preserve">
				<style type="text/css">
					.st1{fill:#FFFFFF;}
					.st3{font-size:5.53px;}
					.st4{font-size:5.5303px;}
					.st5{fill:#FFFF00;}
					.st7{font-size:11.0606px;}
					.st8{opacity:0.6;fill:#DBAE4C;enable-background:new;}
					.st10{fill:none;stroke:#FFFFFF;stroke-width:0.74;stroke-miterlimit:10;}
				</style>
				<image style="overflow:visible;" width="1366" height="886" xlink:href="media/assets/img/navetec/app/gamma/gama2.jpg"></image>
				<g>
					<g>
					<g class="property__active" ng-class="nvtGammaDos.inmovablesClassList[0]" ng-click="nvtGammaDos.setLeadProperty(nvtGammaDos.inmovablesData.inmovables[0])">
						<polygon id="g-l1" class="property nvt-sprite-1" points="1181.6,701.8 1181.6,857 1118.8,857 1118.8,701.9"/>
						<text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 1142.5997 852.915)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 1142.5997 708.765)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 1121.4979 772.4351)" class="st1 futura-book st3">34.58</text>
						<text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 1175.0878 772.425)" class="st1 futura-book st3">34.58</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 1136.369 794.6047)" class="st1 futura-book st4">484.12 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 1159.9221 791.5984)" class="st1 futura-book st4">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 1135.479 772.2145)" class="st5 futura-light st7">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 1143.1095 772.1382)" class="st5 futura-light st7">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 1149.7195 772.0721)" class="st5 futura-light st7">VE </text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 1143.4825 785.4159)" class="st5 futura-light st7">1G</text>
						
						<rect x="1126.6" y="765.2" transform="matrix(0.6925 -0.7214 0.7214 0.6925 -206.8745 1051.0643)" class="st8" width="6" height="6"/>
						<polygon class="st8" points="1129.7,772.4 1129.6,768.3 1129.5,764 1133.8,768.1"/>
					</g>
					<g class="property__active" ng-class="nvtGammaDos.inmovablesClassList[1]" ng-click="nvtGammaDos.setLeadProperty(nvtGammaDos.inmovablesData.inmovables[1])">
						<polygon id="g-l2" class="property nvt-sprite-2" points="1118.8,701.9 1118.8,857 1056,856.9 1056,701.9"/>
						<text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 1079.7196 852.915)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 1079.7196 708.765)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 1058.619 772.425)" class="st1 futura-book st3">34.58</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 1073.4889 794.6045)" class="st1 futura-book st4">484.12m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 1095.5118 791.6136)" class="st1 futura-book st4">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 1072.5891 772.2144)" class="st5 futura-light st7">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 1080.2196 772.1381)" class="st5 futura-light st7">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 1086.8297 772.072)" class="st5 futura-light st7">VE </text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 1080.5927 785.4158)" class="st5 futura-light st7">2G</text>
					</g>
					<g class="property__active" ng-class="nvtGammaDos.inmovablesClassList[2]" ng-click="nvtGammaDos.setLeadProperty(nvtGammaDos.inmovablesData.inmovables[2])">
						<polygon id="g-l3" class="property nvt-sprite-1" points="1055.9,701.9 1056,857.1 993.1,857.1 993.2,702"/>
						<text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 1016.9396 852.915)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 1016.9396 708.765)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 995.8377 772.4351)" class="st1 futura-book st3">34.58</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 1010.7191 794.6042)" class="st1 futura-book st4">484.12m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 1032.7421 791.6138)" class="st1 futura-book st4">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 1009.8194 772.2147)" class="st5 futura-light st7">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 1017.4489 772.1384)" class="st5 futura-light st7">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 1024.0599 772.0718)" class="st5 futura-light st7">VE </text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 1017.822 785.4156)" class="st5 futura-light st7">3G</text>
					</g>
					<g class="property__active" ng-class="nvtGammaDos.inmovablesClassList[3]" ng-click="nvtGammaDos.setLeadProperty(nvtGammaDos.inmovablesData.inmovables[3])">
						<polygon id="g-l4" class="property nvt-sprite-2" points="993.2,701.9 993.1,857 930.4,856.9 930.3,701.9"/>
						<text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 954.1697 852.915)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 954.1697 708.765)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 933.0584 772.4351)" class="st1 futura-book st3">34.58</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 947.9396 794.6046)" class="st1 futura-book st4">484.12m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 969.9616 791.6142)" class="st1 futura-book st4">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 947.0389 772.2145)" class="st5 futura-light st7">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 954.6694 772.1382)" class="st5 futura-light st7">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 961.2794 772.0721)" class="st5 futura-light st7">VE </text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 955.0424 785.4154)" class="st5 futura-light st7">4G</text>
					</g>
					<g class="property__active" ng-class="nvtGammaDos.inmovablesClassList[4]" ng-click="nvtGammaDos.setLeadProperty(nvtGammaDos.inmovablesData.inmovables[4])">
						<polygon id="g-l5" class="property nvt-sprite-1" points="930.4,701.9 930.4,857.1 867.6,857.1 867.6,702"/>
						<text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 891.3898 852.915)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 891.3898 708.765)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 870.2889 772.4351)" class="st1 futura-book st3">34.58</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 885.1591 794.6044)" class="st1 futura-book st4">484.12m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 907.1821 791.614)" class="st1 futura-book st4">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 884.2692 772.2142)" class="st5 futura-light st7">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 891.8997 772.1379)" class="st5 futura-light st7">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 898.5097 772.0718)" class="st5 futura-light st7">VE </text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 892.2727 785.4156)" class="st5 futura-light st7">5G</text>
					</g>
					<g class="property__active" ng-class="nvtGammaDos.inmovablesClassList[5]" ng-click="nvtGammaDos.setLeadProperty(nvtGammaDos.inmovablesData.inmovables[5])">
						<polygon id="g-l6" class="property nvt-sprite-2" points="867.5,701.9 867.5,857 804.7,856.9 804.7,701.9"/>
						<text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 828.5397 852.915)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 828.5297 708.765)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 807.4276 772.4351)" class="st1 futura-book st3">34.58</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 822.3093 794.6045)" class="st1 futura-book st4">484.12m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 844.3313 791.6141)" class="st1 futura-book st4">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 821.4096 772.2144)" class="st5 futura-light st7">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 829.0391 772.1381)" class="st5 futura-light st7">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 835.6491 772.072)" class="st5 futura-light st7">VE </text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 829.4121 785.4158)" class="st5 futura-light st7">6G</text>
					</g>
					<g class="property__active" ng-class="nvtGammaDos.inmovablesClassList[6]" ng-click="nvtGammaDos.setLeadProperty(nvtGammaDos.inmovablesData.inmovables[6])">
						<polygon id="g-l7" class="property nvt-sprite-1" points="804.9,701.8 804.9,857 742.1,857 742.1,701.9"/>
						<text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 765.6797 852.915)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 765.6797 708.765)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 744.5779 772.4351)" class="st1 futura-book st3">34.58</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 759.4497 794.6041)" class="st1 futura-book st4">484.12m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 781.4717 791.6143)" class="st1 futura-book st4">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 758.5598 772.2144)" class="st5 futura-light st7">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 766.1893 772.1381)" class="st5 futura-light st7">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 772.7993 772.072)" class="st5 futura-light st7">VE </text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 766.5623 785.4158)" class="st5 futura-light st7">7G</text>
					</g>
					<g class="property__active" ng-class="nvtGammaDos.inmovablesClassList[7]" ng-click="nvtGammaDos.setLeadProperty(nvtGammaDos.inmovablesData.inmovables[7])">
						<polygon id="g-l8" class="property nvt-sprite-2" points="742.1,701.9 742.1,857 679.3,856.9 679.3,701.9"/>
						<text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 702.8198 852.915)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 702.8298 708.765)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 681.7186 772.4351)" class="st1 futura-book st3">34.58</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 696.5989 794.6047)" class="st1 futura-book st4">484.12m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 718.6219 791.6138)" class="st1 futura-book st4">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 695.6992 772.2141)" class="st5 futura-light st7">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 703.3297 772.1378)" class="st5 futura-light st7">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 709.9397 772.0717)" class="st5 futura-light st7">VE </text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 703.7017 785.416)" class="st5 futura-light st7">8G</text>
					</g>
					<g class="property__active" ng-class="nvtGammaDos.inmovablesClassList[8]" ng-click="nvtGammaDos.setLeadProperty(nvtGammaDos.inmovablesData.inmovables[8])">
						<polygon id="g-l9" class="property nvt-sprite-1" points="679.2,701.8 679.3,857 616.4,857 616.5,701.9"/>
						<text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 639.9697 852.915)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 639.9697 708.765)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 618.869 772.4351)" class="st1 futura-book st3">34.58</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 633.7393 794.6043)" class="st1 futura-book st4">484.12m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 655.7618 791.614)" class="st1 futura-book st4">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 632.8494 772.2147)" class="st5 futura-light st7">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 640.4794 772.1384)" class="st5 futura-light st7">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 647.0894 772.0723)" class="st5 futura-light st7">VE </text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 640.8519 785.4155)" class="st5 futura-light st7">9G</text>
					</g>
					<g class="property__active" ng-class="nvtGammaDos.inmovablesClassList[9]" ng-click="nvtGammaDos.setLeadProperty(nvtGammaDos.inmovablesData.inmovables[9])">
						<polygon id="g-l10" class="property nvt-sprite-2" points="616.5,701.9 616.4,857 553.7,856.9 553.7,701.9"/>
						<text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 577.1097 852.915)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 577.1097 708.765)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 556.0076 772.4351)" class="st1 futura-book st3">34.58</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 570.8895 794.6044)" class="st1 futura-book st4">484.12m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 592.9115 791.614)" class="st1 futura-book st4">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 569.9893 772.2143)" class="st5 futura-light st7">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 577.6193 772.138)" class="st5 futura-light st7">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 584.2293 772.0719)" class="st5 futura-light st7">VE </text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 574.9222 785.4464)" class="st5 futura-light st7">10G</text>
					</g>
					<g class="property__active" ng-class="nvtGammaDos.inmovablesClassList[10]" ng-click="nvtGammaDos.setLeadProperty(nvtGammaDos.inmovablesData.inmovables[10])">
						<polygon id="g-l11" class="property nvt-sprite-1" points="553.6,701.8 553.7,857 490.8,857 490.8,701.9"/>
						<text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 514.2598 852.915)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 514.2598 708.765)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 493.1581 772.425)" class="st1 futura-book st3">34.58</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 508.0294 794.6046)" class="st1 futura-book st4">484.12m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 530.0519 791.6136)" class="st1 futura-book st4">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 507.1292 772.2145)" class="st5 futura-light st7">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 514.7592 772.1382)" class="st5 futura-light st7">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 521.3693 772.0721)" class="st5 futura-light st7">VE </text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 512.0621 785.4465)" class="st5 futura-light st7">11G</text>
					</g>
					<g class="property__active" ng-class="nvtGammaDos.inmovablesClassList[11]" ng-click="nvtGammaDos.setLeadProperty(nvtGammaDos.inmovablesData.inmovables[11])">
						<polygon id="g-l12" class="property nvt-sprite-2" points="490.8,701.9 490.8,857 428.1,856.9 428,701.9"/>
						<text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 451.3998 852.915)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 451.3998 708.765)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 430.2987 772.4351)" class="st1 futura-book st3">34.58</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 445.1796 794.6046)" class="st1 futura-book st4">484.12m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 467.2016 791.6142)" class="st1 futura-book st4">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 444.2794 772.2145)" class="st5 futura-light st7">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 451.9094 772.1382)" class="st5 futura-light st7">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 458.5194 772.0721)" class="st5 futura-light st7">VE </text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 449.2123 785.4461)" class="st5 futura-light st7">12G</text>
					</g>
					<g class="property__active" ng-class="nvtGammaDos.inmovablesClassList[12]" ng-click="nvtGammaDos.setLeadProperty(nvtGammaDos.inmovablesData.inmovables[12])">
						<polygon id="g-l13" class="property nvt-sprite-1" points="428.2,701.8 428.2,857 365.4,857 365.4,701.9"/>
						<text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 388.5498 852.915)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 388.5498 708.765)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 367.4491 772.4351)" class="st1 futura-book st3">34.58</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 382.3195 794.6042)" class="st1 futura-book st4">484.12m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 403.8415 791.6138)" class="st1 futura-book st4">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 381.4296 772.2145)" class="st5 futura-light st7">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 389.0596 772.1382)" class="st5 futura-light st7">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 395.6696 772.0717)" class="st5 futura-light st7">VE </text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 386.362 785.4462)" class="st5 futura-light st7">13G</text>
					</g>
					<g class="property__active" ng-class="nvtGammaDos.inmovablesClassList[13]" ng-click="nvtGammaDos.setLeadProperty(nvtGammaDos.inmovablesData.inmovables[13])">
						<polygon id="g-l14" class="property nvt-sprite-2" points="365.4,701.9 365.4,857 302.6,856.9 302.6,701.9"/>
						<text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 325.6898 852.915)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 325.6898 708.765)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 304.5877 772.4351)" class="st1 futura-book st3">34.58</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 319.4692 794.6043)" class="st1 futura-book st4">484.12m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 341.4917 791.6139)" class="st1 futura-book st4">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 318.5695 772.2142)" class="st5 futura-light st7">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 326.1995 772.1379)" class="st5 futura-light st7">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 332.8095 772.0718)" class="st5 futura-light st7">VE </text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 323.5024 785.4463)" class="st5 futura-light st7">14G</text>
					</g>
					<g class="property__active" ng-class="nvtGammaDos.inmovablesClassList[14]" ng-click="nvtGammaDos.setLeadProperty(nvtGammaDos.inmovablesData.inmovables[14])">
						<polygon id="g-l15" class="property nvt-sprite-1" points="302.5,701.8 302.6,857 239.7,857 239.7,701.9"/>
						<text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 262.8398 852.915)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 262.8398 708.765)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 241.7381 772.425)" class="st1 futura-book st3">34.58</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 256.6092 794.6044)" class="st1 futura-book st4">484.12m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 278.6316 791.6141)" class="st1 futura-book st4">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 255.7095 772.2144)" class="st5 futura-light st7">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 263.3394 772.1381)" class="st5 futura-light st7">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 269.9495 772.072)" class="st5 futura-light st7">VE </text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 260.6423 785.4465)" class="st5 futura-light st7">15G</text>
					</g>
					<g class="property__active" ng-class="nvtGammaDos.inmovablesClassList[15]" ng-click="nvtGammaDos.setLeadProperty(nvtGammaDos.inmovablesData.inmovables[15])">
						<polygon id="g-l16" class="property nvt-sprite-2" points="239.7,701.9 239.7,857 177,856.9 176.9,701.9"/>
						<text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 199.9798 852.915)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 199.9798 708.765)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 178.8788 772.4351)" class="st1 futura-book st3">34.58</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 193.7594 794.6045)" class="st1 futura-book st4">484.12m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 215.7818 791.6141)" class="st1 futura-book st4">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 192.8596 772.2144)" class="st5 futura-light st7">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 200.4896 772.1381)" class="st5 futura-light st7">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 207.0996 772.072)" class="st5 futura-light st7">VE </text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 197.792 785.4465)" class="st5 futura-light st7">16G</text>
					</g>
					<g class="property__active" ng-class="nvtGammaDos.inmovablesClassList[16]" ng-click="nvtGammaDos.setLeadProperty(nvtGammaDos.inmovablesData.inmovables[16])">
						<polygon id="g-l17" class="property nvt-sprite-1" points="177,701.8 177.1,857 114.2,857 114.3,701.9"/>
						<text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 137.1298 852.915)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 137.1298 708.765)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 116.0291 772.4351)" class="st1 futura-book st3">34.58</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 130.8993 794.6041)" class="st1 futura-book st4">484.12m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 152.9217 791.6138)" class="st1 futura-book st4">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 129.9996 772.2146)" class="st5 futura-light st7">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 137.6295 772.1382)" class="st5 futura-light st7">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 144.2396 772.0721)" class="st5 futura-light st7">VE </text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 134.9324 785.4462)" class="st5 futura-light st7">17G</text>
					</g>
					<g class="property__active" ng-class="nvtGammaDos.inmovablesClassList[17]" ng-click="nvtGammaDos.setLeadProperty(nvtGammaDos.inmovablesData.inmovables[17])">
						<polygon id="g-l18" class="property nvt-sprite-2" points="114.3,701.9 114.2,857 51.5,856.9 51.5,701.9"/>
						<text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 74.2698 852.915)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 74.2698 708.765)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 53.1678 772.4351)" class="st1 futura-book st3">34.58</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 68.0495 794.6047)" class="st1 futura-book st4">484.12m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 90.0719 791.6138)" class="st1 futura-book st4">2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 67.1492 772.2141)" class="st5 futura-light st7">N</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 74.7792 772.1378)" class="st5 futura-light st7">A</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 81.3893 772.0717)" class="st5 futura-light st7">VE </text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 72.0821 785.4462)" class="st5 futura-light st7">18G</text>
						
						<rect x="58.5" y="765.1" transform="matrix(0.6925 -0.7214 0.7214 0.6925 -535.218 280.5775)" class="st8" width="6" height="6"/>
						<polygon class="st8" points="61.6,772.4 61.5,768.3 61.5,763.9 65.8,768.1"/>
					</g>
					</g>
					<g id="isla_h">
					<g class="property__active" ng-class="nvtGammaDos.inmovablesClassList[18]" ng-click="nvtGammaDos.setLeadProperty(nvtGammaDos.inmovablesData.inmovables[18])">
						<polygon id="h-l1" class="property nvt-sprite-1" points="1182.5,184.4 1182.5,2 1119.7,1.9 1119.7,184.4"/>
						<text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 1145.1777 179.425)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 1145.1777 10.205)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 1174.8866 70.9951)" class="st1 futura-book st3">40.69</text>
						<text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 1124.576 70.9951)" class="st1 futura-book st3">40.69</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 1138.9474 93.1742)" class="st1 futura-book st4">569.70 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 1162.4995 90.1685)" class="st1 futura-book st4">2</text>
						<path class="st5" d="M1138.8,70.8l-0.1-7.4h2l1.6,2.7c0.5,0.8,0.9,1.7,1.3,2.5l0,0c-0.1-1-0.2-2.1-0.2-3.1v-2.2h1.6l0.1,7.5h-1.8
						l-1.6-2.8c-0.5-0.8-0.9-1.7-1.3-2.6l0,0c0.1,1,0.1,2,0.1,3.3v2.3L1138.8,70.8z"/>
						<path class="st5" d="M1148.1,68.8l-0.5,1.9h-1.7l2.2-7.5h2.2l2.4,7.4h-1.8l-0.6-1.9L1148.1,68.8z M1150,67.5l-0.5-1.6
						c-0.1-0.4-0.3-1-0.4-1.4l0,0c-0.1,0.4-0.2,1-0.3,1.4l-0.4,1.6L1150,67.5z"/>
						<path class="st5" d="M1154.8,70.6l-2.5-7.4h1.8l0.9,3.1c0.3,0.9,0.5,1.7,0.7,2.7l0,0c0.2-0.9,0.4-1.8,0.7-2.6l0.9-3.2h1.8
						l-2.4,7.5L1154.8,70.6z"/>
						<path class="st5" d="M1164.5,67.3h-2.7v1.8h3.1v1.4h-4.8l-0.1-7.4h4.6v1.4h-2.9V66h2.8L1164.5,67.3z"/>
						<path class="st5" d="M1149.1,78.2L1149.1,78.2l-1.4,0.7l-0.3-1.3l1.9-0.9h1.4l0.1,7.2h-1.6L1149.1,78.2z"/>
						<path class="st5" d="M1153.3,76.7h1.6v2.8h2v-2.8h1.6l0.1,7.2h-1.6v-3h-1.9v3h-1.6L1153.3,76.7z"/>
					</g>
					<g class="property__active" ng-class="nvtGammaDos.inmovablesClassList[19]" ng-click="nvtGammaDos.setLeadProperty(nvtGammaDos.inmovablesData.inmovables[19])">
						<polygon id="h-l2" class="property nvt-sprite-2" points="1081.5,604.5 1081.6,421.9 1008.8,421.9 1008.8,604.5"/>
						<text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 1040.6198 601.2051)" class="st1 futura-book st3">16.22</text>
						<text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 1040.6198 427.985)" class="st1 futura-book st3">16.22</text>
						<text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 1075.869 496.775)" class="st1 futura-book st3">40.70</text>
						<text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 1012.408 496.775)" class="st1 futura-book st3">40.70</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 1034.3898 518.9543)" class="st1 futura-book st4">660.15 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 1057.9419 515.9487)" class="st1 futura-book st4">2</text>
						<path class="st5" d="M1034.2,496.6l-0.1-7.5h2l1.6,2.7c0.5,0.8,0.9,1.7,1.3,2.5l0,0c-0.1-1-0.2-2-0.2-3.1v-2.2h1.5l0.1,7.5h-1.8
						l-1.6-2.9c-0.5-0.8-0.9-1.7-1.3-2.6l0,0c0.1,1,0.1,2,0.1,3.3v2.3L1034.2,496.6z"/>
						<path class="st5" d="M1043.6,494.5l-0.5,1.9h-1.7l2.2-7.5h2.2l2.4,7.4h-1.8l-0.6-1.9L1043.6,494.5z M1045.4,493.3l-0.5-1.6
						c-0.1-0.4-0.3-1-0.4-1.4l0,0c-0.1,0.4-0.2,1-0.3,1.4l-0.4,1.6L1045.4,493.3z"/>
						<path class="st5" d="M1050.2,496.4l-2.5-7.4h1.8l0.9,3.1c0.3,0.9,0.5,1.8,0.7,2.6l0,0c0.2-0.9,0.4-1.8,0.6-2.6l0.9-3.2h1.8
						l-2.4,7.5L1050.2,496.4z"/>
						<path class="st5" d="M1059.9,493.1h-2.7v1.8h3.1v1.4l-4.8,0.1l-0.1-7.5h4.6v1.4h-2.9v1.5h2.8L1059.9,493.1z"/>
						<path class="st5" d="M1042.4,509.7v-1l0.9-0.8c1.6-1.4,2.3-2.3,2.3-3.1c0-0.6-0.4-1-1.2-1c-0.6,0-1.1,0.2-1.5,0.6l-0.5-1.2
						c0.7-0.5,1.5-0.8,2.3-0.8c1.2-0.2,2.4,0.6,2.5,1.9c0,0.1,0,0.2,0,0.3c0,1.2-0.8,2.2-1.9,3.1l-0.7,0.6l0,0h2.7v1.4L1042.4,509.7z"
						/>
						<path class="st5" d="M1048.7,502.5h1.6v2.8h2v-2.8h1.6l0.1,7.2h-1.6v-3h-2v3h-1.6L1048.7,502.5z"/>
						
						<rect x="1024.6" y="489.2" transform="matrix(0.6925 -0.7214 0.7214 0.6925 -39.0977 892.6359)" class="st8" width="6" height="6"/>
						<polygon class="st8" points="1027.7,496.4 1027.6,492.3 1027.5,487.9 1031.9,492.1"/>
					</g>
					<g class="property__active" ng-class="nvtGammaDos.inmovablesClassList[20]" ng-click="nvtGammaDos.setLeadProperty(nvtGammaDos.inmovablesData.inmovables[20])">
						<polygon id="h-l3" class="property nvt-sprite-1" points="1008.8,604.5 1008.8,421.9 936.2,421.9 936.2,604.5"/>
						<text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 966.9097 601.2051)" class="st1 futura-book st3">16.22</text>
						<text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 966.9097 427.985)" class="st1 futura-book st3">16.22</text>
						<text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 938.699 496.775)" class="st1 futura-book st3">40.70</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 960.6898 518.9545)" class="st1 futura-book st4">660.15 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 984.2419 515.9489)" class="st1 futura-book st4">2</text>
						<path class="st5" d="M960.5,496.6l-0.1-7.5h2l1.6,2.7c0.5,0.8,0.9,1.7,1.3,2.5l0,0c-0.1-1-0.2-2-0.2-3.1v-2.2h1.5l0.1,7.5h-1.8
						l-1.6-2.9c-0.5-0.8-0.9-1.7-1.3-2.6l0,0c0.1,1,0.1,2,0.1,3.3v2.2L960.5,496.6z"/>
						<path class="st5" d="M969.9,494.5l-0.5,1.9h-1.7l2.2-7.5h2.2l2.4,7.4h-1.8l-0.6-1.9L969.9,494.5z M971.7,493.3l-0.5-1.6
						c-0.1-0.4-0.3-1-0.4-1.4l0,0c-0.1,0.4-0.2,1-0.3,1.4l-0.4,1.6L971.7,493.3z"/>
						<path class="st5" d="M976.5,496.4l-2.5-7.4h1.8l0.9,3.1c0.3,0.9,0.5,1.8,0.7,2.7l0,0c0.2-0.9,0.4-1.8,0.6-2.6l0.9-3.2h1.8
						l-2.4,7.5L976.5,496.4z"/>
						<path class="st5" d="M986.2,493.1h-2.7v1.8h3.1v1.4l-4.8,0.1l-0.1-7.5h4.6v1.4h-2.9v1.5h2.7L986.2,493.1z"/>
						<path class="st5" d="M969,508.1c0.5,0.3,1.1,0.4,1.7,0.4c0.9,0,1.3-0.4,1.3-1c0-0.7-0.7-1-1.5-1h-0.7v-1.2h0.7
						c0.6,0,1.3-0.2,1.3-0.8c0-0.4-0.4-0.8-1.1-0.7c-0.5,0-1,0.2-1.5,0.5l-0.4-1.2c0.7-0.4,1.4-0.6,2.2-0.6c1.5,0,2.4,0.8,2.4,1.8
						c0,0.8-0.5,1.5-1.3,1.7l0,0c0.9,0.1,1.6,0.8,1.6,1.7c0,1.3-1.1,2.2-2.9,2.2c-0.7,0-1.5-0.1-2.1-0.5L969,508.1z"/>
						<path class="st5" d="M975,502.5h1.6v2.8h2v-2.8h1.6l0.1,7.1h-1.6v-3h-2v3h-1.6L975,502.5z"/>
					</g>
					<g class="property__active" ng-class="nvtGammaDos.inmovablesClassList[21]" ng-click="nvtGammaDos.setLeadProperty(nvtGammaDos.inmovablesData.inmovables[21])">
						<polygon id="h-l4" class="property nvt-sprite-2" points="936.2,604.5 936.2,421.9 873.4,421.9 873.5,604.5"/>
						<text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 876.5174 496.775)" class="st1 futura-book st3">40.70</text>
						<text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 897.1898 601.2051)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 897.1898 427.985)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 890.9695 518.9544)" class="st1 futura-book st4">569.80 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 914.5217 515.9487)" class="st1 futura-book st4">2</text>
						<path class="st5" d="M890.8,496.6l-0.1-7.5h2l1.6,2.7c0.5,0.8,0.9,1.7,1.2,2.5l0,0c-0.1-1-0.2-2.1-0.2-3.1v-2.2h1.5l0.1,7.5h-1.8
						l-1.6-2.9c-0.5-0.8-0.9-1.7-1.3-2.6l0,0c0.1,1,0.1,2,0.1,3.3v2.2L890.8,496.6z"/>
						<path class="st5" d="M900.1,494.5l-0.5,1.9h-1.7l2.2-7.5h2.2l2.4,7.4h-1.8l-0.6-1.9L900.1,494.5z M902,493.3l-0.5-1.6
						c-0.1-0.4-0.3-1-0.4-1.4l0,0c-0.1,0.4-0.2,1-0.3,1.4l-0.4,1.6L902,493.3z"/>
						<path class="st5" d="M906.8,496.4l-2.4-7.4h1.8l0.9,3.1c0.3,0.9,0.5,1.7,0.7,2.7l0,0c0.2-0.9,0.4-1.8,0.6-2.6l0.9-3.2h1.8
						l-2.4,7.5L906.8,496.4z"/>
						<path class="st5" d="M916.5,493.1h-2.7v1.8h3.1v1.4l-4.8,0.1l-0.1-7.5h4.6v1.4h-2.9v1.5h2.7L916.5,493.1z"/>
						<path class="st5" d="M902,509.7V508h-3.2v-1.1l2.7-4.4h2.1v4.2h0.9v1.3h-0.8v1.7L902,509.7z M902,506.7v-1.6c0-0.4,0-0.9,0-1.3
						l0,0c-0.2,0.5-0.4,0.9-0.7,1.3l-0.9,1.6l0,0L902,506.7z"/>
						<path class="st5" d="M905.3,502.5h1.6v2.8h2v-2.8h1.6l0.1,7.2H909v-3h-2v3h-1.6L905.3,502.5z"/>
					</g>
					<g class="property__active" ng-class="nvtGammaDos.inmovablesClassList[22]" ng-click="nvtGammaDos.setLeadProperty(nvtGammaDos.inmovablesData.inmovables[22])">
						<polygon id="h-l5" class="property nvt-sprite-1" points="873.4,604.5 873.4,421.9 810.6,421.9 810.6,604.5"/>
						<text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 813.7576 496.775)" class="st1 futura-book st3">40.70</text>
						<text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 834.4398 601.2051)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 834.4398 427.985)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 828.2095 518.9545)" class="st1 futura-book st4">569.80 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 851.7617 515.9484)" class="st1 futura-book st4">2</text>
						<path class="st5" d="M828,496.6l-0.1-7.5h2l1.6,2.7c0.5,0.8,0.9,1.7,1.2,2.5l0,0c-0.1-1-0.2-2.1-0.2-3.1v-2.2h1.5l0.1,7.5h-1.8
						l-1.6-2.9c-0.5-0.8-0.9-1.7-1.3-2.6l0,0c0.1,1,0.1,2,0.1,3.3v2.2L828,496.6z"/>
						<path class="st5" d="M837.4,494.5l-0.5,1.9h-1.7l2.3-7.5h2.2l2.4,7.4h-1.8l-0.6-1.9L837.4,494.5z M839.2,493.3l-0.5-1.6
						c-0.1-0.4-0.3-1-0.4-1.4l0,0c-0.1,0.4-0.2,1-0.3,1.4l-0.4,1.6L839.2,493.3z"/>
						<path class="st5" d="M844,496.4l-2.5-7.4h1.8l0.9,3.1c0.3,0.9,0.5,1.7,0.7,2.7l0,0c0.2-0.9,0.4-1.8,0.7-2.6l0.9-3.2h1.8l-2.4,7.5
						L844,496.4z"/>
						<path class="st5" d="M853.7,493.1H851v1.8h3.1v1.4l-4.7,0.1l-0.1-7.5h4.6v1.4h-2.9v1.5h2.7L853.7,493.1z"/>
						<path class="st5" d="M841,503.9h-2.8L838,505c0.2,0,0.3,0,0.5,0c0.7,0,1.3,0.1,1.9,0.5c0.6,0.4,0.9,1.1,0.9,1.8
						c0,1.3-1.1,2.5-3.1,2.6c-0.7,0-1.4-0.1-2-0.4l0.3-1.3c0.5,0.2,1.1,0.3,1.6,0.3c0.7,0,1.4-0.4,1.4-1.1s-0.6-1.2-2-1.2
						c-0.3,0-0.7,0-1,0.1l0.4-3.8l4,0L841,503.9z"/>
						<path class="st5" d="M842.5,502.5h1.6v2.8h2v-2.8h1.6l0.1,7.2h-1.6v-3h-2v3h-1.6L842.5,502.5z"/>
					</g>
					<g class="property__active" ng-class="nvtGammaDos.inmovablesClassList[23]" ng-click="nvtGammaDos.setLeadProperty(nvtGammaDos.inmovablesData.inmovables[23])">
						<polygon id="h-l6" class="property nvt-sprite-2" points="810.6,604.5 810.6,421.9 747.8,421.9 747.9,604.5"/>
						<text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 750.9979 496.775)" class="st1 futura-book st3">40.70</text>
						<text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 771.6797 601.2051)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 771.6797 427.985)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 765.4495 518.9542)" class="st1 futura-book st4">569.80 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 789.0017 515.9485)" class="st1 futura-book st4">2</text>
						<path class="st5" d="M765.3,496.6l-0.1-7.5h2l1.6,2.7c0.5,0.8,0.9,1.7,1.2,2.5l0,0c-0.1-1-0.2-2.1-0.2-3.1v-2.2h1.5l0.1,7.5h-1.8
						l-1.6-2.9c-0.5-0.8-0.9-1.7-1.3-2.6l0,0c0.1,1,0.1,2,0.1,3.3v2.3L765.3,496.6z"/>
						<path class="st5" d="M774.6,494.5l-0.5,1.9h-1.7l2.2-7.5h2.2l2.4,7.4h-1.8l-0.6-1.9L774.6,494.5z M776.5,493.3l-0.5-1.6
						c-0.1-0.4-0.3-1-0.4-1.4l0,0c-0.1,0.4-0.2,1-0.3,1.4l-0.4,1.6L776.5,493.3z"/>
						<path class="st5" d="M781.3,496.4l-2.5-7.4h1.8l0.9,3.1c0.3,0.9,0.5,1.7,0.7,2.6l0,0c0.2-0.9,0.4-1.8,0.7-2.6l0.9-3.2h1.8
						l-2.4,7.5L781.3,496.4z"/>
						<path class="st5" d="M791,493.1h-2.7v1.8h3.1v1.4l-4.7,0.1l-0.1-7.5h4.6v1.4h-2.9v1.5h2.7L791,493.1z"/>
						<path class="st5" d="M778,503.7c-0.2,0-0.4,0-0.7,0c-1.1,0-2.1,0.7-2.3,1.7l0,0c0.4-0.4,1-0.6,1.5-0.6c1.2,0,2.2,0.9,2.3,2.1
						c0,0.1,0,0.1,0,0.2c0,1.4-1.1,2.6-2.5,2.6c0,0-0.1,0-0.1,0c-1.9,0-2.9-1.4-2.9-3.1c-0.2-2.2,1.5-4.1,3.7-4.3c0.1,0,0.2,0,0.3,0
						c0.2,0,0.4,0,0.7,0L778,503.7z M777.1,507.3c0-0.7-0.4-1.2-1.1-1.2c-0.4,0-0.8,0.2-1,0.6c-0.1,0.1-0.1,0.3-0.1,0.4
						c0,0.8,0.4,1.5,1.2,1.4C776.8,508.6,777.1,508,777.1,507.3z"/>
						<path class="st5" d="M779.8,502.5h1.6v2.8h2v-2.8h1.6l0.1,7.2h-1.6v-3h-2v3h-1.6L779.8,502.5z"/>
					</g>
					<g class="property__active" ng-class="nvtGammaDos.inmovablesClassList[24]" ng-click="nvtGammaDos.setLeadProperty(nvtGammaDos.inmovablesData.inmovables[24])">
						<polygon id="h-l7" class="property nvt-sprite-1" points="747.8,604.5 747.8,421.9 685.1,421.9 685.1,604.5"/>
						<text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 688.2479 496.775)" class="st1 futura-book st3">40.70</text>
						<text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 708.9197 601.2051)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 708.9197 427.985)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 702.6896 518.9543)" class="st1 futura-book st4">569.80 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 726.2418 515.9486)" class="st1 futura-book st4">2</text>
						<path class="st5" d="M702.5,496.6l-0.1-7.5h2l1.6,2.7c0.5,0.8,0.9,1.7,1.3,2.5l0,0c-0.1-1-0.2-2-0.2-3.1v-2.2h1.5l0.1,7.5H707
						l-1.6-2.9c-0.5-0.8-0.9-1.7-1.3-2.6l0,0c0.1,1,0.1,2,0.1,3.3v2.2L702.5,496.6z"/>
						<path class="st5" d="M711.9,494.5l-0.5,1.9h-1.7l2.2-7.5h2.2l2.4,7.4h-1.8l-0.6-1.9L711.9,494.5z M713.8,493.3l-0.5-1.6
						c-0.1-0.4-0.3-1-0.4-1.4l0,0c-0.1,0.4-0.2,1-0.3,1.4l-0.4,1.6L713.8,493.3z"/>
						<path class="st5" d="M718.5,496.4l-2.5-7.4h1.8l0.9,3.1c0.3,0.9,0.5,1.7,0.7,2.7l0,0c0.2-0.9,0.4-1.8,0.7-2.6l0.9-3.2h1.8
						l-2.4,7.5L718.5,496.4z"/>
						<path class="st5" d="M728.2,493.1h-2.7v1.8h3.1v1.4l-4.8,0.1l-0.1-7.5h4.6v1.4h-2.9v1.5h2.8L728.2,493.1z"/>
						<path class="st5" d="M715.8,502.5v1.1l-2.9,6.2h-1.8l2.9-5.8l0,0h-3.3v-1.4L715.8,502.5z"/>
						<path class="st5" d="M717,502.5h1.6v2.8h2v-2.8h1.6l0.1,7.1h-1.6v-3h-2v3h-1.6L717,502.5z"/>
					</g>
					<g class="property__active" ng-class="nvtGammaDos.inmovablesClassList[25]" ng-click="nvtGammaDos.setLeadProperty(nvtGammaDos.inmovablesData.inmovables[25])">
						<polygon id="h-l8" class="property nvt-sprite-2" points="685,604.5 685.1,421.9 622.3,421.9 622.3,604.5"/>
						<text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 625.4881 496.775)" class="st1 futura-book st3">40.70</text>
						<text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 646.1597 601.2051)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 646.1597 427.985)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 639.9393 518.9543)" class="st1 futura-book st4">569.80 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 663.4915 515.9487)" class="st1 futura-book st4">2</text>
						<path class="st5" d="M639.8,496.6l-0.1-7.5h2l1.6,2.7c0.5,0.8,0.9,1.7,1.2,2.5l0,0c-0.1-1-0.2-2.1-0.2-3.1v-2.2h1.5l0.1,7.5h-1.8
						l-1.6-2.9c-0.5-0.8-0.9-1.7-1.3-2.6l0,0c0.1,1,0.1,2,0.1,3.3v2.2H639.8z"/>
						<path class="st5" d="M649.1,494.5l-0.5,1.9h-1.7l2.2-7.5h2.2l2.4,7.4h-1.8l-0.6-1.9L649.1,494.5z M651,493.3l-0.5-1.6
						c-0.1-0.4-0.3-1-0.4-1.4l0,0c-0.1,0.4-0.2,1-0.3,1.4l-0.4,1.6L651,493.3z"/>
						<path class="st5" d="M655.8,496.4l-2.5-7.4h1.8l0.9,3.1c0.3,0.9,0.5,1.7,0.7,2.6l0,0c0.2-0.9,0.4-1.8,0.7-2.6l0.9-3.2h1.8
						l-2.4,7.5L655.8,496.4z"/>
						<path class="st5" d="M665.4,493.1h-2.7v1.8h3.1v1.4l-4.8,0.1l-0.1-7.5h4.6v1.4h-2.9v1.5h2.7L665.4,493.1z"/>
						<path class="st5" d="M649.1,506c-0.6-0.3-1-0.9-1.1-1.6c0-1.2,1.1-2,2.5-2.1c1.7,0,2.4,1,2.4,1.8c0,0.7-0.4,1.3-1,1.6l0,0
						c0.8,0.2,1.3,1,1.3,1.8c0,1.3-1.1,2.2-2.8,2.2s-2.7-1-2.7-2C647.8,507,648.3,506.3,649.1,506L649.1,506z M651.5,507.8
						c0-0.6-0.5-1-1.1-1.2c-0.5,0.1-0.9,0.6-0.9,1.1c0,0.6,0.4,1,1,1C651,508.7,651.5,508.4,651.5,507.8
						C651.5,507.8,651.5,507.8,651.5,507.8L651.5,507.8z M649.6,504.4c0,0.5,0.4,0.8,1,1c0.4-0.1,0.7-0.5,0.7-0.9
						c0-0.5-0.3-0.9-0.8-0.9c0,0-0.1,0-0.1,0C650,503.5,649.7,503.9,649.6,504.4C649.6,504.3,649.6,504.4,649.6,504.4L649.6,504.4z"/>
						<path class="st5" d="M654.3,502.5h1.6v2.8h2v-2.8h1.6l0.1,7.2h-1.6v-3h-2v3h-1.6L654.3,502.5z"/>
					</g>
					<g class="property__active" ng-class="nvtGammaDos.inmovablesClassList[26]" ng-click="nvtGammaDos.setLeadProperty(nvtGammaDos.inmovablesData.inmovables[26])">
						<polygon id="h-l9" class="property nvt-sprite-1" points="622.3,604.5 622.3,421.9 559.5,421.9 559.5,604.5"/>
						<text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 562.7283 496.775)" class="st1 futura-book st3">40.70</text>
						<text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 583.4097 601.2051)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 583.4097 427.985)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 577.1794 518.9545)" class="st1 futura-book st4">569.80 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 600.7316 515.9488)" class="st1 futura-book st4">2</text>
						<path class="st5" d="M577,496.6l-0.1-7.5h2l1.6,2.7c0.5,0.8,0.9,1.7,1.2,2.5l0,0c-0.1-1-0.2-2.1-0.2-3.1v-2.2h1.5l0.1,7.5h-1.8
						l-1.6-2.9c-0.5-0.8-0.9-1.7-1.3-2.6h0c0.1,1,0.1,2,0.1,3.3v2.2H577z"/>
						<path class="st5" d="M586.4,494.5l-0.5,1.9h-1.7l2.2-7.5h2.2l2.4,7.4h-1.8l-0.6-1.9L586.4,494.5z M588.2,493.3l-0.5-1.6
						c-0.1-0.4-0.3-1-0.4-1.4l0,0c-0.1,0.4-0.2,1-0.3,1.4l-0.4,1.6L588.2,493.3z"/>
						<path class="st5" d="M593,496.4l-2.5-7.4h1.8l0.9,3.1c0.3,0.9,0.5,1.7,0.7,2.7l0,0c0.2-0.9,0.4-1.8,0.7-2.6l0.9-3.2h1.8l-2.4,7.5
						L593,496.4z"/>
						<path class="st5" d="M602.7,493.1h-2.8v1.8h3.1v1.4l-4.7,0.1l-0.1-7.5h4.6v1.4h-2.9v1.5h2.7L602.7,493.1z"/>
						<path class="st5" d="M585.7,508.5c0.2,0,0.5,0,0.7,0c0.5,0,1-0.2,1.4-0.5c0.5-0.3,0.8-0.8,0.9-1.4l0,0c-0.4,0.4-0.9,0.6-1.4,0.5
						c-1.2,0.1-2.2-0.8-2.3-2c0-0.1,0-0.1,0-0.2c0-1.4,1.2-2.6,2.6-2.6c0,0,0.1,0,0.1,0c1.8,0,2.7,1.4,2.8,3.1
						c0.3,2.1-1.2,4.1-3.3,4.3c-0.2,0-0.4,0-0.7,0c-0.3,0-0.5,0-0.8,0L585.7,508.5z M586.7,504.9c-0.1,0.5,0.3,1,0.9,1.1
						c0,0,0.1,0,0.1,0c0.4,0,0.7-0.2,0.9-0.5c0.1-0.1,0.1-0.3,0.1-0.4c0-0.8-0.3-1.5-1.1-1.5C587.1,503.6,586.7,504.1,586.7,504.9
						L586.7,504.9z"/>
						<path class="st5" d="M591.5,502.5h1.6v2.8h2v-2.8h1.6l0.1,7.2h-1.6v-3h-2v3h-1.6L591.5,502.5z"/>
					</g>
					<g class="property__active" ng-class="nvtGammaDos.inmovablesClassList[27]" ng-click="nvtGammaDos.setLeadProperty(nvtGammaDos.inmovablesData.inmovables[27])">
						<polygon id="h-l10" class="property nvt-sprite-2" points="559.5,604.5 559.5,421.9 496.7,421.9 496.7,604.5"/>
						<text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 499.9686 496.775)" class="st1 futura-book st3">40.70</text>
						<text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 520.6498 601.2051)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 520.6498 427.985)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 514.4194 518.9546)" class="st1 futura-book st4">569.80 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 537.9716 515.9484)" class="st1 futura-book st4">2</text>
						<path class="st5" d="M514.3,496.6l-0.1-7.5h2l1.6,2.7c0.5,0.8,0.9,1.7,1.3,2.5l0,0c-0.1-1-0.2-2.1-0.2-3.1v-2.2h1.5l0.1,7.5h-1.8
						l-1.6-2.9c-0.5-0.8-0.9-1.7-1.3-2.6l0,0c0.1,1,0.1,2,0.1,3.3v2.2H514.3z"/>
						<path class="st5" d="M523.6,494.5l-0.5,1.9h-1.7l2.2-7.5h2.2l2.4,7.4h-1.8l-0.6-1.9L523.6,494.5z M525.5,493.3l-0.5-1.6
						c-0.1-0.4-0.3-1-0.4-1.4l0,0c-0.1,0.4-0.2,1-0.3,1.4l-0.4,1.6L525.5,493.3z"/>
						<path class="st5" d="M530.2,496.4l-2.5-7.4h1.8l0.9,3.1c0.3,0.9,0.5,1.7,0.7,2.7l0,0c0.2-0.9,0.4-1.8,0.6-2.6l0.9-3.2h1.8
						l-2.4,7.5L530.2,496.4z"/>
						<path class="st5" d="M539.9,493.1h-2.7v1.8h3.1v1.4l-4.8,0.1l-0.1-7.5h4.6v1.4h-2.9v1.5h2.8L539.9,493.1z"/>
						<path class="st5" d="M521.5,504.1L521.5,504.1l-1.4,0.7l-0.3-1.3l1.9-0.9h1.4l0.1,7.2h-1.6L521.5,504.1z"/>
						<path class="st5" d="M530.8,506c0,2.2-0.9,3.8-2.7,3.8c-1.8,0-2.7-1.6-2.7-3.7c0-2,0.8-3.7,2.7-3.8
						C529.9,502.3,530.8,504.1,530.8,506z M527.1,506.1c0,1.6,0.4,2.4,1.1,2.4c0.6,0,1-0.8,1-2.5s-0.4-2.4-1-2.4
						S527,504.4,527.1,506.1L527.1,506.1z"/>
						<path class="st5" d="M531.8,502.4h1.6v2.8h2v-2.8h1.6l0.1,7.2h-1.6v-3h-2v3h-1.6L531.8,502.4z"/>
					</g>
					<g class="property__active" ng-class="nvtGammaDos.inmovablesClassList[28]" ng-click="nvtGammaDos.setLeadProperty(nvtGammaDos.inmovablesData.inmovables[28])">
						<polygon id="h-l11" class="property nvt-sprite-1" points="496.7,604.5 496.7,421.9 433.9,421.9 433.9,604.5"/>
						<text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 437.2186 496.775)" class="st1 futura-book st3">40.70</text>
						<text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 457.8898 601.2051)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 457.8898 427.985)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 451.6692 518.9541)" class="st1 futura-book st4">569.80 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 475.2219 515.9484)" class="st1 futura-book st4">2</text>
						<path class="st5" d="M451.5,496.6l-0.1-7.5h2l1.6,2.7c0.5,0.8,0.9,1.7,1.3,2.5l0,0c-0.1-1-0.1-2-0.2-3.1v-2.2h1.5l0.1,7.5h-1.8
						l-1.6-2.9c-0.5-0.8-0.9-1.7-1.3-2.6l0,0c0.1,1,0.1,2,0.1,3.3v2.2H451.5z"/>
						<path class="st5" d="M460.8,494.5l-0.5,1.9h-1.7l2.2-7.5h2.2l2.4,7.4h-1.8l-0.6-1.9L460.8,494.5z M462.7,493.3l-0.5-1.6
						c-0.1-0.4-0.3-1-0.4-1.4l0,0c-0.1,0.4-0.2,1-0.3,1.4l-0.4,1.6L462.7,493.3z"/>
						<path class="st5" d="M467.5,496.4l-2.5-7.4h1.9l0.9,3.1c0.3,0.9,0.5,1.7,0.7,2.7l0,0c0.2-0.9,0.4-1.8,0.6-2.6l0.9-3.2h1.8
						l-2.4,7.5L467.5,496.4z"/>
						<path class="st5" d="M477.2,493.1h-2.7v1.8h3.1v1.4l-4.8,0.1l-0.1-7.5h4.6v1.4h-2.9v1.5h2.8L477.2,493.1z"/>
						<path class="st5" d="M458.7,504.1L458.7,504.1l-1.4,0.7l-0.3-1.3l1.9-0.9h1.4l0.1,7.2h-1.6L458.7,504.1z"/>
						<path class="st5" d="M464.8,504L464.8,504l-1.4,0.7l-0.3-1.3l1.9-0.9h1.4l0.1,7.2h-1.6L464.8,504z"/>
						<path class="st5" d="M469.1,502.4h1.6v2.8h2v-2.8h1.6l0,7.2h-1.6v-3h-2v3h-1.6L469.1,502.4z"/>
					</g>
					<g class="property__active" ng-class="nvtGammaDos.inmovablesClassList[29]" ng-click="nvtGammaDos.setLeadProperty(nvtGammaDos.inmovablesData.inmovables[29])">
						<polygon id="h-l12" class="property nvt-sprite-2" points="433.9,604.5 433.9,421.9 371.1,421.9 371.2,604.5"/>
						<text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 374.4588 496.775)" class="st1 futura-book st3">40.70</text>
						<text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 395.1298 601.2051)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 395.1298 427.985)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 388.9092 518.9542)" class="st1 futura-book st4">569.80 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 412.4619 515.9485)" class="st1 futura-book st4">2</text>
						<path class="st5" d="M388.7,496.6l-0.1-7.5h2l1.6,2.7c0.5,0.8,0.9,1.7,1.2,2.5l0,0c-0.1-1-0.2-2.1-0.2-3.1v-2.2h1.5l0.1,7.5h-1.8
						l-1.6-2.9c-0.5-0.8-0.9-1.7-1.3-2.6h0c0.1,1,0.1,2,0.1,3.3v2.2L388.7,496.6z"/>
						<path class="st5" d="M398.1,494.5l-0.5,1.9h-1.7l2.2-7.5h2.2l2.4,7.4h-1.8l-0.6-1.9L398.1,494.5z M400,493.3l-0.5-1.6
						c-0.1-0.4-0.3-1-0.4-1.4l0,0c-0.1,0.4-0.2,1-0.3,1.4l-0.4,1.6L400,493.3z"/>
						<path class="st5" d="M404.7,496.4l-2.5-7.4h1.8l1,3.1c0.3,0.9,0.5,1.7,0.7,2.7l0,0c0.2-0.9,0.4-1.8,0.6-2.6l0.9-3.2h1.8l-2.4,7.5
						L404.7,496.4z"/>
						<path class="st5" d="M414.4,493.1h-2.8v1.8h3.1v1.4l-4.7,0l-0.1-7.5h4.6v1.4h-2.9v1.5h2.7L414.4,493.1z"/>
						<path class="st5" d="M395.9,504.1L395.9,504.1l-1.4,0.7l-0.3-1.3l1.9-0.9h1.4l0.1,7.2H396L395.9,504.1z"/>
						<path class="st5" d="M400,509.7v-1l0.9-0.8c1.6-1.4,2.3-2.2,2.3-3.1c0-0.6-0.4-1-1.2-1c-0.6,0-1.1,0.2-1.5,0.6l-0.5-1.2
						c0.7-0.5,1.5-0.8,2.3-0.8c1.2-0.2,2.4,0.7,2.5,1.9c0,0.1,0,0.2,0,0.3c0,1.2-0.8,2.2-1.9,3.1l-0.7,0.6l0,0h2.7v1.4L400,509.7z"/>
						<path class="st5" d="M406.3,502.4h1.6v2.8h2v-2.8h1.6l0.1,7.2H410v-3h-2v3h-1.6L406.3,502.4z"/>
					</g>
					<g class="property__active" ng-class="nvtGammaDos.inmovablesClassList[30]" ng-click="nvtGammaDos.setLeadProperty(nvtGammaDos.inmovablesData.inmovables[30])">
						<polygon id="h-l13" class="property nvt-sprite-1" points="371.2,604.5 371.1,421.9 308.4,421.9 308.4,604.5"/>
						<text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 311.6991 496.775)" class="st1 futura-book st3">40.70</text>
						<text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 332.3798 601.2051)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 332.3798 427.985)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 326.1493 518.9544)" class="st1 futura-book st4">569.80 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 349.7019 515.9487)" class="st1 futura-book st4">2</text>
						<path class="st5" d="M326,496.6l-0.1-7.5h2l1.6,2.7c0.5,0.8,0.9,1.7,1.2,2.5l0,0c-0.1-1-0.2-2.1-0.2-3.1v-2.2h1.5l0.1,7.5h-1.8
						l-1.6-2.9c-0.5-0.8-0.9-1.7-1.3-2.6l0,0c0.1,1,0.1,2,0.1,3.3v2.2L326,496.6z"/>
						<path class="st5" d="M335.4,494.5l-0.5,1.9h-1.7l2.2-7.5h2.2l2.4,7.4h-1.8l-0.6-1.9L335.4,494.5z M337.2,493.3l-0.5-1.6
						c-0.1-0.4-0.3-1-0.4-1.4l0,0c-0.1,0.4-0.2,1-0.3,1.4l-0.4,1.6L337.2,493.3z"/>
						<path class="st5" d="M342,496.4l-2.5-7.4h1.9l0.9,3.1c0.3,0.9,0.5,1.7,0.7,2.7l0,0c0.2-0.9,0.4-1.8,0.6-2.6l0.9-3.2h1.8l-2.4,7.5
						L342,496.4z"/>
						<path class="st5" d="M351.7,493.1h-2.7v1.8h3.1v1.4l-4.7,0.1l-0.1-7.5h4.6v1.4h-2.9v1.5h2.7L351.7,493.1z"/>
						<path class="st5" d="M333.2,504.1L333.2,504.1l-1.4,0.7l-0.3-1.3l1.9-0.9h1.4l0.1,7.2h-1.6L333.2,504.1z"/>
						<path class="st5" d="M337.5,508.1c0.5,0.3,1.1,0.4,1.7,0.4c0.9,0,1.3-0.4,1.3-1c0-0.7-0.7-1-1.5-1h-0.7v-1.2h0.7
						c0.6,0,1.3-0.2,1.3-0.8c0-0.4-0.4-0.8-1.1-0.7c-0.5,0-1,0.2-1.5,0.4l-0.4-1.2c0.7-0.4,1.4-0.6,2.2-0.6c1.5,0,2.4,0.8,2.4,1.8
						c0,0.8-0.5,1.5-1.3,1.7l0,0c0.9,0.1,1.6,0.8,1.6,1.7c0,1.3-1.1,2.2-2.9,2.2c-0.7,0-1.5-0.1-2.1-0.5L337.5,508.1z"/>
						<path class="st5" d="M343.6,502.4h1.6v2.8h2v-2.8h1.6l0.1,7.2h-1.6v-3h-2v3h-1.6L343.6,502.4z"/>
					</g>
					<g class="property__active" ng-class="nvtGammaDos.inmovablesClassList[31]" ng-click="nvtGammaDos.setLeadProperty(nvtGammaDos.inmovablesData.inmovables[31])">
						<polygon id="h-l14" class="property nvt-sprite-2" points="308.3,604.5 308.4,421.9 245.5,421.9 245.6,604.5"/>
						<text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 248.9491 496.775)" class="st1 futura-book st3">40.70</text>
						<text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 269.6198 601.2051)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 269.6198 427.985)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 263.3893 518.9545)" class="st1 futura-book st4">569.80 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 286.9415 515.9489)" class="st1 futura-book st4">2</text>
						<path class="st5" d="M263.2,496.6l-0.1-7.5h2l1.6,2.7c0.5,0.8,0.9,1.7,1.3,2.5l0,0c-0.1-1-0.2-2.1-0.2-3.1v-2.2h1.6l0.1,7.5h-1.8
						l-1.6-2.9c-0.5-0.8-0.9-1.7-1.3-2.6l0,0c0.1,1,0.1,2,0.1,3.3v2.2L263.2,496.6z"/>
						<path class="st5" d="M272.6,494.5l-0.5,1.9h-1.7l2.2-7.5h2.2l2.4,7.4h-1.8l-0.6-1.9L272.6,494.5z M274.4,493.3l-0.5-1.6
						c-0.1-0.4-0.3-1-0.4-1.4l0,0c-0.1,0.4-0.2,1-0.3,1.4l-0.4,1.6L274.4,493.3z"/>
						<path class="st5" d="M279.2,496.4l-2.5-7.4h1.9l0.9,3.1c0.3,0.9,0.5,1.7,0.7,2.7l0,0c0.2-0.9,0.4-1.8,0.6-2.6l0.9-3.2h1.8
						l-2.4,7.5L279.2,496.4z"/>
						<path class="st5" d="M288.9,493.1h-2.7v1.8h3.1v1.4l-4.8,0.1l-0.1-7.5h4.6v1.4h-2.9v1.5h2.8L288.9,493.1z"/>
						<path class="st5" d="M270.4,504.1L270.4,504.1l-1.4,0.7l-0.3-1.3l1.9-0.9h1.4l0.1,7.2h-1.6L270.4,504.1z"/>
						<path class="st5" d="M277.5,509.7V508h-3.2v-1.1l2.7-4.4h2.1v4.2h0.9v1.3H279v1.7L277.5,509.7z M277.5,506.7v-1.6
						c0-0.4,0-0.9,0-1.3l0,0c-0.2,0.5-0.4,0.9-0.7,1.4l-0.9,1.6l0,0H277.5z"/>
						<path class="st5" d="M280.8,502.4h1.6v2.8h2v-2.8h1.6l0.1,7.2h-1.6v-3h-2v3h-1.7L280.8,502.4z"/>
					</g>
					<g class="property__active" ng-class="nvtGammaDos.inmovablesClassList[32]" ng-click="nvtGammaDos.setLeadProperty(nvtGammaDos.inmovablesData.inmovables[32])">
						<polygon id="h-l15" class="property nvt-sprite-1" points="245.6,604.5 245.5,421.9 182.8,421.9 182.8,604.5"/>
						<text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 186.1873 496.775)" class="st1 futura-book st3">40.70</text>
						<text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 206.8598 601.2051)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 206.8598 427.985)" class="st1 futura-book st3">14.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 200.6396 518.9545)" class="st1 futura-book st4">569.80 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 224.1917 515.9484)" class="st1 futura-book st4">2</text>
						<path class="st5" d="M200.5,496.6l-0.1-7.5h2l1.6,2.7c0.5,0.8,0.9,1.7,1.3,2.5l0,0c-0.1-1-0.2-2.1-0.2-3.1v-2.2h1.6l0.1,7.5h-1.8
						l-1.6-2.9c-0.5-0.8-0.9-1.7-1.3-2.6l0,0c0.1,1,0.1,2,0.1,3.3v2.2L200.5,496.6z"/>
						<path class="st5" d="M209.8,494.5l-0.5,1.9h-1.7l2.2-7.5h2.2l2.4,7.4h-1.8l-0.6-1.9L209.8,494.5z M211.7,493.3l-0.5-1.6
						c-0.1-0.4-0.3-1-0.4-1.4l0,0c-0.1,0.4-0.2,1-0.3,1.4l-0.4,1.6L211.7,493.3z"/>
						<path class="st5" d="M216.5,496.4l-2.5-7.4h1.9l0.9,3.1c0.3,0.9,0.5,1.7,0.7,2.7l0,0c0.2-0.9,0.4-1.8,0.6-2.6l0.9-3.2h1.8
						l-2.4,7.5L216.5,496.4z"/>
						<path class="st5" d="M226.1,493.1h-2.7v1.8h3.1v1.4l-4.8,0.1l-0.1-7.5h4.6v1.4h-2.9v1.5h2.7L226.1,493.1z"/>
						<path class="st5" d="M207.7,504.1L207.7,504.1l-1.4,0.7l-0.3-1.3l1.9-0.9h1.4l0.1,7.2h-1.6L207.7,504.1z"/>
						<path class="st5" d="M216.5,503.8h-2.8l-0.1,1.1h0.5c0.7,0,1.3,0.1,1.9,0.5c0.6,0.4,0.9,1.1,0.9,1.8c0,1.3-1.1,2.5-3.1,2.5
						c-0.7,0-1.4-0.1-2-0.4l0.3-1.3c0.5,0.2,1.1,0.3,1.6,0.3c0.7,0,1.4-0.4,1.4-1.1s-0.6-1.2-2-1.2c-0.3,0-0.7,0-1,0.1l0.4-3.8h4
						L216.5,503.8z"/>
						<path class="st5" d="M218,502.4h1.6v2.8h2v-2.8h1.6l0.1,7.2h-1.6v-3h-2v3h-1.6L218,502.4z"/>
					</g>
					<g class="property__active" ng-class="nvtGammaDos.inmovablesClassList[33]" ng-click="nvtGammaDos.setLeadProperty(nvtGammaDos.inmovablesData.inmovables[33])">
						<polygon id="h-l16" class="property nvt-sprite-2" points="182.7,604.5 182.8,421.9 110.1,421.9 110.2,604.5"/>
						<text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 113.369 496.775)" class="st1 futura-book st3">40.70</text>
						<text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 138.8898 601.2051)" class="st1 futura-book st3">16.22</text>
						<text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 138.8898 427.985)" class="st1 futura-book st3">16.22</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 132.6596 518.9546)" class="st1 futura-book st4">660.15 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 156.2118 515.9484)" class="st1 futura-book st4">2</text>
						<path class="st5" d="M132.5,496.6l-0.1-7.5h2l1.6,2.7c0.5,0.8,0.9,1.7,1.2,2.5l0,0c-0.1-1-0.2-2.1-0.2-3.1v-2.2h1.5l0.1,7.5h-1.8
						l-1.6-2.9c-0.5-0.8-0.9-1.7-1.3-2.6l0,0c0.1,1,0.1,2,0.1,3.3v2.2L132.5,496.6z"/>
						<path class="st5" d="M141.8,494.5l-0.5,1.9h-1.7l2.2-7.5h2.2l2.4,7.4h-1.8l-0.6-1.9L141.8,494.5z M143.7,493.3l-0.5-1.6
						c-0.1-0.4-0.3-1-0.4-1.4l0,0c-0.1,0.4-0.2,1-0.3,1.4l-0.4,1.6L143.7,493.3z"/>
						<path class="st5" d="M148.5,496.4l-2.5-7.4h1.8l0.9,3.1c0.3,0.9,0.5,1.7,0.7,2.7l0,0c0.2-0.9,0.4-1.8,0.7-2.6l0.9-3.2h1.8
						l-2.4,7.5L148.5,496.4z"/>
						<path class="st5" d="M158.2,493.1h-2.8v1.8h3.1v1.4l-4.7,0l-0.1-7.5h4.6v1.4h-2.9v1.5h2.7L158.2,493.1z"/>
						<path class="st5" d="M139.7,504.1L139.7,504.1l-1.4,0.7l-0.3-1.3l1.9-0.9h1.4l0.1,7.2h-1.6L139.7,504.1z"/>
						<path class="st5" d="M148.3,503.7c-0.2,0-0.4,0-0.7,0c-1.1,0-2.1,0.7-2.3,1.7l0,0c0.4-0.4,1-0.6,1.5-0.6c1.2,0,2.2,0.9,2.3,2.1
						c0,0.1,0,0.2,0,0.2c0,1.4-1.1,2.6-2.5,2.6c0,0-0.1,0-0.1,0c-1.9,0-2.9-1.4-2.9-3.1c-0.2-2.2,1.5-4.1,3.7-4.3c0.1,0,0.2,0,0.3,0
						c0.2,0,0.4,0,0.7,0L148.3,503.7z M147.4,507.3c0.1-0.6-0.4-1.1-1-1.2c0,0-0.1,0-0.1,0c-0.4,0-0.8,0.2-1,0.6
						c-0.1,0.1-0.1,0.3-0.1,0.4c0,0.8,0.4,1.4,1.2,1.4C147,508.6,147.4,508,147.4,507.3L147.4,507.3z"/>
						<path class="st5" d="M150.1,502.4h1.6v2.8h2v-2.8h1.6l0,7.2h-1.6v-3h-2v3h-1.6L150.1,502.4z"/>
					</g>
					<g class="property__active" ng-class="nvtGammaDos.inmovablesClassList[34]" ng-click="nvtGammaDos.setLeadProperty(nvtGammaDos.inmovablesData.inmovables[34])">
						<polygon id="h-l17" class="property nvt-sprite-1" points="110.2,604.5 110.1,421.9 37.4,421.9 37.4,604.5"/>
						<text transform="matrix(2.321083e-02 0.9997 -0.9997 2.321083e-02 39.9784 496.775)" class="st1 futura-book st3">40.70</text>
						<text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 66.1898 601.2051)" class="st1 futura-book st3">16.22</text>
						<text transform="matrix(0.9999 1.692889e-02 -1.692889e-02 0.9999 66.1898 427.985)" class="st1 futura-book st3">16.22</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 59.9694 518.9544)" class="st1 futura-book st4">660.15 m</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 83.5216 515.9487)" class="st1 futura-book st4">2</text>
						<path class="st5" d="M59.8,496.6l-0.1-7.5h2l1.6,2.7c0.5,0.8,0.9,1.7,1.2,2.5l0,0c-0.1-1-0.2-2.1-0.2-3.1v-2.2h1.5l0.1,7.5h-1.8
						l-1.6-2.9c-0.5-0.8-0.9-1.7-1.3-2.6h0c0.1,1,0.1,2,0.1,3.3v2.3L59.8,496.6z"/>
						<path class="st5" d="M69.1,494.5l-0.5,1.9h-1.7l2.2-7.5h2.2l2.4,7.4h-1.8l-0.6-1.9L69.1,494.5z M71,493.3l-0.5-1.6
						c-0.1-0.4-0.3-1-0.4-1.4l0,0c-0.1,0.4-0.2,1-0.3,1.4l-0.5,1.6L71,493.3z"/>
						<path class="st5" d="M75.8,496.4l-2.4-7.4h1.8l1,3.1c0.3,0.9,0.5,1.7,0.7,2.6l0,0c0.2-0.9,0.4-1.8,0.7-2.6l0.9-3.2h1.8l-2.4,7.5
						L75.8,496.4z"/>
						<path class="st5" d="M85.5,493.1h-2.8v1.8h3.1v1.4l-4.7,0.1l-0.1-7.5h4.6v1.4h-2.9v1.5h2.7L85.5,493.1z"/>
						<path class="st5" d="M67,504.1L67,504.1l-1.4,0.7l-0.3-1.3l1.9-0.9h1.4l0.1,7.2h-1.6L67,504.1z"/>
						<path class="st5" d="M76.1,502.5v1.1l-2.9,6.2h-1.8l2.9-5.8l0,0h-3.3v-1.4L76.1,502.5z"/>
						<path class="st5" d="M77.4,502.4H79v2.8h2v-2.8h1.6l0.1,7.2H81v-3h-2v3h-1.6L77.4,502.4z"/>
						
						<rect x="50.2" y="489.5" transform="matrix(0.6925 -0.7214 0.7214 0.6925 -338.9555 189.806)" class="st8" width="6" height="6"/>
						<polygon class="st8" points="53.3,496.8 53.2,492.6 53.1,488.3 57.4,492.4"/>
					</g>
					</g>
				</g>
			</svg>

		</div>
	</div>

	<div class="modal-dialog" ng-class="nvtGammaDos.dialogDisplay">
		<div class="backdrop-dialog" ng-click="nvtGammaDos.closeDialog()"></div>
		<div class="container-dialog p-20">
			<div class="toolbar-dialog blue-txt">
				Asosiar Lote
				<span ng-click="nvtGammaDos.closeDialog()">
					<img class="btn-close-dialog mt-4" src="media/assets/img/icons/close.svg">
				</span>
			</div>
			<div class="content-dialog">
				<p>{{nvtGammaDos.propertyData.reference}}</p>
				<ul class="saufth-collapsable">
					<li ng-repeat="user in nvtGammaDos.activeUsers" ng-if="user.idProfile > 1">
						<div class="saufth-collapsable-header" ng-click="nvtGammaDos.selectUser(lead.idLead, $index)" ng-class="nvtGammaDos.activeUsers[$index].collapsableHeaderClass">
							<div style="display:flex;"><i class="material-icons pr-15">account_circle</i>{{user.name + ' ' + user.last_name}}</div>
							<div class="py-5 pl-15"></div>
							<div class="saufth-badge blue-bg light-txt ml-15">{{user.leads.length}}</div>
						</div>
						<ul class="saufth-collapsable-body" ng-class="nvtGammaDos.activeUsers[$index].collapsableBodyClass">
							<li class="saufth-collapsable-body-li" ng-repeat="lead in user.leads">
								<div class="saufth-collapsable-item-h" ng-click="nvtGammaDos.selectLeadPropertyStatus(lead.idUser, lead.idLead, lead.name, lead.last_name)">
									<i class="material-icons px-15">assignment_ind</i>{{lead.name + ' ' + lead.last_name}}
								</div>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="modal-dialog" ng-class="nvtGammaDos.dialogStatusDisplay">
		<div class="backdrop-dialog" ng-click="nvtGammaDos.closeDialogStatus()"></div>
		<div class="container-dialog p-20 status-dialog">
			<div class="toolbar-dialog blue-txt">
				Asosiar Lote
				<span ng-click="nvtGammaDos.closeDialogStatus()">
					<img class="btn-close-dialog mt-4" src="media/assets/img/icons/close.svg">
				</span>
			</div>
			<div class="content-dialog">
				<p>{{nvtGammaDos.propertyData.reference}}</p>
				<ul class="saufth-collapsable w100">
					<li>
						<div class="saufth-collapsable-header" ng-click="nvtGammaDos.setStatus(1)"><div class="color-block pb-property-active-bg mr-15"></div>Disponible</div>
					</li>
					<li>
						<div class="saufth-collapsable-header" ng-click="nvtGammaDos.setStatus(6)"><div class="color-block darkgray__bg mr-15"></div>Estratégico</div>
					</li>
					<li>
						<div class="saufth-collapsable-header" ng-click="nvtGammaDos.setStatus(2)"><div class="color-block pb_lightred-bg mr-15"></div>En espera</div>
					</li>
					<li>
						<div class="saufth-collapsable-header" ng-click="nvtGammaDos.setStatus(3)"><div class="color-block brown mr-15"></div>Apartado</div>
					</li>
					<li>
						<div class="saufth-collapsable-header" ng-click="nvtGammaDos.setStatus(4)"><div class="color-block mustard-bg mr-15"></div>Enganchado</div>
					</li>
					<li>
						<div class="saufth-collapsable-header" ng-click="nvtGammaDos.setStatus(5)"><div class="color-block pb_teal-bg mr-15"></div>Vendido</div>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="modal-dialog white" ng-class="rootInmovables.options.modal_display">

		<div class="pl-16 dark__bg" layout="row">
			<div layout="row" layout-align="start center" flex="80">
				<span class="light-txt">Gamma II Business Park</span>
			</div>
			<div layout="row" layout-align="end center" flex="20">
				<md-button ng-click="nvtGammaDos.closeList()" class="md-icon-button" aria-label="Cerrar">
					<md-icon style="color: white;" md-svg-src="media/assets/img/icons/app/close.svg"></md-icon>
				</md-button>
			</div>
		</div>

		<div layout-padding>
			<div>
				<div class="border-box--blue border-r4 overflow-h">
					<div layout="row" class="bluegray-light2-bg border-box--blue-b px-16 py-10">
	
						<div layout="row" layout-align="start center" flex="50">
							Espacio para filtros
						</div>
						
						<div class="dark__text fs__10px proxima-soft-light ml-24" layout="row" layout-align="end center" flex="50">
							{{nvtGammaDos.inmovablesData.inmovables.length}} propiedades
						</div>

					</div>

					<div class="overflow-x-s overflow-y-s">
						<div class="h100v-140" style="width: 5120px;">

							<div class="border-box--blue-b px-24 py-10">
								<div layout="row" layout-align="start center" class="dark__text fs__14px proxima-soft-semibold">

									<div class="overflow-h pr-5" style="width:1.92%">#</div>
									<div class="overflow-h px-5" style="width:1.92%">Modulo</div>
									<div class="overflow-h px-5" style="width:1.92%">Estado</div>
									<div class="overflow-h px-5" style="width:1.92%">Área</div>
									<div class="overflow-h px-5" style="width:1.92%">Tipo</div>

									<div class="overflow-h px-5" style="width:3.84%">Precio M&sup2;</div>
									<div class="overflow-h px-5" style="width:3.84%">Precio de propiedad</div>
									<div class="overflow-h px-5" style="width:1.92%">% de enganche</div>
									<div class="overflow-h px-5" style="width:3.84%">Enganche</div>
									<div class="overflow-h px-5" style="width:3.84%">Financiamiento</div>

									<div class="overflow-h px-5" style="width:1.92%">% aumento precio M&sup2;</div>
									<div class="overflow-h px-5" style="width:3.84%">Aumento precio M&sup2;</div>
									<div class="overflow-h px-5" style="width:3.84%">Precio M&sup2; con aumento</div>
									<div class="overflow-h px-5" style="width:3.84%">Precio de propiedad con aumento</div>
									<div class="overflow-h px-5" style="width:3.84%">Enganche con precio aumentado</div>
									<div class="overflow-h px-5" style="width:3.84%">Financiamiento con precio aumentado</div>

									<div class="overflow-h px-5" style="width:1.92%">% descuento precio M&sup2;</div>
									<div class="overflow-h px-5" style="width:3.84%">Descuento precio M&sup2;</div>
									<div class="overflow-h px-5" style="width:3.84%">Precio M&sup2; con descuento</div>
									<div class="overflow-h px-5" style="width:3.84%">Precio de propiedad con descuento</div>
									<div class="overflow-h px-5" style="width:3.84%">Enganche con precio descuento</div>
									<div class="overflow-h px-5" style="width:3.84%">Financiamiento con precio descuento</div>

									<div class="overflow-h px-5" style="width:3.84%">Precio M&sup2; final</div>
									<div class="overflow-h px-5" style="width:3.84%">Precio de propiedad final</div>
									<div class="overflow-h px-5" style="width:3.84%">Enganche final</div>
									<div class="overflow-h px-5" style="width:3.84%">Financiamiento final</div>

									<div class="overflow-h px-5" style="width:1.92%">% desc. enganche</div>
									<div class="overflow-h px-5" style="width:3.84%">Desc. enganche</div>
									<div class="overflow-h px-5" style="width:3.84%">Enganche final con descuento</div>
									<div class="overflow-h px-5" style="width:3.84%">Importe</div>

									<div class="overflow-h pl-5 center-align" style="width:1.92%">&#8942;</div>

								</div>
							</div>

							<div class="trow border-box--blue-b px-24 py-10" ng-repeat="property in nvtGammaDos.inmovablesData.inmovables">
								<div layout="row" layout-align="start center" class="dark__text fs__14px proxima-soft-regular">

									<div class="overflow-h pr-5" style="width:1.92%">{{property.number}}</div>
									<div class="overflow-h px-5" style="width:1.92%">{{property.idModule}}</div>
									<div class="overflow-h px-5" style="width:1.92%">{{nvtGammaDos.propertyStatus[property.idPropertyStatus]}}</div>
									<div class="overflow-h px-5" style="width:1.92%">{{property.area}} M&sup2;</div>
									<div class="overflow-h px-5" style="width:1.92%">{{property.type}}</div>

									<div class="overflow-h px-5" style="width:3.84%">${{property.cost.m2.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MXN</div>
									<div class="overflow-h px-5" style="width:3.84%">${{property.cost.property.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MXN</div>
									<div class="overflow-h px-5" style="width:1.92%">{{property.hook.value*100}}%</div>
									<div class="overflow-h px-5" style="width:3.84%">${{property.hook.base.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MXN</div>
									<div class="overflow-h px-5" style="width:3.84%">${{property.financing.total.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MXN</div>

									<div class="overflow-h px-5" style="width:1.92%">{{(property.cost_m2_increase.value*100).toFixed(2)}}%</div>
									<div class="overflow-h px-5" style="width:3.84%">${{property.cost_m2_increase.increased.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MXN</div>
									<div class="overflow-h px-5" style="width:3.84%">${{property.cost_m2_increase.total_increased.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MXN</div>
									<div class="overflow-h px-5" style="width:3.84%">${{property.cost_m2_increase.property_cost.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MXN</div>
									<div class="overflow-h px-5" style="width:3.84%">${{property.hook.increased.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MXN</div>
									<div class="overflow-h px-5" style="width:3.84%">${{property.financing.increased.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MXN</div>

									<div class="overflow-h px-5" style="width:1.92%">{{property.cost_m2_discount.value*100}}%</div>
									<div class="overflow-h px-5" style="width:3.84%">${{property.cost_m2_discount.discounted.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MXN</div>
									<div class="overflow-h px-5" style="width:3.84%">${{property.cost_m2_discount.total_discounted.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MXN</div>
									<div class="overflow-h px-5" style="width:3.84%">${{property.cost_m2_discount.property_cost.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MXN</div>
									<div class="overflow-h px-5" style="width:3.84%">${{property.hook.decreased.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MXN</div>
									<div class="overflow-h px-5" style="width:3.84%">${{property.financing.decreased.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MXN</div>

									<div class="overflow-h px-5" style="width:3.84%">${{property.cost.final.m2.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MXN</div>
									<div class="overflow-h px-5" style="width:3.84%">${{property.cost.final.property.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MXN</div>
									<div class="overflow-h px-5" style="width:3.84%">${{property.hook.total.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MXN</div>
									<div class="overflow-h px-5" style="width:3.84%">${{property.financing.final.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MXN</div>

									<div class="overflow-h px-5" style="width:1.92%">{{property.hook_discount.value*100}}%</div>
									<div class="overflow-h px-5" style="width:3.84%">${{property.hook.discounted.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MXN</div>
									<div class="overflow-h px-5" style="width:3.84%">${{property.hook.final.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MXN</div>
									<div class="overflow-h px-5" style="width:3.84%">${{property.import.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MXN</div>

									<div class="overflow-h pl-5 center-align" style="width:1.92%">
										<md-menu md-offset="-50 0" ng-controller="ContactMenuCtrl as contactCtrl">
                                                
											<button class="btn-floating no__shadow transparent__bg" ng-click="contactCtrl.openMenu($mdMenu, $event)">
												<i class="material-icons black-text">more_vert</i>
											</button>
	
											<md-menu-content>

												<md-menu-item>
													<md-button ng-click="nvtGammaDos.openEditPropertyWindow(property)">
														Editar
													</md-button>
												</md-menu-item>

												<md-menu-divider></md-menu-divider>

												<md-menu-item>
													<md-button>
														Cerrar menu
													</md-button>
												</md-menu-item>

											</md-menu-content>

										</md-menu>
									</div>

								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>

	</div>

	<div class="modal-dialog white" ng-class="rootInmovables.edit.view">

		<div class="pl-16 dark__bg" layout="row">
			<div layout="row" layout-align="start center" flex="80">
				<span class="light-txt">Aumento estratégico</span>
			</div>
			<div layout="row" layout-align="end center" flex="20">
				<md-button ng-click="nvtGammaDos.hideEditPropertyWindow()" class="md-icon-button" aria-label="Cerrar">
					<md-icon style="color: white;" md-svg-src="media/assets/img/icons/app/close.svg"></md-icon>
				</md-button>
			</div>
		</div>

		<div layout-padding>
			<div>

				<div class="w100" layout-xs="column" layout-gt-xs="row" layout-align="start center">

					<div layout="row" class="w100 px-10 pb-40">

                        <md-input-container class="w100">

							<label>Aumento a precio</label>

                            <md-select name="updateIncrease" ng-model="rootInmovables.edit.models.idPromoIncrease" ng-change="nvtGammaDos.updateIncrease(rootInmovables.selected.id, rootInmovables.edit.models.idPromoIncrease, rootInmovables.selected.idPromoIncrease, rootInmovables.selected.valuePromoIncrease, 3)" required>

								<md-option ng-value="0">Ninguno</md-option>

                                <md-option ng-value="6">5% Aumento estratégico</md-option>
                                <md-option ng-value="7">7% Aumento estratégico</md-option>
								<md-option ng-value="8">10% Aumento estratégico</md-option>

							</md-select>

						</md-input-container>

					</div>

					<form layout="row" name="updateDiscountForm" class="w100 px-10 pb-40">

                        <md-input-container class="w100">

							<label>Descuento a precio</label>

                            <md-select name="updateDiscount" ng-model="rootInmovables.edit.models.idPromoDiscount" ng-change="nvtGammaDos.updateIncrease(rootInmovables.selected.id, rootInmovables.edit.models.idPromoDiscount, rootInmovables.selected.idPromoDiscount, rootInmovables.selected.valuePromoDiscount, 1)" required>

								<md-option ng-value="0">Ninguno</md-option>

                                <md-option ng-value="10">5% Descuento por lanzamiento</md-option>
                                <md-option ng-value="9">20% Descuento por lanzamiento</md-option>
                                <md-option ng-value="1">25% Descuento por lanzamiento</md-option>
								<md-option ng-value="11">26% Descuento por lanzamiento</md-option>
								<md-option ng-value="12">27% Descuento por lanzamiento</md-option>
								<md-option ng-value="13">27.5% Descuento por lanzamiento</md-option>
								<md-option ng-value="14">28% Descuento por lanzamiento</md-option>
								<md-option ng-value="15">28.5% Descuento por lanzamiento</md-option>
								<md-option ng-value="16">30% Descuento por pago de contado</md-option>
								<md-option ng-value="2">30% Descuento por lanzamiento</md-option>
								<md-option ng-value="17">31.5% Descuento por lanzamiento</md-option>

							</md-select>

						</md-input-container>

					</form>

				</div>

				<div class="w100" layout-xs="column" layout-gt-xs="row" layout-align="start center">

					<form layout="row" name="updateHookForm" class="w100 px-10 pb-40">
                        <md-input-container class="w100">

							<label>Enganche</label>

                            <md-select name="updateHook" ng-model="rootInmovables.edit.models.idPromoHook" ng-change="nvtGammaDos.updateIncrease(rootInmovables.selected.id, rootInmovables.edit.models.idPromoHook, rootInmovables.selected.idPromoHook, rootInmovables.selected.valuePromoHook, 4)" required>

                                <md-option ng-value="5">10% Enganche para terrenos</md-option>
								<md-option ng-value="4">30% Enganche para Naves</md-option>

							</md-select>

						</md-input-container>

					</form>

					<form layout="row" name="updateHookForm" class="w100 px-10 pb-40">

                        <md-input-container class="w100">

							<label>Descuento a enganche</label>

                            <md-select name="updateHook" ng-model="rootInmovables.edit.models.idPromoHookDiscount" ng-change="nvtGammaDos.updateIncrease(rootInmovables.selected.id, rootInmovables.edit.models.idPromoHookDiscount, rootInmovables.selected.idPromoHookDiscount, rootInmovables.selected.valuePromoHookDiscount, 2)" required>

								<md-option ng-value="0">Ninguno</md-option>

								<md-option ng-value="3">10% Descuento sobre monto de enganche</md-option>

							</md-select>

						</md-input-container>

					</form>

				</div>

			</div>
		</div>
	</div>

</body>
</html>