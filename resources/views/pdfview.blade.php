
<div class="row">
    <!-- begin Add_Salary -->
    <div class="col-md-10 col-md-offset-1">
        <span><p class=""></p></span>
        @if(!$items->isEmpty())
        <!-- begin panel -->
        <div class="panel without-pagination clearfix m-b-0">
            <div class="form-group">
                <div class="col-sm-4">
                    <strong class="text-success m-t-10">All Invoice</strong>
                </div>
                <div class="col-sm-4 m-b-10 col-md-offset-4">
                    <input class="form-control text-center" type="text" id="fullname" value="" placeholder=" Search here..." data-parsley-required="true" />
                </div>
            </div>

            <table class="table table-bordered table-hover" style="border:5px solid #EBECED !important">
                <thead>
                    <tr class="default">
                        <th class="text-center"><b>Invoice No</b></th>
                        <th class="text-center"><b>Building - Floor - Unit</b></th>
                        <th class="text-center"><b>Month</b></th>
                        <th class="text-center"><b>Amount</b></th>
                        <th class="text-center"><b>Created</b></th>
                        <th class="text-center"><b>Payment Action</b></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $number = 0;
                    $off = 0;
                    $on = 1; ?>
                    @foreach($items as $v) 
                    <tr>
                        <td class="text-center"><span class="text-success"><b class="btn btn-default btn-xs">#{{$v -> invoice_id}}</b></span></td>
                        <td class="text-center" title="{{$v -> rental_name}}">{{$v -> bld_name}} - {{$v -> bld_floor}} - {{$v -> bld_unit}}</td>
                        <td>
                            <b>
                                {{$v -> invoice_year}} - 
                                @if($v->invoice_month == 1)
                                January
                                @elseif($v->invoice_month == 2)
                                February
                                @elseif($v->invoice_month == 3)
                                March
                                @elseif($v->invoice_month == 4)
                                April
                                @elseif($v->invoice_month == 5)
                                May
                                @elseif($v->invoice_month == 6)
                                June
                                @elseif($v->invoice_month == 7)
                                July
                                @elseif($v->invoice_month == 8)
                                August
                                @elseif($v->invoice_month == 9)
                                September
                                @elseif($v->invoice_month == 10)
                                October
                                @elseif($v->invoice_month == 11)
                                November
                                @elseif($v->invoice_month == 12)
                                December
                                @endif
                            </b>
                        </td>
                        <td class="text-center">{{$v -> invoice_amount_total}}</td>
                        <td class="text-center">{{$v -> created_at}}</td>
                        <td class="text-center">
                            &nbsp; &nbsp;<a href="{{ route('pdfview',['download'=>'pdf']) }}">Download PDF</a> &nbsp;
                        </td>
                    </tr>
                    @endforeach()
                </tbody>
            </table>
        </div>
        <!-- end panel -->
        @else
        <h2 class="text-center text-danger m-t-20"><b>Now, Invoice Is Empty!!!</b></h2>
        <h4 class="text-center text-success m-t-20"><b>Create Service Bill To See Invoice...</b></h4>
        @endif
    </div>
    <!-- end Add_Salary -->
</div>
