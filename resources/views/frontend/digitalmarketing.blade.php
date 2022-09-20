@extends('frontend.layouts.master')
@section('title', 'Digital Marketing |Css Office')
@section('body')
<div class="main-banner main-banner-digital" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-9 col-md-12 py-5 h-b-c">
              <div class="left-content header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
                <p class="" style="color: #fff;">GET NOTICED | GET RESULTS</p>
                <h2 class="text-justify">Advertising Agency that Grows Your Reach and Profit</h2>
                <p class="mt-3 mt-lg-4">We help grow your business by getting your company in front of the right people
                  with our targeted online ad campaigns that deliver measurable results.</p>
                <button type="submit" class="main-button mt-4 mt-sm-5 mt-lg-5"><a href="tel:+65 9067 6437">Contact us</a></button>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="hero-banner-bellow">
    <div class="container">
      <h6 class="text-capatalize">Let's make sure you're getting the results that you need</h6>
      <h2 class="mb-md-3 mb-2 col-lg-10 mx-auto">Having Trouble Reaching Your <span style="color:#1d3e86;">Target
          Audience?</span>
      </h2>
      <p class="col-lg-10 mx-auto">You have a great product or a nice service, but the truth is that may not be enough
        to make you stand out. If you are not reaching your target audience, how can you generate leads and conversions
        to maintain and grow your business?</p>
    </div>
  </div>

  <div id="about" class="about-us section">
    <div class="container">

      <div class="row justify-content-center">

        <div class="col-lg-10 align-self-center">
          <div class="services">
            <div class="row g-lg-5 g-md-4">
              <div class="col-lg-4 col-md-6 service-div mb-4 mb-lg-0">
                <div class="item wow fadeIn p-4" data-wow-duration="1s" data-wow-delay="0.5s">
                  <div class="icon-1">
                    <img src="{{ asset('frontend/images/Insufficient-Online-Presence.png') }}" alt="reporting" style="">
                  </div>
                  <div class="right-text">
                    <h4 class="">Insufficient Online Presence?</h4>
                    <p>You think that you are not reaching your customers because of an inadequate online presence.</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 service-div mb-4 mb-lg-0">
                <div class="item wow fadeIn p-4" data-wow-duration="1s" data-wow-delay="0.7s">
                  <div class="icon-1">
                    <img src="{{ asset('frontend/images/Not-Getting-Results.png') }}" alt="">
                  </div>
                  <div class="right-text">
                    <h4>Not Getting Results?</h4>
                    <p>You have tried to advertise your business online, but you have not gotten the results you wanted.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 service-div">
                <div class="item wow fadeIn p-4" data-wow-duration="1s" data-wow-delay="0.9s">
                  <div class="icon-1">
                    <img src="{{ asset('frontend/images/digital-marketing-icon.png') }}" alt="">
                  </div>
                  <div class="right-text">
                    <h4>Digital Marketing Overwhelms You?</h4>
                    <p>You feel overwhelmed with digital marketing and you are not sure if you are placing your ads
                      correctly.
                    </p>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="services" class="our-services section py-md-5 py-4
  ">
    <div class="container">
      <div class="row g-lg-5 g-md-4 g-0 justify-content-center align-items-center">

        <div class="col-lg-5 col-md-12 order-2 order-lg-1 wow fadeInRight" data-wow-duration="1s"
          data-wow-delay="0.2s">
          <div class="section-heading">
            <h6 class="mb-2 mt-3 mt-lg-0 h6-digital">Advertising Agency that Delivers Result</h6>
            <h2 class="mb-lg-2 mb-2">We Help Turn Your Brand Into a Household Name</h2>
            <p class="mb-lg-2 mb-2">CSS Office Solutions is your reliable business partner in Singapore who cares about
              your business as much as you do.</p>
            <p class="mb-lg-3 mb-3">We make sure you have the best chance of success by working with you to understand
              your goals and then developing an ad campaigns plan to get you there - whether it's to:</p>
            <h6 class="mb-3"><i class="fa fa-check me-2 text-primary 2x"></i>Generating leads.
            </h6>
            <h6 class="mb-3"><i class="fa fa-check me-2 text-primary 2x"></i>Increase conversions.</h6>
            <h6 class="mb-3"><i class="fa fa-check me-2 text-primary 2x"></i>Create buzz around your brand.</h6>
            <p class="mb-lg-2 mb-2">We take care of everything from creating ads to managing our relationships with
              Google Ads and Facebook, so all you have to do is sit back and watch the money flow!</p>
          </div>
        </div>
        <div class="col-lg-5 col-md-12 order-1 order-lg-2 wow fadeInLeft" data-wow-duration="1s"
          data-wow-delay="0.2s">
          <div class="left-image mt-2 mb-3">
            <img src="{{ asset('frontend/images/d-Household.png') }}" class="img-fluid img-3
            " alt="img">
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="competetion-section p-1 p-md-4 p-lg-5" style="background: #1c3d8614">
    <div class="container py-2 py-md-0">
      <h6 class="text-center mt-3 mt-md-0">Get your business in the spotlight!</h6>
      <h2 class="p-0 mt-1 mb-2">Grow Your Business with Results-driven Advertising Strategies</h2>
      <p class="col-md-10 mx-auto">Our clients are always surprised at how much traffic and sales they generate after
        working with our digital marketing experts. Our proven strategies will set you apart from the competition and
        help you achieve optimal results with marketing campaigns that will help your business flourish.</p>
      
      <div class="row g-3 g-md-4 g-lg-5 justify-content-center mb-sm-4 mb-0">
        <div class="col-lg-5 col-md-10 fadeInLeft wow">
          <div class="competetion-img mt-0 mt-sm-3">
            <img src="{{ asset('frontend/images/search-engine-marketing.png') }}" class="img-fluid
              " alt="img">
          </div>
        </div>
        <div class="col-lg-5 col-md-10 d-flex justify-content-center align-items-center fadeInRight wow">
          <div class="competetion-section-box">
            <h6>Search Engine Marketing</h6>
            <h4>Increase Your Conversions From Your Website Traffic</h4>
            <p class="">Enjoy the most conversions from your organic traffic by placing your Google ads right in front
              of customers who are ready to make a purchase!
            </p>
          </div>
        </div>
      </div>

      <div class="row g-3 g-md-4 g-lg-5 justify-content-center mb-sm-4 mb-0">
        <div class="col-lg-5 col-md-10 order-2 order-lg-1 justify-content-center align-items-center d-flex fadeInRight wow">
          <div class="competetion-section-box">
            <h6 class="">Social Media Marketing</h6>
           <h4 class=""> Make Your Brand Visible To Your Audience</h4>
            <p class="">Target the right people who are interested in your product. Our team of experts will set up,
              track and analyze your Facebook ad campaign to deliver high-converting results.
            </p>
          </div>
        </div>
        <div class="col-lg-5 col-md-10 order-1 order-lg-2 fadeInLeft wow">
          <div class="competetion-img mt-0 mt-sm-3">
            <img src="{{ asset('frontend/images/social-media-marketing.png') }}" class="img-fluid
          " alt="img">
          </div>
        </div>
      </div>

      <div class="row justify-content-center g-3 g-md-4 g-lg-5">
        <div class="col-lg-5 col-md-10 fadeInLeft wow">
          <div class="competetion-img mt-0 mt-sm-3">
            <img src="{{ asset('frontend/images/landing-page-design.png') }}" class="img-fluid
          " alt="img">
          </div>
        </div>
        <div class="col-lg-5 col-md-10 d-flex justify-content-center align-items-center fadeInRight wow">
          <div class="competetion-section-box">
            <h6>Landing Page Design & Copywriting</h6>
            <h4>Stay on Top with Growing Leads and Conversions</h4>
            <p>Tell your audience your brand story. With our unique storybrand copy on your website, you can connect
              with your audience on a personal level and influence them to take action.
            </p>
          </div>
        </div>
      </div>

    </div>
  </div>

  <div id="portfolio" class="our-portfolio section mt-2 justify-content-center">
    <div class="container mb-5">

      <div class="row justify-content-center">
        <div class="col-lg-10">
          <div class="section-heading  wow bounceIn py-3" data-wow-duration="1s" data-wow-delay="0.2s">
            <h2>3 Steps to Get Your Business in <span style="color: #1c3d86;">The Game</span></h2>
          </div>
        </div>
        <div class="col-lg-10">
          <div class="row g-lg-5 gm-md-4 g-3">

            <div class="col-lg-4 col-sm-6 mb-2">
              <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                <div class="showed-content p-4">
                  <p>We meet online for a free 30-minute strategy session.</p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-sm-6 mb-2">
              <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                <div class="showed-content p-4">
                  <p>We craft a marketing plan specific to your unique service business. </p>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-sm-6 mb-2">
              <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                <div class="showed-content p-4">
                  <p>We customize and implement the solutions and deliver the results within 30 days.</p>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

    </div>
  </div>


  <div id="blog" class="our-blog section py-4" style="background: #1c3d8614;">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.25s">
          <div class="section-heading mb-2 mb-md-4">
            <h2><span style="color: #333;">Why You Should Choose </span><span style="color: #1c3d86">CSS Office
                Solutions</span></h2>
          </div>
        </div>
      </div>
      <div class="col-lg-10 mx-auto">
        <div class="row mb-md-5 mb-2 justify-content-center g-0 g-md-4 g-lg-5">
          <div class="col-lg-4 col-md-10 wow fadeInUp mb-lg-0 mb-4" data-wow-duration="1s" data-wow-delay="0.25s">
            <div class="left-image" style="height: 100%;">
              <div class="info">
                <div class="inner-content">
                  <h4 style="font-size: 24px;text-align:justify">Certified Meta Business Partner</h4>
                  <p>
                    We help you choose the right strategies for you and work with you to promote your brand and generate leads.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-10 wow fadeInUp mb-lg-0 mb-4" data-wow-duration="1s" data-wow-delay="0.25s">
            <div class="left-image" style="height: 100%;">
              <div class="info">
                <div class="inner-content">
                  <h4 style="font-size: 24px;text-align:justify">Proven All-inclusive  Solutions</h4>
                  <p>
                    We can develop a sales funnel strategy tailored for your business that will get you to your goals as quickly as possible.
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-10 wow fadeInUp mb-lg-0 mb-4" data-wow-duration="1s" data-wow-delay="0.25s">
            <div class="left-image" style="height: 100%;">
              <div class="info">
                <div class="inner-content">
                  <h4 style="font-size: 24px;text-align:justify">Guaranteed Risk-Free Offer</h4>
                  <p>
                    Get the most out of your marketing spend with our risk-free strategies that deliver results in as little as 30 days.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="contact" class="contact-us section py-md-5 py-4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-6 align-self-center wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.25s">
                <div class="section-heading">
                    <h4>We make it easy to get you started</h4>
                    <h2>Take Your Business to the Next Level Now!</h2>

                    <div class="phone-info">
                        <h4>For any enquiry, Call Us: <span><i class="fa fa-phone"></i> <a href="tel:+65 9067 6437">+65
                                    9067
                                    6437</a></span></h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-6 wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.25s">
                <form id="contact" action="{{ route('Store-Contact-Form') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <fieldset>
                                <input type="text" name="first_name" id="first_name" placeholder="First Name"
                                    required>
                            </fieldset>
                        </div>
                        <div class="col-lg-6">
                            <fieldset>
                                <input type="last_name" name="last_name" id="last_name" placeholder="Last Name"
                                    required>
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*"
                                    placeholder="Your Email" required>
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <textarea name="message" type="text" class="form-control" id="message" placeholder="Message" required></textarea>
                            </fieldset>
                        </div>
                        <div class="col-lg-12">
                            <fieldset>
                                <button type="submit" id="form-submit" class="main-button ">Send Message</button>
                            </fieldset>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection