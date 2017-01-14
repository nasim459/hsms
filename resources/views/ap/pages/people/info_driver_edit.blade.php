@section('maincontent')
<!-- begin breadcrumb -->
<ol class="breadcrumb pull-right">
    <li><a href="{{URL::to('dboard')}}" title="Go Dahsboard">Dashboard</a></li>
    <li class="active">Registration</li>
</ol>
<ol class="breadcrumb pull-left">
    <li><a href="{{URL::to('info-driver')}}" class="btn btn-sm btn-white" title="Go Back"><i class="fa fa-arrow-left"></i></a></li>
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
                        <strong class="text-success ">Update Driver Information</strong>
                    </h4>
                </div>
                <div class="panel-body">
                    <!-- begin row panel body --->
                    <div class="row well">

                        <!-- begin section-container -->
                        <div class="section-container">
                            <!--<form action="{{URL::to('info-driver-update')}}" method="post" class="form-horizontal" data-parsley-validate="true" name="demo-form">-->
                                {!! Form::open(array('url'=>'info-driver-update', 'role'=>'form', 'method'=>'POST')) !!}
                                <!-- begin Building Place -->
<!--                                <div class="col-md-8 col-md-offset-1">
                                    <div class="form-group">
                                        <label class="control-label col-sm-4" for="fullname"><b>Select Driver Owner </b><span class="text-danger">*</span></label>
                                        <div class="col-sm-8">
                                            <input class="form-control" type="text" id="fullname" name="rntl_name" placeholder="Write Driver Owner Name" data-parsley-required="true" />
                                        </div>
                                    </div>
                                </div>-->
                                <!-- end Building Place -->
                                @foreach($edit_driver as $d)
                                <div class="col-md-12 m-t-15">
                                    &nbsp;<hr class="hr-d m-b-30">&nbsp;
                                    <!-- start Personal Information -->
                                    <div class="col-md-6">
                                        <strong class="text-success">Personal Information</strong>

                                        <div class="form-group m-t-10">
                                             <input class="form-control text-center" type="hidden" name="driver_id" value="{{$d->driver_id}}" />
                                                <input class="form-control text-center" type="hidden" name="driver_details_id" value="{{$d->driver_details_id}}" />
                                            <label class="control-label col-sm-4" for="fullname">Driver Name <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text" id="fullname" name="name" value="{{$d->driver_name}}" placeholder="Driver Name" data-parsley-required="true" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="fullname">Son Off / Wife Off <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text" id="fullname" name="son_wife_off" value="{{$d->driver_son_wife_off}}" placeholder="Son Off or Wife Off" data-parsley-required="true" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="fullname">National ID <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text" id="fullname" name="national_id" value="{{$d->driver_national_id}}" placeholder=" National ID" data-parsley-required="true" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="fullname">Passport No <span class="text-danger"></span></label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text" id="fullname" name="passport_no" value="{{$d->driver_passport_no}}" placeholder=" Passport No" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="fullname">Driving Licence <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text" id="fullname" name="driving_licence" value="{{$d->driver_licence_no}}" placeholder="Driving Licence"  />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="fullname">Car Registration No <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text" id="fullname" name="driver_car_regi_no" value="{{$d->driver_car_regi_no}}" placeholder="Car Registration No"  />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="fullname">Mobile No <span class="text-danger">*</span></label>
                                            <div class="col-sm-4">
                                                <input class="form-control" type="text" id="fullname" name="driver_phone1" value="{{$d->driver_phone1}}" placeholder="01xxxxxxxxx"  />
                                            </div>
                                            <div class="col-sm-4">
                                                <input class="form-control" type="text" id="fullname" name="driver_phone2" value="{{$d->driver_phone2}}" placeholder="01xxxxxxxxx"  />
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
                                                <input class="form-control" type="text" id="email" name="dpi_village" value="{{$d->dpi_village}}" placeholder="Driver Village"   />
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="email">Police Station <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text" id="email" name="dpi_police_station" value="{{$d->dpi_police_station}}" placeholder="Driver Police Station"   />
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="email">District <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <input class="form-control" type="text" id="email" name="dpi_district" value="{{$d->dpi_district}}" placeholder="Driver district"/>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group  m-t-10">
                                            <label class="control-label col-sm-4">Country <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <select class="form-control" id="select-required" name="dpi_country" >
                                                    <option >{{$d->dpi_country}}</option>
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
                                                    <option>{{$d->dpi_religion}}</option>
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
                                                        @if($d->dpi_gender== 1)
                                                        <input type="radio" value="1" name="g_radio" checked="" id="radio-required"  /> Male <span class="m-l-40"></span>
                                                        @else
                                                        <input type="radio" value="2" name="g_radio" checked="" id="radio-required2" /> Female
                                                        @endif
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="fullname">Picture <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <input  type="file" name="filename" id="fileToUpload" >
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