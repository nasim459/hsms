@section('inventory_content')
<!-- begin section-container -->
<div class="section-container">
    <!-- begin row -->
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <!-- begin panel -->
            <div class="panel without-pagination clearfix m-b-0">
                <table id="data-table" data-order='[[1,"asc"]]' class="table table-bordered table-hover">
                    <thead>
                        <tr class="default">
                            <th data-sorting="disabled">SL</th>
                            <th>Building Info</th>
                            <th>Description</th>
                            <th data-sorting="disabled" class="text-center">Amount</th>
                            <th data-sorting="disabled" class="text-center">
                                Status &nbsp;
                                <a href="{{URL::to('inventory-utilities-grant-total')}}" class="btn btn-white btn-xs"><i class="fa fa-calculator"></i> Grant Total</a>
                                <a href="{{URL::to('inventory-utilities-add')}}" class="btn btn-white btn-xs"><i class="fa fa-plus"></i> Add</a>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="odd gradeX">
                            <td>01</td>
                            <td>01-Building, A-Unit</td>
                            <td class="col-md-4"><p class="">Window Repair</p></td>
                            <td class="text-center">0.0</td>
                            <td class="text-center">
                                <a href="" class="btn btn-default btn-xs" title="Payment is Paid"><i class="fa fa-check"></i></a> 
                                <a href="{{URL::to('inventory-utilities-edit')}}" class="btn btn-default btn-xs" title="Edit Your Bills"><i class="fa fa-edit"> </i> Edit</a> 
                                <a href="#modal-alert" class="btn btn-default btn-xs" data-toggle="modal"><i class="fa fa-list-alt"></i> Details</a>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>02</td>
                            <td>01-Building, A-Unit</td>
                            <td>Make 5 Door</td>
                            <td class="text-center">1000</td>
                            <td class="text-center">
                                <a href="" class="btn btn-warning btn-xs" title="Payment is UnPaid"><i class="fa fa-remove">&nbsp;</i></a> 
                                <a href="{{URL::to('inventory-utilities-edit')}}" class="btn btn-default btn-xs" title="Edit Your Bills"><i class="fa fa-edit"> </i> Edit</a> 
                                <a href="{{URL::to('inventory-utilities-details')}}" class="btn btn-default btn-xs"><i class="fa fa-list-alt"></i> Details</a>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>03</td>
                            <td>01-Building, A-Unit</td>
                            <td>Make chair in office</td>
                            <td class="text-center">0.0</td>
                            <td class="text-center">
                                <a href="" class="btn btn-default btn-xs" title="Payment is Paid"><i class="fa fa-check"></i></a>  
                                <a href="{{URL::to('inventory-utilities-edit')}}" class="btn btn-default btn-xs" title="Edit Your Bills"><i class="fa fa-edit"> </i> Edit</a> 
                                <a href="{{URL::to('inventory-utilities-details')}}" class="btn btn-default btn-xs"><i class="fa fa-list-alt"></i> Details</a>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>04</td>
                            <td>01-Building, D-Unit</td>
                            <td>Make chair in office</td>
                            <td class="text-center">0.0</td>
                            <td class="text-center">
                                <a href="" class="btn btn-default btn-xs" title="Payment is Paid"><i class="fa fa-check"></i></a> 
                                <a href="{{URL::to('inventory-utilities-edit')}}" class="btn btn-default btn-xs" title="Edit Your Bills"><i class="fa fa-edit"> </i> Edit</a> 
                                <a href="{{URL::to('inventory-utilities-details')}}" class="btn btn-default btn-xs"><i class="fa fa-list-alt"></i> Details</a>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>04</td>
                            <td>04 - Building</td>
                            <td>Make chair in office</td>
                            <td class="text-center">0.0</td>
                            <td class="text-center">
                                <a href="" class="btn btn-default btn-xs" title="Payment is Paid"><i class="fa fa-check"></i></a> 
                                <a href="{{URL::to('inventory-utilities-edit')}}" class="btn btn-default btn-xs" title="Edit Your Bills"><i class="fa fa-edit"> </i> Edit</a> 
                                <a href="{{URL::to('inventory-utilities-details')}}" class="btn btn-default btn-xs"><i class="fa fa-list-alt"></i> Details</a>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>06</td>
                            <td>06 - Building</td>
                            <td>Make chair in office</td>
                            <td class="text-center">0.0</td>
                            <td class="text-center">
                                <a href="" class="btn btn-default btn-xs" title="Payment is Paid"><i class="fa fa-check"></i></a> 
                                <a href="{{URL::to('inventory-utilities-edit')}}" class="btn btn-default btn-xs" title="Edit Your Bills"><i class="fa fa-edit"> </i> Edit</a> 
                                <a href="{{URL::to('inventory-utilities-details')}}" class="btn btn-default btn-xs"><i class="fa fa-list-alt"></i> Details</a>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>07</td>
                            <td>07 - Building</td>
                            <td>Make chair in office</td>
                            <td class="text-center">0.0</td>
                            <td class="text-center">
                                <a href="" class="btn btn-default btn-xs" title="Payment is Paid"><i class="fa fa-check"></i></a> 
                                <a href="{{URL::to('inventory-utilities-edit')}}" class="btn btn-default btn-xs" title="Edit Your Bills"><i class="fa fa-edit"> </i> Edit</a> 
                                <a href="{{URL::to('inventory-utilities-details')}}" class="btn btn-default btn-xs"><i class="fa fa-list-alt"></i> Details</a>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>08</td>
                            <td>08 - Buliding</td>
                            <td>Make chair in office</td>
                            <td class="text-center">0.0</td>
                            <td class="text-center">
                                <a href="" class="btn btn-default btn-xs" title="Payment is Paid"><i class="fa fa-check"></i></a> 
                                <a href="{{URL::to('inventory-utilities-edit')}}" class="btn btn-default btn-xs" title="Edit Your Bills"><i class="fa fa-edit"> </i> Edit</a> 
                                <a href="{{URL::to('inventory-utilities-details')}}" class="btn btn-default btn-xs"><i class="fa fa-list-alt"></i> Details</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- end panel -->
        </div>
        <!-- Being #modal-alert -->
        <div class="col-md-6">
            <div class="clearfix m-b-25">
                <!-- #modal-alert -->
                <div class="modal fade" id="modal-alert">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title text-info text-center"> Details Utilities Bill</h4>
                            </div>
                            <div class="modal-body">
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
                                        </dl>
                                    </div>
                                    <!-- end row panel body --->
                                </div>

                                <div class="modal-footer">
                                    <a href="javascript:;" class="btn width-100 btn-default" data-dismiss="modal">Close</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End #modal-alert -->
        <!-- end row -->
    </div>
    <!-- end section-container -->
    @endsection
