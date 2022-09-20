   @extends('frontend.layouts.master')
   @section('title', 'Home | Css Office')
   @section('body')
   <div class="main-banner main-banner-home" id="top">
     <div class="container">
       <div class="row">
         <div class="col-lg-9 col-md-12 py-4 py-sm-5 mt-auto h-b-c">
           <div class="left-content header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
             <p class="" style="color: #fff;">Streamlining the Workflow | Increasing Profitability | Boosting
               Productivity</p>
             <h2 class="text-justify mt-2 mt-md-0">Get More Done With <span style="color: #fff;">Technology</span> that <span style="color: #fff;">Works </span>For You</h2>
             <p class="mt-3 mt-lg-4">Achieve business success with customized and innovative office solutions. We work
               with you to
               understand your business and identify your needs to tailor the right solution for you </p>
             <button type="submit" class="main-button mt-4 mt-sm-5 mt-lg-5"><a href="tel:+65 9067 6437">Contact us</a></button>
           </div>
         </div>
        </div>
     </div>
   </div>
   <div class="hero-banner-bellow justify-content-center">
     <div class="container justify-content-center">
       <h6>You Need to Start Moving Now!</h6>
       <h2>Thinking of Ways to Stay Ahead of the Competition </h2>
       <p class="col-lg-10 mx-auto">No matter what business you run, there are always opportunities to improve and get
         better to keep up with the
         rapidly changing business landscape. And if you do not keep up with change, you'll soon find your business
         falling behind. Would you wait until your competitor has surpassed you before you act?</p>
     </div>

   </div>
   <div id="about" class="about-us section">
     <div class="container">

       <div class="row justify-content-center">
         <div class="col-lg-10">
           <div class="services">
             <div class="row g-4 g-md-5">
               <div class="col-lg-4 service-div">
                 <div class="item wow fadeIn p-4" data-wow-duration="1s" data-wow-delay="0.5s">
                   <div class="icon">
                     <img src="{{ asset('frontend/images/Traditional-Method.png') }}" alt="reporting">
                   </div>
                   <div class="right-text">
                     <h4 class="">Traditional Method</h4>
                     <p class="p-0"> Your competitor may do the same task in half the time and have more time for
                       critical work.</p>
                   </div>
                 </div>
               </div>
               <div class="col-lg-4 service-div">
                 <div class="item wow fadeIn p-4" data-wow-duration="1s" data-wow-delay="0.7s">
                   <div class="icon">
                     <img src="{{ asset('frontend/images/Business-Downtime.png') }}" alt="">
                   </div>
                   <div class="right-text">
                     <h4>Business Downtime</h4>
                     <p class="p-0">You do not want to upgrade your old copiers. But are they worth your downtime when they break?</p>
                   </div>
                 </div>
               </div>
               <div class="col-lg-4 service-div">
                 <div class="item wow fadeIn p-4" data-wow-duration="1s" data-wow-delay="0.9s">
                   <div class="icon">
                     <img src="{{ asset('frontend/images/low-converting-campaigns.png') }}" alt="">
                   </div>
                   <div class="right-text">
                     <h4>Low Converting Campaigns</h4>
                     <p class="p-0">You have tried to market your product online but you are not getting the results you
                       expect.</p>
                   </div>
                 </div>
               </div>

             </div>
           </div>
         </div>
       </div>
     </div>
   </div>

   <div id="services" class="our-services section py-3 py-md-5">
     <div class="container py-3">
       <div class="row g-lg-5 g-md-3 g-1 justify-content-center">

         <div class="col-xl-5 col-lg-5 col-md-12 wow fadeInRight d-flex justify-content-center align-item-center flex-column order-2 order-lg-1" data-wow-duration="1s" data-wow-delay="0.2s">
           <div class="section-heading">
             <h2 class="text-justify mt-3 mt-md-0">Delivering Business Success Through<span style="color: #1c3d86;">
                 Innovative Solutions</span></h2>
             <p class="mt-lg-4 mt-md-4 mt-3">CSS Office Solutions is a leading technology provider that helps local
               businesses manage
               their workflows
               and increase productivity. Through effective collaboration and customized software solutions, CSS helps
               you increase productivity and profitability. </p>
             <p>We specialize in helping our clients increase profitability through:</p>
           </div>
           <div class="row mt-lg-4 mt-md-4 mt-0">
             <div class="col-md-4 service-div mt-4 mt-lg-0">
               <div class="first-bar progress-skill-bar">
                 <a href="{{ url('/software') }}"><img class="" src="{{ asset('frontend/images/customized-software-icon.png') }}">
                   <p class="mt-2">Customized Software Solutions</p>
                 </a>
               </div>
             </div>
             <div class="col-md-4 service-div mt-4 mt-lg-0">
               <div class="second-bar progress-skill-bar">
                 <a href="{{ url('/hardware') }}"><img class="" src="{{ asset('frontend/images/fujufilm-icon.png') }}">
                   <p class="mt-2">Fujifilm Multi function Devices</p>
                 </a>
               </div>
             </div>
             <div class="col-md-4 service-div mt-4 mt-lg-0">
               <div class="third-bar progress-skill-bar">
                 <a href="{{ url('/digitalmarketing') }}"><img class="" src="{{ asset('frontend/images/digital-marketing-icon.png') }}">
                   <p class="mt-2">Digital Marketing Solutions</p>
                 </a>
               </div>
             </div>
           </div>
         </div>
         <div class="col-xl-5 col-lg-5 col-md-12 wow fadeInLeft justify-content-center align-item-center order-1 order-lg-2" data-wow-duration="1s" data-wow-delay="0.2s">
           <div class="left-image mt-2 mt-lg-0">
             <img src="{{ asset('frontend/images/business-1.png') }}" class="
            " alt="img">
           </div>
         </div>
       </div>
     </div>
   </div>

   <div class="competetion-section p-1 p-md-4 p-lg-5" style="background: #1c3d8614">
     <div class="container py-2 py-md-0">
       <h2 class="p-0 mt-1 mb-2">Keep Your <span>Business</span> on <span>Top</span> of the
         <span>Competition</span>
       </h2>
       <p class="col-md-10 mx-auto">Let CSS Office Solutions Be Your Competitive Edge: Everything you need to keep your
         office running smoothly is at our fingertips. As a leading tech provider, we have the innovative and
         customizable technologies to help your business thrive.</p>

       <div class="row g-3 g-md-4 g-lg-5 justify-content-center mb-sm-4 mb-0">
         <div class="col-lg-5 col-md-10 fadeInLeft wow">
           <div class="competetion-img mt-0 mt-sm-4">
             <img src="{{ asset('frontend/images/digital.png') }}" class="img-fluid
              " alt="img">
           </div>
         </div>
         <div class="col-lg-5 col-md-10 d-flex justify-content-center align-items-center fadeInRight wow">
           <div class="competetion-section-box">
             <a href="{{ url('/software') }}">
               <h6>SOFTWARE SOLUTIONS</h6>
             </a>
             <a href="{{ url('/software') }}">
               <h4>Customize Your <span>Software</span> For a Smarter Business</h4>
             </a>
             <p>Looking for a way to streamline your business workflow? Our team of developers can customize any app and
               software to meet your needs.
             </p>
           </div>
         </div>
       </div>

       <div class="row g-3 g-md-4 g-lg-5 justify-content-center mb-sm-4 mb-0">
         <div class="col-lg-5 col-md-10 order-2 order-lg-1 justify-content-center align-items-center d-flex fadeInRight wow">
           <div class="competetion-section-box">
             <a href="{{ url('/hardware') }}">
               <h6>HARDWARE SOLUTIONS</h6>
             </a>
             <a href="{{ url('/hardware') }}">
               <h4> Cutting-edge <span>Fujifilm MFDs</span> that Keep Your Office Running Smoother</h4>
             </a>
             <p> Whether you need a new copier or a comprehensive rental plan tailored to your needs, you can count on
               your Fujifilm Multifunction Devices to run smoothly for years to come.
             </p>
           </div>
         </div>
         <div class="col-lg-5 col-md-10 order-1 order-lg-2 fadeInLeft wow">
           <div class="competetion-img mt-sm-3 mt-0">
             <img src="{{ asset('frontend/images/har.png') }}" class="img-fluid
          " alt="img">
           </div>
         </div>
       </div>

       <div class="row justify-content-center g-3 g-md-4 g-lg-5">
         <div class="col-lg-5 col-md-10 fadeInLeft wow">
           <div class="competetion-img mt-0  mt-sm-3">
             <img src="{{ asset('frontend/images/software.png') }}" class="img-fluid
          " alt="img">
           </div>
         </div>
         <div class="col-lg-5 col-md-10 d-flex justify-content-center align-items-center fadeInRight wow">
           <div class="competetion-section-box">
             <a href="{{ url('/digitalmarketing') }}">
               <h6>DIGITAL MARKETING SOLUTIONS</h6>
             </a>
             <a href="{{ url('/digitalmarketing') }}">
               <h4>Achieve High <span>ROI</span> for Your Business with the Right <span>Marketing</span> Strategy</h4>
             </a>
             <p>Rev up your marketing and experience an ad campaign with the highest conversion rates! Our in-house
               digital marketing expert manages your project from start to finish!
             </p>
           </div>
         </div>
       </div>

     </div>
   </div>


   <div id="portfolio" class="our-portfolio section mt-2 justify-content-center">
     <div class="container mb-5">
       <div class="row justify-content-center">
         <div class="col-lg-10 mb-2 mt-2">
           <div class="section-heading  wow bounceIn py-3" data-wow-duration="1s" data-wow-delay="0.2s">
             <h2>3 Steps to Help You Manage Your <span style="color: #1c3d86;">Business Smarter</span></h2>
           </div>
         </div>
         <div class="col-lg-10">
           <div class="row g-lg-5 gm-md-4 g-3">
             <div class="col-lg-4 col-sm-6 mb-2">
               <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                 <div class="showed-content">
                   <p>Fill-up the form to schedule an appointment with us.</p>
                 </div>
               </div>
             </div>

             <div class="col-lg-4 col-sm-6 mb-2">
               <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                 <div class="showed-content">
                   <p>We Meet up, understand your business and learn how we will be working together. </p>
                 </div>
               </div>
             </div>

             <div class="col-lg-4 col-sm-6 mb-2">
               <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                 <div class="showed-content">
                   <p>We customize and implement a solution that fits your unique business. </p>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>

   <div id="blog" class="our-blog section py-4" style="background: #1c3d8614;">
     <div class="container mb-4">
       <div class="row">
         <div class="col-lg-10 wow fadeInDown mx-auto" data-wow-duration="1s" data-wow-delay="0.25s">
           <div class="section-heading py-md-3 py-0">
             <h2><span style="color: #333;">Why You Should Choose </span><span style="color: #1c3d86">CSS Office Solutions</span></h2>
           </div>
         </div>

       </div>
       <div class="col-lg-10 mx-auto">
         <div class="row g-2 g-md-5">
           <div class="col-lg-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.25s">
             <img src="{{ asset('frontend/images/b-1.jpg') }}" alt="Workspace Desktop" class="img-fulid mt-0 mt-lg-3 img-wc" style="border-radius: 20px; box-shadow: 5px 5px 15px -1px rgba(23, 68, 174, 0.53);">
           </div>
           <div class="col-lg-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.25s">
             <div class="right-list">
               <ul>
                 <li>
                   <div class="left-content align-self-center">

                     <h4>Authorized <span>Fujifilm</span> Reseller</h4>
                     <p>

                       Keep your business running smoothly with our state-of-the-art Fujifilm multifunction devices
                       (MFDs).
                     </p>
                   </div>

                 </li>
                 <li>
                   <div class="left-content align-self-center">

                     <h4>Certified Meta (Facebook) <span>Business Partner</span></h4>
                     <p>

                       We help you choose the right strategies for you and work with you to promote your brand and
                       generate
                       leads. </p>
                   </div>

                 </li>
                 <li>
                   <div class="left-content align-self-center">

                     <h4>Up to <span>70% EDG</span> Grant Support</h4>
                     <p>

                       Up to 70% funding from the Enterprise Development Grant (EDG)! Now is the perfect time to grow
                       your
                       business with us. </p>
                   </div>

                 </li>
                 <li>
                   <div class="left-content align-self-center">

                     <h4>One-Stop Solution in <span>Software</span> and <span>Hardware</span></h4>
                     <p>
                       Our team of experts will work hand-in-hand with you to provide the best possible outcome for your
                       IT
                       needs. </p>
                   </div>

                 </li>
               </ul>
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