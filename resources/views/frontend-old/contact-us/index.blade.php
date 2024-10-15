@extends('frontend.layouts.app')
@section('title')
Contact Us
@endsection
@push('stylesheet-link')
@endpush

@section('mainsection')
    <main class="main-scrollbar">
        <!-- Templete -->
        <div class="container-fluid px-0">
            <div class="newHeroSection innerpageHeadign py-md-5 py-4">
                <div class="row align-items-center textWrapper mx-auto my-lg-3 mb-3">
                    <div class="col-auto introText fs-18 fs-sm-20 fs-lg-22 pe-0">"FLIXAURA"</div>
                    <div class="col coloredLine"><span class="d-block h-3px w-97"></span></div>
                    <div class="col-12 fw-bold flixText fs-xl-80 fs-lg-70 fs-md-60 fs-sm-45 fs-35"><span>Contact</span>Us</div>
                </div>
                <div class="container">
                    <div class="px-lg-5 px-3"><img src="{{ asset('/public') }}/frontend_assets/img/unnamed.png"class="img-fluid h-5px w-100" alt="Our Expertise"></div>
                </div>
            </div>
        </div>
        <section id="contact" class="contact pt-0">
            <div class="container pb-5 pt-md5 pt3">
                <div class="row">
                    <div class="section-title col-12 mt-lg4 mt3">
                        {{-- <div class="newHeroSection innerpageHeadign">
                            <div class="row align-items-center textWrapper mx-auto mb-3">
                                <div class="col-auto introText fs-18 fs-sm-20 fs-lg-22 pe-0">"FLIXAURA"</div>
                                <div class="col coloredLine"><span class="d-block h-3px w-97"></span></div>
                                <div class="col-12 fw-bold flixText fs-xl-80 fs-lg-70 fs-md-60 fs-sm-45 fs-35"><span>Contact</span>Us</div>
                            </div>
                        </div>
                        <h4 class="fs-lg-35 fs-md-30 fs-20 text-center text-muted">Contact Us</h4>
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
                    {{-- <div class="col-12 fs-lg-45 fs-md-40 fs-sm-35 fs-30 fw-bold text-muted pt-3 pb-4">Contact Us</div> --}}
                </div>
                <div class="row align-items-center justify-content-center mt-lg-5 mt-4">
                    <div class="col-xl-5 col-lg-7">
                        <div class="row">
                            <div class="col-lg-12 d-flex">
                                <div class="info-box mt-0 mb-3">
                                    <i class="imgs img-envelope"></i>
                                    <h3>Email Us</h3>
                                    <p><a class="text-decoration-none" href="javascript:">flixaura@gmail.com</a></p>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="row ">
                                    <div class="col-lg-6">
                                        <div class="info-box mt-0 mb-3 px-4">
                                            <h3><i
                                                    class="imgs img-phone-alt fs-10 me-2 position-relative top-n3px"></i>Delhi
                                                Office</h3>
                                            <p>34, shri Keshav Kunj, PocketD , Sector 17, Dwarka.</p>
                                            <!-- <h3>Call Us</h3> -->
                                            <b>+91 92555 88800</b>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="info-box mt-0 mb-3 px-4">
                                            <h3><i
                                                    class="imgs img-phone-alt fs-10 me-2 position-relative top-n3px"></i>Jaipur
                                                Office</h3>
                                            <p>Amrpali Marg, <br>Vaishali Nagar, Jaipur</p>
                                            <!-- <h3>Call Us</h3> -->
                                            <b>+91-98870 34345</b>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="row ">
                                    <div class="col-12">
                                        <div class="info-box mt-0 mb-3 px-4">
                                            <h3><i
                                                    class="imgs img-phone-alt fs-10 me-2 position-relative top-n3px"></i>Bengaluru Office</h3>
                                            <p>GS Plaza Building, 9 Cross, 5th Main Rd, Jayamahal, Bengaluru,</p>
                                            <!-- <h3>Call Us</h3> -->
                                            <b>+91 86607 45043</b>
                                        </div>
                                    </div>
                                    {{-- <div class="col-lg-6">
                                        <div class="info-box mt-0 mb-3 px-4">
                                            <h3><i
                                                    class="imgs img-phone-alt fs-10 me-2 position-relative top-n3px"></i>Jaipur
                                                Office</h3>
                                            <p>Amrpali Marg, <br>Vaishali Nagar, Jaipur</p>
                                            <b>+91-9887034345</b>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-5">
                        <form action="{{ asset('/contactus') }}" method="post" id="contactform" role="form"
                            class="php-email-form">
                            @csrf
                            <div class="row">
                                <div class="col-md form-group">
                                    <input type="text" name="name" class="form-control shadow-none" id="name"
                                        placeholder="Your Name">
                                </div>
                                <div class="col-md form-group">
                                    <input type="text" class="form-control shadow-none" name="mobile" id="mobile"
                                        placeholder="Your Mobile no">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control shadow-none" name="email" id="email"
                                    placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control shadow-none" name="subject" id="subject"
                                    placeholder="Subject">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control  shadow-none" name="message" rows="3" placeholder="Message"></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <button type="submit" name="submit" id="submit_btn" value="Send"
                                class="btn btn-dark h-md-45px h-40px px-4 fs-md-14 fs-13 d-flex align-items-center">Get in
                                Touch <img src="{{ asset('/') }}/assets/img/header/logo.png" class="img-fluid h-30px"
                                    alt="" style="display:inline;"></button>
                        </form>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->
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
            var dataString = $(this).serialize();
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: "<?php echo URL::asset('/contactus'); ?>",
                data: dataString,
                success: function(data) {
                    console.log('success')
                    console.log(data);
                    if (data == 1) {
                        $("#exampleModal").modal("toggle");
                        resetForm()
                        sendmail(dataString)

                    } else {
                        let [firstone] = Object.keys(data);
                        let firstString = firstone.split('.')[0];
                        let first = Object.keys(data);
                        let i
                        // console.log(firstone.split('.')[0]);
                        if ($(`[name=${firstString}]`).is('select')) {
                            $(`[name=${firstString}]`).prev('div.select2-container').addClass(
                                'border-danger');
                            $(`[name=${firstString}]`).prev('div.select2-container').tooltip({
                                title: "This Field is required",
                            });
                            $(`[name=${firstString}]`).select2('open');
                        } else {
                            $(`[name^=${firstString}]`).each(function(index) {
                                if ($(this).val() == '') {
                                    $(this).addClass('border-danger').attr('title',
                                        'This Field is required');
                                    $(this).tooltip();
                                    $(this).focus();
                                    // return false;
                                } else {
                                    $(this).removeClass('border-danger').removeAttr('title')
                                        .removeAttr('data-original-title');
                                }
                            });
                            $(`[name=${firstString}]`).attr('title', 'This Field is required');
                            $(`[name=${firstString}]`).tooltip();
                            $(`[name=${firstString}]`).focus();

                        }
                        first.forEach(function(item, key) {
                            let firstItem = item.split('.')[0];
                            if ($(`[name=${firstItem}]`).is('select')) {
                                $(`[name=${firstItem}]`).siblings('div').attr('title',
                                    'This Field is required');
                                $(`[name=${firstItem}]`).prev('div.select2-container').addClass(
                                    'border-danger');
                                $(`[name=${firstItem}]`).prev('div.select2-container').tooltip({
                                    title: "This Field is required",
                                });
                                // $(`#s2id_type_designation`).focus();
                                // $(`[name^=${firstItem}]`).select2('open');

                                if (key == first.length - 1) {
                                    // $("html, body").animate({ scrollTop: 0 }, "slow");
                                }
                            } else {

                                $(`[name^=${firstItem}]`).each(function(index) {

                                    if ($(this).val() == '') {
                                        $(this).addClass('border-danger').attr('title',
                                            'This Field is required');
                                        $(this).tooltip();
                                        // $(this).focus();

                                    }
                                });
                                $(`[name=${firstItem}]`).addClass('border-danger');
                                $(`[name=${firstItem}]`).attr('title',
                                'This Field is required');
                                $(`[name=${firstItem}]`).tooltip();
                                if (key == first.length - 1) {
                                    // $("html, body").animate({ scrollTop: 0 }, "slow");
                                }

                            }
                        })
                    }
                }
            });


        });

        function sendmail(dataString) {
            // var dataString = $(this).serialize();
            $.ajax({
                type: "POST",
                url: "<?php echo URL::asset('/contactsendmail'); ?>",
                data: dataString
            });
            // e.preventDefault();
        }

        function resetForm() {
            $(':input', '#contactform').not(':button, :submit, :reset, :hidden').val('')
                .removeAttr('checked').removeAttr('selected');
        }
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
