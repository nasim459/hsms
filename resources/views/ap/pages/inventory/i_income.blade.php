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
                            <th>Month</th>
                            <th data-sorting="disabled" class="text-center">Payable &nbsp; &nbsp; - &nbsp; &nbsp; Reaceiable</th>
                            <th data-sorting="disabled" class="text-center">Dues</th>
                            <th data-sorting="disabled" class="text-center">
                                Status &nbsp;
                                <a href="{{URL::to('inventory-grant-total')}}" class="btn btn-white btn-xs"><i class="fa fa-calculator"></i> Grant Total</a>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="odd gradeX">
                            <td>01</td>
                            <td>01 - Buliding</td>
                            <td>March</td>
                            <td class="text-center">12000 &nbsp; &nbsp; &nbsp; &nbsp; 12000</td>
                            <td class="text-center">0.0</td>
                            <td class="text-center">
                                <a href="" class="btn btn-default btn-xs" title="Payment is Paid"><i class="fa fa-check"></i></a> 
                                <!-- <a href="{{URL::to('payment-hand-cash-edit')}}" class="btn btn-default btn-xs"><i class="fa fa-edit"></i> Edit</a> --> 
                                <a href="{{URL::to('info-owner-details')}}" class="btn btn-default btn-xs"><i class="fa fa-list-alt"></i> Details</a>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>02</td>
                            <td>02 - Buliding</td>
                            <td>Frbruary</td>
                            <td class="text-center">2000 &nbsp; &nbsp; &nbsp; &nbsp; 1000</td>
                            <td class="text-center">1000</td>
                            <td class="text-center">
                                <a href="" class="btn btn-warning btn-xs" title="Payment is UnPaid"><i class="fa fa-remove">&nbsp;</i></a>
                                <a href="{{URL::to('info-owner-details')}}" class="btn btn-default btn-xs"><i class="fa fa-list-alt"></i> Details</a>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>03</td>
                            <td>03 - Buliding</td>
                            <td>January</td>
                            <td class="text-center">12000 &nbsp; &nbsp; &nbsp; &nbsp; 12000</td>
                            <td class="text-center">0.0</td>
                            <td class="text-center">
                                <a href="" class="btn btn-default btn-xs" title="Payment is Paid"><i class="fa fa-check"></i></a> 
                                <a href="{{URL::to('info-owner-details')}}" class="btn btn-default btn-xs"><i class="fa fa-list-alt"></i> Details</a>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>04</td>
                            <td>04 - Buliding</td>
                            <td>January</td>
                            <td class="text-center">12000 &nbsp; &nbsp; &nbsp; &nbsp; 12000</td>
                            <td class="text-center">0.0</td>
                            <td class="text-center">
                                <a href="" class="btn btn-default btn-xs" title="Payment is Paid"><i class="fa fa-check"></i></a> 
                                <a href="{{URL::to('info-owner-details')}}" class="btn btn-default btn-xs"><i class="fa fa-list-alt"></i> Details</a>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>04</td>
                            <td>04 - Buliding</td>
                            <td>January</td>
                            <td class="text-center">12000 &nbsp; &nbsp; &nbsp; &nbsp; 12000</td>
                            <td class="text-center">0.0</td>
                            <td class="text-center">
                                <a href="" class="btn btn-default btn-xs" title="Payment is Paid"><i class="fa fa-check"></i></a> 
                                <a href="{{URL::to('info-owner-details')}}" class="btn btn-default btn-xs"><i class="fa fa-list-alt"></i> Details</a>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>06</td>
                            <td>06 - Buliding</td>
                            <td>January</td>
                            <td class="text-center">12000 &nbsp; &nbsp; &nbsp; &nbsp; 12000</td>
                            <td class="text-center">0.0</td>
                            <td class="text-center">
                                <a href="" class="btn btn-default btn-xs" title="Payment is Paid"><i class="fa fa-check"></i></a> 
                                <a href="{{URL::to('info-owner-details')}}" class="btn btn-default btn-xs"><i class="fa fa-list-alt"></i> Details</a>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>07</td>
                            <td>07 - Buliding</td>
                            <td>January</td>
                            <td class="text-center">12000 &nbsp; &nbsp; &nbsp; &nbsp; 12000</td>
                            <td class="text-center">0.0</td>
                            <td class="text-center">
                                <a href="" class="btn btn-default btn-xs" title="Payment is Paid"><i class="fa fa-check"></i></a> 
                                <a href="{{URL::to('info-owner-details')}}" class="btn btn-default btn-xs"><i class="fa fa-list-alt"></i> Details</a>
                            </td>
                        </tr>
                        <tr class="odd gradeX">
                            <td>08</td>
                            <td>08 - Buliding</td>
                            <td>January</td>
                            <td class="text-center">12000 &nbsp; &nbsp; &nbsp; &nbsp; 12000</td>
                            <td class="text-center">0.0</td>
                            <td class="text-center">
                                <a href="" class="btn btn-default btn-xs" title="Payment is Paid"><i class="fa fa-check"></i></a> 
                                <a href="{{URL::to('info-owner-details')}}" class="btn btn-default btn-xs"><i class="fa fa-list-alt"></i> Details</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- end panel -->
        </div>
    </div>
    <!-- end row -->
</div>
<!-- end section-container -->
@endsection
