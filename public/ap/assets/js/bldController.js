


//app.controller('bldController', function($scope, $http) {
//    
//    //-----add_notice_of_broadCasting
//    $scope.bld_save = function() {
//        $http.post("bld-save", {'building':$scope.building, 'floor':$scope.floor, 'unit':$scope.unit})
//        .success(function(){
//                    $scope.msg = 'Success!';
//                });
//    }
//    
//});


app.controller('bldController', function($scope, $http) {
    
    //-----rental_status_change
    $scope.data;
    $scope.rentalStatus = function(rental_id, off) {
        if(off==1){
            off=0;
        }else{
            off=1;
        }
        $http.get('/hsms/public/info-rental-status/'+rental_id+'/'+off).then(function(response) {
          //$scope.data = response.data;
          $scope.data.status[rental_id]=off;
        });
    };
    
});