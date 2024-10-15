@extends('frontend.layouts.app')
@section('title')
Corporate Photography Blog
@endsection
@section('meta_title')
Corporate Photography Blog
@endsection
@section('description')
Here, you can find top trending blogs about Corporate Films Or Ads photography, Baby Shoot photography, Product Shoot, Corporate Photo And Video, Drone Filming and more.
@endsection
@push('stylesheet-link')
    <link rel="stylesheet" href="{{ asset('./../assets/plugins/justifiedGallery/justifiedGallery.min.css') }}">
@endpush

@section('mainsection')
    <?php use App\Helpers\Helpers; ?>
    <main class="main-scrollbar">
        <div class="container-fluid px-0">
            <div class="newHeroSection innerpageHeadign py-md-5 py-4">
                <div class="row align-items-center textWrapper mx-auto my-lg-3 mb-3">
                    <div class="col-auto introText fs-18 fs-sm-20 fs-lg-22 pe-0">"FLIXAURA"</div>
                    <div class="col coloredLine"><span class="d-block h-3px w-97"></span></div>
                    <div class="col-12 fw-bold flixText fs-xl-80 fs-lg-70 fs-md-60 fs-sm-45 fs-35"><span></span>Blogs</div>
                </div>
                <div class="container">
                    <div class="px-lg-5 px-3"><img src="{{ asset('/public') }}/frontend_assets/img/unnamed.png"class="img-fluid h-5px w-100" alt="Our Expertise"></div>
                </div>
            </div>
        </div>
        <div class="container-fluid py-md-5 py-4 mt5 blogPage position-relative">
            <div class="container innerPage mb-4">
                <div class="row mt-lg-4 mt-3">
                    @if (!empty($blog->toArray()))
                        <div class="col-12 mt5">
                            <div class="row g-4">
                                {{-- <div class="section-title col-12 mt-lg-4 mt-3 text-center mb-2">
                                    <div class="newHeroSection innerpageHeadign">
                                        <div class="row align-items-center textWrapper mx-auto mb-3">
                                            <div class="col-auto introText fs-18 fs-sm-20 fs-lg-22 pe-0">"FLIXAURA"</div>
                                            <div class="col coloredLine"><span class="d-block h-3px w-97"></span></div>
                                            <div class="col-12 fw-bold flixText fs-xl-80 fs-lg-70 fs-md-60 fs-sm-45 fs-35"><span></span>Blogs</div>
                                        </div>
                                    </div>
                                    <h4 class="fs-lg-35 fs-md-30 fs-20  text-muted">Blogs</h4>
                                    <div class=""><img src="{{ asset('/public') }}/frontend_assets/img/unnamed.png"
                                            class="img-fluid h-5px w-100" alt="Our Expertise"></div>
                                </div> --}}
                                @foreach ($blog as $singblog)
                                    <div class="col-xl-4 col-md-6">
                                        <div class="card blogCard">
                                            <div class="card-body">
                                                <div class="card-img rounded overflow-hidden mb-2">
                                                    <img src="{{ asset('/public/blog') }}/{{ $singblog->image }}"
                                                        class="w-100" alt="">
                                                </div>
                                                <div class="innerBody row gx-0 gap-3">
                                                    {{-- <a href="{{ route('website.blogscategory', $singblog->catslug) }}"> --}}
                                                    <div
                                                        class="col-auto blogcategory px-3 py-1 rounded-pill fs-12 fw-600 bg-primary d-inline text-white">
                                                        {{ $singblog->catname }}</div>
                                                    {{-- </a> --}}
                                                    <div class="col-12 blogLink"><a
                                                            href="{{ route('website.singleBlog', [$singblog->slug]) }}"
                                                            class="fw-600 text-theme1 fs-lg-18  fs-16 text-decoration-none lh-sm d-inline-flex">{{ $singblog->title }}</a>
                                                    </div>
                                                    {{-- <div class="col-12 fs-14 fw-normal blogContent">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet sint officiis aspernatur quasi quis maiores.</div> --}}
                                                    <div class="col-12">
                                                        <div class="row align-items-center">
                                                            <div class="col fs-14 fw-600 text-muted">By
                                                                {{ $singblog->username }}</div>
                                                            <div class="col-auto fs-14 fw-600 text-muted">
                                                                {{ date('j M Y', strtotime($singblog->created_at)) }}</div>
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
									<li class="page-item disabled"><a class="page-link border-0 rounded-0  fs-14 shadow-none pagBtn w-auto" href="javascript:;">Prev</a></li>
									<li class="page-item"><a class="page-link border-0 rounded-0 h-md-35px h-30px w-md-35px w-30px fs-lg-16 fs-14 shadow-none active" href="javascript:;">1</a></li>
									<li class="page-item"><a class="page-link border-0 rounded-0 h-md-35px h-30px w-md-35px w-30px fs-lg-16 fs-14 shadow-none" href="javascript:;">2</a></li>
									<li class="page-item"><a class="page-link border-0 rounded-0 h-md-35px h-30px w-md-35px w-30px fs-lg-16 fs-14 shadow-none" href="javascript:;">3</a></li>
									<li class="page-item"><a class="page-link border-0 rounded-0  fs-14 shadow-none pagBtn w-auto" href="javascript:;">Next</a></li>
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
    <script>
        $(document).ready(function() {
            $('#header').addClass('indexHeader')
        })
    
        $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        if (scroll <= 120) {
            $("#header").addClass("indexHeader");
        } else {
            $("#header").removeClass("indexHeader");
        }
    });
    </script>
@endpush
