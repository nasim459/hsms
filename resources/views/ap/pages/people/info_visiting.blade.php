@section('people_content')
<!-- begin section-container -->
<div class="section-container" ng-controller="RegiController">
    <!-- begin panel -->
    <!-- begin row -->
    <div class="row">
        <!-- begin View_Salary -->
        <div class="col-md-12">
            <!-- <span><p class="text-center text-success-light"><b>vvvvvvvvvv</b></p></span>-->
            <!-- begin panel -->
            <div class="panel without-pagination clearfix m-b-0">
                {!! Form::open(array('url'=>'make-salary-invoice', 'role'=>'form', 'method'=>'POST')) !!}
                <div class="form-group">
                    <div class="col-md-3 m-b-10">
                        <input class="form-control text-center" type="text" ng-model="search_g_v" id="fullname" placeholder=" Search here..." data-parsley-required="true" />
                    </div>
                    <div class="col-md-3 col-md-offset-2">
                        <!--<ul class="nav nav-tabs col-md-offset-0">
                            <li class="active"><a href="#default-tab-1" data-toggle="tab"><i class="fa fa-user"></i> Guest</a></li>
                            <li class=""><a href="#default-tab-2" data-toggle="tab"><i class="fa fa-list"></i> Visitors</a></li>
                        </ul>-->
                    </div>
                    <div class="col-md-0"></div>
                    <div class="col-md-4">
                        <a href="#modal-guest" class="btn btn-default" style="margin-left: 210px!important;" title="Create Service People" data-toggle="modal"><i class="fa fa-plus text-success-light"> </i> Guest</a>
                        <a href="#modal-visitor" class="btn btn-default m-l-10" title="Create Service People" data-toggle="modal"><i class="fa fa-plus text-success-light"> </i> Visitor</a>
                    </div>
                </div>

                <div class="col-md-3 col-md-offset-2" style="margin-top: -47px!important;">
                    <ul class="nav nav-tabs col-md-offset-0">
                        <li class="active"><a href="#default-tab-1" data-toggle="tab"><i class="fa fa-user"></i> Guest</a></li>
                        <li class=""><a href="#default-tab-2" data-toggle="tab"><i class="fa fa-list"></i> Visitors</a></li>
                    </ul>
                </div>
                <div class="col-md-12">
                    <div class="tab-content m-b-0" style="overflow: scroll; overflow-x: hidden; overflow-y: auto; height: 400px;">
                        <div class="tab-pane fade active in" id="default-tab-1">
                            <table class="table table-bordered table-hover" style="border-bottom:1px solid #EBECED !important; ">
                                <thead>
                                    <tr class="success">
                                        <th>Picture <span class="m-l-5">No</span></th>
                                        <th><span class="m-l-20">Guest Name</span></th>
                                        <th class="text-center">Mobile Number</th>
                                        <th class="text-center">Address</th>
                                        <th class="text-center">Gender</th>
                                        <th class="text-center">Entry Time</th>
                                        <th class="text-center">Whose Guest Name</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $number = Session::get('count_visitor') + 1;
                                    @endphp
                                    <tr ng-repeat="v in visitor_show | filter:search_g_v">
                                        <td
                                            <b><a class="btn btn-default btn-xs">@{{$index+1}}</a></b>
                                        </td>
                                        <td><b>@{{v.guest_name}}</b></td>
                                        <td class="text-center">@{{v.guest_mobile}}</td>
                                        <td ng-init="limit = 20; moreShown=false">
                                            @{{v.guest_address | limitTo: limit}} @{{v.guest_address.length >limit ? '...': ''}}
                                            <a ng-show="v.guest_address.length >limit" href ng-click="limit=v.guest_address.length; moreShown=ture">More</a>
                                            <a ng-show="moreShown" href ng-click="limit=256; moreShown=false">Less</a>
                                        </td>
                                        <td class="text-center" ng-if="v.guest_gender == '1'">Male</td>
                                        <td class="text-center" ng-if="v.guest_gender == '2'">Female</td>
                                        <td class="text-center">@{{v.guest_created_at}}
                                        <td>TonMoy Khan</td>
                                        <td class="text-center">
                                            <a href="#modal-guest-edit" data-toggle="modal" title="Click To Edit" ng-click="guestEdit(@{{v.guest_id}})"><i class="fa fa-edit"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="default-tab-2">
                            <table class="table table-bordered table-hover" style="border-bottom:1px solid #EBECED !important; ">
                                <thead>
                                    <tr class="success">
                                        <th>Picture <span class="m-l-5">No</span></th>
                                        <th><span class="m-l-20">Visitors Name</span></th>
                                        <th class="text-center">Mobile Number</th>
                                        <th class="text-center">Entry Time</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr ng-repeat="v in guest_show | filter:search_g_v">
                                        <td>
                                            <img src="{{URL::asset('ap/assets/img_blank/img_blank.jpg')}}" class="img-h-w" title="Please, Give Your Picture" alt="" />
                                            <b  class="m-l-20">@{{$index+1}}</b>
                                        </td>
                                        <td>@{{v.emp_name}} </td>
                                        <td class="text-center">@{{v.emp_phone1}}</td>
                                        <td class="text-center">@{{v.visitor_created_at}}
                                        <td class="text-center">
                                            <a href="info-emp-details/@{{v.emp_details_id}}" class="btn btn-default btn-xs"><i class="fa fa-list-alt"></i> Details</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
            <!-- end panel -->
        </div>
        <!-- end View_Salary -->
    </div>
    <!-- end row-->
    <!-- end panel -->
    
    
    <!--start modal------------------------------------------------------------>
    <div class="col-md-6">
        <div class="clearfix m-b-25">
            
            <!--start modal modal-guest-->
            <div class="modal fade" id="modal-guest">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title text-center text-success-light">Collect Guest Information</h4>
                        </div>
                        <div class="modal-body">
                            <!-- begin row panel body --->
                            <div class="row well">
                                <!-- begin section-container -->
                                <div class="section-container">
                                    {!! Form::open(array('url'=>'regi-guest-save', 'role'=>'form', 'method'=>'POST')) !!}
                                    <span class="form-horizontal" data-parsley-validate="true" name="demo-form">

                                        <div class="col-md-12 m-t-15">
                                            <!-- start Personal Information -->
                                            <div class="col-md-12">

                                                <div class="form-group">
                                                    <label class="control-label col-sm-3" for="fullname"> <b>Whose Guest</b> <span class="text-danger">*</span></label>
                                                    <div class="col-sm-8">
                                                        <input class="form-control" type="text" id="fullname" name="service_name" ng-model="searchText" placeholder="Search...  Whose Guest" data-parsley-required="true" />
                                                        
                                                        <ul ng-repeat="v in search_show | filter:searchText">
                                                            <a ng-hide="!searchText">@{{v.rental_id_no}}</a>
                                                        </ul>
<!--                                                        <ul ng-repeat="v in search_show | filter:searchText">
                                                            <li ng-hide="searchText">@{{v.rental_id_no}}</li>
                                                        </ul>-->
<!--                                                        <select class="form-control" id="select-required" name="floor" ng-repeat="v in search_show | filter:searchText" data-parsley-required="true">
                                                            <option value="">Floor</option>
                                                            <option ng-hide="searchText" value="">@{{v.rental_id_no}}</option>
                                                        </select>-->
                                                    </div>
                                                </div>
                                                
                                                <hr class="hr-d m-b-15">

                                                <strong class="text-success">Personal Information</strong>
                                                <div class="form-group m-t-10">
                                                    <label class="control-label col-sm-3" for="fullname">Person Name <span class="text-danger">*</span></label>
                                                    <div class="col-sm-8">
                                                        <input class="form-control" type="text" id="fullname" name="b" placeholder="Service Person Name" required="" data-parsley-required="true" />
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="control-label col-sm-3" for="fullname">Mobile No <span class="text-danger">*</span></label>
                                                    <div class="col-sm-4">
                                                        <input class="form-control" type="number" id="fullname" name="c" placeholder="01xxxxxxxxx" required="" data-parsley-required="true" />
                                                    </div>
                                                    <div class="col-sm-4 m-t-5">
                                                        <label>
                                                            <input type="radio" value="1" name="d" id="radio-required" required="" data-parsley-required="true" /> Male <span class="m-l-40"></span>
                                                            <input type="radio" value="2" name="d" id="radio-required2" /> Female
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="control-label col-sm-3" for="fullname">Address <span class="text-danger">*</span></label>
                                                    <div class="col-sm-8">
                                                        <input class="form-control" type="text" id="fullname" name="e" placeholder="Write Address" required="" data-parsley-required="true" />
<!--                                                        <input type="hidden" name="rough_" value="" />-->
                                                    </div>
                                                </div>

                                            </div>
                                            <!-- end Personal Information -->
                                        </div>

                                        <!-- begin submit button -->
                                        <div class="form-group">
                                            <label class="control-label col-sm-4"></label>
                                            <div class="col-sm-5 m-t-30">
                                                <button type="submit" class="btn btn-success width-xs">Submit</button>
                                            </div>
                                        </div>
                                        <!-- end submit button -->

                                    </span>
                                    {!! Form::close() !!}
                                </div>
                                <!-- end section-container -->    
                            </div>
                            <!-- end row panel body --->
                        </div>
                    </div>
                </div>
            </div>
            <!--end modal modal-guest-->
            
            <!--start modal modal-visitor-->
            <div class="modal fade" id="modal-visitor">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">Collect Visitor Information </h4>
                        </div>
                        <div class="modal-body">
                            <!-- begin row panel body --->
                            <div class="row well">
                                <!-- begin section-container -->
                                <div class="section-container">
                                    <span class="form-horizontal" data-parsley-validate="true" name="demo-form">

                                        <div class="col-md-12 m-t-15">
                                            <!-- start Personal Information -->
                                            <div class="col-md-12">

                                                <div class="form-group">
                                                    <label class="control-label col-sm-3" for="fullname"> <strong>Visitor ID</strong> <span class="text-danger">*</span></label>
                                                    <div class="col-sm-8">
                                                        <input class="form-control" type="text" id="fullname" name="visitor_id" placeholder="Enter Visitor id..." data-parsley-required="true" />
                                                        <input type="hidden" name="v_id" ng-model="v_id" />
                                                        <input type="hidden"  name="_token" ng-model="token" value="{{csrf_token()}}" />
                                                    </div>
                                                </div><hr class="hr-d m-b-15">

                                            </div>
                                            <!-- end Personal Information -->
                                        </div>


                                        <!-- begin submit button -->
                                        <div class="form-group">
                                            <label class="control-label col-sm-4"></label>
                                            <div class="col-sm-5">
                                                <button type="submit" class="btn btn-success width-xs" ng-click="regiVisitor()">Submit</button>
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
            <!--end modal modal-visitor-->
            
            <!--start modal modal-guest-edit-->
            <div class="modal fade" id="modal-guest-edit">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title text-center text-success-light">Collect Guest Information</h4>
                        </div>
                        <div class="modal-body">
                            <!-- begin row panel body --->
                            <div class="row well">
                                <!-- begin section-container -->
                                <div class="section-container">
                                    {!! Form::open(array('url'=>'regi-guest-save', 'role'=>'form', 'method'=>'POST')) !!}
                                    <span class="form-horizontal" data-parsley-validate="true" name="demo-form">

                                        <div class="col-md-12 m-t-15">
                                            <!-- start Personal Information -->
                                            <div class="col-md-12">

                                                <div class="form-group">
                                                    <label class="control-label col-sm-3" for="fullname"> <b>Whose Guest</b> <span class="text-danger">*</span></label>
                                                    <div class="col-sm-8">
                                                        <input class="form-control" type="text" id="fullname" name="service_name" ng-model="searchText" placeholder="Search...  Whose Guest" data-parsley-required="true" />
                                                        
                                                        <ul ng-repeat="v in search_show | filter:searchText">
                                                            <a ng-hide="!searchText">@{{v.rental_id_no}}</a>
                                                        </ul>
<!--                                                        <ul ng-repeat="v in search_show | filter:searchText">
                                                            <li ng-hide="searchText">@{{v.rental_id_no}}</li>
                                                        </ul>-->
<!--                                                        <select class="form-control" id="select-required" name="floor" ng-repeat="v in search_show | filter:searchText" data-parsley-required="true">
                                                            <option value="">Floor</option>
                                                            <option ng-hide="searchText" value="">@{{v.rental_id_no}}</option>
                                                        </select>-->
                                                    </div>
                                                </div>
                                                
                                                <hr class="hr-d m-b-15">
                                                
                                                <div ng-repeat="v in guest_edit">
                                                    <strong class="text-success">Personal Information</strong>
                                                    <div class="form-group m-t-10">
                                                        <label class="control-label col-sm-3" for="fullname">Person Name <span class="text-danger">*</span></label>
                                                        <div class="col-sm-8">
                                                            <input class="form-control" type="text" id="fullname" name="b" value="@{{v.guest_id}}" placeholder="Service Person Name" required="" data-parsley-required="true" />
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label col-sm-3" for="fullname">Mobile No <span class="text-danger">*</span></label>
                                                        <div class="col-sm-4">
                                                            <input class="form-control" type="number" id="fullname" name="c" placeholder="01xxxxxxxxx" required="" data-parsley-required="true" />
                                                        </div>
                                                        <div class="col-sm-4 m-t-5">
                                                            <label>
                                                                <input type="radio" value="1" name="d" id="radio-required" required="" data-parsley-required="true" /> Male <span class="m-l-40"></span>
                                                                <input type="radio" value="2" name="d" id="radio-required2" /> Female
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label col-sm-3" for="fullname">Address <span class="text-danger">*</span></label>
                                                        <div class="col-sm-8">
                                                            <input class="form-control" type="text" id="fullname" name="e" placeholder="Write Address" required="" data-parsley-required="true" />
    <!--                                                        <input type="hidden" name="rough_" value="" />-->
                                                        </div>
                                                    </div>
                                                
                                                </div>

                                            </div>
                                            <!-- end Personal Information -->
                                        </div>

                                        <!-- begin submit button -->
                                        <div class="form-group">
                                            <label class="control-label col-sm-4"></label>
                                            <div class="col-sm-5 m-t-30">
                                                <button type="submit" class="btn btn-success width-xs">Submit</button>
                                            </div>
                                        </div>
                                        <!-- end submit button -->

                                    </span>
                                    {!! Form::close() !!}
                                </div>
                                <!-- end section-container -->    
                            </div>
                            <!-- end row panel body --->
                        </div>
                    </div>
                </div>
            </div>
            <!--end modal modal-guest-edit-->
            
        </div>
    </div>
    <!--end modal------------------------------------------------------------>
    
    
</div>
<!-- end section-container -->
@endsection