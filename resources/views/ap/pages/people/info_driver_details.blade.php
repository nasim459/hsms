@section('people_content')
<!-- begin section-container -->
<div class="section-container">
    <!-- begin row -->
    <div class="row">
        <!-- begin col-12 -->
        <div class="col-md-12">
            <!-- begin panel -->
            <div class="panel panel-default">

                @foreach($driver_details as $d)
                <div class="panel-heading">
                    <div class="btn-group pull-left">
                        <a href="{{URL::to('info-driver')}}" class="btn btn-white btn-xs" title="Back to Owner"><i class="fa fa-arrow-left"></i>&nbsp;</a>
                    </div>
                    <div class="btn-group pull-right">
                        <button type="button" class="btn btn-white btn-xs">Action</button>
                        <button type="button" class="btn btn-white btn-xs dropdown-toggle" data-toggle="dropdown">
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{URL::to('info-owner')}}"><i class="fa fa-pencil"></i> Edit Picture</a></li>
                            <li><a href="{{URL::to('info-driver-edit/'.$d->driver_details_id)}}"><i class="fa fa-edit"></i> Edit All Profile</a></li>
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
                                            &nbsp;<br/>
                                            {{$d->driver_name}}<br/>
                                            {{$d->driver_id}}<br/>
                                            
                                        </b>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <p class="f-s-15">
                                    &nbsp;<br/>
                                    Payment: <b>Paid</b><br/>
                                    Address: <b title="Present Address">{{$d->dpi_police_station}}</b><br/>
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
                    <li class=""><a href="#default-tab-6" data-toggle="tab"><i class="fa fa-user"></i> Salary Statement</a></li>
                </ul>
                <div class="tab-content m-b-0">
                    <div class="tab-pane fade active in" id="default-tab-1">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="col-md-7">
                                    <h4><strong class="text-success">Personal Information of {{$d->driver_name}}</strong></h4>
                                    <dl class="dl-horizontal m-b-20">
                                        <dt>Employee Name :</dt>
                                        <dd>{{$d->driver_name}}</dd>
                                        <dt>ID :</dt>
                                        <dd>{{$d->driver_id}}</dd>
                                        <dt>Son off/wife off :</dt>
                                        <dd>{{$d->driver_son_wife_off}}</dd>
                                        <dt>National ID :</dt>
                                        <dd>{{$d->driver_national_id}}</dd>
                                        <dt>Passport No :</dt>
                                        <dd>{{$d->driver_passport_no}}</dd>
                                        <dt>Phone Number :</dt>
                                        <dd>{{$d->driver_phone1}}</dd>
                                        <dd>{{$d->driver_phone2}}</dd>
                                       
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
                                        <dt>Employee Name :</dt>
                                        <dd>{{$d->driver_name}}</dd>
                                        <dt>ID :</dt>
                                        <dd>{{$d->driver_id}}</dd>
                                        <dt>Son off/wife off :</dt>
                                        <dd>{{$d->driver_son_wife_off}}</dd>
                                        <dt>National ID :</dt>
                                        <dd>{{$d->driver_national_id}}</dd>
                                        <dt>Passport No :</dt>
                                        <dd>{{$d->driver_passport_no}}</dd>
                                        <dt>Phone Number :</dt>
                                        <dd>{{$d->driver_phone1}}</dd>
                                        <dd>{{$d->driver_phone2}}</dd>
                                    </dl>
                                </div>
                                <div class="col-md-6">
                                    <h4><strong class="text-success">Personal Information</strong></h4>
                                    <dl class="dl-horizontal m-b-20">
                                      
                                        <dt>Gender :</dt>
                                        @if($d->dpi_gender == 1)
                                        <dd>Mail</dd>
                                        @else
                                        <dd>Femail</dd>
                                        @endif
                                        <dt>Religion :</dt>
                                        <dd>{{$d->dpi_religion}}</dd>
                                        <dt>Car Registration No  :</dt>
                                        <dd>{{$d->driver_car_regi_no}}</dd>
                                        <dt>Driving Licence No  :</dt>
                                        <dd>{{$d->driver_licence_no}}</dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="col-md-6 col-md-offset-3">
                                    <h4><strong class="text-success">Permanent Information</strong></h4>
                                    <dl class="dl-horizontal m-b-20">
                                        <dt>Country :</dt>
                                        <dd>{{$d->dpi_country}}</dd>
                                        <dt>District :</dt>
                                        <dd>{{$d->dpi_district}}</dd>
                                        <dt>Thana :</dt>
                                        <dd>{{$d->dpi_police_station}}</dd>
                                        <dt>Village :</dt>
                                        <dd>{{$d->dpi_village}}</dd>
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
                    @endforeach()

                </div>

                <!-- end salary registration modal -->

            </div>
            <!-- end panel -->
        </div>
        <!-- end col-6 --> 
    </div>
    <!-- end row -->
</div>
<!-- end section-container -->
@endsection