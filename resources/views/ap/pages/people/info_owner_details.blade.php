@section('people_content')
<!-- begin section-container -->
<div class="section-container">
    <!-- begin row -->
    <div class="row">
        <!-- begin col-12 -->
        <div class="col-md-12">
            <!-- begin panel -->
            <div class="panel panel-default">

                @foreach($rental_details as $v)
                <div class="panel-heading">
                    <div class="btn-group pull-left">
                        <a href="{{URL::to('info-owner')}}" class="btn btn-white btn-xs" title="Back to Owner"><i class="fa fa-arrow-left"></i>&nbsp;</a>
                    </div>
                    <div class="btn-group pull-right">
                        <button type="button" class="btn btn-white btn-xs">Action</button>
                        <button type="button" class="btn btn-white btn-xs dropdown-toggle" data-toggle="dropdown">
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{URL::to('info-owner')}}"><i class="fa fa-pencil"></i> Edit Picture</a></li>
                            <li><a href="{{URL::to('info-rental-edit/'.$v->rental_id)}}"><i class="fa fa-edit"></i> Edit All Profile</a></li>
                            <li><a href="{{URL::to('regi-driver')}}"><i class="fa fa-plus"></i> Add Driver</a></li>
                            <li><a href="{{URL::to('regi-driver')}}"><i class="fa fa-plus"></i> Add Service People</a></li>
                            <li class="divider"></li>
                            <li><a href="{{URL::to('')}}"><i class="fa fa-power-off"></i> SignOut</a></li>
                        </ul>
                    </div> 
                    <div class="row">
                        <div class="col-md-10 col-md-offset-2">
                            <div class="col-md-6">
                                <div class="col-md-4">
                                    <a href="" class="thumbnail m-b-mi-15">
                                        <img src="{{URL::asset('ap/assets/img/user_profile.jpg')}}" alt="" />
                                    </a>
                                </div>
                                <div class="col-md-8">
                                    <p class="f-s-14">
                                        <b>
                                            {{$v->rental_name}}<br/>
                                            11 - 07 - 01<br/>
                                            Payment: Paid<br/>
                                            @if($v->person_status == 1)
                                            Positoin: Flat Rental<br/>
                                            @else
                                            Positoin: Flat Owner<br/>
                                            @endif
                                        </b>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <p class="f-s-15">
                                    {{$v->bld_name}}- Building, {{$v->bld_floor}} - Floor, {{$v->bld_unit}} - Unit<br/>
                                    Sukrabad, Dhanmondi, Dhaka<br/>
                                    &nbsp;<br/>

                                    @if(Session::get('service_taken') != NULL)
                                    <b class="text-danger-light">{{Session::get('service_taken')}}</b>
                                    @endif

                                    @if(Session::get('service_assigned') != NULL)
                                    <b class="text-success-light">{{Session::get('service_assigned')}}</b>
                                    @endif
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#default-tab-1" data-toggle="tab"><i class="fa fa-user"></i> Profile</a></li>
                    <li class=""><a href="#default-tab-2" data-toggle="tab"><i class="fa fa-list"></i> Details</a></li>
                    <li class=""><a href="#default-tab-3" data-toggle="tab"><i class="fa fa-credit-card"></i> Payment</a></li>
                    <li class=""><a href="#default-tab-4" data-toggle="tab"><i class="fa fa-cc-discover"></i> Invoice</a></li>
                    <li class=""><a href="#default-tab-5" data-toggle="tab"><i class="fa fa-user"></i> Complain</a></li>
                    <li class=""><a href="#default-tab-6" data-toggle="tab"><i class="fa fa-user"></i> Facilities</a></li>
                </ul>
                <div class="tab-content m-b-0">
                    <div class="tab-pane fade active in" id="default-tab-1">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="col-md-7">
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
                                        <dt>Email Address :<dt>
                                        <dd>{{$v->rental_email}}</dd>
                                    </dl>
                                </div>
                                <div class="col-md-5 well">
                                    <div class="table-responsive">
                                        <table class="">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">Facilities</th>
                                                    <th class="text-center"></th>
                                                    <th class="text-center"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="">
                                                        <a href="" class="btn btn-white btn-icon btn-circle btn-sm"><i class="fa fa-automobile"></i></a>&nbsp; 
                                                        <a href=""><b>Driver</b></a>
                                                    </td>
                                                    <td class="text-center">&nbsp; 
                                                        <a href="">Khan Tuhin Alam Khan </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="">
                                                        <a href="" class="btn btn-white btn-icon btn-circle btn-sm"><i class="fa fa-plug"></i></a>&nbsp; 
                                                        <a href=""><b>Cleaner</b></a>
                                                    </td>
                                                    <td class="text-center">&nbsp; 
                                                        <a href="">Khan Tuhin Alam Khan </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="">
                                                        <a href="" class="btn btn-white btn-icon btn-circle btn-sm"><i class="fa fa-street-view"></i></a>&nbsp; 
                                                        <a href=""><b>Housekeeping</b></a>
                                                    </td>
                                                    <td class="text-center">&nbsp; 
                                                        <a href="">Khan Tuhin Alam Khan </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
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
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1 well">
                                <!-- begin panel -->
                                <div class="panel">
                                    <div class="panel-heading">
                                        <div class="panel-heading-btn">
                                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-grey" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                        </div>
                                        <h4 class="panel-title text-center"><b>Your Payment</b></h4>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-td-valign-middle">
                                            <thead>
                                                <tr class="success">
                                                    <th> No </th>
                                                    <th>Mohnth</th>
                                                    <th>Bill Jenareted</th>
                                                    <th class="text-center">Payable </th>
                                                    <th class="text-center">Reaceiable</th>
                                                    <th class="text-center">Due</th>
                                                    <th class="text-center">Total</th>
                                                    <th class="text-center">Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><a href="#" class="btn btn-default btn-xs">1</a></td>
                                                    <td><b>January</b></td>
                                                    <td>27-10-16</td>
                                                    <td class="text-center">5000</td> 
                                                    <td class="text-center">5000</td> 
                                                    <td class="text-center">0.0</td> 
                                                    <td><b>5000</b></td>
                                                    <td><a href="#" class="btn btn-default btn-xs"><i class="fa fa-check"></i> &nbsp; Paid &nbsp;&nbsp;</a></td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#" class="btn btn-default btn-xs">2</a></td>
                                                    <td><b>February</b></td>
                                                    <td>29-01-16</td>
                                                    <td class="text-center">6000</td> 
                                                    <td class="text-center">5000</td> 
                                                    <td class="text-center">1000</td> 
                                                    <td><b>5000</b></td>
                                                    <td><a href="#" class="btn btn-warning btn-xs"><i class="fa fa-remove"></i> UnPaid </a></td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#" class="btn btn-default btn-xs">3</a></td>
                                                    <td><b>March</b></td>
                                                    <td>28-02-16</td>
                                                    <td class="text-center">5000</td> 
                                                    <td class="text-center">5000</td> 
                                                    <td class="text-center">0.0</td> 
                                                    <td><b>5000</b></td>
                                                    <td><a href="#" class="btn btn-default btn-xs"><i class="fa fa-check"></i> &nbsp; Paid &nbsp;&nbsp;</a></td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#" class="btn btn-default btn-xs">4</a></td>
                                                    <td><b>April</b></td>
                                                    <td>28-03-16</td>
                                                    <td class="text-center">6000</td> 
                                                    <td class="text-center">5000</td> 
                                                    <td class="text-center">1000</td> 
                                                    <td><b>5000</b></td>
                                                    <td><a href="#" class="btn btn-warning btn-xs"><i class="fa fa-remove"></i> UnPaid </a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- end panel -->
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="default-tab-4">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1 well">
                                <!-- begin panel -->
                                <div class="panel">
                                    <div class="panel-heading">
                                        <div class="panel-heading-btn">
                                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-grey" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                        </div>
                                        <h4 class="panel-title text-center"><b>Your Invoice</b></h4>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-td-valign-middle">
                                            <thead>
                                                <tr class="success">
                                                    <th>Invoice No </th>
                                                    <th>Month</th>
                                                    <th>Generated Date</th>
                                                    <th>Payment </th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><a href="#" title="">#10101</a></td>
                                                    <td>January</td>
                                                    <td>28-04-2016</td>
                                                    <td><a href="#" class="btn btn-default btn-xs"><i class="fa fa-check"></i> &nbsp; Paid &nbsp;&nbsp;</a></td>
                                                    <td><a href="{{URL::to('info-owner-invoice')}}" target="_blank" class="btn btn-default btn-xs"><i class="fa fa-eye fa-fw"></i> View</a></td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#" title="">#10101</a></td>
                                                    <td>January</td>
                                                    <td>28-04-2016</td>
                                                    <td><a href="#" class="btn btn-default btn-xs"><i class="fa fa-check"></i> &nbsp; Paid &nbsp;&nbsp;</a></td>
                                                    <td><a href="{{URL::to('info-owner-invoice')}}" target="_blank" class="btn btn-default btn-xs"><i class="fa fa-eye fa-fw"></i> View</a></td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#" title="">#10101</a></td>
                                                    <td>January</td>
                                                    <td>28-04-2016</td>
                                                    <td><a href="#" class="btn btn-default btn-xs"><i class="fa fa-check"></i> &nbsp; Paid &nbsp;&nbsp;</a></td>
                                                    <td><a href="{{URL::to('info-owner-invoice')}}" target="_blank" class="btn btn-default btn-xs"><i class="fa fa-eye fa-fw"></i> View</a></td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#" title="">#10101</a></td>
                                                    <td>January</td>
                                                    <td>28-04-2016</td>
                                                    <td><a href="#" class="btn btn-warning btn-xs"><i class="fa fa-remove"></i> UnPaid</a></td>
                                                    <td><a href="{{URL::to('info-owner-invoice')}}" target="_blank" class="btn btn-default btn-xs"><i class="fa fa-eye fa-fw"></i> View</a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- end panel -->
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="default-tab-5">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1 well">
                                <!-- begin panel -->
                                <div class="panel table-h-600">
                                    <div class="panel-heading">
                                        <div class="panel-heading-btn">
                                            <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-grey" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                        </div>
                                        <h4 class="panel-title text-center"><b>Your Complain</b></h4>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-td-valign-middle table-s">
                                            <thead class="thead-s">
                                                <tr class="success">
                                                    <th> No </th>
                                                    <th>Complain Name</th>
                                                    <th class="text-center">Location</th>
                                                    <th>Description </th>
                                                    <th>&nbsp; &nbsp; Status</th>
                                                    <th>&nbsp;&nbsp; Action</th>
                                                </tr>
                                            </thead>
                                            <tbody class="tbody-s">
                                                <tr class="tr-s">
                                                    <td><a href="#" class="btn btn-default btn-xs">1</a></td>
                                                    <td>HIma Humo</td>
                                                    <td>01 Building, D Unit</td>
                                                    <td class="col-md-3">Kitchen Floor</td> 
                                                    <td>
                                                        <a href="#" class="btn btn-default btn-xs"><i class="fa fa-check"></i> Solved &nbsp; </a>
                                                    </td>
                                                    <td>
                                                        <a href="{{URL::to('info-owner-invoice')}}" target="_blank" class="btn btn-default btn-xs"><i class="fa fa-list"></i> Details</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#" class="btn btn-default btn-xs">2</a></td>
                                                    <td>HIma Humo</td>
                                                    <td>01 Building, D Unit</td>
                                                    <td class="">Damage Window</td> 
                                                    <td>
                                                        <a href="#" class="btn btn-default btn-xs"><i class="fa fa-check"></i> Solved &nbsp; </a>
                                                    </td>
                                                    <td>
                                                        <a href="{{URL::to('info-owner-invoice')}}" target="_blank" class="btn btn-default btn-xs"><i class="fa fa-list"></i> Details</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#" class="btn btn-default btn-xs">3</a></td>
                                                    <td>HIma Humo</td>
                                                    <td>01 Building, D Unit</td>
                                                    <td class="">Damage Window</td> 
                                                    <td>
                                                        <a href="#" class="btn btn-default btn-xs"><i class="fa fa-check"></i> Solved &nbsp; </a>
                                                    </td>
                                                    <td>
                                                        <a href="{{URL::to('info-owner-invoice')}}" target="_blank" class="btn btn-default btn-xs"><i class="fa fa-list"></i> Details</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#" class="btn btn-default btn-xs">4</a></td>
                                                    <td>HIma Humo</td>
                                                    <td>01 Building, D Unit</td>
                                                    <td class="">Damage Window</td> 
                                                    <td>
                                                        <a href="#" class="btn btn-default btn-xs"><i class="fa fa-check"></i> Solved &nbsp; </a>
                                                    </td>
                                                    <td>
                                                        <a href="{{URL::to('info-owner-invoice')}}" target="_blank" class="btn btn-default btn-xs"><i class="fa fa-list"></i> Details</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#" class="btn btn-default btn-xs">1</a></td>
                                                    <td>HIma Humo</td>
                                                    <td>01 Building, D Unit</td>
                                                    <td class="col-md-3">Kitchen Floor</td> 
                                                    <td>
                                                        <a href="#" class="btn btn-default btn-xs"><i class="fa fa-check"></i> Solved &nbsp; </a>
                                                    </td>
                                                    <td>
                                                        <a href="{{URL::to('info-owner-invoice')}}" target="_blank" class="btn btn-default btn-xs"><i class="fa fa-list"></i> Details</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#" class="btn btn-default btn-xs">2</a></td>
                                                    <td>HIma Humo</td>
                                                    <td>01 Building, D Unit</td>
                                                    <td class="">Damage Window</td> 
                                                    <td>
                                                        <a href="#" class="btn btn-default btn-xs"><i class="fa fa-check"></i> Solved &nbsp; </a>
                                                    </td>
                                                    <td>
                                                        <a href="{{URL::to('info-owner-invoice')}}" target="_blank" class="btn btn-default btn-xs"><i class="fa fa-list"></i> Details</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#" class="btn btn-default btn-xs">3</a></td>
                                                    <td>HIma Humo</td>
                                                    <td>01 Building, D Unit</td>
                                                    <td class="">Damage Window</td> 
                                                    <td>
                                                        <a href="#" class="btn btn-default btn-xs"><i class="fa fa-check"></i> Solved &nbsp; </a>
                                                    </td>
                                                    <td>
                                                        <a href="{{URL::to('info-owner-invoice')}}" target="_blank" class="btn btn-default btn-xs"><i class="fa fa-list"></i> Details</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#" class="btn btn-default btn-xs">4</a></td>
                                                    <td>HIma Humo</td>
                                                    <td>01 Building, D Unit</td>
                                                    <td class="">Damage Window</td> 
                                                    <td>
                                                        <a href="#" class="btn btn-default btn-xs"><i class="fa fa-check"></i> Solved &nbsp; </a>
                                                    </td>
                                                    <td>
                                                        <a href="{{URL::to('info-owner-invoice')}}" target="_blank" class="btn btn-default btn-xs"><i class="fa fa-list"></i> Details</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#" class="btn btn-default btn-xs">1</a></td>
                                                    <td>HIma Humo</td>
                                                    <td>01 Building, D Unit</td>
                                                    <td class="col-md-3">Kitchen Floor</td> 
                                                    <td>
                                                        <a href="#" class="btn btn-default btn-xs"><i class="fa fa-check"></i> Solved &nbsp; </a>
                                                    </td>
                                                    <td>
                                                        <a href="{{URL::to('info-owner-invoice')}}" target="_blank" class="btn btn-default btn-xs"><i class="fa fa-list"></i> Details</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#" class="btn btn-default btn-xs">2</a></td>
                                                    <td>HIma Humo</td>
                                                    <td>01 Building, D Unit</td>
                                                    <td class="">Damage Window</td> 
                                                    <td>
                                                        <a href="#" class="btn btn-default btn-xs"><i class="fa fa-check"></i> Solved &nbsp; </a>
                                                    </td>
                                                    <td>
                                                        <a href="{{URL::to('info-owner-invoice')}}" target="_blank" class="btn btn-default btn-xs"><i class="fa fa-list"></i> Details</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#" class="btn btn-default btn-xs">3</a></td>
                                                    <td>HIma Humo</td>
                                                    <td>01 Building, D Unit</td>
                                                    <td class="">Damage Window</td> 
                                                    <td>
                                                        <a href="#" class="btn btn-default btn-xs"><i class="fa fa-check"></i> Solved &nbsp; </a>
                                                    </td>
                                                    <td>
                                                        <a href="{{URL::to('info-owner-invoice')}}" target="_blank" class="btn btn-default btn-xs"><i class="fa fa-list"></i> Details</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#" class="btn btn-default btn-xs">4</a></td>
                                                    <td>HIma Humo</td>
                                                    <td>01 Building, D Unit</td>
                                                    <td class="">Damage Window</td> 
                                                    <td>
                                                        <a href="#" class="btn btn-default btn-xs"><i class="fa fa-check"></i> Solved &nbsp; </a>
                                                    </td>
                                                    <td>
                                                        <a href="{{URL::to('info-owner-invoice')}}" target="_blank" class="btn btn-default btn-xs"><i class="fa fa-list"></i> Details</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#" class="btn btn-default btn-xs">1</a></td>
                                                    <td>HIma Humo</td>
                                                    <td>01 Building, D Unit</td>
                                                    <td class="col-md-3">Kitchen Floor</td> 
                                                    <td>
                                                        <a href="#" class="btn btn-default btn-xs"><i class="fa fa-check"></i> Solved &nbsp; </a>
                                                    </td>
                                                    <td>
                                                        <a href="{{URL::to('info-owner-invoice')}}" target="_blank" class="btn btn-default btn-xs"><i class="fa fa-list"></i> Details</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#" class="btn btn-default btn-xs">2</a></td>
                                                    <td>HIma Humo</td>
                                                    <td>01 Building, D Unit</td>
                                                    <td class="">Damage Window</td> 
                                                    <td>
                                                        <a href="#" class="btn btn-default btn-xs"><i class="fa fa-check"></i> Solved &nbsp; </a>
                                                    </td>
                                                    <td>
                                                        <a href="{{URL::to('info-owner-invoice')}}" target="_blank" class="btn btn-default btn-xs"><i class="fa fa-list"></i> Details</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#" class="btn btn-default btn-xs">3</a></td>
                                                    <td>HIma Humo</td>
                                                    <td>01 Building, D Unit</td>
                                                    <td class="">Damage Window</td> 
                                                    <td>
                                                        <a href="#" class="btn btn-default btn-xs"><i class="fa fa-check"></i> Solved &nbsp; </a>
                                                    </td>
                                                    <td>
                                                        <a href="{{URL::to('info-owner-invoice')}}" target="_blank" class="btn btn-default btn-xs"><i class="fa fa-list"></i> Details</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#" class="btn btn-default btn-xs">4</a></td>
                                                    <td>HIma Humo</td>
                                                    <td>01 Building, D Unit</td>
                                                    <td class="">Damage Window</td> 
                                                    <td>
                                                        <a href="#" class="btn btn-default btn-xs"><i class="fa fa-check"></i> Solved &nbsp; </a>
                                                    </td>
                                                    <td>
                                                        <a href="{{URL::to('info-owner-invoice')}}" target="_blank" class="btn btn-default btn-xs"><i class="fa fa-list"></i> Details</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#" class="btn btn-default btn-xs">1</a></td>
                                                    <td>HIma Humo</td>
                                                    <td>01 Building, D Unit</td>
                                                    <td class="col-md-3">Kitchen Floor</td> 
                                                    <td>
                                                        <a href="#" class="btn btn-default btn-xs"><i class="fa fa-check"></i> Solved &nbsp; </a>
                                                    </td>
                                                    <td>
                                                        <a href="{{URL::to('info-owner-invoice')}}" target="_blank" class="btn btn-default btn-xs"><i class="fa fa-list"></i> Details</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#" class="btn btn-default btn-xs">2</a></td>
                                                    <td>HIma Humo</td>
                                                    <td>01 Building, D Unit</td>
                                                    <td class="">Damage Window</td> 
                                                    <td>
                                                        <a href="#" class="btn btn-default btn-xs"><i class="fa fa-check"></i> Solved &nbsp; </a>
                                                    </td>
                                                    <td>
                                                        <a href="{{URL::to('info-owner-invoice')}}" target="_blank" class="btn btn-default btn-xs"><i class="fa fa-list"></i> Details</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#" class="btn btn-default btn-xs">3</a></td>
                                                    <td>HIma Humo</td>
                                                    <td>01 Building, D Unit</td>
                                                    <td class="">Damage Window</td> 
                                                    <td>
                                                        <a href="#" class="btn btn-default btn-xs"><i class="fa fa-check"></i> Solved &nbsp; </a>
                                                    </td>
                                                    <td>
                                                        <a href="{{URL::to('info-owner-invoice')}}" target="_blank" class="btn btn-default btn-xs"><i class="fa fa-list"></i> Details</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><a href="#" class="btn btn-default btn-xs">4</a></td>
                                                    <td>HIma Humo</td>
                                                    <td>01 Building, D Unit</td>
                                                    <td class="">Damage Window</td> 
                                                    <td>
                                                        <a href="#" class="btn btn-default btn-xs"><i class="fa fa-check"></i> Solved &nbsp; </a>
                                                    </td>
                                                    <td>
                                                        <a href="{{URL::to('info-owner-invoice')}}" target="_blank" class="btn btn-default btn-xs"><i class="fa fa-list"></i> Details</a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- end panel -->
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="default-tab-6">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="col-md-12">
                                    <table class="table table-bordered table-hover" style="border:1px solid #EBECED !important;border-bottom:1px solid #EBECED !important;">
                                        <thead>
                                            <tr class="default">
                                                <th class="text-center">Service Name</th>
                                                <th class="text-center"> Amount</span></th>
                                                <th><span class="m-l-20"> Person</span></th>
                                                <th class="text-center">Mobile Number</th>
                                                <th class="text-right">
                                                    Status &nbsp; &nbsp; &nbsp;
                                                    <a href="{{URL::to('regi-driver')}}" class="btn btn-white btn-xs"><i class="fa fa-plus"></i> Driver </a>
                                                    <a href="#service-assign" class="btn btn-white btn-xs" data-toggle="modal"><i class="fa fa-plus"></i> Service </a>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $number = 0; ?> 
                                            @foreach($service_assigned_show as $v)
                                            <tr>
                                                <td><b><i class="fa fa-arrow-right"></i> {{$v->amount}}</b></td>
                                                <td class="text-center">{{$v->amount}}</td>
                                                <td>{{$v->amount}}</td>
                                                <td class="text-center">{{$v->amount}}</td>
                                                <td class="text-center">
                                                    @if($v->status == 1)
                                                    <a href="#" class="btn btn-default btn-xs" title="Running Service"><i class="fa fa-check text-success-light"></i> </a>
                                                    @else
                                                    <a href="#" class="btn btn-default btn-xs" title="Stop Service">&nbsp;<i class="fa fa-remove text-danger-light"></i>&nbsp; </a>
                                                    @endif
                                                    
                                                    
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
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
                            <h4 class="modal-title text-center">Choose Your Service To Use</h4>
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
                                                    <td class="text-center"><b><i class="fa fa-arrow-right"></i>{{$v->service_type}}</b></td>
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
    <!-- end service_assign of rental modal -->
    <!-- end modal -->

</div>
<!-- end section-container -->
@endsection