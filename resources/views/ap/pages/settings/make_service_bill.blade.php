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
                    <div class="row">
                    </div>
                </div>
                <ul class="nav nav-tabs col-md-offset-1">
                    <li class="active"><a href="#default-tab-1" data-toggle="tab"><i class="fa fa-list"> </i> Service Bill Statement</a></li>
                    <li class=""><a href="#default-tab-2" data-toggle="tab"><i class="fa fa-save"> </i> Invoice</a></li>
                    <li class=""><a href="#default-tab-3" data-toggle="tab"><i class="fa fa-credit-card"></i> Payment</a></li>
                    <li class=""><a href="#default-tab-4" data-toggle="tab"><i class="fa fa-save"></i> Invoice All</a></li>
                    <li class=""><a href="#default-tab-5" data-toggle="tab"><i class="fa fa-plus"></i> Add Service</a></li>
                    <!--  <li class=""><a href="#default-tab-5" data-toggle="tab"><i class="fa fa-user"></i> Complain</a></li>
                    <li class=""><a href="#default-tab-6" data-toggle="tab"><i class="fa fa-user"></i> Salary Statement</a></li>-->
                </ul>
                <div class="tab-content m-b-0" style="overflow: scroll; overflow-x: hidden; overflow-y: auto; height: 450px;">
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
                                        <div class="col-sm-4">
                                            <strong class="text-danger m-t-10">{{Session::get('pay_amount_not_big')}}</strong>
                                        </div>
                                        <div class="col-sm-4 m-b-10">
                                            <input class="form-control text-center" type="text" id="fullname" value="" placeholder=" Search here..." data-parsley-required="true" />
                                        </div>
                                    </div>
                                    <table class="table table-bordered table-hover" style="border:5px solid #EBECED !important">
                                        <thead>
                                            <tr class="default">
                                                <th class="text-center"><b>No </b></th>
                                                <th class="text-center"><b>Building - Floor - Unit</b></th>
                                                <th class="text-center"><b>Rental Name</b></th>
                                                <th class="text-center"><b>Month</b></th>
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
                                                <td class="text-center"><span class="btn btn-default btn-xs">{{$number = $number - 1}}</span></td>
                                                <td class="text-center"><b>{{$v -> bld_name}} - {{$v -> bld_floor}} - {{$v -> bld_unit}}</b></td>
                                                <td>{{$v-> rental_name}}</td>
                                                <td>
                                                    <b>
                                                        {{$v -> year_define}} - 
                                                        @if($v->month_define == 1)
                                                        January
                                                        @elseif($v->month_define == 2)
                                                        February
                                                        @elseif($v->month_define == 3)
                                                        March
                                                        @elseif($v->month_define == 4)
                                                        April
                                                        @elseif($v->month_define == 5)
                                                        May
                                                        @elseif($v->month_define == 6)
                                                        June
                                                        @elseif($v->month_define == 7)
                                                        July
                                                        @elseif($v->month_define == 8)
                                                        August
                                                        @elseif($v->month_define == 9)
                                                        September
                                                        @elseif($v->month_define == 10)
                                                        October
                                                        @elseif($v->month_define == 11)
                                                        November
                                                        @elseif($v->month_define == 12)
                                                        December
                                                        @endif
                                                    </b>
                                                </td>
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
                                    <div class="form-group f-s-16">
                                        <div class="col-sm-4">
                                            <strong class="text-success m-t-10">Rental Service Statement</strong>
                                        </div>
                                        <div class="col-sm-4 m-b-10 col-md-offset-4">
                                            <strong class="text-success m-t-10">Create New Bill For New Month</strong>
                                        </div>
                                    </div>
                                    <!-- begin row --->
                                    <div class="row">
                                        <!-- begin section-container -->
                                        <div class="section-container">
                                            <div class="col-md-12 col-md-offset-2 m-t-10">
                                                <!--start month_year -->
                                                <div class="col-md-8 col-md-offset-1">
                                                    <div class="form-group">
                                                        <div class="col-sm-3"><h5 class="text-center text-success">Month</h5>
                                                            <select class="form-control" id="select-required" ng-model="select_month" required="" data-parsley-required="true">
                                                                <option value="1">January</option>
                                                                <option value="2">February</option>
                                                                <option value="3">March</option>
                                                                <option value="4">April</option>
                                                                <option value="5">May</option>
                                                                <option value="6">June</option>
                                                                <option value="7">July</option>
                                                                <option value="8">August</option>
                                                                <option value="9">September</option>
                                                                <option value="10">October</option>
                                                                <option value="11">November</option>
                                                                <option value="12">December</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-3"><h5 class="text-center text-success">Year</h5>
                                                            <select class="form-control" id="select-required" ng-model="select_year" required="" data-parsley-required="true">
                                                                <option value="2017">2017</option>
                                                                <option value="2018">2018</option>
                                                                <option value="2019">2019</option>
                                                                <option value="2020">2020</option>
                                                                <option value="2021">2021</option>
                                                                <option value="2022">2022</option>
                                                                <option value="2023">2023</option>
                                                                <option value="2024">2024</option>
                                                                <option value="2025">2025</option>
                                                                <option value="2026">2026</option>
                                                                <option value="2027">2027</option>
                                                                <option value="2028">2028</option>
                                                                <option value="2029">2029</option>
                                                                <option value="2030">2030</option>
                                                            </select>
                                                        </div>
                                                        <b class="text-danger">{{Session::get('mistake')}}{{Session::put('mistake', '')}}</b>
                                                    </div>
                                                </div>
                                                <!--end month_year-->
                                            </div>
                                            
                                            <div class="col-md-12 col-md-offset-2 m-t-10">
                                                <div class="col-md-6 text-center">
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
                                                                                        <input type="hidden" name="a" value="@{{select_month}}" />
                                                                                        <input type="hidden" name="b" value="@{{select_year}}" />
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
                            <div class="col-md-12 col-md-offset-0">
                                <span><p class=""></p></span>
                                @if(!$invoice_bill->isEmpty())
                                <!-- begin panel -->
                                <div class="panel without-pagination clearfix m-b-0">
                                    <div class="form-group">
                                        <div class="col-sm-4">
                                            <strong class="text-success m-t-10">Rental Invoice</strong>
                                        </div>
                                        <div class="col-sm-4">
                                            <strong class="text-danger m-t-10">{{Session::get('pay_amount_not_big')}}{{Session::put('pay_amount_not_big', '')}}</strong>
                                        </div>
                                        <div class="col-sm-4 m-b-10">
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
                                            <?php $number = 0;
                                            $off = 0;
                                            $on = 1; ?>
                                            @foreach($invoice_bill as $v) 
                                            <tr>
                                                <td class="text-center"><span class="text-success"><b class="btn btn-default btn-xs">#{{$v -> invoice_id}}</b></span></td>
                                                <td class="text-center" title="{{$v -> rental_name}}">{{$v -> bld_name}} - {{$v -> bld_floor}} - {{$v -> bld_unit}}</td>
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
                                                <td class="text-center">{{$v -> invoice_amount_total}}</td>
                                                <td class="text-center">{{$v -> created_at}}</td>
                                                <td class="text-center">
                                                    <a href="#click-to-pay" class="btn btn-danger btn-xs" title="unPaid" data-toggle="modal" ng-click="service_bill_invoice_view({{$v -> invoice_id}})"><i class="fa fa-remove"></i> Click To Pay</a>&nbsp; &nbsp;
                                                    <a href="#view-rental-invoice" class="btn btn-default btn-xs" data-toggle="modal" title="Invoice View" ng-click="service_bill_invoice_view({{$v -> invoice_id}})"><i class="fa fa-eye text-success-light"></i></a>
                                                </td>
                                            </tr>
                                            @endforeach()
                                        </tbody>
                                    </table>
                                </div>
                                <!-- end panel -->
                                @else
                                <h2 class="text-center text-danger m-t-20"><b>Now, Invoice Is Empty!!!</b></h2>
                                <h4 class="text-center text-success m-t-20"><b>Create Service Bill To See Invoice...</b></h4>
                                @endif
                            </div>
                            <!-- end Add_Salary -->
                        </div>
                        <!-- end row -->
                    </div>

                    <div class="tab-pane fade" id="default-tab-3">
                        <!-- begin row -->
                        <div class="row">
                            <!-- begin Add_Salary -->
                            <div class="col-md-12 col-md-offset-0">
                                <span><p class=""></p></span>
                                @if(!$payment_paid->isEmpty())
                                <!-- begin panel -->
                                <div class="panel without-pagination clearfix m-b-0">
                                    <div class="form-group">
                                        <div class="col-sm-4 m-b-10">
                                            <strong class="text-success m-t-10">Monthly Rental Bill History</strong>
                                        </div>
                                        <div class="col-sm-4">
                                            <strong class="text-danger m-t-10">{{Session::get('pay_amount_due_not_big')}}{{Session::put('pay_amount_due_not_big', '')}}</strong>
                                        </div>
                                        <div class="col-sm-4 m-b-10">
                                            <input class="form-control text-center" type="text" id="fullname" value="" placeholder=" Search here..." data-parsley-required="true" />
                                        </div>
                                    </div>
                                    
                                    <table class="table table-bordered table-hover" style="border:5px solid #EBECED !important">
                                        <thead>

                                            <tr class="default">
                                                <th class="text-center"><b>No </b></th>
                                                <th class="text-center"><b>Location</b></th>
                                                <th class="text-center"><b>Rental Name</b></th>
                                                <th class="text-center"><b>Month</b></th>
                                                <th class="text-center"><b>Payable</b></th>
                                                <th class="text-center"><b>Pay Amount</b></th>
                                                <th class="text-center"><b>Due Amount</b></th>
                                                <th class="text-center"><b>Status</b></th>
                                            </tr>

                                        </thead>
                                        <tbody>
                                            <?php
                                            $number = Session::get('payment_paid') + 1;
                                            $a = 1;
                                            ?>
                                            @foreach($payment_paid as $v)
                                            <tr>
                                                <td class="text-center"><span class="btn btn-default btn-xs">{{$number = $number - 1}}</span></td>
                                                <td class="text-center"><b>{{$v -> bld_name}} - {{$v -> bld_floor}} - {{$v -> bld_unit}}</b></td>
                                                <td>{{$v-> rental_name}}</td>
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
                                                <td class="text-center">{{$v -> payable_amount}}</td>
                                                <td class="text-center">{{$v -> pay_amount}}</td>
                                                <td class="text-center">
                                                    @if($v->due_amount != 0)
                                                    <b class="text-danger">{{$v -> due_amount}}</b>
                                                    @else
                                                    <span>00.00</span>
                                                    @endif
                                                </td>
                                                <td class="text-center">
                                                    @if($v->pay_status == 1)
                                                    <a class="btn btn-default btn-xs" title="Payment Paid "><i class="fa fa-check text-success-light"></i>&nbsp;&nbsp; Paid &nbsp; &nbsp;&nbsp;</a>&nbsp;
                                                    @elseif($v->pay_status == 2 && ($v->due_amount < 0))
                                                    <a class="btn btn-default btn-xs" title="Payment Advance {{$v -> due_amount}} Taka"><i class="fa fa-plus text-warning-light"></i><span class="text-warning-light"> Advance</span></a>&nbsp;
                                                    @else
                                                    <a href="#click-to-due-pay" class="btn btn-default btn-xs" data-toggle="modal" ng-click="service_bill_invoice_due({{$v -> rental_id}})" title="Payment unPaid, Click To Pay"><i class="fa fa-remove text-danger-light"> </i><span class="text-danger-light"> &nbsp; unPaid&nbsp;</span></a>&nbsp;
                                                    @endif
                                                    
                                                    <a href="{{URL::to('info-rental-details/'.$v->rental_details_id)}}" class="btn btn-default btn-xs" title="See Details Information"><i class="fa fa-list-ul"></i> </a>
                                                </td>
                                            </tr>
                                            @endforeach()
                                        </tbody>
                                    </table>
                                </div>
                                <!-- end panel -->
                                @else
                                <h2 class="text-center text-danger m-t-20"><b>Now, Payment Is Empty!!!</b></h2>
                                <h4 class="text-center text-success m-t-20"><b>When, Submit Bill Pay To See Payment...</b></h4>
                                @endif
                            </div>
                        </div>
                        <!-- end row -->
                    </div>

                    <div class="tab-pane fade" id="default-tab-4">
                        <!-- begin row -->
                        <div class="row">
                            <!-- begin Add_Salary -->
                            <div class="col-md-12 col-md-offset-0">
                                <span><p class=""></p></span>
                                @if(!$invoice_bill_all->isEmpty())
                                <!-- begin panel -->
                                <div class="panel without-pagination clearfix m-b-0">
                                    <div class="form-group">
                                        <div class="col-sm-4">
                                            <strong class="text-success m-t-10">All Invoice</strong>
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
                                            <?php $number = 0;
                                            $off = 0;
                                            $on = 1; ?>
                                            @foreach($invoice_bill_all as $v) 
                                            <tr>
                                                <td class="text-center"><span class="text-success"><b class="btn btn-default btn-xs">#{{$v -> invoice_id}}</b></span></td>
                                                <td class="text-center" title="{{$v -> rental_name}}">{{$v -> bld_name}} - {{$v -> bld_floor}} - {{$v -> bld_unit}}</td>
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
                                                <td class="text-center">{{$v -> invoice_amount_total}}</td>
                                                <td class="text-center">{{$v -> created_at}}</td>
                                                <td class="text-center">
                                                    <a href="#view-service-download" class="btn btn-default btn-xs" data-toggle="modal" title="Invoice Download" ng-click="service_bill_invoice_view({{$v->rental_id}})"><i class="fa fa-download text-success-light">&nbsp; Download</i></a>&nbsp; &nbsp;
                                                    <a href="#view-service-taken" class="btn btn-default btn-xs" title="view Service Taken" data-toggle="modal" ng-click="service_bill_invoice_item_view({{$v->invoice_id}})"><i class="fa fa-list text-success-light"></i> </a>
                                                </td>
                                            </tr>
                                            @endforeach()
                                        </tbody>
                                    </table>
                                </div>
                                <!-- end panel -->
                                @else
                                <h2 class="text-center text-danger m-t-20"><b>Now, Invoice Is Empty!!!</b></h2>
                                <h4 class="text-center text-success m-t-20"><b>Create Service Bill To See Invoice...</b></h4>
                                @endif
                            </div>
                            <!-- end Add_Salary -->
                        </div>
                        <!-- end row -->
                    </div>

                    <div class="tab-pane fade" id="default-tab-5">
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
                                        <div class="col-sm-4">
                                            <b class="text-danger">{{Session::get('not_taken')}}{{Session::put('not_taken', '')}}</b>
                                        </div>
                                        <div class="col-sm-4 m-b-10">
                                            <input class="form-control text-center" type="text" id="fullname" value="" placeholder=" Search here..." data-parsley-required="true" />
                                        </div>
                                    </div>
                                     
                                    <table class="table table-bordered table-hover" style="border:5px solid #EBECED !important">
                                        <thead>
                                            <tr class="default">
                                                <th class="text-center"><b>No</b></th>
                                                <th class="text-center"><b>Building - Floor - Unit</b></th>
                                                <th class="text-center"><b>Rental Name</b></th>
                                                <th class="text-center"><b>Service Taken</b></th>
                                                <th class="text-center"><b>Action</b></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $number = Session::get('assign_statement') + 1;
                                            $a = 1;
                                            ?>
                                            @foreach($assign_statement as $v)
                                            <tr>
                                                <td class="text-center"><span class="btn btn-default btn-xs">{{$number = $number - 1}}</span></td>
                                                <td class="text-center"><b>{{$v -> bld_name}} - {{$v -> bld_floor}} - {{$v -> bld_unit}}</b></td>
                                                <td>{{$v -> rental_name}}</td>
                                                <td class="text-center">
                                                    @if($v->rental_bill_status == 00)
                                                    <b class="text-danger">No</b>
                                                    @else
                                                    Yes
                                                    @endif
                                                </td>
                                                <td class="text-center">
                                                    @if($v->rental_bill_status == 00)
                                                    <a href="#add-service" class="btn btn-warning btn-xs" data-toggle="modal" ng-click="add_rental_service({{$v->rental_id}})"><i class="fa fa-plus">&nbsp;&nbsp;</i>&nbsp;&nbsp;  Add &nbsp;&nbsp;&nbsp;</a>&nbsp;
                                                    @else
                                                    <a href="#add-service-running" class="btn btn-default btn-xs" data-toggle="modal" ng-click="running_rental_service({{$v->rental_id}})"><i class="fa fa-check text-success-light"></i> Running</a>&nbsp;
                                                    @endif

                                                    <a href="{{URL::to('info-rental-details/'.$v->rental_details_id)}}" class="btn btn-default btn-xs" title="See Details Information"><i class="fa fa-list-ul"></i> </a>
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


                    <!--start modal------------------------------------------------------->
                    <div class="col-md-6">
                        <div class="clearfix m-b-25">
                            
                            <!--start modal show-bill-statement-->
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
                            <!--end modal show-bill-statement-->
                            
                             <!--start modal create-service-bill-->
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
                                                                    <input type="hidden" name="rntl_id" value="@{{value.rental_id}}">

                                                                    <input type="hidden" name="s_a_id[]" value="@{{value.service_assigned_id}}">

                                                                    <div class="col-sm-3">
                                                                        <input class="form-control text-center" type="text" name="amount[]" value="@{{value.amount}}" id="fullname" required="" data-parsley-required="true" />
                                                                    </div>
                                                                </div>

                                                                <hr class="hr-d m-b-15">

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
                            <!--end modal create-service-bill-->
                            
                            <!--start modal click-to-pay-->
                            <div class="modal fade" id="click-to-pay">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="text-center">Receive Payment</h4>
                                        </div>
                                        <div class="modal-body">
                                            <!-- begin row panel body --->
                                            <div class="row" id="pintAreaSelect">
                                                <!-- begin title -->
                                                <div class="text-center">
                                                    <sapn class="f-s-18">Housing Society Management System</sapn></br>
                                                    <sapn>Dhanmondi, Dhaka - 1207</sapn></br>
                                                    <sapn>Phone: 01777888757</sapn></br>
                                                </div>
                                                <div class="col-md-10 col-md-offset-1 p-10 m-l-40 b-b-dashed" ng-repeat="invoice in invoice_view|limitTo:1" style="border-bottom: 1px solid #e6ebf1; margin-bottom: 10px;">
                                                    <div class="col-md-6 text-left"><b>@{{invoice.rental_name}}</b></br>@{{invoice.rental_id_no}}</div>
                                                    <div class="col-md-6 text-right"><b>@{{invoice.bld_name}}</b> building - <b>@{{invoice.bld_floor}}</b> floor - <b>@{{invoice.bld_unit}}</b> unit</br>@{{1288323623006| date:"MM/dd/yyyy 'at' h:mma"}}</div>
                                                </div></br>
                                                <!-- end title -->

                                                <!-- begin invoice -->
                                                <div class="d_invoice" style="margin-left:40px; margin-right: 40px;">
                                                    <!-- begin invoice-header -->
                                                    <div class="invoice-header">
                                                        <!-- begin row -->
                                                        <div class="row">
                                                            <!-- begin col-6 -->
                                                            <div class="text-center" ng-repeat="invoice in invoice_view|limitTo:1">
                                                                <h4>
                                                                    Invoice Number:&nbsp; #@{{invoice.invoice_id}} &nbsp; &nbsp;  &nbsp; 
                                                                    @{{invoice.invoice_year}} - 
                                                                    <span ng-if="invoice.invoice_month == 1">January</span>
                                                                    <span ng-if="invoice.invoice_month == 2">February</span>
                                                                    <span ng-if="invoice.invoice_month == 3">March</span>
                                                                    <span ng-if="invoice.invoice_month == 4">April</span>
                                                                    <span ng-if="invoice.invoice_month == 5">May</span>
                                                                    <span ng-if="invoice.invoice_month == 6">June</span>
                                                                    <span ng-if="invoice.invoice_month == 7">July</span>
                                                                    <span ng-if="invoice.invoice_month == 8">August</span>
                                                                    <span ng-if="invoice.invoice_month == 9">September</span>
                                                                    <span ng-if="invoice.invoice_month == 10">October</span>
                                                                    <span ng-if="invoice.invoice_month == 11">November</span>
                                                                    <span ng-if="invoice.invoice_month == 12">December</span> - @{{invoice.invoice_year}}
                                                                </h4>
                                                            </div>
                                                            <!-- end col-6 -->
                                                        </div>  
                                                        <!-- end row -->
                                                    </div>
                                                    <!-- end invoice-header -->
                                                    <!-- begin invoice-table -->
                                                    <div class="m-b-10"><b>Invoice Summary</b></div>
                                                    {!! Form::open(array('url'=>'service-bill-payment', 'role'=>'form', 'method'=>'POST')) !!}

                                                    <table class="table">
                                                        <thead>
                                                            <tr class="default">
                                                                <th class="text-center"><b>Service Name</b></th>
                                                                <th class="text-center"><b>Price</b></th>
                                                        </thead>
                                                        <tbody>
                                                        <tr ng-repeat="invoice in invoice_view">
                                                            <td class="text-center">@{{invoice.invoice_item_name}}</td>
                                                            <td class="text-center">@{{invoice.invoice_item_amount}}</td>
                                                            <input type="hidden" name="a" value="@{{invoice.invoice_id}}" />
                                                            <input type="hidden" name="b" value="@{{invoice.rental_id}}" />
                                                            <input type="hidden" name="c" value="@{{invoice.flat_info_id}}" />
                                                            <input type="hidden" name="d" value="@{{invoice.invoice_month}}" />
                                                            <input type="hidden" name="e" value="@{{invoice.invoice_year}}" />

                                                            <input type="hidden" name="f" value="@{{invoice.invoice_grand_total}}" />
                                                        </tr>
                                                        <tr class="col-md-offset-4" ng-repeat="invoice in invoice_view|limitTo:1">
                                                            <td class="text-right">
                                                                <div>Total :</div></br>
                                                                <div>Previous Due :</div></br>
                                                                <div><b>Grand Total :</b></div></br>
                                                                <div class="m-t-5"><b>Paid :</b></div></br>
                                                                <div class="m-t-5 text-danger"><b>Now, Due :</b></div></br>
                                                                <div class="m-t-0">
                                                                    <!--<a href="javascript:;" onclick="window.print()" class="btn btn-sm width-100 btn-rounded btn-danger"><i class="fa fa-print m-r-3"></i> Print</a>-->
                                                                    <button type="submit" class="btn btn-sm width-100 btn-rounded btn-danger"><i class="fa fa-print m-r-3"></i> Print</button>
                                                                </div></br>

                                                            </td>
                                                            <td class="text-center">
                                                                <div>@{{invoice.invoice_amount_total}}</div></br>
                                                                <div>@{{invoice.invoice_previous_due}}</div></br>
                                                                <div><b>@{{invoice.invoice_grand_total}}</b></div></br>
                                                                <div class="col-md-6 col-md-offset-3">
                                                                    <input class="form-control text-center f-s-16" type="text" name="g" ng-model="paid_amount" value="" required="" placeholder=" 00.00 " data-parsley-required="true" /></br>

                                                                </div></br>
                                                                <div class="col-md-6 col-md-offset-3">
                                                                    <b class="text-danger" ng-hide="!paid_amount">
                                                                        <span ng-if="paid_amount >= 0">@{{invoice.invoice_grand_total - paid_amount}}</span>
                                                                        <span ng-if="paid_amount < 0">Do Not Input</span>
                                                                    </b>
                                                                </div></br>
                                                            </td>
                                                        </tr>
                                                  </tbody>
                                                    </table>
                                                    {!! Form::close() !!}
                                                    <!-- end invoice-table -->
                                                </div>
                                                <!-- end invoice -->    
                                            </div>
                                            <!-- end row panel body --->
                                            
                                            <!--start row print -->
                                            <div class="row text-center m-b-20">
                                                <!--<button onclick="printContent('pintAreaSelect')" class="btn btn-sm width-100 btn-rounded btn-danger"><i class="fa fa-print m-r-3"></i> Print</button>-->
                                            </div>
                                            <!--end row print -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end modal click-to-pay-->

                            <!--start modal click-to-due-pay-->
                                <div class="modal fade" id="click-to-due-pay">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                <h4 class="text-center">Receive Due Payment</h4>
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
                                                    <div class="col-md-10 col-md-offset-1 p-10 m-l-40 b-b-dashed" ng-repeat="invoice in invoice_due" style="border-bottom: 1px solid #e6ebf1; margin-bottom: 10px;">
                                                        <div class="col-md-6 text-left"><b>@{{invoice.rental_name}}</b></br>@{{invoice.rental_id_no}}</div>
                                                        <div class="col-md-6 text-right"><b>@{{invoice.bld_name}}</b> building - <b>@{{invoice.bld_floor}}</b> floor - <b>@{{invoice.bld_unit}}</b> unit</br>@{{1288323623006| date:"MM/dd/yyyy 'at' h:mma"}}</div>
                                                    </div></br>
                                                    <!-- end title -->

                                                    <!-- begin invoice -->
                                                    <div class="d_invoice" style="margin-left:40px; margin-right: 40px;">
                                                        <!-- begin invoice-header -->
                                                        <div class="invoice-header">
                                                            <!-- begin row -->
                                                            <div class="row">
                                                                <!-- begin col-6 -->
                                                                <div class="text-center" ng-repeat="invoice in invoice_due">
                                                                    <h4>Invoice Number:&nbsp; #@{{invoice.invoice_id}}</h4>
                                                                </div>
                                                                <!-- end col-6 -->
                                                            </div>  
                                                            <!-- end row -->
                                                        </div>
                                                        <!-- end invoice-header -->
                                                        <!-- begin invoice-table -->
                                                        <div class="m-b-10"><b>Invoice Summary</b></div>
                                                        {!! Form::open(array('url'=>'service-bill-payment-due', 'role'=>'form', 'method'=>'POST')) !!}

                                                        <table class="table">
                                                            <thead>
                                                                <tr class="default">
                                                                    <th class="text-center"><b>Service Name</b></th>
                                                                    <th class="text-center"><b>Price</b></th>
                                                            </thead>
                                                            <tbody>
                                                            <tr class="col-md-offset-4" ng-repeat="invoice in invoice_due">
                                                                <td class="text-right">
                                                                    <div>Previous Due :</div></br>
                                                                    <div><b>Grand Total :</b></div></br>
                                                                    <div class="m-t-5"><b>Paid :</b></div></br>
                                                                    <div class="m-t-5 text-danger"><b>Now, Due :</b></div></br>
                                                                    <div class="m-t-10">
                                                                        <!--<a href="javascript:;" onclick="window.print()" class="btn btn-sm width-100 btn-rounded btn-danger"><i class="fa fa-print m-r-3"></i> Print</a>-->
                                                                        <button type="submit" class="btn btn-sm width-100 btn-rounded btn-danger"><i class="fa fa-print m-r-3"></i> Print</button>
                                                                    </div></br>

                                                                </td>
                                                                <td class="text-center">
                                                                    <div>@{{invoice.due_amount}}</div></br>
                                                                    <div><b>@{{invoice.due_amount}}</b></div></br>
                                                                    <div class="col-md-6 col-md-offset-3">
                                                                        <input class="form-control text-center f-s-16" type="text" name="g" ng-model="paid_amount" value="" required="" placeholder=" 00.00 " data-parsley-required="true" /></br>

                                                                    </div></br>
                                                                    <div class="col-md-6 col-md-offset-3">
                                                                        <b class="text-danger" ng-hide="!paid_amount">@{{invoice.due_amount - paid_amount}}</b>
                                                                        <input type="hidden" name="a" value="@{{invoice.invoice_id}}" />
                                                                        <input type="hidden" name="b" value="@{{invoice.rental_id}}" />
                                                                        <input type="hidden" name="c" value="@{{invoice.flat_info_id}}" />
                                                                        <input type="hidden" name="d" value="@{{invoice.pay_month}}" />
                                                                        <input type="hidden" name="e" value="@{{invoice.pay_year}}" />
                                                                        <input type="hidden" name="f" value="@{{invoice.due_amount}}" />
                                                                    </div></br>
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                        {!! Form::close() !!}
                                                        <!-- end invoice-table -->
                                                    </div>
                                                    <!-- end invoice -->    
                                                </div>
                                                <!-- end row panel body --->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <!--end modal click-to-due-pay-->
                            
                            <!--start modal view-rental-invoice-->
                            <div class="modal fade" id="view-rental-invoice">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title text-center">Rental Invoice Statement</h4>
                                        </div>
                                        <div class="modal-body">
                                            <!-- begin row panel body --->
                                            <div class="row" id="pintAreaSelect_invoice_show">
                                                <!-- begin title -->
                                                <div class="text-center">
                                                    <sapn class="f-s-18">Housing Society Management System</sapn></br>
                                                    <sapn>Dhanmondi, Dhaka - 1207</sapn></br>
                                                    <sapn>Phone: 01777888757</sapn></br>
                                                </div>
                                                <div class="col-md-10 col-md-offset-1 p-10 m-l-40 b-b-dashed" ng-repeat="invoice in invoice_view|limitTo:1" style="border-bottom: 1px solid #e6ebf1; margin-bottom: 10px;">
                                                    <div class="col-md-6 text-left"><b>@{{invoice.rental_name}}</b></br>@{{invoice.rental_id_no}}</div>
                                                    <div class="col-md-6 text-right"><b>1</b> building - <b>5</b> floor - <b>A</b> unit</br>@{{1288323623006| date:"MM/dd/yyyy 'at' h:mma"}}</div>
                                                </div></br>
                                                <!-- end title -->

                                                <!-- begin invoice -->
                                                <div class="d_invoice" style="margin-left:40px; margin-right: 40px;">
                                                    <!-- begin invoice-header -->
                                                    <div class="invoice-header">
                                                        <!-- begin row -->
                                                        <div class="row">
                                                            <!-- begin col-6 -->
                                                            <div class="text-center" ng-repeat="invoice in invoice_view|limitTo:1">
                                                                <h4>
                                                                    Invoice Number:&nbsp; #@{{invoice.invoice_id}} &nbsp; &nbsp;  &nbsp; 
                                                                    <span ng-if="invoice.invoice_month == 1">January</span>
                                                                    <span ng-if="invoice.invoice_month == 2">February</span>
                                                                    <span ng-if="invoice.invoice_month == 3">March</span>
                                                                    <span ng-if="invoice.invoice_month == 4">April</span>
                                                                    <span ng-if="invoice.invoice_month == 5">May</span>
                                                                    <span ng-if="invoice.invoice_month == 6">June</span>
                                                                    <span ng-if="invoice.invoice_month == 7">July</span>
                                                                    <span ng-if="invoice.invoice_month == 8">August</span>
                                                                    <span ng-if="invoice.invoice_month == 9">September</span>
                                                                    <span ng-if="invoice.invoice_month == 10">October</span>
                                                                    <span ng-if="invoice.invoice_month == 11">November</span>
                                                                    <span ng-if="invoice.invoice_month == 12">December</span> - @{{invoice.invoice_year}}
                                                                </h4>
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
                                                        <tr ng-repeat="invoice in invoice_view">
                                                            <td class="text-center">@{{invoice.invoice_item_name}}</td>
                                                            <td class="text-center">@{{invoice.invoice_item_amount}}</td>
                                                        </tr>
                                                        <tr class="col-md-offset-4" ng-repeat="invoice in invoice_view|limitTo:1">
                                                            <td class="text-right">
                                                                <div>Total :</div></br>
                                                                <div>Previous Due :</div></br>
                                                                <div><b>Grand Total :</b></div></br>
                                                                <div class="m-t-0">
                                                                    <!--<a href="javascript:;" onclick="window.print()" class="btn btn-sm width-100 btn-rounded btn-danger"><i class="fa fa-print m-r-3"></i> Print</a>-->
                                                                </div></br>
                                                            </td>
                                                            <td class="text-center">
                                                                <div>@{{invoice.invoice_amount_total}}</div></br>
                                                                <div>@{{invoice.invoice_previous_due}}</div></br>
                                                                <div><b>@{{invoice.invoice_grand_total}}</b></div></br>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                    <!-- end invoice-table -->
                                                </div>
                                                <!-- end invoice -->    
                                            </div>
                                            <!-- end row panel body --->
                                            
                                            <!--start row print -->
                                            <div class="row text-center m-b-20">
                                                <button onclick="printContent('pintAreaSelect_invoice_show')" class="btn btn-sm width-100 btn-rounded btn-danger"><i class="fa fa-print m-r-3"></i> Print</button>
                                            </div>
                                            <!--end row print -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end modal view-rental-invoice-->
                            
                            <!--start modal add-service-running-->
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
                                                    <span class="form-horizontal" data-parsley-validate="true" name="demo-form">

                                                        <div class="col-md-12 m-t-15">
                                                            <!-- start Personal Information -->
                                                            <div class="col-md-12">
                                                                <!-- begin table -->
                                                                <div class="m-b-10"><b>Your Taken Service</b></div>

                                                                <table class="table">
                                                                    <thead>
                                                                        <tr class="default" title="Selecte All">
                                                                            <th class="text-center"><b>No</b></th>
                                                                            <th class="text-center"><b>Service Name</b></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr ng-repeat="value in running_service">
                                                                            <td class="text-center">@{{$index+1}}</td>
                                                                            <td class="text-center">@{{value.service_type}}</td>
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
                            <!--end modal add-service-running-->
                            
                            <!--start modal add-service-->
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
                                                    {!! Form::open(array('url'=>'add-rental-service', 'role'=>'form', 'method'=>'POST')) !!}
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
                                                                                <input type="hidden" name="a" value="@{{id.rntl}}" style="width:20px"/>
                                                                                <input type="checkbox" value="" title="Selecte All" style="float: left; margin: 0 0 0 10px;width: 20px;height: 20px;">
                                                                            </th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr ng-repeat="value in add_service">
                                                                            <td class="text-center">@{{$index+1}}</td>
                                                                            <td class="text-center">@{{value.service_type}}</td>
                                                                            <td class="text-center">
                                                                                <input type="checkbox" name="b[]" value="@{{value.service_id}}" style="float: left; margin: 0 0 0 10px;width: 20px;height: 20px;">
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
                            <!--end modal add-service-->
                            
                            <!--start modal view-service-taken-->
                            <div class="modal fade" id="view-service-taken">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title text-center">See Rental Invoice Statement</h4>
                                        </div>
                                        <div class="modal-body">
                                            <!-- begin row panel body --->
                                            <div class="row" id="pintAreaSelect">
                                                <!-- begin title -->
                                                <div class="text-center">
                                                    <sapn class="f-s-18">Housing Society Management System</sapn></br>
                                                    <sapn>Dhanmondi, Dhaka - 1207</sapn></br>
                                                    <sapn>Phone: 01777888757</sapn></br>
                                                </div>
                                                <div class="col-md-10 col-md-offset-1 p-10 m-l-40 b-b-dashed" ng-repeat="invoice in invoice_item_view|limitTo:1" style="border-bottom: 1px solid #e6ebf1; margin-bottom: 10px;">
                                                    <div class="col-md-6 text-left"><b>@{{invoice.rental_name}}</b></br>@{{invoice.rental_id_no}}</div>
                                                    <div class="col-md-6 text-right"><b>@{{invoice.bld_name}}</b> building - <b>@{{invoice.bld_floor}}</b> floor - <b>@{{invoice.bld_unit}}</b> unit</br>@{{invoice.created_at}}</div>
                                                </div></br>
                                                <!-- end title -->

                                                <!-- begin invoice -->
                                                <div class="d_invoice" style="margin-left:40px; margin-right: 40px;">
                                                    <!-- begin invoice-header -->
                                                    <div class="invoice-header">
                                                        <!-- begin row -->
                                                        <div class="row">
                                                            <!-- begin col-6 -->
                                                            <div class="text-center" ng-repeat="invoice in invoice_item_view|limitTo:1">
                                                                <h4>
                                                                    Invoice Number:&nbsp; #@{{invoice.invoice_id}} &nbsp; &nbsp;  &nbsp; 
                                                                    <span ng-if="invoice.invoice_month == 1">January</span>
                                                                    <span ng-if="invoice.invoice_month == 2">February</span>
                                                                    <span ng-if="invoice.invoice_month == 3">March</span>
                                                                    <span ng-if="invoice.invoice_month == 4">April</span>
                                                                    <span ng-if="invoice.invoice_month == 5">May</span>
                                                                    <span ng-if="invoice.invoice_month == 6">June</span>
                                                                    <span ng-if="invoice.invoice_month == 7">July</span>
                                                                    <span ng-if="invoice.invoice_month == 8">August</span>
                                                                    <span ng-if="invoice.invoice_month == 9">September</span>
                                                                    <span ng-if="invoice.invoice_month == 10">October</span>
                                                                    <span ng-if="invoice.invoice_month == 11">November</span>
                                                                    <span ng-if="invoice.invoice_month == 12">December</span> - @{{invoice.invoice_year}}
                                                                </h4>
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
                                                        <tr ng-repeat="invoice in invoice_item_view">
                                                            <td class="text-center">@{{invoice.invoice_item_name}}</td>
                                                            <td class="text-center">@{{invoice.invoice_item_amount}}</td>
                                                        </tr>
                                                        <tr class="col-md-offset-4" ng-repeat="invoice in invoice_item_view|limitTo:1">
                                                            <td class="text-right">
                                                                <div>Total :</div></br>
                                                                <div>Previous Due :</div></br>
                                                                <div><b>Grand Total :</b></div></br>
                                                                <div class="m-t-0">
                                                                    <!--<a href="javascript:;" onclick="window.print()" class="btn btn-sm width-100 btn-rounded btn-danger"><i class="fa fa-print m-r-3"></i> Print</a>-->
                                                                    <!--<button onclick="printContent('')" class="btn btn-sm width-100 btn-rounded btn-danger"><i class="fa fa-print m-r-3"></i> Print</button>-->
                                                                </div></br>
                                                            </td>
                                                            <td class="text-center">
                                                                <div>@{{invoice.invoice_amount_total}}</div></br>
                                                                <div>@{{invoice.invoice_previous_due}}</div></br>
                                                                <div><b>@{{invoice.invoice_grand_total}}</b></div></br>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                    <!-- end invoice-table -->
                                                </div>
                                                <!-- end invoice -->    
                                            </div>
                                            <!-- end row panel body --->
                                            
                                            <!--start row print--->
                                            <div class="row text-center m-b-20">
                                                <button onclick="printContent('pintAreaSelect')" class="btn btn-sm width-100 btn-rounded btn-danger"><i class="fa fa-print m-r-3"></i> Print</button>
                                            </div>
                                            <!--end row print--->
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end modal view-service-taken-->
                            
                        </div>
                    </div>
                    <!--end modal------------------------------------------------------->
                    
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