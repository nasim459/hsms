@extends('fe.rental_portal.rental_dboard')
@section('maincontent')

<!--Page Title-->
<section class="page-title" style="background-image:url(fe/images/background/page-title-bg-1.jpg);">
    <div class="auto-container">
        <div class="content-box">
            <h1>Forums</h1>
            <div class="bread-crumb">
                <a href="{{URL::to('emp_dboard')}}">Home</a> / 
                <a href="{{URL::to('emp_dboard')}}" class="current">Forum</a></div>
        </div>
    </div>
</section>

<!--Sidebar Page-->
<div class="sidebar-page">
    <div class="auto-container">

        <div class="row clearfix">

            <!--Content Side-->	
            <div class="col-lg-9 col-md-8 col-sm-7 col-xs-12">
                <section class="blog-container">
                    @foreach ($show as $v)
                    <!--Blog Post-->
                    <div class="blog-post wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <article class="inner-box">
                            <!--Image-->
                            <figure class="image-box">
                                @if ($v->forum_image != NULL)
                                <a href="blog.html#"><img src="{{URL::asset($v->forum_image)}}" alt="" title="Blog"></a>
                                @else 
                                <a href="blog.html#"><img src="fe/images/resource/blog-image-3.jpg" alt="" title="Blog"></a>
                                @endif
                                <div class="post-options">
                                    <a href="blog.html#" class="plus-icon img-circle"><span class="icon flaticon-news37"></span></a>
                                    <a href="blog.html#" class="heart-icon img-circle"><span class="icon fa fa-heart"></span></a>
                                </div>
                            </figure>
                            <!--Lower Content-->
                            <div class="lower-part">
                                <div class="post-info">
                                    Posted On <a href="blog.html#"><strong>{{$v->created_at}}</strong></a>
                                </div>
                                <div class="post-title"><h3><a href="blog.html#">This is post with big title and image</a></h3></div>
                                <div class="post-text">{{$v->forum_title}}</div>

                                <div class="post-info lower">
                                    <i class="fa fa-comments"></i> &nbsp; <a href="blog.html#"><strong>{{$v->hit_count}}</strong> &nbsp; Comments &nbsp; &nbsp;</a> | &nbsp; &nbsp; <a href="blog.html#"><i class="fa fa-tag"></i> Author : {{$v->author_name}}</a>
                                    <span class="pull-right"><a href="{{URL::to('forum-details')}}" class="theme-btn read-more">Read More</a></span>
                                </div>
                            </div>
                        </article>
                    </div>
                    @endforeach
                   

                    <!--Blog Post-->
                    <div class="blog-post wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <article class="inner-box">
                            <!--Image-->
                            <figure class="image-box">
                                <a href="blog.html#"><img src="fe/images/resource/blog-image-5.jpg" alt="" title="Blog"></a>
                                <div class="post-options">
                                    <a href="blog.html#" class="plus-icon img-circle"><span class="icon flaticon-news37"></span></a>
                                    <a href="blog.html#" class="heart-icon img-circle"><span class="icon fa fa-heart"></span></a>
                                </div>
                            </figure>
                            <!--Lower Content-->
                            <div class="lower-part">
                                <div class="post-info">
                                    Posted On <a href="blog.html#"><strong>March 10, 2014</strong></a>
                                </div>
                                <div class="post-title"><h3><a href="blog.html#">This is post with big title and image</a></h3></div>
                                <div class="post-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam assumenda modi unde ad optio voluptas quaerat officiis esse deleniti facilis voluptates, quos sapiente. Nihil nostrum soluta odit aliquid placeat, maiores autem sapiente adipisci dignissimos, tempore, nesciunt mollitia quas similique? Corporis illo quis, temporibus porro.</div>

                                <div class="post-info lower">
                                    <i class="fa fa-comments"></i> &nbsp; <a href="blog.html#"><strong>6</strong> &nbsp; Comments &nbsp; &nbsp;</a> | &nbsp; &nbsp; <a href="blog.html#"><i class="fa fa-tag"></i> &nbsp; Real Estate, Property</a>
                                    <span class="pull-right"><a href="blog.html#" class="theme-btn read-more">Read More</a></span>
                                </div>
                            </div>
                        </article>
                    </div>

                   

                </section>

                <br>
                <!--Pagination-->
                <div class="pager-outer">
                    <ul class="pagination">
                        <li><a href="blog.html#">1</a></li>
                        <li><a href="blog.html#">2</a></li>
                        <li><a href="blog.html#">3</a></li>
                        <li class="active"><a href="blog.html#">-</a></li>
                        <li><a href="blog.html#">4</a></li>
                        <li><a href="blog.html#">5</a></li>
                        <li><a href="blog.html#">Next</a></li>
                    </ul>
                </div>


            </div>
            <!--Content Side-->
             @include('fe.rental_portal.pages.forum_sidebar')


        </div>


    </div>
</div>
@endsection