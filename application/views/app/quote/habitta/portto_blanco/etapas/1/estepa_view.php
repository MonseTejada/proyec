
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
	<link rel="stylesheet" type="text/css" href="media/assets/css/habitta-quote.css">
	<link rel="stylesheet" type="text/css" href="media/assets/css/helpers.css">

	<script type="text/javascript" src="media/bower_components/jquery.min.js"></script>
	<script type="text/javascript" src="media/bower_components/materialize/js/materialize.min.js"></script>

</head>

<body ng-controller="EstepaQuoteCtrl as pbEstepa">

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


	<div class="modal-dialog" ng-class="pbEstepa.dialogDisplay">
		<div class="backdrop-dialog" ng-click="pbEstepa.closeDialog()"></div>
		<div class="container-dialog p-20">
			<div class="toolbar-dialog blue-txt">
				Cotización
				<span ng-click="pbEstepa.closeDialog()">
					<img class="btn-close-dialog mt-4" src="media/assets/img/icons/close.svg">
				</span>
			</div>
			<div class="content-dialog">

				<div class="divider"></div>

				<div class="p-20 grey lighten-5">
					<div class="p-5">
						<h6 class="futura-med">Portto Blanco {{pbEstepa.propertyData.condominium}}</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light">Número {{pbEstepa.propertyData.number}}</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light">Área {{pbEstepa.propertyData.area}} M&sup2;</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light">Precio por M&sup2; {{pbEstepa.propertyData.cost_m2}} MXN</h6>
					</div>
					<div class="p-5">
						<h6 class="futura-light green-text" style="text-decoration: line-through;">Precio de ${{pbEstepa.propertyData.total}} MXN</h6>
					</div>

					<div class="divider"></div>

					<div class="py-20 ">
					<h5 class="center-align grey-text futura-book">Promociones de Lanzamiento Digital</h5>
					</div>
					
					<div class="divider"></div>

					<div class="p-20">
						<h6 class="deep-purple-text futura-light">{{pbEstepa.propertyData.discountPlan1}}% para propiedades pagadas de contado al 100%</h6>
						<h6 class="green-text futura-light">Precio de ${{pbEstepa.propertyData.totalPlan1}} MXN</h6>
						<p class="promo__description grey-text">¡Oferta limitada!</p>
					</div>
					
					<div class="divider"></div>

					<div class="p-20">
						<h6 class="deep-purple-text futura-light">{{pbEstepa.propertyData.discountPlan2}}% de descuento para propiedades con financiamiento hasta 180 Meses</h6>
						<h6 class="green-text futura-light">Precio de ${{pbEstepa.propertyData.totalPlan2}} MXN</h6>
						<p class="promo__description grey-text">¡Oferta limitada!</p>
					</div>

					<div class="divider"></div>

					
					
					<div class="divider"></div>

					<div class="p-20">
						<h6 class="deep-purple-text futura-light">Compra en {{pbEstepa.month}} y paga la primera mensualidad hasta {{pbEstepa.nextMonth}}</h6>
						<p class="promo__description grey-text">*Pagando el 100% de enganche</p>
						<p class="promo__description grey-text">*Aplica para todas las operaciones a crédito realizadas en {{pbEstepa.month + ' ' + pbEstepa.year}}</p>
					</div>
					
					<div class="divider"></div>

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
					<h1 class="center-align">CLUSTER ESTEPA</h1>
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
				<div class="color-block mustard-bg left"></div>
				<p class="pl-40 py-2">NO DISPONIBLE</p>
			</div>
		</div>

		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="quote-map mt-64" viewBox="0 0 784.2 434.2" xml:space="preserve">

			<title>Estepa</title>

			<g>

				<image class="quote-plano" width="3307" height="1831" xlink:href="media/assets/img/habitta/portto-blanco/app/quote/estepa/estepa.jpg"  transform="matrix(0.2371 0 0 0.2371 0 0)"/>


				<!-- ********** Estepa ********** -->

				<!-- ***** Estepa 1 ***** -->

				<!-- *** Isla 1 *** -->

				<!-- 1 -->
				<polygon class="property pb-sprite-1" points="206.5,18.5 220.6,19.6 218.3,47.9 204,46.7" ng-class="pbEstepa.inmovablesClassList[0]" ng-click="pbEstepa.showPropertyData(1, '1')"/>

				<!-- 2 -->
				<polygon class="property pb-sprite-2" points="220.6,19.6 234.8,20.8 232.4,49.2 218.3,47.9" ng-class="pbEstepa.inmovablesClassList[1]" ng-click="pbEstepa.showPropertyData(1, '2')"/>

				<!-- 3 -->
				<polygon class="property pb-sprite-1" points="234.8,20.8 248.9,22 246.5,50.3 232.4,49.2" ng-class="pbEstepa.inmovablesClassList[2]" ng-click="pbEstepa.showPropertyData(1, '3')"/>

				<!-- 4 -->
				<polygon class="property pb-sprite-2" points="248.9,22 263,23.2 260.6,51.5 246.5,50.3" ng-class="pbEstepa.inmovablesClassList[3]" ng-click="pbEstepa.showPropertyData(1, '4')"/>

				<!-- 5 -->
				<rect x="254.8" y="30.9" transform="matrix(8.315904e-02 -0.9965 0.9965 8.315904e-02 208.7062 302.8218)" class="property pb-sprite-1" width="28.3" height="14.2" ng-class="pbEstepa.inmovablesClassList[4]" ng-click="pbEstepa.showPropertyData(1, '5')"/>

				<!-- 6 -->
				<polygon class="property pb-sprite-2" points="277.1,24.4 291.3,25.6 289,53.8 274.8,52.7" ng-class="pbEstepa.inmovablesClassList[5]" ng-click="pbEstepa.showPropertyData(1, '6')"/>

				<!-- 7 -->
				<polygon class="property pb-sprite-1" points="291.3,25.6 305.5,26.8 303.1,55 289,53.8" ng-class="pbEstepa.inmovablesClassList[6]" ng-click="pbEstepa.showPropertyData(1, '7')"/>

				<!-- *** Isla 2 *** -->

				<!-- 8 -->
				<polygon class="property pb-sprite-2" points="320.7,42.3 349,44.6 350.2,30.5 321.9,28.2" ng-class="pbEstepa.inmovablesClassList[7]" ng-click="pbEstepa.showPropertyData(1, '8')"/>

				<!-- 9 -->
				<polygon class="property pb-sprite-1" points="320.7,42.3 349,44.6 347.8,58.8 319.6,56.4" ng-class="pbEstepa.inmovablesClassList[8]" ng-click="pbEstepa.showPropertyData(1, '9')"/>

				<!-- 10 -->
				<polygon class="property pb-sprite-2" points="318.4,70.6 346.6,73 347.8,58.8 319.6,56.4" ng-class="pbEstepa.inmovablesClassList[9]" ng-click="pbEstepa.showPropertyData(1, '10')"/>

				<!-- 11 -->
				<polygon class="property pb-sprite-1" points="318.4,70.6 346.6,73 345.5,87.2 317.1,84.8" ng-class="pbEstepa.inmovablesClassList[10]" ng-click="pbEstepa.showPropertyData(1, '11')"/>

				<!-- 12 -->
				<polygon class="property pb-sprite-2" points="316,98.9 344.3,101.3 345.5,87.2 317.1,84.8" ng-class="pbEstepa.inmovablesClassList[11]" ng-click="pbEstepa.showPropertyData(1, '12')"/>

				<!-- 13 -->
				<path class="property pb-sprite-1" d="M316,98.9l28.3,2.3l-1.3,14.1l-28.2-2.3C314.8,113.1,315.8,98.9,316,98.9" ng-class="pbEstepa.inmovablesClassList[12]" ng-click="pbEstepa.showPropertyData(1, '13')"/>

				<!-- 14 -->
				<polygon class="property pb-sprite-2" points="313.6,127.2 341.9,129.5 343,115.4 314.8,113.1" ng-class="pbEstepa.inmovablesClassList[13]" ng-click="pbEstepa.showPropertyData(1, '14')"/>

				<!-- 15 -->
				<polygon class="property pb-sprite-1" points="313.6,127.2 341.9,129.5 340.7,143.8 312.5,141.3" ng-class="pbEstepa.inmovablesClassList[14]" ng-click="pbEstepa.showPropertyData(1, '15')"/>

				<!-- 16 -->
				<polygon class="property pb-sprite-2" points="311.1,155.5 339.5,157.9 340.7,143.8 312.5,141.3" ng-class="pbEstepa.inmovablesClassList[15]" ng-click="pbEstepa.showPropertyData(1, '16')"/>

				<!-- 17 -->
				<polygon class="property pb-sprite-1" points="311.1,155.5 339.5,157.9 338.4,172 310,169.7" ng-class="pbEstepa.inmovablesClassList[16]" ng-click="pbEstepa.showPropertyData(1, '17')"/>

				<!-- 18 -->
				<polygon class="property pb-sprite-2" points="308.8,183.8 337,186.1 338.4,172 310,169.7" ng-class="pbEstepa.inmovablesClassList[17]" ng-click="pbEstepa.showPropertyData(1, '18')"/>

				<!-- 19 -->
				<polygon class="property pb-sprite-1" points="308.8,183.8 337,186.1 335.9,200.2 307.7,197.9" ng-class="pbEstepa.inmovablesClassList[18]" ng-click="pbEstepa.showPropertyData(1, '19')"/>

				<!-- 20 -->
				<polygon class="property pb-sprite-2" points="306.5,212 334.7,214.5 335.9,200.2 307.7,197.9" ng-class="pbEstepa.inmovablesClassList[19]" ng-click="pbEstepa.showPropertyData(1, '20')"/>

				<!-- 21 -->
				<polygon class="property pb-sprite-1" points="306.5,212 334.7,214.5 333.6,228.6 305.2,226.2" ng-class="pbEstepa.inmovablesClassList[20]" ng-click="pbEstepa.showPropertyData(1, '21')"/>

				<!-- 22 -->
				<polygon class="property pb-sprite-2" points="304,240.4 332.4,242.7 333.6,228.6 305.2,226.2" ng-class="pbEstepa.inmovablesClassList[21]" ng-click="pbEstepa.showPropertyData(1, '22')"/>

				<!-- 23 -->
				<polygon class="property pb-sprite-1 red" points="304,240.4 332.4,242.7 331.2,256.8 302.8,254.5" ng-class="pbEstepa.inmovablesClassList[22]" ng-click="pbEstepa.showPropertyData(1, '23')"/>

				<!-- 24 -->
				<polygon class="property pb-sprite-2" points="301.7,268.6 329.9,271 331.2,256.8 302.8,254.5" ng-class="pbEstepa.inmovablesClassList[23]" ng-click="pbEstepa.showPropertyData(1, '24')"/>

				<!-- 25 -->
				<polygon class="property pb-sprite-1" points="301.7,268.6 329.9,271 328.8,285.1 300.5,282.7" ng-class="pbEstepa.inmovablesClassList[24]" ng-click="pbEstepa.showPropertyData(1, '25')"/>

				<!-- 26 -->
				<polygon class="property pb-sprite-2" points="299.3,297 327.6,299.3 328.8,285.1 300.5,282.7" ng-class="pbEstepa.inmovablesClassList[25]" ng-click="pbEstepa.showPropertyData(1, '26')"/>

				<!-- 27 -->
				<polygon class="property pb-sprite-1" points="299.3,297 327.6,299.3 326.4,313.5 298,311.1" ng-class="pbEstepa.inmovablesClassList[26]" ng-click="pbEstepa.showPropertyData(1, '27')"/>

				<!-- 28 -->
				<polygon class="property pb-sprite-2" points="296.9,325.2 325.2,327.6 326.4,313.5 298,311.1" ng-class="pbEstepa.inmovablesClassList[27]" ng-click="pbEstepa.showPropertyData(1, '28')"/>

				<!-- 29 -->
				<polygon class="property pb-sprite-1" points="296.9,325.2 325.2,327.6 324,341.7 295.7,339.3" ng-class="pbEstepa.inmovablesClassList[28]" ng-click="pbEstepa.showPropertyData(1, '29')"/>

				<!-- 30 -->
				<polygon class="property pb-sprite-2" points="294.5,353.5 322.8,355.8 324,341.7 295.7,339.3" ng-class="pbEstepa.inmovablesClassList[29]" ng-click="pbEstepa.showPropertyData(1, '30')"/>

				<!-- 31 -->
				<polygon class="property pb-sprite-1" points="294.5,353.5 322.8,355.8 321.6,370.1 293.4,367.6" ng-class="pbEstepa.inmovablesClassList[30]" ng-click="pbEstepa.showPropertyData(1, '31')"/>

				<!-- 32 -->
				<polygon class="property pb-sprite-2" points="292.2,381.8 320.5,384.2 321.6,370.1 293.4,367.6" ng-class="pbEstepa.inmovablesClassList[31]" ng-click="pbEstepa.showPropertyData(1, '32')"/>

				<!-- *** Isla 3 *** -->

				<!-- 33 -->
				<polygon class="property pb-sprite-2" points="261.9,354.1 277.7,356 274.7,391.4 258.8,389.4" ng-class="pbEstepa.inmovablesClassList[32]" ng-click="pbEstepa.showPropertyData(1, '33')"/>

				<!-- 34 -->
				<polygon class="property pb-sprite-1" points="246.1,352.3 261.9,354.1 258.8,389.4 243,387.6" ng-class="pbEstepa.inmovablesClassList[33]" ng-click="pbEstepa.showPropertyData(1, '34')"/>

				<!-- 35 -->
				<polygon class="property pb-sprite-2" points="230.2,350.3 246.1,352.3 243,387.6 227.1,385.7" ng-class="pbEstepa.inmovablesClassList[34]" ng-click="pbEstepa.showPropertyData(1, '35')"/>

				<!-- 36 -->
				<polygon class="property pb-sprite-1" points="214.3,348.4 230.2,350.3 227.1,385.7 211.4,383.8" ng-class="pbEstepa.inmovablesClassList[35]" ng-click="pbEstepa.showPropertyData(1, '36')"/>

				<!-- 37 -->
				<polygon class="property pb-sprite-2" points="200.2,346.8 214.3,348.4 211.4,383.8 197.3,382.1" ng-class="pbEstepa.inmovablesClassList[36]" ng-click="pbEstepa.showPropertyData(1, '37')"/>

				<!-- 38 -->
				<polygon class="property pb-sprite-1" points="186.1,345.1 200.2,346.8 197.3,382.1 183.2,380.4" ng-class="pbEstepa.inmovablesClassList[37]" ng-click="pbEstepa.showPropertyData(1, '38')"/>

				<!-- 39 -->
				<polygon class="property pb-sprite-2" points="172,343.4 186.1,345.1 183.2,380.4 169,378.7" ng-class="pbEstepa.inmovablesClassList[38]" ng-click="pbEstepa.showPropertyData(1, '39')"/>

				<!-- 40 -->
				<polygon class="property pb-sprite-1" points="157.9,341.7 172,343.4 169,378.7 154.9,377.1" ng-class="pbEstepa.inmovablesClassList[39]" ng-click="pbEstepa.showPropertyData(1, '40')"/>

				<!-- 41 -->
				<polygon class="property pb-sprite-2" points="143.9,340 157.9,341.7 154.9,377.1 140.9,375.3" ng-class="pbEstepa.inmovablesClassList[40]" ng-click="pbEstepa.showPropertyData(1, '41')"/>

				<!-- 42 -->
				<polygon class="property pb-sprite-1" points="129.8,338.3 143.9,340 140.9,375.3 126.9,373.6" ng-class="pbEstepa.inmovablesClassList[41]" ng-click="pbEstepa.showPropertyData(1, '42')"/>

				<!-- 43 -->
				<polygon class="property pb-sprite-2" points="115.7,336.6 129.8,338.3 126.9,373.6 112.8,372" ng-class="pbEstepa.inmovablesClassList[42]" ng-click="pbEstepa.showPropertyData(1, '43')"/>

				<!-- 44 -->
				<polygon class="property pb-sprite-1" points="101.6,334.9 115.7,336.6 112.8,372 98.6,370.3" ng-class="pbEstepa.inmovablesClassList[43]" ng-click="pbEstepa.showPropertyData(1, '44')"/>

				<!-- 45 -->
				<path class="property pb-sprite-2" d="M87.4,333.3l14.1,1.6c0,0-2.6,35.4-3,35.4s-14-1.8-14-1.8L87.4,333.3z" ng-class="pbEstepa.inmovablesClassList[44]" ng-click="pbEstepa.showPropertyData(1, '45')"/>

				<!-- 46 -->
				<polygon class="property pb-sprite-1" points="73.4,331.6 87.4,333.3 84.6,368.5 70.4,366.8" ng-class="pbEstepa.inmovablesClassList[45]" ng-click="pbEstepa.showPropertyData(1, '46')"/>

				<!-- 47 -->
				<path class="property pb-sprite-2" d="M59.3,329.9l14,1.7c0,0-2.7,35.2-2.9,35.2s-14-1.6-14-1.6L59.3,329.9z" ng-class="pbEstepa.inmovablesClassList[46]" ng-click="pbEstepa.showPropertyData(1, '47')"/>

				<!-- 48 -->
				<path class="property pb-sprite-1" d="M45.1,328c0.3,0,14.3,1.8,14.3,1.8l-2.9,35.3l-14.2-1.7L45.1,328z" ng-class="pbEstepa.inmovablesClassList[47]" ng-click="pbEstepa.showPropertyData(1, '48')"/>

				<!-- *** Isla 4 *** -->

				<!-- 49 -->
				<polygon class="property pb-sprite-1" points="54.7,296.7 88.2,305.5 94.5,292.8 61.1,284" ng-class="pbEstepa.inmovablesClassList[48]" ng-click="pbEstepa.showPropertyData(1, '49')"/>

				<!-- 50 -->
				<polygon class="property pb-sprite-2" points="61.1,284 94.5,292.8 100.5,280 67.4,271.2" ng-class="pbEstepa.inmovablesClassList[49]" ng-click="pbEstepa.showPropertyData(1, '50')"/>

				<!-- 51 -->
				<polygon class="property pb-sprite-1" points="67.4,271.2 100.5,280 106.5,267 73.4,258.4" ng-class="pbEstepa.inmovablesClassList[50]" ng-click="pbEstepa.showPropertyData(1, '51')"/>

				<!-- 52 -->
				<polygon class="property pb-sprite-2" points="73.4,258.4 106.5,267 112.2,254.1 79.2,245.4" ng-class="pbEstepa.inmovablesClassList[51]" ng-click="pbEstepa.showPropertyData(1, '52')"/>

				<!-- 53 -->
				<polygon class="property pb-sprite-1" points="79.2,245.4 112.2,254.1 117.6,240.9 84.7,232.3" ng-class="pbEstepa.inmovablesClassList[52]" ng-click="pbEstepa.showPropertyData(1, '53')"/>

				<!-- 54 -->
				<polygon class="property pb-sprite-2" points="84.7,232.3 117.6,240.9 122.7,227.7 90,219.1" ng-class="pbEstepa.inmovablesClassList[53]" ng-click="pbEstepa.showPropertyData(1, '54')"/>

				<!-- 55 -->
				<polygon class="property pb-sprite-1" points="90,219.1 122.7,227.7 127.8,214.4 95.1,205.8" ng-class="pbEstepa.inmovablesClassList[54]" ng-click="pbEstepa.showPropertyData(1, '55')"/>

				<!-- 56 -->
				<polygon class="property pb-sprite-2" points="95.1,205.8 127.8,214.4 132.6,201 99.8,192.5" ng-class="pbEstepa.inmovablesClassList[55]" ng-click="pbEstepa.showPropertyData(1, '56')"/>

				<!-- 57 -->
				<polygon class="property pb-sprite-1" points="99.8,192.5 132.6,201 137.1,187.6 104.5,178.9" ng-class="pbEstepa.inmovablesClassList[56]" ng-click="pbEstepa.showPropertyData(1, '57')"/>

				<!-- 58 -->
				<polygon class="property pb-sprite-2" points="104.5,178.9 137.1,187.6 141.3,174 108.7,165.4" ng-class="pbEstepa.inmovablesClassList[57]" ng-click="pbEstepa.showPropertyData(1, '58')"/>

				<!-- 59 -->
				<polygon class="property pb-sprite-1" points="108.7,165.4 141.3,174 145.4,160.4 112.8,151.9" ng-class="pbEstepa.inmovablesClassList[58]" ng-click="pbEstepa.showPropertyData(1, '59')"/>

				<!-- 60 -->
				<polygon class="property pb-sprite-2" points="112.8,151.9 145.4,160.4 149.2,146.8 116.7,138.2" ng-class="pbEstepa.inmovablesClassList[59]" ng-click="pbEstepa.showPropertyData(1, '60')"/>

				<!-- 61 -->
				<polygon class="property pb-sprite-1" points="116.7,138.2 149.2,146.8 152.8,133 120.2,124.5" ng-class="pbEstepa.inmovablesClassList[60]" ng-click="pbEstepa.showPropertyData(1, '61')"/>

				<!-- 62 -->
				<polygon class="property pb-sprite-2" points="120.2,124.5 152.8,133 156.1,119.2 123.6,110.7" ng-class="pbEstepa.inmovablesClassList[61]" ng-click="pbEstepa.showPropertyData(1, '62')"/>

				<!-- 63 -->
				<polygon class="property pb-sprite-1" points="123.6,110.7 156.1,119.2 159.2,105.4 126.7,96.8" ng-class="pbEstepa.inmovablesClassList[62]" ng-click="pbEstepa.showPropertyData(1, '63')"/>

				<!-- 64 -->
				<polygon class="property pb-sprite-2" points="126.7,96.8 159.2,105.4 162.1,91.5 129.5,82.9" ng-class="pbEstepa.inmovablesClassList[63]" ng-click="pbEstepa.showPropertyData(1, '64')"/>

				<!-- 65 -->
				<polygon class="property pb-sprite-1" points="129.5,82.9 162.1,91.5 164.7,77.5 132.1,69.1" ng-class="pbEstepa.inmovablesClassList[64]" ng-click="pbEstepa.showPropertyData(1, '65')"/>

				<!-- 66 -->
				<polygon class="property pb-sprite-2" points="132.1,69.1 164.7,77.5 167.7,60.3 134.4,55" ng-class="pbEstepa.inmovablesClassList[65]" ng-click="pbEstepa.showPropertyData(1, '66')"/>

				<!-- *** Isla 5 *** -->

				<!-- 67 -->
				<polygon class="property pb-sprite-2" points="188.6,62 202.7,63.1 200.1,94.1 186,93" ng-class="pbEstepa.inmovablesClassList[66]" ng-click="pbEstepa.showPropertyData(1, '67')"/>

				<!-- 68 -->
				<polygon class="property pb-sprite-1" points="202.7,63.1 200.1,94.1 214.2,95.3 216.8,64.4" ng-class="pbEstepa.inmovablesClassList[67]" ng-click="pbEstepa.showPropertyData(1, '68')"/>

				<!-- 69 -->
				<polygon class="property pb-sprite-2" points="228.3,96.4 230.9,65.6 216.8,64.4 214.2,95.3" ng-class="pbEstepa.inmovablesClassList[68]" ng-click="pbEstepa.showPropertyData(1, '69')"/>

				<!-- 70 -->
				<polygon class="property pb-sprite-1" points="230.9,65.6 228.3,96.4 242.6,97.6 245.1,66.8" ng-class="pbEstepa.inmovablesClassList[69]" ng-click="pbEstepa.showPropertyData(1, '70')"/>

				<!-- 71 -->
				<polygon class="property pb-sprite-2" points="245.1,66.8 259.2,67.9 256.7,98.9 242.6,97.6" ng-class="pbEstepa.inmovablesClassList[70]" ng-click="pbEstepa.showPropertyData(1, '71')"/>

				<!-- 72 -->
				<polygon class="property pb-sprite-1" points="259.2,67.9 256.7,98.9 270.8,100.1 273.5,69.1" ng-class="pbEstepa.inmovablesClassList[71]" ng-click="pbEstepa.showPropertyData(1, '72')"/>

				<!-- 73 -->
				<polygon class="property pb-sprite-2" points="285,101.3 287.6,70.3 273.5,69.1 270.8,100.1" ng-class="pbEstepa.inmovablesClassList[72]" ng-click="pbEstepa.showPropertyData(1, '73')"/>

				<!-- 74 -->
				<polygon class="property pb-sprite-1" points="299,102.4 301.7,71.6 301.5,71.4 287.6,70.3 285,101.3" ng-class="pbEstepa.inmovablesClassList[73]" ng-click="pbEstepa.showPropertyData(1, '74')"/>

				<!-- 75 -->
				<polygon class="property pb-sprite-1" points="182.9,128.3 197.2,129.5 200.1,94.1 186,93" ng-class="pbEstepa.inmovablesClassList[74]" ng-click="pbEstepa.showPropertyData(1, '75')"/>

				<!-- 76 -->
				<polygon class="property pb-sprite-2" points="214.2,95.3 211.3,130.6 197.2,129.5 200.1,94.1" ng-class="pbEstepa.inmovablesClassList[75]" ng-click="pbEstepa.showPropertyData(1, '76')"/>

				<!-- 77 -->
				<path class="property pb-sprite-1" d="M228.3,96.5l-2.9,35.3l-14.1-1.2l2.9-35.3L228.3,96.5z" ng-class="pbEstepa.inmovablesClassList[76]" ng-click="pbEstepa.showPropertyData(1, '77')"/>

				<!-- 78 -->
				<polygon class="property pb-sprite-2" points="242.6,97.6 239.5,132.9 225.4,131.8 228.3,96.4" ng-class="pbEstepa.inmovablesClassList[77]" ng-click="pbEstepa.showPropertyData(1, '78')"/>

				<!-- 79 -->
				<polygon class="property pb-sprite-1" points="256.7,98.9 253.6,134.2 239.5,132.9 242.6,97.6" ng-class="pbEstepa.inmovablesClassList[78]" ng-click="pbEstepa.showPropertyData(1, '79')"/>

				<!-- 80 -->
				<polygon class="property pb-sprite-2" points="270.8,100.1 267.8,135.4 253.6,134.2 256.7,98.9" ng-class="pbEstepa.inmovablesClassList[79]" ng-click="pbEstepa.showPropertyData(1, '80')"/>

				<!-- 81 -->
				<polygon class="property pb-sprite-1" points="285,101.3 282,136.6 267.8,135.4 270.8,100.1" ng-class="pbEstepa.inmovablesClassList[80]" ng-click="pbEstepa.showPropertyData(1, '81')"/>

				<!-- 82 -->
				<polygon class="property pb-sprite-2" points="299,102.4 296.2,137.8 282,136.6 285,101.3" ng-class="pbEstepa.inmovablesClassList[81]" ng-click="pbEstepa.showPropertyData(1, '82')"/>

				<!-- *** Isla 6 *** -->

				<!-- 83 -->
				<polygon class="property pb-sprite-1" points="227.3,162.8 262.8,165.9 264,151.6 228.5,148.7" ng-class="pbEstepa.inmovablesClassList[82]" ng-click="pbEstepa.showPropertyData(1, '83')"/>

				<!-- 84 -->
				<polygon class="property pb-sprite-2" points="226,176.9 261.7,180 262.8,165.9 227.3,162.8" ng-class="pbEstepa.inmovablesClassList[83]" ng-click="pbEstepa.showPropertyData(1, '84')"/>

				<!-- 85 -->
				<polygon class="property pb-sprite-1" points="224.8,191 260.5,194.1 261.6,180 226,176.9" ng-class="pbEstepa.inmovablesClassList[84]" ng-click="pbEstepa.showPropertyData(1, '85')"/>

				<!-- 86 -->
				<polygon class="property pb-sprite-2" points="224.8,191 223.7,205.3 259.3,208.2 260.5,194.1" ng-class="pbEstepa.inmovablesClassList[85]" ng-click="pbEstepa.showPropertyData(1, '86')"/>

				<!-- 87 -->
				<polygon class="property pb-sprite-1" points="222.5,219.4 258.1,222.3 259.3,208.2 223.7,205.3" ng-class="pbEstepa.inmovablesClassList[86]" ng-click="pbEstepa.showPropertyData(1, '87')"/>

				<!-- 88 -->
				<polygon class="property pb-sprite-2" points="222.5,219.4 221.4,233.6 256.9,236.6 258.1,222.3" ng-class="pbEstepa.inmovablesClassList[87]" ng-click="pbEstepa.showPropertyData(1, '88')"/>

				<!-- 89 -->
				<polygon class="property pb-sprite-1" points="220,248.8 255.6,253 256.9,236.6 221.4,233.6" ng-class="pbEstepa.inmovablesClassList[88]" ng-click="pbEstepa.showPropertyData(1, '89')"/>

				<!-- 90 -->
				<polygon class="property pb-sprite-2" points="294.7,154.3 264,151.6 262.8,165.9 293.5,168.3" ng-class="pbEstepa.inmovablesClassList[89]" ng-click="pbEstepa.showPropertyData(1, '90')"/>

				<!-- 91 -->
				<polygon class="property pb-sprite-1" points="262.8,165.9 261.7,180 292.4,182.5 293.5,168.3" ng-class="pbEstepa.inmovablesClassList[90]" ng-click="pbEstepa.showPropertyData(1, '91')"/>

				<!-- 92 -->
				<polygon class="property pb-sprite-2" points="261.6,180 260.5,194.1 291.2,196.7 292.4,182.5" ng-class="pbEstepa.inmovablesClassList[91]" ng-click="pbEstepa.showPropertyData(1, '92')"/>

				<!-- 93 -->
				<polygon class="property pb-sprite-1" points="260.5,194.1 259.3,208.2 289.9,210.9 291.2,196.7" ng-class="pbEstepa.inmovablesClassList[92]" ng-click="pbEstepa.showPropertyData(1, '93')"/>

				<!-- 94 -->
				<polygon class="property pb-sprite-2" points="259.3,208.2 258.1,222.3 288.7,225 289.9,210.9" ng-class="pbEstepa.inmovablesClassList[93]" ng-click="pbEstepa.showPropertyData(1, '94')"/>

				<!-- 95 -->
				<polygon class="property pb-sprite-1" points="258.1,222.3 256.9,236.6 287.5,239.1 288.7,225" ng-class="pbEstepa.inmovablesClassList[94]" ng-click="pbEstepa.showPropertyData(1, '95')"/>

				<!-- 96 -->
				<polygon class="property pb-sprite-2" points="286.1,256.7 287.5,239.1 256.9,236.6 255.6,253" ng-class="pbEstepa.inmovablesClassList[95]" ng-click="pbEstepa.showPropertyData(1, '96')"/>

				<!-- *** Isla 7 *** -->

				<!-- 97 -->
				<polygon class="property pb-sprite-1" points="140.9,291.6 143.8,256.3 129.7,254.6 126.7,290" ng-class="pbEstepa.inmovablesClassList[96]" ng-click="pbEstepa.showPropertyData(1, '97')"/>

				<!-- 98 -->
				<polygon class="property pb-sprite-2" points="143.8,256.3 157.9,258 155,293.4 140.9,291.6" ng-class="pbEstepa.inmovablesClassList[97]" ng-click="pbEstepa.showPropertyData(1, '98')"/>

				<!-- 99 -->
				<polygon class="property pb-sprite-1" points="169,295 172,259.7 157.9,258 155,293.4" ng-class="pbEstepa.inmovablesClassList[98]" ng-click="pbEstepa.showPropertyData(1, '99')"/>

				<!-- 100 -->
				<polygon class="property pb-sprite-2" points="172,259.7 186.1,261.3 183.1,296.7 169,295" ng-class="pbEstepa.inmovablesClassList[99]" ng-click="pbEstepa.showPropertyData(1, '100')"/>

				<!-- 101 -->
				<polygon class="property pb-sprite-1" points="197.2,298.4 200.1,263.1 186.1,261.3 183.1,296.7" ng-class="pbEstepa.inmovablesClassList[100]" ng-click="pbEstepa.showPropertyData(1, '101')"/>

				<!-- 102 -->
				<polygon class="property pb-sprite-2" points="200.1,263.1 214.2,264.7 211.3,300.1 197.2,298.4" ng-class="pbEstepa.inmovablesClassList[101]" ng-click="pbEstepa.showPropertyData(1, '102')"/>

				<!-- 103 -->
				<polygon class="property pb-sprite-1" points="225.4,301.8 228.4,266.5 214.2,264.7 211.3,300.1" ng-class="pbEstepa.inmovablesClassList[102]" ng-click="pbEstepa.showPropertyData(1, '103')"/>

				<!-- 104 -->
				<polygon class="property pb-sprite-2" points="228.4,266.5 242.4,268.2 239.5,303.5 225.4,301.8" ng-class="pbEstepa.inmovablesClassList[103]" ng-click="pbEstepa.showPropertyData(1, '104')"/>

				<!-- 105 -->
				<polygon class="property pb-sprite-1" points="253.5,305.1 256.6,269.8 242.4,268.2 239.5,303.5" ng-class="pbEstepa.inmovablesClassList[104]" ng-click="pbEstepa.showPropertyData(1, '105')"/>

				<!-- 106 -->
				<polygon class="property pb-sprite-2" points="256.6,269.8 270.7,271.5 267.6,306.9 253.5,305.1" ng-class="pbEstepa.inmovablesClassList[105]" ng-click="pbEstepa.showPropertyData(1, '106')"/>

				<!-- 107 -->
				<polygon class="property pb-sprite-1" points="284.6,273.1 281.7,308.5 267.6,306.9 270.7,271.5" ng-class="pbEstepa.inmovablesClassList[106]" ng-click="pbEstepa.showPropertyData(1, '107')"/>

				<!-- 108 -->
				<polygon class="property pb-sprite-1" points="113.9,288.4 126.7,290 124.1,320.8 110,319.1 112.3,291.8" ng-class="pbEstepa.inmovablesClassList[107]" ng-click="pbEstepa.showPropertyData(1, '108')"/>

				<!-- 109 -->
				<polygon class="property pb-sprite-2" points="124.1,320.8 126.7,290 140.9,291.6 138.2,322.6" ng-class="pbEstepa.inmovablesClassList[108]" ng-click="pbEstepa.showPropertyData(1, '109')"/>

				<!-- 110 -->
				<polygon class="property pb-sprite-1" points="138.2,322.6 140.9,291.6 155,293.4 152.4,324.2" ng-class="pbEstepa.inmovablesClassList[109]" ng-click="pbEstepa.showPropertyData(1, '110')"/>

				<!-- 111 -->
				<polygon class="property pb-sprite-2" points="169,295 166.5,326 152.4,324.2 155,293.4" ng-class="pbEstepa.inmovablesClassList[110]" ng-click="pbEstepa.showPropertyData(1, '111')"/>

				<!-- 112 -->
				<polygon class="property pb-sprite-1" points="169,295 183.1,296.7 180.4,327.6 166.5,326" ng-class="pbEstepa.inmovablesClassList[111]" ng-click="pbEstepa.showPropertyData(1, '112')"/>

				<!-- 113 -->
				<polygon class="property pb-sprite-2" points="197.2,298.4 194.5,329.3 180.4,327.6 183.1,296.7" ng-class="pbEstepa.inmovablesClassList[112]" ng-click="pbEstepa.showPropertyData(1, '113')"/>

				<!-- 114 -->
				<polygon class="property pb-sprite-1" points="197.2,298.4 211.3,300.1 208.7,331 194.5,329.3" ng-class="pbEstepa.inmovablesClassList[113]" ng-click="pbEstepa.showPropertyData(1, '114')"/>

				<!-- 115 -->
				<polygon class="property pb-sprite-2" points="225.4,301.8 222.8,332.6 208.7,331 211.3,300.1" ng-class="pbEstepa.inmovablesClassList[114]" ng-click="pbEstepa.showPropertyData(1, '115')"/>

				<!-- 116 -->
				<polygon class="property pb-sprite-1" points="225.4,301.8 239.5,303.5 236.9,334.4 222.8,332.6" ng-class="pbEstepa.inmovablesClassList[115]" ng-click="pbEstepa.showPropertyData(1, '116')"/>

				<!-- 117 -->
				<polygon class="property pb-sprite-2" points="253.5,305.1 251,336.1 236.9,334.4 239.5,303.5" ng-class="pbEstepa.inmovablesClassList[116]" ng-click="pbEstepa.showPropertyData(1, '117')"/>

				<!-- 118 -->
				<polygon class="property pb-sprite-1" points="253.5,305.1 267.6,306.9 265,337.8 251,336.1" ng-class="pbEstepa.inmovablesClassList[117]" ng-click="pbEstepa.showPropertyData(1, '118')"/>

				<!-- 119 -->
				<polygon class="property pb-sprite-2" points="281.7,308.5 279.1,339.5 265,337.8 267.6,306.9" ng-class="pbEstepa.inmovablesClassList[118]" ng-click="pbEstepa.showPropertyData(1, '119')"/>

				<!-- ***** pbEstepa 2 ***** -->

				<!-- *** Isla 1 *** -->

				<!-- 1 -->
				<path class="property pb-sprite-1" d="M504.8,43.6l14.2,1.2L515.3,89l-14.1-1.3C501.2,87.7,504.4,43.6,504.8,43.6" ng-class="pbEstepa.inmovablesClassList[119]" ng-click="pbEstepa.showPropertyData(2, '1')"/>

				<!-- 2 -->
				<polygon class="property pb-sprite-2" points="519,44.8 533.1,46 529.4,90.2 515.3,89" ng-class="pbEstepa.inmovablesClassList[120]" ng-click="pbEstepa.showPropertyData(2, '2')"/>

				<!-- 3 -->
				<polygon class="property pb-sprite-1" points="533.1,46 547.3,47.1 543.6,91.4 529.4,90.2" ng-class="pbEstepa.inmovablesClassList[121]" ng-click="pbEstepa.showPropertyData(2, '3')"/>

				<!-- 4 -->
				<polygon class="property pb-sprite-2" points="547.3,47.1 561.5,48.3 557.7,92.5 543.6,91.4" ng-class="pbEstepa.inmovablesClassList[122]" ng-click="pbEstepa.showPropertyData(2, '4')"/>

				<!-- *** Isla 2 *** -->

				<!-- 5 -->
				<polygon class="property pb-sprite-2" points="512.1,105.3 556.3,109 555.2,123.1 511,119.5" ng-class="pbEstepa.inmovablesClassList[123]" ng-click="pbEstepa.showPropertyData(2, '5')"/>

				<!-- 6 -->
				<path class="property pb-sprite-1" d="M511,119.5l44.2,3.6c0,0-0.5,14.2-1.3,14.1l-44.1-3.6L511,119.5z" ng-class="pbEstepa.inmovablesClassList[124]" ng-click="pbEstepa.showPropertyData(2, '6')"/>

				<!-- 7 -->
				<polygon class="property pb-sprite-2" points="509.8,133.6 553.9,137.2 552.7,151.5 508.6,147.7" ng-class="pbEstepa.inmovablesClassList[125]" ng-click="pbEstepa.showPropertyData(2, '7')"/>

				<!-- 8 -->
				<polygon class="property pb-sprite-1" points="508.6,147.7 552.7,151.5 551.5,165.6 507.3,161.8" ng-class="pbEstepa.inmovablesClassList[126]" ng-click="pbEstepa.showPropertyData(2, '8')"/>

				<!-- 9 -->
				<polygon class="property pb-sprite-2" points="507.3,161.8 551.5,165.6 550.4,179.7 506.1,176.1" ng-class="pbEstepa.inmovablesClassList[127]" ng-click="pbEstepa.showPropertyData(2, '9')"/>

				<!-- 10 -->
				<polygon class="property pb-sprite-1" points="506.1,176.1 550.4,179.7 549.2,193.8 505,190.2" ng-class="pbEstepa.inmovablesClassList[128]" ng-click="pbEstepa.showPropertyData(2, '10')"/>

				<!-- 11 -->
				<polygon class="property pb-sprite-2" points="505,190.2 549.2,193.8 548.1,207.9 503.8,204.3" ng-class="pbEstepa.inmovablesClassList[129]" ng-click="pbEstepa.showPropertyData(2, '11')"/>

				<!-- 12 -->
				<polygon class="property pb-sprite-1" points="503.8,204.3 548.1,207.9 546.8,222.1 502.7,218.4" ng-class="pbEstepa.inmovablesClassList[130]" ng-click="pbEstepa.showPropertyData(2, '12')"/>

				<!-- 13 -->
				<polygon class="property pb-sprite-2" points="502.7,218.4 546.8,222.1 545.6,236.3 501.5,232.5" ng-class="pbEstepa.inmovablesClassList[131]" ng-click="pbEstepa.showPropertyData(2, '13')"/>

				<!-- 14 -->
				<polygon class="property pb-sprite-1" points="501.5,232.5 545.6,236.3 544.4,250.4 500.2,246.7" ng-class="pbEstepa.inmovablesClassList[132]" ng-click="pbEstepa.showPropertyData(2, '14')"/>

				<!-- 15 -->
				<polygon class="property pb-sprite-2" points="500.2,246.7 544.4,250.4 543.2,264.5 499,260.9" ng-class="pbEstepa.inmovablesClassList[133]" ng-click="pbEstepa.showPropertyData(2, '15')"/>

				<!-- 16 -->
				<polygon class="property pb-sprite-1" points="499,260.9 543.2,264.5 542.1,278.7 497.9,275" ng-class="pbEstepa.inmovablesClassList[134]" ng-click="pbEstepa.showPropertyData(2, '16')"/>
				
				<!-- 17 -->
				<polygon class="property pb-sprite-2" points="497.9,275 542.1,278.7 540.9,292.8 496.7,289.1" ng-class="pbEstepa.inmovablesClassList[135]" ng-click="pbEstepa.showPropertyData(2, '17')"/>
				
				<!-- 18 -->
				<polygon class="property pb-sprite-1" points="496.7,289.1 540.9,292.8 539.6,307.1 495.5,303.2" ng-class="pbEstepa.inmovablesClassList[136]" ng-click="pbEstepa.showPropertyData(2, '18')"/>

				<!-- 19 -->
				<polygon class="property pb-sprite-2" points="495.5,303.2 539.6,307.1 538.5,321.2 494.3,317.4" ng-class="pbEstepa.inmovablesClassList[137]" ng-click="pbEstepa.showPropertyData(2, '19')"/>

				<!-- 20 -->
				<polygon class="property pb-sprite-1" points="494.3,317.4 538.5,321.2 537.3,335.3 493.1,331.6" ng-class="pbEstepa.inmovablesClassList[138]" ng-click="pbEstepa.showPropertyData(2, '20')"/>

				<!-- 21 -->
				<polygon class="property pb-sprite-2" points="493.1,331.6 537.3,335.3 536.1,349.4 491.9,345.8" ng-class="pbEstepa.inmovablesClassList[139]" ng-click="pbEstepa.showPropertyData(2, '21')"/>

				<!-- 22 -->
				<polygon class="property pb-sprite-1" points="491.9,345.8 536.1,349.4 534.9,363.5 490.7,359.9" ng-class="pbEstepa.inmovablesClassList[140]" ng-click="pbEstepa.showPropertyData(2, '22')"/>

				<!-- 23 -->
				<polygon class="property pb-sprite-2" points="490.7,359.9 534.9,363.5 533.7,377.8 489.6,374" ng-class="pbEstepa.inmovablesClassList[141]" ng-click="pbEstepa.showPropertyData(2, '23')"/>

				<!-- 24 -->
				<polygon class="property pb-sprite-1" points="489.6,374 533.7,377.8 532.5,391.9 488.4,388.1" ng-class="pbEstepa.inmovablesClassList[142]" ng-click="pbEstepa.showPropertyData(2, '24')"/>

				<!-- 25 -->
				<polygon class="property pb-sprite-2" points="488.4,388.1 532.5,391.9 531.3,406 487.1,402.4" ng-class="pbEstepa.inmovablesClassList[143]" ng-click="pbEstepa.showPropertyData(2, '25')"/>

				<!-- 26 -->
				<path class="property pb-sprite-1" d="M487.1,402.4l44.2,3.6l-1.3,16l-44.1-5.2L487.1,402.4z" ng-class="pbEstepa.inmovablesClassList[144]" ng-click="pbEstepa.showPropertyData(2, '26')"/>

				<!-- *** Isla 3 *** -->

				<!-- 27 -->
				<polygon class="property pb-sprite-1" points="457.8,363.4 473.7,365.3 469.5,414.7 451.8,412.7" ng-class="pbEstepa.inmovablesClassList[145]" ng-click="pbEstepa.showPropertyData(2, '27')"/>

				<!-- 28 -->
				<polygon class="property pb-sprite-2" points="442,361.5 457.8,363.4 451.8,412.7 436.1,410.7" ng-class="pbEstepa.inmovablesClassList[146]" ng-click="pbEstepa.showPropertyData(2, '28')"/>

				<!-- 29 -->
				<polygon class="property pb-sprite-1" points="426.1,359.6 442,361.5 436.1,410.7 420.3,408.9" ng-class="pbEstepa.inmovablesClassList[147]" ng-click="pbEstepa.showPropertyData(2, '29')"/>

				<!-- 30 -->
				<polygon class="property pb-sprite-2" points="410.3,357.6 426.1,359.6 420.3,408.9 404.4,406.9" ng-class="pbEstepa.inmovablesClassList[148]" ng-click="pbEstepa.showPropertyData(2, '30')"/>

				<!-- 31 -->
				<polygon class="property pb-sprite-1" points="394.4,355.7 410.3,357.6 404.4,406.9 388.6,405" ng-class="pbEstepa.inmovablesClassList[149]" ng-click="pbEstepa.showPropertyData(2, '31')"/>

				<!-- 32 -->
				<polygon class="property pb-sprite-2" points="378.5,353.8 394.4,355.7 388.6,405 372.7,403.1" ng-class="pbEstepa.inmovablesClassList[150]" ng-click="pbEstepa.showPropertyData(2, '32')"/>

				<!-- 33 -->
				<polygon class="property pb-sprite-1" points="362.7,351.9 378.5,353.8 372.7,403.1 356.8,401.2" ng-class="pbEstepa.inmovablesClassList[151]" ng-click="pbEstepa.showPropertyData(2, '33')"/>

				<!-- 34 -->
				<polygon class="property pb-sprite-2" points="346.8,350 362.7,351.9 356.8,401.2 341,399.3" ng-class="pbEstepa.inmovablesClassList[152]" ng-click="pbEstepa.showPropertyData(2, '34')"/>

				<!-- 35 -->
				<polygon class="property pb-sprite-1" points="323.5,347.2 346.8,350 341,399.3 319.4,396.7" ng-class="pbEstepa.inmovablesClassList[153]" ng-click="pbEstepa.showPropertyData(2, '35')"/>

				<!-- *** Isla 4 *** -->

				<!-- 36 -->
				<polygon class="property pb-sprite-1" points="326.4,313.5 324.9,330.9 368.9,336.2 370.5,317.1" ng-class="pbEstepa.inmovablesClassList[154]" ng-click="pbEstepa.showPropertyData(2, '36')"/>

				<!-- 37 -->
				<polygon class="property pb-sprite-2" points="327.6,299.3 326.4,313.5 370.5,317.1 371.8,303" ng-class="pbEstepa.inmovablesClassList[155]" ng-click="pbEstepa.showPropertyData(2, '37')"/>

				<!-- 38 -->
				<polygon class="property pb-sprite-1" points="328.8,285.1 327.6,299.3 371.8,303 373,288.9" ng-class="pbEstepa.inmovablesClassList[156]" ng-click="pbEstepa.showPropertyData(2, '38')"/>

				<!-- 39 -->
				<polygon class="property pb-sprite-2" points="329.9,271 328.8,285.1 373,288.9 374.1,274.7" ng-class="pbEstepa.inmovablesClassList[157]" ng-click="pbEstepa.showPropertyData(2, '39')"/>

				<!-- 40 -->
				<polygon class="property pb-sprite-1" points="331.2,256.8 329.9,271 374.1,274.7 375.3,260.6" ng-class="pbEstepa.inmovablesClassList[158]" ng-click="pbEstepa.showPropertyData(2, '40')"/>

				<!-- 41 -->
				<polygon class="property pb-sprite-2" points="332.4,242.7 331.2,256.8 375.3,260.6 376.5,246.3" ng-class="pbEstepa.inmovablesClassList[159]" ng-click="pbEstepa.showPropertyData(2, '41')"/>

				<!-- 42 -->
				<polygon class="property pb-sprite-1" points="333.6,228.6 332.4,242.7 376.5,246.3 377.8,232.2" ng-class="pbEstepa.inmovablesClassList[160]" ng-click="pbEstepa.showPropertyData(2, '42')"/>

				<!-- 43 -->
				<polygon class="property pb-sprite-2" points="334.7,214.5 333.6,228.6 377.8,232.2 379,218.1" ng-class="pbEstepa.inmovablesClassList[161]" ng-click="pbEstepa.showPropertyData(2, '43')"/>

				<!-- 44 -->
				<polygon class="property pb-sprite-1" points="335.9,200.2 334.7,214.5 379,218.1 380.1,204" ng-class="pbEstepa.inmovablesClassList[162]" ng-click="pbEstepa.showPropertyData(2, '44')"/>

				<!-- 45 -->
				<polygon class="property pb-sprite-2" points="337,186.1 335.9,200.2 380.1,204 381.3,189.9" ng-class="pbEstepa.inmovablesClassList[163]" ng-click="pbEstepa.showPropertyData(2, '45')"/>

				<!-- 46 -->
				<polygon class="property pb-sprite-1" points="338.4,172 337,186.1 381.3,189.9 382.4,175.6" ng-class="pbEstepa.inmovablesClassList[164]" ng-click="pbEstepa.showPropertyData(2, '46')"/>

				<!-- 47 -->
				<path class="property pb-sprite-2" d="M339.5,157.9c0,0-1.4,14.1-1.1,14.1l44.1,3.6l1.1-14.1L339.5,157.9z" ng-class="pbEstepa.inmovablesClassList[165]" ng-click="pbEstepa.showPropertyData(2, '47')"/>

				<!-- 48 -->
				<polygon class="property pb-sprite-1" points="340.7,143.8 339.5,157.9 383.6,161.5 384.9,147.4" ng-class="pbEstepa.inmovablesClassList[166]" ng-click="pbEstepa.showPropertyData(2, '48')"/>

				<!-- 49 -->
				<polygon class="property pb-sprite-2" points="341.9,129.5 340.7,143.8 384.9,147.4 386.1,133.3" ng-class="pbEstepa.inmovablesClassList[167]" ng-click="pbEstepa.showPropertyData(2, '49')"/>

				<!-- 50 -->
				<polygon class="property pb-sprite-1" points="343,115.4 341.9,129.5 386.1,133.3 387.2,119.2" ng-class="pbEstepa.inmovablesClassList[168]" ng-click="pbEstepa.showPropertyData(2, '50')"/>

				<!-- 51 -->
				<path class="property pb-sprite-2" d="M344.3,101.3c0,0-1.6,14.2-1.3,14.1s44.3,3.8,44.3,3.8l1.2-14.2L344.3,101.3z" ng-class="pbEstepa.inmovablesClassList[169]" ng-click="pbEstepa.showPropertyData(2, '51')"/>

				<!-- 52 -->
				<polygon class="property pb-sprite-1" points="345.5,87.2 344.3,101.3 388.4,105 389.6,90.8" ng-class="pbEstepa.inmovablesClassList[170]" ng-click="pbEstepa.showPropertyData(2, '52')"/>

				<!-- 53 -->
				<polygon class="property pb-sprite-2" points="346.6,73 345.5,87.2 389.6,90.8 390.9,76.7" ng-class="pbEstepa.inmovablesClassList[171]" ng-click="pbEstepa.showPropertyData(2, '53')"/>

				<!-- 54 -->
				<polygon class="property pb-sprite-1" points="347.8,58.8 346.6,73 390.9,76.7 392,62.5" ng-class="pbEstepa.inmovablesClassList[172]" ng-click="pbEstepa.showPropertyData(2, '54')"/>

				<!-- 55 -->
				<path class="property pb-sprite-2" d="M349,44.6c0,0-1.8,14.3-1.2,14.1s44.2,3.8,44.2,3.8l1.2-14.1L349,44.6z" ng-class="pbEstepa.inmovablesClassList[173]" ng-click="pbEstepa.showPropertyData(2, '55')"/>

				<!-- 56 -->
				<polygon class="property pb-sprite-1" points="350.2,30.5 349,44.6 393.3,48.4 394.4,34.3" ng-class="pbEstepa.inmovablesClassList[174]" ng-click="pbEstepa.showPropertyData(2, '56')"/>

				<!-- *** Isla 5 *** -->

				<!-- 57 -->
				<polygon class="property pb-sprite-1" points="410.9,35.6 424.9,36.8 421.3,81 407.1,79.9" ng-class="pbEstepa.inmovablesClassList[175]" ng-click="pbEstepa.showPropertyData(2, '57')"/>

				<!-- 58 -->
				<polygon class="property pb-sprite-2" points="424.9,36.8 439.1,38.1 435.4,82.2 421.3,81" ng-class="pbEstepa.inmovablesClassList[176]" ng-click="pbEstepa.showPropertyData(2, '58')"/>

				<!-- 59 -->
				<polygon class="property pb-sprite-1" points="439.1,38.1 453.2,39.3 449.5,83.4 435.4,82.2" ng-class="pbEstepa.inmovablesClassList[177]" ng-click="pbEstepa.showPropertyData(2, '59')"/>

				<!-- 60 -->
				<polygon class="property pb-sprite-2" points="449.5,83.4 463.6,84.6 467,45.7 452.8,44.5" ng-class="pbEstepa.inmovablesClassList[178]" ng-click="pbEstepa.showPropertyData(2, '60')"/>

				<!-- *** Isla 6 *** -->

				<!-- 61 -->
				<polygon class="property pb-sprite-1" points="410.9,96.8 426.8,98.1 422.8,147.5 419.3,147.2 406.7,146.2" ng-class="pbEstepa.inmovablesClassList[179]" ng-click="pbEstepa.showPropertyData(2, '61')"/>

				<!-- 62 -->
				<polygon class="property pb-sprite-2" points="422.8,147.5 426.8,98.1 442.7,99.4 438.6,148.9" ng-class="pbEstepa.inmovablesClassList[180]" ng-click="pbEstepa.showPropertyData(2, '62')"/>

				<!-- 63 -->
				<polygon class="property pb-sprite-1" points="438.6,148.9 454.5,150.3 458.7,100.8 442.7,99.4" ng-class="pbEstepa.inmovablesClassList[181]" ng-click="pbEstepa.showPropertyData(2, '63')"/>

				<!-- 64 -->
				<polygon class="property pb-sprite-2" points="470.5,151.6 474.5,102.2 458.7,100.8 454.5,150.3" ng-class="pbEstepa.inmovablesClassList[182]" ng-click="pbEstepa.showPropertyData(2, '64')"/>

				<!-- 65 -->
				<polygon class="property pb-sprite-1" points="486.3,152.9 490.4,103.4 474.5,102.2 470.5,151.6" ng-class="pbEstepa.inmovablesClassList[183]" ng-click="pbEstepa.showPropertyData(2, '65')"/>

				<!-- 66 -->
				<polygon class="property pb-sprite-2" points="401.5,145.8 419.3,147.3 414.3,206.5 396.6,205" ng-class="pbEstepa.inmovablesClassList[184]" ng-click="pbEstepa.showPropertyData(2, '66')"/>

				<!-- 67 -->
				<polygon class="property pb-sprite-1" points="436.9,148.9 431.9,208.1 414.3,206.5 419.3,147.2" ng-class="pbEstepa.inmovablesClassList[185]" ng-click="pbEstepa.showPropertyData(2, '67')"/>

				<!-- 68 -->
				<polygon class="property pb-sprite-2" points="436.9,148.9 431.9,208.1 449.6,209.6 454.6,150.3" ng-class="pbEstepa.inmovablesClassList[186]" ng-click="pbEstepa.showPropertyData(2, '68')"/>

				<!-- 69 -->
				<polygon class="property pb-sprite-1" points="472.3,151.8 467.3,211 449.6,209.6 454.5,150.3 470.5,151.6" ng-class="pbEstepa.inmovablesClassList[187]" ng-click="pbEstepa.showPropertyData(2, '69')"/>

				<!-- 70 -->
				<polygon class="property pb-sprite-2" points="472.3,151.8 491.4,153.4 486.5,212.6 467.3,211" ng-class="pbEstepa.inmovablesClassList[188]" ng-click="pbEstepa.showPropertyData(2, '70')"/>

				<!-- *** Isla 7 *** -->

				<!-- 71 -->
				<polygon class="property pb-sprite-1" points="390.3,278.8 409.8,281.1 402.7,340.1 385.3,338" ng-class="pbEstepa.inmovablesClassList[189]" ng-click="pbEstepa.showPropertyData(2, '71')"/>

				<!-- 72 -->
				<path class="property pb-sprite-2" d="M409.8,281.1c0.6,0.2,17.6,2.1,17.6,2.1l-7.1,59l-17.6-2.1L409.8,281.1z" ng-class="pbEstepa.inmovablesClassList[190]" ng-click="pbEstepa.showPropertyData(2, '72')"/>

				<!-- 73 -->
				<polygon class="property pb-sprite-1" points="427.4,283.2 445,285.4 437.9,344.3 420.3,342.1" ng-class="pbEstepa.inmovablesClassList[191]" ng-click="pbEstepa.showPropertyData(2, '73')"/>

				<!-- 74 -->
				<polygon class="property pb-sprite-2" points="445,285.4 462.6,287.4 455.5,346.5 437.9,344.3" ng-class="pbEstepa.inmovablesClassList[192]" ng-click="pbEstepa.showPropertyData(2, '74')"/>

				<!-- 75 -->
				<polygon class="property pb-sprite-1" points="462.6,287.4 480.1,289.4 475.1,348.8 455.5,346.5" ng-class="pbEstepa.inmovablesClassList[193]" ng-click="pbEstepa.showPropertyData(2, '75')"/>

				<!-- ***** pbEstepa 3 ***** -->

				<!-- *** Isla 1 *** -->

				<!-- 1 -->
				<polygon class="property pb-sprite-2" points="636.1,75.8 695.4,57.6 701.6,78 642.2,96.2" ng-class="pbEstepa.inmovablesClassList[194]" ng-click="pbEstepa.showPropertyData(3, '1')"/>

				<!-- 2 -->
				<polygon class="property pb-sprite-1" points="642.2,96.2 701.6,78 707.9,98.3 648.5,116.4" ng-class="pbEstepa.inmovablesClassList[195]" ng-click="pbEstepa.showPropertyData(3, '2')"/>

				<!-- 3 -->
				<polygon class="property pb-sprite-2" points="648.5,116.4 707.9,98.3 714.1,118.8 654.7,136.8" ng-class="pbEstepa.inmovablesClassList[196]" ng-click="pbEstepa.showPropertyData(3, '3')"/>

				<!-- 4 -->
				<polygon class="property pb-sprite-1" points="654.7,136.8 714.1,118.8 720.4,139.1 661,157.2" ng-class="pbEstepa.inmovablesClassList[197]" ng-click="pbEstepa.showPropertyData(3, '4')"/>

				<!-- 5 -->
				<polygon class="property pb-sprite-2" points="661,157.2 720.4,139.1 726.5,159.4 667.3,177.6" ng-class="pbEstepa.inmovablesClassList[198]" ng-click="pbEstepa.showPropertyData(3, '5')"/>

				<!-- 6 -->
				<polygon class="property pb-sprite-1" points="667.3,177.6 726.5,159.4 732.8,179.8 673.5,197.9" ng-class="pbEstepa.inmovablesClassList[199]" ng-click="pbEstepa.showPropertyData(3, '6')"/>

				<!-- 7 -->
				<path class="property pb-sprite-2" d="M673.5,197.9l59.3-18.1l6.3,20.4l-59.4,18.1L673.5,197.9z" ng-class="pbEstepa.inmovablesClassList[200]" ng-click="pbEstepa.showPropertyData(3, '7')"/>

				<!-- 8 -->
				<polygon class="property pb-sprite-1" points="679.6,218.3 739,200.2 745.3,220.5 685.9,238.7" ng-class="pbEstepa.inmovablesClassList[201]" ng-click="pbEstepa.showPropertyData(3, '8')"/>

				<!-- 9 -->
				<polygon class="property pb-sprite-2" points="685.9,238.7 745.3,220.5 751.5,240.8 692.1,259" ng-class="pbEstepa.inmovablesClassList[202]" ng-click="pbEstepa.showPropertyData(3, '9')"/>

				<!-- 10 -->
				<polygon class="property pb-sprite-1" points="692.1,259 751.5,240.8 757.8,261.2 698.4,279.4" ng-class="pbEstepa.inmovablesClassList[203]" ng-click="pbEstepa.showPropertyData(3, '10')"/>

				<!-- 11 -->
				<polygon class="property pb-sprite-2" points="698.4,279.4 757.8,261.2 763.9,281.6 704.6,299.8" ng-class="pbEstepa.inmovablesClassList[204]" ng-click="pbEstepa.showPropertyData(3, '11')"/>

				<!-- 12 -->
				<path class="property pb-sprite-1" d="M704.6,299.8l59.3-18.2l6.3,20.4l-59.3,18.1C710.8,320.1,704.1,300,704.6,299.8" ng-class="pbEstepa.inmovablesClassList[205]" ng-click="pbEstepa.showPropertyData(3, '12')"/>

				<!-- 13 -->
				<polygon class="property pb-sprite-2" points="710.8,320.1 770.1,301.9 776.4,322.3 719.8,349.5" ng-class="pbEstepa.inmovablesClassList[206]" ng-click="pbEstepa.showPropertyData(3, '13')"/>

				<!-- *** Isla 1 *** -->

				<!-- 14 -->
				<polygon class="property pb-sprite-1" points="653.1,310.8 680.8,368.3 703.1,357.6 684.3,295.8" ng-class="pbEstepa.inmovablesClassList[207]" ng-click="pbEstepa.showPropertyData(3, '14')"/>

				<!-- 15 -->
				<polygon class="property pb-sprite-2" points="653.1,310.8 680.8,368.3 658.4,379.1 630.7,321.6" ng-class="pbEstepa.inmovablesClassList[208]" ng-click="pbEstepa.showPropertyData(3, '15')"/>

				<!-- 16 -->
				<polygon class="property pb-sprite-1" points="608.3,332.4 630.7,321.6 658.4,379.1 636,389.9" ng-class="pbEstepa.inmovablesClassList[209]" ng-click="pbEstepa.showPropertyData(3, '16')"/>

				<!-- 17 -->
				<polygon class="property pb-sprite-2" points="586,343.1 608.3,332.4 636,389.9 613.6,400.6" ng-class="pbEstepa.inmovablesClassList[210]" ng-click="pbEstepa.showPropertyData(3, '17')"/>

				<!-- 18 -->
				<polygon class="property pb-sprite-1" points="563.6,353.9 586,343.1 613.6,400.6 591.3,411.4" ng-class="pbEstepa.inmovablesClassList[211]" ng-click="pbEstepa.showPropertyData(3, '18')"/>

				<!-- 19 -->
				<polygon class="property pb-sprite-2" points="541.2,364.7 563.6,353.9 591.3,411.4 568.9,422.2" ng-class="pbEstepa.inmovablesClassList[212]" ng-click="pbEstepa.showPropertyData(3, '19')"/>

				<!-- *** Isla 3 *** -->

				<!-- 20 -->
				<path class="property pb-sprite-1" d="M600.5,303.3l-1,13l-14.6,7l-46.3-3.9c0,0,1.4-21.3,1.8-21.3L600.5,303.3" ng-class="pbEstepa.inmovablesClassList[213]" ng-click="pbEstepa.showPropertyData(3, '20')"/>

				<!-- 21 -->
				<polygon class="property pb-sprite-2" points="542.3,276.9 602.4,282 600.5,303.3 540.3,298.1" ng-class="pbEstepa.inmovablesClassList[214]" ng-click="pbEstepa.showPropertyData(3, '21')"/>

				<!-- 22 -->
				<polygon class="property pb-sprite-1" points="544,255.8 604.1,260.8 602.4,282 542.3,276.9" ng-class="pbEstepa.inmovablesClassList[215]" ng-click="pbEstepa.showPropertyData(3, '22')"/>

				<!-- 23 -->
				<polygon class="property pb-sprite-2" points="545.7,234.6 605.8,239.5 604.1,260.8 544,255.8" ng-class="pbEstepa.inmovablesClassList[216]" ng-click="pbEstepa.showPropertyData(3, '23')"/>

				<!-- 24 -->
				<polygon class="property pb-sprite-1" points="607.6,218.4 605.8,239.5 545.7,234.6 547.6,213.3" ng-class="pbEstepa.inmovablesClassList[217]" ng-click="pbEstepa.showPropertyData(3, '24')"/>

				<!-- 25 -->
				<polygon class="property pb-sprite-2" points="549.4,192.1 609.4,197.2 607.6,218.4 547.6,213.3" ng-class="pbEstepa.inmovablesClassList[218]" ng-click="pbEstepa.showPropertyData(3, '25')"/>

				<!-- 26 -->
				<polygon class="property pb-sprite-1" points="551.1,170.8 611.2,175.9 609.4,197.2 549.4,192.1" ng-class="pbEstepa.inmovablesClassList[219]" ng-click="pbEstepa.showPropertyData(3, '26')"/>

				<!-- 27 -->
				<polygon class="property pb-sprite-2" points="552.9,149.7 613,154.7 611.2,175.9 551.1,170.8" ng-class="pbEstepa.inmovablesClassList[220]" ng-click="pbEstepa.showPropertyData(3, '27')"/>

				<!-- 28 -->
				<polygon class="property pb-sprite-1" points="614.7,133.4 613,154.7 552.9,149.7 554.9,128.5" ng-class="pbEstepa.inmovablesClassList[221]" ng-click="pbEstepa.showPropertyData(3, '28')"/>

				<!-- *** Isla 4 *** -->

				<!-- 1 -->
				<polygon class="property pb-sprite-1" points="561.5,48.3 582.7,50.2 577.5,112 556.2,110.3" ng-class="pbEstepa.inmovablesClassList[222]" ng-click="pbEstepa.showPropertyData(3, '29')"/>

				<!-- ********** Condos Headings ********** -->

				<g>
					<rect x="155.6" y="1" class="quote-condo-txt-bg" width="57.9" height="15.8"/>
					<g>
						<path class="quote-condo-txt" d="M165.5,4.1h-3.8v2.8h3.7v1h-3.7v3.6h3.8v1h-4.8V3.1h4.8V4.1z"/>
						<path class="quote-condo-txt" d="M169.5,8c-0.1-0.3-0.4-0.6-0.8-0.6c-0.4,0-0.7,0.2-0.7,0.7c0,0.4,0.3,0.5,0.9,0.8c0.8,0.3,1.2,0.6,1.5,0.9
						c0.3,0.3,0.3,0.6,0.3,0.9c0,1.2-0.9,1.9-2,1.9c-0.2,0-1.5,0-2-1.5l0.9-0.4c0.1,0.3,0.4,1,1.2,1c0.7,0,1-0.5,1-0.9
						c0-0.5-0.4-0.7-0.9-1c-0.7-0.3-1.1-0.5-1.4-0.9c-0.2-0.3-0.3-0.6-0.3-0.9c0-1,0.7-1.6,1.7-1.6c0.3,0,1.1,0.1,1.6,1L169.5,8z"/>
						<path class="quote-condo-txt" d="M173.1,7.6v4.9h-1V7.6h-0.6V6.6h0.6V4.5h1v2.1h1v0.9H173.1z"/>
						<path class="quote-condo-txt" d="M180.2,10.9c-0.2,0.3-0.4,0.7-0.7,0.9c-0.5,0.5-1.2,0.7-1.9,0.7c-1.4,0-2.9-0.9-2.9-3c0-1.7,1.1-3.1,2.8-3.1
						c1.1,0,1.8,0.6,2.2,1.1c0.4,0.5,0.6,1.4,0.5,2.2h-4.5c0,1.2,0.8,2,1.8,2c0.5,0,0.9-0.1,1.2-0.4c0.3-0.2,0.5-0.5,0.6-0.8
						L180.2,10.9z M179.2,8.9c-0.2-0.9-0.9-1.5-1.7-1.5s-1.6,0.6-1.7,1.5H179.2z"/>
						<path class="quote-condo-txt" d="M182.8,15.6h-1v-9h1v0.8c0.7-0.9,1.6-1,2-1c1.8,0,2.8,1.5,2.8,3.1c0,1.6-1,3-2.8,3c-0.9,0-1.6-0.4-2-1V15.6z
						M186.5,9.6c0-1.4-1-2.2-1.9-2.2s-1.9,0.8-1.9,2.2c0,1.2,0.8,2.2,1.9,2.2C185.8,11.7,186.5,10.7,186.5,9.6z"/>
						<path class="quote-condo-txt" d="M193.6,6.6h1v5.8h-1v-0.8c-0.3,0.4-1,1-2,1c-1.5,0-2.8-1-2.8-3.1c0-2,1.3-3,2.8-3c1.1,0,1.7,0.6,2,1V6.6z
						M189.8,9.5c0,1.2,0.7,2.2,1.9,2.2c1.2,0,1.9-1,1.9-2.2c0-1.5-1-2.2-1.9-2.2C190.7,7.4,189.8,8.1,189.8,9.5z"/>
					</g>
					<g>
						<path class="quote-condo-txt" d="M205.2,4.9h-1.4l0.5-0.9h1.8v8.4h-0.9V4.9z"/>
					</g>
				</g>

				<g>
					<rect x="458.3" y="25.2" class="quote-condo-txt-bg" width="57.9" height="15.9"/>
					<g>
						<path class="quote-condo-txt" d="M468.1,28.3h-3.8v2.8h3.7v1h-3.7v3.6h3.8v1h-4.8v-9.3h4.8V28.3z"/>
						<path class="quote-condo-txt" d="M472.2,32.2c-0.1-0.3-0.4-0.6-0.8-0.6c-0.4,0-0.7,0.2-0.7,0.7c0,0.4,0.3,0.5,0.9,0.8
						c0.8,0.3,1.2,0.6,1.5,0.9c0.3,0.3,0.3,0.6,0.3,0.9c0,1.2-0.9,1.9-2,1.9c-0.2,0-1.5,0-2-1.5l0.9-0.4c0.1,0.3,0.4,1,1.2,1
						c0.7,0,1-0.5,1-0.9c0-0.5-0.4-0.7-0.9-1c-0.7-0.3-1.1-0.5-1.4-0.9c-0.2-0.3-0.3-0.6-0.3-0.9c0-1,0.7-1.6,1.7-1.6
						c0.3,0,1.1,0.1,1.6,1L472.2,32.2z"/>
						<path class="quote-condo-txt" d="M475.7,31.8v4.9h-1v-4.9h-0.6v-0.9h0.6v-2.1h1v2.1h1v0.9H475.7z"/>
						<path class="quote-condo-txt" d="M482.8,35.2c-0.2,0.3-0.4,0.7-0.7,0.9c-0.5,0.5-1.2,0.7-1.9,0.7c-1.4,0-2.9-0.9-2.9-3c0-1.7,1.1-3.1,2.8-3.1
						c1.1,0,1.8,0.6,2.2,1.1c0.4,0.5,0.6,1.4,0.5,2.2h-4.5c0,1.2,0.8,2,1.8,2c0.5,0,0.9-0.1,1.2-0.4c0.3-0.2,0.5-0.5,0.6-0.8
						L482.8,35.2z M481.8,33.1c-0.2-0.9-0.9-1.5-1.7-1.5s-1.6,0.6-1.7,1.5H481.8z"/>
						<path class="quote-condo-txt" d="M485.4,39.9h-1v-9h1v0.8c0.7-0.9,1.6-1,2-1c1.8,0,2.8,1.5,2.8,3.1c0,1.6-1,3-2.8,3c-0.9,0-1.6-0.4-2-1V39.9z
						M489.2,33.8c0-1.4-1-2.2-1.9-2.2s-1.9,0.8-1.9,2.2c0,1.2,0.8,2.2,1.9,2.2C488.5,35.9,489.2,34.9,489.2,33.8z"/>
						<path class="quote-condo-txt" d="M496.2,30.8h1v5.8h-1v-0.8c-0.3,0.4-1,1-2,1c-1.5,0-2.8-1-2.8-3.1c0-2,1.3-3,2.8-3c1.1,0,1.7,0.6,2,1V30.8z
						M492.4,33.7c0,1.2,0.7,2.2,1.9,2.2c1.2,0,1.9-1,1.9-2.2c0-1.5-1-2.2-1.9-2.2C493.3,31.6,492.4,32.3,492.4,33.7z"/>
					</g>
					<g>
						<path class="quote-condo-txt" d="M505.2,36.6l3.1-3.5c0.2-0.3,0.8-0.9,1-1.2c0.4-0.5,0.5-0.9,0.5-1.3c0-0.9-0.7-1.6-1.7-1.6
						c-0.6,0-1.1,0.3-1.4,0.7c-0.2,0.3-0.3,0.6-0.3,1h-0.9c0-0.8,0.3-1.4,0.6-1.7c0.4-0.4,0.9-0.9,2-0.9c1.5,0,2.6,1.1,2.6,2.5
						c0,0.6-0.2,1.1-0.7,1.8c-0.4,0.5-0.8,1-1.1,1.4l-1.7,2h3.5v0.9H505.2z"/>
					</g>
				</g>
				<g>
					<rect x="588.8" y="34.4" class="quote-condo-txt-bg" width="57.9" height="15.9"/>
					<g>
						<path class="quote-condo-txt" d="M598.7,37.5h-3.8v2.8h3.7v1h-3.7v3.6h3.8v1h-4.8v-9.3h4.8V37.5z"/>
						<path class="quote-condo-txt" d="M602.7,41.4c-0.1-0.3-0.4-0.6-0.8-0.6c-0.4,0-0.7,0.2-0.7,0.7c0,0.4,0.3,0.5,0.9,0.8
						c0.8,0.3,1.2,0.6,1.5,0.9c0.3,0.3,0.3,0.6,0.3,0.9c0,1.2-0.9,1.9-2,1.9c-0.2,0-1.5,0-2-1.5l0.9-0.4c0.1,0.3,0.4,1,1.2,1
						c0.7,0,1-0.5,1-0.9c0-0.5-0.4-0.7-0.9-1c-0.7-0.3-1.1-0.5-1.4-0.9c-0.2-0.3-0.3-0.6-0.3-0.9c0-1,0.7-1.6,1.7-1.6
						c0.3,0,1.1,0.1,1.6,1L602.7,41.4z"/>
						<path class="quote-condo-txt" d="M606.3,40.9v4.9h-1v-4.9h-0.6V40h0.6v-2.1h1V40h1v0.9H606.3z"/>
						<path class="quote-condo-txt" d="M613.4,44.3c-0.2,0.3-0.4,0.7-0.7,0.9c-0.5,0.5-1.2,0.7-1.9,0.7c-1.4,0-2.9-0.9-2.9-3c0-1.7,1.1-3.1,2.8-3.1
						c1.1,0,1.8,0.6,2.2,1.1c0.4,0.5,0.6,1.4,0.5,2.2h-4.5c0,1.2,0.8,2,1.8,2c0.5,0,0.9-0.1,1.2-0.4c0.3-0.2,0.5-0.5,0.6-0.8
						L613.4,44.3z M612.4,42.3c-0.2-0.9-0.9-1.5-1.7-1.5s-1.6,0.6-1.7,1.5H612.4z"/>
						<path class="quote-condo-txt" d="M615.9,49h-1v-9h1v0.8c0.7-0.9,1.6-1,2-1c1.8,0,2.8,1.5,2.8,3.1c0,1.6-1,3-2.8,3c-0.9,0-1.6-0.4-2-1V49z
						M619.7,42.9c0-1.4-1-2.2-1.9-2.2s-1.9,0.8-1.9,2.2c0,1.2,0.8,2.2,1.9,2.2C619,45.1,619.7,44.1,619.7,42.9z"/>
						<path class="quote-condo-txt" d="M626.7,40h1v5.8h-1V45c-0.3,0.4-1,1-2,1c-1.5,0-2.8-1-2.8-3.1c0-2,1.3-3,2.8-3c1.1,0,1.7,0.6,2,1V40z
						M623,42.9c0,1.2,0.7,2.2,1.9,2.2c1.2,0,1.9-1,1.9-2.2c0-1.5-1-2.2-1.9-2.2C623.9,40.8,623,41.5,623,42.9z"/>
					</g>
					<g>
						<path class="quote-condo-txt" d="M636.1,39.5c0-0.5,0.2-0.9,0.4-1.2c0.6-0.9,1.4-1,1.9-1c1.6,0,2.4,1.1,2.4,2.3c0,0.6-0.2,1.4-1.1,1.9
						c0.3,0.1,1.2,0.6,1.2,2c0,1.6-1.1,2.5-2.6,2.5c-0.9,0-1.9-0.4-2.3-1.4c-0.1-0.3-0.2-0.6-0.2-0.9h0.9c0,0.3,0.1,0.6,0.3,0.8
						c0.3,0.4,0.8,0.6,1.3,0.6c0.9,0,1.6-0.8,1.6-1.7c0-0.5-0.2-1.1-0.8-1.4c-0.3-0.1-0.6-0.2-1-0.2V41c0.3,0,0.7,0,1-0.2
						c0.3-0.1,0.7-0.5,0.7-1.2c0-0.7-0.4-1.4-1.4-1.4c-0.3,0-0.8,0.1-1.1,0.5c-0.2,0.2-0.3,0.5-0.3,0.9H636.1z"/>
					</g>
				</g>
			</g>
		</svg>

	</div>

</body>
</html>