@section('broadcasting_content')
<!-- begin section-container -->
<div class="section-container">
    <!-- begin row -->
    <div class="row">
        <!-- begin col-12 -->
        <div class="col-md-10 col-md-offset-1">

            <!-- begin panel -->
            <div class="panel without-pagination clearfix m-b-0">
                <table id="data-table" data-order='[[1,"asc"]]' class="table table-bordered table-hover">
                    <thead>
                        <tr class="success">
                            <th data-sorting="disabled">SL</th>
                            <th class="text-center">Title Notice</th>
                            <th class="text-center">Notice Description</th>
                            <th>Notice Area</th>
                            <th data-sorting="disabled">
                                &nbsp; &nbsp;Action &nbsp; &nbsp; &nbsp;
                                <a href="{{URL::to('broadcasting-notice-add')}}" class="btn btn-default btn-xs"><i class="fa fa-plus"></i> Add</a>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($show_notice as $v) 
                        <tr class="odd gradeX">
                            <td>{{$v->notice_id}}</td>
                            <td>
                                <b>{{$v->notice_title}}</b></br>{{$v->notice_created}}
                            </td>
                            <td class="col-md-5">
                                <p class="text-justify text-success-light">{{$v->notice_description}}</p>
                            </td>
                            <td>{{$v->bld_name}}-bld: {{$v->bld_floor}}-floor: {{$v->bld_unit}}-unit, </td>
                            <td><a href="{{URL::to('')}}" class="btn btn-default btn-xs"><i class="fa fa-remove"></i> Delete</a></td>
                        </tr>
                        @endforeach()
                    </tbody>
                </table>
            </div>
            <!-- end panel -->

        </div>
        <!-- end col-12 -->
    </div>
    <!-- end row -->
</div>
<!-- end section-container -->
@endsection