


app.controller('noticeBoard', function($scope, $http) {
    
    //-----add_notice_of_broadCasting
    $scope.add_notice = function() {
        $http.post("broadcasting-notice-save", {'title':$scope.title, 'description':$scope.description, 'status':$scope.status,})
                .success(function(data,status,headers,config){
                    console.log("Data Inserted Successfully!");
                });
    }
    
});
