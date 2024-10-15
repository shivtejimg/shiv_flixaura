@extends('frontend.layouts.app')
@section('title')
    {{ $blog->title }}
@endsection
@section('meta_title')
    {{ $blog->meta_title }}
@endsection
@section('description')
    {{ $blog->meta_description }}
@endsection
@section('keyword')
    {{ $blog->meta_keywords }}
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
                    <div class="col-lg-8 col-sm11 mxauto topBlogSection">
                        <div class="row gap-lg5 gap-4">
                            <div class="col-12">
                                {{-- <div class="text-theme1 fs-14 fw-bold">Measuerment <span
                                        class="text-muted">{{ date('j M Y', strtotime($blog->created_at)) }}</span></div> --}}
                                <div
                                    class="blogHeading my-lg4 my3 m-0 text-capitalize fs-xl-40 fs-lg-35 fs-md-30 fs-sm-25 fs-20 fw-bold tex-dark lh-sm">
                                    {{ $blog->title }}</div>
                                {{-- <div class="artistName row align-items-center gx-3">
                                    <div class="col-auto">
                                        <div
                                            class="artImg mw-40px h-40px rounded-circle overflow-hidden border border-2 border-dark">
                                            <img src="{{ $blog->userimage }}" alt="artist" class="w-100 h-100"></div>
                                    </div>
                                    <div class="col">
                                        <div class="artistName fs-lg-16 fs-14 text-dark fw-semibold text-truncate">
                                            {{ $blog->username }}</div>
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
                                        <div class="blogImg"><img src="{{ asset('/public/blog') }}/{{ $blog->image }}"
                                                class="w-100" alt=""></div>
                                    </div>
                                    <div class="col-12 fs-lg-16 fs-14 fw-500 text-muted blogCategoryPage singalBlogText">
                                        {!! $blog->description !!}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 rightSide mt-lg-0 mt-4">
                        <div class="row position-sticky top-100px">
                            <div class="col-12">
                                <div class="card border-0 rounded-0 bg-white">
                                    <div class="card-body p-xl-3 p-0 pt-lg-0">
                                        <div
                                            class="card-text mb-lg-4 mb-3 position-relative fs-16 text-dark fw-600 sideBarheading">
                                            Trending Blogs</div>
                                        <div class="userPost">
                                            @foreach ($topblog as $topval)
                                                <div class="row mx-0 mb-4">
                                                    <div class="col-auto px-0">
                                                        <div
                                                            class="userImg position-relative rounded w-100px h-80px overflow-hidden">
                                                            <img src="{{ asset('/public/blog') }}/{{ $topval->image }}"
                                                                alt="" class="w-100 h-100"></div>
                                                    </div>
                                                    <div class="col pe-0">
                                                        <div class="fs-12 text-muted mb-1 border-bottom ">
                                                            {{ date('M j, Y', strtotime($blog->created_at)) }}</div>
                                                        <a href="{{ route('website.singleBlog', [$topval->slug]) }}"
                                                            class="text-black fs-14 text-theme1 text-decoration-none postLink fw-600 d-inline-flex lh-base">{{ $topval->title }}</a>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="card border-0 rounded-0 bg-white">
                                    <div class="card-body p-xl-3 p-0">
                                        <div
                                            class="card-text mb-lg-4 mb-3 fw-600 position-relative fs-16 text-dark sideBarheading">
                                            City</div>
                                        <div class="row mx-0 gap-3 tagsGroup">
                                            @foreach ($relavantcategory as $cat)
                                                <div
                                                    class="col ps-0 text-nowrap tagslink">
                                                    <a href="{{ route('website.blogscategory', $cat->slug) }}"
                                                        class="text-decoration-none py-2 text-dark fs-16">{{ $cat->title }}</a>
                                                </div>
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
