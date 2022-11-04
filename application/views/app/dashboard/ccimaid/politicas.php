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
    
        


        <div class="modal-dialog white__bg" >
    
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
        
                           
                            
                          
        
                        </div>
        
                        <div class="overflow-x-s overflow-y-s">
                            <div class="result-table-container">
                                <div class="border-box--blue-b px-24 py-10">
                                    <div layout="row" class="dark__text fs__14px proxima-soft-semibold">
                                        <div layout="row" flex="5" layout-align="left center" class="overflow-h">#</div>
                                        <div layout="row" flex="30" layout-align="left center" class="overflow-h pl-20">Nombre</div>
                                        <div layout="row" flex="65" layout-align="left center" class="overflow-h pl-20">video</div>
                                       
                                    </div>
                                </div>
                                <div class="border-box--blue-b px-24 py-10">
                                    <div layout="row" class="dark__text fs__14px proxima-soft-regular">
                                        <div layout="row" flex="5" layout-align="left center" class="overflow-h">1</div>
                                        <div layout="row" flex="30" layout-align="left center" class="overflow-h pl-20">
                                        <a href="https://drive.google.com/file/d/1M3HT5GWdFN2zXv3Gh18boVNCDBICvvO2/view?usp=sharing">
                                            Reglamento de Ventas CCIMA
                                        </a>    
                                        
                                        </div>
                                        <div layout="row" flex="65" layout-align="left center" class="overflow-h pl-20"></div>
                                    </div>
                                </div>

                                <div class="border-box--blue-b px-24 py-10">
                                    <div layout="row" class="dark__text fs__14px proxima-soft-regular">
                                        <div layout="row" flex="5" layout-align="left center" class="overflow-h">2</div>
                                        <div layout="row" flex="30" layout-align="left center" class="overflow-h pl-20">
                                        <a href="https://drive.google.com/file/d/1C6p6YX9w9zkr41aT2QQxX2QHwFqDqi83/view?usp=sharing">
                                            Registro de Clientes (Lead)
                                        </a>
                                        </div>
                                        <div layout="row" flex="65" layout-align="left center" class="overflow-h pl-20"></div>
                                    </div>
                                </div>
                                <div class="border-box--blue-b px-24 py-10">
                                    <div layout="row" class="dark__text fs__14px proxima-soft-regular">
                                        <div layout="row" flex="5" layout-align="left center" class="overflow-h">3</div>
                                        <div layout="row" flex="30" layout-align="left center" class="overflow-h pl-20">
                                        <a href="">
                                            Expediente de Clientes
                                        </a>    
                                        </div>
                                        <div layout="row" flex="65" layout-align="left center" class="overflow-h pl-20"></div>
                                    </div>
                                </div>
                                <div class="border-box--blue-b px-24 py-10">
                                    <div layout="row" class="dark__text fs__14px proxima-soft-regular">
                                        <div layout="row" flex="5" layout-align="left center" class="overflow-h">4</div>
                                        <div layout="row" flex="30" layout-align="left center" class="overflow-h pl-20">
                                        <a href="">
                                        Pago de Mensualidad
                                        </a>    
                                        </div>
                                        <div layout="row" flex="65" layout-align="left center" class="overflow-h pl-20"></div>
                                    </div>
                                </div>
                                <div class="border-box--blue-b px-24 py-10">
                                    <div layout="row" class="dark__text fs__14px proxima-soft-regular">
                                        <div layout="row" flex="5" layout-align="left center" class="overflow-h">5</div>
                                        <div layout="row" flex="30" layout-align="left center" class="overflow-h pl-20">
                                        <a href="https://drive.google.com/file/d/1KVaCKnrZYkv-Uzdm-6VeIjrQv3Oq16xK/view">
                                            Solicitud de Contrato (Procedimiento)
                                        </a>    
                                        </div>
                                        <div layout="row" flex="65" layout-align="left center" class="overflow-h pl-20"></div>
                                    </div>
                                </div>
                                <div class="border-box--blue-b px-24 py-10">
                                    <div layout="row" class="dark__text fs__14px proxima-soft-regular">
                                        <div layout="row" flex="5" layout-align="left center" class="overflow-h">6</div>
                                        <div layout="row" flex="30" layout-align="left center" class="overflow-h pl-20">
                                        <a href="https://drive.google.com/file/d/1DPPPKWRlAlE0TbK-yhMlgY4PmyHjuNfe/view?usp=sharing">
                                            RFC Grupo CCIMA
                                        </a>    
                                        </div>
                                        <div layout="row" flex="65" layout-align="left center" class="overflow-h pl-20"></div>
                                    </div>
                                </div>

                                <div class="border-box--blue-b px-24 py-10">
                                    <div layout="row" class="dark__text fs__14px proxima-soft-regular">
                                        <div layout="row" flex="5" layout-align="left center" class="overflow-h">7</div>
                                        <div layout="row" flex="30" layout-align="left center" class="overflow-h pl-20">
                                        <a href="https://drive.google.com/file/d/113NvW8hyDI7AluTyxqFlR0p_K-QrnA2X/view?usp=sharing">
                                        Convenio con Empresas (Procedimiento) 
                                        </a>    
                                        </div>
                                        <div layout="row" flex="65" layout-align="left center" class="overflow-h pl-20"></div>
                                    </div>
                                </div>
                                <div class="border-box--blue-b px-24 py-10">
                                    <div layout="row" class="dark__text fs__14px proxima-soft-regular">
                                        <div layout="row" flex="5" layout-align="left center" class="overflow-h">8</div>
                                        <div layout="row" flex="30" layout-align="left center" class="overflow-h pl-20">
                                        <a href="https://drive.google.com/file/d/1ravqIurhju2W8Tc0JGsH-y3coRvmncGL/view">
                                        Convenio con Empresas (Formato) 
                                        </a>    
                                        </div>
                                        <div layout="row" flex="65" layout-align="left center" class="overflow-h pl-20"></div>
                                    </div>
                                </div>
                                <div class="border-box--blue-b px-24 py-10">
                                    <div layout="row" class="dark__text fs__14px proxima-soft-regular">
                                        <div layout="row" flex="5" layout-align="left center" class="overflow-h">9</div>
                                        <div layout="row" flex="30" layout-align="left center" class="overflow-h pl-20">
                                        <a href="https://drive.google.com/file/d/1L8snqYP1qRghkCXyrPP5tzhSDqSlqucN/view?usp=sharing">
                                        Solicitud de Autorización Especial
                                        </a>    
                                        </div>
                                        <div layout="row" flex="65" layout-align="left center" class="overflow-h pl-20"></div>
                                    </div>
                                </div>
                                <div class="border-box--blue-b px-24 py-10">
                                    <div layout="row" class="dark__text fs__14px proxima-soft-regular">
                                        <div layout="row" flex="5" layout-align="left center" class="overflow-h">10</div>
                                        <div layout="row" flex="30" layout-align="left center" class="overflow-h pl-20">
                                        <a href="https://docs.google.com/spreadsheets/d/1AOqv1Mpr7PfXkBmK6T6AHgkw5WiGxbn4/edit?usp=sharing&ouid=103094647678813325845&rtpof=true&sd=true">
                                        Carta de  Solicitud de Devoluciones
                                        </a>    
                                        </div>
                                        <div layout="row" flex="65" layout-align="left center" class="overflow-h pl-20"></div>
                                    </div>
                                </div>
                                <div class="border-box--blue-b px-24 py-10">
                                    <div layout="row" class="dark__text fs__14px proxima-soft-regular">
                                        <div layout="row" flex="5" layout-align="left center" class="overflow-h">11</div>
                                        <div layout="row" flex="30" layout-align="left center" class="overflow-h pl-20">
                                        <a href="https://drive.google.com/file/d/1XLLWR2MWvGDJvGoMoV_xJTq2rUXhc9AA/view?usp=sharing">
                                        Plan Sherpa
                                        </a>    
                                        </div>
                                        <div layout="row" flex="65" layout-align="left center" class="overflow-h pl-20"></div>
                                    </div>
                                </div>
                                <div class="border-box--blue-b px-24 py-10">
                                    <div layout="row" class="dark__text fs__14px proxima-soft-regular">
                                        <div layout="row" flex="5" layout-align="left center" class="overflow-h">12</div>
                                        <div layout="row" flex="30" layout-align="left center" class="overflow-h pl-20">
                                        <a href="https://drive.google.com/file/d/1v5Y2TwikWWNATVC9yiha5rXNp0FJTBBG/view?usp=sharing">
                                        Asignación Lead MKT
                                        </a>    
                                        </div>
                                        <div layout="row" flex="65" layout-align="left center" class="overflow-h pl-20"></div>
                                    </div>
                                </div>
                                <div class="border-box--blue-b px-24 py-10">
                                    <div layout="row" class="dark__text fs__14px proxima-soft-regular">
                                        <div layout="row" flex="5" layout-align="left center" class="overflow-h">13</div>
                                        <div layout="row" flex="30" layout-align="left center" class="overflow-h pl-20">
                                        <a href="https://drive.google.com/file/d/1XLLWR2MWvGDJvGoMoV_xJTq2rUXhc9AA/view?usp=sharing">
                                        Customer Services
                                        </a>    
                                        </div>
                                        <div layout="row" flex="65" layout-align="left center" class="overflow-h pl-20"></div>
                                    </div>
                                </div>
                                <div class="border-box--blue-b px-24 py-10">
                                    <div layout="row" class="dark__text fs__14px proxima-soft-regular">
                                        <div layout="row" flex="5" layout-align="left center" class="overflow-h">14</div>
                                        <div layout="row" flex="30" layout-align="left center" class="overflow-h pl-20">
                                        <a href="https://drive.google.com/file/d/1lWLay0oSRH3AjcAwSGA8bg8Xb6D3shwQ/view?usp=sharing">
                                            Guía Valijas Para Envios
                                        </a>    
                                        </div>
                                        <div layout="row" flex="65" layout-align="left center" class="overflow-h pl-20"></div>
                                    </div>
                                </div>

                                <div class="border-box--blue-b px-24 py-10">
                                    <div layout="row" class="dark__text fs__14px proxima-soft-regular">
                                        <div layout="row" flex="5" layout-align="left center" class="overflow-h">15</div>
                                        <div layout="row" flex="30" layout-align="left center" class="overflow-h pl-20">
                                        <a href="https://drive.google.com/file/d/1WL_nG3gxHaFOOp8bAIIpaPd9YU9D9LF6/view">
                                        Devoluciones (Circular)
                                        </a>    
                                        </div>
                                        <div layout="row" flex="65" layout-align="left center" class="overflow-h pl-20"></div>
                                    </div>
                                </div>
                                <!-- <div class="border-box--blue-b px-24 py-10">
                                    <div layout="row" class="dark__text fs__14px proxima-soft-regular">
                                        <div layout="row" flex="5" layout-align="left center" class="overflow-h">18</div>
                                        <div layout="row" flex="30" layout-align="left center" class="overflow-h pl-20">
                                        <a href="">
                                        Ciruculares
                                        </a>    
                                        </div>
                                        <div layout="row" flex="65" layout-align="left center" class="overflow-h pl-20"></div>
                                    </div>
                                </div> -->
                                <div class="border-box--blue-b px-24 py-10">
                                    <div layout="row" class="dark__text fs__14px proxima-soft-regular">
                                        <div layout="row" flex="5" layout-align="left center" class="overflow-h">16</div>
                                        <div layout="row" flex="30" layout-align="left center" class="overflow-h pl-20">
                                        <a href="https://drive.google.com/file/d/1HYzzff4s2fmMBdZLhKhB-jSOb59sas0v/view">
                                        Circular para Facturación de Comisionistas
                                        </a>    
                                        </div>
                                        <div layout="row" flex="65" layout-align="left center" class="overflow-h pl-20"></div>
                                    </div>
                                </div>
                                <div class="border-box--blue-b px-24 py-10">
                                    <div layout="row" class="dark__text fs__14px proxima-soft-regular">
                                        <div layout="row" flex="5" layout-align="left center" class="overflow-h">17</div>
                                        <div layout="row" flex="30" layout-align="left center" class="overflow-h pl-20">
                                        <a href="https://drive.google.com/file/d/1QZ7sP6LBEWgW1eoFMQcqYydD8wKDGdr1/view?usp=sharing">
                                        Circular Aviso Pedro Escobedo
                                        </a>    
                                        </div>
                                        <div layout="row" flex="65" layout-align="left center" class="overflow-h pl-20"></div>
                                    </div>
                                </div>
                                <!-- Habitta -->
                                <div class="border-box--blue-b px-24 py-10">
                                    <div layout="row" class="dark__text fs__14px proxima-soft-regular">
                                        <div layout="row" flex="5" layout-align="left center" class="overflow-h">18</div>
                                        <div layout="row" flex="30" layout-align="left center" class="overflow-h pl-20">
                                        <a href="https://drive.google.com/file/d/1jfigKzOw4BMtCGA0tBv_lxSRBKPELuoG/view?usp=sharing">
                                        Apartados por Telegram
                                        </a>    
                                        </div>
                                        <div layout="row" flex="65" layout-align="left center" class="overflow-h pl-20"></div>
                                    </div>
                                </div>
                                <div class="border-box--blue-b px-24 py-10">
                                    <div layout="row" class="dark__text fs__14px proxima-soft-regular">
                                        <div layout="row" flex="5" layout-align="left center" class="overflow-h">19</div>
                                        <div layout="row" flex="30" layout-align="left center" class="overflow-h pl-20">
                                        <a href="https://drive.google.com/file/d/1TIeBF1XJfuWsR2BQoJ3SS1O_CFCceUuj/view?usp=sharing">
                                        Hábitta Cuenta HSBC
                                        </a>    
                                        </div>
                                        <div layout="row" flex="65" layout-align="left center" class="overflow-h pl-20"></div>
                                    </div>
                                </div>
                                <div class="border-box--blue-b px-24 py-10">
                                    <div layout="row" class="dark__text fs__14px proxima-soft-regular">
                                        <div layout="row" flex="5" layout-align="left center" class="overflow-h">20</div>
                                        <div layout="row" flex="30" layout-align="left center" class="overflow-h pl-20">
                                        <a href="https://drive.google.com/file/d/1j_mznX_iXaGc__4OofKuSk2SMbkaA9lT/view?usp=sharing">
                                        Info Fiscal para Facturar Comisiones
                                        </a>    
                                        </div>
                                        <div layout="row" flex="65" layout-align="left center" class="overflow-h pl-20"></div>
                                    </div>
                                </div>
                                <div class="border-box--blue-b px-24 py-10">
                                    <div layout="row" class="dark__text fs__14px proxima-soft-regular">
                                        <div layout="row" flex="5" layout-align="left center" class="overflow-h">21</div>
                                        <div layout="row" flex="30" layout-align="left center" class="overflow-h pl-20">
                                        <a href="https://drive.google.com/file/d/1DvoGqAe47awu7MojLVRhOBtxdA6jFr0v/view?usp=drivesdk">
                                        Facturación clientes
                                        </a>    
                                        </div>
                                        <div layout="row" flex="65" layout-align="left center" class="overflow-h pl-20"></div>
                                    </div>
                                </div>
                                <div class="border-box--blue-b px-24 py-10">
                                    <div layout="row" class="dark__text fs__14px proxima-soft-regular">
                                        <div layout="row" flex="5" layout-align="left center" class="overflow-h">22</div>
                                        <div layout="row" flex="30" layout-align="left center" class="overflow-h pl-20">
                                        <a href="https://drive.google.com/file/d/1N4r1h-XPlPQkk6w5jrt0F2ThRtZY88Dz/view?usp=drivesdk">
                                        Procedimiento de pago clientes
                                        </a>    
                                        </div>
                                        <div layout="row" flex="65" layout-align="left center" class="overflow-h pl-20"></div>
                                    </div>
                                </div>
                                <div class="border-box--blue-b px-24 py-10">
                                    <div layout="row" class="dark__text fs__14px proxima-soft-regular">
                                        <div layout="row" flex="5" layout-align="left center" class="overflow-h">23</div>
                                        <div layout="row" flex="30" layout-align="left center" class="overflow-h pl-20">
                                        <a href="https://drive.google.com/file/d/139yOoDh2IoJrLB7AZV8yiyOPNSOHkcnO/view?usp=drivesdk">
                                        Bonos a Referidos (Procedimiento) 
                                        </a>    
                                        </div>
                                        <div layout="row" flex="65" layout-align="left center" class="overflow-h pl-20"></div>
                                    </div>
                                </div>
                                <div class="border-box--blue-b px-24 py-10">
                                    <div layout="row" class="dark__text fs__14px proxima-soft-regular">
                                        <div layout="row" flex="5" layout-align="left center" class="overflow-h">24</div>
                                        <div layout="row" flex="30" layout-align="left center" class="overflow-h pl-20">
                                        <a href="https://drive.google.com/file/d/1Xk8kGaAa6Nt1Bta1ucGeCDeXP7e54cKg/view?usp=drivesdk">
                                        Bonos a Referidos (Formato) 
                                        </a>    
                                        </div>
                                        <div layout="row" flex="65" layout-align="left center" class="overflow-h pl-20"></div>
                                    </div>
                                </div>
                               
                                <div class="border-box--blue-b px-24 py-10">
                                    <div layout="row" class="dark__text fs__14px proxima-soft-regular">
                                        <div layout="row" flex="5" layout-align="left center" class="overflow-h">25</div>
                                        <div layout="row" flex="30" layout-align="left center" class="overflow-h pl-20">
                                        <a href="https://drive.google.com/file/d/1oOx458HPMS70tByM4YYT8RD56XGAuCaq/view?usp=sharing">
                                        Cobro de Bonos y Comisiones (Procedimiento) 
                                        </a>    
                                        </div>
                                        <div layout="row" flex="65" layout-align="left center" class="overflow-h pl-20"></div>
                                    </div>
                                </div>
                                <div class="border-box--blue-b px-24 py-10">
                                    <div layout="row" class="dark__text fs__14px proxima-soft-regular">
                                        <div layout="row" flex="5" layout-align="left center" class="overflow-h">26</div>
                                        <div layout="row" flex="30" layout-align="left center" class="overflow-h pl-20">
                                        <a href="https://drive.google.com/file/d/1OMpnlJAJYJ6mepkcw-iI4SXV7G06fcVS/view?usp=sharing">
                                        Comisiones Extra (Formato) 
                                        </a>    
                                        </div>
                                        <div layout="row" flex="65" layout-align="left center" class="overflow-h pl-20"></div>
                                    </div>
                                </div>
                                <div class="border-box--blue-b px-24 py-10">
                                    <div layout="row" class="dark__text fs__14px proxima-soft-regular">
                                        <div layout="row" flex="5" layout-align="left center" class="overflow-h">27</div>
                                        <div layout="row" flex="30" layout-align="left center" class="overflow-h pl-20">
                                        <a href="https://docs.google.com/spreadsheets/d/1RLPYxZVIdnqzZlSv3tqPOnPISCf9HTfN/edit?usp=sharing&ouid=103094647678813325845&rtpof=true&sd=true">
                                        Cobro Comisiones Formato
                                        </a>    
                                        </div>
                                        <div layout="row" flex="65" layout-align="left center" class="overflow-h pl-20"></div>
                                    </div>
                                </div>
                                <div class="border-box--blue-b px-24 py-10">
                                    <div layout="row" class="dark__text fs__14px proxima-soft-regular">
                                        <div layout="row" flex="5" layout-align="left center" class="overflow-h">28</div>
                                        <div layout="row" flex="30" layout-align="left center" class="overflow-h pl-20">
                                        <a href="https://docs.google.com/spreadsheets/d/1vnJl4ugfpOoOlXtbvi7ircLJbiJIXg6s/edit?usp=sharing&ouid=103094647678813325845&rtpof=true&sd=true">
                                            Formato de control de recibos
                                        </a>    
                                        </div>
                                        <div layout="row" flex="65" layout-align="left center" class="overflow-h pl-20"></div>
                                    </div>
                                </div>
                                
                                <div class="border-box--blue-b px-24 py-10">
                                    <div layout="row" class="dark__text fs__14px proxima-soft-regular">
                                        <div layout="row" flex="5" layout-align="left center" class="overflow-h">29</div>
                                        <div layout="row" flex="30" layout-align="left center" class="overflow-h pl-20">
                                        <a href="https://drive.google.com/file/d/1Zkjwy6Vsb6NOzPnkZN6YTP5r3DNHhIWr/view?usp=sharing">
                                            Facturación Cliente
                                        </a>    
                                        </div>
                                        <div layout="row" flex="65" layout-align="left center" class="overflow-h pl-20"></div>
                                    </div>
                                </div>

                                <!-- NAVETEC -->
                                <div class="border-box--blue-b px-24 py-10">
                                    <div layout="row" class="dark__text fs__14px proxima-soft-regular">
                                        <div layout="row" flex="5" layout-align="left center" class="overflow-h">30</div>
                                        <div layout="row" flex="30" layout-align="left center" class="overflow-h pl-20">
                                        <a href="https://drive.google.com/file/d/1U9k82MFfh1eXsIUUk0nDbEkoLZ9FGyGZ/view?usp=sharing">
                                         Navetec cuenta Scotiabank
                                        </a>    
                                        </div>
                                        <div layout="row" flex="65" layout-align="left center" class="overflow-h pl-20"></div>
                                    </div>
                                </div>
                                <div class="border-box--blue-b px-24 py-10">
                                    <div layout="row" class="dark__text fs__14px proxima-soft-regular">
                                        <div layout="row" flex="5" layout-align="left center" class="overflow-h">31</div>
                                        <div layout="row" flex="30" layout-align="left center" class="overflow-h pl-20">
                                        <a href="https://drive.google.com/file/d/1hU23F_gu736mJKP4k1ORlr6YmPMQtMxb/view?usp=sharing">
                                        Apartados por Telegram
                                        </a>    
                                        </div>
                                        <div layout="row" flex="65" layout-align="left center" class="overflow-h pl-20"></div>
                                    </div>
                                </div>
                                <div class="border-box--blue-b px-24 py-10">
                                    <div layout="row" class="dark__text fs__14px proxima-soft-regular">
                                        <div layout="row" flex="5" layout-align="left center" class="overflow-h">32</div>
                                        <div layout="row" flex="30" layout-align="left center" class="overflow-h pl-20">
                                        <a href="https://drive.google.com/file/d/1u-VEVebuCy9wQvQTsbt2v1XH_wxHDrqa/view?usp=sharing">
                                        Facturación clientes 
                                        </a>    
                                        </div>
                                        <div layout="row" flex="65" layout-align="left center" class="overflow-h pl-20"></div>
                                    </div>
                                </div>
                                <div class="border-box--blue-b px-24 py-10">
                                    <div layout="row" class="dark__text fs__14px proxima-soft-regular">
                                        <div layout="row" flex="5" layout-align="left center" class="overflow-h">33</div>
                                        <div layout="row" flex="30" layout-align="left center" class="overflow-h pl-20">
                                        <a href="https://drive.google.com/file/d/1j-eIxKMpdmOlm-Xd9Sf-pHw1bJcTfh2y/view?usp=drivesdk">
                                        Bonos a Referidos (Procedimiento)  
                                        </a>    
                                        </div>
                                        <div layout="row" flex="65" layout-align="left center" class="overflow-h pl-20"></div>
                                    </div>
                                </div>
                                <div class="border-box--blue-b px-24 py-10">
                                    <div layout="row" class="dark__text fs__14px proxima-soft-regular">
                                        <div layout="row" flex="5" layout-align="left center" class="overflow-h">34</div>
                                        <div layout="row" flex="30" layout-align="left center" class="overflow-h pl-20">
                                        <a href="https://drive.google.com/file/d/1Xk8kGaAa6Nt1Bta1ucGeCDeXP7e54cKg/view?usp=drivesdk">
                                        Bonos a Referidos Formato
                                        </a>    
                                        </div>
                                        <div layout="row" flex="65" layout-align="left center" class="overflow-h pl-20"></div>
                                    </div>
                                </div>
                                <div class="border-box--blue-b px-24 py-10">
                                    <div layout="row" class="dark__text fs__14px proxima-soft-regular">
                                        <div layout="row" flex="5" layout-align="left center" class="overflow-h">35</div>
                                        <div layout="row" flex="30" layout-align="left center" class="overflow-h pl-20">
                                        <a href="https://drive.google.com/file/d/18gNZ1QJL4jJ1weHPa8ACHH2qecMnPwLg/view?usp=sharing">
                                        Cobro de Bonos y Comisiones (Procedimiento) 
                                        </a>    
                                        </div>
                                        <div layout="row" flex="65" layout-align="left center" class="overflow-h pl-20"></div>
                                    </div>
                                </div>

                                <div class="border-box--blue-b px-24 py-10">
                                    <div layout="row" class="dark__text fs__14px proxima-soft-regular">
                                        <div layout="row" flex="5" layout-align="left center" class="overflow-h">36</div>
                                        <div layout="row" flex="30" layout-align="left center" class="overflow-h pl-20">
                                        <a href="https://drive.google.com/file/d/1EKRAeGwmVnnwsoLw0eUHMS2sLesAkeCq/view?usp=sharing">
                                        Comisiones Extra (Formato)
                                        </a>    
                                        </div>
                                        <div layout="row" flex="65" layout-align="left center" class="overflow-h pl-20"></div>
                                    </div>
                                </div>
                                <div class="border-box--blue-b px-24 py-10">
                                    <div layout="row" class="dark__text fs__14px proxima-soft-regular">
                                        <div layout="row" flex="5" layout-align="left center" class="overflow-h">37</div>
                                        <div layout="row" flex="30" layout-align="left center" class="overflow-h pl-20">
                                        <a href="https://drive.google.com/file/d/1RLPYxZVIdnqzZlSv3tqPOnPISCf9HTfN/view?usp=sharing">
                                        Cobro Comisiones Formato
                                        </a>    
                                        </div>
                                        <div layout="row" flex="65" layout-align="left center" class="overflow-h pl-20"></div>
                                    </div>
                                </div>
                                <div class="border-box--blue-b px-24 py-10">
                                    <div layout="row" class="dark__text fs__14px proxima-soft-regular">
                                        <div layout="row" flex="5" layout-align="left center" class="overflow-h">38</div>
                                        <div layout="row" flex="30" layout-align="left center" class="overflow-h pl-20">
                                        <a href="https://docs.google.com/spreadsheets/d/1BDr8E4BllRbH_Gaj4U5WsqycfmweBH3N/edit?usp=sharing&ouid=103094647678813325845&rtpof=true&sd=true">
                                        Formato de control de recibos
                                        </a>    
                                        </div>
                                        <div layout="row" flex="65" layout-align="left center" class="overflow-h pl-20"></div>
                                    </div>
                                </div>
                                <div class="border-box--blue-b px-24 py-10">
                                    <div layout="row" class="dark__text fs__14px proxima-soft-regular">
                                        <div layout="row" flex="5" layout-align="left center" class="overflow-h">39</div>
                                        <div layout="row" flex="30" layout-align="left center" class="overflow-h pl-20">
                                        <a href="https://drive.google.com/file/d/1Zkjwy6Vsb6NOzPnkZN6YTP5r3DNHhIWr/view?usp=sharing">
                                        Facturación Clientes 
                                        </a>    
                                        </div>
                                        <div layout="row" flex="65" layout-align="left center" class="overflow-h pl-20"></div>
                                    </div>
                                </div>
                                



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- <div class="modal-dialog white__bg" ng-controller="InsertUserCtrl as user" ng-class="rootUsers.insert.options.modal_display">

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
        <!-- </div> -->
    
        <!-- <div class="modal-dialog white__bg" ng-controller="UpdateUserCtrl as updateHandler" ng-class="rootUsers.update.options.modal_display">

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

        </div> --> 
        
    </div>

</body>
</html>