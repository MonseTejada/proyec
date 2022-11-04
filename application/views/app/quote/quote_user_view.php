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

    <link rel="stylesheet" type="text/css" href="media/bower_components/materialize/css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="media/assets/css/style0.css">
    <link rel="stylesheet" type="text/css" href="media/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="media/assets/css/media-queries.css">

    <script type="text/javascript" src="media/bower_components/jquery.min.js"></script>
    <script type="text/javascript" src="media/bower_components/materialize/js/materialize.min.js"></script>
    <script type="text/javascript" src="media/assets/js/init.js"></script>
    
</head>
<body ng-controller="QuoteToolController as quote">

    <md-sidenav class="cc-sidenav md-sidenav-left md-whiteframe-4dp" md-component-id="left">
        <md-toolbar class="md-hue-2">
            <h1 class="md-toolbar-tools">GENERATING PROGRESS</h1>
        </md-toolbar>
        <a href="#!/habitta" ng-click="close()">
            <div class="link-body link-dev valign-wrapper">
                <span class="" style="width: 66%;">Desarrollo Habitacional</span><img class="" src="media/assets/img/logos/logo-habitta.svg" height="18">
            </div>
        </a>
        <!--a href="#!" ng-click="close()">
            <div class="link-body link-dev valign-wrapper">
                <span class="" style="width: 66%;">Desarrollo Industrial</span><img class="" src="media/assets/img/logos/logo-navetec.svg" height="28">
            </div>
        </a>
        <md-divider></md-divider>
        <md-divider></md-divider>
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
        </a-->
        <md-toolbar class="md-hue-2">
            <h1 class="md-toolbar-tools">NAVEGACIÓN</h1>
        </md-toolbar>
        <a href="#!" ng-click="close()">
            <div class="link-body link-nav">
                Inicio
            </div>
        </a>
        <md-divider></md-divider>
        <a href="#!/login" ng-click="close()">
            <div class="link-body link-nav">
                Login
            </div>
        </a>
        <md-divider></md-divider>

    </md-sidenav>

    <div ng-controller="sideNavCtrl" class="navbar-fixed">
        <nav class="cc-nav white" role="navigation">
            <div class="nav-wrapper">
                <div class="container">
                    <ul>
                        <li><a href="#" class="nav-logo"><img src="media/assets/img/logos/logo.png"></a></li>
                        <li class="right"><md-button class="md-icon-button md-noink" ng-click="toggleLeft()" ng-hide="isOpenLeft()">
                            <svg viewBox="0 0 24 24" width="24"><path d="M3,18h18v-2H3V18z M3,13h18v-2H3V13z M3,6v2h18V6H3z" fill="#5F6368"></path></svg>
                        </md-button></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <div class="container pb-100">
        <div class="row pt-20">
            <h5 class="cc-dark-text">Hola {{quote.logged.name}}</h5>
        </div>

        <section class="section">
            <div class="row">
                <div class="input-field col s12 m6">
                    <select ng-model="quote.inversionType" ng-change="quote.defineInversion()">
                        <optgroup label="Residencial">
                            <option ng-value="2">Veredas de Lira</option>
                        </optgroup>
                        <optgroup label="Industrial">
                            <option ng-value="0">Naves Industriales (preventa)</option>
                            <option ng-value="1">Lotes Industriales</option>
                        </optgroup>
                    </select>
                    <label>Desarrollo</label>
                </div>
                 <div class="input-field col s12 m6" ng-class="quote.showHabittaType">
                    <select ng-model="quote.loteTipoHabitta" ng-change="quote.defineTipoHabitta()">
                        <option ng-value="0">Estándar</option>
                        <option ng-value="1">Plus</option>
                        <option ng-value="2">Premium</option>
                    </select>
                    <label>Tipo</label>
                </div>
                <div class="input-field col s12 m6">
                    <select ng-model="quote.isLanzamiento" ng-change="quote.definePrecioLanzamiento()">
                        <option ng-value="false">Estándar</option>
                        <option ng-value="true">Lanzamiento</option>
                    </select>
                    <label>Precio</label>
                </div>
                <div class="input-field col s12 m6">
                  <input id="tamanio" placeholder=" " type="number" name="tamanio" class="validate" min="{{quote.costosXM2}}" max="1500" ng-model="quote.tamanio" ng-change="quote.updateQuoteHooking()">
                  <label for="tamanio">Tamaño M&sup2;</label>
                </div>
                <div class="input-field col s12 m6">
                  <input id="plazo" placeholder=" " type="number" name="plazo" class="validate" min="1" max="180" ng-model="quote.plazo" ng-change="quote.updateQuoteHooking()">
                  <label for="plazo">Mensualidades</label>
                </div>
                <div class="input-field col s12 m6" ng-class="quote.hideOutputA">
                  <input id="hook" placeholder=" " type="number" name="enganche" class="validate" min="{{quote.engancheTotalMin}}" max="{{quote.engancheTotalMax}}" ng-model="quote.engancheActual" ng-change="quote.updateQuote()">
                  <label for="hook">Enganche</label>
                </div>
            </div>
        </section>

        <section class="section quote-result">
            <div id="tableToExport" class="row">
                <table>
                    <tr>
                        <td style="text-align: right;">{{quote.today}}</td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <th colspan="2" style="text-align: center;">Resumen</th>
                    </tr>
                    <tr>
                        <th>Plan de pago</th>
                        <td style="text-align: right;">{{quote.planPagoOutput}}</td>
                    </tr>
                    <tr>
                        <th>Tamaño</th>
                        <td style="text-align: right;">{{quote.tamanio}} M&sup2;</td>
                    </tr>
                    <tr>
                        <th>Precio por M&sup2;</th>
                        <td style="text-align: right;">${{quote.precioSelected.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MN</td>
                    </tr>
                    <tr>
                        <th>Inversión sin intereses</th>
                        <td style="text-align: right;">${{quote.inversion.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MN</td>
                    </tr>
                </table>
                <table ng-class="quote.hideOutputA">
                    <tr>
                        <th>Plazo Total</th>
                        <td style="text-align: right;">{{quote.plazo}} Meses</td>
                    </tr>
                    <tr>
                        <th>Enganche</th>
                        <td style="text-align: right;">${{quote.engancheActual.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MN</td>
                    </tr>
                    <tr>
                        <th>Monto a financiar</th>
                        <td style="text-align: right;">${{(quote.credito).toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MN</td>
                    </tr>
                </table>
                <table ng-class="quote.hideOutputA">
                    <tr>
                        <th colspan="2" style="text-align: center;">Plazo Sin interes</th>
                    </tr>
                    <tr>
                        <th>Plazo sin interés</th>
                        <td style="text-align: right;">{{quote.plazoA}} Meses</td>
                    </tr>
                    <tr>
                        <th>Financiamiento sin interés</th>
                        <td style="text-align: right;">${{quote.financiamientoPlazoA.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MN</td>
                    </tr>
                    <tr>
                        <th>Mensualidad sin interés</th>
                        <td style="text-align: right;">${{quote.totalCuotaFijaPlazoA.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MN</td>
                    </tr>
                </table>
                <table ng-class="quote.hideOutputB">
                    <tr>
                        <th colspan="2" style="text-align: center;">Plazo con {{quote.planesPago[1].interes*100}}% de interés</th>
                    </tr>
                    <tr>
                        <th>Plazo con {{quote.planesPago[1].interes*100}}% de interés</th>
                        <td style="text-align: right;">{{quote.plazoB}} Meses</td>
                    </tr>
                    <tr>
                        <th>Financiamiento antes de interés</th>
                        <td style="text-align: right;">${{quote.creditoBNI.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MN</td>
                    </tr>
                    <tr>
                        <th>Financiamiento con {{quote.planesPago[1].interes*100}}% de interés</th>
                        <td style="text-align: right;">${{quote.financiamientoPlazoB.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MN</td>
                    </tr>
                    <tr>
                        <th>Mensualidad con {{quote.planesPago[1].interes*100}}% de interés</th>
                        <td style="text-align: right;">${{quote.totalCuotaFijaPlazoB.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MN</td>
                    </tr>
                </table>
                <table ng-class="quote.hideOutputC">
                    <tr>
                        <th colspan="2" style="text-align: center;">Plazo, {{quote.planesPago[2].interes*100}}% de interés</th>
                    </tr>
                    <tr>
                        <th>Plazo con {{quote.planesPago[2].interes*100}}% de interés</th>
                        <td style="text-align: right;">{{quote.plazoC}} Meses</td>
                    </tr>
                    <tr>
                        <th>Financiamiento antes de interés</th>
                        <td style="text-align: right;">${{quote.creditoCNI.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MN</td>
                    </tr>
                    <tr>
                        <th>Financiamiento con {{quote.planesPago[2].interes*100}}% de interés</th>
                        <td style="text-align: right;">${{quote.financiamientoPlazoC.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MN</td>
                    </tr>
                    <tr>
                        <th>Mensualidad con {{quote.planesPago[2].interes*100}}% de interés</th>
                        <td style="text-align: right;">${{quote.totalCuotaFijaPlazoC.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MN</td>
                    </tr>
                </table>
                <table ng-class="quote.hideOutputA">
                    <tr>
                        <th colspan="2" style="text-align: center;">Total</th>
                    </tr>
                    <tr ng-class="quote.hideOutputB">
                        <th >Financiamiento final</th>
                        <td style="text-align: right;">${{quote.financiamientoFinal.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MN</td>
                    </tr>
                    <tr ng-class="quote.hideOutputB">
                        <th>Total de intereses</th>
                        <td style="text-align: right;">${{quote.interesFinal.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MN</td>
                    </tr>
                    <tr>
                        <th>Inversión final</th>
                        <td style="text-align: right;">${{quote.inversionFinal.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MN</td>
                    </tr>
                </table>
                <table ng-class="quote.hideOnHabitta">
                    <tr>
                        <th colspan="2" style="text-align: center;">Plusvalía inmediata a {{quote.planesPago[0].plazoMax/12}} años</th>
                    </tr>
                    <tr>
                        <th>Precio de venta de M&sup2; {{quote.planesPago[0].plazoMax/12}} años</th>
                        <td style="text-align: right;">${{quote.precioXM23Anios.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MN</td>
                    </tr>
                    <tr>
                        <th>Valor de inmueble a {{quote.planesPago[0].plazoMax/12}} años</th>
                        <td style="text-align: right;">${{quote.valorInversion3Anios.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MN</td>
                    </tr>
                    <tr>
                        <th>Plusvalía inmediata a {{quote.planesPago[0].plazoMax/12}} años</th>
                        <td style="text-align: right;">${{quote.plusvalia3Anios.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MN</td>
                    </tr>
                </table>
                <table ng-class="quote.hideOnHabitta">
                    <tr>
                        <th colspan="2" style="text-align: center;">Plusvalía a 10 años</th>
                    </tr>
                    <tr>
                        <th>Precio de venta de M&sup2; a 10 años</th>
                        <td style="text-align: right;">${{quote.precioXM210Anios.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MN</td>
                    </tr>
                    <tr>
                        <th>Valor de inmueble a 10 año</th>
                        <td style="text-align: right;">${{quote.valorInversion10Anios.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MN</td>
                    </tr>
                    <tr>
                        <th>Plusvalía a 10 años</th>
                        <td style="text-align: right;">${{quote.plusvalia10Anios.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MN</td>
                    </tr>
                </table>
                <table class="responsive-table centered mt-50" ng-class="quote.hideOutputA">
                    <tr>
                        <th colspan="8" style="text-align: center;">Plazo sin interés</th>
                    </tr>
                    <tr>
                        <th>Periodo</th>
                        <th>Fecha</th>
                        <th>Crédito inicial</th>
                        <th>Mensualidad</th>
                        <th>Interés</th>
                        <th>Abono a cápital</th>
                        <th>Crédito final</th>
                    </tr>
                    <tr ng-repeat="row in quote.cotizacionSIPlazoA">
                        <td>{{row.periodo}}</td>
                        <td>{{row.fecha}}</td>
                        <td>${{row.creditoi.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}}</td>
                        <td>${{row.cuotaf.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}}</td>
                        <td>${{row.interes.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}}</td>
                        <td>${{row.abonoc.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}}</td>
                        <td>${{row.creditof.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}}</td>
                    </tr>
                </table>
                <table class="responsive-table centered mt-50" ng-class="quote.hideOutputB">
                    <tr>
                        <th colspan="8" style="text-align: center;">Plazo, {{quote.planesPago[1].interes*100}}% de interés</th>
                    </tr>
                    <tr>
                        <th>Periodo</th>
                        <th>Fecha</th>
                        <th>Crédito inicial</th>
                        <th>Mensualidad</th>
                        <th>Interés</th>
                        <th>Abono a cápital</th>
                        <th>Crédito final</th>
                    </tr>
                    <tr ng-repeat="row in quote.cotizacionSIPlazoB">
                        <td>{{row.periodo}}</td>
                        <td>{{row.fecha}}</td>
                        <td>${{row.creditoi.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}}</td>
                        <td>${{row.cuotaf.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}}</td>
                        <td>${{row.interes.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}}</td>
                        <td>${{row.abonoc.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}}</td>
                        <td>${{row.creditof.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}}</td>
                    </tr>
                </table>
                <table class="responsive-table centered mt-50" ng-class="quote.hideOutputC">
                    <tr>
                        <th colspan="8" style="text-align: center;">Plazo, {{quote.planesPago[2].interes*100}}% de interés</th>
                    </tr>
                    <tr>
                        <th>Periodo</th>
                        <th>Fecha</th>
                        <th>Crédito inicial</th>
                        <th>Mensualidad</th>
                        <th>Interés</th>
                        <th>Abono a cápital</th>
                        <th>Crédito final</th>
                    </tr>
                    <tr ng-repeat="row in quote.cotizacionSIPlazoC">
                        <td>{{row.periodo}}</td>
                        <td>{{row.fecha}}</td>
                        <td>${{row.creditoi.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}}</td>
                        <td>${{row.cuotaf.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}}</td>
                        <td>${{row.interes.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}}</td>
                        <td>${{row.abonoc.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}}</td>
                        <td>${{row.creditof.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}}</td>
                    </tr>
                </table>
            </div>
            <button class="export-to-excel-btn waves-effect waves-teal f7-bg btn right" type="button" ng-click="quote.exportToExcel('#tableToExport')">
                <svg viewBox="0 0 512 512" width="30" height="30">
                    <path fill="#ECEFF1" d="M496,432.011H272c-8.832,0-16-7.168-16-16s0-311.168,0-320s7.168-16,16-16h224
                    c8.832,0,16,7.168,16,16v320C512,424.843,504.832,432.011,496,432.011z"/>
                    <g fill="#388E3C">
                        <path d="M336,176.011h-64c-8.832,0-16-7.168-16-16s7.168-16,16-16h64c8.832,0,16,7.168,16,16
                        S344.832,176.011,336,176.011z"/>
                        <path d="M336,240.011h-64c-8.832,0-16-7.168-16-16s7.168-16,16-16h64c8.832,0,16,7.168,16,16
                        S344.832,240.011,336,240.011z"/>
                        <path d="M336,304.011h-64c-8.832,0-16-7.168-16-16s7.168-16,16-16h64c8.832,0,16,7.168,16,16
                        S344.832,304.011,336,304.011z"/>
                        <path d="M336,368.011h-64c-8.832,0-16-7.168-16-16s7.168-16,16-16h64c8.832,0,16,7.168,16,16
                        S344.832,368.011,336,368.011z"/>
                        <path d="M432,176.011h-32c-8.832,0-16-7.168-16-16s7.168-16,16-16h32c8.832,0,16,7.168,16,16
                        S440.832,176.011,432,176.011z"/>
                        <path d="M432,240.011h-32c-8.832,0-16-7.168-16-16s7.168-16,16-16h32c8.832,0,16,7.168,16,16
                        S440.832,240.011,432,240.011z"/>
                        <path d="M432,304.011h-32c-8.832,0-16-7.168-16-16s7.168-16,16-16h32c8.832,0,16,7.168,16,16
                        S440.832,304.011,432,304.011z"/>
                        <path d="M432,368.011h-32c-8.832,0-16-7.168-16-16s7.168-16,16-16h32c8.832,0,16,7.168,16,16
                        S440.832,368.011,432,368.011z"/>
                    </g>
                    <path fill="#F7F7F7" d="M282.208,19.691c-3.648-3.04-8.544-4.352-13.152-3.392l-256,48C5.472,65.707,0,72.299,0,80.011v352
                    c0,7.68,5.472,14.304,13.056,15.712l256,48c0.96,0.192,1.952,0.288,2.944,0.288c3.712,0,7.328-1.28,10.208-3.68
                    c3.68-3.04,5.792-7.584,5.792-12.32v-448C288,27.243,285.888,22.731,282.208,19.691z"/>
                    <path fill="#388E3C" d="M220.032,309.483l-50.592-57.824l51.168-65.792c5.44-6.976,4.16-17.024-2.784-22.464
                    c-6.944-5.44-16.992-4.16-22.464,2.784l-47.392,60.928l-39.936-45.632c-5.856-6.72-15.968-7.328-22.56-1.504
                    c-6.656,5.824-7.328,15.936-1.504,22.56l44,50.304L83.36,310.187c-5.44,6.976-4.16,17.024,2.784,22.464
                    c2.944,2.272,6.432,3.36,9.856,3.36c4.768,0,9.472-2.112,12.64-6.176l40.8-52.48l46.528,53.152
                    c3.168,3.648,7.584,5.504,12.032,5.504c3.744,0,7.488-1.312,10.528-3.968C225.184,326.219,225.856,316.107,220.032,309.483z"/>
                </svg>
            </button>
        </section>
    </div>

    <footer class="page-footer cc-blue0-bg" ng-controller="mainController as main" ng-cloak>
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
                            <li class="py-10">Dirección: <a class="" href="https://www.google.com.mx/maps/place/GRUPO+CCIMA+S.A.+DE+C.V./@20.7207906,-100.4411124,17z/data=!3m1!4b1!4m5!3m4!1s0x85d359d5e049ded3:0xdbdc71bed86b2fb3!8m2!3d20.7207906!4d-100.4389237">Carretera Federal 57, KM 17.5, Santa Rosa Jáuregui, C.P. 76220, Santiago de Querétaro, Qro.</a></li>
                            <li class="py-10">Teléfono: <a class="" href="tel:+524422912223"> 442 291 2223</a></li>
                            <li class="py-10">Correo: <a class="" href="mailto:hola@grupoccima.com">hola@grupoccima.com</a></li>
                            <li class="py-10">Abrimos: Lun-Vie: 8 am-6:30 pm</li>
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