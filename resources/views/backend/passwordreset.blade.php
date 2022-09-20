@extends('backend.layouts.master')
@section('title', 'Reset Password | Css Office')
@section('body')
<style>
    .stretch-card, .page-title{
        margin: 0 auto; /* Added */
        float: none; /* Added */
        margin-bottom: 10px; /* Added */
}
</style>
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title"> Reset Password </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('Dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Reset Password</li>
                    </ol>
                </nav>
            </div>

            <div class="row">
                <div class="col-md-6 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <form class="forms-sample" method="POST" action="{{ route('Store-Reset-Password') }}">
                                @csrf
                                <div class="mb-3">
                                    <label for="oldPasswordInput" class="form-label">Old Password</label>
                                    <input name="old_password" type="password" class="form-control @error('old_password') is-invalid @enderror" id="oldPasswordInput"
                                        placeholder="Old Password">
                                    @error('old_password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="newPasswordInput" class="form-label">New Password</label>
                                    <input name="new_password" type="password" class="form-control @error('new_password') is-invalid @enderror" id="newPasswordInput"
                                        placeholder="New Password">
                                    @error('new_password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="confirmNewPasswordInput" class="form-label">Confirm New Password</label>
                                    <input name="new_password_confirmation" type="password" class="form-control" id="confirmNewPasswordInput"
                                        placeholder="Confirm New Password">
                                </div>
                                <button type="submit" class="btn btn-primary mr-2">Update</button>
                                <a class="btn btn-light" href="javascript:history.back()">Go Back</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
    @push('js')
        <!-- jQuery CDN -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"
            integrity="sha512-37T7leoNS06R80c8Ulq7cdCDU5MNQBwlYoy1TX/WUsLFC2eYNqtKlV0QjH7r8JpG/S0GUMZwebnVFLPd6SU5yg=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <!-- // backend js file -->
    @endpush
    @section('javascript')
        <script>
            // validation script start here
            $(document).ready(function() {
                $("#updateprofile").validate({
                    rules: {
                        name: {
                            required: true,
                            minlength: 3
                        },
                        email: {
                            required: true,
                        },
                        password: {
                            required: true,
                        },
                        confirm: {
                            required: true,
                        },
                    },
                    messages: {
                        name: {
                            required: "Please enter title",
                            minlength: "Title should be at least 3 characters"
                        },
                        email: {
                            required: "Please Choose Image",
                        },
                        password: {
                            required: "Please enter description",
                        },
                        password: {
                            required: "Please enter description",
                        },
                    }
                });
            });
        </script>
