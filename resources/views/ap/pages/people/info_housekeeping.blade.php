@section('people_content')
<!-- begin section-container -->
<div class="section-container" ng-controller="HousekeeptingController">
    <!--start_row-->
    <div class="row">
        <!--start_col-md-12-->
        <div class="col-md-12">
            <!--start panel panel-white-->
            <div class="panel panel-white">
                
                <div class="panel-heading">
                    <div class="col-md-3 m-b-15">
                        <input class="form-control text-center" type="text" ng-model="search_housekeeping" id="fullname" placeholder=" Search here..." data-parsley-required="true" />
                    </div>
                    <div class="col-md-4 col-md-offset-3"></div>
                    <div class="col-md-2">
                        <a href="{{URL::to('regi-rental')}}" class="btn btn-default btn-sm m-t-5" title="Registrationi Renal People"><i class="fa fa-plus text-success-light"> </i>&nbsp; Housekeeping</a>
                    </div>
                </div>
                
                <table class="table table-hover table-scroll" style="border-bottom:1px solid #EBECED !important;">
                    <thead>
                        <tr class="success">
                            <th><b>Picture</b></th>
                            <th><b>Housekeeping Name</b></th>
                            <th><b>Mobile Number</b></th>
                            <th><b>Gender</b></th>
                            <th><b>Location</b></th>
                            <th><b>Owner Name</b></th>
                            <th><b>Action</b></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr ng-repeat="v in housekeeping_show | filter:search_housekeeping">
                            <td>
                                <a ng-if="v.housekeeping_image != NULL" href="#rental-picture-show" data-toggle="modal" ng-click="rental_picture_show(v.housekeeping_id)" title="Click To See Picture"><img src="@{{v.housekeeping_image}}" class="img-h-w" alt="" /></a>
                                <img ng-if="v.housekeeping_image == NULL" src="ap/assets/img_blank/img_blank.jpg" title="Blank Picture. Please, Give Your Picture" class="img-h-w" alt="" />
                            </td>
                            <td><b>@{{v.housekeeping_name}}</b></td>
                            <td>@{{v.housekeeping_phone1}},&nbsp;@{{v.housekeeping_phone2}}</td>
                            <td class="text-center">Female</td>
                            <td class="text-center"><b>2 - 4 - C</b></td>
                            <td>Rafi Ahamed Tonmoy</td>
                            <td>
                                <a ng-if="v.housekeeping_status == 1" ng-click="rental_status(v.housekeeping_id)" class="btn btn-default btn-xs" title="Active Profile"><i class="fa fa-check text-success-light"></i></a>&nbsp; &nbsp;
                                
                                <a href="info-rental-details/" class="btn btn-default btn-xs" title="See Details Information"><i class="fa fa-list"></i> Details</a>
                                
                           </td>
                        </tr>
                        <tr ng-repeat="v in housekeeping_show | limitTo:1">
                            <td>Showing @{{housekeeping_show.length}} entries</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
                    
            </div>
            <!--end panel panel-white--> 
        </div>
        <!--end_col-md-12-->
    </div>
    <!--end_row-->
</div>
<!-- end section-container -->
@endsection