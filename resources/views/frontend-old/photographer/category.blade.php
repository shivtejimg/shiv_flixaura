@extends('frontend.layouts.app')
@section('title')
Photo - Hire Photography Agency
@endsection
@section('meta_title')
Photo - Hire Photography Agency
@endsection
@section('description')
Photography is our passion. We have been doing Indian Photography since over a decade and have experience shooting grand as well as intimate photography all across India.
@endsection
@push('stylesheet-link')
    <link rel="stylesheet" href="{{ asset('./../assets/plugins/justifiedGallery/justifiedGallery.min.css') }}">
@endpush

@section('mainsection')
    <?php use App\Helpers\Helpers; ?>
    <main class="main-scrollbar">
        <div class="container-fluid py-5 mt-5 categoryPage">
            <div class="container innerPage mb-4">
                <div class="row">
                    <div class="col-12 fs-lg-35 mb-4 fs-md-30 fs-sm-26 fs-22 fw-bold text-black pt-3 pb-2">Popular categories
                    </div>
                </div>
                <div class="row categoryCard g-md-4 g-sm-3 g-2">
                    <div class="col-12 justified-gallery categoryCard" id="livecategory">
                        @foreach ($categories as $category)
                            <?php $link = str_replace(' ', '-', $category->name); ?>
                            <a href="<?php echo asset('/photographer') . '/' . $link; ?>" class="collectionImg">
                                <img alt="{{ $category->name }}" src="{{ asset('/public') }}/{{ $category->image }}" />
                                <div
                                    class="categories_Name position-absolute w-100 h-100 p-3 text-white fw-bold d-flex justify-content-center align-items-center fs-lg-20 fs-md-18 fs-sm-16 fs-14">
                                    <span class="text-center">{{ $category->name }}</span></div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </main>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <p>Thankyou. We will be in touch soon.
                </div>
                <div class="modal-footer text-center justify-content-center">
                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal">OKAY</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('page-script-link')
    <script src="{{ asset('./../assets/plugins/justifiedGallery/jquery.justifiedGallery.min.js') }}"></script>
@endpush


@push('page-script')
    <script>
        $("#livecategory").justifiedGallery({
            waitThumbnailsLoad: false,
            margins: 7,
            rowHeight: 300,
            captions: false
            // rowHeight: 300,
            // maxRowHeight: 300,
            // lastRow: 'nojustify',
            // margins: 10,
            // captions: false
        });
    </script>
@endpush
