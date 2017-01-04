@section('inventory_content')
<!-- begin section-container -->
<div class="section-container">
    <!-- begin row -->
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <!-- begin panel -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-inverse" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-inverse" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-inverse" data-click="panel-remove"><i class="fa fa-times"></i></a>
                    </div>
                    <h4 class="panel-title text-center">
                        <a href="{{URL::to('inventory-utilities')}}" class="btn btn-white btn-xs" title="Go Back">&nbsp;<i class="fa fa-arrow-left"></i>&nbsp;</a>  
                        <strong>&nbsp; Details Utilities Bills </strong>
                    </h4>
                </div>
                <div class="panel-body">
                    <!-- begin row panel body --->
                    <div class="row">
                        <div class="form-group">
                        <!--<label class="control-label col-sm-2 col-sm-offset-4">Select Option <span class="text-danger">*</span></label>-->
                            <div class="col-sm-2 col-sm-offset-1"></div>
                            <div class="col-sm-3">
                            </div>
                            <div class="col-sm-3">
                            </div>
                        </div>
                        <h5 class="m-t-0"></h5>
                        <p class="m-b-15"></p>
                        <div class="col-md-6 col-md-offset-3">
                            <h4 class="m-t-10 text-center text-info">Utilities Bill of All Building of This Month</h4>
                            <dl class="dl-horizontal m-b-20 f-s-14">
                                <dt>Created By :</dt>
                                <dd>Md Tihan</dd>
                                <dt>Invoice No :</dt>
                                <dd>010101</dd>
                                <dt>Date :</dt>
                                <dd>01-07-06</dd>
                                <dt>Payable Amount :</dt>
                                <dd>2500000</dd>
                                <dt>Paid Amount :</dt>
                                <dd>2000000</dd>
                                <dt>Dues :</dt>
                                <dd>500000</dd><hr class="hr-d">
                                <dt>Grant Total :</dt>
                                <dd>2000000</dd>
                                <h5 class="text-left">
                                    <a href="{{URL::to('inventory-utilities')}}" class="btn btn-default btn-xs" title="Back To Utilities Bills"><i class="fa fa-arrow-left"> </i> Utilities Bills </a>
                                </h5>
                            </dl>
                        </div>
                    </div><hr class="hr-d">
                    <!-- end row panel body --->
                </div>
            </div>
            <!-- end panel -->
        </div>
    </div>
    <!-- end row -->
</div>
<!-- end section-container -->
@endsection
