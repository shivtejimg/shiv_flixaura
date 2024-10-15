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




<?php if (asset('/') == $actual_link) { ?>
<!--  Title -->
<title>Photographers in Jaipur, Best Wedding Photographers in Jaipur, Hire Photographers in Alwar | Flixaura</title>

<!-- Required meta tags -->
<meta name="title"
    content="Photographers in Jaipur, Best Wedding Photographers in Jaipur, Hire Photographers in Alwar | Flixaura" />
<meta name="description"
    content="Hire Flixaura for top-notch Wedding Photographers in Jaipur. View portfolios of wedding ceremony, Candid wedding Shots, Couple portraits, Engagement photography by creative professional photographers in Jaipur." />
<meta name="keywords"
    content="Candid Photographers In Alwar, Wedding Photographer in Jaipur, Best Wedding Photographer in Jaipur, Hire best photographers for Wedding & Special Events, Best professional photographer in Jaipur, Photography services in Jaipur, Best events photographer in Alwar, Photographers in Jaipur" />

<!-- Twitter Meta -->
<meta name="twitter:title"
    content="Photographers in Jaipur, Best Wedding Photographers in Jaipur, Hire Photographers in Alwar | Flixaura">
<meta name="twitter:description"
    content="Hire Flixaura for top-notch Wedding Photographers in Jaipur. View portfolios of wedding ceremony, Candid wedding Shots, Couple portraits, Engagement photography by creative professional photographers in Jaipur.">
<meta name="twitter:image" content="{{ asset('/public') }}/frontend_assets/img/header/logo2.png">

<!-- Facebook Meta -->
<meta property="og:url" content="{{ asset('/') }}">
<meta property="og:title"
    content="Photographers in Jaipur, Best Wedding Photographers in Jaipur, Hire Photographers in Alwar | Flixaura">
<meta property="og:description"
    content="Hire Flixaura for top-notch Wedding Photographers in Jaipur. View portfolios of wedding ceremony, Candid wedding Shots, Couple portraits, Engagement photography by creative professional photographers in Jaipur.">
<meta property="og:image" content="{{ asset('/public') }}/frontend_assets/img/header/logo2.png">
<meta property="og:image:secure_url" content="{{ asset('/public') }}/frontend_assets/img/header/logo2.png">

<link rel="shortcut icon" type="image/x-icon" href="{{ asset('/public') }}/frontend_assets/img/header/logo.png" />
<link rel="icon" type="image/x-icon" href="{{ asset('/public') }}/frontend_assets/img/header/logo.png" />
<meta name="classification"
    content="Photographers in Jaipur, Best Wedding Photographers in Jaipur, Hire Photographers in Alwar | Flixaura" />
<meta name="robots" content="index, follow" />
<link rel="canonical" href="{{ asset('/') }}" />




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




<?php } else if (f_path . 'index.php' == $actual_link) { ?>
<!--  Title -->
<title>Photographers in Jaipur, Best Wedding Photographers in Jaipur, Hire Photographers in Alwar | Flixaura</title>

<!-- Required meta tags -->
<meta name="title"
    content="Photographers in Jaipur, Best Wedding Photographers in Jaipur, Hire Photographers in Alwar | Flixaura" />
<meta name="description"
    content="Hire Flixaura for top-notch Wedding Photographers in Jaipur. View portfolios of wedding ceremony, Candid wedding Shots, Couple portraits, Engagement photography by creative professional photographers in Jaipur." />
<meta name="keywords"
    content="Candid Photographers In Alwar, Wedding Photographer in Jaipur, Best Wedding Photographer in Jaipur, Hire best photographers for Wedding & Special Events, Best professional photographer in Jaipur, Photography services in Jaipur, Best events photographer in Alwar, Photographers in Jaipur" />

<!-- Twitter Meta -->
<meta name="twitter:title"
    content="Photographers in Jaipur, Best Wedding Photographers in Jaipur, Hire Photographers in Alwar | Flixaura">
<meta name="twitter:description"
    content="Hire Flixaura for top-notch Wedding Photographers in Jaipur. View portfolios of wedding ceremony, Candid wedding Shots, Couple portraits, Engagement photography by creative professional photographers in Jaipur.">
<meta name="twitter:image" content="{{ asset('/public') }}/frontend_assets/img/header/logo2.png">

<!-- Facebook Meta -->
<meta property="og:url" content="{{ asset('/') }}index.php">
<meta property="og:title"
    content="Photographers in Jaipur, Best Wedding Photographers in Jaipur, Hire Photographers in Alwar | Flixaura">
<meta property="og:description"
    content="Hire Flixaura for top-notch Wedding Photographers in Jaipur. View portfolios of wedding ceremony, Candid wedding Shots, Couple portraits, Engagement photography by creative professional photographers in Jaipur.">
<meta property="og:image" content="{{ asset('/public') }}/frontend_assets/img/header/logo2.png">
<meta property="og:image:secure_url" content="{{ asset('/public') }}/frontend_assets/img/header/logo2.png">

<link rel="shortcut icon" type="image/x-icon" href="{{ asset('/public') }}/frontend_assets/img/header/logo.png" />
<link rel="icon" type="image/x-icon" href="{{ asset('/public') }}/frontend_assets/img/header/logo.png" />
<meta name="classification"
    content="Photographers in Jaipur, Best Wedding Photographers in Jaipur, Hire Photographers in Alwar | Flixaura" />
<meta name="robots" content="index, follow" />
<link rel="canonical" href="{{ asset('/') }}index.php" />




<script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "Site name",
    "alternateName": "sitename",
    "url": "https://www.sitename.com/",
    "logo": "https://www.sitename.com/images/img-new-logo.png",
    "contactPoint": [{
      "@type": "ContactPoint",
      "telephone": "+91-000000000000",
      "contactType": "customer service",
      "areaServed": "IN",
      "availableLanguage": "English"
    }, {
      "@type": "ContactPoint",
      "telephone": "+91-000000000000",
      "contactType": "technical support",
      "areaServed": "IN",
      "availableLanguage": "English"
    }],
    "sameAs": [
      "https://www.facebook.com/sitename",
      "https://twitter.com/sitename",
      "https://www.instagram.com/sitename.lab/",
      "https://www.linkedin.com/sitename/13291179/",
      "https://www.flickr.com/photos/sitename/"
    ]
  }
</script>



<?php } else if ((asset('/') . 'portfolio/' == $actual_link) || $urlpart[$countroute-2] == 'portfolio') { ?>
<!--  Title -->
<title>Photographers in Jaipur, Best Wedding Photographers in Jaipur, Hire Photographers in Alwar | Flixaura</title>

<!-- Required meta tags -->
<meta name="title"
    content="Best Wedding Photographer in Jaipur, Royal Wedding Photographers in Jaipur || Flixaura" />
<meta name="description"
    content="Your wedding day is the most special day in your life & for those getting married on a budget, you can call us for Best Wedding Photographer in Jaipur at affordable prices." />
<meta name="keywords"
    content="Candid Photographers In Alwar, Wedding Photographer in Jaipur, Best Wedding Photographer in Jaipur, Hire best photographers for Wedding & Special Events, Best professional photographer in Jaipur, Photography services in Jaipur, Best events  photographer in Alwar, Photographers in Jaipur" />

<!-- Twitter Meta -->
<meta name="twitter:title" content="Title here">
<meta name="twitter:description" content="Discrption here">
<meta name="twitter:image" content="{{ asset('/public') }}/frontend_assets/img/header/favicon-original.png">

<!-- Facebook Meta -->
<meta property="og:url" content="{{ asset('/') }}portfolio/">
<meta property="og:title" content="Title here">
<meta property="og:description" content="Discrption here">
<meta property="og:image" content="{{ asset('/public') }}/frontend_assets/img/header/favicon-original.png">
<meta property="og:image:secure_url"
    content="{{ asset('/public') }}/frontend_assets/img/header/favicon-original.png">

<link rel="shortcut icon" type="image/x-icon" href="{{ asset('/public') }}/frontend_assets/img/header/logo.png" />
<link rel="icon" type="image/x-icon" href="{{ asset('/public') }}/frontend_assets/img/header/logo.png" />
<meta name="classification" content="Title here" />
<link rel="canonical" href="{{ $actual_link }}" />



<?php } else if (f_path . 'post-wedding-photography/' == $actual_link) { ?>
<!--  Title -->
<title>Photographers in Jaipur, Best Wedding Photographers in Jaipur, Hire Photographers in Alwar | Flixaura</title>

<!-- Required meta tags -->
<meta name="title"
    content="Best Wedding Photographer in Jaipur, Royal Wedding Photographers in Jaipur || Flixaura" />
<meta name="description"
    content="Your wedding day is the most special day in your life & for those getting married on a budget, you can call us for Best Wedding Photographer in Jaipur at affordable prices." />
<meta name="keywords"
    content="Candid Photographers In Alwar, Wedding Photographer in Jaipur, Best Wedding Photographer in Jaipur, Hire best photographers for Wedding & Special Events, Best professional photographer in Jaipur, Photography services in Jaipur, Best events  photographer in Alwar, Photographers in Jaipur" />

<!-- Twitter Meta -->
<meta name="twitter:title" content="Title here">
<meta name="twitter:description" content="Discrption here">
<meta name="twitter:image" content="{{ asset('/public') }}/frontend_assets/img/header/favicon-original.png">

<!-- Facebook Meta -->
<meta property="og:url" content="{{ asset('/') }}post-wedding-photography/">
<meta property="og:title" content="Title here">
<meta property="og:description" content="Discrption here">
<meta property="og:image" content="{{ asset('/public') }}/frontend_assets/img/header/favicon-original.png">
<meta property="og:image:secure_url"
    content="{{ asset('/public') }}/frontend_assets/img/header/favicon-original.png">

<link rel="shortcut icon" type="image/x-icon" href="{{ asset('/public') }}/frontend_assets/img/header/logo.png" />
<link rel="icon" type="image/x-icon" href="{{ asset('/public') }}/frontend_assets/img/header/logo.png" />
<meta name="classification" content="Title here" />
<meta name="robots" content="index, follow" />
<link rel="canonical" href="{{ asset('/') }}post-wedding-photography/" />




<?php } else if (f_path . 'engagement-photography/' == $actual_link) { ?>
<!--  Title -->
<title>Photographers in Jaipur, Best Wedding Photographers in Jaipur, Hire Photographers in Alwar | Flixaura</title>

<!-- Required meta tags -->
<meta name="title"
    content="Best Wedding Photographer in Jaipur, Royal Wedding Photographers in Jaipur || Flixaura" />
<meta name="description"
    content="Your wedding day is the most special day in your life & for those getting married on a budget, you can call us for Best Wedding Photographer in Jaipur at affordable prices." />
<meta name="keywords"
    content="Candid Photographers In Alwar, Wedding Photographer in Jaipur, Best Wedding Photographer in Jaipur, Hire best photographers for Wedding & Special Events, Best professional photographer in Jaipur, Photography services in Jaipur, Best events  photographer in Alwar, Photographers in Jaipur" />

<!-- Twitter Meta -->
<meta name="twitter:title" content="Title here">
<meta name="twitter:description" content="Discrption here">
<meta name="twitter:image" content="{{ asset('/public') }}/frontend_assets/img/header/favicon-original.png">

<!-- Facebook Meta -->
<meta property="og:url" content="{{ asset('/') }}engagement-photography/">
<meta property="og:title" content="Title here">
<meta property="og:description" content="Discrption here">
<meta property="og:image" content="{{ asset('/public') }}/frontend_assets/img/header/favicon-original.png">
<meta property="og:image:secure_url"
    content="{{ asset('/public') }}/frontend_assets/img/header/favicon-original.png">

<link rel="shortcut icon" type="image/x-icon" href="{{ asset('/public') }}/frontend_assets/img/header/logo.png" />
<link rel="icon" type="image/x-icon" href="{{ asset('/public') }}/frontend_assets/img/header/logo.png" />
<meta name="classification" content="Title here" />
<meta name="robots" content="index, follow" />
<link rel="canonical" href="{{ asset('/') }}engagement-photography/" />



<?php } else if (f_path . 'personal-portraits-photography/' == $actual_link) { ?>
<!--  Title -->
<title>Photographers in Jaipur, Best Wedding Photographers in Jaipur, Hire Photographers in Alwar | Flixaura</title>

<!-- Required meta tags -->
<meta name="title"
    content="Best Wedding Photographer in Jaipur, Royal Wedding Photographers in Jaipur || Flixaura" />
<meta name="description"
    content="Your wedding day is the most special day in your life & for those getting married on a budget, you can call us for Best Wedding Photographer in Jaipur at affordable prices." />
<meta name="keywords"
    content="Candid Photographers In Alwar, Wedding Photographer in Jaipur, Best Wedding Photographer in Jaipur, Hire best photographers for Wedding & Special Events, Best professional photographer in Jaipur, Photography services in Jaipur, Best events  photographer in Alwar, Photographers in Jaipur" />

<!-- Twitter Meta -->
<meta name="twitter:title" content="Title here">
<meta name="twitter:description" content="Discrption here">
<meta name="twitter:image" content="{{ asset('/public') }}/frontend_assets/img/header/favicon-original.png">

<!-- Facebook Meta -->
<meta property="og:url" content="{{ asset('/') }}personal-portraits-photography/">
<meta property="og:title" content="Title here">
<meta property="og:description" content="Discrption here">
<meta property="og:image" content="{{ asset('/public') }}/frontend_assets/img/header/favicon-original.png">
<meta property="og:image:secure_url"
    content="{{ asset('/public') }}/frontend_assets/img/header/favicon-original.png">

<link rel="shortcut icon" type="image/x-icon" href="{{ asset('/public') }}/frontend_assets/img/header/logo.png" />
<link rel="icon" type="image/x-icon" href="{{ asset('/public') }}/frontend_assets/img/header/logo.png" />
<meta name="classification" content="Title here" />
<meta name="robots" content="index, follow" />
<link rel="canonical" href="{{ asset('/') }}personal-portraits-photography/" />



<?php } else if (f_path . 'kid-photography/' == $actual_link) { ?>
<!--  Title -->
<title>Photographers in Jaipur, Best Wedding Photographers in Jaipur, Hire Photographers in Alwar | Flixaura</title>

<!-- Required meta tags -->
<meta name="title"
    content="Best Wedding Photographer in Jaipur, Royal Wedding Photographers in Jaipur || Flixaura" />
<meta name="description"
    content="Your wedding day is the most special day in your life & for those getting married on a budget, you can call us for Best Wedding Photographer in Jaipur at affordable prices." />
<meta name="keywords"
    content="Candid Photographers In Alwar, Wedding Photographer in Jaipur, Best Wedding Photographer in Jaipur, Hire best photographers for Wedding & Special Events, Best professional photographer in Jaipur, Photography services in Jaipur, Best events  photographer in Alwar, Photographers in Jaipur" />

<!-- Twitter Meta -->
<meta name="twitter:title" content="Title here">
<meta name="twitter:description" content="Discrption here">
<meta name="twitter:image" content="{{ asset('/public') }}/frontend_assets/img/header/favicon-original.png">

<!-- Facebook Meta -->
<meta property="og:url" content="{{ asset('/') }}kid-photography/">
<meta property="og:title" content="Title here">
<meta property="og:description" content="Discrption here">
<meta property="og:image" content="{{ asset('/public') }}/frontend_assets/img/header/favicon-original.png">
<meta property="og:image:secure_url"
    content="{{ asset('/public') }}/frontend_assets/img/header/favicon-original.png">

<link rel="shortcut icon" type="image/x-icon" href="{{ asset('/public') }}/frontend_assets/img/header/logo.png" />
<link rel="icon" type="image/x-icon" href="{{ asset('/public') }}/frontend_assets/img/header/logo.png" />
<meta name="classification" content="Title here" />
<meta name="robots" content="index, follow" />
<link rel="canonical" href="{{ asset('/') }}kid-photography/" />



<?php } else if (f_path . 'new-born-photography/' == $actual_link) { ?>
<!--  Title -->
<title>Photographers in Jaipur, Best Wedding Photographers in Jaipur, Hire Photographers in Alwar | Flixaura</title>

<!-- Required meta tags -->
<meta name="title"
    content="Best Wedding Photographer in Jaipur, Royal Wedding Photographers in Jaipur || Flixaura" />
<meta name="description"
    content="Your wedding day is the most special day in your life & for those getting married on a budget, you can call us for Best Wedding Photographer in Jaipur at affordable prices." />
<meta name="keywords"
    content="Candid Photographers In Alwar, Wedding Photographer in Jaipur, Best Wedding Photographer in Jaipur, Hire best photographers for Wedding & Special Events, Best professional photographer in Jaipur, Photography services in Jaipur, Best events  photographer in Alwar, Photographers in Jaipur" />

<!-- Twitter Meta -->
<meta name="twitter:title" content="Title here">
<meta name="twitter:description" content="Discrption here">
<meta name="twitter:image" content="{{ asset('/public') }}/frontend_assets/img/header/favicon-original.png">

<!-- Facebook Meta -->
<meta property="og:url" content="{{ asset('/') }}new-born-photography/">
<meta property="og:title" content="Title here">
<meta property="og:description" content="Discrption here">
<meta property="og:image" content="{{ asset('/public') }}/frontend_assets/img/header/favicon-original.png">
<meta property="og:image:secure_url"
    content="{{ asset('/public') }}/frontend_assets/img/header/favicon-original.png">

<link rel="shortcut icon" type="image/x-icon" href="{{ asset('/public') }}/frontend_assets/img/header/logo.png" />
<link rel="icon" type="image/x-icon" href="{{ asset('/public') }}/frontend_assets/img/header/logo.png" />
<meta name="classification" content="Title here" />
<meta name="robots" content="index, follow" />
<link rel="canonical" href="{{ asset('/') }}new-born-photography/" />



<?php } else if (f_path . 'meternity-photography/' == $actual_link) { ?>
<!--  Title -->
<title>Photographers in Jaipur, Best Wedding Photographers in Jaipur, Hire Photographers in Alwar | Flixaura</title>

<!-- Required meta tags -->
<meta name="title"
    content="Best Wedding Photographer in Jaipur, Royal Wedding Photographers in Jaipur || Flixaura" />
<meta name="description"
    content="Your wedding day is the most special day in your life & for those getting married on a budget, you can call us for Best Wedding Photographer in Jaipur at affordable prices." />
<meta name="keywords"
    content="Candid Photographers In Alwar, Wedding Photographer in Jaipur, Best Wedding Photographer in Jaipur, Hire best photographers for Wedding & Special Events, Best professional photographer in Jaipur, Photography services in Jaipur, Best events  photographer in Alwar, Photographers in Jaipur" />

<!-- Twitter Meta -->
<meta name="twitter:title" content="Title here">
<meta name="twitter:description" content="Discrption here">
<meta name="twitter:image" content="{{ asset('/public') }}/frontend_assets/img/header/favicon-original.png">

<!-- Facebook Meta -->
<meta property="og:url" content="{{ asset('/') }}meternity-photography/">
<meta property="og:title" content="Title here">
<meta property="og:description" content="Discrption here">
<meta property="og:image" content="{{ asset('/public') }}/frontend_assets/img/header/favicon-original.png">
<meta property="og:image:secure_url"
    content="{{ asset('/public') }}/frontend_assets/img/header/favicon-original.png">

<link rel="shortcut icon" type="image/x-icon" href="{{ asset('/public') }}/frontend_assets/img/header/logo.png" />
<link rel="icon" type="image/x-icon" href="{{ asset('/public') }}/frontend_assets/img/header/logo.png" />
<meta name="classification" content="Title here" />
<meta name="robots" content="index, follow" />
<link rel="canonical" href="{{ asset('/') }}meternity-photography/" />



<?php } else if (f_path . 'birthday-photography/' == $actual_link) { ?>
<!--  Title -->
<title>Photographers in Jaipur, Best Wedding Photographers in Jaipur, Hire Photographers in Alwar | Flixaura</title>

<!-- Required meta tags -->
<meta name="title"
    content="Best Wedding Photographer in Jaipur, Royal Wedding Photographers in Jaipur || Flixaura" />
<meta name="description"
    content="Your wedding day is the most special day in your life & for those getting married on a budget, you can call us for Best Wedding Photographer in Jaipur at affordable prices." />
<meta name="keywords"
    content="Candid Photographers In Alwar, Wedding Photographer in Jaipur, Best Wedding Photographer in Jaipur, Hire best photographers for Wedding & Special Events, Best professional photographer in Jaipur, Photography services in Jaipur, Best events  photographer in Alwar, Photographers in Jaipur" />

<!-- Twitter Meta -->
<meta name="twitter:title" content="Title here">
<meta name="twitter:description" content="Discrption here">
<meta name="twitter:image" content="{{ asset('/public') }}/frontend_assets/img/header/favicon-original.png">

<!-- Facebook Meta -->
<meta property="og:url" content="{{ asset('/') }}birthday-photography/">
<meta property="og:title" content="Title here">
<meta property="og:description" content="Discrption here">
<meta property="og:image" content="{{ asset('/public') }}/frontend_assets/img/header/favicon-original.png">
<meta property="og:image:secure_url"
    content="{{ asset('/public') }}/frontend_assets/img/header/favicon-original.png">

<link rel="shortcut icon" type="image/x-icon" href="{{ asset('/public') }}/frontend_assets/img/header/logo.png" />
<link rel="icon" type="image/x-icon" href="{{ asset('/public') }}/frontend_assets/img/header/logo.png" />
<meta name="classification" content="Title here" />
<meta name="robots" content="index, follow" />
<link rel="canonical" href="{{ asset('/') }}birthday-photography/" />



<?php } else if (f_path . 'couple-photography/' == $actual_link) { ?>
<!--  Title -->
<title>Photographers in Jaipur, Best Wedding Photographers in Jaipur, Hire Photographers in Alwar | Flixaura</title>

<!-- Required meta tags -->
<meta name="title"
    content="Best Wedding Photographer in Jaipur, Royal Wedding Photographers in Jaipur || Flixaura" />
<meta name="description"
    content="Your wedding day is the most special day in your life & for those getting married on a budget, you can call us for Best Wedding Photographer in Jaipur at affordable prices." />
<meta name="keywords"
    content="Candid Photographers In Alwar, Wedding Photographer in Jaipur, Best Wedding Photographer in Jaipur, Hire best photographers for Wedding & Special Events, Best professional photographer in Jaipur, Photography services in Jaipur, Best events  photographer in Alwar, Photographers in Jaipur" />

<!-- Twitter Meta -->
<meta name="twitter:title" content="Title here">
<meta name="twitter:description" content="Discrption here">
<meta name="twitter:image" content="{{ asset('/public') }}/frontend_assets/img/header/favicon-original.png">

<!-- Facebook Meta -->
<meta property="og:url" content="{{ asset('/') }}couple-photography/">
<meta property="og:title" content="Title here">
<meta property="og:description" content="Discrption here">
<meta property="og:image" content="{{ asset('/public') }}/frontend_assets/img/header/favicon-original.png">
<meta property="og:image:secure_url"
    content="{{ asset('/public') }}/frontend_assets/img/header/favicon-original.png">

<link rel="shortcut icon" type="image/x-icon" href="{{ asset('/public') }}/frontend_assets/img/header/logo.png" />
<link rel="icon" type="image/x-icon" href="{{ asset('/public') }}/frontend_assets/img/header/logo.png" />
<meta name="classification" content="Title here" />
<meta name="robots" content="index, follow" />
<link rel="canonical" href="{{ asset('/') }}couple-photography/" />



<?php } else if (f_path . 'hotel-photography/' == $actual_link) { ?>
<!--  Title -->
<title>Photographers in Jaipur, Best Wedding Photographers in Jaipur, Hire Photographers in Alwar | Flixaura</title>

<!-- Required meta tags -->
<meta name="title"
    content="Best Wedding Photographer in Jaipur, Royal Wedding Photographers in Jaipur || Flixaura" />
<meta name="description"
    content="Your wedding day is the most special day in your life & for those getting married on a budget, you can call us for Best Wedding Photographer in Jaipur at affordable prices." />
<meta name="keywords"
    content="Candid Photographers In Alwar, Wedding Photographer in Jaipur, Best Wedding Photographer in Jaipur, Hire best photographers for Wedding & Special Events, Best professional photographer in Jaipur, Photography services in Jaipur, Best events  photographer in Alwar, Photographers in Jaipur" />

<!-- Twitter Meta -->
<meta name="twitter:title" content="Title here">
<meta name="twitter:description" content="Discrption here">
<meta name="twitter:image" content="{{ asset('/public') }}/frontend_assets/img/header/favicon-original.png">

<!-- Facebook Meta -->
<meta property="og:url" content="{{ asset('/') }}hotel-photography/">
<meta property="og:title" content="Title here">
<meta property="og:description" content="Discrption here">
<meta property="og:image" content="{{ asset('/public') }}/frontend_assets/img/header/favicon-original.png">
<meta property="og:image:secure_url"
    content="{{ asset('/public') }}/frontend_assets/img/header/favicon-original.png">

<link rel="shortcut icon" type="image/x-icon" href="{{ asset('/public') }}/frontend_assets/img/header/logo.png" />
<link rel="icon" type="image/x-icon" href="{{ asset('/public') }}/frontend_assets/img/header/logo.png" />
<meta name="classification" content="Title here" />
<meta name="robots" content="index, follow" />
<link rel="canonical" href="{{ asset('/') }}hotel-photography/" />



<?php } else if (f_path . 'travel-photography/' == $actual_link) { ?>
<!--  Title -->
<title>Photographers in Jaipur, Best Wedding Photographers in Jaipur, Hire Photographers in Alwar | Flixaura</title>

<!-- Required meta tags -->
<meta name="title"
    content="Best Wedding Photographer in Jaipur, Royal Wedding Photographers in Jaipur || Flixaura" />
<meta name="description"
    content="Your wedding day is the most special day in your life & for those getting married on a budget, you can call us for Best Wedding Photographer in Jaipur at affordable prices." />
<meta name="keywords"
    content="Candid Photographers In Alwar, Wedding Photographer in Jaipur, Best Wedding Photographer in Jaipur, Hire best photographers for Wedding & Special Events, Best professional photographer in Jaipur, Photography services in Jaipur, Best events  photographer in Alwar, Photographers in Jaipur" />

<!-- Twitter Meta -->
<meta name="twitter:title" content="Title here">
<meta name="twitter:description" content="Discrption here">
<meta name="twitter:image" content="{{ asset('/public') }}/frontend_assets/img/header/favicon-original.png">

<!-- Facebook Meta -->
<meta property="og:url" content="{{ asset('/') }}travel-photography/">
<meta property="og:title" content="Title here">
<meta property="og:description" content="Discrption here">
<meta property="og:image" content="{{ asset('/public') }}/frontend_assets/img/header/favicon-original.png">
<meta property="og:image:secure_url"
    content="{{ asset('/public') }}/frontend_assets/img/header/favicon-original.png">

<link rel="shortcut icon" type="image/x-icon" href="{{ asset('/public') }}/frontend_assets/img/header/logo.png" />
<link rel="icon" type="image/x-icon" href="{{ asset('/public') }}/frontend_assets/img/header/logo.png" />
<meta name="classification" content="Title here" />
<meta name="robots" content="index, follow" />
<link rel="canonical" href="{{ asset('/') }}travel-photography/" />



<?php } else if (f_path . 'pre-wedding-photography/' == $actual_link) { ?>
<!--  Title -->
<title>Photographers in Jaipur, Best Wedding Photographers in Jaipur, Hire Photographers in Alwar | Flixaura</title>

<!-- Required meta tags -->
<meta name="title"
    content="Best Wedding Photographer in Jaipur, Royal Wedding Photographers in Jaipur || Flixaura" />
<meta name="description"
    content="Your wedding day is the most special day in your life & for those getting married on a budget, you can call us for Best Wedding Photographer in Jaipur at affordable prices." />
<meta name="keywords"
    content="Candid Photographers In Alwar, Wedding Photographer in Jaipur, Best Wedding Photographer in Jaipur, Hire best photographers for Wedding & Special Events, Best professional photographer in Jaipur, Photography services in Jaipur, Best events  photographer in Alwar, Photographers in Jaipur" />

<!-- Twitter Meta -->
<meta name="twitter:title" content="Title here">
<meta name="twitter:description" content="Discrption here">
<meta name="twitter:image" content="{{ asset('/public') }}/{{ $portfoliocategory->image }}">

<!-- Facebook Meta -->
<meta property="og:url" content="{{ asset('/') }}pre-wedding-photography/">
<meta property="og:title" content="Title here">
<meta property="og:description" content="Discrption here">
<meta property="og:image" content="{{ asset('/public') }}/{{ $portfoliocategory->image }}">
<meta property="og:image:secure_url" content="{{ asset('/public') }}/{{ $portfoliocategory->image }}">

<link rel="shortcut icon" type="image/x-icon" href="{{ asset('/public') }}/frontend_assets/img/header/logo.png" />
<link rel="icon" type="image/x-icon" href="{{ asset('/public') }}/frontend_assets/img/header/logo.png" />
<meta name="classification" content="Title here" />
<meta name="robots" content="index, follow" />
<link rel="canonical" href="{{ asset('/') }}pre-wedding-photography/" />


<?php } else if (f_path . 'family-photography/' == $actual_link) { ?>
<!--  Title -->
<title>Photographers in Jaipur, Best Wedding Photographers in Jaipur, Hire Photographers in Alwar | Flixaura</title>

<!-- Required meta tags -->
<meta name="title"
    content="Best Wedding Photographer in Jaipur, Royal Wedding Photographers in Jaipur || Flixaura" />
<meta name="description"
    content="Your wedding day is the most special day in your life & for those getting married on a budget, you can call us for Best Wedding Photographer in Jaipur at affordable prices." />
<meta name="keywords"
    content="Candid Photographers In Alwar, Wedding Photographer in Jaipur, Best Wedding Photographer in Jaipur, Hire best photographers for Wedding & Special Events, Best professional photographer in Jaipur, Photography services in Jaipur, Best events  photographer in Alwar, Photographers in Jaipur" />

<!-- Twitter Meta -->
<meta name="twitter:title" content="Title here">
<meta name="twitter:description" content="Discrption here">
<meta name="twitter:image" content="{{ asset('/public') }}/frontend_assets/img/header/favicon-original.png">

<!-- Facebook Meta -->
<meta property="og:url" content="{{ asset('/') }}family-photography/">
<meta property="og:title" content="Title here">
<meta property="og:description" content="Discrption here">
<meta property="og:image" content="{{ asset('/public') }}/frontend_assets/img/header/favicon-original.png">
<meta property="og:image:secure_url"
    content="{{ asset('/public') }}/frontend_assets/img/header/favicon-original.png">

<link rel="shortcut icon" type="image/x-icon" href="{{ asset('/public') }}/frontend_assets/img/header/logo.png" />
<link rel="icon" type="image/x-icon" href="{{ asset('/public') }}/frontend_assets/img/header/logo.png" />
<meta name="classification" content="Title here" />
<meta name="robots" content="index, follow" />
<link rel="canonical" href="{{ asset('/') }}family-photography/" />






<?php } else if (f_path . 'contact-us/' == $actual_link) { ?>
<!--  Title -->
<title>Photographers in Jaipur, Best Wedding Photographers in Jaipur, Hire Photographers in Alwar | Flixaura</title>

<!-- Required meta tags -->
<meta name="title" content="Title here" />
<meta name="description" content="Discrption here" />
<meta name="keywords" content="Keyword here" />

<!-- Twitter Meta -->
<meta name="twitter:title" content="Title here">
<meta name="twitter:description" content="Discrption here">
<meta name="twitter:image" content="{{ asset('/public') }}/frontend_assets/img/header/favicon-original.png">

<!-- Facebook Meta -->
<meta property="og:url" content="{{ asset('/') }}index.php">
<meta property="og:title" content="Title here">
<meta property="og:description" content="Discrption here">
<meta property="og:image" content="{{ asset('/public') }}/frontend_assets/img/header/favicon-original.png">
<meta property="og:image:secure_url"
    content="{{ asset('/public') }}/frontend_assets/img/header/favicon-original.png">

<link rel="shortcut icon" type="image/x-icon" href="{{ asset('/public') }}/frontend_assets/img/header/logo.png" />
<link rel="icon" type="image/x-icon" href="{{ asset('/public') }}/frontend_assets/img/header/logo.png" />
<meta name="classification" content="Title here" />
<link rel="canonical" href="{{ asset('/') }}index.php" />


<?php } else if (f_path . 'login/' == $actual_link) { ?>
<!--  Title -->
<title>Photographers in Jaipur, Best Wedding Photographers in Jaipur, Hire Photographers in Alwar | Flixaura</title>

<!-- Required meta tags -->
<meta name="title" content="Title here" />
<meta name="description" content="Discrption here" />
<meta name="keywords" content="Keyword here" />

<!-- Twitter Meta -->
<meta name="twitter:title" content="Title here">
<meta name="twitter:description" content="Discrption here">
<meta name="twitter:image" content="{{ asset('/public') }}/frontend_assets/img/header/favicon-original.png">

<!-- Facebook Meta -->
<meta property="og:url" content="{{ asset('/') }}index.php">
<meta property="og:title" content="Title here">
<meta property="og:description" content="Discrption here">
<meta property="og:image" content="{{ asset('/public') }}/frontend_assets/img/header/favicon-original.png">
<meta property="og:image:secure_url"
    content="{{ asset('/public') }}/frontend_assets/img/header/favicon-original.png">

<link rel="shortcut icon" type="image/x-icon" href="{{ asset('/public') }}/frontend_assets/img/header/logo.png" />
<link rel="icon" type="image/x-icon" href="{{ asset('/public') }}/frontend_assets/img/header/logo.png" />
<meta name="classification" content="Title here" />
<link rel="canonical" href="{{ asset('/') }}index.php" />


<?php } else if (f_path . 'register/' == $actual_link) { ?>
<!--  Title -->
<title>Photographers in Jaipur, Best Wedding Photographers in Jaipur, Hire Photographers in Alwar | Flixaura</title>

<!-- Required meta tags -->
<meta name="title" content="Title here" />
<meta name="description" content="Discrption here" />
<meta name="keywords" content="Keyword here" />

<!-- Twitter Meta -->
<meta name="twitter:title" content="Title here">
<meta name="twitter:description" content="Discrption here">
<meta name="twitter:image" content="{{ asset('/public') }}/frontend_assets/img/header/favicon-original.png">

<!-- Facebook Meta -->
<meta property="og:url" content="{{ asset('/') }}index.php">
<meta property="og:title" content="Title here">
<meta property="og:description" content="Discrption here">
<meta property="og:image" content="{{ asset('/public') }}/frontend_assets/img/header/favicon-original.png">
<meta property="og:image:secure_url"
    content="{{ asset('/public') }}/frontend_assets/img/header/favicon-original.png">

<link rel="shortcut icon" type="image/x-icon" href="{{ asset('/public') }}/frontend_assets/img/header/logo.png" />
<link rel="icon" type="image/x-icon" href="{{ asset('/public') }}/frontend_assets/img/header/logo.png" />
<meta name="classification" content="Title here" />
<link rel="canonical" href="{{ asset('/') }}index.php" />


<?php } else if (f_path . 'book-now/' == $actual_link) { ?>
<!--  Title -->
<title>Photographers in Jaipur, Best Wedding Photographers in Jaipur, Hire Photographers in Alwar | Flixaura</title>

<!-- Required meta tags -->
<meta name="title" content="Title here" />
<meta name="description" content="Discrption here" />
<meta name="keywords" content="Keyword here" />

<!-- Twitter Meta -->
<meta name="twitter:title" content="Title here">
<meta name="twitter:description" content="Discrption here">
<meta name="twitter:image" content="{{ asset('/public') }}/frontend_assets/img/header/favicon-original.png">

<!-- Facebook Meta -->
<meta property="og:url" content="{{ asset('/') }}index.php">
<meta property="og:title" content="Title here">
<meta property="og:description" content="Discrption here">
<meta property="og:image" content="{{ asset('/public') }}/frontend_assets/img/header/favicon-original.png">
<meta property="og:image:secure_url"
    content="{{ asset('/public') }}/frontend_assets/img/header/favicon-original.png">

<link rel="shortcut icon" type="image/x-icon" href="{{ asset('/public') }}/frontend_assets/img/header/logo.png" />
<link rel="icon" type="image/x-icon" href="{{ asset('/public') }}/frontend_assets/img/header/logo.png" />
<meta name="classification" content="Title here" />
<link rel="canonical" href="{{ asset('/') }}index.php" />



<?php } else if (f_path . 'categories/' == $actual_link) { ?>
<!--  Title -->
<title>Photographers in Jaipur, Best Wedding Photographers in Jaipur, Hire Photographers in Alwar | Flixaura</title>

<!-- Required meta tags -->
<meta name="title" content="Title here" />
<meta name="description" content="Discrption here" />
<meta name="keywords" content="Keyword here" />

<!-- Twitter Meta -->
<meta name="twitter:title" content="Title here">
<meta name="twitter:description" content="Discrption here">
<meta name="twitter:image" content="{{ asset('/public') }}/frontend_assets/img/header/favicon-original.png">

<!-- Facebook Meta -->
<meta property="og:url" content="{{ asset('/') }}categories">
<meta property="og:title" content="Title here">
<meta property="og:description" content="Discrption here">
<meta property="og:image" content="{{ asset('/public') }}/frontend_assets/img/header/favicon-original.png">
<meta property="og:image:secure_url"
    content="{{ asset('/public') }}/frontend_assets/img/header/favicon-original.png">

<link rel="shortcut icon" type="image/x-icon" href="{{ asset('/public') }}/frontend_assets/img/header/logo.png" />
<link rel="icon" type="image/x-icon" href="{{ asset('/public') }}/frontend_assets/img/header/logo.png" />
<meta name="classification" content="Title here" />
<link rel="canonical" href="{{ asset('/') }}categories" />




<?php } else if ((asset('/') . 'portfolio-category/' == $actual_link) || $urlpart[$countroute-2] == 'portfolio-category') { ?>
<!--  Title -->
<title>Photographers in Jaipur, Best Wedding Photographers in Jaipur, Hire Photographers in Alwar | Flixaura</title>

<!-- Required meta tags -->
<meta name="title" content="Title here" />
<meta name="description" content="Discrption here" />
<meta name="keywords" content="Keyword here" />

<!-- Twitter Meta -->
<meta name="twitter:title" content="Title here">
<meta name="twitter:description" content="Discrption here">
<meta name="twitter:image" content="{{ asset('/public') }}/{{ $portfoliocategory->image }}">

<!-- Facebook Meta -->
<meta property="og:url" content="{{ asset('/') }}/portfolio-category">
<meta property="og:title" content="Title here">
<meta property="og:description" content="Discrption here">
<meta property="og:image" content="{{ asset('/public') }}/{{ $portfoliocategory->image }}">
<meta property="og:image:secure_url" content="{{ asset('/public') }}/{{ $portfoliocategory->image }}">

<link rel="shortcut icon" type="image/x-icon" href="{{ asset('/') }}/aassets/img/header/logo.png" />
<link rel="icon" type="image/x-icon" href="{{ asset('/public') }}/frontend_assets/img/header/logo.png" />
<meta name="classification" content="Title here" />
<link rel="canonical" href="{{ asset('/') }}portfolio-category" />


<?php } else if (asset('/').'about-us/' == $actual_link) { ?>
<!--  Title -->
<title>Photographers in Jaipur, Best Wedding Photographers in Jaipur, Hire Photographers in Alwar | Flixaura</title>

<!-- Required meta tags -->
<meta name="title" content="Title here" />
<meta name="description" content="Discrption here" />
<meta name="keywords" content="Keyword here" />

<!-- Twitter Meta -->
<meta name="twitter:title" content="Title here">
<meta name="twitter:description" content="Discrption here">
<meta name="twitter:image" content="{{ asset('/public') }}/frontend_assets/img/header/favicon-original.png">

<!-- Facebook Meta -->
<meta property="og:url" content="{{ asset('/') }}/about-us">
<meta property="og:title" content="Title here">
<meta property="og:description" content="Discrption here">
<meta property="og:image" content="{{ asset('/public') }}/frontend_assets/img/header/favicon-original.png">
<meta property="og:image:secure_url"
    content="{{ asset('/public') }}/frontend_assets/img/header/favicon-original.png">

<link rel="shortcut icon" type="image/x-icon" href="{{ asset('/') }}/aassets/img/header/logo.png" />
<link rel="icon" type="image/x-icon" href="{{ asset('/public') }}/frontend_assets/img/header/logo.png" />
<meta name="classification" content="Title here" />
<link rel="canonical" href="{{ asset('/') }}/about-us" />



<?php } else { ?>
<!--  Title -->
<title>Photographers in Jaipur, Best Wedding Photographers in Jaipur, Hire Photographers in Alwar | Flixaura</title>

<!-- Required meta tags -->
<meta name="title"
    content="Best Wedding Photographer in Jaipur, Royal Wedding Photographers in Jaipur || Flixaura" />
<meta name="description"
    content="Your wedding day is the most special day in your life & for those getting married on a budget, you can call us for Best Wedding Photographer in Jaipur at affordable prices." />
<meta name="keywords"
    content="Candid Photographers In Alwar, Wedding Photographer in Jaipur, Best Wedding Photographer in Jaipur, Hire best photographers for Wedding & Special Events, Best professional photographer in Jaipur, Photography services in Jaipur, Best events  photographer in Alwar, Photographers in Jaipur" />

<!-- Twitter Meta -->
<meta name="twitter:title" content="Title here">
<meta name="twitter:description" content="Discrption here">
<meta name="twitter:image" content="{{ asset('/public') }}/frontend_assets/img/header/favicon-original.png">

<!-- Facebook Meta -->
<meta property="og:url" content="{{$actual_link}}">
<meta property="og:title" content="Title here">
<meta property="og:description" content="Discrption here">
<meta property="og:image" content="{{ asset('/public') }}/frontend_assets/img/header/favicon-original.png">
<meta property="og:image:secure_url"
    content="{{ asset('/public') }}/frontend_assets/img/header/favicon-original.png">

<link rel="shortcut icon" type="image/x-icon" href="{{ asset('/public') }}/frontend_assets/img/header/logo.png" />
<link rel="icon" type="image/x-icon" href="{{ asset('/public') }}/frontend_assets/img/header/logo.png" />
<meta name="classification" content="Title here" />
<meta name="robots" content="index, follow" />
<link rel="canonical" href="{{$actual_link}}" />



<?php } ?>
