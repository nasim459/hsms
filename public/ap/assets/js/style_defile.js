
var apphost = angular.module("apphostBd", []);

apphost.controller("apphostController", function($scope) {
    $scope.all_collection = [{name: 'nasim', age: '18', city: 'Dhaka'}];

    $scope.addEntry = function() {
        $scope.all_collection.push($scope.newData);
        $scope.newData = "";
    };

});