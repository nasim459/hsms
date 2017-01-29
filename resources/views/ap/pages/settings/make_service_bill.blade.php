@section('settings_content')
<!-- begin section-container -->
<div class="section-container" ng-controller="serviceBill">
    <!-- begin row -->
    <div class="row">
        <!-- begin col-12 -->
        <div class="col-md-12">
            <!-- begin panel -->
            <div class="panel panel-default">

                <div class="panel-heading">
                    <div class="btn-group pull-left">
                        <a href="{{URL::to('dboard')}}" class="btn btn-white btn-xs" title="Go To Dahsboard"><i class="fa fa-home"></i>&nbsp;</a>
                    </div>
                    <div class="btn-group pull-right">
                        <button type="button" class="btn btn-white btn-xs">Settings</button>
                        <button type="button" class="btn btn-white btn-xs dropdown-toggle" data-toggle="dropdown">
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{URL::to('info-owner')}}"><i class="fa fa-pencil"></i> Edit Picture</a></li>
                            <li><a href="{{URL::to('info-emp-edit')}}"><i class="fa fa-edit"></i> Edit All Profile</a></li>
                            <li><a href="{{URL::to('regi-driver')}}"><i class="fa fa-plus"></i> Add Driver</a></li>
                            <li><a href="{{URL::to('dboard')}}"><i class="fa fa-home"></i> Go Dashboard</a></li>
                            <li class="divider"></li>
                            <li><a href="{{URL::to('')}}"><i class="fa fa-power-off"></i> SignOut</a></li>
                        </ul>
                    </div>
                </div>
                <ul class="nav nav-tabs col-md-offset-1">
                    <li class="active"><a href="#default-tab-1" data-toggle="tab"><i class="fa fa-list"> </i> Service Bill Statement</a></li>
                    <li class=""><a href="#default-tab-2" data-toggle="tab"><i class="fa fa-save"> </i> Invoice</a></li>
                    <li class=""><a href="#default-tab-3" data-toggle="tab"><i class="fa fa-credit-card"></i> Payment</a></li>
                    <li class=""><a href="#default-tab-4" data-toggle="tab"><i class="fa fa-plus"></i> Add Service</a></li>
                    <!--  <li class=""><a href="#default-tab-5" data-toggle="tab"><i class="fa fa-user"></i> Complain</a></li>
                    <li class=""><a href="#default-tab-6" data-toggle="tab"><i class="fa fa-user"></i> Salary Statement</a></li>-->
                </ul>
                <div class="tab-content m-b-0" style="overflow: scroll; overflow-x: hidden; overflow-y: auto; height: 440px;">
                    <div class="tab-pane fade active in" id="default-tab-1">
                        <!-- begin row -->
                        <div class="row">
                            <!-- begin Add_Salary -->
                            <div class="col-md-10 col-md-offset-1">
                                <span><p class=""></p></span>
                                <!--Start if blank_value_found Create new_bill_statement else See created_value -->
                                @if(Session::get('rental_blank') != 'rntl_blnk')
                                <!-- begin panel -->
                                <div class="panel without-pagination clearfix m-b-0">
                                    <div class="form-group">
                                        <div class="col-sm-4">
                                            <strong class="text-success m-t-10">Rental Service Statement</strong>
                                        </div>
                                        <div class="col-sm-4 m-b-10 col-md-offset-4">
                                            <input class="form-control text-center" type="text" id="fullname" value="" placeholder=" Search here..." data-parsley-required="true" />
                                        </div>
                                    </div>
                                    <table class="table table-bordered table-hover" style="border:5px solid #EBECED !important">
                                        <thead>
                                            <tr class="default">
                                                <th class="text-center"><b>No </b></th>
                                                <th class="text-center"><b>Building - Floor - Unit</b></th>
                                                <th class="text-center"><b>Rental Name</b></th>
                                                <th class="text-center"><b>Service Running</b></th>
                                                <th class="text-center"><b>Action</b></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $number = Session::get('rental_total') + 1;
                                            $a = 1;
                                            ?>
                                            @foreach($rental_show as $v)
                                            <tr>
                                                <td class="text-center"><span class="btn btn-default btn-xs">{{$number = $number-1}}</span></td>
                                                <td class="text-center"><b>{{$v->bld_name}} - {{$v->bld_floor}} - {{$v->bld_unit}}</b></td>
                                                <td>{{$v->rental_name}}</td>
                                                <td class="text-center">
                                                    <a href="#show-bill-statement" class="btn btn-default btn-xs" data-toggle="modal" title="Your Running Service" ng-click="serviceBillView({{$v->rental_id}})"><i class="fa fa-list">&nbsp;</i> Service </a>
                                                </td>
                                                <td class="text-center">
                                                    <a href="#create-service-bill" class="btn btn-success btn-xs" data-toggle="modal" title="Click To Create Bill" ng-click="serviceBillView({{$v->rental_id}})"><i class="fa fa-arrow-right"></i> Create</a>&nbsp; &nbsp;
                                                </td>
                                            </tr>
                                            @endforeach()
                                        </tbody>
                                    </table>
                                </div>
                                <!-- end panel -->
                                @else

                                <!-- begin panel -->
                                <div class="panel without-pagination clearfix m-b-0">
                                    <div class="form-group">
                                        <div class="col-sm-4">
                                            <strong class="text-success m-t-10">Rental Service Statement</strong>
                                        </div>
                                        <div class="col-sm-4 m-b-10 col-md-offset-4">
                                            <input class="form-control text-center" type="text" id="fullname" value="" placeholder=" Search here..." data-parsley-required="true" />
                                        </div>
                                    </div>
                                    <!-- begin row --->
                                    <div class="row">
                                        <!-- begin section-container -->
                                        <div class="section-container">
                                            <div class="col-md-12 col-md-offset-2 m-t-10">
                                                <div class="col-md-6 text-center">
                                                    <h3>January 2016</h3>
                                                    <h5 class="text-danger">Your Rental Service Bill Statement Is Empty?</h5>
                                                    <h5 class="text-success">Click To Create New Bill For New Month</h5>
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-md-offset-2 m-t-10">
                                                <div class="col-md-6 text-center">
                                                    <a href="#confirm-bill-create" class="text-center btn btn-success btn-lg" data-toggle="modal"> Create Rental Bill </a>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <!-- begin rental_bill_create modal -->
                                                <div class="col-md-6">
                                                    <div class="clearfix m-b-25">
                                                        <!-- #modal-dialog -->
                                                        <div class="modal fade" id="confirm-bill-create">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                        <h4 class="modal-title text-center text-danger">Are You Sure To Create?</h4>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <!-- begin row panel body --->
                                                                        <div class="row m-b-30">
                                                                            <!-- begin section-container -->
                                                                            <div class="section-container">
                                                                                <!-- begin submit button -->
                                                                                <div class="form-group">
                                                                                    <label class="control-label col-sm-4"></label>
                                                                                    <div class="col-sm-4">
                                                                                        {!! Form::open(array('url'=>'service-bill-statement', 'role'=>'form', 'method'=>'POST')) !!}
                                                                                        <button type="submit" class="btn btn-success btn-lg"><i class="fa fa-check"></i> Create</button>
                                                                                        {!! Form::close() !!}
                                                                                    </div>
                                                                                    <div class="col-sm-4">
                                                                                        <button type="submit" class="btn btn-warning btn-lg" data-dismiss="modal"><i class="fa fa-remove"></i> Close</button>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- end submit button -->
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
                                                <!-- end rental_bill_create modal -->
                                            </div>
                                        </div>
                                        <!-- end section-container -->    
                                    </div>
                                    <!-- end row --->
                                </div>
                                <!-- end panel -->
                                @endif
                                <!--End if blank_value_found Create new_bill_statement else see created_value -->
                            </div>
                            <!-- end Add_Salary -->
                        </div>
                        <!-- end row -->
                    </div>

                    <div class="tab-pane fade" id="default-tab-2">
                        <!-- begin row -->
                        <div class="row">
                            <!-- begin Add_Salary -->
                            <div class="col-md-10 col-md-offset-1">
                                <span><p class=""></p></span>
                                <!-- begin panel -->
                                <div class="panel without-pagination clearfix m-b-0">
                                    <div class="form-group">
                                        <div class="col-sm-4">
                                            <strong class="text-success m-t-10">Rental Invoice</strong>
                                        </div>
                                        <div class="col-sm-4 m-b-10 col-md-offset-4">
                                            <input class="form-control text-center" type="text" id="fullname" value="" placeholder=" Search here..." data-parsley-required="true" />
                                        </div>
                                    </div>
                                    <table class="table table-bordered table-hover" style="border:5px solid #EBECED !important">
                                        <thead>
                                            <tr class="default">
                                                <th class="text-center"><b>Invoice No</b></th>
                                                <th class="text-center"><b>Building - Floor - Unit</b></th>
                                                <th class="text-center"><b>Month</b></th>
                                                <th class="text-center"><b>Amount</b></th>
                                                <th class="text-center"><b>Created</b></th>
                                                <th class="text-center"><b>Payment Action</b></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $number = 0; $off = 0; $on = 1; ?>
                                            @foreach($invoice_bill as $v) 
                                            <tr>
                                                <td class="text-center"><span class="text-success"><b class="btn btn-default btn-xs">#{{$v->invoice_id}}</b></span></td>
                                                <td class="text-center" title="{{$v->rental_name}}">{{$v->bld_name}} - {{$v->bld_floor}} - {{$v->bld_unit}}</td>
                                                <td class="text-center">
                                                    <b>
                                                        @if($v->invoice_moth == 1)
                                                        January
                                                        @elseif($v->invoice_moth == 2)
                                                        February
                                                        @elseif($v->invoice_moth == 3)
                                                        March
                                                        @elseif($v->invoice_moth == 4)
                                                        April
                                                        @elseif($v->invoice_moth == 5)
                                                        May
                                                        @elseif($v->invoice_moth == 6)
                                                        June
                                                        @elseif($v->invoice_moth == 7)
                                                        July
                                                        @elseif($v->invoice_moth == 8)
                                                        August
                                                        @elseif($v->invoice_moth == 9)
                                                        September
                                                        @elseif($v->invoice_moth == 10)
                                                        October
                                                        @elseif($v->invoice_moth == 11)
                                                        November
                                                        @elseif($v->invoice_moth == 12)
                                                        December
                                                        @endif
                                                        - {{$v->invoice_year}}
                                                    </b>
                                                </td>
                                                <td class="text-center">{{$v->invoice_amount_total}}</td>
                                                <td class="text-center">{{$v->created_at}}</td>
                                                <td class="text-center">
                                                    <a href="#click-to-pay" class="btn btn-danger btn-xs" title="unPaid" data-toggle="modal" ng-click="serviceBillView({{$v->rental_id}})"><i class="fa fa-remove"></i> Click To Pay</a>&nbsp; &nbsp;
                                                    <a href="#view-rental-invoice" class="btn btn-default btn-xs" data-toggle="modal" title="Invoice View" ng-click="serviceBillView({{$v->rental_id}})"><i class="fa fa-eye text-success-light"></i></a>
                                                </td>
                                            </tr>
                                            @endforeach()
                                        </tbody>
                                    </table>
                                </div>
                                <!-- end panel -->
                            </div>
                            <!-- end Add_Salary -->
                        </div>
                        <!-- end row -->
                    </div>

                    <div class="tab-pane fade" id="default-tab-3">
                        <!-- begin row -->
                        <div class="row">
                            <!-- begin Add_Salary -->
                            <div class="col-md-10 col-md-offset-1">
                                <span><p class=""></p></span>
                                <!-- begin panel -->
                                <div class="panel without-pagination clearfix m-b-0">
                                    <div class="form-group">
                                        <div class="col-sm-4 m-b-10">
                                            <strong class="text-success m-t-10">Monthly Rental Bill History</strong>
                                        </div>
                                        <div class="col-sm-4 m-b-10 col-md-offset-4">
                                            <input class="form-control text-center" type="text" id="fullname" value="" placeholder=" Search here..." data-parsley-required="true" />
                                        </div>
                                    </div>
                                    <table class="table table-bordered table-hover" style="border:5px solid #EBECED !important">
                                        <thead>

                                            <tr class="default">
                                                <th class="text-center"><b>Employee Id</b></th>
                                                <th class="text-center"><b>Month</b></th>
                                                <th class="text-center"><b>Salary Fixt</b></th>
                                                <th class="text-center"><b>Give Salary</b></th>
                                                <th class="text-center"><b>Due</b></th>
                                                <th class="text-center"><b>Status</b></th>
                                            </tr>

                                        </thead>
                                        <tbody>
                                            @foreach($payment_paid as $v)
                                            <tr>
                                                <td class="text-center"><b><a href="#">{{$v->emp_id_no}}</a></b></td>
                                                <td class="text-center"><b>
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
                                                        - {{$v->pay_year}}
                                                    </b></td>
                                                <td class="text-center">{{$v->total_amount}}</td> 
                                                <td class="text-center">{{$v->give_amount}}</td> 
                                                <td class="text-center">{{$v->due_amount}}</td> 
                                                <td class="text-center"><a href="#" class="btn btn-default btn-xs"><i class="fa fa-check text-success-light"></i> &nbsp; Paid &nbsp;&nbsp;</a></td>
                                            </tr>
                                            @endforeach()
                                        </tbody>
                                    </table>
                                </div>
                                <!-- end panel -->
                            </div>
                        </div>
                        <!-- end row -->
                    </div>

                    <div class="tab-pane fade" id="default-tab-4">
                        <!-- begin row -->
                        <div class="row">
                            <!-- begin Add_Salary -->
                            <div class="col-md-10 col-md-offset-1">
                                <span><p class=""></p></span>
                                <!-- begin panel -->
                                <div class="panel without-pagination clearfix m-b-0">
                                    <div class="form-group">
                                        <div class="col-sm-4">
                                            <strong class="text-success m-t-10">Service Assign Statement</strong>
                                        </div>
                                        <div class="col-sm-4 col-md-offset-4 m-b-10">
                                            <input class="form-control text-center" type="text" id="fullname" value="" placeholder=" Search here..." data-parsley-required="true" />
                                        </div>
                                    </div>

                                    <table class="table table-bordered table-hover" style="border:5px solid #EBECED !important">
                                        <thead>
                                            <tr class="default">
                                                <th class="text-center"><b>No</b></th>
                                                <th class="text-center"><b>Building - Floor - Unit</b></th>
                                                <th class="text-center"><b>Rental Name</b></th>
                                                <th class="text-center"><b>Service Take</b></th>
                                                <th class="text-center"><b>Service Assign</b></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $number = Session::get('rental_total') + 1;
                                            $a = 1;
                                            ?>
                                            @foreach($rental_show as $v)
                                            <tr>
                                                <td class="text-center"><span class="btn btn-default btn-xs">{{$number = $number-1}}</span></td>
                                                <td class="text-center"><b>{{$v->bld_name}} - {{$v->bld_floor}} - {{$v->bld_unit}}</b></td>
                                                <td>{{$v->rental_name}}</td>
                                                <td>Yes</td>
                                                <td class="text-center">
                                                    @if($v->person_status == 1)
                                                    <a href="#add-service-running" class="btn btn-default btn-xs" data-toggle="modal"><i class="fa fa-check text-success-light"></i> &nbsp; Running &nbsp;&nbsp;</a>
                                                    @else
                                                    <a href="#add-service" class="btn btn-warning btn-xs" data-toggle="modal"><i class="fa fa-plus"></i> Add Service </a>
                                                    @endif
                                                </td>
                                            </tr>
                                            @endforeach()
                                        </tbody>
                                    </table>
                                </div>
                                <!-- end panel -->
                            </div>
                            <!-- end Add_Salary -->
                        </div>
                        <!-- end row -->
                    </div>


                    <!-- begin modal -------------------------------------------->
                    <!-- begin show-bill-statement modal -->
                    <div class="col-md-6">
                        <div class="clearfix m-b-25">
                            <!-- #modal-dialog -->
                            <div class="modal fade" id="show-bill-statement">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title text-center">Your Running Service & Demo Bill Statement </h4>
                                        </div>
                                        <div class="modal-body">
                                            <!-- begin row panel body --->
                                            <div class="row">
                                                <!-- begin section-container -->
                                                <div class="section-container">
                                                    <div class="col-md-12 col-md-offset-2 m-t-10">
                                                        <!-- start Personal Information -->
                                                        <div class="col-md-8">
                                                            <dl class="dl-horizontal m-b-20 f-s-17">
                                                                <dt class="text-success">Taken Service</dt>
                                                                <dd class="text-success"><b>Demo Amount</b></dd>
                                                            </dl>
                                                            <dl class="dl-horizontal m-b-20 f-s-14" ng-repeat="value in data">
                                                                <dt>@{{value.service_type}} :</dt>
                                                                <dd>@{{value.amount}} /=</dd>
                                                            </dl><hr class="hr-d">
                                                            <dl class="dl-horizontal m-b-20 f-s-16">
                                                                <dt class="text-success">Total :</dt>
                                                                <dd class="text-success"><b>@{{sum(data)}} /=</b></dd>
                                                            </dl>
                                                        </div>
                                                        <!-- end Personal Information -->
                                                    </div>
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
                    <!-- end show-bill-statement modal -->

                    <!-- begin create-service-bill modal -->
                    <div class="col-md-6">
                        <div class="clearfix m-b-25">
                            <!-- #modal-dialog -->
                            <div class="modal fade" id="create-service-bill">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title text-center">Generate Rental Bill</h4>
                                        </div>
                                        <div class="modal-body">
                                            <!-- begin row panel body --->
                                            <div class="row well">
                                                <!-- begin section-container -->
                                                <div class="section-container">
                                                    {!! Form::open(array('url'=>'service-bill-generate', 'role'=>'form', 'method'=>'POST')) !!}
                                                    <span class="form-horizontal" data-parsley-validate="true" name="demo-form">

                                                        <div class="col-md-12 m-t-15">
                                                            <!-- start Personal Information -->
                                                            <div class="col-md-12">

                                                                <div class="form-group" ng-repeat="value in data">
                                                                    <label class="control-label col-sm-5" for="fullname"> <strong>@{{value.service_type}}</strong> <span class="text-danger">*</span></label>
                                                                    <div class="col-sm-3">
                                                                        <input class="form-control text-center" type="text" value="@{{value.amount}}" id="fullname" name="d" required="" data-parsley-required="true" />
                                                                    </div>
                                                                </div><hr class="hr-d m-b-15">

                                                            </div>
                                                            <!-- end Personal Information -->
                                                        </div>

                                                        <!-- begin submit button -->
                                                        <div class="form-group">
                                                            <label class="control-label col-sm-5"></label>
                                                            <div class="col-sm-5">
                                                                <button type="submit" class="btn btn-success width-xs">Bill Generate</button>
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
                    </div>
                    <!-- end create-service-bill modal -->

                    <!-- begin click-to-pay modal -->
                    <div class="col-md-6">
                        <div class="clearfix m-b-25">
                            <!-- #modal-dialog -->
                            <div class="modal fade" id="click-to-pay">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="text-center">Receive Payment</h4>
                                        </div>
                                        <div class="modal-body">
                                            <!-- begin row panel body --->
                                            <div class="row">
                                                <!-- begin title -->
                                                <div class="text-center">
                                                    <sapn class="f-s-18">Housing Society Management System</sapn></br>
                                                    <sapn>Dhanmondi, Dhaka - 1207</sapn></br>
                                                    <sapn>Phone: 01777888757</sapn></br>
                                                </div>
                                                <!-- end title -->
                                               
                                                <!-- begin invoice -->
                                                <div class="d_invoice" style="margin-left:40px; margin-right: 40px;">
                                                    <!-- begin invoice-header -->
                                                    <div class="invoice-header">
                                                        <!-- begin row -->
                                                        <div class="row">
                                                            <!-- begin col-6 -->
                                                            <div class="text-center">
                                                                <h4>Invoice Number:&nbsp; #05</h4>
                                                            </div>
                                                            <!-- end col-6 -->
                                                        </div>  
                                                        <!-- end row -->
                                                    </div>
                                                    <!-- end invoice-header -->
                                                    <!-- begin invoice-table -->
                                                    <div class="m-b-10"><b>Invoice Summary</b></div>

                                                    <table class="table">
                                                        <thead>
                                                            <tr class="default">
                                                                <th class="text-center"><b>Service Name</b></th>
                                                                <th class="text-center"><b>Price</b></th>
                                                        </thead>
                                                        <tbody>
                                                            <tr ng-repeat="value in data">
                                                                <td class="text-center">@{{value.service_type}}</td>
                                                                <td class="text-center">@{{value.amount}}</td>
                                                            </tr>
                                                            <tr class="col-md-offset-4">
                                                                <td class="text-right">
                                                                    <div>Total :</div></br>
                                                                    <div>Previous Due :</div></br>
                                                                    <div><b>Grand Total :</b></div></br>
                                                                    <div class="m-t-5"><b>Paid :</b></div></br>
                                                                    <div class="text-danger">Now, Due : &nbsp; 00.00</div></br>
                                                                    <div class="m-t-10">
                                                                        <a href="javascript:;" onclick="window.print()" class="btn btn-sm width-100 btn-rounded btn-danger"><i class="fa fa-print m-r-3"></i> Print</a>
                                                                    </div></br>
                                                                    
                                                                </td>
                                                                <td class="text-center">
                                                                    <div>@{{sum(data)}}</div></br>
                                                                    <div>00.00</div></br>
                                                                    <div><b>00.00</b></div></br>
                                                                    <div class="col-md-6 col-md-offset-3">
                                                                        <input class="form-control text-center f-s-16" type="text" name="d" value="" required="" placeholder=" 00.00 " data-parsley-required="true" /></br>
                                                                    </div></br>
                                                    </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <!-- end invoice-table -->
                                                </div>
                                                <!-- end invoice -->    
                                            </div>
                                            <!-- end row panel body --->
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- end click-to-pay modal -->

                    <!-- begin view-rental-invoice modal -->
                    <div class="col-md-6">
                        <div class="clearfix m-b-25">
                            <!-- #modal-dialog -->
                            <div class="modal fade" id="view-rental-invoice">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title text-center">Rental Invoice Statement</h4>
                                        </div>
                                        <div class="modal-body">
                                            <!-- begin row panel body --->
                                            <div class="row">
                                                <!-- begin invoice -->
                                                <div class="invoice">
                                                    <span class="pull-right hidden-print">
                                                        <a href="javascript:;" onclick="window.print()" class="btn btn-sm width-100 btn-rounded btn-danger"><i class="fa fa-print m-r-3"></i> Print</a>
                                                    </span>
                                                    <!-- begin invoice-title -->
                                                    <h4 class="">
                                                        <i class="fa fa-file-text text-muted"></i> Invoice
                                                    </h4>
                                                    <!-- end invoice-title -->
                                                    <!-- begin invoice-header -->
                                                    <div class="invoice-header">
                                                        <!-- begin row -->
                                                        <div class="row">
                                                            <!-- begin col-6 -->
                                                            <div class="text-center">
                                                                <h4>Invoice Number:&nbsp; #05</h4>
                                                            </div>
                                                            <!-- end col-6 -->
                                                        </div>  
                                                        <!-- end row -->
                                                    </div>
                                                    <!-- end invoice-header -->
                                                    <!-- begin invoice-table -->
                                                    <div class="m-b-10"><b>Invoice Summary</b></div>

                                                    <table class="table">
                                                        <thead>
                                                            <tr class="default">
                                                                <th class="text-center"><b>Service Name</b></th>
                                                                <th class="text-center"><b>Price</b></th>
                                                        </thead>
                                                        <tbody>
                                                            <tr ng-repeat="value in data">
                                                                <td class="text-center">@{{value.service_type}}</td>
                                                                <td class="text-center">@{{value.amount}}</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center"><b>Total:</b></td>
                                                                <td class="text-center"><b>@{{sum(data)}}</b></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <!-- end invoice-table -->
                                                </div>
                                                <!-- end invoice -->
                                            </div>
                                            <!-- end row panel body --->
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- end view-rental-invoice modal -->

                    <!-- begin add-service modal -->
                    <div class="col-md-6">
                        <div class="clearfix m-b-25">
                            <!-- #modal-dialog -->
                            <div class="modal fade" id="add-service">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title text-center">Add Your Service</h4>
                                        </div>
                                        <div class="modal-body">
                                            <!-- begin row panel body --->
                                            <div class="row">
                                                <!-- begin section-container -->
                                                <div class="section-container">
                                                    {!! Form::open(array('url'=>'-add-salary-', 'role'=>'form', 'method'=>'POST')) !!}
                                                    <span class="form-horizontal" data-parsley-validate="true" name="demo-form">

                                                        <div class="col-md-12 m-t-15">
                                                            <!-- start Personal Information -->
                                                            <div class="col-md-12">
                                                                <!-- begin table -->
                                                                <div class="m-b-10"><b>Select Your Service</b></div>

                                                                <table class="table">
                                                                    <thead>
                                                                        <tr class="default" title="Selecte All">
                                                                            <th class="text-center"><b>No</b></th>
                                                                            <th class="text-center"><b>Service Name</b></th>
                                                                            <th class="text-center">
                                                                                <input type="hidden" value=""  style="width:20px"/>
                                                                                <input type="checkbox" name="employee_sal_id[]" value="" title="Selecte All" style="float: left; margin: 0 0 0 10px;width: 20px;height: 20px;">
                                                                            </th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td class="text-center">1</td>
                                                                            <td class="text-center">Electricity</td>
                                                                            <td class="text-center">
                                                                                <input type="hidden" value=""  style="width:20px"/>
                                                                                <input type="checkbox" name="employee_sal_id[]" value="" style="float: left; margin: 0 0 0 10px;width: 20px;height: 20px;">
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="text-center">2</td>
                                                                            <td class="text-center">Electricity</td>
                                                                            <td class="text-center">
                                                                                <input type="hidden" value=""  style="width:20px"/>
                                                                                <input type="checkbox" name="employee_sal_id[]" value="" style="float: left; margin: 0 0 0 10px;width: 20px;height: 20px;">
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="text-center">3</td>
                                                                            <td class="text-center">Electricity</td>
                                                                            <td class="text-center">
                                                                                <input type="hidden" value=""  style="width:20px"/>
                                                                                <input type="checkbox" name="employee_sal_id[]" value="" style="float: left; margin: 0 0 0 10px;width: 20px;height: 20px;">
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <!-- end table -->
                                                                <hr class="hr-d m-b-15">

                                                            </div>
                                                            <!-- end Personal Information -->
                                                        </div>

                                                        <!-- begin submit button -->
                                                        <div class="form-group">
                                                            <label class="control-label col-sm-4"></label>
                                                            <div class="col-sm-6">
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
                    </div>
                    <!-- end add-service modal -->

                    <!-- begin add-service modal -->
                    <div class="col-md-6">
                        <div class="clearfix m-b-25">
                            <!-- #modal-dialog -->
                            <div class="modal fade" id="add-service-running">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title text-center">Your Running Service</h4>
                                        </div>
                                        <div class="modal-body">
                                            <!-- begin row panel body --->
                                            <div class="row">
                                                <!-- begin section-container -->
                                                <div class="section-container">
                                                    {!! Form::open(array('url'=>'-add-salary-', 'role'=>'form', 'method'=>'POST')) !!}
                                                    <span class="form-horizontal" data-parsley-validate="true" name="demo-form">

                                                        <div class="col-md-12 m-t-15">
                                                            <!-- start Personal Information -->
                                                            <div class="col-md-12">
                                                                <!-- begin table -->
                                                                <div class="m-b-10"><b>Select Your Service</b></div>

                                                                <table class="table">
                                                                    <thead>
                                                                        <tr class="default" title="Selecte All">
                                                                            <th class="text-center"><b>No</b></th>
                                                                            <th class="text-center"><b>Service Name</b></th>
                                                                            <th class="text-center">
                                                                                <input type="hidden" value=""  style="width:20px"/>
                                                                                <input type="checkbox" name="employee_sal_id[]" value="" title="Selecte All" style="float: left; margin: 0 0 0 10px;width: 20px;height: 20px;">
                                                                            </th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td class="text-center">1</td>
                                                                            <td class="text-center">Electricity</td>
                                                                            <td class="text-center">
                                                                                <input type="hidden" value=""  style="width:20px"/>
                                                                                <input type="checkbox" name="employee_sal_id[]" value="" style="float: left; margin: 0 0 0 10px;width: 20px;height: 20px;">
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="text-center">2</td>
                                                                            <td class="text-center">Electricity</td>
                                                                            <td class="text-center">
                                                                                <input type="hidden" value=""  style="width:20px"/>
                                                                                <input type="checkbox" name="employee_sal_id[]" value="" style="float: left; margin: 0 0 0 10px;width: 20px;height: 20px;">
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="text-center">3</td>
                                                                            <td class="text-center">Electricity</td>
                                                                            <td class="text-center">
                                                                                <input type="hidden" value=""  style="width:20px"/>
                                                                                <input type="checkbox" name="employee_sal_id[]" value="" style="float: left; margin: 0 0 0 10px;width: 20px;height: 20px;">
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <!-- end table -->
                                                                <hr class="hr-d m-b-15">

                                                            </div>
                                                            <!-- end Personal Information -->
                                                        </div>

                                                        <!-- begin submit button -->
                                                        <div class="form-group">
                                                            <label class="control-label col-sm-4"></label>
                                                            <div class="col-sm-6">
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
                    </div>
                    <!-- end add-service modal -->

                    <!-- end modal -------------------------------------------->
                </div>
            </div>
            <!-- end panel -->
        </div>
        <!-- end col-12 -->
    </div>
    <!-- end row -->
</div>
<!-- end section-container -->
@endsection