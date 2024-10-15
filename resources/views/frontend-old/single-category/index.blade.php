@extends('frontend.layouts.app')
@section('title')
{{ $portfoliocategory->name }}
@endsection
@push('stylesheet-link')
@endpush

@section('mainsection')
    <?php use App\Traits\SettingsTrait; ?>
    <main class="main-scrollbar">
        <div class="container-fluid portfolio-categories">
            <div class="container">
                <div class="row">
                    <div class="col-12 fs-lg-45 fs-md-40 fs-sm-35 fs-30 fw-bold text-muted pt-4 pb-3">
                        {{ $portfoliocategory->name }}</div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <ul class="nav nav-tabs mx-md-n3 mx-n2" id="portfolioCat" role="tablist">
                            <?php $status = SettingsTrait::getcatcheck($portfoliocategory->id); ?>
                            @if ($status == 1)
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link fw-bold fs-lg-17 fs-md-16 fs-15 px-md-3 px-2" id="videos-tab"
                                        data-bs-toggle="tab" data-bs-target="#videos" type="button" role="tab"
                                        aria-controls="videos" aria-selected="false">Videos</button>
                                </li>
                            @elseif($status == 2)
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link fw-bold fs-lg-17 fs-md-16 fs-15 px-md-3 px-2 active"
                                        id="photos-tab" data-bs-toggle="tab" data-bs-target="#photos" type="button"
                                        role="tab" aria-controls="photos" aria-selected="true">Photos</button>
                                </li>
                            @elseif($status == 3)
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link fw-bold fs-lg-17 fs-md-16 fs-15 px-md-3 px-2 active"
                                        id="photos-tab" data-bs-toggle="tab" data-bs-target="#photos" type="button"
                                        role="tab" aria-controls="photos" aria-selected="true">Photos</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link fw-bold fs-lg-17 fs-md-16 fs-15 px-md-3 px-2" id="videos-tab"
                                        data-bs-toggle="tab" data-bs-target="#videos" type="button" role="tab"
                                        aria-controls="videos" aria-selected="false">Videos</button>
                                </li>
                            @endif

                        </ul>
                    </div>
                </div>
            </div>
            <div class="container-fluid px-0">
                <div class="row">
                    <div class="col-12">
                        <div class="tab-content" id="portfolioCatContent">
                            <div class="tab-pane fade show active" id="photos" role="tabpanel"
                                aria-labelledby="photos-tab">
                                <div class="row pt-md-5 pt-4">
                                    <div class="col-12">
                                        <div class="row">
                                            <div id="mygallery" class="px-0 shoot">
                                                @foreach ($data as $value)
                                                    @if ($value->type == 'image')
                                                        <div
                                                            class="photoghraphy_box d-flex align-items-end justify-content-end rounded text-decoration-none">
                                                            <img class="lazy" alt="Title 1"
                                                                src="{{ asset('/') }}/timthumb.php?src={{ asset('/public') }}/{{ $value->image }}&=20&zc=3"
                                                                srcset="{{ asset('/') }}/timthumb.php?src={{ asset('/public') }}/{{ $value->image }}&=20&zc=3"
                                                                data-src="{{ asset('/') }}/timthumb.php?src={{ asset('/public') }}/{{ $value->image }}&=350&zc=3"
                                                                data-srcset="{{ asset('/') }}/timthumb.php?src={{ asset('/public') }}/{{ $value->image }}&=350&zc=3" />
                                                            <div class="lazy-wave"></div>
                                                            @if ($value->book_now == '1')
                                                                <a href="{{ asset('/') }}book-now" class="book_now">
                                                                    book now
                                                                </a>
                                                            @endif
                                                        </div>
                                                    @endif
                                                @endforeach
                                                <!-- <a class="photoghraphy_box d-flex align-items-end justify-content-end rounded text-decoration-none" href="{{ asset('/') }}book-now">
                <img class="lazy" alt="Title 2" src="{{ asset('/') }}timthumb.php?src={{ asset('/') }}assets/img/engagement-shoot/12.jpg&=20&zc=3" srcset="{{ asset('/') }}timthumb.php?src={{ asset('/') }}assets/img/engagement-shoot/12.jpg&=20&zc=3" data-src="{{ asset('/') }}timthumb.php?src={{ asset('/') }}assets/img/engagement-shoot/12.jpg&=350&zc=3" data-srcset="{{ asset('/') }}timthumb.php?src={{ asset('/') }}assets/img/engagement-shoot/12.jpg&=350&zc=3" />
                <div class="lazy-wave"></div>
                <span class="book_now">
                 book now
                </span>
               </a>
               <a class="photoghraphy_box d-flex align-items-end justify-content-end rounded text-decoration-none" href="{{ asset('/') }}book-now">
                <img class="lazy" alt="Title 1" src="{{ asset('/') }}timthumb.php?src={{ asset('/') }}assets/img/engagement-shoot/11.jpg&=20&zc=3" srcset="{{ asset('/') }}timthumb.php?src={{ asset('/') }}assets/img/engagement-shoot/11.jpg&=20&zc=3" data-src="{{ asset('/') }}timthumb.php?src={{ asset('/') }}assets/img/engagement-shoot/11.jpg&=350&zc=3" data-srcset="{{ asset('/') }}timthumb.php?src={{ asset('/') }}assets/img/engagement-shoot/11.jpg&=350&zc=3" />
                <div class="lazy-wave"></div>
                <span class="book_now">
                 book now
                </span>
               </a>
               <a class="photoghraphy_box d-flex align-items-end justify-content-end rounded text-decoration-none" href="{{ asset('/') }}book-now">
                <img class="lazy" alt="Title 2" src="{{ asset('/') }}timthumb.php?src={{ asset('/') }}assets/img/engagement-shoot/pexels-ankur-kumar-3872614.jpg&=20&zc=3" srcset="{{ asset('/') }}timthumb.php?src={{ asset('/') }}assets/img/engagement-shoot/pexels-ankur-kumar-3872614.jpg&=20&zc=3" data-src="{{ asset('/') }}timthumb.php?src={{ asset('/') }}assets/img/engagement-shoot/pexels-ankur-kumar-3872614.jpg&=350&zc=3" data-srcset="{{ asset('/') }}timthumb.php?src={{ asset('/') }}assets/img/engagement-shoot/pexels-ankur-kumar-3872614.jpg&=350&zc=3" />
                <div class="lazy-wave"></div>
                <span class="book_now">
                 book now
                </span>
               </a>
               <a class="photoghraphy_box d-flex align-items-end justify-content-end rounded text-decoration-none" href="{{ asset('/') }}book-now">
                <img class="lazy" alt="Title 1" src="{{ asset('/') }}timthumb.php?src={{ asset('/') }}assets/img/engagement-shoot/pexels-deepak-khirodwala-3865895.jpg&=20&zc=3" srcset="{{ asset('/') }}timthumb.php?src={{ asset('/') }}assets/img/engagement-shoot/pexels-deepak-khirodwala-3865895.jpg&=20&zc=3" data-src="{{ asset('/') }}timthumb.php?src={{ asset('/') }}assets/img/engagement-shoot/pexels-deepak-khirodwala-3865895.jpg&=350&zc=3" data-srcset="{{ asset('/') }}timthumb.php?src={{ asset('/') }}assets/img/engagement-shoot/pexels-deepak-khirodwala-3865895.jpg&=350&zc=3" />
                <div class="lazy-wave"></div>
                <span class="book_now">
                 book now
                </span>
               </a>
               <a class="photoghraphy_box d-flex align-items-end justify-content-end rounded text-decoration-none" href="{{ asset('/') }}book-now">
                <img class="lazy" alt="Title 2" src="{{ asset('/') }}timthumb.php?src={{ asset('/') }}assets/img/engagement-shoot/pexels-deepak-khirodwala-3871601.jpg&=20&zc=3" srcset="{{ asset('/') }}timthumb.php?src={{ asset('/') }}assets/img/engagement-shoot/pexels-deepak-khirodwala-3871601.jpg&=20&zc=3" data-src="{{ asset('/') }}timthumb.php?src={{ asset('/') }}assets/img/engagement-shoot/pexels-deepak-khirodwala-3871601.jpg&=350&zc=3" data-srcset="{{ asset('/') }}timthumb.php?src={{ asset('/') }}assets/img/engagement-shoot/pexels-deepak-khirodwala-3871601.jpg&=350&zc=3" />
                <div class="lazy-wave"></div>
                <span class="book_now">
                 book now
                </span>
               </a>
               <a class="photoghraphy_box d-flex align-items-end justify-content-end rounded text-decoration-none" href="{{ asset('/') }}book-now">
                <img class="lazy" alt="Title 1" src="{{ asset('/') }}timthumb.php?src={{ asset('/') }}assets/img/engagement-shoot/pexels-dominic-xavier-2226698.jpg&=20&zc=3" srcset="{{ asset('/') }}timthumb.php?src={{ asset('/') }}assets/img/engagement-shoot/pexels-dominic-xavier-2226698.jpg&=20&zc=3" data-src="{{ asset('/') }}timthumb.php?src={{ asset('/') }}assets/img/engagement-shoot/pexels-dominic-xavier-2226698.jpg&=350&zc=3" data-srcset="{{ asset('/') }}timthumb.php?src={{ asset('/') }}assets/img/engagement-shoot/pexels-dominic-xavier-2226698.jpg&=350&zc=3" />
                <div class="lazy-wave"></div>
                <span class="book_now">
                 book now
                </span>
               </a>
               <a class="photoghraphy_box d-flex align-items-end justify-content-end rounded text-decoration-none" href="{{ asset('/') }}book-now">
                <img class="lazy" alt="Title 2" src="{{ asset('/') }}timthumb.php?src={{ asset('/') }}assets/img/engagement-shoot/pexels-gary-barnes-6248765.jpg&=20&zc=3" srcset="{{ asset('/') }}timthumb.php?src={{ asset('/') }}assets/img/engagement-shoot/pexels-gary-barnes-6248765.jpg&=20&zc=3" data-src="{{ asset('/') }}timthumb.php?src={{ asset('/') }}assets/img/engagement-shoot/pexels-gary-barnes-6248765.jpg&=350&zc=3" data-srcset="{{ asset('/') }}timthumb.php?src={{ asset('/') }}assets/img/engagement-shoot/pexels-gary-barnes-6248765.jpg&=350&zc=3" />
                <div class="lazy-wave"></div>
                <span class="book_now">
                 book now
                </span>
               </a>
               <a class="photoghraphy_box d-flex align-items-end justify-content-end rounded text-decoration-none" href="{{ asset('/') }}book-now">
                <img class="lazy" alt="Title 1" src="{{ asset('/') }}timthumb.php?src={{ asset('/') }}assets/img/engagement-shoot/pexels-jasmine-carter-888899.jpg&=20&zc=3" srcset="{{ asset('/') }}timthumb.php?src={{ asset('/') }}assets/img/engagement-shoot/pexels-jasmine-carter-888899.jpg&=20&zc=3" data-src="{{ asset('/') }}timthumb.php?src={{ asset('/') }}assets/img/engagement-shoot/pexels-jasmine-carter-888899.jpg&=350&zc=3" data-srcset="{{ asset('/') }}timthumb.php?src={{ asset('/') }}assets/img/engagement-shoot/pexels-jasmine-carter-888899.jpg&=350&zc=3" />
                <div class="lazy-wave"></div>
                <span class="book_now">
                 book now
                </span>
               </a>
               <a class="photoghraphy_box d-flex align-items-end justify-content-end rounded text-decoration-none" href="{{ asset('/') }}book-now">
                <img class="lazy" alt="Title 2" src="{{ asset('/') }}timthumb.php?src={{ asset('/') }}assets/img/engagement-shoot/pexels-jesus-arias-2894864.jpg&=20&zc=3" srcset="{{ asset('/') }}timthumb.php?src={{ asset('/') }}assets/img/engagement-shoot/pexels-jesus-arias-2894864.jpg&=20&zc=3" data-src="{{ asset('/') }}timthumb.php?src={{ asset('/') }}assets/img/engagement-shoot/pexels-jesus-arias-2894864.jpg&=350&zc=3" data-srcset="{{ asset('/') }}timthumb.php?src={{ asset('/') }}assets/img/engagement-shoot/pexels-jesus-arias-2894864.jpg&=350&zc=3" />
                <div class="lazy-wave"></div>
                <span class="book_now">
                 book now
                </span>
               </a>
               <a class="photoghraphy_box d-flex align-items-end justify-content-end rounded text-decoration-none" href="{{ asset('/') }}book-now">
                <img class="lazy" alt="Title 1" src="{{ asset('/') }}timthumb.php?src={{ asset('/') }}assets/img/engagement-shoot/pexels-jesus-arias-2894866.jpg&=20&zc=3" srcset="{{ asset('/') }}timthumb.php?src={{ asset('/') }}assets/img/engagement-shoot/pexels-jesus-arias-2894866.jpg&=20&zc=3" data-src="{{ asset('/') }}timthumb.php?src={{ asset('/') }}assets/img/engagement-shoot/pexels-jesus-arias-2894866.jpg&=350&zc=3" data-srcset="{{ asset('/') }}timthumb.php?src={{ asset('/') }}assets/img/engagement-shoot/pexels-jesus-arias-2894866.jpg&=350&zc=3" />
                <div class="lazy-wave"></div>
                <span class="book_now">
                 book now
                </span>
               </a>
               <a class="photoghraphy_box d-flex align-items-end justify-content-end rounded text-decoration-none" href="{{ asset('/') }}book-now">
                <img class="lazy" alt="Title 2" src="{{ asset('/') }}timthumb.php?src={{ asset('/') }}assets/img/engagement-shoot/pexels-jonathan-borba-3014856.jpg&=20&zc=3" srcset="{{ asset('/') }}timthumb.php?src={{ asset('/') }}assets/img/engagement-shoot/pexels-jonathan-borba-3014856.jpg&=20&zc=3" data-src="{{ asset('/') }}timthumb.php?src={{ asset('/') }}assets/img/engagement-shoot/pexels-jonathan-borba-3014856.jpg&=350&zc=3" data-srcset="{{ asset('/') }}timthumb.php?src={{ asset('/') }}assets/img/engagement-shoot/pexels-jonathan-borba-3014856.jpg&=350&zc=3" />
                <div class="lazy-wave"></div>
                <span class="book_now">
                 book now
                </span>
               </a>
               <a class="photoghraphy_box d-flex align-items-end justify-content-end rounded text-decoration-none" href="{{ asset('/') }}book-now">
                <img class="lazy" alt="Title 2" src="{{ asset('/') }}timthumb.php?src={{ asset('/') }}assets/img/engagement-shoot/pexels-jonathan-borba-3101548.jpg&=20&zc=3" srcset="{{ asset('/') }}timthumb.php?src={{ asset('/') }}assets/img/engagement-shoot/pexels-jonathan-borba-3101548.jpg&=20&zc=3" data-src="{{ asset('/') }}timthumb.php?src={{ asset('/') }}assets/img/engagement-shoot/pexels-jonathan-borba-3101548.jpg&=350&zc=3" data-srcset="{{ asset('/') }}timthumb.php?src={{ asset('/') }}assets/img/engagement-shoot/pexels-jonathan-borba-3101548.jpg&=350&zc=3" />
                <div class="lazy-wave"></div>
                <span class="book_now">
                 book now
                </span>
               </a>
               <a class="photoghraphy_box d-flex align-items-end justify-content-end rounded text-decoration-none" href="{{ asset('/') }}book-now">
                <img class="lazy" alt="Title 2" src="{{ asset('/') }}timthumb.php?src={{ asset('/') }}assets/img/engagement-shoot/pexels-mukesh-mohanty-936554.jpg&=20&zc=3" srcset="{{ asset('/') }}timthumb.php?src={{ asset('/') }}assets/img/engagement-shoot/pexels-mukesh-mohanty-936554.jpg&=20&zc=3" data-src="{{ asset('/') }}timthumb.php?src={{ asset('/') }}assets/img/engagement-shoot/pexels-mukesh-mohanty-936554.jpg&=350&zc=3" data-srcset="{{ asset('/') }}timthumb.php?src={{ asset('/') }}assets/img/engagement-shoot/pexels-mukesh-mohanty-936554.jpg&=350&zc=3" />
                <div class="lazy-wave"></div>
                <span class="book_now">
                 book now
                </span>
               </a>
               <a class="photoghraphy_box d-flex align-items-end justify-content-end rounded text-decoration-none" href="{{ asset('/') }}book-now">
                <img class="lazy" alt="Title 2" src="{{ asset('/') }}timthumb.php?src={{ asset('/') }}assets/img/engagement-shoot/pexels-oleg-zaicev-4834896.jpg&=20&zc=3" srcset="{{ asset('/') }}timthumb.php?src={{ asset('/') }}assets/img/engagement-shoot/pexels-oleg-zaicev-4834896.jpg&=20&zc=3" data-src="{{ asset('/') }}timthumb.php?src={{ asset('/') }}assets/img/engagement-shoot/pexels-oleg-zaicev-4834896.jpg&=350&zc=3" data-srcset="{{ asset('/') }}timthumb.php?src={{ asset('/') }}assets/img/engagement-shoot/pexels-oleg-zaicev-4834896.jpg&=350&zc=3" />
                <div class="lazy-wave"></div>
                <span class="book_now">
                 book now
                </span>
               </a>
               <a class="photoghraphy_box d-flex align-items-end justify-content-end rounded text-decoration-none" href="{{ asset('/') }}book-now">
                <img class="lazy" alt="Title 2" src="{{ asset('/') }}timthumb.php?src={{ asset('/') }}assets/img/engagement-shoot/pexels-rahi-abdullah-9656409.jpg&=20&zc=3" srcset="{{ asset('/') }}timthumb.php?src={{ asset('/') }}assets/img/engagement-shoot/pexels-rahi-abdullah-9656409.jpg&=20&zc=3" data-src="{{ asset('/') }}timthumb.php?src={{ asset('/') }}assets/img/engagement-shoot/pexels-rahi-abdullah-9656409.jpg&=350&zc=3" data-srcset="{{ asset('/') }}timthumb.php?src={{ asset('/') }}assets/img/engagement-shoot/pexels-rahi-abdullah-9656409.jpg&=350&zc=3" />
                <div class="lazy-wave"></div>
                <span class="book_now">
                 book now
                </span>
               </a>
               <a class="photoghraphy_box d-flex align-items-end justify-content-end rounded text-decoration-none" href="{{ asset('/') }}book-now">
                <img class="lazy" alt="Title 2" src="{{ asset('/') }}timthumb.php?src={{ asset('/') }}assets/img/engagement-shoot/pexels-unique-photography-by-sonam-singh-6504389.jpg&=20&zc=3" srcset="{{ asset('/') }}timthumb.php?src={{ asset('/') }}assets/img/engagement-shoot/pexels-unique-photography-by-sonam-singh-6504389.jpg&=20&zc=3" data-src="{{ asset('/') }}timthumb.php?src={{ asset('/') }}assets/img/engagement-shoot/pexels-unique-photography-by-sonam-singh-6504389.jpg&=350&zc=3" data-srcset="{{ asset('/') }}timthumb.php?src={{ asset('/') }}assets/img/engagement-shoot/pexels-unique-photography-by-sonam-singh-6504389.jpg&=350&zc=3" />
                <div class="lazy-wave"></div>
                <span class="book_now">
                 book now
                </span>
               </a>
               <a class="photoghraphy_box d-flex align-items-end justify-content-end rounded text-decoration-none" href="{{ asset('/') }}book-now">
                <img class="lazy" alt="Title 2" src="{{ asset('/') }}timthumb.php?src={{ asset('/') }}assets/img/engagement-shoot/pexels-unique-photography-by-sonam-singh-6498019.jpg&=20&zc=3" srcset="{{ asset('/') }}timthumb.php?src={{ asset('/') }}assets/img/engagement-shoot/pexels-unique-photography-by-sonam-singh-6498019.jpg&=20&zc=3" data-src="{{ asset('/') }}timthumb.php?src={{ asset('/') }}assets/img/engagement-shoot/pexels-unique-photography-by-sonam-singh-6498019.jpg&=350&zc=3" data-srcset="{{ asset('/') }}timthumb.php?src={{ asset('/') }}assets/img/engagement-shoot/pexels-unique-photography-by-sonam-singh-6498019.jpg&=350&zc=3" />
                <div class="lazy-wave"></div>
                <span class="book_now">
                 book now
                </span>
               </a>
               <a class="photoghraphy_box d-flex align-items-end justify-content-end rounded text-decoration-none" href="{{ asset('/') }}book-now">
                <img class="lazy" alt="Title 2" src="{{ asset('/') }}timthumb.php?src={{ asset('/') }}assets/img/engagement-shoot/pexels-unique-photography-by-sonam-singh-6504385.jpg&=20&zc=3" srcset="{{ asset('/') }}timthumb.php?src={{ asset('/') }}assets/img/engagement-shoot/pexels-unique-photography-by-sonam-singh-6504385.jpg&=20&zc=3" data-src="{{ asset('/') }}timthumb.php?src={{ asset('/') }}assets/img/engagement-shoot/pexels-unique-photography-by-sonam-singh-6504385.jpg&=350&zc=3" data-srcset="{{ asset('/') }}timthumb.php?src={{ asset('/') }}assets/img/engagement-shoot/pexels-unique-photography-by-sonam-singh-6504385.jpg&=350&zc=3" />
                <div class="lazy-wave"></div>
                <span class="book_now">
                 book now
                </span>
               </a> -->

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="videos" role="tabpanel" aria-labelledby="videos-tab">
                                <div class="row pt-md-5 pt-4">
                                    <div class="col-12">
                                        <div class="row">
                                            <!-- <div class="col-md-6 p-3">
               <div class="row mx-0">
                <div class="col-12 video_ratio rounded-10 overflow-hidden">
                 <iframe src="https://www.youtube.com/embed/h2MlABN8i5s" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
               </div>
              </div>
              <div class="col-md-6 p-3">
               <div class="row mx-0">
                <div class="col-12 video_ratio rounded-10 overflow-hidden">
                 <iframe src="https://www.youtube.com/embed/Ah8St4mK4y8" title="YouTube video player" frameborder="0" allow="autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
               </div>
              </div> -->
                                            @foreach ($data as $value)
                                                @if ($value->type == 'video')
                                                    <div class="col-md-6 p-3">
                                                        <div class="row mx-0 demo-for-iframe">
                                                            <a href="https://youtu.be/{{ $value->image }}"
                                                                class="col-12 video_ratio rounded-10 overflow-hidden glightbox3">
                                                                <img src="http://img.youtube.com/vi/{{ $value->image }}/0.jpg"
                                                                    alt="">
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
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach
                                            <!-- <div class="col-md-6 p-3">
               <div class="row mx-0 demo-for-iframe">
                <a href="https://youtu.be/yg8QgMPyDBw" class="col-12 video_ratio rounded-10 overflow-hidden glightbox3">
                 <img src="http://img.youtube.com/vi/yg8QgMPyDBw/0.jpg" alt="">
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
               </div>
              </div>
              <div class="col-md-6 p-3">
               <div class="row mx-0 demo-for-iframe">
                <a href="https://youtu.be/Ah8St4mK4y8" class="col-12 video_ratio rounded-10 overflow-hidden glightbox3">
                 <img src="http://img.youtube.com/vi/Ah8St4mK4y8/0.jpg" alt="">
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
               </div>
              </div>
              <div class="col-md-6 p-3">
               <div class="row mx-0">
                <a href="https://youtu.be/1XwlWKez7lc" class="col-12 video_ratio rounded-10 overflow-hidden glightbox3">
                 <img src="http://img.youtube.com/vi/1XwlWKez7lc/0.jpg" alt="">
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
               </div>
              </div> -->
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
@endpush


@push('page-script')
@endpush
