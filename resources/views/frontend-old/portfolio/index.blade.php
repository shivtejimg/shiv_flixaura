@extends('frontend.layouts.app')
@section('title')
{{ $portfoliocategory->name }}
@endsection
@section('meta_title')
{{ $portfoliocategory->meta_title }}
@endsection
@section('description')
{{ $portfoliocategory->meta_description }}
@endsection
@section('keyword')
{{ $portfoliocategory->meta_keyword }}
@push('stylesheet-link')
@endpush

@section('mainsection')
<?php

use App\Traits\SettingsTrait; ?>
<main class="main-scrollbar">
    <!-- Templete -->
    <section id="hero" class="container-fluid hero portfolio_categories zi-1 pb-0 pt-5">
        <div class="row h100  align-items-center">
            <div class="col-lg-5 slider1" style="padding-left:0px;">
                <div class="carousel carousel-fade slide home-slide">
                    <div class=" carousel-inner">
                        <div class="carousel-item active" style="background-image:url({{ asset('/') }}timthumb.php?src={{ asset('/public') }}/{{ $portfoliocategory->image }}&w=880&zc=3);">
                            <div class="carousel-caption d-none d-md-block"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 h100 position-relative mb-lg-0 mb-5 zi-10 d-flex align-items-center justify-content-lg-start justify-content-md-center justify-content-center">
                <div class="row position-relative mx-0 mx-0 w-100">
                    <div class="col-lg-11 ms-auto">
                        <div class="wedding_content1 pe-lg-5 mt-lg-0 mt-md-3 mt-4">
                            <h1 class="fs-xl-40 fs-lg-30 fs-md-25 fs-22 fw-bold">{{ $portfoliocategory->name }}</h1>
                            <p class="fs-lg-16 fs-md-15 fs-14">{{ $portfoliocategory->quote }}</p>
                            <a class="comman_button shadow text-black mt-2 mb-0" href="{{ asset('/') }}book-now?category={{ $portfoliocategory->name }}"><span class="text-black">I Want a
                                    Photographer</span><img src="{{ asset('/') }}timthumb.php?src={{ asset('/public') }}/frontend_assets/img/header/logo.png&w=50&zc=3" class="img-fluid h-md-40px h-30px" alt="Flixaura Logo" style="margin-left:10px; display:inline;"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- hero section end -->
    <!-- cateogory section start-->
    <section id="category" class="category shadow  mb-0 bg-dark py-lg5 pt-md-4 pb-md-5 pt-4 pb-4 position-relative zi-3">
        <div class="container">
            <div class="category_content text-center">
                <h2 class="fs-lg-26 fw-500 fs-20 text-white">All Categories</h2>
            </div>
            <div class="row mt-lg5 mt-md-4 mt-4 mx-0">
                <div class="col-12">
                    <div class="category_sldier owl-carousel">
                        @foreach ($categories as $value)
                        <?php $link = str_replace(' ', '-', $value->name); ?>
                        <a class="category_sldier_box" href="<?php echo asset('/portfolio') . '/' . $link; ?>" style="--bg:url({{ asset('/') }}timthumb.php?src={{ asset('/public') }}/{{ $value->image }}&w=150&zc=3);">
                            <span class="fs-10 text-center">{{ $value->name }}</span>
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>



    <div class="container-fluid portfolio-categories pt-0 position-relative">
        <div class="hero p-0 affor-d nonbgb-tn text-center bookBtn fixedBtn" id="target-element">
            <a href="{{ asset('/') }}book-now?category={{ $portfoliocategory->name }}" type="button" class="comman_button shadow border-0 text-white d-inline-flex align-items-center justify-content-start m-0 px-4 gap-2 rounded-pill"><span class="text-white">Book Now <img src="{{ asset('/public') }}/frontend_assets/img/rightSingalArrow.svg" class="img-fluid h-15px ms-2" alt="logo" style="display:inline;"></span></a>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12 fs-lg-45 fs-md-40 fs-sm-35 fs-30 fw-bold text-muted pt-4 pb-3">
                    {{ $portfoliocategory->name }}
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <ul class="nav nav-tabs mx-md-n3 mx-n2" id="portfolioCat" role="tablist">
                        <?php $status = SettingsTrait::getcatcheck($portfoliocategory->id); ?>
                        @if ($status == 1)
                        <li class="nav-item" role="presentation">
                            <button class="nav-link fw-bold fs-lg-17 fs-md-16 fs-15 px-md-3 px-2 active" id="videos-tab" data-bs-toggle="tab" data-bs-target="#videos" type="button" role="tab" aria-controls="videos" aria-selected="true">Videos</button>
                        </li>
                        @elseif($status == 2)
                        <li class="nav-item" role="presentation">
                            <button class="nav-link fw-bold fs-lg-17 fs-md-16 fs-15 px-md-3 px-2" id="photos-tab" data-bs-toggle="tab" data-bs-target="#photos" type="button" role="tab" aria-controls="photos" aria-selected="true">Photos</button>
                        </li>
                        @elseif($status == 3)
                        <li class="nav-item" role="presentation">
                            <button class="nav-link fw-bold fs-lg-17 fs-md-16 fs-15 px-md-3 px-2 active" id="videos-tab" data-bs-toggle="tab" data-bs-target="#videos" type="button" role="tab" aria-controls="videos" aria-selected="true">Videos</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link fw-bold fs-lg-17 fs-md-16 fs-15 px-md-3 px-2" id="photos-tab" data-bs-toggle="tab" data-bs-target="#photos" type="button" role="tab" aria-controls="photos" aria-selected="true">Photos</button>
                        </li>
                        @endif

                    </ul>
                </div>
            </div>
        </div>
        {{-- <div class="container-fluid px-0">
                <div class="row">
                    <div class="col-12">
                        <div class="tab-content" id="portfolioCatContent">
                            <div class="tab-pane fade show active" id="videos" role="tabpanel"
                                aria-labelledby="videos-tab">
                                <div class="row pt-md-5 pt-4">
                                    <div class="col-12">
                                        <div class="row">
                                            @foreach ($data as $value)
                                                @if ($value->type == 'video')
                                                    <div class="col-md-6 p-3">
                                                        <div class="row mx-0 demo-for-iframe position-relative">
                                                            <a href="{{ $value->video }}" target="_blank"
        class="col-12 video_ratio rounded-10 overflow-hidden">
        @if (empty($value->image))
        <img src="{{ asset('/public') }}/logo.png" alt="Video Frame">
        @else
        <img src="{{ asset('/public') }}/{{ $value->image }}" alt="Video Frame">
        @endif
        <span>
            <div class="waves-block">
                <div class="waves wave-1">
                    <i class="imgd img-play"></i>
                </div>
                <div class="waves wave-2">
                    <i class="imgd img-play"></i>
                </div>
                <div class="waves wave-3">
                    <i class="imgd img-play"></i>
                </div>
            </div>
            <i class="imgd img-play"></i>
        </span>

        </a>
        @if (!empty($value->title))
        <p style="position: absolute;bottom: -16px;padding: 10px 0px;text-align: center;color: white;font-size: 22px;font-weight: bold;background: #03081b52;border-radius: 10px;">
            {{ $value->title }}
        </p>
        @endif
    </div>
    </div>
    @endif
    @endforeach

    </div>
    </div>
    </div>
    </div>
    <div class="tab-pane fade" id="photos" role="tabpanel" aria-labelledby="photos-tab">
        <div class="row pt-md-5 pt-4">
            <div class="col-12">
                <div class="row">
                    <div id="mygallery" class="px-0 shoot">
                        @foreach ($data as $value)
                        <?php $parts = explode('/', $value->image); ?>
                        @if ($value->type == 'image')
                        <div class="photoghraphy_box d-flex align-items-end justify-content-end rounded text-decoration-none">
                            <img class="lazy" alt="Title 1" src="{{ asset('/') }}/timthumb.php?src={{ asset('/public/portfoli_image') }}/{{ $parts[1] }}&h=20&zc=3" srcset="{{ asset('/') }}/timthumb.php?src={{ asset('/public/portfoli_image') }}/{{ $parts[1] }}&h=20&zc=3" data-src="{{ asset('/') }}/timthumb.php?src={{ asset('/public/portfoli_image') }}/{{ $parts[1] }}&h=350&zc=3" data-srcset="{{ asset('/') }}/timthumb.php?src={{ asset('/public/portfoli_image') }}/{{ $parts[1] }}&h=350&zc=3" />
                            <div class="lazy-wave"></div>
                            @if ($value->book_now == '1')
                            <a href="{{ asset('/') }}book-now" class="book_now">
                                book now
                            </a>
                            @endif
                        </div>
                        @endif
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div> --}}
    <div class="container-fluid pt-md-5 pt-4">
        <div class="portfolioCategiriesPage">
            <div class="tab-content" id="portfolioCatContent">
                <div class="tab-pane fade show active" id="videos" role="tabpanel" aria-labelledby="videos-tab">
                    <div class="justified-gallery categoryCard" id="livecategory">
                        @foreach ($data as $value)
                        @if ($value->type == 'video')
                        @if (strpos($value->video, "mxplayer") !== false)
                        <a href="{{ $value->video }}" target="_blank" class="videoImg">
                            <img alt="" src="{{ asset('/public') }}/{{ $value->image }}" />
                            @if (!empty($value->title))
                            <div class="categories_Name videoName position-absolute w-100 bottom-0 p-2 text-white fw-bold d-flex justify-content-center align-items-center fs-lg-20 fs-md-18 fs-sm-16 fs-14">
                                <span class="text-center fw-500">{{ $value->title }}</span>
                            </div>
                            @endif
                        </a>
                        @else
                        <a href="{{ $value->video }}" class="videoImg glightbox3">
                            <img alt="" src="{{ asset('/public') }}/{{ $value->image }}" />
                            @if (!empty($value->title))
                            <div class="categories_Name videoName position-absolute w-100 bottom-0 p-2 text-white fw-bold d-flex justify-content-center align-items-center fs-lg-20 fs-md-18 fs-sm-16 fs-14">
                                <span class="text-center fw-500">{{ $value->title }}</span>
                            </div>
                            @endif
                        </a>
                        @endif

                        @endif
                        @endforeach
                    </div>
                </div>
                <div class="tab-pane fade" id="photos" role="tabpanel" aria-labelledby="photos-tab">
                    <div class="categoryPage">
                        <div class="innerPage">
                            <div class="justified-gallery categoryCard" id="liveimgcategory">
                                @foreach ($data as $value)
                                <?php $parts = explode('/', $value->image); ?>
                                @if ($value->type == 'image')
                                <a href="{{ asset('/public/portfoli_image') }}/{{ $parts[1] }}" class="glightbox2 collectionImg">
                                    <img alt="" src="{{ asset('/public/portfoli_image') }}/{{ $parts[1] }}" />
                                    @if (!empty($value->title))
                                    <div class="categories_Name videoName position-absolute w-100 h-100 p-2 text-white fw-bold d-flex justify-content-center align-items-center fs-lg-20 fs-md-18 fs-sm-16 fs-14">
                                        <span class="text-center fw-500">{{ $value->title }}</span>
                                    </div>
                                    @endif
                                </a>
                                @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

</main>
@endsection

@push('page-script-link')
@endpush


@push('page-script')
<script>
    $("#livecategory, #liveimgcategory").justifiedGallery({
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
    var lightboxVideo = GLightbox({
        selector: '.glightbox3'
    });
    var lightboxDescription = GLightbox({
        selector: '.glightbox2'
    });
</script>

<script>
    // $(window).scroll((function() {
    //     var scroll;
    //     $(window).scrollTop() <= 80 ? $("body").removeClass("bookbtn") : $("body").addClass("bookbtn")
    //     }
    // )),
</script>
{{-- <script>
        function addClassOnScroll() {
            const targetElement = document.getElementById('target-element');
            const scrollY = window.scrollY || window.pageYOffset;

            if (scrollY > 200) { 
                targetElement.classList.add('fixedBtn');
            } else {
                targetElement.classList.remove('fixedBtn');
            }
        }
        window.addEventListener('scroll', addClassOnScroll);
    </script> --}}
@endpush