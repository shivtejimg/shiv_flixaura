@extends('frontend.layouts.app')
	@section('title')
	@endsection
	@push('stylesheet-link')
		
	<link rel="stylesheet" href="{{asset('./../assets/plugins/justifiedGallery/justifiedGallery.min.css')}}">
	@endpush

	@section('mainsection')
		<?php use App\Helpers\Helpers; ?>
		<main class="main-scrollbar">
			<div class="container-fluid py-5 mt-5 categoryPage">
				<div class="container innerPage mb-4">
					<div class="row">
						<div class="col-12 fs-lg-35 mb-4 fs-md-30 fs-sm-26 fs-22 fw-bold text-black pt-3 pb-2">Popular royalty image categories</div>
					</div>
					<div class="row categoryCard g-md-4 g-sm-3 g-2">
						<div class="col-lg-3 col-md-4 col-6">
							<a href="javascript:;" class="card rounded-5 border-0 overflow-hidden h-100">
								<div class="card-body p-0 position-relative h-100">
									<div class="cardImg position-relative h-100"><img src="{{asset('/resources/views/frontend/assets/img/couple-shoot/pexels-ketut-subiyanto-4307633.jpg')}}" alt="photographer" class="w-100 h-100"></div>
									<div class="categoriesName position-absolute w-100 h-100 p-3 text-white fw-bold d-flex justify-content-center align-items-center fs-lg-20 fs-md-18 fs-sm-16 fs-14"><span class="text-center">Photographer</span></div>
								</div>
							</a>
						</div>
						<div class="col-lg-3 col-md-4 col-6">
							<a href="javascript:;" class="card rounded-5 border-0 overflow-hidden h-100">
								<div class="card-body p-0 position-relative h-100">
									<div class="cardImg position-relative h-100"><img src="{{asset('/resources/views/frontend/assets/img/couple-shoot/pexels-helena-lopes-1464565.jpg')}}" alt="photographer" class="w-100 h-100"></div>
									<div class="categoriesName position-absolute w-100 h-100 p-3 text-white fw-bold d-flex justify-content-center align-items-center fs-lg-20 fs-md-18 fs-sm-16 fs-14"><span class="text-center">Photographer</span></div>
								</div>
							</a>
						</div>
						<div class="col-lg-3 col-md-4 col-6">
							<a href="javascript:;" class="card rounded-5 border-0 overflow-hidden h-100">
								<div class="card-body p-0 position-relative h-100">
									<div class="cardImg position-relative h-100"><img src="{{asset('/resources/views/frontend/assets/img/couple-shoot/pexels-anna-tarazevich-5119610.jpg')}}" alt="photographer" class="w-100 h-100"></div>
									<div class="categoriesName position-absolute w-100 h-100 p-3 text-white fw-bold d-flex justify-content-center align-items-center fs-lg-20 fs-md-18 fs-sm-16 fs-14"><span class="text-center">Photographer</span></div>
								</div>
							</a>
						</div>
						<div class="col-lg-3 col-md-4 col-6">
							<a href="javascript:;" class="card rounded-5 border-0 overflow-hidden h-100">
								<div class="card-body p-0 position-relative h-100">
									<div class="cardImg position-relative h-100"><img src="{{asset('/resources/views/frontend/assets/img/couple-shoot/pexels-helena-lopes-1464565.jpg')}}" alt="photographer" class="w-100 h-100"></div>
									<div class="categoriesName position-absolute w-100 h-100 p-3 text-white fw-bold d-flex justify-content-center align-items-center fs-lg-20 fs-md-18 fs-sm-16 fs-14"><span class="text-center">Photographer</span></div>
								</div>
							</a>
						</div>
						<div class="col-lg-3 col-md-4 col-6">
							<a href="javascript:;" class="card rounded-5 border-0 overflow-hidden h-100">
								<div class="card-body p-0 position-relative h-100">
									<div class="cardImg position-relative h-100"><img src="{{asset('/resources/views/frontend/assets/img/couple-shoot/pexels-ketut-subiyanto-4307935.jpg')}}" alt="photographer" class="w-100 h-100"></div>
									<div class="categoriesName position-absolute w-100 h-100 p-3 text-white fw-bold d-flex justify-content-center align-items-center fs-lg-20 fs-md-18 fs-sm-16 fs-14"><span class="text-center">Photographer</span></div>
								</div>
							</a>
						</div>
						<div class="col-lg-3 col-md-4 col-6">
							<a href="javascript:;" class="card rounded-5 border-0 overflow-hidden h-100">
								<div class="card-body p-0 position-relative h-100">
									<div class="cardImg position-relative h-100"><img src="{{asset('/resources/views/frontend/assets/img/couple-shoot/pexels-ketut-subiyanto-4307789.jpg')}}" alt="photographer" class="w-100 h-100"></div>
									<div class="categoriesName position-absolute w-100 h-100 p-3 text-white fw-bold d-flex justify-content-center align-items-center fs-lg-20 fs-md-18 fs-sm-16 fs-14"><span class="text-center">Photographer</span></div>
								</div>
							</a>
						</div>
						<div class="col-lg-3 col-md-4 col-6">
							<a href="javascript:;" class="card rounded-5 border-0 overflow-hidden h-100">
								<div class="card-body p-0 position-relative h-100">
									<div class="cardImg position-relative h-100"><img src="{{asset('/resources/views/frontend/assets/img/couple-shoot/pexels-ketut-subiyanto-4312832.jpg')}}" alt="photographer" class="w-100 h-100"></div>
									<div class="categoriesName position-absolute w-100 h-100 p-3 text-white fw-bold d-flex justify-content-center align-items-center fs-lg-20 fs-md-18 fs-sm-16 fs-14"><span class="text-center">Photographer</span></div>
								</div>
							</a>
						</div>
						<div class="col-lg-3 col-md-4 col-6">
							<a href="javascript:;" class="card rounded-5 border-0 overflow-hidden h-100">
								<div class="card-body p-0 position-relative h-100">
									<div class="cardImg position-relative h-100"><img src="{{asset('/resources/views/frontend/assets/img/couple-shoot/pexels-ketut-subiyanto-4308053.jpg')}}" alt="photographer" class="w-100 h-100"></div>
									<div class="categoriesName position-absolute w-100 h-100 p-3 text-white fw-bold d-flex justify-content-center align-items-center fs-lg-20 fs-md-18 fs-sm-16 fs-14"><span class="text-center">Photographer</span></div>
								</div>
							</a>
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
		<script src="{{asset('./../assets/plugins/justifiedGallery/jquery.justifiedGallery.min.js')}}"></script>
	@endpush


	@push('page-script')
	@endpush
