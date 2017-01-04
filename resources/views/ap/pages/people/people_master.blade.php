@extends('master_ap')
@section('maincontent')
<!-- begin breadcrumb -->
<ol class="breadcrumb pull-right">
    <li><a href="{{URL::to('dboard')}}" title="Go Dahsboard">Dashboard</a></li>
    <li class="active">People</li>
</ol>
<ol class="breadcrumb pull-left">
    <li><a href="{{URL::to('dboard')}}" class="btn btn-sm btn-white" title="Go Dahsboard"><i class="fa fa-home"></i></a></li>
</ol>
<!-- end breadcrumb -->

<!-- begin section-container -->
<div class="section-container">
    <!-- begin row -->
    <div class="row">
        <!-- begin col-12 -->
        <div class="col-md-12">
            <!-- begin menu bar -->
            <p class="text-center  m-b-mi-23">
                <a href="{{URL::to('info-emp')}}" class="btn btn-default widtg115">Employee</a>
                <a href="{{URL::to('info-owner')}}" class="btn btn-default widtg115">Owner</a>
                <a href="{{URL::to('info-rental')}}" class="btn btn-default widtg115">Rental</a>
                <a href="{{URL::to('info-driver')}}" class="btn btn-default widtg115">Driver</a>
                <a href="{{URL::to('info-housekeeping')}}" class="btn btn-default widtg115">Housekeeping</a>
                <a href="{{URL::to('info-visiting')}}" class="btn btn-default widtg115">Visiting</a>
                <a href="{{URL::to('info-service')}}" class="btn btn-default widtg115">Service People</a>
            </p>
            <!-- end menu bar -->
        </div>
        <!-- end col-12 -->
    </div>
    <!-- end row -->
</div>
@yield('people_content')
@endsection