@section('maincontent')
<!-- begin section-container -->
<div class="section-container">
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
                        <a href="{{URL::to(Session::get('regi_emp_p_u'))}}" class="btn btn-sm btn-white" title="Go Back"><i class="fa fa-arrow-left"></i></a>
                    </h4>
                    <h4 class="panel-title text-center" style="margin-top: -18px">
                        <strong class="text-success ">Employer Registration Form</strong>
                    </h4>
                </div>
                <div class="panel-body">
                    <!-- begin row panel body --->
                    <div class="row well">

                        <!-- begin section-container -->
                        <div class="section-container">
                            @if(session()->get('emp_inserted') !== NULL)
                            <h4 class="text-center text-success">{{session()->get('emp_inserted')}}</h4>
                            @endif
                            {!! Form::open(array('url'=>'regi-emp-save', 'role'=>'form', 'method'=>'POST', 'files'=>'true')) !!}
                            <span class="form-horizontal" data-parsley-validate="true" name="demo-form">

                                <div class="col-md-12">
                                    <!-- start Personal Information -->
                                    <div class="col-md-6">
                                        <strong class="text-success">Personal Information</strong>

                                        <div class="form-group m-t-10">
                                            <label class="control-label col-sm-4" for="fullname">ID <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text" id="fullname" name="emp_id" placeholder="Employee ID" data-parsley-required="true" />
                                            </div>
                                        </div>
                                        
                                        <div class="form-group  m-t-10">
                                            <label class="control-label col-sm-4">Position <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <select class="form-control" id="select-required" name="position" data-parsley-required="true">
                                                    <option value="">Select Position</option>
                                                    <option value="Manager">Manager</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group m-t-10">
                                            <label class="control-label col-sm-4" for="fullname">Employee Name <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text" id="fullname" name="emp_name" placeholder="Rental Name" data-parsley-required="true" />
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
                                                <input class="form-control" type="text" id="fullname" name="passport_no" placeholder=" National ID" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="fullname">Present Address <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text" id="fullname" name="address" placeholder="Write Present Address" data-parsley-required="true" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="fullname">Mobile No <span class="text-danger">*</span></label>
                                            <div class="col-sm-4">
                                                <input class="form-control" type="text" id="fullname" name="phone1" placeholder="01xxxxxxxxx" data-parsley-required="true" />
                                            </div>
                                            <div class="col-sm-4">
                                                <input class="form-control" type="text" id="fullname" name="phone2" placeholder="01xxxxxxxxx" data-parsley-required="true" />
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <!-- end Personal Information -->

                                    <!-- start Personal Information -->
                                    <div class="col-md-6">
                                        <strong class="text-success">Permanent Information</strong>

                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="email">E-Mail <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text" id="email" name="email" placeholder=" example@gmail.com" data-parsley-type="email" data-parsley-required="true" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="fullname">Birth Date <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="date" id="fullname" name="date" placeholder="Required" data-parsley-required="true" />
                                            </div>
                                        </div>

                                        <div class="form-group  m-t-10">
                                            <label class="control-label col-sm-4">Country <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <select class="form-control" id="select-required" name="country" data-parsley-required="true">
                                                    <option value="">Select Country</option>
                                                    <option value="Bangladesh">Bangladesh</option>
                                                    <option value="India">India</option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="fullname">District <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text" id="fullname" name="district" placeholder="example@example.com"  data-parsley-required="true"  />
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="fullname">Thana <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text" id="fullname" name="thana" placeholder="example@example.com"  data-parsley-required="true"  />
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="fullname">Village</label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text" id="email" name="village" placeholder="example@example.com"  data-parsley-required="true"  />
                                            </div>
                                        </div>
                                        
                                        <div class="form-group  m-t-10">
                                            <label class="control-label col-sm-4">Religion <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <select class="form-control" id="select-required" name="religion" data-parsley-required="true">
                                                    <option value="">Select Religion</option>
                                                    <option value="Islam">Islam</option>
                                                    <option value="Hindue">Hindue</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label class="control-label col-sm-4">Gender <span class="text-danger">*</span></label>
                                                <div class="col-sm-8 m-t-5">
                                                    <label>
                                                        <input type="radio" value="1" name="gender" id="radio-required" data-parsley-required="true" /> Male <span class="m-l-40"></span>
                                                        <input type="radio" value="2" name="gender" id="radio-required2" /> Female
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

</div>
<!-- end section-container -->
@endsection