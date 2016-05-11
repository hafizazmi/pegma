/**
 * Created by hafiz on 9/5/2016.
 */
(function(){
    'use strict';

    angular
        .module('StoreEval',[
            //library
            'ngResource',
            'ui.router',
            'angular-input-stars',

            //module
            'StoreEval.List'
        ])
        .config(Routes)



    function Routes($stateProvider, $urlRouterProvider){
        $stateProvider
            .state('list', {
                url:'/list',
                templateUrl: 'List/list.html',
                controller: 'listCtrl',
                controllerAs: 'list'
            })
            .state('storeDetail', {
                url:'/store/:store_id',
                templateUrl: 'List/store.html',
                controller: 'storeCtrl',
                controllerAs: 'store'
            });
        $urlRouterProvider.otherwise('/list')
    }

})();