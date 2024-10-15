@extends('admin.main')
@section('title')
    Add City
@endsection('title')
@section('content')
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h1 class="page-header-title">City Manager</h1>
                </div>
                <div class="col-auto">
                  <a class="btn btn-primary" href="{{route('city.view_city')}}">
                      <i class="bi-eye"></i> View City
                  </a>
              </div>
            </div>
            <!-- End Row -->
        </div>
        <!-- End Page Header -->

        <!-- Stats -->
        <div class="row">
            <div class="col-lg-12 mb-3 mb-lg-0">
                <!-- Card -->
                <div class="card mb-3 mb-lg-5">
                    <!-- Header -->
                    <div class="card-header">
                        <h4 class="card-header-title">ADD CITY</h4>
                    </div>
                    <!-- End Header -->

                    <!-- Body -->
                    <div class="card-body">
                        <form method="POST" action="#" enctype="multipart/form-data">
                            @csrf
                            <!-- Form -->
                            <!-- End Form -->
                            <div class="row">
                                <div class="col-sm-12">
                                    <!-- Form -->
                                    <div class="mb-4">
                                        <label for="name" class="form-label">Name*</label>

                                        <input type="text" class="form-control" name="city_name" id="name"
                                            placeholder="Jaipur" aria-label="Jaipur" value="" required>
                                    </div>
                                    <!-- End Form -->
                                </div>
                                <!-- End Col -->
                            </div>
                            <!-- End Row -->
                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
                    </div>

                    <!-- Body -->
                </div>
                <!-- End Card -->
            </div>
        </div>
        <!-- End Stats -->

    </div>
@endsection
