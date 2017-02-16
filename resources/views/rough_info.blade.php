<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->

    <!-- Mirrored from seantheme.com/source-admin-v1.2.1/admin/html/table_manage_fixed_columns.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Aug 2016 06:25:24 GMT -->
    <head>
        <meta charset="utf-8" />
        <title>Source Admin | Table Manage - Fixed Columns</title>
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <link rel="icon" type="image/png" href="assets/img/favicon.png">

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
        <link href="{{URL::asset('ap/assets/plugins/bootstrap-calendar/css/bootstrap_calendar.css')}}" rel="stylesheet" />
        <link href="{{URL::asset('ap/assets/plugins/bootstrap-wizard/css/bwizard.min.css')}}" rel="stylesheet" />
        <link href="{{URL::asset('ap/assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css')}}" rel="stylesheet" />
        <link href="{{URL::asset('ap/assets/plugins/DataTables/extensions/FixedColumns/css/fixedColumns.bootstrap.min.css')}}" rel="stylesheet" />
        <link href="{{URL::asset('ap/assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css')}}" rel="stylesheet" />
        <!-- ================== END PAGE LEVEL CSS STYLE ================== -->

        <!-- ================== BEGIN BASE JS ================== -->
        <script src="{{URL::asset('ap/assets/plugins/pace/pace.min.js')}}"></script>
        <!-- ================== END BASE JS ================== -->

        <!--[if lt IE 9]>
            <script src="assets/crossbrowserjs/excanvas.min.js"></script>
        <![endif]-->
        <style type="text/css">
            .well {
                background: none;
                height: 320px;
            }

            .table-scroll tbody {
                position: absolute;
                overflow-y: scroll;
                height: 250px;
            }

            .table-scroll tr {
                width: 100%;
                table-layout: fixed;
                display: inline-table;
            }

            .table-scroll thead > tr > th {
                border: none;
            }
        </style>
    </head>
    <body>
        <!-- begin #page-loader
        <div id="page-loader" class="page-loader fade in"><span class="spinner">Loading...</span></div>
        end #page-loader -->

        <!-- begin #page-container -->
        <div id="page-container" class="fade page-container page-header-fixed page-sidebar-fixed page-with-two-sidebar page-with-footer">
            <!-- begin #header -->
            <div id="header" class="header navbar navbar-default navbar-fixed-top">
                <!-- begin container-fluid -->
                <div class="container-fluid">
                    <!-- begin mobile sidebar expand / collapse button -->
                    <div class="navbar-header">
                        <a href="index-2.html" class="navbar-brand"><img src="assets/img/logo.png" class="logo" alt="" /> Source Admin</a>
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
                                <span class="image"><img src="assets/img/user_profile.jpg" alt="" /></span>
                                <span class="hidden-xs">John Smith</span> <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="javascript:;">Edit Profile</a></li>
                                <li><a href="javascript:;"><span class="badge badge-danger pull-right">2</span> Inbox</a></li>
                                <li><a href="javascript:;">Calendar</a></li>
                                <li><a href="javascript:;">Setting</a></li>
                                <li class="divider"></li>
                                <li><a href="javascript:;">Log Out</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:;" data-click="right-sidebar-toggled">
                                <i class="fa fa-align-left"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- end navbar-right -->
                </div>
                <!-- end container-fluid -->
            </div>
            <!-- end #header -->

            <!-- begin #sidebar -->
            <div id="sidebar" class="sidebar">
                <!-- begin sidebar scrollbar -->
                <div data-scrollbar="true" data-height="100%">
                    <!-- begin sidebar nav -->
                    <ul class="nav">
                        <li class="nav-user">
                            <div class="image">
                                <img src="assets/img/user_profile.jpg" alt="" />
                            </div>
                            <div class="info">
                                <div class="name dropdown">
                                    <a href="javascript:;" data-toggle="dropdown">Thomas Evans <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:;">Edit Profile</a></li>
                                        <li><a href="javascript:;"><span class="badge badge-danger pull-right">2</span> Inbox</a></li>
                                        <li><a href="javascript:;">Calendar</a></li>
                                        <li><a href="javascript:;">Setting</a></li>
                                        <li class="divider"></li>
                                        <li><a href="javascript:;">Log Out</a></li>
                                    </ul>
                                </div>
                                <div class="position">Front End Designer</div>
                            </div>
                        </li>
                        <li class="nav-header">Navigation</li>
                        <li class="has-sub">
                            <a href="javascript:;">
                                <b class="caret pull-right"></b>
                                <i class="fa fa-home"></i>
                                <span>Dashboard <span class="label label-theme m-l-3">NEW</span></span>
                            </a>
                            <ul class="sub-menu">
                                <li><a href="index-2.html">Dashboard v1</a></li>
                                <li><a href="index_v2.html">Dashboard v2 <i class="fa fa-paper-plane text-theme m-l-3"></i></a></li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a href="javascript:;">
                                <span class="badge pull-right">10</span>
                                <i class="fa fa-inbox"></i> 
                                <span>Email</span>
                            </a>
                            <ul class="sub-menu">
                                <li><a href="email_inbox.html">Inbox</a></li>
                                <li><a href="email_compose.html">Compose</a></li>
                                <li><a href="email_detail.html">Detail</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="widgets.html">
                                <i class="fa fa-diamond"></i>
                                <span>Widgets</span>
                            </a>
                        </li>
                        <li class="has-sub">
                            <a href="javascript:;">
                                <b class="caret pull-right"></b>
                                <i class="fa fa-suitcase"></i>
                                <span>UI Elements</span> 
                            </a>
                            <ul class="sub-menu">
                                <li><a href="ui_general.html">General</a></li>
                                <li><a href="ui_typography.html">Typography</a></li>
                                <li><a href="ui_tabs_accordions.html">Tabs & Accordions</a></li>
                                <li><a href="ui_modal_notification.html">Modal & Notification</a></li>
                                <li><a href="ui_widget_boxes.html">Widget Boxes</a></li>
                                <li><a href="ui_media_object.html">Media Object</a></li>
                                <li><a href="ui_buttons.html">Buttons</a></li>
                                <li><a href="ui_font_awesome.html">Font Awesome</a></li>
                                <li><a href="ui_simple_line_icons.html">Simple Line Icons</a></li>
                                <li><a href="ui_ionicons.html">Ionicons</a></li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a href="javascript:;">
                                <b class="caret pull-right"></b>
                                <i class="fa fa-file-o"></i>
                                <span>Form Stuff</span> 
                            </a>
                            <ul class="sub-menu">
                                <li><a href="form_elements.html">Form Elements</a></li>
                                <li><a href="form_plugins.html">Form Plugins</a></li>
                                <li><a href="form_slider_switcher.html">Form Slider + Switcher</a></li>
                                <li><a href="form_validation.html">Form Validation</a></li>
                                <li><a href="form_wizards.html">Wizards</a></li>
                                <li><a href="form_wysiwyg.html">WYSIWYG</a></li>

                            </ul>
                        </li>
                        <li class="has-sub active">
                            <a href="javascript:;">
                                <b class="caret pull-right"></b>
                                <i class="fa fa-th"></i>
                                <span>Tables</span>
                            </a>
                            <ul class="sub-menu">
                                <li><a href="table_basic.html">Basic Tables</a></li>
                                <li class="has-sub active">
                                    <a href="javascript:;"><b class="caret pull-right"></b> Managed Tables</a>
                                    <ul class="sub-menu">
                                        <li><a href="table_manage.html">Default</a></li>
                                        <li><a href="table_manage_autofill.html">Autofill</a></li>
                                        <li><a href="table_manage_buttons.html">Buttons</a></li>
                                        <li><a href="table_manage_colreorder.html">ColReorder</a></li>
                                        <li class="active"><a href="table_manage_fixed_columns.html">Fixed Column</a></li>
                                        <li><a href="table_manage_fixed_header.html">Fixed Header</a></li>
                                        <li><a href="table_manage_keytable.html">KeyTable</a></li>
                                        <li><a href="table_manage_responsive.html">Responsive</a></li>
                                        <li><a href="table_manage_rowreorder.html">RowReorder</a></li>
                                        <li><a href="table_manage_scroller.html">Scroller</a></li>
                                        <li><a href="table_manage_select.html">Select</a></li>
                                        <li><a href="table_manage_combine.html">Extension Combination</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a href="javascript:;">
                                <b class="caret pull-right"></b>
                                <i class="fa fa-envelope"></i>
                                <span>Email Template <span class="label label-theme m-l-3">NEW</span></span>
                            </a>
                            <ul class="sub-menu">
                                <li><a href="email_newsletter.html" target="_blank">Newsletter Template <i class="fa fa-paper-plane text-theme m-l-3"></i></a></li>
                                <li><a href="email_system.html" target="_blank">System Template <i class="fa fa-paper-plane text-theme m-l-3"></i></a></li>
                                <li><a href="email_billing.html" target="_blank">Billing Template <i class="fa fa-paper-plane text-theme m-l-3"></i></a></li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a href="javascript:;">
                                <b class="caret pull-right"></b>
                                <i class="fa fa-map-marker"></i>
                                <span>Maps</span>
                            </a>
                            <ul class="sub-menu">
                                <li><a href="map_vector.html">Vector Map</a></li>
                                <li><a href="map_google.html">Google Map</a></li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a href="javascript:;">
                                <b class="caret pull-right"></b>
                                <i class="fa fa-area-chart"></i>
                                <span>Chart</span>
                            </a>
                            <ul class="sub-menu">
                                <li><a href="chart_flot.html">Flot Chart</a></li>
                                <li><a href="chart_morris.html">Morris Chart</a></li>
                                <li><a href="chart_js.html">Chart JS</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="calendar.html">
                                <i class="fa fa-calendar"></i>
                                <span>Calendar</span>
                            </a>
                        </li>
                        <li class="has-sub">
                            <a href="javascript:;">
                                <b class="caret pull-right"></b>
                                <i class="fa fa-file"></i>
                                <span>Pages</span>
                            </a>
                            <ul class="sub-menu">
                                <li><a href="extra_gallery.html">Gallery</a></li>
                                <li><a href="extra_timeline.html">Timeline</a></li>
                                <li><a href="extra_search_results.html">Search Results</a></li>
                                <li><a href="extra_invoice.html">Invoice</a></li>
                                <li><a href="extra_coming_soon.html">Coming Soon Page</a></li>
                                <li><a href="extra_404_error.html">404 Error Page</a></li>
                                <li><a href="extra_login.html">Login Page</a></li>
                                <li><a href="extra_register.html">Register Page</a></li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a href="javascript:;">
                                <b class="caret pull-right"></b>
                                <i class="fa fa-cogs"></i>
                                <span>Layout Options</span>
                            </a>
                            <ul class="sub-menu">
                                <li><a href="page_blank.html">Blank Page</a></li>
                                <li><a href="page_with_fixed_footer.html">Page with Fixed Footer</a></li>
                                <li><a href="page_with_right_sidebar.html">Page with Right Sidebar</a></li>
                                <li><a href="page_with_minified_sidebar.html">Page with Minified Sidebar</a></li>
                                <li><a href="page_with_two_sidebar.html">Page with Two Sidebar</a></li>
                                <li><a href="page_with_top_menu.html">Page with Top Menu</a></li>
                                <li><a href="page_with_mixed_menu.html">Page with Mixed Menu</a></li>
                                <li><a href="page_with_boxed_layout.html">Page with Boxed Layout</a></li>
                                <li><a href="page_boxed_mixed_menu.html">Boxed Layout with Mixed Menu</a></li>
                                <li><a href="page_without_sidebar.html">Page without Sidebar</a></li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a href="javascript:;">
                                <b class="caret pull-right"></b>
                                <i class="fa fa-cubes"></i>
                                <span>Version</span>
                            </a>
                            <ul class="sub-menu">
                                <li><a href="javascript:;">HTML</a></li>
                                <li><a href="http://seantheme.com/source-admin-v1.2.1/admin/angular/index.html">Angular JS</a></li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a href="javascript:;">
                                <b class="caret pull-right"></b>
                                <i class="fa fa-medkit"></i>
                                <span>Helper</span>
                            </a>
                            <ul class="sub-menu">
                                <li><a href="helper_css.html">Predefined CSS Classes</a></li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a href="javascript:;">
                                <b class="caret pull-right"></b>
                                <i class="fa fa-align-left"></i> 
                                <span>Menu Level</span>
                            </a>
                            <ul class="sub-menu">
                                <li class="has-sub">
                                    <a href="javascript:;">
                                        <b class="caret pull-right"></b>
                                        Menu 1.1
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="has-sub">
                                            <a href="javascript:;">
                                                <b class="caret pull-right"></b>
                                                Menu 2.1
                                            </a>
                                            <ul class="sub-menu">
                                                <li><a href="javascript:;">Menu 3.1</a></li>
                                                <li><a href="javascript:;">Menu 3.2</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="javascript:;">Menu 2.2</a></li>
                                        <li><a href="javascript:;">Menu 2.3</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:;">Menu 1.2</a></li>
                                <li><a href="javascript:;">Menu 1.3</a></li>
                            </ul>
                        </li>
                        <li class="divider has-minify-btn">
                            <!-- begin sidebar minify button -->
                            <a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-left"></i></a>
                            <!-- end sidebar minify button -->
                        </li>
                        <li class="nav-header">Projects</li>
                        <li class="nav-project">
                            <ul class="project-list">
                                <li>
                                    <div class="icon"><i class="fa fa-circle-o text-success"></i></div>
                                    <div class="info">
                                        <div class="title"><a href="javascript:;">iPhone Apps Development</a></div>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-success" style="width: 60%"></div>
                                        </div>
                                        <div class="desc">Donec tristique malesuada nibh quis lobortis. Quisque viverra faucibus hendrerit.</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon"><i class="fa fa-circle-o text-danger"></i></div>
                                    <div class="info">
                                        <div class="title"><a href="javascript:;">Website Redesign</a></div>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-danger" style="width: 30%"></div>
                                        </div>
                                        <div class="desc">Integer fermentum arcu et dolor sodales, quis laoreet justo aliquam.</div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <!-- end sidebar nav -->
                </div>
                <!-- end sidebar scrollbar -->
            </div>
            <div class="sidebar-bg"></div>
            <!-- end #sidebar -->

            <!-- begin #content -->
            <div id="content" class="content">
                <!-- end breadcrumb -->
                <!-- begin page-header -->

                <!-- end page-header -->

                <!-- begin section-container -->
                <div class="section-container section-with-top-border">
                    <!-- begin panel -->
                    <!-- begin form-wizard -->
                    <form action="http://seantheme.com/" method="POST" data-parsley-validate="true" name="form-wizard" class="form-input-flat">
                        <!-- begin rough_table -->





 <div class="col-xs-8 col-xs-offset-2 well">
    <table class="table table-scroll table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>County</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Andrew</td>
                <td>Jackson</td>
                <td>Washington</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Thomas</td>
                <td>Marion</td>
                <td>Jackson</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Benjamin</td>
                <td>Warren</td>
                <td>Lincoln</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Grant</td>
                <td>Wayne</td>
                <td>Union</td>
            </tr>
            <tr>
                <td>5</td>
                <td>John</td>
                <td>Adams</td>
                <td>Marshall</td>
            </tr>
            <tr>
                <td>6</td>
                <td>Morgan</td>
                <td>Lee</td>
                <td>Lake</td>
            </tr>
            <tr>
                <td>7</td>
                <td>John</td>
                <td>Henry</td>
                <td>Brown</td>
            </tr>
            <tr>
                <td>8</td>
                <td>William</td>
                <td>Jacob</td>
                <td>Orange</td>
            </tr>
            <tr>
                <td>9</td>
                <td>Kelly</td>
                <td>Davidson</td>
                <td>Taylor</td>
            </tr>
            <tr>
                <td>10</td>
                <td>Colleen</td>
                <td>Hurst</td>
                <td>Randolph</td>
            </tr>
            <tr>
                <td>11</td>
                <td>Rhona</td>
                <td>Herrod</td>
                <td>Cumberland</td>
            </tr>
            <tr>
                <td>12</td>
                <td>Jane</td>
                <td>Paul</td>
                <td>Marshall</td>
            </tr>
            <tr>
                <td>13</td>
                <td>Ashton</td>
                <td>Fox</td>
                <td>Calhoun</td>
            </tr>
            <tr>
                <td>14</td>
                <td>Garrett</td>
                <td>John</td>
                <td>Madison</td>
            </tr>
            <tr>
                <td>15</td>
                <td>Fredie</td>
                <td>Winters</td>
                <td>Washington</td>
            </tr>
        </tbody>
    </table>
</div>








                        <!-- end rough_table -->
                    </form>
                    <!-- end form-wizard -->
                    <!-- end panel -->
                </div>
                <!-- end section-container -->

                <!-- begin #footer -->
                <div id="footer" class="footer">
                    <span class="pull-right">
                        <a href="javascript:;" class="btn-scroll-to-top" data-click="scroll-top">
                            <i class="fa fa-arrow-up"></i> <span class="hidden-xs">Back to Top</span>
                        </a>
                    </span>
                    &copy; 2015 <b>Source Admin</b> All Right Reserved
                </div>
                <!-- end #footer -->
            </div>
            <!-- end #content -->

            <!-- begin #sidebar-right -->
            <div id="sidebar-right" class="sidebar sidebar-right">
                <!-- begin sidebar scrollbar -->
                <div data-scrollbar="true" data-height="100%">
                    <!-- begin sidebar-nav -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="width-half active"><a href="#today" data-toggle="tab">Today</a></li>
                        <li class="width-half"><a href="#notifications" data-toggle="tab">Notifications</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="today">
                            <ul class="nav">
                                <li class="nav-date">
                                    Sunday, May 31 st
                                </li>
                                <li class="divider"></li>
                                <li class="nav-header">Stocks</li>
                                <li>
                                    <ul class="stock-list">
                                        <li>
                                            <div class="name">AAPL</div>
                                            <div class="value">130.28</div>
                                            <div class="percentage"><span class="label label-inverse">- 1.14%</span></div>
                                        </li>
                                        <li>
                                            <div class="name">DOWJ</div>
                                            <div class="value">18010.68</div>
                                            <div class="percentage"><span class="label label-inverse">- 0.64%</span></div>
                                        </li>
                                        <li>
                                            <div class="name">SBUX</div>
                                            <div class="value">51.96</div>
                                            <div class="percentage"><span class="label label-success">+ 0.29%</span></div>
                                        </li>
                                        <li>
                                            <div class="name">NKE</div>
                                            <div class="value">18010.68</div>
                                            <div class="percentage"><span class="label label-inverse">- 0.62%</span></div>
                                        </li>
                                        <li>
                                            <div class="name">YHOO</div>
                                            <div class="value">42.94</div>
                                            <div class="percentage"><span class="label label-inverse">- 0.31%</span></div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="divider"></li>
                                <li class="nav-header">Calendar</li>
                                <li>
                                    <div id="schedule-calendar"></div>
                                </li>
                                <li class="divider"></li>
                                <li class="nav-header">Latest Post</li>
                                <li>
                                    <ul class="nav-post">
                                        <li>
                                            <div class="image">
                                                <img src="assets/img/latest_post_1.jpg" alt="" />
                                            </div>
                                            <div class="info">
                                                <div class="title">Mauris ac condimentum erat. Curabitur porta pretium ultricies.</div>
                                                <div class="time">Today, 8.12am</div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="image">
                                                <img src="assets/img/latest_post_2.jpg" alt="" />
                                            </div>
                                            <div class="info">
                                                <div class="title">Cras pretium ipsum vel nulla laoreet malesuada sed at turpis.</div>
                                                <div class="time">Yesterday, 11.42pm</div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="image">
                                                <img src="assets/img/latest_post_3.jpg" alt="" />
                                            </div>
                                            <div class="info">
                                                <div class="title">Ut sit amet vulputate ante. Nunc quis convallis arcu.</div>
                                                <div class="time">Posted on 3 days ago</div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="divider"></li>
                            </ul>
                        </div>
                        <div class="tab-pane" id="notifications">
                            <ul class="nav">
                                <li class="nav-header">Mailbox</li>
                                <li>
                                    <ul class="notification-list">
                                        <li>
                                            <div class="media"><i class="fa fa-check"></i></div>
                                            <div class="info">
                                                <div class="title"><a href="javascript:;">PHP version updated</a></div>
                                                <div class="time">Yesterday, 6.06pm</div>
                                                <div class="desc">Donec tristique malesuada nibh quis lobortis. Quisque viverra faucibus hendrerit.</div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media"><i class="fa fa-bug text-danger"></i></div>
                                            <div class="info">
                                                <div class="title"><a href="javascript:;">10 Unknown mysql query detected</a></div>
                                                <div class="time">Yesterday, 12.05am</div>
                                                <div class="desc">Integer fermentum arcu et dolor sodales, quis laoreet justo aliquam.</div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media"><img src="assets/img/user_2.jpg" alt="" /></div>
                                            <div class="info">
                                                <div class="title"><a href="javascript:;">New email from David</a></div>
                                                <div class="time">Just now</div>
                                                <div class="desc">Nunc metus orci, lobortis eu luctus quis, dictum mollis ante.</div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media"><img src="assets/img/user_4.jpg" alt="" /></div>
                                            <div class="info">
                                                <div class="title"><a href="javascript:;">New email from Terry</a></div>
                                                <div class="time">Today, 12.05am</div>
                                                <div class="desc">Integer fermentum arcu et dolor sodales, quis laoreet justo aliquam.</div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media"><img src="assets/img/user_3.jpg" alt="" /></div>
                                            <div class="info">
                                                <div class="title"><a href="javascript:;">New email from Tom (2)</a></div>
                                                <div class="time">Yesterday, 5.23pm</div>
                                                <div class="desc">Integer fermentum arcu et dolor sodales, quis laoreet justo aliquam.</div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="divider"></li>
                                <li class="nav-header">Activities Log</li>
                                <li>
                                    <ul class="notification-list">
                                        <li>
                                            <div class="media"><i class="fa fa-cog"></i></div>
                                            <div class="info">
                                                <div class="title"><a href="javascript:;">Your scheduled post has been published</a></div>
                                                <div class="time">Just now</div>
                                                <div class="desc">Aenean lobortis libero libero, vitae imperdiet dolor dictum id.</div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media"><i class="fa fa-shield"></i></div>
                                            <div class="info">
                                                <div class="title"><a href="javascript:;">Turn on the firewall</a></div>
                                                <div class="time">Today, 7.08am</div>
                                                <div class="desc">Donec at augue in mi egestas luctus fermentum et ex.</div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media"><i class="fa fa-user-plus"></i></div>
                                            <div class="info">
                                                <div class="title"><a href="javascript:;">Added 2 admin user</a></div>
                                                <div class="time">Today, 6.40am</div>
                                                <div class="desc">Quisque elementum urna placerat mi vestibulum lacinia.</div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="divider"></li>
                            </ul>
                        </div>
                    </div>
                    <!-- end sidebar-nav -->
                </div>
                <!-- end sidebar scrollbar -->
            </div>
            <div class="sidebar-bg sidebar-right"></div>
            <!-- end #sidebar-right -->
        </div>
        <!-- end page container -->

        <!-- begin theme-panel -->
        <div class="theme-panel">
            <a href="javascript:;" data-click="theme-panel-expand" class="theme-collapse-btn"><i class="fa fa-tint"></i></a>
            <div class="theme-panel-content">
                <h5 class="m-t-0">Font Family</h5>
                <div class="row row-space-10">
                    <div class="col-md-6">
                        <a href="#" class="btn btn-default btn-block btn-sm m-b-10 active" data-value="" data-src="http://fonts.googleapis.com/css?family=Nunito:400,300,700" data-click="body-font-family">
                            Nunito (Default)
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="#" class="btn btn-default btn-block btn-sm m-b-10" data-value="font-open-sans" data-src="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" data-click="body-font-family">
                            Open Sans
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="#" class="btn btn-default btn-block btn-sm m-b-10" data-value="font-roboto" data-src="https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900" data-click="body-font-family">
                            Roboto
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="#" class="btn btn-default btn-block btn-sm m-b-10" data-value="font-lato" data-src="https://fonts.googleapis.com/css?family=Lato:400,100,300,700,900" data-click="body-font-family">
                            Lato
                        </a>
                    </div>
                    <div class="col-md-12">
                        <a href="#" class="btn btn-default btn-block btn-sm" data-value="font-helvetica-arial" data-src="" data-click="body-font-family">
                            Helvetica Neue, Helvetica , Arial
                        </a>
                    </div>
                </div>
                <div class="horizontal-divider"></div>
                <h5 class="m-t-0">Header Theme</h5>
                <ul class="theme-list clearfix">
                    <li><a href="javascript:;" class="bg-inverse" data-value="navbar-inverse" data-click="header-theme-selector" data-toggle="tooltip" data-title="Default">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-grey" data-value="navbar-grey" data-click="header-theme-selector" data-toggle="tooltip" data-title="Grey">&nbsp;</a></li>
                    <li class="active"><a href="javascript:;" class="bg-white" data-value="navbar-default" data-click="header-theme-selector" data-toggle="tooltip" data-title="Light">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-purple" data-value="navbar-purple" data-click="header-theme-selector" data-toggle="tooltip" data-title="Purple">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-primary" data-value="navbar-primary" data-click="header-theme-selector" data-toggle="tooltip" data-title="Primary">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-success" data-value="navbar-success" data-click="header-theme-selector" data-toggle="tooltip" data-title="Success">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-lime" data-value="navbar-lime" data-click="header-theme-selector" data-toggle="tooltip" data-title="Lime">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-warning" data-value="navbar-warning" data-click="header-theme-selector" data-toggle="tooltip" data-title="Warning">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-danger" data-value="navbar-danger" data-click="header-theme-selector" data-toggle="tooltip" data-title="Danger">&nbsp;</a></li>
                </ul>
                <div class="horizontal-divider"></div>
                <h5 class="m-t-0">Sidebar Highlight Color</h5>
                <ul class="theme-list clearfix">
                    <li><a href="javascript:;" class="bg-inverse" data-value="sidebar-highlight-inverse" data-click="sidebar-highlight-selector" data-toggle="tooltip" data-title="Inverse">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-grey" data-value="sidebar-highlight-grey" data-click="sidebar-highlight-selector" data-toggle="tooltip" data-title="Grey">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-white" data-value="sidebar-highlight-light" data-click="sidebar-highlight-selector" data-toggle="tooltip" data-title="Light">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-purple" data-value="sidebar-highlight-purple" data-click="sidebar-highlight-selector" data-toggle="tooltip" data-title="Purple">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-primary" data-value="sidebar-highlight-primary" data-click="sidebar-highlight-selector" data-toggle="tooltip" data-title="Primary">&nbsp;</a></li>
                    <li class="active"><a href="javascript:;" class="bg-success" data-value="" data-click="sidebar-highlight-selector" data-toggle="tooltip" data-title="Default">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-lime" data-value="sidebar-highlight-lime" data-click="sidebar-highlight-selector" data-toggle="tooltip" data-title="Lime">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-warning" data-value="sidebar-highlight-warning" data-click="sidebar-highlight-selector" data-toggle="tooltip" data-title="Warning">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-danger" data-value="sidebar-highlight-danger" data-click="sidebar-highlight-selector" data-toggle="tooltip" data-title="Danger">&nbsp;</a></li>
                </ul>
                <div class="horizontal-divider"></div>
                <h5 class="m-t-0">Sidebar Theme</h5>
                <ul class="theme-list clearfix">
                    <li class="active"><a href="javascript:;" class="bg-inverse" data-value="" data-click="sidebar-theme-selector" data-toggle="tooltip" data-title="Default">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-grey" data-value="sidebar-grey" data-click="sidebar-theme-selector" data-toggle="tooltip" data-title="Grey">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-white" data-value="sidebar-light" data-click="sidebar-theme-selector" data-toggle="tooltip" data-title="Light">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-purple" data-value="sidebar-purple" data-click="sidebar-theme-selector" data-toggle="tooltip" data-title="Purple">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-primary" data-value="sidebar-primary" data-click="sidebar-theme-selector" data-toggle="tooltip" data-title="Primary">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-success" data-value="sidebar-success" data-click="sidebar-theme-selector" data-toggle="tooltip" data-title="Success">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-lime" data-value="sidebar-lime" data-click="sidebar-theme-selector" data-toggle="tooltip" data-title="Lime">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-warning" data-value="sidebar-warning" data-click="sidebar-theme-selector" data-toggle="tooltip" data-title="Warning">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-danger" data-value="sidebar-danger" data-click="sidebar-theme-selector" data-toggle="tooltip" data-title="Danger">&nbsp;</a></li>
                </ul>
            </div>
        </div>
        <!-- end theme-panel -->

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
        <script src="{{URL::asset('ap/assets/plugins/bootstrap-wizard/js/bwizard.js')}}"></script>
        <script src="{{URL::asset('ap/assets/js/page-form-wizards.demo.min.js')}}"></script>
        <script src="{{URL::asset('ap/assets/plugins/DataTables/media/js/jquery.dataTables.js')}}"></script>
        <script src="{{URL::asset('ap/assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js')}}"></script>
        <script src="{{URL::asset('ap/assets/plugins/DataTables/extensions/FixedColumns/js/dataTables.fixedColumns.min.js')}}"></script>
        <script src="{{URL::asset('ap/assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js')}}"></script>
        <script src="{{URL::asset('ap/assets/js/page-table-manage-fixed-columns.demo.min.js')}}"></script>
        <script src="{{URL::asset('ap/assets/js/demo.min.js')}}"></script>
        <script src="{{URL::asset('ap/assets/js/apps.min.js')}}"></script>
        <!-- ================== END PAGE LEVEL JS ================== -->

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
    </body>

    <!-- Mirrored from seantheme.com/source-admin-v1.2.1/admin/html/table_manage_fixed_columns.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Aug 2016 06:25:26 GMT -->
</html>
