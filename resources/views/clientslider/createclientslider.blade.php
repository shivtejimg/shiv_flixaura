@extends('admin.main')
@section('title')
    Add Client Slider
@endsection('title')
@section('content')
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h1 class="page-header-title">Client Manager</h1>
                </div>
                <div class="col-auto">
                  <a class="btn btn-primary" href="{{route('client.viewclientslider')}}">
                      <i class="bi-eye"></i> View Slider
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
                        <h4 class="card-header-title">ADD SLIDER</h4>
                    </div>
                    <!-- End Header -->

                    <!-- Body -->
                    <div class="card-body">
                        <form method="POST" action="#" enctype="multipart/form-data">
                            @csrf
                            <!-- Form -->
                            <div class="row">
                              <div class="col-sm-12">
                                <div class="mb-4 mb-lg-5">
                                    <label for="image" class="form-label">Image <i
                                            class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Image"></i></label>
                                    <input type="file" name="image" id="image" class="form-control">
                                </div>
                              </div>
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
