


app.controller('InventoryController', function($scope, $http) {
    
    //-----show_ataglance_inventory
    $scope.show_ataglance_inventory = function() {
        $http.get('/hsms/public/inventory-ataglance-show').then(function(response) {
          $scope.rental_show = response.data;
        });
    };
    $scope.show_ataglance_inventory();
    
    
    //-----calcutate_sum__
    $scope.sum = function(data) {
         var number =0;
         angular.forEach(data, function(value, key) {
             if(value.amount){
                 number=number+value.amount;
             }
          });
          return number;
    };
    
    
    
});