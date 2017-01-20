@section('settings_content')
<!-- begin section-container -->
<div class="section-container">
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
                                                <th class="text-center"><b>No</b></th>
                                                <th class="text-center"><b>Building - Floor - Unit</b></th>
                                                <th class="text-center"><b>Rental Name</b></th>
                                                <th class="text-center"><b>Service Running</b></th>
                                                <th class="text-center"><b>Action</b></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $number = Session::get('rental_total') + 1;
                                            $a = 1; ?>
                                            @foreach($rental_show as $v)
                                            <tr>
                                                <td class="text-center"><span class="btn btn-default btn-xs">{{$number = $number-1}}</span></td>
                                                <td class="text-center"><b>{{$v->bld_name}} - {{$v->bld_floor}} - {{$v->bld_unit}}</b></td>
                                                <td>{{$v->rental_name}}</td>
                                                <td class="text-center">
                                                    <a href="#show-running-service" class="btn btn-default btn-xs"  data-toggle="modal"><i class="fa fa-list">&nbsp;</i> Your Running Service </a>
                                                </td>
                                                <td class="text-center">
                                                    <a href="#create-service-bill" class="btn btn-success btn-xs" data-toggle="modal" title="Click To Create Bill"><i class="fa fa-arrow-right"></i> Create</a>&nbsp; &nbsp;
                                                    <a href="#show-bill-statement" class="btn btn-default btn-xs" data-toggle="modal" title="Show your"><i class="fa fa-eye"></i> View</a>
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
                                                <th class="text-center"><b>Employee ID</b></th>
                                                <th class="text-center"><b>Month</b></th>
                                                <th class="text-center"><b>Year</b></th>
                                                <th class="text-center"><b>Amount</b></th>
                                                <th class="text-center"><b>Created Time</b></th>
                                                <th class="text-center"><b>Payment Action</b></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center"><span class="text-success"><b>#445</b></span></td>
                                                <td class="text-center">emp_id_no</td>
                                                <td class="text-center">
                                                </td>
                                                <td class="text-center">pay_year</td>
                                                <td class="text-center">total_amount</td>
                                                <td class="text-center">crated_at</td>
                                                <td class="text-center">
                                                    <a href="#click-to-pay" class="btn btn-danger btn-xs" title="unPaid" data-toggle="modal"><i class="fa fa-remove"></i> Click To Pay</a>&nbsp; &nbsp;
                                                    <a href="#view-rental-invoice" class="btn btn-default btn-xs" data-toggle="modal" title="Payment View"><i class="fa fa-eye"></i> View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center"><span class="text-success"><b>#445</b></span></td>
                                                <td class="text-center">emp_id_no</td>
                                                <td class="text-center">
                                                </td>
                                                <td class="text-center">pay_year</td>
                                                <td class="text-center">total_amount</td>
                                                <td class="text-center">crated_at</td>
                                                <td class="text-center">
                                                    <a href="#" class="btn btn-success btn-xs" title="Paid Payment">&nbsp; &nbsp; &nbsp;<i class="fa fa-check"></i> Paid &nbsp; &nbsp; &nbsp;</a>&nbsp; &nbsp;
                                                    <a href="#invoice-view-rental" class="btn btn-default btn-xs" data-toggle="modal" title="Payment View"><i class="fa fa-eye"></i> View</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center"><span class="text-success"><b>#445</b></span></td>
                                                <td class="text-center">emp_id_no</td>
                                                <td class="text-center">
                                                </td>
                                                <td class="text-center">pay_year</td>
                                                <td class="text-center">total_amount</td>
                                                <td class="text-center">crated_at</td>
                                                <td class="text-center">
                                                    <a href="#" class="btn btn-danger btn-xs" title="unPaid"><i class="fa fa-remove"></i> Click To Pay</a>&nbsp; &nbsp;
                                                    <a href="#invoice-salary-statement" class="btn btn-default btn-xs" data-toggle="modal" title="Payment View"><i class="fa fa-eye"></i> View</a>
                                                </td>
                                            </tr>
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
                                            <?php $number = Session::get('rental_total') + 1;
                                            $a = 1; ?>
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
                    <!-- begin show-running-service modal -->
                    <div class="col-md-6">
                        <div class="clearfix m-b-25">
                            <!-- #modal-dialog -->
                            <div class="modal fade" id="show-running-service">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title text-center">Your Running Service </h4>
                                        </div>
                                        <div class="modal-body">
                                            <!-- begin row panel body --->
                                            <div class="row">
                                                <!-- begin section-container -->
                                                <div class="section-container">
                                                    <div class="col-md-12 col-md-offset-2 m-t-10">
                                                        <!-- start Personal Information -->
                                                        <div class="col-md-8">
                                                            <dl class="dl-horizontal m-b-20 f-s-16">
                                                                <dt>Gass :</dt>
                                                                <dd>5200 /=</dd>
                                                                <dt>Water :</dt>
                                                                <dd>5200 /=</dd>
                                                                <dt>Electricity :</dt>
                                                                <dd>5200 /=</dd>
                                                            </dl><hr class="hr-d">
                                                            <dl class="dl-horizontal m-b-20 f-s-16">
                                                                <dt class="text-success">Total :</dt>
                                                                <dd class="text-success">52000 /=</dd>
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
                    <!-- end show-running-service modal -->
                    
                    <!-- begin create-service-bill modal -->
                    <div class="col-md-6">
                        <div class="clearfix m-b-25">
                            <!-- #modal-dialog -->
                            <div class="modal fade" id="create-service-bill">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title text-center">Create Rental Bill</h4>
                                        </div>
                                        <div class="modal-body">
                                            <!-- begin row panel body --->
                                            <div class="row well">
                                                <!-- begin section-container -->
                                                <div class="section-container">
                                                    {!! Form::open(array('url'=>'-add-salary-', 'role'=>'form', 'method'=>'POST')) !!}
                                                    <span class="form-horizontal" data-parsley-validate="true" name="demo-form">

                                                        <div class="col-md-12 m-t-15">
                                                            <!-- start Personal Information -->
                                                            <div class="col-md-12">

                                                                <div class="form-group">
                                                                    <label class="control-label col-sm-6" for="fullname"> <strong>Salary Transport</strong> <span class="text-danger">*</span></label>
                                                                    <div class="col-sm-3">
                                                                        <input class="form-control text-center" type="text" id="fullname" name="d" placeholder="00.00" required="" data-parsley-required="true" />
                                                                    </div>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label class="control-label col-sm-6" for="fullname"> <strong>Salary Transport</strong> <span class="text-danger">*</span></label>
                                                                    <div class="col-sm-3">
                                                                        <input class="form-control text-center" type="text" id="fullname" name="d" placeholder="00.00" required="" data-parsley-required="true" />
                                                                    </div>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label class="control-label col-sm-6" for="fullname"> <strong>Salary Transport</strong> <span class="text-danger">*</span></label>
                                                                    <div class="col-sm-3">
                                                                        <input class="form-control text-center" type="text" id="fullname" name="d" placeholder="00.00" required="" data-parsley-required="true" />
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

                    <!-- begin show-bill-statement modal -->
                    <div class="col-md-6">
                        <div class="clearfix m-b-25">
                            <!-- #modal-dialog -->
                            <div class="modal fade" id="show-bill-statement">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title text-center">Service Bill Statement </h4>
                                        </div>
                                        <div class="modal-body">
                                            <!-- begin row panel body --->
                                            <div class="row">
                                                <!-- begin section-container -->
                                                <div class="section-container">
                                                    <div class="col-md-12 col-md-offset-2 m-t-10">
                                                        <!-- start Personal Information -->
                                                        <div class="col-md-8">
                                                            <dl class="dl-horizontal m-b-20 f-s-16">
                                                                <dt>Gass :</dt>
                                                                <dd>5200 /=</dd>
                                                                <dt>Water :</dt>
                                                                <dd>5200 /=</dd>
                                                                <dt>Electricity :</dt>
                                                                <dd>5200 /=</dd>
                                                            </dl><hr class="hr-d">
                                                            <dl class="dl-horizontal m-b-20 f-s-16">
                                                                <dt class="text-success">Total :</dt>
                                                                <dd class="text-success">52000 /=</dd>
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

                    <!-- begin click-to-pay modal -->
                    <div class="col-md-6">
                        <div class="clearfix m-b-25">
                            <!-- #modal-dialog -->
                            <div class="modal fade" id="click-to-pay">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h4 class="modal-title text-center">Receive Your Payment</h4>
                                        </div>
                                        <div class="modal-body">
                                            <!-- begin row panel body --->
                                            <div class="row well">
                                                <!-- begin section-container -->
                                                <div class="section-container">
                                                    {!! Form::open(array('url'=>'-add-salary-', 'role'=>'form', 'method'=>'POST')) !!}
                                                    <span class="form-horizontal" data-parsley-validate="true" name="demo-form">

                                                        <div class="col-md-12 m-t-15">
                                                            <!-- start Personal Information -->
                                                            <div class="col-md-12">

                                                                <div class="form-group">
                                                                    <label class="control-label col-sm-4" for="fullname">Start Salary <span class="text-danger">*</span></label>
                                                                    <div class="col-sm-6">
                                                                        <input class="form-control" type="date" id="fullname" name="start" placeholder="Required" required="" data-parsley-required="true" />
                                                                    </div>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label class="control-label col-sm-4" for="fullname"> <strong>Salary Transport</strong> <span class="text-danger">*</span></label>
                                                                    <div class="col-sm-6">
                                                                        <input class="form-control" type="text" id="fullname" name="d" placeholder="00.00" readonly="" data-parsley-required="true" />
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
                                                            <tr>
                                                                <td class="text-center">Electricity</td>
                                                                <td class="text-center">500</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">Electricity</td>
                                                                <td class="text-center">500</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">Electricity</td>
                                                                <td class="text-center">500</td>
                                                            </tr>
                                                            <tr class="subtotal">
                                                                <td class="text-right">Subtotal:</td>
                                                                <td class="text-center value"><b>1500.00</b></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <!-- end invoice-table -->
                                                </div>
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