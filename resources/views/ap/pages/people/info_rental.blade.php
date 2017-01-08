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
                    <th data-sorting="disabled">E-Mail Address</th>
                    <th data-sorting="disabled">Payment</th>
                    <th data-sorting="disabled">
                        Action &nbsp; &nbsp; &nbsp;
                        <a href="{{URL::to('info-regi')}}" class="btn btn-default btn-xs" title="Create New Account"><i class="fa fa-plus"></i> Add</a>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="odd gradeX">
                    <td>01</td>
                    <td>
                        <img src="{{URL::asset('ap/assets/img/user_profile.jpg')}}" class="img-h-w" alt="" />
                        &nbsp; &nbsp; <b>11-07-01</b>
                        &nbsp; &nbsp; Md Nasim
                    </td>
                    <td>01-Buliding, D-Unit</td>
                    <td>017778887777</td>
                    <td>infovirus@gmail.com</td>
                    <td><a href="" class="btn btn-default btn-xs">Paid</a> </td>
                    <td><a href="{{URL::to('info-owner-details')}}" class="btn btn-default btn-xs"><i class="fa fa-list-alt"></i> Details</a></td>
                </tr>
                <tr class="odd gradeX">
                    <td>02</td>
                    <td>
                        <img src="{{URL::asset('ap/assets/img/user_profile.jpg')}}" class="img-h-w" alt="" />
                        &nbsp; &nbsp; <b>11-07-01</b>
                        &nbsp; &nbsp; Md Nasim
                    </td>
                    <td>01-Buliding, D-Unit</td>
                    <td>017778887777</td>
                    <td>infovirus@gmail.com</td>
                    <td><a href="" class="btn btn-default btn-xs">Paid</a> </td>
                    <td><a href="{{URL::to('info-owner-details')}}" class="btn btn-default btn-xs"><i class="fa fa-list-alt"></i> Details</a></td>
                </tr>
                <tr class="odd gradeX">
                    <td>03</td>
                    <td>
                        <img src="{{URL::asset('ap/assets/img/user_profile.jpg')}}" class="img-h-w" alt="" />
                        &nbsp; &nbsp; <b>11-07-01</b>
                        &nbsp; &nbsp; Md Nasim
                    </td>
                    <td>01-Buliding, D-Unit</td>
                    <td>017778887777</td>
                    <td>infovirus@gmail.com</td>
                    <td><a href="" class="btn btn-default btn-xs">Paid</a> </td>
                    <td><a href="{{URL::to('info-owner-details')}}" class="btn btn-default btn-xs"><i class="fa fa-list-alt"></i> Details</a></td>
                </tr>
                <tr class="">
                    <td>04</td>
                    <td>
                        <img src="{{URL::asset('ap/assets/img/user_profile.jpg')}}" class="img-h-w" alt="" />
                        &nbsp; &nbsp; <b>11-07-01</b>
                        &nbsp; &nbsp; Md Nasim
                    </td>
                    <td>01-Buliding, D-Unit</td>
                    <td>017778887777</td>
                    <td>infovirus@gmail.com</td>
                    <td><a href="" class="btn btn-default btn-xs">Paid</a> </td>
                    <td><a href="{{URL::to('info-owner-details')}}" class="btn btn-default btn-xs"><i class="fa fa-list-alt"></i> Details</a></td>
                </tr>
                <tr class="">
                    <td>05</td>
                    <td>
                        <img src="{{URL::asset('ap/assets/img/user_profile.jpg')}}" class="img-h-w" alt="" />
                        &nbsp; &nbsp; <b>11-07-01</b>
                        &nbsp; &nbsp; Md Nasim
                    </td>
                    <td>01-Buliding, D-Unit</td>
                    <td>017778887777</td>
                    <td>infovirus@gmail.com</td>
                    <td><a href="" class="btn btn-default btn-xs">Paid</a> </td>
                    <td><a href="{{URL::to('info-owner-details')}}" class="btn btn-default btn-xs"><i class="fa fa-list-alt"></i> Details</a></td>
                </tr>
                <tr class="even gradeC">
                    <td><input type="checkbox" name="record[]" value="1" /></td>
                    <td>Trident</td>
                    <td>Internet Explorer 5.0</td>
                    <td>Win 95+</td>
                    <td>5</td>
                    <td>C</td>
                    <td><a href="#" class="btn btn-default btn-xs"><i class="fa fa-cog fa-fw"></i> Setting</a></td>
                </tr>
                <tr class="odd gradeA">
                    <td><input type="checkbox" name="record[]" value="1" /></td>
                    <td>Trident</td>
                    <td>Internet Explorer 5.5</td>
                    <td>Win 95+</td>
                    <td>5.5</td>
                    <td>A</td>
                    <td><a href="#" class="btn btn-default btn-xs"><i class="fa fa-cog fa-fw"></i> Setting</a></td>
                </tr>
                <tr class="odd gradeA">
                    <td><input type="checkbox" name="record[]" value="1" /></td>
                    <td>Trident</td>
                    <td>Internet Explorer 5.5</td>
                    <td>Win 95+</td>
                    <td>5.5</td>
                    <td>A</td>
                    <td><a href="#" class="btn btn-default btn-xs"><i class="fa fa-cog fa-fw"></i> Setting</a></td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- end panel -->
</div>
<!-- end section-container -->
@endsection