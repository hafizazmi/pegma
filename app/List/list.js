(function(){
    'use strict';

    angular
        .module('StoreEval.List',[])
        .controller('listCtrl',listCtrl)
        .controller('storeCtrl',storeCtrl)

    function listCtrl(Store){
        var list = this;
        list.stores = Store.query()
    }

    function storeCtrl(Store, $stateParams){
        var store = this;
        store.data = Store.get({store_id:$stateParams.store_id})
    }

})();

