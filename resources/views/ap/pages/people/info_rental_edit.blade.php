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
                        <strong class="text-success ">Edit Your Information</strong>
                    </h4>
                </div>
                <div class="panel-body">
                    <!-- begin row panel body --->
                    <div class="row well">

                        <!-- begin section-container -->
                        <div class="section-container">
                            {!! Form::open(array('url'=>'info-rental-update', 'role'=>'form', 'method'=>'POST')) !!}
                            <span class="form-horizontal" data-parsley-validate="true" name="demo-form">
                                
                                
                                <input type="hidden" value="$previous_page" name="previous_page_url" />
                                @foreach($edit_rental as $v)
                                <!-- begin Building Place -->
                                <div class="col-md-8 col-md-offset-1">
                                    <div class="form-group">
                                        <label class="control-label col-sm-3">Building Place <span class="text-danger">*</span></label>
                                        <div class="col-sm-3">
                                            <select class="form-control" id="select-required" name="building" data-parsley-required="true">
                                                <option value="{{$v->bld_name}}">{{$v->bld_name}} - Building</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-3">
                                            <select class="form-control" id="select-required" name="floor" data-parsley-required="true">
                                                <option value="{{$v->bld_floor}}">{{$v->bld_floor}} - Floor</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-3">
                                            <select class="form-control" id="select-required" name="unit" data-parsley-required="true">
                                                <option value="{{$v->bld_unit}}">{{$v->bld_unit}} - Unit</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- end Building Place -->
                                
                                <!-- start Hidden id with value -->
                                
                                
                                <input type="hidden" value="{{$v->flat_info_id}}" name="flat_info_id" />
                                <input type="hidden" value="{{$v->rental_id}}" name="rental_id" />
                                <input type="hidden" value="{{$v->rental_details_id}}" name="rental_details_id" />
                                <input type="hidden" value="{{$v->rental_family_id}}" name="rental_family_id" />
                                <input type="hidden" value="{{$v->rental_reference_id}}" name="rental_reference_id" />
                                <!-- end Hidden id with value -->

                                <div class="col-md-12 m-t-15">
                                    &nbsp;<hr class="hr-d m-b-30">&nbsp;
                                    <!-- start Personal Information -->
                                    <div class="col-md-6">
                                        <strong class="text-success">Personal Information</strong>

                                        <div class="form-group m-t-10">
                                            <label class="control-label col-sm-4" for="fullname">Rental Name <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text" id="fullname" value="{{$v->rental_name}}" name="rntl_name" placeholder="Rental Name" data-parsley-required="true" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="fullname">Son Off / Wife Off <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text" id="fullname" value="{{$v->son_wife_off}}" name="son_wife_off" placeholder="Son Off or Wife Off" data-parsley-required="true" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="fullname">National ID <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text" id="fullname" value="{{$v->national_no}}" name="national_no" placeholder=" National ID" data-parsley-required="true" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="fullname">Passport No <span class="text-danger"></span></label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text" id="fullname" value="{{$v->passport_no}}" name="passport_no" placeholder="Passport No" data-parsley-required="true" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="fullname">Mobile No <span class="text-danger">*</span></label>
                                            <div class="col-sm-4">
                                                <input class="form-control" type="number" id="fullname" value="{{$v->rental_phone_1}}" name="rntl_phone1" placeholder="01xxxxxxxxx" data-parsley-required="true" />
                                            </div>
                                            <div class="col-sm-4">
                                                <input class="form-control" type="number" id="fullname" value="{{$v->phone_2}}" name="rntl_phone2" placeholder="01xxxxxxxxx" data-parsley-required="true" />
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
                                                <input class="form-control" type="text" id="email" value="{{$v->rental_email}}" name="rntl_email" data-parsley-type="email" placeholder="example@example.com"  data-parsley-required="true"  />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="fullname">Birth Date <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="date" id="fullname" value="{{$v->birth_date}}" name="birth_day" placeholder="Required" data-parsley-required="true" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="fullname">Education <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text" id="fullname" value="{{$v->occupation}}" name="qualification" placeholder="Education Qualification ..." data-parsley-required="true" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="fullname">Address <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text" id="fullname" value="{{$v->office_address}}" name="office_address" placeholder="Office Address ..." data-parsley-required="true" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label class="control-label col-sm-4">Parking <span class="text-danger">*</span></label>
                                                <div class="col-sm-8 m-t-5">
                                                    <label>
                                                        @if($v->parking ==1)
                                                        <input type="radio" value="1" name="c_radio" checked id="radio-required" data-parsley-required="true" /> Yes <span class="m-l-40"></span>
                                                        <input type="radio" value="2" name="c_radio" id="radio-required2" /> No
                                                        @else
                                                        <input type="radio" value="1" name="c_radio" id="radio-required" data-parsley-required="true" /> Yes <span class="m-l-40"></span>
                                                        <input type="radio" value="2" name="c_radio" checked id="radio-required2" /> No
                                                        @endif
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <label class="control-label col-sm-4">Gender <span class="text-danger">*</span></label>
                                                <div class="col-sm-8 m-t-5">
                                                    <label>
                                                        @if($v->gender ==1)
                                                        <input type="radio" value="1" name="g_radio" checked id="radio-required" data-parsley-required="true" /> Mail <span class="m-l-40"></span>
                                                        <input type="radio" value="2" name="g_radio" id="radio-required2" /> Femail
                                                        @else
                                                        <input type="radio" value="1" name="g_radio" id="radio-required" data-parsley-required="true" /> Mail <span class="m-l-40"></span>
                                                        <input type="radio" value="2" name="g_radio" checked id="radio-required2" /> Femail
                                                        @endif
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
                                                    <option value="{{$v->pi_country}}">{{$v->pi_country}}</option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="fullname">District <span class="text-danger"></span></label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text" id="fullname" value="{{$v->pi_district}}" name="pi_district" placeholder="Enter District Name" data-parsley-required="true" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="fullname">Thana <span class="text-danger"></span></label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text" id="fullname" value="{{$v->pi_thana}}" name="pi_thana" placeholder="Enter Thana Name" data-parsley-required="true" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="fullname">Village <span class="text-danger"></span></label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text" id="fullname" value="{{$v->pi_village}}" name="pi_village" placeholder="Enter Village Name" data-parsley-required="true" />
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
                                                <input class="form-control" type="text" id="fullname" value="{{$v->ei_name}}" name="ei_name" placeholder="Write Name" data-parsley-required="true" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="fullname">Mobile No <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="number" id="fullname" value="{{$v->ei_phone}}" name="ei_phone" placeholder="01xxxxxxxxxx" data-parsley-required="true" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="fullname">Relation <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text" id="fullname" value="{{$v->ei_relation}}" name="ei_relation" placeholder="Relation with him..." data-parsley-required="true" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="fullname">Address <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text" id="fullname" value="{{$v->ei_address}}" name="ei_address" placeholder="Emergency Address" data-parsley-required="true" />
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
                                                <input class="form-control" type="text" id="fullname" value="{{$v->psi_owner_name}}" name="psi_name" placeholder="Previous Owner Name" data-parsley-required="true" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="fullname">Mobile No <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="number" id="fullname" value="{{$v->psi_phone}}" name="psi_phone" placeholder="01xxxxxxxxxx" data-parsley-required="true" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="fullname">Cause <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text" id="fullname" value="{{$v->psi_cause}}" name="psi_cause" placeholder="Why leave from that home?" data-parsley-required="true" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="fullname">Address <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text" id="fullname" value="{{$v->psi_address}}" name="psi_address" placeholder="Owner Address" data-parsley-required="true" />
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
                                                <input class="form-control" type="text" id="fullname" value="{{$v->r_name}}" name="r_name" placeholder="Reference Name" data-parsley-required="true" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="fullname">Mobile No <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="number" id="fullname" value="{{$v->r_phone}}" name="r_phone" placeholder="01xxxxxxxxxx" data-parsley-required="true" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="fullname">Address <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text" id="fullname" value="{{$v->r_address}}" name="r_address" placeholder="Owner Address" data-parsley-required="true" />
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
                                            <input class="form-control" type="text" id="fullname" value="{{$v->f_name}}" name="f_name" placeholder="Member Name" data-parsley-required="true" />
                                        </div>
                                    </div>

                                    <div class="form-group m-t-10">
                                        <label class="control-label col-sm-3" for="fullname">Occupation <span class="text-danger">*</span></label>
                                        <div class="col-sm-6">
                                            <input class="form-control" type="text" id="fullname" value="{{$v->f_occupation}}" name="f_occupation" placeholder="Occupation Name" data-parsley-required="true" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="fullname">Mobile No <span class="text-danger">*</span></label>
                                        <div class="col-sm-6">
                                            <input class="form-control" type="number" id="fullname" value="{{$v->f_phone}}" name="f_phone" placeholder="01xxxxxxxxxx" data-parsley-required="true" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="fullname">Staying <span class="text-danger">*</span></label>
                                        <div class="col-sm-6">
                                            <input class="form-control" type="text" id="fullname" value="{{$v->f_staying}}" name="f_staying" placeholder="Where staying this member ...?" data-parsley-required="true" />
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-3" for="fullname">Age <span class="text-danger">*</span></label>
                                        <div class="col-sm-6">
                                            <input class="form-control" type="text" id="fullname" value="{{$v->f_age}}" name="f_age" placeholder="How age" data-parsley-required="true" />
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

                </div>
            </div>
            <!-- end panel -->
        </div>
    </div>
    <!-- end row -->

</div>
<!-- end section-container -->
@endsection