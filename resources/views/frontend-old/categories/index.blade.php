@extends('frontend.layouts.app')
@section('title')
Best Photographer | Best Photographer in india
@endsection
@section('meta_title')
Best Photographer | Best Photographer in india
@endsection
@section('description')
Explore flixaura's impressive photography portfolios. Browse Music Album, Corporate Films or Ads, Baby Shoot, Product Shoot, Documentaries Shoot, Drone Filming and more.
@endsection

@section('mainsection')
    <?php use App\Traits\SettingsTrait; ?>
    <main class="main-scrollbar">
        <div class="container-fluid px-0">
            <div class="newHeroSection innerpageHeadign py-md-5 py-4">
                <div class="row align-items-center textWrapper mx-auto my-lg-3 mb-3">
                    <div class="col-auto introText fs-18 fs-sm-20 fs-lg-22 pe-0">"FLIXAURA"</div>
                    <div class="col coloredLine"><span class="d-block h-3px w-97"></span></div>
                    <div class="col-12 fw-bold flixText fs-xl-80 fs-lg-70 fs-md-60 fs-sm-45 fs-35"><span>Our</span>Services</div>
                </div>
                <div class="container">
                    <div class="px-lg-5 px-3"><img src="{{ asset('/public') }}/frontend_assets/img/unnamed.png"class="img-fluid h-5px w-100" alt="Our Expertise"></div>
                </div>
            </div>
        </div>
        <div class="container-fluid portfolio-categories pt-0">
            <div class="container px-lg-5 px-3">
                <div class="row">
                    <div class="section-title col-12 mt-lg4 mt3">
                        {{-- <div class="newHeroSection innerpageHeadign">
                            <div class="row align-items-center textWrapper mx-auto mb-3">
                                <div class="col-auto introText fs-18 fs-sm-20 fs-lg-22 pe-0">"FLIXAURA"</div>
                                <div class="col coloredLine"><span class="d-block h-3px w-97"></span></div>
                                <div class="col-12 fw-bold flixText fs-xl-80 fs-lg-70 fs-md-60 fs-sm-45 fs-35"><span>Our</span>Portfolios</div>
                            </div>
                        </div>
                        <h4 class="fs-lg-35 fs-md-30 fs-20 text-center text-muted">Our Portfolios</h4>
                        <div class=""><img src="{{ asset('/public') }}/frontend_assets/img/unnamed.png"
                                class="img-fluid h-5px w-100" alt="Our Expertise"></div> --}}
                        <p class="fs-lg-15 fs-14 text-center mt-lg-5 mt-4">Flixaura is not a new name in the media line, we
                            are working for 5+ years. We have worked before with Edtech shoot, corporate film shoot,
                            corporate ad films
                            shoot, short films shoot, first birthday shoot, documentary shoot, Newborn baby shoot, baby
                            shoot, in-house studio shoot, outdoor photo shoot, music album shoot,
                            full product shoot, and drone shoot. Also worked with all kinds of corporate shoots like hotels
                            shoot, hospitals shoot, café shoot, gyms shoot, factories shoot, stores,
                            etc. Here is some of the work listed.</p>
                    </div>
                    {{-- <div class="col-12 fs-lg-45 fs-md-40 fs-sm-35 fs-30 fw-bold text-muted pt-3 pb-2">Our Portfolios</div> --}}
                </div>
                <div class="row">
                    <div class="col-12">
                        <!-- <ul class="nav nav-tabs mx-md-n3 mx-n2" id="portfolioCat" role="tablist">
          <li class="nav-item" role="presentation">
           <button class="nav-link fw-bold fs-lg-17 fs-md-16 fs-15 px-md-3 px-2 active" id="all_portfolios-tab" data-bs-toggle="tab" data-bs-target="#all_portfolios" type="button" role="tab" aria-controls="all_portfolios" aria-selected="true">All Portfolios</button>
          </li>
          <li class="nav-item" role="presentation">
           <button class="nav-link fw-bold fs-lg-17 fs-md-16 fs-15 px-md-3 px-2" id="photos-tab" data-bs-toggle="tab" data-bs-target="#photos" type="button" role="tab" aria-controls="photos" aria-selected="false">Photos</button>
          </li>
          <li class="nav-item" role="presentation">
           <button class="nav-link fw-bold fs-lg-17 fs-md-16 fs-15 px-md-3 px-2" id="videos-tab" data-bs-toggle="tab" data-bs-target="#videos" type="button" role="tab" aria-controls="videos" aria-selected="false">Videos</button>
          </li>
         </ul> -->
                        <div class="tab-content" id="portfolioCatContent">
                            <div class="tab-pane fade show active" id="all_portfolios" role="tabpanel"
                                aria-labelledby="all_portfolios-tab">
                                <div class="row pt-md-4 pt-4">
                                    <div class="col-12">
                                        <div class="row">
                                            @foreach ($data as $value)
                                                <div class="col-lg-4 col-md-6 col-sm-6 col-12  g-3">
                                                    <?php $link = str_replace(' ', '-', $value->name); ?>
                                                    <?php $status1 = SettingsTrait::getcatcheck($value->id); ?>
                                                    {{-- <a href="<?php echo asset('/portfolio') . '/' . $link; ?>" class="row mx-0 text-decoration-none text-white">
												<div class="col-12 rounded-20 px-0 overflow-hidden position-relative h-0 image_box">
													<img class="w-100 position-absolute top-0 h-100 lazy" src="{{asset('/')}}timthumb.php?src={{asset('/public')}}/{{$value->image}}&w=2&zc=3" srcset="{{asset('/')}}timthumb.php?src={{asset('/public')}}/{{$value->image}}&w=2&zc=3" data-src="{{asset('/')}}timthumb.php?src={{asset('/public')}}/{{$value->image}}&w=415&zc=3" data-srcset="{{asset('/')}}timthumb.php?src={{asset('/public')}}/{{$value->image}}&w=415&zc=3" alt="{{$value->name}}">
													<div class="lazy-wave"></div>
													<span class="position-absolute zi-2 top-15px end-15px fs-35 d-grid text-white"><i class="imgl img-long-arrow-right"></i></span>
													<div class="row position-absolute zi-2 bottom-0 start-0 end-0 h-50 align-items-end cat_name_box">
														<div class="col-12 position-absolute bottom-18">
															<div class="row">
																<div class="col-12 text-center text-capitalize fs-20 fw-bold text-white pb-2">{{$value->name}}</div>
																@if ($status1 == 1)
																	<div class="col-12 text-center text-uppercase fs-13 fw-bold text-white">Videos</div>
																@elseif($status1==2)
																<div class="col-12 text-center text-uppercase fs-13 fw-bold text-white">Photos</div>
																@elseif($status1==3)
																<div class="col-12 text-center text-uppercase fs-13 fw-bold text-white">Photos & Videos</div>
																@elseif($status1==0)
																<div class="col-12 text-center text-uppercase fs-13 fw-bold text-white">Not Available</div>
																@endif
															</div>
														</div>
													</div>
												</div>
											</a> --}}
                                                    <div class="card overflow-hidden portfolioCard h-100 bg-white">
                                                        <div class="cardImg position-relative">
                                                            <img src="{{ asset('/public') }}/{{ $value->image }}" class="w-100 h-100 categoriImg" alt="{{ $value->name }}">
                                                                <div class="innerCardBody position-absolute  start-0 w-100 h-100 zi-2">
                                                                    <div class="row h-100 justify-content-center align-items-center">
                                                                        <div class="col-12">
                                                                            <div class="row justify-content-center gy-4">
                                                                                <div class="col-xl-8 col-sm-9 col-8">
                                                                                    <div class="hero afford nonbgbtn p-0 text-cente w-100">
                                                                                        <a href="<?php echo asset('/portfolio') . '/' . $link; ?>" type="button" class="comman_button border-0 w-100 shadow text-black d-inline-flex align-items-center justify-content-center m-0 py-2 px-3"><span class="text-black"><img src="{{ asset('/public') }}/frontend_assets/img/header/logo.png" class="img-fluid h-30px" alt="logo" style="display:inline;"> View portfolio</span></a>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-xl-8 col-sm-9 col-8">
                                                                                    <div class="hero p-0 text-center w-100">
                                                                                        <a href="{{ asset('/') }}book-now?category={{ $value->name }}" type="button" class="comman_button border-0 w-100 shadow text-white d-inline-flex align-items-center justify-content-center m-0 py-2 px-3"><span class="text-black"><img src="{{ asset('/public') }}/frontend_assets/img/header/logo.png" class="img-fluid h-30px" alt="logo" style="display:inline;"> Book your shoot </span></a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <div class="card-body bg-white ">
                                                            <div class="row align-items-center gx-2">
                                                                <div class="col-10">
                                                                    <div
                                                                        class="text-capitalize text-truncate fw-600 fs-lg-16 fs-15">
                                                                        {{ $value->name }}</div>
                                                                    @if ($status1 == 1)
                                                                        <div
                                                                            class="text-capitalize text-truncate fw-500 fs-lg-12 fs-11 text-muted">
                                                                            Videos</div>
                                                                    @elseif($status1 == 2)
                                                                        <div
                                                                            class="text-capitalize text-truncate fw-500 fs-lg-12 fs-11 text-muted">
                                                                            Photos</div>
                                                                    @elseif($status1 == 3)
                                                                        <div
                                                                            class="text-capitalize text-truncate fw-500 fs-lg-12 fs-11 text-muted">
                                                                            Photos & Videos</div>
                                                                    @elseif($status1 == 0)
                                                                        <div
                                                                            class="text-capitalize text-truncate fw-500 fs-lg-12 fs-11 text-muted">
                                                                            Not Available</div>
                                                                    @endif
                                                                </div>
                                                                <div class="col-2 ms-auto d-flex justify-content-end">
                                                                    <div
                                                                        class="d-inline-flex justify-content-center align-items-center text-black fs-lg-18 fs-17">
                                                                        <i class="imgs img-chevron-right"></i></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        {{-- <a href="<?php echo asset('/portfolio') . '/' . $link; ?>" class="stretched-link"></a> --}}
                                                    </div>
                                                </div>
                                            @endforeach

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="photos" role="tabpanel" aria-labelledby="photos-tab">...</div>
                            <div class="tab-pane fade" id="videos" role="tabpanel" aria-labelledby="videos-tab">...</div>
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
