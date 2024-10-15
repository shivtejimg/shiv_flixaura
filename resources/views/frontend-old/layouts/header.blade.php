@php
    use App\Traits\SettingsTrait;
@endphp
<header id="header" class="header py-1">
    <div class="container-fluid">
        <div class="container">
            <div class="brand my-md-2 row align-items-center">
                <div class="col-auto ps-0">
                    <div class="brand-name">
                        <a href="{{ asset('/') }}" class="position-relative text-decoration-none">
                            <img src="{{ asset('/') }}timthumb.php?src={{ asset('/public') }}/frontend_assets/img/header/logo.png&w=2&h=2&zc=1"
                            srcset="{{ asset('/') }}timthumb.php?src={{ asset('/public') }}/frontend_assets/img/header/logo.png&w=2&h=2&zc=1"
                            data-src="{{ asset('/') }}timthumb.php?src={{ asset('/public') }}/frontend_assets/img/header/logo.png&w=100&h=100&zc=1"
                            data-srcset="{{ asset('/') }}timthumb.php?src={{ asset('/public') }}/frontend_assets/img/header/logo.png&w=100&h=100&zc=1"
                            class="img-fluid h-lg-50px h-50px mr-2 header_logo1 d-lg-inline-flex lazy"
                            alt="logo">
                            <div class="lazy-wave"></div>
                        </a>
                        {{-- <a href="{{ asset('/') }}" class="position-relative text-decoration-none">
                            <img src="{{ asset('/') }}timthumb.php?src={{ asset('/public') }}/frontend_assets/img/header/logo2.png&w=20&h=3&zc=1"
                                srcset="{{ asset('/') }}timthumb.php?src={{ asset('/public') }}/frontend_assets/img/header/logo2.png&w=20&h=3&zc=1"
                                data-src="{{ asset('/') }}timthumb.php?src={{ asset('/public') }}/frontend_assets/img/header/logo2.png&w=155&h=25&zc=1"
                                data-srcset="{{ asset('/') }}timthumb.php?src={{ asset('/public') }}/frontend_assets/img/header/logo2.png&w=155&h=25&zc=1"
                                class="img-fluid h-lg-25px h-md-23px h-20px lazy" alt="logo">
                            <div class="lazy-wave"></div>
                        </a> --}}
                    </div>
                </div>
                <div class="col text-end">
                    <div class="brand_mens d-flex align-items-center justify-content-end">
                        <a href="{{ route('portfolio-categories') }}"
                            class="btn toggle_btn btn-primary d-md-none d-block shadow-none outline-none me-3">
                            Portfolio
                        </a>
                        <button class="btn toggle_btn btn-primary d-md-none d-block shadow-none outline-none"
                            type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
                            aria-controls="offcanvasExample">
                            <img src="{{ asset('/public') }}/frontend_assets/img/menu.png" alt="Menu">
                        </button>
                        <div class="d-md-flex align-items-center d-none">
                            <ul class="list-unstyled d-flex m-0">
                                {{-- <li>
                                    <a href="{{ asset('/') }}#howitwork">How it Works</a>
                                </li> --}}
                                <li>
                                    <a href="{{ route('website.webhomepage') }}">Home</a>
                                </li>
                                <li>
                                    <a href="{{ route('portfolio-categories') }}">Our Services</a>
                                </li>
                                {{-- <li>
                                    <a href="{{ route('website.photographercategory') }}">Photos</a>
                                </li> --}}
                                <li>
                                    <a href="{{ route('our-partner') }}">Our Partners</a>
                                </li>
                                <li>
                                    <a href="{{ route('website.blog') }}">Blog</a>
                                </li>
                                <li>
                                    <a href="{{route('website.babyShoot')}}" class="babyshoot">Baby Shoot</a>
                                </li>
                            </ul>
                            {{-- @if (Auth::check())
                                @hasanyrole('admin|photographer')
                                    <div class="button d-flex align-items-center ms-3">
                                        <a class="comman_button shadow text-black d-inline-flex align-items-center"
                                            href="{{ route('dashboard') }}"><img
                                                src="{{ asset('/public') }}/frontend_assets/img/header/logo.png"
                                                class="img-fluid h-25px" alt="logo"><span
                                                class="text-black">Dashboard</span></a>
                                    </div>
                                @endhasrole
                            @else
                                <div class="button d-flex align-items-center ms-3">
                                    <a class="comman_button shadow text-black d-inline-flex align-items-center"
                                        href="{{ route('website.login') }}"><img
                                            src="{{ asset('/public') }}/frontend_assets/img/header/logo.png"
                                            class="img-fluid h-25px" alt="logo"><span class="text-black">Login as
                                            Photographer</span></a>
                                </div>
                            @endif --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header d-flex align-items-center">
        <div class="brand-name offcanvas-title" id="offcanvasExampleLabel">
            <a href="{{ asset('/') }}/"><img src="{{ asset('/public') }}/frontend_assets/img/header/logo.png"
                    class="img-fluid h-lg-50px h-md-33px h-sm-32px h-25px mr-2 header_logo1 d-lg-inline-flex"
                    alt="logo"></a>
            <a href="{{ asset('/') }}/"><img src="{{ asset('/public') }}/frontend_assets/img/header/logo2.png"
                    class="img-fluid h-lg-25px h-md-23px h-sm-22px h-15px" alt="logo"></a>
        </div>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body bg-white pt-4 px-4">
        <div class="brand_mens">
            <ul class="list-unstyled d-flex m-0 flex-wrap">
                {{-- <li class="w-100 text-center">
                    <a href="javascript:;">How it Works</a>
                </li> --}}
                <li class="w-100 text-center">
                    <a href="{{route('website.webhomepage')}}">Home</a>
                </li>
                <li class="w-100 text-center">
                    <a href="{{route('portfolio-categories')}}">Our Services</a>
                </li>
                <li class="w-100 text-center">
                    <a href="{{route('website.photographercategory')}}">Photos</a>
                </li>
                <li class="w-100 text-center">
                    <a href="{{route('website.blog')}}">Blog</a>
                </li>
                <li class="w-100 text-center">
                    <a href="{{route('website.babyShoot')}}">Baby Shoot</a>
                </li>
            </ul>
            {{-- <div class="button d-flex align-items-center justify-content-center mt-2">
                @if (Auth::check())
                    @hasanyrole('admin|photographer')
                        <a class="comman_button shadow text-decoration-none d-flex align-items-center text-white bg-dark w-100 justify-content-center rounded-5"
                            href="{{ route('dashboard') }}"><span class="text-black">Dashboard</span><img
                                src="{{ asset('/public') }}/frontend_assets/img/header/logo.png" class="img-fluid h-20px"
                                alt="logo"></a>
                    @endhasrole
                @else
                    <a class="comman_button shadow text-decoration-none d-flex align-items-center text-white bg-dark w-100 justify-content-center rounded-5"
                        href="{{ route('website.login') }}"><span class="text-black">Login as Photographer</span><img
                            src="{{ asset('/public') }}/frontend_assets/img/header/logo.png" class="img-fluid h-20px"
                            alt="logo"></a>
                @endif
            </div> --}}
        </div>
    </div>
</div>
<div id="liveToast" class="position-fixed toast hide" role="alert" aria-live="assertive" aria-atomic="true"
        style="top: 20px; right: 20px; z-index: 1000;">
        <div class="toast-header bg-success text-white">
            <div class="d-flex align-items-center flex-grow-1">
                <div class="flex-shrink-0">
                    <img class="avatar avatar-sm avatar-circle"
                        src="{{ asset('/public/settings/' . SettingsTrait::settings('favicon')) }}"
                        alt="Image description">
                </div>
                <div class="flex-grow-1 ms-3">
                    <h5 class="mb-0 text-white">{{ SettingsTrait::settings('project_name') }}</h5>
                    <small class="ms-auto">Just Now</small>
                </div>
                <div class="text-end">
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
            </div>
        </div>
        <div class="toast-body">
            {{ session('error') }}{{ session('success') }}
        </div>
    </div>
