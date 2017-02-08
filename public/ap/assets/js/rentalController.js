


app.controller('rentalController', function($scope, $http) {
    
    //-----rental_running_service_bill_view
    $scope.invoice_item = function(invoice_id) {
        $http.get('/hsms/public/info-rental-invoice/'+invoice_id).then(function(response) {
          $scope.invoice_rental = response.data;
        });
    };
    
    
});