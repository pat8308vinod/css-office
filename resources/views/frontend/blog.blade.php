@extends('frontend.layouts.master')
@section('title', 'Blog |Css Office')
@section('body')
<section class="py-5" style="background:#1c3d8614;">
<div class="container" style="margin-top: 50px;">
    <div class="row d-flex justify-content-center">
        <div class="col-lg-10 blog-div">
        <h2 class="mb-md-3 mb-2 col-lg-10 mx-auto ">Our Blogs</h2>
            <div class="row d-flex justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-6 mt-0 mt-md-4 pt-2 mb-4 mb-md-4">
                    <div class="blog-post rounded">
                        <div class="blog-img d-block overflow-hidden position-relative">
                            <img src="{{ asset('frontend/images/search-engine-marketing.png') }}" class="" alt="">
                            <div class="overlay bg-dark"></div>
                            <div class="post-meta d-flex justify-content-center align-items-center">
                                <a href="{{ url('/blogdetail') }}" class="read-more text-light">Read More <i class="fa fa-chevron-right" style="font-size:12px;"></i></a>
                            </div>
                        </div>
                        <div class="content px-3">
                            <div class="d-flex mt-3">
                                <img src="https://bootdey.com/img/Content/avatar/avatar2.png" class="img-fluid avatar avatar-ex-sm rounded-pill mr-3 shadow" alt="">
                                <div class="author mt-2">
                                    <h6 class="mb-0 px-2"><a href="#" class="text-dark name">Admin</a></h6>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between mt-2">
                                <small class="text-muted p">19th July, 2022</small>
                                <small class=""><a href="javascript:void(0)" class="fw-bold text-uppercase blog-post-a">Digital Marketing</a></small>
                            </div>
                            <h4 class="mt-2 mb-3"><a href="{{ url('/blogdetail') }}" class="title">How Digital Marketing Helps To Boost Business Growth</a></h4>

                        </div>
                    </div>
                    <!--end blog post-->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mt-0 mt-md-4 pt-2 mb-4 mb-md-4">
                    <div class="blog-post rounded">
                        <div class="blog-img d-block overflow-hidden position-relative">
                            <img src="{{ asset('frontend/images/search-engine-marketing.png') }}" class="" alt="">
                            <div class="overlay bg-dark"></div>
                            <div class="post-meta d-flex justify-content-center align-items-center">
                                <a href="{{ url('/blogdetail') }}" class="read-more text-light">Read More <i class="fa fa-chevron-right" style="font-size:12px;"></i></a>
                            </div>
                        </div>
                        <div class="content px-3">
                            <div class="d-flex mt-3">
                                <img src="https://bootdey.com/img/Content/avatar/avatar2.png" class="img-fluid avatar avatar-ex-sm rounded-pill mr-3 shadow" alt="">
                                <div class="author mt-2">
                                    <h6 class="mb-0 px-2"><a href="#" class="text-dark name">Admin</a></h6>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between mt-2">
                                <small class="text-muted p">19th July, 2022</small>
                                <small class=""><a href="javascript:void(0)" class="fw-bold text-uppercase blog-post-a">Digital Marketing</a></small>
                            </div>
                            <h4 class="mt-2 mb-3"><a href="{{ url('/blogdetail') }}" class="title">How Digital Marketing Helps To Boost Business Growth</a></h4>

                        </div>
                    </div>
                    <!--end blog post-->
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 mt-0 mt-md-4 pt-2 mb-4 mb-md-4">
                    <div class="blog-post rounded">
                        <div class="blog-img d-block overflow-hidden position-relative">
                            <img src="{{ asset('frontend/images/search-engine-marketing.png') }}" class="" alt="">
                            <div class="overlay bg-dark"></div>
                            <div class="post-meta d-flex justify-content-center align-items-center">
                                <a href="{{ url('/blogdetail') }}" class="read-more text-light">Read More <i class="fa fa-chevron-right" style="font-size:12px;"></i></a>
                            </div>
                        </div>
                        <div class="content px-3">
                            <div class="d-flex mt-3">
                                <img src="https://bootdey.com/img/Content/avatar/avatar2.png" class="img-fluid avatar avatar-ex-sm rounded-pill mr-3 shadow" alt="">
                                <div class="author mt-2">
                                    <h6 class="mb-0 px-2"><a href="#" class="text-dark name">Admin</a></h6>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between mt-2">
                                <small class="text-muted p">19th July, 2022</small>
                                <small class=""><a href="javascript:void(0)" class="fw-bold text-uppercase blog-post-a">Digital Marketing</a></small>
                            </div>
                            <h4 class="mt-2 mb-3"><a href="{{ url('/blogdetail') }}" class="title">How Digital Marketing Helps To Boost Business Growth</a></h4>

                        </div>
                    </div>
                    <!--end blog post-->
                </div>
               
            </div>
        </div>
        <!--end col-->
    </div>
</div>
</section>

@endsection