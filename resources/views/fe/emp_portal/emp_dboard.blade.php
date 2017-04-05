
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Empployee Dash Board</title>
        <!-- Stylesheets -->
        <link href="fe/css/bootstrap.css" rel="stylesheet">
        <link href="fe/css/revolution-slider.css" rel="stylesheet">
        <link href="fe/css/style.css" rel="stylesheet">
        <!-- Responsive -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <link href="fe/css/responsive.css" rel="stylesheet">
        <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
        <!--[if lt IE 9]><script src="fe/js/respond.js"></script><![endif]-->
    </head>

    <body>
        <div class="page-wrapper">

            <!-- Preloader -->
            <!--            <div class="preloader"></div>-->

            <!-- Main Header / Header Style Two-->
            <header class="main-header header-style-two">
                <!-- Header Top -->
                <div class="header-top">
                    <div class="auto-container clearfix">

                        <!-- Top Right -->
                        <div class="top-right">

                            <!--Info-->
                            <ul class="info pull-left clearfix">
                                <li class="email"><a href="mailto:mdnasim.info@gmail.com"><span class="icon flaticon-email2"></span> mdnasim.info@gmailcom</a></li>
                                <li class="phone"><a href="index.html#"><span class="icon flaticon-phone325"></span> (880) 1777 888 757</a></li>
                            </ul>

                            <!--Social Links-->
                            <div class="social-links pull-left clearfix">
                                <a href="index.html#"><span class="fa fa-facebook-f"></span></a>
                                <a href="index.html#"><span class="fa fa-twitter"></span></a>
                                <a href="index.html#"><span class="fa fa-linkedin"></span></a>
                                <a href="index.html#"><span class="fa fa-google-plus"></span></a>
                            </div>

                        </div>

                    </div>
                </div>

                <!-- Header Lower -->
                <div class="header-lower">
                    <div class="auto-container">
                        <div class="lower-outer clearfix">
                            <!--Logo-->
                            <div class="logo"><a href="{{URL::to('emp_dboard')}}"><img src="fe/images/logo-3.png" alt="Bulldozer" title="Dream Land"></a></div>

                            <!--Right Container-->

                          @yield('menu')
                            
                        </div>    
                    </div>

                </div>


            </header>
            <!--End Main Header -->
            <!--------------------------------------------------------------------------------------------------------->
            @yield('maincontent');
            <!------------------------------------------------------------------------------------------------------------>





            <!--Contact Section-->
            <section class="default-section faded-section contact-section" style="background-image:url(fe/fe/images/background/contact-bg.jpg);">
                <div class="auto-container">


                    <!--Separator-->
                    <div class="separator big-separator"></div>

                    <!--Footer Content-->
                    <div class="footer-content">
                        <div class="social-links">
                            <a href="index.html#"><span class="fa fa-facebook-f"></span></a>
                            <a href="index.html#"><span class="fa fa-twitter"></span></a>
                            <a href="index.html#"><span class="fa fa-linkedin"></span></a>
                            <a href="index.html#"><span class="fa fa-google-plus"></span></a>
                        </div>

                        <div class="copyright">&copy; 2015 DREAM LAND All Right Reserved </div>
                    </div>

                </div>
            </section>

        </div>
        <!--End pagewrapper-->

        <!--Scroll to top-->
        <div class="scroll-to-top"><span class="fa fa-arrow-up"></span></div>

        <script src="fe/js/jquery.js"></script> 
        <script src="fe/js/bootstrap.min.js"></script>
        <script src="fe/js/revolution.min.js"></script>
        <script src="fe/js/jquery.mixitup.js"></script>
        <script src="fe/js/jquery.fancybox.pack.js"></script>
        <script src="fe/js/owl.js"></script>
        <script src="fe/js/validate.js"></script>
        <script src="http://maps.google.com/maps/api/js"></script>
        <script src="fe/js/googlemaps.js"></script>
        <script src="fe/js/wow.js"></script>
        <script src="fe/js/script.js"></script>
        <!--Start of Tawk.to Script-->
        <script type="text/javascript">
var $_Tawk_API = {}, $_Tawk_LoadStart = new Date();
(function () {
    var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
    s1.async = true;
    s1.src = 'https://embed.tawk.to/569cfc09aeafd72017dd6ea9/default';
    s1.charset = 'UTF-8';
    s1.setAttribute('crossorigin', '*');
    s0.parentNode.insertBefore(s1, s0);
})();
        </script>
        <!--End of Tawk.to Script-->

        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-15521914-3', 'auto');
            ga('send', 'pageview');

        </script>

    </body>
</html>
