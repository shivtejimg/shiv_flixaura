@include('frontend.layouts.header-link')
@include('frontend.layouts.header')
<?php use App\Helpers\Helpers; ?>
<!-- <meta http-equiv="refresh" content="0;url={{asset('/public/')}}setup/" /> -->
<main class="main-scrollbar">

	<!-- Templete -->
	<section class="container-fluid hero zi-1 py-0 loginPage">
		<div class="row align-itemscenter h-100 innerpage p-3">
			<div class="col-xl-4 col-lg-5 col-md-7 col-sm-10 col-11 mx-lg-0 mx-auto h-100 position-relative zi-10 ">
				<div class="h-100 d-flex align-items-center  justify-content-center">
					<div class="row w-100 my-lg-0 my-5 px-sm-4">
						<div class="col-12">
							<div class="brand-name mb-3">
								<a href="javascript:;" class="position-relative text-decoration-none">
									<img src="{{asset('/public/frontend_assets/img/header/logo.png')}}"  class="img-fluid h-lg-45px h-md-33px h-50px mr-2 header_logo1 d-lg-inline-flex" alt="logo">
								</a>
								<a href="javascript:;" class="position-relative text-decoration-none">
									<img src="{{asset('/public/frontend_assets/img/header/logo2.png')}}" class="img-fluid h-lg-22px h-md-23px h-20px" alt="logo">
								</a>
							</div>
							<div class="fs-xl-30 fs-lg-27 fs-md-23 fs-20 fw-bold">Welcome Back!</div>
							<div class="mb-5 fs-14">Please enter your details to sign in</div>
						</div>
						<div class="col-12 content pe-lg-5 login-form">
							<form action="{{route('website.loginphotographer')}}" class="row form gap-4">
								@csrf
								<div class="col-12">
									<div class="form-group position-relative">
										<i class="imgs img-user"></i>
										<input type="text" name="email" class="form-control shadow-none rounded fs-14 bg-light border h-md-50px h-44px" id="email" placeholder="Enter Your Email" style="padding-left:36px;" required>
									</div>
								</div>
								<div class="col-12">
									<div class="form-group position-relative">
										<i class="imgs img-lock-alt"></i>
										<input type="password" name="password" class="form-control shadow-none rounded fs-14 bg-light border h-md-50px h-44px" id="password" placeholder="Enter Your Password" style="padding-left:36px;" required>
									</div>
								</div>
								<div class="col-12 "><button type="submit" class="comman_button shadow text-black d-inline-flex  w-100 align-items-center justify-content-center mb-0"><span class="text-black">Login Here <img src="{{asset('/public')}}/frontend_assets/img/header/logo.png" class="img-fluid h-30px" alt="logo" style="display:inline;"></span></button></div>
								<div class="col-12 fs-16 fw-600 text-black text-center">
									Don't have an account ? <a href="{{route('website.register')}}" class="text-theme1 fw-bold">Sign Up</a>
								</div>
							</form>
							{{-- <a class="comman_button shadow text-black d-inline-flex align-items-center mb-0" href="{{asset('/')}}book-now"><span class="text-black">I Want a Photographer</span><img src="{{asset('/public')}}/frontend_assets/img/header/logo.png" class="img-fluid h-30px" alt="logo" style="display:inline;"></a> --}}
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-8 col-lg-7 d-lg-flex pe-0 d-none h-100 ps-0 align-items-center justify-content-center">
				<div class="sliderSection bg-dark w-100 h-100 overflow-hidden position-relative">
					<div class="owl-carousel slider text-white">
						<div class="item">
							<div class="photographerImg h-100"><img src="{{asset('/public/frontend_assets/img/loginPhoto2.jpg')}}" class="w-100 h-100" alt=""></div>
							<div class=" position-absolute itemContent d-flex flex-column align-items-center justify-content-center">
								<div class="text-white fs-xl-45 fs-40 fw-bold">Keep it special</div>
								<div class="text-white text-center fw-500 fs-xl-20 fs-18 lh-md">Capture your personal memories <br> in a unique way, anywhere.</div>
							</div>
						</div>
						<div class="item">
							<div class="photographerImg h-100"><img src="{{asset('/public/frontend_assets/img/loginPhoto4.jpg')}}" class="w-100 h-100" alt=""></div>
							<div class=" position-absolute itemContent d-flex flex-column align-items-center justify-content-center">
								<div class="text-white fs-xl-45 fs-40 fw-bold">Keep it special</div>
								<div class="text-white text-center fw-500 fs-xl-20 fs-18 lh-md">Capture your personal memories <br> in a unique way, anywhere.</div>
							</div>
						</div>
						<div class="item">
							<div class="photographerImg h-100"><img src="{{asset('/public/frontend_assets/img/loginPhoto1.jpg')}}" class="w-100 h-100" alt=""></div>
							<div class=" position-absolute itemContent d-flex flex-column align-items-center justify-content-center">
								<div class="text-white fs-xl-45 fs-40 fw-bold">Keep it special</div>
								<div class="text-white text-center fw-500 fs-xl-20 fs-18 lh-md">Capture your personal memories <br> in a unique way, anywhere.</div>
							</div>
						</div>
						<div class="item">
							<div class="photographerImg h-100"><img src="{{asset('/public/frontend_assets/img/loginPhoto3.jpg')}}" class="w-100 h-100" alt=""></div>
							<div class=" position-absolute itemContent d-flex flex-column align-items-center justify-content-center">
								<div class="text-white fs-xl-45 fs-40 fw-bold">Keep it special</div>
								<div class="text-white text-center fw-500 fs-xl-20 fs-18 lh-md">Capture your personal memories <br> in a unique way, anywhere.</div>
							</div>
						</div>
					</div>
					<div class="contents position-absolute bottom-20px start-20px zi-1">
						<div class="fw-500 fs-lg-16 fs-md-14 fs-12 text-white">Discovering the Best Photographer</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- hero section end -->

</main>



{{-- @include('frontend/layouts/footer') --}}
@include('frontend/layouts/footer-link')
<script>
	$(document).ready(function() {
		 setInterval(function(){ $('#onlineuser').html(Math.floor(Math.random() * 6) + 12); }, 3000);
	});
	</script>
	<script>
		$('.slider').owlCarousel({
		loop:true,
		margin:0,
		nav:true,
		dots:false,
		freeDrag: false,
		lazyLoad: true,
		// autoplay:true,
		autoplayTimeout:1500,
		autoplayHoverPause:true,
		smartSpeed: 1200,
		responsiveClass: true,
		responsive:{
			0:{
				items:1
			},
			600:{
				items:1
			},
			1000:{
				items:1
			}
		}
		
		// navText: ["<img src="{{asset('/public/frontend_assets/img/leftArrow.png')}}">", "<img src="{{asset('/public/frontend_assets/img/righArrow.png')}}">"]
	})
	</script>