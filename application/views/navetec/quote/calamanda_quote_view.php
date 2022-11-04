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
	<link rel="stylesheet" type="text/css" href="media/assets/css/portto-blanco.css">
	<link rel="stylesheet" type="text/css" href="media/assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="media/assets/css/navetec.css">
	<link rel="stylesheet" type="text/css" href="media/assets/css/quote.css">
	<link rel="stylesheet" type="text/css" href="media/assets/css/helpers.css">

	<script type="text/javascript" src="media/bower_components/jquery.min.js"></script>
	<script type="text/javascript" src="media/bower_components/materialize/js/materialize.min.js"></script>

</head>

<body ng-controller="NvtCalamandaQuoteCtrl as nvtCalamanda">
  
	<md-sidenav class="cc-sidenav md-sidenav-left md-whiteframe-4dp" md-component-id="left">
        <md-toolbar class="md-hue-2">
            <h1 class="md-toolbar-tools">BUSINESS PARK</h1>
        </md-toolbar>
        <a href="#!/Navetec-Beta_Business_Park" ng-click="close()">
            <div class="link-body link-nav">
                Beta Business Park
            </div>
        </a>
        <md-divider></md-divider>
        <a href="#!/Navetec-Gamma_Business_Park" ng-click="close()">
            <div class="link-body link-nav">
                Gamma Business Park
            </div>
        </a>
        <md-divider></md-divider>
        <a href="#!/Navetec-Celta_Business_Park" ng-click="close()">
            <div class="link-body link-nav">
                Celta Business Park
            </div>
        </a>
        <md-divider></md-divider>
        <a href="#!/Navetec-Celta_Business_Park" ng-click="close()">
            <div class="link-body link-nav">
                Celta Business Park
            </div>
        </a>
        <md-divider></md-divider>
        <a href="#!/Navetec-Santa_Rosa_Business_Park" ng-click="close()">
            <div class="link-body link-nav">
                Santa Rosa Business Park
            </div>
        </a>
        <md-divider></md-divider>
        <a href="#!/Navetec-Gamma_II_Business_Park" ng-click="close()">
            <div class="link-body link-nav">
                Gamma Dos Business Park
            </div>
        </a>
        <md-divider></md-divider>
        <a href="#!/Navetec-Aeropuerto_Business_Park" ng-click="close()">
            <div class="link-body link-nav">
                Aeropuerto Business Park
            </div>
        </a>
        <md-divider></md-divider>
        <a href="#!/Navetec-Pedro_Escobedo_Business_Park" ng-click="close()">
            <div class="link-body link-nav">
                Pedro Escobedo Business Park
            </div>
        </a>
		<md-divider></md-divider>
        <a href="#!/Navetec-SLP_Business_Park" ng-click="close()">
            <div class="link-body link-nav">
                San Luis Potosí
            </div>
        </a>
        <md-toolbar class="md-hue-2">
            <h1 class="md-toolbar-tools">NAVIGATION</h1>
        </md-toolbar>
        <a href="#!/Navetec" ng-click="close()">
            <div class="link-body link-nav">
                Navetec
            </div>
        </a>
        <md-divider></md-divider>
        <a href="#!/" ng-click="close()">
            <div class="link-body link-nav">
                Grupo CCIMA
            </div>
        </a>
        <md-divider></md-divider>
    </md-sidenav>

    <div ng-controller="sideNavCtrl" class="navbar-fixed">
        <nav class="cc-nav white" role="navigation">
            <div class="nav-wrapper">
                <div class="container">
                    <ul>
                        <li><a href="#!/Navetec" class="nav-logo"><img src="media/assets/img/logos/logo-navetec.svg"></a></li>
                        <li class="right"><md-button class="md-icon-button md-noink" ng-click="toggleLeft()">
                            <svg viewBox="0 0 24 24" width="24"><path d="M3,18h18v-2H3V18z M3,13h18v-2H3V13z M3,6v2h18V6H3z" fill="#5F6368"></path></svg>
                        </md-button></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

	<div class="modal-dialog" ng-class="nvtCalamanda.dialogDisplay">
		<div class="backdrop-dialog" ng-click="nvtCalamanda.closeDialog()"></div>
			<div class="container-dialog p-20">
				<div class="toolbar-dialog blue-txt">
					Cotización
					<span ng-click="nvtCalamanda.closeDialog()">
						<img class="btn-close-dialog mt-4" src="media/assets/img/icons/close.svg">
					</span>
				</div>
                <div class="content-dialog">

<div class="divider"></div>

<div class="p-20 grey lighten-5">
  <div class="p-5">
    <h6 class="futura-med">Navetec Business Park {{nvtCalamanda.propertyData.condominium}}</h6>
  </div>
  <div class="p-5">
                <h6 class="futura-light">{{nvtCalamanda.propertyData.propertyClass}}</h6>
            </div>
  <div class="p-5">
    <h6 class="futura-light">{{nvtCalamanda.propertyData.type}}</h6>
  </div>
  <div class="p-5">
    <h6 class="futura-light">Numero {{nvtCalamanda.propertyData.number}}</h6>
  </div>
  <!-- <div class="p-5">
    <h6 class="futura-light">Dimenciones: {{nvtCalamanda.propertyData.dimensions}}</h6>
  </div> -->
  <div class="p-5">
    <h6 class="futura-light">Área de {{nvtCalamanda.propertyData.area}} M&sup2;</h6>
  </div>
  <div class="p-5">
    <h6 class="futura-light">Precio por M&sup2; de ${{nvtCalamanda.propertyData.cost_m2}} MXN</h6>
  </div>
  <div class="p-5">
    <h6 class="futura-light green-text">Precio de ${{nvtCalamanda.propertyData.total}} MXN <span style="color: #857C82; font-size: 12px;"></span></h6>
  </div>
  <div class="p-5">
                <h6 class="futura-light blue-text">Pregunta por nuestras promociones del mes</h6>
            </div>
</div>


<div class="divider"></div>

<div class="py-20 ">
  <h5 class="center-align grey-text futura-book">Promociones de Lanzamiento Digital</h5>
</div>

<!-- <div class="divider"></div>

<div class="p-20">
  <h6 class="deep-purple-text futura-light">{{nvtCalamanda.propertyData.discountPlan1}}% para propiedades pagadas de contado al 100%</h6>
  <h6 class="green-text futura-light">Precio de ${{nvtCalamanda.propertyData.totalPlan1}} MXN <span style="color: #857C82; font-size: 12px;">+ I.V.A.</span></h6>
  <p class="promo__description grey-text">¡Oferta limitada!</p>
</div>

<div class="divider"></div>

<div class="p-20">
  <h6 class="deep-purple-text futura-light">{{nvtCalamanda.propertyData.discountPlan2}}% de descuento para propiedades con financiamiento hasta 10 años</h6>
  <h6 class="green-text futura-light">Precio de ${{nvtCalamanda.propertyData.totalPlan2}} MXN</h6>
  <p class="promo__description grey-text">¡Oferta limitada!</p>
</div> -->

<div class="divider"></div>

<div class="p-20">
  <h6 class="deep-purple-text futura-light">10% de descuento sobre le monto de enganche</h6>
  <p class="promo__description grey-text">*Pagando el 100% de enganche</p>
  <p class="promo__description grey-text">*Valido hasta {{nvtCalamanda.month + ' ' + nvtCalamanda.year}}</p>
</div>

<div class="divider"></div>

<div class="p-20">
  <h6 class="deep-purple-text futura-light">Compra en {{nvtCalamanda.month}} y paga la primera mensualidad hasta {{nvtCalamanda.nextMonth}}</h6>
  <p class="promo__description grey-text">*Pagando el 100% de enganche</p>
  <p class="promo__description grey-text">*Aplica para todas las operaciones a crédito realizadas en {{nvtCalamanda.month + ' ' + nvtCalamanda.year}}</p>
</div>

<div class="divider"></div>

        <div class="p-20">
            <p class="blue-text futura-book">¡Apártalo ahora!</p>
            <p class="green-text">Con tan solo {{nvtCalamanda.costToBlock}}</p>
            <button class="btn blue-bg no__shadow futura-bold">Apártar ahora</button>
        </div>

    </div>
			</div>

			<div class="divider"></div>
			<div class="option-menu-dialog" ng-controller="ContactMenuCtrl as contactCtrl">
				<md-menu class="right mr-20 mt-10"  md-offset="0 -60">
					<button aria-label="Abrir Menu de Contacto" class="btn blue-bg no__shadow futura-demi" ng-click="contactCtrl.openMenu($mdMenu, $event)">
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
					<h2 class="center-align futura-med">CALAMANDA</h2>
					<div class="quote-description">
						<p class="left">Cotiza facilmente con un solo Click</p>
						<img class="quote-icon-tap mt-15 ml-10 left" src="media/assets/img/icons/tap.svg">
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="color-table">
				<div class="color-block ae-property-active-bg left"></div>
				<p class="pl-40 py-2">DISPONIBLE</p>
			</div>
			<div>
				<div class="color-block mustard-bg left"></div>
				<p class="pl-40 py-2">NO DISPONIBLE</p>
			</div>
		</div>

        <div class="">
          <!-- aqui va el codigo -->          
       
<!-- Generator: Adobe Illustrator 24.2.3, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<svg version="1.1" id="N.B.P._CALAMANDA" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
	 y="0px" viewBox="0 0 1366 498" style="enable-background:new 0 0 1366 498;" xml:space="preserve">
<style type="text/css">
	.st0{fill-rule:evenodd;clip-rule:evenodd;fill:#002856;}
	.st1{fill:#FFFFFF;}
	.st2{font-family:'CenturyGothic';}
	.st3{font-size:8.3px;}
	.st4{fill:#F3E721;}
	.st5{font-family:'CenturyGothic-Bold';}
	.st6{font-size:9.6833px;}
	.st7{fill-rule:evenodd;clip-rule:evenodd;fill:#FFBF00;}
	.st8{opacity:0.5;fill-rule:evenodd;clip-rule:evenodd;fill:#FFBF00;}
	.st9{fill-rule:evenodd;clip-rule:evenodd;fill:#0047BA;}
	.st10{fill:none;stroke:#FFFFFF;stroke-width:1.3833;stroke-miterlimit:10;}
	.st11{fill:none;stroke:#FFFFFF;stroke-width:1.3833;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
	.st12{fill:#5B3F0D;}
	.st13{fill:#1C2044;}
	.st14{font-size:5.2639px;}
	.st15{font-size:5.3274px;}
	.st16{fill:none;stroke:#1C2044;stroke-width:4.15;stroke-miterlimit:10;}
</style>
<g id="MACHOTE">
</g>
<g id="BASE">
	<image style="overflow:visible;" width="1366" height="498" xlink:href="media/assets/img/navetec/app/calamanda/calamanda.jpg" >
	</image>
</g>
<g id="MÓDULOS">
	<g id="ISLA_A">
		<g id="A-1_1_"  ng-class="nvtCalamanda.inmovablesClassList[0]" ng-click="nvtCalamanda.showPropertyData(55, '1A', nvtCalamanda.inmovables[0].idProperty)">
			<polyline id="A-N1_1_"  class="property pb-sprite-1" points="128.2,4.9 194.2,4.6 194.9,196.4 128.9,196.6 128.2,4.9 			"/>
			<text transform="matrix(1 -3.490014e-03 3.490014e-03 1 151.2417 14.6107)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 -3.490014e-03 3.490014e-03 1 151.8694 192.2404)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
			<g>
				<text transform="matrix(3.490014e-03 1 -1 3.490014e-03 132.6675 90.7653)" class="st1 st2 st3">40.70</text>
			</g>
			<text transform="matrix(1 0 0 1 143.1019 103.4697)"><tspan x="0" y="0" class="st1 st2 st3">56</tspan><tspan x="9.2" y="0" class="st1 st2 st3">9.80 m2</tspan></text>
			<g>
				<text transform="matrix(1 0 0 1 149.3001 76.5884)"><tspan x="0" y="0" class="st4 st5 st6">NAVE</tspan><tspan x="6.8" y="11.6" class="st4 st5 st6">1A</tspan></text>
			</g>
			<g>
				<polyline class="st7" points="162.4,167.9 162.4,179.7 156.5,173.8 162.4,167.9 				"/>
				<polyline class="st8" points="162.4,167.9 168.3,173.8 162.4,179.7 162.4,167.9 				"/>
			</g>
		</g>
		<g id="A-2_1_"  ng-class="nvtCalamanda.inmovablesClassList[1]" ng-click="nvtCalamanda.showPropertyData(55, '2A', nvtCalamanda.inmovables[1].idProperty)">
			<polyline id="A-N2_1_" class="property pb-sprite-2" points="260.1,4.4 260.8,196.2 194.9,196.4 194.2,4.6 260.1,4.4 			"/>
			<text transform="matrix(1 -3.490014e-03 3.490014e-03 1 217.2076 14.3775)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 -3.490014e-03 3.490014e-03 1 217.8343 192.0073)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
			<g>
				<text transform="matrix(3.490014e-03 1 -1 3.490014e-03 198.6334 90.5317)" class="st1 st2 st3">40.70</text>
			</g>
			<text transform="matrix(1 0 0 1 209.0672 103.2363)"><tspan x="0" y="0" class="st1 st2 st3">56</tspan><tspan x="9.2" y="0" class="st1 st2 st3">9.80 m2</tspan></text>
			<g>
				<text transform="matrix(1 0 0 1 213.8909 76.5884)"><tspan x="0" y="0" class="st4 st5 st6">NAVE</tspan><tspan x="6.8" y="11.6" class="st4 st5 st6">2A</tspan></text>
			</g>
		</g>
		<g id="A-3_1_" ng-class="nvtCalamanda.inmovablesClassList[2]" ng-click="nvtCalamanda.showPropertyData(55, '3A', nvtCalamanda.inmovables[2].idProperty)"  >
			<polyline id="A-N3_1_" class="property pb-sprite-1"  points="326.1,4.2 326.8,195.9 260.8,196.2 260.1,4.4 273.1,4.4 326.1,4.2 			"/>
			<text transform="matrix(1 -3.490014e-03 3.490014e-03 1 283.1744 14.1454)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 -3.490014e-03 3.490014e-03 1 283.8002 191.7761)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
			<g>
				<text transform="matrix(3.490014e-03 1 -1 3.490014e-03 264.5969 90.2986)" class="st1 st2 st3">40.70</text>
			</g>
			<text transform="matrix(1 0 0 1 275.0345 103.0044)"><tspan x="0" y="0" class="st1 st2 st3">56</tspan><tspan x="9.2" y="0" class="st1 st2 st3">9.80 m2</tspan></text>
			<g>
				<text transform="matrix(1 0 0 1 279.8587 76.5884)"><tspan x="0" y="0" class="st4 st5 st6">NAVE</tspan><tspan x="6.8" y="11.6" class="st4 st5 st6">3A</tspan></text>
			</g>
		</g>
		<g id="A-4_1_" ng-class="nvtCalamanda.inmovablesClassList[3]" ng-click="nvtCalamanda.showPropertyData(55, '4A', nvtCalamanda.inmovables[3].idProperty)">
			<polyline id="A-N4_1_" class="property pb-sprite-2" points="392.1,3.9 392.8,195.7 326.8,195.9 326.1,4.2 392.1,3.9 			"/>
			<text transform="matrix(1 -3.490014e-03 3.490014e-03 1 349.1413 13.9117)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 -3.490014e-03 3.490014e-03 1 349.7671 191.543)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
			<g>
				<text transform="matrix(3.490014e-03 1 -1 3.490014e-03 330.5623 90.0664)" class="st1 st2 st3">40.70</text>
			</g>
			<text transform="matrix(1 0 0 1 341.0008 102.7695)"><tspan x="0" y="0" class="st1 st2 st3">56</tspan><tspan x="9.2" y="0" class="st1 st2 st3">9.80 m2</tspan></text>
			<g>
				<text transform="matrix(1 0 0 1 345.8255 76.5884)"><tspan x="0" y="0" class="st4 st5 st6">NAVE</tspan><tspan x="6.8" y="11.6" class="st4 st5 st6">4A</tspan></text>
			</g>
		</g>
		<g id="A-5_1_ " ng-class="nvtCalamanda.inmovablesClassList[4]" ng-click="nvtCalamanda.showPropertyData(55, '5A', nvtCalamanda.inmovables[4].idProperty)">
			<polyline id="A-N5_1_" class="property pb-sprite-1"  points="392.1,3.9 458,3.7 458.7,195.5 392.8,195.7 392.1,3.9 			"/>
			<text transform="matrix(1 -3.490014e-03 3.490014e-03 1 415.1053 13.6786)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 -3.490014e-03 3.490014e-03 1 415.732 191.3098)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
			<g>
				<text transform="matrix(3.490014e-03 1 -1 3.490014e-03 396.5277 89.8332)" class="st1 st2 st3">40.70</text>
			</g>
			<text transform="matrix(1 0 0 1 406.9666 102.5376)"><tspan x="0" y="0" class="st1 st2 st3">56</tspan><tspan x="9.2" y="0" class="st1 st2 st3">9.80 m2</tspan></text>
			<g>
				<text transform="matrix(1 0 0 1 411.7918 76.5884)"><tspan x="0" y="0" class="st4 st5 st6">NAVE</tspan><tspan x="6.8" y="11.6" class="st4 st5 st6">5A</tspan></text>
			</g>
		</g>
		<g id="A-6_1_ " ng-class="nvtCalamanda.inmovablesClassList[5]" ng-click="nvtCalamanda.showPropertyData(55, '6A', nvtCalamanda.inmovables[5].idProperty)">
			<polyline id="A-N6_1_" class="property pb-sprite-2"  points="458,3.7 499.8,3.6 524,3.5 524.7,195.2 458.7,195.5 458,3.7 			"/>
			<text transform="matrix(1 -3.490014e-03 3.490014e-03 1 481.0721 13.4464)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 -3.490014e-03 3.490014e-03 1 481.6979 191.0766)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
			<g>
				<text transform="matrix(3.490014e-03 1 -1 3.490014e-03 462.4955 89.6001)" class="st1 st2 st3">40.70</text>
			</g>
			<text transform="matrix(1 0 0 1 472.9354 102.3052)"><tspan x="0" y="0" class="st1 st2 st3">56</tspan><tspan x="9.2" y="0" class="st1 st2 st3">9.80 m2</tspan></text>
			<g>
				<text transform="matrix(1 0 0 1 477.7596 76.5884)"><tspan x="0" y="0" class="st4 st5 st6">NAVE</tspan><tspan x="6.8" y="11.6" class="st4 st5 st6">6A</tspan></text>
			</g>
		</g>
		<g id="A-7_1_ " ng-class="nvtCalamanda.inmovablesClassList[6]" ng-click="nvtCalamanda.showPropertyData(55, '7A', nvtCalamanda.inmovables[6].idProperty)">
			<polyline id="A-N7_1_" class="property pb-sprite-1"  points="590.7,195 524.7,195.2 524,3.5 590,3.2 590.7,195 			"/>
			<text transform="matrix(1 -3.490014e-03 3.490014e-03 1 547.0375 13.2123)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 -3.490014e-03 3.490014e-03 1 547.6653 190.8445)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
			<g>
				<text transform="matrix(3.490014e-03 1 -1 3.490014e-03 528.4609 89.3689)" class="st1 st2 st3">40.70</text>
			</g>
			<text transform="matrix(1 0 0 1 538.9007 102.0718)"><tspan x="0" y="0" class="st1 st2 st3">56</tspan><tspan x="9.2" y="0" class="st1 st2 st3">9.80 m2</tspan></text>
			<g>
				<text transform="matrix(1 0 0 1 543.7254 76.5884)"><tspan x="0" y="0" class="st4 st5 st6">NAVE</tspan><tspan x="6.8" y="11.6" class="st4 st5 st6">7A</tspan></text>
			</g>
		</g>
		<g id="A-8_1_ " ng-class="nvtCalamanda.inmovablesClassList[7]" ng-click="nvtCalamanda.showPropertyData(55, '8A', nvtCalamanda.inmovables[7].idProperty)">
			<polyline id="A-N8_1_" class="property pb-sprite-2"  points="590,3.2 617.9,3.1 655.9,3 656.6,194.8 590.7,195 590,3.2 			"/>
			<text transform="matrix(1 -3.490014e-03 3.490014e-03 1 613.0049 12.9801)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 -3.490014e-03 3.490014e-03 1 613.6312 190.6113)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
			<g>
				<text transform="matrix(3.490014e-03 1 -1 3.490014e-03 594.4234 89.1357)" class="st1 st2 st3">40.70</text>
			</g>
			<text transform="matrix(1 0 0 1 604.8665 101.8398)"><tspan x="0" y="0" class="st1 st2 st3">56</tspan><tspan x="9.2" y="0" class="st1 st2 st3">9.80 m2</tspan></text>
			<g>
				<text transform="matrix(1 0 0 1 609.6927 76.5884)"><tspan x="0" y="0" class="st4 st5 st6">NAVE</tspan><tspan x="6.8" y="11.6" class="st4 st5 st6">8A</tspan></text>
			</g>
		</g>
		<g id="A-9_1_ " ng-class="nvtCalamanda.inmovablesClassList[8]" ng-click="nvtCalamanda.showPropertyData(55, '9A', nvtCalamanda.inmovables[8].idProperty)">
			<polyline id="A-N9_1_" class="property pb-sprite-1" points="655.9,3 721.9,2.8 722.6,194.5 656.6,194.8 655.9,3 			"/>
			<text transform="matrix(1 -3.490014e-03 3.490014e-03 1 678.9684 12.7465)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 -3.490014e-03 3.490014e-03 1 679.5961 190.3782)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
			<g>
				<text transform="matrix(3.490014e-03 1 -1 3.490014e-03 660.3922 88.9026)" class="st1 st2 st3">40.70</text>
			</g>
			<text transform="matrix(1 0 0 1 670.8343 101.6089)"><tspan x="0" y="0" class="st1 st2 st3">56</tspan><tspan x="9.2" y="0" class="st1 st2 st3">9.80 m2</tspan></text>
			<g>
				<text transform="matrix(1 0 0 1 675.6575 76.5884)"><tspan x="0" y="0" class="st4 st5 st6">NAVE</tspan><tspan x="6.8" y="11.6" class="st4 st5 st6">9A</tspan></text>
			</g>
		</g>
		<g id="A-10_1_ " ng-class="nvtCalamanda.inmovablesClassList[9]" ng-click="nvtCalamanda.showPropertyData(55, '10A', nvtCalamanda.inmovables[9].idProperty)">
			<polyline id="A-N10_1_" class="property pb-sprite-2" points="721.9,2.8 736.1,2.7 787.9,2.5 788.6,194.3 722.6,194.5 721.9,2.8 			"/>
			<text transform="matrix(1 -3.490014e-03 3.490014e-03 1 744.9357 12.5143)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 -3.490014e-03 3.490014e-03 1 745.5635 190.147)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
			<g>
				<text transform="matrix(3.490014e-03 1 -1 3.490014e-03 726.3577 88.6704)" class="st1 st2 st3">40.70</text>
			</g>
			<text transform="matrix(1 0 0 1 736.8011 101.3726)"><tspan x="0" y="0" class="st1 st2 st3">56</tspan><tspan x="9.2" y="0" class="st1 st2 st3">9.80 m2</tspan></text>
			<g>
				<text transform="matrix(1 0 0 1 741.6263 76.5884)"><tspan x="0" y="0" class="st4 st5 st6">NAVE</tspan><tspan x="4.1" y="11.6" class="st4 st5 st6">10A</tspan></text>
			</g>
		</g>
		<g id="A-11_1_ " ng-class="nvtCalamanda.inmovablesClassList[10]" ng-click="nvtCalamanda.showPropertyData(55, '11A', nvtCalamanda.inmovables[10].idProperty)">
			<polyline id="A-N11_1_" class="property pb-sprite-1"  points="854.5,194.1 788.6,194.3 787.9,2.5 853.8,2.3 854.5,194.1 			"/>
			<text transform="matrix(1 -3.490014e-03 3.490014e-03 1 810.9021 12.2821)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 -3.490014e-03 3.490014e-03 1 811.5289 189.9128)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
			<g>
				<text transform="matrix(3.490014e-03 1 -1 3.490014e-03 792.324 88.4382)" class="st1 st2 st3">40.70</text>
			</g>
			<text transform="matrix(1 0 0 1 802.7669 101.1421)"><tspan x="0" y="0" class="st1 st2 st3">56</tspan><tspan x="9.2" y="0" class="st1 st2 st3">9.80 m2</tspan></text>
			<g>
				<text transform="matrix(1 0 0 1 807.5911 76.5884)"><tspan x="0" y="0" class="st4 st5 st6">NAVE</tspan><tspan x="4.1" y="11.6" class="st4 st5 st6">11A</tspan></text>
			</g>
		</g>
		<g id="A-12_1_" ng-class="nvtCalamanda.inmovablesClassList[11]" ng-click="nvtCalamanda.showPropertyData(55, '12A', nvtCalamanda.inmovables[11].idProperty)">
			<polyline id="A-N12_1_" class="property pb-sprite-2"  points="853.8,2.3 919.8,2.1 920.5,193.9 854.5,194.1 853.8,2.3 			"/>
			<text transform="matrix(1 -3.490014e-03 3.490014e-03 1 876.8685 12.0489)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 -3.490014e-03 3.490014e-03 1 877.4953 189.6797)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
			<g>
				<text transform="matrix(3.490014e-03 1 -1 3.490014e-03 858.2894 88.2041)" class="st1 st2 st3">40.70</text>
			</g>
			<text transform="matrix(1 0 0 1 868.7327 100.9087)"><tspan x="0" y="0" class="st1 st2 st3">56</tspan><tspan x="9.2" y="0" class="st1 st2 st3">9.80 m2</tspan></text>
			<g>
				<text transform="matrix(1 0 0 1 873.5599 76.5884)"><tspan x="0" y="0" class="st4 st5 st6">NAVE</tspan><tspan x="4.1" y="11.6" class="st4 st5 st6">12A</tspan></text>
			</g>
		</g>
		<g id="A-13_1_" ng-class="nvtCalamanda.inmovablesClassList[12]" ng-click="nvtCalamanda.showPropertyData(55, '13A', nvtCalamanda.inmovables[12].idProperty)">
			<polyline id="A-N13_1_" class="property pb-sprite-1"  points="986.5,193.6 920.5,193.9 919.8,2.1 985.8,1.8 986.5,193.6 			"/>
			<text transform="matrix(1 -3.490014e-03 3.490014e-03 1 942.832 11.8158)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 -3.490014e-03 3.490014e-03 1 943.4597 189.4475)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
			<g>
				<text transform="matrix(3.490014e-03 1 -1 3.490014e-03 924.2549 87.9719)" class="st1 st2 st3">40.70</text>
			</g>
			<text transform="matrix(1 0 0 1 934.6995 100.6763)"><tspan x="0" y="0" class="st1 st2 st3">56</tspan><tspan x="9.2" y="0" class="st1 st2 st3">9.80 m2</tspan></text>
			<g>
				<text transform="matrix(1 0 0 1 939.5257 76.5884)"><tspan x="0" y="0" class="st4 st5 st6">NAVE</tspan><tspan x="4.1" y="11.6" class="st4 st5 st6">13A</tspan></text>
			</g>
		</g>
		<g id="A-14_1_" ng-class="nvtCalamanda.inmovablesClassList[13]" ng-click="nvtCalamanda.showPropertyData(55, '14A', nvtCalamanda.inmovables[13].idProperty)">
			<polyline id="A-N14_1_" class="property pb-sprite-2" points="1051.7,1.6 1052.4,193.4 986.5,193.6 985.8,1.8 1051.7,1.6 			"/>
			<text transform="matrix(1 -3.490014e-03 3.490014e-03 1 1008.8003 11.5807)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 -3.490014e-03 3.490014e-03 1 1009.428 189.2143)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
			<g>
				<text transform="matrix(3.490014e-03 1 -1 3.490014e-03 990.2203 87.7388)" class="st1 st2 st3">40.70</text>
			</g>
			<text transform="matrix(1 0 0 1 1000.6663 100.4443)"><tspan x="0" y="0" class="st1 st2 st3">56</tspan><tspan x="9.2" y="0" class="st1 st2 st3">9.80 m2</tspan></text>
			<g>
				<text transform="matrix(1 0 0 1 1005.4925 76.5884)"><tspan x="0" y="0" class="st4 st5 st6">NAVE</tspan><tspan x="4.1" y="11.6" class="st4 st5 st6">14A</tspan></text>
			</g>
		</g>
		<g id="A-15_1_" ng-class="nvtCalamanda.inmovablesClassList[14]" ng-click="nvtCalamanda.showPropertyData(55, '15A', nvtCalamanda.inmovables[14].idProperty)">
			<polyline id="A-N15_1_" class="property pb-sprite-1"  points="1051.7,1.6 1117.7,1.4 1118.4,193.2 1052.4,193.4 1051.7,1.6 			"/>
			<text transform="matrix(1 -3.490014e-03 3.490014e-03 1 1074.7667 11.3485)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 -3.490014e-03 3.490014e-03 1 1075.3944 188.9831)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
			<g>
				<text transform="matrix(3.490014e-03 1 -1 3.490014e-03 1056.1866 87.5066)" class="st1 st2 st3">40.70</text>
			</g>
			<text transform="matrix(1 0 0 1 1066.6332 100.2114)"><tspan x="0" y="0" class="st1 st2 st3">56</tspan><tspan x="9.2" y="0" class="st1 st2 st3">9.80 m2</tspan></text>
			<g>
				<text transform="matrix(1 0 0 1 1071.4594 76.5884)"><tspan x="0" y="0" class="st4 st5 st6">NAVE</tspan><tspan x="4.1" y="11.6" class="st4 st5 st6">15A</tspan></text>
			</g>
		</g>
		<g id="A-16_1_" ng-class="nvtCalamanda.inmovablesClassList[15]" ng-click="nvtCalamanda.showPropertyData(55, '16A', nvtCalamanda.inmovables[15].idProperty)">
			<polyline id="A-N16_1_" class="property pb-sprite-2" points="1183.7,1.1 1184.4,192.9 1118.4,193.2 1117.7,1.4 1183.7,1.1 			"/>
			<text transform="matrix(1 -3.490014e-03 3.490014e-03 1 1140.7311 11.1154)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 -3.490014e-03 3.490014e-03 1 1141.3589 188.749)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
			<g>
				<text transform="matrix(3.490014e-03 1 -1 3.490014e-03 1122.1462 87.2739)" class="st1 st2 st3">40.70</text>
			</g>
			<text transform="matrix(1 0 0 1 1132.6058 99.9785)"><tspan x="0" y="0" class="st1 st2 st3">56</tspan><tspan x="9.2" y="0" class="st1 st2 st3">9.80 m2</tspan></text>
			<g>
				<text transform="matrix(1 0 0 1 1137.431 76.5884)"><tspan x="0" y="0" class="st4 st5 st6">NAVE</tspan><tspan x="4.1" y="11.6" class="st4 st5 st6">16A</tspan></text>
			</g>
		</g>
		<g id="A-17_1_" ng-class="nvtCalamanda.inmovablesClassList[16]" ng-click="nvtCalamanda.showPropertyData(55, '17A', nvtCalamanda.inmovables[16].idProperty)">
			<polyline id="A-N17_1_" class="property pb-sprite-1"  points="1250.3,192.7 1184.4,192.9 1183.7,1.1 1249.6,0.9 1250.3,192.7 			"/>
			<text transform="matrix(1 -3.490014e-03 3.490014e-03 1 1206.6917 10.8812)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 -3.490014e-03 3.490014e-03 1 1207.3224 188.5159)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
			<g>
				<text transform="matrix(3.490014e-03 1 -1 3.490014e-03 1188.1116 87.0408)" class="st1 st2 st3">40.70</text>
			</g>
			<text transform="matrix(1 0 0 1 1198.5687 99.7461)"><tspan x="0" y="0" class="st1 st2 st3">56</tspan><tspan x="9.2" y="0" class="st1 st2 st3">9.80 m2</tspan></text>
			<g>
				<text transform="matrix(1 0 0 1 1203.3969 76.5884)"><tspan x="0" y="0" class="st4 st5 st6">NAVE</tspan><tspan x="4.1" y="11.6" class="st4 st5 st6">17A</tspan></text>
			</g>
		</g>
		<g id="A-18_1_" ng-class="nvtCalamanda.inmovablesClassList[17]" ng-click="nvtCalamanda.showPropertyData(55, '18A', nvtCalamanda.inmovables[17].idProperty)">
			<polyline id="A-N18_1_" class="property pb-sprite-2"  points="1249.6,0.9 1343.9,0.6 1351.6,192.3 1250.3,192.7 1249.6,0.9 			"/>
			<text transform="matrix(1 -3.490014e-03 3.490014e-03 1 1286.7947 10.5988)"><tspan x="0" y="0" class="st1 st2 st3">20.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(1 -3.490014e-03 3.490014e-03 1 1290.936 188.2202)"><tspan x="0" y="0" class="st1 st2 st3">21.4</tspan><tspan x="16" y="0" class="st1 st2 st3">9</tspan></text>
			<g>
				<text transform="matrix(3.490014e-03 1 -1 3.490014e-03 1254.0858 86.8076)" class="st1 st2 st3">40.70</text>
			</g>
			<g>
				<text transform="matrix(3.839011e-02 0.9993 -0.9993 3.839011e-02 1337.4078 86.8711)" class="st1 st2 st3">40.73</text>
			</g>
			<text transform="matrix(1 0 0 1 1282.1703 99.4639)"><tspan x="0" y="0" class="st1 st2 st3">84</tspan><tspan x="9.2" y="0" class="st1 st2 st3">4.27 m2</tspan></text>
			<g>
				<text transform="matrix(1 0 0 1 1285.6263 76.5884)"><tspan x="0" y="0" class="st4 st5 st6">NAVE</tspan><tspan x="4.1" y="11.6" class="st4 st5 st6">18A</tspan></text>
			</g>
		</g>
		<g id="DIVISIONES_3_">
			<line class="st10" x1="194.9" y1="196.4" x2="194.2" y2="4.6"/>
			<line class="st10" x1="260.1" y1="4.4" x2="260.8" y2="196.2"/>
			<line class="st10" x1="326.1" y1="4.2" x2="326.8" y2="195.9"/>
			<line class="st10" x1="392.1" y1="3.9" x2="392.8" y2="195.7"/>
			<line class="st10" x1="458" y1="3.7" x2="458.7" y2="195.5"/>
			<line class="st10" x1="524" y1="3.5" x2="524.7" y2="195.2"/>
			<line class="st10" x1="590" y1="3.2" x2="590.7" y2="195"/>
			<line class="st10" x1="655.9" y1="3" x2="656.6" y2="194.8"/>
			<line class="st10" x1="721.9" y1="2.8" x2="722.6" y2="194.5"/>
			<line class="st10" x1="787.9" y1="2.5" x2="788.6" y2="194.3"/>
			<line class="st10" x1="853.8" y1="2.3" x2="854.5" y2="194.1"/>
			<line class="st10" x1="919.8" y1="2.1" x2="920.5" y2="193.9"/>
			<line class="st10" x1="985.8" y1="1.8" x2="986.5" y2="193.6"/>
			<line class="st10" x1="1051.7" y1="1.6" x2="1052.4" y2="193.4"/>
			<line class="st10" x1="1117.7" y1="1.4" x2="1118.4" y2="193.2"/>
			<line class="st10" x1="1183.7" y1="1.1" x2="1184.4" y2="192.9"/>
			<line class="st10" x1="1249.6" y1="0.9" x2="1250.3" y2="192.7"/>
		</g>
	</g>
	<g id="ISLA_B">
		<g id="B-1_2_"  ng-class="nvtCalamanda.inmovablesClassList[18]" ng-click="nvtCalamanda.showPropertyData(55, '1B', nvtCalamanda.inmovables[18].idProperty)">
			<polyline id="B-N1_2_" class="property pb-sprite-1" points="194.9,495.1 128.9,495.1 128.9,302.9 194.9,302.9 194.9,495.1 			"/>
			<text transform="matrix(0.9984 0 0 1 151.9613 312.8916)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9984 0 0 1 151.9613 490.8721)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1.0016 1 0 138.7689 408.8525)"><tspan x="0" y="0" class="st1 st2 st3">40.7</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9984 0 0 1 143.4246 401.8838)"><tspan x="0" y="0" class="st1 st2 st3">56</tspan><tspan x="9.2" y="0" class="st1 st2 st3">9.80 m2</tspan></text>
			<g>
				<text transform="matrix(0.9984 0 0 1 148.6873 377.0586)"><tspan x="0" y="0" class="st4 st5 st6">NAVE</tspan><tspan x="7.6" y="11.6" class="st4 st5 st6">1B</tspan></text>
			</g>
			<g>
				<polyline class="st7" points="162.4,319.9 162.4,331.7 156.5,325.8 162.4,319.9 				"/>
				<polyline class="st8" points="162.4,319.9 168.3,325.8 162.4,331.7 162.4,319.9 				"/>
			</g>
		</g>
		<g id="B-2_2_" ng-class="nvtCalamanda.inmovablesClassList[19]" ng-click="nvtCalamanda.showPropertyData(55, '2B', nvtCalamanda.inmovables[19].idProperty)">
			<polyline id="B-N2_2_" class="property pb-sprite-2"  points="260.8,495.1 194.9,495.1 194.9,302.9 260.8,302.9 260.8,495.1 			"/>
			<text transform="matrix(0.9984 0 0 1 217.9495 312.8916)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9984 0 0 1 217.9495 490.8721)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1.0016 1 0 204.7557 408.8525)"><tspan x="0" y="0" class="st1 st2 st3">40.7</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9984 0 0 1 209.4119 401.8838)"><tspan x="0" y="0" class="st1 st2 st3">56</tspan><tspan x="9.2" y="0" class="st1 st2 st3">9.80 m2</tspan></text>
			<g>
				<text transform="matrix(0.9984 0 0 1 214.6741 377.0586)"><tspan x="0" y="0" class="st4 st5 st6">NAVE</tspan><tspan x="7.6" y="11.6" class="st4 st5 st6">2B</tspan></text>
			</g>
		</g>
		<g id="B-3_2_" ng-class="nvtCalamanda.inmovablesClassList[20]" ng-click="nvtCalamanda.showPropertyData(55, '3B', nvtCalamanda.inmovables[20].idProperty)"> 
			<polyline id="B-N3_2_" class="property pb-sprite-1" points="326.8,495.1 260.8,495.1 260.8,302.9 326.8,302.9 326.8,495.1 			"/>
			<text transform="matrix(0.9984 0 0 1 283.9373 312.8916)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9984 0 0 1 283.9373 490.8721)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1.0016 1 0 270.7435 408.8525)"><tspan x="0" y="0" class="st1 st2 st3">40.7</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9984 0 0 1 275.3997 401.8838)"><tspan x="0" y="0" class="st1 st2 st3">56</tspan><tspan x="9.2" y="0" class="st1 st2 st3">9.80 m2</tspan></text>
			<g>
				<text transform="matrix(0.9984 0 0 1 280.662 377.0586)"><tspan x="0" y="0" class="st4 st5 st6">NAVE</tspan><tspan x="7.6" y="11.6" class="st4 st5 st6">3B</tspan></text>
			</g>
		</g>
		<g id="B-4_2_" ng-class="nvtCalamanda.inmovablesClassList[21]" ng-click="nvtCalamanda.showPropertyData(55, '4B', nvtCalamanda.inmovables[21].idProperty)">  
			<polyline id="B-N4_2_" class="property pb-sprite-2" points="326.8,495.1 326.8,302.9 392.8,302.9 392.8,495.1 326.8,495.1 			"/>
			<text transform="matrix(0.9984 0 0 1 349.9242 312.8916)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9984 0 0 1 349.9242 490.8721)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1.0016 1 0 336.7313 408.8535)"><tspan x="0" y="0" class="st1 st2 st3">40.7</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9984 0 0 1 341.3871 401.8838)"><tspan x="0" y="0" class="st1 st2 st3">56</tspan><tspan x="9.2" y="0" class="st1 st2 st3">9.80 m2</tspan></text>
			<g>
				<text transform="matrix(0.9984 0 0 1 346.6497 377.0586)"><tspan x="0" y="0" class="st4 st5 st6">NAVE</tspan><tspan x="7.6" y="11.6" class="st4 st5 st6">4B</tspan></text>
			</g>
		</g>
		<g id="B-5_2_" ng-class="nvtCalamanda.inmovablesClassList[22]" ng-click="nvtCalamanda.showPropertyData(55, '5B', nvtCalamanda.inmovables[22].idProperty)">
			<polyline id="B-N5_2_" class="property pb-sprite-1" points="458.8,495.1 392.8,495.1 392.8,302.9 458.8,302.9 458.8,495.1 			"/>
			<text transform="matrix(0.9984 0 0 1 415.9144 312.8916)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9984 0 0 1 415.9144 490.8721)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1.0016 1 0 402.7191 408.8525)"><tspan x="0" y="0" class="st1 st2 st3">40.7</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9984 0 0 1 407.3739 401.8838)"><tspan x="0" y="0" class="st1 st2 st3">56</tspan><tspan x="9.2" y="0" class="st1 st2 st3">9.80 m2</tspan></text>
			<g>
				<text transform="matrix(0.9984 0 0 1 412.6371 377.0586)"><tspan x="0" y="0" class="st4 st5 st6">NAVE</tspan><tspan x="7.6" y="11.6" class="st4 st5 st6">5B</tspan></text>
			</g>
		</g>
		<g id="B-6_2_" ng-class="nvtCalamanda.inmovablesClassList[23]" ng-click="nvtCalamanda.showPropertyData(55, '6B', nvtCalamanda.inmovables[23].idProperty)"> 
			<polyline id="B-N6_2_" class="property pb-sprite-2" points="458.8,495.1 458.8,302.9 524.8,302.9 524.8,495.1 458.8,495.1 			"/>
			<text transform="matrix(0.9984 0 0 1 481.9012 312.8916)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9984 0 0 1 481.9012 490.8721)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1.0016 1 0 468.7054 408.8525)"><tspan x="0" y="0" class="st1 st2 st3">40.7</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9984 0 0 1 473.3631 401.8838)"><tspan x="0" y="0" class="st1 st2 st3">56</tspan><tspan x="9.2" y="0" class="st1 st2 st3">9.80 m2</tspan></text>
			<g>
				<text transform="matrix(0.9984 0 0 1 478.6258 377.0586)"><tspan x="0" y="0" class="st4 st5 st6">NAVE</tspan><tspan x="7.6" y="11.6" class="st4 st5 st6">6B</tspan></text>
			</g>
		</g>
		<g id="B-7_2_" ng-class="nvtCalamanda.inmovablesClassList[24]" ng-click="nvtCalamanda.showPropertyData(55, '7B', nvtCalamanda.inmovables[24].idProperty)">  
			<polyline id="B-N7_2_" class="property pb-sprite-1" points="590.8,495.1 524.8,495.1 524.8,302.9 590.8,302.9 590.8,495.1 			"/>
			<text transform="matrix(0.9984 0 0 1 547.886 312.8916)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9984 0 0 1 547.886 490.8721)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1.0016 1 0 534.6927 408.8525)"><tspan x="0" y="0" class="st1 st2 st3">40.7</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9984 0 0 1 539.3504 401.8838)"><tspan x="0" y="0" class="st1 st2 st3">56</tspan><tspan x="9.2" y="0" class="st1 st2 st3">9.80 m2</tspan></text>
			<g>
				<text transform="matrix(0.9984 0 0 1 544.6146 377.0586)"><tspan x="0" y="0" class="st4 st5 st6">NAVE</tspan><tspan x="7.6" y="11.6" class="st4 st5 st6">7B</tspan></text>
			</g>
		</g>
		<g id="B-8_2_" ng-class="nvtCalamanda.inmovablesClassList[25]" ng-click="nvtCalamanda.showPropertyData(55, '8B', nvtCalamanda.inmovables[25].idProperty)"> 
			<polyline id="B-N8_2_" class="property pb-sprite-2" points="590.8,495.1 590.8,302.9 656.8,302.9 656.8,495.1 590.8,495.1 			"/>
			<text transform="matrix(0.9984 0 0 1 613.8753 312.8916)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9984 0 0 1 613.8753 490.8721)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1.0016 1 0 600.6819 408.8525)"><tspan x="0" y="0" class="st1 st2 st3">40.7</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9984 0 0 1 605.3382 401.8838)"><tspan x="0" y="0" class="st1 st2 st3">56</tspan><tspan x="9.2" y="0" class="st1 st2 st3">9.80 m2</tspan></text>
			<g>
				<text transform="matrix(0.9984 0 0 1 610.6009 377.0586)"><tspan x="0" y="0" class="st4 st5 st6">NAVE</tspan><tspan x="7.6" y="11.6" class="st4 st5 st6">8B</tspan></text>
			</g>
		</g>
		<g id="B-9_2_" ng-class="nvtCalamanda.inmovablesClassList[26]" ng-click="nvtCalamanda.showPropertyData(55, '9B', nvtCalamanda.inmovables[26].idProperty)">  
			<polyline id="B-N9_2_" class="property pb-sprite-1" points="656.8,302.9 722.8,302.9 722.8,495.1 656.8,495.1 656.8,302.9 			"/>
			<text transform="matrix(0.9984 0 0 1 679.8636 312.8916)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9984 0 0 1 679.8636 490.8721)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1.0016 1 0 666.6722 408.8525)"><tspan x="0" y="0" class="st1 st2 st3">40.7</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9984 0 0 1 671.3275 401.8838)"><tspan x="0" y="0" class="st1 st2 st3">56</tspan><tspan x="9.2" y="0" class="st1 st2 st3">9.80 m2</tspan></text>
			<g>
				<text transform="matrix(0.9984 0 0 1 676.5901 377.0586)"><tspan x="0" y="0" class="st4 st5 st6">NAVE</tspan><tspan x="7.6" y="11.6" class="st4 st5 st6">9B</tspan></text>
			</g>
		</g>
		<g id="B-10_2_" ng-class="nvtCalamanda.inmovablesClassList[27]" ng-click="nvtCalamanda.showPropertyData(55, '10B', nvtCalamanda.inmovables[27].idProperty)">
			<polyline id="B-N10_2_" class="property pb-sprite-2" points="788.7,495.1 722.8,495.1 722.8,302.9 788.7,302.9 788.7,495.1 			"/>
			<text transform="matrix(0.9984 0 0 1 745.8519 312.8916)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9984 0 0 1 745.8519 490.8721)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1.0016 1 0 732.6575 408.8535)"><tspan x="0" y="0" class="st1 st2 st3">40.7</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9984 0 0 1 737.3138 401.8838)"><tspan x="0" y="0" class="st1 st2 st3">56</tspan><tspan x="9.2" y="0" class="st1 st2 st3">9.80 m2</tspan></text>
			<g>
				<text transform="matrix(0.9984 0 0 1 742.5794 377.0586)"><tspan x="0" y="0" class="st4 st5 st6">NAVE</tspan><tspan x="4.8" y="11.6" class="st4 st5 st6">10B</tspan></text>
			</g>
		</g>
		<g id="B-11_2_" ng-class="nvtCalamanda.inmovablesClassList[28]" ng-click="nvtCalamanda.showPropertyData(55, '11B', nvtCalamanda.inmovables[28].idProperty)">
			<polyline id="B-N11_2_" class="property pb-sprite-1" points="854.7,495.1 788.7,495.1 788.7,302.9 854.7,302.9 854.7,495.1 			"/>
			<text transform="matrix(0.9984 0 0 1 811.8382 312.8916)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9984 0 0 1 811.8382 490.8721)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1.0016 1 0 798.6448 408.8535)"><tspan x="0" y="0" class="st1 st2 st3">40.7</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9984 0 0 1 803.2991 401.8838)"><tspan x="0" y="0" class="st1 st2 st3">56</tspan><tspan x="9.2" y="0" class="st1 st2 st3">9.80 m2</tspan></text>
			<g>
				<text transform="matrix(0.9984 0 0 1 808.5657 377.0586)"><tspan x="0" y="0" class="st4 st5 st6">NAVE</tspan><tspan x="4.8" y="11.6" class="st4 st5 st6">11B</tspan></text>
			</g>
		</g>
		<g id="B-12_2_" ng-class="nvtCalamanda.inmovablesClassList[29]" ng-click="nvtCalamanda.showPropertyData(55, '12B', nvtCalamanda.inmovables[29].idProperty)">
			<polyline id="B-N12_2_" class="property pb-sprite-2" points="920.7,495.1 854.7,495.1 854.7,302.9 920.7,302.9 920.7,495.1 			"/>
			<text transform="matrix(0.9984 0 0 1 877.8275 312.8916)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9984 0 0 1 877.8275 490.8721)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1.0016 1 0 864.6312 408.8525)"><tspan x="0" y="0" class="st1 st2 st3">40.7</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9984 0 0 1 869.2894 401.8838)"><tspan x="0" y="0" class="st1 st2 st3">56</tspan><tspan x="9.2" y="0" class="st1 st2 st3">9.80 m2</tspan></text>
			<g>
				<text transform="matrix(0.9984 0 0 1 874.554 377.0586)"><tspan x="0" y="0" class="st4 st5 st6">NAVE</tspan><tspan x="4.8" y="11.6" class="st4 st5 st6">12B</tspan></text>
			</g>
		</g>
		<g id="B-13_2_" ng-class="nvtCalamanda.inmovablesClassList[30]" ng-click="nvtCalamanda.showPropertyData(55, '13B', nvtCalamanda.inmovables[30].idProperty)">
			<polyline id="B-N13_2_" class="property pb-sprite-1" points="920.7,302.9 986.7,302.9 986.7,495.1 920.7,495.1 920.7,302.9 			"/>
			<text transform="matrix(0.9984 0 0 1 943.8138 312.8916)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9984 0 0 1 943.8138 490.8721)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1.0016 1 0 930.6185 408.8535)"><tspan x="0" y="0" class="st1 st2 st3">40.7</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9984 0 0 1 935.2737 401.8838)"><tspan x="0" y="0" class="st1 st2 st3">56</tspan><tspan x="9.2" y="0" class="st1 st2 st3">9.80 m2</tspan></text>
			<g>
				<text transform="matrix(0.9984 0 0 1 940.5384 377.0586)"><tspan x="0" y="0" class="st4 st5 st6">NAVE</tspan><tspan x="4.8" y="11.6" class="st4 st5 st6">13B</tspan></text>
			</g>
		</g>
		<g id="B-14_2_" ng-class="nvtCalamanda.inmovablesClassList[31]" ng-click="nvtCalamanda.showPropertyData(55, '14B', nvtCalamanda.inmovables[31].idProperty)">
			<polyline id="B-N14_2_" class="property pb-sprite-2" points="1052.7,495.1 986.7,495.1 986.7,302.9 1052.7,302.9 1052.7,495.1 			"/>
			<text transform="matrix(0.9984 0 0 1 1009.803 312.8916)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9984 0 0 1 1009.803 490.8721)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1.0016 1 0 996.6068 408.8545)"><tspan x="0" y="0" class="st1 st2 st3">40.7</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9984 0 0 1 1001.263 401.8838)"><tspan x="0" y="0" class="st1 st2 st3">56</tspan><tspan x="9.2" y="0" class="st1 st2 st3">9.80 m2</tspan></text>
			<g>
				<text transform="matrix(0.9984 0 0 1 1006.5257 377.0586)"><tspan x="0" y="0" class="st4 st5 st6">NAVE</tspan><tspan x="4.8" y="11.6" class="st4 st5 st6">14B</tspan></text>
			</g>
		</g>
		<g id="B-15_2_" ng-class="nvtCalamanda.inmovablesClassList[32]" ng-click="nvtCalamanda.showPropertyData(55, '15B', nvtCalamanda.inmovables[32].idProperty)">
			<polyline id="B-N15_2_" class="property pb-sprite-1" points="1052.7,302.9 1118.7,302.9 1118.7,495.1 1052.7,495.1 1052.7,302.9 			"/>
			<text transform="matrix(0.9984 0 0 1 1075.7904 312.8916)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9984 0 0 1 1075.7904 490.8721)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1.0016 1 0 1062.5961 408.8525)"><tspan x="0" y="0" class="st1 st2 st3">40.7</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9984 0 0 1 1067.2513 401.8838)"><tspan x="0" y="0" class="st1 st2 st3">56</tspan><tspan x="9.2" y="0" class="st1 st2 st3">9.80 m2</tspan></text>
			<g>
				<text transform="matrix(0.9984 0 0 1 1072.514 377.0586)"><tspan x="0" y="0" class="st4 st5 st6">NAVE</tspan><tspan x="4.8" y="11.6" class="st4 st5 st6">15B</tspan></text>
			</g>
		</g>
		<g id="B-16_2_" ng-class="nvtCalamanda.inmovablesClassList[33]" ng-click="nvtCalamanda.showPropertyData(55, '16B', nvtCalamanda.inmovables[33].idProperty)">
			<polyline id="B-N16_2_" class="property pb-sprite-2" points="1118.7,495.1 1118.7,302.9 1184.7,302.9 1184.7,495.1 1118.7,495.1 			"/>
			<text transform="matrix(0.9984 0 0 1 1141.7806 312.8916)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9984 0 0 1 1141.7806 490.8721)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1.0016 1 0 1128.5785 408.8535)"><tspan x="0" y="0" class="st1 st2 st3">40.7</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9984 0 0 1 1133.2357 401.8838)"><tspan x="0" y="0" class="st1 st2 st3">56</tspan><tspan x="9.2" y="0" class="st1 st2 st3">9.80 m2</tspan></text>
			<g>
				<text transform="matrix(0.9984 0 0 1 1138.5033 377.0586)"><tspan x="0" y="0" class="st4 st5 st6">NAVE</tspan><tspan x="4.8" y="11.6" class="st4 st5 st6">16B</tspan></text>
			</g>
		</g>
		<g id="B-17_2_" ng-class="nvtCalamanda.inmovablesClassList[34]" ng-click="nvtCalamanda.showPropertyData(55, '17B', nvtCalamanda.inmovables[34].idProperty)">
			<polyline id="B-N17_2_" class="property pb-sprite-1" points="1184.7,302.9 1250.7,302.9 1250.7,495.1 1184.7,495.1 1184.7,302.9 			"/>
			<text transform="matrix(0.9984 0 0 1 1207.7631 312.8916)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9984 0 0 1 1207.7631 490.8721)"><tspan x="0" y="0" class="st1 st2 st3">14.0</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0 -1.0016 1 0 1194.5756 408.8525)"><tspan x="0" y="0" class="st1 st2 st3">40.7</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9984 0 0 1 1199.2299 401.8838)"><tspan x="0" y="0" class="st1 st2 st3">56</tspan><tspan x="9.2" y="0" class="st1 st2 st3">9.80 m2</tspan></text>
			<g>
				<text transform="matrix(0.9984 0 0 1 1204.4867 377.0586)"><tspan x="0" y="0" class="st4 st5 st6">NAVE</tspan><tspan x="4.8" y="11.6" class="st4 st5 st6">17B</tspan></text>
			</g>
		</g>
		<g id="B-18_2_" ng-class="nvtCalamanda.inmovablesClassList[35]" ng-click="nvtCalamanda.showPropertyData(55, '18B', nvtCalamanda.inmovables[35].idProperty)">
			<polyline id="B-N18_2_" class="property pb-sprite-2" points="1250.7,302.9 1356.4,302.9 1364.1,495.1 1250.7,495.1 1250.7,302.9 			"/>
			<text transform="matrix(0.9984 0 0 1 1293.6166 312.8916)"><tspan x="0" y="0" class="st1 st2 st3">22.4</tspan><tspan x="16" y="0" class="st1 st2 st3">3</tspan></text>
			<text transform="matrix(0.9984 0 0 1 1297.4584 490.8721)"><tspan x="0" y="0" class="st1 st2 st3">24.0</tspan><tspan x="16" y="0" class="st1 st2 st3">6</tspan></text>
			<g>
				<text transform="matrix(3.839096e-02 1.0008 -0.9993 3.845002e-02 1349.6637 404.9079)" class="st1 st2 st3">3</text>
				<text transform="matrix(3.839096e-02 1.0008 -0.9993 3.845002e-02 1349.4945 400.4971)" class="st1 st2 st3">7</text>
				<text transform="matrix(3.839096e-02 1.0008 -0.9993 3.845002e-02 1349.4108 398.3122)" class="st1 st2 st3">.</text>
				<text transform="matrix(3.839096e-02 1.0008 -0.9993 3.845002e-02 1349.2416 393.9023)" class="st1 st2 st3">0</text>
				<text transform="matrix(3.839096e-02 1.0008 -0.9993 3.845002e-02 1349.0715 389.4964)" class="st1 st2 st3">4</text>
			</g>
			<text transform="matrix(0 -1.0016 1 0 1260.558 408.8545)"><tspan x="0" y="0" class="st1 st2 st3">40.7</tspan><tspan x="16" y="0" class="st1 st2 st3">0</tspan></text>
			<text transform="matrix(0.9984 0 0 1 1288.9271 401.8838)"><tspan x="0" y="0" class="st1 st2 st3">94</tspan><tspan x="9.2" y="0" class="st1 st2 st3">6.06 m2</tspan></text>
			<g>
				<text transform="matrix(0.9984 0 0 1 1290.3392 377.0586)"><tspan x="0" y="0" class="st4 st5 st6">NAVE</tspan><tspan x="4.8" y="11.6" class="st4 st5 st6">18B</tspan></text>
			</g>
		</g>
		<g id="DIVISIONES_1_">
			<line class="st11" x1="194.9" y1="302.9" x2="194.9" y2="495.1"/>
			<line class="st11" x1="260.8" y1="302.9" x2="260.8" y2="495.1"/>
			<line class="st11" x1="326.8" y1="302.9" x2="326.8" y2="495.1"/>
			<line class="st11" x1="392.8" y1="302.9" x2="392.8" y2="495.1"/>
			<line class="st11" x1="458.8" y1="302.9" x2="458.8" y2="495.1"/>
			<line class="st11" x1="524.8" y1="302.9" x2="524.8" y2="495.1"/>
			<line class="st11" x1="590.8" y1="302.9" x2="590.8" y2="495.1"/>
			<line class="st11" x1="656.8" y1="302.9" x2="656.8" y2="495.1"/>
			<line class="st11" x1="722.8" y1="302.9" x2="722.8" y2="495.1"/>
			<line class="st11" x1="788.7" y1="302.9" x2="788.7" y2="495.1"/>
			<line class="st11" x1="854.7" y1="302.9" x2="854.7" y2="495.1"/>
			<line class="st11" x1="920.7" y1="302.9" x2="920.7" y2="495.1"/>
			<line class="st11" x1="986.7" y1="302.9" x2="986.7" y2="495.1"/>
			<line class="st11" x1="1052.7" y1="302.9" x2="1052.7" y2="495.1"/>
			<line class="st11" x1="1118.7" y1="302.9" x2="1118.7" y2="495.1"/>
			<line class="st11" x1="1184.7" y1="302.9" x2="1184.7" y2="495.1"/>
			<line class="st11" x1="1250.7" y1="302.9" x2="1250.7" y2="495.1"/>
		</g>
	</g>
</g>
<g id="COMPLEMENTO">
	<polygon class="st12" points="78.5,319.3 101.3,319.3 101.3,311.2 128.9,311.2 128.9,495.1 78.5,495.1 	"/>
	<line class="st11" x1="128.9" y1="302.9" x2="128.9" y2="495.1"/>
	<path class="st12" d="M77.9,180.7c7.8,0,15.6-0.1,23.3-0.1c0,2.6,0,5.1,0,7.7h27.7L128.2,3.9c-16.9,0.1-33.7,0.3-50.6,0.4
		C77.7,63.1,77.8,121.9,77.9,180.7z"/>
	<line class="st10" x1="128.9" y1="196.4" x2="128.2" y2="4.6"/>
	<g>
		<text transform="matrix(-7.229941e-03 -1 1.107 -1.293072e-02 29.5032 287.9663)" class="st13 st5 st14">ACCESO</text>
		<path class="st13" d="M37.2,277.3c-0.1-2.8-2.6-5.1-5.7-5.2l-0.2-7.5l6.3,6.3l6.3,6.2l-6.1,6.6l-6.1,6.6l-0.2-7.5
			C34.8,282.5,37.2,280.1,37.2,277.3"/>
	</g>
	<g>
		<text transform="matrix(-3.208421e-02 -0.9993 1.1019 -5.604011e-02 36.9674 232.4192)" class="st13 st5 st15">SALIDA</text>
		<path class="st13" d="M25.9,224.5c-0.1-2.8,2.2-5.2,5.3-5.5l-0.3-7.4l-5.9,6.7l-5.9,6.7l6.3,6l6.3,6l-0.3-7.4
			C28.5,229.5,26,227.3,25.9,224.5"/>
	</g>
	<path class="st16" d="M10.8,201.5C7.9,135.9,4.9,70.3,2,4.7C449.7,3,896.7,3,1344.5,1.3c6.8,165.5,14.3,329.2,21.1,494.7
		c-446.8,0-893.5,0-1340.3,0c-3.5-66.5-7-133-10.4-199.5"/>
</g>
</svg>

        </div>
	</div>
    
</body>
</html>
