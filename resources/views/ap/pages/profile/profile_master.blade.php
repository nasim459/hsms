@extends('master_ap')
@section('maincontent')
<!-- begin breadcrumb -->
<ol class="breadcrumb pull-right">
    <li><a href="{{URL::to('dboard')}}" title="Go Dahsboard">Dashboard</a></li>
    <li class="active">Admin</li>
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
                <a href="{{URL::to('info-driver')}}" class="btn btn-default widtg115">General Admin</a>
                <a href="{{URL::to('profile-admin')}}" class="btn btn-default widtg115">Admin</a>
                <a href="{{URL::to('profile-super-admin')}}" class="btn btn-default widtg115">Super Admin</a>
            </p>
            <!-- end menu bar -->
        </div>
        <!-- end col-12 -->
    </div>
    <!-- end row -->
</div>
@yield('profile_content')
@endsection