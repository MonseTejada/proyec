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
					<h1 class="center-align">CLUSTER TAIGA</h1>
				</div>
			</div>
		</div>

		<svg version="1.1" class="quote__map" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1366 720" style="enable-background:new 0 0 1366 720;" xml:space="preserve">

			<style type="text/css">
				.st17{fill:#162D5C;}
				.st18{fill:#001D7E;}
			</style>

			<image style="overflow:visible;enable-background:new;" width="1366" height="720" xlink:href="media/assets/img/habitta/portto-blanco/app/devs/taiga/taiga.jpg"></image>

			<g>
				<g>
					<g>
						<g>
							<polygon class="pb-sprite-1" points="433.5,173.9 448.5,214.1 424.8,221 412.9,179.8"/>
							<text transform="matrix(0.3553 0.9347 -0.9347 0.3553 434.8704 189.1806)" class="white__fill futura-book fs__4__px">16.05</text>
							<text transform="matrix(0.956 -0.2934 0.2934 0.956 420.5124 181.5295)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.956 -0.2934 0.2934 0.956 432.5295 217.1719)" class="white__fill futura-book fs__4__px">9.27</text>
							<text transform="matrix(0.2696 0.963 -0.963 0.2696 430.4968 194.2091)" class="mustard__fill futura-med fs__4__px">112</text>
							<text transform="matrix(0.2696 0.963 -0.963 0.2696 424.3376 190.014)" class="white__fill futura-book fs__4__px">138.18m2</text>
							<g>
								<polygon class="mustard__dl__fill" points="427,187.9 423.2,184.2 427,180.4 427,180.4"/>
								<polygon class="mustard__dr__fill" points="427,187.9 427,180.4 430.7,184.2"/>
							</g>
						</g>
						<g>
							<polygon class="pb-sprite-2" points="392.4,185.8 412.9,179.8 424.8,221 404.2,226.9"/>
							<text transform="matrix(0.2773 0.9608 -0.9608 0.2773 412.9569 194.4568)" class="white__fill futura-book fs__4__px">16.00</text>
							<text transform="matrix(0.956 -0.2934 0.2934 0.956 399.8127 186.9075)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.956 -0.2934 0.2934 0.956 410.0388 223.922)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.2696 0.963 -0.963 0.2696 408.1042 198.756)" class="mustard__fill futura-med fs__4__px">111</text>
							<text transform="matrix(0.2696 0.963 -0.963 0.2696 401.945 194.5609)" class="white__fill futura-book fs__4__px">128.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-1" points="392.4,185.8 404.2,226.9 383.7,232.8 371.9,191.7"/>
							<text transform="matrix(0.2773 0.9608 -0.9608 0.2773 392.5966 200.3616)" class="white__fill futura-book fs__4__px">16.00</text>
							<text transform="matrix(0.956 -0.2934 0.2934 0.956 379.4504 192.8092)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.956 -0.2934 0.2934 0.956 389.6765 229.8239)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.2696 0.963 -0.963 0.2696 387.7429 204.6581)" class="mustard__fill futura-med fs__4__px">110</text>
							<text transform="matrix(0.2696 0.963 -0.963 0.2696 381.5837 200.463)" class="white__fill futura-book fs__4__px">128.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-2" points="351.4,197.6 371.9,191.7 383.7,232.8 363.2,238.8"/>
							<text transform="matrix(0.2773 0.9608 -0.9608 0.2773 372.3505 206.7)" class="white__fill futura-book fs__4__px">16.00</text>
							<text transform="matrix(0.956 -0.2934 0.2934 0.956 359.2062 199.1476)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.956 -0.2934 0.2934 0.956 369.4318 236.1642)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.2696 0.963 -0.963 0.2696 367.4978 210.9972)" class="mustard__fill futura-med fs__4__px">109</text>
							<text transform="matrix(0.2696 0.963 -0.963 0.2696 361.3386 206.8021)" class="white__fill futura-book fs__4__px">128.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-1" points="351.4,197.6 363.2,238.8 342.6,244.7 330.8,203.5"/>
							<text transform="matrix(0.2773 0.9608 -0.9608 0.2773 350.9198 212.6746)" class="white__fill futura-book fs__4__px">16.00</text>
							<text transform="matrix(0.956 -0.2934 0.2934 0.956 337.7775 205.1244)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.956 -0.2934 0.2934 0.956 348.0029 242.1391)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.2696 0.963 -0.963 0.2696 346.07 216.9735)" class="mustard__fill futura-med fs__4__px">108</text>
							<text transform="matrix(0.2696 0.963 -0.963 0.2696 339.9118 212.7787)" class="white__fill futura-book fs__4__px">128.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-2" points="310.2,209.4 330.8,203.5 342.6,244.7 322.1,250.6"/>
							<text transform="matrix(0.2773 0.9608 -0.9608 0.2773 330.9276 218.5933)" class="white__fill futura-book fs__4__px">16.00</text>
							<text transform="matrix(0.956 -0.2934 0.2934 0.956 317.7824 211.0431)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.956 -0.2934 0.2934 0.956 328.008 248.0597)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.2696 0.963 -0.963 0.2696 326.0749 222.8929)" class="mustard__fill futura-med fs__4__px">107</text>
							<text transform="matrix(0.2696 0.963 -0.963 0.2696 319.9157 218.6981)" class="white__fill futura-book fs__4__px">128.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-1" points="310.2,209.4 322.1,250.6 301.5,256.6 289.7,215.4"/>
							<text transform="matrix(0.2773 0.9608 -0.9608 0.2773 310.1923 224.7222)" class="white__fill futura-book fs__4__px">16.00</text>
							<text transform="matrix(0.956 -0.2934 0.2934 0.956 297.0473 217.1716)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.956 -0.2934 0.2934 0.956 307.2722 254.1864)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.2696 0.963 -0.963 0.2696 305.3405 229.0194)" class="mustard__fill futura-med fs__4__px">106</text>
							<text transform="matrix(0.2696 0.963 -0.963 0.2696 299.1814 224.8243)" class="white__fill futura-book fs__4__px">128.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-2" points="269.2,221.3 289.7,215.4 301.5,256.6 281,262.5"/>
							<text transform="matrix(0.2773 0.9608 -0.9608 0.2773 289.3729 230.3079)" class="white__fill futura-book fs__4__px">16.00</text>
							<text transform="matrix(0.956 -0.2934 0.2934 0.956 276.2277 222.757)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.956 -0.2934 0.2934 0.956 286.4543 259.7733)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.2696 0.963 -0.963 0.2696 284.5202 234.6075)" class="mustard__fill futura-med fs__4__px">105</text>
							<text transform="matrix(0.2696 0.963 -0.963 0.2696 278.362 230.4125)" class="white__fill futura-book fs__4__px">128.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-1" points="269.2,221.3 281,262.5 260.4,268.4 248.7,227.2"/>
							<text transform="matrix(0.2773 0.9608 -0.9608 0.2773 269.0389 236.2845)" class="white__fill futura-book fs__4__px">16.00</text>
							<text transform="matrix(0.956 -0.2934 0.2934 0.956 255.8935 228.7319)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.956 -0.2934 0.2934 0.956 266.1186 265.7486)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.2696 0.963 -0.963 0.2696 264.1853 240.5814)" class="mustard__fill futura-med fs__4__px">104</text>
							<text transform="matrix(0.2696 0.963 -0.963 0.2696 258.0261 236.3866)" class="white__fill futura-book fs__4__px">128.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-2" points="228.1,233.1 248.7,227.2 260.4,268.4 240,274.3"/>
							<text transform="matrix(0.2773 0.9608 -0.9608 0.2773 248.3094 242.2036)" class="white__fill futura-book fs__4__px">16.00</text>
							<text transform="matrix(0.956 -0.2934 0.2934 0.956 235.1623 234.6528)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.956 -0.2934 0.2934 0.956 245.3881 271.6673)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.2696 0.963 -0.963 0.2696 243.4538 246.5008)" class="mustard__fill futura-med fs__4__px">103</text>
							<text transform="matrix(0.2696 0.963 -0.963 0.2696 237.2946 242.3058)" class="white__fill futura-book fs__4__px">128.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-1" points="228.1,233.1 240,274.3 219.4,280.2 207.6,239"/>
							<text transform="matrix(0.2773 0.9608 -0.9608 0.2773 228.1346 248.2974)" class="white__fill futura-book fs__4__px">16.00</text>
							<text transform="matrix(0.956 -0.2934 0.2934 0.956 214.9892 240.7455)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.956 -0.2934 0.2934 0.956 225.2162 277.7638)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.2696 0.963 -0.963 0.2696 223.2829 252.5963)" class="mustard__fill futura-med fs__4__px">102</text>
							<text transform="matrix(0.2696 0.963 -0.963 0.2696 217.1237 248.4012)" class="white__fill futura-book fs__4__px">128.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-2" points="201.9,285.3 197.5,281.8 187,245 207.6,239 219.4,280.2"/>
							<text transform="matrix(0.2773 0.9608 -0.9608 0.2773 207.6083 254.4192)" class="white__fill futura-book fs__4__px">16.00</text>
							<text transform="matrix(0.2773 0.9608 -0.9608 0.2773 192.1112 258.6407)" class="white__fill futura-book fs__4__px">14.35</text>
							<text transform="matrix(0.956 -0.2934 0.2934 0.956 194.3893 246.7917)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.956 -0.2934 0.2934 0.956 208.1425 282.6031)" class="white__fill futura-book fs__4__px">6.86</text>
							<text transform="matrix(0.7106 0.7036 -0.7036 0.7106 197.3332 279.4024)" class="white__fill futura-book fs__4__px">2.01</text>
							<text transform="matrix(0.2696 0.963 -0.963 0.2696 203.5769 258.2855)" class="mustard__fill futura-med fs__4__px">101</text>
							<text transform="matrix(0.2696 0.963 -0.963 0.2696 197.4177 254.0907)" class="white__fill futura-book fs__4__px">127.06m2</text>
							<g>
								<polygon class="mustard__dl__fill" points="202.5,253.5 198.8,249.8 202.5,246 202.5,246"/>
								<polygon class="mustard__dr__fill" points="202.5,253.5 202.5,246 206.3,249.8"/>
							</g>
						</g>
						<g>
							<polygon class="pb-sprite-2" points="465.1,258.2 448.5,214.1 428,220.1 440.9,265.1"/>
							<text transform="matrix(0.3553 0.9347 -0.9347 0.3553 449.964 229.935)" class="white__fill futura-book fs__4__px">17.56</text>
							<text transform="matrix(0.956 -0.2934 0.2934 0.956 448.7607 262.0353)" class="white__fill futura-book fs__4__px">9.39</text>
							<text transform="matrix(0.956 -0.2934 0.2934 0.956 435.6974 222.1469)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.2696 0.963 -0.963 0.2696 444.987 233.8036)" class="mustard__fill futura-med fs__4__px">100</text>
							<text transform="matrix(0.2696 0.963 -0.963 0.2696 438.8279 229.6085)" class="white__fill futura-book fs__4__px">152.17m2</text>
							<g>
								<polygon class="mustard__dl__fill" points="449.4,256.3 445.6,252.6 449.4,248.8 449.4,248.8"/>
								<polygon class="mustard__dr__fill" points="449.4,256.3 449.4,248.8 453.2,252.6"/>
							</g>
						</g>
						<g>
							<polygon class="pb-sprite-1" points="407.5,226 428,220.1 440.9,265.1 420.4,271.1"/>
							<text transform="matrix(0.956 -0.2934 0.2934 0.956 427.0405 268.2323)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.956 -0.2934 0.2934 0.956 414.3517 228.0592)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.2773 0.9608 -0.9608 0.2773 428.951 239.1292)" class="white__fill futura-book fs__4__px">17.50</text>
							<text transform="matrix(0.2696 0.963 -0.963 0.2696 424.4411 243.9427)" class="mustard__fill futura-med fs__4__px">99</text>
							<text transform="matrix(0.2696 0.963 -0.963 0.2696 417.9851 238.6886)" class="white__fill futura-book fs__4__px">140.00m2</text>
						</g>
						<g>
							
								<rect x="393" y="228.1" transform="matrix(0.9614 -0.2751 0.2751 0.9614 -53.6027 120.7632)" class="pb-sprite-2" width="21.4" height="46.8"/>
							<text transform="matrix(0.956 -0.2934 0.2934 0.956 406.3256 274.1503)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.956 -0.2934 0.2934 0.956 393.6364 233.9775)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.2773 0.9608 -0.9608 0.2773 408.2362 245.0506)" class="white__fill futura-book fs__4__px">17.50</text>
							<text transform="matrix(0.2696 0.963 -0.963 0.2696 403.7253 249.86)" class="mustard__fill futura-med fs__4__px">98</text>
							<text transform="matrix(0.2696 0.963 -0.963 0.2696 397.2693 244.6056)" class="white__fill futura-book fs__4__px">140.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-1" points="366.4,237.9 386.9,231.9 399.9,276.9 379.4,282.9"/>
							<text transform="matrix(0.956 -0.2934 0.2934 0.956 385.7951 280.2079)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.956 -0.2934 0.2934 0.956 373.1066 240.0347)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.2773 0.9608 -0.9608 0.2773 387.705 251.1065)" class="white__fill futura-book fs__4__px">17.50</text>
							<text transform="matrix(0.2696 0.963 -0.963 0.2696 383.196 255.9186)" class="mustard__fill futura-med fs__4__px">97</text>
							<text transform="matrix(0.2696 0.963 -0.963 0.2696 376.74 250.6642)" class="white__fill futura-book fs__4__px">140.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-2" points="345.8,243.8 366.4,237.9 379.4,282.9 358.8,288.8"/>
							<text transform="matrix(0.956 -0.2934 0.2934 0.956 365.7932 286.2655)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.956 -0.2934 0.2934 0.956 353.1047 246.0925)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.2773 0.9608 -0.9608 0.2773 367.703 257.1629)" class="white__fill futura-book fs__4__px">17.50</text>
							<text transform="matrix(0.2696 0.963 -0.963 0.2696 363.1931 261.9747)" class="mustard__fill futura-med fs__4__px">96</text>
							<text transform="matrix(0.2696 0.963 -0.963 0.2696 356.738 256.7206)" class="white__fill futura-book fs__4__px">140.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-1" points="325.4,249.7 345.8,243.8 358.8,288.8 338.3,294.8"/>
							<text transform="matrix(0.956 -0.2934 0.2934 0.956 345.225 291.9311)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.956 -0.2934 0.2934 0.956 332.5358 251.7582)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.2773 0.9608 -0.9608 0.2773 347.1366 262.8296)" class="white__fill futura-book fs__4__px">17.50</text>
							<text transform="matrix(0.2696 0.963 -0.963 0.2696 342.6257 267.6427)" class="mustard__fill futura-med fs__4__px">95</text>
							<text transform="matrix(0.2696 0.963 -0.963 0.2696 336.1696 262.3883)" class="white__fill futura-book fs__4__px">140.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-2" points="304.8,255.6 325.4,249.7 338.2,294.4 317.7,300.7"/>
							<text transform="matrix(0.956 -0.2934 0.2934 0.956 324.632 297.8689)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.956 -0.2934 0.2934 0.956 311.9435 257.6978)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.2773 0.9608 -0.9608 0.2773 326.5419 268.7693)" class="white__fill futura-book fs__4__px">17.50</text>
							<text transform="matrix(0.2696 0.963 -0.963 0.2696 322.0329 273.5809)" class="mustard__fill futura-med fs__4__px">94</text>
							<text transform="matrix(0.2696 0.963 -0.963 0.2696 315.5779 268.3268)" class="white__fill futura-book fs__4__px">140.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-1" points="281.7,262.3 304.8,255.6 317.7,300.7 294.7,307.3"/>
							<text transform="matrix(0.2773 0.9608 -0.9608 0.2773 305.8016 275.1131)" class="white__fill futura-book fs__4__px">17.50</text>
							<text transform="matrix(0.956 -0.2934 0.2934 0.956 290.2661 263.9745)" class="white__fill futura-book fs__4__px">9.00</text>
							<text transform="matrix(0.956 -0.2934 0.2934 0.956 302.4684 304.1324)" class="white__fill futura-book fs__4__px">9.00</text>
							<text transform="matrix(0.2696 0.963 -0.963 0.2696 300.5359 279.7027)" class="mustard__fill futura-med fs__4__px">93</text>
							<text transform="matrix(0.2696 0.963 -0.963 0.2696 294.0808 274.4483)" class="white__fill futura-book fs__4__px">157.50m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-2" points="258.5,269 281.7,262.3 294.7,307.3 271.5,314"/>
							<text transform="matrix(0.2773 0.9608 -0.9608 0.2773 282.5135 282.0347)" class="white__fill futura-book fs__4__px">17.50</text>
							<text transform="matrix(0.956 -0.2934 0.2934 0.956 266.978 270.8948)" class="white__fill futura-book fs__4__px">9.00</text>
							<text transform="matrix(0.956 -0.2934 0.2934 0.956 279.1801 311.0548)" class="white__fill futura-book fs__4__px">9.00</text>
							<text transform="matrix(0.2696 0.963 -0.963 0.2696 277.2478 286.6229)" class="mustard__fill futura-med fs__4__px">92</text>
							<text transform="matrix(0.2696 0.963 -0.963 0.2696 270.7927 281.3687)" class="white__fill futura-book fs__4__px">157.50m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-1" points="258.5,269 271.5,314 244.8,321.7 231.9,276.6"/>
							<text transform="matrix(0.2773 0.9608 -0.9608 0.2773 238.8856 295.3633)" class="white__fill futura-book fs__4__px">17.50</text>
							<text transform="matrix(0.2773 0.9608 -0.9608 0.2773 259.786 289.8728)" class="white__fill futura-book fs__4__px">17.50</text>
							<text transform="matrix(0.956 -0.2934 0.2934 0.956 254.3588 318.1228)" class="white__fill futura-book fs__4__px">10.42</text>
							<text transform="matrix(0.956 -0.2934 0.2934 0.956 241.4455 278.0841)" class="white__fill futura-book fs__4__px">10.42</text>
							<text transform="matrix(0.2696 0.963 -0.963 0.2696 253.2136 293.9903)" class="mustard__fill futura-med fs__4__px">91</text>
							<text transform="matrix(0.2696 0.963 -0.963 0.2696 246.7585 288.7359)" class="white__fill futura-book fs__4__px">182.32m2</text>
							<g>
								<polygon class="mustard__dl__fill" points="259.1,311.7 255.3,308 259.1,304.2 259.1,304.2"/>
								<polygon class="mustard__dr__fill" points="259.1,311.7 259.1,304.2 262.9,308"/>
							</g>
						</g>
					</g>
					<g>
						<g>
							<polygon class="pb-sprite-1" points="453.2,287.6 473.8,281.6 488.9,321.9 465.1,328.7"/>
							<text transform="matrix(0.3553 0.9347 -0.9347 0.3553 475.5477 297.019)" class="white__fill futura-book fs__4__px">16.05</text>
							<text transform="matrix(0.956 -0.2934 0.2934 0.956 460.8648 289.196)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.956 -0.2934 0.2934 0.956 473.5903 324.631)" class="white__fill futura-book fs__4__px">9.27</text>
							<text transform="matrix(0.2696 0.963 -0.963 0.2696 469.3601 302.1695)" class="mustard__fill futura-med fs__4__px">90</text>
							<text transform="matrix(0.2696 0.963 -0.963 0.2696 462.905 296.9151)" class="white__fill futura-book fs__4__px">138.18m2</text>
							<g>
								<polygon class="mustard__dl__fill" points="470.4,297.2 466.7,293.4 470.4,289.7 470.4,289.7"/>
								<polygon class="mustard__dr__fill" points="470.4,297.2 470.4,289.7 474.2,293.4"/>
							</g>
						</g>
						<g>
							<polygon class="pb-sprite-2" points="432.8,293.4 453.2,287.6 465.1,328.7 444.5,334.6"/>
							<text transform="matrix(0.2773 0.9608 -0.9608 0.2773 452.4081 301.7381)" class="white__fill futura-book fs__4__px">16.00</text>
							<text transform="matrix(0.956 -0.2934 0.2934 0.956 439.9785 294.5699)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.956 -0.2934 0.2934 0.956 450.491 331.3688)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.2696 0.963 -0.963 0.2696 448.5388 307.1598)" class="mustard__fill futura-med fs__4__px">89</text>
							<text transform="matrix(0.2696 0.963 -0.963 0.2696 442.0837 301.9054)" class="white__fill futura-book fs__4__px">128.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-1" points="432.8,293.4 444.5,334.6 424,340.5 412.2,299.3"/>
							<text transform="matrix(0.2773 0.9608 -0.9608 0.2773 432.3192 307.6263)" class="white__fill futura-book fs__4__px">16.00</text>
							<text transform="matrix(0.956 -0.2934 0.2934 0.956 419.8884 300.4535)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.956 -0.2934 0.2934 0.956 430.402 337.2539)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.2696 0.963 -0.963 0.2696 428.4499 313.0465)" class="mustard__fill futura-med fs__4__px">88</text>
							<text transform="matrix(0.2696 0.963 -0.963 0.2696 421.9948 307.7921)" class="white__fill futura-book fs__4__px">128.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-2" points="391.7,305.3 412.2,299.3 424,340.5 403.4,346.4"/>
							<text transform="matrix(0.2773 0.9608 -0.9608 0.2773 411.8368 313.5757)" class="white__fill futura-book fs__4__px">16.00</text>
							<text transform="matrix(0.956 -0.2934 0.2934 0.956 399.4057 306.4043)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.956 -0.2934 0.2934 0.956 409.9179 343.2052)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.2696 0.963 -0.963 0.2696 407.9685 318.9964)" class="mustard__fill futura-med fs__4__px">87</text>
							<text transform="matrix(0.2696 0.963 -0.963 0.2696 401.5134 313.742)" class="white__fill futura-book fs__4__px">128.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-1" points="371.1,311.2 391.7,305.3 403.4,346.4 383,352.4"/>
							<text transform="matrix(0.2773 0.9608 -0.9608 0.2773 390.9208 319.6448)" class="white__fill futura-book fs__4__px">16.00</text>
							<text transform="matrix(0.956 -0.2934 0.2934 0.956 378.489 312.474)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.956 -0.2934 0.2934 0.956 389.0021 349.2748)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.2696 0.963 -0.963 0.2696 387.0525 325.065)" class="mustard__fill futura-med fs__4__px">86</text>
							<text transform="matrix(0.2696 0.963 -0.963 0.2696 380.5974 319.8106)" class="white__fill futura-book fs__4__px">128.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-2" points="350.6,317.1 371.1,311.2 383,352.4 362.4,358.3"/>
							<text transform="matrix(0.2773 0.9608 -0.9608 0.2773 370.4501 325.7173)" class="white__fill futura-book fs__4__px">16.00</text>
							<text transform="matrix(0.956 -0.2934 0.2934 0.956 358.0197 318.5476)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.956 -0.2934 0.2934 0.956 368.5329 355.3473)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.2696 0.963 -0.963 0.2696 366.5818 331.1366)" class="mustard__fill futura-med fs__4__px">85</text>
							<text transform="matrix(0.2696 0.963 -0.963 0.2696 360.1267 325.8824)" class="white__fill futura-book fs__4__px">128.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-1" points="350.6,317.1 362.4,358.3 341.9,364.2 330,323"/>
							<text transform="matrix(0.2773 0.9608 -0.9608 0.2773 350.1512 331.8008)" class="white__fill futura-book fs__4__px">16.00</text>
							<text transform="matrix(0.956 -0.2934 0.2934 0.956 337.7219 324.6308)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.956 -0.2934 0.2934 0.956 348.2336 361.4278)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.2696 0.963 -0.963 0.2696 346.2829 337.2198)" class="mustard__fill futura-med fs__4__px">84</text>
							<text transform="matrix(0.2696 0.963 -0.963 0.2696 339.8279 331.9657)" class="white__fill futura-book fs__4__px">128.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-2" points="309.5,329 330,323 341.9,364.2 321.3,370.2"/>
							<text transform="matrix(0.2773 0.9608 -0.9608 0.2773 329.663 337.6216)" class="white__fill futura-book fs__4__px">16.00</text>
							<text transform="matrix(0.956 -0.2934 0.2934 0.956 317.2326 330.4519)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.956 -0.2934 0.2934 0.956 327.7453 367.2497)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.2696 0.963 -0.963 0.2696 325.7946 343.0409)" class="mustard__fill futura-med fs__4__px">83</text>
							<text transform="matrix(0.2696 0.963 -0.963 0.2696 319.3396 337.7867)" class="white__fill futura-book fs__4__px">128.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-1" points="309.5,329 321.3,370.2 304.4,375.1 299,370.1 289,334.9"/>
							<text transform="matrix(0.2773 0.9608 -0.9608 0.2773 294.036 348.2576)" class="white__fill futura-book fs__4__px">13.75</text>
							<text transform="matrix(0.2773 0.9608 -0.9608 0.2773 309.4706 343.7657)" class="white__fill futura-book fs__4__px">16.00</text>
							<text transform="matrix(0.956 -0.2934 0.2934 0.956 308.6679 372.5374)" class="white__fill futura-book fs__4__px">6.63</text>
							<text transform="matrix(0.956 -0.2934 0.2934 0.956 295.5869 336.9468)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.7106 0.7036 -0.7036 0.7106 299.0549 368.7047)" class="white__fill futura-book fs__4__px">2.63</text>
							<text transform="matrix(0.2696 0.963 -0.963 0.2696 305.4177 348.9132)" class="mustard__fill futura-med fs__4__px">82</text>
							<text transform="matrix(0.2696 0.963 -0.963 0.2696 298.9616 343.6588)" class="white__fill futura-book fs__4__px">126.46m2</text>
							<g>
								<polygon class="mustard__dl__fill" points="303.1,343 299.3,339.2 303.1,335.4 303.1,335.4"/>
								<polygon class="mustard__dr__fill" points="303.1,343 303.1,335.4 306.8,339.2"/>
							</g>
						</g>
						<g>
							<polygon class="pb-sprite-2" points="505.4,365.9 488.9,321.9 469.7,327.4 482.5,372.4"/>
							<text transform="matrix(0.3553 0.9347 -0.9347 0.3553 490.7584 337.7352)" class="white__fill futura-book fs__4__px">17.56</text>
							<text transform="matrix(0.956 -0.2934 0.2934 0.956 476.8244 329.3835)" class="white__fill futura-book fs__4__px">7.50</text>
							<text transform="matrix(0.956 -0.2934 0.2934 0.956 490.0732 369.4521)" class="white__fill futura-book fs__4__px">8.89</text>
							<text transform="matrix(0.2696 0.963 -0.963 0.2696 486.3376 343.9308)" class="mustard__fill futura-med fs__4__px">81</text>
							<text transform="matrix(0.2696 0.963 -0.963 0.2696 479.8816 338.6764)" class="white__fill futura-book fs__4__px">143.42m2</text>
							<g>
								<polygon class="mustard__dl__fill" points="491.3,365.5 487.5,361.7 491.3,358 491.3,358"/>
								<polygon class="mustard__dr__fill" points="491.3,365.5 491.3,358 495.1,361.7"/>
							</g>
						</g>
						<g>
							<polygon class="pb-sprite-1" points="449.1,333.3 469.7,327.4 482.5,372.4 462,378.4"/>
							<text transform="matrix(0.2773 0.9608 -0.9608 0.2773 470.7596 347.3821)" class="white__fill futura-book fs__4__px">17.50</text>
							<text transform="matrix(0.956 -0.2934 0.2934 0.956 455.7755 335.4275)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.956 -0.2934 0.2934 0.956 467.6356 375.4984)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.2696 0.963 -0.963 0.2696 465.365 351.6925)" class="mustard__fill futura-med fs__4__px">80</text>
							<text transform="matrix(0.2696 0.963 -0.963 0.2696 458.9089 346.4383)" class="white__fill futura-book fs__4__px">140.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-2" points="428.6,339.2 449.1,333.3 462,378.4 441.4,384.3"/>
							<text transform="matrix(0.2773 0.9608 -0.9608 0.2773 450.6835 353.1299)" class="white__fill futura-book fs__4__px">17.50</text>
							<text transform="matrix(0.956 -0.2934 0.2934 0.956 435.6987 341.1762)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.956 -0.2934 0.2934 0.956 447.5571 381.2434)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.2696 0.963 -0.963 0.2696 445.2868 357.4413)" class="mustard__fill futura-med fs__4__px">79</text>
							<text transform="matrix(0.2696 0.963 -0.963 0.2696 438.8318 352.1869)" class="white__fill futura-book fs__4__px">140.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-1" points="408,345.2 428.6,339.2 441.4,384.3 420.9,390.2"/>
							<text transform="matrix(0.2773 0.9608 -0.9608 0.2773 429.6893 358.6311)" class="white__fill futura-book fs__4__px">17.50</text>
							<text transform="matrix(0.956 -0.2934 0.2934 0.956 414.705 346.677)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.956 -0.2934 0.2934 0.956 426.5627 386.7487)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.2696 0.963 -0.963 0.2696 424.2937 362.9422)" class="mustard__fill futura-med fs__4__px">78</text>
							<text transform="matrix(0.2696 0.963 -0.963 0.2696 417.8376 357.6878)" class="white__fill futura-book fs__4__px">140.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-2" points="387.4,351.1 408,345.2 420.9,390.2 400.4,396.2"/>
							<text transform="matrix(0.2773 0.9608 -0.9608 0.2773 409.745 365.4922)" class="white__fill futura-book fs__4__px">17.50</text>
							<text transform="matrix(0.956 -0.2934 0.2934 0.956 394.7604 353.5385)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.956 -0.2934 0.2934 0.956 406.6193 393.6077)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.2696 0.963 -0.963 0.2696 404.3493 369.8036)" class="mustard__fill futura-med fs__4__px">77</text>
							<text transform="matrix(0.2696 0.963 -0.963 0.2696 397.8933 364.5492)" class="white__fill futura-book fs__4__px">140.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-1" points="367,357 387.4,351.1 400.4,396.2 379.9,402.1"/>
							<text transform="matrix(0.2773 0.9608 -0.9608 0.2773 388.6044 371.42)" class="white__fill futura-book fs__4__px">17.50</text>
							<text transform="matrix(0.956 -0.2934 0.2934 0.956 373.6208 359.4663)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.956 -0.2934 0.2934 0.956 385.4792 399.5347)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.2696 0.963 -0.963 0.2696 383.2077 375.7284)" class="mustard__fill futura-med fs__4__px">76</text>
							<text transform="matrix(0.2696 0.963 -0.963 0.2696 376.7517 370.474)" class="white__fill futura-book fs__4__px">140.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-2" points="359.3,408 346.4,362.9 367,357 379.9,402.1"/>
							<text transform="matrix(0.2773 0.9608 -0.9608 0.2773 368.661 377.1902)" class="white__fill futura-book fs__4__px">17.50</text>
							<text transform="matrix(0.956 -0.2934 0.2934 0.956 353.676 365.2337)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.956 -0.2934 0.2934 0.956 365.5344 405.3041)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.2696 0.963 -0.963 0.2696 363.2644 381.4994)" class="mustard__fill futura-med fs__4__px">75</text>
							<text transform="matrix(0.2696 0.963 -0.963 0.2696 356.8083 376.245)" class="white__fill futura-book fs__4__px">140.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-1" points="325.9,368.9 346.4,362.9 359.3,408 343.8,412.5 336.3,405.2"/>
							<text transform="matrix(0.2773 0.9608 -0.9608 0.2773 331.0565 382.2195)" class="white__fill futura-book fs__4__px">14.16</text>
							<text transform="matrix(0.2773 0.9608 -0.9608 0.2773 347.3124 380.7232)" class="white__fill futura-book fs__4__px">17.50</text>
							<text transform="matrix(0.956 -0.2934 0.2934 0.956 332.5534 371.1184)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.956 -0.2934 0.2934 0.956 347.3234 411.0338)" class="white__fill futura-book fs__4__px">6.07</text>
							<text transform="matrix(0.7106 0.7036 -0.7036 0.7106 337.7189 405.2086)" class="white__fill futura-book fs__4__px">3.86</text>
							<text transform="matrix(0.2696 0.963 -0.963 0.2696 344.0066 385.5306)" class="mustard__fill futura-med fs__4__px">74</text>
							<text transform="matrix(0.2696 0.963 -0.963 0.2696 337.5505 380.2765)" class="white__fill futura-book fs__4__px">136.78m2</text>
							<g>
								<polygon class="mustard__dl__fill" points="348.7,404.8 345,401.1 348.7,397.3 348.7,397.3"/>
								<polygon class="mustard__dr__fill" points="348.7,404.8 348.7,397.3 352.5,401.1"/>
							</g>
						</g>
					</g>
					<g>
						<g>
							<polygon class="pb-sprite-1" points="514.1,389.3 489.3,396.5 501.1,437.7 529.2,429.6"/>
							<text transform="matrix(0.3553 0.9347 -0.9347 0.3553 515.8392 406.4041)" class="white__fill futura-book fs__4__px">16.05</text>
							<text transform="matrix(0.956 -0.2934 0.2934 0.956 499.1047 397.3299)" class="white__fill futura-book fs__4__px">9.67</text>
							<text transform="matrix(0.956 -0.2934 0.2934 0.956 509.1015 433.7017)" class="white__fill futura-book fs__4__px">10.95</text>
							<text transform="matrix(0.2696 0.963 -0.963 0.2696 508.487 408.8492)" class="mustard__fill futura-med fs__4__px">73</text>
							<text transform="matrix(0.2696 0.963 -0.963 0.2696 502.032 403.5951)" class="white__fill futura-book fs__4__px">164.95m2</text>
							<g>
								<polygon class="mustard__dl__fill" points="507.3,403 503.6,399.2 507.3,395.5 507.3,395.5"/>
								<polygon class="mustard__dr__fill" points="507.3,403 507.3,395.5 511.1,399.2"/>
							</g>
						</g>
						<g>
							<polygon class="pb-sprite-2" points="468.8,402.4 489.3,396.5 501.1,437.7 480.6,443.6"/>
							<text transform="matrix(0.2773 0.9608 -0.9608 0.2773 488.8632 412.1668)" class="white__fill futura-book fs__4__px">16.00</text>
							<text transform="matrix(0.956 -0.2934 0.2934 0.956 475.513 404.757)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.956 -0.2934 0.2934 0.956 486.5604 440.8085)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.2696 0.963 -0.963 0.2696 484.8972 416.276)" class="mustard__fill futura-med fs__4__px">72</text>
							<text transform="matrix(0.2696 0.963 -0.963 0.2696 478.4411 411.0218)" class="white__fill futura-book fs__4__px">128.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-1" points="468.8,402.4 448.3,408.3 460,449.5 480.6,443.6"/>
							<text transform="matrix(0.2773 0.9608 -0.9608 0.2773 469.0399 417.3501)" class="white__fill futura-book fs__4__px">16.00</text>
							<text transform="matrix(0.956 -0.2934 0.2934 0.956 455.6901 409.9385)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.956 -0.2934 0.2934 0.956 466.7374 445.9899)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.2696 0.963 -0.963 0.2696 465.0739 421.4586)" class="mustard__fill futura-med fs__4__px">71</text>
							<text transform="matrix(0.2696 0.963 -0.963 0.2696 458.6179 416.2042)" class="white__fill futura-book fs__4__px">128.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-2" points="427.7,414.2 448.3,408.3 460,449.5 439.5,455.4"/>
							<text transform="matrix(0.2773 0.9608 -0.9608 0.2773 447.9901 423.6897)" class="white__fill futura-book fs__4__px">16.00</text>
							<text transform="matrix(0.956 -0.2934 0.2934 0.956 434.6408 416.2799)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.956 -0.2934 0.2934 0.956 445.6883 452.3333)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.2696 0.963 -0.963 0.2696 444.0251 427.7975)" class="mustard__fill futura-med fs__4__px">70</text>
							<text transform="matrix(0.2696 0.963 -0.963 0.2696 437.57 422.5431)" class="white__fill futura-book fs__4__px">128.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-1" points="427.7,414.2 407.2,420.1 419,461.3 439.5,455.4"/>
							<text transform="matrix(0.2773 0.9608 -0.9608 0.2773 427.4491 429.5117)" class="white__fill futura-book fs__4__px">16.00</text>
							<text transform="matrix(0.956 -0.2934 0.2934 0.956 414.0993 422.1018)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.956 -0.2934 0.2934 0.956 425.1457 458.1535)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.2696 0.963 -0.963 0.2696 423.4831 433.6214)" class="mustard__fill futura-med fs__4__px">69</text>
							<text transform="matrix(0.2696 0.963 -0.963 0.2696 417.0271 428.367)" class="white__fill futura-book fs__4__px">128.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-2" points="398.4,467.2 386.7,426.1 407.2,420.1 419,461.3"/>
							<text transform="matrix(0.2773 0.9608 -0.9608 0.2773 392.0399 439.9182)" class="white__fill futura-book fs__4__px">16.00</text>
							<text transform="matrix(0.2773 0.9608 -0.9608 0.2773 406.9647 435.3741)" class="white__fill futura-book fs__4__px">16.00</text>
							<text transform="matrix(0.956 -0.2934 0.2934 0.956 393.6154 427.9652)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.956 -0.2934 0.2934 0.956 404.6628 464.0175)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.2696 0.963 -0.963 0.2696 403.5534 439.5545)" class="mustard__fill futura-med fs__4__px">68</text>
							<text transform="matrix(0.2696 0.963 -0.963 0.2696 397.0984 434.3001)" class="white__fill futura-book fs__4__px">128.00m2</text>
							<g>
								<polygon class="mustard__dl__fill" points="401.9,434 398.1,430.2 401.9,426.5 401.9,426.5"/>
								<polygon class="mustard__dr__fill" points="401.9,434 401.9,426.5 405.7,430.2"/>
							</g>
						</g>
						<g>
							<polygon class="pb-sprite-2" points="545.7,473.6 529.2,429.6 503.9,436.9 516.8,481.9"/>
							<text transform="matrix(0.3553 0.9347 -0.9347 0.3553 532.3101 448.0004)" class="white__fill futura-book fs__4__px">17.56</text>
							<text transform="matrix(0.956 -0.2934 0.2934 0.956 525.5126 478.607)" class="white__fill futura-book fs__4__px">11.25</text>
							<text transform="matrix(0.956 -0.2934 0.2934 0.956 513.8791 438.2705)" class="white__fill futura-book fs__4__px">9.86</text>
							<text transform="matrix(0.2696 0.963 -0.963 0.2696 523.2438 453.5638)" class="mustard__fill futura-med fs__4__px">67</text>
							<text transform="matrix(0.2696 0.963 -0.963 0.2696 516.7878 448.3094)" class="white__fill futura-book fs__4__px">184.67m2</text>
							<g>
								<polygon class="mustard__dl__fill" points="529.2,472 525.4,468.3 529.2,464.5 529.2,464.5"/>
								<polygon class="mustard__dr__fill" points="529.2,472 529.2,464.5 533,468.3"/>
							</g>
						</g>
						<g>
							<polygon class="pb-sprite-1" points="483.4,442.8 503.9,436.9 516.8,481.9 496.3,487.8"/>
							<text transform="matrix(0.2773 0.9608 -0.9608 0.2773 504.3885 454.8599)" class="white__fill futura-book fs__4__px">17.50</text>
							<text transform="matrix(0.956 -0.2934 0.2934 0.956 502.9393 485.0647)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.956 -0.2934 0.2934 0.956 490.9272 445.7719)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.2696 0.963 -0.963 0.2696 499.6452 459.8997)" class="mustard__fill futura-med fs__4__px">66</text>
							<text transform="matrix(0.2696 0.963 -0.963 0.2696 493.1892 454.6454)" class="white__fill futura-book fs__4__px">140.00m2</text>
							<g>
								<polygon class="mustard__dl__fill" points="503.4,479.6 499.7,475.8 503.4,472 503.4,472"/>
								<polygon class="mustard__dr__fill" points="503.4,479.6 503.4,472 507.2,475.8"/>
							</g>
						</g>
						<g>
							<polygon class="pb-sprite-2" points="462.9,448.7 483.4,442.8 496.3,487.8 475.7,493.7"/>
							<text transform="matrix(0.2773 0.9608 -0.9608 0.2773 483.3397 460.7254)" class="white__fill futura-book fs__4__px">17.50</text>
							<text transform="matrix(0.956 -0.2934 0.2934 0.956 481.8903 490.9311)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.956 -0.2934 0.2934 0.956 469.8781 451.6393)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.2696 0.963 -0.963 0.2696 478.5964 465.7701)" class="mustard__fill futura-med fs__4__px">65</text>
							<text transform="matrix(0.2696 0.963 -0.963 0.2696 472.1404 460.5157)" class="white__fill futura-book fs__4__px">140.00m2</text>
							<g>
								<polygon class="mustard__dl__fill" points="483.4,484.6 479.6,480.9 483.4,477.1 483.4,477.1"/>
								<polygon class="mustard__dr__fill" points="483.4,484.6 483.4,477.1 487.2,480.9"/>
							</g>
						</g>
						<g>
							<polygon class="pb-sprite-1" points="442.3,454.6 462.9,448.7 475.7,493.7 455.2,499.7"/>
							<text transform="matrix(0.2773 0.9608 -0.9608 0.2773 463.1698 466.4971)" class="white__fill futura-book fs__4__px">17.50</text>
							<text transform="matrix(0.956 -0.2934 0.2934 0.956 461.7188 496.7007)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.956 -0.2934 0.2934 0.956 449.7073 457.4097)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.2696 0.963 -0.963 0.2696 458.4255 471.5399)" class="mustard__fill futura-med fs__4__px">64</text>
							<text transform="matrix(0.2696 0.963 -0.963 0.2696 451.9695 466.2855)" class="white__fill futura-book fs__4__px">140.00m2</text>
							<g>
								<polygon class="mustard__dl__fill" points="462.9,490.6 459.1,486.8 462.9,483 462.9,483"/>
								<polygon class="mustard__dr__fill" points="462.9,490.6 462.9,483 466.6,486.8"/>
							</g>
						</g>
						<g>
							<polygon class="pb-sprite-2" points="434.7,505.6 421.8,460.5 442.3,454.6 455.2,499.7"/>
							<text transform="matrix(0.2773 0.9608 -0.9608 0.2773 428.3905 478.4988)" class="white__fill futura-book fs__4__px">17.50</text>
							<text transform="matrix(0.2773 0.9608 -0.9608 0.2773 443.6161 474.8047)" class="white__fill futura-book fs__4__px">17.50</text>
							<text transform="matrix(0.956 -0.2934 0.2934 0.956 440.7819 503.0821)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.956 -0.2934 0.2934 0.956 429.8898 462.4474)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.2696 0.963 -0.963 0.2696 439.0837 477.2496)" class="mustard__fill futura-med fs__4__px">63</text>
							<text transform="matrix(0.2696 0.963 -0.963 0.2696 432.6286 471.9952)" class="white__fill futura-book fs__4__px">140.00m2</text>
							<g>
								<polygon class="mustard__dl__fill" points="443.3,497.5 439.5,493.7 443.3,490 443.3,490"/>
								<polygon class="mustard__dr__fill" points="443.3,497.5 443.3,490 447,493.7"/>
							</g>
						</g>
					</g>
					<g>
						<g>
							<polygon class="pb-sprite-1" points="630.9,630.3 670.8,615.2 678.4,635.2 638.4,650.3"/>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 668.185 621.6415)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 635.0435 636.5397)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.9351 -0.3545 0.3545 0.9351 652.7983 641.9366)" class="white__fill futura-book fs__4__px">16.00</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 651.4254 629.9337)" class="mustard__fill futura-med fs__4__px">62</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 646.785 636.8433)" class="white__fill futura-book fs__4__px">128.00m2</text>
							<g>
								<polygon class="mustard__dl__fill" points="643.4,641.1 639.6,637.3 643.4,633.5 643.4,633.5"/>
								<polygon class="mustard__dr__fill" points="643.4,641.1 643.4,633.5 647.1,637.3"/>
							</g>
						</g>
						<g>
							<polygon class="pb-sprite-2" points="623.4,610.2 663.4,595.1 670.8,615.2 630.9,630.3"/>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 660.7218 602.1772)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 627.5809 617.0742)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.9351 -0.3545 0.3545 0.9351 645.335 622.4716)" class="white__fill futura-book fs__4__px">16.00</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 643.9615 610.4698)" class="mustard__fill futura-med fs__4__px">61</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 639.3212 617.3797)" class="white__fill futura-book fs__4__px">128.00m2</text>
							<g>
								<polygon class="mustard__dl__fill" points="635.9,622.7 632.1,618.9 635.9,615.1 635.9,615.1"/>
								<polygon class="mustard__dr__fill" points="635.9,622.7 635.9,615.1 639.6,618.9"/>
							</g>
						</g>
						<g>
							<polygon class="pb-sprite-1" points="615.9,590.1 655.8,575 663.4,595.1 623.4,610.2"/>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 652.6606 582.5712)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 619.5207 597.4709)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.9351 -0.3545 0.3545 0.9351 637.2737 602.8646)" class="white__fill futura-book fs__4__px">16.00</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 635.9012 590.8631)" class="mustard__fill futura-med fs__4__px">60</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 631.2609 597.7728)" class="white__fill futura-book fs__4__px">128.00m2</text>
							<g>
								<polygon class="mustard__dl__fill" points="627.6,602.6 623.8,598.9 627.6,595.1 627.6,595.1"/>
								<polygon class="mustard__dr__fill" points="627.6,602.6 627.6,595.1 631.4,598.9"/>
							</g>
						</g>
						<g>
							<polygon class="pb-sprite-2" points="608.4,570 648.3,555 655.8,575 615.9,590.1"/>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 645.7762 562.7908)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 612.6348 577.689)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.9351 -0.3545 0.3545 0.9351 630.3898 583.0837)" class="white__fill futura-book fs__4__px">16.00</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 629.017 571.0838)" class="mustard__fill futura-med fs__4__px">59</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 624.3766 577.9935)" class="white__fill futura-book fs__4__px">128.00m2</text>
							<g>
								<polygon class="mustard__dl__fill" points="620.8,582.5 617.1,578.8 620.8,575 620.8,575"/>
								<polygon class="mustard__dr__fill" points="620.8,582.5 620.8,575 624.6,578.8"/>
							</g>
						</g>
						<g>
							<polygon class="pb-sprite-1" points="600.9,550 640.8,534.9 648.3,555 608.4,570"/>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 638.3285 541.9667)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 605.1888 556.8642)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.9351 -0.3545 0.3545 0.9351 622.9426 562.2601)" class="white__fill futura-book fs__4__px">16.00</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 621.5707 550.2586)" class="mustard__fill futura-med fs__4__px">58</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 616.9303 557.1685)" class="white__fill futura-book fs__4__px">128.00m2</text>
							<g>
								<polygon class="mustard__dl__fill" points="613.3,561.8 609.5,558 613.3,554.2 613.3,554.2"/>
								<polygon class="mustard__dr__fill" points="613.3,561.8 613.3,554.2 617.1,558"/>
							</g>
						</g>
						<g>
							<polygon class="pb-sprite-2" points="593.3,529.9 633.3,514.8 640.8,534.9 600.9,550"/>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 630.7892 522.1132)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 597.648 537.0123)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.9351 -0.3545 0.3545 0.9351 615.4009 542.408)" class="white__fill futura-book fs__4__px">16.00</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 614.0302 530.4051)" class="mustard__fill futura-med fs__4__px">57</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 609.3898 537.3148)" class="white__fill futura-book fs__4__px">128.00m2</text>
							<g>
								<polygon class="mustard__dl__fill" points="605.8,541 602,537.2 605.8,533.4 605.8,533.4"/>
								<polygon class="mustard__dr__fill" points="605.8,541 605.8,533.4 609.6,537.2"/>
							</g>
						</g>
						<g>
							<polygon class="pb-sprite-1" points="585.8,509.8 625.8,494.8 633.3,514.8 593.3,529.9"/>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 622.9189 501.9016)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 589.7771 516.7988)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.9351 -0.3545 0.3545 0.9351 607.5324 522.1953)" class="white__fill futura-book fs__4__px">16.00</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 606.1598 510.1936)" class="mustard__fill futura-med fs__4__px">56</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 601.5194 517.1033)" class="white__fill futura-book fs__4__px">128.00m2</text>
							<g>
								<polygon class="mustard__dl__fill" points="597.5,520.5 593.7,516.7 597.5,512.9 597.5,512.9"/>
								<polygon class="mustard__dr__fill" points="597.5,520.5 597.5,512.9 601.2,516.7"/>
							</g>
						</g>
						<g>
							<polygon class="pb-sprite-2" points="578.3,489.8 618.3,474.7 625.8,494.8 585.8,509.8"/>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 615.6782 482.0853)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 582.538 496.984)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.9351 -0.3545 0.3545 0.9351 600.2913 502.3785)" class="white__fill futura-book fs__4__px">16.00</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 598.9193 490.3767)" class="mustard__fill futura-med fs__4__px">55</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 594.2789 497.2867)" class="white__fill futura-book fs__4__px">128.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-1" points="570.8,469.7 610.8,454.6 618.3,474.7 578.3,489.8"/>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 608.222 462.3054)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 575.0784 477.2033)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.9351 -0.3545 0.3545 0.9351 592.8336 482.5991)" class="white__fill futura-book fs__4__px">16.00</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 591.4613 470.5974)" class="mustard__fill futura-med fs__4__px">54</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 586.8209 477.5071)" class="white__fill futura-book fs__4__px">128.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-2" points="563.3,449.7 603.2,434.6 610.8,454.6 570.8,469.7"/>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 600.7483 442.5257)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 567.6071 457.4247)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.9351 -0.3545 0.3545 0.9351 585.3622 462.8195)" class="white__fill futura-book fs__4__px">16.00</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 583.9894 450.8177)" class="mustard__fill futura-med fs__4__px">53</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 579.349 457.7276)" class="white__fill futura-book fs__4__px">128.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-1" points="555.8,429.6 595.7,414.5 603.2,434.6 563.3,449.7"/>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 593.2012 421.5528)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 560.0604 436.4497)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.9351 -0.3545 0.3545 0.9351 577.814 441.8452)" class="white__fill futura-book fs__4__px">16.00</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 576.4423 429.843)" class="mustard__fill futura-med fs__4__px">52</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 571.8019 436.7527)" class="white__fill futura-book fs__4__px">128.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-2" points="548.3,409.5 588.2,394.4 595.7,414.5 555.8,429.6"/>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 585.726 402.4018)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 552.5851 417.2987)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.9351 -0.3545 0.3545 0.9351 570.3394 422.6935)" class="white__fill futura-book fs__4__px">16.00</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 568.9677 410.6931)" class="mustard__fill futura-med fs__4__px">51</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 564.3273 417.6028)" class="white__fill futura-book fs__4__px">128.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-1" points="540.7,389.4 580.7,374.4 588.2,394.4 548.3,409.5"/>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 578.1763 382.1143)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 545.0392 397.0129)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.9351 -0.3545 0.3545 0.9351 562.7921 402.4081)" class="white__fill futura-book fs__4__px">16.00</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 561.4191 390.4065)" class="mustard__fill futura-med fs__4__px">50</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 556.7787 397.3162)" class="white__fill futura-book fs__4__px">128.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-2" points="533.3,369.4 573.2,354.3 580.7,374.4 540.7,389.4"/>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 570.2491 361.9318)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 537.1064 376.8294)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.9351 -0.3545 0.3545 0.9351 554.8613 382.2262)" class="white__fill futura-book fs__4__px">16.00</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 553.4894 370.2249)" class="mustard__fill futura-med fs__4__px">49</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 548.849 377.1346)" class="white__fill futura-book fs__4__px">128.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-1" points="525.7,349.3 565.7,334.2 573.2,354.3 533.3,369.4"/>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 563.1578 342.0036)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 530.0162 356.8987)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.9351 -0.3545 0.3545 0.9351 547.7701 362.2953)" class="white__fill futura-book fs__4__px">16.00</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 546.3976 350.295)" class="mustard__fill futura-med fs__4__px">48</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 541.7572 357.2049)" class="white__fill futura-book fs__4__px">128.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-2" points="518.2,329.2 558.2,314.2 565.7,334.2 525.7,349.3"/>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 555.6837 322.2428)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 522.5415 337.1391)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.9351 -0.3545 0.3545 0.9351 540.2966 342.5364)" class="white__fill futura-book fs__4__px">16.00</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 538.9235 330.5342)" class="mustard__fill futura-med fs__4__px">47</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 534.2831 337.4439)" class="white__fill futura-book fs__4__px">128.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-1" points="510.7,309.2 550.7,294.1 558.2,314.2 518.2,329.2"/>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 547.9896 301.3425)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 514.8484 316.2416)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.9351 -0.3545 0.3545 0.9351 532.6013 321.6355)" class="white__fill futura-book fs__4__px">16.00</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 531.2303 309.635)" class="mustard__fill futura-med fs__4__px">46</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 526.59 316.5447)" class="white__fill futura-book fs__4__px">128.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-2" points="503.2,289.1 543.1,274.1 550.7,294.1 510.7,309.2"/>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 540.1512 281.8763)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 507.011 296.7751)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.9351 -0.3545 0.3545 0.9351 524.764 302.1691)" class="white__fill futura-book fs__4__px">16.00</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 523.3922 290.1678)" class="mustard__fill futura-med fs__4__px">45</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 518.7518 297.0777)" class="white__fill futura-book fs__4__px">128.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-1" points="495.7,269.1 535.6,254 543.1,274.1 503.2,289.1"/>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 533.5084 261.2252)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 500.3681 276.124)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.9351 -0.3545 0.3545 0.9351 518.1218 281.5186)" class="white__fill futura-book fs__4__px">16.00</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 516.7494 269.5169)" class="mustard__fill futura-med fs__4__px">44</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 512.109 276.4265)" class="white__fill futura-book fs__4__px">128.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-2" points="488.2,249 528.1,233.9 535.6,254 495.7,269.1"/>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 525.5984 241.311)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 492.4566 256.2083)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.9351 -0.3545 0.3545 0.9351 510.2101 261.6053)" class="white__fill futura-book fs__4__px">16.00</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 508.8378 249.6033)" class="mustard__fill futura-med fs__4__px">43</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 504.1974 256.513)" class="white__fill futura-book fs__4__px">128.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-1" points="480.7,228.9 520.6,213.9 528.1,233.9 488.2,249"/>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 518.0908 221.5864)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 484.952 236.4836)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.9351 -0.3545 0.3545 0.9351 502.7048 241.8793)" class="white__fill futura-book fs__4__px">16.00</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 501.3317 229.8765)" class="mustard__fill futura-med fs__4__px">42</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 496.6913 236.7862)" class="white__fill futura-book fs__4__px">128.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-2" points="473.2,208.8 513.1,193.8 520.6,213.9 480.7,228.9"/>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 510.5622 201.7311)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 477.4203 216.6283)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.9351 -0.3545 0.3545 0.9351 495.1743 222.0251)" class="white__fill futura-book fs__4__px">16.00</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 493.8019 210.0232)" class="mustard__fill futura-med fs__4__px">41</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 489.1613 216.9329)" class="white__fill futura-book fs__4__px">128.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-1" points="465.6,188.8 505.6,173.7 513.1,193.8 473.2,208.8"/>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 502.802 181.2409)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 469.6602 196.1381)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.9351 -0.3545 0.3545 0.9351 487.4147 201.5361)" class="white__fill futura-book fs__4__px">16.00</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 486.0431 189.5335)" class="mustard__fill futura-med fs__4__px">40</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 481.4027 196.4432)" class="white__fill futura-book fs__4__px">128.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-2" points="458.1,168.7 498.1,153.6 505.6,173.7 465.6,188.8"/>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 495.5634 161.4104)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 462.4207 176.3079)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.9351 -0.3545 0.3545 0.9351 480.1748 181.7032)" class="white__fill futura-book fs__4__px">16.00</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 478.8029 169.7012)" class="mustard__fill futura-med fs__4__px">39</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 474.1625 176.6109)" class="white__fill futura-book fs__4__px">128.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-1" points="450.6,148.7 490.5,133.6 498.1,153.6 458.1,168.7"/>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 488.0384 141.1502)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 454.8996 156.0473)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.9351 -0.3545 0.3545 0.9351 472.653 161.4447)" class="white__fill futura-book fs__4__px">16.00</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 471.2802 149.4436)" class="mustard__fill futura-med fs__4__px">38</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 466.6398 156.3533)" class="white__fill futura-book fs__4__px">128.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-2" points="440.6,121.9 480.5,106.8 490.5,133.6 450.6,148.7"/>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 479.1306 117.2052)" class="white__fill futura-book fs__4__px">10.66</text>
							<text transform="matrix(0.9351 -0.3545 0.3545 0.9351 465.3392 141.7391)" class="white__fill futura-book fs__4__px">16.00</text>
							<text transform="matrix(0.3574 0.934 -0.934 0.3574 445.3784 130.5547)" class="white__fill futura-book fs__4__px">10.66</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 462.4728 125.4607)" class="mustard__fill futura-med fs__4__px">37</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 457.8324 132.3704)" class="white__fill futura-book fs__4__px">170.51m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-1" points="429.8,93.2 471.6,83.1 480.5,106.8 440.6,121.9"/>
							<text transform="matrix(0.9703 -0.2417 0.2417 0.9703 445.566 93.9242)" class="white__fill futura-book fs__4__px">16.28</text>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 470.4785 94.2244)" class="white__fill futura-book fs__4__px">9.50</text>
							<text transform="matrix(0.9351 -0.3545 0.3545 0.9351 456.0081 114.8569)" class="white__fill futura-book fs__4__px">16.00</text>
							<text transform="matrix(0.3574 0.934 -0.934 0.3574 434.8239 102.9394)" class="white__fill futura-book fs__4__px">11.49</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 454.4862 101.6883)" class="mustard__fill futura-med fs__4__px">36</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 449.8456 108.5979)" class="white__fill futura-book fs__4__px">168.42m2</text>
							<g>
								<polygon class="mustard__dl__fill" points="445.3,110 441.5,106.2 445.3,102.5 445.3,102.5"/>
								<polygon class="mustard__dr__fill" points="445.3,110 445.3,102.5 449.1,106.2"/>
							</g>
						</g>
					</g>
					<g>
						<g>
							<polygon class="pb-sprite-2" points="405.6,99.4 424.7,150.5 403.8,156.5 384.9,105.1"/>
							<text transform="matrix(0.9593 -0.2823 0.2823 0.9593 409.4573 153.9695)" class="white__fill futura-book fs__4__px">8.15</text>
							<text transform="matrix(0.9617 -0.2742 0.2742 0.9617 392.6881 107.8764)" class="white__fill futura-book fs__4__px">8.04</text>
							<text transform="matrix(0.3523 0.9359 -0.9359 0.3523 408.7262 119.3708)" class="white__fill futura-book fs__4__px">20.39</text>
							<text transform="matrix(0.298 0.9546 -0.9546 0.298 404.1581 124.3758)" class="mustard__fill futura-med fs__4__px">35</text>
							<text transform="matrix(0.298 0.9546 -0.9546 0.298 397.55 119.3152)" class="white__fill futura-book fs__4__px">164.94m2</text>
							<g>
								<polygon class="mustard__dl__fill" points="412.2,144.9 408.4,141.1 412.2,137.4 412.2,137.4"/>
								<polyline class="mustard__dr__fill" points="415.9,141.1 412.2,144.9 412.2,137.4"/>
							</g>
						</g>
						<g>
							<polygon class="pb-sprite-1" points="364.3,111 384.9,105.1 403.8,156.5 383.3,162.4"/>
							<text transform="matrix(0.9593 -0.2823 0.2823 0.9593 389.3788 159.4173)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.9617 -0.2742 0.2742 0.9617 371.7138 113.4196)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.3523 0.9359 -0.9359 0.3523 387.6793 126.4624)" class="white__fill futura-book fs__4__px">20.50</text>
							<text transform="matrix(0.298 0.9546 -0.9546 0.298 383.9045 131.168)" class="mustard__fill futura-med fs__4__px">34</text>
							<text transform="matrix(0.298 0.9546 -0.9546 0.298 377.2965 126.1074)" class="white__fill futura-book fs__4__px">163.66m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-2" points="343.9,117 364.3,111 383.3,162.4 362.7,168.3"/>
							<text transform="matrix(0.9593 -0.2823 0.2823 0.9593 368.8528 165.6017)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.9427 -0.3336 0.3336 0.9427 352.0322 119.5809)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.3523 0.9359 -0.9359 0.3523 367.4498 132.3982)" class="white__fill futura-book fs__4__px">20.52</text>
							<text transform="matrix(0.298 0.9546 -0.9546 0.298 362.9299 137.8855)" class="mustard__fill futura-med fs__4__px">33</text>
							<text transform="matrix(0.298 0.9546 -0.9546 0.298 356.3219 132.8249)" class="white__fill futura-book fs__4__px">163.57m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-1" points="323.4,123.3 343.9,117 362.7,168.3 342.2,174.3"/>
							<text transform="matrix(0.9593 -0.2823 0.2823 0.9593 347.8044 171.4236)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.9427 -0.3336 0.3336 0.9427 331.4316 125.9241)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.3523 0.9359 -0.9359 0.3523 346.9244 138.966)" class="white__fill futura-book fs__4__px">20.46</text>
							<text transform="matrix(0.298 0.9546 -0.9546 0.298 342.43 143.5576)" class="mustard__fill futura-med fs__4__px">32</text>
							<text transform="matrix(0.298 0.9546 -0.9546 0.298 335.822 138.497)" class="white__fill futura-book fs__4__px">162.75m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-2" points="303.1,129.9 323.4,123.3 342.2,174.3 321.7,180.3"/>
							<text transform="matrix(0.9593 -0.2823 0.2823 0.9593 327.726 177.4711)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.9427 -0.3336 0.3336 0.9427 310.9795 132.3444)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.3523 0.9359 -0.9359 0.3523 326.5475 144.9387)" class="white__fill futura-book fs__4__px">20.30</text>
							<text transform="matrix(0.298 0.9546 -0.9546 0.298 322.4142 150.1119)" class="mustard__fill futura-med fs__4__px">31</text>
							<text transform="matrix(0.298 0.9546 -0.9546 0.298 315.8062 145.0513)" class="white__fill futura-book fs__4__px">161.20m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-1" points="282.8,136.7 303.1,129.9 321.7,180.3 301.1,186.2"/>
							<text transform="matrix(0.9593 -0.2823 0.2823 0.9593 307.4977 183.1422)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.9427 -0.3336 0.3336 0.9427 290.8232 138.6879)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.3523 0.9359 -0.9359 0.3523 305.8717 151.2085)" class="white__fill futura-book fs__4__px">20.06</text>
							<text transform="matrix(0.298 0.9546 -0.9546 0.298 301.5901 156.2331)" class="mustard__fill futura-med fs__4__px">30</text>
							<text transform="matrix(0.298 0.9546 -0.9546 0.298 294.982 151.1725)" class="white__fill futura-book fs__4__px">158.92m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-2" points="262.6,143.6 282.8,136.7 301.1,186.2 280.6,192.1"/>
							<text transform="matrix(0.9593 -0.2823 0.2823 0.9593 286.6737 189.5974)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.9427 -0.3336 0.3336 0.9427 270.8201 145.6288)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.3523 0.9359 -0.9359 0.3523 286.0182 157.6289)" class="white__fill futura-book fs__4__px">19.73</text>
							<text transform="matrix(0.298 0.9546 -0.9546 0.298 281.6474 162.9497)" class="mustard__fill futura-med fs__4__px">29</text>
							<text transform="matrix(0.298 0.9546 -0.9546 0.298 275.0394 157.8891)" class="white__fill futura-book fs__4__px">155.92m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-1" points="242.5,150.9 262.6,143.6 280.6,192.1 260.1,198"/>
							<text transform="matrix(0.9593 -0.2823 0.2823 0.9593 266.3712 195.493)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.9427 -0.3336 0.3336 0.9427 250.2195 152.7189)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.3761 0.9266 -0.9266 0.3761 265.0629 163.932)" class="white__fill futura-book fs__4__px">19.30</text>
							<text transform="matrix(0.298 0.9546 -0.9546 0.298 260.8972 168.6979)" class="mustard__fill futura-med fs__4__px">28</text>
							<text transform="matrix(0.298 0.9546 -0.9546 0.298 254.2879 163.6367)" class="white__fill futura-book fs__4__px">152.19m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-2" points="222.5,158.4 242.5,150.9 260.1,198 239.5,203.9"/>
							<text transform="matrix(0.9593 -0.2823 0.2823 0.9593 245.3962 201.6871)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.9196 -0.3929 0.3929 0.9196 230.6786 160.4967)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.3761 0.9266 -0.9266 0.3761 244.9848 170.5741)" class="white__fill futura-book fs__4__px">18.79</text>
							<text transform="matrix(0.298 0.9546 -0.9546 0.298 240.6499 175.9004)" class="mustard__fill futura-med fs__4__px">27</text>
							<text transform="matrix(0.298 0.9546 -0.9546 0.298 234.0416 170.8389)" class="white__fill futura-book fs__4__px">147.74m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-1" points="202.5,166 222.5,158.4 239.5,203.9 219,209.8"/>
							<text transform="matrix(0.9593 -0.2823 0.2823 0.9593 224.7214 206.9878)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.9196 -0.3929 0.3929 0.9196 210.4503 168.1097)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.3761 0.9266 -0.9266 0.3761 224.9809 178.0389)" class="white__fill futura-book fs__4__px">18.19</text>
							<text transform="matrix(0.298 0.9546 -0.9546 0.298 220.7082 182.8428)" class="mustard__fill futura-med fs__4__px">26</text>
							<text transform="matrix(0.298 0.9546 -0.9546 0.298 214.1002 177.7822)" class="white__fill futura-book fs__4__px">142.56m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-2" points="182.6,173.9 202.5,166 219,209.8 198.4,215.8"/>
							<text transform="matrix(0.9593 -0.2823 0.2823 0.9593 204.9418 213.034)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.9196 -0.3929 0.3929 0.9196 190.745 175.4249)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.3761 0.9266 -0.9266 0.3761 205.0521 185.2047)" class="white__fill futura-book fs__4__px">17.50</text>
							<text transform="matrix(0.298 0.9546 -0.9546 0.298 201.2259 190.2311)" class="mustard__fill futura-med fs__4__px">25</text>
							<text transform="matrix(0.298 0.9546 -0.9546 0.298 194.6179 185.1705)" class="white__fill futura-book fs__4__px">136.66m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-1" points="162.8,182.1 182.6,173.9 198.4,215.8 177.9,221.6"/>
							<text transform="matrix(0.9593 -0.2823 0.2823 0.9593 184.4916 218.6686)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.9196 -0.3929 0.3929 0.9196 170.5927 183.5841)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.3761 0.9266 -0.9266 0.3761 185.1957 192.2203)" class="white__fill futura-book fs__4__px">16.71</text>
							<text transform="matrix(0.298 0.9546 -0.9546 0.298 182.0021 197.6215)" class="mustard__fill futura-med fs__4__px">24</text>
							<text transform="matrix(0.298 0.9546 -0.9546 0.298 175.3941 192.5609)" class="white__fill futura-book fs__4__px">130.04m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-2" points="143.1,190.4 162.8,182.1 177.9,221.6 157.3,227.6"/>
							<text transform="matrix(0.9593 -0.2823 0.2823 0.9593 163.7006 224.7151)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.9196 -0.3929 0.3929 0.9196 150.8869 191.9241)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.3761 0.9266 -0.9266 0.3761 165.5678 200.5052)" class="white__fill futura-book fs__4__px">15.84</text>
							<text transform="matrix(0.298 0.9546 -0.9546 0.298 160.9732 204.5647)" class="mustard__fill futura-med fs__4__px">23</text>
							<text transform="matrix(0.298 0.9546 -0.9546 0.298 154.3649 199.5032)" class="white__fill futura-book fs__4__px">122.70m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-1" points="123.6,199 143.1,190.4 157.3,227.6 136.9,233.5"/>
							<text transform="matrix(0.9593 -0.2823 0.2823 0.9593 142.9311 231.0962)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.9196 -0.3929 0.3929 0.9196 131.0136 200.6851)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.3761 0.9266 -0.9266 0.3761 131.0228 213.3243)" class="white__fill futura-book fs__4__px">13.83</text>
							<text transform="matrix(0.3761 0.9266 -0.9266 0.3761 145.3529 208.2867)" class="white__fill futura-book fs__4__px">14.88</text>
							<text transform="matrix(0.298 0.9546 -0.9546 0.298 140.9318 209.264)" class="mustard__fill futura-med fs__4__px">22</text>
							<text transform="matrix(0.298 0.9546 -0.9546 0.298 134.3237 204.2034)" class="white__fill futura-book fs__4__px">114.64m2</text>
							<g>
								<polygon class="mustard__dl__fill" points="149.9,224.5 146.1,220.7 149.9,216.9 149.9,216.9"/>
								<polyline class="mustard__dr__fill" points="153.6,220.7 149.9,224.5 149.9,216.9"/>
							</g>
						</g>
					</g>
					<g>
						<g>
							<path class="pb-sprite-2" d="M77.6,220.1l17.1,12.7l-33,42.1l-28.6-21c-0.2-0.1-3.3-2.3-3.1-6.3
								c0.2-4,3.6-5.9,3.8-6C48.4,234.5,63,227.3,77.6,220.1z"/>
							<text transform="matrix(0.7704 0.6376 -0.6376 0.7704 79.93 226.6677)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.7704 0.6376 -0.6376 0.7704 44.973 259.4074)" class="white__fill futura-book fs__4__px">13.39</text>
							<text transform="matrix(-7.503009e-02 0.9972 -0.9972 -7.503009e-02 34.3156 243.7779)" class="white__fill futura-book fs__4__px">5.43</text>
							<text transform="matrix(0.8983 -0.4393 0.4393 0.8983 52.3027 237.713)" class="white__fill futura-book fs__4__px">18.26</text>
							<text transform="matrix(0.6296 -0.7769 0.7769 0.6296 64.9298 245.5025)" class="mustard__fill futura-med fs__4__px">21</text>
							<text transform="matrix(0.6296 -0.7769 0.7769 0.6296 64.3776 253.8072)" class="white__fill futura-book fs__4__px">254.19m2</text>
							<g>
								<polygon class="mustard__dl__fill" points="78.2,237.3 74.4,233.5 78.2,229.8 78.2,229.8"/>
								<polyline class="mustard__dr__fill" points="82,233.5 78.2,237.3 78.2,229.8"/>
							</g>
						</g>
						<g>
							<polygon class="pb-sprite-1" points="94.7,232.8 111.8,245.7 78.7,287.8 61.7,274.9"/>
							<text transform="matrix(0.7704 0.6376 -0.6376 0.7704 68.4525 276.9011)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.7704 0.6376 -0.6376 0.7704 97.638 240.0295)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.6158 -0.7879 0.7879 0.6158 79.7773 259.4104)" class="white__fill futura-book fs__4__px">20.00</text>
							<text transform="matrix(0.6296 -0.7769 0.7769 0.6296 86.7995 261.5504)" class="mustard__fill futura-med fs__4__px">20</text>
							<text transform="matrix(0.6296 -0.7769 0.7769 0.6296 86.2472 269.856)" class="white__fill futura-book fs__4__px">160.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-2" points="111.8,245.7 128.7,258.7 95.7,300.9 78.7,287.8"/>
							<text transform="matrix(0.7704 0.6376 -0.6376 0.7704 86.1439 290.5617)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.7704 0.6376 -0.6376 0.7704 114.804 253.0905)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.6158 -0.7879 0.7879 0.6158 96.6454 272.0803)" class="white__fill futura-book fs__4__px">20.00</text>
							<text transform="matrix(0.6296 -0.7769 0.7769 0.6296 103.2194 274.0143)" class="mustard__fill futura-med fs__4__px">19</text>
							<text transform="matrix(0.6296 -0.7769 0.7769 0.6296 102.6671 282.3199)" class="white__fill futura-book fs__4__px">160.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-1" points="128.7,258.7 145.6,272 112.5,314 95.7,300.9"/>
							<text transform="matrix(0.7704 0.6376 -0.6376 0.7704 102.7884 302.8576)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.7704 0.6376 -0.6376 0.7704 131.7493 266.2839)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.6158 -0.7879 0.7879 0.6158 114.1869 285.6662)" class="white__fill futura-book fs__4__px">20.00</text>
							<text transform="matrix(0.6296 -0.7769 0.7769 0.6296 120.3869 287.5992)" class="mustard__fill futura-med fs__4__px">18</text>
							<text transform="matrix(0.6296 -0.7769 0.7769 0.6296 119.8346 295.9049)" class="white__fill futura-book fs__4__px">160.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-2" points="145.6,272 162.4,285.3 129.2,327.4 112.5,314"/>
							<text transform="matrix(0.7704 0.6376 -0.6376 0.7704 119.5081 316.0691)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.7704 0.6376 -0.6376 0.7704 148.617 279.3459)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.6158 -0.7879 0.7879 0.6158 130.3847 298.5041)" class="white__fill futura-book fs__4__px">20.00</text>
							<text transform="matrix(0.6296 -0.7769 0.7769 0.6296 137.3307 300.5123)" class="mustard__fill futura-med fs__4__px">17</text>
							<text transform="matrix(0.6296 -0.7769 0.7769 0.6296 136.7785 308.817)" class="white__fill futura-book fs__4__px">160.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-1" points="162.4,285.3 179,298.8 145.8,340.8 129.2,327.4"/>
							<text transform="matrix(0.7704 0.6376 -0.6376 0.7704 135.7801 329.3552)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.7704 0.6376 -0.6376 0.7704 164.8152 292.9099)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.6158 -0.7879 0.7879 0.6158 147.328 311.8654)" class="white__fill futura-book fs__4__px">20.00</text>
							<text transform="matrix(0.6296 -0.7769 0.7769 0.6296 154.2746 314.1334)" class="mustard__fill futura-med fs__4__px">16</text>
							<text transform="matrix(0.6296 -0.7769 0.7769 0.6296 153.7223 322.4381)" class="white__fill futura-book fs__4__px">160.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-2" points="179,298.8 195.5,312.4 162.3,354.6 145.8,340.8"/>
							<text transform="matrix(0.7704 0.6376 -0.6376 0.7704 152.2 343.238)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.7704 0.6376 -0.6376 0.7704 181.3846 306.1413)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.6158 -0.7879 0.7879 0.6158 163.226 326.1194)" class="white__fill futura-book fs__4__px">20.00</text>
							<text transform="matrix(0.6296 -0.7769 0.7769 0.6296 170.0973 327.9049)" class="mustard__fill futura-med fs__4__px">15</text>
							<text transform="matrix(0.6296 -0.7769 0.7769 0.6296 169.5451 336.2096)" class="white__fill futura-book fs__4__px">160.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-1" points="195.5,312.4 211.8,326.2 178.7,368.4 162.3,354.6"/>
							<text transform="matrix(0.7704 0.6376 -0.6376 0.7704 168.5457 356.7478)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.7704 0.6376 -0.6376 0.7704 197.8065 319.8015)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.6158 -0.7879 0.7879 0.6158 179.8705 339.7209)" class="white__fill futura-book fs__4__px">20.00</text>
							<text transform="matrix(0.6296 -0.7769 0.7769 0.6296 187.4235 341.8521)" class="mustard__fill futura-med fs__4__px">14</text>
							<text transform="matrix(0.6296 -0.7769 0.7769 0.6296 186.8712 350.1568)" class="white__fill futura-book fs__4__px">160.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-2" points="211.8,326.2 228,340.2 194.9,382.3 178.7,368.4"/>
							<text transform="matrix(0.7168 0.6972 -0.6972 0.7168 185.4152 370.7568)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.7168 0.6972 -0.6972 0.7168 213.852 333.1365)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.6158 -0.7879 0.7879 0.6158 196.3656 352.7717)" class="white__fill futura-book fs__4__px">20.00</text>
							<text transform="matrix(0.6296 -0.7769 0.7769 0.6296 202.7248 355.3131)" class="mustard__fill futura-med fs__4__px">13</text>
							<text transform="matrix(0.6296 -0.7769 0.7769 0.6296 202.172 363.6187)" class="white__fill futura-book fs__4__px">160.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-1" points="228,340.2 244.1,354.2 211,396.4 194.9,382.3"/>
							<text transform="matrix(0.7168 0.6972 -0.6972 0.7168 201.3108 384.2643)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.7168 0.6972 -0.6972 0.7168 230.4223 347.5427)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.6158 -0.7879 0.7879 0.6158 212.8627 366.8801)" class="white__fill futura-book fs__4__px">20.00</text>
							<text transform="matrix(0.6296 -0.7769 0.7769 0.6296 219.297 369.3473)" class="mustard__fill futura-med fs__4__px">12</text>
							<text transform="matrix(0.6296 -0.7769 0.7769 0.6296 218.7448 377.6519)" class="white__fill futura-book fs__4__px">160.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-2" points="244.1,354.2 260.1,368.5 226.9,410.6 211,396.4"/>
							<text transform="matrix(0.7168 0.6972 -0.6972 0.7168 217.8833 398.3728)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.7168 0.6972 -0.6972 0.7168 246.7686 361.4258)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.6158 -0.7879 0.7879 0.6158 228.6117 381.8088)" class="white__fill futura-book fs__4__px">20.00</text>
							<text transform="matrix(0.6296 -0.7769 0.7769 0.6296 235.1203 384.1256)" class="mustard__fill futura-med fs__4__px">11</text>
							<text transform="matrix(0.6296 -0.7769 0.7769 0.6296 234.5675 392.4303)" class="white__fill futura-book fs__4__px">160.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-1" points="260.1,368.5 276,382.9 242.8,425 226.9,410.6"/>
							<text transform="matrix(0.7168 0.6972 -0.6972 0.7168 233.4074 413.0773)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.7168 0.6972 -0.6972 0.7168 262.5179 375.5319)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.6158 -0.7879 0.7879 0.6158 244.4369 396.1408)" class="white__fill futura-book fs__4__px">20.00</text>
							<text transform="matrix(0.6296 -0.7769 0.7769 0.6296 251.2423 398.4283)" class="mustard__fill futura-med fs__4__px">10</text>
							<text transform="matrix(0.6296 -0.7769 0.7769 0.6296 250.6906 406.733)" class="white__fill futura-book fs__4__px">160.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-2" points="276,382.9 291.7,397.3 258.5,439.6 242.8,425"/>
							<text transform="matrix(0.7168 0.6972 -0.6972 0.7168 249.2316 427.5574)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.7168 0.6972 -0.6972 0.7168 278.4162 390.5338)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.6158 -0.7879 0.7879 0.6158 259.9613 410.3225)" class="white__fill futura-book fs__4__px">20.00</text>
							<text transform="matrix(0.6296 -0.7769 0.7769 0.6296 265.8722 413.3619)" class="mustard__fill futura-med fs__4__px">09</text>
							<text transform="matrix(0.6296 -0.7769 0.7769 0.6296 265.3195 421.6666)" class="white__fill futura-book fs__4__px">160.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-1" points="291.7,397.3 307.3,412 274.1,454.2 258.5,439.6"/>
							<text transform="matrix(0.7168 0.6972 -0.6972 0.7168 264.4594 441.9629)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.7168 0.6972 -0.6972 0.7168 294.0157 405.2939)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.6158 -0.7879 0.7879 0.6158 275.7851 424.8762)" class="white__fill futura-book fs__4__px">20.00</text>
							<text transform="matrix(0.6296 -0.7769 0.7769 0.6296 282.5285 427.0201)" class="mustard__fill futura-med fs__4__px">08</text>
							<text transform="matrix(0.6296 -0.7769 0.7769 0.6296 281.9757 435.3248)" class="white__fill futura-book fs__4__px">160.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-2" points="307.3,412 322.8,426.8 289.5,469.1 274.1,454.2"/>
							<text transform="matrix(0.7168 0.6972 -0.6972 0.7168 280.0853 457.0403)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.7168 0.6972 -0.6972 0.7168 309.2701 418.9732)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.6158 -0.7879 0.7879 0.6158 291.8315 439.132)" class="white__fill futura-book fs__4__px">20.00</text>
							<text transform="matrix(0.6296 -0.7769 0.7769 0.6296 297.9049 442.2467)" class="mustard__fill futura-med fs__4__px">07</text>
							<text transform="matrix(0.6296 -0.7769 0.7769 0.6296 297.3527 450.5514)" class="white__fill futura-book fs__4__px">160.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-1" points="322.8,426.8 338,441.8 304.8,484 289.5,469.1"/>
							<text transform="matrix(0.7168 0.6972 -0.6972 0.7168 296.5062 472.1171)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.7168 0.6972 -0.6972 0.7168 325.1441 434.4608)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.6158 -0.7879 0.7879 0.6158 306.6859 454.508)" class="white__fill futura-book fs__4__px">20.00</text>
							<text transform="matrix(0.6296 -0.7769 0.7769 0.6296 313.2038 457.1412)" class="mustard__fill futura-med fs__4__px">06</text>
							<text transform="matrix(0.6296 -0.7769 0.7769 0.6296 312.6515 465.4459)" class="white__fill futura-book fs__4__px">160.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-2" points="338,441.8 353.2,456.8 319.9,499.2 304.8,484"/>
							<text transform="matrix(0.6922 0.7217 -0.7217 0.6922 311.1124 487.1026)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.6922 0.7217 -0.7217 0.6922 340.5938 449.7061)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.6158 -0.7879 0.7879 0.6158 322.5858 468.3928)" class="white__fill futura-book fs__4__px">20.00</text>
							<text transform="matrix(0.6544 -0.7562 0.7562 0.6544 328.8336 471.8188)" class="mustard__fill futura-med fs__4__px">05</text>
							<text transform="matrix(0.6544 -0.7562 0.7562 0.6544 328.0134 480.1015)" class="white__fill futura-book fs__4__px">160.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-1" points="319.9,499.2 353.2,456.8 368.3,472 335,514.4"/>
							<text transform="matrix(0.6922 0.7217 -0.7217 0.6922 326.338 501.7305)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.6922 0.7217 -0.7217 0.6922 355.2247 464.709)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.6158 -0.7879 0.7879 0.6158 337.0636 484.4397)" class="white__fill futura-book fs__4__px">20.00</text>
							<text transform="matrix(0.6544 -0.7562 0.7562 0.6544 343.1631 486.5982)" class="mustard__fill futura-med fs__4__px">04</text>
							<text transform="matrix(0.6544 -0.7562 0.7562 0.6544 342.343 494.8809)" class="white__fill futura-book fs__4__px">160.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-2" points="368.3,472 383.3,487.4 349.8,529.9 335,514.4"/>
							<text transform="matrix(0.6922 0.7217 -0.7217 0.6922 341.1642 517.6299)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.6922 0.7217 -0.7217 0.6922 371.2686 480.4024)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.6158 -0.7879 0.7879 0.6158 350.1286 501.4582)" class="white__fill futura-book fs__4__px">20.00</text>
							<text transform="matrix(0.6544 -0.7562 0.7562 0.6544 357.047 503.6148)" class="mustard__fill futura-med fs__4__px">03</text>
							<text transform="matrix(0.6544 -0.7562 0.7562 0.6544 356.2262 511.8982)" class="white__fill futura-book fs__4__px">160.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-1" points="383.3,487.4 398,502.9 364.5,545.4 349.8,529.9"/>
							<text transform="matrix(0.7076 0.7066 -0.7066 0.7076 384.4716 494.8511)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.7076 0.7066 -0.7066 0.7076 355.8085 533.2154)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.6158 -0.7879 0.7879 0.6158 365.2406 516.3635)" class="white__fill futura-book fs__4__px">20.00</text>
							<text transform="matrix(0.6544 -0.7562 0.7562 0.6544 372.0786 518.059)" class="mustard__fill futura-med fs__4__px">02</text>
							<text transform="matrix(0.6544 -0.7562 0.7562 0.6544 371.2585 526.343)" class="white__fill futura-book fs__4__px">160.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-2" points="398,502.9 414.9,520.9 379.2,561 364.5,545.4"/>
							<text transform="matrix(0.7076 0.7066 -0.7066 0.7076 400.8173 512.2418)" class="white__fill futura-book fs__4__px">9.26</text>
							<text transform="matrix(0.6885 0.7253 -0.7253 0.6885 370.4557 549.4894)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.6629 -0.7487 0.7487 0.6629 391.943 544.6527)" class="white__fill futura-book fs__4__px">20.09</text>
							<text transform="matrix(0.6158 -0.7879 0.7879 0.6158 380.0441 532.3752)" class="white__fill futura-book fs__4__px">20.00</text>
							<text transform="matrix(0.6544 -0.7562 0.7562 0.6544 385.1768 534.8761)" class="mustard__fill futura-med fs__4__px">01</text>
							<text transform="matrix(0.6544 -0.7562 0.7562 0.6544 384.356 543.1595)" class="white__fill futura-book fs__4__px">172.55m2</text>
							<g>
								<polygon class="mustard__dl__fill" points="399,523.9 395.2,520.2 399,516.4 399,516.4"/>
								<polyline class="mustard__dr__fill" points="402.8,520.2 399,523.9 399,516.4"/>
							</g>
						</g>
					</g>
				</g>
				<g>
					<line class="white__stroke no__fill" x1="61.7" y1="274.9" x2="94.7" y2="232.8"/>
					<line class="white__stroke no__fill" x1="111.8" y1="245.7" x2="78.7" y2="287.8"/>
					<line class="white__stroke no__fill" x1="95.7" y1="300.9" x2="128.7" y2="258.7"/>
					<line class="white__stroke no__fill" x1="145.6" y1="272" x2="112.5" y2="314"/>
					<line class="white__stroke no__fill" x1="129.2" y1="327.4" x2="162.4" y2="285.3"/>
					<line class="white__stroke no__fill" x1="179" y1="298.8" x2="145.8" y2="340.8"/>
					<line class="white__stroke no__fill" x1="162.3" y1="354.6" x2="195.5" y2="312.4"/>
					<line class="white__stroke no__fill" x1="211.8" y1="326.2" x2="178.7" y2="368.4"/>
					<line class="white__stroke no__fill" x1="194.9" y1="382.3" x2="228" y2="340.2"/>
					<line class="white__stroke no__fill" x1="244.1" y1="354.2" x2="211" y2="396.4"/>
					<line class="white__stroke no__fill" x1="226.9" y1="410.6" x2="260.1" y2="368.5"/>
					<line class="white__stroke no__fill" x1="276" y1="382.9" x2="242.8" y2="425"/>
					<line class="white__stroke no__fill" x1="258.5" y1="439.6" x2="291.7" y2="397.3"/>
					<line class="white__stroke no__fill" x1="307.3" y1="412" x2="274.1" y2="454.2"/>
					<line class="white__stroke no__fill" x1="322.8" y1="426.8" x2="289.5" y2="469.1"/>
					<line class="white__stroke no__fill" x1="304.8" y1="484" x2="338" y2="441.8"/>
					<line class="white__stroke no__fill" x1="353.2" y1="456.8" x2="319.9" y2="499.2"/>
					<line class="white__stroke no__fill" x1="335" y1="514.4" x2="368.3" y2="472"/>
					<line class="white__stroke no__fill" x1="383.3" y1="487.4" x2="349.8" y2="529.9"/>
					<line class="white__stroke no__fill" x1="364.5" y1="545.4" x2="398" y2="502.9"/>
					<line class="white__stroke no__fill" x1="414.9" y1="520.9" x2="379.2" y2="561"/>
					<line class="white__stroke no__fill" x1="123.6" y1="199" x2="136.9" y2="233.5"/>
					<line class="white__stroke no__fill" x1="157.3" y1="227.6" x2="143.1" y2="190.4"/>
					<line class="white__stroke no__fill" x1="162.8" y1="182.1" x2="177.9" y2="221.6"/>
					<line class="white__stroke no__fill" x1="182.6" y1="173.9" x2="198.4" y2="215.8"/>
					<line class="white__stroke no__fill" x1="219" y1="209.8" x2="202.5" y2="166"/>
					<line class="white__stroke no__fill" x1="222.5" y1="158.4" x2="239.5" y2="203.9"/>
					<line class="white__stroke no__fill" x1="242.5" y1="150.9" x2="260.1" y2="198"/>
					<line class="white__stroke no__fill" x1="280.6" y1="192.1" x2="262.6" y2="143.6"/>
					<line class="white__stroke no__fill" x1="282.8" y1="136.7" x2="301.1" y2="186.2"/>
					<line class="white__stroke no__fill" x1="321.7" y1="180.3" x2="303.1" y2="129.9"/>
					<line class="white__stroke no__fill" x1="323.4" y1="123.3" x2="342.2" y2="174.3"/>
					<line class="white__stroke no__fill" x1="343.9" y1="117" x2="362.7" y2="168.3"/>
					<line class="white__stroke no__fill" x1="383.3" y1="162.4" x2="364.3" y2="111"/>
					<line class="white__stroke no__fill" x1="384.9" y1="105.1" x2="403.8" y2="156.5"/>
					<line class="white__stroke no__fill" x1="187" y1="245" x2="197.5" y2="281.8"/>
					<line class="white__stroke no__fill" x1="207.6" y1="239" x2="219.4" y2="280.2"/>
					<line class="white__stroke no__fill" x1="228.1" y1="233.1" x2="240" y2="274.3"/>
					<line class="white__stroke no__fill" x1="248.7" y1="227.2" x2="260.4" y2="268.4"/>
					<line class="white__stroke no__fill" x1="269.2" y1="221.3" x2="281" y2="262.5"/>
					<line class="white__stroke no__fill" x1="231.9" y1="276.6" x2="244.8" y2="321.7"/>
					<line class="white__stroke no__fill" x1="258.5" y1="269" x2="271.5" y2="314"/>
					<line class="white__stroke no__fill" x1="281.7" y1="262.3" x2="294.7" y2="307.3"/>
					<line class="white__stroke no__fill" x1="289.7" y1="215.4" x2="301.5" y2="256.6"/>
					<line class="white__stroke no__fill" x1="304.8" y1="255.6" x2="317.7" y2="300.7"/>
					<line class="white__stroke no__fill" x1="322.1" y1="250.6" x2="310.2" y2="209.4"/>
					<line class="white__stroke no__fill" x1="325.4" y1="249.7" x2="338.2" y2="294.4"/>
					<line class="white__stroke no__fill" x1="358.8" y1="288.8" x2="345.8" y2="243.8"/>
					<line class="white__stroke no__fill" x1="342.6" y1="244.7" x2="330.8" y2="203.5"/>
					<line class="white__stroke no__fill" x1="351.4" y1="197.6" x2="363.2" y2="238.8"/>
					<line class="white__stroke no__fill" x1="366.4" y1="237.9" x2="379.4" y2="282.9"/>
					<line class="white__stroke no__fill" x1="399.9" y1="276.9" x2="386.9" y2="231.9"/>
					<line class="white__stroke no__fill" x1="383.7" y1="232.8" x2="371.9" y2="191.7"/>
					<line class="white__stroke no__fill" x1="392.4" y1="185.8" x2="404.2" y2="226.9"/>
					<line class="white__stroke no__fill" x1="407.5" y1="226" x2="420.4" y2="271.1"/>
					<line class="white__stroke no__fill" x1="424.8" y1="221" x2="412.9" y2="179.8"/>
					<line class="white__stroke no__fill" x1="428" y1="220.1" x2="440.9" y2="265.1"/>
					<line class="white__stroke no__fill" x1="448.5" y1="214.1" x2="201.9" y2="285.3"/>
					<line class="white__stroke no__fill" x1="289" y1="334.9" x2="299" y2="370.1"/>
					<line class="white__stroke no__fill" x1="309.5" y1="329" x2="321.3" y2="370.2"/>
					<line class="white__stroke no__fill" x1="325.9" y1="368.9" x2="336.3" y2="405.2"/>
					<line class="white__stroke no__fill" x1="359.3" y1="408" x2="346.4" y2="362.9"/>
					<line class="white__stroke no__fill" x1="341.9" y1="364.2" x2="330" y2="323"/>
					<line class="white__stroke no__fill" x1="350.6" y1="317.1" x2="362.4" y2="358.3"/>
					<line class="white__stroke no__fill" x1="367" y1="357" x2="379.9" y2="402.1"/>
					<line class="white__stroke no__fill" x1="400.4" y1="396.2" x2="387.4" y2="351.1"/>
					<line class="white__stroke no__fill" x1="383" y1="352.4" x2="371.1" y2="311.2"/>
					<line class="white__stroke no__fill" x1="391.7" y1="305.3" x2="403.4" y2="346.4"/>
					<line class="white__stroke no__fill" x1="408" y1="345.2" x2="420.9" y2="390.2"/>
					<line class="white__stroke no__fill" x1="441.4" y1="384.3" x2="428.6" y2="339.2"/>
					<line class="white__stroke no__fill" x1="424" y1="340.5" x2="412.2" y2="299.3"/>
					<line class="white__stroke no__fill" x1="432.8" y1="293.4" x2="444.5" y2="334.6"/>
					<line class="white__stroke no__fill" x1="449.1" y1="333.3" x2="462" y2="378.4"/>
					<line class="white__stroke no__fill" x1="482.5" y1="372.4" x2="469.7" y2="327.4"/>
					<line class="white__stroke no__fill" x1="465.1" y1="328.7" x2="453.2" y2="287.6"/>
					<line class="white__stroke no__fill" x1="488.9" y1="321.9" x2="304.4" y2="375.1"/>
					<line class="white__stroke no__fill" x1="407.2" y1="420.1" x2="419" y2="461.3"/>
					<line class="white__stroke no__fill" x1="455.2" y1="499.7" x2="442.3" y2="454.6"/>
					<line class="white__stroke no__fill" x1="439.5" y1="455.4" x2="427.7" y2="414.2"/>
					<line class="white__stroke no__fill" x1="448.3" y1="408.3" x2="460" y2="449.5"/>
					<line class="white__stroke no__fill" x1="462.9" y1="448.7" x2="475.7" y2="493.7"/>
					<line class="white__stroke no__fill" x1="496.3" y1="487.8" x2="483.4" y2="442.8"/>
					<line class="white__stroke no__fill" x1="480.6" y1="443.6" x2="468.8" y2="402.4"/>
					<line class="white__stroke no__fill" x1="489.3" y1="396.5" x2="501.1" y2="437.7"/>
					<line class="white__stroke no__fill" x1="503.9" y1="436.9" x2="516.8" y2="481.9"/>
					<polyline class="white__stroke no__fill" points="529.2,429.6 398.4,467.2 386.7,426.1"/>
					<line class="white__stroke no__fill" x1="440.6" y1="121.9" x2="480.5" y2="106.8"/>
					<line class="white__stroke no__fill" x1="490.5" y1="133.6" x2="450.6" y2="148.7"/>
					<line class="white__stroke no__fill" x1="458.1" y1="168.7" x2="498.1" y2="153.6"/>
					<line class="white__stroke no__fill" x1="505.6" y1="173.7" x2="465.6" y2="188.8"/>
					<line class="white__stroke no__fill" x1="473.2" y1="208.8" x2="513.1" y2="193.8"/>
					<line class="white__stroke no__fill" x1="520.6" y1="213.9" x2="480.7" y2="228.9"/>
					<line class="white__stroke no__fill" x1="488.2" y1="249" x2="528.1" y2="233.9"/>
					<line class="white__stroke no__fill" x1="535.6" y1="254" x2="495.7" y2="269.1"/>
					<line class="white__stroke no__fill" x1="503.2" y1="289.1" x2="543.1" y2="274.1"/>
					<line class="white__stroke no__fill" x1="550.7" y1="294.1" x2="510.7" y2="309.2"/>
					<line class="white__stroke no__fill" x1="518.2" y1="329.2" x2="558.2" y2="314.2"/>
					<line class="white__stroke no__fill" x1="565.7" y1="334.2" x2="525.7" y2="349.3"/>
					<line class="white__stroke no__fill" x1="533.3" y1="369.4" x2="573.2" y2="354.3"/>
					<line class="white__stroke no__fill" x1="580.7" y1="374.4" x2="540.7" y2="389.4"/>
					<line class="white__stroke no__fill" x1="548.3" y1="409.5" x2="588.2" y2="394.4"/>
					<line class="white__stroke no__fill" x1="595.7" y1="414.5" x2="555.8" y2="429.6"/>
					<line class="white__stroke no__fill" x1="563.3" y1="449.7" x2="603.2" y2="434.6"/>
					<line class="white__stroke no__fill" x1="610.8" y1="454.6" x2="570.8" y2="469.7"/>
					<line class="white__stroke no__fill" x1="578.3" y1="489.8" x2="618.3" y2="474.7"/>
					<line class="white__stroke no__fill" x1="625.8" y1="494.8" x2="585.8" y2="509.8"/>
					<line class="white__stroke no__fill" x1="593.3" y1="529.9" x2="633.3" y2="514.8"/>
					<line class="white__stroke no__fill" x1="640.8" y1="534.9" x2="600.9" y2="550"/>
					<line class="white__stroke no__fill" x1="608.4" y1="570" x2="648.3" y2="555"/>
					<line class="white__stroke no__fill" x1="655.8" y1="575" x2="615.9" y2="590.1"/>
					<line class="white__stroke no__fill" x1="623.4" y1="610.2" x2="663.4" y2="595.1"/>
					<line class="white__stroke no__fill" x1="670.8" y1="615.2" x2="630.9" y2="630.3"/>
				</g>
			</g>
			<g>
				<g>
					<g>
						<g>
							<polygon class="pb-sprite-2" points="683.5,386.3 660.1,323.7 685.1,314.2 708.5,376.9"/>
							<text transform="matrix(0.9338 -0.3577 0.3577 0.9338 669.233 325.2897)" class="white__fill futura-book fs__4__px">10.00</text>
							<text transform="matrix(0.9338 -0.3577 0.3577 0.9338 689.9467 382.5038)" class="white__fill futura-book fs__4__px">10.00</text>
							<text transform="matrix(0.3575 0.9339 -0.9339 0.3575 672.0781 351.9377)" class="white__fill futura-book fs__4__px">25.00</text>
							<text transform="matrix(0.3512 0.9363 -0.9363 0.3512 686.9208 349.9394)" class="mustard__fill futura-med fs__4__px">76</text>
							<text transform="matrix(0.3512 0.9363 -0.9363 0.3512 680.0389 345.2585)" class="white__fill futura-book fs__4__px">250.00m2</text>
							<g>
								<polygon class="mustard__dl__fill" points="690.8,374.5 687,370.7 690.8,367 690.8,367"/>
								<polygon class="mustard__dr__fill" points="690.8,374.5 690.8,367 694.6,370.7"/>
							</g>
						</g>
						<g>
							<polygon class="pb-sprite-1" points="685.1,314.2 710,304.8 733.5,367.5 708.5,376.9"/>
							<text transform="matrix(0.9338 -0.3577 0.3577 0.9338 695.0765 315.5292)" class="white__fill futura-book fs__4__px">10.00</text>
							<text transform="matrix(0.9338 -0.3577 0.3577 0.9338 715.7899 372.7423)" class="white__fill futura-book fs__4__px">10.00</text>
							<text transform="matrix(0.3575 0.9339 -0.9339 0.3575 697.9219 342.1784)" class="white__fill futura-book fs__4__px">25.00</text>
							<text transform="matrix(0.3512 0.9363 -0.9363 0.3512 712.7645 340.1799)" class="mustard__fill futura-med fs__4__px">75</text>
							<text transform="matrix(0.3512 0.9363 -0.9363 0.3512 705.8827 335.499)" class="white__fill futura-book fs__4__px">250.00m2</text>
							<g>
								<polygon class="mustard__dl__fill" points="717,365.4 713.2,361.6 717,357.9 717,357.9"/>
								<polygon class="mustard__dr__fill" points="717,365.4 717,357.9 720.7,361.6"/>
							</g>
						</g>
						<g>
							<polygon class="pb-sprite-2" points="710,304.8 735.1,295.4 758.5,358.1 733.5,367.5"/>
							<text transform="matrix(0.9338 -0.3577 0.3577 0.9338 719.4714 306.5485)" class="white__fill futura-book fs__4__px">10.00</text>
							<text transform="matrix(0.9338 -0.3577 0.3577 0.9338 740.184 363.7598)" class="white__fill futura-book fs__4__px">10.00</text>
							<text transform="matrix(0.3575 0.9339 -0.9339 0.3575 722.3154 333.1945)" class="white__fill futura-book fs__4__px">25.00</text>
							<text transform="matrix(0.3512 0.9363 -0.9363 0.3512 737.16 331.1985)" class="mustard__fill futura-med fs__4__px">74</text>
							<text transform="matrix(0.3512 0.9363 -0.9363 0.3512 730.2772 326.5173)" class="white__fill futura-book fs__4__px">250.00m2</text>
							<g>
								<polygon class="mustard__dl__fill" points="740.2,355.3 736.5,351.5 740.2,347.8 740.2,347.8"/>
								<polygon class="mustard__dr__fill" points="740.2,355.3 740.2,347.8 744,351.5"/>
							</g>
						</g>
						<g>
							<polygon class="pb-sprite-1" points="735.1,295.4 757.6,286.8 781,349.6 758.5,358.1"/>
							<text transform="matrix(0.9338 -0.3577 0.3577 0.9338 744.3431 296.9155)" class="white__fill futura-book fs__4__px">9.00</text>
							<text transform="matrix(0.9338 -0.3577 0.3577 0.9338 765.5508 354.6138)" class="white__fill futura-book fs__4__px">9.00</text>
							<text transform="matrix(0.3575 0.9339 -0.9339 0.3575 747.8516 322.3334)" class="white__fill futura-book fs__4__px">25.00</text>
							<text transform="matrix(0.3512 0.9363 -0.9363 0.3512 760.6073 321.1872)" class="mustard__fill futura-med fs__4__px">73</text>
							<text transform="matrix(0.3512 0.9363 -0.9363 0.3512 753.7245 316.5063)" class="white__fill futura-book fs__4__px">225.00m2</text>
							<g>
								<polygon class="mustard__dl__fill" points="765.2,346.1 761.4,342.4 765.2,338.6 765.2,338.6"/>
								<polygon class="mustard__dr__fill" points="765.2,346.1 765.2,338.6 768.9,342.4"/>
							</g>
						</g>
						<g>
							<polygon class="pb-sprite-2" points="757.6,286.8 780.1,278.5 803.6,341.2 781,349.6"/>
							<text transform="matrix(0.9338 -0.3577 0.3577 0.9338 765.7286 288.2906)" class="white__fill futura-book fs__4__px">9.00</text>
							<text transform="matrix(0.9338 -0.3577 0.3577 0.9338 786.936 345.9881)" class="white__fill futura-book fs__4__px">9.00</text>
							<text transform="matrix(0.3575 0.9339 -0.9339 0.3575 769.2354 313.7077)" class="white__fill futura-book fs__4__px">25.00</text>
							<text transform="matrix(0.3512 0.9363 -0.9363 0.3512 781.9911 312.5634)" class="mustard__fill futura-med fs__4__px">72</text>
							<text transform="matrix(0.3512 0.9363 -0.9363 0.3512 775.1093 307.8823)" class="white__fill futura-book fs__4__px">225.00m2</text>
							<g>
								<polygon class="mustard__dl__fill" points="786.5,337 782.8,333.3 786.5,329.5 786.5,329.5"/>
								<polygon class="mustard__dr__fill" points="786.5,337 786.5,329.5 790.3,333.3"/>
							</g>
						</g>
						<g>
							<polygon class="pb-sprite-1" points="780.1,278.5 811.6,266.5 825.1,333 803.6,341.2"/>
							<text transform="matrix(0.2062 0.9785 -0.9785 0.2062 812.8613 295.5811)" class="white__fill futura-book fs__4__px">25.32</text>
							<text transform="matrix(0.9338 -0.3577 0.3577 0.9338 810.3197 337.0569)" class="white__fill futura-book fs__4__px">8.63</text>
							<text transform="matrix(0.9338 -0.3577 0.3577 0.9338 791.9401 278.4039)" class="white__fill futura-book fs__4__px">12.62</text>
							<text transform="matrix(0.3575 0.9339 -0.9339 0.3575 791.8516 303.3598)" class="white__fill futura-book fs__4__px">25.00</text>
							<text transform="matrix(0.3512 0.9363 -0.9363 0.3512 805.7284 300.9272)" class="mustard__fill futura-med fs__4__px">71</text>
							<text transform="matrix(0.3512 0.9363 -0.9363 0.3512 798.8466 296.2461)" class="white__fill futura-book fs__4__px">265.62m2</text>
							<g>
								<polygon class="mustard__dl__fill" points="811,327.4 807.2,323.7 811,319.9 811,319.9"/>
								<polygon class="mustard__dr__fill" points="811,327.4 811,319.9 814.8,323.7"/>
							</g>
						</g>
						<g>
							<polygon class="pb-sprite-1" points="764.7,219.9 778.8,214.5 800.5,211.9 811.6,266.5 785.9,276.2"/>
							<text transform="matrix(0.2062 0.9785 -0.9785 0.2062 801.5518 238.1395)" class="white__fill futura-book fs__4__px">20.85</text>
							<text transform="matrix(0.9338 -0.3577 0.3577 0.9338 770.6821 222.0801)" class="white__fill futura-book fs__4__px">5.69</text>
							<text transform="matrix(0.9928 -0.1198 0.1198 0.9928 786.7498 217.5687)" class="white__fill futura-book fs__4__px">8.12</text>
							<text transform="matrix(0.9338 -0.3577 0.3577 0.9338 793.6171 271.5371)" class="white__fill futura-book fs__4__px">10.31</text>
							<text transform="matrix(0.3512 0.9363 -0.9363 0.3512 790.2772 241.9702)" class="mustard__fill futura-med fs__4__px">70</text>
							<text transform="matrix(0.3512 0.9363 -0.9363 0.3512 783.3944 237.2893)" class="white__fill futura-book fs__4__px">264.56m2</text>
							<g>
								<polygon class="mustard__dl__fill" points="785.4,230.7 781.6,226.9 785.4,223.2 785.4,223.2"/>
								<polygon class="mustard__dr__fill" points="785.4,230.7 785.4,223.2 789.1,226.9"/>
							</g>
						</g>
						<g>
							<polygon class="pb-sprite-2" points="739,229.5 764.7,219.9 785.9,276.2 760.1,285.9"/>
							<text transform="matrix(0.9338 -0.3577 0.3577 0.9338 748.7211 230.4663)" class="white__fill futura-book fs__4__px">10.31</text>
							<text transform="matrix(0.9338 -0.3577 0.3577 0.9338 767.4188 281.1167)" class="white__fill futura-book fs__4__px">10.31</text>
							<text transform="matrix(0.3575 0.9339 -0.9339 0.3575 768.4521 244.1982)" class="white__fill futura-book fs__4__px">22.50</text>
							<text transform="matrix(0.3512 0.9363 -0.9363 0.3512 761.4071 250.8069)" class="mustard__fill futura-med fs__4__px">69</text>
							<text transform="matrix(0.3512 0.9363 -0.9363 0.3512 754.5253 246.1257)" class="white__fill futura-book fs__4__px">231.97m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-1" points="719,237.1 739,229.5 760.1,285.9 740.1,293.5"/>
							<text transform="matrix(0.9338 -0.3577 0.3577 0.9338 726.2349 238.3813)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.9338 -0.3577 0.3577 0.9338 745.6553 290.0651)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.3575 0.9339 -0.9339 0.3575 743.708 254.5678)" class="white__fill futura-book fs__4__px">22.50</text>
							<text transform="matrix(0.3512 0.9363 -0.9363 0.3512 738.9823 260.4021)" class="mustard__fill futura-med fs__4__px">68</text>
							<text transform="matrix(0.3512 0.9363 -0.9363 0.3512 732.1005 255.7209)" class="white__fill futura-book fs__4__px">180.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-2" points="698.9,244.6 719,237.1 740.1,293.5 720,301"/>
							<text transform="matrix(0.9338 -0.3577 0.3577 0.9338 706.231 246.0742)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.9338 -0.3577 0.3577 0.9338 725.6513 297.7592)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.3575 0.9339 -0.9339 0.3575 723.7051 262.2607)" class="white__fill futura-book fs__4__px">22.50</text>
							<text transform="matrix(0.3512 0.9363 -0.9363 0.3512 718.9803 268.0947)" class="mustard__fill futura-med fs__4__px">67</text>
							<text transform="matrix(0.3512 0.9363 -0.9363 0.3512 712.0985 263.4135)" class="white__fill futura-book fs__4__px">180.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-1" points="679,252.2 698.9,244.6 720,301 700.1,308.6"/>
							<text transform="matrix(0.9338 -0.3577 0.3577 0.9338 685.6329 254.0179)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.9338 -0.3577 0.3577 0.9338 705.0551 305.7063)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.3575 0.9339 -0.9339 0.3575 703.1074 270.206)" class="white__fill futura-book fs__4__px">22.50</text>
							<text transform="matrix(0.3512 0.9363 -0.9363 0.3512 698.3817 276.0398)" class="mustard__fill futura-med fs__4__px">66</text>
							<text transform="matrix(0.3512 0.9363 -0.9363 0.3512 691.4999 271.3589)" class="white__fill futura-book fs__4__px">180.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-2" points="658.9,259.7 679,252.2 700.1,308.6 680,316.1"/>
							<text transform="matrix(0.9338 -0.3577 0.3577 0.9338 666.5098 261.0399)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.9338 -0.3577 0.3577 0.9338 685.9312 312.7234)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.3575 0.9339 -0.9339 0.3575 683.9854 277.226)" class="white__fill futura-book fs__4__px">22.50</text>
							<text transform="matrix(0.3512 0.9363 -0.9363 0.3512 679.2587 283.0605)" class="mustard__fill futura-med fs__4__px">65</text>
							<text transform="matrix(0.3512 0.9363 -0.9363 0.3512 672.3768 278.3796)" class="white__fill futura-book fs__4__px">180.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-1" points="638.9,267.3 658.9,259.7 680,316.1 660.1,323.7"/>
							<text transform="matrix(0.9338 -0.3577 0.3577 0.9338 646.3675 269.0076)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.9338 -0.3577 0.3577 0.9338 665.1773 320.3982)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.3575 0.9339 -0.9339 0.3575 648.8887 291.3583)" class="white__fill futura-book fs__4__px">22.50</text>
							<text transform="matrix(0.3575 0.9339 -0.9339 0.3575 663.9434 284.7621)" class="white__fill futura-book fs__4__px">22.50</text>
							<text transform="matrix(0.3512 0.9363 -0.9363 0.3512 659.9589 289.593)" class="mustard__fill futura-med fs__4__px">64</text>
							<text transform="matrix(0.3512 0.9363 -0.9363 0.3512 653.076 284.9118)" class="white__fill futura-book fs__4__px">180.00m2</text>
							<g>
								<polygon class="mustard__dl__fill" points="652.9,279.5 649.2,275.7 652.9,272 652.9,272"/>
								<polygon class="mustard__dr__fill" points="652.9,279.5 652.9,272 656.7,275.7"/>
							</g>
						</g>
					</g>
					<g>
						<g>
							<polygon class="pb-sprite-2" points="630.1,243.9 606.7,181.2 631.7,171.8 655.2,234.4"/>
							<text transform="matrix(0.3575 0.9339 -0.9339 0.3575 620.1484 212.7336)" class="white__fill futura-book fs__4__px">25.00</text>
							<text transform="matrix(0.9338 -0.3577 0.3577 0.9338 636.8704 239.6037)" class="white__fill futura-book fs__4__px">10.00</text>
							<text transform="matrix(0.9338 -0.3577 0.3577 0.9338 615.4102 183.7674)" class="white__fill futura-book fs__4__px">10.00</text>
							<text transform="matrix(0.3512 0.9363 -0.9363 0.3512 633.2323 210.3005)" class="mustard__fill futura-med fs__4__px">63</text>
							<text transform="matrix(0.3512 0.9363 -0.9363 0.3512 626.3495 205.6194)" class="white__fill futura-book fs__4__px">250.00m2</text>
							<g>
								<polygon class="mustard__dl__fill" points="638.9,234.1 635.2,230.3 638.9,226.5 638.9,226.5"/>
								<polygon class="mustard__dr__fill" points="638.9,234.1 638.9,226.5 642.7,230.3"/>
							</g>
						</g>
						<g>
							<polygon class="pb-sprite-1" points="631.7,171.8 656.7,162.3 680.2,225 655.2,234.4"/>
							<text transform="matrix(0.3575 0.9339 -0.9339 0.3575 645.3613 202.5568)" class="white__fill futura-book fs__4__px">25.00</text>
							<text transform="matrix(0.9338 -0.3577 0.3577 0.9338 662.0852 229.4263)" class="white__fill futura-book fs__4__px">10.00</text>
							<text transform="matrix(0.9338 -0.3577 0.3577 0.9338 640.6246 173.589)" class="white__fill futura-book fs__4__px">10.00</text>
							<text transform="matrix(0.3512 0.9363 -0.9363 0.3512 658.4462 200.1233)" class="mustard__fill futura-med fs__4__px">62</text>
							<text transform="matrix(0.3512 0.9363 -0.9363 0.3512 651.5634 195.4421)" class="white__fill futura-book fs__4__px">250.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-2" points="656.7,162.3 681.7,153 705.2,215.6 680.2,225"/>
							<text transform="matrix(0.3575 0.9339 -0.9339 0.3575 670.3379 193.2299)" class="white__fill futura-book fs__4__px">25.00</text>
							<text transform="matrix(0.9338 -0.3577 0.3577 0.9338 687.0594 220.1002)" class="white__fill futura-book fs__4__px">10.00</text>
							<text transform="matrix(0.9338 -0.3577 0.3577 0.9338 665.6 164.2646)" class="white__fill futura-book fs__4__px">10.00</text>
							<text transform="matrix(0.3512 0.9363 -0.9363 0.3512 683.4218 190.7988)" class="mustard__fill futura-med fs__4__px">61</text>
							<text transform="matrix(0.3512 0.9363 -0.9363 0.3512 676.5389 186.1176)" class="white__fill futura-book fs__4__px">250.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-1" points="681.7,153 706.7,143.4 730.2,206.2 705.2,215.6"/>
							<text transform="matrix(0.3575 0.9339 -0.9339 0.3575 695.6201 184.1296)" class="white__fill futura-book fs__4__px">25.00</text>
							<text transform="matrix(0.9338 -0.3577 0.3577 0.9338 712.3416 210.9982)" class="white__fill futura-book fs__4__px">10.00</text>
							<text transform="matrix(0.9338 -0.3577 0.3577 0.9338 690.881 155.1609)" class="white__fill futura-book fs__4__px">10.00</text>
							<text transform="matrix(0.3512 0.9363 -0.9363 0.3512 708.704 181.6963)" class="mustard__fill futura-med fs__4__px">60</text>
							<text transform="matrix(0.3512 0.9363 -0.9363 0.3512 701.8212 177.0151)" class="white__fill futura-book fs__4__px">250.00m2</text>
						</g>
						<g>
							<polyline class="pb-sprite-2" points="730.2,206.7 752.7,197.8 729.2,135 706.7,143.4 730.2,206.2"/>
							<text transform="matrix(0.3575 0.9339 -0.9339 0.3575 720.4756 174.9062)" class="white__fill futura-book fs__4__px">25.00</text>
							<text transform="matrix(0.9338 -0.3577 0.3577 0.9338 736.6539 201.9769)" class="white__fill futura-book fs__4__px">9.00</text>
							<text transform="matrix(0.9338 -0.3577 0.3577 0.9338 715.4232 144.8134)" class="white__fill futura-book fs__4__px">9.00</text>
							<text transform="matrix(0.3512 0.9363 -0.9363 0.3512 733.576 173.073)" class="mustard__fill futura-med fs__4__px">59</text>
							<text transform="matrix(0.3512 0.9363 -0.9363 0.3512 726.6942 168.3918)" class="white__fill futura-book fs__4__px">225.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-1" points="729.2,135 760,123.5 773.5,189.9 752.7,197.8"/>
							<text transform="matrix(0.3575 0.9339 -0.9339 0.3575 742.3066 165.7243)" class="white__fill futura-book fs__4__px">25.00</text>
							<text transform="matrix(0.2062 0.9785 -0.9785 0.2062 763.0449 159.6763)" class="white__fill futura-book fs__4__px">25.32</text>
							<text transform="matrix(0.9338 -0.3577 0.3577 0.9338 758.5991 193.7264)" class="white__fill futura-book fs__4__px">8.32</text>
							<text transform="matrix(0.9338 -0.3577 0.3577 0.9338 742.0474 135.2265)" class="white__fill futura-book fs__4__px">12.31</text>
							<text transform="matrix(0.3512 0.9363 -0.9363 0.3512 756.3046 164.0022)" class="mustard__fill futura-med fs__4__px">58</text>
							<text transform="matrix(0.3512 0.9363 -0.9363 0.3512 749.4227 159.321)" class="white__fill futura-book fs__4__px">257.82m2</text>
							<g>
								<polygon class="mustard__dl__fill" points="759.3,186.4 755.6,182.6 759.3,178.8 759.3,178.8"/>
								<polygon class="mustard__dr__fill" points="759.3,186.4 759.3,178.8 763.1,182.6"/>
							</g>
						</g>
						<g>
							<path class="pb-sprite-1" d="M712.3,77l35.6-13.4c0,0,12.1,59.8,12.1,59.9s-26.6,10-26.6,10L712.3,77z"/>
							<text transform="matrix(0.2062 0.9785 -0.9785 0.2062 749.1602 90.3093)" class="white__fill futura-book fs__4__px">22.78</text>
							<text transform="matrix(0.9338 -0.3577 0.3577 0.9338 726.3317 76.1732)" class="white__fill futura-book fs__4__px">14.25</text>
							<text transform="matrix(0.9338 -0.3577 0.3577 0.9338 742.0485 128.1285)" class="white__fill futura-book fs__4__px">10.65</text>
							<text transform="matrix(0.3512 0.9363 -0.9363 0.3512 737.1591 96.9363)" class="mustard__fill futura-med fs__4__px">57</text>
							<text transform="matrix(0.3512 0.9363 -0.9363 0.3512 730.2772 92.2551)" class="white__fill futura-book fs__4__px">280.13m2</text>
							<g>
								<polygon class="mustard__dl__fill" points="735.3,85 731.6,81.3 735.3,77.5 735.3,77.5"/>
								<polygon class="mustard__dr__fill" points="735.3,85 735.3,77.5 739.1,81.3"/>
							</g>
						</g>
						<g>
							<polygon class="pb-sprite-2" points="685.6,87.1 712.3,77 733.4,133.5 706.7,143.4"/>
							<text transform="matrix(0.3575 0.9339 -0.9339 0.3575 716.4453 100.632)" class="white__fill futura-book fs__4__px">22.50</text>
							<text transform="matrix(0.9338 -0.3577 0.3577 0.9338 695.1044 87.9479)" class="white__fill futura-book fs__4__px">10.65</text>
							<text transform="matrix(0.9338 -0.3577 0.3577 0.9338 713.5999 137.6582)" class="white__fill futura-book fs__4__px">10.65</text>
							<text transform="matrix(0.3512 0.9363 -0.9363 0.3512 709.1708 107.0134)" class="mustard__fill futura-med fs__4__px">56</text>
							<text transform="matrix(0.3512 0.9363 -0.9363 0.3512 702.288 102.3323)" class="white__fill futura-book fs__4__px">239.71m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-1" points="665.6,94.6 685.6,87.1 706.7,143.4 686.8,151"/>
							<text transform="matrix(0.3575 0.9339 -0.9339 0.3575 690.5762 113.3549)" class="white__fill futura-book fs__4__px">22.50</text>
							<text transform="matrix(0.9338 -0.3577 0.3577 0.9338 673.2399 95.7617)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.9338 -0.3577 0.3577 0.9338 691.9067 147.0346)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.3512 0.9363 -0.9363 0.3512 685.7469 118.6645)" class="mustard__fill futura-med fs__4__px">55</text>
							<text transform="matrix(0.3512 0.9363 -0.9363 0.3512 678.8641 113.9836)" class="white__fill futura-book fs__4__px">180.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-2" points="645.6,102.1 665.6,94.6 686.8,151 666.7,158.5"/>
							<text transform="matrix(0.3575 0.9339 -0.9339 0.3575 670.0449 121.0883)" class="white__fill futura-book fs__4__px">22.50</text>
							<text transform="matrix(0.9338 -0.3577 0.3577 0.9338 652.7072 103.4952)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.9338 -0.3577 0.3577 0.9338 671.3753 154.7686)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.3512 0.9363 -0.9363 0.3512 665.2157 126.3989)" class="mustard__fill futura-med fs__4__px">54</text>
							<text transform="matrix(0.3512 0.9363 -0.9363 0.3512 658.3339 121.718)" class="white__fill futura-book fs__4__px">180.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-1" points="625.6,109.7 645.6,102.1 666.7,158.5 646.7,166.1"/>
							<text transform="matrix(0.3575 0.9339 -0.9339 0.3575 650.4531 128.5024)" class="white__fill futura-book fs__4__px">22.50</text>
							<text transform="matrix(0.9338 -0.3577 0.3577 0.9338 633.1149 110.9071)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.9338 -0.3577 0.3577 0.9338 651.783 162.1805)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.3512 0.9363 -0.9363 0.3512 645.6229 133.813)" class="mustard__fill futura-med fs__4__px">53</text>
							<text transform="matrix(0.3512 0.9363 -0.9363 0.3512 638.7401 129.1318)" class="white__fill futura-book fs__4__px">180.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-2" points="605.5,117.2 625.6,109.7 646.7,166.1 626.7,173.6"/>
							<text transform="matrix(0.3575 0.9339 -0.9339 0.3575 630.75 136.2043)" class="white__fill futura-book fs__4__px">22.50</text>
							<text transform="matrix(0.9338 -0.3577 0.3577 0.9338 613.4139 118.6116)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.9338 -0.3577 0.3577 0.9338 632.0807 169.8856)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.3512 0.9363 -0.9363 0.3512 625.9218 141.5154)" class="mustard__fill futura-med fs__4__px">52</text>
							<text transform="matrix(0.3512 0.9363 -0.9363 0.3512 619.0399 136.8342)" class="white__fill futura-book fs__4__px">180.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-1" points="585.6,124.8 605.5,117.2 626.7,173.6 606.7,181.2"/>
							<text transform="matrix(0.3575 0.9339 -0.9339 0.3575 595.9834 149.8342)" class="white__fill futura-book fs__4__px">22.50</text>
							<text transform="matrix(0.3575 0.9339 -0.9339 0.3575 610.8682 143.7463)" class="white__fill futura-book fs__4__px">22.50</text>
							<text transform="matrix(0.9338 -0.3577 0.3577 0.9338 593.6681 126.0322)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.9338 -0.3577 0.3577 0.9338 612.1268 177.1725)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.3512 0.9363 -0.9363 0.3512 606.7626 147.1416)" class="mustard__fill futura-med fs__4__px">51</text>
							<text transform="matrix(0.3512 0.9363 -0.9363 0.3512 599.8807 142.4607)" class="white__fill futura-book fs__4__px">180.00m2</text>
							<g>
								<polygon class="mustard__dl__fill" points="600.7,135.4 596.9,131.7 600.7,127.9 600.7,127.9"/>
								<polygon class="mustard__dr__fill" points="600.7,135.4 600.7,127.9 604.5,131.7"/>
							</g>
						</g>
					</g>
					<g>
						<g>
							<polygon class="pb-sprite-1" points="792.2,157 851.1,145 845.8,118.7 786.9,130.7"/>
							<text transform="matrix(0.2008 0.9796 -0.9796 0.2008 790.0629 139.767)" class="white__fill futura-book fs__4__px">10.00</text>
							<text transform="matrix(0.2008 0.9796 -0.9796 0.2008 842.9023 128.6179)" class="white__fill futura-book fs__4__px">10.00</text>
							<text transform="matrix(0.9795 -0.2012 0.2012 0.9795 816.7095 149.7819)" class="white__fill futura-book fs__4__px">22.50</text>
							<text transform="matrix(0.9806 -0.196 0.196 0.9806 816.1759 135.4228)" class="mustard__fill futura-med fs__4__px">50</text>
							<text transform="matrix(0.9806 -0.196 0.196 0.9806 810.4486 141.4625)" class="white__fill futura-book fs__4__px">225.00m2</text>
							<g>
								<polygon class="mustard__dl__fill" points="800.8,146.2 797.1,142.4 800.8,138.7 800.8,138.7"/>
								<polygon class="mustard__dr__fill" points="800.8,146.2 800.8,138.7 804.6,142.4"/>
							</g>
						</g>
						<g>
							<polygon class="pb-sprite-2" points="781.5,104.4 840.4,92.4 845.8,118.7 786.9,130.7"/>
							<text transform="matrix(0.2008 0.9796 -0.9796 0.2008 784.3594 113.8681)" class="white__fill futura-book fs__4__px">10.00</text>
							<text transform="matrix(0.2008 0.9796 -0.9796 0.2008 837.199 102.72)" class="white__fill futura-book fs__4__px">10.00</text>
							<text transform="matrix(0.9795 -0.2012 0.2012 0.9795 811.0053 123.8833)" class="white__fill futura-book fs__4__px">22.50</text>
							<text transform="matrix(0.9806 -0.196 0.196 0.9806 810.471 109.525)" class="mustard__fill futura-med fs__4__px">49</text>
							<text transform="matrix(0.9806 -0.196 0.196 0.9806 804.7437 115.5647)" class="white__fill futura-book fs__4__px">225.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-1" points="777.3,83.5 836.2,71.4 840.4,92.4 781.5,104.4"/>
							<text transform="matrix(0.2008 0.9796 -0.9796 0.2008 779.9925 89.8117)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.2008 0.9796 -0.9796 0.2008 832.6598 79.4036)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.9795 -0.2012 0.2012 0.9795 806.1535 97.2444)" class="white__fill futura-book fs__4__px">22.50</text>
							<text transform="matrix(0.9806 -0.196 0.196 0.9806 805.3549 85.3548)" class="mustard__fill futura-med fs__4__px">48</text>
							<text transform="matrix(0.9806 -0.196 0.196 0.9806 799.6276 91.3945)" class="white__fill futura-book fs__4__px">180.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-2" points="773,62.5 831.8,50.5 836.2,71.4 777.3,83.5"/>
							<text transform="matrix(0.2008 0.9796 -0.9796 0.2008 775.4959 69.4363)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.2008 0.9796 -0.9796 0.2008 827.8066 57.7018)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.9795 -0.2012 0.2012 0.9795 799.0001 61.3421)" class="white__fill futura-book fs__4__px">22.50</text>
							<text transform="matrix(0.9795 -0.2012 0.2012 0.9795 802.7047 76.6011)" class="white__fill futura-book fs__4__px">22.50</text>
							<text transform="matrix(0.9806 -0.196 0.196 0.9806 802.8751 66.5653)" class="mustard__fill futura-med fs__4__px">47</text>
							<text transform="matrix(0.9806 -0.196 0.196 0.9806 797.1478 72.605)" class="white__fill futura-book fs__4__px">180.00m2</text>
							<g>
								<polygon class="mustard__dl__fill" points="788.2,75.2 784.4,71.4 788.2,67.7 788.2,67.7"/>
								<polygon class="mustard__dr__fill" points="788.2,75.2 788.2,67.7 791.9,71.4"/>
							</g>
						</g>
					</g>
					<g>
						<g>
							<path class="pb-sprite-2" d="M538.2,69.1c-10.6,2-21.3,4.1-32.2,6.4c-11.5,2.4-22.9,4.9-34,7.4c3.8,10.1,7.6,20.3,11.4,30.4L546,89.8
								L538.2,69.1z"/>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 535.9223 75.9279)" class="white__fill futura-book fs__4__px">8.28</text>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 479.1303 93.8795)" class="white__fill futura-book fs__4__px">12.14</text>
							<text transform="matrix(0.9817 -0.1902 0.1902 0.9817 502.4586 81.2774)" class="white__fill futura-book fs__4__px">25.30</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 508.8378 89.7566)" class="mustard__fill futura-med fs__4__px">46</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 504.1974 96.6663)" class="white__fill futura-book fs__4__px">257.08m2</text>
							<g>
								<polygon class="mustard__dl__fill" points="531.3,85.7 527.6,81.9 531.3,78.2 531.3,78.2"/>
								<polygon class="mustard__dr__fill" points="531.3,85.7 531.3,78.2 535.1,81.9"/>
							</g>
						</g>
						<g>
							<polygon class="pb-sprite-1" points="483.5,113.3 546,89.8 553.4,109.9 491,133.4"/>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 544.2072 97.1858)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 488.04 118.7265)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.9351 -0.3545 0.3545 0.9351 511.361 108.0457)" class="white__fill futura-book fs__4__px">25.00</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 517.662 112.3826)" class="mustard__fill futura-med fs__4__px">45</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 513.0216 119.2923)" class="white__fill futura-book fs__4__px">200.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-2" points="491,133.4 553.4,109.9 561,129.9 498.5,153.5"/>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 552.253 117.252)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 496.0842 138.7912)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.9351 -0.3545 0.3545 0.9351 519.4045 128.1086)" class="white__fill futura-book fs__4__px">25.00</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 525.7069 132.4471)" class="mustard__fill futura-med fs__4__px">44</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 521.0665 139.3567)" class="white__fill futura-book fs__4__px">200.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-1" points="498.5,153.5 561,129.9 568.5,150 506,173.6"/>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 559.6516 138.0525)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 503.485 159.592)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.9351 -0.3545 0.3545 0.9351 526.805 148.9092)" class="white__fill futura-book fs__4__px">25.00</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 533.1071 153.2459)" class="mustard__fill futura-med fs__4__px">43</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 528.4667 160.1556)" class="white__fill futura-book fs__4__px">200.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-2" points="506,173.6 568.5,150 576,170.1 513.5,193.6"/>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 567.1396 158.138)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 510.9724 179.6756)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.9351 -0.3545 0.3545 0.9351 534.2923 168.9939)" class="white__fill futura-book fs__4__px">25.00</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 540.5941 173.3318)" class="mustard__fill futura-med fs__4__px">42</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 535.9537 180.2417)" class="white__fill futura-book fs__4__px">200.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-1" points="513.5,193.6 576,170.1 583.5,190.1 521,213.7"/>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 574.2599 177.4554)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 518.0902 198.995)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.9351 -0.3545 0.3545 0.9351 541.4111 188.3118)" class="white__fill futura-book fs__4__px">25.00</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 547.7133 192.6502)" class="mustard__fill futura-med fs__4__px">41</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 543.0729 199.5599)" class="white__fill futura-book fs__4__px">200.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-2" points="521,213.7 583.5,190.1 591,210.2 528.5,233.7"/>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 582.3483 198.4099)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 526.1802 219.9509)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.9351 -0.3545 0.3545 0.9351 549.5005 209.2658)" class="white__fill futura-book fs__4__px">25.00</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 555.8026 213.6062)" class="mustard__fill futura-med fs__4__px">40</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 551.1622 220.5159)" class="white__fill futura-book fs__4__px">200.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-1" points="528.5,233.7 591,210.2 598.5,230.3 536,253.8"/>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 589.6775 217.8348)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 533.5085 239.3762)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.9351 -0.3545 0.3545 0.9351 556.83 228.6918)" class="white__fill futura-book fs__4__px">25.00</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 563.1327 233.0301)" class="mustard__fill futura-med fs__4__px">39</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 558.4923 239.9397)" class="white__fill futura-book fs__4__px">200.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-2" points="536,253.8 598.5,230.3 606,250.3 543.5,273.9"/>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 597.175 237.6111)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 541.0068 259.149)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.9351 -0.3545 0.3545 0.9351 564.3261 248.4651)" class="white__fill futura-book fs__4__px">25.00</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 570.6283 252.8035)" class="mustard__fill futura-med fs__4__px">38</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 565.9879 259.7132)" class="white__fill futura-book fs__4__px">200.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-1" points="543.5,273.9 606,250.3 613.6,270.4 551.1,294"/>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 604.7122 258.5231)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 548.5437 280.0632)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.9351 -0.3545 0.3545 0.9351 571.8649 269.3784)" class="white__fill futura-book fs__4__px">25.00</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 578.1674 273.7185)" class="mustard__fill futura-med fs__4__px">37</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 573.527 280.6284)" class="white__fill futura-book fs__4__px">200.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-2" points="551.1,294 613.6,270.4 621.1,290.4 558.6,314"/>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 612.8278 277.8065)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 556.6594 299.3466)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.9351 -0.3545 0.3545 0.9351 579.9794 288.6644)" class="white__fill futura-book fs__4__px">25.00</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 586.2819 293.003)" class="mustard__fill futura-med fs__4__px">36</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 581.6415 299.9129)" class="white__fill futura-book fs__4__px">200.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-1" points="558.6,314 621.1,290.4 628.6,310.5 566.1,334.1"/>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 619.3246 298.0222)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 563.1567 319.5611)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.9351 -0.3545 0.3545 0.9351 586.4761 308.8772)" class="white__fill futura-book fs__4__px">25.00</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 592.7787 313.2166)" class="mustard__fill futura-med fs__4__px">35</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 588.1383 320.1263)" class="white__fill futura-book fs__4__px">200.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-2" points="566.1,334.1 628.6,310.5 636.1,330.6 573.6,354.2"/>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 627.2631 318.0966)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 571.095 339.6376)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.9351 -0.3545 0.3545 0.9351 594.4155 328.9534)" class="white__fill futura-book fs__4__px">25.00</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 600.7179 333.292)" class="mustard__fill futura-med fs__4__px">34</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 596.0775 340.2017)" class="white__fill futura-book fs__4__px">200.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-1" points="573.6,354.2 636.1,330.6 643.6,350.7 581.1,374.2"/>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 634.3463 338.008)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 578.1765 359.5475)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.9351 -0.3545 0.3545 0.9351 601.4972 348.8649)" class="white__fill futura-book fs__4__px">25.00</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 607.8002 353.2034)" class="mustard__fill futura-med fs__4__px">33</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 603.1598 360.1131)" class="white__fill futura-book fs__4__px">200.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-2" points="581.1,374.2 643.6,350.7 651.1,370.7 588.7,394.3"/>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 642.321 359.0155)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 586.1502 380.5523)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.9351 -0.3545 0.3545 0.9351 609.4725 369.8717)" class="white__fill futura-book fs__4__px">25.00</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 615.7736 374.2088)" class="mustard__fill futura-med fs__4__px">32</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 611.1332 381.1184)" class="white__fill futura-book fs__4__px">200.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-1" points="588.7,394.3 651.1,370.7 658.6,390.8 596.1,414.4"/>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 649.7759 378.7949)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 593.6082 400.3316)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.9351 -0.3545 0.3545 0.9351 616.9302 389.6512)" class="white__fill futura-book fs__4__px">25.00</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 623.2318 393.9895)" class="mustard__fill futura-med fs__4__px">31</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 618.5914 400.8992)" class="white__fill futura-book fs__4__px">200.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-2" points="596.1,414.4 658.6,390.8 666.1,410.8 603.7,434.4"/>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 657.3245 398.1914)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 601.1567 419.7303)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.9351 -0.3545 0.3545 0.9351 624.4782 409.0476)" class="white__fill futura-book fs__4__px">25.00</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 630.7794 413.3855)" class="mustard__fill futura-med fs__4__px">30</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 626.139 420.2952)" class="white__fill futura-book fs__4__px">200.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-1" points="603.7,434.4 666.1,410.8 673.7,430.9 611.2,454.5"/>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 664.3877 418.6188)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 608.2227 440.1597)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.9351 -0.3545 0.3545 0.9351 631.5408 429.4761)" class="white__fill futura-book fs__4__px">25.00</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 637.8427 433.8123)" class="mustard__fill futura-med fs__4__px">29</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 633.2023 440.722)" class="white__fill futura-book fs__4__px">200.00m2</text>
							<g>
								<polygon class="mustard__dl__fill" points="657.4,430.6 653.6,426.8 657.4,423.1 657.4,423.1"/>
								<polygon class="mustard__dr__fill" points="657.4,430.6 657.4,423.1 661.2,426.8"/>
							</g>
						</g>
						<g>
							<polygon class="pb-sprite-2" points="611.2,454.5 673.7,430.9 681.1,451 618.7,474.6"/>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 671.8473 438.1073)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 615.6788 459.6474)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.9351 -0.3545 0.3545 0.9351 638.9993 448.9628)" class="white__fill futura-book fs__4__px">25.00</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 645.3019 453.3028)" class="mustard__fill futura-med fs__4__px">28</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 640.6615 460.2127)" class="white__fill futura-book fs__4__px">200.00m2</text>
							<g>
								<polygon class="mustard__dl__fill" points="663.8,450.8 660,447.1 663.8,443.3 663.8,443.3"/>
								<polygon class="mustard__dr__fill" points="663.8,450.8 663.8,443.3 667.5,447.1"/>
							</g>
						</g>
						<g>
							<polygon class="pb-sprite-1" points="618.7,474.6 681.1,451 688.6,471.1 626.2,494.6"/>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 679.8228 458.5321)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 623.6562 480.0746)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.9351 -0.3545 0.3545 0.9351 646.9761 469.3883)" class="white__fill futura-book fs__4__px">25.00</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 653.2794 473.7285)" class="mustard__fill futura-med fs__4__px">27</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 648.639 480.6385)" class="white__fill futura-book fs__4__px">200.00m2</text>
							<g>
								<polygon class="mustard__dl__fill" points="672.4,471.3 668.7,467.5 672.4,463.8 672.4,463.8"/>
								<polygon class="mustard__dr__fill" points="672.4,471.3 672.4,463.8 676.2,467.5"/>
							</g>
						</g>
						<g>
							<polygon class="pb-sprite-2" points="626.2,494.6 688.6,471.1 696.2,491.1 633.7,514.7"/>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 687.364 479.3615)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 631.1977 500.9018)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.9351 -0.3545 0.3545 0.9351 654.5177 490.2169)" class="white__fill futura-book fs__4__px">25.00</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 660.8187 494.5569)" class="mustard__fill futura-med fs__4__px">26</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 656.1783 501.4666)" class="white__fill futura-book fs__4__px">200.00m2</text>
							<g>
								<polygon class="mustard__dl__fill" points="680,491 676.2,487.2 680,483.4 680,483.4"/>
								<polygon class="mustard__dr__fill" points="680,491 680,483.4 683.7,487.2"/>
							</g>
						</g>
						<g>
							<polygon class="pb-sprite-1" points="633.7,514.7 696.2,491.1 703.7,511.2 641.2,534.8"/>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 694.8721 499.2461)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 638.7045 520.7859)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.9351 -0.3545 0.3545 0.9351 662.0248 510.103)" class="white__fill futura-book fs__4__px">25.00</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 668.3278 514.4415)" class="mustard__fill futura-med fs__4__px">25</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 663.6874 521.3511)" class="white__fill futura-book fs__4__px">200.00m2</text>
							<g>
								<polygon class="mustard__dl__fill" points="687.5,511.1 683.7,507.3 687.5,503.5 687.5,503.5"/>
								<polygon class="mustard__dr__fill" points="687.5,511.1 687.5,503.5 691.3,507.3"/>
							</g>
						</g>
						<g>
							<polygon class="pb-sprite-2" points="641.2,534.8 703.7,511.2 711.2,531.3 648.7,554.8"/>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 701.9445 518.7933)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 645.7769 540.3331)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.9351 -0.3545 0.3545 0.9351 669.0974 529.6504)" class="white__fill futura-book fs__4__px">25.00</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 675.4 533.9886)" class="mustard__fill futura-med fs__4__px">24</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 670.7596 540.8985)" class="white__fill futura-book fs__4__px">200.00m2</text>
							<g>
								<polygon class="mustard__dl__fill" points="696.2,531.1 692.4,527.3 696.2,523.6 696.2,523.6"/>
								<polygon class="mustard__dr__fill" points="696.2,531.1 696.2,523.6 700,527.3"/>
							</g>
						</g>
						<g>
							<polygon class="pb-sprite-1" points="648.7,554.8 711.2,531.3 718.8,551.3 656.3,574.9"/>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 709.699 538.7999)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 653.5308 560.3409)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.9351 -0.3545 0.3545 0.9351 676.8525 549.6566)" class="white__fill futura-book fs__4__px">25.00</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 683.1547 553.9959)" class="mustard__fill futura-med fs__4__px">23</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 678.5143 560.9056)" class="white__fill futura-book fs__4__px">200.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-2" points="656.3,574.9 718.8,551.3 726.3,571.4 663.8,594.9"/>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 716.8907 558.7152)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 660.7215 580.2535)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.9351 -0.3545 0.3545 0.9351 684.0434 569.5695)" class="white__fill futura-book fs__4__px">25.00</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 690.3461 573.9105)" class="mustard__fill futura-med fs__4__px">22</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 685.7057 580.8201)" class="white__fill futura-book fs__4__px">200.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-1" points="663.8,594.9 726.3,571.4 733.7,591.5 671.3,615"/>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 724.9426 578.9289)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 668.7745 600.4699)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.9351 -0.3545 0.3545 0.9351 692.0966 589.7875)" class="white__fill futura-book fs__4__px">25.00</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 698.3983 594.1248)" class="mustard__fill futura-med fs__4__px">21</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 693.7579 601.0345)" class="white__fill futura-book fs__4__px">200.00m2</text>
						</g>
						<g>
							<path class="pb-sprite-2" d="M671.3,615l62.4-23.6l7.5,20.1l-62.4,23.6L671.3,615z"/>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 732.4241 599.5951)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.3441 0.9389 -0.9389 0.3441 677.1116 621.6431)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.9351 -0.3545 0.3545 0.9351 705.3298 622.4709)" class="white__fill futura-book fs__4__px">25.00</text>
							<text transform="matrix(0.9351 -0.3545 0.3545 0.9351 700.2999 608.8394)" class="white__fill futura-book fs__4__px">25.00</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 705.808 612.3421)" class="mustard__fill futura-med fs__4__px">20</text>
							<text transform="matrix(0.9342 -0.3567 0.3567 0.9342 701.1676 619.252)" class="white__fill futura-book fs__4__px">200.00m2</text>
							<g>
								<polygon class="mustard__dl__fill" points="726.3,609.6 722.5,605.8 726.3,602.1 726.3,602.1"/>
								<polygon class="mustard__dr__fill" points="726.3,609.6 726.3,602.1 730,605.8"/>
							</g>
						</g>
					</g>
					<g>
						<g>
							<polygon class="pb-sprite-2" points="741,540.1 764.6,602.7 789.6,593.3 766.1,530.7"/>
							<text transform="matrix(0.3575 0.9339 -0.9339 0.3575 753.8086 569.3249)" class="white__fill futura-book fs__4__px">25.00</text>
							<text transform="matrix(0.9338 -0.3577 0.3577 0.9338 750.4036 540.9966)" class="white__fill futura-book fs__4__px">10.00</text>
							<text transform="matrix(0.9338 -0.3577 0.3577 0.9338 771.0444 598.157)" class="white__fill futura-book fs__4__px">10.00</text>
							<text transform="matrix(0.3512 0.9363 -0.9363 0.3512 766.6395 566.9431)" class="mustard__fill futura-med fs__4__px">19</text>
							<text transform="matrix(0.3512 0.9363 -0.9363 0.3512 759.7567 562.262)" class="white__fill futura-book fs__4__px">250.00m2</text>
							<g>
								<polygon class="mustard__dl__fill" points="757.9,549.1 754.1,545.3 757.9,541.6 757.9,541.6"/>
								<polygon class="mustard__dr__fill" points="757.9,549.1 757.9,541.6 761.6,545.3"/>
							</g>
						</g>
						<g>
							<polygon class="pb-sprite-1" points="791.1,521.2 814.6,583.9 789.6,593.3 766.1,530.7"/>
							<text transform="matrix(0.3575 0.9339 -0.9339 0.3575 779.5693 559.6996)" class="white__fill futura-book fs__4__px">25.00</text>
							<text transform="matrix(0.9338 -0.3577 0.3577 0.9338 776.1636 531.3674)" class="white__fill futura-book fs__4__px">10.00</text>
							<text transform="matrix(0.9338 -0.3577 0.3577 0.9338 796.8052 588.5297)" class="white__fill futura-book fs__4__px">10.00</text>
							<text transform="matrix(0.3512 0.9363 -0.9363 0.3512 792.4003 557.3169)" class="mustard__fill futura-med fs__4__px">18</text>
							<text transform="matrix(0.3512 0.9363 -0.9363 0.3512 785.5184 552.6357)" class="white__fill futura-book fs__4__px">250.00m2</text>
							<g>
								<polygon class="mustard__dl__fill" points="783.1,539.7 779.4,535.9 783.1,532.2 783.1,532.2"/>
								<polygon class="mustard__dr__fill" points="783.1,539.7 783.1,532.2 786.9,535.9"/>
							</g>
						</g>
						<g>
							<polygon class="pb-sprite-2" points="791.1,521.2 816.1,511.8 839.6,574.5 814.6,583.9"/>
							<text transform="matrix(0.3575 0.9339 -0.9339 0.3575 803.8652 550.1845)" class="white__fill futura-book fs__4__px">25.00</text>
							<text transform="matrix(0.9338 -0.3577 0.3577 0.9338 800.4606 521.8542)" class="white__fill futura-book fs__4__px">10.00</text>
							<text transform="matrix(0.9338 -0.3577 0.3577 0.9338 821.1019 579.0145)" class="white__fill futura-book fs__4__px">10.00</text>
							<text transform="matrix(0.3512 0.9363 -0.9363 0.3512 816.6952 547.8015)" class="mustard__fill futura-med fs__4__px">17</text>
							<text transform="matrix(0.3512 0.9363 -0.9363 0.3512 809.8124 543.1206)" class="white__fill futura-book fs__4__px">250.00m2</text>
							<g>
								<polygon class="mustard__dl__fill" points="808.1,530.3 804.4,526.5 808.1,522.8 808.1,522.8"/>
								<polygon class="mustard__dr__fill" points="808.1,530.3 808.1,522.8 811.9,526.5"/>
							</g>
						</g>
						<g>
							<polygon class="pb-sprite-1" points="841.2,502.4 864.6,565.1 839.6,574.5 816.1,511.8"/>
							<text transform="matrix(0.3575 0.9339 -0.9339 0.3575 829.2178 540.7438)" class="white__fill futura-book fs__4__px">25.00</text>
							<text transform="matrix(0.9338 -0.3577 0.3577 0.9338 825.812 512.4141)" class="white__fill futura-book fs__4__px">10.00</text>
							<text transform="matrix(0.9338 -0.3577 0.3577 0.9338 846.4549 569.5758)" class="white__fill futura-book fs__4__px">10.00</text>
							<text transform="matrix(0.3512 0.9363 -0.9363 0.3512 842.0487 538.3616)" class="mustard__fill futura-med fs__4__px">16</text>
							<text transform="matrix(0.3512 0.9363 -0.9363 0.3512 835.1659 533.6804)" class="white__fill futura-book fs__4__px">250.00m2</text>
							<g>
								<polygon class="mustard__dl__fill" points="833.5,523.4 829.8,519.6 833.5,515.9 833.5,515.9"/>
								<polygon class="mustard__dr__fill" points="833.5,523.4 833.5,515.9 837.3,519.6"/>
							</g>
						</g>
						<g>
							<polygon class="pb-sprite-2" points="841.2,502.4 866.1,492.9 889.6,555.7 864.6,565.1"/>
							<text transform="matrix(0.3575 0.9339 -0.9339 0.3575 854.6133 531.1193)" class="white__fill futura-book fs__4__px">25.00</text>
							<text transform="matrix(0.9338 -0.3577 0.3577 0.9338 851.2086 502.7892)" class="white__fill futura-book fs__4__px">10.00</text>
							<text transform="matrix(0.9338 -0.3577 0.3577 0.9338 871.8495 559.9496)" class="white__fill futura-book fs__4__px">10.00</text>
							<text transform="matrix(0.3512 0.9363 -0.9363 0.3512 867.4452 528.7373)" class="mustard__fill futura-med fs__4__px">15</text>
							<text transform="matrix(0.3512 0.9363 -0.9363 0.3512 860.5624 524.0562)" class="white__fill futura-book fs__4__px">250.00m2</text>
							<g>
								<polygon class="mustard__dl__fill" points="858.3,512.1 854.5,508.3 858.3,504.6 858.3,504.6"/>
								<polygon class="mustard__dr__fill" points="858.3,512.1 858.3,504.6 862.1,508.3"/>
							</g>
						</g>
						<g>
							<polygon class="pb-sprite-1" points="891.1,483.6 914.6,546.2 889.6,555.7 866.1,492.9"/>
							<text transform="matrix(0.3575 0.9339 -0.9339 0.3575 878.7578 521.9548)" class="white__fill futura-book fs__4__px">25.00</text>
							<text transform="matrix(0.9338 -0.3577 0.3577 0.9338 875.3526 493.6232)" class="white__fill futura-book fs__4__px">10.00</text>
							<text transform="matrix(0.9338 -0.3577 0.3577 0.9338 895.9949 550.7831)" class="white__fill futura-book fs__4__px">10.00</text>
							<text transform="matrix(0.3512 0.9363 -0.9363 0.3512 891.5887 519.5708)" class="mustard__fill futura-med fs__4__px">14</text>
							<text transform="matrix(0.3512 0.9363 -0.9363 0.3512 884.7059 514.8896)" class="white__fill futura-book fs__4__px">250.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-2" points="891.1,483.6 913.7,475.1 937.1,537.8 914.6,546.2"/>
							<text transform="matrix(0.3575 0.9339 -0.9339 0.3575 903.1055 511.809)" class="white__fill futura-book fs__4__px">25.00</text>
							<text transform="matrix(0.9338 -0.3577 0.3577 0.9338 899.3129 484.5852)" class="white__fill futura-book fs__4__px">9.00</text>
							<text transform="matrix(0.9338 -0.3577 0.3577 0.9338 921.1013 541.4817)" class="white__fill futura-book fs__4__px">9.00</text>
							<text transform="matrix(0.3512 0.9363 -0.9363 0.3512 915.494 509.2492)" class="mustard__fill futura-med fs__4__px">13</text>
							<text transform="matrix(0.3512 0.9363 -0.9363 0.3512 908.6112 504.5681)" class="white__fill futura-book fs__4__px">225.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-1" points="913.7,475.1 945.1,463.2 958.5,529.7 937.1,537.8"/>
							<text transform="matrix(0.2008 0.9796 -0.9796 0.2008 946.5038 495.6684)" class="white__fill futura-book fs__4__px">25.32</text>
							<text transform="matrix(0.3575 0.9339 -0.9339 0.3575 925.8633 502.1415)" class="white__fill futura-book fs__4__px">25.00</text>
							<text transform="matrix(0.9338 -0.3577 0.3577 0.9338 943.9216 532.1389)" class="white__fill futura-book fs__4__px">8.59</text>
							<text transform="matrix(0.9338 -0.3577 0.3577 0.9338 925.5633 474.7086)" class="white__fill futura-book fs__4__px">12.58</text>
							<text transform="matrix(0.3512 0.9363 -0.9363 0.3512 939.577 499.8999)" class="mustard__fill futura-med fs__4__px">12</text>
							<text transform="matrix(0.3512 0.9363 -0.9363 0.3512 932.6942 495.2187)" class="white__fill futura-book fs__4__px">264.61m2</text>
							<g>
								<polygon class="mustard__dl__fill" points="932.5,484.6 928.8,480.9 932.5,477.1 932.5,477.1"/>
								<polygon class="mustard__dr__fill" points="932.5,484.6 932.5,477.1 936.3,480.9"/>
							</g>
						</g>
					</g>
					<g>
						<g>
							<polygon class="pb-sprite-2" points="869.7,427.8 935.1,414.5 940,438.5 876.8,462.3"/>
							<text transform="matrix(0.2008 0.9796 -0.9796 0.2008 931.7731 423.4693)" class="white__fill futura-book fs__4__px">9.15</text>
							<text transform="matrix(0.2008 0.9796 -0.9796 0.2008 873.046 438.5856)" class="white__fill futura-book fs__4__px">13.14</text>
							<text transform="matrix(0.9338 -0.3577 0.3577 0.9338 905.021 450.2301)" class="white__fill futura-book fs__4__px">25.32</text>
							<text transform="matrix(0.9806 -0.196 0.196 0.9806 903.2352 433.48)" class="mustard__fill futura-med fs__4__px">11</text>
							<text transform="matrix(0.9806 -0.196 0.196 0.9806 897.5079 439.5197)" class="white__fill futura-book fs__4__px">278.66m2</text>
							<g>
								<polygon class="mustard__dl__fill" points="885.4,445.5 881.6,441.7 885.4,438 885.4,438"/>
								<polygon class="mustard__dr__fill" points="885.4,445.5 885.4,438 889.2,441.7"/>
							</g>
						</g>
						<g>
							<polygon class="pb-sprite-1" points="865.5,406.8 930.9,393.5 935.1,414.5 869.7,427.8"/>
							<text transform="matrix(0.2008 0.9796 -0.9796 0.2008 927.1871 400.975)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.2008 0.9796 -0.9796 0.2008 867.7095 412.6684)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.9795 -0.2012 0.2012 0.9795 897.204 420.5859)" class="white__fill futura-book fs__4__px">25.00</text>
							<text transform="matrix(0.9806 -0.196 0.196 0.9806 897.5014 408.3419)" class="mustard__fill futura-med fs__4__px">10</text>
							<text transform="matrix(0.9806 -0.196 0.196 0.9806 891.7741 414.3816)" class="white__fill futura-book fs__4__px">200.00m2</text>
							<g>
								<polygon class="mustard__dl__fill" points="879.8,418.3 876,414.5 879.8,410.7 879.8,410.7"/>
								<polygon class="mustard__dr__fill" points="879.8,418.3 879.8,410.7 883.5,414.5"/>
							</g>
						</g>
						<g>
							<polygon class="pb-sprite-2" points="861.3,385.9 926.6,372.5 930.9,393.5 865.5,406.8"/>
							<text transform="matrix(0.2008 0.9796 -0.9796 0.2008 922.9262 380.334)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.2008 0.9796 -0.9796 0.2008 863.4462 392.0258)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.9795 -0.2012 0.2012 0.9795 892.9431 399.944)" class="white__fill futura-book fs__4__px">25.00</text>
							<text transform="matrix(0.9806 -0.196 0.196 0.9806 893.2397 387.6996)" class="mustard__fill futura-med fs__4__px">09</text>
							<text transform="matrix(0.9806 -0.196 0.196 0.9806 887.5124 393.7393)" class="white__fill futura-book fs__4__px">200.00m2</text>
							<g>
								<polygon class="mustard__dl__fill" points="875,398.4 871.2,394.6 875,390.9 875,390.9"/>
								<polygon class="mustard__dr__fill" points="875,398.4 875,390.9 878.8,394.6"/>
							</g>
						</g>
						<g>
							<polygon class="pb-sprite-1" points="857,364.8 922.4,351.5 926.6,372.5 861.3,385.9"/>
							<text transform="matrix(0.2008 0.9796 -0.9796 0.2008 918.9917 359.029)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.2008 0.9796 -0.9796 0.2008 859.5133 370.7235)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.9795 -0.2012 0.2012 0.9795 889.0076 378.64)" class="white__fill futura-book fs__4__px">25.00</text>
							<text transform="matrix(0.9806 -0.196 0.196 0.9806 889.3065 366.3962)" class="mustard__fill futura-med fs__4__px">08</text>
							<text transform="matrix(0.9806 -0.196 0.196 0.9806 883.5792 372.4359)" class="white__fill futura-book fs__4__px">200.00m2</text>
							<g>
								<polygon class="mustard__dl__fill" points="871.7,376.2 868,372.5 871.7,368.7 871.7,368.7"/>
								<polygon class="mustard__dr__fill" points="871.7,376.2 871.7,368.7 875.5,372.5"/>
							</g>
						</g>
						<g>
							<polygon class="pb-sprite-2" points="852.7,343.8 918.1,330.4 922.4,351.5 857,364.8"/>
							<text transform="matrix(0.2008 0.9796 -0.9796 0.2008 914.4043 337.6803)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.2008 0.9796 -0.9796 0.2008 854.9268 349.3747)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.9795 -0.2012 0.2012 0.9795 884.4233 357.2928)" class="white__fill futura-book fs__4__px">25.00</text>
							<text transform="matrix(0.9806 -0.196 0.196 0.9806 884.7213 345.0468)" class="mustard__fill futura-med fs__4__px">07</text>
							<text transform="matrix(0.9806 -0.196 0.196 0.9806 878.994 351.0865)" class="white__fill futura-book fs__4__px">200.00m2</text>
							<g>
								<polygon class="mustard__dl__fill" points="866.4,355.9 862.6,352.1 866.4,348.3 866.4,348.3"/>
								<polygon class="mustard__dr__fill" points="866.4,355.9 866.4,348.3 870.1,352.1"/>
							</g>
						</g>
						<g>
							<polygon class="pb-sprite-1" points="848.5,322.8 913.8,309.4 918.1,330.4 852.7,343.8"/>
							<text transform="matrix(0.2008 0.9796 -0.9796 0.2008 910.3994 317.0626)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.2008 0.9796 -0.9796 0.2008 850.9221 328.7579)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.9795 -0.2012 0.2012 0.9795 880.4163 336.6744)" class="white__fill futura-book fs__4__px">25.00</text>
							<text transform="matrix(0.9806 -0.196 0.196 0.9806 880.715 324.4322)" class="mustard__fill futura-med fs__4__px">06</text>
							<text transform="matrix(0.9806 -0.196 0.196 0.9806 874.9877 330.4719)" class="white__fill futura-book fs__4__px">200.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-2" points="844.2,301.8 909.6,288.5 913.8,309.4 848.5,322.8"/>
							<text transform="matrix(0.2008 0.9796 -0.9796 0.2008 906.2963 296.0244)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.2008 0.9796 -0.9796 0.2008 846.8188 307.7188)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.9795 -0.2012 0.2012 0.9795 876.3145 315.6349)" class="white__fill futura-book fs__4__px">25.00</text>
							<text transform="matrix(0.9806 -0.196 0.196 0.9806 876.6134 303.3925)" class="mustard__fill futura-med fs__4__px">05</text>
							<text transform="matrix(0.9806 -0.196 0.196 0.9806 870.8861 309.4322)" class="white__fill futura-book fs__4__px">200.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-1" points="840,280.8 905.3,267.5 909.6,288.5 844.2,301.8"/>
							<text transform="matrix(0.2008 0.9796 -0.9796 0.2008 901.9971 274.7204)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.2008 0.9796 -0.9796 0.2008 842.5177 286.4151)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.9795 -0.2012 0.2012 0.9795 872.0143 294.332)" class="white__fill futura-book fs__4__px">25.00</text>
							<text transform="matrix(0.9806 -0.196 0.196 0.9806 872.3127 282.0888)" class="mustard__fill futura-med fs__4__px">04</text>
							<text transform="matrix(0.9806 -0.196 0.196 0.9806 866.5854 288.1285)" class="white__fill futura-book fs__4__px">200.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-2" points="835.6,259.8 901,246.4 905.3,267.5 840,280.8"/>
							<text transform="matrix(0.2008 0.9796 -0.9796 0.2008 897.8959 254.3288)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.2008 0.9796 -0.9796 0.2008 838.4171 266.0214)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.9795 -0.2012 0.2012 0.9795 867.9124 273.9375)" class="white__fill futura-book fs__4__px">25.00</text>
							<text transform="matrix(0.9806 -0.196 0.196 0.9806 868.2101 261.6946)" class="mustard__fill futura-med fs__4__px">03</text>
							<text transform="matrix(0.9806 -0.196 0.196 0.9806 862.4828 267.7343)" class="white__fill futura-book fs__4__px">200.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-1" points="831.4,238.8 896.8,225.5 901,246.4 835.6,259.8"/>
							<text transform="matrix(0.2008 0.9796 -0.9796 0.2008 893.1545 232.6907)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.2008 0.9796 -0.9796 0.2008 833.6754 244.3864)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.9795 -0.2012 0.2012 0.9795 863.1723 252.3033)" class="white__fill futura-book fs__4__px">25.00</text>
							<text transform="matrix(0.9806 -0.196 0.196 0.9806 863.4706 240.0594)" class="mustard__fill futura-med fs__4__px">02</text>
							<text transform="matrix(0.9806 -0.196 0.196 0.9806 857.7433 246.0991)" class="white__fill futura-book fs__4__px">200.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-2" points="827.1,217.8 892.5,204.5 896.8,225.5 831.4,238.8"/>
							<text transform="matrix(0.2008 0.9796 -0.9796 0.2008 889.2511 212.763)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.2008 0.9796 -0.9796 0.2008 829.6425 224.9358)" class="white__fill futura-book fs__4__px">8.00</text>
							<text transform="matrix(0.9795 -0.2012 0.2012 0.9795 858.7396 231.8591)" class="white__fill futura-book fs__4__px">25.00</text>
							<text transform="matrix(0.9795 -0.2012 0.2012 0.9795 854.9969 215.9828)" class="white__fill futura-book fs__4__px">25.00</text>
							<text transform="matrix(0.9806 -0.196 0.196 0.9806 860.4263 221.1407)" class="mustard__fill futura-med fs__4__px">01</text>
							<text transform="matrix(0.9806 -0.196 0.196 0.9806 854.699 227.1804)" class="white__fill futura-book fs__4__px">200.00m2</text>
							<g>
								<polygon class="mustard__dl__fill" points="843.3,229.9 839.5,226.1 843.3,222.4 843.3,222.4"/>
								<polygon class="mustard__dr__fill" points="843.3,229.9 843.3,222.4 847,226.1"/>
							</g>
						</g>
					</g>
				</g>
				<g>
					<path class="white__stroke no__fill" d="M483.5,113.3"/>
					<line class="white__stroke no__fill" x1="546" y1="89.8" x2="483.5" y2="113.3"/>
					<line class="white__stroke no__fill" x1="491" y1="133.4" x2="553.4" y2="109.9"/>
					<line class="white__stroke no__fill" x1="561" y1="129.9" x2="498.5" y2="153.5"/>
					<line class="white__stroke no__fill" x1="506" y1="173.6" x2="568.5" y2="150"/>
					<line class="white__stroke no__fill" x1="576" y1="170.1" x2="513.5" y2="193.6"/>
					<line class="white__stroke no__fill" x1="521" y1="213.7" x2="583.5" y2="190.1"/>
					<line class="white__stroke no__fill" x1="591" y1="210.2" x2="528.5" y2="233.7"/>
					<line class="white__stroke no__fill" x1="536" y1="253.8" x2="598.5" y2="230.3"/>
					<line class="white__stroke no__fill" x1="606" y1="250.3" x2="543.5" y2="273.9"/>
					<line class="white__stroke no__fill" x1="551.1" y1="294" x2="613.6" y2="270.4"/>
					<line class="white__stroke no__fill" x1="621.1" y1="290.4" x2="558.6" y2="314"/>
					<line class="white__stroke no__fill" x1="566.1" y1="334.1" x2="628.6" y2="310.5"/>
					<line class="white__stroke no__fill" x1="636.1" y1="330.6" x2="573.6" y2="354.2"/>
					<line class="white__stroke no__fill" x1="581.1" y1="374.2" x2="643.6" y2="350.7"/>
					<line class="white__stroke no__fill" x1="651.1" y1="370.7" x2="588.7" y2="394.3"/>
					<line class="white__stroke no__fill" x1="596.1" y1="414.4" x2="658.6" y2="390.8"/>
					<line class="white__stroke no__fill" x1="666.1" y1="410.8" x2="603.7" y2="434.4"/>
					<line class="white__stroke no__fill" x1="611.2" y1="454.5" x2="673.7" y2="430.9"/>
					<line class="white__stroke no__fill" x1="681.1" y1="451" x2="618.7" y2="474.6"/>
					<line class="white__stroke no__fill" x1="626.2" y1="494.6" x2="688.6" y2="471.1"/>
					<line class="white__stroke no__fill" x1="696.2" y1="491.1" x2="633.7" y2="514.7"/>
					<line class="white__stroke no__fill" x1="641.2" y1="534.8" x2="703.7" y2="511.2"/>
					<line class="white__stroke no__fill" x1="648.7" y1="554.8" x2="711.2" y2="531.3"/>
					<line class="white__stroke no__fill" x1="718.8" y1="551.3" x2="656.3" y2="574.9"/>
					<line class="white__stroke no__fill" x1="663.8" y1="594.9" x2="726.3" y2="571.4"/>
					<line class="white__stroke no__fill" x1="733.7" y1="591.5" x2="671.3" y2="615"/>
					<line class="white__stroke no__fill" x1="605.5" y1="117.2" x2="626.7" y2="173.6"/>
					<line class="white__stroke no__fill" x1="631.7" y1="171.8" x2="655.2" y2="234.4"/>
					<line class="white__stroke no__fill" x1="680.2" y1="225" x2="656.7" y2="162.3"/>
					<line class="white__stroke no__fill" x1="646.7" y1="166.1" x2="625.6" y2="109.7"/>
					<line class="white__stroke no__fill" x1="645.6" y1="102.1" x2="666.7" y2="158.5"/>
					<line class="white__stroke no__fill" x1="681.7" y1="153" x2="705.2" y2="215.6"/>
					<line class="white__stroke no__fill" x1="686.8" y1="151" x2="665.6" y2="94.6"/>
					<path class="white__stroke no__fill" d="M685.6,87.1"/>
					<path class="white__stroke no__fill" d="M685.6,87.1"/>
					<line class="white__stroke no__fill" x1="685.6" y1="87.1" x2="730.2" y2="206.2"/>
					<line class="white__stroke no__fill" x1="733.4" y1="133.5" x2="712.3" y2="77"/>
					<line class="white__stroke no__fill" x1="729.2" y1="135" x2="752.7" y2="197.8"/>
					<line class="white__stroke no__fill" x1="606.7" y1="181.2" x2="760" y2="123.5"/>
					<line class="white__stroke no__fill" x1="658.9" y1="259.7" x2="680" y2="316.1"/>
					<line class="white__stroke no__fill" x1="685.1" y1="314.2" x2="708.5" y2="376.9"/>
					<line class="white__stroke no__fill" x1="733.5" y1="367.5" x2="710" y2="304.8"/>
					<line class="white__stroke no__fill" x1="700.1" y1="308.6" x2="679" y2="252.2"/>
					<line class="white__stroke no__fill" x1="698.9" y1="244.6" x2="720" y2="301"/>
					<line class="white__stroke no__fill" x1="735.1" y1="295.4" x2="758.5" y2="358.1"/>
					<line class="white__stroke no__fill" x1="740.1" y1="293.5" x2="719" y2="237.1"/>
					<line class="white__stroke no__fill" x1="739" y1="229.5" x2="760.1" y2="285.9"/>
					<line class="white__stroke no__fill" x1="757.6" y1="286.8" x2="781" y2="349.6"/>
					<line class="white__stroke no__fill" x1="803.6" y1="341.2" x2="780.1" y2="278.5"/>
					<line class="white__stroke no__fill" x1="785.9" y1="276.2" x2="764.7" y2="219.9"/>
					<line class="white__stroke no__fill" x1="660.1" y1="323.7" x2="811.6" y2="266.5"/>
					<line class="white__stroke no__fill" x1="777.3" y1="83.5" x2="836.2" y2="71.4"/>
					<line class="white__stroke no__fill" x1="781.5" y1="104.4" x2="840.4" y2="92.4"/>
					<line class="white__stroke no__fill" x1="786.9" y1="130.7" x2="845.8" y2="118.7"/>
					<line class="white__stroke no__fill" x1="831.4" y1="238.8" x2="896.8" y2="225.5"/>
					<line class="white__stroke no__fill" x1="901" y1="246.4" x2="835.6" y2="259.8"/>
					<line class="white__stroke no__fill" x1="840" y1="280.8" x2="905.3" y2="267.5"/>
					<line class="white__stroke no__fill" x1="827.1" y1="217.8" x2="892.5" y2="204.5"/>
					<line class="white__stroke no__fill" x1="909.6" y1="288.5" x2="844.2" y2="301.8"/>
					<line class="white__stroke no__fill" x1="773" y1="62.5" x2="831.8" y2="50.5"/>
					<line class="white__stroke no__fill" x1="848.5" y1="322.8" x2="913.8" y2="309.4"/>
					<line class="white__stroke no__fill" x1="918.1" y1="330.4" x2="852.7" y2="343.8"/>
					<line class="white__stroke no__fill" x1="857" y1="364.8" x2="922.4" y2="351.5"/>
					<line class="white__stroke no__fill" x1="926.6" y1="372.5" x2="861.3" y2="385.9"/>
					<line class="white__stroke no__fill" x1="865.5" y1="406.8" x2="930.9" y2="393.5"/>
					<line class="white__stroke no__fill" x1="935.1" y1="414.5" x2="869.7" y2="427.8"/>
					<line class="white__stroke no__fill" x1="913.7" y1="475.1" x2="937.1" y2="537.8"/>
					<line class="white__stroke no__fill" x1="914.6" y1="546.2" x2="891.1" y2="483.6"/>
					<line class="white__stroke no__fill" x1="866.1" y1="492.9" x2="889.6" y2="555.7"/>
					<line class="white__stroke no__fill" x1="864.6" y1="565.1" x2="841.2" y2="502.4"/>
					<line class="white__stroke no__fill" x1="816.1" y1="511.8" x2="839.6" y2="574.5"/>
					<line class="white__stroke no__fill" x1="814.6" y1="583.9" x2="791.1" y2="521.2"/>
					<line class="white__stroke no__fill" x1="766.1" y1="530.7" x2="789.6" y2="593.3"/>
				</g>
			</g>
			<g>
				<line class="white_stroke no__fill" x1="421.8" y1="460.5" x2="434.7" y2="505.6"/>
				<path class="white__fill" d="M457.7,574.4c0,0,0.1,0,0.1-0.1s0-0.1,0-0.1c0-0.3-0.1-0.6-0.1-0.9l0.5-0.7c0,0,0.1,0,0.2,0s0.1,0,0.1-0.1
					c0.1-0.1,0.2-0.2,0.2-0.3v-0.1c0-0.1,0-0.2-0.1-0.2c-0.5-0.5-1.1-1.1-1.6-1.6c-0.1-0.1-0.1-0.1-0.2-0.2c-0.1,0-0.1-0.1-0.1-0.1
					c-0.6-0.3-1.3-0.7-1.9-1c0,0-0.1,0-0.2,0s-0.1,0.1-0.2,0.1c-0.1,0.1-0.2,0.2-0.2,0.3c0,0-0.1,0.1,0,0.2c0,0.1,0.1,0.1,0.1,0.1
					c-0.2,0.2-0.3,0.4-0.5,0.7l-0.9,0.2c0,0-0.1,0-0.1,0.1v0.1c0.4,1.1,0.8,2.2,1.1,3.2c0,0,0.1,0.1,0.1,0.2c0.1,0.1,0.2,0.1,0.2,0.1
					C455.4,574.3,456.6,574.3,457.7,574.4z"/>
				<g>
					<path class="st17" d="M444.9,568.4l-2.2-1.6c-0.5,0.5-1.1,0.6-1.7,0.4c-0.7-0.3-1.1-1.2-0.7-2.1c-0.7-0.5-1.3-0.9-2-1.4l1.3,5.5
						L444.9,568.4z"/>
					<text transform="matrix(-0.8057 -0.5923 0.5923 -0.8057 446.7319 565.5868)" class="st18 futura-book fs__2-6__px">SALIDA</text>
				</g>
				<g>
					<path class="st17" d="M464.7,581.2l2.3,1.4c0.4-0.5,1.1-0.7,1.6-0.5c0.7,0.2,1.2,1.2,0.9,2c0.7,0.4,1.4,0.8,2.1,1.3l-1.7-5.4
						L464.7,581.2z"/>
					<text transform="matrix(0.8494 0.5278 -0.5278 0.8494 463.0627 584.1442)" class="st18 futura-book fs__2-6__px">ACCESO</text>
				</g>
				<g>
					<path class="st17" d="M844.6,186.8l0.5,2.7c0.7,0,1.3,0.3,1.5,0.9c0.3,0.7-0.1,1.6-1,2c0.1,0.8,0.3,1.6,0.4,2.4l2.9-4.9
						L844.6,186.8z"/>
					<text transform="matrix(0.1699 0.9855 -0.9855 0.1699 841.362 187.5444)" class="st18 futura-book fs__2-6__px">SALIDA</text>
				</g>
				<g>
					<path class="st17" d="M839.2,163.9l-0.7-2.6c-0.7,0.1-1.3-0.2-1.6-0.7c-0.4-0.7,0-1.7,0.8-2.1c-0.2-0.8-0.4-1.6-0.6-2.4l-2.5,5.1
						L839.2,163.9z"/>
					<text transform="matrix(-0.2461 -0.9692 0.9692 -0.2461 842.5046 162.8914)" class="st18 futura-book fs__2-6__px">ACCESO</text>
				</g>
				<g>
					<path class="st17" d="M924.4,145.4l-0.5-2.7c-0.7,0-1.3-0.3-1.5-0.8c-0.3-0.7,0.1-1.7,0.9-2c-0.2-0.8-0.3-1.6-0.5-2.4l-2.8,4.9
						L924.4,145.4z"/>
					<text transform="matrix(-0.1886 -0.9821 0.9821 -0.1886 927.6318 144.5728)" class="st18 futura-book fs__2-6__px">SALIDA</text>
				</g>
				<g>
					<path class="st17" d="M930.2,168.2l0.8,2.6c0.7-0.1,1.3,0.2,1.6,0.7c0.4,0.7,0.1,1.6-0.8,2.1c0.2,0.8,0.5,1.6,0.7,2.3l2.4-5.1
						L930.2,168.2z"/>
					<text transform="matrix(0.2645 0.9644 -0.9644 0.2645 926.9937 169.2346)" class="st18 futura-book fs__2-6__px">ACCESO</text>
				</g>
				<path class="st17" d="M455.4,573.7l-0.2-0.1h-0.8l-0.2-0.7l-0.2-0.1l0.4-0.5l0.1-0.1c0.1,0,0.1,0,0.2,0s0.2,0,0.4,0
					c0.2,0,0.4,0,0.5,0c0.1,0.1,0.1,0.2,0.2,0.4s0.1,0.3,0.1,0.4v0.1c0,0.1,0,0.1-0.1,0.1C455.7,573.3,455.5,573.5,455.4,573.7z"/>
				
					<rect x="455.8" y="569.5" transform="matrix(0.5965 -0.8026 0.8026 0.5965 -274.7566 596.6208)" class="st17" width="0.4" height="4.1"/>
				<path class="white__fill" d="M841.8,178.4c0,0,0.1,0,0.2,0c0.1,0,0.1-0.1,0.1-0.1c0.2-0.2,0.3-0.5,0.5-0.7l0.8-0.2c0,0,0,0.1,0.1,0.1
					s0.1,0,0.1,0c0.1,0,0.3,0,0.4-0.1c0,0,0.1,0,0.1-0.1c0.1-0.1,0.1-0.2,0.1-0.2c0-0.8-0.1-1.5-0.1-2.3c0-0.1,0-0.2,0-0.3s0-0.1,0-0.2
					c-0.2-0.7-0.5-1.4-0.7-2.1c0,0,0-0.1-0.1-0.1s-0.1,0-0.2,0c-0.1,0-0.3,0.1-0.4,0.1c0,0-0.1,0-0.1,0.1s0,0.1,0,0.1
					c-0.3,0.1-0.5,0.1-0.8,0.2l-0.8-0.5h-0.1c-0.1,0-0.1,0-0.1,0.1c-0.5,1.1-0.9,2.1-1.4,3.2c0,0,0,0.1,0,0.2c0,0.1,0.1,0.2,0.1,0.2
					C840.2,176.7,841,177.6,841.8,178.4z"/>
				<path class="st17" d="M840.6,176.3v-0.2l-0.5-0.5l0.3-0.7v-0.2l0.6-0.1c0,0,0.1,0,0.2,0c0.1,0,0.1,0,0.1,0.1c0.1,0,0.2,0.1,0.3,0.2
					c0.1,0.1,0.2,0.3,0.3,0.4c0,0.1,0,0.3-0.1,0.4c-0.1,0.2-0.2,0.3-0.2,0.4c0,0,0,0.1-0.1,0.1s-0.1,0.1-0.1,0.1
					C841.1,176.2,840.8,176.2,840.6,176.3z"/>
				
					<rect x="842.3" y="173" transform="matrix(0.9818 -0.1898 0.1898 0.9818 -17.9127 163.087)" class="st17" width="0.4" height="4.1"/>
				<path class="white__fill" d="M927.5,154.5c0,0-0.1,0-0.2,0c-0.1,0-0.1,0.1-0.1,0.1c-0.2,0.2-0.3,0.5-0.5,0.7l-0.8,0.2c0,0,0-0.1-0.1-0.1
					s-0.1,0-0.1,0c-0.1,0-0.3,0-0.4,0.1c0,0-0.1,0-0.1,0.1c-0.1,0.1-0.1,0.2-0.1,0.2c0,0.8,0.1,1.5,0.1,2.3c0,0.1,0,0.2,0,0.3
					s0,0.1,0,0.2c0.2,0.7,0.5,1.4,0.7,2.1c0,0,0,0.1,0.1,0.1s0.1,0,0.2,0c0.1,0,0.3-0.1,0.4-0.1c0,0,0.1,0,0.1-0.1s0-0.1,0-0.1
					c0.3-0.1,0.5-0.1,0.8-0.2l0.8,0.5h0.1c0.1,0,0.1,0,0.1-0.1c0.5-1.1,0.9-2.1,1.4-3.2c0,0,0-0.1,0-0.2c0-0.1-0.1-0.2-0.1-0.2
					C929.1,156.2,928.3,155.4,927.5,154.5z"/>
				<path class="st17" d="M928.7,156.6v0.2l0.5,0.5l-0.3,0.7v0.2l-0.6,0.1c0,0-0.1,0-0.2,0c-0.1,0-0.1,0-0.1-0.1
					c-0.1,0-0.2-0.1-0.3-0.2c-0.1-0.1-0.2-0.3-0.3-0.4c0-0.1,0-0.3,0.1-0.4c0.1-0.2,0.2-0.3,0.2-0.4c0,0,0-0.1,0.1-0.1s0.1-0.1,0.1-0.1
					C928.2,156.7,928.5,156.7,928.7,156.6z"/>
				
					<rect x="926.6" y="155.8" transform="matrix(0.9818 -0.1898 0.1898 0.9818 -13.1157 178.7771)" class="st17" width="0.4" height="4.1"/>
			</g>

			<g>
				<g>

					<g>
						<g>
							<polygon class="pb-sprite-2" points="1033.5,302 1014.3,207.3 1062.8,201.1 1074.8,296.8"/>
							<text transform="matrix(0.9905 -0.1376 0.1376 0.9905 1031.8967 210.5953)" class="white__fill futura-book fs__4__px">18.30</text>
							<text transform="matrix(0.9905 -0.1376 0.1376 0.9905 1045.0271 298.5154)" class="white__fill futura-book fs__4__px">15.55</text>
							<text transform="matrix(0.1577 0.9875 -0.9875 0.1577 1025.5872 249.7049)" class="white__fill futura-book fs__4__px">36.10</text>
							<text transform="matrix(0.1243 0.9922 -0.9922 0.1243 1048.1503 249.3458)" class="mustard__fill futura-med fs__4__px">32</text>
							<text transform="matrix(0.1243 0.9922 -0.9922 0.1243 1042.5414 243.1955)" class="white__fill futura-book fs__4__px">609.21m2</text>
							<g>
								<polygon class="mustard__dl__fill" points="1049.9,286.2 1046.2,282.5 1049.9,278.7 1049.9,278.7"/>
								<polygon class="mustard__dr__fill" points="1049.9,286.2 1049.9,278.7 1053.7,282.5"/>
							</g>
						</g>
						<g>
							<polygon class="pb-sprite-1" points="1074.8,296.8 1116,291.7 1104,196 1062.8,201.1"/>
							<text transform="matrix(0.9905 -0.1376 0.1376 0.9905 1076.8114 204.8365)" class="white__fill futura-book fs__4__px">15.55</text>
							<text transform="matrix(0.9905 -0.1376 0.1376 0.9905 1089.755 292.8211)" class="white__fill futura-book fs__4__px">15.55</text>
							<text transform="matrix(0.1577 0.9875 -0.9875 0.1577 1070.2805 241.3773)" class="white__fill futura-book fs__4__px">36.00</text>
							<text transform="matrix(0.1243 0.9922 -0.9922 0.1243 1090.9187 242.9131)" class="mustard__fill futura-med fs__4__px">31</text>
							<text transform="matrix(0.1243 0.9922 -0.9922 0.1243 1085.3118 236.7626)" class="white__fill futura-book fs__4__px">559.80m2</text>
							<g>
								<polygon class="mustard__dl__fill" points="1091.2,279.5 1087.4,275.7 1091.2,271.9 1091.2,271.9"/>
								<polygon class="mustard__dr__fill" points="1091.2,279.5 1091.2,271.9 1095,275.7"/>
							</g>
						</g>
						<g>
							<polygon class="pb-sprite-2" points="1116,291.7 1104,196 1145.2,190.8 1157.2,286.5"/>
							<text transform="matrix(0.9905 -0.1376 0.1376 0.9905 1118.442 199.8526)" class="white__fill futura-book fs__4__px">15.55</text>
							<text transform="matrix(0.9905 -0.1376 0.1376 0.9905 1131.3865 287.8361)" class="white__fill futura-book fs__4__px">15.55</text>
							<text transform="matrix(0.1577 0.9875 -0.9875 0.1577 1111.9114 236.3922)" class="white__fill futura-book fs__4__px">36.00</text>
							<text transform="matrix(0.1243 0.9922 -0.9922 0.1243 1132.5496 237.928)" class="mustard__fill futura-med fs__4__px">30</text>
							<text transform="matrix(0.1243 0.9922 -0.9922 0.1243 1126.9427 231.7775)" class="white__fill futura-book fs__4__px">559.80m2</text>
							<g>
								<polygon class="mustard__dl__fill" points="1134.2,274.3 1130.5,270.5 1134.2,266.8 1134.2,266.8"/>
								<polygon class="mustard__dr__fill" points="1134.2,274.3 1134.2,266.8 1138,270.5"/>
							</g>
						</g>
						<g>
							<polygon class="pb-sprite-1" points="1145.2,190.8 1157.2,286.5 1198.4,281.3 1216.9,181.8"/>
							<text transform="matrix(0.9905 -0.1376 0.1376 0.9905 1174.2415 193.0613)" class="white__fill futura-book fs__4__px">27.03</text>
							<text transform="matrix(0.9905 -0.1376 0.1376 0.9905 1171.7466 282.6482)" class="white__fill futura-book fs__4__px">15.55</text>
							<text transform="matrix(0.1577 0.9875 -0.9875 0.1577 1152.7551 231.5889)" class="white__fill futura-book fs__4__px">36.00</text>
							<text transform="matrix(-0.1743 0.9847 -0.9847 -0.1743 1202.5923 230.9488)" class="white__fill futura-book fs__4__px">37.79</text>
							<text transform="matrix(0.1243 0.9922 -0.9922 0.1243 1180.7542 233.6744)" class="mustard__fill futura-med fs__4__px">29</text>
							<text transform="matrix(0.1243 0.9922 -0.9922 0.1243 1175.1473 227.5248)" class="white__fill futura-book fs__4__px">766.52m2</text>
							<g>
								<polygon class="mustard__dl__fill" points="1176.6,268.4 1172.9,264.6 1176.6,260.9 1176.6,260.9"/>
								<polygon class="mustard__dr__fill" points="1176.6,268.4 1176.6,260.9 1180.4,264.6"/>
							</g>
						</g>
						<g>
							<path class="pb-sprite-1" d="M1165,93.8l34.5-4.3c3.3,6.4,8.3,14.3,15.8,22.3c4.3,4.6,8.6,8.2,12.5,11.1c-3.6,19.7-7.3,39.3-10.9,59
								l-40.2,5L1165,93.8z"/>
							<text transform="matrix(0.9905 -0.1376 0.1376 0.9905 1177.6577 96.9605)" class="white__fill futura-book fs__4__px">13.03</text>
							<text transform="matrix(0.6538 0.7566 -0.7566 0.6538 1203.7163 105.3498)" class="white__fill futura-book fs__4__px">16.52</text>
							<text transform="matrix(0.9905 -0.1376 0.1376 0.9905 1191.484 182.7834)" class="white__fill futura-book fs__4__px">15.19</text>
							<text transform="matrix(-0.1743 0.9847 -0.9847 -0.1743 1219.3872 144.6461)" class="white__fill futura-book fs__4__px">22.34</text>
							<text transform="matrix(0.1243 0.9922 -0.9922 0.1243 1196.0842 137.8321)" class="mustard__fill futura-med fs__4__px">28</text>
							<text transform="matrix(0.1243 0.9922 -0.9922 0.1243 1190.4774 131.6815)" class="white__fill futura-book fs__4__px">625.37m2</text>
							<g>
								<polygon class="mustard__dl__fill" points="1186.3,116.1 1182.5,112.4 1186.3,108.6 1186.3,108.6"/>
								<polygon class="mustard__dr__fill" points="1186.3,116.1 1186.3,108.6 1190.1,112.4"/>
							</g>
						</g>
						<g>
							<polygon class="pb-sprite-2" points="1130.5,98.2 1165,93.8 1176.6,186.9 1142.1,191.2"/>
							<text transform="matrix(0.9905 -0.1376 0.1376 0.9905 1142.1276 101.6073)" class="white__fill futura-book fs__4__px">13.03</text>
							<text transform="matrix(0.9905 -0.1376 0.1376 0.9905 1152.3314 187.5857)" class="white__fill futura-book fs__4__px">13.03</text>
							<text transform="matrix(0.1577 0.9875 -0.9875 0.1577 1166.1575 138.7257)" class="white__fill futura-book fs__4__px">35.00</text>
							<text transform="matrix(0.1243 0.9922 -0.9922 0.1243 1153.2583 142.1874)" class="mustard__fill futura-med fs__4__px">27</text>
							<text transform="matrix(0.1243 0.9922 -0.9922 0.1243 1147.6515 136.0369)" class="white__fill futura-book fs__4__px">456.05m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-1" points="1095.9,102.5 1130.5,98.2 1142.1,191.2 1107.6,195.5"/>
							<text transform="matrix(0.9905 -0.1376 0.1376 0.9905 1107.793 105.9569)" class="white__fill futura-book fs__4__px">13.03</text>
							<text transform="matrix(0.9905 -0.1376 0.1376 0.9905 1120.4927 191.9019)" class="white__fill futura-book fs__4__px">13.03</text>
							<text transform="matrix(0.1577 0.9875 -0.9875 0.1577 1131.3762 141.97)" class="white__fill futura-book fs__4__px">35.00</text>
							<text transform="matrix(0.1243 0.9922 -0.9922 0.1243 1121.9274 144.9993)" class="mustard__fill futura-med fs__4__px">26</text>
							<text transform="matrix(0.1243 0.9922 -0.9922 0.1243 1116.3206 138.8488)" class="white__fill futura-book fs__4__px">456.05m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-2" points="1061.4,106.9 1095.9,102.5 1107.6,195.5 1073,199.8"/>
							<text transform="matrix(0.9905 -0.1376 0.1376 0.9905 1073.7574 109.8015)" class="white__fill futura-book fs__4__px">13.03</text>
							<text transform="matrix(0.9905 -0.1376 0.1376 0.9905 1084.5167 196.725)" class="white__fill futura-book fs__4__px">13.03</text>
							<text transform="matrix(0.1577 0.9875 -0.9875 0.1577 1096.593 145.4422)" class="white__fill futura-book fs__4__px">35.00</text>
							<text transform="matrix(0.1243 0.9922 -0.9922 0.1243 1086.0999 148.1512)" class="mustard__fill futura-med fs__4__px">25</text>
							<text transform="matrix(0.1243 0.9922 -0.9922 0.1243 1080.493 142.0006)" class="white__fill futura-book fs__4__px">456.05m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-1" points="1026.8,111.2 1061.4,106.9 1073,199.8 1038.5,204.2"/>
							<text transform="matrix(0.9905 -0.1376 0.1376 0.9905 1039.572 113.8335)" class="white__fill futura-book fs__4__px">13.03</text>
							<text transform="matrix(0.9905 -0.1376 0.1376 0.9905 1050.7679 200.4973)" class="white__fill futura-book fs__4__px">13.03</text>
							<text transform="matrix(0.1577 0.9875 -0.9875 0.1577 1033.4446 149.7653)" class="white__fill futura-book fs__4__px">35.00</text>
							<text transform="matrix(0.1577 0.9875 -0.9875 0.1577 1062.1067 146.6042)" class="white__fill futura-book fs__4__px">35.00</text>
							<text transform="matrix(0.1243 0.9922 -0.9922 0.1243 1051.317 152.2882)" class="mustard__fill futura-med fs__4__px">24</text>
							<text transform="matrix(0.1243 0.9922 -0.9922 0.1243 1045.7102 146.1377)" class="white__fill futura-book fs__4__px">456.05m2</text>
							<g>
								<polygon class="mustard__dl__fill" points="1044.7,125.6 1040.9,121.8 1044.7,118.1 1044.7,118.1"/>
								<polygon class="mustard__dr__fill" points="1044.7,125.6 1044.7,118.1 1048.4,121.8"/>
							</g>
						</g>
					</g>

					<g>
						<g>
							<polygon class="pb-sprite-2" points="907.9,133.4 999.5,114.7 993.1,83.1 901.5,101.9"/>
							<text transform="matrix(0.9795 -0.2012 0.2012 0.9795 947.4036 123.885)" class="white__fill futura-book fs__4__px">35.00</text>
							<text transform="matrix(0.2008 0.9796 -0.9796 0.2008 990.3563 94.1728)" class="white__fill futura-book fs__4__px">12.00</text>
							<text transform="matrix(0.2008 0.9796 -0.9796 0.2008 906.0765 112.3926)" class="white__fill futura-book fs__4__px">12.00</text>
							<text transform="matrix(0.9806 -0.196 0.196 0.9806 946.7609 105.6792)" class="mustard__fill futura-med fs__4__px">23</text>
							<text transform="matrix(0.9806 -0.196 0.196 0.9806 941.0336 111.7189)" class="white__fill futura-book fs__4__px">420.00m2</text>
							<g>
								<polygon class="mustard__dl__fill" points="978.2,105.9 974.4,102.1 978.2,98.4 978.2,98.4"/>
								<polygon class="mustard__dr__fill" points="978.2,105.9 978.2,98.4 981.9,102.1"/>
							</g>
						</g>
						<g>
							<polygon class="pb-sprite-1" points="895.1,70.3 986.7,51.6 993.1,83.1 901.5,101.9"/>
							<text transform="matrix(0.9795 -0.2012 0.2012 0.9795 937.6236 67.1266)" class="white__fill futura-book fs__4__px">35.00</text>
							<text transform="matrix(0.9795 -0.2012 0.2012 0.9795 942.476 90.7127)" class="white__fill futura-book fs__4__px">35.00</text>
							<text transform="matrix(0.2008 0.9796 -0.9796 0.2008 983.1903 63.1677)" class="white__fill futura-book fs__4__px">12.00</text>
							<text transform="matrix(0.2008 0.9796 -0.9796 0.2008 900.5363 80.0784)" class="white__fill futura-book fs__4__px">12.00</text>
							<text transform="matrix(0.9806 -0.196 0.196 0.9806 942.282 76.0418)" class="mustard__fill futura-med fs__4__px">22</text>
							<text transform="matrix(0.9806 -0.196 0.196 0.9806 936.5547 82.0815)" class="white__fill futura-book fs__4__px">420.00m2</text>
							<g>
								<polygon class="mustard__dl__fill" points="972.7,75.5 968.9,71.8 972.7,68 972.7,68"/>
								<polygon class="mustard__dr__fill" points="972.7,75.5 972.7,68 976.4,71.8"/>
							</g>
						</g>
					</g>

					<g>
						<g>
							<polygon class="pb-sprite-2" points="1258.1,110.9 1349.9,128 1343.8,160.8 1252,143.7"/>
							<text transform="matrix(0.9813 0.1925 -0.1925 0.9813 1298.6234 124.9645)" class="white__fill futura-book fs__4__px">35.00</text>
							<text transform="matrix(0.19 -0.9818 0.9818 0.19 1342.8719 150.6257)" class="white__fill futura-book fs__4__px">12.45</text>
							<text transform="matrix(0.19 -0.9818 0.9818 0.19 1258.5638 133.9255)" class="white__fill futura-book fs__4__px">12.45</text>
							<text transform="matrix(0.988 0.1545 -0.1545 0.988 1297.6929 136.491)" class="mustard__fill futura-med fs__4__px">21</text>
							<text transform="matrix(0.988 0.1545 -0.1545 0.988 1290.2329 140.1829)" class="white__fill futura-book fs__4__px">435.75m2</text>
							<g>
								<polygon class="mustard__dl__fill" points="1275.5,135.4 1271.8,131.7 1275.5,127.9 1275.5,127.9"/>
								<polygon class="mustard__dr__fill" points="1275.5,135.4 1275.5,127.9 1279.3,131.7"/>
							</g>
						</g>
						<g>
							<polygon class="pb-sprite-1" points="1252,143.7 1343.8,160.8 1337.7,193.6 1245.9,176.5"/>
							<text transform="matrix(0.9813 0.1925 -0.1925 0.9813 1293.0284 156.3448)" class="white__fill futura-book fs__4__px">35.00</text>
							<text transform="matrix(0.19 -0.9818 0.9818 0.19 1337.2751 182.0046)" class="white__fill futura-book fs__4__px">12.45</text>
							<text transform="matrix(0.19 -0.9818 0.9818 0.19 1252.9708 165.3054)" class="white__fill futura-book fs__4__px">12.45</text>
							<text transform="matrix(0.988 0.1545 -0.1545 0.988 1292.0994 167.8716)" class="mustard__fill futura-med fs__4__px">20</text>
							<text transform="matrix(0.988 0.1545 -0.1545 0.988 1284.6394 171.5635)" class="white__fill futura-book fs__4__px">435.75m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-2" points="1245.9,176.5 1337.7,193.6 1331.6,226.4 1239.8,209.3"/>
							<text transform="matrix(0.9813 0.1925 -0.1925 0.9813 1285.9738 188.8866)" class="white__fill futura-book fs__4__px">35.00</text>
							<text transform="matrix(0.19 -0.9818 0.9818 0.19 1330.2218 214.5476)" class="white__fill futura-book fs__4__px">12.45</text>
							<text transform="matrix(0.19 -0.9818 0.9818 0.19 1245.9156 197.8474)" class="white__fill futura-book fs__4__px">12.45</text>
							<text transform="matrix(0.988 0.1545 -0.1545 0.988 1285.0454 200.4131)" class="mustard__fill futura-med fs__4__px">19</text>
							<text transform="matrix(0.988 0.1545 -0.1545 0.988 1277.5852 204.105)" class="white__fill futura-book fs__4__px">435.75m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-1" points="1239.8,209.3 1331.6,226.4 1325.5,259.2 1233.7,242.1"/>
							<text transform="matrix(0.9813 0.1925 -0.1925 0.9813 1280.3549 221.952)" class="white__fill futura-book fs__4__px">35.00</text>
							<text transform="matrix(0.19 -0.9818 0.9818 0.19 1324.6031 247.612)" class="white__fill futura-book fs__4__px">12.45</text>
							<text transform="matrix(0.19 -0.9818 0.9818 0.19 1240.296 230.9128)" class="white__fill futura-book fs__4__px">12.45</text>
							<text transform="matrix(0.988 0.1545 -0.1545 0.988 1279.4265 233.4788)" class="mustard__fill futura-med fs__4__px">18</text>
							<text transform="matrix(0.988 0.1545 -0.1545 0.988 1271.9663 237.1705)" class="white__fill futura-book fs__4__px">435.75m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-2" points="1233.7,242.1 1325.5,259.2 1319.5,292.1 1227.6,274.9"/>
							<text transform="matrix(0.9813 0.1925 -0.1925 0.9813 1274.286 254.9005)" class="white__fill futura-book fs__4__px">35.00</text>
							<text transform="matrix(0.19 -0.9818 0.9818 0.19 1318.5336 280.5613)" class="white__fill futura-book fs__4__px">12.45</text>
							<text transform="matrix(0.19 -0.9818 0.9818 0.19 1234.2275 263.8601)" class="white__fill futura-book fs__4__px">12.45</text>
							<text transform="matrix(0.988 0.1545 -0.1545 0.988 1273.3574 266.4268)" class="mustard__fill futura-med fs__4__px">17</text>
							<text transform="matrix(0.988 0.1545 -0.1545 0.988 1265.8975 270.1187)" class="white__fill futura-book fs__4__px">435.75m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-1" points="1227.6,274.9 1319.5,292.1 1313.4,324.8 1221.5,307.7"/>
							<text transform="matrix(0.9813 0.1925 -0.1925 0.9813 1268.1962 288.429)" class="white__fill futura-book fs__4__px">35.00</text>
							<text transform="matrix(0.19 -0.9818 0.9818 0.19 1312.4453 314.0896)" class="white__fill futura-book fs__4__px">12.45</text>
							<text transform="matrix(0.19 -0.9818 0.9818 0.19 1228.139 297.3904)" class="white__fill futura-book fs__4__px">12.45</text>
							<text transform="matrix(0.988 0.1545 -0.1545 0.988 1267.2678 299.9566)" class="mustard__fill futura-med fs__4__px">16</text>
							<text transform="matrix(0.988 0.1545 -0.1545 0.988 1259.8076 303.6483)" class="white__fill futura-book fs__4__px">435.75m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-2" points="1221.5,307.7 1313.4,324.8 1307.3,357.7 1215.5,340.5"/>
							<text transform="matrix(0.9813 0.1925 -0.1925 0.9813 1262.1107 322.3756)" class="white__fill futura-book fs__4__px">35.00</text>
							<text transform="matrix(0.19 -0.9818 0.9818 0.19 1306.3589 348.0349)" class="white__fill futura-book fs__4__px">12.45</text>
							<text transform="matrix(0.19 -0.9818 0.9818 0.19 1222.0505 331.3367)" class="white__fill futura-book fs__4__px">12.45</text>
							<text transform="matrix(0.988 0.1545 -0.1545 0.988 1261.1802 333.9009)" class="mustard__fill futura-med fs__4__px">15</text>
							<text transform="matrix(0.988 0.1545 -0.1545 0.988 1253.7202 337.5928)" class="white__fill futura-book fs__4__px">435.75m2</text>
							<g>
								<polygon class="mustard__dl__fill" points="1236.2,333.1 1232.4,329.3 1236.2,325.6 1236.2,325.6"/>
								<polygon class="mustard__dr__fill" points="1236.2,333.1 1236.2,325.6 1240,329.3"/>
							</g>
						</g>
						<g>
							<polygon class="pb-sprite-1" points="1215.5,340.5 1307.3,357.7 1301.2,390.4 1209.4,373.3"/>
							<text transform="matrix(0.9813 0.1925 -0.1925 0.9813 1255.9991 352.849)" class="white__fill futura-book fs__4__px">35.00</text>
							<text transform="matrix(0.19 -0.9818 0.9818 0.19 1300.2479 378.5085)" class="white__fill futura-book fs__4__px">12.45</text>
							<text transform="matrix(0.19 -0.9818 0.9818 0.19 1215.9396 361.8103)" class="white__fill futura-book fs__4__px">12.45</text>
							<text transform="matrix(0.988 0.1545 -0.1545 0.988 1255.071 364.3763)" class="mustard__fill futura-med fs__4__px">14</text>
							<text transform="matrix(0.988 0.1545 -0.1545 0.988 1247.6111 368.0682)" class="white__fill futura-book fs__4__px">435.75m2</text>
							<g>
								<polygon class="mustard__dl__fill" points="1231.4,364.3 1227.6,360.5 1231.4,356.8 1231.4,356.8"/>
								<polygon class="mustard__dr__fill" points="1231.4,364.3 1231.4,356.8 1235.2,360.5"/>
							</g>
						</g>
						<g>
							<polygon class="pb-sprite-2" points="1209.4,373.3 1301.2,390.4 1295.1,423.3 1203.3,406.1"/>
							<text transform="matrix(0.9813 0.1925 -0.1925 0.9813 1249.9437 386.0499)" class="white__fill futura-book fs__4__px">35.00</text>
							<text transform="matrix(0.19 -0.9818 0.9818 0.19 1294.1924 411.7087)" class="white__fill futura-book fs__4__px">12.45</text>
							<text transform="matrix(0.19 -0.9818 0.9818 0.19 1209.886 395.0105)" class="white__fill futura-book fs__4__px">12.45</text>
							<text transform="matrix(0.988 0.1545 -0.1545 0.988 1249.0132 397.5757)" class="mustard__fill futura-med fs__4__px">13</text>
							<text transform="matrix(0.988 0.1545 -0.1545 0.988 1241.553 401.2676)" class="white__fill futura-book fs__4__px">435.75m2</text>
							<g>
								<polygon class="mustard__dl__fill" points="1223,396.2 1219.2,392.5 1223,388.7 1223,388.7"/>
								<polygon class="mustard__dr__fill" points="1223,396.2 1223,388.7 1226.7,392.5"/>
							</g>
						</g>
						<g>
							<polygon class="pb-sprite-1" points="1203.3,406.1 1295.1,423.3 1289,456 1197.2,438.9"/>
							<text transform="matrix(0.9813 0.1925 -0.1925 0.9813 1243.8214 418.1046)" class="white__fill futura-book fs__4__px">35.00</text>
							<text transform="matrix(0.19 -0.9818 0.9818 0.19 1288.0707 443.7644)" class="white__fill futura-book fs__4__px">12.45</text>
							<text transform="matrix(0.19 -0.9818 0.9818 0.19 1203.7625 427.0652)" class="white__fill futura-book fs__4__px">12.45</text>
							<text transform="matrix(0.988 0.1545 -0.1545 0.988 1242.8918 429.6319)" class="mustard__fill futura-med fs__4__px">12</text>
							<text transform="matrix(0.988 0.1545 -0.1545 0.988 1235.4319 433.3238)" class="white__fill futura-book fs__4__px">435.75m2</text>
							<g>
								<polygon class="mustard__dl__fill" points="1218.7,430.6 1215,426.8 1218.7,423.1 1218.7,423.1"/>
								<polygon class="mustard__dr__fill" points="1218.7,430.6 1218.7,423.1 1222.5,426.8"/>
							</g>
						</g>
						<g>
							<polygon class="pb-sprite-2" points="1197.2,438.9 1289,456 1283,488.8 1185.6,501.1"/>
							<text transform="matrix(0.9795 -0.2012 0.2012 0.9795 1231.3639 492.8491)" class="white__fill futura-book fs__4__px">36.74</text>
							<text transform="matrix(0.9813 0.1925 -0.1925 0.9813 1237.2147 451.0208)" class="white__fill futura-book fs__4__px">35.00</text>
							<text transform="matrix(0.19 -0.9818 0.9818 0.19 1281.1597 481.7107)" class="white__fill futura-book fs__4__px">12.45</text>
							<text transform="matrix(0.19 -0.9818 0.9818 0.19 1195.3242 473.0994)" class="white__fill futura-book fs__4__px">23.62</text>
							<text transform="matrix(0.988 0.1545 -0.1545 0.988 1234.7195 467.952)" class="mustard__fill futura-med fs__4__px">11</text>
							<text transform="matrix(0.988 0.1545 -0.1545 0.988 1227.2593 471.6439)" class="white__fill futura-book fs__4__px">631.25m2</text>
							<g>
								<polygon class="mustard__dl__fill" points="1211.7,472 1207.9,468.3 1211.7,464.5 1211.7,464.5"/>
								<polygon class="mustard__dr__fill" points="1211.7,472 1211.7,464.5 1215.5,468.3"/>
							</g>
						</g>
					</g>

					<g>
						<g>
							<polygon class="pb-sprite-2" points="1049.3,518.2 959,529.6 950.5,487.9 1039.5,469.7"/>
							<text transform="matrix(0.2008 0.9796 -0.9796 0.2008 1038.4879 488.9233)" class="white__fill futura-book fs__4__px">18.47</text>
							<text transform="matrix(0.2008 0.9796 -0.9796 0.2008 956.3972 503.4806)" class="white__fill futura-book fs__4__px">15.88</text>
							<text transform="matrix(0.9795 -0.2012 0.2012 0.9795 998.2621 522.642)" class="white__fill futura-book fs__4__px">34.10</text>
							<text transform="matrix(0.9806 -0.196 0.196 0.9806 996.3764 499.3869)" class="mustard__fill futura-med fs__4__px">10</text>
							<text transform="matrix(0.9806 -0.196 0.196 0.9806 990.6491 505.4266)" class="white__fill futura-book fs__4__px">584.03m2</text>
							<g>
								<polygon class="mustard__dl__fill" points="1028.7,499.3 1025,495.6 1028.7,491.8 1028.7,491.8"/>
								<polygon class="mustard__dr__fill" points="1028.7,499.3 1028.7,491.8 1032.5,495.6"/>
							</g>
						</g>
						<g>
							<polygon class="pb-sprite-1" points="1033,438.3 1039.5,469.7 950.5,487.9 944.2,456.5"/>
							<text transform="matrix(0.2008 0.9796 -0.9796 0.2008 1030.5419 449.4682)" class="white__fill futura-book fs__4__px">12.00</text>
							<text transform="matrix(0.2008 0.9796 -0.9796 0.2008 948.6359 466.5754)" class="white__fill futura-book fs__4__px">12.00</text>
							<text transform="matrix(0.9795 -0.2012 0.2012 0.9795 989.0056 477.6318)" class="white__fill futura-book fs__4__px">34.00</text>
							<text transform="matrix(0.9806 -0.196 0.196 0.9806 988.4637 460.1265)" class="mustard__fill futura-med fs__4__px">09</text>
							<text transform="matrix(0.9806 -0.196 0.196 0.9806 982.7364 466.1662)" class="white__fill futura-book fs__4__px">408.00m2</text>
							<g>
								<polygon class="mustard__dl__fill" points="1019.1,460.8 1015.3,457 1019.1,453.3 1019.1,453.3"/>
								<polygon class="mustard__dr__fill" points="1019.1,460.8 1019.1,453.3 1022.8,457"/>
							</g>
						</g>
						<g>
							<polygon class="pb-sprite-2" points="944.2,456.5 937.8,424.9 1026.7,406.7 1033,438.3"/>
							<text transform="matrix(0.2008 0.9796 -0.9796 0.2008 1025.3723 418.4955)" class="white__fill futura-book fs__4__px">12.00</text>
							<text transform="matrix(0.2008 0.9796 -0.9796 0.2008 943.4652 435.602)" class="white__fill futura-book fs__4__px">12.00</text>
							<text transform="matrix(0.9795 -0.2012 0.2012 0.9795 983.8369 446.6595)" class="white__fill futura-book fs__4__px">34.00</text>
							<text transform="matrix(0.9806 -0.196 0.196 0.9806 983.2939 429.1523)" class="mustard__fill futura-med fs__4__px">08</text>
							<text transform="matrix(0.9806 -0.196 0.196 0.9806 977.5666 435.192)" class="white__fill futura-book fs__4__px">408.00m2</text>
							<g>
								<polygon class="mustard__dl__fill" points="1013.6,431 1009.8,427.2 1013.6,423.5 1013.6,423.5"/>
								<polygon class="mustard__dr__fill" points="1013.6,431 1013.6,423.5 1017.3,427.2"/>
							</g>
						</g>
						<g>
							<polygon class="pb-sprite-1" points="1020.3,375.2 1026.7,406.7 937.8,424.9 931.3,393.4"/>
							<text transform="matrix(0.2008 0.9796 -0.9796 0.2008 1018.0585 386.7253)" class="white__fill futura-book fs__4__px">12.00</text>
							<text transform="matrix(0.2008 0.9796 -0.9796 0.2008 936.1505 403.8319)" class="white__fill futura-book fs__4__px">12.00</text>
							<text transform="matrix(0.9795 -0.2012 0.2012 0.9795 976.5219 414.8868)" class="white__fill futura-book fs__4__px">34.00</text>
							<text transform="matrix(0.9806 -0.196 0.196 0.9806 975.9798 397.3847)" class="mustard__fill futura-med fs__4__px">07</text>
							<text transform="matrix(0.9806 -0.196 0.196 0.9806 970.2525 403.4244)" class="white__fill futura-book fs__4__px">408.00m2</text>
							<g>
								<polygon class="mustard__dl__fill" points="1005.6,399.6 1001.8,395.8 1005.6,392 1005.6,392"/>
								<polygon class="mustard__dr__fill" points="1005.6,399.6 1005.6,392 1009.4,395.8"/>
							</g>
						</g>
						<g>
							<polygon class="pb-sprite-2" points="924.9,361.9 1013.9,343.7 1020.3,375.2 931.3,393.4"/>
							<text transform="matrix(0.2008 0.9796 -0.9796 0.2008 1012.5707 355.9364)" class="white__fill futura-book fs__4__px">12.00</text>
							<text transform="matrix(0.2008 0.9796 -0.9796 0.2008 930.6636 373.0429)" class="white__fill futura-book fs__4__px">12.00</text>
							<text transform="matrix(0.9795 -0.2012 0.2012 0.9795 971.0343 384.0976)" class="white__fill futura-book fs__4__px">34.00</text>
							<text transform="matrix(0.9806 -0.196 0.196 0.9806 970.4937 366.5943)" class="mustard__fill futura-med fs__4__px">06</text>
							<text transform="matrix(0.9806 -0.196 0.196 0.9806 964.7664 372.634)" class="white__fill futura-book fs__4__px">408.00m2</text>
							<g>
								<polygon class="mustard__dl__fill" points="999.8,367.9 996,364.1 999.8,360.3 999.8,360.3"/>
								<polygon class="mustard__dr__fill" points="999.8,367.9 999.8,360.3 1003.6,364.1"/>
							</g>
						</g>
						<g>
							<polygon class="pb-sprite-1" points="1007.5,312.1 1013.9,343.7 924.9,361.9 918.5,330.4"/>
							<text transform="matrix(0.2008 0.9796 -0.9796 0.2008 1004.6109 323.3535)" class="white__fill futura-book fs__4__px">12.00</text>
							<text transform="matrix(0.2008 0.9796 -0.9796 0.2008 922.7059 340.4606)" class="white__fill futura-book fs__4__px">12.00</text>
							<text transform="matrix(0.9795 -0.2012 0.2012 0.9795 963.0739 351.5174)" class="white__fill futura-book fs__4__px">34.00</text>
							<text transform="matrix(0.9806 -0.196 0.196 0.9806 962.5324 334.0099)" class="mustard__fill futura-med fs__4__px">05</text>
							<text transform="matrix(0.9806 -0.196 0.196 0.9806 956.8051 340.0496)" class="white__fill futura-book fs__4__px">408.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-2" points="912.1,298.9 1001.1,280.7 1007.5,312.1 918.5,330.4"/>
							<text transform="matrix(0.2008 0.9796 -0.9796 0.2008 998.82 291.9659)" class="white__fill futura-book fs__4__px">12.00</text>
							<text transform="matrix(0.2008 0.9796 -0.9796 0.2008 916.9114 309.0747)" class="white__fill futura-book fs__4__px">12.00</text>
							<text transform="matrix(0.9795 -0.2012 0.2012 0.9795 957.2836 320.1303)" class="white__fill futura-book fs__4__px">34.00</text>
							<text transform="matrix(0.9806 -0.196 0.196 0.9806 956.7415 302.6261)" class="mustard__fill futura-med fs__4__px">04</text>
							<text transform="matrix(0.9806 -0.196 0.196 0.9806 951.0142 308.6658)" class="white__fill futura-book fs__4__px">408.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-1" points="994.7,249.2 1001.1,280.7 912.1,298.9 905.7,267.3"/>
							<text transform="matrix(0.2008 0.9796 -0.9796 0.2008 992.1439 259.9902)" class="white__fill futura-book fs__4__px">12.00</text>
							<text transform="matrix(0.2008 0.9796 -0.9796 0.2008 910.2366 277.0957)" class="white__fill futura-book fs__4__px">12.00</text>
							<text transform="matrix(0.9795 -0.2012 0.2012 0.9795 950.6067 288.1518)" class="white__fill futura-book fs__4__px">34.00</text>
							<text transform="matrix(0.9806 -0.196 0.196 0.9806 950.0654 270.6473)" class="mustard__fill futura-med fs__4__px">03</text>
							<text transform="matrix(0.9806 -0.196 0.196 0.9806 944.3381 276.687)" class="white__fill futura-book fs__4__px">408.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-2" points="899.4,235.8 988.3,217.7 994.7,249.2 905.7,267.3"/>
							<text transform="matrix(0.2008 0.9796 -0.9796 0.2008 986.3251 228.685)" class="white__fill futura-book fs__4__px">12.00</text>
							<text transform="matrix(0.2008 0.9796 -0.9796 0.2008 904.4187 245.7903)" class="white__fill futura-book fs__4__px">12.00</text>
							<text transform="matrix(0.9795 -0.2012 0.2012 0.9795 944.7895 256.8471)" class="white__fill futura-book fs__4__px">34.00</text>
							<text transform="matrix(0.9806 -0.196 0.196 0.9806 944.2473 239.3416)" class="mustard__fill futura-med fs__4__px">02</text>
							<text transform="matrix(0.9806 -0.196 0.196 0.9806 938.52 245.3813)" class="white__fill futura-book fs__4__px">408.00m2</text>
						</g>
						<g>
							<polygon class="pb-sprite-1" points="981.8,186.2 988.3,217.7 899.4,235.8 892.9,204.4"/>
							<text transform="matrix(0.2008 0.9796 -0.9796 0.2008 979.8307 198.4176)" class="white__fill futura-book fs__4__px">12.00</text>
							<text transform="matrix(0.2008 0.9796 -0.9796 0.2008 898.6859 215.3378)" class="white__fill futura-book fs__4__px">12.00</text>
							<text transform="matrix(0.9795 -0.2012 0.2012 0.9795 934.713 200.7348)" class="white__fill futura-book fs__4__px">34.00</text>
							<text transform="matrix(0.9795 -0.2012 0.2012 0.9795 938.9977 225.4793)" class="white__fill futura-book fs__4__px">34.00</text>
							<text transform="matrix(0.9806 -0.196 0.196 0.9806 938.1793 208.298)" class="mustard__fill futura-med fs__4__px">01</text>
							<text transform="matrix(0.9806 -0.196 0.196 0.9806 932.452 214.3377)" class="white__fill futura-book fs__4__px">408.00m2</text>
							<g>
								<polygon class="mustard__dl__fill" points="969.4,210.8 965.6,207 969.4,203.3 969.4,203.3"/>
								<polygon class="mustard__dr__fill" points="969.4,210.8 969.4,203.3 973.2,207"/>
							</g>
						</g>
					</g>
				</g>

				<g>
					<line class="white__stroke no__fill" x1="899.4" y1="235.8" x2="988.3" y2="217.7"/>
					<line class="white__stroke no__fill" x1="994.7" y1="249.2" x2="905.7" y2="267.3"/>
					<line class="white__stroke no__fill" x1="912.1" y1="298.9" x2="1001.1" y2="280.7"/>
					<line class="white__stroke no__fill" x1="1007.5" y1="312.1" x2="918.5" y2="330.4"/>
					<line class="white__stroke no__fill" x1="924.9" y1="361.9" x2="1013.9" y2="343.7"/>
					<line class="white__stroke no__fill" x1="931.3" y1="393.4" x2="1020.3" y2="375.2"/>
					<line class="white__stroke no__fill" x1="1026.7" y1="406.7" x2="937.8" y2="424.9"/>
					<line class="white__stroke no__fill" x1="944.2" y1="456.5" x2="1033" y2="438.3"/>
					<line class="white__stroke no__fill" x1="1039.5" y1="469.7" x2="950.5" y2="487.9"/>
					<line class="white__stroke no__fill" x1="895.1" y1="70.3" x2="986.7" y2="51.6"/>
					<line class="white__stroke no__fill" x1="993.1" y1="83.1" x2="901.5" y2="101.9"/>
					<line class="white__stroke no__fill" x1="1061.4" y1="106.9" x2="1073" y2="199.8"/>
					<line class="white__stroke no__fill" x1="1074.8" y1="296.8" x2="1062.8" y2="201.1"/>
					<line class="white__stroke no__fill" x1="1116" y1="291.7" x2="1104" y2="196"/>
					<line class="white__stroke no__fill" x1="1107.6" y1="195.5" x2="1095.9" y2="102.5"/>
					<line class="white__stroke no__fill" x1="1130.5" y1="98.2" x2="1142.1" y2="191.2"/>
					<line class="white__stroke no__fill" x1="1145.2" y1="190.8" x2="1157.2" y2="286.5"/>
					<line class="white__stroke no__fill" x1="1176.6" y1="186.9" x2="1165" y2="93.8"/>
					<line class="white__stroke no__fill" x1="1038.5" y1="204.2" x2="1032.5" y2="156.5"/>
					<line class="white__stroke no__fill" x1="1014.3" y1="207.3" x2="1216.9" y2="181.8"/>
					<line class="white__stroke no__fill" x1="1252" y1="143.7" x2="1343.8" y2="160.8"/>
					<line class="white__stroke no__fill" x1="1349.9" y1="128" x2="1258.1" y2="110.9"/>
					<line class="white__stroke no__fill" x1="1245.9" y1="176.5" x2="1337.7" y2="193.6"/>
					<line class="white__stroke no__fill" x1="1331.6" y1="226.4" x2="1239.8" y2="209.3"/>
					<line class="white__stroke no__fill" x1="1233.7" y1="242.1" x2="1325.5" y2="259.2"/>
					<line class="white__stroke no__fill" x1="1319.5" y1="292.1" x2="1227.6" y2="274.9"/>
					<line class="white__stroke no__fill" x1="1221.5" y1="307.7" x2="1313.4" y2="324.8"/>
					<line class="white__stroke no__fill" x1="1307.3" y1="357.7" x2="1215.5" y2="340.5"/>
					<line class="white__stroke no__fill" x1="1209.4" y1="373.3" x2="1301.2" y2="390.4"/>
					<line class="white__stroke no__fill" x1="1295.1" y1="423.3" x2="1203.3" y2="406.1"/>
					<line class="white__stroke no__fill" x1="1197.2" y1="438.9" x2="1289" y2="456"/>
					<line class="white__stroke no__fill" x1="981.8" y1="186.2" x2="892.9" y2="204.4"/>
				</g>
			</g>

			<g>
				<a href="#!/Portto_Blanco-Taiga_1-Inventario" class="pb__condo">
					<path class="pb__condo-bg" d="M418.3,569.3c-4-0.7-8.7-1.2-14-1.1c-2.1,0.1-4,0.2-5.9,0.4c-2,0.2-5.5,0.4-9.6-0.9
						c-3.8-1.2-6.5-3.1-8-4.4c-45.8-49.7-98-101.9-156.9-154.8C157.8,349.2,93.4,298.1,33,254.5c-0.2-0.1-3.7-2.4-3.5-6.7
						c0.2-4.2,3.7-6.2,3.9-6.3c59.3-30.1,127-60.7,203-88.8c85-31.4,164.4-53.9,235.3-70.1c69,184.3,138,368.6,207.1,553l-91.1,34.3
						l-76.9,24.7c-13.1-30.9-26.2-61.7-39.3-92.6L418.3,569.3z"/>
					<g>
						<rect x="223.8" y="297.8" class="blue__fill" width="200.4" height="50.7"/>
						<text transform="matrix(1 0 0 1 238.3238 335.6824)" class="fs__30__px white__fill futura-med">MANGLAR 1</text>
					</g>
				</a>
				<a href="#!/Portto_Blanco-Taiga_2-Inventario" class="pb__condo">
					<path class="pb__condo-bg" d="M857.4,29.9l-28,6c-54.8,1.9-114.7,6.3-178.8,14.6c-65,8.4-124.9,19.6-179,32
						c69,184.3,138,368.6,207.1,553L958.8,530l-66.2-326l-13.8-70.5L857.4,29.9z"/>
					<g>
						<rect x="633.2" y="253.2" class="blue__fill" width="200.4" height="50.7"/>
						<text transform="matrix(1 0 0 1 647.7281 291.0081)" class="fs__30__px white__fill futura-med">MANGLAR 2</text>
					</g>
				</a>
				<a href="#!/Portto_Blanco-Taiga_3-Inventario" class="pb__condo">
					<path class="pb__condo-bg" d="M878.8,133.5L857.4,29.9l30,5c50.1-0.2,104.5,1.5,162.4,6.3
						c55.8,4.6,107.9,11.3,155.8,19.2c2.1,0.4,6,1.3,10,4.3c3.3,2.5,5.2,5.3,6.2,7.1c2.7,6.1,8.7,17.8,21.3,27.8
						c15.3,12.1,31.2,14.5,37.8,15.2c23.1,4.3,46.2,8.7,69.4,13l-67.1,361.5l-324.4,40.8L892.6,204L878.8,133.5z"/>
					<g>
						<rect x="1001.5" y="232.7" class="blue__fill" width="200.4" height="50.7"/>
						<text transform="matrix(1 0 0 1 1016.0533 270.5721)" class="fs__30__px white__fill futura-med">MANGLAR 3</text>
					</g>
				</a>
			</g>

		</svg>

	</div>

</body>
</html>