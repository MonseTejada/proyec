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
<body ng-controller="QuoteController as quote">

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

    <div class="container pb-50">
        <div class="row pt-20">
            <h5 class="cc-dark-text center">Cotiza facilmente, hecha un vistazo a nuestros planes</h5>
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
                        <th colspan="2" style="text-align: center;">Resumen</th>
                    </tr>
                    <tr>
                        <th>Tamaño</th>
                        <td style="text-align: right;">{{quote.tamanio}} M&sup2;</td>
                    </tr>
                    <tr>
                        <th>Precio por M&sup2;</th>
                        <td style="text-align: right;">${{quote.precioSelected.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MN</td>
                    </tr>
                    <tr ng-class="quote.hideOutputA">
                        <th>Enganche</th>
                        <td style="text-align: right;">${{quote.engancheActual.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MN</td>
                    </tr>
                    <tr ng-class="quote.hideOutputA">
                        <th>Plazo</th>
                        <td style="text-align: right;">{{quote.plazo}} Meses</td>
                    </tr>
                    <tr>
                        <th>Inversión antes de interés</th>
                        <td style="text-align: right;">${{quote.inversion.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MN</td>
                    </tr>
                    <tr class="result-q" ng-class="quote.hideOutputA">
                        <th><h5 style="font-family: futuraMed; font-size: 21px;">Mensualidades desde</h5></th>
                        <td style="text-align: right;"><h5 style="font-family: futuraMed; font-size: 21px;">${{quote.totalCuotaFijaPlazoA.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MN</h5></td>
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
                        <th><h5 style="font-family: futuraMed; font-size: 21px;">Plusvalía</h5></th>
                        <td style="text-align: right;"><h5 style="font-family: futuraMed; font-size: 21px;">${{quote.plusvalia10Anios.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}} MN</h5></td>
                    </tr>
                </table>
            </div>
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