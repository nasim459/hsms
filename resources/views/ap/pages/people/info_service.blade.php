@section('people_content')
<!-- begin section-container -->
<div class="section-container" ng-controller="servicePerson">
    <!-- begin panel -->
    <!-- begin row -->
    <div class="row">
        <!-- begin View_Salary -->
        <div class="col-md-12">
            <!-- <span><p class="text-center text-success-light"><b>vvvvvvvvvv</b></p></span>-->
            <!-- begin panel -->
            <div class="panel without-pagination clearfix m-b-0">
                {!! Form::open(array('url'=>'make-salary-invoice', 'role'=>'form', 'method'=>'POST')) !!}
                <div class="form-group">
                    <div class="col-sm-3 m-b-10">
                        <input class="form-control text-center" type="text" id="fullname" value="" placeholder=" Search here..." data-parsley-required="true" />
                    </div>
                    <div class="col-sm-3">
                        @if(Session::get('add_service') != NULL)
                        <p class="text-center text-success-light m-t-10"><b>{{Session::get('add_service')}}</b></p>
                        @endif
                    </div>
                    <div class="col-sm-2"></div>
                    <div class="col-sm-2"></div>
                    <div class="col-sm-2">
                        <a href="#modal-s-people" class="btn btn-default width-xs m-l-30" title="Create Service People" data-toggle="modal"><i class="fa fa-plus text-success-light"> </i> Add People</a>
                    </div>
                </div>
                <table class="table table-bordered table-hover" style="border-bottom:1px solid #EBECED !important; ">
                    <thead>
                        <tr class="success">
                            <th>Picture <span class="m-l-5">ID</span></th>
                            <th><span class="m-l-20">Person Name</span></th>
                            <th>Service Name</th>
                            <th class="text-center">Mobile Number</th>
                            <th class="text-center">Mobile Number</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $number = 0;
                        $off = 0;
                        $on = 1;
                        ?>
                        @foreach($emp_show as $v) 
                        <tr>
                            <td>
                                @if($v->service_person_image != NULL)
                                <a href="#service-person-picture" data-toggle="modal" ng-click="service_person_pic_show({{$v->service_person_id}})" title="Click To See Picture"><img src="{{URL::asset($v->service_person_image)}}" class="img-h-w" alt="" /></a>
                                @else
                                <img src="{{URL::asset('ap/assets/img_blank/img_blank.jpg')}}" class="img-h-w" title="Please, Give Your Picture" alt="" />
                                @endif

                                <b  class="m-l-20">{{$number = $number + 1}}</b>
                            </td>
                            <td>{{$v->service_person_name}}</td>
                            <td><b>{{$v->service_type}}</b></td>
                            <td class="text-center">{{$v->service_person_phone1}}</td>
                            <td class="text-center">{{$v->service_person_phone2}}</td>
                            <td class="text-center">
                                @if($v->service_status == 1)
                                <a href="{{URL::to('info-service-status/'.$v->service_id.'/'.$off)}}" class="btn btn-default btn-xs"> Active </a>
                                @else
                                <a href="{{URL::to('info-service-status/'.$v->service_id.'/'.$on)}}" class="btn btn-warning btn-xs"> &nbsp; Stop &nbsp; </a>
                                @endif
                            </td>

                            <td>
                                <a href="{{URL::to('info-service-details/'.$v->service_person_id)}}" class="btn btn-default btn-xs"><i class="fa fa-list-alt"></i> Details</a>
                            </td>
                        </tr>
                        @endforeach()
                    </tbody>
                    <!--<a href="javascript:;" id="add-gritter-light" class="btn btn-white btn-sm m-l-5">Show</a>-->
                </table>
                {!! Form::close() !!}
            </div>
            <!-- end panel -->
        </div>
        <!-- end View_Salary -->
    </div>
    <!-- end row-->
    <!-- end panel -->


    <!--start modal-->
    <div class="col-md-6">
        <!--start service_people registration-->
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
                                    {!! Form::open(array('url'=>'service-add', 'role'=>'form', 'method'=>'POST', 'files'=>'true')) !!}
                                    <span action="{{URL::to('regi-s-people-save')}}" class="form-horizontal" data-parsley-validate="true" name="demo-form">

                                        <div class="col-md-12 m-t-15">
                                            <!-- start Personal Information -->
                                            <div class="col-md-12">

                                                <div class="form-group">
                                                    <label class="control-label col-sm-3" for="fullname"> <strong>Service Name</strong> <span class="text-danger">*</span></label>
                                                    <div class="col-sm-8">
                                                        <input class="form-control" type="text" id="fullname" name="a" placeholder="Write Service Name" data-parsley-required="true" />
                                                    </div>
                                                </div><hr class="hr-d m-b-15">

                                                <strong class="text-success">Personal Information</strong>
                                                <div class="form-group m-t-10">
                                                    <label class="control-label col-sm-3" for="fullname">Person Name <span class="text-danger">*</span></label>
                                                    <div class="col-sm-8">
                                                        <input class="form-control" type="text" id="fullname" name="b" placeholder="Service Person Name" data-parsley-required="true" />
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="control-label col-sm-3" for="fullname">Mobile No <span class="text-danger">*</span></label>
                                                    <div class="col-sm-4">
                                                        <input class="form-control" type="text" id="fullname" name="c" placeholder="01xxxxxxxxx" data-parsley-required="true" />
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <input class="form-control" type="text" id="fullname" name="d" placeholder="01xxxxxxxxx" />
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="control-label col-sm-3" for="fullname">Address <span class="text-danger">*</span></label>
                                                    <div class="col-sm-8">
                                                        <input class="form-control" type="text" id="fullname" name="e" placeholder="Write Address" data-parsley-required="true" />
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
                            <!-- end row panel body --->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end service_people registration-->

        <!--start show_service_people_picture-->
        <div class="clearfix m-b-25">
            <!-- #modal-dialog-start-->
            <div class="modal fade" id="service-person-picture">
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
            <!-- #modal-dialog-end-->
        </div>
        <!--end show_service_people_picture-->
    </div>
    <!-- end modal -->


</div>
<!-- end section-container -->
@endsection