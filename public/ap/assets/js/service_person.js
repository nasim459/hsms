

app.controller('servicePerson', function($scope, $http) {
    
    
    //-----rental_running_service_bill_view
    $scope.service_type_update = function(service_id) {
        $http.get('/hsms/public/service-type-show/'+service_id).then(function(response) {
          $scope.data = response.data;
        });
    };
    
    //-----service_person_picture_show
    $scope.service_person_pic_show = function(service_person_id) {
        $http.get('/hsms/public/service-person-pic-show/'+service_person_id).then(function(response) {
          $scope.data = response.data;
        });
    };
    
    
});