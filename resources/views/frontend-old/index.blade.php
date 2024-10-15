@extends('frontend.layouts.app')
	@section('title')
	@endsection

	@section('mainsection')
<main class="main-scrollbar">

	<!-- Templete -->
	{{-- <section id="hero" class="container-fluid hero zi-1">
		<div class="row align-items-center">
			<div class="col-lg-7 slider" style="padding-left:0px;">
				<div id="carouselExampleCaptions" class="carousel carousel-fade slide home-slide position-relative" data-bs-ride="carousel">
					<div class="carousel-inner">
						<div class="carousel-item active" style="background-image:url(<?php echo asset('/timthumb.php')?>?src=<?php echo asset('/public/frontend_assets/img/flixaura_slide3.jpg') ?>&w=880&zc=3);">
							<div class="carousel-caption d-none d-md-block"></div>
						</div>
						<div class="carousel-item" style="background-image:url({{asset('/')}}timthumb.php?src={{asset('/public')}}/frontend_assets/img/flixaura_slide1.jpg&w=880&zc=1);">
							<div class="carousel-caption d-none d-md-block"></div>
						</div>
						<div class="carousel-item" style="background-image:url(<?php echo asset('/timthumb.php')?>?src=<?php echo asset('/public/frontend_assets/img/flixaura_slide2.JPG') ?>&w=880&zc=3);">
							<div class="carousel-caption d-none d-md-block"></div>
						</div>
					</div> 
					<a class="carousel-control-prev text-decoration-none" href="#carouselExampleCaptions" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev"> <i class="imgs img-chevron-left fa-3x"></i>
					</a>
				</div>
			</div>
			<div class="col-lg-5 h-100 position-relative zi-10 d-flex align-items-center justify-content-lg-start justify-content-md-center justify-content-center">
				<div class="row w-100">
					<div class="col-12">
						<div class="content pe-lg-5">
							<h1 class="fs-xl-46 fs-lg-32 fs-md-26 fs-22 fw-bold">We deliver all kinds of <br>Professional Videos <br>& Photo solutions.</h1>
							<p class="fs-lg-17 fs-md-15 fs-14">Corporate Videos, Video Profiles of the Company, <br>Baby shoots, Product shoots, music, and short films, etc.
							 <!--   Flixaura Provides you a suitable photographer-->
								<!--<br>wherever and Whenever you want at affordable-->
								<!--<br>Prices.-->
							</p>
							<a class="comman_button shadow text-black d-inline-flex align-items-center mb-0" href="{{asset('/')}}book-now"><span class="text-black">Book Now</span><img src="{{asset('/public')}}/frontend_assets/img/header/logo.png" class="img-fluid h-30px" alt="logo" style="display:inline;"></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> --}}
	<!-- hero section end -->

	{{-- hero section --}}
	<section class="container-fluid vh-100 newHeroSection indexHeroSection">
		<div class="container h-100 d-flex align-items-center justify-content-center position-relative">
			<div class="row align-items-center textWrapper">
				<div class="col-auto introText indexontrotext fs-18 fs-sm-20 fs-lg-22 text-white">HI I'M</div>
				<div class="col coloredLine"><span class="d-block h-3px w-97"></span></div>
				<div class="col-12 fw-bold flixText"><span>FLIX</span>AURA</div>
				<div class="col-12 fs-16 fs-sm-18 fs-lg-20 text-end descText">THE PHOTOGRAPHER'S <br class="d-block"> CREW</div>
			</div>
			<div class="socialIcons position-absolute start-0 bottom-10px d-lg-flex d-none align-items-center justify-content-center active mt-4">
				<ul class="m-0 p-0 d-flex flex-column">
					<li><a href="https://www.facebook.com/flixauraindia" target="_blank" class="hovers-facebook"><i class="imgb img-facebook"></i></a>
					</li>
					<li><a href="https://www.youtube.com/c/Flixaura" target="_blank" class="hovers-youtube"><i class="imgb img-youtube"></i></a>
					</li>
					<li><a href="https://mobile.twitter.com/flixaura/with_replies" target="_blank" class="hovers-twitter"><i class="imgb img-twitter"></i></a>
					</li>
					<li><a href="https://www.instagram.com/flixaura/?hl=en" target="_blank" class="hovers-instagram"><i class="imgb img-instagram"></i></a>
					</li>
				</ul>
			</div>
			<div class="numberText d-none d-lg-block position-absolute bottom-20px start-50 fw-bold fs-24">
				01
			</div>
			<div class="scrollText position-absolute bottom-20px fs-14 fs-lg-16">
				scroll
				<span class="d-none d-lg-inline-block bottomLine mt-1"></span>
				<img class="d-lg-none h-25px mt-1" src="{{asset('/public')}}/frontend_assets/img/scroll-down.gif" alt="scroll down image">
			</div>
		</div>
	</section>

	<!-- afford section start-->
	<section id="afford" class="afford shadow py-lg-4 py-md-3 py-3">
		<div class="container py-2">
			<div class="afford_content align-items-center text-md-start text-center">
				<div class="row">
					<div class="col-lg col">
						<div class="row">
							<div class="col-12">
								<h1 class="fs-lg-36 fs-md-22 fs-20 text-white">Affordable<img src="{{asset('/public')}}/frontend_assets/img/logo4.png" class="img-fluid h-lg-50px h-md-40px h-sm-40px h-30px mr-2" alt="logo" style="margin-left:8px;"></h1>
							</div>
							<p class="col-12 fs-lg-17 fs-md-14 fs-14 text-white mb-md-0">Now Book A Professional Photographer Easily Under Your Budget</p>
						</div>
					</div>
					<div class="col-lg-auto col-md-auto">
						<div class="row">
							<div class="col-12 button">
								<a class="comman_button shadow text-black d-inline-flex align-items-center" href="{{asset('/')}}book-now"><span class="text-black">Book a Photographer Now</span><img src="{{asset('/public')}}/frontend_assets/img/header/logo.png" class="img-fluid h-30px" alt="logo" style="display:inline;"></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- talent section start-->
	<section class="talent py-md-5 py-4 position-relative whyBest_section">
		<div class="container pb-4 innerSection">
			<div class="section-title">
				<h4 class="fs-lg-30 fs-20">Why Flixaura is Best</h4>
				<img src="{{asset('/public')}}/frontend_assets/img/unnamed.png" class="img-fluid h-5px" alt="Our Expertise">
				<h2 class="fs-lg-28 fs-md-20 fs-17 text-capitalize">Playing with Light and Shadows</h2>
			</div>
			<div class="row g-3 mx-0">
				<div class="col-lg-4 col-sm-6 col-12">
					<div class="card h-100 border-0">
						<div class="card-body">
							<div class="studioImg w-md-80px w-sm-70px w-60px h-md-80px h-sm-70px h-60px mx-auto mb-md-3 mb-2 p-3">
								<img src="{{asset('/public')}}/frontend_assets/img/homestudio.png" alt="" class="w-100 h-100">
							</div>
							<div class="cardTitle fw-600 text-dark fs-lg-16 fs-15 text-center mb-md-3 mb-2">Flixaura Studio</div>
							<div class="fs-lg-14 fs-12 text-muted fw-normal text-center">Fully hygienic and baby comfort multiple options for background studio setup where you can’t choose easily from the list.</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6 col-12">
					<div class="card h-100 border-0">
						<div class="card-body">
							<div class="studioImg w-md-80px w-sm-70px w-60px h-md-80px h-sm-70px h-60px mx-auto mb-md-3 mb-2 p-3">
								<img src="{{asset('/public')}}/frontend_assets/img/uniquevision.png" alt="" class="w-100 h-100">
							</div>
							<div class="cardTitle fw-600 text-dark fs-lg-16 fs-15 text-center mb-md-3 mb-2">Unique Photographic Eyes</div>
							<div class="fs-lg-14 fs-12 text-muted fw-normal text-center">Best photographers with unbelievable framing skills. They can find the loveliest view in any frame.</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6 col-12">
					<div class="card h-100 border-0">
						<div class="card-body">
							<div class="studioImg w-md-80px w-sm-70px w-60px h-md-80px h-sm-70px h-60px mx-auto mb-md-3 mb-2 p-3">
								<img src="{{asset('/public')}}/frontend_assets/img/ExperiencedPhotographer.png" alt="" class="w-100 h-100">
							</div>
							<div class="cardTitle fw-600 text-dark fs-lg-16 fs-15 text-center mb-md-3 mb-2">Experienced Photographer (professional skills)</div>
							<div class="fs-lg-14 fs-12 text-muted fw-normal text-center">A team of more than 5+ with experience in photography. Lesser retakes for the best photo and frames.</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6 col-12">
					<div class="card h-100 border-0">
						<div class="card-body">
							<div class="studioImg w-md-80px w-sm-70px w-60px h-md-80px h-sm-70px h-60px mx-auto mb-md-3 mb-2 p-3">
								<img src="{{asset('/public')}}/frontend_assets/img/awardwinningphotographer.png" alt="" class="w-100 h-100">
							</div>
							<div class="cardTitle fw-600 text-dark fs-lg-16 fs-15 text-center mb-md-3 mb-2">Top Rated Photographer</div>
							<div class="fs-lg-14 fs-12 text-muted fw-normal text-center">Top-rated photographer with awards-winning performance in a different photo/video graph category.</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6 col-12">
					<div class="card h-100 border-0">
						<div class="card-body">
							<div class="studioImg w-md-80px w-sm-70px w-60px h-md-80px h-sm-70px h-60px mx-auto mb-md-3 mb-2 p-3">
								<img src="{{asset('/public')}}/frontend_assets/img/focusedknowledge.png" alt="" class="w-100 h-100">
							</div>
							<div class="cardTitle fw-600 text-dark fs-lg-16 fs-15 text-center mb-md-3 mb-2">Focused Mindset</div>
							<div class="fs-lg-14 fs-12 text-muted fw-normal text-center">Without a focused mindset, it’s next to impossible to click amazing photos and yes we have the most focused photographer in the team.</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-sm-6 col-12">
					<div class="card h-100 border-0">
						<div class="card-body">
							<div class="studioImg w-md-80px w-sm-70px w-60px h-md-80px h-sm-70px h-60px mx-auto mb-md-3 mb-2 p-3">
								<img src="{{asset('/public')}}/frontend_assets/img/perfectequipments.png" alt="" class="w-100 h-100">
							</div>
							<div class="cardTitle fw-600 text-dark fs-lg-16 fs-15 text-center mb-md-3 mb-2">Perfect Gadget And Props</div>
							<div class="fs-lg-14 fs-12 text-muted fw-normal text-center">Flixaura has the best suitable gadgets and props for the perfect shoot for photographs and videos.</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- delivery section start-->
	{{-- <div class="container-fluid delivery shadow py-lg-4 py-md-3 py-3">
		<div class="container py-2">
			<div class="delivery_content text-md-start text-center">
				<div class="row">
					<div class="col-lg col">
						<div class="row">
							<div class="col-12">
								<h1 class="fs-lg-36 fs-md-22 fs-20 text-white">Brands we are working with<img src="{{asset('/public')}}/frontend_assets/img/brandIcon.png" class="img-fluid h-lg-50px h-md-40px h-sm-40px h-30px mr-2" alt="Quick Delivery" style="margin-left:5px;"></h1>
							</div>
							<p class="col-12 fs-lg-17 fs-md-14 fs-14 text-white mb-md-0">Be our next Brand</p>
						</div>
					</div>
					<div class="col-lg-auto col-md-auto">
						<div class="row">
							<div class="col-12 button mt-0">
								<a class="comman_button shadow text-black d-inline-flex align-items-center" href="{{asset('/')}}book-now"><span class="text-black">Book An Appointment</span><img src="{{asset('/public')}}/frontend_assets/img/header/logo.png" class="img-fluid h-30px" alt="Book a Photographer Now" style="display:inline;"></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> --}}
	@if(!empty($clientslider->toArray()))
	<section id="category" class="category shadow  mb-0 bg-dark py-lg5 pt-md-4 pb-md-5 pt-4 pb-4 position-relative zi-3">
        <div class="container">
            <div class="row mt-lg5 mt-md-4 mt-4 mx-0">
                <div class="col-12">
                    <div class="category_sldier owl-carousel">
						@foreach($clientslider as $cslider)
                        <div class="item"><div class="sliderImg h-75px w-130px"><img src="{{ asset('/public') }}/{{ $cslider->image }}" alt="" class="w-100 h-100"></div></div>
						@endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
	@endif
    <!-- testimonials section -->
	<div class="container-fluid overflow-hidden bg-white py-5 pb-4 pb-sm-5 px-0">
		<div class="row mx-0 owl-carousel newTestimonialSlider">
			<div class="col-12">
				<div class="position-relative newTestSlide">
					<img src="{{asset('/public')}}/frontend_assets/img/new-testimonials/dynamo.png" alt="testimonial image">
					<div class="position-absolute shadow textBox" style="background-color: rgb(255 255 255 / 95%); width: 500px">
						<div class="row mx-0 p-5 h-100 flex-column gx-0">
							<div class="col-12 flex-fill">
								<div class="fs-12 fs-sm-14">" Lamborghini "</div>
								<div class="fs-22 fs-sm-30">-Dynamo- With Lamborghini For Promotional Activity. </div>
							</div>
							<div class="col-12 mt-2 mt-sm-0">
								<a href="{{asset('book-now')}}" class="fs-12 fs-sm-14 text-muted text-decoration-none">Check Out Video</a>
							</div>
						</div>
					</div>
				</div>
			</div>
				<div class="col-12">
				<div class="position-relative newTestSlide">
					<img src="{{asset('/public')}}/frontend_assets/img/new-testimonials/unacademyt.png" alt="testimonial image">
					<div class="position-absolute shadow textBox" style="background-color: rgb(255 255 255 / 95%); width: 500px">
						<div class="row mx-0 p-5 h-100 flex-column gx-0">
							<div class="col-12 flex-fill">
								<div class="fs-12 fs-sm-14">" Unacademy "</div>
								<div class="fs-22 fs-sm-30">-EdTech- Corporate Videos For Educational Activities.</div>
							</div>
							<div class="col-12 mt-2 mt-sm-0">
								<a href="https://www.flixaura.com/portfolio/Educational" class="fs-12 fs-sm-14 text-muted text-decoration-none">Check Out Video</a>
							</div> 
						</div>
					</div>
				</div>
			</div>
				<div class="col-12">
				<div class="position-relative newTestSlide">
					<img src="{{asset('/public')}}/frontend_assets/img/new-testimonials/bolero.png" alt="testimonial image">
					<div class="position-absolute shadow textBox" style="background-color: rgb(255 255 255 / 95%); width: 500px">
						<div class="row mx-0 p-5 h-100 flex-column gx-0">
							<div class="col-12 flex-fill">
								<div class="fs-12 fs-sm-14">" Mahindra Bolero Neo "</div>
								<div class="fs-22 fs-sm-30">- Gurmeet - Back To The Roots With Mahindra Bolero Neo.</div>
							</div>
							<div class="col-12 mt-2 mt-sm-0">
							<!--	<a href="{{asset('book-now')}}" class="fs-12 fs-sm-14 text-muted text-decoration-none">Book Now</a> -->
								<a href="https://www.youtube.com/watch?v=PsF2f8I-XHY" target="_blank"class="fs-12 fs-sm-14 text-muted text-decoration-none">Check Out Video</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12">
				<div class="position-relative newTestSlide">
					<img src="{{asset('/public')}}/frontend_assets/img/new-testimonials/img.png" alt="testimonial image">
					<div class="position-absolute shadow textBox" style="background-color: rgb(255 255 255 / 95%); width: 500px">
						<div class="row mx-0 p-5 h-100 flex-column gx-0">
							<div class="col-12 flex-fill">
								<div class="fs-12 fs-sm-14">" IMG Global Infotech Pvt. Ltd "</div>
								<div class="fs-22 fs-sm-30">-IT Company- Corporate Ad For Promotional Activity.</div>
							</div>
							<div class="col-12 mt-2 mt-sm-0">
								<a href="https://www.youtube.com/watch?v=mACVR-wHhGI" target="_blank" class="fs-12 fs-sm-14 text-muted text-decoration-none">Check Out Video</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		
		</div>
	</div>
	{{-- <div class="container-fluid overflow-hidden bg-white testimonials pb-5 position-relative" style="--bg:white;">
		<div class="container py-md-5 pt-5 pb-0 position-relative zi-1">
			<div class="section-title text-center pb-3">
				<h4 class="fs-lg-30 fs-20">What <b>They</b> Say</h4>
				<img src="{{asset('/public')}}/frontend_assets/img/unnamed.png" class="img-fluid h-5px" alt="What They Say">
			</div>
			<div class="row pb-md-4">
				<div class="col-12">
					<div class="row pb-4 align-items-center">
						<div class="col-12">
							<div class="row justify-content-center">
								<div class="col-md-7 col-12">
									<div class="row">
										<div class="col-12 owl-testimonials-carousel owl-carousel">
											<div class="row">
												<div class="col-12 text-center">
													<img data-src="{{asset('/public')}}/frontend_assets/img/quote.png" data-srcset="{{asset('/public')}}/frontend_assets/img/quote.png" src="{{asset('/public')}}/frontend_assets/img/quote.png" class="lazy h-md-40px h-sm-35px h-30px" alt="Kuntal Kawach quote">
												</div>
												<div class="col-12 fs-lg-18 fs-md-17 fs-sm-15 fs-14 fw-600 text-center text-muted mt-3">"When it Comes To professionalism FlixAura Performs best. The working Procedure is very Good. The time they take Is very Less and The Work They Do is SO Fine. Happy to get the work done by FlixAura : )"</div>
												<div class="col-12">
													<div class="row justify-content-center">
														<div class="col-auto">
															<div class="row pt-4 align-items-center">
																<div class="col-auto pe-0">
																	<!-- <img data-src="{{asset('/public')}}/frontend_assets/img/champs11.png" data-srcset="{{asset('/public')}}/frontend_assets/img/champs11.png" src="{{asset('/public')}}/frontend_assets/img/lazy/champs11.png" class="lazy h-md-80px h-65px" alt="Kuntal Kawach"> -->
																</div>
																<div class="col-auto fw-900 text-primary2 text-center fs-md-18 fs-sm-17 fs-16 d-grid">Kuntal Kawach
																	<span class="fw-600 fs-md-13 fs-sm-12 fs-11 text-center text-muted">Product PhotoShoot</span>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-12 text-center">
													<img data-src="{{asset('/public')}}/frontend_assets/img/quote.png" data-srcset="{{asset('/public')}}/frontend_assets/img/quote.png" src="{{asset('/public')}}/frontend_assets/img/quote.png" class="lazy h-md-40px h-sm-35px h-30px" alt="Hotel Suncity quote">
												</div>
												<div class="col-12 fs-lg-18 fs-md-17 fs-sm-15 fs-14 fw-600 text-center text-muted mt-3">"ohh men these guys are too good at work Believe me you just give them a chance and you will never get disappointed by them."</div>
												<div class="col-12">
													<div class="row justify-content-center">
														<div class="col-auto">
															<div class="row pt-4 align-items-center">
																<div class="col-auto pe-0">
																	<img data-src="{{asset('/public')}}/frontend_assets/img/sethi-hospital.png" data-srcset="{{asset('/public')}}/frontend_assets/img/sethi-hospital.png" src="{{asset('/public')}}/frontend_assets/img/sethi-hospital.png" class="lazy h-md-80px h-65px" alt="Hotel Suncity">
																</div>
																<div class="col-auto fw-900 text-primary2 text-center fs-md-18 fs-sm-17 fs-16 d-grid">Hotel Suncity
																	<span class="fw-600 fs-md-13 fs-sm-12 fs-11 text-center text-muted">Hotel Commercial Video</span>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-12 text-center">
													<img data-src="{{asset('/public')}}/frontend_assets/img/quote.png" data-srcset="{{asset('/public')}}/frontend_assets/img/quote.png" src="{{asset('/public')}}/frontend_assets/img/quote.png" class="lazy h-md-40px h-sm-35px h-30px" alt="Tija Ice Cream quote">
												</div>
												<div class="col-12 fs-lg-18 fs-md-17 fs-sm-15 fs-14 fw-600 text-center text-muted mt-3">"FlixAura is just amazing. I just love the way this site works. I got My work Done Under Just 36 Hours. My Best Wishes For Team."</div>
												<div class="col-12">
													<div class="row justify-content-center">
														<div class="col-auto">
															<div class="row pt-4 align-items-center">
																<div class="col-auto pe-0">
																	<img data-src="{{asset('/public')}}/frontend_assets/img/samarpan-arts-and-handicrafts.png" data-srcset="{{asset('/public')}}/frontend_assets/img/samarpan-arts-and-handicrafts.png" src="{{asset('/public')}}/frontend_assets/img/samarpan-arts-and-handicrafts.png" class="lazy h-md-80px h-65px" alt="Samarpan Arts & Handicrafts">
																</div>
																<div class="col-auto fw-900 text-primary2 text-center fs-md-18 fs-sm-17 fs-16 d-grid">Tija Ice Cream
																	<span class="fw-600 fs-md-13 fs-sm-12 fs-11 text-center text-muted">Company Profile Video</span>
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
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container d-md-none d-block">
			<div class="row">
				<div class="col-12">
					<div class="row">
						<div class="col-12 text-center">
							<img src="{{asset('/public')}}/frontend_assets/img/testimonial-phone.png" class="w-100" alt="testimonial-phone">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> --}}
	<!--<div class="container-fluid overflow-hidden bg-white testimonials pb-5 position-relative" style="--bg:white;">-->
	<!--	<div class="container py-md-5 pt-5 pb-0 position-relative zi-1">-->
	<!--		<div class="section-title text-center pb-3">-->
	<!--			<h4 class="fs-lg-30 fs-20">What <b>They</b> Say</h4>-->
	<!--			<img src="{{asset('/public')}}/frontend_assets/img/unnamed.png" class="img-fluid h-5px" alt="What They Say">-->
	<!--		</div>-->
	<!--		<div class="row pb-md-4">-->
	<!--			<div class="col-12">-->
	<!--				<div class="row pb-4 align-items-center">-->
	<!--					<div class="col-12">-->
	<!--						<div class="row justify-content-center">-->
	<!--							<div class="col-md-7 col-12">-->
	<!--								<div class="row">-->
	<!--									<div class="col-12 owl-testimonials-carousel owl-carousel">-->
	<!--										<div class="row">-->
	<!--											<div class="col-12 text-center">-->
	<!--												<img data-src="{{asset('/public')}}/frontend_assets/img/quote.png" data-srcset="{{asset('/public')}}/frontend_assets/img/quote.png" src="{{asset('/public')}}/frontend_assets/img/quote.png" class="lazy h-md-40px h-sm-35px h-30px" alt="Kuntal Kawach quote">-->
	<!--											</div>-->
	<!--											<div class="col-12 fs-lg-18 fs-md-17 fs-sm-15 fs-14 fw-600 text-center text-muted mt-3">"When it Comes To professionalism FlixAura Performs best. The working Procedure is very Good. The time they take Is very Less and The Work They Do is SO Fine. Happy to get the work done by FlixAura : )"</div>-->
	<!--											<div class="col-12">-->
	<!--												<div class="row justify-content-center">-->
	<!--													<div class="col-auto">-->
	<!--														<div class="row pt-4 align-items-center">-->
	<!--															<div class="col-auto pe-0">-->
	<!--																{{-- <!-- <img data-src="{{asset('/public')}}/frontend_assets/img/champs11.png" data-srcset="{{asset('/public')}}/frontend_assets/img/champs11.png" src="{{asset('/public')}}/frontend_assets/img/lazy/champs11.png" class="lazy h-md-80px h-65px" alt="Kuntal Kawach"> --> --}}-->
	<!--															</div>-->
	<!--															<div class="col-auto fw-900 text-primary2 text-center fs-md-18 fs-sm-17 fs-16 d-grid">Kuntal Kawach-->
	<!--																<span class="fw-600 fs-md-13 fs-sm-12 fs-11 text-center text-muted">Product PhotoShoot</span>-->
	<!--															</div>-->
	<!--														</div>-->
	<!--													</div>-->
	<!--												</div>-->
	<!--											</div>-->
	<!--										</div>-->
	<!--										<div class="row">-->
	<!--											<div class="col-12 text-center">-->
	<!--												<img data-src="{{asset('/public')}}/frontend_assets/img/quote.png" data-srcset="{{asset('/public')}}/frontend_assets/img/quote.png" src="{{asset('/public')}}/frontend_assets/img/quote.png" class="lazy h-md-40px h-sm-35px h-30px" alt="Hotel Suncity quote">-->
	<!--											</div>-->
	<!--											<div class="col-12 fs-lg-18 fs-md-17 fs-sm-15 fs-14 fw-600 text-center text-muted mt-3">"ohh men these guys are too good at work Believe me you just give them a chance and you will never get disappointed by them."</div>-->
	<!--											<div class="col-12">-->
	<!--												<div class="row justify-content-center">-->
	<!--													<div class="col-auto">-->
	<!--														<div class="row pt-4 align-items-center">-->
	<!--															<div class="col-auto pe-0">-->
	<!--																{{-- <img data-src="{{asset('/public')}}/frontend_assets/img/sethi-hospital.png" data-srcset="{{asset('/public')}}/frontend_assets/img/sethi-hospital.png" src="{{asset('/public')}}/frontend_assets/img/sethi-hospital.png" class="lazy h-md-80px h-65px" alt="Hotel Suncity"> --}}-->
	<!--															</div>-->
	<!--															<div class="col-auto fw-900 text-primary2 text-center fs-md-18 fs-sm-17 fs-16 d-grid">Hotel Suncity-->
	<!--																<span class="fw-600 fs-md-13 fs-sm-12 fs-11 text-center text-muted">Hotel Commercial Video</span>-->
	<!--															</div>-->
	<!--														</div>-->
	<!--													</div>-->
	<!--												</div>-->
	<!--											</div>-->
	<!--										</div>-->
	<!--										<div class="row">-->
	<!--											<div class="col-12 text-center">-->
	<!--												<img data-src="{{asset('/public')}}/frontend_assets/img/quote.png" data-srcset="{{asset('/public')}}/frontend_assets/img/quote.png" src="{{asset('/public')}}/frontend_assets/img/quote.png" class="lazy h-md-40px h-sm-35px h-30px" alt="Tija Ice Cream quote">-->
	<!--											</div>-->
	<!--											<div class="col-12 fs-lg-18 fs-md-17 fs-sm-15 fs-14 fw-600 text-center text-muted mt-3">"FlixAura is just amazing. I just love the way this site works. I got My work Done Under Just 36 Hours. My Best Wishes For Team."</div>-->
	<!--											<div class="col-12">-->
	<!--												<div class="row justify-content-center">-->
	<!--													<div class="col-auto">-->
	<!--														<div class="row pt-4 align-items-center">-->
	<!--															<div class="col-auto pe-0">-->
	<!--																{{-- <img data-src="{{asset('/public')}}/frontend_assets/img/samarpan-arts-and-handicrafts.png" data-srcset="{{asset('/public')}}/frontend_assets/img/samarpan-arts-and-handicrafts.png" src="{{asset('/public')}}/frontend_assets/img/samarpan-arts-and-handicrafts.png" class="lazy h-md-80px h-65px" alt="Samarpan Arts & Handicrafts"> --}}-->
	<!--															</div>-->
	<!--															<div class="col-auto fw-900 text-primary2 text-center fs-md-18 fs-sm-17 fs-16 d-grid">Tija Ice Cream-->
	<!--																<span class="fw-600 fs-md-13 fs-sm-12 fs-11 text-center text-muted">Company Profile Video</span>-->
	<!--															</div>-->
	<!--														</div>-->
	<!--													</div>-->
	<!--												</div>-->
	<!--											</div>-->
	<!--										</div>-->
	<!--									</div>-->
	<!--								</div>-->
	<!--							</div>-->
	<!--						</div>-->
	<!--					</div>-->
	<!--				</div>-->
	<!--			</div>-->
	<!--		</div>-->
	<!--	</div>-->
	<!--	<div class="container d-md-none d-block">-->
	<!--		<div class="row">-->
	<!--			<div class="col-12">-->
	<!--				<div class="row">-->
	<!--					<div class="col-12 text-center">-->
	<!--						<img src="{{asset('/public')}}/frontend_assets/img/testimonial-phone.png" class="w-100" alt="testimonial-phone">-->
	<!--					</div>-->
	<!--				</div>-->
	<!--			</div>-->
	<!--		</div>-->
	<!--	</div>-->
	<!--</div>-->
	<!-- booking section start-->
	{{-- <div class="container-fluid booking shadow py-lg-4 py-md-3 py-3">
		<div class="container py-2">
			<div class="booking_content text-md-start text-center">
				<div class="row align-items-center">
					<div class="col-lg col">
						<div class="row">
							<div class="col-12">
								<h1 class="fs-lg-36 fs-md-22 fs-20 text-white text-white">Last Minute Booking<img src="{{asset('/public')}}/frontend_assets/img/logo5.png" class="img-fluid h-lg-50px h-md-40px h-sm-40px h-30px mr-2" alt="Last Minute Booking" style="margin-left:8px;"></h1>
							</div>
							<p class="col-12 fs-lg-17 fs-md-14 fs-14 text-white mb-md-0">Book us with few hours notice and We will be threat at time</p>
						</div>
					</div>
					<div class="col-lg-auto col-md-auto">
						<div class="row">
							<div class="col-12 button mt-0">
								<a class="comman_button shadow text-black d-inline-flex align-items-center" href="{{asset('/')}}book-now"><span class="text-black">Book a Photographer Now</span><img src="{{asset('/public')}}/frontend_assets/img/header/logo.png" class="img-fluid h-30px" alt="Book a Photographer Now" style="display:inline;"></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> --}}

	<!-- talent section start-->
	<section id="talent" class="talent py-md-5 py-4 position-relative talentDark">
		<div class="container pb-xl-4">
			<div class="section-title">
				<h4 class="fs-lg-30 fs-20">Our Expertise</h4>
				<img src="{{asset('/public')}}/frontend_assets/img/unnamed.png" class="img-fluid h-5px" alt="Our Expertise">
				<h2 class="fs-lg-28 fs-md-20 fs-17 text-capitalize">We are Top Skilled at Everything</h2>
			</div>
			<div class="row gy-md-5 gy-4 mx-0">
				@foreach($expertise as $value)
				<?php $link = str_replace(' ', '-', $value[0]->name); ?>
				<div class="col-lg-4 col-md-6">
					<div class="expertise_outer position-relative">
						<a href="<?php echo asset('/portfolio').'/'.$link ?>" class="image d-block position-relative shadow">
							<div class="row mx-0">
								<div class="col-7 border-end border-white px-0">
									<div class="image2 position-relative steping-1">
										<img class="img-fluid w-100 lazy" src="{{asset('/')}}timthumb.php?src={{asset('/public')}}/{{$value[0]->image}}&w=30&h=29&zc=1" srcset="{{asset('/')}}timthumb.php?src={{asset('/public')}}/{{$value[0]->image}}&w=30&h=29&zc=1" data-src="{{asset('/')}}timthumb.php?src={{asset('/public')}}/{{$value[0]->image}}&w=240&h=230&zc=1" data-srcset="{{asset('/')}}timthumb.php?src={{asset('/public')}}/{{$value[0]->image}}&w=240&h=230&zc=1" alt="{{$value[0]->name}} 1">
										<div class="lazy-wave"></div>
									</div>
								</div>
								<div class="col-5 px-0">
									<div class="row mx-0 h-100">
										<div class="col-12 position-relative px-0 border-bottom border-white steping-2">
											<img class="img-fluid w-100 lazy" src="{{asset('/')}}timthumb.php?src={{asset('/public')}}/{{$value[1]->image}}&w=30&h=20&zc=1" srcset="{{asset('/')}}timthumb.php?src={{asset('/public')}}/{{$value[1]->image}}&w=30&h=20&zc=1" data-src="{{asset('/')}}timthumb.php?src={{asset('/public')}}/{{$value[0]->image}}&w=170&h=115&zc=1" data-srcset="{{asset('/')}}timthumb.php?src={{asset('/public')}}/{{$value[1]->image}}&w=170&h=115&zc=1" alt="{{$value[0]->name}} 2" style="object-fit:cover;">
											<div class="lazy-wave"></div>
										</div>
										<div class="col-12 position-relative px-0 steping-3">
											<img class="img-fluid w-100 lazy" src="{{asset('/')}}timthumb.php?src={{asset('/public')}}/{{$value[2]->image}}&w=30&h=20&zc=1" srcset="{{asset('/')}}timthumb.php?src={{asset('/public')}}/{{$value[2]->image}}&w=30&h=20&zc=1" data-src="{{asset('/')}}timthumb.php?src={{asset('/public')}}/{{$value[0]->image}}&w=170&h=115&zc=1" data-srcset="{{asset('/')}}timthumb.php?src={{asset('/public')}}/{{$value[2]->image}}&w=170&h=115&zc=1" alt="{{$value[0]->name}} 3" style="object-fit:cover;">
											<div class="lazy-wave"></div>
										</div>
									</div>
								</div>
							</div>
							<h4 class="fs-md-17 fs-15 text-white position-absolute zi-3 bottom-15px start-20px mb-0">{{$value[0]->name}}</h4>
						</a>
						<a class="text-decoration-none text-black d-inline-flex align-items-center position-absolute zi-3 bottom-10px end-15px small-button" href="{{ asset('/') }}book-now?category={{ $value[0]->name }}">Book Now</a>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</section>

	<!-- how it work section start-->
	<section id="howitworks" class="howitworks py-md-5 py-4">
		<span id="howitwork" class="position-absolute top-n100px"></span>
		<div class="container">
			<div class="section-title">
				<h4 class="fs-lg-30 fs-20">How It Works</h4>
				<img src="{{asset('/public')}}/frontend_assets/img/unnamed.png" class="img-fluid h-5px" alt="How It Works">
				<h2 class="fs-lg-28 fs-md-20 fs-17 text-capitalize">Book a Suitable Photographer in seconds</b></h2>
			</div>
			<div class="row mx-0">
				<div class="col-md-4">
					<div class="howitwork_1 mb-md-3 mb-5">
						<div class="image position-relative">
							<img class="img-fluid w-100 lazy" src="{{asset('/')}}timthumb.php?src={{asset('/public')}}/frontend_assets/img/image1.jpg&w=10&h=6&zc=1" srcset="{{asset('/')}}timthumb.php?src={{asset('/public')}}/frontend_assets/img/image1.jpg&w=10&h=6&zc=1" data-src="{{asset('/')}}timthumb.php?src={{asset('/public')}}/frontend_assets/img/image1.jpg&w=400&h=250&zc=1" data-srcset="{{asset('/')}}timthumb.php?src={{asset('/public')}}/frontend_assets/img/image1.jpg&w=400&h=250&zc=1" alt="Choose the Best Suitable">
							<div class="lazy-wave"></div>
						</div>
						<div class="step-count d-lg-block d-none">1</div>
						<div class="content">
							<h4 class="fs-lg-30 fs-md-16 fs-17"> Choose the Best<br> Suitable</h4>
						</div>
						<p class="text fs-lg-15 fs-14 text-muted mt-lg-4 mt-0">Browse from a vast category of
							<br>photographers and choose the best suitable
							<br>according to your requirement
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="howitwork_1 mb-md-3 mb-5">
						<div class="image position-relative">
							<img class="img-fluid w-100 lazy" src="{{asset('/')}}timthumb.php?src={{asset('/public')}}/frontend_assets/img/image2.jpg&w=10&h=6&zc=1" srcset="{{asset('/')}}timthumb.php?src={{asset('/public')}}/frontend_assets/img/image2.jpg&w=10&h=6&zc=1" data-src="{{asset('/')}}timthumb.php?src={{asset('/public')}}/frontend_assets/img/image2.jpg&w=400&h=250&zc=1" data-srcset="{{asset('/')}}timthumb.php?src={{asset('/public')}}/frontend_assets/img/image2.jpg&w=400&h=250&zc=1" alt="Get The Shoot Done">
							<div class="lazy-wave"></div>
						</div>
						<div class="step-count d-lg-block d-none">2</div>
						<div class="content">
							<h4 class="fs-lg-30 fs-md-16 fs-17"> Get The Shoot <br> Done</h4>
						</div>
						<p class="text fs-lg-15 fs-14 text-muted mt-lg-3 mt-0">Be Ready The Flixaura Photographer will
							<br>there on Time With his Top Class
							<br>Equipment And Afterwards The creativity
							<br>will take care of you
						</p>
					</div>
				</div>
				<div class="col-md-4 mb-3">
					<div class="howitwork_1">
						<div class="image position-relative">
							<img class="img-fluid w-100 lazy" src="{{asset('/')}}timthumb.php?src={{asset('/public')}}/frontend_assets/img/image3.jpg&w=10&h=6&zc=1" srcset="{{asset('/')}}timthumb.php?src={{asset('/public')}}/frontend_assets/img/image3.jpg&w=10&h=6&zc=1" data-src="{{asset('/')}}timthumb.php?src={{asset('/public')}}/frontend_assets/img/image3.jpg&w=400&h=250&zc=1" data-srcset="{{asset('/')}}timthumb.php?src={{asset('/public')}}/frontend_assets/img/image3.jpg&w=400&h=250&zc=1" alt="Take The Delivery">
							<div class="lazy-wave"></div>
						</div>
						<div class="step-count d-lg-block d-none">3</div>
						<div class="content">
							<h4 class="fs-lg-30 fs-md-16 fs-17"> Take The Delivery</h4>
						</div>
						<p class="text fs-lg-15 fs-14 text-muted mt-lg-3 mt-0">All Of the Photos and videos Will be
							<br>uploaded On our Highly Secure Cloud
							<br>And the Link Will be Shared With You Just
							<br>Download them And Shere With Your
							<br>beloved Friends And Family
						</p>
					</div>

				</div>
			</div>
		</div>
	</section>

	<!-- booking section start-->
	{{-- <div class="container-fluid booking shadow py-lg-4 py-md-3 py-3">
		<div class="container py-2">
			<div class="booking_content text-md-start text-center">
				<div class="row align-items-center">
					<div class="col-lg col">
						<div class="row">
							<div class="col-12">
								<h1 class="fs-lg-36 fs-md-22 fs-20 text-white text-white">Quality Work<img src="{{asset('/public')}}/frontend_assets/img/logo6.png" class="img-fluid h-lg-50px h-md-40px h-sm-40px h-30px mr-2" alt="Quality Work" style="margin-left:8px;"></h1>
							</div>
							<p class="col-12 fs-lg-17 fs-md-14 fs-14 text-white mb-md-0">Flixaura Works With Top Talents to deliver desired Photographs & Videos</p>
						</div>
					</div>
					<div class="col-lg-auto col-md-auto">
						<div class="row">
							<div class="col-12 button mt-0">
								<a class="comman_button shadow text-black d-inline-flex align-items-center" href="{{asset('/')}}book-now"><span class="text-black">Book a Photographer Now</span><img src="{{asset('/public')}}/frontend_assets/img/header/logo.png" class="img-fluid h-30px" alt="Book a Photographer Now" style="display:inline;"></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> --}}

	<!-- count section start-->
	<section id="counter" class="counter py-md-5 py-4">
		<div class="container">
			<div class="section-title">
				<h4 class="fs-lg-30 fs-20">Flixaura in Numbers</h4>
				<img src="{{asset('/public')}}/frontend_assets/img/unnamed.png" class="img-fluid h-5px" alt="Flixaura in Numbers">
			</div>
			<div class="row">
				<div class="col-lg-2 col-md-4 col-6 mt-lg-5 mt-md-4 mt-4 text-center d-flex align-items-stretch">
					<div class="counter-part w-100">
						<div class="counter_1 text-black mb-lg-3"> <i class="imgr img-user-plus"></i>
							<h5>Customers</h5>
						</div>
						<div class="content">
							<h2 class="fw-bold fs-lg-70 fs-30">2K+</h2>
						</div>
					</div>
				</div>
				<div class="col-lg-2 col-md-4 col-6 mt-lg-5 mt-md-4 mt-4 text-center d-flex align-items-stretch">
					<div class="counter-part w-100">
						<div class="counter_1 text-black mb-lg-3"> <i class="imgl img-image"></i>
							<h5>Photographers</h5>
						</div>
						<div class="content">
							<h2 class="fw-bold fs-lg-70 fs-30">200+</h2>
						</div>
					</div>
				</div>
				<div class="col-lg-2 col-md-4 col-6 mt-lg-5 mt-md-4 mt-4 text-center d-flex align-items-stretch">
					<div class="counter-part w-100">
						<div class="counter_1 text-black mb-lg-3"> <i class="imgr img-video"></i>
							<h5>Video Delivered</h5>
						</div>
						<div class="content">
							<h2 class="fw-bold fs-lg-70 fs-30">1.7k</h2>
						</div>
					</div>
				</div>
				<div class="col-lg-2 col-md-4 col-6 mt-lg-5 mt-md-4 mt-4 text-center d-flex align-items-stretch">

					<div class="counter-part w-100">
						<div class="counter_1 text-black mb-lg-3"> <i class="imgs img-truck"></i>
							<h5>Photos Delivered</h5>
						</div>
						<div class="content">
							<h2 class=" counter-value1 fw-bold fs-lg-70 fs-30">60K+</h2>
						</div>
					</div>
				</div>
				<div class="col-lg-2 col-md-4 col-6 mt-lg-5 mt-md-4 mt-4 text-center d-flex align-items-stretch">
					<div class="counter-part w-100">
						<div class="counter_1 text-black mb-lg-3"> <i class="imgs img-users"></i>
							<h5>Online Photographers</h5>
						</div>
						<div class="content">
							<h2 class="fw-bold fs-lg-70 fs-30" id="onlineuser">15</h2>
						</div>
					</div>
				</div>
				<div class="col-lg-2 col-md-4 col-6 mt-lg-5 mt-md-4 mt-4 text-center d-flex align-items-stretch">
					<div class="counter-part w-100">
						<div class="counter_1 text-black mb-lg-3"> <i class="imgl img-globe"></i>
							<h5> Current Cities</h5>
						</div>
						<div class="content">
							<h2 class="fw-bold fs-lg-70 fs-30">12</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

</main>
@endsection


	
	@push('page-script')
	<script>
		$(document).ready(function() {
			 setInterval(function(){ $('#onlineuser').html(Math.floor(Math.random() * 6) + 12); }, 3000);
		});
		</script>
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

