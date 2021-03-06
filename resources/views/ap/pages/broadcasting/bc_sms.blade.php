@section('broadcasting_content')
<!-- begin section-container -->
<div class="section-container" ng-controller="NoticeController">
    <!-- begin row -->
    <div class="row">
        <!--start_col-md-12-->
        <div class="col-md-12">
            <!--start panel panel-white-->
            <div class="panel panel-white">
                
                <div class="panel-heading">
                    <div class="col-md-3 m-t-5 m-b-20">
                        <!--<input class="form-control text-center" type="text" ng-model="search_rental" id="fullname" placeholder=" Search here..." data-parsley-required="true" />-->
                        <b>SMS</b>
                    </div>
                    <div class="col-md-7 col-md-offset-1">
                        <h5 class="text-success-light">
                            <b>{{Session::get('sms_send')}}{{Session::put('sms_send', '')}}</b>
                        </h5>
                    </div>
                    <div class="col-md-1">
                        <a href="#send-broadcasting-sms" data-toggle="modal" class="btn btn-default btn-sm" title="SMS Send"><i class="fa fa-send text-success-light"> </i> Send SMS</a>
                    </div>
                </div>
                
                <table class="table table-bordered table-scroll" style="height: 485px!important; border-bottom:1px solid #EBECED !important;">
                    <thead>
                        <tr class="success">
                            <th class="col-md-3 text-center"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Number</th>
                            <th class="col-md-6 text-center">SMS Description</th>
                            <th class="col-md-3">Notice Area</th>
                        </tr>
                    </thead>
                    <tbody style="height: 400px!important">
                        @php
                        $off = 0;
                        $on = 1;
                        @endphp
                        
                        @foreach($show_sms as $v) 
                        <tr>
                            <td class="col-md-3 text-center">
                                <a class="btn btn-default btn-xs">{{$v->sms_id}}</a>
                            </td>
                            <td class="col-md-6">
                                <p class="text-justify f-s-15 text-success-light"><b>{{$v->sms_description}}</b></p>
                            </td>
                            <td class="col-md-3"><b>{{$v->sms_area}}</b></td>
                        </tr>
                        @endforeach()
                    </tbody>
                </table>
                
            </div>
            <!--end panel panel-white--> 
        </div>
        <!--end_col-md-12-->
    </div>
    <!-- end row -->
    
    <!--start modal-->
    <div class="col-md-6">
        <!--start show_rental_people_picture-->
        <div class="clearfix m-b-25">
            
            <!--start send-broadcasting-sms-->
            <div class="modal fade" id="send-broadcasting-sms">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title text-center">Write Your SMS To Send</h4>
                        </div>
                        <div class="modal-body">
                            <!-- begin row panel body --->
                            <div class="row well">
                                <!-- begin section-container -->
                                <div class="section-container">
                                    <span class="form-horizontal" data-parsley-validate="true" name="demo-form">
                                        <div class="col-md-12 m-t-15">
                                            <!--start service_person_Picture-->
                                            <div class="col-md-12">
                                                {!! Form::open(array('url'=>'broadcasting-sms-send', 'role'=>'form', 'method'=>'POST')) !!}
                                                <span class="form-horizontal" data-parsley-validate="true" name="demo-form">
                                                    <div class="form-group">
                                                        <label class="control-label col-sm-3">SMS Area<span class="text-danger">*</span></label>
                                                        <div class="col-sm-8">
                                                            <textarea class="form-control"  name="sms_area" ng-model="area_description" rows="2" value="foo" required="" data-parsley-required="true" placeholder="Give your phone number ..."></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-sm-3" for="message">Description<span class="text-danger">*</span></label>
                                                        <div class="col-sm-9">
                                                            <textarea class="form-control" name="sms_desc" ng-model="description" rows="5" value="foo" required="" data-parsley-required="true" placeholder="Write your message ..."></textarea>
                                                        </div>
                                                    </div><p id="nas_rough"></p>
                                                    <div class="form-group m-b-0">
                                                        <label class="control-label col-sm-3"></label>
                                                        <div class="col-sm-6">
                                                            <button type="submit" class="btn btn-success width-xs">Send</button>
                                                        </div>
                                                    </div>
                                                </span>
                                                {!! Form::close() !!}
                                            </div>
                                            <!--ends ervice_person_Picture-->
                                        </div>
                                    </span>
                                </div>
                                <!-- end section-container -->    
                            </div>
                            <!-- end row panel body --->
                        </div>
                    </div>
                </div>
            </div>
            <!--end send-broadcasting-sms-->
            
            <!--start edit-broadcasting-notice-->
            <div class="modal fade" id="edit-broadcasting-notice">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title text-center">Edit Notice</h4>
                        </div>
                        <div class="modal-body">
                            <!-- begin row panel body --->
                            <div class="row well">
                                <!-- begin section-container -->
                                <div class="section-container">
                                    <span class="form-horizontal" data-parsley-validate="true" name="demo-form">
                                        <div class="col-md-12 m-t-15">
                                            <!--start service_person_Picture-->
                                            <div class="col-md-12">
                                                {!! Form::open(array('url'=>'broadcasting-notice-update', 'role'=>'form', 'method'=>'POST')) !!}
                                                <span ng-repeat="v in edit_notices" class="form-horizontal" data-parsley-validate="true" name="demo-form">
                                                    <div class="form-group">
                                                        <label class="control-label col-sm-3">Title<span class="text-danger">*</span></label>
                                                        <div class="col-sm-7">
                                                            <input class="form-control" type="text"  name="title" value="@{{v.notice_title}}" required="" data-parsley-required="true" />
                                                            <input type="hidden" name="id" value="@{{v.notice_id}}" />
                                                            <input type="hidden" name="area_id" value="@{{v.notice_area_id}}" />
                                                            <input type="hidden" name="status" value="@{{v.notice_status}}" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-sm-3">Notice Area<span class="text-danger">*</span></label>
                                                        <div class="col-sm-8">
                                                            <textarea class="form-control"  name="area" value="@{{v.notice_area_description}}" rows="2" value="foo" required="" data-parsley-required="true"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-sm-3" for="message">Description<span class="text-danger">*</span></label>
                                                        <div class="col-sm-9">
                                                            <textarea class="form-control" name="description" value="@{{v.notice_description}}" rows="5" value="foo" required="" data-parsley-required="true"></textarea>
                                                        </div>
                                                    </div><p id="nas_rough"></p>
                                                    <div class="form-group m-b-0">
                                                        <label class="control-label col-sm-3"></label>
                                                        <div class="col-sm-6 text-center">
                                                            <button type="submit" class="btn btn-success width-xs">Update</button>
                                                        </div>
                                                    </div>
                                                </span>
                                                {!! Form::close() !!}
                                            </div>
                                            <!--ends ervice_person_Picture-->
                                        </div>
                                    </span>
                                </div>
                                <!-- end section-container -->    
                            </div>
                            <!-- end row panel body --->
                        </div>
                    </div>
                </div>
            </div>
            <!--end edit-broadcasting-notice-->
            
        </div>
        <!--end show_service_people_picture-->
    </div>
    <!-- end modal -->
    
</div>
<!-- end section-container -->
@endsection