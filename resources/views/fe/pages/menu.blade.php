@extends('fe.master_fe')
@section('menu')
<div class="header-lower">
    <div class="auto-container">
        <div class="lower-outer clearfix">
            <!--Logo-->
            <div class="logo"><a href="{{URL::to('/fee')}}"><img src="fe/images/logo-3.png" alt="Bulldozer" title="Dream Land"></a></div>

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
                        <li class="current dropdown"><a href="{{URL::to('/fee')}}">Home</a>

                        </li>
                        <li class="dropdown"><a href="{{URL::to('/fee')}}">Pages</a>

                        </li>
                        <li><a href="about.html">About US</a></li>
                        <li class="dropdown"><a href="gallery.html">Gallery</a>
                            <ul>
                                <li><a href="gallery.html">Gallery Full Width</a></li>
                                <li><a href="gallery-2.html">Gallery Boxed</a></li>
                            </ul>
                        </li>
                        <li><a href="video-tour.html">Video Tour</a></li>
                        <li class="dropdown"><a href="blog.html">Blog</a>
                            <ul>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="blog-two-column.html">Blog Two Column</a></li>
                                <li><a href="blog-detail.html">Blog Details</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact Us</a></li>
                    </ul>
                </div>
            </nav><!-- Main Menu End-->
        </div>    
    </div>

</div>
@endsection