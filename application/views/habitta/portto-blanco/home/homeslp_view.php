<!DOCTYPE html>
<html lang="es_MX">

<head>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" contet="ie=edge">
    <meta name="author" content="Ing. Saúl Fernando Torres Hernández">
    <meta name="description" content="Grúpo CCIMA S.A. de C.V." />
    <meta name="keywords"
        content="grupo ccima, navetec, constructora, servicio de construccion, desarrolladora, llave en mano, built to suit, renta de maquinaria, renta de gruas, maquinaria pesada para construccion, naves industriales, renta naves industriales, venta naves industriales, parques industriales, terrenos, terrenos industriales, terrenos habitacionales, bienes raices, inmobiliaria" />

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

    <div ng-controller="PorttoBlancoDialogPromoCtrl as porttoBlancoDialogPromoQuote">
        <div class="modal-dialog" ng-class="porttoBlancoDialogPromoQuote.dialogDisplay">
            <div class="backdrop-dialog" ng-click="porttoBlancoDialogPromoQuote.closeDialog()"></div>
            <div class="container-dialog p-20">
                <div class="toolbar-dialog blue-txt">
                    Promociones de Lanzamiento Digital
                    <span ng-click="porttoBlancoDialogPromoQuote.closeDialog()">
                        <img class="btn-close-dialog mt-4" src="media/assets/img/icons/close.svg">
                    </span>
                </div>
                <div class="content-dialog">
                    <h1 class="banner-promo-header blue-bg light-txt py-20 futura-demi center-align">DESCUENTOS</h1>
                    <div class="row">
                        <div class="col s12 m6">
                            <h1 class="center-align futura-demi">25%</h1>
                            <div class="divider"></div>
                            <h5 class=" center-align">Pagando de Contado</h5>
                        </div>
                        <div class="col s12 m6">
                            <h1 class="center-align futura-demi">20%</h1>
                            <div class="divider"></div>
                            <h5 class=" center-align">Pago con Financiamiento a 180 Meses</h5>
                        </div>
                    </div>
                    <div class="container">
                        <p class="center-align pt-20">¡Apártalo con solo $10,000 MN! Comunícate con un Asesor con el
                            botón de CONTACTO y realiza tu pago de forma Online</p>
                    </div>
                </div>

                <div class="divider"></div>

                <div class="option-menu-dialog" ng-controller="ContactMenuCtrl as contactCtrl">
                    <md-menu class="right mr-20 mt-10" md-offset="-50 -200">
                        <a class="btn blue-bg no-shadows futura-demi lighter right"
                            ng-click="contactCtrl.openMenu($mdMenu, $event)">
                            COTIZADOR
                        </a>
                        <md-menu-content width="4">

                            <md-menu-item>
                                <md-button disabled="disabled">
                                    San Luis Potosí
                                </md-button>
                            </md-menu-item>
                            <md-menu-divider></md-menu-divider>
                            <md-menu-item>
                                <md-button ng-click="contactCtrl.toPBSLPTamul()">
                                    Tamúl
                                </md-button>
                            </md-menu-item>

                            <md-menu-divider></md-menu-divider>
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
                            

                        </md-menu-content>
                    </md-menu>

                    <md-menu class="right mr-20 mt-10" md-offset="0 0">
                        <md-button aria-label="Abrir Menu de Contacto" class="md-button"
                            ng-click="contactCtrl.openMenu($mdMenu, $event)">
                            CONTACTO
                        </md-button>
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
    </div>

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
        <a href="#!/habitta" ng-click="close()">
            <div class="link-sidenav">
                <span>Habitta</span>
            </div>
        </a>
    </md-sidenav>

    <div class="navbar-fixed" ng-controller="sideNavCtrl">
        <nav class="white no-shadows" role="navigation">

            <div class="nav-wrapper">

                <a href="#!/portto_blanco" class="brand-logo white left"><img class="logo-pb"
                        src="media/assets/img/habitta/portto-blanco/pb_slp_logo.svg"></a>

                <ul class="nav-menu hide-on-med-and-down">
                    <li><a href="#!/">Inicio</a></li>
                    <li><a href="#!/habitta">Habitta</a></li>
                    <li class="quote-item">
                        <md-menu class="right mr-20 mt-20" md-offset="0 -60"
                            ng-controller="ContactMenuCtrl as contactCtrl">
                            <a class="btn blue-bg no-shadows futura-demi lighter right"
                                ng-click="contactCtrl.openMenu($mdMenu, $event)">
                                COTIZAR AQUÍ
                            </a>
                            <md-menu-content width="4">
                                <md-menu-item>
                                    <md-button disabled="disabled">
                                        San Luis Potosí
                                    </md-button>
                                </md-menu-item>
                                <md-menu-divider></md-menu-divider>
                                <md-menu-item>
                                    <md-button ng-click="contactCtrl.toPBSLPTamul()">
                                        Tamúl
                                    </md-button>
                                </md-menu-item>
                                <md-menu-divider></md-menu-divider>
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
                            </md-menu-content>
                        </md-menu>
                    </li>
                </ul>

                <ul class="right hide-on-large-only">
                    <li>
                        <md-button class="md-icon-button md-noink" ng-click="toggleLeft()">
                            <svg viewBox="0 0 24 24" width="24">
                                <path d="M3,18h18v-2H3V18z M3,13h18v-2H3V13z M3,6v2h18V6H3z" fill="#5F6368"></path>
                            </svg>
                        </md-button>
                    </li>
                </ul>

                <div class="quote-item right hide-on-large-only">
                    <md-menu class="right mr-20 mt-20" md-offset="0 -150"
                        ng-controller="ContactMenuCtrl as contactCtrl">
                        <a class="btn blue-bg no-shadows futura-demi lighter right"
                            ng-click="contactCtrl.openMenu($mdMenu, $event)">
                            COTIZAR AQUÍ
                        </a>
                        <md-menu-content width="4">

                           
                            <md-menu-item>
                                <md-button disabled="disabled">
                                    San Luis Potosí
                                </md-button>
                            </md-menu-item>
                            <md-menu-divider></md-menu-divider>

                            <md-menu-item>
                                <md-button ng-click="contactCtrl.toPBSLPTamul()">
                                    Tamúl
                                </md-button>
                            </md-menu-item>
                            <md-menu-divider></md-menu-divider>
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

                        </md-menu-content>
                    </md-menu>
                </div>

            </div>

        </nav>
    </div>

    <div class="portto-container">

        <div class="header-pb">
            <h1 class="header-heading pb-blue-text futura-light">EL HOGAR <br>QUE SOÑASTE, <br>EL RESPIRO QUE
                <br>MERECES</h1>
            <div class="header-img">
                <img src="media/assets/img/habitta/portto-blancoslp/portada.jpg">
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
        <div class="map-portto-slp" style="padding-bottom: 20px;">
            <div class="map-heading-slp">
                <h2 class=" pb-blue-text">UN LUGAR <br>PRIVILEGIADO</h2>
                <h4 class=" pb-blue-text futura-light">Ubicado al sur de la ciudad<br>de San Luis Potosí en el
                <br>Municipio de Villa de Reyes</h4>
            </div>
            <img src="media/assets/img/habitta/portto-blancoslp/mapa.png">

        </div>

    </div>

    <div class="section2">
        <div class="master">
            <div class="row">
                <div class="col s12">
                    <h2 class="headline-2 pb-blue-text center-align"><span class="futura-light">Las maravillas de la
                            ciudad de</span> San Luis Potosí <span class="futura-light">en un lugar lleno de
                        </span>naturaleza<span class="futura-light"> y</span> bienestar</h2>
                </div>
                <svg class="quote__map" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
            y="0px" viewBox="0 0 1366 527" style="enable-background:new 0 0 1366 527;" xml:space="preserve">
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
                .stnone{fill:none;}
            </style>

            <image class="pb__slp__bg" xlink:href="media/assets/img/habitta/portto-blanco/app/SLP/master.jpg"></image>

            <g>
                <g>
                    <polyline class="st0" points="1052.6,6.9 1124.5,1.2 1170.5,113.5 1169.9,176 1097.7,175.3 1097,253.5 
                        1090.4,251 1088.4,256.6 1085,257 1072.7,251.8 1060.6,246.1 1048.7,240.1 1037,233.7 1036.1,233 1035.6,232 1035.4,230.9 
                        1035.5,228.3 1035.2,225.7 1034.6,223.2 1033.8,220.8 1032.3,217.8 1030.3,215.1 1027.9,212.7 1025.3,210.7 1022.3,209.1 
                        1019.2,208 1015.9,207.3 1015,207.1 1014.1,206.5 1013.5,205.7 1011,201.1 1008.2,196.8 1004.9,192.8 1001.4,189 997.5,185.5 
                        993.4,182.4 989,179.6 984.5,177.2 977.5,174.1 970.4,171.3 963.2,168.9 955.8,166.8 948.4,165.1 947,163 946.6,162.6 
                        946.1,162.5 941.3,162.2 1052.6,6.9"/>
                    <text transform="matrix(1 0 0 1 1001.1867 135.5779)" class="white__fill futura-book fs__18px">PUENTE DE DIOS</text>
                </g>
                <g>
                    <polyline class="st4" points="863.1,155.8 773.5,141.9 758.7,139.7 743.9,138 729,136.6 714.2,135.6 
                        713.1,135.4 712.3,134.8 711.6,133.9 711.3,132.9 711.4,131.8 711.9,130.8 755.4,70.3 869.2,61.3 866.1,21.7 883.4,20.3 
                        1052.6,6.9 941.3,162.2 940.2,163.6 932.4,162.6 924.6,162.1 909.2,161.1 893.8,159.7 878.4,157.9 863.1,155.8"/>
                    <text transform="matrix(1 0 0 1 806.4396 104.95)" class="white__fill futura-book fs__18px">LOS SABINOS</text>
                </g>
                <g>
                    <polyline class="st0" points="946.9,293.2 938.6,295.6 930.2,297.4 921.7,298.7 913.1,299.5 904.5,299.9 
                        600.2,312.9 679.6,196.5 705.4,160.6 706.8,160.6 722.5,161.6 738.3,162.9 753.9,164.7 769.6,166.9 859,180.8 875,183.1 
                        891.1,184.9 907.2,186.4 923.3,187.4 930.7,188 938.1,189 945.4,190.4 952.7,192.2 959.8,194.4 966.7,197.1 973.5,200.1 
                        976.9,201.9 980.1,204.1 983,206.5 985.7,209.3 983.5,212.7 981.7,216.3 980.4,220.1 979.6,224 979.2,228.1 979.3,232.1 
                        979.8,236.1 980.8,240 982.3,243.7 984.2,247.3 986.5,250.6 989.2,253.6 992.2,256.2 995.5,258.5 999.1,260.4 996.2,264.4 
                        993,268.1 989.4,271.5 985.5,274.5 978.3,279.1 970.8,283.3 963,287.1 955.1,290.4 946.9,293.2"/>
                    <text transform="matrix(1 0 0 1 739.2385 245.0632)" class="white__fill futura-book fs__18px">MEDIA LUNA</text>
                </g>
                <g>
                    <polyline class="st4" points="379.5,192.1 384.3,191.3 384.8,191 385.1,190.6 385.8,189.5 584.3,155.8 
                        597.4,153.8 610.7,152.1 612.3,151.9 531.4,262.2 498.1,311.1 498,311.1 496.8,311.3 402.7,328.5 379.5,192.1"/>
                    <text transform="matrix(1 0 0 1 445.2502 245.2341)" class="white__fill futura-book fs__18px">XILITLA</text>
                </g>
                <g>
                    <polyline class="st0" points="415.9,57.3 713.2,33.8 682,77.1 682,77.2 639.7,134.9 639,135.5 638.3,136 
                        637.4,136.1 623.8,137.3 610.1,138.7 596.5,140.4 582.9,142.5 431.3,168.2 430.4,167.3 429.9,167 429.3,167 424.6,167.8 
                        415.9,57.3"/>
                    <text transform="matrix(1 0 0 1 499.4518 101.2234)" class="white__fill futura-book fs__18px">EL SALITRE</text>
                </g>
                <g>
                    <polyline class="st4" points="289.9,192.2 289.9,192.2 277.2,194.2 264.4,196 255.3,197.3 246.3,199.1 
                        237.4,201.3 228.6,204 220,207 211.5,210.5 210.3,209.9 209.7,209.7 209.2,209.8 204.8,211.8 194,74.9 415.9,57.3 424.6,167.8 
                        424.7,169.3 289.9,192.2"/>
                    <text transform="matrix(1 0 0 1 257.759 132.4978)" class="white__fill futura-book fs__18px">TAMASOPO</text>
                </g>
                <g>
                    <polyline class="st0" points="233.1,345.9 223.1,220.1 231.4,217.1 239.9,214.5 248.6,212.3 257.3,210.5 
                        266,209.2 279.1,207.4 292.1,205.4 379.3,190.6 402.7,328.5 340.6,339.9 325.5,342.8 310.5,346.1 302,347.9 293.4,349.2 
                        284.8,350.1 276.1,350.5 267.4,350.5 258.8,350 250.1,349.1 241.6,347.7 233.1,345.9"/>
                    <text transform="matrix(1 0 0 1 271.8762 282.9314)" class="white__fill futura-book fs__18px">EL SALTO</text>
                </g>
                <g>
                    <polyline class="st4" points="44.1,86.8 194,74.9 205,213.4 196,218 187.4,223 179,228.5 177.8,229.3 
                        173.1,232.9 168.8,236.9 164.8,241.2 161.1,245.8 157.8,250.7 154.9,255.9 152.4,261.2 150.4,266.7 148.8,272.4 147.6,278.2 
                        146.9,284 146.7,289.9 146.9,295.8 25.3,284.2 44.1,86.8"/>
                    <text transform="matrix(1 0 0 1 71.757 185.5964)" class="white__fill futura-book fs__18px">CANDELAS</text>
                </g>
                <g>
                    <polyline class="st0" points="25.3,284.2 146.9,295.8 147.6,301.7 148.8,307.5 150.4,313.2 152.5,318.7 
                        155,324.1 157.9,329.2 161.2,334.1 164.9,338.8 169,343.1 173.4,347 178.1,350.7 183,353.9 188.2,356.7 200.3,508.7 2.4,524.3 
                        25.3,284.2"/>
                    <text transform="matrix(1 0 0 1 38.5744 423.5051)" class="white__fill futura-book fs__18px">SIERRA MADRE</text>
                </g>
                <g>
                    <polyline class="st4" points="200.3,508.7 188.4,358.5 192.7,360.5 193.3,360.6 193.8,360.5 195,359.8 
                        203.8,363.4 212.8,366.6 222,369.3 231.2,371.5 240.6,373.3 250,374.6 259.5,375.5 269,375.9 278.6,375.8 288.1,375.3 
                        297.6,374.3 307,372.8 316.3,370.8 329.1,368 341.9,365.4 487.5,338.8 488.7,338.8 489.8,339.3 490.6,340.1 491,341.2 491,342.4 
                        490.6,343.5 410,461.7 410,461.8 387.7,493.8 200.3,508.7"/>
                    <text transform="matrix(1 0 0 1 264.7863 436.7649)" class="white__fill futura-book fs__18px">EL ARROYO</text>
                </g>
                <g>
                    <polyline class="st0" points="462.1,487.9 543.4,374.9 543.4,374.8 574.9,328.6 575.6,327.9 576.4,327.5 
                        577.3,327.3 584.2,327 745.7,320 745.8,321.5 757.1,464.6 462.1,487.9"/>
                    <text transform="matrix(1 0 0 1 569.1838 410.8391)" class="white__fill futura-book fs__18px">GOLONDRINAS</text>
                </g>
                <a href="#!/Portto_Blanco-Tamul" class="pb__condo">
                    <path class="stnone" d="M1173.5,356.5l-4.5-56.7l-4.6-0.9c-1.1,0.3-2.2,0.7-3.3,1c-9.8-2-20.2-4.4-31.1-7.4c-11.8-3.3-22.9-6.8-33-10.5
                        l-2,5.7l-17-6.5l2.2-5.6c-0.7-0.9-1.5-1.8-2.2-2.7c-4.6-1.9-9.3-3.9-14.1-6.1c-3.3-1.5-6.5-3-9.6-4.5c-2-1-4-2-6-2.9
                        c-1.7-0.9-3.4-1.7-5-2.6c-1.7-0.9-3.4-1.8-5.1-2.6c-0.5-0.3-1-0.5-1.5-0.8c-0.6-0.3-1.2-0.6-1.7-0.9l0,0l-7.3-3.8
                        c-0.2-0.2-0.8-0.5-1.6-0.5c-1,0-1.8,0.5-2,0.7c-0.5,0.3-1,0.6-1.5,0.9c-1.1,0.6-2.1,1-3.1,1.3c-0.3,0-1,0.1-1.7,0.6
                        c-0.7,0.5-1,1.1-1.1,1.4c-0.9,2.8-2.2,6.4-4.2,10.3c-1.2,2.2-3.9,7.1-8.4,12.3c-5.1,5.8-10.4,9.7-15.9,13.1
                        c-22.6,14.1-45.9,20-45.9,20c-9.1,2.3-21.9,4.7-37.5,4.8l0,0l-90.5,3.9l0-0.2l-61.6,2.6l-0.7,1.2l-1,0.5l-4.7,0.2l11.3,142.8l68-5.3
                        l0-0.4l48.6-3.8l-5.9-74.4l39.4-3.1c0,0,0,0.1,0,0.1l123.6-9.8l0,0L1173.5,356.5z M1034.8,252.5"/>
                    <text transform="matrix(1 0 0 1 941.2802 344.5048)" class="white__fill futura-book fs__18px">TAMÚL</text>
                </a>
            </g>

            <g>
                <g>
                    <g>
                        <path class="white__fill" d="M1244.2,339.4c-1.6-2-2.5-4.6-2.5-7.5c0-6.6,5.1-11.9,11.4-11.9s11.4,5.3,11.4,11.9c0,2.8-0.9,5.4-2.5,7.5
                            h1.2c1.4-2.1,2.3-4.7,2.3-7.5c0-7.1-5.5-12.9-12.3-12.9c-6.8,0-12.3,5.8-12.3,12.9c0,2.8,0.8,5.4,2.3,7.5H1244.2z"/>
                    </g>
                    <path class="white__fill" d="M1260.6,328.3c-0.1-1.5-1.3-2.6-2.8-2.6h-0.7v-0.8c0,0,0-0.1,0-0.1c-0.1-1.8-1.5-3.3-3.3-3.3
                        c-1.3,0-2.4,0.8-2.9,1.9c-0.9,0.4-1.6,1.3-1.8,2.4h-1.3c-0.3,0-0.5,0.2-0.5,0.5l0,0.5c0,0,1.2,0,1.3,0h0.5v0.6h-0.7
                        c-1.5,0-2.7,1.1-2.8,2.6l-0.5,6.5c-0.1,1.6,1.2,3,2.8,3h11.3c0.3,0,0.5-0.3,0.5-0.6l-0.1-1h1.1c0.3,0,0.5-0.3,0.5-0.6
                        L1260.6,328.3z M1253.9,322.6c1.4,0,2.5,1.1,2.5,2.6v0.8h-0.8c-0.2-1.6-1.5-2.8-3.1-2.9C1252.8,322.8,1253.3,322.6,1253.9,322.6z
                        M1251.4,325.2c0-0.4,0.1-0.8,0.3-1.1c0.2-0.1,0.4-0.1,0.7-0.1c1.2,0,2.2,0.9,2.4,2h-3.3L1251.4,325.2L1251.4,325.2z
                        M1250.6,324.6c0,0,0,0.1,0,0.1c0,0,0,0.1,0,0.1v0.8h-0.6C1250.1,325.3,1250.3,324.9,1250.6,324.6z M1249.9,326.7h4.9v0.6h-4.9
                        V326.7z M1246.4,330.8c0.1-1.4,1.3-2.5,2.7-2.5l0,0v1.9c-0.2,0.1-0.3,0.4-0.3,0.7c0,0.4,0.3,0.8,0.8,0.8s0.8-0.4,0.8-0.8
                        c0-0.3-0.2-0.5-0.4-0.7v-1.9h4.9v1.9c-0.2,0.1-0.3,0.4-0.3,0.7c0,0.4,0.3,0.8,0.8,0.8s0.8-0.4,0.8-0.8c0-0.3-0.2-0.5-0.4-0.7
                        v-1.9h0c1.4,0,2.6,1.1,2.7,2.5l0.3,3.6c0.1,1.3-0.9,2.4-2.2,2.4h-8c-1.3,0-2.3-1.1-2.2-2.4L1246.4,330.8z M1258.4,338.5h-12.1
                        c-0.3,0-0.5-0.2-0.5-0.5l0-0.3h13l0,0.3C1258.9,338.2,1258.7,338.5,1258.4,338.5z M1259.1,329.9c-0.1-1.5-1.3-2.6-2.8-2.6h-0.7
                        v-0.6h1.6c1.4,0,2.6,1.1,2.7,2.5l0.5,6.1h-0.9L1259.1,329.9z M1259.9,336.9h-0.4l-0.1-0.8h0.9l0,0.3
                        C1260.4,336.7,1260.2,336.9,1259.9,336.9z"/>
                </g>
                <g>
                    <g>
                        <path class="white__fill" d="M1277.7,272c-1.7-2.3-2.8-5.1-2.8-8.2c0-7.3,5.6-13.2,12.6-13.2s12.6,5.9,12.6,13.2c0,3.1-1,6-2.8,8.2h1.3
                            c1.6-2.3,2.5-5.2,2.5-8.2c0-7.9-6.1-14.2-13.6-14.2c-7.5,0-13.6,6.4-13.6,14.2c0,3.1,0.9,5.9,2.5,8.2H1277.7z"/>
                    </g>
                    <path class="white__fill" d="M1295.7,259.7c-0.1-1.6-1.4-2.8-3-2.8h-0.8V256c0-0.1,0-0.1,0-0.2c-0.1-2-1.7-3.6-3.6-3.6
                        c-1.4,0-2.6,0.8-3.2,2.1c-1,0.5-1.8,1.4-2,2.6h-1.5c-0.3,0-0.6,0.2-0.6,0.5l0,0.5c0,0,1.3,0,1.4,0h0.6v0.7h-0.7
                        c-1.6,0-2.9,1.3-3.1,2.9l-0.5,7.2c-0.1,1.8,1.3,3.3,3.1,3.3h12.4c0.3,0,0.6-0.3,0.6-0.6l-0.1-1.1h1.2c0.3,0,0.6-0.3,0.6-0.6
                        L1295.7,259.7z M1288.3,253.4c1.5,0,2.7,1.3,2.7,2.8v0.9h-0.9c-0.3-1.8-1.7-3.1-3.4-3.2C1287.2,253.6,1287.7,253.4,1288.3,253.4z
                        M1285.6,256.3c0-0.5,0.1-0.9,0.3-1.3c0.2-0.1,0.5-0.1,0.7-0.1c1.3,0,2.4,1,2.7,2.3h-3.7V256.3z M1284.7,255.7c0,0.1,0,0.1,0,0.1
                        c0,0.1,0,0.1,0,0.2v0.9h-0.7C1284.1,256.4,1284.4,256,1284.7,255.7z M1283.9,257.9h5.4v0.7h-5.4V257.9z M1280,262.4
                        c0.1-1.6,1.4-2.8,3-2.8l0,0v2.1c-0.2,0.2-0.4,0.4-0.4,0.7c0,0.5,0.4,0.9,0.8,0.9s0.8-0.4,0.8-0.9c0-0.3-0.2-0.6-0.4-0.8v-2.1h5.4
                        v2.1c-0.2,0.1-0.4,0.4-0.4,0.7c0,0.5,0.4,0.9,0.8,0.9s0.8-0.4,0.8-0.9c0-0.3-0.2-0.6-0.4-0.8v-2.1h0c1.6,0,2.9,1.2,3,2.8l0.3,4
                        c0.1,1.4-1,2.7-2.5,2.7h-8.8c-1.4,0-2.6-1.2-2.5-2.7L1280,262.4z M1293.3,270.9h-13.4c-0.3,0-0.5-0.3-0.5-0.5l0-0.3h14.3l0,0.3
                        C1293.8,270.7,1293.6,270.9,1293.3,270.9z M1294,261.4c-0.1-1.6-1.4-2.8-3-2.8h-0.8v-0.7h1.7c1.6,0,2.9,1.2,3,2.8l0.5,6.7h-0.9
                        L1294,261.4z M1295,269.2h-0.4l-0.1-0.9h0.9l0,0.3C1295.5,269,1295.3,269.2,1295,269.2z"/>
                </g>
                <g>
                    <g>
                        <path class="white__fill" d="M1132.8,211.2c-7,0-12.7,6.2-12.7,13.9c0,3,0.9,5.8,2.4,8.1h1.2c-1.6-2.2-2.6-5-2.6-8.1
                            c0-7.1,5.3-12.9,11.8-12.9s11.8,5.8,11.8,12.9c0,3.1-1,5.9-2.6,8.1h1.2c1.5-2.3,2.4-5.1,2.4-8.1
                            C1145.5,217.4,1139.8,211.2,1132.8,211.2z"/>
                        <path class="white__fill" d="M1132.4,212.8L1132.4,212.8C1132.4,212.8,1132.4,212.8,1132.4,212.8L1132.4,212.8z"/>
                        <path class="white__fill" d="M1133,212.8L1133,212.8C1133,212.8,1133,212.8,1133,212.8L1133,212.8z"/>
                    </g>
                    <g>
                        <path class="white__fill" d="M1141.1,220.9c-0.9-0.6-2.3-1.3-4.2-1.3c-1.8,0-3.3,0.6-4.3,1.1c-0.9-0.5-2.3-1.1-4.1-1.1
                            c-0.1,0-0.1,0-0.1,0c-1.8,0-3.3,0.7-4.2,1.2l-0.3,0.2v11.3h6.9c0.3,0.3,0.9,0.8,1.8,0.8c0,0,0.1,0,0.1,0c0.8,0,1.4-0.5,1.7-0.8
                            h7v-11.3L1141.1,220.9z M1140.3,221.8v7.8c-0.8-0.4-2-0.8-3.3-0.9c-1.6,0-2.8,0.4-3.8,0.9v-7.8c0.8-0.5,2.1-1,3.7-1
                            C1138.3,220.8,1139.5,221.3,1140.3,221.8z M1128.4,220.9c1.6,0,2.8,0.4,3.7,0.9v7.7c-0.9-0.5-2.2-0.9-3.6-0.9
                            c-1.4,0-2.6,0.4-3.5,0.9v-7.7C1125.8,221.3,1126.9,220.9,1128.4,220.9z M1133.9,231.2l-0.2,0.2c-0.1,0.1-0.5,0.6-1.1,0.6
                            c-0.7,0-1.1-0.5-1.2-0.6l-0.2-0.2h-6.3v-0.4c0.8-0.5,2-1,3.5-1c1.7,0,3.1,0.6,3.9,1.1l0.3,0.2l0.3-0.2c0.9-0.6,2.3-1.2,4-1.2
                            c1.4,0.1,2.6,0.5,3.3,1v0.4L1133.9,231.2L1133.9,231.2z"/>
                        <polygon class="white__fill" points="1141.5,220.4 1132.5,215.5 1123.7,220.4 1123.7,219.1 1132.5,214.2 1141.5,219.1"/>
                    </g>
                </g>
                <g>
                    <g>
                        <path class="white__fill" d="M1186.2,301.1c-7,0-12.7,5.9-12.7,13.1c0,2.8,0.9,5.4,2.3,7.6h1.2c-1.6-2.1-2.6-4.7-2.6-7.6
                            c0-6.7,5.3-12.1,11.8-12.1s11.8,5.4,11.8,12.1c0,2.9-1,5.5-2.6,7.6h1.2c1.5-2.1,2.3-4.7,2.3-7.6
                            C1198.9,306.9,1193.2,301.1,1186.2,301.1z"/>
                    </g>
                    <polygon class="white__fill" points="1183.5,304.9 1188.9,305 1188.9,310.6 1194.3,310.6 1194.3,316.1 1189,316.1 1189,321.7 
                        1183.7,321.7 1183.7,316.1 1178.1,316.1 1178.1,310.6 1183.5,310.6"/>
                </g>
                <g>
                    <g>
                        <path class="white__fill" d="M817.1,36.1c-7.8,0-14.1,6.4-14.1,14.3c0,3.1,1,6,2.6,8.3h1.3c-1.8-2.3-2.9-5.2-2.9-8.3
                            c0-7.3,5.8-13.3,13-13.3c7.2,0,13,5.9,13,13.3c0,3.1-1.1,6-2.9,8.3h1.3c1.6-2.3,2.6-5.2,2.6-8.3
                            C831.2,42.5,824.9,36.1,817.1,36.1z"/>
                    </g>
                    <g>
                        <path class="white__fill" d="M822.9,41.5l-2.9,3.1l2,2.1l3.1-3.1c0,0,1.5,3.1-1.2,5.3c-1,1.4-3.9,1-3.9,1l-8.1,8.4
                            c-0.7,0.7-1.8,0.8-2.6,0.1l-0.5-0.4c-0.8-0.7-0.8-2,0-2.8l8.3-8.3c0,0-0.7-2.6,0.8-4.1C820.7,39.9,822.9,41.5,822.9,41.5z"/>
                        <polygon class="white__fill" points="809.7,41 812.5,42.5 813.2,44.7 814.9,46.5 813.6,48 811.8,46.2 809.7,45.5 808.2,42.5"/>
                        <path class="white__fill" d="M817.9,54l4,4.1c0.8,0.9,2.2,0.8,3,0l0.1-0.1c0.8-0.8,0.7-2.1-0.1-3l-3.6-3.7h-0.8L817.9,54z"/>
                    </g>
                </g>
                <g>
                    <path class="white__fill" d="M510.5,357.8c-7.7,0-13.9,6.3-13.9,14.1c0,3,1,5.9,2.6,8.2h1.3c-1.8-2.2-2.8-5.1-2.8-8.2
                        c0-7.2,5.8-13.1,12.9-13.1s12.9,5.9,12.9,13.1c0,3.1-1.1,6-2.8,8.2h1.3c1.6-2.3,2.6-5.1,2.6-8.2
                        C524.4,364.1,518.2,357.8,510.5,357.8z"/>
                    <g>
                        <path class="white__fill" d="M515.3,364.9c-0.1,0.1-0.2,0.2-0.3,0.3c-0.9,0.9-2.4,0.9-3.3,0c-0.5-0.5-0.7-1.2-0.7-1.9
                            c0-0.3,0.1-0.6,0.3-0.9c0.1-0.4,0.3-0.7,0.5-1c0.8-0.8,2.1-0.8,3,0c0.3,0.3,0.5,0.7,0.6,1.1
                            C515.8,363.3,515.8,364.2,515.3,364.9z"/>
                        <path class="white__fill" d="M509.2,365.3c-0.9,0.9-2.4,0.9-3.3,0c-0.1-0.1-0.2-0.2-0.2-0.3c-0.5-0.8-0.6-1.8-0.1-2.5
                            c0.1-0.4,0.3-0.7,0.5-1c0.8-0.8,2.1-0.8,3,0c0.3,0.3,0.5,0.7,0.6,1.1c0.1,0.3,0.2,0.5,0.2,0.8C510,364,509.7,364.7,509.2,365.3z"/>
                        <path class="white__fill" d="M505.9,367.7c0,1.3-1,2.4-2.3,2.4c-0.3,0-0.5,0-0.8-0.1c-0.7-0.2-1.2-0.8-1.4-1.5c-0.2-0.3-0.3-0.7-0.3-1.2
                            c0-1.2,0.9-2.1,2.1-2.1c0.4,0,0.7,0.1,1,0.3c0.3,0.1,0.5,0.2,0.7,0.3C505.5,366.2,505.9,366.9,505.9,367.7z"/>
                        <path class="white__fill" d="M515.1,367.7c0,1.3,1,2.4,2.3,2.4c0.3,0,0.5,0,0.8-0.1c0.7-0.2,1.2-0.8,1.4-1.5c0.2-0.3,0.3-0.7,0.3-1.2
                            c0-1.2-0.9-2.1-2.1-2.1c-0.4,0-0.7,0.1-1,0.3c-0.3,0.1-0.5,0.2-0.7,0.3C515.5,366.2,515.1,366.9,515.1,367.7z"/>
                        <path class="white__fill" d="M517.5,375.4c0,2.6-2.1,4.7-4.6,4.7c-0.4,0-0.8,0-1.1-0.1c0,0,0,0,0,0c-0.4-0.1-0.8-0.1-1.1-0.1
                            c-0.3,0-0.7,0-1,0.1l0,0c-0.1,0-0.2,0-0.3,0.1c0,0,0,0,0,0c-0.3,0.1-0.6,0.1-1,0.1c-2.5,0-4.6-2.1-4.6-4.7c0-0.2,0-0.4,0-0.6
                            l0,0c0.1-1.1,0.6-2,1.3-2.7c0,0,0,0,0,0c0.1-0.1,0.1-0.1,0.2-0.2c0,0,0,0,0,0c0.4-0.4,0.8-1,1-1.5v0l0,0c0-0.1,0.1-0.2,0.1-0.3
                            l0,0c0,0,0,0,0,0l0,0c0.7-1.7,2.4-2.9,4.3-2.9c2,0,3.7,1.3,4.3,3.1c0,0,0,0,0,0c0.2,0.7,0.6,1.3,1.1,1.8c0,0,0,0,0,0
                            c0.8,0.8,1.3,1.8,1.4,3C517.4,375.1,517.5,375.3,517.5,375.4z"/>
                    </g>
                </g>
                <g>
                    <g>
                        <g>
                            <path class="white__fill" d="M455.7,433c-7.9,0-14.3,6.4-14.3,14.3c0,3.1,1,5.9,2.6,8.3h1.3c-1.8-2.3-2.9-5.1-2.9-8.3
                                c0-7.3,5.9-13.2,13.2-13.2S469,440,469,447.3c0,3.1-1.1,6-2.9,8.3h1.3c1.7-2.3,2.6-5.2,2.6-8.3C470,439.4,463.6,433,455.7,433z"/>
                        </g>
                    </g>
                    <g>
                        <path class="white__fill" d="M451.4,455.6h-1.6c-0.4,0-0.8-0.3-0.8-0.8v-12.3c0-0.4,0.3-0.8,0.8-0.8h1.6c0.4,0,0.8,0.3,0.8,0.8v12.3
                            C452.2,455.2,451.8,455.6,451.4,455.6z"/>
                        <path class="white__fill" d="M447.6,454.3h-1.3c-0.3,0-0.6-0.3-0.6-0.6v-10c0-0.3,0.3-0.6,0.6-0.6h1.3c0.3,0,0.6,0.3,0.6,0.6v10
                            C448.3,454,448,454.3,447.6,454.3z"/>
                        <path class="white__fill" d="M445.9,450.5h-1.1c-0.3,0-0.5-0.2-0.5-0.5v-2.5c0-0.3,0.2-0.5,0.5-0.5h1.1c0.3,0,0.5,0.2,0.5,0.5v2.5
                            C446.5,450.2,446.2,450.5,445.9,450.5z"/>
                        <path class="white__fill" d="M460.1,441.8h1.6c0.4,0,0.8,0.3,0.8,0.8v12.3c0,0.4-0.3,0.8-0.8,0.8h-1.6c-0.4,0-0.8-0.3-0.8-0.8v-12.3
                            C459.3,442.1,459.6,441.8,460.1,441.8z"/>
                        <path class="white__fill" d="M463.8,443.1h1.3c0.3,0,0.6,0.3,0.6,0.6v10c0,0.3-0.3,0.6-0.6,0.6h-1.3c-0.3,0-0.6-0.3-0.6-0.6v-10
                            C463.2,443.3,463.5,443.1,463.8,443.1z"/>
                        <path class="white__fill" d="M465.5,446.9h1.1c0.3,0,0.5,0.2,0.5,0.5v2.5c0,0.3-0.2,0.5-0.5,0.5h-1.1c-0.3,0-0.5-0.2-0.5-0.5v-2.5
                            C465,447.1,465.2,446.9,465.5,446.9z"/>
                        <path class="white__fill" d="M460.6,450.1h-9.9c-0.4,0-0.7-0.3-0.7-0.7v-1.5c0-0.4,0.3-0.7,0.7-0.7h9.9c0.4,0,0.7,0.3,0.7,0.7v1.5
                            C461.3,449.8,461,450.1,460.6,450.1z"/>
                    </g>
                </g>
                <g>
                    <g>
                        <g>
                            <path class="white__fill" d="M1197.2,251.6c-7.3,0-13.3,6-13.3,13.3c0,2.9,0.9,5.5,2.5,7.7h1.2c-1.7-2.1-2.7-4.8-2.7-7.7
                                c0-6.8,5.5-12.3,12.3-12.3s12.3,5.5,12.3,12.3c0,2.9-1,5.6-2.7,7.7h1.2c1.5-2.2,2.5-4.8,2.5-7.7
                                C1210.5,257.5,1204.6,251.6,1197.2,251.6z"/>
                        </g>
                    </g>
                    <g>
                        <polygon class="white__fill" points="1196.8,255.8 1192.3,260.3 1192.7,260.7 1196.8,256.7 1203.2,263 1198.9,267.3 1197.4,265.8 
                            1197,266.2 1198.9,268.1 1204,263"/>
                        <polygon class="white__fill" points="1200.9,261.1 1194.7,267.3 1190.4,263 1191.9,261.5 1191.5,261.1 1189.6,263 1194.7,268.1 
                            1201.3,261.5"/>
                        <polygon class="white__fill" points="1196.6,265 1191.5,259.9 1196.8,254.6 1202.1,259.9 1201.7,260.3 1202.1,260.7 1203,259.9 
                            1196.8,253.8 1190.7,259.9 1196.2,265.4"/>
                        
                            <rect x="1196.2" y="258.2" transform="matrix(0.7071 -0.7071 0.7071 0.7071 167.4933 922.0919)" class="white__fill" width="1.3" height="1.3"/>
                    </g>
                    <g>
                        <path class="white__fill" d="M1194.1,272.5c-0.2,0.1-0.5,0.2-0.9,0.2c-1,0-1.8-0.6-1.8-1.8c0-1.1,0.8-1.9,1.9-1.9c0.4,0,0.7,0.1,0.8,0.2
                            l-0.1,0.4c-0.2-0.1-0.4-0.1-0.7-0.1c-0.8,0-1.4,0.5-1.4,1.5c0,0.9,0.5,1.4,1.4,1.4c0.3,0,0.6-0.1,0.8-0.1L1194.1,272.5z"/>
                        <path class="white__fill" d="M1194.7,269h0.5v3.2h1.5v0.4h-2L1194.7,269L1194.7,269z"/>
                        <path class="white__fill" d="M1197.4,269v2.1c0,0.8,0.3,1.1,0.8,1.1c0.5,0,0.9-0.4,0.9-1.1V269h0.5v2.1c0,1.1-0.6,1.5-1.3,1.5
                            c-0.7,0-1.3-0.4-1.3-1.5V269H1197.4z"/>
                        <path class="white__fill" d="M1200.4,269.1c0.2,0,0.5-0.1,0.8-0.1c0.5,0,0.8,0.1,1,0.3c0.2,0.1,0.3,0.4,0.3,0.6c0,0.4-0.2,0.6-0.6,0.8v0
                            c0.3,0.1,0.7,0.4,0.7,0.9c0,0.3-0.1,0.5-0.3,0.7c-0.2,0.2-0.6,0.3-1.2,0.3c-0.3,0-0.6,0-0.7,0L1200.4,269.1L1200.4,269.1z
                            M1200.9,270.5h0.4c0.5,0,0.8-0.3,0.8-0.6c0-0.4-0.3-0.6-0.8-0.6c-0.2,0-0.3,0-0.4,0V270.5z M1200.9,272.2c0.1,0,0.2,0,0.4,0
                            c0.5,0,0.9-0.2,0.9-0.7c0-0.5-0.4-0.7-0.9-0.7h-0.4V272.2z"/>
                    </g>
                </g>
                <g>
                    <path class="white__fill" d="M720.8,69.6c-1.8-2.3-2.9-5.2-2.9-8.3c0-7.3,5.9-13.3,13.3-13.3s13.3,5.9,13.3,13.3c0,3.1-1.1,6-2.9,8.3h1.3
                        c1.7-2.3,2.7-5.2,2.7-8.3c0-7.9-6.4-14.3-14.3-14.3c-7.9,0-14.3,6.4-14.3,14.3c0,3.1,1,6,2.7,8.3H720.8z"/>
                    <path class="white__fill" d="M738.2,66.7c0.1,0.1,0.3,0.1,0.5,0.2c0.4,0.2,0.9,0.4,0.9,0.4s-0.1-0.4-0.5-0.5s-0.4-0.2-0.3-0.2
                        c0.1,0,0.2,0,0.2-0.3s0-0.6-0.1-0.7c0-0.1-0.1,0-1,0c-0.3,0-0.5,0-0.6,0l-0.5-0.6c0,0-0.1-0.1-0.1-0.1c-0.1-0.2-0.2-0.4-0.3-0.6
                        c0-0.1-0.1-0.2-0.2-0.3c-0.1-0.2-0.2-0.3-0.2-0.4c-0.1-0.2-0.2-0.3-0.3-0.4c-0.1-0.2-0.3-0.3-0.4-0.5c-0.1-0.1-0.1-0.2-0.2-0.3
                        c-0.1-0.1-0.2-0.3-0.3-0.4c0,0-0.1-0.1-0.2-0.2c-0.2-0.2-0.1-0.5,0-0.7c0-0.3,0.1-0.6,0.1-0.9c0-0.3,0-0.5,0.1-0.8
                        c0.1-0.5,0.2-1,0.2-1.5c0-0.1,0-0.3,0-0.4c0-0.1,0-0.2,0-0.3c0-0.1,0-0.2-0.1-0.2c0-0.1-0.1-0.2-0.2-0.3
                        c-0.3-0.3-0.7-0.4-1.1-0.5c-0.3,0-0.5-0.1-0.7-0.2c-0.4-0.2-0.7-0.5-0.7-0.8c0-0.1,0.1-0.2,0.1-0.3c0.1-0.2,0.2-0.6,0.3-1.1
                        c0.1,0,0.2-0.1,0.2-0.3c0.1-0.2,0.2-0.4,0.2-0.7c0-0.1-0.1-0.2-0.2-0.2c0-0.2,0-0.4,0-0.6c0-0.9-0.6-1.6-1.3-1.8c0,0,0-0.1,0-0.1
                        c0-0.1-0.1-0.3-0.3-0.3s-0.3,0.1-0.3,0.3c0,0,0,0.1,0,0.1c-0.8,0.1-1.3,0.8-1.3,1.8c0,0.2,0,0.4,0,0.6c-0.1,0-0.2,0.1-0.2,0.2
                        c0,0.2,0.1,0.4,0.2,0.7c0,0.2,0.1,0.3,0.2,0.3c0.1,0.5,0.3,0.9,0.3,1.1s0.1,0.3,0.1,0.5c0,0.3-0.2,0.5-0.6,0.7
                        c-0.2,0.1-0.5,0.2-0.7,0.2c-0.4,0.1-0.8,0.2-1.1,0.5c-0.1,0.1-0.1,0.2-0.2,0.3c0,0.1,0,0.2-0.1,0.2c0,0.1,0,0.2,0,0.3
                        c0,0.1,0,0.3,0,0.4c0,0.5,0.1,1,0.2,1.5c0,0.3,0.1,0.5,0.1,0.8c0,0.3,0,0.6,0.1,0.9c0,0.2,0.2,0.5,0,0.7c0,0-0.1,0.1-0.2,0.2
                        c-0.1,0.1-0.2,0.3-0.3,0.4c-0.1,0.1-0.2,0.2-0.2,0.3c-0.1,0.2-0.3,0.3-0.4,0.5c-0.1,0.1-0.2,0.3-0.3,0.4
                        c-0.1,0.1-0.2,0.3-0.2,0.4c0,0.1-0.1,0.2-0.2,0.3c-0.1,0.2-0.2,0.4-0.3,0.6c0,0,0,0.1-0.1,0.1c-0.1,0.1-0.2,0.2-0.3,0.2
                        c0,0,0,0-0.1,0l-0.1,0.2c0,0,0,0,0,0c-0.1,0.1,0,0.1-0.8,0.1c-0.8,0-0.9-0.1-1,0c0,0.1-0.1,0.5-0.1,0.7s0.1,0.3,0.2,0.3
                        s0.1,0.1-0.3,0.2c-0.4,0.1-0.5,0.5-0.5,0.5c0,0.1,0.4-0.2,0.9-0.4s0.9-0.5,0.9-0.3l0,0l0,0l0,0l0,0l0,0c0,0,0,0.1,0,0.1
                        c0,0,0,0.1-0.1,0.1l0,0c0,0.1-0.1,0.1-0.1,0.2c-0.3,0.3-0.4,0.8-0.3,1.2c0.1,0.4,0.4,0.7,0.7,0.8c0.2,0.1,0.4,0.1,0.6,0.2
                        c0.5,0.1,1,0.1,1.5,0.1c0,0,0,0,0.1,0c0.3,0,0.5-0.1,0.8-0.2c0.2-0.1,0.4-0.1,0.6-0.2c0.4-0.1,0.8-0.3,1.2-0.4
                        c0.5-0.2,1.1-0.3,1.6-0.6c0.1-0.1,0.2-0.1,0.4-0.2c0,0,0,0,0.1,0c0.1,0.1,0.3,0.2,0.4,0.2c0.5,0.2,1.1,0.4,1.6,0.6
                        c0.4,0.2,0.8,0.3,1.2,0.4c0.2,0.1,0.4,0.1,0.6,0.2c0.3,0.1,0.5,0.1,0.8,0.2c0,0,0,0,0.1,0c0.5,0,1,0,1.5-0.1
                        c0.2-0.1,0.4-0.1,0.6-0.2c0.4-0.2,0.7-0.4,0.7-0.8c0.1-0.4-0.1-0.9-0.3-1.2C738.3,66.9,738.2,66.9,738.2,66.7L738.2,66.7
                        C738.1,66.8,738.1,66.8,738.2,66.7C738.1,66.7,738.1,66.7,738.2,66.7L738.2,66.7L738.2,66.7C738.1,66.7,738.2,66.7,738.2,66.7z
                        M723.5,66.4c-0.2,0-0.2-0.3-0.1-0.5c0,0,0.6,0,0.6,0.2C723.9,66.4,723.7,66.4,723.5,66.4z M729.2,62.8c0,0.1-0.1,0.3-0.1,0.4
                        c0,0.1,0,0.1-0.1,0.2c0,0,0,0,0,0.1c0,0.1-0.1,0.2-0.1,0.2c0,0.1-0.1,0.1-0.1,0.2c0,0.1-0.1,0.2-0.2,0.3
                        c-0.1,0.1-0.2,0.3-0.2,0.4c0,0.1-0.1,0.1-0.1,0.2c0,0,0,0,0,0c0,0.1-0.1,0.1-0.1,0.2c0,0.1,0,0.1-0.1,0.2c0,0,0,0.1,0,0.1
                        c0,0.1-0.1,0.2-0.2,0.2c0,0-0.1,0.1-0.1,0.1c0,0-0.1,0-0.1,0c0,0-0.1,0.1-0.1,0.1c0,0,0,0-0.1,0c-0.1,0-0.3,0.1-0.4,0.1
                        c-0.1,0-0.1,0-0.2,0.1c-0.1,0-0.1,0-0.2,0.1c-0.1,0-0.1,0-0.1,0.1c0,0,0,0-0.1,0c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0
                        c-0.1,0-0.2,0-0.2,0c0,0-0.1,0-0.1,0c-0.1,0-0.2,0.1-0.3,0.1h0c0,0,0,0,0-0.1c0.1-0.1,0.1-0.1,0.2-0.2s0.1-0.2,0.2-0.2
                        c0,0,0.1-0.1,0.1-0.1s0.1-0.1,0.1-0.1c0.1,0,0.1-0.1,0.2-0.1c0.1-0.1,0.2-0.1,0.2-0.2c0.1-0.1,0.1-0.1,0.2-0.2
                        c0.1,0,0.1-0.1,0.2-0.1c0.1-0.1,0.1-0.1,0.2-0.2c0.1-0.1,0.1-0.1,0.2-0.2c0.1-0.1,0.1-0.1,0.2-0.2c0.1-0.1,0.2-0.2,0.3-0.3
                        c0.1-0.1,0.2-0.2,0.3-0.3c0,0,0,0,0.1-0.1c0-0.1,0.1-0.1,0.1-0.2c0,0,0-0.1,0.1-0.1c0.1-0.1,0.1-0.2,0.2-0.3
                        c0.1-0.1,0.1-0.2,0.2-0.3c0-0.1,0.1-0.1,0.1-0.2c0-0.1,0.1-0.2,0.1-0.3c0-0.1,0-0.1,0-0.2v0c0-0.1,0-0.2,0-0.3c0,0,0-0.1,0-0.2
                        c0,0,0-0.1,0-0.2c0-0.1,0-0.1,0-0.2c0,0,0-0.1,0-0.1c0,0,0,0,0,0h0c0,0.1,0,0.2,0,0.3c0,0.1,0,0.2,0,0.3c0,0.1,0,0.2,0,0.3
                        c0,0.1,0,0.1,0,0.2c0,0.1,0,0.2,0,0.3c0,0.1,0,0.2,0,0.3C729.3,62.6,729.3,62.7,729.2,62.8z M738.7,66c0,0.2,0.1,0.5-0.1,0.5
                        s-0.4-0.1-0.5-0.3C738,65.9,738.7,66,738.7,66z M736.8,66.2c-0.1,0-0.2-0.1-0.3-0.1c0,0-0.1,0-0.1,0c-0.1,0-0.2,0-0.2,0
                        c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0c0,0,0,0-0.1,0c0,0-0.1-0.1-0.1-0.1c-0.1,0-0.1,0-0.2-0.1c-0.1,0-0.1,0-0.2-0.1
                        c-0.1,0-0.3-0.1-0.4-0.1c0,0,0,0-0.1,0c0,0-0.1-0.1-0.1-0.1c0,0-0.1,0-0.1,0c0,0-0.1,0-0.1-0.1c-0.1-0.1-0.1-0.1-0.2-0.2
                        c0,0,0-0.1,0-0.1c0-0.1,0-0.1-0.1-0.2c0-0.1-0.1-0.1-0.1-0.2c0,0,0,0,0,0c0-0.1-0.1-0.1-0.1-0.2c-0.1-0.1-0.2-0.3-0.2-0.4
                        c-0.1-0.1-0.1-0.2-0.2-0.3c0-0.1-0.1-0.1-0.1-0.2c0-0.1-0.1-0.2-0.1-0.2c0,0,0,0,0-0.1c0-0.1,0-0.1-0.1-0.2
                        c0-0.1-0.1-0.2-0.1-0.4c0-0.1,0-0.1,0-0.2c0-0.1,0-0.2,0-0.3c0-0.1,0-0.2,0-0.3c0-0.1,0-0.1,0-0.2c0-0.1,0-0.2,0-0.3
                        c0-0.1,0-0.2,0-0.3c0-0.1,0-0.2,0-0.3h0c0,0,0,0,0,0c0,0,0,0.1,0,0.1c0,0.1,0,0.1,0,0.2c0,0,0,0.1,0,0.2c0,0,0,0.1,0,0.2
                        c0,0.1,0,0.2,0,0.3v0c0,0.1,0,0.2,0,0.2c0,0.1,0.1,0.2,0.1,0.3c0,0.1,0.1,0.2,0.1,0.2c0.1,0.1,0.1,0.2,0.2,0.3
                        c0,0.1,0.1,0.2,0.2,0.3c0,0,0.1,0.1,0.1,0.1c0,0.1,0.1,0.1,0.1,0.2c0,0,0,0,0.1,0.1c0.1,0.1,0.2,0.2,0.3,0.3
                        c0.1,0.1,0.2,0.2,0.3,0.3c0.1,0.1,0.1,0.1,0.2,0.2c0.1,0.1,0.1,0.1,0.2,0.2c0.1,0.1,0.1,0.1,0.2,0.2c0.1,0,0.1,0.1,0.2,0.1
                        c0.1,0.1,0.1,0.1,0.2,0.2c0.1,0.1,0.2,0.1,0.2,0.2c0,0,0.1,0.1,0.2,0.1c0,0,0.1,0.1,0.1,0.1c0,0,0.1,0.1,0.1,0.1
                        c0.1,0.1,0.1,0.2,0.2,0.2C736.7,66,736.7,66.1,736.8,66.2C736.8,66.2,736.8,66.2,736.8,66.2C736.8,66.2,736.8,66.2,736.8,66.2z"/>
                </g>
                <g>
                    <g>
                        <path class="white__fill" d="M694.7,96.3c0,0,0-0.1,0-0.1C694.8,96.3,694.7,96.3,694.7,96.3z"/>
                        <path class="white__fill" d="M699.8,97.2C699.8,97.2,699.8,97.2,699.8,97.2C699.8,97.2,699.8,97.2,699.8,97.2L699.8,97.2z"/>
                        <path class="white__fill" d="M699.8,97.2l-0.2,0.3c-0.2,0.4-0.3,0.8-0.3,1.2c0,0.4,0.1,0.9,0.3,1.3l0,0.1l-0.1,0c-1.2,0.7-2,1.9-2,3.3
                            c0,0.7,0.2,1.3,0.5,1.9l0,0.1l-0.1,0.1c-0.4,0.2-0.8,0.5-1.1,0.9c-0.7,0.3-1.3,0.4-1.4,0.5l0,0c-0.8,0.3-1.7,0.2-2.4-0.2
                            s-1.1-1.2-1.1-2c0-0.9,0.5-1.7,1.3-2.1l0.7-0.3l-0.4-0.6c-0.2-0.4-0.3-0.8-0.3-1.2c0-0.9,0.5-1.7,1.3-2.1l0.6-0.3l-0.3-0.6
                            c-0.1-0.2-0.2-0.5-0.2-0.8c0,0,0-0.1,0-0.1c0,0,0-0.1,0-0.1l0,0c0-0.1,0-0.3,0-0.3"/>
                        <path class="white__fill" d="M694.8,95.8L694.8,95.8c0.1,0,0.1,0,0.2,0C694.9,95.8,694.8,95.8,694.8,95.8z"/>
                        <path class="white__fill" d="M699.4,98.6c0-0.4,0.1-0.8,0.3-1.2l0.2-0.3c0,0,0,0,0,0c-1.5-0.7-3.1-1.2-4.8-1.3c-0.1,0-0.1,0-0.2,0
                            c0,0,0,0.2,0,0.3c0,0,0,0.1,0,0.1c0,0,0,0.1,0,0.1c0,0.3,0.1,0.5,0.2,0.8l0.3,0.6l-0.6,0.3c-0.8,0.4-1.3,1.2-1.3,2.1
                            c0,0.4,0.1,0.8,0.3,1.2l0.4,0.6l-0.7,0.3c-0.8,0.4-1.3,1.2-1.3,2.1c0,0.8,0.4,1.6,1.1,2c0.7,0.5,1.6,0.5,2.4,0.2l0,0
                            c0.1,0,0.7-0.2,1.4-0.5c0.3-0.4,0.7-0.7,1.1-0.9l0.1-0.1l0-0.1c-0.3-0.6-0.5-1.2-0.5-1.9c0-1.3,0.8-2.6,2-3.3l0.1,0l0-0.1
                            C699.5,99.5,699.4,99.1,699.4,98.6z"/>
                        <path class="white__fill" d="M694.8,96.1C694.8,96.1,694.8,96.2,694.8,96.1C694.8,96.2,694.8,96.1,694.8,96.1
                            C694.8,96.1,694.8,96.1,694.8,96.1z"/>
                        <path class="white__fill" d="M706.7,107.9c0-4-2-7.6-5.2-9.8c-0.4-0.3-0.8-0.5-1.2-0.7c-0.1-0.1-0.2-0.1-0.3-0.2
                            c-0.2,0.4-0.3,0.8-0.3,1.3c0,0.4,0.1,0.8,0.3,1.2l0.2,0.3l-0.3,0.2c-1.1,0.6-1.8,1.8-1.8,3c0,0.6,0.2,1.2,0.5,1.7l0.2,0.3
                            l-0.4,0.2c-0.4,0.2-0.8,0.5-1.1,0.8c-0.1,0.2-0.2,0.3-0.3,0.5c-0.3,0.5-0.5,1.1-0.5,1.7c0,1.9,1.7,3.5,3.7,3.5
                            c0.6,0,1-0.1,1.3-0.2c0,0,0,0,0,0v-2.4c-0.9-0.5-1.6-1.3-2-2.3l-0.2-0.6l2-0.6l0.2,0.5l0-0.6v-1.6h2.6v6.1
                            c0,0.2,0.4,0.7,0.9,0.7c1.2-0.1,1.5-0.6,1.5-0.6C706.6,109.6,706.7,108.8,706.7,107.9z"/>
                    </g>
                    <path class="white__fill" d="M701.7,107.1c-0.1-0.2-0.4-0.4-0.5-0.6l-0.1-0.3l-1.5,0.4l0.1,0.3c0.3,0.9,1.1,1.8,1.9,2.2v7h2v-11.6h-2
                        V107.1z"/>
                    <path class="white__fill" d="M683.1,116.1c-1.9-2.3-3-5.1-3-8.2c0-7.2,6.2-13.1,13.8-13.1s13.8,5.9,13.8,13.1c0,3.1-1.1,5.9-3,8.2h1.4
                        c1.7-2.3,2.8-5.1,2.8-8.2c0-7.8-6.7-14.2-14.9-14.2s-14.9,6.3-14.9,14.2c0,3.1,1,5.9,2.8,8.2H683.1z"/>
                    <g>
                        <rect x="683.9" y="103.6" class="white__fill" width="1.1" height="12.5"/>
                        <path class="white__fill" d="M701,116.1h-1.1v-3.7c0,0,0.3,0,0.6,0c0.2,0,0.5-0.1,0.5-0.1V116.1z"/>
                        <rect x="684.9" y="104.6" class="white__fill" width="2.2" height="0.3"/>
                        <rect x="688" y="104.6" class="white__fill" width="2.4" height="0.3"/>
                        <path class="white__fill" d="M691.9,104.6c0,0,0,0,0,0.1c0,0.1,0,0.1,0,0.1h-0.7v-0.3L691.9,104.6L691.9,104.6z"/>
                        <g>
                            <rect x="687.5" y="104.2" class="white__fill" width="0.3" height="8"/>
                            <rect x="690.7" y="104.2" class="white__fill" width="0.3" height="8"/>
                        </g>
                        <rect x="687.4" y="112.4" class="white__fill" width="3.6" height="0.7"/>
                        <rect x="687.1" y="113.2" class="white__fill" width="4.3" height="0.4"/>
                        <g>
                            <path class="white__fill" d="M694.2,112.2h-0.3V107c0,0,0.1,0,0.1,0c0.1,0,0.1,0,0.1,0V112.2z"/>
                            <path class="white__fill" d="M697.4,112.2h-0.3V111c0,0,0.1,0.1,0.1,0.2c0,0,0.1,0.1,0.1,0.1V112.2z"/>
                        </g>
                        <rect x="693.8" y="112.4" class="white__fill" width="3.6" height="0.7"/>
                        <rect x="693.5" y="113.2" class="white__fill" width="4.3" height="0.4"/>
                    </g>
                </g>
                <g>
                    <g>
                        <path class="white__fill" d="M628,193.1c-2.1-2.6-3.3-5.9-3.3-9.4c0-8.3,6.8-15.1,15.1-15.1s15.1,6.8,15.1,15.1c0,3.6-1.3,6.9-3.3,9.4
                            h1.5c1.9-2.7,3-5.9,3-9.4c0-9-7.3-16.3-16.3-16.3s-16.3,7.3-16.3,16.3c0,3.5,1.1,6.8,3,9.4L628,193.1L628,193.1z"/>
                    </g>
                    <path class="darkblue_stroke strokew__5" d="M634.4,174.8"/>
                    <path class="darkblue_stroke strokew__5" d="M630.9,184.7"/>
                    <g>
                        <g>
                            <path class="none__fill" d="M652.5,177.2C652.4,177.2,652.4,177.2,652.5,177.2C652.4,177.3,652.4,177.3,652.5,177.2L652.5,177.2z"/>
                            <path class="darkblue__fill" d="M633.3,174.1c-0.1,0.1-0.2,0.2-0.3,0.3C633.1,174.3,633.2,174.2,633.3,174.1z"/>
                            <path class="none__fill" d="M651,181.9l1.5-4.6c0,0,0-0.1,0-0.1c-0.9,0.1-1.9,0.2-3,0.2L651,181.9z"/>
                            <path class="none__fill" d="M638,181.3l1-3.9c-1.1-0.1-2.2-0.2-3-0.3L638,181.3z"/>
                            <path class="white__fill" d="M632.9,175.3c0.7-0.7,5.6-1.2,11.5-1.2c2.1,0,4.1,0.1,5.8,0.2c-0.7-0.7-1.4-1.2-2.2-1.7
                                c-1.1-0.1-2.3-0.1-3.6-0.1c-5.4,0-9.9,0.7-11.2,1.6c-0.1,0.1-0.2,0.2-0.3,0.3c0,0.1-0.1,0.2-0.1,0.3
                                C632.9,174.8,632.9,175.1,632.9,175.3z"/>
                        </g>
                        <g>
                            <path class="white__fill" d="M649,188.5c2.6-0.3,3.5-0.1,5-1.1v-0.6c-1,1.2-8.2,1.3-9.3,1.3c-1.2,0-3.8,0.2-5.5,0.6l0.3-1.1
                                c-0.7,0.4-3,0.7-5.7,0.7c-2.7,0-5-0.3-5.7-0.7l1.7,5.4h7.2h0.7h12.1c0,0,3.5-1.7,1-2.6C648.1,189.6,644.2,189,649,188.5z
                                M637.8,193l0.8-2.6c2.5,0.4,7.5,0.4,7.3,0.9C645.8,191.8,639.9,192.7,637.8,193z"/>
                            <path class="white__fill" d="M628.4,187.3c0.7,0.3,2.8,0.6,5.4,0.6c0,0,0.1,0,0.1,0c0,0,0,0,0,0c0,0,0,0,0,0l0,0c2.6,0,4.7-0.3,5.4-0.6
                                c0.1-0.1,0.2-0.1,0.2-0.2c0,0,0-0.1-0.1-0.1c-0.1-0.1-0.2-0.1-0.4-0.2c-0.4-0.1-1-0.2-1.8-0.3l0.8-3.3l2.5,5.2l0.7-0.3l-2.9-6
                                l1.2-4.5c1.1,0.1,2.3,0.1,3.5,0.1c0.5,0,1,0,1.5,0c0.5,0,1.1,0,1.6,0c0.8,0,1.7,0,2.5-0.1l2,5.6l-1.4,4.3l0.5,0.1l1.2-3.7
                                l1.2,3.4l0.7-0.3l-1.5-4.3l1.5-4.7c-0.1-0.2-0.2-0.4-0.3-0.6l-1.5,4.6l-1.6-4.4c1.1-0.1,2.1-0.1,3-0.2
                                c-0.4-0.8-0.9-1.5-1.4-2.1c-1.9-0.1-4.1-0.2-6.6-0.2c-5.9,0-10.8,0.5-11.5,1.2c-0.1,0.1-0.1,0.1-0.1,0.2c0,0.3,0.8,0.6,2.3,0.8
                                l2.6,5.4l-1,3.9c-0.2,0-0.4,0-0.7-0.1c0,0,0-0.1,0.1-0.1c0.4-0.5,0.7-1.9,0.6-2.4c0-0.1-0.1-0.2-0.2-0.3
                                c-0.1-0.1-0.2-0.1-0.7,0.3c0-0.5,0-1.1-0.3-1.2c-0.2-0.1-0.6,0.2-1,0.5c0-0.5-0.2-0.9-0.4-1.1c-0.1-0.1-0.2-0.2-0.3-0.2
                                c-0.1,0-0.2,0-0.3,0.1c-0.2,0.2-0.5,0.7-0.7,1.2c-0.4-0.4-0.8-0.8-1.1-0.6c-0.2,0.1-0.3,0.8-0.3,1.2c-0.4-0.6-0.6-0.8-0.8-0.6
                                c-0.1,0.1-0.2,0.1-0.2,0.3c-0.2,0.5,0,1.9,0.4,2.5c0.1,0.1,0.3,0.4,0.5,0.6c-1.2,0.1-2.2,0.2-2.8,0.4c-0.2,0.1-0.4,0.1-0.4,0.2
                                c0,0-0.1,0.1-0.1,0.1C628.2,187.1,628.2,187.2,628.4,187.3z M636,177.2c0.9,0.1,1.9,0.2,3,0.3l-1,3.9L636,177.2z M635.6,184.8
                                c0.3-0.3,0.5-0.6,0.7-0.7c0,0.4-0.2,1.5-0.5,2c0,0.1-0.1,0.2-0.2,0.3C635.7,185.8,635.7,185.2,635.6,184.8z M633.9,186.3
                                c-0.2,0-0.4,0-0.6,0c0,0,0,0,0,0c-0.1-0.6,0.2-1.8,0.4-2.1c0.3,0.3,0.8,1.4,0.9,2c0,0.1,0,0.1,0,0.1
                                C634.3,186.3,634.1,186.3,633.9,186.3z M635.1,186.3C635,186.3,635,186.3,635.1,186.3c-0.1-0.1-0.1-0.1-0.1-0.2
                                c0-0.3-0.2-0.6-0.3-1c0.2-0.2,0.4-0.4,0.5-0.4C635.3,184.9,635.2,185.7,635.1,186.3z M635.4,183c0,0.2,0.1,0.7,0,1.2
                                c0,0,0,0,0,0c-0.1,0-0.3-0.1-0.9,0.4c-0.1-0.2-0.2-0.3-0.3-0.5C634.6,183.7,635.1,183.2,635.4,183z M633.9,182.3
                                c0.1,0.1,0.3,0.7,0.3,1.3c-0.1,0.1-0.2,0.2-0.2,0.3c0,0,0-0.1-0.1-0.1c-0.1-0.1-0.2-0.1-0.3-0.1c-0.1,0-0.2,0.1-0.3,0.2
                                c-0.1,0.1-0.2,0.3-0.3,0.6c0,0,0-0.1-0.1-0.1C633,183.8,633.7,182.5,633.9,182.3z M632.1,182.9c0.2,0.1,0.4,0.3,0.7,0.6
                                c0,0.1-0.1,0.3-0.1,0.4c-0.2-0.2-0.4-0.4-0.6-0.4C632,183.3,632,183.1,632.1,182.9z M632,184c0.2,0.1,0.6,0.5,1,1
                                c-0.1,0.5-0.2,1-0.1,1.3c-0.2,0-0.4,0-0.6,0c-0.1-0.1-0.1-0.1-0.2-0.2C631.8,185.5,631.8,184.3,632,184z M631.3,185.5
                                c-0.3-0.5-0.4-1.6-0.3-2c0.1,0.1,0.3,0.3,0.5,0.8c0,0.5,0,1.1,0.1,1.6C631.5,185.7,631.3,185.6,631.3,185.5z"/>
                        </g>
                    </g>
                </g>
                <g>
                    <g>
                        <path class="white__fill" d="M595.7,239c-1.9-2.4-3.1-5.4-3.1-8.7c0-7.7,6.3-14,14-14s14,6.3,14,14c0,3.3-1.2,6.3-3.1,8.7h1.4
                            c1.8-2.5,2.8-5.5,2.8-8.7c0-8.3-6.8-15.1-15.1-15.1c-8.3,0-15.1,6.8-15.1,15.1c0,3.3,1,6.3,2.8,8.7H595.7z"/>
                    </g>
                    <g>
                        <g>
                            <path class="white__fill" d="M609.7,220.2c-0.3,0.4-0.6,0.8-0.8,1.1c-0.2-0.5-0.5-1-0.8-1.2c0.2-1.1,0.4-1.3,0.4-1.3
                                C608.8,218.9,609.3,219.4,609.7,220.2z"/>
                            <path class="white__fill" d="M610.8,221.4c-0.1-0.1-0.2-0.2-0.3-0.2c0,0,0,0-0.1,0c-0.1,0-0.2,0-0.3,0.1c0,0-0.1,0.1-0.2,0.1
                                c-0.2,0.1-0.5,0.4-0.7,0.7c0,0.1-0.1,0.1-0.1,0.1c0,0,0-0.1,0-0.1c0-0.1-0.1-0.1-0.1-0.2c0.2-0.4,0.5-0.8,0.8-1.2
                                c0.1-0.1,0.1-0.2,0.2-0.2c0.1-0.1,0.1-0.1,0.2-0.2c0.6-0.8,1.3-1.4,1.5-1.4c0,0,0,0,0,0c0,0,0.1,0.1,0.1,0.2
                                c0.2,0.4,0.1,1.2-0.1,2c-0.3,0.2-0.6,0.4-0.9,0.6c0,0,0,0,0,0"/>
                            <path class="white__fill" d="M607.3,220.3c-0.4,0.6-0.9,2.1-1,3.2c-0.1,0-0.2,0-0.3,0c-0.1-0.3-0.1-0.5-0.2-0.7
                                c-0.3-1.2,0.3-3.6,0.7-3.7C606.7,219.1,607,219.3,607.3,220.3z"/>
                            <path class="white__fill" d="M613.2,223.2L613.2,223.2l-0.1,0.1C613.1,223.3,613.1,223.2,613.2,223.2c-0.1,0-0.1-0.1-0.2-0.2
                                c-0.1-0.1-0.3-0.3-1.7,0.3c0-0.3-0.1-0.5-0.1-0.7c0-0.1-0.1-0.3-0.1-0.4c0.2-0.1,0.4-0.3,0.6-0.4c0.1-0.1,0.2-0.1,0.3-0.2
                                c0.1-0.1,0.2-0.1,0.3-0.2c0.8-0.4,1.3-0.6,1.5-0.5C614,221.1,613.6,222.3,613.2,223.2z"/>
                            <path class="white__fill" d="M614.7,222.9c-0.1,0.6-1.1,2.5-2,3.1c-0.2,0.1-0.5,0.3-0.8,0.5c0.4-0.6,0.8-1.4,1-2.1c0,0,0-0.3,0.1-0.4
                                c0-0.1,0-0.1,0-0.1c0,0,0,0,0.1,0c0.2-0.1,0.3-0.2,0.4-0.3l0,0C614.1,223.2,614.5,223,614.7,222.9z"/>
                            <path class="white__fill" d="M608.9,222.8c-0.3,0.4-0.5,0.8-0.6,1.3c-0.5-0.2-0.9-0.4-1.5-0.5c0-0.8,0.3-1.8,0.6-2.5
                                c0-0.1,0.1-0.3,0.1-0.3c0-0.1,0.1-0.1,0.1-0.2l0,0c0-0.1,0.1-0.1,0.1-0.1c0,0,0,0,0,0c0,0,0.1,0.1,0.1,0.2c0,0,0,0.1,0.1,0.1
                                c0.2,0.3,0.4,0.6,0.5,1.1l0,0c0,0.1,0.1,0.2,0.1,0.3l0,0c0,0,0,0,0,0c0,0.1,0.1,0.2,0.1,0.3c0,0,0,0,0,0
                                C608.8,222.6,608.8,222.7,608.9,222.8z"/>
                            <path class="white__fill" d="M612.6,223.4c0,0.1,0,0.4-0.1,0.7l-0.1,0.3c-0.3,0.8-0.7,1.7-1.2,2.1c0-0.1-0.1-0.1-0.1-0.2
                                c0.1-0.3,0.2-0.5,0.3-0.7c0.1-0.4,0.1-1.1,0.1-1.8c0.1-0.1,0.3-0.1,0.3-0.2C612.2,223.5,612.5,223.4,612.6,223.4z"/>
                            <path class="white__fill" d="M610.8,225.5c0,0.1-0.1,0.3-0.1,0.4c-0.5-0.6-1.2-1.2-2-1.6c0.1-0.3,0.2-0.5,0.4-0.8
                                c0.2-0.3,0.4-0.7,0.6-0.9c0.2-0.2,0.3-0.4,0.4-0.5c0.1-0.1,0.2-0.2,0.3-0.2c0,0,0,0,0,0c0,0,0.1,0.1,0.1,0.2l0,0l0,0
                                c0,0.1,0,0.1,0.1,0.2l0,0c0,0.1,0,0.2,0.1,0.3c0,0,0,0.1,0,0.1c0,0.2,0.1,0.4,0.1,0.6l0.1,1.3
                                C610.9,224.8,610.9,225.2,610.8,225.5z"/>
                        </g>
                        <g>
                            <path class="white__fill" d="M610.9,238.2c1.1-1.6,1.3-3.9,1.3-6c0-0.7,0-1.3-0.1-1.9c0,0,0,0.1,0,0.1c-0.4,2.5-1.1,3.6-1.7,4.6
                                c-0.5,0.9-1,1.6-1.2,3.2h-0.5c0.2-1.5,0.6-2.3,1.1-3.1l-0.4-0.7l0.5,0.2l0.1-0.7l0.3,0.6c0.5-0.9,1.1-2,1.4-4.1
                                c0.2-1.5-0.5-3.3-0.5-3.3h0l0,0c-0.3-0.5-0.6-0.9-1-1.3c0.1,0.4,0.2,1,0.2,1.7c-0.1,3-0.7,4.6-1.3,6c-0.6,1.4-1.1,2.6-1,4.8
                                h-0.5c-0.1-2.3,0.5-3.6,1-5c0.6-1.4,1.2-2.9,1.3-5.7l-0.2-0.2h0v0l-0.4-0.4l0.4,0l0-0.7l0.2,0.3c-0.1-0.8-0.4-1.3-0.6-1.5
                                c-0.3,0.1-0.9,0.1-1.6,0c0,0.5,0,1-0.2,1.4c-0.3,0.8-0.7,1.6-1.1,2.4c-0.5,1-1,2-1.3,3l0.3-0.1l-0.3,0.4l0.8,0.1l-1,0.4
                                c-0.1,0.4-0.1,0.7-0.1,1.1c0,1.6,0.4,3.2,0.8,4.4h-0.5c-0.4-1.3-0.8-2.9-0.8-4.4c0-0.6,0.1-1.1,0.2-1.6c0,0,0,0,0,0
                                c0.3-1.3,0.8-2.4,1.4-3.5c0.4-0.8,0.8-1.6,1-2.3c0.1-0.4,0.2-0.9,0.2-1.3c-0.1,0-0.1,0-0.2,0c-0.4-0.1-0.8-0.1-1.2-0.2
                                c-0.7,0.6-1.7,1.7-2.5,3.1c0,0,0,0,0,0c-0.3,0.5-0.5,1.1-0.7,1.6c-0.8,2.9-0.6,4.9-0.4,6.3v0c0,0.2,0,0.4,0.1,0.5
                                c0,0.6,0.2,1.3,0.3,2h-0.5c-0.1-0.6-0.3-1.4-0.3-1.9c0-0.1,0-0.1,0-0.2l-0.7-0.5h0.5l-0.2-0.7l0.3,0.3
                                c-0.1-1.4-0.2-3.3,0.5-5.9c0.1-0.5,0.3-1,0.6-1.5l-0.3-0.6l0.4,0.2l0.2-0.7l0.1,0.4c0.7-1.1,1.5-1.9,2.1-2.5
                                c-0.3-0.1-0.5-0.2-0.5-0.2c-2.8,0.7-4.6,3.6-4.6,7.9c0,2.8,0.4,4.7,1.3,6h-3.9v0.7h18.8v-0.8H610.9z"/>
                        </g>
                    </g>
                </g>
                <g>
                    <g>
                        <path class="white__fill" d="M557.6,239.3c1.7-0.4,3.2-1.1,4.3-2l-1.2-9.1h-2.3c-0.1-2.4-1.7-4.3-3.6-4.3c0,0,0,0,0,0
                            c-1,0-1.9,0.5-2.6,1.4c-0.6,0.8-0.9,1.8-1,2.9h-2.3l-1.3,10C551,239.6,554.5,240,557.6,239.3z M558,229.6c0.3,0,0.6,0.3,0.6,0.6
                            s-0.3,0.6-0.6,0.6s-0.6-0.3-0.6-0.6C557.4,229.9,557.7,229.6,558,229.6z M552.9,225.8c0.5-0.7,1.2-1.1,1.8-1.1c0,0,0,0,0,0
                            c1.4,0,2.6,1.5,2.7,3.4h-5.3C552.2,227.3,552.5,226.4,552.9,225.8z M551.7,230.8c-0.3,0-0.6-0.3-0.6-0.6s0.3-0.6,0.6-0.6
                            s0.6,0.3,0.6,0.6S552,230.8,551.7,230.8z"/>
                        <path class="white__fill" d="M556.9,240.8c1.8-0.4,3.4-1.2,4.5-2.2c-1.8,1.1-4.2,1.8-6.8,1.8c-2.2,0-4.6-0.5-7-1.5l-0.1,0.9
                            C550.6,241.1,553.9,241.4,556.9,240.8z"/>
                        <path class="white__fill" d="M562.1,238.8c-1.8,1.9-4.8,3-8.3,3c-2,0-4.2-0.4-6.5-1.3l-0.4,3h15.9L562.1,238.8z"/>
                    </g>
                    <g>
                        <path class="white__fill" d="M543.5,243.4c-2-2.5-3.2-5.6-3.2-9c0-8,6.5-14.4,14.5-14.4c8,0,14.5,6.5,14.5,14.4c0,3.4-1.2,6.6-3.2,9h1.5
                            c1.8-2.6,2.9-5.7,2.9-9c0-8.6-7-15.6-15.6-15.6s-15.6,7-15.6,15.6c0,3.4,1.1,6.5,2.9,9H543.5z"/>
                    </g>
                </g>
                <g>
                    <g>
                        <path class="white__fill" d="M652,241.2c1.8-0.4,3.2-1.1,4.4-2.1l-1.2-9.3h-2.3c-0.1-2.4-1.7-4.4-3.7-4.4c0,0,0,0,0,0
                            c-1,0-1.9,0.5-2.6,1.4c-0.6,0.8-0.9,1.8-1,2.9h-2.3l-1.3,10.1C645.2,241.5,648.8,241.9,652,241.2z M652.3,231.4
                            c0.3,0,0.6,0.3,0.6,0.6s-0.3,0.6-0.6,0.6s-0.6-0.3-0.6-0.6C651.8,231.6,652,231.4,652.3,231.4z M647.3,227.5
                            c0.5-0.7,1.2-1.1,1.9-1.1c0,0,0,0,0,0c1.4,0,2.6,1.5,2.7,3.4h-5.4C646.5,228.9,646.8,228.1,647.3,227.5z M646,232.5
                            c-0.3,0-0.6-0.3-0.6-0.6s0.3-0.6,0.6-0.6s0.6,0.3,0.6,0.6S646.3,232.5,646,232.5z"/>
                        <path class="white__fill" d="M651.2,242.6c1.8-0.4,3.4-1.2,4.6-2.2c-1.8,1.1-4.2,1.8-6.9,1.8c-2.2,0-4.7-0.5-7.1-1.5l-0.1,1
                            C644.8,243,648.2,243.3,651.2,242.6z"/>
                        <path class="white__fill" d="M656.6,240.6c-1.9,1.9-4.9,3.1-8.5,3.1c-2.1,0-4.3-0.4-6.6-1.3l-0.4,3h16.1L656.6,240.6z"/>
                    </g>
                    <g>
                        <path class="white__fill" d="M637.7,245.3c-2-2.5-3.2-5.7-3.2-9.2c0-8.1,6.6-14.6,14.7-14.6s14.7,6.6,14.7,14.6c0,3.5-1.2,6.6-3.2,9.2
                            h1.5c1.8-2.6,2.9-5.8,2.9-9.2c0-8.7-7.1-15.8-15.8-15.8s-15.8,7.1-15.8,15.8c0,3.4,1.1,6.6,2.9,9.2H637.7z"/>
                    </g>
                </g>
                <g>
                    <path class="darkblue__fill" d="M1250,273.8L1250,273.8c0-2.4-1.7-4.4-4-4.9c1.1-0.4,1.8-1.4,1.8-2.6c0-1.5-1.3-2.8-2.8-2.8
                        s-2.8,1.3-2.8,2.8c0,1.2,0.7,2.2,1.8,2.6c-2.3,0.5-4,2.5-4,4.9v0H1250z"/>
                    <path class="white__fill" d="M1250,273.8L1250,273.8c0-2.4-1.7-4.4-4-4.9c1.1-0.4,1.8-1.4,1.8-2.6c0-1.5-1.3-2.8-2.8-2.8
                        s-2.8,1.3-2.8,2.8c0,1.2,0.7,2.2,1.8,2.6c-2.3,0.5-4,2.5-4,4.9v0H1250z"/>
                    <g>
                        <path class="white__fill" d="M1230.7,273.8c-1.8-2.3-2.9-5.2-2.9-8.4c0-7.4,6-13.4,13.4-13.4s13.4,6,13.4,13.4c0,3.2-1.1,6.1-2.9,8.4
                            h1.3c1.7-2.4,2.7-5.3,2.7-8.4c0-8-6.5-14.5-14.5-14.5s-14.5,6.5-14.5,14.5c0,3.1,1,6,2.7,8.4H1230.7z"/>
                    </g>
                    <g>
                        <path class="white__fill" d="M1248.5,267.1c-0.1,0.6-0.4,1.1-0.8,1.6c0.7,0.3,1.2,0.8,1.7,1.4v-2.9H1248.5z M1241.7,269.2
                            c0.3-0.2,0.5-0.4,0.8-0.5c-0.4-0.4-0.7-1-0.8-1.6h-4.5v6.7h2.2c0-0.7,0.1-1.4,0.4-2l0.1-0.3c0.1-0.1,0.1-0.3,0.2-0.4h-0.4v-1.8
                            L1241.7,269.2L1241.7,269.2z"/>
                        <polygon class="white__fill" points="1231.9,259.4 1231.9,258 1244.5,259.8 1244.5,261"/>
                        <path class="white__fill" d="M1248.5,265.4c0.1,0.3,0.1,0.6,0.1,0.9c0,0.1,0,0.2,0,0.2h1.9v-1.1H1248.5z M1232.7,260.2v13.6h3.8v-7.3
                            h5.1c0-0.1,0-0.2,0-0.2c0-1.4,0.8-2.6,2-3.2v-1.6L1232.7,260.2z M1240.9,264h-5.5v-1.4h5.5V264z"/>
                    </g>
                </g>
                <g>
                    <path class="darkblue__fill" d="M206,300.1L206,300.1c0-2.4-1.7-4.4-4-4.9c1.1-0.4,1.8-1.4,1.8-2.6c0-1.5-1.3-2.8-2.8-2.8s-2.8,1.3-2.8,2.8
                        c0,1.2,0.7,2.2,1.8,2.6c-2.3,0.5-4,2.5-4,4.9v0H206z"/>
                    <path class="white__fill" d="M206,300.1L206,300.1c0-2.4-1.7-4.4-4-4.9c1.1-0.4,1.8-1.4,1.8-2.6c0-1.5-1.3-2.8-2.8-2.8s-2.8,1.3-2.8,2.8
                        c0,1.2,0.7,2.2,1.8,2.6c-2.3,0.5-4,2.5-4,4.9v0H206z"/>
                    <g>
                        <path class="white__fill" d="M186.7,300.1c-1.8-2.3-2.9-5.2-2.9-8.4c0-7.4,6-13.4,13.4-13.4s13.4,6,13.4,13.4c0,3.2-1.1,6.1-2.9,8.4h1.4
                            c1.7-2.4,2.7-5.3,2.7-8.4c0-8-6.5-14.5-14.5-14.5s-14.5,6.5-14.5,14.5c0,3.1,1,6,2.7,8.4H186.7z"/>
                    </g>
                    <g>
                        <path class="white__fill" d="M204.5,293.5c-0.1,0.6-0.4,1.1-0.9,1.6c0.7,0.3,1.2,0.8,1.7,1.4v-2.9H204.5z M197.7,295.5
                            c0.3-0.2,0.5-0.4,0.8-0.5c-0.4-0.4-0.7-1-0.9-1.6h-4.5v6.7h2.2c0-0.7,0.1-1.4,0.4-2l0.1-0.3c0.1-0.1,0.1-0.3,0.2-0.4h-0.4v-1.8
                            L197.7,295.5L197.7,295.5z"/>
                        <polygon class="white__fill" points="187.9,285.8 187.9,284.4 200.5,286.1 200.5,287.3"/>
                        <path class="white__fill" d="M204.5,291.7c0.1,0.3,0.1,0.6,0.1,0.9c0,0.1,0,0.2,0,0.2h1.9v-1.1H204.5z M188.7,286.6v13.6h3.8v-7.3h5.1
                            c0-0.1,0-0.2,0-0.2c0-1.4,0.8-2.6,2-3.2v-1.6L188.7,286.6z M196.9,290.4h-5.5V289h5.5V290.4z"/>
                    </g>
                </g>
                <g>
                    <g>
                        <path class="white__fill" d="M821.3,181.5c-1.8-2.2-2.8-5-2.8-8.1c0-7.2,5.8-13,13-13s13,5.8,13,13c0,3.1-1.1,5.9-2.8,8.1h1.3
                            c1.6-2.3,2.6-5.1,2.6-8.1c0-7.7-6.3-14-14-14s-14,6.3-14,14c0,3,1,5.8,2.6,8.1H821.3z"/>
                    </g>
                    <g>
                        <path class="white__fill" d="M830.8,175.7v5.3h5.1h1.3v-3.6h1.6v3.6h1.7v-5.3H830.8z M832.8,177.3h2.4v1.5h-2.4V177.3z M835.8,179.4
                            h-3.6v-0.2h3.6V179.4z"/>
                        <g>
                            <polygon class="white__fill" points="840.5,169.8 831.1,168.5 821.8,169.8 821.8,170.8 831.1,169.6 840.5,170.8"/>
                            <path class="white__fill" d="M839.7,174.3v-3.1l-8.6-1v0h0h0v0l-8.6,1v3.1l0,6.7h5.6h2v-5.8h10.9v-0.9H839.7z M824.7,173.2v-1.1h12.8
                                v1.1H824.7z"/>
                        </g>
                    </g>
                </g>
                <g>
                    <g>
                        <path class="white__fill" d="M374.9,347.6c-1.8-2.2-2.9-5-2.9-8.1c0-7.2,5.8-13,13-13s13,5.8,13,13c0,3.1-1.1,5.9-2.9,8.1h1.3
                            c1.6-2.3,2.6-5.1,2.6-8.1c0-7.7-6.3-14-14-14s-14,6.3-14,14c0,3,1,5.8,2.6,8.1H374.9z"/>
                    </g>
                    <g>
                        <path class="white__fill" d="M384.3,341.9v5.3h5.1h1.3v-3.6h1.6v3.6h1.7v-5.3H384.3z M386.3,343.5h2.4v1.5h-2.4V343.5z M389.3,345.5
                            h-3.6v-0.2h3.6V345.5z"/>
                        <g>
                            <polygon class="white__fill" points="394,336 384.7,334.7 375.3,336 375.3,337 384.7,335.8 394,337"/>
                            <path class="white__fill" d="M393.3,340.5v-3.1l-8.6-1v0h0h0v0l-8.6,1v3.1l0,6.7h5.6h2v-5.8h10.9v-0.9L393.3,340.5L393.3,340.5z
                                M378.2,339.4v-1.1h12.9v1.1H378.2z"/>
                        </g>
                    </g>
                </g>
                <g>
                    <g>
                        <path class="white__fill" d="M978.7,240.3c-1.7-2.1-2.8-4.9-2.8-7.8c0-6.9,5.6-12.5,12.5-12.5s12.5,5.6,12.5,12.5c0,3-1,5.7-2.8,7.8h1.3
                            c1.6-2.2,2.5-4.9,2.5-7.8c0-7.5-6-13.5-13.5-13.5s-13.5,6.1-13.5,13.5c0,2.9,0.9,5.6,2.5,7.8H978.7z"/>
                    </g>
                    <path class="white__fill" d="M998,230.8c-0.1-0.5-0.4-1-0.9-1.4c0.3-0.9,0.2-1.7-0.2-2.4c-1-1.8-4.2-2-7.7-0.7c-0.8-0.8-1.7-1.4-2.5-1.9
                        c-1.9-1.1-3.4-1.3-4.4-0.5c-0.5,0.4-0.8,1-0.9,1.8l-0.9-0.3l0.3,3.4l0.8-0.7c0.1,0.5,0.3,1,0.5,1.5c-2.8,1.2-4.6,2.9-4.3,4.5
                        c0.1,0.8,0.8,1.5,1.9,2c0,0.3,0.1,0.5,0.3,0.7c0.6,1,1.8,1.5,3.5,1.5c0.3,0,0.5,0,0.8,0c1.1-0.1,2.3-0.4,3.5-0.8
                        c0.5,0.4,0.9,0.8,1.3,1.1l0.3,1.7l1.9-0.3c0.8,0.4,1.5,0.6,2.1,0.6c0.5,0,1-0.1,1.4-0.4c1-0.7,1.2-2.3,0.6-4.4
                        c-0.1-0.4-0.2-0.7-0.4-1.1c0.2-0.1,0.3-0.2,0.4-0.2C997.3,233.3,998.2,232,998,230.8z M993.5,226.2c1.4,0,2.5,0.4,2.9,1.2
                        c0.3,0.5,0.3,1,0.2,1.7c-0.6-0.3-1.3-0.6-2.2-0.8c-1.1-0.3-2.4-0.4-3.7-0.4c-0.3-0.4-0.7-0.7-1-1
                        C991.1,226.4,992.4,226.2,993.5,226.2z M994.2,232.8c-0.2-0.4-0.4-0.8-0.7-1.2c0.3-0.2,0.4-0.6,0.4-0.9c0-0.7-0.6-1.3-1.3-1.3
                        c-0.2,0-0.4,0.1-0.6,0.1c0-0.1-0.1-0.1-0.1-0.2c-0.2-0.3-0.5-0.6-0.7-0.9c1.1,0,2.2,0.1,3.1,0.3c0.9,0.2,1.6,0.5,2.1,0.8
                        c-0.2,0.5-0.5,1-0.8,1.5C995.2,231.7,994.7,232.2,994.2,232.8z M994.3,234.4c-0.7,0.3-1.4,0.6-2.1,0.9c0.7-0.5,1.3-0.9,1.9-1.4
                        C994.1,234,994.2,234.2,994.3,234.4z M989.9,227.9c-0.9,0-1.8,0.1-2.7,0.3c-0.2,0-0.5,0.1-0.7,0.1c0.8-0.5,1.7-0.9,2.5-1.2
                        C989.4,227.4,989.7,227.6,989.9,227.9z M982,226c0-0.7,0.3-1.2,0.7-1.5c0.3-0.2,0.6-0.3,1-0.3c0.7,0,1.6,0.3,2.6,0.9
                        c0.7,0.4,1.5,1,2.2,1.6c-0.8,0.3-1.6,0.7-2.5,1.2c-0.5,0.3-0.9,0.6-1.4,0.9c-0.7,0.2-1.4,0.4-2,0.6c-0.2-0.6-0.4-1.2-0.5-1.7
                        l1.4-1.1L982,226z M983.3,229.8c-0.1,0.1-0.2,0.1-0.2,0.2c0,0,0-0.1,0-0.1C983.1,229.9,983.2,229.9,983.3,229.8z M979.7,235.4
                        c-0.7-0.4-1.1-0.9-1.2-1.4c-0.2-1.3,1.4-2.7,4-3.8c0,0.1,0.1,0.2,0.1,0.3C980.8,232.1,979.8,233.9,979.7,235.4z M980.3,235.7
                        c-0.1-1.3,0.9-3,2.6-4.6c0.6,1.2,1.4,2.4,2.3,3.6c0.5,0.6,0.9,1.1,1.4,1.7c-1.8,0.1-3.6,0.1-5-0.3
                        C981.1,235.9,980.7,235.8,980.3,235.7z M984.2,237.7c-1.8,0.2-3.2-0.3-3.7-1.2c0-0.1,0-0.1-0.1-0.1c0.3,0.1,0.6,0.2,1,0.3
                        c1,0.2,2.2,0.4,3.5,0.4c0.7,0,1.5,0,2.2-0.1c0,0,0.1,0.1,0.1,0.1C986.2,237.4,985.2,237.6,984.2,237.7z M987.4,236.3
                        c-0.6-0.6-1.2-1.3-1.7-2c-1-1.2-1.7-2.5-2.3-3.7c0.5-0.5,1.1-0.9,1.7-1.3c0.7-0.2,1.5-0.4,2.3-0.5c1.1-0.2,2.1-0.3,3.1-0.3
                        c0.4,0.4,0.7,0.8,1,1.3c0,0.1,0.1,0.1,0.2,0.2c-0.2,0.2-0.2,0.5-0.2,0.7c0,0.7,0.6,1.3,1.3,1.3c0.1,0,0.2,0,0.3,0
                        c0.3,0.4,0.5,0.9,0.7,1.3c-0.9,0.8-2,1.6-3.2,2.3c-0.2,0.1-0.4,0.2-0.6,0.3c-0.5,0.1-0.9,0.2-1.4,0.3
                        C988.1,236.2,987.8,236.2,987.4,236.3z M994.5,239.6c-0.7,0.5-1.8,0.4-3.1-0.3l-0.2-1.4l-1.6,0.3c-0.3-0.3-0.7-0.6-1.1-0.9
                        c0.6-0.2,1.2-0.5,1.8-0.8c1.6-0.4,3.1-0.9,4.3-1.5c0.1,0.3,0.2,0.7,0.3,1C995.3,237.7,995.2,239,994.5,239.6z M994.8,234.1
                        c-0.1-0.2-0.2-0.5-0.3-0.7c0.6-0.6,1.2-1.2,1.6-1.9c0.3-0.5,0.6-1,0.8-1.4c0.3,0.3,0.4,0.6,0.5,0.9c0.2,0.9-0.7,2-2.3,2.9
                        C995,233.9,994.9,234,994.8,234.1z"/>
                </g>
            </g>

        </svg>

            </div>
        </div>
        <div class="amenidades pb-blue3-bg py">
            <div class="row">
                <div class="col s12 m6 l4 center">
                    <img src="media/assets/img/habitta/portto-blancoslp/amenidades/portto.svg">
                    <h5>Club Portto Blanco</h5>
                </div>
                <div class="col s12 m6 l4 center">
                    <img src="media/assets/img/habitta/portto-blancoslp/amenidades/comercial.svg">
                    <h5>Área Comercial</h5>
                </div>
                <div class="col s12 m6 l4 center">
                    <img src="media/assets/img/habitta/portto-blancoslp/amenidades/clinica.svg">
                    <h5>Clínica</h5>
                </div>
                <div class="col s12 m6 l4 center">
                    <img src="media/assets/img/habitta/portto-blancoslp/amenidades/colegio.svg">
                    <h5>Colegio</h5>
                </div>

                <div class="col s12 m6 l4 center">
                    <img src="media/assets/img/habitta/portto-blancoslp/amenidades/interactive.svg">
                    <h5>Interactive Hall</h5>
                </div>
                <div class="col s12 m6 l4 center">
                    <img src="media/assets/img/habitta/portto-blancoslp/amenidades/cactace.svg">
                    <h5>Cactace Garden</h5>
                </div>
                <div class="col s12 m6 l4 center">
                    <img src="media/assets/img/habitta/portto-blancoslp/amenidades/loft.svg">
                    <h5>Lofts</h5>
                </div>
                <div class="col s12 m6 l4 center">
                    <img src="media/assets/img/habitta/portto-blancoslp/amenidades/zen.svg">
                    <h5>Zen Park</h5>
                </div>
                <div class="col s12 m6 l4 center">
                    <img src="media/assets/img/habitta/portto-blancoslp/amenidades/kids.svg">
                    <h5>Kids Park</h5>
                </div>
                <div class="col s12 m6 l4 center">
                    <img src="media/assets/img/habitta/portto-blancoslp/amenidades/pet.svg">
                    <h5>Pet Friendly Park</h5>
                </div>
                <div class="col s12 m6 l4 center">
                    <img src="media/assets/img/habitta/portto-blanco/icons/master/fitness.svg">
                    <h5>Fitness Park</h5>
                </div>
                <div class="col s12 m6 l4 center">
                    <img src="media/assets/img/habitta/portto-blancoslp/amenidades/habitacional.svg">
                    <h5>Franja Habitacional</h5>
                </div>

                <div class="col s12 m6 l4 center">
                    <img src="media/assets/img/habitta/portto-blancoslp/amenidades/strip.svg">
                    <h5>Strip Center</h5>
                </div>
                <div class="col s12 m6 l4 center">
                    <img src="media/assets/img/habitta/portto-blancoslp/amenidades/urban.svg">
                    <h5>Urban Hall</h5>
                </div>
                <div class="col s12 m12 l4 center">
                    <img src="media/assets/img/habitta/portto-blancoslp/amenidades/service.svg">
                    <h5>Área de Servicios</h5>
                </div>
            </div>

        </div>
    </div>

    <div class="py">
        <h2 class="headline-2 center-align pb-blue-text futura-light">Lotes residenciales diseñados para las necesidades
            de nuestros clientes más exigentes</h2>
        <div class="row center py">
            <div class="col s12">
                <img class="plano-lote" src="media/assets/img/habitta/portto-blancoslp/lotes/lotes.svg">
            </div>
        </div>
    </div>

    <div class="py pb-blue3-bg">
        <div class="container">

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
                        <input id="first_name" type="text" name="name" class="validate" autocomplete="off" required
                            ng-model="main.name">
                        <label for="first_name">¿Cómo te llamas?</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="email" type="email" name="email" class="validate" autocomplete="off" required
                            ng-model="main.email">
                        <label for="email">Compartenos tu Correo electrónico @</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="tel" type="tel" name="phone" class="validate" autocomplete="off"
                            ng-model="main.phone">
                        <label for="tel">Si lo prefieres, dejanos tu Télefono (opcional)</label>
                    </div>
                    <div class="input-field col s12">
                        <textarea id="textarea1" name="details" class="materialize-textarea" autocomplete="off"
                            maxlength="120" required ng-model="main.message"></textarea>
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