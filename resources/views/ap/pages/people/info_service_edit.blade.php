@section('maincontent')
<!-- begin breadcrumb -->
<ol class="breadcrumb pull-right">
    <li><a href="{{URL::to('dboard')}}" title="Go Dahsboard">Dashboard</a></li>
    <li class="active">Registration</li>
</ol>
<ol class="breadcrumb pull-left">
    <li><a href="{{URL::to('info-service')}}" class="btn btn-sm btn-white" title="Go Back"><i class="fa fa-arrow-left"></i></a></li>
    <span class="text-white m-l-15"> Upate Your Account </span>
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
                        <strong class="text-success ">Update Service People</strong>
                    </h4>
                </div>
                <div class="panel-body">
                    <!-- begin row panel body --->
                    <div class="row well">

                        <!-- begin section-container -->
                        <div class="section-container">
                            {!! Form::open(array('url'=>'info-service-update', 'role'=>'form', 'method'=>'POST')) !!}
                            <span action="{{URL::to('regi-s-people-save')}}" class="form-horizontal" data-parsley-validate="true" name="demo-form">
                                @foreach($service_edit as $v)
                                <div class="col-md-12 m-t-15">
                                    <!-- start Personal Information -->
                                    <div class="col-md-8 col-md-offset-2">

                                        <div class="form-group">
                                            <label class="control-label col-sm-3" for="fullname"> <strong>Service Name</strong> <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text" id="fullname" name="a" value="{{$v->service_type}}" data-parsley-required="true" />
                                                <input type="hidden" name="s_p_id" value="{{$v->service_person_id}}" />
                                                <input type="hidden" name="s_id" value="{{$v->service_id}}" />
                                            </div>
                                        </div><hr class="hr-d m-b-15">

                                        <strong class="text-success">Personal Information</strong>
                                        <div class="form-group m-t-10">
                                            <label class="control-label col-sm-3" for="fullname">Person Name <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text" id="fullname" name="b" value="{{$v->service_person_name}}" data-parsley-required="true" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-3" for="fullname">Mobile No <span class="text-danger">*</span></label>
                                            <div class="col-sm-4">
                                                <input class="form-control" type="text" id="fullname" name="c" value="{{$v->service_person_phone1}}" data-parsley-required="true" />
                                            </div>
                                            <div class="col-sm-4">
                                                <input class="form-control" type="text" id="fullname" name="d" value="{{$v->service_person_phone2}}" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-3" for="fullname">Address <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text" id="fullname" name="e" value="{{$v->service_person_address}}" data-parsley-required="true" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-3">Gender <span class="text-danger">*</span></label>
                                            <div class="col-sm-8 m-t-5">
                                                <label>
                                                    @if($v->service_person_gender == 1)
                                                    <input type="radio" value="1" name="g_radio" checked="" id="radio-required" data-parsley-required="true" /> Male <span class="m-l-40"></span>
                                                    <input type="radio" value="2" name="g_radio" id="radio-required2" data-parsley-required="true" /> Female
                                                    @else
                                                    <input type="radio" value="1" name="g_radio" id="radio-required" data-parsley-required="true" /> Male <span class="m-l-40"></span>
                                                    <input type="radio" value="2" name="g_radio" checked="" id="radio-required2" data-parsley-required="true" /> Female
                                                    @endif
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
                                @endforeach()

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
