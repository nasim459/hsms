<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Mirrored from seantheme.com/source-admin-v1.2.1/admin/html/extra_register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Aug 2016 06:26:55 GMT -->
<head>
	<meta charset="utf-8" />
	<title>Registration</title>
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
	<!-- ================== END BASE CSS STYLE ================== -->
    
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="{{URL::asset('ap/assets/plugins/pace/pace.min.js')}}"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!--[if lt IE 9]>
	    <script src="assets/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
</head>
<body class="pace-top">
	<!-- begin #page-loader -->
	<!-- <div id="page-loader" class="page-loader fade in"><span class="spinner">Loading...</span></div> -->
	<!-- end #page-loader -->

	<!-- begin #page-container -->
	<div id="page-container" class="fade page-container">
	    <!-- begin register -->
		<div class="register">
		    <!-- begin register-brand -->
            <div class="register-brand bg-inverse text-white">
                <img src="{{URL::asset('ap/assets/img/logo-white.png')}}" height="36" class="pull-right" alt="" /> Registration Form
            </div>
            <!-- end register-brand -->
            <!-- begin register-content -->
            <div class="register-content">
                <h4 class="m-t-0 m-b-5">Great to see you here!</h4>
                <p class="m-b-20">Create your Source Admin Account. It’s free and always will be.</p>
                
                <form action="http://seantheme.com/source-admin-v1.2.1/admin/html/index.html" method="POST" name="register_form" class="form-input-flat">
                    <div class="row row-space-14">
                        <div class="col-md-6 m-b-15">
                            <input type="text" class="form-control input-lg" placeholder="First Name" />
                        </div>
                        <div class="col-md-6 m-b-15">
                            <input type="text" class="form-control input-lg" placeholder="Last Name" />
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control input-lg" placeholder="Email Address" />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control input-lg" placeholder="Password" />
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control input-lg" placeholder="Re-enter Password" />
                    </div>
                    <div class="checkbox m-b-15">
                        <label>
                            <input type="checkbox"> By creating an account, you agree to our <a href="#" class="text-muted">Terms and condition</a> and <a href="#" class="text-muted">Privacy Policy</a>.
                        </label>
                    </div>
                    <div class="row m-b-15">
                        <div class="col-md-12">
                            <!--<button type="submit" class="btn btn-lime btn-lg btn-block">Register</button>-->
                            <a href="{{URL::to('dboard')}}" type="submit" class="btn btn-lime btn-lg btn-block">Register</a>
                        </div>
                    </div>
                    <div class="text-center">
                        Already a member? <a href="{{URL::to('signin-panel-hsms')}}" class="text-muted">Login with your account</a>
                    </div>
                </form>
            </div>
            <!-- end register-content -->
		</div>
		<!-- end register -->
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
    <script src="{{URL::asset('ap/assets/js/apps.min.js')}}"></script>
    <script src="{{URL::asset('ap/assets/js/demo.min.js')}}"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	
	<script>
		$(document).ready(function() {
		    App.init();
		    Demo.initThemePanel();
		});
	</script>
	<script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','../../../../www.google-analytics.com/analytics.js','ga');
    
      ga('create', 'UA-53034621-1', 'auto');
      ga('send', 'pageview');
    </script>
</body>

<!-- Mirrored from seantheme.com/source-admin-v1.2.1/admin/html/extra_register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Aug 2016 06:26:55 GMT -->
</html>
