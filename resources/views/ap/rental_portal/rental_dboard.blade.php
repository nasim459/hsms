<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->

    <!-- Mirrored from seantheme.com/source-admin-v1.2.1/admin/html/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Aug 2016 06:21:13 GMT -->
    <head>
        <meta charset="utf-8" />
        <title>Rental Dash Board | HSMS</title>
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
        <script src="{{URL::asset('ap/assets/js/style_defile.js')}}"></script>
        <!-- ================== END BASE JS ================== -->
        <link href="{{URL::asset('ap/assets/plugins/jquery-jvectormap/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet" />

        <!--[if lt IE 9]>
            <script src="assets/crossbrowserjs/excanvas.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <!-- begin #page-loader -->
        <!-- <div id="page-loader" class="page-loader fade in"><span class="spinner">Loading...</span></div> -->
        <!-- end #page-loader -->

        <!-- begin #page-container -->
        <div id="page-container" class="b_l_r_t_b_content fade page-container page-header-fixed page-sidebar-fixed page-with-two-sidebar page-with-footer">
            <!-- begin #header -->
            <div id="header" class="header navbar navbar-default navbar-fixed-top b_t_header">
                <!-- begin container-fluid -->
                <div class="container-fluid">
                    <!-- begin mobile sidebar expand / collapse button -->
                    <div class="navbar-header">
                        <a href="{{URL::to('dboard')}}" class="navbar-brand"><img src="{{URL::asset('ap/assets/img/icon_1.jpg')}}" class="logo" alt="" /><span class="text-success">Rental Dash Board</span></a>
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
                            <form class="navbar-form form-input-flat">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Enter keyword..." />
                                    <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
                                </div>
                            </form>
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
                                
                                <li class="dropdown-footer text-center">
                                    <a href="javascript:;">View more</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown navbar-user">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                                <span class="image"><img src="{{URL::asset('ap/assets/img/user_profile.jpg')}}" alt="" /></span>
                                <span class="hidden-xs">Yamin Alam</span> <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="{{URL::to('profile-rental')}}"><i class="fa fa-edit"></i>&nbsp; Edit Profile</a></li>
                                <li><a href="{{URL::to('')}}"><i class="fa fa-inbox"></i>&nbsp; <span class="badge badge-danger pull-right">2</span> Inbox</a></li>
                                <li><a href="{{URL::to('')}}"><i class="fa fa-cog"></i>&nbsp; Setting</a></li>
                                <li><a href="{{URL::to('rental-access')}}"><i class="fa fa-language"></i>&nbsp; Access Level</a></li>
                                <li class="divider"></li>
                                <li><a href="{{URL::to('')}}"><i class="fa fa-power-off"></i>&nbsp; Log Out</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" data-click="right-sidebar-toggled" class="m-r-20">
                                <i class="fa fa-times" title="Are You Sure To Exit ?"></i> 
                            </a>
                        </li>
                    </ul>
                    <!-- end navbar-right -->
                </div>
                <!-- end container-fluid -->
            </div>
            <!-- end #header -->

            <!-- begin #sidebar -->
            <div id="sidebar" class="sidebar b_t_sidebar">
                <!-- begin sidebar scrollbar -->
                <div data-scrollbar="true" data-height="100%">
                    <!-- begin sidebar nav -->
                    <ul class="nav">
                        
                        <!-- <li class="nav-header">Navigation</li> -->
                        <li class="has-sub m_t_40">
                            <!-- begin col-2 -->
                            <div class="col-md-2 col-md-offset-1">
                                <!-- begin widget -->
                                <p>
                                    <a href="{{URL::to('info-rental-details')}}" class="btn btn-lg btn-success widtg150">
                                        <i class="fa fa-user fa-2x"></i><br />
                                        <small>My Profile</small>
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
                                        <small>Payment History</small>
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
                                        <small>Forum</small>
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
                                        <small>Chat</small>
                                    </a>
                                </p>
                                <!-- end widget -->
                            </div>
                            <!-- end col-2 -->
                        </li>
                        <li class="has-sub">
                            <!-- begin col-2 -->
<!--                            <div class="col-md-2 col-md-offset-1">
                                 begin widget 
                                <p>
                                    <a href="{{URL::to('make-service-bill')}}" class="btn btn-lg btn-success widtg150">
                                        <i class="fa fa-gear fa-2x"></i><br />
                                        <small>Settings</small>
                                    </a>
                                </p>
                                 end widget 
                            </div>-->
                            <!-- end col-2 -->
                        </li>
                        <li class="has-sub"></li>
                    </ul>
                    <!-- end sidebar nav -->
                </div>
                <!-- end sidebar scrollbar -->
            </div>
            <div class="sidebar-bg"></div>
            <!-- end #sidebar -->

            <!-- begin #content -->
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
            <!-- end #content -->
        </div>
        <!-- end page container -->

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

        <!-- ================== BEGIN TABLE ================== -->
        <script src="{{URL::asset('ap/assets/plugins/DataTables/media/js/jquery.dataTables.js')}}"></script>
        <script src="{{URL::asset('ap/assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js')}}"></script>
        <script src="{{URL::asset('ap/assets/plugins/DataTables/extensions/FixedColumns/js/dataTables.fixedColumns.min.js')}}"></script>
        <script src="{{URL::asset('ap/assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js')}}"></script>
        <script src="{{URL::asset('ap/assets/js/page-table-manage-fixed-columns.demo.min.js')}}"></script>
        
        <!--<script src="{{URL::asset('ap/')}}"></script>--!>
        
        <!-- ================== Begin Form Plugins ================== -->
	<script src="{{URL::asset('aap/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
	<script src="{{URL::asset('aap/assets/plugins/ionRangeSlider/js/ion-rangeSlider/ion.rangeSlider.min.js')}}"></script>
	<script src="{{URL::asset('aap/assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')}}"></script>
	<script src="{{URL::asset('aap/assets/plugins/masked-input/masked-input.min.js')}}"></script>
	<script src="{{URL::asset('aap/assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js')}}"></script>
	<script src="{{URL::asset('aap/assets/plugins/strength-js/strength.js')}}"></script>
	<script src="{{URL::asset('aap/assets/plugins/bootstrap-combobox/js/bootstrap-combobox.js')}}"></script>
	<script src="{{URL::asset('aap/assets/plugins/bootstrap-select/bootstrap-select.min.js')}}"></script>
	<script src="{{URL::asset('aap/assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js')}}"></script>
	<script src="{{URL::asset('aap/assets/plugins/bootstrap-tagsinput/bootstrap-tagsinput-typeahead.js')}}"></script>
	<script src="{{URL::asset('aap/assets/plugins/jquery-tag-it/js/tag-it.min.js')}}"></script>
        <script src="{{URL::asset('aap/assets/plugins/bootstrap-daterangepicker/moment.js')}}"></script>
        <script src="{{URL::asset('aap/assets/plugins/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
        <script src="{{URL::asset('aap/assets/plugins/select2/dist/js/select2.min.js')}}"></script>
        <script src="{{URL::asset('aap/assets/plugins/bootstrap-eonasdan-datetimepicker/build/js/bootstrap-datetimepicker.min.js')}}"></script>
       
        <script src="{{URL::asset('aap/assets/js/page-form-plugins.demo.min.js')}}"></script>
        <!-- ================== End Form Plugins ================== -->
        
        <!-- ================== END TABLE ================== -->
        <!-- <script src="{{URL::asset('ap/assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js')}}"></script> -->

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
