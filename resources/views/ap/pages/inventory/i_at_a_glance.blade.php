@section('inventory_content')
<!-- begin section-container -->
<div class="section-container" ng-controller="InventoryController">
    <!-- begin row -->
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <!-- begin panel -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-heading-btn"></div>
                    <h4 class="panel-title text-center">
                        <strong>Income & Expenditure Bills</strong>
                    </h4>
                </div>
                <div class="panel-body">
                    <!-- begin row panel body --->
                    <div class="row">
                        <div class="form-group">
                        <!--<label class="control-label col-sm-2 col-sm-offset-4">Select Option <span class="text-danger">*</span></label>-->
                            <div class="col-sm-2 col-sm-offset-1"></div>
                            <div class="col-sm-3">
                                <select class="form-control" id="select-required" name="selectBox" data-parsley-required="true">
                                    <option>Select Year</option>
                                    <option value="2010">2010</option>
                                    <option value="2011">2011</option>
                                    <option value="2012">2012</option>
                                </select>
                            </div>
                            <div class="col-sm-3">
                                <select class="form-control" id="select-required" name="selectBox" data-parsley-required="true">
                                    <option>Select Month</option>
                                    <option value="foo">January</option>
                                    <option value="bar">February</option>
                                    <option value="bar">March</option>
                                    <option value="bar">April</option>
                                    <option value="bar">May</option>
                                    <option value="bar">June</option>
                                    <option value="bar">July</option>
                                    <option value="bar">August</option>
                                    <option value="bar">September</option>
                                    <option value="bar">Octomber</option>
                                    <option value="bar">November</option>
                                    <option value="bar">December</option>
                                </select>
                            </div>
                        </div>
                        <h5 class="m-t-0"></h5>
                        <p class="m-b-15"></p>
                        <div class="col-md-4 col-md-offset-4 m-t-20">
                            <h5 class="m-t-10"></h5>
                            <dl class="dl-horizontal m-b-20 f-s-18">
                                <dt>Payable Amount :</dt>
                                <dd>{{Session::get('at_a_glance_payable_amount')}} /=</dd>
                                <dt>Pay Amount :</dt>
                                <dd>{{Session::get('at_a_glance_pay_amount')}} /=</dd>
                                <dt>Due Amount :</dt>
                                <dd class="text-danger">{{Session::get('at_a_glance_payable_amount') - Session::get('at_a_glance_pay_amount')}} /=</dd><hr class="hr-d">
                                <dt class="text-success">Total Receive :</dt>
                                <dd class="text-success"><b>{{Session::get('at_a_glance_pay_amount')}} /=</b></dd>
                            </dl>
                        </div>
                    </div><hr class="hr-d">
                    <!-- end row panel body --->

                    <!-- begin row panel body --->
                    <div class="row">
                        <div class="m-t-10 m-b-5 text-center"><b>See your Expenditure Bills</b></div>
                        
                        <div class="form-group">
                        <!--<label class="control-label col-sm-2 col-sm-offset-4">Select Option <span class="text-danger">*</span></label>-->
                            <div class="col-sm-2 col-sm-offset-1"></div>
                            <div class="col-sm-3">
                                <select class="form-control" id="select-required" name="selectBox" data-parsley-required="true">
                                    <option>Select Year</option>
                                    <option value="foo">January</option>
                                    <option value="bar">February</option>
                                    <option value="bar">March</option>
                                    <option value="bar">April</option>
                                    <option value="bar">May</option>
                                    <option value="bar">June</option>
                                    <option value="bar">July</option>
                                    <option value="bar">August</option>
                                    <option value="bar">September</option>
                                    <option value="bar">Octomber</option>
                                    <option value="bar">November</option>
                                    <option value="bar">December</option>
                                </select>
                            </div>
                            <div class="col-sm-3">
                                <select class="form-control" id="select-required" name="selectBox" data-parsley-required="true">
                                    <option>Select Month</option>
                                    <option value="foo">January</option>
                                    <option value="bar">February</option>
                                    <option value="bar">March</option>
                                    <option value="bar">April</option>
                                    <option value="bar">May</option>
                                    <option value="bar">June</option>
                                    <option value="bar">July</option>
                                    <option value="bar">August</option>
                                    <option value="bar">September</option>
                                    <option value="bar">Octomber</option>
                                    <option value="bar">November</option>
                                    <option value="bar">December</option>
                                </select>
                            </div>
                        </div>
                        <h5 class="m-t-0"></h5>
                        <p class="m-b-15"></p>
                        <div class="col-md-6 col-md-offset-3">
                            <h5 class="m-t-10"></h5>
                            <dl class="dl-horizontal m-b-20 f-s-14">
                                <dt>Expenditure Bills :</dt>
                                <dd>500000 &nbsp;|=</dd>
                                <h5 class="text-right">
                                    <a href="{{URL::to('inventory-utilities')}}" class="btn btn-default btn-xs text-right" title="See Details Utilities Bills"><i class="fa fa-arrow-right"> </i> Utilities Bills</a>
                                </h5>
                            </dl>
                        </div>
                    </div>
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
