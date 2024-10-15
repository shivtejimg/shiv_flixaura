<?php use App\Traits\SettingsTrait; ?>
<section id="footer_1" class="footer_1 pt-lg-4 pt-md-4 pt-4">
    <div class="container">
        <div class="row mt-md-3">
            <div class="col-lg-6 order-lg-0 order-md-1 order-1 mt-lg-0 mt-md-4 mt-2">
                <div class="row">
                    {{-- <div class="col-12">
						<div class="footer_header mb-3 text-md-start text-center">
							<h2><span class="bg-theme1 position-relative zi-3 pe-2">All Category</span></h2>
						</div>
					</div> --}}
                    <div class="col-12">
                        <div class="links_footer main_links row">
                            <?php $categories = SettingsTrait::getcategory(); ?>
                            @foreach ($categories as $value)
                                <?php $link = str_replace(' ', '-', $value->name); ?>
                                    <a class="col-sm-6 border-0" href="<?php echo asset('/portfolio') . '/' . $link; ?>">{{ $value->name }}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 order-lg-0 order-md-1 order-1 mt-lg-0 mt-md-4 mt-2">
                <div class="row">
                    {{-- <div class="col-12">
						<div class="footer_header mb-3 text-md-start text-center">
							<h2><span class="bg-theme1 position-relative zi-3 pe-2">Top Locations</span></h2>
						</div>
					</div> --}}
                    <div class="col-12">
                        <div class="links_footer main_links row">
                            <?php $city = SettingsTrait::blogCity(); ?>
                            @foreach ($city as $ct)
                                <a class="col-sm-12 border-0"
                                    href="{{ route('website.blogscategory',$ct->slug) }}">
                                    {{ $ct->title }}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="links_footer">
                    {{-- <div class="footer_header mb-3 text-md-start text-center">
						<h2><span class="bg-theme1 position-relative zi-3 pe-2">Contact Us</span></h2>
					</div> --}}
                    <a href="<?php echo asset('/') . 'about-us'; ?>"
                        class="d-block fs-md-14 fs-13 text-decoration-none p-0 border-0 text-white">About Us</a>
                    <a href="{{ route('website.blog') }}"
                        class="d-block fs-md-14 fs-13 text-decoration-none p-0 border-0 text-white">Blog</a>
                    <a href="{{ route('website.career') }}"
                        class="d-block fs-md-14 fs-13 text-decoration-none p-0 border-0 text-white">Career</a>
                    <a href="<?php echo asset('/') . 'contact-us'; ?>"
                        class="d-block fs-md-14 fs-13 text-decoration-none p-0 border-0 text-white">Contact Us</a>
                    @if (Auth::check())
                        @hasanyrole('admin|photographer')
                            <a href="{{ route('dashboard') }}"
                                class="d-block fs-md-14 fs-13 text-decoration-none p-0 border-0 text-white">Dashboard</a>
                        @endhasrole
                    @else
                        {{-- <a href="{{ route('website.login') }}"
                            class="d-block fs-md-14 fs-13 text-decoration-none p-0 border-0 text-white">Login as
                            Photographer</a> --}}
                            <a href="{{ route('website.photographercategory') }}"
                            class="d-block fs-md-14 fs-13 text-decoration-none p-0 border-0 text-white">Photos</a>
                    @endif
                </div>
                <div class="links_footer">
                   
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <div class="row align-items-center">
                <div
                    class="copyright-inner text-white col-lg-12 col-md-12 m-0 col-12 fs-md-15 fs-13 text-lg-center text-md-center text-center">
                    Copyright© <strong><span>Flixaura</span></strong>. All Rights Reserved | <a
                        href="https://www.imgglobalinfotech.com/" target="_blank"
                        class="credits m-0 text-white text-decoration-none">
                        <img data-bs-toggle="tooltip" data-bs-placement="top" title="IMG Global Infotech"
                            src="<?php echo asset('/public') . '/frontend_assets/img/logos/logo.png'; ?>" class="h-md-25px h-20px mt-md-0 mt-2" alt="footer logo">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


