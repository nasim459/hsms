
var app= angular.module('adminapp', []);

app.controller('serviceBill', function($scope, $http) {
    
    //-----rental_running_service_bill_view
    $scope.serviceBillView = function(rental_id) {
        $http.get('/hsms/public/service-bill-show/'+rental_id).then(function(response) {
          $scope.data = response.data;
        });
    };
    
    //-----rental_running_service_bill_view
    $scope.service_bill_invoice_view = function(rental_id) {
        $http.get('/hsms/public/service-bill-invoice-view/'+rental_id).then(function(response) {
          $scope.invoice_view = response.data;
        });
    };
    
    //-----rental_running_service_bill_due
    $scope.service_bill_invoice_due = function(rental_id) {
        $http.get('/hsms/public/service-bill-invoice-due/'+rental_id).then(function(response) {
          $scope.invoice_due = response.data;
        });
    };
    
    //-----add_rental_service
    $scope.add_rental_service = function(rental_id) {
        $http.get('/hsms/public/view-rental-service/'+rental_id).then(function(response) {
          $scope.add_service = response.data;
        });
        $scope.id = {rntl:rental_id};
    };
    
    //-----running_rental_service
    $scope.running_rental_service = function(rental_id) {
        $http.get('/hsms/public/running-rental-service/'+rental_id).then(function(response) {
          $scope.running_service = response.data;
        });
        $scope.id = {rntl:rental_id};
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
//    $scope.data;
//    $scope.rentalStatus = function(rental_id, off) {
//        if(off==1){
//            off=0;
//        }else{
//            off=1;
//        }
//        $http.get('/hsms/public/info-rental-status/'+rental_id+'/'+off).then(function(response) {
//          $scope.data.status[rental_id]=off;
//        });
//    };
    
    
    //-----info_rental_show
    $scope.info_rental_show = function() {
        $http.get('/hsms/public/info-rental-show').then(function(response) {
          $scope.rental_show = response.data;
        });
    };
    $scope.info_rental_show();
    
    //-----rental_status_change
    $scope.rental_status = function(rental_id) {
        $http.get('/hsms/public/info-rental-status/'+rental_id).then(function(response) {
          $scope.rntl_status_change = response.data;
        });
    };
    
    //-----show_visitor_people
//    $scope.showVisitor = function() {
//        $http.get('/hsms/public/info-visiting-show').then(function(response) {
//          $scope.visitor_show = response.data;
//        });
//    }
//    $scope.showVisitor();
    
    
    
    
 
    //-----rental_picture_show
    $scope.rental_picture_show = function(rental_id_pic) {
        $http.get('/hsms/public/info-rental-pic/'+rental_id_pic).then(function(response) {
          $scope.data = response.data;
        });
    };
    
    //-----rental_running_service_bill_view
    $scope.info_rental_warning = function(rental_id) {
        $http.get('/hsms/public/info-rental-warning/'+rental_id).then(function(response) {
          $scope.rental_warning = response.data;
        });
    };

    
});


