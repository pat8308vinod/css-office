<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>CSS OFFICE SOLUTIONS PTE. LTD.</title>
  <link rel="icon" type="image/x-icon" href="{{ asset('frontend/images/fev.ico') }}">
 <!-- Bootstrap core CSS -->
 <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="{{ asset('frontend/css/fontawesome.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/css/animated.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/css/owl.css') }}">
  <link rel="stylesheet" href="{{ asset('toastr/toastr.css') }}">

</head>

<body>

  <!-- ***** Preloader Start ***** 
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  ***** Preloader End ***** -->
  <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only"></span>
        </div>
    </div>

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky" data-wow-duration="0.75s" data-wow-delay="0s" id="header-area">
    <div class="container">

      <div class="">
        <nav class="main-nav">
          <div class="row">
            <!-- ***** Logo Start ***** -->
            <a href="/" class="logo col-lg-3 col-md-1 col-8 col-sm-5 img-fluid">
              <img src="{{ asset('frontend/images/logo.png') }}" alt="logo">
            </a>
            <!-- ***** Logo End ***** -->
            <!-- ***** Menu Start ***** -->
            <ul class="nav col-lg-9 col-md-11">
              <li class="scroll-to-section"><a href="/" class="{{ request()->is('/') ? 'active' : '' }}">Home</a></li>
              <li class="scroll-to-section"><a href="{{ url('/software') }}" class="{{ request()->is('software') ? 'active' : '' }}">Software</a></li>
              <li class="scroll-to-section"><a href="{{ url('/hardware') }}" class="{{ request()->is('hardware') ? 'active' : '' }}">Hardware</a></li>
              <li class="scroll-to-section"><a href="{{ url('/digitalmarketing') }}" class="{{ request()->is('digitalmarketing') ? 'active' : '' }}">Digital Marketing</a></li>
              <li class="scroll-to-section"><a href="{{ url('/blog') }}" class="{{ request()->is('blog') ? 'active' : '' }}">Blog</a></li>
              <li class="scroll-to-section"><a href="{{ url('/contact') }}" class="{{ request()->is('contact') ? 'active' : '' }}">Contact Us</a></li>
            </ul>
            <a class='menu-trigger'>
              <span>Menu</span>
            </a>
            <!-- ***** Menu End ***** -->
          </div>
        </nav>
      </div>

    </div>
  </header>
  <!-- ***** Header Area End ***** -->