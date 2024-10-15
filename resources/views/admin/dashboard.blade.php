@extends('admin.main')
@section('title')
    Dashboard
@endsection('title')
@section('content')
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h1 class="page-header-title">Dashboard</h1>
                </div>
                <div class="col-auto">
                    <a class="btn btn-primary" href="https://www.flixaura.com" >
                      <i class="bi bi-browser-chrome me-1"></i> Website
                    </a>
                  </div>
                <!-- End Col -->
            </div>
            <!-- End Row -->
        </div>
        <!-- End Page Header -->

        <!-- Stats -->
        
        @role('admin')
        <div class="row">
            <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
                <!-- Card -->
                <div class="card h-100">
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2">Active Category</h6>

                        <div class="row align-items-center gx-2">
                            <div class="col">
                                <span class="js-counter display-4 text-dark">{{ $data['activecategory'] }}</span>
                                <span class="text-body fs-5 ms-1">from {{ $data['activecategory'] }}</span>
                            </div>
                            <!-- End Col -->

                            <div class="col-auto">
                                <a href="{{ route('category.viewpcategory') }}"
                                    class="badge bg-soft-success text-success p-1">
                                    <i class="bi-eye"></i> View
                                </a>
                            </div>
                            <!-- End Col -->
                        </div>
                        <!-- End Row -->
                    </div>
                </div>
                <!-- End Card -->
            </div>

            <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
                <!-- Card -->
                <div class="card h-100">
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2">Active Portfolio</h6>

                        <div class="row align-items-center gx-2">
                            <div class="col">
                                <span class="js-counter display-4 text-dark">{{ $data['activeportfolio'] }}</span>
                                <span class="text-body fs-5 ms-1">from {{ $data['totalportfolio'] }}</span>
                            </div>
                            <!-- End Col -->

                            <div class="col-auto">
                                <a href="{{ route('portfolio.viewportfolio') }}"
                                    class="badge bg-soft-success text-success p-1">
                                    <i class="bi-eye"></i> View
                                </a>
                            </div>
                            <!-- End Col -->
                        </div>
                        <!-- End Row -->
                    </div>
                </div>
                <!-- End Card -->
            </div>

            <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
                <!-- Card -->
                <div class="card h-100">
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2">Active Booking Requests</h6>

                        <div class="row align-items-center gx-2">
                            <div class="col">
                                <span class="js-counter display-4 text-dark">{{ $data['activebooking'] }}</span>
                                <span class="text-body fs-5 ms-1">from {{ $data['totalbooking'] }}</span>
                            </div>
                            <!-- End Col -->

                            <div class="col-auto">
                                <a href="{{ route('contact.viewbooking') }}" class="badge bg-soft-success text-success p-1">
                                    <i class="bi-eye"></i> View
                                </a>
                            </div>
                            <!-- End Col -->
                        </div>
                        <!-- End Row -->
                    </div>
                </div>
                <!-- End Card -->
            </div>

            <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
                <!-- Card -->
                <div class="card h-100">
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2">Contact Us</h6>

                        <div class="row align-items-center gx-2">
                            <div class="col">
                                <span class="js-counter display-4 text-dark">{{ $data['activecontactus'] }}</span>
                                <span class="text-body fs-5 ms-1">from {{ $data['totalcontactus'] }}</span>
                            </div>
                            <!-- End Col -->

                            <div class="col-auto">
                                <a href="{{ route('contact.viewcontact') }}"
                                    class="badge bg-soft-success text-success p-1">
                                    <i class="bi-eye"></i> View
                                </a>
                            </div>
                            <!-- End Col -->
                        </div>
                        <!-- End Row -->
                    </div>
                </div>
                <!-- End Card -->
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
                <!-- Card -->
                <div class="card h-100">
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2">Top City</h6>

                        <div class="row align-items-center gx-2">
                            <div class="col">
                                <span class="js-counter display-4 text-dark">{{ $data['topcity'] }}</span>
                                <span class="text-body fs-5 ms-1">from {{ $data['totalcity'] }}</span>
                            </div>
                            <!-- End Col -->

                            <div class="col-auto">
                                <a href="{{ route('city.view_city') }}" class="badge bg-soft-success text-success p-1">
                                    <i class="bi-eye"></i> View
                                </a>
                            </div>
                            <!-- End Col -->
                        </div>
                        <!-- End Row -->
                    </div>
                </div>
                <!-- End Card -->
            </div>
        </div>
        @endrole

        @role('photographer')
        <div class="row">
            <div class="col-sm-6 col-lg-3 mb-3 mb-lg-5">
                <!-- Card -->
                <div class="card h-100">
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2">Active Images</h6>

                        <div class="row align-items-center gx-2">
                            <div class="col">
                                <span class="js-counter display-4 text-dark">{{ $data['activeimage'] }}</span>
                                <span class="text-body fs-5 ms-1">from {{ $data['totalimage'] }}</span>
                            </div>
                            <!-- End Col -->

                            <div class="col-auto">
                                <a href="{{ route('viewphotoportfolio') }}" class="badge bg-soft-success text-success p-1">
                                    <i class="bi-eye"></i> View
                                </a>
                            </div>
                            <!-- End Col -->
                        </div>
                        <!-- End Row -->
                    </div>
                </div>
                <!-- End Card -->
            </div>
        </div>
        @endrole
        <!-- End Stats -->

    </div>
@endsection
