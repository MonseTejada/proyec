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
    <link rel="stylesheet" type="text/css" href="media/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="media/assets/css/dashboard.css">
    <link rel="stylesheet" type="text/css" href="media/assets/css/helpers.css">

    <script type="text/javascript" src="media/bower_components/jquery.min.js"></script>
    <script type="text/javascript" src="media/bower_components/materialize/js/materialize.min.js"></script>
    <script type="text/javascript" src="media/assets/js/init.js"></script>
</head>
<body ng-controller="DashboardCtrl as dashboard">

	<div ng-include="'application/views/app/nav/nav.html'"></div>

    <div class="container">
        <h5 class="blue-grey lighten-5 mt-20 p-10">Actualizar cliente</h5>
        <div class="row">
            <form class="col s12" ng-submit="dashboard.updateLead()">
                <div class="row">
                    <div class="input-field col s12 m6">
                        <input id="name" type="text" class="validate" autocomplete="off" required maxlength="45" value="dashboard.selectedLead.name" ng-model="dashboard.selectedLead.name">
                        <label for="name">Nombre(s)</label>
                        <span class="helper-text" data-error="Verifica este campo" data-success="Correcto"></span>
                    </div>
                    <div class="input-field col s12 m6">
                        <input id="last_name" type="text" class="validate" autocomplete="off" required maxlength="45" value="dashboard.selectedLead.last_name" ng-model="dashboard.selectedLead.last_name">
                        <label for="last_name">Apellido(s)</label>
                        <span class="helper-text" data-error="Verifica este campo" data-success="Correcto"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12 m6">
                        <input id="phone" type="tel" class="validate" autocomplete="off" minlength="8" maxlength="10" pattern="[0-9]{10}" value="dashboard.selectedLead.phone" ng-model="dashboard.selectedLead.phone">
                        <label for="phone">Teléfono</label>
                        <span class="helper-text" data-error="Verifica este campo" data-success="Correcto"></span>
                    </div>
                    <div class="input-field col s12 m6">
                        <select ng-model="dashboard.selectedLead.idMedium" required>
                            <option ng-value="1" ng-selected>Cliente leal</option>
                            <option ng-value="2">Familiar</option>
                            <option ng-value="3">Conocido</option>
                            <option ng-value="4">Neximo</option>
                            <option ng-value="5">Expo</option>
                            <option ng-value="6">Página web</option>
                            <option ng-value="14">Google Ads</option>
                            <option ng-value="7">Recomendación</option>
                            <option ng-value="8">Base de datos</option>
                            <option ng-value="9">Redes sociales</option>
                            <option ng-value="10">Brokers</option>
                            <option ng-value="11">Chat</option>
                            <option ng-value="12">Cambaceo</option>
                            <option ng-value="13">Guardias</option>
                            <option ng-value="17">Marketing</option>
                        </select>
                        <label>Medios de contacto</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12 m6">
                        <input id="address" type="text" class="validate" maxlength="255" autocomplete="off" ng-model="dashboard.selectedLead.address"></input>
                        <label for="address">Dirección (opcional)</label>
                    </div>
                    <div class="input-field col s12 m6">
                        <select ng-model="dashboard.selectedLead.idGender" required>
                            <option ng-value="1" ng-selected>Sin especificar</option>
                            <option ng-value="2">Hombre</option>
                            <option ng-value="3">Mujer</option>
                        </select>
                        <label>Sexo</label>
                    </div>
                </div>
                <p style="color: red;">{{dashboard.messageError}}</p>
                <div class="row">
                    <div class="col s12">
                        <ul>
                            <li class="right"><button class="btn blue darken-4 hoverable white-text futura-book" type="submit">Agregar</button></li>
                            <li class="right"><a href="#!/dashboard" class="btn-flat mr-20">Cancelar</a></li>
                        </ul>
                    </div>
                </div>
            </form>
        </div>

    </div>
</body>
</html>