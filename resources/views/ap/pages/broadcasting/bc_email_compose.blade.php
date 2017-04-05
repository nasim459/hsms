@section('broadcasting_content')
<!-- begin section-container -->
<div class="section-container">
    <!-- begin row -->
    <div class="row">
        <!-- begin col-12 -->
        <div class="col-md-12">

            <!-- begin #content -->
            <div id="content" class="">
                <!-- begin mail-box -->
                <div class="mail-box">
                    <!-- begin mail-box-sidebar -->
                    <div class="mail-box-sidebar dropdown">
                        <!-- begin mail-box-mobile-toggler -->
                        <div class="mail-box-mobile-toggler">
                            <a href="#" class="btn btn-default width-100 btn-sm" data-toggle="email-sidebar">Inbox <b class="caret"></b></a>
                        </div>
                        <!-- end mail-box-mobile-toggler -->
                        <!-- begin email-sidebar -->
                        <div class="dropdown-menu email-sidebar" id="email-sidebar" data-scrollbar="true" data-height="100%">
                            <!-- begin mail-box-header -->
                            <div class="mail-box-header text-center">
                                <a href="#" class="btn btn-danger width-150 btn-sm disabled">
                                    COMPOSE
                                </a>
                            </div>
                            <!-- end mail-box-header -->
                            <!-- begin mail-box-wrapper -->
                            <div class="mail-box-wrapper">
                                <h4 class="title m-t-0">FOLDER</h4>
                                <ul class="mail-box-menu">
                                    <li><a href="email_inbox.html">Inbox <b>(5)</b></a></li>
                                    <li><a href="email_inbox.html">Archive</a></li>
                                    <li><a href="email_inbox.html">Junk</a></li>
                                    <li><a href="email_inbox.html">Drafts</a></li>
                                    <li><a href="email_inbox.html">Sent</a></li>
                                    <li><a href="email_inbox.html">Trash <b>(99+)</b></a></li>
                                    <li><a href="email_inbox.html">Flagged</a></li>
                                </ul>
                                <h4 class="title">CONTACT</h4>
                                <ul class="mail-box-user-list">
                                    <li><a href="#"><img src="assets/img/user_1.jpg" alt="" /> <i class="fa fa-circle text-success-light"></i> Finlay Josep</a></li>
                                    <li><a href="#"><img src="assets/img/user_2.jpg" alt="" /> <i class="fa fa-circle text-inverse"></i> Lucas Enosh</a></li>
                                    <li><a href="#"><img src="assets/img/user_3.jpg" alt="" /> <i class="fa fa-circle text-inverse"></i> Balthazar Swarna</a></li>
                                    <li><a href="#"><img src="assets/img/user_4.jpg" alt="" /> <i class="fa fa-circle text-warning-light"></i> Stribog Taliesin</a></li>
                                    <li><a href="#"><img src="assets/img/user_5.jpg" alt="" /> <i class="fa fa-circle text-danger-light"></i> Juan Philemon</a></li>
                                </ul>
                            </div>
                            <!-- end mail-box-wrapper -->
                        </div>
                        <!-- end email-sidebar -->
                        {!! Form::open(array('url'=>'', 'role'=>'form', 'method'=>'POST', 'files'=>'true')) !!}
                            <span class="form-horizontal" data-parsley-validate="true" name="demo-form">

                        <div class="pull-center">
                                <div class="form-group  m-t-10">
                                            <label class="control-label col-sm-4">Building <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <select class="form-control" id="select-required" name="country" data-parsley-required="true">
                                                    <option value="">All</option>
                                                    
                                                </select>
                                            </div>
                                        </div>
                                <div class="form-group  m-t-10">
                                            <label class="control-label col-sm-4">Floor <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <select class="form-control" id="select-required" name="country" data-parsley-required="true">
                                                    <option value="">all</option>
                                                    
                                                </select>
                                            </div>
                                        </div>
                                <div class="form-group  m-t-10">
                                            <label class="control-label col-sm-4">Unit <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <select class="form-control" id="select-required" name="country" data-parsley-required="true">
                                                    <option value="">All</option>
                                                    >
                                                </select>
                                            </div>
                                        </div>
                            </div>
                    </div>
                    <!-- end mail-box-sidebar -->
                    <!-- begin mail-box-content -->
                    
                    <div class="mail-box-content">
                        <!-- begin mail-box-toolbar -->
                        <div class="mail-box-toolbar">
                            <div class="pull-left">
                                <a href="email_inbox.html" class="btn btn-white btn-sm m-r-5">Cancel</a>
                                <a href="#" class="btn btn-white btn-sm">Save Draft</a>
                            </div>
                            
                            <div class="pull-right">
                                <a href="#" class="btn btn-success width-100 btn-sm">SEND</a>
                            </div>
                        </div>
                        <!-- end mail-box-toolbar -->
                        <!-- begin mail-box-container -->
                        <div class="mail-box-container">
                            <!-- begin scrollbar -->
                            <div data-scrollbar="true" data-height="100%">
                                <!-- begin mail-to-box -->
                                <div class="mail-to-box">
                                    <div class="row row-space-0">
                                        <div class="col-md-4 mail-input-box">
                                            <label>To:</label>
                                            <input type="text" class="form-control" />
                                        </div>
                                        <div class="col-md-4 mail-input-box">
                                            <label>Cc:</label>
                                            <input type="text" class="form-control" />
                                        </div>
                                        <div class="col-md-4 mail-input-box">
                                            <label>Bcc:</label>
                                            <input type="text" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                                <!-- end mail-to-box -->
                                <!-- begin mail-subject-box -->
                                <div class="mail-subject-box">
                                    <div class="mail-input-box">
                                        <input type="text" class="form-control" placeholder="Add a subject" />
                                    </div>
                                </div>
                                <!-- end mail-subject-box -->
                                <!-- begin mail-compose-content -->
                                <div id="mail-compose-box"></div>
                                <!-- end mail-compose-content -->
                            </div>
                            <!-- end scrollbar -->
                        </div>
                        <!-- end mail-box-container -->
                    </div>
                    <!-- end mail-box-content -->
                </div>
                <!-- end mail-box -->
            </div>
            <!-- end #content -->

        </div>
        <!-- end col-12 -->
    </div>
    <!-- end row -->
</div>
<!-- end section-container -->
@endsection