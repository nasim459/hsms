@section('maincontent')
<!-- begin section-container -->
<div class="section-container" ng-controller="driverController">
    <!-- begin row -->
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <!-- begin panel -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-sm btn-white btn-inverse" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-sm btn-white btn-inverse" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                    </div>
                    <h4 class="panel-title text-left">
                        <a href="{{URL::to(Session::get('regi_d_p_u'))}}" class="btn btn-sm btn-white" title="Go Back"><i class="fa fa-arrow-left"></i></a>
                    </h4>
                    <h4 class="panel-title text-center" style="margin-top: -18px">
                        <strong class="text-success ">Driver Registration Form</strong>
                    </h4>
                </div>
                <div class="panel-body">
                    <!-- begin row panel body --->
                    <div class="row well">

                        <!-- begin section-container -->
                        <div class="section-container">
                            {!! Form::open(array('url'=>'regi-driver-save', 'role'=>'form', 'method'=>'POST', 'files'=>'true')) !!}
                            <span class="form-horizontal" data-parsley-validate="true" name="demo-form">
                            
                                <div class="col-md-12 m-t-15">
                                    &nbsp;<hr class="hr-d m-b-30">&nbsp;
                                    <!-- start Personal Information -->
                                    <div class="col-md-6">
                                        <strong class="text-success">Personal Information</strong>

                                        <div class="form-group m-t-10">
                                            <label class="control-label col-sm-4" for="fullname">Driver Name <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text" id="fullname" name="name" placeholder="Driver Name" data-parsley-required="true" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="fullname">Son Off / Wife Off <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text" id="fullname" name="son_wife_off" placeholder="Son Off or Wife Off" data-parsley-required="true" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="fullname">National ID <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="number" id="fullname" name="national_id" placeholder=" National ID" data-parsley-required="true" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="fullname">Passport No <span class="text-danger"></span></label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text" id="fullname" name="passport_no" placeholder=" Passport No" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="fullname">Driving Licence <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text" id="fullname" name="driving_licence" placeholder="Driving Licence"  />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="fullname">Car Registration No <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text" id="fullname" name="driver_car_regi_no" placeholder="Car Registration No"  />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="fullname">Mobile No <span class="text-danger">*</span></label>
                                            <div class="col-sm-4">
                                                <input class="form-control" type="number" id="fullname" name="driver_phone1" placeholder="01xxxxxxxxx"  />
                                            </div>
                                            <div class="col-sm-4">
                                                <input class="form-control" type="number" id="fullname" name="driver_phone2" placeholder="01xxxxxxxxx"  />
                                            </div>
                                        </div>


                                    </div>
                                    <!-- end Personal Information -->

                                    <!-- start Personal Information -->
                                    <div class="col-md-6">
                                        <strong class="text-success">Personal Information</strong>

                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="email">Village</label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text" id="email" name="dpi_village"  placeholder="Driver Village"   />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="email">Police Station <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text" id="email" name="dpi_police_station"  placeholder="Driver Police Station"   />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="email">District <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text" id="email" name="dpi_district" placeholder="Driver district"/>
                                            </div>
                                        </div>

                                        <div class="form-group  m-t-10">
                                            <label class="control-label col-sm-4">Country <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <select class="form-control" id="select-required" name="dpi_country" >
                                                    <option value="">Select Country</option>
                                                    <option value="Bangladesh">Bangladesh</option>
                                                    <option value="India">India</option>
                                                    <option value="Pakistan">Pakistan</option>
                                                    <option value="Sri_lanka">Sri Lanka</option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group  m-t-10">
                                            <label class="control-label col-sm-4">Religion <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <select class="form-control" id="select-required" name="dpi_religion" >
                                                    <option value="">Select Religion</option>
                                                    <option value="islam">Islam</option>
                                                    <option value="hindue">Hindue</option>

                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label class="control-label col-sm-4">Gender <span class="text-danger">*</span></label>
                                                <div class="col-sm-8 m-t-5">
                                                    <label>
                                                        <input type="radio" value="1" name="g_radio" id="radio-required"  /> Male <span class="m-l-40"></span>
                                                        <input type="radio" value="2" name="g_radio" id="radio-required2" /> Female
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="fullname">Picture <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <input  type="file" name="image" id="fileToUpload" />
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

                </div>
            </div>
            <!-- end panel -->
        </div>
    </div>
    <!-- end row -->

    <!--start modal------------------------------------------------------->
    <div class="col-md-6">
        <div class="clearfix m-b-25">

            <!--start show_service_people_picture-->
            <div class="modal fade" id="driver-picture">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title text-center">Service Person Picture</h4>
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
                                                            <img src="@{{picture.service_person_image}}" class="img-md-h-w" alt="">
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
            <!--end show_service_people_picture-->
            
        </div>
    </div>
    <!--end modal------------------------------------------------------->
    
    
</div>
<!-- end section-container -->
@endsection