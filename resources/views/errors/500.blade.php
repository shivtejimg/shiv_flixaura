@extends('frontend.layouts.app')
@section('title')
@push('stylesheet-link')
    <link rel="stylesheet" href="{{ asset('./../assets/plugins/justifiedGallery/justifiedGallery.min.css') }}">
@endpush

@section('mainsection')
    <?php use App\Helpers\Helpers; ?>
    <main class="main-scrollbar">
        <div class="container-fluid py-md-5 py-4 mt-5 blogPage position-relative">
            <div class="container innerPage">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-sm-7 order-sm-1 order-2 mt-sm-0 mt-4">
                        <div class="row text-sm-start text-center">
                            <div class="col-12 fw-bold fs-lg-60 fs-md-50 fs-30 text-theme1">Page Not Found</div>
                            <div class="col-12 fw-bold fs-md-25 fs-18 text-muted">This page does not exist</div>
                            <div class="col-12 mt-3">
                                <div class="hero p-0 text-sm-start text-center">
                                    <a type="button" href="{{route('website.webhomepage')}}" id="formsubmit" class="comman_button shadow text-black d-inline-flex align-items-center justify-content-start mb-0"><span class="text-black">Back to Home <img src="{{ asset('/public') }}/frontend_assets/img/header/logo.png" class="img-fluid h-30px" alt="logo" style="display:inline;"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5 col-7 mx-auto order-sm-2 order-1">
                        <img src="{{asset('/public/error.jpg')}}" class="w-100" alt="">
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@push('page-script-link')
    <script src="{{ asset('./../assets/plugins/justifiedGallery/jquery.justifiedGallery.min.js') }}"></script>
@endpush


@push('page-script')
@endpush
