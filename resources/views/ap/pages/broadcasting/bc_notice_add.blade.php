@section('broadcasting_content')
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
                        <b><i class="fa fa-plus"></i> Create Your Notice</b>
                    </h4>
                </div>
                <div class="panel-body">
                    <h5 class="m-t-0"></h5>
                    <p class="m-b-15"></p>
                    <form class="form-horizontal" data-parsley-validate="true" name="demo-form">

                        <div class="form-group">
                            <label class="control-label col-sm-3">Title Notice<span class="text-danger">*</span></label>
                            <div class="col-sm-3">
                                <input class="form-control" type="text" id="fullname" name="fullname" placeholder="Required" data-parsley-required="true" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="message">Description Notice<span class="text-danger">*</span></label>
                            <div class="col-sm-6">
                                <textarea class="form-control" id="message" name="message" rows="4"  value="foo" data-parsley-required="true" placeholder="Write your notice ..."></textarea>
                            </div>
                        </div>
                        <div class="form-group m-b-0">
                            <label class="control-label col-sm-3"></label>
                            <div class="col-sm-6">
                                <button type="submit" class="btn btn-success width-xs">Send</button>
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