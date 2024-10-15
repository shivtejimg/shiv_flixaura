@extends('admin.main')
@section('title')
    Edit Blog Category
@endsection('title')
@section('content')
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h1 class="page-header-title">Blog Category Manager</h1>
                </div>
                <div class="col-auto">
                    <a class="btn btn-primary" href="{{ route('blogcategory.view') }}">
                        <i class="bi-eye"></i> View Blog Category
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
                        <h4 class="card-header-title">Edit Blog Category</h4>
                    </div>
                    <!-- End Header -->

                    <!-- Body -->
                    <form method="POST" action="#" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <!-- Form -->
                            <div class="row">
                                <div class="col-md-12 mb-4">
                                    <label for="title" class="form-label">Title <i
                                            class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Title"></i></label>

                                    <input type="text" class="form-control" name="title" id="title" placeholder=""
                                        aria-label="" value="{{ $collection->title }}" required>
                                </div>
                            </div>
                            {{-- <div class="mb-4">
                                <label for="slug" class="form-label">Slug (URL) <i
                                        class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Slug (URL)"></i></label>
    
                                <input type="text" class="form-control" name="slug" id="slug"
                                    placeholder="" aria-label="" value="" required>
                            </div> --}}
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <label for="categoryNameLabel" class="form-label">Image Title <i
                                            class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Image Title"></i></label>

                                    <input type="text" class="form-control" name="imagetitle" id="categoryNameLabel"
                                        placeholder="" aria-label="" value="{{ $collection->imagetitle }}">
                                </div>
                                <div class="col-md-6 mb-4">
                                    <label for="categoryNameLabel" class="form-label">Image Alt <i
                                            class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Image Alt"></i></label>

                                    <input type="text" class="form-control" name="imagealt" id="categoryNameLabel"
                                        placeholder="" aria-label="" value="{{ $collection->imagealt }}" required>
                                </div>
                            </div>
                            <div class="mb-4 mb-lg-5">
                                <label for="categoryImageLabel" class="form-label">Image <i
                                        class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Image"></i></label>
                                        <input type="file" name="image" id="customFileEg1" class="form-control">
                                        <img src="{{asset('public/blog/'.$collection->image)}}" width="100px" height="100px">
                            </div>
                            <div class="mb-4">
                                <label for="categoryNameLabel" class="form-label">Description <i
                                        class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Description"></i></label>

                                <div class="centered form-control">
                                    <div class="row row-editor">
                                        <div class="editor-container">
                                            <textarea name="description" class="editor">{{ $collection->description }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="categoryNameLabel" class="form-label">Meta Title<i
                                        class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Meta Title"></i></label>

                                <input type="text" class="form-control" name="meta_title" id="categoryNameLabel"
                                    placeholder="" aria-label="" value="{{ $collection->meta_title }}" required>
                            </div>
                            <div class="mb-4">
                                <label for="categoryNameLabel" class="form-label">Meta Keywords<i
                                        class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Meta Keywords"></i></label>

                                <input type="text" class="form-control" name="meta_keywords" id="categoryNameLabel"
                                    placeholder="" aria-label="" value="{{ $collection->meta_keywords }}" required>
                            </div>
                            <div class="mb-4">
                                <label for="categoryNameLabel" class="form-label">Meta Description<i
                                        class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip"
                                        data-bs-placement="top" title="Meta Description"></i></label>

                                <input type="text" class="form-control" name="meta_description"
                                    id="categoryNameLabel" placeholder="" aria-label="" value="{{ $collection->meta_description }}" required>
                            </div>
                            <!-- End Form -->
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                    <!-- Body -->
                </div>
                <!-- End Card -->
            </div>
            <!-- End Col -->
        </div>
        <!-- End Stats -->
    </div>
@endsection
