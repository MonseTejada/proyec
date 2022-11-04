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
	<link rel="stylesheet" type="text/css" href="media/assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="media/assets/css/quote.css">
	<link rel="stylesheet" type="text/css" href="media/assets/css/helpers.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<script type="text/javascript" src="media/bower_components/jquery.min.js"></script>
	<script type="text/javascript" src="media/bower_components/materialize/js/materialize.min.js"></script>

</head>

<body ng-controller="VLCedroCtrl as cedro">

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

	<div class="modal__panel" ng-class="cedro.cedroListDialogDisplay">
		<div class="container__panel">
			<div class="toolbar__panel blue-txt">
				<p>Cedro - Lotes</p>
				<span class="close__panel" ng-click="cedro.closeCedroListDialog()"><i class="material-icons" style="margin:0;">close</i></span>
			</div>
			<div class="content__panel">
				<ul class="saufth-collapsable">
					<li ng-repeat="property in cedro.inmovablesData.inmovables" ng-if="property.idCondominium === 4">
						<div class="collapsable__header" ng-click="">
							<div>
								<p class="futura-book collapsable__heading" style="margin: 0;">Lote {{property.number}}</p>
								<p class="collapsable__text" style="margin: 0;">{{property.condominium}}</p>
							</div>
							<div class="pl-40">
								<p class="collapsable__heading" style="margin: 0;">{{property.type}}</p>
								<p class="collapsable__text" style="margin: 0;">{{property.area}} M&sup2;</p>
							</div>
							<div flex></div>
							<div class="blue-pb00__bg">
								<div class="p-20 pointer" class="property__active" ng-class="cedro.inmovablesClassList[$index]" ng-click="cedro.setLeadProperty(cedro.inmovablesData.inmovables[$index])"></div>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="modal-dialog" ng-class="cedro.dialogDisplay">
		<div class="backdrop-dialog" ng-click="cedro.closeDialog()"></div>
		<div class="container-dialog p-20">
			<div class="toolbar-dialog blue-txt">
				Asosiar Lote
				<span ng-click="cedro.closeDialog()">
					<img class="btn-close-dialog mt-4" src="media/assets/img/icons/close.svg">
				</span>
			</div>
			<div class="content-dialog">
				<p>{{cedro.propertyData.reference}}</p>
				<ul class="saufth-collapsable">
					<li ng-repeat="user in cedro.activeUsers" ng-if="user.idProfile > 1">
						<div class="saufth-collapsable-header" ng-click="cedro.selectUser(lead.idLead, $index)" ng-class="cedro.activeUsers[$index].collapsableHeaderClass">
							<div style="display:flex;"><i class="material-icons pr-15">account_circle</i>{{user.name + ' ' + user.last_name}}</div>
							<div class="py-5 pl-15"></div>
							<div class="saufth-badge blue-bg light-txt ml-15">{{user.leads.length}}</div>
						</div>
						<ul class="saufth-collapsable-body" ng-class="cedro.activeUsers[$index].collapsableBodyClass">
							<li class="saufth-collapsable-body-li" ng-repeat="lead in user.leads">
								<div class="saufth-collapsable-item-h" ng-click="cedro.selectLeadPropertyStatus(lead.idUser, lead.idLead)">
									<i class="material-icons px-15">assignment_ind</i>{{lead.name + ' ' + lead.last_name}}
								</div>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="modal-dialog" ng-class="cedro.dialogStatusDisplay">
		<div class="backdrop-dialog" ng-click="cedro.closeDialogStatus()"></div>
		<div class="container-dialog p-20 status-dialog">
			<div class="toolbar-dialog blue-txt">
				Asosiar Lote
				<span ng-click="cedro.closeDialogStatus()">
					<img class="btn-close-dialog mt-4" src="media/assets/img/icons/close.svg">
				</span>
			</div>
			<div class="content-dialog">
				<p>{{cedro.propertyData.reference}}</p>
				<ul class="saufth-collapsable w100">
					<li>
						<div class="saufth-collapsable-header" ng-click="cedro.setStatus(1)"><div class="color-block pb-property-active-bg mr-15"></div>Disponible</div>
					</li>
					<li>
						<div class="saufth-collapsable-header" ng-click="cedro.setStatus(6)"><div class="color-block darkgray__bg mr-15"></div>Estratégico</div>
					</li>
					<li>
						<div class="saufth-collapsable-header" ng-click="cedro.setStatus(2)"><div class="color-block pb_lightred-bg mr-15"></div>En espera</div>
					</li>
					<li>
						<div class="saufth-collapsable-header" ng-click="cedro.setStatus(3)"><div class="color-block brown mr-15"></div>Apartado</div>
					</li>
					<li>
						<div class="saufth-collapsable-header" ng-click="cedro.setStatus(4)"><div class="color-block mustard-bg mr-15"></div>Enganchado</div>
					</li>
					<li>
						<div class="saufth-collapsable-header" ng-click="cedro.setStatus(5)"><div class="color-block pb_teal-bg mr-15"></div>Vendido</div>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="plano_container">

		<div class="container mt-64">
			<div class="row portto_blanco-quote-header">
				<div class="col s12">
					<h1 class="center-align">CLUSTER CEDRO</h1>
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
				<button class="btn-flat right"><i style="font-size:30px;" class="material-icons" ng-click="cedro.showInmovablesList()">list</i></button>
			</div>
		</div>

		<svg class="quote__map" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
			viewBox="0 0 1366 811" style="enable-background:new 0 0 1366 811;" xml:space="preserve">
			<style type="text/css">
				.st1{fill:#FFFFFF;}
				.st3{font-size:11.18px;}
				.st4{font-size:10.28px;}
				.st5{fill:#E9E439;}
				.st7{font-size:20.55px;}
				.st8{fill:#CB6120;}
				.st9{opacity:0.75;fill:#CB6120;enable-background:new;}
				.st11{font-size:11.54px;}
				.st12{fill:none;stroke:#FFFFFF;stroke-width:1.62;stroke-miterlimit:10;}
				.st13{font-size:13.1526px;}
				.st14{font-size:10.61px;}
				.st15{font-size:21.21px;}
			</style>
			<image style="overflow:visible;" width="1366" height="811" xlink:href="media/assets/img/habitta/veredas-lira/app/quote/etapa_1/cedro.jpg"></image>
			<g>
				<g>
					<g class="property__active" ng-class="cedro.inmovablesClassList[0]" ng-click="cedro.setLeadProperty(cedro.inmovablesData.inmovables[0])">
						<path class="property vl-sprite-1" d="M354.2,16.9c0,0,1,26-1.1,43.3c-3.2,26.7-13.5,38.4-14.2,39.2l-2.3,77.7l64.5,0.1L405.8,17 L354.2,16.9z"/>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 331.1 163.4547)" class="st1 futura-light st3">17.22</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 378.1387 121.2247)" class="st1 futura-light st4">144.25 m2</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 366.3092 111.4946)" class="st5 futura-book st7">01</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 397.7 108.8151)" class="st1 futura-light st3">20.00</text>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 362.8498 27.754)" class="st1 futura-light st3">07.50</text>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 355.5296 174.4839)" class="st1 futura-light st3">07.50</text>
						<polygon class="st8" points="367.8,128.6 359.6,136.4 351.9,128.1 351.9,128.1"/>
						<polygon class="st9" points="367.8,128.6 351.9,128.1 360.1,120.4"/>
					</g>
					<g class="property__active" ng-class="cedro.inmovablesClassList[1]" ng-click="cedro.setLeadProperty(cedro.inmovablesData.inmovables[1])">
						<polygon class="property vl-sprite-2" points="405.8,17 401.1,177.1 464.3,177.2 468.2,17.1"/>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 441.5594 121.2251)" class="st1 futura-light st4">150.00 m2</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 429.7289 111.495)" class="st5 futura-book st7">02</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 455.89 108.8151)" class="st1 futura-light st3">20.00</text>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 423.7498 27.7539)" class="st1 futura-light st3">07.50</text>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 418.9497 174.4738)" class="st1 futura-light st3">07.50</text>
					</g>
					<g class="property__active" ng-class="cedro.inmovablesClassList[2]" ng-click="cedro.setLeadProperty(cedro.inmovablesData.inmovables[2])">
						<polygon class="property vl-sprite-1" points="468.2,17.1 464.3,177.2 528.3,177.3 531.9,17.1"/>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 484.9198 174.4737)" class="st1 futura-light st3">07.50</text>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 483.4598 27.754)" class="st1 futura-light st3">07.50</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 507.5388 121.2247)" class="st1 futura-light st4">150.00 m2</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 495.6989 111.4945)" class="st5 futura-book st7">03</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 521.86 108.8151)" class="st1 futura-light st3">20.00</text>
					</g>
					<g class="property__active" ng-class="cedro.inmovablesClassList[3]" ng-click="cedro.setLeadProperty(cedro.inmovablesData.inmovables[3])">
						<polygon class="property vl-sprite-2" points="531.9,17.1 528.3,177.3 591.6,177.3 593.7,17.2"/>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 547.8297 174.474)" class="st1 futura-light st3">07.50</text>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 547.8395 27.7542)" class="st1 futura-light st3">07.50</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 570.4492 121.2249)" class="st1 futura-light st4">150.00 m2</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 558.6191 111.4958)" class="st5 futura-book st7">04</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 584.78 108.8151)" class="st1 futura-light st3">20.00</text>
					</g>
					<g class="property__active" ng-class="cedro.inmovablesClassList[4]" ng-click="cedro.setLeadProperty(cedro.inmovablesData.inmovables[4])">
						<polygon class="property vl-sprite-1" points="593.7,17 591.6,177.1 655.8,177.2 655.8,17"/>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 611.4998 174.2236)" class="st1 futura-light st3">07.50</text>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 609.3098 27.5037)" class="st1 futura-light st3">07.50</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 634.1189 120.9749)" class="st1 futura-light st4">150.00 m2</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 622.2888 111.2448)" class="st5 futura-book st7">05</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 648.45 108.5651)" class="st1 futura-light st3">20.00</text>
					</g>
					<g class="property__active" ng-class="cedro.inmovablesClassList[5]" ng-click="cedro.setLeadProperty(cedro.inmovablesData.inmovables[5])">
						<polygon class="property vl-sprite-2" points="655.8,17.3 655.8,177.4 719.1,177.5 719.1,17.4"/>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 675.4596 174.4741)" class="st1 futura-light st3">07.50</text>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 675.1096 27.754)" class="st1 futura-light st3">07.50</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 698.4389 121.2265)" class="st1 futura-light st4">150.00 m2</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 686.6089 111.4944)" class="st5 futura-book st7">06</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 712.77 108.8151)" class="st1 futura-light st3">20.00</text>
					</g>
					<g class="property__active" ng-class="cedro.inmovablesClassList[6]" ng-click="cedro.setLeadProperty(cedro.inmovablesData.inmovables[6])">
						<polygon class="property vl-sprite-1" points="719.1,17.4 719.1,177.5 782,177.5 780.3,17.5"/>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 739.7695 174.4838)" class="st1 futura-light st3">07.50</text>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 737.2689 27.7544)" class="st1 futura-light st3">07.50</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 763.2293 121.225)" class="st1 futura-light st4">150.00 m2</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 751.3992 111.4949)" class="st5 futura-book st7">07</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 777.55 108.8151)" class="st1 futura-light st3">20.00</text>
					</g>
					<g class="property__active" ng-class="cedro.inmovablesClassList[7]" ng-click="cedro.setLeadProperty(cedro.inmovablesData.inmovables[7])">
						<polygon class="property vl-sprite-2" points="780.3,17.5 782,177.5 847.1,177.6 843.4,17.5"/>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 800.6396 174.4738)" class="st1 futura-light st3">07.50</text>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 797.5991 27.7537)" class="st1 futura-light st3">07.50</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 824.6093 121.2265)" class="st1 futura-light st4">150.00 m2</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 812.7792 111.4944)" class="st5 futura-book st7">08</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 838.94 108.8151)" class="st1 futura-light st3">20.00</text>
					</g>
					<g class="property__active" ng-class="cedro.inmovablesClassList[8]" ng-click="cedro.setLeadProperty(cedro.inmovablesData.inmovables[8])">
						<polygon class="property vl-sprite-1" points="843.4,17.5 847.1,177.6 909.8,177.7 905.2,17.6"/>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 866.5493 174.4841)" class="st1 futura-light st3">07.50</text>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 860.6188 27.7543)" class="st1 futura-light st3">07.50</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 889.1692 121.2256)" class="st1 futura-light st4">150.00 m2</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 877.3391 111.4945)" class="st5 futura-book st7">09</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 903.5 108.8151)" class="st1 futura-light st3">20.00</text>
					</g>
					<g class="property__active" ng-class="cedro.inmovablesClassList[9]" ng-click="cedro.setLeadProperty(cedro.inmovablesData.inmovables[9])">
						<polygon class="property vl-sprite-2" points="905.2,17.6 909.8,177.7 973.5,177.8 968.6,17.7"/>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 929.1491 174.4841)" class="st1 futura-light st3">07.50</text>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 923.749 27.7544)" class="st1 futura-light st3">07.50</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 952.2289 121.2253)" class="st1 futura-light st4">150.00 m2</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 940.3989 111.4942)" class="st5 futura-book st7">10</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 966.56 108.8151)" class="st1 futura-light st3">20.00</text>
					</g>
					<g class="property__active" ng-class="cedro.inmovablesClassList[10]" ng-click="cedro.setLeadProperty(cedro.inmovablesData.inmovables[10])">
						<polygon class="property vl-sprite-1" points="968.6,17.7 973.5,177.8 1037.9,177.8 1031.5,17.8"/>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 995.1597 173.6442)" class="st1 futura-light st3">07.50</text>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 990.0389 26.924)" class="st1 futura-light st3">07.50</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 1016.5297 120.3849)" class="st1 futura-light st4">150.00 m2</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 1004.6888 110.6547)" class="st5 futura-book st7">11</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 1030.85 107.985)" class="st1 futura-light st3">20.00</text>
					</g>
					<g class="property__active" ng-class="cedro.inmovablesClassList[11]" ng-click="cedro.setLeadProperty(cedro.inmovablesData.inmovables[11])">
						<polygon class="property vl-sprite-2" points="1031.5,17.8 1037.9,177.8 1110.8,177.9 1103.5,17.9"/>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 1062.9492 173.6441)" class="st1 futura-light st3">08.66</text>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 1057.5891 26.9238)" class="st1 futura-light st3">08.66</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 1082.9988 120.3855)" class="st1 futura-light st4">173.15 m2</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 1071.1687 110.6554)" class="st5 futura-book st7">12</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 1102.7699 107.9753)" class="st1 futura-light st3">20.00</text>
						<polygon class="st8" points="1074.5,129.4 1066.3,137.2 1058.6,129 1058.6,129"/>
						<polygon class="st9" points="1074.5,129.4 1058.6,129 1066.8,121.2"/>
					</g>
					<g class="property__active" ng-class="cedro.inmovablesClassList[12]" ng-click="cedro.setLeadProperty(cedro.inmovablesData.inmovables[12])">
						<polygon class="property vl-sprite-1" points="1103.5,17.6 1110.8,177.7 1184.5,177.7 1176,17.7"/>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 1139.7889 173.6442)" class="st1 futura-light st3">08.66</text>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 1130.559 26.6643)" class="st1 futura-light st3">08.66</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 1156.0996 120.1351)" class="st1 futura-light st4">173.15 m2</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 1144.2697 110.405)" class="st5 futura-book st7">13</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 1175.8699 107.7253)" class="st1 futura-light st3">20.00</text>
						<polygon class="st8" points="1146.5,129.4 1138.3,137.2 1130.6,129 1130.6,129"/>
						<polygon class="st9" points="1146.5,129.4 1130.6,129 1138.8,121.2"/>
					</g>
					<g class="property__active" ng-class="cedro.inmovablesClassList[13]" ng-click="cedro.setLeadProperty(cedro.inmovablesData.inmovables[13])">
						<polygon class="property vl-sprite-2" points="1176,18 1184.5,178 1258.2,178.1 1247.6,18.1"/>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 1207.9789 173.644)" class="st1 futura-light st3">08.66</text>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 1200.5288 26.9143)" class="st1 futura-light st3">08.66</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 1227.6193 120.3855)" class="st1 futura-light st4">173.15 m2</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 1215.7794 110.6562)" class="st5 futura-book st7">14</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 1247.3899 107.985)" class="st1 futura-light st3">20.00</text>
						<polygon class="st8" points="1220.8,129.4 1212.6,137.2 1204.8,129 1204.8,129"/>
						<polygon class="st9" points="1220.8,129.4 1204.8,129 1213,121.2"/>
					</g>
					<g class="property__active" ng-class="cedro.inmovablesClassList[14]" ng-click="cedro.setLeadProperty(cedro.inmovablesData.inmovables[14])">
						<polygon class="property vl-sprite-1" points="1337.6,18.2 1247.6,18.1 1258.2,178.1 1332.4,178.1"/>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 1330.9299 107.9753)" class="st1 futura-light st11">20.13</text>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 1283.0989 173.6438)" class="st1 futura-light st3">08.66</text>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 1283.5194 26.9242)" class="st1 futura-light st3">10.90</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 1306.6292 120.3855)" class="st1 futura-light st4">195.62 m2</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 1294.7893 110.6553)" class="st5 futura-book st7">15</text>
						<polygon class="st8" points="1297.9,129.4 1289.6,137.2 1281.9,129 1281.9,129"/>
						<polygon class="st9" points="1297.9,129.4 1281.9,129 1290.1,121.2"/>
					</g>
					<g>
						<line class="st12" x1="336.5" y1="178.1" x2="339" y2="95"/>
						<line class="st12" x1="464.2" y1="178.1" x2="468.2" y2="16.9"/>
						<line class="st12" x1="528.3" y1="178.1" x2="531.9" y2="16.9"/>
						<line class="st12" x1="591.5" y1="178.1" x2="593.7" y2="16.9"/>
						<line class="st12" x1="655.8" y1="178.1" x2="655.8" y2="16.9"/>
						<line class="st12" x1="719.1" y1="178.1" x2="719.1" y2="16.9"/>
						<line class="st12" x1="782" y1="178.1" x2="780.3" y2="18.2"/>
						<line class="st12" x1="847.2" y1="178.1" x2="843.4" y2="18.2"/>
						<line class="st12" x1="909.9" y1="178.1" x2="905.2" y2="18.2"/>
						<line class="st12" x1="973.6" y1="178.1" x2="968.5" y2="18.2"/>
						<line class="st12" x1="1038.1" y1="178.1" x2="1031.4" y2="18.2"/>
						<line class="st12" x1="1110.9" y1="178.1" x2="1103.4" y2="18.2"/>
						<line class="st12" x1="1184.7" y1="178.1" x2="1175.9" y2="18.2"/>
						<line class="st12" x1="1258.4" y1="178.1" x2="1247.4" y2="18.2"/>
						<line class="st12" x1="401" y1="178.1" x2="405.8" y2="16.9"/>
					</g>
				</g>
				<g>
					<g class="property__active" ng-class="cedro.inmovablesClassList[15]" ng-click="cedro.setLeadProperty(cedro.inmovablesData.inmovables[15])">
						<path class="property vl-sprite-1" d="M417,387.3l4.7-146l-51.9-0.1c-2.1,0-4.1,0.7-5.9,1.8c-1.4,1.1-5.2,7.1-5.2,7.1l-5.7,11.6 l-5.1,125.5H417V387.3z"/>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 368.7695 383.0739)" class="st1 futura-light st3">08.00</text>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 373.7699 253.2542)" class="st1 futura-light st3">08.00</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 395.9992 340.7346)" class="st1 futura-light st4">135.76 m2</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 384.1692 331.0064)" class="st5 futura-book st7">16</text>
						<text transform="matrix(1.999600e-02 -0.8498 0.9998 1.999600e-02 341.5714 346.1047)" class="st1 futura-light st13">14.87</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 410.33 328.3249)" class="st1 futura-light st3">17.15</text>
						<polygon class="st8" points="386.1,349.4 377.9,357.2 370.2,349 370.2,349"/>
						<polygon class="st9" points="386.1,349.4 370.2,349 378.4,341.2"/>
					</g>
					<g class="property__active" ng-class="cedro.inmovablesClassList[16]" ng-click="cedro.setLeadProperty(cedro.inmovablesData.inmovables[16])">
						<polygon class="property vl-sprite-2" points="482.5,388.3 486.3,242.3 421.7,242.2 417,388.3"/>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 434.3395 384.0838)" class="st1 futura-light st3">07.45</text>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 439.3392 254.2441)" class="st1 futura-light st3">07.45</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 461.5692 341.736)" class="st1 futura-light st4">127.77 m2</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 449.7391 332.0049)" class="st5 futura-book st7">17</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 475.9 329.3249)" class="st1 futura-light st3">17.15</text>
					</g>
					<g class="property__active" ng-class="cedro.inmovablesClassList[17]" ng-click="cedro.setLeadProperty(cedro.inmovablesData.inmovables[17])">
						<polygon class="property vl-sprite-1" points="547.4,388.3 550,242.4 486.3,242.3 482.5,388.3"/>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 501.7091 384.0839)" class="st1 futura-light st3">07.45</text>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 501.0695 254.2537)" class="st1 futura-light st3">07.45</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 523.2993 341.7361)" class="st1 futura-light st4">127.77 m2</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 511.4692 332.005)" class="st5 futura-book st7">18</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 537.63 329.3249)" class="st1 futura-light st3">17.15</text>
					</g>
					<g class="property__active" ng-class="cedro.inmovablesClassList[18]" ng-click="cedro.setLeadProperty(cedro.inmovablesData.inmovables[18])">
						<polygon class="property vl-sprite-2" points="612.1,388.3 613.5,242.5 550,242.4 547.4,388.3"/>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 566.4496 384.084)" class="st1 futura-light st3">07.45</text>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 565.3896 254.2541)" class="st1 futura-light st3">07.45</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 587.6189 341.7348)" class="st1 futura-light st4">127.77 m2</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 575.7889 332.0066)" class="st5 futura-book st7">19</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 601.9401 329.3249)" class="st1 futura-light st3">17.15</text>
					</g>
					<g class="property__active" ng-class="cedro.inmovablesClassList[19]" ng-click="cedro.setLeadProperty(cedro.inmovablesData.inmovables[19])">
						<polygon class="property vl-sprite-1" points="677,388.3 677.5,242.6 613.5,242.5 612.1,388.3"/>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 629.9997 384.0842)" class="st1 futura-light st3">07.45</text>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 629.4299 254.2538)" class="st1 futura-light st3">07.45</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 651.6495 341.7345)" class="st1 futura-light st4">127.77 m2</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 639.8194 332.0053)" class="st5 futura-book st7">20</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 665.98 329.3249)" class="st1 futura-light st3">17.15</text>
					</g>
					<g class="property__active" ng-class="cedro.inmovablesClassList[20]" ng-click="cedro.setLeadProperty(cedro.inmovablesData.inmovables[20])">
						<polygon class="property vl-sprite-2" points="741.6,388.3 740.8,242.7 677.5,242.6 677,388.3"/>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 693.3593 384.0844)" class="st1 futura-light st3">07.45</text>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 693.7593 254.2536)" class="st1 futura-light st3">07.45</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 715.9896 341.7363)" class="st1 futura-light st4">127.77 m2</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 704.1595 332.0052)" class="st5 futura-book st7">21</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 730.3101 329.3249)" class="st1 futura-light st3">17.15</text>
					</g>
					<g class="property__active" ng-class="cedro.inmovablesClassList[21]" ng-click="cedro.setLeadProperty(cedro.inmovablesData.inmovables[21])">
						<polygon class="property vl-sprite-1" points="806.5,388.3 804.7,242.8 740.8,242.7 741.6,388.3"/>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 760.1293 384.0842)" class="st1 futura-light st3">07.45</text>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 759.8495 254.2538)" class="st1 futura-light st3">07.45</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 782.0886 341.7361)" class="st1 futura-light st4">127.77 m2</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 770.2488 332.0049)" class="st5 futura-book st7">22</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 796.41 329.3249)" class="st1 futura-light st3">17.15</text>
					</g>
					<g class="property__active" ng-class="cedro.inmovablesClassList[22]" ng-click="cedro.setLeadProperty(cedro.inmovablesData.inmovables[22])">
						<polygon class="property vl-sprite-2" points="871.4,388.3 868.3,242.9 804.7,242.8 806.5,388.3"/>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 826.2594 384.0742)" class="st1 futura-light st3">07.45</text>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 824.9894 254.2543)" class="st1 futura-light st3">07.45</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 847.2188 341.7351)" class="st1 futura-light st4">127.77 m2</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 835.3887 332.005)" class="st5 futura-book st7">23</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 861.55 329.3249)" class="st1 futura-light st3">17.15</text>
					</g>
					<g class="property__active" ng-class="cedro.inmovablesClassList[23]" ng-click="cedro.setLeadProperty(cedro.inmovablesData.inmovables[23])">
						<polygon class="property vl-sprite-1" points="936.3,388.3 932.4,243 868.3,242.9 871.4,388.3"/>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 890.4091 384.0743)" class="st1 futura-light st3">07.45</text>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 889.7495 254.2541)" class="st1 futura-light st3">07.45</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 911.9791 350.2044)" class="st1 futura-light st4">127.77 m2</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 900.1391 332.005)" class="st5 futura-book st7">24</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 926.3 329.3249)" class="st1 futura-light st3">17.15</text>
					</g>
					<g class="property__active" ng-class="cedro.inmovablesClassList[24]" ng-click="cedro.setLeadProperty(cedro.inmovablesData.inmovables[24])">
						<polygon class="property vl-sprite-2" points="1001.6,388.3 996.5,243.1 932.4,243 936.3,388.3"/>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 954.0198 384.0842)" class="st1 futura-light st3">07.45</text>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 954.5594 254.2545)" class="st1 futura-light st3">07.45</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 976.7995 341.735)" class="st1 futura-light st4">127.77 m2</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 964.9694 332.0068)" class="st5 futura-book st7">25</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 991.12 329.3249)" class="st1 futura-light st3">17.15</text>
					</g>
					<g class="property__active" ng-class="cedro.inmovablesClassList[25]" ng-click="cedro.setLeadProperty(cedro.inmovablesData.inmovables[25])">
						<polygon class="property vl-sprite-1" points="1066.4,388.3 1060.2,243.2 996.5,243.1 1001.6,388.3"/>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 1018.8492 384.0839)" class="st1 futura-light st3">07.45</text>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 1018.1896 254.2539)" class="st1 futura-light st3">07.45</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 1040.4189 341.7354)" class="st1 futura-light st4">127.77 m2</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 1028.5889 332.0053)" class="st5 futura-book st7">26</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 1054.74 329.3249)" class="st1 futura-light st3">17.15</text>
					</g>
					<g class="property__active" ng-class="cedro.inmovablesClassList[26]" ng-click="cedro.setLeadProperty(cedro.inmovablesData.inmovables[26])">
						<path class="property vl-sprite-2" d="M1134.3,388.3l-6.7-133.5c0,0-0.2-3.1-4.2-7.1s-7.2-4.4-7.2-4.4l-56-0.1l6.2,145.1H1134.3z"/>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 1085.6191 384.0842)" class="st1 futura-light st3">08.02</text>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 1077.6593 254.254)" class="st1 futura-light st3">08.02</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 1107.4095 341.7354)" class="st1 futura-light st4">136.61 m2</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 1095.5795 332.0053)" class="st5 futura-book st7">27</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 1121.74 329.3249)" class="st1 futura-light st3">15.15</text>
						<polygon class="st8" points="1097.2,346.3 1089,354 1081.3,345.8 1081.3,345.8"/>
						<polygon class="st9" points="1097.2,346.3 1081.3,345.8 1089.5,338.1"/>
					</g>
					<g class="property__active" ng-class="cedro.inmovablesClassList[27]" ng-click="cedro.setLeadProperty(cedro.inmovablesData.inmovables[27])">
						<polygon class="property vl-sprite-1" points="347.9,388.3 347.9,388.3 347.9,388.3 291.9,388.3 281.2,410.2 279,456.2 274.9,539.9 
							346.1,539.8 351.9,388.3"/>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 302.5092 536.3843)" class="st1 futura-light st3">08.01</text>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 305.6093 400.5242)" class="st1 futura-light st3">07.01</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 330.3087 486.1152)" class="st1 futura-light st4">136.06 m2</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 318.4792 476.3851)" class="st5 futura-book st7">28</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 271.49 500.2751)" class="st1 futura-light st3">14.87</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 344.63 473.7047)" class="st1 futura-light st3">17.15</text>
						<polygon class="st8" points="321.9,494.3 313.7,502.1 306,493.9 306,493.9"/>
						<polygon class="st9" points="321.9,494.3 306,493.9 314.2,486.1"/>
					</g>
					<g class="property__active" ng-class="cedro.inmovablesClassList[28]" ng-click="cedro.setLeadProperty(cedro.inmovablesData.inmovables[28])">
						<polygon class="property vl-sprite-2" points="351.9,388.3 346.1,539.8 412.2,539.7 417,388.3"/>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 370.6792 536.6343)" class="st1 futura-light st3">07.45</text>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 373.7695 400.7743)" class="st1 futura-light st3">07.45</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 398.4692 486.3749)" class="st1 futura-light st4">127.77 m2</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 386.6388 476.635)" class="st5 futura-book st7">29</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 412.79 473.9547)" class="st1 futura-light st3">17.15</text>
					</g>
					<g class="property__active" ng-class="cedro.inmovablesClassList[29]" ng-click="cedro.setLeadProperty(cedro.inmovablesData.inmovables[29])">
						<polygon class="property vl-sprite-1" points="417,388.3 412.2,539.7 478.5,539.7 482.5,388.3"/>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 435.0193 536.6339)" class="st1 futura-light st3">07.45</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 462.809 486.366)" class="st1 futura-light st4">127.77 m2</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 450.9789 476.6349)" class="st5 futura-book st7">30</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 477.14 473.9547)" class="st1 futura-light st3">17.15</text>
					</g>
					<g class="property__active" ng-class="cedro.inmovablesClassList[30]" ng-click="cedro.setLeadProperty(cedro.inmovablesData.inmovables[30])">
						<polygon class="property vl-sprite-2" points="482.5,388.3 478.5,539.7 544.6,539.6 547.4,388.3"/>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 501.0695 536.634)" class="st1 futura-light st3">07.45</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 525.7692 486.3647)" class="st1 futura-light st4">127.77 m2</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 513.9391 476.6366)" class="st5 futura-book st7">31</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 540.09 473.9645)" class="st1 futura-light st3">17.15</text>
					</g>
					<g class="property__active" ng-class="cedro.inmovablesClassList[31]" ng-click="cedro.setLeadProperty(cedro.inmovablesData.inmovables[31])">
						<polygon class="property vl-sprite-1" points="547.4,388.3 544.6,539.6 610.7,539.5 612.1,388.3"/>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 564.4096 536.6345)" class="st1 futura-light st3">07.45</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 592.6289 486.3644)" class="st1 futura-light st4">127.77 m2</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 580.7891 476.6352)" class="st5 futura-book st7">32</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 606.9501 473.9547)" class="st1 futura-light st3">17.15</text>
					</g>
					<g class="property__active" ng-class="cedro.inmovablesClassList[32]" ng-click="cedro.setLeadProperty(cedro.inmovablesData.inmovables[32])">
						<polygon class="property vl-sprite-2" points="612.1,388.3 610.7,539.5 676.5,539.5 677,388.3"/>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 629.9998 536.6338)" class="st1 futura-light st3">07.45</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 658.2191 486.366)" class="st1 futura-light st4">127.77 m2</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 646.3891 476.6349)" class="st5 futura-book st7">33</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 672.54 473.9547)" class="st1 futura-light st3">17.15</text>
					</g>
					<g class="property__active" ng-class="cedro.inmovablesClassList[33]" ng-click="cedro.setLeadProperty(cedro.inmovablesData.inmovables[33])">
						<polygon class="property vl-sprite-1" points="677,388.3 676.5,539.5 742.5,539.4 741.6,388.3"/>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 694.9191 536.634)" class="st1 futura-light st3">07.45</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 723.1393 486.3648)" class="st1 futura-light st4">127.77 m2</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 711.3093 476.6367)" class="st5 futura-book st7">34</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 737.47 473.9645)" class="st1 futura-light st3">17.15</text>
					</g>
					<g class="property__active" ng-class="cedro.inmovablesClassList[34]" ng-click="cedro.setLeadProperty(cedro.inmovablesData.inmovables[34])">
						<polygon class="property vl-sprite-2" points="741.6,388.3 742.5,539.4 808.4,539.3 806.5,388.3"/>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 760.1293 536.6343)" class="st1 futura-light st3">07.45</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 788.3487 486.3646)" class="st1 futura-light st4">127.77 m2</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 776.5186 476.6354)" class="st5 futura-book st7">35</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 802.68 473.9645)" class="st1 futura-light st3">17.15</text>
					</g>
					<g class="property__active" ng-class="cedro.inmovablesClassList[35]" ng-click="cedro.setLeadProperty(cedro.inmovablesData.inmovables[35])">
						<polygon class="property vl-sprite-1" points="806.5,388.3 808.4,539.3 874.7,539.2 871.4,388.3"/>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 827.8095 536.6342)" class="st1 futura-light st3">07.45</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 856.0288 486.3646)" class="st1 futura-light st4">127.77 m2</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 844.1987 476.6355)" class="st5 futura-book st7">36</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 870.36 473.9645)" class="st1 futura-light st3">17.15</text>
					</g>
					<g class="property__active" ng-class="cedro.inmovablesClassList[36]" ng-click="cedro.setLeadProperty(cedro.inmovablesData.inmovables[36])">
						<polygon class="property vl-sprite-2" points="871.4,388.2 874.7,539.1 940.4,539.1 936.3,388.2"/>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 890.4092 536.5244)" class="st1 futura-light st3">07.45</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 918.6287 486.265)" class="st1 futura-light st4">127.77 m2</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 906.7986 476.5349)" class="st5 futura-book st7">37</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 932.95 473.8551)" class="st1 futura-light st3">17.15</text>
					</g>
					<g class="property__active" ng-class="cedro.inmovablesClassList[37]" ng-click="cedro.setLeadProperty(cedro.inmovablesData.inmovables[37])">
						<polygon class="property vl-sprite-1" points="936.3,388.3 940.4,539.2 1007,539.1 1001.6,388.3"/>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 954.0199 536.6343)" class="st1 futura-light st3">07.45</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 982.2392 486.365)" class="st1 futura-light st4">127.77 m2</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 970.4092 476.6358)" class="st5 futura-book st7">38</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 996.57 473.9547)" class="st1 futura-light st3">17.15</text>
					</g>
					<g class="property__active" ng-class="cedro.inmovablesClassList[38]" ng-click="cedro.setLeadProperty(cedro.inmovablesData.inmovables[38])">
						<polygon class="property vl-sprite-2" points="1001.6,388.3 1007,539.1 1072.9,539 1066.4,388.3"/>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 1023.8691 536.6341)" class="st1 futura-light st3">07.45</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 1047.0686 486.3648)" class="st1 futura-light st4">127.77 m2</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 1035.2385 476.6367)" class="st5 futura-book st7">39</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 1061.3899 473.9547)" class="st1 futura-light st3">17.15</text>
					</g>
					<g class="property__active" ng-class="cedro.inmovablesClassList[39]" ng-click="cedro.setLeadProperty(cedro.inmovablesData.inmovables[39])">
						<path class="property vl-sprite-1" d="M1141.4,526.6l-7-139.3h-67.9l6.4,150.7l57.7-0.1c0,0,6.1-2.3,8.6-4.8
							S1141.4,526.6,1141.4,526.6z"/>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 1088.0098 535.6342)" class="st1 futura-light st3">08.02</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 1116.2296 485.365)" class="st1 futura-light st4">136.27 m2</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 1104.3888 475.6367)" class="st5 futura-book st7">40</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 1130.5499 472.9547)" class="st1 futura-light st3">15.15</text>
						<polygon class="st8" points="1107.1,493.6 1098.9,501.3 1091.1,493.1 1091.1,493.1"/>
						<polygon class="st9" points="1107.1,493.6 1091.1,493.1 1099.3,485.4"/>
					</g>
					<g>
						<line class="st12" x1="290.3" y1="388.1" x2="1136.5" y2="388.1"/>
						<line class="st12" x1="274.8" y1="538.9" x2="281.3" y2="406.9"/>
						<line class="st12" x1="346" y1="538.9" x2="351.9" y2="388.1"/>
						<line class="st12" x1="347.9" y1="388.1" x2="353.3" y2="259.6"/>
						<line class="st12" x1="412.1" y1="538.9" x2="421.8" y2="242.1"/>
						<line class="st12" x1="478.5" y1="538.9" x2="486.4" y2="242.1"/>
						<line class="st12" x1="544.6" y1="538.9" x2="550.1" y2="242.1"/>
						<line class="st12" x1="613.6" y1="242.4" x2="610.6" y2="538.9"/>
						<line class="st12" x1="676.5" y1="538.9" x2="677.5" y2="242.4"/>
						<line class="st12" x1="740.8" y1="242.4" x2="742.5" y2="538.9"/>
						<line class="st12" x1="808.5" y1="538.9" x2="804.6" y2="242.1"/>
						<line class="st12" x1="868.2" y1="242.4" x2="874.8" y2="538.9"/>
						<line class="st12" x1="940.5" y1="538.9" x2="932.3" y2="242.4"/>
						<line class="st12" x1="996.4" y1="242.4" x2="1007.1" y2="539.3"/>
						<line class="st12" x1="1073.1" y1="539.4" x2="1060.1" y2="242.4"/>
					</g>
				</g>
				<g>
					<g class="property__active" ng-class="cedro.inmovablesClassList[40]" ng-click="cedro.setLeadProperty(cedro.inmovablesData.inmovables[40])">
						<polygon class="property vl-sprite-2" points="57.9,609.8 37.3,645.8 28.4,794.2 112.1,794.1 123.4,609.7"/>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 57.9494 787.3342)" class="st1 futura-light st11">09.35</text>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 73.0395 621.904)" class="st1 futura-light st11">07.50</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 93.739 723.4459)" class="st1 futura-light st14">183.03 m2</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 81.5288 713.4044)" class="st5 futura-book st15">41</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 43.4301 734.9352)" class="st1 futura-light st11">15.80</text>
						<text transform="matrix(0.4825 -0.8759 0.8759 0.4825 48.6106 644.6057)" class="st1 futura-light st11">04.59</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 112.23 710.6345)" class="st1 futura-light st11">20.00</text>
						<polygon class="st8" points="82.9,730.2 74.7,737.9 66.9,729.7 66.9,729.7"/>
						<polygon class="st9" points="82.9,730.2 66.9,729.7 75.2,721.9"/>
					</g>
					<g class="property__active" ng-class="cedro.inmovablesClassList[41]" ng-click="cedro.setLeadProperty(cedro.inmovablesData.inmovables[41])">
						<polygon class="property vl-sprite-1" points="123.4,609.7 112.1,794.1 180.2,794.1 188.8,609.7"/>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 136.2297 787.334)" class="st1 futura-light st11">07.50</text>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 141.6695 621.9139)" class="st1 futura-light st11">07.50</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 162.3689 723.4457)" class="st1 futura-light st14">150.00 m2</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 150.1587 713.4052)" class="st5 futura-book st15">42</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 180.85 710.6345)" class="st1 futura-light st11">20.00</text>
					</g>
					<g class="property__active" ng-class="cedro.inmovablesClassList[42]" ng-click="cedro.setLeadProperty(cedro.inmovablesData.inmovables[42])">
						<polygon class="property vl-sprite-2" points="188.8,609.7 180.2,794.1 248,794 257,609.7"/>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 202.9396 787.3339)" class="st1 futura-light st11">07.50</text>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 208.3793 621.9041)" class="st1 futura-light st11">07.50</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 229.0788 723.4458)" class="st1 futura-light st14">150.00 m2</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 216.869 713.4053)" class="st5 futura-book st15">43</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 247.5601 710.6345)" class="st1 futura-light st11">20.00</text>
					</g>
					<g class="property__active" ng-class="cedro.inmovablesClassList[43]" ng-click="cedro.setLeadProperty(cedro.inmovablesData.inmovables[43])">
						<polygon class="property vl-sprite-1" points="257,609.7 248,794 316.9,794 323.2,609.7"/>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 273.0793 787.3337)" class="st1 futura-light st11">07.50</text>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 274.7596 621.9044)" class="st1 futura-light st11">07.50</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 295.4591 723.4446)" class="st1 futura-light st14">150.00 m2</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 283.2488 713.4059)" class="st5 futura-book st15">44</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 313.9401 710.6345)" class="st1 futura-light st11">20.00</text>
					</g>
					<g class="property__active" ng-class="cedro.inmovablesClassList[44]" ng-click="cedro.setLeadProperty(cedro.inmovablesData.inmovables[44])">
						<polygon class="property vl-sprite-2" points="323.2,609.7 316.9,794 384.4,793.9 391,609.7"/>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 341.5896 787.3342)" class="st1 futura-light st11">07.50</text>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 343.2596 621.9039)" class="st1 futura-light st11">07.50</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 363.959 723.4557)" class="st1 futura-light st14">150.00 m2</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 351.7488 713.4044)" class="st5 futura-book st15">45</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 382.45 710.6345)" class="st1 futura-light st11">20.00</text>
					</g>
					<g class="property__active" ng-class="cedro.inmovablesClassList[45]" ng-click="cedro.setLeadProperty(cedro.inmovablesData.inmovables[45])">
						<polygon class="property vl-sprite-1" points="391,609.7 384.4,793.9 453.6,793.9 457.8,609.7"/>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 409.6794 787.3339)" class="st1 futura-light st11">07.50</text>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 409.6794 621.9038)" class="st1 futura-light st11">07.50</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 433.3087 723.4451)" class="st1 futura-light st14">150.00 m2</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 421.099 713.4046)" class="st5 futura-book st15">46</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 451.79 710.6452)" class="st1 futura-light st11">20.00</text>
					</g>
					<g class="property__active" ng-class="cedro.inmovablesClassList[46]" ng-click="cedro.setLeadProperty(cedro.inmovablesData.inmovables[46])">
						<polygon class="property vl-sprite-2" points="457.8,609.7 453.6,793.9 522.3,793.8 525.5,609.7"/>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 478.4797 787.3344)" class="st1 futura-light st11">07.50</text>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 478.4793 621.914)" class="st1 futura-light st11">07.50</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 502.1091 723.4447)" class="st1 futura-light st14">150.00 m2</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 489.8993 713.4061)" class="st5 futura-book st15">47</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 520.59 710.6345)" class="st1 futura-light st11">20.00</text>
					</g>
					<g class="property__active" ng-class="cedro.inmovablesClassList[47]" ng-click="cedro.setLeadProperty(cedro.inmovablesData.inmovables[47])">
						<polygon class="property vl-sprite-1" points="525.5,609.7 522.3,793.8 590,793.8 592,609.7"/>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 543.4297 787.3343)" class="st1 futura-light st11">07.50</text>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 543.4293 621.9042)" class="st1 futura-light st11">07.50</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 568.6192 723.4448)" class="st1 futura-light st14">150.00 m2</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 556.4084 713.4061)" class="st5 futura-book st15">48</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 587.1 710.6452)" class="st1 futura-light st11">20.00</text>
					</g>
					<g class="property__active" ng-class="cedro.inmovablesClassList[48]" ng-click="cedro.setLeadProperty(cedro.inmovablesData.inmovables[48])">
						<polygon class="property vl-sprite-2" points="592,609.7 590,793.8 658.5,793.7 659.6,609.7"/>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 611.8297 787.3339)" class="st1 futura-light st11">07.50</text>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 609.9195 621.9141)" class="st1 futura-light st11">07.50</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 635.1089 723.4446)" class="st1 futura-light st14">150.00 m2</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 622.8991 713.406)" class="st5 futura-book st15">49</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 653.6 710.6345)" class="st1 futura-light st11">20.00</text>
					</g>
					<g class="property__active" ng-class="cedro.inmovablesClassList[49]" ng-click="cedro.setLeadProperty(cedro.inmovablesData.inmovables[49])">
						<polygon class="property vl-sprite-1" points="659.6,609.7 658.5,793.7 726.2,793.7 725.2,609.7"/>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 677.3793 787.3337)" class="st1 futura-light st11">07.50</text>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 675.4593 621.9037)" class="st1 futura-light st11">07.50</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 700.6591 723.4448)" class="st1 futura-light st14">150.00 m2</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 688.4492 713.4062)" class="st5 futura-book st15">50</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 719.14 710.6345)" class="st1 futura-light st11">20.00</text>
					</g>
					<g class="property__active" ng-class="cedro.inmovablesClassList[50]" ng-click="cedro.setLeadProperty(cedro.inmovablesData.inmovables[50])">
						<polygon class="property vl-sprite-2" points="725.2,609.7 726.2,793.7 794.8,793.6 793.1,609.7"/>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 748.0293 787.3342)" class="st1 futura-light st11">07.50</text>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 746.1191 621.9036)" class="st1 futura-light st11">07.50</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 771.309 723.4462)" class="st1 futura-light st14">150.00 m2</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 759.0992 713.4047)" class="st5 futura-book st15">51</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 789.79 710.6345)" class="st1 futura-light st11">20.00</text>
					</g>
					<g class="property__active" ng-class="cedro.inmovablesClassList[51]" ng-click="cedro.setLeadProperty(cedro.inmovablesData.inmovables[51])">
						<polygon class="property vl-sprite-1" points="793.1,609.7 794.8,793.6 862.6,793.6 859.8,609.7"/>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 812.2191 787.3442)" class="st1 futura-light st11">07.50</text>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 810.3098 621.9043)" class="st1 futura-light st11">07.50</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 835.4988 723.4446)" class="st1 futura-light st14">150.00 m2</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 823.289 713.405)" class="st5 futura-book st15">52</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 853.99 710.6345)" class="st1 futura-light st11">20.00</text>
					</g>
					<g class="property__active" ng-class="cedro.inmovablesClassList[52]" ng-click="cedro.setLeadProperty(cedro.inmovablesData.inmovables[52])">
						<polygon class="property vl-sprite-2" points="859.8,609.7 862.6,793.6 931.5,793.5 926.9,609.7"/>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 883.7499 787.3339)" class="st1 futura-light st11">07.50</text>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 881.8397 621.9044)" class="st1 futura-light st11">07.50</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 907.0287 723.446)" class="st1 futura-light st14">150.00 m2</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 894.819 713.4045)" class="st5 futura-book st15">53</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 925.51 710.6345)" class="st1 futura-light st11">20.00</text>
					</g>
					<g class="property__active" ng-class="cedro.inmovablesClassList[53]" ng-click="cedro.setLeadProperty(cedro.inmovablesData.inmovables[53])">
						<polygon class="property vl-sprite-1" points="926.9,609.7 931.5,793.5 1010.3,793.5 1004.8,609.7"/>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 961.3495 787.3343)" class="st1 futura-light st11">08.70</text>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 959.4394 621.914)" class="st1 futura-light st11">08.70</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 984.6293 723.4447)" class="st1 futura-light st14">173.96 m2</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 972.4185 713.4051)" class="st5 futura-book st15">54</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 1003.11 710.6345)" class="st1 futura-light st11">20.00</text>
					</g>
					<g class="property__active" ng-class="cedro.inmovablesClassList[54]" ng-click="cedro.setLeadProperty(cedro.inmovablesData.inmovables[54])">
						<polygon class="property vl-sprite-2" points="1004.8,609.2 1010.3,793 1088.9,793 1082.6,609.2"/>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 1037.3593 787.334)" class="st1 futura-light st11">08.70</text>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 1035.4491 621.9142)" class="st1 futura-light st11">08.70</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 1060.6389 723.445)" class="st1 futura-light st14">173.96 m2</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 1048.4292 713.4044)" class="st5 futura-book st15">55</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 1079.1299 710.6452)" class="st1 futura-light st11">20.00</text>
					</g>
					<g class="property__active" ng-class="cedro.inmovablesClassList[55]" ng-click="cedro.setLeadProperty(cedro.inmovablesData.inmovables[55])">
						<polygon class="property vl-sprite-1" points="1082.6,609.7 1088.9,793.4 1168.9,793.4 1160,609.7"/>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 1116.5497 787.3341)" class="st1 futura-light st11">08.70</text>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 1114.6296 621.9041)" class="st1 futura-light st11">08.70</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 1139.8187 723.4448)" class="st1 futura-light st14">173.96 m2</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 1127.6089 713.4062)" class="st5 futura-book st15">56</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 1158.3099 710.6345)" class="st1 futura-light st11">20.00</text>
						<polygon class="st8" points="1129.7,736.8 1121.5,744.5 1113.8,736.3 1113.8,736.3"/>
						<polygon class="st9" points="1129.7,736.8 1113.8,736.3 1122,728.5"/>
					</g>
					<g class="property__active" ng-class="cedro.inmovablesClassList[56]" ng-click="cedro.setLeadProperty(cedro.inmovablesData.inmovables[56])">
						<polygon class="property vl-sprite-2" points="1160,609.7 1168.9,793.4 1249.1,793.3 1237.8,609.7"/>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 1193.7499 787.334)" class="st1 futura-light st11">08.70</text>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 1191.8298 621.9041)" class="st1 futura-light st11">08.70</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 1217.0286 723.4454)" class="st1 futura-light st14">173.96 m2</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 1204.8091 713.4048)" class="st5 futura-book st15">57</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 1235.5099 710.6345)" class="st1 futura-light st11">20.00</text>
						<polygon class="st8" points="1207.2,735.6 1198.9,743.4 1191.2,735.2 1191.2,735.2"/>
						<polygon class="st9" points="1207.2,735.6 1191.2,735.2 1199.4,727.4"/>
					</g>
					<g class="property__active" ng-class="cedro.inmovablesClassList[57]" ng-click="cedro.setLeadProperty(cedro.inmovablesData.inmovables[57])">
						<polygon class="property vl-sprite-1" points="1314.8,609.6 1237.8,609.7 1249.1,793.3 1308.4,793.3"/>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 1266.5797 787.3441)" class="st1 futura-light st11">06.46</text>
						<text transform="matrix(0.9999 -1.000000e-02 1.000000e-02 0.9999 1271.0095 621.9042)" class="st1 futura-light st11">08.70</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 1289.8691 723.4453)" class="st1 futura-light st14">151.51 m2</text>
						<text transform="matrix(1.000000e-02 -0.9999 0.9999 1.000000e-02 1277.6487 713.4047)" class="st5 futura-book st15">58</text>
						<text transform="matrix(1.902288e-02 -0.9998 0.9998 1.902288e-02 1308.35 710.6452)" class="st1 futura-light st11">20.13</text>
						<polygon class="st8" points="1279,735.2 1270.8,742.9 1263,734.7 1263,734.7"/>
						<polygon class="st9" points="1279,735.2 1263,734.7 1271.2,727"/>
					</g>
					<g>
						<line class="st12" x1="123.5" y1="609.8" x2="111.6" y2="794.2"/>
						<line class="st12" x1="188.9" y1="609.8" x2="179.8" y2="793.4"/>
						<line class="st12" x1="257.1" y1="609.8" x2="247.6" y2="793.4"/>
						<line class="st12" x1="323.3" y1="609.8" x2="316.6" y2="793.4"/>
						<line class="st12" x1="391.1" y1="609" x2="384.1" y2="793.4"/>
						<line class="st12" x1="457.9" y1="609" x2="453.4" y2="793.9"/>
						<line class="st12" x1="525.5" y1="609" x2="522.2" y2="793.2"/>
						<line class="st12" x1="592" y1="609" x2="590" y2="793.2"/>
						<line class="st12" x1="659.6" y1="609" x2="658.5" y2="793.2"/>
						<line class="st12" x1="725.1" y1="609" x2="726.2" y2="793.2"/>
						<line class="st12" x1="793" y1="609" x2="794.9" y2="793.2"/>
						<line class="st12" x1="859.7" y1="609" x2="862.8" y2="793.2"/>
						<line class="st12" x1="926.8" y1="609.6" x2="931.7" y2="793.2"/>
						<line class="st12" x1="1004.7" y1="609.6" x2="1010.6" y2="793.2"/>
						<line class="st12" x1="1082.6" y1="609.6" x2="1089.2" y2="793.2"/>
						<line class="st12" x1="1159.9" y1="609.6" x2="1169.3" y2="793.2"/>
						<line class="st12" x1="1237.7" y1="609.6" x2="1249.6" y2="793.2"/>
					</g>
				</g>
			</g>
		</svg>


	</div>


</body>
</html>