@extends('frontend.layouts.app')
@section('title')
Career Growth Opportunities - Photography Jobs
@endsection
@section('meta_title')
Career Growth Opportunities - Photography Jobs
@endsection
@section('description')
Build your career with a leading photography company.  Flixaura offers photography jobs.
@endsection

@section('mainsection')
<main class="main-scrollbar">
	<div class="container-fluid px-0">
		<div class="newHeroSection innerpageHeadign py-md-5 py-4">
			<div class="row align-items-center textWrapper mx-auto my-lg-3 mb-3">
				<div class="col-auto introText fs-18 fs-sm-20 fs-lg-22 pe-0">"FLIXAURA"</div>
				<div class="col coloredLine"><span class="d-block h-3px w-97"></span></div>
				<div class="col-12 fw-bold flixText fs-xl-80 fs-lg-70 fs-md-60 fs-sm-45 fs-35"><span>Career</span>Options</div>
			</div>
			<div class="container">
				<div class="px-lg-5 px-3"><img src="{{ asset('/public') }}/frontend_assets/img/unnamed.png"class="img-fluid h-5px w-100" alt="Our Expertise"></div>
			</div>
		</div>
	</div>
    <div class="container-fluid mt5 pt4">
        <div class="container px-lg-5 px-3">
            <div class="row">
                <div class="section-title col-12 mt-lg4 mt3">
					{{-- <div class="newHeroSection innerpageHeadign">
						<div class="row align-items-center textWrapper mx-auto mb-3">
							<div class="col-auto introText fs-18 fs-sm-20 fs-lg-22 pe-0">"FLIXAURA"</div>
							<div class="col coloredLine"><span class="d-block h-3px w-97"></span></div>
							<div class="col-12 fw-bold flixText fs-xl-80 fs-lg-70 fs-md-60 fs-sm-45 fs-35"><span>Career</span>Options</div>
						</div>
					</div>
                    <h4 class="fs-lg-35 fs-md-30 fs-20 text-center text-muted">Career Options</h4>
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
            </div>
            <div class="row my-5 align-items-center justify-content-center">
                <div class="col-xl-11 col-12">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-md-12 pe-lg-2">
                            <div class="col-12 fs-md-14 fs-12 ">
                                <span class="fs-xl-35 fs-lg-35 fs-md-35 fs-20 fw-600"> Join The Flixaura Team! </span>
                            </div>
                            <div class="fw-400 fs-lg-20 fs-md-20 fs-15 mb-0">Innovate with the latest and greatest
                                technologies &amp; get to work on some of the coolest projects you can imagine.</div>
                            <div class="col-12 pt-md-4 pt-3">
                                <div class="hero p-0 text-start">
                                    <button type="button"
                                        class="comman_button shadow text-black d-inline-flex align-items-center justify-content-start mb-0"><span
                                            class="text-black">Apply Now <img
                                                src="{{ asset('/public') }}/frontend_assets/img/header/logo.png"
                                                class="img-fluid h-30px" alt="logo"
                                                style="display:inline;"></span></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-12 mt-lg-0 mt-md-5 mt-4 pt-1">
                            <div class="row justify-content-center">
                                <div class="col-lg-12 col-md-10 col-12 text-center ">
                                    <img class="w-lg-70 w-md-70 w-100 position-relative mx-auto"
                                        src="{{ asset('/resources/views/frontend/assets/img/img-team.png') }}"
                                        alt="IMG Team">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		</div>
	</div>
	<div class="container-fluid bg-dark py-5">
		<div class="container px-lg-5 px-3">
			<div class="row talent p-0">
				<div class="col-12 section-title text-center">
					<h4 class="fs-lg-30 fs-20 text-white">Trending Opportunities</h4>
					<img src="{{ asset('/public') }}/frontend_assets/img/unnamed.png" class="img-fluid h-5px"
						alt="Our Expertise">
					{{-- <h2 class="fs-lg-28 fs-md-20 fs-17 text-capitalize">Lorem ipsum dolor sit amet</h2> --}}
				</div>
				<div class="col-12 mb-lg-5 jobSection px-0">
					<div class="row mx-0 g-3">
						{{-- backup Card Start --}}
						{{-- <div class="col-4">
							<div class="card applyCard h-100 shadow-none">
								<div class="card-body">
									<div class="row align-items-center mb-3">
										<div class="col">
											<div class="fw-600 fs-lg-19 fs-md-17 fs-16 lh-normal text-theme1">Node.js Developer</div>
											<div class="fw-500 fs-14 text-muted">Experience 0-2 Year</div>
										</div>
										<div class="col-auto"><div class="jobImg w-50px h-50px rounded-circle border d-flex align-items-center justify-content-center bg-white p-2"><img src="https://www.imgglobalinfotech.com/public/assets/img/career/Node-js-Developer.webp" alt="" class="w-100"></div></div>
									</div>
									<div class="row g-2">
										<div class="col-auto"><div class="education degone fs-11 fw-500 rounded-pill">B.Tech</div></div>
										<div class="col-auto"><div class="education degtwo fs-11 fw-500 rounded-pill">MCA</div></div>
										<div class="col-auto"><div class="education degthree fs-11 fw-500 rounded-pill">BCA</div></div>
										<div class="col-12 mt-3 fs-12">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi delectus deserunt unde atque, laborum deleniti.</div>
										<div class="col-12 mt-3">
											<div class="hero p-0 text-start">
												<button type="button" class="comman_button shadow text-black d-inline-flex align-items-center justify-content-start mb-0 h-40px"><span class="text-black">Apply Now <img src="{{ asset('/public') }}/frontend_assets/img/header/logo.png" class="img-fluid h-30px" alt="logo" style="display:inline;"></span></button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div> --}}
						{{-- backup Card End --}}
						
						<div class="col-sm-6">
							<div class="card applyCard h-100 shadow-none">
								<div class="card-body">
									<div class="row align-items-center mb-3">
										<div class="col-12 mb-2"><div class="jobImg w-70px h-70px rounded-circle border d-flex align-items-center justify-content-center bg-white"><img src="{{asset('/resources/views/frontend/assets/img/film-editor.png')}}" alt="" class="w-100 h-100"></div></div>
										<div class="col">
											<div class="fw-600 fs-lg-19 fs-md-17 fs-16 lh-normal text-white texttheme1">Video Editor</div>
											<div class="fw-500 fs-14 text-white-50">Fresher & Intern</div>
										</div>
									</div>
									<div class="row g-2 text-white">
										<div class="col-auto"><div class="education degone fs-11 fw-500 rounded-pill">Communication</div></div>
										<div class="col-auto"><div class="education degtwo fs-11 fw-500 rounded-pill">Graduate</div></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="card applyCard h-100 shadow-none">
								<div class="card-body">
									<div class="row align-items-center mb-3">
										<div class="col-12 mb-2"><div class="jobImg w-70px h-70px rounded-circle border d-flex align-items-center justify-content-center bg-white"><img src="{{asset('/resources/views/frontend/assets/img/marketing.png')}}" alt="" class="w-100 h-100"></div></div>
										<div class="col">
											<div class="fw-600 fs-lg-19 fs-md-17 fs-16 lh-normal text-white texttheme1">Marketing Executive</div>
											<div class="fw-500 fs-14 text-white-50">Intern & Experienced</div>
										</div>
									</div>
									<div class="row g-2 text-white">
										<div class="col-auto"><div class="education degone fs-11 fw-500 rounded-pill">Communication</div></div>
										<div class="col-auto"><div class="education degtwo fs-11 fw-500 rounded-pill">Graduate</div></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="card applyCard h-100 shadow-none">
								<div class="card-body">
									<div class="row align-items-center mb-3">
										<div class="col-12 mb-2"><div class="jobImg w-70px h-70px rounded-circle border d-flex align-items-center justify-content-center bg-white"><img src="{{asset('/resources/views/frontend/assets/img/social-media.png')}}" alt="" class="w-100 h-100"></div></div>
										<div class="col">
											<div class="fw-600 fs-lg-19 fs-md-17 fs-16 lh-normal text-white texttheme1">Social Media Marketing</div>
											<div class="fw-500 fs-14 text-white-50">Fresher & Intern</div>
										</div>
									</div>
									<div class="row g-2 text-white">
										<div class="col-auto"><div class="education degone fs-11 fw-500 rounded-pill">Communication</div></div>
										<div class="col-auto"><div class="education degtwo fs-11 fw-500 rounded-pill">Graduate</div></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="card applyCard h-100 shadow-none">
								<div class="card-body">
									<div class="row align-items-center mb-3">
										<div class="col-12 mb-2"><div class="jobImg w-70px h-70px rounded-circle border d-flex align-items-center justify-content-center bg-white"><img src="{{asset('/resources/views/frontend/assets/img/videographer.png')}}" alt="" class="w-100 h-100"></div></div>
										<div class="col">
											<div class="fw-600 fs-lg-19 fs-md-17 fs-16 lh-normal text-white texttheme1">Videographer</div>
											<div class="fw-500 fs-14 text-white-50">Fresher & Intern</div>
										</div>
									</div>
									<div class="row g-2 text-white">
										<div class="col-auto"><div class="education degone fs-11 fw-500 rounded-pill">Communication</div></div>
										<div class="col-auto"><div class="education degtwo fs-11 fw-500 rounded-pill">Graduate</div></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid my-5">
		<div class="container px-lg-5 px-3">
			<div class="row mb-5 py-lg-4">
				<div class="col-12 talent py-0">
					<div class="section-title text-center">
						<h4 class="fs-lg-30 fs-20">We’d Love To Hear From You</h4>
						<img src="{{asset('/public')}}/frontend_assets/img/unnamed.png" class="img-fluid h-5px" alt="Our Expertise">
						{{-- <h2 class="fs-lg-28 fs-md-20 fs-17 text-capitalize">Lorem ipsum dolor sit amet</h2> --}}
					</div>
				</div>
				<div class="col-lg-8 col-md-9  mx-auto mx-auto content login-form">
					<form action="{{ route('website.career.submit') }}" class="row form g-4" method="post" enctype="multipart/form-data" id="career_form">
						@csrf
						<div class="col-md-6">
							<div class="form-group position-relative">
								<i class="imgs img-user"></i>
								<input type="text" name="name" class="form-control shadow-none rounded fs-14 bg-light border h-md-50px h-44px" id="email" placeholder="Name" style="padding-left:36px;" required="">
							</div>
							<div id="name_error" class="text-danger  div_error"></div>
						</div>
						<div class="col-md-6">
							<div class="form-group position-relative">
								<i class="imgs img-envelope"></i>
								<input type="email" name="email" class="form-control shadow-none rounded fs-14 bg-light border h-md-50px h-44px" id="password" placeholder="Email" style="padding-left:36px;" required="">
							</div>
							<div id="email_error" class="text-danger div_error"></div>
						</div>
						<div class="col-md-6">
							<div class="form-group position-relative">
								<i class="imgs img-phone-rotary"></i>
								<input type="tel" name="mobile" class="form-control shadow-none rounded fs-14 bg-light border h-md-50px h-44px" id="password" placeholder="Mobile number" style="padding-left:36px;" maxlength="10" required="">
							</div>
							<div id="mobile_error" class="text-danger  div_error"></div>
						</div>
						<div class="col-md-6">
							<div class="form-group position-relative">
								<i class="imgs img-file-chart-pie"></i>
								{{-- <input type="text" name="text" class="form-control shadow-none rounded fs-14 bg-light border h-md-50px h-44px" id="password" placeholder="Mobile number" style="padding-left:36px;" required=""> --}}
								<select name="job" required="" class="form-control shadow-none rounded fs-14 bg-light border h-md-50px h-44px" style="padding-left:36px;">
									<option value="" selected>Job Title</option>
									<option value="Web Developer">Web Developer</option>
									<option value="Mobile App Developer">Mobile App Developer</option>
									<option value="React Developer">React Developer</option>
									<option value="IOS Developer">IOS Developer</option>
								</select>
							</div>
							<div id="job_error" class="text-danger  div_error"></div>
						</div>
						<div class="col-md-6">
							<div class="form-group position-relative">
								<i class="imgs img-file-user"></i>
								<label for="foles" class="form-control shadow-none rounded fs-14 bg-light border h-md-50px h-44px d-flex align-items-center"  style="padding-left:36px;">Upload Resume</label>
								<input type="file"  name="resume" class="form-control shadow-none rounded fs-14 bg-light border h-md-50px h-44px" id="foles" placeholder="" style="padding-left:36px;"  hidden>
								<div id="resume_error" class="text-danger  div_error"></div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group position-relative">
								<i class="imgs img-map-marker-alt"></i>
								<input type="text" name="address" class="form-control shadow-none rounded fs-14 bg-light border h-md-50px h-44px" id="fol" placeholder="Address" style="padding-left:36px;" required="">
							</div>
							<div id="address_error" class="text-danger  div_error"></div>
						</div>
						<div class="col-12">
								<div class="form-group position-relative">
									<i class="imgs img-comment mt-1"></i>
									<textarea name="description" id="" cols="30" rows="5" placeholder="Tell us about your self" class="form-control shadow-none rounded fs-14 bg-light border h-auto pt-2" style="padding-left:36px;" required=""></textarea>
								</div>
								<div id="description_error" class="text-danger div_error"></div>
							</div>
						<div class="col-12">
							<div class="hero p-0 text-end">
								<button type="button" id="formsubmit" class="comman_button shadow text-black d-inline-flex align-items-center justify-content-start mb-0"><span class="text-black">Submit <img src="{{ asset('/public') }}/frontend_assets/img/header/logo.png" class="img-fluid h-30px" alt="logo" style="display:inline;"></span></button>
							</div>
						</div>
					</form>
							
				</div>
			</div>
		</div>
	</div>
</main>
@endsection

@push('page-script-link')
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endpush

	@push('page-script')
		<script>
			$('#formsubmit').on('click', function(e) {
				e.preventDefault();
				
				var form = $("#career_form");
				var form_data = new FormData(this.form);
				var file_data1 = $("#foles").prop("files")[0];
			
				
					form_data.append("resumefile", file_data1);    
				

				$.ajax({
					headers: {
						'X-CSRF-TOKEN': "{{ csrf_token() }}"
					},
					url: form.attr('action'),
					processData: false,
					contentType: false,
					cache: false,
					type: "post",
					dataType: "json",
					data: form_data,
					success: function(data) {
						Swal.fire({
								position: 'center',
								icon: 'success',
								title: 'Thank you for filling out your information!',
								showConfirmButton: false,
								timer: 3000
								})
						location.reload();
						
					}, 
					error: function(data) {
						$(".div_error").text('');
						var response = JSON.parse(data.responseText);
			
						$.each( response.errors, function( key, value) {
							
							
							$('#'+key+"_error").text(value);
						
						});
						// swal.fire({
						// title: "",
						// icon: 'error',
						// text: 'Fill form data according to the requirements',
						// })
					}
				});
			})
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