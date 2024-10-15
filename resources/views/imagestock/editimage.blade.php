@extends('admin.main')
@section('title')
    Edit Image
@endsection('title')
@section('content')
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h1 class="page-header-title">Image Manager</h1>
                </div>
                <div class="col-auto">
                    <a class="btn btn-primary" href="{{ route('viewimagestock') }}">
                        <i class="bi-eye"></i> View Images
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
                        <h4 class="card-header-title">EDIT IMAGE</h4>
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
                                            <select class="js-select form-select" id="category" name="categoryid"
                                                data-hs-tom-select-options='{
                                                      "searchInDropdown": false,
                                                      "hideSearch": true
                                                    }'
                                                required>
                                                <option value="" selected
                                                    data-option-template='<span class="d-flex align-items-center"><span class="flex-grow-1 ms-2">Select Category</span></span>'>
                                                    Select Category</option>
                                                @foreach ($category as $val)
                                                    <option <?php if ($data->categoryid == $val->id) {
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
                                    <!-- Form -->
                                    <div class="mb-4">
                                        <label for="title" class="form-label">Title*</label>

                                        <input type="text" class="form-control" name="title" id="title"
                                            placeholder="Title" aria-label="Title" value="{{$data->title}}" required>
                                    </div>
                                    <!-- End Form -->
                                </div>
                                <!-- End Col -->
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <!-- Form -->
                                    <div class="mb-4">
                                        <label for="price" class="form-label">Price*</label>

                                        <input type="number" class="form-control" name="price" id="price"
                                            placeholder="0" aria-label="0" value="{{$data->price}}" required>
                                    </div>
                                    <!-- End Form -->
                                </div>
                                <div class="col-sm-6">
                                    <!-- Form -->
                                    <div class="mb-4">
                                        <label for="discount" class="form-label">Discount*</label>

                                        <input type="number" class="form-control" name="discount" id="discount"
                                            placeholder="0" aria-label="0" value="{{$data->discount}}" required>
                                    </div>
                                    <!-- End Form -->
                                </div>
                                <!-- End Col -->
                            </div>
                            <div class="row" id="imagesection">
                                <div class="col-sm-6">
                                    <!-- Form -->
                                    <div class="mb-4">
                                        <label for="finalprice" class="form-label">Sell Price*</label>

                                        <input type="number" class="form-control" name="finalprice" id="finalprice"
                                            placeholder="0" aria-label="0" value="{{$data->finalprice}}" required>
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