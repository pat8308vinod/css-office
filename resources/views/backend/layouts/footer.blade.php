
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
            <div class="footer-inner-wraper d-flex justify-content-center">
                Copyright © CssOffice Solution
                Pte. Ltd. 2022
            </div>
        </footer>
        <!-- partial -->
    </div>
    <!-- main-panel ends -->
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
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="{{ asset('backend/vendors/js/vendor.bundle.base.js') }}"></script>
<!-- endinject -->
@stack('js')
<!-- Plugin js for this page -->
<script src="{{ asset('backend/vendors/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('backend/vendors/jquery-circle-progress/js/circle-progress.min.js') }}"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{ asset('backend/js/off-canvas.js') }}"></script>
<script src="{{ asset('backend/js/hoverable-collapse.js') }}"></script>
<script src="{{ asset('backend/js/misc.js') }}"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="{{ asset('backend/js/dashboard.js') }}"></script>
<!-- End custom js for this page -->
<script src="{{ asset('toastr/toastr.min.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
