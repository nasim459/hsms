@section('people_content')
<!-- begin section-container -->
<div class="section-container">
    <!-- begin panel -->
    <div class="panel without-pagination clearfix m-b-0">
        <table id="data-table" class="table table-bordered table-hover">
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
                <?php $number = 0; ?>
                @foreach($rental_show as $v) 
                <tr>
                    <td>
                        <img src="{{URL::asset('ap/assets/img/user_profile.jpg')}}" class="img-h-w" alt="" />
                        <b>11-11-11666</b>
                    </td>
                    <td>{{$v->rental_name}}</td>
                    <td class="text-center"><b>{{$v->bld_name}} - {{$v->bld_floor}} - {{$v->bld_unit}}</b></td>
                    <td>{{$v->rental_phone_1}}</td>
                    <td>{{$v->rental_email}}</td>
                    <td class="text-center"><a href="" class="btn btn-default btn-xs">Paid</a> </td>
                    <td><a href="{{URL::to('info-owner-details/'.$v->rental_details_id)}}" class="btn btn-default btn-xs"><i class="fa fa-list-alt"></i> Details</a></td>
                </tr>
                @endforeach()
            </tbody>
        </table>
    </div>
    <!-- end panel -->
</div>
<!-- end section-container -->
@endsection