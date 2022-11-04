/********************************************************************************
 #Main
 ********************************************************************************/

var app = angular.module('app', ['ngRoute', 'ngMaterial', 'ngMessages']);

/********************************************************************************
 #Constants
 ********************************************************************************/

app.constant("moment", moment);

/********************************************************************************
 #Run
 ********************************************************************************/

app.run(function($rootScope) {

	$rootScope.is_scrollin = '';

	$rootScope.rootUsers = {
		update: {
			options: {
				modal_display: 'hide'
			},
			data: {
				idUser: 0,
				username: '',
				password: '',
				name: '',
				last_name: '',
				idGender: 0,
				idProfile: 0,
				idPhone: '',
				phone: '',
				idAddress: '',
				address: ''
			}
		},
		insert: {
			options: {
				modal_display: 'hide'
			}
		}
	};

	$rootScope.rootInmovables = {
		options: {
			modal_display: 'hide'
		},
		edit: {
			models: {
				idPromoIncrease: 0,
				idPromoDiscount: 0,
				idPromoHook: 0,
				idPromoHookDiscount: 0
			},
			view: 'hide'
		},
		selected: {
			id: 0,
			idClass: 0,
			number: '',
			area: 0,
			referece: '',
			idCondominium: 0,
			condominium: '',
			idType: 0,
			type: '',
			idStatus: 0,
			cost_m2_increase: null,
			cost_m2_discount: null,
			hook: null,
			hook_discount: null,
			hook_custom: null
		}
	}

	$rootScope.selectedLead = {id: 0};
});

/********************************************************************************
 #Config
 ********************************************************************************/

app.config(function($routeProvider) {

	$routeProvider

	/******************** 
	 * General 
	********************/

	/********** Home **********/

	.when('/', {
		templateUrl: 'application/views/home/home_view.php'
	})

	/********** Application **********/

	.when('/login', {
		templateUrl: 'application/views/auth/login_view.php',
		controller: 'LoginController',
		controllerAs: 'login'
	})

	.when('/dashboard', {
		templateUrl: 'application/views/app/dashboard/dashboard_view.php',
		controller: 'DashboardCtrl',
		controllerAs: 'dashboard'
	})

    /***** CCIMAID *****/
	.when('/ccimaid', {
		templateUrl: 'application/views/app/dashboard/ccimaid.php',
		controller: 'DashboardCtrl',
		controllerAs: 'dashboard'
	})
	.when('/ccimaid_ciamtario', {
		templateUrl: 'application/views/app/dashboard/ccimaid/cimatario.php',
		controller: 'DashboardCtrl',
		controllerAs: 'dashboard'
	})
	.when('/ccimaid_sanluis', {
		templateUrl: 'application/views/app/dashboard/ccimaid/sanluis.php',
		controller: 'DashboardCtrl',
		controllerAs: 'dashboard'
	})
	.when('/ccimaid_aeropuerto', {
		templateUrl: 'application/views/app/dashboard/ccimaid/aeropuerto.php',
		controller: 'DashboardCtrl',
		controllerAs: 'dashboard'
	})
	.when('/ccimaid_beta', {
		templateUrl: 'application/views/app/dashboard/ccimaid/beta.php',
		controller: 'DashboardCtrl',
		controllerAs: 'dashboard'
	})
	.when('/ccimaid_gammaii', {
		templateUrl: 'application/views/app/dashboard/ccimaid/gammaii.php',
		controller: 'DashboardCtrl',
		controllerAs: 'dashboard'
	})
	.when('/ccimaid_pedroescobedo', {
		templateUrl: 'application/views/app/dashboard/ccimaid/pedroescobedo.php',
		controller: 'DashboardCtrl',
		controllerAs: 'dashboard'
	})
	.when('/ccimaid_serverslp', {
		templateUrl: 'application/views/app/dashboard/ccimaid/server.php',
		controller: 'DashboardCtrl',
		controllerAs: 'dashboard'
	})
	.when('/ccimaid_santarosa', {
		templateUrl: 'application/views/app/dashboard/ccimaid/santarosa.php',
		controller: 'DashboardCtrl',
		controllerAs: 'dashboard'
	})
	.when('/politicas_procedimientos', {
		templateUrl: 'application/views/app/dashboard/ccimaid/procedimientos.php',
		controller: 'DashboardCtrl',
		controllerAs: 'dashboard'
	})
	


	/***** Users *****/

	.when('/users', {
		templateUrl: 'application/views/app/dashboard/users_view.php',
		controller: 'UsersCtrl',
		controllerAs: 'users'
	})
	.when('/Agregar_Usuario', {
		templateUrl: 'application/views/app/dashboard/insert_user_view.php',
		controller: 'InsertUserCtrl',
		controllerAs: 'user'
	})
	.when('/Cambiar_Contraseña', {
		templateUrl: 'application/views/app/dashboard/change_password_view.php',
		controller: 'ChangePasswordCtrl',
		controllerAs: 'dashboard'
	})

    
	
	/***** Developments *****/

	.when('/inventario', {
		templateUrl: 'application/views/app/developments/devs_view.php',
		controller: 'InventaryCtrl',
		controllerAs: 'inventary'
	})

	/***** Developments *****/

	.when('/Dashboard-Desarrollos', {
		templateUrl: 'application/views/app/dashboard/dashboard_developments_view.php'
	})

	/***** Leads *****/

	.when('/agregar_cliente', {
		templateUrl: 'application/views/app/dashboard/insert_lead_view.php',
		controller: 'InsertLeadCtrl',
		controllerAs: 'lead'
	})
	.when('/actualizar_cliente', {
		templateUrl: 'application/views/app/dashboard/update_lead_view.php',
		controller: 'UpdateLeadCtrl',
		controllerAs: 'dashboard'
	})

	/***** quote *****/

	.when('/quote_tool', {
		templateUrl: 'application/views/app/quote/quote_user_view.php',
		controller: 'QuoteToolController',
		controllerAs: 'quote'
	})
	.when('/cotizador', {
		templateUrl: 'application/views/app/quote_view.php'
	})

	/********** Inventary **********/

	.when('/inventary/layouts/:layoutName', {
		templateUrl: 'application/views/app/developments/layouts_view.php',
		controller: 'LayoutCtrl',
		controllerAs: 'inventary'
	})

	/******************** 
	 * Habitta 
	********************/

	/********** Landing **********/
	
	.when('/Habitta_Landing', {
		templateUrl: 'application/views/habitta/landing/index.php',
		controller: 'LandingCtrl',
		controllerAs: 'landing'
	})

	/********** Home **********/

	.when('/habitta', {
		templateUrl: 'application/views/habitta/home/home_view.php'
	})

	/********** Portto Blanco **********/

	.when('/portto_blanco', {
		templateUrl: 'application/views/habitta/portto-blanco/home/home_view.php',
		controller: 'PorttoBlancoMainCtrl',
		controllerAs: 'porttoBlanco'
	})
	.when('/portto_blanco-promociones', {
		templateUrl: 'application/views/habitta/portto-blanco/promo/promo.php'
	})
	.when('/portto_blanco-amenidades', {
		templateUrl: 'application/views/habitta/portto-blanco/amenidades/amenidades.php'
	})
	.when('/portto_blanco-ubicacion', {
		templateUrl: 'application/views/habitta/portto-blanco/location/location.php'
	})
	
	/***** Estepa *****/

	/* Quote */

	.when('/portto_blanco-estepa', {
		templateUrl: 'application/views/app/quote/habitta/portto_blanco/etapas/1/estepa_view.php',
		controller: 'PBEstepaQuoteCtrl',
		controllerAs: 'pbEstepa'
	})

	/* Inventary */
	
	.when('/Portto_Blanco-Estepa-Inventario', {
		templateUrl: 'application/views/app/dashboard/habitta/portto_blanco/estepa/estepa_1/estepa_inventary_view.php',
		controller: 'PBEstepaCtrl',
		controllerAs: 'estepa'
	})

	/* App */

	.when('/Portto_Blanco-Estepa-Solicitar_Cambio_De_Estado', {
		templateUrl: 'application/views/app/dashboard/habitta/portto_blanco/estepa/estepa_1/estepa_request_view.php',
		controller: 'PBEstepaRequestCtrl',
		controllerAs: 'estepa'
	})

	/***** Desierto *****/

	/* Quote */

	.when('/Portto_Blanco-Desierto', {
		templateUrl: 'application/views/habitta/portto-blanco/quote/desierto/desierto_view.php',
	})
	.when('/Portto_Blanco-Desierto_Uno', {
		templateUrl: 'application/views/habitta/portto-blanco/quote/desierto/desierto1_view.php',
		controller: 'PBDesierto1QuoteCtrl',
		controllerAs: 'desierto'
	})
	.when('/Portto_Blanco-Desierto_Dos', {
		templateUrl: 'application/views/habitta/portto-blanco/quote/desierto/desierto2_view.php',
		controller: 'PBDesierto1QuoteCtrl',
		controllerAs: 'desierto'
	})
	.when('/Portto_Blanco-Desierto_Tres', {
		templateUrl: 'application/views/habitta/portto-blanco/quote/desierto/desierto3_view.php',
		controller: 'PBDesierto1QuoteCtrl',
		controllerAs: 'desierto'
	})
	.when('/Portto_Blanco-Desierto_Cuatro', {
		templateUrl: 'application/views/habitta/portto-blanco/quote/desierto/desierto4_view.php',
		controller: 'PBDesierto1QuoteCtrl',
		controllerAs: 'desierto'
	})

	/* App */

	.when('/Portto_Blanco-Desierto-Inventario', {
		templateUrl: 'application/views/habitta/portto-blanco/app/desierto/desierto_inventary_view.php',
	})
	.when('/Portto_Blanco-Desierto_Uno-Inventario', {
		templateUrl: 'application/views/habitta/portto-blanco/app/desierto/desierto1_inventary_view.php',
		controller: 'PBDesiertoCtrl',
		controllerAs: 'desierto'
	})
	.when('/Portto_Blanco-Desierto_Dos-Inventario', {
		templateUrl: 'application/views/habitta/portto-blanco/app/desierto/desierto2_inventary_view.php',
		controller: 'PBDesiertoCtrl',
		controllerAs: 'desierto'
	})
	.when('/Portto_Blanco-Desierto_Tres-Inventario', {
		templateUrl: 'application/views/habitta/portto-blanco/app/desierto/desierto3_inventary_view.php',
		controller: 'PBDesiertoCtrl',
		controllerAs: 'desierto'
	})
	.when('/Portto_Blanco-Desierto_Cuatro-Inventario', {
		templateUrl: 'application/views/habitta/portto-blanco/app/desierto/desierto4_inventary_view.php',
		controller: 'PBDesiertoCtrl',
		controllerAs: 'desierto'
	})

	/***** Taiga *****/

	/* App */

	.when('/Portto_Blanco-Taiga-Inventario', {
		templateUrl: 'application/views/habitta/portto-blanco/app/devs/taiga/taiga_inventary.php',
	})
	.when('/Portto_Blanco-Taiga_1-Inventario', {
		templateUrl: 'application/views/habitta/portto-blanco/app/devs/taiga/condos/taiga_1_inventary.php',
		controller: 'PBTaigaCtrl',
		controllerAs: 'taiga'
	})
	.when('/Portto_Blanco-Taiga_2-Inventario', {
		templateUrl: 'application/views/habitta/portto-blanco/app/devs/taiga/condos/taiga_2_inventary.php',
		controller: 'PBTaigaCtrl',
		controllerAs: 'taiga'
	})
	.when('/Portto_Blanco-Taiga_3-Inventario', {
		templateUrl: 'application/views/habitta/portto-blanco/app/devs/taiga/condos/taiga_3_inventary.php',
		controller: 'PBTaigaCtrl',
		controllerAs: 'taiga'
	})

	/* Quote */

	.when('/Portto_Blanco-Taiga', {
		templateUrl: 'application/views/habitta/portto-blanco/app/devs/taiga/taiga_quote.php',
	})
	.when('/Portto_Blanco-Taiga_1', {
		templateUrl: 'application/views/habitta/portto-blanco/app/devs/taiga/condos/taiga_1_quote.php',
		controller: 'PBTaigaQuoteCtrl',
		controllerAs: 'taiga'
	})
	.when('/Portto_Blanco-Taiga_2', {
		templateUrl: 'application/views/habitta/portto-blanco/app/devs/taiga/condos/taiga_2_quote.php',
		controller: 'PBTaigaQuoteCtrl',
		controllerAs: 'taiga'
	})
	.when('/Portto_Blanco-Taiga_3', {
		templateUrl: 'application/views/habitta/portto-blanco/app/devs/taiga/condos/taiga_3_quote.php',
		controller: 'PBTaigaQuoteCtrl',
		controllerAs: 'taiga'
	})

	/***** Paramo *****/

	/* App */

	.when('/Portto_Blanco-Paramo-Inventario', {
		templateUrl: 'application/views/habitta/portto-blanco/app/devs/paramo/paramo_inventary.php',
	})
	.when('/Portto_Blanco-Paramo_1-Inventario', {
		templateUrl: 'application/views/habitta/portto-blanco/app/devs/paramo/condos/paramo_1_inventary.php',
		controller: 'PBParamoCtrl',
		controllerAs: 'paramo'
	})
	.when('/Portto_Blanco-Paramo_2-Inventario', {
		templateUrl: 'application/views/habitta/portto-blanco/app/devs/paramo/condos/paramo_2_inventary.php',
		controller: 'PBParamoCtrl',
		controllerAs: 'paramo'
	})
	.when('/Portto_Blanco-Paramo_3-Inventario', {
		templateUrl: 'application/views/habitta/portto-blanco/app/devs/paramo/condos/paramo_3_inventary.php',
		controller: 'PBParamoCtrl',
		controllerAs: 'paramo'
	})

	/* Quote */

	.when('/Portto_Blanco-Paramo', {
		templateUrl: 'application/views/habitta/portto-blanco/app/devs/paramo/paramo_quote.php',
	})
	.when('/Portto_Blanco-Paramo_1', {
		templateUrl: 'application/views/habitta/portto-blanco/app/devs/paramo/condos/paramo_1_quote.php',
		controller: 'PBParamoQuoteCtrl',
		controllerAs: 'paramo'
	})
	.when('/Portto_Blanco-Paramo_2', {
		templateUrl: 'application/views/habitta/portto-blanco/app/devs/paramo/condos/paramo_2_quote.php',
		controller: 'PBParamoQuoteCtrl',
		controllerAs: 'paramo'
	})
	.when('/Portto_Blanco-Paramo_3', {
		templateUrl: 'application/views/habitta/portto-blanco/app/devs/paramo/condos/paramo_3_quote.php',
		controller: 'PBParamoQuoteCtrl',
		controllerAs: 'paramo'
	})
	.when('/Portto_Blanco-Paramo_strip_1', {
		templateUrl: 'application/views/habitta/portto-blanco/app/devs/paramo/condos/paramo_strip_1.php',
		controller: 'PBParamoQuoteCtrl',
		controllerAs: 'paramo'
	})
	.when('/Portto_Blanco-Paramo_strip_2', {
		templateUrl: 'application/views/habitta/portto-blanco/app/devs/paramo/condos/paramo_strip_2.php',
		controller: 'PBParamoQuoteCtrl',
		controllerAs: 'paramo'
	})

	/***** Selva *****/

	/* Quote */

	.when('/Portto_Blanco-Selva', {
		templateUrl: 'application/views/habitta/portto-blanco/app/devs/selva/selva_quote.php',
	})
	.when('/Portto_Blanco-Selva_1', {
		templateUrl: 'application/views/habitta/portto-blanco/app/devs/selva/condos/selva_1_quote.php',
		controller: 'PBSelvaQuoteCtrl',
		controllerAs: 'selva'
	})
	.when('/Portto_Blanco-Selva_2', {
		templateUrl: 'application/views/habitta/portto-blanco/app/devs/selva/condos/selva_2_quote.php',
		controller: 'PBSelvaQuoteCtrl',
		controllerAs: 'selva'
	})
	.when('/Portto_Blanco-Selva_3', {
		templateUrl: 'application/views/habitta/portto-blanco/app/devs/selva/condos/selva_3_quote.php',
		controller: 'PBSelvaQuoteCtrl',
		controllerAs: 'selva'
	})
	.when('/Portto_Blanco-Selva_4', {
		templateUrl: 'application/views/habitta/portto-blanco/app/devs/selva/condos/selva_4_quote.php',
		controller: 'PBSelvaQuoteCtrl',
		controllerAs: 'selva'
	})

	/***** Bosque *****/

	/* Quote */

	.when('/Portto_Blanco-Bosque', {
		templateUrl: 'application/views/habitta/portto-blanco/app/devs/bosque/bosque_quote.php',
	})
	.when('/Portto_Blanco-Bosque_1', {
		templateUrl: 'application/views/habitta/portto-blanco/app/devs/bosque/condos/bosque_1_quote.php',
		controller: 'PBBosqueQuoteCtrl',
		controllerAs: 'bosque'
	})
	.when('/Portto_Blanco-Bosque_2', {
		templateUrl: 'application/views/habitta/portto-blanco/app/devs/bosque/condos/bosque_2_quote.php',
		controller: 'PBBosqueQuoteCtrl',
		controllerAs: 'bosque'
	})
	.when('/Portto_Blanco-Bosque_3', {
		templateUrl: 'application/views/habitta/portto-blanco/app/devs/bosque/condos/bosque_3_quote.php',
		controller: 'PBBosqueQuoteCtrl',
		controllerAs: 'bosque'
	})
	.when('/Portto_Blanco-Bosque_4', {
		templateUrl: 'application/views/habitta/portto-blanco/app/devs/bosque/condos/bosque_4_quote.php',
		controller: 'PBBosqueQuoteCtrl',
		controllerAs: 'bosque'
	})
	
		/***** Lago*****/

	/* Quote */
	.when('/Portto_Blanco-Lago_1', {
		templateUrl: 'application/views/habitta/portto-blanco/app/devs/lago/condos/lago_1_quote.php',
		controller: 'PBLagoQuoteCtrl',
		controllerAs: 'lago'
	})

	
	/***** Manglar*****/
	.when('/Portto_Blanco-Manglar', {
		templateUrl: 'application/views/habitta/portto-blanco/app/devs/manglar/manglar_quote.php',
		controller: 'PBManglarQuoteCtrl',
		controllerAs: 'manglar'
	})
	.when('/Portto_Blanco-Manglar_1', {
		templateUrl: 'application/views/habitta/portto-blanco/app/devs/manglar/condos/manglar_1_quote.php',
		controller: 'PBManglarQuoteCtrl',
		controllerAs: 'manglar'
	})
	.when('/Portto_Blanco-Manglar_2', {
		templateUrl: 'application/views/habitta/portto-blanco/app/devs/manglar/condos/manglar_2_quote.php',
		controller: 'PBManglarQuoteCtrl',
		controllerAs: 'manglar'
	})
	.when('/Portto_Blanco-Manglar_3', {
		templateUrl: 'application/views/habitta/portto-blanco/app/devs/manglar/condos/manglar_3_quote.php',
		controller: 'PBManglarQuoteCtrl',
		controllerAs: 'manglar'
	})


    /***** LOMAS*****/

	/* Quote */
	.when('/Portto_Blanco-Lomas', {
		templateUrl: 'application/views/habitta/portto-blanco/app/devs/lomas/lomas_quote.php',
	})
	.when('/Portto_Blanco-Lomas_1', {
		templateUrl: 'application/views/habitta/portto-blanco/app/devs/lomas/condos/lomas_1_quote.php',
		controller: 'PBLomasQuoteCtrl',
		controllerAs: 'lomas'
	})
	.when('/Portto_Blanco-Lomas_2', {
		templateUrl: 'application/views/habitta/portto-blanco/app/devs/lomas/condos/lomas_2_quote.php',
		controller: 'PBLomasQuoteCtrl',
		controllerAs: 'lomas'
	})
	.when('/Portto_Blanco-Lomas_3', {
		templateUrl: 'application/views/habitta/portto-blanco/app/devs/lomas/condos/lomas_3_quote.php',
		controller: 'PBLomasQuoteCtrl',
		controllerAs: 'lomas'
	})
	.when('/Portto_Blanco-Lomas_4', {
		templateUrl: 'application/views/habitta/portto-blanco/app/devs/lomas/condos/lomas_4_quote.php',
		controller: 'PBLomasQuoteCtrl',
		controllerAs: 'lomas'
	})
	

	/********** Portto Blanco SLP **********/

	.when('/portto blanco/san luis potosi', {
		templateUrl: 'application/views/habitta/portto-blanco/home/homeslp_view.php'
	})
	

	/********** Portto Blanco Bernal **********/

	.when('/portto_blanco_bernal', {
		templateUrl: 'application/views/habitta/portto-blanco/home/homeslp_view.php'
	})
	


	/* Quote */

	.when('/Portto_Blanco-Tamul', {
		templateUrl: 'application/views/habitta/portto-blanco/slp/quote/tamul/tamul_quote.html',
	})
	.when('/Portto_Blanco-Tamul_1', {
		templateUrl: 'application/views/habitta/portto-blanco/slp/quote/tamul/condos/tamul_1_quote.html',
		controller: 'PBSLPTamulQuoteCtrl',
		controllerAs: 'tamul'
	})
	.when('/Portto_Blanco-Tamul_2', {
		templateUrl: 'application/views/habitta/portto-blanco/slp/quote/tamul/condos/tamul_2_quote.html',
		controller: 'PBSLPTamulQuoteCtrl',
		controllerAs: 'tamul'
	})
	.when('/Portto_Blanco-Tamul_3', {
		templateUrl: 'application/views/habitta/portto-blanco/slp/quote/tamul/condos/tamul_3_quote.html',
		controller: 'PBSLPTamulQuoteCtrl',
		controllerAs: 'tamul'
	})
	.when('/Portto_Blanco-Tamul_4', {
		templateUrl: 'application/views/habitta/portto-blanco/slp/quote/tamul/condos/tamul_4_quote.html',
		controller: 'PBSLPTamulQuoteCtrl',
		controllerAs: 'tamul'
	})

	/***** Zafiro *****/

	.when('/Portto_Blanco-Bernal/Zafiro', {
		templateUrl: 'application/views/habitta/portto-blanco/app/devs/zafiro/zafiro_quote.php',
		controller: 'PBBZafiroQuoteCtrl',
		controllerAs: 'zafiro'
	})
	.when('/Portto_Blanco-Bernal/Zafiro_1', {
		templateUrl: 'application/views/habitta/portto-blanco/app/devs/zafiro/condos/zafiro_1_quote.php',
		controller: 'PBBZafiroQuoteCtrl',
		controllerAs: 'zafiro'
	})
	.when('/Portto_Blanco-Bernal/Zafiro_2', {
		templateUrl: 'application/views/habitta/portto-blanco/app/devs/zafiro/condos/zafiro_2_quote.php',
		controller: 'PBBZafiroQuoteCtrl',
		controllerAs: 'zafiro'
	})

	/***** Malaquita *****/
    .when('/Portto_Blanco-Bernal/Malaquita', {
		templateUrl: 'application/views/habitta/portto-blanco/app/devs/malaquita/malaquita_quote.php',
		controller: 'PBBMalaquitaQuoteCtrl',
		controllerAs: 'malaquita'
	})
	.when('/Portto_Blanco-Bernal/Malaquita_1', {
		templateUrl: 'application/views/habitta/portto-blanco/app/devs/malaquita/condos/malaquita_1_quote.php',
		controller: 'PBBMalaquitaQuoteCtrl',
		controllerAs: 'malaquita'
	})
	.when('/Portto_Blanco-Bernal/Malaquita_2', {
		templateUrl: 'application/views/habitta/portto-blanco/app/devs/malaquita/condos/malaquita_2_quote.php',
		controller: 'PBBMalaquitaQuoteCtrl',
		controllerAs: 'malaquita'
	})

	
	/***** Amatista *****/

	.when('/Portto_Blanco-Bernal/Amatista', {
		templateUrl: 'application/views/habitta/portto-blanco/app/devs/amatista/amatista_quote.php',
		controller: 'PBBAmatistaQuoteCtrl',
		controllerAs: 'amatista'
	})
	.when('/Portto_Blanco-Bernal/Amatista_1', {
		templateUrl: 'application/views/habitta/portto-blanco/app/devs/amatista/condos/amatista_1_quote.php',
		controller: 'PBBAmatistaQuoteCtrl',
		controllerAs: 'amatista'
	})
	.when('/Portto_Blanco-Bernal/Amatista_2', {
		templateUrl: 'application/views/habitta/portto-blanco/app/devs/amatista/condos/amatista_2_quote.php',
		controller: 'PBBAmatistaQuoteCtrl',
		controllerAs: 'amatista'
	})
	


	.when('/veredas_lira', {
		templateUrl: 'application/views/habitta/veredas-lira/home/home_view.php'
	})
	.when('/veredas_lira-promociones', {
		templateUrl: 'application/views/habitta/veredas-lira/promo/promo.php'
	})
	.when('/veredas_lira-amenidades', {
		templateUrl: 'application/views/habitta/veredas-lira/amenidades/amenidades.php'
	})
	.when('/veredas_lira-ubicacion', {
			templateUrl: 'application/views/home/home_view.php'
	})

	/***** Application *****/

	.when('/veredas_lira-master_plan', {
		templateUrl: 'application/views/app/quote/habitta/veredas_lira/veredas_lira_view.php'
	})

	/*** Cedro ***/

	/* Quote */

	.when('/veredas_lira-cedro', {
		templateUrl: 'application/views/app/quote/habitta/veredas_lira/etapa_1/cedro_view.php',
		controller: 'VLCedroQuoteCtrl',
		controllerAs: 'vlCedro'
	})

	/* Inventary */

	.when('/Veredas_Lira-Cedro-Inventario', {
		templateUrl: 'application/views/app/dashboard/habitta/veredas_lira/cedro_inventary_view.php',
		controller: 'VLCedroCtrl',
		controllerAs: 'cedro'
	})

	/*** Sabino ***/

	/* Quote */

	.when('/veredas_lira-sabino', {
		templateUrl: 'application/views/app/quote/habitta/veredas_lira/etapa_1/sabino_view.php',
		controller: 'VLSabinoQuoteCtrl',
		controllerAs: 'vlSabino'
	})

	/* Inventary */

	.when('/Veredas_Lira-Sabino-Inventario', {
		templateUrl: 'application/views/app/dashboard/habitta/veredas_lira/sabino_inventary_view.php',
		controller: 'VLSabinoCtrl',
		controllerAs: 'sabino'
	})

	/******************** 
	 * Navetec 
	********************/

	/********** Landing **********/
	
	.when('/Navetec_Landing', {
		templateUrl: 'application/views/navetec/landing/index.php',
		controller: 'LandingCtrl',
		controllerAs: 'landing'
	})
	
	.when('/revision_landing_navetec', {
		templateUrl: 'application/views/navetec/landing/index2.php',
		controller: 'LandingCtrl',
		controllerAs: 'landing'
	})

	/********** Home **********/

	.when('/Navetec', {
		templateUrl: 'application/views/navetec/home_view.php'
	})

	/********** Naves **********/

	/***** Beta *****/

	/* Inventary */

	.when('/Navetec-Beta_Business_Park-Inventary', {
		templateUrl: 'application/views/navetec/inventary/beta_inventary_view.php',
		controller: 'NvtBetaCtrl',
		controllerAs: 'nvtBeta'
	})

	/* Quote */

	.when('/Navetec-Beta_Business_Park', {
		templateUrl: 'application/views/navetec/quote/beta_quote_view.php',
		controller: 'NvtBetaQuoteCtrl',
		controllerAs: 'nvtBeta'
	})
	
	/***** Gamma *****/

	/* Inventary */

	.when('/Navetec-Gamma_Business_Park-Inventary', {
		templateUrl: 'application/views/navetec/inventary/gamma_inventary_view.php',
		controller: 'NvtGammaCtrl',
		controllerAs: 'nvtGamma'
	})

	/* Quote */

	.when('/Navetec-Gamma_Business_Park', {
		templateUrl: 'application/views/navetec/quote/gamma_quote_view.php',
		controller: 'NvtGammaQuoteCtrl',
		controllerAs: 'nvtGamma'
	})

	/***** Santa Rosa *****/

	/* Inventary */

	.when('/Navetec-Santa_Rosa_Business_Park-Inventary', {
		templateUrl: 'application/views/navetec/inventary/santa_rosa_inventary_view.php',
		controller: 'NvtSantaRosaCtrl',
		controllerAs: 'nvtSantaRosa'
	})

	/* Quote */

	.when('/Navetec-Santa_Rosa_Business_Park', {
		templateUrl: 'application/views/navetec/quote/santa_rosa_quote_view.php',
		controller: 'NvtSantaRosaQuoteCtrl',
		controllerAs: 'nvtSantaRosa'
	})

	/***** Gamma Dos *****/
	
	/* Inventary */

	.when('/Navetec-Gamma_Dos_Business_Park-Inventary', {
		templateUrl: 'application/views/navetec/inventary/gamma_dos_inventary_view.php',
		controller: 'NvtGammaDosCtrl',
		controllerAs: 'nvtGammaDos'
	})

	/* Quote */

	.when('/Navetec-Gamma_II_Business_Park', {
		templateUrl: 'application/views/navetec/quote/gamma_dos_quote_view.php'
	})

	.when('/Navetec-Gamma_II_E1_Business_Park', {
		templateUrl: 'application/views/navetec/quote/gamma_dos_e1_quote_view.php',
		controller: 'NvtGammaDosQuoteCtrl',
		controllerAs: 'nvtGammaDos'
	})

	.when('/Navetec-Gamma_II_E2_Business_Park', {
		templateUrl: 'application/views/navetec/quote/gamma_dos_e2_quote_view.php',
		controller: 'NvtGammaDosQuoteCtrl',
		controllerAs: 'nvtGammaDos'
	})

	/***** Aeropuerto *****/

	/* Inventary */

	.when('/Navetec-Aeropuerto_Business_Park-Inventary', {
		templateUrl: 'application/views/navetec/inventary/aeropuerto_inventary_view.php',
		controller: 'NvtAeropuertoCtrl',
		controllerAs: 'nvtAeropuerto'
	})

	/* Quote */

	.when('/Navetec-Aeropuerto_Business_Park', {
		templateUrl: 'application/views/navetec/quote/aeropuerto_quote_view.php',
		controller: 'NvtAeropuertoQuoteCtrl',
		controllerAs: 'nvtAeropuerto'
	})
    /***** CELTA *****/
	/* Inventary */

	.when('/Navetec-Celta_Business_Park-Inventary', {
		templateUrl: 'application/views/navetec/inventary/celta_inventary_view.php',
		controller: 'NvtCeltaCtrl',
		controllerAs: 'nvtCelta'
	})

	/* Quote */

	.when('/Navetec-Celta_Business_Park', {
		templateUrl: 'application/views/navetec/quote/celta_quote_view.php',
		controller: 'NvtCeltaQuoteCtrl',
		controllerAs: 'nvtCelta'
	})
	  /***** Calamanda *****/

	/* Inventary */

	.when('/Navetec-Calamanda_Business_Park-Inventary', {
		templateUrl: 'application/views/navetec/inventary/calamanda_inventary_view.php',
		controller: 'NvtCalamandaCtrl',
		controllerAs: 'nvtCalamanda'
	})

	/* Quote */

	.when('/Navetec-Calamanda_Business_Park', {
		templateUrl: 'application/views/navetec/quote/calamanda_quote_view.php',
		controller: 'NvtCalamandaQuoteCtrl',
		controllerAs: 'nvtCalamanda'
	})
	
	/***** La Presa *****/

	/* Inventary */

	.when('/Navetec-La_Presa_Business_Park-Inventary', {
		templateUrl: 'application/views/navetec/inventary/la_presa_inventary_view.php',
		controller: 'NvtLaPresaCtrl',
		controllerAs: 'nvtLaPresa'
	})

	/* Quote */

	.when('/Navetec-La_Presa_Business_Park', {
		templateUrl: 'application/views/navetec/quote/la_presa_quote_view.php',
		controller: 'NvtLaPresaQuoteCtrl',
		controllerAs: 'nvtLaPresa'
	})

	/***** Pedro Escobedo *****/

	/* Inventary */

	.when('/Navetec-Pedro_Escobedo_Business_Park-Inventary', {
		templateUrl: 'application/views/navetec/inventary/pedro_escobedo_inventary_view.php',
		controller: 'NvtPedroEscobedoCtrl',
		controllerAs: 'nvtPedroEscobedo'
	})

	/* Quote */

	.when('/Navetec-Pedro_Escobedo_Business_Park', {
		templateUrl: 'application/views/navetec/quote/pedro_escobedo_quote_view.php',
		controller: 'NvtPedroEscobedoQuoteCtrl',
		controllerAs: 'nvtPedroEscobedo'
	})

	/***** SLP *****/

	/* Development */

	.when('/Navetec-SLP_Business_Park-Inventary', {
		templateUrl: 'application/views/navetec/inventary/slp_inventary_view.php'
	})

	.when('/Navetec-SLP_Business_Park', {
		templateUrl: 'application/views/navetec/quote/slp_quote_view.php'
	})

	/* Inventary */

	.when('/Navetec-SLP-1_Business_Park-Inventary', {
		templateUrl: 'application/views/navetec/inventary/slp1_inventary_view.php',
		controller: 'NvtSLPCtrl',
		controllerAs: 'nvtSLP'
	})

	.when('/Navetec-SLP-2_Business_Park-Inventary', {
		templateUrl: 'application/views/navetec/inventary/slp2_inventary_view.php',
		controller: 'NvtSLPCtrl',
		controllerAs: 'nvtSLP'
	})

	.when('/Navetec-SLP-3_Business_Park-Inventary', {
		templateUrl: 'application/views/navetec/inventary/slp3_inventary_view.php',
		controller: 'NvtSLPCtrl',
		controllerAs: 'nvtSLP'
	})

	/* Quote */

	.when('/Navetec-SLP-1_Business_Park', {
		templateUrl: 'application/views/navetec/quote/slp1_quote_view.php',
		controller: 'NvtSLPQuoteCtrl',
		controllerAs: 'nvtSLP'
	})

	.when('/Navetec-SLP-2_Business_Park', {
		templateUrl: 'application/views/navetec/quote/slp2_quote_view.php',
		controller: 'NvtSLPQuoteCtrl',
		controllerAs: 'nvtSLP'
	})

	.when('/Navetec-SLP-3_Business_Park', {
		templateUrl: 'application/views/navetec/quote/slp3_quote_view.php',
		controller: 'NvtSLPQuoteCtrl',
		controllerAs: 'nvtSLP'
	})

	/***** Conekta *****/

	/* Payment */

	.when('/payment', {
		templateUrl: 'application/views/navetec/payment.php'
	});

});

/********************************************************************************
 #Factories
 ********************************************************************************/

app.factory('Excel', function($window) {
    var uri='data:application/vnd.ms-excel;base64,',
	template='<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--></head><body><table>{table}</table></body></html>',
	base64=function(s){return $window.btoa(unescape(encodeURIComponent(s)));},
    format=function(s,c){return s.replace(/{(\w+)}/g,function(m,p){return c[p];})};
    return {
        tableToExcel:function(tableId,worksheetName) {
            var table=$(tableId),
			ctx={worksheet:worksheetName,table:table.html()},
			href=uri+base64(format(template,ctx));
            return href;
        }
    };
});

app.factory('Session', function($http, $location) {
	return {
		isLogged: function() {
			var isLogged = $http({
				method: 'POST',
			    url: 'application/models/auth/get_from_session.php',
			    headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' }
			}).then(function(response) {
				console.log('HTTP_SESSION_STATUS_OK');
				return response.data.isLogged;
			}, function(response) {
				console.log('HTTP_SESSION_STATUS_ERR');
				return -1;
			});
			return isLogged;
		},

		permissions: function() {
			var isLogged = $http({
				method: 'POST',
			    url: 'application/models/auth/get_from_session_permissions.php',
			    headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' }
			}).then(function(response) {
				console.log('HTTP_SESSION_STATUS_OK');
				return response.data;
			}, function(response) {
				console.log('HTTP_SESSION_STATUS_ERR');
				return -1;
			});
			return isLogged;
		}
	}
});

app.factory('httpInterceptor', function($http) {

	const POST = 'POST';
	const BASE_URL_INI = 'application/controllers/';
	const BASE_URL_END = '_ctrl.php';
	const HEADERS = {'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'};

	function requestToSelectBy(ctrl, requestData) {
		let requestModel = $http({
			method: POST,
			url: BASE_URL_INI + ctrl + BASE_URL_END,
			data: requestData,
			headers: HEADERS
		}).then(function(response) {
			return response.data.value;
		}, function(response) {
			return response;
		});
		return requestModel;
	}

	return {
		requestToSelectByHandler: function(ctrl, requestData) {
			return requestToSelectBy(ctrl, requestData);
		}
	}
});

app.factory('Inmovables', function($http, $location) {

	return {

		getInmovablesData: function(idDevelopment, idParcela) {
			var inmovableData = $http({
				method: 'POST',
			    url: 'application/controllers/get_inmovables_controller.php',
			    data: {
			    	idParcela: idParcela,
			    	idDevelopment: idDevelopment
			    },
			    headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' }
			}).then(function(response) {
				console.log('HTTP_RESPONSE_INMOVABLES_OK');
				return response.data;
			}, function(response) {
				console.log('HTTP_RESPONSE_INMOVABLES_ERR');
			});
			return inmovableData;
		},

		getInmovablesByCondominium: function(idCondominium, idDevelopment, idParcela) {
			var inmovableData = $http({
				method: 'POST',
			    url: 'application/controllers/get_inmovables_controller.php',
			    data: {
			    	idCondominium: idCondominium,
			    	idParcela: idParcela,
			    	idDevelopment: idDevelopment
			    },
			    headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' }
			}).then(function(response) {
				console.log('HTTP_RESPONSE_INMOVABLES_OK');
				return response.data;
			}, function(response) {
				console.log('HTTP_RESPONSE_INMOVABLES_ERR');
			});
			return inmovableData;
		},

		getPropertyPromos: function(idProperty) {
			var inmovableData = $http({
				method: 'POST',
			    url: 'application/controllers/get_property_promos.php',
			    data: {
			    	idProperty: idProperty
			    },
			    headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' }
			}).then(function(response) {
				console.log('HTTP_RESPONSE_PROPERTY_PROMOS_OK');
				return response.data;
			}, function(response) {
				console.log('HTTP_RESPONSE_PROPERTY_PROMOS_ERR');
			});
			return inmovableData;
		},

		generateInmovablesClassList: function(inmovables) {
			var inmovablesClassList = [];
			angular.forEach(inmovables, function(row, key) {
				if (inmovables[key].idPropertyStatus > 1) {
					inmovablesClassList[key] = 'pb__apart';
				} else {
					inmovablesClassList[key] = 'property-active';
				}
			});
			return inmovablesClassList;
		},

		generateInmovablesClassListInventary: function(inmovables) {
			var inmovablesClassList = [];
			angular.forEach(inmovables, function(row, key) {
				switch (inmovables[key].idPropertyStatus) {
					case 1:
						inmovablesClassList[key] = 'property__active';
						break;
					case 2:
						inmovablesClassList[key] = 'property-in-process';
						break;
					case 3:
						inmovablesClassList[key] = 'property-apart-inventary';
						break;
					case 4:
						inmovablesClassList[key] = 'property-hooked';
						break;
					case 5:
						inmovablesClassList[key] = 'property-sold';
						break;
					case 6:
						inmovablesClassList[key] = 'property-strategic';
				}
			});
			return inmovablesClassList;
		}

	};

});

app.factory('Quote', function($http, moment) {

	const PAYMENT_PLANS = {
		navetec: {
			ships: [
				{interest: 0, min_term: 2, max_term: 36},
				{interest: .02, min_term: 37, max_term: 120},
				{interest: .025, min_term: 121, max_term: 180}
			],
			allotments: [
				{interest: 0, min_term: 2, max_term: 36},
				{interest: .015, min_term: 37, max_term: 120},
				{interest: .02, min_term: 121, max_term: 180}
			]
		},
		habitta: {
			allotments: [
				{interest: 0, min_term: 2, max_term: 48},
				{interest: .01, min_term: 49, max_term: 120},
				{interest: .0125, min_term: 121, max_term: 180}
			]
		}
	};

	let quoteResult = {};
	let n = 0;
	let term_n = 0;
	let currentValue = 0;
	let time = new moment();
	let today = time.format('DD-MM-YYYY HH:mm');

	let getPaymentPlans = function(investmentType) {
		switch(investmentType) {
			case 1:
				return PAYMENT_PLANS.navetec.ships;
				break;
			case 2:
				return PAYMENT_PLANS.navetec.allotments;
				break;
			case 3:
				return PAYMENT_PLANS.habitta.allotments;
		}
	}

	let paymentPlansHandler = function() {
		let i = 0;
		let len = quoteResult.paymentPlans.length;
		while (i < len) {
			if (quoteResult.term < quoteResult.paymentPlans[i].min_term) {
				break;
			}
			i++;
		}
		return i;
	}

	let quoteCash = function() {
		quoteResult.total_investment = quoteResult.property_cost;
		quoteResult.final_investment = quoteResult.property_cost;
	}

	let unspentBalancesA = function() {

		let finalCredit = 0;
		let unspent_balances_a = [];
		
		time = new moment();
		quoteResult.total = 0;
		quoteResult.total_plan_a = 0;
		quoteResult.unspent_balances = [];
		
		currentValue = quoteResult.credit;
		let fixed_fee = currentValue / quoteResult.term;
		quoteResult.fixed_fee_a = fixed_fee;
		quoteResult.financing_a = quoteResult.fixed_fee_a * term_n;
		for (let i = 0; i < term_n; i++) {
			finalCredit = currentValue - fixed_fee;
			if (finalCredit < 1) {finalCredit = 0;}
			quoteResult.total_plan_a += fixed_fee;
			let unspent_balances_row = {period: (i+1), date: time.add(1, 'M').format('DD-MM-YYYY'), credit: currentValue, fixed_fee: fixed_fee, extra_payment: 0, paid_out: fixed_fee, interest: 0, monthly_payment: fixed_fee, final_credit: finalCredit};
			unspent_balances_a.push(unspent_balances_row);
			currentValue = finalCredit;
		}
		quoteResult.unspent_balances.push(unspent_balances_a);
	}

	let quotePlanA = function(currentTerm) {
		quoteCash();
		quoteResult.term_a = currentTerm;
		quoteResult.credit_a = quoteResult.monthly * quoteResult.term_a;
		quoteResult.monthly_a = quoteResult.credit_a / quoteResult.term_a;
		if (quoteResult.term <= currentTerm) {
			term_n = quoteResult.term;
		} else {
			term_n = currentTerm;
		}
		unspentBalancesA();
		quoteResult.total_credit = quoteResult.total_plan_a;
	}

	let unspentBalancesB = function() {
		let monthlyPayment = 0;
		let finalCredit = 0;
		let interest = 0;
		let unspent_balances_b = [];
		let fixed_fee = (quoteResult.paymentPlans[1].interest * currentValue) / (1-Math.pow(1+quoteResult.paymentPlans[1].interest,-n));
		quoteResult.fixed_fee_b = fixed_fee;
		quoteResult.financing_b = quoteResult.fixed_fee_b * term_n;
		quoteResult.total_plan_b = 0;
		for (let i = 0; i < term_n; i++) {
			interest = currentValue * quoteResult.paymentPlans[1].interest;
			monthlyPayment = fixed_fee - interest;
			finalCredit = currentValue - monthlyPayment;
			if (finalCredit < 1) {finalCredit = 0;}
			quoteResult.total_plan_b += monthlyPayment;
			let unspent_balances_row = {period: (quoteResult.paymentPlans[0].max_term+i+1), date: time.add(1, 'M').format('DD-MM-YYYY'), credit: currentValue, fixed_fee: fixed_fee, extra_payment: 0, paid_out: fixed_fee, interest: interest, monthly_payment: monthlyPayment, final_credit: finalCredit};
			unspent_balances_b.push(unspent_balances_row);
			currentValue = finalCredit;
		}
		quoteResult.unspent_balances.push(unspent_balances_b);
	}

	let quotePlanB = function(currentTerm) {
		quotePlanA(quoteResult.paymentPlans[0].max_term);
		quoteResult.term_b = currentTerm - quoteResult.paymentPlans[0].max_term;
		quoteResult.credit_b = quoteResult.monthly * quoteResult.term_b;
		quoteResult.interest_b = quoteResult.credit_b * quoteResult.paymentPlans[1].interest;
		quoteResult.interest_b = quoteResult.interest_b * quoteResult.term_b;
		quoteResult.total_credit_b = quoteResult.credit_b + quoteResult.interest_b;
		quoteResult.monthly_b = quoteResult.total_credit_b / quoteResult.term_b;
		n = quoteResult.term - term_n;
		if (quoteResult.n <= currentTerm) {
			term_n = n;
		} else {
			term_n = quoteResult.term_b;
		}
		unspentBalancesB();
		quoteResult.total_investment = quoteResult.hook + quoteResult.credit_a + quoteResult.credit_b;
		quoteResult.final_financing = quoteResult.financing_a + quoteResult.financing_b;
		quoteResult.final_investment = quoteResult.hook + quoteResult.financing_a + quoteResult.financing_b;
		quoteResult.final_interest = quoteResult.final_investment - quoteResult.property_cost;
		quoteResult.total_credit = quoteResult.total_plan_a + quoteResult.total_plan_b;
	}

	let unspentBalancesC = function() {
		let monthlyPayment = 0;
		let finalCredit = 0;
		let interest = 0;
		let unspent_balances_c = [];
		let fixed_fee = (quoteResult.paymentPlans[2].interest*currentValue)/(1-Math.pow(1+quoteResult.paymentPlans[2].interest,-n));
		quoteResult.fixed_fee_c = fixed_fee;
		quoteResult.financing_c = quoteResult.fixed_fee_c * term_n;
		for (let i = 0; i < term_n; i++) {
			interest = currentValue * quoteResult.paymentPlans[2].interest;
			monthlyPayment = fixed_fee - interest;
			finalCredit = currentValue - monthlyPayment;
			if (finalCredit < 1) {finalCredit = 0;}
			quoteResult.totalPlazoC += monthlyPayment;
			let unspent_balances_row = {period: (quoteResult.paymentPlans[1].max_term+i+1), date: time.add(1, 'M').format('DD-MM-YYYY'), credit: currentValue, fixed_fee: fixed_fee, extra_payment: 0, paid_out: fixed_fee, interest: interest, monthly_payment: monthlyPayment, final_credit: finalCredit};
			unspent_balances_c.push(unspent_balances_row);
			currentValue = finalCredit;
		}
		quoteResult.unspent_balances.push(unspent_balances_c);
	}

	let quotePlanC = function() {
		quoteResult.term_c = quoteResult.term - quoteResult.paymentPlans[1].max_term;
		quoteResult.credit_c = quoteResult.monthly * quoteResult.term_c;
		quoteResult.interest_c = quoteResult.credit_c * quoteResult.paymentPlans[2].interest;
		quoteResult.interest_c = quoteResult.interest_c * quoteResult.term_c;
		quoteResult.total_credit_c = quoteResult.credit_c + quoteResult.interest_c;
		quoteResult.monthly_c = quoteResult.total_credit_c / quoteResult.term_c;
		quotePlanA(quoteResult.paymentPlans[0].max_term);
		quotePlanB(quoteResult.paymentPlans[1].max_term);
		n = n - term_n;
		term_n = n;
		unspentBalancesC();
		quoteResult.total_investment = quoteResult.hook + quoteResult.credit_a + quoteResult.credit_b + quoteResult.credit_c;
		quoteResult.final_financing = quoteResult.financing_a + quoteResult.financing_b + quoteResult.financing_c;
		quoteResult.final_investment = quoteResult.hook + quoteResult.final_financing;
		quoteResult.final_interest = quoteResult.final_investment - quoteResult.property_cost;
		quoteResult.total_credit = quoteResult.total_plan_a + quoteResult.total_plan_b + quoteResult.total_plan_c;
	}

	let quoteHandler = function() {
		switch (quoteResult.paymentPlan) {
			case 0:
				quoteCash();
				quoteResult.plan_description = 'Contado';
				break;
			case 1:
				quotePlanA(quoteResult.term);
				quoteResult.plan_description = 'Financiamiento, sin intereses';
				break;
			case 2:
				quotePlanB(quoteResult.term);
				quoteResult.plan_description = 'Financiamiento, con interés';
				break;
			case 3:
				quotePlanC();
				quoteResult.plan_description = 'Financiamiento, con intereses';
		}
	}

	return {
		quoteProperty: function(area, costM2, term, hook, discount, investmentType) {

			quoteResult = {
				area: area,
				cost_m2: costM2,
				term: term,
				hook: hook,
				discount: discount
			};

			quoteResult.investment = quoteResult.cost_m2 * quoteResult.area;
			quoteResult.total_cost_m2 = quoteResult.cost_m2 - (quoteResult.cost_m2 * quoteResult.discount);
			quoteResult.property_cost = quoteResult.total_cost_m2 * quoteResult.area;
			quoteResult.credit = quoteResult.property_cost - quoteResult.hook;
			quoteResult.monthly = quoteResult.credit / quoteResult.term;

			quoteResult.paymentPlans = getPaymentPlans(investmentType);
			quoteResult.paymentPlan = paymentPlansHandler();

			quoteHandler();
			
			return quoteResult;
			
		}
	};
});

app.factory('Request', function($http) {

	const POST = 'POST';
	const GET = 'GET';
	const BASE_URL = 'application/controllers/';
	const EXT = '.php';
	const HEADERS = {'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'};

	function httpRequest(config) {
		let request = $http(config).then(function(response) {
			return response.data;
		}, function(response) {
			return response;
		});
		return request;
	}

	return {
		post: function(ctrl, data) {
			return httpRequest({
				method: POST,
				url: BASE_URL + ctrl + EXT,
				data: data,
				headers: HEADERS
			});
		},

		get: function(ctrl, data) {
			return httpRequest({
				method: GET,
				url: BASE_URL + ctrl + EXT,
				config: {
					params: data,
					headers: HEADERS
				}
			});
		}
	};
});

app.factory('Users', function(Request) {

	const USERS = 'users/';

	// Controllers
	const SELECT_USERS_BY_PROFILE = 'select_by_profile';
	const SELECT_ADVISERS_BY_MANAGER = 'select_users_by_user_team';
	const SELECT_FREE_USERS_BY_PROFILE = 'select_free_users_by_profile';

	const INSERT_USERS_TEAMS = 'insert_users_teams_controller';
	const DELETE_USER_TEAM = 'delete_users_teams_controller';

	const SEARCH_BY_NAME = 'search_users_by_name';

	const UPDATE_USER_STATUS = 'update_user_status_controller';
	
	//Profiles
	const ADMIN = 1;
	const MANAGER = 2;
	const ADVISER = 3;
	
	return {

		getAdmins: function(status, page, limit) {
			return Request.post(USERS+SELECT_USERS_BY_PROFILE, {
				profile: ADMIN,
				status: status,
				page: page,
				limit: limit
			});
		},

		getManagers: function(status, page, limit) {
			return Request.post(USERS+SELECT_USERS_BY_PROFILE, {
				profile: MANAGER,
				status: status,
				page: page,
				limit: limit
			});
		},

		getAdvisers: function(status, page, limit) {
			return Request.post(USERS+SELECT_USERS_BY_PROFILE, {
				profile: ADVISER,
				status: status,
				page: page,
				limit: limit
			});
		},

		getAdvisersByManager: function(idUser, status, page, limit) {
			return Request.post(USERS+SELECT_ADVISERS_BY_MANAGER, {
				idUser: idUser,
				status: status,
				page: page,
				limit: limit
			});
		},

		getFreeUsersByProfile: function(idProfile, status, page, limit) {
			return Request.post(USERS+SELECT_FREE_USERS_BY_PROFILE, {
				idProfile: idProfile,
				status: status,
				page: page,
				limit: limit
			});
		},

		setUserTeam: function(idUser, idTeam) {
			return Request.post(INSERT_USERS_TEAMS, {
				idUser: idUser,
				idTeam: idTeam
			});
		},

		deleteUserTeam: function(idUser) {
			return Request.post(DELETE_USER_TEAM, {
				idUser: idUser
			});
		},

		updateStatus: function(idUser, status) {
			return Request.post(UPDATE_USER_STATUS, {
				idUser: idUser,
				status: status,
			});
		},

		searchByName: function(keyword, idProfile, status, page, limit) {
			return Request.post(USERS+SEARCH_BY_NAME, {
				keyword: keyword,
				idProfile: idProfile,
				status: status,
				page: page,
				limit: limit
			});
		}

	}

});

app.factory('RealEstateUnit', function(Request) {

	const REAL_ESTATE_UNIT = 'inmovables/';
	const GET_REAL_ESTATE_UNIT = 'get_real_estate_unit';
	const UPDATE_DEV = 'update_dev';
	const UPDATE_CLUSTER = 'update_cluster';
	const GET_ESTATES = 'get_inmovables';
	const GET_ESTATES_BY_UNIT = 'get_inmovables_by_unit';
	const GET_ESTATES_BY_DEVELOPMENT = 'get_inmovables_by_development';
	const GET_ESTATES_BY_CLUSTER = 'get_inmovables_by_cluster';
	const GET_ESTATES_BY_CONDO = 'get_inmovables_by_condo';
	const GET_STATUS_DETAILS = 'get_status_details';
	const GET_USER_LEAD = 'get_user_lead';
	const GET_RESULTS = 'get_results';

	return {

		getRealEstateUnit: function(realEstateUnit) {
			return Request.post(REAL_ESTATE_UNIT+GET_REAL_ESTATE_UNIT, {
				realEstateUnit: realEstateUnit
			});
		},

		updateDevelopments: function(idDevelopment) {
			return Request.post(REAL_ESTATE_UNIT+UPDATE_DEV, {
				idDevelopment: idDevelopment
			});
		},

		updateClusters: function(idCluster) {
			return Request.post(REAL_ESTATE_UNIT+UPDATE_CLUSTER, {
				idCluster: idCluster
			});
		},

		getInmovables: function(status, page, limit) {
			return Request.post(REAL_ESTATE_UNIT+GET_ESTATES, {
				status: status,
				page: page,
				limit: limit
			});
		},

		getInmovablesByRealEstateUnit: function(idRealEstateUnit, status, page, limit) {
			return Request.post(REAL_ESTATE_UNIT+GET_ESTATES_BY_UNIT, {
				idRealEstateUnit: idRealEstateUnit,
				status: status,
				page: page,
				limit: limit
			});
		},

		getInmovablesByDevelopment: function(idDevelopment, status, page, limit) {
			return Request.post(REAL_ESTATE_UNIT+GET_ESTATES_BY_DEVELOPMENT, {
				idDevelopment: idDevelopment,
				status: status,
				page: page,
				limit: limit
			});
		},

		getInmovablesByCluster: function(idCluster, status, page, limit) {
			return Request.post(REAL_ESTATE_UNIT+GET_ESTATES_BY_CLUSTER, {
				idCluster: idCluster,
				status: status,
				page: page,
				limit: limit
			});
		},

		getInmovablesByCondo: function(idCondominium, status, page, limit) {
			return Request.post(REAL_ESTATE_UNIT+GET_ESTATES_BY_CONDO, {
				idCondominium: idCondominium,
				status: status,
				page: page,
				limit: limit
			});
		},

		getStatusDetails: function(idProperty) {
			return Request.post(REAL_ESTATE_UNIT+GET_STATUS_DETAILS, {
				idProperty: idProperty
			});
		},

		getUserLead: function(idLead) {
			return Request.post(REAL_ESTATE_UNIT+GET_USER_LEAD, {
				idLead: idLead
			});
		},

		getResults: function(id, status, key) {
			return Request.post(REAL_ESTATE_UNIT+GET_RESULTS, {
				id: id,
				status: status,
				key: key
			});
		}

	}

});

app.factory('Leads', function(Request) {

	const LEADS = 'leads/';

	const SELECT_BY_STATUS = 'select_leads_by_status';
	const SELECT_ACTIVE = 'select_active_leads';
	const SELECT_BY_USER = 'select_by_user';
	const SELECT_USER_LEADS = 'select_user_leads';
	const SEARCH_BY_NAME = 'search_leads_by_name';
	
	return {

		selectActiveLeads: function() {
			return Request.post(LEADS+SELECT_ACTIVE, {});
		},

		getActiveLeadsByUser: function(user, page) {
			return Request.post(LEADS+SELECT_BY_USER, {
				user: user,
				status: 1,
				page: page
			});
		},

		getLeadsByStatus: function(page, limit) {
			return Request.post(LEADS+SELECT_BY_STATUS, {
				status: 1,
				page: page,
				limit: limit
			});
		},

		getUserLeads: function(idUser, status, page, limit) {
			return Request.post(LEADS+SELECT_USER_LEADS, {
				idUser: idUser,
				status: status,
				page: page,
				limit: limit
			});
		},

		searchByName: function(keyword, status, page, limit) {
			return Request.post(LEADS+SEARCH_BY_NAME, {
				keyword: keyword,
				status: status,
				page: page,
				limit: limit
			});
		}
	}
});

app.factory('Status', function($location) {

	const SUCCESS = '';
	const SUCCESS_EMPTY = 'No se encontró ningún registro';
	const SERVER_FAIL = 'Error por parte del servidor';

	let message = '';

	return {

		checkHttpStatusCode: function(status) {

			let result = false;

			switch(status) {
				
				case 200:
					result = true;
					message = SUCCESS;
					break;

				case 204:
					message = SUCCESS_EMPTY;
					break;

				case 503:
					message = SERVER_FAIL;
					break;

				case 511:
					$location.path('/login');

			}

			return result;
			
		},

		getMessage: function() {
			return message;
		}

	}
});

app.factory('Moment', function($location) {

	const MONTHS = ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'];

	let mmnt = new moment();

	return {

		month: function() {
			return MONTHS[mmnt.month()];
		},

		nextMonth: function() {
			return MONTHS[mmnt.month()+1];
		},

		nextTwoeMonth: function() {
			return MONTHS[mmnt.month()+2];
		},

		year: function() {
			return mmnt.year();
		},

	}
});

app.factory('Developments', function(Request) {

	const DEVELOPMENTS = 'developments/';
	const SELECT_LAYOUT_BY_NAME = 'select_layout_by_name';
	const SELECT_PROPERTY_BY_ID = 'select_property_by_id';
	const GET_INVENTARY_DATA = 'get_inventary_data';

	return {

		selectLayoutByName: function(layoutName) {
			return Request.post(DEVELOPMENTS+SELECT_LAYOUT_BY_NAME, {
				layoutName: layoutName
			});
		},

		getInventaryData: function(layoutName) {
			return Request.post(DEVELOPMENTS+GET_INVENTARY_DATA, {
				layoutName: layoutName
			});
		},

		selectPropertyById: function(idProperty) {
			return Request.post(DEVELOPMENTS+SELECT_PROPERTY_BY_ID, {
				idProperty: idProperty
			});
		}

	}

});

/********************************************************************************
*									Controllers									*
*********************************************************************************/

/********** Users **********/

app.controller('UsersCtrl', function($scope, $rootScope, $http, $location, Session, Users, Leads, Status) {

	const ACTIVE = 1;
	const DELETE = 0;

	var users = this;

	// users.insertInmovablesToZohoNow = function() {
	// 	$http({
	// 		method: 'POST',
	// 		url: 'application/controllers/insert_inmovables_to_zoho.php',
	// 		headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' }
	// 	}).then(function(response) {
	// 		console.log('HTTP_RESPONSE_INMOVABLES_OK');
	// 		alert('Se ha hecho');
	// 	});
	// }

	users.insertInmovablesToZohoNow = function() {
		$http({
			method: 'POST',
			url: 'application/controllers/zoho_id_sinc.php',
			headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' }
		}).then(function(response) {
			console.log('HTTP_RESPONSE_INMOVABLES_OK');
			alert('Se ha hecho');
		});
	}

	users.panel = '';

	users.group = {
		pagination: {
			config: {
				current: 1,
				limit: {
					members: [25, 50, 100, 250, 500],
					selected: 25
				}
			},
			data: {
				num_of_rows: 0,
				num_of_results: 0,
				start: 0,
				end: 0
			}
		},
		filters: {
			profiles: {
				members: ['Director', 'Gerente', 'Asesor'],
				selected: 'Gerente'
			},
			status: {
				members: ['Inactivo', 'Activo'],
				selected: 1
			}
		},
		options: {
			admins: 'hide',
			managers: '',
			menu_items: {
				delete: '',
				restore: 'hide'
			}
		},
		status: {
			message: '',
			value: 'hide'
		}
	};

	users.search = {
		keyword: '',
		pagination: {
			config: {
				current: 1,
				limit: {
					members: [25, 50, 100, 250, 500],
					selected: 25
				}
			},
			data: {
				num_of_rows: 0,
				num_of_results: 0,
				start: 0,
				end: 0
			}
		},
		options: {
			modal_display: 'hide'
		},
		status: {
			message: '',
			value: 'hide'
		}
	};

	users.team = {
		pagination: {
			config: {
				current: 1,
				limit: {
					members: [25, 50, 100, 250, 500],
					selected: 25
				}
			},
			data: {
				num_of_rows: 0,
				num_of_results: 0,
				start: 0,
				end: 0
			}
		},
		options: {
			modal_display: 'hide'
		},
		status: {
			message: '',
			value: 'hide'
		}
	};

	users.free = {
		pagination: {
			config: {
				current: 1,
				limit: {
					members: [25, 50, 100, 250, 500],
					selected: 25
				}
			},
			data: {
				num_of_rows: 0,
				num_of_results: 0,
				start: 0,
				end: 0
			}
		},
		options: {
			modal_display: 'hide'
		},
		status: {
			message: '',
			value: 'hide'
		}
	};

	users.leads = {
		pagination: {
			config: {
				current: 1,
				limit: {
					members: [25, 50, 100, 250, 500],
					selected: 25
				}
			},
			data: {
				num_of_rows: 0,
				num_of_results: 0,
				start: 0,
				end: 0
			}
		},
		filters: {
			profiles: {
				members: ['Cualquiera', 'Con propiedades', 'Sin propiedades'],
				selected: 0
			},
			status: {
				members: ['Inactivo', 'Activo'],
				selected: 1
			}
		},
		status: {
			message: '',
			value: 'hide'
		},
		options: {
			modal_display: 'hide'
		},
		medium: [
			'Ninguno',
			'Cliente leal',
			'Familiar',
			'Conocido',
			'Neximo',
			'Expo',
			'Página Web',
			'Recomendación',
			'Base de datos',
			'Redes sociales',
			'Brokers',
			'Chat',
			'Cambaceo',
			'Guardias',
			'Google Ads',
			'Landing Page Navetec',
			'Landing Page Hábitta'
		]
	};

	// ########## General ########## //

	function updateStatus(idUser, status) {
		Users.updateStatus(idUser, status).then(function(response) {
			if (response.status > 0) {
				users.free.options.modal_display = 'hide';
			}
		});
	}

	// ########## Gupos de usuarios ########## //

	function checkStatusFilter() {
		if (users.group.filters.status.selected > 0) {
			users.group.options.menu_items.restore = 'hide'
			users.group.options.menu_items.delete = ''
		} else {
			users.group.options.menu_items.restore = '';
			users.group.options.menu_items.delete = 'hide';
		}
	}

	/**
	 * Handle server response of group request
	 * @param  {Object} response of request as JSON Object 
	 * @param  {string} adminsOptionClass define visibility of options menu respect profile
	 * @param  {string} managersOptionClass define visibility of options menu respect profile
	*/
	function groupResponseHandler(response, adminsOptionClass, managersOptionClass) {
		checkStatusFilter();
		if (Status.checkHttpStatusCode(response.status)) {
			users.group.members = response.result.members;
			users.group.pagination.data = response.result.pagination;
			users.group.pagination.data.num_of_results = users.group.members.length;
			users.group.pagination.data.end = users.group.pagination.data.start + users.group.pagination.data.num_of_results;
			users.group.pagination.data.start++;
			users.group.options.admins = adminsOptionClass;
			users.group.options.managers = managersOptionClass;
			users.group.status.value = 'hide';
		} else {
			users.group.pagination.data.num_of_rows = 0;
			users.group.pagination.data.num_of_results = 0;
			users.group.pagination.data.start = 0;
			users.group.pagination.data.end = 0;
			users.group.status.value = '';
		}
		users.group.status.message = Status.getMessage();
	}

	/**
	 * Request users with Admin profile from server
	*/
	function getAdmins() {
		Users.getAdmins(users.group.filters.status.selected, users.group.pagination.config.current, users.group.pagination.config.limit.selected).then(function(response) {
			groupResponseHandler(response, 'hide', 'hide');
		}, function(response) {
			users.group.status.message = Status.getMessage();
			users.group.status.value = '';
		});
	}

	/**
	 * Request users with Manager profile from server
	*/
	function getManagers() {
		Users.getManagers(users.group.filters.status.selected, users.group.pagination.config.current, users.group.pagination.config.limit.selected).then(function(response) {
			groupResponseHandler(response, 'hide', '');
		}, function(response) {
			users.group.status.message = Status.getMessage();
			users.group.status.value = '';
		});
	}

	/**
	 * Request users with Adviser profile from server
	*/
	function getAdvisers() {
		Users.getAdvisers(users.group.filters.status.selected, users.group.pagination.config.current, users.group.pagination.config.limit.selected).then(function(response) {
			groupResponseHandler(response, 'hide', 'hide');
		}, function(response) {
			users.group.status.message = Status.getMessage();
			users.group.status.value = '';
		});
	}

	/**
	 * Handle server response functions of group request
	*/
	users.group.update = function() {
		users.group.members = {};
		switch(users.group.filters.profiles.selected) {
			case users.group.filters.profiles.members[0]:
				getAdmins();
				break;
			case users.group.filters.profiles.members[1]:
				getManagers();
				break;
			case users.group.filters.profiles.members[2]:
				getAdvisers();
		}
	}

	/**
	 * Reset page index and handle server response functions regarding profile
	*/
	users.group.resetAndUpdate = function() {
		users.group.pagination.config.current = 1;
		users.group.update();
	}

	users.group.delete = function(idUser) {
		updateStatus(idUser, DELETE);
		users.group.update();
	}

	users.group.active = function(idUser) {
		updateStatus(idUser, ACTIVE);
		users.group.update();
	}

	// ########## Equipo de usuarios ########## //

	 /**
	 * Handle server response
	 * @param  {Object} response - The response of server request as JSON Object
	*/
	function userTeamResponseHandler(response) {
		if (Status.checkHttpStatusCode(response.status)) {
			users.team.members = response.result.members;
			users.team.pagination.data = response.result.pagination;
			users.team.pagination.data.num_of_results = users.team.members.length;
			users.team.pagination.data.end = users.team.pagination.data.start + users.team.pagination.data.num_of_results;
			users.team.pagination.data.start++;
			users.team.status.value = 'hide';
		} else {
			users.team.pagination.data.num_of_rows = 0;
			users.team.pagination.data.num_of_results = 0;
			users.team.pagination.data.start = 0;
			users.team.pagination.data.end = 0;
			users.team.status.value = '';
		}
		users.team.status.message = Status.getMessage();
	}

	/**
	 * Request user's team from server
	 * @param  {number} idUser - The user's id of request as JSON Object
	*/
	function getAdvisersByManager() {
		Users.getAdvisersByManager(users.team.selected, ACTIVE, users.team.pagination.config.current, users.team.pagination.config.limit.selected).then(function(response) {
			userTeamResponseHandler(response);
		}, function(response) {
			users.team.status.message = Status.getMessage();
			users.team.status.value = '';
		});
	}

	users.team.update = function() {
		users.team.members = {};
		getAdvisersByManager();
		users.team.options.modal_display = '';
		$rootScope.is_scrollin = 'no-scrolling';
	}

	users.team.request = function(idUser) {
		users.team.selected = idUser;
		users.team.update();
	}

	users.team.resetAndUpdate = function() {
		users.team.pagination.config.current = 1;
		users.team.update();
	}

	users.team.deleteUserTeam = function(idUser) {
		console.log(idUser);
		Users.deleteUserTeam(idUser).then(function(response) {
			if (response.status > 0) {
				users.team.update();
			}
		});
	}

	users.team.delete = function(idUser) {
		updateStatus(idUser, DELETE);
		users.team.update();
	}

	users.team.hideModal = function() {
		users.team.options.modal_display = 'hide';
		$rootScope.is_scrollin = '';
	}

	// ########## Usuarios libres ########## //

	function freeUsersResponseHandler(response) {
		if (Status.checkHttpStatusCode(response.status)) {
			users.free.members = response.result.members;
			users.free.pagination.data = response.result.pagination;
			users.free.pagination.data.num_of_results = users.free.members.length;
			users.free.pagination.data.end = users.free.pagination.data.start + users.free.pagination.data.num_of_results;
			users.free.pagination.data.start++;
			users.free.status.value = 'hide';
		} else {
			users.free.pagination.data.num_of_rows = 0;
			users.free.pagination.data.num_of_results = 0;
			users.free.pagination.data.start = 0;
			users.free.pagination.data.end = 0;
			users.free.status.value = '';
		}
		users.free.status.message = Status.getMessage();
	}

	function getFreeUserByProfile(idProfile) {
		Users.getFreeUsersByProfile(idProfile, ACTIVE, users.free.pagination.config.current, users.free.pagination.config.limit.selected).then(function(response) {
			freeUsersResponseHandler(response);
		}, function(response) {
			users.free.status.message = Status.getMessage();
			users.free.status.value = '';
		});
	}

	users.free.request = function(idTeam, idProfile) {
		users.free.selected = {
			idTeam: idTeam,
			profile: idProfile
		};
		users.free.update();
	}

	users.free.resetAndUpdate = function() {
		users.free.pagination.config.current = 1;
		users.free.update();
	}

	users.free.update = function() {
		users.free.members = {};
		getFreeUserByProfile(users.free.selected.profile);
		$rootScope.is_scrollin = 'no-scrolling';
		users.free.options.modal_display = '';
	}

	users.free.setTeam = function(idUser) {
		Users.setUserTeam(idUser, users.free.selected.idTeam).then(function(response) {
			if (response.status > 0) {
				users.free.update();
			}
		});
	}

	users.free.delete = function(idUser) {
		updateStatus(idUser, DELETE);
		users.free.update();
	}

	users.free.hideModal = function() {
		users.free.options.modal_display = 'hide';
		$rootScope.is_scrollin = '';
	}

	// ########## Search ########## //

	 /**
	 * Handle server response
	 * @param  {Object} response - The response of server request as JSON Object
	*/
	function searchResponseHandler(response) {
		if (Status.checkHttpStatusCode(response.status)) {
			users.search.members = response.result.members;
			users.search.pagination.data = response.result.pagination;
			users.search.pagination.data.num_of_results = users.search.members.length;
			users.search.pagination.data.end = users.search.pagination.data.start + users.search.pagination.data.num_of_results;
			users.search.pagination.data.start++;
			users.search.status.value = 'hide';
		} else {
			users.search.pagination.data.num_of_rows = 0;
			users.search.pagination.data.num_of_results = 0;
			users.search.pagination.data.start = 0;
			users.search.pagination.data.end = 0;
			users.search.status.value = '';
		}
		users.search.status.message = Status.getMessage();
	}

	function prepareIdProfile() {
		let idProfile = 0;
		switch(users.group.filters.profiles.selected) {
			case users.group.filters.profiles.members[0]:
				idProfile = 1;
				break;
			case users.group.filters.profiles.members[1]:
				idProfile = 2;
				break;
			case users.group.filters.profiles.members[2]:
				idProfile = 3;
		}
		return idProfile;
	}

	users.search.request = function() {
		idProfile = prepareIdProfile();
		Users.searchByName(users.search.keyword, idProfile, ACTIVE, users.search.pagination.config.current, users.search.pagination.config.limit.selected).then(function(response) {
			searchResponseHandler(response);
			$rootScope.is_scrollin = 'no-scrolling';
			users.search.options.modal_display = '';
		}, function(response) {
			users.search.status.message = Status.getMessage();
			users.search.status.value = '';
		});
	}

	users.search.update = function() {
		users.search.members = {};
		users.search.request();
	}

	users.search.resetAndUpdate = function() {
		users.search.pagination.config.current = 1;
		users.search.update();
	}

	users.search.delete = function(idUser) {
		updateStatus(idUser, DELETE);
		users.search.update();
	}

	users.search.hideModal = function() {
		users.search.options.modal_display = 'hide';
		$rootScope.is_scrollin = '';
	}

	// ########## Clientes y leads ########## //

	function leadsResponseHandler(response) {
		if (Status.checkHttpStatusCode(response.status)) {
			users.leads.members = response.result.members;
			users.leads.pagination.data = response.result.pagination;
			users.leads.pagination.data.num_of_results = users.leads.members.length;
			users.leads.pagination.data.end = users.leads.pagination.data.start + users.leads.pagination.data.num_of_results;
			users.leads.pagination.data.start++;
			users.leads.status.value = 'hide';
		} else {
			users.leads.pagination.data.num_of_rows = 0;
			users.leads.pagination.data.num_of_results = 0;
			users.leads.pagination.data.start = 0;
			users.leads.pagination.data.end = 0;
			users.leads.status.value = '';
		}
		users.leads.status.message = Status.getMessage();
	}

	function getUserLeads(idUser) {
		Leads.getUserLeads(idUser, users.leads.filters.status.selected, users.leads.pagination.config.current, users.leads.pagination.config.limit.selected).then(function(response) {
			leadsResponseHandler(response);
		}, function(response) {
			users.leads.status.message = Status.getMessage();
			users.leads.status.value = '';
		});
	}

	users.leads.request = function(idUser) {
		users.leads.selected = idUser;
		users.leads.update();
	}

	users.leads.resetAndUpdate = function() {
		users.leads.pagination.config.current = 1;
		users.leads.update();
	}

	users.leads.update = function() {
		users.leads.members = {};
		getUserLeads(users.leads.selected);
		$rootScope.is_scrollin = 'no-scrolling';
		users.leads.options.modal_display = '';
	}

	users.leads.hideModal = function() {
		users.leads.options.modal_display = 'hide';
		$rootScope.is_scrollin = '';
	}

	users.openNewUserModal = function() {
		$rootScope.rootUsers.insert.options.modal_display = '';
		$rootScope.is_scrollin = 'no-scrolling';
	}

	users.update = function(user, panel) {
		users.panel = panel;
		$rootScope.rootUsers.update.data.idUser = user.id;
		$rootScope.rootUsers.update.data.username = user.username;
		$rootScope.rootUsers.update.data.password = '';
		$rootScope.rootUsers.update.data.name = user.name.first;
		$rootScope.rootUsers.update.data.last_name = user.name.last;
		$rootScope.rootUsers.update.data.idPhone = user.phone.id;
		$rootScope.rootUsers.update.data.phone = user.phone.number;
		$rootScope.rootUsers.update.data.idProfile = user.idProfile;
		$rootScope.rootUsers.update.data.idGender = user.idGender;
		try {
			if (user.address != NULL) {
				$rootScope.rootUsers.update.data.idAddress = user.address.id;
				$rootScope.rootUsers.update.data.address = user.address.dir;
			} else {
				$rootScope.rootUsers.update.data.address = "";
				$rootScope.rootUsers.update.data.idAddress = 0;
			}
		} catch {
			if (user.address != null) {
				$rootScope.rootUsers.update.data.idAddress = user.address.id;
				$rootScope.rootUsers.update.data.address = user.address.dir;
			} else {
				$rootScope.rootUsers.update.data.address = "";
				$rootScope.rootUsers.update.data.idAddress = 0;
			}
		}
		$rootScope.is_scrollin = 'no-scrolling';
		$rootScope.rootUsers.update.options.modal_display = '';
	}

	users.closeUpdateView = function() {
		users.group.update();
		users.search.options.modal_display = 'hide';
		users.team.options.modal_display = 'hide';
		users.free.options.modal_display = 'hide';
		$rootScope.is_scrollin = '';
		$rootScope.rootUsers.update.options.modal_display = 'hide';
	}

	// ########## Constructor ########## //

	function init() {

		Session.permissions().then(function(response) {
			if (response.isLogged < 1) {
				$location.path('/login');
			}
			if (response.idProfile != 1 && response.isLogged != 3) {
				$location.path('/dashboard');
			}
		});

		getManagers();
	}

	init();

});

app.controller('DashboardCtrl', function($scope, $location, $http, $rootScope, Session, Quote, httpInterceptor) {

	Session.isLogged().then(function(response) {
		if (response < 1) {
			$location.path('/login');
		}
	});

	var dashboard = this;

	dashboard.quotePropertyResult = [];
	dashboard.activeLeads = [];
	dashboard.deletedLeads = [];

	dashboard.discountParam = 0;
	dashboard.termParam = 1;
	dashboard.hookParam = 0;
	
	dashboard.min_hook = 0;
	dashboard.max_hook = 0;

	dashboard.dialogDisplay = 'hide';
	dashboard.quoteDialogDisplay = 'hide';
	dashboard.disable = 'disable-pointer-events';
	dashboard.financing_options_a = 'hide';
	dashboard.financing_options_b = 'hide';
	dashboard.financing_options_c = 'hide';

	var selectedLeadIndex = 0;

	function requestDevelopment(idDevelopment) {

		let ctrl = 'request_development';

		let developmentRequestData = {
			table: 'developments',
			field: 'devlopment',
			where: 'idDevelopment',
			value: idDevelopment,
			type: 'i'
		};

		httpInterceptor.requestToSelectByHandler(ctrl, developmentRequestData).then(function(response) {
			console.log('HTTP_SELECT_OK');
			dashboard.quotePropertyResult.devlopment = response;
		}, function(response) {
			dashboard.quotePropertyResult.devlopment = 'HTTP_SELECT_ERR';
			console.log(dashboard.quotePropertyResult.devlopment);
		});
	}

	dashboard.selectLead = function(idLead, index) {
		dashboard.disable = '';
		selectedLeadIndex = index;
		dashboard.idLead = idLead;
		dashboard.collapse(index);
	}

	function paymentPlanViewHandler() {
		if (typeof dashboard.quotePropertyResult.unspent_balances != 'undefined') {
			if (typeof dashboard.quotePropertyResult.unspent_balances[0] != 'undefined') {
				dashboard.financing_options_a = '';
			} else {
				dashboard.financing_options_a = 'hide';
			}
			if (typeof dashboard.quotePropertyResult.unspent_balances[1] != 'undefined') {
				dashboard.financing_options_b = '';
			} else {
				dashboard.financing_options_b = 'hide';
			}
			if (typeof dashboard.quotePropertyResult.unspent_balances[2] != 'undefined') {
				dashboard.financing_options_c = '';
			} else {
				dashboard.financing_options_c = 'hide';
			}
		} else {
			dashboard.financing_options_a = 'hide';
			dashboard.financing_options_b = 'hide';
			dashboard.financing_options_c = 'hide';
		}
	}

	function formattingNumber2DP(number) {
		return Math.round((number + Number.EPSILON) * 100) / 100
	}

	dashboard.updateQuote = function () {
		if (dashboard.termParam >= 2 && dashboard.termParam <= 180) {
			let hookTemp = dashboard.quotePropertyResult.property_cost * .10;
			dashboard.hookParam = formattingNumber2DP(hookTemp);
			dashboard.min_hook = dashboard.hookParam;
			let maxHookTemp = dashboard.quotePropertyResult.property_cost * .90;
			dashboard.max_hook = formattingNumber2DP(maxHookTemp);
		} else {
			dashboard.min_hook = 0;
			dashboard.hookParam = 0;
		}
		let propertyParam = dashboard.quotePropertyResult;
		dashboard.quotePropertyResult = [];
		dashboard.quoteLeadProperty(propertyParam);
		paymentPlanViewHandler();
	}

	dashboard.quoteLeadProperty = function(property) {

		dashboard.quotePropertyResult = Quote.quoteProperty(
			property.area,
			property.property_type.cost_m2,
			dashboard.termParam,
			dashboard.hookParam,
			dashboard.discountParam,
			property.property_class
		);

		dashboard.quotePropertyResult.idDevelopment = property.idDevelopment;
		dashboard.quotePropertyResult.condominium = property.condominium;
		dashboard.quotePropertyResult.property_type = property.property_type;
		dashboard.quotePropertyResult.property_class = property.property_class;
		dashboard.quotePropertyResult.reference = property.reference;
		dashboard.quotePropertyResult.number = property.number;
		requestDevelopment(property.idDevelopment);
		dashboard.openQuoteDialogDisplay();
		/* requestDevelopment(property.idDevelopment).then(function() {
			dashboard.openQuoteDialogDisplay();
		}); */
	}

	dashboard.getUserLeads = function() {
		$http({
			method: 'POST',
		    url: 'application/controllers/get_user_leads_controller.php',
		    headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' }
		}).then(function(response) {
			dashboard.result = response.data;
			if (dashboard.result.status < 1) {
				dashboard.getLeadsMsgResult = 'No se encontró ningún cliente';
				dashboard.result = {};
			} else {
				dashboard.getLeadsMsgResult = '';
				console.log(dashboard.result.media);
				angular.forEach(dashboard.result.leads, function(lead, key) {
					angular.forEach(dashboard.result.media, function(medium, key) {
						if (medium.idMedium == lead.idMedium) {
							lead.medium = medium.medium;
						}
					});
					lead.collapsableBodyClass = 'saufth-collapsable-hide';
					lead.collapsableHeaderClass = '';
					if (lead.status > 0) {
						dashboard.activeLeads.push(lead);
					} else {
						dashboard.deletedLeads.push(lead);
					}
				});
			}
			console.log('HTTP_GET_USER_LEADS_OK');
		}, function(response) {
			console.log('HTTP_GET_USER_LEADS_ERR');
		});
	}

	dashboard.getUserLeads();

	dashboard.setLeadData = function() {
		$rootScope.selectedLead = {
			idLead: dashboard.activeLeads[selectedLeadIndex].idLead,
			name: dashboard.activeLeads[selectedLeadIndex].name,
			last_name: dashboard.activeLeads[selectedLeadIndex].last_name,
			idEmail: dashboard.activeLeads[selectedLeadIndex].idEmail,
			email: dashboard.activeLeads[selectedLeadIndex].email,
			idEmailDomain: dashboard.activeLeads[selectedLeadIndex].idEmailDomain,
			domain: dashboard.activeLeads[selectedLeadIndex].domain,
			emailDir: dashboard.activeLeads[selectedLeadIndex].email + '@' + dashboard.activeLeads[selectedLeadIndex].domain,
			idPhone: dashboard.activeLeads[selectedLeadIndex].idPhone,
			phone: dashboard.activeLeads[selectedLeadIndex].phone,
			idGender: dashboard.activeLeads[selectedLeadIndex].idGender,
			idAddress: dashboard.activeLeads[selectedLeadIndex].idAddress,
			address: dashboard.activeLeads[selectedLeadIndex].address,
			idMedium: dashboard.activeLeads[selectedLeadIndex].idMedium,
			medium: dashboard.activeLeads[selectedLeadIndex].medium
		};
	}

    dashboard.updatePanel = function(index) {
		selectedLeadIndex = index;
		dashboard.setLeadData(index);
		$location.path('/actualizar_cliente');
	}

	dashboard.setPropertyLead = function() {
		dashboard.setLeadData();
		$location.path('/Portto_Blanco-Estepa-Solicitar_Cambio_De_Estado');
	}

	dashboard.updateLeadStatus = function(idlead, status) {
		$http({
			method: 'POST',
		    url: 'application/controllers/lead_status_controller.php',
		    data: {
		    	idLead: idlead,
		    	status: status
		    },
		    headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' }
		}).then(function(response) {
			var result = response.data;
			if (result.status < 1) {
				dashboard.activeLeads[selectedLeadIndex].status = 0;
				dashboard.deletedLeads.push(dashboard.activeLeads[selectedLeadIndex]);
				dashboard.activeLeads.splice(selectedLeadIndex, 1);
				dashboard.disable = 'disable-pointer-events';
			}
			console.log('HTTP_STATUS_LEAD_OK');
		}, function(response) {
			console.log('HTTP_STATUS_LEAD_ERR');
		});
		dashboard.closeDialog();
	}

	dashboard.openDialog = function() {
		dashboard.dialogDisplay = '';
	}

	dashboard.closeDialog = function() {
		dashboard.dialogDisplay = 'hide';
	}

	dashboard.openQuoteDialogDisplay = function() {
		dashboard.quoteDialogDisplay = '';
	}

	dashboard.closeQuoteDialogDisplay = function() {
		dashboard.quoteDialogDisplay = 'hide';
	}

	let collapsed = -1;

	dashboard.collapse = function(index) {

		if (collapsed < 0) {
			dashboard.activeLeads[index].collapsableBodyClass = 'saufth-collapsable-show';
			dashboard.activeLeads[index].collapsableHeaderClass = 'saufth-collapsable-header-bg';
			collapsed = index;
		} else if (collapsed == index) {
			dashboard.activeLeads[index].collapsableBodyClass = 'saufth-collapsable-hide';
			dashboard.activeLeads[index].collapsableHeaderClass = '';
			collapsed = -1;
		} else if (collapsed >= 0) {
			if (index != Object.keys(dashboard.activeLeads).length-1) {
				dashboard.activeLeads[collapsed].collapsableBodyClass = 'saufth-collapsable-hide';
				dashboard.activeLeads[collapsed].collapsableHeaderClass = '';
				dashboard.activeLeads[index].collapsableBodyClass = 'saufth-collapsable-show';
				dashboard.activeLeads[index].collapsableHeaderClass = 'saufth-collapsable-header-bg';
				collapsed = index;
			} else {
				if (index != collapsed) {
					dashboard.activeLeads[collapsed].collapsableBodyClass = 'saufth-collapsable-hide';
					dashboard.activeLeads[collapsed].collapsableHeaderClass = '';
					dashboard.activeLeads[index].collapsableBodyClass = 'saufth-collapsable-show-last';
					dashboard.activeLeads[index].collapsableHeaderClass = 'saufth-collapsable-header-bg';
					collapsed = index;
				} else {
					dashboard.activeLeads[index].collapsableBodyClass = 'saufth-collapsable-hide';
					dashboard.activeLeads[index].collapsableHeaderClass = '';
					collapsed = -1;
				}
			}
		}
	}
});

/********** Inventary **********/

app.controller('InventaryCtrl', function($scope, $http, $location, $timeout, Session, Status, RealEstateUnit, Users, Leads, Excel) {

	let inventary = this;

	inventary.inmovables = [];

	inventary.selectedUnit = 1;
	inventary.selectedDev = 0;
	inventary.selectedCluster = 0;
	inventary.selectedCondominium = 0;

	inventary.is_scrollin = '';
	inventary.updatePanelDisplay = 'hide';
	inventary.statusDetailsPanelDisplay = 'hide';
	inventary.userByLeadPanelDisplay = 'hide';

	inventary.moreDetails = {
		sums: {},
		averages: {},
		counters: {},
		display: false
	};

	inventary.selectedIndex = 0;

	inventary.pagination = {
		config: {
			current: 1,
			limit: {
				members: [25, 50, 100, 250, 500],
				selected: 25
			}
		},
		data: {
			num_of_rows: 0,
			num_of_results: 0,
			start: 0,
			end: 0
		}
	};

	inventary.status = {
		members: ['Todo', 'Disponible', 'Espera', 'Apartado', 'Enganchado', 'Vendido', 'Estratégico'],
		selected: 0
	};

	inventary.filters = {
		display: 'hide',
		status: [
			{
				id: 1,
				name: 'Disponible',
				checked: true
			},
			{
				id: 6,
				name: 'Estratégico',
				checked: true
			},
			{
				id: 2,
				name: 'Espera',
				checked: true
			},
			{
				id: 3,
				name: 'Apartado',
				checked: true
			},
			{
				id: 4,
				name: 'Enganchado',
				checked: true
			},
			{
				id: 5,
				name: 'Vendido',
				checked: true
			}
		]
	};

	inventary.filters.collapse = function() {

		inventary.filters.display = (inventary.filters.display == 'hide') ? '' : 'hide';

	}

	let selectedStatus = [1, 6, 2, 3, 4, 5];

	inventary.statusFiltersHandler = function() {

		selectedStatus = [];

		inventary.filters.status.forEach(status => {

			(status.checked) ? selectedStatus.push(status.id) : null;

		});

	}

	let resetPagination = function() {
		return {
			current: 1,
			limit: {
				members: [25, 50, 100, 250, 500],
				selected: 25
			},
			data: {
				num_of_rows: 0,
				num_of_results: 0,
				start: 0,
				end: 0,
				book: null
			}
		};
	}

	inventary.users = {
		members: null,
		config: {
			pagination: resetPagination(),
			filters: {
				profiles: {
					members: [
						{ id: 1, name: 'Director' },
						{ id: 2, name: 'Gerente' },
						{ id: 3, name: 'Asesor' }
					],
					selected: 1
				}
			},
			display: {
				window: 'hide'
			},
			event: ''
		}
	};

	inventary.search = {
		keyword: '',
		result: null,
		pagination: resetPagination(),
		display: {
			users: 'hide',
			leads: 'hide'
		},
		selected: 0
	};

	inventary.leads = {
		members: null,
		config: {
			pagination: resetPagination(),
			display:{
				window: 'hide'
			}
		},
		medium: [
			'Ninguno',
			'Cliente leal',
			'Familiar',
			'Conocido',
			'Neximo',
			'Expo',
			'Página Web',
			'Recomendación',
			'Base de datos',
			'Redes sociales',
			'Brokers',
			'Chat',
			'Cambaceo',
			'Guardias',
			'Google Ads',
			'Landing Page Navetec',
			'Landing Page Hábitta'
		],
		idUser: 0
	};

	inventary.lead = {};

	let resetUsers = function() {
		inventary.users.members = null;
		inventary.users.config.pagination = resetPagination();
		inventary.users.config.display.window = 'hide';
	}

	let resetLeads = function() {
		inventary.leads.members = null;
		inventary.leads.config.pagination = resetPagination();
		inventary.leads.config.display.window = 'hide';
		inventary.leads.idUser = 0;
	}

	// ########## Leads ##########

	function leadsResponseHandler(response) {

		if (Status.checkHttpStatusCode(response.status)) {

			inventary.leads.members = response.result.members;
			inventary.leads.config.pagination.data = response.result.pagination;
			inventary.leads.config.pagination.data.num_of_results = inventary.leads.members.length;
			inventary.leads.config.pagination.data.end = inventary.leads.config.pagination.data.start + inventary.leads.config.pagination.data.num_of_results;
			inventary.leads.config.pagination.data.start++;

		} else {

			alert(response.message);

		}

	}

	function getUserLeads() {
		Leads.getUserLeads(inventary.leads.idUser, 1, inventary.leads.config.pagination.current, inventary.leads.config.pagination.limit.selected).then(function(response) {
			leadsResponseHandler(response);
		}, function(response) {
			alert(response.message);
		});
	}

	function getLeadsByStatus() {
		Leads.getLeadsByStatus(inventary.leads.config.pagination.current, inventary.leads.config.pagination.limit.selected).then(function(response) {
			leadsResponseHandler(response);
		}, function(response) {
			alert(response.message);
		});
	}

	inventary.lead.update = function() {
		getLeadsByStatus();
	}

	inventary.lead.updateAndReset = function() {
		inventary.leads.members = null;
		inventary.leads.config.pagination = resetPagination();
		getLeadsByStatus();
	}

	// ########## Tabs ##########

	inventary.usersModules = {
		tabs: [
			{
				text: 'Usuarios',
				class: 'selected__tab',
				display: '',
				open: function() {
					inventary.users.update();
				},
				close: function() {
					inventary.users.members = null;
				}
			},
			{
				text: 'Clientes',
				class: 'active__tab',
				display: 'hide',
				open: function() {
					inventary.lead.update();
				},
				close: function() {
					inventary.leads.members = null;
				}
			}
		],
		selected: 0
	};

	inventary.tabsHandler = function(index) {

		if (inventary.usersModules.selected != index) {

			inventary.usersModules.tabs[inventary.usersModules.selected].close();
			inventary.usersModules.tabs[index].open();

			inventary.usersModules.tabs[inventary.usersModules.selected].class = 'active__tab';
			inventary.usersModules.tabs[index].class = 'selected__tab';

			inventary.usersModules.tabs[inventary.usersModules.selected].display = 'hide';
			inventary.usersModules.tabs[index].display = '';

			inventary.usersModules.selected = index;

		}

	}

	// ########## Table ##########

	inventary.table = {
		width: 0,
		selected: -1,
		isChecked: false,
		count: 0,
		countDisplay: 'hide',
		importDisplay: 'hide',
		promo: 0,
		columns: []
	};

	function setTableConfig() {
		$http({
			method: 'POST',
			url: 'application/controllers/inmovables/inventary_table.php',
			data: inventary.table
		});
	}

	function tableHandler() {

		inventary.table.width = 0;

		inventary.table.columns.forEach(col => {

			inventary.table.width += (col.display != 'hide') ? col.width : 0;

		});

	}

	function hideColumns() {

		inventary.table.columns.forEach(col => {

			col.display = 'hide';

		});

		tableHandler();

	}

	function showColumns() {

		inventary.table.columns.forEach(col => {

			col.display = '';

		});

		inventary.table.width = 0;

	}

	function getTableConfig() {
		$http({
			method: 'GET',
			url: 'config/inventary_table.json'
		}).then(function(response) {
			inventary.table.width = response.data.width;
			inventary.table.columns = response.data.columns;
			tableHandler()
		}, function(response) {
			console.log('HTTP_GET_TABLE_CONFIG_ERR');
		});
	}

	function resetCheckbox() {
		inventary.table.count = 0;
		inventary.table.countDisplay = 'hide';
	}

	inventary.table.toggleAll = function() {

		
		if (inventary.table.count === inventary.inmovables.length) {
			
			inventary.table.count = 0;

			inventary.inmovables.forEach(property => {
				property.selected = false;
			});

			inventary.table.countDisplay = 'hide';
			
		} else if (inventary.table.count === 0 || inventary.table.count > 0) {

			inventary.table.count = inventary.inmovables.length;

			inventary.inmovables.forEach(property => {
				property.selected = true;
			});

			inventary.table.countDisplay = '';

		}

	}

	inventary.table.isChecked = function() {

		return (inventary.table.count === inventary.inmovables.length);

	}

	inventary.table.toggle = function() {

		inventary.table.count = 0;

		inventary.inmovables.forEach(property => {
			(property.selected) ? inventary.table.count++ : null;
		});

		inventary.table.countDisplay = (inventary.table.count) ? '' : 'hide';

	}

	inventary.table.columnsHandler = function () {

		if (inventary.table.selected >= 0) {
			inventary.table.columns[inventary.table.selected].display = (inventary.table.columns[inventary.table.selected].display != 'hide') ? 'hide' : '';
			tableHandler()
		} else if (inventary.table.selected == -2) {
			showColumns();
		} else if (inventary.table.selected == -3) {
			hideColumns();
		}

		setTableConfig();

		inventary.table.selected = -1;

	}

	inventary.table.updatePromo = function() {
		let selected = [];
		inventary.inmovables.forEach(property => {
			if(property.selected) {
				selected.push(property.idProperty);
				property.selected = false;
			}
		});
		$http({
			method: 'POST',
			url: 'application/controllers/inmovables/insert_promo.php',
			data: {
				inmovables: selected,
				promo: inventary.table.promo
			},
			headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' }
		}).then(function(response) {
			checkRealEstateUnits();
			resetCheckbox();
		});
		inventary.table.promo = 0;
		inventary.table.countDisplay = 'hide';
	}

	inventary.table.insertPromo = function(idProperty, idPromo) {
		$http({
			method: 'POST',
			url: 'application/controllers/inmovables/insert_promos.php',
			data: {
				idProperty: idProperty,
				idPromo: idPromo
			},
			headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' }
		}).then(function(response) {
			checkRealEstateUnits();
		});
	}

	inventary.table.deletePromo = function(idProperty, idPromo) {
		$http({
			method: 'POST',
			url: 'application/controllers/inmovables/delete_promo.php',
			data: {
				idProperty: idProperty,
				idPromo: idPromo
			},
			headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' }
		}).then(function(response) {
			inventary.inmovables = [];
			resetCheckbox();
			checkRealEstateUnits();
		});
	}

	inventary.table.showImportTable = function() {
		inventary.table.importDisplay = '';
		inventary.is_scrollin = 'no__scrolling';
	}

	inventary.table.hideImportTable = function() {
		inventary.table.importDisplay = 'hide';
		inventary.is_scrollin = '';
	}

	// ########## Users ##########

	/**
	 * Handle server response of group request
	 * @param {Object} response of request as JSON Object
	*/
	function groupResponseHandler(response, adminsOptionClass, managersOptionClass) {
		if (Status.checkHttpStatusCode(response.status)) {
			inventary.users.members = response.result.members;
			inventary.users.config.pagination.data = response.result.pagination;
			inventary.users.config.pagination.data.num_of_results = inventary.users.members.length;
			inventary.users.config.pagination.data.end = inventary.users.config.pagination.data.start + inventary.users.config.pagination.data.num_of_results;
			inventary.users.config.pagination.data.start++;
		} else {
			alert(response.message);
		}
	}

	/**
	 * Request users with Admin profile from server
	*/
	function getAdmins() {
		Users.getAdmins(1, inventary.users.config.pagination.current, inventary.users.config.pagination.limit.selected).then(function(response) {
			groupResponseHandler(response, 'hide', 'hide');
		}, function(response) {
			alert(Status.getMessage());
		});
	}

	/**
	 * Request users with Manager profile from server
	*/
	function getManagers() {
		Users.getManagers(1, inventary.users.config.pagination.current, inventary.users.config.pagination.limit.selected).then(function(response) {
			groupResponseHandler(response, 'hide', '');
		}, function(response) {
			alert(Status.getMessage());
		});
	}

	/**
	 * Request users with Adviser profile from server
	*/
	function getAdvisers() {
		Users.getAdvisers(1, inventary.users.config.pagination.current, inventary.users.config.pagination.limit.selected).then(function(response) {
			groupResponseHandler(response, 'hide', 'hide');
		}, function(response) {
			alert(response.message);
		});
	}

	let getInmovables = function() {
		RealEstateUnit.getInmovables(selectedStatus, inventary.pagination.config.current, inventary.pagination.config.limit.selected).then(function(response) {
			inventary.inmovables = response.result.inmovables;
			inventary.results = response.result.results;
			inventary.promos = response.promos;
			inventary.pagination.data = response.result.pagination;
			inventary.pagination.data.num_of_results = inventary.inmovables.length;
			inventary.pagination.data.end = inventary.pagination.data.start + inventary.pagination.data.num_of_results;
			getResults();
		});
	}

	let getInmovablesByRealEstateUnit = function() {
		RealEstateUnit.getInmovablesByRealEstateUnit(inventary.selectedUnit, selectedStatus, inventary.pagination.config.current, inventary.pagination.config.limit.selected).then(function(response) {
			inventary.inmovables = response.result.inmovables;
			inventary.results = response.result.results;
			inventary.promos = response.promos;
			inventary.pagination.data = response.result.pagination;
			inventary.results = response.result.results;
			inventary.pagination.data.num_of_results = inventary.inmovables.length;
			inventary.pagination.data.end = inventary.pagination.data.start + inventary.pagination.data.num_of_results;
			inventary.moreDetails.selected = inventary.selectedUnit;
			inventary.moreDetails.key = 'idCompany';
			getResults();
		});
	}

	let getInmovablesByDevelopment = function() {
		RealEstateUnit.getInmovablesByDevelopment(inventary.selectedDev, selectedStatus, inventary.pagination.config.current, inventary.pagination.config.limit.selected).then(function(response) {
			inventary.inmovables = response.result.inmovables;
			inventary.results = response.result.results;
			inventary.promos = response.promos;
			inventary.pagination.data = response.result.pagination;
			inventary.results = response.result.results;
			inventary.pagination.data.num_of_results = inventary.inmovables.length;
			inventary.pagination.data.end = inventary.pagination.data.start + inventary.pagination.data.num_of_results;
			inventary.moreDetails.selected = inventary.selectedDev;
			inventary.moreDetails.key = 'idDevelopment';
			getResults();
		});
	}

	let getInmovablesByCluster = function() {
		RealEstateUnit.getInmovablesByCluster(inventary.selectedCluster, selectedStatus, inventary.pagination.config.current, inventary.pagination.config.limit.selected).then(function(response) {
			inventary.inmovables = response.result.inmovables;
			inventary.results = response.result.results;
			inventary.promos = response.promos;
			inventary.pagination.data = response.result.pagination;
			inventary.results = response.result.results;
			inventary.pagination.data.num_of_results = inventary.inmovables.length;
			inventary.pagination.data.end = inventary.pagination.data.start + inventary.pagination.data.num_of_results;
			inventary.moreDetails.selected = inventary.selectedCluster;
			inventary.moreDetails.key = 'idParcela';
			getResults();
		});
	}

	let getInmovablesByCondo = function() {
		RealEstateUnit.getInmovablesByCondo(inventary.selectedCondominium, selectedStatus, inventary.pagination.config.current, inventary.pagination.config.limit.selected).then(function(response) {
			inventary.inmovables = response.result.inmovables;
			inventary.results = response.result.results;
			inventary.promos = response.promos;
			inventary.pagination.data = response.result.pagination;
			inventary.results = response.result.results;
			inventary.pagination.data.num_of_results = inventary.inmovables.length;
			inventary.pagination.data.end = inventary.pagination.data.start + inventary.pagination.data.num_of_results;
			inventary.moreDetails.selected = inventary.selectedCondominium;
			inventary.moreDetails.key = 'idCondominium';
			getTableConfig();
			getResults();
		});
	}

	let checkCondos = function() {
		(inventary.selectedCondominium) ? getInmovablesByCondo() : getInmovablesByCluster();
	}

	let checkClusters = function() {
		(inventary.selectedCluster) ? checkCondos() : getInmovablesByDevelopment();
	}

	let checkDevelopments = function() {
		(inventary.selectedDev) ? checkClusters() : getInmovablesByRealEstateUnit();
	}

	let checkRealEstateUnits = function() {
		(inventary.selectedUnit) ? checkDevelopments() : getInmovables();
	}

	let getStatusDetails = function() {

		RealEstateUnit.getStatusDetails(inventary.inmovables[inventary.selectedIndex].idProperty).then(function(response) {

			if (Status.checkHttpStatusCode(response.status)) {

				inventary.statusDetails = response.result;
				inventary.statusDetails.property = inventary.inmovables[inventary.selectedIndex];

			} else {

				alert(Status.getMessage());

			}

		});

	}

	inventary.openUserLead = function(idLead) {

		RealEstateUnit.getUserLead(idLead).then(function(response) {

			if (Status.checkHttpStatusCode(response.status)) {

				inventary.userLead = response.result;
				inventary.userByLeadPanelDisplay = '';

			} else {

				alert(Status.getMessage());

			}

		});

	}

	inventary.closeUserLead = function() {

		inventary.userByLeadPanelDisplay = 'hide';
		inventary.userLead = null;

	}

	inventary.updateRealEstateUnit = function() {

		RealEstateUnit.getRealEstateUnit(inventary.selectedUnit).then(function(response) {

			if (Status.checkHttpStatusCode(response.status)) {

				inventary.enviroment = {
					developments: [...[{devlopment: 'Todo', idDevelopment: 0}], ...response.result.developments],
					clusters: [...[{parcela: 'Todo', idParcela: 0}], ...response.result.clusters],
					condos: [...[{condominium: 'Todo', idCondominium: 0}], ...response.result.condos]
				};

				inventary.selectedDev = inventary.enviroment.developments[1].idDevelopment;
				inventary.selectedCluster = inventary.enviroment.clusters[1].idParcela;
				inventary.selectedCondominium = inventary.enviroment.condos[1].idCondominium;

			} else {

				alert(Status.getMessage());

			}

		});

	}

	function updateAllRealEstateUnits() {

		inventary.enviroment.developments = inventary.enviroment.developments[0];
		inventary.enviroment.clusters = inventary.enviroment.clusters[0];
		inventary.enviroment.condos = inventary.enviroment.condos[0];

		inventary.selectedDev = 0;
		inventary.selectedCluster = 0;
		inventary.selectedCondominium = 0;

	}

	inventary.updateAllRealEstateUnitsHandler = function() {
		(inventary.selectedUnit > 0) ? inventary.updateRealEstateUnit() : updateAllRealEstateUnits();
	}

	inventary.updateDevelopment = function() {

		RealEstateUnit.updateDevelopments(inventary.selectedDev).then(function(response) {

			if (Status.checkHttpStatusCode(response.status)) {

				inventary.enviroment.clusters = [...[{parcela: 'Todo', idParcela: 0}], ...response.result.clusters];
				inventary.enviroment.condos = [...[{condominium: 'Todo', idCondominium: 0}], ...response.result.condos];

				inventary.selectedCluster = inventary.enviroment.clusters[1].idParcela;
				inventary.selectedCondominium = inventary.enviroment.condos[1].idCondominium;

			} else {

				alert(Status.getMessage());

			}

		});

	}

	inventary.updateAllDevelopments = function() {

		inventary.enviroment.clusters = inventary.enviroment.clusters[0];
		inventary.enviroment.condos = inventary.enviroment.condos[0];

		inventary.selectedCluster = 0;
		inventary.selectedCondominium = 0;

	}

	inventary.updateDevelopmentHandler = function() {
		(inventary.selectedDev > 0) ? inventary.updateDevelopment() : inventary.updateAllDevelopments();
	}

	inventary.updateClusters = function() {

		RealEstateUnit.updateClusters(inventary.selectedCluster).then(function(response) {

			if (Status.checkHttpStatusCode(response.status)) {

				inventary.enviroment.condos = [...[{condominium: 'Todo', idCondominium: 0}], ...response.result];

				inventary.selectedCondominium = inventary.enviroment.condos[1].idCondominium;

			} else {

				alert(Status.getMessage());

			}

		});

	}

	inventary.updateAllClusters = function() {

		inventary.enviroment.condos = inventary.enviroment.condos[0];

		inventary.selectedCondominium = 0;

	}

	inventary.updateClustersHandler = function() {
		(inventary.selectedCluster) ? inventary.updateClusters() : inventary.updateAllClusters();
	}

	inventary.updatePage = function() {
		inventary.inmovables = [];
		resetCheckbox();
		checkRealEstateUnits();
	}

	inventary.update = function() {
		if (selectedStatus.length > 0) {
			inventary.inmovables = [];
			resetCheckbox();
			inventary.pagination.config.current = 1;
			checkRealEstateUnits();
			inventary.filters.collapse();
		} else {
			alert('Selecciona algún estado');
		}
	}

	inventary.openEditPropertyWindow = function($index) {

		inventary.is_scrollin = 'no__scrolling';

		inventary.updatePanelDisplay = '';

		inventary.selectedIndex = $index;

		inventary.idPromoIncrease = inventary.inmovables[inventary.selectedIndex].promos.cost_m2_increase.idPromo;
		inventary.valuePromoIncrease = inventary.inmovables[inventary.selectedIndex].promos.cost_m2_increase.discount;

		inventary.idPromoDiscount = inventary.inmovables[inventary.selectedIndex].promos.cost_m2_discount.idPromo;
		inventary.valuePromoDiscount = inventary.inmovables[inventary.selectedIndex].promos.cost_m2_discount.discount;

		inventary.idPromoHook = inventary.inmovables[inventary.selectedIndex].promos.hook.idPromo;
		inventary.valuePromoHook = inventary.inmovables[inventary.selectedIndex].promos.hook.discount;

		inventary.idPromoHookDiscount = inventary.inmovables[inventary.selectedIndex].promos.hook_discount.idPromo;
		inventary.valuePromoHookDiscount = inventary.inmovables[inventary.selectedIndex].promos.hook_discount.discount;

	}

	inventary.closeEditPropertyWindow = function() {
	
		inventary.is_scrollin = '';

		inventary.updatePanelDisplay = 'hide';

		inventary.selectedIndex = -1;
	
		inventary.idPromoIncrease = 0;
		inventary.valuePromoIncrease = 0;

		inventary.idPromoDiscount = 0;
		inventary.valuePromoDiscount = 0;

		inventary.idPromoHook = 0;
		inventary.valuePromoHook = 0;

		inventary.idPromoHookDiscount = 0;
		inventary.valuePromoHookDiscount = 0;

	}

	inventary.updateIncrease = function(idProperty, idPromo, currentPromo ,p) {
		$http({
			method: 'POST',
			url: 'application/controllers/update_increase.php',
			data: {
				idProperty: idProperty,
				idPromo: idPromo,
				currentPromo: currentPromo
			},
			headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' }
		}).then(function(response) {
			console.log('HTTP_UPDATE_INCREASE_OK');
			checkRealEstateUnits();
		}, function(response) {
			console.log('HTTP_UPDATE_INCREASE_ERR');
		});
	}

	/**
	 * Handle server response functions of group request
	*/
	inventary.users.update = function() {

		switch(inventary.users.config.filters.profiles.selected) {

			case 0:
				getAdmins();
				break;

			case 1:
				getManagers();
				break;

			case 2:
				getAdvisers();

		}

	}

	/**
	 * Reset page index and handle server response functions regarding profile
	*/
	inventary.users.resetAndUpdate = function() {
		inventary.users.config.pagination = resetPagination();
		inventary.users.update();
	}

	inventary.openStatusDetails = function(index) {

		inventary.is_scrollin = 'no__scrolling';
		inventary.selectedIndex = index;

		inventary.selectedStatus = inventary.inmovables[index].idPropertyStatus;
		inventary.initDate = (inventary.inmovables[index].init_at != null) ? new Date(inventary.inmovables[index].init_at) : null;
		inventary.setAsideDate = (inventary.inmovables[index].set_aside_at != null) ? new Date(inventary.inmovables[index].set_aside_at) : null;
		inventary.hookedDate = (inventary.inmovables[index].hooked_at != null) ? new Date(inventary.inmovables[index].hooked_at) : null;
		inventary.soldDate = (inventary.inmovables[index].sold_at != null) ? new Date(inventary.inmovables[index].sold_at) : null;

		inventary.statusDetailsPanelDisplay = '';
		(inventary.inmovables[index].idPropertyStatus > 1) ? getStatusDetails() : null;

		// if (inventary.inmovables[index].idPropertyStatus > 1) {

		// 	inventary.selectedStatus = inventary.inmovables[index].idPropertyStatus;
		// 	inventary.initDate = (inventary.inmovables[index].init_at != null) ? new Date(inventary.inmovables[index].init_at) : null;
		// 	inventary.setAsideDate = (inventary.inmovables[index].set_aside_at != null) ? new Date(inventary.inmovables[index].set_aside_at) : null;
		// 	inventary.hookedDate = (inventary.inmovables[index].hooked_at != null) ? new Date(inventary.inmovables[index].hooked_at) : null;
		// 	inventary.soldDate = (inventary.inmovables[index].sold_at != null) ? new Date(inventary.inmovables[index].sold_at) : null;
			
		// 	inventary.statusDetailsPanelDisplay = '';
		// 	getStatusDetails();

		// } else {

		// 	inventary.users.config.display.window = '';
		// 	getManagers();

		// }

	}

	inventary.updateDate = function(status, date) {
		let d = date.getFullYear() + '-' + (date.getMonth()+1) + '-' + date.getDate() + ' ' + date.toLocaleTimeString();
		$http({
			method: 'POST',
			url: 'application/controllers/inmovables/update_status_date.php',
			data: {
				idProperty: inventary.inmovables[inventary.selectedIndex].idProperty,
				date: d,
				status: status
			},
			headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' }
		}).then(function(response) {
			inventary.inmovables = [];
			checkRealEstateUnits();
		});
	}

	inventary.closeStatusDetails = function() {

		inventary.is_scrollin = '';
		inventary.statusDetailsPanelDisplay = 'hide';

		inventary.selectedStatus = 0;

		inventary.statusDetails.lead.name = '-';
		inventary.statusDetails.lead.last_name = '-';
		inventary.statusDetails.lead.last_name = '-';
		inventary.statusDetails.lead.phone = '-';
		inventary.statusDetails.lead.email = '-';
		inventary.statusDetails.lead.medium = '-';
		inventary.statusDetails.lead.gender = '-';
		inventary.statusDetails.lead.address = '-';
		inventary.statusDetails.lead.create_at = '-';

		inventary.statusDetails.user.name = '-';
		inventary.statusDetails.user.last_name = '-';
		inventary.statusDetails.user.last_name = '-';
		inventary.statusDetails.user.phone = '-';
		inventary.statusDetails.user.email = '-';
		inventary.statusDetails.user.gender = '-';
		inventary.statusDetails.user.address = '-';
		inventary.statusDetails.user.create_at = '-';

	}

	inventary.users.hide = function() {
		inventary.is_scrollin = '';
		resetUsers();
	}

	/**
	 * Handle server response functions of group request
	*/
	inventary.leads.update = function() {
		getUserLeads();
	}

	/**
	 * Reset page index and handle server response functions regarding profile
	*/
	inventary.leads.resetAndUpdate = function() {
		inventary.leads.config.pagination = resetPagination();
		inventary.leads.update();
	}

	inventary.leads.show = function(idUser) {
		inventary.leads.config.display.window = '';
		inventary.leads.idUser = idUser;
		getUserLeads();
	}

	inventary.leads.close = function() {
		inventary.leads.config.display.window = 'hide';
		inventary.leads.idUser = 0;
	}

	inventary.leads.hide = function() {
		resetLeads();
	}

	inventary.setLeadProperty = function(idLead, status) {

		$http({
			method: 'POST',
			url: 'application/controllers/inmovables/insert_lead_property_controller.php',
			data: {
				idLead: idLead,
				idProperty: inventary.inmovables[inventary.selectedIndex].idProperty,
				status: status
			},
			headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' }
		}).then(function(response) {
			if (Status.checkHttpStatusCode(response.status)) {
				inventary.leads.hide();
				inventary.users.hide();
				inventary.search.close();
				inventary.table.importDisplay = 'hide';
				checkRealEstateUnits();
				alert('La propiedad fue asociada exitosamente');
			} else {
				alert(response.message)
			}
		}, function(response) {
			alert(response.message);
		});

	}

	inventary.updateLeadProperty = function(idLead) {

		$http({
			method: 'POST',
			url: 'application/controllers/inmovables/update_lead_property.php',
			data: {
				idLead: idLead,
				idProperty: inventary.inmovables[inventary.selectedIndex].idProperty
			},
			headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' }
		}).then(function(response) {
			if (Status.checkHttpStatusCode(response.status)) {
				inventary.leads.hide();
				inventary.users.hide();
				inventary.search.close();
				inventary.table.importDisplay = 'hide';
				checkRealEstateUnits();
				alert('El propietario de la propiedad fue actualizado exitosamente');
			} else {
				alert(response.message)
			}
		}, function(response) {
			alert(response.message);
		});

	}

	inventary.updateStatus = function() {

		$http({

			method: 'POST',
			url: 'application/controllers/inmovables/update_lead_property_controller.php',
			data: {
				idProperty: inventary.inmovables[inventary.selectedIndex].idProperty,
				status: inventary.selectedStatus
			},
			headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' }

		}).then(function(response) {

			if (Status.checkHttpStatusCode(response.status)) {

				inventary.closeStatusDetails();
				checkRealEstateUnits();
				alert('La propiedad fue actualizada exitosamente');

			} else {

				alert(response.message)

			}

		}, function(response) {

			alert(response.message);

		});

	}

	inventary.openCustomerFinder = function(event) {
		inventary.users.config.event = event;
		getManagers();
		inventary.users.config.display.window = '';
	}

	// ########## Search ##########

	let resetSearch = function() {
		inventary.search.keyword = '';
		inventary.search.result = null;
		inventary.search.pagination = resetPagination();
		inventary.search.display.users = 'hide';
		inventary.search.display.leads = 'hide';
	}

	function searchUsersByName() {

		Users.searchByName(inventary.search.keyword, inventary.users.config.filters.profiles.members[inventary.users.config.filters.profiles.selected].id, 1, inventary.search.pagination.current, inventary.search.pagination.limit.selected).then(function(response) {

			if (Status.checkHttpStatusCode(response.status)) {

				inventary.search.result = response.result.members;
				inventary.search.pagination.data = response.result.pagination;
				inventary.search.pagination.data.num_of_results = inventary.search.result.length;
				inventary.search.pagination.data.end = inventary.search.pagination.data.start + inventary.search.pagination.data.num_of_results;
				inventary.search.pagination.data.start++;

			} else {

				alert(Status.getMessage());

			}

		}, function(response) {

			alert('Error inesperado');

		});

	}

	function searchLeadsByName() {

		Leads.searchByName(inventary.search.keyword, 1, inventary.search.pagination.current, inventary.search.pagination.limit.selected).then(function(response) {

			if (Status.checkHttpStatusCode(response.status)) {

				inventary.search.result = response.result.members;
				inventary.search.pagination.data = response.result.pagination;
				inventary.search.pagination.data.num_of_results = inventary.search.result.length;
				inventary.search.pagination.data.end = inventary.search.pagination.data.start + inventary.search.pagination.data.num_of_results;
				inventary.search.pagination.data.start++;

			} else {

				alert(Status.getMessage());

			}

		}, function(response) {

			alert('Error inesperado');

		});

	}

	inventary.search.users = function() {
		inventary.search.display.users = '';
		searchUsersByName();
	}

	inventary.search.leads = function() {
		inventary.search.display.leads = '';
		searchLeadsByName();
	}

	function modulesHandler() {

		switch (inventary.usersModules.tabs[inventary.usersModules.selected].text) {

			case inventary.usersModules.tabs[0].text:

				inventary.search.display.users = '';
				searchUsersByName();

				break;

			case inventary.usersModules.tabs[1].text:

				inventary.search.display.leads = '';
				searchLeadsByName();

		}

	}

	inventary.search.update = function() {
		modulesHandler();
	}

	inventary.search.updateAndReset = function() {
		inventary.search.pagination.current = 1;
		modulesHandler();
	}

	inventary.search.close = function() {
		resetSearch();
	}

	// ########## Results ##########

	let getResults = function() {
		RealEstateUnit.getResults(inventary.moreDetails.selected, selectedStatus, inventary.moreDetails.key).then(function(response) {
			inventary.moreDetails.sums = response.result.sums;
			inventary.moreDetails.averages = response.result.averages;
			inventary.moreDetails.counters = response.result.counters;
		});
	}

	inventary.moreDetails.show = function() {
		getResults();
		inventary.moreDetails.display = true;
	}

	inventary.moreDetails.hide = function() {
		inventary.moreDetails.display = false;
	}

	// ########## Export ##########

	inventary.exportToExcel = function() {
        var exportHref = Excel.tableToExcel('#inventary','WireWorkbenchDataExport');
        $timeout(function(){location.href = exportHref;},100); // trigger download
    }

	inventary.exportToPDF = function() {

		html2canvas(document.getElementById("inventary"), {
			onrendered: function(canvas) {
				var data = canvas.toDataURL();
				var docDefinition = {
					content: [{
						image: data,
						width: 500,
					}]
				};
				pdfMake.createPdf(docDefinition).download("inventario.pdf");
			}
		});

    }

	function initRealEstateUnit() {

		RealEstateUnit.getRealEstateUnit(inventary.selectedUnit).then(function(response) {

			if (Status.checkHttpStatusCode(response.status)) {

				inventary.enviroment = {
					developments: [...[{devlopment: 'Todo', idDevelopment: 0}], ...response.result.developments],
					clusters: [...[{parcela: 'Todo', idParcela: 0}], ...response.result.clusters],
					condos: [...[{condominium: 'Todo', idCondominium: 0}], ...response.result.condos]
				};

				inventary.selectedDev = inventary.enviroment.developments[1].idDevelopment;
				inventary.selectedCluster = inventary.enviroment.clusters[1].idParcela;
				inventary.selectedCondominium = inventary.enviroment.condos[1].idCondominium;

				getInmovablesByCondo();

			} else {

				alert(Status.getMessage());

			}

		});

	}

	// ########## Init ##########

	function init() {

		Session.permissions().then(function(response) {
			if (response.isLogged < 1) {
				$location.path('/login');
			}
			if (response.idProfile != 1 && response.isLogged != 3) {
				$location.path('/dashboard');
			}
		});

		initRealEstateUnit();

	}

	init();

});

app.controller('LayoutCtrl', function($routeParams, $location, $http, Session, Status, Developments, Users, Leads, RealEstateUnit) {

	var inventary = this;

	inventary.views = {
		search: {}
	};

	function layoutHandler(success, error, loading, details, searchUsers, searchUserLeads, team, findInUsers, findInLeads) {

		inventary.views.success = success;
		inventary.views.error = error;
		inventary.views.loading = loading;
		inventary.views.details = details;
		inventary.views.search.users = searchUsers;
		inventary.views.search.userLeads = searchUserLeads;
		inventary.views.search.team = team;
		inventary.views.search.findInUsers = findInUsers;
		inventary.views.search.findInLeads = findInLeads;

	}

	layoutHandler(false, false, true, false, false, false, false, false, false);

	inventary.errorMessage = '';

	inventary.condominium = {
		name: '',
		path: '',
		inmovables: null
	};

	inventary.paginationLimits = [25, 50, 100, 250, 500];

	let resetPagination = function() {
		return {
			current: 1,
			limit: inventary.paginationLimits[0],
			data: {
				num_of_rows: 0,
				num_of_results: 0,
				start: 0,
				end: 0,
				book: null
			}
		};
	}

	inventary.users = {
		members: null,
		pagination: resetPagination(),
		filters: {
			profiles: {
				members: [
					{ id: 1, name: 'Director' },
					{ id: 2, name: 'Gerente' },
					{ id: 3, name: 'Asesor' }
				],
				selected: 1
			}
		},
		event: ''
	};

	inventary.leads = {
		members: null,
		pagination: resetPagination(),
		medium: [
			'Ninguno',
			'Cliente leal',
			'Familiar',
			'Conocido',
			'Neximo',
			'Expo',
			'Página Web',
			'Recomendación',
			'Base de datos',
			'Redes sociales',
			'Brokers',
			'Chat',
			'Cambaceo',
			'Guardias',
			'Google Ads',
			'Landing Page Navetec',
			'Landing Page Hábitta'
		],
		idUser: 0
	};

	inventary.lead = {};

	inventary.search = {
		keyword: '',
		result: null,
		pagination: resetPagination(),
		selected: 0
	};

	function setLayout(response) {

		inventary.name = response.name;
		inventary.path = response.path;
		inventary.inmovables = response.inmovables;

	}

	function selectLayoutByName(layoutName) {

		layoutHandler(false, false, true, false, false, false, false, false, false);

		Developments.getInventaryData(layoutName).then(function(response) {

			if (Status.checkHttpStatusCode(response.status)) {

				setLayout(response.layout);

				inventary.errorMessage = '';

				layoutHandler(true, false, false, false, false, false, false, false, false);

			} else {

				inventary.errorMessage = 'No encontramos ningún condominio con ese nombre';

				layoutHandler(false, true, false, false, false, false, false, false, false);

			}

		}, function(response) {

			inventary.errorMessage = 'Revisa tu conexión a internet o contacta a un administrador';

			layoutHandler(false, true, false, false, false, false, false, false, false);

		});

	}

	// ########## Tabs ##########

	inventary.usersModules = {
		tabs: [
			{
				text: 'Usuarios',
				class: 'selected__tab',
				display: '',
				open: function() {
					inventary.users.update();
				},
				close: function() {
					inventary.users.pagination = resetPagination();
					inventary.users.members = null;
				}
			},
			{
				text: 'Clientes',
				class: 'active__tab',
				display: 'hide',
				open: function() {
					inventary.leads.update();
				},
				close: function() {
					inventary.leads.pagination = resetPagination();
					inventary.leads.members = null;
				}
			}
		],
		selected: 0
	};

	inventary.tabsHandler = function(index) {

		if (inventary.usersModules.selected != index) {

			inventary.usersModules.tabs[inventary.usersModules.selected].close();
			inventary.usersModules.tabs[index].open();

			inventary.usersModules.tabs[inventary.usersModules.selected].class = 'active__tab';
			inventary.usersModules.tabs[index].class = 'selected__tab';

			inventary.usersModules.tabs[inventary.usersModules.selected].display = 'hide';
			inventary.usersModules.tabs[index].display = '';

			inventary.usersModules.selected = index;

		}

	}

	// ########## Users ##########

	function groupResponseHandler(response) {

		if (Status.checkHttpStatusCode(response.status)) {

			layoutHandler(false, false, false, false, true, false, false, false, false);
			inventary.users.members = response.result.members;
			inventary.users.pagination.data = response.result.pagination;
			inventary.users.pagination.data.num_of_results = inventary.users.members.length;
			inventary.users.pagination.data.end = inventary.users.pagination.data.start + inventary.users.pagination.data.num_of_results;
			inventary.users.pagination.data.start++;

		} else {

			layoutHandler(false, false, false, true, false, false, false, false, false);

			alert(response.message);
			

		}

	}

	/**
	 * Request users with Admin profile from server
	*/
	function getAdmins() {

		layoutHandler(false, false, true, false, false, false, false, false, false);

		Users.getAdmins(1, inventary.users.pagination.current, inventary.users.pagination.limit).then(function(response) {

			groupResponseHandler(response);

		}, function(response) {

			layoutHandler(false, false, false, true, false, false, false, false, false);

			alert(Status.getMessage());

		});

	}

	/**
	 * Request users with Manager profile from server
	*/
	function getManagers() {

		layoutHandler(false, false, true, false, false, false, false, false, false);

		Users.getManagers(1, inventary.users.pagination.current, inventary.users.pagination.limit).then(function(response) {

			groupResponseHandler(response);

		}, function(response) {
			
			layoutHandler(false, false, false, true, false, false, false, false, false);

			alert(Status.getMessage());
			

		});

	}

	/**
	 * Request users with Adviser profile from server
	*/
	function getAdvisers() {

		layoutHandler(false, false, true, false, false, false, false, false, false);

		Users.getAdvisers(1, inventary.users.pagination.current, inventary.users.pagination.limit).then(function(response) {

			groupResponseHandler(response);

		}, function(response) {

			layoutHandler(false, false, false, true, false, false, false, false, false);

			alert(response.message);

		});

	}

	/**
	 * Handle server response functions of group request
	*/
	inventary.users.update = function() {

		switch(inventary.users.filters.profiles.selected) {

			case 0:
				getAdmins();
				break;

			case 1:
				getManagers();
				break;

			case 2:
				getAdvisers();

		}

	}

	/**
	 * Reset page index and handle server response functions regarding profile
	*/
	inventary.users.resetAndUpdate = function(limit) {

		inventary.users.pagination = resetPagination();

		inventary.users.pagination.limit = limit;

		inventary.users.update();

	}

	// ########## Leads ##########

	function leadsResponseHandler(response) {

		if (Status.checkHttpStatusCode(response.status)) {

			inventary.leads.members = response.result.members;
			inventary.leads.pagination.data = response.result.pagination;
			inventary.leads.pagination.data.num_of_results = inventary.leads.members.length;
			inventary.leads.pagination.data.end = inventary.leads.pagination.data.start + inventary.leads.pagination.data.num_of_results;
			inventary.leads.pagination.data.start++;

		} else {

			layoutHandler(false, false, false, false, true, false, false, false, false);

			alert(response.message);

		}

	}

	function getUserLeads() {

		layoutHandler(false, false, true, false, false, false, false, false, false);

		Leads.getUserLeads(inventary.leads.idUser, 1, inventary.leads.pagination.current, inventary.leads.pagination.limit).then(function(response) {

			layoutHandler(false, false, false, false, false, true, false, false, false);

			leadsResponseHandler(response);

		}, function(response) {

			layoutHandler(false, false, false, false, true, false, false, false, false);

			alert(response.message);

		});

	}

	function getLeadsByStatus() {
		
		layoutHandler(false, false, true, false, false, false, false, false, false);

		Leads.getLeadsByStatus(inventary.leads.pagination.current, inventary.leads.pagination.limit).then(function(response) {

			layoutHandler(false, false, false, false, true, false, false, false, false);

			leadsResponseHandler(response);

		}, function(response) {

			layoutHandler(false, false, false, true, false, false, false, false, false);

			alert(response.message);

		});

	}

	inventary.leads.show = function(idUser) {

		inventary.leads.idUser = idUser;

		getUserLeads();

	}

	inventary.leads.close = function() {
		
		inventary.leads.members = null;

		inventary.leads.pagination = resetPagination();

		inventary.leads.idUser = 0;

		layoutHandler(false, false, false, false, true, false, false, false, false);

	}

	inventary.leads.update = function() {

		getLeadsByStatus();

	}

	inventary.leads.resetAndUpdate = function(limit) {

		inventary.leads.pagination = resetPagination();

		inventary.leads.pagination.limit = limit;

		getLeadsByStatus();

	}

	inventary.leads.updateUserLeads = function() {

		getUserLeads();

	}

	inventary.leads.resetAndUpdateUserLeads = function(limit) {

		inventary.leads.pagination = resetPagination();

		inventary.leads.pagination.limit = limit;

		inventary.leads.updateUserLeads();

	}

	inventary.leads.showTeam = function(idLead) {

		layoutHandler(false, false, true, false, false, false, false, false, false);

		RealEstateUnit.getUserLead(idLead).then(function(response) {

			if (Status.checkHttpStatusCode(response.status)) {

				inventary.userLead = response.result;

				layoutHandler(false, false, false, false, false, false, true, false, false);

			} else {

				alert(Status.getMessage());

				layoutHandler(false, false, false, false, false, true, false, false, false);

			}

		});

	}

	inventary.leads.hideTeam = function() {

		inventary.userLead = null;

		layoutHandler(false, false, false, false, true, false, false, false, false);

	}

	inventary.leads.setProperty = function(idLead, status) {

		layoutHandler(false, false, true, false, false, false, false, false, false);

		$http({
			method: 'POST',
			url: 'application/controllers/inmovables/insert_lead_property_controller.php',
			data: {
				idLead: idLead,
				idProperty: inventary.property.idProperty,
				status: status
			},
			headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' }
		}).then(function(response) {

			if (Status.checkHttpStatusCode(response.status)) {

				alert('La propiedad fue asociada exitosamente');

			} else {

				alert(response.message)

			}

			inventary.showPropertyDetails(inventary.property.idProperty);

		}, function(response) {

			layoutHandler(true, false, false, false, false, false, false, false, false);

			alert(response.message);

		});

	}

	// ########## Property ##########

	inventary.showPropertyDetails = function(idProperty) {

		layoutHandler(false, false, true, false, false, false, false, false, false);

		Developments.selectPropertyById(idProperty).then(function(response) {

			if (Status.checkHttpStatusCode(response.status)) {

				inventary.property = response.property;

				inventary.property.selectedStatus = inventary.property.idPropertyStatus;

				inventary.property.initDate = (inventary.property.init_at != null) ? new Date(inventary.property.init_at) : null;
				inventary.property.setAsideDate = (inventary.property.set_aside_at != null) ? new Date(inventary.property.set_aside_at) : null;
				inventary.property.hookedDate = (inventary.property.hooked_at != null) ? new Date(inventary.property.hooked_at) : null;
				inventary.property.soldDate = (inventary.property.sold_at != null) ? new Date(inventary.property.sold_at) : null;

				inventary.property.selectedHook = inventary.property.promos.hook.idPromo;
				inventary.property.selectedHookDiscount = (inventary.property.promos.hook_discount != null) ? inventary.property.promos.hook_discount.idPromo : 0;

				layoutHandler(false, false, false, true, false, false, false, false, false);

			} else {

				alert('No se encontro información sobre esta propiedad');
				layoutHandler(true, false, false, false, false, false, false, false, false);

			}

		}, function(response) {

			alert('Revisa tu conexión a internet o contacta a un administrador');
			layoutHandler(true, false, false, false, false, false, false, false, false);

		});

	}

	inventary.hidePropertyDetails = function() {

		selectLayoutByName($routeParams['layoutName']);

		inventary.property = null;

		inventary.views.details = false;

	}

	// ########## Promos ##########

	inventary.insertPromo = function(idProperty, idPromo) {

		$http({

			method: 'POST',
			url: 'application/controllers/inmovables/insert_promos.php',
			data: {
				idProperty: idProperty,
				idPromo: idPromo
			},
			headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' }

		}).then(function(response) {

			if (Status.checkHttpStatusCode(response.status)) {

				alert('Se actualizó exitosamente');
	
				inventary.showPropertyDetails(inventary.property.idProperty);

			} else {

				alert(status.getMessage());

			}

		}, function(response) {

			alert(response.message);

		});

	}

	inventary.deletePromo = function(idProperty, idPromo) {

		layoutHandler(false, false, true, false, false, false, false, false, false);

		$http({

			method: 'POST',
			url: 'application/controllers/inmovables/delete_promo.php',
			data: {
				idProperty: idProperty,
				idPromo: idPromo
			},
			headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' }

		}).then(function(response) {

			if (Status.checkHttpStatusCode(response.status)) {

				alert('Se actualizó exitosamente');

				inventary.showPropertyDetails(inventary.property.idProperty);

			} else {

				alert(status.getMessage());

			}

		}, function(response) {

			alert(response.message);

		});

	}

	inventary.updateIncrease = function(idProperty, idPromo, currentPromo, value, type) {

		$http({

			method: 'POST',
			url: 'application/controllers/update_increase.php',
			data: {
				idProperty: idProperty,
				idPromo: idPromo,
				currentPromo: currentPromo,
				value: value,
				type: type
			},
			headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' }

		}).then(function(response) {

			if (Status.checkHttpStatusCode(response.status)) {

				alert('Se actualizó exitosmente');

				inventary.showPropertyDetails(inventary.property.idProperty);

			} else {

				alert(status.getMessage());

			}

		}, function(response) {

			alert(response.message);

		});

	}

	inventary.updateDate = function(status, date) {

		let currentDate = date.getFullYear() + '-' + (date.getMonth()+1) + '-' + date.getDate() + ' ' + date.toLocaleTimeString();

		$http({

			method: 'POST',
			url: 'application/controllers/inmovables/update_status_date.php',
			data: {
				idProperty: inventary.property.idProperty,
				date: currentDate,
				status: status
			},
			headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' }

		}).then(function(response) {

			if (Status.checkHttpStatusCode(response.status)) {

				alert('Se actualizó exitosmente');

				inventary.showPropertyDetails(inventary.property.idProperty);

			} else {

				alert(status.getMessage());

			}

		}, function(response) {

			alert(response.message);

		});

	}

	// ########## Search ##########

	inventary.showSearch = function() {

		getManagers();

	}

	inventary.hideSearch = function() {

		layoutHandler(false, false, false, true, false, false, false, false, false);

	}

	inventary.updateStatus = function() {

		$http({

			method: 'POST',
			url: 'application/controllers/inmovables/update_lead_property_controller.php',
			data: {
				idProperty: inventary.property.idProperty,
				status: inventary.property.selectedStatus
			},
			headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' }

		}).then(function(response) {

			if (Status.checkHttpStatusCode(response.status)) {

				inventary.showPropertyDetails(inventary.property.idProperty);

				alert('La propiedad fue actualizada exitosamente');

			} else {

				alert(Status.message)

			}

		}, function(response) {

			alert(response.message);

		});

	}

	let resetSearch = function() {

		inventary.search.keyword = '';

		inventary.search.result = null;

		inventary.search.pagination = resetPagination();

		layoutHandler(false, false, false, false, true, false, false, false, false);

	}

	function searchUsersByName() {

		layoutHandler(false, false, true, false, false, false, false, false, false);

		Users.searchByName(inventary.search.keyword, inventary.users.filters.profiles.members[inventary.users.filters.profiles.selected].id, 1, inventary.search.pagination.current, inventary.search.pagination.limit).then(function(response) {

			if (Status.checkHttpStatusCode(response.status)) {

				inventary.search.result = response.result.members;
				inventary.search.pagination.data = response.result.pagination;
				inventary.search.pagination.data.num_of_results = inventary.search.result.length;
				inventary.search.pagination.data.end = inventary.search.pagination.data.start + inventary.search.pagination.data.num_of_results;
				inventary.search.pagination.data.start++;

				layoutHandler(false, false, false, false, false, false, false, true, false);

			} else {

				alert(Status.getMessage());

				layoutHandler(false, false, false, false, true, false, false, false, false);

			}

		}, function(response) {

			alert(response.message);

			layoutHandler(false, false, false, false, true, false, false, false, false);

		});

	}

	function searchLeadsByName() {

		layoutHandler(false, false, true, false, false, false, false, false, false);

		Leads.searchByName(inventary.search.keyword, 1, inventary.search.pagination.current, inventary.search.pagination.limit).then(function(response) {

			if (Status.checkHttpStatusCode(response.status)) {

				inventary.search.result = response.result.members;
				inventary.search.pagination.data = response.result.pagination;
				inventary.search.pagination.data.num_of_results = inventary.search.result.length;
				inventary.search.pagination.data.end = inventary.search.pagination.data.start + inventary.search.pagination.data.num_of_results;
				inventary.search.pagination.data.start++;

				layoutHandler(false, false, false, false, false, false, false, false, true);

			} else {

				alert(Status.getMessage());

				layoutHandler(false, false, false, false, true, false, false, false, false);

			}

		}, function(response) {

			alert(response.message);

			layoutHandler(false, false, false, false, true, false, false, false, false);

		});

	}

	inventary.search.users = function() {

		searchUsersByName();

	}

	inventary.search.leads = function() {

		searchLeadsByName();

	}

	function modulesHandler() {

		switch (inventary.usersModules.tabs[inventary.usersModules.selected].text) {

			case inventary.usersModules.tabs[0].text:

				inventary.search.users();

				break;

			case inventary.usersModules.tabs[1].text:

				inventary.search.leads();

		}

	}

	inventary.search.update = function() {

		modulesHandler();

	}

	inventary.search.resetAndUpdate = function(limit) {

		inventary.search.pagination = resetPagination();

		inventary.search.pagination.limit = limit;

		inventary.search.update();

	}

	inventary.search.close = function() {

		resetSearch();

	}

	inventary.openCustomerFinder = function(event) {
		inventary.users.event = event;
		inventary.showSearch();
	}

	inventary.updateLeadProperty = function(idLead) {

		$http({
			method: 'POST',
			url: 'application/controllers/inmovables/update_lead_property.php',
			data: {
				idLead: idLead,
				idProperty: inventary.property.idProperty
			},
			headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' }
		}).then(function(response) {
			if (Status.checkHttpStatusCode(response.status)) {
				inventary.leads.close();
				inventary.search.close();
				selectLayoutByName($routeParams['layoutName']);
				alert('El propietario de la propiedad fue actualizado exitosamente');
			} else {
				alert(response.message)
			}
		}, function(response) {
			alert(response.message);
		});

	}

	// ########## Init ##########

	function init() {

		Session.permissions().then(function(response) {

			if (response.isLogged < 1) {
				$location.path('/login');
			}

			if (response.idProfile != 1 && response.isLogged != 3) {
				$location.path('/dashboard');
			}

		});

		Developments.getInventaryData($routeParams['layoutName']).then(function(response) {

			if (Status.checkHttpStatusCode(response.status)) {

				setLayout(response.layout);

				inventary.promos = response.promos;

				inventary.propertyStatus = response.propertyStatus;

				inventary.errorMessage = '';

				layoutHandler(true, false, false, false, false, false, false, false, false);

			} else {

				inventary.errorMessage = 'No encontramos ningún desarrollo con ese nombre';

				layoutHandler(false, true, false, false, false, false, false, false, false);

			}

		}, function(response) {

			inventary.errorMessage = 'Revisa tu conexión a internet o contacta a un administrador';

			layoutHandler(false, true, false, false, false, false, false, false, false);

		});

	}

	init();

});

/********** Navetec **********/

/***** Inventary *****/

app.controller('NvtBetaCtrl', function($scope, $location, $http, Session, Inmovables, Quote, Leads) {

	Session.permissions().then(function(response) {
		if (response.isLogged < 1) {
			$location.path('/login');
		}
		if (response.idProfile != 1 && response.isLogged != 3) {
			$location.path('/dashboard');
		}
	});

	var nvtBeta = this;

	let inmovables = Inmovables;
	let selectedPropertyID = 0;
	let selectedUserID = 0;
	let selectedLeadID = 0;
	let selectedStatus = 0;
	let selectedPropertyStatusID = 0;
	
	nvtBeta.inmovablesData = [];
	nvtBeta.inmovablesClassList = [];
	nvtBeta.activeUsers = [];
	nvtBeta.deletedUsers = [];
	nvtBeta.leadsResult = [];

	nvtBeta.dialogDisplay = 'hide';
	nvtBeta.dialogStatusDisplay = 'hide';
	nvtBeta.nvtBetaListDialogDisplay = 'hide';

	let prepareInmovablesData = function() {
		angular.forEach(nvtBeta.inmovablesData.inmovables, function(property, propertyKey) {
			angular.forEach(nvtBeta.inmovablesData.propertyTypes, function(type, typeKey) {
				if (property.idPropertyType == type.idPropertyType) {
					nvtBeta.inmovablesData.inmovables[propertyKey].type = type.type;
					nvtBeta.inmovablesData.inmovables[propertyKey].cost_m2 = type.cost_m2;
				}
			});
			angular.forEach(nvtBeta.inmovablesData.condos, function(condominium, condominiumKey) {
				if (property.idCondominium == condominium.idCondominium) {
					nvtBeta.inmovablesData.inmovables[propertyKey].condominium = condominium.condominium;
				}
			});
		});
	}

	nvtBeta.setLeadProperty = function(property) {
		nvtBeta.propertyData = property;
		selectedPropertyStatusID = nvtBeta.propertyData.idPropertyStatus;
		selectedPropertyID = nvtBeta.propertyData.idProperty;
		if (selectedPropertyStatusID > 1) {
			nvtBeta.closeDialog();
			nvtBeta.openDialogStatus();
		} else {
			nvtBeta.openDialog();
		}
	}

	nvtBeta.selectUser = function(idUser, index) {
		selectedUserIndex = index;
		nvtBeta.idUser = idUser;
		nvtBeta.collapse(index);
	}

	var getUsers = function() {
		$http({
			method: 'POST',
		    url: 'application/controllers/get_active_users_controller.php',
		    headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' }
		}).then(function(response) {
			nvtBeta.usersResult = response.data;
			if (nvtBeta.usersResult.status >	 0) {
				nvtBeta.getUsersMsgResult = 'No se encontró ningún usuario';
				nvtBeta.usersResult = {};
			} else {
				nvtBeta.getUsersMsgResult = '';
				angular.forEach(nvtBeta.usersResult.users, function(user, key) {
					user.leads = [];
					angular.forEach(nvtBeta.leadsResult, function(lead, key) {
						if (lead[5] == user.idUser) {
							user.leads.push({idLead: lead[0], name: lead[1], last_name: lead[2], idUser: lead[5]});
						}
					});
					user.collapsableBodyClass = 'saufth-collapsable-hide';
					user.collapsableHeaderClass = '';
					nvtBeta.activeUsers.push(user);
				});
			}
			console.log('HTTP_GET_ACTIVE_USERS_OK');
		}, function(response) {
			console.log('HTTP_GET_ACTIVE_USERS_ERR');
		});
	}

	var getLeads = function() {
		Leads.selectActiveLeads().then(function(response) {
			console.log('HTTP_GET_LEADS_OK');
			nvtBeta.leadsResult = response.result;
			getUsers();
		}, function(response) {
			console.log('HTTP_GET_LEADS_ERR');
		});
	}

	var insertLeadPropertyStatus = function() {
		$http({
			method: 'POST',
			url: 'application/controllers/insert_lead_property_status_controller.php',
			data: {
				idUser: selectedUserID,
				idLead: selectedLeadID,
				status: selectedStatus,
				idProperty: selectedPropertyID,
				zoho_id: nvtBeta.propertyData.zoho_id
			},
			headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' }
		}).then(function(response) {
			inmovables.getInmovablesData(2, 7).then(function(response) {
				nvtBeta.inmovablesData = response;
				nvtBeta.inmovablesClassList = inmovables.generateInmovablesClassListInventary(nvtBeta.inmovablesData.inmovables);
				prepareInmovablesData();
				nvtBeta.closeDialogStatus();
				nvtBeta.closeDialog();
			});
			console.log('HTTP_INSERT_LEAD_PROPERTY_STATUS_OK');
		}, function(response) {
			console.log('HTTP_INSERT_LEAD_PROPERTY_STATUS_ERR');
		});
	}

	var deleteLeadPropertyStatus = function() {
		$http({
			method: 'POST',
			url: 'application/controllers/delete_lead_property_status_controller.php',
			data: {
				idUser: selectedUserID,
				idLead: selectedLeadID,
				status: selectedStatus,
				idProperty: selectedPropertyID
			},
			headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' }
		}).then(function(response) {
			inmovables.getInmovablesData(2, 7).then(function(response) {
				nvtBeta.inmovablesData = response;
				nvtBeta.inmovablesClassList = inmovables.generateInmovablesClassListInventary(nvtBeta.inmovablesData.inmovables);
				prepareInmovablesData();
				nvtBeta.closeDialogStatus();
				nvtBeta.closeDialog();
			});
			console.log('HTTP_DELETE_LEAD_PROPERTY_STATUS_OK');
		}, function(response) {
			console.log('HTTP_DELETE_LEAD_PROPERTY_STATUS_ERR');
		});
	}

	var updatePropertyStatus = function() {
		$http({
			method: 'POST',
			url: 'application/controllers/update_property_status_controller.php',
			data: {
				status: selectedStatus,
				idProperty: selectedPropertyID
			},
			headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' }
		}).then(function(response) {
			inmovables.getInmovablesData(2, 7).then(function(response) {
				nvtBeta.inmovablesData = response;
				nvtBeta.inmovablesClassList = inmovables.generateInmovablesClassListInventary(nvtBeta.inmovablesData.inmovables);
				prepareInmovablesData();
				nvtBeta.closeDialogStatus();
			});
			console.log('HTTP_UPDATE_PROPERTY_STATUS_OK');
		}, function(response) {
			console.log('HTTP_UPDATE_PROPERTY_STATUS_ERR');
		});
	}

	nvtBeta.selectLeadPropertyStatus = function(idUser, idLead) {
		selectedUserID = idUser;
		selectedLeadID = idLead;
		nvtBeta.openDialogStatus();
	}

	nvtBeta.setStatus = function(status) {
		selectedStatus = status;
		if (selectedPropertyStatusID > 1) {
			if (selectedStatus > 1) {
				updatePropertyStatus();
			} else {
				deleteLeadPropertyStatus();
			}
		} else {
			insertLeadPropertyStatus();
		}
	}

	nvtBeta.showInmovablesList = function() {
		nvtBeta.openNvtBetaListDialog();
	}

	nvtBeta.openDialog = function() {
		nvtBeta.dialogDisplay = '';
	}

	nvtBeta.closeDialog = function() {
		nvtBeta.dialogDisplay = 'hide';
	}
	
	nvtBeta.openDialogStatus = function() {
		nvtBeta.dialogStatusDisplay = '';
	}

	nvtBeta.closeDialogStatus = function() {
		nvtBeta.dialogStatusDisplay = 'hide';
	}
	
	nvtBeta.openNvtBetaListDialog = function() {
		nvtBeta.nvtBetaListDialogDisplay = '';
	}

	nvtBeta.closeNvtBetaListDialog = function() {
		nvtBeta.nvtBetaListDialogDisplay = 'hide';
	}

	let collapsed = -1;

	nvtBeta.collapse = function(index) {
		if (collapsed < 0) {
			nvtBeta.activeUsers[index].collapsableBodyClass = 'saufth-collapsable-show';
			nvtBeta.activeUsers[index].collapsableHeaderClass = 'saufth-collapsable-header-bg';
			collapsed = index;
		} else if (collapsed == index) {
			nvtBeta.activeUsers[index].collapsableBodyClass = 'saufth-collapsable-hide';
			nvtBeta.activeUsers[index].collapsableHeaderClass = '';
			collapsed = -1;
		} else if (collapsed >= 0) {
			if (index != Object.keys(nvtBeta.activeUsers).length-1) {
				nvtBeta.activeUsers[collapsed].collapsableBodyClass = 'saufth-collapsable-hide';
				nvtBeta.activeUsers[collapsed].collapsableHeaderClass = '';
				nvtBeta.activeUsers[index].collapsableBodyClass = 'saufth-collapsable-show';
				nvtBeta.activeUsers[index].collapsableHeaderClass = 'saufth-collapsable-header-bg';
				collapsed = index;
			} else {
				if (index != collapsed) {
					nvtBeta.activeUsers[collapsed].collapsableBodyClass = 'saufth-collapsable-hide';
					nvtBeta.activeUsers[collapsed].collapsableHeaderClass = '';
					nvtBeta.activeUsers[index].collapsableBodyClass = 'saufth-collapsable-show-last';
					nvtBeta.activeUsers[index].collapsableHeaderClass = 'saufth-collapsable-header-bg';
					collapsed = index;
				} else {
					nvtBeta.activeUsers[index].collapsableBodyClass = 'saufth-collapsable-hide';
					nvtBeta.activeUsers[index].collapsableHeaderClass = '';
					collapsed = -1;
				}
			}
		}
	}
	
	var init = function() {
		inmovables.getInmovablesData(2, 7).then(function(response) {
			nvtBeta.inmovablesData = response;
			nvtBeta.inmovablesClassList = inmovables.generateInmovablesClassListInventary(nvtBeta.inmovablesData.inmovables);
			prepareInmovablesData();
			getLeads();
		});
	}

	init();
});

app.controller('NvtGammaCtrl', function($scope, $location, $http, Session, Inmovables, Leads) {

	Session.permissions().then(function(response) {
		if (response.isLogged < 1) {
			$location.path('/login');
		}
		if (response.idProfile != 1 && response.isLogged != 3) {
			$location.path('/dashboard');
		}
	});

	var nvtGamma = this;

	let inmovables = Inmovables;
	let selectedPropertyID = 0;
	let selectedUserID = 0;
	let selectedLeadID = 0;
	let selectedStatus = 0;
	let selectedPropertyStatusID = 0;
	
	nvtGamma.inmovablesData = [];
	nvtGamma.inmovablesClassList = [];
	nvtGamma.activeUsers = [];
	nvtGamma.deletedUsers = [];
	nvtGamma.leadsResult = [];

	nvtGamma.dialogDisplay = 'hide';
	nvtGamma.dialogStatusDisplay = 'hide';
	nvtGamma.nvtGammaListDialogDisplay = 'hide';

	let prepareInmovablesData = function() {
		angular.forEach(nvtGamma.inmovablesData.inmovables, function(property, propertyKey) {
			angular.forEach(nvtGamma.inmovablesData.propertyTypes, function(type, typeKey) {
				if (property.idPropertyType == type.idPropertyType) {
					nvtGamma.inmovablesData.inmovables[propertyKey].type = type.type;
				}
			});
			angular.forEach(nvtGamma.inmovablesData.condos, function(condominium, condominiumKey) {
				if (property.idCondominium == condominium.idCondominium) {
					nvtGamma.inmovablesData.inmovables[propertyKey].condominium = condominium.condominium;
				}
			});
		});
		console.log(nvtGamma.inmovablesData.inmovables);
	}

	nvtGamma.setLeadProperty = function(property) {
		nvtGamma.propertyData = property;
		selectedPropertyStatusID = nvtGamma.propertyData.idPropertyStatus;
		selectedPropertyID = nvtGamma.propertyData.idProperty;
		if (selectedPropertyStatusID > 1) {
			nvtGamma.closeDialog();
			nvtGamma.openDialogStatus();
		} else {
			nvtGamma.openDialog();
		}
	}

	nvtGamma.selectUser = function(idUser, index) {
		selectedUserIndex = index;
		nvtGamma.idUser = idUser;
		nvtGamma.collapse(index);
	}

	var getUsers = function() {
		$http({
			method: 'POST',
				url: 'application/controllers/get_active_users_controller.php',
				headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' }
		}).then(function(response) {
			nvtGamma.usersResult = response.data;
			if (nvtGamma.usersResult.status >	 0) {
				nvtGamma.getUsersMsgResult = 'No se encontró ningún usuario';
				nvtGamma.usersResult = {};
			} else {
				nvtGamma.getUsersMsgResult = '';
				angular.forEach(nvtGamma.usersResult.users, function(user, key) {
					user.leads = [];
					angular.forEach(nvtGamma.leadsResult, function(lead, key) {
						if (lead[5] == user.idUser) {
							user.leads.push({idLead: lead[0], name: lead[1], last_name: lead[2], idUser: lead[5]});
						}
					});
					user.collapsableBodyClass = 'saufth-collapsable-hide';
					user.collapsableHeaderClass = '';
					nvtGamma.activeUsers.push(user);
				});
			}
			console.log('HTTP_GET_ACTIVE_USERS_OK');
		}, function(response) {
			console.log('HTTP_GET_ACTIVE_USERS_ERR');
		});
	}

	var getLeads = function() {
		Leads.selectActiveLeads().then(function(response) {
			console.log('HTTP_GET_LEADS_OK');
			nvtGamma.leadsResult = response.result;
			getUsers();
		}, function(response) {
			console.log('HTTP_GET_LEADS_ERR');
		});
	}

	var insertLeadPropertyStatus = function() {
		$http({
			method: 'POST',
			url: 'application/controllers/insert_lead_property_status_controller.php',
			data: {
				idUser: selectedUserID,
				idLead: selectedLeadID,
				status: selectedStatus,
				idProperty: selectedPropertyID,
				zoho_id: nvtGamma.propertyData.zoho_id
			},
			headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' }
		}).then(function(response) {
			inmovables.getInmovablesData(1, 5).then(function(response) {
				nvtGamma.inmovablesData = response;
				nvtGamma.inmovablesClassList = inmovables.generateInmovablesClassListInventary(nvtGamma.inmovablesData.inmovables);
				prepareInmovablesData();
				nvtGamma.closeDialogStatus();
				nvtGamma.closeDialog();
			});
			console.log('HTTP_INSERT_LEAD_PROPERTY_STATUS_OK');
		}, function(response) {
			console.log('HTTP_INSERT_LEAD_PROPERTY_STATUS_ERR');
		});
	}

	var deleteLeadPropertyStatus = function() {
		$http({
			method: 'POST',
			url: 'application/controllers/delete_lead_property_status_controller.php',
			data: {
				idUser: selectedUserID,
				idLead: selectedLeadID,
				status: selectedStatus,
				idProperty: selectedPropertyID
			},
			headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' }
		}).then(function(response) {
			inmovables.getInmovablesData(1, 5).then(function(response) {
				nvtGamma.inmovablesData = response;
				nvtGamma.inmovablesClassList = inmovables.generateInmovablesClassListInventary(nvtGamma.inmovablesData.inmovables);
				prepareInmovablesData();
				nvtGamma.closeDialogStatus();
				nvtGamma.closeDialog();
			});
			console.log('HTTP_DELETE_LEAD_PROPERTY_STATUS_OK');
		}, function(response) {
			console.log('HTTP_DELETE_LEAD_PROPERTY_STATUS_ERR');
		});
	}

	var updatePropertyStatus = function() {
		$http({
			method: 'POST',
			url: 'application/controllers/update_property_status_controller.php',
			data: {
				status: selectedStatus,
				idProperty: selectedPropertyID
			},
			headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' }
		}).then(function(response) {
			inmovables.getInmovablesData(1, 5).then(function(response) {
				nvtGamma.inmovablesData = response;
				nvtGamma.inmovablesClassList = inmovables.generateInmovablesClassListInventary(nvtGamma.inmovablesData.inmovables);
				prepareInmovablesData();
				nvtGamma.closeDialogStatus();
			});
			console.log('HTTP_UPDATE_PROPERTY_STATUS_OK');
		}, function(response) {
			console.log('HTTP_UPDATE_PROPERTY_STATUS_ERR');
		});
	}

	nvtGamma.selectLeadPropertyStatus = function(idUser, idLead) {
		selectedUserID = idUser;
		selectedLeadID = idLead;
		nvtGamma.openDialogStatus();
	}

	nvtGamma.setStatus = function(status) {
		selectedStatus = status;
		if (selectedPropertyStatusID > 1) {
			if (selectedStatus > 1) {
				updatePropertyStatus();
			} else {
				deleteLeadPropertyStatus();
			}
		} else {
			insertLeadPropertyStatus();
		}
	}

	nvtGamma.showInmovablesList = function() {
		nvtGamma.openNvtGammaListDialog();
	}

	nvtGamma.openDialog = function() {
		nvtGamma.dialogDisplay = '';
	}

	nvtGamma.closeDialog = function() {
		nvtGamma.dialogDisplay = 'hide';
	}
	
	nvtGamma.openDialogStatus = function() {
		nvtGamma.dialogStatusDisplay = '';
	}

	nvtGamma.closeDialogStatus = function() {
		nvtGamma.dialogStatusDisplay = 'hide';
	}
	
	nvtGamma.openNvtGammaListDialog = function() {
		nvtGamma.nvtGammaListDialogDisplay = '';
	}

	nvtGamma.closeNvtGammaListDialog = function() {
		nvtGamma.nvtGammaListDialogDisplay = 'hide';
	}

	let collapsed = -1;

	nvtGamma.collapse = function(index) {
		if (collapsed < 0) {
			nvtGamma.activeUsers[index].collapsableBodyClass = 'saufth-collapsable-show';
			nvtGamma.activeUsers[index].collapsableHeaderClass = 'saufth-collapsable-header-bg';
			collapsed = index;
		} else if (collapsed == index) {
			nvtGamma.activeUsers[index].collapsableBodyClass = 'saufth-collapsable-hide';
			nvtGamma.activeUsers[index].collapsableHeaderClass = '';
			collapsed = -1;
		} else if (collapsed >= 0) {
			if (index != Object.keys(nvtGamma.activeUsers).length-1) {
				nvtGamma.activeUsers[collapsed].collapsableBodyClass = 'saufth-collapsable-hide';
				nvtGamma.activeUsers[collapsed].collapsableHeaderClass = '';
				nvtGamma.activeUsers[index].collapsableBodyClass = 'saufth-collapsable-show';
				nvtGamma.activeUsers[index].collapsableHeaderClass = 'saufth-collapsable-header-bg';
				collapsed = index;
			} else {
				if (index != collapsed) {
					nvtGamma.activeUsers[collapsed].collapsableBodyClass = 'saufth-collapsable-hide';
					nvtGamma.activeUsers[collapsed].collapsableHeaderClass = '';
					nvtGamma.activeUsers[index].collapsableBodyClass = 'saufth-collapsable-show-last';
					nvtGamma.activeUsers[index].collapsableHeaderClass = 'saufth-collapsable-header-bg';
					collapsed = index;
				} else {
					nvtGamma.activeUsers[index].collapsableBodyClass = 'saufth-collapsable-hide';
					nvtGamma.activeUsers[index].collapsableHeaderClass = '';
					collapsed = -1;
				}
			}
		}
	}
	
	var init = function() {
		inmovables.getInmovablesData(1, 5).then(function(response) {
			nvtGamma.inmovablesData = response;
			nvtGamma.inmovablesClassList = inmovables.generateInmovablesClassListInventary(nvtGamma.inmovablesData.inmovables);
			prepareInmovablesData();
			getLeads();
		});
	}

	init();
	
});

app.controller('NvtGammaDosCtrl', function($scope, $rootScope, $location, $http, Session, Inmovables, Leads) {

	Session.permissions().then(function(response) {
		if (response.isLogged < 1) {
			$location.path('/login');
		}
		if (response.idProfile != 1 && response.isLogged != 3) {
			$location.path('/dashboard');
		}
	});

	var nvtGammaDos = this;

	let inmovables = Inmovables;
	let selectedPropertyID = 0;
	let selectedUserID = 0;
	let selectedLeadID = 0;
	let selectedStatus = 0;
	let selectedPropertyStatusID = 0;

	nvtGammaDos.propertyStatus = [
		'Ningino',
		'Disponible',
		'En espera',
		'Apartado',
		'Enganchado',
		'Vendido'
	];
	
	nvtGammaDos.inmovablesData = [];
	nvtGammaDos.inmovablesClassList = [];
	nvtGammaDos.activeUsers = [];
	nvtGammaDos.deletedUsers = [];
	nvtGammaDos.leadsResult = [];

	nvtGammaDos.dialogDisplay = 'hide';
	nvtGammaDos.dialogStatusDisplay = 'hide';
	nvtGammaDos.nvtGammaDosListDialogDisplay = 'hide';

	let increaseCostHandler = function(key) {

		if (nvtGammaDos.inmovablesData.inmovables[key].cost_m2_increase != null) {

			nvtGammaDos.inmovablesData.inmovables[key].cost_m2_increase.increased = nvtGammaDos.inmovablesData.inmovables[key].cost.m2 * nvtGammaDos.inmovablesData.inmovables[key].cost_m2_increase.value;
			nvtGammaDos.inmovablesData.inmovables[key].cost_m2_increase.total_increased = nvtGammaDos.inmovablesData.inmovables[key].cost.m2 + nvtGammaDos.inmovablesData.inmovables[key].cost_m2_increase.increased;
			nvtGammaDos.inmovablesData.inmovables[key].cost_m2_increase.property_cost = nvtGammaDos.inmovablesData.inmovables[key].cost_m2_increase.total_increased * nvtGammaDos.inmovablesData.inmovables[key].area;

			nvtGammaDos.inmovablesData.inmovables[key].cost.final = {
				m2: nvtGammaDos.inmovablesData.inmovables[key].cost_m2_increase.total_increased,
				property: nvtGammaDos.inmovablesData.inmovables[key].cost_m2_increase.property_cost
			};

			nvtGammaDos.inmovablesData.inmovables[key].hook.increased = nvtGammaDos.inmovablesData.inmovables[key].cost_m2_increase.property_cost * nvtGammaDos.inmovablesData.inmovables[key].hook.value;
			nvtGammaDos.inmovablesData.inmovables[key].hook.final = nvtGammaDos.inmovablesData.inmovables[key].hook.increased;

			nvtGammaDos.inmovablesData.inmovables[key].financing.increased = nvtGammaDos.inmovablesData.inmovables[key].cost_m2_increase.property_cost - nvtGammaDos.inmovablesData.inmovables[key].hook.increased;
			nvtGammaDos.inmovablesData.inmovables[key].financing.final = nvtGammaDos.inmovablesData.inmovables[key].financing.increased;

		} else {

			nvtGammaDos.inmovablesData.inmovables[key].cost_m2_increase = {
				id: 0,
				value: 0,
				increased: 0,
				total_increased: 0,
				property_cost: 0
			};

			nvtGammaDos.inmovablesData.inmovables[key].cost.final = {
				m2: nvtGammaDos.inmovablesData.inmovables[key].cost.m2,
				property: nvtGammaDos.inmovablesData.inmovables[key].cost.property
			};

			nvtGammaDos.inmovablesData.inmovables[key].hook.increased = 0;
			nvtGammaDos.inmovablesData.inmovables[key].hook.final = nvtGammaDos.inmovablesData.inmovables[key].hook.base;

			nvtGammaDos.inmovablesData.inmovables[key].financing.increased = 0;
			nvtGammaDos.inmovablesData.inmovables[key].financing.final = nvtGammaDos.inmovablesData.inmovables[key].financing.total; 

		}
	}

	let discountCostHandler = function(key) {

		if (nvtGammaDos.inmovablesData.inmovables[key].cost_m2_discount != null) {

			nvtGammaDos.inmovablesData.inmovables[key].cost_m2_discount.discounted = nvtGammaDos.inmovablesData.inmovables[key].cost.final.m2 * nvtGammaDos.inmovablesData.inmovables[key].cost_m2_discount.value;
			nvtGammaDos.inmovablesData.inmovables[key].cost_m2_discount.total_discounted = nvtGammaDos.inmovablesData.inmovables[key].cost.final.m2 - nvtGammaDos.inmovablesData.inmovables[key].cost_m2_discount.discounted;
			nvtGammaDos.inmovablesData.inmovables[key].cost_m2_discount.property_cost = nvtGammaDos.inmovablesData.inmovables[key].cost_m2_discount.total_discounted * nvtGammaDos.inmovablesData.inmovables[key].area;

			nvtGammaDos.inmovablesData.inmovables[key].cost.final.m2 = nvtGammaDos.inmovablesData.inmovables[key].cost_m2_discount.total_discounted;
			nvtGammaDos.inmovablesData.inmovables[key].cost.final.property = nvtGammaDos.inmovablesData.inmovables[key].cost_m2_discount.property_cost;

			nvtGammaDos.inmovablesData.inmovables[key].hook.decreased = nvtGammaDos.inmovablesData.inmovables[key].cost_m2_discount.property_cost * nvtGammaDos.inmovablesData.inmovables[key].hook.value;
			nvtGammaDos.inmovablesData.inmovables[key].hook.final = nvtGammaDos.inmovablesData.inmovables[key].hook.decreased;

			nvtGammaDos.inmovablesData.inmovables[key].financing.decreased = nvtGammaDos.inmovablesData.inmovables[key].cost_m2_discount.property_cost - nvtGammaDos.inmovablesData.inmovables[key].hook.decreased;
			nvtGammaDos.inmovablesData.inmovables[key].financing.final = nvtGammaDos.inmovablesData.inmovables[key].financing.decreased;

		} else {

			nvtGammaDos.inmovablesData.inmovables[key].cost_m2_discount = {
				id: 0,
				value: 0,
				discounted: 0,
				total_discounted: 0,
				property_cost: 0
			};

			nvtGammaDos.inmovablesData.inmovables[key].hook.decreased = 0;

			nvtGammaDos.inmovablesData.inmovables[key].financing.decreased = 0;

		}
	}

	let discountHookHandler = function(key) {

		nvtGammaDos.inmovablesData.inmovables[key].hook.total = nvtGammaDos.inmovablesData.inmovables[key].hook.final;

		if (nvtGammaDos.inmovablesData.inmovables[key].hook_discount != null) {

			nvtGammaDos.inmovablesData.inmovables[key].hook.discounted = nvtGammaDos.inmovablesData.inmovables[key].hook.final * nvtGammaDos.inmovablesData.inmovables[key].hook_discount.value;
			nvtGammaDos.inmovablesData.inmovables[key].hook.final = nvtGammaDos.inmovablesData.inmovables[key].hook.total - nvtGammaDos.inmovablesData.inmovables[key].hook.discounted;

			nvtGammaDos.inmovablesData.inmovables[key].import = nvtGammaDos.inmovablesData.inmovables[key].financing.final + nvtGammaDos.inmovablesData.inmovables[key].hook.final;

		} else {

			nvtGammaDos.inmovablesData.inmovables[key].hook_discount = {
				id: 0,
				value: 0
			};

			nvtGammaDos.inmovablesData.inmovables[key].hook.discounted = 0;

			nvtGammaDos.inmovablesData.inmovables[key].import = nvtGammaDos.inmovablesData.inmovables[key].financing.final;

		}
	}

	let prepareInmovablesData = function() {

		for (let indexProperty = 0; indexProperty < nvtGammaDos.inmovablesData.inmovables.length; indexProperty++) {

			for (let indexType = 0; indexType < nvtGammaDos.inmovablesData.propertyTypes.length; indexType++) {

				if (nvtGammaDos.inmovablesData.inmovables[indexProperty].idPropertyType == nvtGammaDos.inmovablesData.propertyTypes[indexType].idPropertyType) {

					nvtGammaDos.inmovablesData.inmovables[indexProperty].type = nvtGammaDos.inmovablesData.propertyTypes[indexType].type;

					nvtGammaDos.inmovablesData.inmovables[indexProperty].cost = {
						m2: nvtGammaDos.inmovablesData.propertyTypes[indexType].cost_m2,
						property: nvtGammaDos.inmovablesData.propertyTypes[indexType].cost_m2 * nvtGammaDos.inmovablesData.inmovables[indexProperty].area,
					};

					nvtGammaDos.inmovablesData.inmovables[indexProperty].hook.base = nvtGammaDos.inmovablesData.inmovables[indexProperty].cost.property * nvtGammaDos.inmovablesData.inmovables[indexProperty].hook.value;
					nvtGammaDos.inmovablesData.inmovables[indexProperty].hook.final = nvtGammaDos.inmovablesData.inmovables[indexProperty].hook.base;

					nvtGammaDos.inmovablesData.inmovables[indexProperty].financing = {
						total: nvtGammaDos.inmovablesData.inmovables[indexProperty].cost.property - nvtGammaDos.inmovablesData.inmovables[indexProperty].hook.base
					}

					break;

				}

			}

			for (let indexCondominium = 0; indexCondominium < nvtGammaDos.inmovablesData.condos.length; indexCondominium++) {

				if (nvtGammaDos.inmovablesData.inmovables[indexProperty].idCondominium == nvtGammaDos.inmovablesData.condos[indexCondominium].idCondominium) {

					nvtGammaDos.inmovablesData.inmovables[indexProperty].condominium = nvtGammaDos.inmovablesData.condos[indexCondominium].condominium;

					break;

				}

			}

			increaseCostHandler(indexProperty);
			discountCostHandler(indexProperty);
			discountHookHandler(indexProperty);

		}
	}

	nvtGammaDos.setLeadProperty = function(property) {
		nvtGammaDos.propertyData = property;
		selectedPropertyStatusID = nvtGammaDos.propertyData.idPropertyStatus;
		selectedPropertyID = nvtGammaDos.propertyData.idProperty;
		if (selectedPropertyStatusID > 1) {
			nvtGammaDos.closeDialog();
			nvtGammaDos.openDialogStatus();
		} else {
			nvtGammaDos.openDialog();
		}
	}

	nvtGammaDos.selectUser = function(idUser, index) {
		selectedUserIndex = index;
		nvtGammaDos.idUser = idUser;
		nvtGammaDos.collapse(index);
	}

	var getUsers = function() {
		$http({
			method: 'POST',
				url: 'application/controllers/get_active_users_controller.php',
				headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' }
		}).then(function(response) {
			nvtGammaDos.usersResult = response.data;
			if (nvtGammaDos.usersResult.status >	 0) {
				nvtGammaDos.getUsersMsgResult = 'No se encontró ningún usuario';
				nvtGammaDos.usersResult = {};
			} else {
				nvtGammaDos.getUsersMsgResult = '';
				angular.forEach(nvtGammaDos.usersResult.users, function(user, key) {
					user.leads = [];
					angular.forEach(nvtGammaDos.leadsResult, function(lead, key) {
						if (lead[5] == user.idUser) {
							user.leads.push({idLead: lead[0], name: lead[1], last_name: lead[2], idUser: lead[5]});
						}
					});
					user.collapsableBodyClass = 'saufth-collapsable-hide';
					user.collapsableHeaderClass = '';
					nvtGammaDos.activeUsers.push(user);
				});
			}
			console.log('HTTP_GET_ACTIVE_USERS_OK');
		}, function(response) {
			console.log('HTTP_GET_ACTIVE_USERS_ERR');
		});
	}

	var getLeads = function() {
		Leads.selectActiveLeads().then(function(response) {
			console.log('HTTP_GET_LEADS_OK');
			nvtGammaDos.leadsResult = response.result;
			getUsers();
		}, function(response) {
			console.log('HTTP_GET_LEADS_ERR');
		});
	}

	var insertLeadPropertyStatus = function() {
		$http({
			method: 'POST',
			url: 'application/controllers/insert_lead_property_status_controller.php',
			data: {
				idUser: selectedUserID,
				idLead: selectedLeadID,
				lead_name: selectedLeadName,
				status: selectedStatus,
				idProperty: selectedPropertyID,
				zoho_id: nvtGammaDos.propertyData.zoho_id
			},
			headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' }
		}).then(function(response) {
			inmovables.getInmovablesData(7, 8).then(function(response) {
				nvtGammaDos.inmovablesData = response;
				nvtGammaDos.inmovablesClassList = inmovables.generateInmovablesClassListInventary(nvtGammaDos.inmovablesData.inmovables);
				prepareInmovablesData();
				nvtGammaDos.closeDialogStatus();
				nvtGammaDos.closeDialog();
			});
			console.log('HTTP_INSERT_LEAD_PROPERTY_STATUS_OK');
		}, function(response) {
			console.log('HTTP_INSERT_LEAD_PROPERTY_STATUS_ERR');
		});
	}

	var deleteLeadPropertyStatus = function() {
		$http({
			method: 'POST',
			url: 'application/controllers/delete_lead_property_status_controller.php',
			data: {
				idUser: selectedUserID,
				idLead: selectedLeadID,
				status: selectedStatus,
				idProperty: selectedPropertyID,
				zoho_id: nvtGammaDos.propertyData.zoho_id
			},
			headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' }
		}).then(function(response) {
			inmovables.getInmovablesData(7, 8).then(function(response) {
				nvtGammaDos.inmovablesData = response;
				nvtGammaDos.inmovablesClassList = inmovables.generateInmovablesClassListInventary(nvtGammaDos.inmovablesData.inmovables);
				prepareInmovablesData();
				nvtGammaDos.closeDialogStatus();
				nvtGammaDos.closeDialog();
			});
			console.log('HTTP_DELETE_LEAD_PROPERTY_STATUS_OK');
		}, function(response) {
			console.log('HTTP_DELETE_LEAD_PROPERTY_STATUS_ERR');
		});
	}

	var updatePropertyStatus = function() {
		$http({
			method: 'POST',
			url: 'application/controllers/update_property_status_controller.php',
			data: {
				status: selectedStatus,
				idProperty: selectedPropertyID
			},
			headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' }
		}).then(function(response) {
			inmovables.getInmovablesData(7, 8).then(function(response) {
				nvtGammaDos.inmovablesData = response;
				nvtGammaDos.inmovablesClassList = inmovables.generateInmovablesClassListInventary(nvtGammaDos.inmovablesData.inmovables);
				prepareInmovablesData();
				nvtGammaDos.closeDialogStatus();
			});
			console.log('HTTP_UPDATE_PROPERTY_STATUS_OK');
		}, function(response) {
			console.log('HTTP_UPDATE_PROPERTY_STATUS_ERR');
		});
	}

	nvtGammaDos.selectLeadPropertyStatus = function(idUser, idLead, name, last_name) {
		selectedUserID = idUser;
		selectedLeadID = idLead;
		selectedLeadName = name + ' ' + last_name;
		nvtGammaDos.openDialogStatus();
	}

	nvtGammaDos.setStatus = function(status) {
		selectedStatus = status;
		if (selectedPropertyStatusID > 1) {
			if (selectedStatus > 1) {
				updatePropertyStatus();
			} else {
				deleteLeadPropertyStatus();
			}
		} else {
			insertLeadPropertyStatus();
		}
	}

	nvtGammaDos.showInmovablesList = function() {
		nvtGammaDos.openNvtGammaDosListDialog();
	}

	nvtGammaDos.openDialog = function() {
		nvtGammaDos.dialogDisplay = '';
	}

	nvtGammaDos.closeDialog = function() {
		nvtGammaDos.dialogDisplay = 'hide';
	}

	nvtGammaDos.openDialogStatus = function() {
		nvtGammaDos.dialogStatusDisplay = '';
	}

	nvtGammaDos.closeDialogStatus = function() {
		nvtGammaDos.dialogStatusDisplay = 'hide';
	}

	nvtGammaDos.openNvtGammaDosListDialog = function() {
		nvtGammaDos.nvtGammaDosListDialogDisplay = '';
	}

	nvtGammaDos.closeNvtGammaDosListDialog = function() {
		nvtGammaDos.nvtGammaDosListDialogDisplay = 'hide';
	}

	nvtGammaDos.openList = function() {
		$rootScope.rootInmovables.options.modal_display = '';
		$rootScope.is_scrollin = 'no-scrolling';
	}

	nvtGammaDos.closeList = function() {
		$rootScope.rootInmovables.options.modal_display = 'hide';
		$rootScope.is_scrollin = '';
	}

	nvtGammaDos.openEditPropertyWindow = function(property) {

		$rootScope.rootInmovables.edit.view = '';
		// $rootScope.is_scrollin = 'no-scrolling';

		$rootScope.rootInmovables.selected.id = property.idProperty;
		$rootScope.rootInmovables.selected.idClass = property.property_class;
		$rootScope.rootInmovables.selected.number = property.number;
		$rootScope.rootInmovables.selected.area = property.area;
		$rootScope.rootInmovables.selected.reference = property.reference;
		$rootScope.rootInmovables.selected.idCondominium = property.idCondominium;
		$rootScope.rootInmovables.selected.condominium = property.condominium;
		$rootScope.rootInmovables.selected.idType = property.idPropertyType;
		$rootScope.rootInmovables.selected.type = property.type;
		$rootScope.rootInmovables.selected.idStatus = property.idPropertyStatus;
		$rootScope.rootInmovables.selected.zoho_id = property.zoho_id;

		$rootScope.rootInmovables.selected.idPromoIncrease = property.cost_m2_increase.id;
		$rootScope.rootInmovables.selected.valuePromoIncrease = property.cost_m2_increase.value;
		$rootScope.rootInmovables.selected.idPromoDiscount = property.cost_m2_discount.id;
		$rootScope.rootInmovables.selected.valuePromoDiscount = property.cost_m2_discount.value;
		$rootScope.rootInmovables.selected.idPromoHook = property.hook.id;
		$rootScope.rootInmovables.selected.valuePromoHook = property.hook.value;
		$rootScope.rootInmovables.selected.idPromoHookDiscount = property.hook_discount.id;
		$rootScope.rootInmovables.selected.valuePromoHookDiscount = property.hook_discount.value;

		$rootScope.rootInmovables.edit.models.idPromoIncrease = property.cost_m2_increase.id;
		$rootScope.rootInmovables.edit.models.valuePromoIncrease = property.cost_m2_increase.value;
		$rootScope.rootInmovables.edit.models.idPromoDiscount = property.cost_m2_discount.id;
		$rootScope.rootInmovables.edit.models.valuePromoDiscount = property.cost_m2_discount.value;
		$rootScope.rootInmovables.edit.models.idPromoHook = property.hook.id;
		$rootScope.rootInmovables.edit.models.valuePromoHook = property.hook.value;
		$rootScope.rootInmovables.edit.models.idPromoHookDiscount = property.hook_discount.id;
		$rootScope.rootInmovables.edit.models.valuePromoHookDiscount = property.hook_discount.value;

	}

	nvtGammaDos.hideEditPropertyWindow = function() {

		$rootScope.rootInmovables.edit.view = 'hide';
		// $rootScope.is_scrollin = '';

		$rootScope.rootInmovables.selected.id = 0;
		$rootScope.rootInmovables.selected.idClass = 0;
		$rootScope.rootInmovables.selected.number = '';
		$rootScope.rootInmovables.selected.area = 0;
		$rootScope.rootInmovables.selected.reference = '';
		$rootScope.rootInmovables.selected.idCondominium = 0;
		$rootScope.rootInmovables.selected.condominium = '';
		$rootScope.rootInmovables.selected.idType = 0;
		$rootScope.rootInmovables.selected.type = '';
		$rootScope.rootInmovables.selected.idStatus = 0;

		$rootScope.rootInmovables.selected.idPromoIncrease = 0;
		$rootScope.rootInmovables.selected.idPromoDiscount = 0;
		$rootScope.rootInmovables.selected.idPromoHook = 0;
		$rootScope.rootInmovables.selected.idPromoHookDiscount = 0;

		$rootScope.rootInmovables.edit.models.idPromoIncrease = 0;
		$rootScope.rootInmovables.edit.models.idPromoDiscount = 0;
		$rootScope.rootInmovables.edit.models.idPromoHook = 0;
		$rootScope.rootInmovables.edit.models.idPromoHookDiscount = 0;

	}

	nvtGammaDos.updateIncrease = function(idProperty, idPromo, currentPromo, value, type) {
		$http({
			method: 'POST',
			url: 'application/controllers/update_increase.php',
			data: {
				idProperty: idProperty,
				idPromo: idPromo,
				currentPromo: currentPromo,
				value: value,
				type: type,
				id: $rootScope.rootInmovables.selected.zoho_id
			},
			headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' }
		}).then(function(response) {
			console.log('HTTP_UPDATE_INCREASE_OK');
			inmovables.getInmovablesData(7, 8).then(function(response) {
				nvtGammaDos.inmovablesData = response;
				nvtGammaDos.inmovablesClassList = inmovables.generateInmovablesClassListInventary(nvtGammaDos.inmovablesData.inmovables);
				prepareInmovablesData();
			});
		}, function(response) {
			console.log('HTTP_UPDATE_INCREASE_ERR');
		});
	}

	let collapsed = -1;

	nvtGammaDos.collapse = function(index) {
		if (collapsed < 0) {
			nvtGammaDos.activeUsers[index].collapsableBodyClass = 'saufth-collapsable-show';
			nvtGammaDos.activeUsers[index].collapsableHeaderClass = 'saufth-collapsable-header-bg';
			collapsed = index;
		} else if (collapsed == index) {
			nvtGammaDos.activeUsers[index].collapsableBodyClass = 'saufth-collapsable-hide';
			nvtGammaDos.activeUsers[index].collapsableHeaderClass = '';
			collapsed = -1;
		} else if (collapsed >= 0) {
			if (index != Object.keys(nvtGammaDos.activeUsers).length-1) {
				nvtGammaDos.activeUsers[collapsed].collapsableBodyClass = 'saufth-collapsable-hide';
				nvtGammaDos.activeUsers[collapsed].collapsableHeaderClass = '';
				nvtGammaDos.activeUsers[index].collapsableBodyClass = 'saufth-collapsable-show';
				nvtGammaDos.activeUsers[index].collapsableHeaderClass = 'saufth-collapsable-header-bg';
				collapsed = index;
			} else {
				if (index != collapsed) {
					nvtGammaDos.activeUsers[collapsed].collapsableBodyClass = 'saufth-collapsable-hide';
					nvtGammaDos.activeUsers[collapsed].collapsableHeaderClass = '';
					nvtGammaDos.activeUsers[index].collapsableBodyClass = 'saufth-collapsable-show-last';
					nvtGammaDos.activeUsers[index].collapsableHeaderClass = 'saufth-collapsable-header-bg';
					collapsed = index;
				} else {
					nvtGammaDos.activeUsers[index].collapsableBodyClass = 'saufth-collapsable-hide';
					nvtGammaDos.activeUsers[index].collapsableHeaderClass = '';
					collapsed = -1;
				}
			}
		}
	}

	var init = function() {
		inmovables.getInmovablesData(7, 8).then(function(response) {
			nvtGammaDos.inmovablesData = response;
			nvtGammaDos.inmovablesClassList = inmovables.generateInmovablesClassListInventary(nvtGammaDos.inmovablesData.inmovables);
			prepareInmovablesData();
			getLeads();
		});
	}

	init();
	
});

app.controller('NvtSantaRosaCtrl', function($scope, $location, $http, Session, Inmovables, Quote, Leads) {

	Session.permissions().then(function(response) {
		if (response.isLogged < 1) {
			$location.path('/login');
		}
		if (response.idProfile != 1 && response.isLogged != 3) {
			$location.path('/dashboard');
		}
	});

	var nvtSantaRosa = this;

	let inmovables = Inmovables;
	let quoteResult = {};
	let selectedPropertyID = 0;
	let selectedUserID = 0;
	let selectedLeadID = 0;
	let selectedStatus = 0;
	let selectedPropertyStatusID = 0;
	
	nvtSantaRosa.inmovablesData = [];
	nvtSantaRosa.inmovablesClassList = [];
	nvtSantaRosa.activeUsers = [];
	nvtSantaRosa.deletedUsers = [];
	nvtSantaRosa.leadsResult = [];
	nvtSantaRosa.propertyData = [];

	nvtSantaRosa.advisersDialogDisplay = 'hide';
	nvtSantaRosa.dialogStatusDisplay = 'hide';
	nvtSantaRosa.nvtSantaRosaListDialogDisplay = 'hide';
	nvtSantaRosa.optionsDialogDisplay = 'hide';

	let prepareInmovablesData = function() {
		angular.forEach(nvtSantaRosa.inmovablesData.inmovables, function(property, propertyKey) {
			angular.forEach(nvtSantaRosa.inmovablesData.propertyTypes, function(type, typeKey) {
				if (property.idPropertyType == type.idPropertyType) {
					nvtSantaRosa.inmovablesData.inmovables[propertyKey].type = type.type;
					nvtSantaRosa.inmovablesData.inmovables[propertyKey].cost_m2 = type.cost_m2;
				}
			});
			angular.forEach(nvtSantaRosa.inmovablesData.condos, function(condominium, condominiumKey) {
				if (property.idCondominium == condominium.idCondominium) {
					nvtSantaRosa.inmovablesData.inmovables[propertyKey].condominium = condominium.condominium;
				}
			});
		});
	}

	nvtSantaRosa.setLeadProperty = function(property) {
		nvtSantaRosa.propertyData = property;
		selectedPropertyStatusID = nvtSantaRosa.propertyData.idPropertyStatus;
		selectedPropertyID = nvtSantaRosa.propertyData.idProperty;
		if (selectedPropertyStatusID > 1) {
			nvtSantaRosa.closeAdvisersDialog();
			nvtSantaRosa.openDialogStatus();
		} else {
			nvtSantaRosa.openAdvisersDialog();
		}
	}

	nvtSantaRosa.selectUser = function(idUser, index) {
		selectedUserIndex = index;
		nvtSantaRosa.idUser = idUser;
		nvtSantaRosa.collapse(index);
	}

	var getUsers = function() {
		$http({
			method: 'POST',
				url: 'application/controllers/get_active_users_controller.php',
				headers: {'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' }
		}).then(function(response) {
			nvtSantaRosa.usersResult = response.data;
			if (nvtSantaRosa.usersResult.status >	 0) {
				nvtSantaRosa.getUsersMsgResult = 'No se encontró ningún usuario';
				nvtSantaRosa.usersResult = {};
			} else {
				nvtSantaRosa.getUsersMsgResult = '';
				angular.forEach(nvtSantaRosa.usersResult.users, function(user, key) {
					user.leads = [];
					angular.forEach(nvtSantaRosa.leadsResult, function(lead, key) {
						if (lead[5] == user.idUser) {
							user.leads.push({idLead: lead[0], name: lead[1], last_name: lead[2], idUser: lead[5]});
						}
					});
					user.collapsableBodyClass = 'saufth-collapsable-hide';
					user.collapsableHeaderClass = '';
					nvtSantaRosa.activeUsers.push(user);
				});
			}
			console.log('HTTP_GET_ACTIVE_USERS_OK');
		}, function(response) {
			console.log('HTTP_GET_ACTIVE_USERS_ERR');
		});
	}

	var getLeads = function() {
		Leads.selectActiveLeads().then(function(response) {
			console.log('HTTP_GET_LEADS_OK');
			nvtSantaRosa.leadsResult = response.result;
			getUsers();
		}, function(response) {
			console.log('HTTP_GET_LEADS_ERR');
		});
	}

	var insertLeadPropertyStatus = function() {
		$http({
			method: 'POST',
			url: 'application/controllers/insert_lead_property_status_controller.php',
			data: {
				idUser: selectedUserID,
				idLead: selectedLeadID,
				status: selectedStatus,
				idProperty: selectedPropertyID,
				zoho_id: nvtSantaRosa.propertyData.zoho_id
			},
			headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' }
		}).then(function(response) {
			inmovables.getInmovablesData(3, 4).then(function(response) {
				nvtSantaRosa.inmovablesData = response;
				nvtSantaRosa.inmovablesClassList = inmovables.generateInmovablesClassListInventary(nvtSantaRosa.inmovablesData.inmovables);
				prepareInmovablesData();
				nvtSantaRosa.closeDialogStatus();
				nvtSantaRosa.closeAdvisersDialog();
			});
			console.log('HTTP_INSERT_LEAD_PROPERTY_STATUS_OK');
		}, function(response) {
			console.log('HTTP_INSERT_LEAD_PROPERTY_STATUS_ERR');
		});
	}

	var deleteLeadPropertyStatus = function() {
		$http({
			method: 'POST',
			url: 'application/controllers/delete_lead_property_status_controller.php',
			data: {
				idUser: selectedUserID,
				idLead: selectedLeadID,
				status: selectedStatus,
				idProperty: selectedPropertyID
			},
			headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' }
		}).then(function(response) {
			inmovables.getInmovablesData(3, 4).then(function(response) {
				nvtSantaRosa.inmovablesData = response;
				nvtSantaRosa.inmovablesClassList = inmovables.generateInmovablesClassListInventary(nvtSantaRosa.inmovablesData.inmovables);
				prepareInmovablesData();
				nvtSantaRosa.closeDialogStatus();
				nvtSantaRosa.closeAdvisersDialog();
			});
			console.log('HTTP_DELETE_LEAD_PROPERTY_STATUS_OK');
		}, function(response) {
			console.log('HTTP_DELETE_LEAD_PROPERTY_STATUS_ERR');
		});
	}

	var updatePropertyStatus = function() {
		$http({
			method: 'POST',
			url: 'application/controllers/update_property_status_controller.php',
			data: {
				status: selectedStatus,
				idProperty: selectedPropertyID
			},
			headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' }
		}).then(function(response) {
			inmovables.getInmovablesData(3, 4).then(function(response) {
				nvtSantaRosa.inmovablesData = response;
				nvtSantaRosa.inmovablesClassList = inmovables.generateInmovablesClassListInventary(nvtSantaRosa.inmovablesData.inmovables);
				prepareInmovablesData();
				nvtSantaRosa.closeDialogStatus();
			});
			console.log('HTTP_UPDATE_PROPERTY_STATUS_OK');
		}, function(response) {
			console.log('HTTP_UPDATE_PROPERTY_STATUS_ERR');
		});
	}

	nvtSantaRosa.selectLeadPropertyStatus = function(idUser, idLead) {
		selectedUserID = idUser;
		selectedLeadID = idLead;
		nvtSantaRosa.openDialogStatus();
	}

	nvtSantaRosa.setStatus = function(status) {
		selectedStatus = status;
		if (selectedPropertyStatusID > 1) {
			if (selectedStatus > 1) {
				updatePropertyStatus();
			} else {
				deleteLeadPropertyStatus();
			}
		} else {
			insertLeadPropertyStatus();
		}
	}

	nvtSantaRosa.showInmovablesList = function() {
		nvtSantaRosa.openNvtSantaRosaListDialog();
	}

	nvtSantaRosa.openAdvisersDialog = function() {
		nvtSantaRosa.advisersDialogDisplay = '';
	}

	nvtSantaRosa.closeAdvisersDialog = function() {
		nvtSantaRosa.advisersDialogDisplay = 'hide';
	}

	nvtSantaRosa.openDialogStatus = function() {
		nvtSantaRosa.dialogStatusDisplay = '';
	}

	nvtSantaRosa.closeDialogStatus = function() {
		nvtSantaRosa.dialogStatusDisplay = 'hide';
	}

	nvtSantaRosa.openNvtSantaRosaListDialog = function() {
		nvtSantaRosa.nvtSantaRosaListDialogDisplay = '';
	}

	nvtSantaRosa.closeNvtSantaRosaListDialog = function() {
		nvtSantaRosa.nvtSantaRosaListDialogDisplay = 'hide';
	}

	nvtSantaRosa.openOptionsDialogDisplay = function() {
		nvtSantaRosa.optionsDialogDisplay = '';
	}

	nvtSantaRosa.closeOptionsDialogDisplay = function() {
		nvtSantaRosa.optionsDialogDisplay = 'hide';
	}

	let collapsed = -1;

	nvtSantaRosa.collapse = function(index) {
		if (collapsed < 0) {
			nvtSantaRosa.activeUsers[index].collapsableBodyClass = 'saufth-collapsable-show';
			nvtSantaRosa.activeUsers[index].collapsableHeaderClass = 'saufth-collapsable-header-bg';
			collapsed = index;
		} else if (collapsed == index) {
			nvtSantaRosa.activeUsers[index].collapsableBodyClass = 'saufth-collapsable-hide';
			nvtSantaRosa.activeUsers[index].collapsableHeaderClass = '';
			collapsed = -1;
		} else if (collapsed >= 0) {
			if (index != Object.keys(nvtSantaRosa.activeUsers).length-1) {
				nvtSantaRosa.activeUsers[collapsed].collapsableBodyClass = 'saufth-collapsable-hide';
				nvtSantaRosa.activeUsers[collapsed].collapsableHeaderClass = '';
				nvtSantaRosa.activeUsers[index].collapsableBodyClass = 'saufth-collapsable-show';
				nvtSantaRosa.activeUsers[index].collapsableHeaderClass = 'saufth-collapsable-header-bg';
				collapsed = index;
			} else {
				if (index != collapsed) {
					nvtSantaRosa.activeUsers[collapsed].collapsableBodyClass = 'saufth-collapsable-hide';
					nvtSantaRosa.activeUsers[collapsed].collapsableHeaderClass = '';
					nvtSantaRosa.activeUsers[index].collapsableBodyClass = 'saufth-collapsable-show-last';
					nvtSantaRosa.activeUsers[index].collapsableHeaderClass = 'saufth-collapsable-header-bg';
					collapsed = index;
				} else {
					nvtSantaRosa.activeUsers[index].collapsableBodyClass = 'saufth-collapsable-hide';
					nvtSantaRosa.activeUsers[index].collapsableHeaderClass = '';
					collapsed = -1;
				}
			}
		}
	}
	
	var init = function() {
		inmovables.getInmovablesData(3, 4).then(function(response) {
			nvtSantaRosa.inmovablesData = response;
			nvtSantaRosa.inmovablesClassList = inmovables.generateInmovablesClassListInventary(nvtSantaRosa.inmovablesData.inmovables);
			prepareInmovablesData();
			getLeads();
		});
	}

	init();
	
});

app.controller('NvtAeropuertoCtrl', function($scope, $location, $http, Session, Inmovables, Leads) {

	Session.permissions().then(function(response) {
		if (response.isLogged < 1) {
			$location.path('/login');
		}
		if (response.idProfile != 1 && response.isLogged != 3) {
			$location.path('/dashboard');
		}
	});

	var nvtAeropuerto = this;

	let inmovables = Inmovables;
	let selectedPropertyID = 0;
	let selectedUserID = 0;
	let selectedLeadID = 0;
	let selectedStatus = 0;
	let selectedPropertyStatusID = 0;
	
	nvtAeropuerto.inmovablesData = [];
	nvtAeropuerto.inmovablesClassList = [];
	nvtAeropuerto.activeUsers = [];
	nvtAeropuerto.deletedUsers = [];
	nvtAeropuerto.leadsResult = [];

	nvtAeropuerto.dialogDisplay = 'hide';
	nvtAeropuerto.dialogStatusDisplay = 'hide';
	nvtAeropuerto.nvtAeropuertoListDialogDisplay = 'hide';

	let prepareInmovablesData = function() {
		angular.forEach(nvtAeropuerto.inmovablesData.inmovables, function(property, propertyKey) {
			angular.forEach(nvtAeropuerto.inmovablesData.propertyTypes, function(type, typeKey) {
				if (property.idPropertyType == type.idPropertyType) {
					nvtAeropuerto.inmovablesData.inmovables[propertyKey].type = type.type;
				}
			});
			angular.forEach(nvtAeropuerto.inmovablesData.condos, function(condominium, condominiumKey) {
				if (property.idCondominium == condominium.idCondominium) {
					nvtAeropuerto.inmovablesData.inmovables[propertyKey].condominium = condominium.condominium;
				}
			});
		});
		console.log(nvtAeropuerto.inmovablesData.inmovables);
	}

	nvtAeropuerto.setLeadProperty = function(property) {
		nvtAeropuerto.propertyData = property;
		selectedPropertyStatusID = nvtAeropuerto.propertyData.idPropertyStatus;
		selectedPropertyID = nvtAeropuerto.propertyData.idProperty;
		if (selectedPropertyStatusID > 1) {
			nvtAeropuerto.closeDialog();
			nvtAeropuerto.openDialogStatus();
		} else {
			nvtAeropuerto.openDialog();
		}
	}

	nvtAeropuerto.selectUser = function(idUser, index) {
		selectedUserIndex = index;
		nvtAeropuerto.idUser = idUser;
		nvtAeropuerto.collapse(index);
	}

	var getUsers = function() {
		$http({
			method: 'POST',
				url: 'application/controllers/get_active_users_controller.php',
				headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' }
		}).then(function(response) {
			nvtAeropuerto.usersResult = response.data;
			if (nvtAeropuerto.usersResult.status >	 0) {
				nvtAeropuerto.getUsersMsgResult = 'No se encontró ningún usuario';
				nvtAeropuerto.usersResult = {};
			} else {
				nvtAeropuerto.getUsersMsgResult = '';
				angular.forEach(nvtAeropuerto.usersResult.users, function(user, key) {
					user.leads = [];
					angular.forEach(nvtAeropuerto.leadsResult, function(lead, key) {
						if (lead[5] == user.idUser) {
							user.leads.push({idLead: lead[0], name: lead[1], last_name: lead[2], idUser: lead[5]});
						}
					});
					user.collapsableBodyClass = 'saufth-collapsable-hide';
					user.collapsableHeaderClass = '';
					console.log(user.status);
					nvtAeropuerto.activeUsers.push(user);
				});
				console.log(nvtAeropuerto.activeUsers);
			}
			console.log('HTTP_GET_ACTIVE_USERS_OK');
		}, function(response) {
			console.log('HTTP_GET_ACTIVE_USERS_ERR');
		});
	}

	var getLeads = function() {
		Leads.selectActiveLeads().then(function(response) {
			console.log('HTTP_GET_LEADS_OK');
			nvtAeropuerto.leadsResult = response.result;
			getUsers();
		}, function(response) {
			console.log('HTTP_GET_LEADS_ERR');
		});
	}

	var insertLeadPropertyStatus = function() {
		$http({
			method: 'POST',
			url: 'application/controllers/insert_lead_property_status_controller.php',
			data: {
				idUser: selectedUserID,
				idLead: selectedLeadID,
				status: selectedStatus,
				idProperty: selectedPropertyID,
				zoho_id: nvtAeropuerto.propertyData.zoho_id
			},
			headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' }
		}).then(function(response) {
			inmovables.getInmovablesData(6, 3).then(function(response) {
				nvtAeropuerto.inmovablesData = response;
				nvtAeropuerto.inmovablesClassList = inmovables.generateInmovablesClassListInventary(nvtAeropuerto.inmovablesData.inmovables);
				prepareInmovablesData();
				nvtAeropuerto.closeDialogStatus();
				nvtAeropuerto.closeDialog();
			});
			console.log('HTTP_INSERT_LEAD_PROPERTY_STATUS_OK');
		}, function(response) {
			console.log('HTTP_INSERT_LEAD_PROPERTY_STATUS_ERR');
		});
	}

	var deleteLeadPropertyStatus = function() {
		$http({
			method: 'POST',
			url: 'application/controllers/delete_lead_property_status_controller.php',
			data: {
				idUser: selectedUserID,
				idLead: selectedLeadID,
				status: selectedStatus,
				idProperty: selectedPropertyID
			},
			headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' }
		}).then(function(response) {
			inmovables.getInmovablesData(6, 3).then(function(response) {
				nvtAeropuerto.inmovablesData = response;
				nvtAeropuerto.inmovablesClassList = inmovables.generateInmovablesClassListInventary(nvtAeropuerto.inmovablesData.inmovables);
				prepareInmovablesData();
				nvtAeropuerto.closeDialogStatus();
				nvtAeropuerto.closeDialog();
			});
			console.log('HTTP_DELETE_LEAD_PROPERTY_STATUS_OK');
		}, function(response) {
			console.log('HTTP_DELETE_LEAD_PROPERTY_STATUS_ERR');
		});
	}

	var updatePropertyStatus = function() {
		$http({
			method: 'POST',
			url: 'application/controllers/update_property_status_controller.php',
			data: {
				status: selectedStatus,
				idProperty: selectedPropertyID
			},
			headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' }
		}).then(function(response) {
			inmovables.getInmovablesData(6, 3).then(function(response) {
				nvtAeropuerto.inmovablesData = response;
				nvtAeropuerto.inmovablesClassList = inmovables.generateInmovablesClassListInventary(nvtAeropuerto.inmovablesData.inmovables);
				prepareInmovablesData();
				nvtAeropuerto.closeDialogStatus();
			});
			console.log('HTTP_UPDATE_PROPERTY_STATUS_OK');
		}, function(response) {
			console.log('HTTP_UPDATE_PROPERTY_STATUS_ERR');
		});
	}

	nvtAeropuerto.selectLeadPropertyStatus = function(idUser, idLead) {
		selectedUserID = idUser;
		selectedLeadID = idLead;
		nvtAeropuerto.openDialogStatus();
	}

	nvtAeropuerto.setStatus = function(status) {
		selectedStatus = status;
		if (selectedPropertyStatusID > 1) {
			if (selectedStatus > 1) {
				updatePropertyStatus();
			} else {
				deleteLeadPropertyStatus();
			}
		} else {
			insertLeadPropertyStatus();
		}
	}

	nvtAeropuerto.showInmovablesList = function() {
		nvtAeropuerto.openNvtAeropuertoListDialog();
	}

	nvtAeropuerto.openDialog = function() {
		nvtAeropuerto.dialogDisplay = '';
	}

	nvtAeropuerto.closeDialog = function() {
		nvtAeropuerto.dialogDisplay = 'hide';
	}
	
	nvtAeropuerto.openDialogStatus = function() {
		nvtAeropuerto.dialogStatusDisplay = '';
	}

	nvtAeropuerto.closeDialogStatus = function() {
		nvtAeropuerto.dialogStatusDisplay = 'hide';
	}
	
	nvtAeropuerto.openNvtAeropuertoListDialog = function() {
		nvtAeropuerto.nvtAeropuertoListDialogDisplay = '';
	}

	nvtAeropuerto.closeNvtAeropuertoListDialog = function() {
		nvtAeropuerto.nvtAeropuertoListDialogDisplay = 'hide';
	}

	let collapsed = -1;

	nvtAeropuerto.collapse = function(index) {
		if (collapsed < 0) {
			nvtAeropuerto.activeUsers[index].collapsableBodyClass = 'saufth-collapsable-show';
			nvtAeropuerto.activeUsers[index].collapsableHeaderClass = 'saufth-collapsable-header-bg';
			collapsed = index;
		} else if (collapsed == index) {
			nvtAeropuerto.activeUsers[index].collapsableBodyClass = 'saufth-collapsable-hide';
			nvtAeropuerto.activeUsers[index].collapsableHeaderClass = '';
			collapsed = -1;
		} else if (collapsed >= 0) {
			if (index != Object.keys(nvtAeropuerto.activeUsers).length-1) {
				nvtAeropuerto.activeUsers[collapsed].collapsableBodyClass = 'saufth-collapsable-hide';
				nvtAeropuerto.activeUsers[collapsed].collapsableHeaderClass = '';
				nvtAeropuerto.activeUsers[index].collapsableBodyClass = 'saufth-collapsable-show';
				nvtAeropuerto.activeUsers[index].collapsableHeaderClass = 'saufth-collapsable-header-bg';
				collapsed = index;
			} else {
				if (index != collapsed) {
					nvtAeropuerto.activeUsers[collapsed].collapsableBodyClass = 'saufth-collapsable-hide';
					nvtAeropuerto.activeUsers[collapsed].collapsableHeaderClass = '';
					nvtAeropuerto.activeUsers[index].collapsableBodyClass = 'saufth-collapsable-show-last';
					nvtAeropuerto.activeUsers[index].collapsableHeaderClass = 'saufth-collapsable-header-bg';
					collapsed = index;
				} else {
					nvtAeropuerto.activeUsers[index].collapsableBodyClass = 'saufth-collapsable-hide';
					nvtAeropuerto.activeUsers[index].collapsableHeaderClass = '';
					collapsed = -1;
				}
			}
		}
	}
	
	var init = function() {
		inmovables.getInmovablesData(6, 3).then(function(response) {
			nvtAeropuerto.inmovablesData = response;
			nvtAeropuerto.inmovablesClassList = inmovables.generateInmovablesClassListInventary(nvtAeropuerto.inmovablesData.inmovables);
			prepareInmovablesData();
			getLeads();
		});
	}

	init();
	
});

app.controller('NvtLaPresaCtrl', function($scope, $location, $http, Session, Inmovables, Leads) {

	Session.permissions().then(function(response) {
		if (response.isLogged < 1) {
			$location.path('/login');
		}
		if (response.idProfile != 1 && response.isLogged != 3) {
			$location.path('/dashboard');
		}
	});

	var nvtLaPresa = this;

	let inmovables = Inmovables;
	let selectedPropertyID = 0;
	let selectedUserID = 0;
	let selectedLeadID = 0;
	let selectedStatus = 0;
	let selectedPropertyStatusID = 0;
	
	nvtLaPresa.inmovablesData = [];
	nvtLaPresa.inmovablesClassList = [];
	nvtLaPresa.activeUsers = [];
	nvtLaPresa.deletedUsers = [];
	nvtLaPresa.leadsResult = [];

	nvtLaPresa.dialogDisplay = 'hide';
	nvtLaPresa.dialogStatusDisplay = 'hide';
	nvtLaPresa.nvtLaPresaListDialogDisplay = 'hide';

	let prepareInmovablesData = function() {

		for (let indexProperty = 0; indexProperty < nvtLaPresa.inmovablesData.inmovables.length; indexProperty++) {

			for (let indexType = 0; indexType < nvtLaPresa.inmovablesData.propertyTypes.length; indexType++) {

				if (nvtLaPresa.inmovablesData.inmovables[indexProperty].idPropertyType == nvtLaPresa.inmovablesData.propertyTypes[indexType].idPropertyType) {

					nvtLaPresa.inmovablesData.inmovables[indexProperty].type = nvtLaPresa.inmovablesData.propertyTypes[indexType].type;

					nvtLaPresa.inmovablesData.inmovables[indexProperty].cost = {
						m2: nvtLaPresa.inmovablesData.propertyTypes[indexType].cost_m2,
						property: nvtLaPresa.inmovablesData.propertyTypes[indexType].cost_m2 * nvtLaPresa.inmovablesData.inmovables[indexProperty].area,
					};

					nvtLaPresa.inmovablesData.inmovables[indexProperty].hook.base = nvtLaPresa.inmovablesData.inmovables[indexProperty].cost.property * nvtLaPresa.inmovablesData.inmovables[indexProperty].hook.value;
					nvtLaPresa.inmovablesData.inmovables[indexProperty].hook.final = nvtLaPresa.inmovablesData.inmovables[indexProperty].hook.base;

					nvtLaPresa.inmovablesData.inmovables[indexProperty].financing = {
						total: nvtLaPresa.inmovablesData.inmovables[indexProperty].cost.property - nvtLaPresa.inmovablesData.inmovables[indexProperty].hook.base
					}

					break;

				}

			}

			for (let indexCondominium = 0; indexCondominium < nvtLaPresa.inmovablesData.condos.length; indexCondominium++) {

				if (nvtLaPresa.inmovablesData.inmovables[indexProperty].idCondominium == nvtLaPresa.inmovablesData.condos[indexCondominium].idCondominium) {

					nvtLaPresa.inmovablesData.inmovables[indexProperty].condominium = nvtLaPresa.inmovablesData.condos[indexCondominium].condominium;

					break;

				}

			}
		}
	}

	nvtLaPresa.setLeadProperty = function(property) {
		nvtLaPresa.propertyData = property;
		selectedPropertyStatusID = nvtLaPresa.propertyData.idPropertyStatus;
		selectedPropertyID = nvtLaPresa.propertyData.idProperty;
		if (selectedPropertyStatusID > 1) {
			nvtLaPresa.closeDialog();
			nvtLaPresa.openDialogStatus();
		} else {
			nvtLaPresa.openDialog();
		}
	}

	nvtLaPresa.selectUser = function(idUser, index) {
		selectedUserIndex = index;
		nvtLaPresa.idUser = idUser;
		nvtLaPresa.collapse(index);
	}

	var getUsers = function() {
		$http({
			method: 'POST',
				url: 'application/controllers/get_active_users_controller.php',
				headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' }
		}).then(function(response) {
			nvtLaPresa.usersResult = response.data;
			if (nvtLaPresa.usersResult.status >	 0) {
				nvtLaPresa.getUsersMsgResult = 'No se encontró ningún usuario';
				nvtLaPresa.usersResult = {};
			} else {
				nvtLaPresa.getUsersMsgResult = '';
				angular.forEach(nvtLaPresa.usersResult.users, function(user, key) {
					user.leads = [];
					angular.forEach(nvtLaPresa.leadsResult, function(lead, key) {
						if (lead[5] == user.idUser) {
							user.leads.push({idLead: lead[0], name: lead[1], last_name: lead[2], idUser: lead[5]});
						}
					});
					user.collapsableBodyClass = 'saufth-collapsable-hide';
					user.collapsableHeaderClass = '';
					console.log(user.status);
					nvtLaPresa.activeUsers.push(user);
				});
				console.log(nvtLaPresa.activeUsers);
			}
			console.log('HTTP_GET_ACTIVE_USERS_OK');
		}, function(response) {
			console.log('HTTP_GET_ACTIVE_USERS_ERR');
		});
	}

	var getLeads = function() {
		Leads.selectActiveLeads().then(function(response) {
			console.log('HTTP_GET_LEADS_OK');
			nvtLaPresa.leadsResult = response.result;
			getUsers();
		}, function(response) {
			console.log('HTTP_GET_LEADS_ERR');
		});
	}

	var insertLeadPropertyStatus = function() {
		$http({
			method: 'POST',
			url: 'application/controllers/insert_lead_property_status_controller.php',
			data: {
				idUser: selectedUserID,
				idLead: selectedLeadID,
				status: selectedStatus,
				idProperty: selectedPropertyID,
				zoho_id: nvtLaPresa.propertyData.zoho_id
			},
			headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' }
		}).then(function(response) {
			inmovables.getInmovablesData(9, 10).then(function(response) {
				nvtLaPresa.inmovablesData = response;
				nvtLaPresa.inmovablesClassList = inmovables.generateInmovablesClassListInventary(nvtLaPresa.inmovablesData.inmovables);
				prepareInmovablesData();
				nvtLaPresa.closeDialogStatus();
				nvtLaPresa.closeDialog();
			});
			console.log('HTTP_INSERT_LEAD_PROPERTY_STATUS_OK');
		}, function(response) {
			console.log('HTTP_INSERT_LEAD_PROPERTY_STATUS_ERR');
		});
	}

	var deleteLeadPropertyStatus = function() {
		$http({
			method: 'POST',
			url: 'application/controllers/delete_lead_property_status_controller.php',
			data: {
				idUser: selectedUserID,
				idLead: selectedLeadID,
				status: selectedStatus,
				idProperty: selectedPropertyID
			},
			headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' }
		}).then(function(response) {
			inmovables.getInmovablesData(9, 10).then(function(response) {
				nvtLaPresa.inmovablesData = response;
				nvtLaPresa.inmovablesClassList = inmovables.generateInmovablesClassListInventary(nvtLaPresa.inmovablesData.inmovables);
				prepareInmovablesData();
				nvtLaPresa.closeDialogStatus();
				nvtLaPresa.closeDialog();
			});
			console.log('HTTP_DELETE_LEAD_PROPERTY_STATUS_OK');
		}, function(response) {
			console.log('HTTP_DELETE_LEAD_PROPERTY_STATUS_ERR');
		});
	}

	var updatePropertyStatus = function() {
		$http({
			method: 'POST',
			url: 'application/controllers/update_property_status_controller.php',
			data: {
				status: selectedStatus,
				idProperty: selectedPropertyID
			},
			headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' }
		}).then(function(response) {
			inmovables.getInmovablesData(9, 10).then(function(response) {
				nvtLaPresa.inmovablesData = response;
				nvtLaPresa.inmovablesClassList = inmovables.generateInmovablesClassListInventary(nvtLaPresa.inmovablesData.inmovables);
				prepareInmovablesData();
				nvtLaPresa.closeDialogStatus();
			});
			console.log('HTTP_UPDATE_PROPERTY_STATUS_OK');
		}, function(response) {
			console.log('HTTP_UPDATE_PROPERTY_STATUS_ERR');
		});
	}

	nvtLaPresa.selectLeadPropertyStatus = function(idUser, idLead) {
		selectedUserID = idUser;
		selectedLeadID = idLead;
		nvtLaPresa.openDialogStatus();
	}

	nvtLaPresa.setStatus = function(status) {
		selectedStatus = status;
		if (selectedPropertyStatusID > 1) {
			if (selectedStatus > 1) {
				updatePropertyStatus();
			} else {
				deleteLeadPropertyStatus();
			}
		} else {
			insertLeadPropertyStatus();
		}
	}

	nvtLaPresa.showInmovablesList = function() {
		nvtLaPresa.openNvtLaPresaListDialog();
	}

	nvtLaPresa.openDialog = function() {
		nvtLaPresa.dialogDisplay = '';
	}

	nvtLaPresa.closeDialog = function() {
		nvtLaPresa.dialogDisplay = 'hide';
	}
	
	nvtLaPresa.openDialogStatus = function() {
		nvtLaPresa.dialogStatusDisplay = '';
	}

	nvtLaPresa.closeDialogStatus = function() {
		nvtLaPresa.dialogStatusDisplay = 'hide';
	}
	
	nvtLaPresa.openNvtLaPresaListDialog = function() {
		nvtLaPresa.nvtLaPresaListDialogDisplay = '';
	}

	nvtLaPresa.closeNvtLaPresaListDialog = function() {
		nvtLaPresa.nvtLaPresaListDialogDisplay = 'hide';
	}

	let collapsed = -1;

	nvtLaPresa.collapse = function(index) {
		if (collapsed < 0) {
			nvtLaPresa.activeUsers[index].collapsableBodyClass = 'saufth-collapsable-show';
			nvtLaPresa.activeUsers[index].collapsableHeaderClass = 'saufth-collapsable-header-bg';
			collapsed = index;
		} else if (collapsed == index) {
			nvtLaPresa.activeUsers[index].collapsableBodyClass = 'saufth-collapsable-hide';
			nvtLaPresa.activeUsers[index].collapsableHeaderClass = '';
			collapsed = -1;
		} else if (collapsed >= 0) {
			if (index != Object.keys(nvtLaPresa.activeUsers).length-1) {
				nvtLaPresa.activeUsers[collapsed].collapsableBodyClass = 'saufth-collapsable-hide';
				nvtLaPresa.activeUsers[collapsed].collapsableHeaderClass = '';
				nvtLaPresa.activeUsers[index].collapsableBodyClass = 'saufth-collapsable-show';
				nvtLaPresa.activeUsers[index].collapsableHeaderClass = 'saufth-collapsable-header-bg';
				collapsed = index;
			} else {
				if (index != collapsed) {
					nvtLaPresa.activeUsers[collapsed].collapsableBodyClass = 'saufth-collapsable-hide';
					nvtLaPresa.activeUsers[collapsed].collapsableHeaderClass = '';
					nvtLaPresa.activeUsers[index].collapsableBodyClass = 'saufth-collapsable-show-last';
					nvtLaPresa.activeUsers[index].collapsableHeaderClass = 'saufth-collapsable-header-bg';
					collapsed = index;
				} else {
					nvtLaPresa.activeUsers[index].collapsableBodyClass = 'saufth-collapsable-hide';
					nvtLaPresa.activeUsers[index].collapsableHeaderClass = '';
					collapsed = -1;
				}
			}
		}
	}
	
	var init = function() {
		inmovables.getInmovablesData(9, 10).then(function(response) {
			nvtLaPresa.inmovablesData = response;
			nvtLaPresa.inmovablesClassList = inmovables.generateInmovablesClassListInventary(nvtLaPresa.inmovablesData.inmovables);
			prepareInmovablesData();
			getLeads();
		});
	}

	init();
	
});

app.controller('NvtPedroEscobedoCtrl', function($scope, $location, $http, Session, Inmovables, Leads) {

	Session.permissions().then(function(response) {
		if (response.isLogged < 1) {
			$location.path('/login');
		}
		if (response.idProfile != 1 && response.isLogged != 3) {
			$location.path('/dashboard');
		}
	});

	var nvtPedroEscobedo = this;

	let inmovables = Inmovables;
	let selectedPropertyID = 0;
	let selectedUserID = 0;
	let selectedLeadID = 0;
	let selectedStatus = 0;
	let selectedPropertyStatusID = 0;
	
	nvtPedroEscobedo.inmovablesData = [];
	nvtPedroEscobedo.inmovablesClassList = [];
	nvtPedroEscobedo.activeUsers = [];
	nvtPedroEscobedo.deletedUsers = [];
	nvtPedroEscobedo.leadsResult = [];

	nvtPedroEscobedo.dialogDisplay = 'hide';
	nvtPedroEscobedo.dialogStatusDisplay = 'hide';
	nvtPedroEscobedo.nvtPedroEscobedoListDialogDisplay = 'hide';

	let prepareInmovablesData = function() {
		angular.forEach(nvtPedroEscobedo.inmovablesData.inmovables, function(property, propertyKey) {
			angular.forEach(nvtPedroEscobedo.inmovablesData.propertyTypes, function(type, typeKey) {
				if (property.idPropertyType == type.idPropertyType) {
					nvtPedroEscobedo.inmovablesData.inmovables[propertyKey].type = type.type;
				}
			});
			angular.forEach(nvtPedroEscobedo.inmovablesData.condos, function(condominium, condominiumKey) {
				if (property.idCondominium == condominium.idCondominium) {
					nvtPedroEscobedo.inmovablesData.inmovables[propertyKey].condominium = condominium.condominium;
				}
			});
		});
		console.log(nvtPedroEscobedo.inmovablesData.inmovables);
	}

	nvtPedroEscobedo.setLeadProperty = function(property) {
		nvtPedroEscobedo.propertyData = property;
		selectedPropertyStatusID = nvtPedroEscobedo.propertyData.idPropertyStatus;
		selectedPropertyID = nvtPedroEscobedo.propertyData.idProperty;
		if (selectedPropertyStatusID > 1) {
			nvtPedroEscobedo.closeDialog();
			nvtPedroEscobedo.openDialogStatus();
		} else {
			nvtPedroEscobedo.openDialog();
		}
	}

	nvtPedroEscobedo.selectUser = function(idUser, index) {
		selectedUserIndex = index;
		nvtPedroEscobedo.idUser = idUser;
		nvtPedroEscobedo.collapse(index);
	}

	var getUsers = function() {
		$http({
			method: 'POST',
				url: 'application/controllers/get_active_users_controller.php',
				headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' }
		}).then(function(response) {
			nvtPedroEscobedo.usersResult = response.data;
			if (nvtPedroEscobedo.usersResult.status >	 0) {
				nvtPedroEscobedo.getUsersMsgResult = 'No se encontró ningún usuario';
				nvtPedroEscobedo.usersResult = {};
			} else {
				nvtPedroEscobedo.getUsersMsgResult = '';
				angular.forEach(nvtPedroEscobedo.usersResult.users, function(user, key) {
					user.leads = [];
					angular.forEach(nvtPedroEscobedo.leadsResult, function(lead, key) {
						if (lead[5] == user.idUser) {
							user.leads.push({idLead: lead[0], name: lead[1], last_name: lead[2], idUser: lead[5]});
						}
					});
					user.collapsableBodyClass = 'saufth-collapsable-hide';
					user.collapsableHeaderClass = '';
					console.log(user.status);
					nvtPedroEscobedo.activeUsers.push(user);
				});
				console.log(nvtPedroEscobedo.activeUsers);
			}
			console.log('HTTP_GET_ACTIVE_USERS_OK');
		}, function(response) {
			console.log('HTTP_GET_ACTIVE_USERS_ERR');
		});
	}

	var getLeads = function() {
		Leads.selectActiveLeads().then(function(response) {
			console.log('HTTP_GET_LEADS_OK');
			nvtPedroEscobedo.leadsResult = response.result;
			getUsers();
		}, function(response) {
			console.log('HTTP_GET_LEADS_ERR');
		});
	}

	var insertLeadPropertyStatus = function() {
		$http({
			method: 'POST',
			url: 'application/controllers/insert_lead_property_status_controller.php',
			data: {
				idUser: selectedUserID,
				idLead: selectedLeadID,
				status: selectedStatus,
				idProperty: selectedPropertyID,
				zoho_id: nvtPedroEscobedo.propertyData.zoho_id
			},
			headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' }
		}).then(function(response) {
			inmovables.getInmovablesData(8, 9).then(function(response) {
				nvtPedroEscobedo.inmovablesData = response;
				nvtPedroEscobedo.inmovablesClassList = inmovables.generateInmovablesClassListInventary(nvtPedroEscobedo.inmovablesData.inmovables);
				prepareInmovablesData();
				nvtPedroEscobedo.closeDialogStatus();
				nvtPedroEscobedo.closeDialog();
			});
			console.log('HTTP_INSERT_LEAD_PROPERTY_STATUS_OK');
		}, function(response) {
			console.log('HTTP_INSERT_LEAD_PROPERTY_STATUS_ERR');
		});
	}

	var deleteLeadPropertyStatus = function() {
		$http({
			method: 'POST',
			url: 'application/controllers/delete_lead_property_status_controller.php',
			data: {
				idUser: selectedUserID,
				idLead: selectedLeadID,
				status: selectedStatus,
				idProperty: selectedPropertyID
			},
			headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' }
		}).then(function(response) {
			inmovables.getInmovablesData(8, 9).then(function(response) {
				nvtPedroEscobedo.inmovablesData = response;
				nvtPedroEscobedo.inmovablesClassList = inmovables.generateInmovablesClassListInventary(nvtPedroEscobedo.inmovablesData.inmovables);
				prepareInmovablesData();
				nvtPedroEscobedo.closeDialogStatus();
				nvtPedroEscobedo.closeDialog();
			});
			console.log('HTTP_DELETE_LEAD_PROPERTY_STATUS_OK');
		}, function(response) {
			console.log('HTTP_DELETE_LEAD_PROPERTY_STATUS_ERR');
		});
	}

	var updatePropertyStatus = function() {
		$http({
			method: 'POST',
			url: 'application/controllers/update_property_status_controller.php',
			data: {
				status: selectedStatus,
				idProperty: selectedPropertyID
			},
			headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' }
		}).then(function(response) {
			inmovables.getInmovablesData(8, 9).then(function(response) {
				nvtPedroEscobedo.inmovablesData = response;
				nvtPedroEscobedo.inmovablesClassList = inmovables.generateInmovablesClassListInventary(nvtPedroEscobedo.inmovablesData.inmovables);
				prepareInmovablesData();
				nvtPedroEscobedo.closeDialogStatus();
			});
			console.log('HTTP_UPDATE_PROPERTY_STATUS_OK');
		}, function(response) {
			console.log('HTTP_UPDATE_PROPERTY_STATUS_ERR');
		});
	}

	nvtPedroEscobedo.selectLeadPropertyStatus = function(idUser, idLead) {
		selectedUserID = idUser;
		selectedLeadID = idLead;
		nvtPedroEscobedo.openDialogStatus();
	}

	nvtPedroEscobedo.setStatus = function(status) {
		selectedStatus = status;
		if (selectedPropertyStatusID > 1) {
			if (selectedStatus > 1) {
				updatePropertyStatus();
			} else {
				deleteLeadPropertyStatus();
			}
		} else {
			insertLeadPropertyStatus();
		}
	}

	nvtPedroEscobedo.showInmovablesList = function() {
		nvtPedroEscobedo.openNvtPedroEscobedoListDialog();
	}

	nvtPedroEscobedo.openDialog = function() {
		nvtPedroEscobedo.dialogDisplay = '';
	}

	nvtPedroEscobedo.closeDialog = function() {
		nvtPedroEscobedo.dialogDisplay = 'hide';
	}
	
	nvtPedroEscobedo.openDialogStatus = function() {
		nvtPedroEscobedo.dialogStatusDisplay = '';
	}

	nvtPedroEscobedo.closeDialogStatus = function() {
		nvtPedroEscobedo.dialogStatusDisplay = 'hide';
	}
	
	nvtPedroEscobedo.openNvtPedroEscobedoListDialog = function() {
		nvtPedroEscobedo.nvtPedroEscobedoListDialogDisplay = '';
	}

	nvtPedroEscobedo.closeNvtPedroEscobedoListDialog = function() {
		nvtPedroEscobedo.nvtPedroEscobedoListDialogDisplay = 'hide';
	}

	let collapsed = -1;

	nvtPedroEscobedo.collapse = function(index) {
		if (collapsed < 0) {
			nvtPedroEscobedo.activeUsers[index].collapsableBodyClass = 'saufth-collapsable-show';
			nvtPedroEscobedo.activeUsers[index].collapsableHeaderClass = 'saufth-collapsable-header-bg';
			collapsed = index;
		} else if (collapsed == index) {
			nvtPedroEscobedo.activeUsers[index].collapsableBodyClass = 'saufth-collapsable-hide';
			nvtPedroEscobedo.activeUsers[index].collapsableHeaderClass = '';
			collapsed = -1;
		} else if (collapsed >= 0) {
			if (index != Object.keys(nvtPedroEscobedo.activeUsers).length-1) {
				nvtPedroEscobedo.activeUsers[collapsed].collapsableBodyClass = 'saufth-collapsable-hide';
				nvtPedroEscobedo.activeUsers[collapsed].collapsableHeaderClass = '';
				nvtPedroEscobedo.activeUsers[index].collapsableBodyClass = 'saufth-collapsable-show';
				nvtPedroEscobedo.activeUsers[index].collapsableHeaderClass = 'saufth-collapsable-header-bg';
				collapsed = index;
			} else {
				if (index != collapsed) {
					nvtPedroEscobedo.activeUsers[collapsed].collapsableBodyClass = 'saufth-collapsable-hide';
					nvtPedroEscobedo.activeUsers[collapsed].collapsableHeaderClass = '';
					nvtPedroEscobedo.activeUsers[index].collapsableBodyClass = 'saufth-collapsable-show-last';
					nvtPedroEscobedo.activeUsers[index].collapsableHeaderClass = 'saufth-collapsable-header-bg';
					collapsed = index;
				} else {
					nvtPedroEscobedo.activeUsers[index].collapsableBodyClass = 'saufth-collapsable-hide';
					nvtPedroEscobedo.activeUsers[index].collapsableHeaderClass = '';
					collapsed = -1;
				}
			}
		}
	}
	
	var init = function() {
		inmovables.getInmovablesData(8, 9).then(function(response) {
			nvtPedroEscobedo.inmovablesData = response;
			nvtPedroEscobedo.inmovablesClassList = inmovables.generateInmovablesClassListInventary(nvtPedroEscobedo.inmovablesData.inmovables);
			prepareInmovablesData();
			getLeads();
		});
	}

	init();
	
});

app.controller('NvtSLPCtrl', function($scope, $location, $http, Session, Inmovables, Quote, Leads) {

	Session.permissions().then(function(response) {
		if (response.isLogged < 1) {
			$location.path('/login');
		}
		if (response.idProfile != 1 && response.isLogged != 3) {
			$location.path('/dashboard');
		}
	});

	var nvtSLP = this;

	let inmovables = Inmovables;
	let quoteResult = {};
	let selectedPropertyID = 0;
	let selectedUserID = 0;
	let selectedLeadID = 0;
	let selectedStatus = 0;
	let selectedPropertyStatusID = 0;
	
	nvtSLP.inmovablesData = [];
	nvtSLP.inmovablesClassList = [];
	nvtSLP.activeUsers = [];
	nvtSLP.deletedUsers = [];
	nvtSLP.leadsResult = [];
	nvtSLP.propertyData = [];

	nvtSLP.advisersDialogDisplay = 'hide';
	nvtSLP.dialogStatusDisplay = 'hide';
	nvtSLP.nvtSLPListDialogDisplay = 'hide';
	nvtSLP.optionsDialogDisplay = 'hide';

	let prepareInmovablesData = function() {
		angular.forEach(nvtSLP.inmovablesData.inmovables, function(property, propertyKey) {
			angular.forEach(nvtSLP.inmovablesData.propertyTypes, function(type, typeKey) {
				if (property.idPropertyType == type.idPropertyType) {
					nvtSLP.inmovablesData.inmovables[propertyKey].type = type.type;
					nvtSLP.inmovablesData.inmovables[propertyKey].cost_m2 = type.cost_m2;
				}
			});
			angular.forEach(nvtSLP.inmovablesData.condos, function(condominium, condominiumKey) {
				if (property.idCondominium == condominium.idCondominium) {
					nvtSLP.inmovablesData.inmovables[propertyKey].condominium = condominium.condominium;
				}
			});
		});
	}

	nvtSLP.setLeadProperty = function(property) {
		nvtSLP.propertyData = property;
		selectedPropertyStatusID = nvtSLP.propertyData.idPropertyStatus;
		selectedPropertyID = nvtSLP.propertyData.idProperty;
		if (selectedPropertyStatusID > 1) {
			nvtSLP.closeAdvisersDialog();
			nvtSLP.openDialogStatus();
		} else {
			nvtSLP.openAdvisersDialog();
		}
	}

	nvtSLP.selectUser = function(idUser, index) {
		selectedUserIndex = index;
		nvtSLP.idUser = idUser;
		nvtSLP.collapse(index);
	}

	var getUsers = function() {
		$http({
			method: 'POST',
				url: 'application/controllers/get_active_users_controller.php',
				headers: {'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' }
		}).then(function(response) {
			nvtSLP.usersResult = response.data;
			if (nvtSLP.usersResult.status >	 0) {
				nvtSLP.getUsersMsgResult = 'No se encontró ningún usuario';
				nvtSLP.usersResult = {};
			} else {
				nvtSLP.getUsersMsgResult = '';
				angular.forEach(nvtSLP.usersResult.users, function(user, key) {
					user.leads = [];
					angular.forEach(nvtSLP.leadsResult, function(lead, key) {
						if (lead[5] == user.idUser) {
							user.leads.push({idLead: lead[0], name: lead[1], last_name: lead[2], idUser: lead[5]});
						}
					});
					user.collapsableBodyClass = 'saufth-collapsable-hide';
					user.collapsableHeaderClass = '';
					nvtSLP.activeUsers.push(user);
				});
			}
			console.log('HTTP_GET_ACTIVE_USERS_OK');
		}, function(response) {
			console.log('HTTP_GET_ACTIVE_USERS_ERR');
		});
	}

	var getLeads = function() {
		Leads.selectActiveLeads().then(function(response) {
			console.log('HTTP_GET_LEADS_OK');
			nvtSLP.leadsResult = response.result;
			getUsers();
		}, function(response) {
			console.log('HTTP_GET_LEADS_ERR');
		});
	}

	var insertLeadPropertyStatus = function() {
		$http({
			method: 'POST',
			url: 'application/controllers/insert_lead_property_status_controller.php',
			data: {
				idUser: selectedUserID,
				idLead: selectedLeadID,
				status: selectedStatus,
				idProperty: selectedPropertyID,
				zoho_id: nvtSLP.propertyData.zoho_id
			},
			headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' }
		}).then(function(response) {
			inmovables.getInmovablesData(10, 13).then(function(response) {
				nvtSLP.inmovablesData = response;
				nvtSLP.inmovablesClassList = inmovables.generateInmovablesClassListInventary(nvtSLP.inmovablesData.inmovables);
				prepareInmovablesData();
				nvtSLP.closeDialogStatus();
				nvtSLP.closeAdvisersDialog();
			});
			console.log('HTTP_INSERT_LEAD_PROPERTY_STATUS_OK');
		}, function(response) {
			console.log('HTTP_INSERT_LEAD_PROPERTY_STATUS_ERR');
		});
	}

	var deleteLeadPropertyStatus = function() {
		$http({
			method: 'POST',
			url: 'application/controllers/delete_lead_property_status_controller.php',
			data: {
				idUser: selectedUserID,
				idLead: selectedLeadID,
				status: selectedStatus,
				idProperty: selectedPropertyID
			},
			headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' }
		}).then(function(response) {
			inmovables.getInmovablesData(10, 13).then(function(response) {
				nvtSLP.inmovablesData = response;
				nvtSLP.inmovablesClassList = inmovables.generateInmovablesClassListInventary(nvtSLP.inmovablesData.inmovables);
				prepareInmovablesData();
				nvtSLP.closeDialogStatus();
				nvtSLP.closeAdvisersDialog();
			});
			console.log('HTTP_DELETE_LEAD_PROPERTY_STATUS_OK');
		}, function(response) {
			console.log('HTTP_DELETE_LEAD_PROPERTY_STATUS_ERR');
		});
	}

	var updatePropertyStatus = function() {
		$http({
			method: 'POST',
			url: 'application/controllers/update_property_status_controller.php',
			data: {
				status: selectedStatus,
				idProperty: selectedPropertyID
			},
			headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' }
		}).then(function(response) {
			inmovables.getInmovablesData(10, 13).then(function(response) {
				nvtSLP.inmovablesData = response;
				nvtSLP.inmovablesClassList = inmovables.generateInmovablesClassListInventary(nvtSLP.inmovablesData.inmovables);
				prepareInmovablesData();
				nvtSLP.closeDialogStatus();
			});
			console.log('HTTP_UPDATE_PROPERTY_STATUS_OK');
		}, function(response) {
			console.log('HTTP_UPDATE_PROPERTY_STATUS_ERR');
		});
	}

	nvtSLP.selectLeadPropertyStatus = function(idUser, idLead) {
		selectedUserID = idUser;
		selectedLeadID = idLead;
		nvtSLP.openDialogStatus();
	}

	nvtSLP.setStatus = function(status) {
		selectedStatus = status;
		if (selectedPropertyStatusID > 1) {
			if (selectedStatus > 1) {
				updatePropertyStatus();
			} else {
				deleteLeadPropertyStatus();
			}
		} else {
			insertLeadPropertyStatus();
		}
	}

	nvtSLP.showInmovablesList = function() {
		nvtSLP.openNvtSLPListDialog();
	}

	nvtSLP.openAdvisersDialog = function() {
		nvtSLP.advisersDialogDisplay = '';
	}

	nvtSLP.closeAdvisersDialog = function() {
		nvtSLP.advisersDialogDisplay = 'hide';
	}

	nvtSLP.openDialogStatus = function() {
		nvtSLP.dialogStatusDisplay = '';
	}

	nvtSLP.closeDialogStatus = function() {
		nvtSLP.dialogStatusDisplay = 'hide';
	}

	nvtSLP.openNvtSLPListDialog = function() {
		nvtSLP.nvtSLPListDialogDisplay = '';
	}

	nvtSLP.closeNvtSLPListDialog = function() {
		nvtSLP.nvtSLPListDialogDisplay = 'hide';
	}

	nvtSLP.openOptionsDialogDisplay = function() {
		nvtSLP.optionsDialogDisplay = '';
	}

	nvtSLP.closeOptionsDialogDisplay = function() {
		nvtSLP.optionsDialogDisplay = 'hide';
	}

	let collapsed = -1;

	nvtSLP.collapse = function(index) {
		if (collapsed < 0) {
			nvtSLP.activeUsers[index].collapsableBodyClass = 'saufth-collapsable-show';
			nvtSLP.activeUsers[index].collapsableHeaderClass = 'saufth-collapsable-header-bg';
			collapsed = index;
		} else if (collapsed == index) {
			nvtSLP.activeUsers[index].collapsableBodyClass = 'saufth-collapsable-hide';
			nvtSLP.activeUsers[index].collapsableHeaderClass = '';
			collapsed = -1;
		} else if (collapsed >= 0) {
			if (index != Object.keys(nvtSLP.activeUsers).length-1) {
				nvtSLP.activeUsers[collapsed].collapsableBodyClass = 'saufth-collapsable-hide';
				nvtSLP.activeUsers[collapsed].collapsableHeaderClass = '';
				nvtSLP.activeUsers[index].collapsableBodyClass = 'saufth-collapsable-show';
				nvtSLP.activeUsers[index].collapsableHeaderClass = 'saufth-collapsable-header-bg';
				collapsed = index;
			} else {
				if (index != collapsed) {
					nvtSLP.activeUsers[collapsed].collapsableBodyClass = 'saufth-collapsable-hide';
					nvtSLP.activeUsers[collapsed].collapsableHeaderClass = '';
					nvtSLP.activeUsers[index].collapsableBodyClass = 'saufth-collapsable-show-last';
					nvtSLP.activeUsers[index].collapsableHeaderClass = 'saufth-collapsable-header-bg';
					collapsed = index;
				} else {
					nvtSLP.activeUsers[index].collapsableBodyClass = 'saufth-collapsable-hide';
					nvtSLP.activeUsers[index].collapsableHeaderClass = '';
					collapsed = -1;
				}
			}
		}
	}
	
	var init = function() {
		inmovables.getInmovablesData(10, 13).then(function(response) {
			nvtSLP.inmovablesData = response;
			nvtSLP.inmovablesClassList = inmovables.generateInmovablesClassListInventary(nvtSLP.inmovablesData.inmovables);
			prepareInmovablesData();
			getLeads();
		});
	}

	init();
	
});

/***** Quote *****/

app.controller('NvtBetaQuoteCtrl', function($scope, Inmovables, Developments, Status) {

	var nvtBeta = this;
	var inmovables = Inmovables;
	
	var inmovablesData = [];
	nvtBeta.inmovablesClassList = [];
	nvtBeta.propertyData = [];

	nvtBeta.dialogDisplay = 'hide';

	var discountPlan1 = .25;
	var discountPlan2 = .20;

	nvtBeta.showPropertyData = function(idCondominium, number, idProperty) {
		
		Developments.selectPropertyById(idProperty).then(function(response) {

			if (Status.checkHttpStatusCode(response.status)) {

				nvtBeta.property = response.property;
				nvtBeta.property.sample = {};

				nvtBeta.property.sample.m2 = (nvtBeta.property.cost.increase.m2 > 0) ? nvtBeta.property.cost.increase.m2 : nvtBeta.property.cost.m2;
				nvtBeta.property.sample.property = nvtBeta.property.sample.m2 * nvtBeta.property.area;

				nvtBeta.property.sample.discount1 = nvtBeta.property.sample.property - (nvtBeta.property.sample.property * discountPlan1);
				nvtBeta.property.sample.discount2 = nvtBeta.property.sample.property - (nvtBeta.property.sample.property * discountPlan2);

				angular.forEach(inmovablesData.inmovables, function(row, key) {
					if (row.number == number && row.idCondominium == idCondominium) {
						nvtBeta.propertyData.condominium = inmovablesData.condos[0].condominium;
						if (row.property_class == 1) {
							nvtBeta.propertyData.propertyClass = 'Nave industrial';
							nvtBeta.costToBlock = '$30,000 MXN';
						} else if (row.property_class == 2) {
							nvtBeta.propertyData.propertyClass = 'Lote industrial';
							nvtBeta.costToBlock = '$10,000 MXN';
						} else {
							nvtBeta.propertyData.propertyClass = 'Lote habitacional';
							nvtBeta.costToBlock = '$10,000 MXN';
						}
		
						for (let indexType = 0; indexType < inmovablesData.propertyTypes.length; indexType++) {
		
							if (inmovablesData.inmovables[key].idPropertyType == inmovablesData.propertyTypes[indexType].idPropertyType) {
		
								nvtBeta.propertyData.type = inmovablesData.propertyTypes[indexType].type;
								nvtBeta.propertyData.cost_m2 = Number.parseFloat(inmovablesData.propertyTypes[indexType].cost_m2.toFixed(2));
		
								break;
		
							}
		
						}
		
						if (row.cost_m2_increase != null) {
							nvtBeta.propertyData.cost_m2 = nvtBeta.property.cost.increase.m2;
							nvtBeta.propertyData.cost_m2 = Number.parseFloat(nvtBeta.propertyData.cost_m2.toFixed(2));
						}
		
						nvtBeta.propertyData.number = row.number;
						nvtBeta.propertyData.area = row.area;
						var total = nvtBeta.propertyData.cost_m2 * nvtBeta.propertyData.area;
						nvtBeta.propertyData.total = total.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2});
						var totalDiscountPlan1 = total - (total * discountPlan1);
						nvtBeta.propertyData.discountPlan1 = discountPlan1 * 100;
						nvtBeta.propertyData.totalPlan1 = totalDiscountPlan1.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2});
						var totalDiscountPlan2 = total - (total * discountPlan2);
						nvtBeta.propertyData.discountPlan2 = discountPlan2 * 100;
						nvtBeta.propertyData.totalPlan2 = totalDiscountPlan2.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2});
						nvtBeta.openDialog();
					}
				});

			} else {

				alert('No se encontro información sobre esta propiedad');

			}

		}, function(response) {

			alert('Revisa tu conexión a internet o contacta a un administrador');

		});
	}

	nvtBeta.openDialog = function() {
		nvtBeta.dialogDisplay = '';
	}

	nvtBeta.closeDialog = function() {
		nvtBeta.dialogDisplay = 'hide';
	}

	var init = function() {

		Inmovables.getInmovablesData(2, 7).then(function(response) {

			inmovablesData = response;
			nvtBeta.inmovables = response.inmovables;
			nvtBeta.inmovablesClassList = inmovables.generateInmovablesClassList(inmovablesData.inmovables);

		});

	}

	init();

});

app.controller('NvtGammaQuoteCtrl', function($scope, Inmovables, Developments, Status) {

	var nvtGamma = this;
	var inmovables = Inmovables;
	
	var inmovablesData = [];
	nvtGamma.inmovablesClassList = [];
	nvtGamma.propertyData = [];

	nvtGamma.dialogDisplay = 'hide';

	var discountPlan1 = .25;
	var discountPlan2 = .20;

	nvtGamma.showPropertyData = function(idCondominium, number, idProperty) {
		
		Developments.selectPropertyById(idProperty).then(function(response) {

			if (Status.checkHttpStatusCode(response.status)) {

				nvtGamma.property = response.property;
				nvtGamma.property.sample = {};

				nvtGamma.property.sample.m2 = (nvtGamma.property.cost.increase.m2 > 0) ? nvtGamma.property.cost.increase.m2 : nvtGamma.property.cost.m2;
				nvtGamma.property.sample.property = nvtGamma.property.sample.m2 * nvtGamma.property.area;

				nvtGamma.property.sample.discount1 = nvtGamma.property.sample.property - (nvtGamma.property.sample.property * discountPlan1);
				nvtGamma.property.sample.discount2 = nvtGamma.property.sample.property - (nvtGamma.property.sample.property * discountPlan2);

				angular.forEach(inmovablesData.inmovables, function(row, key) {
					if (row.number == number && row.idCondominium == idCondominium) {
						nvtGamma.propertyData.condominium = inmovablesData.condos[0].condominium;
						if (row.property_class == 1) {
							nvtGamma.propertyData.propertyClass = 'Nave industrial';
							nvtGamma.costToBlock = '$30,000 MXN';
						} else if (row.property_class == 2) {
							nvtGamma.propertyData.propertyClass = 'Lote industrial';
							nvtGamma.costToBlock = '$10,000 MXN';
						} else {
							nvtGamma.propertyData.propertyClass = 'Lote habitacional';
							nvtGamma.costToBlock = '$10,000 MXN';
						}
		
						for (let indexType = 0; indexType < inmovablesData.propertyTypes.length; indexType++) {
		
							if (inmovablesData.inmovables[key].idPropertyType == inmovablesData.propertyTypes[indexType].idPropertyType) {
		
								nvtGamma.propertyData.type = inmovablesData.propertyTypes[indexType].type;
								nvtGamma.propertyData.cost_m2 = Number.parseFloat(inmovablesData.propertyTypes[indexType].cost_m2.toFixed(2));
		
								break;
		
							}
		
						}
		
						if (row.cost_m2_increase != null) {
							nvtGamma.propertyData.cost_m2 = nvtGamma.property.cost.increase.m2;
							nvtGamma.propertyData.cost_m2 = Number.parseFloat(nvtGamma.propertyData.cost_m2.toFixed(2));
						}
		
						nvtGamma.propertyData.number = row.number;
						nvtGamma.propertyData.area = row.area;
						var total = nvtGamma.propertyData.cost_m2 * nvtGamma.propertyData.area;
						nvtGamma.propertyData.total = total.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2});
						var totalDiscountPlan1 = total - (total * discountPlan1);
						nvtGamma.propertyData.discountPlan1 = discountPlan1 * 100;
						nvtGamma.propertyData.totalPlan1 = totalDiscountPlan1.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2});
						var totalDiscountPlan2 = total - (total * discountPlan2);
						nvtGamma.propertyData.discountPlan2 = discountPlan2 * 100;
						nvtGamma.propertyData.totalPlan2 = totalDiscountPlan2.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2});
						nvtGamma.openDialog();
					}
				});

			} else {

				alert('No se encontro información sobre esta propiedad');

			}

		}, function(response) {

			alert('Revisa tu conexión a internet o contacta a un administrador');

		});
	}

	nvtGamma.openDialog = function() {
		nvtGamma.dialogDisplay = '';
	}

	nvtGamma.closeDialog = function() {
		nvtGamma.dialogDisplay = 'hide';
	}

	var init = function() {

		Inmovables.getInmovablesData(1, 5).then(function(response) {

			inmovablesData = response;
			nvtGamma.inmovables = response.inmovables;
			nvtGamma.inmovablesClassList = inmovables.generateInmovablesClassList(inmovablesData.inmovables);

		});

	}

	init();

});

app.controller('NvtSantaRosaQuoteCtrl', function($scope, Inmovables, Developments, Status) {

	var nvtSrosa = this;
	var inmovables = Inmovables;
	
	var inmovablesData = [];
	nvtSrosa.inmovablesClassList = [];
	nvtSrosa.propertyData = [];

	nvtSrosa.dialogDisplay = 'hide';

	var discountPlan1 = .25;
	var discountPlan2 = .20;

	nvtSrosa.showPropertyData = function(idCondominium, number, idProperty) {

		Developments.selectPropertyById(idProperty).then(function(response) {

			if (Status.checkHttpStatusCode(response.status)) {

				nvtSrosa.property = response.property;
				nvtSrosa.property.sample = {};

				nvtSrosa.property.sample.m2 = (nvtSrosa.property.cost.increase.m2 > 0) ? nvtSrosa.property.cost.increase.m2 : nvtSrosa.property.cost.m2;
				nvtSrosa.property.sample.property = nvtSrosa.property.sample.m2 * nvtSrosa.property.area;

				nvtSrosa.property.sample.discount1 = nvtSrosa.property.sample.property - (nvtSrosa.property.sample.property * discountPlan1);
				nvtSrosa.property.sample.discount2 = nvtSrosa.property.sample.property - (nvtSrosa.property.sample.property * discountPlan2);

				angular.forEach(inmovablesData.inmovables, function(row, key) {
					if (row.number == number && row.idCondominium == idCondominium) {
						nvtSrosa.propertyData.condominium = inmovablesData.condos[0].condominium;
						if (row.property_class == 1) {
							nvtSrosa.propertyData.propertyClass = 'Nave industrial';
							nvtSrosa.costToBlock = '$30,000 MXN';
						} else if (row.property_class == 2) {
							nvtSrosa.propertyData.propertyClass = 'Lote industrial';
							nvtSrosa.costToBlock = '$10,000 MXN';
						} else {
							nvtSrosa.propertyData.propertyClass = 'Lote habitacional';
							nvtSrosa.costToBlock = '$10,000 MXN';
						}
		
						for (let indexType = 0; indexType < inmovablesData.propertyTypes.length; indexType++) {
		
							if (inmovablesData.inmovables[key].idPropertyType == inmovablesData.propertyTypes[indexType].idPropertyType) {
		
								nvtSrosa.propertyData.type = inmovablesData.propertyTypes[indexType].type;
								nvtSrosa.propertyData.cost_m2 = Number.parseFloat(inmovablesData.propertyTypes[indexType].cost_m2.toFixed(2));
		
								break;
		
							}
		
						}
		
						if (row.cost_m2_increase != null) {
							nvtSrosa.propertyData.cost_m2 = nvtSrosa.property.cost.increase.m2;
							nvtSrosa.propertyData.cost_m2 = Number.parseFloat(nvtSrosa.propertyData.cost_m2.toFixed(2));
						}
		
						nvtSrosa.propertyData.number = row.number;
						nvtSrosa.propertyData.area = row.area;
						var total = nvtSrosa.propertyData.cost_m2 * nvtSrosa.propertyData.area;
						nvtSrosa.propertyData.total = total.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2});
						var totalDiscountPlan1 = total - (total * discountPlan1);
						nvtSrosa.propertyData.discountPlan1 = discountPlan1 * 100;
						nvtSrosa.propertyData.totalPlan1 = totalDiscountPlan1.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2});
						var totalDiscountPlan2 = total - (total * discountPlan2);
						nvtSrosa.propertyData.discountPlan2 = discountPlan2 * 100;
						nvtSrosa.propertyData.totalPlan2 = totalDiscountPlan2.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2});
						nvtSrosa.openDialog();
					}
				});

			} else {

				alert('No se encontro información sobre esta propiedad');

			}

		}, function(response) {

			alert('Revisa tu conexión a internet o contacta a un administrador');

		});
	}

	nvtSrosa.openDialog = function() {
		nvtSrosa.dialogDisplay = '';
	}

	nvtSrosa.closeDialog = function() {
		nvtSrosa.dialogDisplay = 'hide';
	}

	var init = function() {

		Inmovables.getInmovablesData(3, 4).then(function(response) {

			inmovablesData = response;
			nvtSrosa.inmovables = response.inmovables;
			nvtSrosa.inmovablesClassList = inmovables.generateInmovablesClassList(inmovablesData.inmovables);

		});

	}

	init();

});

app.controller('NvtGammaDosQuoteCtrl', function($scope, Inmovables, Developments, Status) {

	var nvtGammaDos = this;
	var inmovables = Inmovables;
	
	var inmovablesData = [];
	nvtGammaDos.inmovablesClassList = [];
	nvtGammaDos.propertyData = [];

	nvtGammaDos.dialogDisplay = 'hide';

	var discountPlan1 = .25;
	var discountPlan2 = .20;

	nvtGammaDos.showPropertyData = function(idCondominium, number, idProperty) {
		
		Developments.selectPropertyById(idProperty).then(function(response) {

			if (Status.checkHttpStatusCode(response.status)) {

				nvtGammaDos.property = response.property;
				nvtGammaDos.property.sample = {};

				nvtGammaDos.property.sample.m2 = (nvtGammaDos.property.cost.increase.m2 > 0) ? nvtGammaDos.property.cost.increase.m2 : nvtGammaDos.property.cost.m2;
				nvtGammaDos.property.sample.property = nvtGammaDos.property.sample.m2 * nvtGammaDos.property.area;

				nvtGammaDos.property.sample.discount1 = nvtGammaDos.property.sample.property - (nvtGammaDos.property.sample.property * discountPlan1);
				nvtGammaDos.property.sample.discount2 = nvtGammaDos.property.sample.property - (nvtGammaDos.property.sample.property * discountPlan2);

				angular.forEach(inmovablesData.inmovables, function(row, key) {
					if (row.number == number && row.idCondominium == idCondominium) {
						nvtGammaDos.propertyData.condominium = inmovablesData.condos[0].condominium;
						if (row.property_class == 1) {
							nvtGammaDos.propertyData.propertyClass = 'Nave industrial';
							nvtGammaDos.costToBlock = '$30,000 MXN';
						} else if (row.property_class == 2) {
							nvtGammaDos.propertyData.propertyClass = 'Lote industrial';
							nvtGammaDos.costToBlock = '$10,000 MXN';
						} else {
							nvtGammaDos.propertyData.propertyClass = 'Lote habitacional';
							nvtGammaDos.costToBlock = '$10,000 MXN';
						}
		
						for (let indexType = 0; indexType < inmovablesData.propertyTypes.length; indexType++) {
		
							if (inmovablesData.inmovables[key].idPropertyType == inmovablesData.propertyTypes[indexType].idPropertyType) {
		
								nvtGammaDos.propertyData.type = inmovablesData.propertyTypes[indexType].type;
								nvtGammaDos.propertyData.cost_m2 = Number.parseFloat(inmovablesData.propertyTypes[indexType].cost_m2.toFixed(2));
		
								break;
		
							}
		
						}
		
						if (row.cost_m2_increase != null) {
							nvtGammaDos.propertyData.cost_m2 = nvtGammaDos.property.cost.increase.m2;
							nvtGammaDos.propertyData.cost_m2 = Number.parseFloat(nvtGammaDos.propertyData.cost_m2.toFixed(2));
						}
		
						nvtGammaDos.propertyData.number = row.number;
						nvtGammaDos.propertyData.area = row.area;
						var total = nvtGammaDos.propertyData.cost_m2 * nvtGammaDos.propertyData.area;
						nvtGammaDos.propertyData.total = total.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2});
						var totalDiscountPlan1 = total - (total * discountPlan1);
						nvtGammaDos.propertyData.discountPlan1 = discountPlan1 * 100;
						nvtGammaDos.propertyData.totalPlan1 = totalDiscountPlan1.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2});
						var totalDiscountPlan2 = total - (total * discountPlan2);
						nvtGammaDos.propertyData.discountPlan2 = discountPlan2 * 100;
						nvtGammaDos.propertyData.totalPlan2 = totalDiscountPlan2.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2});
						nvtGammaDos.openDialog();
					}
				});

			} else {

				alert('No se encontro información sobre esta propiedad');

			}

		}, function(response) {

			alert('Revisa tu conexión a internet o contacta a un administrador');

		});
	}

	nvtGammaDos.openDialog = function() {
		nvtGammaDos.dialogDisplay = '';
	}

	nvtGammaDos.closeDialog = function() {
		nvtGammaDos.dialogDisplay = 'hide';
	}

	var init = function() {

		Inmovables.getInmovablesData(7, 8).then(function(response) {

			inmovablesData = response;
			nvtGammaDos.inmovables = response.inmovables;
			nvtGammaDos.inmovablesClassList = inmovables.generateInmovablesClassList(inmovablesData.inmovables);

		});

	}

	init();

});

app.controller('NvtAeropuertoQuoteCtrl', function($scope, Inmovables, Developments, Status) {

	var nvtAeropuerto = this;
	var inmovables = Inmovables;
	
	var inmovablesData = [];
	nvtAeropuerto.inmovablesClassList = [];
	nvtAeropuerto.propertyData = [];

	nvtAeropuerto.dialogDisplay = 'hide';

	var discountPlan1 = .25;
	var discountPlan2 = .20;

	nvtAeropuerto.showPropertyData = function(idCondominium, number, idProperty) {
		
		Developments.selectPropertyById(idProperty).then(function(response) {

			if (Status.checkHttpStatusCode(response.status)) {

				nvtAeropuerto.property = response.property;
				nvtAeropuerto.property.sample = {};

				nvtAeropuerto.property.sample.m2 = (nvtAeropuerto.property.cost.increase.m2 > 0) ? nvtAeropuerto.property.cost.increase.m2 : nvtAeropuerto.property.cost.m2;
				nvtAeropuerto.property.sample.property = nvtAeropuerto.property.sample.m2 * nvtAeropuerto.property.area;

				nvtAeropuerto.property.sample.discount1 = nvtAeropuerto.property.sample.property - (nvtAeropuerto.property.sample.property * discountPlan1);
				nvtAeropuerto.property.sample.discount2 = nvtAeropuerto.property.sample.property - (nvtAeropuerto.property.sample.property * discountPlan2);

				angular.forEach(inmovablesData.inmovables, function(row, key) {
					if (row.number == number && row.idCondominium == idCondominium) {
						nvtAeropuerto.propertyData.condominium = inmovablesData.condos[0].condominium;
						if (row.property_class == 1) {
							nvtAeropuerto.propertyData.propertyClass = 'Nave industrial';
							nvtAeropuerto.costToBlock = '$30,000 MXN';
						} else if (row.property_class == 2) {
							nvtAeropuerto.propertyData.propertyClass = 'Lote industrial';
							nvtAeropuerto.costToBlock = '$10,000 MXN';
						} else {
							nvtAeropuerto.propertyData.propertyClass = 'Lote habitacional';
							nvtAeropuerto.costToBlock = '$10,000 MXN';
						}
		
						for (let indexType = 0; indexType < inmovablesData.propertyTypes.length; indexType++) {
		
							if (inmovablesData.inmovables[key].idPropertyType == inmovablesData.propertyTypes[indexType].idPropertyType) {
		
								nvtAeropuerto.propertyData.type = inmovablesData.propertyTypes[indexType].type;
								nvtAeropuerto.propertyData.cost_m2 = Number.parseFloat(inmovablesData.propertyTypes[indexType].cost_m2.toFixed(2));
		
								break;
		
							}
		
						}
		
						if (row.cost_m2_increase != null) {
							nvtAeropuerto.propertyData.cost_m2 = nvtAeropuerto.property.cost.increase.m2;
							nvtAeropuerto.propertyData.cost_m2 = Number.parseFloat(nvtAeropuerto.propertyData.cost_m2.toFixed(2));
						}
		
						nvtAeropuerto.propertyData.number = row.number;
						nvtAeropuerto.propertyData.area = row.area;
						var total = nvtAeropuerto.propertyData.cost_m2 * nvtAeropuerto.propertyData.area;
						nvtAeropuerto.propertyData.total = total.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2});
						var totalDiscountPlan1 = total - (total * discountPlan1);
						nvtAeropuerto.propertyData.discountPlan1 = discountPlan1 * 100;
						nvtAeropuerto.propertyData.totalPlan1 = totalDiscountPlan1.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2});
						var totalDiscountPlan2 = total - (total * discountPlan2);
						nvtAeropuerto.propertyData.discountPlan2 = discountPlan2 * 100;
						nvtAeropuerto.propertyData.totalPlan2 = totalDiscountPlan2.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2});
						nvtAeropuerto.openDialog();
					}
				});

			} else {

				alert('No se encontro información sobre esta propiedad');

			}

		}, function(response) {

			alert('Revisa tu conexión a internet o contacta a un administrador');

		});
	}

	nvtAeropuerto.openDialog = function() {
		nvtAeropuerto.dialogDisplay = '';
	}

	nvtAeropuerto.closeDialog = function() {
		nvtAeropuerto.dialogDisplay = 'hide';
	}

	var init = function() {

		Inmovables.getInmovablesData(6, 3).then(function(response) {

			inmovablesData = response;
			nvtAeropuerto.inmovables = response.inmovables;
			nvtAeropuerto.inmovablesClassList = inmovables.generateInmovablesClassList(inmovablesData.inmovables);

		});

	}

	init();

});

app.controller('NvtLaPresaQuoteCtrl', function($scope, Inmovables, Developments, Status) {

	var nvtLaPresa = this;
	var inmovables = Inmovables;
	
	var inmovablesData = [];
	nvtLaPresa.inmovablesClassList = [];
	nvtLaPresa.propertyData = [];

	nvtLaPresa.dialogDisplay = 'hide';

	var discountPlan1 = .25;
	var discountPlan2 = .20;

	nvtLaPresa.showPropertyData = function(idCondominium, number, idProperty) {
		
		Developments.selectPropertyById(idProperty).then(function(response) {

			if (Status.checkHttpStatusCode(response.status)) {

				nvtLaPresa.property = response.property;
				nvtLaPresa.property.sample = {};

				nvtLaPresa.property.sample.m2 = (nvtLaPresa.property.cost.increase.m2 > 0) ? nvtLaPresa.property.cost.increase.m2 : nvtLaPresa.property.cost.m2;
				nvtLaPresa.property.sample.property = nvtLaPresa.property.sample.m2 * nvtLaPresa.property.area;

				nvtLaPresa.property.sample.discount1 = nvtLaPresa.property.sample.property - (nvtLaPresa.property.sample.property * discountPlan1);
				nvtLaPresa.property.sample.discount2 = nvtLaPresa.property.sample.property - (nvtLaPresa.property.sample.property * discountPlan2);

				angular.forEach(inmovablesData.inmovables, function(row, key) {
					if (row.number == number && row.idCondominium == idCondominium) {
						nvtLaPresa.propertyData.condominium = inmovablesData.condos[0].condominium;
						if (row.property_class == 1) {
							nvtLaPresa.propertyData.propertyClass = 'Nave industrial';
							nvtLaPresa.costToBlock = '$30,000 MXN';
						} else if (row.property_class == 2) {
							nvtLaPresa.propertyData.propertyClass = 'Lote industrial';
							nvtLaPresa.costToBlock = '$10,000 MXN';
						} else {
							nvtLaPresa.propertyData.propertyClass = 'Lote habitacional';
							nvtLaPresa.costToBlock = '$10,000 MXN';
						}
		
						for (let indexType = 0; indexType < inmovablesData.propertyTypes.length; indexType++) {
		
							if (inmovablesData.inmovables[key].idPropertyType == inmovablesData.propertyTypes[indexType].idPropertyType) {
		
								nvtLaPresa.propertyData.type = inmovablesData.propertyTypes[indexType].type;
								nvtLaPresa.propertyData.cost_m2 = Number.parseFloat(inmovablesData.propertyTypes[indexType].cost_m2.toFixed(2));
		
								break;
		
							}
		
						}
		
						if (row.cost_m2_increase != null) {
							nvtLaPresa.propertyData.cost_m2 = nvtLaPresa.property.cost.increase.m2;
							nvtLaPresa.propertyData.cost_m2 = Number.parseFloat(nvtLaPresa.propertyData.cost_m2.toFixed(2));
						}
		
						nvtLaPresa.propertyData.number = row.number;
						nvtLaPresa.propertyData.area = row.area;
						var total = nvtLaPresa.propertyData.cost_m2 * nvtLaPresa.propertyData.area;
						nvtLaPresa.propertyData.total = total.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2});
						var totalDiscountPlan1 = total - (total * discountPlan1);
						nvtLaPresa.propertyData.discountPlan1 = discountPlan1 * 100;
						nvtLaPresa.propertyData.totalPlan1 = totalDiscountPlan1.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2});
						var totalDiscountPlan2 = total - (total * discountPlan2);
						nvtLaPresa.propertyData.discountPlan2 = discountPlan2 * 100;
						nvtLaPresa.propertyData.totalPlan2 = totalDiscountPlan2.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2});
						nvtLaPresa.openDialog();
					}
				});

			} else {

				alert('No se encontro información sobre esta propiedad');

			}

		}, function(response) {

			alert('Revisa tu conexión a internet o contacta a un administrador');

		});
	}

	nvtLaPresa.openDialog = function() {
		nvtLaPresa.dialogDisplay = '';
	}

	nvtLaPresa.closeDialog = function() {
		nvtLaPresa.dialogDisplay = 'hide';
	}

	var init = function() {

		Inmovables.getInmovablesData(9, 10).then(function(response) {

			inmovablesData = response;
			nvtLaPresa.inmovables = response.inmovables;
			nvtLaPresa.inmovablesClassList = inmovables.generateInmovablesClassList(inmovablesData.inmovables);

		});

	}

	init();

});

app.controller('NvtPedroEscobedoQuoteCtrl', function($scope, Inmovables, Developments, Status) {

	var nvtPedroEscobedo = this;
	var inmovables = Inmovables;
	
	var inmovablesData = [];
	nvtPedroEscobedo.inmovablesClassList = [];
	nvtPedroEscobedo.propertyData = [];

	nvtPedroEscobedo.dialogDisplay = 'hide';

	var discountPlan1 = .25;
	var discountPlan2 = .20;

	nvtPedroEscobedo.showPropertyData = function(idCondominium, number, idProperty) {
		
		Developments.selectPropertyById(idProperty).then(function(response) {

			if (Status.checkHttpStatusCode(response.status)) {

				nvtPedroEscobedo.property = response.property;
				nvtPedroEscobedo.property.sample = {};

				nvtPedroEscobedo.property.sample.m2 = (nvtPedroEscobedo.property.cost.increase.m2 > 0) ? nvtPedroEscobedo.property.cost.increase.m2 : nvtPedroEscobedo.property.cost.m2;
				nvtPedroEscobedo.property.sample.property = nvtPedroEscobedo.property.sample.m2 * nvtPedroEscobedo.property.area;

				nvtPedroEscobedo.property.sample.discount1 = nvtPedroEscobedo.property.sample.property - (nvtPedroEscobedo.property.sample.property * discountPlan1);
				nvtPedroEscobedo.property.sample.discount2 = nvtPedroEscobedo.property.sample.property - (nvtPedroEscobedo.property.sample.property * discountPlan2);

				angular.forEach(inmovablesData.inmovables, function(row, key) {
					if (row.number == number && row.idCondominium == idCondominium) {
						nvtPedroEscobedo.propertyData.condominium = inmovablesData.condos[0].condominium;
						if (row.property_class == 1) {
							nvtPedroEscobedo.propertyData.propertyClass = 'Nave industrial';
							nvtPedroEscobedo.costToBlock = '$30,000 MXN';
						} else if (row.property_class == 2) {
							nvtPedroEscobedo.propertyData.propertyClass = 'Lote industrial';
							nvtPedroEscobedo.costToBlock = '$10,000 MXN';
						} else {
							nvtPedroEscobedo.propertyData.propertyClass = 'Lote habitacional';
							nvtPedroEscobedo.costToBlock = '$10,000 MXN';
						}
		
						for (let indexType = 0; indexType < inmovablesData.propertyTypes.length; indexType++) {
		
							if (inmovablesData.inmovables[key].idPropertyType == inmovablesData.propertyTypes[indexType].idPropertyType) {
		
								nvtPedroEscobedo.propertyData.type = inmovablesData.propertyTypes[indexType].type;
								nvtPedroEscobedo.propertyData.cost_m2 = Number.parseFloat(inmovablesData.propertyTypes[indexType].cost_m2.toFixed(2));
		
								break;
		
							}
		
						}
		
						if (row.cost_m2_increase != null) {
							nvtPedroEscobedo.propertyData.cost_m2 = nvtPedroEscobedo.property.cost.increase.m2;
							nvtPedroEscobedo.propertyData.cost_m2 = Number.parseFloat(nvtPedroEscobedo.propertyData.cost_m2.toFixed(2));
						}
		
						nvtPedroEscobedo.propertyData.number = row.number;
						nvtPedroEscobedo.propertyData.area = row.area;
						var total = nvtPedroEscobedo.propertyData.cost_m2 * nvtPedroEscobedo.propertyData.area;
						nvtPedroEscobedo.propertyData.total = total.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2});
						var totalDiscountPlan1 = total - (total * discountPlan1);
						nvtPedroEscobedo.propertyData.discountPlan1 = discountPlan1 * 100;
						nvtPedroEscobedo.propertyData.totalPlan1 = totalDiscountPlan1.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2});
						var totalDiscountPlan2 = total - (total * discountPlan2);
						nvtPedroEscobedo.propertyData.discountPlan2 = discountPlan2 * 100;
						nvtPedroEscobedo.propertyData.totalPlan2 = totalDiscountPlan2.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2});
						nvtPedroEscobedo.openDialog();
					}
				});

			} else {

				alert('No se encontro información sobre esta propiedad');

			}

		}, function(response) {

			alert('Revisa tu conexión a internet o contacta a un administrador');

		});
	}

	nvtPedroEscobedo.openDialog = function() {
		nvtPedroEscobedo.dialogDisplay = '';
	}

	nvtPedroEscobedo.closeDialog = function() {
		nvtPedroEscobedo.dialogDisplay = 'hide';
	}

	var init = function() {

		Inmovables.getInmovablesData(8, 9).then(function(response) {

			inmovablesData = response;
			nvtPedroEscobedo.inmovables = response.inmovables;
			nvtPedroEscobedo.inmovablesClassList = inmovables.generateInmovablesClassList(inmovablesData.inmovables);

		});

	}

	init();

});

app.controller('NvtSLPQuoteCtrl', function($scope, Inmovables, Developments, Status) {

	var nvtPedroEscobedo = this;
	var inmovables = Inmovables;
	
	var inmovablesData = [];
	nvtPedroEscobedo.inmovablesClassList = [];
	nvtPedroEscobedo.propertyData = [];

	nvtPedroEscobedo.dialogDisplay = 'hide';

	var discountPlan1 = .30;
	var discountPlan2 = .20;

	nvtPedroEscobedo.showPropertyData = function(idCondominium, number, idProperty) {
		
		Developments.selectPropertyById(idProperty).then(function(response) {

			if (Status.checkHttpStatusCode(response.status)) {

				nvtPedroEscobedo.property = response.property;
				nvtPedroEscobedo.property.sample = {};

				nvtPedroEscobedo.property.sample.m2 = (nvtPedroEscobedo.property.cost.increase.m2 > 0) ? nvtPedroEscobedo.property.cost.increase.m2 : nvtPedroEscobedo.property.cost.m2;
				nvtPedroEscobedo.property.sample.property = nvtPedroEscobedo.property.sample.m2 * nvtPedroEscobedo.property.area;

				nvtPedroEscobedo.property.sample.discount1 = nvtPedroEscobedo.property.sample.property - (nvtPedroEscobedo.property.sample.property * discountPlan1);
				nvtPedroEscobedo.property.sample.discount2 = nvtPedroEscobedo.property.sample.property - (nvtPedroEscobedo.property.sample.property * discountPlan2);

				angular.forEach(inmovablesData.inmovables, function(row, key) {
					if (row.number == number && row.idCondominium == idCondominium) {
						nvtPedroEscobedo.propertyData.condominium = inmovablesData.condos[0].condominium;
						if (row.property_class == 1) {
							nvtPedroEscobedo.propertyData.propertyClass = 'Nave industrial';
							nvtPedroEscobedo.costToBlock = '$30,000 MXN';
						} else if (row.property_class == 2) {
							nvtPedroEscobedo.propertyData.propertyClass = 'Lote industrial';
							nvtPedroEscobedo.costToBlock = '$10,000 MXN';
						} else {
							nvtPedroEscobedo.propertyData.propertyClass = 'Lote habitacional';
							nvtPedroEscobedo.costToBlock = '$10,000 MXN';
						}
		
						for (let indexType = 0; indexType < inmovablesData.propertyTypes.length; indexType++) {
		
							if (inmovablesData.inmovables[key].idPropertyType == inmovablesData.propertyTypes[indexType].idPropertyType) {
		
								nvtPedroEscobedo.propertyData.type = inmovablesData.propertyTypes[indexType].type;
								nvtPedroEscobedo.propertyData.cost_m2 = Number.parseFloat(inmovablesData.propertyTypes[indexType].cost_m2.toFixed(2));
		
								break;
		
							}
		
						}
		
						if (row.cost_m2_increase != null) {
							nvtPedroEscobedo.propertyData.cost_m2 = nvtPedroEscobedo.property.cost.increase.m2;
							nvtPedroEscobedo.propertyData.cost_m2 = Number.parseFloat(nvtPedroEscobedo.propertyData.cost_m2.toFixed(2));
						}
		
						nvtPedroEscobedo.propertyData.number = row.number;
						nvtPedroEscobedo.propertyData.area = row.area;
						var total = nvtPedroEscobedo.propertyData.cost_m2 * nvtPedroEscobedo.propertyData.area;
						nvtPedroEscobedo.propertyData.total = total.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2});
						var totalDiscountPlan1 = total - (total * discountPlan1);
						nvtPedroEscobedo.propertyData.discountPlan1 = discountPlan1 * 100;
						nvtPedroEscobedo.propertyData.totalPlan1 = totalDiscountPlan1.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2});
						var totalDiscountPlan2 = total - (total * discountPlan2);
						nvtPedroEscobedo.propertyData.discountPlan2 = discountPlan2 * 100;
						nvtPedroEscobedo.propertyData.totalPlan2 = totalDiscountPlan2.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2});
						nvtPedroEscobedo.openDialog();
					}
				});

			} else {

				alert('No se encontro información sobre esta propiedad');

			}

		}, function(response) {

			alert('Revisa tu conexión a internet o contacta a un administrador');

		});
	}

	nvtPedroEscobedo.openDialog = function() {
		nvtPedroEscobedo.dialogDisplay = '';
	}

	nvtPedroEscobedo.closeDialog = function() {
		nvtPedroEscobedo.dialogDisplay = 'hide';
	}

	var init = function() {

		Inmovables.getInmovablesData(10, 13).then(function(response) {

			inmovablesData = response;
			nvtPedroEscobedo.inmovables = response.inmovables;
			nvtPedroEscobedo.inmovablesClassList = inmovables.generateInmovablesClassList(inmovablesData.inmovables);

		});

	}

	init();

});
/***** Celta *****/


app.controller('NvtCeltaQuoteCtrl', function($scope, Inmovables, Developments, Status) {

	var nvtCelta = this;
	var inmovables = Inmovables;
	
	var inmovablesData = [];
	nvtCelta.inmovablesClassList = [];
	nvtCelta.propertyData = [];

	nvtCelta.dialogDisplay = 'hide';

	var discountPlan1 = .25;
	var discountPlan2 = .20;

	nvtCelta.showPropertyData = function(idCondominium, number, idProperty) {
		
		Developments.selectPropertyById(idProperty).then(function(response) {

			if (Status.checkHttpStatusCode(response.status)) {

				nvtCelta.property = response.property;
				nvtCelta.property.sample = {};

				nvtCelta.property.sample.m2 = (nvtCelta.property.cost.increase.m2 > 0) ? nvtCelta.property.cost.increase.m2 : nvtCelta.property.cost.m2;
				nvtCelta.property.sample.property = nvtCelta.property.sample.m2 * nvtCelta.property.area;

				nvtCelta.property.sample.discount1 = nvtCelta.property.sample.property - (nvtCelta.property.sample.property * discountPlan1);
				nvtCelta.property.sample.discount2 = nvtCelta.property.sample.property - (nvtCelta.property.sample.property * discountPlan2);

				angular.forEach(inmovablesData.inmovables, function(row, key) {
					if (row.number == number && row.idCondominium == idCondominium) {
						nvtCelta.propertyData.condominium = inmovablesData.condos[0].condominium;
						if (row.property_class == 1) {
							nvtCelta.propertyData.propertyClass = 'Nave industrial';
							nvtCelta.costToBlock = '$30,000 MXN';
						} else if (row.property_class == 2) {
							nvtCelta.propertyData.propertyClass = 'Lote industrial';
							nvtCelta.costToBlock = '$10,000 MXN';
						} else {
							nvtCelta.propertyData.propertyClass = 'Lote habitacional';
							nvtCelta.costToBlock = '$10,000 MXN';
						}
		
						for (let indexType = 0; indexType < inmovablesData.propertyTypes.length; indexType++) {
		
							if (inmovablesData.inmovables[key].idPropertyType == inmovablesData.propertyTypes[indexType].idPropertyType) {
		
								nvtCelta.propertyData.type = inmovablesData.propertyTypes[indexType].type;
								nvtCelta.propertyData.cost_m2 = Number.parseFloat(inmovablesData.propertyTypes[indexType].cost_m2.toFixed(2));
		
								break;
		
							}
		
						}
		
						if (row.cost_m2_increase != null) {
							nvtCelta.propertyData.cost_m2 = nvtCelta.property.cost.increase.m2;
							nvtCelta.propertyData.cost_m2 = Number.parseFloat(nvtCelta.propertyData.cost_m2.toFixed(2));
						}
		
						nvtCelta.propertyData.number = row.number;
						nvtCelta.propertyData.area = row.area;
						var total = nvtCelta.propertyData.cost_m2 * nvtCelta.propertyData.area;
						nvtCelta.propertyData.total = total.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2});
						var totalDiscountPlan1 = total - (total * discountPlan1);
						nvtCelta.propertyData.discountPlan1 = discountPlan1 * 100;
						nvtCelta.propertyData.totalPlan1 = totalDiscountPlan1.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2});
						var totalDiscountPlan2 = total - (total * discountPlan2);
						nvtCelta.propertyData.discountPlan2 = discountPlan2 * 100;
						nvtCelta.propertyData.totalPlan2 = totalDiscountPlan2.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2});
						nvtCelta.openDialog();
					}
				});

			} else {

				alert('No se encontro información sobre esta propiedad');

			}

		}, function(response) {

			alert('Revisa tu conexión a internet o contacta a un administrador');

		});
	}

	nvtCelta.openDialog = function() {
		nvtCelta.dialogDisplay = '';
	}

	nvtCelta.closeDialog = function() {
		nvtCelta.dialogDisplay = 'hide';
	}

	var init = function() {

		Inmovables.getInmovablesData(11, 18).then(function(response) {

			inmovablesData = response;
			nvtCelta.inmovables = response.inmovables;
			console.log(response.inmovables)
			nvtCelta.inmovablesClassList = inmovables.generateInmovablesClassList(inmovablesData.inmovables);

		});

	}

	init();

});

/***** Calamanda*****/


app.controller('NvtCalamandaQuoteCtrl', function($scope, Inmovables, Developments, Status) {

	var nvtCalamanda = this;
	var inmovables = Inmovables;
	
	var inmovablesData = [];
	nvtCalamanda.inmovablesClassList = [];
	nvtCalamanda.propertyData = [];
	// modal
	nvtCalamanda.dialogDisplay = 'hide';

	var discountPlan1 = .25;
	var discountPlan2 = .20;

	nvtCalamanda.showPropertyData = function(idCondominium, number, idProperty) {
		
		Developments.selectPropertyById(idProperty).then(function(response) {

			if (Status.checkHttpStatusCode(response.status)) {

				nvtCalamanda.property = response.property;
				nvtCalamanda.property.sample = {};

				nvtCalamanda.property.sample.m2 = (nvtCalamanda.property.cost.increase.m2 > 0) ? nvtCalamanda.property.cost.increase.m2 : nvtCalamanda.property.cost.m2;
				nvtCalamanda.property.sample.property = nvtCalamanda.property.sample.m2 * nvtCalamanda.property.area;

				nvtCalamanda.property.sample.discount1 = nvtCalamanda.property.sample.property - (nvtCalamanda.property.sample.property * discountPlan1);
				nvtCalamanda.property.sample.discount2 = nvtCalamanda.property.sample.property - (nvtCalamanda.property.sample.property * discountPlan2);

				angular.forEach(inmovablesData.inmovables, function(row, key) {
					if (row.number == number && row.idCondominium == idCondominium) {
						nvtCalamanda.propertyData.condominium = inmovablesData.condos[0].condominium;
						if (row.property_class == 1) {
							nvtCalamanda.propertyData.propertyClass = 'Nave industrial';
							nvtCalamanda.costToBlock = '$30,000 MXN';
						} else if (row.property_class == 2) {
							nvtCalamanda.propertyData.propertyClass = 'Lote industrial';
							nvtCalamanda.costToBlock = '$10,000 MXN';
						} else {
							nvtCalamanda.propertyData.propertyClass = 'Lote habitacional';
							nvtCalamanda.costToBlock = '$10,000 MXN';
						}
		
						for (let indexType = 0; indexType < inmovablesData.propertyTypes.length; indexType++) {
		
							if (inmovablesData.inmovables[key].idPropertyType == inmovablesData.propertyTypes[indexType].idPropertyType) {
		
								nvtCalamanda.propertyData.type = inmovablesData.propertyTypes[indexType].type;
								nvtCalamanda.propertyData.cost_m2 = Number.parseFloat(inmovablesData.propertyTypes[indexType].cost_m2.toFixed(2));
		
								break;
		
							}
		
						}
		
						if (row.cost_m2_increase != null) {
							nvtCalamanda.propertyData.cost_m2 = nvtCalamanda.property.cost.increase.m2;
							nvtCalamanda.propertyData.cost_m2 = Number.parseFloat(nvtCalamanda.propertyData.cost_m2.toFixed(2));
						}
		
						nvtCalamanda.propertyData.number = row.number;
						nvtCalamanda.propertyData.area = row.area;
						var total = nvtCalamanda.propertyData.cost_m2 * nvtCalamanda.propertyData.area;
						nvtCalamanda.propertyData.total = total.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2});
						var totalDiscountPlan1 = total - (total * discountPlan1);
						nvtCalamanda.propertyData.discountPlan1 = discountPlan1 * 100;
						nvtCalamanda.propertyData.totalPlan1 = totalDiscountPlan1.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2});
						var totalDiscountPlan2 = total - (total * discountPlan2);
						nvtCalamanda.propertyData.discountPlan2 = discountPlan2 * 100;
						nvtCalamanda.propertyData.totalPlan2 = totalDiscountPlan2.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2});
						nvtCalamanda.openDialog();
					}
				});

			} else {

				alert('No se encontro información sobre esta propiedad');

			}

		}, function(response) {

			alert('Revisa tu conexión a internet o contacta a un administrador');

		});
	}

	nvtCalamanda.openDialog = function() {
		nvtCalamanda.dialogDisplay = '';
	}

	nvtCalamanda.closeDialog = function() {
		nvtCalamanda.dialogDisplay = 'hide';
	}

	var init = function() {

		Inmovables.getInmovablesData(13, 23).then(function(response) {

			inmovablesData = response;
			nvtCalamanda.inmovables = response.inmovables;
			console.log(response.inmovables)
			nvtCalamanda.inmovablesClassList = inmovables.generateInmovablesClassList(inmovablesData.inmovables);

		});

	}

	init();

});


/********** Habitta **********/

/***** Inventary *****/

/*** Veredas de Lira ***/

app.controller('VLCedroCtrl', function($scope, $location, $http, Session, Inmovables, Leads) {

	Session.permissions().then(function(response) {
		if (response.isLogged < 1) {
			$location.path('/login');
		}
		if (response.idProfile != 1 && response.isLogged != 3) {
			$location.path('/dashboard');
		}
	});

	var cedro = this;

	let inmovables = Inmovables;
	let selectedPropertyID = 0;
	let selectedUserID = 0;
	let selectedLeadID = 0;
	let selectedStatus = 0;
	let selectedPropertyStatusID = 0;
	
	cedro.inmovablesData = [];
	cedro.inmovablesClassList = [];
	cedro.activeUsers = [];
	cedro.leadsResult = [];

	cedro.dialogDisplay = 'hide';
	cedro.dialogStatusDisplay = 'hide';
	cedro.cedroListDialogDisplay = 'hide';

	cedro.setLeadProperty = function(property) {
		cedro.propertyData = property;
		selectedPropertyStatusID = cedro.propertyData.idPropertyStatus;
		selectedPropertyID = cedro.propertyData.idProperty;
		if (selectedPropertyStatusID > 1) {
			cedro.closeDialog();
			cedro.openDialogStatus();
		} else {
			cedro.openDialog();
		}
	}

	cedro.selectUser = function(idUser, index) {
		selectedUserIndex = index;
		cedro.idUser = idUser;
		cedro.collapse(index);
	}

	var getUsers = function() {
		$http({
			method: 'POST',
		    url: 'application/controllers/get_active_users_controller.php',
		    headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' }
		}).then(function(response) {
			cedro.usersResult = response.data;
			if (cedro.usersResult.status >	 0) {
				cedro.getUsersMsgResult = 'No se encontró ningún usuario';
				cedro.usersResult = {};
			} else {
				cedro.getUsersMsgResult = '';
				angular.forEach(cedro.usersResult.users, function(user, key) {
					user.leads = [];
					angular.forEach(cedro.leadsResult, function(lead, key) {
						if (lead[5] == user.idUser) {
							user.leads.push({idLead: lead[0], name: lead[1], last_name: lead[2], idUser: lead[5]});
						}
					});
					user.collapsableBodyClass = 'saufth-collapsable-hide';
					user.collapsableHeaderClass = '';
					cedro.activeUsers.push(user);
				});
				console.log(cedro.activeUsers);
			}
			console.log('HTTP_GET_ACTIVE_USERS_OK');
		}, function(response) {
			console.log('HTTP_GET_ACTIVE_USERS_ERR');
		});
	}

	var getLeads = function() {
		Leads.selectActiveLeads().then(function(response) {
			console.log('HTTP_GET_LEADS_OK');
			cedro.leadsResult = response.result;
			getUsers();
		}, function(response) {
			console.log('HTTP_GET_LEADS_ERR');
		});
	}

	var insertLeadPropertyStatus = function() {
		$http({
			method: 'POST',
			url: 'application/controllers/insert_lead_property_status_controller.php',
			data: {
				idUser: selectedUserID,
				idLead: selectedLeadID,
				status: selectedStatus,
				idProperty: selectedPropertyID,
				zoho_id: cedro.propertyData.zoho_id
			},
			headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' }
		}).then(function(response) {
			inmovables.getInmovablesData(5, 2).then(function(response) {
				cedro.inmovablesData = response;
				cedro.inmovablesClassList = inmovables.generateInmovablesClassListInventary(cedro.inmovablesData.inmovables);
				prepareInmovablesData();
				cedro.closeDialogStatus();
				cedro.closeDialog();
			});
			console.log('HTTP_INSERT_LEAD_PROPERTY_STATUS_OK');
		}, function(response) {
			console.log('HTTP_INSERT_LEAD_PROPERTY_STATUS_ERR');
		});
	}

	var deleteLeadPropertyStatus = function() {
		$http({
			method: 'POST',
			url: 'application/controllers/delete_lead_property_status_controller.php',
			data: {
				idUser: selectedUserID,
				idLead: selectedLeadID,
				status: selectedStatus,
				idProperty: selectedPropertyID
			},
			headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' }
		}).then(function(response) {
			inmovables.getInmovablesData(5, 2).then(function(response) {
				cedro.inmovablesData = response;
				cedro.inmovablesClassList = inmovables.generateInmovablesClassListInventary(cedro.inmovablesData.inmovables);
				prepareInmovablesData();
				cedro.closeDialogStatus();
				cedro.closeDialog();
			});
			console.log('HTTP_DELETE_LEAD_PROPERTY_STATUS_OK');
		}, function(response) {
			console.log('HTTP_DELETE_LEAD_PROPERTY_STATUS_ERR');
		});
	}

	var updatePropertyStatus = function() {
		$http({
			method: 'POST',
			url: 'application/controllers/update_property_status_controller.php',
			data: {
				status: selectedStatus,
				idProperty: selectedPropertyID
			},
			headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' }
		}).then(function(response) {
			inmovables.getInmovablesData(5, 2).then(function(response) {
				cedro.inmovablesData = response;
				cedro.inmovablesClassList = inmovables.generateInmovablesClassListInventary(cedro.inmovablesData.inmovables);
				prepareInmovablesData();
				cedro.closeDialogStatus();
			});
			console.log('HTTP_UPDATE_PROPERTY_STATUS_OK');
		}, function(response) {
			console.log('HTTP_UPDATE_PROPERTY_STATUS_ERR');
		});
	}

	cedro.selectLeadPropertyStatus = function(idUser, idLead) {
		selectedUserID = idUser;
		selectedLeadID = idLead;
		cedro.openDialogStatus();
	}

	cedro.setStatus = function(status) {
		selectedStatus = status;
		if (selectedPropertyStatusID > 1) {
			if (selectedStatus > 1) {
				updatePropertyStatus();
			} else {
				deleteLeadPropertyStatus();
			}
		} else {
			insertLeadPropertyStatus();
		}
	}

	cedro.showInmovablesList = function() {
		cedro.openCedroListDialog();
	}

	cedro.openDialog = function() {
		cedro.dialogDisplay = '';
	}

	cedro.closeDialog = function() {
		cedro.dialogDisplay = 'hide';
	}
	
	cedro.openDialogStatus = function() {
		cedro.dialogStatusDisplay = '';
	}

	cedro.closeDialogStatus = function() {
		cedro.dialogStatusDisplay = 'hide';
	}
	
	cedro.openCedroListDialog = function() {
		cedro.cedroListDialogDisplay = '';
	}

	cedro.closeCedroListDialog = function() {
		cedro.cedroListDialogDisplay = 'hide';
	}

	let collapsed = -1;

	cedro.collapse = function(index) {
		if (collapsed < 0) {
			cedro.activeUsers[index].collapsableBodyClass = 'saufth-collapsable-show';
			cedro.activeUsers[index].collapsableHeaderClass = 'saufth-collapsable-header-bg';
			collapsed = index;
		} else if (collapsed == index) {
			cedro.activeUsers[index].collapsableBodyClass = 'saufth-collapsable-hide';
			cedro.activeUsers[index].collapsableHeaderClass = '';
			collapsed = -1;
		} else if (collapsed >= 0) {
			if (index != Object.keys(cedro.activeUsers).length-1) {
				cedro.activeUsers[collapsed].collapsableBodyClass = 'saufth-collapsable-hide';
				cedro.activeUsers[collapsed].collapsableHeaderClass = '';
				cedro.activeUsers[index].collapsableBodyClass = 'saufth-collapsable-show';
				cedro.activeUsers[index].collapsableHeaderClass = 'saufth-collapsable-header-bg';
				collapsed = index;
			} else {
				if (index != collapsed) {
					cedro.activeUsers[collapsed].collapsableBodyClass = 'saufth-collapsable-hide';
					cedro.activeUsers[collapsed].collapsableHeaderClass = '';
					cedro.activeUsers[index].collapsableBodyClass = 'saufth-collapsable-show-last';
					cedro.activeUsers[index].collapsableHeaderClass = 'saufth-collapsable-header-bg';
					collapsed = index;
				} else {
					cedro.activeUsers[index].collapsableBodyClass = 'saufth-collapsable-hide';
					cedro.activeUsers[index].collapsableHeaderClass = '';
					collapsed = -1;
				}
			}
		}
	}

	let prepareInmovablesData = function() {
		angular.forEach(cedro.inmovablesData.inmovables, function(property, propertyKey) {
			angular.forEach(cedro.inmovablesData.propertyTypes, function(type, typeKey) {
				if (property.idPropertyType == type.idPropertyType) {
					cedro.inmovablesData.inmovables[propertyKey].type = type.type;
				}
			});
			angular.forEach(cedro.inmovablesData.condos, function(condominium, condominiumKey) {
				if (property.idCondominium == condominium.idCondominium) {
					cedro.inmovablesData.inmovables[propertyKey].condominium = condominium.condominium;
				}
			});
		});
		console.log(cedro.inmovablesData.inmovables);
	}

	var init = function() {
		inmovables.getInmovablesData(5, 2).then(function(response) {
			cedro.inmovablesData = response;
			cedro.inmovablesClassList = inmovables.generateInmovablesClassListInventary(cedro.inmovablesData.inmovables);
			prepareInmovablesData();
			getLeads();
		});
	}

	init();
});

app.controller('VLSabinoCtrl', function($scope, $location, $http, Session, Inmovables, Leads) {

	Session.permissions().then(function(response) {
		if (response.isLogged < 1) {
			$location.path('/login');
		}
		if (response.idProfile != 1 && response.isLogged != 3) {
			$location.path('/dashboard');
		}
	});

	var sabino = this;

	let inmovables = Inmovables;
	let selectedPropertyID = 0;
	let selectedUserID = 0;
	let selectedLeadID = 0;
	let selectedStatus = 0;
	let selectedPropertyStatusID = 0;
	
	sabino.inmovablesData = [];
	sabino.inmovablesClassList = [];
	sabino.activeUsers = [];
	sabino.deletedUsers = [];
	sabino.leadsResult = [];

	sabino.dialogDisplay = 'hide';
	sabino.dialogStatusDisplay = 'hide';
	sabino.sabinoListDialogDisplay = 'hide';

	sabino.setLeadProperty = function(property) {
		sabino.propertyData = property;
		selectedPropertyStatusID = sabino.propertyData.idPropertyStatus;
		selectedPropertyID = sabino.propertyData.idProperty;
		if (selectedPropertyStatusID > 1) {
			sabino.closeDialog();
			sabino.openDialogStatus();
		} else {
			sabino.openDialog();
		}
	}

	sabino.selectUser = function(idUser, index) {
		selectedUserIndex = index;
		sabino.idUser = idUser;
		sabino.collapse(index);
	}

	var getUsers = function() {
		$http({
			method: 'POST',
		    url: 'application/controllers/get_active_users_controller.php',
		    headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' }
		}).then(function(response) {
			sabino.usersResult = response.data;
			if (sabino.usersResult.status >	 0) {
				sabino.getUsersMsgResult = 'No se encontró ningún usuario';
				sabino.usersResult = {};
			} else {
				sabino.getUsersMsgResult = '';
				angular.forEach(sabino.usersResult.users, function(user, key) {
					user.leads = [];
					angular.forEach(sabino.leadsResult, function(lead, key) {
						if (lead[5] == user.idUser) {
							user.leads.push({idLead: lead[0], name: lead[1], last_name: lead[2], idUser: lead[5]});
						}
					});
					user.collapsableBodyClass = 'saufth-collapsable-hide';
					user.collapsableHeaderClass = '';
					sabino.activeUsers.push(user);
				});
			}
			console.log('HTTP_GET_ACTIVE_USERS_OK');
		}, function(response) {
			console.log('HTTP_GET_ACTIVE_USERS_ERR');
		});
	}

	var getLeads = function() {
		Leads.selectActiveLeads().then(function(response) {
			console.log('HTTP_GET_LEADS_OK');
			sabino.leadsResult = response.result;
			getUsers();
		}, function(response) {
			console.log('HTTP_GET_LEADS_ERR');
		});
	}

	var insertLeadPropertyStatus = function() {
		$http({
			method: 'POST',
			url: 'application/controllers/insert_lead_property_status_controller.php',
			data: {
				idUser: selectedUserID,
				idLead: selectedLeadID,
				status: selectedStatus,
				idProperty: selectedPropertyID,
				zoho_id: sabino.propertyData.zoho_id
			},
			headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' }
		}).then(function(response) {
			inmovables.getInmovablesData(5, 2).then(function(response) {
				sabino.inmovablesData = response;
				sabino.inmovablesClassList = inmovables.generateInmovablesClassListInventary(sabino.inmovablesData.inmovables);
				prepareInmovablesData();
				sabino.closeDialogStatus();
				sabino.closeDialog();
			});
			console.log('HTTP_INSERT_LEAD_PROPERTY_STATUS_OK');
		}, function(response) {
			console.log('HTTP_INSERT_LEAD_PROPERTY_STATUS_ERR');
		});
	}

	var deleteLeadPropertyStatus = function() {
		$http({
			method: 'POST',
			url: 'application/controllers/delete_lead_property_status_controller.php',
			data: {
				idUser: selectedUserID,
				idLead: selectedLeadID,
				status: selectedStatus,
				idProperty: selectedPropertyID
			},
			headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' }
		}).then(function(response) {
			inmovables.getInmovablesData(5, 2).then(function(response) {
				sabino.inmovablesData = response;
				sabino.inmovablesClassList = inmovables.generateInmovablesClassListInventary(sabino.inmovablesData.inmovables);
				prepareInmovablesData();
				sabino.closeDialogStatus();
				sabino.closeDialog();
			});
			console.log('HTTP_DELETE_LEAD_PROPERTY_STATUS_OK');
		}, function(response) {
			console.log('HTTP_DELETE_LEAD_PROPERTY_STATUS_ERR');
		});
	}

	var updatePropertyStatus = function() {
		$http({
			method: 'POST',
			url: 'application/controllers/update_property_status_controller.php',
			data: {
				status: selectedStatus,
				idProperty: selectedPropertyID
			},
			headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' }
		}).then(function(response) {
			inmovables.getInmovablesData(5, 2).then(function(response) {
				sabino.inmovablesData = response;
				sabino.inmovablesClassList = inmovables.generateInmovablesClassListInventary(sabino.inmovablesData.inmovables);
				prepareInmovablesData();
				sabino.closeDialogStatus();
			});
			console.log('HTTP_UPDATE_PROPERTY_STATUS_OK');
		}, function(response) {
			console.log('HTTP_UPDATE_PROPERTY_STATUS_ERR');
		});
	}

	sabino.selectLeadPropertyStatus = function(idUser, idLead) {
		selectedUserID = idUser;
		selectedLeadID = idLead;
		sabino.openDialogStatus();
	}

	sabino.setStatus = function(status) {
		selectedStatus = status;
		if (selectedPropertyStatusID > 1) {
			if (selectedStatus > 1) {
				updatePropertyStatus();
			} else {
				deleteLeadPropertyStatus();
			}
		} else {
			insertLeadPropertyStatus();
		}
	}

	sabino.showInmovablesList = function() {
		sabino.openSabinoListDialog();
	}

	sabino.openDialog = function() {
		sabino.dialogDisplay = '';
	}

	sabino.closeDialog = function() {
		sabino.dialogDisplay = 'hide';
	}
	
	sabino.openDialogStatus = function() {
		sabino.dialogStatusDisplay = '';
	}

	sabino.closeDialogStatus = function() {
		sabino.dialogStatusDisplay = 'hide';
	}
	
	sabino.openSabinoListDialog = function() {
		sabino.sabinoListDialogDisplay = '';
	}

	sabino.closeSabinoListDialog = function() {
		sabino.sabinoListDialogDisplay = 'hide';
	}

	let collapsed = -1;

	sabino.collapse = function(index) {
		if (collapsed < 0) {
			sabino.activeUsers[index].collapsableBodyClass = 'saufth-collapsable-show';
			sabino.activeUsers[index].collapsableHeaderClass = 'saufth-collapsable-header-bg';
			collapsed = index;
		} else if (collapsed == index) {
			sabino.activeUsers[index].collapsableBodyClass = 'saufth-collapsable-hide';
			sabino.activeUsers[index].collapsableHeaderClass = '';
			collapsed = -1;
		} else if (collapsed >= 0) {
			if (index != Object.keys(sabino.activeUsers).length-1) {
				sabino.activeUsers[collapsed].collapsableBodyClass = 'saufth-collapsable-hide';
				sabino.activeUsers[collapsed].collapsableHeaderClass = '';
				sabino.activeUsers[index].collapsableBodyClass = 'saufth-collapsable-show';
				sabino.activeUsers[index].collapsableHeaderClass = 'saufth-collapsable-header-bg';
				collapsed = index;
			} else {
				if (index != collapsed) {
					sabino.activeUsers[collapsed].collapsableBodyClass = 'saufth-collapsable-hide';
					sabino.activeUsers[collapsed].collapsableHeaderClass = '';
					sabino.activeUsers[index].collapsableBodyClass = 'saufth-collapsable-show-last';
					sabino.activeUsers[index].collapsableHeaderClass = 'saufth-collapsable-header-bg';
					collapsed = index;
				} else {
					sabino.activeUsers[index].collapsableBodyClass = 'saufth-collapsable-hide';
					sabino.activeUsers[index].collapsableHeaderClass = '';
					collapsed = -1;
				}
			}
		}
	}

	let prepareInmovablesData = function() {
		angular.forEach(sabino.inmovablesData.inmovables, function(property, propertyKey) {
			angular.forEach(sabino.inmovablesData.propertyTypes, function(type, typeKey) {
				if (property.idPropertyType == type.idPropertyType) {
					sabino.inmovablesData.inmovables[propertyKey].type = type.type;
				}
			});
			angular.forEach(sabino.inmovablesData.condos, function(condominium, condominiumKey) {
				if (property.idCondominium == condominium.idCondominium) {
					sabino.inmovablesData.inmovables[propertyKey].condominium = condominium.condominium;
				}
			});
		});
		console.log(sabino.inmovablesData.inmovables);
	}

	var init = function() {
		inmovables.getInmovablesData(5, 2).then(function(response) {
			sabino.inmovablesData = response;
			sabino.inmovablesClassList = inmovables.generateInmovablesClassListInventary(sabino.inmovablesData.inmovables);
			prepareInmovablesData();
			getLeads();
			console.log(sabino.inmovablesData);
		});
	}

	init();
});

/*** Portto Blanco ***/

app.controller('PBEstepaCtrl', function($scope, $location, $http, Session, Inmovables, Leads) {

	Session.permissions().then(function(response) {
		if (response.isLogged < 1) {
			$location.path('/login');
		}
		if (response.idProfile != 1 && response.isLogged != 3) {
			$location.path('/dashboard');
		}
	});

	var estepa = this;

	let inmovables = Inmovables;
	let selectedPropertyID = 0;
	let selectedUserID = 0;
	let selectedLeadID = 0;
	let selectedStatus = 0;
	let selectedPropertyStatusID = 0;
	
	estepa.inmovablesData = [];
	estepa.inmovablesClassList = [];
	estepa.activeUsers = [];
	estepa.deletedUsers = [];
	estepa.leadsResult = [];

	estepa.dialogDisplay = 'hide';
	estepa.dialogStatusDisplay = 'hide';
	estepa.estepaListDialogDisplay = 'hide';

	estepa.setLeadProperty = function(property) {
		estepa.propertyData = property;
		selectedPropertyStatusID = estepa.propertyData.idPropertyStatus;
		selectedPropertyID = estepa.propertyData.idProperty;
		if (selectedPropertyStatusID > 1) {
			estepa.closeDialog();
			estepa.openDialogStatus();
		} else {
			estepa.openDialog();
		}
	}

	estepa.selectUser = function(idUser, index) {
		selectedUserIndex = index;
		estepa.idUser = idUser;
		estepa.collapse(index);
	}

	var getUsers = function() {
		$http({
			method: 'POST',
		    url: 'application/controllers/get_active_users_controller.php',
		    headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' }
		}).then(function(response) {
			estepa.usersResult = response.data;
			if (estepa.usersResult.status >	 0) {
				estepa.getUsersMsgResult = 'No se encontró ningún usuario';
				estepa.usersResult = {};
			} else {
				estepa.getUsersMsgResult = '';
				angular.forEach(estepa.usersResult.users, function(user, key) {
					user.leads = [];
					angular.forEach(estepa.leadsResult, function(lead, key) {
						if (lead[5] == user.idUser) {
							user.leads.push({idLead: lead[0], name: lead[1], last_name: lead[2], idUser: lead[5]});
						}
					});
					user.collapsableBodyClass = 'saufth-collapsable-hide';
					user.collapsableHeaderClass = '';
					estepa.activeUsers.push(user);
				});
			}
			console.log('HTTP_GET_ACTIVE_USERS_OK');
		}, function(response) {
			console.log('HTTP_GET_ACTIVE_USERS_ERR');
		});
	}

	var getLeads = function() {
		Leads.selectActiveLeads().then(function(response) {
			console.log('HTTP_GET_LEADS_OK');
			estepa.leadsResult = response.result;
			getUsers();
		}, function(response) {
			console.log('HTTP_GET_LEADS_ERR');
		});
	}

	var insertLeadPropertyStatus = function() {
		$http({
			method: 'POST',
			url: 'application/controllers/insert_lead_property_status_controller.php',
			data: {
				idUser: selectedUserID,
				idLead: selectedLeadID,
				status: selectedStatus,
				idProperty: selectedPropertyID,
				zoho_id: estepa.propertyData.zoho_id
			},
			headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' }
		}).then(function(response) {
			inmovables.getInmovablesData(4, 1).then(function(response) {
				estepa.inmovablesData = response;
				estepa.inmovablesClassList = inmovables.generateInmovablesClassListInventary(estepa.inmovablesData.inmovables);
				prepareInmovablesData();
				estepa.closeDialogStatus();
				estepa.closeDialog();
			});
			console.log('HTTP_INSERT_LEAD_PROPERTY_STATUS_OK');
		}, function(response) {
			console.log('HTTP_INSERT_LEAD_PROPERTY_STATUS_ERR');
		});
	}

	var deleteLeadPropertyStatus = function() {
		$http({
			method: 'POST',
			url: 'application/controllers/delete_lead_property_status_controller.php',
			data: {
				idUser: selectedUserID,
				idLead: selectedLeadID,
				status: selectedStatus,
				idProperty: selectedPropertyID
			},
			headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' }
		}).then(function(response) {
			inmovables.getInmovablesData(4, 1).then(function(response) {
				estepa.inmovablesData = response;
				estepa.inmovablesClassList = inmovables.generateInmovablesClassListInventary(estepa.inmovablesData.inmovables);
				prepareInmovablesData();
				estepa.closeDialogStatus();
				estepa.closeDialog();
			});
			console.log('HTTP_DELETE_LEAD_PROPERTY_STATUS_OK');
		}, function(response) {
			console.log('HTTP_DELETE_LEAD_PROPERTY_STATUS_ERR');
		});
	}

	var updatePropertyStatus = function() {
		$http({
			method: 'POST',
			url: 'application/controllers/update_property_status_controller.php',
			data: {
				status: selectedStatus,
				idProperty: selectedPropertyID
			},
			headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' }
		}).then(function(response) {
			inmovables.getInmovablesData(4, 1).then(function(response) {
				estepa.inmovablesData = response;
				estepa.inmovablesClassList = inmovables.generateInmovablesClassListInventary(estepa.inmovablesData.inmovables);
				prepareInmovablesData();
				estepa.closeDialogStatus();
			});
			console.log('HTTP_UPDATE_PROPERTY_STATUS_OK');
		}, function(response) {
			console.log('HTTP_UPDATE_PROPERTY_STATUS_ERR');
		});
	}
	
	estepa.selectLeadPropertyStatus = function(idUser, idLead) {
		selectedUserID = idUser;
		selectedLeadID = idLead;
		estepa.openDialogStatus();
	}

	estepa.setStatus = function(status) {
		selectedStatus = status;
		if (selectedPropertyStatusID > 1) {
			if (selectedStatus > 1) {
				updatePropertyStatus();
			} else {
				deleteLeadPropertyStatus();
			}
		} else {
			insertLeadPropertyStatus();
		}
	}

	estepa.showInmovablesList = function() {
		estepa.openEstepaListDialog();
	}

	estepa.openDialog = function() {
		estepa.dialogDisplay = '';
	}

	estepa.closeDialog = function() {
		estepa.dialogDisplay = 'hide';
	}
	
	estepa.openDialogStatus = function() {
		estepa.dialogStatusDisplay = '';
	}

	estepa.closeDialogStatus = function() {
		estepa.dialogStatusDisplay = 'hide';
	}
	
	estepa.openEstepaListDialog = function() {
		estepa.estepaListDialogDisplay = '';
	}

	estepa.closeEstepaListDialog = function() {
		estepa.estepaListDialogDisplay = 'hide';
	}

	let collapsed = -1;

	estepa.collapse = function(index) {
		if (collapsed < 0) {
			estepa.activeUsers[index].collapsableBodyClass = 'saufth-collapsable-show';
			estepa.activeUsers[index].collapsableHeaderClass = 'saufth-collapsable-header-bg';
			collapsed = index;
		} else if (collapsed == index) {
			estepa.activeUsers[index].collapsableBodyClass = 'saufth-collapsable-hide';
			estepa.activeUsers[index].collapsableHeaderClass = '';
			collapsed = -1;
		} else if (collapsed >= 0) {
			if (index != Object.keys(estepa.activeUsers).length-1) {
				estepa.activeUsers[collapsed].collapsableBodyClass = 'saufth-collapsable-hide';
				estepa.activeUsers[collapsed].collapsableHeaderClass = '';
				estepa.activeUsers[index].collapsableBodyClass = 'saufth-collapsable-show';
				estepa.activeUsers[index].collapsableHeaderClass = 'saufth-collapsable-header-bg';
				collapsed = index;
			} else {
				if (index != collapsed) {
					estepa.activeUsers[collapsed].collapsableBodyClass = 'saufth-collapsable-hide';
					estepa.activeUsers[collapsed].collapsableHeaderClass = '';
					estepa.activeUsers[index].collapsableBodyClass = 'saufth-collapsable-show-last';
					estepa.activeUsers[index].collapsableHeaderClass = 'saufth-collapsable-header-bg';
					collapsed = index;
				} else {
					estepa.activeUsers[index].collapsableBodyClass = 'saufth-collapsable-hide';
					estepa.activeUsers[index].collapsableHeaderClass = '';
					collapsed = -1;
				}
			}
		}
	}

	let prepareInmovablesData = function() {
		angular.forEach(estepa.inmovablesData.inmovables, function(property, propertyKey) {
			angular.forEach(estepa.inmovablesData.propertyTypes, function(type, typeKey) {
				if (property.idPropertyType == type.idPropertyType) {
					estepa.inmovablesData.inmovables[propertyKey].type = type.type;
				}
			});
			angular.forEach(estepa.inmovablesData.condos, function(condominium, condominiumKey) {
				if (property.idCondominium == condominium.idCondominium) {
					estepa.inmovablesData.inmovables[propertyKey].condominium = condominium.condominium;
				}
			});
		});
		console.log(estepa.inmovablesData.inmovables);
	}

	let init = function() {
		inmovables.getInmovablesData(4, 1).then(function(response) {
			estepa.inmovablesData = response;
			estepa.inmovablesClassList = inmovables.generateInmovablesClassListInventary(estepa.inmovablesData.inmovables);
			prepareInmovablesData();
			getLeads();
		});
	}

	init();
});

app.controller('PBDesiertoCtrl', function($scope, $location, $http, Session, Inmovables, Leads) {

	Session.permissions().then(function(response) {
		if (response.isLogged < 1) {
			$location.path('/login');
		}
		if (response.idProfile != 1 && response.isLogged != 3) {
			$location.path('/dashboard');
		}
	});

	var desierto = this;

	let inmovables = Inmovables;
	let selectedPropertyID = 0;
	let selectedUserID = 0;
	let selectedLeadID = 0;
	let selectedStatus = 0;
	let selectedPropertyStatusID = 0;
	
	desierto.inmovablesData = [];
	desierto.inmovablesClassList = [];
	desierto.activeUsers = [];
	desierto.deletedUsers = [];
	desierto.leadsResult = [];

	desierto.dialogDisplay = 'hide';
	desierto.dialogStatusDisplay = 'hide';
	desierto.desiertoListDialogDisplay = 'hide';

	desierto.setLeadProperty = function(property) {
		desierto.propertyData = property;
		selectedPropertyStatusID = desierto.propertyData.idPropertyStatus;
		selectedPropertyID = desierto.propertyData.idProperty;
		if (selectedPropertyStatusID > 1) {
			desierto.closeDialog();
			desierto.openDialogStatus();
		} else {
			desierto.openDialog();
		}
	}

	desierto.selectUser = function(idUser, index) {
		selectedUserIndex = index;
		desierto.idUser = idUser;
		desierto.collapse(index);
	}

	var getUsers = function() {
		$http({
			method: 'POST',
		    url: 'application/controllers/get_active_users_controller.php',
		    headers: { 'Content-Type': 'application/json; charset=UTF-8' }
		}).then(function(response) {
			desierto.usersResult = response.data;
			if (desierto.usersResult.status > 0) {
				desierto.getUsersMsgResult = 'No se encontró ningún usuario';
				desierto.usersResult = {};
			} else {
				desierto.getUsersMsgResult = '';
				console.log(desierto.leadsResult[0]);
				angular.forEach(desierto.usersResult.users, function(user, key) {
					user.leads = [];
					angular.forEach(desierto.leadsResult, function(lead, key) {
						if (lead[5] == user.idUser) {
							user.leads.push({idLead: lead[0], name: lead[1], last_name: lead[2], idUser: lead[5]});
						}
					});
					user.collapsableBodyClass = 'saufth-collapsable-hide';
					user.collapsableHeaderClass = '';
					desierto.activeUsers.push(user);
				});
			}
			console.log('HTTP_GET_ACTIVE_USERS_OK');
		}, function(response) {
			console.log('HTTP_GET_ACTIVE_USERS_ERR');
		});
	}

	var getLeads = function() {
		Leads.selectActiveLeads().then(function(response) {
			console.log('HTTP_GET_LEADS_OK');
			desierto.leadsResult = response.result;
			getUsers();
		}, function(response) {
			console.log('HTTP_GET_LEADS_ERR');
		});
	}

	var insertLeadPropertyStatus = function() {
		$http({
			method: 'POST',
			url: 'application/controllers/insert_lead_property_status_controller.php',
			data: {
				idUser: selectedUserID,
				idLead: selectedLeadID,
				status: selectedStatus,
				idProperty: selectedPropertyID,
				zoho_id: desierto.propertyData.zoho_id
			},
			headers: { 'Content-Type': 'application/json; charset=UTF-8' }
		}).then(function(response) {
			inmovables.getInmovablesData(4, 6).then(function(response) {
				desierto.inmovablesData = response;
				desierto.inmovablesClassList = inmovables.generateInmovablesClassListInventary(desierto.inmovablesData.inmovables);
				prepareInmovablesData();
				desierto.closeDialogStatus();
				desierto.closeDialog();
			});
			console.log('HTTP_INSERT_LEAD_PROPERTY_STATUS_OK');
		}, function(response) {
			console.log('HTTP_INSERT_LEAD_PROPERTY_STATUS_ERR');
		});
	}

	var deleteLeadPropertyStatus = function() {
		$http({
			method: 'POST',
			url: 'application/controllers/delete_lead_property_status_controller.php',
			data: {
				idUser: selectedUserID,
				idLead: selectedLeadID,
				status: selectedStatus,
				idProperty: selectedPropertyID
			},
			headers: { 'Content-Type': 'application/json; charset=UTF-8' }
		}).then(function(response) {
			inmovables.getInmovablesData(4, 6).then(function(response) {
				desierto.inmovablesData = response;
				desierto.inmovablesClassList = inmovables.generateInmovablesClassListInventary(desierto.inmovablesData.inmovables);
				prepareInmovablesData();
				desierto.closeDialogStatus();
				desierto.closeDialog();
			});
			console.log('HTTP_DELETE_LEAD_PROPERTY_STATUS_OK');
		}, function(response) {
			console.log('HTTP_DELETE_LEAD_PROPERTY_STATUS_ERR');
		});
	}

	var updatePropertyStatus = function() {
		$http({
			method: 'POST',
			url: 'application/controllers/update_property_status_controller.php',
			data: {
				status: selectedStatus,
				idProperty: selectedPropertyID
			},
			headers: { 'Content-Type': 'application/json; charset=UTF-8' }
		}).then(function(response) {
			inmovables.getInmovablesData(4, 6).then(function(response) {
				desierto.inmovablesData = response;
				desierto.inmovablesClassList = inmovables.generateInmovablesClassListInventary(desierto.inmovablesData.inmovables);
				prepareInmovablesData();
				desierto.closeDialogStatus();
			});
			console.log('HTTP_UPDATE_PROPERTY_STATUS_OK');
		}, function(response) {
			console.log('HTTP_UPDATE_PROPERTY_STATUS_ERR');
		});
	}

	desierto.selectLeadPropertyStatus = function(idUser, idLead) {
		selectedUserID = idUser;
		selectedLeadID = idLead;
		desierto.openDialogStatus();
	}

	desierto.setStatus = function(status) {
		selectedStatus = status;
		if (selectedPropertyStatusID > 1) {
			if (selectedStatus > 1) {
				updatePropertyStatus();
			} else {
				deleteLeadPropertyStatus();
			}
		} else {
			insertLeadPropertyStatus();
		}
	}

	desierto.showInmovablesList = function() {
		desierto.openDesiertoListDialog();
	}

	desierto.openDialog = function() {
		desierto.dialogDisplay = '';
	}

	desierto.closeDialog = function() {
		desierto.dialogDisplay = 'hide';
	}
	
	desierto.openDialogStatus = function() {
		desierto.dialogStatusDisplay = '';
	}

	desierto.closeDialogStatus = function() {
		desierto.dialogStatusDisplay = 'hide';
	}
	
	desierto.openDesiertoListDialog = function() {
		desierto.desiertoListDialogDisplay = '';
	}

	desierto.closeDesiertoListDialog = function() {
		desierto.desiertoListDialogDisplay = 'hide';
	}

	let collapsed = -1;

	desierto.collapse = function(index) {
		if (collapsed < 0) {
			desierto.activeUsers[index].collapsableBodyClass = 'saufth-collapsable-show';
			desierto.activeUsers[index].collapsableHeaderClass = 'saufth-collapsable-header-bg';
			collapsed = index;
		} else if (collapsed == index) {
			desierto.activeUsers[index].collapsableBodyClass = 'saufth-collapsable-hide';
			desierto.activeUsers[index].collapsableHeaderClass = '';
			collapsed = -1;
		} else if (collapsed >= 0) {
			if (index != Object.keys(desierto.activeUsers).length-1) {
				desierto.activeUsers[collapsed].collapsableBodyClass = 'saufth-collapsable-hide';
				desierto.activeUsers[collapsed].collapsableHeaderClass = '';
				desierto.activeUsers[index].collapsableBodyClass = 'saufth-collapsable-show';
				desierto.activeUsers[index].collapsableHeaderClass = 'saufth-collapsable-header-bg';
				collapsed = index;
			} else {
				if (index != collapsed) {
					desierto.activeUsers[collapsed].collapsableBodyClass = 'saufth-collapsable-hide';
					desierto.activeUsers[collapsed].collapsableHeaderClass = '';
					desierto.activeUsers[index].collapsableBodyClass = 'saufth-collapsable-show-last';
					desierto.activeUsers[index].collapsableHeaderClass = 'saufth-collapsable-header-bg';
					collapsed = index;
				} else {
					desierto.activeUsers[index].collapsableBodyClass = 'saufth-collapsable-hide';
					desierto.activeUsers[index].collapsableHeaderClass = '';
					collapsed = -1;
				}
			}
		}
	}

	let prepareInmovablesData = function() {
		angular.forEach(desierto.inmovablesData.inmovables, function(property, propertyKey) {
			angular.forEach(desierto.inmovablesData.propertyTypes, function(type, typeKey) {
				if (property.idPropertyType == type.idPropertyType) {
					desierto.inmovablesData.inmovables[propertyKey].type = type.type;
				}
			});
			angular.forEach(desierto.inmovablesData.condos, function(condominium, condominiumKey) {
				if (property.idCondominium == condominium.idCondominium) {
					desierto.inmovablesData.inmovables[propertyKey].condominium = condominium.condominium;
				}
			});
		});
	}
	
	var init = function() {
		inmovables.getInmovablesData(4, 6).then(function(response) {
			desierto.inmovablesData = response;
			desierto.inmovablesClassList = inmovables.generateInmovablesClassListInventary(desierto.inmovablesData.inmovables);
			prepareInmovablesData();
			getLeads();
		});
	}

	init();
});

app.controller('PBTaigaCtrl', function($scope, $location, $http, Session, Inmovables, Leads) {

	Session.permissions().then(function(response) {
		if (response.isLogged < 1) {
			$location.path('/login');
		}
		if (response.idProfile != 1 && response.isLogged != 3) {
			$location.path('/dashboard');
		}
	});

	var taiga = this;

	let inmovables = Inmovables;
	let selectedPropertyID = 0;
	let selectedUserID = 0;
	let selectedLeadID = 0;
	let selectedStatus = 0;
	let selectedPropertyStatusID = 0;
	
	taiga.inmovablesData = [];
	taiga.inmovablesClassList = [];
	taiga.activeUsers = [];
	taiga.deletedUsers = [];
	taiga.leadsResult = [];

	taiga.dialogDisplay = 'hide';
	taiga.dialogStatusDisplay = 'hide';
	taiga.taigaListDialogDisplay = 'hide';

	taiga.setLeadProperty = function(property) {
		taiga.propertyData = property;
		selectedPropertyStatusID = taiga.propertyData.idPropertyStatus;
		selectedPropertyID = taiga.propertyData.idProperty;
		if (selectedPropertyStatusID > 1) {
			taiga.closeDialog();
			taiga.openDialogStatus();
		} else {
			taiga.openDialog();
		}
	}

	taiga.selectUser = function(idUser, index) {
		selectedUserIndex = index;
		taiga.idUser = idUser;
		taiga.collapse(index);
	}

	var getUsers = function() {
		$http({
			method: 'POST',
		    url: 'application/controllers/get_active_users_controller.php',
		    headers: { 'Content-Type': 'application/json; charset=UTF-8' }
		}).then(function(response) {
			taiga.usersResult = response.data;
			if (taiga.usersResult.status > 0) {
				taiga.getUsersMsgResult = 'No se encontró ningún usuario';
				taiga.usersResult = {};
			} else {
				taiga.getUsersMsgResult = '';
				angular.forEach(taiga.usersResult.users, function(user, key) {
					user.leads = [];
					angular.forEach(taiga.leadsResult, function(lead, key) {
						if (lead[5] == user.idUser) {
							user.leads.push({idLead: lead[0], name: lead[1], last_name: lead[2], idUser: lead[5]});
						}
					});
					user.collapsableBodyClass = 'saufth-collapsable-hide';
					user.collapsableHeaderClass = '';
					taiga.activeUsers.push(user);
				});
			}
			console.log('HTTP_GET_ACTIVE_USERS_OK');
		}, function(response) {
			console.log('HTTP_GET_ACTIVE_USERS_ERR');
		});
	}

	var getLeads = function() {
		Leads.selectActiveLeads().then(function(response) {
			console.log('HTTP_GET_LEADS_OK');
			taiga.leadsResult = response.result;
			getUsers();
		}, function(response) {
			console.log('HTTP_GET_LEADS_ERR');
		});
	}

	var insertLeadPropertyStatus = function() {
		$http({
			method: 'POST',
			url: 'application/controllers/insert_lead_property_status_controller.php',
			data: {
				idUser: selectedUserID,
				idLead: selectedLeadID,
				status: selectedStatus,
				idProperty: selectedPropertyID,
				zoho_id: taiga.propertyData.zoho_id
			},
			headers: { 'Content-Type': 'application/json; charset=UTF-8' }
		}).then(function(response) {
			inmovables.getInmovablesData(4, 11).then(function(response) {
				taiga.inmovablesData = response;
				taiga.inmovablesClassList = inmovables.generateInmovablesClassListInventary(taiga.inmovablesData.inmovables);
				prepareInmovablesData();
				taiga.closeDialogStatus();
				taiga.closeDialog();
			});
			console.log('HTTP_INSERT_LEAD_PROPERTY_STATUS_OK');
		}, function(response) {
			console.log('HTTP_INSERT_LEAD_PROPERTY_STATUS_ERR');
		});
	}

	var deleteLeadPropertyStatus = function() {
		$http({
			method: 'POST',
			url: 'application/controllers/delete_lead_property_status_controller.php',
			data: {
				idUser: selectedUserID,
				idLead: selectedLeadID,
				status: selectedStatus,
				idProperty: selectedPropertyID
			},
			headers: { 'Content-Type': 'application/json; charset=UTF-8' }
		}).then(function(response) {
			inmovables.getInmovablesData(4, 11).then(function(response) {
				taiga.inmovablesData = response;
				taiga.inmovablesClassList = inmovables.generateInmovablesClassListInventary(taiga.inmovablesData.inmovables);
				prepareInmovablesData();
				taiga.closeDialogStatus();
				taiga.closeDialog();
			});
			console.log('HTTP_DELETE_LEAD_PROPERTY_STATUS_OK');
		}, function(response) {
			console.log('HTTP_DELETE_LEAD_PROPERTY_STATUS_ERR');
		});
	}

	var updatePropertyStatus = function() {
		$http({
			method: 'POST',
			url: 'application/controllers/update_property_status_controller.php',
			data: {
				status: selectedStatus,
				idProperty: selectedPropertyID
			},
			headers: { 'Content-Type': 'application/json; charset=UTF-8' }
		}).then(function(response) {
			inmovables.getInmovablesData(4, 11).then(function(response) {
				taiga.inmovablesData = response;
				taiga.inmovablesClassList = inmovables.generateInmovablesClassListInventary(taiga.inmovablesData.inmovables);
				prepareInmovablesData();
				taiga.closeDialogStatus();
			});
			console.log('HTTP_UPDATE_PROPERTY_STATUS_OK');
		}, function(response) {
			console.log('HTTP_UPDATE_PROPERTY_STATUS_ERR');
		});
	}

	taiga.selectLeadPropertyStatus = function(idUser, idLead) {
		selectedUserID = idUser;
		selectedLeadID = idLead;
		taiga.openDialogStatus();
	}

	taiga.setStatus = function(status) {
		selectedStatus = status;
		if (selectedPropertyStatusID > 1) {
			if (selectedStatus > 1) {
				updatePropertyStatus();
			} else {
				deleteLeadPropertyStatus();
			}
		} else {
			insertLeadPropertyStatus();
		}
	}

	taiga.showInmovablesList = function() {
		taiga.openDesiertoListDialog();
	}

	taiga.openDialog = function() {
		taiga.dialogDisplay = '';
	}

	taiga.closeDialog = function() {
		taiga.dialogDisplay = 'hide';
	}
	
	taiga.openDialogStatus = function() {
		taiga.dialogStatusDisplay = '';
	}

	taiga.closeDialogStatus = function() {
		taiga.dialogStatusDisplay = 'hide';
	}
	
	taiga.openDesiertoListDialog = function() {
		taiga.taigaListDialogDisplay = '';
	}

	taiga.closeDesiertoListDialog = function() {
		taiga.taigaListDialogDisplay = 'hide';
	}

	let collapsed = -1;

	taiga.collapse = function(index) {
		if (collapsed < 0) {
			taiga.activeUsers[index].collapsableBodyClass = 'saufth-collapsable-show';
			taiga.activeUsers[index].collapsableHeaderClass = 'saufth-collapsable-header-bg';
			collapsed = index;
		} else if (collapsed == index) {
			taiga.activeUsers[index].collapsableBodyClass = 'saufth-collapsable-hide';
			taiga.activeUsers[index].collapsableHeaderClass = '';
			collapsed = -1;
		} else if (collapsed >= 0) {
			if (index != Object.keys(taiga.activeUsers).length-1) {
				taiga.activeUsers[collapsed].collapsableBodyClass = 'saufth-collapsable-hide';
				taiga.activeUsers[collapsed].collapsableHeaderClass = '';
				taiga.activeUsers[index].collapsableBodyClass = 'saufth-collapsable-show';
				taiga.activeUsers[index].collapsableHeaderClass = 'saufth-collapsable-header-bg';
				collapsed = index;
			} else {
				if (index != collapsed) {
					taiga.activeUsers[collapsed].collapsableBodyClass = 'saufth-collapsable-hide';
					taiga.activeUsers[collapsed].collapsableHeaderClass = '';
					taiga.activeUsers[index].collapsableBodyClass = 'saufth-collapsable-show-last';
					taiga.activeUsers[index].collapsableHeaderClass = 'saufth-collapsable-header-bg';
					collapsed = index;
				} else {
					taiga.activeUsers[index].collapsableBodyClass = 'saufth-collapsable-hide';
					taiga.activeUsers[index].collapsableHeaderClass = '';
					collapsed = -1;
				}
			}
		}
	}

	let prepareInmovablesData = function() {
		angular.forEach(taiga.inmovablesData.inmovables, function(property, propertyKey) {
			angular.forEach(taiga.inmovablesData.propertyTypes, function(type, typeKey) {
				if (property.idPropertyType == type.idPropertyType) {
					taiga.inmovablesData.inmovables[propertyKey].type = type.type;
				}
			});
			angular.forEach(taiga.inmovablesData.condos, function(condominium, condominiumKey) {
				if (property.idCondominium == condominium.idCondominium) {
					taiga.inmovablesData.inmovables[propertyKey].condominium = condominium.condominium;
				}
			});
		});
	}

	var init = function() {
		inmovables.getInmovablesData(4, 11).then(function(response) {
			taiga.inmovablesData = response;
			taiga.inmovablesClassList = inmovables.generateInmovablesClassListInventary(taiga.inmovablesData.inmovables);
			prepareInmovablesData();
			getLeads();
			console.log(taiga.inmovablesData);
		});
	}

	init();

});

app.controller('PBParamoCtrl', function($scope, $rootScope, $location, $http, Session, Inmovables, Leads) {

	Session.permissions().then(function(response) {
		if (response.isLogged < 1) {
			$location.path('/login');
		}
		if (response.idProfile != 1 && response.isLogged != 3) {
			$location.path('/dashboard');
		}
	});

	var paramo = this;

	let inmovables = Inmovables;
	let selectedPropertyID = 0;
	let selectedUserID = 0;
	let selectedLeadID = 0;
	let selectedStatus = 0;
	let selectedPropertyStatusID = 0;

	paramo.propertyStatus = [
		'Ningino',
		'Disponible',
		'En espera',
		'Apartado',
		'Enganchado',
		'Vendido'
	];
	
	paramo.inmovablesData = [];
	paramo.inmovablesClassList = [];
	paramo.activeUsers = [];
	paramo.deletedUsers = [];
	paramo.leadsResult = [];

	paramo.dialogDisplay = 'hide';
	paramo.dialogStatusDisplay = 'hide';
	paramo.paramoListDialogDisplay = 'hide';

	let increaseCostHandler = function(key) {

		if (paramo.inmovablesData.inmovables[key].cost_m2_increase != null) {

			paramo.inmovablesData.inmovables[key].cost_m2_increase.increased = paramo.inmovablesData.inmovables[key].cost.m2 * paramo.inmovablesData.inmovables[key].cost_m2_increase.value;
			paramo.inmovablesData.inmovables[key].cost_m2_increase.total_increased = paramo.inmovablesData.inmovables[key].cost.m2 + paramo.inmovablesData.inmovables[key].cost_m2_increase.increased;
			paramo.inmovablesData.inmovables[key].cost_m2_increase.property_cost = paramo.inmovablesData.inmovables[key].cost_m2_increase.total_increased * paramo.inmovablesData.inmovables[key].area;

			paramo.inmovablesData.inmovables[key].cost.final = {
				m2: paramo.inmovablesData.inmovables[key].cost_m2_increase.total_increased,
				property: paramo.inmovablesData.inmovables[key].cost_m2_increase.property_cost
			};

			paramo.inmovablesData.inmovables[key].hook.increased = paramo.inmovablesData.inmovables[key].cost_m2_increase.property_cost * paramo.inmovablesData.inmovables[key].hook.value;
			paramo.inmovablesData.inmovables[key].hook.final = paramo.inmovablesData.inmovables[key].hook.increased;

			paramo.inmovablesData.inmovables[key].financing.increased = paramo.inmovablesData.inmovables[key].cost_m2_increase.property_cost - paramo.inmovablesData.inmovables[key].hook.increased;
			paramo.inmovablesData.inmovables[key].financing.final = paramo.inmovablesData.inmovables[key].financing.increased;

		} else {

			paramo.inmovablesData.inmovables[key].cost_m2_increase = {
				id: 0,
				value: 0,
				increased: 0,
				total_increased: 0,
				property_cost: 0
			};

			paramo.inmovablesData.inmovables[key].cost.final = {
				m2: paramo.inmovablesData.inmovables[key].cost.m2,
				property: paramo.inmovablesData.inmovables[key].cost.property
			};

			paramo.inmovablesData.inmovables[key].hook.increased = 0;
			paramo.inmovablesData.inmovables[key].hook.final = paramo.inmovablesData.inmovables[key].hook.base;

			paramo.inmovablesData.inmovables[key].financing.increased = 0;
			paramo.inmovablesData.inmovables[key].financing.final = paramo.inmovablesData.inmovables[key].financing.total; 

		}
	}

	let discountCostHandler = function(key) {

		if (paramo.inmovablesData.inmovables[key].cost_m2_discount != null) {

			paramo.inmovablesData.inmovables[key].cost_m2_discount.discounted = paramo.inmovablesData.inmovables[key].cost.final.m2 * paramo.inmovablesData.inmovables[key].cost_m2_discount.value;
			paramo.inmovablesData.inmovables[key].cost_m2_discount.total_discounted = paramo.inmovablesData.inmovables[key].cost.final.m2 - paramo.inmovablesData.inmovables[key].cost_m2_discount.discounted;
			paramo.inmovablesData.inmovables[key].cost_m2_discount.property_cost = paramo.inmovablesData.inmovables[key].cost_m2_discount.total_discounted * paramo.inmovablesData.inmovables[key].area;

			paramo.inmovablesData.inmovables[key].cost.final.m2 = paramo.inmovablesData.inmovables[key].cost_m2_discount.total_discounted;
			paramo.inmovablesData.inmovables[key].cost.final.property = paramo.inmovablesData.inmovables[key].cost_m2_discount.property_cost;

			paramo.inmovablesData.inmovables[key].hook.decreased = paramo.inmovablesData.inmovables[key].cost_m2_discount.property_cost * paramo.inmovablesData.inmovables[key].hook.value;
			paramo.inmovablesData.inmovables[key].hook.final = paramo.inmovablesData.inmovables[key].hook.decreased;

			paramo.inmovablesData.inmovables[key].financing.decreased = paramo.inmovablesData.inmovables[key].cost_m2_discount.property_cost - paramo.inmovablesData.inmovables[key].hook.decreased;
			paramo.inmovablesData.inmovables[key].financing.final = paramo.inmovablesData.inmovables[key].financing.decreased;

		} else {

			paramo.inmovablesData.inmovables[key].cost_m2_discount = {
				id: 0,
				value: 0,
				discounted: 0,
				total_discounted: 0,
				property_cost: 0
			};

			paramo.inmovablesData.inmovables[key].hook.decreased = 0;

			paramo.inmovablesData.inmovables[key].financing.decreased = 0;

		}
	}

	let discountHookHandler = function(key) {

		paramo.inmovablesData.inmovables[key].hook.total = paramo.inmovablesData.inmovables[key].hook.final;

		if (paramo.inmovablesData.inmovables[key].hook_discount != null) {

			paramo.inmovablesData.inmovables[key].hook.discounted = paramo.inmovablesData.inmovables[key].hook.final * paramo.inmovablesData.inmovables[key].hook_discount.value;
			paramo.inmovablesData.inmovables[key].hook.final = paramo.inmovablesData.inmovables[key].hook.total - paramo.inmovablesData.inmovables[key].hook.discounted;

			paramo.inmovablesData.inmovables[key].import = paramo.inmovablesData.inmovables[key].financing.final + paramo.inmovablesData.inmovables[key].hook.final;

		} else {

			paramo.inmovablesData.inmovables[key].hook_discount = {
				id: 0,
				value: 0
			};

			paramo.inmovablesData.inmovables[key].hook.discounted = 0;

			paramo.inmovablesData.inmovables[key].import = paramo.inmovablesData.inmovables[key].financing.final;

		}
	}

	let prepareInmovablesData = function() {

		for (let indexProperty = 0; indexProperty < paramo.inmovablesData.inmovables.length; indexProperty++) {

			for (let indexType = 0; indexType < paramo.inmovablesData.propertyTypes.length; indexType++) {

				if (paramo.inmovablesData.inmovables[indexProperty].idPropertyType == paramo.inmovablesData.propertyTypes[indexType].idPropertyType) {

					paramo.inmovablesData.inmovables[indexProperty].type = paramo.inmovablesData.propertyTypes[indexType].type;

					paramo.inmovablesData.inmovables[indexProperty].cost = {
						m2: paramo.inmovablesData.propertyTypes[indexType].cost_m2,
						property: paramo.inmovablesData.propertyTypes[indexType].cost_m2 * paramo.inmovablesData.inmovables[indexProperty].area,
					};

					paramo.inmovablesData.inmovables[indexProperty].hook.base = paramo.inmovablesData.inmovables[indexProperty].cost.property * paramo.inmovablesData.inmovables[indexProperty].hook.value;
					paramo.inmovablesData.inmovables[indexProperty].hook.final = paramo.inmovablesData.inmovables[indexProperty].hook.base;

					paramo.inmovablesData.inmovables[indexProperty].financing = {
						total: paramo.inmovablesData.inmovables[indexProperty].cost.property - paramo.inmovablesData.inmovables[indexProperty].hook.base
					}

					break;

				}

			}

			for (let indexCondominium = 0; indexCondominium < paramo.inmovablesData.condos.length; indexCondominium++) {

				if (paramo.inmovablesData.inmovables[indexProperty].idCondominium == paramo.inmovablesData.condos[indexCondominium].idCondominium) {

					paramo.inmovablesData.inmovables[indexProperty].condominium = paramo.inmovablesData.condos[indexCondominium].condominium;

					break;

				}

			}

			increaseCostHandler(indexProperty);
			discountCostHandler(indexProperty);
			discountHookHandler(indexProperty);

		}
	}

	paramo.setLeadProperty = function(property) {
		paramo.propertyData = property;
		selectedPropertyStatusID = paramo.propertyData.idPropertyStatus;
		selectedPropertyID = paramo.propertyData.idProperty;
		if (selectedPropertyStatusID > 1) {
			paramo.closeDialog();
			paramo.openDialogStatus();
		} else {
			paramo.openDialog();
		}
	}

	paramo.selectUser = function(idUser, index) {
		selectedUserIndex = index;
		paramo.idUser = idUser;
		paramo.collapse(index);
	}

	var getUsers = function() {
		$http({
			method: 'POST',
				url: 'application/controllers/get_active_users_controller.php',
				headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' }
		}).then(function(response) {
			paramo.usersResult = response.data;
			if (paramo.usersResult.status >	 0) {
				paramo.getUsersMsgResult = 'No se encontró ningún usuario';
				paramo.usersResult = {};
			} else {
				paramo.getUsersMsgResult = '';
				angular.forEach(paramo.usersResult.users, function(user, key) {
					user.leads = [];
					angular.forEach(paramo.leadsResult, function(lead, key) {
						if (lead[5] == user.idUser) {
							user.leads.push({idLead: lead[0], name: lead[1], last_name: lead[2], idUser: lead[5]});
						}
					});
					user.collapsableBodyClass = 'saufth-collapsable-hide';
					user.collapsableHeaderClass = '';
					paramo.activeUsers.push(user);
				});
			}
			console.log('HTTP_GET_ACTIVE_USERS_OK');
		}, function(response) {
			console.log('HTTP_GET_ACTIVE_USERS_ERR');
		});
	}

	var getLeads = function() {
		Leads.selectActiveLeads().then(function(response) {
			console.log('HTTP_GET_LEADS_OK');
			paramo.leadsResult = response.result;
			getUsers();
		}, function(response) {
			console.log('HTTP_GET_LEADS_ERR');
		});
	}

	var insertLeadPropertyStatus = function() {
		$http({
			method: 'POST',
			url: 'application/controllers/insert_lead_property_status_controller.php',
			data: {
				idUser: selectedUserID,
				idLead: selectedLeadID,
				status: selectedStatus,
				idProperty: selectedPropertyID,
				zoho_id: paramo.propertyData.zoho_id
			},
			headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' }
		}).then(function(response) {
			inmovables.getInmovablesData(4, 12).then(function(response) {
				paramo.inmovablesData = response;
				paramo.inmovablesClassList = inmovables.generateInmovablesClassListInventary(paramo.inmovablesData.inmovables);
				prepareInmovablesData();
				paramo.closeDialogStatus();
				paramo.closeDialog();
			});
			console.log('HTTP_INSERT_LEAD_PROPERTY_STATUS_OK');
		}, function(response) {
			console.log('HTTP_INSERT_LEAD_PROPERTY_STATUS_ERR');
		});
	}

	var deleteLeadPropertyStatus = function() {
		$http({
			method: 'POST',
			url: 'application/controllers/delete_lead_property_status_controller.php',
			data: {
				idUser: selectedUserID,
				idLead: selectedLeadID,
				status: selectedStatus,
				idProperty: selectedPropertyID
			},
			headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' }
		}).then(function(response) {
			inmovables.getInmovablesData(4, 12).then(function(response) {
				paramo.inmovablesData = response;
				paramo.inmovablesClassList = inmovables.generateInmovablesClassListInventary(paramo.inmovablesData.inmovables);
				prepareInmovablesData();
				paramo.closeDialogStatus();
				paramo.closeDialog();
			});
			console.log('HTTP_DELETE_LEAD_PROPERTY_STATUS_OK');
		}, function(response) {
			console.log('HTTP_DELETE_LEAD_PROPERTY_STATUS_ERR');
		});
	}

	var updatePropertyStatus = function() {
		$http({
			method: 'POST',
			url: 'application/controllers/update_property_status_controller.php',
			data: {
				status: selectedStatus,
				idProperty: selectedPropertyID
			},
			headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' }
		}).then(function(response) {
			inmovables.getInmovablesData(4, 12).then(function(response) {
				paramo.inmovablesData = response;
				paramo.inmovablesClassList = inmovables.generateInmovablesClassListInventary(paramo.inmovablesData.inmovables);
				prepareInmovablesData();
				paramo.closeDialogStatus();
			});
			console.log('HTTP_UPDATE_PROPERTY_STATUS_OK');
		}, function(response) {
			console.log('HTTP_UPDATE_PROPERTY_STATUS_ERR');
		});
	}

	paramo.selectLeadPropertyStatus = function(idUser, idLead) {
		selectedUserID = idUser;
		selectedLeadID = idLead;
		paramo.openDialogStatus();
	}

	paramo.setStatus = function(status) {
		selectedStatus = status;
		if (selectedPropertyStatusID > 1) {
			if (selectedStatus > 1) {
				updatePropertyStatus();
			} else {
				deleteLeadPropertyStatus();
			}
		} else {
			insertLeadPropertyStatus();
		}
	}

	paramo.showInmovablesList = function() {
		paramo.openparamoListDialog();
	}

	paramo.openDialog = function() {
		paramo.dialogDisplay = '';
	}

	paramo.closeDialog = function() {
		paramo.dialogDisplay = 'hide';
	}

	paramo.openDialogStatus = function() {
		paramo.dialogStatusDisplay = '';
	}

	paramo.closeDialogStatus = function() {
		paramo.dialogStatusDisplay = 'hide';
	}

	paramo.openparamoListDialog = function() {
		paramo.paramoListDialogDisplay = '';
	}

	paramo.closeparamoListDialog = function() {
		paramo.paramoListDialogDisplay = 'hide';
	}

	paramo.openList = function() {
		$rootScope.rootInmovables.options.modal_display = '';
		$rootScope.is_scrollin = 'no-scrolling';
	}

	paramo.closeList = function() {
		$rootScope.rootInmovables.options.modal_display = 'hide';
		$rootScope.is_scrollin = '';
	}

	paramo.openEditPropertyWindow = function(property) {

		$rootScope.rootInmovables.edit.view = '';
		// $rootScope.is_scrollin = 'no-scrolling';

		$rootScope.rootInmovables.selected.id = property.idProperty;
		$rootScope.rootInmovables.selected.idClass = property.property_class;
		$rootScope.rootInmovables.selected.number = property.number;
		$rootScope.rootInmovables.selected.area = property.area;
		$rootScope.rootInmovables.selected.reference = property.reference;
		$rootScope.rootInmovables.selected.idCondominium = property.idCondominium;
		$rootScope.rootInmovables.selected.condominium = property.condominium;
		$rootScope.rootInmovables.selected.idType = property.idPropertyType;
		$rootScope.rootInmovables.selected.type = property.type;
		$rootScope.rootInmovables.selected.idStatus = property.idPropertyStatus;
		$rootScope.rootInmovables.selected.zoho_id = property.zoho_id;

		$rootScope.rootInmovables.selected.idPromoIncrease = property.cost_m2_increase.id;
		$rootScope.rootInmovables.selected.valuePromoIncrease = property.cost_m2_increase.value;
		$rootScope.rootInmovables.selected.idPromoDiscount = property.cost_m2_discount.id;
		$rootScope.rootInmovables.selected.valuePromoDiscount = property.cost_m2_discount.value;
		$rootScope.rootInmovables.selected.idPromoHook = property.hook.id;
		$rootScope.rootInmovables.selected.valuePromoHook = property.hook.value;
		$rootScope.rootInmovables.selected.idPromoHookDiscount = property.hook_discount.id;
		$rootScope.rootInmovables.selected.valuePromoHookDiscount = property.hook_discount.value;

		$rootScope.rootInmovables.edit.models.idPromoIncrease = property.cost_m2_increase.id;
		$rootScope.rootInmovables.edit.models.valuePromoIncrease = property.cost_m2_increase.value;
		$rootScope.rootInmovables.edit.models.idPromoDiscount = property.cost_m2_discount.id;
		$rootScope.rootInmovables.edit.models.valuePromoDiscount = property.cost_m2_discount.value;
		$rootScope.rootInmovables.edit.models.idPromoHook = property.hook.id;
		$rootScope.rootInmovables.edit.models.valuePromoHook = property.hook.value;
		$rootScope.rootInmovables.edit.models.idPromoHookDiscount = property.hook_discount.id;
		$rootScope.rootInmovables.edit.models.valuePromoHookDiscount = property.hook_discount.value;

	}

	paramo.hideEditPropertyWindow = function() {

		$rootScope.rootInmovables.edit.view = 'hide';
		// $rootScope.is_scrollin = '';

		$rootScope.rootInmovables.selected.id = 0;
		$rootScope.rootInmovables.selected.idClass = 0;
		$rootScope.rootInmovables.selected.number = '';
		$rootScope.rootInmovables.selected.area = 0;
		$rootScope.rootInmovables.selected.reference = '';
		$rootScope.rootInmovables.selected.idCondominium = 0;
		$rootScope.rootInmovables.selected.condominium = '';
		$rootScope.rootInmovables.selected.idType = 0;
		$rootScope.rootInmovables.selected.type = '';
		$rootScope.rootInmovables.selected.idStatus = 0;

		$rootScope.rootInmovables.selected.idPromoIncrease = 0;
		$rootScope.rootInmovables.selected.idPromoDiscount = 0;
		$rootScope.rootInmovables.selected.idPromoHook = 0;
		$rootScope.rootInmovables.selected.idPromoHookDiscount = 0;

		$rootScope.rootInmovables.edit.models.idPromoIncrease = 0;
		$rootScope.rootInmovables.edit.models.idPromoDiscount = 0;
		$rootScope.rootInmovables.edit.models.idPromoHook = 0;
		$rootScope.rootInmovables.edit.models.idPromoHookDiscount = 0;

	}

	paramo.updateIncrease = function(idProperty, idPromo, currentPromo, value, type) {
		$http({
			method: 'POST',
			url: 'application/controllers/update_increase.php',
			data: {
				idProperty: idProperty,
				idPromo: idPromo,
				currentPromo: currentPromo,
				value: value,
				type: type,
				id: $rootScope.rootInmovables.selected.zoho_id
			},
			headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' }
		}).then(function(response) {
			console.log('HTTP_UPDATE_INCREASE_OK');
			inmovables.getInmovablesData(4, 12).then(function(response) {
				paramo.inmovablesData = response;
				paramo.inmovablesClassList = inmovables.generateInmovablesClassListInventary(paramo.inmovablesData.inmovables);
				prepareInmovablesData();
			});
		}, function(response) {
			console.log('HTTP_UPDATE_INCREASE_ERR');
		});
	}

	let collapsed = -1;

	paramo.collapse = function(index) {
		if (collapsed < 0) {
			paramo.activeUsers[index].collapsableBodyClass = 'saufth-collapsable-show';
			paramo.activeUsers[index].collapsableHeaderClass = 'saufth-collapsable-header-bg';
			collapsed = index;
		} else if (collapsed == index) {
			paramo.activeUsers[index].collapsableBodyClass = 'saufth-collapsable-hide';
			paramo.activeUsers[index].collapsableHeaderClass = '';
			collapsed = -1;
		} else if (collapsed >= 0) {
			if (index != Object.keys(paramo.activeUsers).length-1) {
				paramo.activeUsers[collapsed].collapsableBodyClass = 'saufth-collapsable-hide';
				paramo.activeUsers[collapsed].collapsableHeaderClass = '';
				paramo.activeUsers[index].collapsableBodyClass = 'saufth-collapsable-show';
				paramo.activeUsers[index].collapsableHeaderClass = 'saufth-collapsable-header-bg';
				collapsed = index;
			} else {
				if (index != collapsed) {
					paramo.activeUsers[collapsed].collapsableBodyClass = 'saufth-collapsable-hide';
					paramo.activeUsers[collapsed].collapsableHeaderClass = '';
					paramo.activeUsers[index].collapsableBodyClass = 'saufth-collapsable-show-last';
					paramo.activeUsers[index].collapsableHeaderClass = 'saufth-collapsable-header-bg';
					collapsed = index;
				} else {
					paramo.activeUsers[index].collapsableBodyClass = 'saufth-collapsable-hide';
					paramo.activeUsers[index].collapsableHeaderClass = '';
					collapsed = -1;
				}
			}
		}
	}

	var init = function() {
		inmovables.getInmovablesData(4, 12).then(function(response) {
			paramo.inmovablesData = response;
			paramo.inmovablesClassList = inmovables.generateInmovablesClassListInventary(paramo.inmovablesData.inmovables);
			prepareInmovablesData();
			getLeads();
		});
	}

	init();
	
});

/***** Quote *****/

/*** Veredas de Lira ***/

app.controller('VLCedroQuoteCtrl', function($scope, Inmovables) {
	
	var vlCedro = this;
	var inmovables = Inmovables;
	
	var inmovablesData = [];
	vlCedro.inmovablesClassList = [];
	vlCedro.propertyData = [];

	vlCedro.dialogDisplay = 'hide';

	let discountPlan1 = .25;
	let discountPlan2 = .20;

	vlCedro.showPropertyData = function(idCondominium, number) {

		angular.forEach(inmovablesData.inmovables, function(row, key) {

			if (row.number == number && row.idCondominium == idCondominium) {

				for (let indexCondos = 0; indexCondos < inmovablesData.condos.length; indexCondos++) {

					if (inmovablesData.inmovables[key].idCondominium == inmovablesData.condos[indexCondos].idCondominium) {

						vlCedro.propertyData.condominium = inmovablesData.condos[indexCondos].condominium;
	
						break;
	
					}
	
				}

				if (row.property_class == 1) {
					vlCedro.propertyData.propertyClass = 'Nave industrial';
					vlCedro.costToBlock = '$30,000 MXN';
				} else if (row.property_class == 2) {
					vlCedro.propertyData.propertyClass = 'Lote industrial';
					vlCedro.costToBlock = '$10,000 MXN';
				} else {
					vlCedro.propertyData.propertyClass = 'Lote habitacional';
					vlCedro.costToBlock = '$10,000 MXN';
				}
				
				for (let indexType = 0; indexType < inmovablesData.propertyTypes.length; indexType++) {

					if (inmovablesData.inmovables[key].idPropertyType == inmovablesData.propertyTypes[indexType].idPropertyType) {

						vlCedro.propertyData.type = inmovablesData.propertyTypes[indexType].type;
						vlCedro.propertyData.cost_m2 = inmovablesData.propertyTypes[indexType].cost_m2;
	
						break;
	
					}
	
				}

				if (inmovablesData.inmovables[key].cost_m2_increase != null) {
					vlCedro.propertyData.cost_m2 += vlCedro.propertyData.cost_m2 * inmovablesData.inmovables[key].cost_m2_increase.value;
				}

				vlCedro.propertyData.number = row.number;
				vlCedro.propertyData.area = row.area;
				let total = vlCedro.propertyData.cost_m2 * vlCedro.propertyData.area;
				vlCedro.propertyData.total = total.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2});
				let totalDiscountPlan1 = total - (total * discountPlan1);
				vlCedro.propertyData.discountPlan1 = discountPlan1 * 100;
				vlCedro.propertyData.totalPlan1 = totalDiscountPlan1.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2});
				let totalDiscountPlan2 = total - (total * discountPlan2);
				vlCedro.propertyData.discountPlan2 = discountPlan2 * 100;
				vlCedro.propertyData.totalPlan2 = totalDiscountPlan2.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2});
				vlCedro.openDialog();
			}
		});
	}

	vlCedro.openDialog = function() {
		vlCedro.dialogDisplay = '';
	}

	vlCedro.closeDialog = function() {
		vlCedro.dialogDisplay = 'hide';
	}

	var init = function() {
		inmovables.getInmovablesData(5, 2).then(function(response) {
      	inmovablesData = response;
		vlCedro.inmovablesClassList = inmovables.generateInmovablesClassList(inmovablesData.inmovables);
    });
	}

	init();
});

app.controller('VLSabinoQuoteCtrl', function($scope, Inmovables) {
	
	var vlSabino = this;
	var inmovables = Inmovables;
	
	var inmovablesData = [];
	vlSabino.inmovablesClassList = [];
	vlSabino.propertyData = [];

	vlSabino.dialogDisplay = 'hide';

	let discountPlan1 = .25;
	let discountPlan2 = .20;

	vlSabino.showPropertyData = function(idCondominium, number) {

		angular.forEach(inmovablesData.inmovables, function(row, key) {

			if (row.number == number && row.idCondominium == idCondominium) {

				for (let indexCondos = 0; indexCondos < inmovablesData.condos.length; indexCondos++) {

					if (inmovablesData.inmovables[key].idCondominium == inmovablesData.condos[indexCondos].idCondominium) {

						vlSabino.propertyData.condominium = inmovablesData.condos[indexCondos].condominium;
	
						break;
	
					}
	
				}

				if (row.property_class == 1) {
					vlSabino.propertyData.propertyClass = 'Nave industrial';
					vlSabino.costToBlock = '$30,000 MXN';
				} else if (row.property_class == 2) {
					vlSabino.propertyData.propertyClass = 'Lote industrial';
					vlSabino.costToBlock = '$10,000 MXN';
				} else {
					vlSabino.propertyData.propertyClass = 'Lote habitacional';
					vlSabino.costToBlock = '$10,000 MXN';
				}
				
				for (let indexType = 0; indexType < inmovablesData.propertyTypes.length; indexType++) {

					if (inmovablesData.inmovables[key].idPropertyType == inmovablesData.propertyTypes[indexType].idPropertyType) {

						vlSabino.propertyData.type = inmovablesData.propertyTypes[indexType].type;
						vlSabino.propertyData.cost_m2 = inmovablesData.propertyTypes[indexType].cost_m2;
	
						break;
	
					}
	
				}

				if (inmovablesData.inmovables[key].cost_m2_increase != null) {
					vlSabino.propertyData.cost_m2 += vlSabino.propertyData.cost_m2 * inmovablesData.inmovables[key].cost_m2_increase.value;
				}

				vlSabino.propertyData.number = row.number;
				vlSabino.propertyData.area = row.area;
				let total = vlSabino.propertyData.cost_m2 * vlSabino.propertyData.area;
				vlSabino.propertyData.total = total.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2});
				let totalDiscountPlan1 = total - (total * discountPlan1);
				vlSabino.propertyData.discountPlan1 = discountPlan1 * 100;
				vlSabino.propertyData.totalPlan1 = totalDiscountPlan1.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2});
				let totalDiscountPlan2 = total - (total * discountPlan2);
				vlSabino.propertyData.discountPlan2 = discountPlan2 * 100;
				vlSabino.propertyData.totalPlan2 = totalDiscountPlan2.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2});
				vlSabino.openDialog();
			}
		});
	}

	vlSabino.openDialog = function() {
		vlSabino.dialogDisplay = '';
	}

	vlSabino.closeDialog = function() {
		vlSabino.dialogDisplay = 'hide';
	}

	var init = function() {
		inmovables.getInmovablesData(5, 2).then(function(response) {
            inmovablesData = response;
			vlSabino.inmovablesClassList = inmovables.generateInmovablesClassList(inmovablesData.inmovables);
        });
	}
	init();
});

/*** Portto Blanco ***/

app.controller('PBEstepaQuoteCtrl', function($scope, Inmovables, Moment) {
	
	var pbEstepa = this;
	var inmovables = Inmovables;

	pbEstepa.month = Moment.month();
	pbEstepa.nextMonth = Moment.nextMonth();
	pbEstepa.year = Moment.year();
	
	var inmovablesData = [];
	pbEstepa.inmovablesClassList = [];
	pbEstepa.propertyData = [];

	pbEstepa.dialogDisplay = 'hide';

	var discountPlan1 = .25;
	var discountPlan2 = .20;

	pbEstepa.showPropertyData = function(idCondominium, number) {
		angular.forEach(inmovablesData.inmovables, function(row, key) {
			if (row.number == number && row.idCondominium == idCondominium) {
				pbEstepa.propertyData.condominium = inmovablesData.condos[row.idCondominium-1].condominium;
				if (row.property_class == 1) {
					pbEstepa.propertyData.propertyClass = 'Nave industrial';
					pbEstepa.costToBlock = '$30,000 MXN';
				} else if (row.property_class == 2) {
					pbEstepa.propertyData.propertyClass = 'Lote industrial';
					pbEstepa.costToBlock = '$10,000 MXN';
				} else {
					pbEstepa.propertyData.propertyClass = 'Lote habitacional';
					pbEstepa.costToBlock = '$10,000 MXN';
				}

                for (let indexType = 0; indexType < inmovablesData.propertyTypes.length; indexType++) {

					if (inmovablesData.inmovables[key].idPropertyType == inmovablesData.propertyTypes[indexType].idPropertyType) {

						pbEstepa.propertyData.type = inmovablesData.propertyTypes[indexType].type;
						pbEstepa.propertyData.cost_m2 = Number.parseFloat(inmovablesData.propertyTypes[indexType].cost_m2.toFixed(2));

						break;

					}

				}

				pbEstepa.propertyData.number = row.number;
				pbEstepa.propertyData.area = row.area;
				var total = pbEstepa.propertyData.cost_m2 * pbEstepa.propertyData.area;
				pbEstepa.propertyData.total = total.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2});
				var totalDiscountPlan1 = total - (total * discountPlan1);
				pbEstepa.propertyData.discountPlan1 = discountPlan1 * 100;
				pbEstepa.propertyData.totalPlan1 = totalDiscountPlan1.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2});
				var totalDiscountPlan2 = total - (total * discountPlan2);
				pbEstepa.propertyData.discountPlan2 = discountPlan2 * 100;
				pbEstepa.propertyData.totalPlan2 = totalDiscountPlan2.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2});
				pbEstepa.openDialog();
			}
		});
	}

	pbEstepa.openDialog = function() {
		pbEstepa.dialogDisplay = '';
	}

	pbEstepa.closeDialog = function() {
		pbEstepa.dialogDisplay = 'hide';
	}

	var init = function() {
		inmovables.getInmovablesData(4, 1).then(function(response) {
			inmovablesData = response;
			pbEstepa.inmovablesClassList = inmovables.generateInmovablesClassList(inmovablesData.inmovables);
		});
	}

	init();
});

app.controller('PBDesierto1QuoteCtrl', function($scope, Inmovables, Moment) {
	
	var desierto = this;
	var inmovables = Inmovables;

	desierto.month = Moment.month();
	desierto.nextMonth = Moment.nextMonth();
	desierto.year = Moment.year();
	
	var inmovablesData = [];
	desierto.inmovablesClassList = [];
	desierto.propertyData = [];

	desierto.dialogDisplay = 'hide';

	var discountPlan1 = .25;
	var discountPlan2 = .20;

	desierto.showPropertyData = function(idCondominium, number) {

		angular.forEach(inmovablesData.inmovables, function(row, key) {

			if (row.number == number && row.idCondominium == idCondominium) {

				desierto.propertyData.condominium = inmovablesData.condos[row.idCondominium-9].condominium;

				if (row.property_class == 1) {
					desierto.propertyData.propertyClass = 'Nave industrial';
					desierto.costToBlock = '$30,000 MXN';
				} else if (row.property_class == 2) {
					desierto.propertyData.propertyClass = 'Lote industrial';
					desierto.costToBlock = '$10,000 MXN';
				} else {
					desierto.propertyData.propertyClass = 'Lote habitacional';
					desierto.costToBlock = '$10,000 MXN';
				}

				for (let indexType = 0; indexType < inmovablesData.propertyTypes.length; indexType++) {

					if (inmovablesData.inmovables[key].idPropertyType == inmovablesData.propertyTypes[indexType].idPropertyType) {

						desierto.propertyData.type = inmovablesData.propertyTypes[indexType].type;
						desierto.propertyData.cost_m2 = inmovablesData.propertyTypes[indexType].cost_m2;
	
						break;
	
					}
	
				}

				desierto.propertyData.number = row.number;
				desierto.propertyData.area = row.area;
				var total = desierto.propertyData.cost_m2 * desierto.propertyData.area;
				desierto.propertyData.total = total.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2});
				var totalDiscountPlan1 = total - (total * discountPlan1);
				desierto.propertyData.discountPlan1 = discountPlan1 * 100;
				desierto.propertyData.totalPlan1 = totalDiscountPlan1.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2});
				var totalDiscountPlan2 = total - (total * discountPlan2);
				desierto.propertyData.discountPlan2 = discountPlan2 * 100;
				desierto.propertyData.totalPlan2 = totalDiscountPlan2.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2});
				desierto.openDialog();
			}
		});
	}

	desierto.openDialog = function() {
		desierto.dialogDisplay = '';
	}

	desierto.closeDialog = function() {
		desierto.dialogDisplay = 'hide';
	}

	var init = function() {
		inmovables.getInmovablesData(4, 6).then(function(response) {
			inmovablesData = response;
			desierto.inmovablesClassList = inmovables.generateInmovablesClassList(inmovablesData.inmovables);
		});
	}

	init();
});

app.controller('PBTaigaQuoteCtrl', function($scope, Inmovables, Moment) {

	let taiga = this;

	taiga.month = Moment.month();
	taiga.nextMonth = Moment.nextMonth();
	taiga.year = Moment.year();
	
	let inmovablesData = [];
	taiga.inmovablesClassList = [];
	taiga.propertyData = [];

	taiga.dialogDisplay = 'hide';

	let discountPlan1 = .25;
	let discountPlan2 = .20;

	taiga.showPropertyData = function(idCondominium, number) {

		angular.forEach(inmovablesData.inmovables, function(row, key) {

			if (row.number == number && row.idCondominium == idCondominium) {

				for (let indexCondos = 0; indexCondos < inmovablesData.condos.length; indexCondos++) {

					if (inmovablesData.inmovables[key].idCondominium == inmovablesData.condos[indexCondos].idCondominium) {

						taiga.propertyData.condominium = inmovablesData.condos[indexCondos].condominium;
	
						break;
	
					}
	
				}

				if (row.property_class == 1) {
					taiga.propertyData.propertyClass = 'Nave industrial';
					taiga.costToBlock = '$30,000 MXN';
				} else if (row.property_class == 2) {
					taiga.propertyData.propertyClass = 'Lote industrial';
					taiga.costToBlock = '$10,000 MXN';
				} else {
					taiga.propertyData.propertyClass = 'Lote habitacional';
					taiga.costToBlock = '$10,000 MXN';
				}
				
				for (let indexType = 0; indexType < inmovablesData.propertyTypes.length; indexType++) {

					if (inmovablesData.inmovables[key].idPropertyType == inmovablesData.propertyTypes[indexType].idPropertyType) {

						taiga.propertyData.type = inmovablesData.propertyTypes[indexType].type;
						taiga.propertyData.cost_m2 = inmovablesData.propertyTypes[indexType].cost_m2;
	
						break;
	
					}
	
				}

				if (inmovablesData.inmovables[key].cost_m2_increase != null) {
					taiga.propertyData.cost_m2 += taiga.propertyData.cost_m2 * inmovablesData.inmovables[key].cost_m2_increase.value;
				}

				taiga.propertyData.number = row.number;
				taiga.propertyData.area = row.area;
				let total = taiga.propertyData.cost_m2 * taiga.propertyData.area;
				taiga.propertyData.total = total.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2});
				let totalDiscountPlan1 = total - (total * discountPlan1);
				taiga.propertyData.discountPlan1 = discountPlan1 * 100;
				taiga.propertyData.totalPlan1 = totalDiscountPlan1.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2});
				let totalDiscountPlan2 = total - (total * discountPlan2);
				taiga.propertyData.discountPlan2 = discountPlan2 * 100;
				taiga.propertyData.totalPlan2 = totalDiscountPlan2.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2});
				taiga.openDialog();

			}

		});

	}

	taiga.openDialog = function() {
		taiga.dialogDisplay = '';
	}

	taiga.closeDialog = function() {
		taiga.dialogDisplay = 'hide';
	}

	let init = function() {
		Inmovables.getInmovablesData(4, 11).then(function(response) {
			inmovablesData = response;
			taiga.inmovablesClassList = Inmovables.generateInmovablesClassList(inmovablesData.inmovables);
		});
	}

	init();

});

app.controller('PBParamoQuoteCtrl', function($scope, Inmovables, Moment) {
	
	let paramo = this;
	let inmovables = Inmovables;

	paramo.month = Moment.month();
	paramo.nextMonth = Moment.nextMonth();
	paramo.year = Moment.year();
	
	let inmovablesData = [];
	paramo.inmovablesClassList = [];
	paramo.propertyData = [];

	paramo.dialogDisplay = 'hide';

	let discountPlan1 = .25;
	let discountPlan2 = .20;

	paramo.showPropertyData = function(idCondominium, number) {

		angular.forEach(inmovablesData.inmovables, function(row, key) {

			if (row.number == number && row.idCondominium == idCondominium) {

				for (let indexCondos = 0; indexCondos < inmovablesData.condos.length; indexCondos++) {

					if (inmovablesData.inmovables[key].idCondominium == inmovablesData.condos[indexCondos].idCondominium) {

						paramo.propertyData.condominium = inmovablesData.condos[indexCondos].condominium;
	
						break;
	
					}
	
				}

				if (row.property_class == 1) {
					paramo.propertyData.propertyClass = 'Nave industrial';
					paramo.costToBlock = '$30,000 MXN';
				} else if (row.property_class == 2) {
					paramo.propertyData.propertyClass = 'Lote industrial';
					paramo.costToBlock = '$10,000 MXN';
				} else {
					paramo.propertyData.propertyClass = 'Lote habitacional';
					paramo.costToBlock = '$10,000 MXN';
				}
				
				for (let indexType = 0; indexType < inmovablesData.propertyTypes.length; indexType++) {

					if (inmovablesData.inmovables[key].idPropertyType == inmovablesData.propertyTypes[indexType].idPropertyType) {

						paramo.propertyData.type = inmovablesData.propertyTypes[indexType].type;
						paramo.propertyData.cost_m2 = inmovablesData.propertyTypes[indexType].cost_m2;
	
						break;
	
					}
	
				}

				if (inmovablesData.inmovables[key].cost_m2_increase != null) {
					paramo.propertyData.cost_m2 += paramo.propertyData.cost_m2 * inmovablesData.inmovables[key].cost_m2_increase.value;
				}

				paramo.propertyData.number = row.number;
				paramo.propertyData.area = row.area;
				let total = paramo.propertyData.cost_m2 * paramo.propertyData.area;
				paramo.propertyData.total = total.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2});
				let totalDiscountPlan1 = total - (total * discountPlan1);
				paramo.propertyData.discountPlan1 = discountPlan1 * 100;
				paramo.propertyData.totalPlan1 = totalDiscountPlan1.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2});
				let totalDiscountPlan2 = total - (total * discountPlan2);
				paramo.propertyData.discountPlan2 = discountPlan2 * 100;
				paramo.propertyData.totalPlan2 = totalDiscountPlan2.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2});
				paramo.openDialog();
			}
		});
	}

	paramo.openDialog = function() {
		paramo.dialogDisplay = '';
	}

	paramo.closeDialog = function() {
		paramo.dialogDisplay = 'hide';
	}

	let init = function() {
		inmovables.getInmovablesData(4, 12).then(function(response) {
			inmovablesData = response;
			paramo.inmovablesClassList = inmovables.generateInmovablesClassList(inmovablesData.inmovables);
		});
	}

	init();

});

app.controller('PBSelvaQuoteCtrl', function($scope, Inmovables, Moment) {
	
	let selva = this;

	selva.month = Moment.month();
	selva.nextMonth = Moment.nextMonth();
	selva.year = Moment.year();
	
	let inmovablesData = [];
	selva.inmovablesClassList = [];
	selva.propertyData = [];

	selva.dialogDisplay = 'hide';

	let discountPlan1 = .25;
	let discountPlan2 = .20;

	selva.showPropertyData = function(idCondominium, number) {

		angular.forEach(inmovablesData.inmovables, function(row, key) {

			if (row.number == number && row.idCondominium == idCondominium) {

				for (let indexCondos = 0; indexCondos < inmovablesData.condos.length; indexCondos++) {

					if (inmovablesData.inmovables[key].idCondominium == inmovablesData.condos[indexCondos].idCondominium) {

						selva.propertyData.condominium = inmovablesData.condos[indexCondos].condominium;
	
						break;
	
					}
	
				}

				if (row.property_class == 1) {
					selva.propertyData.propertyClass = 'Nave industrial';
					selva.costToBlock = '$30,000 MXN';
				} else if (row.property_class == 2) {
					selva.propertyData.propertyClass = 'Lote industrial';
					selva.costToBlock = '$10,000 MXN';
				} else {
					selva.propertyData.propertyClass = 'Lote habitacional';
					selva.costToBlock = '$10,000 MXN';
				}
				
				for (let indexType = 0; indexType < inmovablesData.propertyTypes.length; indexType++) {

					if (inmovablesData.inmovables[key].idPropertyType == inmovablesData.propertyTypes[indexType].idPropertyType) {

						selva.propertyData.type = inmovablesData.propertyTypes[indexType].type;
						selva.propertyData.cost_m2 = inmovablesData.propertyTypes[indexType].cost_m2;
	
						break;
	
					}
	
				}

				if (inmovablesData.inmovables[key].cost_m2_increase != null) {
					selva.propertyData.cost_m2 += selva.propertyData.cost_m2 * inmovablesData.inmovables[key].cost_m2_increase.value;
				}

				selva.propertyData.number = row.number;
				selva.propertyData.area = row.area;
				let total = selva.propertyData.cost_m2 * selva.propertyData.area;
				selva.propertyData.total = total.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2});
				let totalDiscountPlan1 = total - (total * discountPlan1);
				selva.propertyData.discountPlan1 = discountPlan1 * 100;
				selva.propertyData.totalPlan1 = totalDiscountPlan1.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2});
				let totalDiscountPlan2 = total - (total * discountPlan2);
				selva.propertyData.discountPlan2 = discountPlan2 * 100;
				selva.propertyData.totalPlan2 = totalDiscountPlan2.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2});
				selva.openDialog();

			}

		});

	}

	selva.openDialog = function() {
		selva.dialogDisplay = '';
	}

	selva.closeDialog = function() {
		selva.dialogDisplay = 'hide';
	}

	let init = function() {
		Inmovables.getInmovablesData(4, 14).then(function(response) {
			inmovablesData = response;
			selva.inmovablesClassList = Inmovables.generateInmovablesClassList(inmovablesData.inmovables);
		});
	}

	init();

});

app.controller('PBBosqueQuoteCtrl', function($scope, Inmovables, Moment) {
	
	let bosque = this;

	bosque.month = Moment.month();
	bosque.nextMonth = Moment.nextMonth();
	bosque.year = Moment.year();
	
	let inmovablesData = [];
	bosque.inmovablesClassList = [];
	bosque.propertyData = [];

	bosque.dialogDisplay = 'hide';

	let discountPlan1 = .25;
	let discountPlan2 = .20;

	bosque.showPropertyData = function(idCondominium, number) {

		angular.forEach(inmovablesData.inmovables, function(row, key) {

			if (row.number == number && row.idCondominium == idCondominium) {

				for (let indexCondos = 0; indexCondos < inmovablesData.condos.length; indexCondos++) {

					if (inmovablesData.inmovables[key].idCondominium == inmovablesData.condos[indexCondos].idCondominium) {

						bosque.propertyData.condominium = inmovablesData.condos[indexCondos].condominium;
	
						break;
	
					}
	
				}

				if (row.property_class == 1) {
					bosque.propertyData.propertyClass = 'Nave industrial';
					bosque.costToBlock = '$30,000 MXN';
				} else if (row.property_class == 2) {
					bosque.propertyData.propertyClass = 'Lote industrial';
					bosque.costToBlock = '$10,000 MXN';
				} else {
					bosque.propertyData.propertyClass = 'Lote habitacional';
					bosque.costToBlock = '$10,000 MXN';
				}
				
				for (let indexType = 0; indexType < inmovablesData.propertyTypes.length; indexType++) {

					if (inmovablesData.inmovables[key].idPropertyType == inmovablesData.propertyTypes[indexType].idPropertyType) {

						bosque.propertyData.type = inmovablesData.propertyTypes[indexType].type;
						bosque.propertyData.cost_m2 = inmovablesData.propertyTypes[indexType].cost_m2;
	
						break;
	
					}
	
				}

				if (inmovablesData.inmovables[key].cost_m2_increase != null) {
					bosque.propertyData.cost_m2 += bosque.propertyData.cost_m2 * inmovablesData.inmovables[key].cost_m2_increase.value;
				}

				bosque.propertyData.number = row.number;
				bosque.propertyData.area = row.area;
				let total = bosque.propertyData.cost_m2 * bosque.propertyData.area;
				bosque.propertyData.total = total.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2});
				let totalDiscountPlan1 = total - (total * discountPlan1);
				bosque.propertyData.discountPlan1 = discountPlan1 * 100;
				bosque.propertyData.totalPlan1 = totalDiscountPlan1.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2});
				let totalDiscountPlan2 = total - (total * discountPlan2);
				bosque.propertyData.discountPlan2 = discountPlan2 * 100;
				bosque.propertyData.totalPlan2 = totalDiscountPlan2.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2});
				bosque.openDialog();

			}

		});

	}

	bosque.openDialog = function() {
		bosque.dialogDisplay = '';
	}

	bosque.closeDialog = function() {
		bosque.dialogDisplay = 'hide';
	}

	let init = function() {
		Inmovables.getInmovablesData(4, 16).then(function(response) {
			inmovablesData = response;
			bosque.inmovablesClassList = Inmovables.generateInmovablesClassList(inmovablesData.inmovables);
		});
	}

	init();

});

// LANZAMIENTO DE LAGO DIEGO 12-12-2021

app.controller('PBLagoQuoteCtrl', function($scope, Inmovables, Moment) {
	
	let lago = this;

	lago.month = Moment.month();
	lago.nextMonth = Moment.nextMonth();
	lago.year = Moment.year();
	
	let inmovablesData = [];
	lago.inmovablesClassList = [];
	lago.propertyData = [];

	lago.dialogDisplay = 'hide';

	let discountPlan1 = .25;
	let discountPlan2 = .20;

	lago.showPropertyData = function(idCondominium, number) {

		angular.forEach(inmovablesData.inmovables, function(row, key) {

			if (row.number == number && row.idCondominium == idCondominium) {

				for (let indexCondos = 0; indexCondos < inmovablesData.condos.length; indexCondos++) {

					if (inmovablesData.inmovables[key].idCondominium == inmovablesData.condos[indexCondos].idCondominium) {

						lago.propertyData.condominium = inmovablesData.condos[indexCondos].condominium;
	
						break;
	
					}
	
				}

				if (row.property_class == 1) {
					lago.propertyData.propertyClass = 'Nave industrial';
					lago.costToBlock = '$30,000 MXN';
				} else if (row.property_class == 2) {
					lago.propertyData.propertyClass = 'Lote industrial';
					lago.costToBlock = '$10,000 MXN';
				} else {
					lago.propertyData.propertyClass = 'Lote habitacional';
					lago.costToBlock = '$10,000 MXN';
				}
				
				for (let indexType = 0; indexType < inmovablesData.propertyTypes.length; indexType++) {

					if (inmovablesData.inmovables[key].idPropertyType == inmovablesData.propertyTypes[indexType].idPropertyType) {

						lago.propertyData.type = inmovablesData.propertyTypes[indexType].type;
						lago.propertyData.cost_m2 = inmovablesData.propertyTypes[indexType].cost_m2;
	
						break;
	
					}
	
				}

				if (inmovablesData.inmovables[key].cost_m2_increase != null) {
					lago.propertyData.cost_m2 += lago.propertyData.cost_m2 * inmovablesData.inmovables[key].cost_m2_increase.value;
				}

				lago.propertyData.number = row.number;
				lago.propertyData.area = row.area;
				let total = lago.propertyData.cost_m2 * lago.propertyData.area;
				lago.propertyData.total = total.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2});
				let totalDiscountPlan1 = total - (total * discountPlan1);
				lago.propertyData.discountPlan1 = discountPlan1 * 100;
				lago.propertyData.totalPlan1 = totalDiscountPlan1.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2});
				let totalDiscountPlan2 = total - (total * discountPlan2);
				lago.propertyData.discountPlan2 = discountPlan2 * 100;
				lago.propertyData.totalPlan2 = totalDiscountPlan2.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2});
				lago.openDialog();

			}

		});

	}

	lago.openDialog = function() {
		lago.dialogDisplay = '';
	}

	lago.closeDialog = function() {
		lago.dialogDisplay = 'hide';
	}

	let init = function() {
		Inmovables.getInmovablesData(4, 17).then(function(response) {
			inmovablesData = response;
			lago.inmovablesClassList = Inmovables.generateInmovablesClassList(inmovablesData.inmovables);
		});
	}

	init();

});



// Lanzamiento de Manglar  23 de Abril 2022
app.controller('PBManglarQuoteCtrl', function($scope, Inmovables, Moment) {
	
	let manglar = this;

	manglar.month = Moment.month();
	manglar.nextMonth = Moment.nextMonth();
	manglar.year = Moment.year();
	
	let inmovablesData = [];
	manglar.inmovablesClassList = [];
	manglar.propertyData = [];

	manglar.dialogDisplay = 'hide';

	let discountPlan1 = .20;
	let discountPlan2 = .15;
	let discountPlan3 = .25;

	manglar.showPropertyData = function(idCondominium, number) {

		angular.forEach(inmovablesData.inmovables, function(row, key) {

			if (row.number == number && row.idCondominium == idCondominium) {

				for (let indexCondos = 0; indexCondos < inmovablesData.condos.length; indexCondos++) {

					if (inmovablesData.inmovables[key].idCondominium == inmovablesData.condos[indexCondos].idCondominium) {

						manglar.propertyData.condominium = inmovablesData.condos[indexCondos].condominium;
	
						break;
	
					}
	
				}

				if (row.property_class == 1) {
					manglar.propertyData.propertyClass = 'Nave industrial';
					manglar.costToBlock = '$30,000 MXN';
				} else if (row.property_class == 2) {
					manglar.propertyData.propertyClass = 'Lote industrial';
					manglar.costToBlock = '$10,000 MXN';
				} else {
					manglar.propertyData.propertyClass = 'Lote habitacional';
					manglar.costToBlock = '$10,000 MXN';
				}
				
				for (let indexType = 0; indexType < inmovablesData.propertyTypes.length; indexType++) {

					if (inmovablesData.inmovables[key].idPropertyType == inmovablesData.propertyTypes[indexType].idPropertyType) {

						manglar.propertyData.type = inmovablesData.propertyTypes[indexType].type;
						manglar.propertyData.cost_m2 = inmovablesData.propertyTypes[indexType].cost_m2;
	
						break;
	
					}
	
				}

				if (inmovablesData.inmovables[key].cost_m2_increase != null) {
					manglar.propertyData.cost_m2 += manglar.propertyData.cost_m2 * inmovablesData.inmovables[key].cost_m2_increase.value;
				}

				manglar.propertyData.number = row.number;
				manglar.propertyData.area = row.area;
				let total = manglar.propertyData.cost_m2 * manglar.propertyData.area;
				manglar.propertyData.total = total.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2});
				let totalDiscountPlan1 = total - (total * discountPlan1);
				manglar.propertyData.discountPlan1 = discountPlan1 * 100;
				manglar.propertyData.totalPlan1 = totalDiscountPlan1.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2});
				let totalDiscountPlan2 = total - (total * discountPlan2);
				manglar.propertyData.discountPlan2 = discountPlan2 * 100;
				manglar.propertyData.totalPlan2 = totalDiscountPlan2.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2});
				
				
				let totalDiscountPlan3 = total - (total * discountPlan3);
				manglar.propertyData.discountPlan3 = discountPlan3 * 100;
				manglar.propertyData.totalPlan3 = totalDiscountPlan3.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2});
				
				manglar.openDialog();

			}

		});

	}

	manglar.openDialog = function() {
		manglar.dialogDisplay = '';
	}

	manglar.closeDialog = function() {
		manglar.dialogDisplay = 'hide';
	}

	let init = function() {
		Inmovables.getInmovablesData(4, 20).then(function(response) {
			inmovablesData = response;
			manglar.inmovablesClassList = Inmovables.generateInmovablesClassList(inmovablesData.inmovables);
		});
	}

	init();

});

// LANZAMIENTO DE LOMAS DIEGO 26-01-2022

app.controller('PBLomasQuoteCtrl', function($scope, Inmovables, Moment) {
	
	let lomas = this;

	lomas.month = Moment.month();
	lomas.nextMonth = Moment.nextMonth();
	lomas.year = Moment.year();
	
	let inmovablesData = [];
	lomas.inmovablesClassList = [];
	lomas.propertyData = [];

	lomas.dialogDisplay = 'hide';

	let discountPlan1 = .25;
	let discountPlan2 = .20;

	lomas.showPropertyData = function(idCondominium, number) {

		angular.forEach(inmovablesData.inmovables, function(row, key) {

			if (row.number == number && row.idCondominium == idCondominium) {

				for (let indexCondos = 0; indexCondos < inmovablesData.condos.length; indexCondos++) {

					if (inmovablesData.inmovables[key].idCondominium == inmovablesData.condos[indexCondos].idCondominium) {

						lomas.propertyData.condominium = inmovablesData.condos[indexCondos].condominium;
	
						break;
	
					}
	
				}

				if (row.property_class == 1) {
					lomas.propertyData.propertyClass = 'Nave industrial';
					lomas.costToBlock = '$30,000 MXN';
				} else if (row.property_class == 2) {
					lomas.propertyData.propertyClass = 'Lote industrial';
					lomas.costToBlock = '$10,000 MXN';
				} else {
					lomas.propertyData.propertyClass = 'Lote habitacional';
					lomas.costToBlock = '$10,000 MXN';
				}
				
				for (let indexType = 0; indexType < inmovablesData.propertyTypes.length; indexType++) {

					if (inmovablesData.inmovables[key].idPropertyType == inmovablesData.propertyTypes[indexType].idPropertyType) {

						lomas.propertyData.type = inmovablesData.propertyTypes[indexType].type;
						lomas.propertyData.cost_m2 = inmovablesData.propertyTypes[indexType].cost_m2;
	
						break;
	
					}
	
				}

				if (inmovablesData.inmovables[key].cost_m2_increase != null) {
					lomas.propertyData.cost_m2 += lomas.propertyData.cost_m2 * inmovablesData.inmovables[key].cost_m2_increase.value;
				}

				lomas.propertyData.number = row.number;
				lomas.propertyData.area = row.area;
				let total = lomas.propertyData.cost_m2 * lomas.propertyData.area;
				lomas.propertyData.total = total.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2});
				let totalDiscountPlan1 = total - (total * discountPlan1);
				lomas.propertyData.discountPlan1 = discountPlan1 * 100;
				lomas.propertyData.totalPlan1 = totalDiscountPlan1.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2});
				let totalDiscountPlan2 = total - (total * discountPlan2);
				lomas.propertyData.discountPlan2 = discountPlan2 * 100;
				lomas.propertyData.totalPlan2 = totalDiscountPlan2.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2});
				lomas.openDialog();

			}

		});

	}

	lomas.openDialog = function() {
		lomas.dialogDisplay = '';
	}

	lomas.closeDialog = function() {
		lomas.dialogDisplay = 'hide';
	}

	let init = function() {
		Inmovables.getInmovablesData(4, 19).then(function(response) {
			inmovablesData = response;
			lomas.inmovablesClassList = Inmovables.generateInmovablesClassList(inmovablesData.inmovables);
		});
	}
	init();

});

app.controller('PBSLPTamulQuoteCtrl', function($scope, Inmovables, Moment) {
	
	let tamul = this;

	tamul.month = Moment.month();
	tamul.nextMonth = Moment.nextMonth();
	tamul.year = Moment.year();
	
	let inmovablesData = [];
	tamul.inmovablesClassList = [];
	tamul.propertyData = [];

	tamul.dialogDisplay = 'hide';

	let discountPlan1 = .25;
	let discountPlan2 = .20;

	tamul.showPropertyData = function(idCondominium, number) {

		angular.forEach(inmovablesData.inmovables, function(row, key) {

			if (row.number == number && row.idCondominium == idCondominium) {

				for (let indexCondos = 0; indexCondos < inmovablesData.condos.length; indexCondos++) {

					if (inmovablesData.inmovables[key].idCondominium == inmovablesData.condos[indexCondos].idCondominium) {

						tamul.propertyData.condominium = inmovablesData.condos[indexCondos].condominium;
	
						break;
	
					}
	
				}

				if (row.property_class == 1) {
					tamul.propertyData.propertyClass = 'Nave industrial';
					tamul.costToBlock = '$30,000 MXN';
				} else if (row.property_class == 2) {
					tamul.propertyData.propertyClass = 'Lote industrial';
					tamul.costToBlock = '$10,000 MXN';
				} else {
					tamul.propertyData.propertyClass = 'Lote habitacional';
					tamul.costToBlock = '$10,000 MXN';
				}
				
				for (let indexType = 0; indexType < inmovablesData.propertyTypes.length; indexType++) {

					if (inmovablesData.inmovables[key].idPropertyType == inmovablesData.propertyTypes[indexType].idPropertyType) {

						tamul.propertyData.type = inmovablesData.propertyTypes[indexType].type;
						tamul.propertyData.cost_m2 = inmovablesData.propertyTypes[indexType].cost_m2;
	
						break;
	
					}
	
				}

				if (inmovablesData.inmovables[key].cost_m2_increase != null) {
					tamul.propertyData.cost_m2 += tamul.propertyData.cost_m2 * inmovablesData.inmovables[key].cost_m2_increase.value;
				}

				tamul.propertyData.number = row.number;
				tamul.propertyData.area = row.area;
				let total = tamul.propertyData.cost_m2 * tamul.propertyData.area;
				tamul.propertyData.total = total.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2});
				let totalDiscountPlan1 = total - (total * discountPlan1);
				tamul.propertyData.discountPlan1 = discountPlan1 * 100;
				tamul.propertyData.totalPlan1 = totalDiscountPlan1.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2});
				let totalDiscountPlan2 = total - (total * discountPlan2);
				tamul.propertyData.discountPlan2 = discountPlan2 * 100;
				tamul.propertyData.totalPlan2 = totalDiscountPlan2.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2});
				tamul.openDialog();

			}

		});

	}

	tamul.openDialog = function() {
		tamul.dialogDisplay = '';
	}

	tamul.closeDialog = function() {
		tamul.dialogDisplay = 'hide';
	}

	let init = function() {
		Inmovables.getInmovablesData(4, 15).then(function(response) {
			inmovablesData = response;
			tamul.inmovablesClassList = Inmovables.generateInmovablesClassList(inmovablesData.inmovables);
		});
	}

	init();

});



// Lanzamiento de Zafiro   10  de Septiembre 2022
app.controller('PBBZafiroQuoteCtrl', function($scope, Inmovables, Moment) {
	
	let zafiro = this;

	zafiro.month = Moment.month();
	zafiro.nextMonth = Moment.nextMonth();
	zafiro.year = Moment.year();
	
	let inmovablesData = [];
	zafiro.inmovablesClassList = [];
	zafiro.propertyData = [];

	zafiro.dialogDisplay = 'hide';

	let discountPlan1 = .25;
	let discountPlan2 = .20;

	zafiro.showPropertyData = function(idCondominium, number) {

		angular.forEach(inmovablesData.inmovables, function(row, key) {

			if (row.number == number && row.idCondominium == idCondominium) {

				for (let indexCondos = 0; indexCondos < inmovablesData.condos.length; indexCondos++) {

					if (inmovablesData.inmovables[key].idCondominium == inmovablesData.condos[indexCondos].idCondominium) {

						zafiro.propertyData.condominium = inmovablesData.condos[indexCondos].condominium;
	
						break;
	
					}
	
				}

				if (row.property_class == 1) {
					zafiro.propertyData.propertyClass = 'Nave industrial';
					zafiro.costToBlock = '$30,000 MXN';
				} else if (row.property_class == 2) {
					zafiro.propertyData.propertyClass = 'Lote industrial';
					zafiro.costToBlock = '$10,000 MXN';
				} else {
					zafiro.propertyData.propertyClass = 'Lote habitacional';
					zafiro.costToBlock = '$10,000 MXN';
				}
				
				for (let indexType = 0; indexType < inmovablesData.propertyTypes.length; indexType++) {

					if (inmovablesData.inmovables[key].idPropertyType == inmovablesData.propertyTypes[indexType].idPropertyType) {

						zafiro.propertyData.type = inmovablesData.propertyTypes[indexType].type;
						zafiro.propertyData.cost_m2 = inmovablesData.propertyTypes[indexType].cost_m2;
						break;
	
					}
	
				}

				if (inmovablesData.inmovables[key].cost_m2_increase != null) {
					zafiro.propertyData.cost_m2 += zafiro.propertyData.cost_m2 * inmovablesData.inmovables[key].cost_m2_increase.value;
				}

				zafiro.propertyData.number = row.number;
				zafiro.propertyData.area = row.area;
				let total = zafiro.propertyData.cost_m2 * zafiro.propertyData.area;
				zafiro.propertyData.total = total.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2});
				let totalDiscountPlan1 = total - (total * discountPlan1);
				zafiro.propertyData.discountPlan1 = discountPlan1 * 100;
				zafiro.propertyData.totalPlan1 = totalDiscountPlan1.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2});
				let totalDiscountPlan2 = total - (total * discountPlan2);
				zafiro.propertyData.discountPlan2 = discountPlan2 * 100;
				zafiro.propertyData.totalPlan2 = totalDiscountPlan2.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2});
			
				zafiro.openDialog();

			}

		});

	}

	zafiro.openDialog = function() {
		zafiro.dialogDisplay = '';
	}

	zafiro.closeDialog = function() {
		zafiro.dialogDisplay = 'hide';
	}

	let init = function() {
		Inmovables.getInmovablesData(12, 21).then(function(response) {
			inmovablesData = response;
			zafiro.inmovablesClassList = Inmovables.generateInmovablesClassList(inmovablesData.inmovables);
		});
	}

	init();

});

/********** lanzamiento AMatista 10 septiembre 2022 **********/

app.controller('PBBAmatistaQuoteCtrl', function($scope, Inmovables, Moment) {
	
	let amatista = this;

	amatista.month = Moment.month();
	amatista.nextMonth = Moment.nextMonth();
	amatista.year = Moment.year();
	
	let inmovablesData = [];
	amatista.inmovablesClassList = [];
	amatista.propertyData = [];

	amatista.dialogDisplay = 'hide';

	let discountPlan1 = .25;
	let discountPlan2 = .20;

	amatista.showPropertyData = function(idCondominium, number) {

		angular.forEach(inmovablesData.inmovables, function(row, key) {

			if (row.number == number && row.idCondominium == idCondominium) {

				for (let indexCondos = 0; indexCondos < inmovablesData.condos.length; indexCondos++) {

					if (inmovablesData.inmovables[key].idCondominium == inmovablesData.condos[indexCondos].idCondominium) {

						amatista.propertyData.condominium = inmovablesData.condos[indexCondos].condominium;
	
						break;
	
					}
	
				}

				if (row.property_class == 1) {
					amatista.propertyData.propertyClass = 'Nave industrial';
					amatista.costToBlock = '$30,000 MXN';
				} else if (row.property_class == 2) {
					amatista.propertyData.propertyClass = 'Lote industrial';
					amatista.costToBlock = '$10,000 MXN';
				} else {
					amatista.propertyData.propertyClass = 'Lote habitacional';
					amatista.costToBlock = '$10,000 MXN';
				}
				
				for (let indexType = 0; indexType < inmovablesData.propertyTypes.length; indexType++) {

					if (inmovablesData.inmovables[key].idPropertyType == inmovablesData.propertyTypes[indexType].idPropertyType) {

						amatista.propertyData.type = inmovablesData.propertyTypes[indexType].type;
						amatista.propertyData.cost_m2 = inmovablesData.propertyTypes[indexType].cost_m2;
						break;
	
					}
	
				}

				if (inmovablesData.inmovables[key].cost_m2_increase != null) {
					amatista.propertyData.cost_m2 += amatista.propertyData.cost_m2 * inmovablesData.inmovables[key].cost_m2_increase.value;
				}

				amatista.propertyData.number = row.number;
				amatista.propertyData.area = row.area;
				let total = amatista.propertyData.cost_m2 * amatista.propertyData.area;
				amatista.propertyData.total = total.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2});

				let totalDiscountPlan1 = total - (total * discountPlan1);
				if (key == 21) {
					totalDiscountPlan1 = totalDiscountPlan1 + 0.01
				}

				amatista.propertyData.discountPlan1 = discountPlan1 * 100;
				amatista.propertyData.totalPlan1 = totalDiscountPlan1.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2});
				let totalDiscountPlan2 = total - (total * discountPlan2);
				amatista.propertyData.discountPlan2 = discountPlan2 * 100;
				amatista.propertyData.totalPlan2 = totalDiscountPlan2.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2});
			
				amatista.openDialog();

			}

		});

	}

	amatista.openDialog = function() {
		amatista.dialogDisplay = '';
	}

	amatista.closeDialog = function() {
		amatista.dialogDisplay = 'hide';
	}

	let init = function() {
		Inmovables.getInmovablesData(12, 22).then(function(response) {
			inmovablesData = response;
			amatista.inmovablesClassList = Inmovables.generateInmovablesClassList(inmovablesData.inmovables);
		});
	}

	init();

});


/********** lanzamiento MALAQUITA 26 septiembre 2022 **********/
app.controller('PBBMalaquitaQuoteCtrl', function($scope, Inmovables, Moment) {
	
	let malaquita = this;

	malaquita.month = Moment.month();
	malaquita.nextMonth = Moment.nextMonth();
	malaquita.year = Moment.year();
	
	let inmovablesData = [];
	malaquita.inmovablesClassList = [];
	malaquita.propertyData = [];

	malaquita.dialogDisplay = 'hide';

	let discountPlan1 = .25;
	let discountPlan2 = .20;

	malaquita.showPropertyData = function(idCondominium, number) {

		angular.forEach(inmovablesData.inmovables, function(row, key) {

			if (row.number == number && row.idCondominium == idCondominium) {

				for (let indexCondos = 0; indexCondos < inmovablesData.condos.length; indexCondos++) {

					if (inmovablesData.inmovables[key].idCondominium == inmovablesData.condos[indexCondos].idCondominium) {

						malaquita.propertyData.condominium = inmovablesData.condos[indexCondos].condominium;
	
						break;
	
					}
	
				}

				if (row.property_class == 1) {
					malaquita.propertyData.propertyClass = 'Nave industrial';
					malaquita.costToBlock = '$30,000 MXN';
				} else if (row.property_class == 2) {
					malaquita.propertyData.propertyClass = 'Lote industrial';
					malaquita.costToBlock = '$10,000 MXN';
				} else {
					malaquita.propertyData.propertyClass = 'Lote habitacional';
					malaquita.costToBlock = '$10,000 MXN';
				}
				
				for (let indexType = 0; indexType < inmovablesData.propertyTypes.length; indexType++) {

					if (inmovablesData.inmovables[key].idPropertyType == inmovablesData.propertyTypes[indexType].idPropertyType) {

						malaquita.propertyData.type = inmovablesData.propertyTypes[indexType].type;
						malaquita.propertyData.cost_m2 = inmovablesData.propertyTypes[indexType].cost_m2;
						break;
	
					}
	
				}

				if (inmovablesData.inmovables[key].cost_m2_increase != null) {
					malaquita.propertyData.cost_m2 += malaquita.propertyData.cost_m2 * inmovablesData.inmovables[key].cost_m2_increase.value;
				}

				malaquita.propertyData.number = row.number;
				malaquita.propertyData.area = row.area;
				let total = malaquita.propertyData.cost_m2 * malaquita.propertyData.area;
				malaquita.propertyData.total = total.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2});

				let totalDiscountPlan1 = total - (total * discountPlan1);
				if (key == 21) {
					totalDiscountPlan1 = totalDiscountPlan1 + 0.01
				}

				malaquita.propertyData.discountPlan1 = discountPlan1 * 100;
				malaquita.propertyData.totalPlan1 = totalDiscountPlan1.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2});
				let totalDiscountPlan2 = total - (total * discountPlan2);
				malaquita.propertyData.discountPlan2 = discountPlan2 * 100;
				malaquita.propertyData.totalPlan2 = totalDiscountPlan2.toLocaleString(undefined, {minimumFractionDigits: 2,'maximumFractionDigits':2});
			
				malaquita.openDialog();

			}

		});

	}

	malaquita.openDialog = function() {
		malaquita.dialogDisplay = '';
	}

	malaquita.closeDialog = function() {
		malaquita.dialogDisplay = 'hide';
	}

	let init = function() {
		Inmovables.getInmovablesData(12, 24).then(function(response) {
			inmovablesData = response;
			malaquita.inmovablesClassList = Inmovables.generateInmovablesClassList(inmovablesData.inmovables);
		});
	}

	init();

});

/********** Menu **********/

app.controller('ContactMenuCtrl', function DemoCtrl($mdDialog, $window, $location) {

	var originatorEv;

	this.openMenu = function($mdMenu, ev) {
		originatorEv = ev;
		$mdMenu.open(ev);
	};

	this.notificationsEnabled = true;
	this.toggleNotifications = function() {
		this.notificationsEnabled = !this.notificationsEnabled;
	};

	this.redial = function() {
		$mdDialog.show(
			$mdDialog.alert()
			.targetEvent(originatorEv)
			.clickOutsideToClose(true)
			.parent('body')
			.title('Suddenly, a redial')
			.textContent('You just called a friend; who told you the most amazing story. Have a cookie!')
			.ok('That was easy')
			);

		originatorEv = null;
	};

	this.checkVoicemail = function() {
	// This never happens.
	};

	this.toWhatsapp = function() {
		$window.location.href = 'https://wa.me/5214421275214?text=Me%20gustaría%20saber%20más%20acerca%20de%20Portto%20Blanco';
	}

	this.toCall = function() {
		$window.location.href = 'tel:+5214421275214';
	}

	this.toPBEstepa = function() {
		$location.path('/portto_blanco-estepa');
	}

	this.toPBDesierto = function() {
		$location.path('/Portto_Blanco-Desierto');
	}

	this.toPBTaiga = function() {
		$location.path('/Portto_Blanco-Taiga');
	}

	this.toPBParamo = function() {
		$location.path('/Portto_Blanco-Paramo');
	}

	this.toPBSelva = function() {
		$location.path('/Portto_Blanco-Selva');
	}

	this.toPBBosque = function() {
		$location.path('/Portto_Blanco-Bosque');
	}

	this.toPBSLPTamul = function() {
		$location.path('/Portto_Blanco-Tamul');
	}

});

app.controller('PorttoBlancoMainCtrl', function($scope) {
	var porttoBlanco = this;
});

app.controller('PorttoBlancoDialogPromoCtrl', function($scope, $timeout, moment) {
	
	var porttoBlancoDialogPromoQuote = this;

	porttoBlancoDialogPromoQuote.dialogDisplay = '';

	porttoBlancoDialogPromoQuote.closeDialog = function() {
		porttoBlancoDialogPromoQuote.dialogDisplay = 'hide';
	}
});

app.controller('InsertUserCtrl', function($scope, $rootScope, $http, $location, Session) {
	
	Session.permissions().then(function(response) {
		if (response.isLogged < 1) {
			$location.path('/login');
		}
		if (response.idProfile != 1 && response.isLogged != 3) {
			$location.path('/dashboard');
		}
	});
	
	
	var user = this;
	
	user.newUser = {};

	function resetUserData() {
		user.newUser.username = '';
		user.newUser.password = '';
		user.newUser.name = '';
		user.newUser.last_name = '';
		user.newUser.email = '';
		user.newUser.email_name = '';
		user.newUser.email_domain = '';
		user.newUser.phone = '';
		user.newUser.address = '';
		user.newUser.idGender = 1;
		user.newUser.idProfile = 3;
	}
	
	let responseHandler = function(response) {
		switch (response) {
			case 1:
			case 2:
			case 3:
				user.messsage = 'Se agregó exitosamente';
				user.close();
				break;
			case 0:
				user.messsage = 'Correo electrónico en uso';
				break;
			case -1:
				user.messsage = 'Telefóno en uso';
				break;
			case -2:
				user.messsage = 'Hubo un problema al intentar agregar Correo electrónico, contacta a un administrador';
				break;
			case -3:
				user.messsage = 'Se agregó Correo electrónico pero hubo un problema al intentar agregar Cliente, contacta a un administrador';
				break;
			case -4:
				user.messsage = 'Se agregaron algunos datos de Cliente pero hubo un problema al intentar agregar Telefóno, contacta a un administrador';
				break;
			case -5:
				user.messsage = 'Se agregaron los datos de Cliente pero hubo un problema al intentar relacionar Cliente - Telefóno, contacta a un administrador';
				break;
			case -6:
				user.messsage = 'Se agregaron algunos datos de Cliente pero hubo un problema al intentar agregar Dirección, contacta a un administrador';
				break;
			case -7:
				user.messsage = 'Se agregaron los datos de Cliente pero hubo un problema al intentar relacionar Cliente - Dirección, contacta a un administrador';
				break;
			case -8:
				user.messsage = 'Nombre de usuario en uso';
				break;
			case -9:
				$location.path('/login');
		}
		alert(user.messsage);
	}

	let sendUserData = function() {

		user.newUser.email = user.newUser.email.toLowerCase();
		let email = user.newUser.email.split("@");
		user.newUser.email_name = email[0];
		user.newUser.email_domain = email[1];

		user.newUser.name = user.newUser.name.trim();
		user.newUser.last_name = user.newUser.last_name.trim();

		$http({

			method: 'POST',
			url: 'application/controllers/insert_user_controller.php',
			data: user.newUser,
			headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' }

		}).then(function(response) {

			responseHandler(response.data.status);
			console.log('HTTP_INSERT_USER_OK');

		}, function(response) {

			console.log('HTTP_INSERT_USER_ERR');

		});
	}

	user.insertUser = function() {
		sendUserData();
	}

	user.close = function() {
		$rootScope.is_scrollin = '';
		$rootScope.rootUsers.insert.options.modal_display = 'hide';
		resetUserData();
	}

	function init() {
		resetUserData();
	}

	init();

});

app.controller('UpdateUserCtrl', function($scope, $rootScope, $http, $location, Session) {
	
	Session.permissions().then(function(response) {
		if (response.isLogged < 1) {
			$location.path('/login');
		}
		if (response.idProfile != 1 && response.isLogged != 3) {
			$location.path('/dashboard');
		}
	});
	
	
	var updateHandler = this;
	
	updateHandler.data = {};

	function resetUserData() {
		$rootScope.rootUsers.update.data.idUser = 0;
		$rootScope.rootUsers.update.data.username = '';
		$rootScope.rootUsers.update.data.password = '';
		$rootScope.rootUsers.update.data.name = '';
		$rootScope.rootUsers.update.data.last_name = '';
		$rootScope.rootUsers.update.data.idPhone = 0;
		$rootScope.rootUsers.update.data.phone = '';
		$rootScope.rootUsers.update.data.idAddress = 0;
		$rootScope.rootUsers.update.data.address = '';
		$rootScope.rootUsers.update.data.idGender = 1;
		$rootScope.rootUsers.update.data.idProfile = 3;
	}

	updateHandler.setUsername = function() {

		$http({

			method: 'POST',
			url: 'application/controllers/update_username.php',
			data: {
				idUser: $rootScope.rootUsers.update.data.idUser,
				username: $rootScope.rootUsers.update.data.username
			},
			headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' }

		}).then(function(response) {

			if (response.data.status) {
				alert('Se actualizó Nombre de usuario');
			} else {
				alert('Este Nombre de usuario ya está siendo usado');
			}

			console.log('HTTP_UPDATE_USERNAME_USER_OK');

		}, function(response) {

			console.log('HTTP_UPDATE_USERNAME_USER_ERR');

		});
	}

	updateHandler.setPassword = function() {

		$http({

			method: 'POST',
			url: 'application/controllers/update_password.php',
			data: {
				idUser: $rootScope.rootUsers.update.data.idUser,
				password: $rootScope.rootUsers.update.data.password
			},
			headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' }

		}).then(function(response) {

			console.log('HTTP_UPDATE_PASSWORD_USER_OK');
			if (response.status) {
				alert('Se actualizó Contraseña');
			}

		}, function(response) {

			console.log('HTTP_UPDATE_PASSWORD_USER_ERR');

		});
	}

	updateHandler.setName = function() {

		$rootScope.rootUsers.update.data.name = $rootScope.rootUsers.update.data.name.trim();

		$http({

			method: 'POST',
			url: 'application/controllers/update_name.php',
			data: {
				idUser: $rootScope.rootUsers.update.data.idUser,
				name: $rootScope.rootUsers.update.data.name
			},
			headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' }

		}).then(function(response) {

			console.log('HTTP_UPDATE_NAME_USER_OK');
			if (response.status) {
				alert('Se actualizó Nombre(s)');
			}

		}, function(response) {

			console.log('HTTP_UPDATE_NAME_USER_ERR');

		});
	}

	updateHandler.setLastName = function() {

		$rootScope.rootUsers.update.data.last_name = $rootScope.rootUsers.update.data.last_name.trim();

		$http({

			method: 'POST',
			url: 'application/controllers/update_last_name.php',
			data: {
				idUser: $rootScope.rootUsers.update.data.idUser,
				last_name: $rootScope.rootUsers.update.data.last_name
			},
			headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' }

		}).then(function(response) {

			console.log('HTTP_UPDATE_LAST_NAME_USER_OK');
			if (response.status) {
				alert('Se actualizó Apellido(s)');
			}

		}, function(response) {

			console.log('HTTP_UPDATE_LAST_NAME_USER_ERR');

		});
	}

	updateHandler.setPhone = function() {

		$http({

			method: 'POST',
			url: 'application/controllers/update_phone.php',
			data: {
				idPhone: $rootScope.rootUsers.update.data.idPhone,
				phone: $rootScope.rootUsers.update.data.phone
			},
			headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' }

		}).then(function(response) {

			console.log('HTTP_UPDATE_PHONE_USER_OK');
			if (response.status) {
				alert('Se actualizó Teléfono');
			}

		}, function(response) {

			console.log('HTTP_UPDATE_PHONE_USER_ERR');

		});
	}

	updateHandler.setAddress = function() {

		$http({

			method: 'POST',
			url: 'application/controllers/update_address.php',
			data: {
				idUser: $rootScope.rootUsers.update.data.idUser,
				idAddress: $rootScope.rootUsers.update.data.idAddress,
				address: $rootScope.rootUsers.update.data.address
			},
			headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' }

		}).then(function(response) {

			if (response.data.status) {
				alert('Se actualizó Dirección');
			}

			console.log('HTTP_UPDATE_ADDRESS_USER_OK');

		}, function(response) {

			console.log('HTTP_UPDATE_ADDRESS_USER_ERR');

		});
	}

	updateHandler.setProfile = function() {

		$http({

			method: 'POST',
			url: 'application/controllers/update_profile.php',
			data: {
				idUser: $rootScope.rootUsers.update.data.idUser,
				idProfile: $rootScope.rootUsers.update.data.idProfile
			},
			headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' }

		}).then(function(response) {

			console.log('HTTP_UPDATE_PROFILE_USER_OK');
			if (response.status) {
				alert('Se actualizó Perfil');
			}

		}, function(response) {

			console.log('HTTP_UPDATE_PROFILE_USER_ERR');

		});
	}

	updateHandler.setGender = function() {

		$http({

			method: 'POST',
			url: 'application/controllers/update_gender.php',
			data: {
				idUser: $rootScope.rootUsers.update.data.idUser,
				idGender: $rootScope.rootUsers.update.data.idGender
			},
			headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' }

		}).then(function(response) {

			console.log('HTTP_UPDATE_GENDER_USER_OK');
			if (response.status) {
				alert('Se actualizó Sexo');
			}

		}, function(response) {

			console.log('HTTP_UPDATE_GENDER_USER_ERR');

		});
	}

});

app.controller('InsertLeadCtrl', function($scope, $location, $http, Session) {
	
	Session.isLogged().then(function(response) {
		if (response < 1) {
			$location.path('/login');
		}
	});
	
	
	var lead = this;
	
	lead.newLead = [];
	lead.newLead.name = '';
	lead.newLead.last_name = '';
	lead.newLead.email = '';
	lead.newLead.phone = '';
	lead.newLead.address = '';
	lead.newLead.idMedium = 1;
	lead.newLead.idGender = 1;
	// lead.newLead.need = 'none';
	lead.newLead.idLeadStatus = 1;

	var responseHandler = function(response) {
		switch (response) {
			case 1:
			case 2:
			case 3:
				$location.path('/dashboard');
				break;
			case 0:
				lead.messageError = 'Correo electrónico en uso';
				break;
			case -1:
				lead.messageError = 'Telefóno en uso';
				break;
			case -2:
				lead.messageError = 'Hubo un problema al intentar agregar Correo electrónico, contacta a un administrador';
				break;
			case -3:
				lead.messageError = 'Se agregó Correo electrónico pero hubo un problema al intentar agregar Cliente, contacta a un administrador';
				break;
			case -4:
				lead.messageError = 'Se agregaron algunos datos de Cliente pero hubo un problema al intentar agregar Telefóno, contacta a un administrador';
				break;
			case -5:
				lead.messageError = 'Se agregaron los datos de Cliente pero hubo un problema al intentar relacionar Cliente - Telefóno, contacta a un administrador';
				break;
			case -6:
				lead.messageError = 'Se agregaron algunos datos de Cliente pero hubo un problema al intentar agregar Dirección, contacta a un administrador';
				break;
			case -7:
				lead.messageError = 'Se agregaron los datos de Cliente pero hubo un problema al intentar relacionar Cliente - Dirección, contacta a un administrador';
				break;
			case -8:
				$location.path('/login');
		}
	}

	let sendLeadData = function() {
		lead.newLead.email = lead.newLead.email.toLowerCase();
		var email = lead.newLead.email.split("@");
		$http({
			method: 'POST',
	    url: 'application/controllers/insert_lead_controller.php',
	    data: {
		    name: lead.newLead.name,
				last_name: lead.newLead.last_name,
				email: email[0],
				domain: email[1],
				phone: lead.newLead.phone,
				idGender: lead.newLead.idGender,
				address: lead.newLead.address,
				idMedium: lead.newLead.idMedium,
				idLeadStatus: lead.newLead.idLeadStatus
	    },
	    headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' }
		}).then(function(response) {
			responseHandler(response.data.status);
			console.log('HTTP_INSERT_LEAD_OK');
		}, function(response) {
			console.log('HTTP_INSERT_LEAD_ERR');
		});
	}

	lead.checkMedium = function() {
		if (lead.newLead['idMedium'] > 0) {
			return true;
		}
		lead.messageError = 'Selecciona un medio de contacto';
		return false;
	}

	lead.insertLead = function() {
		if (lead.checkMedium()) {
			sendLeadData();
		}
	}

});

app.controller('LandingCtrl', function($scope, $location, $http) {
	
	var landing = this;
	
	landing.newLead = [];
	landing.newLead.name = '';
	landing.newLead.last_name = '';
	landing.newLead.email = '';
	landing.newLead.phone = '';

	landing.dialogDisplay = 'hide';
	landing.messageDialogDisplay = 'hide';

	var responseHandler = function(response) {
		switch (response) {
			case 1:
			case 2:
			case 3:
				landing.dialogDisplay = 'hide';
				landing.messageDialogDisplay = '';
				break;
			case 0:
				landing.messageError = 'Correo electrónico en uso';
				break;
			case -1:
				landing.messageError = 'Telefóno en uso';
				break;
			case -2:
				landing.messageError = 'Hubo un problema al intentar agregar Correo electrónico, contacta a un administrador';
				break;
			case -3:
				landing.messageError = 'Se agregó Correo electrónico pero hubo un problema al intentar agregar Cliente, contacta a un administrador';
				break;
			case -4:
				landing.messageError = 'Se agregaron algunos datos de Cliente pero hubo un problema al intentar agregar Telefóno, contacta a un administrador';
				break;
			case -5:
				landing.messageError = 'Se agregaron los datos de Cliente pero hubo un problema al intentar relacionar Cliente - Telefóno, contacta a un administrador';

		}
	}

	landing.sendLeadData = function(idMedium) {
		landing.newLead.email = landing.newLead.email.toLowerCase();
		var email = landing.newLead.email.split("@");
		console.log('Entra');
		$http({
			method: 'POST',
			url: 'application/controllers/insert_landing_lead.php',
			data: {
		    	name: landing.newLead.name,
				last_name: landing.newLead.last_name,
				email: email[0],
				domain: email[1],
				phone: landing.newLead.phone,
				idMedium: idMedium
			},
			headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' }
		}).then(function(response) {
			responseHandler(response.data.status);
			console.log('HTTP_INSERT_LEAD_OK');
		}, function(response) {
			console.log('HTTP_INSERT_LEAD_ERR');
		});
	}

	landing.showDialog = function() {
		landing.newLead.name = '';
		landing.newLead.last_name = '';
		landing.newLead.email = '';
		landing.newLead.phone = '';
		landing.dialogDisplay = '';
	}

	landing.hideDialog = function() {
		landing.dialogDisplay = 'hide';
	}

	landing.hideMessageDialog = function() {
		landing.messageDialogDisplay = 'hide';
	}

});

app.controller('UpdateLeadCtrl', function($scope, $location, $http, $rootScope, Session) {

	Session.isLogged().then(function(response) {
		if (response < 1) {
			$location.path('/login');
		}
		if ($rootScope.selectedLead.id < 1) {
			$location.path('/dashboard');
		}
	});

	var dashboard = this;
	var data = {};

	dashboard.responseHandler = function(response) {
		switch (response) {
			case 1:
			case 2:
			case 3:
			case 4:
			case 5:
			case 6:
			case 7:
			case 8:
			case 9:
				$location.path('/dashboard');
				break;
			case -1:
				dashboard.messageError = 'Telefóno en uso';
				break;
			case -2:
				dashboard.messageError = 'Hubo un problema al intentar actualizar Nombre(s), contacta a un administrador';
				break;
			case -3:
				dashboard.messageError = 'Hubo un problema al intentar actualizar Apellido(s), contacta a un administrador';
				break;
			case -4:
				dashboard.messageError = 'Hubo un problema al intentar actualizar Sexo, contacta a un administrador';
				break;
			case -5:
				dashboard.messageError = 'Hubo un problema al intentar actualizar Medio de contacto, contacta a un administrador';
				break;
			case -6:
				dashboard.messageError = 'Hubo un problema al intentar actualizar Dirección, contacta a un administrador';
				break;
			case -7:
				dashboard.messageError = 'Hubo un problema al intentar insertar Nueva Dirección, contacta a un administrador';
				break;
			case -8:
				dashboard.messageError = 'Hubo un problema al intentar relacionar Nueva Dirección, contacta a un administrador';
				break;
			case -9:
				dashboard.messageError = 'Hubo un problema al intentar actualizar Telefóno, contacta a un administrador';
				break;
			case -10:
				dashboard.messageError = 'Hubo un problema al intentar insertar Nuevo Telefóno, contacta a un administrador';
				break;
			case -11:
				dashboard.messageError = 'Hubo un problema al intentar relacionar Nuevo Telefóno, contacta a un administrador';
				break;
			case -12:
				$location.path('/login');
		}
	}

	dashboard.updateLead = function() {
		var email = dashboard.selectedLead.emailDir.split("@");
		data.newEmail = (email[0] != $rootScope.selectedLead.email) ? email[0] : '';
		data.newDomain = (email[1] != $rootScope.selectedLead.domain) ? email[1] : '';
		data.phone = (dashboard.selectedLead.phone != $rootScope.selectedLead.phone) ? dashboard.selectedLead.phone : '';
		$http({
			method: 'POST',
				url: 'application/controllers/update_lead_controller.php',
				data: {
				idLead: dashboard.selectedLead.idLead,
				name: dashboard.selectedLead.name,
				last_name: dashboard.selectedLead.last_name,
				idEmail: dashboard.selectedLead.idEmail,
				email: $rootScope.selectedLead.email,
				newEmail: data.newEmail,
				idEmailDomain: dashboard.selectedLead.idEmail,
				domain: $rootScope.selectedLead.domain,
				newDomain: data.newDomain,
				idPhone: dashboard.selectedLead.idPhone,
				phone: data.phone,
				idGender: dashboard.selectedLead.idGender,
				idMedium: dashboard.selectedLead.idMedium,
				idAddress: dashboard.selectedLead.idAddress,
				address: dashboard.selectedLead.address
			},
			headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' }
		}).then(function(response) {
			dashboard.responseHandler(response.data.result);
			console.log('HTTP_UPDATE_LEAD_OK');
		}, function(response) {
			console.log('HTTP_UPDATE_LEAD_ERR');
		});
	}

	var init = function() {
		dashboard.selectedLead = Object.assign({} , $rootScope.selectedLead);
		dashboard.email = dashboard.selectedLead.email + '@' + dashboard.selectedLead.domain;
	}

	init();
});

app.controller('PBEstepaRequestCtrl', function($scope, $location, $http, $rootScope, Session, Inmovables) {

	Session.isLogged().then(function(response) {
		if (response < 1) {
			$location.path('/login');
		}
	});

	var estepa = this;

	let inmovables = Inmovables;
	
	estepa.inmovablesData = [];
	estepa.inmovablesClassList = [];
	estepa.dialogDisplay = 'hide';


	estepa.updatePropertyStatus = function(idProperty) {
		estepa.openDialog();
	}

	estepa.openDialog = function() {
		estepa.dialogDisplay = '';
	}

	estepa.closeDialog = function() {
		estepa.dialogDisplay = 'hide';
	}

	var init = function() {
		inmovables.getInmovablesData(4, 1).then(function(response) {
			inmovablesData = response;
			estepa.inmovablesClassList = inmovables.generateInmovablesClassList(inmovablesData.inmovables);
		});
	}

	init();
});

app.controller('ChangePasswordCtrl', function($scope, $http, $location) {

	var dashboard = this;

	var resetPasswordData = function() {
		dashboard.lastPassword = '';
		dashboard.newPassword = '';
		dashboard.rePassword = '';
	}

	dashboard.changePassword = function() {
		if (dashboard.newPassword === dashboard.rePassword) {
			$http({
				method: 'POST',
					url: 'application/controllers/change_password_controller.php',
					data: {
						lastPassword: dashboard.lastPassword,
						newPassword: dashboard.newPassword
					},
					headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' }
			}).then(function(response) {
					resetPasswordData();
					console.log('HTTP_SEND_LOGIN_OK');
					if (response.data.status > 0) {
						$location.path('/dashboard');
					} else {
						M.toast({html: 'Contraseña anterior incorrecta'});
					}
				}, function(response) {
					resetPasswordData();
					console.log('HTTP_SEND_LOGIN_ERR');
				});
			} else {
				M.toast({html: 'Usuario o contraseña incorrectos'});
				resetPasswordData();
			}
		}
});

app.controller('QuoteController', function($scope, $timeout, moment) {

	var quote = this;

	/********** Constantes **********/

	quote.costosXM2Naves = [ 														// Precios por M2
		{costo: 9500, lanzamiento: 8835, tamanioMin: 200, tamanioMax: 399}, 		// $9500.00 MXN Si 200 <= M2 <= 399
		{costo: 9200, lanzamiento: 8556, tamanioMin: 400, tamanioMax: 499}, 		// $9200.00 MXN Si 400 <= M2 <= 499
		{costo: 8900, lanzamiento: 8277, tamanioMin: 500, tamanioMax: 599}, 		// $8900.00 MXN Si 500 <= M2 <= 599
		{costo: 8600, lanzamiento: 7998, tamanioMin: 600, tamanioMax: 799}, 		// $8600.00 MXN Si 600 <= M2 <= 799
		{costo: 8300, lanzamiento: 7719, tamanioMin: 800, tamanioMax: 999}, 		// $8300.00 MXN Si 800 <= M2 <= 999
		{costo: 8000, lanzamiento: 7440, tamanioMin: 1000, tamanioMax: 1500} 		// $8000.00 MXN Si 1000 <= M2 <= 1500
	];
	
	quote.planesPagoNaves = [ 														// Planes de pago
		{interes: 0, plazoMin: 2, plazoMax: 36}, 									// Plan <= 3 años
		{interes: .02, plazoMin: 37, plazoMax: 120}, 								// 3 años < Plan <= 10 años
		{interes: .025, plazoMin: 121, plazoMax: 180}								// Plan > 10 años
	];

	quote.plusvaliaNaves = {
		valor3Anios: 1.17,
		valor10Anios: 2.11
	};
	
	quote.costosXM2Lotes = [
		{costo: 3300, lanzamiento: 3100, tamanioMin: 200, tamanioMax: 399},
		{costo: 3100, lanzamiento: 2900, tamanioMin: 400, tamanioMax: 499},
		{costo: 2900, lanzamiento: 2700, tamanioMin: 500, tamanioMax: 599},
		{costo: 2700, lanzamiento: 2500, tamanioMin: 600, tamanioMax: 799},
		{costo: 2500, lanzamiento: 2300, tamanioMin: 800, tamanioMax: 999},
		{costo: 2300, lanzamiento: 2000, tamanioMin: 1000, tamanioMax: 1500}
	];

	quote.planesPagoLotes = [
		{interes: 0, plazoMin: 2, plazoMax: 36},
		{interes: .015, plazoMin: 37, plazoMax: 120},
		{interes: .02, plazoMin: 121, plazoMax: 180}
	];

	quote.costosXTipoLotesHabitta = {
		estandar: 3000,
		plus: 3150,
		premium: 3300
	};

	quote.plusvaliaLotes = {
		valor3Anios: 1.17,
		valor10Anios: 1.85
	};

	quote.costosXM2LotesHabitta = [
		{costo: quote.costosXTipoLotesHabitta.estandar, lanzamiento: quote.costosXTipoLotesHabitta.estandar, tamanioMin: 100, tamanioMax: 399},
		{costo: quote.costosXTipoLotesHabitta.estandar, lanzamiento: quote.costosXTipoLotesHabitta.estandar, tamanioMin: 400, tamanioMax: 499},
		{costo: quote.costosXTipoLotesHabitta.estandar, lanzamiento: quote.costosXTipoLotesHabitta.estandar, tamanioMin: 500, tamanioMax: 599},
		{costo: quote.costosXTipoLotesHabitta.estandar, lanzamiento: quote.costosXTipoLotesHabitta.estandar, tamanioMin: 600, tamanioMax: 799},
		{costo: quote.costosXTipoLotesHabitta.estandar, lanzamiento: quote.costosXTipoLotesHabitta.estandar, tamanioMin: 800, tamanioMax: 999},
		{costo: quote.costosXTipoLotesHabitta.estandar, lanzamiento: quote.costosXTipoLotesHabitta.estandar, tamanioMin: 1000, tamanioMax: 1500}
	];

	quote.planesPagoLotesHabitta = [ 												// Planes de pago
		{interes: 0, plazoMin: 2, plazoMax: 48}, 									// Plan <= 3 años
		{interes: .01, plazoMin: 49, plazoMax: 120}, 								// 3 años < Plan <= 10 años
		{interes: .0125, plazoMin: 121, plazoMax: 180}								// Plan > 10 años
	];

	quote.enganches = [
		{min: .3, max: .9},
		{min: .1, max: .9}
	];

	quote.inversionType = 0;

	/********** Variables de entrada **********/
	quote.tamanio = 200;															// 200 M2 es el tamaño mínimo que se puede comprar
	quote.plazo = 1; 																// Mensualidades 1=Contado

	quote.costosXM2 = quote.costosXM2Naves;
	quote.planesPago = quote.planesPagoNaves;
	quote.enganche = quote.engancheNaves;
	quote.plusvalia = quote.plusvaliaNaves;

	quote.engancheMin = quote.enganches[0].min;
	quote.engancheMax = quote.enganches[0].max;
	quote.engancheTotalMin = 0;
	quote.engancheTotalMax = 0;
	quote.engancheActual = 0;

	quote.isLanzamiento = false;
	quote.precioSelected = quote.costosXM2[0].costo;

	/********** Variables **********/
	quote.indexCosto = 0;															// Guarda index para costosXM2
	quote.inversion = quote.tamanio * quote.costosXM2[0].costo;						// Precio Tamaño x Costo x M2
	quote.planPago = 0;																// Define plan de pago: 0 = Contado; 1 = PlanA; 2 = PlanB; 3 = PlanC
	quote.descuento = 0;															// Agrega descuento
	quote.inversionTotal = quote.inversion;
	quote.engancheActual = quote.inversion * quote.enganches[0].min;
	
	/* Variables Plan A */
	quote.credito = 0;
	quote.plazoA = 0;
	quote.mensualidad = 0;
	quote.creditoA = 0;
	quote.mensualidadA = 0;
	quote.engancheTotal = 0;														// 30% de enganche del costo del lote
	
	/* Variables Plan B */
	quote.creditoBNI = 0;
	quote.creditoB = 0;
	quote.plazoB = 0;
	quote.mensualidadB = 0;
	quote.interesTotalB = 0;

	/* Variables Plan B */
	quote.creditoCNI = 0;
	quote.creditoC = 0;
	quote.plazoC = 0;
	quote.mensualidadC = 0;
	quote.interesTotalC = 0;

	/* Variables output */
	quote.planPagoOutput = 'Contado';
	quote.hideOutputA = 'hide';
	quote.hideOutputB = 'hide';
	quote.hideOutputC = 'hide';
	quote.showHabittaType = 'hide';
	quote.hideOnHabitta = '';

	quote.precioXM23Anios = quote.costosXM2[0].costo * quote.plusvalia.valor3Anios;
	quote.valorInversion3Anios = quote.precioXM23Anios * quote.tamanio;
	quote.plusvalia3Anios = quote.valorInversion3Anios - quote.inversion;

	quote.valorInversion10Anios = quote.inversion * quote.plusvalia.valor10Anios;
	quote.precioXM210Anios = quote.valorInversion10Anios / quote.tamanio;
	quote.plusvalia10Anios = quote.valorInversion10Anios - quote.inversion;

	/* Variables Saldos Insolutos */

	quote.valorActual = 0;
	quote.cuotaFija = 0;
	quote.abonoExtra = 0;
	quote.abonoCapital = 0;
	quote.creditoFinal = 0;
	quote.n = 0;
	quote.plazoN = 0;
	quote.cotizacionSIRow = {};
	quote.cotizacionSI = [];
	quote.total = 0;
	quote.loteTipoHabitta = 0;

	quote.moment = new moment();
	quote.today = quote.moment.format('DD-MM-YYYY HH:mm');
	//var currentDate = quote.today;
	//quote.habittaFistPayment = quote.moment.add(2, 'M').format('DD-MM-YYYY');


	quote.saldosInsolutosA = function() {
		quote.total = 0;
		quote.totalPlazoA = 0;
		quote.totalPlazoB = 0;
		quote.totalPlazoC = 0;
		quote.inversionFinal = 0;
		quote.cotizacionSI = [];
		quote.cotizacionSIPlazoA = [];
		quote.cotizacionSIPlazoB = [];
		quote.cotizacionSIPlazoC = [];
		quote.moment = new moment();
		quote.valorActual = quote.credito;
		quote.cuotaFija = quote.valorActual / quote.plazo;
		quote.totalCuotaFijaPlazoA = quote.cuotaFija;
		quote.financiamientoPlazoA = quote.totalCuotaFijaPlazoA * quote.plazoN;
		var cf = 0;
		var i = 0;
		for (i = 0; i < quote.plazoN; i++) {
			cf = quote.valorActual - quote.cuotaFija;
			if (cf < 1) {cf = 0;}
			quote.totalPlazoA += quote.cuotaFija;
			quote.cotizacionSIRow = {periodo: (i+1), fecha: quote.moment.add(1, 'M').format('DD-MM-YYYY'), creditoi: quote.valorActual, cuotaf: quote.cuotaFija, abonoe: 0, pagado: quote.cuotaFija, interes: 0, abonoc: quote.cuotaFija, creditof: cf};
			quote.cotizacionSI.push(quote.cotizacionSIRow);
			quote.cotizacionSIPlazoA.push(quote.cotizacionSIRow);
			quote.valorActual = cf;
		}
	}

	quote.saldosInsolutosB = function() {
		quote.cuotaFija = (quote.planesPago[1].interes * quote.valorActual) / (1-Math.pow(1+quote.planesPago[1].interes,-quote.n));
		quote.totalCuotaFijaPlazoB = quote.cuotaFija;
		quote.financiamientoPlazoB = quote.totalCuotaFijaPlazoB * quote.plazoN;
		var cf = 0;
		var interes = 0;
		var i = 0;
		for (i = 0; i < quote.plazoN; i++) {
			interes = quote.valorActual * quote.planesPago[1].interes;
			quote.abonoCapital = quote.cuotaFija - interes;
			cf = quote.valorActual - quote.abonoCapital;
			if (cf < 1) {cf = 0;}
			quote.totalPlazoB += quote.abonoCapital;
			quote.cotizacionSIRow = {periodo: (quote.planesPago[0].plazoMax+i+1), fecha: quote.moment.add(1, 'M').format('DD-MM-YYYY'), creditoi: quote.valorActual, cuotaf: quote.cuotaFija, abonoe: 0, pagado: quote.cuotaFija, interes: interes, abonoc: quote.abonoCapital, creditof: cf};
			quote.cotizacionSI.push(quote.cotizacionSIRow);
			quote.cotizacionSIPlazoB.push(quote.cotizacionSIRow);
			quote.valorActual = cf;
		}
	}

	quote.saldosInsolutosC = function() {
		quote.cuotaFija = (quote.planesPago[2].interes*quote.valorActual)/(1-Math.pow(1+quote.planesPago[2].interes,-quote.n));
		quote.totalCuotaFijaPlazoC = quote.cuotaFija;
		quote.financiamientoPlazoC = quote.totalCuotaFijaPlazoC * quote.plazoN;
		var cf = 0;
		var interes = 0;
		var i = 0;
		for (i = 0; i < quote.plazoN; i++) {
			interes = quote.valorActual * quote.planesPago[2].interes;
			quote.abonoCapital = quote.cuotaFija - interes;
			cf = quote.valorActual - quote.abonoCapital;
			if (cf < 1) {cf = 0;}
			quote.totalPlazoC += quote.abonoCapital;
			quote.cotizacionSIRow = {periodo: (quote.planesPago[1].plazoMax+i+1), fecha: quote.moment.add(1, 'M').format('DD-MM-YYYY'), creditoi: quote.valorActual, cuotaf: quote.cuotaFija, abonoe: 0, pagado: quote.cuotaFija, interes: interes, abonoc: quote.abonoCapital, creditof: cf};
			quote.cotizacionSI.push(quote.cotizacionSIRow);
			quote.cotizacionSIPlazoC.push(quote.cotizacionSIRow);
			quote.valorActual = cf;
		}
	}

	quote.updateQuoteHooking = function() {
		if(quote.tamanio >= quote.costosXM2[0].tamanioMin && quote.tamanio <= quote.costosXM2[5].tamanioMax) {
			if(quote.plazo >= (quote.planesPago[0].plazoMin-1) && quote.plazo <= quote.planesPago[2].plazoMax) {
				quote.calcularInversion();
				quote.generarEnganche();
				quote.engancheActual = quote.inversion * quote.engancheMin;
				quote.calcularPlan();
				quote.definirPlanPago();
			}
		}
	}

	quote.updateQuote = function() {
		if(quote.tamanio >= quote.costosXM2[0].tamanioMin && quote.tamanio <= quote.costosXM2[5].tamanioMax) {
			if(quote.plazo >= (quote.planesPago[0].plazoMin-1) && quote.plazo <= quote.planesPago[2].plazoMax) {
				quote.calcularInversion();
				quote.generarEnganche();
				quote.calcularPlan();
				quote.definirPlanPago();
			}
		}
	}

	quote.calcularInversion = function() {
		var i = 0;
		if (quote.isLanzamiento) {
			while (i < quote.costosXM2.length) {
				if (quote.tamanio <= quote.costosXM2[i].tamanioMax) {
					quote.inversion = quote.tamanio * quote.costosXM2[i].lanzamiento;
					quote.indexCosto = i;
					break;
				}
				i++;
			}
			quote.precioSelected = quote.costosXM2[quote.indexCosto].lanzamiento;
		} else {
			while (i < quote.costosXM2.length) {
				if (quote.tamanio <= quote.costosXM2[i].tamanioMax) {
					quote.inversion = quote.tamanio * quote.costosXM2[i].costo;
					quote.indexCosto = i;
					break;
				}
				i++;
			}
			quote.precioSelected = quote.costosXM2[quote.indexCosto].costo;
		}
		quote.precioXM23Anios = quote.costosXM2[quote.indexCosto].costo * quote.plusvalia.valor3Anios;
		quote.valorInversion3Anios = quote.precioXM23Anios * quote.tamanio;
		quote.plusvalia3Anios = quote.valorInversion3Anios - quote.inversion;

		quote.valorInversion10Anios = quote.inversion * quote.plusvalia.valor10Anios;
		quote.precioXM210Anios = quote.valorInversion10Anios / quote.tamanio;
		quote.plusvalia10Anios = quote.valorInversion10Anios - quote.inversion;
	}

	quote.definirPlanPago = function() {
		if (quote.plazo < quote.planesPago[0].plazoMin) {
			quote.contado();
			quote.inversionFinal = quote.inversion;;
			quote.inversionTotal = quote.inversion;
		} else if (quote.plazo < quote.planesPago[1].plazoMin) {
			quote.generarPlanA();
			quote.inversionTotal = quote.inversion;
			quote.inversionFinal = quote.inversion;
			quote.total = quote.totalPlazoA;
		} else if(quote.plazo < quote.planesPago[2].plazoMin) {
			quote.generarPlanB();
			quote.inversionTotal = quote.engancheActual + quote.creditoA + quote.creditoB;
			quote.financiamientoFinal = quote.financiamientoPlazoA + quote.financiamientoPlazoB;
			quote.inversionFinal = quote.engancheActual + quote.financiamientoPlazoA + quote.financiamientoPlazoB;
			quote.interesFinal = quote.inversionFinal - quote.inversion;
			quote.total = quote.totalPlazoA + quote.totalPlazoB;
		} else {
			quote.generarPlanC();
			quote.inversionTotal = quote.engancheActual + quote.creditoA + quote.creditoB + quote.creditoC;
			quote.financiamientoFinal = quote.financiamientoPlazoA + quote.financiamientoPlazoB + quote.financiamientoPlazoC;
			quote.inversionFinal = quote.engancheActual + quote.financiamientoFinal;
			quote.interesFinal = quote.inversionFinal - quote.inversion;
			quote.total = quote.totalPlazoA + quote.totalPlazoB + quote.totalPlazoC;
		}
	}

	quote.contado = function() {
		quote.planPago = 0;
		quote.inversionTotal = quote.inversion;

		quote.displayPlanData('Contado', 'hide', 'hide', 'hide');
	}

	quote.generarPlanA = function() {
		quote.planPago = 1;
		
		quote.calcularPlanA(quote.plazo);

		quote.displayPlanData('Financiamiento, sin interés', '', 'hide', 'hide');
	}

	quote.generarPlanB = function() {
		quote.calcularPlanA(quote.planesPago[0].plazoMax);
		quote.calcularPlanB(quote.plazo);

		quote.planPago = 2;
		quote.displayPlanData('Financiamiento, con interés', '', '', 'hide');
	}

	quote.generarPlanC = function() {
		quote.plazoC = quote.plazo - quote.planesPago[1].plazoMax;
		quote.creditoCNI = quote.mensualidad * quote.plazoC;
		quote.interesTotalC = quote.creditoCNI * quote.planesPago[2].interes;
		quote.interesTotalC = quote.interesTotalC * quote.plazoC;
		quote.creditoC = quote.creditoCNI + quote.interesTotalC;
		quote.mensualidadC = quote.creditoC / quote.plazoC;

		quote.planPago = 3;
		quote.displayPlanData('Financiamiento, con intereses', '', '', '');
		quote.calcularPlanA(quote.planesPago[0].plazoMax);
		quote.calcularPlanB(quote.planesPago[1].plazoMax);

		quote.n = quote.n - quote.plazoN;
		quote.plazoN = quote.n;
		quote.saldosInsolutosC();
	}

	quote.calcularPlan = function() {
		//quote.engancheActual = quote.inversion * quote.enganche;
		quote.credito = quote.inversion - quote.engancheActual;
		quote.mensualidad = quote.credito / quote.plazo;
		quote.inversionTotal = quote.inversion;
		//quote.engancheTotalMin = quote.inversion * quote.engancheMin;
		//quote.engancheTotalMax = quote.inversion * quote.engancheMax;
	}

	quote.displayPlanData = function(display0, display1, display2, display3, display4) {
		quote.planPagoOutput = display0;
		quote.hideOutputA = display1;
		quote.hideOutputB = display2;
		quote.hideOutputC = display3;
	}

	quote.calcularPlanA = function(plazoTotalActual) {
		quote.plazoA = plazoTotalActual;
		quote.creditoA = quote.mensualidad * quote.plazoA;
		quote.mensualidadA = quote.creditoA / quote.plazoA;
		
		quote.n = quote.plazo;
		if (quote.n <= plazoTotalActual) {
			quote.plazoN = quote.plazo;
		} else {
			quote.plazoN = plazoTotalActual;
		}
		quote.saldosInsolutosA();
	}

	quote.calcularPlanB = function(plazoTotalActual) {
		quote.plazoB = plazoTotalActual - quote.planesPago[0].plazoMax;
		quote.creditoBNI = quote.mensualidad * quote.plazoB;
		quote.interesTotalB = quote.creditoBNI * quote.planesPago[1].interes;
		quote.interesTotalB = quote.interesTotalB * quote.plazoB;
		quote.creditoB = quote.creditoBNI + quote.interesTotalB;
		quote.mensualidadB = quote.creditoB / quote.plazoB;

		quote.n = quote.plazo - quote.plazoN;
		if (quote.n <= plazoTotalActual) {
			quote.plazoN = quote.n;
		} else {
			quote.plazoN = plazoTotalActual-quote.planesPago[0].plazoMax;
		}
		quote.saldosInsolutosB();
	}

	quote.sumAnio = function() { 	// Suma 12 meses al Plazo
		if (quote.plazo == 1) {		// Si esta en valor inicial iguala a 1 año
			quote.plazo = 12;
		} else {						// Sino Suma 1 año al Plazo
			quote.plazo += 12;
		}
	}

	quote.sum100M2 = function() { 	// Suma 100 M2 al Tamaño del terreno
		quote.tamanio += 100;
	}

	quote.defineInversion = function() {
		switch(quote.inversionType) {
			case 0:
				quote.costosXM2 = quote.costosXM2Naves;
				quote.planesPago = quote.planesPagoNaves;
				//quote.enganche = quote.engancheNaves;
				quote.engancheMin = quote.enganches[0].min;
				quote.engancheMax = quote.enganches[0].max;
				quote.plusvalia = quote.plusvaliaNaves;
				quote.showHabittaType = 'hide';
				quote.hideOnHabitta = '';
				quote.updateQuoteHooking();
				break;
			case 1:
				quote.costosXM2 = quote.costosXM2Lotes;
				quote.planesPago = quote.planesPagoLotes;
				//quote.enganche = quote.engancheLotes;
				quote.engancheMin = quote.enganches[1].min;
				quote.engancheMax = quote.enganches[1].max;
				quote.plusvalia = quote.plusvaliaLotes;
				quote.showHabittaType = 'hide';
				quote.hideOnHabitta = '';
				quote.updateQuoteHooking();
				break;
			case 2:
				quote.costosXM2 = quote.costosXM2LotesHabitta;
				quote.planesPago = quote.planesPagoLotesHabitta;
				quote.engancheMin = quote.enganches[1].min;
				quote.engancheMax = quote.enganches[1].max;
				quote.showHabittaType = '';
				quote.hideOnHabitta = 'hide';
				quote.updateQuoteHooking();
		}
	}

	quote.generarEnganche = function() {
		quote.engancheTotalMin = quote.inversion * quote.engancheMin;
		quote.engancheTotalMax = quote.inversion * quote.engancheMax;
	}

	quote.definePrecioLanzamiento = function() {
		quote.updateQuoteHooking();
	}

	quote.cambiarPreciosHabitta = function() {
		for (var key in quote.costosXM2LotesHabitta) {
			quote.costosXM2LotesHabitta[key].costo = quote.costosXTipoLotesHabitta[Object.keys(quote.costosXTipoLotesHabitta)[quote.loteTipoHabitta]];
			quote.costosXM2LotesHabitta[key].lanzamiento = quote.costosXM2LotesHabitta[key].costo;
		}
	}

	quote.defineTipoHabitta = function() {
		quote.cambiarPreciosHabitta();
		quote.inversionType = 2;
		quote.defineInversion();
	}

	quote.exportToExcel=function(tableId){ // ex: '#my-table'
        var exportHref=Excel.tableToExcel(tableId,'WireWorkbenchDataExport');
        $timeout(function(){location.href=exportHref;},100); // trigger download
    }

});

app.controller('QuoteToolController', function($scope, $location, $http, $timeout, moment, Excel) {

	var quote = this;

	quote.isLogged = function() {
		$http({
			method: 'POST',
		    url: 'application/models/auth/get_from_session.php',
		    headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' }
		}).then(function(response) {
			quote.logged = response.data;
			console.log('HTTP__STATUS_OK');
			if (quote.logged.error) {
				$location.path('/login');
			}
		}, function(response) {
			console.log('HTTP__STATUS_ERR');
		});
	}

	quote.isLogged();

	/********** Constantes **********/

	quote.costosXM2Naves = [ 														// Precios por M2
		{costo: 9500, lanzamiento: 8835, tamanioMin: 200, tamanioMax: 399}, 		// $9500.00 MXN Si 200 <= M2 <= 399
		{costo: 9200, lanzamiento: 8556, tamanioMin: 400, tamanioMax: 499}, 		// $9200.00 MXN Si 400 <= M2 <= 499
		{costo: 8900, lanzamiento: 8277, tamanioMin: 500, tamanioMax: 599}, 		// $8900.00 MXN Si 500 <= M2 <= 599
		{costo: 8600, lanzamiento: 7998, tamanioMin: 600, tamanioMax: 799}, 		// $8600.00 MXN Si 600 <= M2 <= 799
		{costo: 8300, lanzamiento: 7719, tamanioMin: 800, tamanioMax: 999}, 		// $8300.00 MXN Si 800 <= M2 <= 999
		{costo: 8000, lanzamiento: 7440, tamanioMin: 1000, tamanioMax: 1500} 		// $8000.00 MXN Si 1000 <= M2 <= 1500
	];
	
	quote.planesPagoNaves = [ 														// Planes de pago
		{interes: 0, plazoMin: 2, plazoMax: 36}, 									// Plan <= 3 años
		{interes: .02, plazoMin: 37, plazoMax: 120}, 								// 3 años < Plan <= 10 años
		{interes: .025, plazoMin: 121, plazoMax: 180}								// Plan > 10 años
	];

	quote.plusvaliaNaves = {
		valor3Anios: 1.17,
		valor10Anios: 2.11
	};
	
	quote.costosXM2Lotes = [
		{costo: 3300, lanzamiento: 3100, tamanioMin: 200, tamanioMax: 399},
		{costo: 3100, lanzamiento: 2900, tamanioMin: 400, tamanioMax: 499},
		{costo: 2900, lanzamiento: 2700, tamanioMin: 500, tamanioMax: 599},
		{costo: 2700, lanzamiento: 2500, tamanioMin: 600, tamanioMax: 799},
		{costo: 2500, lanzamiento: 2300, tamanioMin: 800, tamanioMax: 999},
		{costo: 2300, lanzamiento: 2000, tamanioMin: 1000, tamanioMax: 1500}
	];

	quote.planesPagoLotes = [
		{interes: 0, plazoMin: 2, plazoMax: 36},
		{interes: .015, plazoMin: 37, plazoMax: 120},
		{interes: .02, plazoMin: 121, plazoMax: 180}
	];

	quote.costosXTipoLotesHabitta = {
		estandar: 3000,
		plus: 3150,
		premium: 3300
	};

	quote.plusvaliaLotes = {
		valor3Anios: 1.17,
		valor10Anios: 1.85
	};

	quote.costosXM2LotesHabitta = [
		{costo: quote.costosXTipoLotesHabitta.estandar, lanzamiento: quote.costosXTipoLotesHabitta.estandar, tamanioMin: 100, tamanioMax: 399},
		{costo: quote.costosXTipoLotesHabitta.estandar, lanzamiento: quote.costosXTipoLotesHabitta.estandar, tamanioMin: 400, tamanioMax: 499},
		{costo: quote.costosXTipoLotesHabitta.estandar, lanzamiento: quote.costosXTipoLotesHabitta.estandar, tamanioMin: 500, tamanioMax: 599},
		{costo: quote.costosXTipoLotesHabitta.estandar, lanzamiento: quote.costosXTipoLotesHabitta.estandar, tamanioMin: 600, tamanioMax: 799},
		{costo: quote.costosXTipoLotesHabitta.estandar, lanzamiento: quote.costosXTipoLotesHabitta.estandar, tamanioMin: 800, tamanioMax: 999},
		{costo: quote.costosXTipoLotesHabitta.estandar, lanzamiento: quote.costosXTipoLotesHabitta.estandar, tamanioMin: 1000, tamanioMax: 1500}
	];

	quote.planesPagoLotesHabitta = [ 												// Planes de pago
		{interes: 0, plazoMin: 2, plazoMax: 48}, 									// Plan <= 3 años
		{interes: .01, plazoMin: 49, plazoMax: 120}, 								// 3 años < Plan <= 10 años
		{interes: .0125, plazoMin: 121, plazoMax: 180}								// Plan > 10 años
	];

	quote.enganches = [
		{min: .3, max: .9},
		{min: .1, max: .9}
	];

	quote.inversionType = 0;

	/********** Variables de entrada **********/
	quote.tamanio = 200;															// 200 M2 es el tamaño mínimo que se puede comprar
	quote.plazo = 1; 																// Mensualidades 1=Contado

	quote.costosXM2 = quote.costosXM2Naves;
	quote.planesPago = quote.planesPagoNaves;
	quote.enganche = quote.engancheNaves;
	quote.plusvalia = quote.plusvaliaNaves;

	quote.engancheMin = quote.enganches[0].min;
	quote.engancheMax = quote.enganches[0].max;
	quote.engancheTotalMin = 0;
	quote.engancheTotalMax = 0;
	quote.engancheActual = 0;

	quote.isLanzamiento = false;
	quote.precioSelected = quote.costosXM2[0].costo;

	/********** Variables **********/
	quote.indexCosto = 0;															// Guarda index para costosXM2
	quote.inversion = quote.tamanio * quote.costosXM2[0].costo;						// Precio Tamaño x Costo x M2
	quote.planPago = 0;																// Define plan de pago: 0 = Contado; 1 = PlanA; 2 = PlanB; 3 = PlanC
	quote.descuento = 0;															// Agrega descuento
	quote.inversionTotal = quote.inversion;
	quote.engancheActual = quote.inversion * quote.enganches[0].min;
	
	/* Variables Plan A */
	quote.credito = 0;
	quote.plazoA = 0;
	quote.mensualidad = 0;
	quote.creditoA = 0;
	quote.mensualidadA = 0;
	quote.engancheTotal = 0;														// 30% de enganche del costo del lote
	
	/* Variables Plan B */
	quote.creditoBNI = 0;
	quote.creditoB = 0;
	quote.plazoB = 0;
	quote.mensualidadB = 0;
	quote.interesTotalB = 0;

	/* Variables Plan B */
	quote.creditoCNI = 0;
	quote.creditoC = 0;
	quote.plazoC = 0;
	quote.mensualidadC = 0;
	quote.interesTotalC = 0;

	/* Variables output */
	quote.planPagoOutput = 'Contado';
	quote.hideOutputA = 'hide';
	quote.hideOutputB = 'hide';
	quote.hideOutputC = 'hide';
	quote.showHabittaType = 'hide';
	quote.hideOnHabitta = '';

	quote.precioXM23Anios = quote.costosXM2[0].costo * quote.plusvalia.valor3Anios;
	quote.valorInversion3Anios = quote.precioXM23Anios * quote.tamanio;
	quote.plusvalia3Anios = quote.valorInversion3Anios - quote.inversion;

	quote.valorInversion10Anios = quote.inversion * quote.plusvalia.valor10Anios;
	quote.precioXM210Anios = quote.valorInversion10Anios / quote.tamanio;
	quote.plusvalia10Anios = quote.valorInversion10Anios - quote.inversion;

	/* Variables Saldos Insolutos */

	quote.valorActual = 0;
	quote.cuotaFija = 0;
	quote.abonoExtra = 0;
	quote.abonoCapital = 0;
	quote.creditoFinal = 0;
	quote.n = 0;
	quote.plazoN = 0;
	quote.cotizacionSIRow = {};
	quote.cotizacionSI = [];
	quote.total = 0;
	quote.loteTipoHabitta = 0;

	quote.moment = new moment();
	quote.today = quote.moment.format('DD-MM-YYYY HH:mm');
	//var currentDate = quote.today;
	//quote.habittaFistPayment = quote.moment.add(2, 'M').format('DD-MM-YYYY');


	quote.saldosInsolutosA = function() {
		quote.total = 0;
		quote.totalPlazoA = 0;
		quote.totalPlazoB = 0;
		quote.totalPlazoC = 0;
		quote.inversionFinal = 0;
		quote.cotizacionSI = [];
		quote.cotizacionSIPlazoA = [];
		quote.cotizacionSIPlazoB = [];
		quote.cotizacionSIPlazoC = [];
		quote.moment = new moment();
		quote.valorActual = quote.credito;
		quote.cuotaFija = quote.valorActual / quote.plazo;
		quote.totalCuotaFijaPlazoA = quote.cuotaFija;
		quote.financiamientoPlazoA = quote.totalCuotaFijaPlazoA * quote.plazoN;
		var cf = 0;
		var i = 0;
		for (i = 0; i < quote.plazoN; i++) {
			cf = quote.valorActual - quote.cuotaFija;
			if (cf < 1) {cf = 0;}
			quote.totalPlazoA += quote.cuotaFija;
			quote.cotizacionSIRow = {periodo: (i+1), fecha: quote.moment.add(1, 'M').format('DD-MM-YYYY'), creditoi: quote.valorActual, cuotaf: quote.cuotaFija, abonoe: 0, pagado: quote.cuotaFija, interes: 0, abonoc: quote.cuotaFija, creditof: cf};
			quote.cotizacionSI.push(quote.cotizacionSIRow);
			quote.cotizacionSIPlazoA.push(quote.cotizacionSIRow);
			quote.valorActual = cf;
		}
	}

	quote.saldosInsolutosB = function() {
		quote.cuotaFija = (quote.planesPago[1].interes * quote.valorActual) / (1-Math.pow(1+quote.planesPago[1].interes,-quote.n));
		quote.totalCuotaFijaPlazoB = quote.cuotaFija;
		quote.financiamientoPlazoB = quote.totalCuotaFijaPlazoB * quote.plazoN;
		var cf = 0;
		var interes = 0;
		var i = 0;
		for (i = 0; i < quote.plazoN; i++) {
			interes = quote.valorActual * quote.planesPago[1].interes;
			quote.abonoCapital = quote.cuotaFija - interes;
			cf = quote.valorActual - quote.abonoCapital;
			if (cf < 1) {cf = 0;}
			quote.totalPlazoB += quote.abonoCapital;
			quote.cotizacionSIRow = {periodo: (quote.planesPago[0].plazoMax+i+1), fecha: quote.moment.add(1, 'M').format('DD-MM-YYYY'), creditoi: quote.valorActual, cuotaf: quote.cuotaFija, abonoe: 0, pagado: quote.cuotaFija, interes: interes, abonoc: quote.abonoCapital, creditof: cf};
			quote.cotizacionSI.push(quote.cotizacionSIRow);
			quote.cotizacionSIPlazoB.push(quote.cotizacionSIRow);
			quote.valorActual = cf;
		}
	}

	quote.saldosInsolutosC = function() {
		quote.cuotaFija = (quote.planesPago[2].interes*quote.valorActual)/(1-Math.pow(1+quote.planesPago[2].interes,-quote.n));
		quote.totalCuotaFijaPlazoC = quote.cuotaFija;
		quote.financiamientoPlazoC = quote.totalCuotaFijaPlazoC * quote.plazoN;
		var cf = 0;
		var interes = 0;
		var i = 0;
		for (i = 0; i < quote.plazoN; i++) {
			interes = quote.valorActual * quote.planesPago[2].interes;
			quote.abonoCapital = quote.cuotaFija - interes;
			cf = quote.valorActual - quote.abonoCapital;
			if (cf < 1) {cf = 0;}
			quote.totalPlazoC += quote.abonoCapital;
			quote.cotizacionSIRow = {periodo: (quote.planesPago[1].plazoMax+i+1), fecha: quote.moment.add(1, 'M').format('DD-MM-YYYY'), creditoi: quote.valorActual, cuotaf: quote.cuotaFija, abonoe: 0, pagado: quote.cuotaFija, interes: interes, abonoc: quote.abonoCapital, creditof: cf};
			quote.cotizacionSI.push(quote.cotizacionSIRow);
			quote.cotizacionSIPlazoC.push(quote.cotizacionSIRow);
			quote.valorActual = cf;
		}
	}

	quote.updateQuoteHooking = function() {
		if(quote.tamanio >= quote.costosXM2[0].tamanioMin && quote.tamanio <= quote.costosXM2[5].tamanioMax) {
			if(quote.plazo >= (quote.planesPago[0].plazoMin-1) && quote.plazo <= quote.planesPago[2].plazoMax) {
				quote.calcularInversion();
				quote.generarEnganche();
				quote.engancheActual = quote.inversion * quote.engancheMin;
				quote.calcularPlan();
				quote.definirPlanPago();
			}
		}
	}

	quote.updateQuote = function() {
		if(quote.tamanio >= quote.costosXM2[0].tamanioMin && quote.tamanio <= quote.costosXM2[5].tamanioMax) {
			if(quote.plazo >= (quote.planesPago[0].plazoMin-1) && quote.plazo <= quote.planesPago[2].plazoMax) {
				quote.calcularInversion();
				quote.generarEnganche();
				quote.calcularPlan();
				quote.definirPlanPago();
			}
		}
	}

	quote.calcularInversion = function() {
		var i = 0;
		if (quote.isLanzamiento) {
			while (i < quote.costosXM2.length) {
				if (quote.tamanio <= quote.costosXM2[i].tamanioMax) {
					quote.inversion = quote.tamanio * quote.costosXM2[i].lanzamiento;
					quote.indexCosto = i;
					break;
				}
				i++;
			}
			quote.precioSelected = quote.costosXM2[quote.indexCosto].lanzamiento;
		} else {
			while (i < quote.costosXM2.length) {
				if (quote.tamanio <= quote.costosXM2[i].tamanioMax) {
					quote.inversion = quote.tamanio * quote.costosXM2[i].costo;
					quote.indexCosto = i;
					break;
				}
				i++;
			}
			quote.precioSelected = quote.costosXM2[quote.indexCosto].costo;
		}
		quote.precioXM23Anios = quote.costosXM2[quote.indexCosto].costo * quote.plusvalia.valor3Anios;
		quote.valorInversion3Anios = quote.precioXM23Anios * quote.tamanio;
		quote.plusvalia3Anios = quote.valorInversion3Anios - quote.inversion;

		quote.valorInversion10Anios = quote.inversion * quote.plusvalia.valor10Anios;
		quote.precioXM210Anios = quote.valorInversion10Anios / quote.tamanio;
		quote.plusvalia10Anios = quote.valorInversion10Anios - quote.inversion;
	}

	quote.definirPlanPago = function() {
		if (quote.plazo < quote.planesPago[0].plazoMin) {
			quote.contado();
			quote.inversionFinal = quote.inversion;;
			quote.inversionTotal = quote.inversion;
		} else if (quote.plazo < quote.planesPago[1].plazoMin) {
			quote.generarPlanA();
			quote.inversionTotal = quote.inversion;
			quote.inversionFinal = quote.inversion;
			quote.total = quote.totalPlazoA;
		} else if(quote.plazo < quote.planesPago[2].plazoMin) {
			quote.generarPlanB();
			quote.inversionTotal = quote.engancheActual + quote.creditoA + quote.creditoB;
			quote.financiamientoFinal = quote.financiamientoPlazoA + quote.financiamientoPlazoB;
			quote.inversionFinal = quote.engancheActual + quote.financiamientoPlazoA + quote.financiamientoPlazoB;
			quote.interesFinal = quote.inversionFinal - quote.inversion;
			quote.total = quote.totalPlazoA + quote.totalPlazoB;
		} else {
			quote.generarPlanC();
			quote.inversionTotal = quote.engancheActual + quote.creditoA + quote.creditoB + quote.creditoC;
			quote.financiamientoFinal = quote.financiamientoPlazoA + quote.financiamientoPlazoB + quote.financiamientoPlazoC;
			quote.inversionFinal = quote.engancheActual + quote.financiamientoFinal;
			quote.interesFinal = quote.inversionFinal - quote.inversion;
			quote.total = quote.totalPlazoA + quote.totalPlazoB + quote.totalPlazoC;
		}
	}

	quote.contado = function() {
		quote.planPago = 0;
		quote.inversionTotal = quote.inversion;

		quote.displayPlanData('Contado', 'hide', 'hide', 'hide');
	}

	quote.generarPlanA = function() {
		quote.planPago = 1;
		
		quote.calcularPlanA(quote.plazo);

		quote.displayPlanData('Financiamiento, sin interés', '', 'hide', 'hide');
	}

	quote.generarPlanB = function() {
		quote.calcularPlanA(quote.planesPago[0].plazoMax);
		quote.calcularPlanB(quote.plazo);

		quote.planPago = 2;
		quote.displayPlanData('Financiamiento, con interés', '', '', 'hide');
	}

	quote.generarPlanC = function() {
		quote.plazoC = quote.plazo - quote.planesPago[1].plazoMax;
		quote.creditoCNI = quote.mensualidad * quote.plazoC;
		quote.interesTotalC = quote.creditoCNI * quote.planesPago[2].interes;
		quote.interesTotalC = quote.interesTotalC * quote.plazoC;
		quote.creditoC = quote.creditoCNI + quote.interesTotalC;
		quote.mensualidadC = quote.creditoC / quote.plazoC;

		quote.planPago = 3;
		quote.displayPlanData('Financiamiento, con intereses', '', '', '');
		quote.calcularPlanA(quote.planesPago[0].plazoMax);
		quote.calcularPlanB(quote.planesPago[1].plazoMax);

		quote.n = quote.n - quote.plazoN;
		quote.plazoN = quote.n;
		quote.saldosInsolutosC();
	}

	quote.calcularPlan = function() {
		//quote.engancheActual = quote.inversion * quote.enganche;
		quote.credito = quote.inversion - quote.engancheActual;
		quote.mensualidad = quote.credito / quote.plazo;
		quote.inversionTotal = quote.inversion;
		//quote.engancheTotalMin = quote.inversion * quote.engancheMin;
		//quote.engancheTotalMax = quote.inversion * quote.engancheMax;
	}

	quote.displayPlanData = function(display0, display1, display2, display3, display4) {
		quote.planPagoOutput = display0;
		quote.hideOutputA = display1;
		quote.hideOutputB = display2;
		quote.hideOutputC = display3;
	}

	quote.calcularPlanA = function(plazoTotalActual) {
		quote.plazoA = plazoTotalActual;
		quote.creditoA = quote.mensualidad * quote.plazoA;
		quote.mensualidadA = quote.creditoA / quote.plazoA;
		
		quote.n = quote.plazo;
		if (quote.n <= plazoTotalActual) {
			quote.plazoN = quote.plazo;
		} else {
			quote.plazoN = plazoTotalActual;
		}
		quote.saldosInsolutosA();
	}

	quote.calcularPlanB = function(plazoTotalActual) {
		quote.plazoB = plazoTotalActual - quote.planesPago[0].plazoMax;
		quote.creditoBNI = quote.mensualidad * quote.plazoB;
		quote.interesTotalB = quote.creditoBNI * quote.planesPago[1].interes;
		quote.interesTotalB = quote.interesTotalB * quote.plazoB;
		quote.creditoB = quote.creditoBNI + quote.interesTotalB;
		quote.mensualidadB = quote.creditoB / quote.plazoB;

		quote.n = quote.plazo - quote.plazoN;
		if (quote.n <= plazoTotalActual) {
			quote.plazoN = quote.n;
		} else {
			quote.plazoN = plazoTotalActual-quote.planesPago[0].plazoMax;
		}
		quote.saldosInsolutosB();
	}

	quote.sumAnio = function() { 	// Suma 12 meses al Plazo
		if (quote.plazo == 1) {		// Si esta en valor inicial iguala a 1 año
			quote.plazo = 12;
		} else {						// Sino Suma 1 año al Plazo
			quote.plazo += 12;
		}
	}

	quote.sum100M2 = function() { 	// Suma 100 M2 al Tamaño del terreno
		quote.tamanio += 100;
	}

	quote.defineInversion = function() {
		switch(quote.inversionType) {
			case 0:
				quote.costosXM2 = quote.costosXM2Naves;
				quote.planesPago = quote.planesPagoNaves;
				//quote.enganche = quote.engancheNaves;
				quote.engancheMin = quote.enganches[0].min;
				quote.engancheMax = quote.enganches[0].max;
				quote.plusvalia = quote.plusvaliaNaves;
				quote.showHabittaType = 'hide';
				quote.hideOnHabitta = '';
				quote.updateQuoteHooking();
				break;
			case 1:
				quote.costosXM2 = quote.costosXM2Lotes;
				quote.planesPago = quote.planesPagoLotes;
				//quote.enganche = quote.engancheLotes;
				quote.engancheMin = quote.enganches[1].min;
				quote.engancheMax = quote.enganches[1].max;
				quote.plusvalia = quote.plusvaliaLotes;
				quote.showHabittaType = 'hide';
				quote.hideOnHabitta = '';
				quote.updateQuoteHooking();
				break;
			case 2:
				quote.costosXM2 = quote.costosXM2LotesHabitta;
				quote.planesPago = quote.planesPagoLotesHabitta;
				quote.engancheMin = quote.enganches[1].min;
				quote.engancheMax = quote.enganches[1].max;
				quote.showHabittaType = '';
				quote.hideOnHabitta = 'hide';
				quote.updateQuoteHooking();
		}
	}

	quote.generarEnganche = function() {
		quote.engancheTotalMin = quote.inversion * quote.engancheMin;
		quote.engancheTotalMax = quote.inversion * quote.engancheMax;
	}

	quote.definePrecioLanzamiento = function() {
		quote.updateQuoteHooking();
	}

	quote.cambiarPreciosHabitta = function() {
		for (var key in quote.costosXM2LotesHabitta) {
			quote.costosXM2LotesHabitta[key].costo = quote.costosXTipoLotesHabitta[Object.keys(quote.costosXTipoLotesHabitta)[quote.loteTipoHabitta]];
			quote.costosXM2LotesHabitta[key].lanzamiento = quote.costosXM2LotesHabitta[key].costo;
		}
	}

	quote.defineTipoHabitta = function() {
		quote.cambiarPreciosHabitta();
		quote.inversionType = 2;
		quote.defineInversion();
	}

	quote.exportToExcel=function(tableId){ // ex: '#my-table'
        var exportHref=Excel.tableToExcel(tableId,'WireWorkbenchDataExport');
        $timeout(function(){location.href=exportHref;},100); // trigger download
    }

});

app.controller('LoginController', function($scope, $http, $location) {

	var login = this;
	var authResponse = 0;

	var resetLoginData = function() {
		login.user = '';
	    login.password = '';
	}

	login.submitLogin = function() {
		$http({
			method: 'POST',
		    url: 'application/controllers/auth_controller.php',
		    data: {
		        username: login.user, 
		        password: login.password
		    },
		    headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' }
		}).then(function(response) {
			authResponse = response.data;
			resetLoginData();
			console.log('HTTP_SEND_LOGIN_OK');
			if (authResponse.status) {
				$location.path('/dashboard');
			} else {
				M.toast({html: 'Usuario o contraseña incorrectos'});
			}
		}, function(response) {
			resetLoginData();
			console.log('HTTP_SEND_LOGIN_ERR');
		});
	}
});

app.controller('mainController', function($scope, $http) {
	var main = this;

	main.sendEmail = function() {
		$http({
			method: 'POST',
		    url: 'application/controllers/mail_sender_controller.php',
		    data: {
		    	name: main.name,
		    	email: main.email,
		    	phone: main.phone,
		    	message: main.message
		    },
		    headers: { 'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8' }
		}).then(function(response) {
			main.request = response.data;
			if (!main.request.error) {
				main.name = '';
		    	main.email = '';
		    	main.phone = '';
		    	main.message = '';
		    	({html: 'Tu mensaje ha sido enviado! Muy pronto nos estaremos comunicando contigo'});
			} else {
				M.toast({html: 'Algo salio mal, vuelve a intentarlo en unos momentos'});
			}
			console.log('HTTP_SEND_EMAIL_STATUS_OK');
		}, function(response) {
			console.log('HTTP_SEND_EMAIL_STATUS_ERR');
		});
	}
});

app.controller('sideNavCtrl', function ($scope, $timeout, $mdSidenav, $log, $location) {

	$scope.toggleLeft = buildDelayedToggler('left');
	$scope.isOpenRight = function() {
		return $mdSidenav('left').isOpen();
	};

	/**
	* Supplies a function that will continue to operate until the
	* time is up.
	*/
	function debounce(func, wait, context) {
		var timer;

		return function debounced() {
			var context = $scope,
			args = Array.prototype.slice.call(arguments);
			$timeout.cancel(timer);
			timer = $timeout(function() {
				timer = undefined;
				func.apply(context, args);
			}, wait || 10);
		};
	}

	/**
	* Build handler to open/close a SideNav; when animation finishes
	* report completion in console
	*/
	function buildDelayedToggler(navID) {
		return debounce(function() {
			// Component lookup should always be available since we are not using `ng-if`
			$mdSidenav(navID).toggle().then(function () {
				$log.debug("toggle " + navID + " is done");
			});
		}, 200);
	}

	function buildToggler(navID) {
		return function() {
			// Component lookup should always be available since we are not using `ng-if`
			$mdSidenav(navID).toggle().then(function () {
				$log.debug("toggle " + navID + " is done");
			});
		};
	}

	$scope.toQuote = function () {
		$location.path('/cotizador');
	}
});

app.controller('SideNavCloseCtrl', function ($scope, $timeout, $mdSidenav, $log) {
	$scope.close = function () {
		// Component lookup should always be available since we are not using `ng-if`
		$mdSidenav('left').close() ;
	}
});
