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
    <link rel="stylesheet" type="text/css" href="media/assets/css/helpers.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <script type="text/javascript" src="media/bower_components/jquery.min.js"></script>
    <script type="text/javascript" src="media/bower_components/materialize/js/materialize.min.js"></script>
    <script type="text/javascript" src="media/assets/js/init.js"></script>
</head>
<body ng-controller="DashboardCtrl as dashboard">

	<div ng-include="'application/views/app/nav/nav.html'"></div>

    <div class="modal__panel" ng-class="dashboard.quoteDialogDisplay">
        <div class="container__panel">
            <div class="toolbar__panel blue-txt">
                <p>Cotización</p>
                <span class="close__panel" ng-click="dashboard.closeQuoteDialogDisplay()"><i class="material-icons" style="margin:0;">close</i></span>
            </div>
            <div class="content__panel container">
                <table class="mt-50">
                    <tr>
                        <th colspan="8" style="text-align: center;">Detalles</th>
                    </tr>
                    <tr>
                        <th>Desarrollo</th>
                        <td>{{dashboard.quotePropertyResult.devlopment}}</td>
                    </tr>
                    <tr>
                        <th>Condominio</th>
                        <td>{{dashboard.quotePropertyResult.condominium}}</td>
                    </tr>
                    <tr>
                        <th>Número</th>
                        <td>{{dashboard.quotePropertyResult.number}}</td>
                    </tr>
                    <tr>
                        <th>Área</th>
                        <td>{{dashboard.quotePropertyResult.area}} M&sup2;</td>
                    </tr>
                    <tr>
                        <th>Precio</th>
                        <td>{{dashboard.quotePropertyResult.property_cost | currency}} MNX</td>
                    </tr>
                    <tr>
                        <th>Plan de pago</th>
                        <td>{{dashboard.quotePropertyResult.plan_description}}</td>
                    </tr>
                </table>
                <form class="row py-40" ng-submit="dashboard.updateQuote()">
                    <div class="input-field col s12 m7">
                        <select ng-model="dashboard.discountParam" required>
                            <option ng-value="0">0%</option>
                            <option ng-value=".05">5%</option>
                            <option ng-value=".10">10%</option>
                            <option ng-value=".15">15%</option>
                            <option ng-value=".20">20%</option>
                            <option ng-value=".25">25%</option>
                            <option ng-value=".30">30%</option>
                        </select>
                        <label>Descuento</label>
                    </div>
                    <div class="input-field col s12 m7">
                        <input id="term" placeholder=" " type="number" name="term" class="validate" min="1" max="180" ng-model="dashboard.termParam" required>
                        <label for="term">Plazo</label>
                    </div>
                    <div class="input-field col s12 m7" ng-class="dashboard.financing_options_a">
                        <input placeholder=" " id="term" type="number" step="0.01" name="hook" class="validate" max="{{dashboard.max_hook}}" min="{{dashboard.min_hook}}" ng-model="dashboard.hookParam" required>
                        <label for="hook">Enganche</label>
                    </div>
                    <div class="col s12 m7">
                        <button class="btn blue darken-4 no__shadow white-text futura-book" type="submit">Actualizar</button>
                    </div>
                </form>
                <table class="responsive-table centered mt-50" ng-class="dashboard.financing_options_a">
                    <tr>
                        <th colspan="8" style="text-align: center;">Saldos insolutos</th>
                    </tr>
                    <tr>
                        <th>Periodo</th>
                        <th>Fecha</th>
                        <th>Crédito inicial</th>
                        <th>Mensualidad</th>
                        <th>Interés</th>
                        <th>Abono a cápital</th>
                        <th>Crédito final</th>
                    </tr>
                    <tr ng-repeat="row in dashboard.quotePropertyResult.unspent_balances[0]">
                        <td>{{row.period}}</td>
                        <td>{{row.date}}</td>
                        <td>${{row.credit.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}}</td>
                        <td>${{row.fixed_fee.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}}</td>
                        <td>${{row.interest.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}}</td>
                        <td>${{row.monthly_payment.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}}</td>
                        <td>${{row.final_credit.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}}</td>
                    </tr>
                </table>
                <table class="responsive-table centered mt-50" ng-class="dashboard.financing_options_b">
                    <tr>
                        <th colspan="8" style="text-align: center;">Saldos insolutos</th>
                    </tr>
                    <tr>
                        <th>Periodo</th>
                        <th>Fecha</th>
                        <th>Crédito inicial</th>
                        <th>Mensualidad</th>
                        <th>Interés</th>
                        <th>Abono a cápital</th>
                        <th>Crédito final</th>
                    </tr>
                    <tr ng-repeat="row in dashboard.quotePropertyResult.unspent_balances[1]">
                        <td>{{row.period}}</td>
                        <td>{{row.date}}</td>
                        <td>${{row.credit.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}}</td>
                        <td>${{row.fixed_fee.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}}</td>
                        <td>${{row.interest.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}}</td>
                        <td>${{row.monthly_payment.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}}</td>
                        <td>${{row.final_credit.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}}</td>
                    </tr>
                </table>
                <table class="responsive-table centered mt-50" ng-class="dashboard.financing_options_c">
                    <tr>
                        <th colspan="8" style="text-align: center;">Saldos insolutos</th>
                    </tr>
                    <tr>
                        <th>Periodo</th>
                        <th>Fecha</th>
                        <th>Crédito inicial</th>
                        <th>Mensualidad</th>
                        <th>Interés</th>
                        <th>Abono a cápital</th>
                        <th>Crédito final</th>
                    </tr>
                    <tr ng-repeat="row in dashboard.quotePropertyResult.unspent_balances[2]">
                        <td>{{row.period}}</td>
                        <td>{{row.date}}</td>
                        <td>${{row.credit.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}}</td>
                        <td>${{row.fixed_fee.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}}</td>
                        <td>${{row.interest.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}}</td>
                        <td>${{row.monthly_payment.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}}</td>
                        <td>${{row.final_credit.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2})}}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row mt-20">
            <div class="col s12">
                <h3 class="blue-txt futura-book">Clientes</h3>
            </div>
        </div>
    </div>

    <div class="divider"></div>

    <div class="container">
        <div class="mt-40">

            <ul class="saufth-collapsable">
                <li ng-repeat="lead in dashboard.activeLeads">
                    <div class="collapsable__header">
                        <div class="pr-15 hide-on-small-only">
                            <i class="material-icons" style="font-size:33px;">assignment_ind</i>
                        </div>

                        <div>
                            <h6 class="futura-book collapsable__heading" style="margin:0;">{{lead.name + ' ' + lead.last_name}}</h6>
                            <div class="px-5 pt-5"></div>
                            <p class="collapsable__text" style="margin:0;">{{lead.email + '@' + lead.domain}}</p>
                            <div class="px-5 pt-5"></div>
                            <p class="collapsable__text" style="margin:0;">{{lead.code_country_code + ' ' + lead.phone}}</p>
                        </div>
                        <div flex></div>
                        <div>
                            <div class="saufth-badge blue-bg light-txt center-align">{{lead.num_inmovables}} <span class="hide-on-small-only">propiedades</span></div>
                            <!-- <div class="pt-5 px-5"></div>
                            <div class="saufth-badge teal light-txt center-align">{{manager.leads.length}} <span class="hide-on-small-only">clientes</span></div> -->
                        </div>
                        <div class="py-5 pl-15"></div>
                        <div class="valign-wrapper">
                            <md-menu md-offset="0 -64" ng-controller="ContactMenuCtrl as contactCtrl">

                                <button class="btn-floating no__shadow transparent__bg" ng-click="contactCtrl.openMenu($mdMenu, $event)">
                                    <i class="material-icons black-text">more_vert</i>
                                </button>
                                
                                <md-menu-content width="2">
                                    <md-menu-item>
                                        <md-button ng-click="dashboard.selectLead(lead.idLead, $index)">
                                            Mostrar propiedades
                                        </md-button>
                                    </md-menu-item>
                                    <md-menu-item>
                                        <md-button ng-click="dashboard.updatePanel($index)">
                                            Editar
                                        </md-button>
                                    </md-menu-item>
                                    <md-menu-item>
                                        <md-button ng-click="dashboard.openDialog()">
                                            Eliminar
                                        </md-button>
                                    </md-menu-item>
                                </md-menu-content>
                            </md-menu>
                        </div>
                    </div>
                    <ul class="saufth-collapsable-body grey lighten-5" ng-class="dashboard.activeLeads[$index].collapsableBodyClass">
                        <div class="divider"></div>
                        <li class="saufth-collapsable-body-li" ng-repeat="property in lead.inmovables">
                            <div class="saufth-collapsable-item-h">
                                <div class="pl-15"></div>
                                <div class="pr-15 hide-on-small-only">
                                    <i class="material-icons">home_work</i>
                                </div>
                                <div>
                                    <h6 class="futura-book collapsable__heading" style="margin:0;">{{property.condominium + ' ' + property.number}}</h6>
                                    <p class="collapsable__text" style="margin:0;">{{property.area}} m2</p>
                                    <p class="collapsable__text" style="margin:0;">{{property.property_type.type}}</p>
                                </div>
                                <div flex></div>
                                <md-menu md-offset="0 -64" ng-controller="ContactMenuCtrl as contactCtrl">

                                    <button class="btn-floating no__shadow transparent__bg" ng-click="contactCtrl.openMenu($mdMenu, $event)">
                                        <i class="material-icons black-text">more_vert</i>
                                    </button>

                                    <md-menu-content width="2">
                                        <md-menu-item>
                                            <md-button ng-click="dashboard.quoteLeadProperty(property)">
                                                Cotizar
                                            </md-button>
                                        </md-menu-item>
                                    </md-menu-content>
                                </md-menu>
                                <div class="pr-15"></div>
                            </div>
                            <div class="divider"></div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>

    </div>
    <a class="btn-floating btn-large blue darken-4" href="#!/agregar_cliente" style="position: fixed; bottom: 20px; right: 20px;"><img src="media/assets/img/icons/plus.svg" width="14" style="margin-top: 21.5px;"></a>

    <div class="p-40"></div>

    <div class="modal-dialog" ng-class="dashboard.dialogDisplay">
        <div class="backdrop-dialog" ng-click="dashboard.closeDialog()"></div>
        <div class="container-s-dialog p-20">
            <div class="toolbar-dialog blue-txt">
                Eliminar cliente
                <span ng-click="dashboard.closeDialog()">
                    <img class="btn-close-dialog mt-4" src="media/assets/img/icons/close.svg">
                </span>
            </div>
            <div class="content-dialog" style="overflow: initial;">
                Estás a punto de eliminar este cliente ¿Quieres continuar?
            </div>
            <div class="divider"></div>
            <div class="option-menu-dialog" ng-controller="ContactMenuCtrl as contactCtrl">
                <button class="btn red_cc-bg no-shadows futura-demi lighter right mt-10" ng-click="dashboard.updateLeadStatus(dashboard.idLead, 0)">ELMIINAR</button>
                <button class="btn-flat mt-10" ng-click="dashboard.closeDialog()">CANCELAR</button>
            </div>
        </div>
    </div>

</body>
</html>