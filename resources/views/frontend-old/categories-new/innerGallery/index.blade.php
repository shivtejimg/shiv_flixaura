@extends('frontend.layouts.app')
	@section('title')
	@endsection
	@push('stylesheet-link')
		
	<link rel="stylesheet" href="{{asset('./../assets/plugins/justifiedGallery/justifiedGallery.min.css')}}">
	@endpush

	@section('mainsection')
<?php use App\Helpers\Helpers; ?>
<main class="main-scrollbar">
	<div class="container-fluid py-5 collectionPage">
		<div class="container innerPage px-0">
			<div class="row mt-4 mx-0">
				<div class="col-12 fs-lg-35 fs-md-30 fs-sm-26 fs-22 fw-bold text-black pt-3 pb-2">Curated just for you</div>
			</div>
			<div class="row mx-0">
				<div class="col-12 px-0 justified-gallery" id="liveDemo" >
					<div class="collectionImg" data-bs-toggle="modal" data-bs-target="#exampleModal">
						<img alt="Peace of mind" src="{{asset('/resources/views/frontend/assets/img/couple-shoot/pexels-helena-lopes-1464565.jpg')}}"/>
						<div class="contentBody p-3 d-flex flex-column">
							<div class="row mx-0 gx-0">
								<div class="col-auto ms-auto d-flex align-items-center gap-2">
								<a href="javascript:;" class="rounded bg-light innerBtn fs-md-18 fs-16 w-30px h-30px d-inline-flex align-items-center justify-content-center text-decoration-none text-dark"><i class="imgs img-heart"></i></a>
								<a href="javascript:;" class="rounded bg-light innerBtn fs-md-18 fs-16 w-30px h-30px d-inline-flex align-items-center justify-content-center text-decoration-none text-dark"><i class="imgs img-download"></i></a>
							</div>
						</div>
						<div class="d-flex mx-0 mt-auto align-items-center gap-2">
							<div class="artImg w-40px h-40px rounded-circle overflow-hidden border border-2 border-white"><img src="{{asset('/resources/views/frontend/assets/img/couple-shoot/pexels-helena-lopes-1464565.jpg')}}" alt="artist" class="w-100"></div>
							<div class="artistName fs-lg-16 fs-14 text-white fw-semibold text-truncate">Daniel J. Schwarz</div>
						</div>
					</div>
					</div>
					<div class="collectionImg">
						<img alt="Peace of mind" src="{{asset('/resources/views/frontend/assets/img/couple-shoot/pexels-anna-tarazevich-5119610.jpg')}}"/>
						<div class="contentBody p-3 d-flex flex-column">
								<div class="row mx-0 gx-0">
									<div class="col-auto ms-auto d-flex align-items-center gap-2">
									<a href="javascript:;" class="rounded bg-light innerBtn fs-md-18 fs-16 w-30px h-30px d-inline-flex align-items-center justify-content-center text-decoration-none text-dark"><i class="imgs img-heart"></i></a>
									<a href="javascript:;" class="rounded bg-light innerBtn fs-md-18 fs-16 w-30px h-30px d-inline-flex align-items-center justify-content-center text-decoration-none text-dark"><i class="imgs img-download"></i></a>
								</div>
							</div>
							<div class="d-flex mx-0 mt-auto align-items-center gap-2">
								<div class="artImg w-40px h-40px rounded-circle overflow-hidden border border-2 border-white"><img src="{{asset('/resources/views/frontend/assets/img/couple-shoot/pexels-helena-lopes-1464565.jpg')}}" alt="artist" class="w-100"></div>
								<div class="artistName fs-lg-16 fs-14 text-white fw-semibold text-truncate">Daniel J. Schwarz</div>
							</div>
						</div>
					</div>
					<div class="collectionImg">
						<img alt="Peace of mind" src="{{asset('/resources/views/frontend/assets/img/couple-shoot/pexels-helena-lopes-1464565.jpg')}}"/>
						<div class="contentBody p-3 d-flex flex-column">
								<div class="row mx-0 gx-0">
									<div class="col-auto ms-auto d-flex align-items-center gap-2">
									<a href="javascript:;" class="rounded bg-light innerBtn fs-md-18 fs-16 w-30px h-30px d-inline-flex align-items-center justify-content-center text-decoration-none text-dark"><i class="imgs img-heart"></i></a>
									<a href="javascript:;" class="rounded bg-light innerBtn fs-md-18 fs-16 w-30px h-30px d-inline-flex align-items-center justify-content-center text-decoration-none text-dark"><i class="imgs img-download"></i></a>
								</div>
							</div>
							<div class="d-flex mx-0 mt-auto align-items-center gap-2">
								<div class="artImg w-40px h-40px rounded-circle overflow-hidden border border-2 border-white"><img src="{{asset('/resources/views/frontend/assets/img/couple-shoot/pexels-helena-lopes-1464565.jpg')}}" alt="artist" class="w-100"></div>
								<div class="artistName fs-lg-16 fs-14 text-white fw-semibold text-truncate">Daniel J. Schwarz</div>
							</div>
						</div>
					</div>
					<div class="collectionImg">
						<img alt="Peace of mind" src="{{asset('/resources/views/frontend/assets/img/couple-shoot/pexels-anna-tarazevich-5119610.jpg')}}"/>
						<div class="contentBody p-3 d-flex flex-column">
								<div class="row mx-0 gx-0">
									<div class="col-auto ms-auto d-flex align-items-center gap-2">
									<a href="javascript:;" class="rounded bg-light innerBtn fs-md-18 fs-16 w-30px h-30px d-inline-flex align-items-center justify-content-center text-decoration-none text-dark"><i class="imgs img-heart"></i></a>
									<a href="javascript:;" class="rounded bg-light innerBtn fs-md-18 fs-16 w-30px h-30px d-inline-flex align-items-center justify-content-center text-decoration-none text-dark"><i class="imgs img-download"></i></a>
								</div>
							</div>
							<div class="d-flex mx-0 mt-auto align-items-center gap-2">
								<div class="artImg w-40px h-40px rounded-circle overflow-hidden border border-2 border-white"><img src="{{asset('/resources/views/frontend/assets/img/couple-shoot/pexels-helena-lopes-1464565.jpg')}}" alt="artist" class="w-100"></div>
								<div class="artistName fs-lg-16 fs-14 text-white fw-semibold text-truncate">Daniel J. Schwarz</div>
							</div>
						</div>
					</div>
					<div class="collectionImg">
						<img alt="Peace of mind" src="{{asset('/resources/views/frontend/assets/img/couple-shoot/pexels-ketut-subiyanto-4307633.jpg')}}"/>
						<div class="contentBody p-3 d-flex flex-column">
								<div class="row mx-0 gx-0">
									<div class="col-auto ms-auto d-flex align-items-center gap-2">
									<a href="javascript:;" class="rounded bg-light innerBtn fs-md-18 fs-16 w-30px h-30px d-inline-flex align-items-center justify-content-center text-decoration-none text-dark"><i class="imgs img-heart"></i></a>
									<a href="javascript:;" class="rounded bg-light innerBtn fs-md-18 fs-16 w-30px h-30px d-inline-flex align-items-center justify-content-center text-decoration-none text-dark"><i class="imgs img-download"></i></a>
								</div>
							</div>
							<div class="d-flex mx-0 mt-auto align-items-center gap-2">
								<div class="artImg w-40px h-40px rounded-circle overflow-hidden border border-2 border-white"><img src="{{asset('/resources/views/frontend/assets/img/couple-shoot/pexels-helena-lopes-1464565.jpg')}}" alt="artist" class="w-100"></div>
								<div class="artistName fs-lg-16 fs-14 text-white fw-semibold text-truncate">Daniel J. Schwarz</div>
							</div>
						</div>
					</div>
					<div class="collectionImg">
						<img alt="Peace of mind" src="{{asset('/resources/views/frontend/assets/img/couple-shoot/pexels-ketut-subiyanto-4307935.jpg')}}"/>
						<div class="contentBody p-3 d-flex flex-column">
								<div class="row mx-0 gx-0">
									<div class="col-auto ms-auto d-flex align-items-center gap-2">
									<a href="javascript:;" class="rounded bg-light innerBtn fs-md-18 fs-16 w-30px h-30px d-inline-flex align-items-center justify-content-center text-decoration-none text-dark"><i class="imgs img-heart"></i></a>
									<a href="javascript:;" class="rounded bg-light innerBtn fs-md-18 fs-16 w-30px h-30px d-inline-flex align-items-center justify-content-center text-decoration-none text-dark"><i class="imgs img-download"></i></a>
								</div>
							</div>
							<div class="d-flex mx-0 mt-auto align-items-center gap-2">
								<div class="artImg w-40px h-40px rounded-circle overflow-hidden border border-2 border-white"><img src="{{asset('/resources/views/frontend/assets/img/couple-shoot/pexels-helena-lopes-1464565.jpg')}}" alt="artist" class="w-100"></div>
								<div class="artistName fs-lg-16 fs-14 text-white fw-semibold text-truncate">Daniel J. Schwarz</div>
							</div>
						</div>
					</div>
					<div class="collectionImg">
						<img alt="Peace of mind" src="{{asset('/resources/views/frontend/assets/img/couple-shoot/pexels-anna-tarazevich-5119610.jpg')}}"/>
						<div class="contentBody p-3 d-flex flex-column">
								<div class="row mx-0 gx-0">
									<div class="col-auto ms-auto d-flex align-items-center gap-2">
									<a href="javascript:;" class="rounded bg-light innerBtn fs-md-18 fs-16 w-30px h-30px d-inline-flex align-items-center justify-content-center text-decoration-none text-dark"><i class="imgs img-heart"></i></a>
									<a href="javascript:;" class="rounded bg-light innerBtn fs-md-18 fs-16 w-30px h-30px d-inline-flex align-items-center justify-content-center text-decoration-none text-dark"><i class="imgs img-download"></i></a>
								</div>
							</div>
							<div class="d-flex mx-0 mt-auto align-items-center gap-2">
								<div class="artImg w-40px h-40px rounded-circle overflow-hidden border border-2 border-white"><img src="{{asset('/resources/views/frontend/assets/img/couple-shoot/pexels-helena-lopes-1464565.jpg')}}" alt="artist" class="w-100"></div>
								<div class="artistName fs-lg-16 fs-14 text-white fw-semibold text-truncate">Daniel J. Schwarz</div>
							</div>
						</div>
					</div>
					<div class="collectionImg">
						<img alt="Peace of mind" src="{{asset('/resources/views/frontend/assets/img/couple-shoot/pexels-anna-tarazevich-5119610.jpg')}}"/>
						<div class="contentBody p-3 d-flex flex-column">
								<div class="row mx-0 gx-0">
									<div class="col-auto ms-auto d-flex align-items-center gap-2">
									<a href="javascript:;" class="rounded bg-light innerBtn fs-md-18 fs-16 w-30px h-30px d-inline-flex align-items-center justify-content-center text-decoration-none text-dark"><i class="imgs img-heart"></i></a>
									<a href="javascript:;" class="rounded bg-light innerBtn fs-md-18 fs-16 w-30px h-30px d-inline-flex align-items-center justify-content-center text-decoration-none text-dark"><i class="imgs img-download"></i></a>
									</div>
								</div>
							<div class="d-flex mx-0 mt-auto align-items-center gap-2">
								<div class="artImg w-40px h-40px rounded-circle overflow-hidden border border-2 border-white"><img src="{{asset('/resources/views/frontend/assets/img/couple-shoot/pexels-helena-lopes-1464565.jpg')}}" alt="artist" class="w-100"></div>
								<div class="artistName fs-lg-16 fs-14 text-white fw-semibold text-truncate">Daniel J. Schwarz Daniel J. Schwarz </div>
							</div>
						</div>
					</div>
					{{-- <div class="collectionImg">
						<img alt="Peace of mind" src="{{asset('/resources/views/frontend/assets/img/couple-shoot/pexels-helena-lopes-1464565.jpg')}}"/>
						<div class="contentBody p-3 d-flex flex-column">
							<div class="row mx-0 gx-0">
								<div class="col-auto ms-auto d-flex align-items-center gap-2">
									<a href="javascript:;" class="rounded bg-light innerBtn fs-md-18 fs-16 w-30px h-30px d-inline-flex align-items-center justify-content-center text-decoration-none text-dark"><i class="imgs img-heart"></i></a>
									<a href="javascript:;" class="rounded bg-light innerBtn fs-md-18 fs-16 w-30px h-30px d-inline-flex align-items-center justify-content-center text-decoration-none text-dark"><i class="imgs img-plus"></i></a>
								</div>
							</div>
							<div class="row g-0 mx-0 mt-auto">
								<div class="col">
									<div class="row mx-0 align-items-center">
										<div class="col-auto px-0"><div class="artImg w-sm-30px w-25px h-sm-30px h-25px rounded-circle overflow-hidden border border-2 border-white"><img src="{{asset('/resources/views/frontend/assets/img/couple-shoot/pexels-helena-lopes-1464565.jpg')}}" alt="artist" class="w-100"></div></div>
										<div class="col"><div class="artistName fs-lg-16 fs-14 text-white fw-semibold">Daniel J. Schwarz</div></div>
									</div>
								</div>
								<div class="col-auto">
									<a href="javascript:;" class="rounded bg-light innerBtn fs-md-18 fs-16 w-30px h-30px d-inline-flex align-items-center justify-content-center text-decoration-none text-dark"><i class="imgs img-download"></i></a>
								</div>
							</div>
						</div>
					</div> --}}
				</div>
			</div>
		</div>
	</div>
</main>
<div class="modal fade sellImgModal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modallg">
		<div class="modal-content">
			<div class="modal-header border-0">
				<div class="row mx-0 w-100">
					<div class="col-auto ms-auto px-0"><button type="button" class="innerBtn btn p-0 bg-light fs-18 w-30px h-30px d-inline-flex shadow-none align-items-center justify-content-center text-dark" data-bs-dismiss="modal"><i class="imgs img-times"></i></button></div>
				</div>
			  </div>
			<div class="modal-body pt-0 ">
				<div class="row gap-3">
					<div class="col-12 mx-auto"><div class="sellProduct rounded overflow-hidden"><img alt="Peace of mind" class="w-100" src="{{asset('/resources/views/frontend/assets/img/couple-shoot/pexels-helena-lopes-1464565.jpg')}}"/></div></div>
				</div>
			</div>
			{{-- <div class="modal-footer text-center justify-content-center border-0">
				<button type="button" class="btn btn-dark" data-bs-dismiss="modal">OKAY</button>
			</div>
		</div> --}}
	</div>
</div>
@endsection

@push('page-script-link')
<script src="{{asset('./../assets/plugins/justifiedGallery/jquery.justifiedGallery.min.js')}}"></script>
@endpush


@push('page-script')
<script>
	$("#liveDemo").justifiedGallery({
		waitThumbnailsLoad: false,
		margins : 20,
		rowHeight : 300,
		captions : false
		});
</script>
@endpush
