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
                    <div class="row">
                        <div class="form-group">
                        <!--<label class="control-label col-sm-2 col-sm-offset-4">Select Option <span class="text-danger">*</span></label>-->
                            <div class="col-sm-2 col-sm-offset-1"></div>
                            <p class="m-t-15"></p>
                            <div class="col-sm-3">
                                <div class="clearfix m-b-20">
                                    <a href="{{URL::to('regi-rental')}}" class="btn btn-success btn-lg m-r-5 m-b-20 width200">Rental</a>
                                    <a href="{{URL::to('regi-driver')}}" class="btn btn-success btn-lg m-r-5 m-b-20 width200" data-toggle="modal">Driver</a>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <a href="{{URL::to('regi-emp')}}" class="btn btn-success btn-lg m-r-5 m-b-20 width200">Employer</a>
                                <a href="#modal-s-people" class="btn btn-success btn-lg m-r-5 m-b-20 width200" data-toggle="modal">Service People</a>
                            </div>
                        </div>
                        <h5 class="m-t-0"></h5>
                        <p class="m-b-15"></p>
                        <div class="col-md-6 col-md-offset-3">
                        </div>
                    </div><hr class="hr-d">
                    <!-- end row panel body --->

                    <!-- begin row panel body --->
                    <div class="row">
                        <div class="m-t-10 m-b-5 text-center"><b>New People Registration</b></div>
                        <p class="m-t-15"></p>

                        <div class="form-group">
                        <!--<label class="control-label col-sm-2 col-sm-offset-4">Select Option <span class="text-danger">*</span></label>-->
                            <div class="col-sm-2 col-sm-offset-1"></div>
                            <div class="col-sm-3">
                                <div class="clearfix m-b-20">
                                    <a href="#modal-guest" class="btn btn-success btn-lg m-r-5 m-b-20 width200" data-toggle="modal">Guest</a>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <a href="#modal-visitor" class="btn btn-success btn-lg m-r-5 m-b-20 width200" data-toggle="modal">Visitor</a>
                            </div>
                        </div>
                        <h5 class="m-t-0"></h5>
                        <p class="m-b-15"></p>
                    </div>
                    <!-- end row panel body --->

                </div>
            </div>
            <!-- end panel -->
        </div>
    </div>
    <!-- end row -->


    <!-- begin service_people registration -->
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
                                    <form action="{{URL::to('regi-s-people-save')}}" class="form-horizontal" data-parsley-validate="true" name="demo-form">

                                        <div class="col-md-12 m-t-15">
                                            <!-- start Personal Information -->
                                            <div class="col-md-12">

                                                <div class="form-group">
                                                    <label class="control-label col-sm-3" for="fullname"> <strong>Service Name</strong> <span class="text-danger">*</span></label>
                                                    <div class="col-sm-8">
                                                        <input class="form-control" type="text" id="fullname" name="service_name" placeholder="Write Service Name" data-parsley-required="true" />
                                                    </div>
                                                </div><hr class="hr-d m-b-15">

                                                <strong class="text-success">Personal Information</strong>
                                                <div class="form-group m-t-10">
                                                    <label class="control-label col-sm-3" for="fullname">Person Name <span class="text-danger">*</span></label>
                                                    <div class="col-sm-8">
                                                        <input class="form-control" type="text" id="fullname" name="person_name" placeholder="Service Person Name" data-parsley-required="true" />
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="control-label col-sm-3" for="fullname">Mobile No <span class="text-danger">*</span></label>
                                                    <div class="col-sm-4">
                                                        <input class="form-control" type="text" id="fullname" name="service_phone1" placeholder="01xxxxxxxxx" data-parsley-required="true" />
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <input class="form-control" type="text" id="fullname" name="service_phone2" placeholder="01xxxxxxxxx" />
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="control-label col-sm-3" for="fullname">Address <span class="text-danger">*</span></label>
                                                    <div class="col-sm-8">
                                                        <input class="form-control" type="text" id="fullname" name="service_address" placeholder="Write Address" data-parsley-required="true" />
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

                                    </form>
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
    <!-- end service_people registration -->

    <!-- begin guest registration -->
    <div class="col-md-6">
        <div class="clearfix m-b-25">
            <!-- #modal-dialog -->
            <div class="modal fade" id="modal-guest">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">Collect Guest Information</h4>
                        </div>
                        <div class="modal-body">
                            <!-- begin row panel body --->
                            <div class="row well">
                                <!-- begin section-container -->
                                <div class="section-container">
                                    <form action="{{URL::to('regi-s-people-save')}}" class="form-horizontal" data-parsley-validate="true" name="demo-form">

                                        <div class="col-md-12 m-t-15">
                                            <!-- start Personal Information -->
                                            <div class="col-md-12">

                                                <div class="form-group">
                                                    <label class="control-label col-sm-3" for="fullname"> <strong>Service Name</strong> <span class="text-danger">*</span></label>
                                                    <div class="col-sm-8">
                                                        <input class="form-control" type="text" id="fullname" name="service_name" placeholder="Write Service Name" data-parsley-required="true" />
                                                    </div>
                                                </div><hr class="hr-d m-b-15">

                                                <strong class="text-success">Personal Information</strong>
                                                <div class="form-group m-t-10">
                                                    <label class="control-label col-sm-3" for="fullname">Person Name <span class="text-danger">*</span></label>
                                                    <div class="col-sm-8">
                                                        <input class="form-control" type="text" id="fullname" name="person_name" placeholder="Service Person Name" data-parsley-required="true" />
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="control-label col-sm-3" for="fullname">Mobile No <span class="text-danger">*</span></label>
                                                    <div class="col-sm-4">
                                                        <input class="form-control" type="text" id="fullname" name="service_phone1" placeholder="01xxxxxxxxx" data-parsley-required="true" />
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <input class="form-control" type="text" id="fullname" name="service_phone2" placeholder="01xxxxxxxxx" />
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="control-label col-sm-3" for="fullname">Address <span class="text-danger">*</span></label>
                                                    <div class="col-sm-8">
                                                        <input class="form-control" type="text" id="fullname" name="service_address" placeholder="Write Address" data-parsley-required="true" />
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
                                            <div class="col-sm-5 m-t-30">
                                                <button type="submit" class="btn btn-success width-xs">Submit</button>
                                            </div>
                                        </div>
                                        <!-- end submit button -->

                                    </form>
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
    <!-- end guest registration -->

    <!-- begin visitor registration -->
    <div class="col-md-6">
        <div class="clearfix m-b-25">
            <!-- #modal-dialog -->
            <div class="modal fade" id="modal-visitor">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title">Collect Visitor Information </h4>
                        </div>
                        <div class="modal-body">
                            <!-- begin row panel body --->
                            <div class="row well">
                                <!-- begin section-container -->
                                <div class="section-container">
                                    <form action="{{URL::to('regi-s-people-save')}}" class="form-horizontal" data-parsley-validate="true" name="demo-form">

                                        <div class="col-md-12 m-t-15">
                                            <!-- start Personal Information -->
                                            <div class="col-md-12">

                                                <div class="form-group">
                                                    <label class="control-label col-sm-3" for="fullname"> <strong>Visitor ID</strong> <span class="text-danger">*</span></label>
                                                    <div class="col-sm-8">
                                                        <input class="form-control" type="text" id="fullname" name="visitor_id" placeholder="Enter Visitor id..." data-parsley-required="true" />
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

                                    </form>
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
    <!-- end visitor registration -->





</div>
<!-- end section-container -->
@endsection