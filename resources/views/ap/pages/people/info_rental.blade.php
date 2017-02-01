@section('people_content')
<!-- begin section-container -->
<div class="section-container" ng-controller="people">
    <!-- begin panel -->
    <div class="panel without-pagination clearfix m-b-0">
        <table id="data-table" class="table table-bordered table-hover">
            @{{data.off}}
            <thead>
                <tr class="success">
                    <th>Picture &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ID</th>
                    <th><span class="m-l-20">Name  &nbsp; &nbsp;</span></th>
                    <th>Building - Floor - Unit</th>
                    <th>Mobile Number</th>
                    <th>E-Mail Address</th>
                    <th>Payment</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $number = 0;
                $off = 0;
                $on = 1;
                ?>
                @foreach($rental_show as $v) 
                <tr>
                    <td>
                        @if(isset($v->rental_image))
                        <a href="#rental-picture-show" data-toggle="modal" ng-click="rental_picture_show({{$v->rental_id}})" title="Click To See Picture"><img src="{{URL::asset($v->rental_image)}}" class="img-h-w" alt="" /></a>
                        @else
                        <img src="{{URL::asset('ap/assets/img_blank/img_blank.jpg')}}" title="Please, Give Your Picture" class="img-h-w" alt="" />
                        @endif

                        <b title="ID: {{$v->rental_id_no}}">{{$v->rental_id_no}}</b>
                    </td>
                    <td>{{$v-> rental_name}}</td>
                    <td class="text-center"><b>{{$v->bld_name}} - {{$v->bld_floor}} - {{$v->bld_unit}}</b></td>
                    <td>{{$v->rental_phone_1}}</td>
                    <td>{{$v->rental_email}}</td>
                    <td class="text-center"><a href="" class="btn btn-default btn-xs"> &nbsp; Paid &nbsp;</a> </td>
                    <td ng-init="data.status[{{$v->rental_id}}]={{$v->person_status}}">

                        <a href="{{URL::to('info-rental-details/'.$v->rental_details_id)}}" class="btn btn-default btn-xs" title="See Details Information"><i class="fa fa-list-alt"></i> Details</a>&nbsp;


                        <a class="btn btn-default btn-xs"  ng-click="rentalStatus({{$v->rental_id}},data.status[{{$v->rental_id}}])" >
                            <i class="fa fa-check text-success-light" ng-if="data.status[{{$v->rental_id}}] == 1" title="Active Profile"></i>
                            <i class="fa fa-remove" ng-if="data.status[{{$v->rental_id}}] == 0" title="Stop Profile"></i>
                        </a>

                    </td>
                </tr>
                @endforeach()
            </tbody>
        </table>
    </div>
    <!-- end panel -->

    <!--start modal-->
    <div class="col-md-6">
        <!--start show_rental_people_picture-->
        <div class="clearfix m-b-25">
            <!-- #modal-dialog-start-->
            <div class="modal fade" id="rental-picture-show">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title text-center">Rental Profile Picture</h4>
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
                                                            <img src="@{{picture.rental_image}}" class="img-md-h-w" alt="">
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