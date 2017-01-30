@section('settings_content')
<!-- begin section-container -->
<div class="section-container">
    <!-- begin row -->
    <div class="row">
        <!-- begin col-12 -->
        <div class="col-md-12">
            <!-- begin panel -->
            <div class="panel panel-default">

                <div class="panel-heading">
                    <div class="btn-group pull-left">
                        <a href="{{URL::to('dboard')}}" class="btn btn-white btn-xs" title="Go To Dahsboard"><i class="fa fa-home"></i>&nbsp;</a>
                    </div>
                    <div class="btn-group pull-right">
                        <button type="button" class="btn btn-white btn-xs">Settings</button>
                        <button type="button" class="btn btn-white btn-xs dropdown-toggle" data-toggle="dropdown">
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{URL::to('make-service-bill')}}"><i class="fa fa-arrow-right"></i> Bill Generate</a></li>
                            <li><a href="{{URL::to('make-salary')}}"><i class="fa fa-arrow-right"></i> Employer Salary</a></li>
                            <li><a href="{{URL::to('bld-add')}}"><i class="fa fa-arrow-right"></i> Building</a></li>
                            <li><a href="{{URL::to('dboard')}}"><i class="fa fa-home"></i> Go Dashboard</a></li>
                            <li class="divider"></li>
                            <li><a href="{{URL::to('')}}"><i class="fa fa-power-off"></i> SignOut</a></li>
                        </ul>
                    </div> 
                    <div class="row">
                    </div>
                </div>
                <ul class="nav nav-tabs col-md-offset-1">
                    <li class="active"><a href="#default-tab-1" data-toggle="tab"><i class="fa fa-plus"></i> Add Building</a></li>
                    <li class=""><a href="#default-tab-2" data-toggle="tab"><i class="fa fa-save"> </i> Building</a></li>
                    <li class=""><a href="#default-tab-3" data-toggle="tab"><i class="fa fa-credit-card"></i> Empty</a></li>
                    <li class=""><a href="#default-tab-4" data-toggle="tab"><i class="fa fa-list"> </i> Empty</a></li>
                    <!--  <li class=""><a href="#default-tab-5" data-toggle="tab"><i class="fa fa-user"></i> Complain</a></li>
                    <li class=""><a href="#default-tab-6" data-toggle="tab"><i class="fa fa-user"></i> Salary Statement</a></li>-->
                </ul>
                <div class="tab-content m-b-0" style="overflow: scroll; overflow-x: hidden; overflow-y: auto; height: 440px;">
                    <div class="tab-pane fade active in" id="default-tab-1">
                        <!-- begin row -->
                        <div class="row">
                            <!-- begin Add_Salary -->
                            <div class="col-md-10 col-md-offset-1">
                                <span><p class=""></p></span>
                                <!-- begin panel -->
                                <div class="panel without-pagination clearfix m-b-0">
                                    <div class="form-group">
                                        <div class="col-sm-4">
                                            <strong class="text-success m-t-10">Create New Building, Floor, Unit</strong>
                                        </div>
                                        <div class="col-sm-8">
                                            @if(Session::get('bld_data') == '1')
                                            <span class="text-success-light">Data Inserted Successfully!!!</span>
                                            {{Session::put('bld_data', '')}}
                                            @elseif (Session::get('bld_data') == '0')
                                            <span class="text-danger">Data Not Inserted???</span>
                                            {{Session::put('bld_data', '')}}
                                            @elseif (Session::get('bld_data') == '11')
                                            <span class="text-danger">Data Already Inserted!!!</span>
                                            {{Session::put('bld_data', '')}}
                                            @else 
                                            <span class="text-remove-light"></span>
                                            @endif
                                        </div>
                                    </div>
                                    <table class="">
                                        {!! Form::open(array('url'=>'bld-save', 'role'=>'form', 'method'=>'POST')) !!}
                                        <!-- begin Building Place -->
                                        <div class="col-md-8 col-md-offset-1" style="margin-top: 30px; margin-bottom: 40px;">
                                            <div class="form-group">
                                                <label class="control-label col-sm-3 m-t-40">Building Place <span class="text-danger">*</span></label>
                                                <div class="col-sm-3"><h5 class="text-center text-success">Building</h5>
                                                    <select class="form-control" id="select-required" name="a" data-parsley-required="true">
                                                        <option>Building</option>
                                                        <option value="1">01</option>
                                                        <option value="2">02</option>
                                                        <option value="3">03</option>
                                                        <option value="4">04</option>
                                                        <option value="5">05</option>
                                                        <option value="6">06</option>
                                                        <option value="7">07</option>
                                                        <option value="8">08</option>
                                                        <option value="9">09</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                        <option value="13">13</option>
                                                        <option value="14">14</option>
                                                        <option value="15">15</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-3"><h5 class="text-center text-success">Floor</h5>
                                                    <select class="form-control" id="select-required" name="b" data-parsley-required="true">
                                                        <option>Floor</option>
                                                        <option value="1">01 Floor</option>
                                                        <option value="2">02 Floor</option>
                                                        <option value="3">03 Floor</option>
                                                        <option value="4">04 Floor</option>
                                                        <option value="5">05 Floor</option>
                                                        <option value="6">06 Floor</option>
                                                        <option value="7">07 Floor</option>
                                                        <option value="8">08 Floor</option>
                                                        <option value="9">09 Floor</option>
                                                        <option value="10">10 Floor</option>
                                                        <option value="11">11 Floor</option>
                                                        <option value="12">12 Floor</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-3"><h5 class="text-center text-success">Unit</h5>
                                                    <select class="form-control" id="select-required" name="c" data-parsley-required="true">
                                                        <option>Unit</option>
                                                        <option value="A">A</option>
                                                        <option value="B">B</option>
                                                        <option value="C">C</option>
                                                        <option value="D">D</option>
                                                        <option value="E">E</option>
                                                        <option value="F">F</option>
                                                        <option value="G">G</option>
                                                        <option value="H">H</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end Building Place -->

                                        <!-- begin submit button -->
                                        <div class="form-group">
                                            <label class="control-label col-sm-4"></label>
                                            <div class="col-sm-6 col-md-offset-1 m-b-40">
                                                <button type="submit" class="btn btn-success width-xs">Create</button>
                                            </div>
                                        </div>
                                        <!-- end submit button -->
                                        {!! Form::close() !!}
                                    </table>
                                </div>
                                <!-- end panel -->
                            </div>
                            <!-- end Add_Salary -->
                        </div>
                        <!-- end row-->
                    </div>

                    <div class="tab-pane fade" id="default-tab-2">
                        <!-- begin row -->
                        <div class="row">
                            <!-- begin View_Salary -->
                            <div class="col-md-10 col-md-offset-2">

                                <?php
                                $bld_no = Session::get('bld_no');
                                $off = 0;
                                $on = 1;
                                ?>

                                @for($n=1; $n<=$bld_no; $n++)
                                <div class="col-md-3 m-l-10 well">
                                    <div class="text-center text-success-light m-b-10"><b>{{$n}} &nbsp; &nbsp; Building</b></div>

                                    @for($m=1; $m<=Session::get($n-1); $m++)
                                    <div class="" style="border: 1px solid white; border-radius: 5px; padding: 5px">

                                        @foreach($bld_show as $v)
                                        @if($v->bld_name == $n && $v->bld_floor == $m)

                                        @if($v->bld_status == 1)
                                        <a href="{{URL::to('bld-status/'.$v->flat_info_id.'/'.$off)}}" class="btn btn-white btn-sm m-t-5" style="width: 92px" title="Already Booked"><small>{{$v->bld_floor}}</small> &nbsp; &nbsp; &nbsp;<b>{{$v->bld_unit}}</b> &nbsp; &nbsp; &nbsp;<i class="fa fa-check text-success-light"> </i></a>
                                        @else
                                        <a href="{{URL::to('bld-status/'.$v->flat_info_id.'/'.$on)}}" class="btn btn-white btn-sm m-t-5" style="width: 92px" title="This Unit Is Blank"><small>{{$v->bld_floor}}</small> &nbsp; &nbsp; &nbsp;<b>{{$v->bld_unit}}</b> &nbsp; &nbsp; &nbsp;<i class="fa fa-remove text-danger"> </i></a>
                                        @endif

                                        @endif
                                        @endforeach

                                    </div>
                                    @endfor

                                </div>
                                @endfor

                            </div>
                            <!-- end View_Salary -->
                        </div>
                        <!-- end row -->
                    </div>

                    <div class="tab-pane fade" id="default-tab-3">
                        <!-- begin row -->
                        <div class="row">
                            <!-- begin Add_Salary -->
                            <div class="col-md-10 col-md-offset-1">
                                <span><p class=""></p></span>
                                <!-- begin panel -->
                                <div class="panel without-pagination clearfix m-b-0">
                                    <div class="form-group">
                                        <div class="col-sm-4 m-b-10">
                                            <strong class="text-success m-t-10">Empty</strong>
                                        </div>
                                        <div class="col-sm-4 m-b-10 col-md-offset-4">
                                            <input class="form-control text-center" type="text" id="fullname" value="" placeholder=" Search here..." data-parsley-required="true" />
                                        </div>
                                    </div>
                                    <table class="table table-bordered table-hover" style="border:5px solid #EBECED !important">
                                        Empty
                                    </table>
                                </div>
                                <!-- end panel -->
                            </div>
                        </div>
                        <!-- end row -->
                    </div>

                    <div class="tab-pane fade" id="default-tab-4">
                        <!-- begin row -->
                        <div class="row">
                            <!-- begin Add_Salary -->
                            <div class="col-md-10 col-md-offset-1">
                                <span><p class=""></p></span>
                                <!-- begin panel -->
                                <div class="panel without-pagination clearfix m-b-0">
                                    <div class="form-group">
                                        <div class="col-sm-4 m-b-10">
                                            <strong class="text-success m-t-10">Empty</strong>
                                        </div>
                                        <div class="col-sm-4 m-b-10 col-md-offset-4">
                                            <input class="form-control text-center" type="text" id="fullname" value="" placeholder=" Search here..." data-parsley-required="true" />
                                        </div>
                                    </div>
                                    <table class="table table-bordered table-hover" style="border:5px solid #EBECED !important">
                                        Empty
                                    </table>
                                </div>
                                <!-- end panel -->
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                </div>

            </div>
            <!-- end panel -->
        </div>
        <!-- end col-6 -->

    </div>
    <!-- end row -->
</div>
<!-- end section-container -->
@endsection