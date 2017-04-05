@extends('master_ap')
@section('maincontent')
<!-- begin section-container -->
<div class="section-container">
    <!-- begin row -->
    <div class="row">
        <!-- begin col-12 -->
        <div class="col-md-12">
            <!-- begin menu bar -->
            <div style="margin-top: -26px">
                <p class="text-center m-b-mi-23 m-t-10"> 
                <a href="{{URL::to('inventory-ataglance')}}" class="btn btn-default widtg115">At A Glance</a>
                <a href="{{URL::to('inventory-income')}}" class="btn btn-default widtg115">Income</a>
                <a href="{{URL::to('inventory-utilities')}}" class="btn btn-default widtg115">Utilities Bills</a>
                </p>
            </div>
            <!-- end menu bar -->
        </div>
    </div>
    <!-- end row -->
</div>
@yield('inventory_content')
@endsection