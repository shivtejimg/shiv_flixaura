@extends('admin.main')
@section('title')
    Portfolio
@endsection('title')
@section('content')
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h1 class="page-header-title">Portfolio Manager</h1>
                </div>
                <div class="col-auto">
                  <a class="btn btn-primary" href="{{route('portfolio.viewportfolio')}}">
                      <i class="bi-eye"></i> View Portfolio
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
                        <h4 class="card-header-title">ADD PORTFOLIO</h4>
                    </div>
                    <!-- End Header -->

                    <!-- Body -->
                    <div class="card-body">
                        <form method="POST" action="#" enctype="multipart/form-data">
                            @csrf
                            <!-- Form -->
                            <!-- End Form -->
                            <div class="row">
                                <div class="col-sm-6">
                                    <!-- Form -->
                                    <div class="mb-4">
                                        <label for="category" class="form-label">Category*</label>

                                        <div class="tom-select-custom">
                                            <select class="js-select form-select" id="category" name="category_id" data-hs-tom-select-options='{
                                                      "searchInDropdown": false,
                                                      "hideSearch": true
                                                    }' required>
                                            <option value="" selected data-option-template='<span class="d-flex align-items-center"><span class="flex-grow-1 ms-2">Select Category</span></span>'>Select Category</option>
                                            @foreach ($data as $val)
                                                <option value="{{ $val->id }}" data-option-template='<span class="d-flex align-items-center"><span class="flex-grow-1 ms-2">{{ $val->name }}</span></span>'>{{ $val->name }}</option>
                                            @endforeach
                                            </select>
                                          </div>
                                    </div>
                                    <!-- End Form -->
                                </div>

                                <div class="col-sm-6">
                                    <!-- Form -->
                                    <div class="mb-4">
                                        <label for="type" class="form-label">Type*</label>
                                        <div class="tom-select-custom">
                                            <select onchange="select_type()" class="js-select form-select" id="type" name="type" data-hs-tom-select-options='{
                                                      "searchInDropdown": false,
                                                      "hideSearch": true
                                                    }' required>
                                            <option value="" selected data-option-template='<span class="d-flex align-items-center"><span class="flex-grow-1 ms-2">Select Type</span></span>'>Select Type</option>
                                            <option value="image" data-option-template='<span class="d-flex align-items-center"><span class="flex-grow-1 ms-2">Image</span></span>'>Image</option>
                                            <option value="video" data-option-template='<span class="d-flex align-items-center"><span class="flex-grow-1 ms-2">Video</span></span>'>Video</option>
                                            </select>
                                          </div>
                                    </div>
                                    <!-- End Form -->
                                </div>
                                <!-- End Col -->
                            </div>
                            <div class="row" id="videosection" style="display: none;">
                              <div class="col-sm-6">
                                  <!-- Form -->
                                  <div class="mb-4">
                                      <label for="title" class="form-label">Title*</label>

                                      <input type="text" class="form-control" name="title" id="title"
                                          placeholder="Enter Title" aria-label="Enter Title" value="">
                                  </div>
                                  <!-- End Form -->
                              </div>

                              <div class="col-sm-6">
                                <!-- Form -->
                                <div class="mb-4">
                                    <label for="video" class="form-label">Video*</label>

                                    <input type="url" class="form-control" name="video" id="video"
                                        placeholder="https://example.com" aria-label="https://example.com" value="">
                                </div>
                                <!-- End Form -->
                            </div>
                              <!-- End Col -->
                            </div>
                            <div class="row" id="imagesection" style="display: none;">
                              <div class="col-sm-6">
                                <div class="mb-4 mb-lg-5">
                                    <label for="image" class="form-label">Image <i
                                            class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Image"></i></label>
                                    <input type="file" name="image[]" id="image" class="form-control" multiple>
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
    <script type="text/javascript">


        function select_type(){
            var type = $("#type").val();
            if(type=='image'){
                $('#imagesection').show();
                $('#videosection').hide();
            }else{
                $('#imagesection').show();
                $('#videosection').show();
            }
        }
    
    </script>
@endsection
