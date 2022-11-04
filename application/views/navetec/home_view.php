<!DOCTYPE html>
<html lang="es_MX">
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" contet="ie=edge">
    <meta name="author" content="Ing. Saúl Fernando Torres Hernández">
    <meta name="description" content="Grúpo CCIMA S.A. de C.V." />
    <meta name="keywords" content="grupo ccima, navetec, constructora, servicio de construccion, desarrolladora, llave en mano, built to suit, renta de maquinaria, renta de gruas, maquinaria pesada para construccion, naves industriales, renta naves industriales, venta naves industriales, parques industriales, terrenos, terrenos industriales, terrenos habitacionales, bienes raices, inmobiliaria" />

    <title>Navetec</title>

    <script type="text/javascript" src="media/assets/js/analytics.js"></script>

    <link rel="stylesheet" type="text/css" href="media/bower_components/materialize/css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="media/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="media/assets/css/navetec.css">
    <link rel="stylesheet" type="text/css" href="media/assets/css/helpers.css">

    <script type="text/javascript" src="media/bower_components/jquery.min.js"></script>
    <script type="text/javascript" src="media/bower_components/materialize/js/materialize.min.js"></script>
    <script type="text/javascript" src="media/assets/js/counter.js"></script>
    <script src="media/assets/js/video.js"></script>

</head>
<body>

    <!--div id="video-header-wrap" class="video-wrap centerit w100 h100">
        <video id="video-header" class="centerit w100 h100" controls>
            <source src="media/assets/video/ccima.mp4" type="video/mp4">
            <source src="media/assets/video/ccima.ogg" type="video/ogg">
            Your browser does not support HTML5 video.
        </video>
    </div-->

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
        <a href="#!/Navetec-Santa_Rosa_Business_Park" ng-click="close()">
            <div class="link-body link-nav">
                Santa Rosa Business Park
            </div>
        </a>
        <md-divider></md-divider>
        <a href="#!/Navetec-Gamma_II_Business_Park" ng-click="close()">
            <div class="link-body link-nav">
                Gamma II Business Park
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

        <md-divider></md-divider>
       <!--  <a href="#!/Navetec-SLP_Business_Park" ng-click="close()">
            <div class="link-body link-nav">
                San Luis Potosí
            </div>
        </a> -->
        <md-divider></md-divider>
        <a href="#!/Navetec-Celta_Business_Park" ng-click="close()">
            <div class="link-body link-nav">
               Celta Business Park
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

    <header class="cc-header relative w100" style="overflow: hidden;">
        <img class="portada w100" src="media/assets/img/navetec/gamma/gamma.jpg">
        <div class="header-wrap absolute w100 h100">
            <div class="row header-content">
                <div class="col s12">
                    <h1 class="headline-header blue-txt center-align">GENERATING PROGRESS</h1>
                    <h5 class="header-description blue-txt center-align">Somos el Aliado Estratégico de América.<br class="desctiption-br"> Creamos Inversiones Extraordinarias</h5>
                </div>
            </div>
        </div>
    </header>

    <section>
        <div class="py-80">

            <div class="row pb-40">
                <div class="col s12">
                    <h4 class="center">Nuestros parques industriales</h4>
                </div>
            </div>

            <div class="row">
                <div class="col s12 l3">
                    <div class="p-420">
                        <div class="nosotros-img-wrap center">
                            <a><img src="media/assets/img/navetec/logos/gamma-logo.svg" height="36"></a>
                        </div>
                        <p class="center-align">Conjunto industrial ubicado estratégicamente en una de las zonas con mayor plusvalía en el estado de Querétaro, entre las carreteras Celaya-Querétaro (Libre), Guanajuato-Querétaro (Cuota), en el Km. 18, Sobre el Libramiento Norponiente</p>
                    </div>
                </div>

                <div class="col s12 l3">
                    <div class="p-420">
                        <div class="nosotros-img-wrap center">
                            <a><img src="media/assets/img/navetec/logos/santa-rosa-logo.svg" height="36"></a>
                        </div>
                        <p class="center-align">Conjunto industrial ubicado en una de las zonas con mejor accesibilidad dentro de la ciudad de Querétaro; entre la carretera S.L.P.-Querétaro (Carr 57) y Libramiento Norponiente, contra esquina del Polígono Empresarial Santa Rosa</p>
                    </div>
                </div>
                <div class="col s12 l3">
                    <div class="p-420">
                        <div class="nosotros-img-wrap center">
                            <a><img src="media/assets/img/navetec/logos/beta-logo.svg" height="36"></a>
                        </div>
                        <p class="center-align">Conjunto industrial ubicado dentro del corredor espacial, con accesos totalmente viables como Circuito Universidades y Carretera México-Querétaro, a 25 minutos del centro de Querétaro</p>
                    </div>
                </div>
                <div class="col s12 l3">
                    <div class="p-420">
                        <div class="nosotros-img-wrap center">
                            <a><img src="media/assets/img/navetec/logos/celta-logo.svg" height="36"></a>
                        </div>
                        <p class="center-align">Conjunto industrial ubicado estratégicamente en una de las zonas con mayor accesibilidad dentro de la ciudad de Querétaro en el Km 3.7 Carretera Federal Queretaro-San Miguel de Allende en la localidad de Buenavista municipio de Querétaro.</p>
                    </div>
                </div>
                

            </div>
        </div>

        <div class="pb-80">

            <div class="row pb-40">
                <div class="col s12">
                    <h4 class="center">En Pre-venta</h4>
                </div>
            </div>

            <div class="row">
            
                <div class="col s12 m6 l3">
                    <div class="p-420">
                        <div class="nosotros-img-wrap center">
                            <a><img src="media/assets/img/navetec/logos/gamma2-logo.svg" height="36"></a>
                        </div>
                        <p class="center-align">Conjunto industrial ubicado estratégicamente en una de las zonas con mayor plusvalía en el estado de Querétaro, entre las carreteras Celaya-Querétaro (Libre), Guanajuato-Querétaro (Cuota), en el Km. 18, Sobre el Libramiento Norponiente</p>
                    </div>
                </div>

                <div class="col s12 m6 l3">
                    <div class="p-420">
                        <div class="nosotros-img-wrap center">
                            <a><img src="media/assets/img/navetec/logos/aeropuerto-logo.svg" height="36"></a>
                        </div>
                        <p class="center-align">Conjunto industrial ubicado en una Parcela 61 Z-1 P1/2, Coyotillos municipio del marqués</p>
                    </div>
                </div>

                <div class="col s12 m6 l3">
                    <div class="p-420">
                        <div class="nosotros-img-wrap center">
                            <a><img src="media/assets/img/navetec/logos/pedro-escobedo-logo.svg" height="36"></a>
                        </div>
                        <p class="center-align">Conjunto industrial ubicado a un costado de Autopista Carr federal 57 fracc. 1 de la parcela 189 P-5/6 Z-1 col. La palma municipio Pedro Escobedo</p>
                    </div>
                </div>

                <div class="col s12 m6 l3">
                    <div class="p-420">
                        <div class="nosotros-img-wrap center">
                            <a><img src="media/assets/img/navetec/logos/serverSLP.svg" height="36"></a>
                        </div>
                        <p class="center-align">Parque Calamanda Business Park Ubicado sobre la autopista 57 en el kilómetro 188 A sólo 15 minutos de la ciudad de Querétaro Polígono con extensión de 30,000 m2</p>
                    </div>
                </div>

            </div>
        </div>

        <!-- SECCCION VR NAVETEC 08122020 -->
        <section>
            <div class="row pb-10">
                <div class="col s12">
                    <h4 class="center">Conoce tú Próxima Nave</h4>
                </div>
            </div>
            <div style="margin: auto; text-align: center;">
                <iframe style="width:90vw; height:80vh;" src="https://GrupoCCIMA.vr-360-tour.com/e/gcwBeQ6wg0s/e?hide_logo=true&hide_nadir=true&hidehotspotlabels=true&hidelive=true&initvars.autorotate.enabled=true&show_thumbnails=true" allowfullscreen allow="clipboard-write; microphone; camera; gyroscope; accelerometer"></iframe>
            </div>
        </section>

        <div class="nosotros-bg blue-grey lighten-5">
            <div id="counter" class="row py-80">
                <div class="col s12 m6 l3">
                    <div class="p-420">
                        <h2 class="center-align">+<span class="count" data-value="20">0</span></h2>
                        <p class="center-align">AÑOS DE EXPERIENCIA</p>
                    </div>
                </div>

                <div class="col s12 m6 l3">
                    <div class="p-420">
                        <h2 class="center-align">+<span class="count" data-value="600">0</span>,000</h2>
                        <p class="center-align">M&sup2; DE PROYECTOS DISEÑADOS</p>
                    </div>
                </div>

                <div class="col s12 m6 l3">
                    <div class="p-420">
                        <h2 class="center-align">+<span class="count" data-value="1500">0</span></h2>
                        <p class="center-align">PROYECTOS CONSTRUIDOS</p>
                    </div>
                </div>

                <div class="col s12 m6 l3">
                    <div class="p-420">
                        <h2 class="center-align">+<span class="count" data-value="290">0</span>,000</h2>
                        <p class="center-align">M&sup2; DE DESARROLLOS INDUSTRIALES</p>
                    </div>
                </div>
            </div>

            <div class="blue-grey lighten-4 py-80">
                <div class="video-section relative">
                    <img class="center-align" src="media/assets/img/navetec/gamma/portada.jpg" width="100%">
                    <!--div class="cc-play play white centerit">
                        <div class="play-fx play-fx-in centerit"></div>
                        <div class="play-fx centerit"></div>
                        <div class="play-logo centerit"></div>
                        <div id="playButton" class="play-btn centerit"></div>
                    </div-->
                </div>
            </div>
        </div>

        <div class="py-80 blue-grey">
            <div class="px-20 pb-80">
                <h4 class="center-align light-txt">Sabemos la importancia de una <span class="futura-med">buena ubicación</span>, es por ello que cada uno de nuestros parques fue <span class="futura-med">estratégicamente posicionado</span></h4>
            </div>
            <div class="row">
                <div class="col s1"></div>
                <div class="col s10 m10">
                    <img class="w100" src="media/assets/img/navetec/business-park-map.svg">
                </div>
                <div class="col s1"></div>
            </div>
        </div>

        <div class="py-80 blue-grey darken-1">
            <div class="px-20 pb-80 container">
                <h4 class="light-txt futura-book no__m">Conocemos los retos</h4>
                <h6 class="light-txt no__m py-5">Ofrecemos soluciones</h6>

            </div>
            <div class="row">
                <div class="col s1"></div>
                <div class="col s10 m10">
                    <img class="w100" src="media/assets/img/navetec/understand-you.svg">
                </div>
                <div class="col s1"></div>
            </div>
        </div>

        <div class="py-80 cc-blue-bg">

            <div class="px-20 pb-80">
                <h4 class="center-align light-txt">Sabemos que tu plan es <span class="futura-med">crecer</span>, desarrollamos proyectos modulares para que puedas expandir tu negocio en 1, 2, 3 o más naves y terrenos</h4>
            </div>

            <div class="row">
                <div class="col s12">
                    <div class="container py-80">
                        <h5 class="white-text">NAVES TIPO</h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s1 m2 l3 "></div>
                <div class="col s10 m8 l6">
                    <img class="w100" src="media/assets/img/navetec/naves-tipo.svg">
                </div>
                <div class="col s1 m2 l3 "></div>
            </div>

            <div class="row">
                <div class="col s12">
                    <div class="container py-80">
                        <h5 class="white-text">LOTES TIPO</h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s1 m2 l3 "></div>
                <div class="col s10 m8 l6">
                    <img class="w100" src="media/assets/img/navetec/lotes-tipo.svg">
                </div>
                <div class="col s1 m2 l3 "></div>
            </div>

            <div class="row">
                <div class="col s12">
                    <div class="container py-80">
                        <h5 class="white-text">CORTE ESQUEMÁTICO</h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s0 m2 "></div>
                <div class="col s12 m8">
                    <img class="w100" src="media/assets/img/navetec/corte-esquematico.svg">
                </div>
                <div class="col s0 m2 "></div>
            </div>

             <div class="row">
                <div class="col s12">
                    <div class="container py-80">
                        <h5 class="white-text">DISTRIBUCIÓN DE PARQUE TIPO</h5>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s0 m2 "></div>
                <div class="col s12 m8">
                    <img class="w100" src="media/assets/img/navetec/distribucion-parque.svg">
                </div>
                <div class="col s0 m2 "></div>
            </div>
        </div>

        <div class="py-80 blue-grey darken-3">
            <div class="px-20 pb-80">
                <h4 class="center-align light-txt">Por primera vez el capital no es problema para ver crecer tu negocio</h4>
            </div>
            <div class="row">
                <div class="col s1"></div>
                <div class="col s10 m10">
                    <img class="w100" src="media/assets/img/navetec/elige-plan.svg">
                </div>
                <div class="col s1"></div>
            </div>
        </div>

    </section>

    <section class="py-80">
        <div class="row py-80" style="width: 90%;">
            <div class="col s12 center">
                <div class="py-20">
                    <img class="logo-sherpa" src="media/assets/img/logos/logo-sherpa.png" width="94">
                </div>
                <h4>Creemos en el poder de las Alianzas para Generar Progreso en nuestro entorno</h4>
            </div>
        </div>
    </section>

    <section class="py-40 blue-grey lighten-5">
        <h3 class="center py-80"><span style="font-weight: lighter;">METODOLOGÍA</span> ISC</h3>
        <div class="row">
            <div class="col s12 l4">
                <div class="p-420">
                    <div>
                        <img class="left" src="media/assets/img/home/icons/identification.svg" width="30" height="30">
                        <h5 class="left-align" style="margin-left: 46px;">IDENTIFICATION</h5>
                    </div>
                    <p style="text-align: justify; padding-left: 46px;">Entendemos tu necesidad, adoptamos tus sueños y tus metas. Queremos saber cúal es tu CCIMA, por eso identificamos cada una de tus necesidades con atención personalizado.</p>
                </div>
            </div>
            <div class="col s12 l4">
                <div class="p-420">
                    <div>
                        <img class="left" src="media/assets/img/home/icons/strategy.svg" width="33" height="33">
                        <h5 class="left-align" style="margin-left: 46px;">STRATEGY</h5>
                    </div>
                    <p style="text-align: justify; padding-left: 46px;">Diseñamos un plan de acción a tu medida. Nos adaptamos a cualquier situación que pueda afectar el desarrollo de tu proyecto. Definimos presupuesto y temporalidad optima a base de nuestra amplia experiencia.</p>
                </div>
            </div>
            <div class="col s12 l4">
                <div class="p-420">
                    <div>
                        <img class="left" src="media/assets/img/home/icons/creation.svg" width="33" height="33">
                        <h5 class="left-align" style="margin-left: 46px;">CREATION</h5>
                    </div>
                    <p style="text-align: justify; padding-left: 46px;">¡Manos a la obra! Conocemos la emoción de empezar algo nuevo, por eso en la ejecución te acompañamos en cada momento, retroalimentando y buscando mejorar el progreso de tu proyecto siempre.</p>
                </div>
            </div>
        </div>
        <div class="pb-80"></div>
    </section>

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
                        <a href="https://www.facebook.com/pg/GPOCCIMA/services/?service_id=2352094628174708&ref=page_internal">
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
