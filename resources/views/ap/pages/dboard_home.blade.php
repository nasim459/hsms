@extends('master_ap')
@section('maincontent')
<!-- begin breadcrumb -->
<ol class="breadcrumb pull-right">
    <li><a href="">Dashboard</a></li>
    <!-- <li class="active">Dashboard</li> -->
</ol>
<!-- end breadcrumb -->
<!-- begin page-header -->
<!-- <a href="" class="btn btn-white m-r-5"><i class="fa fa-home"></i></a> -->
<!-- end page-header -->

<!-- begin row -->
<div class="row">
    <!-- begin col-12 -->
    <div class="col-md-12">
        <!-- begin col-2 -->
        <div class="col-md-7 col-md-offset-5">
            <!-- begin widget -->
            <p class="m-b-20">
                <a href="" class="m-r-5 text-success"><i class="fa fa-home fa-2x"> Dashboard HSMS</i></a>
            </p> 
            <!-- end widget -->
        </div>
    </div>
    <!-- end col-12 -->

</div>
<!-- end row -->

<!-- begin row -->
<div class="row">
    <!-- begin col-12 -->
    <div class="col-md-12">
        <!-- begin col-2 -->
        <div class="col-md-2 col-md-offset-2">
            <!-- begin widget -->
            <p>
                <a href="{{URL::to('info-owner')}}" class="btn btn-lg btn-white widtg150">
                    <i class="fa fa-user fa-2x"></i><br />
                    <small>Owner</small>
                </a>
            </p>
            <!-- end widget -->
        </div>
        <!-- end col-2 -->
        <!-- begin col-2 -->
        <div class="col-md-2">
            <!-- begin widget -->
            <p>
                <a href="{{URL::to('info-rental')}}" class="btn btn-lg btn-white widtg150">
                    <i class="fa fa-users fa-2x fa-3y"></i><br />
                    <small>Rental</small>
                </a>
            </p>
            <!-- end widget -->
        </div>
        <!-- end col-2 -->
        <!-- begin col-2 -->
        <div class="col-md-2">
            <!-- begin widget -->
            <p>
                <a href="{{URL::to('info-driver')}}" class="btn btn-lg btn-white widtg150">
                    <i class="fa fa-car fa-2x fa-3y"></i><br />
                    <small>Driver</small>
                </a>
            </p>
            <!-- end widget -->
        </div>
        <!-- end col-2 -->
        <!-- begin col-2 -->
        <div class="col-md-2">
            <!-- begin widget -->
            <p>
                <a href="{{URL::to('info-housekeeping')}}" class="btn btn-lg btn-white widtg150">
                    <i class="fa fa-male fa-2x fa-3y"></i><br />
                    <small>Housekeeping</small>
                </a>
            </p>
            <!-- end widget -->
        </div>
        <!-- end col-2 -->

    </div>
    <!-- end col-12 -->

</div>
<!-- end row -->

<!-- begin row -->
<div class="row">
    <!-- begin col-12 -->
    <div class="col-md-12">
        <!-- begin col-2 -->
        <div class="col-md-2 col-md-offset-2">
            <!-- begin widget -->
            <p>
                <a href="{{URL::to('broadcasting-sms')}}" class="btn btn-lg btn-white widtg150">
                    <i class="fa fa-comments fa-2x"></i><br />
                    <small>Your SMS</small>
                </a>
            </p>
            <!-- end widget -->
        </div>
        <!-- end col-2 -->
        <!-- begin col-2 -->
        <div class="col-md-2">
            <!-- begin widget -->
            <p>
                <a href="{{URL::to('broadcasting-email-inbox')}}" class="btn btn-lg btn-white widtg150">
                    <i class="fa fa-envelope fa-2x fa-3y"></i><br />
                    <small>E-Mail</small>
                </a>
            </p>
            <!-- end widget -->
        </div>
        <!-- end col-2 -->
        <!-- begin col-2 -->
        <div class="col-md-2">
            <!-- begin widget -->
            <p>
                <a href="{{URL::to('broadcasting-notice')}}" class="btn btn-lg btn-white widtg150">
                    <i class="fa fa-warning fa-2x"></i><br />
                    <small>Notice</small>
                </a>
            </p>
            <!-- end widget -->
        </div>
        <!-- end col-2 -->
        <!-- begin col-2 -->
        <div class="col-md-2">
            <!-- begin widget -->
            <p>
                <a href="{{URL::to('broadcasting-sms-add')}}" class="btn btn-lg btn-white widtg150">
                    <i class="fa fa-send fa-2x"></i><br />
                    <small>Send SMS</small>
                </a>
            </p>
            <!-- end widget -->
        </div>
        <!-- end col-2 -->

    </div>
    <!-- end col-12 -->

</div>
<!-- end row -->

<!-- begin row -->
<div class="row">
    <!-- begin col-12 -->
    <div class="col-md-12">
        <!-- begin col-2 -->
        <div class="col-md-2 col-md-offset-2">
            <!-- begin widget -->
            <p>
                <a href="{{URL::to('inventory-ataglance')}}" class="btn btn-lg btn-white widtg150">
                    <i class="fa fa-money fa-2x"></i><br />
                    <small>Account</small>
                </a>
            </p>
            <!-- end widget -->
        </div>
        <!-- end col-2 -->
        <!-- begin col-2 -->
        <div class="col-md-2">
            <!-- begin widget -->
            <p>
                <a href="{{URL::to('inventory-income')}}" class="btn btn-lg btn-white widtg150">
                    <i class="fa fa-database fa-2x fa-3y"></i><br />
                    <small>Income</small>
                </a>
            </p>
            <!-- end widget -->
        </div>
        <!-- end col-2 -->
        <!-- begin col-2 -->
        <div class="col-md-2">
            <!-- begin widget -->
            <p>
                <a href="{{URL::to('inventory-utilities')}}" class="btn btn-lg btn-white widtg150">
                    <i class="fa fa-list-alt fa-2x"></i><br />
                    <small>Utilities Bills</small>
                </a>
            </p>
            <!-- end widget -->
        </div>
        <!-- end col-2 -->
        <!-- begin col-2 -->
        <div class="col-md-2">
            <!-- begin widget -->
            <p>
                <a href="{{URL::to('inventory-utilities-add')}}" class="btn btn-lg btn-white widtg150">
                    <i class="fa fa-plus fa-2x"></i><br />
                    <small>Create Bills</small>
                </a>
            </p>
            <!-- end widget -->
        </div>
        <!-- end col-2 -->

    </div>
    <!-- end col-12 -->

</div>
<!-- end row -->

<!-- begin row -->
<div class="row">
    <!-- begin col-12 -->
    <div class="col-md-12">
        <!-- begin col-2 -->
        <div class="col-md-2 col-md-offset-2">
            <!-- begin widget -->
            <p>
                <a href="{{URL::to('payment-hand-cash')}}" class="btn btn-lg btn-white widtg150">
                    <i class="fa fa-fax fa-2x"></i><br />
                    <small>Hand Cash</small>
                </a>
            </p>
            <!-- end widget -->
        </div>
        <!-- end col-2 -->
        <!-- begin col-2 -->
        <div class="col-md-2">
            <!-- begin widget -->
            <p>
                <a href="{{URL::to('payment-bank')}}" class="btn btn-lg btn-white widtg150">
                    <i class="fa fa-bank fa-2x fa-3y"></i><br />
                    <small>Bank</small>
                </a>
            </p>
            <!-- end widget -->
        </div>
        <!-- end col-2 -->
        <!-- begin col-2 -->
        <div class="col-md-2">
            <!-- begin widget -->
            <p>
                <a href="{{URL::to('payment-bkash')}}" class="btn btn-lg btn-white widtg150">
                    <i class="fa fa-skyatlas fa-2x"></i><br />
                    <small>bKash</small>
                </a>
            </p>
            <!-- end widget -->
        </div>
        <!-- end col-2 -->
        <!-- begin col-2 -->
        <div class="col-md-2">
            <!-- begin widget -->
            <p>
                <a href="{{URL::to('regi-info')}}" class="btn btn-lg btn-white widtg150">
                    <i class="fa fa-user-plus fa-2x"></i><br />
                    <small>Registration</small>
                </a>
            </p>
            <!-- end widget -->
        </div>
        <!-- end col-2 -->

    </div>
    <!-- end col-12 -->

</div>
<!-- end row -->
@endsection