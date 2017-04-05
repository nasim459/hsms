


app.controller('NoticeController', function($scope, $http) {
    
    //-----rental_running_service_bill_view
    $scope.edit_broadcasting_notice = function(notice_id) {
        $http.get('/hsms/public/broadcasting-notice-edit/'+notice_id).then(function(response) {
          $scope.edit_notice = response.data;
        });
    };
    
});