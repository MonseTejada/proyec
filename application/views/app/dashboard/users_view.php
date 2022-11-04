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

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="media/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="media/assets/css/helpers.css">

    <script type="text/javascript" src="media/bower_components/jquery.min.js"></script>
</head>
<body ng-controller="UsersCtrl as users">
    
    <div ng-class="is_scrollin">

	    <div ng-include="'application/views/app/nav/nav_search.html'"></div>

        <div layout-padding class="overflow-h">
            <div>
    
                <div layout="row" class="pb-5 pl-5">
                    <div layout="row" flex="50" layout-align="start center">
                        <div class="proxima-soft-semibold dark__text fs__18px">Usuarios</div>
                    </div>
                    <div layout="row" flex="50" layout-align="end center">

                        <!-- <md-button class="border__btn" ng-click="users.insertInmovablesToZohoNow()">
                            <span class="blue__text proxima-soft-semibold fs__12px px-10" ng-click="">S<span class="to__lowercase">inc</span></span>
                        </md-button> -->

                        <md-button class="border__btn" ng-click="users.openNewUserModal()">
                            <span class="blue__text proxima-soft-semibold fs__12px px-10" ng-click="">N<span class="to__lowercase">uevo</span></span>
                        </md-button>

                    </div>
                </div>

                <md-divider class="bluegray-l3-brdr-c"></md-divider>

                <div layout="column" class="border-box--blue border-r4 mt-16 overflow-h">

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
                            <md-select name="groupProfiles" ng-model="users.group.filters.profiles.selected" ng-change="users.group.resetAndUpdate()">
                                <md-option ng-repeat="profile in users.group.filters.profiles.members" ng-value="profile">
                                    <span class="dark__text fs__14px proxima-soft-regular">{{profile}}</span>
                                </md-option>
                            </md-select>
                        </md-input-container>

                        <div class="pl-16"></div>

                        <md-input-container>
                            <label>
                                <span class="gray-txt fs__13px proxima-soft-regular">
                                    Estado
                                </span>
                            </label>
                            <md-select name="groupStatus" ng-model="users.group.filters.status.selected" ng-change="users.group.resetAndUpdate()">
                                <md-option ng-repeat="status in users.group.filters.status.members" ng-value="$index">
                                    <span class="dark__text fs__14px proxima-soft-regular">{{status}}</span>
                                </md-option>
                            </md-select>
                        </md-input-container>

                    </div>
                </div>

                <div class="overflow-h border-box--blue mt-16 border-r4">
                    <div class="bluegray-light2-bg border-box--blue-b px-24">
                        <div layout="row">

                            <div layout="row" layout-align="start center" flex="50" class="mt-12">

                                <md-input-container>
                                    <label>
                                        <span class="gray-txt fs__13px proxima-soft-regular">
                                            Páginas
                                        </span>
                                    </label>
                                    <md-select name="groupPages" ng-model="users.group.pagination.config.current" ng-change="users.group.update()">
                                        <md-option ng-repeat="page in users.group.pagination.data.book" ng-value="page">
                                            <span class="dark__text fs__14px proxima-soft-regular">{{page}}</span>
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
                                    <md-select name="groupLimit" ng-model="users.group.pagination.config.limit.selected" ng-change="users.group.resetAndUpdate()">
                                        <md-option ng-repeat="limit in users.group.pagination.config.limit.members" ng-value="limit">
                                            <span class="dark__text fs__14px proxima-soft-regular">{{limit}}</span>
                                        </md-option>
                                    </md-select>
                                </md-input-container>
                            </div>
                            
                            <div class="dark__text fs__12px proxima-soft-light ml-24" layout="row" layout-align="end center" flex="50">
                                {{users.group.pagination.data.start}} - {{users.group.pagination.data.end}} de {{users.group.pagination.data.num_of_rows}}
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
                                    <div layout="row" flex="10" layout-align="left center">Teléfono</div>
                                    <div layout="row" flex="10" layout-align="left center">Perfil</div>
                                    <div layout="row" flex="10" layout-align="left center">Creación</div>
                                    <div layout="row" flex="5" layout-align="center center">&#8942;</div>
                                </div>
                            </div>
                            <div class="border-box--blue-b px-24" ng-repeat="member in users.group.members">
                                <div layout="row" class="dark__text fs__14px proxima-soft-regular">
                                    <div layout="row" flex="5" layout-align="left center">{{users.group.pagination.data.start+$index}}</div>
                                    <div layout="row" flex="10" layout-align="left center">{{member.username}}</div>
                                    <div layout="row" flex="25" layout-align="left center">{{member.name.first + ' ' + member.name.last}}</div>
                                    <div layout="row" flex="25" layout-align="left center">{{member.email.username + '@' + member.email.domain.name}}</div>
                                    <div layout="row" flex="10" layout-align="left center">{{member.phone.number}}</div>
                                    <div layout="row" flex="10" layout-align="left center">{{users.group.filters.profiles.members[member.idProfile-1]}}</div>
                                    <div layout="row" flex="10" layout-align="left center">{{member.create_at}}</div>
                                    <div layout="row" flex="5" layout-align="center center">
                                        <md-menu md-offset="-164 -200" ng-controller="ContactMenuCtrl as contactCtrl">

                                            <div class="pointer" ng-click="contactCtrl.openMenu($mdMenu, $event)">
                                                <i class="material-icons black-text">more_vert</i>
                                            </div>

                                            <md-menu-content>

                                                <md-menu-item ng-class="users.group.options.managers">
                                                    <md-button ng-click="users.team.request(member.id)">
                                                        Miembros de equipo
                                                    </md-button>
                                                </md-menu-item>

                                                <md-menu-item ng-class="users.group.options.managers">
                                                    <md-button ng-click="users.free.request(member.team, 3)">
                                                        Asesores libres
                                                    </md-button>
                                                </md-menu-item>
        
                                                <md-menu-item>
                                                    <md-button ng-click="users.leads.request(member.id)">
                                                        Clientes y leads
                                                    </md-button>
                                                </md-menu-item>

                                                <md-menu-divider></md-menu-divider>

                                                <md-menu-item>
                                                    <md-button ng-click="users.update(member, 'group')">
                                                        Editar
                                                    </md-button>
                                                </md-menu-item>

                                                <md-menu-item ng-class="users.group.options.menu_items.delete">
                                                    <md-button ng-click="users.group.delete(member.id)">
                                                        Eliminar
                                                    </md-button>
                                                </md-menu-item>
        
                                                <md-menu-item ng-class="users.group.options.menu_items.restore">
                                                    <md-button ng-click="users.group.active(member.id)">
                                                        Restaurar
                                                    </md-button>
                                                </md-menu-item>
                
                                            </md-menu-content>
                
                                        </md-menu>
                                    </div>
                                </div>
                            </div>
                            <div class="dark__text proxima-soft-regular fs__16px center p-16" ng-class="users.group.status.value">
                                {{users.group.status.message}}
                            </div>
                        </div>
                    </div>
                </div>
        
            </div>
        </div>
    
        <div class="modal-dialog white__bg" ng-class="users.search.options.modal_display">
    
            <div class="pl-16 dark__bg" layout="row">
                <div layout="row" layout-align="start center" flex="80">
                    <span class="light-txt">Resultados de busqueda</span>
                </div>
                <div layout="row" layout-align="end center" flex="20">
                    <md-button ng-click="users.search.hideModal()" class="md-icon-button" aria-label="Cerrar">
                        <md-icon style="color: white;" md-svg-src="media/assets/img/icons/app/close.svg"></md-icon>
                    </md-button>
                </div>
            </div>

            <div layout-padding>
                <div>
                    <div class="overflow-h border-box--blue border-r4" style="height: calc(100vh - 72px);">
                        <div layout="row" class="bluegray-light2-bg border-box--blue-b px-16">
        
                            <div layout="row" layout-align="start center" flex="50" class="mt-12">
            
                                <md-input-container>
                                    <label>
                                        <span class="gray-txt fs__13px proxima-soft-regular">
                                            Páginas
                                        </span>
                                    </label>
                                    <md-select name="searchPages" ng-model="users.search.pagination.config.current" ng-change="users.search.update()">
                                        <md-option ng-repeat="page in users.search.pagination.data.book" ng-value="page">
                                            <span class="dark__text fs__14px proxima-soft-regular">{{page}}</span>
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
                                    <md-select name="searchLimit" ng-model="users.search.pagination.config.limit.selected" ng-change="users.search.resetAndUpdate()" style="z-index:1009;">
                                        <md-option ng-repeat="limit in users.search.pagination.config.limit.members" ng-value="limit">
                                            <span class="dark__text fs__14px proxima-soft-regular">{{limit}}</span>
                                        </md-option>
                                    </md-select>
                                </md-input-container>
        
                            </div>
                            
                            <div class="dark__text fs__12px proxima-soft-light ml-24" layout="row" layout-align="end center" flex="50">
                                {{users.search.pagination.data.start}} - {{users.search.pagination.data.end}} de {{users.search.pagination.data.num_of_rows}}
                            </div>
        
                        </div>
        
                        <div class="overflow-y-s overflow-x-s">
                            <div class="result-table-container">
                                <div class="border-box--blue-b px-24 py-10">
                                    <div layout="row" class="dark__text fs__14px proxima-soft-semibold">
                                        <div layout="row" flex="5" layout-align="left center" class="overflow-h">#</div>
                                        <div layout="row" flex="10" layout-align="left center" class="overflow-h pl-20">usuario</div>
                                        <div layout="row" flex="20" layout-align="left center" class="overflow-h pl-20">Nombre</div>
                                        <div layout="row" flex="20" layout-align="left center" class="overflow-h pl-20">Correo</div>
                                        <div layout="row" flex="20" layout-align="left center" class="overflow-h pl-20">Teléfono</div>
                                        <div layout="row" flex="10" layout-align="left center">Perfil</div>
                                        <div layout="row" flex="10" layout-align="left center">Creación</div>
                                        <div layout="row" flex="5" layout-align="center center">&#8942;</div>
                                    </div>
                                </div>
                                <div class="border-box--blue-b px-24 py-10" ng-repeat="member in users.search.members">
                                    <div layout="row" class="dark__text fs__14px proxima-soft-regular">
                                        <div layout="row" flex="5" layout-align="left center" class="overflow-h">{{users.search.pagination.data.start+$index}}</div>
                                        <div layout="row" flex="10" layout-align="left center" class="overflow-h pl-20">{{member.username}}</div>
                                        <div layout="row" flex="20" layout-align="left center" class="overflow-h pl-20">{{member.name.first + ' ' + member.name.last}}</div>
                                        <div layout="row" flex="20" layout-align="left center" class="overflow-h pl-20">{{member.email.username + '@' + member.email.domain.name}}</div>
                                        <div layout="row" flex="20" layout-align="left center" class="overflow-h pl-20">+52 {{member.phone.number}}</div>
                                        <div layout="row" flex="10" layout-align="left center">{{users.group.filters.profiles.members[member.idProfile-1]}}</div>
                                        <div layout="row" flex="10" layout-align="left center">{{member.create_at}}</div>
                                        <div layout="row" flex="5" layout-align="center center">
                                            <md-menu md-offset="-164 -128" ng-controller="ContactMenuCtrl as contactCtrl">
                                                
                                                <button class="btn-floating no__shadow transparent__bg" ng-click="contactCtrl.openMenu($mdMenu, $event)">
                                                    <i class="material-icons black-text">more_vert</i>
                                                </button>
        
                                                <md-menu-content>
                    
                                                    <md-menu-item ng-class="users.group.options.managers">
                                                        <md-button ng-click="users.team.request(member.id, member.idProfile)">
                                                            Miembros de equipo
                                                        </md-button>
                                                    </md-menu-item>
        
                                                    <md-menu-item ng-class="users.group.options.managers">
                                                        <md-button ng-click="users.free.request(member.team, 3)">
                                                            Asesores libres
                                                        </md-button>
                                                    </md-menu-item>
        
                                                    <md-menu-item>
                                                        <md-button ng-click="users.leads.request(member.id)">
                                                            Clientes y leads
                                                        </md-button>
                                                    </md-menu-item>

                                                    <md-menu-divider></md-menu-divider>

                                                    <md-menu-item>
                                                        <md-button ng-click="users.update(member)">
                                                            Editar
                                                        </md-button>
                                                    </md-menu-item>

                                                    <md-menu-item ng-class="users.group.options.menu_items.delete">
                                                        <md-button ng-click="users.search.delete(member.id)">
                                                            Eliminar
                                                        </md-button>
                                                    </md-menu-item>
        
                                                    <md-menu-item ng-class="users.group.options.menu_items.restore">
                                                        <md-button ng-click="users.search.active(member.id)">
                                                            Restaurar
                                                        </md-button>
                                                    </md-menu-item>
        
                                                </md-menu-content>
                    
                                            </md-menu>
                                        </div>
                                    </div>
                                </div>
                                <div class="dark__text proxima-soft-regular fs__16px center p-16" ng-class="users.search.status.value">
                                    {{users.search.status.message}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal-dialog white__bg" ng-class="users.team.options.modal_display">
    
            <div class="pl-16 dark__bg" layout="row">
                <div layout="row" layout-align="start center" flex="80">
                    <span class="light-txt">Equipo</span>
                </div>
                <div layout="row" layout-align="end center" flex="20">
                    <md-button ng-click="users.team.hideModal()" class="md-icon-button" aria-label="Cerrar">
                        <md-icon style="color: white;" md-svg-src="media/assets/img/icons/app/close.svg"></md-icon>
                    </md-button>
                </div>
            </div>

            <div layout-padding>
                <div>
                    <div class="overflow-h border-box--blue border-r4" style="height: calc(100vh - 72px);">
                        <div layout="row" class="bluegray-light2-bg border-box--blue-b px-16">
        
                            <div layout="row" layout-align="start center" flex="50" class="mt-12">
            
                                <md-input-container>
                                    <label>
                                        <span class="gray-txt fs__13px proxima-soft-regular">
                                            Páginas
                                        </span>
                                    </label>
                                    <md-select name="teamPages" ng-model="users.team.pagination.config.current" ng-change="users.team.update()">
                                        <md-option ng-repeat="page in users.team.pagination.data.book" ng-value="page">
                                            <span class="dark__text fs__14px proxima-soft-regular">{{page}}</span>
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
                                    <md-select name="teamLimit" ng-model="users.team.pagination.config.limit.selected" ng-change="users.team.resetAndUpdate()" style="z-index:1009;">
                                        <md-option ng-repeat="limit in users.team.pagination.config.limit.members" ng-value="limit">
                                            <span class="dark__text fs__14px proxima-soft-regular">{{limit}}</span>
                                        </md-option>
                                    </md-select>
                                </md-input-container>
        
                            </div>
                            
                            <div class="dark__text fs__12px proxima-soft-light ml-24" layout="row" layout-align="end center" flex="50">
                                {{users.team.pagination.data.start}} - {{users.team.pagination.data.end}} de {{users.team.pagination.data.num_of_rows}}
                            </div>
        
                        </div>
        
                        <div class="overflow-y-s overflow-x-s">
                            <div class="result-table-container">
                                <div class="border-box--blue-b px-24 py-10">
                                    <div layout="row" class="dark__text fs__14px proxima-soft-semibold">
                                        <div layout="row" flex="5" layout-align="left center" class="overflow-h">#</div>
                                        <div layout="row" flex="25" layout-align="left center" class="overflow-h pl-20">Nombre</div>
                                        <div layout="row" flex="25" layout-align="left center" class="overflow-h pl-20">Correo</div>
                                        <div layout="row" flex="20" layout-align="left center" class="overflow-h pl-20">Teléfono</div>
                                        <div layout="row" flex="10" layout-align="left center">Perfil</div>
                                        <div layout="row" flex="10" layout-align="left center">Creación</div>
                                        <div layout="row" flex="5" layout-align="center center">&#8942;</div>
                                    </div>
                                </div>
                                <div class="border-box--blue-b px-24 py-10" ng-repeat="member in users.team.members">
                                    <div layout="row" class="dark__text fs__14px proxima-soft-regular">
                                        <div layout="row" flex="5" layout-align="left center" class="overflow-h">{{users.team.pagination.data.start+$index}}</div>
                                        <div layout="row" flex="25" layout-align="left center" class="overflow-h pl-20">{{member.name.first + ' ' + member.name.last}}</div>
                                        <div layout="row" flex="25" layout-align="left center" class="overflow-h pl-20">{{member.email.username + '@' + member.email.domain.name}}</div>
                                        <div layout="row" flex="20" layout-align="left center" class="overflow-h pl-20">+52 {{member.phone.number}}</div>
                                        <div layout="row" flex="10" layout-align="left center">{{users.group.filters.profiles.members[member.idProfile-1]}}</div>
                                        <div layout="row" flex="10" layout-align="left center">{{member.create_at}}</div>
                                        <div layout="row" flex="5" layout-align="center center">
                                            <md-menu md-offset="-164 -128" ng-controller="ContactMenuCtrl as contactCtrl">
                                                
                                                <button class="btn-floating no__shadow transparent__bg" ng-click="contactCtrl.openMenu($mdMenu, $event)">
                                                    <i class="material-icons black-text">more_vert</i>
                                                </button>
        
                                                <md-menu-content>

                                                    <md-menu-item>
                                                        <md-button ng-click="users.leads.request(member.id)">
                                                            Clientes y leads
                                                        </md-button>
                                                    </md-menu-item>
                            
                                                    <md-menu-item>
                                                        <md-button ng-click="users.team.deleteUserTeam(member.id)">
                                                            Quitar
                                                        </md-button>
                                                    </md-menu-item>

                                                    <md-menu-divider></md-menu-divider>

                                                    <md-menu-item>
                                                        <md-button ng-click="users.update(member)">
                                                            Editar
                                                        </md-button>
                                                    </md-menu-item>

                                                    <md-menu-item>
                                                        <md-button ng-click="users.team.delete(member.id)">
                                                            Eliminar
                                                        </md-button>
                                                    </md-menu-item>

                                                </md-menu-content>
                    
                                            </md-menu>
                                        </div>
                                    </div>
                                </div>
                                <div class="dark__text proxima-soft-regular fs__16px center p-16" ng-class="users.team.status.value">
                                    {{users.team.status.message}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal-dialog white__bg" ng-class="users.free.options.modal_display">
    
            <div class="pl-16 dark__bg" layout="row">
                <div layout="row" layout-align="start center" flex="80">
                    <span class="light-txt">Asesores libres</span>
                </div>
                <div layout="row" layout-align="end center" flex="20">
                    <md-button ng-click="users.free.hideModal()" class="md-icon-button" aria-label="Cerrar">
                        <md-icon style="color: white;" md-svg-src="media/assets/img/icons/app/close.svg"></md-icon>
                    </md-button>
                </div>
            </div>

            <div layout-padding>
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
                                    <md-select name="freePages" ng-model="users.free.pagination.config.current" ng-change="users.free.update()">
                                        <md-option ng-repeat="page in users.free.pagination.data.book" ng-value="page">
                                            <span class="dark__text fs__14px proxima-soft-regular">{{page}}</span>
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
                                    <md-select name="freeLimit" ng-model="users.free.pagination.config.limit.selected" ng-change="users.free.resetAndUpdate()" style="z-index:1009;">
                                        <md-option ng-repeat="limit in users.free.pagination.config.limit.members" ng-value="limit">
                                            <span class="dark__text fs__14px proxima-soft-regular">{{limit}}</span>
                                        </md-option>
                                    </md-select>
                                </md-input-container>
        
                            </div>
                            
                            <div class="dark__text fs__12px proxima-soft-light ml-24" layout="row" layout-align="end center" flex="50">
                                {{users.free.pagination.data.start}} - {{users.free.pagination.data.end}} de {{users.free.pagination.data.num_of_rows}}
                            </div>
        
                        </div>
        
                        <div class="overflow-x-s overflow-y-s">
                            <div class="result-table-container">
                                <div class="border-box--blue-b px-24 py-10">
                                    <div layout="row" class="dark__text fs__14px proxima-soft-semibold">
                                        <div layout="row" flex="5" layout-align="left center" class="overflow-h">#</div>
                                        <div layout="row" flex="25" layout-align="left center" class="overflow-h pl-20">Nombre</div>
                                        <div layout="row" flex="25" layout-align="left center" class="overflow-h pl-20">Correo</div>
                                        <div layout="row" flex="20" layout-align="left center" class="overflow-h pl-20">Teléfono</div>
                                        <div layout="row" flex="10" layout-align="left center">Perfil</div>
                                        <div layout="row" flex="10" layout-align="left center">Creación</div>
                                        <div layout="row" flex="5" layout-align="center center">&#8942;</div>
                                    </div>
                                </div>
                                <div class="border-box--blue-b px-24 py-10" ng-repeat="member in users.free.members">
                                    <div layout="row" class="dark__text fs__14px proxima-soft-regular">
                                        <div layout="row" flex="5" layout-align="left center" class="overflow-h">{{users.free.pagination.data.start+$index}}</div>
                                        <div layout="row" flex="25" layout-align="left center" class="overflow-h pl-20">{{member.name.first + ' ' + member.name.last}}</div>
                                        <div layout="row" flex="25" layout-align="left center" class="overflow-h pl-20">{{member.email.username + '@' + member.email.domain.name}}</div>
                                        <div layout="row" flex="20" layout-align="left center" class="overflow-h pl-20">+52 {{member.phone.number}}</div>
                                        <div layout="row" flex="10" layout-align="left center">{{users.group.filters.profiles.members[member.idProfile-1]}}</div>
                                        <div layout="row" flex="10" layout-align="left center">{{member.create_at}}</div>
                                        <div layout="row" flex="5" layout-align="center center">
                                            <md-menu md-offset="-164 -128" ng-controller="ContactMenuCtrl as contactCtrl">
                                                
                                                <button class="btn-floating no__shadow transparent__bg" ng-click="contactCtrl.openMenu($mdMenu, $event)">
                                                    <i class="material-icons black-text">more_vert</i>
                                                </button>
        
                                                <md-menu-content>
                    
                                                    <md-menu-item>
                                                        <md-button ng-click="users.free.setTeam(member.id)">
                                                            Asociar a equipo
                                                        </md-button>
                                                    </md-menu-item>

                                                    <md-menu-item>
                                                        <md-button ng-click="users.leads.request(member.id)">
                                                            Clientes y leads
                                                        </md-button>
                                                    </md-menu-item>

                                                    <md-menu-divider></md-menu-divider>

                                                    <md-menu-item>
                                                        <md-button ng-click="users.update(member)">
                                                            Editar
                                                        </md-button>
                                                    </md-menu-item>

                                                    <md-menu-item>
                                                        <md-button ng-click="users.free.delete(member.id)">
                                                            Eliminar
                                                        </md-button>
                                                    </md-menu-item>

                                                </md-menu-content>
                    
                                            </md-menu>
                                        </div>
                                    </div>
                                </div>
                                <div class="dark__text proxima-soft-regular fs__16px center p-16" ng-class="users.free.status.value">
                                    {{users.free.status.message}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal-dialog white__bg" ng-class="users.leads.options.modal_display">
    
            <div class="pl-16 dark__bg" layout="row">
                <div layout="row" layout-align="start center" flex="80">
                    <span class="light-txt">Clientes y leads</span>
                </div>
                <div layout="row" layout-align="end center" flex="20">
                    <md-button ng-click="users.leads.hideModal()" class="md-icon-button" aria-label="Cerrar">
                        <md-icon style="color: white;" md-svg-src="media/assets/img/icons/app/close.svg"></md-icon>
                    </md-button>
                </div>
            </div>

            <div layout-padding>
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
                                    <md-select name="leadsPages" ng-model="users.leads.pagination.config.current" ng-change="users.leads.update()">
                                        <md-option ng-repeat="page in users.leads.pagination.data.book" ng-value="page">
                                            <span class="dark__text fs__14px proxima-soft-regular">{{page}}</span>
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
                                    <md-select name="leadsLimit" ng-model="users.leads.pagination.config.limit.selected" ng-change="users.leads.resetAndUpdate()" style="z-index:1009;">
                                        <md-option ng-repeat="limit in users.leads.pagination.config.limit.members" ng-value="limit">
                                            <span class="dark__text fs__14px proxima-soft-regular">{{limit}}</span>
                                        </md-option>
                                    </md-select>
                                </md-input-container>
        
                            </div>
                            
                            <div class="dark__text fs__12px proxima-soft-light ml-24" layout="row" layout-align="end center" flex="50">
                                {{users.leads.pagination.data.start}} - {{users.leads.pagination.data.end}} de {{users.leads.pagination.data.num_of_rows}}
                            </div>
        
                        </div>
        
                        <div class="overflow-x-s overflow-y-s">
                            <div class="result-table-container">
                                <div class="border-box--blue-b px-24 py-10">
                                    <div layout="row" class="dark__text fs__14px proxima-soft-semibold">
                                        <div layout="row" flex="5" layout-align="left center" class="overflow-h">#</div>
                                        <div layout="row" flex="25" layout-align="left center" class="overflow-h pl-20">Nombre</div>
                                        <div layout="row" flex="25" layout-align="left center" class="overflow-h pl-20">Correo</div>
                                        <div layout="row" flex="20" layout-align="left center" class="overflow-h pl-20">Teléfono</div>
                                        <div layout="row" flex="10" layout-align="left center">Medio</div>
                                        <div layout="row" flex="15" layout-align="left center">Creación</div>
                                    </div>
                                </div>
                                <div class="border-box--blue-b px-24 py-10" ng-repeat="member in users.leads.members">
                                    <div layout="row" class="dark__text fs__14px proxima-soft-regular">
                                        <div layout="row" flex="5" layout-align="left center" class="overflow-h">{{users.leads.pagination.data.start+$index}}</div>
                                        <div layout="row" flex="25" layout-align="left center" class="overflow-h pl-20">{{member.name.first + ' ' + member.name.last}}</div>
                                        <div layout="row" flex="25" layout-align="left center" class="overflow-h pl-20">{{member.email.username + '@' + member.email.domain.name}}</div>
                                        <div layout="row" flex="20" layout-align="left center" class="overflow-h pl-20">+52 {{member.phone.number}}</div>
                                        <div layout="row" flex="10" layout-align="left center">{{users.leads.medium[member.idMedium]}}</div>
                                        <div layout="row" flex="15" layout-align="left center">{{member.create_at}}</div>
                                    </div>
                                </div>
                                <div class="dark__text proxima-soft-regular fs__16px center p-16" ng-class="users.leads.status.value">
                                    {{users.leads.status.message}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal-dialog white__bg" ng-controller="InsertUserCtrl as user" ng-class="rootUsers.insert.options.modal_display">

            <div class="pl-16 dark__bg" layout="row">
                <div layout="row" layout-align="start center" flex="80">
                    <span class="light-txt">Agregar usuario</span>
                </div>
                <div layout="row" layout-align="end center" flex="20">
                    <md-button ng-click="user.close()" class="md-icon-button" aria-label="Cerrar">
                        <md-icon style="color: white;" md-svg-src="media/assets/img/icons/app/close.svg"></md-icon>
                    </md-button>
                </div>
            </div>

            <div class="px-16 py-40 overflow-y-s h100-40" layout-padding layout="column" flex="100" layout-align="start center">

                <div class="w100" layout-xs="column" layout-gt-xs="row" flex="100"layout-align="start center">
                    <div class="w100 px-10">

                        <md-input-container class="w100 md-block">
                            <label>Nombre de usuario</label>
                            <input name="newUserUsername" id="newUserUsername" type="text" ng-model="user.newUser.username" pattern="[a-zA-Z0-9._-]{6,16}" autocomplete="off" required="true" autofocus>

                            <div ng-messages="newUserForm.newUserUsername.$error" multiple md-auto-hide="false">

                                <div ng-message="pattern">
                                    Debe contener entre 6 a 16 caracteres, unicamente letras mayúsculas A-Z o minúsculas a-z, digitos 0-9 y alguno de los siguientes caracteres especiales ._-
                                </div>

                            </div>
                        </md-input-container>

                    </div>
                    <div class="w100 px-10">

                        <md-input-container class="w100 md-block">
                            <label>Contraseña</label>
                            <input name="newUserPassword" id="newUserPassword" type="password" ng-model="user.newUser.password" autocomplete="off" required="true" 
                                    pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*?[#?!@$%^&*._-]).{8,24}">

                            <div ng-messages="newUserForm.newUserPassword.$error" multiple md-auto-hide="false">

                                <div ng-message="pattern">
                                    Debe contener entre 8 a 24 caracteres, almenos un digito 0-9, una mayúscula A-Z, una minúscula a-z y uno de los siguientes caracteres especiales #?!@$%^&*._-
                                </div>

                            </div>

                        </md-input-container>

                    </div>
                </div>

                <div class="w100" layout-xs="column" layout-gt-xs="row" layout-align="start center">
                    <div class="w100 px-10">
                        <md-input-container class="w100 md-block">
                            <label>Nombre(s)</label>
                            <input name="newUserName" id="newUserName" type="text" ng-model="user.newUser.name" autocomplete="off" required="true"
                                    pattern="[a-zA-Z\u00E0-\u00FC\u00C0-\u00DC\u00f1\u00d1\u0020]{1,45}">

                            <div ng-messages="newUserForm.newUserName.$error" multiple md-auto-hide="false">

                                <div ng-message="pattern">
                                    Debe contener hasta 45 caracteres, sin digitos ni caracteres especiales
                                </div>

                            </div>

                        </md-input-container>
                    </div>
                    <div class="w100 px-10">
                        <md-input-container class="w100 md-block">
                            <label>Apellido(s)</label>
                            <input name="newUserLastName" id="newUserLastName" type="text" ng-model="user.newUser.last_name" autocomplete="off" required="true"
                                    pattern="[a-zA-Z\u00E0-\u00FC\u00C0-\u00DC\u00f1\u00d1\u0020]{1,45}">

                            <div ng-messages="newUserForm.newUserLastName.$error" multiple md-auto-hide="false">

                                <div ng-message="pattern">
                                    Debe contener hasta 45 caracteres, sin digitos ni caracteres especiales
                                </div>

                            </div>

                        </md-input-container>
                    </div>
                </div>

                <div class="w100" layout-xs="column" layout-gt-xs="row" layout-align="start center">
                    <div class="w100 px-10">
                        <md-input-container class="w100 md-block">
                            <label>Correo eléctronico</label>
                            <input name="newUserEmail" id="newUserEmail" type="email" ng-model="user.newUser.email" autocomplete="off" required="true" 
                                    pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">

                            <div ng-messages="newUserForm.newUserEmail.$error" multiple md-auto-hide="false">

                                <div ng-message="pattern">
                                    Correo electrónico invalido
                                </div>

                            </div>

                        </md-input-container>
                    </div>
                    <div class="w100 px-10">
                        <md-input-container class="w100 md-block">
                            <label>Número de teléfono</label>
                            <input name="newUserPhone" id="newUserPhone" ng-model="user.newUser.phone" type="text" autocomplete="off" required="true"
                                    pattern="[0-9]{10}">

                            <div ng-messages="newUserForm.newUserPhone.$error" multiple md-auto-hide="false">

                                <div ng-message="pattern">
                                    Debe contener unicamente 10 digitos 0-9
                                </div>

                            </div>

                        </md-input-container>
                    </div>
                </div>

                <div class="w100" layout-xs="column" layout-gt-xs="row" layout-align="start center">
                    <div class="w100 px-10 pb-40">
                        <md-input-container class="w100">
                            <label>Perfil</label>
                            <md-select name="profile" ng-model="user.newUser.idProfile" required>
                                <md-option ng-value="3">Usuario estándar</md-option>
                                <md-option ng-value="2">Gerente</md-option>
                            </md-select>
                        </md-input-container>
                    </div>
                    <div class="w100 px-10 pb-40">
                        <md-input-container class="w100">
                            <label>Sexo</label>
                            <md-select name="gender" ng-model="user.newUser.idGender" required>
                                <md-option ng-value="1">Sin especificar</md-option>
                                <md-option ng-value="2">Hombre</md-option>
                                <md-option ng-value="3">Mujer</md-option>
                            </md-select>
                        </md-input-container>
                    </div>
                </div>

                <div class="w100" layout-xs="column" layout-gt-xs="row" layout-align="start center">
                    <div class="w100 px-10">
                        <md-input-container class="w100 md-block">
                            <label>Dirección</label>
                            <input name="newUserAddress" id="newUserAddress" md-maxlength="140" type="text" ng-model="user.newUser.address" autocomplete="off">
                        </md-input-container>
                    </div>
                </div>

                <div class="w100" layout="row" layout-align="end center">
                    <md-button class="" ng-click="user.close()">
                        <span class="dark__text proxima-soft-semibold fs__12px px-10">C<span class="to__lowercase">ancelar</span></span>
                    </md-button>
                    <md-button class="border__btn" type="submit">
                        <span class="blue__text proxima-soft-semibold fs__12px px-10" ng-click="user.insertUser()">A<span class="to__lowercase">gregar</span></span>
                    </md-button>
                </div>

            </div>
            <!-- <button ng-click="users.insertInmovablesToZohoNow()">
                Hacer
            </button> -->
        </div>
    
        <div class="modal-dialog white__bg" ng-controller="UpdateUserCtrl as updateHandler" ng-class="rootUsers.update.options.modal_display">

            <div class="pl-16 dark__bg" layout="row">
                <div layout="row" layout-align="start center" flex="80">
                    <span class="light-txt">Actualizar usuario</span>
                </div>
                <div layout="row" layout-align="end center" flex="20">
                    <md-button ng-click="users.closeUpdateView()" class="md-icon-button" aria-label="Cerrar">
                        <md-icon style="color: white;" md-svg-src="media/assets/img/icons/app/close.svg"></md-icon>
                    </md-button>
                </div>
            </div>

            <div class="px-16 py-40 overflow-y-s h100-40" layout-padding layout="column" layout-align="start center">

                <div class="w100" layout-xs="column" layout-gt-xs="row" layout-align="start center">
                    <form ng-submit="updateHandler.setUsername()" layout="row" name="updateUsernameForm" class="w100 px-10">

                        <md-input-container class="w100 md-block">
                            <label>Nombre de usuario</label>
                            <input name="updateUsername" id="updateUsername" type="text" ng-model="rootUsers.update.data.username" pattern="[a-zA-Z0-9._-]{6,16}" autocomplete="off" required="true" autofocus>

                            <div ng-messages="updateUsernameForm.updateUsername.$error" multiple md-auto-hide="false">

                                <div ng-message="pattern">
                                    Debe contener entre 6 a 16 caracteres, unicamente letras mayúsculas A-Z o minúsculas a-z, digitos 0-9 y alguno de los siguientes caracteres especiales ._-
                                </div>

                            </div>
                        </md-input-container>
                        <div>
                            <md-button class="border__btn mt-20" type="submit">
                                <span class="blue__text proxima-soft-semibold fs__12px px-10" ng-click="">A<span class="to__lowercase">ctualizar</span></span>
                            </md-button>
                        </div>

                    </form>
                    <form ng-submit="updateHandler.setPassword()"  layout="row" name="updatePasswordForm" class="w100 px-10">

                        <md-input-container class="w100 md-block">
                            <label>Contraseña</label>
                            <input name="updatePassword" id="updatePassword" type="password" ng-model="rootUsers.update.data.password" autocomplete="off" required="true" 
                                    pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*?[#?!@$%^&*._-]).{8,24}">

                            <div ng-messages="updatePasswordForm.updatePassword.$error" multiple md-auto-hide="false">

                                <div ng-message="pattern">
                                    Debe contener entre 8 a 24 caracteres, almenos un digito 0-9, una mayúscula A-Z, una minúscula a-z y uno de los siguientes caracteres especiales #?!@$%^&*._-
                                </div>

                            </div>

                        </md-input-container>
                        <div>
                            <md-button class="border__btn mt-20" type="submit">
                                <span class="blue__text proxima-soft-semibold fs__12px px-10" ng-click="">A<span class="to__lowercase">ctualizar</span></span>
                            </md-button>
                        </div>

                    </form>
                </div>

                <div class="w100" layout-xs="column" layout-gt-xs="row" layout-align="start center">
                    <form ng-submit="updateHandler.setName()"  layout="row" name="updateNameForm" class="w100 px-10">
                        <md-input-container class="w100 md-block">
                            <label>Nombre(s)</label>
                            <input name="updateName" id="updateName" type="text" ng-model="rootUsers.update.data.name" autocomplete="off" required="true"
                                    pattern="[a-zA-Z\u00E0-\u00FC\u00C0-\u00DC\u00f1\u00d1\u0020]{1,45}">

                            <div ng-messages="updateNameForm.updateName.$error" multiple md-auto-hide="false">

                                <div ng-message="pattern">
                                    Debe contener hasta 45 caracteres, sin digitos ni caracteres especiales
                                </div>

                            </div>

                        </md-input-container>
                        <div>
                            <md-button class="border__btn mt-20" type="submit">
                                <span class="blue__text proxima-soft-semibold fs__12px px-10" ng-click="">A<span class="to__lowercase">ctualizar</span></span>
                            </md-button>
                        </div>
                    </form>
                    <form ng-submit="updateHandler.setLastName()" layout="row" name="updateLastNameForm" class="w100 px-10">
                        <md-input-container class="w100 md-block">
                            <label>Apellido(s)</label>
                            <input name="updateLastName" id="updateLastName" type="text" ng-model="rootUsers.update.data.last_name" autocomplete="off" required="true"
                                    pattern="[a-zA-Z\u00E0-\u00FC\u00C0-\u00DC\u00f1\u00d1\u0020]{1,45}">

                            <div ng-messages="updateLastNameForm.updateLastName.$error" multiple md-auto-hide="false">

                                <div ng-message="pattern">
                                    Debe contener hasta 45 caracteres, sin digitos ni caracteres especiales
                                </div>

                            </div>

                        </md-input-container>
                        <div>
                            <md-button class="border__btn mt-20" type="submit">
                                <span class="blue__text proxima-soft-semibold fs__12px px-10" ng-click="">A<span class="to__lowercase">ctualizar</span></span>
                            </md-button>
                        </div>
                    </form>
                </div>

                <div class="w100" layout-xs="column" layout-gt-xs="row" layout-align="start center">
                    <form ng-submit="updateHandler.setPhone()" layout="row" name="updatePhoneForm" class="w100 px-10">
                        <md-input-container class="w100 md-block">
                            <label>Número de teléfono</label>
                            <input name="updatePhone" id="updatePhone" ng-model="rootUsers.update.data.phone" type="text" autocomplete="off" required="true"
                                    pattern="[0-9]{10}">

                            <div ng-messages="updatePhoneForm.updatePhone.$error" multiple md-auto-hide="false">

                                <div ng-message="pattern">
                                    Debe contener unicamente 10 digitos 0-9
                                </div>

                            </div>

                        </md-input-container>
                        <div>
                            <md-button class="border__btn mt-20" type="submit">
                                <span class="blue__text proxima-soft-semibold fs__12px px-10" ng-click="">A<span class="to__lowercase">ctualizar</span></span>
                            </md-button>
                        </div>
                    </form>
                    <form ng-submit="updateHandler.setAddress()" layout="row" name="updateAddressForm" class="w100 px-10">
                        <md-input-container class="w100 md-block">
                            <label>Dirección</label>
                            <input name="updateAddress" id="updateAddress" md-maxlength="140" type="text" ng-model="rootUsers.update.data.address" autocomplete="off">
                        </md-input-container>
                        <div>
                            <md-button class="border__btn mt-20" type="submit">
                                <span class="blue__text proxima-soft-semibold fs__12px px-10" ng-click="">A<span class="to__lowercase">ctualizar</span></span>
                            </md-button>
                        </div>
                    </form>
                </div>

                <div class="w100" layout-xs="column" layout-gt-xs="row" layout-align="start center">
                    <form ng-submit="updateHandler.setProfile()" layout="row" name="updateProfileForm" class="w100 px-10 pb-40">
                        <md-input-container class="w100">
                            <label>Perfil</label>
                            <md-select name="updateProfile" ng-model="rootUsers.update.data.idProfile" required>
                                <md-option ng-value="3">Usuario estándar</md-option>
                                <md-option ng-value="2">Gerente</md-option>
                            </md-select>
                        </md-input-container>
                        <div>
                            <md-button class="border__btn mt-20" type="submit">
                                <span class="blue__text proxima-soft-semibold fs__12px px-10" ng-click="">A<span class="to__lowercase">ctualizar</span></span>
                            </md-button>
                        </div>
                    </form>
                    <form ng-submit="updateHandler.setGender()" layout="row" name="updateGenderForm" class="w100 px-10 pb-40">
                        <md-input-container class="w100">
                            <label>Sexo</label>
                            <md-select name="updateGender" ng-model="rootUsers.update.data.idGender" required>
                                <md-option ng-value="1">Sin especificar</md-option>
                                <md-option ng-value="2">Hombre</md-option>
                                <md-option ng-value="3">Mujer</md-option>
                            </md-select>
                        </md-input-container>
                        <div>
                            <md-button class="border__btn mt-20" type="submit">
                                <span class="blue__text proxima-soft-semibold fs__12px px-10" ng-click="">A<span class="to__lowercase">ctualizar</span></span>
                            </md-button>
                        </div>
                    </form>
                </div>

            </div>

        </div>
        
    </div>

</body>
</html>