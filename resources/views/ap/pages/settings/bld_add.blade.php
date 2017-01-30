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
                    <li class="active"><a href="#default-tab-1" data-toggle="tab"><i class="fa fa-plus"></i> Add Building</a></li>
                    <li class=""><a href="#default-tab-2" data-toggle="tab"><i class="fa fa-save"> </i> Invoice hfg</a></li>
                    <li class=""><a href="#default-tab-3" data-toggle="tab"><i class="fa fa-credit-card"></i> Payment</a></li>
                    <li class=""><a href="#default-tab-4" data-toggle="tab"><i class="fa fa-list"> </i> Building</a></li>
                    <!--  <li class=""><a href="#default-tab-5" data-toggle="tab"><i class="fa fa-user"></i> Complain</a></li>
                    <li class=""><a href="#default-tab-6" data-toggle="tab"><i class="fa fa-user"></i> Salary Statement</a></li>-->
                </ul>
                <div class="tab-content m-b-0">
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
                                            <strong class="text-success m-t-10">Create New Building, Floor, Unit</strong>
                                        </div>
                                        <div class="col-sm-8">
                                            @if(Session::get('bld_data') == '1')
                                            <span class="text-success-light">Data Inserted Successfully!!!</span>
                                            {{Session::put('bld_data', '')}}
                                            @elseif (Session::get('bld_data') == '0')
                                            <span class="text-danger">Data Not Inserted???</span>
                                            {{Session::put('bld_data', '')}}
                                            @elseif (Session::get('bld_data') == '11')
                                            <span class="text-danger">Data Already Inserted!!!</span>
                                            {{Session::put('bld_data', '')}}
                                            @else 
                                            <span class="text-remove-light"></span>
                                            @endif
                                        </div>
                                    </div>
                                    <table class="">
                                        {!! Form::open(array('url'=>'bld-save', 'role'=>'form', 'method'=>'POST')) !!}
                                        <!-- begin Building Place -->
                                        <div class="col-md-8 col-md-offset-1" style="margin-top: 30px; margin-bottom: 40px;">
                                            <div class="form-group">
                                                <label class="control-label col-sm-3 m-t-40">Building Place <span class="text-danger">*</span></label>
                                                <div class="col-sm-3"><h5 class="text-center text-success">Building</h5>
                                                    <select class="form-control" id="select-required" name="a" data-parsley-required="true">
                                                        <option>Building</option>
                                                        <option value="1">01</option>
                                                        <option value="2">02</option>
                                                        <option value="3">03</option>
                                                        <option value="4">04</option>
                                                        <option value="5">05</option>
                                                        <option value="6">06</option>
                                                        <option value="7">07</option>
                                                        <option value="8">08</option>
                                                        <option value="9">09</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                        <option value="13">13</option>
                                                        <option value="14">14</option>
                                                        <option value="15">15</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-3"><h5 class="text-center text-success">Floor</h5>
                                                    <select class="form-control" id="select-required" name="b" data-parsley-required="true">
                                                        <option>Floor</option>
                                                        <option value="1">01 Floor</option>
                                                        <option value="2">02 Floor</option>
                                                        <option value="3">03 Floor</option>
                                                        <option value="4">04 Floor</option>
                                                        <option value="5">05 Floor</option>
                                                        <option value="6">06 Floor</option>
                                                        <option value="7">07 Floor</option>
                                                        <option value="8">08 Floor</option>
                                                        <option value="9">09 Floor</option>
                                                        <option value="10">10 Floor</option>
                                                        <option value="11">11 Floor</option>
                                                        <option value="12">12 Floor</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-3"><h5 class="text-center text-success">Unit</h5>
                                                    <select class="form-control" id="select-required" name="c" data-parsley-required="true">
                                                        <option>Unit</option>
                                                        <option value="A">A</option>
                                                        <option value="B">B</option>
                                                        <option value="C">C</option>
                                                        <option value="D">D</option>
                                                        <option value="E">E</option>
                                                        <option value="F">F</option>
                                                        <option value="G">G</option>
                                                        <option value="H">H</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end Building Place -->

                                        <!-- begin submit button -->
                                        <div class="form-group">
                                            <label class="control-label col-sm-4"></label>
                                            <div class="col-sm-6 col-md-offset-1 m-b-40">
                                                <button type="submit" class="btn btn-success width-xs">Create</button>
                                            </div>
                                        </div>
                                        <!-- end submit button -->
                                        {!! Form::close() !!}
                                    </table>
                                </div>
                                <!-- end panel -->
                            </div>
                            <!-- end Add_Salary -->
                        </div>
                        <!-- end row-->
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
                                            <strong class="text-success m-t-10">Employer Salary Chart</strong>
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
                                            @foreach($invoice_view as $v)
                                            <tr>
                                                <td class="text-center"><span class="text-success"><b>#{{$v->emp_invoice_id}}</b></span></td>
                                                <td class="text-center">{{$v->emp_id_no}}</td>
                                                <td class="text-center">
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
                                                </td>
                                                <td class="text-center">{{$v->pay_year}}</td>
                                                <td class="text-center">{{$v->total_amount}}</td>
                                                <td class="text-center">{{$v->crated_at}}</td>
                                                <td class="text-center">
                                                    @if($v->invoice_status == 1)
                                                    <a href="#" class="btn btn-default btn-xs" title="Payment is Paid"><i class="fa fa-check text-success"></i> </a>&nbsp; &nbsp;
                                                    @else
                                                    <a href="{{URL::to('give-salary/'.$v->emp_invoice_id)}}" class="btn btn-warning btn-xs" title="Payment is UnPaid"><i class="fa fa-remove"></i> </a>&nbsp; &nbsp;
                                                    @endif
                                                    <a href="#invoice-salary-satement" class="btn btn-default btn-xs" data-toggle="modal" title="Payment View"><i class="fa fa-eye"></i> View</a>
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
                                            <strong class="text-success m-t-10">Employer Salary Has Been Completed</strong>
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
                            <!-- begin View_Salary -->
                            <div class="col-md-10 col-md-offset-2">

                                <?php
                                $bld_no = Session::get('bld_no');
                                ?>

                                @for($n=1; $n<=$bld_no; $n++)
                                <div class="col-md-3 m-l-10 well">
                                    <div class="text-center text-success-light m-b-10"><b>{{$n}} &nbsp; &nbsp; Building</b></div>

                                    @for($m=1; $m<=Session::get($n-1); $m++)
                                    <div class="" style="border: 1px solid white; border-radius: 5px; padding: 5px">

                                        @foreach($bld_show as $v)
                                        @if($v->bld_name == $n && $v->bld_floor == $m)
                                        <a href="#" class="btn btn-white btn-sm m-t-5" style="width: 94px"><small>{{$v->bld_floor}}</small> &nbsp; &nbsp; &nbsp;<b>{{$v->bld_unit}}</b> &nbsp; &nbsp; &nbsp;
                                            @if($v->bld_status == 1)
                                            <i class="fa fa-check text-success-light" title="Already Booked"> </i>
                                            @else
                                            <i class="fa fa-remove text-danger" title="This Unit Is Blank"> </i>
                                            @endif
                                        </a>
                                        @endif
                                        @endforeach

                                    </div>
                                    @endfor

                                </div>
                                @endfor

                            </div>
                            <!-- end View_Salary -->
                        </div>
                        <!-- end row -->
                    </div>
                </div>


                <!-- begin salary registration modal -->
                <div class="col-md-6">
                    <div class="clearfix m-b-25">
                        <!-- #modal-dialog -->
                        <div class="modal fade" id="invoice-salary-satement">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        <h4 class="modal-title">Invoice Salary Statement </h4>
                                    </div>
                                    <div class="modal-body">
                                        <!-- begin row panel body --->
                                        <div class="row">
                                            <!-- begin invoice -->
                                            <div class="invoice">
                                                <span class="pull-right hidden-print">
                                                    <a href="{{URL::to('info-owner-details')}}" class="btn btn-sm width-100 btn-rounded btn-default"><i class="fa fa-arrow-left m-r-3"></i> Back</a>
                                                    <a href="javascript:;" onclick="window.print()" class="btn btn-sm width-100 btn-rounded btn-danger"><i class="fa fa-print m-r-3"></i> Print</a>
                                                </span>
                                                <!-- begin invoice-title -->
                                                <h4 class="invoice-title">
                                                    <i class="fa fa-file-text text-muted"></i> Invoice
                                                </h4>
                                                <!-- end invoice-title -->
                                                <!-- begin invoice-header -->
                                                <div class="invoice-header">
                                                    <!-- begin row -->
                                                    <div class="row">
                                                        <!-- begin col-6 -->
                                                        <div class="col-md-6">
                                                            <div class="m-t-5">
                                                                <dl class="dl-horizontal">
                                                                    <dt>Invoice Number:</dt>
                                                                    <dd>#05</dd>
                                                                </dl>
                                                            </div>
                                                        </div>
                                                        <!-- end col-6 -->
                                                    </div>  
                                                    <!-- end row -->
                                                </div>
                                                <!-- end invoice-header -->
                                                <!-- begin invoice-table -->
                                                <div class="m-b-10"><b>Invoice Summary</b></div>
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>TASK DESCRIPTION</th>
                                                                <th class="text-center col-md-2 nowrap">UNIT COST</th>
                                                                <th class="text-center col-md-1">QTY</th>
                                                                <th class="text-center col-md-1">AMOUNT</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Website design & development</td>
                                                                <td class="text-center">$2,000.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Product Repackaging</td>
                                                                <td class="text-center">$6,000.00</td>
                                                                <td class="text-center">1</td>
                                                                <td class="text-right">$6,000.00</td>
                                                            </tr>
                                                            <tr>
                                                                <td>Server & Domain Fee</td>
                                                                <td class="text-center">$1,000.00</td>
                                                                <td class="text-center">1</td>
                                                                <td class="text-right">$1,000.00</td>
                                                            </tr>
                                                            <tr class="subtotal">
                                                                <td></td>
                                                                <td colspan="2" class="text-right text">Subtotal:</td>
                                                                <td class="text-right value"><b>$9,000.00</b></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
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

                <div class="col-md-6">
                    <div class="clearfix m-b-25">
                        <!-- #modal-dialog -->
                        <div class="modal fade" id="salary-satement">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        <h4 class="modal-title">Add Salary Statement </h4>
                                    </div>
                                    <div class="modal-body">
                                        <!-- begin row panel body --->
                                        <div class="row well">
                                            <!-- begin section-container -->
                                            <div class="section-container">
                                                {!! Form::open(array('url'=>'add-salary', 'role'=>'form', 'method'=>'POST')) !!}
                                                <span action="{{URL::to('regi-s-people-save')}}" class="form-horizontal" data-parsley-validate="true" name="demo-form">

                                                    <div class="col-md-12 m-t-15">
                                                        <!-- start Personal Information -->
                                                        <div class="col-md-12">

                                                            <div class="form-group">
                                                                <label class="control-label col-sm-4" for="fullname">Start Salary <span class="text-danger">*</span></label>
                                                                <div class="col-sm-6">
                                                                    <input class="form-control" type="date" id="fullname" name="start" placeholder="Required" data-parsley-required="true" />
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="control-label col-sm-4" for="fullname"> <strong>Salary Basic</strong> <span class="text-danger">*</span></label>
                                                                <div class="col-sm-6">
                                                                    <input class="form-control" type="text" id="fullname" name="a" placeholder="00.00" data-parsley-required="true" />
                                                                    <input type="hidden" name="emp_id" value="" />
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-sm-4" for="fullname"> <strong>Salary House</strong> <span class="text-danger">*</span></label>
                                                                <div class="col-sm-6">
                                                                    <input class="form-control" type="text" id="fullname" name="b" placeholder="00.00" data-parsley-required="true" />
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-sm-4 for="fullname"> <strong>Salary Health</strong> <span class="text-danger">*</span></label>
                                                                <div class="col-sm-6">
                                                                    <input class="form-control" type="text" id="fullname" name="c" placeholder="00.00" data-parsley-required="true" />
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="control-label col-sm-4" for="fullname"> <strong>Salary Transport</strong> <span class="text-danger">*</span></label>
                                                                <div class="col-sm-6">
                                                                    <input class="form-control" type="text" id="fullname" name="d" placeholder="00.00" data-parsley-required="true" />
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

                <div class="col-md-6">
                    <div class="clearfix m-b-25">
                        <!-- #modal-dialog -->
                        <div class="modal fade" id="salary-edit">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        <h4 class="modal-title">Edit Salary Statement </h4>
                                    </div>
                                    <div class="modal-body">
                                        <!-- begin row panel body --->
                                        <div class="row well">
                                            <!-- begin section-container -->
                                            <div class="section-container">
                                                {!! Form::open(array('url'=>'update-salary', 'role'=>'form', 'method'=>'POST')) !!}
                                                <span class="form-horizontal" data-parsley-validate="true" name="demo-form">

                                                    <div class="col-md-12 m-t-15">
                                                        <!-- start Personal Information -->
                                                        <div class="col-md-12">

                                                            <div class="form-group">
                                                                <label class="control-label col-sm-4" for="fullname">Salary Started Date <span class="text-danger">*</span></label>
                                                                <div class="col-sm-6">
                                                                    <input class="form-control" type="date" id="fullname" value="" disabled="" data-parsley-required="true" />
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="control-label col-sm-4" for="fullname"> <strong>Salary Basic</strong> <span class="text-danger">*</span></label>
                                                                <div class="col-sm-6">
                                                                    <input class="form-control" type="text" id="fullname" name="a" value="" data-parsley-required="true" />
                                                                    <input type="hidden" name="sal_id" value="" />
                                                                    <input type="hidden" name="employee_id" value="" />
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-sm-4" for="fullname"> <strong>Salary House</strong> <span class="text-danger">*</span></label>
                                                                <div class="col-sm-6">
                                                                    <input class="form-control" type="text" id="fullname" name="b" value="" data-parsley-required="true" />
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="control-label col-sm-4 for="fullname"> <strong>Salary Health</strong> <span class="text-danger">*</span></label>
                                                                <div class="col-sm-6">
                                                                    <input class="form-control" type="text" id="fullname" name="c" value="" data-parsley-required="true" />
                                                                </div>
                                                            </div>

                                                            <div class="form-group">
                                                                <label class="control-label col-sm-4" for="fullname"> <strong>Salary Transport</strong> <span class="text-danger">*</span></label>
                                                                <div class="col-sm-6">
                                                                    <input class="form-control" type="text" id="fullname" name="d" value="" data-parsley-required="true" />
                                                                </div>
                                                            </div><hr class="hr-d m-b-15">

                                                        </div>
                                                        <!-- end Personal Information -->
                                                    </div>

                                                    <!-- begin submit button -->
                                                    <div class="form-group">
                                                        <label class="control-label col-sm-4"></label>
                                                        <div class="col-sm-5">
                                                            <button type="submit" class="btn btn-success width-xs m-l-10">Submit</button>
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
                <!-- end salary registration modal -->

            </div>
            <!-- end panel -->
        </div>
        <!-- end col-6 -->




        <!-- begin salary registration modal -->
        <div class="col-md-6">
            <div class="clearfix m-b-25">
                <!-- #modal-dialog -->
                <div class="modal fade" id="create-salary-invoice">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title">Add Salary Statement </h4>
                            </div>
                            <div class="modal-body">
                                <!-- begin row panel body --->
                                <div class="row well">
                                    <!-- begin section-container -->
                                    <div class="section-container">
                                        {!! Form::open(array('url'=>'add-salary', 'role'=>'form', 'method'=>'POST')) !!}
                                        <span action="{{URL::to('regi-s-people-save')}}" class="form-horizontal" data-parsley-validate="true" name="demo-form">

                                            <div class="col-md-12 m-t-15">
                                                <!-- start Personal Information -->
                                                <div class="col-md-12">

                                                    <div class="form-group">
                                                        <label class="control-label col-sm-4" for="fullname">Start Salary <span class="text-danger">*</span></label>
                                                        <div class="col-sm-6">
                                                            <input class="form-control" type="date" id="fullname" name="start" placeholder="Required" data-parsley-required="true" />
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label col-sm-4" for="fullname"> <strong>Salary Basic</strong> <span class="text-danger">*</span></label>
                                                        <div class="col-sm-6">
                                                            <input class="form-control" type="text" id="fullname" name="a" placeholder="00.00" data-parsley-required="true" />
                                                            <input type="hidden" name="emp_id" value="" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-sm-4" for="fullname"> <strong>Salary House</strong> <span class="text-danger">*</span></label>
                                                        <div class="col-sm-6">
                                                            <input class="form-control" type="text" id="fullname" name="b" placeholder="00.00" data-parsley-required="true" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-sm-4 for="fullname"> <strong>Salary Health</strong> <span class="text-danger">*</span></label>
                                                        <div class="col-sm-6">
                                                            <input class="form-control" type="text" id="fullname" name="c" placeholder="00.00" data-parsley-required="true" />
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label col-sm-4" for="fullname"> <strong>Salary Transport</strong> <span class="text-danger">*</span></label>
                                                        <div class="col-sm-6">
                                                            <input class="form-control" type="text" id="fullname" name="d" placeholder="00.00" data-parsley-required="true" />
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

        <div class="col-md-6">
            <div class="clearfix m-b-25">
                <!-- #modal-dialog -->
                <div class="modal fade" id="salary-edit">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title">Edit Salary Statement </h4>
                            </div>
                            <div class="modal-body">
                                <!-- begin row panel body --->
                                <div class="row well">
                                    <!-- begin section-container -->
                                    <div class="section-container">
                                        {!! Form::open(array('url'=>'update-salary', 'role'=>'form', 'method'=>'POST')) !!}
                                        <span class="form-horizontal" data-parsley-validate="true" name="demo-form">

                                            <div class="col-md-12 m-t-15">
                                                <!-- start Personal Information -->
                                                <div class="col-md-12">

                                                    <div class="form-group">
                                                        <label class="control-label col-sm-4" for="fullname">Salary Started Date <span class="text-danger">*</span></label>
                                                        <div class="col-sm-6">
                                                            <input class="form-control" type="date" id="fullname" value="" disabled="" data-parsley-required="true" />
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label col-sm-4" for="fullname"> <strong>Salary Basic</strong> <span class="text-danger">*</span></label>
                                                        <div class="col-sm-6">
                                                            <input class="form-control" type="text" id="fullname" name="a" value="" data-parsley-required="true" />
                                                            <input type="hidden" name="sal_id" value="" />
                                                            <input type="hidden" name="employee_id" value="" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-sm-4" for="fullname"> <strong>Salary House</strong> <span class="text-danger">*</span></label>
                                                        <div class="col-sm-6">
                                                            <input class="form-control" type="text" id="fullname" name="b" value="" data-parsley-required="true" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-sm-4 for="fullname"> <strong>Salary Health</strong> <span class="text-danger">*</span></label>
                                                        <div class="col-sm-6">
                                                            <input class="form-control" type="text" id="fullname" name="c" value="" data-parsley-required="true" />
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label col-sm-4" for="fullname"> <strong>Salary Transport</strong> <span class="text-danger">*</span></label>
                                                        <div class="col-sm-6">
                                                            <input class="form-control" type="text" id="fullname" name="d" value="" data-parsley-required="true" />
                                                        </div>
                                                    </div><hr class="hr-d m-b-15">

                                                </div>
                                                <!-- end Personal Information -->
                                            </div>
                                            <!-- begin submit button -->
                                            <div class="form-group">
                                                <label class="control-label col-sm-4"></label>
                                                <div class="col-sm-5">
                                                    <button type="submit" class="btn btn-success width-xs m-l-10">Submit</button>
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

        <div class="col-md-6">
            <div class="clearfix m-b-25">
                <!-- #modal-dialog -->
                <div class="modal fade" id="add-salary-statement">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title text-center">Add Salary Statement </h4>
                            </div>
                            <div class="modal-body">
                                <!-- begin row panel body --->
                                <div class="row well">
                                    <!-- begin section-container -->
                                    <div class="section-container">
                                        {!! Form::open(array('url'=>'update-salary', 'role'=>'form', 'method'=>'POST')) !!}
                                        <span class="form-horizontal" data-parsley-validate="true" name="demo-form">

                                            <div class="col-md-12 m-t-15">
                                                <!-- start Personal Information -->
                                                <div class="col-md-12">

                                                    <div class="form-group">
                                                        <label class="control-label col-sm-4" for="fullname">Salary Started Date <span class="text-danger">*</span></label>
                                                        <div class="col-sm-6">
                                                            <input class="form-control" type="date" id="fullname" value="" disabled="" data-parsley-required="true" />
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label col-sm-4" for="fullname"> <strong>Salary Basic</strong> <span class="text-danger">*</span></label>
                                                        <div class="col-sm-6">
                                                            <input class="form-control" type="text" id="fullname" name="a" value="" data-parsley-required="true" />
                                                            <input type="hidden" name="sal_id" value="" />
                                                            <input type="hidden" name="employee_id" value="" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-sm-4" for="fullname"> <strong>Salary House</strong> <span class="text-danger">*</span></label>
                                                        <div class="col-sm-6">
                                                            <input class="form-control" type="text" id="fullname" name="b" value="" data-parsley-required="true" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-sm-4 for="fullname"> <strong>Salary Health</strong> <span class="text-danger">*</span></label>
                                                        <div class="col-sm-6">
                                                            <input class="form-control" type="text" id="fullname" name="c" value="" data-parsley-required="true" />
                                                        </div>
                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label col-sm-4" for="fullname"> <strong>Salary Transport</strong> <span class="text-danger">*</span></label>
                                                        <div class="col-sm-6">
                                                            <input class="form-control" type="text" id="fullname" name="d" value="" data-parsley-required="true" />
                                                        </div>
                                                    </div><hr class="hr-d m-b-15">

                                                </div>
                                                <!-- end Personal Information -->
                                            </div>
                                            <!-- begin submit button -->
                                            <div class="form-group">
                                                <label class="control-label col-sm-4"></label>
                                                <div class="col-sm-5">
                                                    <button type="submit" class="btn btn-success width-xs m-l-10">Submit</button>
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
        <!-- end salary registration modal -->
    </div>
    <!-- end row -->
</div>
<!-- end section-container -->
@endsection