@section('people_content')
<!-- begin section-container -->
<div class="section-container" ng-controller="driverController">
    <!-- begin row -->
    <div class="row">
        <!-- begin col-12 -->
        <div class="col-md-12">
            <!-- begin panel -->
            <div class="panel panel-default">

                @foreach($driver_details as $d)
                <div class="panel-heading">
                    <div class="btn-group pull-left">
                        <a href="{{URL::to('info-driver')}}" class="btn btn-white btn-xs" title="Back to Owner"><i class="fa fa-arrow-left"></i>&nbsp;</a>
                    </div>
                    <div class="btn-group pull-right">
                        <button type="button" class="btn btn-white btn-xs">Action</button>
                        <button type="button" class="btn btn-white btn-xs dropdown-toggle" data-toggle="dropdown">
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#update-driver-pic" data-toggle="modal" title="Update Your Picture"><i class="fa fa-pencil"></i> Edit Picture</a></li>
                            <li><a href="{{URL::to('info-driver-edit/'.$d->driver_details_id)}}"><i class="fa fa-edit"></i> Edit All Profile</a></li>
                            <li><a href="{{URL::to('regi-driver')}}"><i class="fa fa-plus"></i> Add Driver</a></li>
                            <li class="divider"></li>
                            <li><a href="{{URL::to('')}}"><i class="fa fa-power-off"></i> SignOut</a></li>
                        </ul>
                    </div> 
                    <div class="row">
                        <div class="col-md-10 col-md-offset-2">
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    
                                    @if($d->driver_image != NULL)
                                    <a href="#update-driver-pic" class="thumbnail m-b-mi-15" data-toggle="modal" title="Update Picture"><img src="{{URL::asset($d->driver_image)}}" class="img-d-h-w" alt="Blank"></a>
                                    @else
                                    <a href="#update-driver-pic" class="thumbnail m-b-mi-15" data-toggle="modal" title="Update Picture"><img src="{{URL::asset('ap/assets/img_blank/img_blank.jpg')}}" class="img-d-h-w" alt=""></a>
                                    @endif
                                </div>
                                <div class="col-md-8">
                                    <p class="f-s-14"><b>&nbsp;<br/>{{$d->driver_name}}<br/></b></p>
                                    <p class="f-s-14">Position: <b class="text-success">Driver</b></p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <p class="f-s-15">
                                    &nbsp;<br/>
                                    Driver Owner Name: <b>Mokbole Khan</b><br/>
                                    Owner Location: <b title="Present Address">{{$d->dpi_police_station}}</b><br/>
                                </p>
                                <p class="f-s-15">
                                    @if(Session::get('driver_img') != NULL)
                                    <b class="text-success-light" title="Work Done!">{{Session::get('driver_img')}}{{Session::put('driver_img', '')}}</b>
                                    @endif
                                    
                                    @if(Session::get('driver_img_error') != NULL)
                                    <b class="text-danger-light" title="Work Done!">{{Session::get('driver_img_error')}}{{Session::put('driver_img_error', '')}}</b>
                                    @endif
                                </p><br/>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="nav nav-tabs col-md-offset-1">
                    <li class="active"><a href="#default-tab-1" data-toggle="tab"><i class="fa fa-user"></i> Profile</a></li>
                    <li class=""><a href="#default-tab-2" data-toggle="tab"><i class="fa fa-list"></i> Details</a></li>
                    <li class=""><a href="#default-tab-3" data-toggle="tab"><i class="fa fa-credit-card"></i> Driver Owner</a></li>
                </ul>
                <div class="tab-content m-b-0">
                    <div class="tab-pane fade active in" id="default-tab-1">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="col-md-7">
                                    <h4><strong class="text-success">Personal Information of {{$d->driver_name}}</strong></h4>
                                    <dl class="dl-horizontal m-b-20">
                                        <dt>Employee Name :</dt>
                                        <dd>{{$d->driver_name}}</dd>
                                        <dt>ID :</dt>
                                        <dd>{{$d->driver_id}}</dd>
                                        <dt>Son off/wife off :</dt>
                                        <dd>{{$d->driver_son_wife_off}}</dd>
                                        <dt>National ID :</dt>
                                        <dd>{{$d->driver_national_id}}</dd>
                                        <dt>Passport No :</dt>
                                        <dd>{{$d->driver_passport_no}}</dd>
                                        <dt>Phone Number :</dt>
                                        <dd>{{$d->driver_phone1}}</dd>
                                        <dd>{{$d->driver_phone2}}</dd>
                                       
                                    </dl>
                                </div>
                                <div class="col-md-5 well">
                                    <div class="table-responsive">
                                        <table class="">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">Facilities</th>
                                                    <th class="text-center"></th>
                                                    <th class="text-center"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="">
                                                        <a href="" class="btn btn-white btn-icon btn-circle btn-sm"><i class="fa fa-automobile"></i></a>&nbsp; 
                                                        <a href=""><b>Driver</b></a>
                                                    </td>
                                                    <td class="text-center">&nbsp; 
                                                        <a href="">Khan Tuhin Alam Khan </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="">
                                                        <a href="" class="btn btn-white btn-icon btn-circle btn-sm"><i class="fa fa-plug"></i></a>&nbsp; 
                                                        <a href=""><b>Cleaner</b></a>
                                                    </td>
                                                    <td class="text-center">&nbsp; 
                                                        <a href="">Khan Tuhin Alam Khan </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="">
                                                        <a href="" class="btn btn-white btn-icon btn-circle btn-sm"><i class="fa fa-street-view"></i></a>&nbsp; 
                                                        <a href=""><b>Housekeeping</b></a>
                                                    </td>
                                                    <td class="text-center">&nbsp; 
                                                        <a href="">Khan Tuhin Alam Khan </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="default-tab-2">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="col-md-6">
                                    <h4><strong class="text-success">Personal Information</strong></h4>
                                    <dl class="dl-horizontal m-b-20">
                                        <dt>Employee Name :</dt>
                                        <dd>{{$d->driver_name}}</dd>
                                        <dt>ID :</dt>
                                        <dd>{{$d->driver_id}}</dd>
                                        <dt>Son off/wife off :</dt>
                                        <dd>{{$d->driver_son_wife_off}}</dd>
                                        <dt>National ID :</dt>
                                        <dd>{{$d->driver_national_id}}</dd>
                                        <dt>Passport No :</dt>
                                        <dd>{{$d->driver_passport_no}}</dd>
                                        <dt>Phone Number :</dt>
                                        <dd>{{$d->driver_phone1}}</dd>
                                        <dd>{{$d->driver_phone2}}</dd>
                                    </dl>
                                </div>
                                <div class="col-md-6">
                                    <h4><strong class="text-success">Personal Information</strong></h4>
                                    <dl class="dl-horizontal m-b-20">
                                      
                                        <dt>Gender :</dt>
                                        @if($d->dpi_gender == 1)
                                        <dd>Mail</dd>
                                        @else
                                        <dd>Femail</dd>
                                        @endif
                                        <dt>Religion :</dt>
                                        <dd>{{$d->dpi_religion}}</dd>
                                        <dt>Car Registration No  :</dt>
                                        <dd>{{$d->driver_car_regi_no}}</dd>
                                        <dt>Driving Licence No  :</dt>
                                        <dd>{{$d->driver_licence_no}}</dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="col-md-6 col-md-offset-3">
                                    <h4><strong class="text-success">Permanent Information</strong></h4>
                                    <dl class="dl-horizontal m-b-20">
                                        <dt>Country :</dt>
                                        <dd>{{$d->dpi_country}}</dd>
                                        <dt>District :</dt>
                                        <dd>{{$d->dpi_district}}</dd>
                                        <dt>Thana :</dt>
                                        <dd>{{$d->dpi_police_station}}</dd>
                                        <dt>Village :</dt>
                                        <dd>{{$d->dpi_village}}</dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="default-tab-3">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-2">
                                <div class="col-md-7 well">
                                    <h4 class="text-center text-success"><b>Personal Information of Driver Owner</b></h4>
                                    <dl class="dl-horizontal m-b-20 col-md-offset-1">
                                        <dt>Employee Name :</dt>
                                        <dd>{{$d->driver_name}}</dd>
                                        <dt>ID :</dt>
                                        <dd>{{$d->driver_id}}</dd>
                                        <dt>Son off/wife off :</dt>
                                        <dd>{{$d->driver_son_wife_off}}</dd>
                                        <dt>National ID :</dt>
                                        <dd>{{$d->driver_national_id}}</dd>
                                        <dt>Passport No :</dt>
                                        <dd>{{$d->driver_passport_no}}</dd>
                                        <dt>Phone Number :</dt>
                                        <dd>{{$d->driver_phone1}}</dd>
                                        <dd>{{$d->driver_phone2}}</dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach()

                </div>

                <!-- end salary registration modal -->

            </div>
            <!-- end panel -->
        </div>
        <!-- end col-6 --> 
    </div>
    <!-- end row -->
    
    <!--start modal------------------------------------------------------->
    <div class="col-md-6">
        <div class="clearfix m-b-25">
            
            <!--start show_service_people_picture-->
            <div class="modal fade" id="update-driver-pic">
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
                                    {!! Form::open(array('url'=>'info-driver-pic-update', 'role'=>'form', 'method'=>'POST', 'files'=>'true')) !!}
                                    <span class="form-horizontal" data-parsley-validate="true" name="demo-form">
                                        @foreach($driver_details as $d)
                                        <div class="col-md-12 m-t-15">
                                            <!--start service_person_Picture-->
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <div class="col-sm-3 m-b-10">

                                                        <a class="thumbnail m-b-mi-15" title="Update Picture">
                                                            @if($d->driver_image != NULL)
                                                            <img src="{{URL::asset($d->driver_image)}}" class="img-sm-h-w" alt="Blank">
                                                            @else
                                                            <img src="{{URL::asset('ap/assets/img_blank/img_blank.jpg')}}" class="img-sm-h-w" alt="">
                                                            @endif
                                                        </a>

                                                        <input type="hidden" name="a" value="{{$d->driver_id}}" />
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
            <!--end show_service_people_picture-->
            
        </div>
    </div>
    <!--end modal--------------------------------------------------------->
    
    
</div>
<!-- end section-container -->
@endsection