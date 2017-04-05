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
                    <div class="col-md-2 m-t-10">
                        @if(Session::get('upd_visitor') == 'Updated')
                        <b><i class="fa fa-check text-success-light"> Updated</i></b>{{Session::put('upd_visitor', '')}}
                        @endif
                        @if(Session::get('upd_guest') == 'Updated')
                        <b><i class="fa fa-check text-success-light"> Updated</i></b>{{Session::put('upd_guest', '')}}
                        @endif
                    </div>
                    <div class="col-md-1 col-md-offset-2"></div>
                    <div class="col-md-0"></div>
                    <div class="col-md-4 text-right">
                        <a href="#modal-guest" class="btn btn-default" style="margin-left: 100px!important;" title="Create Service People" data-toggle="modal"><i class="fa fa-plus text-success-light"> </i> Guest</a>
                        <a href="#modal-visitor" class="btn btn-default m-l-10" title="Create Service People" data-toggle="modal"><i class="fa fa-plus text-success-light"> </i> Visitor</a>
                    </div>
                </div>

                <div class="col-md-3 col-md-offset-2" style="margin-top: -47px!important;">
                    <ul class="nav nav-tabs col-md-offset-0">
                        <li class="active"><a href="#default-tab-1" data-toggle="tab"><i class="fa fa-user"></i> Guest</a></li>
                        <li class=""><a href="#default-tab-2" data-toggle="tab" ng-click="add_visitor()"><i class="fa fa-list"></i> Visitors</a></li>
                    </ul>
                </div>
                <div class="col-md-12">
                    <div class="tab-content m-b-0" style="overflow: scroll; overflow-x: hidden; overflow-y: auto; height: 430px;">
                        <div class="tab-pane fade active in" id="default-tab-1">
                            <table class="table table-bordered table-scroll" style="border-bottom:1px solid #EBECED !important;">
                                <thead>
                                    <tr class="success">
                                        <th><b>Guest Name</b></th>
                                        <th><b>Mobile Number</b></th>
                                        <th class="text-center"><b>Gender</b></th>
                                        <th><b>Address</b></th>
                                        <th class="text-center"><b>Entry Time</b></th>
                                        <th><b>Whose Guest</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                    $number = Session::get('count_visitor') + 1;
                                    @endphp
                                    <tr ng-repeat="v in visitor_show | filter:search_g_v">
                                        <td><b><a href="#modal-guest-details" data-toggle="modal" title="Details Information" ng-click="showGuestDetails(v.flat_info_id)">@{{$index+1}}</a> &nbsp; &nbsp; @{{v.guest_name}}</b></td>
                                        <td>@{{v.guest_mobile}}</td>
                                        <td ng-if="v.guest_gender == '1'" class="text-center">Male</td>
                                        <td ng-if="v.guest_gender == '2'" class="text-center">Female</td>
                                        <td ng-init="limit = 10; moreShown=false">
                                            @{{v.guest_address | limitTo: limit}} @{{v.guest_address.length >limit ? '...': ''}}
                                            <a ng-show="v.guest_address.length >limit" href ng-click="limit=v.guest_address.length; moreShown=ture">More</a>
                                            <a ng-show="moreShown" href ng-click="limit=256; moreShown=false">Less</a>
                                        </td>
                                        <td class="text-center">@{{v.guest_created_at}}</td>
                                        <td>
                                            <a href="#modal-guest-details" data-toggle="modal" title="Details Information" ng-click="showGuestDetails(v.flat_info_id)"><b>@{{v.bld_name}} - @{{v.bld_floor}} - @{{v.bld_unit}}</b></a>&nbsp;&nbsp;&nbsp;
                                            <a href="#modal-guest-edit" data-toggle="modal" title="Click To Edit" ng-click="guestEdit(v.flat_info_id)"><i class="fa fa-edit text-success"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="default-tab-2">
                            <table class="table table-bordered table-hover" style="border-bottom:1px solid #EBECED !important; ">
                                <thead>
                                    <tr class="success">
                                        <th><b>Picture</b><span class="m-l-5"><b>No</b></span></th>
                                        <th><span class="m-l-20"><b>Visitors Name</b></span></th>
                                        <th class="text-center"><b>Mobile Number</b></th>
                                        <th class="text-center"><b>Entry Time</b></th>
                                        <th class="text-center"><b>Whose Guest</b></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr ng-repeat="v in guest_show | filter:search_g_v">
                                        <td>
                                            <a ng-if="v.emp_image != NULL"><img src="@{{v.emp_image}}" class="img-h-w" alt="" /></a>
                                            <a ng-if="v.emp_image == NULL"><img src="ap/assets/img_blank/img_blank.jpg" class="img-h-w" alt="" /></a>
                                            
                                            <b  class="m-l-20"><a>@{{$index+1}}</a></b>
                                        </td>
                                        <td>@{{v.emp_name}} </td>
                                        <td class="text-center">@{{v.emp_phone1}}</td>
                                        <td class="text-center">@{{v.visitor_created_at}}
                                        <td class="text-center">
                                            <a href="info-emp-details/@{{v.emp_details_id}}" class="btn btn-xs text-success" title="See Details"><i class="fa fa-list"> Details</i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                                            <a href="#modal-visitor-edit" data-toggle="modal" title="Click To Edit" ng-click="visitorEdit(v.emp_id)"><i class="fa fa-edit text-success"> Edit</i></a>
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
                                                    <label class="control-label col-sm-3"><b>Whose Guest</b><span class="text-danger">*</span></label>
                                                    <div class="col-sm-8">
                                                        <select class="form-control" id="select-required" name="id" required="" data-parsley-required="true">
                                                            <option value="">Select Building-Floor-Unit</option>
                                                            @foreach($flat_info_show as $v) 
                                                            <option value="{{$v->flat_info_id}}">{{$v->bld_name}}&nbsp;&nbsp; - &nbsp;&nbsp;{{$v->bld_floor}}&nbsp;&nbsp; -  &nbsp;&nbsp;{{$v->bld_unit}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div><hr class="hr-d m-b-15">

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
                                                            <input type="radio" value="1" name="d" id="radio-required" required="" data-parsley-required="true" /> Male <span class="m-l-20"></span>
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

                                        {!! Form::open(array('url'=>'info-visiting-add', 'role'=>'form', 'method'=>'POST')) !!}
                                        <div class="col-md-12 m-t-15">
                                            <!-- start Personal Information -->
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label col-sm-3"><b>Employee</b><span class="text-danger">*</span></label>
                                                    <div class="col-sm-8">
                                                        <select class="form-control" id="select-required" name="id" required="" data-parsley-required="true">
                                                            <option value="">Select Visiting Employee</option>
                                                            @foreach($emp_show as $v) 
                                                            <option value="{{$v->emp_id}}">{{$v->emp_id_no}} &nbsp;&nbsp;&nbsp; {{$v->emp_name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div><hr class="hr-d m-b-15">
                                            </div>
                                            <!-- end Personal Information -->
                                        </div>
                                        


                                        <!-- begin submit button -->
                                        <div class="form-group">
                                            <label class="control-label col-sm-4"></label>
                                            <div class="col-sm-5">
                                                <button type="submit" class="btn btn-success width-xs"">Save</button>
                                            </div>
                                        </div>
                                        <!-- end submit button -->
                                        {!! Form::close() !!}

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
            
            <!--start modal modal-visitor-details-->
            <div class="modal fade" id="modal-guest-details">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title text-center text-success">Details Guest Information </h4>
                        </div>
                        <div class="modal-body">
                            <!-- begin row panel body --->
                            <div class="row">
                                <!-- begin section-container -->
                                <div class="section-container f-s-16" ng-repeat="v in show_guest_details">
                                    <div class="col-md-12" style="margin-top: -18px">
                                        <h4 class="text-center"><strong class="text-success">Guest Information</strong></h4>
                                        <div class="col-md-8 col-md-offset-1">
                                            <dl class="dl-horizontal m-b-20">
                                                <dt>Guest Name :</dt>
                                                <dd class="text-success-light"><b>@{{v.guest_name}}</b></dd>
                                                <dt>Mobile Number :</dt>
                                                <dd>@{{v.guest_mobile}}</dd>
                                                <dt>Gender :</dt>
                                                <dd ng-if="v.guest_gender == 1">Male</dd>
                                                <dd ng-if="v.guest_gender != 1">Female</dd>
                                                <dt>Address :</dt>
                                                <dd>@{{v.guest_address}}</dd>
                                                <dt>Entry Time :</dt>
                                                <dd class="text-danger">@{{v.guest_created_at}}</dd>
                                            </dl>
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-12">
                                        <h4 class="text-center"><strong class="text-success">Guest Owner Information</strong></h4>
                                        <div class="col-md-8 col-md-offset-1">
                                            <dl class="dl-horizontal m-b-20">
                                                <dt>Owner Name :</dt>
                                                <dd>@{{v.rental_name}}</dd>
                                                <dt>Building Location :</dt>
                                                <dd>@{{v.bld_name}} - @{{v.bld_floor}} - @{{v.bld_unit}} </dd>
                                                <dt>Mobile Number :</dt>
                                                <dd>@{{v.rental_phone_1}}</dd>
                                                <dt>E-Mail :</dt>
                                                <dd>@{{v.rental_email}}</dd>
                                            </dl>
                                        </div>
                                    </div> 
                               </div>
                                <!-- end section-container -->    
                            </div>
                            <!-- end row panel body --->
                        </div>
                    </div>
                </div>
            </div>
            <!--end modal modal-visitor-details-->
            
            <!--start modal modal-guest-edit-->
            <div class="modal fade" id="modal-guest-edit">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title text-center text-success-light">Update Guest Information</h4>
                        </div>
                        <div class="modal-body">
                            <!-- begin row panel body --->
                            <div class="row well">
                                <!-- begin section-container -->
                                <div class="section-container">
                                    {!! Form::open(array('url'=>'info-guest-update', 'role'=>'form', 'method'=>'POST')) !!}
                                    <span ng-repeat="v in guest_edit" class="form-horizontal" data-parsley-validate="true" name="demo-form">

                                        <div class="col-md-12 m-t-15">
                                            <!-- start Personal Information -->
                                            <div class="col-md-12">
                                                
                                                <div class="form-group">
                                                    <label class="control-label col-sm-3"><b>Whose Guest</b><span class="text-danger">*</span></label>
                                                    <div class="col-sm-8">
                                                        <select class="form-control" id="select-required" name="id" required="" data-parsley-required="true">
                                                            <option value="@{{v.flat_info_id}}"><b>@{{v.bld_name}} - @{{v.bld_floor}} - @{{v.bld_unit}}</b></option>
                                                            @foreach($flat_info_show as $v) 
                                                            <option value="{{$v->flat_info_id}}">{{$v->bld_name}}&nbsp;&nbsp; - &nbsp;&nbsp;{{$v->bld_floor}}&nbsp;&nbsp; -  &nbsp;&nbsp;{{$v->bld_unit}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div><hr class="hr-d m-b-15">

                                                <strong class="text-success">Personal Information</strong>
                                                <div class="form-group m-t-10">
                                                    <label class="control-label col-sm-3" for="fullname">Person Name <span class="text-danger">*</span></label>
                                                    <div class="col-sm-8">
                                                        <input class="form-control" type="text" id="fullname" name="b" value="@{{v.guest_name}}" required="" data-parsley-required="true" />
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="control-label col-sm-3" for="fullname">Mobile No <span class="text-danger">*</span></label>
                                                    <div class="col-sm-4">
                                                        <input class="form-control" type="number" id="fullname" name="c" value="@{{v.guest_mobile}}" required="" data-parsley-required="true" />
                                                    </div>
                                                    <div class="col-sm-4 m-t-5">
                                                        <label>
                                                            <span ng-if="v.guest_gender == 1">
                                                                <input type="radio" value="1" name="d" checked id="radio-required" required="" data-parsley-required="true" /> Male <span class="m-l-20"></span>
                                                                <input type="radio" value="2" name="d" id="radio-required2" /> Female
                                                            </span>
                                                            <span ng-if="v.guest_gender == 2">
                                                                <input type="radio" value="1" name="d" id="radio-required" data-parsley-required="true" /> Male <span class="m-l-20"></span>
                                                                <input type="radio" value="2" name="d" checked id="radio-required2" required="" /> Female
                                                            </span>
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="control-label col-sm-3" for="fullname">Address <span class="text-danger">*</span></label>
                                                    <div class="col-sm-8">
                                                        <input class="form-control" type="text" id="fullname" name="e" value="@{{v.guest_address}}" required="" data-parsley-required="true" />
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
            <!--end modal modal-guest-edit-->
            
            <!--start modal modal-visitor-->
            <div class="modal fade" id="modal-visitor-edit">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title text-center">Update Visitor Information </h4>
                        </div>
                        <div class="modal-body">
                            <!-- begin row panel body --->
                            <div class="row well">
                                <!-- begin section-container -->
                                <div class="section-container">
                                    <span class="form-horizontal" data-parsley-validate="true" name="demo-form">

                                        {!! Form::open(array('url'=>'info-visitor-update', 'role'=>'form', 'method'=>'POST')) !!}
                                        <div class="col-md-12 m-t-15">
                                            <!-- start Personal Information -->
                                            <div class="col-md-12">
                                                <div class="form-group" ng-repeat="v in visitor_edit">
                                                    <label class="control-label col-sm-3"><b>Employee</b><span class="text-danger">*</span></label>
                                                    <div class="col-sm-8">
                                                        <select class="form-control" id="select-required" name="id" required="" data-parsley-required="true">
                                                            <option value="@{{v.emp_id}}"><b>@{{v.emp_id_no}}&nbsp;&nbsp;&nbsp;@{{v.emp_name}}</b></option>
                                                            @foreach($emp_show as $v) 
                                                            <option value="{{$v->emp_id}}">{{$v->emp_id_no}} &nbsp;&nbsp;&nbsp; {{$v->emp_name}}</option>
                                                            @endforeach
                                                        </select>
                                                        
                                                        <span ng-repeat="v in visitor_edit">
                                                            <input type="hidden" name="v_id" value="@{{v.visitor_id}}"/>
                                                        </span>
                                                    </div>
                                                </div><hr class="hr-d m-b-15">
                                            </div>
                                            <!-- end Personal Information -->
                                        </div>
                                        


                                        <!-- begin submit button -->
                                        <div class="form-group">
                                            <label class="control-label col-sm-4"></label>
                                            <div class="col-sm-5">
                                                <button type="submit" class="btn btn-success width-xs"">Save</button>
                                            </div>
                                        </div>
                                        <!-- end submit button -->
                                        {!! Form::close() !!}

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
            
        </div>
    </div>
    <!--end modal------------------------------------------------------------>
    
    
</div>
<!-- end section-container -->
@endsection