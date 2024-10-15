@extends('admin.main')
@section('title')
    Portfolio Category
@endsection('title')
@section('content')
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h1 class="page-header-title">Category Manager</h1>
                </div>
                <div class="col-auto">
                  <a class="btn btn-primary" href="{{route('category.viewpcategory')}}">
                      <i class="bi-eye"></i> View Catgory
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
                        <h4 class="card-header-title">ADD CATEGORY</h4>
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

                                        <input type="text" class="form-control" name="name" id="name"
                                            placeholder="Baby Shoot" aria-label="Baby Shoot" value="" required>
                                    </div>
                                    <!-- End Form -->
                                </div>
                                <!-- End Col -->
                            </div>
                            <div class="row">
                              <div class="col-sm-12">
                                  <!-- Form -->
                                  <div class="mb-4">
                                      <label for="quote" class="form-label">Quote*</label>

                                      <input type="text" class="form-control" name="quote" id="quote"
                                          placeholder="Enter Quote" aria-label="Enter Quote" value="" required>
                                  </div>
                                  <!-- End Form -->
                              </div>
                              <!-- End Col -->
                            </div>
                            <div class="row">
                              <div class="col-sm-6">
                                <div class="mb-4 mb-lg-5">
                                    <label for="image" class="form-label">Image <i
                                            class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Image"></i></label>
                                    <input type="file" name="image" id="image" class="form-control">
                                </div>
                              </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <!-- Form -->
                                    <div class="mb-4">
                                        <label for="meta_title" class="form-label">Meta Title</label>

                                        <input type="text" class="form-control" name="meta_title" id="meta_title"
                                            placeholder="Baby Shoot" aria-label="Baby Shoot" value="">
                                    </div>
                                    <!-- End Form -->
                                </div>
                                <!-- End Col -->
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <!-- Form -->
                                    <div class="mb-4">
                                        <label for="meta_description" class="form-label">Meta Description</label>

                                        <input type="text" class="form-control" name="meta_description" id="meta_description"
                                            placeholder="Baby Shoot" aria-label="Baby Shoot" value="">
                                    </div>
                                    <!-- End Form -->
                                </div>
                                <!-- End Col -->
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <!-- Form -->
                                    <div class="mb-4">
                                        <label for="meta_keyword" class="form-label">Meta Keyword</label>

                                        <input type="text" class="form-control" name="meta_keyword" id="meta_keyword"
                                            placeholder="Baby Shoot" aria-label="Baby Shoot" value="">
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
