@section('inventory_content')
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
                    <h4 class="panel-title text-center">
                        <a href="{{URL::to('inventory-utilities')}}" class="btn btn-white btn-xs" title="Go Back">&nbsp;<i class="fa fa-arrow-left"></i>&nbsp;</a>  
                        <b>&nbsp; Edit Your Utilities Bills</b>
                    </h4>
                </div>
                <div class="panel-body">
                    <h5 class="m-t-0"></h5>
                    <p class="m-b-15"></p>
                    <form class="form-horizontal" data-parsley-validate="true" name="demo-form">
                        <div class="form-group">
                            <label class="control-label col-sm-3"><span class="text-danger"></span></label>
                            <div class="col-sm-6">
                                <h4 class="">Edit Utilities bill, what you are spend.</h4>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3"> Area <span class="text-danger">*</span></label>
                            <div class="col-sm-3">
                                <select class="form-control" id="select-required" name="selectBox" data-parsley-required="true">
                                    <option value="">Choose Building</option>
                                    <option value="1"> 01 Building</option>
                                    <option value="2"> 02 Building</option>
                                    <option value="3"> 03 Building</option>
                                    <option value="4"> 04 Building</option>
                                    <option value="5"> 05 Building</option>
                                    <option value="6"> 06 Building</option>
                                </select>
                            </div>
                            <div class="col-sm-3">
                                <select class="form-control" id="select-required" name="selectBox" data-parsley-required="true">
                                    <option value="">Choose Unit</option>
                                    <option value="A-Unit"> A-Unit</option>
                                    <option value="B-Unit"> B-Unit</option>
                                    <option value="C-Unit"> C-Unit</option>
                                    <option value="D-Unit"> D-Unit</option>
                                    <option value="E-Unit"> E-Unit</option>
                                    <option value="F-Unit"> F-Unit</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3">Amount <span class="text-danger">*</span></label>
                            <div class="col-sm-3">
                                <input class="form-control text-center" type="text" id="fullname" name="fullname" placeholder="00.00" data-parsley-required="true" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="message"> Description <span class="text-danger">*</span></label>
                            <div class="col-sm-6">
                                <textarea class="form-control" id="message" name="message" rows="4"  value="foo" data-parsley-required="true" placeholder="Write your expenditure ..."></textarea>
                            </div>
                        </div>
                        <div class="form-group m-b-0">
                            <label class="control-label col-sm-3"></label>
                            <div class="col-sm-6">
                                <button type="submit" class="btn btn-success width-xs">Update</button>
                                <a href="" class="btn btn-default width-xs">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- end panel -->
        </div>
    </div>
    <!-- end row -->
</div>
<!-- end section-container -->
@endsection