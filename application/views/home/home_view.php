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

    <title>Monse Tejada</title>

    <script type="text/javascript" src="media/assets/js/analytics.js"></script>
    <!-- Facebook Pixel Code -->
    <script>
        ! function (f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function () {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '318023479184677');
        fbq('track', 'PageView');
    </script>
    <noscript>
        <img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=318023479184677&ev=PageView&noscript=1" />
    </noscript>
    <!-- End Facebook Pixel Code -->
    <link rel="stylesheet" type="text/css" href="media/bower_components/materialize/css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="media/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="media/assets/css/helpers.css">
    <link rel="stylesheet" type="text/css" href="media/assets/css/main.css">
    <script type="text/javascript" src="media/bower_components/jquery.min.js"></script>
    <script type="text/javascript" src="media/bower_components/materialize/js/materialize.min.js"></script>
    <script type="text/javascript" src="media/assets/js/counter.js"></script>
    <script type="text/javascript" src="media/assets/js/regresiva.js"></script>
    <script src="media/assets/js/video.js"></script>

</head>

<body>
    <div id="video-header-wrap" class="video-wrap centerit w100 h100">
        <video id="video-header" class="centerit w100 h100" controls>
            <source src="media/assets/video/ccima.mp4" type="video/mp4">
            <source src="media/assets/video/ccima.ogg" type="video/ogg">
            Your browser does not support HTML5 video.
        </video>
    </div>

    <md-sidenav class="cc-sidenav md-sidenav-left md-whiteframe-4dp" md-component-id="left">
        <md-toolbar class="md-hue-2">
            <h1 class="md-toolbar-tools">GENERATING PROGRESS</h1>
        </md-toolbar>
        <a href="#!/habitta" ng-click="close()">
            <div class="link-body link-dev valign-wrapper">
                <span class="" style="width: 66%;">Desarrollo Habitacional</span><img class=""
                    src="media/assets/img/logos/logo-habitta.svg" height="18">
            </div>
        </a>
        <md-divider></md-divider>
        <a href="#!/Navetec" ng-click="close()">
            <div class="link-body link-dev valign-wrapper">
                <span class="" style="width: 66%;">Desarrollo Industrial</span><img class=""
                    src="media/assets/img/logos/logo-navetec.svg" height="28">
            </div>
        </a>
        <!--md-divider></!--md-divider>
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
        <a href="#!/cotizador" ng-click="close()">
            <div class="link-body link-nav">
                Cotizador
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
                        <li><a href="#!" class="nav-logo"><img src="media/assets/img/logos/logo.png"></a></li>
                        <li class="right">
                            <md-button class="md-icon-button md-noink" ng-click="toggleLeft()">
                                <svg viewBox="0 0 24 24" width="24">
                                    <path d="M3,18h18v-2H3V18z M3,13h18v-2H3V13z M3,6v2h18V6H3z" fill="#5F6368"></path>
                                </svg>
                            </md-button>
                        </li>
                        <!-- <li class="right"><md-button class="md-raised md-primary btn-lg" ng-click="toQuote()">COTIZAR AQUÍ</md-button></li> -->
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!--header Original-->
    <!--header class="cc-header relative w100" style="overflow: hidden;">
        <img class="portada" src="media/assets/img/home/portada-v2.jpg">
        <div class="header-wrap valign-wrapper absolute w100 h100">
            <div class="row header-content">
                <div class="col s9 right">
                    <h1 class="headline-header white-text right-align">GENERATING PROGRESS</h1>
                    <h5 class="header-description white-text right-align">Somos el Aliado Estratégico de América.<br class="desctiption-br"> Creamos Inversiones Extraordinarias</h5>
                </div>
            </div>
        </div>
    </header-->

    <!--nuevo Header-->
    <div class="bg-header-main"></div>
    <header class="square-color">
        <div class="row m-7" ng-controller="sideNavCtrl">
            <!-- <div id="logos-empresa-1" class="col-12 s12  m6">
                
                <div class="row m-0">
                    <div id="bg_navetec" class="col s2  m4 header-square square-img">
                    </div>
                    <div class="col s2  m4  header-square square-color-c">
                        <a  href="#!/Navetec" ng-click="close()" style="text-align: center;">
                            <img id="navetec_w" src="media/assets/img/logos/w/Navetec_w.svg" alt="" >
                            
                        </a>
                    </div>
                    <div id="bg_porttoblanco" class="col m4 header-square square-img "></div>
                </div>

                <div class="row m-0">
                    <div class="col s2 m4  header-square square-color-c">
                        <img id="contruye_w" src="media/assets/img/logos/w/construye_w.svg" alt="" >
                    </div>
                    <div id="bg_costruye" class="col m4 header-square square-img"></div>
                    <div class="col s2 m4  header-square square-color-c">
                        <a  href="#!/habitta" ng-click="close()" style="text-align: center;">
                            <img id="porttoblanco_w" src="media/assets/img/logos/w/Porttoblanco_w.svg" alt="" >
                        </a>
                    </div>
                </div>
                
                <div class="row m-0">
                    <div id="bg_capital-ccima" class="col m4 header-square square-img"></div>
                    <div class="col m4  header-square square-color-c">
                    <img id="capital_ccima" src="media/assets/img/logos/w/capital-ccima_w.svg" alt="" >
                    </div>
                    <div id="bg_sherpa" class="col m4 header-square square-img"></div>
                </div>
                
                <div class="row m-0">
                    <div class="col s12 m4  header-square square-color-c">
                    <img id="rentSolution" src="media/assets/img/logos/w/Rent-solutions_w.svg" alt="" >

                    </div>
                    <div id="bg_rent" class="col m4 header-square square-img">
                        
                    </div>
                    <div class="col m4  header-square square-color-c">
                    <img id="aliadoSherpa" src="media/assets/img/logos/w/sherpa_w.svg" alt="">

                    </div>
                </div>

            </div> -->

            <div class="col s12 m6 p-0 m-0">

                <div class="bg_transparent">
                    <div class="home-titulo">
                        <!--  <h1 class="headline-header white-text">NUEVO CLUSTER
                    <br>Peña de Bernal</h1> -->
                    </div>
                    <!-- <h5 class="header-description white-text ">Somos el Aliado Estratégico de América.<br> Creamos Inversiones Extraordinarias</h5> -->
                    <!-- <div class="lago-cluster">-->
                    <!--     <a href="https://grupoccima.com/#!/Portto_Blanco-Manglar" > Ver Disponibilidad</a> -->
                    <!--</div> -->
                </div>
            </div>

        </div>


        <div id="" class="row m-0" ng-controller="sideNavCtrl">
            <div id="bg_navetec" class="s4 m2 header-square square-img" style="padding: 0;">
                <div class="header-square square-color-m">
                    <a href="#!/Navetec" ng-click="close()" style="text-align: center;">
                        <img id="navetec_w" src="media/assets/img/logos/w/Navetec_w.svg" alt="">
                    </a>
                </div>
            </div>


            <div id="bg_costruye" class="s4 m2 header-square square-img" style="padding: 0;">
                <div class="header-square square-color-m">
                    <img id="contruye_w" src="media/assets/img/logos/w/construye_w.svg" alt="">
                </div>
            </div>


            <div id="bg_porttoblanco" class="s4 m2 header-square square-img" style="padding: 0;">
                <div class="header-square square-color-m">
                    <a href="#!/habitta" ng-click="close()" style="text-align: center;">
                        <img id="porttoblanco_w" src="media/assets/img/logos/w/Porttoblanco_w.svg" alt="">
                    </a>
                </div>
            </div>

            <div id="bg_capital-ccima" class="s4 m2 header-square square-img" style="padding: 0;">
                <div class="header-square square-color-m">
                    <img id="capital_ccima" src="media/assets/img/logos/w/capital-ccima_w.svg" alt="">
                </div>

            </div>

            <div id="bg_rent" class="s4 m2 header-square square-img" style="padding: 0;">
                <div class="header-square square-color-m">
                    <img id="rentSolution" src="media/assets/img/logos/w/Rent-solutions_w.svg" alt="">
                </div>
            </div>

            <div id="bg_sherpa" class="s4 m2 header-square square-img" style="padding: 0;">
                <div class="header-square square-color-m">
                    <img id="aliadoSherpa" src="media/assets/img/logos/w/sherpa_w.svg" alt="">
                </div>

            </div>
        </div>
    </header>

    <div class="line">
        <section>
            <div class="section bg-blue " style="background-color: #021D49;">
                <div class="regresiva">
                    <h2 class="title-regresiva uppercase center-text  text-white letter_spacing_2"> LANZAMIENTO DE NUEVO
                        CLÚSTER </h2>
                    <div class="countdown-container">
                        <div class="">
                            <p class="big-number" id="days">3</p>
                            <span>Dias</span>
                        </div>
                        <div class="">
                            <p class="big-number" id="hours">10</p>
                            <span>Horas</span>
                        </div>
                        <div class="">
                            <p class="big-number" id="mins">11</p>
                            <span>Minutos</span>
                        </div>
                        <div class="">
                            <p class="big-number" id="seconds">12</p>
                            <span>Segundos</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>


            <div class="py-80">
                <div class="row pb-40">
                    <div class="col s12 m12">
                        <h4 class="center">Tu monse, nuestra pasión</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 m6 l3">
                        <div class="p-420">
                            <div class="nosotros-img-wrap center">
                                <a><img src="media/assets/img/logos/logo-navetec.svg" height="42"></a>
                            </div>
                            <h5 class="center-align">Desarrollos Industriales</h5>
                            <p class="center-align">Expansión e inversiones extraordinarias al alcance de todos.</p>
                        </div>
                    </div>

                    <div class="col s12 m6 l3">
                        <div class="p-420">
                            <div class="nosotros-img-wrap center">
                                <a><img src="media/assets/img/logos/logo-construye.svg" height="50"></a>
                            </div>
                            <h5 class="center-align">Construcción</h5>
                            <p class="center-align">Expertos en proyectos integrales: gestión, diseño, urbanización y
                                construcción.</p>
                        </div>
                    </div>

                    <div class="col s12 m6 l3">
                        <div class="p-420">
                            <div class="nosotros-img-wrap center">
                                <a><img src="media/assets/img/logos/logo-rent.svg" height="44"></a>
                            </div>
                            <h5 class="center-align">Grúas & Maquinaria</h5>
                            <p class="center-align">Siempre al pendiente 24/7 no tienes de que preocuparte.</p>
                        </div>
                    </div>

                    <div class="col s12 m6 l3">
                        <div class="p-420">
                            <div class="nosotros-img-wrap center">
                                <a><img class="habitta-logo" src="media/assets/img/logos/logo-habitta.svg"
                                        height="30"></a>
                            </div>
                            <h5 class="center-align">Desarrollos Habitacionales</h5>
                            <p class="center-align">Convertimos el hogar de tus sueños en una realidad.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="py-80">
                <div class="row pb-40">
                    <div class="col s12 m12">
                        <h4 class="center">Porque los viste en</h4>
                    </div>
                </div>

                <div class="row">
                    <div class="col s12 m6 l3">
                        <div class="">
                            <div class=""
                                style="height: 150px; display: flex; justify-content: center; align-items: center; ">
                                <a><img src="media/assets/img/home/logo-medios/el_universal.svg" height="80"></a>
                            </div>
                        </div>
                    </div>

                    <div class="col s12 m6 l3">
                        <div class=""
                            style=" height: 150px; display: flex; justify-content: center; align-items: center;">
                            <div class="">
                                <a><img src="media/assets/img/home/logo-medios/reforma.svg" height="30"></a>
                            </div>

                        </div>
                    </div>

                    <div class="col s12 m6 l3">
                        <div class="">
                            <div class=""
                                style="height: 150px; display: flex; justify-content: center; align-items: center;">
                                <a><img src="media/assets/img/home/logo-medios/el_financiero.svg" height="30"></a>
                            </div>

                        </div>
                    </div>


                    <div class="col s12 m6 l3">
                        <div class="">
                            <div class=""
                                style="height: 150px; display: flex; justify-content: center; align-items: center;">
                                <a><img class="habitta-logo" src="media/assets/img/home/logo-medios/expansion.svg"
                                        height="60"></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

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
                            <h2 class="center-align">+<span class="count" data-value="2100">0</span></h2>
                            <p class="center-align">CLIENTES SATISFECHOS</p>
                        </div>
                    </div>

                    <div class="col s12 m6 l3">
                        <div class="p-420">
                            <h2 class="center-align">+<span class="count" data-value="950">0</span>,000</h2>
                            <p class="center-align">M&sup2; DE CONSTRUCCIÓN</p>
                        </div>
                    </div>

                    <div class="col s12 m6 l3">
                        <div class="p-420">
                            <h2 class="center-align">+<span class="count" data-value="13">0</span></h2>
                            <p class="center-align">ESTADOS</p>
                        </div>
                    </div>

                    <div class="col s12 m6 l3">
                        <div class="p-420">
                            <h2 class="center-align">+<span class="count" data-value="5000">0</span>,000</h2>
                            <p class="center-align">M&sup2; DE PROYECTOS DISEÑADOS</p>
                        </div>
                    </div>

                    <div class="col s12 m6 l3">
                        <div class="p-420">
                            <h2 class="center-align">+<span class="count" data-value="1800">0</span></h2>
                            <p class="center-align">PROYECTOS CONSTRUIDOS</p>
                        </div>
                    </div>

                    <div class="col s12 m6 l3">
                        <div class="p-420">
                            <h2 class="center-align">+<span class="count" data-value="261">0</span></h2>
                            <p class="center-align">HECTAREAS DE DESARROLLOS HABITACIONALES</p>
                        </div>
                    </div>

                    <div class="col s12 m6 l3">
                        <div class="p-420">
                            <h2 class="center-align">+<span class="count" data-value="1200">0</span>,000</h2>
                            <p class="center-align">M&sup2; DE DESARROLLOS INDUSTRIALES</p>
                        </div>
                    </div>
                </div>

                <div class="blue-grey lighten-4 py-80">
                    <div class="video-section relative">
                        <img class="center-align" src="media/assets/img/home/santa-rosa-top.jpg" width="100%">
                        <div class="cc-play play white centerit">
                            <div class="play-fx play-fx-in centerit"></div>
                            <div class="play-fx centerit"></div>
                            <div class="play-logo centerit"></div>
                            <div id="playButton" class="play-btn centerit"></div>
                        </div>
                    </div>
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
                            <img class="left" src="media/assets/img/home/icons/identification.svg" width="30"
                                height="30">
                            <h5 class="left-align" style="margin-left: 46px;">IDENTIFICATION</h5>
                        </div>
                        <p style="text-align: justify; padding-left: 46px;">Entendemos tu necesidad, adoptamos tus
                            sueños y
                            tus metas. Queremos saber cúal es tu CCIMA, por eso identificamos cada una de tus
                            necesidades
                            con atención personalizado.</p>
                    </div>
                </div>
                <div class="col s12 l4">
                    <div class="p-420">
                        <div>
                            <img class="left" src="media/assets/img/home/icons/strategy.svg" width="33" height="33">
                            <h5 class="left-align" style="margin-left: 46px;">STRATEGY</h5>
                        </div>
                        <p style="text-align: justify; padding-left: 46px;">Diseñamos un plan de acción a tu medida. Nos
                            adaptamos a cualquier situación que pueda afectar el desarrollo de tu proyecto. Definimos
                            presupuesto y temporalidad optima a base de nuestra amplia experiencia.</p>
                    </div>
                </div>
                <div class="col s12 l4">
                    <div class="p-420">
                        <div>
                            <img class="left" src="media/assets/img/home/icons/creation.svg" width="33" height="33">
                            <h5 class="left-align" style="margin-left: 46px;">CREATION</h5>
                        </div>
                        <p style="text-align: justify; padding-left: 46px;">¡Manos a la obra! Conocemos la emoción de
                            empezar algo nuevo, por eso en la ejecución te acompañamos en cada momento, retroalimentando
                            y
                            buscando mejorar el progreso de tu proyecto siempre.</p>
                    </div>
                </div>
            </div>
            <div class="pb-80"></div>
        </section>
        <section class="py-40 lighten-5">
            <h3 class="center py-80"><span style="font-weight: lighter;">NUESTRO</span> BLOG</h3>
            <div class="row">
                <div class="col s12 l4">
                    <div class="p-420">
                        <a href=" https://blog.grupo-ccima.com/post_01.html" style="color:#000000de;" target="_blank">
                            <img class="" src="media/assets/img/blog/01.jpg"
                                alt="El impacto de la tecnologia en el sector inmobiliario en tiempos de crisis"
                                width="100%">
                            <div class="">

                                <h5 class="" style="padding-bottom: 26px;">4 plataformas para invertir de forma
                                    inteligente
                                </h5>
                                <p style="text-align: justify;">Al invertir, pones a trabajar tu dinero para en un
                                    futuro
                                    poder generar un patrimonio, pero para lograr esto, es básico que primero conozcas
                                    las
                                    mejores plataformas para hacerlo.</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col s12 l4">
                    <div class="p-420">
                        <a href=" https://blog.grupo-ccima.com/post_02.html" style="color:#000000de;" target="_blank">
                            <img class="" src="media/assets/img/blog/02.jpg"
                                alt="5 razones por las que debes emprender en tu negocio propio" width="100%">
                            <div class="">

                                <h5 class="">5 razones por las que debes emprender en tu negocio propio</h5>
                                <p style="text-align: justify;">Emprender tiene múltiples ventajas, verás que adentrarte
                                    en
                                    este camino traerá grandes beneficios para ti, conoce 5 razones por las que deberías
                                    hacerlo. </p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col s12 l4">
                    <div class="p-420">
                        <a href=" https://blog.grupo-ccima.com/post_03.html" style="color:#000000de;" target="_blank">
                            <img class="" src="media/assets/img/blog/03.jpg"
                                alt="El impacto de la tecnologia en el sector inmobiliario en tiempos de crisis"
                                width="100%">
                            <div class="">

                                <h5 class="" style="">El impacto de la tecnología en el sector inmobiliario en tiempos
                                    de
                                    crisis </h5>
                                <p style="text-align: justify;">Después de la crisis del 2008, el sector inmobiliario
                                    quedó
                                    muy vulnerable y estancado, gracias a la tecnología y la transformación digital, la
                                    industria revolucionó.</p>
                            </div>
                        </a>
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
                                        href="https://www.google.com.mx/maps/place/GRUPO+CCIMA+S.A.+DE+C.V./@20.7207906,-100.4411124,17z/data=!3m1!4b1!4m5!3m4!1s0x85d359d5e049ded3:0xdbdc71bed86b2fb3!8m2!3d20.7207906!4d-100.4389237">Carretera
                                        Federal 57, KM 17.5, Santa Rosa Jáuregui, C.P. 76220, Santiago de Querétaro,
                                        Qro.</a></li>
                                <li class="py-10">Teléfono: <a class="" href="tel:+524422912223"> 442 291 2223</a></li>
                                <li class="py-10">Correo: <a class=""
                                        href="mailto:hola@grupoccima.com">hola@grupoccima.com</a></li>
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
<script src=""></script>
</html>