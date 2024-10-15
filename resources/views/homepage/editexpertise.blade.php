@extends('admin.main')
@section('title')
    Edit Expertise
@endsection('title')
@section('content')
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h1 class="page-header-title">Home Manager</h1>
                </div>
                <div class="col-auto">
                    <a class="btn btn-primary" href="{{ route('city.viewexpertise') }}">
                        <i class="bi-eye"></i> View Expertise
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
                        <h4 class="card-header-title">EDIT EXPERTISE</h4>
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
                                            <select class="js-select form-select" id="category" name="category_id"
                                                data-hs-tom-select-options='{
                                                      "searchInDropdown": false,
                                                      "hideSearch": true
                                                    }'
                                                required disabled>
                                                <option value="" selected
                                                    data-option-template='<span class="d-flex align-items-center"><span class="flex-grow-1 ms-2">Select Category</span></span>'>
                                                    Select Category</option>
                                                @foreach ($category as $val)
                                                    <option <?php if ($data->category_id == $val->id) {
                                                        echo 'selected';
                                                    } ?> value="{{ $val->id }}"
                                                        data-option-template='<span class="d-flex align-items-center"><span class="flex-grow-1 ms-2">{{ $val->name }}</span></span>'>
                                                        {{ $val->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <!-- End Form -->
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-4 mb-lg-5">
                                        <label for="image" class="form-label">Image <i
                                                class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Image"></i></label>
                                        <input type="file" name="image" id="image" class="form-control">
                                        <div class="flex-shrink-0">
                                            <img class="avatar avatar-lg" src="{{ asset('public/' . $data->image) }}"
                                                alt="Image Description">
                                        </div>
                                    </div>
                                </div>
                                <!-- End Col -->
                            </div>
                            <!-- End Col -->
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