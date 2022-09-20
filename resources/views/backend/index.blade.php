@extends('backend.layouts.master')
@section('title', 'Dashboard | Css Office')
@section('body')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="d-xl-flex justify-content-between align-items-start mb-3">
                <div class="dash-heading">
                    <h2 class="text-dark font-weight-bold mb-0">Dashboard </h2>

                    <ol class="breadcrumb p-0 ml-1" style="border: none;">
                        <li class="breadcrumb-item"><a href="{{ route('Dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                    </ol>
                </div>
                <div class="d-sm-flex justify-content-xl-between align-items-center mt-1">
                    <div class="dropdown ml-0 ml-md-4 mt-2 mt-lg-0" style="display:none;">
                        <button class="btn bg-white dropdown-toggle p-3 d-flex align-items-center" type="button"
                            id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i
                                class="mdi mdi-calendar mr-1"></i>24 Mar 2019 - 24 Mar 2019 </button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton1">
                            <h6 class="dropdown-header">Settings</h6>
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Separated link</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" id="proBanner" style="display: none;">
                <div class="col-12">
                    <span class="d-flex align-items-center purchase-popup p-4">

                        <h5 class="text-dark">You Courses Reached your targeted milestone</h5>

                        <a href="https://github.com/BootstrapDash/ConnectPlusAdmin-Free-Bootstrap-Admin-Template"
                            target="_blank" class="btn  ml-auto download-button">Check Details</a>
                        <a href="http://www.bootstrapdash.com/demo/connect-plus/jquery/template/" target="_blank"
                            class="btn purchase-button">No, Thanks</a>
                        <i class="mdi mdi-close" id="bannerClose"></i>
                    </span>
                </div>
            </div>


            <div class="row">
                <div class="col-md-12">
                    <div class="d-sm-flex justify-content-between align-items-center transaparent-tab-border {">
                        <ul class="nav nav-tabs tab-transparent" role="tablist" style="display: none;">
                            <li class="nav-item">
                                <a class="nav-link" id="home-tab" data-toggle="tab" href="#" role="tab"
                                    aria-selected="true">Users</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" id="business-tab" data-toggle="tab" href="#business-1"
                                    role="tab" aria-selected="false">Business</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="performance-tab" data-toggle="tab" href="#" role="tab"
                                    aria-selected="false">Performance</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="conversion-tab" data-toggle="tab" href="#" role="tab"
                                    aria-selected="false">Conversion</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content tab-transparent-content">
                        <div class="tab-pane fade show active" id="business-1" role="tabpanel"
                            aria-labelledby="business-tab">
                            <div class="row mt-3">
                                <div class="col-xxl-3 col-sm-6 grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="mt-3" style="float: left;">
                                                        <p class="mb-1 card-title ">Total Blogs</p>
                                                        <h3 class="mb-1 text-dark number-font">47</h3>
                                                        <span class="fs-12 text-muted"> <span class="text-success mx-1"><i
                                                                    class="mdi mdi-arrow-up"></i> <strong>
                                                                    2.6%</strong></span> <span class="ms-0 mt-1">than last
                                                                week</span> </span>
                                                    </div>
                                                </div>
                                                <div class="col col-auto">
                                                    <div
                                                        class="dashboard-progress dashboard-progress-1 d-flex align-items-center justify-content-center item-parent">
                                                        <i
                                                            class="mdi mdi-account-check icon-md absolute-center text-dark"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-sm-6 grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="mt-3" style="float: left;">
                                                        <p class="mb-1 card-title">Total Messages</p>
                                                        <h3 class="mb-1 text-dark number-font">534</h3>
                                                        <span class="fs-12 text-muted"> <span class="text-success mx-1"><i
                                                                    class="mdi mdi-arrow-up"></i><strong>
                                                                    2.6%</strong></span> <span class="ms-0 mt-1">than last
                                                                week</span> </span>
                                                    </div>
                                                </div>
                                                <div class="col col-auto">
                                                    <div
                                                        class="dashboard-progress dashboard-progress-2 d-flex align-items-center justify-content-center item-parent">
                                                        <i
                                                            class="mdi mdi-account-circle icon-md absolute-center text-dark"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="col-xxl-3 col-sm-6 grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="mt-3" style="float: left;">
                                                        <p class="mb-1 card-title">Total Courses</p>
                                                        <h3 class="mb-1 text-dark number-font">487</h3>
                                                        <span class="fs-12 text-muted"> <span class="text-success mx-1"><i
                                                                    class="mdi mdi-arrow-up"></i> <strong>
                                                                    2.6%</strong></span> <span class="ms-0 mt-1">than last
                                                                week</span> </span>
                                                    </div>
                                                </div>
                                                <div class="col col-auto">
                                                    <div
                                                        class="dashboard-progress dashboard-progress-3 d-flex align-items-center justify-content-center item-parent">
                                                        <i
                                                            class="mdi mdi-book-open-outline icon-md absolute-center text-dark"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-sm-6 grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body text-center">
                                            <div class="row">
                                                <div class="col">
                                                    <div class="mt-3" style="float: left;">
                                                        <p class="mb-1 card-title">Total Assignments</p>
                                                        <h3 class="mb-1 text-dark number-font">84</h3>
                                                        <span class="fs-12 text-muted"> <span class="text-success mx-1"><i
                                                                    class="mdi mdi-arrow-up"></i> <strong>
                                                                    2.6%</strong></span> <span class="ms-0 mt-1">than last
                                                                week</span> </span>
                                                    </div>
                                                </div>
                                                <div class="col col-auto">
                                                    <div
                                                        class="dashboard-progress dashboard-progress-4 d-flex align-items-center justify-content-center item-parent">
                                                        <i
                                                            class="mdi mdi-book-open-page-variant icon-md absolute-center text-dark"></i>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div> --}}
                            </div>

                            <div class="row">
                                <div class="col-lg-5 grid-margin stretch-card">
                                    <div class="card card-danger-gradient">
                                        <div class="card-body mb-4">
                                            <h4 class="card-title text-white">Website Traffic</h4>
                                            <canvas id="account-retension"></canvas>
                                        </div>
                                        <div class="card-body bg-white pt-4">
                                            <div class="row pt-4">
                                                <div class="col-sm-6">
                                                    <div class="text-center border-right border-md-0">
                                                        <h4>Conversion</h4>
                                                        <h1 class="text-dark font-weight-bold mb-md-3">306</h1>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="text-center">
                                                        <h4>Cancellation</h4>
                                                        <h1 class="text-dark font-weight-bold">1,520</h1>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-7 grid-margin stretch-card">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-xl-flex justify-content-between mb-2">
                                                <div class="card-header">
                                                    <h4 class="card-title">Course Progress</h4>
                                                </div>

                                                <div class="graph-custom-legend primary-dot" id="pageViewAnalyticLengend">
                                                </div>
                                            </div>
                                            <canvas id="myChart"></canvas>
                                        </div>
                                    </div>
                                </div>

                                <style>
                                    .card-header {
                                        margin-bottom: 0;
                                        background: none;
                                        padding: 1rem 1.5rem;
                                        width: 100%;

                                        display: flex;

                                        align-items: center;
                                        border-bottom: 1px solid rgba(227, 231, 241, 0.8);

                                    }

                                    .text-yellow {
                                        color: #ecb403 !important;
                                    }

                                    .card-body .table img {
                                        max-width: fit-content;
                                    }

                                    .software-cat img {
                                        padding: 9px;
                                        display: block;
                                        margin: 0 auto;
                                        width: 40px;
                                    }

                                    .br-5 {
                                        border-radius: 5px;
                                    }

                                    .ang-bg {
                                        background: #d92d30;
                                    }

                                    .wd-bg {
                                        background: #006fa5;
                                    }

                                    .re-bg {
                                        background: #5ed5f4;
                                    }

                                    .vue-bg {
                                        background: #41b883;
                                    }

                                    .lar-bg {
                                        background: #ee5045;
                                    }

                                    .node-bg {
                                        background: #80bd01;
                                    }
                                </style>










                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
