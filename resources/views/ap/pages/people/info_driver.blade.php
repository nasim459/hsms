@section('people_content')
<!-- begin section-container -->
<div class="section-container">
    <!-- begin panel -->
    <div class="panel without-pagination clearfix m-b-0">
        <table id="data-table" data-order='[[1,"asc"]]' class="table table-bordered table-hover">
            <thead>
                <tr class="success">
                    <th data-sorting="disabled">SL</th>
                    <th>Picture &nbsp; &nbsp; &nbsp; ID &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  Name</th>
                    <th>Building Info</th>
                    <th>Mobile Number</th>
                    <th data-sorting="disabled">Payment</th>
                    <th>Action</th>
                    <th data-sorting="disabled">
                        Action &nbsp; &nbsp; &nbsp;
                        <a href="{{URL::to('info-driver')}}" class="btn btn-default btn-xs" title="Create New Account"><i class="fa fa-plus"></i> Add</a>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php $number=0; ?>
                @foreach($driver_show as $d)
                <tr class="odd gradeX">
                    <td>01</td>
                    <td>
                        <img src="{{URL::asset('ap/assets/img/user_profile.jpg')}}" class="img-h-w" alt="" />
                        &nbsp; &nbsp; <b>{{$d->driver_id}}</b>
                        &nbsp; &nbsp; {{$d->driver_name}}
                    </td>
                    <td>01-Buliding, D-Unit</td>
                    <td>{{$d->driver_phone1}}</td>
                    
                    <td><a href="" class="btn btn-default btn-xs">Paid</a> </td>
                    <td><a href="{{URL::to('info-driver-details/'.$d->driver_details_id)}}" class="btn btn-default btn-xs"><i class="fa fa-list-alt"></i> Details</a></td>
                            <td><a href="" class="btn btn-default btn-xs"><i class="fa fa-list-alt"></i> Details</a></td>
                </tr>
              @endforeach()
            </tbody> 
        </table>
    </div>
    <!-- end panel -->
</div>
<!-- end section-container -->
@endsection