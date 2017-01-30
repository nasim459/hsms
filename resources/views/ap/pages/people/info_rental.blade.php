@section('people_content')
<!-- begin section-container -->
<div class="section-container" ng-controller="people">
    <!-- begin panel -->
    <div class="panel without-pagination clearfix m-b-0">
        <table id="data-table" class="table table-bordered table-hover">
            @{{data.off}}
            <thead>
                <tr class="success">
                    <th>Picture &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ID</th>
                    <th><span class="m-l-20">Name  &nbsp; &nbsp;</span></th>
                    <th>Building - Floor - Unit</th>
                    <th>Mobile Number</th>
                    <th>E-Mail Address</th>
                    <th>Payment</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $number = 0; $off = 0; $on = 1; ?>
                @foreach($rental_show as $v) 
                <tr>
                    <td>
                        <img src="{{URL::asset('ap/assets/img/user_profile.jpg')}}" class="img-h-w" alt="" />
                        <b title="ID: {{$v->rental_id_no}}">{{$v->rental_id_no}}</b>
                    </td>
                    <td>{{$v->rental_name}}</td>
                    <td class="text-center"><b>{{$v->bld_name}} - {{$v->bld_floor}} - {{$v->bld_unit}}</b></td>
                    <td>{{$v->rental_phone_1}}</td>
                    <td>{{$v->rental_email}}</td>
                    <td class="text-center"><a href="" class="btn btn-default btn-xs"> &nbsp; Paid &nbsp;</a> </td>
                    <td ng-init="data.status[{{$v->rental_id}}]={{$v->person_status}}">
                        
                        <a href="{{URL::to('info-rental-details/'.$v->rental_details_id)}}" class="btn btn-default btn-xs" title="See Details Information"><i class="fa fa-list-alt"></i> Details</a>&nbsp;
                        
                        
                        <a class="btn btn-default btn-xs"  ng-click="rentalStatus({{$v->rental_id}},data.status[{{$v->rental_id}}])" >
                            <i class="fa fa-check text-success-light" ng-if="data.status[{{$v->rental_id}}]==1" title="Active Profile"></i>
                            <i class="fa fa-remove" ng-if="data.status[{{$v->rental_id}}]==0" title="Stop Profile"></i>
                        </a>
                        
                    </td>
                </tr>
                @endforeach()
            </tbody>
        </table>
    </div>
    <!-- end panel -->
</div>
<!-- end section-container -->
@endsection