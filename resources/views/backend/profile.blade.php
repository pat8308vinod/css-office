@extends('backend.layouts.master')
@section('title', 'Profile | Css Office')
@section('body')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title"> Profile </h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('Dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Profile</li>
                    </ol>
                </nav>
            </div>

            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('Update-Profile') }}" class="forms-sample" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputName1">Name</label>
                                    <input type="text" name="name" class="form-control" id="exampleInputName1" value="{{ $profile->name }}" placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail3">Email address</label>
                                    <input type="email" name="email" class="form-control" id="exampleInputEmail3" value="{{ $profile->email }}" placeholder="Email">
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
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></>

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
