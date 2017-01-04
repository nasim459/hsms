@extends('master_ap')
@section('maincontent')
<!-- begin breadcrumb -->
<ol class="breadcrumb pull-right">
    <li><a href="{{URL::to('dboard')}}" title="Go Dahsboard">Dashboard</a></li>
    <li class="active">Broadcasting</li>
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
                <a href="{{URL::to('inventory-ataglance')}}" class="btn btn-default widtg115">At A Glance</a>
                <a href="{{URL::to('inventory-income')}}" class="btn btn-default widtg115">Income</a>
                <a href="{{URL::to('inventory-utilities')}}" class="btn btn-default widtg115">Utilities Bills</a>
            </p>
            <!-- end menu bar -->
        </div>
    </div>
    <!-- end row -->
</div>
@yield('inventory_content')
@endsection