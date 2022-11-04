<!DOCTYPE html>
<html lang="es_MX">
<head>
	<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" contet="ie=edge">
	<meta name="author" content="Ing. Saúl Fernando Torres Hernández">
	<meta name="description" content="Grúpo CCIMA S.A. de C.V." />
	<meta name="keywords" content="grupo ccima, navetec, constructora, servicio de construccion, desarrolladora, llave en mano, built to suit, renta de maquinaria, renta de gruas, maquinaria pesada para construccion, naves industriales, renta naves industriales, venta naves industriales, parques industriales, terrenos, terrenos industriales, terrenos habitacionales, bienes raices, inmobiliaria" />

	<title>Páramo - Portto Blanco</title>

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
					<h1 class="center-align">PÁRAMO</h1>
				</div>
			</div>
		</div>

		<svg version="1.1" class="quote__map" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
			viewBox="0 0 1366 1771" style="enable-background:new 0 0 1366 1771;" xml:space="preserve">

			<style type="text/css">
				.st0{fill:#B17F4A;}
				.st1{fill:#3A5F8D;}
				.st2{fill:#5C6C7F;}
				.st3{fill:#2E2B50;}
				.st4{fill:#2D2A4C;}
				.futura-book{font-family:'CenturyGothic-Bold';}
				.st6{font-size:3.52px;}
				.st7{font-size:3.4407px;}
				.st8{fill:none;stroke:#FFFFFF;stroke-width:0.15;stroke-miterlimit:10;}
				.st9{font-size:3.4271px;}
				.st10{fill:#FFFFFF;}
				.st11{font-family:'CenturyGothic';}
				.st12{font-size:4.7438px;}
				.st13{font-size:4.7602px;}
				.st14{fill:#FFCC00;}
				.st15{font-size:4.7621px;}
				.st16{font-size:4.7459px;}
				.st17{fill:#E2A63C;}
				.st18{opacity:0.6;fill:#E2A63C;enable-background:new;}
				.st19{font-size:4.7516px;}
				.st20{font-size:4.7638px;}
				.st21{font-size:4.7686px;}
				.st22{font-size:4.7551px;}
				.st23{font-size:4.7402px;}
				.st24{font-size:4.761px;}
				.st25{font-size:4.76px;}
				.st26{font-size:4.7409px;}
				.st27{font-size:4.7636px;}
				.st28{font-size:4.7469px;}
				.st29{font-size:4.7364px;}
				.st30{font-size:4.7592px;}
				.st31{font-size:4.74px;}
				.st32{font-size:4.7499px;}
				.st33{font-size:4.7509px;}
				.st34{font-size:4.77px;}
				.st35{font-size:4.7608px;}
				.st36{font-size:4.7529px;}
				.st37{font-size:4.7279px;}
				.st38{font-size:4.7688px;}
				.st39{font-size:4.7507px;}
				.st40{font-size:4.7421px;}
				.st41{font-size:4.7659px;}
				.st42{font-size:4.7196px;}
				.st43{font-size:4.7336px;}
				.st44{font-size:4.7316px;}
				.st45{font-size:4.7809px;}
				.st46{font-size:4.7726px;}
				.st47{font-size:4.7153px;}
				.st48{font-size:4.7716px;}
				.st49{fill:none;stroke:#FFFFFF;stroke-width:0.5;stroke-miterlimit:10;}
				.stx{fill:none;stroke:#1D1D1B;stroke-miterlimit:10;}
				.stx1{fill:none;stroke:#1D1D1B;stroke-width:2;stroke-miterlimit:10;}
				.stx2{font-size:14.5925px;}
				.stx3{font-size:14.51px;}
				.stx4{fill:#5170A2;}
				.stx5{font-family:'MyriadPro-Regular';}
				.stx6{font-size:73.0523px;}
			</style>

			<g>
				<g>
					
					<image style="overflow:visible;enable-background:new;" width="1366" height="1771" xlink:href="media/assets/img/habitta/portto-blanco/app/devs/paramo/paramo.jpg" transform="matrix(1 0 0 1 0 1.201479e-05)"></image>

					<polygon class="st0" points="761.5,1502.2 720.7,1447.7 969.7,1264.2 1009.9,1319.3"/>
					<polygon class="st0" points="292.8,1656.4 496.1,1661.3 509.7,1660.4 525.9,1657.9 541.5,1653.4 553.5,1649.4 568.2,1643 
						581.4,1635 594.5,1625.9 701.1,1546.9 660.3,1491.8 546.3,1576.1 530.9,1584.8 515.2,1590 498.2,1592.6 292.8,1588.1"/>
					<polygon class="st1" points="202.9,1593.7 167.4,1592.9 166.4,1653.4 202.9,1654.1"/>
					<polygon class="st2" points="140.6,1592.6 138.9,1652.7 166.4,1653.4 167.4,1592.9"/>
					<polygon class="st1" points="113.1,1591.8 111.5,1651.8 138.9,1652.7 140.6,1592.6"/>
					<polygon class="st2" points="85.6,1591 84.4,1651.5 111.5,1651.8 113.1,1591.8"/>
					<polygon class="st1" points="58.5,1590.6 56.9,1650.7 84.4,1651.5 85.6,1591"/>
					<polygon class="st2" points="29.5,1649.9 56.9,1650.7 58.5,1590.6 31.1,1589.8"/>
					<polygon class="st1" points="2.5,1557.1 57,1558.7 56.9,1530 2.5,1530"/>
					<polygon class="st2" points="57,1502.6 2.4,1502.6 2.5,1530 56.9,1530"/>
					<polygon class="st1" points="2.4,1475.2 56.9,1475.2 57,1502.6 2.4,1502.6"/>
					<polygon class="st2" points="2.5,1448.2 56.9,1448.2 56.9,1475.2 2.4,1475.2"/>
					<polygon class="st1" points="2.4,1420.7 56.9,1420.6 56.9,1448.2 2.5,1448.2"/>
					<polygon class="st2" points="2.5,1393.2 56.8,1393.2 56.9,1420.6 2.4,1420.7"/>
					<polygon class="st1" points="2.5,1366.2 57,1366 56.8,1393.2 2.5,1393.2"/>
					<polygon class="st2" points="2.4,1338.6 56.9,1338.7 57,1366 2.5,1366.2"/>
					<polygon class="st1" points="2.4,1311.2 56.9,1311.2 56.9,1338.7 2.4,1338.6"/>
					<polygon class="st2" points="2.4,1284.1 56.9,1284.1 56.9,1311.2 2.4,1311.2"/>
					<polygon class="st1" points="2.4,1256.7 56.9,1256.7 56.9,1284.1 2.4,1284.1"/>
					<polygon class="st2" points="2.4,1229.2 56.9,1229.2 56.9,1256.7 2.4,1256.7"/>
					<polygon class="st1" points="2.4,1202.2 56.9,1202.2 56.9,1229.2 2.4,1229.2"/>
					<polygon class="st2" points="2.5,1174.7 56.9,1174.7 56.9,1202.2 2.4,1202.2"/>
					<polygon class="st1" points="2.4,1147.2 57,1147.2 56.9,1174.7 2.5,1174.7"/>
					<path class="st2" d="M2.5,1120.2l54.4-0.1c0,0,0.8,27.2,0,27.1s-54.6,0-54.6,0L2.5,1120.2z"/>
					<polygon class="st1" points="2.4,1092.7 56.9,1092.8 57,1120.1 2.5,1120.2"/>
					<polygon class="st2" points="2.5,1055.7 56.9,1055.4 56.9,1092.8 2.4,1092.7"/>
					<polygon class="st1" points="88.8,1123.8 119.5,1123.3 119.3,1055.3 88.8,1055.3"/>
					<polygon class="st2" points="146.9,1054.9 146.9,1123.3 119.5,1123.3 119.3,1055.3"/>
					<polygon class="st1" points="173.9,1054.9 173.8,1123.4 146.9,1123.3 146.9,1054.9"/>
					<polygon class="st2" points="201.4,1054.8 201.3,1122.8 173.8,1123.4 173.9,1054.9"/>
					<polygon class="st1" points="228.8,1054.6 228.9,1123 201.3,1122.8 201.4,1054.8"/>
					<polygon class="st2" points="255.9,1054.6 255.9,1122.8 228.9,1123 228.8,1054.6"/>
					<polygon class="st1" points="283.3,1054.5 283.4,1123 255.9,1122.8 255.9,1054.6"/>
					<polygon class="st2" points="310.8,1054.5 310.8,1122.6 283.4,1123 283.3,1054.5"/>
					<polygon class="st1" points="337.9,1054.1 337.9,1122.6 310.8,1122.6 310.8,1054.5"/>
					<polygon class="st2" points="365.4,1054.1 365.3,1122.6 337.9,1122.6 337.9,1054.1"/>
					<polygon class="st1" points="392.8,1054.2 392.8,1122.1 365.3,1122.6 365.4,1054.1"/>
					<polygon class="st2" points="419.8,1054.2 419.8,1122.1 392.8,1122.1 392.8,1054.2"/>
					<polygon class="st1" points="451.6,1074.4 520.2,1074.4 520.2,1101.9 451.6,1101.9"/>
					<polygon class="st2" points="451.7,1129.4 520.3,1129.3 520.2,1101.9 451.6,1101.9"/>
					<polygon class="st1" points="451.7,1156.4 520.3,1156.4 520.3,1129.3 451.7,1129.4"/>
					<polygon class="st2" points="451.7,1183.9 520.3,1183.9 520.3,1156.4 451.7,1156.4"/>
					<polygon class="st1" points="451.7,1211.4 520.2,1211.3 520.3,1183.9 451.7,1183.9"/>
					<polygon class="st2" points="451.7,1238.4 520.3,1238.4 520.2,1211.3 451.7,1211.4"/>
					<polygon class="st1" points="451.6,1265.8 520.3,1265.8 520.3,1238.4 451.7,1238.4"/>
					<polygon class="st2" points="451.7,1293.2 520.2,1293.3 520.3,1265.8 451.6,1265.8"/>
					<polygon class="st1" points="451.7,1320.4 520.3,1320.3 520.2,1293.3 451.7,1293.2"/>
					<polygon class="st2" points="451.7,1347.8 520.4,1347.8 520.3,1320.3 451.7,1320.4"/>
					<polygon class="st1" points="451.7,1375.3 520.3,1375.3 520.4,1347.8 451.7,1347.8"/>
					<polygon class="st2" points="451.6,1402.3 520.3,1402.3 520.3,1375.3 451.7,1375.3"/>
					<polygon class="st1" points="451.7,1429.7 520.1,1429.8 520.3,1402.3 451.6,1402.3"/>
					<polygon class="st2" points="451.7,1457.3 520.3,1457.3 520.1,1429.8 451.7,1429.7"/>
					<polygon class="st1" points="451.6,1491.4 520.3,1493.1 520.3,1457.3 451.7,1457.3"/>
					<polygon class="st1" points="274.3,1519 274.3,1587 301.6,1588.1 303.3,1519.3"/>
					<polygon class="st2" points="330.3,1520.1 328.8,1588.8 301.6,1588.1 303.3,1519.3"/>
					<polygon class="st1" points="357.7,1520.9 356.1,1589.3 328.8,1588.8 330.3,1520.1"/>
					<polygon class="st2" points="385.3,1521.3 383.6,1590 356.1,1589.3 357.7,1520.9"/>
					<polygon class="st1" points="412.3,1522.1 410.7,1590.9 383.6,1590 385.3,1521.3"/>
					<polygon class="st2" points="439.8,1523 438.1,1591.5 410.7,1590.9 412.3,1522.1"/>
					<polygon class="st1" points="467.3,1523.3 465.1,1592.2 438.1,1591.5 439.8,1523"/>
					<polygon class="st2" points="499.9,1524 498.2,1592.6 465.1,1592.2 467.3,1523.3"/>
					<polygon class="st1" points="88.8,1532.1 143.3,1532.1 143.3,1560.7 88.8,1559.5"/>
					<polygon class="st2" points="88.8,1504.6 143.3,1504.6 143.3,1532.1 88.8,1532.1"/>
					<polygon class="st1" points="88.8,1477.5 143.3,1477.6 143.3,1504.6 88.8,1504.6"/>
					<polygon class="st2" points="88.9,1450.1 143.3,1450.1 143.3,1477.6 88.8,1477.5"/>
					<polygon class="st1" points="88.8,1422.5 143.2,1422.7 143.3,1450.1 88.9,1450.1"/>
					<polygon class="st2" points="88.8,1393.2 143.3,1393.2 143.2,1422.7 88.8,1422.5"/>
					<polygon class="st1" points="88.8,1362.5 143.3,1362.6 143.3,1393.2 88.8,1393.2"/>
					<polygon class="st2" points="88.7,1331.9 143.3,1331.9 143.3,1362.6 88.8,1362.5"/>
					<polygon class="st1" points="88.8,1301.6 143.3,1301.3 143.3,1331.9 88.7,1331.9"/>
					<polygon class="st2" points="203.1,1301.2 203,1331.9 143.3,1331.9 143.3,1301.3"/>
					<polygon class="st1" points="203,1362.5 143.3,1362.6 143.3,1331.9 203,1331.9"/>
					<polygon class="st2" points="203,1393.2 143.3,1393.2 143.3,1362.6 203,1362.5"/>
					<polygon class="st1" points="202.9,1422.6 143.2,1422.7 143.3,1393.2 203,1393.2"/>
					<polygon class="st2" points="203,1450.1 143.3,1450.1 143.2,1422.7 202.9,1422.6"/>
					<polygon class="st1" points="203,1477.5 143.3,1477.6 143.3,1450.1 203,1450.1"/>
					<polygon class="st2" points="203,1504.7 143.3,1504.6 143.3,1477.6 203,1477.5"/>
					<polygon class="st1" points="203,1532 143.3,1532.1 143.3,1504.6 203,1504.7"/>
					<path class="st2" d="M203,1562.4l-59.7-1.7l-0.1-28.6c0,0,59.3-0.5,59.7,0S203,1562.4,203,1562.4z"/>
					<polygon class="st2" points="234.8,1426.2 263.5,1427.1 262.3,1486.8 234.8,1485.9"/>
					<polygon class="st1" points="294.5,1427.8 292.9,1487.5 262.3,1486.8 263.5,1427.1"/>
					<polygon class="st2" points="325.2,1428.6 323.5,1488.3 292.9,1487.5 294.5,1427.8"/>
					<polygon class="st1" points="355.8,1429.1 354.5,1489.1 323.5,1488.3 325.2,1428.6"/>
					<polygon class="st2" points="390,1430.4 388.5,1490 354.5,1489.1 355.8,1429.1"/>
					<polygon class="st1" points="419.8,1430.6 419.8,1490.8 388.5,1490 390,1430.4"/>
					<polygon class="st1" points="88.9,1215.3 116.2,1214.9 116.3,1269.7 88.9,1269.7"/>
					<polygon class="st2" points="143.3,1214.9 143.3,1269.5 116.3,1269.7 116.2,1214.9"/>
					<polygon class="st1" points="170.7,1215 170.8,1269.4 143.3,1269.5 143.3,1214.9"/>
					<polygon class="st2" points="198.2,1214.8 198.1,1269.3 170.8,1269.4 170.7,1215"/>
					<polygon class="st1" points="225.3,1214.5 225.3,1269.4 198.1,1269.3 198.2,1214.8"/>
					<polygon class="st2" points="252.7,1214.5 252.7,1269 225.3,1269.4 225.3,1214.5"/>
					<polygon class="st1" points="280.2,1214.5 280.2,1269.1 252.7,1269 252.7,1214.5"/>
					<polygon class="st2" points="307.3,1214.1 307.3,1269 280.2,1269.1 280.2,1214.5"/>
					<polygon class="st1" points="334.7,1214.2 334.7,1268.6 307.3,1269 307.3,1214.1"/>
					<polygon class="st2" points="362.1,1214.2 362.2,1268.6 334.7,1268.6 334.7,1214.2"/>
					<polygon class="st1" points="389.3,1214.2 389.3,1268.7 362.2,1268.6 362.1,1214.2"/>
					<polygon class="st2" points="419.9,1213.8 419.8,1268.6 389.3,1268.7 389.3,1214.2"/>
					<polygon class="st1" points="389.2,1154 419.9,1154 419.9,1213.8 389.3,1214.2"/>
					<polygon class="st2" points="362.2,1154.4 389.2,1154 389.3,1214.2 362.1,1214.2"/>
					<polygon class="st1" points="334.7,1154.4 362.2,1154.4 362.1,1214.2 334.7,1214.2"/>
					<polygon class="st2" points="307.2,1154.4 334.7,1154.4 334.7,1214.2 307.3,1214.1"/>
					<polygon class="st1" points="280.2,1154.4 307.2,1154.4 307.3,1214.1 280.2,1214.5"/>
					<polygon class="st2" points="252.8,1154.8 280.2,1154.4 280.2,1214.5 252.7,1214.5"/>
					<polygon class="st1" points="225.3,1154.8 252.8,1154.8 252.7,1214.5 225.3,1214.5"/>
					<polygon class="st2" points="198.1,1154.8 225.3,1154.8 225.3,1214.5 198.2,1214.8"/>
					<polygon class="st1" points="170.8,1155.1 198.1,1154.8 198.2,1214.8 170.7,1215"/>
					<polygon class="st2" points="143.3,1155.2 170.8,1155.1 170.7,1215 143.3,1214.9"/>
					<polygon class="st1" points="116.2,1155.2 143.3,1155.2 143.3,1214.9 116.2,1214.9"/>
					<polygon class="st2" points="88.8,1155.2 116.2,1155.2 116.2,1214.9 88.9,1215.3"/>
					<polygon class="st2" points="520.5,1508.1 575,1508.3 575,1535.3 520.6,1535.3"/>
					<polygon class="st1" points="520.5,1480.7 575,1480.7 575,1508.3 520.5,1508.1"/>
					<polygon class="st2" points="520.5,1453.3 575,1453.3 575,1480.7 520.5,1480.7"/>
					<polygon class="st1" points="520.6,1426.3 575,1426.3 575,1453.3 520.5,1453.3"/>
					<polygon class="st2" points="520.5,1398.8 575,1398.8 575,1426.3 520.6,1426.3"/>
					<polygon class="st1" points="520.4,1371.3 575,1371.3 575,1398.8 520.5,1398.8"/>
					<polygon class="st2" points="520.5,1344.2 575,1344.4 575,1371.3 520.4,1371.3"/>
					<polygon class="st1" points="520.4,1316.8 575,1316.8 575,1344.4 520.5,1344.2"/>
					<path class="st2" d="M520.4,1289.3H575v27.5h-54.6C520.4,1316.8,520.2,1289,520.4,1289.3z"/>
					<polygon class="st1" points="520.5,1261.9 575,1261.9 575,1289.3 520.4,1289.3"/>
					<polygon class="st2" points="520.5,1234.8 575,1234.8 575,1261.9 520.5,1261.9"/>
					<polygon class="st1" points="520.5,1207.4 575,1207.4 575,1234.8 520.5,1234.8"/>
					<polygon class="st2" points="520.5,1179.9 575,1179.9 575,1207.4 520.5,1207.4"/>
					<rect x="520.5" y="1152.7" class="st1" width="54.5" height="27.2"/>
					<rect x="520.5" y="1125.3" class="st2" width="54.5" height="27.3"/>
					<polygon class="st1" points="520.2,1074.4 530.6,1079.7 544.4,1084.9 557.7,1089.3 567.9,1091.7 575,1093.3 575,1125.3 
						520.5,1125.3"/>
					<polygon class="st1" points="606.8,1339.8 661.8,1339.9 661.8,1367.3 606.8,1367.3"/>
					<polygon class="st2" points="606.9,1312.4 661.8,1312.4 661.8,1339.9 606.8,1339.8"/>
					<polygon class="st1" points="606.8,1285.4 661.8,1285.4 661.8,1312.4 606.9,1312.4"/>
					<polygon class="st2" points="606.8,1257.9 661.8,1257.9 661.8,1285.4 606.8,1285.4"/>
					<polygon class="st1" points="607,1230.4 661.8,1230.4 661.8,1257.9 606.8,1257.9"/>
					<polygon class="st2" points="606.9,1201 661.7,1201 661.8,1230.4 607,1230.4"/>
					<polygon class="st1" points="606.9,1170.2 661.8,1170.2 661.7,1201 606.9,1201"/>
					<polygon class="st2" points="606.9,1139.9 661.8,1139.1 661.8,1170.2 606.9,1170.2"/>
					<polygon class="st1" points="716.3,1139.4 716.3,1170.3 661.8,1170.2 661.8,1139.1"/>
					<polygon class="st2" points="716.3,1201 661.7,1201 661.8,1170.2 716.3,1170.3"/>
					<polygon class="st1" points="716.3,1233.7 661.8,1233.6 661.7,1201 716.3,1201"/>
					<polygon class="st2" points="716.3,1260.7 661.7,1260.7 661.8,1233.6 716.3,1233.7"/>
					<polygon class="st1" points="716.3,1288.2 661.8,1288.2 661.7,1260.7 716.3,1260.7"/>
					<polygon class="st2" points="716.3,1315.6 661.8,1315.6 661.8,1288.2 716.3,1288.2"/>
					<polygon class="st1" points="716.3,1342.7 661.7,1342.7 661.8,1315.6 716.3,1315.6"/>
					<polygon class="st2" points="687.9,1403.1 720.7,1447.7 742.6,1431.4 709.8,1387.1"/>
					<polygon class="st1" points="731.8,1370.9 764.5,1415.2 742.6,1431.4 709.8,1387.1"/>
					<polygon class="st2" points="753.7,1354.5 786.5,1399.2 764.5,1415.2 731.8,1370.9"/>
					<polygon class="st1" points="775.8,1338.5 808.5,1382.8 786.5,1399.2 753.7,1354.5"/>
					<polygon class="st2" points="797.9,1322.4 830.6,1366.5 808.5,1382.8 775.8,1338.5"/>
					<polygon class="st1" points="819.8,1306 852.5,1350.3 830.6,1366.5 797.9,1322.4"/>
					<path class="st2" d="M841.8,1289.8l32.7,44.4l-22,16l-32.7-44.2C819.8,1306,841.3,1289.9,841.8,1289.8z"/>
					<polygon class="st1" points="863.8,1273.7 896.6,1318 874.5,1334.2 841.8,1289.8"/>
					<polygon class="st2" points="885.8,1257.4 918.6,1301.7 896.6,1318 863.8,1273.7"/>
					<polygon class="st1" points="907.8,1241.2 940.5,1285.6 918.6,1301.7 885.8,1257.4"/>
					<polygon class="st2" points="937.1,1219.6 969.7,1264.2 940.5,1285.6 907.8,1241.2"/>
					<polygon class="st1" points="748.5,1275.8 803.2,1275.8 803.2,1248.3 748.5,1248.3"/>
					<polygon class="st2" points="748.5,1220.8 803.1,1220.9 803.2,1248.3 748.5,1248.3"/>
					<polygon class="st1" points="748.5,1193.8 803.1,1193.8 803.1,1220.9 748.5,1220.8"/>
					<path class="st2" d="M748.5,1166.3H803l0.1,27.5l-54.5-0.1C748.5,1193.8,748,1166.3,748.5,1166.3z"/>
					<polygon class="st1" points="748.6,1139 803,1138.9 803,1166.3 748.5,1166.3"/>
					<polygon class="st2" points="857.6,1138.5 857.6,1166.3 803,1166.3 803,1138.9"/>
					<polygon class="st1" points="857.6,1193.8 803.1,1193.8 803,1166.3 857.6,1166.3"/>
					<path class="st2" d="M857.6,1220.8c-2.4,0-54.5,0.1-54.5,0.1v-27.1h54.5L857.6,1220.8z"/>
					<polygon class="st1" points="857.6,1240.3 841.7,1251.9 803,1251.9 803.1,1220.9 857.6,1220.8"/>
					<polygon class="st1" points="1013.6,1231.4 1035.5,1215 1076.4,1270.5 1054.3,1286.6"/>
					<polygon class="st2" points="1057.4,1199 1098.4,1254.3 1076.4,1270.5 1035.5,1215"/>
					<polygon class="st1" points="1079.7,1182.7 1120.3,1238.1 1098.4,1254.3 1057.4,1199"/>
					<polygon class="st2" points="1101.5,1166.5 1142.2,1221.7 1120.3,1238.1 1079.7,1182.7"/>
					<polygon class="st1" points="1123.6,1150.3 1164.4,1205.6 1142.2,1221.7 1101.5,1166.5"/>
					<polygon class="st2" points="1145.6,1134.1 1186.3,1189.5 1164.4,1205.6 1123.6,1150.3"/>
					<polygon class="st1" points="1167.6,1117.8 1208.4,1173.1 1186.3,1189.5 1145.6,1134.1"/>
					<polygon class="st2" points="1189.5,1101.6 1230.2,1156.8 1208.4,1173.1 1167.6,1117.8"/>
					<polygon class="st1" points="1211.5,1085.4 1252.3,1140.8 1230.2,1156.8 1189.5,1101.6"/>
					<polygon class="st2" points="1233.7,1069.3 1274.2,1124.5 1252.3,1140.8 1211.5,1085.4"/>
					<polygon class="st1" points="1258.2,1051 1292.5,1097.3 1292.5,1113.4 1286.1,1116.5 1281.9,1119.2 1274.2,1124.5 1233.7,1069.3"/>
					<polygon class="st2" points="716.3,1060.9 716.8,1107.4 743.8,1107.4 743.8,1052.1 727.5,1052.1 721.6,1057"/>
					<polygon class="st1" points="771.3,1107.1 770.9,1052 743.8,1052.1 743.8,1107.4"/>
					<polygon class="st2" points="798.7,1107.1 798.3,1052 770.9,1052 771.3,1107.1"/>
					<polygon class="st1" points="825.7,1051.7 825.8,1107.1 798.7,1107.1 798.3,1052"/>
					<polygon class="st2" points="852.8,1051.8 853.2,1107.1 825.8,1107.1 825.7,1051.7"/>
					<polygon class="st1" points="880.3,1051.7 880.7,1106.6 853.2,1107.1 852.8,1051.8"/>
					<polygon class="st2" points="907.6,1051.7 907.7,1106.7 880.7,1106.6 880.3,1051.7"/>
					<path class="st1" d="M934.8,1051.3c0,0,0.4,55.3,0.5,55.3s-27.5,0.1-27.5,0.1l-0.1-55L934.8,1051.3z"/>
					<polygon class="st2" points="962.2,1051.7 962.7,1106.2 935.2,1106.6 934.8,1051.3"/>
					<polygon class="st1" points="989.7,1051.7 989.8,1106.3 962.7,1106.2 962.2,1051.7"/>
					<polygon class="st2" points="1016.8,1051.7 1017.2,1106.2 989.8,1106.3 989.7,1051.7"/>
					<polygon class="st1" points="1044.2,1051.4 1044.7,1106.3 1017.2,1106.2 1016.8,1051.7"/>
					<polygon class="st2" points="1071.7,1051.3 1071.7,1105.8 1044.7,1106.3 1044.2,1051.4"/>
					<polygon class="st1" points="1098.7,1051.3 1099.2,1105.9 1071.7,1105.8 1071.7,1051.3"/>
					<polygon class="st2" points="1130.2,1050.9 1130.2,1105.8 1099.2,1105.9 1098.7,1051.3"/>
					<polygon class="st2" points="1173.9,982.5 1204.6,982.5 1205,1050.9 1173.9,1050.9"/>
					<polygon class="st1" points="1142.9,982.9 1143.3,1050.9 1173.9,1050.9 1173.9,982.5"/>
					<polygon class="st2" points="1114.4,982.9 1114.7,1051.3 1143.3,1050.9 1142.9,982.9"/>
					<path class="st1" d="M1087.1,982.9c0,0,0.3,68.5,0.5,68.5s27.1-0.1,27.1-0.1l-0.3-68.4L1087.1,982.9z"/>
					<polygon class="st2" points="1059.6,982.9 1060.2,1051.4 1087.6,1051.4 1087.1,982.9"/>
					<polygon class="st1" points="1032.7,983.3 1032.7,1051.4 1060.2,1051.4 1059.6,982.9"/>
					<polygon class="st2" points="1032.7,983.3 1032.7,1051.4 1005.6,1051.7 1005.2,983.3"/>
					<polygon class="st1" points="977.8,983.3 978.2,1051.7 1005.6,1051.7 1005.2,983.3"/>
					<polygon class="st2" points="942.9,983.6 950.5,1051.5 978.2,1051.7 977.8,983.3"/>
					<path class="st1" d="M932.5,891.5c0,0,6.8,60.4,6.9,60.4h25.1v-60.4H932.5z"/>
					<polygon class="st2" points="992,891.5 992.1,951.5 964.6,951.9 964.6,891.5"/>
					<polygon class="st1" points="1019.5,891.5 1019.5,951.4 992.1,951.5 992,891.5"/>
					<polygon class="st2" points="1046.6,891.2 1046.6,951.4 1019.5,951.4 1019.5,891.5"/>
					<polygon class="st1" points="1074.1,891.2 1074.1,951.1 1046.6,951.4 1046.6,891.2"/>
					<polygon class="st2" points="1101.4,891.2 1101.6,950.9 1074.1,951.1 1074.1,891.2"/>
					<polygon class="st1" points="1128.6,891 1128.6,951 1101.6,950.9 1101.4,891.2"/>
					<polygon class="st2" points="1156,890.8 1156,951.1 1128.6,951 1128.6,891"/>
					<polygon class="st1" points="1183.5,890.8 1183.5,950.6 1156,951.1 1156,890.8"/>
					<polygon class="st2" points="1210.5,890.7 1210.6,950.6 1183.5,950.6 1183.5,890.8"/>
					<polygon class="st1" points="1238,890.6 1238.1,950.9 1210.6,950.6 1210.5,890.7"/>
					<polygon class="st2" points="1265.4,890.5 1265.5,950.7 1238.1,950.9 1238,890.6"/>
					<polygon class="st1" points="1293.3,890.2 1293.4,950.4 1265.5,950.7 1265.4,890.5"/>
					<polygon class="st1" points="1265.5,821.7 1238.4,822.2 1238.5,890.5 1266.1,890.5"/>
					<polygon class="st2" points="1211,822.1 1211.3,890.8 1238.5,890.5 1238.4,822.2"/>
					<polygon class="st1" points="1183.5,822.1 1183.9,890.8 1211.3,890.8 1211,822.1"/>
					<polygon class="st2" points="1156.5,822.1 1156.6,890.8 1183.9,890.8 1183.5,822.1"/>
					<polygon class="st1" points="1128.9,822.4 1129.3,891 1156.6,890.8 1156.5,822.1"/>
					<polygon class="st2" points="1098.4,822.5 1098.4,891.2 1129.3,891 1128.9,822.4"/>
					<polygon class="st1" points="1067.4,822.6 1067.8,891.2 1098.4,891.2 1098.4,822.5"/>
					<polygon class="st2" points="1034.2,822.9 1041.9,891.2 1067.8,891.2 1067.4,822.6"/>
					<polygon class="st1" points="929.3,864.3 932.5,891.5 1010,891.5 1006,855.9"/>
					<polygon class="st2" points="926.2,837.3 1002.9,828.6 1006,855.9 929.3,864.3"/>
					<polygon class="st1" points="922.9,809.8 1000,801.5 1002.9,828.6 926.2,837.3"/>
					<polygon class="st2" points="920.1,782.7 996.9,774.4 1000,801.5 922.9,809.8"/>
					<polygon class="st1" points="916.8,755.7 993.6,747.2 996.9,774.4 920.1,782.7"/>
					<polygon class="st2" points="913.7,728.7 990.6,719.8 993.6,747.2 916.8,755.7"/>
					<polygon class="st1" points="910.9,701.4 987.8,692.6 990.6,719.8 913.7,728.7"/>
					<polygon class="st2" points="907.7,674.2 984.5,665.6 987.8,692.6 910.9,701.4"/>
					<polygon class="st1" points="904.6,647.1 981.3,638.6 984.5,665.6 907.7,674.2"/>
					<path class="st2" d="M901.5,620l77-8.8c0,0,3.5,27.3,2.9,27.4l-76.7,8.6L901.5,620z"/>
					<polygon class="st1" points="898.5,592.7 975.4,584 978.5,611.2 901.5,620"/>
					<polygon class="st2" points="895.5,565.5 972.3,557 975.4,584 898.5,592.7"/>
					<path class="st1" d="M892.3,538.3l77-8.5c0,0,3.4,27.1,2.9,27.2l-76.8,8.5L892.3,538.3z"/>
					<polygon class="st2" points="889.6,511.4 966.2,502.5 969.3,529.8 892.3,538.3"/>
					<polygon class="st1" points="886.5,484.3 963,475.4 966.2,502.5 889.6,511.4"/>
					<polygon class="st2" points="883.3,456.9 960,448.4 963,475.4 886.5,484.3"/>
					<polygon class="st1" points="880.4,429.7 957,421.3 960,448.4 883.3,456.9"/>
					<path class="st2" d="M877.3,402.7l76.5-8.8c0,0,3.1,27.2,3.1,27.4s-76.6,8.4-76.6,8.4L877.3,402.7z"/>
					<polygon class="st1" points="874.2,375.6 950.8,366.8 953.9,393.9 877.3,402.7"/>
					<polygon class="st2" points="871.1,348.4 947.9,339.7 950.8,366.8 874.2,375.6"/>
					<polygon class="st1" points="868.1,321.1 944.6,312.6 947.9,339.7 871.1,348.4"/>
					<polygon class="st2" points="865,294.1 941.6,285.3 944.6,312.6 868.1,321.1"/>
					<polygon class="st1" points="861.8,266.7 935.3,228.7 941.6,285.3 865,294.1"/>
					<polygon class="st2" points="965.4,213.3 1004.8,289.3 1028.9,276.8 989.6,200.5"/>
					<polygon class="st1" points="1013.8,188 1053.2,264.3 1028.9,276.8 989.6,200.5"/>
					<polygon class="st2" points="1077.4,251.5 1038.1,175.3 1013.8,188 1053.2,264.3"/>
					<polygon class="st1" points="1101.7,238.9 1062.5,162.6 1038.1,175.3 1077.4,251.5"/>
					<polygon class="st2" points="1126,226.4 1086.6,150.2 1062.5,162.6 1101.7,238.9"/>
					<polygon class="st1" points="1150.3,213.8 1110.8,137.7 1086.6,150.2 1126,226.4"/>
					<polygon class="st2" points="1174.6,201.3 1135.1,125.1 1110.8,137.7 1150.3,213.8"/>
					<path class="st1" d="M1198.7,188.6l-39.4-76l-24.2,12.5c0,0,37.9,78,39.4,76.2S1198.7,188.6,1198.7,188.6z"/>
					<polygon class="st2" points="1223.1,176 1183.8,100 1159.3,112.6 1198.7,188.6"/>
					<polygon class="st1" points="1247.3,163.6 1207.9,87.5 1183.8,100 1223.1,176"/>
					<path class="st2" d="M1264.3,154.9l-0.1-26.2l-29-55.4l-27.3,14.3c0,0,38.8,76.3,39.4,76S1264.3,154.9,1264.3,154.9z"/>
					<polygon class="st1" points="1295.7,42 1295.8,69.6 1364.4,69.6 1364.5,6.3"/>
					<polygon class="st2" points="1295.7,97 1364.4,97 1364.4,69.6 1295.8,69.6"/>
					<polygon class="st1" points="1295.8,124.5 1364.4,124.5 1364.4,97 1295.7,97"/>
					<polygon class="st2" points="1295.7,151.6 1364.4,151.6 1364.4,124.5 1295.8,124.5"/>
					<polygon class="st1" points="1295.8,179 1364.4,179 1364.4,151.6 1295.7,151.6"/>
					<polygon class="st2" points="1295.8,206.5 1364.4,206.5 1364.4,179 1295.8,179"/>
					<polygon class="st1" points="1295.7,233.5 1364.3,233.6 1364.4,206.5 1295.8,206.5"/>
					<polygon class="st2" points="1295.7,261 1364.4,261 1364.3,233.6 1295.7,233.5"/>
					<polygon class="st1" points="1295.7,288.4 1364.4,288.4 1364.4,261 1295.7,261"/>
					<polygon class="st2" points="1295.7,315.5 1364.4,315.5 1364.4,288.4 1295.7,288.4"/>
					<rect x="1295.7" y="315.5" class="st1" width="68.7" height="27.5"/>
					<polygon class="st2" points="1295.7,370.4 1364.3,370.4 1364.4,343 1295.7,343"/>
					<polygon class="st1" points="1295.7,397.5 1364.4,397.5 1364.3,370.4 1295.7,370.4"/>
					<polygon class="st2" points="1295.8,425 1364.4,425 1364.4,397.5 1295.7,397.5"/>
					<polygon class="st1" points="1295.8,452.5 1364.4,452.5 1364.4,425 1295.8,425"/>
					<polygon class="st2" points="1295.7,479.5 1364.4,479.5 1364.4,452.5 1295.8,452.5"/>
					<polygon class="st1" points="1295.7,507 1364.3,507 1364.4,479.5 1295.7,479.5"/>
					<polygon class="st2" points="1295.8,534.4 1364.4,534.4 1364.3,507 1295.7,507"/>
					<polygon class="st1" points="1295.7,561.4 1364.4,561.4 1364.4,534.4 1295.8,534.4"/>
					<polygon class="st2" points="1295.8,588.9 1364.4,588.9 1364.4,561.4 1295.7,561.4"/>
					<polygon class="st1" points="1295.8,616.3 1364.4,616.3 1364.4,588.9 1295.8,588.9"/>
					<polygon class="st2" points="1295.7,643.5 1364.4,643.5 1364.4,616.3 1295.8,616.3"/>
					<rect x="1295.7" y="643.5" class="st1" width="68.7" height="27.5"/>
					<polygon class="st2" points="1295.7,698.4 1364.4,698.4 1364.4,671 1295.7,671"/>
					<polygon class="st1" points="1295.8,725.5 1364.4,725.5 1364.4,698.4 1295.7,698.4"/>
					<polygon class="st2" points="1295.7,759.2 1364.4,759.2 1364.4,725.5 1295.8,725.5"/>
					<polygon class="st1" points="1295.8,789.9 1364.5,789.5 1364.4,759.2 1295.7,759.2"/>
					<polygon class="st2" points="1236.4,713.4 1264.3,713.1 1264.3,789.9 1236.9,790.2"/>
					<polygon class="st1" points="1208.9,713.4 1236.4,713.4 1236.9,790.2 1209.4,790.2"/>
					<polygon class="st2" points="1181.8,713.4 1208.9,713.4 1209.4,790.2 1182.2,790.2"/>
					<polygon class="st1" points="1154.5,713.4 1181.8,713.4 1182.2,790.2 1154.8,790.7"/>
					<polygon class="st2" points="1123.8,713.8 1154.5,713.4 1154.8,790.7 1124,790.7"/>
					<polygon class="st1" points="1093.2,713.9 1123.8,713.8 1124,790.7 1093.2,790.6"/>
					<polygon class="st2" points="1062.1,713.8 1093.2,713.9 1093.2,790.6 1062.6,790.6"/>
					<polygon class="st1" points="1030.7,791 1030.3,714.4 1062.1,713.8 1062.6,790.6"/>
					<polygon class="st2" points="1029.9,628.6 1062.1,628.6 1062.1,713.8 1030.3,714.4"/>
					<polygon class="st1" points="1092.8,628.4 1093.2,713.9 1062.1,713.8 1062.1,628.6"/>
					<polygon class="st2" points="1123.5,628.3 1123.8,713.8 1093.2,713.9 1092.8,628.4"/>
					<polygon class="st1" points="1154,628.3 1154.5,713.4 1123.8,713.8 1123.5,628.3"/>
					<polygon class="st2" points="1181.5,628.3 1181.8,713.4 1154.5,713.4 1154,628.3"/>
					<polygon class="st1" points="1208.9,627.9 1208.9,713.4 1181.8,713.4 1181.5,628.3"/>
					<polygon class="st2" points="1236.1,627.9 1236.4,713.4 1208.9,713.4 1208.9,627.9"/>
					<polygon class="st1" points="1264.3,627.9 1264.3,713.1 1236.4,713.4 1236.1,627.9"/>
					<polygon class="st1" points="990.8,419 1015,406.4 1054.2,482.1 1029.9,494.9"/>
					<polygon class="st2" points="1039.3,393.7 1078.5,469.5 1054.2,482.1 1015,406.4"/>
					<polygon class="st1" points="1063.6,381.4 1102.6,457 1078.5,469.5 1039.3,393.7"/>
					<polygon class="st2" points="1087.8,368.6 1127,444.5 1102.6,457 1063.6,381.4"/>
					<polygon class="st1" points="1111.9,356.1 1151.1,431.9 1127,444.5 1087.8,368.6"/>
					<polygon class="st2" points="1136.3,343.5 1175.4,419.4 1151.1,431.9 1111.9,356.1"/>
					<polygon class="st1" points="1160.6,330.9 1199.7,406.7 1175.4,419.4 1136.3,343.5"/>
					<polygon class="st2" points="1184.9,318.4 1223.9,394.2 1199.7,406.7 1160.6,330.9"/>
					<polygon class="st1" points="1209,305.7 1248.3,381.6 1223.9,394.2 1184.9,318.4"/>
					<polygon class="st2" points="1233.3,293.3 1264.2,352.5 1264.3,373.4 1248.3,381.6 1209,305.7"/>
					<polygon class="st2" points="1222.4,212.4 1257.6,280.6 1233.3,293.3 1197.9,225.1"/>
					<polygon class="st1" points="1173.8,237.8 1197.9,225.1 1233.3,293.3 1209,305.7"/>
					<polygon class="st2" points="1149.6,250.2 1173.8,237.8 1209,305.7 1184.9,318.4"/>
					<polygon class="st1" points="1125.3,263 1149.6,250.2 1184.9,318.4 1160.6,330.9"/>
					<polygon class="st2" points="1100.9,275.3 1125.3,263 1160.6,330.9 1136.3,343.5"/>
					<polygon class="st1" points="1076.6,288 1100.9,275.3 1136.3,343.5 1111.9,356.1"/>
					<polygon class="st2" points="1052.4,300.5 1076.6,288 1111.9,356.1 1087.8,368.6"/>
					<polygon class="st1" points="1028.2,313.1 1052.4,300.5 1087.8,368.6 1063.6,381.4"/>
					<polygon class="st2" points="1003.9,325.7 1028.2,313.1 1063.6,381.4 1039.3,393.7"/>
					<polygon class="st1" points="979.7,338.3 1003.9,325.7 1039.3,393.7 1015,406.4"/>
					<polygon class="st3" points="233.6,1632.1 243.9,1632.1 244.1,1646 233.8,1645.9"/>
					<text transform="matrix(0.9 1.000000e-02 0 1 252.1401 1639.3199)" class="st4 futura-book st6">ACCESO</text>
					<path class="st4" d="M258.6,1630.5c-2,0.1-3.5,1.7-3.5,3.7h-5l4.3-4.1l4.3-4.1l4.3,4.2l4.2,4.2h-5
						C262.1,1632.3,260.5,1630.7,258.6,1630.5"/>
					<text transform="matrix(0.9098 3.999200e-02 -1.999600e-02 0.9998 214.2805 1631.1606)" class="st4 futura-book st7">SALIDA</text>
					<path class="st4" d="M219.3,1637.7c-1.9-0.2-3.4-1.8-3.4-3.7l-4.9-0.2l4.1,4.2l4.1,4.2l4.3-3.9l4.3-3.9l-4.9-0.2
						C222.8,1636.1,221.2,1637.7,219.3,1637.7"/>
					<path class="st8" d="M236.7,1638.1c0.1,0,1.1,0.5,1.1,0.9s-1,0.6-1.1,0.6c-0.3-0.2-0.4-0.5-0.4-0.8
						C236.3,1638.3,236.6,1638,236.7,1638.1z"/>
					<path class="st8" d="M239.5,1635.8c1.1,0.2,1.8,1.8,1.9,3.7s-0.7,3.3-1.8,3.2C239.6,1639.2,239.6,1639.2,239.5,1635.8z"/>
					<polygon class="st8" points="239.5,1636 239.6,1642.5 238.6,1642.3 238.6,1635.8"/>
					<path class="st8" d="M238.6,1642.3l-0.8,0.6c-0.2,0.1-0.4,0-0.4-0.1c0,0,0,0,0,0l-0.2-0.5c-0.2-0.9-0.7-1.7-1.3-2.3l-0.3-0.3v-2.2
						l0.3-0.2c0.6-0.4,1-1,1.2-1.7l0.2-0.6c0.1-0.1,0.2-0.1,0.3-0.1c0,0,0,0,0.1,0.1l0.9,0.9L238.6,1642.3z"/>
					<polygon class="st3" points="713.3,1509.3 721.7,1503.1 730.1,1514.1 721.8,1520.3"/>
					<text transform="matrix(0.73 -0.53 0.6 0.8 732.4504 1503.8496)" class="st4 futura-book st6">ACCESO</text>
					<path class="st4" d="M732.4,1493.1c-1.5,1.2-1.8,3.4-0.6,5l-4,3l1-5.8l1-5.8l5.9,0.8l5.9,0.8l-4,3c-1.2-1.6-3.4-1.9-5-0.9"/>
					<text transform="matrix(0.7528 -0.5119 0.5822 0.8131 697.5609 1520.2803)" class="st4 futura-book st9">SALIDA</text>
					<path class="st4" d="M705.3,1522.3c-1.7,1-3.9,0.6-5-1l-4,2.8l5.8,0.9l5.8,0.9l1.1-5.6l1.1-5.6l-4,2.8
						C707.1,1519,706.8,1521.1,705.3,1522.3"/>
					<path class="st8" d="M719.5,1512.2c0.1,0,1.1-0.3,1.4,0.1s-0.4,1.1-0.5,1.1c-0.3,0-0.6-0.1-0.8-0.4
						C719.3,1512.7,719.4,1512.3,719.5,1512.2z"/>
					<path class="st8" d="M720.3,1508.7c1-0.5,2.5,0.3,3.7,1.8s1.4,3.1,0.5,3.6C722.4,1511.4,722.4,1511.4,720.3,1508.7z"/>
					<polygon class="st8" points="720.5,1508.9 724.4,1514 723.5,1514.5 719.6,1509.3"/>
					<path class="st8" d="M723.5,1514.5l-0.3,1c-0.1,0.2-0.3,0.2-0.5,0.1c0,0,0,0,0,0l-0.5-0.3c-0.7-0.6-1.5-0.9-2.4-1h-0.3l-1.3-1.7
						l0.1-0.4c0.2-0.7,0.2-1.4-0.1-2.1l-0.2-0.6c0-0.1,0-0.2,0.2-0.3c0,0,0.1,0,0.1,0l1.2,0.2L723.5,1514.5z"/>
					<polygon class="st3" points="1323.3,844.5 1333.7,844.5 1333.9,858.3 1323.6,858.3"/>
					<text transform="matrix(0.9 1.000000e-02 0 1 1341.4899 851.4796)" class="st4 futura-book st6">ACCESO</text>
					<path class="st4" d="M1348.3,842.8c-2,0.1-3.5,1.7-3.5,3.7h-5l4.3-4.1l4.3-4.1l4.2,4.2l4.3,4.2h-5
						C1351.8,844.6,1350.3,843,1348.3,842.8"/>
					<text transform="matrix(0.9098 2.999400e-02 -1.999600e-02 0.9998 1304.0896 843.5907)" class="st4 futura-book st7">SALIDA</text>
					<path class="st4" d="M1309.1,850.1c-1.9-0.2-3.4-1.8-3.4-3.7l-4.9-0.2l4.1,4.2l4.1,4.2l4.3-3.9l4.3-3.9l-4.9-0.2
						C1312.5,848.5,1311,850.1,1309.1,850.1"/>
					<path class="st8" d="M1326.5,850.5c0.1,0,1.1,0.5,1.1,0.9s-1,0.6-1.1,0.6c-0.3-0.2-0.4-0.5-0.4-0.8
						C1326.1,850.7,1326.4,850.4,1326.5,850.5z"/>
					<path class="st8" d="M1329.3,848.2c1.1,0.2,1.8,1.8,1.8,3.7s-0.7,3.3-1.8,3.2C1329.3,851.6,1329.3,851.6,1329.3,848.2z"/>
					<polygon class="st8" points="1329.3,848.4 1329.4,854.9 1328.4,854.7 1328.3,848.2"/>
					<path class="st8" d="M1328.4,854.7l-0.8,0.6c-0.2,0.1-0.4,0-0.4-0.1c0,0,0,0,0,0l-0.2-0.5c-0.2-0.9-0.7-1.7-1.3-2.3l-0.3-0.2v-2.2
						l0.3-0.2c0.6-0.4,1-1,1.2-1.7l0.2-0.6c0.1-0.1,0.2-0.1,0.3-0.1c0,0,0,0,0.1,0.1l0.9,0.9L1328.4,854.7z"/>
					<g id="C-62">
						<text transform="matrix(0.9992 3.996804e-02 -3.996804e-02 0.9992 148.7191 1647.3398)" class="st10 st11 st12">8.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 152.569 1611.479)" class="st10 st11 st13">140.00 m2</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 158.2605 1620.8694)" class="st14 futura-book st13">02</text>
						<text transform="matrix(-2.998651e-02 0.9896 -0.9996 -2.998651e-02 141.7293 1614.9995)" class="st10 st11 st15">17.50</text>
						<text transform="matrix(0.9988 4.993762e-02 -4.993762e-02 0.9988 149.9198 1598.7495)" class="st10 st11 st16">8.00</text>
					</g>
					<g id="C-62-2">
						<text transform="matrix(0.9992 3.996804e-02 -3.996804e-02 0.9992 121.19 1647.3705)" class="st10 st11 st12">8.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 125.0399 1611.5094)" class="st10 st11 st13">140.00 m2</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 130.7294 1620.9095)" class="st14 futura-book st13">03</text>
						<text transform="matrix(-2.998651e-02 0.9896 -0.9996 -2.998651e-02 114.2096 1615.0396)" class="st10 st11 st15">17.50</text>
						<text transform="matrix(0.9988 4.993762e-02 -4.993762e-02 0.9988 122.3897 1598.78)" class="st10 st11 st16">8.00</text>
					</g>
					<g id="C-62-3">
						<text transform="matrix(0.9992 3.996804e-02 -3.996804e-02 0.9992 94.4894 1646.4305)" class="st10 st11 st12">8.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 98.341 1610.5696)" class="st10 st11 st13">140.00 m2</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 104.0306 1619.959)" class="st14 futura-book st13">04</text>
						<text transform="matrix(-2.998651e-02 0.9896 -0.9996 -2.998651e-02 87.4993 1614.0995)" class="st10 st11 st15">17.50</text>
						<text transform="matrix(0.9988 4.993762e-02 -4.993762e-02 0.9988 95.6895 1597.84)" class="st10 st11 st16">8.00</text>
					</g>
					<g id="C-62-4">
						<text transform="matrix(0.9992 3.996804e-02 -3.996804e-02 0.9992 98.4794 1120.0698)" class="st10 st11 st12">8.99</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 100.7799 1079.749)" class="st10 st11 st13">179.81 m2</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 106.4694 1089.1492)" class="st14 futura-book st13">25</text>
						<text transform="matrix(-2.998651e-02 0.9896 -0.9996 -2.998651e-02 89.9398 1083.2797)" class="st10 st11 st15">20.00</text>
						<text transform="matrix(-2.998651e-02 0.9896 -0.9996 -2.998651e-02 113.5912 1083.2799)" class="st10 st11 st15">20.00</text>
						<text transform="matrix(0.9988 4.993762e-02 -4.993762e-02 0.9988 99.6797 1063.6599)" class="st10 st11 st16">8.99</text>
						<polygon class="st17" points="104.1,1105 100.1,1109.4 104.2,1113.7"/>
						<polygon class="st18" points="104.1,1105 104.2,1113.7 108.2,1109.3"/>
					</g>
					<g id="C-62-5">
						<text transform="matrix(0.9992 3.996804e-02 -3.996804e-02 0.9992 128.6193 1120.0801)" class="st10 st11 st12">8.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 128.4805 1079.7496)" class="st10 st11 st13">160.00 m2</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 134.1719 1089.1498)" class="st14 futura-book st13">26</text>
						<text transform="matrix(-2.998651e-02 0.9896 -0.9996 -2.998651e-02 141.2993 1083.2797)" class="st10 st11 st15">20.00</text>
						<text transform="matrix(0.9988 4.993762e-02 -4.993762e-02 0.9988 129.8199 1063.6602)" class="st10 st11 st16">8.00</text>
					</g>
					<g id="C-62-6">
						<text transform="matrix(0.9992 3.996804e-02 -3.996804e-02 0.9992 155.7293 1120.0698)" class="st10 st11 st12">8.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 155.601 1079.7494)" class="st10 st11 st13">160.00 m2</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 161.2905 1089.1495)" class="st14 futura-book st13">27</text>
						<text transform="matrix(-2.998651e-02 0.9896 -0.9996 -2.998651e-02 168.4093 1083.2802)" class="st10 st11 st15">20.00</text>
						<text transform="matrix(0.9988 4.993762e-02 -4.993762e-02 0.9988 156.9396 1063.6599)" class="st10 st11 st16">8.00</text>
					</g>
					<g id="C-62-7">
						<text transform="matrix(0.9992 3.996804e-02 -3.996804e-02 0.9992 182.2094 1120.0696)" class="st10 st11 st12">8.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 182.0789 1079.7495)" class="st10 st11 st13">160.00 m2</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 187.7703 1089.1497)" class="st14 futura-book st13">28</text>
						<text transform="matrix(-2.998651e-02 0.9896 -0.9996 -2.998651e-02 194.9 1083.2795)" class="st10 st11 st15">20.00</text>
						<text transform="matrix(0.9988 4.993762e-02 -4.993762e-02 0.9988 183.4199 1063.66)" class="st10 st11 st16">8.00</text>
					</g>
					<g id="C-62-8">
						<text transform="matrix(0.9992 3.996804e-02 -3.996804e-02 0.9992 210.5592 1120.0699)" class="st10 st11 st12">8.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 210.4201 1079.7498)" class="st10 st11 st13">160.00 m2</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 216.1096 1089.1498)" class="st14 futura-book st13">29</text>
						<text transform="matrix(-2.998651e-02 0.9896 -0.9996 -2.998651e-02 223.2392 1083.2798)" class="st10 st11 st15">20.00</text>
						<text transform="matrix(0.9988 4.993762e-02 -4.993762e-02 0.9988 211.76 1063.6603)" class="st10 st11 st16">8.00</text>
					</g>
					<g id="C-62-9">
						<text transform="matrix(0.9992 3.996804e-02 -3.996804e-02 0.9992 237.8799 1120.0701)" class="st10 st11 st12">8.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 237.7399 1079.7494)" class="st10 st11 st13">160.00 m2</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 243.4313 1089.1497)" class="st14 futura-book st13">30</text>
						<text transform="matrix(-2.998651e-02 0.9896 -0.9996 -2.998651e-02 250.5584 1083.2797)" class="st10 st11 st15">20.00</text>
						<text transform="matrix(0.9988 4.993762e-02 -4.993762e-02 0.9988 239.0802 1063.6593)" class="st10 st11 st16">8.00</text>
					</g>
					<g id="C-62-10">
						<text transform="matrix(0.9992 3.996804e-02 -3.996804e-02 0.9992 264.1694 1120.0701)" class="st10 st11 st12">8.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 264.0302 1079.7496)" class="st10 st11 st13">160.00 m2</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 269.7295 1089.1489)" class="st14 futura-book st13">31</text>
						<text transform="matrix(-2.998651e-02 0.9896 -0.9996 -2.998651e-02 276.8497 1083.2799)" class="st10 st11 st15">20.00</text>
						<text transform="matrix(0.9988 4.993762e-02 -4.993762e-02 0.9988 265.3796 1063.6602)" class="st10 st11 st16">8.00</text>
					</g>
					<g id="C-62-11">
						<text transform="matrix(0.9992 3.996804e-02 -3.996804e-02 0.9992 291.6895 1120.0703)" class="st10 st11 st12">8.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 291.559 1079.7495)" class="st10 st11 st13">160.00 m2</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 297.2484 1089.1497)" class="st14 futura-book st13">32</text>
						<text transform="matrix(-2.998651e-02 0.9896 -0.9996 -2.998651e-02 304.3799 1083.2803)" class="st10 st11 st15">20.00</text>
						<text transform="matrix(0.9988 4.993762e-02 -4.993762e-02 0.9988 292.8895 1063.6599)" class="st10 st11 st16">8.00</text>
					</g>
					<g id="C-62-12">
						<text transform="matrix(0.9992 3.996804e-02 -3.996804e-02 0.9992 319.2095 1120.0697)" class="st10 st11 st12">8.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 319.0916 1079.7494)" class="st10 st11 st13">160.00 m2</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 324.7811 1089.1495)" class="st14 futura-book st13">33</text>
						<text transform="matrix(-2.998651e-02 0.9896 -0.9996 -2.998651e-02 331.8984 1083.2793)" class="st10 st11 st15">20.00</text>
						<text transform="matrix(0.9988 4.993762e-02 -4.993762e-02 0.9988 320.4102 1063.6602)" class="st10 st11 st16">8.00</text>
					</g>
					<g id="C-62-13">
						<text transform="matrix(0.9992 3.996804e-02 -3.996804e-02 0.9992 346.3298 1120.0696)" class="st10 st11 st12">8.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 346.2004 1079.749)" class="st10 st11 st13">160.00 m2</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 351.8899 1089.1492)" class="st14 futura-book st13">34</text>
						<text transform="matrix(-2.998651e-02 0.9896 -0.9996 -2.998651e-02 359.0202 1083.28)" class="st10 st11 st15">20.00</text>
						<text transform="matrix(0.9988 4.993762e-02 -4.993762e-02 0.9988 347.53 1063.66)" class="st10 st11 st16">8.00</text>
					</g>
					<g id="C-62-14">
						<text transform="matrix(0.9992 3.996804e-02 -3.996804e-02 0.9992 372.6194 1120.0696)" class="st10 st11 st12">8.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 372.4888 1079.7493)" class="st10 st11 st13">160.00 m2</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 378.1802 1089.1494)" class="st14 futura-book st13">35</text>
						<text transform="matrix(-2.998651e-02 0.9896 -0.9996 -2.998651e-02 385.3097 1083.2793)" class="st10 st11 st15">20.00</text>
						<text transform="matrix(0.9988 4.993762e-02 -4.993762e-02 0.9988 373.8196 1063.6594)" class="st10 st11 st16">8.00</text>
					</g>
					<g id="C-62-15">
						<text transform="matrix(0.9992 3.996804e-02 -3.996804e-02 0.9992 401.0493 1120.0701)" class="st10 st11 st12">8.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 400.9101 1079.7493)" class="st10 st11 st13">160.00 m2</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 406.6016 1089.1494)" class="st14 futura-book st13">36</text>
						<text transform="matrix(-2.998651e-02 0.9896 -0.9996 -2.998651e-02 414.8095 1083.2802)" class="st10 st11 st15">20.00</text>
						<text transform="matrix(0.9988 4.993762e-02 -4.993762e-02 0.9988 402.2496 1063.6602)" class="st10 st11 st16">8.00</text>
						<polygon class="st17" points="406.6,1105 402.6,1109.4 406.6,1113.7"/>
						<polygon class="st18" points="406.6,1105 406.7,1113.7 410.7,1109.3"/>
					</g>
					<g id="C-62-16">
						<text transform="matrix(0.9992 3.996804e-02 -3.996804e-02 0.9992 67.3794 1645.2699)" class="st10 st11 st12">8.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 71.2301 1609.4098)" class="st10 st11 st13">140.00 m2</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 76.9216 1618.8099)" class="st14 futura-book st13">05</text>
						<text transform="matrix(-2.998651e-02 0.9896 -0.9996 -2.998651e-02 60.3891 1612.9393)" class="st10 st11 st15">17.50</text>
						<text transform="matrix(0.9988 4.993762e-02 -4.993762e-02 0.9988 68.5798 1596.6801)" class="st10 st11 st16">8.00</text>
					</g>
					<g id="C-62-17">
						<text transform="matrix(0.9992 3.996804e-02 -3.996804e-02 0.9992 39.6492 1644.0004)" class="st10 st11 st12">8.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 43.4994 1608.1294)" class="st10 st11 st13">140.00 m2</text>
						<polygon class="st17" points="44.9,1597.8 40.9,1602.2 45,1606.6"/>
						<polygon class="st18" points="45,1597.8 45,1606.6 49.1,1602.2"/>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 49.1908 1617.5297)" class="st14 futura-book st13">06</text>
						<text transform="matrix(-2.998651e-02 0.9896 -0.9996 -2.998651e-02 32.6593 1611.6599)" class="st10 st11 st15">17.50</text>
						<text transform="matrix(0.9988 4.993762e-02 -4.993762e-02 0.9988 40.8503 1595.4001)" class="st10 st11 st16">8.00</text>
					</g>
					<g id="C-62-18">
						<text transform="matrix(0.9992 3.996804e-02 -3.996804e-02 0.9992 243.9494 1482.0002)" class="st10 st11 st12">8.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 247.7992 1446.1497)" class="st10 st11 st13">143.70 m2</text>
						<polygon class="st17" points="254.2,1469.2 250.1,1473.6 254.2,1477.9"/>
						<polygon class="st18" points="254.2,1469.2 254.3,1477.9 258.3,1473.5"/>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 253.4887 1455.5497)" class="st14 futura-book st13">78</text>
						<text transform="matrix(-2.998651e-02 0.9896 -0.9996 -2.998651e-02 236.96 1449.6802)" class="st10 st11 st15">17.51</text>
						<text transform="matrix(0.9988 4.993762e-02 -4.993762e-02 0.9988 245.1497 1433.41)" class="st10 st11 st16">8.42</text>
					</g>
					<g id="C-62-19">
						<text transform="matrix(0.9992 3.996804e-02 -3.996804e-02 0.9992 275.6292 1483.8998)" class="st10 st11 st12">9.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 279.4791 1448.0494)" class="st10 st11 st13">157.50 m2</text>
						<polygon class="st17" points="285.8,1471.1 281.8,1475.5 285.9,1479.8"/>
						<polygon class="st18" points="285.9,1471.1 286,1479.8 290,1475.4"/>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 285.1706 1457.4388)" class="st14 futura-book st13">79</text>
						<text transform="matrix(-2.998651e-02 0.9896 -0.9996 -2.998651e-02 268.6498 1451.5698)" class="st10 st11 st15">17.50</text>
						<text transform="matrix(0.9988 4.993762e-02 -4.993762e-02 0.9988 276.8395 1435.3094)" class="st10 st11 st16">9.00</text>
					</g>
					<g id="C-62-20">
						<text transform="matrix(0.9992 3.996804e-02 -3.996804e-02 0.9992 304.0492 1484.5402)" class="st10 st11 st12">9.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 307.8901 1448.6891)" class="st10 st11 st13">157.50 m2</text>
						<polygon class="st17" points="314.3,1471.7 310.2,1476.1 314.3,1480.5"/>
						<polygon class="st18" points="314.3,1471.7 314.4,1480.5 318.4,1476.1"/>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 313.5797 1458.0795)" class="st14 futura-book st13">80</text>
						<text transform="matrix(-2.998651e-02 0.9896 -0.9996 -2.998651e-02 297.0591 1452.2198)" class="st10 st11 st15">17.50</text>
						<text transform="matrix(0.9988 4.993762e-02 -4.993762e-02 0.9988 305.2497 1435.9595)" class="st10 st11 st16">9.00</text>
					</g>
					<g id="C-62-21">
						<text transform="matrix(0.9992 3.996804e-02 -3.996804e-02 0.9992 335.6194 1484.9302)" class="st10 st11 st12">9.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 339.4601 1449.079)" class="st10 st11 st13">157.50 m2</text>
						<polygon class="st17" points="345.8,1472.1 341.8,1476.5 345.9,1480.8"/>
						<polygon class="st18" points="345.9,1472.1 345.9,1480.8 350,1476.5"/>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 345.1594 1458.4695)" class="st14 futura-book st13">81</text>
						<text transform="matrix(-2.998651e-02 0.9896 -0.9996 -2.998651e-02 328.6204 1452.6097)" class="st10 st11 st15">17.50</text>
						<text transform="matrix(0.9988 4.993762e-02 -4.993762e-02 0.9988 336.8204 1436.35)" class="st10 st11 st16">9.00</text>
					</g>
					<g id="C-62-22">
						<text transform="matrix(0.9992 3.996804e-02 -3.996804e-02 0.9992 367.1398 1486.0502)" class="st10 st11 st12">10.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 370.9798 1450.1892)" class="st10 st11 st13">175.00 m2</text>
						<polygon class="st17" points="377.3,1473.2 373.3,1477.6 377.4,1482"/>
						<polygon class="st18" points="377.4,1473.2 377.5,1482 381.5,1477.6"/>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 376.6713 1459.5894)" class="st14 futura-book st13">82</text>
						<text transform="matrix(-2.998651e-02 0.9896 -0.9996 -2.998651e-02 360.1481 1453.7197)" class="st10 st11 st15">17.50</text>
						<text transform="matrix(0.9988 4.993762e-02 -4.993762e-02 0.9988 368.3395 1437.4595)" class="st10 st11 st16">10.00</text>
					</g>
					<g id="C-62-23">
						<text transform="matrix(0.9992 3.996804e-02 -3.996804e-02 0.9992 399.5796 1486.7399)" class="st10 st11 st12">9.21</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 401.3009 1450.8499)" class="st10 st11 st13">157.41 m2</text>
						<polygon class="st17" points="409.8,1473.9 405.8,1478.3 409.9,1482.7"/>
						<polygon class="st18" points="409.8,1473.9 409.9,1482.7 413.9,1478.3"/>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 406.9904 1460.249)" class="st14 futura-book st13">83</text>
						<text transform="matrix(-2.998651e-02 0.9896 -0.9996 -2.998651e-02 392.5796 1454.4103)" class="st10 st11 st15">17.50</text>
						<text transform="matrix(-2.998651e-02 0.9896 -0.9996 -2.998651e-02 414.7988 1454.4095)" class="st10 st11 st15">17.50</text>
						<text transform="matrix(0.9988 4.993762e-02 -4.993762e-02 0.9988 400.7801 1438.1497)" class="st10 st11 st16">8.78</text>
					</g>
					<g id="C-62-24">
						<text transform="matrix(0.9976 6.982913e-02 -6.982913e-02 0.9976 447.3897 1586.7)" class="st10 st11 st19">8.00</text>
						<text transform="matrix(-3.996804e-02 0.9892 -0.9992 -3.996804e-02 450.0192 1547.0796)" class="st10 st11 st20">160.00 m2</text>
						<text transform="matrix(-3.996804e-02 0.9892 -0.9992 -3.996804e-02 455.4302 1556.6503)" class="st14 futura-book st20">53</text>
						<text transform="matrix(-5.989229e-02 0.9882 -0.9982 -5.989229e-02 441.4292 1550.4298)" class="st10 st11 st21">20.00</text>
						<text transform="matrix(0.9968 7.974522e-02 -7.974522e-02 0.9968 449.1898 1528.3801)" class="st10 st11 st22">8.00</text>
					</g>
					<g id="C-62-25">
						<text transform="matrix(0.9976 6.982913e-02 -6.982913e-02 0.9976 420.8402 1585.3192)" class="st10 st11 st19">8.00</text>
						<text transform="matrix(-3.996804e-02 0.9892 -0.9992 -3.996804e-02 423.4712 1545.7001)" class="st10 st11 st20">160.00 m2</text>
						<text transform="matrix(-3.996804e-02 0.9892 -0.9992 -3.996804e-02 428.8788 1555.2598)" class="st14 futura-book st20">54</text>
						<text transform="matrix(-5.989229e-02 0.9882 -0.9982 -5.989229e-02 414.8689 1549.0397)" class="st10 st11 st21">20.00</text>
						<text transform="matrix(0.9968 7.974522e-02 -7.974522e-02 0.9968 422.6302 1526.9901)" class="st10 st11 st22">8.00</text>
					</g>
					<g id="C-62-26">
						<text transform="matrix(0.9976 6.982913e-02 -6.982913e-02 0.9976 393.4198 1585.3196)" class="st10 st11 st19">8.00</text>
						<text transform="matrix(-3.996804e-02 0.9892 -0.9992 -3.996804e-02 396.0602 1545.7002)" class="st10 st11 st20">160.00 m2</text>
						<text transform="matrix(-3.996804e-02 0.9892 -0.9992 -3.996804e-02 401.4697 1555.26)" class="st14 futura-book st20">55</text>
						<text transform="matrix(-5.989229e-02 0.9882 -0.9982 -5.989229e-02 387.4711 1549.0403)" class="st10 st11 st21">20.00</text>
						<text transform="matrix(0.9968 7.974522e-02 -7.974522e-02 0.9968 395.2196 1526.9908)" class="st10 st11 st22">8.00</text>
					</g>
					<g id="C-62-27">
						<text transform="matrix(0.9976 6.982913e-02 -6.982913e-02 0.9976 365.9802 1583.9)" class="st10 st11 st19">8.00</text>
						<text transform="matrix(-3.996804e-02 0.9892 -0.9992 -3.996804e-02 368.6084 1544.2904)" class="st10 st11 st20">160.00 m2</text>
						<text transform="matrix(-3.996804e-02 0.9892 -0.9992 -3.996804e-02 374.0198 1553.8502)" class="st14 futura-book st20">56</text>
						<text transform="matrix(-5.989229e-02 0.9882 -0.9982 -5.989229e-02 360.0198 1547.63)" class="st10 st11 st21">20.00</text>
						<text transform="matrix(0.9968 7.974522e-02 -7.974522e-02 0.9968 367.7798 1525.5803)" class="st10 st11 st22">8.00</text>
					</g>
					<g id="C-62-28">
						<text transform="matrix(0.9976 6.982913e-02 -6.982913e-02 0.9976 338.6704 1583.9001)" class="st10 st11 st19">8.00</text>
						<text transform="matrix(-3.996804e-02 0.9892 -0.9992 -3.996804e-02 341.3108 1544.2902)" class="st10 st11 st20">160.00 m2</text>
						<text transform="matrix(-3.996804e-02 0.9892 -0.9992 -3.996804e-02 346.7203 1553.85)" class="st14 futura-book st20">57</text>
						<text transform="matrix(-5.989229e-02 0.9882 -0.9982 -5.989229e-02 332.7086 1547.6202)" class="st10 st11 st21">20.00</text>
						<text transform="matrix(0.9968 7.974522e-02 -7.974522e-02 0.9968 340.4604 1525.5804)" class="st10 st11 st22">8.00</text>
					</g>
					<g id="C-62-29">
						<text transform="matrix(0.9976 6.982913e-02 -6.982913e-02 0.9976 311.2904 1583.2798)" class="st10 st11 st19">8.00</text>
						<text transform="matrix(-3.996804e-02 0.9892 -0.9992 -3.996804e-02 313.9287 1543.6699)" class="st10 st11 st20">160.00 m2</text>
						<text transform="matrix(-3.996804e-02 0.9892 -0.9992 -3.996804e-02 319.3402 1553.2297)" class="st14 futura-book st20">58</text>
						<text transform="matrix(-5.989229e-02 0.9882 -0.9982 -5.989229e-02 305.3302 1547.0096)" class="st10 st11 st21">20.00</text>
						<text transform="matrix(0.9968 7.974522e-02 -7.974522e-02 0.9968 313.0799 1524.9604)" class="st10 st11 st22">8.00</text>
					</g>
					<g id="C-62-30">
						<text transform="matrix(0.9976 6.982913e-02 -6.982913e-02 0.9976 282.8705 1583.2795)" class="st10 st11 st19">8.00</text>
						<text transform="matrix(-3.996804e-02 0.9892 -0.9992 -3.996804e-02 285.5091 1543.6697)" class="st10 st11 st20">164.84 m2</text>
						<text transform="matrix(-3.996804e-02 0.9892 -0.9992 -3.996804e-02 290.9205 1553.2296)" class="st14 futura-book st20">59</text>
						<text transform="matrix(-5.989229e-02 0.9882 -0.9982 -5.989229e-02 276.9208 1547.0093)" class="st10 st11 st21">20.00</text>
						<text transform="matrix(0.9968 7.974522e-02 -7.974522e-02 0.9968 284.6703 1524.9703)" class="st10 st11 st22">8.48</text>
						<polygon class="st17" points="288.8,1530.1 284.7,1534.3 288.6,1538.8"/>
						<polygon class="st18" points="288.9,1530.1 288.7,1538.8 292.8,1534.5"/>
					</g>
					<g id="C-62-31">
						<text transform="matrix(0.9976 6.982913e-02 -6.982913e-02 0.9976 477.9404 1587.6295)" class="st10 st11 st19">9.66</text>
						<text transform="matrix(-3.996804e-02 0.9892 -0.9992 -3.996804e-02 480.571 1548.0105)" class="st10 st11 st20">192.82 m2</text>
						<polygon class="st17" points="484,1534.1 479.8,1538.3 483.8,1542.8"/>
						<polygon class="st18" points="484,1534.1 483.8,1542.8 488,1538.5"/>
						<text transform="matrix(-3.996804e-02 0.9892 -0.9992 -3.996804e-02 485.9805 1557.5702)" class="st14 futura-book st20">52</text>
						<text transform="matrix(-5.989229e-02 0.9882 -0.9982 -5.989229e-02 469.1 1551.3494)" class="st10 st11 st21">20.00</text>
						<text transform="matrix(-5.989229e-02 0.9882 -0.9982 -5.989229e-02 494.5705 1551.3495)" class="st10 st11 st21">19.89</text>
						<text transform="matrix(0.9968 7.974522e-02 -7.974522e-02 0.9968 479.7303 1529.3009)" class="st10 st11 st22">9.66</text>
					</g>
					<g id="C-62-32">
						<text transform="matrix(3.996804e-02 -0.9992 0.9992 3.996804e-02 55.33 1521.41)" class="st10 st11 st12">8.00</text>
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 21.3193 1517.4792)" class="st10 st11 st13">128.00 m2</text>
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 30.7194 1511.7898)" class="st14 futura-book st13">08</text>
						<text transform="matrix(0.9896 2.998651e-02 -2.998651e-02 0.9996 24.8601 1528.0897)" class="st10 st11 st15">16.00</text>
						<text transform="matrix(4.993762e-02 -0.9988 0.9988 4.993762e-02 9.2099 1520.0015)" class="st10 st11 st16">8.00</text>
					</g>
					<g id="C-62-33">
						<text transform="matrix(0.9992 3.996804e-02 -3.996804e-02 0.9992 398.2097 1265.4604)" class="st10 st11 st12">8.99</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 402.0494 1231.4596)" class="st10 st11 st13">143.85 m2</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 407.7389 1240.8597)" class="st14 futura-book st13">84</text>
						<text transform="matrix(-2.998651e-02 0.9896 -0.9996 -2.998651e-02 391.2094 1234.9893)" class="st10 st11 st15">16.00</text>
						<text transform="matrix(-2.998651e-02 0.9896 -0.9996 -2.998651e-02 415.5193 1234.9897)" class="st10 st11 st15">16.00</text>
						<text transform="matrix(0.9988 4.993762e-02 -4.993762e-02 0.9988 399.4103 1219.3396)" class="st10 st11 st16">8..99</text>
						<polygon class="st17" points="408.2,1251.9 404.3,1256.4 408.5,1260.7"/>
						<polygon class="st18" points="408.2,1251.9 408.5,1260.7 412.4,1256.2"/>
					</g>
					<g id="C-62-34">
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 402.0493 1174.4392)" class="st10 st11 st13">157.33 m2</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 407.7388 1183.8394)" class="st14 futura-book st13">107</text>
						<text transform="matrix(-2.998651e-02 0.9896 -0.9996 -2.998651e-02 391.2099 1177.9696)" class="st10 st11 st15">16.00</text>
						<text transform="matrix(-2.998651e-02 0.9896 -0.9996 -2.998651e-02 415.5199 1177.97)" class="st10 st11 st15">16.00</text>
						<text transform="matrix(0.9988 4.993762e-02 -4.993762e-02 0.9988 399.4098 1159.9197)" class="st10 st11 st16">8.99</text>
						<polygon class="st17" points="404,1163.6 400.1,1168.1 404.3,1172.3"/>
						<polygon class="st18" points="404,1163.6 404.3,1172.3 408.2,1167.8"/>
					</g>
					<g id="C-62-35">
						<text transform="matrix(0.9992 3.996804e-02 -3.996804e-02 0.9992 371.3901 1265.4696)" class="st10 st11 st12">8.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 372.0401 1231.4594)" class="st10 st11 st13">128.00 m2</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 377.7393 1240.8596)" class="st14 futura-book st13">85</text>
						<text transform="matrix(-2.998651e-02 0.9896 -0.9996 -2.998651e-02 364.3885 1234.9897)" class="st10 st11 st15">16.00</text>
						<text transform="matrix(0.9988 4.993762e-02 -4.993762e-02 0.9988 372.5897 1219.3401)" class="st10 st11 st16">8.00</text>
						<polygon class="st17" points="380.7,1251.9 376.8,1256.4 381,1260.7"/>
						<polygon class="st18" points="380.8,1251.9 381.1,1260.7 385,1256.2"/>
					</g>
					<g id="C-62-36">
						<text transform="matrix(0.9992 3.996804e-02 -3.996804e-02 0.9992 343.9095 1265.4602)" class="st10 st11 st12">8.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 344.57 1231.4591)" class="st10 st11 st13">128.00 m2</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 350.2614 1240.8593)" class="st14 futura-book st13">86</text>
						<text transform="matrix(-2.998651e-02 0.9896 -0.9996 -2.998651e-02 336.9188 1234.9902)" class="st10 st11 st15">16.00</text>
						<text transform="matrix(0.9988 4.993762e-02 -4.993762e-02 0.9988 345.1101 1219.3398)" class="st10 st11 st16">8.00</text>
						<polygon class="st17" points="353.2,1251.9 349.3,1256.4 353.5,1260.7"/>
						<polygon class="st18" points="353.3,1251.9 353.6,1260.7 357.5,1256.2"/>
					</g>
					<g id="C-62-37">
						<text transform="matrix(0.9992 3.996804e-02 -3.996804e-02 0.9992 317.8394 1265.47)" class="st10 st11 st12">8.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 318.4984 1231.4591)" class="st10 st11 st13">128.00 m2</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 324.1898 1240.8593)" class="st14 futura-book st13">87</text>
						<text transform="matrix(-2.998651e-02 0.9896 -0.9996 -2.998651e-02 310.8503 1234.9897)" class="st10 st11 st15">16.00</text>
						<text transform="matrix(0.9988 4.993762e-02 -4.993762e-02 0.9988 319.0395 1219.3397)" class="st10 st11 st16">8.00</text>
						<polygon class="st17" points="327.1,1251.9 323.3,1256.4 327.5,1260.7"/>
						<polygon class="st18" points="327.2,1251.9 327.5,1260.7 331.4,1256.2"/>
					</g>
					<g id="C-62-38">
						<text transform="matrix(0.9992 3.996804e-02 -3.996804e-02 0.9992 290.3194 1265.4696)" class="st10 st11 st12">8.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 290.9696 1231.4592)" class="st10 st11 st13">128.00 m2</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 296.6591 1240.8594)" class="st14 futura-book st13">88</text>
						<text transform="matrix(-2.998651e-02 0.9896 -0.9996 -2.998651e-02 283.3181 1234.9894)" class="st10 st11 st15">16.00</text>
						<text transform="matrix(0.9988 4.993762e-02 -4.993762e-02 0.9988 291.5198 1219.3395)" class="st10 st11 st16">8.00</text>
						<polygon class="st17" points="299.6,1251.9 295.7,1256.4 299.9,1260.7"/>
						<polygon class="st18" points="299.7,1251.9 300,1260.7 303.9,1256.2"/>
					</g>
					<g id="C-62-39">
						<text transform="matrix(0.9992 3.996804e-02 -3.996804e-02 0.9992 262.8893 1265.47)" class="st10 st11 st12">8.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 263.5405 1231.4594)" class="st10 st11 st13">128.00 m2</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 269.23 1240.8595)" class="st14 futura-book st13">89</text>
						<text transform="matrix(-2.998651e-02 0.9896 -0.9996 -2.998651e-02 255.8895 1234.9901)" class="st10 st11 st15">16.00</text>
						<text transform="matrix(0.9988 4.993762e-02 -4.993762e-02 0.9988 264.0901 1219.3398)" class="st10 st11 st16">8.00</text>
						<polygon class="st17" points="272.2,1251.9 268.3,1256.4 272.5,1260.7"/>
						<polygon class="st18" points="272.2,1251.9 272.5,1260.7 276.4,1256.2"/>
					</g>
					<g id="C-62-40">
						<text transform="matrix(0.9992 3.996804e-02 -3.996804e-02 0.9992 236.4991 1265.4698)" class="st10 st11 st12">8.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 237.1506 1231.4591)" class="st10 st11 st13">128.00 m2</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 242.8518 1240.8594)" class="st14 futura-book st13">90</text>
						<text transform="matrix(-2.998651e-02 0.9896 -0.9996 -2.998651e-02 229.5102 1234.9901)" class="st10 st11 st15">16.00</text>
						<text transform="matrix(0.9988 4.993762e-02 -4.993762e-02 0.9988 237.7095 1219.3398)" class="st10 st11 st16">8.00</text>
						<polygon class="st17" points="245.8,1251.9 241.9,1256.4 246.1,1260.7"/>
						<polygon class="st18" points="245.9,1251.9 246.2,1260.7 250.1,1256.2"/>
					</g>
					<g id="C-62-41">
						<text transform="matrix(0.9992 3.996804e-02 -3.996804e-02 0.9992 97.1 1268.0997)" class="st10 st11 st12">8.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 97.7499 1234.1093)" class="st10 st11 st13">128.00 m2</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 103.4413 1243.5094)" class="st14 futura-book st13">95</text>
						<text transform="matrix(-2.998651e-02 0.9896 -0.9996 -2.998651e-02 90.1003 1237.64)" class="st10 st11 st15">16.00</text>
						<text transform="matrix(0.9988 4.993762e-02 -4.993762e-02 0.9988 98.3002 1221.98)" class="st10 st11 st16">8.00</text>
						<polygon class="st17" points="106.4,1254.6 102.5,1259.1 106.7,1263.3"/>
						<polygon class="st18" points="106.4,1254.6 106.8,1263.3 110.7,1258.8"/>
					</g>
					<g id="C-62-42">
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 97.7501 1174.7089)" class="st10 st11 st13">140.00 m2</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 103.4416 1184.109)" class="st14 futura-book st13">96</text>
						<text transform="matrix(-2.998651e-02 0.9896 -0.9996 -2.998651e-02 90.1007 1178.2393)" class="st10 st11 st15">16.00</text>
						<text transform="matrix(0.9988 4.993762e-02 -4.993762e-02 0.9988 98.3002 1159.9093)" class="st10 st11 st16">8.00</text>
						<polygon class="st17" points="102.2,1161.5 98.3,1166 102.5,1170.3"/>
						<polygon class="st18" points="102.3,1161.5 102.6,1170.3 106.4,1165.8"/>
					</g>
					<g id="C-62-43">
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 125.9898 1174.709)" class="st10 st11 st13">140.00 m2</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 131.6813 1184.1091)" class="st14 futura-book st13">97</text>
						<text transform="matrix(-2.998651e-02 0.9896 -0.9996 -2.998651e-02 118.3402 1178.2394)" class="st10 st11 st15">16.00</text>
						<text transform="matrix(0.9988 4.993762e-02 -4.993762e-02 0.9988 126.54 1159.9202)" class="st10 st11 st16">8.00</text>
					</g>
					<g id="C-62-44">
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 153.4795 1174.7095)" class="st10 st11 st13">140.00 m2</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 159.1807 1184.1097)" class="st14 futura-book st13">98</text>
						<text transform="matrix(-2.998651e-02 0.9896 -0.9996 -2.998651e-02 145.8294 1178.2395)" class="st10 st11 st15">16.00</text>
						<text transform="matrix(0.9988 4.993762e-02 -4.993762e-02 0.9988 154.0299 1159.9102)" class="st10 st11 st16">8.00</text>
					</g>
					<g id="C-62-45">
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 180.8597 1174.7098)" class="st10 st11 st13">140.00 m2</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 186.5492 1184.109)" class="st14 futura-book st13">99</text>
						<text transform="matrix(-2.998651e-02 0.9896 -0.9996 -2.998651e-02 173.2091 1178.2402)" class="st10 st11 st15">16.00</text>
						<text transform="matrix(0.9988 4.993762e-02 -4.993762e-02 0.9988 181.3995 1159.9194)" class="st10 st11 st16">8.00</text>
					</g>
					<g id="C-62-46">
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 208.9002 1174.709)" class="st10 st11 st13">140.00 m2</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 214.5918 1184.0994)" class="st14 futura-book st13">100</text>
						<text transform="matrix(-2.998651e-02 0.9896 -0.9996 -2.998651e-02 201.2493 1178.2402)" class="st10 st11 st15">16.00</text>
						<text transform="matrix(0.9988 4.993762e-02 -4.993762e-02 0.9988 209.4404 1159.9194)" class="st10 st11 st16">8.00</text>
					</g>
					<g id="C-62-47">
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 236.0109 1174.7096)" class="st10 st11 st13">140.00 m2</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 241.7004 1184.1097)" class="st14 futura-book st13">101</text>
						<text transform="matrix(-2.998651e-02 0.9896 -0.9996 -2.998651e-02 228.3594 1178.2396)" class="st10 st11 st15">16.00</text>
						<text transform="matrix(0.9988 4.993762e-02 -4.993762e-02 0.9988 236.5601 1159.9202)" class="st10 st11 st16">8.00</text>
					</g>
					<g id="C-62-48">
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 263.1197 1174.7091)" class="st10 st11 st13">140.00 m2</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 268.8092 1184.1093)" class="st14 futura-book st13">102</text>
						<text transform="matrix(-2.998651e-02 0.9896 -0.9996 -2.998651e-02 255.4695 1178.2401)" class="st10 st11 st15">16.00</text>
						<text transform="matrix(0.9988 4.993762e-02 -4.993762e-02 0.9988 263.6599 1159.9102)" class="st10 st11 st16">8.00</text>
					</g>
					<g id="C-62-49">
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 290.3711 1174.7092)" class="st10 st11 st13">140.00 m2</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 296.0606 1184.1094)" class="st14 futura-book st13">103</text>
						<text transform="matrix(-2.998651e-02 0.9896 -0.9996 -2.998651e-02 282.7203 1178.2399)" class="st10 st11 st15">16.00</text>
						<text transform="matrix(0.9988 4.993762e-02 -4.993762e-02 0.9988 290.9102 1159.9194)" class="st10 st11 st16">8.00</text>
					</g>
					<g id="C-62-50">
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 317.6205 1174.7092)" class="st10 st11 st13">140.00 m2</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 323.31 1184.1094)" class="st14 futura-book st13">104</text>
						<text transform="matrix(-2.998651e-02 0.9896 -0.9996 -2.998651e-02 309.9691 1178.2396)" class="st10 st11 st15">16.00</text>
						<text transform="matrix(0.9988 4.993762e-02 -4.993762e-02 0.9988 318.1595 1159.91)" class="st10 st11 st16">8.00</text>
					</g>
					<g id="C-62-51">
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 344.78 1174.7094)" class="st10 st11 st13">140.00 m2</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 350.4695 1184.1095)" class="st14 futura-book st13">105</text>
						<text transform="matrix(-2.998651e-02 0.9896 -0.9996 -2.998651e-02 337.13 1178.2396)" class="st10 st11 st15">16.00</text>
						<text transform="matrix(0.9988 4.993762e-02 -4.993762e-02 0.9988 345.3199 1159.9197)" class="st10 st11 st16">8.00</text>
					</g>
					<g id="C-62-52">
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 372.2619 1174.7097)" class="st10 st11 st13">140.00 m2</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 377.9514 1184.1089)" class="st14 futura-book st13">106</text>
						<text transform="matrix(-2.998651e-02 0.9896 -0.9996 -2.998651e-02 364.6094 1178.2394)" class="st10 st11 st15">16.00</text>
						<text transform="matrix(0.9988 4.993762e-02 -4.993762e-02 0.9988 372.7897 1159.9194)" class="st10 st11 st16">8.00</text>
					</g>
					<g id="C-62-53">
						<text transform="matrix(0.9992 3.996804e-02 -3.996804e-02 0.9992 208.0295 1266.0698)" class="st10 st11 st12">8.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 208.6801 1232.069)" class="st10 st11 st13">128.00 m2</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 214.3696 1241.4691)" class="st14 futura-book st13">91</text>
						<text transform="matrix(-2.998651e-02 0.9896 -0.9996 -2.998651e-02 201.0294 1235.5992)" class="st10 st11 st15">16.00</text>
						<text transform="matrix(0.9988 4.993762e-02 -4.993762e-02 0.9988 209.2299 1219.9398)" class="st10 st11 st16">8.00</text>
					</g>
					<g id="C-62-54">
						<text transform="matrix(0.9992 3.996804e-02 -3.996804e-02 0.9992 179.9892 1267.2997)" class="st10 st11 st12">8.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 180.6391 1233.2994)" class="st10 st11 st13">128.00 m2</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 186.3286 1242.6996)" class="st14 futura-book st13">92</text>
						<text transform="matrix(-2.998651e-02 0.9896 -0.9996 -2.998651e-02 172.9888 1236.8401)" class="st10 st11 st15">16.00</text>
						<text transform="matrix(0.9988 4.993762e-02 -4.993762e-02 0.9988 181.1897 1221.1798)" class="st10 st11 st16">8.00</text>
					</g>
					<g id="C-62-55">
						<text transform="matrix(0.9992 3.996804e-02 -3.996804e-02 0.9992 152.8298 1267.3002)" class="st10 st11 st12">8.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 153.4794 1233.3091)" class="st10 st11 st13">128.00 m2</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 159.171 1242.6995)" class="st14 futura-book st13">93</text>
						<text transform="matrix(-2.998651e-02 0.9896 -0.9996 -2.998651e-02 145.8282 1236.8292)" class="st10 st11 st15">16.00</text>
						<text transform="matrix(0.9988 4.993762e-02 -4.993762e-02 0.9988 154.0298 1221.1799)" class="st10 st11 st16">8.00</text>
					</g>
					<g id="C-62-56">
						<text transform="matrix(0.9992 3.996804e-02 -3.996804e-02 0.9992 125.3195 1267.3002)" class="st10 st11 st12">8.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 125.9606 1233.2996)" class="st10 st11 st13">128.00 m2</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 131.6501 1242.6997)" class="st14 futura-book st13">94</text>
						<text transform="matrix(-2.998651e-02 0.9896 -0.9996 -2.998651e-02 118.3097 1236.8303)" class="st10 st11 st15">16.00</text>
						<text transform="matrix(0.9988 4.993762e-02 -4.993762e-02 0.9988 126.5199 1221.1802)" class="st10 st11 st16">8.00</text>
					</g>
					<g id="C-62-57">
						<text transform="matrix(9.999500e-03 -0.9999 0.9999 9.999500e-03 55.4197 1492.7097)" class="st10 st11 st23">8.00</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 21.1298 1489.5905)" class="st10 st11 st24">128.00 m2</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 30.3495 1483.6101)" class="st14 futura-book st24">09</text>
						<text transform="matrix(1 0 0 1 25.18 1500.0302)" class="st10 st11 st25">16.00</text>
						<text transform="matrix(1.999600e-02 -0.9998 0.9998 1.999600e-02 9.5204 1492.4191)" class="st10 st11 st26">8.00</text>
					</g>
					<g id="C-62-58">
						<text transform="matrix(9.999500e-03 -0.9999 0.9999 9.999500e-03 55.4197 1465.5599)" class="st10 st11 st23">8.00</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 21.1296 1462.4502)" class="st10 st11 st24">128.00 m2</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 30.3496 1456.46)" class="st14 futura-book st24">10</text>
						<text transform="matrix(1 0 0 1 25.18 1472.88)" class="st10 st11 st25">16.00</text>
						<text transform="matrix(1.999600e-02 -0.9998 0.9998 1.999600e-02 9.5203 1465.2711)" class="st10 st11 st26">8.00</text>
					</g>
					<g id="C-62-59">
						<text transform="matrix(9.999500e-03 -0.9999 0.9999 9.999500e-03 55.4198 1438.162)" class="st10 st11 st23">8.00</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 21.1296 1435.05)" class="st10 st11 st24">128.00 m2</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 30.3496 1429.0609)" class="st14 futura-book st24">11</text>
						<text transform="matrix(1 0 0 1 25.18 1445.49)" class="st10 st11 st25">16.00</text>
						<text transform="matrix(1.999600e-02 -0.9998 0.9998 1.999600e-02 9.5204 1437.8711)" class="st10 st11 st26">8.00</text>
					</g>
					<g id="C-62-60">
						<text transform="matrix(9.999500e-03 -0.9999 0.9999 9.999500e-03 55.4194 1411.3892)" class="st10 st11 st23">8.00</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 21.1297 1408.2701)" class="st10 st11 st24">128.00 m2</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 30.3497 1402.28)" class="st14 futura-book st24">12</text>
						<text transform="matrix(1 0 0 1 25.18 1418.71)" class="st10 st11 st25">16.00</text>
						<text transform="matrix(1.999600e-02 -0.9998 0.9998 1.999600e-02 9.52 1411.1001)" class="st10 st11 st26">8.00</text>
					</g>
					<g id="C-62-61">
						<text transform="matrix(9.999500e-03 -0.9999 0.9999 9.999500e-03 55.4198 1383.8605)" class="st10 st11 st23">8.00</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 21.1297 1380.7499)" class="st10 st11 st24">128.00 m2</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 30.3497 1374.7607)" class="st14 futura-book st24">13</text>
						<text transform="matrix(1 0 0 1 25.18 1391.1899)" class="st10 st11 st25">16.00</text>
						<text transform="matrix(1.999600e-02 -0.9998 0.9998 1.999600e-02 9.5203 1383.5692)" class="st10 st11 st26">8.00</text>
					</g>
					<g id="C-62-62">
						<text transform="matrix(9.999500e-03 -0.9999 0.9999 9.999500e-03 55.4197 1357.1619)" class="st10 st11 st23">8.00</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 21.1298 1354.0404)" class="st10 st11 st24">128.00 m2</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 30.3498 1348.0502)" class="st14 futura-book st24">14</text>
						<text transform="matrix(1 0 0 1 25.18 1364.48)" class="st10 st11 st25">16.00</text>
						<text transform="matrix(1.999600e-02 -0.9998 0.9998 1.999600e-02 9.5204 1356.8705)" class="st10 st11 st26">8.00</text>
					</g>
					<g id="C-62-63">
						<text transform="matrix(9.999500e-03 -0.9999 0.9999 9.999500e-03 55.4197 1329.7601)" class="st10 st11 st23">8.00</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 21.1298 1326.6403)" class="st10 st11 st24">128.00 m2</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 30.3497 1320.65)" class="st14 futura-book st24">15</text>
						<text transform="matrix(1 0 0 1 25.18 1337.08)" class="st10 st11 st25">16.00</text>
						<text transform="matrix(1.999600e-02 -0.9998 0.9998 1.999600e-02 9.5205 1329.4705)" class="st10 st11 st26">8.00</text>
					</g>
					<g id="C-62-64">
						<text transform="matrix(9.999500e-03 -0.9999 0.9999 9.999500e-03 55.4197 1302.0303)" class="st10 st11 st23">8.00</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 21.1295 1298.91)" class="st10 st11 st24">128.00 m2</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 30.35 1292.9208)" class="st14 futura-book st24">16</text>
						<text transform="matrix(1 0 0 1 25.18 1309.35)" class="st10 st11 st25">16.00</text>
						<text transform="matrix(1.999600e-02 -0.9998 0.9998 1.999600e-02 9.5205 1301.7306)" class="st10 st11 st26">8.00</text>
					</g>
					<g id="C-62-65">
						<text transform="matrix(9.999500e-03 -0.9999 0.9999 9.999500e-03 55.4296 1275.3004)" class="st10 st11 st23">8.00</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 21.1299 1272.1907)" class="st10 st11 st24">128.00 m2</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 30.3498 1266.2004)" class="st14 futura-book st24">17</text>
						<text transform="matrix(1 0 0 1 25.18 1282.63)" class="st10 st11 st25">16.00</text>
						<text transform="matrix(1.999600e-02 -0.9998 0.9998 1.999600e-02 9.5201 1275.0104)" class="st10 st11 st26">8.00</text>
					</g>
					<g id="C-62-66">
						<text transform="matrix(9.999500e-03 -0.9999 0.9999 9.999500e-03 55.4295 1248.1604)" class="st10 st11 st23">8.00</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 21.13 1245.0406)" class="st10 st11 st24">128.00 m2</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 30.3496 1239.0602)" class="st14 futura-book st24">18</text>
						<text transform="matrix(1 0 0 1 25.17 1255.48)" class="st10 st11 st25">16.00</text>
						<text transform="matrix(1.999600e-02 -0.9998 0.9998 1.999600e-02 9.5203 1247.8701)" class="st10 st11 st26">8.00</text>
					</g>
					<g id="C-62-67">
						<text transform="matrix(9.999500e-03 -0.9999 0.9999 9.999500e-03 55.4194 1220.0203)" class="st10 st11 st23">8.00</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 21.1298 1216.9001)" class="st10 st11 st24">128.00 m2</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 30.3499 1210.9207)" class="st14 futura-book st24">19</text>
						<text transform="matrix(1 0 0 1 25.18 1227.35)" class="st10 st11 st25">16.00</text>
						<text transform="matrix(1.999600e-02 -0.9998 0.9998 1.999600e-02 9.52 1219.7297)" class="st10 st11 st26">8.00</text>
					</g>
					<g id="C-62-68">
						<text transform="matrix(9.999500e-03 -0.9999 0.9999 9.999500e-03 55.4195 1193.5013)" class="st10 st11 st23">8.00</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 21.13 1190.3907)" class="st10 st11 st24">128.00 m2</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 30.3499 1184.4006)" class="st14 futura-book st24">20</text>
						<text transform="matrix(1 0 0 1 25.18 1200.83)" class="st10 st11 st25">16.00</text>
						<text transform="matrix(1.999600e-02 -0.9998 0.9998 1.999600e-02 9.52 1193.2108)" class="st10 st11 st26">8.00</text>
					</g>
					<g id="C-62-69">
						<text transform="matrix(9.999500e-03 -0.9999 0.9999 9.999500e-03 55.4194 1165.9688)" class="st10 st11 st23">8.00</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 21.13 1162.8705)" class="st10 st11 st24">128.00 m2</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 30.3499 1156.8804)" class="st14 futura-book st24">21</text>
						<text transform="matrix(1 0 0 1 25.18 1173.3101)" class="st10 st11 st25">16.00</text>
						<text transform="matrix(1.999600e-02 -0.9998 0.9998 1.999600e-02 9.5205 1165.6917)" class="st10 st11 st26">8.00</text>
					</g>
					<g id="C-62-70">
						<text transform="matrix(9.999500e-03 -0.9999 0.9999 9.999500e-03 55.4195 1139.151)" class="st10 st11 st23">8.00</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 21.1298 1136.0505)" class="st10 st11 st24">128.00 m2</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 30.3498 1130.0604)" class="st14 futura-book st24">22</text>
						<text transform="matrix(1 0 0 1 25.18 1146.49)" class="st10 st11 st25">16.00</text>
						<text transform="matrix(1.999600e-02 -0.9998 0.9998 1.999600e-02 9.5204 1138.8601)" class="st10 st11 st26">8.00</text>
					</g>
					<g id="C-62-71">
						<text transform="matrix(9.999500e-03 -0.9999 0.9999 9.999500e-03 55.4198 1111.7708)" class="st10 st11 st23">8.00</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 21.13 1108.6603)" class="st10 st11 st24">128.00 m2</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 30.3496 1102.6808)" class="st14 futura-book st24">23</text>
						<text transform="matrix(1 0 0 1 25.18 1119.1)" class="st10 st11 st25">16.00</text>
						<text transform="matrix(1.999600e-02 -0.9998 0.9998 1.999600e-02 9.52 1111.4796)" class="st10 st11 st26">8.00</text>
					</g>
					<g id="C-62-72">
						<text transform="matrix(9.999500e-03 -0.9999 0.9999 9.999500e-03 55.4195 1079.9215)" class="st10 st11 st23">10.92</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 18.1498 1079.99)" class="st10 st11 st24">174.14 m2</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 27.3695 1074.0105)" class="st14 futura-book st24">24</text>
						<text transform="matrix(1 0 0 1 25.18 1091.33)" class="st10 st11 st25">16.00</text>
						<text transform="matrix(1 0 0 1 25.18 1063.72)" class="st10 st11 st25">16.00</text>
						<text transform="matrix(1.999600e-02 -0.9998 0.9998 1.999600e-02 9.5202 1079.6315)" class="st10 st11 st26">10.85</text>
						<polygon class="st17" points="46.7,1072.7 42.6,1077 46.7,1081.4"/>
						<polygon class="st18" points="46.7,1072.7 46.8,1081.4 50.8,1077"/>
					</g>
					<g id="C-62-73">
						<text transform="matrix(3.996804e-02 -0.9992 0.9992 3.996804e-02 55.3296 1550.3003)" class="st10 st11 st12">8.39</text>
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 17.4692 1546.3593)" class="st10 st11 st13">131.11 m2</text>
						<polygon class="st17" points="46.3,1540.5 42.3,1544.9 46.4,1549.2"/>
						<polygon class="st18" points="46.3,1540.5 46.4,1549.2 50.4,1544.9"/>
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 26.8694 1540.6698)" class="st14 futura-book st13">07</text>
						<text transform="matrix(0.9896 2.998651e-02 -2.998651e-02 0.9996 24.8593 1556.9701)" class="st10 st11 st15">16.00</text>
						<text transform="matrix(4.993762e-02 -0.9988 0.9988 4.993762e-02 9.2199 1548.8798)" class="st10 st11 st16">8.00</text>
					</g>
					<g id="C-62-74">
						<text transform="matrix(9.999500e-03 -0.9999 0.9999 9.999500e-03 573.0995 1527.4114)" class="st10 st11 st23">8.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 535.0095 1526.3594)" class="st10 st11 st13">128.00 m2</text>
						<polygon class="st17" points="563.9,1518.6 560,1523.1 564.2,1527.3"/>
						<polygon class="st18" points="564,1518.6 564.3,1527.3 568.2,1522.9"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 544.2692 1520.4393)" class="st14 futura-book st13">01</text>
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 542.5991 1533.7493)" class="st10 st11 st13">16.00</text>
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 542.2491 1513.5699)" class="st10 st11 st13">16.00</text>
						<text transform="matrix(1.999600e-02 -0.9998 0.9998 1.999600e-02 526.9501 1527.2394)" class="st10 st11 st26">8.00</text>
					</g>
					<g id="C-62-75">
						<text transform="matrix(-9.950372e-02 -0.995 0.995 -9.950372e-02 1002.8808 847.3107)" class="st10 st11 st27">8.00</text>
						<text transform="matrix(0.9927 -0.1203 0.1203 0.9927 955.1595 852.1201)" class="st10 st11 st28">180.00 m2</text>
						<text transform="matrix(0.9927 -0.1203 0.1203 0.9927 963.71 845.2099)" class="st14 futura-book st28">10</text>
						<text transform="matrix(0.9949 -0.1005 0.1005 0.9949 960.9001 838.4402)" class="st10 st11 st29">22.50</text>
						<text transform="matrix(-8.963770e-02 -0.996 0.996 -8.963770e-02 937.5089 854.8885)" class="st10 st11 st30">8.00</text>
					</g>
					<g id="C-62-76">
						<text transform="matrix(-9.950372e-02 -0.995 0.995 -9.950372e-02 998.7604 820.0287)" class="st10 st11 st27">8.00</text>
						<text transform="matrix(0.9927 -0.1203 0.1203 0.9927 951.0396 824.8306)" class="st10 st11 st28">180.00 m2</text>
						<text transform="matrix(0.9927 -0.1203 0.1203 0.9927 959.5896 817.9205)" class="st14 futura-book st28">11</text>
						<text transform="matrix(0.9949 -0.1005 0.1005 0.9949 956.7802 811.1605)" class="st10 st11 st29">22.50</text>
						<text transform="matrix(-8.963770e-02 -0.996 0.996 -8.963770e-02 933.3889 827.5992)" class="st10 st11 st30">8.00</text>
					</g>
					<g id="C-62-77">
						<text transform="matrix(-9.950372e-02 -0.995 0.995 -9.950372e-02 996.3406 792.7493)" class="st10 st11 st27">8.00</text>
						<text transform="matrix(0.9927 -0.1203 0.1203 0.9927 948.62 797.5603)" class="st10 st11 st28">180.00 m2</text>
						<text transform="matrix(0.9927 -0.1203 0.1203 0.9927 957.1699 790.6502)" class="st14 futura-book st28">12</text>
						<text transform="matrix(0.9949 -0.1005 0.1005 0.9949 954.3598 783.8798)" class="st10 st11 st29">22.50</text>
						<text transform="matrix(-8.963770e-02 -0.996 0.996 -8.963770e-02 930.9788 800.3187)" class="st10 st11 st30">8.00</text>
					</g>
					<g id="C-62-78">
						<text transform="matrix(-9.950372e-02 -0.995 0.995 -9.950372e-02 993.6508 765.6599)" class="st10 st11 st27">8.00</text>
						<text transform="matrix(0.9927 -0.1203 0.1203 0.9927 945.9398 770.4702)" class="st10 st11 st28">180.00 m2</text>
						<text transform="matrix(0.9927 -0.1203 0.1203 0.9927 954.48 763.5602)" class="st14 futura-book st28">13</text>
						<text transform="matrix(0.9949 -0.1005 0.1005 0.9949 951.6701 756.8002)" class="st10 st11 st29">22.50</text>
						<text transform="matrix(-8.963770e-02 -0.996 0.996 -8.963770e-02 928.2793 773.2388)" class="st10 st11 st30">8.00</text>
					</g>
					<g id="C-62-79">
						<text transform="matrix(-9.950372e-02 -0.995 0.995 -9.950372e-02 989.8005 738.6197)" class="st10 st11 st27">8.00</text>
						<text transform="matrix(0.9927 -0.1203 0.1203 0.9927 942.0799 743.4099)" class="st10 st11 st28">180.00 m2</text>
						<text transform="matrix(0.9927 -0.1203 0.1203 0.9927 950.6299 736.4998)" class="st14 futura-book st28">14</text>
						<text transform="matrix(0.9949 -0.1005 0.1005 0.9949 947.8199 729.7504)" class="st10 st11 st29">22.50</text>
						<text transform="matrix(-8.963770e-02 -0.996 0.996 -8.963770e-02 924.429 746.1899)" class="st10 st11 st30">8.00</text>
					</g>
					<g id="C-62-80">
						<text transform="matrix(-9.950372e-02 -0.995 0.995 -9.950372e-02 987.1108 711.3398)" class="st10 st11 st27">8.00</text>
						<text transform="matrix(0.9927 -0.1203 0.1203 0.9927 939.3895 716.1301)" class="st10 st11 st28">180.00 m2</text>
						<text transform="matrix(0.9927 -0.1203 0.1203 0.9927 947.9299 709.23)" class="st14 futura-book st28">15</text>
						<text transform="matrix(0.9949 -0.1005 0.1005 0.9949 945.1197 702.4597)" class="st10 st11 st29">22.50</text>
						<text transform="matrix(-8.963770e-02 -0.996 0.996 -8.963770e-02 921.739 718.9091)" class="st10 st11 st30">8.00</text>
					</g>
					<g id="C-62-81">
						<text transform="matrix(-9.950372e-02 -0.995 0.995 -9.950372e-02 984.4203 684.1504)" class="st10 st11 st27">8.00</text>
						<text transform="matrix(0.9927 -0.1203 0.1203 0.9927 936.7001 688.9506)" class="st10 st11 st28">180.00 m2</text>
						<text transform="matrix(0.9927 -0.1203 0.1203 0.9927 945.25 682.0405)" class="st14 futura-book st28">16</text>
						<text transform="matrix(0.9949 -0.1005 0.1005 0.9949 942.44 675.2799)" class="st10 st11 st29">22.50</text>
						<text transform="matrix(-8.963770e-02 -0.996 0.996 -8.963770e-02 919.059 691.7195)" class="st10 st11 st30">8.00</text>
					</g>
					<g id="C-62-82">
						<text transform="matrix(-9.950372e-02 -0.995 0.995 -9.950372e-02 980.5605 657.0503)" class="st10 st11 st27">8.00</text>
						<text transform="matrix(0.9927 -0.1203 0.1203 0.9927 932.8397 661.85)" class="st10 st11 st28">180.00 m2</text>
						<text transform="matrix(0.9927 -0.1203 0.1203 0.9927 941.3896 654.9399)" class="st14 futura-book st28">17</text>
						<text transform="matrix(0.9949 -0.1005 0.1005 0.9949 938.5798 648.1801)" class="st10 st11 st29">22.50</text>
						<text transform="matrix(-8.963770e-02 -0.996 0.996 -8.963770e-02 915.1888 664.6293)" class="st10 st11 st30">8.00</text>
					</g>
					<g id="C-62-83">
						<text transform="matrix(-9.950372e-02 -0.995 0.995 -9.950372e-02 977.8705 629.9197)" class="st10 st11 st27">8.00</text>
						<text transform="matrix(0.9927 -0.1203 0.1203 0.9927 930.1495 634.71)" class="st10 st11 st28">180.00 m2</text>
						<text transform="matrix(0.9927 -0.1203 0.1203 0.9927 938.6995 627.7999)" class="st14 futura-book st28">18</text>
						<text transform="matrix(0.9949 -0.1005 0.1005 0.9949 935.8898 621.0396)" class="st10 st11 st29">22.50</text>
						<text transform="matrix(-8.963770e-02 -0.996 0.996 -8.963770e-02 912.5089 637.4888)" class="st10 st11 st30">8.00</text>
					</g>
					<g id="C-62-84">
						<text transform="matrix(-9.950372e-02 -0.995 0.995 -9.950372e-02 975.6505 603.6508)" class="st10 st11 st27">8.00</text>
						<text transform="matrix(0.9927 -0.1203 0.1203 0.9927 927.9296 608.4503)" class="st10 st11 st28">180.00 m2</text>
						<text transform="matrix(0.9927 -0.1203 0.1203 0.9927 936.4697 601.5404)" class="st14 futura-book st28">19</text>
						<text transform="matrix(0.9949 -0.1005 0.1005 0.9949 933.6599 594.7801)" class="st10 st11 st29">22.50</text>
						<text transform="matrix(-8.963770e-02 -0.996 0.996 -8.963770e-02 910.2789 611.2294)" class="st10 st11 st30">8.00</text>
						<polygon class="st17" points="958,592.9 954.6,597.8 959.2,601.6"/>
						<polygon class="st18" points="958,592.9 959.3,601.6 962.7,596.7"/>
					</g>
					<g id="C-62-85">
						<text transform="matrix(-9.950372e-02 -0.995 0.995 -9.950372e-02 972.5905 575.5188)" class="st10 st11 st27">8.00</text>
						<text transform="matrix(0.9927 -0.1203 0.1203 0.9927 924.8596 580.3106)" class="st10 st11 st28">180.00 m2</text>
						<text transform="matrix(0.9927 -0.1203 0.1203 0.9927 933.4095 573.4005)" class="st14 futura-book st28">20</text>
						<text transform="matrix(0.9949 -0.1005 0.1005 0.9949 930.6 566.6395)" class="st10 st11 st29">22.50</text>
						<text transform="matrix(-8.963770e-02 -0.996 0.996 -8.963770e-02 907.2188 583.0897)" class="st10 st11 st30">8.00</text>
						<polygon class="st17" points="953.5,565.8 950.1,570.7 954.7,574.4"/>
						<polygon class="st18" points="953.5,565.8 954.8,574.4 958.2,569.5"/>
					</g>
					<g id="C-62-86">
						<text transform="matrix(-9.950372e-02 -0.995 0.995 -9.950372e-02 969.1005 548.2896)" class="st10 st11 st27">8.00</text>
						<text transform="matrix(0.9927 -0.1203 0.1203 0.9927 921.3796 553.0901)" class="st10 st11 st28">180.00 m2</text>
						<text transform="matrix(0.9927 -0.1203 0.1203 0.9927 929.9296 546.1801)" class="st14 futura-book st28">21</text>
						<text transform="matrix(0.9949 -0.1005 0.1005 0.9949 927.1198 539.4198)" class="st10 st11 st29">22.50</text>
						<text transform="matrix(-8.963770e-02 -0.996 0.996 -8.963770e-02 903.7391 555.8701)" class="st10 st11 st30">8.00</text>
						<polygon class="st17" points="948.6,538.6 945.2,543.5 949.8,547.3"/>
						<polygon class="st18" points="948.6,538.6 949.9,547.3 953.3,542.4"/>
					</g>
					<g id="C-62-87">
						<text transform="matrix(-9.950372e-02 -0.995 0.995 -9.950372e-02 966.0807 521.0505)" class="st10 st11 st27">8.00</text>
						<text transform="matrix(0.9927 -0.1203 0.1203 0.9927 918.3599 525.8405)" class="st10 st11 st28">180.00 m2</text>
						<text transform="matrix(0.9927 -0.1203 0.1203 0.9927 926.9099 518.9304)" class="st14 futura-book st28">22</text>
						<text transform="matrix(0.9949 -0.1005 0.1005 0.9949 924.0999 512.1703)" class="st10 st11 st29">22.50</text>
						<text transform="matrix(-8.963770e-02 -0.996 0.996 -8.963770e-02 900.7094 528.6297)" class="st10 st11 st30">8.00</text>
					</g>
					<g id="C-62-88">
						<text transform="matrix(-9.950372e-02 -0.995 0.995 -9.950372e-02 962.5602 494.05)" class="st10 st11 st27">8.00</text>
						<text transform="matrix(0.9927 -0.1203 0.1203 0.9927 914.8398 498.8403)" class="st10 st11 st28">180.00 m2</text>
						<text transform="matrix(0.9927 -0.1203 0.1203 0.9927 923.3799 491.9304)" class="st14 futura-book st28">23</text>
						<text transform="matrix(0.9949 -0.1005 0.1005 0.9949 920.5701 485.1696)" class="st10 st11 st29">22.50</text>
						<text transform="matrix(-8.963770e-02 -0.996 0.996 -8.963770e-02 897.1891 501.6197)" class="st10 st11 st30">8.00</text>
					</g>
					<g id="C-62-89">
						<text transform="matrix(-9.950372e-02 -0.995 0.995 -9.950372e-02 958.9808 466.9907)" class="st10 st11 st27">8.00</text>
						<text transform="matrix(0.9927 -0.1203 0.1203 0.9927 911.2598 471.7805)" class="st10 st11 st28">180.00 m2</text>
						<text transform="matrix(0.9927 -0.1203 0.1203 0.9927 919.8098 464.8704)" class="st14 futura-book st28">24</text>
						<text transform="matrix(0.9949 -0.1005 0.1005 0.9949 917.0001 458.1101)" class="st10 st11 st29">22.50</text>
						<text transform="matrix(-8.963770e-02 -0.996 0.996 -8.963770e-02 893.6191 474.5691)" class="st10 st11 st30">8.00</text>
					</g>
					<g id="C-62-90">
						<text transform="matrix(-9.950372e-02 -0.995 0.995 -9.950372e-02 955.8406 439.75)" class="st10 st11 st27">8.00</text>
						<text transform="matrix(0.9927 -0.1203 0.1203 0.9927 908.1198 444.5405)" class="st10 st11 st28">180.00 m2</text>
						<text transform="matrix(0.9927 -0.1203 0.1203 0.9927 916.6597 437.6405)" class="st14 futura-book st28">25</text>
						<text transform="matrix(0.9949 -0.1005 0.1005 0.9949 913.85 430.8698)" class="st10 st11 st29">22.50</text>
						<text transform="matrix(-8.963770e-02 -0.996 0.996 -8.963770e-02 890.469 447.3297)" class="st10 st11 st30">8.00</text>
					</g>
					<g id="C-62-91">
						<text transform="matrix(-9.950372e-02 -0.995 0.995 -9.950372e-02 954.0106 412.6609)" class="st10 st11 st27">8.00</text>
						<text transform="matrix(0.9927 -0.1203 0.1203 0.9927 906.2896 417.4506)" class="st10 st11 st28">180.00 m2</text>
						<text transform="matrix(0.9927 -0.1203 0.1203 0.9927 914.84 410.5405)" class="st14 futura-book st28">26</text>
						<text transform="matrix(0.9949 -0.1005 0.1005 0.9949 912.0299 403.7799)" class="st10 st11 st29">22.50</text>
						<text transform="matrix(-8.963770e-02 -0.996 0.996 -8.963770e-02 888.6388 420.2284)" class="st10 st11 st30">8.00</text>
					</g>
					<g id="C-62-92">
						<text transform="matrix(-9.950372e-02 -0.995 0.995 -9.950372e-02 949.8105 385.7205)" class="st10 st11 st27">8.00</text>
						<text transform="matrix(0.9927 -0.1203 0.1203 0.9927 902.0895 390.5103)" class="st10 st11 st28">180.00 m2</text>
						<text transform="matrix(0.9927 -0.1203 0.1203 0.9927 910.6397 383.61)" class="st14 futura-book st28">27</text>
						<text transform="matrix(0.9949 -0.1005 0.1005 0.9949 907.8301 376.8498)" class="st10 st11 st29">22.50</text>
						<text transform="matrix(-8.963770e-02 -0.996 0.996 -8.963770e-02 884.439 393.2992)" class="st10 st11 st30">8.00</text>
					</g>
					<g id="C-62-93">
						<text transform="matrix(-9.950372e-02 -0.995 0.995 -9.950372e-02 946.6706 358.3306)" class="st10 st11 st27">8.00</text>
						<text transform="matrix(0.9927 -0.1203 0.1203 0.9927 898.9496 363.1207)" class="st10 st11 st28">180.00 m2</text>
						<text transform="matrix(0.9927 -0.1203 0.1203 0.9927 907.4998 356.2204)" class="st14 futura-book st28">28</text>
						<text transform="matrix(0.9949 -0.1005 0.1005 0.9949 904.6899 349.4505)" class="st10 st11 st29">22.50</text>
						<text transform="matrix(-8.963770e-02 -0.996 0.996 -8.963770e-02 881.2993 365.8981)" class="st10 st11 st30">8.00</text>
					</g>
					<g id="C-62-94">
						<text transform="matrix(-9.950372e-02 -0.995 0.995 -9.950372e-02 943.6107 331.5098)" class="st10 st11 st27">8.00</text>
						<text transform="matrix(0.9927 -0.1203 0.1203 0.9927 895.8796 336.3001)" class="st10 st11 st28">180.00 m2</text>
						<text transform="matrix(0.9927 -0.1203 0.1203 0.9927 904.4298 329.3998)" class="st14 futura-book st28">29</text>
						<text transform="matrix(0.9949 -0.1005 0.1005 0.9949 901.6201 322.63)" class="st10 st11 st29">22.50</text>
						<text transform="matrix(-8.963770e-02 -0.996 0.996 -8.963770e-02 878.2292 339.0809)" class="st10 st11 st30">8.00</text>
					</g>
					<g id="C-62-95">
						<text transform="matrix(-9.950372e-02 -0.995 0.995 -9.950372e-02 942.1606 304.0294)" class="st10 st11 st27">8.00</text>
						<text transform="matrix(0.9927 -0.1203 0.1203 0.9927 894.4397 308.8304)" class="st10 st11 st28">180.00 m2</text>
						<text transform="matrix(0.9927 -0.1203 0.1203 0.9927 902.9796 301.9304)" class="st14 futura-book st28">30</text>
						<text transform="matrix(0.9949 -0.1005 0.1005 0.9949 900.17 295.1602)" class="st10 st11 st29">22.50</text>
						<text transform="matrix(-8.963770e-02 -0.996 0.996 -8.963770e-02 876.7888 311.6092)" class="st10 st11 st30">8.00</text>
					</g>
					<g id="C-62-96">
						<text transform="matrix(-9.950372e-02 -0.995 0.995 -9.950372e-02 936.4305 266.2206)" class="st10 st11 st27">16.59</text>
						<text transform="matrix(0.9927 -0.1203 0.1203 0.9927 889.7599 279.6601)" class="st10 st11 st28">276.31 m2</text>
						<text transform="matrix(0.9927 -0.1203 0.1203 0.9927 898.3098 272.75)" class="st14 futura-book st28">31</text>
						<text transform="matrix(0.8884 -0.4392 0.4392 0.8984 896.65 257.1796)" class="st10 st11 st21">24.09</text>
						<text transform="matrix(-8.963770e-02 -0.996 0.996 -8.963770e-02 872.1191 282.4397)" class="st10 st11 st30">7.98</text>
						<polygon class="st17" points="919.1,264.3 915.7,269.1 920.4,272.9"/>
						<polygon class="st18" points="919.2,264.3 920.4,272.9 923.8,268"/>
					</g>
					<g id="C-62-97">
						<text transform="matrix(-9.950372e-02 -0.995 0.995 -9.950372e-02 1005.7607 875.3194)" class="st10 st11 st27">10.45</text>
						<text transform="matrix(0.9927 -0.1203 0.1203 0.9927 958.6497 879.3806)" class="st10 st11 st28">207.55 m2</text>
						<polygon class="st17" points="986.5,868.4 983.1,873.3 987.7,877"/>
						<polygon class="st18" points="986.5,868.4 987.8,877 991.1,872.1"/>
						<text transform="matrix(0.9927 -0.1203 0.1203 0.9927 967.1898 872.4697)" class="st14 futura-book st28">09</text>
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 967.6295 887.9798)" class="st10 st11 st13">22.63</text>
						<text transform="matrix(0.9949 -0.1005 0.1005 0.9949 964.3799 865.71)" class="st10 st11 st29">22.50</text>
						<text transform="matrix(-8.963770e-02 -0.996 0.996 -8.963770e-02 941.1489 882.3094)" class="st10 st11 st30">8.00</text>
					</g>
					<g id="C-62-98">
						<text transform="matrix(9.999500e-03 -0.9999 0.9999 9.999500e-03 658.5395 1159.511)" class="st10 st11 st23">9.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 624.5696 1158.4601)" class="st10 st11 st13">143.49 m2</text>
						<polygon class="st17" points="619,1150.7 615.1,1155.2 619.3,1159.4"/>
						<polygon class="st18" points="619.1,1150.7 619.4,1159.4 623.3,1155"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 633.8195 1152.5499)" class="st14 futura-book st13">39</text>
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 628.0497 1165.8597)" class="st10 st11 st13">16.00</text>
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 627.6997 1145.6794)" class="st10 st11 st13">16.00</text>
						<text transform="matrix(1.999600e-02 -0.9998 0.9998 1.999600e-02 612.3999 1159.3392)" class="st10 st11 st26">8.94</text>
					</g>
					<g id="C-62-99">
						<text transform="matrix(9.999500e-03 -0.9999 0.9999 9.999500e-03 798.8696 1157.67)" class="st10 st11 st23">8.06</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 764.8892 1156.6194)" class="st10 st11 st13">128.50 m2</text>
						<polygon class="st17" points="759.4,1148.9 755.5,1153.4 759.7,1157.6"/>
						<polygon class="st18" points="759.4,1148.9 759.7,1157.6 763.6,1153.1"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 774.149 1150.7101)" class="st14 futura-book st13">54</text>
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 768.3798 1164.0198)" class="st10 st11 st13">16.00</text>
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 768.0299 1143.8297)" class="st10 st11 st13">16.00</text>
						<text transform="matrix(1.999600e-02 -0.9998 0.9998 1.999600e-02 752.7303 1157.5005)" class="st10 st11 st26">8.00</text>
					</g>
					<g id="C-62-100">
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 752.5391 1105.1299)" class="st10 st11 st23">8.00</text>
						<text transform="matrix(9.999500e-03 0.9999 -0.9999 9.999500e-03 753.3282 1068.6398)" class="st10 st11 st13">128.00 m2</text>
						<text transform="matrix(9.999500e-03 0.9999 -0.9999 9.999500e-03 759.2511 1077.8895)" class="st14 futura-book st13">64</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 745.8509 1074.8994)" class="st10 st11 st13">16.00</text>
						<text transform="matrix(0.9998 1.999600e-02 -1.999600e-02 0.9998 752.6204 1059.1201)" class="st10 st11 st26">8.00</text>
					</g>
					<g id="C-62-101">
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 779.6294 1105.1293)" class="st10 st11 st23">8.00</text>
						<text transform="matrix(9.999500e-03 0.9999 -0.9999 9.999500e-03 780.4311 1068.6295)" class="st10 st11 st13">128.00 m2</text>
						<text transform="matrix(9.999500e-03 0.9999 -0.9999 9.999500e-03 786.3404 1077.8892)" class="st14 futura-book st13">65</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 772.9401 1074.8998)" class="st10 st11 st13">16.00</text>
						<text transform="matrix(0.9998 1.999600e-02 -1.999600e-02 0.9998 779.7108 1059.1199)" class="st10 st11 st26">8.00</text>
					</g>
					<g id="C-62-102">
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 807.5291 1105.1398)" class="st10 st11 st23">8.00</text>
						<text transform="matrix(9.999500e-03 0.9999 -0.9999 9.999500e-03 808.329 1068.6395)" class="st10 st11 st13">128.00 m2</text>
						<text transform="matrix(9.999500e-03 0.9999 -0.9999 9.999500e-03 814.2402 1077.8895)" class="st14 futura-book st13">66</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 800.8419 1074.8995)" class="st10 st11 st13">16.00</text>
						<text transform="matrix(0.9998 1.999600e-02 -1.999600e-02 0.9998 807.6011 1059.12)" class="st10 st11 st26">8.00</text>
					</g>
					<g id="C-62-103">
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 834.9494 1105.1395)" class="st10 st11 st23">8.00</text>
						<text transform="matrix(9.999500e-03 0.9999 -0.9999 9.999500e-03 835.7504 1068.6398)" class="st10 st11 st13">128.00 m2</text>
						<text transform="matrix(9.999500e-03 0.9999 -0.9999 9.999500e-03 841.6714 1077.8994)" class="st14 futura-book st13">67</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 828.271 1074.8993)" class="st10 st11 st13">16.00</text>
						<text transform="matrix(0.9998 1.999600e-02 -1.999600e-02 0.9998 835.0411 1059.1207)" class="st10 st11 st26">8.00</text>
					</g>
					<g id="C-62-104">
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 862.6598 1105.1393)" class="st10 st11 st23">8.00</text>
						<text transform="matrix(9.999500e-03 0.9999 -0.9999 9.999500e-03 863.4509 1068.6392)" class="st10 st11 st13">128.00 m2</text>
						<text transform="matrix(9.999500e-03 0.9999 -0.9999 9.999500e-03 869.3699 1077.889)" class="st14 futura-book st13">68</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 855.9697 1074.8989)" class="st10 st11 st13">16.00</text>
						<text transform="matrix(0.9998 1.999600e-02 -1.999600e-02 0.9998 862.741 1059.12)" class="st10 st11 st26">8.00</text>
					</g>
					<g id="C-62-105">
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 889.7697 1105.13)" class="st10 st11 st23">8.00</text>
						<text transform="matrix(9.999500e-03 0.9999 -0.9999 9.999500e-03 890.5695 1068.6394)" class="st10 st11 st13">128.00 m2</text>
						<text transform="matrix(9.999500e-03 0.9999 -0.9999 9.999500e-03 896.4885 1077.899)" class="st14 futura-book st13">69</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 883.0784 1074.8995)" class="st10 st11 st13">16.00</text>
						<text transform="matrix(0.9998 1.999600e-02 -1.999600e-02 0.9998 889.8508 1059.1299)" class="st10 st11 st26">8.00</text>
						<polygon class="st17" points="897.5,1092.6 893.5,1097.1 897.7,1101.3"/>
						<polygon class="st18" points="897.5,1092.6 897.8,1101.3 901.7,1096.8"/>
					</g>
					<g id="C-62-106">
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 917.2495 1105.1295)" class="st10 st11 st23">8.00</text>
						<text transform="matrix(9.999500e-03 0.9999 -0.9999 9.999500e-03 918.0396 1068.6392)" class="st10 st11 st13">128.00 m2</text>
						<text transform="matrix(9.999500e-03 0.9999 -0.9999 9.999500e-03 923.9605 1077.889)" class="st14 futura-book st13">70</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 910.5602 1074.8999)" class="st10 st11 st13">16.00</text>
						<text transform="matrix(0.9998 1.999600e-02 -1.999600e-02 0.9998 917.3309 1059.1305)" class="st10 st11 st26">8.00</text>
						<polygon class="st17" points="924.9,1092.6 921,1097.1 925.2,1101.3"/>
						<polygon class="st18" points="925,1092.6 925.2,1101.3 929.2,1096.8"/>
					</g>
					<g id="C-62-107">
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 945.2695 1105.1294)" class="st10 st11 st23">8.00</text>
						<text transform="matrix(9.999500e-03 0.9999 -0.9999 9.999500e-03 946.0703 1068.6392)" class="st10 st11 st13">128.00 m2</text>
						<text transform="matrix(9.999500e-03 0.9999 -0.9999 9.999500e-03 951.9796 1077.8989)" class="st14 futura-book st13">71</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 938.5792 1074.8998)" class="st10 st11 st13">16.00</text>
						<text transform="matrix(0.9998 1.999600e-02 -1.999600e-02 0.9998 945.3503 1059.1205)" class="st10 st11 st26">8.00</text>
						<polygon class="st17" points="953,1092.6 949,1097.1 953.2,1101.3"/>
						<polygon class="st18" points="953,1092.6 953.3,1101.3 957.2,1096.8"/>
					</g>
					<g id="C-62-108">
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 972.0793 1105.1396)" class="st10 st11 st23">8.00</text>
						<text transform="matrix(9.999500e-03 0.9999 -0.9999 9.999500e-03 972.8705 1068.6398)" class="st10 st11 st13">128.00 m2</text>
						<text transform="matrix(9.999500e-03 0.9999 -0.9999 9.999500e-03 978.7896 1077.8994)" class="st14 futura-book st13">72</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 965.3892 1074.8994)" class="st10 st11 st13">16.00</text>
						<text transform="matrix(0.9998 1.999600e-02 -1.999600e-02 0.9998 972.1612 1059.1302)" class="st10 st11 st26">8.00</text>
						<polygon class="st17" points="979.8,1092.6 975.8,1097.1 980,1101.3"/>
						<polygon class="st18" points="979.8,1092.6 980.1,1101.3 984,1096.8"/>
					</g>
					<g id="C-62-109">
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 999.5094 1105.1395)" class="st10 st11 st23">8.00</text>
						<text transform="matrix(9.999500e-03 0.9999 -0.9999 9.999500e-03 1000.2996 1068.6399)" class="st10 st11 st13">128.00 m2</text>
						<text transform="matrix(9.999500e-03 0.9999 -0.9999 9.999500e-03 1006.2205 1077.8898)" class="st14 futura-book st13">73</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 992.8105 1074.8992)" class="st10 st11 st13">16.00</text>
						<text transform="matrix(0.9998 1.999600e-02 -1.999600e-02 0.9998 999.5809 1059.1199)" class="st10 st11 st26">8.00</text>
						<polygon class="st17" points="1007.2,1092.6 1003.3,1097.1 1007.5,1101.3"/>
						<polygon class="st18" points="1007.2,1092.6 1007.5,1101.3 1011.4,1096.8"/>
					</g>
					<g id="C-62-110">
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 1025.4297 1105.1301)" class="st10 st11 st23">8.00</text>
						<text transform="matrix(9.999500e-03 0.9999 -0.9999 9.999500e-03 1026.2208 1068.6394)" class="st10 st11 st13">128.00 m2</text>
						<text transform="matrix(9.999500e-03 0.9999 -0.9999 9.999500e-03 1032.1399 1077.899)" class="st14 futura-book st13">74</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 1018.7395 1074.8997)" class="st10 st11 st13">16.00</text>
						<text transform="matrix(0.9998 1.999600e-02 -1.999600e-02 0.9998 1025.5109 1059.1199)" class="st10 st11 st26">8.00</text>
						<polygon class="st17" points="1033.1,1092.6 1029.2,1097.1 1033.4,1101.3"/>
						<polygon class="st18" points="1033.2,1092.6 1033.4,1101.3 1037.3,1096.8"/>
					</g>
					<g id="C-62-111">
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 1052.8198 1105.1296)" class="st10 st11 st23">8.00</text>
						<text transform="matrix(9.999500e-03 0.9999 -0.9999 9.999500e-03 1053.6108 1068.639)" class="st10 st11 st13">128.00 m2</text>
						<text transform="matrix(9.999500e-03 0.9999 -0.9999 9.999500e-03 1059.5299 1077.8997)" class="st14 futura-book st13">75</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 1046.1295 1074.899)" class="st10 st11 st13">16.00</text>
						<text transform="matrix(0.9998 1.999600e-02 -1.999600e-02 0.9998 1052.9011 1059.1206)" class="st10 st11 st26">8.00</text>
						<polygon class="st17" points="1060.5,1092.6 1056.6,1097.1 1060.8,1101.3"/>
						<polygon class="st18" points="1060.6,1092.6 1060.8,1101.3 1064.7,1096.8"/>
					</g>
					<g id="C-62-112">
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 1276.7098 947.2199)" class="st10 st11 st23">8.00</text>
						<text transform="matrix(9.999500e-03 0.9999 -0.9999 9.999500e-03 1277.5006 908.6393)" class="st10 st11 st13">140.00 m2</text>
						<text transform="matrix(9.999500e-03 0.9999 -0.9999 9.999500e-03 1283.4099 917.899)" class="st14 futura-book st13">99</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 1270.0101 914.9091)" class="st10 st11 st13">17.50</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 1289.011 914.9097)" class="st10 st11 st13">17.50</text>
						<text transform="matrix(0.9998 1.999600e-02 -1.999600e-02 0.9998 1276.7903 897.2898)" class="st10 st11 st26">8.00</text>
						<polygon class="st17" points="1284.4,932.6 1280.5,937.1 1284.7,941.3"/>
						<polygon class="st18" points="1284.4,932.6 1284.7,941.3 1288.6,936.8"/>
					</g>
					<g id="C-62-113">
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 1248.0092 947.22)" class="st10 st11 st23">8.00</text>
						<text transform="matrix(9.999500e-03 0.9999 -0.9999 9.999500e-03 1248.7999 908.6392)" class="st10 st11 st13">140.00 m2</text>
						<text transform="matrix(9.999500e-03 0.9999 -0.9999 9.999500e-03 1254.719 917.8998)" class="st14 futura-book st13">98</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 1241.3192 914.9093)" class="st10 st11 st13">17.50</text>
						<text transform="matrix(0.9998 1.999600e-02 -1.999600e-02 0.9998 1248.0912 897.2902)" class="st10 st11 st26">8.00</text>
					</g>
					<g id="C-62-114">
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 1220.8193 947.2196)" class="st10 st11 st23">8.00</text>
						<text transform="matrix(9.999500e-03 0.9999 -0.9999 9.999500e-03 1221.6208 908.6395)" class="st10 st11 st13">140.00 m2</text>
						<text transform="matrix(9.999500e-03 0.9999 -0.9999 9.999500e-03 1227.5302 917.8992)" class="st14 futura-book st13">97</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 1214.1304 914.9089)" class="st10 st11 st13">17.50</text>
						<text transform="matrix(0.9998 1.999600e-02 -1.999600e-02 0.9998 1220.9004 897.2806)" class="st10 st11 st26">8.00</text>
					</g>
					<g id="C-62-115">
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 1193.019 947.22)" class="st10 st11 st23">8.00</text>
						<text transform="matrix(9.999500e-03 0.9999 -0.9999 9.999500e-03 1193.809 908.6393)" class="st10 st11 st13">140.00 m2</text>
						<text transform="matrix(9.999500e-03 0.9999 -0.9999 9.999500e-03 1199.7202 917.9)" class="st14 futura-book st13">96</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 1186.3203 914.9092)" class="st10 st11 st13">17.50</text>
						<text transform="matrix(0.9998 1.999600e-02 -1.999600e-02 0.9998 1193.0909 897.29)" class="st10 st11 st26">8.00</text>
					</g>
					<g id="C-62-116">
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 1164.8995 947.22)" class="st10 st11 st23">8.00</text>
						<text transform="matrix(9.999500e-03 0.9999 -0.9999 9.999500e-03 1165.6903 908.6392)" class="st10 st11 st13">140.00 m2</text>
						<text transform="matrix(9.999500e-03 0.9999 -0.9999 9.999500e-03 1171.6113 917.8998)" class="st14 futura-book st13">95</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 1158.2096 914.9093)" class="st10 st11 st13">17.50</text>
						<text transform="matrix(0.9998 1.999600e-02 -1.999600e-02 0.9998 1164.9711 897.2902)" class="st10 st11 st26">8.00</text>
					</g>
					<g id="C-62-117">
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 1137.8992 947.2195)" class="st10 st11 st23">8.00</text>
						<text transform="matrix(9.999500e-03 0.9999 -0.9999 9.999500e-03 1138.691 908.6494)" class="st10 st11 st13">140.00 m2</text>
						<text transform="matrix(9.999500e-03 0.9999 -0.9999 9.999500e-03 1144.61 917.8993)" class="st14 futura-book st13">94</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 1131.2102 914.9089)" class="st10 st11 st13">17.50</text>
						<text transform="matrix(0.9998 1.999600e-02 -1.999600e-02 0.9998 1137.991 897.2907)" class="st10 st11 st26">8.00</text>
					</g>
					<g id="C-62-118">
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 1111.2091 948.61)" class="st10 st11 st23">8.00</text>
						<text transform="matrix(9.999500e-03 0.9999 -0.9999 9.999500e-03 1111.9886 910.0298)" class="st10 st11 st13">140.00 m2</text>
						<text transform="matrix(9.999500e-03 0.9999 -0.9999 9.999500e-03 1117.9097 919.2894)" class="st14 futura-book st13">93</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 1104.5114 916.2992)" class="st10 st11 st13">17.50</text>
						<text transform="matrix(0.9998 1.999600e-02 -1.999600e-02 0.9998 1111.2804 898.67)" class="st10 st11 st26">8.00</text>
					</g>
					<g id="C-62-119">
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 1082.7898 948.5992)" class="st10 st11 st23">8.00</text>
						<text transform="matrix(9.999500e-03 0.9999 -0.9999 9.999500e-03 1083.5791 910.0297)" class="st10 st11 st13">140.00 m2</text>
						<text transform="matrix(9.999500e-03 0.9999 -0.9999 9.999500e-03 1089.4904 919.2894)" class="st14 futura-book st13">92</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 1076.0919 916.2992)" class="st10 st11 st13">17.50</text>
						<text transform="matrix(0.9998 1.999600e-02 -1.999600e-02 0.9998 1082.8704 898.6703)" class="st10 st11 st26">8.00</text>
					</g>
					<g id="C-62-120">
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 1055.6799 948.6094)" class="st10 st11 st23">8.00</text>
						<text transform="matrix(9.999500e-03 0.9999 -0.9999 9.999500e-03 1056.4604 910.0294)" class="st10 st11 st13">140.00 m2</text>
						<text transform="matrix(9.999500e-03 0.9999 -0.9999 9.999500e-03 1062.3795 919.289)" class="st14 futura-book st13">91</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 1048.9792 916.2996)" class="st10 st11 st13">17.50</text>
						<text transform="matrix(0.9998 1.999600e-02 -1.999600e-02 0.9998 1055.7605 898.6702)" class="st10 st11 st26">8.00</text>
					</g>
					<g id="C-62-121">
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 1028.6796 948.6099)" class="st10 st11 st23">8.00</text>
						<text transform="matrix(9.999500e-03 0.9999 -0.9999 9.999500e-03 1029.4689 910.0297)" class="st10 st11 st13">140.00 m2</text>
						<text transform="matrix(9.999500e-03 0.9999 -0.9999 9.999500e-03 1035.3899 919.2893)" class="st14 futura-book st13">90</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 1021.9799 916.2991)" class="st10 st11 st13">17.50</text>
						<text transform="matrix(0.9998 1.999600e-02 -1.999600e-02 0.9998 1028.7609 898.6703)" class="st10 st11 st26">8.00</text>
					</g>
					<g id="C-62-122">
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 1001.7192 948.6099)" class="st10 st11 st23">8.00</text>
						<text transform="matrix(9.999500e-03 0.9999 -0.9999 9.999500e-03 1002.5106 910.0298)" class="st10 st11 st13">140.00 m2</text>
						<text transform="matrix(9.999500e-03 0.9999 -0.9999 9.999500e-03 1008.4316 919.2894)" class="st14 futura-book st13">89</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 995.0215 916.2991)" class="st10 st11 st13">17.50</text>
						<text transform="matrix(0.9998 1.999600e-02 -1.999600e-02 0.9998 1001.8005 898.6703)" class="st10 st11 st26">8.00</text>
					</g>
					<g id="C-62-123">
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 973.7599 948.6096)" class="st10 st11 st23">8.00</text>
						<text transform="matrix(9.999500e-03 0.9999 -0.9999 9.999500e-03 974.5404 910.0292)" class="st10 st11 st13">140.00 m2</text>
						<text transform="matrix(9.999500e-03 0.9999 -0.9999 9.999500e-03 980.4595 919.2898)" class="st14 futura-book st13">88</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 967.0592 916.2997)" class="st10 st11 st13">17.50</text>
						<text transform="matrix(0.9998 1.999600e-02 -1.999600e-02 0.9998 973.8408 898.6698)" class="st10 st11 st26">8.00</text>
					</g>
					<g id="C-62-124">
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 948.4598 948.6095)" class="st10 st11 st23">7.39</text>
						<text transform="matrix(9.999500e-03 0.9999 -0.9999 9.999500e-03 949.2403 910.0292)" class="st10 st11 st13">146.61 m2</text>
						<text transform="matrix(9.999500e-03 0.9999 -0.9999 9.999500e-03 955.1594 919.2899)" class="st14 futura-book st13">87</text>
						<text transform="matrix(0.1203 0.9927 -0.9927 0.1203 940.0399 916.3101)" class="st10 st11 st28">17.60</text>
						<text transform="matrix(0.9998 1.999600e-02 -1.999600e-02 0.9998 946.0403 898.6705)" class="st10 st11 st26">9.39</text>
						<polygon class="st17" points="956.7,932.6 952.8,937.1 957,941.3"/>
						<polygon class="st18" points="956.7,932.6 957,941.3 960.9,936.8"/>
					</g>
					<g id="C-62-125">
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 1081.3192 1105.1294)" class="st10 st11 st23">8.00</text>
						<text transform="matrix(9.999500e-03 0.9999 -0.9999 9.999500e-03 1082.12 1068.6293)" class="st10 st11 st13">128.00 m2</text>
						<text transform="matrix(9.999500e-03 0.9999 -0.9999 9.999500e-03 1088.0313 1077.889)" class="st14 futura-book st13">76</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 1074.631 1074.8999)" class="st10 st11 st13">16.00</text>
						<text transform="matrix(0.9998 1.999600e-02 -1.999600e-02 0.9998 1081.401 1059.1202)" class="st10 st11 st26">8.00</text>
						<polygon class="st17" points="1089,1092.6 1085.1,1097.1 1089.3,1101.3"/>
						<polygon class="st18" points="1089.1,1092.6 1089.3,1101.3 1093.2,1096.8"/>
					</g>
					<g id="C-62-126">
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 1108.7894 1105.1298)" class="st10 st11 st23">9.11</text>
						<text transform="matrix(9.999500e-03 0.9999 -0.9999 9.999500e-03 1109.5902 1068.6398)" class="st10 st11 st13">145.74 m2</text>
						<text transform="matrix(9.999500e-03 0.9999 -0.9999 9.999500e-03 1115.5013 1077.8898)" class="st14 futura-book st13">77</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 1102.1011 1074.8992)" class="st10 st11 st13">16.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 1124.1295 1074.8998)" class="st10 st11 st13">16.00</text>
						<text transform="matrix(0.9998 1.999600e-02 -1.999600e-02 0.9998 1108.8711 1059.1305)" class="st10 st11 st26">9.11</text>
						<polygon class="st17" points="1116.5,1092.6 1112.6,1097.1 1116.7,1101.3"/>
						<polygon class="st18" points="1116.5,1092.6 1116.8,1101.3 1120.7,1096.8"/>
					</g>
					<g id="C-62-127">
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 725.1597 1106.1199)" class="st10 st11 st23">8.00</text>
						<text transform="matrix(9.999500e-03 0.9999 -0.9999 9.999500e-03 725.95 1069.6196)" class="st10 st11 st13">123.68 m2</text>
						<polygon class="st17" points="735.1,1092.6 731.2,1097.1 735.3,1101.3"/>
						<polygon class="st18" points="735.1,1092.6 735.4,1101.3 739.3,1096.8"/>
						<text transform="matrix(9.999500e-03 0.9999 -0.9999 9.999500e-03 731.871 1078.8793)" class="st14 futura-book st13">63</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 717.4509 1078.0394)" class="st10 st11 st13">13.47</text>
						<text transform="matrix(0.9998 1.999600e-02 -1.999600e-02 0.9998 730.5308 1060.1104)" class="st10 st11 st26">4.67</text>
						<text transform="matrix(0.8 -0.6 0.6 0.8 721.05 1067.0099)" class="st10 st11 st31">4.18</text>
					</g>
					<g id="C-62-128">
						<text transform="matrix(9.999500e-03 -0.9999 0.9999 9.999500e-03 856.14 1157.6704)" class="st10 st11 st23">8.13</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 822.1694 1156.6199)" class="st10 st11 st13">129.52 m2</text>
						<polygon class="st17" points="846.7,1146.2 842.8,1150.7 847,1154.9"/>
						<polygon class="st18" points="846.8,1146.2 847,1154.9 851,1150.4"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 831.4194 1150.7096)" class="st14 futura-book st13">59</text>
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 825.6492 1164.0201)" class="st10 st11 st13">16.00</text>
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 825.2993 1143.8398)" class="st10 st11 st13">16.00</text>
					</g>
					<g id="C-62-129">
						<text transform="matrix(9.999500e-03 -0.9999 0.9999 9.999500e-03 798.8696 1185.4116)" class="st10 st11 st23">8.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 763.8596 1183.6398)" class="st10 st11 st13">128.00 m2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 773.1192 1177.7197)" class="st14 futura-book st13">55</text>
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 768.3788 1191.7496)" class="st10 st11 st13">16.00</text>
						<text transform="matrix(1.999600e-02 -0.9998 0.9998 1.999600e-02 752.7303 1185.2404)" class="st10 st11 st26">8.00</text>
					</g>
					<g id="C-62-130">
						<text transform="matrix(9.999500e-03 -0.9999 0.9999 9.999500e-03 856.14 1185.4102)" class="st10 st11 st23">8.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 821.1398 1183.6393)" class="st10 st11 st13">128.00 m2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 830.3896 1177.7194)" class="st14 futura-book st13">60</text>
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 825.6493 1191.75)" class="st10 st11 st13">16.00</text>
						<polygon class="st17" points="846.7,1170.8 842.8,1175.3 847,1179.6"/>
						<polygon class="st18" points="846.8,1170.8 847,1179.6 851,1175.1"/>
					</g>
					<g id="C-62-131">
						<text transform="matrix(9.999500e-03 -0.9999 0.9999 9.999500e-03 798.8691 1211.4305)" class="st10 st11 st23">8.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 763.859 1209.6597)" class="st10 st11 st13">128.00 m2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 773.1196 1203.7396)" class="st14 futura-book st13">56</text>
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 768.3793 1217.7793)" class="st10 st11 st13">16.00</text>
						<text transform="matrix(1.999600e-02 -0.9998 0.9998 1.999600e-02 752.7306 1211.2593)" class="st10 st11 st26">8.00</text>
					</g>
					<g id="C-62-132">
						<text transform="matrix(9.999500e-03 -0.9999 0.9999 9.999500e-03 856.1396 1211.4309)" class="st10 st11 st23">8.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 821.1392 1209.6592)" class="st10 st11 st13">128.00 m2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 830.3891 1203.7393)" class="st14 futura-book st13">61</text>
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 825.6596 1217.77)" class="st10 st11 st13">16.00</text>
						<polygon class="st17" points="846.7,1197.8 842.8,1202.3 847,1206.6"/>
						<polygon class="st18" points="846.8,1197.8 847,1206.6 851,1202.1"/>
					</g>
					<g id="C-62-133">
						<text transform="matrix(9.999500e-03 -0.9999 0.9999 9.999500e-03 798.8699 1237.3302)" class="st10 st11 st23">8.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 763.8593 1235.5593)" class="st10 st11 st13">128.00 m2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 773.1198 1229.6393)" class="st14 futura-book st13">57</text>
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 768.3792 1243.6692)" class="st10 st11 st13">16.00</text>
						<text transform="matrix(1.999600e-02 -0.9998 0.9998 1.999600e-02 752.7303 1237.1589)" class="st10 st11 st26">8.00</text>
					</g>
					<g id="C-62-134">
						<text transform="matrix(9.999500e-03 -0.9999 0.9999 9.999500e-03 798.8699 1265.9508)" class="st10 st11 st23">8.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 763.8593 1264.1799)" class="st10 st11 st13">128.00 m2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 773.119 1258.2697)" class="st14 futura-book st13">58</text>
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 768.3792 1272.2898)" class="st10 st11 st13">16.00</text>
						<text transform="matrix(1.999600e-02 -0.9998 0.9998 1.999600e-02 752.7302 1265.7819)" class="st10 st11 st26">8.00</text>
						<polygon class="st17" points="759.4,1254.1 755.5,1258.5 759.7,1262.8"/>
						<polygon class="st18" points="759.4,1254.1 759.7,1262.8 763.6,1258.3"/>
					</g>
					<g id="C-62-135">
						<text transform="matrix(9.999500e-03 -0.9999 0.9999 9.999500e-03 856.1392 1235.8794)" class="st10 st11 st23">5.60</text>
						<text transform="matrix(9.999500e-03 -0.9999 0.9999 9.999500e-03 808.4692 1240.0494)" class="st10 st11 st23">9.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 821.1396 1238.3099)" class="st10 st11 st13">136.13 m2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 830.3895 1232.39)" class="st14 futura-book st13">62</text>
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 819.6992 1249.7198)" class="st10 st11 st13">11.38</text>
						<text transform="matrix(0.8 -0.6 0.6 0.8 843.7299 1248.6398)" class="st10 st11 st25">5.74</text>
						<polygon class="st17" points="846.6,1224.4 842.7,1228.9 846.9,1233.1"/>
						<polygon class="st18" points="846.6,1224.4 846.9,1233.1 850.8,1228.6"/>
					</g>
					<g id="C-62-136">
						<text transform="matrix(9.999500e-03 -0.9999 0.9999 9.999500e-03 714.3792 1159.5107)" class="st10 st11 st23">9.06</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 676.9199 1158.4601)" class="st10 st11 st13">144.51 m2</text>
						<polygon class="st17" points="705.7,1150.7 701.8,1155.2 706,1159.4"/>
						<polygon class="st18" points="705.8,1150.7 706,1159.4 709.9,1155"/>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 686.1698 1152.5498)" class="st14 futura-book st13">53</text>
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 683.8894 1165.8595)" class="st10 st11 st13">16.00</text>
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 683.5394 1145.6793)" class="st10 st11 st13">16.00</text>
					</g>
					<g id="C-62-137">
						<text transform="matrix(9.999500e-03 -0.9999 0.9999 9.999500e-03 658.5394 1190.4794)" class="st10 st11 st23">9.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 623.2598 1188.4297)" class="st10 st11 st13">144.00 m2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 632.5195 1182.5194)" class="st14 futura-book st13">40</text>
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 628.0497 1196.8193)" class="st10 st11 st13">16.00</text>
						<text transform="matrix(1.999600e-02 -0.9998 0.9998 1.999600e-02 612.39 1190.3101)" class="st10 st11 st26">9.00</text>
					</g>
					<g id="C-62-138">
						<text transform="matrix(9.999500e-03 -0.9999 0.9999 9.999500e-03 658.5399 1220.6097)" class="st10 st11 st23">8.66</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 623.2595 1218.5699)" class="st10 st11 st13">138.62 m2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 632.5191 1212.6499)" class="st14 futura-book st13">41</text>
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 628.0492 1226.9497)" class="st10 st11 st13">16.00</text>
						<text transform="matrix(1.999600e-02 -0.9998 0.9998 1.999600e-02 612.39 1220.4412)" class="st10 st11 st26">8.66</text>
					</g>
					<g id="C-62-139">
						<text transform="matrix(9.999500e-03 -0.9999 0.9999 9.999500e-03 658.54 1247.8417)" class="st10 st11 st23">8.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 623.2593 1245.7998)" class="st10 st11 st13">128.00 m2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 632.519 1239.8895)" class="st14 futura-book st13">42</text>
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 628.0493 1254.1893)" class="st10 st11 st13">16.00</text>
						<text transform="matrix(1.999600e-02 -0.9998 0.9998 1.999600e-02 612.4003 1247.6694)" class="st10 st11 st26">8.00</text>
					</g>
					<g id="C-62-140">
						<text transform="matrix(9.999500e-03 -0.9999 0.9999 9.999500e-03 658.5393 1276.1399)" class="st10 st11 st23">8.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 623.2591 1274.1001)" class="st10 st11 st13">128.00 m2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 632.5197 1268.1801)" class="st14 futura-book st13">43</text>
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 628.0494 1282.4896)" class="st10 st11 st13">16.00</text>
						<text transform="matrix(1.999600e-02 -0.9998 0.9998 1.999600e-02 612.4008 1275.9701)" class="st10 st11 st26">8.00</text>
					</g>
					<g id="C-62-141">
						<text transform="matrix(9.999500e-03 -0.9999 0.9999 9.999500e-03 658.5392 1302.7096)" class="st10 st11 st23">8.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 623.2592 1300.6697)" class="st10 st11 st13">128.00 m2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 632.5197 1294.7496)" class="st14 futura-book st13">44</text>
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 628.0495 1309.0496)" class="st10 st11 st13">16.00</text>
						<text transform="matrix(1.999600e-02 -0.9998 0.9998 1.999600e-02 612.4007 1302.5398)" class="st10 st11 st26">8.00</text>
					</g>
					<g id="C-62-142">
						<text transform="matrix(9.999500e-03 -0.9999 0.9999 9.999500e-03 658.5393 1330.3398)" class="st10 st11 st23">8.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 623.259 1328.3)" class="st10 st11 st13">128.00 m2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 632.5198 1322.3898)" class="st14 futura-book st13">45</text>
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 628.0495 1336.6896)" class="st10 st11 st13">16.00</text>
						<text transform="matrix(1.999600e-02 -0.9998 0.9998 1.999600e-02 612.4 1330.1703)" class="st10 st11 st26">8.00</text>
					</g>
					<g id="C-62-143">
						<text transform="matrix(9.999500e-03 -0.9999 0.9999 9.999500e-03 658.5396 1358.3413)" class="st10 st11 st23">8.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 623.2597 1356.2994)" class="st10 st11 st13">128.00 m2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 632.5193 1350.3794)" class="st14 futura-book st13">46</text>
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 628.0497 1364.6901)" class="st10 st11 st13">16.00</text>
						<text transform="matrix(1.999600e-02 -0.9998 0.9998 1.999600e-02 612.4005 1358.1798)" class="st10 st11 st26">8.00</text>
						<polygon class="st17" points="618.2,1349.2 614.3,1353.7 618.5,1357.9"/>
						<polygon class="st18" points="618.3,1349.2 618.5,1357.9 622.5,1353.5"/>
					</g>
					<g id="C-62-144">
						<text transform="matrix(9.999500e-03 -0.9999 0.9999 9.999500e-03 714.3801 1190.4791)" class="st10 st11 st23">9.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 679.0995 1188.4299)" class="st10 st11 st13">144.00 m2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 688.3592 1182.5099)" class="st14 futura-book st13">52</text>
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 683.8894 1196.8191)" class="st10 st11 st13">16.00</text>
					</g>
					<g id="C-62-145">
						<text transform="matrix(9.999500e-03 -0.9999 0.9999 9.999500e-03 714.3799 1221.8499)" class="st10 st11 st23">9.52</text>
						<text transform="matrix(9.999500e-03 -0.9999 0.9999 9.999500e-03 667.5494 1221.8503)" class="st10 st11 st23">9.52</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 679.1095 1219.7996)" class="st10 st11 st13">152.31 m2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 688.3594 1213.8894)" class="st14 futura-book st13">51</text>
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 683.8998 1228.1997)" class="st10 st11 st13">16.00</text>
					</g>
					<g id="C-62-146">
						<text transform="matrix(9.999500e-03 -0.9999 0.9999 9.999500e-03 714.3792 1249.7516)" class="st10 st11 st23">8.00</text>
						<text transform="matrix(9.999500e-03 -0.9999 0.9999 9.999500e-03 667.5496 1249.7599)" class="st10 st11 st23">8.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 679.1093 1247.7092)" class="st10 st11 st13">128.00 m2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 688.3593 1241.8)" class="st14 futura-book st13">50</text>
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 683.8992 1256.0995)" class="st10 st11 st13">16.00</text>
					</g>
					<g id="C-62-147">
						<text transform="matrix(9.999500e-03 -0.9999 0.9999 9.999500e-03 714.3895 1276.5499)" class="st10 st11 st23">8.00</text>
						<text transform="matrix(9.999500e-03 -0.9999 0.9999 9.999500e-03 667.5492 1276.5601)" class="st10 st11 st23">8.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 679.1096 1274.4996)" class="st10 st11 st13">128.00 m2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 688.3596 1268.5895)" class="st14 futura-book st13">49</text>
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 683.889 1282.8995)" class="st10 st11 st13">16.00</text>
					</g>
					<g id="C-62-148">
						<text transform="matrix(9.999500e-03 -0.9999 0.9999 9.999500e-03 714.3795 1305.2896)" class="st10 st11 st23">8.00</text>
						<text transform="matrix(9.999500e-03 -0.9999 0.9999 9.999500e-03 667.5491 1305.2803)" class="st10 st11 st23">8.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 679.1099 1303.2393)" class="st10 st11 st13">128.00 m2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 688.3597 1297.3193)" class="st14 futura-book st13">48</text>
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 683.8997 1311.6199)" class="st10 st11 st13">16.00</text>
					</g>
					<g id="C-62-149">
						<text transform="matrix(9.999500e-03 -0.9999 0.9999 9.999500e-03 714.3797 1334.4688)" class="st10 st11 st23">8.00</text>
						<text transform="matrix(9.999500e-03 -0.9999 0.9999 9.999500e-03 667.5493 1334.4692)" class="st10 st11 st23">8.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 679.1098 1332.4292)" class="st10 st11 st13">128.00 m2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 688.3596 1326.5093)" class="st14 futura-book st13">47</text>
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 683.8997 1340.8098)" class="st10 st11 st13">16.00</text>
						<polygon class="st17" points="674.9,1322.3 671,1326.8 675.2,1331"/>
						<polygon class="st18" points="674.9,1322.3 675.2,1331 679.1,1326.5"/>
					</g>
					<g id="C-62-150">
						<text transform="matrix(0.8083 -0.5888 0.5888 0.8083 724.6701 1439.6799)" class="st10 st11 st32">8.00</text>
						<text transform="matrix(0.6112 0.7915 -0.7915 0.6112 704.8599 1411.7195)" class="st10 st11 st33">128.00 m2</text>
						<polygon class="st17" points="704.6,1401.1 700.5,1405.4 704.5,1409.8"/>
						<polygon class="st18" points="704.6,1401.1 704.6,1409.8 708.6,1405.4"/>
						<text transform="matrix(0.6112 0.7915 -0.7915 0.6112 715.14 1415.5991)" class="st14 futura-book st33">17</text>
						<text transform="matrix(0.5888 0.7983 -0.8083 0.5888 701.3599 1418.8905)" class="st10 st11 st34">16.00</text>
						<text transform="matrix(0.5888 0.7983 -0.8083 0.5888 717.3195 1406.5406)" class="st10 st11 st34">16.00</text>
						<text transform="matrix(0.8164 -0.5775 0.5775 0.8164 697.2599 1402.4198)" class="st10 st11 st35">8.00</text>
					</g>
					<g id="C-62-151">
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 1247.5895 886.9394)" class="st10 st11 st23">8.00</text>
						<text transform="matrix(1.999600e-02 0.9898 -0.9998 1.999600e-02 1248.1196 844.3398)" class="st10 st11 st24">160.00 m2</text>
						<polygon class="st17" points="1251.5,830.4 1247.5,834.8 1251.6,839.2"/>
						<polygon class="st18" points="1251.6,830.4 1251.6,839.2 1255.7,834.8"/>
						<text transform="matrix(1.999600e-02 0.9898 -0.9998 1.999600e-02 1254.0712 853.5801)" class="st14 futura-book st24">01</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 1261.5497 847.8192)" class="st10 st11 st13">20.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 1240.4397 846.9889)" class="st10 st11 st13">20.00</text>
						<text transform="matrix(0.9998 1.999600e-02 -1.999600e-02 0.9998 1247.0311 826.4902)" class="st10 st11 st26">8.00</text>
					</g>
					<g id="C-62-152">
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 1246.0493 787.5196)" class="st10 st11 st23">8.00</text>
						<text transform="matrix(1.999600e-02 0.9898 -0.9998 1.999600e-02 1246.5699 738.04)" class="st10 st11 st24">181.01 m2</text>
						<polygon class="st17" points="1250,768.8 1246,773.2 1250,777.5"/>
						<polygon class="st18" points="1250,768.8 1250.1,777.5 1254.1,773.1"/>
						<text transform="matrix(1.999600e-02 0.9898 -0.9998 1.999600e-02 1252.5195 747.2793)" class="st14 futura-book st24">70</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 1260.0105 744.699)" class="st10 st11 st13">22.50</text>
						<text transform="matrix(0.9998 1.999600e-02 -1.999600e-02 0.9998 1245.4802 719.5706)" class="st10 st11 st26">8.09</text>
					</g>
					<g id="C-62-153">
						<text transform="matrix(1.999600e-02 0.9898 -0.9998 1.999600e-02 1246.5809 656.9698)" class="st10 st11 st24">203.48 m2</text>
						<polygon class="st17" points="1250,640.9 1246,645.3 1250,649.7"/>
						<polygon class="st18" points="1250,640.9 1250.1,649.7 1254.1,645.3"/>
						<text transform="matrix(1.999600e-02 0.9898 -0.9998 1.999600e-02 1252.5188 666.2094)" class="st14 futura-book st24">85</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 1260.0105 663.6296)" class="st10 st11 st13">25.00</text>
						<text transform="matrix(0.9998 1.999600e-02 -1.999600e-02 0.9998 1245.4905 634.6202)" class="st10 st11 st26">8.19</text>
					</g>
					<g id="C-62-154">
						<text transform="matrix(1.999600e-02 0.9898 -0.9998 1.999600e-02 1217.8915 656.9693)" class="st10 st11 st24">200.00m2</text>
						<polygon class="st17" points="1221.3,640.9 1217.3,645.3 1221.3,649.7"/>
						<polygon class="st18" points="1221.3,640.9 1221.4,649.7 1225.4,645.3"/>
						<text transform="matrix(1.999600e-02 0.9898 -0.9998 1.999600e-02 1223.8293 666.2098)" class="st14 futura-book st24">84</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 1231.3197 663.6298)" class="st10 st11 st13">25.00</text>
						<text transform="matrix(0.9998 1.999600e-02 -1.999600e-02 0.9998 1216.8011 634.6207)" class="st10 st11 st26">8.00</text>
					</g>
					<g id="C-62-155">
						<text transform="matrix(1.999600e-02 0.9898 -0.9998 1.999600e-02 1190.7395 656.9692)" class="st10 st11 st24">200.00 m2</text>
						<polygon class="st17" points="1194.1,640.9 1190.1,645.3 1194.2,649.7"/>
						<polygon class="st18" points="1194.2,640.9 1194.3,649.7 1198.3,645.3"/>
						<text transform="matrix(1.999600e-02 0.9898 -0.9998 1.999600e-02 1196.6792 666.2097)" class="st14 futura-book st24">83</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 1204.1719 663.6298)" class="st10 st11 st13">25.00</text>
						<text transform="matrix(0.9998 1.999600e-02 -1.999600e-02 0.9998 1189.6511 634.6199)" class="st10 st11 st26">8.00</text>
					</g>
					<g id="C-62-156">
						<text transform="matrix(1.999600e-02 0.9898 -0.9998 1.999600e-02 1163.4897 656.9692)" class="st10 st11 st24">200.00 m2</text>
						<polygon class="st17" points="1166.9,640.9 1162.9,645.3 1167,649.7"/>
						<polygon class="st18" points="1166.9,640.9 1167,649.7 1171,645.3"/>
						<text transform="matrix(1.999600e-02 0.9898 -0.9998 1.999600e-02 1169.4296 666.2097)" class="st14 futura-book st24">82</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 1176.9204 663.6298)" class="st10 st11 st13">25.00</text>
						<text transform="matrix(0.9998 1.999600e-02 -1.999600e-02 0.9998 1162.4006 634.6199)" class="st10 st11 st26">8.00</text>
					</g>
					<g id="C-62-157">
						<text transform="matrix(1.999600e-02 0.9898 -0.9998 1.999600e-02 1135.4899 656.9695)" class="st10 st11 st24">225.00 m2</text>
						<polygon class="st17" points="1138.9,640.9 1134.9,645.3 1139,649.7"/>
						<polygon class="st18" points="1138.9,640.9 1139,649.7 1143,645.3"/>
						<text transform="matrix(1.999600e-02 0.9898 -0.9998 1.999600e-02 1141.4297 666.21)" class="st14 futura-book st24">81</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 1148.921 663.6291)" class="st10 st11 st13">25.00</text>
						<text transform="matrix(0.9998 1.999600e-02 -1.999600e-02 0.9998 1134.3911 634.6204)" class="st10 st11 st26">9.00</text>
					</g>
					<g id="C-62-158">
						<text transform="matrix(1.999600e-02 0.9898 -0.9998 1.999600e-02 1104.8684 656.9695)" class="st10 st11 st24">225.00 m2</text>
						<polygon class="st17" points="1108.3,640.9 1104.3,645.3 1108.3,649.7"/>
						<polygon class="st18" points="1108.3,640.9 1108.4,649.7 1112.4,645.3"/>
						<text transform="matrix(1.999600e-02 0.9898 -0.9998 1.999600e-02 1110.8199 666.2098)" class="st14 futura-book st24">80</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 1118.3101 663.6296)" class="st10 st11 st13">25.00</text>
						<text transform="matrix(0.9998 1.999600e-02 -1.999600e-02 0.9998 1103.7805 634.6205)" class="st10 st11 st26">9.00</text>
					</g>
					<g id="C-62-159">
						<text transform="matrix(1.999600e-02 0.9898 -0.9998 1.999600e-02 1073.9911 656.9698)" class="st10 st11 st24">225.00 m2</text>
						<polygon class="st17" points="1077.4,640.9 1073.4,645.3 1077.5,649.7"/>
						<polygon class="st18" points="1077.4,640.9 1077.5,649.7 1081.5,645.3"/>
						<text transform="matrix(1.999600e-02 0.9898 -0.9998 1.999600e-02 1079.9386 666.2101)" class="st14 futura-book st24">79</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 1087.4219 663.6293)" class="st10 st11 st13">25.00</text>
						<text transform="matrix(0.9998 1.999600e-02 -1.999600e-02 0.9998 1072.9003 634.6202)" class="st10 st11 st26">9.00</text>
					</g>
					<g id="C-62-160">
						<text transform="matrix(1.999600e-02 0.9898 -0.9998 1.999600e-02 1043.8208 656.9695)" class="st10 st11 st24">233.61 m2</text>
						<polygon class="st17" points="1047.2,640.9 1043.2,645.3 1047.3,649.7"/>
						<polygon class="st18" points="1047.3,640.9 1047.3,649.7 1051.4,645.3"/>
						<text transform="matrix(1.999600e-02 0.9898 -0.9998 1.999600e-02 1049.7704 666.2098)" class="st14 futura-book st24">78</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 1057.2484 663.6294)" class="st10 st11 st13">25.00</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 1031.0597 663.6292)" class="st10 st11 st13">20.00</text>
						<text transform="matrix(0.9998 1.999600e-02 -1.999600e-02 0.9998 1042.7302 634.6205)" class="st10 st11 st26">9.34</text>
					</g>
					<g id="C-62-161">
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 1043.2892 787.5194)" class="st10 st11 st23">9.34</text>
						<text transform="matrix(1.999600e-02 0.9898 -0.9998 1.999600e-02 1043.8196 738.0395)" class="st10 st11 st24">210.15 m2</text>
						<polygon class="st17" points="1047.2,768.8 1043.2,773.2 1047.3,777.5"/>
						<polygon class="st18" points="1047.3,768.8 1047.3,777.5 1051.3,773.1"/>
						<text transform="matrix(1.999600e-02 0.9898 -0.9998 1.999600e-02 1049.7692 747.2798)" class="st14 futura-book st24">77</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 1057.2483 744.6998)" class="st10 st11 st13">22.50</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 1032.0303 744.6996)" class="st10 st11 st13">20.00</text>
						<text transform="matrix(0.9998 1.999600e-02 -1.999600e-02 0.9998 1042.7307 719.5701)" class="st10 st11 st26">9.34</text>
					</g>
					<g id="C-62-162">
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 1217.6193 787.5195)" class="st10 st11 st23">8.00</text>
						<text transform="matrix(1.999600e-02 0.9898 -0.9998 1.999600e-02 1218.15 738.0399)" class="st10 st11 st24">180.00 m2</text>
						<text transform="matrix(1.999600e-02 0.9898 -0.9998 1.999600e-02 1224.0996 747.2792)" class="st14 futura-book st24">71</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 1231.5793 744.6989)" class="st10 st11 st13">22.50</text>
						<text transform="matrix(0.9998 1.999600e-02 -1.999600e-02 0.9998 1217.0605 719.5707)" class="st10 st11 st26">8.00</text>
					</g>
					<g id="C-62-163">
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 1190.4791 787.5196)" class="st10 st11 st23">8.00</text>
						<text transform="matrix(1.999600e-02 0.9898 -0.9998 1.999600e-02 1191 738.0398)" class="st10 st11 st24">180.00 m2</text>
						<text transform="matrix(1.999600e-02 0.9898 -0.9998 1.999600e-02 1196.9496 747.2801)" class="st14 futura-book st24">72</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 1204.4315 744.6989)" class="st10 st11 st13">22.50</text>
						<text transform="matrix(0.9998 1.999600e-02 -1.999600e-02 0.9998 1189.9211 719.5807)" class="st10 st11 st26">8.00</text>
					</g>
					<g id="C-62-164">
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 1163.5696 787.52)" class="st10 st11 st23">8.00</text>
						<text transform="matrix(1.999600e-02 0.9898 -0.9998 1.999600e-02 1164.0902 738.0398)" class="st10 st11 st24">180.00 m2</text>
						<text transform="matrix(1.999600e-02 0.9898 -0.9998 1.999600e-02 1170.0417 747.2801)" class="st14 futura-book st24">73</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 1177.52 744.6993)" class="st10 st11 st13">22.50</text>
						<text transform="matrix(0.9998 1.999600e-02 -1.999600e-02 0.9998 1163.0106 719.5699)" class="st10 st11 st26">8.00</text>
					</g>
					<g id="C-62-165">
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 1135.2294 787.5198)" class="st10 st11 st23">9.00</text>
						<text transform="matrix(1.999600e-02 0.9898 -0.9998 1.999600e-02 1135.7505 738.0401)" class="st10 st11 st24">202.50 m2</text>
						<text transform="matrix(1.999600e-02 0.9898 -0.9998 1.999600e-02 1141.7 747.2794)" class="st14 futura-book st24">74</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 1149.1807 744.6992)" class="st10 st11 st13">22.50</text>
						<text transform="matrix(0.9998 1.999600e-02 -1.999600e-02 0.9998 1134.6708 719.5804)" class="st10 st11 st26">9.00</text>
					</g>
					<g id="C-62-166">
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 1104.6194 787.5194)" class="st10 st11 st23">9.00</text>
						<text transform="matrix(1.999600e-02 0.9898 -0.9998 1.999600e-02 1105.131 738.04)" class="st10 st11 st24">202.50 m2</text>
						<text transform="matrix(1.999600e-02 0.9898 -0.9998 1.999600e-02 1111.0804 747.2794)" class="st14 futura-book st24">75</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 1118.5698 744.6998)" class="st10 st11 st13">22.50</text>
						<text transform="matrix(0.9998 1.999600e-02 -1.999600e-02 0.9998 1104.0612 719.5806)" class="st10 st11 st26">9.00</text>
					</g>
					<g id="C-62-167">
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 1073.739 787.5192)" class="st10 st11 st23">9.00</text>
						<text transform="matrix(1.999600e-02 0.9898 -0.9998 1.999600e-02 1074.2594 738.0392)" class="st10 st11 st24">202.50 m2</text>
						<text transform="matrix(1.999600e-02 0.9898 -0.9998 1.999600e-02 1080.1992 747.2797)" class="st14 futura-book st24">76</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 1087.6913 744.6996)" class="st10 st11 st13">22.50</text>
						<text transform="matrix(0.9998 1.999600e-02 -1.999600e-02 0.9998 1073.1713 719.5801)" class="st10 st11 st26">9.00</text>
					</g>
					<g id="C-62-168">
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 1220.7991 886.94)" class="st10 st11 st23">8.00</text>
						<text transform="matrix(1.999600e-02 0.9898 -0.9998 1.999600e-02 1221.3212 844.3395)" class="st10 st11 st24">160.00 m2</text>
						<text transform="matrix(1.999600e-02 0.9898 -0.9998 1.999600e-02 1227.2688 853.5798)" class="st14 futura-book st24">02</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 1213.6493 846.9896)" class="st10 st11 st13">20.00</text>
						<text transform="matrix(0.9998 1.999600e-02 -1.999600e-02 0.9998 1220.2306 826.5001)" class="st10 st11 st26">8.00</text>
					</g>
					<g id="C-62-169">
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 1194.1093 886.9398)" class="st10 st11 st23">8.00</text>
						<text transform="matrix(1.999600e-02 0.9898 -0.9998 1.999600e-02 1194.64 844.3398)" class="st10 st11 st24">160.00 m2</text>
						<text transform="matrix(1.999600e-02 0.9898 -0.9998 1.999600e-02 1200.5895 853.5792)" class="st14 futura-book st24">03</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 1186.9604 846.9893)" class="st10 st11 st13">20.00</text>
						<text transform="matrix(0.9998 1.999600e-02 -1.999600e-02 0.9998 1193.5507 826.4901)" class="st10 st11 st26">8.00</text>
					</g>
					<g id="C-62-170">
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 1167.9596 886.9293)" class="st10 st11 st23">8.00</text>
						<text transform="matrix(1.999600e-02 0.9898 -0.9998 1.999600e-02 1168.4901 844.3393)" class="st10 st11 st24">160.00 m2</text>
						<text transform="matrix(1.999600e-02 0.9898 -0.9998 1.999600e-02 1174.4299 853.5798)" class="st14 futura-book st24">04</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 1160.8088 846.9895)" class="st10 st11 st13">20.00</text>
						<text transform="matrix(0.9998 1.999600e-02 -1.999600e-02 0.9998 1167.3911 826.4904)" class="st10 st11 st26">8.00</text>
					</g>
					<g id="C-62-171">
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 1138.1191 886.9395)" class="st10 st11 st23">8.00</text>
						<text transform="matrix(1.999600e-02 0.9898 -0.9998 1.999600e-02 1138.65 844.3393)" class="st10 st11 st24">160.00 m2</text>
						<text transform="matrix(1.999600e-02 0.9898 -0.9998 1.999600e-02 1144.5898 853.5798)" class="st14 futura-book st24">05</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 1130.9791 846.9988)" class="st10 st11 st13">20.00</text>
						<text transform="matrix(0.9998 1.999600e-02 -1.999600e-02 0.9998 1137.5609 826.4907)" class="st10 st11 st26">8.00</text>
					</g>
					<g id="C-62-172">
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 1108.9292 886.9396)" class="st10 st11 st23">9.00</text>
						<text transform="matrix(1.999600e-02 0.9898 -0.9998 1.999600e-02 1109.4604 844.34)" class="st10 st11 st24">180.00 m2</text>
						<text transform="matrix(1.999600e-02 0.9898 -0.9998 1.999600e-02 1115.41 853.5793)" class="st14 futura-book st24">06</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 1101.7903 846.9892)" class="st10 st11 st13">20.00</text>
						<text transform="matrix(0.9998 1.999600e-02 -1.999600e-02 0.9998 1108.3706 826.4899)" class="st10 st11 st26">9.00</text>
					</g>
					<g id="C-62-173">
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 1077.9598 886.9395)" class="st10 st11 st23">9.00</text>
						<text transform="matrix(1.999600e-02 0.9898 -0.9998 1.999600e-02 1078.5011 844.3399)" class="st10 st11 st24">180.00 m2</text>
						<text transform="matrix(1.999600e-02 0.9898 -0.9998 1.999600e-02 1084.4388 853.5795)" class="st14 futura-book st24">07</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 1070.8199 846.9891)" class="st10 st11 st13">20.00</text>
						<text transform="matrix(0.9998 1.999600e-02 -1.999600e-02 0.9998 1077.4005 826.4898)" class="st10 st11 st26">9.00</text>
					</g>
					<g id="C-62-174">
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 1049.4995 886.94)" class="st10 st11 st23">7.54</text>
						<text transform="matrix(1.999600e-02 0.9898 -0.9998 1.999600e-02 1050.0284 844.3399)" class="st10 st11 st24">172.65 m2</text>
						<text transform="matrix(1.999600e-02 0.9898 -0.9998 1.999600e-02 1055.98 853.5801)" class="st14 futura-book st24">08</text>
						<text transform="matrix(0.1302 0.9915 -0.9915 0.1302 1038.6802 847.2396)" class="st10 st11 st36">20.12</text>
						<text transform="matrix(0.9998 1.999600e-02 -1.999600e-02 0.9998 1046.4705 826.4905)" class="st10 st11 st26">9.72</text>
						<polygon class="st17" points="1050.9,830.4 1046.9,834.8 1051,839.2"/>
						<polygon class="st18" points="1051,830.4 1051.1,839.2 1055.1,834.8"/>
					</g>
					<g id="C-62-175">
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 1153.319 1047.9901)" class="st10 st11 st23">9.00</text>
						<text transform="matrix(1.999600e-02 0.9898 -0.9998 1.999600e-02 1153.8396 1005.39)" class="st10 st11 st24">180.00 m2</text>
						<text transform="matrix(1.999600e-02 0.9898 -0.9998 1.999600e-02 1159.7911 1014.6293)" class="st14 futura-book st24">79</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 1168.1396 1008.8698)" class="st10 st11 st13">20.00</text>
						<text transform="matrix(0.9998 1.999600e-02 -1.999600e-02 0.9998 1152.7606 987.5406)" class="st10 st11 st26">9.00</text>
					</g>
					<g id="C-62-176">
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 1185.2592 1047.9891)" class="st10 st11 st23">9.00</text>
						<text transform="matrix(1.999600e-02 0.9898 -0.9998 1.999600e-02 1185.7797 1005.39)" class="st10 st11 st24">180.00 m2</text>
						<text transform="matrix(1.999600e-02 0.9898 -0.9998 1.999600e-02 1191.7312 1014.6293)" class="st14 futura-book st24">78</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 1200.0787 1008.8698)" class="st10 st11 st13">20.00</text>
						<text transform="matrix(0.9998 1.999600e-02 -1.999600e-02 0.9998 1184.7006 987.5406)" class="st10 st11 st26">9.00</text>
						<polygon class="st17" points="1190.3,991.5 1186.3,995.9 1190.4,1000.2"/>
						<polygon class="st18" points="1190.3,991.5 1190.4,1000.2 1194.4,995.8"/>
					</g>
					<g id="C-62-177">
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 1123.0792 1047.9895)" class="st10 st11 st23">8.38</text>
						<text transform="matrix(1.999600e-02 0.9898 -0.9998 1.999600e-02 1123.6089 1005.39)" class="st10 st11 st24">167.64 m2</text>
						<text transform="matrix(1.999600e-02 0.9898 -0.9998 1.999600e-02 1129.5603 1014.6293)" class="st14 futura-book st24">80</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 1137.9097 1008.8692)" class="st10 st11 st13">20.00</text>
						<text transform="matrix(0.9998 1.999600e-02 -1.999600e-02 0.9998 1122.5212 987.5405)" class="st10 st11 st26">8.38</text>
					</g>
					<g id="C-62-178">
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 1097.079 1047.9893)" class="st10 st11 st23">8.00</text>
						<text transform="matrix(1.999600e-02 0.9898 -0.9998 1.999600e-02 1097.6094 1005.3894)" class="st10 st11 st24">160.00 m2</text>
						<text transform="matrix(1.999600e-02 0.9898 -0.9998 1.999600e-02 1103.5511 1014.6299)" class="st14 futura-book st24">81</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 1109.2617 1008.8699)" class="st10 st11 st13">20.00</text>
						<text transform="matrix(0.9998 1.999600e-02 -1.999600e-02 0.9998 1096.5306 987.5403)" class="st10 st11 st26">8.00</text>
					</g>
					<g id="C-62-179">
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 1069.5795 1047.9896)" class="st10 st11 st23">8.00</text>
						<text transform="matrix(1.999600e-02 0.9898 -0.9998 1.999600e-02 1070.0999 1005.3896)" class="st10 st11 st24">160.00 m2</text>
						<text transform="matrix(1.999600e-02 0.9898 -0.9998 1.999600e-02 1076.0514 1014.6299)" class="st14 futura-book st24">82</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 1081.7487 1008.8691)" class="st10 st11 st13">20.00</text>
						<text transform="matrix(0.9998 1.999600e-02 -1.999600e-02 0.9998 1069.021 987.5508)" class="st10 st11 st26">8.00</text>
					</g>
					<g id="C-62-180">
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 1041.5996 1047.9901)" class="st10 st11 st23">8.00</text>
						<text transform="matrix(1.999600e-02 0.9898 -0.9998 1.999600e-02 1042.1312 1005.3893)" class="st10 st11 st24">160.00 m2</text>
						<text transform="matrix(1.999600e-02 0.9898 -0.9998 1.999600e-02 1048.071 1014.6299)" class="st14 futura-book st24">83</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 1053.7804 1008.8698)" class="st10 st11 st13">20.00</text>
						<text transform="matrix(0.9998 1.999600e-02 -1.999600e-02 0.9998 1041.041 987.5401)" class="st10 st11 st26">8.00</text>
					</g>
					<g id="C-62-181">
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 1015.109 1047.9899)" class="st10 st11 st23">8.00</text>
						<text transform="matrix(1.999600e-02 0.9898 -0.9998 1.999600e-02 1015.6317 1005.39)" class="st10 st11 st24">160.00 m2</text>
						<text transform="matrix(1.999600e-02 0.9898 -0.9998 1.999600e-02 1021.5696 1014.6295)" class="st14 futura-book st24">84</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 1027.281 1008.8694)" class="st10 st11 st13">20.00</text>
						<text transform="matrix(0.9998 1.999600e-02 -1.999600e-02 0.9998 1014.5406 987.5405)" class="st10 st11 st26">8.00</text>
					</g>
					<g id="C-62-182">
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 987.2297 1047.9895)" class="st10 st11 st23">8.00</text>
						<text transform="matrix(1.999600e-02 0.9898 -0.9998 1.999600e-02 987.751 1005.3898)" class="st10 st11 st24">160.00 m2</text>
						<text transform="matrix(1.999600e-02 0.9898 -0.9998 1.999600e-02 993.6986 1014.6292)" class="st14 futura-book st24">85</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 999.4086 1008.869)" class="st10 st11 st13">20.00</text>
						<text transform="matrix(0.9998 1.999600e-02 -1.999600e-02 0.9998 986.661 987.5406)" class="st10 st11 st26">8.00</text>
					</g>
					<g id="C-62-183">
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 959.8094 1047.9896)" class="st10 st11 st23">8.00</text>
						<text transform="matrix(1.999600e-02 0.9898 -0.9998 1.999600e-02 960.3392 1005.3901)" class="st10 st11 st24">181.76 m2</text>
						<text transform="matrix(1.999600e-02 0.9898 -0.9998 1.999600e-02 966.279 1014.6296)" class="st14 futura-book st24">86</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 971.9893 1008.8693)" class="st10 st11 st13">20.00</text>
						<text transform="matrix(0.1203 0.9927 -0.9927 0.1203 950.6703 1008.84)" class="st10 st11 st28">20.12</text>
						<text transform="matrix(0.9998 1.999600e-02 -1.999600e-02 0.9998 957.4003 987.5405)" class="st10 st11 st26">10.18</text>
						<polygon class="st17" points="963.1,991.5 959.1,995.9 963.2,1000.2"/>
						<polygon class="st18" points="963.2,991.5 963.2,1000.2 967.3,995.8"/>
					</g>
					<g id="C-62-184">
						<text transform="matrix(0.8083 -0.5888 0.5888 0.8083 1080.5001 1261.21)" class="st10 st11 st32">8.00</text>
						<text transform="matrix(0.6112 0.7915 -0.7915 0.6112 1056.4895 1227.8698)" class="st10 st11 st33">160.00 m2</text>
						<polygon class="st17" points="1056.2,1217.2 1052.1,1221.5 1056.2,1225.9"/>
						<polygon class="st18" points="1056.3,1217.2 1056.2,1225.9 1060.3,1221.6"/>
						<text transform="matrix(0.6112 0.7915 -0.7915 0.6112 1066.7694 1231.7396)" class="st14 futura-book st33">29</text>
						<text transform="matrix(0.5888 0.7983 -0.8083 0.5888 1068.9595 1222.6704)" class="st10 st11 st34">20.00</text>
						<text transform="matrix(0.8164 -0.5775 0.5775 0.8164 1045.8198 1215.1399)" class="st10 st11 st35">8.00</text>
					</g>
					<g id="C-62-185">
						<text transform="matrix(0.8083 -0.5888 0.5888 0.8083 1057.0304 1276.6803)" class="st10 st11 st32">8.00</text>
						<text transform="matrix(0.6112 0.7915 -0.7915 0.6112 1033.0292 1243.3395)" class="st10 st11 st33">160.00 m2</text>
						<polygon class="st17" points="1032.8,1232.7 1028.7,1237 1032.7,1241.4"/>
						<polygon class="st18" points="1032.8,1232.7 1032.7,1241.4 1036.8,1237.1"/>
						<text transform="matrix(0.6112 0.7915 -0.7915 0.6112 1043.3098 1247.2198)" class="st14 futura-book st33">28</text>
						<text transform="matrix(0.5888 0.7983 -0.8083 0.5888 1045.4896 1238.1504)" class="st10 st11 st34">20.00</text>
						<text transform="matrix(0.5888 0.7983 -0.8083 0.5888 1030.8002 1251.8209)" class="st10 st11 st34">20.00</text>
						<text transform="matrix(0.8164 -0.5775 0.5775 0.8164 1022.3598 1230.62)" class="st10 st11 st35">8.00</text>
					</g>
					<g id="C-62-186">
						<text transform="matrix(0.9123 -0.4311 0.4311 0.9023 1010.38 281.9505)" class="st10 st11 st37">8.00</text>
						<text transform="matrix(0.4492 0.8884 -0.8884 0.4592 988.5198 237.6705)" class="st10 st11 st38">200.00 m2</text>
						<polygon class="st17" points="1009.3,257 1005.2,261.3 1009.1,265.8"/>
						<polygon class="st18" points="1009.3,257 1009.2,265.8 1013.3,261.5"/>
						<text transform="matrix(0.4492 0.8884 -0.8884 0.4592 997.9498 243.3207)" class="st14 futura-book st38">32</text>
						<text transform="matrix(0.4292 0.8984 -0.8984 0.4392 1001.5498 234.6498)" class="st10 st11 st21">25.00</text>
						<text transform="matrix(0.4292 0.8984 -0.8984 0.4392 983.06 244.9099)" class="st10 st11 st21">25.00</text>
						<text transform="matrix(0.908 -0.429 0.4191 0.908 976.9899 218.1292)" class="st10 st11 st39">8.00</text>
					</g>
					<g id="C-62-187">
						<text transform="matrix(0.9123 -0.4311 0.4311 0.9023 1251.7902 377.8198)" class="st10 st11 st37">5.21</text>
						<text transform="matrix(-1.999600e-02 -0.9998 0.9998 -1.999600e-02 1262.8407 365.8586)" class="st10 st11 st26">6.06</text>
						<text transform="matrix(0.4492 0.8884 -0.8884 0.4592 1232.6602 329.1198)" class="st10 st11 st38">192.50 m2</text>
						<polygon class="st17" points="1253.4,348.5 1249.3,352.8 1253.3,357.2"/>
						<polygon class="st18" points="1253.5,348.5 1253.3,357.2 1257.4,353"/>
						<text transform="matrix(0.4492 0.8884 -0.8884 0.4592 1242.0892 334.7704)" class="st14 futura-book st38">86</text>
						<text transform="matrix(0.4292 0.8984 -0.8984 0.4392 1245.6892 326.0999)" class="st10 st11 st21">19.62</text>
						<text transform="matrix(0.4292 0.8984 -0.8984 0.4392 1227.2008 336.3605)" class="st10 st11 st21">25.00</text>
						<text transform="matrix(0.908 -0.429 0.4191 0.908 1219.9501 307.7296)" class="st10 st11 st39">8.00</text>
					</g>
					<g id="C-62-188">
						<text transform="matrix(0.4492 0.8884 -0.8884 0.4592 1209.4597 342.1003)" class="st10 st11 st38">200.00 m2</text>
						<polygon class="st17" points="1230.2,361.5 1226.1,365.8 1230.1,370.2"/>
						<polygon class="st18" points="1230.3,361.5 1230.1,370.2 1234.2,365.9"/>
						<text transform="matrix(0.4492 0.8884 -0.8884 0.4592 1218.8796 347.7502)" class="st14 futura-book st38">87</text>
						<text transform="matrix(0.4292 0.8984 -0.8984 0.4392 1204.0001 349.3302)" class="st10 st11 st21">25.00</text>
						<text transform="matrix(0.908 -0.429 0.4191 0.908 1196.7499 320.7098)" class="st10 st11 st39">8.00</text>
						<text transform="matrix(0.908 -0.429 0.4191 0.908 1230.7202 388.1904)" class="st10 st11 st39">8.00</text>
					</g>
					<g id="C-62-189">
						<text transform="matrix(0.4492 0.8884 -0.8884 0.4592 1184.8396 354.7901)" class="st10 st11 st38">200.00 m2</text>
						<polygon class="st17" points="1205.6,374.2 1201.5,378.4 1205.4,382.9"/>
						<polygon class="st18" points="1205.7,374.2 1205.5,382.9 1209.6,378.6"/>
						<text transform="matrix(0.4492 0.8884 -0.8884 0.4592 1194.2593 360.4501)" class="st14 futura-book st38">88</text>
						<text transform="matrix(0.4292 0.8984 -0.8984 0.4392 1179.3802 362.0297)" class="st10 st11 st21">25.00</text>
						<text transform="matrix(0.908 -0.429 0.4191 0.908 1172.13 333.3997)" class="st10 st11 st39">8.00</text>
						<text transform="matrix(0.908 -0.429 0.4191 0.908 1206.0995 400.8893)" class="st10 st11 st39">8.00</text>
					</g>
					<g id="C-62-190">
						<text transform="matrix(0.4492 0.8884 -0.8884 0.4592 1160.6993 367.7299)" class="st10 st11 st38">200.00 m2</text>
						<polygon class="st17" points="1181.5,387.1 1177.3,391.4 1181.3,395.8"/>
						<polygon class="st18" points="1181.5,387.1 1181.3,395.8 1185.5,391.6"/>
						<text transform="matrix(0.4492 0.8884 -0.8884 0.4592 1170.1199 373.3894)" class="st14 futura-book st38">89</text>
						<text transform="matrix(0.4292 0.8984 -0.8984 0.4392 1155.2401 374.9696)" class="st10 st11 st21">25.00</text>
						<text transform="matrix(0.908 -0.429 0.4191 0.908 1147.9999 346.3495)" class="st10 st11 st39">8.00</text>
						<text transform="matrix(0.908 -0.429 0.4191 0.908 1181.9597 413.8297)" class="st10 st11 st39">8.00</text>
					</g>
					<g id="C-62-191">
						<text transform="matrix(0.4492 0.8884 -0.8884 0.4592 1135.5298 379.5406)" class="st10 st11 st38">200.00 m2</text>
						<polygon class="st17" points="1156.3,398.9 1152.2,403.2 1156.1,407.6"/>
						<polygon class="st18" points="1156.3,398.9 1156.2,407.6 1160.3,403.4"/>
						<text transform="matrix(0.4492 0.8884 -0.8884 0.4592 1144.9595 385.19)" class="st14 futura-book st38">90</text>
						<text transform="matrix(0.4292 0.8984 -0.8984 0.4392 1130.0693 386.7698)" class="st10 st11 st21">25.00</text>
						<text transform="matrix(0.908 -0.429 0.4191 0.908 1122.8302 358.15)" class="st10 st11 st39">8.00</text>
						<text transform="matrix(0.908 -0.429 0.4191 0.908 1156.8 425.6298)" class="st10 st11 st39">8.00</text>
					</g>
					<g id="C-62-192">
						<text transform="matrix(0.4492 0.8884 -0.8884 0.4592 1111.7897 392.9903)" class="st10 st11 st38">200.00 m2</text>
						<polygon class="st17" points="1132.6,412.4 1128.4,416.6 1132.4,421.1"/>
						<polygon class="st18" points="1132.6,412.4 1132.4,421.1 1136.6,416.8"/>
						<text transform="matrix(0.4492 0.8884 -0.8884 0.4592 1121.2192 398.6397)" class="st14 futura-book st38">91</text>
						<text transform="matrix(0.4292 0.8984 -0.8984 0.4392 1106.3403 400.2305)" class="st10 st11 st21">25.00</text>
						<text transform="matrix(0.908 -0.429 0.4191 0.908 1099.0798 371.5998)" class="st10 st11 st39">8.00</text>
						<text transform="matrix(0.908 -0.429 0.4191 0.908 1133.0599 439.0898)" class="st10 st11 st39">8.00</text>
					</g>
					<g id="C-62-193">
						<text transform="matrix(0.4492 0.8884 -0.8884 0.4592 1088.5601 405.1297)" class="st10 st11 st38">200.00 m2</text>
						<polygon class="st17" points="1109.3,424.5 1105.2,428.8 1109.2,433.2"/>
						<polygon class="st18" points="1109.4,424.5 1109.2,433.2 1113.3,429"/>
						<text transform="matrix(0.4492 0.8884 -0.8884 0.4592 1097.9901 410.7799)" class="st14 futura-book st38">92</text>
						<text transform="matrix(0.4292 0.8984 -0.8984 0.4392 1083.1 412.3696)" class="st10 st11 st21">25.00</text>
						<text transform="matrix(0.908 -0.429 0.4191 0.908 1075.8501 383.7397)" class="st10 st11 st39">8.00</text>
						<text transform="matrix(0.908 -0.429 0.4191 0.908 1109.8201 451.2291)" class="st10 st11 st39">8.00</text>
					</g>
					<g id="C-62-194">
						<text transform="matrix(0.4492 0.8884 -0.8884 0.4592 1063.9404 417.3399)" class="st10 st11 st38">200.00 m2</text>
						<polygon class="st17" points="1084.7,436.7 1080.6,441 1084.5,445.4"/>
						<polygon class="st18" points="1084.8,436.7 1084.6,445.4 1088.7,441.2"/>
						<text transform="matrix(0.4492 0.8884 -0.8884 0.4592 1073.3596 422.9903)" class="st14 futura-book st38">93</text>
						<text transform="matrix(0.4292 0.8984 -0.8984 0.4392 1058.4794 424.5803)" class="st10 st11 st21">25.00</text>
						<text transform="matrix(0.908 -0.429 0.4191 0.908 1051.2302 395.95)" class="st10 st11 st39">8.00</text>
						<text transform="matrix(0.908 -0.429 0.4191 0.908 1085.1993 463.4398)" class="st10 st11 st39">8.00</text>
					</g>
					<g id="C-62-195">
						<text transform="matrix(0.4492 0.8884 -0.8884 0.4592 1039.6196 430.2796)" class="st10 st11 st38">200.00 m2</text>
						<polygon class="st17" points="1060.4,449.7 1056.3,453.9 1060.2,458.4"/>
						<polygon class="st18" points="1060.4,449.7 1060.3,458.4 1064.4,454.1"/>
						<text transform="matrix(0.4492 0.8884 -0.8884 0.4592 1049.04 435.9304)" class="st14 futura-book st38">94</text>
						<text transform="matrix(0.4292 0.8984 -0.8984 0.4392 1034.1603 437.5197)" class="st10 st11 st21">25.00</text>
						<text transform="matrix(0.908 -0.429 0.4191 0.908 1026.9103 408.8902)" class="st10 st11 st39">8.00</text>
						<text transform="matrix(0.908 -0.429 0.4191 0.908 1060.8799 476.3798)" class="st10 st11 st39">8.00</text>
					</g>
					<g id="C-62-196">
						<text transform="matrix(0.4492 0.8884 -0.8884 0.4592 1001.1201 357.1205)" class="st10 st11 st38">180.00 m2</text>
						<polygon class="st17" points="1001.7,339.1 997.5,343.4 1001.5,347.8"/>
						<polygon class="st18" points="1001.7,339.1 1001.6,347.8 1005.7,343.6"/>
						<text transform="matrix(0.4492 0.8884 -0.8884 0.4592 1010.5497 362.7699)" class="st14 futura-book st38">96</text>
						<text transform="matrix(0.4292 0.8984 -0.8984 0.4392 995.6609 364.3605)" class="st10 st11 st21">22.50</text>
						<text transform="matrix(0.908 -0.429 0.4191 0.908 990.1502 338.9898)" class="st10 st11 st39">8.00</text>
					</g>
					<g id="C-62-197">
						<text transform="matrix(0.4492 0.8884 -0.8884 0.4592 1025.3998 344.5605)" class="st10 st11 st38">180.00 m2</text>
						<text transform="matrix(0.4492 0.8884 -0.8884 0.4592 1034.8198 350.2104)" class="st14 futura-book st38">97</text>
						<text transform="matrix(0.4292 0.8984 -0.8984 0.4392 1019.9397 351.7898)" class="st10 st11 st21">22.50</text>
						<text transform="matrix(0.908 -0.429 0.4191 0.908 1014.4302 326.4303)" class="st10 st11 st39">8.00</text>
					</g>
					<g id="C-62-198">
						<text transform="matrix(0.4492 0.8884 -0.8884 0.4592 1050.4307 331.8803)" class="st10 st11 st38">180.00 m2</text>
						<text transform="matrix(0.4492 0.8884 -0.8884 0.4592 1059.86 337.5398)" class="st14 futura-book st38">98</text>
						<text transform="matrix(0.4292 0.8984 -0.8984 0.4392 1044.9698 339.1202)" class="st10 st11 st21">22.50</text>
						<text transform="matrix(0.908 -0.429 0.4191 0.908 1039.4702 313.7601)" class="st10 st11 st39">8.00</text>
					</g>
					<g id="C-62-199">
						<text transform="matrix(0.4492 0.8884 -0.8884 0.4592 1074.6599 320.0796)" class="st10 st11 st38">180.00 m2</text>
						<text transform="matrix(0.4492 0.8884 -0.8884 0.4592 1084.08 325.7295)" class="st14 futura-book st38">99</text>
						<text transform="matrix(0.4292 0.8984 -0.8984 0.4392 1069.2001 327.3199)" class="st10 st11 st21">22.50</text>
						<text transform="matrix(0.908 -0.429 0.4191 0.908 1063.6896 301.9594)" class="st10 st11 st39">8.00</text>
					</g>
					<g id="C-62-200">
						<text transform="matrix(0.4492 0.8884 -0.8884 0.4592 1098.6594 307.4005)" class="st10 st11 st38">180.00 m2</text>
						<text transform="matrix(0.4492 0.8884 -0.8884 0.4592 1108.09 313.0604)" class="st14 futura-book st38">100</text>
						<text transform="matrix(0.4292 0.8984 -0.8984 0.4392 1093.2106 314.6499)" class="st10 st11 st21">22.50</text>
						<text transform="matrix(0.908 -0.429 0.4191 0.908 1087.71 289.2892)" class="st10 st11 st39">8.00</text>
					</g>
					<g id="C-62-201">
						<text transform="matrix(0.4492 0.8884 -0.8884 0.4592 1121.9004 294.2902)" class="st10 st11 st38">180.00 m2</text>
						<text transform="matrix(0.4492 0.8884 -0.8884 0.4592 1131.3204 299.9401)" class="st14 futura-book st38">101</text>
						<text transform="matrix(0.4292 0.8984 -0.8984 0.4392 1116.4395 301.5197)" class="st10 st11 st21">22.50</text>
						<text transform="matrix(0.908 -0.429 0.4191 0.908 1110.9398 276.1696)" class="st10 st11 st39">8.00</text>
					</g>
					<g id="C-62-202">
						<text transform="matrix(0.4492 0.8884 -0.8884 0.4592 1147.1403 281.6099)" class="st10 st11 st38">180.00 m2</text>
						<text transform="matrix(0.4492 0.8884 -0.8884 0.4592 1156.5699 287.2702)" class="st14 futura-book st38">102</text>
						<text transform="matrix(0.4292 0.8984 -0.8984 0.4392 1141.6794 288.8497)" class="st10 st11 st21">22.50</text>
						<text transform="matrix(0.908 -0.429 0.4191 0.908 1136.1899 263.4898)" class="st10 st11 st39">8.00</text>
					</g>
					<g id="C-62-203">
						<text transform="matrix(0.4492 0.8884 -0.8884 0.4592 1171.73 268.9401)" class="st10 st11 st38">180.00 m2</text>
						<text transform="matrix(0.4492 0.8884 -0.8884 0.4592 1181.16 274.5904)" class="st14 futura-book st38">103</text>
						<text transform="matrix(0.4292 0.8984 -0.8984 0.4392 1166.2701 276.1797)" class="st10 st11 st21">22.50</text>
						<text transform="matrix(0.908 -0.429 0.4191 0.908 1160.7701 250.8198)" class="st10 st11 st39">8.00</text>
					</g>
					<g id="C-62-204">
						<text transform="matrix(0.4492 0.8884 -0.8884 0.4592 1196.1897 256.9202)" class="st10 st11 st38">180.00 m2</text>
						<text transform="matrix(0.4492 0.8884 -0.8884 0.4592 1205.6097 262.5701)" class="st14 futura-book st38">104</text>
						<text transform="matrix(0.4292 0.8984 -0.8984 0.4392 1190.7295 264.1501)" class="st10 st11 st21">22.50</text>
						<text transform="matrix(0.908 -0.429 0.4191 0.908 1185.2197 238.8001)" class="st10 st11 st39">8.00</text>
					</g>
					<g id="C-62-205">
						<text transform="matrix(0.4492 0.8884 -0.8884 0.4592 1220.2396 244.3602)" class="st10 st11 st38">180.00 m2</text>
						<text transform="matrix(0.4492 0.8884 -0.8884 0.4592 1229.6693 250.0205)" class="st14 futura-book st38">105</text>
						<text transform="matrix(0.4292 0.8984 -0.8984 0.4392 1214.7803 251.6006)" class="st10 st11 st21">22.50</text>
						<text transform="matrix(0.4292 0.8984 -0.8984 0.4392 1233.0404 242.3799)" class="st10 st11 st21">22.50</text>
						<text transform="matrix(0.908 -0.429 0.4191 0.908 1209.2799 226.2397)" class="st10 st11 st39">8.00</text>
						<polygon class="st17" points="1221.5,225.9 1217.4,230.2 1221.3,234.6"/>
						<polygon class="st18" points="1221.6,225.9 1221.4,234.6 1225.5,230.4"/>
					</g>
					<g id="C-62-206">
						<text transform="matrix(0.4492 0.8884 -0.8884 0.4592 1014.3903 442.6797)" class="st10 st11 st38">200.00 m2</text>
						<polygon class="st17" points="1035.2,462 1031,466.3 1035,470.8"/>
						<polygon class="st18" points="1035.2,462 1035,470.8 1039.2,466.5"/>
						<text transform="matrix(0.4492 0.8884 -0.8884 0.4592 1023.8203 448.33)" class="st14 futura-book st38">95</text>
						<text transform="matrix(0.4292 0.8984 -0.8984 0.4392 1008.9296 449.9101)" class="st10 st11 st21">25.00</text>
						<text transform="matrix(0.908 -0.429 0.4191 0.908 1001.6801 421.2798)" class="st10 st11 st39">8.00</text>
						<text transform="matrix(0.908 -0.429 0.4191 0.908 1035.6501 488.7692)" class="st10 st11 st39">8.00</text>
					</g>
					<g id="C-62-207">
						<text transform="matrix(0.9123 -0.4311 0.4311 0.9023 1034.73 269.05)" class="st10 st11 st37">8.00</text>
						<text transform="matrix(0.4492 0.8884 -0.8884 0.4592 1012.8696 224.7795)" class="st10 st11 st38">200.00 m2</text>
						<text transform="matrix(0.4492 0.8884 -0.8884 0.4592 1022.2997 230.4298)" class="st14 futura-book st38">33</text>
						<text transform="matrix(0.4292 0.8984 -0.8984 0.4392 1025.8989 221.7599)" class="st10 st11 st21">25.00</text>
						<text transform="matrix(0.908 -0.429 0.4191 0.908 1001.3398 205.2397)" class="st10 st11 st39">8.00</text>
					</g>
					<g id="C-62-208">
						<text transform="matrix(0.9123 -0.4311 0.4311 0.9023 1058.7003 256.5602)" class="st10 st11 st37">8.00</text>
						<text transform="matrix(0.4492 0.8884 -0.8884 0.4592 1036.8391 212.2897)" class="st10 st11 st38">200.00 m2</text>
						<text transform="matrix(0.4492 0.8884 -0.8884 0.4592 1046.2704 217.9404)" class="st14 futura-book st38">34</text>
						<text transform="matrix(0.4292 0.8984 -0.8984 0.4392 1049.87 209.27)" class="st10 st11 st21">25.00</text>
						<text transform="matrix(0.908 -0.429 0.4191 0.908 1025.3199 192.7494)" class="st10 st11 st39">8.00</text>
					</g>
					<g id="C-62-209">
						<text transform="matrix(0.9123 -0.4311 0.4311 0.9023 1083.5099 244.0701)" class="st10 st11 st37">8.00</text>
						<text transform="matrix(0.4492 0.8884 -0.8884 0.4592 1061.6597 199.7997)" class="st10 st11 st38">200.00 m2</text>
						<text transform="matrix(0.4492 0.8884 -0.8884 0.4592 1071.0802 205.4504)" class="st14 futura-book st38">35</text>
						<text transform="matrix(0.4292 0.8984 -0.8984 0.4392 1074.6803 196.7699)" class="st10 st11 st21">25.00</text>
						<text transform="matrix(0.908 -0.429 0.4191 0.908 1050.13 180.2592)" class="st10 st11 st39">8.00</text>
					</g>
					<g id="C-62-210">
						<text transform="matrix(0.9123 -0.4311 0.4311 0.9023 1107.86 231.58)" class="st10 st11 st37">8.00</text>
						<text transform="matrix(0.4492 0.8884 -0.8884 0.4592 1085.9999 187.3095)" class="st10 st11 st38">200.00 m2</text>
						<text transform="matrix(0.4492 0.8884 -0.8884 0.4592 1095.4194 192.9607)" class="st14 futura-book st38">36</text>
						<text transform="matrix(0.4292 0.8984 -0.8984 0.4392 1099.0304 184.2806)" class="st10 st11 st21">25.00</text>
						<text transform="matrix(0.908 -0.429 0.4191 0.908 1074.4697 167.7697)" class="st10 st11 st39">8.00</text>
					</g>
					<g id="C-62-211">
						<text transform="matrix(0.9123 -0.4311 0.4311 0.9023 1131.98 219.0896)" class="st10 st11 st37">8.00</text>
						<text transform="matrix(0.4492 0.8884 -0.8884 0.4592 1110.1194 174.8201)" class="st10 st11 st38">200.00 m2</text>
						<text transform="matrix(0.4492 0.8884 -0.8884 0.4592 1119.5394 180.47)" class="st14 futura-book st38">37</text>
						<text transform="matrix(0.4292 0.8984 -0.8984 0.4392 1123.1494 171.7901)" class="st10 st11 st21">25.00</text>
						<text transform="matrix(0.908 -0.429 0.4191 0.908 1098.5902 155.2802)" class="st10 st11 st39">8.00</text>
					</g>
					<g id="C-62-212">
						<text transform="matrix(0.9123 -0.4311 0.4311 0.9023 1156.4299 206.5999)" class="st10 st11 st37">8.00</text>
						<text transform="matrix(0.4492 0.8884 -0.8884 0.4592 1134.5702 162.3299)" class="st10 st11 st38">200.00 m2</text>
						<text transform="matrix(0.4492 0.8884 -0.8884 0.4592 1143.9993 167.9806)" class="st14 futura-book st38">38</text>
						<text transform="matrix(0.4292 0.8984 -0.8984 0.4392 1147.6 159.3094)" class="st10 st11 st21">25.00</text>
						<text transform="matrix(0.908 -0.429 0.4191 0.908 1123.0397 142.7897)" class="st10 st11 st39">8.00</text>
					</g>
					<g id="C-62-213">
						<text transform="matrix(0.9123 -0.4311 0.4311 0.9023 1180.7695 194.1094)" class="st10 st11 st37">8.00</text>
						<text transform="matrix(0.4492 0.8884 -0.8884 0.4592 1158.9194 149.8405)" class="st10 st11 st38">200.00 m2</text>
						<text transform="matrix(0.4492 0.8884 -0.8884 0.4592 1168.3395 155.4904)" class="st14 futura-book st38">39</text>
						<text transform="matrix(0.4292 0.8984 -0.8984 0.4392 1171.9501 146.8201)" class="st10 st11 st21">25.00</text>
						<text transform="matrix(0.908 -0.429 0.4191 0.908 1147.3899 130.2996)" class="st10 st11 st39">8.00</text>
					</g>
					<g id="C-62-214">
						<text transform="matrix(0.9123 -0.4311 0.4311 0.9023 1204.84 180.8604)" class="st10 st11 st37">8.00</text>
						<text transform="matrix(0.4492 0.8884 -0.8884 0.4592 1182.9904 136.5904)" class="st10 st11 st38">200.00 m2</text>
						<text transform="matrix(0.4492 0.8884 -0.8884 0.4592 1192.4191 142.2402)" class="st14 futura-book st38">40</text>
						<text transform="matrix(0.4292 0.8984 -0.8984 0.4392 1196.02 133.5699)" class="st10 st11 st21">25.00</text>
						<text transform="matrix(0.908 -0.429 0.4191 0.908 1171.4596 117.05)" class="st10 st11 st39">8.00</text>
					</g>
					<g id="C-62-215">
						<text transform="matrix(0.9123 -0.4311 0.4311 0.9023 1228.7096 167.8597)" class="st10 st11 st37">8.00</text>
						<text transform="matrix(0.4492 0.8884 -0.8884 0.4592 1206.8599 123.5806)" class="st10 st11 st38">200.00 m2</text>
						<text transform="matrix(0.4492 0.8884 -0.8884 0.4592 1216.2804 129.2401)" class="st14 futura-book st38">41</text>
						<text transform="matrix(0.4292 0.8984 -0.8984 0.4392 1219.8898 120.56)" class="st10 st11 st21">25.00</text>
						<text transform="matrix(0.908 -0.429 0.4191 0.908 1195.3298 104.0501)" class="st10 st11 st39">8.00</text>
					</g>
					<g id="C-62-216">
						<text transform="matrix(0.9123 -0.4311 0.4311 0.9023 1250.8103 155.3698)" class="st10 st11 st37">5.50</text>
						<text transform="matrix(1.999600e-02 -0.9998 0.9998 1.999600e-02 1262.1906 144.4601)" class="st10 st11 st26">7.61</text>
						<text transform="matrix(0.4492 0.8884 -0.8884 0.4592 1233.0096 108.7503)" class="st10 st11 st38">213.19 m2</text>
						<text transform="matrix(0.4492 0.8884 -0.8884 0.4592 1242.4305 114.3997)" class="st14 futura-book st38">42</text>
						<text transform="matrix(0.4292 0.8984 -0.8984 0.4392 1246.0402 105.7297)" class="st10 st11 st21">18.25</text>
						<text transform="matrix(0.908 -0.429 0.4191 0.908 1221.4697 89.2098)" class="st10 st11 st39">9.00</text>
						<polygon class="st17" points="1248.8,132.1 1244.7,136.3 1248.7,140.8"/>
						<polygon class="st18" points="1248.9,132.1 1248.7,140.8 1252.9,136.5"/>
					</g>
					<g id="C-62-217">
						<text transform="matrix(0.829 -0.5593 0.5593 0.829 1101.39 1245.24)" class="st10 st11 st16">8.00</text>
						<text transform="matrix(0.5822 0.8131 -0.8131 0.5822 1078.64 1211.2098)" class="st10 st11 st40">160.00 m2</text>
						<polygon class="st17" points="1078.8,1200.5 1074.5,1204.7 1078.4,1209.2"/>
						<polygon class="st18" points="1078.8,1200.5 1078.5,1209.2 1082.7,1205.1"/>
						<text transform="matrix(0.5822 0.8131 -0.8131 0.5822 1088.7896 1215.4104)" class="st14 futura-book st40">30</text>
						<text transform="matrix(0.5593 0.819 -0.829 0.5593 1091.1204 1206.4189)" class="st10 st11 st41">20.00</text>
						<text transform="matrix(0.8436 -0.5624 0.5524 0.8336 1068.2103 1198.22)" class="st10 st11 st42">8.00</text>
					</g>
					<g id="C-62-218">
						<text transform="matrix(0.8211 -0.5808 0.5708 0.8211 1123.1495 1228.089)" class="st10 st11 st43">8.00</text>
						<text transform="matrix(0.5935 0.8048 -0.8048 0.5935 1100.0602 1194.6604)" class="st10 st11 st44">160.00 m2</text>
						<polygon class="st17" points="1099.7,1183.8 1095.6,1188 1099.5,1192.5"/>
						<polygon class="st18" points="1099.8,1183.8 1099.6,1192.5 1103.7,1188.3"/>
						<text transform="matrix(0.5935 0.8048 -0.8048 0.5935 1110.2793 1198.7108)" class="st14 futura-book st44">31</text>
						<text transform="matrix(0.5675 0.8065 -0.8164 0.5775 1112.3799 1189.6)" class="st10 st11 st45">20.00</text>
						<text transform="matrix(0.8243 -0.5661 0.5661 0.8243 1089.3809 1181.7904)" class="st10 st11 st46">8.00</text>
					</g>
					<g id="C-62-219">
						<text transform="matrix(0.8211 -0.5808 0.5708 0.8211 1146.1696 1212.1893)" class="st10 st11 st43">8.00</text>
						<text transform="matrix(0.5935 0.8048 -0.8048 0.5935 1122.7798 1178.8402)" class="st10 st11 st44">160.00 m2</text>
						<text transform="matrix(0.5935 0.8048 -0.8048 0.5935 1132.9989 1182.8905)" class="st14 futura-book st44">32</text>
						<text transform="matrix(0.5675 0.8065 -0.8164 0.5775 1135.0991 1173.7898)" class="st10 st11 st45">20.00</text>
						<text transform="matrix(0.8243 -0.5661 0.5661 0.8243 1112.4001 1165.8896)" class="st10 st11 st46">8.00</text>
					</g>
					<g id="C-62-220">
						<text transform="matrix(0.8211 -0.5808 0.5708 0.8211 1167.6099 1195.9597)" class="st10 st11 st43">8.00</text>
						<text transform="matrix(0.5935 0.8048 -0.8048 0.5935 1144.2086 1162.6106)" class="st10 st11 st44">160.00 m2</text>
						<text transform="matrix(0.5935 0.8048 -0.8048 0.5935 1154.4298 1166.6605)" class="st14 futura-book st44">33</text>
						<text transform="matrix(0.5675 0.8065 -0.8164 0.5775 1156.54 1157.5596)" class="st10 st11 st45">20.00</text>
						<text transform="matrix(0.8243 -0.5661 0.5661 0.8243 1133.8503 1149.6602)" class="st10 st11 st46">8.00</text>
					</g>
					<g id="C-62-221">
						<text transform="matrix(0.8211 -0.5808 0.5708 0.8211 1190.3201 1179.9896)" class="st10 st11 st43">8.00</text>
						<text transform="matrix(0.5935 0.8048 -0.8048 0.5935 1166.9292 1146.6404)" class="st10 st11 st44">160.00 m2</text>
						<text transform="matrix(0.5935 0.8048 -0.8048 0.5935 1177.1497 1150.7007)" class="st14 futura-book st44">34</text>
						<text transform="matrix(0.5675 0.8065 -0.8164 0.5775 1179.2499 1141.59)" class="st10 st11 st45">20.00</text>
						<text transform="matrix(0.8243 -0.5661 0.5661 0.8243 1156.5604 1133.6897)" class="st10 st11 st46">8.00</text>
					</g>
					<g id="C-62-222">
						<text transform="matrix(0.8211 -0.5808 0.5708 0.8211 1212.04 1164)" class="st10 st11 st43">8.00</text>
						<text transform="matrix(0.5935 0.8048 -0.8048 0.5935 1188.6493 1130.651)" class="st10 st11 st44">160.00 m2</text>
						<text transform="matrix(0.5935 0.8048 -0.8048 0.5935 1198.8594 1134.7007)" class="st14 futura-book st44">35</text>
						<text transform="matrix(0.5675 0.8065 -0.8164 0.5775 1200.9796 1125.6005)" class="st10 st11 st45">20.00</text>
						<text transform="matrix(0.8243 -0.5661 0.5661 0.8243 1178.2803 1117.7003)" class="st10 st11 st46">8.00</text>
					</g>
					<g id="C-62-223">
						<text transform="matrix(0.8211 -0.5808 0.5708 0.8211 1234.7598 1147.6895)" class="st10 st11 st43">8.00</text>
						<text transform="matrix(0.5935 0.8048 -0.8048 0.5935 1211.3695 1114.3511)" class="st10 st11 st44">160.00 m2</text>
						<text transform="matrix(0.5935 0.8048 -0.8048 0.5935 1221.579 1118.4)" class="st14 futura-book st44">36</text>
						<text transform="matrix(0.5675 0.8065 -0.8164 0.5775 1223.6897 1109.3004)" class="st10 st11 st45">20.00</text>
						<text transform="matrix(0.8243 -0.5661 0.5661 0.8243 1201.0001 1101.3998)" class="st10 st11 st46">8.00</text>
					</g>
					<g id="C-62-224">
						<text transform="matrix(0.8211 -0.5808 0.5708 0.8211 1255.7399 1130.2495)" class="st10 st11 st43">8.00</text>
						<text transform="matrix(0.5935 0.8048 -0.8048 0.5935 1232.3395 1096.9005)" class="st10 st11 st44">160.00 m2</text>
						<text transform="matrix(0.5935 0.8048 -0.8048 0.5935 1242.5502 1100.951)" class="st14 futura-book st44">37</text>
						<text transform="matrix(0.5675 0.8065 -0.8164 0.5775 1244.6603 1091.8503)" class="st10 st11 st45">20.00</text>
						<text transform="matrix(0.8243 -0.5661 0.5661 0.8243 1221.9703 1083.9504)" class="st10 st11 st46">8.00</text>
					</g>
					<g id="C-62-225">
						<text transform="matrix(0.8746 -0.5127 0.5026 0.8645 1279.6708 1114.5708)" class="st10 st11 st47">6.43</text>
						<text transform="matrix(0.5935 0.8048 -0.8048 0.5935 1257.7596 1079.9806)" class="st10 st11 st44">177.54 m2</text>
						<text transform="matrix(0.5935 0.8048 -0.8048 0.5935 1267.9705 1084.031)" class="st14 futura-book st44">38</text>
						<text transform="matrix(0.5675 0.8065 -0.8164 0.5775 1270.0804 1074.9301)" class="st10 st11 st45">16.97</text>
						<text transform="matrix(0.8243 -0.5661 0.5661 0.8243 1247.3903 1067.03)" class="st10 st11 st46">9.00</text>
						<polygon class="st17" points="1257.7,1066.9 1253.6,1071.2 1257.5,1075.7"/>
						<polygon class="st18" points="1257.8,1066.9 1257.6,1075.7 1261.7,1071.4"/>
					</g>
					<g id="C-62-226">
						<text transform="matrix(0.8083 -0.5888 0.5888 0.8083 747.2706 1423.2806)" class="st10 st11 st32">8.00</text>
						<text transform="matrix(0.6112 0.7915 -0.7915 0.6112 727.4498 1395.3303)" class="st10 st11 st33">128.00 m2</text>
						<text transform="matrix(0.6112 0.7915 -0.7915 0.6112 737.7297 1399.2002)" class="st14 futura-book st33">18</text>
						<text transform="matrix(0.5888 0.7983 -0.8083 0.5888 739.9094 1390.1406)" class="st10 st11 st34">16.00</text>
						<text transform="matrix(0.8164 -0.5775 0.5775 0.8164 719.85 1386.0204)" class="st10 st11 st35">8.00</text>
					</g>
					<g id="C-62-227">
						<text transform="matrix(0.8083 -0.5888 0.5888 0.8083 768.1401 1406.8495)" class="st10 st11 st32">8.00</text>
						<text transform="matrix(0.6112 0.7915 -0.7915 0.6112 748.3198 1378.8997)" class="st10 st11 st33">128.00 m2</text>
						<text transform="matrix(0.6112 0.7915 -0.7915 0.6112 758.5997 1382.7695)" class="st14 futura-book st33">19</text>
						<text transform="matrix(0.5888 0.7983 -0.8083 0.5888 760.7794 1373.7103)" class="st10 st11 st34">16.00</text>
						<text transform="matrix(0.8164 -0.5775 0.5775 0.8164 740.7199 1369.5901)" class="st10 st11 st35">8.00</text>
					</g>
					<g id="C-62-228">
						<text transform="matrix(0.8083 -0.5888 0.5888 0.8083 791.4006 1391.1003)" class="st10 st11 st32">8.00</text>
						<text transform="matrix(0.6112 0.7915 -0.7915 0.6112 771.5801 1363.1501)" class="st10 st11 st33">128.00 m2</text>
						<text transform="matrix(0.6112 0.7915 -0.7915 0.6112 781.8602 1367.0298)" class="st14 futura-book st33">20</text>
						<text transform="matrix(0.5888 0.7983 -0.8083 0.5888 784.0499 1357.96)" class="st10 st11 st34">16.00</text>
						<text transform="matrix(0.8164 -0.5775 0.5775 0.8164 763.9897 1353.8403)" class="st10 st11 st35">8.00</text>
					</g>
					<g id="C-62-229">
						<text transform="matrix(0.8083 -0.5888 0.5888 0.8083 812.8201 1374.1296)" class="st10 st11 st32">8.00</text>
						<text transform="matrix(0.6112 0.7915 -0.7915 0.6112 792.9991 1346.1697)" class="st10 st11 st33">128.00 m2</text>
						<text transform="matrix(0.6112 0.7915 -0.7915 0.6112 803.2797 1350.0502)" class="st14 futura-book st33">21</text>
						<text transform="matrix(0.5888 0.7983 -0.8083 0.5888 805.4593 1340.981)" class="st10 st11 st34">16.00</text>
						<text transform="matrix(0.8164 -0.5775 0.5775 0.8164 785.3998 1336.87)" class="st10 st11 st35">8.00</text>
					</g>
					<g id="C-62-230">
						<text transform="matrix(0.8083 -0.5888 0.5888 0.8083 835.1603 1357.7206)" class="st10 st11 st32">8.00</text>
						<text transform="matrix(0.6112 0.7915 -0.7915 0.6112 815.3293 1329.7701)" class="st10 st11 st33">128.00 m2</text>
						<text transform="matrix(0.6112 0.7915 -0.7915 0.6112 825.6196 1333.6406)" class="st14 futura-book st33">22</text>
						<text transform="matrix(0.5888 0.7983 -0.8083 0.5888 827.7999 1324.5801)" class="st10 st11 st34">16.00</text>
						<text transform="matrix(0.8164 -0.5775 0.5775 0.8164 807.7396 1320.4598)" class="st10 st11 st35">8.00</text>
					</g>
					<g id="C-62-231">
						<text transform="matrix(0.8083 -0.5888 0.5888 0.8083 856.2601 1341.6895)" class="st10 st11 st32">8.00</text>
						<text transform="matrix(0.6112 0.7915 -0.7915 0.6112 836.4396 1313.7498)" class="st10 st11 st33">128.00 m2</text>
						<text transform="matrix(0.6112 0.7915 -0.7915 0.6112 846.7195 1317.6196)" class="st14 futura-book st33">23</text>
						<text transform="matrix(0.5888 0.7983 -0.8083 0.5888 848.9002 1308.5608)" class="st10 st11 st34">16.00</text>
						<text transform="matrix(0.8164 -0.5775 0.5775 0.8164 828.8499 1304.4397)" class="st10 st11 st35">8.00</text>
					</g>
					<g id="C-62-232">
						<text transform="matrix(0.8083 -0.5888 0.5888 0.8083 879.1297 1325.5195)" class="st10 st11 st32">8.00</text>
						<text transform="matrix(0.6112 0.7915 -0.7915 0.6112 859.3097 1297.5699)" class="st10 st11 st33">128.00 m2</text>
						<text transform="matrix(0.6112 0.7915 -0.7915 0.6112 869.5903 1301.4503)" class="st14 futura-book st33">24</text>
						<text transform="matrix(0.5888 0.7983 -0.8083 0.5888 871.7701 1292.3809)" class="st10 st11 st34">16.00</text>
						<text transform="matrix(0.8164 -0.5775 0.5775 0.8164 851.7102 1288.2606)" class="st10 st11 st35">8.00</text>
					</g>
					<g id="C-62-233">
						<text transform="matrix(0.8083 -0.5888 0.5888 0.8083 900.6999 1308.3992)" class="st10 st11 st32">8.00</text>
						<text transform="matrix(0.6112 0.7915 -0.7915 0.6112 880.879 1280.4598)" class="st10 st11 st33">128.00 m2</text>
						<text transform="matrix(0.6112 0.7915 -0.7915 0.6112 891.1597 1284.3291)" class="st14 futura-book st33">25</text>
						<text transform="matrix(0.5888 0.7983 -0.8083 0.5888 893.34 1275.2705)" class="st10 st11 st34">16.00</text>
						<text transform="matrix(0.8164 -0.5775 0.5775 0.8164 873.2897 1271.1501)" class="st10 st11 st35">8.00</text>
					</g>
					<g id="C-62-234">
						<text transform="matrix(0.8083 -0.5888 0.5888 0.8083 922.4202 1292.3101)" class="st10 st11 st32">8.00</text>
						<text transform="matrix(0.6112 0.7915 -0.7915 0.6112 902.6 1264.369)" class="st10 st11 st33">128.00 m2</text>
						<text transform="matrix(0.6112 0.7915 -0.7915 0.6112 912.8792 1268.2395)" class="st14 futura-book st33">26</text>
						<text transform="matrix(0.5888 0.7983 -0.8083 0.5888 915.0602 1259.1802)" class="st10 st11 st34">16.00</text>
						<text transform="matrix(0.8164 -0.5775 0.5775 0.8164 895.0001 1255.05)" class="st10 st11 st35">8.00</text>
					</g>
					<g id="C-62-235">
						<text transform="matrix(0.8083 -0.5888 0.5888 0.8083 949.41 1273)" class="st10 st11 st32">1064</text>
						<text transform="matrix(0.6112 0.7915 -0.7915 0.6112 929.5901 1245.0499)" class="st10 st11 st33">170.22 m2</text>
						<text transform="matrix(0.6112 0.7915 -0.7915 0.6112 939.8693 1248.9302)" class="st14 futura-book st33">27</text>
						<text transform="matrix(0.5888 0.7983 -0.8083 0.5888 942.0599 1239.87)" class="st10 st11 st34">16.00</text>
						<text transform="matrix(0.8164 -0.5775 0.5775 0.8164 922.0001 1235.7504)" class="st10 st11 st35">10.64</text>
						<polygon class="st17" points="929.7,1233.7 925.6,1238 929.6,1242.4"/>
						<polygon class="st18" points="929.8,1233.7 929.7,1242.4 933.8,1238.1"/>
					</g>
					<g id="C-62-236">
						<text transform="matrix(9.999500e-03 -0.9999 0.9999 9.999500e-03 573.0994 1499.2108)" class="st10 st11 st23">8.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 539.1194 1498.1694)" class="st10 st11 st13">128.00 m2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 548.3791 1492.2494)" class="st14 futura-book st13">02</text>
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 542.2498 1485.3801)" class="st10 st11 st13">16.00</text>
						<text transform="matrix(1.999600e-02 -0.9998 0.9998 1.999600e-02 526.9505 1499.0404)" class="st10 st11 st26">8.00</text>
					</g>
					<g id="C-62-237">
						<text transform="matrix(9.999500e-03 -0.9999 0.9999 9.999500e-03 573.0995 1472.3403)" class="st10 st11 st23">8.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 539.1193 1471.2892)" class="st10 st11 st13">128.00 m2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 548.3798 1465.3701)" class="st14 futura-book st13">03</text>
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 542.249 1458.4999)" class="st10 st11 st13">16.00</text>
						<text transform="matrix(1.999600e-02 -0.9998 0.9998 1.999600e-02 526.9507 1472.1698)" class="st10 st11 st26">8.00</text>
					</g>
					<g id="C-62-238">
						<text transform="matrix(9.999500e-03 -0.9999 0.9999 9.999500e-03 573.0896 1445.5908)" class="st10 st11 st23">8.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 539.1193 1444.5398)" class="st10 st11 st13">128.00 m2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 548.379 1438.6198)" class="st14 futura-book st13">04</text>
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 542.2498 1431.7593)" class="st10 st11 st13">16.00</text>
						<text transform="matrix(1.999600e-02 -0.9998 0.9998 1.999600e-02 526.9504 1445.4203)" class="st10 st11 st26">8.00</text>
					</g>
					<g id="C-62-239">
						<text transform="matrix(9.999500e-03 -0.9999 0.9999 9.999500e-03 573.0997 1418.3102)" class="st10 st11 st23">8.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 539.119 1417.2592)" class="st10 st11 st13">128.00 m2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 548.3796 1411.3401)" class="st14 futura-book st13">05</text>
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 542.2491 1404.4796)" class="st10 st11 st13">16.00</text>
						<text transform="matrix(1.999600e-02 -0.9998 0.9998 1.999600e-02 526.95 1418.1394)" class="st10 st11 st26">8.00</text>
					</g>
					<g id="C-62-240">
						<text transform="matrix(9.999500e-03 -0.9999 0.9999 9.999500e-03 573.1 1391.9105)" class="st10 st11 st23">8.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 539.1197 1390.8594)" class="st10 st11 st13">128.00 m2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 548.3794 1384.9501)" class="st14 futura-book st13">06</text>
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 542.2496 1378.0701)" class="st10 st11 st13">16.00</text>
						<text transform="matrix(1.999600e-02 -0.9998 0.9998 1.999600e-02 526.9506 1391.7396)" class="st10 st11 st26">8.00</text>
					</g>
					<g id="C-62-241">
						<text transform="matrix(9.999500e-03 -0.9999 0.9999 9.999500e-03 573.0896 1364.6298)" class="st10 st11 st23">8.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 539.1193 1363.5797)" class="st10 st11 st13">128.00 m2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 548.3791 1357.6694)" class="st14 futura-book st13">07</text>
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 542.2498 1350.8002)" class="st10 st11 st13">16.00</text>
						<text transform="matrix(1.999600e-02 -0.9998 0.9998 1.999600e-02 526.9501 1364.4607)" class="st10 st11 st26">8.00</text>
					</g>
					<g id="C-62-242">
						<text transform="matrix(9.999500e-03 -0.9999 0.9999 9.999500e-03 573.0994 1337.48)" class="st10 st11 st23">8.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 539.1193 1336.4298)" class="st10 st11 st13">128.00 m2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 548.379 1330.5099)" class="st14 futura-book st13">08</text>
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 542.2489 1323.6395)" class="st10 st11 st13">16.00</text>
						<text transform="matrix(1.999600e-02 -0.9998 0.9998 1.999600e-02 526.9501 1337.3108)" class="st10 st11 st26">8.00</text>
					</g>
					<g id="C-62-243">
						<text transform="matrix(9.999500e-03 -0.9999 0.9999 9.999500e-03 573.0893 1308.7988)" class="st10 st11 st23">8.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 539.1198 1307.7595)" class="st10 st11 st13">128.00 m2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 548.3794 1301.8395)" class="st14 futura-book st13">09</text>
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 542.2495 1294.9692)" class="st10 st11 st13">16.00</text>
						<text transform="matrix(1.999600e-02 -0.9998 0.9998 1.999600e-02 526.9503 1308.6312)" class="st10 st11 st26">8.00</text>
					</g>
					<g id="C-62-244">
						<text transform="matrix(9.999500e-03 -0.9999 0.9999 9.999500e-03 573.0895 1282.5104)" class="st10 st11 st23">8.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 539.1194 1281.4594)" class="st10 st11 st13">128.00 m2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 548.3791 1275.5393)" class="st14 futura-book st13">10</text>
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 542.2498 1268.67)" class="st10 st11 st13">16.00</text>
						<text transform="matrix(1.999600e-02 -0.9998 0.9998 1.999600e-02 526.9499 1282.3291)" class="st10 st11 st26">8.00</text>
					</g>
					<g id="C-62-245">
						<text transform="matrix(9.999500e-03 -0.9999 0.9999 9.999500e-03 573.0893 1255.2805)" class="st10 st11 st23">8.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 539.1198 1254.2393)" class="st10 st11 st13">128.00 m2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 548.3795 1248.33)" class="st14 futura-book st13">11</text>
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 542.2495 1241.45)" class="st10 st11 st13">16.00</text>
						<text transform="matrix(1.999600e-02 -0.9998 0.9998 1.999600e-02 526.95 1255.1205)" class="st10 st11 st26">8.00</text>
					</g>
					<g id="C-62-246">
						<text transform="matrix(9.999500e-03 -0.9999 0.9999 9.999500e-03 573.0998 1228.8398)" class="st10 st11 st23">8.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 539.119 1227.7897)" class="st10 st11 st13">128.00 m2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 548.3796 1221.8794)" class="st14 futura-book st13">12</text>
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 542.2493 1215.0092)" class="st10 st11 st13">16.00</text>
						<text transform="matrix(1.999600e-02 -0.9998 0.9998 1.999600e-02 526.9506 1228.6699)" class="st10 st11 st26">8.00</text>
					</g>
					<g id="C-62-247">
						<text transform="matrix(9.999500e-03 -0.9999 0.9999 9.999500e-03 573.0896 1200.559)" class="st10 st11 st23">8.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 539.1194 1199.5197)" class="st10 st11 st13">128.00 m2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 548.3791 1193.5996)" class="st14 futura-book st13">13</text>
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 542.2498 1186.7294)" class="st10 st11 st13">16.00</text>
						<text transform="matrix(1.999600e-02 -0.9998 0.9998 1.999600e-02 526.9506 1200.3907)" class="st10 st11 st26">8.00</text>
					</g>
					<g id="C-62-248">
						<text transform="matrix(9.999500e-03 -0.9999 0.9999 9.999500e-03 573.0997 1173.671)" class="st10 st11 st23">8.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 539.1191 1172.6296)" class="st10 st11 st13">128.00 m2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 548.3797 1166.7096)" class="st14 futura-book st13">14</text>
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 542.2491 1159.8394)" class="st10 st11 st13">16.00</text>
						<text transform="matrix(1.999600e-02 -0.9998 0.9998 1.999600e-02 526.9504 1173.4908)" class="st10 st11 st26">8.00</text>
					</g>
					<g id="C-62-249">
						<text transform="matrix(9.999500e-03 -0.9999 0.9999 9.999500e-03 573.0901 1146.6012)" class="st10 st11 st23">8.00</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 539.1198 1145.5492)" class="st10 st11 st13">128.00 m2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 548.3795 1139.6399)" class="st14 futura-book st13">15</text>
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 542.2493 1132.7697)" class="st10 st11 st13">16.00</text>
						<text transform="matrix(1.999600e-02 -0.9998 0.9998 1.999600e-02 526.9506 1146.4288)" class="st10 st11 st26">8.00</text>
					</g>
					<g id="C-62-250">
						<text transform="matrix(9.999500e-03 -0.9999 0.9999 9.999500e-03 573.1 1113.379)" class="st10 st11 st23">9.39</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 535.0092 1112.3396)" class="st10 st11 st13">186.20 m2</text>
						<text transform="matrix(0.9999 -9.999500e-03 9.999500e-03 0.9999 544.2698 1106.4196)" class="st14 futura-book st13">16</text>
						<text transform="matrix(0.9377 0.3192 -0.3192 0.9477 542.1498 1092.2593)" class="st10 st11 st48">16.95</text>
						<text transform="matrix(1.999600e-02 -0.9998 0.9998 1.999600e-02 526.9501 1105.28)" class="st10 st11 st26">14.80</text>
						<polygon class="st17" points="562.7,1100.9 558.8,1105.4 563,1109.6"/>
						<polygon class="st18" points="562.7,1100.9 563,1109.6 566.9,1105.1"/>
					</g>
					<g id="C-62-251">
						<text transform="matrix(3.996804e-02 -0.9992 0.9992 3.996804e-02 200.9699 1551.5089)" class="st10 st11 st12">8.81</text>
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 163.8697 1550.9894)" class="st10 st11 st13">150.52 m2</text>
						<polygon class="st17" points="191.8,1543 187.8,1547.4 191.9,1551.8"/>
						<polygon class="st18" points="191.8,1543 191.9,1551.8 195.9,1547.4"/>
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 173.2699 1545.2999)" class="st14 futura-book st13">60</text>
						<text transform="matrix(0.9896 2.998651e-02 -2.998651e-02 0.9996 167.5696 1559.4901)" class="st10 st11 st15">17.51</text>
						<text transform="matrix(0.9896 2.998651e-02 -2.998651e-02 0.9996 167.0601 1536.8403)" class="st10 st11 st15">17.50</text>
						<text transform="matrix(4.993762e-02 -0.9988 0.9988 4.993762e-02 148.7297 1551.6997)" class="st10 st11 st16">8.39</text>
					</g>
					<g id="C-62-252">
						<text transform="matrix(3.996804e-02 -0.9992 0.9992 3.996804e-02 200.9698 1522.3391)" class="st10 st11 st12">8.00</text>
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 163.8693 1524.0798)" class="st10 st11 st13">140.00 m2</text>
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 173.2694 1518.3894)" class="st14 futura-book st13">61</text>
						<text transform="matrix(0.9896 2.998651e-02 -2.998651e-02 0.9996 167.0601 1509.9402)" class="st10 st11 st15">17.50</text>
						<text transform="matrix(4.993762e-02 -0.9988 0.9988 4.993762e-02 148.7293 1522.5305)" class="st10 st11 st16">8.00</text>
					</g>
					<g id="C-62-253">
						<text transform="matrix(3.996804e-02 -0.9992 0.9992 3.996804e-02 200.9705 1494.8093)" class="st10 st11 st12">8.00</text>
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 163.8692 1496.5502)" class="st10 st11 st13">140.00 m2</text>
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 173.2693 1490.8597)" class="st14 futura-book st13">62</text>
						<text transform="matrix(0.9896 2.998651e-02 -2.998651e-02 0.9996 167.0597 1482.4003)" class="st10 st11 st15">17.50</text>
						<text transform="matrix(4.993762e-02 -0.9988 0.9988 4.993762e-02 148.73 1495.0021)" class="st10 st11 st16">8.00</text>
					</g>
					<g id="C-62-254">
						<text transform="matrix(3.996804e-02 -0.9992 0.9992 3.996804e-02 200.9697 1467.6587)" class="st10 st11 st12">8.00</text>
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 163.8692 1469.3994)" class="st10 st11 st13">140.00 m2</text>
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 173.2693 1463.71)" class="st14 futura-book st13">63</text>
						<text transform="matrix(0.9896 2.998651e-02 -2.998651e-02 0.9996 167.0594 1455.2501)" class="st10 st11 st15">17.50</text>
						<text transform="matrix(4.993762e-02 -0.9988 0.9988 4.993762e-02 148.7294 1467.851)" class="st10 st11 st16">8.00</text>
					</g>
					<g id="C-62-255">
						<text transform="matrix(3.996804e-02 -0.9992 0.9992 3.996804e-02 200.9701 1440.2579)" class="st10 st11 st12">8.00</text>
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 163.8697 1441.9996)" class="st10 st11 st13">140.00 m2</text>
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 173.2699 1436.3101)" class="st14 futura-book st13">64</text>
						<text transform="matrix(0.9896 2.998651e-02 -2.998651e-02 0.9996 167.0598 1427.8499)" class="st10 st11 st15">17.50</text>
						<text transform="matrix(4.993762e-02 -0.9988 0.9988 4.993762e-02 148.7296 1440.4496)" class="st10 st11 st16">8.00</text>
					</g>
					<g id="C-62-256">
						<text transform="matrix(3.996804e-02 -0.9992 0.9992 3.996804e-02 200.9698 1411.4595)" class="st10 st11 st12">8.60</text>
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 163.8696 1413.1993)" class="st10 st11 st13">150.50 m2</text>
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 173.2697 1407.5099)" class="st14 futura-book st13">65</text>
						<text transform="matrix(0.9896 2.998651e-02 -2.998651e-02 0.9996 167.0598 1399.0603)" class="st10 st11 st15">17.50</text>
						<text transform="matrix(4.993762e-02 -0.9988 0.9988 4.993762e-02 148.7292 1411.6519)" class="st10 st11 st16">8.60</text>
						<polygon class="st17" points="191.8,1402.6 187.8,1406.9 191.9,1411.3"/>
						<polygon class="st18" points="191.8,1402.6 191.9,1411.3 195.9,1406.9"/>
					</g>
					<g id="C-62-257">
						<text transform="matrix(3.996804e-02 -0.9992 0.9992 3.996804e-02 200.9803 1379.9698)" class="st10 st11 st12">9.00</text>
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 163.8691 1381.7095)" class="st10 st11 st13">157.50 m2</text>
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 173.2693 1376.0093)" class="st14 futura-book st13">66</text>
						<text transform="matrix(0.9896 2.998651e-02 -2.998651e-02 0.9996 167.06 1367.5604)" class="st10 st11 st15">17.50</text>
						<text transform="matrix(4.993762e-02 -0.9988 0.9988 4.993762e-02 148.7295 1380.1615)" class="st10 st11 st16">9.00</text>
						<polygon class="st17" points="191.8,1371.7 187.8,1376 191.9,1380.4"/>
						<polygon class="st18" points="191.8,1371.7 191.9,1380.4 195.9,1376"/>
					</g>
					<g id="C-62-258">
						<text transform="matrix(3.996804e-02 -0.9992 0.9992 3.996804e-02 200.97 1349.4901)" class="st10 st11 st12">9.00</text>
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 163.8692 1351.2294)" class="st10 st11 st13">157.50 m2</text>
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 173.2693 1345.5399)" class="st14 futura-book st13">67</text>
						<text transform="matrix(0.9896 2.998651e-02 -2.998651e-02 0.9996 167.0597 1337.0905)" class="st10 st11 st15">17.50</text>
						<text transform="matrix(4.993762e-02 -0.9988 0.9988 4.993762e-02 148.7302 1349.6801)" class="st10 st11 st16">9.00</text>
						<polygon class="st17" points="191.8,1340.7 187.8,1345.1 191.9,1349.4"/>
						<polygon class="st18" points="191.8,1340.7 191.9,1349.4 195.9,1345"/>
					</g>
					<g id="C-62-259">
						<text transform="matrix(3.996804e-02 -0.9992 0.9992 3.996804e-02 200.9701 1317.9688)" class="st10 st11 st12">9.00</text>
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 163.8689 1319.7094)" class="st10 st11 st13">156.89 m2</text>
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 173.2691 1314.01)" class="st14 futura-book st13">68</text>
						<text transform="matrix(0.9896 2.998651e-02 -2.998651e-02 0.9996 167.0598 1305.5603)" class="st10 st11 st15">17.50</text>
						<text transform="matrix(4.993762e-02 -0.9988 0.9988 4.993762e-02 148.7299 1318.1622)" class="st10 st11 st16">8.93</text>
						<polygon class="st17" points="191.8,1307.4 187.8,1311.8 191.9,1316.2"/>
						<polygon class="st18" points="191.8,1307.4 191.9,1316.2 195.9,1311.8"/>
					</g>
					<g id="C-62-260">
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 108.8295 1319.7097)" class="st10 st11 st13">142.38 m2</text>
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 118.2292 1314.0193)" class="st14 futura-book st13">69</text>
						<text transform="matrix(0.9896 2.998651e-02 -2.998651e-02 0.9996 112.0195 1305.5602)" class="st10 st11 st15">16.00</text>
						<text transform="matrix(4.993762e-02 -0.9988 0.9988 4.993762e-02 93.6896 1318.1617)" class="st10 st11 st16">9..14</text>
						<polygon class="st17" points="103.6,1307.4 99.6,1311.8 103.7,1316.2"/>
						<polygon class="st18" points="103.7,1307.4 103.7,1316.2 107.8,1311.8"/>
					</g>
					<g id="C-62-261">
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 108.8296 1352.0795)" class="st10 st11 st13">144.00 m2</text>
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 118.2292 1346.39)" class="st14 futura-book st13">70</text>
						<text transform="matrix(0.9896 2.998651e-02 -2.998651e-02 0.9996 112.0195 1337.9305)" class="st10 st11 st15">16.00</text>
						<text transform="matrix(4.993762e-02 -0.9988 0.9988 4.993762e-02 93.6894 1350.5302)" class="st10 st11 st16">9.00</text>
					</g>
					<g id="C-62-262">
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 108.8296 1383.04)" class="st10 st11 st13">144.00 m2</text>
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 118.2292 1377.3496)" class="st14 futura-book st13">71</text>
						<text transform="matrix(0.9896 2.998651e-02 -2.998651e-02 0.9996 112.0195 1368.8998)" class="st10 st11 st15">16.00</text>
						<text transform="matrix(4.993762e-02 -0.9988 0.9988 4.993762e-02 93.6897 1381.5005)" class="st10 st11 st16">9.00</text>
					</g>
					<g id="C-62-263">
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 108.8293 1413.1997)" class="st10 st11 st13">137.60 m2</text>
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 118.2294 1407.5093)" class="st14 futura-book st13">72</text>
						<text transform="matrix(0.9896 2.998651e-02 -2.998651e-02 0.9996 112.0194 1399.0602)" class="st10 st11 st15">16.00</text>
						<text transform="matrix(4.993762e-02 -0.9988 0.9988 4.993762e-02 93.6899 1411.6514)" class="st10 st11 st16">8.60</text>
					</g>
					<g id="C-62-264">
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 108.8294 1442)" class="st10 st11 st13">128.00 m2</text>
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 118.2295 1436.3096)" class="st14 futura-book st13">73</text>
						<text transform="matrix(0.9896 2.998651e-02 -2.998651e-02 0.9996 112.0194 1427.8497)" class="st10 st11 st15">16.00</text>
						<text transform="matrix(4.993762e-02 -0.9988 0.9988 4.993762e-02 93.6892 1440.4509)" class="st10 st11 st16">8.00</text>
					</g>
					<g id="C-62-265">
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 108.8396 1469.3999)" class="st10 st11 st13">128.00 m2</text>
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 118.2294 1463.7094)" class="st14 futura-book st13">74</text>
						<text transform="matrix(0.9896 2.998651e-02 -2.998651e-02 0.9996 112.02 1455.25)" class="st10 st11 st15">16.00</text>
						<text transform="matrix(4.993762e-02 -0.9988 0.9988 4.993762e-02 93.6901 1467.8505)" class="st10 st11 st16">8.00</text>
					</g>
					<g id="C-62-266">
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 108.8292 1496.9998)" class="st10 st11 st13">128.00 m2</text>
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 118.2293 1491.3093)" class="st14 futura-book st13">75</text>
						<text transform="matrix(0.9896 2.998651e-02 -2.998651e-02 0.9996 112.0195 1482.8506)" class="st10 st11 st15">16.00</text>
						<text transform="matrix(4.993762e-02 -0.9988 0.9988 4.993762e-02 93.6897 1495.4513)" class="st10 st11 st16">8.00</text>
					</g>
					<g id="C-62-267">
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 108.8395 1524.4896)" class="st10 st11 st13">128.00 m2</text>
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 118.2293 1518.7999)" class="st14 futura-book st13">76</text>
						<text transform="matrix(0.9896 2.998651e-02 -2.998651e-02 0.9996 112.0198 1510.3602)" class="st10 st11 st15">16.00</text>
						<text transform="matrix(4.993762e-02 -0.9988 0.9988 4.993762e-02 93.6895 1522.9504)" class="st10 st11 st16">8.00</text>
					</g>
					<g id="C-62-268">
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 108.8293 1551.3893)" class="st10 st11 st13">131.11 m2</text>
						<text transform="matrix(0.9999 9.999500e-03 -9.999500e-03 0.9999 118.2289 1545.6997)" class="st14 futura-book st13">77</text>
						<text transform="matrix(0.9896 2.998651e-02 -2.998651e-02 0.9996 112.0195 1537.2397)" class="st10 st11 st15">16.00</text>
						<text transform="matrix(0.9896 2.998651e-02 -2.998651e-02 0.9996 112.0194 1558.1497)" class="st10 st11 st15">16.00</text>
						<text transform="matrix(4.993762e-02 -0.9988 0.9988 4.993762e-02 93.6894 1549.8414)" class="st10 st11 st16">8.00</text>
						<polygon class="st17" points="102.4,1541.3 98.3,1545.7 102.4,1550.1"/>
						<polygon class="st18" points="102.4,1541.3 102.5,1550.1 106.5,1545.7"/>
					</g>
					<g id="C-62-269">
						<text transform="matrix(9.999500e-03 -0.9999 0.9999 9.999500e-03 515.8296 1092.0903)" class="st10 st11 st23">8.39</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 474.7399 1089.8704)" class="st10 st11 st24">160.00 m2</text>
						<polygon class="st17" points="469.5,1083.5 465.6,1087.9 469.8,1092.2"/>
						<polygon class="st18" points="469.6,1083.5 469.9,1092.2 473.8,1087.7"/>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 483.9802 1083.9198)" class="st14 futura-book st24">37</text>
						<text transform="matrix(1 0 0 1 478.69 1099.59)" class="st10 st11 st25">20.00</text>
						<text transform="matrix(1 0 0 1 478.69 1078.58)" class="st10 st11 st25">20.00</text>
						<text transform="matrix(1.999600e-02 -0.9998 0.9998 1.999600e-02 457.1902 1092.0895)" class="st10 st11 st26">8.00</text>
					</g>
					<g id="C-62-270">
						<text transform="matrix(9.999500e-03 -0.9999 0.9999 9.999500e-03 1358.4498 88.4308)" class="st10 st11 st23">8.39</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 1317.3694 86.2098)" class="st10 st11 st24">160.00 m2</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 1326.6097 80.2602)" class="st14 futura-book st24">44</text>
						<text transform="matrix(1 0 0 1 1321.3101 95.93)" class="st10 st11 st25">20.00</text>
						<text transform="matrix(1.999600e-02 -0.9998 0.9998 1.999600e-02 1299.8204 88.4299)" class="st10 st11 st26">8.00</text>
					</g>
					<g id="C-62-271">
						<text transform="matrix(9.999500e-03 -0.9999 0.9999 9.999500e-03 1358.4497 114.6099)" class="st10 st11 st23">8.39</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 1317.3693 112.3802)" class="st10 st11 st24">160.00 m2</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 1326.6096 106.4306)" class="st14 futura-book st24">45</text>
						<text transform="matrix(1 0 0 1 1321.3101 122.11)" class="st10 st11 st25">20.00</text>
						<text transform="matrix(1.999600e-02 -0.9998 0.9998 1.999600e-02 1299.8203 114.6099)" class="st10 st11 st26">8.00</text>
					</g>
					<g id="C-62-272">
						<text transform="matrix(9.999500e-03 -0.9999 0.9999 9.999500e-03 1358.4497 142.4501)" class="st10 st11 st23">8.39</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 1317.3694 140.2198)" class="st10 st11 st24">160.00 m2</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 1326.6096 134.2703)" class="st14 futura-book st24">46</text>
						<text transform="matrix(1 0 0 1 1321.3101 149.95)" class="st10 st11 st25">20.00</text>
						<text transform="matrix(1.999600e-02 -0.9998 0.9998 1.999600e-02 1299.8203 142.4495)" class="st10 st11 st26">8.00</text>
					</g>
					<g id="C-62-273">
						<text transform="matrix(9.999500e-03 -0.9999 0.9999 9.999500e-03 1358.4496 169.8011)" class="st10 st11 st23">8.39</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 1317.3597 167.5801)" class="st10 st11 st24">160.00 m2</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 1326.6001 161.6305)" class="st14 futura-book st24">47</text>
						<text transform="matrix(1 0 0 1 1321.3101 177.31)" class="st10 st11 st25">20.00</text>
						<text transform="matrix(1.999600e-02 -0.9998 0.9998 1.999600e-02 1299.8201 169.8094)" class="st10 st11 st26">8.00</text>
					</g>
					<g id="C-62-274">
						<text transform="matrix(9.999500e-03 -0.9999 0.9999 9.999500e-03 1358.4497 197.1404)" class="st10 st11 st23">8.39</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 1317.3694 194.9204)" class="st10 st11 st24">160.00 m2</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 1326.6096 188.9699)" class="st14 futura-book st24">48</text>
						<text transform="matrix(1 0 0 1 1321.3101 204.64)" class="st10 st11 st25">20.00</text>
						<text transform="matrix(1.999600e-02 -0.9998 0.9998 1.999600e-02 1299.8302 197.1393)" class="st10 st11 st26">8.00</text>
					</g>
					<g id="C-62-275">
						<text transform="matrix(9.999500e-03 -0.9999 0.9999 9.999500e-03 1358.4496 224.0001)" class="st10 st11 st23">8.39</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 1317.3701 221.7706)" class="st10 st11 st24">160.00 m2</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 1326.5997 215.8203)" class="st14 futura-book st24">49</text>
						<text transform="matrix(1 0 0 1 1321.3101 231.5)" class="st10 st11 st25">20.00</text>
						<text transform="matrix(1.999600e-02 -0.9998 0.9998 1.999600e-02 1299.8204 224)" class="st10 st11 st26">8.00</text>
					</g>
					<g id="C-62-276">
						<text transform="matrix(9.999500e-03 -0.9999 0.9999 9.999500e-03 1358.4492 250.6098)" class="st10 st11 st23">8.39</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 1317.3693 248.3903)" class="st10 st11 st24">160.00 m2</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 1326.5997 242.44)" class="st14 futura-book st24">50</text>
						<text transform="matrix(1 0 0 1 1321.3101 258.12)" class="st10 st11 st25">20.00</text>
						<text transform="matrix(1.999600e-02 -0.9998 0.9998 1.999600e-02 1299.8207 250.6098)" class="st10 st11 st26">8.00</text>
					</g>
					<g id="C-62-277">
						<text transform="matrix(9.999500e-03 -0.9999 0.9999 9.999500e-03 1358.45 278.4608)" class="st10 st11 st23">8.39</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 1317.3693 276.23)" class="st10 st11 st24">160.00 m2</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 1326.5999 270.2806)" class="st14 futura-book st24">51</text>
						<text transform="matrix(1 0 0 1 1321.3101 285.96)" class="st10 st11 st25">20.00</text>
						<text transform="matrix(1.999600e-02 -0.9998 0.9998 1.999600e-02 1299.8203 278.4601)" class="st10 st11 st26">8.00</text>
					</g>
					<g id="C-62-278">
						<text transform="matrix(9.999500e-03 -0.9999 0.9999 9.999500e-03 1358.45 306.1009)" class="st10 st11 st23">8.39</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 1317.3596 303.8804)" class="st10 st11 st24">160.00 m2</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 1326.6 297.9298)" class="st14 futura-book st24">52</text>
						<text transform="matrix(1 0 0 1 1321.3101 313.61)" class="st10 st11 st25">20.00</text>
						<text transform="matrix(1.999600e-02 -0.9998 0.9998 1.999600e-02 1299.8204 306.0994)" class="st10 st11 st26">8.00</text>
					</g>
					<g id="C-62-279">
						<text transform="matrix(9.999500e-03 -0.9999 0.9999 9.999500e-03 1358.4498 333.95)" class="st10 st11 st23">8.39</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 1317.3696 331.7306)" class="st10 st11 st24">160.00 m2</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 1326.6002 325.7802)" class="st14 futura-book st24">53</text>
						<text transform="matrix(1 0 0 1 1321.3101 341.45)" class="st10 st11 st25">20.00</text>
						<text transform="matrix(1.999600e-02 -0.9998 0.9998 1.999600e-02 1299.8202 333.9497)" class="st10 st11 st26">8.00</text>
					</g>
					<g id="C-62-280">
						<text transform="matrix(9.999500e-03 -0.9999 0.9999 9.999500e-03 1358.4496 359.6602)" class="st10 st11 st23">8.39</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 1317.3701 357.4399)" class="st10 st11 st24">160.00 m2</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 1326.6094 351.4904)" class="st14 futura-book st24">54</text>
						<text transform="matrix(1 0 0 1 1321.3101 367.16)" class="st10 st11 st25">20.00</text>
						<text transform="matrix(1.999600e-02 -0.9998 0.9998 1.999600e-02 1299.8207 359.6589)" class="st10 st11 st26">8.00</text>
					</g>
					<g id="C-62-281">
						<text transform="matrix(9.999500e-03 -0.9999 0.9999 9.999500e-03 1358.4495 386.7202)" class="st10 st11 st23">8.39</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 1317.3702 384.5001)" class="st10 st11 st24">160.00 m2</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 1326.5997 378.5498)" class="st14 futura-book st24">55</text>
						<text transform="matrix(1 0 0 1 1321.3101 394.22)" class="st10 st11 st25">20.00</text>
						<text transform="matrix(1.999600e-02 -0.9998 0.9998 1.999600e-02 1299.8207 386.72)" class="st10 st11 st26">8.00</text>
					</g>
					<g id="C-62-282">
						<text transform="matrix(9.999500e-03 -0.9999 0.9999 9.999500e-03 1358.4492 414.9706)" class="st10 st11 st23">8.39</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 1317.3694 412.7403)" class="st10 st11 st24">160.00 m2</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 1326.61 406.8004)" class="st14 futura-book st24">56</text>
						<text transform="matrix(1 0 0 1 1321.3101 422.47)" class="st10 st11 st25">20.00</text>
						<text transform="matrix(1.999600e-02 -0.9998 0.9998 1.999600e-02 1299.8202 414.9693)" class="st10 st11 st26">8.00</text>
						<polygon class="st17" points="1312.1,402.4 1308.2,406.9 1312.4,411.1"/>
						<polygon class="st18" points="1312.2,402.4 1312.5,411.1 1316.4,406.6"/>
					</g>
					<g id="C-62-283">
						<text transform="matrix(9.999500e-03 -0.9999 0.9999 9.999500e-03 1358.4498 443.5209)" class="st10 st11 st23">8.39</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 1317.37 441.29)" class="st10 st11 st24">160.00 m2</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 1326.6094 435.3405)" class="st14 futura-book st24">57</text>
						<text transform="matrix(1 0 0 1 1321.3101 451.02)" class="st10 st11 st25">20.00</text>
						<text transform="matrix(1.999600e-02 -0.9998 0.9998 1.999600e-02 1299.8206 443.5199)" class="st10 st11 st26">8.00</text>
						<polygon class="st17" points="1312.1,430.9 1308.2,435.4 1312.4,439.6"/>
						<polygon class="st18" points="1312.2,430.9 1312.5,439.6 1316.4,435.1"/>
					</g>
					<g id="C-62-284">
						<text transform="matrix(9.999500e-03 -0.9999 0.9999 9.999500e-03 1358.4493 470.4304)" class="st10 st11 st23">8.39</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 1317.37 468.1998)" class="st10 st11 st24">160.00 m2</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 1326.6094 462.2503)" class="st14 futura-book st24">58</text>
						<text transform="matrix(1 0 0 1 1321.3101 477.93)" class="st10 st11 st25">20.00</text>
						<text transform="matrix(1.999600e-02 -0.9998 0.9998 1.999600e-02 1299.8206 470.4296)" class="st10 st11 st26">8.00</text>
						<polygon class="st17" points="1312.1,457.8 1308.2,462.3 1312.4,466.5"/>
						<polygon class="st18" points="1312.2,457.8 1312.5,466.5 1316.4,462"/>
					</g>
					<g id="C-62-285">
						<text transform="matrix(9.999500e-03 -0.9999 0.9999 9.999500e-03 1358.45 496.9308)" class="st10 st11 st23">8.39</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 1317.3696 494.7003)" class="st10 st11 st24">160.00 m2</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 1326.5992 488.75)" class="st14 futura-book st24">59</text>
						<text transform="matrix(1 0 0 1 1321.3101 504.42)" class="st10 st11 st25">20.00</text>
						<text transform="matrix(1.999600e-02 -0.9998 0.9998 1.999600e-02 1299.8201 496.929)" class="st10 st11 st26">8.00</text>
						<polygon class="st17" points="1312.1,484.3 1308.2,488.8 1312.4,493"/>
						<polygon class="st18" points="1312.2,484.3 1312.5,493 1316.4,488.5"/>
					</g>
					<g id="C-62-286">
						<text transform="matrix(9.999500e-03 -0.9999 0.9999 9.999500e-03 1358.4495 523.8315)" class="st10 st11 st23">8.39</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 1317.3696 521.6101)" class="st10 st11 st24">160.00 m2</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 1326.6002 515.6598)" class="st14 futura-book st24">60</text>
						<text transform="matrix(1 0 0 1 1321.3101 531.33)" class="st10 st11 st25">20.00</text>
						<text transform="matrix(1.999600e-02 -0.9998 0.9998 1.999600e-02 1299.8202 523.829)" class="st10 st11 st26">8.00</text>
						<polygon class="st17" points="1312.1,511.2 1308.2,515.7 1312.4,520"/>
						<polygon class="st18" points="1312.2,511.2 1312.5,520 1316.4,515.5"/>
					</g>
					<g id="C-62-287">
						<text transform="matrix(9.999500e-03 -0.9999 0.9999 9.999500e-03 1358.4498 550.7509)" class="st10 st11 st23">8.39</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 1317.3696 548.5199)" class="st10 st11 st24">160.00 m2</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 1326.6 542.5598)" class="st14 futura-book st24">61</text>
						<text transform="matrix(1 0 0 1 1321.3101 558.24)" class="st10 st11 st25">20.00</text>
						<text transform="matrix(1.999600e-02 -0.9998 0.9998 1.999600e-02 1299.8202 550.7386)" class="st10 st11 st26">8.00</text>
						<polygon class="st17" points="1312.1,538.1 1308.2,542.6 1312.4,546.9"/>
						<polygon class="st18" points="1312.2,538.1 1312.5,546.9 1316.4,542.4"/>
					</g>
					<g id="C-62-288">
						<text transform="matrix(9.999500e-03 -0.9999 0.9999 9.999500e-03 1358.4496 579.2991)" class="st10 st11 st23">8.39</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 1317.37 577.0599)" class="st10 st11 st24">160.00 m2</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 1326.5996 571.1105)" class="st14 futura-book st24">62</text>
						<text transform="matrix(1 0 0 1 1321.3101 586.79)" class="st10 st11 st25">20.00</text>
						<text transform="matrix(1.999600e-02 -0.9998 0.9998 1.999600e-02 1299.8204 579.299)" class="st10 st11 st26">8.00</text>
						<polygon class="st17" points="1312.1,566.7 1308.2,571.2 1312.4,575.4"/>
						<polygon class="st18" points="1312.2,566.7 1312.5,575.4 1316.4,570.9"/>
					</g>
					<g id="C-62-289">
						<text transform="matrix(9.999500e-03 -0.9999 0.9999 9.999500e-03 1358.4496 607.2302)" class="st10 st11 st23">8.39</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 1317.3699 604.9904)" class="st10 st11 st24">160.00 m2</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 1326.5995 599.0401)" class="st14 futura-book st24">63</text>
						<text transform="matrix(1 0 0 1 1321.3101 614.72)" class="st10 st11 st25">20.00</text>
						<text transform="matrix(1.999600e-02 -0.9998 0.9998 1.999600e-02 1299.8302 607.2306)" class="st10 st11 st26">8.00</text>
					</g>
					<g id="C-62-290">
						<text transform="matrix(9.999500e-03 -0.9999 0.9999 9.999500e-03 1358.45 634.63)" class="st10 st11 st23">8.39</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 1317.37 632.3905)" class="st10 st11 st24">160.00 m2</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 1326.6102 626.44)" class="st14 futura-book st24">64</text>
						<text transform="matrix(1 0 0 1 1321.3101 642.11)" class="st10 st11 st25">20.00</text>
						<text transform="matrix(1.999600e-02 -0.9998 0.9998 1.999600e-02 1299.8207 634.6207)" class="st10 st11 st26">8.00</text>
					</g>
					<g id="C-62-291">
						<text transform="matrix(9.999500e-03 -0.9999 0.9999 9.999500e-03 1358.4496 661.8209)" class="st10 st11 st23">8.39</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 1317.3698 659.5806)" class="st10 st11 st24">160.00 m2</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 1326.5992 653.6303)" class="st14 futura-book st24">65</text>
						<text transform="matrix(1 0 0 1 1321.3101 669.3)" class="st10 st11 st25">20.00</text>
						<text transform="matrix(1.999600e-02 -0.9998 0.9998 1.999600e-02 1299.8199 661.8096)" class="st10 st11 st26">8.00</text>
					</g>
					<g id="C-62-292">
						<text transform="matrix(9.999500e-03 -0.9999 0.9999 9.999500e-03 1358.4493 688.3104)" class="st10 st11 st23">8.39</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 1317.3694 686.0802)" class="st10 st11 st24">160.00 m2</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 1326.6096 680.1306)" class="st14 futura-book st24">66</text>
						<text transform="matrix(1 0 0 1 1321.3101 695.8)" class="st10 st11 st25">20.00</text>
						<text transform="matrix(1.999600e-02 -0.9998 0.9998 1.999600e-02 1299.8203 688.311)" class="st10 st11 st26">8.00</text>
					</g>
					<g id="C-62-293">
						<text transform="matrix(9.999500e-03 -0.9999 0.9999 9.999500e-03 1358.4491 715.5814)" class="st10 st11 st23">8.39</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 1317.36 713.3506)" class="st10 st11 st24">160.00 m2</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 1326.6002 707.4001)" class="st14 futura-book st24">67</text>
						<text transform="matrix(1 0 0 1 1321.3101 723.07)" class="st10 st11 st25">20.00</text>
						<text transform="matrix(1.999600e-02 -0.9998 0.9998 1.999600e-02 1299.8199 715.5802)" class="st10 st11 st26">8.00</text>
					</g>
					<g id="C-62-294">
						<text transform="matrix(9.999500e-03 -0.9999 0.9999 9.999500e-03 1358.4501 745.4695)" class="st10 st11 st23">9.84</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 1317.3695 743.2305)" class="st10 st11 st24">196.80 m2</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 1326.6099 737.28)" class="st14 futura-book st24">68</text>
						<text transform="matrix(1 0 0 1 1321.3101 752.96)" class="st10 st11 st25">20.00</text>
						<text transform="matrix(1.999600e-02 -0.9998 0.9998 1.999600e-02 1299.8307 745.4711)" class="st10 st11 st26">9.84</text>
					</g>
					<g id="C-62-295">
						<text transform="matrix(9.999500e-03 -0.9999 0.9999 9.999500e-03 1358.4492 778.7603)" class="st10 st11 st23">8.92</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 1317.3691 776.5205)" class="st10 st11 st24">179.21 m2</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 1326.6095 770.57)" class="st14 futura-book st24">69</text>
						<text transform="matrix(1 0 0 1 1321.3101 786.24)" class="st10 st11 st25">20.00</text>
						<text transform="matrix(1.999600e-02 -0.9998 0.9998 1.999600e-02 1299.8203 778.7589)" class="st10 st11 st26">9.00</text>
						<polygon class="st17" points="1312.1,766.2 1308.2,770.6 1312.4,774.9"/>
						<polygon class="st18" points="1312.2,766.2 1312.5,774.9 1316.4,770.4"/>
					</g>
					<g id="C-62-296">
						<text transform="matrix(9.999500e-03 -0.9999 0.9999 9.999500e-03 1358.4492 51.471)" class="st10 st11 st23">18.36</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 1317.37 58.0107)" class="st10 st11 st24">263.58 m2</text>
						<polygon class="st17" points="1312.1,51.6 1308.2,56.1 1312.4,60.3"/>
						<polygon class="st18" points="1312.2,51.6 1312.5,60.3 1316.4,55.8"/>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 1326.5996 52.0603)" class="st14 futura-book st24">43</text>
						<text transform="matrix(1 0 0 1 1321.3101 67.7401)" class="st10 st11 st25">20.00</text>
						<text transform="matrix(0.8884 -0.4392 0.4392 0.8984 1322.4404 36.8895)" class="st10 st11 st21">22.52</text>
						<text transform="matrix(1.999600e-02 -0.9998 0.9998 1.999600e-02 1299.8207 60.2397)" class="st10 st11 st26">8.00</text>
					</g>
					<g id="C-62-297">
						<text transform="matrix(9.999500e-03 -0.9999 0.9999 9.999500e-03 515.8193 1119.7811)" class="st10 st11 st23">8.39</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 474.7495 1117.5507)" class="st10 st11 st24">160 .00m2</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 483.98 1111.6003)" class="st14 futura-book st24">38</text>
						<text transform="matrix(1 0 0 1 478.69 1127.28)" class="st10 st11 st25">20.00</text>
						<text transform="matrix(1.999600e-02 -0.9998 0.9998 1.999600e-02 457.1999 1119.7808)" class="st10 st11 st26">8.00</text>
					</g>
					<g id="C-62-298">
						<text transform="matrix(9.999500e-03 -0.9999 0.9999 9.999500e-03 515.8297 1146.4799)" class="st10 st11 st23">8.39</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 474.7502 1144.2505)" class="st10 st11 st24">160.00 m2</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 483.9797 1138.3)" class="st14 futura-book st24">39</text>
						<text transform="matrix(1 0 0 1 478.69 1153.97)" class="st10 st11 st25">20.00</text>
						<text transform="matrix(1.999600e-02 -0.9998 0.9998 1.999600e-02 457.2002 1146.4794)" class="st10 st11 st26">8.00</text>
					</g>
					<g id="C-62-299">
						<text transform="matrix(9.999500e-03 -0.9999 0.9999 9.999500e-03 515.8192 1173.7994)" class="st10 st11 st23">8.39</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 474.7398 1171.5707)" class="st10 st11 st24">160.00 m2</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 483.9801 1165.6201)" class="st14 futura-book st24">40</text>
						<text transform="matrix(1 0 0 1 478.69 1181.29)" class="st10 st11 st25">20.00</text>
						<text transform="matrix(1.999600e-02 -0.9998 0.9998 1.999600e-02 457.19 1173.8011)" class="st10 st11 st26">8.00</text>
					</g>
					<g id="C-62-300">
						<text transform="matrix(9.999500e-03 -0.9999 0.9999 9.999500e-03 515.8301 1201.3204)" class="st10 st11 st23">8.39</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 474.7501 1199.0907)" class="st10 st11 st24">160.00 m2</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 483.9896 1193.1499)" class="st14 futura-book st24">41</text>
						<text transform="matrix(1 0 0 1 478.69 1208.8199)" class="st10 st11 st25">20.00</text>
						<text transform="matrix(1.999600e-02 -0.9998 0.9998 1.999600e-02 457.1906 1201.3203)" class="st10 st11 st26">8.00</text>
					</g>
					<g id="C-62-301">
						<text transform="matrix(9.999500e-03 -0.9999 0.9999 9.999500e-03 515.8295 1228.1401)" class="st10 st11 st23">8.39</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 474.7492 1225.9106)" class="st10 st11 st24">160.00 m2</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 483.9798 1219.9603)" class="st14 futura-book st24">42</text>
						<text transform="matrix(1 0 0 1 478.69 1235.64)" class="st10 st11 st25">20.00</text>
						<text transform="matrix(1.999600e-02 -0.9998 0.9998 1.999600e-02 457.1904 1228.1401)" class="st10 st11 st26">8.00</text>
					</g>
					<g id="C-62-302">
						<text transform="matrix(9.999500e-03 -0.9999 0.9999 9.999500e-03 515.8295 1255.9795)" class="st10 st11 st23">8.39</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 474.7493 1253.7504)" class="st10 st11 st24">160.00 m2</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 483.9798 1247.7999)" class="st14 futura-book st24">43</text>
						<text transform="matrix(1 0 0 1 478.69 1263.47)" class="st10 st11 st25">20.00</text>
						<text transform="matrix(1.999600e-02 -0.9998 0.9998 1.999600e-02 457.1903 1255.9796)" class="st10 st11 st26">8.00</text>
					</g>
					<g id="C-62-303">
						<text transform="matrix(9.999500e-03 -0.9999 0.9999 9.999500e-03 515.8295 1283.1195)" class="st10 st11 st23">8.39</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 474.75 1280.8906)" class="st10 st11 st24">160.00 m2</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 483.9795 1274.9403)" class="st14 futura-book st24">44</text>
						<text transform="matrix(1 0 0 1 478.69 1290.61)" class="st10 st11 st25">20.00</text>
						<text transform="matrix(1.999600e-02 -0.9998 0.9998 1.999600e-02 457.1906 1283.1199)" class="st10 st11 st26">8.00</text>
					</g>
					<g id="C-62-304">
						<text transform="matrix(9.999500e-03 -0.9999 0.9999 9.999500e-03 515.8299 1309.8416)" class="st10 st11 st23">8.39</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 474.7501 1307.61)" class="st10 st11 st24">160.00 m2</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 483.9796 1301.6605)" class="st14 futura-book st24">45</text>
						<text transform="matrix(1 0 0 1 478.69 1317.34)" class="st10 st11 st25">20.00</text>
						<text transform="matrix(1.999600e-02 -0.9998 0.9998 1.999600e-02 457.1905 1309.84)" class="st10 st11 st26">8.00</text>
						<polygon class="st17" points="466.3,1301.6 462.4,1306.1 466.6,1310.3"/>
						<polygon class="st18" points="466.4,1301.6 466.7,1310.3 470.6,1305.8"/>
					</g>
					<g id="C-62-305">
						<text transform="matrix(9.999500e-03 -0.9999 0.9999 9.999500e-03 515.8299 1337.5812)" class="st10 st11 st23">8.39</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 474.7499 1335.3402)" class="st10 st11 st24">160.00 m2</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 483.9794 1329.3899)" class="st14 futura-book st24">46</text>
						<text transform="matrix(1 0 0 1 478.69 1345.0699)" class="st10 st11 st25">20.00</text>
						<text transform="matrix(1.999600e-02 -0.9998 0.9998 1.999600e-02 457.1905 1337.58)" class="st10 st11 st26">8.00</text>
						<polygon class="st17" points="466.3,1329.5 462.4,1334 466.6,1338.2"/>
						<polygon class="st18" points="466.4,1329.5 466.7,1338.2 470.6,1333.7"/>
					</g>
					<g id="C-62-306">
						<text transform="matrix(9.999500e-03 -0.9999 0.9999 9.999500e-03 515.8297 1363.77)" class="st10 st11 st23">8.39</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 474.7396 1361.54)" class="st10 st11 st24">160.00 m2</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 483.9897 1355.5903)" class="st14 futura-book st24">47</text>
						<text transform="matrix(1 0 0 1 478.69 1371.27)" class="st10 st11 st25">20.00</text>
						<text transform="matrix(1.999600e-02 -0.9998 0.9998 1.999600e-02 457.1902 1363.7708)" class="st10 st11 st26">8.00</text>
						<polygon class="st17" points="466.3,1353.4 462.4,1357.9 466.6,1362.1"/>
						<polygon class="st18" points="466.4,1353.4 466.7,1362.1 470.6,1357.6"/>
					</g>
					<g id="C-62-307">
						<text transform="matrix(9.999500e-03 -0.9999 0.9999 9.999500e-03 515.8192 1391.6814)" class="st10 st11 st23">8.39</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 474.7498 1389.4498)" class="st10 st11 st24">160.00 m2</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 483.9794 1383.5005)" class="st14 futura-book st24">48</text>
						<text transform="matrix(1 0 0 1 478.69 1399.17)" class="st10 st11 st25">20.00</text>
						<text transform="matrix(1.999600e-02 -0.9998 0.9998 1.999600e-02 457.1898 1391.6786)" class="st10 st11 st26">8.00</text>
						<polygon class="st17" points="466.3,1382.8 462.4,1387.3 466.6,1391.5"/>
						<polygon class="st18" points="466.4,1382.8 466.7,1391.5 470.6,1387"/>
					</g>
					<g id="C-62-308">
						<text transform="matrix(9.999500e-03 -0.9999 0.9999 9.999500e-03 515.8301 1419.2004)" class="st10 st11 st23">8.39</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 474.7502 1416.9603)" class="st10 st11 st24">160.00 m2</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 483.9799 1411.0198)" class="st14 futura-book st24">49</text>
						<text transform="matrix(1 0 0 1 478.69 1426.7)" class="st10 st11 st25">20.00</text>
						<text transform="matrix(1.999600e-02 -0.9998 0.9998 1.999600e-02 457.1902 1419.2018)" class="st10 st11 st26">8.00</text>
						<polygon class="st17" points="466.3,1410.9 462.4,1415.4 466.6,1419.6"/>
						<polygon class="st18" points="466.4,1410.9 466.7,1419.6 470.6,1415.1"/>
					</g>
					<g id="C-62-309">
						<text transform="matrix(9.999500e-03 -0.9999 0.9999 9.999500e-03 515.83 1445.9791)" class="st10 st11 st23">8.39</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 474.7495 1443.7402)" class="st10 st11 st24">160.00 m2</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 483.98 1437.7909)" class="st14 futura-book st24">50</text>
						<text transform="matrix(1 0 0 1 478.69 1453.4701)" class="st10 st11 st25">20.00</text>
						<text transform="matrix(1.999600e-02 -0.9998 0.9998 1.999600e-02 457.1899 1445.9805)" class="st10 st11 st26">8.00</text>
					</g>
					<g id="C-62-310">
						<text transform="matrix(9.999500e-03 -0.9999 0.9999 9.999500e-03 515.8297 1478.2289)" class="st10 st11 st23">10.48</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 474.7498 1475.99)" class="st10 st11 st24">204.84 m2</text>
						<text transform="matrix(0.9898 -1.999600e-02 1.999600e-02 0.9998 483.9794 1470.0406)" class="st14 futura-book st24">51</text>
						<text transform="matrix(1 0 0 1 478.69 1488.9)" class="st10 st11 st25">20.00</text>
						<text transform="matrix(1.999600e-02 -0.9998 0.9998 1.999600e-02 457.2003 1478.2294)" class="st10 st11 st26">10.00</text>
						<polygon class="st17" points="466.3,1468.4 462.4,1472.9 466.6,1477.1"/>
						<polygon class="st18" points="466.4,1468.4 466.7,1477.1 470.6,1472.6"/>
					</g>
					<g id="C-62-311">
						<polygon class="st17" points="186.1,1601 182.1,1605.4 186.2,1609.8"/>
						<polygon class="st18" points="186.1,1601 186.2,1609.8 190.2,1605.4"/>
						<text transform="matrix(0.9992 3.996804e-02 -3.996804e-02 0.9992 180.8494 1648.0201)" class="st10 st11 st12">10.82</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 181.5206 1612.1592)" class="st10 st11 st13">185.58 m2</text>
						<text transform="matrix(-9.999500e-03 0.9999 -0.9999 -9.999500e-03 187.2199 1621.5594)" class="st14 futura-book st13">01</text>
						<text transform="matrix(-2.998651e-02 0.9896 -0.9996 -2.998651e-02 170.6904 1615.6895)" class="st10 st11 st15">17.50</text>
						<text transform="matrix(-2.998651e-02 0.9896 -0.9996 -2.998651e-02 196.1591 1615.6896)" class="st10 st11 st15">17.51</text>
						<text transform="matrix(0.9988 4.993762e-02 -4.993762e-02 0.9988 182.0597 1599.4296)" class="st10 st11 st16">10.39</text>
					</g>
					<line class="st49" x1="166.4" y1="1653.4" x2="167.4" y2="1592.9"/>
					<line class="st49" x1="138.9" y1="1652.7" x2="140.6" y2="1592.6"/>
					<line class="st49" x1="111.5" y1="1651.8" x2="113.1" y2="1591.8"/>
					<line class="st49" x1="84.4" y1="1651.5" x2="85.6" y2="1591"/>
					<line class="st49" x1="56.9" y1="1650.7" x2="58.5" y2="1590.6"/>
					<line class="st49" x1="56.9" y1="1530" x2="2.5" y2="1530"/>
					<line class="st49" x1="56.9" y1="1502.6" x2="2.5" y2="1502.6"/>
					<line class="st49" x1="56.9" y1="1475.4" x2="2.5" y2="1475.4"/>
					<line class="st49" x1="56.9" y1="1448.2" x2="2.5" y2="1448.2"/>
					<line class="st49" x1="56.9" y1="1420.9" x2="2.5" y2="1420.9"/>
					<line class="st49" x1="56.9" y1="1393.7" x2="2.5" y2="1393.7"/>
					<line class="st49" x1="56.9" y1="1366.5" x2="2.5" y2="1366.5"/>
					<line class="st49" x1="56.9" y1="1339.3" x2="2.5" y2="1339.3"/>
					<line class="st49" x1="56.9" y1="1312.1" x2="2.5" y2="1312.1"/>
					<line class="st49" x1="56.9" y1="1284.8" x2="2.5" y2="1284.8"/>
					<line class="st49" x1="56.9" y1="1257.6" x2="2.5" y2="1257.6"/>
					<line class="st49" x1="56.9" y1="1230.4" x2="2.5" y2="1230.4"/>
					<line class="st49" x1="56.9" y1="1203.2" x2="2.5" y2="1203.2"/>
					<line class="st49" x1="56.9" y1="1176" x2="2.5" y2="1176"/>
					<line class="st49" x1="56.9" y1="1148.8" x2="2.5" y2="1148.8"/>
					<line class="st49" x1="56.9" y1="1121.5" x2="2.5" y2="1121.5"/>
					<line class="st49" x1="56.9" y1="1094.3" x2="2.5" y2="1094.3"/>
					<line class="st49" x1="119.5" y1="1123.3" x2="119.3" y2="1054.6"/>
					<line class="st49" x1="146.7" y1="1123.3" x2="146.6" y2="1054.6"/>
					<line class="st49" x1="174" y1="1123.3" x2="173.8" y2="1054.6"/>
					<line class="st49" x1="201.2" y1="1123.3" x2="201.1" y2="1054.6"/>
					<line class="st49" x1="228.5" y1="1123.3" x2="228.3" y2="1054.6"/>
					<line class="st49" x1="255.7" y1="1123.3" x2="255.6" y2="1054.6"/>
					<line class="st49" x1="283" y1="1123.3" x2="282.9" y2="1054.6"/>
					<line class="st49" x1="310.2" y1="1123.3" x2="310.1" y2="1054.6"/>
					<line class="st49" x1="337.5" y1="1123.3" x2="337.4" y2="1054.6"/>
					<line class="st49" x1="364.7" y1="1123.3" x2="364.6" y2="1054.6"/>
					<line class="st49" x1="392" y1="1123.3" x2="391.9" y2="1054.6"/>
					<line class="st49" x1="520.2" y1="1101.9" x2="451.6" y2="1101.9"/>
					<line class="st49" x1="520.2" y1="1129.4" x2="451.6" y2="1129.4"/>
					<line class="st49" x1="520.2" y1="1156.4" x2="451.6" y2="1156.4"/>
					<line class="st49" x1="520.2" y1="1183.9" x2="451.6" y2="1183.9"/>
					<line class="st49" x1="520.2" y1="1211.1" x2="451.6" y2="1211.1"/>
					<line class="st49" x1="520.2" y1="1238.4" x2="451.6" y2="1238.4"/>
					<line class="st49" x1="520.2" y1="1265.6" x2="451.6" y2="1265.6"/>
					<line class="st49" x1="520.2" y1="1292.9" x2="451.6" y2="1292.9"/>
					<line class="st49" x1="520.2" y1="1320.1" x2="451.6" y2="1320.1"/>
					<line class="st49" x1="520.2" y1="1347.4" x2="451.6" y2="1347.4"/>
					<line class="st49" x1="520.2" y1="1374.6" x2="451.6" y2="1374.6"/>
					<line class="st49" x1="520.2" y1="1401.9" x2="451.6" y2="1401.9"/>
					<line class="st49" x1="520.2" y1="1429.1" x2="451.6" y2="1429.1"/>
					<line class="st49" x1="520.2" y1="1456.4" x2="451.6" y2="1456.4"/>
					<line class="st49" x1="465.1" y1="1592.2" x2="467.3" y2="1523.3"/>
					<line class="st49" x1="437.6" y1="1592.2" x2="439.8" y2="1523.3"/>
					<line class="st49" x1="412.3" y1="1522.1" x2="410.7" y2="1590.9"/>
					<line class="st49" x1="385.3" y1="1521.3" x2="383.6" y2="1590"/>
					<line class="st49" x1="357.7" y1="1520.9" x2="356.1" y2="1589.3"/>
					<line class="st49" x1="330.3" y1="1520.1" x2="328.8" y2="1588.8"/>
					<line class="st49" x1="303.3" y1="1519.3" x2="301.6" y2="1588.1"/>
					<path class="st49" d="M388.5,1490l1.6-59.6"/>
					<line class="st49" x1="354.5" y1="1489.1" x2="355.8" y2="1429.1"/>
					<line class="st49" x1="323.5" y1="1488.3" x2="325.2" y2="1428.6"/>
					<line class="st49" x1="292.9" y1="1487.5" x2="294.5" y2="1427.8"/>
					<line class="st49" x1="262.3" y1="1486.8" x2="263.5" y2="1427.1"/>
					<line class="st49" x1="143.3" y1="1560.7" x2="143.3" y2="1301.3"/>
					<line class="st49" x1="88.7" y1="1331.9" x2="203" y2="1331.9"/>
					<line class="st49" x1="88.8" y1="1362.5" x2="203" y2="1362.5"/>
					<line class="st49" x1="88.8" y1="1393.2" x2="203" y2="1393.2"/>
					<line class="st49" x1="88.8" y1="1422.5" x2="202.9" y2="1422.6"/>
					<line class="st49" x1="88.9" y1="1450.1" x2="203" y2="1450.1"/>
					<line class="st49" x1="88.8" y1="1477.5" x2="203" y2="1477.5"/>
					<line class="st49" x1="88.8" y1="1504.6" x2="203" y2="1504.7"/>
					<line class="st49" x1="88.8" y1="1532.1" x2="203" y2="1532"/>
					<line class="st49" x1="88.9" y1="1215.3" x2="419.9" y2="1213.8"/>
					<line class="st49" x1="116.3" y1="1269.7" x2="116.2" y2="1155.2"/>
					<line class="st49" x1="143.3" y1="1269.5" x2="143.3" y2="1155.2"/>
					<line class="st49" x1="170.8" y1="1269.4" x2="170.8" y2="1155.1"/>
					<line class="st49" x1="198.1" y1="1269.3" x2="198.1" y2="1154.8"/>
					<line class="st49" x1="225.3" y1="1269.4" x2="225.3" y2="1154.8"/>
					<line class="st49" x1="252.7" y1="1269" x2="252.8" y2="1154.8"/>
					<line class="st49" x1="280.2" y1="1269.1" x2="280.2" y2="1154.4"/>
					<line class="st49" x1="307.3" y1="1269" x2="307.2" y2="1154.4"/>
					<line class="st49" x1="334.7" y1="1268.6" x2="334.7" y2="1154.4"/>
					<line class="st49" x1="362.2" y1="1268.6" x2="362.2" y2="1154.4"/>
					<line class="st49" x1="389.2" y1="1268.7" x2="389.2" y2="1154"/>
					<path class="st49" d="M575,1508.3l-54.6-0.1"/>
					<line class="st49" x1="575" y1="1480.7" x2="520.5" y2="1480.7"/>
					<line class="st49" x1="575" y1="1453.5" x2="520.5" y2="1453.5"/>
					<line class="st49" x1="575" y1="1426.3" x2="520.5" y2="1426.3"/>
					<line class="st49" x1="575" y1="1399.1" x2="520.5" y2="1399"/>
					<line class="st49" x1="575" y1="1371.8" x2="520.5" y2="1371.8"/>
					<line class="st49" x1="575" y1="1344.6" x2="520.5" y2="1344.6"/>
					<line class="st49" x1="575" y1="1317.4" x2="520.5" y2="1317.3"/>
					<line class="st49" x1="575" y1="1290.1" x2="520.5" y2="1290.1"/>
					<line class="st49" x1="575" y1="1262.9" x2="520.5" y2="1262.9"/>
					<line class="st49" x1="575" y1="1235.7" x2="520.5" y2="1235.7"/>
					<line class="st49" x1="575" y1="1208.5" x2="520.5" y2="1208.4"/>
					<line class="st49" x1="575" y1="1181.2" x2="520.5" y2="1181.2"/>
					<line class="st49" x1="575" y1="1154" x2="520.5" y2="1154"/>
					<line class="st49" x1="575" y1="1126.8" x2="520.5" y2="1126.8"/>
					<line class="st49" x1="709.8" y1="1387.1" x2="742.6" y2="1431.4"/>
					<line class="st49" x1="731.8" y1="1370.9" x2="764.5" y2="1415.2"/>
					<line class="st49" x1="753.7" y1="1354.5" x2="786.5" y2="1399.2"/>
					<line class="st49" x1="775.8" y1="1338.5" x2="808.5" y2="1382.8"/>
					<line class="st49" x1="797.9" y1="1322.4" x2="830.6" y2="1366.5"/>
					<line class="st49" x1="819.8" y1="1306" x2="852.5" y2="1350.3"/>
					<line class="st49" x1="841.8" y1="1289.8" x2="874.5" y2="1334.2"/>
					<line class="st49" x1="863.8" y1="1273.7" x2="896.6" y2="1318"/>
					<line class="st49" x1="885.8" y1="1257.4" x2="918.6" y2="1301.7"/>
					<line class="st49" x1="907.8" y1="1241.2" x2="940.5" y2="1285.6"/>
					<line class="st49" x1="661.8" y1="1367.3" x2="661.8" y2="1139.1"/>
					<line class="st49" x1="606.9" y1="1170.2" x2="716.3" y2="1170.3"/>
					<line class="st49" x1="606.9" y1="1201" x2="716.3" y2="1201"/>
					<line class="st49" x1="607" y1="1230.4" x2="661.8" y2="1230.4"/>
					<line class="st49" x1="716.3" y1="1233.7" x2="661.8" y2="1233.6"/>
					<line class="st49" x1="606.8" y1="1257.9" x2="661.8" y2="1257.9"/>
					<line class="st49" x1="716.3" y1="1260.7" x2="661.7" y2="1260.7"/>
					<line class="st49" x1="606.8" y1="1285.4" x2="661.8" y2="1285.4"/>
					<line class="st49" x1="716.3" y1="1288.2" x2="661.8" y2="1288.2"/>
					<line class="st49" x1="716.3" y1="1315.6" x2="661.8" y2="1315.6"/>
					<line class="st49" x1="606.9" y1="1312.4" x2="661.8" y2="1312.4"/>
					<line class="st49" x1="606.8" y1="1339.8" x2="661.8" y2="1339.9"/>
					<line class="st49" x1="803.2" y1="1275.8" x2="803" y2="1138.9"/>
					<line class="st49" x1="748.5" y1="1166.3" x2="857.6" y2="1166.3"/>
					<line class="st49" x1="748.5" y1="1193.8" x2="857.6" y2="1193.8"/>
					<line class="st49" x1="857.6" y1="1220.8" x2="748.5" y2="1220.8"/>
					<line class="st49" x1="748.5" y1="1248.3" x2="803.2" y2="1248.3"/>
					<line class="st49" x1="1076.4" y1="1270.5" x2="1035.5" y2="1215"/>
					<line class="st49" x1="1098.4" y1="1254.3" x2="1057.4" y2="1199"/>
					<line class="st49" x1="1120.3" y1="1238.1" x2="1079.7" y2="1182.7"/>
					<line class="st49" x1="1142.2" y1="1221.7" x2="1101.5" y2="1166.5"/>
					<line class="st49" x1="1164.4" y1="1205.6" x2="1123.6" y2="1150.3"/>
					<line class="st49" x1="1186.3" y1="1189.5" x2="1145.6" y2="1134.1"/>
					<line class="st49" x1="1208.4" y1="1173.1" x2="1167.6" y2="1117.8"/>
					<line class="st49" x1="1230.2" y1="1156.8" x2="1189.5" y2="1101.6"/>
					<line class="st49" x1="1252.3" y1="1140.8" x2="1211.5" y2="1085.4"/>
					<line class="st49" x1="1274.2" y1="1124.5" x2="1233.7" y2="1069.3"/>
					<line class="st49" x1="743.8" y1="1107.4" x2="743.8" y2="1052.1"/>
					<line class="st49" x1="770.1" y1="1107.4" x2="770.1" y2="1052.1"/>
					<line class="st49" x1="798.7" y1="1107.4" x2="798.7" y2="1052.1"/>
					<line class="st49" x1="825.7" y1="1107.4" x2="825.7" y2="1052.1"/>
					<line class="st49" x1="852.7" y1="1107.4" x2="852.7" y2="1052.1"/>
					<line class="st49" x1="879.7" y1="1107.4" x2="879.7" y2="1052.1"/>
					<line class="st49" x1="906.8" y1="1107.4" x2="906.8" y2="1052.1"/>
					<line class="st49" x1="935" y1="1107.4" x2="935" y2="1052.1"/>
					<line class="st49" x1="963.2" y1="1107.4" x2="963.2" y2="1052.1"/>
					<line class="st49" x1="989.7" y1="1107.4" x2="989.7" y2="1052.1"/>
					<line class="st49" x1="1016.8" y1="1107.4" x2="1016.8" y2="1052.1"/>
					<line class="st49" x1="1044.2" y1="1107.4" x2="1044.2" y2="1052.1"/>
					<line class="st49" x1="1071.7" y1="1107.4" x2="1071.7" y2="1052.1"/>
					<line class="st49" x1="1099.2" y1="1105.8" x2="1098.7" y2="1051.3"/>
					<line class="st49" x1="950.5" y1="1051.5" x2="1130.2" y2="1050.9"/>
					<line class="st49" x1="977.8" y1="983.3" x2="978.2" y2="1051.7"/>
					<line class="st49" x1="1005.2" y1="983.3" x2="1005.6" y2="1051.7"/>
					<line class="st49" x1="1032.7" y1="983.3" x2="1032.7" y2="1051.4"/>
					<line class="st49" x1="1059.6" y1="982.9" x2="1060.2" y2="1051.4"/>
					<line class="st49" x1="1087.1" y1="982.9" x2="1087.6" y2="1051.4"/>
					<line class="st49" x1="1114.4" y1="982.9" x2="1114.7" y2="1051.3"/>
					<line class="st49" x1="1142.9" y1="982.9" x2="1143.3" y2="1050.9"/>
					<line class="st49" x1="1173.9" y1="982.5" x2="1173.9" y2="1050.9"/>
					<line class="st49" x1="964.6" y1="951.9" x2="964.6" y2="891.5"/>
					<line class="st49" x1="992.1" y1="951.5" x2="992" y2="891.5"/>
					<line class="st49" x1="1019.6" y1="951.5" x2="1019.5" y2="891.5"/>
					<line class="st49" x1="1047" y1="951.5" x2="1046.9" y2="891.5"/>
					<line class="st49" x1="1074.4" y1="951.5" x2="1074.4" y2="891.5"/>
					<line class="st49" x1="1101.9" y1="951.5" x2="1101.8" y2="891.5"/>
					<line class="st49" x1="1129.3" y1="951.5" x2="1129.2" y2="891.5"/>
					<line class="st49" x1="1156.8" y1="951.5" x2="1156.7" y2="891.5"/>
					<line class="st49" x1="1184.2" y1="951.5" x2="1184.1" y2="891.5"/>
					<line class="st49" x1="1211.6" y1="951.5" x2="1211.6" y2="891.5"/>
					<line class="st49" x1="1239.1" y1="951.5" x2="1239" y2="891.5"/>
					<line class="st49" x1="1266.5" y1="951.5" x2="1266.4" y2="891.5"/>
					<line class="st49" x1="1238.4" y1="822.2" x2="1238" y2="890.6"/>
					<line class="st49" x1="1211.6" y1="822.2" x2="1211.1" y2="890.6"/>
					<line class="st49" x1="1184.7" y1="822.2" x2="1184.2" y2="890.6"/>
					<line class="st49" x1="1157.8" y1="822.2" x2="1157.3" y2="890.6"/>
					<line class="st49" x1="1129.5" y1="822.2" x2="1129" y2="890.6"/>
					<line class="st49" x1="1098.6" y1="822.2" x2="1098.1" y2="890.6"/>
					<line class="st49" x1="1068" y1="822.2" x2="1067.5" y2="890.6"/>
					<line class="st49" x1="1030.3" y1="714.4" x2="1264.3" y2="713.1"/>
					<line class="st49" x1="1236.9" y1="790.2" x2="1236.1" y2="627.9"/>
					<line class="st49" x1="1209.4" y1="790.2" x2="1208.9" y2="627.9"/>
					<path class="st49" d="M1182.2,790.2c3.1-13.2-0.7-161.9-0.7-161.9"/>
					<path class="st49" d="M1154.8,790.7c0-6.9-0.8-162.4-0.8-162.4"/>
					<line class="st49" x1="1124" y1="790.7" x2="1123.5" y2="628.3"/>
					<path class="st49" d="M1093.2,790.6c0-2.5-0.4-162.2-0.4-162.2"/>
					<path class="st49" d="M1062.6,790.6c0-2.5-0.5-162-0.5-162"/>
					<line class="st49" x1="1295.7" y1="759.2" x2="1364.4" y2="759.2"/>
					<line class="st49" x1="1295.7" y1="725.5" x2="1364.4" y2="725.5"/>
					<line class="st49" x1="1295.7" y1="698.4" x2="1364.4" y2="698.4"/>
					<line class="st49" x1="1295.7" y1="671.3" x2="1364.4" y2="671.3"/>
					<line class="st49" x1="1295.7" y1="644.2" x2="1364.4" y2="644.2"/>
					<line class="st49" x1="1295.7" y1="617.2" x2="1364.4" y2="617.2"/>
					<line class="st49" x1="1295.7" y1="588.9" x2="1364.4" y2="588.9"/>
					<line class="st49" x1="1295.7" y1="560.6" x2="1364.4" y2="560.6"/>
					<line class="st49" x1="1295.7" y1="533.8" x2="1364.4" y2="533.8"/>
					<line class="st49" x1="1295.7" y1="507" x2="1364.4" y2="507"/>
					<line class="st49" x1="1295.7" y1="480.2" x2="1364.4" y2="480.2"/>
					<line class="st49" x1="1295.7" y1="453.4" x2="1364.4" y2="453.4"/>
					<line class="st49" x1="1295.7" y1="425" x2="1364.4" y2="425"/>
					<line class="st49" x1="1295.7" y1="396.6" x2="1364.4" y2="396.6"/>
					<line class="st49" x1="1295.7" y1="369.5" x2="1364.4" y2="369.5"/>
					<line class="st49" x1="1295.7" y1="343.5" x2="1364.4" y2="343.5"/>
					<line class="st49" x1="1295.7" y1="315.5" x2="1364.4" y2="315.5"/>
					<line class="st49" x1="1295.7" y1="288.4" x2="1364.4" y2="288.4"/>
					<line class="st49" x1="1295.7" y1="261" x2="1364.4" y2="261"/>
					<line class="st49" x1="1295.7" y1="233.7" x2="1364.4" y2="233.7"/>
					<line class="st49" x1="1295.7" y1="206.5" x2="1364.4" y2="206.5"/>
					<line class="st49" x1="1295.7" y1="179" x2="1364.4" y2="179"/>
					<line class="st49" x1="1295.7" y1="151.8" x2="1364.4" y2="151.8"/>
					<line class="st49" x1="1295.7" y1="124.5" x2="1364.4" y2="124.5"/>
					<line class="st49" x1="1295.7" y1="97.2" x2="1364.4" y2="97.2"/>
					<line class="st49" x1="1295.7" y1="70" x2="1364.4" y2="70"/>
					<line class="st49" x1="1248.3" y1="381.6" x2="1173.8" y2="237.8"/>
					<line class="st49" x1="1223.9" y1="394.2" x2="1149.6" y2="250.2"/>
					<path class="st49" d="M1197.9,225.1l35.3,68.1L1015,406.4"/>
					<line class="st49" x1="1199.7" y1="406.7" x2="1125.3" y2="263"/>
					<line class="st49" x1="1175.4" y1="419.4" x2="1100.9" y2="275.3"/>
					<line class="st49" x1="1151.1" y1="431.9" x2="1076.6" y2="288"/>
					<line class="st49" x1="1127" y1="444.5" x2="1052.4" y2="300.5"/>
					<line class="st49" x1="1102.6" y1="457" x2="1028.2" y2="313.1"/>
					<line class="st49" x1="1078.5" y1="469.5" x2="1003.9" y2="325.7"/>
					<line class="st49" x1="1054.2" y1="482.1" x2="1015" y2="406.4"/>
					<path class="st49" d="M1247.3,163.6c-0.6-3.6-39.4-76-39.4-76"/>
					<line class="st49" x1="1223.1" y1="176" x2="1183.8" y2="100"/>
					<line class="st49" x1="1198.7" y1="188.6" x2="1159.3" y2="112.6"/>
					<line class="st49" x1="1174.6" y1="201.3" x2="1135.1" y2="125.1"/>
					<line class="st49" x1="1150.3" y1="213.8" x2="1110.8" y2="137.7"/>
					<line class="st49" x1="1126" y1="226.4" x2="1086.6" y2="150.2"/>
					<line class="st49" x1="1101.7" y1="238.9" x2="1062.5" y2="162.6"/>
					<line class="st49" x1="1077.4" y1="251.5" x2="1038.1" y2="175.3"/>
					<line class="st49" x1="1053.2" y1="264.3" x2="1013.8" y2="188"/>
					<line class="st49" x1="1028.9" y1="276.8" x2="989.6" y2="200.5"/>
					<line class="st49" x1="865" y1="294.1" x2="941.6" y2="285.3"/>
					<line class="st49" x1="868.1" y1="321.1" x2="944.6" y2="312.6"/>
					<line class="st49" x1="871.1" y1="348.4" x2="947.9" y2="339.7"/>
					<line class="st49" x1="874.2" y1="375.6" x2="950.8" y2="366.8"/>
					<line class="st49" x1="877.3" y1="402.7" x2="953.9" y2="393.9"/>
					<line class="st49" x1="880.4" y1="429.7" x2="957" y2="421.3"/>
					<line class="st49" x1="883.3" y1="456.9" x2="960" y2="448.4"/>
					<line class="st49" x1="886.5" y1="484.3" x2="963" y2="475.4"/>
					<line class="st49" x1="889.6" y1="511.4" x2="966.2" y2="502.5"/>
					<line class="st49" x1="892.3" y1="538.3" x2="969.3" y2="529.8"/>
					<line class="st49" x1="895.5" y1="565.5" x2="972.3" y2="557"/>
					<line class="st49" x1="898.5" y1="592.7" x2="975.4" y2="584"/>
					<line class="st49" x1="901.5" y1="620" x2="978.5" y2="611.2"/>
					<line class="st49" x1="904.6" y1="647.1" x2="981.3" y2="638.6"/>
					<line class="st49" x1="907.7" y1="674.2" x2="984.5" y2="665.6"/>
					<line class="st49" x1="910.9" y1="701.4" x2="987.8" y2="692.7"/>
					<line class="st49" x1="913.7" y1="728.7" x2="990.6" y2="719.8"/>
					<line class="st49" x1="916.8" y1="755.7" x2="993.6" y2="747.2"/>
					<line class="st49" x1="920.1" y1="782.7" x2="996.9" y2="774.4"/>
					<line class="st49" x1="922.9" y1="809.8" x2="1000" y2="801.5"/>
					<line class="st49" x1="926.2" y1="837.3" x2="1002.9" y2="828.6"/>
					<line class="st49" x1="929.3" y1="864.3" x2="1006" y2="855.9"/>
					<line class="stx" x1="520.4" y1="1588.6" x2="520.2" y2="1073.2"/>
					<polyline class="stx" points="1294.7,1114 1293.3,890.2 932.5,891.5"/>
					<polygon class="stx1" points="488.7,1053.6 2.5,1055.7 1.9,1649.3 292.8,1656.4 292.8,1588.1 463.3,1592.2 498.2,1592.6 
						515.2,1590 530.9,1584.8 546.3,1576.1 556.1,1568.8 660.3,1491.8 701.1,1546.9 761.5,1502.2 720.7,1447.7 969.7,1264.2 
						1009.9,1319.3 1277.8,1122.1 1286.1,1116.5 1292.5,1113.4 1299.5,1110.4 1364.6,1088.9 1364.5,6.3 861.8,266.7 950.7,1051.5 
						727.5,1052.1 716.3,1060.9 705.8,1068 686.4,1078.6 669.5,1085.7 655.4,1089.7 634.1,1094.1 620.6,1095.3 606.7,1095.8 
						579.3,1093.8 567.9,1091.7 557.7,1089.3 540.5,1083.4 530.6,1079.7 508,1067.6"/>
					<text transform="matrix(0.9347 -0.3182 0.3281 0.9446 481.5997 1643.9211)" class="st10 st11 stx2">ÁREA COMERCIAL</text>
					<text transform="matrix(0.8 -0.59 0.6 0.8 819.3203 1423.7198)" class="st10 st11 stx3">ÁREA COMERCIAL</text>
				</g>
			</g>

			<a href="#!/Portto_Blanco-Paramo_1-Inventario" class="pb__condo">
				<polygon class="pb__condo-bg" points="508,1067.6 488.7,1053.6 2.5,1055.7 2,1649.3 292.9,1656.4 292.8,1588.2 463.4,1592.2 498.3,1592.7 
					515.2,1590 520.5,1588.3 520.3,1074.1"/>
				<text transform="matrix(1 0 0 1 98.0689 1345.6128)" class="st10 futura-med stx6">Páramo 1</text>
			</a>

			<a href="#!/Portto_Blanco-Paramo_2-Inventario" class="pb__condo">
				<polygon class="pb__condo-bg" points="932.7,891.6 950.8,1051.6 727.5,1052.2 716.4,1060.9 705.9,1068 686.5,1078.6 669.5,1085.8 
					655.5,1089.7 634.2,1094.2 620.7,1095.3 606.7,1095.8 579.3,1093.8 567.9,1091.7 557.8,1089.4 540.6,1083.5 530.7,1079.7 
					520.3,1074.1 520.5,1588.3 530.9,1584.8 546.3,1576.1 556.2,1568.8 660.3,1491.8 701.2,1546.9 761.6,1502.2 720.8,1447.7 
					969.8,1264.2 1010,1319.4 1277.8,1122.1 1286.2,1116.5 1292.6,1113.4 1294.8,1112.5 1293.4,890.2"/>
				<text transform="matrix(1 0 0 1 729.8164 1182.6863)" class="st10 futura-med stx6">Páramo 2</text>
			</a>

			<a href="#!/Portto_Blanco-Paramo_3-Inventario" class="pb__condo">
				<polygon class="pb__condo-bg" points="1364.7,1088.9 1364.5,6.3 861.9,266.7 932.7,891.6 1293.4,890.2 1294.8,1112.5 1299.6,1110.4"/>
				<text transform="matrix(1 0 0 1 991.4131 588.1999)" class="st10 futura-med stx6">Páramo 3</text>
			</a>

		</svg>

	</div>

</body>
</html>