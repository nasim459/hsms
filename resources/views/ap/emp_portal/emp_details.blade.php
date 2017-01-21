@extends('ap.emp_portal.emp_dboard')
@section('maincontent')
<!-- begin breadcrumb -->
<!--<ol class="breadcrumb pull-right">
    <li><a href="{{URL::to('emp-dboard')}}" title="Go Dahsboard">Employee Dashboard</a></li>
    
</ol>
<ol class="breadcrumb pull-left">
    <li><a href="{{URL::to('emp-dboard')}}" class="btn btn-sm btn-white" title="Go Dahsboard"><i class="fa fa-home"></i></a></li>
</ol>-->
<!-- end breadcrumb -->

<!-- begin section-container -->
<div class="section-container">
    <!-- begin row -->
    <div class="row">
        <!------------------------------------------------------------------>
        <div class="col-md-12">
            <!-- begin panel -->
            <div class="panel panel-default">

                <div class="panel-heading">
                    <div class="btn-group pull-left">
                        <a href="{{URL::to('info-emp')}}" class="btn btn-white btn-xs" title=""><i class="fa fa-arrow-left"></i>&nbsp;</a>
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
                                            Yamin Alam<br/>
                                            12345678<br/>
                                            <b>IT Consultent</b><br/>
                                        </b>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <p class="f-s-15">
                                    &nbsp;<br/>
                                    Payment: <b>Paid</b><br/>
                                    Address: <b title="Present Address">Chirir Bandar</b><br/>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#default-tab-1" data-toggle="tab"><i class="fa fa-user"></i> Profile</a></li>
                    <li class=""><a href="#default-tab-2" data-toggle="tab"><i class="fa fa-list"></i> Details</a></li>
<!--                    <li class=""><a href="#default-tab-3" data-toggle="tab"><i class="fa fa-credit-card"></i> Payment</a></li>
                    <li class=""><a href="#default-tab-4" data-toggle="tab"><i class="fa fa-cc-discover"></i> Invoice</a></li>
                    <li class=""><a href="#default-tab-5" data-toggle="tab"><i class="fa fa-user"></i> Complain</a></li>
                    <li class=""><a href="#default-tab-6" data-toggle="tab"><i class="fa fa-user"></i> Salary Statement</a></li>-->
                </ul>
                <div class="tab-content m-b-0">
                    <div class="tab-pane fade active in" id="default-tab-1">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="col-md-7">
                                    <h4><strong class="text-success">Personal Information of Yamin Alam</strong></h4>
                                    <dl class="dl-horizontal m-b-20">
                                        <dt>Employee Name :</dt>
                                        <dd>Yamin Alam</dd>
                                        <dt>ID :</dt>
                                        <dd>12345678</dd>
                                        <dt>Son off/wife off :</dt>
                                        <dd>Lokman Hakim</dd>
                                        <dt>National ID :</dt>
                                        <dd>19992362789</dd>
                                        <dt>Passport No :</dt>
                                        <dd>098765434567</dd>
                                        <dt>Phone Number :</dt>
                                        <dd>01751300314</dd>
                                        <dd>01734567716</dd>
                                        <dt>Email Address :<dt>
                                        <dd>yaminalam27@gmail.com</dd>
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

                </div>

            </div>
            <!-- end panel -->
        </div>
        <!------------------------------------------------------------------>
        
    </div>
    <!-- end row -->
</div>
<!--@yield('people_content')-->
@endsection 
