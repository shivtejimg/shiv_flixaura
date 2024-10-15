@extends('frontend.layouts.app')
@section('title')
About Us
@endsection
@push('stylesheet-link')
@endpush
@section('mainsection')
    <main class="main-scrollbar">
        <div class="container-fluid portfolio-categories">
            <div class="container px-lg-5 px-3">
                <div class="row">
                    <div class="section-title col-12 mt-lg-4 mt-3">
                        <h4 class="fs-lg-35 fs-md-30 fs-20 text-center text-muted">About Us</h4>
                        <div class=""><img src="{{ asset('/public') }}/frontend_assets/img/unnamed.png"
                                class="img-fluid h-5px w-100" alt="Our Expertise"></div>
                        <p class="fs-lg-15 fs-14 text-center mt-lg-5 mt-4">Flixaura is a Market Place for On Demand Creative
                            professionals Full-filling The Photography And Videography Needs Of everyone. We are specialized
                            in Innovative Films & Commercials. Flixaura Offers a huge list of categories to choose from
                            Wedding Films, Corporate Films, Hospitality, Advertisements, Real Estate, Personal portfolio,
                            Family, Food, Product, Events Etc... Flixaura Always Works with the Professional Personals Each
                            Having Intensive skills In their Special Genre to Satisfy your Requirements Every time you Book
                            US.</p>
                    </div>
                    {{-- <div class="col-12 fs-lg-45 fs-md-40 fs-sm-35 fs-30 fw-bold text-muted pt-4 pb-3">About Us</div> --}}
                </div>
                {{-- <div class="row">
						<div class="col-12">
							<p>Flixaura is a Market Place for On Demand Creative professionals Full-filling The Photography And Videography Needs Of everyone. We are specialized in Innovative Films & Commercials. Flixaura Offers a huge list of categories to choose from Wedding Films, Corporate Films, Hospitality, Advertisements, Real Estate, Personal portfolio, Family, Food, Product, Events Etc... Flixaura Always Works with the Professional Personals Each Having Intensive skills In their Special Genre to Satisfy your Requirements Every time you Book US.</p>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic maxime placeat suscipit, accusantium, commodi quos voluptates debitis doloribus facere animi voluptatum optio labore tempore. Repellat atque eius neque ut quod. Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, consequatur. Nostrum omnis ea reiciendis, quidem maiores asperiores nesciunt, repudiandae quaerat dolores, harum architecto id commodi autem. Vitae laudantium voluptatem ut!</p>
						</div>
					</div> --}}
                <div class="row">
                    <div class="col-12 fs-lg-45 fs-md-40 fs-sm-35 fs-30 fw-bold text-muted pt-4 pb-3">Our Team</div>
                </div>
                <div class="row">
                    <div class="col-lg-2 col-md-4 col-sm-6 col-12 py-3">
                        <div class="row mx-0">
                            <div class="col-12 position-relative px-0">
                                <img class="lazy w-100 rounded-10 shadow-sm" alt="Title 1"
                                    src="{{ asset('/') }}/timthumb.php?src={{ asset('/public') }}/frontend_assets/img/team/kushal.jpg&w=2&h=2&zc=1"
                                    srcset="{{ asset('/') }}/timthumb.php?src={{ asset('/public') }}/frontend_assets/img/team/kushal.jpg&w=2&h=2&zc=1"
                                    data-src="{{ asset('/') }}/timthumb.php?src={{ asset('/public') }}/frontend_assets/img/team/kushal.jpg&w=300&h=300&zc=1"
                                    data-srcset="{{ asset('/') }}/timthumb.php?src={{ asset('/public') }}/frontend_assets/img/team/kushal.jpg&w=300&h=300&zc=1" />
                                <div class="lazy-wave"></div>
                                <a href="#"
                                    class="d-block position-absolute bottom-n10px end-n10px w-60px h-60px p-2 bg-white rounded-10">
                                    <img class="lazy w-100 rounded-10 shadow-sm" alt="Title 1"
                                        src="{{ asset('/') }}/timthumb.php?src={{ asset('/public') }}/frontend_assets/img/Instagram.png&w=2&h=2&zc=3"
                                        srcset="{{ asset('/') }}/timthumb.php?src={{ asset('/public') }}/frontend_assets/img/Instagram.png&w=2&h=2&zc=3"
                                        data-src="{{ asset('/') }}/timthumb.php?src={{ asset('/public') }}/frontend_assets/img/Instagram.png&w=50&h=50&zc=3"
                                        data-srcset="{{ asset('/') }}/timthumb.php?src={{ asset('/public') }}/frontend_assets/img/Instagram.png&w=50&h=50&zc=3" />
                                    <div class="lazy-wave"></div>
                                </a>
                            </div>
                            <div class="col-12 fw-bold text-center fs-18 pt-3 text-dark">Mr. Kushal</div>
                            <div class="col-12 fw-bold text-center fs-14 pt-1 text-muted">Lead Cinematographer</div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-12 py-3">
                        <div class="row mx-0">
                            <div class="col-12 position-relative px-0">
                                <img class="lazy w-100 rounded-10 shadow-sm" alt="Title 1"
                                    src="{{ asset('/') }}/timthumb.php?src={{ asset('/public') }}/frontend_assets/img/team/neeraj.jpg&w=2&h=2&zc=1"
                                    srcset="{{ asset('/') }}/timthumb.php?src={{ asset('/public') }}/frontend_assets/img/team/neeraj.jpg&w=2&h=2&zc=1"
                                    data-src="{{ asset('/') }}/timthumb.php?src={{ asset('/public') }}/frontend_assets/img/team/neeraj.jpg&w=300&h=300&zc=1"
                                    data-srcset="{{ asset('/') }}/timthumb.php?src={{ asset('/public') }}/frontend_assets/img/team/neeraj.jpg&w=300&h=300&zc=1" />
                                <div class="lazy-wave"></div>
                                <a href="#"
                                    class="d-block position-absolute bottom-n10px end-n10px w-60px h-60px p-2 bg-white rounded-10">
                                    <img class="lazy w-100 rounded-10 shadow-sm" alt="Title 1"
                                        src="{{ asset('/') }}/timthumb.php?src={{ asset('/public') }}/frontend_assets/img/Instagram.png&w=2&h=2&zc=3"
                                        srcset="{{ asset('/') }}/timthumb.php?src={{ asset('/public') }}/frontend_assets/img/Instagram.png&w=2&h=2&zc=3"
                                        data-src="{{ asset('/') }}/timthumb.php?src={{ asset('/public') }}/frontend_assets/img/Instagram.png&w=50&h=50&zc=3"
                                        data-srcset="{{ asset('/') }}/timthumb.php?src={{ asset('/public') }}/frontend_assets/img/Instagram.png&w=50&h=50&zc=3" />
                                    <div class="lazy-wave"></div>
                                </a>
                            </div>
                            <div class="col-12 fw-bold text-center fs-18 pt-3 text-dark">Mr. Neeraj</div>
                            <div class="col-12 fw-bold text-center fs-14 pt-1 text-muted">Lead Photographer</div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-12 py-3">
                        <div class="row mx-0">
                            <div class="col-12 position-relative px-0">
                                <img class="lazy w-100 rounded-10 shadow-sm" alt="Title 1"
                                    src="{{ asset('/') }}/timthumb.php?src={{ asset('/public') }}/frontend_assets/img/team/harsh.jpg&w=2&h=2&zc=1"
                                    srcset="{{ asset('/') }}/timthumb.php?src={{ asset('/public') }}/frontend_assets/img/team/harsh.jpg&w=2&h=2&zc=1"
                                    data-src="{{ asset('/') }}/timthumb.php?src={{ asset('/public') }}/frontend_assets/img/team/harsh.jpg&w=300&h=300&zc=1"
                                    data-srcset="{{ asset('/') }}/timthumb.php?src={{ asset('/public') }}/frontend_assets/img/team/harsh.jpg&w=300&h=300&zc=1" />
                                <div class="lazy-wave"></div>
                                <a href="#"
                                    class="d-block position-absolute bottom-n10px end-n10px w-60px h-60px p-2 bg-white rounded-10">
                                    <img class="lazy w-100 rounded-10 shadow-sm" alt="Title 1"
                                        src="{{ asset('/') }}/timthumb.php?src={{ asset('/public') }}/frontend_assets/img/Instagram.png&w=2&h=2&zc=3"
                                        srcset="{{ asset('/') }}/timthumb.php?src={{ asset('/public') }}/frontend_assets/img/Instagram.png&w=2&h=2&zc=3"
                                        data-src="{{ asset('/') }}/timthumb.php?src={{ asset('/public') }}/frontend_assets/img/Instagram.png&w=50&h=50&zc=3"
                                        data-srcset="{{ asset('/') }}/timthumb.php?src={{ asset('/public') }}/frontend_assets/img/Instagram.png&w=50&h=50&zc=3" />
                                    <div class="lazy-wave"></div>
                                </a>
                            </div>
                            <div class="col-12 fw-bold text-center fs-18 pt-3 text-dark">Mr. Harsh</div>
                            <div class="col-12 fw-bold text-center fs-14 pt-1 text-muted">Sr. Cinematographer</div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-12 py-3">
                        <div class="row mx-0">
                            <div class="col-12 position-relative px-0">
                                <img class="lazy w-100 rounded-10 shadow-sm" alt="Title 1"
                                    src="{{ asset('/') }}/timthumb.php?src={{ asset('/public') }}/frontend_assets/img/team/placeholder.jpg&w=2&h=2&zc=1"
                                    srcset="{{ asset('/') }}/timthumb.php?src={{ asset('/public') }}/frontend_assets/img/team/placeholder.jpg&w=2&h=2&zc=1"
                                    data-src="{{ asset('/') }}/timthumb.php?src={{ asset('/public') }}/frontend_assets/img/team/placeholder.jpg&w=300&h=300&zc=1"
                                    data-srcset="{{ asset('/') }}/timthumb.php?src={{ asset('/public') }}/frontend_assets/img/team/placeholder.jpg&w=300&h=300&zc=1" />
                                <div class="lazy-wave"></div>
                                <a href="#"
                                    class="d-block position-absolute bottom-n10px end-n10px w-60px h-60px p-2 bg-white rounded-10">
                                    <img class="lazy w-100 rounded-10 shadow-sm" alt="Title 1"
                                        src="{{ asset('/') }}/timthumb.php?src={{ asset('/public') }}/frontend_assets/img/Instagram.png&w=2&h=2&zc=3"
                                        srcset="{{ asset('/') }}/timthumb.php?src={{ asset('/public') }}/frontend_assets/img/Instagram.png&w=2&h=2&zc=3"
                                        data-src="{{ asset('/') }}/timthumb.php?src={{ asset('/public') }}/frontend_assets/img/Instagram.png&w=50&h=50&zc=3"
                                        data-srcset="{{ asset('/') }}/timthumb.php?src={{ asset('/public') }}/frontend_assets/img/Instagram.png&w=50&h=50&zc=3" />
                                    <div class="lazy-wave"></div>
                                </a>
                            </div>
                            <div class="col-12 fw-bold text-center fs-18 pt-3 text-dark">Mr. Govind</div>
                            <div class="col-12 fw-bold text-center fs-14 pt-1 text-muted">Sr. Photographer</div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-12 py-3">
                        <div class="row mx-0">
                            <div class="col-12 position-relative px-0">
                                <img class="lazy w-100 rounded-10 shadow-sm" alt="Title 1"
                                    src="{{ asset('/') }}/timthumb.php?src={{ asset('/public') }}/frontend_assets/img/team/placeholder.jpg&w=2&h=2&zc=1"
                                    srcset="{{ asset('/') }}/timthumb.php?src={{ asset('/public') }}/frontend_assets/img/team/placeholder.jpg&w=2&h=2&zc=1"
                                    data-src="{{ asset('/') }}/timthumb.php?src={{ asset('/public') }}/frontend_assets/img/team/placeholder.jpg&w=300&h=300&zc=1"
                                    data-srcset="{{ asset('/') }}/timthumb.php?src={{ asset('/public') }}/frontend_assets/img/team/placeholder.jpg&w=300&h=300&zc=1" />
                                <div class="lazy-wave"></div>
                                <a href="#"
                                    class="d-block position-absolute bottom-n10px end-n10px w-60px h-60px p-2 bg-white rounded-10">
                                    <img class="lazy w-100 rounded-10 shadow-sm" alt="Title 1"
                                        src="{{ asset('/') }}/timthumb.php?src={{ asset('/public') }}/frontend_assets/img/Instagram.png&w=2&h=2&zc=3"
                                        srcset="{{ asset('/') }}/timthumb.php?src={{ asset('/public') }}/frontend_assets/img/Instagram.png&w=2&h=2&zc=3"
                                        data-src="{{ asset('/') }}/timthumb.php?src={{ asset('/public') }}/frontend_assets/img/Instagram.png&w=50&h=50&zc=3"
                                        data-srcset="{{ asset('/') }}/timthumb.php?src={{ asset('/public') }}/frontend_assets/img/Instagram.png&w=50&h=50&zc=3" />
                                    <div class="lazy-wave"></div>
                                </a>
                            </div>
                            <div class="col-12 fw-bold text-center fs-18 pt-3 text-dark">Mr. Pankaj</div>
                            <div class="col-12 fw-bold text-center fs-14 pt-1 text-muted">BDM</div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6 col-12 py-3">
                        <div class="row mx-0">
                            <div class="col-12 position-relative px-0">
                                <img class="lazy w-100 rounded-10 shadow-sm" alt="Title 1"
                                    src="{{ asset('/') }}/timthumb.php?src={{ asset('/public') }}/frontend_assets/img/team/sanjay.jpg&w=2&h=2&zc=1"
                                    srcset="{{ asset('/') }}/timthumb.php?src={{ asset('/public') }}/frontend_assets/img/team/sanjay.jpg&w=2&h=2&zc=1"
                                    data-src="{{ asset('/') }}/timthumb.php?src={{ asset('/public') }}/frontend_assets/img/team/sanjay.jpg&w=300&h=300&zc=1"
                                    data-srcset="{{ asset('/') }}/timthumb.php?src={{ asset('/public') }}/frontend_assets/img/team/sanjay.jpg&w=300&h=300&zc=1" />
                                <div class="lazy-wave"></div>
                                <a href="#"
                                    class="d-block position-absolute bottom-n10px end-n10px w-60px h-60px p-2 bg-white rounded-10">
                                    <img class="lazy w-100 rounded-10 shadow-sm" alt="Title 1"
                                        src="{{ asset('/') }}/timthumb.php?src={{ asset('/public') }}/frontend_assets/img/Instagram.png&w=2&h=2&zc=3"
                                        srcset="{{ asset('/') }}/timthumb.php?src={{ asset('/public') }}/frontend_assets/img/Instagram.png&w=2&h=2&zc=3"
                                        data-src="{{ asset('/') }}/timthumb.php?src={{ asset('/public') }}/frontend_assets/img/Instagram.png&w=50&h=50&zc=3"
                                        data-srcset="{{ asset('/') }}/timthumb.php?src={{ asset('/public') }}/frontend_assets/img/Instagram.png&w=50&h=50&zc=3" />
                                    <div class="lazy-wave"></div>
                                </a>
                            </div>
                            <div class="col-12 fw-bold text-center fs-18 pt-3 text-dark">Mr. Sanjay</div>
                            <div class="col-12 fw-bold text-center fs-14 pt-1 text-muted">Media Editor</div>
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
@endpush
