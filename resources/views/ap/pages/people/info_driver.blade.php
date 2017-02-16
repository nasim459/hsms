@section('people_content')
<!-- begin section-container -->
<div class="section-container" ng-controller="driverController">
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
                        <a href="{{URL::to('regi-driver')}}" class="btn btn-default width-xs m-l-30" title="Create New Account Of Driver"><i class="fa fa-plus text-success-light"> </i>&nbsp; Add Driver</a>
                    </div>
                </div>
                <table class="table table-bordered table-hover" style="border-bottom:1px solid #EBECED !important; ">
                    <thead>
                        <tr class="success">
                            <th>Picture &nbsp; &nbsp; Driver Name</th>
                            <th class="text-center">Owner Name</th>
                            <th class="text-center">Building Info</th>
                            <th class="text-center">Mobile Number</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $number=0; ?>
                        @foreach($driver_show as $v)
                        <tr class="odd gradeX">
                            <td>
                                @if($v->driver_image != NULL)
                                <a href="#driver-picture" data-toggle="modal" ng-click="info_driver_pic_show({{$v->driver_id}})" title="Click To See Picture"><img src="{{URL::asset($v->driver_image)}}" class="img-h-w" alt="" /></a>
                                @else
                                <img src="{{URL::asset('ap/assets/img_blank/img_blank.jpg')}}" class="img-h-w" title="Please, Give Your Picture" alt="" />
                                @endif
                                
                                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<b>{{$v->driver_name}}</b>
                            </td>
                            <td>Kamrul Hassan</td>
                            <td>01-Buliding, D-Unit</td>
                            <td class="text-center">{{$v->driver_phone1}}</td>
                            <td class="text-center"><a href="{{URL::to('info-driver-details/'.$v->driver_details_id)}}" class="btn btn-default btn-xs"><i class="fa fa-list-alt"></i> Details</a></td>
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
                                                    <div class="col-sm-4 col-md-offset-4 m-b-10" ng-repeat="value in driver_pic">

                                                        <a class="thumbnail m-b-mi-15">
                                                            <img src="@{{value.driver_image}}" class="img-md-h-w" alt="">
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
    <!--end modal--------------------------------------------------------->
    
</div>
<!-- end section-container -->
@endsection