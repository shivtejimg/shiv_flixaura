@extends('frontend.layouts.app')
@section('title')
    Book Now
@endsection

@push('stylesheet-link')
@endpush

@section('mainsection')
    <main class="main-scrollbar">
        <section id="book-now" class="book-now py-5">
            <div class="container pt-5">
                <div class="row justify-content-center align-items-center pt-lg-4 pb-md-5">
                    <div class="section-title col-12 mb-4">
                        <h4 class="fs-lg-35 fs-md-30 fs-20 text-center text-muted">Book Now</h4>
                        <div class=""><img src="{{ asset('/public') }}/frontend_assets/img/unnamed.png"
                                class="img-fluid h-5px w-100" alt="Our Expertise"></div>
                        <p class="fs-lg-15 fs-14 text-center mt-lg-5 mt-4">Flixaura is not a new name in the media line, we
                            are working for 5+ years. We have worked before with Edtech shoot, corporate film shoot,
                            corporate ad films
                            shoot, short films shoot, first birthday shoot, documentary shoot, Newborn baby shoot, baby
                            shoot, in-house studio shoot, outdoor photo shoot, music album shoot,
                            full product shoot, and drone shoot. Also worked with all kinds of corporate shoots like hotels
                            shoot, hospitals shoot, café shoot, gyms shoot, factories shoot, stores,
                            etc. Here is some of the work listed.</p>
                    </div>
                    <div class="col-xl-7 col-lg-8 col-md-11">
                        <!-- <form id="myform" method="post" role="form" class="shadow rounded bg-light p-md-4 p-3"> -->
                        <form action="{{ asset('/sendbooknow') }}" method="post" id="bookingdata" role="form"
                            class="php-email-form shadow rounded bg-light p-md-4 p-3">
                            @csrf
                            <div class="row bg-white py-md-4 py-3 px-md-3 px-2 mx-0 rounded-10 border">
                                <div class="col-md-6 mt-2 form-group mb-3">
                                    <i class="imgs img-user"></i>
                                    <input type="text" name="name"
                                        class="form-control rounded bg-light border h-md-50px h-44px" id="name"
                                        placeholder="Your Name" style="padding-left:36px;" required>
                                </div>
                                <div class="col-md-6 mt-2 form-group mb-3">
                                    <input type="tel" class="form-control rounded bg-light border h-md-50px h-44px"
                                        name="mobile" id="phone" placeholder="Your Mobile no" pattern="[0-9]{10}"
                                        style="padding-left:36px;" maxlength="10" autocomplete="off" required>
                                </div>
                                <div class="col-md-6 form-group mb-md-0 mb-3">
                                    <i class="imgs img-envelope-open-text"></i>
                                    <input type="mail" name="email"
                                        class="form-control rounded bg-light border h-md-50px h-44px" id="email"
                                        placeholder="Your Email Address" style="padding-left:36px;" required>
                                </div>
                                <div class="col-md-6 form-group mb-md-0 mb-3">
                                    <i class="imgs img-location"></i>
                                    <select class="city form-control rounded bg-light border h-md-50px h-44px"
                                        id="city" style="padding-left: 37px;" name="location" required>
                                        <option value="">City</option>
                                        @foreach ($cities as $city)
                                            <option value="{{ $city->id }}" <?php if (isset($_GET['city']) && $city->id == $_GET['city']) {
                                                echo 'selected';
                                            } ?>>{{ $city->city_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="date_part col-lg-12 form-group text-center my-md-3 my-2 position-relative">
                                    <h5>Select Category</h5>
                                </div>
                                <div class="col-lg-12 form-group Category_tabs">
                                    <div class="Category_tabs_main">
                                        <div class="tab-content mt-0" id="myTabContent">
                                            <div class="tab-pane fade show active" id="profile" role="tabpanel"
                                                aria-labelledby="profile-tab">
                                                <div class="looking_for px-3 py-4 rounded position-relative">
                                                    <!--<label class="bg-white fw-bold fs-md-14 fs-12 px-md-2 px-1 left-5px position-absolute top-n12px" for="">For Personal</label>-->
                                                    <div class="row">
                                                        @foreach ($category as $key => $value)
                                                            <div class="col-md-4 mb-2">
                                                                <div class="form-group custom_radio">
                                                                    <input type="radio" id="featured-{{ $key }}"
                                                                        class="d-none" name="featured"
                                                                        value="{{ $value->name }}" <?php if (isset($_GET['category']) && $_GET['category'] == $value->name) {
                                                                            echo 'checked';
                                                                        } ?> required >
                                                                    <label
                                                                        for="featured-{{ $key }}">{{ $value->name }}</label>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="date_part col-lg-12 form-group text-center my-md-3 my-2 position-relative">
                                    <h5>Date</h5>
                                </div>
                                <div class="col-md-6 form-group mb-3 position-relative">
                                    <label class="fs-md-13 fs-12 mb-1" for="from">From:</label>
                                    <input type="date" class="form-control rounded bg-light border h-md-50px h-44px"
                                        name="from_date" id="from_date" placeholder="from" required>
                                </div>
                                <div class="col-md-6 form-group mb-3">
                                    <label class="fs-md-13 fs-12 mb-1" for="to">To:</label>
                                    <input type="date" class="form-control rounded bg-light border h-md-50px h-44px"
                                        name="to_date" id="to_date" placeholder="to" required>
                                </div>
                                <div class="form-group mb-3">
                                    <i class="imgd img-comments"></i>
                                    <textarea class="form-control rounded bg-light border h-md-110px h-60px fs-md-14 fs-13" name="message" rows="3"
                                        id="message" placeholder="Please write something" style="padding-left:36px;"></textarea>
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
            </div>
        </section>
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
                        $("#exampleModal").modal("toggle");
                        resetForm();
                        sendbookmail(dataString);
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

        function sendbookmail(dataString) {
            // var dataString = $(this).serialize();
            $.ajax({
                type: "POST",
                url: "{{ asset('/bookingsendmail') }}",
                data: dataString
            });
            // e.preventDefault();
        }

        function resetForm() {
            $(':input', '#bookingdata').not(':button, :submit, :reset, :hidden').val('')
                .removeAttr('checked').removeAttr('selected');
        }
    </script>
@endpush
