<!DOCTYPE html>
<html lang="es_MX">
<head>

	<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" contet="ie=edge">
	<meta name="author" content="Ing. Saúl Fernando Torres Hernández">
	<meta name="description" content="Grúpo CCIMA S.A. de C.V."/>

	<title>Grupo CCIMA</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"><link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="media/assets/css/quote.css">
	<link rel="stylesheet" type="text/css" href="media/assets/css/helpers.css">

</head>

<body>

    <div ng-include="'application/views/app/nav/nav.html'"></div>

    <div class="layout__container" ng-if="inventary.views.success" layout-padding ng-clock>
        
        <span class="futura-book bolder to__uppercase blue-txt fs__36px">{{ inventary.name }} </span>

		<div ng-include="inventary.path"></div>

    </div>

    <div>

        <div ng-if="inventary.error" ng-clock>{{ inventary.errorMessage }}</div>

    </div>

    <div class="scrolly__container" ng-if="inventary.views.details" layout-padding ng-clock>

        <div>

            <div class="pb-10" layout="row" layout-align="end start">

                <md-button ng-click="inventary.hidePropertyDetails()" class="md-icon-button" aria-label="Cerrar">
                    <md-icon style="color: #555555;" md-svg-src="media/assets/img/icons/app/close.svg"></md-icon>
                </md-button>

            </div>

            <div class="border-box--blue border-r4">

                <div class="bluegray-light2-bg border-box--blue-b px-20 py-10">
                    <span class="fs__16px gray-txt proxima__nova__regular">
                        {{ inventary.property.number + ' | ' + inventary.property.class + ' | ' + inventary.property.area + ' M&sup2;  | ' + inventary.name }}
                    </span>
                </div>

                <div class="px-40" layout="column" layout-gt-sm="row" layout-align="space-around start" flex="100">

                    <div class="py-40" layout="column">

                        <div class="pb-12 w100">
                            <span class="fs__14fs proxima__nova__regular darkgray__text">Detalles</span>
                        </div>

                        <div class="py-12" layout="row" layout-align="start center">

                            <div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Número</div>
                            <div class="px-16"></div>
                            <div class="fs__14px w124 proxima__nova__light">{{ inventary.property.number }}</div>

                        </div>

                        <div class="py-12" layout="row" layout-align="start center">

                            <div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Superficie</div>
                            <div class="px-16"></div>
                            <div class="fs__14px w124 proxima__nova__light">{{ inventary.property.area }} M&sup2;</div>

                        </div>

                        <div class="py-12" layout="row" layout-align="start center">

                            <div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Tipo</div>
                            <div class="px-16"></div>
                            <div class="fs__14px w124 proxima__nova__light">{{ inventary.property.class }}</div>

                        </div>

                        <div class="py-12" layout="row" layout-align="start center">

                            <div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Precio M&sup2;</div>
                            <div class="px-16"></div>
                            <div class="fs__14px w124 proxima__nova__light">${{ inventary.property.cost.m2.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</div>

                        </div>

                        <div class="py-12" layout="row" layout-align="start center">

                            <div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Precio de propiedad</div>
                            <div class="px-16"></div>
                            <div class="fs__14px w124 proxima__nova__light">${{ (inventary.property.cost.property*1).toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</div>

                        </div>

                        <div class="py-12" layout="row" layout-align="start center">

                            <div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Financiamiento</div>
                            <div class="px-16"></div>
                            <div class="fs__14px w124 proxima__nova__light">${{ inventary.property.financing.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</div>

                        </div>

                    </div>

                    <div class="py-40" layout="column">

                        <div class="pb-12 w100">
                            <span class="fs__14fs proxima__nova__regular darkgray__text">Enganche</span>
                        </div>

                        <div class="py-12" layout="row" layout-align="start center">

                            <div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Base</div>
                            <div class="px-16"></div>
                            <md-input-container>

                                <md-select name="updateHook" ng-model="inventary.property.selectedHook" ng-change="inventary.updateIncrease(inventary.property.idProperty, inventary.property.selectedHook, inventary.property.promos.hook.idPromo)" required>

                                    <md-option ng-repeat="hook in inventary.promos.hook" ng-value="hook.idPromo">
                                        <span class="proxima__nova__light fs__14px">{{ (hook.discount * 100).toFixed(2) }}%</span>
                                    </md-option>

                                </md-select>

                            </md-input-container>

                        </div>

                        <div class="py-12" layout="row" layout-align="start center">

                            <div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Total de enganche</div>
                            <div class="px-16"></div>
                            <div class="fs__14px w124 proxima__nova__light">${{ inventary.property.hook.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</div>

                        </div>

                    </div>

                </div>

                <div class="px-40" layout="column" layout-gt-sm="row" layout-align="space-around start" flex="100">

                    <div class="py-40" layout="column">

                        <div class="pb-12 w100">
                            <span class="fs__14fs proxima__nova__regular darkgray__text">Aumento &#11014;</span>
                        </div>

                        <div class="py-12" layout="row" layout-align="start center">

                            <div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Historial</div>
                            <div class="px-16"></div>
                            <md-menu md-offset="0 0" ng-controller="ContactMenuCtrl as contactCtrl">

                                <span class="proxima__nova__light fs__14px pointer" ng-click="contactCtrl.openMenu($mdMenu, $event)">
                                    &#10549;
                                </span>

                                <md-menu-content>

                                    <md-menu-item ng-repeat="promo in inventary.property.promos.cost_m2_increase">
                                        <md-button ng-click="inventary.deletePromo(inventary.property.idProperty, promo.idPromo)">
                                            <span class="fs__14px proxima__nova__light">&#9940; {{ (promo.discount * 100).toFixed(2) }}% x {{ promo.amount }}</span>
                                        </md-button>
                                    </md-menu-item>

                                </md-menu-content>

                            </md-menu>

                        </div>

                        <div class="py-12" layout="row" layout-align="start center">

                            <div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Total aumentado</div>
                            <div class="px-16"></div>
                            <div class="fs__14px w124 proxima__nova__light">${{ inventary.property.cost.increase.amount.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</div>

                        </div>

                        <div class="py-12" layout="row" layout-align="start center">

                            <div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Precio M&sup2;</div>
                            <div class="px-16"></div>
                            <div class="fs__14px w124 proxima__nova__light">${{ inventary.property.cost.increase.m2.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</div>

                        </div>

                        <div class="py-12" layout="row" layout-align="start center">

                            <div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Precio de propiedad</div>
                            <div class="px-16"></div>
                            <div class="fs__14px w124 proxima__nova__light">${{ inventary.property.cost.increase.property.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</div>

                        </div>

                        <div class="py-12" layout="row" layout-align="start center">

                            <div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Total de enganche</div>
                            <div class="px-16"></div>
                            <div class="fs__14px w124 proxima__nova__light">${{ inventary.property.cost.increase.hook.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</div>

                        </div>

                        <div class="py-12" layout="row" layout-align="start center">

                            <div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Financiamiento</div>
                            <div class="px-16"></div>
                            <div class="fs__14px w124 proxima__nova__light">${{ inventary.property.cost.increase.financing.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</div>

                        </div>

                        <div class="py-12" layout="row" layout-align="start center">

                            <div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Aumentar</div>
                            <div class="px-16"></div>
                            <md-menu md-offset="0 0" ng-controller="ContactMenuCtrl as contactCtrl">

                                <span class="proxima__nova__light fs__14px pointer" ng-click="contactCtrl.openMenu($mdMenu, $event)">
                                    +
                                </span>

                                <md-menu-content>

                                    <md-menu-item ng-repeat="increase in inventary.promos.increase">
                                        <md-button ng-click="inventary.insertPromo(inventary.property.idProperty, increase.idPromo)">
                                            <span class="fs__14px proxima__nova__light">{{ (increase.discount * 100).toFixed(2) }}%</span>
                                        </md-button>
                                    </md-menu-item>

                                </md-menu-content>

                            </md-menu>

                        </div>

                    </div>

                    <div class="py-40" layout="column">

                        <div class="pb-12 w100">
                            <span class="fs__14fs proxima__nova__regular darkgray__text">Descuento &#11015;</span>
                        </div>

                        <div class="py-12" layout="row" layout-align="start center">

                            <div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Historial</div>
                            <div class="px-16"></div>
                            <md-menu md-offset="0 0" ng-controller="ContactMenuCtrl as contactCtrl">

                                <span class="proxima__nova__light fs__14px pointer" ng-click="contactCtrl.openMenu($mdMenu, $event)">
                                    &#10549;
                                </span>

                                <md-menu-content>

                                    <md-menu-item ng-repeat="promo in inventary.property.promos.cost_m2_discount">
                                        <md-button ng-click="inventary.deletePromo(inventary.property.idProperty, promo.idPromo)">
                                            <span class="fs__14px proxima__nova__light">&#9940; {{ (promo.discount * 100).toFixed(2) }}% x {{ promo.amount }}</span>
                                        </md-button>
                                    </md-menu-item>

                                </md-menu-content>

                            </md-menu>

                        </div>

                        <div class="py-12" layout="row" layout-align="start center">

                            <div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Total descontado</div>
                            <div class="px-16"></div>
                            <div class="fs__14px w124 proxima__nova__light">${{ inventary.property.cost.discount.amount.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</div>

                        </div>

                        <div class="py-12" layout="row" layout-align="start center">

                            <div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Precio M&sup2;</div>
                            <div class="px-16"></div>
                            <div class="fs__14px w124 proxima__nova__light">${{ inventary.property.cost.discount.m2.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</div>

                        </div>

                        <div class="py-12" layout="row" layout-align="start center">

                            <div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Precio de propiedad</div>
                            <div class="px-16"></div>
                            <div class="fs__14px w124 proxima__nova__light">${{ inventary.property.cost.discount.property.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</div>

                        </div>

                        <div class="py-12" layout="row" layout-align="start center">

                            <div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Total de enganche</div>
                            <div class="px-16"></div>
                            <div class="fs__14px w124 proxima__nova__light">${{ inventary.property.cost.discount.hook.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</div>

                        </div>

                        <div class="py-12" layout="row" layout-align="start center">

                            <div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Financiamiento</div>
                            <div class="px-16"></div>
                            <div class="fs__14px w124 proxima__nova__light">${{ inventary.property.cost.discount.financing.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</div>

                        </div>

                        <div class="py-12" layout="row" layout-align="start center">

                            <div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Descontar</div>
                            <div class="px-16"></div>
                            <md-menu md-offset="0 0" ng-controller="ContactMenuCtrl as contactCtrl">

                                <span class="proxima__nova__light fs__14px pointer" ng-click="contactCtrl.openMenu($mdMenu, $event)">
                                    +
                                </span>

                                <md-menu-content>

                                    <md-menu-item ng-repeat="discount in inventary.promos.discount">
                                        <md-button ng-click="inventary.insertPromo(inventary.property.idProperty, discount.idPromo)">
                                            <span class="fs__14px proxima__nova__light">{{ (discount.discount * 100).toFixed(2) }}%</span>
                                        </md-button>
                                    </md-menu-item>

                                </md-menu-content>

                            </md-menu>

                        </div>

                    </div>

                </div>

                <div class="px-40" layout="column" layout-gt-sm="row" layout-align="space-around start" flex="100">

                    <div class="py-40" layout="column">

                        <div class="pb-12 w100">
                            <span class="fs__14fs proxima__nova__regular darkgray__text">Final</span>
                        </div>

                        <div class="py-12" layout="row" layout-align="start center">

                            <div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Precio M&sup2;</div>
                            <div class="px-16"></div>
                            <div class="fs__14px w124 proxima__nova__light">${{ inventary.property.cost.final.m2.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</div>

                        </div>

                        <div class="py-12" layout="row" layout-align="start center">

                            <div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Precio propiedad</div>
                            <div class="px-16"></div>
                            <div class="fs__14px w124 proxima__nova__light">${{ inventary.property.cost.final.property.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</div>

                        </div>

                        <div class="py-12" layout="row" layout-align="start center">

                            <div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Enganche</div>
                            <div class="px-16"></div>
                            <div class="fs__14px w124 proxima__nova__light">${{ inventary.property.cost.final.hook.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</div>

                        </div>

                        <div class="py-12" layout="row" layout-align="start center">

                            <div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Financiamiento</div>
                            <div class="px-16"></div>
                            <div class="fs__14px w124 proxima__nova__light">${{ inventary.property.cost.final.financing.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</div>

                        </div>

                    </div>

                    <div class="py-40" layout="column">

                        <div class="pb-12 w100">
                            <span class="fs__14fs proxima__nova__regular darkgray__text">Descuento a engache &#11015;</span>
                        </div>

                        <div class="py-12" layout="row" layout-align="start center">

                            <div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Descuento</div>
                            <div class="px-16"></div>
                            <md-input-container>

                                <md-select name="updateHookDiscount" ng-model="inventary.property.selectedHookDiscount" ng-change="inventary.updateIncrease(inventary.property.idProperty, inventary.property.selectedHookDiscount, inventary.property.promos.hook_discount.idPromo)" required>

                                    <md-option ng-value="0">
                                        <span class="fs__14px proxima__nova__light">N/A</span>
                                    </md-option>

                                    <md-option ng-repeat="hookDiscount in inventary.promos.hook_discount" ng-value="hookDiscount.idPromo">
                                        <span class="fs__14px proxima__nova__light">{{ (hookDiscount.discount*100).toFixed(2) }}%</span>
                                    </md-option>

                                </md-select>

                            </md-input-container>

                        </div>

                        <div class="py-12" layout="row" layout-align="start center">

                            <div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Total descontado</div>
                            <div class="px-16"></div>
                            <div class="fs__14px w124 proxima__nova__light">${{ inventary.property.hook_discount.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</div>

                        </div>

                        <div class="py-12" layout="row" layout-align="start center">

                            <div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Enganche final con descuento</div>
                            <div class="px-16"></div>
                            <div class="fs__14px w124 proxima__nova__light">${{ inventary.property.hook_discounted.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</div>

                        </div>

                    </div>

                </div>

                <div class="p-40" layout="row" layout-align="center center">

                    <div class="fs__14px darkgray__text right__text proxima__nova__light">Importe</div>
                    <div class="px-16"></div>
                    <div class="fs__14px w124 proxima__nova__light">${{ inventary.property.amount.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</div>

                </div>

            </div>
        </div>

        <div>
            <div class="border-box--blue border-r4 overflow-y-h">

                <div class="bluegray-light2-bg border-box--blue-b px-20 py-10">
                    <span class="fs__16px gray-txt proxima__nova__regular">
                        Proceso de venta
                    </span>
                </div>

                <div class="px-40" layout="column" layout-gt-sm="row" layout-align="space-around start" flex="100" ng-if="inventary.property.idPropertyStatus == 1">

                    <div class="py-40" layout="column">

                        <div class="pb-12 w100 layout="row" layout-align="space-between center"">
                            <span class="fs__14fs proxima__nova__regular darkgray__text">Status</span>
                            <div class="px-5"></div>
							<i class="material-icons-round blue__text fs__16px pointer" ng-click="inventary.openCustomerFinder('setLeadProperty')">edit</i>
                        </div>

                        <div layout="row" layout-align="start center">

                            <div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Status</div>
                            <div class="px-16"></div>
                            <md-input-container>

                                <div class="pointer" ng-click="inventary.showSearch()">
                                    <span class="fs__14px proxima__nova__light">Disponible</span>
                                </div>

                            </md-input-container>

                        </div>

                    </div>

                    <div class="py-40" layout="column"></div>


                </div>

                <div class="px-40" layout="column" layout-gt-sm="row" layout-align="space-around start" flex="100" ng-if="inventary.property.idPropertyStatus > 1">

                    <div class="py-40" layout="column">

                        <div class="pb-12 w100">
                            <span class="fs__14fs proxima__nova__regular darkgray__text">Status</span>
                        </div>

                        <div layout="row" layout-align="start center">

                            <div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Status</div>
                            <div class="px-16"></div>
                            <md-input-container>

                                <md-select name="groupPages" ng-model="inventary.property.selectedStatus" ng-change="inventary.updateStatus()">
                                    <md-option ng-repeat="(statusKey, propertyStatus) in inventary.propertyStatus" ng-value="statusKey">
                                        <span class="fs__14px proxima__nova__light">{{ propertyStatus.status }}</span>
                                    </md-option>
                                </md-select>

                            </md-input-container>

                        </div>

                    </div>

                    <div class="py-40" layout="column">

                        <div class="pb-12 w100">
                            <span class="fs__14fs proxima__nova__regular darkgray__text">Registros</span>
                        </div>

                        <div class="py-12" layout="row" layout-align="start center">

                            <div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Seleccionado</div>
                            <div class="px-16"></div>
                            <md-datepicker ng-model="inventary.property.initDate" 
                                            ng-change="inventary.updateDate('init', inventary.property.initDate)" 
                                            md-placeholder="Enter date" 
                                            input-aria-describedby="datepicker-description" 
                                            input-aria-labelledby="datepicker-header"></md-datepicker>

                        </div>

                        <div class="py-12" layout="row" layout-align="start center">

                            <div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Apartado</div>
                            <div class="px-16"></div>
                            <md-datepicker ng-model="inventary.property.setAsideDate" 
                                            ng-change="inventary.updateDate('set_aside', inventary.property.setAsideDate)" 
                                            md-placeholder="Enter date" 
                                            input-aria-describedby="datepicker-description" 
                                            input-aria-labelledby="datepicker-header"></md-datepicker>

                        </div>

                        <div class="py-12" layout="row" layout-align="start center">

                            <div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Enganche</div>
                            <div class="px-16"></div>
                            <md-datepicker ng-model="inventary.property.hookedDate" 
                                            ng-change="inventary.updateDate('hooked', inventary.property.hookedDate)" 
                                            md-placeholder="Enter date" 
                                            input-aria-describedby="datepicker-description" 
                                            input-aria-labelledby="datepicker-header"></md-datepicker>

                        </div>

                        <div class="py-12" layout="row" layout-align="start center">

                            <div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Vendido</div>
                            <div class="px-16"></div>
                            <md-datepicker ng-model="inventary.property.soldDate" 
                                            ng-change="inventary.updateDate('sold', inventary.property.soldDate)" 
                                            md-placeholder="Enter date" 
                                            input-aria-describedby="datepicker-description" 
                                            input-aria-labelledby="datepicker-header"></md-datepicker>

                        </div>

                    </div>


                </div>

                <div class="px-40" layout="column" layout-gt-sm="row" layout-align="space-around start" flex="100" ng-if="inventary.property.idPropertyStatus > 1">

                    <div class="py-40" layout="column">
                        
                        <div class="pb-12 w100" layout="row" layout-align="space-between center">
                            <span class="fs__14fs proxima__nova__regular darkgray__text">Cliente</span>
                            <div class="px-5"></div>
							<i class="material-icons-round blue__text fs__18px pointer" ng-click="inventary.openCustomerFinder('updateLeadProperty')">swap_horiz</i>
                        </div>

                        <div class="py-12" layout="row" layout-align="start center">

                            <div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Nombre</div>
                            <div class="px-16"></div>
                            <div class="fs__14px w124 proxima__nova__light">{{ inventary.property.owner.name + ' ' + inventary.property.owner.last_name }}</div>

                        </div>

                        <div class="py-12" layout="row" layout-align="start center">

                            <div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Sexo</div>
                            <div class="px-16"></div>
                            <div class="fs__14px w124 proxima__nova__light">{{ inventary.property.owner.gender }}</div>

                        </div>

                        <div class="py-12" layout="row" layout-align="start center">

                            <div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Correo</div>
                            <div class="px-16"></div>
                            <div class="fs__14px w124 proxima__nova__light">{{ inventary.property.owner.email }}</div>

                        </div>

                        <div class="py-12" layout="row" layout-align="start center">

                            <div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Teléfono</div>
                            <div class="px-16"></div>
                            <div class="fs__14px w124 proxima__nova__light">{{ inventary.property.owner.phone }}</div>

                        </div>

                        <div class="py-12" layout="row" layout-align="start center">

                            <div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Medio</div>
                            <div class="px-16"></div>
                            <div class="fs__14px w124 proxima__nova__light">{{ inventary.property.owner.medium }}</div>

                        </div>

                        <div class="py-12" layout="row" layout-align="start center">

                            <div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Dirección</div>
                            <div class="px-16"></div>
                            <div class="fs__14px w124 proxima__nova__light">{{ inventary.property.owner.address }}</div>

                        </div>

                        <div class="py-12" layout="row" layout-align="start center">

                            <div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Creación</div>
                            <div class="px-16"></div>
                            <div class="fs__14px w124 proxima__nova__light">{{ inventary.property.owner.create_at }}</div>

                        </div>

                    </div>

                    <div class="py-40" layout="column">
                        
                        <div class="pb-12 w100">
                            <span class="fs__14fs proxima__nova__regular darkgray__text">Asesor</span>
                        </div>

                        <div class="py-12" layout="row" layout-align="start center">

                            <div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Nombre</div>
                            <div class="px-16"></div>
                            <div class="fs__14px w124 proxima__nova__light">{{ inventary.property.adviser.name + inventary.property.adviser.last_name }}</div>

                        </div>

                        <div class="py-12" layout="row" layout-align="start center">

                            <div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Sexo</div>
                            <div class="px-16"></div>
                            <div class="fs__14px w124 proxima__nova__light">{{ inventary.property.adviser.gender }}</div>

                        </div>

                        <div class="py-12" layout="row" layout-align="start center">

                            <div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Correo</div>
                            <div class="px-16"></div>
                            <div class="fs__14px w124 proxima__nova__light">{{ inventary.property.adviser.email }}</div>

                        </div>

                        <div class="py-12" layout="row" layout-align="start center">

                            <div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Teléfono</div>
                            <div class="px-16"></div>
                            <div class="fs__14px w124 proxima__nova__light">{{ inventary.property.adviser.phone }}</div>

                        </div>

                        <div class="py-12" layout="row" layout-align="start center">

                            <div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Dirección</div>
                            <div class="px-16"></div>
                            <div class="fs__14px w124 proxima__nova__light">{{ inventary.property.adviser.address }}</div>

                        </div>

                        <div class="py-12" layout="row" layout-align="start center">

                            <div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Creación</div>
                            <div class="px-16"></div>
                            <div class="fs__14px w124 proxima__nova__light">{{ inventary.property.adviser.create_at }}</div>

                        </div>

                    </div>

                </div>

            </div>
        </div>

    </div>

	<div class="modal-dialog white__bg" ng-if="inventary.views.search.users" ng-clock>

		<div class="dark__bg pl-20 pr-10 py-10 overflow-h" layout="row" style="height: 48px;">

			<div layout="row" layout-align="start center" flex="15">
				<a href="#!" style="padding-top:6px;"><img src="media/assets/img/logos/logo-white.png" height="24"></a>
			</div>

			<form class="px-10 bdr-r6" layout="row" layout-align="center center" flex="70" ng-submit="inventary.search.update()">
				<div class="w100" layout="row" layout-align="center center">
					<md-input-container class="w100" layout="row" layout-align="center center">
						<input class="darkgray__bg lightgray__text" ng-model="inventary.search.keyword" type="text" aria-label="Buscar" class="white-text" required="true">
					</md-input-container>
				</div>
				<md-button type="submit" class="md-icon-button" aria-label="Buscar">
					<md-icon md-svg-src="media/assets/img/icons/app/search.svg" class="lightgray__text"></md-icon>
				</md-button>
			</form>

			<div layout="row" layout-align="end center" flex="15">
				<md-button ng-click="inventary.hideSearch()" class="md-icon-button" aria-label="Cerrar">
					<md-icon style="color: white;" md-svg-src="media/assets/img/icons/app/close.svg"></md-icon>
				</md-button>
			</div>

		</div>

		<div class="gray__bg overflow-h" layout="row">
			<div class="tab-option py-12 px-18 darkgray__text proxima__nova__regular fs__14px" ng-repeat="tab in inventary.usersModules.tabs" ng-class="tab.class" ng-click="inventary.tabsHandler($index)">{{ tab.text }}</div>
		</div>

		<div class="overflow-y-s h100-115" ng-class="inventary.usersModules.tabs[0].display" layout-padding>

			<div>

				<div layout="column" class="border-box--blue border-r4 overflow-h">

					<div layout="row" class="bluegray-light2-bg p-12">
						<div class="fs__14px dark__text proxima-soft-semibold">Filtros</div>
					</div>

					<md-divider class="bluegray-l3-brdr-c"></md-divider>

					<div class="mt-16 px-16 pb-5" layout="row" layout-align="start center">

						<md-input-container>

							<label>
								<span class="fs__13px gray-txt proxima-soft-regular">
									Perfil
								</span>
							</label>

							<md-select name="groupProfiles" ng-model="inventary.users.filters.profiles.selected" ng-change="inventary.users.resetAndUpdate(inventary.users.pagination.limit)">
								<md-option ng-repeat="profileKey in inventary.users.filters.profiles.members" ng-value="$index">
									<span class="dark__text fs__14px proxima-soft-regular">{{ profileKey.name }}</span>
								</md-option>
							</md-select>

						</md-input-container>

					</div>

				</div>

			</div>

			<div>

				<div class="overflow-h border-box--blue border-r4">

					<div class="bluegray-light2-bg border-box--blue-b px-24">

						<div layout="row">
	
							<div layout="row" layout-align="start center" flex="50" class="mt-12">

								<md-input-container>

									<label>
										<span class="gray-txt fs__13px proxima-soft-regular">
											Páginas
										</span>
									</label>

									<md-select name="groupPages" ng-model="inventary.users.pagination.current" ng-change="inventary.users.update()">
										<md-option ng-repeat="page in inventary.users.pagination.data.book" ng-value="page">
											<span class="dark__text fs__14px proxima-soft-regular">{{ page }}</span>
										</md-option>
									</md-select>

								</md-input-container>

								<div class="pl-24"></div>

								<md-input-container>
									<label>

										<span class="gray-txt fs__13px proxima-soft-regular">
											Filas
										</span>
									</label>

									<md-select name="groupLimit" ng-model="inventary.users.pagination.limit" ng-change="inventary.users.resetAndUpdate(inventary.users.pagination.limit)">
										<md-option ng-repeat="limit in inventary.paginationLimits" ng-value="limit">
											<span class="dark__text fs__14px proxima-soft-regular">{{ limit }}</span>
										</md-option>
									</md-select>

								</md-input-container>

							</div>
							
							<div class="dark__text fs__12px proxima-soft-light ml-24" layout="row" layout-align="end center" flex="50">
								{{ inventary.users.pagination.data.start }} - {{ inventary.users.pagination.data.end }} de {{ inventary.users.pagination.data.num_of_rows }}
							</div>
	
						</div>

					</div>

					<div class="overflow-x-s overflow-y-h">

						<div class="simple-table-content">

							<div class="border-box--blue-b px-24 py-10">

								<div layout="row" class="dark__text fs__14px proxima-soft-semibold">

									<div layout="row" flex="5" layout-align="left center">#</div>
									<div layout="row" flex="10" layout-align="left center">Username</div>
									<div layout="row" flex="25" layout-align="left center">Nombre</div>
									<div layout="row" flex="25" layout-align="left center">Correo</div>
									<div layout="row" flex="15" layout-align="left center">Teléfono</div>
									<div layout="row" flex="15" layout-align="left center">Creación</div>

									<div layout="row" flex="5" layout-align="center center">&#8942;</div>

								</div>

							</div>

							<div class="border-box--blue-b px-24" ng-repeat="user in inventary.users.members">

								<div layout="row" class="dark__text fs__14px proxima-soft-regular">

									<div layout="row" flex="5" layout-align="left center">{{ inventary.users.pagination.data.start + $index }}</div>
									<div layout="row" flex="10" layout-align="left center">{{ user.username }}</div>
									<div layout="row" flex="25" layout-align="left center">{{ user.name.first + ' ' + user.name.last }}</div>
									<div layout="row" flex="25" layout-align="left center">{{ user.email.username + '@' + user.email.domain.name }}</div>
									<div layout="row" flex="15" layout-align="left center">{{ user.phone.number }}</div>
									<div layout="row" flex="15" layout-align="left center">{{ user.create_at }}</div>

									<div layout="row" flex="5" layout-align="center center">

										<md-menu md-offset="-124 0" ng-controller="ContactMenuCtrl as contactCtrl">

											<div class="pointer" ng-click="contactCtrl.openMenu($mdMenu, $event)">
												<i class="material-icons black-text">more_vert</i>
											</div>

											<md-menu-content>

												<md-menu-item>
													<md-button ng-click="inventary.leads.show(user.id)">
														Clientes y leads
													</md-button>
												</md-menu-item>

											</md-menu-content>

										</md-menu>

									</div>

								</div>

							</div>

						</div>

					</div>

				</div>

			</div>

		</div>

		<div class="overflow-y-s h100-115" ng-class="inventary.usersModules.tabs[1].display" layout-padding>

			<div>

				<div class="border-box--blue border-r4 overflow-h" style="height: calc(100vh - 72px);">

                    <div layout="row" class="bluegray-light2-bg border-box--blue-b px-16">

                        <div layout="row" layout-align="start center" flex="50" class="mt-12">

                            <md-input-container>

                                <label>
                                    <span class="gray-txt fs__13px proxima-soft-regular">
                                        Páginas
                                    </span>
								</label>

                                <md-select name="leadsPages" ng-model="inventary.leads.pagination.current" ng-change="inventary.leads.update()">
                                    <md-option ng-repeat="page in inventary.leads.pagination.data.book" ng-value="page">
                                        <span class="dark__text fs__14px proxima-soft-regular">{{ page }}</span>
                                    </md-option>
								</md-select>

                            </md-input-container>

                            <div class="pl-24"></div>

                            <md-input-container>

                                <label>
                                    <span class="gray-txt fs__13px proxima-soft-regular">
                                        Filas
                                    </span>
								</label>

                                <md-select name="leadsLimit" ng-model="inventary.leads.pagination.limit" ng-change="inventary.leads.resetAndUpdate(inventary.leads.pagination.limit)" style="z-index:1009;">
                                    <md-option ng-repeat="limit in inventary.paginationLimits" ng-value="limit">
                                        <span class="dark__text fs__14px proxima-soft-regular">{{ limit }}</span>
                                    </md-option>
								</md-select>

                            </md-input-container>

                        </div>

                        <div class="dark__text fs__12px proxima-soft-light ml-24" layout="row" layout-align="end center" flex="50">
                            {{ inventary.leads.pagination.data.start }} - {{ inventary.leads.pagination.data.end }} de {{ inventary.leads.pagination.data.num_of_rows }}
                        </div>

                    </div>

                    <div class="overflow-x-s overflow-y-s">
                        <div class="h100v-172">

                            <div class="border-box--blue-b px-24 py-10">
                                <div layout="row" class="dark__text fs__14px proxima-soft-semibold">

                                    <div layout="row" flex="5" layout-align="left center" class="overflow-h">#</div>
                                    <div layout="row" flex="25" layout-align="left center" class="overflow-h pl-20">Nombre</div>
                                    <div layout="row" flex="20" layout-align="left center" class="overflow-h pl-20">Correo</div>
                                    <div layout="row" flex="20" layout-align="left center" class="overflow-h pl-20">Teléfono</div>
                                    <div layout="row" flex="10" layout-align="left center">Medio</div>
									<div layout="row" flex="15" layout-align="left center">Creación</div>

									<div layout="row" flex="5" layout-align="center center">&#8942;</div>

                                </div>
							</div>

                            <div class="border-box--blue-b px-24" ng-repeat="lead in inventary.leads.members">
                                <div layout="row" class="dark__text fs__14px proxima-soft-regular">

                                    <div layout="row" flex="5" layout-align="left center" class="overflow-h">{{ inventary.leads.pagination.data.start+$index }}</div>
                                    <div layout="row" flex="25" layout-align="left center" class="overflow-h pl-20">{{ lead.name.first + ' ' + lead.name.last }}</div>
                                    <div layout="row" flex="20" layout-align="left center" class="overflow-h pl-20">{{ lead.email.username + '@' + lead.email.domain.name }}</div>
                                    <div layout="row" flex="20" layout-align="left center" class="overflow-h pl-20">+52 {{ lead.phone.number }}</div>
                                    <div layout="row" flex="10" layout-align="left center">{{ inventary.leads.medium[lead.idMedium] }}</div>
									<div layout="row" flex="15" layout-align="left center">{{ lead.create_at }}</div>
									
									<div layout="row" flex="5" layout-align="center center">

										<md-menu md-offset="-124 0" ng-controller="ContactMenuCtrl as contactCtrl">

											<div class="pointer" ng-click="contactCtrl.openMenu($mdMenu, $event)">
												<i class="material-icons black-text">more_vert</i>
											</div>

											<md-menu-content>

												<div ng-if="inventary.users.event === 'setLeadProperty'">

													<md-menu-item>
														<md-button ng-click="inventary.leads.showTeam(lead.id)">
															Propietario
														</md-button>
													</md-menu-item>

													<md-menu-item>
														<md-button ng-click="inventary.leads.setProperty(lead.id, 6)">
															Estratégico
														</md-button>
													</md-menu-item>

													<md-menu-item>
														<md-button ng-click="inventary.leads.setProperty(lead.id, 2)">
															En espera
														</md-button>
													</md-menu-item>

													<md-menu-item>
														<md-button ng-click="inventary.leads.setProperty(lead.id, 3)">
															Apartado
														</md-button>
													</md-menu-item>

													<md-menu-item>
														<md-button ng-click="inventary.leads.setProperty(lead.id, 4)">
															Enganchado
														</md-button>
													</md-menu-item>

													<md-menu-item>
														<md-button ng-click="inventary.leads.setProperty(lead.id, 5)">
															Vendido
														</md-button>
													</md-menu-item>

												</div>

												<div ng-if="inventary.users.event === 'updateLeadProperty'">

													<md-menu-item>
														<md-button ng-click="inventary.updateLeadProperty(lead.id)">
															Cambiar propietario
														</md-button>
													</md-menu-item>

												</div>

											</md-menu-content>

										</md-menu>

									</div>

                                </div>
							</div>

                        </div>
					</div>

				</div>

			</div>

		</div>

	</div>

	<div class="modal-dialog white__bg" ng-if="inventary.views.search.userLeads" ng-clock>

		<div class="dark__bg pl-20 pr-10 py-10 overflow-h" layout="row" style="height:48px;">

			<div layout="row" layout-align="start center" flex="70">
				<span class="light-txt">Clientes & Leads</span>
			</div>

			<div layout="row" layout-align="end center" flex="30">
				<md-button ng-click="inventary.leads.close()" class="md-icon-button" aria-label="Cerrar">
					<md-icon style="color: white;" md-svg-src="media/assets/img/icons/app/close.svg"></md-icon>
				</md-button>
			</div>

		</div>

		<div class="overflow-y-s h100-40" layout-padding>

			<div>

				<div class="overflow-h border-box--blue border-r4">

					<div class="bluegray-light2-bg border-box--blue-b px-24">

						<div layout="row">
	
							<div layout="row" layout-align="start center" flex="50" class="mt-12">

								<md-input-container>

									<label>
										<span class="gray-txt fs__13px proxima-soft-regular">
											Páginas
										</span>
									</label>

									<md-select name="groupPages" ng-model="inventary.leads.pagination.current" ng-change="inventary.leads.updateUserLeads()">
										<md-option ng-repeat="page in inventary.leads.pagination.data.book" ng-value="page">
											<span class="dark__text fs__14px proxima-soft-regular">{{ page }}</span>
										</md-option>
									</md-select>

								</md-input-container>

								<div class="pl-24"></div>

								<md-input-container>

									<label>
										<span class="gray-txt fs__13px proxima-soft-regular">
											Filas
										</span>
									</label>

									<md-select name="groupLimit" ng-model="inventary.leads.pagination.limit" ng-change="inventary.leads.resetAndUpdateUserLeads(inventary.leads.pagination.limit)">
										<md-option ng-repeat="limit in inventary.paginationLimits" ng-value="limit">
											<span class="dark__text fs__14px proxima-soft-regular">{{ limit }}</span>
										</md-option>
									</md-select>

								</md-input-container>

							</div>

							<div class="dark__text fs__12px proxima-soft-light ml-24" layout="row" layout-align="end center" flex="50">
								{{ inventary.leads.pagination.data.start }} - {{ inventary.leads.pagination.data.end }} de {{ inventary.leads.pagination.data.num_of_rows }}
							</div>
	
						</div>

					</div>

					<div class="overflow-x-s overflow-y-h">

						<div class="simple-table-content">

							<div class="border-box--blue-b px-24 py-10">

								<div layout="row" class="dark__text fs__14px proxima-soft-semibold">

								<div layout="row" flex="5" layout-align="left center" class="overflow-h">#</div>

                                    <div layout="row" flex="25" layout-align="left center" class="overflow-h pl-20">Nombre</div>
                                    <div layout="row" flex="20" layout-align="left center" class="overflow-h pl-20">Correo</div>
                                    <div layout="row" flex="20" layout-align="left center" class="overflow-h pl-20">Teléfono</div>
                                    <div layout="row" flex="10" layout-align="left center">Medio</div>
									<div layout="row" flex="15" layout-align="left center">Creación</div>

									<div layout="row" flex="5" layout-align="center center">&#8942;</div>

								</div>

							</div>

							<div class="border-box--blue-b px-24" ng-repeat="lead in inventary.leads.members">

								<div layout="row" class="dark__text fs__14px proxima-soft-regular">

								<div layout="row" flex="5" layout-align="left center" class="overflow-h">{{ inventary.leads.pagination.data.start+$index }}</div>
                                    <div layout="row" flex="25" layout-align="left center" class="overflow-h pl-20">{{ lead.name.first + ' ' + lead.name.last }}</div>
                                    <div layout="row" flex="20" layout-align="left center" class="overflow-h pl-20">{{ lead.email.username + '@' + lead.email.domain.name }}</div>
                                    <div layout="row" flex="20" layout-align="left center" class="overflow-h pl-20">+52 {{ lead.phone.number }}</div>
                                    <div layout="row" flex="10" layout-align="left center">{{ inventary.leads.medium[lead.idMedium] }}</div>
									<div layout="row" flex="15" layout-align="left center">{{ lead.create_at }}</div>

									<div layout="row" flex="5" layout-align="center center">

										<md-menu md-offset="-124 0" ng-controller="ContactMenuCtrl as contactCtrl">

											<div class="pointer" ng-click="contactCtrl.openMenu($mdMenu, $event)">
												<i class="material-icons black-text">more_vert</i>
											</div>

											<md-menu-content>

												<div ng-if="inventary.users.event === 'setLeadProperty'">

													<md-menu-item>
														<md-button ng-click="inventary.leads.showTeam(lead.id)">
															Propietario
														</md-button>
													</md-menu-item>

													<md-menu-item>
														<md-button ng-click="inventary.leads.setProperty(lead.id, 6)">
															Estratégico
														</md-button>
													</md-menu-item>

													<md-menu-item>
														<md-button ng-click="inventary.leads.setProperty(lead.id, 2)">
															En espera
														</md-button>
													</md-menu-item>

													<md-menu-item>
														<md-button ng-click="inventary.leads.setProperty(lead.id, 3)">
															Apartado
														</md-button>
													</md-menu-item>

													<md-menu-item>
														<md-button ng-click="inventary.leads.setProperty(lead.id, 4)">
															Enganchado
														</md-button>
													</md-menu-item>

													<md-menu-item>
														<md-button ng-click="inventary.leads.setProperty(lead.id, 5)">
															Vendido
														</md-button>
													</md-menu-item>

												</div>

												<div ng-if="inventary.users.event === 'updateLeadProperty'">

													<md-menu-item>
														<md-button ng-click="inventary.updateLeadProperty(lead.id)">
															Cambiar propietario
														</md-button>
													</md-menu-item>

												</div>

											</md-menu-content>

										</md-menu>

									</div>

								</div>

							</div>

						</div>

					</div>

				</div>

			</div>

		</div>

	</div>

	<div class="modal-dialog white__bg" ng-if="inventary.views.search.team" ng-clock>

		<div class="pl-16 dark__bg" layout="row">

			<div layout="row" layout-align="start center" flex="80">
				<span class="light-txt">Propietario</span>
			</div>

			<div layout="row" layout-align="end center" flex="20">
				<md-button ng-click="inventary.leads.hideTeam()" class="md-icon-button" aria-label="Cerrar">
					<md-icon style="color: white;" md-svg-src="media/assets/img/icons/app/close.svg"></md-icon>
				</md-button>
			</div>

		</div>

		<div class="overflow-y-s h100-55" layout-padding>

			<div>
				<div class="border-box--blue border-r4 overflow-y-h">

					<div class="bluegray-light2-bg border-box--blue-b px-20 py-10">
						<span class="fs__16px gray-txt proxima__nova__regular">
							Información del cliente y propietario
						</span>
					</div>

					<div class="px-40" layout="column" layout-gt-sm="row" layout-align="space-around start" flex="100">

						<div class="py-40" layout="column">
							
							<div class="pb-12 w100">
								<span class="fs__14fs proxima__nova__regular darkgray__text">Cliente</span>
							</div>

							<div class="py-12" layout="row" layout-align="start center">

								<div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Nombre</div>
								<div class="px-16"></div>
								<div class="fs__14px w124 proxima__nova__light">{{ inventary.userLead.lead.name + ' ' + inventary.userLead.lead.last_name }}</div>

							</div>

							<div class="py-12" layout="row" layout-align="start center">

								<div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Sexo</div>
								<div class="px-16"></div>
								<div class="fs__14px w124 proxima__nova__light">{{ inventary.userLead.lead.gender }}</div>

							</div>

							<div class="py-12" layout="row" layout-align="start center">

								<div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Correo</div>
								<div class="px-16"></div>
								<div class="fs__14px w124 proxima__nova__light">{{ inventary.userLead.lead.email }}</div>

							</div>

							<div class="py-12" layout="row" layout-align="start center">

								<div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Teléfono</div>
								<div class="px-16"></div>
								<div class="fs__14px w124 proxima__nova__light">{{ inventary.userLead.lead.phone }}</div>

							</div>

							<div class="py-12" layout="row" layout-align="start center">

								<div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Medio</div>
								<div class="px-16"></div>
								<div class="fs__14px w124 proxima__nova__light">{{ inventary.userLead.lead.medium }}</div>

							</div>

							<div class="py-12" layout="row" layout-align="start center">

								<div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Dirección</div>
								<div class="px-16"></div>
								<div class="fs__14px w124 proxima__nova__light">{{ inventary.userLead.lead.address }}</div>

							</div>

							<div class="py-12" layout="row" layout-align="start center">

								<div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Creación</div>
								<div class="px-16"></div>
								<div class="fs__14px w124 proxima__nova__light">{{ inventary.userLead.lead.create_at }}</div>

							</div>

						</div>

						<div class="py-40" layout="column">
							
							<div class="pb-12 w100">
								<span class="fs__14fs proxima__nova__regular darkgray__text">Asesor</span>
							</div>

							<div class="py-12" layout="row" layout-align="start center">

								<div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Nombre</div>
								<div class="px-16"></div>
								<div class="fs__14px w124 proxima__nova__light">{{ inventary.userLead.user.name + inventary.userLead.user.last_name }}</div>

							</div>

							<div class="py-12" layout="row" layout-align="start center">

								<div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Sexo</div>
								<div class="px-16"></div>
								<div class="fs__14px w124 proxima__nova__light">{{ inventary.userLead.user.gender }}</div>

							</div>

							<div class="py-12" layout="row" layout-align="start center">

								<div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Correo</div>
								<div class="px-16"></div>
								<div class="fs__14px w124 proxima__nova__light">{{ inventary.userLead.user.email }}</div>

							</div>

							<div class="py-12" layout="row" layout-align="start center">

								<div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Teléfono</div>
								<div class="px-16"></div>
								<div class="fs__14px w124 proxima__nova__light">{{ inventary.userLead.user.phone }}</div>

							</div>

							<div class="py-12" layout="row" layout-align="start center">

								<div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Dirección</div>
								<div class="px-16"></div>
								<div class="fs__14px w124 proxima__nova__light">{{ inventary.userLead.user.address }}</div>

							</div>

							<div class="py-12" layout="row" layout-align="start center">

								<div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Creación</div>
								<div class="px-16"></div>
								<div class="fs__14px w124 proxima__nova__light">{{ inventary.userLead.user.create_at }}</div>

							</div>

						</div>

					</div>

				</div>
			</div>

		</div>

	</div>

	<div class="modal-dialog white__bg" ng-if="inventary.views.search.findInUsers" ng-clock>

		<div class="dark__bg pl-20 pr-10 py-10 overflow-h" layout="row" style="height:48px;">

			<div layout="row" layout-align="start center" flex="70">
				<span class="light-txt">Resultados de busqueda</span>
			</div>

			<div layout="row" layout-align="end center" flex="30">
				<md-button ng-click="inventary.search.close()" class="md-icon-button" aria-label="Cerrar">
					<md-icon style="color: white;" md-svg-src="media/assets/img/icons/app/close.svg"></md-icon>
				</md-button>
			</div>

		</div>

		<div class="overflow-y-s h100-64" layout-padding>

			<div>

				<div class="overflow-h border-box--blue border-r4">

					<div class="bluegray-light2-bg border-box--blue-b px-24">

						<div layout="row">
	
							<div layout="row" layout-align="start center" flex="50" class="mt-12">

								<md-input-container>

									<label>
										<span class="gray-txt fs__13px proxima-soft-regular">
											Páginas
										</span>
									</label>

									<md-select name="groupPages" ng-model="inventary.search.pagination.current" ng-change="inventary.search.update()">
										<md-option ng-repeat="page in inventary.search.pagination.data.book" ng-value="page">
											<span class="dark__text fs__14px proxima-soft-regular">{{ page }}</span>
										</md-option>
									</md-select>

								</md-input-container>

								<div class="pl-24"></div>

								<md-input-container>

									<label>
										<span class="gray-txt fs__13px proxima-soft-regular">
											Filas
										</span>
									</label>

									<md-select name="groupLimit" ng-model="inventary.search.pagination.limit" ng-change="inventary.search.resetAndUpdate(inventary.search.pagination.limit)">
										<md-option ng-repeat="limit in inventary.paginationLimits" ng-value="limit">
											<span class="dark__text fs__14px proxima-soft-regular">{{ limit }}</span>
										</md-option>
									</md-select>

								</md-input-container>

							</div>
							
							<div class="dark__text fs__12px proxima-soft-light ml-24" layout="row" layout-align="end center" flex="50">
								{{ inventary.search.pagination.data.start }} - {{ inventary.search.pagination.data.end }} de {{ inventary.search.pagination.data.num_of_rows }}
							</div>
	
						</div>

					</div>

					<div class="overflow-x-s overflow-y-h">

						<div class="simple-table-content">

							<div class="border-box--blue-b px-24 py-10">

								<div layout="row" class="dark__text fs__14px proxima-soft-semibold">

									<div layout="row" flex="5" layout-align="left center">#</div>
									<div layout="row" flex="10" layout-align="left center">Username</div>
									<div layout="row" flex="25" layout-align="left center">Nombre</div>
									<div layout="row" flex="25" layout-align="left center">Correo</div>
									<div layout="row" flex="15" layout-align="left center">Teléfono</div>
									<div layout="row" flex="15" layout-align="left center">Creación</div>

									<div layout="row" flex="5" layout-align="center center">&#8942;</div>

								</div>

							</div>

							<div class="border-box--blue-b px-24" ng-repeat="user in inventary.search.result">

								<div layout="row" class="dark__text fs__14px proxima-soft-regular">

									<div layout="row" flex="5" layout-align="left center">{{ inventary.search.pagination.data.start + $index }}</div>
									<div layout="row" flex="10" layout-align="left center">{{ user.username }}</div>
									<div layout="row" flex="25" layout-align="left center">{{ user.name.first + ' ' + user.name.last }}</div>
									<div layout="row" flex="25" layout-align="left center">{{ user.email.username + '@' + user.email.domain.name }}</div>
									<div layout="row" flex="15" layout-align="left center">{{ user.phone.number }}</div>
									<div layout="row" flex="15" layout-align="left center">{{ user.create_at }}</div>

									<div layout="row" flex="5" layout-align="center center">

										<md-menu md-offset="-124 0" ng-controller="ContactMenuCtrl as contactCtrl">

											<button class="btn-floating no__shadow transparent__bg" ng-click="contactCtrl.openMenu($mdMenu, $event)">
												<i class="material-icons black-text">more_vert</i>
											</button>

											<md-menu-content>

												<md-menu-item>
													<md-button ng-click="inventary.leads.show(user.id)">
														Clientes y leads
													</md-button>
												</md-menu-item>

											</md-menu-content>

										</md-menu>

									</div>

								</div>

							</div>

						</div>

					</div>

				</div>

			</div>

		</div>

	</div>

	<div class="modal-dialog white__bg" ng-if="inventary.views.search.findInLeads" ng-clock>

		<div class="dark__bg pl-20 pr-10 py-10 overflow-h" layout="row" style="height:48px;">

			<div layout="row" layout-align="start center" flex="70">
				<span class="light-txt">Resultados de busqueda</span>
			</div>

			<div layout="row" layout-align="end center" flex="30">
				<md-button ng-click="inventary.search.close()" class="md-icon-button" aria-label="Cerrar">
					<md-icon style="color: white;" md-svg-src="media/assets/img/icons/app/close.svg"></md-icon>
				</md-button>
			</div>

		</div>

		<div class="overflow-y-s h100-64" layout-padding>

			<div>

				<div class="overflow-h border-box--blue border-r4">

					<div class="bluegray-light2-bg border-box--blue-b px-24">

						<div layout="row">
	
							<div layout="row" layout-align="start center" flex="50" class="mt-12">

								<md-input-container>

									<label>
										<span class="gray-txt fs__13px proxima-soft-regular">
											Páginas
										</span>
									</label>

									<md-select name="groupPages" ng-model="inventary.search.pagination.current" ng-change="inventary.search.update()">
										<md-option ng-repeat="page in inventary.search.pagination.data.book" ng-value="page">
											<span class="dark__text fs__14px proxima-soft-regular">{{ page }}</span>
										</md-option>
									</md-select>

								</md-input-container>

								<div class="pl-24"></div>

								<md-input-container>

									<label>
										<span class="gray-txt fs__13px proxima-soft-regular">
											Filas
										</span>
									</label>

									<md-select name="groupLimit" ng-model="inventary.search.pagination.limit" ng-change="inventary.search.resetAndUpdate(inventary.search.pagination.limit)">
										<md-option ng-repeat="limit in inventary.paginationLimits" ng-value="limit">
											<span class="dark__text fs__14px proxima-soft-regular">{{ limit }}</span>
										</md-option>
									</md-select>

								</md-input-container>

							</div>

							<div class="dark__text fs__12px proxima-soft-light ml-24" layout="row" layout-align="end center" flex="50">
								{{ inventary.search.pagination.data.start }} - {{ inventary.search.pagination.data.end }} de {{ inventary.search.pagination.data.num_of_rows }}
							</div>
	
						</div>

					</div>

					<div class="overflow-x-s overflow-y-h">

						<div class="simple-table-content">

							<div class="border-box--blue-b px-24 py-10">

								<div layout="row" class="dark__text fs__14px proxima-soft-semibold">

									<div layout="row" flex="5" layout-align="left center">#</div>
									<div layout="row" flex="25" layout-align="left center">Nombre</div>
									<div layout="row" flex="25" layout-align="left center">Correo</div>
									<div layout="row" flex="15" layout-align="left center">Teléfono</div>
									<div layout="row" flex="10" layout-align="left center">Medio</div>
									<div layout="row" flex="15" layout-align="left center">Creación</div>

									<div layout="row" flex="5" layout-align="center center">&#8942;</div>

								</div>

							</div>

							<div class="border-box--blue-b px-24" ng-repeat="lead in inventary.search.result">

								<div layout="row" class="dark__text fs__14px proxima-soft-regular">

									<div layout="row" flex="5" layout-align="left center">{{ inventary.search.pagination.data.start + $index }}</div>
									<div layout="row" flex="25" layout-align="left center">{{ lead.name.first + ' ' + lead.name.last }}</div>
									<div layout="row" flex="25" layout-align="left center">{{ lead.email.username + '@' + lead.email.domain.name }}</div>
									<div layout="row" flex="15" layout-align="left center">{{ lead.phone.number }}</div>
									<div layout="row" flex="10" layout-align="left center">{{ lead.medium }}</div>
									<div layout="row" flex="15" layout-align="left center">{{ lead.create_at }}</div>

									<div layout="row" flex="5" layout-align="center center">

										<md-menu md-offset="-112 0" ng-controller="ContactMenuCtrl as contactCtrl">

											<button class="btn-floating no__shadow transparent__bg" ng-click="contactCtrl.openMenu($mdMenu, $event)">
												<i class="material-icons black-text">more_vert</i>
											</button>

											<md-menu-content>

												<div ng-if="inventary.users.event === 'setLeadProperty'">

													<md-menu-item>
														<md-button ng-click="inventary.leads.showTeam(lead.id)">
															Propietario
														</md-button>
													</md-menu-item>

													<md-menu-item>
														<md-button ng-click="inventary.leads.setProperty(lead.id, 6)">
															Estratégico
														</md-button>
													</md-menu-item>

													<md-menu-item>
														<md-button ng-click="inventary.leads.setProperty(lead.id, 2)">
															En espera
														</md-button>
													</md-menu-item>

													<md-menu-item>
														<md-button ng-click="inventary.leads.setProperty(lead.id, 3)">
															Apartado
														</md-button>
													</md-menu-item>

													<md-menu-item>
														<md-button ng-click="inventary.leads.setProperty(lead.id, 4)">
															Enganchado
														</md-button>
													</md-menu-item>

													<md-menu-item>
														<md-button ng-click="inventary.leads.setProperty(lead.id, 5)">
															Vendido
														</md-button>
													</md-menu-item>

												</div>

												<div ng-if="inventary.users.event === 'updateLeadProperty'">

													<md-menu-item>
														<md-button ng-click="inventary.updateLeadProperty(lead.id)">
															Cambiar propietario
														</md-button>
													</md-menu-item>

												</div>
	
											</md-menu-content>

										</md-menu>

									</div>

								</div>

							</div>

						</div>

					</div>

				</div>

			</div>

		</div>

	</div>

</body>
</html>