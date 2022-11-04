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
    <link rel="stylesheet" type="text/css" href="media/assets/css/veredas-lira.css">

    <script type="text/javascript" src="media/bower_components/jquery.min.js"></script>
    <script type="text/javascript" src="media/bower_components/materialize/js/materialize.min.js"></script>
    <script type="text/javascript" src="media/assets/js/init.js"></script>

    <link rel="stylesheet" type="text/css" href="media/bower_components/angular/css/angular-material.min.css">

</head>
<body>

    <md-sidenav class="cc-sidenav md-sidenav-left md-whiteframe-4dp" md-component-id="left">
        <md-toolbar class="md-hue-2">
            <h1 class="md-toolbar-tools">NAVEGACIÓN</h1>
        </md-toolbar>
        <a href="#!/veredas_lira" ng-click="close()">
            <div class="link-sidenav">
                <span>Inicio</span>
            </div>
        </a>
        <md-divider></md-divider>
        <a href="#!/veredas_lira-promociones" ng-click="close()">
            <div class="link-sidenav">
                <span>Promociones</span>
            </div>
        </a>
        <md-divider></md-divider>
        <a href="#!/veredas_lira-amenidades" ng-click="close()">
            <div class="link-sidenav">
                <span>Áreas comunes</span>
            </div>
        </a>
        <md-divider></md-divider>
        <a href="#!/veredas_lira-ubicacion" ng-click="close()">
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

                <a href="#!/veredas_lira" class="brand-logo white left"><img class="logo-pb" src="media/assets/img/habitta/veredas-lira/logos/logo.svg"></a>

                <ul class="nav-menu hide-on-med-and-down">
                    <li><a href="#!/veredas_lira">Inicio</a></li>
                    <li><a href="#!/veredas_lira-promociones">Promociones</a></li>
                    <li><a href="#!/veredas_lira-amenidades">Áreas comunes</a></li>
                    <li><a href="#!/veredas_lira-ubicacion">Ubicación</a></li>
                    <li class="quote-item"><a class="btn quote-btn vl-teal-bg no-shadows futura-med" href="#!/veredas_lira-master_plan">COTIZAR AQUÍ</a></li>
                </ul>

                <ul class="right hide-on-large-only">
                    <li><md-button class="md-icon-button md-noink" ng-click="toggleLeft()">
                        <svg viewBox="0 0 24 24" width="24"><path d="M3,18h18v-2H3V18z M3,13h18v-2H3V13z M3,6v2h18V6H3z" fill="#5F6368"></path></svg>
                    </md-button></li>
                </ul>

                <div class="quote-item right hide-on-large-only">
                    <a class="btn quote-btn vl-teal-bg no-shadows futura-med" href="#!/veredas_lira-master_plan">COTIZAR AQUÍ</a>
                </div>

            </div>
            
        </nav>
    </div>
    
    <div class="section1 vl-teal-bg py">
        <div class="row">
                <h2 class="hbg center-align pb-light-text vl-darkteal-bg">Preventa de Lotes Residenciales</h2>
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

    <div class="py">
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

            <h2 class="headline-2 py  vl-darkteal-text">FINANCIAMIENTO</h2>
             <div class="row py">
                <div class="col s12">
                    <img src="media/assets/img/habitta/veredas-lira/financiamiento.svg" style="width: 100%;">
                </div>
            </div>
        </div>
    </div>

    <footer class="page-footer vl-darkteal-bg" ng-controller="mainController as main">
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
                            <li class="py-10">Teléfono: <a class="" href="tel:+524421275214"> 442 127 5214</a></li>
                            <li class="py-10">Correo: <a class="" href="mailto:hola.habitta@grupoccima.com">hola.habitta@grupoccima.com</a></li>
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
