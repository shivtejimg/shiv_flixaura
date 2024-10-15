@extends('frontend.layouts.app')
@section('title')
{{$category->title}}
@endsection
@section('meta_title')
{{$category->meta_title}}
@endsection
@section('description')
{{$category->meta_description}}
@endsection
@push('stylesheet-link')
    <link rel="stylesheet" href="{{ asset('./../assets/plugins/justifiedGallery/justifiedGallery.min.css') }}">
@endpush

@section('mainsection')
    <?php use App\Helpers\Helpers; ?>
    <main class="main-scrollbar">
        <div class="container-fluid py-md-5 py-4 mt-5 blogPage position-relative">
            <div class="container innerPage mb-4">
                <div class="row mt-lg-4 mt-3">
                    <div class="col-lg-10 col-sm-11 mx-auto topBlogSection">
                        <div class="row gap-lg5 gap-4">
                            <div class="col-12">
                                {{-- <div class="text-theme1 fs-14 fw-bold">Measuerment <span
                                        class="text-muted">{{ date('j M Y', strtotime($category->created_at)) }}</span>
                                </div> --}}
                                <div
                                    class="blogHeading my-lg4 my3 text-capitalize fs-xl-40 fs-lg-35 fs-md-30 fs-sm-25 fs-20 fw-bold tex-dark lh-sm">
                                    {{ $category->title }}</div>
                                {{-- <div class="artistName row align-items-center gx-3">
                                    <div class="col-auto">
                                        <div
                                            class="artImg mw-40px h-40px rounded-circle overflow-hidden border border-2 border-dark">
                                            <img src="{{ asset('/resources/views/frontend/assets/img/couple-shoot/pexels-helena-lopes-1464565.jpg') }}"
                                                alt="artist" class="w-100 h-100"></div>
                                    </div>
                                    <div class="col">
                                        <div class="artistName fs-lg-16 fs-14 text-dark fw-semibold text-truncate">Daniel J.
                                            Schwarz</div>
                                    </div>
                                    <div class="col-auto newHeroSection bg-transparent blognewSection">
                                        <div
                                            class="socialIcons d-lg-flex d-none align-items-center justify-content-center active">
                                            <ul class="m-0 p-0 d-flex flexcolumn">
                                                <li><a href="https://www.facebook.com/flixauraindia" target="_blank"
                                                        class="hovers-facebook"><i class="imgb img-facebook"></i></a>
                                                </li>
                                                <li><a href="https://www.youtube.com/c/Flixaura" target="_blank"
                                                        class="hovers-youtube"><i class="imgb img-youtube"></i></a>
                                                </li>
                                                <li><a href="https://mobile.twitter.com/flixaura/with_replies"
                                                        target="_blank" class="hovers-twitter"><i
                                                            class="imgb img-twitter"></i></a>
                                                </li>
                                                <li><a href="https://www.instagram.com/flixaura/?hl=en" target="_blank"
                                                        class="hovers-instagram"><i class="imgb img-instagram"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                            <div class="col-12">
                                <div class="row gap-lg-4 gap-3">
                                    <div class="col-12">
                                        <div class="blogImg"><img src="{{ asset('/public/blog') }}/{{ $category->image }}"
                                                class="w-100" alt=""></div>
                                    </div>
                                    <div class="col-12 fs-lg-16 fs-14 fw-500 text-muted photorapherBlogs">{!! $category->description !!}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if (!empty($blog->toArray()))
                        <div class="col-12 mt-5">
                            <div class="row g-4">
                                <div class="section-title col-12 mt-lg-4 mt-3 text-center mb-2">
                                    <h4 class="fs-lg-35 fs-md-30 fs-20  text-muted">Related blog</h4>
                                    <div class=""><img src="{{ asset('/public') }}/frontend_assets/img/unnamed.png"
                                            class="img-fluid h-5px" alt="Our Expertise"></div>
                                </div>
                                @foreach ($blog as $singblog)
                                    <div class="col-xl-4 col-md-6">
                                        <div class="card blogCard">
                                            <div class="card-body">
                                                <div class="card-img rounded overflow-hidden mb-2">
                                                    <img src="{{ asset('/public/blog') }}/{{ $singblog->image }}"
                                                        class="w-100" alt="">
                                                </div>
                                                <div class="innerBody row gx-0 gap-3">
                                                    <div
                                                        class="col-auto blogcategory px-3 py-1 rounded-pill fs-12 fw-600 bg-primary d-inline text-white">
                                                        {{ $category->title }}</div>
                                                    <div class="col-12 blogLink"><a
                                                            href="{{ route('website.singleBlog', [strtolower($category->slug), $singblog->slug]) }}"
                                                            class="fw-600 text-theme1 fs-lg-18  fs-16 text-decoration-none lh-sm d-inline-flex">{{ $singblog->title }}</a>
                                                    </div>
                                                    {{-- <div class="col-12 fs-14 fw-normal blogContent">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet sint officiis aspernatur quasi quis maiores.</div> --}}
                                                    <div class="col-12">
                                                        <div class="row align-items-center">
                                                            <div class="col fs-14 fw-600 text-muted">By
                                                                {{ $singblog->username }}</div>
                                                            <div class="col-auto fs-14 fw-600 text-muted">
                                                                {{ date('j M Y', strtotime($category->created_at)) }}</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                {{-- <div class="col-12">
                                    <nav aria-label="Page navigation example ms-auto">
                                        <ul class="pagination gap-2 justify-content-lg-end justify-content-center">
                                            <li class="page-item disabled"><a
                                                    class="page-link border-0 rounded-0  fs-14 shadow-none pagBtn w-auto"
                                                    href="javascript:;">Prev</a></li>
                                            <li class="page-item"><a
                                                    class="page-link border-0 rounded-0 h-md-35px h-30px w-md-35px w-30px fs-lg-16 fs-14 shadow-none active"
                                                    href="javascript:;">1</a></li>
                                            <li class="page-item"><a
                                                    class="page-link border-0 rounded-0 h-md-35px h-30px w-md-35px w-30px fs-lg-16 fs-14 shadow-none"
                                                    href="javascript:;">2</a></li>
                                            <li class="page-item"><a
                                                    class="page-link border-0 rounded-0 h-md-35px h-30px w-md-35px w-30px fs-lg-16 fs-14 shadow-none"
                                                    href="javascript:;">3</a></li>
                                            <li class="page-item"><a
                                                    class="page-link border-0 rounded-0  fs-14 shadow-none pagBtn w-auto"
                                                    href="javascript:;">Next</a></li>
                                        </ul>
                                    </nav>
                                </div> --}}
                            </div>
                        </div>
                    @endif
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
@endpush
