@section('people_content')
<!--start-section-container-->
<div class="section-container" ng-controller="people">
    <!--start_row-->
    <div class="row">
        <!--start_col-md-12-->
        <div class="col-md-12">
            <!--start panel panel-white-->
            <div class="panel panel-white">
                
                <div class="panel-heading">
                    <div class="col-md-3 m-b-15">
                        <input class="form-control text-center" type="text" ng-model="search_rental" id="fullname" placeholder=" Search here..." data-parsley-required="true" />
                    </div>
                    <div class="col-md-5 col-md-offset-3"></div>
                    <div class="col-md-1">
                        <a href="{{URL::to('regi-rental')}}" class="btn btn-default btn-sm m-t-5" title="Registrationi Renal People"><i class="fa fa-plus text-success-light"> </i>&nbsp; Rental</a>
                    </div>
                </div>
                
                <table class="table table-hover table-scroll" style="border-bottom:1px solid #EBECED !important;">
                    <thead>
                        <tr class="success">
                            <th>Picture &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ID</th>
                            <th><span class="m-l-20">Name  &nbsp; &nbsp;</span></th>
                            <th>Building - Floor - Unit</th>
                            <th>Mobile Number</th>
                            <th>E-Mail Address</th>
                            <th>Payment</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr ng-repeat="v in rental_show |filter:search_rental">
                            <td>
                                <a ng-if="v.rental_image != NULL" href="#rental-picture-show" data-toggle="modal" ng-click="rental_picture_show(v.rental_id)" title="Click To See Picture"><img src="@{{v.rental_image}}" class="img-h-w" alt="" /></a>
                                <img ng-if="v.rental_image == NULL" src="ap/assets/img_blank/img_blank.jpg" title="Blank Picture. Please, Give Your Picture" class="img-h-w" alt="" />
                                
                                <b title="ID: @{{v.rental_id_no}}">@{{v.rental_id_no}}</b>
                            </td>
                            <td>@{{v.rental_name}}</td>
                            <td class="text-center"><b>@{{v.bld_name}} - @{{v.bld_floor}} - @{{v.bld_unit}}</b></td>
                            <td>@{{v.rental_phone_1}}</td>
                            <td>@{{v.rental_email}}</td>
                            <td class="text-center"><a href="" class="btn btn-default btn-xs"> &nbsp; Paid &nbsp;</a> </td>
                            <td>
                                <a href="info-rental-details/@{{v.rental_details_id}}" class="btn btn-default btn-xs" title="See Details Information"><i class="fa fa-list-alt"></i> Details</a>&nbsp; &nbsp;
                                
                                <a ng-if="v.person_status == 1" ng-click="rental_status(v.rental_id)" class="btn btn-default btn-xs" title="Active Profile">
                                    <i class="fa fa-check text-success-light"></i>
                                </a>
                                
                                <a ng-if="v.person_status != 1" href="#info-rental-warning" data-toggle="modal" ng-click="info_rental_warning(v.rental_id)" class="btn btn-default btn-xs" title="deActive Profile"><i class="fa fa-remove text-danger-light"></i></a>
                            </td>
                        </tr>
                        <tr ng-repeat="v in rental_show | limitTo:1">
                            <td>Showing @{{rental_show.length}} entries</td>
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
    
    
    <!--start modal-->
    <div class="col-md-6">
        <!--start show_rental_people_picture-->
        <div class="clearfix m-b-25">
            
            <!--start rental-picture-show-->
            <div class="modal fade" id="rental-picture-show">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title text-center">Rental Profile Picture</h4>
                        </div>
                        <div class="modal-body">
                            <!-- begin row panel body --->
                            <div class="row well">
                                <!-- begin section-container -->
                                <div class="section-container">
                                    <span class="form-horizontal" data-parsley-validate="true" name="demo-form">
                                        <div class="col-md-12 m-t-15">
                                            <!--start service_person_Picture-->
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <div class="col-sm-4 col-md-offset-4 m-b-10" ng-repeat="picture in data">

                                                        <a class="thumbnail m-b-mi-15">
                                                            <img src="@{{picture.rental_image}}" class="img-md-h-w" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--ends ervice_person_Picture-->
                                        </div>
                                    </span>
                                </div>
                                <!-- end section-container -->    
                            </div>
                            <!-- end row panel body --->
                        </div>
                    </div>
                </div>
            </div>
            <!--end rental-picture-show-->
            <div class="modal fade" id="info-rental-warning">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title text-center text-warning">Attention</h4>
                        </div>
                        <div class="modal-body">
                            <!-- begin row panel body --->
                            <div class="row">
                                <!-- begin section-container -->
                                <div class="section-container">
                                    <span class="form-horizontal" data-parsley-validate="true" name="demo-form">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="col-sm-12 m-b-10 text-warning-light">
                                                    <h2 class="text-warning-light text-center m-b-20"><i class="fa fa-warning"> </i>  Warning! </h2>
                                                    <h4 class="text-warning-light text-center">Firstly, You have to update your building location</h4>
                                                    <h6 class="text-warning-light text-center">Click to below <b>Go</b> button</h6>
                                                </div>
                                            </div><hr class="hr-d m-b-15">
                                        </div>

                                        <!-- begin submit button -->
                                        <div class="form-group">
                                            <label class="control-label col-sm-4"></label>
                                            <div class="col-sm-5" ng-repeat="value in rental_warning">
                                                <a href="info-rental-details/@{{value.rental_details_id}}" class="btn btn-success width-xs" title=""><i class="fa fa-arrow-right"> </i> Go</a>
                                            </div>
                                        </div>
                                        <!-- end submit button -->

                                    </span>
                                </div>
                                <!-- end section-container -->    
                            </div>
                            <!-- end row panel body --->
                        </div>
                    </div>
                </div>
            </div>
            <!--start edit_service_people_picture-->
            
            <!--end edit_service_people_picture-->
            
        </div>
        <!--end show_service_people_picture-->
    </div>
    <!-- end modal -->

</div>
<!--end-section-container-->
@endsection