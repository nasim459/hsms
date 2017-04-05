

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
                <div class="logo"><a href="{{URL::to('rental_dboard')}}"><img src="fe/images/logo-3.png" alt="Bulldozer" title="Dream Land"></a></div>

                <!--Right Container-->

                <!-- Main Menu -->
                <nav class="main-menu">
                    <div class="navbar-header">
                        <!-- Toggle Button -->    	
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <div class="navbar-collapse collapse clearfix">
                        <ul class="navigation">
                            <li class="current dropdown"><a href="{{URL::to('rental_dboard')}}">Home</a>

                            </li>
                            <li class="dropdown"><a href="{{URL::to('rental-profile')}}">Profile</a>

                            </li>
                            <li class="dropdown"><a href="{{URL::to ('rental-peyment')}}">Payment History </a>



                            </li>
                            <li><a href="{{URL::to('chat')}}">Chat </a></li>
                            <li><a href="{{URL::to('rental-logout')}}">Logout</a></li>
                        </ul>
                    </div>
                </nav><!-- Main Menu End-->
            </div>    
        </div>

    </div>


</header>
<!--End Main Header -->