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
                <a href="{{URL::to('broadcasting-notice')}}" class="btn btn-default widtg115">Notice</a>
                <a href="{{URL::to('broadcasting-sms')}}" class="btn btn-default widtg115">SMS</a>
                <a href="{{URL::to('broadcasting-email-inbox')}}" class="btn btn-default widtg115">E-Mail</a>
                </p>
            </div>
            <!-- end menu bar -->
        </div>
    </div>
    <!-- end row -->
</div>
@yield('broadcasting_content')
@endsection