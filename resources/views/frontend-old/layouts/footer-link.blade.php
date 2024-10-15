<?php
$r1 = Route::getCurrentRoute()->getAction();
$r2 = Route::currentRouteAction();
$r3 = Route::currentRouteName();

$r4 = explode('@', $r2);

$get_url = URL::current(); 
$arr = explode("?", $get_url, 2);
//$page_url = substr_replace($get_url, "", -1);
$urlpart = explode("/", $get_url);
$countroute = count($urlpart);
$actual_link = explode("?", URL::current(), 2)[0] . '/';
// var_dump(asset('/') . 'blog/' == $actual_link);
// var_dump(asset('/'), $actual_link);die;
?>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
<script src="{{asset('/public')}}/frontend_assets/plugins/vanillaTilt/vanillaTilt.js"></script>
<script src="{{asset('/public')}}/frontend_assets/js/buttons.js"></script>
<script src="{{asset('/public')}}/frontend_assets/plugins/intl-tel-input/intlTelInput.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js'></script>
<script src='https://cdn.jsdelivr.net/jquery.counterup/1.0/jquery.counterup.min.js'></script>
<script src="{{asset('/public')}}/frontend_assets/plugins/gallery/js/jquery.justifiedGallery.js"></script>
<script src="{{asset('/public')}}/frontend_assets/plugins/glightbox/dist/js/glightbox.min.js"></script>

<?php if (asset('/') == $actual_link) { ?>
    <script src="{{asset('/public')}}/frontend_assets/plugins/owl/owl.carousel.min.js"></script>
    <script src="{{asset('/public')}}/frontend_assets/js/index.js"></script>


<?php } else if (asset('/') . "index.php" == $actual_link) { ?>
    <script src="{{asset('/public')}}/frontend_assets/plugins/owl/owl.carousel.min.js"></script>
    <script src="{{asset('/public')}}/frontend_assets/js/index.js"></script>


<?php } else if (asset('/') . "book-now/" == $actual_link) { ?>
    <script src="{{asset('/public')}}/frontend_assets/plugins/owl/owl.carousel.min.js"></script>
    <script src="{{asset('/public')}}/frontend_assets/js/book-now.js"></script>


<?php } else if (asset('/') . "categories/" == $actual_link) { ?>
    <!-- <script src="{{asset('/public')}}/frontend_assets/plugins/owl/owl.carousel.min.js"></script> -->
    <script src="{{asset('/public')}}/frontend_assets/js/categories.js"></script>
    <script src="{{asset('/public')}}/frontend_assets/js/single-category.js"></script>

<?php } else if ((asset('/') . 'portfolio/' == $actual_link) || $urlpart[$countroute-2] == 'portfolio') { ?>
    <script src="{{asset('/public')}}/frontend_assets/plugins/owl/owl.carousel.min.js"></script>
    <script src="{{asset('/public')}}/frontend_assets/js/single-category.js"></script>

<?php } else if ((asset('/') . 'photographer/' == $actual_link) || $urlpart[$countroute-2] == 'photographer') { ?>
    <script src="{{asset('/public')}}/frontend_assets/plugins/owl/owl.carousel.min.js"></script>
    <script src="{{asset('/public')}}/frontend_assets/js/single-category.js"></script>

<?php } else if ((asset('/') . 'portfolio-category/' == $actual_link) || $urlpart[$countroute-2] == 'portfolio-category') { ?>
    <script src="{{asset('/public')}}/frontend_assets/plugins/owl/owl.carousel.min.js"></script>
    <script src="{{asset('/public')}}/frontend_assets/js/single-category.js"></script>


<?php } else if (asset('/') . "about-us/" == $actual_link) { ?>
    <script src="{{asset('/public')}}/frontend_assets/plugins/owl/owl.carousel.min.js"></script>
    <script src="{{asset('/public')}}/frontend_assets/js/about-us.js"></script>


<?php } else if (asset('/') . "contact-us/" == $actual_link) { ?>
    <script src="{{asset('/public')}}/frontend_assets/plugins/owl/owl.carousel.min.js"></script>
    <script src="{{asset('/public')}}/frontend_assets/js/contact-us.js"></script>


<?php } else if (asset('/') . "wedding-photography/" == $actual_link) { ?>
    <script src="{{asset('/public')}}/frontend_assets/plugins/owl/owl.carousel.min.js"></script>


<?php } else if (asset('/') . "wedding-photography/" == $actual_link) { ?>
    <script src="{{asset('/public')}}/frontend_assets/plugins/owl/owl.carousel.min.js"></script>


<?php } else if (asset('/') . "pre-wedding-photography/" == $actual_link) { ?>
    <script src="{{asset('/public')}}/frontend_assets/plugins/owl/owl.carousel.min.js"></script>

<?php } else if (asset('/') . "post-wedding-photography/" == $actual_link) { ?>
    <script src="{{asset('/public')}}/frontend_assets/plugins/owl/owl.carousel.min.js"></script>

<?php } else if (asset('/') . "engagement-photography/" == $actual_link) { ?>
    <script src="{{asset('/public')}}/frontend_assets/plugins/owl/owl.carousel.min.js"></script>

<?php } else if (asset('/') . "travel-photography/" == $actual_link) { ?>
    <script src="{{asset('/public')}}/frontend_assets/plugins/owl/owl.carousel.min.js"></script>

<?php } else if (asset('/') . "travel-photography/" == $actual_link) { ?>
    <script src="{{asset('/public')}}/frontend_assets/plugins/owl/owl.carousel.min.js"></script>

<?php } else if (asset('/') . "family-photography/" == $actual_link) { ?>
    <script src="{{asset('/public')}}/frontend_assets/plugins/owl/owl.carousel.min.js"></script>

<?php } else if (asset('/') . "personal-portraits-photography/" == $actual_link) { ?>
    <script src="{{asset('/public')}}/frontend_assets/plugins/owl/owl.carousel.min.js"></script>

<?php } else if (asset('/') . "kid-photography/" == $actual_link) { ?>
    <script src="{{asset('/public')}}/frontend_assets/plugins/owl/owl.carousel.min.js"></script>

<?php } else if (asset('/') . "new-born-photography/" == $actual_link) { ?>
    <script src="{{asset('/public')}}/frontend_assets/plugins/owl/owl.carousel.min.js"></script>

<?php } else if (asset('/') . "meternity-photography/" == $actual_link) { ?>
    <script src="{{asset('/public')}}/frontend_assets/plugins/owl/owl.carousel.min.js"></script>

<?php } else if (asset('/') . "birthday-photography/" == $actual_link) { ?>
    <script src="{{asset('/public')}}/frontend_assets/plugins/owl/owl.carousel.min.js"></script>

<?php } else if (asset('/') . "couple-photography/" == $actual_link) { ?>
    <script src="{{asset('/public')}}/frontend_assets/plugins/owl/owl.carousel.min.js"></script>

<?php } else if (asset('/') . "hotel-photography/" == $actual_link) { ?>
    <script src="{{asset('/public')}}/frontend_assets/plugins/owl/owl.carousel.min.js"></script>
<?php } else if (asset('/') . "login/" == $actual_link) { ?>
    <script src="{{asset('/public')}}/frontend_assets/plugins/owl/owl.carousel.min.js"></script>
<?php } else if (asset('/') . "register/" == $actual_link) { ?>
    <script src="{{asset('/public')}}/frontend_assets/plugins/owl/owl.carousel.min.js"></script>
<?php } else if (asset('/') . "our-team/" == $actual_link) { ?>
    <script src="{{asset('/public')}}/frontend_assets/plugins/owl/owl.carousel.min.js"></script>
<?php } else if (asset('/') . "baby-shoot/" == $actual_link) { ?>
    <script src="{{asset('/public')}}/frontend_assets/plugins/owl/owl.carousel.min.js"></script>
    <script src="{{asset('/public')}}/frontend_assets/plugins/vanillaTilt/vanillaTilt.js"></script>
    <script src="{{asset('/public')}}/frontend_assets/plugins/intel-tel-input/intelTelinput.js"></script>

        
<?php } ?>
<script src="{{asset('/public')}}/frontend_assets/js/photoghraphy.js"></script>
<script src="{{asset('/public')}}/frontend_assets/js/main.js"></script>
@stack('page-script-link')
<script>
    $('#mygallery , #mygallery1').justifiedGallery({
        rowHeight: 300,
        maxRowHeight: 300,
        lastRow: 'nojustify',
        margins: 12,
        captions: false
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
    $('#hero').each(function() {
        if ($(this).hasClass('meternity')) {
            $('.contactTo').html("102030405060");
        }
    });
</script>
<script>
    @if (!empty($errors))
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                $("#liveToast").addClass("fade");
                $("#liveToast").addClass("show");
                $("#liveToast").removeClass("hide");
                toastr.error('{{ $error }}');
            @endforeach
        @endif
    @endif
    @if (Session::has('message'))
        $("#liveToast").addClass("fade");
        $("#liveToast").addClass("show");
        $("#liveToast").removeClass("hide");
        toastr.options = {
            "closeButton": true,
            "progressBar": true,
            "timeOut": 10000, 
            "closeDuration": 300,
        }
        toastr.success("{{ session('message') }}");
    @endif
    @if (Session::has('success'))
        $("#liveToast").addClass("fade");
        $("#liveToast").addClass("show");
        $("#liveToast").removeClass("hide");
        toastr.options = {
            "closeButton": true,
            "progressBar": true,
            "timeOut": 10000, 
            "closeDuration": 300,
        }
        toastr.success("{{ session('success') }}");
    @endif
    @if (Session::has('error'))
        $("#liveToast").removeClass("hide");
        $("#liveToast").addClass("fade");
        $("#liveToast").addClass("show");
        $(".toast-header").removeClass("bg-success");
        $(".toast-header").addClass("bg-danger");
        toastr.options = {
            "closeButton": true,
            "progressBar": true,
            "timeOut": 10000, 
            "closeDuration": 300,
        }
        toastr.error("{{ session('error') }}");
    @endif
    @if (Session::has('info'))
        $("#liveToast").addClass("fade");
        $("#liveToast").addClass("show");
        $("#liveToast").removeClass("hide");
        toastr.options = {
            "closeButton": true,
            "progressBar": true,
            "timeOut": 10000, 
            "closeDuration": 300,
        }
        toastr.info("{{ session('info') }}");
    @endif
    @if (Session::has('warning'))
        toastr.options = {
            "closeButton": true,
            "progressBar": true,
            "timeOut": 10000, 
            "closeDuration": 300,
        }
        toastr.warning("{{ session('warning') }}");
    @endif
</script>
<script>
    // INITIALIZATION OF LIVE TOAST
    // =======================================================
    const liveToast = new bootstrap.Toast(document.querySelector('#liveToast'))
    document.querySelector('#liveToastBtn').addEventListener('click', () => liveToast.show())
</script>

@stack('page-script')


