@section('people_content')
<!-- begin section-container -->
<div class="section-container">
    <!-- begin panel -->
    <div class="panel without-pagination clearfix m-b-0">
        <table id="data-table" class="table table-bordered table-hover">
            <thead>
                <tr class="success">
                    <th>Picture &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ID</th>
                    <th><span class="m-l-20">Name  &nbsp; &nbsp;</span></th>
                    <th>Position</th>
                    <th>Mobile Number</th>
                    <th>E-Mail Address</th>
                    <th>Payment</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $number = 0; ?>
                @foreach($emp_show as $v) 
                <tr>
                    <td>
                        <img src="{{URL::asset('ap/assets/img/user_profile.jpg')}}" class="img-h-w" alt="" />
                        <b>&nbsp;{{$v->emp_id_no}}</b>
                    </td>
                    <td>{{$v->emp_name}}</td>
                    <td class="text-center"><b>{{$v->emp_position}}</b></td>
                    <td>{{$v->emp_phone1}}</td>
                    <td>{{$v->emp_email}}</td>
                    <td class="text-center"><a href="" class="btn btn-default btn-xs">Paid</a> </td>
                    <td><a href="{{URL::to('info-emp-details/'.$v->emp_details_id)}}" class="btn btn-default btn-xs"><i class="fa fa-list-alt"></i> Details</a></td>
                </tr>
                @endforeach()
            </tbody>
        </table>
    </div>
    <!-- end panel -->
</div>
<!-- end section-container -->
@endsection