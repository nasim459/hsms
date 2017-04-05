@extends('fe.emp_portal.emp_dboard');
@section('maincontent')

<section class="page-title" style="background-image:url(fe/images/background/page-title-bg-1.jpg);">
    <div class="auto-container">
        <div class="content-box">
            <h1>Forums</h1>
            <div class="bread-crumb">
                <a href="{{URL::to('emp_dboard')}}">Home</a> / 
                <a href="{{URL::to('add-forum')}}" class="current">add Forum</a></div>
        </div>
    </div>
</section>

<!--Add Forum Section-->
<section class="default-section faded-section contact-section" style="background-image:url(images/background/contact-bg.jpg);">
    <div class="auto-container">
        <div class="row clearfix">


            <!--Column-->
            <div class="col-md-8 col-sm-12 col-xs-12 column">
                <h1>Add Post</h1>
                <!--Contact Form-->
                <div class="contact-form">
                    {!! Form::open(array('url'=>'forum-post-save', 'role'=>'form', 'method'=>'POST', 'files'=>'true')) !!}
                    <span method="post" id="" action="">

                        <div class="row clearfix">


                            <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                <label class="control-label col-md-8" for="fullname">Forum Title <span class="text-danger">*</span></label>
                                <input type="text" name="title" value="" placeholder="Forum Title" required>
                            </div><br>

                            <div class="col-md-8 col-sm-8 col-xs-12 form-group">
                                <label class="control-label col-sm-4" for="fullname">Category<span class="text-danger">*</span></label>
                                <select class="" id="select-required" name="category_id" required>

                                    <option value="">Select Category</option>
                                    @foreach($all_published_category as $v_category)
                                    <option value="{{$v_category->id}}">{{$v_category->forum_category_name}}</option>
                                    @endforeach

                                </select>

                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                <label class="control-label col-md-8" for="fullname">Author name <span class="text-danger">*</span></label>
                                <input type="text" name="author_name" value="" placeholder="Forum Title" required>
                            </div><br>

                            <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                <label class="control-label col-md-8" >Forum Short Description <span class="text-danger">*</span></label>
                                <textarea name="short" placeholder=" Short Description" required></textarea>
                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                <label class="control-label col-md-8" for="fullname">Forum Long Description <span class="text-danger">*</span></label>
                                <textarea name="long" placeholder="Long Description" ></textarea>
                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                <label class="control-label col-md-8" for="fullname">Forum Image <span class="text-danger">*</span></label>
                                <input type="file" name="forum_image">
                                <!--<input class="input-file uniform_on" id="fileInput" type="file" name="blog_image">-->
                            </div>

                            <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                <label class="contrl-label col-sm-8" for="fullname">Publication Status<span class="text-danger">*</span></label>
                                <select class="" id="select-required" name="publication_status" required>
                                    <option value="">Select Status</option>
                                    <option value="1">Published</option>
                                    <option value="0">Unpublished</option>

                                </select>

                            </div>



                            <div class="col-md-12 col-sm-12 col-xs-12 form-group text-right">
                                <button type="button" name="" class="btn btn-danger">Cancel</button>
                                <button type="submit" name="submit" class="theme-btn btn-style-one">Post</button>

                            </div>
                        </div>
                    </span>
                    {!! Form::close() !!}
                </div>
                <!------------------------------------------------------>
                <section class="default-section faded-section contact-section" style="background-image:url(images/background/contact-bg.jpg);">
                    <div class="auto-container">
                        <div class="row clearfix">
                            <h1>Manage Post</h1>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Forum Category</th>
                                        <th>Forum Heading</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr class="success">
                                        <td>Success</td>
                                        <td>Doe</td>
                                        <td>
                                            <div class="btn-group btn-group-sm">
                                                <button type="button" class="btn btn-primary fa fa-arrow-up"></button>
                                                <button type="button" class="btn btn-primary fa fa-edit"></button>
                                                <button type="button" class="btn btn-primary fa fa-trash"></button>

                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="danger">
                                        <td>Danger</td>
                                        <td>Moe</td>
                                        <td>
                                            <div class="btn-group btn-group-sm">
                                                <button type="button" class="btn btn-primary fa fa-arrow-up"></button>
                                                <button type="button" class="btn btn-primary fa fa-edit"></button>
                                                <button type="button" class="btn btn-primary fa fa-trash"></button>

                                            </div>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>

                <!------------------------------------------------------->
            </div>
            @yield('forum_sidebar')
        </div>



    </div>
</section>

@endsection