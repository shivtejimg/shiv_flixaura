<?php
$r1 = Route::getCurrentRoute()->getAction();
$r2 = Route::currentRouteAction();
$r3 = Route::currentRouteName();

$r4 = explode('@', $r2);

$get_url = URL::current();
$arr = explode('?', $get_url, 2);
//$page_url = substr_replace($get_url, "", -1);
$urlpart = explode('/', $get_url);
$countroute = count($urlpart);
$actual_link = explode('?', URL::current(), 2)[0] . '/';
// var_dump(asset('/') . 'blog/' == $actual_link);
// var_dump(asset('/'), $actual_link);die;
?>

<!--
0 ,00000, .000000   .000000 0     .0000. 0000b,    0    0       0 db   0 d0000 .0000. 00000 d000b d000b  0    0
0 0  0  0 0  ,,,,   0  ,,,, 0     0    0 0 ___)   0 0   0       0 0 0  0 0     0    0   0   0     0      0    0
0 0  0  0 0     0   0     0 0     0    0 0    )  0   0  0       0 0  0 0 0"""" 0    0   0   0"""" 0      0""""0
0 0  0  0 "000000   "000000 00000 '0000' 0000d' 0"""""0 d0000   0 0   db 0     '0000'   0   d000b d000b  0    0
-->




@include('frontend.layouts.script_root')
@include('frontend.layouts.meta')

<!-- Font Google -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100;200;300;400;500;600;700&display=swap"
    rel="stylesheet">

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
<!-- Bootstrap == -->
<link rel="stylesheet" href="{{ asset('/public') }}/frontend_assets/plugins/do-not-edit/css/bootstrap.min.css">

<!-- IMG Icons == -->
<link rel="stylesheet" href="{{ asset('/public') }}/frontend_assets/plugins/do-not-edit/css/imgIcons.min.css">
<link rel="icon" type="image/x-icon" href="{{ asset('public/settings/favicon.png') }}" />

<!-- BijarniaDream == -->
<link rel="stylesheet" href="{{ asset('/public') }}/frontend_assets/plugins/do-not-edit/css/bijarniadream.min.css">

<!-- StyleSheet == -->
<link rel="stylesheet" href="{{ asset('/public') }}/frontend_assets/plugins/do-not-edit/css/imgFontStyle.min.css">

<!-- intl== -->

<link rel="stylesheet" href="{{ asset('/public') }}/frontend_assets/plugins/intl-tel-input/intlTelInput.css">

<link rel="stylesheet" href="{{ asset('/public') }}/frontend_assets/plugins/gallery/css/justifiedGallery.css">



<!--====================== IMG Global Infotech / 11 pages ======================-->

<?php if (asset('/') == $actual_link) { ?>
<link rel="stylesheet" href="{{ asset('/public') }}/frontend_assets/plugins/do-not-edit/css/index.min.css">
<link rel="stylesheet" href="{{ asset('/public') }}/frontend_assets/plugins/owl/owl.carousel.min.css">


<?php } else if (asset('/') . 'index.php' == $actual_link) { ?>
<link rel="stylesheet" href="{{ asset('/public') }}/frontend_assets/plugins/do-not-edit/css/index.min.css">
<link rel="stylesheet" href="{{ asset('/public') }}/frontend_assets/plugins/owl/owl.carousel.min.css">

<?php } else if (asset('/') . 'contact-us/' == $actual_link) { ?>
<link rel="stylesheet" href="{{ asset('/public') }}/frontend_assets/plugins/do-not-edit/css/contact.min.css">
<link rel="stylesheet" href="{{ asset('/public') }}/frontend_assets/plugins/owl/owl.carousel.min.css">

<?php } else if (asset('/') . 'book-now/' == $actual_link) { ?>
<link rel="stylesheet" href="{{ asset('/public') }}/frontend_assets/plugins/do-not-edit/css/booknow.min.css">
<link rel="stylesheet" href="{{ asset('/public') }}/frontend_assets/plugins/owl/owl.carousel.min.css">

<?php } else if (asset('/') . 'portfolio-categories/' == $actual_link) { ?>
<link rel="stylesheet" href="{{ asset('/public') }}/frontend_assets/plugins/do-not-edit/css/categories.min.css">
<!-- <link rel="stylesheet" href="{{ asset('/public') }}/frontend_assets/plugins/owl/owl.carousel.min.css"> -->


<?php } else if ((asset('/') . 'portfolio/' == $actual_link) || $urlpart[$countroute-2] == 'portfolio') { ?>
<link rel="stylesheet" href="{{ asset('/public') }}/frontend_assets/plugins/glightbox/dist/css/glightbox.min.css">
<link rel="stylesheet" href="{{ asset('/public') }}/frontend_assets/plugins/do-not-edit/css/single-category.min.css">
<link rel="stylesheet" href="{{ asset('/public') }}/frontend_assets/plugins/owl/owl.carousel.min.css">
<!-- <link rel="stylesheet" href="{{ asset('/public') }}/frontend_assets/plugins/owl/owl.carousel.min.css"> -->


<?php }  else if ((asset('/') . 'photographer/' == $actual_link) || $urlpart[$countroute-2] == 'photographer') { ?>
<link rel="stylesheet" href="{{ asset('/public') }}/frontend_assets/plugins/glightbox/dist/css/glightbox.min.css">
<link rel="stylesheet" href="{{ asset('/public') }}/frontend_assets/plugins/do-not-edit/css/single-category.min.css">
<link rel="stylesheet" href="{{ asset('/public') }}/frontend_assets/plugins/owl/owl.carousel.min.css">
<!-- <link rel="stylesheet" href="{{ asset('/public') }}/frontend_assets/plugins/owl/owl.carousel.min.css"> -->


<?php } else if ((asset('/') . 'simple-category/' == $actual_link) || $urlpart[$countroute-2] == 'simple-category') { ?>
<link rel="stylesheet" href="{{ asset('/public') }}/frontend_assets/plugins/glightbox/dist/css/glightbox.min.css">
<link rel="stylesheet" href="{{ asset('/public') }}/frontend_assets/plugins/do-not-edit/css/single-category.min.css">
<link rel="stylesheet" href="{{ asset('/public') }}/frontend_assets/plugins/owl/owl.carousel.min.css">

<?php } else if (asset('/') . 'about-us/' == $actual_link) { ?>
<link rel="stylesheet" href="{{ asset('/public') }}/frontend_assets/plugins/glightbox/dist/css/glightbox.min.css">
<link rel="stylesheet" href="{{ asset('/public') }}/frontend_assets/plugins/do-not-edit/css/about-us.min.css">
<link rel="stylesheet" href="{{ asset('/public') }}/frontend_assets/plugins/owl/owl.carousel.min.css">


<?php } else if (asset('/') . 'wedding-photography/' == $actual_link) { ?>
<link rel="stylesheet" href="{{ asset('/public') }}/frontend_assets/plugins/owl/owl.carousel.min.css">

<?php } else if (asset('/') . 'pre-wedding-photography/' == $actual_link) { ?>
<link rel="stylesheet" href="{{ asset('/public') }}/frontend_assets/plugins/owl/owl.carousel.min.css">


<?php } else if (asset('/') . 'post-wedding-photography/' == $actual_link) { ?>
<link rel="stylesheet" href="{{ asset('/public') }}/frontend_assets/plugins/owl/owl.carousel.min.css">

<?php } else if (asset('/') . 'engagement-photography/' == $actual_link) { ?>
<link rel="stylesheet" href="{{ asset('/public') }}/frontend_assets/plugins/owl/owl.carousel.min.css">

<?php } else if (asset('/') . 'travel-photography/' == $actual_link) { ?>
<link rel="stylesheet" href="{{ asset('/public') }}/frontend_assets/plugins/owl/owl.carousel.min.css">


<?php } else if (asset('/') . 'family-photography/' == $actual_link) { ?>
<link rel="stylesheet" href="{{ asset('/public') }}/frontend_assets/plugins/owl/owl.carousel.min.css">

<?php } else if (asset('/') . 'personal-portraits-photography/' == $actual_link) { ?>
<link rel="stylesheet" href="{{ asset('/public') }}/frontend_assets/plugins/owl/owl.carousel.min.css">


<?php } else if (asset('/') . 'kid-photography/' == $actual_link) { ?>
<link rel="stylesheet" href="{{ asset('/public') }}/frontend_assets/plugins/owl/owl.carousel.min.css">


<?php } else if (asset('/') . 'new-born-photography/' == $actual_link) { ?>
<link rel="stylesheet" href="{{ asset('/public') }}/frontend_assets/plugins/owl/owl.carousel.min.css">

<?php } else if (asset('/') . 'meternity-photography/' == $actual_link) { ?>
<link rel="stylesheet" href="{{ asset('/public') }}/frontend_assets/plugins/owl/owl.carousel.min.css">

<?php } else if (asset('/') . 'birthday-photography/' == $actual_link) { ?>
<link rel="stylesheet" href="{{ asset('/public') }}/frontend_assets/plugins/owl/owl.carousel.min.css">

<?php } else if (asset('/') . 'couple-photography/' == $actual_link) { ?>
<link rel="stylesheet" href="{{ asset('/public') }}/frontend_assets/plugins/owl/owl.carousel.min.css">

<?php } else if (asset('/') . 'hotel-photography/' == $actual_link) { ?>
<link rel="stylesheet" href="{{ asset('/public') }}/frontend_assets/plugins/owl/owl.carousel.min.css">
<?php } else if (asset('/') . 'login/' == $actual_link) { ?>
<link rel="stylesheet" href="{{ asset('/public') }}/frontend_assets/plugins/owl/owl.carousel.min.css">
<?php } else if (asset('/') . 'register/' == $actual_link) { ?>
<link rel="stylesheet" href="{{ asset('/public') }}/frontend_assets/plugins/owl/owl.carousel.min.css">
<?php } else if (asset('/') . 'our-team/' == $actual_link)   { ?>
<link rel="stylesheet" href="{{ asset('/public') }}/frontend_assets/plugins/owl/owl.carousel.min.css">
<?php } else if (asset('/') . 'baby-shoot/' == $actual_link)   { ?>
<link rel="stylesheet" href="{{ asset('/public') }}/frontend_assets/plugins/owl/owl.carousel.min.css">
<link rel="stylesheet" href="{{ asset('/public') }}/frontend_assets/plugins/glightbox/dist/css/glightbox.min.css">
<link rel="stylesheet" href="{{ asset('/public') }}/frontend_assets/plugins/do-not-edit/css/booknow.min.css">
<?php } else if (asset('/') . 'our-partner/' == $actual_link)   { ?>
    

<?php } ?>

<!-- custom styles (optional) -->
<link rel="stylesheet" href="{{ asset('/public') }}/frontend_assets/plugins/do-not-edit/css/style.min.css" />

@stack('stylesheet-link')
