@section('broadcasting_content')
<!-- begin section-container -->
<div class="section-container" ng-controller="noticeBoard">

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
                        <b><i class="fa fa-plus"></i> Create Your Notice @{{msg}}</b>
                    </h4>
                </div>
                <div class="panel-body">
                    <h5 class="m-t-0"></h5>
                    <p class="m-b-15" id="message"> </p>
                    
                    {!! Form::open(array('url'=>'broadcasting-notice-save', 'role'=>'form', 'method'=>'POST')) !!}
                    <span class="form-horizontal" data-parsley-validate="true" name="demo-form">
                        <!--<div class="form-group">
                            <label class="control-label col-sm-3">Notice Area <span class="text-danger">*</span></label>
                            <div class="col-sm-2">
                                <select class="form-control" id="select-required" name="selectBox" data-parsley-required="true">
                                    <option value="">Building</option>
                                    <option value="1"> 01 </option>
                                    <option value="2"> 02 </option>
                                </select>
                            </div>
                            <div class="col-sm-2">
                                <select class="form-control" id="select-required" name="selectBox" data-parsley-required="true">
                                    <option> Floor</option>
                                    <option value="1"> 01 </option>
                                    <option value="2"> 02 </option>
                                </select>
                            </div>
                            <div class="col-sm-2">
                                <select class="form-control" id="select-required" name="selectBox" data-parsley-required="true">
                                    <option> Unit </option>
                                    <option value="A-Unit"> A-Unit</option>
                                    <option value="B-Unit"> B-Unit</option>
                                </select>
                            </div>
                        </div>-->
                        <div class="form-group">
                            <label class="control-label col-sm-3">Title Notice<span class="text-danger">*</span></label>
                            <div class="col-sm-3">
                                <input class="form-control" type="text"  name="a" ng-model="title" placeholder="Write Title" required="" data-parsley-required="true" />
                                <input class="form-control" type="hidden"  name="_token"  value="{{csrf_token()}}" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3">Notice Area<span class="text-danger">*</span></label>
                            <div class="col-sm-5">
                                <textarea class="form-control"  name="b" ng-model="area_description" rows="2" value="foo" required="" data-parsley-required="true" placeholder="Write your notice ..."></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="message">Description Notice<span class="text-danger">*</span></label>
                            <div class="col-sm-6">
                                <textarea class="form-control" name="c" ng-model="description" rows="5" value="foo" required="" data-parsley-required="true" placeholder="Write your notice ..."></textarea>
                            </div>
                        </div><p id="nas_rough"></p>
                        <div class="form-group m-b-0">
                            <label class="control-label col-sm-3"></label>
                            <div class="col-sm-6">
                                <button type="submit" class="btn btn-success width-xs">Send</button>
                                <a href="" class="btn btn-default width-xs">Cancel</a>
                            </div>
                        </div>
                    </span>
                    {!! Form::close() !!}

                </div>
            </div>
            <!-- end panel -->
        </div>
    </div>
    <!-- end row -->

</div>
<!-- end section-container -->
@endsection