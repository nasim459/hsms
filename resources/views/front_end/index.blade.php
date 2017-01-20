<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Housing Society Management System </title>
<!-- Stylesheets -->
<link href="front_end/css/bootstrap.css" rel="stylesheet">
<link href="front_end/css/revolution-slider.css" rel="stylesheet">
<link href="front_end/css/style.css" rel="stylesheet">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link href="front_end/css/responsive.css" rel="stylesheet">
<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<!--[if lt IE 9]><script src="front_end/js/respond.js"></script><![endif]-->
</head>

<body>
<div class="page-wrapper">
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	
    <!-- Main Header / One Page Header-->
    <header class="main-header header-style-one one-page-header">
    	<div class="auto-container">
        	<div class="outer-box clearfix">
            	<!--Logo-->
                <div class="logo"><a href="{{URL::to('front-end')}}"><img src="front_end/images/logo-1.png" alt="Logo"></a></div>
                
                <!--Header Right-->
                <div class="header-right clearfix">
                	<!--Info Box-->
                    <div class="info-box clearfix">
                    	<ul class="clearfix">
                        	<li class="address"><div class="icon"><span class="flaticon-location74"></span></div>Mirpur New Bazar Road, <br>Block-c, Dhaka-1210</li>
                            <li class="separator"></li>
                            <li class="contact-info"><div class="icon"><span class="flaticon-telephone51"></span></div><a href="#">(732) 803-01 03</a> <br><a href="mailto:companymail@gmail.com">companymail@gmail.com</a></li>
                            <li class="contact-info"><a href="#" class="theme-btn btn-style-one">Contact Now</a></li>
                        </ul>
                    </div>
                    
                    <span class="clearfix"></span>
                    
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
                            <ul class="navigation one-page-nav clearfix">
                                <li class="current dropdown"><a href="#slider-section">Home</a>
                                	
                                </li>
                                <li><a href="#about-section">About Us</a></li>
                                <li><a href="#properties-section">Properties</a></li>
                                <li><a href="#gallery-section">Gallery</a></li>
                                <li><a href="#agent-section">Agent</a></li>
                                <li><a href="#testimonials-section">Testimonials</a></li>
                                <li><a href="#contact-section">Contact Us</a></li>
                            </ul>
                        </div>
                    </nav><!-- Main Menu End-->
                    
                </div>
            </div>
        </div>
    </header>
    <!--End Main Header -->
    
    
    <!--Main Slider-->
    <section class="main-slider" id="slider-section">
    	
        <div class="tp-banner-container">
            <div class="tp-banner">
                <ul>
                	
                    <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="front_end/images/main-slider/1.jpg"  data-saveperformance="off"  data-title="We are Awsome">
                    <img src="front_end/images/main-slider/1.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"> 
                    
                    <div class="tp-caption lfl tp-resizeme"
                    data-x="left" data-hoffset="15"
                    data-y="center" data-voffset="70"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"
                    style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;">
                    	<div class="bg-green curve-right">
                        	<h2>DUPPLEX <br>780 MAIN ST</h2>
                            <span class="discount">20% OFF</span>
                            <p class="price">$560,000</p>
                            <a href="#" class="theme-btn btn-style-two">VIEW DETAILS</a>
                            
                            <span class="curve"></span>
                        </div>
                    </div>
                    
                    </li>
                    
                    <li data-transition="slidedown" data-slotamount="1" data-masterspeed="1000" data-thumb="front_end/images/main-slider/4.jpg"  data-saveperformance="off"  data-title="We are Awsome">
                    <img src="front_end/images/main-slider/4.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"> 
                    
                    <div class="tp-caption lfb tp-resizeme"
                    data-x="center" data-hoffset="0"
                    data-y="bottom" data-voffset="1"
                    data-speed="1500"
                    data-start="500"
                    data-easing="Power3.easeOut"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"
                    style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;">
                    	<div class="bg-grey curve-top">
                        	<div class="outer-box clearfix">
                            	<div class="column title-column"><h2><strong>DUPPLEX</strong> <br>780 MAIN ST</h2></div>
                                <div class="column info-column"><ul><li>3  Bebrooms</li> <li>2  Baths</li> <li>1  Kitchen</li></ul></div>
                                <div class="column price-column"><span class="discount">20% OFF</span><span class="price">$560,000</span></div>
                                <div class="column view-more"><a href="#" class="read-more">VIEW DETAILS</a></div>
                            </div>
                            
                            <span class="curve"></span>
                        </div>
                    </div>
                    
                    </li>
                    
                    <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="front_end/images/main-slider/2.jpg"  data-saveperformance="off"  data-title="We are Awsome">
                    <img src="front_end/images/main-slider/2.jpg"  alt=""  data-bgposition="center bottom" data-bgfit="cover" data-bgrepeat="no-repeat"> 
                    
                    <div class="tp-caption lfr tp-resizeme"
                    data-x="right" data-hoffset="-15"
                    data-y="center" data-voffset="70"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"
                    style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;">
                    	<div class="bg-white curve-left">
                        	<h2>DUPPLEX <br>780 MAIN ST</h2>
                            <span class="discount">20% OFF</span>
                            <p class="price">$560,000</p>
                            <a href="#" class="theme-btn btn-style-one">VIEW DETAILS</a>
                            
                            <span class="curve"></span>
                        </div>
                    </div>
                    
                    </li>
                    
                    
                    
                </ul>
                
            	<div class="tp-bannertimer"></div>
            </div>
        </div>
    </section>
    
    
    <!--About Section-->
    <section class="about-section" id="about-section">
    	<div class="auto-container">
        
            <!--Section Title-->
            <div class="sec-title">
                <h2>WELCOME TO <strong>DREAM</strong> <span class="light">LAND</span></h2>
                <div class="separator small-separator"></div>
                <div class="text"><p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words </p></div>
            </div>
            
            <!--Full Image Box-->
            <figure class="full-image-box"><img src="front_end/images/resource/featured-image-1.jpg" alt=""></figure>
            
            <div class="services-outer">
                <div class="row clearfix">
                    
                    <!--Column-->
                    <article class="col-md-4 col-sm-6 col-xs-12 column wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="icon-left"><span class="icon flaticon-check52"></span><span class="number">1</span></div>
                            <div class="content">
                                <h3>Largest Community</h3>
                                <p>Lorem ipsum dolor sit amet, et sectetu adipiscing elit, sed do lilae eiusmod at tempor.</p>
                            </div>
                        </div>
                    </article>
                    
                    <!--Column-->
                    <article class="col-md-4 col-sm-6 col-xs-12 column wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="icon-left"><span class="icon flaticon-check52"></span><span class="number">2</span></div>
                            <div class="content">
                                <h3>24 HOURS SERVICE</h3>
                                <p>Lorem ipsum dolor sit amet, et sectetu adipiscing elit, sed do lilae eiusmod at tempor.</p>
                            </div>
                        </div>
                    </article>
                    
                    <!--Column-->
                    <article class="col-md-4 col-sm-6 col-xs-12 column wow fadeInLeft" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="icon-left"><span class="icon flaticon-check52"></span><span class="number">3</span></div>
                            <div class="content">
                                <h3>LIFETIME SUPPORT</h3>
                                <p>Lorem ipsum dolor sit amet, et sectetu adipiscing elit, sed do lilae eiusmod at tempor.</p>
                            </div>
                        </div>
                    </article>
                    
                </div>
            </div>
            
        </div>
    </section>
    
    
    <!--Parallax Section-->
    <section class="parallax-section" style="background-image:url(front_end/images/parallax/image-1.jpg);">
    	<div class="auto-container">
        	<div class="text-center wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
            	<h2>Here will be <br>LOREM IPSUM HEADING</h2>
                <div class="text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered </div>
                <a class="theme-btn btn-style-one" href="#">Purchase Now</a>
                <a class="theme-btn btn-style-two" href="#">Learn More</a>
                
            </div>
        </div>
    </section>
    
    
    <!--Properties Section-->
    <section class="properties-section" id="properties-section">
    	<div class="auto-container">
        
            <!--Section Title-->
            <div class="sec-title">
                <h2>About <span class="theme_color">Property</span></h2>
                <div class="separator small-separator"></div>
                <div class="text"><p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words </p></div>
            </div>
            
            <div class="three-col-theme">
                <div class="row clearfix">
                    
                    <!--Column-->
                    <article class="col-md-4 col-sm-6 col-xs-12 column">
                        <div class="inner-box">
                            <div class="icon-left"><span class="icon flaticon-bedroom23"></span></div>
                            <div class="content">
                                <h3><span class="number">3</span> Bedrooms</h3>
                                <p>Lorem ipsum dolor sit amet, et sectetur adipiscing elit, sed do eiusmod tempor.</p>
                            </div>
                        </div>
                    </article>
                    
                    <!--Column-->
                    <article class="col-md-4 col-sm-6 col-xs-12 column">
                        <div class="inner-box">
                            <div class="icon-left"><span class="icon flaticon-geometry1"></span></div>
                            <div class="content">
                                <h3><span class="number">2530</span> Square Feet</h3>
                                <p>Lorem ipsum dolor sit amet, et sectetur adipiscing elit, sed do eiusmod tempor.</p>
                            </div>
                        </div>
                    </article>
                    
                    <!--Column-->
                    <article class="col-md-4 col-sm-6 col-xs-12 column">
                        <div class="inner-box">
                            <div class="icon-left"><span class="icon flaticon-calendar3"></span></div>
                            <div class="content">
                                <h3><span class="number">2010</span> Build Year</h3>
                                <p>Lorem ipsum dolor sit amet, et sectetur adipiscing elit, sed do eiusmod tempor.</p>
                            </div>
                        </div>
                    </article>
                    
                    <!--Column-->
                    <article class="col-md-4 col-sm-6 col-xs-12 column">
                        <div class="inner-box">
                            <div class="icon-left"><span class="icon flaticon-hygiene11"></span></div>
                            <div class="content">
                                <h3><span class="number">2</span> Baths</h3>
                                <p>Lorem ipsum dolor sit amet, et sectetur adipiscing elit, sed do eiusmod tempor.</p>
                            </div>
                        </div>
                    </article>
                    
                    <!--Column-->
                    <article class="col-md-4 col-sm-6 col-xs-12 column">
                        <div class="inner-box">
                            <div class="icon-left"><span class="icon flaticon-refrigerator8"></span></div>
                            <div class="content">
                                <h3><span class="number">2</span> Kitchen</h3>
                                <p>Lorem ipsum dolor sit amet, et sectetur adipiscing elit, sed do eiusmod tempor.</p>
                            </div>
                        </div>
                    </article>
                    
                    <!--Column-->
                    <article class="col-md-4 col-sm-6 col-xs-12 column">
                        <div class="inner-box">
                            <div class="icon-left"><span class="icon flaticon-transport913"></span></div>
                            <div class="content">
                                <h3><span class="number">1</span> Car Parking</h3>
                                <p>Lorem ipsum dolor sit amet, et sectetur adipiscing elit, sed do eiusmod tempor.</p>
                            </div>
                        </div>
                    </article>
                    
                </div>
            </div>
            
        </div>
    </section>
    
    
    <!--Property Details Section-->
    <section class="property-details" style="background-image:url(front_end/images/parallax/image-2.jpg);">
    	<div class="auto-container">
        	<div class="row clearfix">
            	
                <!--Left Column-->
                <div class="col-md-7 col-sm-12 col-xs-12 left-column">
                	<h2>Property Details</h2>
                    <!--Tabs Box-->
                    <div class="tabs-box">
                    	
                        <!--Tab Buttons-->
                        <div class="tab-buttons clearfix">
                        	<a href="#tab-one" class="tab-btn active-btn">INTERIOR DETAILS</a>
                            <a href="#tab-two" class="tab-btn">EXTERIOR DETAILS</a>
                            <a href="#tab-three" class="tab-btn">ROOM DIMENSIONS</a>
                        </div>
                        
                        <!--Tabs Content-->
                        <div class="tab-content">
                        	
                            <!--Tab / Active Tab-->
                            <div class="tab active-tab" id="tab-one">
                            	<h3>Interior Details</h3>
                                <div class="text">
                                	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim Lorem ipsum dolor sit amet,</p>
                                </div>
                                
                                <div class="row clearfix">
                                    <div class="column col-md-4 col-sm-4 col-xs-12">
                                    	<!--Styled List-->
                                        <ul class="styled-list">
                                            <li>Water Strg : 5000/ltr</li>
                                            <li>No of Floors : 2</li>
                                            <li>No Air Condition : 2</li>
                                        </ul>
                                    </div>
                                    
                                    <div class="column col-md-4 col-sm-4 col-xs-12">
                                    	<!--Styled List-->
                                        <ul class="styled-list">
                                            <li>Bathroom : 2</li>
                                            <li>No of Stair : 4</li>
                                            <li>No of Kitchen : 1</li>
                                        </ul>
                                    </div>
                                    
                                    <div class="column col-md-4 col-sm-4 col-xs-12">
                                    	<!--Styled List-->
                                        <ul class="styled-list">
                                        	<li>Bedrooms : 2</li>
                                            <li>Parking Capacity : 4</li>
                                            <li>Swimming Pool : 1</li>
                                        </ul>
                                    </div>
                                </div>
                                
                            </div>
                            
                            <!--Tab-->
                            <div class="tab" id="tab-two">
                            	<h3>Exterior Details</h3>
                                <div class="text">
                                	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim Lorem ipsum dolor sit amet,</p>
                                </div>
                                
                                <div class="row clearfix">
                                    <div class="column col-md-4 col-sm-4 col-xs-12">
                                    	<!--Styled List-->
                                        <ul class="styled-list">
                                            <li>Water Strg : 5000/ltr</li>
                                            <li>No of Floors : 2</li>
                                            <li>No Air Condition : 2</li>
                                        </ul>
                                    </div>
                                    
                                    <div class="column col-md-4 col-sm-4 col-xs-12">
                                    	<!--Styled List-->
                                        <ul class="styled-list">
                                            <li>Bathroom : 2</li>
                                            <li>No of Stair : 4</li>
                                            <li>No of Kitchen : 1</li>
                                        </ul>
                                    </div>
                                    
                                    <div class="column col-md-4 col-sm-4 col-xs-12">
                                    	<!--Styled List-->
                                        <ul class="styled-list">
                                        	<li>Bedrooms : 2</li>
                                            <li>Parking Capacity : 4</li>
                                            <li>Swimming Pool : 1</li>
                                        </ul>
                                    </div>
                                </div>
                                
                            </div>
                            
                            <!--Tab-->
                            <div class="tab" id="tab-three">
                            	<h3>Room Dimensions</h3>
                                <div class="text">
                                	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim Lorem ipsum dolor sit amet,</p>
                                </div>
                                
                                <div class="row clearfix">
                                    <div class="column col-md-4 col-sm-4 col-xs-12">
                                    	<!--Styled List-->
                                        <ul class="styled-list">
                                            <li>Water Strg : 5000/ltr</li>
                                            <li>No of Floors : 2</li>
                                            <li>No Air Condition : 2</li>
                                        </ul>
                                    </div>
                                    
                                    <div class="column col-md-4 col-sm-4 col-xs-12">
                                    	<!--Styled List-->
                                        <ul class="styled-list">
                                            <li>Bathroom : 2</li>
                                            <li>No of Stair : 4</li>
                                            <li>No of Kitchen : 1</li>
                                        </ul>
                                    </div>
                                    
                                    <div class="column col-md-4 col-sm-4 col-xs-12">
                                    	<!--Styled List-->
                                        <ul class="styled-list">
                                        	<li>Bedrooms : 2</li>
                                            <li>Parking Capacity : 4</li>
                                            <li>Swimming Pool : 1</li>
                                        </ul>
                                    </div>
                                </div>
                                
                            </div>
                        
                        
                        </div>
                    
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!--Gallery Section-->
    <section class="gallery-section full-width" id="gallery-section">
    	<div class="auto-container">
        
            <!--Section Title-->
            <div class="sec-title">
                <h2>Photo <span class="theme_color">Gallery</span></h2>
                <div class="separator small-separator"></div>
                <div class="text"><p>Contrary to popular belief, Lorem Ipsum is not simply random text. It’s long establised text.</p></div>
            </div>
            
            <!--Filter-->
            <div class="filters">
            	<ul class="filter-tabs clearfix anim-3-all">
                    <li class="filter" data-role="button" data-filter="all">All</li>
                    <li class="filter" data-role="button" data-filter=".bedroom">Bedroom</li>
                    <li class="filter" data-role="button" data-filter=".living-room">Living Room</li>
                    <li class="filter" data-role="button" data-filter=".kitchen">Kitchen</li>
                    <li class="filter" data-role="button" data-filter=".garage">Garage</li>
                </ul>
            </div>
            
        </div>
        
        <div class="images-container">
            <div class="filter-list clearfix">
                
                <!--Image Box-->
                <div class="image-box mix mix_all living-room kitchen garage">
                    <div class="inner-box">
                        <figure class="image"><a href="front_end/images/gallery/1.jpg" class="lightbox-image"><img src="front_end/images/gallery/1.jpg" alt=""></a></figure>
                        <a href="front_end/images/gallery/1.jpg" class="zoom-btn lightbox-image"><span class="icon flaticon-add30"></span></a>
                    </div>
                </div>
                
                <!--Image Box-->
                <div class="image-box mix mix_all bedroom kitchen garage">
                    <div class="inner-box">
                        <figure class="image"><a href="front_end/images/gallery/2.jpg" class="lightbox-image"><img src="front_end/images/gallery/2.jpg" alt=""></a></figure>
                        <a href="front_end/images/gallery/2.jpg" class="zoom-btn lightbox-image"><span class="icon flaticon-add30"></span></a>
                    </div>
                </div>
                
                <!--Image Box-->
                <div class="image-box mix mix_all bedroom garage">
                    <div class="inner-box">
                        <figure class="image"><a href="front_end/images/gallery/3.jpg" class="lightbox-image"><img src="front_end/images/gallery/3.jpg" alt=""></a></figure>
                        <a href="front_end/images/gallery/3.jpg" class="zoom-btn lightbox-image"><span class="icon flaticon-add30"></span></a>
                    </div>
                </div>
                
                <!--Image Box-->
                <div class="image-box mix mix_all bedroom living-room kitchen">
                    <div class="inner-box">
                        <figure class="image"><a href="front_end/images/gallery/4.jpg" class="lightbox-image"><img src="front_end/images/gallery/4.jpg" alt=""></a></figure>
                        <a href="front_end/images/gallery/4.jpg" class="zoom-btn lightbox-image"><span class="icon flaticon-add30"></span></a>
                    </div>
                </div>
                
                <!--Image Box-->
                <div class="image-box mix mix_all bedroom living-room garage">
                    <div class="inner-box">
                        <figure class="image"><a href="front_end/images/gallery/5.jpg" class="lightbox-image"><img src="front_end/images/gallery/5.jpg" alt=""></a></figure>
                        <a href="front_end/images/gallery/5.jpg" class="zoom-btn lightbox-image"><span class="icon flaticon-add30"></span></a>
                    </div>
                </div>
                
                <!--Image Box-->
                <div class="image-box mix mix_all living-room kitchen">
                    <div class="inner-box">
                        <figure class="image"><a href="front_end/images/gallery/6.jpg" class="lightbox-image"><img src="front_end/images/gallery/6.jpg" alt=""></a></figure>
                        <a href="front_end/images/gallery/6.jpg" class="zoom-btn lightbox-image"><span class="icon flaticon-add30"></span></a>
                    </div>
                </div>
                
                <!--Image Box-->
                <div class="image-box mix mix_all bedroom living-room garage">
                    <div class="inner-box">
                        <figure class="image"><a href="front_end/images/gallery/7.jpg" class="lightbox-image"><img src="front_end/images/gallery/7.jpg" alt=""></a></figure>
                        <a href="front_end/images/gallery/7.jpg" class="zoom-btn lightbox-image"><span class="icon flaticon-add30"></span></a>
                    </div>
                </div>
                
                <!--Image Box-->
                <div class="image-box mix mix_all bedroom living-room kitchen">
                    <div class="inner-box">
                        <figure class="image"><a href="front_end/images/gallery/8.jpg" class="lightbox-image"><img src="front_end/images/gallery/8.jpg" alt=""></a></figure>
                        <a href="front_end/images/gallery/8.jpg" class="zoom-btn lightbox-image"><span class="icon flaticon-add30"></span></a>
                    </div>
                </div>
                
            </div>
        </div>
        
        
    </section>
    
    <!--Intro Section-->
    <section class="intro-section">
    	<div class="auto-container">
        	<div class="outer-box clearfix">
            	<span class="anim-image wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1000ms"><img src="front_end/images/logo-2.png" alt=""></span>
                <div class="col-md-9 col-sm-7 col-xs-12">
                    <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled .</p>
                </div>
                <div class="col-md-3 col-sm-5 col-xs-12 text-right">
                	<a href="#" class="theme-btn btn-style-two">CONTACT NOW</a>
                </div>
            </div>
        </div>
    </section>
    
    
    
    <!--Agent Section-->
    <section class="agent-section" id="agent-section">
    	<div class="auto-container">
        	<div class="row clearfix">
            
            	<div class="column col-md-5 col-sm-12 col-xs-12">
                	<figure class="agent-image wow rollIn" data-wow-delay="300ms" data-wow-duration="1500ms"><a href="mailto:agentmail@mail.com"><img src="front_end/images/resource/image-1.jpg" class="img-circle" alt=""></a></figure>
                </div>
                
                <div class="column col-md-7 col-sm-12 col-xs-12">
                	<!--Bordered Title-->
                    <div class="bordered-title">
  						<h2>ABOUT <span class="theme_color">AGENT</span></h2>            
                    </div>
                    
                    <!--Agent Title-->
                    <div class="agent-headers">
  						<h3 class="name">Mark Pine</h3>
                        <p class="designation">Senior Agent of Dream land</p>                  
                    </div>
                    
                    <div class="desc-text">
                    	<p>But I must explain to you how all this mistaken idea of denouncing pleasure and the praising pain was born and I will give you a complete account of the system, and ip expound the actual teachings of the great explorer </p>
                    </div>
                    
                    <!--Info Box-->
                    <div class="info-box">
                    	<ul class="clearfix">
                        	<li class="address">
                            	<div class="icon"><span class="flaticon-location74"></span></div>
                                <h4>ADDRESS</h4>
								Mirpur New Bazar Road, Block-c, Dhaka-1210
                            </li>
                            <li class="contact-info">
                            	<div class="icon"><span class="flaticon-telephone51"></span></div>
                                <h4>PHONE</h4>
								(732) 803-01 03, (732) 806-01 04, (880)172380129
                            </li>
                        </ul>
                        
                        <a href="#" class="theme-btn btn-style-one">Contact Now</a>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    
    
    <!--Testimonials-->
    <section class="testimonials-section" id="testimonials-section" style="background-image:url(front_end/images/background/testimonials-bg.jpg);">
		<div class="auto-container">
            
            <div class="sec-title">
                <h2>WHAT <span class="theme_color">CLIENT</span> SAY</h2>
                <div class="separator small-separator"></div>
                <div class="text"><p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words </p></div>
            </div>
            
            <!--Slider-->      
        	<div class="testimonials-slider column-carousel three-column">
            	
                <!--Slide-->
                <article class="slide-item">
                	<figure class="image-box"><img src="front_end/images/resource/testi-image-1.jpg" alt=""></figure>
                    <div class="info-box">
                    	<h3>Jack Willshere</h3>
                        <p class="designation">Co- Founder at Houzz</p>
                    </div>
                    
                    <div class="slide-text">
                        <p>“We know that sometimes it’s difficult to get to the phone if you are in the middle of something and you don’t want to miss.”</p>
                    </div>
                </article>
                
                <!--Slide-->
                <article class="slide-item">
                	<figure class="image-box"><img src="front_end/images/resource/testi-image-2.jpg" alt=""></figure>
                    <div class="info-box">
                    	<h3>Missar Hub</h3>
                        <p class="designation">Co- Founder at Houzz</p>
                    </div>
                    
                    <div class="slide-text">
                        <p>“We know that sometimes it’s difficult to get to the phone if you are in the middle of something and you don’t want to miss.”</p>
                    </div>
                </article>
                
                <!--Slide-->
                <article class="slide-item">
                	<figure class="image-box"><img src="front_end/images/resource/testi-image-3.jpg" alt=""></figure>
                    <div class="info-box">
                    	<h3>Mark Pine</h3>
                        <p class="designation">Co- Founder at Houzz</p>
                    </div>
                    
                    <div class="slide-text">
                        <p>“We know that sometimes it’s difficult to get to the phone if you are in the middle of something and you don’t want to miss.”</p>
                    </div>
                </article>
                
                <!--Slide-->
                <article class="slide-item">
                	<figure class="image-box"><img src="front_end/images/resource/testi-image-1.jpg" alt=""></figure>
                    <div class="info-box">
                    	<h3>Jack Willshere</h3>
                        <p class="designation">Co- Founder at Houzz</p>
                    </div>
                    
                    <div class="slide-text">
                        <p>“We know that sometimes it’s difficult to get to the phone if you are in the middle of something and you don’t want to miss.”</p>
                    </div>
                </article>
                
                <!--Slide-->
                <article class="slide-item">
                	<figure class="image-box"><img src="front_end/images/resource/testi-image-2.jpg" alt=""></figure>
                    <div class="info-box">
                    	<h3>Missar Hub</h3>
                        <p class="designation">Co- Founder at Houzz</p>
                    </div>
                    
                    <div class="slide-text">
                        <p>“We know that sometimes it’s difficult to get to the phone if you are in the middle of something and you don’t want to miss.”</p>
                    </div>
                </article>
                
                <!--Slide-->
                <article class="slide-item">
                	<figure class="image-box"><img src="front_end/images/resource/testi-image-3.jpg" alt=""></figure>
                    <div class="info-box">
                    	<h3>Mark Pine</h3>
                        <p class="designation">Co- Founder at Houzz</p>
                    </div>
                    
                    <div class="slide-text">
                        <p>“We know that sometimes it’s difficult to get to the phone if you are in the middle of something and you don’t want to miss.”</p>
                    </div>
                </article>
                
                <!--Slide-->
                <article class="slide-item">
                	<figure class="image-box"><img src="front_end/images/resource/testi-image-1.jpg" alt=""></figure>
                    <div class="info-box">
                    	<h3>Jack Willshere</h3>
                        <p class="designation">Co- Founder at Houzz</p>
                    </div>
                    
                    <div class="slide-text">
                        <p>“We know that sometimes it’s difficult to get to the phone if you are in the middle of something and you don’t want to miss.”</p>
                    </div>
                </article>
                
                <!--Slide-->
                <article class="slide-item">
                	<figure class="image-box"><img src="front_end/images/resource/testi-image-2.jpg" alt=""></figure>
                    <div class="info-box">
                    	<h3>Missar Hub</h3>
                        <p class="designation">Co- Founder at Houzz</p>
                    </div>
                    
                    <div class="slide-text">
                        <p>“We know that sometimes it’s difficult to get to the phone if you are in the middle of something and you don’t want to miss.”</p>
                    </div>
                </article>
                
                <!--Slide-->
                <article class="slide-item">
                	<figure class="image-box"><img src="front_end/images/resource/testi-image-3.jpg" alt=""></figure>
                    <div class="info-box">
                    	<h3>Mark Pine</h3>
                        <p class="designation">Co- Founder at Houzz</p>
                    </div>
                    
                    <div class="slide-text">
                        <p>“We know that sometimes it’s difficult to get to the phone if you are in the middle of something and you don’t want to miss.”</p>
                    </div>
                </article>
                
                
            </div>
            
        </div>    
    </section>
    
    
    <!--FAQ Section-->
    <section class="faq-section">
    	<div class="auto-container">
        	
            <!--Sec Title-->
            <div class="sec-title">
                <h2>FA<span class="theme_color">Q</span></h2>
                <div class="separator small-separator"></div>
                <div class="text"><p>Contrary to popular belief, Lorem Ipsum is not simply random text. It’s long establised text</p></div>
            </div>
            <br>
            
        	<div class="row clearfix">
            	
                <!--Column-->
            	<div class="column col-md-4 col-sm-6 col-xs-12">
                	<!--Faq Block-->
                    <div class="faq-block">
                    	<div class="question"><h3>This is a simple question?</h3></div>
                        <div class="answer">
                        	<p>Lorem ipsum dolor sit amet, consectetuer  a the adipiscing elit. Aenean commodo ligulai dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec</p>
                        </div>
                    </div>
                    
                    <!--Faq Block-->
                    <div class="faq-block">
                    	<div class="question"><h3>This is a simple question?</h3></div>
                        <div class="answer">
                        	<p>Lorem ipsum dolor sit amet, consectetuer  a the adipiscing elit. Aenean commodo ligulai dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec</p>
                        </div>
                    </div>
                    
                </div>
                
                
                <!--Column-->
            	<div class="column col-md-4 col-sm-6 col-xs-12">
                	<!--Faq Block-->
                    <div class="faq-block">
                    	<div class="question"><h3>This is a simple question?</h3></div>
                        <div class="answer">
                        	<p>Lorem ipsum dolor sit amet, consectetuer  a the adipiscing elit. Aenean commodo ligulai dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec</p>
                        </div>
                    </div>
                    
                    <!--Faq Block-->
                    <div class="faq-block">
                    	<div class="question"><h3>This is a simple question?</h3></div>
                        <div class="answer">
                        	<p>Lorem ipsum dolor sit amet, consectetuer  a the adipiscing elit. Aenean commodo ligulai dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec</p>
                        </div>
                    </div>
                    
                </div>
                
                
                <!--Column-->
            	<div class="column col-md-4 col-sm-6 col-xs-12">
                	<!--Faq Block-->
                    <div class="faq-block">
                    	<div class="question"><h3>This is a simple question?</h3></div>
                        <div class="answer">
                        	<p>Lorem ipsum dolor sit amet, consectetuer  a the adipiscing elit. Aenean commodo ligulai dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec</p>
                        </div>
                    </div>
                    
                    <!--Faq Block-->
                    <div class="faq-block">
                    	<div class="question"><h3>This is a simple question?</h3></div>
                        <div class="answer">
                        	<p>Lorem ipsum dolor sit amet, consectetuer  a the adipiscing elit. Aenean commodo ligulai dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec</p>
                        </div>
                    </div>
                    
                </div>
                
                
            </div>
        </div>
    </section>
    
    
    
    <!--Map Section-->
    <section class="map-section">
    	<div class="map-container" id="map-location"></div>
    </section>
    
    
    <!--Contact Section-->
    <section class="default-section faded-section contact-section" id="contact-section" style="background-image:url(front_end/images/background/contact-bg.jpg);">
    	<div class="auto-container">
        	<div class="row clearfix">
            	<!--Column-->
                <div class="col-md-5 col-sm-12 col-xs-12 column">
                	<h2>It’s Easy to Find Us</h2>
                    
                	<div class="desc-text">
                    	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknownto. </p>
                    </div>
                    <!--Contact Info-->
                    <ul class="contact-info">
                    	<li>
                        	<span class="icon flaticon-location74"></span>
                            <h3>ADDRESS</h3>
							<p>Mirpur New Bazar Road, Block-c, Dhaka-1210</p>
						</li>
                        
                        <li>
                        	<span class="icon flaticon-telephone51"></span>
                            <h3>PHONE</h3>
							<p>(732) 803-01 03, (732) 806-01 04, (880)172380129</p>
						</li>
                        
                        <li>
                        	<span class="icon flaticon-envelope126"></span>
                            <h3>EMAIL</h3>
							<p>info@companyname.com, otheremail@gmail.com</p>
						</li>
                    </ul>
                </div>
                
                <!--Column-->
                <div class="col-md-7 col-sm-12 col-xs-12 column">
                	<h2>Contact Form</h2>
                    <!--Contact Form-->
                    <div class="contact-form">
                    	<form method="post" id="contact-form" action="http://wp1.themexlab.com/html/dreamland/sendemail.php">
                        	
                            <div class="row clearfix">
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                    <input type="text" name="username" value="" placeholder="Username">
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                    <input type="email" name="email" value="" placeholder="Email">
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                    <input type="text" name="subject" value="" placeholder="Subject">
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                    <textarea name="message" placeholder="Message"></textarea>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12 form-group text-right">
                                	<button type="submit" name="submit" class="theme-btn btn-style-one">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
            <!--Separator-->
            <div class="separator big-separator"></div>
            
            <!--Footer Content-->
            <div class="footer-content">
            	<div class="social-links">
                	<a href="#"><span class="fa fa-facebook-f"></span></a>
                    <a href="#"><span class="fa fa-twitter"></span></a>
                    <a href="#"><span class="fa fa-linkedin"></span></a>
                    <a href="#"><span class="fa fa-google-plus"></span></a>
                </div>
                
                <div class="copyright">&copy; 2015 DREAM LAND All Right Reserved </div>
            </div>
            
        </div>
    </section>
    
</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top"><span class="fa fa-arrow-up"></span></div>

<script src="front_end/js/jquery.js"></script> 
<script src="front_end/js/bootstrap.min.js"></script>
<script src="front_end/js/revolution.min.js"></script>
<script src="front_end/js/jquery.mixitup.js"></script>
<script src="front_end/js/jquery.fancybox.pack.js"></script>
<script src="front_end/js/owl.js"></script>
<script src="front_end/js/jquery.nav.js"></script>
<script src="front_end/js/jquery.scrollTo.js"></script>
<script src="front_end/js/validate.js"></script>
<script src="http://maps.google.com/maps/api/js"></script>
<script src="front_end/js/googlemaps.js"></script>
<script src="front_end/js/wow.js"></script>
<script src="front_end/js/script.js"></script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var $_Tawk_API={},$_Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/569cfc09aeafd72017dd6ea9/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-15521914-3', 'auto');
  ga('send', 'pageview');

</script>

</body>
</html>
