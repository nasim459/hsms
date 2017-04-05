@section('people_content')
<!-- begin section-container -->
<div class="section-container">
    <!--start_row-->
    <div class="row">
        <!--start_col-md-12-->
        <div class="col-md-12">
            <!--start panel panel-white-->
            <div class="panel panel-white">
                
                <div class="panel-heading">
                    <div class="col-md-3 m-b-15">
                        <input class="form-control text-center" type="text" ng-model="search_emp" id="fullname" placeholder=" Search here..." data-parsley-required="true" />
                    </div>
                    <div class="col-md-5 col-md-offset-3"></div>
                    <div class="col-md-1">
                        <a href="{{URL::to('regi-emp')}}" class="btn btn-default btn-sm m-t-5" title="Registrationi Renal People"><i class="fa fa-plus text-success-light"> </i>&nbsp; Employer</a>
                    </div>
                </div>
                
                <table class="table table-hover table-bordered table-scroll" style="height: 418px!important; border-bottom:1px solid #EBECED !important;">
                    <thead>
                        <tr class="success">
                            <th>Picture &nbsp; &nbsp;  ID</th>
                            <th><span class="m-l-20">Name </span></th>
                            <th class="text-center">Position</th>
                            <th>Mobile Number</th>
                            <th>E-Mail Address</th>
                            <th>PaymentStatus</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr ng-repeat="v in emp_show | filter:search_emp">
                            <td>
                                <a ng-if="v.emp_image != NULL" href="#rental-picture-show" data-toggle="modal" ng-click="rental_picture_show(v.emp_id)" title="Click To See Picture"><img src="@{{v.emp_image}}" class="img-h-w" alt="" /></a>
                                <img ng-if="v.emp_image == NULL" src="ap/assets/img_blank/img_blank.jpg" title="Blank Picture. Please, Give Your Picture" class="img-h-w" alt="" />
                                
                                <b title="ID: @{{v.emp_id_no}}">@{{v.emp_id_no}}</b>
                            </td>
                            
                            <td>@{{v.emp_name}}</td>
                            <td class="text-center"><b>@{{v.emp_position}}</b></td>
                            <td>@{{v.emp_phone1}}</td>
                            <td>@{{v.emp_email}}</td>
                            <td class="text-center">
                                <a href="" class="btn btn-default btn-xs">Paid</a>
                            </td>
                            <td class="text-center">
                                <a href="info-emp-details/@{{v.emp_details_id}}" class="btn btn-default btn-xs"><i class="fa fa-list-alt"></i> Details</a>
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