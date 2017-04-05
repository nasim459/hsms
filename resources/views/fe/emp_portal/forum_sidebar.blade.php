@extends('fe.emp_portal.emp_dboard')
@section('forum_sidebar')
<!--Sidebar-->	
<div class="col-lg-3 col-md-4 col-sm-5 col-xs-12">
    <aside class="sidebar">

        <!-- Search Form -->
        <div class="widget search-form">

            <form method="post" action="blog.html">
                <div class="form-group">

                    <input type="search" name="search" value="" placeholder="Enter a Keyword">
                    <button type="submit" name="submit"><span class="fa fa-search"></span></button>
                </div>
            </form>

        </div>

        <!-- Popular Categories -->
        <div class="widget popular-categories wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
            <div class="sidebar-title"><h3>Categories</h3></div>
            @foreach ($ct_show as $v)
            <ul class="list">
                
                <li><span class="icon fa fa-angle-right"></span> <a href="blog.html#">{{$v->forum_category_name}}</a></li>
                              
            </ul>
            @endforeach
        </div>

        <!-- Recent Posts -->
        <div class="widget recent-posts wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
            <div class="sidebar-title"><h3>Popular Posts</h3></div>

            <div class="post">
                <div class="post-thumb"><a href="blog.html#"><img src="fe/images/resource/thumb-1.jpg" alt=""></a></div>
                <h4><a href="blog.html#">Lorem ipsum dolor sit amet consetetur</a></h4>
                <div class="post-info">11/01/2015 </div>
            </div>

            <div class="post">
                <div class="post-thumb"><a href="blog.html#"><img src="fe/images/resource/thumb-2.jpg" alt=""></a></div>
                <h4><a href="blog.html#">Lorem ipsum dolor sit amet consetetur</a></h4>
                <div class="post-info">11/01/2015 </div>
            </div>

            <div class="post">
                <div class="post-thumb"><a href="blog.html#"><img src="fe/images/resource/thumb-3.jpg" alt=""></a></div>
                <h4><a href="blog.html#">Lorem ipsum dolor sit amet consetetur</a></h4>
                <div class="post-info">11/01/2015 </div>
            </div>

        </div>

        <!-- Archives -->
        <div class="widget popular-categories wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
            <div class="sidebar-title"><h3>Archives</h3></div>

            <ul class="list">
                <li><span class="icon fa fa-angle-right"></span> <a href="blog.html#">July 2015</a></li>
                <li><span class="icon fa fa-angle-right"></span> <a href="blog.html#">August 2015</a></li>
                <li><span class="icon fa fa-angle-right"></span> <a href="blog.html#">September 2015</a></li>
                <li><span class="icon fa fa-angle-right"></span> <a href="blog.html#">October 2015</a></li>
                <li><span class="icon fa fa-angle-right"></span> <a href="blog.html#">November 2015</a></li>
            </ul>

        </div>

        <!-- Recent From Gallery -->
        <div class="widget recent-gallery">
            <div class="sidebar-title"><h3>Our Gallery</h3></div>

            <div class="clearfix">
                <figure class="image"><a href="fe/images/resource/blog-image-3.jpg" class="lightbox-image"><img src="fe/images/resource/thumb-1.jpg" alt=""></a></figure>
                <figure class="image"><a href="fe/images/resource/blog-image-4.jpg" class="lightbox-image"><img src="fe/images/resource/thumb-2.jpg" alt=""></a></figure>
                <figure class="image"><a href="fe/images/resource/blog-image-5.jpg" class="lightbox-image"><img src="fe/images/resource/thumb-3.jpg" alt=""></a></figure>
                <figure class="image"><a href="fe/images/resource/blog-image-6.jpg" class="lightbox-image"><img src="fe/images/resource/thumb-4.jpg" alt=""></a></figure>
                <figure class="image"><a href="fe/images/resource/blog-image-4.jpg" class="lightbox-image"><img src="fe/images/resource/thumb-5.jpg" alt=""></a></figure>
                <figure class="image"><a href="fe/images/resource/blog-image-6.jpg" class="lightbox-image"><img src="fe/images/resource/thumb-6.jpg" alt=""></a></figure>
            </div>

        </div>

        <!-- Popular Tags -->
        <div class="widget popular-tags">
            <div class="sidebar-title"><h3>Popular Tags</h3></div>

            <a href="blog.html#">Home</a>
            <a href="blog.html#">Blog</a>
            <a href="blog.html#">Bed</a>
            <a href="blog.html#">Kitchen</a>
            <a href="blog.html#">Lounge</a>
            <a href="blog.html#">Floor</a>
            <a href="blog.html#">Building</a>
            <a href="blog.html#">Secure</a>

        </div>

    </aside>


</div>
<!--Sidebar-->
@endsection