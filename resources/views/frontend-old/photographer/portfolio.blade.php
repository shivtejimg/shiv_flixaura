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
@endsection
@push('stylesheet-link')
@endpush

@section('mainsection')
    <?php use App\Traits\SettingsTrait; ?>
    <main class="main-scrollbar">

        <!-- cateogory section start-->
        <section id="category" class="category shadow  mb-0 bg-dark mt-5 py-lg-5 pt-md-4 pb-md-5 pt-4 pb-4">
            <div class="container">
                <div class="category_content text-center">
                    <h2 class="fs-lg-30 fs-20 text-white">All Categories</h2>
                </div>
                <div class="row mt-lg-5 mt-md-4 mt-4 mx-0">
                    <div class="col-12">
                        <div class="category_sldier owl-carousel">
                            @foreach ($categories as $value)
                                <?php $link = str_replace(' ', '-', $value->name); ?>
                                <a class="category_sldier_box" href="<?php echo asset('/photographer') . '/' . $link; ?>"
                                    style="--bg:url({{ asset('/') }}timthumb.php?src={{ asset('/public') }}/{{ $value->image }}&w=150&zc=3);">
                                    <span>{{ $value->name }}</span>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container-fluid portfolio-categories pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-12 fs-lg-45 fs-md-40 fs-sm-35 fs-30 fw-bold text-muted pt-4 pb-3">
                        {{ $portfoliocategory->name }}</div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <ul class="nav nav-tabs mx-md-n3 mx-n2" id="portfolioCat" role="tablist">
                            <?php $status = SettingsTrait::getphotographercatcheck($portfoliocategory->id); ?>
                            @if ($status == 1)
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link fw-bold fs-lg-17 fs-md-16 fs-15 px-md-3 px-2 active"
                                        id="videos-tab" data-bs-toggle="tab" data-bs-target="#videos" type="button"
                                        role="tab" aria-controls="videos" aria-selected="true">Videos</button>
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
                                        role="tab" aria-controls="photos" aria-selected="false">Photos</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link fw-bold fs-lg-17 fs-md-16 fs-15 px-md-3 px-2" id="videos-tab"
                                        data-bs-toggle="tab" data-bs-target="#videos" type="button" role="tab"
                                        aria-controls="videos" aria-selected="true">Videos</button>
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
                            <div class="tab-pane fade" id="videos" role="tabpanel" aria-labelledby="videos-tab">
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
                                                                    <img src="{{ asset('/public') }}/logo.png"
                                                                        alt="Video Frame">
                                                                @else
                                                                    <img src="{{ asset('/public') }}/{{ $value->image }}"
                                                                        alt="Video Frame">
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
                                                                <p
                                                                    style="position: absolute;bottom: -16px;padding: 10px 0px;text-align: center;color: white;font-size: 22px;font-weight: bold;background: #03081b52;border-radius: 10px;">
                                                                    {{ $value->title }}</p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade show active" id="photos" role="tabpanel"
                                aria-labelledby="photos-tab">
                                <div class="row pt-md-5 pt-4">
                                    <div class="col-12">
                                        <div class="row">
                                            <div id="mygallery" class="px-0 shoot">
                                                @foreach ($data as $value)
                                                    <?php $parts = explode('/', $value->image); ?>
                                                    @if ($value->type == 'image')
                                                        <div
                                                            class="photoghraphy_box photographer_box_Card d-flex align-items-end justify-content-end rounded text-decoration-none">
                                                            <img class="lazy" alt="Title 1"
                                                                src="{{ asset('/') }}/timthumb.php?src={{ asset('/public/imagepw') }}/{{ $parts[1] }}&h=20&zc=3"
                                                                srcset="{{ asset('/') }}/timthumb.php?src={{ asset('/public/imagepw') }}/{{ $parts[1] }}&h=20&zc=3"
                                                                data-src="{{ asset('/') }}/timthumb.php?src={{ asset('/public/imagepw') }}/{{ $parts[1] }}&h=350&zc=3"
                                                                data-srcset="{{ asset('/') }}/timthumb.php?src={{ asset('/public/imagepw') }}/{{ $parts[1] }}&h=350&zc=3" />
                                                            <div class="lazy-wave"></div>
                                                            <div class="contentBody p-3 d-flex flex-column">
                                                                <div class="d-flex mx-0 mt-auto align-items-center gap-2">
                                                                    <div
                                                                        class="artImg mw-40px h-40px rounded-circle overflow-hidden border border-2 border-white">
                                                                        <img src="{{ $value->uimage }}" alt="artist"
                                                                            class="w-100"></div>
                                                                    <div
                                                                        class="artistName fs-lg-16 fs-14 text-white fw-semibold text-truncate">
                                                                        {{ $value->uname }}</div>
                                                                </div>
                                                            </div>
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
            </div>
        </div>

        <div class="modal fade sellImgModal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modallg">
                <div class="modal-content">
                    <div class="modal-header border-0">
                        <div class="row mx-0 w-100">
                            <div class="col-auto ms-auto px-0"><button type="button"
                                    class="innerBtn btn p-0 bg-light fs-18 w-30px h-30px d-inline-flex shadow-none align-items-center justify-content-center text-dark"
                                    data-bs-dismiss="modal"><i class="imgs img-times"></i></button></div>
                        </div>
                    </div>
                    <div class="modal-body pt-0 ">
                        <div class="row gap-3">
                            <div class="col-12 mx-auto">
                                <div class="sellProduct rounded overflow-hidden"><img alt="Peace of mind" class="w-100"
                                        src="{{ asset('/resources/views/frontend/assets/img/couple-shoot/pexels-helena-lopes-1464565.jpg') }}" />
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="modal-footer text-center justify-content-center border-0">
					<button type="button" class="btn btn-dark" data-bs-dismiss="modal">OKAY</button>
				</div>
			</div> --}}
                </div>
            </div>
    </main>
@endsection

@push('page-script-link')
@endpush


@push('page-script')
@endpush
