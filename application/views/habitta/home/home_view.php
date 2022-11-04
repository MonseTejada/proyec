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

    <link rel="stylesheet" type="text/css" href="media/assets/css/helpers.css">

</head>
<body>

    <nav class="p-24 transparent__bg" layout="row" layout-align="space-between center" ng-controller="sideNavCtrl">
        <img src="media/assets/img/logos/logo-habitta.svg" alt="Hábitta" height="20px">
        <svg class="pointer" viewBox="0 0 24 24" width="24" ng-click="toggleLeft()">
            <path d="M3,18h18v-2H3V18z M3,13h18v-2H3V13z M3,6v2h18V6H3z" fill="#5F6368"></path>
        </svg>
    </nav>

    <md-sidenav class="cc-sidenav md-sidenav-left md-whiteframe-4dp" md-component-id="left">
        <div class="blue__bg p-12">
            <span class="fs__18px white__text futura-book">Desarrollos</span>
        </div>
        <a href="#!/portto_blanco" ng-click="close()">
            <div class="fs__16px futura-light darkgray__text px-16 py-9 ">
                <span>Portto Blanco - Querétaro</span>
            </div>
        </a>
        <md-divider></md-divider>
        <a href="#!/Portto_Blanco-Lomas" ng-click="close()">
            <div class="fs__16px futura-light darkgray__text px-16 py-9 ">
                <span>Lomas Portto Blanco - Querétaro</span>
            </div>
        </a>
        <md-divider></md-divider>
        <!--a href="#!/Portto_Blanco-Tamul" ng-click="close()">
            <div class="fs__16px futura-light darkgray__text px-16 py-9">
                <span>Portto Blanco - San Luis Potosí <span class="fs__9px futura-book white__text green__bg px-6 py-4 border-r3">Nuevo</span></span>
            </div>
        </a>
        <md-divider></md-divider -->
        <!--a href="#!/veredas_lira" ng-click="close()">
            <div class="fs__16px futura-light darkgray__text px-16 py-9">
                <span>Veredas de Lira - Pedro Escobedo</span>
            </div>
        </a-->
        <md-divider></md-divider>
        <div class="blue__bg p-12">
            <span class="fs__18px white__text futura-book">Navegación</span>
        </div>
        <md-divider></md-divider>
        <a href="#!/" ng-click="close()">
            <div class="fs__16px futura-light darkgray__text px-16 py-9">
                <span>Grupo CCIMA</span>
            </div>
        </a>
        <md-divider></md-divider>

    </md-sidenav>

    <div class="h100vh-72px habitta_header bg__cover" layout="column" layout-align="center center" flex="100">
        <h1 class="white__text center__h1">EL FUTURO ES JUNTOS</h1>
    </div>

    <div layout-padding>

        <div>
            <span class="fs__30px dark__text proxima__nova__regular">Nuestros desarrollos</span>
        </div>

        <div>
            <div class="px-100 py-64" layout="column" layout-align="space-around center" layout-gt-sm="row" flex="100">
                <a href="#!/portto_blanco">
                    <img class="pb__logo" src="media/assets/img/habitta/portto-blanco/logos/logo.svg">
                </a>
                <div class="p-40"></div>
                <a href="#!/Portto_Blanco-Lomas">
                    <img class="pb__logo" src="media/assets/img/habitta/portto-blanco/logos/lomas_pb_logo.svg">
                </a>
                <div class="p-40"></div>

                <a href="#!/portto_blancoslp">
                    <img class="pb__logo" src="media/assets/img/habitta/portto-blanco/pb_slp_logo.svg">
                </a>

                <div class="p-40"></div>
                <!--a href="#!/veredas_lira">
                    <img class="vl__logo" src="media/assets/img/habitta/veredas-lira/logos/logo.svg">
                </a-->
            </div>
        </div>

    </div>

</body>
</html>
