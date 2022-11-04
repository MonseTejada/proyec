<!DOCTYPE html>
<html lang="es_MX">

<head>

	<meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" contet="ie=edge">
	<meta name="author" content="Ing. Saúl Fernando Torres Hernández">
	<meta name="description" content="Grúpo CCIMA S.A. de C.V."/>
	<meta name="keywords" content="grupo ccima, navetec, constructora, servicio de construccion, desarrolladora, llave en mano, built to suit, renta de maquinaria, renta de gruas, maquinaria pesada para construccion, naves industriales, renta naves industriales, venta naves industriales, parques industriales, terrenos, terrenos industriales, terrenos habitacionales, bienes raices, inmobiliaria"/>
	<meta http-equiv="cache-control" content="max-age=0" />
    <meta http-equiv="cache-control" content="no-cache" />
    <meta http-equiv="expires" content="0" />
    <meta http-equiv="expires" content="Tue, 01 Jul 2001 06:00:00 GMT" />
    <meta http-equiv="pragma" content="no-cache" />
	<meta http-equiv="pragma" content="no-cache" />

	<title>Grupo CCIMA</title>

	<script type="text/javascript" src="media/assets/js/analytics.js"></script>

	<link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="media/assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="media/assets/css/helpers.css">

	<script type="text/javascript" src="media/bower_components/jquery.min.js"></script>

</head>

<body ng-controller="InventaryCtrl as inventary">

	<div ng-include="'application/views/app/nav/nav.html'"></div>

	<div ng-class="inventary.is_scrollin">

		<div class="gray__bg overflow-h" layout="row" layout-align="end center">
			<!-- <span class="pointer fs__12px red_cc-txt proxima__nova__regular px-16 py-16" ng-click="inventary.exportToPDF()">Exportar a PDF</span> -->
			<span class="pointer fs__12px proxima__nova__regular px-16 py-16" ng-click="inventary.table.showImportTable()">Exportar</span>
		</div>

		<div layout-padding>

			<div>
				<div class="border-box--blue border-r4 overflow-y-h">

					<div class="bluegray-light2-bg border-box--blue-b px-20 py-10 pointer" ng-click="inventary.filters.collapse()">
						<span class="fs__18px gray-txt proxima__nova__regular">
							Filtros
						</span>
					</div>

					<div ng-class="inventary.filters.display">
						<div class="overflow-h p-20" ng-class="inventary.filters.display">

							<span class="fs__16px gray-txt proxima__nova__regular">
								Desarrollos
							</span>

							<div class="px-10 pt-16 overflowx__scroll__sm" layout="column" layout-align="start start" flex="100">

								<div layout="row" layout-align="start start" flex="100">

									<md-input-container style="width: 130px;">

										<label>
											<span class="gray-txt proxima-soft-regular">
												Unidad de negocio
											</span>
										</label>

										<md-select name="realEstateUnit" ng-model="inventary.selectedUnit" ng-change="inventary.updateAllRealEstateUnitsHandler()">

											<md-option ng-value="0">
												<span class="darkgray__text proxima-soft-regular">Todo</span>
											</md-option>

											<md-option ng-value="1">
												<span class="darkgray__text proxima-soft-regular">Navetec</span>
											</md-option>

											<md-option ng-value="2">
												<span class="darkgray__text proxima-soft-regular">Hábitta</span>
											</md-option>

										</md-select>

									</md-input-container>

									<div class="px-10"></div>

									<md-input-container>

										<label>
											<span class="gray-txt proxima-soft-regular">
												Desarrollo
											</span>
										</label>

										<md-select name="developments" ng-model="inventary.selectedDev" ng-change="inventary.updateDevelopmentHandler()">
											<md-option ng-repeat="dev in inventary.enviroment.developments" ng-value="dev.idDevelopment">
												<span class="darkgray__text proxima-soft-regular">{{ dev.devlopment }}</span>
											</md-option>
										</md-select>

									</md-input-container>

									<div class="px-10"></div>

									<md-input-container>

										<label>
											<span class="gray-txt proxima-soft-regular">
												Cluster
											</span>
										</label>

										<md-select name="clusters" ng-model="inventary.selectedCluster" ng-change="inventary.updateClustersHandler()">
											<md-option ng-repeat="cluster in inventary.enviroment.clusters" ng-value="cluster.idParcela">
												<span class="darkgray__text proxima-soft-regular">{{ cluster.parcela }}</span>
											</md-option>
										</md-select>

									</md-input-container>

									<div class="px-10"></div>

									<md-input-container>

										<label>
											<span class="gray-txt proxima-soft-regular">
												Condominio
											</span>
										</label>

										<md-select name="condos" ng-model="inventary.selectedCondominium">
											<md-option ng-repeat="condo in inventary.enviroment.condos" ng-value="condo.idCondominium">
												<span class="darkgray__text proxima-soft-regular">{{ condo.condominium }}</span>
											</md-option>
										</md-select>

									</md-input-container>

									<div class="px-10"></div>

								</div>

								<div>
									<md-menu md-offset="-50 0" ng-controller="ContactMenuCtrl as contactCtrl">
	
										<span class="pointer blue__text" ng-click="contactCtrl.openMenu($mdMenu, $event)">
											Layouts
										</span>
	
										<md-menu-content>
	
											<md-menu-item>
												<span class="gray-txt">
													Navetec
												</span>
											</md-menu-item>
	
											<md-menu-divider></md-menu-divider>
	
											<md-menu-item>
												<md-button href="#!/inventary/layouts/Beta">
													Beta
												</md-button>
											</md-menu-item>
	
											<md-menu-item>
												<md-button href="#!/inventary/layouts/Gamma">
													Gamma
												</md-button>
											</md-menu-item>
	
											<md-menu-item>
												<md-button href="#!/inventary/layouts/Santa Rosa">
													Santa Rosa
												</md-button>
											</md-menu-item>
	
											<md-menu-item>
												<md-button href="#!/inventary/layouts/Gamma II">
													Gamma II
												</md-button>
											</md-menu-item>
	
											<md-menu-item>
												<md-button href="#!/inventary/layouts/Pedro Escobedo">
													Pedro Escobedo
												</md-button>
											</md-menu-item>
	
											<md-menu-item>
												<md-button href="#!/inventary/layouts/La Presa">
													La Presa
												</md-button>
											</md-menu-item>
	
											<md-menu-item>
												<md-button href="#!/inventary/layouts/Aeropuerto">
													Aeropuerto
												</md-button>
											</md-menu-item>
	
											<md-menu-item>
												<md-button href="#!/inventary/layouts/San Luis Potosi">
													San Luis Potosí
												</md-button>
											</md-menu-item>
											
											<md-menu-item>
												<md-button href="#!/inventary/layouts/celta">
													Celta
												</md-button>
											</md-menu-item>
											<md-menu-item>
												<md-button href="#!/inventary/layouts/calamanda">
													Calamanda
												</md-button>
											</md-menu-item>

											<md-menu-divider></md-menu-divider>
	
											<md-menu-item>
												<span class="gray-txt">
													Portto Blanco - Cimatario
												</span>
											</md-menu-item>
	
											<md-menu-divider></md-menu-divider>

											<md-menu-item>
												<md-button href="#!/inventary/layouts/Estepa">
													Estepa
												</md-button>
											</md-menu-item>
	
											<md-menu-item>
												<md-button href="#!/inventary/layouts/Desierto">
													Desierto
												</md-button>
											</md-menu-item>
	
											<md-menu-item>
												<md-button href="#!/inventary/layouts/Taiga">
													Taiga
												</md-button>
											</md-menu-item>
	
											<md-menu-item>
												<md-button href="#!/inventary/layouts/Páramo">
													Páramo
												</md-button>
											</md-menu-item>

											<md-menu-item>
												<md-button href="#!/inventary/layouts/Selva">
													Selva
												</md-button>
											</md-menu-item>

											<md-menu-item>
												<md-button href="#!/inventary/layouts/bosque">
													Bosque
												</md-button>
											</md-menu-item>
											
											<md-menu-item>
												<md-button href="#!/inventary/layouts/lago%201">
													Lago
												</md-button>
											</md-menu-item>
											<md-menu-item>
												<md-button href="#!/inventary/layouts/lomas">
													Lomas
												</md-button>
											</md-menu-item>
											<!--Hola Mundo diego estuvo aqui -->
											<md-menu-item>
												<md-button href="#!/inventary/layouts/manglar">
													Manglar
												</md-button>
											</md-menu-item>
											
											<md-menu-divider></md-menu-divider>
	
											<md-menu-item>
												<span class="gray-txt">
													Portto Blanco - SLP
												</span>
											</md-menu-item>
	
											<md-menu-divider></md-menu-divider>

											<md-menu-item>
												<md-button href="#!/inventary/layouts/Tamúl">
													Tamúl
												</md-button>
											</md-menu-item>

											<md-menu-divider></md-menu-divider>
	
											<md-menu-item>
												<span class="gray-txt">
													Veredas de Lira - Pedro Escobedo
												</span>
											</md-menu-item>
	
											<md-menu-divider></md-menu-divider>

											<md-menu-item>
												<md-button href="#!/inventary/layouts/Sabino">
													Sabino
												</md-button>
											</md-menu-item>

											<md-menu-item>
												<md-button href="#!/inventary/layouts/Cedro">
													Cedro
												</md-button>
											</md-menu-item>

											<md-menu-divider></md-menu-divider>
	
											<md-menu-item>
												<md-button>
													Cerrar menu
												</md-button>
											</md-menu-item>
	
										</md-menu-content>
	
									</md-menu>
								</div>
		
							</div>
	
							<div class="py-16">
								<md-divider></md-divider>
							</div>
	
							<div layout="column" layout-align="center start" flex="100">
	
								<span class="fs__16px gray-txt proxima__nova__regular mt-10">
									Estados
								</span>
	
								<md-list>
	
									<md-list-item ng-repeat="status in inventary.filters.status">
										<md-checkbox class="md-primary" ng-model="status.checked" ng-change="inventary.statusFiltersHandler()"></md-checkbox>
										<span>{{ status.name }}</span>
									</md-list-item>
	
								</md-list>
	
							</div>
	
							<div class="pt-16 pb-24">
								<md-divider></md-divider>
							</div>
	
							<div>
								<md-button md-no-ink class="md-primary" ng-click="inventary.update()">
									Actualizar
								</md-button>
							</div>
	
						</div>
					</div>

				</div>
			</div>

			<div>
				<div class="border-box--blue border-r4 overflow-h">

					<div layout="row" layout-align="space-between center" class="bluegray-light2-bg border-box--blue-b px-20 py-10">
						<div class="fs__18px gray-txt proxima__nova__regular">
							Resultados
						</div>
						<div class="fs__12px blue__text proxima__nova__regular pointer" ng-click="inventary.moreDetails.show()">
							Más detalles
						</div>
					</div>

					<div layout="column" class="px-16 ">

						<div layout="row" class="py-10">

							<div layout="row" flex="70">

								<md-input-container style="width: 64px;">

									<label>
										<span class="gray-txt fs__13px proxima-soft-regular">
											Páginas
										</span>
									</label>

									<md-select name="groupPages" ng-model="inventary.pagination.config.current" ng-change="inventary.updatePage()">
										<md-option ng-repeat="page in inventary.pagination.data.book" ng-value="page">
											<span class="dark__text fs__14px proxima-soft-regular">{{ page }}</span>
										</md-option>
									</md-select>

								</md-input-container>

								<div class="px-8"></div>

								<md-input-container style="width: 64px;">

									<label>
										<span class="gray-txt fs__13px proxima-soft-regular">
											Filas
										</span>
									</label>

									<md-select name="groupLimit" ng-model="inventary.pagination.config.limit.selected" ng-change="inventary.update()">
										<md-option ng-repeat="limit in inventary.pagination.config.limit.members" ng-value="limit">
											<span class="dark__text fs__14px proxima-soft-regular">{{ limit }}</span>
										</md-option>
									</md-select>

								</md-input-container>

							</div>

							<div class="dark__text fs__12px proxima-soft-light ml-16" layout="row" layout-align="end center" flex="30">
								{{ inventary.pagination.data.start+1 }} - {{ inventary.pagination.data.end }} de {{ inventary.pagination.data.num_of_rows }}
							</div>

						</div>

						<md-divider></md-divider>

						<div layout="row"  class="py-10">

							<md-input-container>

								<md-select name="groupColumns" ng-model="inventary.table.selected" ng-change="inventary.table.columnsHandler()">

									<md-option ng-value="-1">
										<span class="darkgray__text fs__14px proxima-soft-regular">Columnas</span>
									</md-option>

									<md-divider></md-divider>

									<md-option ng-value="-2">
										<span class="dark__text fs__14px proxima-soft-regular">Mostrar todas</span>
									</md-option>

									<md-divider></md-divider>

									<md-option ng-value="-3">
										<span class="dark__text fs__14px proxima-soft-regular">Ocultar todas</span>
									</md-option>

									<md-divider></md-divider>
	
									<md-option ng-repeat="column in inventary.table.columns" ng-value="$index">
										<span class="dark__text fs__14px proxima-soft-regular">{{ column.text }} <span class="darkgray__text">{{ column.display }}</span></span>
									</md-option>

								</md-select>

							</md-input-container>

						</div>

					</div>

					<md-divider></md-divider>

					<div class="px-16" ng-class="inventary.table.countDisplay" layout="row" layout-align="start center">

						<md-input-container>

							<md-select name="increase" ng-model="inventary.table.promo" ng-change="inventary.table.updatePromo()">

								<md-option ng-value="0">
									<span class="darkgray__text fs__14px proxima-soft-regular">Aumento</span>
								</md-option>

								<md-option ng-repeat="increase in inventary.promos.increase" ng-value="increase.idPromo">
									<span class="darkgray__text fs__14px proxima-soft-regular">{{ (increase.discount * 100).toFixed(2) }}%</span>
								</md-option>

							</md-select>

						</md-input-container>

						<div class="px-8"></div>

						<md-input-container>

							<md-select name="discount" ng-model="inventary.table.promo" ng-change="inventary.table.updatePromo()">

								<md-option ng-value="0">
									<span class="darkgray__text fs__14px proxima-soft-regular">Descuento</span>
								</md-option>

								<md-option ng-repeat="discount in inventary.promos.discount" ng-value="discount.idPromo">
									<span class="darkgray__text fs__14px proxima-soft-regular">{{ (discount.discount * 100).toFixed(2) }}%</span>
								</md-option>

							</md-select>

						</md-input-container>

						<div class="px-8"></div>

						<div class="p-10 fs__12px darkgray__text">{{ inventary.table.count }}</div>

					</div>

					<div class="overflow-s" style="height: 540px;">

						<table style="width: {{ inventary.table.width }}px;">

							<tbody>

								<tr style="background-color: #24292e;">

									<th class="white__text proxima__nova__light fs__14px" ng-class="inventary.table.columns[0].display" style="width: {{ inventary.table.columns[0].width }}px;">
										<md-checkbox class="md-primary mt-16" ng-checked="inventary.table.isChecked()" ng-click="inventary.table.toggleAll()"></md-checkbox>
									</th>

									<th class="white__text proxima__nova__light fs__14px" ng-repeat="col in inventary.table.columns" ng-class="col.display" ng-if="$index > 0" style="width: {{ col.width }}px;">{{ col.text }}</th>

								</tr>

								<tr class="green__bg">

									<td class="proxima__nova__regular gray__text fs__14px" ng-class="inventary.table.columns[0].display" style="width: {{ inventary.table.columns[0].width }}px;">Sumatorias</td>

									<td ng-class="inventary.table.columns[1].display" style="width: {{ inventary.table.columns[1].width }}px;"></td>
									<td ng-class="inventary.table.columns[2].display" style="width: {{ inventary.table.columns[2].width }}px;"></td>
									<td class="proxima__nova__regular gray__text fs__14px" ng-class="inventary.table.columns[3].display" style="width: {{ inventary.table.columns[3].width }}px;"></td>
									<td ng-class="inventary.table.columns[4].display" style="width: {{ inventary.table.columns[4].width }}px;"></td>

									<td class="proxima__nova__regular gray__text fs__14px" ng-class="inventary.table.columns[5].display" style="width: {{ inventary.table.columns[5].width }}px;"></td>
									<td class="proxima__nova__regular gray__text fs__14px" ng-class="inventary.table.columns[6].display" style="width: {{ inventary.table.columns[6].width }}px;">${{ inventary.moreDetails.sums.cost.property.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</td>

									<td ng-class="inventary.table.columns[7].display" style="width: {{ inventary.table.columns[7].width }}px;"></td>

									<td class="proxima__nova__regular gray__text fs__14px" ng-class="inventary.table.columns[8].display" style="width: {{ inventary.table.columns[8].width }}px;">${{ inventary.moreDetails.sums.hook.total.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</td>
									<td class="proxima__nova__regular gray__text fs__14px" ng-class="inventary.table.columns[9].display" style="width: {{ inventary.table.columns[9].width }}px;">${{ inventary.moreDetails.sums.financing.total.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</td>

									<td ng-class="inventary.table.columns[10].display" style="width: {{ inventary.table.columns[10].width }}px;"></td>

									<td class="proxima__nova__regular gray__text fs__14px" ng-class="inventary.table.columns[11].display" style="width: {{ inventary.table.columns[11].width }}px;"></td>
									<td class="proxima__nova__regular gray__text fs__14px" ng-class="inventary.table.columns[12].display" style="width: {{ inventary.table.columns[12].width }}px;">${{ inventary.moreDetails.sums.cost.increase.property.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</td>
									<td class="proxima__nova__regular gray__text fs__14px" ng-class="inventary.table.columns[13].display" style="width: {{ inventary.table.columns[13].width }}px;">${{ inventary.moreDetails.sums.hook.increase.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</td>
									<td class="proxima__nova__regular gray__text fs__14px" ng-class="inventary.table.columns[14].display" style="width: {{ inventary.table.columns[14].width }}px;">${{ inventary.moreDetails.sums.financing.increase.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</td>

									<td ng-class="inventary.table.columns[15].display" style="width: {{ inventary.table.columns[15].width }}px;"></td>

									<td class="proxima__nova__regular gray__text fs__14px" ng-class="inventary.table.columns[16].display" style="width: {{ inventary.table.columns[16].width }}px;"></td>
									<td class="proxima__nova__regular gray__text fs__14px" ng-class="inventary.table.columns[17].display" style="width: {{ inventary.table.columns[17].width }}px;">${{ inventary.moreDetails.sums.cost.discount.property.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</td>
									<td class="proxima__nova__regular gray__text fs__14px" ng-class="inventary.table.columns[18].display" style="width: {{ inventary.table.columns[18].width }}px;">${{ inventary.moreDetails.sums.hook.discount.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</td>
									<td class="proxima__nova__regular gray__text fs__14px" ng-class="inventary.table.columns[19].display" style="width: {{ inventary.table.columns[19].width }}px;">${{ inventary.moreDetails.sums.financing.discount.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</td>

									<td class="proxima__nova__regular gray__text fs__14px" ng-class="inventary.table.columns[20].display" style="width: {{ inventary.table.columns[20].width }}px;"></td>
									<td class="proxima__nova__regular gray__text fs__14px" ng-class="inventary.table.columns[21].display" style="width: {{ inventary.table.columns[21].width }}px;">${{ inventary.moreDetails.sums.cost.final.property.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</td>
									<td class="proxima__nova__regular gray__text fs__14px" ng-class="inventary.table.columns[22].display" style="width: {{ inventary.table.columns[22].width }}px;">${{ inventary.moreDetails.sums.hook.final.discount.total.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</td>
									<td class="proxima__nova__regular gray__text fs__14px" ng-class="inventary.table.columns[23].display" style="width: {{ inventary.table.columns[23].width }}px;">${{ inventary.moreDetails.sums.financing.final.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</td>

									<td ng-class="inventary.table.columns[24].display" style="width: {{ inventary.table.columns[24].width }}px;"></td>

									<td class="proxima__nova__regular gray__text fs__14px" ng-class="inventary.table.columns[25].display" style="width: {{ inventary.table.columns[25].width }}px;">${{ inventary.moreDetails.sums.hook.final.total.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</td>
									<td class="proxima__nova__regular gray__text fs__14px" ng-class="inventary.table.columns[26].display" style="width: {{ inventary.table.columns[26].width }}px;">${{ inventary.moreDetails.sums.hook.final.discount.amount.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</td>
									<td class="proxima__nova__regular gray__text fs__14px" ng-class="inventary.table.columns[27].display" style="width: {{ inventary.table.columns[27].width }}px;">${{ inventary.moreDetails.sums.amount.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</td>

									<td ng-class="inventary.table.columns[28].display" style="width: {{ inventary.table.columns[28].width }}px;"></td>
									<td ng-class="inventary.table.columns[29].display" style="width: {{ inventary.table.columns[29].width }}px;"></td>
									<td ng-class="inventary.table.columns[30].display" style="width: {{ inventary.table.columns[30].width }}px;"></td>
									<td ng-class="inventary.table.columns[31].display" style="width: {{ inventary.table.columns[31].width }}px;"></td>

								</tr>

								<tr class="trow" ng-repeat="property in inventary.inmovables">

									<td align="center"  class="proxima__nova__light fs__14px" ng-class="inventary.table.columns[0].display" style="width: {{ inventary.table.columns[0].width }}px;">
										<span class="proxima__nova__light fs__14px px-6">{{ inventary.pagination.data.start + $index + 1 }}</span>
										<md-checkbox class="md-primary mt-16" ng-model="property.selected" ng-change="inventary.table.toggle()"></md-checkbox>
									</td>

									<td class="proxima__nova__light fs__14px" ng-class="inventary.table.columns[1].display" style="width: {{ inventary.table.columns[1].width }}px;">{{ property.number }}</td>
									<td class="proxima__nova__light fs__14px pointer" ng-class="inventary.table.columns[2].display" style="width: {{ inventary.table.columns[2].width }}px;" ng-click="inventary.openStatusDetails($index)">{{ property.status }}</td>
									<td class="proxima__nova__light fs__14px" ng-class="inventary.table.columns[3].display" style="width: {{ inventary.table.columns[3].width }}px;">{{ property.area }} M&sup2;</td>
									<td class="proxima__nova__light fs__14px" ng-class="inventary.table.columns[4].display" style="width: {{ inventary.table.columns[4].width }}px;">{{ property.class }}</td>

									<td class="proxima__nova__light fs__14px" ng-class="inventary.table.columns[5].display" style="width: {{ inventary.table.columns[5].width }}px;">${{ property.cost.m2.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</td>
									<td class="proxima__nova__light fs__14px" ng-class="inventary.table.columns[6].display" style="width: {{ inventary.table.columns[6].width }}px;">${{ property.cost.property.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</td>

									<td align="center" ng-class="inventary.table.columns[7].display" style="width: {{ inventary.table.columns[7].width }}px;">

										<md-input-container>

											<md-select name="updateHook" ng-model="property.hook.selected" ng-change="inventary.updateIncrease(property.idProperty, property.hook.selected, property.promos.hook.idPromo)" required>

												<md-option ng-value="0">
													<span class="proxima__nova__light fs__14px">N/A</span>
												</md-option>

												<md-option ng-repeat="hook in inventary.promos.hook" ng-value="hook.idPromo">
													<span class="proxima__nova__light fs__14px">{{ (hook.discount * 100).toFixed(2) }}%</span>
												</md-option>

											</md-select>

										</md-input-container>

									</td>

									<td class="proxima__nova__light fs__14px" ng-class="inventary.table.columns[8].display" style="width: {{ inventary.table.columns[8].width }}px;">${{ property.hook.total.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</td>
									<td class="proxima__nova__light fs__14px" ng-class="inventary.table.columns[9].display" style="width: {{ inventary.table.columns[9].width }}px;">${{ property.financing.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</td>

									<td class="proxima__nova__light fs__14px" ng-class="inventary.table.columns[10].display" style="width: {{ inventary.table.columns[10].width }}px;">${{ property.increase.amount.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</td>

									<td class="proxima__nova__light fs__14px" ng-class="inventary.table.columns[11].display" style="width: {{ inventary.table.columns[11].width }}px;">${{ property.increase.cost.m2.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</td>
									<td class="proxima__nova__light fs__14px" ng-class="inventary.table.columns[12].display" style="width: {{ inventary.table.columns[12].width }}px;">${{ property.increase.cost.property.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</td>
									<td class="proxima__nova__light fs__14px" ng-class="inventary.table.columns[13].display" style="width: {{ inventary.table.columns[13].width }}px;">${{ property.increase.hook.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</td>
									<td class="proxima__nova__light fs__14px" ng-class="inventary.table.columns[14].display" style="width: {{ inventary.table.columns[14].width }}px;">${{ property.increase.financing.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</td>

									<td class="proxima__nova__light fs__14px" ng-class="inventary.table.columns[15].display" style="width: {{ inventary.table.columns[15].width }}px;">${{ property.discount.amount.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</td>

									<td class="proxima__nova__light fs__14px" ng-class="inventary.table.columns[16].display" style="width: {{ inventary.table.columns[16].width }}px;">${{ property.discount.cost.m2.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</td>
									<td class="proxima__nova__light fs__14px" ng-class="inventary.table.columns[17].display" style="width: {{ inventary.table.columns[17].width }}px;">${{ property.discount.cost.property.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</td>
									<td class="proxima__nova__light fs__14px" ng-class="inventary.table.columns[18].display" style="width: {{ inventary.table.columns[18].width }}px;">${{ property.discount.hook.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</td>
									<td class="proxima__nova__light fs__14px" ng-class="inventary.table.columns[19].display" style="width: {{ inventary.table.columns[19].width }}px;">${{ property.discount.financing.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</td>

									<td class="proxima__nova__light fs__14px" ng-class="inventary.table.columns[20].display" style="width: {{ inventary.table.columns[20].width }}px;">${{ property.final.cost.m2.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</td>
									<td class="proxima__nova__light fs__14px" ng-class="inventary.table.columns[21].display" style="width: {{ inventary.table.columns[21].width }}px;">${{ property.final.cost.property.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</td>
									<td class="proxima__nova__light fs__14px" ng-class="inventary.table.columns[22].display" style="width: {{ inventary.table.columns[22].width }}px;">${{ property.final.hook.total.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</td>
									<td class="proxima__nova__light fs__14px" ng-class="inventary.table.columns[23].display" style="width: {{ inventary.table.columns[23].width }}px;">${{ property.final.financing.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</td>

									<td align="center" class="proxima__nova__light fs__14px" ng-class="inventary.table.columns[24].display" style="width: {{ inventary.table.columns[24].width }}px;">

										<md-input-container>
	
											<md-select name="updateHookDiscount" ng-model="property.final.hook.discount.selected" ng-change="inventary.updateIncrease(property.idProperty, property.final.hook.discount.selected, property.final.hook.discount.id)" required>
	
												<md-option ng-value="0">N/A</md-option>
	
												<md-option ng-repeat="hookDiscount in inventary.promos.hook_discount" ng-value="hookDiscount.idPromo">{{ (hookDiscount.discount*100).toFixed(2) }}%</md-option>
	
											</md-select>
	
										</md-input-container>
	
									</td>

									<td class="proxima__nova__light fs__14px" ng-class="inventary.table.columns[25].display" style="width: {{ inventary.table.columns[25].width }}px;">${{ property.final.hook.discount.amount.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</td>
									<td class="proxima__nova__light fs__14px" ng-class="inventary.table.columns[26].display" style="width: {{ inventary.table.columns[26].width }}px;">${{ property.final.hook.discount.total.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</td>
									<td class="proxima__nova__light fs__14px" ng-class="inventary.table.columns[27].display" style="width: {{ inventary.table.columns[27].width }}px;">${{ property.amount.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</td>

									<td class="proxima__nova__light fs__14px" ng-class="inventary.table.columns[28].display" style="width: {{ inventary.table.columns[28].width }}px;">{{ property.init_at }}</td>
									<td class="proxima__nova__light fs__14px" ng-class="inventary.table.columns[29].display" style="width: {{ inventary.table.columns[29].width }}px;">{{ property.set_aside_at }}</td>
									<td class="proxima__nova__light fs__14px" ng-class="inventary.table.columns[30].display" style="width: {{ inventary.table.columns[30].width }}px;">{{ property.hooked_at }}</td>
									<td class="proxima__nova__light fs__14px" ng-class="inventary.table.columns[31].display" style="width: {{ inventary.table.columns[31].width }}px;">{{ property.sold_at }}</td>

								</tr>

							</tbody>

						</table>

					</div>

				</div>
			</div>

		</div>

    </div>

	<div class="modal-dialog white__bg" ng-class="inventary.statusDetailsPanelDisplay">

		<div class="pl-16 dark__bg" layout="row">

			<div layout="row" layout-align="start center" flex="80">
				<span class="light-txt">
					{{ inventary.inmovables[inventary.selectedIndex].number + ' | ' + inventary.inmovables[inventary.selectedIndex].class + ' | ' + inventary.inmovables[inventary.selectedIndex].area + ' M&sup2;  | ' + inventary.inmovables[inventary.selectedIndex].condominium }}
				</span>
			</div>

			<div layout="row" layout-align="end center" flex="20">
				<md-button ng-click="inventary.closeStatusDetails()" class="md-icon-button" aria-label="Cerrar">
					<md-icon style="color: white;" md-svg-src="media/assets/img/icons/app/close.svg"></md-icon>
				</md-button>
			</div>

		</div>

		<div class="overflow-y-s h100-55" layout-padding>

			<div>
				<div class="border-box--blue border-r4 overflow-y-h">

					<div class="bluegray-light2-bg border-box--blue-b px-20 py-10">
						<span class="fs__16px gray-txt proxima__nova__regular">
							Cotización
						</span>
					</div>

					<div class="px-40" layout="column" layout-gt-sm="row" layout-align="space-around start" flex="100">

						<div class="py-40" layout="column">

							<div class="pb-12 w100">
								<span class="fs__16px proxima__nova__regular darkgray__text">Detalles</span>
							</div>

							<div class="py-12" layout="row" layout-align="start center">

								<div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Número</div>
								<div class="px-8"></div>
								<div class="fs__14px w124 proxima__nova__light">{{ inventary.inmovables[inventary.selectedIndex].number }}</div>

							</div>

							<div class="py-12" layout="row" layout-align="start center">

								<div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Superficie</div>
								<div class="px-8"></div>
								<div class="fs__14px w124 proxima__nova__light">{{ inventary.inmovables[inventary.selectedIndex].area }} M&sup2;</div>

							</div>

							<div class="py-12" layout="row" layout-align="start center">

								<div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Tipo</div>
								<div class="px-8"></div>
								<div class="fs__14px w124 proxima__nova__light">{{ inventary.inmovables[inventary.selectedIndex].class }}</div>

							</div>

							<div class="py-12" layout="row" layout-align="start center">

								<div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Precio M&sup2;</div>
								<div class="px-8"></div>
								<div class="fs__14px w124 proxima__nova__light">${{ inventary.inmovables[inventary.selectedIndex].cost.m2.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</div>

							</div>

							<div class="py-12" layout="row" layout-align="start center">

								<div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Precio de propiedad</div>
								<div class="px-8"></div>
								<div class="fs__14px w124 proxima__nova__light">${{ inventary.inmovables[inventary.selectedIndex].cost.property.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</div>

							</div>

							<div class="py-12" layout="row" layout-align="start center">

								<div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Financiamiento</div>
								<div class="px-8"></div>
								<div class="fs__14px w124 proxima__nova__light">${{ inventary.inmovables[inventary.selectedIndex].financing.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</div>

							</div>

						</div>

						<div class="py-40" layout="column">

							<div class="pb-12 w100">
								<span class="fs__16px proxima__nova__regular darkgray__text">Enganche</span>
							</div>

							<div class="py-12" layout="row" layout-align="start center">

								<div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Base</div>
								<div class="px-8"></div>
								<md-input-container>

									<md-select name="updateHook" ng-model="inventary.inmovables[inventary.selectedIndex].hook.selected" ng-change="inventary.updateIncrease(inventary.inmovables[inventary.selectedIndex].idProperty, inventary.inmovables[inventary.selectedIndex].hook.selected, inventary.inmovables[inventary.selectedIndex].promos.hook.idPromo)" required>

										<md-option ng-repeat="hook in inventary.promos.hook" ng-value="hook.idPromo">
											<span class="proxima__nova__light fs__14px">{{ (hook.discount * 100).toFixed(2) }}%</span>
										</md-option>

									</md-select>

								</md-input-container>

							</div>

							<div class="py-12" layout="row" layout-align="start center">

								<div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Total de enganche</div>
								<div class="px-8"></div>
								<div class="fs__14px w124 proxima__nova__light">${{ inventary.inmovables[inventary.selectedIndex].hook.total.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</div>

							</div>

						</div>

					</div>

					<div class="px-40" layout="column" layout-gt-sm="row" layout-align="space-around start" flex="100">

						<div class="py-40" layout="column">

							<div class="pb-12 w100">
								<span class="fs__16px proxima__nova__regular darkgray__text">Aumento &#11014;</span>
							</div>

							<div class="py-12" layout="row" layout-align="start center">

								<div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Historial</div>
								<div class="px-8"></div>
								<md-menu md-offset="0 0" ng-controller="ContactMenuCtrl as contactCtrl">

									<span class="proxima__nova__light fs__14px pointer" ng-click="contactCtrl.openMenu($mdMenu, $event)">
										&#10549;
									</span>

									<md-menu-content>

										<md-menu-item ng-repeat="promo in inventary.inmovables[inventary.selectedIndex].promos.cost_m2_increase">
											<md-button ng-click="inventary.table.deletePromo(inventary.inmovables[inventary.selectedIndex].idProperty, promo.idPromo)">
												<span class="fs__14px proxima__nova__light">&#9940; {{ (promo.discount * 100).toFixed(2) }}% x {{ promo.amount }}</span>
											</md-button>
										</md-menu-item>

									</md-menu-content>

								</md-menu>

							</div>

							<div class="py-12" layout="row" layout-align="start center">

								<div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Total aumentado</div>
								<div class="px-8"></div>
								<div class="fs__14px w124 proxima__nova__light">${{ inventary.inmovables[inventary.selectedIndex].increase.amount.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</div>

							</div>

							<div class="py-12" layout="row" layout-align="start center">

								<div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Precio M&sup2;</div>
								<div class="px-8"></div>
								<div class="fs__14px w124 proxima__nova__light">${{ inventary.inmovables[inventary.selectedIndex].increase.cost.m2.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</div>

							</div>

							<div class="py-12" layout="row" layout-align="start center">

								<div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Precio de propiedad</div>
								<div class="px-8"></div>
								<div class="fs__14px w124 proxima__nova__light">${{ inventary.inmovables[inventary.selectedIndex].increase.cost.property.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</div>

							</div>

							<div class="py-12" layout="row" layout-align="start center">

								<div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Total de enganche</div>
								<div class="px-8"></div>
								<div class="fs__14px w124 proxima__nova__light">${{ inventary.inmovables[inventary.selectedIndex].increase.hook.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</div>

							</div>

							<div class="py-12" layout="row" layout-align="start center">

								<div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Financiamiento</div>
								<div class="px-8"></div>
								<div class="fs__14px w124 proxima__nova__light">${{ inventary.inmovables[inventary.selectedIndex].increase.financing.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</div>

							</div>

							<div class="py-12" layout="row" layout-align="start center">

								<div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Aumentar</div>
								<div class="px-8"></div>
								<md-menu md-offset="0 0" ng-controller="ContactMenuCtrl as contactCtrl">

									<span class="proxima__nova__light fs__14px pointer" ng-click="contactCtrl.openMenu($mdMenu, $event)">
										+
									</span>

									<md-menu-content>

										<md-menu-item ng-repeat="increase in inventary.promos.increase">
											<md-button ng-click="inventary.table.insertPromo(inventary.inmovables[inventary.selectedIndex].idProperty, increase.idPromo)">
												<span class="fs__14px proxima__nova__light">{{ (increase.discount * 100).toFixed(2) }}%</span>
											</md-button>
										</md-menu-item>

									</md-menu-content>

								</md-menu>

							</div>

						</div>

						<div class="py-40" layout="column">

							<div class="pb-12 w100">
								<span class="fs__16px proxima__nova__regular darkgray__text">Descuento &#11015;</span>
							</div>

							<div class="py-12" layout="row" layout-align="start center">

								<div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Historial</div>
								<div class="px-8"></div>
								<md-menu md-offset="0 0" ng-controller="ContactMenuCtrl as contactCtrl">

									<span class="proxima__nova__light fs__14px pointer" ng-click="contactCtrl.openMenu($mdMenu, $event)">
										&#10549;
									</span>

									<md-menu-content>

										<md-menu-item ng-repeat="promo in inventary.inmovables[inventary.selectedIndex].promos.cost_m2_discount">
											<md-button ng-click="inventary.table.deletePromo(inventary.inmovables[inventary.selectedIndex].idProperty, promo.idPromo)">
												<span class="fs__14px proxima__nova__light">&#9940; {{ (promo.discount * 100).toFixed(2) }}% x {{ promo.amount }}</span>
											</md-button>
										</md-menu-item>

									</md-menu-content>

								</md-menu>

							</div>

							<div class="py-12" layout="row" layout-align="start center">

								<div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Total descontado</div>
								<div class="px-8"></div>
								<div class="fs__14px w124 proxima__nova__light">${{ inventary.inmovables[inventary.selectedIndex].discount.amount.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</div>

							</div>

							<div class="py-12" layout="row" layout-align="start center">

								<div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Precio M&sup2;</div>
								<div class="px-8"></div>
								<div class="fs__14px w124 proxima__nova__light">${{ inventary.inmovables[inventary.selectedIndex].discount.cost.m2.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</div>

							</div>

							<div class="py-12" layout="row" layout-align="start center">

								<div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Precio de propiedad</div>
								<div class="px-8"></div>
								<div class="fs__14px w124 proxima__nova__light">${{ inventary.inmovables[inventary.selectedIndex].discount.cost.property.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</div>

							</div>

							<div class="py-12" layout="row" layout-align="start center">

								<div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Total de enganche</div>
								<div class="px-8"></div>
								<div class="fs__14px w124 proxima__nova__light">${{ inventary.inmovables[inventary.selectedIndex].discount.hook.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</div>

							</div>

							<div class="py-12" layout="row" layout-align="start center">

								<div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Financiamiento</div>
								<div class="px-8"></div>
								<div class="fs__14px w124 proxima__nova__light">${{ inventary.inmovables[inventary.selectedIndex].discount.financing.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</div>

							</div>

							<div class="py-12" layout="row" layout-align="start center">

								<div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Aumentar</div>
								<div class="px-8"></div>
								<md-menu md-offset="0 0" ng-controller="ContactMenuCtrl as contactCtrl">

									<span class="proxima__nova__light fs__14px pointer" ng-click="contactCtrl.openMenu($mdMenu, $event)">
										+
									</span>

									<md-menu-content>

										<md-menu-item ng-repeat="discount in inventary.promos.discount">
											<md-button ng-click="inventary.table.insertPromo(inventary.inmovables[inventary.selectedIndex].idProperty, discount.idPromo)">
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
								<span class="fs__16px proxima__nova__regular darkgray__text">Final</span>
							</div>

							<div class="py-12" layout="row" layout-align="start center">

								<div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Precio M&sup2;</div>
								<div class="px-8"></div>
								<div class="fs__14px w124 proxima__nova__light">${{ inventary.inmovables[inventary.selectedIndex].final.cost.m2.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</div>

							</div>

							<div class="py-12" layout="row" layout-align="start center">

								<div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Precio propiedad</div>
								<div class="px-8"></div>
								<div class="fs__14px w124 proxima__nova__light">${{ inventary.inmovables[inventary.selectedIndex].final.cost.property.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</div>

							</div>

							<div class="py-12" layout="row" layout-align="start center">

								<div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Enganche</div>
								<div class="px-8"></div>
								<div class="fs__14px w124 proxima__nova__light">${{ inventary.inmovables[inventary.selectedIndex].final.hook.total.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</div>

							</div>

							<div class="py-12" layout="row" layout-align="start center">

								<div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Financiamiento</div>
								<div class="px-8"></div>
								<div class="fs__14px w124 proxima__nova__light">${{ inventary.inmovables[inventary.selectedIndex].final.financing.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</div>

							</div>

						</div>

						<div class="py-40" layout="column">

							<div class="pb-12 w100">
								<span class="fs__16px proxima__nova__regular darkgray__text">Descuento a engache &#11015;</span>
							</div>

							<div class="py-12" layout="row" layout-align="start center">

								<div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Descuento</div>
								<div class="px-8"></div>
								<md-input-container>

									<md-select name="updateHookDiscount" ng-model="inventary.inmovables[inventary.selectedIndex].final.hook.discount.selected" ng-change="inventary.updateIncrease(inventary.inmovables[inventary.selectedIndex].idProperty, inventary.inmovables[inventary.selectedIndex].final.hook.discount.selected, inventary.inmovables[inventary.selectedIndex].final.hook.discount.id)" required>

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
								<div class="px-8"></div>
								<div class="fs__14px w124 proxima__nova__light">${{ inventary.inmovables[inventary.selectedIndex].final.hook.discount.amount.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</div>

							</div>

							<div class="py-12" layout="row" layout-align="start center">

								<div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Enganche final con descuento</div>
								<div class="px-8"></div>
								<div class="fs__14px w124 proxima__nova__light">${{ inventary.inmovables[inventary.selectedIndex].final.hook.discount.total.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</div>

							</div>

						</div>

					</div>

					<div class="p-40" layout="row" layout-align="center center">

						<div class="fs__14px darkgray__text right__text proxima__nova__light">Importe</div>
						<div class="px-8"></div>
						<div class="fs__14px w124 proxima__nova__light">${{ inventary.inmovables[inventary.selectedIndex].amount.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</div>

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

					<div class="px-40" layout="column" layout-gt-sm="row" layout-align="space-around start" flex="100" ng-if="inventary.inmovables[inventary.selectedIndex].idPropertyStatus == 1">

						<div class="py-40" layout="column">

							<div class="pb-12 w100" layout="row" layout-align="space-between center">
								<div class="fs__16px proxima__nova__light dark__text">Status</div>
								<div class="px-5"></div>
								<i class="material-icons-round blue__text fs__16px pointer" ng-click="inventary.openCustomerFinder('setLeadProperty')">edit</i>
							</div>

							<md-divider></md-divider>

							<div layout="row" layout-align="start center">

								<div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Status</div>
								<div class="px-8"></div>
								<md-input-container>

									<div>
										<span class="fs__14px proxima__nova__light">Disponible</span>
									</div>

								</md-input-container>

							</div>

						</div>

						<div class="py-40" layout="column">

							<div class="pb-12 w100">
								<span class="fs__16px proxima__nova__light dark__text">Registros</span>
							</div>

							<md-divider></md-divider>

							<div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Sin registros</div>

						</div>


					</div>

					<div class="px-40" layout="column" layout-gt-sm="row" layout-align="space-around start" flex="100" ng-if="inventary.inmovables[inventary.selectedIndex].idPropertyStatus > 1">

						<div class="py-40" layout="column">

							<div class="pb-12 w100">
								<span class="fs__16px proxima__nova__light dark__text">Status</span>
							</div>

							<md-divider></md-divider>

							<div layout="row" layout-align="start center">

								<div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Status</div>
								<div class="px-8"></div>
								<md-input-container>

									<md-select name="groupPages" ng-model="inventary.selectedStatus" ng-change="inventary.updateStatus()">
										<md-option ng-repeat="member in inventary.filters.status" ng-value="member.id">
											<span class="fs__14px proxima__nova__light">{{ member.name }}</span>
										</md-option>
									</md-select>

								</md-input-container>

							</div>

						</div>

						<div class="py-40" layout="column">

							<div class="pb-12 w100">
								<span class="fs__16px proxima__nova__light dark__text">Registros</span>
							</div>

							<md-divider></md-divider>

							<div class="py-12" layout="row" layout-align="start center">

								<div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Seleccionado</div>
								<div class="px-8"></div>
								<md-datepicker ng-model="inventary.initDate" 
												ng-change="inventary.updateDate('init', inventary.initDate)" 
												md-placeholder="Enter date" 
												input-aria-describedby="datepicker-description" 
												input-aria-labelledby="datepicker-header"></md-datepicker>

							</div>

							<div class="py-12" layout="row" layout-align="start center">

								<div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Apartado</div>
								<div class="px-8"></div>
								<md-datepicker ng-model="inventary.setAsideDate" 
												ng-change="inventary.updateDate('set_aside', inventary.setAsideDate)" 
												md-placeholder="Enter date" 
												input-aria-describedby="datepicker-description" 
												input-aria-labelledby="datepicker-header"></md-datepicker>

							</div>

							<div class="py-12" layout="row" layout-align="start center">

								<div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Enganche</div>
								<div class="px-8"></div>
								<md-datepicker ng-model="inventary.hookedDate" 
												ng-change="inventary.updateDate('hooked', inventary.hookedDate)" 
												md-placeholder="Enter date" 
												input-aria-describedby="datepicker-description" 
												input-aria-labelledby="datepicker-header"></md-datepicker>

							</div>

							<div class="py-12" layout="row" layout-align="start center">

								<div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Vendido</div>
								<div class="px-8"></div>
								<md-datepicker ng-model="inventary.soldDate" 
												ng-change="inventary.updateDate('sold', inventary.soldDate)" 
												md-placeholder="Enter date" 
												input-aria-describedby="datepicker-description" 
												input-aria-labelledby="datepicker-header"></md-datepicker>

							</div>

						</div>


					</div>

					<div class="px-40" layout="column" layout-gt-sm="row" layout-align="space-around start" flex="100" ng-if="inventary.inmovables[inventary.selectedIndex].idPropertyStatus > 1">

						<div class="py-40" layout="column">

							<div class="pb-12 w100" layout="row" layout-align="space-between center">
								<div class="fs__16px proxima__nova__light dark__text">Cliente</div>
								<div class="px-5"></div>
								<i class="material-icons-round blue__text fs__18px pointer" ng-click="inventary.openCustomerFinder('updateLeadProperty')">swap_horiz</i>
							</div>

							<md-divider></md-divider>

							<div class="py-12" layout="row" layout-align="start center">

								<div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Nombre</div>
								<div class="px-8"></div>
								<div class="fs__14px w124 proxima__nova__light">{{ inventary.statusDetails.lead.name + ' ' + inventary.statusDetails.lead.last_name }}</div>

							</div>

							<div class="py-12" layout="row" layout-align="start center">

								<div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Sexo</div>
								<div class="px-8"></div>
								<div class="fs__14px w124 proxima__nova__light">{{ inventary.statusDetails.lead.gender }}</div>

							</div>

							<div class="py-12" layout="row" layout-align="start center">

								<div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Correo</div>
								<div class="px-8"></div>
								<div class="fs__14px w124 proxima__nova__light">{{ inventary.statusDetails.lead.email }}</div>

							</div>

							<div class="py-12" layout="row" layout-align="start center">

								<div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Teléfono</div>
								<div class="px-8"></div>
								<div class="fs__14px w124 proxima__nova__light">{{ inventary.statusDetails.lead.phone }}</div>

							</div>

							<div class="py-12" layout="row" layout-align="start center">

								<div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Medio</div>
								<div class="px-8"></div>
								<div class="fs__14px w124 proxima__nova__light">{{ inventary.statusDetails.lead.medium }}</div>

							</div>

							<div class="py-12" layout="row" layout-align="start center">

								<div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Dirección</div>
								<div class="px-8"></div>
								<div class="fs__14px w124 proxima__nova__light">{{ inventary.statusDetails.lead.address }}</div>

							</div>

							<div class="py-12" layout="row" layout-align="start center">

								<div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Creación</div>
								<div class="px-8"></div>
								<div class="fs__14px w124 proxima__nova__light">{{ inventary.statusDetails.lead.create_at }}</div>

							</div>

						</div>

						<div class="py-40" layout="column">
							
							<div class="pb-12 w100">
								<span class="fs__16px proxima__nova__light dark__text">Asesor</span>
							</div>

							<md-divider></md-divider>

							<div class="py-12" layout="row" layout-align="start center">

								<div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Nombre</div>
								<div class="px-8"></div>
								<div class="fs__14px w124 proxima__nova__light">{{ inventary.statusDetails.user.name + inventary.statusDetails.user.last_name }}</div>

							</div>

							<div class="py-12" layout="row" layout-align="start center">

								<div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Sexo</div>
								<div class="px-8"></div>
								<div class="fs__14px w124 proxima__nova__light">{{ inventary.statusDetails.user.gender }}</div>

							</div>

							<div class="py-12" layout="row" layout-align="start center">

								<div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Correo</div>
								<div class="px-8"></div>
								<div class="fs__14px w124 proxima__nova__light">{{ inventary.statusDetails.user.email }}</div>

							</div>

							<div class="py-12" layout="row" layout-align="start center">

								<div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Teléfono</div>
								<div class="px-8"></div>
								<div class="fs__14px w124 proxima__nova__light">{{ inventary.statusDetails.user.phone }}</div>

							</div>

							<div class="py-12" layout="row" layout-align="start center">

								<div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Dirección</div>
								<div class="px-8"></div>
								<div class="fs__14px w124 proxima__nova__light">{{ inventary.statusDetails.user.address }}</div>

							</div>

							<div class="py-12" layout="row" layout-align="start center">

								<div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Creación</div>
								<div class="px-8"></div>
								<div class="fs__14px w124 proxima__nova__light">{{ inventary.statusDetails.user.create_at }}</div>

							</div>

						</div>

					</div>

				</div>
			</div>

		</div>

	</div>

	<div class="modal-dialog white__bg" ng-class="inventary.users.config.display.window">

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
				<md-button ng-click="inventary.users.hide()" class="md-icon-button" aria-label="Cerrar">
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

							<md-select name="groupProfiles" ng-model="inventary.users.config.filters.profiles.selected" ng-change="inventary.users.resetAndUpdate()">
								<md-option ng-repeat="profileKey in inventary.users.config.filters.profiles.members" ng-value="$index">
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

									<md-select name="groupPages" ng-model="inventary.users.config.pagination.current" ng-change="inventary.users.update()">
										<md-option ng-repeat="page in inventary.users.config.pagination.data.book" ng-value="page">
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

									<md-select name="groupLimit" ng-model="inventary.users.config.pagination.limit.selected" ng-change="inventary.users.resetAndUpdate()">
										<md-option ng-repeat="limit in inventary.users.config.pagination.limit.members" ng-value="limit">
											<span class="dark__text fs__14px proxima-soft-regular">{{ limit }}</span>
										</md-option>
									</md-select>

								</md-input-container>

							</div>
							
							<div class="dark__text fs__12px proxima-soft-light ml-24" layout="row" layout-align="end center" flex="50">
								{{ inventary.users.config.pagination.data.start }} - {{ inventary.users.config.pagination.data.end }} de {{ inventary.users.config.pagination.data.num_of_rows }}
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

									<div layout="row" flex="5" layout-align="left center">{{ inventary.users.config.pagination.data.start + $index }}</div>
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

                                <md-select name="leadsPages" ng-model="inventary.leads.config.pagination.current" ng-change="inventary.lead.update()">
                                    <md-option ng-repeat="page in inventary.leads.config.pagination.data.book" ng-value="page">
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

                                <md-select name="leadsLimit" ng-model="inventary.leads.config.pagination.limit.selected" ng-change="inventary.lead.resetAndUpdate()" style="z-index:1009;">
                                    <md-option ng-repeat="limit in inventary.leads.config.pagination.limit.members" ng-value="limit">
                                        <span class="dark__text fs__14px proxima-soft-regular">{{ limit }}</span>
                                    </md-option>
								</md-select>

                            </md-input-container>

                        </div>

                        <div class="dark__text fs__12px proxima-soft-light ml-24" layout="row" layout-align="end center" flex="50">
                            {{ inventary.leads.config.pagination.data.start }} - {{ inventary.leads.config.pagination.data.end }} de {{ inventary.leads.config.pagination.data.num_of_rows }}
                        </div>

                    </div>

                    <div class="overflow-x-s overflow-y-s">
                        <div class="result-table-container">

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

                                    <div layout="row" flex="5" layout-align="left center" class="overflow-h">{{ inventary.leads.config.pagination.data.start+$index }}</div>
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

												<md-menu-item>
													<md-button ng-click="inventary.openUserLead(lead.id)">
														Propietario
													</md-button>
												</md-menu-item>

												<div ng-if="inventary.users.config.event === 'setLeadProperty'">

													<md-menu-item>
														<md-button ng-click="inventary.setLeadProperty(lead.id, 6)">
															Estratégico
														</md-button>
													</md-menu-item>

													<md-menu-item>
														<md-button ng-click="inventary.setLeadProperty(lead.id, 2)">
															En espera
														</md-button>
													</md-menu-item>

													<md-menu-item>
														<md-button ng-click="inventary.setLeadProperty(lead.id, 3)">
															Apartado
														</md-button>
													</md-menu-item>

													<md-menu-item>
														<md-button ng-click="inventary.setLeadProperty(lead.id, 4)">
															Enganchado
														</md-button>
													</md-menu-item>

													<md-menu-item>
														<md-button ng-click="inventary.setLeadProperty(lead.id, 5)">
															Vendido
														</md-button>
													</md-menu-item>

												</div>

												<div ng-if="inventary.users.config.event === 'updateLeadProperty'">

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

	<div class="modal-dialog white__bg" ng-class="inventary.search.display.users">

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

									<md-select name="groupLimit" ng-model="inventary.search.pagination.limit.selected" ng-change="inventary.search.updateAndReset()">
										<md-option ng-repeat="limit in inventary.search.pagination.limit.members" ng-value="limit">
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

	</div>

	<div class="modal-dialog white__bg" ng-class="inventary.search.display.leads">

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

									<md-select name="groupLimit" ng-model="inventary.search.pagination.limit.selected" ng-change="inventary.search.updateAndReset()">
										<md-option ng-repeat="limit in inventary.search.pagination.limit.members" ng-value="limit">
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

							<div class="border-box--blue-b px-24" ng-repeat="user in inventary.search.result">

								<div layout="row" class="dark__text fs__14px proxima-soft-regular">

									<div layout="row" flex="5" layout-align="left center">{{ inventary.search.pagination.data.start + $index }}</div>
									<div layout="row" flex="25" layout-align="left center">{{ user.name.first + ' ' + user.name.last }}</div>
									<div layout="row" flex="25" layout-align="left center">{{ user.email.username + '@' + user.email.domain.name }}</div>
									<div layout="row" flex="15" layout-align="left center">{{ user.phone.number }}</div>
									<div layout="row" flex="10" layout-align="left center">{{ user.medium }}</div>
									<div layout="row" flex="15" layout-align="left center">{{ user.create_at }}</div>

									<div layout="row" flex="5" layout-align="center center">

										<md-menu md-offset="-112 0" ng-controller="ContactMenuCtrl as contactCtrl">

											<div class="pointer" ng-click="contactCtrl.openMenu($mdMenu, $event)">
												<i class="material-icons black-text">more_vert</i>
											</div>

											<md-menu-content>

												<md-menu-item>
													<md-button ng-click="inventary.openUserLead(user.id)">
														Propietario
													</md-button>
												</md-menu-item>

												<div ng-if="inventary.users.config.event === 'setLeadProperty'">

													<md-menu-item>
														<md-button ng-click="inventary.setLeadProperty(user.id, 6)">
															Estratégico
														</md-button>
													</md-menu-item>

													<md-menu-item>
														<md-button ng-click="inventary.setLeadProperty(user.id, 2)">
															En espera
														</md-button>
													</md-menu-item>

													<md-menu-item>
														<md-button ng-click="inventary.setLeadProperty(user.id, 3)">
															Apartado
														</md-button>
													</md-menu-item>

													<md-menu-item>
														<md-button ng-click="inventary.setLeadProperty(user.id, 4)">
															Enganchado
														</md-button>
													</md-menu-item>

													<md-menu-item>
														<md-button ng-click="inventary.setLeadProperty(user.id, 5)">
															Vendido
														</md-button>
													</md-menu-item>

												</div>

												<div ng-if="inventary.users.config.event === 'updateLeadProperty'">

													<md-menu-item>
														<md-button ng-click="inventary.updateLeadProperty(user.id)">
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

	<div class="modal-dialog white__bg" ng-class="inventary.leads.config.display.window">

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

									<md-select name="groupPages" ng-model="inventary.leads.config.pagination.current" ng-change="inventary.leads.config.leads.update()">
										<md-option ng-repeat="page in inventary.leads.config.pagination.data.book" ng-value="page">
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

									<md-select name="groupLimit" ng-model="inventary.leads.config.pagination.limit.selected" ng-change="inventary.leads.config.leads.updateAndReset()">
										<md-option ng-repeat="limit in inventary.leads.config.pagination.limit.members" ng-value="limit">
											<span class="dark__text fs__14px proxima-soft-regular">{{ limit }}</span>
										</md-option>
									</md-select>

								</md-input-container>

							</div>

							<div class="dark__text fs__12px proxima-soft-light ml-24" layout="row" layout-align="end center" flex="50">
								{{ inventary.leads.config.pagination.data.start }} - {{ inventary.leads.config.pagination.data.end }} de {{ inventary.leads.config.pagination.data.num_of_rows }}
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

									<div layout="row" flex="5" layout-align="left center" class="overflow-h">{{ inventary.leads.config.pagination.data.start+$index }}</div>
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

												<div ng-if="inventary.users.config.event === 'setLeadProperty'">

													<md-menu-item>
														<md-button ng-click="inventary.setLeadProperty(lead.id, 6)">
															Estratégico
														</md-button>
													</md-menu-item>

													<md-menu-item>
														<md-button ng-click="inventary.setLeadProperty(lead.id, 2)">
															En espera
														</md-button>
													</md-menu-item>

													<md-menu-item>
														<md-button ng-click="inventary.setLeadProperty(lead.id, 3)">
															Apartado
														</md-button>
													</md-menu-item>

													<md-menu-item>
														<md-button ng-click="inventary.setLeadProperty(lead.id, 4)">
															Enganchado
														</md-button>
													</md-menu-item>

													<md-menu-item>
														<md-button ng-click="inventary.setLeadProperty(lead.id, 5)">
															Vendido
														</md-button>
													</md-menu-item>

												</div>

												<div ng-if="inventary.users.config.event === 'updateLeadProperty'">

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

	<div class="modal-dialog white__bg" ng-class="inventary.userByLeadPanelDisplay">

		<div class="pl-16 dark__bg" layout="row">

			<div layout="row" layout-align="start center" flex="80">
				<span class="light-txt">Propietario</span>
			</div>

			<div layout="row" layout-align="end center" flex="20">
				<md-button ng-click="inventary.closeUserLead()" class="md-icon-button" aria-label="Cerrar">
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
								<span class="fs__16px proxima__nova__regular darkgray__text">Cliente</span>
							</div>

							<div class="py-12" layout="row" layout-align="start center">

								<div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Nombre</div>
								<div class="px-8"></div>
								<div class="fs__14px w124 proxima__nova__light">{{ inventary.userLead.lead.name + ' ' + inventary.userLead.lead.last_name }}</div>

							</div>

							<div class="py-12" layout="row" layout-align="start center">

								<div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Sexo</div>
								<div class="px-8"></div>
								<div class="fs__14px w124 proxima__nova__light">{{ inventary.userLead.lead.gender }}</div>

							</div>

							<div class="py-12" layout="row" layout-align="start center">

								<div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Correo</div>
								<div class="px-8"></div>
								<div class="fs__14px w124 proxima__nova__light">{{ inventary.userLead.lead.email }}</div>

							</div>

							<div class="py-12" layout="row" layout-align="start center">

								<div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Teléfono</div>
								<div class="px-8"></div>
								<div class="fs__14px w124 proxima__nova__light">{{ inventary.userLead.lead.phone }}</div>

							</div>

							<div class="py-12" layout="row" layout-align="start center">

								<div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Medio</div>
								<div class="px-8"></div>
								<div class="fs__14px w124 proxima__nova__light">{{ inventary.userLead.lead.medium }}</div>

							</div>

							<div class="py-12" layout="row" layout-align="start center">

								<div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Dirección</div>
								<div class="px-8"></div>
								<div class="fs__14px w124 proxima__nova__light">{{ inventary.userLead.lead.address }}</div>

							</div>

							<div class="py-12" layout="row" layout-align="start center">

								<div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Creación</div>
								<div class="px-8"></div>
								<div class="fs__14px w124 proxima__nova__light">{{ inventary.userLead.lead.create_at }}</div>

							</div>

						</div>

						<div class="py-40" layout="column">
							
							<div class="pb-12 w100">
								<span class="fs__16px proxima__nova__regular darkgray__text">Asesor</span>
							</div>

							<div class="py-12" layout="row" layout-align="start center">

								<div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Nombre</div>
								<div class="px-8"></div>
								<div class="fs__14px w124 proxima__nova__light">{{ inventary.userLead.user.name + inventary.userLead.user.last_name }}</div>

							</div>

							<div class="py-12" layout="row" layout-align="start center">

								<div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Sexo</div>
								<div class="px-8"></div>
								<div class="fs__14px w124 proxima__nova__light">{{ inventary.userLead.user.gender }}</div>

							</div>

							<div class="py-12" layout="row" layout-align="start center">

								<div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Correo</div>
								<div class="px-8"></div>
								<div class="fs__14px w124 proxima__nova__light">{{ inventary.userLead.user.email }}</div>

							</div>

							<div class="py-12" layout="row" layout-align="start center">

								<div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Teléfono</div>
								<div class="px-8"></div>
								<div class="fs__14px w124 proxima__nova__light">{{ inventary.userLead.user.phone }}</div>

							</div>

							<div class="py-12" layout="row" layout-align="start center">

								<div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Dirección</div>
								<div class="px-8"></div>
								<div class="fs__14px w124 proxima__nova__light">{{ inventary.userLead.user.address }}</div>

							</div>

							<div class="py-12" layout="row" layout-align="start center">

								<div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Creación</div>
								<div class="px-8"></div>
								<div class="fs__14px w124 proxima__nova__light">{{ inventary.userLead.user.create_at }}</div>

							</div>

						</div>

					</div>

				</div>
			</div>

		</div>

	</div>

	<div class="modal-dialog white__bg" ng-class="inventary.table.importDisplay">

		<div class="dark__bg pl-20 pr-10 py-10 overflow-h" layout="row" style="height:40px;">

			<div layout="row" layout-align="start center" flex="70">
				<span class="light-txt">Vista previa</span>
			</div>

			<div layout="row" layout-align="end center" flex="30">
				<md-button ng-click="inventary.table.hideImportTable()" class="md-icon-button" aria-label="Cerrar">
					<md-icon style="color: white;" md-svg-src="media/assets/img/icons/app/close.svg"></md-icon>
				</md-button>
			</div>

		</div>

		<div class="gray__bg overflow-h" layout="row" layout-align="end center">
			<span class="pointer fs__12px red_cc-txt proxima__nova__regular px-16 py-16" ng-click="inventary.exportToPDF()">Exportar a PDF</span>
			<span class="pointer fs__12px proxima__nova__regular green__text px-16 py-16" ng-click="inventary.exportToExcel()">Exportar a Excel</span>
		</div>

		<div class="overflow-y-s h100-40">

			<table id="inventary" style="width: {{ inventary.table.width }}px;">

				<tbody>

					<tr style="background-color: #24292e;">
						<th class="white__text" ng-repeat="col in inventary.table.columns" ng-if="$index > 0 && col.display != 'hide'" style="width: {{ col.width }}px;">{{ col.text }}</th>
					</tr>

					<tr class="trow" ng-repeat="property in inventary.inmovables">

						<td ng-if="inventary.table.columns[1].display != 'hide'" style="width: {{ inventary.table.columns[1].width }}px;">{{ property.number }}</td>
						<td ng-if="inventary.table.columns[2].display != 'hide'" style="width: {{ inventary.table.columns[2].width }}px;">{{ property.status }}</td>
						<td ng-if="inventary.table.columns[3].display != 'hide'" style="width: {{ inventary.table.columns[3].width }}px;">{{ property.area }} M2</td>
						<td ng-if="inventary.table.columns[4].display != 'hide'" style="width: {{ inventary.table.columns[4].width }}px;">{{ property.type.class }}</td>

						<td ng-if="inventary.table.columns[5].display != 'hide'" style="width: {{ inventary.table.columns[5].width }}px;">${{ property.type.cost.m2.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</td>
						<td ng-if="inventary.table.columns[6].display != 'hide'" style="width: {{ inventary.table.columns[6].width }}px;">${{ (property.type.cost.property*1).toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</td>

						<td ng-if="inventary.table.columns[7].display != 'hide'" style="width: {{ inventary.table.columns[7].width }}px;">{{ (property.promos.hook.discount * 100).toFixed(2) }}%</td>
						<td ng-if="inventary.table.columns[8].display != 'hide'" style="width: {{ inventary.table.columns[8].width }}px;">${{ property.promos.hook.base.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</td>
						<td ng-if="inventary.table.columns[9].display != 'hide'" style="width: {{ inventary.table.columns[9].width }}px;">${{ property.financing.total.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</td>

						<td ng-if="inventary.table.columns[10].display != 'hide'" style="width: {{ inventary.table.columns[10].width }}px;"></td>

						<td ng-if="inventary.table.columns[11].display != 'hide'" style="width: {{ inventary.table.columns[11].width }}px;">${{ property.promos.increase.total_increased.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</td>
						<td ng-if="inventary.table.columns[12].display != 'hide'" style="width: {{ inventary.table.columns[12].width }}px;">${{ property.promos.increase.property_cost.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</td>
						<td ng-if="inventary.table.columns[13].display != 'hide'" style="width: {{ inventary.table.columns[13].width }}px;">${{ property.promos.hook.increased.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</td>
						<td ng-if="inventary.table.columns[14].display != 'hide'" style="width: {{ inventary.table.columns[14].width }}px;">${{ property.financing.increased.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</td>

						<td ng-if="inventary.table.columns[15].display != 'hide'" style="width: {{ inventary.table.columns[15].width }}px;"></td>

						<td ng-if="inventary.table.columns[16].display != 'hide'" style="width: {{ inventary.table.columns[16].width }}px;">${{ property.promos.discount.total_discounted.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</td>
						<td ng-if="inventary.table.columns[17].display != 'hide'" style="width: {{ inventary.table.columns[17].width }}px;">${{ property.promos.discount.property_cost.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</td>
						<td ng-if="inventary.table.columns[18].display != 'hide'" style="width: {{ inventary.table.columns[18].width }}px;">${{ property.promos.hook.decreased.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</td>
						<td ng-if="inventary.table.columns[19].display != 'hide'" style="width: {{ inventary.table.columns[19].width }}px;">${{ property.financing.decreased.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</td>

						<td ng-if="inventary.table.columns[20].display != 'hide'" style="width: {{ inventary.table.columns[20].width }}px;">${{ property.type.cost.final.m2.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</td>
						<td ng-if="inventary.table.columns[21].display != 'hide'" style="width: {{ inventary.table.columns[21].width }}px;">${{ (property.type.cost.final.property*1).toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</td>
						<td ng-if="inventary.table.columns[22].display != 'hide'" style="width: {{ inventary.table.columns[22].width }}px;">${{ property.promos.hook.total.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</td>
						<td ng-if="inventary.table.columns[23].display != 'hide'" style="width: {{ inventary.table.columns[23].width }}px;">${{ property.financing.final.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</td>

						<td ng-if="inventary.table.columns[24].display != 'hide'" style="width: {{ inventary.table.columns[24].width }}px;">{{ (property.promos.hook_discount.discount * 100).toFixed(2) }}%</td>
						<td ng-if="inventary.table.columns[25].display != 'hide'" style="width: {{ inventary.table.columns[25].width }}px;">${{ property.promos.hook.discounted.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</td>
						<td ng-if="inventary.table.columns[26].display != 'hide'" style="width: {{ inventary.table.columns[26].width }}px;">${{ property.promos.hook.final.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</td>

						<td ng-if="inventary.table.columns[27].display != 'hide'" style="width: {{ inventary.table.columns[27].width }}px;">${{ property.import.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</td>

						<td ng-if="inventary.table.columns[28].display != 'hide'" style="width: {{ inventary.table.columns[28].width }}px;">{{ property.init_at }}</td>
						<td ng-if="inventary.table.columns[29].display != 'hide'" style="width: {{ inventary.table.columns[29].width }}px;">{{ property.set_aside_at }}</td>
						<td ng-if="inventary.table.columns[30].display != 'hide'" style="width: {{ inventary.table.columns[30].width }}px;">{{ property.hooked_at }}</td>
						<td ng-if="inventary.table.columns[31].display != 'hide'" style="width: {{ inventary.table.columns[31].width }}px;">{{ property.sold_at }}</td>

					</tr>

				</tbody>

			</table>

		</div>

	</div>

	<div class="modal-dialog white__bg" ng-if="inventary.moreDetails.display">

		<div class="pl-16 dark__bg" layout="row">

			<div layout="row" layout-align="start center" flex="80">
				<span class="light-txt">Más detalles</span>
			</div>

			<div layout="row" layout-align="end center" flex="20">
				<md-button ng-click="inventary.moreDetails.hide()" class="md-icon-button" aria-label="Cerrar">
					<md-icon style="color: white;" md-svg-src="media/assets/img/icons/app/close.svg"></md-icon>
				</md-button>
			</div>

		</div>

		<div class="overflow-y-s h100-55" layout-padding>

			<div>
				<div class="border-box--blue border-r4 overflow-y-h">

					<div class="bluegray-light2-bg border-box--blue-b px-20 py-10">
						<span class="fs__16px gray-txt proxima__nova__regular">
							Sumatorias
						</span>
					</div>

					<div class="px-40" layout="column" layout-gt-sm="row" layout-align="space-around start" flex="100">

						<div class="py-40" layout="column">

							<div class="pb-12 w100">
								<span class="fs__14px proxima__nova__light dark__text">Base</span>
							</div>

							<md-divider></md-divider>

							<div class="py-12" layout="row" layout-align="start center">

								<div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Propiedad</div>
								<div class="px-8"></div>
								<div class="fs__14px w150 proxima__nova__light">${{ inventary.moreDetails.sums.cost.property.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</div>

							</div>

							<div class="py-12" layout="row" layout-align="start center">

								<div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Enganche</div>
								<div class="px-8"></div>
								<div class="fs__14px w150 proxima__nova__light">${{ inventary.moreDetails.sums.hook.total.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</div>

							</div>

							<div class="py-12" layout="row" layout-align="start center">

								<div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Financiamiento</div>
								<div class="px-8"></div>
								<div class="fs__14px w150 proxima__nova__light">${{ inventary.moreDetails.sums.financing.total.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</div>

							</div>

							<div class="py-12" layout="row" layout-align="start center">

								<div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Total</div>
								<div class="px-8"></div>
								<div class="fs__14px w150 proxima__nova__light">{{ inventary.moreDetails.counters.inmovables }}</div>

							</div>

						</div>

						<div class="py-40" layout="column">

							<div class="pb-12 w100">
								<span class="fs__14px proxima__nova__light dark__text">Incremento</span>
							</div>

							<md-divider></md-divider>

							<div class="py-12" layout="row" layout-align="start center">

								<div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Propiedad</div>
								<div class="px-8"></div>
								<div class="fs__14px w150 proxima__nova__light">${{ inventary.moreDetails.sums.cost.increase.property.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</div>

							</div>

							<div class="py-12" layout="row" layout-align="start center">

								<div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Enganche</div>
								<div class="px-8"></div>
								<div class="fs__14px w150 proxima__nova__light">${{ inventary.moreDetails.sums.hook.increase.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</div>

							</div>

							<div class="py-12" layout="row" layout-align="start center">

								<div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Financiamiento</div>
								<div class="px-8"></div>
								<div class="fs__14px w150 proxima__nova__light">${{ inventary.moreDetails.sums.financing.increase.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</div>

							</div>

							<div class="py-12" layout="row" layout-align="start center">

								<div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Total</div>
								<div class="px-8"></div>
								<div class="fs__14px w150 proxima__nova__light">{{ inventary.moreDetails.counters.increase }}</div>

							</div>

						</div>

					</div>

					<div class="px-40" layout="column" layout-gt-sm="row" layout-align="space-around start" flex="100">

						<div class="py-40" layout="column">

							<div class="pb-12 w100">
								<span class="fs__14px proxima__nova__light dark__text">Descuento</span>
							</div>

							<md-divider></md-divider>

							<div class="py-12" layout="row" layout-align="start center">

								<div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Propiedad</div>
								<div class="px-8"></div>
								<div class="fs__14px w150 proxima__nova__light">${{ inventary.moreDetails.sums.cost.discount.property.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</div>

							</div>

							<div class="py-12" layout="row" layout-align="start center">

								<div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Enganche</div>
								<div class="px-8"></div>
								<div class="fs__14px w150 proxima__nova__light">${{ inventary.moreDetails.sums.hook.discount.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</div>

							</div>

							<div class="py-12" layout="row" layout-align="start center">

								<div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Financiamiento</div>
								<div class="px-8"></div>
								<div class="fs__14px w150 proxima__nova__light">${{ inventary.moreDetails.sums.financing.discount.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</div>

							</div>

							<div class="py-12" layout="row" layout-align="start center">

								<div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Total</div>
								<div class="px-8"></div>
								<div class="fs__14px w150 proxima__nova__light">{{ inventary.moreDetails.counters.discount }}</div>

							</div>

							<md-divider></md-divider>

							<div class="fs__14px darkgray__text proxima__nova__light p-6">Sobre enganche</div>

							<md-divider></md-divider>

							<div class="py-12" layout="row" layout-align="start center">

								<div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Descuento a enganche</div>
								<div class="px-8"></div>
								<div class="fs__14px w150 proxima__nova__light">${{ inventary.moreDetails.sums.hook.final.discount.amount.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</div>

							</div>

							<div class="py-12" layout="row" layout-align="start center">

								<div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Enganche con descuento</div>
								<div class="px-8"></div>
								<div class="fs__14px w150 proxima__nova__light">${{ inventary.moreDetails.sums.hook.final.discount.total.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</div>

							</div>

							<div class="py-12" layout="row" layout-align="start center">

								<div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Total</div>
								<div class="px-8"></div>
								<div class="fs__14px w150 proxima__nova__light">{{ inventary.moreDetails.counters.hookDiscount }}</div>

							</div>

						</div>

						<div class="py-40" layout="column">

							<div class="pb-12 w100">
								<span class="fs__14px proxima__nova__light dark__text">Final</span>
							</div>

							<md-divider></md-divider>

							<div class="py-12" layout="row" layout-align="start center">

								<div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Propiedad</div>
								<div class="px-8"></div>
								<div class="fs__14px w150 proxima__nova__light">${{ inventary.moreDetails.sums.cost.final.property.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</div>

							</div>

							<div class="py-12" layout="row" layout-align="start center">

								<div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Enganche</div>
								<div class="px-8"></div>
								<div class="fs__14px w150 proxima__nova__light">${{ inventary.moreDetails.sums.hook.final.total.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</div>

							</div>

							<div class="py-12" layout="row" layout-align="start center">

								<div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Financiamiento</div>
								<div class="px-8"></div>
								<div class="fs__14px w150 proxima__nova__light">${{ inventary.moreDetails.sums.financing.final.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</div>

							</div>

							<div class="py-12" layout="row" layout-align="start center">

								<div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Importe</div>
								<div class="px-8"></div>
								<div class="fs__14px w150 proxima__nova__light">${{ inventary.moreDetails.sums.amount.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</div>

							</div>

						</div>

					</div>

				</div>
			</div>

			<div>
				<div class="border-box--blue border-r4 overflow-y-h">

					<div class="bluegray-light2-bg border-box--blue-b px-20 py-10">
						<span class="fs__16px gray-txt proxima__nova__regular">
							Promedios
						</span>
					</div>

					<div class="px-40" layout="column" layout-gt-sm="row" layout-align="space-around start" flex="100">

						<div class="py-40" layout="column">

							<div class="pb-12 w100">
								<span class="fs__14px proxima__nova__light dark__text">Base</span>
							</div>

							<md-divider></md-divider>

							<div class="py-12" layout="row" layout-align="start center">

								<div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Superficie</div>
								<div class="px-8"></div>
								<div class="fs__14px w150 proxima__nova__light">{{ inventary.moreDetails.averages.area.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} M&sup2;</div>

							</div>

							<div class="py-12" layout="row" layout-align="start center">

								<div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Precio m&sup2;</div>
								<div class="px-8"></div>
								<div class="fs__14px w150 proxima__nova__light">${{ inventary.moreDetails.averages.cost.m2.total.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</div>

							</div>

						</div>

						<div class="py-40" layout="column">

							<div class="pb-12 w100">
								<span class="fs__14px proxima__nova__light dark__text">Aumento</span>
							</div>

							<md-divider></md-divider>

							<div class="py-12" layout="row" layout-align="start center">

								<div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Total aumentado</div>
								<div class="px-8"></div>
								<div class="fs__14px w150 proxima__nova__light">${{ inventary.moreDetails.averages.cost.increase.amount.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</div>

							</div>

							<div class="py-12" layout="row" layout-align="start center">

								<div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Precio m&sup2;</div>
								<div class="px-8"></div>
								<div class="fs__14px w150 proxima__nova__light">${{ inventary.moreDetails.averages.cost.increase.m2.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</div>

							</div>

						</div>

					</div>

					<div class="px-40" layout="column" layout-gt-sm="row" layout-align="space-around start" flex="100">

						<div class="py-40" layout="column">

							<div class="pb-12 w100">
								<span class="fs__14px proxima__nova__light dark__text">Descuento</span>
							</div>

							<md-divider></md-divider>

							<div class="py-12" layout="row" layout-align="start center">

								<div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Total aumentado</div>
								<div class="px-8"></div>
								<div class="fs__14px w150 proxima__nova__light">${{ inventary.moreDetails.averages.cost.discount.amount.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</div>

							</div>

							<div class="py-12" layout="row" layout-align="start center">

								<div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Precio m&sup2;</div>
								<div class="px-8"></div>
								<div class="fs__14px w150 proxima__nova__light">${{ inventary.moreDetails.averages.cost.discount.m2.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</div>

							</div>

						</div>

						<div class="py-40" layout="column">

							<div class="pb-12 w100">
								<span class="fs__14px proxima__nova__light dark__text">Final</span>
							</div>

							<md-divider></md-divider>

							<div class="py-12" layout="row" layout-align="start center">

								<div class="fs__14px darkgray__text right__text proxima__nova__light w100px">Precio m&sup2;</div>
								<div class="px-8"></div>
								<div class="fs__14px w150 proxima__nova__light">${{ inventary.moreDetails.averages.cost.m2.final.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2}) }} MXN</div>

							</div>

						</div>

					</div>

				</div>
			</div>

		</div>

	</div>

</body>

</html>
