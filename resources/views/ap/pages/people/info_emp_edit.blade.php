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
                        <strong class="text-success ">Update Employer Information</strong>
                    </h4>
                </div>
                <div class="panel-body">
                    <!-- begin row panel body --->
                    <div class="row well">

                        <!-- begin section-container -->
                        <div class="section-container">
                            {!! Form::open(array('url'=>'info-emp-update', 'role'=>'form', 'method'=>'POST')) !!}
                            <span class="form-horizontal" data-parsley-validate="true" name="demo-form">
                                @foreach($edit_emp as $v)
                                <div class="col-md-12">
                                    <!-- start Personal Information -->
                                    <div class="col-md-6">
                                        <strong class="text-success">Personal Information</strong>

                                        <div class="form-group m-t-10">
                                            <label class="control-label col-sm-4" for="fullname">ID <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <input class="form-control text-center" type="text" id="fullname" value="{{$v->emp_id_no}}" disabled="" data-parsley-required="true" />
                                                <input class="form-control text-center" type="hidden" name="emp_id" value="{{$v->emp_id}}" />
                                                <input class="form-control text-center" type="hidden" name="emp_details_id" value="{{$v->emp_details_id}}" />
                                            </div>
                                        </div>
                                        
                                        <div class="form-group  m-t-10">
                                            <label class="control-label col-sm-4">Position <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <select class="form-control" id="select-required" name="position" data-parsley-required="true">
                                                    <option value="{{$v->emp_position}}"> {{$v->emp_position}}</option>
                                                    <option value="Manager">Manager</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group m-t-10">
                                            <label class="control-label col-sm-4" for="fullname">Employee Name <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text" id="fullname" name="emp_name" value="{{$v->emp_name}}" data-parsley-required="true" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="fullname">Son Off / Wife Off <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text" id="fullname" name="son_wife_off"  value="{{$v->son_wife_off}}" data-parsley-required="true" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="fullname">National ID <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text" id="fullname" name="national_no"  value="{{$v->national_no}}" data-parsley-required="true" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="fullname">Passport No <span class="text-danger"></span></label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text" id="fullname" name="passport_no" value="{{$v->passport_no}}" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="fullname">Present Address <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text" id="fullname" name="address" value="{{$v->present_address}}" data-parsley-required="true" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="email">E-Mail <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text" id="email" name="email" value="{{$v->emp_email}}" data-parsley-type="email" data-parsley-required="true" />
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <!-- end Personal Information -->

                                    <!-- start Personal Information -->
                                    <div class="col-md-6">
                                        <strong class="text-success">Permanent Information</strong>

                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="fullname">Mobile No <span class="text-danger">*</span></label>
                                            <div class="col-sm-4">
                                                <input class="form-control" type="text" id="fullname" name="phone1" value="{{$v->emp_phone1}}" data-parsley-required="true" />
                                            </div>
                                            <div class="col-sm-4">
                                                <input class="form-control" type="text" id="fullname" name="phone2" value="{{$v->emp_phone2}}" data-parsley-required="true" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="fullname">Birth Date <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="date" id="fullname" name="date" value="{{$v->birth_date}}" data-parsley-required="true" />
                                            </div>
                                        </div>

                                        <div class="form-group  m-t-10">
                                            <label class="control-label col-sm-4">Country <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <select class="form-control" id="select-required" name="country" data-parsley-required="true">
                                                    <option value="{{$v->epa_country}}">{{$v->epa_country}}</option>
                                                    <option value="Bangladesh">Bangladesh</option>
                                                    <option value="India">India</option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="fullname">District <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text" id="fullname" name="district" value="{{$v->epa_district}}"  data-parsley-required="true"  />
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="fullname">Thana <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text" id="fullname" name="thana" value="{{$v->epa_thana}}"  data-parsley-required="true"  />
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="fullname">Village</label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text" id="email" name="village" value="{{$v->epa_village}}"  data-parsley-required="true"  />
                                            </div>
                                        </div>
                                        
                                        <div class="form-group  m-t-10">
                                            <label class="control-label col-sm-4">Religion <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <select class="form-control" id="select-required" name="religion" data-parsley-required="true">
                                                    <option value="{{$v->emp_religion}}">{{$v->emp_religion}}</option>
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
                                                        @if($v->emp_gender == 1)
                                                        <input type="radio" value="1" name="gender" checked="" id="radio-required" data-parsley-required="true" /> Male <span class="m-l-40"></span>
                                                        @else
                                                        <input type="radio" value="2" name="gender" checked="" id="radio-required2" /> Female
                                                        @endif
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
                                @endforeach()

                                <!-- begin submit button -->
                                <div class="form-group">
                                    <label class="control-label col-sm-4"></label>
                                    <div class="col-sm-5">
                                        <button type="submit" class="btn btn-success width-xs">Update</button>
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