@section('maincontent')
<!-- begin breadcrumb -->
<ol class="breadcrumb pull-right">
    <li><a href="{{URL::to('dboard')}}" title="Go Dahsboard">Dashboard</a></li>
    <li class="active">Registration</li>
</ol>
<ol class="breadcrumb pull-left">
    <li><a href="{{URL::to('info-owner')}}" class="btn btn-sm btn-white" title="Go Back"><i class="fa fa-arrow-left"></i></a></li>
    <span class="text-white m-l-15"> Create A New Account </span>
</ol>
<!-- end breadcrumb -->

<!-- begin section-container -->
<div class="section-container">
    <!-- begin row -->
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <!-- begin panel -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-inverse" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-inverse" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-inverse" data-click="panel-remove"><i class="fa fa-times"></i></a>
                    </div>
                    <h4 class="panel-title text-center">
                        <strong class="text-success ">Create Your Registration</strong>
                    </h4>
                </div>
                <div class="panel-body">
                    <!-- begin row panel body --->
                    <div class="row well">

                        <!-- begin section-container -->
                        <div class="section-container">
                            <form action="{{URL::to('regi-rental-save')}}" class="form-horizontal" data-parsley-validate="true" name="demo-form">

                                <!-- begin Building Place -->
                                <div class="col-md-8 col-md-offset-1">
                                    <div class="form-group">
                                        <label class="control-label col-sm-3">Building Place <span class="text-danger">*</span></label>
                                        <div class="col-sm-3">
                                            <select class="form-control" id="select-required" name="building" data-parsley-required="true">
                                                <option>Building</option>
                                                <option value="01">01</option>
                                                <option value="02">02</option>
                                                <option value="03">03</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-3">
                                            <select class="form-control" id="select-required" name="floor" data-parsley-required="true">
                                                <option value="">Floor</option>
                                                <option value="01">01 Floor</option>
                                                <option value="02">02 Floor</option>
                                                <option value="03">03 Floor</option>
                                                <option value="04">04 Floor</option>
                                                <option value="05">05 Floor</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-3">
                                            <select class="form-control" id="select-required" name="unit" data-parsley-required="true">
                                                <option value="">Unit</option>
                                                <option value="A">A</option>
                                                <option value="B">B</option>
                                                <option value="C">C</option>
                                                <option value="D">D</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- end Building Place -->

                                <div class="col-md-12 m-t-15">
                                    &nbsp;<hr class="hr-d m-b-30">&nbsp;
                                    <!-- start Personal Information -->
                                    <div class="col-md-6">
                                        <strong class="text-success">Personal Information</strong>

                                        <div class="form-group m-t-10">
                                            <label class="control-label col-sm-4" for="fullname">Rental Name <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text" id="fullname" name="rntl_name" placeholder="Rental Name" data-parsley-required="true" />
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
                                                <input class="form-control" type="text" id="fullname" name="national_no" placeholder=" National ID" data-parsley-required="true" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="fullname">Passport No <span class="text-danger"></span></label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text" id="fullname" name="passport_no" placeholder="Passport No" data-parsley-required="true" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="fullname">Mobile No <span class="text-danger">*</span></label>
                                            <div class="col-sm-4">
                                                <input class="form-control" type="text" id="fullname" name="rntl_phone1" placeholder="01xxxxxxxxx" data-parsley-required="true" />
                                            </div>
                                            <div class="col-sm-4">
                                                <input class="form-control" type="text" id="fullname" name="rntl_phone2" placeholder="01xxxxxxxxx" data-parsley-required="true" />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end Personal Information -->

                                    <!-- start Personal Information -->
                                    <div class="col-md-6">
                                        <strong class="text-success">Personal Information</strong>

                                        <div class="form-group  m-t-10">
                                            <label class="control-label col-sm-4" for="email">Email Address</label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text" id="email" name="rntl_email" data-parsley-type="email" placeholder="example@example.com"  data-parsley-required="true"  />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="fullname">Birth Date <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="date" id="fullname" name="birth_day" placeholder="Required" data-parsley-required="true" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="fullname">Education <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text" id="fullname" name="qualification" placeholder="Education Qualification ..." data-parsley-required="true" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="fullname">Address <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text" id="fullname" name="office_address" placeholder="Office Address ..." data-parsley-required="true" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label class="control-label col-sm-4">Parking <span class="text-danger">*</span></label>
                                                <div class="col-sm-8 m-t-5">
                                                    <label>
                                                        <input type="radio" value="1" name="c_radio" id="radio-required" data-parsley-required="true" /> Yes <span class="m-l-40"></span>
                                                        <input type="radio" value="2" name="c_radio" id="radio-required2" /> No
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <label class="control-label col-sm-4">Gender <span class="text-danger">*</span></label>
                                                <div class="col-sm-8 m-t-5">
                                                    <label>
                                                        <input type="radio" value="1" name="g_radio" id="radio-required" data-parsley-required="true" /> Male <span class="m-l-40"></span>
                                                        <input type="radio" value="2" name="g_radio" id="radio-required2" /> Female
                                                    </label>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <!-- end Personal Information -->
                                </div>
                                
                                <div class="col-md-12">
                                    &nbsp;<hr class="hr-d m-b-30">&nbsp;
                                    <!-- start Permanent Information -->
                                    <div class="col-md-6">
                                        <strong class="text-success">Permanent Information</strong>

                                        <div class="form-group  m-t-10">
                                            <label class="control-label col-sm-4">Country <span class="text-danger"></span></label>
                                            <div class="col-sm-8">
                                                <select class="form-control" id="select-required" name="pi_country" data-parsley-required="true">
                                                    <option value="">Select Country</option>
                                                    <option value="Bangladesh">Bangladesh</option>
                                                    <option value="India">India</option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="fullname">District <span class="text-danger"></span></label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text" id="fullname" name="pi_district" placeholder="Enter District Name" data-parsley-required="true" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="fullname">Thana <span class="text-danger"></span></label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text" id="fullname" name="pi_thana" placeholder="Enter Thana Name" data-parsley-required="true" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="fullname">Village <span class="text-danger"></span></label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text" id="fullname" name="pi_village" placeholder="Enter Village Name" data-parsley-required="true" />
                                            </div>
                                        </div>

                                    </div>
                                    <!-- end Permanent Information -->

                                    <!-- start Emergency Information -->
                                    <div class="col-md-6">
                                        <strong class="text-success">Emergency Information</strong>

                                        <div class="form-group  m-t-10">
                                            <label class="control-label col-sm-4" for="fullname">Contact Name <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text" id="fullname" name="ei_name" placeholder="Write Name" data-parsley-required="true" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="fullname">Mobile No <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text" id="fullname" name="ei_phone" placeholder="01xxxxxxxxxx" data-parsley-required="true" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="fullname">Relation <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text" id="fullname" name="ei_relation" placeholder="Relation with him..." data-parsley-required="true" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="fullname">Address <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text" id="fullname" name="ei_address" placeholder="Emergency Address" data-parsley-required="true" />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end Emergency Information -->
                                </div>

                                <div class="col-md-12">
                                    &nbsp;<hr class="hr-d m-b-30">&nbsp;
                                    <!-- start Previous Staying Information -->
                                    <div class="col-md-6">
                                        <strong class="text-success">Previous Staying Information</strong>

                                        <div class="form-group m-t-10  m-t-10">
                                            <label class="control-label col-sm-4" for="fullname">Owner Name <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text" id="fullname" name="psi_name" placeholder="Previous Owner Name" data-parsley-required="true" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="fullname">Mobile No <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text" id="fullname" name="psi_phone" placeholder="01xxxxxxxxxx" data-parsley-required="true" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="fullname">Cause <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text" id="fullname" name="psi_cause" placeholder="Why leave from that home?" data-parsley-required="true" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="fullname">Address <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text" id="fullname" name="psi_address" placeholder="Owner Address" data-parsley-required="true" />
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <!-- end Previous Staying Information -->

                                    <!-- start Reference Information -->
                                    <div class="col-md-6">
                                        <strong class="text-success">Reference Information</strong>

                                        <div class="form-group m-t-10">
                                            <label class="control-label col-sm-4" for="fullname">Reference Name <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text" id="fullname" name="r_name" placeholder="Reference Name" data-parsley-required="true" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="fullname">Mobile No <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text" id="fullname" name="r_phone" placeholder="01xxxxxxxxxx" data-parsley-required="true" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="fullname">Address <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text" id="fullname" name="r_address" placeholder="Owner Address" data-parsley-required="true" />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end Reference Information -->
                                </div>
                                
                                <!-- begin Family Member Information -->
                                <div class="col-md-10 col-md-offset-2">
                                    &nbsp;<hr class="hr-d m-b-30">&nbsp;
                                    <strong class="text-success">Rental Family Member Info</strong>

                                    <div class="form-group m-t-10">
                                        <label class="control-label col-sm-3" for="fullname">Member Name <span class="text-danger">*</span></label>
                                        <div class="col-sm-6">
                                            <input class="form-control" type="text" id="fullname" name="f_name" placeholder="Member Name" data-parsley-required="true" />
                                        </div>
                                    </div>

                                    <div class="form-group m-t-10">
                                        <label class="control-label col-sm-3" for="fullname">Occupation <span class="text-danger">*</span></label>
                                        <div class="col-sm-6">
                                            <input class="form-control" type="text" id="fullname" name="f_occupation" placeholder="Occupation Name" data-parsley-required="true" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="fullname">Mobile No <span class="text-danger">*</span></label>
                                        <div class="col-sm-6">
                                            <input class="form-control" type="text" id="fullname" name="f_phone" placeholder="01xxxxxxxxxx" data-parsley-required="true" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="fullname">Staying <span class="text-danger">*</span></label>
                                        <div class="col-sm-6">
                                            <input class="form-control" type="text" id="fullname" name="f_staying" placeholder="Where staying this member ...?" data-parsley-required="true" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="fullname">Age <span class="text-danger">*</span></label>
                                        <div class="col-sm-6">
                                            <input class="form-control" type="text" id="fullname" name="f_age" placeholder="How age" data-parsley-required="true" />
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="col-md-1 col-md-offset-7">
                                            <a href="" class="btn btn-white btn-xs m-l-20">Add More</a>
                                        </div>
                                    </div>

                                </div>
                                <!-- end Family Member Information -->


                                <!-- begin submit button -->
                                <div class="form-group">
                                    <label class="control-label col-sm-4"></label>
                                    <div class="col-sm-5">
                                        <button type="submit" class="btn btn-success width-xs">Submit</button>
                                    </div>
                                </div>
                                <!-- end submit button -->

                            </form>
                        </div>
                        <!-- end section-container -->    

                    </div>

                </div>
            </div>
            <!-- end panel -->
        </div>
    </div>
    <!-- end row -->

</div>
<!-- end section-container -->
@endsection