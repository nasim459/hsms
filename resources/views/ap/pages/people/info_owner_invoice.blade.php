@extends('master_ap')
@section('maincontent')

<!-- begin invoice -->
<div class="invoice">
    <span class="pull-right hidden-print">
        <a href="{{URL::to('info-owner-details')}}" class="btn btn-sm width-100 btn-rounded btn-default"><i class="fa fa-arrow-left m-r-3"></i> Back</a>
        <a href="javascript:;" onclick="window.print()" class="btn btn-sm width-100 btn-rounded btn-danger"><i class="fa fa-print m-r-3"></i> Print</a>
    </span>
    <!-- begin invoice-title -->
    <h4 class="invoice-title">
        <i class="fa fa-file-text text-muted"></i> Invoice
    </h4>
    <!-- end invoice-title -->
    <!-- begin invoice-header -->
    <div class="invoice-header">
        <!-- begin row -->
        <div class="row">
            <!-- begin col-3 -->
            <div class="col-md-3">
                <span class="text-muted">Bill from:</span><br />
                <address class="m-t-5">
                    <strong>Nasim Real Estate Company</strong><br />
                    Subahanbagh, Dhanmondi, Dhaka<br />
                    Mirpur Road, Dhaka-1207<br />
                    realestatecompany@hsms.com<br />
                    Phone: (+88) 01777888757
                </address>
            </div>
            <!-- end col-3 -->
            <!-- begin col-3 -->
            <div class="col-md-3">
                <span class="text-muted">Bill to:</span><br />
                <address class="m-t-5">
                    <strong>Tihan youm ya</strong><br />
                    ID: 01-07-01<br />
                    01 Building, D Unit<br />
                    Sukrabad, Dhanmondi, Dhaka<br />
                    Phone: 017555888999
                </address>
            </div>
            <!-- end col-3 -->
            <!-- begin col-6 -->
            <div class="col-md-6">
                <div class="hidden-xs">&nbsp;<br /></div>
                <div class="m-t-5">
                    <dl class="dl-horizontal">
                        <dt>Invoice Number:</dt>
                        <dd>#0000123DSS</dd>

                        <dt>Issue Date:</dt>
                        <dd>August 3,2012</dd>

                        <dt>Payment Terms:</dt>
                        <dd>Net 50</dd>

                        <dt>Billing ID:</dt>
                        <dd>0000-0000-0000-0000</dd>
                    </dl>
                </div>
            </div>
            <!-- end col-6 -->
        </div>  
        <!-- end row -->
    </div>
    <!-- end invoice-header -->
    <!-- begin invoice-table -->
    <div class="m-b-10"><b>Invoice Summary</b></div>
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>TASK DESCRIPTION</th>
                    <th class="text-center col-md-2 nowrap">UNIT COST</th>
                    <th class="text-center col-md-1">QTY</th>
                    <th class="text-center col-md-1">AMOUNT</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Website design & development</td>
                    <td class="text-center">$2,000.00</td>
                    <td class="text-center">1</td>
                    <td class="text-right">$2,000.00</td>
                </tr>
                <tr>
                    <td>Product Repackaging</td>
                    <td class="text-center">$6,000.00</td>
                    <td class="text-center">1</td>
                    <td class="text-right">$6,000.00</td>
                </tr>
                <tr>
                    <td>Server & Domain Fee</td>
                    <td class="text-center">$1,000.00</td>
                    <td class="text-center">1</td>
                    <td class="text-right">$1,000.00</td>
                </tr>
                <tr class="subtotal">
                    <td></td>
                    <td colspan="2" class="text-right text">Subtotal:</td>
                    <td class="text-right value"><b>$9,000.00</b></td>
                </tr>
                <tr class="tax">
                    <td></td>
                    <td colspan="2" class="text-right text">Tax (0%):</td>
                    <td class="text-right value"><b>$0.00</b></td>
                </tr>
                <tr class="total">
                    <td></td>
                    <td colspan="2" class="text-right text">Amount in USD:</td>
                    <td class="text-right value"><b>$9,000.00</b></td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- end invoice-table -->
    <!-- begin invoice-note -->
    <div class="invoice-note">
        * Payment is due within 30 days<br>
        * If you have any questions concerning this invoice, contact  [Name, Phone Number, Email]
    </div>
    <!-- end invoice-note -->
    <!-- begin invoice-footer -->
    <div class="invoice-footer text-muted">
        <p class="text-center">
            Housing Society Management System
        </p>
    </div>
    <!-- end invoice-footer -->
</div>
<!-- end invoice -->
@endsection