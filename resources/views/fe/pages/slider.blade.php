@extends('fe.master_fe')
@section('slider')

<section class="main-slider" id="slider-section">

    <div class="tp-banner-container">
        <div class="tp-banner">
            <ul>

                <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="fe/images/main-slider/1.jpg"  data-saveperformance="off"  data-title="We are Awsome">
                    <img src="fe/images/main-slider/1.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"> 

                    <div class="tp-caption lfl tp-resizeme"
                         data-x="left" data-hoffset="15"
                         data-y="center" data-voffset="0"
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
                            <a href="index.html#" class="theme-btn btn-style-two">VIEW DETAILS</a>

                            <span class="curve"></span>
                        </div>
                    </div>

                </li>

                <li data-transition="slidedown" data-slotamount="1" data-masterspeed="1000" data-thumb="fe/images/main-slider/4.jpg"  data-saveperformance="off"  data-title="We are Awsome">
                    <img src="fe/images/main-slider/4.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"> 

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
                                <div class="column view-more"><a href="index.html#" class="read-more">VIEW DETAILS</a></div>
                            </div>

                            <span class="curve"></span>
                        </div>
                    </div>

                </li>

                <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="fe/images/main-slider/2.jpg"  data-saveperformance="off"  data-title="We are Awsome">
                    <img src="fe/images/main-slider/2.jpg"  alt=""  data-bgposition="center bottom" data-bgfit="cover" data-bgrepeat="no-repeat"> 

                    <div class="tp-caption lfr tp-resizeme"
                         data-x="right" data-hoffset="-15"
                         data-y="center" data-voffset="0"
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
                            <a href="index.html#" class="theme-btn btn-style-one">VIEW DETAILS</a>

                            <span class="curve"></span>
                        </div>
                    </div>

                </li>



            </ul>

            <div class="tp-bannertimer"></div>
        </div>
    </div>
</section>
@endsection 