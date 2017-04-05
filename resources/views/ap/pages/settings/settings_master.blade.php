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
                <a href="{{URL::to('make-service-bill')}}" class="btn btn-default widtg115">Bill Generate</a> &nbsp;
                <a href="{{URL::to('make-salary')}}" class="btn btn-default widtg115">Employer Salary</a> &nbsp;
                <a href="{{URL::to('bld-add')}}" class="btn btn-default widtg115">Building</a> &nbsp;
                </p>
            </div>
            <!-- end menu bar -->
        </div>
        <!-- end col-12 -->
    </div>
    <!-- end row -->
</div>
@yield('settings_content')
@endsection