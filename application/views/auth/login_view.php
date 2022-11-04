<?php session_start(); ?>
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
    <link rel="stylesheet" type="text/css" href="media/assets/css/media-queries.css">
    <link rel="stylesheet" type="text/css" href="media/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="media/assets/css/helpers.css">

    <script type="text/javascript" src="media/bower_components/jquery.min.js"></script>
    <script type="text/javascript" src="media/bower_components/materialize/js/materialize.min.js"></script>
    <script type="text/javascript" src="media/assets/js/init.js"></script>

    <style type="text/css">
        @media only screen and (max-width: 600px) {

            .navbar-fixed {
                height: 64px;
            }
        }
    </style>
</head>
<body ng-controller="LoginController as login">

    <md-sidenav class="cc-sidenav md-sidenav-left md-whiteframe-4dp" md-component-id="left">
        <md-toolbar class="md-hue-2">
            <h1 class="md-toolbar-tools">GENERATING PROGRESS</h1>
        </md-toolbar>
        <a href="#!" ng-click="close()">
            <div class="link-body link-dev valign-wrapper">
                <span class="" style="width: 66%;">Desarrollo Industrial</span><img class="" src="media/assets/img/logos/logo-navetec.svg" height="28">
            </div>
        </a>
        <md-divider></md-divider>
        <a href="" ng-click="close()">
            <div class="link-body link-dev valign-wrapper">
                <span class="" style="width: 66%;">Desarrollo Habitacional</span><img class="" src="media/assets/img/logos/logo-habitta.svg" height="18">
            </div>
        </a>
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
        </a>
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
                        <li><md-button class="md-icon-button md-noink" ng-click="toggleLeft()" ng-hide="isOpenLeft()">
                            <svg viewBox="0 0 24 24" width="24"><path d="M3,18h18v-2H3V18z M3,13h18v-2H3V13z M3,6v2h18V6H3z" fill="#5F6368"></path></svg>
                        </md-button></li>
                        <li><a href="#" class="nav-logo"><img src="media/assets/img/logos/logo.png"></a></li>
                        <li class="right"><md-button class="md-raised md-primary btn-lg">COTIZAR AQUÍ</md-button></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <div class="center-container" style="height: calc(100vh - 64px);">
        <div style="max-width: 500px; width: 90%;">
            <h5 class="pb-40 center-align">Inicia sesión</h5>
            <form method="POST" ng-submit="login.submitLogin()">
    
                <div class="input-field pb-40">
                    <input autocomplete="off" class="validate" id="user" type="text" required ng-model="login.user">
                    <label for="user" data-error="wrong" data-success="right">Usuaio</label>
                </div>
    
                <div class="input-field pb-40">
                    <input autocomplete="off" id="password" type="password" required ng-model="login.password">
                    <label for="password">Contraseña</label>
                </div>
    
                <div class="input-field pb-40">
                    <button type="submit" class="btn blue-bg futura-demi lighter right">Ingresar</button>
                </div>
            </form>

        </div>
    </div>

</body>
</html>