@section('maincontent')
<!-- begin section-container -->
<div class="section-container" ng-controller="rentalController">
    <!-- begin row -->
    <div class="row">
        <!-- begin col-12 -->
        <div class="col-md-12" style="margin-top: -22px!important">
            <!-- begin panel -->
            <div class="panel panel-default">

                @foreach($rental_details as $v)
                <div class="panel-heading">
                    <div class="btn-group pull-left">
                        <a href="{{URL::to(Session::get('details_rental_p_u'))}}" class="btn btn-white btn-xs" title="Back to Owner"><i class="fa fa-arrow-left"></i>&nbsp;</a>
                    </div>
                    <div class="btn-group pull-right">
                        <button type="button" class="btn btn-white btn-xs">Action</button>
                        <button type="button" class="btn btn-white btn-xs dropdown-toggle" data-toggle="dropdown">
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#info-rental-picture" data-toggle="modal" title="Update Picture"><i class="fa fa-pencil"></i> Edit Picture</a></li>
                            <li><a href="#rental-bld-edit" data-toggle="modal" title="Edit Buinding-Floor-Unit"><i class="fa fa-pencil"></i> Edit Building</a></li>
                            <li><a href="{{URL::to('info-rental-edit/'.$v->rental_id)}}"><i class="fa fa-edit"></i> Edit All Profile</a></li>
                            <li><a href="{{URL::to('dboard')}}"><i class="fa fa-home"></i> Go Dashboarde</a></li>
                            <li class="divider"></li>
                            <li><a href="{{URL::to('info-rental')}}"><i class="fa fa-user"></i> Rental</a></li>
                            <li><a href="{{URL::to('info-emp')}}"><i class="fa fa-user"></i> Employee</a></li>
                            <li><a href="{{URL::to('info-owner')}}"><i class="fa fa-user"></i> Owner</a></li>
                            <li><a href="{{URL::to('info-driver')}}"><i class="fa fa-user"></i> Driver</a></li>
                            <li><a href="{{URL::to('info-visiting')}}"><i class="fa fa-user"></i> Visiting</a></li>
                            <li><a href="{{URL::to('info-service')}}"><i class="fa fa-user"></i> Service People</a></li>
                            <li class="divider"></li>
                            <li><a href="{{URL::to('')}}"><i class="fa fa-power-off text-success-light"></i> SignOut</a></li>
                        </ul>
                    </div> 
                    <div class="row">
                        <div class="col-md-10 col-md-offset-2">
                            <div class="col-md-6">
                                <div class="col-md-4 m-b-10">
                                    
                                    @if($v->rental_image != NULL)
                                    <a href="#info-rental-picture" class="thumbnail m-b-mi-15" data-toggle="modal" title="Update Picture"><img src="{{URL::asset($v->rental_image)}}" class="img-d-h-w" alt="Blank"></a>
                                    @else
                                    <a href="#info-rental-picture" class="thumbnail m-b-mi-15" data-toggle="modal" title="Update Picture"><img src="{{URL::asset('ap/assets/img_blank/img_blank.jpg')}}" class="img-d-h-w" alt=""></a>
                                    @endif
                                </div>
                                <div class="col-md-8">
                                    <p class="f-s-14">
                                        <b>
                                            {{$v->rental_name}}<br/>
                                            {{$v->rental_id_no}}<br/>
                                            Payment: Paid<br/>
                                            @if($v->person_status == 1)
                                            Positoin: <b class="text-success-light">Flat Rental</b> &nbsp;
                                            <i class="fa fa-check text-success-light" title="Active Your Profile"></i><br/>
                                            @else
                                            Positoin: <b class="text-danger-light">Flat Rental</b> &nbsp;
                                            <i class="fa fa-remove text-danger-light" title="Stop Your Profile"></i><br/>
                                            @endif
                                        </b>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <p class="f-s-15">
                                    {{$v->bld_name}} - Building, {{$v->bld_floor}} - Floor, {{$v->bld_unit}} - Unit &nbsp;
                                    <a href="#rental-bld-edit" class="text-white" data-toggle="modal" title="Edit Buinding-Floor-Unit"><i class="fa fa-pencil"></i></a><br/>
                                    Sukrabad, Dhanmondi, Dhaka<br/>
                                    &nbsp;<br/>

                                    @if(Session::get('service_taken') != NULL)
                                    <b class="text-danger-light">{{Session::get('service_taken')}}</b>
                                    @endif

                                    @if(Session::get('service_assigned') != NULL)
                                    <b class="text-success-light">{{Session::get('service_assigned')}}</b>
                                    @endif
                                    
                                    @if(Session::get('rental_img') != NULL)
                                    <b class="text-success-light">{{Session::get('rental_img')}}</b>
                                    @endif
                                    
                                    @if(Session::get('bld_updated') != NULL)
                                    <b class="text-success-light">{{Session::get('bld_updated')}}{{Session::put('bld_updated', '')}}</b>
                                    @endif
                                    
                                    @if(Session::get('bld_updated_not') != NULL)
                                    <b class="text-danger-light">{{Session::get('bld_updated_not')}}{{Session::put('bld_updated_not', '')}}</b>
                                    @endif
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="nav nav-tabs col-md-offset-1">
                    <li class="active"><a href="#default-tab-1" data-toggle="tab"><i class="fa fa-user"></i> Profile</a></li>
                    <li class=""><a href="#default-tab-2" data-toggle="tab"><i class="fa fa-list"></i> Details</a></li>
                    <li class=""><a href="#default-tab-3" data-toggle="tab"><i class="fa fa-credit-card"></i> Invoice</a></li>
                    <li class=""><a href="#default-tab-4" data-toggle="tab"><i class="fa fa-cc-discover"></i> Payment</a></li>
                    <li class=""><a href="#default-tab-5" data-toggle="tab"><i class="fa fa-warning"></i> Complain</a></li>
                    <li class=""><a href="#default-tab-6" data-toggle="tab"><i class="fa fa-user"></i> Facilities</a></li>
                    <li class=""><a href="#default-tab-7" data-toggle="tab"><i class="fa fa-pie-chart"></i> At A Glance</a></li>
                </ul>
                <div class="tab-content m-b-0" style="overflow: scroll; overflow-x: hidden; overflow-y: auto; height: 450px;">
                    <div class="tab-pane fade active in" id="default-tab-1">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-2">
                                <div class="col-md-7">
                                    <dl class="dl-horizontal m-b-20">
                                        <dt>Owner Name :</dt>
                                        <dd>{{$v->rental_name}}</dd>
                                        <dt>ID :</dt>
                                        <dd>{{$v->rental_id_no}}</dd>
                                        <dt>Son off/wife off :</dt>
                                        <dd>{{$v->son_wife_off}}</dd>
                                        <dt>National ID :</dt>
                                        <dd>{{$v->national_no}}</dd>
                                        <dt>Passport No :</dt>
                                        <dd>{{$v->passport_no}}</dd>
                                        <dt>Phone Number :</dt>
                                        <dd>{{$v->rental_phone_1}}</dd>
                                        <dd>{{$v->phone_2}}</dd>
                                        <dt>Email Address :<dt>
                                        <dd>{{$v->rental_email}}</dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="default-tab-2">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="col-md-6">
                                    <h4><strong class="text-success">Personal Information</strong></h4>
                                    <dl class="dl-horizontal m-b-20">
                                        <dt>Owner Name :</dt>
                                        <dd>{{$v->rental_name}}</dd>
                                        <dt>ID :</dt>
                                        <dd>11 - 07 - 01</dd>
                                        <dt>Son off/wife off :</dt>
                                        <dd>{{$v->son_wife_off}}</dd>
                                        <dt>National ID :</dt>
                                        <dd>{{$v->national_no}}</dd>
                                        <dt>Passport No :</dt>
                                        <dd>{{$v->passport_no}}</dd>
                                        <dt>Phone Number :</dt>
                                        <dd>{{$v->rental_phone_1}}</dd>
                                        <dd>{{$v->phone_2}}</dd>
                                    </dl>
                                </div>
                                <div class="col-md-6">
                                    <h4><strong class="text-success">Personal Information</strong></h4>
                                    <dl class="dl-horizontal m-b-20">
                                        <dt>Email Address :<dt>
                                        <dd>{{$v->rental_email}}</dd>
                                        <dt>Birth Date  :</dt>
                                        <dd>{{$v->birth_date}}</dd>
                                        <dt>Education :</dt>
                                        <dd>{{$v->occupation}}</dd>
                                        <dt>Office Address :</dt>
                                        <dd>{{$v->office_address}}</dd>
                                        <dt>Car Parking  :</dt>
                                        @if($v->parking == 1)
                                        <dd>Yes</dd>
                                        @else
                                        <dd>No</dd>
                                        @endif
                                        <dt>Gender :</dt>
                                        @if($v->gender == 1)
                                        <dd>Mail</dd>
                                        @else
                                        <dd>Femail</dd>
                                        @endif
                                    </dl>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="col-md-6">
                                    <h4><strong class="text-success">Permanent Information</strong></h4>
                                    <dl class="dl-horizontal m-b-20">
                                        <dt>Country :</dt>
                                        <dd>{{$v->pi_country}}</dd>
                                        <dt>District :</dt>
                                        <dd>{{$v->pi_district}}</dd>
                                        <dt>Thana :</dt>
                                        <dd>{{$v->pi_thana}}</dd>
                                        <dt>Village :</dt>
                                        <dd>{{$v->pi_village}}</dd>
                                    </dl>
                                </div>
                                <div class="col-md-6">
                                    <h4><strong class="text-success">Emergency Information</strong></h4>
                                    <dl class="dl-horizontal m-b-20">
                                        <dt>Contact Name :<dt>
                                        <dd>{{$v->ei_name}}</dd>
                                        <dt>Mobile No  :</dt>
                                        <dd>{{$v->ei_phone}}</dd>
                                        <dt>Relation :</dt>
                                        <dd>{{$v->ei_relation}}</dd>
                                        <dt>Address :</dt>
                                        <dd>{{$v->ei_address}}</dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="col-md-6">
                                    <h4><strong class="text-success">Previous Staying Information</strong></h4>
                                    <dl class="dl-horizontal m-b-20">
                                        <dt>Owner Name :</dt>
                                        <dd>{{$v->psi_owner_name}}</dd>
                                        <dt>Mobile No :</dt>
                                        <dd>{{$v->psi_phone}}</dd>
                                        <dt>Cause :</dt>
                                        <dd>{{$v->psi_cause}}</dd>
                                        <dt>Address :</dt>
                                        <dd>{{$v->psi_address}}</dd>
                                    </dl>
                                </div>
                                <div class="col-md-6">
                                    <h4><strong class="text-success">Reference Information</strong></h4>
                                    <dl class="dl-horizontal m-b-20">
                                        <dt>Reference Name :<dt>
                                        <dd>{{$v->r_name}}</dd>
                                        <dt>Mobile No  :</dt>
                                        <dd>{{$v->r_phone}}</dd>
                                        <dt>Address :</dt>
                                        <dd>{{$v->r_address}}</dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="col-md-6 col-md-offset-3">
                                    <h4><strong class="text-success">Rental Family Member Info</strong></h4>
                                    <dl class="dl-horizontal m-b-20">
                                        <dt>Member Name :</dt>
                                        <dd>{{$v->f_name}}</dd>
                                        <dt>Occupation  :</dt>
                                        <dd>{{$v->f_occupation}}</dd>
                                        <dt>Mobile No :</dt>
                                        <dd>{{$v->f_phone}}</dd>
                                        <dt>Staying :</dt>
                                        <dd>{{$v->f_staying}}</dd>
                                        <dt>Age :</dt>
                                        <dd>{{$v->f_age}}</dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="default-tab-3">
                        <!-- begin row -->
                        <div class="row">
                            <!-- begin Payment -->
                            <div class="col-md-10 col-md-offset-1">
                                <span><p class=""></p></span>
                                @if(!$invoice_show->isEmpty())
                                <!-- begin panel -->
                                <div class="panel without-pagination clearfix m-b-0">
                                    <div class="form-group">
                                        <div class="col-sm-4 m-b-10">
                                            <strong class="text-success m-t-10">Invoice Information</strong>
                                        </div>
                                        <div class="col-sm-4 m-b-10 col-md-offset-4">
                                            <input class="form-control text-center" type="text" id="fullname" value="" placeholder=" Search here..." data-parsley-required="true" />
                                        </div>
                                    </div>
                                    
                                    <table class="table table-hover table-bordered table-scroll" style="border-bottom:1px solid #EBECED !important;">
                                        <thead>
                                            <tr class="default">
                                                <th><b>Invoice No</b></th>
                                                <th><b>Year - Month</b></th>
                                                <th class="text-center"><b>Amount Total</b></th>
                                                <th class="text-center"><b>Previous Due</b></th>
                                                <th class="text-center"><b>Grand Total</b></th>
                                                <th><b>Created At</b></th>
                                                <th><b>Item</b></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($invoice_show as $v) 
                                            <tr>
                                                <td>#{{$v->invoice_id}}</td>
                                                <td>
                                                    <b>
                                                        {{$v -> invoice_year}} - 
                                                        @if($v->invoice_month == 1)
                                                        January
                                                        @elseif($v->invoice_month == 2)
                                                        February
                                                        @elseif($v->invoice_month == 3)
                                                        March
                                                        @elseif($v->invoice_month == 4)
                                                        April
                                                        @elseif($v->invoice_month == 5)
                                                        May
                                                        @elseif($v->invoice_month == 6)
                                                        June
                                                        @elseif($v->invoice_month == 7)
                                                        July
                                                        @elseif($v->invoice_month == 8)
                                                        August
                                                        @elseif($v->invoice_month == 9)
                                                        September
                                                        @elseif($v->invoice_month == 10)
                                                        October
                                                        @elseif($v->invoice_month == 11)
                                                        November
                                                        @elseif($v->invoice_month == 12)
                                                        December
                                                        @endif
                                                    </b>
                                                </td>
                                                <td class="text-center">{{$v->invoice_amount_total}}</td> 
                                                <td class="text-center">
                                                    @if($v->invoice_previous_due != 0)
                                                    <span class="text-danger"><b>{{$v->invoice_previous_due}}</b></span>
                                                    @else
                                                    <span>00.00</span>
                                                    @endif
                                                </td> 
                                                <td class="text-center">{{$v->invoice_grand_total}}</td> 
                                                <td><span style="width: 100px!important">{{$v->created_at}}</span></td> 
                                                <td>
                                                    <a href="#rental-invoice-item" class="btn btn-default btn-xs" data-toggle="modal" ng-click="invoice_item({{$v->invoice_id}})" title="Invoice Item"><i class="fa fa-list-ul text-success-light"></i> </a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                        
                                    </table>
                                    
                                </div>
                                <!-- end panel -->
                                @else
                                <h2 class="text-center text-danger m-t-20"><b>Now, Your Invoice Is Empty!!!</b></h2>
                                <h4 class="text-center text-success m-t-20"><b>When, Give Your Payment Of Your Service Bill, Then You Will See Your Invoice.</b></h4>
                                @endif
                            </div>
                            <!-- end Payment -->
                        </div>
                        <!-- end row -->
                    </div>

                    <div class="tab-pane fade" id="default-tab-4">
                        <!-- begin row -->
                        <div class="row">
                            <!-- begin Invoice -->
                            <div class="col-md-10 col-md-offset-1">
                                <span><p class=""></p></span>
                                @if(!$payment_show->isEmpty())
                                <!-- begin panel -->
                                <div class="panel without-pagination clearfix m-b-0">
                                    <div class="form-group">
                                        <div class="col-sm-4 m-b-10">
                                            <strong class="text-success m-t-10"> Invoice Has Been Completed</strong>
                                        </div>
                                        <div class="col-sm-4 m-b-10 col-md-offset-4">
                                            <input class="form-control text-center" type="text" id="fullname" value="" placeholder=" Search here..." data-parsley-required="true" />
                                        </div>
                                    </div>

                                    <table class="table table-hover table-bordered table-scroll" style="border-bottom:1px solid #EBECED !important;">
                                        <thead>
                                            <tr class="default">
                                                <th class="text-center"><b>No</b></th>
                                                <th><b>Year - Month</b></th>
                                                <th class="text-center"><b>payable</b></th>
                                                <th class="text-center"><b>Pay Amount</b></th>
                                                <th class="text-center"><b>Due Amount</b></th>
                                                <th class="text-center"><b>Status</b></th>
                                            </tr>
                                        </thead>
                                        <tbody class="scrollit">
                                            <?php
                                            $number = Session::get('p_s_l') +1;
                                            ?>
                                            @foreach($payment_show as $v)
                                            <tr>
                                                <td class="text-center"><b class="btn btn-default btn-xs">{{$number = $number - 1}}</b></td>
                                                <td>
                                                    <b>
                                                        {{$v -> pay_year}} - 
                                                        @if($v->pay_month == 1)
                                                        January
                                                        @elseif($v->pay_month == 2)
                                                        February
                                                        @elseif($v->pay_month == 3)
                                                        March
                                                        @elseif($v->pay_month == 4)
                                                        April
                                                        @elseif($v->pay_month == 5)
                                                        May
                                                        @elseif($v->pay_month == 6)
                                                        June
                                                        @elseif($v->pay_month == 7)
                                                        July
                                                        @elseif($v->pay_month == 8)
                                                        August
                                                        @elseif($v->pay_month == 9)
                                                        September
                                                        @elseif($v->pay_month == 10)
                                                        October
                                                        @elseif($v->pay_month == 11)
                                                        November
                                                        @elseif($v->pay_month == 12)
                                                        December
                                                        @endif
                                                    </b>
                                                </td>
                                                <td class="text-center">{{$v->payable_amount}}</td> 
                                                <td class="text-center">{{$v->pay_amount}}</td> 
                                                <td class="text-center">
                                                    @if($v->due_amount != 0)
                                                    <span class="text-danger"><b>{{$v->due_amount}}</b></span>
                                                    @else
                                                    <span>00.00</span>
                                                    @endif
                                                </td>
                                                <td class="text-center">
                                                    @if($v->pay_status == 1)
                                                    <a class="btn btn-default btn-xs" title="Payment Paid "><i class="fa fa-check text-success-light"></i> &nbsp; Paid &nbsp;&nbsp;</a>&nbsp;
                                                    @else
                                                    <a class="btn btn-default btn-xs" title="Payment unPaid"><i class="fa fa-remove text-danger-light"></i><span class="text-danger-light"> unPaid</span></a>&nbsp;
                                                    @endif
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    
                                </div>
                                <!-- end panel -->
                                @else
                                <h2 class="text-center text-danger m-t-20"><b>Now, Your Payment Is Empty!!!</b></h2>
                                @endif
                            </div>
                            <!-- end Invoice -->
                        </div>
                        <!-- end row -->
                    </div>

                    <div class="tab-pane fade" id="default-tab-5">
                        <!-- begin row -->
                        <div class="row">
                            <!-- begin Payment -->
                            <div class="col-md-10 col-md-offset-1">
                                <span><p class=""></p></span>
                                @if(!$invoice_show->isEmpty())
                                <!-- begin panel -->
                                <div class="panel without-pagination clearfix m-b-0">
                                    <div class="form-group">
                                        <div class="col-sm-4 m-b-10">
                                            <strong class="text-success m-t-10">Complain Information</strong>
                                        </div>
                                        <div class="col-sm-4 m-b-10 col-md-offset-4">
                                            <input class="form-control text-center" type="text" id="fullname" value="" placeholder=" Search here..." data-parsley-required="true" />
                                        </div>
                                    </div>

                                    <table class="table table-hover table-bordered table-scroll" style="border-bottom:1px solid #EBECED !important;">
                                        <thead>
                                            <tr class="default">
                                                <th class="text-center"><b>Subject</b></th>
                                                <th class="text-center"><b>Description</b></th>
                                                <th class="text-center"><b>Action</b></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $number = 0;
                                            @endphp
                                            @foreach($invoice_show as $v) 
                                            <tr>
                                                <td>
                                                    <b class="btn btn-default btn-xs text-success">{{$number = $number+1}}</b>&nbsp;&nbsp;
                                                    <b>Broken Glass Window</b>
                                                </td> 
                                                <td class="text-justify">If the glass in your window frame is foggy, it means the insulated seal was broken and the insulated glass unit needs to be replaced.
                                                <td class="text-center">
                                                    <a class="btn btn-default btn-xs" title="Work Not Done"><i class="fa fa-remove text-danger-light"></i><span class="text-danger-light"> </span></a>
                                                </td> 
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    
                                </div>
                                <!-- end panel -->
                                @else
                                <h2 class="text-center text-danger m-t-20"><b>Now, You Don't Have Any Complain!!!</b></h2>
                                @endif
                            </div>
                            <!-- end Payment -->
                        </div>
                        <!-- end row -->
                    </div>

                    <div class="tab-pane fade" id="default-tab-6">
                        <!-- begin row -->
                        <div class="row">
                            <!-- begin Payment -->
                            <div class="col-md-10 col-md-offset-1">
                                <span><p class=""></p></span>
                                @if(!$service_assigned_show->isEmpty())
                                <!-- begin panel -->
                                <div class="panel without-pagination clearfix m-b-0">
                                    <div class="form-group">
                                        <div class="col-sm-4 m-b-10">
                                            <strong class="text-success m-t-20">Facilities Taken</strong>
                                        </div>
                                        <div class="col-sm-4 m-b-10"></div>
                                        <div class="col-sm-4 m-b-10 text-right">
                                            <a href="{{URL::to('regi-driver')}}" class="btn btn-default btn-sm"><i class="fa fa-plus text-success"></i> Driver </a>
                                            <a href="#service-assign" class="btn btn-default btn-sm" data-toggle="modal"><i class="fa fa-plus text-success"></i> Service </a>
                                        </div>
                                    </div>

                                    <table class="table table-hover table-bordered table-scroll" style="border-bottom:1px solid #EBECED !important;">
                                        <thead>
                                            <tr class="default">
                                                <th class="text-center"><b>Service Name</b></th>
                                                <th class="text-center"><b>Amount</span></b></th>
                                                <th class="text-center"><b>Status</b></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $number = 0; $a=1; ?> 
                                            @foreach($service_assigned_show as $v)
                                            <tr>
                                                <td><b><i class="fa fa-arrow-right">&nbsp;</i> {{$v->service_type}}</b></td>
                                                <td class="text-center">{{$v->amount}}</td>
                                                <td class="text-center">
                                                    @if($v->status == 1)
                                                    <a href="#" class="btn btn-default btn-xs" title="Running Service"><i class="fa fa-check text-success-light"></i> Running</a>
                                                    @else
                                                    <a href="#" class="btn btn-default btn-xs" title="Stop Service">&nbsp;<i class="fa fa-remove text-danger-light"></i>&nbsp;&nbsp; Stop&nbsp;&nbsp;</a>
                                                    @endif
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    
                                </div>
                                <!-- end panel -->
                                @else
                                <h2 class="text-center text-danger m-t-20"><b>Don't Taken Any Facilities!!!</b></h2>
                                <h4 class="text-center m-t-5"><b>Now, You Don't Have Any Facilities!!!</b></h4>
                                <h5 class="text-center m-t-5"><b>Now, Add Your Facilities!!!</b></h5>
                                <p class="text-center text-success m-t-20">
                                    <a href="{{URL::to('regi-driver')}}" class="btn btn-success"><i class="fa fa-plus"></i> Driver </a>
                                    <a href="#service-assign" class="btn btn-success" data-toggle="modal"><i class="fa fa-plus"></i> Service </a>
                                </p>
                                @endif
                            </div>
                            <!-- end Payment -->
                        </div>
                        <!-- end row -->
                    </div>
                    
                    <div class="tab-pane fade" id="default-tab-7">
                        <!-- begin row -->
                        <div class="row">
                            <!-- begin Invoice -->
                            <div class="col-md-10 col-md-offset-1">
                                <span><p class=""></p></span>
                                @if(!$payment_show->isEmpty())
                                <!-- begin panel -->
                                <div class="panel without-pagination clearfix m-b-0">
                                    <div class="form-group">
                                        <div class="col-sm-4 m-b-10">
                                            <h5>Your Payment Status Is
                                            @if((Session::get('rental_payable_amount') - Session::get('rental_pay_amount')) != 0)
                                            <b class="text-danger-light"> unPaid</b>
                                            @else
                                            <b class="text-success-light"> Paid</b>
                                            @endif
                                            </h5>
                                        </div><br/>
                                        <div class="col-sm-4 m-b-10 col-md-offset-4">
                                        </div><br/>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-4 col-md-offset-3 f-s-16">
                                            <dl class="dl-horizontal m-b-20">
                                                <dt>payable :</dt>
                                                <dd>{{Session::get('rental_payable_amount')}} /=</dd>
                                                <dt>Pay Amount :</dt>
                                                <dd>{{Session::get('rental_pay_amount')}} /=</dd>
                                            </dl><hr/>
                                            <dl class="dl-horizontal m-b-20">
                                                <dt>Due Amount :</dt>
                                                <dd>{{Session::get('rental_payable_amount') - Session::get('rental_pay_amount')}} /=</dd>
                                            </dl>
                                        </div>
                                    </div>
                                    
                                </div>
                                <!-- end panel -->
                                @else
                                <h2 class="text-center text-danger m-t-20"><b>Now, Your Payment Is Empty!!!</b></h2>
                                @endif
                            </div>
                            <!-- end Invoice -->
                        </div>
                        <!-- end row -->
                    </div>
                </div>
                @endforeach()

            </div>
            <!-- end panel -->
        </div>
        <!-- end col-6 --> 
    </div>
    <!-- end row -->

    <!-- begin modal -->
    <!-- begin service_assign of rental modal -->
    <div class="col-md-6">
        <div class="clearfix m-b-25">
            <!-- #modal-dialog -->
            <div class="modal fade" id="service-assign">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title text-center text-success-light">Choose Your Service To Use</h4>
                        </div>
                        <div class="modal-body">
                            <!-- begin row panel body --->
                            <div class="row">
                                <!-- begin section-container -->
                                <div class="section-container">
                                    {!! Form::open(array('url'=>'service-assigned-add', 'role'=>'form', 'method'=>'POST')) !!}

                                    <div class="col-md-12">
                                        <table class="table table-bordered table-hover" style="border:1px solid #EBECED !important;border-bottom:3px solid #EBECED !important;">
                                            <thead>
                                                <tr class="default">
                                                    <th class="text-center"> Service Name </th>
                                                    <th class="text-center"> Amount </th>
                                                    <th> &nbsp; Choose All
                                                        <input type="hidden" value=""  style="width:20px"/>
                                                        <input type="checkbox" name="employee_sal_id[]" value="" style="float: left; margin: 0 0 0 30px;width: 20px;height: 20px;">
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $number = 0; ?> 
                                                @foreach($service_show as $v) 
                                                <tr>
                                                    <td><b><i class="fa fa-arrow-right">&nbsp;</i> {{$v->service_type}}</b></td>
                                                    <td class="text-center">
                                                        <input type="text" name="amount[]" placeholder=" 00.00 " style="width:80px; text-align: center;"/>
                                                    </td>
                                                    <td>
                                                        <input type="hidden" name="aa" value="{{Session::get('rental_id')}}"  style="width:20px"/>
                                                        <input type="hidden" name="bb" value="{{Session::get('flat_info_id')}}"  style="width:20px"/>

                                                        <input type="hidden" name="sp_id[]" value="{{$v->service_person_id}}"  style="width:20px"/>
                                                        <input type="checkbox" name="s_id[]" value="{{$v->service_id}}" style="float: left; margin: 0 0 0 30px;width: 20px;height: 20px;">
                                                    </td>
                                                </tr>
                                                @endforeach()
                                            </tbody>
                                        </table>
                                    </div>

                                    <!-- begin submit button -->
                                    <div class="form-group">
                                        <label class="control-label col-sm-4"></label>
                                        <div class="col-sm-5 m-b-20">
                                            <button type="submit" class="btn btn-success width-xs">Submit</button>
                                        </div>
                                    </div>
                                    <!-- end submit button -->

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
    </div>
    <!-- end service_assign of rental -->

    <!-- begin edit_rental_bld_floor_unit modal -->
    <div class="col-md-6">
        <div class="clearfix m-b-25">
            <!-- #modal-dialog -->
            <div class="modal fade" id="rental-bld-edit">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title text-center">Update Building-Floor-Unit</h4>
                        </div>
                        <div class="modal-body">
                            <!-- begin row panel body --->
                            <div class="row well">
                                <!-- begin section-container -->
                                <div class="section-container">
                                    {!! Form::open(array('url'=>'info-rental-bld-update', 'role'=>'form', 'method'=>'POST')) !!}
                                    <span class="form-horizontal" data-parsley-validate="true" name="demo-form">

                                        <div class="col-md-12 m-t-15">
                                            <!-- begin Building Place -->
                                            <div class="col-md-12 col-md-offset-0">
                                                @foreach($bld_show as $v) 
                                                <div class="form-group">
                                                    <label class="control-label col-sm-3"><span class="text-center text-success">Building Place : </span></label>
                                                    <div class="col-sm-8">
                                                        <h4 class="text-center text-success"><b>{{$v->bld_name}}</b> - building, <b>{{$v->bld_floor}}</b> - bloor, <b>{{$v->bld_unit}}</b> - unit</h4>
                                                        <input type="hidden" name="a" value="{{$v->rental_id}}" />
                                                        <input type="hidden" name="pre_a" value="{{$v->flat_info_id}}" />
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                            <!-- end Building Place -->
                                            
                                            <!-- begin available Building Place -->
                                            <div class="col-md-12 col-md-offset-0">
                                                <div class="form-group">
                                                    <label class="control-label col-sm-3">Available Place : <span class="text-danger"></span></label>
                                                    <div class="col-sm-6 col-md-offset-1">
                                                        <select class="form-control" id="select-required" name="b" required="" data-parsley-required="true">
                                                            <option value="">Building - Floor - Unit</option>
                                                            @foreach($bld_check as $v) 
                                                            <option value="{{$v->flat_info_id}}">{{$v->bld_name}} - {{$v->bld_floor}} - {{$v->bld_unit}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end available Building Place -->

                                            <!-- begin submit button -->
                                            <div class="form-group">
                                                <label class="control-label col-md-4"></label>
                                                <div class="col-md-4">
                                                    <button type="submit" class="btn btn-success width-xs">Submit</button>
                                                </div>
                                            </div>
                                            <!-- end submit button -->
                                        </div>

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
    </div>
    <!-- end edit_rental_bld_floor_unit -->
    <!-- end modal -->
    
    <!--start modal------------------------------------------------------->
    <div class="col-md-6">
        <div class="clearfix m-b-25">
        
        <!--start modal info-rental-picture-->
        <div class="modal fade" id="info-rental-picture">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title text-center">Profile Picture Edit</h4>
                    </div>
                    <div class="modal-body">
                        <!-- begin row panel body --->
                        <div class="row well">
                            <!-- begin section-container -->
                            <div class="section-container">
                                {!! Form::open(array('url'=>'info-rental-pic-update', 'role'=>'form', 'method'=>'POST', 'files'=>'true')) !!}
                                <span class="form-horizontal" data-parsley-validate="true" name="demo-form">
                                    @foreach($rental_details as $v)
                                    <div class="col-md-12 m-t-15">
                                        <!--start service_person_Picture-->
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <div class="col-sm-3 m-b-10">

                                                    <a class="thumbnail m-b-mi-15" title="Update Picture">
                                                        @if($v->rental_image != NULL)
                                                        <img src="{{URL::asset($v->rental_image)}}" class="img-sm-h-w" alt="Blank">
                                                        @else
                                                        <img src="{{URL::asset('ap/assets/img_blank/img_blank.jpg')}}" class="img-sm-h-w" alt="">
                                                        @endif
                                                    </a>

                                                    <input type="hidden" name="a" value="{{$v->rental_id}}" />
                                                </div>

                                                <div class="col-sm-4 m-t-40 m-l-30">
                                                    <input  type="file" name="image" id="fileToUpload" />
                                                </div>
                                            </div><hr class="hr-d m-b-15">
                                        </div>
                                        <!--ends ervice_person_Picture-->
                                    </div>

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
                        <!-- end row panel body --->
                    </div>
                </div>
            </div>
        </div>
        <!--end modal info-rental-picture-->
        
        <!--start modal rental-invoice-item-->
        <div class="modal fade" id="rental-invoice-item">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title text-center">Rental Invoice Item</h4>
                    </div>
                    <div class="modal-body">
                        <!-- begin row panel body --->
                        <div class="row">
                            <!-- begin section-container -->
                            <div class="section-container">
                                <span class="form-horizontal" data-parsley-validate="true" name="demo-form">

                                    <div class="col-md-12 m-t-15">
                                        <!-- start Personal Information -->
                                        <div class="col-md-12">
                                            <!-- begin table -->
                                            <div class="m-b-10"><b>Your Invoice Item</b></div>

                                            <table class="table">
                                                <thead>
                                                    <tr class="default" title="Selecte All">
                                                        <th class="text-center"><b>No</b></th>
                                                        <th class="text-center"><b>Service Name</b></th>
                                                        <th class="text-center"><b>Amount</b></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr ng-repeat="value in invoice_rental">
                                                        <td class="text-center">@{{$index+1}}</td>
                                                        <td class="text-center">@{{value.invoice_item_name}}</td>
                                                        <td class="text-center">@{{value.invoice_item_amount}}</td>
                                                    </tr>
                                                    <tr ng-repeat="value in invoice_rental|limitTo:1">
                                                        <td>&nbsp;</td>
                                                        <td>&nbsp;</td>
                                                        <td><h5><b class="text-success-light">Total Amount :&nbsp;&nbsp;   @{{value.invoice_amount_total}}</b></h5></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <!-- end table -->
                                            <hr class="hr-d m-b-15">

                                        </div>
                                        <!-- end Personal Information -->
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
        <!--end modal rental-invoice-item-->
            
        </div>
    </div>
    <!--end modal------------------------------------------------------->

</div>
<!-- end section-container -->
@endsection