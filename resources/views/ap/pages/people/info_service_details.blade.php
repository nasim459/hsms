@section('people_content')
<!-- begin section-container -->
<div class="section-container" ng-controller="servicePerson">
    <!-- begin row -->
    <div class="row">
        <!-- begin col-12 -->
        <div class="col-md-12">
            <!-- begin panel -->
            <div class="panel panel-default">
                <?php
                $number = 0; $off = 0; $on = 1; ?>
                @foreach($service_details as $v)
                <div class="panel-heading">
                    <div class="btn-group pull-left">
                        <a href="{{URL::to('info-service')}}" class="btn btn-white btn-xs" title="Back to Service"><i class="fa fa-arrow-left"></i>&nbsp;</a>
                    </div>
                    <div class="btn-group pull-right">
                        <button type="button" class="btn btn-white btn-xs">Action</button>
                        <button type="button" class="btn btn-white btn-xs dropdown-toggle" data-toggle="dropdown">
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#service-add-name" data-toggle="modal"><i class="fa fa-plus"></i> Add Service</a></li>
                            <li><a href="{{URL::to('info-service-edit/'.$v->service_person_id)}}"><i class="fa fa-edit"></i> Edit Profile</a></li>
                            <li><a href="#modal-s-type-picture" data-toggle="modal" title="Update Picture"><i class="fa fa-edit"></i></i> Edit Picture</a></li>
                            <li class="divider"></li>
                            <li><a href="{{URL::to('')}}"><i class="fa fa-power-off"></i> SignOut</a></li>
                        </ul>
                    </div> 
                    <div class="row">
                        <div class="col-md-10 col-md-offset-2">
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    
                                    @if($v->service_person_image != NULL)
                                    <a href="#modal-s-type-picture" class="thumbnail m-b-mi-15" data-toggle="modal" title="Update Picture"><img src="{{URL::asset($v->service_person_image)}}" class="img-d-h-w" alt="Blank"></a>
                                    @else
                                    <a href="#modal-s-type-picture" class="thumbnail m-b-mi-15" data-toggle="modal" title="Update Picture"><img src="{{URL::asset('ap/assets/img_blank/img_blank.jpg')}}" class="img-d-h-w" alt=""></a>
                                    @endif
                                </div>
                                <div class="col-md-8">
                                    <p class="f-s-14">
                                        <b>
                                            &nbsp;<br/>
                                            {{$v->service_person_name}}<br/>
                                            {{$v->service_person_phone1}}<br/>
                                        </b>
                                        <b>
                                            &nbsp;<br/>
                                            <span class="text-success">Service People</span><br/>
                                        </b>
                                    </p>
                                    <p class="f-s-15">
                                        {{Session::get('add_service_name')}}<br/>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                &nbsp;<br/>
                                <div>
                                    <b class="m-b-10">
                                        Service :
                                        @if($v->service_person_status == 1)
                                        &nbsp; <a href="{{URL::to('info-service-status/'.$v->service_person_id.'/'.$off)}}" class="btn btn-success btn-xs" title="Your Service is Active">&nbsp; Active &nbsp;</a>
                                        @else
                                        &nbsp; <a href="{{URL::to('info-service-status/'.$v->service_person_id.'/'.$on)}}" class="btn btn-warning btn-xs" title="Your Service is Stop"> &nbsp; Stop &nbsp; </a>
                                        @endif
                                    </b>
                                </div><br/>
                                <div>
                                    <b title="Present Address">Address : &nbsp; {{$v->service_person_address}}</b>
                                </div><br/>
                                <div>
                                    @if(Session::get('service_person') != NULL)
                                    <b class="text-success-light" title="Work Done!">{{Session::get('service_person')}}</b>
                                    @endif
                                </div><br/>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="nav nav-tabs col-md-offset-1">
                    <li class="active"><a href="#default-tab-1" data-toggle="tab"><i class="fa fa-user"></i> Profile</a></li>
                    <li class=""><a href="#default-tab-2" data-toggle="tab"><i class="fa fa-list"></i> Service User</a></li>
                    <li class=""><a href="#default-tab-3" data-toggle="tab"><i class="fa fa-credit-card"></i> My Service</a></li>
                </ul>
                <div class="tab-content m-b-0" style="overflow: scroll; overflow-x: hidden; overflow-y: auto; height: 250px;">
                    <div class="tab-pane fade active in" id="default-tab-1">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-4">
                                <div class="">
                                    <h4><strong class="text-success">Personal Information of Service People</strong></h4>
                                    <dl class="dl-horizontal m-b-20">
                                        <dt>Person Name :</dt>
                                        <dd>{{$v->service_person_name}}</dd>
                                        <dt>Phone Number :</dt>
                                        <dd>{{$v->service_person_phone1}}</dd>
                                        <dd>{{$v->service_person_phone2}}</dd>
                                        <dt>Gender :<dt>
                                        <dd>
                                            @if($v->service_person_gender == 1)
                                            <b>Male</b>
                                            @else
                                            <b>Female</b>
                                            @endif
                                        </dd>
                                        <dt>Address :<dt>
                                        <dd>{{$v->service_person_address}}</dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="default-tab-2">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-2">
                                <div class="col-md-10">

                                    <div class="col-md-12">
                                        <table class="table table-bordered table-hover" style="border:1px solid #EBECED !important;border-bottom:1px solid #EBECED !important;">
                                            <thead>
                                                <tr class="default">
                                                    <th class="text-center">User ID</th>
                                                    <th><span class="m-l-20"> Name</span></th>
                                                    <th class="text-center">Mobile Number</th>
                                                    <th class="text-center">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-center">88-456-54</td>
                                                    <td>Md Nasim</td>
                                                    <td class="text-center">3335532</td>
                                                    <td class="text-center">

                                                        <a href="" class="btn btn-default btn-xs"> &nbsp; Running &nbsp; </a>

                                                        <a href="" class="btn btn-warning btn-xs"> &nbsp; Stop &nbsp; </a>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">88-456-54</td>
                                                    <td>Md Nasim</td>
                                                    <td class="text-center">3335532</td>
                                                    <td class="text-center">

                                                        <a href="" class="btn btn-default btn-xs"> &nbsp; Running &nbsp; </a>

                                                        <a href="" class="btn btn-warning btn-xs"> &nbsp; Stop &nbsp; </a>

                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">88-456-54</td>
                                                    <td>Md Nasim</td>
                                                    <td class="text-center">3335532</td>
                                                    <td class="text-center">

                                                        <a href="" class="btn btn-default btn-xs"> &nbsp; Running &nbsp; </a>

                                                        <a href="" class="btn btn-warning btn-xs"> &nbsp; Stop &nbsp; </a>

                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="default-tab-3">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="col-md-10">

                                    <div class="col-md-8 col-md-offset-2 m-t-20 m-b-30">
                                        <?php
                                        $number = 0;
                                        $off = 0;
                                        $on = 1;
                                        ?>
                                        @foreach($service_type as $v)
                                        <div class="col-md-12">
                                            <span class="col-md-8">
                                                <a href="#" class="btn btn-default btn-sm width-xs"><i class="fa fa-arrow-right"></i>&nbsp; {{$v->service_type}} &nbsp;</a>
                                            </span>
                                            <span class="col-md-offset-4">
                                                <!--<a href="{{URL::to('info-service/'.$v->service_id)}}" class="text-muted" title="Edit Service"><i class="fa fa-pencil"></i>&nbsp; Edit &nbsp;</a>-->

                                                @if($v->service_status == 1)
                                                <a href="{{URL::to('service-type-status/'.$v->service_id.'/'.$off)}}" class="btn btn-default btn-xs">&nbsp; Running &nbsp;</a>
                                                @else
                                                <a href="{{URL::to('service-type-status/'.$v->service_id.'/'.$on)}}" class="btn btn-warning btn-xs">&nbsp; &nbsp; &nbsp; Stop &nbsp;  &nbsp; </a>
                                                @endif
                                                &nbsp; &nbsp; &nbsp;
                                                <a href="#modal-s-type" class="text-muted" data-toggle="modal" title="Edit Service" ng-click="service_type_update({{$v->service_id}})"> Edit &nbsp;<i class="fa fa-pencil"></i></a>

                                            </span>
                                        </div>&nbsp;</br>
                                        @endforeach()
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                @endforeach()


                <!-- begin modal -->
                <!-- begin add_service of people modal -->
                <div class="col-md-6">
                    <div class="clearfix m-b-25">
                        <!-- #modal-dialog -->
                        <div class="modal fade" id="service-add-name">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        <h4 class="modal-title text-center">Add Your Service Name</h4>
                                    </div>
                                    <div class="modal-body">
                                        <!-- begin row panel body --->
                                        <div class="row well">
                                            <!-- begin section-container -->
                                            <div class="section-container">
                                                {!! Form::open(array('url'=>'service-add-name', 'role'=>'form', 'method'=>'POST')) !!}
                                                <span action="{{URL::to('regi-s-people-save')}}" class="form-horizontal" data-parsley-validate="true" name="demo-form">

                                                    <div class="col-md-12 m-t-15">
                                                        <!-- start Personal Information -->
                                                        <div class="col-md-12">
                                                            @foreach($service_details as $index => $v)
                                                            @if( $index == 0)
                                                            <div class="form-group">
                                                                <label class="control-label col-sm-3" for="fullname"> <strong>Service Name</strong> <span class="text-danger">*</span></label>
                                                                <div class="col-sm-8">
                                                                    <input class="form-control" type="text" id="fullname" name="a" placeholder="Write Service Name" data-parsley-required="true" />
                                                                    <input type="hidden" name="id" value="{{$v->service_person_id}}" data-parsley-required="true" />
                                                                </div>
                                                            </div><hr class="hr-d m-b-15">
                                                            @endif
                                                            @endforeach()
                                                        </div>
                                                        <!-- end Personal Information -->
                                                    </div>

                                                    <!-- begin submit button -->
                                                    <div class="form-group">
                                                        <label class="control-label col-sm-4"></label>
                                                        <div class="col-sm-5">
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

                    </div>
                </div>
                <!-- end add_service of people modal -->

                <!-- begin edit_service_people modal -->
                <div class="col-md-6">
                    <div class="clearfix m-b-25">
                        <!-- #modal-dialog -->
                        <div class="modal fade" id="modal-s-people">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        <h4 class="modal-title text-center">Service People Registration</h4>
                                    </div>
                                    <div class="modal-body">
                                        <!-- begin row panel body --->
                                        <div class="row well">
                                            <!-- begin section-container -->
                                            <div class="section-container">
                                                {!! Form::open(array('url'=>'service-add', 'role'=>'form', 'method'=>'POST')) !!}
                                                <span action="{{URL::to('regi-s-people-save')}}" class="form-horizontal" data-parsley-validate="true" name="demo-form">

                                                    <div class="col-md-12 m-t-15">
                                                        <!-- start Personal Information -->
                                                        <div class="col-md-12">

                                                            <div class="form-group">
                                                                <label class="control-label col-sm-3" for="fullname"> <strong>Service Name</strong> <span class="text-danger">*</span></label>
                                                                <div class="col-sm-8">
                                                                    <input class="form-control" type="text" id="fullname" name="a" placeholder="Write Service Name" data-parsley-required="true" />
                                                                </div>
                                                            </div><hr class="hr-d m-b-15">

                                                            <strong class="text-success">Personal Information</strong>
                                                            <div class="form-group m-t-10">
                                                                <label class="control-label col-sm-3" for="fullname">Person Name <span class="text-danger">*</span></label>
                                                                <div class="col-sm-8">
                                                                    <input class="form-control" type="text" id="fullname" name="b" placeholder="Service Person Name" data-parsley-required="true" />
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="control-label col-sm-3" for="fullname">Mobile No <span class="text-danger">*</span></label>
                                                                <div class="col-sm-4">
                                                                    <input class="form-control" type="text" id="fullname" name="c" placeholder="01xxxxxxxxx" data-parsley-required="true" />
                                                                </div>
                                                                <div class="col-sm-4">
                                                                    <input class="form-control" type="text" id="fullname" name="d" placeholder="01xxxxxxxxx" />
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="control-label col-sm-3" for="fullname">Address <span class="text-danger">*</span></label>
                                                                <div class="col-sm-8">
                                                                    <input class="form-control" type="text" id="fullname" name="e" placeholder="Write Address" data-parsley-required="true" />
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="control-label col-sm-3">Gender <span class="text-danger">*</span></label>
                                                                <div class="col-sm-8 m-t-5">
                                                                    <label>
                                                                        <input type="radio" value="1" name="g_radio" id="radio-required" data-parsley-required="true" /> Male <span class="m-l-40"></span>
                                                                        <input type="radio" value="2" name="g_radio" id="radio-required2" /> Female
                                                                    </label>
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="control-label col-sm-3" for="fullname">Picture <span class="text-danger"></span></label>
                                                                <div class="col-sm-8">
                                                                    <input  type="file" name="filename" id="fileToUpload" />
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <!-- end Personal Information -->
                                                    </div>

                                                    <!-- begin submit button -->
                                                    <div class="form-group">
                                                        <label class="control-label col-sm-4"></label>
                                                        <div class="col-sm-5">
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

                    </div>
                </div>
                <!-- end edit_service_people modal -->

                <!--start edit_modal-->
                <div class="col-md-6">
                    <!--start edit_service_people-->
                    <div class="clearfix m-b-25">
                        <!-- #modal-dialog -->
                        <div class="modal fade" id="modal-s-type">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        <h4 class="modal-title text-center">Update Your Service</h4>
                                    </div>
                                    <div class="modal-body">
                                        <!-- begin row panel body --->
                                        <div class="row well">
                                            <!-- begin section-container -->
                                            <div class="section-container">
                                                {!! Form::open(array('url'=>'service-type-update', 'role'=>'form', 'method'=>'POST')) !!}
                                                <span class="form-horizontal" data-parsley-validate="true" name="demo-form">

                                                    <div class="col-md-12 m-t-15">
                                                        <!-- start Personal Information -->
                                                        <div class="col-md-12">
                                                            <div class="form-group" ng-repeat="type in data">
                                                                <label class="control-label col-sm-3" for="fullname"> <strong>Service Name</strong> <span class="text-danger">*</span></label>
                                                                <div class="col-sm-8">
                                                                    <input class="form-control" type="text" name="a" value="@{{type.service_type}}" id="fullname" placeholder="Write Service Name" data-parsley-required="true" />
                                                                    <input type="hidden" name="id" value="@{{type.service_id}}" />
                                                                </div>
                                                            </div><hr class="hr-d m-b-15">
                                                        </div>
                                                        <!-- end Personal Information -->
                                                    </div>

                                                    <!-- begin submit button -->
                                                    <div class="form-group">
                                                        <label class="control-label col-sm-4"></label>
                                                        <div class="col-sm-5">
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

                    </div>
                    <!--end edit_service_people-->

                    <!--start edit_service_people_picture-->
                    <div class="clearfix m-b-25">
                        <!-- #modal-dialog-start-->
                        <div class="modal fade" id="modal-s-type-picture">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        <h4 class="modal-title text-center">Profile Picture Edit</h4>
                                    </div>
                                    <div class="modal-body">
                                        <!-- begin row panel body --->
                                        <div class="row well">
                                            <!-- begin section-container -->
                                            <div class="section-container">
                                                {!! Form::open(array('url'=>'service-people-pic-update', 'role'=>'form', 'method'=>'POST', 'files'=>'true')) !!}
                                                <span class="form-horizontal" data-parsley-validate="true" name="demo-form">
                                                    @foreach($service_details as $v)
                                                    <div class="col-md-12 m-t-15">
                                                        <!--start service_person_Picture-->
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <div class="col-sm-3 m-b-10">
                                                                    
                                                                    <a class="thumbnail m-b-mi-15" title="Update Picture">
                                                                        @if($v->service_person_image != NULL)
                                                                        <img src="{{URL::asset($v->service_person_image)}}" class="img-sm-h-w" alt="Blank">
                                                                        @else
                                                                        <img src="{{URL::asset('ap/assets/img_blank/img_blank.jpg')}}" class="img-sm-h-w" alt="">
                                                                        @endif
                                                                    </a>

                                                                    <input type="hidden" name="a" value="{{$v->service_person_id}}" />
                                                                </div>

                                                                <div class="col-sm-4 m-t-40 m-l-30">
                                                                    <input  type="file" name="image" id="fileToUpload" />
                                                                </div>
                                                            </div><hr class="hr-d m-b-15">
                                                        </div>
                                                        <!--ends ervice_person_Picture-->
                                                    </div>

                                                    <!-- begin submit button -->
                                                    <div class="form-group">
                                                        <label class="control-label col-sm-4"></label>
                                                        <div class="col-sm-5">
                                                            <button type="submit" class="btn btn-success width-xs">Update</button>
                                                        </div>
                                                    </div>
                                                    <!-- end submit button -->
                                                    @endforeach()

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
                        <!-- #modal-dialog-end-->
                    </div>
                    <!--end edit_service_people_picture-->
                </div>
                <!--end edit_modal-->

                <div class="col-md-6">
                    <div class="clearfix m-b-25">
                        <!-- #modal-dialog -->
                        <div class="modal fade" id="salary-edit">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        <h4 class="modal-title">Edit Salary Statement </h4>
                                    </div>
                                    <div class="modal-body">
                                        <!-- begin row panel body --->
                                        <div class="row well">
                                            <!-- begin section-container -->
                                            <div class="section-container">
                                                {!! Form::open(array('url'=>'update-salary', 'role'=>'form', 'method'=>'POST')) !!}
                                                <span class="form-horizontal" data-parsley-validate="true" name="demo-form">


                                                    <div class="col-md-12 m-t-15">
                                                        <!-- start Personal Information -->
                                                        <div class="col-md-12">

                                                            <div class="form-group">
                                                                <label class="control-label col-sm-4" for="fullname">Salary Started Date <span class="text-danger">*</span></label>
                                                                <div class="col-sm-6">
                                                                    <input class="form-control" type="date" id="fullname" value="" disabled="" data-parsley-required="true" />
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="control-label col-sm-4" for="fullname"> <strong>Salary Basic</strong> <span class="text-danger">*</span></label>
                                                                <div class="col-sm-6">
                                                                    <input class="form-control" type="text" id="fullname" name="a" value="" data-parsley-required="true" />
                                                                    <input type="hidden" name="sal_id" value="" />
                                                                    <input type="hidden" name="employee_id" value="" />
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-sm-4" for="fullname"> <strong>Salary House</strong> <span class="text-danger">*</span></label>
                                                                <div class="col-sm-6">
                                                                    <input class="form-control" type="text" id="fullname" name="b" value="" data-parsley-required="true" />
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-sm-4" for="fullname"> <strong>Salary Health</strong> <span class="text-danger">*</span></label>
                                                                <div class="col-sm-6">
                                                                    <input class="form-control" type="text" id="fullname" name="c" value="" data-parsley-required="true" />
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="control-label col-sm-4" for="fullname"> <strong>Salary Transport</strong> <span class="text-danger">*</span></label>
                                                                <div class="col-sm-6">
                                                                    <input class="form-control" type="text" id="fullname" name="d" value="" data-parsley-required="true" />
                                                                </div>
                                                            </div><hr class="hr-d m-b-15">

                                                        </div>
                                                        <!-- end Personal Information -->
                                                    </div>

                                                    <!-- begin submit button -->
                                                    <div class="form-group">
                                                        <label class="control-label col-sm-4"></label>
                                                        <div class="col-sm-5">
                                                            <button type="submit" class="btn btn-success width-xs m-l-10">Submit</button>
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

                    </div>
                </div>
                <!-- end salary registration modal -->

            </div>
            <!-- end panel -->
        </div>
        <!-- end col-6 --> 
    </div>
    <!-- end row -->
</div>
<!-- end section-container -->
@endsection