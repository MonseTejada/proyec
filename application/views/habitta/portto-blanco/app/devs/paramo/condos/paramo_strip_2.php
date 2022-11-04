<!DOCTYPE html>
<html lang="es_MX">
<head>
	<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" contet="ie=edge">
	<meta name="author" content="Ing. Saúl Fernando Torres Hernández">
	<meta name="description" content="Grúpo CCIMA S.A. de C.V." />
	<meta name="keywords" content="grupo ccima, navetec, constructora, servicio de construccion, desarrolladora, llave en mano, built to suit, renta de maquinaria, renta de gruas, maquinaria pesada para construccion, naves industriales, renta naves industriales, venta naves industriales, parques industriales, terrenos, terrenos industriales, terrenos habitacionales, bienes raices, inmobiliaria" />

	<title>Portto Blanco - Páramo Strip Center </title>

	<script type="text/javascript" src="media/assets/js/analytics.js"></script>

	<link rel="stylesheet" type="text/css" href="media/bower_components/materialize/css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="media/assets/css/portto-blanco.css">
	<link rel="stylesheet" type="text/css" href="media/assets/css/helpers.css">
	<link rel="stylesheet" type="text/css" href="media/assets/css/quote.css">

	<script type="text/javascript" src="media/bower_components/jquery.min.js"></script>
	<script type="text/javascript" src="media/bower_components/materialize/js/materialize.min.js"></script>

</head>

<body ng-controller="PBParamoQuoteCtrl as paramo">

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


	<div class="modal-dialog" ng-class="paramo.dialogDisplay">
		<div class="backdrop-dialog" ng-click="paramo.closeDialog()"></div>
		<div class="container-dialog p-20">
			<div class="toolbar-dialog blue-txt">
				Cotización
				<span ng-click="paramo.closeDialog()">
					<img class="btn-close-dialog mt-4" src="media/assets/img/icons/close.svg">
				</span>
			</div>
			<div class="content-dialog">

				<div class="divider"></div>

				<div class="p-20 grey lighten-5">
					<div class="p-5">
						<h6 class="futura-med">Portto Blanco STRIP CENTER B</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light">Número {{paramo.propertyData.number}}</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light">Área {{paramo.propertyData.area}} M&sup2;</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light">Precio por M&sup2; $ {{paramo.propertyData.cost_m2}} MXN</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light" >Precio de ${{paramo.propertyData.total}} MXN</h6>
					</div>

					<div class="divider"></div>

					<div class="py-20 ">
					<h5 class="center-align grey-text futura-book">Promociones de Lanzamiento Digital</h5>
					</div>
					
					<div class="divider"></div>

					<!-- <div class="p-20">
						<h6 class="deep-purple-text futura-light">{{paramo.propertyData.discountPlan1}}% para propiedades pagadas de contado al 100%</h6>
						<h6 class="green-text futura-light">Precio de ${{paramo.propertyData.totalPlan1}} MXN</h6>
						<p class="promo__description grey-text">¡Oferta limitada!</p>
					</div>
					
					<div class="divider"></div>

					<div class="p-20">
						<h6 class="deep-purple-text futura-light">{{paramo.propertyData.discountPlan2}}% de descuento para propiedades con financiamiento hasta 180 Meses</h6>
						<h6 class="green-text futura-light">Precio de ${{paramo.propertyData.totalPlan2}} MXN</h6>
						<p class="promo__description grey-text">¡Oferta limitada!</p>
					</div>

					<div class="divider"></div>
					
					<div class="divider"></div>

					<div class="p-20">
						<h6 class="deep-purple-text futura-light">Compra en {{paramo.month}} y paga la primera mensualidad hasta {{paramo.nextMonth}}</h6>
						<p class="promo__description grey-text">*Pagando el 100% de enganche</p>
						<p class="promo__description grey-text">*Aplica para todas las operaciones a crédito realizadas en {{paramo.month + ' ' + paramo.year}}</p>
					</div>
					
					<div class="divider"></div> -->

					<a class="p-20">
						<p class="blue-text futura-book">¡Apártalo ahora!</p>
						<p class="green-text">Con tan solo $10,000 MXN</p>
						<a href="https://pay.billpocket.com/habitta" class="btn blue-bg no__shadow futura-bold">Apártar ahora</>
					</a>
				</div>

			</div>

			<div class="divider"></div>
			<div class="option-menu-dialog" ng-controller="ContactMenuCtrl as contactCtrl">
				<a class="btn blue-bg no-shadows futura-demi lighter right mt-10" href="https://pay.billpocket.com/habitta">APÁRTAR AQUÍ</a>
				<md-menu class="right mr-20 mt-10"  md-offset="0 -60">
					<button aria-label="Abrir Menu de Contacto" class="btn-flat futura-ligt" ng-click="contactCtrl.openMenu($mdMenu, $event)">
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
					<h1 class="center-align">PÁRAMO STRIP CENTER Locales B</h1>
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

		<svg version="1.1" id="STRIP_CENTER_PÁRAMO" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
	 x="0px" y="0px" viewBox="0 0 1366 1139.2" style="enable-background:new 0 0 1366 1139.2;" xml:space="preserve">
<style type="text/css">
	.st0{fill-rule:evenodd;clip-rule:evenodd;fill:#64768C;}
	.st1{fill:#FFBF00;}
	.st2{font-family:'CenturyGothic-Bold';}
	.st3{font-size:22.5983px;}
	.st4{fill:#FFFFFF;}
	.st5{font-family:'CenturyGothic';}
	.st6{fill-rule:evenodd;clip-rule:evenodd;fill:#4076AE;}
	.st7{fill:url(#SVGID_1_);stroke:#FFFFFF;stroke-width:1.7383;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
	.st8{fill:url(#SVGID_2_);stroke:#FFFFFF;stroke-width:1.7383;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
	.st9{fill:url(#SVGID_3_);stroke:#FFFFFF;stroke-width:1.7383;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
	.st10{fill:url(#SVGID_4_);stroke:#FFFFFF;stroke-width:1.7383;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
	.st11{fill:url(#SVGID_5_);stroke:#FFFFFF;stroke-width:1.7383;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
	.st12{fill:url(#SVGID_6_);stroke:#FFFFFF;stroke-width:1.7383;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
	.st13{fill:url(#SVGID_7_);stroke:#FFFFFF;stroke-width:1.7383;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
	.st14{fill:url(#SVGID_8_);stroke:#FFFFFF;stroke-width:1.7383;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
	.st15{fill:url(#SVGID_9_);stroke:#FFFFFF;stroke-width:1.7383;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
	.st16{fill:url(#SVGID_10_);stroke:#FFFFFF;stroke-width:1.7383;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
	.st17{fill:url(#SVGID_11_);stroke:#FFFFFF;stroke-width:1.7383;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
	.st18{fill:url(#SVGID_12_);stroke:#FFFFFF;stroke-width:1.7383;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
	.st19{fill:none;stroke:#002856;stroke-width:2.6075;stroke-miterlimit:10;}
	.st20{fill:#002856;}
	.st21{font-size:6.9533px;}
</style>
<g id="MACHOTE">
</g>
<g id="BASE">
	<image style="overflow:visible;" width="1366" height="1139" xlink:href="media/assets/img/habitta/portto-blanco/app/devs/paramo/condos/paramo_5.jpg" >
	</image>
</g>
<g id="ISLA_B">
	<g id="B-1_1_" class="property__active" ng-class="paramo.inmovablesClassList[327]" ng-click="paramo.showPropertyData(48, '1B')">
		<polyline id="B-L1_1_" class="property pb-sprite-1" points="85.7,738.2 218.5,918.6 134.3,980.6 1.5,800.2 85.7,738.2 		"/>
		<text transform="matrix(0.592 0.8059 -0.8059 0.592 99.055 827.3924)" class="st1 st2 st3">LOTE 1</text>
		<text transform="matrix(0.8059 -0.592 0.592 0.8059 43.0448 798.7575)"><tspan x="0" y="0" class="st4 st5 st3">7.0</tspan><tspan x="31.1" y="0" class="st4 st5 st3">0</tspan></text>
		<text transform="matrix(0.8059 -0.592 0.592 0.8059 159.7489 954.4925)"><tspan x="0" y="0" class="st4 st5 st3">7.0</tspan><tspan x="31.1" y="0" class="st4 st5 st3">0</tspan></text>
		<text transform="matrix(0.592 0.8059 -0.8059 0.592 60.2538 870.0594)"><tspan x="0" y="0" class="st4 st5 st3">15.0</tspan><tspan x="43.6" y="0" class="st4 st5 st3">0</tspan></text>
		<text transform="matrix(0.592 0.8059 -0.8059 0.592 68.2171 830.0358)"><tspan x="0" y="0" class="st4 st5 st3">10</tspan><tspan x="25" y="0" class="st4 st5 st3">5.00 m2</tspan></text>
	</g>
	<g id="B-2_1_" class="property__active" ng-class="paramo.inmovablesClassList[328]" ng-click="paramo.showPropertyData(48, '2B')">
		<polyline id="B-L2_1_" class="property pb-sprite-2" points="85.7,738.2 169.9,676.2 302.7,856.6 218.5,918.6 85.7,738.2 		"/>
		<text transform="matrix(0.592 0.8059 -0.8059 0.592 183.2636 765.3949)" class="st1 st2 st3">LOTE 2</text>
		<text transform="matrix(0.8059 -0.592 0.592 0.8059 127.252 736.7598)"><tspan x="0" y="0" class="st4 st5 st3">7.0</tspan><tspan x="31.1" y="0" class="st4 st5 st3">0</tspan></text>
		<text transform="matrix(0.8059 -0.592 0.592 0.8059 243.9565 892.4945)"><tspan x="0" y="0" class="st4 st5 st3">7.0</tspan><tspan x="31.1" y="0" class="st4 st5 st3">0</tspan></text>
		<text transform="matrix(0.592 0.8059 -0.8059 0.592 144.4609 808.0535)"><tspan x="0" y="0" class="st4 st5 st3">15.0</tspan><tspan x="43.6" y="0" class="st4 st5 st3">0</tspan></text>
		<text transform="matrix(0.592 0.8059 -0.8059 0.592 152.4225 768.0358)"><tspan x="0" y="0" class="st4 st5 st3">10</tspan><tspan x="25" y="0" class="st4 st5 st3">5.00 m2</tspan></text>
	</g>
	<g id="B-3_1_" class="property__active" ng-class="paramo.inmovablesClassList[329]" ng-click="paramo.showPropertyData(48, '3B')">
		<polyline id="B-L3_1_" class="property pb-sprite-1" points="254.1,614.2 387,794.6 302.7,856.6 169.9,676.2 254.1,614.2 		"/>
		<text transform="matrix(0.592 0.8059 -0.8059 0.592 267.4696 703.3884)" class="st1 st2 st3">LOTE 3</text>
		<text transform="matrix(0.8059 -0.592 0.592 0.8059 211.4589 674.7612)"><tspan x="0" y="0" class="st4 st5 st3">7.0</tspan><tspan x="31.1" y="0" class="st4 st5 st3">0</tspan></text>
		<text transform="matrix(0.8059 -0.592 0.592 0.8059 328.1642 830.488)"><tspan x="0" y="0" class="st4 st5 st3">7.0</tspan><tspan x="31.1" y="0" class="st4 st5 st3">0</tspan></text>
		<text transform="matrix(0.592 0.8059 -0.8059 0.592 228.6665 746.0521)"><tspan x="0" y="0" class="st4 st5 st3">15.0</tspan><tspan x="43.6" y="0" class="st4 st5 st3">0</tspan></text>
		<text transform="matrix(0.592 0.8059 -0.8059 0.592 236.63 706.0294)"><tspan x="0" y="0" class="st4 st5 st3">10</tspan><tspan x="25" y="0" class="st4 st5 st3">5.00 m2</tspan></text>
	</g>
	<g id="B-4_1_" class="property__active" ng-class="paramo.inmovablesClassList[330]" ng-click="paramo.showPropertyData(48, '4B')">
		<polyline id="B-L4_1_" class="property pb-sprite-2" points="338.3,552.2 471.2,732.6 387,794.6 254.1,614.2 338.3,552.2 		"/>
		<text transform="matrix(0.592 0.8059 -0.8059 0.592 351.6779 641.39)" class="st1 st2 st3">LOTE 4</text>
		<text transform="matrix(0.8059 -0.592 0.592 0.8059 295.6668 612.7558)"><tspan x="0" y="0" class="st4 st5 st3">7.0</tspan><tspan x="31.1" y="0" class="st4 st5 st3">0</tspan></text>
		<text transform="matrix(0.8059 -0.592 0.592 0.8059 412.3666 768.4854)"><tspan x="0" y="0" class="st4 st5 st3">7.0</tspan><tspan x="31.1" y="0" class="st4 st5 st3">0</tspan></text>
		<text transform="matrix(0.592 0.8059 -0.8059 0.592 312.8746 684.0538)"><tspan x="0" y="0" class="st4 st5 st3">15.0</tspan><tspan x="43.6" y="0" class="st4 st5 st3">0</tspan></text>
		<text transform="matrix(0.592 0.8059 -0.8059 0.592 320.8369 644.0308)"><tspan x="0" y="0" class="st4 st5 st3">10</tspan><tspan x="25" y="0" class="st4 st5 st3">5.00 m2</tspan></text>
	</g>
	<g id="B-5_1_" class="property__active" ng-class="paramo.inmovablesClassList[331]" ng-click="paramo.showPropertyData(48, '5B')">
		<polyline id="B-L5_1_" class="property pb-sprite-1" points="422.5,490.2 555.4,670.6 471.2,732.6 338.3,552.2 422.5,490.2 		"/>
		<text transform="matrix(0.592 0.8059 -0.8059 0.592 435.8886 579.3885)" class="st1 st2 st3">LOTE 5</text>
		<text transform="matrix(0.8059 -0.592 0.592 0.8059 379.874 550.7557)"><tspan x="0" y="0" class="st4 st5 st3">7.0</tspan><tspan x="31.1" y="0" class="st4 st5 st3">0</tspan></text>
		<text transform="matrix(0.8059 -0.592 0.592 0.8059 496.5822 706.4901)"><tspan x="0" y="0" class="st4 st5 st3">7.0</tspan><tspan x="31.1" y="0" class="st4 st5 st3">0</tspan></text>
		<text transform="matrix(0.592 0.8059 -0.8059 0.592 397.0829 622.0505)"><tspan x="0" y="0" class="st4 st5 st3">15.0</tspan><tspan x="43.6" y="0" class="st4 st5 st3">0</tspan></text>
		<text transform="matrix(0.592 0.8059 -0.8059 0.592 405.0403 582.0275)"><tspan x="0" y="0" class="st4 st5 st3">10</tspan><tspan x="25" y="0" class="st4 st5 st3">5.00 m2</tspan></text>
	</g>
	<g id="B-6_1_" class="property__active" ng-class="paramo.inmovablesClassList[332]" ng-click="paramo.showPropertyData(48, '6B')">
		<polyline id="B-L6_1_" class="property pb-sprite-2" points="506.7,428.2 639.6,608.6 555.4,670.6 422.5,490.2 506.7,428.2 		"/>
		<text transform="matrix(0.592 0.8059 -0.8059 0.592 520.0936 517.3877)" class="st1 st2 st3">LOTE 6</text>
		<text transform="matrix(0.8059 -0.592 0.592 0.8059 464.0791 488.7535)"><tspan x="0" y="0" class="st4 st5 st3">7.0</tspan><tspan x="31.1" y="0" class="st4 st5 st3">0</tspan></text>
		<text transform="matrix(0.8059 -0.592 0.592 0.8059 580.7877 644.4852)"><tspan x="0" y="0" class="st4 st5 st3">7.0</tspan><tspan x="31.1" y="0" class="st4 st5 st3">0</tspan></text>
		<text transform="matrix(0.592 0.8059 -0.8059 0.592 481.286 560.0498)"><tspan x="0" y="0" class="st4 st5 st3">15.0</tspan><tspan x="43.6" y="0" class="st4 st5 st3">0</tspan></text>
		<text transform="matrix(0.592 0.8059 -0.8059 0.592 489.247 520.0265)"><tspan x="0" y="0" class="st4 st5 st3">10</tspan><tspan x="25" y="0" class="st4 st5 st3">5.00 m2</tspan></text>
	</g>
	<g id="B-7_1_" class="property__active" ng-class="paramo.inmovablesClassList[333]" ng-click="paramo.showPropertyData(48, '7B')">
		<polyline id="B-L7_1_" class="property pb-sprite-1" points="590.9,366.2 723.8,546.6 639.6,608.6 506.7,428.2 590.9,366.2 		"/>
		<text transform="matrix(0.592 0.8059 -0.8059 0.592 604.2975 455.3876)" class="st1 st2 st3">LOTE 7</text>
		<text transform="matrix(0.8059 -0.592 0.592 0.8059 548.2845 426.7524)"><tspan x="0" y="0" class="st4 st5 st3">7.0</tspan><tspan x="31.1" y="0" class="st4 st5 st3">0</tspan></text>
		<text transform="matrix(0.8059 -0.592 0.592 0.8059 664.9908 582.4845)"><tspan x="0" y="0" class="st4 st5 st3">7.0</tspan><tspan x="31.1" y="0" class="st4 st5 st3">0</tspan></text>
		<text transform="matrix(0.592 0.8059 -0.8059 0.592 565.4974 498.0467)"><tspan x="0" y="0" class="st4 st5 st3">15.0</tspan><tspan x="43.6" y="0" class="st4 st5 st3">0</tspan></text>
		<text transform="matrix(0.592 0.8059 -0.8059 0.592 573.4583 458.0235)"><tspan x="0" y="0" class="st4 st5 st3">10</tspan><tspan x="25" y="0" class="st4 st5 st3">5.00 m2</tspan></text>
	</g>
	<g id="B-8_1_" class="property__active" ng-class="paramo.inmovablesClassList[334]" ng-click="paramo.showPropertyData(48, '8B')">
		<polyline id="B-L8_1_" class="property pb-sprite-2" points="590.9,366.2 675.1,304.2 808,484.6 723.8,546.6 590.9,366.2 		"/>
		<text transform="matrix(0.592 0.8059 -0.8059 0.592 688.5018 393.3824)" class="st1 st2 st3">LOTE 8</text>
		<text transform="matrix(0.8059 -0.592 0.592 0.8059 632.4961 364.7491)"><tspan x="0" y="0" class="st4 st5 st3">7.0</tspan><tspan x="31.1" y="0" class="st4 st5 st3">0</tspan></text>
		<text transform="matrix(0.8059 -0.592 0.592 0.8059 749.196 520.4847)"><tspan x="0" y="0" class="st4 st5 st3">7.0</tspan><tspan x="31.1" y="0" class="st4 st5 st3">0</tspan></text>
		<text transform="matrix(0.592 0.8059 -0.8059 0.592 649.7027 436.0455)"><tspan x="0" y="0" class="st4 st5 st3">15.0</tspan><tspan x="43.6" y="0" class="st4 st5 st3">0</tspan></text>
		<text transform="matrix(0.592 0.8059 -0.8059 0.592 657.6652 396.0236)"><tspan x="0" y="0" class="st4 st5 st3">10</tspan><tspan x="25" y="0" class="st4 st5 st3">5.00 m2</tspan></text>
	</g>
	<g id="B-9_1_" class="property__active" ng-class="paramo.inmovablesClassList[335]" ng-click="paramo.showPropertyData(48, '9B')">
		<polyline id="B-L9_1_" class="property pb-sprite-1" points="675.1,304.2 759.3,242.2 892.2,422.6 808,484.6 675.1,304.2 		"/>
		<text transform="matrix(0.592 0.8059 -0.8059 0.592 772.7147 331.3842)" class="st1 st2 st3">LOTE 9</text>
		<text transform="matrix(0.8059 -0.592 0.592 0.8059 716.7002 302.7488)"><tspan x="0" y="0" class="st4 st5 st3">7.0</tspan><tspan x="31.1" y="0" class="st4 st5 st3">0</tspan></text>
		<text transform="matrix(0.8059 -0.592 0.592 0.8059 833.4094 458.4837)"><tspan x="0" y="0" class="st4 st5 st3">7.0</tspan><tspan x="31.1" y="0" class="st4 st5 st3">0</tspan></text>
		<text transform="matrix(0.592 0.8059 -0.8059 0.592 733.9084 374.0478)"><tspan x="0" y="0" class="st4 st5 st3">15.0</tspan><tspan x="43.6" y="0" class="st4 st5 st3">0</tspan></text>
		<text transform="matrix(0.592 0.8059 -0.8059 0.592 741.8699 334.0241)"><tspan x="0" y="0" class="st4 st5 st3">10</tspan><tspan x="25" y="0" class="st4 st5 st3">5.00 m2</tspan></text>
	</g>
	<g id="B-10_1_" class="property__active" ng-class="paramo.inmovablesClassList[336]" ng-click="paramo.showPropertyData(48, '10B')">
		<polyline id="B-L10_1_" class="property pb-sprite-2" points="759.3,242.2 843.5,180.2 976.4,360.6 892.2,422.6 759.3,242.2 		"/>
		<text transform="matrix(0.592 0.8059 -0.8059 0.592 853.4151 264.6243)" class="st1 st2 st3">LOTE 10</text>
		<text transform="matrix(0.8059 -0.592 0.592 0.8059 800.9043 240.745)"><tspan x="0" y="0" class="st4 st5 st3">7.0</tspan><tspan x="31.1" y="0" class="st4 st5 st3">0</tspan></text>
		<text transform="matrix(0.8059 -0.592 0.592 0.8059 917.6105 396.4772)"><tspan x="0" y="0" class="st4 st5 st3">7.0</tspan><tspan x="31.1" y="0" class="st4 st5 st3">0</tspan></text>
		<text transform="matrix(0.592 0.8059 -0.8059 0.592 818.121 312.0437)"><tspan x="0" y="0" class="st4 st5 st3">15.0</tspan><tspan x="43.6" y="0" class="st4 st5 st3">0</tspan></text>
		<text transform="matrix(0.592 0.8059 -0.8059 0.592 826.0839 272.0215)"><tspan x="0" y="0" class="st4 st5 st3">10</tspan><tspan x="25" y="0" class="st4 st5 st3">5.00 m2</tspan></text>
	</g>
	<g id="B-11_1_" class="property__active" ng-class="paramo.inmovablesClassList[337]" ng-click="paramo.showPropertyData(48, '11B')">
		<polyline id="B-L11_1_" class="property pb-sprite-1" points="843.5,180.2 927.7,118.2 1060.6,298.6 976.4,360.6 843.5,180.2 		"/>
		<text transform="matrix(0.592 0.8059 -0.8059 0.592 937.6223 202.6243)" class="st1 st2 st3">LOTE 11</text>
		<text transform="matrix(0.8059 -0.592 0.592 0.8059 885.1193 178.7465)"><tspan x="0" y="0" class="st4 st5 st3">7.0</tspan><tspan x="31.1" y="0" class="st4 st5 st3">0</tspan></text>
		<text transform="matrix(0.8059 -0.592 0.592 0.8059 1001.8174 334.4785)"><tspan x="0" y="0" class="st4 st5 st3">7.0</tspan><tspan x="31.1" y="0" class="st4 st5 st3">0</tspan></text>
		<text transform="matrix(0.592 0.8059 -0.8059 0.592 902.3236 250.0398)"><tspan x="0" y="0" class="st4 st5 st3">15.0</tspan><tspan x="43.6" y="0" class="st4 st5 st3">0</tspan></text>
		<text transform="matrix(0.592 0.8059 -0.8059 0.592 912.8804 208.1073)"><tspan x="0" y="0" class="st4 st5 st3">10</tspan><tspan x="25" y="0" class="st4 st5 st3">5.00 m2</tspan></text>
	</g>
	<g id="B-12_1_" class="property__active" ng-class="paramo.inmovablesClassList[338]" ng-click="paramo.showPropertyData(48, '12B')">
		<polyline id="B-L12_1_" class="property pb-sprite-2" points="927.7,118.2 1012,56.2 1144.8,236.6 1060.6,298.6 927.7,118.2 		"/>
		<text transform="matrix(0.592 0.8059 -0.8059 0.592 1021.8354 140.6235)" class="st1 st2 st3">LOTE 12</text>
		<text transform="matrix(0.8059 -0.592 0.592 0.8059 969.3235 116.7437)"><tspan x="0" y="0" class="st4 st5 st3">7.0</tspan><tspan x="31.1" y="0" class="st4 st5 st3">0</tspan></text>
		<text transform="matrix(0.8059 -0.592 0.592 0.8059 1086.0309 272.4775)"><tspan x="0" y="0" class="st4 st5 st3">7.0</tspan><tspan x="31.1" y="0" class="st4 st5 st3">0</tspan></text>
		<text transform="matrix(0.592 0.8059 -0.8059 0.592 986.528 188.0405)"><tspan x="0" y="0" class="st4 st5 st3">15.0</tspan><tspan x="43.6" y="0" class="st4 st5 st3">0</tspan></text>
		<text transform="matrix(0.592 0.8059 -0.8059 0.592 994.4899 148.0178)"><tspan x="0" y="0" class="st4 st5 st3">10</tspan><tspan x="25" y="0" class="st4 st5 st3">5.00 m2</tspan></text>
	</g>
	<g id="B-13_1_" class="property__active" ng-class="paramo.inmovablesClassList[339]" ng-click="paramo.showPropertyData(48, '13B')">
		<polyline id="B-L13_1_" class="property pb-sprite-1" points="1088.2,0 1221.1,180.5 1144.8,236.6 1012,56.2 1088.2,0 		"/>
		<text transform="matrix(0.592 0.8059 -0.8059 0.592 1106.2598 78.9171)" class="st1 st2 st3">LOTE 13</text>
		<text transform="matrix(0.8059 -0.592 0.592 0.8059 1049.5524 57.6721)"><tspan x="0" y="0" class="st4 st5 st3">6.3</tspan><tspan x="31.1" y="0" class="st4 st5 st3">4</tspan></text>
		<text transform="matrix(0.8059 -0.592 0.592 0.8059 1166.2565 213.4034)"><tspan x="0" y="0" class="st4 st5 st3">6.3</tspan><tspan x="31.1" y="0" class="st4 st5 st3">4</tspan></text>
		<text transform="matrix(0.592 0.8059 -0.8059 0.592 1070.7332 126.0359)"><tspan x="0" y="0" class="st4 st5 st3">15.0</tspan><tspan x="43.6" y="0" class="st4 st5 st3">0</tspan></text>
		<text transform="matrix(0.592 0.8059 -0.8059 0.592 1083.5105 90.918)"><tspan x="0" y="0" class="st4 st5 st3">9</tspan><tspan x="12.5" y="0" class="st4 st5 st3">5.08 m2</tspan></text>
	</g>
	<g id="DIVISIONES_1_">
		<linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="85.6815" y1="828.4011" x2="218.543" y2="828.4011">
			<stop  offset="0" style="stop-color:#FFFFFF"/>
			<stop  offset="1" style="stop-color:#000000"/>
		</linearGradient>
		<line class="st7" x1="85.7" y1="738.2" x2="218.5" y2="918.6"/>
		<linearGradient id="SVGID_2_" gradientUnits="userSpaceOnUse" x1="169.8862" y1="766.3994" x2="302.7499" y2="766.3994">
			<stop  offset="0" style="stop-color:#FFFFFF"/>
			<stop  offset="1" style="stop-color:#000000"/>
		</linearGradient>
		<line class="st8" x1="169.9" y1="676.2" x2="302.7" y2="856.6"/>
		<linearGradient id="SVGID_3_" gradientUnits="userSpaceOnUse" x1="254.0932" y1="704.3975" x2="386.9569" y2="704.3975">
			<stop  offset="0" style="stop-color:#FFFFFF"/>
			<stop  offset="1" style="stop-color:#000000"/>
		</linearGradient>
		<line class="st9" x1="254.1" y1="614.2" x2="387" y2="794.6"/>
		<linearGradient id="SVGID_4_" gradientUnits="userSpaceOnUse" x1="338.3002" y1="642.3958" x2="471.1639" y2="642.3958">
			<stop  offset="0" style="stop-color:#FFFFFF"/>
			<stop  offset="1" style="stop-color:#000000"/>
		</linearGradient>
		<line class="st10" x1="338.3" y1="552.2" x2="471.2" y2="732.6"/>
		<linearGradient id="SVGID_5_" gradientUnits="userSpaceOnUse" x1="422.5071" y1="580.394" x2="555.3709" y2="580.394">
			<stop  offset="0" style="stop-color:#FFFFFF"/>
			<stop  offset="1" style="stop-color:#000000"/>
		</linearGradient>
		<line class="st11" x1="422.5" y1="490.2" x2="555.4" y2="670.6"/>
		<linearGradient id="SVGID_6_" gradientUnits="userSpaceOnUse" x1="506.7141" y1="518.3922" x2="639.5779" y2="518.3922">
			<stop  offset="0" style="stop-color:#FFFFFF"/>
			<stop  offset="1" style="stop-color:#000000"/>
		</linearGradient>
		<line class="st12" x1="506.7" y1="428.2" x2="639.6" y2="608.6"/>
		<linearGradient id="SVGID_7_" gradientUnits="userSpaceOnUse" x1="590.9212" y1="456.3904" x2="723.7849" y2="456.3904">
			<stop  offset="0" style="stop-color:#FFFFFF"/>
			<stop  offset="1" style="stop-color:#000000"/>
		</linearGradient>
		<line class="st13" x1="590.9" y1="366.2" x2="723.8" y2="546.6"/>
		<linearGradient id="SVGID_8_" gradientUnits="userSpaceOnUse" x1="675.1281" y1="394.3886" x2="807.9919" y2="394.3886">
			<stop  offset="0" style="stop-color:#FFFFFF"/>
			<stop  offset="1" style="stop-color:#000000"/>
		</linearGradient>
		<line class="st14" x1="675.1" y1="304.2" x2="808" y2="484.6"/>
		<linearGradient id="SVGID_9_" gradientUnits="userSpaceOnUse" x1="759.3351" y1="332.3868" x2="892.1987" y2="332.3868">
			<stop  offset="0" style="stop-color:#FFFFFF"/>
			<stop  offset="1" style="stop-color:#000000"/>
		</linearGradient>
		<line class="st15" x1="759.3" y1="242.2" x2="892.2" y2="422.6"/>
		<linearGradient id="SVGID_10_" gradientUnits="userSpaceOnUse" x1="843.5421" y1="270.385" x2="976.4035" y2="270.385">
			<stop  offset="0" style="stop-color:#FFFFFF"/>
			<stop  offset="1" style="stop-color:#000000"/>
		</linearGradient>
		<line class="st16" x1="843.5" y1="180.2" x2="976.4" y2="360.6"/>
		<linearGradient id="SVGID_11_" gradientUnits="userSpaceOnUse" x1="927.7492" y1="208.3821" x2="1060.6106" y2="208.3821">
			<stop  offset="0" style="stop-color:#FFFFFF"/>
			<stop  offset="1" style="stop-color:#000000"/>
		</linearGradient>
		<line class="st17" x1="927.7" y1="118.2" x2="1060.6" y2="298.6"/>
		<linearGradient id="SVGID_12_" gradientUnits="userSpaceOnUse" x1="1011.954" y1="146.3804" x2="1144.8176" y2="146.3804">
			<stop  offset="0" style="stop-color:#FFFFFF"/>
			<stop  offset="1" style="stop-color:#000000"/>
		</linearGradient>
		<line class="st18" x1="1012" y1="56.2" x2="1144.8" y2="236.6"/>
	</g>
</g>
<g id="COMPLEMENTO">
	<path class="st19" d="M1.5,801.1c361.6-266.5,723.2-533,1084.8-799.5L1220,178.8C857.9,446.1,495.8,713.4,133.7,980.7
		C89.6,920.8,45.5,861,1.5,801.1z"/>
	<text transform="matrix(0.6113 0.7914 -0.7914 0.6113 142.8926 985.9704)" class="st20 st5 st21">CONTENEDORES</text>
	<text transform="matrix(0.6275 0.7786 -0.7786 0.6275 1214.7085 187.1236)" class="st20 st5 st21">MEDIDORES</text>
</g>
</svg>


    </div>



</body>
</html>