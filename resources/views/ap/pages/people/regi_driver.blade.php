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
                        <strong class="text-success ">Driver Registration Form</strong>
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
                                        <label class="control-label col-sm-4" for="fullname"><b>Select Driver Owner </b><span class="text-danger">*</span></label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" id="fullname" name="rntl_name" placeholder="Write Driver Owner Name" data-parsley-required="true" />
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
                                            <label class="control-label col-sm-4" for="fullname">Driver Name <span class="text-danger">*</span></label>
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
                                                <input class="form-control" type="text" id="fullname" name="national_no" placeholder=" National ID" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="fullname">Driving Licence <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text" id="fullname" name="passport_no" placeholder="Passport No" data-parsley-required="true" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="fullname">Car Registration No <span class="text-danger">*</span></label>
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

                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="fullname">E-Mail <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text" id="fullname" name="national_no" placeholder=" National ID" data-parsley-required="true" />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end Personal Information -->

                                    <!-- start Personal Information -->
                                    <div class="col-md-6">
                                        <strong class="text-success">Personal Information</strong>

                                        <div class="form-group  m-t-10">
                                            <label class="control-label col-sm-4">Country <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <select class="form-control" id="select-required" name="pi_country" data-parsley-required="true">
                                                    <option value="">Select Country</option>
                                                    <option value="Bangladesh">Bangladesh</option>
                                                    <option value="India">India</option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="email">District <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text" id="email" name="rntl_email" data-parsley-type="email" placeholder="example@example.com"  data-parsley-required="true"  />
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="email">Thana <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text" id="email" name="rntl_email" data-parsley-type="email" placeholder="example@example.com"  data-parsley-required="true"  />
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="email">Village</label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text" id="email" name="rntl_email" data-parsley-type="email" placeholder="example@example.com"  data-parsley-required="true"  />
                                            </div>
                                        </div>
                                        
                                        <div class="form-group  m-t-10">
                                            <label class="control-label col-sm-4">Religion <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <select class="form-control" id="select-required" name="pi_country" data-parsley-required="true">
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
                                                        <input type="radio" value="1" name="g_radio" id="radio-required" data-parsley-required="true" /> Male <span class="m-l-40"></span>
                                                        <input type="radio" value="2" name="g_radio" id="radio-required2" /> Female
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="fullname">Picture <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <input  type="file" name="filename" id="fileToUpload" data-parsley-required="true">
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