


app.controller('HousekeeptingController', function($scope, $http) {
    
    //-----info_housekeeping_show
    $scope.show_housekeeping = function() {
        $http.get('/hsms/public/info-housekeeping-show').then(function(response) {
          $scope.housekeeping_show = response.data;
        });
    };
    $scope.show_housekeeping();


    
});