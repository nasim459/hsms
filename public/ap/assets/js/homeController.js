
var app= angular.module('adminapp', []);

app.controller('serviceBill', function($scope, $http) {
    
    //-----rental_running_service_bill_view
    $scope.serviceBillView = function(rental_id) {
        $http.get('/hsms/public/service-bill-show/'+rental_id).then(function(response) {
          $scope.data = response.data;
        });
    };
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
    
    //-----rental_bill_create
    $scope.service_create = function(rental_id) {
//        $http.get('/hsms/public/service-bill-show/'+rental_id).then(function(response) {
//          $scope.data = response.data;
//        });
        $scope.service = {electrity:rental_id, drink:5300, internet:5400};
    };
    


    //-----rental_bill_invoice_view
    $scope.bill_invoice_view = function() {
    //        $http.get('phones/phones.json').then(function(response) {
    //            self.phones = response.data;
    //        });
          $scope.invoice = {electrity:7700, drink:5300, internet:5400, dish:400};
    };



});



app.controller('people', function($scope, $http) {
    
    //-----rental_status_change
    $scope.rentalStatus = function(rental_id, off) {
        $http.get('/hsms/public/info-rental-status/'+rental_id+'/'+off).then(function(response) {
          $scope.data = response.data;
        });
    };
    
    
});


