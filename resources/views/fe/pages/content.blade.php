@extends('fe.master_fe')
@section('maincontent')


<!--Properties Section-->
<section class="properties-section">
    <div class="auto-container">

        <!--Section Title-->
        <div class="sec-title">
            <h2>About <span class="theme_color">Property</span></h2>
            <div class="separator small-separator"></div>
            <div class="text"><p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words </p></div>
        </div>

        <div class="five-col-theme">
            <div class="row clearfix">

                <!--Column-->
                <article class="column">
                    <div class="inner-box">
                        <div class="icon"><span class="flaticon-bedroom23"></span></div>
                        <h4 class="title">Bedrooms</h4>
                        <h3 class="count">3</h3>
                    </div>
                </article>

                <!--Column-->
                <article class="col-md-4 col-sm-6 col-xs-12 column">
                    <div class="inner-box">
                        <div class="icon"><span class="flaticon-geometry1"></span></div>
                        <h4 class="title">Square Feet</h4>
                        <h3 class="count">2530</h3>
                    </div>
                </article>

                <!--Column-->
                <article class="col-md-4 col-sm-6 col-xs-12 column">
                    <div class="inner-box">
                        <div class="icon"><span class="flaticon-hygiene11"></span></div>
                        <h4 class="title">Baths</h4>
                        <h3 class="count">2</h3>
                    </div>
                </article>

                <!--Column-->
                <article class="col-md-4 col-sm-6 col-xs-12 column">
                    <div class="inner-box">
                        <div class="icon"><span class="flaticon-calendar3"></span></div>
                        <h4 class="title">Year Build</h4>
                        <h3 class="count">2010</h3>
                    </div>
                </article>

                <!--Column-->
                <article class="col-md-4 col-sm-6 col-xs-12 column">
                    <div class="inner-box">
                        <div class="icon"><span class="flaticon-transport913"></span></div>
                        <h4 class="title">Car Parking</h4>
                        <h3 class="count">1</h3>
                    </div>
                </article>

            </div>
        </div>

    </div>
</section>


<!--Property Details Section-->
<section class="property-details" style="background-image:url(fe/images/parallax/image-2.jpg);">
    <div class="auto-container">
        <div class="row clearfix">

            <!--Left Column-->
            <div class="col-md-7 col-sm-12 col-xs-12 left-column">
                <h2>Property Details</h2>
                <!--Tabs Box-->
                <div class="tabs-box">

                    <!--Tab Buttons-->
                    <div class="tab-buttons clearfix">
                        <a href="index.html#tab-one" class="tab-btn active-btn">INTERIOR DETAILS</a>
                        <a href="index.html#tab-two" class="tab-btn">EXTERIOR DETAILS</a>
                        <a href="index.html#tab-three" class="tab-btn">ROOM DIMENSIONS</a>
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
<section class="gallery-section full-width">
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
                    <figure class="image"><a href="fe/images/gallery/1.jpg" class="lightbox-image"><img src="fe/images/gallery/1.jpg" alt=""></a></figure>
                    <a href="fe/images/gallery/1.jpg" class="zoom-btn lightbox-image"><span class="icon flaticon-add30"></span></a>
                </div>
            </div>

            <!--Image Box-->
            <div class="image-box mix mix_all bedroom kitchen garage">
                <div class="inner-box">
                    <figure class="image"><a href="fe/images/gallery/2.jpg" class="lightbox-image"><img src="fe/images/gallery/2.jpg" alt=""></a></figure>
                    <a href="fe/images/gallery/2.jpg" class="zoom-btn lightbox-image"><span class="icon flaticon-add30"></span></a>
                </div>
            </div>

            <!--Image Box-->
            <div class="image-box mix mix_all bedroom garage">
                <div class="inner-box">
                    <figure class="image"><a href="fe/images/gallery/3.jpg" class="lightbox-image"><img src="fe/images/gallery/3.jpg" alt=""></a></figure>
                    <a href="fe/images/gallery/3.jpg" class="zoom-btn lightbox-image"><span class="icon flaticon-add30"></span></a>
                </div>
            </div>

            <!--Image Box-->
            <div class="image-box mix mix_all bedroom living-room kitchen">
                <div class="inner-box">
                    <figure class="image"><a href="fe/images/gallery/4.jpg" class="lightbox-image"><img src="fe/images/gallery/4.jpg" alt=""></a></figure>
                    <a href="fe/images/gallery/4.jpg" class="zoom-btn lightbox-image"><span class="icon flaticon-add30"></span></a>
                </div>
            </div>

            <!--Image Box-->
            <div class="image-box mix mix_all bedroom living-room garage">
                <div class="inner-box">
                    <figure class="image"><a href="fe/images/gallery/5.jpg" class="lightbox-image"><img src="fe/images/gallery/5.jpg" alt=""></a></figure>
                    <a href="fe/images/gallery/5.jpg" class="zoom-btn lightbox-image"><span class="icon flaticon-add30"></span></a>
                </div>
            </div>

            <!--Image Box-->
            <div class="image-box mix mix_all living-room kitchen">
                <div class="inner-box">
                    <figure class="image"><a href="fe/images/gallery/6.jpg" class="lightbox-image"><img src="fe/images/gallery/6.jpg" alt=""></a></figure>
                    <a href="fe/images/gallery/6.jpg" class="zoom-btn lightbox-image"><span class="icon flaticon-add30"></span></a>
                </div>
            </div>

            <!--Image Box-->
            <div class="image-box mix mix_all bedroom living-room garage">
                <div class="inner-box">
                    <figure class="image"><a href="fe/images/gallery/7.jpg" class="lightbox-image"><img src="fe/images/gallery/7.jpg" alt=""></a></figure>
                    <a href="fe/images/gallery/7.jpg" class="zoom-btn lightbox-image"><span class="icon flaticon-add30"></span></a>
                </div>
            </div>

            <!--Image Box-->
            <div class="image-box mix mix_all bedroom living-room kitchen">
                <div class="inner-box">
                    <figure class="image"><a href="fe/images/gallery/8.jpg" class="lightbox-image"><img src="fe/images/gallery/8.jpg" alt=""></a></figure>
                    <a href="fe/images/gallery/8.jpg" class="zoom-btn lightbox-image"><span class="icon flaticon-add30"></span></a>
                </div>
            </div>

        </div>
    </div>


</section>

<!--Intro Section-->
<section class="intro-section">
    <div class="auto-container">
        <div class="outer-box clearfix">
            <span class="anim-image wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1000ms"><img src="fe/images/logo-2.png" alt=""></span>
            <div class="col-md-9 col-sm-7 col-xs-12">
                <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled .</p>
            </div>
            <div class="col-md-3 col-sm-5 col-xs-12 text-right">
                <a href="index.html#" class="theme-btn btn-style-two">CONTACT NOW</a>
            </div>
        </div>
    </div>
</section>



<!--Agent Section-->
<section class="agent-section">
    <div class="auto-container">
        <div class="row clearfix">

            <div class="column col-md-5 col-sm-12 col-xs-12">
                <figure class="agent-image wow rollIn" data-wow-delay="300ms" data-wow-duration="1500ms"><a href="mailto:agentmail@mail.com"><img src="fe/images/resource/image-1.jpg" class="img-circle" alt=""></a></figure>
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

                    <a href="index.html#" class="theme-btn btn-style-one">Contact Now</a>
                </div>

            </div>
        </div>
    </div>
</section>


<!--Testimonials-->
<section class="testimonials-section" style="background-image:url(fe/images/background/testimonials-bg.jpg);">
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
                <figure class="image-box"><img src="fe/images/resource/testi-image-1.jpg" alt=""></figure>
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
                <figure class="image-box"><img src="fe/images/resource/testi-image-2.jpg" alt=""></figure>
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
                <figure class="image-box"><img src="fe/images/resource/testi-image-3.jpg" alt=""></figure>
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
                <figure class="image-box"><img src="fe/images/resource/testi-image-1.jpg" alt=""></figure>
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
                <figure class="image-box"><img src="fe/images/resource/testi-image-2.jpg" alt=""></figure>
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
                <figure class="image-box"><img src="fe/images/resource/testi-image-3.jpg" alt=""></figure>
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
                <figure class="image-box"><img src="fe/images/resource/testi-image-1.jpg" alt=""></figure>
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
                <figure class="image-box"><img src="fe/images/resource/testi-image-2.jpg" alt=""></figure>
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
                <figure class="image-box"><img src="fe/images/resource/testi-image-3.jpg" alt=""></figure>
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

@endsection 