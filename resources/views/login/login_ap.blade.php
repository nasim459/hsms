<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Mirrored from seantheme.com/source-admin-v1.2.1/admin/html/extra_login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Aug 2016 06:26:55 GMT -->
<head>
	<meta charset="utf-8" />
	<title> Login | Admin </title>
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
	    <!-- begin login -->
		<div class="login">
		    <!-- begin login-brand -->
            <div class="login-brand bg-inverse text-white">
                <i class="fa fa-power-off pull-right m-t-10"></i> Login Panel
            </div>
		    <!-- end login-brand -->
		    <!-- begin login-content -->
            <div class="login-content">
                <div>
                    <div>
                        <h4 class="text-center text-success m-t-0 m-b-40">Housing Society Management System</h4>
                    </div>
                    <div>
                        <h4 class="text-center text-danger m-t-0 m-b-20">
                        {{Session::get('wrong_entry')}}{{Session::put('wrong_entry', '')}}
                        </h4>
                    </div>
                </div>
                
                
                {!! Form::open(array('url'=>'signin-panel-check', 'role'=>'form', 'method'=>'POST')) !!}
                <span class="form-input-flat">
                    <div class="form-group">
                        <input type="email" name="username" class="form-control input-lg" placeholder="Email Address" />
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control input-lg" placeholder="Password" />
                    </div>
                    <div class="row m-b-20">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-lime btn-lg btn-block">Sign In</button>
                    </div>
                </span>
                {!! Form::close() !!}
            </div>
		    <!-- end login-content -->
		</div>
		<!-- end login -->
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
    <script src="{{URL::asset('ap/assets/js/demo.min.js')}}"></script>
    <script src="{{URL::asset('ap/assets/js/apps.min.js')}}"></script>
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

<!-- Mirrored from seantheme.com/source-admin-v1.2.1/admin/html/extra_login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 Aug 2016 06:26:55 GMT -->
</html>