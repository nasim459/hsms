


app.controller('noticeBoard', function($scope, $http) {
    
    //-----add_notice_of_broadCasting
    $scope.add_notice = function() {
        $http.post("broadcasting-notice-save", {'title':$scope.title, 'description':$scope.description, 'status':$scope.status})
        .success(function(){
                    $scope.msg = 'Success!';
                });
    }
    
});
