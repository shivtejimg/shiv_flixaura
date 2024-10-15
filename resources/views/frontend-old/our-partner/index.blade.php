@extends('frontend.layouts.app')
@section('title')
Our Partners
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
                    <div class="col-12 fw-bold flixText fs-xl-80 fs-lg-70 fs-md-60 fs-sm-45 fs-35"><span>Our</span>Partners</div>
                </div>
                <div class="container">
                    <div class="px-lg-5 px-3"><img src="{{ asset('/public') }}/frontend_assets/img/unnamed.png"class="img-fluid h-5px w-100" alt="Our Expertise"></div>
                </div>
            </div>
        </div>
        <section id="contact" class="contact pt-0 mb-lg-4">
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
                        <p class="fs-lg-15 fs-14 text-center mt-lg-5 mt-4 mb-0">Flixaura is not a new name in the media line, we
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

                {{-- ! our partner card start --}}
                {{-- <div class="row align-items-center mt-lg-5 gy-4 mt-2 ourPartnercard">
                    <div class="col-xl-3 col-lg-4 col-md-6 col-12">
                        <div class="card border0">
                            <div class="card-body p-0">
                                <div class="content rounded">
                                    <div class="front">
                                        <div class="row">
                                            <div class="col-8 mx-auto">
                                                <div class="partnerlogo"><img src="{{ asset('/public') }}/frontend_assets/img/header/logo2.png" class="w-100" alt=""></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="back text-white">
                                        <div class="row gap-2 mx-0 gx-0">
                                            <div class="col-12 mb-3">
                                                <div class="partnerlogo h-25px"><img src="{{ asset('/public') }}/frontend_assets/img/header/logo2.png" class="h-100" alt=""></div>
                                            </div>
                                            <div class="col-12 fs-lg-17 fs-16 fw-600">Flixaura</div>
                                            <div class="col-12 fs-14 fw-500"><a href="https://www.flixaura.com/" class="text-white text-decoration-none">https://www.flixaura.com/</a></div>
                                            <div class="col-12 fs-14 fw-normal text-white-50 partnerContent">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil necessitatibus doloremque voluptas numquam enim hic cupiditate facilis cum adipisci voluptatem.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                {{-- ! our partner card End --}}
                <div class="row mt-md-5 mt-4 gap-md-5 gap-4">
                    <div class="col-12">
                        <div class="partnerCard partnercard3 card border-0">
                            <div class="card-body p-4 py-lg-5">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 col-12 ps-lg-5">
                                        <div class="row position-relative pe-xl-5 pt-lg-0 pt3 gap-3">
                                            <div class="col-12 fs-xl-18 fs-lg-17 fs-md-16 fs-15 text-white">SABAL PRODUCTIONS</div>
                                            <div class="col-12 fs-xl-32 fs-lg-28 fs-md-23 fs-22 text-start text-white lh-sm text-capitalize">At Sabal Production, we are the media partners for movies</div>
                                            <div class="col-12 fs-lg-16 fs-14 text-white aboutPartner">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quia unde adipisci iure, doloremque harum natus laudantium? Est, labore id. Adipisci corporis, laudantium aliquid quo excepturi amet possimus maiores eveniet dolores.</div>
                                            <div class="col-12">
                                                <div class="afford nonbgbtn p-0 text-start">
                                                    <a href="https://www.bollywoodmdb.com/company/sabal-productions/39036" target="_blank"  class="comman_button shadow text-black d-inline-flex align-items-center justify-content-start mb-0 gap-1 fwbold">View More<span class="d-inline-flex h-30px"> <img src="{{ asset('/public/frontend_assets/img/header/logo.png') }}" class="img-fluid h-100" alt="view more"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6  col-12">
                                        <div class="row h-100">
                                            <div class="col-12 mt-2 text-center ">
                                                <img src="{{ asset('/public') }}/frontend_assets/img/sabalproduction.png" class="w-xl-80 w-lg-90 w-80 " alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-12">
                        <div class="partnerCard card border-0" style="background-color: #f16a28">
                            <div class="card-body p-4 py-lg-5">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 col-12 ps-lg-5 order-lg-2 order-1">
                                        <div class="row position-relative pe-xl-5 pt-lg-0 pt3 gap-3">
                                            <div class="col-12 fs-xl-18 fs-lg-17 fs-md-16 fs-15 text-white">InfluencerHai</div>
                                            <div class="col-12 fs-xl-32 fs-lg-28 fs-md-23 fs-22 text-start text-white lh-sm text-capitalize">A leading influencer marketing agency in India</div>
                                            <div class="col-12 fs-lg-16 fs-14 text-white aboutPartner">Influencer Hai is a leading influencer marketing firm that connects major brands with passionate, socially engaged audiences through social media influencers. Our goal is to establish relationships with new talent and assist brands in telling stories that matter. We firmly believe in a human-first approach to talent identification and high-touch service in addition to our dependable data and technology.</div>
                                            <div class="col-12">
                                                <div class="afford nonbgbtn p-0 text-start">
                                                    <a href="https://influencerhai.com/" target="_blank"  class="comman_button shadow text-black d-inline-flex align-items-center justify-content-start mb-0 gap-1 fwbold">View More<span class="d-inline-flex h-30px"> <img src="{{ asset('/public/frontend_assets/img/header/logo.png') }}" class="img-fluid h-100" alt="view more"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6  col-12 order-lg-1 order-2">
                                        <div class="row h-100">
                                            <div class="col-12 mt-2 text-center ">
                                                <img src="{{ asset('/public') }}/frontend_assets/img/influencerhai.png" class="w-xl-80 w-lg-90 w-80 " alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="partnerCard partnercard2 card border-0">
                            <div class="card-body p-4 py-lg-5">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 col-12 ps-lg-5">
                                        <div class="row position-relative pe-xl-5 pt-lg-0 pt3 gap-3">
                                            <div class="col-12 fs-xl-18 fs-lg-17 fs-md-16 fs-15 text-white">ARAV Studios</div>
                                            <div class="col-12 fs-xl-32 fs-lg-28 fs-md-23 fs-22 text-start text-white lh-sm text-capitalize">Films and photography</div>
                                            <div class="col-12 fs-lg-16 fs-14 text-white aboutPartner">Based in the heart of India, ARAV Studios is a high-performance production house with a fully integrated background across a diverse group of brands (Hyatt, Hilton, Aloft, Park Hyatt, ITC Hotels, Topgear, Times now)
                                                ARAV Studios is a full-service video and photography production house and with an experience of over 10 years, we cater to the growing demand for superior quality content for social media and advertising.</div>
                                            <div class="col-12">
                                                <div class="afford nonbgbtn p-0 text-start">
                                                    <a href="https://aravstudios.com" target="_blank"  class="comman_button shadow text-black d-inline-flex align-items-center justify-content-start mb-0 gap-1 fwbold">View More<span class="d-inline-flex h-30px"> <img src="{{ asset('/public/frontend_assets/img/header/logo.png') }}" class="img-fluid h-100" alt="view more"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6  col-12">
                                        <div class="row h-100">
                                            <div class="col-12 mt-2 text-center ">
                                                <img src="{{ asset('/public') }}/frontend_assets/img/aravstudio.png" class="w-xl-80 w-lg-90 w-80 " alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="partnerCard partnercard1 card border-0">
                            <div class="card-body p-4 py-lg-5">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 col-12 ps-lg-5 order-lg-2 order-1">
                                        <div class="row position-relative pe-xl-5 pt-lg-0 pt3 gap-3">
                                            <div class="col-12 fs-xl-18 fs-lg-17 fs-md-16 fs-15 text-white">IMG Global Infotech</div>
                                            <div class="col-12 fs-xl-32 fs-lg-28 fs-md-23 fs-22 text-start text-white lh-sm text-capitalize">Empowering Businesses through Innovative Web & Mobile App Solutions</div>
                                            <div class="col-12 fs-lg-16 fs-14 text-white aboutPartner">IMG is one of the trusted and Promising IT service providers delivering web development, mobile app development and custom software development services to start-up, mid level organizations and various big enterprises aiming to proffer digital success with robust applications. We have a proven track record in having 1200+ satisfied business clients and individuals from different verticals. We are committed to establish a long lasting and happy relationship with our clients.</div>
                                            <div class="col-12">
                                                <div class="afford nonbgbtn p-0 text-start">
                                                    <a href="https://www.imgglobalinfotech.com/" target="_blank"  class="comman_button shadow text-black d-inline-flex align-items-center justify-content-start mb-0 gap-1 fwbold">View More<span class="d-inline-flex h-30px"> <img src="{{ asset('/public/frontend_assets/img/header/logo.png') }}" class="img-fluid h-100" alt="view more"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6  col-12 order-lg-1 order-2">
                                        <div class="row h-100">
                                            <div class="col-12 mt-2 text-center ">
                                                <img src="{{ asset('/public') }}/frontend_assets/img/img_logo.webp" class="w-xl-80 w-lg-90 w-80 " alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
