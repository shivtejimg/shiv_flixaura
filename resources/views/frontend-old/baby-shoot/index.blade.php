@extends('frontend.layouts.app')
@section('title')
    Photo - Hire Photography Agency
@endsection
@section('meta_title')
    Photo - Hire Photography Agency
@endsection
@section('description')
    Photography is our passion. We have been doing Indian Photography since over a decade and have experience shooting grand
    as well as intimate photography all across India.
@endsection
@push('stylesheet-link')
    {{-- <link rel="stylesheet" href="{{ asset('./../assets/plugins/justifiedGallery/justifiedGallery.min.css') }}"> --}}
@endpush

@section('mainsection')
    <?php use App\Helpers\Helpers; ?>
    <main class="main-scrollbar">
        <div class="container-fluid px-0">
            <div class="newHeroSection innerpageHeadign py-md-5 py-4">
                <div class="row align-items-center textWrapper mx-auto my-lg-3 mb-3">
                    <div class="col-auto introText fs-18 fs-sm-20 fs-lg-22 pe-0">"FLIXAURA"</div>
                    <div class="col coloredLine"><span class="d-block h-3px w-97"></span></div>
                    <div class="col-12 fw-bold flixText fs-xl-80 fs-lg-70 fs-md-60 fs-sm-45 fs-35"><span>Baby</span>Shoot
                    </div>
                </div>
                <div class="container">
                    <div class="px-lg-5 px-3"><img src="{{ asset('/public') }}/frontend_assets/img/unnamed.png"
                            class="img-fluid h-5px w-100" alt="Our Expertise"></div>
                </div>
            </div>
        </div>
        <div class="container-fluid pb5 ptmd-4 pt2 mb-5  px-0  babyslider">
            <div class="row innerfluid mx-0 h-100">
                <div class="col-12 px-0 h-100">
                    <div class="owl-carousel childslider d-flex h-100">
                        <div class="item">
                            <div class="chlidImg"><img alt="" class="w-100"
                                    src="{{ asset('/public') }}/frontend_assets/img/babyimg/child-1.jpg" /></div>
                        </div>
                        <div class="item">
                            <div class="chlidImg"><img alt="" class="w-100"
                                    src="{{ asset('/public') }}/frontend_assets/img/babyimg/child-2.jpeg" /></div>
                        </div>
                        <div class="item">
                            <div class="chlidImg"><img alt="" class="w-100"
                                    src="{{ asset('/public') }}/frontend_assets/img/babyimg/child-3.jpeg" /></div>
                        </div>
                        <div class="item">
                            <div class="chlidImg"><img alt="" class="w-100"
                                    src="{{ asset('/public') }}/frontend_assets/img/babyimg/child-4.jpeg" /></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid birthdaychild position-relative">
            {{-- <div class="movingIMg">
                <div class="data-tilt  data-tilt-full-page-listening"><img src="{{ asset('/public') }}/frontend_assets/img/babyimg/comet_2.webp" alt=""></div>
                <div class="data-tilt  data-tilt-full-page-listening"><img src="{{ asset('/public') }}/frontend_assets/img/babyimg/comet_2.webp" alt=""></div>
                <div class="data-tilt  data-tilt-full-page-listening"><img src="{{ asset('/public') }}/frontend_assets/img/babyimg/comet_2.webp" alt=""></div>
                <div class="data-tilt  data-tilt-full-page-listening"><img src="{{ asset('/public') }}/frontend_assets/img/babyimg/comet_2.webp" alt=""></div>
            </div> --}}
            <div class="container howitworks py-0  portfolioCategiriesPage ">
                <div class="section-title text-center">
                    <h4 class="fs-lg-30 fs-20">Pre Birthday Shoot</h4>
                    <img src="{{ asset('/public') }}/frontend_assets/img/unnamed.png" class="img-fluid h-5px"
                        alt="Pre Birthday Shoot">
                    {{-- <h2 class="fs-lg-28 fs-md-20 fs-17 text-capitalize">We have 30+ setups like cake smash, Harry Potter, Astronaut, Chef, Music, Cocomelon, Milk Bath etc.</h2> --}}
                </div>
                <div class="row gy-3">
                    {{-- <div class="col-12 fs-lg-35 mb4 fs-md-30 fs-sm-26 fs-22 fw-bold text-black text-center">Pre Birthday Shoot</div> --}}
                    <div class="col-xl-8 col-lg-9 mx-auto fs-lg-15 fs-14 text-center">The most Beautiful things in the world
                        are babies. They are naughty and messy, but that's what makes them unique. Capture all their cute
                        memories with Memories by Nitya.</div>
                    <div class="col-xl-8 col-lg-9 mx-auto fs-lg-15 fs-14 text-center mb-3">Our baby photoshoot sessions are
                        done by well trained professionals with beautiful props and backdrops to document the initial phases
                        of your baby.</div>
                    <div class="col-sm-6 categoryCard ">
                        <div class="crad  rounded-sm-10 rounded-8 overflow-hidden position-relative h-100">
                            <div class="cardImg h-100"><img alt="" class="w-100 h-100"
                                    src="{{ asset('/public') }}/frontend_assets/img/babyimg/newimg-1.jpeg" /></div>
                            <div class="categories_Name videoName position-absolute w-100 bottom-0 p-2 text-white fw-bold d-flex justify-content-center align-items-center fs-lg-20 fs-md-18 fs-sm-16 fs-14">
                                <span class="text-center fw-500">Outdoor Shoot</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 categoryCard">
                        <div class="crad  rounded-sm-10 rounded-8 overflow-hidden position-relative h-100">
                            <div class="cardImg h-100"><img alt="" class="w-100 h-100"
                                    src="{{ asset('/public') }}/frontend_assets/img/babyimg/newimg-2.jpeg" /></div>
                            <div class="categories_Name videoName position-absolute w-100 bottom-0 p-2 text-white fw-bold d-flex justify-content-center align-items-center fs-lg-20 fs-md-18 fs-sm-16 fs-14">
                                <span class="text-center fw-500">Indoor Shoot</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid my-5 categoryPage ">
            <div class="container innerPage mb-4 howitworks py-0">
                <div class="section-title text-center">
                    <h4 class="fs-lg-30 fs-20">Portfolio</h4>
                    <img src="{{ asset('/public') }}/frontend_assets/img/unnamed.png" class="img-fluid h-5px"
                        alt="Portfolio">
                    {{-- <h2 class="fs-lg-28 fs-md-20 fs-17 text-capitalize">We have 30+ setups like cake smash, Harry Potter, Astronaut, Chef, Music, Cocomelon, Milk Bath etc.</h2> --}}
                </div>
                <div class="row mb-3">
                    {{-- <div class="col-12 fs-lg-35 mb4 fs-md-30 fs-sm-26 fs-22 fw-bold text-black pt-3 pb-2">Portfolio</div> --}}
                    <div class="col-12 fs-lg-15 fs-14 pb-2 text-center">We have 30+ setups like cake smash, Harry Potter,
                        Astronaut, Chef, Music, Cocomelon, Milk Bath etc.</div>
                </div>
                <div class="row categoryCard g-md-4 g-sm-3 g-2">
                    <div class="col-12 justified-gallery categoryCard" id="livecategory">
                        @foreach($babyshoot as $baby)
                        <a href="{{ asset('/public/'.$baby->image) }}"
                            class="collectionImg glightbox3">
                            <img alt="" src="{{ asset('/public/'.$baby->image) }}" />
                            {{-- <div class="categories_Name position-absolute w-100 h-100 p-3 text-white fw-bold d-flex justify-content-center align-items-center fs-lg-20 fs-md-18 fs-sm-16 fs-14">
                                <span class="text-center">Baby 1</span>
                            </div> --}}
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid mb5 packagessection py-5">
            <div class="container innerfluid">
                <div class="howitworks py-0">
                    <div class="section-title text-center mb-4">
                        <h4 class="fs-lg-30 fs-20 text-white">Packages</h4>
                        <img src="{{ asset('/public') }}/frontend_assets/img/unnamed.png" class="img-fluid h-5px"
                            alt="Packages">
                        {{-- <h2 class="fs-lg-28 fs-md-20 fs-17 text-capitalize">We have 30+ setups like cake smash, Harry Potter, Astronaut, Chef, Music, Cocomelon, Milk Bath etc.</h2> --}}
                    </div>
                </div>
                <div class="row gy-4">
                    <div class="col-lg-4 col-md-8 mx-auto">
                        <div class="card rounded-5 border-0 shadow-sm overflow-hidden h-100">
                            <div class="card-header text-white text-center fs-lg-18 fs-16 p-3 ">Basic Package</div>
                            <div class="card-body d-flex flex-column justify-content-between">
                                <div class="text-center">
                                    <div class="prich text-center text-white fw-bold fs-md-40 fs-35 mb-3">₹ 6,999/-INR
                                    </div>
                                    <ul
                                        class="d-flex list-unstyled ps-sm-4 ps-3 fs-lg-15 fs-14 flex-column text-white opacity-50 gap-3 m-0">
                                        <li>3 Hours session. (Rest and changes Included)</li>
                                        <li>2 selected setup as per your choice.</li>
                                        <li>One dedicated Photographer at a time.</li>
                                        <li>Delivery In 24 Hours after Image selection.</li>
                                        <li>All raw pictures through Google Drive.</li>
                                        <li>10 edited photos via google drive.</li>
                                        <li>Family Pics also Included.</li>
                                        <li>Locations - Single Flixaura Studio .</li>
                                        <li>2 Photo Frame 8"x12" (A4) as per your choice.</li>
                                        <li>Home shoot also available with all setup and props - (2K extra for that.)</li>
                                        <li>Cinamatic Video : 1.5 - 2 minutes of cinamtic video Additional 3,000/-INR</li>
                                    </ul>
                                </div>
                                <div class="hero afford nonbgbtn  p-0 text-center mt-4">
                                    <button type="button"
                                        class="comman_button shadow text-black d-inline-flex align-items-center justify-content-start m-0"
                                        data-bs-toggle="modal" data-bs-target="#exampleModalbook"
                                        data-id="Basic Package (6,999)"><span class="text-black">Book Now <img
                                                src="{{ asset('/public') }}/frontend_assets/img/header/logo.png"
                                                class="img-fluid h-30px" alt="logo"
                                                style="display:inline;"></span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-8 mx-auto">
                        <div class="card rounded-5 border-0 shadow-sm overflow-hidden h-100 active">
                            <div class="card-header text-white text-center fs-lg-18 fs-16 p-3 ">Tranding Package</div>
                            <div class="card-body d-flex flex-column justify-content-between">
                                <div class="text-center">
                                    <div class="prich text-center text-white fw-bold fs-md-40 fs-35 mb-3">₹ 11,999/-INR
                                    </div>
                                    <ul
                                        class="d-flex list-unstyled ps-sm-4 ps-3 fs-lg-15 fs-14 flex-column text-white opacity-50 gap-3 m-0">
                                        <li>4 Hours session. (Rest and changes Included)</li>
                                        <li>3 Selected setup as per your choice.</li>
                                        <li>One dedicated Photographer at a timeAll raw pictures through Google Drive.</li>
                                        <li>Delivery In 48 Hours after Image selection.</li>
                                        <li>15 edited photos via google drive.</li>
                                        <li>Family Pics also Included.</li>
                                        <li>Locations - Single Flixaura Studio .</li>
                                        <li>3 Photo Frame 8"x12" (A4) as per your choice.</li>
                                        <li>Home shoot also available with all setup and props - (3K extra for that.)</li>
                                        <li>Cinamatic Video : 1.5 - 2 minutes of cinamtic video Additional 3,000/-INR</li>
                                    </ul>
                                </div>
                                <div class="hero afford nonbgbtn  p-0 text-center mt-4">
                                    <button type="button"
                                        class="comman_button shadow text-black d-inline-flex align-items-center justify-content-start m-0"
                                        data-bs-toggle="modal" data-bs-target="#exampleModalbook"
                                        data-id="Trending Package (11,999)"><span class="text-black">Book Now <img
                                                src="{{ asset('/public') }}/frontend_assets/img/header/logo.png"
                                                class="img-fluid h-30px" alt="logo"
                                                style="display:inline;"></span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-8 mx-auto">
                        <div class="card rounded-5 border-0 shadow-sm overflow-hidden h-100">
                            <div class="card-header text-white text-center fs-lg-18 fs-16 p-3 ">Premium Video Package</div>
                            <div class="card-body d-flex flex-column justify-content-between">
                                <div class="text-center">
                                    <div class="prich text-center text-white fw-bold fs-md-40 fs-35 mb-3">₹ 20,999/-INR
                                    </div>
                                    <ul
                                        class="d-flex list-unstyled ps-sm-4 ps-3 fs-lg-15 fs-14 flex-column text-white opacity-50 gap-3 m-0">
                                        <li>8 Hours session Full day. (Rest and Changes Included)</li>
                                        <li>5 Selected setup as per your choice.</li>
                                        <li>2 Dedicated Photographers at a time.</li>
                                        <li>Delivery In 78 Hours after Image selection.</li>
                                        <li>All raw pictures through Google Drive.</li>
                                        <li>25 edited photos via google drive.</li>
                                        <li>Family Pics also Included.</li>
                                        <li>Locations - Single Flixaura Studio .</li>
                                        <li>5 Photo Frame 8"x12" (A4) as per your choice.</li>
                                        <li>Home shoot also available with all setup and props - (4k extra for that.)</li>
                                        <li>Cinamatic Video : 3.5 - 4.5 minutes of cinamtic video</li>
                                    </ul>
                                </div>
                                <div class="hero afford nonbgbtn  p-0 text-center mt-4">
                                    <button type="button"
                                        class="comman_button shadow text-black d-inline-flex align-items-center justify-content-start m-0"
                                        data-bs-toggle="modal" data-bs-target="#exampleModalbook"
                                        data-id="Premium Package (20,999)"><span class="text-black">Book Now <img
                                                src="{{ asset('/public') }}/frontend_assets/img/header/logo.png"
                                                class="img-fluid h-30px" alt="logo"
                                                style="display:inline;"></span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid videoSection py-xl-5 py-lg-4 py-md-3 my-5">
            <div class="container">
                <div class="sectionBg">
                    <div class="row align-items-center">
                        <div class="col-lg-6 mb-lg-0 mb-3">
                            <div class="row mx-0 videoContent">
                                <div class="col-12 px-0">
                                    <div
                                        class="videoHeading text-lg-start text-center fs-xl-40 fs-lg-30 fs-md-25 fs-22 fw-bold ">
                                        Access complimentary consultation while enjoying YouTube content.</div>
                                </div>
                                <div class="col-auto px-0 pt-3 mx-lg-0 mx-auto mt-lg-4">
                                    <div class="hero  p-0 text-center">
                                        <a href="https://youtu.be/sXAR2s4DaqA?si=_nYy8EcKxWBhob-Q"
                                            class="collectionImg glightbox3">
                                            <button type="button"
                                                class="comman_button shadow text-black d-inline-flex align-items-center justify-content-start m-0"><span
                                                    class="text-black">Watch Now <img
                                                        src="{{ asset('/public') }}/frontend_assets/img/header/logo.png"
                                                        class="img-fluid h-30px" alt="logo"
                                                        style="display:inline;"></span></button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 box-container ">
                            <div class="videoPlay box px-lg-0 rounded-4 overflow-hidden">
                                <a href="https://youtu.be/sXAR2s4DaqA?si=_nYy8EcKxWBhob-Q"
                                    class="glightbox3 linkingImg d-flex m-0">
                                    <img src="{{ asset('/public') }}/frontend_assets/img/babyimg/babyimg3.jpg"
                                        alt="image" class="img-fluid h-100 w-100  object-fit-cover">
                                </a>
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
                    <p>Thankyou. We will be in touch soon.</p>
                </div>
                <div class="modal-footer text-center justify-content-center">
                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal">OKAY</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModalbook" tabindex="-1" aria-labelledby="exampleModalbookLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered ">
            <div class="modal-content">
                <div class="modal-header px-md-4 px-3">
                    <h4 class="fs-lg-35 fs-md-30 fs-20 text-center text-muted m-0">Book Now</h4>
                    <button type="button" class="btn shadow-none border-none fs-lg-25 fs-md-22 fs-20 py-0"
                        data-bs-dismiss="modal" aria-label="Close"><i class="imgl img-times"></i></button>
                </div>
                <div class="modal-body text-center row m-0 gx-0 p-0">
                    <div class="col-12 book-now">
                        <form action="{{ asset('/sendbooknow') }}" method="post" id="bookingdata" role="form"
                            class="php-email-form shadow rounded bg-light p-md-4 p-3">
                            @csrf
                            <input type="hidden" value="" name="package" id="modalItemId">
                            <div class="row bg-white py-md-4 py-3 px-md-3 px-2 mx-0 rounded-10 border">
                                <div class="col-md-6 mt-2  mb-3">
                                    <div class="form-group position-relative">
                                        <i class="imgs img-user start-0"></i>
                                        <input type="text" name="name"
                                            class="form-control rounded bg-light border h-md-50px h-44px" id="name"
                                            placeholder="Your Name" style="padding-left:36px;" required>
                                    </div>
                                </div>
                                <div class="col-md-6 mt-2  mb-3">
                                    <div class="form-group">
                                        <input type="text"
                                            class="form-control rounded bg-light border h-md-50px h-44px" name="mobile"
                                            id="phone" pattern="[0-9]{10}" style="padding-left:36px;" maxlength="10"
                                            autocomplete="off" required>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-md-0 mb-3">
                                    <div class="form-group position-relative">
                                        <i class="imgs img-envelope-open-text start-0"></i>
                                        <input type="mail" name="email"
                                            class="form-control rounded bg-light border h-md-50px h-44px" id="email"
                                            placeholder="Your Email Address" style="padding-left:36px;" required>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-md-0 mb-3">
                                    <div class="form-group position-relative">
                                        <i class="imgs img-location start-0"></i>
                                        <select
                                            class="city form-control rounded shadow-none bg-light border h-md-50px h-44px"
                                            id="city" style="padding-left: 37px;" name="location" required>
                                            @foreach ($cities as $city)
                                                <option value="{{ $city->id }}" <?php if (isset($_GET['city']) && $city->id == $_GET['city']) {
                                                    echo 'selected';
                                                } ?>>
                                                    {{ $city->city_name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="date_part col-lg-12 form-group text-center my-md-3 my-2 position-relative">
                                    <h5>Select Category</h5>
                                </div>
                                <div class="Category_tabs">
                                    <div class="Category_tabs_main">
                                        <div class="looking_for px-3 py-4 rounded position-relative">
                                            <div class="row">
                                                @foreach ($category as $key => $value)
                                                    <div class="col-lg-4 col-md-6 mb-2 text-start">
                                                        <div class="form-group custom_radio">
                                                            <input type="radio" id="featured-{{ $key }}"
                                                                class="d-none" name="featured"
                                                                value="{{ $value->name }}" <?php if (isset($_GET['category']) && $_GET['category'] == $value->name) {
                                                                    echo 'checked';
                                                                } ?> required>
                                                            <label
                                                                for="featured-{{ $key }}">{{ $value->name }}</label>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="date_part col-lg-12 form-group text-center my-md-3 my-2 position-relative">
                                    <h5>Date</h5>
                                </div>
                                <div class="col-md-6 form-group text-start mb-3 position-relative">
                                    <label class="fs-md-13 fs-12 mb-1" for="from">From:</label>
                                    <input type="date" class="form-control rounded bg-light border h-md-50px h-44px"
                                        name="from_date" id="from_date" placeholder="from" required>
                                </div>
                                <div class="col-md-6 form-group text-start mb-3">
                                    <label class="fs-md-13 fs-12 mb-1" for="to">To:</label>
                                    <input type="date" class="form-control rounded bg-light border h-md-50px h-44px"
                                        name="to_date" id="to_date" placeholder="to" required>
                                </div>
                                <div class="col-12 mb-3">
                                    <div class="form-group position-relative">
                                        <i class="imgd img-comments start-0"></i>
                                        <textarea class="form-control rounded shadow-none bg-light border h-md-110px h-60px fs-md-14 fs-13" name="message"
                                            rows="3" id="message" placeholder="Please write something" style="padding-left:36px;" required></textarea>
                                    </div>
                                </div>
                                <div class="from-group mt-2">
                                    <button type="submit" name="submit" id="submit_btn" value="Send"
                                        class="btn btn-dark h-md-45px h-40px px-4 fs-md-14 fs-13 d-flex align-items-center">Check
                                        Availibility <img src="{{ asset('/') }}/assets/img/header/logo.png"
                                            class="img-fluid h-30px" alt="" style="display:inline;"></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                {{-- <div class="modal-footer text-center justify-content-center">
                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal">OKAY</button>
                </div> --}}
            </div>
        </div>
    </div>
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
    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <p style="color:red"> All Filelds Are Required
                </div>
                <div class="modal-footer text-center justify-content-center">
                    <button type="button" class="btn btn-dark" data-bs-dismiss="modal">OKAY</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('page-script-link')
    {{-- <script src="{{ asset('./../assets/plugins/justifiedGallery/jquery.justifiedGallery.min.js') }}"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.13/js/intlTelInput-jquery.min.js"></script>
@endpush


@push('page-script')
    <script type="text/javascript">
        $("form").on("submit", function(e) {
            e.preventDefault();

            var form = $(this);
            var dataString = form.serialize();

            $.ajax({
                type: "POST",
                url: form.attr("action"),
                data: dataString,
                success: function(data) {
                    console.log(data);

                    if (data == 1) {
                        // Close the exampleModalbook modal
                        $("#exampleModalbook").modal("hide");

                        // Show the exampleModal modal
                        $("#exampleModal").modal("show");

                        // Reset the form
                        resetForm();
                    } else {
                        handleValidationErrors(data);
                    }
                }
            });
        });


        function handleValidationErrors(data) {
            var firstErrorField = Object.keys(data)[0].split('.')[0];

            // Highlight the first error field
            $('[name="' + firstErrorField + '"]').addClass('border-danger').attr('title', 'This Field is required')
                .tooltip();

            // Handle other error fields if needed
            $.each(data, function(fieldName, errorMessage) {
                // Handle each field's error here
            });
        }

        function resetForm() {
            $(':input', '#bookingdata').not(':button, :submit, :reset, :hidden').val('')
                .removeAttr('checked').removeAttr('selected');
        }
    </script>
    <script>
        $("#livecategory").justifiedGallery({
            waitThumbnailsLoad: false,
            margins: 7,
            rowHeight: 250,
            captions: false
            // rowHeight: 300,
            // maxRowHeight: 300,
            // lastRow: 'nojustify',
            // margins: 10,
            // captions: false
        });
    </script>

    <script>
        var lightbox = GLightbox();
        lightbox.on('open', (target) => {
            console.log('lightbox opened');
        });
        var lightboxVideo = GLightbox({
            selector: '.glightbox3'
        });
        lightboxVideo.on('slide_changed', ({
            prev,
            current
        }) => {
            console.log('Prev slide', prev);
            console.log('Current slide', current);

            const {
                slideIndex,
                slideNode,
                slideConfig,
                player
            } = current;

            if (player) {
                if (!player.ready) {
                    // If player is not ready
                    player.on('ready', (event) => {
                        // Do something when video is ready
                    });
                }

                player.on('play', (event) => {
                    console.log('Started play');
                });

                player.on('volumechange', (event) => {
                    console.log('Volume change');
                });

                player.on('ended', (event) => {
                    console.log('Video ended');
                });
            }
        });

        var lightboxInlineIframe = GLightbox({
            selector: '.glightbox4'
        });
    </script>

    <script>
        $('.childslider').owlCarousel({
            loop: true,
            margin: 10,
            lazyLoad: true,
            animateOut: 'fadeOut',
            nav: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        })
    </script>
    <script>
        // -----Country Code Selection
        $("#phone").intlTelInput({
            initialCountry: "in",
            separateDialCode: true,
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#exampleModalbook').on('show.bs.modal', function(event) {
                console.log('aj');
                var button = $(event.relatedTarget); // Button that triggered the modal
                var itemId = button.data('id'); // Extract the ID from data-id attribute
                var modal = $(this);

                modal.find('#modalItemId').val(itemId); // Set the dynamic ID in the input field
            });

            player.on('volumechange', (event) => {
                console.log('Volume change');
            });

            player.on('ended', (event) => {
                console.log('Video ended');
            });
        }
    );

    var lightboxInlineIframe = GLightbox({
        selector: '.glightbox4'
    });
</script>

<script>
    $('.childslider').owlCarousel({
    loop:true,
    margin:10,
    lazyLoad:true,
    animateOut: 'fadeOut',
    nav:true,
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
})
</script>
<script>
// -----Country Code Selection
$("#phone").intlTelInput({
	initialCountry: "in",
	separateDialCode: true,
});


</script>
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
