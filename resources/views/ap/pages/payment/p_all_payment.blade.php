@section('payment_content')
    <!--start_row-->
    <div class="row">
        <!--start_col-md-12-->
        <div class="col-md-12">
            <!--start panel panel-white-->
            <div class="panel panel-white">
                
                <div class="panel-heading">
                    <div class="col-md-3 m-b-15">
                        <input class="form-control text-center" type="text" ng-model="search_rental" id="fullname" placeholder=" Search here..." data-parsley-required="true" />
                    </div>
                    <div class="col-md-5 col-md-offset-3"></div>
                    <div class="col-md-1">
                        <a href="{{URL::to('regi-rental')}}" class="btn btn-default btn-sm m-t-5" title="Registrationi Renal People"><i class="fa fa-plus text-success-light"> </i>&nbsp; Rental</a>
                    </div>
                </div>
        
                <table class="table table-hover table-bordered table-scroll" style="height: 418px!important; border-bottom:1px solid #EBECED !important;">
                    <thead>
                        <tr class="success">
                            <th>Picture &nbsp; Name</th>
                            <th>Building Info</th>
                            <th>Method &nbsp; - &nbsp; Month</th>
                            <th data-sorting="disabled" class="text-center">Payable - Reaceiable</th>
                            <th data-sorting="disabled" class="text-center">Dues</th>
                            <th data-sorting="disabled">
                                Status &nbsp; &nbsp; &nbsp;&nbsp;
                                <a href="{{URL::to('payment-hand-cash-add')}}" class="btn btn-default btn-xs"><i class="fa fa-plus"></i> Add</a>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
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
                        <tr>
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
                        <tr>
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
                        <tr>
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
                        <tr>
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
                        <tr>
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
                        <tr>
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
                        <tr>
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
            <!--end panel panel-white--> 
        </div>
        <!--end_col-md-12-->
    </div>
    <!--end_row-->
    
    
</div>
<!-- end section-container -->
@endsection