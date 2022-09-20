
@section('javascript')
<script>
    $(document).ready(function() {
        if ("{{ !empty(session('success')) }}") {
            successMsg("{{ session('success') }}")
        }
        if ("{{ !empty(session('error')) }}") {
            errorMsg("{{ session('error') }}")
        }
    })
</script>
@endsection
<footer class="py-4">
    <div class="container mt-2">
        <div class="row">

            <div class="col-md-4 col-sm-6 wow fadeIn mt-md-0 mt-2" data-wow-duration="1s" data-wow-delay="0.25s">
                <h5>CONTACT US</h5>
                <p>1 Yishun Industrial Street 1, #07-36 A'Posh Bizhub,<br> Singapore 768160.<br>
                    <a href="tel:+65 9067 6437">Contact: +65 9067 6437</a>
                </p>

            </div>
            <div class="col-md-3 col-7 wow fadeIn justify-content-center mt-md-0 mt-2" data-wow-duration="1s"
                data-wow-delay="0.25s">
                <h5>OUR SERVICES</h5>
                <p><a href="{{ url('/software') }}" class="d-block">Software Services</a>
                    <a href="{{ url('/hardware') }}" class="d-block">Hardware Services</a>
                    <a href="{{ url('/digitalmarketing') }}" class="d-block">Digital Marketing</a>
                </p>
            </div>
            <div class="col-md-2 col-5 wow fadeIn mt-md-0 mt-2" data-wow-duration="1s" data-wow-delay="0.25s">
                <h5>LEGAL</h5>
                <p><a href="{{ url('/privacypolicy') }}" class="d-block">Privacy And Policy</a>
                    <a href="" class="d-block">Terms</a>
                    <a href="{{ url('/blog') }}" class="d-block">Blogs</a>

                </p>
            </div>
            <div class="col-md-3 col-sm-6 wow fadeIn f-logo mt-md-0 mt-2" data-wow-duration="1s" data-wow-delay="0.25s">
                <h5>Follow Us</h5>
                <p class="follow-us-link ms-lg-3 ms-0">
                    <a href="https://www.facebook.com/cssfuji" target="_blank" class="me-3"><i
                            class="fa fa-facebook"></i></a>
                    <a href="https://www.linkedin.com/company/75583670/" target="_blank" class="me-3"><i
                            class="fa fa-linkedin"></i></a>
                </p>
            </div>
        </div>
        <hr class="text-white">
    </div>
    </div>
    <p class="text-center text-white mt-4 copy-right">©Copyright 2022 By <strong>CSS OFFICE SOLUTIONS PTE. LTD.</strong>
    </p>
</footer>
<!-- Scripts -->
<script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
<script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('frontend/js/owl-carousel.js') }}"></script>
<script src="{{ asset('frontend/js/animation.js') }}"></script>
<script src="{{ asset('frontend/js/templatemo-custom.js') }}"></script>
<script src="{{ asset('toastr/toastr.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>

</body>

</html>
