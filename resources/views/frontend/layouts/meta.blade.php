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
<!-- Required meta tags -->
<meta content='IE=edge,chrome=1' http-equiv='X-UA-Compatible' />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0, shrink-to-fit=no" />
<meta name="theme-color" content="#011023" />

<meta name="web-author" content="IMG Global Infotech" />
<meta name="googlebot" content="all">
<meta name="revisit-after" content="3 days">
<meta name="copyright" content="Flixaura">
<meta name="language" content="English">
<meta name="reply-to" content="info@imgglobalinfotech.com">
<meta name="distribution" content="Global" />
<meta name="rating" content="General" />

<!-- Twitter Meta -->
<meta name="twitter:site" content="@flixaura">
<meta name="twitter:creator" content="@flixaura">
<meta name="twitter:card" content="summary">

<!-- Facebook Meta -->
<meta property="fb:app_id" content="0" />

<meta property="og:type" content="website">
<meta property="og:image:type" content="image/jpg">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">

<meta name="google-site-verification" content="OrEQLEuqlgf-7gJ0ME0Zz9Vvv5V9PtT_szObXoimbow" />
<meta name="robots" content="index, follow" />

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-212775119-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-212775119-1');
</script>
@if (!empty(trim($__env->yieldContent('title'))))
    @if (!empty(trim($__env->yieldContent('meta_title'))))
        <title>@yield('meta_title') - Flixaura</title>
        <meta name="title" content="@yield('meta_title') | Flixaura" />
        <meta name="twitter:title" content="@yield('meta_title') | Flixaura">
        <meta property="og:title" content="@yield('meta_title') | Flixaura">
    @else
        <title>@yield('title') | Flixaura</title>
        <meta name="title" content="@yield('title') | Flixaura" />
        <meta name="twitter:title" content="@yield('title') | Flixaura">
        <meta property="og:title" content="@yield('title') | Flixaura">
    @endif
@else
    <title>Photographers in india | Hire Professional Photographer - Flixaura</title>
    <meta name="title" content="Photographers in india | Hire Professional Photographer - Flixaura" />
    <meta name="twitter:title" content="Photographers in india | Hire Professional Photographer - Flixaura">
    <meta property="og:title" content="Photographers in india | Hire Professional Photographer - Flixaura">
@endif
<!-- Required meta tags -->

@if (!empty(trim($__env->yieldContent('description'))))
    <meta name="description" content="@yield('description')" />
    <meta name="twitter:description" content="@yield('description')">
    <meta property="og:description" content="@yield('description')">
@else
    <meta name="description"
        content="Flixaura is India's premier destination for professional corporate photography and video shoot services. Our expertise spans across various domains, including corporate films, baby shoots, drone filming, product photography, and the education industry." />
    <meta name="twitter:description"
        content="Flixaura is India's premier destination for professional corporate photography and video shoot services. Our expertise spans across various domains, including corporate films, baby shoots, drone filming, product photography, and the education industry.">
    <meta property="og:description"
        content="Flixaura is India's premier destination for professional corporate photography and video shoot services. Our expertise spans across various domains, including corporate films, baby shoots, drone filming, product photography, and the education industry.">
@endif

@if (!empty(trim($__env->yieldContent('keyword'))))
    <meta name="keywords" content="@yield('keyword')" />
@else
    <meta name="keywords"
        content="Candid Photographers In Alwar, Wedding Photographer in Jaipur, Best Wedding Photographer in Jaipur, Hire best photographers for Wedding & Special Events, Best professional photographer in Jaipur, Photography services in Jaipur, Best events photographer in Alwar, Photographers in Jaipur" />
@endif

<!-- Twitter Meta -->


<meta name="twitter:image" content="{{ asset('/public') }}/frontend_assets/img/header/logo2.png">

<!-- Facebook Meta -->
<meta property="og:url" content="{{ url()->current() }}">


<meta property="og:image" content="{{ asset('/public') }}/frontend_assets/img/header/logo2.png">
<meta property="og:image:secure_url" content="{{ asset('/public') }}/frontend_assets/img/header/logo2.png">

<link rel="shortcut icon" type="image/x-icon" href="{{ asset('/public') }}/frontend_assets/img/header/logo.png" />
<link rel="icon" type="image/x-icon" href="{{ asset('/public') }}/frontend_assets/img/header/logo.png" />
<meta name="classification" content="Photographers in india | Hire Professional Photographer - Flixaura" />
<meta name="robots" content="index, follow" />
<link rel="canonical" href="{{ url()->current() }}" />




<script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Organization",
      "name": "Flixaura",
      "alternateName": "Flixaura",
      "url": "https://www.flixaura.com/",
      "logo": "https://www.flixaura.com/public/frontend_assets/img/header/logo2.png",
      "contactPoint": [{
        "@type": "ContactPoint",
        "telephone": "+91-8058100200",
        "contactType": "customer service",
        "areaServed": "IN",
        "availableLanguage": "English"
      }, {
        "@type": "ContactPoint",
        "telephone": "+91-8058100200",
        "contactType": "technical support",
        "areaServed": "IN",
        "availableLanguage": "English"
      }],
      "sameAs": [
        "https://www.facebook.com/flixauraindia",
        "https://twitter.com/flixaura",
        "https://www.instagram.com/flixaura/",
        "https://www.linkedin.com/company/flixaura/",
        "https://flickr.com/photos/tags/Flixaura/"
      ]
    }
  </script>
