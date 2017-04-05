<!DOCTYPE html>
<html lang="en" ng-app="adminapp">

    <head>
        <meta charset="utf-8" />
        <title>HSMS</title>
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <link rel="icon" type="image/png" href="{{URL::asset('ap/assets/img/icon_1.jpg')}}">

        <!-- ================== BEGIN BASE CSS STYLE ================== -->
        <link href="http://fonts.googleapis.com/css?family=Nunito:400,300,700" rel="stylesheet" id="fontFamilySrc" />
        <link href="{{URL::asset('ap/assets/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css')}}" rel="stylesheet" />
        <link href="{{URL::asset('ap/assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />
        <link href="{{URL::asset('ap/assets/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" />
        <link href="{{URL::asset('ap/assets/css/animate.min.css')}}" rel="stylesheet" />
        <link href="{{URL::asset('ap/assets/css/style.min.css')}}" rel="stylesheet" />
        <link href="{{URL::asset('ap/assets/css/style_define.css')}}" rel="stylesheet" />
        <link href="{{URL::asset('ap/assets/css/invoice-print.min.css')}}" rel="stylesheet" />
        <!-- ================== END BASE CSS STYLE ================== -->

        <!-- ================== BEGIN PAGE LEVEL CSS STYLE ================== -->
        <link href="{{URL::asset('ap/assets/plugins/gritter/css/jquery.gritter.css')}}" rel="stylesheet" />
        <!-- ================== END PAGE LEVEL CSS STYLE ================== -->

        <!-- ++================== BEGIN PAGE LEVEL CSS STYLE ================== -->
        <link href="{{URL::asset('ap/assets/plugins/bootstrap-calendar/css/bootstrap_calendar.css')}}" rel="stylesheet" />
        <link href="{{URL::asset('ap/assets/plugins/bootstrap-wizard/css/bwizard.min.css')}}" rel="stylesheet" />
        <link href="{{URL::asset('ap/assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css')}}" rel="stylesheet" />
        <link href="{{URL::asset('ap/assets/plugins/DataTables/extensions/FixedColumns/css/fixedColumns.bootstrap.min.css')}}" rel="stylesheet" />
        <link href="{{URL::asset('ap/assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css')}}" rel="stylesheet" />
        <link href="{{URL::asset('ap/assets/plugins/summernote/dist/summernote.css')}}" rel="stylesheet" />
        <link href="{{URL::asset('ap/assets/plugins/parsley/src/parsley.css')}}" rel="stylesheet" />
        <!-- ================== END PAGE LEVEL CSS STYLE ================== -->

        <!-- ================== BEGIN TABLE ================== -->
        <!-- <link href="{{URL::asset('ap/assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css')}}" rel="stylesheet" />
        <link href="{{URL::asset('ap/assets/plugins/DataTables/extensions/AutoFill/css/autoFill.bootstrap.min.css')}}" rel="stylesheet" />
        <link href="{{URL::asset('ap/assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css')}}" rel="stylesheet" />
        -->
        <!-- ================== END TABLE ================== -->
        
        <!-- ================== Begin Form Plugins ================== -->
	<link href="{{URL::asset('ap/assets/plugins/bootstrap-datepicker/css/datepicker.css')}}" rel="stylesheet" />
	<link href="{{URL::asset('ap/assets/plugins/bootstrap-datepicker/css/datepicker3.css')}}" rel="stylesheet" />
	<link href="{{URL::asset('ap/assets/plugins/ionRangeSlider/css/ion.rangeSlider.css')}}" rel="stylesheet" />
	<link href="{{URL::asset('ap/assets/plugins/ionRangeSlider/css/ion.rangeSlider.skinNice.css')}}" rel="stylesheet" />
	<link href="{{URL::asset('ap/assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css')}}" rel="stylesheet" />
	<link href="{{URL::asset('ap/assets/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css')}}" rel="stylesheet" />
	<link href="{{URL::asset('ap/assets/plugins/strength-js/strength.css')}}" rel="stylesheet" />
	<link href="{{URL::asset('ap/assets/plugins/bootstrap-combobox/css/bootstrap-combobox.css')}}" rel="stylesheet" />
	<link href="{{URL::asset('ap/assets/plugins/bootstrap-select/bootstrap-select.min.css')}}" rel="stylesheet" />
	<link href="{{URL::asset('ap/assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css')}}" rel="stylesheet" />
	<link href="{{URL::asset('ap/assets/plugins/jquery-tag-it/css/jquery.tagit.css')}}" rel="stylesheet" />
        <link href="{{URL::asset('ap/assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css')}}" rel="stylesheet" />
        <link href="{{URL::asset('ap/assets/plugins/select2/dist/css/select2.min.css')}}" rel="stylesheet" />
        <link href="{{URL::asset('ap/assets/plugins/bootstrap-eonasdan-datetimepicker/build/css/bootstrap-datetimepicker.min.css')}}" rel="stylesheet" />
        <!-- ================== End  Form Plugins ================== -->
        
        <!-- ================== BEGIN BASE JS ================== -->
        <script src="{{URL::asset('ap/assets/plugins/pace/pace.min.js')}}"></script>
        <!-- ================== END BASE JS ================== -->
        <link href="{{URL::asset('ap/assets/plugins/jquery-jvectormap/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet" />


        <script src="{{URL::asset('ap/assets/jquery-3.1.1.js')}}" type="text/javascript"></script>

        <style type="text/css">
            .table-scroll tbody {
                position: absolute;
                overflow-y: scroll;
                overflow: auto;
                height: 330px;
                border-bottom: 1px solid #EBECED;
                border-left: 1px solid #EBECED;
                border-right: 1px solid #EBECED;
                margin-right: 11px;
                //margin-top: 43px;
                background-color: white;
            }
            .table-scroll tr {
                width: 100%;
                table-layout: fixed;
                display: inline-table;
            }
            .table-scroll thead > tr > th {
                border: none;
            }
            
            div.absolute {
                position: absolute;
                top: 546px;
                //right: 0;
                //width: 200px;
                //height: 100px;
                //border: 3px solid #73AD21;
                margin-bottom: 100px;
                
                border-bottom-left-radius: 5px;
                border-bottom-right-radius: 5px;
                //border-radius: 5px;
                background-color: #fff;
            }
        </style>
        <script>
        function printContent(el) { 
            var restorepage = document.body.innerHTML;
            var printContent = document.getElementById(el).innerHTML;
            document.body.innerHTML = printContent;
            window.print();
            document.body.innerHTML = restorepage;
        }
        </script>
    </head>
    <body>
        <!--start #page-container-->
        <div id="page-container" class="b_l_r_t_b_content fade page-container page-header-fixed page-sidebar-fixed page-with-two-sidebar page-with-footer">
            
            <!--start #header-->
            <div id="header" class="header navbar navbar-default navbar-fixed-top b_t_header">
                <!-- begin container-fluid -->
                <div class="container-fluid">
                    <!-- begin mobile sidebar expand / collapse button -->
                    <div class="navbar-header">
                        <a href="{{URL::to('dboard')}}" class="navbar-brand"><img src="{{URL::asset('ap/assets/img/icon_1.jpg')}}" class="logo" alt="" /><span class="text-success">Housing Software</span></a>
                        <button type="button" class="navbar-toggle" data-click="sidebar-toggled">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <!-- end mobile sidebar expand / collapse button -->

                    <!-- begin navbar-right -->
                    <ul class="nav navbar-nav navbar-right">
                        <li>
<!--                            <form class="navbar-form form-input-flat">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Enter keyword..." />
                                    <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
                                </div>
                            </form>-->
                        </li>
                        <li class="dropdown">
                            <a href="javascript:;" data-toggle="dropdown" class="dropdown-toggle has-notify" data-click="toggle-notify">
                                <i class="fa fa-bell"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-notification pull-right">
                                <li class="dropdown-header">Notifications (5)</li>
                                <li class="notification-item">
                                    <a href="javascript:;">
                                        <div class="media"><i class="fa fa-exclamation-triangle"></i></div>
                                        <div class="message">
                                            <h6 class="title">Server Error Reports</h6>
                                            <div class="time">3 minutes ago</div>
                                        </div>
                                        <div class="option" data-toggle="tooltip" data-title="Mark as Read" data-click="set-message-status" data-status="unread" data-container="body">
                                            <i class="fa fa-circle-o"></i>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-item">
                                    <a href="javascript:;">
                                        <div class="media"><img src="assets/img/user_1.jpg" alt="" /></div>
                                        <div class="message">
                                            <h6 class="title">Solvia Smith</h6>
                                            <p class="desc">Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
                                            <div class="time">25 minutes ago</div>
                                        </div>
                                        <div class="option read" data-toggle="tooltip" data-title="Mark as Unread" data-click="set-message-status" data-status="read" data-container="body">
                                            <i class="fa fa-circle-o"></i>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-item">
                                    <a href="javascript:;">
                                        <div class="media"><img src="assets/img/user_2.jpg" alt="" /></div>
                                        <div class="message">
                                            <h6 class="title">Olivia</h6>
                                            <p class="desc">Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
                                            <div class="time">35 minutes ago</div>
                                        </div>
                                        <div class="option read" data-toggle="tooltip" data-title="Mark as Unread" data-click="set-message-status" data-status="read" data-container="body">
                                            <i class="fa fa-circle-o"></i>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-item">
                                    <a href="javascript:;">
                                        <div class="media"><i class="fa fa-user-plus media-object"></i></div>
                                        <div class="message">
                                            <h6 class="title"> New User Registered</h6>
                                            <div class="time">1 hour ago</div>
                                        </div>
                                        <div class="option read" data-toggle="tooltip" data-title="Mark as Unread" data-click="set-message-status" data-status="read" data-container="body">
                                            <i class="fa fa-circle-o"></i>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-item">
                                    <a href="javascript:;">
                                        <div class="media bg-success"><i class="fa fa-credit-card"></i></div>
                                        <div class="message">
                                            <h6 class="title"> New Item Sold</h6>
                                            <div class="time">2 hour ago</div>
                                        </div>
                                        <div class="option read" data-toggle="tooltip" data-title="Mark as Read" data-click="set-message-status" data-status="read" data-container="body">
                                            <i class="fa fa-circle-o"></i>
                                        </div>
                                    </a>
                                </li>
                                <li class="dropdown-footer text-center">
                                    <a href="javascript:;">View more</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown navbar-user">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                                <span class="image"><img src="{{URL::asset('ap/assets/img/user_profile.jpg')}}" alt="" /></span>
                                <span class="hidden-xs">Md Nasim</span> <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="{{URL::to('profile-admin')}}"><i class="fa fa-edit"></i>&nbsp; Edit Profile</a></li>
                                <li><a href="{{URL::to('')}}"><i class="fa fa-inbox"></i>&nbsp; <span class="badge badge-danger pull-right">2</span> Inbox</a></li>
                                <li><a href="{{URL::to('')}}"><i class="fa fa-cog"></i>&nbsp; Setting</a></li>
                                <li><a href="{{URL::to('admin-access')}}"><i class="fa fa-language"></i>&nbsp; Access Level</a></li>
                                <li class="divider"></li>
                                <li><a href="{{URL::to('')}}"><i class="fa fa-power-off"></i>&nbsp; Log Out</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#are-you-sure-to-exit" data-toggle="modal" class="m-r-20">
                                <i class="fa fa-times" title="Are You Sure To Exit ?"></i> 
                            </a>
                        </li>
                    </ul>
                    <!-- end navbar-right -->
                </div>
                <!-- end container-fluid -->
            </div>
            <!--end #header-->

            <!--start #sidebar-->
            <div id="sidebar" class="sidebar b_t_sidebar">
                <!-- begin sidebar scrollbar -->
                <div data-scrollbar="true" data-height="100%">
                    <!-- begin sidebar nav -->
                    <ul class="nav">
                        <!--
                        <li class="nav-user m-b-20">
                             <div class="image">
                                <img src="{{URL::asset('ap/assets/img/user_profile.jpg')}}" alt="" />
                            </div>
                            <div class="info">
                                <div class="name dropdown">
                                    <a href="javascript:;" data-toggle="dropdown">Md Nasim <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:;">Edit Profile</a></li>
                                        <li><a href="javascript:;"><span class="badge badge-danger pull-right">2</span> Inbox</a></li>
                                        <li><a href="javascript:;">Calendar</a></li>
                                        <li><a href="javascript:;">Setting</a></li>
                                        <li class="divider"></li>
                                        <li><a href="javascript:;">Log Out</a></li>
                                    </ul>
                                </div>
                                <div class="position">Software Architecture</div>
                            </div>
                            
                        </li>-->
                        <!-- <li class="nav-header">Navigation</li> -->
                        <li class="has-sub m_t_40">
                            <!-- begin col-2 -->
                            <div class="col-md-2 col-md-offset-1">
                                <!-- begin widget -->
                                <p>
                                    <a href="{{URL::to('info-rental')}}" class="btn btn-lg btn-success widtg150">
                                        <i class="fa fa-user fa-2x"></i><br />
                                        <small>People</small>
                                    </a>
                                </p>
                                <!-- end widget -->
                            </div>
                            <!-- end col-2 -->
                        </li>
                        <li class="has-sub">
                            <!-- begin col-2 -->
                            <div class="col-md-2 col-md-offset-1">
                                <!-- begin widget -->
                                <p>
                                    <a href="{{URL::to('payment-all')}}" class="btn btn-lg btn-success widtg150">
                                        <i class="fa fa-credit-card fa-2x"></i><br />
                                        <small>Payment</small>
                                    </a>
                                </p>
                                <!-- end widget -->
                            </div>
                            <!-- end col-2 -->
                        </li>
                        <li class="has-sub">
                            <!-- begin col-2 -->
                            <div class="col-md-2 col-md-offset-1">
                                <!-- begin widget -->
                                <p>
                                    <a href="{{URL::to('inventory-ataglance')}}" class="btn btn-lg btn-success widtg150">
                                        <i class="fa fa-newspaper-o fa-2x"></i><br />
                                        <small>Accounts</small>
                                    </a>
                                </p>
                                <!-- end widget -->
                            </div>
                            <!-- end col-2 -->
                        </li>
                        <li class="has-sub">
                            <!-- begin col-2 -->
                            <div class="col-md-2 col-md-offset-1">
                                <!-- begin widget -->
                                <p>
                                    <a href="{{URL::to('broadcasting-sms')}}" class="btn btn-lg btn-success widtg150">
                                        <i class="fa fa-wifi fa-2x"></i><br />
                                        <small>Broad Cast</small>
                                    </a>
                                </p>
                                <!-- end widget -->
                            </div>
                            <!-- end col-2 -->
                        </li>
                        <li class="has-sub">
                            <!-- begin col-2 -->
                            <div class="col-md-2 col-md-offset-1">
                                <!-- begin widget -->
                                <p>
                                    <a href="{{URL::to('make-service-bill')}}" class="btn btn-lg btn-success widtg150">
                                        <i class="fa fa-gear fa-2x"></i><br />
                                        <small>Settings</small>
                                    </a>
                                </p>
                                <!-- end widget -->
                            </div>
                            <!-- end col-2 -->
                        </li>
                        <li class="has-sub"></li>
                    </ul>
                    <!-- end sidebar nav -->
                </div>
                <!-- end sidebar scrollbar -->
            </div>
            <div class="sidebar-bg"></div>
            <!--end #sidebar-->

            <!--start #content-->
            <div id="content" class="content">

                @yield('maincontent')

                <!-- begin #footer -->
                <!--
                <div id="footer" class="footer">
                    <span class="pull-right">
                        <a href="javascript:;" class="btn-scroll-to-top" data-click="scroll-top">
                            <i class="fa fa-arrow-up"></i> <span class="hidden-xs">Back to Top</span>
                        </a>
                    </span>
                    &copy; 2016 <a href="http://mdnasim.info" title="Developed By 'Md Nasim'"><b>Md Nasim</b></a> All Right Reserved
                </div>
                -->
                <!-- end #footer -->
            </div>
            <!--end #content-->
            
            <!--start_modal_are_you_sure_to_exit-->
            <div class="modal fade" id="are-you-sure-to-exit">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title text-center text-danger"><b>Are You Sure To Exit ?</b></h4>
                        </div>
                        <div class="modal-body">
                            <!-- begin row panel body --->
                            <div class="row m-b-30">
                                <!-- begin section-container -->
                                <div class="section-container">
                                    <!-- begin submit button -->
                                    <div class="form-group col-md-offset-2">
                                        <div class="col-sm-4">
                                            {!! Form::open(array('url'=>'-service-bill-statement-', 'role'=>'form', 'method'=>'POST')) !!}
                                            <input type="hidden" name="a" value="@{{select_month}}" />
                                            <input type="hidden" name="b" value="@{{select_year}}" />
                                            <button type="submit" class="btn btn-success btn-lg widtg150"><i class="fa fa-check"></i> Yes</button>
                                            {!! Form::close() !!}
                                        </div>
                                        <div class="col-sm-4 m-l-20">
                                            <button type="submit" class="btn btn-danger btn-lg widtg150" data-dismiss="modal"><i class="fa fa-remove"></i> No</button>
                                        </div>
                                    </div>
                                    <!-- end submit button -->
                                </div>
                                <!-- end section-container -->    
                            </div>
                            <!-- end row panel body --->
                        </div>
                    </div>
                </div>
            </div>
            <!--end_modal_are_you_sure_to_exit-->
            
        </div>
        <!--end page container-->

        <!-- ================== BEGIN BASE JS ================== -->
        <script src="{{URL::asset('ap/assets/plugins/jquery/jquery-1.9.1.min.js')}}"></script>
        <script src="{{URL::asset('ap/assets/plugins/jquery/jquery-migrate-1.1.0.min.js')}}"></script>
        <script src="{{URL::asset('ap/assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js')}}"></script>
        <script src="{{URL::asset('ap/assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
        <!--[if lt IE 9]>
                <script src="assets/crossbrowserjs/html5shiv.js"></script>
                <script src="assets/crossbrowserjs/respond.min.js"></script>
        <![endif]-->
        <script src="{{URL::asset('ap/assets/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
        <script src="{{URL::asset('ap/assets/plugins/jquery-cookie/jquery.cookie.js')}}"></script>
        <!-- ================== END BASE JS ================== -->

        <!-- ================== BEGIN PAGE LEVEL JS ================== -->
        <script src="{{URL::asset('ap/assets/plugins/bootstrap-calendar/js/bootstrap_calendar.min.js')}}"></script>
        <script src="{{URL::asset('ap/assets/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
        <script src="{{URL::asset('ap/assets/plugins/flot/jquery.flot.min.js')}}"></script>
        <script src="{{URL::asset('ap/assets/plugins/flot/jquery.flot.time.min.js')}}"></script>
        <script src="{{URL::asset('ap/assets/plugins/flot/jquery.flot.resize.min.js')}}"></script>
        <script src="{{URL::asset('ap/assets/plugins/flot/jquery.flot.pie.min.js')}}"></script>
        <script src="{{URL::asset('ap/assets/plugins/flot/jquery.flot.stack.min.js')}}"></script>
        <script src="{{URL::asset('ap/assets/plugins/flot/jquery.flot.crosshair.min.js')}}"></script>
        <script src="{{URL::asset('ap/assets/plugins/flot/jquery.flot.categories.js')}}"></script>
        <script src="{{URL::asset('ap/assets/plugins/flot/CurvedLines/curvedLines.js')}}"></script>
        <script src="{{URL::asset('ap/assets/plugins/jquery-jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
        <script src="{{URL::asset('ap/assets/plugins/jquery-jvectormap/jquery-jvectormap-world-merc-en.js')}}"></script>
        <script src="{{URL::asset('ap/assets/plugins/gritter/js/jquery.gritter.js')}}"></script>
        <script src="{{URL::asset('ap/assets/js/page-index.demo.min.js')}}"></script>
        <script src="{{URL::asset('ap/assets/plugins/parsley/dist/parsley.js')}}"></script>
        <script src="{{URL::asset('ap/assets/plugins/bootstrap-wizard/js/bwizard.js')}}"></script>
        <script src="{{URL::asset('ap/assets/js/page-form-wizards.demo.min.js')}}"></script>
        <script src="{{URL::asset('ap/assets/plugins/summernote/dist/summernote.min.js')}}"></script>
        <script src="{{URL::asset('ap/assets/js/page-email.demo.min.js')}}"></script>
        <script src="{{URL::asset('ap/assets/js/page-ui-modal-notification.demo.min.js')}}"></script>
        <script src="{{URL::asset('ap/assets/js/demo.min.js')}}"></script>
        <script src="{{URL::asset('ap/assets/js/apps.min.js')}}"></script>
        <!-- ================== END PAGE LEVEL JS ================== -->
        
        <!--<script src="{{URL::asset('ap/')}}"></script>--!>
        
        <!-- ================== END TABLE ================== -->
        <!-- <script src="{{URL::asset('ap/assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js')}}"></script> -->
        
        <!--Start_Angular_js -->
        <script src="{{URL::asset('ap/assets/js/angular.js')}}"  type="text/javascript"></script>
        <script src="{{URL::asset('ap/assets/js/homeController.js')}}"  type="text/javascript"></script>
        <script src="{{URL::asset('ap/assets/js/notice_board.js')}}"  type="text/javascript"></script>
        <script src="{{URL::asset('ap/assets/js/bldController.js')}}"  type="text/javascript"></script>
        <script src="{{URL::asset('ap/assets/js/service_person.js')}}"  type="text/javascript"></script>
        <script src="{{URL::asset('ap/assets/js/rentalController.js')}}"  type="text/javascript"></script>
        <script src="{{URL::asset('ap/assets/js/RegiController.js')}}"  type="text/javascript"></script>
        <script src="{{URL::asset('ap/assets/js/driverController.js')}}"  type="text/javascript"></script>
        <script src="{{URL::asset('ap/assets/js/HousekeeptingController.js')}}"  type="text/javascript"></script>
        <script src="{{URL::asset('ap/assets/js/NoticeController.js')}}"  type="text/javascript"></script>
        <!--End_Angular_js -->
        
        <script>
$(document).ready(function() {
    App.init();
    Demo.init();
    PageDemo.init();
});
        </script>
        <script>
            (function(i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function() {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '../../../../www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-53034621-1', 'auto');
            ga('send', 'pageview');
        </script>
        <!-- ================== Begin Table Fixed Colum Script JS ================== -->
        <script>
            (function(i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function() {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '../../../../www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-53034621-1', 'auto');
            ga('send', 'pageview');
        </script>
        <!-- ================== End Table Fixed Colum Script JS ================== -->
    </body>

</html>
