@extends('frontend.layouts.master')
@section('title', 'Blog Details |Css Office')
@section('body')
<section class="py-1 py-sm-4 py-lg-5">
    <div class="container" style="margin-top: 100px;">
     <div class="row justify-content-center">
        <div class="blog-container px-3 col-lg-10">
            <div class="row mb-3">
                <div class="col-md-8 blog-detail-left p-4 p-1">
                    <img src="{{ asset('frontend/images/search-engine-marketing.png') }}" alt="img" class="img-fluid" />
                    <div class="d-flex justify-content-between mt-4">
                        <div class="d-flex">
                            <img src="https://bootdey.com/img/Content/avatar/avatar2.png" class="img-circular" />
                            <div class="d-flex justify-content-center align-items-start flex-column px-2">
                                <h5 class="fw-bold">Admin</h5>
                                <p class="text-muted">19th July 2022</p>
                            </div>
                        </div>
                        <div class="blog-page-category justify-content-right">
                            <h5 class="text-right fw-bold mt-1">Category</h5>
                            <p class="mt-1 text-right me-2">
                                <a class="fw-bold" href="" style="color:#333">Digital Marketing</a>
                            </p>
                        </div>
                    </div>
                    <div class="blog-description mt-4" data-aos="fade-up">
                        <h3>How Digital Marketing Helps Enterprises To Boost Their Business Growth</h3>
                        <p class="text-justify">Rev up your marketing and experience an ad campaign with the highest conversion rates! Our in-house digital marketing expert manages your project from start to finish!
                        </p>

                        <h3 class="mt-4" style="color:#0c4f95 ;">Conclusion</h3>
                        <p style="text-align:justify ">We take care of everything from creating ads to managing our relationships with Google Ads and Facebook, so all you have to do is sit back and watch the money flow!</p>
                    </div>
                </div>
                <div class="col-md-4 blog-sidebar py-md-4 py-1 px-4 px-md-3">
                    <h2 class="text-uppercase mb-2 mb-md-0">Latest Blog</h2>
                    <div class="sidebar-content">
                        <h4><a href="#">How Website Development Helps Enterprises</a></h4>
                        <p class="text-muted">19th July 2022</p>
                    </div>
                    <div class="sidebar-content">
                        <h4><a href="#">How Website Development Helps Enterprises</a></h4>
                        <p class="text-muted">19th July 2022</p>
                    </div>
                    <div class="sidebar-content">
                        <h4><a href="#">How Website Development Helps Enterprises</a></h4>
                        <p class="text-muted">19th July 2022</p>
                    </div>
                    <div class="category-div mt-3">
                        <h2 class="mb-2">Category</h2>
                        <a href="">All</a> <a href="">Software</a> <a href="">Hardware</a>
                    </div>
                   
                </div>
            </div>
        </div>
        </div>
    </div>
</section>
@endsection