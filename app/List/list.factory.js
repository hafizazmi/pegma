(function(){
    'use strict';

    angular
        .module('StoreEval.List')
        .factory('Store',Store)

    function Store($resource){
        return $resource('http://localhost/pegma/api/stores/:store_id', {store_id: '@store_id'})

    }

})();