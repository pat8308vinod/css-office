@extends('frontend.layouts.master')
@section('title', 'Contact |Css Office')
@section('body')
<section class="contact py-5 mt-5">
    <div class="container mt-4 mt-md-5">
        <h2 class="heading text-capitalize text-center mb-sm-5 mb-2 mb-md-5"> Get In Touch with us</h2>
        <div class="row justify-content-center contact-grids g-5 d-flex">
        <div class="col-lg-5 col-md-6 wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.25s">
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
            <div class="col-lg-5 col-md-6 contact-right px-4 px-lg-4 wow fadeInRight" data-wow-duration="0.5s" data-wow-delay="0.25s" >
                <h3 class="fw-bold">Let's get you some help!</h3>
                <h5 class="py-2" style="color:#1d3e86">Have any issue? Contact Us.</span></h5>
                <p class="mt-2"><i class="fa fa-envelope me-3"></i><a href="mailto:info@cssoffice.sg" class="">info@cssoffice.sg</a>
                <p class="mt-2"><i class="fa fa-phone me-3"></i><a href="tel:+65 9067 6437" class="">+65 9067 6437</a>
                <p class="mt-2 mb-2" style="color:#222;"><i class="fa fa-map-marker me-4"></i>CSS Office Solutions PTE. Ltd.<span class="d-block" style="margin-left:35px"> 1 Yishun Industrial Street 1, #07-36 A'Posh Bizhub,
                        Singapore 768160.</span></p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d31792772.601706967!2d70.4599204410418!3d13.415193902353584!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d18.5246164!2d73.8629674!4m5!1s0x31da178f5448583f%3A0x9e09bae6133ff29f!2scss%20office%20solutions%20singapore!3m2!1d1.436958!2d103.8421412!5e0!3m2!1sen!2sin!4v1662570843486!5m2!1sen!2sin" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
    
</section>

@endsection