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
  <!--link rel="stylesheet" type="text/css" href="media/bower_components/materialize/css/materialize.min.css"-->
  <link rel="stylesheet" type="text/css" href="media/assets/css/landing/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="media/assets/css/landing/normalize.css">
  <link rel="stylesheet" type="text/css" href="media/assets/css/helpers.css">
  <link rel="stylesheet" type="text/css" href="media/assets/css/landing/main.css">
  <link rel="stylesheet" type="text/css" href="media/assets/css/style.css">
  <script type="text/javascript" src="media/bower_components/jquery.min.js"></script>
  <script type="text/javascript" src="media/assets/js/counter.js"></script>


</head>

<body ng-controller="LandingCtrl as landing">
  <header>
    <div class="row promo">
      <div class="col-12 ">
        <p>Por Preventa Obtén un 25 % de descuento en la compra de una Nave Industrial. </p>
      </div>
      <div class="col-12">
        <p>5 Dias 13 Horas 17 Minutos </p>
      </div>
      <div class="col-12 ">
        <a class=" btn btn-primary" href="#">Aparta Ahora</a>
      </div>
    </div>
    <nav class="navbar navbar-expand-md bg-light fixed-top">
      <!-- Brand -->
      <a class="navbar-brand" href="#">
        <img class="logo-nav" src="media/assets/img/landing/navetec_Logo.svg" alt="Navetec">
      </a>

      <!-- Toggler/collapsibe Button -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Navbar links -->
      <div class="collapse navbar-collapse justify-content-end barra-nav" id="collapsibleNavbar">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link " style="color:#0E2C56;" href="">Financiamiento</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link " style="color:#0E2C56;" href="">Ubicación</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" style="color:#0E2C56;" href="">Naves Industriales</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <main class="container-fluid ">
    <div class="c-hero">
      <div class="row hero">
        <div class="col-12 cont-top">
          <div class="logo">
            <img src="media/assets/img/landing/navetec_Logo.svg" alt="">
          </div>
          <p class="hero-p futura-med"><span class="hero-title">BE EXTRAORDINARY</span></p>
          <p><span class="hero-subtitle futura-med">Desarrollos Industriales</span></p>

          <md-button ng-click="landing.showDialog()" class=" md-raised  blue-bg py-2 ml-40 mt-24">
            <span class="futura-book white__text px-16 fs__22px">
              C<span class="to__lowercase">omienza a</span> I<span class="to__lowercase">nvertir</span>
            </span>
          </md-button>

          <!--a class="boton" ng-click="landing.showDialog()" style="cursor: pointer;">Comienza a Invertir</a-->
        </div>
        <div class="col-12">
          <div class="row c-promociones">
            <div class="col-4 promo-items">
              <p class="futura-med">36 meses sin Intereses</p>
            </div>
            <div class="col-4 promo-items">
              <p class="futura-med">Crédito Directo</p>
            </div>
            <div class="col-4 promo-items">
              <p class="futura-med">Aparta Desde $10,000 MXN</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>


  <div class="container-fluid">
    <section id="problemas" class="seccion">
      <h2 class="futura-med">Sabemos lo que te preocupa</h2>
      <div class="row cc-ccima">
        <div class="col-12 col-md-2">

        </div>
        <div class="col-12 col-md-4">
          <picture>
            <source media="(min-width:650px)" srcset="media/assets/img/landing/navetec_problemas.jpg">
            <source media="(min-width:465px)" srcset="media/assets/img/landing/navetec_problemas.jpg">
            <img src="media/assets/img/landing/navetec_problemas330x220.jpg" alt="">
          </picture>
        </div>
        <div class="col-12 col-md-6">
          <div class="c-problemas">
            <div class="p-itmes">
              <div class="problemas-items">
                <div class="check">
                  <img src="media/assets/img/landing/iconos/Navetec_garrapata.svg" alt="">
                </div>
                <div class="problema">
                  <p class="futura-med">Elegir una mala inversión </p>
                </div>
              </div>
              <div class="problemas-items">
                <div class="check">
                  <img src="media/assets/img/landing/iconos/Navetec_garrapata.svg" alt="">
                </div>
                <div class="problema">
                  <p class="futura-med">Crisis económica </p>
                </div>
              </div>
              <div class="problemas-items">
                <div class="check">
                  <source>
                  <img src="media/assets/img/landing/iconos/Navetec_garrapata.svg" alt="">
                </div>
                <div class="problema">
                  <p class="futura-med">Falta de certeza </p>
                </div>
              </div>
            </div>
            <div class="p-itmes">
              <div class="problemas-items">
                <div class="check">
                  <img src="media/assets/img/landing/iconos/Navetec_garrapata.svg" alt="">
                </div>
                <div class="problema">
                  <p class="futura-med">Pocos vehículos de inversión </p>
                </div>
              </div>
              <div class="problemas-items">
                <div class="check">
                  <img src="media/assets/img/landing/iconos/Navetec_garrapata.svg" alt="">
                </div>
                <div class="problema">
                  <p class="futura-med">Bajos rendimientos</p>
                </div>
              </div>
              <div class="problemas-items">
                <div class="check">
                  <img src="media/assets/img/landing/iconos/Navetec_garrapata.svg" alt="">
                </div>
                <div class="problema">
                  <p class="futura-med">Trámites complicados </p>
                </div>
              </div>
            </div>
          </div>
          <div class="c-boton">
          <md-button ng-click="landing.showDialog()" class=" md-raised  blue-bg py-2 ">
            <span class="futura-book white__text px-16 fs__22px">
              D<span class="to__lowercase">éjanos</span> A<span class="to__lowercase">yudarte</span>
            </span>
          </md-button>
          </div>
          

          <!--div class="c-boton pro-boton">
            <a class="boton" ng-click="landing.showDialog()" style="cursor: pointer;">Déjanos Ayudarte</a>
          </div-->
        </div>
      </div>
    </section>
    <section id="empatia" class="seccion bg-gris">
      <h2>Entendemos que es una decisión importante, por esa razón estamos contigo </h2>
      <div class="row cc-ccima">
        <div class="col-12 col-md-4 order-md-2">
          <picture>
            <source media="(min-width:650px)" srcset="media/assets/img/landing/navetec-empatia_2.jpg">
            <source media="(min-width:465px)" srcset="media/assets/img/landing/navetec-empatia_2.jpg">
            <img src="media/assets/img/landing/navetec-empatia_2.jpg" alt="">
          </picture>
        </div>
        <div class="col-12 col-md-4 order-md-1 text-empatia">
          <h3 class="futura-med">Emprendamos juntos un legado extraordinario.</h3>
          <md-button ng-click="landing.showDialog()" class=" md-raised  blue-bg py-2  mt-10">
            <span class="futura-book white__text px-16 fs__22px">
              D<span class="to__lowercase">éjanos</span> A<span class="to__lowercase">yudarte</span>
            </span>
          </md-button>
          <!--div class="c-boton">
            <a class="boton" ng-click="landing.showDialog()" style="cursor: pointer;">Inicia Ahora</a>
          </div-->
        </div>
      </div>
    </section>

    <section id="historia" class="seccion">
      <h2 class="futura-med"> Más de 18 años guiando a la CCIMA a personas extraordinarias </h2>
      <div class="row cc-ccima">
        <div class="col-12 col-md-8">
          <video width="100%" height="" autoplay muted="muted" loop>
            <source src="media/assets/video/sherpa.mp4" type="video/mp4">
            <source src="" type="video/ogg">
          </video>
        </div>
        <div class="col-12 col-md-4">

          <div class="cont-historia">
            <div class="historia-items">
              <div class="date-histo">
                <img src="media/assets/img/landing/navetec_point.svg" alt="">
                <p class="futura-med">2002</p>
              </div>
              <div class="text-histo">
                <p class="futura-med">Fundación de GRUPOCCIMA </p>
              </div>
            </div>
            <div class="historia-items">
              <div class="date-histo">
                <img src="media/assets/img/landing/navetec_point.svg" alt="">
                <p class="futura-med">2008</p>
              </div>
              <div class="text-histo">
                <p class="futura-med">Primera Colaboración con Gobierno del Estado </p>
              </div>
            </div>
            <div class="historia-items">
              <div class="date-histo">
                <img src="media/assets/img/landing/navetec_point.svg" alt="">
                <p class="futura-med">2010</p>
              </div>
              <div class="text-histo">
                <p class="futura-med">Primera Colaboración con la Industria Automotriz </p>
              </div>
            </div>
            <div class="historia-items">
              <div class="date-histo">
                <img src="media/assets/img/landing/navetec_point.svg" alt="">
                <p class="futura-med">2015</p>
              </div>
              <div class="text-histo">
                <p class="futura-med">Conformación Línea Desarrollos Industriales “NAVETEC By CCIMA” </p>
              </div>
            </div>
            <div class="historia-items">
              <div class="date-histo">
                <img src="media/assets/img/landing/navetec_point.svg" alt="">
                <p class="futura-med">2016</p>
              </div>
              <div class="text-histo">
                <p class="futura-med">Primer Parque Industrial Navetec Business Park BETA</p>
              </div>
            </div>
            <div class="historia-items">
              <div class="date-histo">
                <img src="media/assets/img/landing/navetec_point.svg" alt="">
                <p class="futura-med">2017</p>
              </div>
              <div class="text-histo">
                <p class="futura-med">Segundo Parque Industrial Navetec Business Park GAMMA</p>
              </div>
            </div>
            <div class="historia-items">
              <div class="date-histo">
                <img src="media/assets/img/landing/navetec_point.svg" alt="">
                <p class="futura-med">2019</p>
              </div>
              <div class="text-histo">
                <p class="futura-med"> Tercer Parque Industrial Navetec Business Park Santa Rosa </p>
              </div>
            </div>
            <div class="historia-items">
              <div class="date-histo">
                <img src="media/assets/img/landing/navetec_point.svg" alt="">
                <p class="futura-med">2020</p>
              </div>
              <div class="text-histo">
                <p class="futura-med">Lanzamiento de 4 Parques Industriales en PREVENTA </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="Marcas" class="seccion bg-gris">
      <h2>Nuestras Marcas</h2>
      <div class="row cc-ccima marcas">
        <div class="col-12 col-md-12 marcas-items">
          <img id="logo__ccima" src="media/assets/img/landing/logos/logo.png" alt="">
        </div>
        <div class="col-12 col-md-2 marcas-items">
          <img id="logo__habitta" src="media/assets/img/landing/logos/logo-habitta.svg" alt="">
        </div>
        <div class="col-12 col-md-2 marcas-items ">
          <img id="logo__contruye" src="media/assets/img/landing/logos/logo-construye.svg" alt="">
        </div>

        <div class="col-12 col-md-2 marcas-items">
          <img id="logo__navetec" src="media/assets/img/landing/logos/logo-navetec.svg" alt="">
        </div>
        <div class="col-12  col-md-2 marcas-items">
          <img id="logo__rent" src="media/assets/img/landing/logos/logo-rent.svg" alt="">
        </div>
        <div class="col-12 col-md-2 marcas-items">
          <img id="logo__capital" src="media/assets/img/landing/logos/logo-capitalccima.png" alt="">
        </div>
        <div class="col-12 col-md-12 marcas-items">
          <img id="logo__sherpa" src="media/assets/img/landing/logos/logo-sherpa.png" alt="">
        </div>
      </div>
    </section>

    <section id="n-numeros" class="seccion">

      <div class="row bg-azul">
        <div class="col-6 col-md-3 c-num">
          <p><span class="numero"> +18</span></p>
          <p class="futura-med">años de Experiencia</p>
        </div>
        <div class="col-6 col-md-3 c-num">
          <p><span class="numero"> +1,200</span></p>
          <p class="futura-med">clientes satisfechos</p>
        </div>
        <div class="col-6 col-md-3 c-num">
          <p><span class="numero"> +950,000</span></p>
          <p class="futura-med">m2 de construccion</p>
        </div>
        <div class="col-6 col-md-3 c-num">
          <p><span class="numero"> +7</span></p>
          <p class="futura-med">parques industriales</p>
        </div>
      </div>
    </section>
    <section id="clientes" class="seccion">
      <h2>Clientes</h2>
      <div class="row just-logos c-clientes">
        <div class="col-3 col-md-1 cliente-log">
          <img src="media/assets/img/landing/logo10.png " alt="">
        </div>

        <div class="col-3 col-md-1 cliente-log">
          <img src="media/assets/img/landing/logo9.png " alt="">
        </div>

        <div class="col-3 col-md-1 cliente-log">
          <img src="media/assets/img/landing/logo8.png" alt="">
        </div>

        <div class="col-3 col-md-1 cliente-log">
          <img src="media/assets/img/landing/logo6.png" alt="">
        </div>

        <div class="col-3 col-md-1 cliente-log ">
          <img src="media/assets/img/landing/logo3.png" alt="">
        </div>
        <div class="col-3 col-md-1 cliente-log ">
          <img src="media/assets/img/landing/logo1.png" alt="">
        </div>
        <div class="col-3 col-md-1 cliente-log ">
          <img src="media/assets/img/landing/logo5.png" alt="">
        </div>
        <div class="col-3 col-md-1 cliente-log ">
          <img src="media/assets/img/landing/logo11.png" alt="">
        </div>
      </div>
    </section>

    <section id="PlanAccion" class="seccion bg-gris">
      <h2>¡Es Hora de Invertir!</h2>
      <div class="row cc-ccima plan__accion ">
        <div id="Plan-1" class="col-10 col-md-2 ">
          <div class="acc_items">
            <span class="numero__accion">1</span>
            <p class="futura-med blue-txt">Elige la Ubicación Perfecta para tu Inversión</p>
          </div>
          <div class="plan-icono">
            <img src="media/assets/img/landing/iconos/Navetec_Mapa.svg" alt="">
          </div>
          <!-- <a class=" btn btn-primary boton" href="#"> Ver Ubicaciones </a> -->
        </div>
        <div id="Plan-2" class="col-10 col-md-2 ">
          <div class="acc_items">
            <span class="numero__accion ">2</span>
            <p class="futura-med white__text">Selecciona el Espacio Adecuado </p>
          </div>
          <div class="plan-icono">
            <img src="media/assets/img/landing/iconos/factory.svg" alt="">
          </div>

        </div>
        <div id="Plan-3" class="col-10 col-md-2 ">
          <div class="acc_items">
            <span class="numero__accion">3</span>
            <p class="futura-med blue-txt">Elige tu Plan de Financiamiento Ideal</p>
          </div>
          <div class="plan-icono">
            <img src="media/assets/img/landing/iconos/financiamiento.svg" alt="">
          </div>
          <!-- <a class=" btn btn-primary boton" href="#"> Contacta a tu Aliado Sherpa </a> -->
        </div>
        <div class="col-12 col-md-3">
          <div class="acc-btn">
            <h3>Invierte en Nave y Lotes Industriales </h3>
            <md-button ng-click="landing.showDialog()" class=" md-raised  blue-bg py-2 mt-10">
              <span class="futura-book white__text px-16 fs__22px">
                C<span class="to__lowercase">ontáctanos</span>
              </span>
            </md-button>
            <!--a class="boton" ng-click="landing.showDialog()" style="cursor: pointer;">Contáctanos</a-->
          </div>
        </div>

        <!--Acceso a comunidad CCIMA-->
      </div>
    </section>

    <section id="necesidades" class="seccion">
      <h2>Tenemos las soluciones a tus necesidades</h2>
      <div class="row">
        <div class="col-12 col-md-8">
          <picture>
            <source media="(min-width:650px)" srcset="media/assets/img/landing/Navetec_beneficios_03.jpg">
            <source media="(min-width:465px)" srcset="media/assets/img/landing/Navetec_beneficios_03.jpg">
            <img src="media/assets/img/landing/Navetec_beneficios_03.jpg" alt="">
          </picture>
        </div>
        <div class="col-12 col-md-4 soluciones">

          <div class="beneficios">
            <div class="ben-ico">
              <img src="media/assets/img/landing/navetec_point.svg" alt="">
            </div>
            <div class="ben__text">
              <p>Infraestructura Eléctrica <br>Subterránea de Media Tensión </p>
            </div>
          </div>
          <div class="beneficios">
            <div class="ben-ico">
              <img src="media/assets/img/landing/navetec_point.svg" alt=""></div>
            <div class="ben__text">
              <p>Autoabasto de Agua</p>
            </div>
          </div>
          <div class="beneficios">
            <div class="ben-ico">
              <img src="media/assets/img/landing/navetec_point.svg" alt=""></div>
            <div class="ben__text">
              <p>Administración del Parque</p>
            </div>
          </div>
          <div class="beneficios">
            <div class="ben-ico">
              <img src="media/assets/img/landing/navetec_point.svg" alt=""></div>
            <div class="ben__text">
              <p>Urbanización</p>
            </div>
          </div>
          <div class="beneficios">
            <div class="ben-ico">
              <img src="media/assets/img/landing/navetec_point.svg" alt=""></div>
            <div class="ben__text">
              <p>Carriers</p>
            </div>
          </div>

          <div class="beneficios">
            <div class="ben-ico">
              <img src="media/assets/img/landing/navetec_point.svg" alt=""></div>
            <div class="ben__text">
              <p>Seguridad 24/7 </p>
            </div>
          </div>
          <div class="beneficios">
            <div class="ben-ico">
              <img src="media/assets/img/landing/navetec_point.svg" alt="">
            </div>
            <div class="ben__text">
              <p>Business Center </p>
            </div>
          </div>
          <div class="beneficios">
            <div class="ben-ico">
              <img src="media/assets/img/landing/navetec_point.svg" alt=""></div>
            <div class="ben__text">
              <p>Ubicación Estratégica</p>
            </div>
          </div>
          <div class="beneficios">
            <div class="ben-ico">
              <img src="media/assets/img/landing/navetec_point.svg" alt=""></div>
            <div class="ben__text">
              <p>Mantenimiento</p>
            </div>
          </div>
          <div class="beneficios">
            <div class="ben-ico">
              <img src="media/assets/img/landing/navetec_point.svg" alt=""></div>
            <div class="ben__text">
              <p>Monitoreo de Circuito Cerrado </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- SECCCION VR NAVETEC 08122020 -->
    <section class="seccion bg-gris">
      <div class="row ">
        <div class="col-12">
          <h2>Conoce tu Próxima Nave</h2>
          <h3>Vive la Experiencia VR</h3>
          <div class="vr-cont-btn">
            <md-button ng-click="landing.showDialog()" class=" md-raised  blue-bg py-2 ml-5 mt-24">
              <span class="futura-book white__text px-16 fs__22px">
                I<span class="to__lowercase">nicia </span> A<span class="to__lowercase">hora </span>
              </span>
            </md-button>
          </div>
          <!--div class="c-boton vr__btn">
          <!--a class="boton" ng-click="landing.showDialog()" style="cursor: pointer;">Inicia Ahora</a>
        </div-->
        </div>
      </div>
      <div style="width: 97vw; height: 75vh; margin: 0 auto;">
        <iframe width="100%" height="100%"
          src="https://GrupoCCIMA.vr-360-tour.com/e/gcwBdNuPEJ4/e?hide_logo=true&hide_nadir=true&hidehotspotlabels=true&hidelive=true&hidetitle=true&initvars.autorotate.enabled=true&show_thumbnails=true"
          allowfullscreen allow="microphone; camera; gyroscope; accelerometer"></iframe>
      </div>
    </section>
    <!--NUESTRO COMPROMISO-->
    <section id="compromiso" class="seccion">
      <h2>Nuestro Compromiso contigo es: </h2>
      <div class="row cc-ccima c-compromiso">
        <div class="col-12 col-md-2 compro-items">
          <img src="media/assets/img/landing/iconos/icono1.svg" alt="">
          <p class="futura-med">Estándares de Construcción Internacionales </p>
        </div>
        <div class="col-12 col-md-2 compro-items">
          <img src="media/assets/img/landing/iconos/icono2.svg" alt="">
          <p class="futura-med">Seguridad de tu Inversión </p>
        </div>
        <div class="col-12 col-md-2 compro-items">
          <img id="comunidadccima" src="media/assets/img/landing/logo-cc-darkblue.png" alt="">
          <p class="futura-med">Acceso a comunidad CCIMA </p>
        </div>
        <div class="col-12 col-md-2 compro-items">
          <img src="media/assets/img/landing/iconos/icono4.svg" alt="">
          <p class="futura-med">Ubicaciones Estrategicas </p>
        </div>
        <div class="col-12 col-md-2 compro-items">
          <img src="media/assets/img/landing/iconos/icono3.svg" alt="">
          <p class="futura-med">Plusvalía de tu Inversión</p>
        </div>
        <!--Acceso a comunidad CCIMA-->
      </div>
    </section>
    <!--Llamado a la Accion-->
    <section id="cta " class="seccion">
      <div class="row bg-azul">
        <div class="col-12 col-md-12 cta-cont">
          <h2 class="futura-med" style="color:#fff">Esta es tu Oportunidad para Hacer Crecer tu Inversión </h2>
        </div>
        <div class="col-12 cta-cont">
          <md-button ng-click="landing.showDialog()" class=" md-raised  blue-bg py-2 ml-40 mt-24">
            <span class="futura-book white__text px-16 fs__22px">
              A<span class="to__lowercase">parta</span> A<span class="to__lowercase">hora </span>
            </span>
          </md-button>
          <!--a class="btn btn-primary boton" href="#!/Navetec-Santa_Rosa_Business_Park"> Aparta Ahora </a-->
        </div>
        <div class="col-12 cta-cont">
          <h3 class="futura-med">Aprovecha la Preventa de Lotes y Naves Industriales </h3>
        </div>
      </div>
    </section>
    <!--Llamado a la Accion-->
    <section id="plan-pasos" class="seccion">
      <h2>Estos Son Los Tres Pasos Para Iniciar Tu Inversión Extraordinaria   </h2>
      <div class="row cc-ccima t-centro">
        <div class="col-12 ">
          <img src="media/assets/img/landing/pasos__mountain.svg">
        </div>
      </div>
      <div class="row pasos-c-items">
        <div class="col-md-3 pasos__items">
          <img class="pasos-img" src="media/assets/img/landing/iconos/Navetec-uno.svg" alt="">
          <p class="futura-med">Contacta a tu (Asesor)<br> Aliado Sherpa.</p>
        </div>
        <div class="col-md-3 pasos__items">
          <img class="pasos-img" src="media/assets/img/landing/iconos/Navetec-dos.svg" alt="">
          <p class="futura-med">Selecciona la ubicación,<br> Lote y Plan perfecto.</p>
        </div>
        <div class="col-md-3 pasos__items">
          <img class="pasos-img" src="media/assets/img/landing/iconos/Navetec-tres.svg" alt="">
          <p class="futura-med">Aparta desde <br>$10,000.00</p>
        </div>
      </div>
      <div class="row">
        <div class="col-12 d-flex justify-content-center">
          <div class="c-boton">
            <md-button ng-click="landing.showDialog()" class=" md-raised  blue-bg py-2 ">
              <span class="futura-book white__text px-16 fs__22px">
                I<span class="to__lowercase">nicia</span> A<span class="to__lowercase">hora</span>
              </span>
            </md-button>
            <!--a class="boton" ng-click="landing.showDialog()" style="cursor: pointer;">Inicia Ahora</a-->
          </div>
        </div>
      </div>
    </section>
    <!--MOLESTIAS-->
    <section id="Perdida" class="seccion bg-gris">
      <h2 class="futura-med">Esto está ocurriendo mientras te decides a invertir</h2>
      <div class="row cc-ccima c-compromiso ">

        <div class="col-12 col-md-2 compro-items">
          <img src="media/assets/img/landing/iconos/icono5.svg" alt="">
          <p class="futura-med">Devaluación de tu Capital
          </p>
        </div>
        <div class="col-12 col-md-2 compro-items">
          <img src="media/assets/img/landing/iconos/icono6.svg" alt="">
          <p class="futura-med">Pierdes Precio de Preventa
          </p>
        </div>
        <div class="col-12  col-md-2 compro-items">
          <img src="media/assets/img/landing/iconos/icono7.svg" alt="">
          <p class="futura-med">Pierdes Disponibilidad</p>
        </div>
        <div class="col-12 col-md-2 compro-items">
          <img src="media/assets/img/landing/iconos/icono8.svg" alt="">
          <p class="futura-med">Pierdes atractivos Rendimientos<br>(No crecer tu Capital)</p>
        </div>
      </div>
      <div class="row">
        <div class="col-12 d-flex justify-content-center">
          <md-button ng-click="landing.showDialog()" class=" md-raised  blue-bg py-2 ml-40 mt-24">
            <span class="futura-book white__text px-16 fs__22px">
              A<span class="to__lowercase">parta</span> A<span class="to__lowercase">hora </span>
            </span>
          </md-button>
        </div>
      </div>
    </section>
    <!--FORMULARIO -->


        <section id="empatia" class="seccion">
          <h2>¡No lo pienses más! <br>Decídete a invertir de manera Inteligente.</h2>
          <div class="row cc-ccima">
            <div class="col-12 col-md-4 order-md-2">
              <picture>
                <source media="(min-width:650px)" srcset="media/assets/img/landing/navetec_exito.jpg">
                <source media="(min-width:465px)" srcset="media/assets/img/landing/navetec_exito.jpg">
                <img src="media/assets/img/landing/navetec_exito.jpg" alt="">
              </picture>
            </div>
            <div class="col-12 col-md-4 order-md-1 text-empatia">
              <h3 class="futura-med">Escribamos  Juntos Un Historia Extraordinaria.</h3>
              <md-button ng-click="landing.showDialog()" class=" md-raised  blue-bg py-2  mt-24">
                <span class="futura-book white__text px-16 fs__22px">
                  I<span class="to__lowercase">nicia</span> A<span class="to__lowercase">hora </span>
                </span>
              </md-button>
              <!--div class="c-boton">
          <a class="boton" ng-click="landing.showDialog()" style="cursor: pointer;">Inicia Ahora</a>
        </div-->
            </div>

          </div>
        </section>

        <footer>
          <div class="row footer-contenedor">
            <div class="col-12 col-md-4">
              </ul>
              <p class="futura-med"><span>Síguenos en nuestras Redes Sociales</span></p>
              <ul class="redes-sociales">
                <li class="redes-items">
                  <img src="media/assets/img/landing/redessociales/facebook.svg" alt="">
                </li>
                <li class="redes-items">
                  <img src="media/assets/img/landing/redessociales/whatsapp.svg" alt="">
                </li>
                <li class="redes-items">
                  <img src="media/assets/img/landing/redessociales/linkedin.svg" alt="">
                </li>
              </ul>
            </div>
            <div class="col-12 col-md-4">
              <p class="futura-med"><span>Contáctanos </span></p>
              <ul>
                <li><a target="_blank" href="https://goo.gl/maps/115fUdcfB4CJdiPr6">
                    <b> Oficinas Comerciales: </b> Blvd. Bernardo Quintana 88, Carretas, 76050 Santiago de Querétaro,
                    Qro.</a></li>
                <li><a target="_blank"
                    href="https://www.google.com.mx/maps/place/GRUPO+CCIMA+S.A.+DE+C.V./@20.7207906,-100.4411124,17z/data=!3m1!4b1!4m5!3m4!1s0x85d359d5e049ded3:0xdbdc71bed86b2fb3!8m2!3d20.7207906!4d-100.4389237">
                    <b>Corporativo:</b> Carretera Federal 57, KM 17.5, Santa Rosa Jáuregui, C.P. 76220, Santiago de
                    Querétaro, Qro.</a></li>
              </ul>
            </div>
            <div class="col-12 col-md-4">
              <p class="futura-med"><span></span></p>
              <ul id="lista-footer" class="">
                <li><a href="tel:+524421275214"> <b>Teléfono:</b> 442 291 2223 </a></li>
                <li><a href="mailto:hola.habitta@grupoccima.com"><b>Email:</b> hola@grupoccima.com</a></li>
                <li><a href=""><b>Horario Lun-Vie:</b> 10:00 A.M. - 06:30 P.M.</a></li>
                <li><a href=""><b>Horario Sáb-Dom:</b>10:00 A.M. - 06:00 P.M.</a></li>
                <li></li>
              </ul>
            </div>
          </div>
          <div class="flotante">
            <div class="c-flotante">
              <a href="https://api.whatsapp.com/send?phone=+5214424571679" target="_blank">
                <img src="media/assets/img/landing/redessociales/whatsapp.svg">
                <p class="futura-med">Whatsapp</p>
              </a>
            </div>
          </div>
        </footer>

        <div ng-class="landing.messageDialogDisplay"
          style="width: 320px; height: 144px; top:0; right:0; bottom:0; left:0; margin:auto; position: fixed; background-color:white; z-index: 1002; box-shadow: 0 12px 48px rgba(149,157,165,.3) !important;">
          <div style="font-size: 16px; padding: 24px;">
            Hemos recibido tus datos, muy pronto nos comunicaremos contigo

            <div layout="row" layout-align="end end" style="padding-top: 10px;">
              <md-button ng-click="landing.hideMessageDialog()"
                style="background-color:#1074e7 !important; color:white;">
                Cerrar</md-button>
            </div>
          </div>
        </div>
        <div ng-class="landing.dialogDisplay"
          style="overflow-y:scroll; width: 100%; height: 100vh; top:0; left:0; position: fixed; background-color:white; z-index: 1031;">

          <div layout="row" style="padding:16px;">
            <div layout="row" layout-align="start center" flex="50">
              Contáctanos
            </div>
            <div layout="row" layout-align="end center" flex="50">
              <span style="cursor:pointer;" ng-click="landing.hideDialog()">X</span>
            </div>
          </div>

          <div layout="column" layout-align="start center">

            <div style="padding:24px 0 64px 0; border-bottom: 1px #ccc solid;">
              <div style="font-size: 24px; text-align:center;">
                Estás a un click de hacer una inversión extraordinaria
              </div>
              <div style="font-size: 16px; font-weight:light; text-align:center;">
                Permite que uno de nuestros Aliados Sherpa te asesore
              </div>
            </div>

            <form class="py-40" name="newUserForm" layout="column">

              <md-input-container class="md-block" style="width:320px;">

                <label class="fs__14px">Nombre(s)</label>

                <input name="newUserName" id="newUserName" type="text" ng-model="landing.newLead.name" autocomplete="off" required="true"
                  pattern="[a-zA-Z\u00E0-\u00FC\u00C0-\u00DC\u00f1\u00d1\u0020]{1,45}">

                <div ng-messages="newUserForm.newUserName.$error" multiple md-auto-hide="false">

                  <div ng-message="pattern">
                    Debe contener hasta 45 caracteres, sin digitos ni caracteres especiales
                  </div>

                </div>

              </md-input-container>

              <md-input-container class="md-block" style="width:320px;">

                <label class="fs__14px">Apellido(s)</label>

                <input name="newUserLastName" id="newUserLastName" type="text" ng-model="landing.newLead.last_name" autocomplete="off" required="true"
                  pattern="[a-zA-Z\u00E0-\u00FC\u00C0-\u00DC\u00f1\u00d1\u0020]{1,45}">

                <div ng-messages="newUserForm.newUserLastName.$error" multiple md-auto-hide="false">

                  <div ng-message="pattern">
                    Debe contener hasta 45 caracteres, sin digitos ni caracteres especiales
                  </div>

                </div>

              </md-input-container>

              <md-input-container class="w100 md-block">

                <label>Correo eléctronico</label>

                <input name="newUserEmail" id="newUserEmail" type="email" ng-model="landing.newLead.email" autocomplete="off" required="true" 
                  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">

                <div ng-messages="newUserForm.newUserEmail.$error" multiple md-auto-hide="false">

                  <div ng-message="pattern">
                    Correo electrónico invalido
                  </div>

                </div>

              </md-input-container>

              <md-input-container class="w100 md-block">

                <label>Número de teléfono</label>

                <input name="newUserPhone" id="newUserPhone" ng-model="landing.newLead.phone" type="text" autocomplete="off" required="true"
                  pattern="[0-9]{10}">

                <div ng-messages="newUserForm.newUserPhone.$error" multiple md-auto-hide="false">

                  <div ng-message="pattern">
                    Debe contener unicamente 10 digitos 0-9
                  </div>

                </div>

              </md-input-container>

              <md-button type="submit" class="md-raised blue-bg">
                <span class="futura-book white__text fs__16px">
                  E<span class="to__lowercase">nviar</span>
                </span>
              </md-button>

            </form>

          </div>
        </div>
</body>

</html>