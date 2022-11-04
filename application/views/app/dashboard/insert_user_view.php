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
<body ng-controller="InsertUserCtrl as user">

	<div ng-include="'application/views/app/nav/nav.html'"></div>

    <div class="container">
        <h5 class="blue-grey lighten-5 mt-20 p-10">Agregar usuario</h5>
        <div class="row">
            <form class="col s12" ng-submit="user.insertUser()">
                <div class="row">
                    <div class="input-field col s12 m6">
                        <input id="username" type="text" class="validate" autocomplete="off" required mixlength="6" maxlength="16" ng-model="user.newUser.username">
                        <label for="username">Nombre de usuario</label>
                        <span class="helper-text" data-error="Verifica este campo" data-success="Correcto"></span>
                    </div>
                    <div class="input-field col s12 m6">
                        <input id="password" type="password" class="validate" autocomplete="off" required mixlength="8" maxlength="45" ng-model="user.newUser.password">
                        <label for="password">Contraseña</label>
                        <span class="helper-text" data-error="Verifica este campo" data-success="Correcto"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12 m6">
                        <input id="name" type="text" class="validate" autocomplete="off" required maxlength="45" ng-model="user.newUser.name">
                        <label for="name">Nombre(s)</label>
                        <span class="helper-text" data-error="Verifica este campo" data-success="Correcto"></span>
                    </div>
                    <div class="input-field col s12 m6">
                        <input id="last_name" type="text" class="validate" autocomplete="off" required maxlength="45" ng-model="user.newUser.last_name">
                        <label for="last_name">Apellido(s)</label>
                        <span class="helper-text" data-error="Verifica este campo" data-success="Correcto"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12 m6">
                        <input id="email" type="email" class="validate" required autocomplete="off" maxlength="320" ng-model="user.newUser.email">
                        <label for="email">Correo electrónico</label>
                        <span class="helper-text" data-error="Correo electrónico invalido" data-success="Correcto"></span>
                    </div>
                    <div class="input-field col s12 m6">
                        <input id="phone" type="tel" class="validate" autocomplete="off" minlength="8" maxlength="10" pattern="[0-9]{10}" ng-model="user.newUser.phone">
                        <label for="phone">Teléfono</label>
                        <span class="helper-text" data-error="Verifica este campo" data-success="Correcto"></span>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12 m6">
                    <select ng-model="user.newUser.idProfile" required>
                            <option ng-value="3" ng-selected>Usuario Estándar</option>
                            <option ng-value="2">Gerente</option>
                            <!-- <option ng-value="1">Administrador</option> -->
                        </select>
                        <label>Perfil</label>
                    </div>
                    <div class="input-field col s12 m6">
                        <select ng-model="user.newUser.idGender" required>
                            <option ng-value="1" ng-selected>Sin especificar</option>
                            <option ng-value="2">Hombre</option>
                            <option ng-value="3">Mujer</option>
                        </select>
                        <label>Sexo</label>
                    </div>
                  </div>
                  <div class="row" required>
                    <div class="input-field col s12 m6">
                        <input id="address" type="text" class="validate" maxlength="255" autocomplete="off" ng-model="user.newUser.address"></input>
                        <label for="address">Dirección (opcional)</label>
                    </div>
                    <div class="input-field col s12 m6">
                    </div>
                </div>
                <p style="color: red;">{{user.messageError}}</p>
                <div class="row">
                    <div class="col s12">
                        <ul>
                            <li class="right"><button class="btn blue darken-4 hoverable white-text futura-book" type="submit">Agregar</button></li>
                            <li class="right"><a href="#!/users" class="btn-flat mr-20">Cancelar</a></li>
                        </ul>
                    </div>
                </div>
            </form>
        </div>

    </div>
</body>
</html>