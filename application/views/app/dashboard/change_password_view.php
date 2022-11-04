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
<body ng-controller="ChangePasswordCtrl as dashboard">

	<div ng-include="'application/views/app/nav/nav.html'"></div>

    <div class="center-container" style="height: calc(100vh - 64px);">
      <div style="max-width: 500px; width: 90%;">
        <h5 class="pb-40 center-align">Inicia sesión</h5>
        <form method="POST" ng-submit="dashboard.changePassword()">

          <div class="input-field pb-40">
              <input autocomplete="off" id="last_password" type="password" minlength="8" required ng-model="dashboard.lastPassword">
              <label for="last_password">Contraseña anterior</label>
          </div>

          <div class="input-field pb-40">
              <input autocomplete="off" id="new_password" type="password" minlength="8" required ng-model="dashboard.newPassword">
              <label for="new_password">Contraseña nueva</label>
          </div>

          <div class="input-field pb-40">
              <input autocomplete="off" id="re_password" type="password" minlength="8" required ng-model="dashboard.rePassword">
              <label for="re_password">Repetir contraseña</label>
          </div>

          <div class="input-field pb-40">
            <ul>
                <li class="right"><button class="btn blue darken-4 hoverable white-text futura-book" type="submit">Cambiar</button></li>
                <li class="right"><a href="#!/dashboard" class="btn-flat mr-20">Cancelar</a></li>
            </ul>
          </div>
        </form>

      </div>
    </div>

</body>
</html>