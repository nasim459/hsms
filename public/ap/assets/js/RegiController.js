


app.controller('RegiController', function($scope, $http) {
    
    //-----search tbl_rental
//    $scope.serviceBillView = function(rental_id) {
//        $http.get('/hsms/public/service-bill-show/'+rental_id).then(function(response) {
//          $scope.data = response.data;
//        });
//    };
    //-----rental_search
    $scope.showData = function() {
        $http.get('/hsms/public/info-rental-search').then(function(response) {
          $scope.search_show = response.data;
        });
    }
    $scope.showData();
    
    //-----show_visitor_people
    $scope.showVisitor = function() {
        $http.get('/hsms/public/info-visiting-show').then(function(response) {
          $scope.visitor_show = response.data;
        });
    }
    $scope.showVisitor();
    
    //-----show_guest_people
    $scope.showGuest = function() {
        $http.get('/hsms/public/info-guest-show').then(function(response) {
          $scope.guest_show = response.data;
        });
    }
    $scope.showGuest();
    
    //-----addVisitor
    $scope.regiVisitor = function() {
        console.log('text me');
        $http.post("/hsms/public/regi-visitor-save", {'v_id':$scope.v_id})
        .then(function(response) {
          $scope.msg = 'Success!';
        });
//        .success(function(){
//                    $scope.msg = 'Success!';
//                });
    }
    

});


