@extends('fe.emp_portal.emp_dboard')
@section('maincontent')

<!--Page Title-->
<section class="page-title" style="background-image:url(fe/images/background/page-title-bg-1.jpg);">
    <div class="auto-container">
        <div class="content-box">
            <h1>Forums</h1>
            <div class="bread-crumb">
                <a href="{{URL::to('emp_dboard')}}">Home</a> / 
                <a href="{{URL::to('emp_dboard')}}" class="current">Forum</a> /
                <a href="{{URL::to('forum-details')}}" class="current">Forum-Details</a>
            </div>
        </div>
    </div>
</section>

<!--Sidebar Page-->
<div class="sidebar-page">
    <div class="auto-container">

        <div class="row clearfix">

            <!--Content Side-->	
            <div class="col-lg-9 col-md-8 col-sm-7 col-xs-12">

                <section class="blog-container blog-detail">
                    @foreach($show as $v)
                    <!--Blog Post-->
                    <div class="blog-post">
                        <!--Blog Post-->

                        <div class="blog-post wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <article class="inner-box">
                                <figure class="image-box">
                                    @if ($v->forum_image != NULL)
                                    <a href="blog.html#"><img src="{{URL::asset($v->forum_image)}}" alt="" title="Blog"></a>
                                    @else 
                                    <a href="blog.html#"><img src="fe/images/resource/blog-image-3.jpg" alt="" title="Blog"></a>
                                    @endif
                                    <div class="post-options">
                                        <a href="blog-detail.html#" class="plus-icon img-circle"><span class="icon flaticon-news37"></span></a>
                                        <a href="blog-detail.html#" class="heart-icon img-circle"><span class="icon fa fa-heart"></span></a>
                                    </div>
                                </figure>
                                <!--Lower Content-->
                                <div class="lower-part">
                                    <div class="post-info">
                                        Posted On <a href="blog-detail.html#"><strong>{{$v->created_at}}</strong></a>
                                    </div>
                                    <div class="post-title"><h3><a href="blog-detail.html#">{{$v->forum_title}}</a></h3></div>
                                    <div class="post-text">
                                        <p>{{$v->forum_short_description}}</p>
                                        <!--<blockquote>“ There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour lorem ipsum making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words. “</blockquote>-->
                                        <p>{{$v->forum_short_description}}</p>
                                    </div>

                                    <div class="post-info lower">
                                        <i class="fa fa-comments"></i> &nbsp; <a href="blog-detail.html#"><strong>{{$v->hit_count}}</strong> &nbsp; Comments &nbsp; &nbsp;</a> | &nbsp; &nbsp; <a href="blog-detail.html#"><i class="fa fa-tag"></i> &nbsp; Author: {{$v->author_name}}</a>
                                        <span class="pull-right"><a href="blog-detail.html#"><i class="fa fa-facebook"></i></a> &nbsp; <a href="blog-detail.html#"><i class="fa fa-twitter"></i></a> &nbsp; <a href="blog-detail.html#"><i class="fa fa-linkedin"></i></a> &nbsp; <a href="blog-detail.html#"><i class="fa fa-google-plus"></i></a> &nbsp; <a href="blog-detail.html#"><i class="fa fa-dribbble"></i></a></span>
                                    </div>

                                </div>
                            </article>
                            <br>

                            <!--Comments Area-->
                            <div class="comments-area">
                                <div class="group-title"><h2>{{$v->hit_count}} comments</h2></div>

                                <div class="comment-box">
                                    <div class="comment wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                        <div class="author-thumb"><img class="img-circle" src="fe/images/resource/testi-image-2.jpg" alt=""></div>
                                        <div class="comment-info"><strong>Johnathan Doe</strong> <br>- posted 2 minutes ago</div>
                                        <div class="text">Whether you need to create a brand from scratch, including marketing materials and a beautiful and functional website or whether you are looking for a design.</div>
                                        <a href="blog-detail.html#" class="theme-btn dark-btn reply-btn">Reply</a>
                                    </div>

                                    <div class="comment reply-comment wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                        <div class="author-thumb"><img class="img-circle" src="fe/images/resource/testi-image-3.jpg" alt=""></div>
                                        <div class="comment-info"><strong>Johnathan Doe</strong> <br>- posted 2 minutes ago</div>
                                        <div class="text">Whether you need to create a brand from scratch, including marketing materials and a beautiful and functional website or whether you are looking for a design.</div>
                                        <a href="blog-detail.html#" class="theme-btn dark-btn reply-btn">Reply</a>
                                    </div>

                                    <div class="comment wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                        <div class="author-thumb"><img class="img-circle" src="fe/images/resource/testi-image-1.jpg" alt=""></div>
                                        <div class="comment-info"><strong>Johnathan Doe</strong> <br>- posted 2 minutes ago</div>
                                        <div class="text">Whether you need to create a brand from scratch, including marketing materials and a beautiful and functional website or whether you are looking for a design.</div>
                                        <a href="blog-detail.html#" class="theme-btn dark-btn reply-btn">Reply</a>
                                    </div>

                                </div>
                            </div>



                            <!-- Comment Form -->
                            <div class="comment-form wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">

                                <div class="group-title"><h2>Leave a Comment</h2></div>

                                <!--Comment Form-->
                                <form method="post" action="">
                                    <div class="row clearfix">              
                                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                            <div class="form-group-inner">
                                                <textarea name="message" placeholder="Your Comment"></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-12 col-sm-12 col-xs-12 text-left">
                                            <button class="theme-btn btn-style-one" type="submit" name="submit-form">Post Comment</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>

                    </div>
                    @endforeach
                </section> 


            </div>
            @yield('forum_sidebar')
        </div>
    </div>
</div>
<!--Content Side-->
@endsection