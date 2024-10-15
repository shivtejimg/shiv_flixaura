@extends('frontend.layouts.app')
@section('title')script
Our Team
@endsection
@section('meta_title')
Our Team
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
				<div class="col-12 fw-bold flixText fs-xl-80 fs-lg-70 fs-md-60 fs-sm-45 fs-35"><span>About</span>Us</div>
			</div>
			<div class="container">
				<div class="px-lg-5 px-3"><img src="{{ asset('/public') }}/frontend_assets/img/unnamed.png"class="img-fluid h-5px w-100" alt="Our Expertise"></div>
			</div>
		</div>
	</div>
    <div class="container-fluid mt5 pb5 pt-md-5 pt-4 topsection text-dark bg-white">
        <div class="container px-lg-5 px-3">
            <div class="row">
                <div class="section-title col-12 mt-lg4 mt3">
					{{-- <div class="row align-items-center textWrapper mx-auto mb-3">
						<div class="col-auto introText fs-18 fs-sm-20 fs-lg-22 pe-0">"FLIXAURA"</div>
						<div class="col coloredLine"><span class="d-block h-3px w-97"></span></div>
						<div class="col-12 fw-bold flixText fs-xl-80 fs-lg-70 fs-md-60 fs-sm-50 fs-40"><span>About</span>Us</div>
					</div>
                    <h4 class="fs-lg-35 fs-md-30 fs-20 text-center text-white">About Us</h4>
                    <div class=""><img src="{{ asset('/public') }}/frontend_assets/img/unnamed.png"
                            class="img-fluid h-5px w-100" alt="Our Expertise"></div> --}}
                    <div class="fs-lg-15 fs-14 text-center mt-lg5 mt4">
						{{-- Flixaura is not a new name in the media line, we
                        are working for 5+ years. We have worked before with Edtech shoot, corporate film shoot,
                        corporate ad films
                        shoot, short films shoot, first birthday shoot, documentary shoot, Newborn baby shoot, baby
                        shoot, in-house studio shoot, outdoor photo shoot, music album shoot,
                        full product shoot, and drone shoot. Also worked with all kinds of corporate shoots like hotels
                        shoot, hospitals shoot, café shoot, gyms shoot, factories shoot, stores,
                        etc. Here is some of the work listed. --}}
						<div class="d-inline-flex align-items-center text-uppercase flexauratheme fw-600"><span>FLIX</span>AURA</div> is a Market Place for On-Demand Creative professionals Full-filling The Photography and Videography Needs Of everyone. We are specialized in Innovative Films & Commercials. Flixaura offers a huge list of categories to choose from Corporate Films, Hospitality, Advertisements, Real Estate, Personal Portfolio, Family, Food, Products, and Events Etc... Flixaura Always Works with Professional Personals Each Having Intensive skills In their Special Genre to Satisfy your Requirements Every time you Book US.
					</div>
					<div class="points row mt-4 ">
						<div class="col-lg-4 col-sm-6">
							<ul class="text-body-secondary">
								<li>Education Podcasting</li>
								<li>Training and Instruction</li>
								<li>Edtech Communication</li>
								<li>Marketing and Advertising</li>
							</ul>
						</div>
						<div class="col-lg-4 col-sm-6">
							<ul class="text-body-secondary">
								<li>Storytelling</li>
								<li>Documenting Events</li>
								<li>Journalism and News Coverage</li>
							</ul>
						</div>
						<div class="col-lg-4 col-12">
							<ul class="text-body-secondary">
								<li>Entertainment</li>
								<li>Social Media and Online Presence</li>
								<li>Cultural Preservation</li>
							</ul>
						</div>
					</div>
                </div>
            </div>
		</div>
	</div>
	<div class="container-fluid py-lg-5 pt-5 topsection text-dark bg-white">
        <div class="container px-lg-5 px-3">
            <div class="row">
                <div class="section-title col-12">
                    <h4 class="fs-lg-35 fs-md-30 fs-20 text-center">Mission Statement</h4>
                    <div class=""><img src="{{ asset('/public') }}/frontend_assets/img/unnamed.png"
                            class="img-fluid h-5px w-100" alt="Our Expertise"></div>
                    <div class="fs-lg-15 fs-14 text-center mt-lg-5 mt-4">
						Working with our clients to ensure their success in the most enthusiastic and creative way possible is our company's objective at <div class="d-inline-flex align-items-center text-uppercase flexauratheme fw-600"><span>FLIX</span>AURA</div>. According to the current trend, we are working to offer numerous businesses low-cost video solutions that take logistics into account and help them build their brands.
					</div>
                </div>
            </div>
		</div>
	</div>
	<div class="container-fluid py-5 topsection text-white">
        <div class="container px-lg-5 px-3">
            <div class="row">
                <div class="section-title col-12">
                    <h4 class="fs-lg-35 fs-md-30 fs-20 text-center text-white">Our Team</h4>
                    <div class=""><img src="{{ asset('/public') }}/frontend_assets/img/unnamed.png"
                            class="img-fluid h-5px w-100" alt="Our Expertise"></div>
                    <div class="fs-lg-15 fs-14 text-center mt-lg-5 mt-4">
						<div class="d-inline-flex align-items-center text-uppercase flexauratheme fw-600"><span>FLIX</span>AURA</div> is not a new name in the media line, we
                        are working for 5+ years. We have worked before with Edtech shoot, corporate film shoot,
                        corporate ad films
                        shoot, short films shoot, first birthday shoot, documentary shoot, Newborn baby shoot, baby
                        shoot, in-house studio shoot, outdoor photo shoot, music album shoot,
                        full product shoot, and drone shoot. Also worked with all kinds of corporate shoots like hotels
                        shoot, hospitals shoot, café shoot, gyms shoot, factories shoot, stores,
                        etc. Here is some of the work listed.
					</div>
                </div>
            </div>
		</div>
	</div>
	<!-- <div class="container-fluid mt5 text-white mb-lg5 mb-0 py-5 ourTopTeamSection ">
		<div class="container innersection mt-5">
			<div class="row px-xl-4 px-md-5">
				<div class="col-4 maincard position-relative card1 d-xl-block d-none">
					<div class="h-100">
						<div class="userImg"><img src="{{ asset('/resources/views/frontend/assets/img/team2.jpg') }}" class="w-100" alt=""></div>
						<div class="user_name username2 text-white-50 text-uppercase fw-600 fs-xxl-30 fs-lg-28 fs-md-25 fs-22 d-md-block d-none">Khushhal</div>
					</div>
				</div>
				<div class="col-xl-6 mb-xl-0 mb-5 pb-xl-0 pb-5 d-xl-none d-block">
					<div class="row maincard position-relative card1 align-items-xl-end">
						<div class="col-xl-6 col-lg-4 col-sm-5 col-8 mx-auto mb-sm-0 mb-4">
							<div class="userImg"><img src="{{ asset('/resources/views/frontend/assets/img/team2.jpg') }}" class="w-100" alt=""></div>
							<div class="user_name username2 text-white-50 text-uppercase fw-600 fs-xxl-30 fs-lg-28 fs-md-25 fs-22 d-md-block d-none">Khushhal</div>
						</div>
						<div class="col-xl-6 col-lg-8 col-sm-7">
							<div class="ms-lg-5 ms-sm-4">
								<div class="userHeading text-uppercase mb-xxl3 mb-xl2 mb-md3 mb-1 fw-600 fs-xxl-23 fs-xl-19 fs-lg-24 fs-md-22 fs-20">Khushhal Singh</div>
								<div class="text-white-75 fs-xl-14 fs-lg-15 fs-14 mb-xxl-3 mb-xl-2 mb-md-3 mb-2 fw-light innerText">Creative Director</div>
								<div class="text-white-50 fs-xl-12 fs-lg-13 fs-12 mb-xxl-3 mb-xl-2 mb-md-3 mb-2 fw-light innerText">Khushhal Singh has been associated with Films, Cinematography, and Photography for close to 10 years.</div>
								<button type="button" class="d-inline-flex shadow-none border-0 bg-transparent w-lg50px w-40px h-lg30px h-26px justify-content-center align-items-center arrowBtn arrow2 position-relative"><span class="d-flex align-items-center justify-content-center w-lg25px w-20px h-lg20px h-15px"><img src="{{ asset('/public/frontend_assets/img/rightSingalArrow.svg') }}" class="w-100 h-100" alt=""></span></button>
							</div>
						</div>
					</div>
				</div>
				<div class="col-4 d-xl-block d-none">
					<div class="row">
						<div class="col-12 maincard">
							<div class="ms-lg-5 ms-4">
								<div class="userHeading text-uppercase mb-xxl3 mb-xl2 mb-md3 mb-1 fw-600 fs-xxl-23 fs-xl-19 fs-lg-24 fs-md-22 fs-20">Neeraj Rajput</div>
								<div class="text-white-75 fs-xl-14 fs-lg-15 fs-14 mb-xxl-3 mb-xl-2 mb-md-3 mb-2 fw-light innerText">Managing Director </div>
								<div class="text-white-50 fs-xl-12 fs-lg-13 fs-12 mb-xxl-3 mb-xl-2 mb-md-3 mb-2 fw-light innerText">Neeraj has been associated with IT, Consulting, and management for close to 10 years.</div>
								<button type="button" class="d-inline-flex shadow-none border-0 bg-transparent w-lg50px w-40px h-lg30px h-26px justify-content-center align-items-center arrowBtn position-relative"><span class="d-flex align-items-center justify-content-center w-lg25px w-20px h-lg20px h-15px"><img src="{{ asset('/public/frontend_assets/img/rightSingalArrow.svg') }}" class="w-100 h-100" alt=""></span></button>
								<div class="borderd my-4"></div>
							</div>
						</div>
						<div class="col-12 maincard">
							<div class="ms-lg-5 ms-4">
								<div class="userHeading text-uppercase mb-xxl3 mb-xl2 mb-md3 mb-1 fw-600 fs-xxl-23 fs-xl-19 fs-lg-24 fs-md-22 fs-20">Khushhal Singh</div>
								<div class="text-white-75 fs-xl-14 fs-lg-15 fs-14 mb-xxl-3 mb-xl-2 mb-md-3 mb-2 fw-light innerText">Creative Director</div>
								<div class="text-white-50 fs-xl-12 fs-lg-13 fs-12 mb-xxl-3 mb-xl-2 mb-md-3 mb-2 fw-light innerText">Khushhal Singh has been associated with Films, Cinematography, and Photography for close to 10 years.</div>
								<button type="button" class="d-inline-flex shadow-none border-0 bg-transparent w-lg50px w-40px h-lg30px h-26px justify-content-center align-items-center arrowBtn arrow2 position-relative"><span class="d-flex align-items-center justify-content-center w-lg25px w-20px h-lg20px h-15px"><img src="{{ asset('/public/frontend_assets/img/rightSingalArrow.svg') }}" class="w-100 h-100" alt=""></span></button>
							</div>
						</div>
					</div>
				</div>
				<div class="col-4 maincard position-relative card2 d-xl-block d-none">
					<div class="h-100">
						<div class="userImg team2UserName"><img src="{{ asset('/resources/views/frontend/assets/img/Neerajrajput.jpg') }}" class="w-100" alt=""></div>
						<div class="user_name username2 text-white-50 text-uppercase fw-600 fs-xxl-30 fs-lg-28 fs-md-25 fs-22 d-md-block d-none">Neeraj</div>
					</div>
				</div>
				<div class="col-xl-6 d-xl-none d-block">
					<div class="row maincard card2 align-items-xl-end">
						<div class="col-xl-6 col-lg-8 col-sm-7 order-sm-1 order-2">
							<div class="mx-xl-3 me-4 pe-xl-0 pe-2">
								<div class="userHeading text-uppercase mb-xxl3 mb-xl2 mb-md3 mb-1 fw-600 fs-xxl-23 fs-xl-19 fs-lg-24 fs-md-22 fs-20">Neeraj Rajput</div>
								<div class="text-white-75 fs-xl-14 fs-lg-15 fs-14 mb-xxl-3 mb-xl-2 mb-md-3 mb-2 fw-light innerText">Managing Director </div>
								<div class="text-white-50 fs-xl-12 fs-lg-13 fs-12 mb-xxl-3 mb-xl-2 mb-md-3 mb-2 fw-light innerText">Neeraj has been associated with IT, Consulting, and management for close to 10 years.</div>
								<button type="button" class="d-inline-flex shadow-none border-0 bg-transparent w-lg50px w-40px h-lg30px h-26px justify-content-center align-items-center arrowBtn position-relative"><span class="d-flex align-items-center justify-content-center w-lg25px w-20px h-lg20px h-15px"><img src="{{ asset('/public/frontend_assets/img/rightSingalArrow.svg') }}" class="w-100 h-100" alt=""></span></button>
							</div>
						</div>
						<div class="col-xl-6 col-lg-4 col-sm-5 col-8 mx-auto order-sm-2 order-1 mb-sm-0 mb-4">
							<div class="userImg team2UserName"><img src="{{ asset('/resources/views/frontend/assets/img/Neerajrajput.jpg') }}" class="w-100" alt=""></div>
							{{-- img ki size 281 x 453  hi dale  --}}
							<div class="user_name username2 text-white-50 text-uppercase fw-600 fs-xxl-30 fs-lg-28 fs-md-25 fs-22 d-md-block d-none">Neeraj</div>
						</div>
					</div>
				</div>
				{{-- <div class="col-xl-6 mb-xl-0 mb-5 pb-xl-0 pb-5">
					<div class="row maincard position-relative card1 align-items-xl-end">
						<div class="col-xl-6 col-sm-4 col-8 mx-auto mb-sm-0 mb-4">
							<div class="userImg"><img src="{{ asset('/resources/views/frontend/assets/img/team2.png') }}" class="w-100" alt=""></div>
							<div class="user_name username2 text-uppercase fw-600 fs-xxl-30 fs-lg-28 fs-md-25 fs-22 d-md-block d-none">Khushhal</div>
						</div>
						<div class="col-xl-6 col-sm-8">
							<div class="ms-lg-5 ms-4">
								<div class="userHeading text-uppercase mb-xxl-3 mb-xl-2 mb-md-3 mb-2 fw-600 fs-xxl-23 fs-xl-19 fs-lg-24 fs-md-22 fs-20">i have some ideas</div>
								<div class="text-white-50 fs-xl-12 fs-lg-13 fs-12 fw-light innerText mb-xxl-3 mb-xl-2 mb-md-3 mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus nesciunt repellat, explicabo reiciendis laudantium atque nihil at ad magnam provident magni quam nemo. Illum, dignissimos.</div>
								<div class="text-white-50 fs-xl-12 fs-lg-13 fs-12 fw-light innerText mb-xxl-3 mb-xl-2 mb-md-3 mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, molestiae amet quod sint beatae aliquid!</div>
								<div class="text-white-50 fs-xl-12 fs-lg-13 fs-12 fw-light innerText mb-xxl-3 mb-xl-2 mb-md-3 mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos fuga adipisci quidem ab velit reprehenderit!</div>
								<button type="button" class="d-inline-flex shadow-none border-0 bg-transparent w-lg50px w-40px h-lg30px h-26px justify-content-center align-items-center arrowBtn position-relative"><span class="d-flex align-items-center justify-content-center w-lg25px w-20px h-lg20px h-15px"><img src="{{ asset('/public/frontend_assets/img/rightSingalArrow.svg') }}" class="w-100 h-100" alt=""></span></button>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-6">
					<div class="row maincard card2 align-items-xl-end">
						<div class="col-xl-6 col-sm-8 order-sm-1 order-2">
							<div class="mx-xl-3 me-4 pe-xl-0 pe-2">
								<div class="userHeading text-uppercase mb-xxl-3 mb-xl-2 mb-md-3 mb-2 fw-600 text-black fs-xxl-23 fs-xl-19 fs-lg-24 fs-md-22 fs-20">i have some ideas</div>
								<div class="text-white-50 fs-xl-12 fs-lg-13 fs-12 fw-light innerText mb-xxl-3 mb-xl-2 mb-md-3 mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus nesciunt repellat, explicabo reiciendis laudantium atque nihil at ad magnam provident magni quam nemo. Illum, dignissimos.</div>
								<div class="text-white-50 fs-xl-12 fs-lg-13 fs-12 fw-light innerText mb-xxl-3 mb-xl-2 mb-md-3 mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, molestiae amet quod sint beatae aliquid!</div>
								<div class="text-white-50 fs-xl-12 fs-lg-13 fs-12 fw-light innerText mb-xxl-3 mb-xl-2 mb-md-3 mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos fuga adipisci quidem ab velit reprehenderit!</div>
								<button type="button" class="d-inline-flex shadow-none border-0 bg-transparent w-lg50px w-40px h-lg30px h-26px justify-content-center align-items-center arrowBtn position-relative"><span class="d-flex align-items-center justify-content-center w-lg25px w-20px h-lg20px h-15px"><img src="{{ asset('/public/frontend_assets/img/rightSingalArrow.svg') }}" class="w-100 h-100" alt=""></span></button>
							</div>
						</div>
						<div class="col-xl-6 col-sm-4 col-8 mx-auto order-sm-2 order-1 mb-sm-0 mb-4">
							<div class="userImg team2UserName"><img src="{{ asset('/resources/views/frontend/assets/img/Neerajrajput.png') }}" class="w-100" alt=""></div>
							<div class="user_name username2 text-uppercase fw-600 fs-xxl-30 fs-lg-28 fs-md-25 fs-22 d-md-block d-none">Neeraj</div>
						</div>
					</div>
				</div> --}}
			</div>
			<div class="row px-md-5 d-none">
				<div class="col-xl-6 mb-xl-0 mb-5 pb-xl-0 pb-5">
					<div class="row maincard position-relative card1 align-items-xl-end">
						<div class="col-xl-6 col-sm-4 col-8 mx-auto mb-sm-0 mb-4">
							<div class="userImg"><img src="{{ asset('/resources/views/frontend/assets/img/team2.png') }}" class="w-100" alt=""></div>
							{{-- img ki size 281 x 453  hi dale  --}}
							<div class="user_name username2 text-uppercase fw-600 fs-xxl-30 fs-lg-28 fs-md-25 fs-22 d-md-block d-none">Khushhal</div>
						</div>
						<div class="col-xl-6 col-sm-8">
							<div class="ms-lg-5 ms-4">
								<div class="userHeading text-uppercase mb-xxl-3 mb-xl-2 mb-md-3 mb-2 fw-600 fs-xxl-23 fs-xl-19 fs-lg-24 fs-md-22 fs-20">i have some ideas</div>
								<div class="text-white-50 fs-xl-12 fs-lg-13 fs-12 fw-light innerText mb-xxl-3 mb-xl-2 mb-md-3 mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus nesciunt repellat, explicabo reiciendis laudantium atque nihil at ad magnam provident magni quam nemo. Illum, dignissimos.</div>
								<div class="text-white-50 fs-xl-12 fs-lg-13 fs-12 fw-light innerText mb-xxl-3 mb-xl-2 mb-md-3 mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, molestiae amet quod sint beatae aliquid!</div>
								<div class="text-white-50 fs-xl-12 fs-lg-13 fs-12 fw-light innerText mb-xxl-3 mb-xl-2 mb-md-3 mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos fuga adipisci quidem ab velit reprehenderit!</div>
								<button type="button" class="d-inline-flex shadow-none border-0 bg-transparent w-lg50px w-40px h-lg30px h-26px justify-content-center align-items-center arrowBtn position-relative"><span class="d-flex align-items-center justify-content-center w-lg25px w-20px h-lg20px h-15px"><img src="{{ asset('/public/frontend_assets/img/rightSingalArrow.svg') }}" class="w-100 h-100" alt=""></span></button>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-6">
					<div class="row maincard card2 align-items-xl-end">
						<div class="col-xl-6 col-sm-8 order-sm-1 order-2">
							<div class="mx-xl-3 me-4 pe-xl-0 pe-2">
								<div class="userHeading text-uppercase mb-xxl-3 mb-xl-2 mb-md-3 mb-2 fw-600 text-black fs-xxl-23 fs-xl-19 fs-lg-24 fs-md-22 fs-20">i have some ideas</div>
								<div class="text-white-50 fs-xl-12 fs-lg-13 fs-12 fw-light innerText mb-xxl-3 mb-xl-2 mb-md-3 mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus nesciunt repellat, explicabo reiciendis laudantium atque nihil at ad magnam provident magni quam nemo. Illum, dignissimos.</div>
								<div class="text-white-50 fs-xl-12 fs-lg-13 fs-12 fw-light innerText mb-xxl-3 mb-xl-2 mb-md-3 mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, molestiae amet quod sint beatae aliquid!</div>
								<div class="text-white-50 fs-xl-12 fs-lg-13 fs-12 fw-light innerText mb-xxl-3 mb-xl-2 mb-md-3 mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos fuga adipisci quidem ab velit reprehenderit!</div>
								<button type="button" class="d-inline-flex shadow-none border-0 bg-transparent w-lg50px w-40px h-lg30px h-26px justify-content-center align-items-center arrowBtn position-relative"><span class="d-flex align-items-center justify-content-center w-lg25px w-20px h-lg20px h-15px"><img src="{{ asset('/public/frontend_assets/img/rightSingalArrow.svg') }}" class="w-100 h-100" alt=""></span></button>
							</div>
						</div>
						<div class="col-xl-6 col-sm-4 col-8 mx-auto order-sm-2 order-1 mb-sm-0 mb-4">
							<div class="userImg team2UserName"><img src="{{ asset('/resources/views/frontend/assets/img/Neerajrajput.png') }}" class="w-100" alt=""></div>
							{{-- img ki size 281 x 453  hi dale  --}}
							<div class="user_name username2 text-uppercase fw-600 fs-xxl-30 fs-lg-28 fs-md-25 fs-22 d-md-block d-none">Neeraj</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> -->

	<div class="container-fluid testimonialsGroup mblg-5 py5 text-white">
		<div class="container innerfluid">
			<div class="row teamcard mx-lg-5">
				<div class="col-xxl10 col-xl11 col-lg-11 col-12 mx-auto">
					<div class="card border-0 teamcard bg-transparent pb-lg-5 pb-4 px-lg-0 px-md-5">
						<div class="innerbody px-lg-3 py-3 p-0 px-xl-5">
							<div class="testimonial pt-lg-5 pt-4 row gx-0 gy-md-0 gy-4 justify-content-center mx-xxl-5 mx-xl5">
								<div class="col-md col-sm-4 col-6 item">
									<div class="card bg-transparent border-0 card1 cards1">
										<div class="card-body p-0">
											<div class="cardImg mx-auto rounded-circle w-xl-150px w-lg-140px w-120px h-xl-150px h-lg-140px h-120px overflow-hidden">
												<img src="{{ asset('/resources/views/frontend/assets/img/new-team/Neeraj_Rajput_Managing_Director.jpg') }}" class="w-100 h-100" alt="">
											</div>
											<div class="barGroup text-center mt-md-4 pt-md-3 pt-2">
												<div class="bars position-relative d-md-flex d-none justify-content-center align-items-center mb-3"><span class="d-inline-flex fs-xl14 fs-13 align-items-center justify-content-center commonBar w-xl30px w-25px h-xl30px h-25px rounded-circle overflow-hidden bg-white text-dark">1</span></div>
												<div class="postTitle fs-xxl-13 fs-12 mb-1">Managing Director</div>
												<div class="userName fw-semibold fs-xxl-16 fs-14">Neeraj Rajput</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md col-sm-4 col-6 item">
									<div class="card bg-transparent border-0 card2 cards2">
										<div class="card-body p-0">
											<div class="cardImg mx-auto rounded-circle w-xl-150px w-lg-140px w-120px h-xl-150px h-lg-140px h-120px overflow-hidden">
												<img src="{{ asset('/resources/views/frontend/assets/img/new-team/khushhal_Singh_Creative_Director.jpg') }}" class="w-100 h-100" alt="">
											</div>
											<div class="barGroup text-center mt-md-4 pt-md-3 pt-2">
												<div class="bars position-relative d-md-flex d-none justify-content-center align-items-center mb-3"><span class="d-inline-flex fs-xl14 fs-13 align-items-center justify-content-center commonBar w-xl30px w-25px h-xl30px h-25px rounded-circle overflow-hidden">2</span></div>
												<div class="postTitle fs-xxl-13 fs-12 mb-1 ">Creative Director</div>
												<div class="userName fw-semibold fs-xxl-16 fs-14">Khushhal Singh</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md col-sm-4 col-6 item">
									<div class="card bg-transparent border-0 mainCard cards3">
										<div class="card-body p-0">
											<div class="cardImg mx-auto rounded-circle w-xl-150px w-lg-140px w-120px h-xl-150px h-lg-140px h-120px overflow-hidden">
												<img src="{{ asset('/resources/views/frontend/assets/img/new-team/Dinesh_Kumar_Director_Mumbai.jpg') }}" class="w-100 h-100" alt="">
											</div>
											<div class="barGroup text-center mt-md-4 pt-md-3 pt-2">
												<div class="bars position-relative d-md-flex d-none justify-content-center align-items-center mb-3"><span class="d-inline-flex fs-xl14 fs-13 align-items-center justify-content-center commonBar w-xl30px w-25px h-xl30px h-25px rounded-circle overflow-hidden">3</span></div>
												<div class="postTitle fs-xxl-13 fs-12 mb-1">Director Mumbai</div>
												<div class="userName fw-semibold fs-xxl-16 fs-14">Dinesh Kumar</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md col-sm-4 col-6 item">
									<div class="card bg-transparent border-0 card2 cards4">
										<div class="card-body p-0">
											<div class="cardImg mx-auto rounded-circle w-xl-150px w-lg-140px w-120px h-xl-150px h-lg-140px h-120px overflow-hidden">
												<img src="{{ asset('/resources/views/frontend/assets/img/new-team/Moh_Tahair_Pasha_director_bangalore.jpg') }}" class="w-100 h-100" alt="">
											</div>
											<div class="barGroup text-center mt-md-4 pt-md-3 pt-2">
												<div class="bars position-relative d-md-flex d-none justify-content-center align-items-center mb-3"><span class="d-inline-flex fs-xl14 fs-13 align-items-center justify-content-center commonBar w-xl30px w-25px h-xl30px h-25px rounded-circle overflow-hidden">4</span></div>
												<div class="postTitle fs-xxl-13 fs-12 mb-1">Director Bangalore</div>
												<div class="userName fw-semibold fs-xxl-16 fs-14">Moh. Tahair Pasha </div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md col-sm-4 col-6 item">
									<div class="card bg-transparent border-0 card1 cards5">
										<div class="card-body p-0">
											<div class="cardImg mx-auto rounded-circle w-xl-150px w-lg-140px w-120px h-xl-150px h-lg-140px h-120px overflow-hidden">
												<img src="{{ asset('/resources/views/frontend/assets/img/new-team/Gaurav_Sharma_Marketing_manager.png') }}" class="w-100 h-100" alt="">
											</div>
											<div class="barGroup text-center mt-md-4 pt-md-3 pt-2">
												<div class="bars position-relative d-md-flex d-none justify-content-center align-items-center mb-3"><span class="d-inline-flex fs-xl14 fs-13 align-items-center justify-content-center commonBar w-xl30px w-25px h-xl30px h-25px rounded-circle overflow-hidden">5</span></div>
												<div class="postTitle fs-xxl-13 fs-12 mb-1">Marketing Manager</div>
												<div class="userName fw-semibold fs-xxl-16 fs-14">Kumar Gaurav</div>
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
	<div class="container-fluid testimonialsGroup mblg-5 py5 text-white">
		<div class="container innerfluid">
			<div class="row teamcard mx-lg-5">
				<div class="col-xxl10 col-xl11 col-lg-11 col-12 mx-auto">
					<div class="card border-0 teamcard bg-transparent pb-lg-5 pb-4 px-lg-0 px-md-5">
						<div class="innerbody px-lg-3 py-3 p-0 px-xl-5">
							<div class="testimonial pt-lg-5 pt-4 row gx-0 gy-md-0 gy-4 justify-content-center mx-xxl-5 mx-xl5">
								<div class="col-md col-sm-4 col-6 item">
									<div class="card bg-transparent border-0 card1 cards1">
										<div class="card-body p-0">
											<div class="cardImg mx-auto rounded-circle w-xl-150px w-lg-140px w-120px h-xl-150px h-lg-140px h-120px overflow-hidden">
												<img src="{{ asset('/resources/views/frontend/assets/img/new-team/Arun_Garg_CBO.jpg') }}" class="w-100 h-100" alt="">
											</div>
											<div class="barGroup text-center mt-md-4 pt-md-3 pt-2">
												<div class="bars position-relative d-md-flex d-none justify-content-center align-items-center mb-3"><span class="d-inline-flex fs-xl14 fs-13 align-items-center justify-content-center commonBar w-xl30px w-25px h-xl30px h-25px rounded-circle overflow-hidden bg-white text-dark">6</span></div>
												<div class="postTitle fs-xxl-13 fs-12 mb-1">Chief Business Officer</div>
												<div class="userName fw-semibold fs-xxl-16 fs-14">Arun Garg</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md col-sm-4 col-6 item">
									<div class="card bg-transparent border-0 card2 cards2">
										<div class="card-body p-0">
											<div class="cardImg mx-auto rounded-circle w-xl-150px w-lg-140px w-120px h-xl-150px h-lg-140px h-120px overflow-hidden">
												<img src="{{ asset('/resources/views/frontend/assets/img/new-team/Akansha_Saxena_HR.jpg') }}" class="w-100 h-100" alt="">
											</div>
											<div class="barGroup text-center mt-md-4 pt-md-3 pt-2">
												<div class="bars position-relative d-md-flex d-none justify-content-center align-items-center mb-3"><span class="d-inline-flex fs-xl14 fs-13 align-items-center justify-content-center commonBar w-xl30px w-25px h-xl30px h-25px rounded-circle overflow-hidden">7</span></div>
												<div class="postTitle fs-xxl-13 fs-12 mb-1 ">Human Resources</div>
												<div class="userName fw-semibold fs-xxl-16 fs-14">Akansha Saxena</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md col-sm-4 col-6 item">
									<div class="card bg-transparent border-0 mainCard cards3">
										<div class="card-body p-0">
											<div class="cardImg mx-auto rounded-circle w-xl-150px w-lg-140px w-120px h-xl-150px h-lg-140px h-120px overflow-hidden">
												<img src="{{ asset('/resources/views/frontend/assets/img/new-team/Rushda_Makeup_Artist.jpeg') }}" class="w-100 h-100" alt="">
											</div>
											<div class="barGroup text-center mt-md-4 pt-md-3 pt-2">
												<div class="bars position-relative d-md-flex d-none justify-content-center align-items-center mb-3"><span class="d-inline-flex fs-xl14 fs-13 align-items-center justify-content-center commonBar w-xl30px w-25px h-xl30px h-25px rounded-circle overflow-hidden">8</span></div>
												<div class="postTitle fs-xxl-13 fs-12 mb-1">Makeup Artist</div>
												<div class="userName fw-semibold fs-xxl-16 fs-14">Rushda</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md col-sm-4 col-6 item">
									<div class="card bg-transparent border-0 card2 cards4">
										<div class="card-body p-0">
											<div class="cardImg mx-auto rounded-circle w-xl-150px w-lg-140px w-120px h-xl-150px h-lg-140px h-120px overflow-hidden">
												<img src="{{ asset('/resources/views/frontend/assets/img/new-team/Pankaj_Sharma_Sr_Videographer.jpg') }}" class="w-100 h-100" alt="">
											</div>
											<div class="barGroup text-center mt-md-4 pt-md-3 pt-2">
												<div class="bars position-relative d-md-flex d-none justify-content-center align-items-center mb-3"><span class="d-inline-flex fs-xl14 fs-13 align-items-center justify-content-center commonBar w-xl30px w-25px h-xl30px h-25px rounded-circle overflow-hidden">9</span></div>
												<div class="postTitle fs-xxl-13 fs-12 mb-1">Sr. Videographer</div>
												<div class="userName fw-semibold fs-xxl-16 fs-14">Pankaj Sharma</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md col-sm-4 col-6 item">
									<div class="card bg-transparent border-0 card1 cards5">
										<div class="card-body p-0">
											<div class="cardImg mx-auto rounded-circle w-xl-150px w-lg-140px w-120px h-xl-150px h-lg-140px h-120px overflow-hidden">
												<img src="{{ asset('/resources/views/frontend/assets/img/new-team/Parveen_kumar_Sr_Photographer.jpeg') }}" class="w-100 h-100" alt="">
											</div>
											<div class="barGroup text-center mt-md-4 pt-md-3 pt-2">
												<div class="bars position-relative d-md-flex d-none justify-content-center align-items-center mb-3"><span class="d-inline-flex fs-xl14 fs-13 align-items-center justify-content-center commonBar w-xl30px w-25px h-xl30px h-25px rounded-circle overflow-hidden">10</span></div>
												<div class="postTitle fs-xxl-13 fs-12 mb-1">Sr. Photographer</div>
												<div class="userName fw-semibold fs-xxl-16 fs-14">Praveen Kumar</div>
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
	<div class="container-fluid testimonialsGroup mblg-5 py5 text-white">
		<div class="container innerfluid">
			<div class="row teamcard mx-lg-5">
				<div class="col-xxl10 col-xl11 col-lg-11 col-12 mx-auto">
					<div class="card border-0 teamcard bg-transparent pb-lg-5 pb-4 px-lg-0 px-md-5">
						<div class="innerbody px-lg-3 py-3 p-0 px-xl-5">
							<div class="testimonial pt-lg-5 pt-4 row gx-0 gy-md-0 gy-4 justify-content-center mx-xxl-5 mx-xl5">
								<div class="col-md col-sm-4 col-6 item">
									<div class="card bg-transparent border-0 card1 cards1">
										<div class="card-body p-0">
											<div class="cardImg mx-auto rounded-circle w-xl-150px w-lg-140px w-120px h-xl-150px h-lg-140px h-120px overflow-hidden">
												<img src="{{ asset('/resources/views/frontend/assets/img/new-team/Sandeep_Ranga_videographer.jpg') }}" class="w-100 h-100" alt="">
											</div>
											<div class="barGroup text-center mt-md-4 pt-md-3 pt-2">
												<div class="bars position-relative d-md-flex d-none justify-content-center align-items-center mb-3"><span class="d-inline-flex fs-xl14 fs-13 align-items-center justify-content-center commonBar w-xl30px w-25px h-xl30px h-25px rounded-circle overflow-hidden bg-white text-dark">11</span></div>
												<div class="postTitle fs-xxl-13 fs-12 mb-1">Videographer</div>
												<div class="userName fw-semibold fs-xxl-16 fs-14">Sandeep Ranga</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md col-sm-4 col-6 item">
									<div class="card bg-transparent border-0 card2 cards2">
										<div class="card-body p-0">
											<div class="cardImg mx-auto rounded-circle w-xl-150px w-lg-140px w-120px h-xl-150px h-lg-140px h-120px overflow-hidden">
												<img src="{{ asset('/resources/views/frontend/assets/img/new-team/Rohit_Cinematographer.jpeg') }}" class="w-100 h-100" alt="">
											</div>
											<div class="barGroup text-center mt-md-4 pt-md-3 pt-2">
												<div class="bars position-relative d-md-flex d-none justify-content-center align-items-center mb-3"><span class="d-inline-flex fs-xl14 fs-13 align-items-center justify-content-center commonBar w-xl30px w-25px h-xl30px h-25px rounded-circle overflow-hidden">12</span></div>
												<div class="postTitle fs-xxl-13 fs-12 mb-1 ">Cinematographer</div>
												<div class="userName fw-semibold fs-xxl-16 fs-14">Rohit</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md col-sm-4 col-6 item">
									<div class="card bg-transparent border-0 mainCard cards3">
										<div class="card-body p-0">
											<div class="cardImg mx-auto rounded-circle w-xl-150px w-lg-140px w-120px h-xl-150px h-lg-140px h-120px overflow-hidden">
												<img src="{{ asset('/resources/views/frontend/assets/img/new-team/Rahul_Rajput_Cinematographer.jpeg') }}" class="w-100 h-100" alt="">
											</div>
											<div class="barGroup text-center mt-md-4 pt-md-3 pt-2">
												<div class="bars position-relative d-md-flex d-none justify-content-center align-items-center mb-3"><span class="d-inline-flex fs-xl14 fs-13 align-items-center justify-content-center commonBar w-xl30px w-25px h-xl30px h-25px rounded-circle overflow-hidden">13</span></div>
												<div class="postTitle fs-xxl-13 fs-12 mb-1">Cinematographer</div>
												<div class="userName fw-semibold fs-xxl-16 fs-14">Rahul Rajput</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md col-sm-4 col-6 item">
									<div class="card bg-transparent border-0 card2 cards4">
										<div class="card-body p-0">
											<div class="cardImg mx-auto rounded-circle w-xl-150px w-lg-140px w-120px h-xl-150px h-lg-140px h-120px overflow-hidden">
												<img src="{{ asset('/resources/views/frontend/assets/img/new-team/Sibu_Mandal_Jr_Photographer.jpg') }}" class="w-100 h-100" alt="">
											</div>
											<div class="barGroup text-center mt-md-4 pt-md-3 pt-2">
												<div class="bars position-relative d-md-flex d-none justify-content-center align-items-center mb-3"><span class="d-inline-flex fs-xl14 fs-13 align-items-center justify-content-center commonBar w-xl30px w-25px h-xl30px h-25px rounded-circle overflow-hidden">14</span></div>
												<div class="postTitle fs-xxl-13 fs-12 mb-1">Jr. Photographer</div>
												<div class="userName fw-semibold fs-xxl-16 fs-14">Sibu Mandal</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md col-sm-4 col-6 item">
									<div class="card bg-transparent border-0 card1 cards5">
										<div class="card-body p-0">
											<div class="cardImg mx-auto rounded-circle w-xl-150px w-lg-140px w-120px h-xl-150px h-lg-140px h-120px overflow-hidden">
												<img src="{{ asset('/resources/views/frontend/assets/img/new-team/Navneet_Jakhar_Content_designer.jpeg') }}" class="w-100 h-100" alt="">
											</div>
											<div class="barGroup text-center mt-md-4 pt-md-3 pt-2">
												<div class="bars position-relative d-md-flex d-none justify-content-center align-items-center mb-3"><span class="d-inline-flex fs-xl14 fs-13 align-items-center justify-content-center commonBar w-xl30px w-25px h-xl30px h-25px rounded-circle overflow-hidden">15</span></div>
												<div class="postTitle fs-xxl-13 fs-12 mb-1">Content Designer</div>
												<div class="userName fw-semibold fs-xxl-16 fs-14">Navneet Jakhar</div>
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


	<!-- <div class="container-fluid py-5 topsection text-white">
        <div class="container px-lg-5 px-3">
            <div class="row">
                <div class="section-title col-12">
                    <h4 class="fs-lg-35 fs-md-30 fs-20 text-center text-white">Our Studios</h4>
                    <div class=""><img src="{{ asset('/public') }}/frontend_assets/img/unnamed.png"
                            class="img-fluid h-5px w-100" alt="Our Expertise"></div>
                    <div class="fs-lg-15 fs-14 text-center mt-lg-5 mt-4">
						<div class="d-inline-flex align-items-center text-uppercase flexauratheme fw-600"><span>FLIX</span>AURA</div> is not a new name in the media line, we
                        are working for 5+ years. We have worked before with Edtech shoot, corporate film shoot,
                        corporate ad films
                        shoot, short films shoot, first birthday shoot, documentary shoot, Newborn baby shoot, baby
                        shoot, in-house studio shoot, outdoor photo shoot, music album shoot,
                        full product shoot, and drone shoot. Also worked with all kinds of corporate shoots like hotels
                        shoot, hospitals shoot, café shoot, gyms shoot, factories shoot, stores,
                        etc. Here is some of the work listed.
					</div>
                </div>
            </div>
		</div>
	</div> -->


	<!-- <div class="container-fluid mt5 text-white mb-lg5 mb-0 py-5 ourTopTeamSection ">
		<div class="container innersection mt-lg-5">
			<div class="row px-xl-4 px-md-5">
				<div class="col-4 maincard position-relative card1 d-xl-block d-none">
					<div class="h-100">
						<div class="userImg"><img src="{{ asset('/resources/views/frontend/assets/img/team2.jpg') }}" class="w-100" alt=""></div>
						<div class="user_name username2 text-white-50 text-uppercase fw-600 fs-xxl-30 fs-lg-28 fs-md-25 fs-22 d-md-block d-none">Khushhal</div>
					</div>
				</div>
				<div class="col-xl-6 mb-xl-0 mb-5 pb-xl-0 pb-5 d-xl-none d-block">
					<div class="row maincard position-relative card1 align-items-xl-end">
						<div class="col-xl-6 col-lg-4 col-sm-5 col-8 mx-auto mb-sm-0 mb-4">
							<div class="userImg"><img src="{{ asset('/resources/views/frontend/assets/img/team2.jpg') }}" class="w-100" alt=""></div>
							<div class="user_name username2 text-white-50 text-uppercase fw-600 fs-xxl-30 fs-lg-28 fs-md-25 fs-22 d-md-block d-none">Khushhal</div>
						</div>
						<div class="col-xl-6 col-lg-8 col-sm-7">
							<div class="ms-lg-5 ms-sm-4">
								<div class="userHeading text-uppercase mb-xxl3 mb-xl2 mb-md3 mb-1 fw-600 fs-xxl-23 fs-xl-19 fs-lg-24 fs-md-22 fs-20">Khushhal Singh</div>
								<div class="text-white-75 fs-xl-14 fs-lg-15 fs-14 mb-xxl-3 mb-xl-2 mb-md-3 mb-2 fw-light innerText">Creative Director</div>
								<div class="text-white-50 fs-xl-12 fs-lg-13 fs-12 mb-xxl-3 mb-xl-2 mb-md-3 mb-2 fw-light innerText">Khushhal Singh has been associated with Films, Cinematography, and Photography for close to 10 years.</div>
								<button type="button" class="d-inline-flex shadow-none border-0 bg-transparent w-lg50px w-40px h-lg30px h-26px justify-content-center align-items-center arrowBtn arrow2 position-relative"><span class="d-flex align-items-center justify-content-center w-lg25px w-20px h-lg20px h-15px"><img src="{{ asset('/public/frontend_assets/img/rightSingalArrow.svg') }}" class="w-100 h-100" alt=""></span></button>
							</div>
						</div>
					</div>
				</div>
				<div class="col-4 d-xl-block d-none">
					<div class="row">
						<div class="col-12 maincard">
							<div class="ms-lg-5 ms-4">
								<div class="userHeading text-uppercase mb-xxl3 mb-xl2 mb-md3 mb-1 fw-600 fs-xxl-23 fs-xl-19 fs-lg-24 fs-md-22 fs-20">Neeraj Rajput</div>
								<div class="text-white-75 fs-xl-14 fs-lg-15 fs-14 mb-xxl-3 mb-xl-2 mb-md-3 mb-2 fw-light innerText">Managing Director </div>
								<div class="text-white-50 fs-xl-12 fs-lg-13 fs-12 mb-xxl-3 mb-xl-2 mb-md-3 mb-2 fw-light innerText">Neeraj has been associated with IT, Consulting, and management for close to 10 years.</div>
								<button type="button" class="d-inline-flex shadow-none border-0 bg-transparent w-lg50px w-40px h-lg30px h-26px justify-content-center align-items-center arrowBtn position-relative"><span class="d-flex align-items-center justify-content-center w-lg25px w-20px h-lg20px h-15px"><img src="{{ asset('/public/frontend_assets/img/rightSingalArrow.svg') }}" class="w-100 h-100" alt=""></span></button>
								<div class="borderd my-4"></div>
							</div>
						</div>
						<div class="col-12 maincard">
							<div class="ms-lg-5 ms-4">
								<div class="userHeading text-uppercase mb-xxl3 mb-xl2 mb-md3 mb-1 fw-600 fs-xxl-23 fs-xl-19 fs-lg-24 fs-md-22 fs-20">Khushhal Singh</div>
								<div class="text-white-75 fs-xl-14 fs-lg-15 fs-14 mb-xxl-3 mb-xl-2 mb-md-3 mb-2 fw-light innerText">Creative Director</div>
								<div class="text-white-50 fs-xl-12 fs-lg-13 fs-12 mb-xxl-3 mb-xl-2 mb-md-3 mb-2 fw-light innerText">Khushhal Singh has been associated with Films, Cinematography, and Photography for close to 10 years.</div>
								<button type="button" class="d-inline-flex shadow-none border-0 bg-transparent w-lg50px w-40px h-lg30px h-26px justify-content-center align-items-center arrowBtn arrow2 position-relative"><span class="d-flex align-items-center justify-content-center w-lg25px w-20px h-lg20px h-15px"><img src="{{ asset('/public/frontend_assets/img/rightSingalArrow.svg') }}" class="w-100 h-100" alt=""></span></button>
							</div>
						</div>
					</div>
				</div>
				<div class="col-4 maincard position-relative card2 d-xl-block d-none">
					<div class="h-100">
						<div class="userImg team2UserName"><img src="{{ asset('/resources/views/frontend/assets/img/Neerajrajput.jpg') }}" class="w-100" alt=""></div>
						<div class="user_name username2 text-white-50 text-uppercase fw-600 fs-xxl-30 fs-lg-28 fs-md-25 fs-22 d-md-block d-none">Neeraj</div>
					</div>
				</div>
				<div class="col-xl-6 d-xl-none d-block">
					<div class="row maincard card2 align-items-xl-end">
						<div class="col-xl-6 col-lg-8 col-sm-7 order-sm-1 order-2">
							<div class="mx-xl-3 me-4 pe-xl-0 pe-2">
								<div class="userHeading text-uppercase mb-xxl3 mb-xl2 mb-md3 mb-1 fw-600 fs-xxl-23 fs-xl-19 fs-lg-24 fs-md-22 fs-20">Neeraj Rajput</div>
								<div class="text-white-75 fs-xl-14 fs-lg-15 fs-14 mb-xxl-3 mb-xl-2 mb-md-3 mb-2 fw-light innerText">Managing Director </div>
								<div class="text-white-50 fs-xl-12 fs-lg-13 fs-12 mb-xxl-3 mb-xl-2 mb-md-3 mb-2 fw-light innerText">Neeraj has been associated with IT, Consulting, and management for close to 10 years.</div>
								<button type="button" class="d-inline-flex shadow-none border-0 bg-transparent w-lg50px w-40px h-lg30px h-26px justify-content-center align-items-center arrowBtn position-relative"><span class="d-flex align-items-center justify-content-center w-lg25px w-20px h-lg20px h-15px"><img src="{{ asset('/public/frontend_assets/img/rightSingalArrow.svg') }}" class="w-100 h-100" alt=""></span></button>
							</div>
						</div>
						<div class="col-xl-6 col-lg-4 col-sm-5 col-8 mx-auto order-sm-2 order-1 mb-sm-0 mb-4">
							<div class="userImg team2UserName"><img src="{{ asset('/resources/views/frontend/assets/img/Neerajrajput.jpg') }}" class="w-100" alt=""></div>
							{{-- img ki size 281 x 453  hi dale  --}}
							<div class="user_name username2 text-white-50 text-uppercase fw-600 fs-xxl-30 fs-lg-28 fs-md-25 fs-22 d-md-block d-none">Neeraj</div>
						</div>
					</div>
				</div>
				{{-- <div class="col-xl-6 mb-xl-0 mb-5 pb-xl-0 pb-5">
					<div class="row maincard position-relative card1 align-items-xl-end">
						<div class="col-xl-6 col-sm-4 col-8 mx-auto mb-sm-0 mb-4">
							<div class="userImg"><img src="{{ asset('/resources/views/frontend/assets/img/team2.png') }}" class="w-100" alt=""></div>
							<div class="user_name username2 text-uppercase fw-600 fs-xxl-30 fs-lg-28 fs-md-25 fs-22 d-md-block d-none">Khushhal</div>
						</div>
						<div class="col-xl-6 col-sm-8">
							<div class="ms-lg-5 ms-4">
								<div class="userHeading text-uppercase mb-xxl-3 mb-xl-2 mb-md-3 mb-2 fw-600 fs-xxl-23 fs-xl-19 fs-lg-24 fs-md-22 fs-20">i have some ideas</div>
								<div class="text-white-50 fs-xl-12 fs-lg-13 fs-12 fw-light innerText mb-xxl-3 mb-xl-2 mb-md-3 mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus nesciunt repellat, explicabo reiciendis laudantium atque nihil at ad magnam provident magni quam nemo. Illum, dignissimos.</div>
								<div class="text-white-50 fs-xl-12 fs-lg-13 fs-12 fw-light innerText mb-xxl-3 mb-xl-2 mb-md-3 mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, molestiae amet quod sint beatae aliquid!</div>
								<div class="text-white-50 fs-xl-12 fs-lg-13 fs-12 fw-light innerText mb-xxl-3 mb-xl-2 mb-md-3 mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos fuga adipisci quidem ab velit reprehenderit!</div>
								<button type="button" class="d-inline-flex shadow-none border-0 bg-transparent w-lg50px w-40px h-lg30px h-26px justify-content-center align-items-center arrowBtn position-relative"><span class="d-flex align-items-center justify-content-center w-lg25px w-20px h-lg20px h-15px"><img src="{{ asset('/public/frontend_assets/img/rightSingalArrow.svg') }}" class="w-100 h-100" alt=""></span></button>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-6">
					<div class="row maincard card2 align-items-xl-end">
						<div class="col-xl-6 col-sm-8 order-sm-1 order-2">
							<div class="mx-xl-3 me-4 pe-xl-0 pe-2">
								<div class="userHeading text-uppercase mb-xxl-3 mb-xl-2 mb-md-3 mb-2 fw-600 text-black fs-xxl-23 fs-xl-19 fs-lg-24 fs-md-22 fs-20">i have some ideas</div>
								<div class="text-white-50 fs-xl-12 fs-lg-13 fs-12 fw-light innerText mb-xxl-3 mb-xl-2 mb-md-3 mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus nesciunt repellat, explicabo reiciendis laudantium atque nihil at ad magnam provident magni quam nemo. Illum, dignissimos.</div>
								<div class="text-white-50 fs-xl-12 fs-lg-13 fs-12 fw-light innerText mb-xxl-3 mb-xl-2 mb-md-3 mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, molestiae amet quod sint beatae aliquid!</div>
								<div class="text-white-50 fs-xl-12 fs-lg-13 fs-12 fw-light innerText mb-xxl-3 mb-xl-2 mb-md-3 mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos fuga adipisci quidem ab velit reprehenderit!</div>
								<button type="button" class="d-inline-flex shadow-none border-0 bg-transparent w-lg50px w-40px h-lg30px h-26px justify-content-center align-items-center arrowBtn position-relative"><span class="d-flex align-items-center justify-content-center w-lg25px w-20px h-lg20px h-15px"><img src="{{ asset('/public/frontend_assets/img/rightSingalArrow.svg') }}" class="w-100 h-100" alt=""></span></button>
							</div>
						</div>
						<div class="col-xl-6 col-sm-4 col-8 mx-auto order-sm-2 order-1 mb-sm-0 mb-4">
							<div class="userImg team2UserName"><img src="{{ asset('/resources/views/frontend/assets/img/Neerajrajput.png') }}" class="w-100" alt=""></div>
							<div class="user_name username2 text-uppercase fw-600 fs-xxl-30 fs-lg-28 fs-md-25 fs-22 d-md-block d-none">Neeraj</div>
						</div>
					</div>
				</div> --}}
			</div>
			<div class="row px-md-5 d-none">
				<div class="col-xl-6 mb-xl-0 mb-5 pb-xl-0 pb-5">
					<div class="row maincard position-relative card1 align-items-xl-end">
						<div class="col-xl-6 col-sm-4 col-8 mx-auto mb-sm-0 mb-4">
							<div class="userImg"><img src="{{ asset('/resources/views/frontend/assets/img/team2.png') }}" class="w-100" alt=""></div>
							{{-- img ki size 281 x 453  hi dale  --}}
							<div class="user_name username2 text-uppercase fw-600 fs-xxl-30 fs-lg-28 fs-md-25 fs-22 d-md-block d-none">Khushhal</div>
						</div>
						<div class="col-xl-6 col-sm-8">
							<div class="ms-lg-5 ms-4">
								<div class="userHeading text-uppercase mb-xxl-3 mb-xl-2 mb-md-3 mb-2 fw-600 fs-xxl-23 fs-xl-19 fs-lg-24 fs-md-22 fs-20">i have some ideas</div>
								<div class="text-white-50 fs-xl-12 fs-lg-13 fs-12 fw-light innerText mb-xxl-3 mb-xl-2 mb-md-3 mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus nesciunt repellat, explicabo reiciendis laudantium atque nihil at ad magnam provident magni quam nemo. Illum, dignissimos.</div>
								<div class="text-white-50 fs-xl-12 fs-lg-13 fs-12 fw-light innerText mb-xxl-3 mb-xl-2 mb-md-3 mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, molestiae amet quod sint beatae aliquid!</div>
								<div class="text-white-50 fs-xl-12 fs-lg-13 fs-12 fw-light innerText mb-xxl-3 mb-xl-2 mb-md-3 mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos fuga adipisci quidem ab velit reprehenderit!</div>
								<button type="button" class="d-inline-flex shadow-none border-0 bg-transparent w-lg50px w-40px h-lg30px h-26px justify-content-center align-items-center arrowBtn position-relative"><span class="d-flex align-items-center justify-content-center w-lg25px w-20px h-lg20px h-15px"><img src="{{ asset('/public/frontend_assets/img/rightSingalArrow.svg') }}" class="w-100 h-100" alt=""></span></button>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-6">
					<div class="row maincard card2 align-items-xl-end">
						<div class="col-xl-6 col-sm-8 order-sm-1 order-2">
							<div class="mx-xl-3 me-4 pe-xl-0 pe-2">
								<div class="userHeading text-uppercase mb-xxl-3 mb-xl-2 mb-md-3 mb-2 fw-600 text-black fs-xxl-23 fs-xl-19 fs-lg-24 fs-md-22 fs-20">i have some ideas</div>
								<div class="text-white-50 fs-xl-12 fs-lg-13 fs-12 fw-light innerText mb-xxl-3 mb-xl-2 mb-md-3 mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus nesciunt repellat, explicabo reiciendis laudantium atque nihil at ad magnam provident magni quam nemo. Illum, dignissimos.</div>
								<div class="text-white-50 fs-xl-12 fs-lg-13 fs-12 fw-light innerText mb-xxl-3 mb-xl-2 mb-md-3 mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, molestiae amet quod sint beatae aliquid!</div>
								<div class="text-white-50 fs-xl-12 fs-lg-13 fs-12 fw-light innerText mb-xxl-3 mb-xl-2 mb-md-3 mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos fuga adipisci quidem ab velit reprehenderit!</div>
								<button type="button" class="d-inline-flex shadow-none border-0 bg-transparent w-lg50px w-40px h-lg30px h-26px justify-content-center align-items-center arrowBtn position-relative"><span class="d-flex align-items-center justify-content-center w-lg25px w-20px h-lg20px h-15px"><img src="{{ asset('/public/frontend_assets/img/rightSingalArrow.svg') }}" class="w-100 h-100" alt=""></span></button>
							</div>
						</div>
						<div class="col-xl-6 col-sm-4 col-8 mx-auto order-sm-2 order-1 mb-sm-0 mb-4">
							<div class="userImg team2UserName"><img src="{{ asset('/resources/views/frontend/assets/img/Neerajrajput.png') }}" class="w-100" alt=""></div>
							{{-- img ki size 281 x 453  hi dale  --}}
							<div class="user_name username2 text-uppercase fw-600 fs-xxl-30 fs-lg-28 fs-md-25 fs-22 d-md-block d-none">Neeraj</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> -->

	<!-- <div class="container-fluid mt5 text-white mb-lg5 mb-0 py-5 ourTopTeamSection ">
		<div class="container innersection mt5 my-lg-5">
			<div class="row px-xl-4 px-md-5">
				<div class="col-4 maincard position-relative card1 d-xl-block d-none">
					<div class="h-100">
						<div class="userImg"><img src="{{ asset('/resources/views/frontend/assets/img/team2.jpg') }}" class="w-100" alt=""></div>
						<div class="user_name username2 text-white-50 text-uppercase fw-600 fs-xxl-30 fs-lg-28 fs-md-25 fs-22 d-md-block d-none">Khushhal</div>
					</div>
				</div>
				<div class="col-xl-6 mb-xl-0 mb-5 pb-xl-0 pb-5 d-xl-none d-block">
					<div class="row maincard position-relative card1 align-items-xl-end">
						<div class="col-xl-6 col-lg-4 col-sm-5 col-8 mx-auto mb-sm-0 mb-4">
							<div class="userImg"><img src="{{ asset('/resources/views/frontend/assets/img/team2.jpg') }}" class="w-100" alt=""></div>
							<div class="user_name username2 text-white-50 text-uppercase fw-600 fs-xxl-30 fs-lg-28 fs-md-25 fs-22 d-md-block d-none">Khushhal</div>
						</div>
						<div class="col-xl-6 col-lg-8 col-sm-7">
							<div class="ms-lg-5 ms-sm-4">
								<div class="userHeading text-uppercase mb-xxl3 mb-xl2 mb-md3 mb-1 fw-600 fs-xxl-23 fs-xl-19 fs-lg-24 fs-md-22 fs-20">Khushhal Singh</div>
								<div class="text-white-75 fs-xl-14 fs-lg-15 fs-14 mb-xxl-3 mb-xl-2 mb-md-3 mb-2 fw-light innerText">Creative Director</div>
								<div class="text-white-50 fs-xl-12 fs-lg-13 fs-12 mb-xxl-3 mb-xl-2 mb-md-3 mb-2 fw-light innerText">Khushhal Singh has been associated with Films, Cinematography, and Photography for close to 10 years.</div>
								<button type="button" class="d-inline-flex shadow-none border-0 bg-transparent w-lg50px w-40px h-lg30px h-26px justify-content-center align-items-center arrowBtn arrow2 position-relative"><span class="d-flex align-items-center justify-content-center w-lg25px w-20px h-lg20px h-15px"><img src="{{ asset('/public/frontend_assets/img/rightSingalArrow.svg') }}" class="w-100 h-100" alt=""></span></button>
							</div>
						</div>
					</div>
				</div>
				<div class="col-4 d-xl-block d-none">
					<div class="row">
						<div class="col-12 maincard">
							<div class="ms-lg-5 ms-4">
								<div class="userHeading text-uppercase mb-xxl3 mb-xl2 mb-md3 mb-1 fw-600 fs-xxl-23 fs-xl-19 fs-lg-24 fs-md-22 fs-20">Neeraj Rajput</div>
								<div class="text-white-75 fs-xl-14 fs-lg-15 fs-14 mb-xxl-3 mb-xl-2 mb-md-3 mb-2 fw-light innerText">Managing Director </div>
								<div class="text-white-50 fs-xl-12 fs-lg-13 fs-12 mb-xxl-3 mb-xl-2 mb-md-3 mb-2 fw-light innerText">Neeraj has been associated with IT, Consulting, and management for close to 10 years.</div>
								<button type="button" class="d-inline-flex shadow-none border-0 bg-transparent w-lg50px w-40px h-lg30px h-26px justify-content-center align-items-center arrowBtn position-relative"><span class="d-flex align-items-center justify-content-center w-lg25px w-20px h-lg20px h-15px"><img src="{{ asset('/public/frontend_assets/img/rightSingalArrow.svg') }}" class="w-100 h-100" alt=""></span></button>
								<div class="borderd my-4"></div>
							</div>
						</div>
						<div class="col-12 maincard">
							<div class="ms-lg-5 ms-4">
								<div class="userHeading text-uppercase mb-xxl3 mb-xl2 mb-md3 mb-1 fw-600 fs-xxl-23 fs-xl-19 fs-lg-24 fs-md-22 fs-20">Khushhal Singh</div>
								<div class="text-white-75 fs-xl-14 fs-lg-15 fs-14 mb-xxl-3 mb-xl-2 mb-md-3 mb-2 fw-light innerText">Creative Director</div>
								<div class="text-white-50 fs-xl-12 fs-lg-13 fs-12 mb-xxl-3 mb-xl-2 mb-md-3 mb-2 fw-light innerText">Khushhal Singh has been associated with Films, Cinematography, and Photography for close to 10 years.</div>
								<button type="button" class="d-inline-flex shadow-none border-0 bg-transparent w-lg50px w-40px h-lg30px h-26px justify-content-center align-items-center arrowBtn arrow2 position-relative"><span class="d-flex align-items-center justify-content-center w-lg25px w-20px h-lg20px h-15px"><img src="{{ asset('/public/frontend_assets/img/rightSingalArrow.svg') }}" class="w-100 h-100" alt=""></span></button>
							</div>
						</div>
					</div>
				</div>
				<div class="col-4 maincard position-relative card2 d-xl-block d-none">
					<div class="h-100">
						<div class="userImg team2UserName"><img src="{{ asset('/resources/views/frontend/assets/img/Neerajrajput.jpg') }}" class="w-100" alt=""></div>
						<div class="user_name username2 text-white-50 text-uppercase fw-600 fs-xxl-30 fs-lg-28 fs-md-25 fs-22 d-md-block d-none">Neeraj</div>
					</div>
				</div>
				<div class="col-xl-6 d-xl-none d-block">
					<div class="row maincard card2 align-items-xl-end">
						<div class="col-xl-6 col-lg-8 col-sm-7 order-sm-1 order-2">
							<div class="mx-xl-3 me-4 pe-xl-0 pe-2">
								<div class="userHeading text-uppercase mb-xxl3 mb-xl2 mb-md3 mb-1 fw-600 fs-xxl-23 fs-xl-19 fs-lg-24 fs-md-22 fs-20">Neeraj Rajput</div>
								<div class="text-white-75 fs-xl-14 fs-lg-15 fs-14 mb-xxl-3 mb-xl-2 mb-md-3 mb-2 fw-light innerText">Managing Director </div>
								<div class="text-white-50 fs-xl-12 fs-lg-13 fs-12 mb-xxl-3 mb-xl-2 mb-md-3 mb-2 fw-light innerText">Neeraj has been associated with IT, Consulting, and management for close to 10 years.</div>
								<button type="button" class="d-inline-flex shadow-none border-0 bg-transparent w-lg50px w-40px h-lg30px h-26px justify-content-center align-items-center arrowBtn position-relative"><span class="d-flex align-items-center justify-content-center w-lg25px w-20px h-lg20px h-15px"><img src="{{ asset('/public/frontend_assets/img/rightSingalArrow.svg') }}" class="w-100 h-100" alt=""></span></button>
							</div>
						</div>
						<div class="col-xl-6 col-lg-4 col-sm-5 col-8 mx-auto order-sm-2 order-1 mb-sm-0 mb-4">
							<div class="userImg team2UserName"><img src="{{ asset('/resources/views/frontend/assets/img/Neerajrajput.jpg') }}" class="w-100" alt=""></div>
							{{-- img ki size 281 x 453  hi dale  --}}
							<div class="user_name username2 text-white-50 text-uppercase fw-600 fs-xxl-30 fs-lg-28 fs-md-25 fs-22 d-md-block d-none">Neeraj</div>
						</div>
					</div>
				</div>
				{{-- <div class="col-xl-6 mb-xl-0 mb-5 pb-xl-0 pb-5">
					<div class="row maincard position-relative card1 align-items-xl-end">
						<div class="col-xl-6 col-sm-4 col-8 mx-auto mb-sm-0 mb-4">
							<div class="userImg"><img src="{{ asset('/resources/views/frontend/assets/img/team2.png') }}" class="w-100" alt=""></div>
							<div class="user_name username2 text-uppercase fw-600 fs-xxl-30 fs-lg-28 fs-md-25 fs-22 d-md-block d-none">Khushhal</div>
						</div>
						<div class="col-xl-6 col-sm-8">
							<div class="ms-lg-5 ms-4">
								<div class="userHeading text-uppercase mb-xxl-3 mb-xl-2 mb-md-3 mb-2 fw-600 fs-xxl-23 fs-xl-19 fs-lg-24 fs-md-22 fs-20">i have some ideas</div>
								<div class="text-white-50 fs-xl-12 fs-lg-13 fs-12 fw-light innerText mb-xxl-3 mb-xl-2 mb-md-3 mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus nesciunt repellat, explicabo reiciendis laudantium atque nihil at ad magnam provident magni quam nemo. Illum, dignissimos.</div>
								<div class="text-white-50 fs-xl-12 fs-lg-13 fs-12 fw-light innerText mb-xxl-3 mb-xl-2 mb-md-3 mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, molestiae amet quod sint beatae aliquid!</div>
								<div class="text-white-50 fs-xl-12 fs-lg-13 fs-12 fw-light innerText mb-xxl-3 mb-xl-2 mb-md-3 mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos fuga adipisci quidem ab velit reprehenderit!</div>
								<button type="button" class="d-inline-flex shadow-none border-0 bg-transparent w-lg50px w-40px h-lg30px h-26px justify-content-center align-items-center arrowBtn position-relative"><span class="d-flex align-items-center justify-content-center w-lg25px w-20px h-lg20px h-15px"><img src="{{ asset('/public/frontend_assets/img/rightSingalArrow.svg') }}" class="w-100 h-100" alt=""></span></button>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-6">
					<div class="row maincard card2 align-items-xl-end">
						<div class="col-xl-6 col-sm-8 order-sm-1 order-2">
							<div class="mx-xl-3 me-4 pe-xl-0 pe-2">
								<div class="userHeading text-uppercase mb-xxl-3 mb-xl-2 mb-md-3 mb-2 fw-600 text-black fs-xxl-23 fs-xl-19 fs-lg-24 fs-md-22 fs-20">i have some ideas</div>
								<div class="text-white-50 fs-xl-12 fs-lg-13 fs-12 fw-light innerText mb-xxl-3 mb-xl-2 mb-md-3 mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus nesciunt repellat, explicabo reiciendis laudantium atque nihil at ad magnam provident magni quam nemo. Illum, dignissimos.</div>
								<div class="text-white-50 fs-xl-12 fs-lg-13 fs-12 fw-light innerText mb-xxl-3 mb-xl-2 mb-md-3 mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, molestiae amet quod sint beatae aliquid!</div>
								<div class="text-white-50 fs-xl-12 fs-lg-13 fs-12 fw-light innerText mb-xxl-3 mb-xl-2 mb-md-3 mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos fuga adipisci quidem ab velit reprehenderit!</div>
								<button type="button" class="d-inline-flex shadow-none border-0 bg-transparent w-lg50px w-40px h-lg30px h-26px justify-content-center align-items-center arrowBtn position-relative"><span class="d-flex align-items-center justify-content-center w-lg25px w-20px h-lg20px h-15px"><img src="{{ asset('/public/frontend_assets/img/rightSingalArrow.svg') }}" class="w-100 h-100" alt=""></span></button>
							</div>
						</div>
						<div class="col-xl-6 col-sm-4 col-8 mx-auto order-sm-2 order-1 mb-sm-0 mb-4">
							<div class="userImg team2UserName"><img src="{{ asset('/resources/views/frontend/assets/img/Neerajrajput.png') }}" class="w-100" alt=""></div>
							<div class="user_name username2 text-uppercase fw-600 fs-xxl-30 fs-lg-28 fs-md-25 fs-22 d-md-block d-none">Neeraj</div>
						</div>
					</div>
				</div> --}}
			</div>
			<div class="row px-md-5 d-none">
				<div class="col-xl-6 mb-xl-0 mb-5 pb-xl-0 pb-5">
					<div class="row maincard position-relative card1 align-items-xl-end">
						<div class="col-xl-6 col-sm-4 col-8 mx-auto mb-sm-0 mb-4">
							<div class="userImg"><img src="{{ asset('/resources/views/frontend/assets/img/team2.png') }}" class="w-100" alt=""></div>
							{{-- img ki size 281 x 453  hi dale  --}}
							<div class="user_name username2 text-uppercase fw-600 fs-xxl-30 fs-lg-28 fs-md-25 fs-22 d-md-block d-none">Khushhal</div>
						</div>
						<div class="col-xl-6 col-sm-8">
							<div class="ms-lg-5 ms-4">
								<div class="userHeading text-uppercase mb-xxl-3 mb-xl-2 mb-md-3 mb-2 fw-600 fs-xxl-23 fs-xl-19 fs-lg-24 fs-md-22 fs-20">i have some ideas</div>
								<div class="text-white-50 fs-xl-12 fs-lg-13 fs-12 fw-light innerText mb-xxl-3 mb-xl-2 mb-md-3 mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus nesciunt repellat, explicabo reiciendis laudantium atque nihil at ad magnam provident magni quam nemo. Illum, dignissimos.</div>
								<div class="text-white-50 fs-xl-12 fs-lg-13 fs-12 fw-light innerText mb-xxl-3 mb-xl-2 mb-md-3 mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, molestiae amet quod sint beatae aliquid!</div>
								<div class="text-white-50 fs-xl-12 fs-lg-13 fs-12 fw-light innerText mb-xxl-3 mb-xl-2 mb-md-3 mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos fuga adipisci quidem ab velit reprehenderit!</div>
								<button type="button" class="d-inline-flex shadow-none border-0 bg-transparent w-lg50px w-40px h-lg30px h-26px justify-content-center align-items-center arrowBtn position-relative"><span class="d-flex align-items-center justify-content-center w-lg25px w-20px h-lg20px h-15px"><img src="{{ asset('/public/frontend_assets/img/rightSingalArrow.svg') }}" class="w-100 h-100" alt=""></span></button>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-6">
					<div class="row maincard card2 align-items-xl-end">
						<div class="col-xl-6 col-sm-8 order-sm-1 order-2">
							<div class="mx-xl-3 me-4 pe-xl-0 pe-2">
								<div class="userHeading text-uppercase mb-xxl-3 mb-xl-2 mb-md-3 mb-2 fw-600 text-black fs-xxl-23 fs-xl-19 fs-lg-24 fs-md-22 fs-20">i have some ideas</div>
								<div class="text-white-50 fs-xl-12 fs-lg-13 fs-12 fw-light innerText mb-xxl-3 mb-xl-2 mb-md-3 mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus nesciunt repellat, explicabo reiciendis laudantium atque nihil at ad magnam provident magni quam nemo. Illum, dignissimos.</div>
								<div class="text-white-50 fs-xl-12 fs-lg-13 fs-12 fw-light innerText mb-xxl-3 mb-xl-2 mb-md-3 mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, molestiae amet quod sint beatae aliquid!</div>
								<div class="text-white-50 fs-xl-12 fs-lg-13 fs-12 fw-light innerText mb-xxl-3 mb-xl-2 mb-md-3 mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos fuga adipisci quidem ab velit reprehenderit!</div>
								<button type="button" class="d-inline-flex shadow-none border-0 bg-transparent w-lg50px w-40px h-lg30px h-26px justify-content-center align-items-center arrowBtn position-relative"><span class="d-flex align-items-center justify-content-center w-lg25px w-20px h-lg20px h-15px"><img src="{{ asset('/public/frontend_assets/img/rightSingalArrow.svg') }}" class="w-100 h-100" alt=""></span></button>
							</div>
						</div>
						<div class="col-xl-6 col-sm-4 col-8 mx-auto order-sm-2 order-1 mb-sm-0 mb-4">
							<div class="userImg team2UserName"><img src="{{ asset('/resources/views/frontend/assets/img/Neerajrajput.png') }}" class="w-100" alt=""></div>
							{{-- img ki size 281 x 453  hi dale  --}}
							<div class="user_name username2 text-uppercase fw-600 fs-xxl-30 fs-lg-28 fs-md-25 fs-22 d-md-block d-none">Neeraj</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> -->

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
			$('.ourteam').owlCarousel({
			loop:true,
			margin:0,
			center: true,
			nav:true,
			responsive:{
				0:{
					items:1
				},
				600:{
					items:3
				},
				1000:{
					items:5
				}
			}
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