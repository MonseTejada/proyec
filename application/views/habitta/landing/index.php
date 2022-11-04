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
  <link rel="stylesheet" type="text/css" href="media/assets/css/style.css">
  <link rel="stylesheet" type="text/css" href="media/assets/css/landing/main2.css">
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
        <img class="logo-nav" src="media/assets/img/landing/logos/logo-habitta.svg" alt="Navetec">
      </a>

      <!-- Toggler/collapsibe Button -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Navbar links -->
      <div class="collapse navbar-collapse justify-content-end barra-nav" id="collapsibleNavbar">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link " style="color:#0E2C56;" href=""></a>
          </li>
          <li class="nav-item ">
            <a class="nav-link " style="color:#0E2C56;" href=""></a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" style="color:#0E2C56;" href=""></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <main class="container-fluid ">
    <div class="c-hero">
      <div class="row hero ">
        <div class="col-12 cont-top">
          <div class="logo">
            <img src="media/assets/img/landing/habitta_blanco.svg" alt="">
          </div>
          <p class="hero-p futura-med"><span class="hero-title">POR TI, POR ELLOS, POR USTEDES </span></p>
          <p><span class="hero-subtitle futura-med">Desarrollos Habitacionales</span></p>


          <md-button ng-click="landing.showDialog()" class=" md-raised  blue-bg py-2 ">
            <span class="futura-book white__text px-16 fs__22px">
              I<span class="to__lowercase">nvierte en tu </span>P<span class="to__lowercase">atrimonio</span>
          </md-button>

          <!--a class="boton" ng-click="landing.showDialog()" style="cursor: pointer;"> Ingresar</a-->
        </div>
        <div class="col-12">
          <div class="row c-promociones">
            <div class="col-4 promo-items">
              <p class="futura-med">48 meses sin Intereses</p>
            </div>
            <div class="col-4 promo-items">
              <p class="futura-med">Crédito Directo</p>
            </div>
            <div class="col-4 promo-items">
              <p class="futura-med">Aparta con $10,000 MXN</p>
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
        <div class="col-12 col-md-12 col-lg-4 t-centro">
          <picture>
            <source media="(min-width:650px)" srcset="media/assets/img/landing/habitta_problemas.jpg">
            <source media="(min-width:465px)" srcset="media/assets/img/landing/habitta_problemas.jpg">
            <img src="media/assets/img/landing/habitta_problemas.jpg" alt="">
          </picture>
        </div>
        <div class="col-12 col-md-12 col-lg-6">
          <div class="c-problemas">
            <div class="p-itmes">
              <div class="problemas-items">
                <div class="check">
                  <img src="media/assets/img/landing/iconos/Navetec_garrapata.svg" alt="">
                </div>
                <div class="problema">
                  <p class="futura-med">No encontrar financiamiento</p>
                </div>
              </div>
              <div class="problemas-items">
                <div class="check">
                  <img src="media/assets/img/landing/iconos/Navetec_garrapata.svg" alt="">
                </div>
                <div class="problema">
                  <p class="futura-med">Vehículos de inversión riesgosos</p>
                </div>
              </div>
              <div class="problemas-items">
                <div class="check">
                  <source>
                  <img src="media/assets/img/landing/iconos/Navetec_garrapata.svg" alt="">
                </div>
                <div class="problema">
                  <p class="futura-med">Crisis económica</p>
                </div>
              </div>
            </div>
            <div class="p-itmes">
              <div class="problemas-items">
                <div class="check">
                  <img src="media/assets/img/landing/iconos/Navetec_garrapata.svg" alt="">
                </div>
                <div class="problema">
                  <p class="futura-med">Créditos con intereses elevados</p>
                </div>
              </div>
              <div class="problemas-items">
                <div class="check">
                  <img src="media/assets/img/landing/iconos/Navetec_garrapata.svg" alt="">
                </div>
                <div class="problema">
                  <p class="futura-med">Exceso de trámites</p>
                </div>
              </div>
              <div class="problemas-items">
                <div class="check">
                  <img src="media/assets/img/landing/iconos/Navetec_garrapata.svg" alt="">
                </div>
                <div class="problema">
                  <p class="futura-med">Riesgo de perder tu dinero</p>
                </div>
              </div>
            </div>
          </div>
          <div class="c-boton pro-boton">
            <md-button ng-click="landing.showDialog()" class=" md-raised  blue-bg py-2  ">
              <span class="futura-book white__text px-16 fs__22px">
                D<span class="to__lowercase">éjanos</span> A<span class="to__lowercase">yudarte</span>
              </span>
            </md-button>
            <!--a class="boton" ng-click="landing.showDialog()" style="cursor: pointer;">Déjanos Ayudarte</a-->
          </div>
        </div>
      </div>
    </section>
    <section id="empatia" class="seccion bg-gris">
      <h2>Cumplir tu sueño es nuestra meta</h2>
      <div class="row cc-ccima">
        <div class="col-12 col-md-12 col-lg-4 order-lg-2 t-centro">
          <picture>
            <source media="(min-width:650px)" srcset="media/assets/img/landing/familia.jpg">
            <source media="(min-width:465px)" srcset="media/assets/img/landing/familia.jpg">
            <img src="media/assets/img/landing/familia.jpg" alt="">
          </picture>
        </div>
        <div class="col-12 col-md-12 col-lg-4 order-lg-1 text-empatia">
          <h3 class="futura-med">Te acompañamos desde la selección de tu lote, hasta la realización del hogar de tus
            sueños </h3>
          <div class="c-boton">

            <md-button ng-click="landing.showDialog()" class=" md-raised  blue-bg py-2 ml-1 ">
              <span class="futura-book white__text px-16 fs__22px">
                I<span class="to__lowercase">nicia</span> A<span class="to__lowercase">hora</span>
              </span>
            </md-button>
            <!--a class="boton" ng-click="landing.showDialog()" style="cursor: pointer;">Inicia Ahora</a-->
          </div>
        </div>
      </div>
    </section>

    <section id="historia" class="seccion">
      <h2 class="futura-med"> Más de 18 años guiando a la CCIMA a personas extraordinarias </h2>
      <div class="row cc-ccima">
        <div class="col-12 col-md-12 col-lg-8">
          <video width="100%" height="" autoplay muted="muted" loop>
            <source src="media/assets/video/sherpa.mp4" type="video/mp4">
            <source src="" type="video/ogg">
          </video>
        </div>
        <div class="col-12 col-md-12 col-lg-4">

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
                <p class="futura-med">2006</p>
              </div>
              <div class="text-histo">
                <p class="futura-med"> Conformacion Linea de Renta de Maquinaria "RENT SOLUTIONS" </p>
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
                <p class="futura-med"> Primera Colaboración con la Industria Automotriz </p>
              </div>
            </div>
            <div class="historia-items">
              <div class="date-histo">
                <img src="media/assets/img/landing/navetec_point.svg" alt="">
                <p class="futura-med">2015</p>
              </div>
              <div class="text-histo">
                <p class="futura-med">Conformación Línea Desarrollos Industriales “NAVETEC By CCIMA”</p>
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
                <p class="futura-med"> Conformacion de Línea Desarrollos Habitacionales “HABITTA By CCIMA” </p>
              </div>
            </div>
            <div class="historia-items">
              <div class="date-histo">
                <img src="media/assets/img/landing/navetec_point.svg" alt="">
                <p class="futura-med">2020</p>
              </div>
              <div class="text-histo">
                <p class="futura-med">Primer Macro Desarrollo Habitacional PorttoBlanco </p>
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
          <img id="logo__navetec" src="media/assets/img/landing/logos/logo-navetec.svg" alt="">

        </div>
        <div class="col-12 col-md-2 marcas-items ">
          <img id="logo__contruye" src="media/assets/img/landing/logos/logo-construye.svg" alt="">
        </div>

        <div class="col-12 col-md-2 marcas-items">
          <img id="logo__habitta" src="media/assets/img/landing/logos/logo-habitta.svg" alt="">
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
        <div class="col-6 col-md-6 col-lg-3 c-num">
          <p><span class="numero"> +18</span></p>
          <p class="futura-med">años de Experiencia</p>
        </div>
        <div class="col-6 col-md-6 col-lg-3 c-num">
          <p><span class="numero"> +1,200</span></p>
          <p class="futura-med">clientes satisfechos</p>
        </div>
        <div class="col-6 col-md-6 col-lg-3 c-num">
          <p><span class="numero"> +950,000</span></p>
          <p class="futura-med">m2 de construccion</p>
        </div>
        <div class="col-6 col-md-6 col-lg-3 c-num">
          <p><span class="numero"> +136</span></p>
          <p class="futura-med">hectáreas de desarrollos habitacionales</p>
        </div>
      </div>
    </section>
    <section id="clientes" class="seccion ">
      <h2>Clientes</h2>
      <div class="row just-logos c-clientes">
        <div class="col-3 col-md-3 col-lg-1 cliente-log">
          <img src="media/assets/img/landing/logo10.png " alt="">
        </div>

        <div class="col-3 col-md-3 col-lg-1 cliente-log">
          <img src="media/assets/img/landing/logo9.png " alt="">
        </div>

        <div class="col-3 col-md-3 col-lg-1 cliente-log">
          <img src="media/assets/img/landing/logo8.png" alt="">
        </div>

        <div class="col-3 col-md-3 col-lg-1 cliente-log" style="display: none">
          <img src="media/assets/img/landing/logo6.png" alt="">
        </div>

        <div class="col-3 col-md-3 col-lg-1 cliente-log ">
          <img src="media/assets/img/landing/logo3.png" alt="">
        </div>
        <div class="col-3 col-md-3 col-lg-1 cliente-log ">
          <img src="media/assets/img/landing/logo1.png" alt="">
        </div>
        <div class="col-3 col-md-3 col-lg-1 cliente-log ">
          <img src="media/assets/img/landing/logo5.png" alt="">
        </div>
        <div class="col-3 col-md-3 col-lg-1 cliente-log ">
          <img src="media/assets/img/landing/logo11.png" alt="">
        </div>
      </div>
    </section>

    <section id="PlanAccion" class="seccion bg-gris">
      <h2>¡Es Hora de Invertir!</h2>
      <div class="row cc-ccima plan__accion ">
        <div id="Plan-1" class="col-8 col-md-5 col-lg-4 col-xl-2">
          <div class="acc_items">
            <span class="numero__accion">1</span>
            <p class="futura-med blue-txt">Selecciona la Ubicación Perfecta </p>
          </div>
          <div class="plan-icono">
            <img src="media/assets/img/landing/map__blue.svg" alt="">
          </div>
          <!-- <a class=" btn btn-primary boton" href="#"> Ver Ubicaciones </a> -->
        </div>
        <div id="Plan-2" class="col-8 col-md-5  col-lg-4 col-xl-2 ">
          <div class="acc_items">
            <span class="numero__accion ">2</span>
            <p class="futura-med white__text"> Elige la Dimensión Ideal de tu Lote </p>
          </div>
          <div class="plan-icono">
            <img src="media/assets/img/landing/lote__white.svg" alt="">
          </div>

        </div>
        <div id="Plan-3" class="col-8 col-md-5 col-lg-4 col-xl-2 ">
          <div class="acc_items">
            <span class="numero__accion">3</span>
            <p class="futura-med blue-txt">Elige tu Plan de Financiamiento Correcto</p>
          </div>
          <div class="plan-icono">
            <img src="media/assets/img/landing/iconos/financiamiento.svg" alt="">
          </div>
          <!-- <a class=" btn btn-primary boton" href="#"> Contacta a tu Aliado Sherpa </a> -->
        </div>
        <div class="col-12 col-md-5 col-lg-4 col-xl-2">
          <div class="acc-btn">
            <h3>Transforma tu vida Ahora</h3>
            <md-button ng-click="landing.showDialog()" class=" md-raised  blue-bg py-2 ">
              <span class="futura-book white__text px-16 fs__22px">
                C<span class="to__lowercase">ontáctanos </span>
              </span>
            </md-button>

            <!-- a class="boton" ng-click="landing.showDialog()" style="cursor: pointer;">Contacto</a-->
          </div>
        </div>

        <!--Acceso a comunidad CCIMA-->
      </div>
    </section>

    <!--NUESTRO COMPROMISO-->
    <section id="compromiso" class="seccion ">
      <h2>Nuestro Compromiso contigo es: </h2>
      <div class="row cc-ccima c-compromiso">
        <div class="col-12 col-md-6 col-lg-2 compro-items">
          <img src="media/assets/img/landing/arboles.svg" alt="">
          <p class="futura-med">Excelentes Amenidades </p>
        </div>
        <div class="col-12 col-md-6 col-lg-2 compro-items">
          <img src="media/assets/img/landing/departamentos.svg" alt="">
          <p class="futura-med">Zona Exclusiva</p>
        </div>
        <div class="col-12 col-md-6 col-lg-2 compro-items">
          <img src="media/assets/img/landing/edificio.svg" alt="">
          <p class="futura-med">Todo lo que Necesitas<br> en un Solo Lugar</p>
        </div>
        <div class="col-12 col-md-6 col-lg-2 compro-items">
          <img src="media/assets/img/landing/sustentable.svg" alt="">
          <p class="futura-med">Desarrollo Sustentable</p>
        </div>
        <div class="col-12 col-md-6 col-lg-2 compro-items">
          <img src="media/assets/img/landing/seguridad.svg" alt="">
          <p class="futura-med">Seguridad 24/7</p>
        </div>
        <div class="col-12 col-md-6 col-lg-2 compro-items">
          <img src="media/assets/img/landing/huella.svg" alt="">
          <p class="futura-med">Pet Friendly</p>
        </div>
      </div>
    </section>
    <section>
      <div id="amenidades" class="bg-azul">

        <h2 style="color:#FFF;">Todas nuestras Amenidades </h2>
        <div class="row  conte-ame">
          <div class="col-6 col-md-4 c-amenidad">
            <img src="media/assets/img/habitta/portto-blanco/icons/master/towers.svg">
            <h5><strong>Torres Departamentales</strong> </h5>
          </div>
          <div class="col-6 col-md-4 c-amenidad ">
            <img src="media/assets/img/habitta/portto-blanco/icons/master/forest.svg">
            <h5><strong>Áreas Ecológicas</strong> </h5>
          </div>
          <div class="col-6 col-md-4 c-amenidad ">
            <img src="media/assets/img/habitta/portto-blanco/icons/master/park.svg">
            <h5><strong>Kids Park</strong> </h5>
          </div>
          <div class="col-6 col-md-4 c-amenidad ">
            <img src="media/assets/img/habitta/portto-blanco/icons/master/lake.svg">
            <h5><strong>Lago</strong> </h5>
          </div>

          <div class="col-6 col-md-4 c-amenidad ">
            <img src="media/assets/img/habitta/portto-blanco/icons/master/hospital.svg">
            <h5><strong>Hospital</strong> </h5>
          </div>
          <div class="col-6 col-md-4 c-amenidad ">
            <img src="media/assets/img/habitta/portto-blanco/icons/master/horse.svg">
            <h5><strong>Club Hípico</strong> </h5>
          </div>
          <div class="col-6 col-md-4 c-amenidad ">
            <img src="media/assets/img/habitta/portto-blanco/icons/master/shop.svg">
            <h5><strong>Área Comercial</strong> </h5>
          </div>
          <div class="col-6 col-md-4 c-amenidad ">
            <img src="media/assets/img/habitta/portto-blanco/icons/master/pet.svg">
            <h5><strong>Pet Friendly Park</strong> </h5>
          </div>

          <div class="col-6 col-md-4 c-amenidad ">
            <img src="media/assets/img/habitta/portto-blanco/icons/master/portto.svg">
            <h5><strong>Club PorttoBlanco</strong> </h5>
          </div>
          <div class="col-6 col-md-4 c-amenidad ">
            <img src="media/assets/img/habitta/portto-blanco/icons/master/book.svg">
            <h5><strong>Escuela</strong> </h5>
          </div>
          <div class="col-6 col-md-4 c-amenidad ">
            <img src="media/assets/img/habitta/portto-blanco/icons/master/fitness.svg">
            <h5><strong>Fitness Park</strong> </h5>
          </div>
          <div class="col-6 col-md-4 c-amenidad ">
            <img src="media/assets/img/habitta/portto-blanco/icons/master/zen.svg">
            <h5><strong>Zen Park</strong> </h5>
          </div>

          <div class="col-6 col-md-4 c-amenidad ">
            <img src="media/assets/img/habitta/portto-blanco/icons/master/sport.svg">
            <h5><strong>Sport Zone</strong> </h5>
          </div>
          <div class="col-6 col-md-4 c-amenidad ">
            <img src="media/assets/img/habitta/portto-blanco/icons/master/market.svg">
            <h5><strong>Supermercado</strong> </h5>
          </div>
          <div class="col-12 col-md-4 c-amenidad">
            <img src="media/assets/img/habitta/portto-blanco/icons/master/nautica.svg">
            <h5><strong>Plaza Náutica PorttoBlanco</strong> </h5>
          </div>
        </div>

      </div>
    </section>

    <section class="seccion">
      <div class="vr">
        <h2>Vive la Experiencia VR de Nuestas Amenidades</h2>
        <div class="row">
          <div class="col-12 col-md-4 cont-vr">
            <a target="_blank" rel="noopener noreferrer"
              href="https://GrupoCCIMA.vr-360-tour.com/e/gcwBdHmQ2UA/e?hide_nadir=true&hidelive=true&initvars.autorotate.enabled=true&show_thumbnails=true">
              <img src="media/assets/img/habitta/portto-blanco/vr/PorttoBlanco_PlazaNautica_Vr.jpg">
              <h5>Plaza Náutica Portto Blanco</h5>
            </a>
          </div>
          <!---->
          <div class="col-12 col-md-4 cont-vr">
            <a target="_blank" rel="noopener noreferrer"
              href="https://GrupoCCIMA.vr-360-tour.com/e/gcwBdHnitVw/e?hide_nadir=true&hidelive=true&initvars.autorotate.enabled=true&show_thumbnails=true">
              <img src="media/assets/img/habitta/portto-blanco/vr/PorttoBlanco_ClubHipico_Vr.jpg">
              <h5>Club Hípico</h5>
            </a>
          </div>
          <div class="col-12 col-md-4 cont-vr">
            <a target="_blank" rel="noopener noreferrer"
              href="https://GrupoCCIMA.vr-360-tour.com/e/gcwBdHnh50o/e?hide_nadir=true&hidelive=true&initvars.autorotate.enabled=true&show_thumbnails=true">
              <img src="media/assets/img/habitta/portto-blanco/vr/PorttoBlanco_ClubPorttoBlanco_Vr.jpg">
              <h5>Club Portto Blanco</h5>
            </a>
          </div>
          <div class="col-12 col-md-4 cont-vr">
            <a target="_blank" rel="noopener noreferrer"
              href="https://GrupoCCIMA.vr-360-tour.com/e/gcwBdHnXD2A/e?hide_nadir=true&hidelive=true&initvars.autorotate.enabled=true&show_thumbnails=true">
              <img src="media/assets/img/habitta/portto-blanco/vr/PorttoBlanco_Pet-park_Vr.jpg">
              <h5>Pet Friendly Park</h5>
            </a>
          </div>

          <div class="col-12 col-md-4 cont-vr">
            <a target="_blank" rel="noopener noreferrer"
              href="https://GrupoCCIMA.vr-360-tour.com/e/gcwBdHncOPc/e?hide_nadir=true&hidelive=true&initvars.autorotate.enabled=true&show_thumbnails=true">
              <img src="media/assets/img/habitta/portto-blanco/vr/PorttoBlanco_KidsPark_Vr.jpg">
              <h5>Kids Park</h5>
            </a>
          </div>

          <div class="col-12 col-md-4 cont-vr">
            <a target="_blank" rel="noopener noreferrer"
              href="https://GrupoCCIMA.vr-360-tour.com/e/gcwBdHndhQc/e?hide_nadir=true&hidelive=true&initvars.autorotate.enabled=true&show_thumbnails=true">
              <img src="media/assets/img/habitta/portto-blanco/vr/PorttoBlanco_ZenPark_Vr.jpg">
              <h5>Zen Park</h5>
            </a>
          </div>

          <div class="col-12 col-md-4 cont-vr">
            <a target="_blank" rel="noopener noreferrer"
              href="https://GrupoCCIMA.vr-360-tour.com/e/gcwBdHngp6g/e?hide_nadir=true&hidelive=true&initvars.autorotate.enabled=true&show_thumbnails=true">
              <img src="media/assets/img/habitta/portto-blanco/vr/PorttoBlanco_Gym_Vr.jpg">
              <h5>Fitness Park</h5>
            </a>
          </div>




          <div class="col-12 col-md-4 cont-vr">
            <a target="_blank" rel="noopener noreferrer"
              href="https://GrupoCCIMA.vr-360-tour.com/e/gcwBdHnkmJM/e?hide_nadir=true&hidelive=true&initvars.autorotate.enabled=true&show_thumbnails=true">
              <img src="media/assets/img/habitta/portto-blanco/vr/PorttoBlanco_Acceso_Vr.jpg">
              <h5>Acceso Principal</h5>
            </a>
          </div>
          <div class="col-12 col-md-4 cont-vr">
            <a target="_blank" rel="noopener noreferrer"
              href="https://GrupoCCIMA.vr-360-tour.com/e/gcwBdHnjtkM/e?hide_nadir=true&hidelive=true&initvars.autorotate.enabled=true&show_thumbnails=true">
              <img src="media/assets/img/habitta/portto-blanco/vr/PorttoBlanco_AccesoCasas_Vr.jpg">
              <h5> Acceso a Casa-Condominio</h5>
            </a>
          </div>
          <!--vr items -->
        </div>

      </div>
    </section>

    <section id="cta " class="seccion">
      <div class="row bg-azul">
        <div class="col-12 col-md-12 cta-cont">
          <h2 class="cta__title futura-med " style="color:#fff">Construyamos el Hogar de tus Sueños </h2>
        </div>
        <div class="col-12 cta-cont">
          <md-button ng-click="landing.showDialog()" class=" md-raised  blue-bg py-2 ">
            <span class="futura-book white__text px-16 fs__22px">
              A<span class="to__lowercase">parta</span> a<span class="to__lowercase">hora</span>
            </span>
          </md-button>
          <!---a class="btn btn-primary boton" href="#!/portto_blanco"> aparta ahora </a-->
        </div>
        <div class="col-12 cta-cont">
          <h3 class="futura-med">Sin Revisión de Buró de Crédito </h3>
        </div>
      </div>
    </section>
    <!--Llamado a la Accion--> 
    <section id="plan-pasos" class="seccion">
      <h2>Estás a tres pasos del Hogar de tus Sueños<br> </h2>
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
          <p class="futura-med">Aparta con <br>$10,000.00</p>
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

        <div class="col-12 col-md-4 col-lg-2 compro-items">
          <img src="media/assets/img/landing/casa.svg" alt="">
          <p class="futura-med">Pierdes Precio de Preventa
          </p>
        </div>
        <div class="col-12 col-md-4 col-lg-2 compro-items">
          <img src="media/assets/img/landing/iconos/icono6.svg" alt="">
          <p class="futura-med">Aumento de Precio</p>
        </div>
        <div class="col-12 col-md-4 col-lg-2 compro-items">
          <img src="media/assets/img/landing/iconos/icono7.svg" alt="">
          <p class="futura-med">Pierdes Disponibilidad</p>
        </div>

      </div>
      <div class="row">
        <div class="col-12 d-flex justify-content-center">
          <div class="c-boton">
            <md-button ng-click="landing.showDialog()" class=" md-raised  blue-bg py-2  ">
              <span class="futura-book white__text px-16 fs__22px">
                A<span class="to__lowercase">partar</span> A<span class="to__lowercase">hora</span>
              </span>
            </md-button>
            <!--a class="boton" ng-click="landing.showDialog()" style="cursor: pointer;">Apartar Ahora</a-->
          </div>
        </div>
      </div>
    </section>
    <!--FORMULARIO -->
  </div>

  <!-- SECCCION VR NAVETEC 08122020 -->
  <section>
    <div class="row ">
      <div class="col-12">
        <h2>Solo lo mejor Para tí </h2>
        <h3>Vive la Experiencia VR de PorttoBlanco</h3>
        <div class="c-boton vr__btn">
          <md-button ng-click="landing.showDialog()" class=" md-raised  blue-bg py-2 ">
            <span class="futura-book white__text px-16 fs__22px">
              C<span class="to__lowercase">ontáctanos </span>
            </span>
          </md-button>
          <!--a class="boton" ng-click="landing.showDialog()" style="cursor: pointer;">Inicia Ahora</a-->
        </div>
      </div>
    </div>
    <div style="width: 97vw; height: 75vh; margin: 0 auto;">
      <iframe width="100%" height="100%"
        src="https://GrupoCCIMA.vr-360-tour.com/e/gcwBdHnjtkM/e?hidehotspotlabels=true&hidelive=true&initvars.autorotate.enabled=true&show_thumbnails=true"
        allowfullscreen allow="microphone; camera; gyroscope; accelerometer"></iframe>
    </div>
  </section>
  <section id="empatia" class="seccion bg-gris">
    <h2></h2>
    <div class="row cc-ccima">
      <div class="col-12 col-md-12 col-lg-5 order-lg-2 t-centro">
        <picture>
          <source media="(min-width:650px)" srcset="media/assets/img/landing/familia_02.jpg">
          <source media="(min-width:465px)" srcset="media/assets/img/landing/familia_02.jpg">
          <img src="media/assets/img/landing/familia_02.jpg" alt="">
        </picture>
      </div>
      <div class="col-12 col-md-12 col-lg-5 order-lg-1 text-empatia">
        <h3 class="futura-med">No pierdas la Oportunidad de tener el Hogar de tus Sueños </h3>
        <div class="c-boton">
          <md-button ng-click="landing.showDialog()" class=" md-raised  blue-bg py-2">
            <span class="futura-book white__text px-16 fs__22px">
              I<span class="to__lowercase">nicia</span> A<span class="to__lowercase">hora</span>
            </span>
          </md-button>
          <!--a class="boton" ng-click="landing.showDialog()" style="cursor: pointer;">Inicia Ahora</a-->
        </div>
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
            <a href="">
              <img src="media/assets/img/landing/redessociales/facebook.svg" alt="">
            </a>
          </li>
          <li class="redes-items">
            <a href="">
              <img src="media/assets/img/landing/redessociales/whatsapp.svg" alt="">
            </a>
          </li>
          <li class="redes-items">
            <a href="">
              <img src="media/assets/img/landing/redessociales/linkedin.svg" alt="">
            </a>
          </li>
        </ul>
        <div class="cont__footer__logo">
          <div class="footer__logo">
          <img src="" alt="">
          </div>
        
        </div>

      </div>
      <div class="col-12 col-md-4">
        <p class="futura-med"><span>Contáctanos </span></p>
        <ul>
          <li><a target="_blank" href="https://goo.gl/maps/115fUdcfB4CJdiPr6">
              <b> Oficinas Comerciales: </b> Blvd. Bernardo Quintana 88, Carretas, 76050 Santiago de Querétaro, Qro.</a>
          </li>
          <li><a target="_blank"
              href="https://www.google.com.mx/maps/place/GRUPO+CCIMA+S.A.+DE+C.V./@20.7207906,-100.4411124,17z/data=!3m1!4b1!4m5!3m4!1s0x85d359d5e049ded3:0xdbdc71bed86b2fb3!8m2!3d20.7207906!4d-100.4389237">
              <b>Corporativo:</b> Carretera Federal 57, KM 17.5, Santa Rosa Jáuregui, C.P. 76220, Santiago de
              Querétaro, Qro.</a>
          </li>
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
          <p>Whatsapp</p>
        </a>
      </div>
    </div>
  </footer>

  <div ng-class="landing.messageDialogDisplay"
    style="width: 320px; height: 144px; top:0; right:0; bottom:0; left:0; margin:auto; position: fixed; background-color:white; z-index: 1002; box-shadow: 0 12px 48px rgba(149,157,165,.3) !important;">
    <div style="font-size: 16px; padding: 24px;">
      Hemos recibido tus datos, muy pronto nos comunicaremos contigo

      <div layout="row" layout-align="end end" style="padding-top: 10px;">
        <md-button ng-click="landing.hideMessageDialog()" style="background-color:#1074e7 !important; color:white;">
          Cerrar</md-button>
      </div>
    </div>
  </div>

  <div ng-class="landing.dialogDisplay"
    style="overflow-y:scroll; width: 100%; height: 100vh; top:0; position: fixed; background-color:white; z-index: 1031;">

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

      <form class="py-40" name="newUserForm" layout="column" ng-submit="landing.sendLeadData(16)">

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