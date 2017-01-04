@section('payment_content')
<!-- begin section-container -->
<div class="section-container">
    <!-- begin panel -->
    <div class="panel without-pagination clearfix m-b-0">
        <table id="data-table" data-order='[[1,"asc"]]' class="table table-bordered table-hover">
            <thead>
                <tr class="success">
                    <th data-sorting="disabled">SL</th>
                    <th>Picture &nbsp; Name</th>
                    <th>Building Info</th>
                    <th>Method &nbsp; - &nbsp; Month</th>
                    <th data-sorting="disabled" class="text-center">Payable &nbsp; &nbsp; - &nbsp; &nbsp; Reaceiable</th>
                    <th data-sorting="disabled" class="text-center">Dues</th>
                    <th data-sorting="disabled">
                        Status &nbsp; &nbsp; &nbsp;&nbsp;
                        <a href="{{URL::to('payment-hand-cash-add')}}" class="btn btn-default btn-xs"><i class="fa fa-plus"></i> Add</a>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="odd gradeX">
                    <td>01</td>
                    <td>
                        <img src="{{URL::asset('ap/assets/img/user_profile.jpg')}}" class="img-h-w" alt="" />
                        &nbsp; &nbsp; Arafat Shakil
                    </td>
                    <td>01-Buliding, D-Unit</td>
                    <td>
                        <a href="" class="btn btn-default btn-xs width-50">Cash</a>
                        &nbsp; August
                    </td>
                    <td class="text-center">12000 &nbsp; &nbsp; &nbsp; &nbsp; 12000</td>
                    <td class="text-center">0.0</td>
                    <td>
                        <a href="" class="btn btn-default btn-xs"><i class="fa fa-check"></i> &nbsp; Paid &nbsp;</a> 
                        <!-- <a href="{{URL::to('payment-hand-cash-edit')}}" class="btn btn-default btn-xs"><i class="fa fa-edit"></i> Edit</a> --> 
                        <a href="{{URL::to('info-owner-details')}}" class="btn btn-default btn-xs"><i class="fa fa-list-alt"></i> Details</a>
                    </td>
                </tr>
                <tr class="odd gradeX">
                    <td>02</td>
                    <td>
                        <img src="{{URL::asset('ap/assets/img/user_profile.jpg')}}" class="img-h-w" alt="" />
                        &nbsp; &nbsp; Bishwash Tarn Shafi
                    </td>
                    <td>01-Buliding, A-Unit</td>
                    <td>
                        <a href="" class="btn btn-default btn-xs width-50">bKash</a>
                        &nbsp; September
                    </td>
                    <td class="text-center">2000 &nbsp; &nbsp; &nbsp; &nbsp; 1000</td>
                    <td class="text-center">1000</td>
                    <td>
                        <a href="" class="btn btn-warning btn-xs"><i class="fa fa-remove"></i> UnPaid</a>
                        <a href="{{URL::to('info-owner-details')}}" class="btn btn-default btn-xs"><i class="fa fa-list-alt"></i> Details</a>
                    </td>
                </tr>
                <tr class="odd gradeX">
                    <td>03</td>
                    <td>
                        <img src="{{URL::asset('ap/assets/img/user_profile.jpg')}}" class="img-h-w" alt="" />
                        &nbsp; &nbsp; Hima Taran Yan
                    </td>
                    <td>01-Buliding, C-Unit</td>
                    <td>
                        <a href="" class="btn btn-default btn-xs width-50">Bank</a>
                        &nbsp; Octember
                    </td>
                    <td class="text-center">12000 &nbsp; &nbsp; &nbsp; &nbsp; 12000</td>
                    <td class="text-center">0.0</td>
                    <td>
                        <a href="" class="btn btn-default btn-xs"><i class="fa fa-check"></i> &nbsp; Paid &nbsp;</a> 
                        <a href="{{URL::to('info-owner-details')}}" class="btn btn-default btn-xs"><i class="fa fa-list-alt"></i> Details</a>
                    </td>
                </tr>
                <tr class="odd gradeX">
                    <td>04</td>
                    <td>
                        <img src="{{URL::asset('ap/assets/img/user_profile.jpg')}}" class="img-h-w" alt="" />
                        &nbsp; &nbsp; Md Nasim
                    </td>
                    <td>02-Buliding, A-Unit</td>
                    <td>
                        <a href="" class="btn btn-default btn-xs width-50">Cash</a>
                        &nbsp; August
                    </td>
                    <td class="text-center">12000 &nbsp; &nbsp; &nbsp; &nbsp; 12000</td>
                    <td class="text-center">0.0</td>
                    <td>
                        <a href="" class="btn btn-default btn-xs"><i class="fa fa-check"></i> &nbsp; Paid &nbsp;</a> 
                        <a href="{{URL::to('info-owner-details')}}" class="btn btn-default btn-xs"><i class="fa fa-list-alt"></i> Details</a>
                    </td>
                </tr>
                <tr class="odd gradeX">
                    <td>04</td>
                    <td>
                        <img src="{{URL::asset('ap/assets/img/user_profile.jpg')}}" class="img-h-w" alt="" />
                        &nbsp; &nbsp; Md Nasim
                    </td>
                    <td>01-Buliding, D-Unit</td>
                    <td>
                        <a href="" class="btn btn-default btn-xs width-50">Cash</a>
                        &nbsp; August
                    </td>
                    <td class="text-center">12000 &nbsp; &nbsp; &nbsp; &nbsp; 12000</td>
                    <td class="text-center">0.0</td>
                    <td>
                        <a href="" class="btn btn-default btn-xs"><i class="fa fa-check"></i> &nbsp; Paid &nbsp;</a> 
                        <a href="{{URL::to('info-owner-details')}}" class="btn btn-default btn-xs"><i class="fa fa-list-alt"></i> Details</a>
                    </td>
                </tr>
                <tr class="odd gradeX">
                    <td>04</td>
                    <td>
                        <img src="{{URL::asset('ap/assets/img/user_profile.jpg')}}" class="img-h-w" alt="" />
                        &nbsp; &nbsp; Md Nasim
                    </td>
                    <td>01-Buliding, D-Unit</td>
                    <td>
                        <a href="" class="btn btn-default btn-xs width-50">Cash</a>
                        &nbsp; August
                    </td>
                    <td class="text-center">12000 &nbsp; &nbsp; &nbsp; &nbsp; 12000</td>
                    <td class="text-center">0.0</td>
                    <td>
                        <a href="" class="btn btn-default btn-xs"><i class="fa fa-check"></i> &nbsp; Paid &nbsp;</a> 
                        <a href="{{URL::to('info-owner-details')}}" class="btn btn-default btn-xs"><i class="fa fa-list-alt"></i> Details</a>
                    </td>
                </tr>
                <tr class="odd gradeX">
                    <td>04</td>
                    <td>
                        <img src="{{URL::asset('ap/assets/img/user_profile.jpg')}}" class="img-h-w" alt="" />
                        &nbsp; &nbsp; Md Nasim
                    </td>
                    <td>01-Buliding, D-Unit</td>
                    <td>
                        <a href="" class="btn btn-default btn-xs width-50">Cash</a>
                        &nbsp; August
                    </td>
                    <td class="text-center">12000 &nbsp; &nbsp; &nbsp; &nbsp; 12000</td>
                    <td class="text-center">0.0</td>
                    <td>
                        <a href="" class="btn btn-default btn-xs"><i class="fa fa-check"></i> &nbsp; Paid &nbsp;</a> 
                        <a href="{{URL::to('info-owner-details')}}" class="btn btn-default btn-xs"><i class="fa fa-list-alt"></i> Details</a>
                    </td>
                </tr>
                <tr class="odd gradeX">
                    <td>04</td>
                    <td>
                        <img src="{{URL::asset('ap/assets/img/user_profile.jpg')}}" class="img-h-w" alt="" />
                        &nbsp; &nbsp; Md Nasim
                    </td>
                    <td>01-Buliding, D-Unit</td>
                    <td>
                        <a href="" class="btn btn-default btn-xs width-50">Cash</a>
                        &nbsp; August
                    </td>
                    <td class="text-center">12000 &nbsp; &nbsp; &nbsp; &nbsp; 12000</td>
                    <td class="text-center">0.0</td>
                    <td>
                        <a href="" class="btn btn-default btn-xs"><i class="fa fa-check"></i> &nbsp; Paid &nbsp;</a> 
                        <a href="{{URL::to('info-owner-details')}}" class="btn btn-default btn-xs"><i class="fa fa-list-alt"></i> Details</a>
                    </td>
                </tr>
                <tr class="odd gradeX">
                    <td>04</td>
                    <td>
                        <img src="{{URL::asset('ap/assets/img/user_profile.jpg')}}" class="img-h-w" alt="" />
                        &nbsp; &nbsp; Md Nasim
                    </td>
                    <td>01-Buliding, D-Unit</td>
                    <td>
                        <a href="" class="btn btn-default btn-xs width-50">Cash</a>
                        &nbsp; August
                    </td>
                    <td class="text-center">12000 &nbsp; &nbsp; &nbsp; &nbsp; 12000</td>
                    <td class="text-center">0.0</td>
                    <td>
                        <a href="" class="btn btn-default btn-xs"><i class="fa fa-check"></i> &nbsp; Paid &nbsp;</a> 
                        <a href="{{URL::to('info-owner-details')}}" class="btn btn-default btn-xs"><i class="fa fa-list-alt"></i> Details</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- end panel -->
</div>
<!-- end section-container -->
@endsection