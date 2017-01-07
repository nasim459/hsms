@section('settings_content')
<!-- begin section-container -->
<div class="section-container">
    <!-- begin row -->
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <!-- begin panel -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-inverse" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-inverse" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-inverse" data-click="panel-remove"><i class="fa fa-times"></i></a>
                    </div>
                    <div class="">
                        <a href="{{URL::to('make-salary')}}" class="btn btn-white btn-xs" title="Bake To Make Salary"><i class="fa fa-arrow-left"></i></a> 
                    
                    </div>
                    
                </div>
                <div class="panel-body">
                    <!-- begin row panel body --->
                    <div class="row well">

                        <!-- begin section-container -->
                        <div class="section-container">
                            {!! Form::open(array('url'=>'salary-due', 'role'=>'form', 'method'=>'POST')) !!}
                            <span class="form-horizontal" data-parsley-validate="true" name="demo-form">
                                @foreach($give_salary as $v)
                                <div class="col-md-12 m-t-10">
                                    <h4 class="text-center text-success"><strong>Give Employer Salary - How Much You Will Pay</strong></h4>
                                    &nbsp;<hr class="hr-d m-b-30">&nbsp;
                                    <!-- start Personal Information -->
                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="form-group m-t-10">
                                            <label class="control-label col-sm-4" for="fullname"><b>Pay Month</b></label>
                                            <div class="col-sm-4">
                                                <p class="form-control text-center">
                                                    @if($v->pay_month == 1)
                                                    January
                                                    @elseif($v->pay_month == 2)
                                                    February
                                                    @elseif($v->pay_month == 3)
                                                    March
                                                    @elseif($v->pay_month == 4)
                                                    April
                                                    @elseif($v->pay_month == 2)
                                                    May
                                                    @elseif($v->pay_month == 2)
                                                    June
                                                    @elseif($v->pay_month == 2)
                                                    July
                                                    @elseif($v->pay_month == 2)
                                                    August
                                                    @elseif($v->pay_month == 2)
                                                    September
                                                    @elseif($v->pay_month == 2)
                                                    October
                                                    @elseif($v->pay_month == 2)
                                                    November
                                                    @elseif($v->pay_month == 2)
                                                    December
                                                    @endif
                                                     - {{$v->pay_year}}
                                                </p>
                                                <input type="hidden" id="fullname" name="month" value="{{$v->pay_month}}" />
                                                <input type="hidden" id="fullname" name="year" value="{{$v->pay_year}}" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="fullname"><b>Total Salary </b></label>
                                            <div class="col-sm-4">
                                                <p class="form-control text-center">{{$v->total_amount}}</p>
                                                
                                                <input type="hidden" id="fullname" name="total_amount" value="{{$v->total_amount}}" />
                                                <input type="hidden" id="fullname" name="emp_invoice_id" value="{{$v->emp_invoice_id}}" />
                                                <input type="hidden" id="fullname" name="emp_salary_id" value="{{$v->emp_salary_id}}" />
                                                <input type="hidden" id="fullname" name="emp_id" value="{{$v->emp_id}}" />
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-4" for="fullname"><b>Give Salary</b></span></label>
                                            <div class="col-sm-4">
                                                <input class="form-control" type="text" id="fullname" name="give_salary" placeholder=" 00.00" />
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <!-- end Personal Information -->
                                </div>
                                @endforeach()
                                
                                <!-- begin submit button -->
                                <div class="form-group">
                                    <label class="control-label col-sm-4 col-md-offset-2"></label>
                                    <div class="col-sm-5 m-t-20">
                                        <button type="submit" class="btn btn-success width-xs">Submit</button>
                                    </div>
                                </div>
                                <!-- end submit button -->

                            </span>
                            {!! Form::close() !!}
                        </div>
                        <!-- end section-container -->    

                    </div>

                </div>
            </div>
            <!-- end panel -->
        </div>
    </div>
    <!-- end row -->

</div>
<!-- end section-container -->
@endsection