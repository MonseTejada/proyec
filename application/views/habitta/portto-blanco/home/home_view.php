<!DOCTYPE html>
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
    <link rel="stylesheet" type="text/css" href="media/assets/css/portto-blanco.css">
    <link rel="stylesheet" type="text/css" href="media/assets/css/helpers.css">

    <script type="text/javascript" src="media/bower_components/jquery.min.js"></script>
    <script type="text/javascript" src="media/bower_components/materialize/js/materialize.min.js"></script>
    <script type="text/javascript" src="media/assets/js/init.js"></script>
</head>
<body ng-controller="PorttoBlancoMainCtrl as porttoBlanco">

    <!--<div ng-controller="PorttoBlancoDialogPromoCtrl as porttoBlancoDialogPromoQuote">-->
    <!--    <div class="modal-dialog" ng-class="porttoBlancoDialogPromoQuote.dialogDisplay">-->
    <!--        <div class="backdrop-dialog" ng-click="porttoBlancoDialogPromoQuote.closeDialog()"></div>-->
    <!--        <div class="container-dialog p-20">-->
    <!--            <div class="toolbar-dialog blue-txt">-->
    <!--                Promociones de Lanzamiento Digital-->
    <!--                <span ng-click="porttoBlancoDialogPromoQuote.closeDialog()">-->
    <!--                    <img class="btn-close-dialog mt-4" src="media/assets/img/icons/close.svg">-->
    <!--                </span>-->
    <!--            </div>-->
    <!--            <div class="content-dialog">-->
    <!--                <h1 class="banner-promo-header blue-bg light-txt py-20 futura-demi center-align">DESCUENTOS</h1>-->
    <!--                <div class="row">-->
    <!--                    <div class="col s12 m6">-->
    <!--                        <h1 class="center-align futura-demi">25%</h1>-->
    <!--                        <div class="divider"></div>-->
    <!--                        <h5 class=" center-align">Pagando de Contado</h5>-->
    <!--                    </div>-->
    <!--                    <div class="col s12 m6">-->
    <!--                        <h1 class="center-align futura-demi">20%</h1>-->
    <!--                        <div class="divider"></div>-->
    <!--                        <h5 class=" center-align">Pago con Financiamiento a 180 Meses</h5>-->
    <!--                    </div>-->
    <!--                </div>-->
    <!--                <div class="container">-->
    <!--                    <p class="center-align pt-20">¡Apártalo con solo $10,000 MN! Comunícate con un Asesor con el botón de CONTACTO y realiza tu pago de forma Online</p>-->
    <!--                </div>-->
    <!--            </div>-->
                
    <!--            <div class="divider"></div>-->
                
    <!--            <div class="option-menu-dialog" ng-controller="ContactMenuCtrl as contactCtrl">-->
    <!--                <md-menu class="right mr-20 mt-10"  md-offset="-50 -200">-->
    <!--                    <a class="btn blue-bg no-shadows futura-demi lighter right" ng-click="contactCtrl.openMenu($mdMenu, $event)">-->
    <!--                        COTIZADOR-->
    <!--                    </a>-->
    <!--                    <md-menu-content width="4">-->
    <!--                        <md-menu-item>-->
    <!--                            <md-button disabled="disabled">-->
    <!--                                Querétaro-->
    <!--                            </md-button>-->
    <!--                        </md-menu-item>-->
    <!--                        <md-menu-divider></md-menu-divider>-->
    <!--                        <md-menu-item>-->
    <!--                            <md-button ng-click="contactCtrl.toPBEstepa()">-->
    <!--                                Estepa-->
    <!--                            </md-button>-->
    <!--                        </md-menu-item>-->
    <!--                        <md-menu-item>-->
    <!--                            <md-button ng-click="contactCtrl.toPBDesierto()">-->
    <!--                                Desierto-->
    <!--                            </md-button>-->
    <!--                        </md-menu-item>-->
    <!--                        <md-menu-item>-->
    <!--                            <md-button ng-click="contactCtrl.toPBTaiga()">-->
    <!--                                Taiga-->
    <!--                            </md-button>-->
    <!--                        </md-menu-item>-->
    <!--                        <md-menu-item>-->
    <!--                            <md-button ng-click="contactCtrl.toPBParamo()">-->
    <!--                                Páramo-->
    <!--                            </md-button>-->
    <!--                        </md-menu-item>-->
    <!--                        <md-menu-item>-->
    <!--                            <md-button ng-click="contactCtrl.toPBSelva()">-->
    <!--                                Selva-->
    <!--                            </md-button>-->
    <!--                        </md-menu-item>-->
    <!--                        <md-menu-item>-->
    <!--                            <md-button ng-click="contactCtrl.toPBBosque()">-->
    <!--                                Bosque-->
    <!--                            </md-button>-->
    <!--                        </md-menu-item>-->
				<!--			<md-menu-divider></md-menu-divider>-->
    <!--                        <md-menu-item>-->
    <!--                            <md-button disabled="disabled">-->
    <!--                                San Luis Potosí-->
    <!--                            </md-button>-->
    <!--                        </md-menu-item>-->
    <!--                        <md-menu-divider></md-menu-divider>-->
    <!--                        <md-menu-item>-->
    <!--                            <md-button ng-click="contactCtrl.toPBSLPTamul()">-->
    <!--                                Tamúl-->
    <!--                            </md-button>-->
    <!--                        </md-menu-item>-->
    <!--                    </md-menu-content>-->
    <!--                </md-menu>-->

    <!--                <md-menu class="right mr-20 mt-10"  md-offset="0 0">-->
    <!--                    <md-button aria-label="Abrir Menu de Contacto" class="md-button" ng-click="contactCtrl.openMenu($mdMenu, $event)">-->
    <!--                        CONTACTO-->
    <!--                    </md-button>-->
    <!--                    <md-menu-content width="4">-->
    <!--                        <md-menu-item>-->
    <!--                            <md-button disabled="disabled">-->
    <!--                                +52 1 442 127 5214-->
    <!--                            </md-button>-->
    <!--                        </md-menu-item>-->
    <!--                        <md-menu-divider></md-menu-divider>-->
    <!--                        <md-menu-item>-->
    <!--                            <md-button ng-click="contactCtrl.toWhatsapp()">-->
    <!--                                Whatsapp-->
    <!--                            </md-button>-->
    <!--                        </md-menu-item>-->
    <!--                        <md-menu-item>-->
    <!--                            <md-button ng-click="contactCtrl.toCall()">-->
    <!--                                Llamada-->
    <!--                            </md-button>-->
    <!--                        </md-menu-item>-->
    <!--                    </md-menu-content>-->
    <!--                </md-menu>-->
    <!--            </div>-->


    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->

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
        <nav class="white no-shadows" role="navigation">

            <div class="nav-wrapper">

                <a href="#!/portto_blanco" class="brand-logo white left"><img class="logo-pb" src="media/assets/img/habitta/portto-blanco/logos/logo.svg"></a>

                <ul class="nav-menu hide-on-med-and-down">
                    <li><a href="#!/portto_blanco">Inicio</a></li>
                         <li><a href="#!/">GrupoCCIMA</a></li>
                    <li><a href="#!/Navetec">Navetec</a></li>
                    <li><a href="#!/portto_blanco-ubicacion">Ubicación</a></li>
                    <li class="quote-item">
                        <md-menu class="right mr-20 mt-20"  md-offset="0 -60" ng-controller="ContactMenuCtrl as contactCtrl">
                            <a class="btn blue-bg no-shadows futura-demi lighter right" ng-click="contactCtrl.openMenu($mdMenu, $event)">
                                COTIZAR AQUÍ
                            </a>
                            <md-menu-content width="4">
                                <md-menu-item>
                                    <md-button disabled="disabled">
                                        Querétaro
                                    </md-button>
                                </md-menu-item>
                                <md-menu-divider></md-menu-divider>
                                <md-menu-item>
                                    <md-button ng-click="contactCtrl.toPBEstepa()">
                                        Estepa
                                    </md-button>
                                </md-menu-item>
                                <md-menu-item>
                                    <md-button ng-click="contactCtrl.toPBDesierto()">
                                        Desierto
                                    </md-button>
                                </md-menu-item>
                                <md-menu-item>
                                    <md-button ng-click="contactCtrl.toPBTaiga()">
                                        Taiga
                                    </md-button>
								</md-menu-item>
								<md-menu-item>
									<md-button ng-click="contactCtrl.toPBParamo()">
										Páramo
									</md-button>
								</md-menu-item>
								<md-menu-item>
                                	<md-button ng-click="contactCtrl.toPBSelva()">
										Selva
									</md-button>
								</md-menu-item>
								<md-menu-item>
									<md-button ng-click="contactCtrl.toPBBosque()">
										Bosque
									</md-button>
								</md-menu-item>
								<a href="#!/Portto_Blanco-Lago_1" ng-click="close()">
									<div class="link-sidenav">
										<span>Lago</span>
									</div>
								</a>
								<a href="#!/Portto_Blanco-Manglar" ng-click="close()">
									<div class="link-sidenav">
										<span>Manglar</span>
									</div>
								</a>
								<md-menu-divider></md-menu-divider>
								
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
                    <md-menu class="right mr-20 mt-20" md-offset="0 -150" ng-controller="ContactMenuCtrl as contactCtrl">
                        <a class="btn blue-bg no-shadows futura-demi lighter right" ng-click="contactCtrl.openMenu($mdMenu, $event)">
                            COTIZAR AQUÍ
                        </a>
                        <md-menu-content width="4">
                            <md-menu-item>
                                <md-button disabled="disabled">
                                    Querétaro
                                </md-button>
                            </md-menu-item>
                            <md-menu-divider></md-menu-divider>
                            <md-menu-item>
                                <md-button ng-click="contactCtrl.toPBEstepa()">
                                    Estepa
                                </md-button>
                            </md-menu-item>
                            <md-menu-item>
                                <md-button ng-click="contactCtrl.toPBDesierto()">
                                    Desierto
                                </md-button>
                            </md-menu-item>
                            <md-menu-item>
                                <md-button ng-click="contactCtrl.toPBTaiga()">
                                    Taiga
                                </md-button>
							</md-menu-item>
							<md-menu-item>
                                <md-button ng-click="contactCtrl.toPBParamo()">
                                    Páramo
                                </md-button>
							</md-menu-item>
							<md-menu-item>
                                <md-button ng-click="contactCtrl.toPBSelva()">
                                    Selva
                                </md-button>
                            </md-menu-item>
							<md-menu-item>
                                <md-button ng-click="contactCtrl.toPBBosque()">
                                    Bosque
                                </md-button>
                            </md-menu-item>
                            <a href="#!/Portto_Blanco-Lago_1" ng-click="close()">
								<div class="link-sidenav">
									<span>Lago</span>
								</div>
							</a>
							<a href="#!/Portto_Blanco-Manglar" ng-click="close()">
									<div class="link-sidenav">
										<span>Manglar</span>
									</div>
								</a>
                        
                        </md-menu-content>
                    </md-menu>
                </div>

            </div>
            
        </nav>
    </div>

    <div class="portto-container">

        <div class="header-pb">
            <h1 class="header-heading pb-blue-text futura-light">EL HOGAR <br>QUE SOÑASTE, <br>EL RESPIRO QUE <br>MERECES</h1>
            <div class="header-img">
                <img src="media/assets/img/habitta/portto-blanco/portto-blanco.jpg">
            </div>
        </div>

    </div>
    
    <div class="section1 pb-blue3-bg py">
        <div class="row">
                <h2 class="hbg center-align pb-light-text pb-red-bg">Preventa de Lotes Residenciales</h2>
        </div>
        <div class="row promos">
            <div class="prom1 col s12 m12 l4 center">
                <img src="media/assets/img/habitta/portto-blanco/promos/promo-plazo.svg">
            </div>
            <div class="prom2 col s12 m12 l4 center">
                <img src="media/assets/img/habitta/portto-blanco/promos/promo-msi.svg">
            </div>
            <div class="prom3 col s12 m12 l4 center">
                <img src="media/assets/img/habitta/portto-blanco/promos/promo-hook.svg">
            </div>
        </div>
    </div>

    <div class="section3">
        <div class="map-portto" style="padding-bottom: 20px;">
            <img src="media/assets/img/habitta/portto-blanco/portto-blanco-map.png">
            <h2 class="map-heading pb-blue-text">UN LUGAR <br>PRIVILEGIADO</h2>
            <h4 class="map-heading pb-blue-text futura-light">Ubicado al sur de la <br>ciudad a la entrada del <br>Municipio de Huimilpan</h4>
        </div>

        <div class="container py">
            <img src="media/assets/img/habitta/portto-blanco/operacion.svg">
        </div>

        <div class="lugares py pb-blue3-bg">
            <div class="row">
                <div class="col s12 m12 l4 center">
                    <div class="py">
                        <h2 class="pb-light-text">9min</h3>
                        <h6 class="pb-light-text">Ciudad de Querétaro</h6>
                        <div class="divider" style="width: 240px; margin: 0 auto;"></div>
                    </div>
                </div>
                
                <div class="col s12 m12 l4 center">
                    <div class="py">
                        <h2 class="pb-light-text">7min</h3>
                        <h6 class="pb-light-text">Parque Nacional El Cimatario</h6>
                        <div class="divider" style="width: 240px; margin: 0 auto;"></div>
                    </div>
                </div>
                
                <div class="col s12 m12 l4 center">
                    <div class="py">
                        <h2 class="pb-light-text">12min</h3>
                        <h6 class="pb-light-text">Centro Cívico</h6>
                        <div class="divider" style="width: 240px; margin: 0 auto;"></div>
                    </div>
                </div>

                <div class="col s12 m12 l4 center">
                    <div class="py">
                        <h2 class="pb-light-text">15min</h3>
                        <h6 class="pb-light-text">Universidad Politécnica <br>de Querétaro</h6>
                        <div class="divider" style="width: 240px; margin: 0 auto;"></div>
                        <h6 class="pb-light-text">Estadio Corregidora</h6>
                        <div class="divider" style="width: 240px; margin: 0 auto;"></div>
                        <h6 class="pb-light-text">Parques Industriales <br>más importantes de la zona</h6>
                        <div class="divider" style="width: 240px; margin: 0 auto;"></div>
                        <h6 class="pb-light-text"></h6>
                        <div class="divider" style="width: 240px; margin: 0 auto;">Centro de Congresos</div>
                    </div>
                </div>

                <div class="col s12 m12 l4 center">
                    <div class="py">
                        <h2 class="pb-light-text">30min</h2>
                        <h6 class="pb-light-text">Aeropuerto Intercontinental <br>de Querétaro</h6>
                        <div class="divider" style="width: 240px; margin: 0 auto;"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="section2">
        <div class="master">
            <div class="row">
                <div class="col s12">
                    <h2 class="headline-2 pb-blue-text center-align"><span class="futura-light">Las maravillas de la ciudad de</span> Querétaro <span class="futura-light">en un lugar lleno de </span>naturaleza<span class="futura-light"> y</span> bienestar</h2>
                </div>
                <div layout-padding>
                    <svg version="1.1" class="w100" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							viewBox="0 0 1366 1316.9" style="enable-background:new 0 0 1366 1316.9;" xml:space="preserve">
						<style type="text/css">
							.st0{fill:#2F4F89;}
							.st1{fill:#FFFFFF;}
							.st3{font-size:21.3039px;}
							.st4{fill:#4D78A7;}
							.st5{fill:#6A4A31;stroke:#040006;stroke-width:0.8882;stroke-miterlimit:10;}
							.st6{fill:#778741;stroke:#040006;stroke-width:0.8882;stroke-miterlimit:10;}
							.st7{fill:none;stroke:#040006;stroke-width:0.8882;stroke-miterlimit:10;}
							.st8{fill:none;stroke:#FFFFFF;stroke-width:0.8882;stroke-miterlimit:10;}
							.st9{fill:none;stroke:#6F768C;stroke-width:7.1474;stroke-miterlimit:10;}
							.st10{fill:#F5F3EE;}
							.st11{fill:#002B53;}
							.st12{font-size:9.2857px;}
						</style>
						<image style="overflow:visible;enable-background:new    ;" width="1366" height="1307" id="fondo" xlink:href="media/assets/img/habitta/portto-blanco/app/master.jpg" >
						</image>
						<g>
							<g>
								<path class="st0" d="M357.6,1293.8c0-1.3,0.1-2.6,0.1-3.9c0.1-1.6,0.2-3.3,0.3-4.8c2-0.9,3.7-2.4,4.8-4.2c1.5-2.5,2.1-5.4,1.7-8.3
									c16.4-32.6,26.2-68,28.8-104.4c0.1-0.4,0.2-0.8,0.4-1.2c0.2-0.5,0.4-0.9,0.7-1.4c0.8-0.5,1.5-1.1,2.2-1.8c0.6-0.6,1.2-1.2,1.7-1.9
									c0.2-0.4,0.5-0.7,0.8-1c0.6-0.5,1.5-0.8,2.3-0.8c4.3,0,163.8,4.2,172.7,4.2c5.5,0,11.1-0.7,16.4-2.2l35.6,95.5l-56.5,30.5
									c-5,1.8-26.6,9.8-30.3,11.7c-2.7,1.4-11.4,8.3-11.4,8.3S350.6,1293.2,357.6,1293.8z"/>
								<text id="ESTEPA_1_" transform="matrix(1.0006 0 0 1 461.2896 1232.0548)" class="st1 futura-book st3">ESTEPA</text>
							</g>
							<g>
								<path class="st4" d="M883.8,1151L841,1025.4c0,0-93.8,31.2-101.1,33.7c-3.9,1.3-7.8,2.9-11.5,4.7c-4.3,3.1-138.4,98.8-138.4,98.8
									l35.8,95.4l99.5,2.4c-5,1.8,80.7-81.5,77-79.6C799.5,1182.2,883.9,1151,883.8,1151L883.8,1151z"/>
								<text transform="matrix(1.0006 0 0 1 690.7979 1159.2042)" class="st1 futura-book st3">DESIERTO</text>
							</g>
							<g>
								<path class="st0" d="M1097.4,1075.8c-2.7,1.4-213.5,75.4-213.5,75.4l0,0L841,1025.4c25.2-3.3,50.2-8.5,74.6-15.6
									c33.1-9.6,66.3-30.3,66.3-30.3s27.1,15.3,49.6,35.4c22.5,20.2,39.8,37,39.8,37c-1.6,6.2-0.5,12.9,3,18.3
									C1081.8,1081.5,1097.4,1075.8,1097.4,1075.8z"/>
								<text transform="matrix(1.0006 0 0 1 932.5264 1072.0822)" class="st1 futura-book st3">LAGO</text>
							</g>
							<g>
								<path class="st0" d="M1100.1,1073.8c10.9-4,48.1-15.6,94.3-35.2c50.2-21.4,102.6-48.3,102.6-48.3l9.8-88.8c0,0-1.7,14-14.4,15.7
									c-5.8,0.9-11.7-1.3-15.3-5.9c-1.3-1.6-3.3-2.4-5.4-2.3c0,0-73.1-0.1-115.2,6.1c-86,12.6-143.1,44.4-158.5,52.6
									c-1.1,0.6-0.8,2.5-0.8,2.5s19.4,13.1,40.7,30.2c21.6,17.4,45.5,40.7,45.5,40.7s13.2-1.3,18.8,5.9
									C1113.7,1061.9,1100.1,1073.8,1100.1,1073.8z"/>
								<text transform="matrix(1.0006 0 0 1 1151.709 985.6583)" class="st1 futura-book st3">TAIGA</text>
							</g>
							<g>
								<path class="st4" d="M1249.8,649.2h-75.4v245.2c0,0,49.4-2.5,52.5-2.5c3,0,49.4-1.8,49.6-2c1.1-0.4,2.1-1,3-1.8
									c3.2-2.7,7.3-4,11.5-3.8c5.2,0.3,14.4,3.6,15.8,17.2l33.4-279.5l-90.3-65.9L1249.8,649.2z"/>
								<text transform="matrix(1.0006 0 0 1 1210.8457 764.2491)" class="st1 futura-book st3">BOSQUE</text>
							</g>
							<g>
								<path class="st0" d="M1174.4,894.4c-25.9,1.8-51.6,6.4-76.6,13.5c-28.9,8.1-29.9,8.5-29.9,8.5v-15h-28.5c0,0,1.9-21.2-9.4-46
									c-11.3-24.7-36.5-41.2-36.5-41.2s36.3-10.1,91.6-42.5c55.2-32.4,53.6-37.2,53.6-37.2v19h35.6L1174.4,894.4z"/>
								<text transform="matrix(1.0006 0 0 1 1053.8867 838.2189)" class="st1 futura-book st3">MANGLAR</text>
							</g>
							<g>
								<path class="st4" d="M1157.8,532.2c0,0-7.3,0-7.3-13.4c0-13.4,12.7-16.9,12.7-16.9l-86.6,12.2l-102.1,8.6v157.9
									c0,0-30.3,15.3-31,16s-0.5,1-0.5,1c5.1-2.8,12.1-2.2,16.6,4.5s-0.2,13.2-0.2,13.2s9.4,21.7,11.6,42.1c2.2,20.4,2.1,28.3,1.3,34
									s0,6.9,3,9.3c1.6,1.4,3.8,2.1,5.9,1.8c0,0,61.6-21.7,107-50.4c45.3-28.7,62.4-48.8,66-54.7s4.9-18.6,4.9-18.6s0.1-143.5,0.1-144.7
									C1159,533.2,1158.5,532.5,1157.8,532.2z M1060.9,534.3v-18.7l16.5-1.5l14.8-2.1v22.3H1060.9z"/>
								<text transform="matrix(1.0006 0 0 1 1038.8057 649.1515)" class="st1 futura-book st3">SELVA</text>
							</g>
							<g>
								<path class="st0" d="M955.7,757.1c-3.1-14.8-10.8-37-10.8-37s-8.2-2.1-8.2-12.2c0-10.1,6.3-10.2,6.3-10.2s0.3-0.6-0.7-0.3
									s-206,106.7-206,106.7v156.6H799c6.3-9.8,18.4-29.7,24.8-45.5c8.9-22,14.9-40.1,25.3-54.3c10.4-14.2,27.7-30.4,48.5-39.1
									c20.8-8.7,37.7-9.4,37.7-9.4l9.5-2c0.9-0.4,1.8-0.9,2.5-1.6c0.5-0.7,3-5.5,4.6-6.7s4.6-3.1,4.6-3.1S958.8,772,955.7,757.1z"/>
								<text transform="matrix(1.0006 0 0 1 797.334 808.2238)" class="st1 futura-book st3">ARRECIFE</text>
							</g>
							<g>
								<path class="st4" d="M736.3,1039.8l-0.1-235.9l-99.5,51.5l19.8,174.5l-170.9,0.6v112.3c0,0,28.7,0.6,53.4,1.3v-12.5l36.9,0.8
									c2.4,0,4.8-0.4,7-1.4c1.3-0.6,2.6-1.3,3.7-2.2l20-14.8l7.6,10l-14.8,10.9c3.8-2.6,19.8-14.4,39-28.8l-13.1,9.7l-7.5-10l45.6-33.7
									l7.4,9.9c25-18.6,47.7-35.3,51.2-37.2C725.7,1042.8,736.3,1039.8,736.3,1039.8z"/>
								<g>
									<text transform="matrix(1.0006 0 0 1 560.5527 1064.7609)" class="st1 futura-book st3">PÁRAMO</text>
								</g>
							</g>
						</g>
						<g>
							<g>
								<path class="st5" d="M368.2,1055.9h27.2v25.1h-33.6c0.3-2.6,0.6-5.4,0.8-8.2c0.2-3.1,0.4-6.1,0.5-8.9c0.1-0.3,0.2-0.7,0.4-1.1
									c0.1-0.3,0.3-0.6,0.5-0.8c0.7-0.7,1.6-1.6,2.5-2.8C367.3,1058,367.9,1056.8,368.2,1055.9z"/>
								<path class="st5" d="M159.3,1031.7l193.8-0.6v2c-6.6,0.3-12.4,4-15,9.5c-3.4,7.4-0.3,17,7.7,22c0.4,0.5,0.8,1,1.1,1.8
									c0.2,0.4,0.4,0.8,0.5,1.1c-0.1,5-0.6,10.6-1.5,16.6c-0.8,5-1.7,9.5-2.8,13.6c-60.7,0-121.4,0-182.1,0L159.3,1031.7z"/>
								<path class="st5" d="M486,1030.5l-132.9,0.6v2c0.8,0,8.6,0.2,13.4,6.9c5.2,7.2,2,15.4,1.8,15.9c9.1,0,18.2,0,27.2,0v25.1H486
									V1030.5z"/>
								<path class="st5" d="M265.9,1202.2l58.9-41.4c0.3-0.1,2.3-1,3.2-3.3c0.9-2.6-0.5-4.8-0.7-5c-0.8-2.1-2.5-6.8-1.5-12.9
									c1.2-7.3,5.4-11.9,6.9-13.4c0.5-1.1,1.1-2.2,1.6-3.3c1.8-4,3.6-8.4,5.3-13.3c1.4-4.2,2.6-8.2,3.6-11.9c-60.7,0-121.4,0-182.1,0
									l0.9,29.4L265.9,1202.2z"/>
								<path class="st5" d="M486,1142.8V1081H361.9c-0.7,5.3-1.6,11.2-3.1,17.5c-1.2,5.3-2.7,10.2-4.2,14.6c-0.2,0.4-0.8,2-0.2,3.9
									c0.6,1.7,1.9,2.6,2.2,2.8c2.3,0.7,7.7,2.7,12.1,7.9c3.4,4,4.7,8,5.3,10.3c0.3,0.4,0.8,1,1.6,1.5c1,0.6,1.9,0.8,2.5,0.9
									C414.1,1141.2,450,1142,486,1142.8z"/>
								<path class="st5" d="M358,1294.1c0-1.3,0.1-2.6,0.1-3.9c0.1-1.6,0.2-3.3,0.3-4.8c1-0.5,3.2-1.7,4.8-4.2c2.3-3.6,1.8-7.3,1.7-8.3
									c7.2-14.4,15-32.9,20.8-55.2c4.8-18.5,7-35.2,8-49.3c0.1-0.4,0.2-0.8,0.4-1.2c0.2-0.6,0.5-1,0.7-1.4c0.7-0.5,1.4-1,2.2-1.8
									c0.7-0.7,1.2-1.3,1.7-1.9c0.1-0.3,0.4-0.7,0.8-1c0.9-0.8,1.9-0.8,2.3-0.8c-9.8-0.2-19.6-0.5-29.4-0.7c-0.5-0.1-1.6-0.3-3,0.1
									c-1.2,0.4-2,1-2.3,1.4c-1.4,1.3-3.5,3.1-6.5,4.5c-2.8,1.3-5.3,1.9-7,2.2c-0.5,0-1.1,0-1.8,0.1c-1,0.2-1.8,0.6-2.3,0.9
									c-9.8,5.7-19.9,11.9-30.3,18.8c-13.6,9-26.1,18-37.5,26.8c8,6.9,16.1,13.8,24.1,20.7l21.3,28.6c1.5,4.5,3,9,4.5,13.5
									c1.7,5,3.4,10.1,5.1,15.1C343.7,1292.8,350.8,1293.4,358,1294.1z"/>
								<path class="st5" d="M539.4,1144.3v-12.6l36.9,0.8c1.6,0,4.1-0.2,7-1.4c1.6-0.7,2.8-1.5,3.7-2.2c6.7-4.9,13.3-9.9,20-14.8
									l7.6,10.1l-21.8,16.1c-1.6,1.1-3.7,2.2-6.4,3.2c-3.8,1.4-7.3,1.7-9.7,1.7C564.2,1144.7,551.8,1144.5,539.4,1144.3z"/>
								<polygon class="st5" points="618.1,1105.8 625.6,1115.8 671.2,1082.2 663.7,1072.1 		"/>
								<path class="st6" d="M736.6,1039.8c6.8-2.3,13.7-4.6,20.6-6.9c4.3-1.4,8.7-2.9,13-4.3c0.3-0.1,1.1-0.6,1.6-1.6
									c0.7-1.5-0.1-2.8-0.2-3c-1.3-2.4-2.8-6-3.1-10.7c-0.8-10.9,5.6-18.8,7.3-20.7c3.9-4.8,7.8-9.8,11.8-15.2
									c4.3-5.8,8.2-11.6,11.9-17.1c-21,0-41.9,0-62.9,0L736.6,1039.8z"/>
								<path class="st5" d="M809.2,917.4l11.2,5.4c-3,6.4-6.4,13-10.3,20c-3.5,6.3-7.1,12.2-10.7,17.7c-5.1,0-10.2,0-15.3,0
									c4.7-6.7,9.4-14.2,14.1-22.3C802.4,930.9,806,924,809.2,917.4z"/>
								<path class="st5" d="M826.2,909.9l-11.6-5c1.4-3.1,2.9-6.5,4.3-10c1.3-3.2,2.4-6.3,3.4-9.3c1.3-3.7,2.8-7.6,4.7-11.7
									c3.1-6.6,6.5-12.3,9.7-17c3.5,2.3,6.9,4.6,10.4,6.9c-2.3,3.5-4.6,7.4-6.9,11.8c-3,5.9-5.3,11.5-7,16.5c-1.1,3-2.2,6-3.5,9.1
									C828.6,904.2,827.4,907.1,826.2,909.9z"/>
								<path class="st6" d="M1139.1,734.3v19h35.6v-74.1c-1.8,18.6-8.8,29-12,33.1c-4.7,6-12.4,12.9-13.4,13.8
									C1145.3,729.7,1141.7,732.4,1139.1,734.3z"/>
								<path class="st5" d="M1164.4,501.9v-0.3l9.7-1.3l76.1,55.6v93h-75.4V533.7c0.1-0.3,0.3-0.8,0.7-1.2c0.4-0.5,0.8-0.7,1.1-0.9
									c0.9-0.6,5.9-4.3,6.9-11.2c0.2-1.1,0.8-6.6-2.6-11.6C1177.3,503.8,1171,501.2,1164.4,501.9z"/>
								<polygon class="st6" points="1061.2,515.3 1077.8,513.7 1092.6,511.7 1092.6,533.9 1061.2,534 		"/>
								<path class="st6" d="M1034.7,928.9c1.5-4.5,2.8-9.6,3.8-15.5c0.7-4.4,1.1-8.4,1.3-12.1c9.5,0,19,0,28.5,0v15
									c-6,1.9-12.3,4.1-18.7,6.5C1044.5,924.8,1039.5,926.8,1034.7,928.9z"/>
								<path class="st5" d="M984.6,823.2c-1.4-0.5-2.3-1.8-2.3-3.1c0-1.1,0.7-2.2,1.8-2.7c1.8-0.6,3.7-1.2,5.5-1.9
									c1.5-0.5,2.9-0.9,4.3-1.4c7.5,4.7,23.1,16,34.2,36.7c11.6,21.5,12,41.6,11.7,50.4c-0.2,4-0.7,8.5-1.6,13.4
									c-1,5.4-2.3,10.1-3.6,14.2c-3.1,1.3-6.2,2.6-9.3,4c-1.3,0.4-2.6,0.1-3.5-0.9c-0.8-0.9-1-2.2-0.5-3.4c2.3-5.9,12.5-34.4-1.1-65.6
									C1009.8,839.1,991.4,827.2,984.6,823.2z"/>
								<path class="st5" d="M865.1,990.5l3.6,10.8c5.4-1,10.9-2.2,16.5-3.5c3.8-0.9,7.5-1.8,11.1-2.8c-1.6-4.8-3.2-9.5-4.8-14.3
									c-4.3,1.9-8.8,3.7-13.7,5.5C873.5,987.8,869.2,989.2,865.1,990.5z"/>
								<path class="st5" d="M887,850l15.6,10.8c2.4-3.1,6.6-7.7,12.8-11.6c3.8-2.4,11.9-6.8,23.2-7.6c2.5-0.2,11.6-0.6,22.2,3.6
									c10,3.9,16.5,10,19.8,13.6c2.4,2.2,5.5,5.4,8.6,9.6c2.5,3.4,5.5,7.4,7.6,13.2c2,5.5,2.2,10.1,2.4,13c0.7,12.9-3.6,22.8-4.8,25.4
									c-4.7,10.2-11.2,15.9-17.2,21.2c-4.9,4.3-12.6,10.1-23.4,14.8c-9.2,3.7-18.5,7.4-27.7,11c-11.5,4.6-23,9.2-34.5,13.8
									c1.6,4.8,3.2,9.5,4.8,14.3c6.4-1.6,13.1-3.4,19.9-5.4c6.4-1.9,12.5-3.9,18.4-5.9c1-0.4,1.9-0.8,2.9-1.3c0.9-0.4,1.7-0.8,2.6-1.2
									c9.6-4.4,23-11.9,36.3-24.2c11.1-10.3,18.8-20.7,23.8-28.9c2.7-5.2,9.4-19.4,7.3-38.3c-2-18-10.8-30-14.6-34.6
									c-4-4.7-10.2-10.7-19.2-15.6c-3.9-2.1-15.6-8-31.7-8.3c-1.6,0-7.2-0.1-15.2,1.4C918.5,834.3,903.7,838.4,887,850z"/>
								<path class="st5" d="M814,990.2c-0.8-0.7-2.8-2.5-3.6-5.5c-1.3-5.2,2.1-9.3,2.5-9.7c7-10.4,14.4-22.6,21.4-36.5
									c6.6-12.9,11.7-25.2,15.9-36.4c1.6-5.6,4.2-12.8,8.6-20.6c4.4-7.8,9.2-13.7,13.2-18c2.1-2.4,4.7-5,7.6-7.6c2.6-2.3,5.1-4.3,7.5-6
									c5.2,3.6,10.4,7.2,15.6,10.8c-9.7,13.5-19.6,28.5-29.5,45.1c-9.7,16.5-18.1,32.3-25.2,47.1c-0.7,1.4-1.7,3.3-2.4,5.7
									c-0.8,2.5-1,4.4-1.3,6.2c-0.3,2.3-0.6,5-0.3,8.5c0.2,1.8,0.5,4.2,1.4,7.1c0.7,1.5,2.8,5.4,7.5,8c5.5,3.1,10.8,2.2,12.2,2
									c1.2,3.6,2.4,7.2,3.6,10.8c-5.9,1.2-12.1,2.4-18.6,3.4s-12.8,1.8-18.8,2.4c-1.1-0.1-2.9-0.5-4.9-1.5c-2.3-1.3-3.7-3-4.4-4
									c-0.7-1.7-1.8-3.9-3.4-6.2C817,993.1,815.4,991.4,814,990.2z"/>
								<line class="st7" x1="736.6" y1="1018.2" x2="769.3" y2="1018.2"/>
								<polyline class="st7" points="626.3,1257.6 591.2,1163.3 590.7,1162.1 		"/>
								<line class="st7" x1="883.5" y1="1149.7" x2="841.4" y2="1025.3"/>
								<polyline class="st7" points="974.8,522.4 974.8,680.4 637,855.3 656.8,1029.9 486,1030.5 		"/>
								<line class="st7" x1="736.5" y1="803.8" x2="736.5" y2="960.4"/>
								<line class="st7" x1="1174.8" y1="894.4" x2="1174.8" y2="753.3"/>
								<line class="st8" x1="974.8" y1="394.7" x2="974.8" y2="522.4"/>
								<polyline class="st7" points="1340.5,621.8 1250.2,555.9 1340.5,621.8 		"/>
								<line class="st7" x1="1092.6" y1="511.7" x2="1164.4" y2="501.6"/>
								<polyline class="st7" points="385.7,649.9 410.8,563.5 479.2,543.6 517.8,613.9 616,589.7 627,541.3 699.8,542.3 723.3,574.7 
									786.5,530.3 827.8,530.3 865.2,494.5 878.9,490.9 900.1,528.7 1061.2,515.3 		"/>
								<polyline class="st7" points="624.1,261.8 583.2,279.8 582.4,292.9 432.8,365.3 350.4,414.4 101.9,425 		"/>
								<polyline class="st7" points="68.2,427.6 65,440.6 84.6,474.1 73.8,480.7 67.7,480.7 61.3,477 50.9,478.4 44.3,494.2 40.1,510.5 
									36.3,534.1 29.5,549.4 14,574.5 8.2,579.1 8.2,612.6 33.7,602.9 36.8,612.2 		"/>
							</g>
							<polygon class="st9" points="364.6,0.6 472.6,26.6 559.1,218.1 664.4,288.8 712.6,387.6 1366,405.3 1297.3,990.3 1194.7,1038.6 
								1027.9,1102.6 880.9,1152 814.4,1178.4 802.6,1180.8 725.7,1260.5 628.8,1256.2 570.9,1287.7 540.6,1299.9 528.1,1308.2 
								336.5,1292.1 327,1263.6 305.7,1235 281.6,1214.3 276.5,1209.8 161.9,1127.1 158,994.8 235.1,1008.5 258.6,990.5 494.5,967.3 
								540.7,988.1 566,1001.7 597.2,1006.5 554.4,627.3 148.2,681.8 84.4,593.4 6.2,624.2 0.2,511.8 12.9,417.3 99.9,433.5 130.9,312.7 
								172.8,248.6 154.6,201.5 	"/>
							<g>
								<path class="st10" d="M1061.2,515.3"/>
								<g>
									<path class="st11" d="M264.7,1218.7c3.9,4,4.4,10.1,1.5,14.6l5.1,5.2l-0.1-26.2l-25.7-0.4l4.7,4.8
										C254.8,1214,260.8,1214.6,264.7,1218.7z"/>
									<text transform="matrix(0.6969 0.7172 -0.7172 0.6969 240.397 1220.37)" class="st11 futura-book st12">ACCESO</text>
								</g>
								<g>
									<path class="st10" d="M919.2,916.2c-2.6-3.2-4.1-7.3-4.1-11.7c0-10.3,8.4-18.7,18.7-18.7s18.7,8.4,18.7,18.7
										c0,4.4-1.5,8.5-4.1,11.7h1.9c2.4-3.3,3.7-7.3,3.7-11.7c0-11.2-9.1-20.2-20.2-20.2c-11.2,0-20.2,9.1-20.2,20.2
										c0,4.4,1.4,8.4,3.7,11.7H919.2z"/>
									<g>
										<path class="st10" d="M948.1,910c-0.6,0-2,0.6-2.9,0.6c-1.3,0-1.7-0.7-2.9-0.7s-1.9,0.7-2.9,0.7s-1.9-0.8-2.9-0.8
											s-2.2,0.8-3.1,0.8s-1.6-0.8-2.6-0.8s-1.9,0.8-2.9,0.8s-2-0.8-2.9-0.8c-0.8,0-2,0.8-2.9,0.8s-1.7-0.8-2.7-0.8
											c-0.8,0-1.5,0.5-2.2,0.7c0.2,0.6,0.5,1.2,0.8,1.8c0.4-0.2,0.9-0.4,1.4-0.4c0.6,0,2.1,0.8,2.7,0.8c0.8,0,2-0.8,2.9-0.8
											c0.8,0,1.9,0.8,2.9,0.8s1.8-0.8,2.9-0.8s1.7,0.8,2.6,0.8s2.1-0.8,3.1-0.8s1.9,0.8,2.9,0.8s1.7-0.7,2.9-0.7s1.5,0.7,2.9,0.7
											c1,0,2.3-0.6,2.9-0.6c0.5,0,0.9,0.1,1.2,0.3c0.3-0.6,0.6-1.2,0.8-1.8C949.4,910.4,949,910,948.1,910z"/>
										<path class="st10" d="M945.2,914c-1.3,0-1.7-0.7-2.9-0.7s-1.9,0.7-2.9,0.7s-1.9-0.8-2.9-0.8s-2.2,0.8-3.1,0.8s-1.6-0.8-2.6-0.8
											s-1.9,0.8-2.9,0.8s-2-0.8-2.9-0.8c-0.8,0-2,0.8-2.9,0.8s-1.7-0.8-2.7-0.8c-0.3,0-0.6,0.1-0.8,0.1c0.4,0.7,0.9,1.4,1.5,2.1
											c0.7,0.2,1.6,0.6,2.1,0.6c0.8,0,2-0.8,2.9-0.8c0.8,0,1.9,0.8,2.9,0.8s1.8-0.8,2.9-0.8s1.7,0.8,2.6,0.8s2.1-0.8,3.1-0.8
											s1.9,0.8,2.9,0.8s1.7-0.7,2.9-0.7s1.5,0.7,2.9,0.7c0.6,0,1.4-0.2,2-0.4c0.6-0.7,1.1-1.4,1.6-2.2c-0.2,0-0.4-0.1-0.6-0.1
											C947.5,913.4,946.1,914,945.2,914z"/>
										<path class="st10" d="M924.5,907.8c0,0,0.7,0,1.6,0.2c0.9,0.2,1,0.5,1.8,0.5s1.6-0.5,1.6-0.5s-1.4-5.8-1.9-7
											c0,0,0.4-0.1,0.6-1.1c0.2-1-1.3-4.4-2.6-4.6c0,0-0.4-0.2-1-0.1c0,0-0.7-1.2-1.5-1.3s-0.8,0.6-0.6,0.9s1.2,1.1,1.2,1.1
											s-0.3,0.3-0.3,0.9c0.1,0.6,0.9,1.5,1.2,2.2s0.5,1.8,0.8,2c0.3,0.3,0.7,0.4,1,0.4c0,0,1.5,4,1.7,5.8c0,0-3.7-4.8-7.2-4.5
											C920.9,902.8,922.6,903.3,924.5,907.8z"/>
										<path class="st10" d="M941.5,907.9c0.9-0.2,1-0.1,1-0.1c0.7-2.6,1.4-4.7,1.9-5.9c0.6-1.2,2.2-2,2.2-2c-4.2-0.2-6.9,6.5-6.9,6.5
											c0.2-1.9,1.4-5.6,1.4-5.6c0.3,0,0.6-0.1,1-0.4c0.3-0.3,0.6-1.5,0.8-2.3c0.3-0.8,1.1-1.8,1.2-2.5c0.1-0.7-0.3-1.1-0.3-1.1
											s1-0.8,1.2-1.2s0.1-1.1-0.6-1c-0.7,0.1-1.5,1.4-1.5,1.4c-0.6-0.1-1,0.1-1,0.1c-1.3,0.3-2.7,4.1-2.6,5.2c0.2,1.2,0.6,1.2,0.6,1.2
											c-0.6,1.3-1.9,7.9-1.9,7.9s0.8,0.5,1.6,0.5C940.5,908.5,940.6,908.1,941.5,907.9z"/>
										<path class="st10" d="M937.2,889c-1.3,0.4-2.4,4.9-2.1,5.9c0.3,1,0.7,1,0.7,1c-0.2,0.5-0.9,2.9-1.2,5.3
											c-0.3,1.7-0.3,3.5-0.4,4.8c-0.2-3.2-1.2-13.9-4.7-12.6c0,0,1.4,0.9,1.4,1.5c0.2,3.2-0.6,9.6-0.2,12.7c0,0,0.6-0.1,1.3,0.1
											c0.6,0.2,1.4,0.6,1.8,0.6c0.4,0,1.7-0.5,1.7-0.5s0.3-4.6,0.4-6.3c0.2-2,1.3-5.4,1.3-5.4c0.3,0,0.6-0.2,0.9-0.5
											c0.3-0.3,0.5-1.4,0.7-2.1c0.2-0.7,1.1-2.7,1.1-3.4s-0.6-0.9-0.6-0.9s0.2-0.7,0.4-1.2c-0.4-0.1-0.8-0.3-1.2-0.4
											c-0.2,0.5-0.2,1-0.2,1C937.6,888.8,937.2,889,937.2,889z"/>
										<path class="st10" d="M939.7,887.9c0.1-0.3,0-1-0.7-0.8c-0.3,0.1-0.5,0.4-0.6,0.7c0.4,0.1,0.8,0.2,1.2,0.4
											C939.6,888.1,939.7,888,939.7,887.9z"/>
									</g>
								</g>
								<g>
									<g>
										<path class="st10" d="M1012.1,870.5c-2.6-3.2-4.1-7.3-4.1-11.7c0-10.3,8.4-18.7,18.7-18.7c10.3,0,18.7,8.4,18.7,18.7
											c0,4.4-1.5,8.5-4.1,11.7h1.9c2.4-3.3,3.7-7.3,3.7-11.7c0-11.2-9.1-20.2-20.2-20.2c-11.2,0-20.2,9.1-20.2,20.2
											c0,4.4,1.4,8.4,3.7,11.7H1012.1z"/>
									</g>
									<path class="st10" d="M1038.7,849.8c0-0.4-0.4-0.8-0.8-0.8h-4.6v-1.3c0-0.1,0-0.2,0-0.2c-0.1-2.9-2.5-5.1-5.4-5.1
										c-2.1,0-3.9,1.2-4.8,2.9c-1.5,0.7-2.6,2-3,3.7h-2.2c-0.4,0-0.8,0.3-0.8,0.8l-0.1,0.7c0,0,2,0,2.1,0h0.9v0.9h-4.6
										c-0.4,0-0.8,0.3-0.8,0.8l-1.3,17.3c0,0.5,0.4,0.9,0.8,0.9h22.5c0.5,0,0.9-0.4,0.8-0.9l-0.1-1.5h1.8c0.5,0,0.9-0.4,0.8-0.9
										L1038.7,849.8z M1027.9,844.1c2.2,0,4,1.8,4,4v1.3h-1.3c-0.4-2.5-2.5-4.5-5.1-4.5C1026.2,844.4,1027,844.1,1027.9,844.1z
										M1023.9,848.1c0-0.6,0.2-1.3,0.4-1.8c0.3-0.1,0.7-0.2,1.1-0.2c1.9,0,3.6,1.4,4,3.2h-5.5V848.1z M1022.6,847.3c0,0.1,0,0.1,0,0.2
										c0,0.1,0,0.2,0,0.2v1.3h-1C1021.7,848.4,1022.1,847.8,1022.6,847.3z M1021.3,850.5h8.1v0.9h-8.1L1021.3,850.5L1021.3,850.5z
										M1015.8,853.6c0-0.4,0.4-0.7,0.8-0.7h3.4v3c-0.3,0.2-0.6,0.6-0.6,1c0,0.7,0.6,1.2,1.2,1.2s1.2-0.6,1.2-1.2
										c0-0.5-0.2-0.8-0.6-1.1v-3h8.1v3c-0.3,0.2-0.6,0.6-0.6,1c0,0.7,0.6,1.2,1.2,1.2c0.7,0,1.2-0.6,1.2-1.2c0-0.5-0.2-0.8-0.6-1.1v-3
										h3.5c0.4,0,0.7,0.3,0.8,0.7l1,12.8h-21.1L1015.8,853.6z M1035.4,869h-19.9c-0.4,0-0.8-0.4-0.8-0.8v-0.5h21.4v0.5
										C1036.1,868.6,1035.8,869,1035.4,869z M1036.2,852.2c0-0.4-0.4-0.8-0.8-0.8h-4.6v-0.9h6c0.4,0,0.7,0.3,0.8,0.7l1,12.8h-1.4
										L1036.2,852.2z M1037.9,866.5h-0.6l-0.1-1.2h1.4v0.5C1038.7,866.2,1038.3,866.5,1037.9,866.5z"/>
								</g>
								<g>
									<g>
										<path class="st10" d="M829,893.3c-2.6-3.2-4.1-7.3-4.1-11.7c0-10.3,8.4-18.7,18.7-18.7s18.7,8.4,18.7,18.7
											c0,4.4-1.5,8.5-4.1,11.7h1.9c2.4-3.3,3.7-7.3,3.7-11.7c0-11.2-9.1-20.2-20.2-20.2c-11.2,0-20.2,9.1-20.2,20.2
											c0,4.4,1.4,8.4,3.7,11.7H829z"/>
									</g>
									<path class="st10" d="M855.7,872.6c0-0.4-0.4-0.8-0.8-0.8h-4.6v-1.3c0-0.1,0-0.2,0-0.2c-0.1-2.9-2.5-5.1-5.4-5.1
										c-2.1,0-3.9,1.2-4.8,2.9c-1.5,0.7-2.6,2-3,3.7h-2.2c-0.4,0-0.8,0.3-0.8,0.8l-0.1,0.7c0,0,2,0,2.1,0h0.9v0.9h-4.6
										c-0.4,0-0.8,0.3-0.8,0.8l-1.3,17.3c0,0.5,0.4,0.9,0.8,0.9h22.5c0.5,0,0.9-0.4,0.8-0.9l-0.1-1.5h1.8c0.5,0,0.9-0.4,0.8-0.9
										L855.7,872.6z M844.9,866.8c2.2,0,4,1.8,4,4v1.3h-1.3c-0.4-2.5-2.5-4.5-5.1-4.5C843.1,867.1,844,866.8,844.9,866.8z M840.8,870.9
										c0-0.6,0.2-1.3,0.4-1.8c0.3-0.1,0.7-0.2,1.1-0.2c1.9,0,3.6,1.4,4,3.2h-5.5V870.9z M839.5,870.1c0,0.1,0,0.1,0,0.2
										c0,0.1,0,0.2,0,0.2v1.3h-1C838.7,871.1,839,870.5,839.5,870.1z M838.3,873.3h8.1v0.9h-8.1V873.3z M832.8,876.4
										c0-0.4,0.4-0.7,0.8-0.7h3.4v3c-0.3,0.2-0.6,0.6-0.6,1c0,0.7,0.6,1.2,1.2,1.2s1.2-0.6,1.2-1.2c0-0.5-0.2-0.8-0.6-1.1v-3h8.1v3
										c-0.3,0.2-0.6,0.6-0.6,1c0,0.7,0.6,1.2,1.2,1.2c0.7,0,1.2-0.6,1.2-1.2c0-0.5-0.2-0.8-0.6-1.1v-3h3.5c0.4,0,0.7,0.3,0.8,0.7
										l1,12.8h-21.1L832.8,876.4z M852.3,891.8h-19.9c-0.4,0-0.8-0.4-0.8-0.8v-0.5H853v0.5C853.1,891.4,852.8,891.8,852.3,891.8z
										M853.1,875c0-0.4-0.4-0.8-0.8-0.8h-4.6v-0.9h6c0.4,0,0.7,0.3,0.8,0.7l1,12.8H854L853.1,875z M854.8,889.3h-0.6l-0.1-1.2h1.4v0.5
										C855.6,889,855.3,889.3,854.8,889.3z"/>
								</g>
								<g>
									<g>
										<path class="st10" d="M787.2,949.7c-2.6-3.2-4.1-7.3-4.1-11.7c0-10.3,8.4-18.7,18.7-18.7s18.7,8.4,18.7,18.7
											c0,4.4-1.5,8.5-4.1,11.7h1.9c2.4-3.3,3.7-7.3,3.7-11.7c0-11.2-9.1-20.2-20.2-20.2c-11.2,0-20.2,9.1-20.2,20.2
											c0,4.4,1.4,8.4,3.7,11.7H787.2z"/>
									</g>
									<path class="st10" d="M813.9,929c0-0.4-0.4-0.8-0.8-0.8h-4.6V927c0-0.1,0-0.2,0-0.2c-0.1-2.9-2.5-5.1-5.4-5.1
										c-2.1,0-3.9,1.2-4.8,2.9c-1.5,0.7-2.6,2-3,3.7h-2.2c-0.4,0-0.8,0.3-0.8,0.8l-0.1,0.7c0,0,2,0,2.1,0h0.9v0.9h-4.6
										c-0.4,0-0.8,0.3-0.8,0.8l-1.3,17.3c0,0.5,0.4,0.9,0.8,0.9h22.5c0.5,0,0.9-0.4,0.8-0.9l-0.1-1.5h1.8c0.5,0,0.9-0.4,0.8-0.9
										L813.9,929z M803.1,923.3c2.2,0,4,1.8,4,4v1.3h-1.3c-0.4-2.5-2.5-4.5-5.1-4.5C801.4,923.6,802.2,923.3,803.1,923.3z M799,927.3
										c0-0.6,0.2-1.3,0.4-1.8c0.3-0.1,0.7-0.2,1.1-0.2c1.9,0,3.6,1.4,4,3.2H799V927.3z M797.8,926.5c0,0.1,0,0.1,0,0.2
										c0,0.1,0,0.2,0,0.2v1.3h-1C796.9,927.6,797.3,927,797.8,926.5z M796.5,929.7h8.1v0.9h-8.1V929.7z M791,932.9
										c0-0.4,0.4-0.7,0.8-0.7h3.4v3c-0.3,0.2-0.6,0.6-0.6,1c0,0.7,0.6,1.2,1.2,1.2c0.7,0,1.2-0.6,1.2-1.2c0-0.5-0.2-0.8-0.6-1.1v-3h8.1
										v3c-0.3,0.2-0.6,0.6-0.6,1c0,0.7,0.6,1.2,1.2,1.2c0.7,0,1.2-0.6,1.2-1.2c0-0.5-0.2-0.8-0.6-1.1v-3h3.5c0.4,0,0.7,0.3,0.8,0.7
										l1,12.8h-21L791,932.9z M810.6,948.2h-19.9c-0.4,0-0.8-0.4-0.8-0.8v-0.5h21.4v0.5C811.3,947.9,811,948.2,810.6,948.2z
										M811.4,931.5c0-0.4-0.4-0.8-0.8-0.8H806v-0.9h6c0.4,0,0.7,0.3,0.8,0.7l1,12.8h-1.4L811.4,931.5z M813.1,945.8h-0.6l-0.1-1.2h1.4
										v0.5C813.9,945.4,813.5,945.8,813.1,945.8z"/>
								</g>
								<g>
									<g>
										<path class="st10" d="M630.2,1107.4c-2.6-3.2-4.1-7.3-4.1-11.7c0-10.3,8.4-18.7,18.7-18.7s18.7,8.4,18.7,18.7
											c0,4.4-1.5,8.5-4.1,11.7h1.9c2.4-3.3,3.7-7.3,3.7-11.7c0-11.2-9.1-20.2-20.2-20.2c-11.2,0-20.2,9.1-20.2,20.2
											c0,4.4,1.4,8.4,3.7,11.7H630.2z"/>
									</g>
									<path class="st10" d="M656.9,1086.8c0-0.4-0.4-0.8-0.8-0.8h-4.6v-1.3c0-0.1,0-0.2,0-0.2c-0.1-2.9-2.5-5.1-5.4-5.1
										c-2.1,0-3.9,1.2-4.8,2.9c-1.5,0.7-2.6,2-3,3.7h-2.2c-0.4,0-0.8,0.3-0.8,0.8l-0.1,0.7c0,0,2,0,2.1,0h0.9v0.9h-4.6
										c-0.4,0-0.8,0.3-0.8,0.8l-1.3,17.3c0,0.5,0.4,0.9,0.8,0.9h22.5c0.5,0,0.9-0.4,0.8-0.9l-0.1-1.5h1.8c0.5,0,0.9-0.4,0.8-0.9
										L656.9,1086.8z M646.1,1081c2.2,0,4,1.8,4,4v1.3h-1.3c-0.4-2.5-2.5-4.5-5.1-4.5C644.3,1081.3,645.2,1081,646.1,1081z M642,1085.1
										c0-0.6,0.2-1.3,0.4-1.8c0.3-0.1,0.7-0.2,1.1-0.2c1.9,0,3.6,1.4,4,3.2H642V1085.1z M640.7,1084.3c0,0.1,0,0.1,0,0.2s0,0.2,0,0.2
										v1.3h-1C639.9,1085.3,640.2,1084.7,640.7,1084.3z M639.5,1087.5h8.1v0.9h-8.1V1087.5z M634,1090.6c0-0.4,0.4-0.7,0.8-0.7h3.4v3
										c-0.3,0.2-0.6,0.6-0.6,1c0,0.7,0.6,1.2,1.2,1.2s1.2-0.6,1.2-1.2c0-0.5-0.2-0.8-0.6-1.1v-3h8.1v3c-0.3,0.2-0.6,0.6-0.6,1
										c0,0.7,0.6,1.2,1.2,1.2c0.7,0,1.2-0.6,1.2-1.2c0-0.5-0.2-0.8-0.6-1.1v-3h3.5c0.4,0,0.7,0.3,0.8,0.7l1,12.8h-21L634,1090.6z
										M653.5,1105.9h-19.9c-0.4,0-0.8-0.4-0.8-0.8v-0.5h21.4v0.5C654.3,1105.6,654,1105.9,653.5,1105.9z M654.3,1089.2
										c0-0.4-0.4-0.8-0.8-0.8h-4.6v-0.9h6c0.4,0,0.7,0.3,0.8,0.7l1,12.8h-1.4L654.3,1089.2z M656,1103.5h-0.6l-0.1-1.2h1.4v0.5
										C656.8,1103.1,656.5,1103.5,656,1103.5z"/>
								</g>
								<g>
									<g>
										<path class="st10" d="M556.3,1150.1c-2.6-3.2-4.1-7.3-4.1-11.7c0-10.3,8.4-18.7,18.7-18.7s18.7,8.4,18.7,18.7
											c0,4.4-1.5,8.5-4.1,11.7h1.9c2.4-3.3,3.7-7.3,3.7-11.7c0-11.2-9.1-20.2-20.2-20.2c-11.2,0-20.2,9.1-20.2,20.2
											c0,4.4,1.4,8.4,3.7,11.7H556.3z"/>
									</g>
									<path class="st10" d="M582.9,1129.4c0-0.4-0.4-0.8-0.8-0.8h-4.6v-1.3c0-0.1,0-0.2,0-0.2c-0.1-2.9-2.5-5.1-5.4-5.1
										c-2.1,0-3.9,1.2-4.8,2.9c-1.5,0.7-2.6,2-3,3.7h-2.2c-0.4,0-0.8,0.3-0.8,0.8l-0.1,0.7c0,0,2,0,2.1,0h0.9v0.9h-4.6
										c-0.4,0-0.8,0.3-0.8,0.8l-1.3,17.3c0,0.5,0.4,0.9,0.8,0.9h22.5c0.5,0,0.9-0.4,0.8-0.9l-0.1-1.5h1.8c0.5,0,0.9-0.4,0.8-0.9
										L582.9,1129.4z M572.1,1123.7c2.2,0,4,1.8,4,4v1.3h-1.3c-0.4-2.5-2.5-4.5-5.1-4.5C570.4,1124,571.2,1123.7,572.1,1123.7z
										M568.1,1127.7c0-0.6,0.2-1.3,0.4-1.8c0.3-0.1,0.7-0.2,1.1-0.2c1.9,0,3.6,1.4,4,3.2h-5.5V1127.7z M566.8,1126.9
										c0,0.1,0,0.1,0,0.2s0,0.2,0,0.2v1.3h-1C565.9,1128,566.3,1127.4,566.8,1126.9z M565.6,1130.1h8.1v0.9h-8.1V1130.1z M560.1,1133.2
										c0-0.4,0.4-0.7,0.8-0.7h3.4v3c-0.3,0.2-0.6,0.6-0.6,1c0,0.7,0.6,1.2,1.2,1.2s1.2-0.6,1.2-1.2c0-0.5-0.2-0.8-0.6-1.1v-3h8.1v3
										c-0.3,0.2-0.6,0.6-0.6,1c0,0.7,0.6,1.2,1.2,1.2c0.7,0,1.2-0.6,1.2-1.2c0-0.5-0.2-0.8-0.6-1.1v-3h3.5c0.4,0,0.7,0.3,0.8,0.7
										l1,12.8H559L560.1,1133.2z M579.6,1148.6h-19.9c-0.4,0-0.8-0.4-0.8-0.8v-0.5h21.4v0.5C580.4,1148.2,580,1148.6,579.6,1148.6z
										M580.4,1131.9c0-0.4-0.4-0.8-0.8-0.8H575v-0.9h6c0.4,0,0.7,0.3,0.8,0.7l1,12.8h-1.4L580.4,1131.9z M582.1,1146.2h-0.6l-0.1-1.2
										h1.4v0.5C582.9,1145.8,582.6,1146.2,582.1,1146.2z"/>
								</g>
								<g>
									<g>
										<path class="st10" d="M247.3,1146.5c-2.6-3.2-4.1-7.3-4.1-11.7c0-10.3,8.4-18.7,18.7-18.7c10.3,0,18.7,8.4,18.7,18.7
											c0,4.4-1.5,8.5-4.1,11.7h1.9c2.4-3.3,3.7-7.3,3.7-11.7c0-11.2-9.1-20.2-20.2-20.2s-20.2,9.1-20.2,20.2c0,4.4,1.4,8.4,3.7,11.7
											H247.3z"/>
									</g>
									<path class="st10" d="M274,1125.8c0-0.4-0.4-0.8-0.8-0.8h-4.6v-1.3c0-0.1,0-0.2,0-0.2c-0.1-2.9-2.5-5.1-5.4-5.1
										c-2.1,0-3.9,1.2-4.8,2.9c-1.5,0.7-2.6,2-3,3.7h-2.2c-0.4,0-0.8,0.3-0.8,0.8l-0.1,0.7c0,0,2,0,2.1,0h0.9v0.9h-4.6
										c-0.4,0-0.8,0.3-0.8,0.8l-1.3,17.3c0,0.5,0.4,0.9,0.8,0.9h22.5c0.5,0,0.9-0.4,0.8-0.9l-0.1-1.5h1.8c0.5,0,0.9-0.4,0.8-0.9
										L274,1125.8z M263.2,1120c2.2,0,4,1.8,4,4v1.3h-1.3c-0.4-2.5-2.5-4.5-5.1-4.5C261.4,1120.3,262.3,1120,263.2,1120z M259.1,1124.1
										c0-0.6,0.2-1.3,0.4-1.8c0.3-0.1,0.7-0.2,1.1-0.2c1.9,0,3.6,1.4,4,3.2h-5.5V1124.1z M257.8,1123.3c0,0.1,0,0.1,0,0.2s0,0.2,0,0.2
										v1.3h-1C257,1124.3,257.3,1123.7,257.8,1123.3z M256.6,1126.5h8.1v0.9h-8.1V1126.5z M251.1,1129.6c0-0.4,0.4-0.7,0.8-0.7h3.4v3
										c-0.3,0.2-0.6,0.6-0.6,1c0,0.7,0.6,1.2,1.2,1.2c0.6,0,1.2-0.6,1.2-1.2c0-0.5-0.2-0.8-0.6-1.1v-3h8.1v3c-0.3,0.2-0.6,0.6-0.6,1
										c0,0.7,0.6,1.2,1.2,1.2c0.7,0,1.2-0.6,1.2-1.2c0-0.5-0.2-0.8-0.6-1.1v-3h3.5c0.4,0,0.7,0.3,0.8,0.7l1,12.8H250L251.1,1129.6z
										M270.6,1145h-19.9c-0.4,0-0.8-0.4-0.8-0.8v-0.5h21.4v0.5C271.4,1144.6,271.1,1145,270.6,1145z M271.4,1128.2
										c0-0.4-0.4-0.8-0.8-0.8H266v-0.9h6c0.4,0,0.7,0.3,0.8,0.7l1,12.8h-1.4L271.4,1128.2z M273.1,1142.5h-0.6l-0.1-1.2h1.4v0.5
										C273.9,1142.2,273.6,1142.5,273.1,1142.5z"/>
								</g>
								<g>
									<g>
										<path class="st10" d="M345.4,1202.2c-11.2,0-20.2,9.1-20.2,20.2c0,4.4,1.4,8.4,3.7,11.7h1.9c-2.6-3.2-4.1-7.3-4.1-11.7
											c0-10.3,8.4-18.7,18.7-18.7s18.7,8.4,18.7,18.7c0,4.4-1.5,8.5-4.1,11.7h1.9c2.4-3.3,3.7-7.3,3.7-11.7
											C365.6,1211.3,356.6,1202.2,345.4,1202.2z"/>
										<path class="st10" d="M344.8,1204.6L344.8,1204.6L344.8,1204.6L344.8,1204.6z"/>
										<path class="st10" d="M345.8,1204.6L345.8,1204.6L345.8,1204.6L345.8,1204.6z"/>
									</g>
									<g>
										<path class="st10" d="M358.5,1216.4c-1.4-0.8-3.7-1.8-6.7-1.9c-2.9-0.1-5.2,0.8-6.8,1.7c-1.5-0.7-3.7-1.5-6.5-1.5
											c-0.1,0-0.1,0-0.2,0c-2.9,0-5.3,1-6.7,1.7l-0.4,0.2v16.4h11c0.5,0.4,1.5,1.1,2.8,1.1h0.1c1.3,0,2.2-0.7,2.7-1.1h11v-16.4
											L358.5,1216.4z M357.3,1217.6v11.3c-1.3-0.6-3.1-1.2-5.3-1.3c-2.5-0.1-4.5,0.6-6.1,1.3v-11.3c1.3-0.7,3.3-1.5,5.9-1.4
											C354.2,1216.2,356,1216.9,357.3,1217.6z M338.4,1216.3c2.5,0,4.5,0.7,5.9,1.3v11.2c-1.5-0.7-3.4-1.3-5.8-1.2
											c-2.3,0-4.1,0.6-5.5,1.2v-11.2C334.2,1217,336.1,1216.4,338.4,1216.3z M347.2,1231.4l-0.3,0.3c-0.2,0.2-0.8,0.8-1.8,0.8
											c-1.1,0-1.8-0.7-1.9-0.8l-0.3-0.3h-10v-0.6c1.3-0.7,3.2-1.4,5.6-1.4c2.7,0,4.9,0.9,6.2,1.7l0.4,0.3l0.4-0.3
											c1.4-0.8,3.6-1.8,6.4-1.7c2.3,0.1,4.1,0.8,5.3,1.5v0.6L347.2,1231.4L347.2,1231.4z"/>
										<polygon class="st10" points="359.2,1215.7 345,1208.5 331.1,1215.6 331.1,1213.8 345,1206.6 359.2,1213.8 				"/>
									</g>
								</g>
								<g>
									<g>
										<g>
											<g>
												<path class="st10" d="M765.8,968.8c0-1.7-0.6-3.3-1.5-4.6s-2.3-2.2-3.8-2.7c-0.8-0.3-1.6-0.4-2.4-0.4c-0.8,0-1.7,0.1-2.4,0.4
													c-1.5,0.5-2.9,1.5-3.8,2.8c-1,1.3-1.5,2.9-1.5,4.6l0,0c0,1.6,0.5,3.1,1.4,4.4c0.9,1.4,2.3,2.4,3.9,2.9
													c0.8,0.3,1.6,0.4,2.5,0.4c0.8,0,1.6-0.1,2.3-0.4c1.6-0.5,3-1.5,4-2.9C765.2,972,765.8,970.5,765.8,968.8L765.8,968.8z
													M763.3,972.5l-1.1-0.9l-2.7,1.8l0.4,1.5c-0.6,0.2-1.3,0.3-2,0.3s-1.4-0.1-2.1-0.3l0.5-1.3l-2.6-2l-1.2,0.8
													c-0.7-1.1-1.2-2.3-1.2-3.7l0,0h1.4l0.9-3.1l-1.1-0.8c0.8-1.1,1.9-1.9,3.2-2.3l0.4,1.3h3.2l0.4-1.3c1.3,0.4,2.4,1.2,3.2,2.3
													l-1.1,0.8l1,3.1h1.4l0,0C764.5,970.2,764.1,971.5,763.3,972.5z"/>
												<polygon class="st10" points="756.4,966.5 755.3,969.6 757.9,971.5 760.5,969.7 759.6,966.6 						"/>
											</g>
										</g>
										<g>
											<g>
												<g>
													<path class="st10" d="M749.3,980.1c-2-0.1-3.9-0.9-5.4-2.1c-0.9,1.1-1.5,2.6-1.6,4.1h7.1L749.3,980.1L749.3,980.1z"/>
													<path class="st10" d="M755.1,976.9c-1.2-1.1-2.7-1.7-4.4-1.9v3.6C752.3,978.5,753.8,977.9,755.1,976.9z"/>
													<path class="st10" d="M750.6,985.3c2.1,0.1,4,0.9,5.5,2.2c0.9-1.1,1.4-2.5,1.6-4h-7.1V985.3z"/>
													<path class="st10" d="M750.6,982h7.1c-0.1-1.5-0.7-2.9-1.6-4.1c-1.5,1.2-3.4,2-5.4,2.1L750.6,982L750.6,982z"/>
													<path class="st10" d="M749.3,983.5h-7.1c0.1,1.5,0.7,2.9,1.6,4c1.5-1.3,3.4-2,5.5-2.2V983.5z"/>
													<path class="st10" d="M749.3,975c-1.7,0.1-3.2,0.8-4.4,1.9c1.3,1,2.8,1.6,4.4,1.7V975z"/>
													<path class="st10" d="M750.6,990.5c1.7-0.1,3.3-0.9,4.5-1.9c-1.3-1-2.8-1.6-4.5-1.8V990.5z"/>
													<path class="st10" d="M744.8,988.6c1.2,1.1,2.8,1.8,4.5,1.9v-3.7C747.6,986.9,746.1,987.6,744.8,988.6z"/>
												</g>
											</g>
											<g>
												<g>
													<path class="st10" d="M768.9,979.5c-0.3,0.4-0.6,0.8-0.9,1.1c-0.2-0.2-0.4-0.3-0.5-0.5c-0.3-0.2-0.6-0.5-0.9-0.6
														c-0.3-0.2-0.5-0.3-0.8-0.4c-0.3-0.2-0.7-0.3-1.1-0.4c-0.3-0.1-0.7-0.2-1-0.3c-0.4-0.1-0.9-0.2-1.3-0.2c-0.2,0-0.4,0-0.6,0
														c-0.7,0-1.4,0.1-2.1,0.2c0.2-0.3,0.4-0.6,0.7-0.8c0.9-0.3,1.8-0.5,2.8-0.5c0.1,0,0.2,0,0.3,0c0.5,0,1,0.1,1.5,0.2
														c0.3,0.1,0.5,0.1,0.8,0.2c0.4,0.1,0.8,0.3,1.1,0.5c0.2,0.1,0.3,0.2,0.5,0.3c0.3,0.2,0.6,0.4,0.9,0.6
														C768.5,979,768.7,979.3,768.9,979.5z"/>
													<path class="st10" d="M770.3,976.2c0,0.2-0.1,0.4-0.1,0.5c-0.1,0.6-0.4,1.2-0.6,1.7c-0.2-0.2-0.4-0.4-0.7-0.6
														c-0.3-0.2-0.6-0.5-0.9-0.6c-0.1,0-0.2-0.1-0.2-0.1l0,0c-0.4-0.2-0.8-0.4-1.2-0.6c-0.1-0.1-0.3-0.1-0.4-0.1l0,0
														c-0.5-0.2-1-0.3-1.6-0.4c-0.5-0.1-1-0.1-1.5-0.1c-0.3,0-0.6,0-0.8,0c1.1-0.6,2.4-1,3.8-1c0.2,0,0.5,0,0.7,0
														c0.6,0.1,1.2,0.2,1.8,0.4c0.2,0.1,0.4,0.2,0.7,0.3c0.1,0,0.2,0.1,0.3,0.2c0.2,0.1,0.3,0.2,0.5,0.2
														C770.1,976.1,770.2,976.2,770.3,976.2z"/>
													<path class="st10" d="M772.3,978.1L772.3,978.1c-0.2,0.8-0.5,1.7-0.9,2.5c0,0.1-0.1,0.1-0.1,0.2c-0.2,0.4-0.5,0.7-0.7,1
														c-0.3,0.3-0.5,0.6-0.8,0.9c-0.3,0.3-0.6,0.5-0.9,0.7c-0.2,0.1-0.4,0.3-0.6,0.4c-0.3,0.2-0.7,0.4-1.1,0.5
														c-0.1,0-0.2,0.1-0.3,0.1c0-0.2,0-0.3,0-0.5c0-0.3,0-0.6,0-0.9c0.1-0.1,0.3-0.2,0.4-0.2c0.3-0.2,0.5-0.4,0.8-0.6
														c0.3-0.2,0.6-0.5,0.8-0.8c0.3-0.3,0.6-0.7,0.9-1c0.2-0.3,0.4-0.6,0.6-0.9l0.1-0.1c0.4-0.8,0.7-1.6,0.9-2.4
														C771.7,977.3,772,977.7,772.3,978.1z"/>
													<path class="st10" d="M773.5,980.6L773.5,980.6c-0.2,0.8-0.5,1.5-0.9,2.3c-0.1,0.2-0.2,0.4-0.3,0.6c-0.3,0.4-0.6,0.8-1,1.2
														c-0.2,0.2-0.4,0.4-0.5,0.5c-0.3,0.3-0.6,0.5-1,0.7c0,0,0,0-0.1,0c-0.3,0.2-0.7,0.4-1,0.5c-0.4,0.2-0.8,0.3-1.2,0.4
														c-0.2-0.4-0.4-0.9-0.5-1.4c0.3-0.1,0.6-0.2,0.9-0.3c0.3-0.2,0.7-0.3,1-0.5c0.1-0.1,0.3-0.2,0.4-0.2c0.3-0.2,0.6-0.4,0.9-0.7
														c0.3-0.2,0.5-0.5,0.8-0.7c0.3-0.3,0.6-0.7,0.8-1l0,0c0.2-0.3,0.4-0.5,0.5-0.8c0.3-0.5,0.5-1.1,0.7-1.7
														C773.3,979.9,773.4,980.2,773.5,980.6z"/>
													<path class="st10" d="M768.5,990.2c-0.4,0.1-0.9,0.2-1.3,0.3c-0.7-0.6-1.4-1.4-1.9-2.2l0,0c-0.2-0.4-0.4-0.8-0.6-1.1
														c-0.2-0.4-0.3-0.8-0.4-1.1c-0.1-0.4-0.2-0.7-0.2-1.1c0-0.3,0-0.5,0-0.8c0-0.4,0-0.8,0.1-1.2c0-0.2,0.1-0.3,0.1-0.5
														c0.2,0.1,0.4,0.2,0.6,0.3c0.3,0.1,0.5,0.3,0.8,0.4c0,0.2,0,0.3,0,0.5c0,0.4,0,0.7,0.1,1.1c0,0.4,0.1,0.7,0.2,1.1
														c0.1,0.4,0.2,0.9,0.4,1.3c0.1,0.4,0.3,0.7,0.5,1.1c0,0,0,0.1,0.1,0.1C767.4,989,767.9,989.6,768.5,990.2z"/>
													<path class="st10" d="M765.6,990.5c-0.4,0-0.7-0.1-1-0.1c-0.7-0.6-1.4-1.4-1.9-2.2c-0.1-0.1-0.2-0.3-0.2-0.4
														c-0.2-0.5-0.4-1-0.6-1.5c-0.1-0.2-0.1-0.5-0.2-0.7l0,0c-0.1-0.4-0.1-0.8-0.2-1.2v-0.1c0-0.4,0-0.8,0-1.1
														c0-0.4,0.1-0.9,0.2-1.3c0.5,0,1,0.1,1.4,0.2c-0.1,0.3-0.1,0.7-0.2,1c0,0.4-0.1,0.8,0,1.1c0,0.2,0,0.4,0,0.5
														c0,0.4,0.1,0.8,0.2,1.2c0.1,0.3,0.1,0.7,0.3,1c0.1,0.4,0.3,0.8,0.5,1.3l0,0c0.1,0.2,0.2,0.5,0.4,0.7
														C764.6,989.4,765.1,990,765.6,990.5z"/>
													<path class="st10" d="M762.1,989.5c-1.5-0.9-2.7-2.3-3.4-4l0,0c-0.2-0.5-0.3-1-0.4-1.6c0-0.2,0-0.3-0.1-0.5
														c0-0.1,0-0.3,0-0.4l0,0c0-0.1,0-0.2,0-0.3s0-0.3,0-0.4l0,0c0.1,0,0.1-0.1,0.2-0.1c0.7-0.2,1.4-0.4,2.1-0.5
														c-0.1,0.4-0.1,0.7-0.2,1.1c0,0.3-0.1,0.6-0.1,0.9c0,0.1,0,0.1,0,0.2c0,0.4,0,0.7,0.1,1.1c0,0.1,0,0.2,0,0.3
														c0.1,0.5,0.2,1.1,0.4,1.6c0.2,0.6,0.5,1.1,0.8,1.7C761.8,989,762,989.3,762.1,989.5z"/>
													<path class="st10" d="M767.2,981.4L767.2,981.4C767,981.4,767.1,981.4,767.2,981.4C767.1,981.3,767.1,981.3,767.2,981.4z"/>
													<g>
														<path class="st10" d="M767.1,981.3c0,0.1,0,0.1,0,0.2c-0.3,0.2-0.6,0.4-0.9,0.6c-0.1-0.1-0.2-0.1-0.4-0.2
															c-0.4-0.2-0.8-0.4-1.2-0.6c-0.4-0.1-0.7-0.2-1.1-0.3c-0.4-0.1-0.9-0.2-1.4-0.2c-0.4,0-0.8,0-1.2,0l0,0
															c-0.9,0-1.7,0.2-2.5,0.4c0.1-0.5,0.2-0.9,0.4-1.3c0.9-0.3,1.8-0.5,2.7-0.5h0.1c0.4,0,0.8,0,1.2,0.1s0.8,0.1,1.2,0.3
															c0.4,0.1,0.7,0.2,1.1,0.4c0.3,0.2,0.7,0.3,1,0.5C766.5,980.8,766.8,981,767.1,981.3z"/>
													</g>
													<g>
														<path class="st10" d="M773.8,983.1c-0.1,1.6-0.6,3.1-1.5,4.3l0,0c-0.4,0.5-0.8,0.9-1.2,1.3c-0.1,0.1-0.3,0.2-0.4,0.3
															c-0.1,0.1-0.1,0.1-0.2,0.1c-0.2,0.2-0.5,0.3-0.7,0.4c-0.1,0-0.1,0.1-0.2,0.1c-0.6-0.5-1.1-1.1-1.5-1.8
															c0.4-0.1,0.8-0.2,1.1-0.4c0.3-0.1,0.5-0.2,0.8-0.4c0.1,0,0.1-0.1,0.2-0.1c0.3-0.2,0.6-0.4,0.9-0.6c0.1-0.1,0.2-0.2,0.3-0.2
															c0.4-0.3,0.8-0.7,1.2-1.1c0.4-0.5,0.8-1,1.1-1.6C773.7,983.3,773.8,983.2,773.8,983.1z"/>
													</g>
												</g>
											</g>
										</g>
									</g>
									<path class="st10" d="M758,958.6c-11.2,0-20.2,9.1-20.2,20.2c0,4.4,1.4,8.4,3.7,11.7h1.9c-2.6-3.2-4.1-7.3-4.1-11.7
										c0-10.3,8.4-18.7,18.7-18.7s18.7,8.4,18.7,18.7c0,4.4-1.5,8.5-4.1,11.7h1.9c2.4-3.3,3.7-7.3,3.7-11.7
										C778.3,967.7,769.2,958.6,758,958.6z"/>
								</g>
								<g>
									<g>
										<path class="st10" d="M378.4,1048.4c-11.2,0-20.2,9.1-20.2,20.2c0,4.4,1.4,8.4,3.7,11.7h1.9c-2.6-3.2-4.1-7.3-4.1-11.7
											c0-10.3,8.4-18.7,18.7-18.7s18.7,8.4,18.7,18.7c0,4.4-1.5,8.5-4.1,11.7h1.9c2.4-3.3,3.7-7.3,3.7-11.7
											C398.6,1057.5,389.5,1048.4,378.4,1048.4z"/>
									</g>
									<polygon class="st10" points="374.1,1054.4 382.7,1054.5 382.7,1063.1 391.3,1063.1 391.3,1071.7 382.8,1071.7 382.8,1080.4 
										374.3,1080.4 374.3,1071.7 365.4,1071.7 365.4,1063.2 374.1,1063.2 			"/>
								</g>
								<g>
									<g>
										<path class="st10" d="M443.6,1033.9c-11.2,0-20.2,9.1-20.2,20.2c0,4.4,1.4,8.4,3.7,11.7h1.9c-2.6-3.2-4.1-7.3-4.1-11.7
											c0-10.3,8.4-18.7,18.7-18.7s18.7,8.4,18.7,18.7c0,4.4-1.5,8.5-4.1,11.7h1.9c2.4-3.3,3.7-7.3,3.7-11.7
											C463.8,1043,454.8,1033.9,443.6,1033.9z"/>
									</g>
									<g>
										<path class="st10" d="M451.8,1041.5l-4.2,4.3l2.9,2.9l4.4-4.4c0,0,2.2,4.4-1.7,7.5c-1.5,2-5.6,1.3-5.6,1.3L436,1065
											c-1,1-2.6,1.1-3.7,0.1l-0.7-0.6c-1.1-1-1.2-2.8-0.1-3.9l11.9-11.7c0,0-1-3.7,1.1-5.7C448.7,1039.2,451.8,1041.5,451.8,1041.5z"
											/>
										<polygon class="st10" points="432.8,1040.8 436.9,1042.9 437.9,1046 440.4,1048.6 438.5,1050.7 435.9,1048.1 432.8,1047.1 
											430.8,1042.9 				"/>
										<path class="st10" d="M444.6,1059.2l5.7,5.8c1.2,1.2,3.1,1.2,4.3-0.1l0.2-0.2c1.1-1.2,1.1-3-0.1-4.2l-5.2-5.2h-1.2L444.6,1059.2
											z"/>
									</g>
								</g>
								<g>
									<path class="st10" d="M1053.4,893.1c-11.2,0-20.2,9.1-20.2,20.2c0,4.4,1.4,8.4,3.7,11.7h1.9c-2.6-3.2-4.1-7.3-4.1-11.7
										c0-10.3,8.4-18.7,18.7-18.7s18.7,8.4,18.7,18.7c0,4.4-1.5,8.5-4.1,11.7h1.9c2.4-3.3,3.7-7.3,3.7-11.7
										C1073.6,902.1,1064.6,893.1,1053.4,893.1z"/>
									<g>
										<path class="st10" d="M1060.4,903.3c-0.1,0.2-0.2,0.3-0.4,0.5c-1.3,1.3-3.4,1.3-4.8,0c-0.7-0.7-1.1-1.7-1-2.7
											c0-0.5,0.2-0.9,0.4-1.3c0.1-0.5,0.4-1,0.8-1.4c1.2-1.2,3.1-1.2,4.3,0c0.4,0.4,0.7,1,0.8,1.5
											C1061.2,900.9,1061.1,902.3,1060.4,903.3z"/>
										<path class="st10" d="M1051.6,903.7c-1.3,1.3-3.4,1.3-4.8,0c-0.1-0.1-0.2-0.3-0.3-0.4c-0.8-1.1-0.9-2.5-0.2-3.6
											c0.1-0.5,0.4-1,0.8-1.4c1.2-1.2,3.1-1.2,4.3,0c0.4,0.4,0.7,1,0.8,1.5c0.2,0.4,0.3,0.8,0.3,1.2
											C1052.6,902,1052.3,903,1051.6,903.7z"/>
										<path class="st10" d="M1046.6,907.3c0,1.9-1.5,3.4-3.4,3.4c-0.4,0-0.8-0.1-1.1-0.2c-1-0.3-1.7-1.1-2.1-2.1
											c-0.3-0.5-0.5-1.1-0.5-1.7c0-1.7,1.4-3.1,3.1-3.1c0.6,0,1.1,0.1,1.5,0.4c0.4,0.1,0.7,0.3,1,0.5
											C1046.1,905.1,1046.6,906.1,1046.6,907.3z"/>
										<path class="st10" d="M1060.2,907.3c0,1.9,1.5,3.4,3.4,3.4c0.4,0,0.8-0.1,1.1-0.2c1-0.3,1.7-1.1,2.1-2.1
											c0.3-0.5,0.5-1.1,0.5-1.7c0-1.7-1.4-3.1-3.1-3.1c-0.6,0-1.1,0.1-1.5,0.4c-0.4,0.1-0.7,0.3-1,0.5
											C1060.8,905.1,1060.2,906.1,1060.2,907.3z"/>
										<path class="st10" d="M1063.5,918.3c0,3.7-3,6.7-6.7,6.7c-0.6,0-1.1-0.1-1.7-0.2l0,0c-0.5-0.1-1.1-0.2-1.7-0.2
											c-0.5,0-1,0.1-1.4,0.2l0,0c-0.2,0-0.3,0.1-0.4,0.1l0,0c-0.5,0.1-1,0.2-1.5,0.2c-3.7,0-6.7-3-6.7-6.7c0-0.3,0-0.6,0.1-0.8l0,0
											c0.2-1.5,0.9-2.9,1.9-3.9l0,0c0.1-0.1,0.2-0.2,0.3-0.3l0,0c0.6-0.6,1.1-1.4,1.5-2.2l0,0l0,0c0.1-0.1,0.1-0.3,0.2-0.4l0,0l0,0
											l0,0c1-2.5,3.4-4.2,6.2-4.2c2.9,0,5.4,1.8,6.3,4.4l0,0c0.4,1,0.9,1.8,1.6,2.5c0,0,0,0,0.1,0.1c1.1,1.1,1.9,2.6,2.1,4.2
											C1063.5,917.9,1063.5,918.1,1063.5,918.3z"/>
									</g>
								</g>
								<g>
									<g>
										<g>
											<path class="st10" d="M1159.3,716.3c-11.2,0-20.2,9.1-20.2,20.2c0,4.4,1.4,8.4,3.7,11.7h1.9c-2.6-3.2-4.1-7.3-4.1-11.7
												c0-10.3,8.4-18.7,18.7-18.7s18.7,8.4,18.7,18.7c0,4.4-1.5,8.5-4.1,11.7h1.9c2.4-3.3,3.7-7.3,3.7-11.7
												C1179.6,725.3,1170.5,716.3,1159.3,716.3z"/>
										</g>
									</g>
									<g>
										<path class="st10" d="M1152.1,748.2L1152.1,748.2c-1.2,0-2.2-1-2.2-2.2v-15.2c0-1.2,1-2.2,2.2-2.2l0,0c1.2,0,2.2,1,2.2,2.2V746
											C1154.3,747.2,1153.3,748.2,1152.1,748.2z"/>
										<path class="st10" d="M1147,746.3L1147,746.3c-1,0-1.8-0.8-1.8-1.8v-12.3c0-1,0.8-1.8,1.8-1.8l0,0c1,0,1.8,0.8,1.8,1.8v12.3
											C1148.8,745.5,1148,746.3,1147,746.3z"/>
										<path class="st10" d="M1144.7,740.9L1144.7,740.9c-0.8,0-1.5-0.7-1.5-1.5v-2.1c0-0.8,0.7-1.5,1.5-1.5l0,0c0.8,0,1.5,0.7,1.5,1.5
											v2.1C1146.2,740.3,1145.5,740.9,1144.7,740.9z"/>
										<path class="st10" d="M1166.6,728.6L1166.6,728.6c1.2,0,2.2,1,2.2,2.2V746c0,1.2-1,2.2-2.2,2.2l0,0c-1.2,0-2.2-1-2.2-2.2v-15.2
											C1164.4,729.6,1165.4,728.6,1166.6,728.6z"/>
										<path class="st10" d="M1171.7,730.5L1171.7,730.5c1,0,1.8,0.8,1.8,1.8v12.3c0,1-0.8,1.8-1.8,1.8l0,0c-1,0-1.8-0.8-1.8-1.8v-12.3
											C1169.9,731.3,1170.7,730.5,1171.7,730.5z"/>
										<path class="st10" d="M1174,735.9L1174,735.9c0.8,0,1.5,0.7,1.5,1.5v2.1c0,0.8-0.7,1.5-1.5,1.5l0,0c-0.8,0-1.5-0.7-1.5-1.5v-2.1
											C1172.5,736.5,1173.1,735.9,1174,735.9z"/>
										<path class="st10" d="M1165.4,740.5H1153c-1,0-1.8-0.8-1.8-1.8v-0.5c0-1,0.8-1.8,1.8-1.8h12.4c1,0,1.8,0.8,1.8,1.8v0.5
											C1167.3,739.7,1166.4,740.5,1165.4,740.5z"/>
									</g>
								</g>
								<g>
									<g>
										<path class="st10" d="M255.1,1073.3c-1.2,0-2.2,1-2.2,2.2s1,2.2,2.2,2.2c1.2,0,2.2-1,2.2-2.2S256.3,1073.3,255.1,1073.3z
											M255.1,1076.9c-0.8,0-1.4-0.6-1.4-1.4s0.6-1.4,1.4-1.4c0.8,0,1.4,0.6,1.4,1.4S255.9,1076.9,255.1,1076.9z"/>
										<path class="st10" d="M267.4,1073.3c-1.2,0-2.2,1-2.2,2.2s1,2.2,2.2,2.2s2.2-1,2.2-2.2S268.6,1073.3,267.4,1073.3z
											M267.4,1076.9c-0.8,0-1.4-0.6-1.4-1.4s0.6-1.4,1.4-1.4s1.4,0.6,1.4,1.4S268.2,1076.9,267.4,1076.9z"/>
										<path class="st10" d="M271.2,1056.3L271.2,1056.3L271.2,1056.3L271.2,1056.3z"/>
										<path class="st10" d="M272.2,1057.6L272.2,1057.6L272.2,1057.6L272.2,1057.6z"/>
										<path class="st10" d="M271.2,1056.3L271.2,1056.3h-18.5l-0.9-2.9c-0.1-0.5-0.5-0.8-1-0.8l0,0h-3.4l0,0c-0.6,0-1,0.5-1,1.1
											s0.5,1.1,1.1,1.1h0.1h2.4l4,13.5c-0.5,0.5-0.8,1.1-0.8,1.8c0,1.4,1.1,2.5,2.5,2.5c0.1,0,0.3,0,0.4,0l0,0l13-0.6l0,0
											c0.4,0,0.8-0.4,0.8-0.9s-0.4-0.9-0.9-0.9h-0.1l-10.9,0.5l-1.2,0.1l-1.1,0.1h-0.1l0,0c-0.3,0-0.6-0.3-0.6-0.6
											c0-0.2,0.1-0.5,0.3-0.6l0,0c0.1,0,0.2-0.1,0.3-0.1s0.9-0.1,0.9-0.1l1.5-0.2l11.4-1.4l0,0c0.5-0.1,0.8-0.4,0.9-0.8l0,0l1.8-9.4
											l0,0l0,0c0-0.1,0-0.1,0-0.2C272.3,1056.8,271.8,1056.3,271.2,1056.3z M258.7,1067l-2.7,0.3l-1.3-4.4h4V1067z M258.7,1062h-4.3
											l-1-3.5h5.3V1062z M264.1,1066.4l-4.5,0.6v-3.9h4.5V1066.4z M264.1,1062h-4.5v-3.5h4.5V1062z M268.5,1065.8l-3.3,0.4v-3.3h3.8
											L268.5,1065.8z M269.2,1062h-4v-3.5h4.7L269.2,1062z"/>
									</g>
									<g>
										<path class="st10" d="M258.4,1045.7c-11.2,0-20.2,9.1-20.2,20.2c0,4.4,1.4,8.4,3.7,11.7h1.9c-2.6-3.2-4.1-7.3-4.1-11.7
											c0-10.3,8.4-18.7,18.7-18.7c10.3,0,18.7,8.4,18.7,18.7c0,4.4-1.5,8.5-4.1,11.7h1.9c2.4-3.3,3.7-7.3,3.7-11.7
											C278.7,1054.8,269.6,1045.7,258.4,1045.7z"/>
									</g>
								</g>
								<g>
									<g>
										<path class="st10" d="M752.6,1008.7c0-0.1,0-0.1,0-0.2C752.6,1008.6,752.6,1008.7,752.6,1008.7z"/>
										<path class="st10" d="M759.5,1009.9C759.5,1009.9,759.4,1009.9,759.5,1009.9C759.4,1009.9,759.5,1009.9,759.5,1009.9
											L759.5,1009.9z"/>
										<path class="st10" d="M759.5,1009.9l-0.2,0.4c-0.2,0.5-0.3,1.1-0.3,1.7c0,0.6,0.1,1.3,0.4,1.8l0.1,0.1l-0.1,0.1
											c-1.7,1-2.7,2.8-2.7,4.7c0,0.9,0.2,1.8,0.7,2.7l0.1,0.1l-0.1,0.1c-0.6,0.3-1.1,0.7-1.5,1.2c-0.9,0.4-1.8,0.6-1.9,0.7l0,0
											c-1.1,0.5-2.3,0.3-3.3-0.3c-1-0.7-1.5-1.7-1.5-2.9c0-1.3,0.7-2.4,1.8-3l0.9-0.5l-0.5-0.9c-0.3-0.5-0.5-1.1-0.5-1.7
											c0-1.3,0.7-2.4,1.7-3l0.8-0.5l-0.4-0.8c-0.2-0.3-0.2-0.7-0.2-1.1c0,0,0-0.1,0-0.2v-0.1l0,0c0-0.2,0-0.4,0-0.4"/>
										<path class="st10" d="M752.6,1008L752.6,1008c0.1,0,0.2,0,0.3,0C752.8,1008,752.7,1008,752.6,1008z"/>
										<path class="st10" d="M758.9,1012c0-0.6,0.1-1.2,0.3-1.7l0.2-0.4l0,0c-2-1-4.2-1.7-6.5-1.9c-0.1,0-0.2,0-0.3,0
											c0,0.1,0,0.3,0,0.4v0.1c0,0.1,0,0.1,0,0.2c0,0.4,0.1,0.8,0.2,1.1l0.4,0.8l-0.8,0.5c-1.1,0.6-1.7,1.8-1.7,3
											c0,0.6,0.2,1.2,0.5,1.7l0.5,0.9l-0.9,0.5c-1.1,0.6-1.8,1.8-1.8,3s0.6,2.2,1.5,2.9c1,0.7,2.2,0.8,3.3,0.3l0,0
											c0.1,0,1-0.3,1.9-0.7c0.4-0.5,0.9-0.9,1.5-1.2l0.1-0.1l-0.1-0.1c-0.5-0.8-0.7-1.7-0.7-2.7c0-1.9,1-3.7,2.7-4.7l0.1-0.1l-0.1-0.1
											C759.1,1013.2,758.9,1012.6,758.9,1012z"/>
										<path class="st10" d="M752.6,1008.4L752.6,1008.4C752.6,1008.5,752.6,1008.5,752.6,1008.4L752.6,1008.4z"/>
										<path class="st10" d="M768.8,1025.3c0-5.7-2.8-10.8-7.1-14c-0.5-0.4-1-0.7-1.6-1c-0.1-0.1-0.2-0.2-0.4-0.2
											c-0.3,0.6-0.5,1.2-0.5,1.9c0,0.6,0.1,1.1,0.4,1.7l0.2,0.5l-0.4,0.3c-1.5,0.9-2.5,2.5-2.5,4.3c0,0.9,0.2,1.7,0.6,2.4l0.3,0.5
											l-0.5,0.3c-0.6,0.3-1.1,0.7-1.4,1.2c-0.2,0.2-0.3,0.4-0.5,0.7c-0.4,0.7-0.7,1.6-0.7,2.5c0,2.7,2.2,5,5,5c0.8,0,1.4-0.1,1.8-0.3
											c0,0,0,0,0.1,0v-3.5c-1.3-0.7-2.2-1.9-2.6-3.3l-0.3-0.9l2.7-0.8l0.3,0.7l-0.1-0.8v-2.3h3.5v8.7c0,0.3,0.6,1,1.2,0.9
											c1.6-0.1,2.1-0.8,2.1-0.8C768.7,1027.7,768.8,1026.6,768.8,1025.3z"/>
									</g>
									<path class="st10" d="M762,1024.2c-0.2-0.2-0.5-0.5-0.6-0.8l-0.2-0.5l-2,0.6l0.2,0.5c0.4,1.3,1.5,2.5,2.6,3.1v10h2.7v-16.6H762
										V1024.2z"/>
									<path class="st10" d="M736.8,1037c-2.6-3.2-4.1-7.3-4.1-11.7c0-10.3,8.4-18.7,18.7-18.7s18.7,8.4,18.7,18.7
										c0,4.4-1.5,8.5-4.1,11.7h1.9c2.4-3.3,3.7-7.3,3.7-11.7c0-11.2-9.1-20.2-20.2-20.2c-11.2,0-20.2,9.1-20.2,20.2
										c0,4.4,1.4,8.4,3.7,11.7H736.8z"/>
									<g>
										<rect x="737.9" y="1019.1" class="st10" width="1.5" height="17.9"/>
										<path class="st10" d="M761,1037h-1.5v-5.3c0,0,0.4,0,0.8,0c0.3,0,0.7-0.1,0.7-0.1V1037z"/>
										<rect x="739.3" y="1020.5" class="st10" width="3" height="0.4"/>
										<rect x="743.5" y="1020.5" class="st10" width="3.3" height="0.4"/>
										<path class="st10" d="M748.7,1020.5c0,0,0,0.1,0,0.2c0,0.1,0,0.2,0,0.2h-0.9v-0.4H748.7z"/>
										<g>
											<rect x="742.7" y="1019.9" class="st10" width="0.4" height="11.4"/>
											<rect x="747.1" y="1019.9" class="st10" width="0.4" height="11.4"/>
										</g>
										<rect x="742.6" y="1031.7" class="st10" width="4.9" height="0.9"/>
										<rect x="742.2" y="1032.9" class="st10" width="5.8" height="0.6"/>
										<g>
											<path class="st10" d="M751.8,1031.4h-0.4v-7.5c0,0,0.1,0,0.2,0.1c0.1,0,0.2,0,0.2,0V1031.4z"/>
											<path class="st10" d="M756.2,1031.4h-0.4v-1.7c0,0,0.1,0.2,0.2,0.2l0.2,0.2V1031.4z"/>
										</g>
										<rect x="751.4" y="1031.7" class="st10" width="4.9" height="0.9"/>
										<rect x="750.9" y="1032.9" class="st10" width="5.8" height="0.6"/>
									</g>
								</g>
								<g>
									<path class="st10" d="M1197,606.5c-2.6-3.2-4.1-7.3-4.1-11.7c0-10.3,8.4-18.7,18.7-18.7c10.3,0,18.7,8.4,18.7,18.7
										c0,4.4-1.5,8.5-4.1,11.7h1.9c2.4-3.3,3.7-7.3,3.7-11.7c0-11.2-9.1-20.2-20.2-20.2c-11.2,0-20.2,9.1-20.2,20.2
										c0,4.4,1.4,8.4,3.7,11.7H1197z"/>
									<g>
										<path class="st10" d="M1216.3,582.8c0,0-6.8-2.3-12.9,3.2c-0.3,0.3,1.5-0.6,2.8-0.2c0,0-7.1,4.5-8.4,9c-0.1,0.5,0.9-1.1,3-1.4
											c0,0-2.1,2.3-2.3,6.1c0,0.9,0.2,3.8-0.4,7h18.6c-0.4-1.5-1.2-3.2-2.8-4.9c0,0-1.5-2.9,0-5.9c1-2,2.4-2.8,2.4-2.8
											s0.1,2.2,1.3,2.7c1.2,0.5,2.1,0.9,3.1,1.7s0.8,2.6,2.7,2.5c1.9,0,3.4-1.7,3.7-2.6c0.2-0.6,0.2-1.5-0.2-2
											c-0.4-0.5-1.8-2.4-2.7-4.2c-0.9-1.8-0.7-3.5-1.4-4.2c-0.7-0.6-1.5-1.6-1.5-1.6s-0.1-1-0.1-2.2c0-0.4,0-0.8-0.1-1.2
											c0-0.8-0.1-1.5-0.1-1.9l-0.9,1.5l-0.6,1.1l-0.3,0.6v-0.7l0.1-1.3l0.1-2L1216.3,582.8z"/>
									</g>
								</g>
								<g>
									<path class="st10" d="M1062.3,534.4c-2.6-3.2-4.1-7.3-4.1-11.7c0-10.3,8.4-18.7,18.7-18.7c10.3,0,18.7,8.4,18.7,18.7
										c0,4.4-1.5,8.5-4.1,11.7h1.9c2.4-3.3,3.7-7.3,3.7-11.7c0-11.2-9.1-20.2-20.2-20.2c-11.2,0-20.2,9.1-20.2,20.2
										c0,4.4,1.4,8.4,3.7,11.7H1062.3z"/>
									<path class="st10" d="M1086.8,530.3c0.2,0.1,0.4,0.2,0.7,0.3c0.6,0.2,1.3,0.6,1.2,0.6c0-0.1-0.1-0.6-0.7-0.8s-0.6-0.3-0.4-0.3
										s0.3-0.1,0.3-0.4c0-0.3,0-0.8-0.1-0.9c-0.1-0.1-0.2,0-1.4,0c-0.4,0-0.7,0-0.8,0l-0.7-0.8c0-0.1-0.1-0.1-0.1-0.2
										c-0.2-0.3-0.3-0.5-0.5-0.8c-0.1-0.1-0.1-0.3-0.2-0.4c-0.1-0.2-0.2-0.4-0.3-0.6c-0.1-0.2-0.3-0.4-0.4-0.6
										c-0.2-0.2-0.4-0.5-0.5-0.7c-0.1-0.1-0.2-0.2-0.3-0.4c-0.2-0.2-0.3-0.4-0.5-0.5c-0.1-0.1-0.1-0.1-0.2-0.2c-0.3-0.3-0.1-0.7,0-1
										c0.1-0.4,0.1-0.8,0.1-1.3c0-0.4,0.1-0.7,0.1-1.1c0.1-0.7,0.2-1.4,0.2-2.1c0-0.2,0-0.4,0-0.5s0-0.2,0-0.4c0-0.1,0-0.2-0.1-0.3
										s-0.2-0.3-0.3-0.4c-0.4-0.5-1-0.6-1.6-0.7c-0.3-0.1-0.7-0.2-1-0.3c-0.6-0.3-0.9-0.7-1-1.2c0-0.1,0.1-0.3,0.2-0.5
										c0.1-0.3,0.3-0.8,0.5-1.5c0.1,0,0.2-0.2,0.3-0.4c0.1-0.3,0.3-0.6,0.2-0.9c0-0.1-0.1-0.2-0.2-0.3c0-0.3,0.1-0.6,0.1-0.9
										c0-1.3-0.8-2.3-1.9-2.5v-0.1c0-0.2-0.2-0.3-0.4-0.3c-0.2,0-0.4,0.2-0.4,0.3v0.1c-1.1,0.2-1.9,1.2-1.9,2.5c0,0.3,0,0.6,0.1,0.9
										c-0.1,0-0.2,0.1-0.2,0.3c-0.1,0.3,0.1,0.6,0.2,0.9c0.1,0.2,0.2,0.4,0.3,0.4c0.2,0.7,0.4,1.2,0.5,1.5s0.2,0.4,0.2,0.6
										c-0.1,0.4-0.3,0.8-0.8,1c-0.3,0.1-0.7,0.2-1,0.3c-0.6,0.1-1.2,0.3-1.6,0.7c-0.1,0.1-0.2,0.3-0.3,0.4c-0.1,0.1-0.1,0.2-0.1,0.3
										s0,0.2,0,0.4s0,0.4,0,0.5c0,0.7,0.1,1.4,0.2,2.1c0.1,0.4,0.1,0.7,0.1,1.1c0,0.4,0,0.9,0.1,1.3c0.1,0.3,0.2,0.8,0,1
										c-0.1,0.1-0.1,0.1-0.2,0.2c-0.2,0.2-0.3,0.4-0.5,0.5c-0.1,0.1-0.2,0.2-0.3,0.4c-0.2,0.2-0.4,0.5-0.5,0.7s-0.3,0.4-0.4,0.6
										c-0.1,0.2-0.2,0.4-0.3,0.6c-0.1,0.1-0.1,0.3-0.2,0.4c-0.2,0.3-0.3,0.5-0.5,0.8c0,0.1-0.1,0.1-0.1,0.2c-0.1,0.1-0.3,0.3-0.5,0.3
										c0,0-0.1,0-0.1,0.1l-0.2,0.3l0,0c-0.1,0.1,0,0.1-1.2,0.1s-1.3-0.1-1.4,0s-0.1,0.6-0.1,0.9c0,0.3,0.1,0.4,0.3,0.4
										c0.2,0,0.1,0.1-0.4,0.3c-0.6,0.2-0.7,0.7-0.7,0.8s0.6-0.3,1.2-0.6c0.6-0.2,1.3-0.7,1.3-0.5l0,0l0,0l0,0l0,0l0,0v0.1l-0.1,0.1l0,0
										c-0.1,0.1-0.1,0.1-0.2,0.2c-0.4,0.4-0.6,1.1-0.5,1.6c0.1,0.6,0.5,1,1,1.2c0.3,0.1,0.6,0.2,0.9,0.3c0.7,0.2,1.4,0.2,2.1,0.2h0.1
										c0.4-0.1,0.8-0.2,1.2-0.3c0.3-0.1,0.6-0.2,0.8-0.2c0.6-0.2,1.1-0.4,1.7-0.6c0.8-0.3,1.5-0.5,2.3-0.8c0.2-0.1,0.3-0.2,0.5-0.3h0.1
										c0.2,0.1,0.4,0.2,0.6,0.3c0.7,0.3,1.5,0.5,2.3,0.8c0.5,0.2,1.1,0.4,1.7,0.6c0.3,0.1,0.6,0.2,0.8,0.2c0.4,0.1,0.8,0.2,1.2,0.3h0.1
										c0.7,0,1.4,0,2.1-0.2c0.3-0.1,0.6-0.2,0.9-0.3c0.5-0.2,0.9-0.6,1-1.2c0.1-0.5-0.1-1.2-0.5-1.6c-0.1-0.1-0.1-0.1-0.2-0.2l0,0
										C1086.8,530.4,1086.8,530.4,1086.8,530.3L1086.8,530.3L1086.8,530.3L1086.8,530.3L1086.8,530.3z M1066.1,529.9
										c-0.3,0-0.2-0.4-0.2-0.7c0,0,0.9,0,0.8,0.3C1066.7,529.8,1066.4,529.9,1066.1,529.9z M1074.2,524.7c0,0.2-0.1,0.4-0.2,0.5
										c0,0.1-0.1,0.2-0.1,0.3c0,0,0,0.1-0.1,0.1c-0.1,0.1-0.1,0.2-0.2,0.3s-0.1,0.2-0.2,0.3s-0.2,0.3-0.2,0.4c-0.1,0.2-0.2,0.4-0.3,0.6
										c0,0.1-0.1,0.2-0.2,0.3l0,0c0,0.1-0.1,0.2-0.1,0.3s-0.1,0.2-0.1,0.3s0,0.1-0.1,0.1c-0.1,0.1-0.1,0.2-0.3,0.3
										c-0.1,0-0.1,0.1-0.2,0.1c0,0-0.1,0-0.1,0.1c-0.1,0-0.1,0.1-0.2,0.1h-0.1c-0.2,0-0.4,0.1-0.6,0.1c-0.1,0-0.2,0.1-0.2,0.1
										c-0.1,0-0.2,0.1-0.2,0.1c-0.1,0-0.1,0-0.2,0.1h-0.1c-0.1,0-0.1,0-0.2,0s-0.1,0-0.2,0s-0.2,0-0.3,0.1c-0.1,0-0.1,0-0.2,0
										s-0.3,0.1-0.4,0.1l0,0c0,0,0,0,0.1-0.1s0.2-0.2,0.3-0.3c0.1-0.1,0.2-0.2,0.3-0.3c0.1-0.1,0.1-0.1,0.2-0.1
										c0.1-0.1,0.1-0.1,0.2-0.1s0.1-0.1,0.2-0.2c0.1-0.1,0.2-0.2,0.3-0.3c0.1-0.1,0.2-0.1,0.2-0.2c0.1-0.1,0.2-0.1,0.2-0.2
										c0.1-0.1,0.2-0.1,0.3-0.2c0.1-0.1,0.2-0.2,0.3-0.3c0.1-0.1,0.2-0.2,0.2-0.2c0.1-0.1,0.3-0.3,0.4-0.4c0.2-0.1,0.3-0.3,0.4-0.5
										l0.1-0.1c0.1-0.1,0.1-0.2,0.2-0.3c0-0.1,0.1-0.1,0.1-0.2c0.1-0.1,0.2-0.2,0.2-0.4c0.1-0.2,0.2-0.3,0.3-0.5
										c0.1-0.1,0.1-0.2,0.1-0.3c0.1-0.2,0.1-0.3,0.2-0.5c0-0.1,0-0.2,0.1-0.3l0,0c0.1-0.1,0-0.3,0.1-0.4c0-0.1,0-0.1,0-0.2
										c0-0.1,0-0.2,0-0.2c0-0.1,0-0.2,0-0.3s0-0.1,0-0.2l0,0l0,0c0,0.1,0,0.2,0.1,0.4c0,0.1,0,0.3,0.1,0.4c0,0.1,0,0.2,0,0.3
										s0,0.2,0,0.3s0,0.3,0,0.4c0,0.1,0,0.2,0,0.3C1074.2,524.5,1074.2,524.6,1074.2,524.7z M1087.5,529.2c0,0.3,0.1,0.7-0.2,0.7
										s-0.6-0.1-0.6-0.4C1086.6,529.2,1087.5,529.2,1087.5,529.2z M1084.9,529.5c-0.1,0-0.3-0.1-0.4-0.1s-0.1,0-0.2,0s-0.2,0-0.3-0.1
										c-0.1,0-0.1,0-0.2,0s-0.1,0-0.2,0h-0.1c-0.1-0.1-0.1-0.1-0.2-0.1s-0.2,0-0.2-0.1c-0.1,0-0.2-0.1-0.2-0.1
										c-0.2-0.1-0.4-0.1-0.6-0.1h-0.1c-0.1,0-0.1-0.1-0.2-0.1c0,0-0.1,0-0.1-0.1c-0.1,0-0.1,0-0.2-0.1s-0.2-0.2-0.3-0.3l-0.1-0.1
										c0-0.1-0.1-0.2-0.1-0.3s-0.1-0.2-0.1-0.3l0,0c-0.1-0.1-0.1-0.2-0.2-0.3c-0.1-0.2-0.2-0.4-0.3-0.6c-0.1-0.1-0.2-0.3-0.2-0.4
										c-0.1-0.1-0.1-0.2-0.2-0.3s-0.1-0.2-0.2-0.3c0,0,0-0.1-0.1-0.1c0-0.1-0.1-0.2-0.1-0.3c-0.1-0.2-0.1-0.3-0.2-0.5
										c0-0.1,0-0.2,0-0.3s0-0.2,0-0.3s0-0.3,0-0.4c0-0.1,0-0.2,0-0.3s0-0.2,0-0.3s0-0.3,0.1-0.4c0-0.1,0-0.2,0.1-0.4l0,0l0,0
										c0,0.1,0,0.1,0,0.2c0,0.1,0,0.2,0,0.3s0,0.2,0,0.2c0,0.1,0,0.1,0,0.2c0,0.1,0,0.3,0.1,0.4l0,0c0,0.1,0,0.2,0.1,0.3
										c0.1,0.2,0.1,0.3,0.2,0.5c0,0.1,0.1,0.2,0.1,0.3c0.1,0.2,0.2,0.3,0.3,0.5c0.1,0.1,0.1,0.2,0.2,0.4c0,0.1,0.1,0.1,0.1,0.2
										c0.1,0.1,0.1,0.2,0.2,0.3l0.1,0.1c0.1,0.2,0.3,0.3,0.4,0.5c0.1,0.1,0.3,0.3,0.4,0.4c0.1,0.1,0.2,0.2,0.2,0.2
										c0.1,0.1,0.2,0.2,0.3,0.3c0.1,0.1,0.2,0.1,0.3,0.2c0.1,0.1,0.2,0.1,0.2,0.2c0.1,0.1,0.2,0.1,0.2,0.2c0.1,0.1,0.2,0.2,0.3,0.3
										c0.1,0.1,0.1,0.1,0.2,0.2c0.1,0,0.1,0.1,0.2,0.1c0.1,0.1,0.1,0.1,0.2,0.1c0.1,0.1,0.2,0.2,0.3,0.3
										C1084.7,529.2,1084.7,529.3,1084.9,529.5C1084.8,529.5,1084.9,529.5,1084.9,529.5L1084.9,529.5z"/>
								</g>
								<g>
									<path class="st10" d="M920,982.5c-2.6-3.2-4.1-7.3-4.1-11.7c0-10.3,8.4-18.7,18.7-18.7s18.7,8.4,18.7,18.7
										c0,4.4-1.5,8.5-4.1,11.7h1.9c2.4-3.3,3.7-7.3,3.7-11.7c0-11.2-9.1-20.2-20.2-20.2c-11.2,0-20.2,9.1-20.2,20.2
										c0,4.4,1.4,8.4,3.7,11.7H920z"/>
									<g>
										<path class="st10" d="M946.8,968.2c-0.3-0.4-1-0.6-1.5-0.3l-5.9,3.6l-0.2,0.1c-0.3,0.4-0.4,1-0.2,1.4c0.1,0.2,0.3,0.4,0.5,0.5
											c-0.1,0.1-0.2,0.1-0.3,0.2c-0.7,0.4-1.5,0.6-2.3,0.7V969h1.8c0.3,0,0.6-0.1,0.8-0.3s0.4-0.5,0.3-0.8v-2.4c0-0.3-0.1-0.6-0.3-0.9
											c-0.3-0.3-0.6-0.3-0.9-0.3H937c0-0.2,0.1-0.4,0.2-0.6l0.8-1.2c0.4-0.5,1.6-2,1.3-4.1s-1.8-3.9-3.8-4.4c-1.2-0.3-2.5,0-3.6,0.7
											c-1.2,0.8-2,2-2.3,3.3c-0.5,2.3,0.9,4,1.3,4.5l0.7,1.1c0.1,0.2,0.2,0.5,0.3,0.7h-1.6c-0.2,0-0.5,0.1-0.6,0.2
											c-0.2,0.1-0.4,0.3-0.5,0.5l-0.1,0.2v2.6c-0.1,0.4,0.1,0.8,0.5,1c0.2,0.1,0.5,0.2,0.7,0.1h1.7v5.5c-0.4-0.1-0.8-0.2-1.2-0.3
											c-0.5-0.2-1-0.4-1.5-0.6c0.2-0.1,0.3-0.2,0.5-0.3c0.4-0.5,0.4-1.2-0.1-1.7l-5.6-3.4c-0.3-0.3-0.8-0.5-1.2-0.3
											c-0.5,0.1-0.8,0.6-0.8,1.1l0.1,7.3l0.2,0.2c0.2,0.2,0.7,0.4,1.2,0.3c0.2-0.1,0.4-0.2,0.5-0.3l0.6-0.8c0.6,0.7,1.2,1.3,1.9,1.9
											c1,0.8,2.1,1.6,3.3,2.1c1.1,0.4,2.1,1,2.9,1.7c0.3,0.2,0.5,0.4,0.7,0.6c0.1,0.2,0.5,0.5,1,0.5c0,0,0,0,0.1,0
											c0.5,0,0.8-0.2,1-0.5c0.4-0.3,0.7-0.6,1.1-0.9c0.8-0.5,1.6-1,2.4-1.4c1.5-0.7,2.8-1.6,3.9-2.6c0.5-0.4,0.9-0.9,1.3-1.4l0.4,0.5
											c0.4,0.6,1.2,0.7,1.7,0.4c0.3-0.2,0.5-0.5,0.5-0.8v-6.8C947,968.7,947,968.4,946.8,968.2z M932.1,958.9c0-1.3,1.1-2.4,2.4-2.4
											c1.3,0,2.4,1.1,2.4,2.4s-1.1,2.4-2.4,2.4C933.2,961.3,932.1,960.2,932.1,958.9z M945.5,974.8l-1.2-1.6l-0.6,0.8
											c-0.5,0.7-1.1,1.4-1.7,1.9c-1,1-2.2,1.8-3.5,2.4c-0.9,0.4-1.8,0.9-2.7,1.5c-0.4,0.3-0.9,0.7-1.3,1l0,0l0,0
											c-0.3-0.2-0.5-0.5-0.9-0.7c-1-0.8-2.1-1.4-3.2-1.9c-1.1-0.5-2.1-1.1-3-1.9c-0.8-0.7-1.6-1.5-2.2-2.4l-0.6-0.8l-1.1,1.5l-0.1-5.3
											l4.6,2.8l-2.4,0.1l1.3,1.2c1,1,2.2,1.7,3.5,2.1c0.7,0.2,1.5,0.4,2.3,0.4h0.8v-8.5h-2.9v-1.8h2.9v-0.7c0-0.3,0-0.7-0.1-1
											c-0.1-0.4-0.2-0.8-0.5-1.2l-0.4-0.7c0.6,0.4,1.3,0.6,2,0.6c0.8,0,1.5-0.2,2.1-0.6l-0.6,1c-0.2,0.4-0.3,0.7-0.4,1.1
											c-0.1,0.3-0.1,0.6-0.1,1v0.7h2.8v1.8h-2.9v8.5l0.8-0.1c1.3-0.1,2.5-0.4,3.6-1c0.8-0.4,1.5-0.9,2.2-1.5l1.4-1.3h-2.6l4.6-2.8v5.4
											H945.5z"/>
									</g>
								</g>
								<g>
									<path class="st10" d="M1192,439.5l3.1,5.5h-1l2.1,3.8h-1.1l2.3,4h-3.9l-1.9-3.3h1.1l-2.2-4h1l-1.5-2.7L1192,439.5z M1186.6,438.9
										l3.3,5.7h-1l2.2,4h-1.1l2.4,4.2h-3.4l-2.1-3.7h1.2l-2.5-4.4h1.2l-1.7-3L1186.6,438.9z M1177.5,441.8l-1.7,2.9h1.2l-2.5,4.4h1.2
										l-2.1,3.7h-3.5l2.4-4.2h-1.1l2.2-4h-1l3.3-5.7L1177.5,441.8z M1165,452.9l2.3-4h-1.1l2.1-3.8h-1l3.1-5.5l1.9,3.4l-1.5,2.7h1
										l-2.2,4h1.1l-1.9,3.3h-3.8V452.9z M1171.5,461.5h-2v-7.7h2V461.5z M1176.9,461.5h-2.1v-7.7h2.1V461.5z M1182.4,452.7v8.8h-2.3
										v-8.8h-5.2l2.7-4.6h-1.2l2.5-4.4h-1.2l3.6-6.3l3.6,6.3h-1.2l2.5,4.4h-1.2l2.7,4.6H1182.4z M1187.7,461.5h-2.1v-7.7h2.1V461.5z
										M1193,461.5h-2v-7.7h2V461.5z"/>
									<path class="st10" d="M1181.2,430.5c-11.2,0-20.2,9.1-20.2,20.2c0,4.4,1.4,8.4,3.7,11.7h1.9c-2.6-3.2-4.1-7.3-4.1-11.7
										c0-10.3,8.4-18.7,18.7-18.7c10.3,0,18.7,8.4,18.7,18.7c0,4.4-1.5,8.5-4.1,11.7h1.9c2.4-3.3,3.7-7.3,3.7-11.7
										C1201.4,439.5,1192.4,430.5,1181.2,430.5z"/>
								</g>
								<g>
									<path class="st10" d="M539,452.7l3.1,5.5h-1l2.1,3.8h-1.1l2.3,4h-3.9l-1.9-3.3h1.1l-2.2-4h1L537,456L539,452.7z M533.6,452.1
										l3.3,5.7h-1l2.2,4H537l2.4,4.2H536l-2.1-3.7h1.2l-2.5-4.4h1.2l-1.7-3L533.6,452.1z M524.5,455l-1.7,2.9h1.2l-2.5,4.4h1.2
										l-2.1,3.7h-3.5l2.4-4.2h-1.1l2.2-4h-1l3.3-5.7L524.5,455z M512,466l2.3-4h-1.1l2.1-3.8h-1l3.1-5.5l1.9,3.4l-1.5,2.7h1l-2.2,4h1.1
										L516,466H512z M518.5,474.7h-2V467h2V474.7z M523.9,474.7h-2.1V467h2.1V474.7z M529.4,465.9v8.8h-2.3v-8.8h-5.2l2.7-4.6h-1.2
										l2.5-4.4h-1.2l3.6-6.3l3.6,6.3h-1.2l2.5,4.4H532l2.7,4.6H529.4z M534.7,474.7h-2.1V467h2.1V474.7z M540,474.7h-2V467h2V474.7z"/>
									<path class="st10" d="M528.2,443.7c-11.2,0-20.2,9.1-20.2,20.2c0,4.4,1.4,8.4,3.7,11.7h1.9c-2.6-3.2-4.1-7.3-4.1-11.7
										c0-10.3,8.4-18.7,18.7-18.7s18.7,8.4,18.7,18.7c0,4.4-1.5,8.5-4.1,11.7h1.9c2.4-3.3,3.7-7.3,3.7-11.7
										C548.4,452.7,539.4,443.7,528.2,443.7z"/>
								</g>
								<g>
									<path class="st10" d="M810.7,995.8c-2.6-3.2-4.1-7.2-4.1-11.7c0-10.3,8.3-18.6,18.6-18.6s18.6,8.3,18.6,18.6
										c0,4.4-1.5,8.5-4.1,11.7h1.9c2.3-3.3,3.7-7.3,3.7-11.7c0-11.1-9-20.1-20.1-20.1s-20.1,9-20.1,20.1c0,4.3,1.4,8.4,3.7,11.7H810.7z
										"/>
									<g>
										<path class="st10" d="M815.8,972.6l-0.3-1.1l7.1-2.2l3.2,1.8c0,0-0.5,1-0.6,0.9c-0.1,0-2.8-1.6-2.8-1.6L815.8,972.6z"/>
										<path class="st10" d="M815.8,974.6l-0.3-1.1l7.1-2.2l3.2,1.8c0,0-0.5,1-0.6,0.9c-0.1,0-2.8-1.6-2.8-1.6L815.8,974.6z"/>
										<path class="st10" d="M815.8,976.6l-0.3-1.1l7.1-2.2l3.2,1.8c0,0-0.5,1-0.6,0.9c-0.1,0-2.8-1.6-2.8-1.6L815.8,976.6z"/>
										<path class="st10" d="M815.8,978.6l-0.3-1.1l7.1-2.2l3.2,1.8c0,0-0.5,1-0.6,0.9c-0.1,0-2.8-1.6-2.8-1.6L815.8,978.6z"/>
										<path class="st10" d="M815.8,980.7l-0.3-1.1l7.1-2.2l3.2,1.8c0,0-0.5,1-0.6,0.9c-0.1,0-2.8-1.6-2.8-1.6L815.8,980.7z"/>
										<path class="st10" d="M815.8,982.7l-0.3-1.1l7.1-2.2l3.2,1.8c0,0-0.5,1-0.6,0.9c-0.1,0-2.8-1.6-2.8-1.6L815.8,982.7z"/>
										<path class="st10" d="M815.8,984.7l-0.3-1.1l7.1-2.2l3.2,1.8c0,0-0.5,1-0.6,0.9c-0.1,0-2.8-1.6-2.8-1.6L815.8,984.7z"/>
										<path class="st10" d="M815.8,986.8l-0.3-1.1l7.1-2.2l3.2,1.8c0,0-0.5,1-0.6,0.9c-0.1,0-2.8-1.6-2.8-1.6L815.8,986.8z"/>
										<path class="st10" d="M815.8,988.7l-0.3-1.1l7.1-2.2l3.2,1.8c0,0-0.5,1-0.6,0.9c-0.1,0-2.8-1.6-2.8-1.6L815.8,988.7z"/>
										<path class="st10" d="M815.8,990.7l-0.3-1.1l7.1-2.2l3.2,1.8c0,0-0.5,1-0.6,0.9c-0.1,0-2.8-1.6-2.8-1.6L815.8,990.7z"/>
										<path class="st10" d="M826.7,990.7l-0.3-1.1l7.1-2.2l3.2,1.8c0,0-0.5,1-0.6,0.9c-0.1,0-2.8-1.6-2.8-1.6L826.7,990.7z"/>
										<path class="st10" d="M826.7,988.7l-0.3-1.1l7.1-2.2l3.2,1.8c0,0-0.5,1-0.6,0.9c-0.1,0-2.8-1.6-2.8-1.6L826.7,988.7z"/>
										<path class="st10" d="M826.7,986.8l-0.3-1.1l7.1-2.2l3.2,1.8c0,0-0.5,1-0.6,0.9c-0.1,0-2.8-1.6-2.8-1.6L826.7,986.8z"/>
										<path class="st10" d="M826.7,984.7l-0.3-1.1l7.1-2.2l3.2,1.8c0,0-0.5,1-0.6,0.9c-0.1,0-2.8-1.6-2.8-1.6L826.7,984.7z"/>
										<path class="st10" d="M826.7,982.8l-0.3-1.1l7.1-2.2l3.2,1.8c0,0-0.5,1-0.6,0.9c-0.1,0-2.8-1.6-2.8-1.6L826.7,982.8z"/>
										<path class="st10" d="M826.7,980.7l-0.3-1.1l7.1-2.2l3.2,1.8c0,0-0.5,1-0.6,0.9c-0.1,0-2.8-1.6-2.8-1.6L826.7,980.7z"/>
										<path class="st10" d="M826.7,978.8l-0.3-1.1l7.1-2.2l3.2,1.8c0,0-0.5,1-0.6,0.9c-0.1,0-2.8-1.6-2.8-1.6L826.7,978.8z"/>
										<path class="st10" d="M826.7,976.6l-0.3-1.1l7.1-2.2l3.2,1.8c0,0-0.5,1-0.6,0.9c-0.1,0-2.8-1.6-2.8-1.6L826.7,976.6z"/>
										<path class="st10" d="M815.8,994.7c0-0.1,0-2.2,0-2.2l-0.3-0.7l7.1-2.2l3.2,1.8l-0.3,0.4v2.9h1.2v-2.1l-0.4-0.9l7.1-2.2l3.2,1.8
											l-0.3,0.5v2.8h1.6v1.1h-25.1v-1.1L815.8,994.7z"/>
									</g>
								</g>
								<g>
									<g>
										<g>
											<path class="st10" d="M440,1097.2c-11.1,0-20.2,9-20.2,20.2c0,4.4,1.4,8.4,3.7,11.7h1.9c-2.6-3.2-4.1-7.3-4.1-11.7
												c0-10.3,8.4-18.7,18.7-18.7s18.7,8.4,18.7,18.7c0,4.4-1.5,8.5-4.1,11.7h1.9c2.3-3.3,3.7-7.3,3.7-11.7
												C460.1,1106.2,451.1,1097.2,440,1097.2z"/>
										</g>
									</g>
									<g>
										<polygon class="st10" points="439.3,1103.6 432.5,1110.4 433.1,1111 439.3,1104.9 449,1114.5 442.5,1121 440.2,1118.7 
											439.6,1119.4 442.5,1122.3 450.3,1114.5 				"/>
										<polygon class="st10" points="445.6,1111.6 436.2,1121 429.7,1114.5 431.9,1112.2 431.3,1111.6 428.4,1114.5 436.2,1122.3 
											446.2,1112.2 				"/>
										<polygon class="st10" points="439.1,1117.6 431.3,1109.8 439.3,1101.7 447.4,1109.8 446.7,1110.4 447.4,1111.1 448.7,1109.8 
											439.3,1100.4 430,1109.8 438.4,1118.2 				"/>
										
											<rect x="438.4" y="1107.2" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -654.9092 635.298)" class="st10" width="2" height="2"/>
									</g>
									<g>
										<path class="st10" d="M435.2,1128.9c-0.2,0.1-0.8,0.3-1.4,0.3c-1.5,0-2.7-1-2.7-2.7s1.1-2.8,2.8-2.8c0.7,0,1.1,0.1,1.3,0.2
											l-0.2,0.6c-0.3-0.1-0.6-0.2-1.1-0.2c-1.3,0-2.1,0.8-2.1,2.2c0,1.3,0.8,2.2,2.1,2.2c0.4,0,0.9-0.1,1.1-0.2L435.2,1128.9z"/>
										<path class="st10" d="M436.1,1123.6h0.7v4.8h2.3v0.6h-3V1123.6z"/>
										<path class="st10" d="M440.3,1123.6v3.2c0,1.2,0.5,1.7,1.3,1.7s1.3-0.5,1.3-1.7v-3.2h0.7v3.2c0,1.7-0.9,2.3-2,2.3
											s-1.9-0.6-1.9-2.3v-3.2H440.3z"/>
										<path class="st10" d="M444.8,1123.7c0.3-0.1,0.8-0.1,1.3-0.1c0.7,0,1.1,0.1,1.5,0.4c0.3,0.2,0.5,0.5,0.5,1s-0.4,1-0.9,1.2l0,0
											c0.5,0.1,1.1,0.5,1.1,1.3c0,0.5-0.2,0.8-0.5,1.1c-0.4,0.3-1,0.5-1.9,0.5c-0.5,0-0.9,0-1.1-0.1V1123.7z M445.5,1125.9h0.6
											c0.7,0,1.2-0.4,1.2-0.9c0-0.6-0.5-0.9-1.2-0.9c-0.3,0-0.5,0-0.6,0V1125.9z M445.5,1128.5c0.1,0,0.3,0,0.6,0
											c0.7,0,1.4-0.3,1.4-1.1c0-0.7-0.6-1-1.4-1h-0.6V1128.5z"/>
									</g>
								</g>
							</g>
						</g>
					</svg>
                </div>
            </div>
        </div>
        <div class="amenidades pb-blue3-bg py">
            <div class="row">
                <div class="col s12 m6 l4 center">
                    <img src="media/assets/img/habitta/portto-blanco/icons/master/towers.svg">
                    <h5>Torres departamentales</h5>
                </div>
                <div class="col s12 m6 l4 center">
                    <img src="media/assets/img/habitta/portto-blanco/icons/master/forest.svg">
                    <h5>Áreas Ecológicas</h5>
                </div>
                <div class="col s12 m6 l4 center">
                    <img src="media/assets/img/habitta/portto-blanco/icons/master/park.svg">
                    <h5>Kids Park</h5>
                </div>
                <div class="col s12 m6 l4 center">
                    <img src="media/assets/img/habitta/portto-blanco/icons/master/lake.svg">
                    <h5>Lago</h5>
                </div>

                <div class="col s12 m6 l4 center">
                    <img src="media/assets/img/habitta/portto-blanco/icons/master/hospital.svg">
                    <h5>Hospital</h5>
                </div>
                <div class="col s12 m6 l4 center">
                    <img src="media/assets/img/habitta/portto-blanco/icons/master/horse.svg">
                    <h5>Club Hípico</h5>
                </div>
                <div class="col s12 m6 l4 center">
                    <img src="media/assets/img/habitta/portto-blanco/icons/master/shop.svg">
                    <h5>Área Comercial</h5>
                </div>
                <div class="col s12 m6 l4 center">
                    <img src="media/assets/img/habitta/portto-blanco/icons/master/pet.svg">
                    <h5>Pet Friendly Park</h5>
                </div>

                <div class="col s12 m6 l4 center">
                    <img src="media/assets/img/habitta/portto-blanco/icons/master/portto.svg">
                    <h5>Club Portto Blanco</h5>
                </div>
                <div class="col s12 m6 l4 center">
                    <img src="media/assets/img/habitta/portto-blanco/icons/master/book.svg">
                    <h5>Escuela</h5>
                </div>
                <div class="col s12 m6 l4 center">
                    <img src="media/assets/img/habitta/portto-blanco/icons/master/fitness.svg">
                    <h5>Fitness Park</h5>
                </div>
                <div class="col s12 m6 l4 center">
                    <img src="media/assets/img/habitta/portto-blanco/icons/master/zen.svg">
                    <h5>Zen Park</h5>
                </div>

                <div class="col s12 m6 l4 center">
                    <img src="media/assets/img/habitta/portto-blanco/icons/master/sport.svg">
                    <h5>Sport Zone</h5>
                </div>
                <div class="col s12 m6 l4 center">
                    <img src="media/assets/img/habitta/portto-blanco/icons/master/market.svg">
                    <h5>Supermercado</h5>
                </div>
                <div class="col s12 m12 l4 center">
                    <img src="media/assets/img/habitta/portto-blanco/icons/master/nautica.svg">
                    <h5>Plaza Náutica Portto Blanco</h5>
                </div>
            </div>

        </div>
    </div>
    <!--De Galeria de vr -->
    <div class="section2">
        <div class="master">
            <div class="row">
                <div class="col s12">
                    <h2 class="headline-2 pb-blue-text center-align"><span class="futura-light">Vive La Experiencia Virtual de Nuestras Amenidades</h2>
                </div>
            </div>
        </div>
        <div class=" vr pb-blue3-bg py">
            <div class="row">
                <div class="col s12 m6 l4 center">
                    <a target="_blank" rel="noopener noreferrer" href="https://GrupoCCIMA.vr-360-tour.com/e/gcwBdHmQ2UA/e?hide_nadir=true&hidelive=true&initvars.autorotate.enabled=true&show_thumbnails=true">
                        <img  src="media/assets/img/habitta/portto-blanco/vr/PorttoBlanco_PlazaNautica_Vr.jpg">
                        <h5 >Plaza Náutica Portto Blanco</h5>
                    </a>
                </div>
                <div class="col s12 m6 l4 center">
                    <a target="_blank" rel="noopener noreferrer"  href="https://GrupoCCIMA.vr-360-tour.com/e/gcwBdHnXD2A/e?hide_nadir=true&hidelive=true&initvars.autorotate.enabled=true&show_thumbnails=true">
                        <img  src="media/assets/img/habitta/portto-blanco/vr/PorttoBlanco_Pet-park_Vr.jpg">
                        <h5>Pet Friendly Park</h5>
                    </a>
                </div>
                <div class="col s12 m6 l4 center">
                    <a target="_blank" rel="noopener noreferrer" href="https://GrupoCCIMA.vr-360-tour.com/e/gcwBdHncOPc/e?hide_nadir=true&hidelive=true&initvars.autorotate.enabled=true&show_thumbnails=true">
                        <img  src="media/assets/img/habitta/portto-blanco/vr/PorttoBlanco_KidsPark_Vr.jpg">
                        <h5 >Kids Park</h5>
                    </a>
                </div>
                <div class="col s12 m6 l4 center">
                    <a target="_blank" rel="noopener noreferrer" href="https://GrupoCCIMA.vr-360-tour.com/e/gcwBdHndhQc/e?hide_nadir=true&hidelive=true&initvars.autorotate.enabled=true&show_thumbnails=true">
                        <img  src="media/assets/img/habitta/portto-blanco/vr/PorttoBlanco_ZenPark_Vr.jpg">
                        <h5>Zen Park</h5>
                    </a>
                </div>

                <div class="col s12 m6 l4 center">
                    <a target="_blank" rel="noopener noreferrer" href="https://GrupoCCIMA.vr-360-tour.com/e/gcwBdHngp6g/e?hide_nadir=true&hidelive=true&initvars.autorotate.enabled=true&show_thumbnails=true">
                        <img  src="media/assets/img/habitta/portto-blanco/vr/PorttoBlanco_Gym_Vr.jpg">
                        <h5>Fitness Park</h5>
                    </a>
                </div>
                <div class="col s12 m6 l4 center">
                    <a target="_blank" rel="noopener noreferrer" href="https://GrupoCCIMA.vr-360-tour.com/e/gcwBdHnh50o/e?hide_nadir=true&hidelive=true&initvars.autorotate.enabled=true&show_thumbnails=true">
                        <img     src="media/assets/img/habitta/portto-blanco/vr/PorttoBlanco_ClubPorttoBlanco_Vr.jpg">
                        <h5>Club Portto Blanco</h5>
                    </a>
                </div>
                <div class="col s12 m6 l4 center">
                    <a target="_blank" rel="noopener noreferrer" href="https://GrupoCCIMA.vr-360-tour.com/e/gcwBdHnitVw/e?hide_nadir=true&hidelive=true&initvars.autorotate.enabled=true&show_thumbnails=true">
                        <img  src="media/assets/img/habitta/portto-blanco/vr/PorttoBlanco_ClubHipico_Vr.jpg">
                        <h5>Club Hípico</h5>
                    </a>
                </div>
                <div class="col s12 m6 l4 center">
                    <a target="_blank" rel="noopener noreferrer" href="https://GrupoCCIMA.vr-360-tour.com/e/gcwBdHnkmJM/e?hide_nadir=true&hidelive=true&initvars.autorotate.enabled=true&show_thumbnails=true">
                        <img  src="media/assets/img/habitta/portto-blanco/vr/PorttoBlanco_Acceso_Vr.jpg">
                        <h5>Acceso Principal</h5>
                    </a>
                </div>
                <div class="col s12 m6 l4 center">
                    <a target="_blank" rel="noopener noreferrer" href="https://GrupoCCIMA.vr-360-tour.com/e/gcwBdHnjtkM/e?hide_nadir=true&hidelive=true&initvars.autorotate.enabled=true&show_thumbnails=true">
                        <img  src="media/assets/img/habitta/portto-blanco/vr/PorttoBlanco_AccesoCasas_Vr.jpg">
                        <h5> Acceso a Casa-Condominio</h5>
                    </a>
                </div>
            <!--vr items -->
            </div>

        </div>
    </div>

<!-- Fin De Galeria de vr -->
    
    
    
    <div class="py">
        <h2 class="headline-2 center-align pb-blue-text futura-light">Lotes residenciales diseñados para las necesidades de nuestros clientes más exigentes</h2>
        <div class="row center py">
            <div class="col s12">
                <img class="plano-lote" src="media/assets/img/habitta/portto-blanco/lotes/lotes-abc-dark.svg">
            </div>
        </div>
        <div class="row center py">
            <div class="col s12">
                <img class="plano-lote" src="media/assets/img/habitta/portto-blanco/lotes/lotes-def-dark.svg">
            </div>
        </div>
        <div class="row center py">
            <div class="col s12">
                <img class="plano-lote" src="media/assets/img/habitta/portto-blanco/lotes/lotes-ghi-dark.svg">
            </div>
        </div>
    </div>

    <div class="py pb-blue3-bg">
        <div class="container">
            <!--h2 class="headline-2 pb-light-text">PLANOS</h2>
            <div class="row center py">
                <div class="col s12">
                    <h4 class="pb-light-text">ESTEPA</h4>
                </div>
                <div class="col s12">
                    <img src="media/assets/img/habitta/portto-blanco/planos/estepa.png" style="width: 100%;">
                </div>
                <div class="col s12">
                    <img src="media/assets/img/habitta/portto-blanco/planos/estepa-inf.svg" style="margin-top: 20px;">
                </div>
            </div>
            <div class="row center py">
                <div class="col s12">
                    <h4 class="pb-light-text">DESIERTO</h4>
                </div>
                <div class="col s12">
                    <img src="media/assets/img/habitta/portto-blanco/planos/desierto.png" style="width: 100%;">
                </div>
                <div class="col s12">
                    <img src="media/assets/img/habitta/portto-blanco/planos/desierto-inf.svg" style="margin-top: 20px;">
                </div>
            </div>
            <div class="row center py">
                <div class="col s12">
                    <h4 class="pb-light-text">ARRECIFE</h4>
                </div>
                <div class="col s12">
                    <img src="media/assets/img/habitta/portto-blanco/planos/arrecife.png" style="width: 100%;">
                </div>
                <div class="col s12">
                    <img src="media/assets/img/habitta/portto-blanco/planos/arrecife-inf.svg" style="margin-top: 20px;">
                </div>
            </div-->

            <h2 class="headline-2 py pb-light-text">FINANCIAMIENTO</h2>
             <div class="row py">
                <div class="col s12">
                    <img src="media/assets/img/habitta/portto-blanco/financiamiento.svg" style="width: 100%;">
                </div>
            </div>
        </div>
    </div>

    <footer class="page-footer pb-gray-bg" ng-controller="mainController as main">
        <div class="container">
            <div class="row py-80">

                <div class="col s12">
                    <h4 class="pb-20">¿Tienes algún proyecto en mente? Tomemos un café</h4>
                </div>
                <form class="col s12 m7" ng-submit="main.sendEmail()">
                    <div class="input-field col s12">
                        <input id="first_name" type="text" name="name" class="validate" autocomplete="off" required ng-model="main.name">
                        <label for="first_name">¿Cómo te llamas?</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="email" type="email" name="email" class="validate" autocomplete="off" required ng-model="main.email">
                        <label for="email">Compartenos tu Correo electrónico @</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="tel" type="tel" name="phone" class="validate" autocomplete="off" ng-model="main.phone">
                        <label for="tel">Si lo prefieres, dejanos tu Télefono (opcional)</label>
                    </div>
                    <div class="input-field col s12">
                        <textarea id="textarea1" name="details" class="materialize-textarea" autocomplete="off" maxlength="120" required ng-model="main.message"></textarea>
                        <label for="textarea1">¡Cuéntanos sobre tu proyecto!</label>
                    </div>
                    <button class="waves-effect waves-teal btn right w100" type="submit">
                        ENVIAR
                    </button>
                </form>

               <div class="contact-footer col s12 m4 right">
                    <div class="py-40">
                        <h4>Contactanos</h4>
                        <ul>
                            <li class="py-10">Dirección: <a class=""
                                    href="https://goo.gl/maps/4Sv1C6Re18urpw4W6" target="_blank">
                                    Blvd. Bernardo Quintana 88, Carretas, 76050 Santiago de Querétaro, Qro.</a></li>
                            <li class="py-10">Teléfono: <a class="" href="tel:+524422912223">442 291 2223</a></li>
                            <li class="py-10">Correo: <a class=""
                                    href="mailto:hola.habitta@grupoccima.com">hola.habitta@grupoccima.com</a></li>
                            <li class="py-10">Abrimos: Lun-Vie: 8 am-6:30 pm <br>Sáb-Dom: 10 am-6:30 pm  </li>
                        </ul>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                <ul class="social-icons">
                    <li class="right">
                        <a href="https://mx.linkedin.com/company/grupo-ccima">
                            <img src="media/assets/img/icons/social/linkedin.svg" width="19" height="19">
                        </a>
                    </li>
                    <li class="right">
                        <a href="https://twitter.com/grupoccima?lang=es">
                            <img src="media/assets/img/icons/social/twitter.svg" width="20" height="20">
                        </a>
                    </li>
                    <li class="right">
                        <a href="https://www.instagram.com/grupo_ccima/">
                            <img src="media/assets/img/icons/social/instagram.svg" width="20" height="20">
                        </a>
                    </li>
                    <li class="right">
                        <a href="https://www.facebook.com/GPOCCIMA/?ref=br_rs">
                            <img src="media/assets/img/icons/social/facebook.svg" width="20" height="20">
                        </a>
                    </li>
                    <li>Grupo CCIMA 2020</li>
                </ul>
            </div>
        </div>
    </footer>

</body>
</html>
