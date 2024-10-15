@php
    use App\Traits\SettingsTrait;
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title>@yield('title')</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('/public/settings/' . SettingsTrait::settings('favicon')) }}">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&amp;display=swap" rel="stylesheet">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="{{ asset('/public/assets/css/vendor.min.css') }}">

    <!-- CSS Front Template -->
    <link rel="stylesheet" href="{{ asset('/public/assets/css/theme.minc619.css?v=1.0') }}">

    <link rel="preload" href="{{ asset('/public/assets/css/theme.min.css') }}" data-hs-appearance="default"
        as="style">
    <link rel="preload" href="{{ asset('/public/assets/css/theme-dark.min.css') }}" data-hs-appearance="dark"
        as="style">

    <style data-hs-appearance-onload-styles>
        * {
            transition: unset !important;
        }
    </style>

    <!-- ONLY DEV -->


    <!-- END ONLY DEV -->

    <script>
        window.hs_config = {
            "autopath": "@@autopath",
            "deleteLine": "hs-builder:delete",
            "deleteLine:build": "hs-builder:build-delete",
            "deleteLine:dist": "hs-builder:dist-delete",
            "previewMode": false,
            "startPath": "/{{ route('dashboard') }}",
            "vars": {
                "themeFont": "https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap",
                "version": "?v=1.0"
            },
            "layoutBuilder": {
                "extend": {
                    "switcherSupport": true
                },
                "header": {
                    "layoutMode": "default",
                    "containerMode": "container-fluid"
                },
                "sidebarLayout": "default"
            },
            "themeAppearance": {
                "layoutSkin": "default",
                "sidebarSkin": "default",
                "styles": {
                    "colors": {
                        "primary": "#377dff",
                        "transparent": "transparent",
                        "white": "#fff",
                        "dark": "132144",
                        "gray": {
                            "100": "#f9fafc",
                            "900": "#1e2022"
                        }
                    },
                    "font": "Inter"
                }
            },
            "languageDirection": {
                "lang": "en"
            },
            "skipFilesFromBundle": {
                "dist": ["assets/js/hs.theme-appearance.js", "assets/js/hs.theme-appearance-charts.js",
                    "assets/js/demo.js"
                ],
                "build": ["assets/css/theme.css",
                    "assets/vendor/hs-navbar-vertical-aside/dist/hs-navbar-vertical-aside-mini-cache.js",
                    "assets/js/demo.js", "assets/css/theme-dark.html", "assets/css/docs.css",
                    "assets/vendor/icon-set/style.html", "assets/js/hs.theme-appearance.js",
                    "assets/js/hs.theme-appearance-charts.js",
                    "node_modules/chartjs-plugin-datalabels/dist/chartjs-plugin-datalabels.min.html",
                    "assets/js/demo.js"
                ]
            },
            "minifyCSSFiles": ["assets/css/theme.css", "assets/css/theme-dark.css"],
            "copyDependencies": {
                "dist": {
                    "*assets/js/theme-custom.js": ""
                },
                "build": {
                    "*assets/js/theme-custom.js": "",
                    "node_modules/bootstrap-icons/font/*fonts/**": "assets/css"
                }
            },
            "buildFolder": "",
            "replacePathsToCDN": {},
            "directoryNames": {
                "src": "./src",
                "dist": "./dist",
                "build": "./build"
            },
            "fileNames": {
                "dist": {
                    "js": "theme.min.js",
                    "css": "theme.min.css"
                },
                "build": {
                    "css": "theme.min.css",
                    "js": "theme.min.js",
                    "vendorCSS": "vendor.min.css",
                    "vendorJS": "vendor.min.js"
                }
            },
            "fileTypes": "jpg|png|svg|mp4|webm|ogv|json"
        }
        window.hs_config.gulpRGBA = (p1) => {
            const options = p1.split(',')
            const hex = options[0].toString()
            const transparent = options[1].toString()

            var c;
            if (/^#([A-Fa-f0-9]{3}){1,2}$/.test(hex)) {
                c = hex.substring(1).split('');
                if (c.length == 3) {
                    c = [c[0], c[0], c[1], c[1], c[2], c[2]];
                }
                c = '0x' + c.join('');
                return 'rgba(' + [(c >> 16) & 255, (c >> 8) & 255, c & 255].join(',') + ',' + transparent + ')';
            }
            throw new Error('Bad Hex');
        }
        window.hs_config.gulpDarken = (p1) => {
            const options = p1.split(',')

            let col = options[0].toString()
            let amt = -parseInt(options[1])
            var usePound = false

            if (col[0] == "#") {
                col = col.slice(1)
                usePound = true
            }
            var num = parseInt(col, 16)
            var r = (num >> 16) + amt
            if (r > 255) {
                r = 255
            } else if (r < 0) {
                r = 0
            }
            var b = ((num >> 8) & 0x00FF) + amt
            if (b > 255) {
                b = 255
            } else if (b < 0) {
                b = 0
            }
            var g = (num & 0x0000FF) + amt
            if (g > 255) {
                g = 255
            } else if (g < 0) {
                g = 0
            }
            return (usePound ? "#" : "") + (g | (b << 8) | (r << 16)).toString(16)
        }
        window.hs_config.gulpLighten = (p1) => {
            const options = p1.split(',')

            let col = options[0].toString()
            let amt = parseInt(options[1])
            var usePound = false

            if (col[0] == "#") {
                col = col.slice(1)
                usePound = true
            }
            var num = parseInt(col, 16)
            var r = (num >> 16) + amt
            if (r > 255) {
                r = 255
            } else if (r < 0) {
                r = 0
            }
            var b = ((num >> 8) & 0x00FF) + amt
            if (b > 255) {
                b = 255
            } else if (b < 0) {
                b = 0
            }
            var g = (num & 0x0000FF) + amt
            if (g > 255) {
                g = 255
            } else if (g < 0) {
                g = 0
            }
            return (usePound ? "#" : "") + (g | (b << 8) | (r << 16)).toString(16)
        }
    </script>
</head>

<body class="has-navbar-vertical-aside navbar-vertical-aside-show-xl   footer-offset">

    <script src="{{ asset('/public/assets/js/hs.theme-appearance.js') }}"></script>

    <script src="{{ asset('/public/assets/vendor/hs-navbar-vertical-aside/dist/hs-navbar-vertical-aside-mini-cache.js') }}">
    </script>

    <!-- ========== HEADER ========== -->

    <header id="header"
        class="navbar navbar-expand-lg navbar-fixed navbar-height navbar-container navbar-bordered bg-white">
        <div class="navbar-nav-wrap">
            <!-- Logo -->
            <a class="navbar-brand" href="{{ route('dashboard') }}" aria-label="Front">
                <img class="navbar-brand-logo" src="{{ asset('/public/settings/' . SettingsTrait::settings('logo')) }}"
                    alt="Logo" data-hs-theme-appearance="default">
                <img class="navbar-brand-logo" src="{{ asset('/public/settings/' . SettingsTrait::settings('logo')) }}"
                    alt="Logo" data-hs-theme-appearance="dark">
                <img class="navbar-brand-logo-mini"
                    src="{{ asset('/public/settings/' . SettingsTrait::settings('logo')) }}" alt="Logo"
                    data-hs-theme-appearance="default">
                <img class="navbar-brand-logo-mini"
                    src="{{ asset('/public/settings/' . SettingsTrait::settings('logo')) }}" alt="Logo"
                    data-hs-theme-appearance="dark">
            </a>
            <!-- End Logo -->

            <div class="navbar-nav-wrap-content-start">
                <!-- Navbar Vertical Toggle -->
                <button type="button" class="js-navbar-vertical-aside-toggle-invoker navbar-aside-toggler">
                    <i class="bi-arrow-bar-left navbar-toggler-short-align"
                        data-bs-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
                        data-bs-toggle="tooltip" data-bs-placement="right" title="Collapse"></i>
                    <i class="bi-arrow-bar-right navbar-toggler-full-align"
                        data-bs-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
                        data-bs-toggle="tooltip" data-bs-placement="right" title="Expand"></i>
                </button>

                <!-- End Navbar Vertical Toggle -->
            </div>

            <div class="navbar-nav-wrap-content-end">
                <!-- Navbar -->
                <ul class="navbar-nav">

                    <li class="nav-item">
                        <!-- Account -->
                        <div class="dropdown">
                            <a class="navbar-dropdown-account-wrapper" href="javascript:;" id="accountNavbarDropdown"
                                data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside"
                                data-bs-dropdown-animation>
                                <div class="avatar avatar-sm avatar-circle">
                                    <img class="avatar-img" src="{{ Auth::user()->image }}" alt="Image Description">
                                    <span class="avatar-status avatar-sm-status avatar-status-success"></span>
                                </div>
                            </a>

                            <div class="dropdown-menu dropdown-menu-end navbar-dropdown-menu navbar-dropdown-menu-borderless navbar-dropdown-account"
                                aria-labelledby="accountNavbarDropdown" style="width: 16rem;">
                                <div class="dropdown-item-text">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-sm avatar-circle">
                                            <img class="avatar-img" src="{{ Auth::user()->image }}"
                                                alt="Image Description">
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h5 class="mb-0">{{ Auth::user()->name }}</h5>
                                            <p class="card-text text-body">{{ Auth::user()->email }}</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="dropdown-divider"></div>

                                <a class="dropdown-item" href="{{ route('profile.edit') }}">Profile &amp; account</a>
                                <a class="dropdown-item" href="{{ route('password.edit') }}">Change Password</a>
                                @hasrole('admin')
                                    <a class="dropdown-item" href="{{ route('settings') }}">Settings</a>
                                @endhasrole
                                <div class="dropdown-divider"></div>

                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">Sign
                                    out</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </div>
                        <!-- End Account -->
                    </li>
                </ul>
                <!-- End Navbar -->
            </div>
        </div>
    </header>

    <!-- ========== END HEADER ========== -->

    <!-- ========== MAIN CONTENT ========== -->
    <!-- Navbar Vertical -->

    <aside
        class="js-navbar-vertical-aside navbar navbar-vertical-aside navbar-vertical navbar-vertical-fixed navbar-expand-xl navbar-bordered bg-white  ">
        <div class="navbar-vertical-container">
            <div class="navbar-vertical-footer-offset">
                <!-- Logo -->

                <a class="navbar-brand" href="{{ route('dashboard') }}" aria-label="Front">
                    <img class="navbar-brand-logo"
                        src="{{ asset('/public/settings/' . SettingsTrait::settings('logo')) }}" alt="Logo"
                        data-hs-theme-appearance="default">
                    <img class="navbar-brand-logo"
                        src="{{ asset('/public/settings/' . SettingsTrait::settings('logo')) }}" alt="Logo"
                        data-hs-theme-appearance="dark">
                    <img class="navbar-brand-logo-mini"
                        src="{{ asset('/public/settings/' . SettingsTrait::settings('logo')) }}" alt="Logo"
                        data-hs-theme-appearance="default">
                    <img class="navbar-brand-logo-mini"
                        src="{{ asset('/public/settings/' . SettingsTrait::settings('logo')) }}" alt="Logo"
                        data-hs-theme-appearance="dark">
                </a>

                <!-- End Logo -->   

                <!-- Navbar Vertical Toggle -->
                <button type="button" class="js-navbar-vertical-aside-toggle-invoker navbar-aside-toggler">
                    <i class="bi-arrow-bar-left navbar-toggler-short-align"
                        data-bs-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
                        data-bs-toggle="tooltip" data-bs-placement="right" title="Collapse"></i>
                    <i class="bi-arrow-bar-right navbar-toggler-full-align"
                        data-bs-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
                        data-bs-toggle="tooltip" data-bs-placement="right" title="Expand"></i>
                </button>

                <!-- End Navbar Vertical Toggle -->

                <!-- Content -->
                <div class="navbar-vertical-content">
                    <div id="navbarVerticalMenu" class="nav nav-pills nav-vertical card-navbar-nav">
                        @hasanyrole('admin|photographer')
                            <div class="nav-item">
                                <a class="nav-link" href="{{ route('dashboard') }}" data-placement="left">
                                    <i class="bi-house-door nav-icon"></i>
                                    <span class="nav-link-title">Dashboard</span>
                                </a>
                            </div>
                            @hasrole('admin')
                            <div class="nav-item">
                                <a class="nav-link dropdown-toggle" href="#navbarVerticalMenuClient" role="button"
                                    data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuClient"
                                    aria-expanded="false" aria-controls="navbarVerticalMenuClient">
                                    <i class="bi bi-images nav-icon"></i>
                                    <span class="nav-link-title">Client Manager</span>
                                </a>

                                <div id="navbarVerticalMenuClient" class="nav-collapse collapse hide"
                                    data-bs-parent="#navbarVerticalMenu">
                                    <a class="nav-link" href="{{ route('client.createclientslider') }}">Add
                                        Slider</a>
                                    <a class="nav-link " href="{{ route('client.viewclientslider') }}">View
                                        Slider</a>
                                </div>
                            </div>
                            <div class="nav-item">
                                <a class="nav-link dropdown-toggle" href="#navbarVerticalMenuCarrier" role="button"
                                    data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuCarrier"
                                    aria-expanded="false" aria-controls="navbarVerticalMenuCarrier">
                                    <i class="bi bi-file-person nav-icon"></i>
                                    <span class="nav-link-title">Carrier Manager</span>
                                </a>

                                <div id="navbarVerticalMenuCarrier" class="nav-collapse collapse hide"
                                    data-bs-parent="#navbarVerticalMenu">
                                    <a class="nav-link " href="{{ route('carrier.view') }}">View
                                        Carrier</a>
                                </div>
                            </div>
                            <div class="nav-item">
                                <a class="nav-link dropdown-toggle" href="#navbarVerticalMenuPortfolio" role="button"
                                    data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuPortfolio"
                                    aria-expanded="false" aria-controls="navbarVerticalMenuPortfolio">
                                    <i class="bi bi-camera-fill nav-icon"></i>
                                    <span class="nav-link-title">Portfolio Manager</span>
                                </a>

                                <div id="navbarVerticalMenuPortfolio" class="nav-collapse collapse hide"
                                    data-bs-parent="#navbarVerticalMenu">
                                    <a class="nav-link" href="{{ route('category.createpcategory') }}">Add
                                        Category</a>
                                    <a class="nav-link " href="{{ route('category.viewpcategory') }}">View
                                        Category</a>
                                    <a class="nav-link" href="{{ route('portfolio.createportfolio') }}">Add
                                        Portfolio</a>
                                    <a class="nav-link " href="{{ route('portfolio.viewportfolio') }}">View
                                        Portfolio</a>
                                </div>
                            </div>
                            <div class="nav-item">
                                <a class="nav-link dropdown-toggle" href="#navbarVerticalMenuPhotoCate" role="button"
                                    data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuPhotoCate"
                                    aria-expanded="false" aria-controls="navbarVerticalMenuPhotoCate">
                                    <i class="bi-diagram-3-fill nav-icon"></i>
                                    <span class="nav-link-title">Photographer Category Manager</span>
                                </a>

                                <div id="navbarVerticalMenuPhotoCate" class="nav-collapse collapse hide"
                                    data-bs-parent="#navbarVerticalMenu">
                                    <a class="nav-link" href="{{ route('category.createpphotocategory') }}">Add
                                        Category</a>
                                    <a class="nav-link " href="{{ route('category.viewpphotocategory') }}">View
                                        Category</a>
                                </div>
                            </div>
                            <div class="nav-item">
                                <a class="nav-link dropdown-toggle" href="#navbarVerticalMenuBlogCategory" role="button"
                                    data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuBlogCategory"
                                    aria-expanded="false" aria-controls="navbarVerticalMenBlogCategory">
                                    <i class="bi-diagram-2-fill nav-icon"></i>
                                    <span class="nav-link-title">Blog Category Manager</span>
                                </a>

                                <div id="navbarVerticalMenuBlogCategory" class="nav-collapse collapse hide"
                                    data-bs-parent="#navbarVerticalMenu">
                                    <a class="nav-link" href="{{ route('blogcategory.index') }}">Add
                                        Category</a>
                                    <a class="nav-link " href="{{ route('blogcategory.view') }}">View
                                        Category</a>
                                </div>
                            </div>
                            <div class="nav-item">
                                <a class="nav-link dropdown-toggle" href="#navbarVerticalMenuBlog" role="button"
                                    data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuBlog"
                                    aria-expanded="false" aria-controls="navbarVerticalMenuBlog">
                                    <i class="bi-bootstrap-fill nav-icon"></i>
                                    <span class="nav-link-title">Blog Manager</span>
                                </a>

                                <div id="navbarVerticalMenuBlog" class="nav-collapse collapse hide"
                                    data-bs-parent="#navbarVerticalMenu">
                                    <a class="nav-link" href="{{ route('blog.index') }}">Add
                                        Blog</a>
                                    <a class="nav-link " href="{{ route('blog.view') }}">View
                                        Blog</a>
                                </div>
                            </div>
                            <div class="nav-item">
                                <a class="nav-link dropdown-toggle" href="#navbarVerticalMenuContact" role="button"
                                    data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuContact"
                                    aria-expanded="false" aria-controls="navbarVerticalMenuContact">
                                    <i class="bi bi-envelope nav-icon"></i>
                                    <span class="nav-link-title">Contact Manager</span>
                                </a>

                                <div id="navbarVerticalMenuContact" class="nav-collapse collapse hide"
                                    data-bs-parent="#navbarVerticalMenu">
                                    <a class="nav-link" href="{{ route('contact.viewbooking') }}">Booking</a>
                                    <a class="nav-link " href="{{ route('contact.viewcontact') }}">Contact Us</a>
                                </div>
                            </div>
                            <div class="nav-item">
                                <a class="nav-link dropdown-toggle" href="#navbarVerticalMenuCity" role="button"
                                    data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuCity"
                                    aria-expanded="false" aria-controls="navbarVerticalMenuCity">
                                    <i class="bi bi-geo-alt-fill nav-icon"></i>
                                    <span class="nav-link-title">City Manager</span>
                                </a>

                                <div id="navbarVerticalMenuCity" class="nav-collapse collapse hide"
                                    data-bs-parent="#navbarVerticalMenu">
                                    <a class="nav-link" href="{{ route('city.add_city') }}">Add City</a>
                                    <a class="nav-link " href="{{ route('city.view_city') }}">View City</a>
                                </div>
                            </div>
                            <div class="nav-item">
                                <a class="nav-link dropdown-toggle" href="#navbarVerticalMenuHome" role="button"
                                    data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuHome"
                                    aria-expanded="false" aria-controls="navbarVerticalMenuHome">
                                    <i class="bi bi-laptop-fill nav-icon"></i>
                                    <span class="nav-link-title">Home Page Manager</span>
                                </a>

                                <div id="navbarVerticalMenuHome" class="nav-collapse collapse hide"
                                    data-bs-parent="#navbarVerticalMenu">
                                    <a class="nav-link" href="{{ route('city.createexpertise') }}">Add Expertise</a>
                                    <a class="nav-link " href="{{ route('city.viewexpertise') }}">View Expertise</a>
                                </div>
                            </div>
                            <div class="nav-item">
                                <a class="nav-link dropdown-toggle" href="#navbarVerticalMenuPhotogrpher" role="button"
                                    data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuPhotogrpher"
                                    aria-expanded="false" aria-controls="navbarVerticalMenuPhotogrpher">
                                    <i class="bi-people-fill nav-icon"></i>
                                    <span class="nav-link-title">Photographer Manager</span>
                                </a>

                                <div id="navbarVerticalMenuPhotogrpher" class="nav-collapse collapse hide"
                                    data-bs-parent="#navbarVerticalMenu">
                                    <a class="nav-link " href="{{ route('photographer.viewrequests') }}">View
                                        Photographer Requests</a>
                                    <a class="nav-link " href="{{ route('photographer.viewphotographers') }}">View
                                        Photographers</a>
                                </div>
                            </div>
                            <!-- End Collapse -->
                        @endhasrole
                        {{-- <div class="nav-item">
                            <a class="nav-link dropdown-toggle" href="#navbarVerticalMenuImagestock" role="button"
                                data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuImagestock"
                                aria-expanded="false" aria-controls="navbarVerticalMenuImagestock">
                                <i class="bi bi-camera-fill nav-icon"></i>
                                <span class="nav-link-title">Image Stock Manager</span>
                            </a>

                            <div id="navbarVerticalMenuImagestock" class="nav-collapse collapse hide"
                                data-bs-parent="#navbarVerticalMenu">
                                <a class="nav-link" href="{{ route('createimagestock') }}">Add
                                    Image</a>
                                <a class="nav-link " href="{{ route('viewimagestock') }}">View
                                    Images</a>
                            </div>
                        </div> --}}
                        <div class="nav-item">
                            <a class="nav-link dropdown-toggle" href="#navbarVerticalMenuPhotoortfolio" role="button"
                                data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuPhotoortfolio"
                                aria-expanded="false" aria-controls="navbarVerticalMenuPhotoortfolio">
                                <i class="bi bi-camera-fill nav-icon"></i>
                                <span class="nav-link-title">PhotoG Portfolio Manager</span>
                            </a>

                            <div id="navbarVerticalMenuPhotoortfolio" class="nav-collapse collapse hide"
                                data-bs-parent="#navbarVerticalMenu">
                                <a class="nav-link" href="{{ route('createphotoportfolio') }}">Add
                                    Portfolio</a>
                                <a class="nav-link " href="{{ route('viewphotoportfolio') }}">View
                                    Portfolio</a>
                            </div>
                        </div>
                        @endhasrole
                        
                    </div>

                </div>
                <!-- End Content -->

                <!-- Footer -->
                <div class="navbar-vertical-footer">
                    <ul class="navbar-vertical-footer-list">
                        <li class="navbar-vertical-footer-list-item">
                            <!-- Style Switcher -->
                            <div class="dropdown dropup">
                                <button type="button" class="btn btn-ghost-secondary btn-icon rounded-circle"
                                    id="selectThemeDropdown" data-bs-toggle="dropdown" aria-expanded="false"
                                    data-bs-dropdown-animation>

                                </button>

                                <div class="dropdown-menu navbar-dropdown-menu navbar-dropdown-menu-borderless"
                                    aria-labelledby="selectThemeDropdown">
                                    <a class="dropdown-item" href="#" data-icon="bi-moon-stars"
                                        data-value="auto">
                                        <i class="bi-moon-stars me-2"></i>
                                        <span class="text-truncate" title="Auto (system default)">Auto (system
                                            default)</span>
                                    </a>
                                    <a class="dropdown-item" href="#" data-icon="bi-brightness-high"
                                        data-value="default">
                                        <i class="bi-brightness-high me-2"></i>
                                        <span class="text-truncate" title="Default (light mode)">Default (light
                                            mode)</span>
                                    </a>
                                    <a class="dropdown-item active" href="#" data-icon="bi-moon"
                                        data-value="dark">
                                        <i class="bi-moon me-2"></i>
                                        <span class="text-truncate" title="Dark">Dark</span>
                                    </a>
                                </div>
                            </div>

                            <!-- End Style Switcher -->
                        </li>

                        <li class="navbar-vertical-footer-list-item">
                            <!-- Other Links -->
                            <div class="dropdown dropup">
                                <button type="button" class="btn btn-ghost-secondary btn-icon rounded-circle"
                                    id="otherLinksDropdown" data-bs-toggle="dropdown" aria-expanded="false"
                                    data-bs-dropdown-animation>
                                    <i class="bi-info-circle"></i>
                                </button>

                                <div class="dropdown-menu navbar-dropdown-menu-borderless"
                                    aria-labelledby="otherLinksDropdown">
                                    <span class="dropdown-header">Contacts</span>
                                    <a class="dropdown-item" href="#">
                                        <i class="bi bi-envelope dropdown-item-icon"></i>
                                        <span class="text-truncate"
                                            title="Contact support">ajays1.img@gmail.com</span>
                                    </a>
                                </div>
                            </div>
                            <!-- End Other Links -->
                        </li>
                    </ul>
                </div>
                <!-- End Footer -->
            </div>
        </div>
    </aside>

    <!-- End Navbar Vertical -->
    <div id="liveToast" class="position-fixed toast hide" role="alert" aria-live="assertive" aria-atomic="true"
        style="top: 20px; right: 20px; z-index: 1000;">
        <div class="toast-header bg-success text-white">
            <div class="d-flex align-items-center flex-grow-1">
                <div class="flex-shrink-0">
                    <img class="avatar avatar-sm avatar-circle"
                        src="{{ asset('/public/settings/' . SettingsTrait::settings('favicon')) }}"
                        alt="Image description">
                </div>
                <div class="flex-grow-1 ms-3">
                    <h5 class="mb-0 text-white">{{ SettingsTrait::settings('project_name') }}</h5>
                    <small class="ms-auto">Just Now</small>
                </div>
                <div class="text-end">
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
            </div>
        </div>
        <div class="toast-body">
            {{ session('error') }}{{ session('success') }}
        </div>
    </div>
    <main id="content" role="main" class="main">
        <!-- Content -->
        @yield('content')
        <!-- End Content -->

        <!-- Footer -->

        <div class="footer">
            <div class="row justify-content-between align-items-center">
                <div class="col">
                    <p class="fs-6 mb-0">Copyright &copy;<span class="d-none d-sm-inline-block">Admin 2023.</span></p>
                </div>
                <!-- End Col -->
            </div>
            <!-- End Row -->
        </div>

        <!-- End Footer -->
    </main>
    <!-- ========== END MAIN CONTENT ========== -->

    <!-- ONLY DEV -->

    <!-- Builder -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasBuilder"
        aria-labelledby="offcanvasBuilderLabel">
        <div class="offcanvas-header align-items-start">
            <div>
                <h3 id="offcanvasBuilderLabel">Front Builder</h3>
                <p class="mb-0">Customize the overview page layout.</p>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>

        <div class="offcanvas-body">
            <h4 class="mb-1">Theme Appearance Mode</h4>
            <p>Check out all <a href="documentation/layout.html">Layout Options here</a></p>

            <div class="row gx-3">
                <!-- Check -->
                <div class="col-6">
                    <div class="form-check form-check-label-highlighter text-center">
                        <input type="radio" class="form-check-input" name="layoutSkinsRadio"
                            id="layoutSkinsRadio1" checked value="default">
                        <label class="form-check-label mb-2" for="layoutSkinsRadio1">
                            <img class="form-check-img" src="{{ asset('/public/assets/img/415x310/img1.jpg') }}"
                                alt="Image Description">
                        </label>
                        <span class="form-check-text">Default</span>
                    </div>
                </div>
                <!-- End Check -->

                <!-- Check -->
                <div class="col-6">
                    <div class="form-check form-check-label-highlighter text-center">
                        <input type="radio" class="form-check-input" name="layoutSkinsRadio"
                            id="layoutSkinsRadio2" value="dark">
                        <label class="form-check-label mb-2" for="layoutSkinsRadio2">
                            <img class="form-check-img" src="{{ asset('/public/assets/img/415x310/img2.jpg') }}"
                                alt="Image Description">
                        </label>
                        <span class="form-check-text">Dark Mode</span>
                    </div>
                </div>
                <!-- End Check -->
            </div>
            <!-- End Row -->

            <hr>

            <div class="row gx-3">
                <!-- Check -->
                <div class="col-6">
                    <div class="form-check form-check-label-highlighter text-center">
                        <input type="radio" class="form-check-input" name="layout" id="navbarLayoutSkinsRadio1"
                            checked value="default">
                        <label class="form-check-label mb-2" for="navbarLayoutSkinsRadio1">
                            <img class="form-check-img"
                                src="{{ asset('/public/assets/svg/layouts-light/sidebar-default.svg') }}"
                                alt="Image Description" data-hs-theme-appearance="dark">
                            <img class="form-check-img"
                                src="{{ asset('/public/assets/svg/layouts/sidebar-default.svg') }}"
                                alt="Image Description" data-hs-theme-appearance="default">
                        </label>
                        <span class="form-check-text">Default</span>
                    </div>
                </div>
                <!-- End Check -->

                <!-- Check -->
                <div class="col-6">
                    <div class="form-check form-check-label-highlighter text-center">
                        <input type="radio" class="form-check-input" name="layout" id="navbarLayoutSkinsRadio2"
                            value="navbar-dark">
                        <label class="form-check-label mb-2" for="navbarLayoutSkinsRadio2">
                            <img class="form-check-img"
                                src="{{ asset('/public/assets/svg/layouts-light/sidebar-dark.svg') }}"
                                alt="Image Description" data-hs-theme-appearance="dark">
                            <img class="form-check-img"
                                src="{{ asset('/public/assets/svg/layouts/sidebar-dark.svg') }}"
                                alt="Image Description" data-hs-theme-appearance="default">
                        </label>
                        <span class="form-check-text">Dark</span>
                    </div>
                </div>
                <!-- End Check -->
            </div>
            <!-- End Row -->

            <hr>

            <h4 class="mb-1">Sidebar Nav</h4>
            <p>Check out all <a href="documentation/layout.html">Layout Options here</a></p>

            <div class="row gx-3">
                <!-- Check -->
                <div class="col-6">
                    <div class="form-check form-check-label-highlighter text-center">
                        <input type="radio" class="form-check-input" name="sidebarNavOptions"
                            id="sidebarNavOptions1" value="pills" checked>
                        <label class="form-check-label mb-2" for="sidebarNavOptions1">
                            <img class="form-check-img"
                                src="{{ asset('/public/assets/svg/layouts-light/demo-layouts-default-classic.svg') }}"
                                alt="Image Description" data-hs-theme-appearance="dark">
                            <img class="form-check-img"
                                src="{{ asset('/public/assets/svg/layouts/demo-layouts-default-classic.svg') }}"
                                alt="Image Description" data-hs-theme-appearance="default">
                        </label>
                        <span class="form-check-text">Pills</span>
                    </div>
                </div>
                <!-- End Check -->

                <!-- Check -->
                <div class="col-6">
                    <div class="form-check form-check-label-highlighter text-center">
                        <input type="radio" class="form-check-input" name="sidebarNavOptions"
                            id="sidebarNavOptions2" value="tabs">
                        <label class="form-check-label mb-2" for="sidebarNavOptions2">
                            <img class="form-check-img"
                                src="{{ asset('/public/assets/svg/layouts-light/demo-layouts-nav-tabs.svg') }}"
                                alt="Image Description" data-hs-theme-appearance="dark">
                            <img class="form-check-img"
                                src="{{ asset('/public/assets/svg/layouts/demo-layouts-nav-tabs.svg') }}"
                                alt="Image Description" data-hs-theme-appearance="default">
                        </label>
                        <span class="form-check-text">Tabs</span>
                    </div>
                </div>
                <!-- End Check -->
            </div>
            <!-- End Row -->

            <hr>

            <!-- Form Switch -->
            <label class="row form-check form-switch mb-3" for="builderFluidSwitch">
                <span class="col-10 ms-0">
                    <span class="d-block h4 mb-1">Header Layout Options</span>
                    <span class="d-block fs-5">Toggle to container-fluid layout</span>
                </span>
                <span class="col-2 text-end">
                    <input type="checkbox" class="form-check-input" id="builderFluidSwitch">
                </span>
            </label>
            <!-- End Form Switch -->

            <div class="row gx-3">
                <!-- Check -->
                <div class="col-6">
                    <div class="form-check form-check-label-highlighter text-center">
                        <input type="radio" class="form-check-input" name="layout" id="headerLayoutOptions1"
                            value="single-header">
                        <label class="form-check-label mb-2" for="headerLayoutOptions1">
                            <img class="form-check-img"
                                src="{{ asset('/public/assets/svg/layouts/header-default-container.svg') }}"
                                alt="Image Description" data-hs-theme-appearance="default">
                            <img class="form-check-img"
                                src="{{ asset('/public/assets/svg/layouts-light/header-default-container.svg') }}"
                                alt="Image Description" data-hs-theme-appearance="dark">
                        </label>
                        <span class="form-check-text">Default</span>
                    </div>
                </div>
                <!-- End Check -->

                <!-- Check -->
                <div class="col-6">
                    <div class="form-check form-check-label-highlighter text-center">
                        <input type="radio" class="form-check-input" name="layout" id="headerLayoutOptions2"
                            value="double-header">
                        <label class="form-check-label mb-2" for="headerLayoutOptions2">
                            <img class="form-check-img"
                                src="{{ asset('/public/assets/svg/layouts/header-double-line-container.svg') }}"
                                alt="Image Description" data-hs-theme-appearance="default">
                            <img class="form-check-img"
                                src="{{ asset('/public/assets/svg/layouts-light/header-double-line-container.svg') }}"
                                alt="Image Description" data-hs-theme-appearance="dark">
                        </label>
                        <span class="form-check-text">Double line</span>
                    </div>
                </div>
                <!-- End Check -->
            </div>
            <!-- End Row -->
        </div>

        <!-- Footer -->
        <div class="offcanvas-footer">
            <div class="row gx-3">
                <div class="col">
                    <div class="d-grid">
                        <button type="button" id="js-builder-reset" class="btn btn-white btn-lg">
                            <i class="bi-arrow-counterclockwise"></i> Reset
                        </button>
                    </div>
                </div>
                <!-- End Col -->

                <div class="col">
                    <div class="d-grid">
                        <button type="button" id="js-builder-preview" class="btn btn-primary btn-lg">
                            <i class="eye-visible"></i> Preview
                        </button>
                    </div>
                </div>
                <!-- End Col -->
            </div>
            <!-- End Row -->
        </div>
        <!-- End Footer -->
    </div>

    <!-- End Builder -->

    <!-- Builder Toggle -->
    @hasrole('admin')
    <div id="builderOffcanvas" class="position-fixed bottom-0 end-0 me-5 mb-5" style="z-index: 3;"
        data-bs-toggle="offcanvas" data-bs-target="#offcanvasBuilder" aria-controls="offcanvasBuilder">
        <a class="btn btn-dark btn-lg" href="javascript:;">
            <i class="bi-sliders fs-6 me-2"></i> Customize
        </a>
    </div>
    @endhasrole
    <!-- End Builder Toggle -->

    <div class="d-none js-build-layouts">
        <div class="js-build-layout-header-default">
            <!-- Single Header -->
            <header id="header" class="navbar navbar-expand-lg navbar-bordered bg-white  ">
                <div class="container">
                    <nav class="js-mega-menu navbar-nav-wrap">
                        <!-- Logo -->
                        <a class="navbar-brand" href="{{ route('dashboard') }}" aria-label="Front">
                            <img class="navbar-brand-logo"
                                src="{{ asset('/public/settings/' . SettingsTrait::settings('logo')) }}"
                                alt="Logo" data-hs-theme-appearance="default">
                            <img class="navbar-brand-logo"
                                src="{{ asset('/public/settings/' . SettingsTrait::settings('logo')) }}"
                                alt="Logo" data-hs-theme-appearance="dark">
                        </a>

                        <!-- End Logo -->

                        <!-- Secondary Content -->
                        <div class="navbar-nav-wrap-secondary-content">
                            <!-- Navbar -->
                            <ul class="navbar-nav">

                                <li class="nav-item">
                                    <!-- Account -->
                                    <div class="dropdown">
                                        <a class="navbar-dropdown-account-wrapper" href="javascript:;"
                                            id="accountNavbarDropdown" data-bs-toggle="dropdown"
                                            aria-expanded="false" data-bs-auto-close="outside"
                                            data-bs-dropdown-animation>
                                            <div class="avatar avatar-sm avatar-circle">
                                                <img class="avatar-img" src="{{ Auth::user()->image }}"
                                                    alt="Image Description">
                                                <span
                                                    class="avatar-status avatar-sm-status avatar-status-success"></span>
                                            </div>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-end navbar-dropdown-menu navbar-dropdown-menu-borderless navbar-dropdown-account"
                                            aria-labelledby="accountNavbarDropdown" style="width: 16rem;">
                                            <div class="dropdown-item-text">
                                                <div class="d-flex align-items-center">
                                                    <div class="avatar avatar-sm avatar-circle">
                                                        <img class="avatar-img" src="{{ Auth::user()->image }}"
                                                            alt="Image Description">
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <h5 class="mb-0">{{ Auth::user()->name }}</h5>
                                                        <p class="card-text text-body">{{ Auth::user()->email }}</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="dropdown-divider"></div>

                                            <a class="dropdown-item" href="{{ route('profile.edit') }}">Profile &amp;
                                                account</a>
                                            @if (Auth::user()->hasRole('admin'))
                                                <a class="dropdown-item" href="{{ route('settings') }}">Settings</a>
                                            @endif
                                            <a class="dropdown-item" href="{{ route('password.edit') }}">Change
                                                Password</a>

                                            <div class="dropdown-divider"></div>

                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">Sign
                                                out</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </div>
                                    <!-- End Account -->
                                </li>
                            </ul>
                            <!-- End Navbar -->
                        </div>
                        <!-- End Secondary Content -->

                        <!-- Toggler -->
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarContainerNavDropdown" aria-controls="navbarContainerNavDropdown"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-default">
                                <i class="bi-list"></i>
                            </span>
                            <span class="navbar-toggler-toggled">
                                <i class="bi-x"></i>
                            </span>
                        </button>
                        <!-- End Toggler -->

                        <!-- Collapse -->
                        <div class="collapse navbar-collapse" id="navbarContainerNavDropdown">
                            <ul class="navbar-nav">
                                <!-- Dashboards -->
                                <li class="nav-item">
                                    <a class="nav-link " href="layouts/{{ route('dashboard') }}">
                                        <i class="bi-house-door dropdown-item-icon"></i> Dashboard
                                    </a>
                                </li>
                                <li class="hs-has-sub-menu nav-item">
                                    <a id="PortfoliosMegaMenu"
                                        class="hs-mega-menu-invoker nav-link dropdown-toggle active" href="#"
                                        role="button"><i class="bi bi-camera-fill dropdown-item-icon"></i>
                                        Portfolio Manager</a>

                                    <!-- Mega Menu -->
                                    <div class="hs-sub-menu dropdown-menu navbar-dropdown-menu-borderless"
                                        aria-labelledby="PortfoliosMegaMenu" style="min-width: 14rem;">
                                        <a class="dropdown-item active" href="">Add Category</a>
                                        <a class="dropdown-item " href="">View Category</a>
                                        <a class="dropdown-item active" href="">Add Portfolio</a>
                                        <a class="dropdown-item " href="">View Portfolio</a>
                                    </div>
                                    <!-- End Mega Menu -->
                                </li>
                                <li class="hs-has-sub-menu nav-item">
                                    <a id="ContactsMegaMenu"
                                        class="hs-mega-menu-invoker nav-link dropdown-toggle active" href="#"
                                        role="button"><i class="bi bi-envelope dropdown-item-icon"></i>
                                        Contact Manager</a>

                                    <!-- Mega Menu -->
                                    <div class="hs-sub-menu dropdown-menu navbar-dropdown-menu-borderless"
                                        aria-labelledby="ContactsMegaMenu" style="min-width: 14rem;">
                                        <a class="dropdown-item active" href="">Booking</a>
                                        <a class="dropdown-item " href="">Contact Us</a>
                                    </div>
                                    <!-- End Mega Menu -->
                                </li>
                                <li class="hs-has-sub-menu nav-item">
                                    <a id="CityMegaMenu" class="hs-mega-menu-invoker nav-link dropdown-toggle active"
                                        href="#" role="button"><i
                                            class="bi bi-car-front-fill dropdown-item-icon"></i>
                                        City Manager</a>

                                    <!-- Mega Menu -->
                                    <div class="hs-sub-menu dropdown-menu navbar-dropdown-menu-borderless"
                                        aria-labelledby="CityMegaMenu" style="min-width: 14rem;">
                                        <a class="dropdown-item active" href="">Add City</a>
                                        <a class="dropdown-item " href="">View City</a>
                                    </div>
                                    <!-- End Mega Menu -->
                                </li>
                                <li class="hs-has-sub-menu nav-item">
                                    <a id="HomeMegaMenu" class="hs-mega-menu-invoker nav-link dropdown-toggle active"
                                        href="#" role="button"><i
                                            class="bi bi-laptop-fill dropdown-item-icon"></i>
                                        Home Page Manager</a>

                                    <!-- Mega Menu -->
                                    <div class="hs-sub-menu dropdown-menu navbar-dropdown-menu-borderless"
                                        aria-labelledby="HomeMegaMenu" style="min-width: 14rem;">
                                        <a class="dropdown-item active" href="">Add Expertise</a>
                                        <a class="dropdown-item " href="">View Expertise</a>
                                    </div>
                                    <!-- End Mega Menu -->
                                </li>
                                <!-- End Dashboards -->
                            </ul>

                        </div>
                        <!-- End Collapse -->
                    </nav>
                </div>
            </header>

            <!-- End Single Header -->
        </div>
        <div class="js-build-layout-header-double">
            <!-- Double Header -->
            <header id="header" class="navbar navbar-expand-lg navbar-bordered navbar-spacer-y-0 flex-lg-column">
                <div class="navbar-dark w-100 bg-dark py-2">
                    <div class="container">
                        <div class="navbar-nav-wrap">
                            <!-- Logo -->
                            <a class="navbar-brand" href="{{ route('dashboard') }}" aria-label="Front">
                                <img class="navbar-brand-logo"
                                    src="{{ asset('/public/settings/' . SettingsTrait::settings('logo')) }}"
                                    alt="Logo">
                            </a>
                            <!-- End Logo -->

                            <!-- Content End -->
                            <div class="navbar-nav-wrap-content-end">
                                <!-- Navbar -->
                                <ul class="navbar-nav">

                                    <li class="nav-item">
                                        <!-- Style Switcher -->
                                        <div class="dropdown ">
                                            <button type="button" class="btn btn-ghost-light btn-icon rounded-circle"
                                                id="selectThemeDropdown" data-bs-toggle="dropdown"
                                                aria-expanded="false" data-bs-dropdown-animation>

                                            </button>

                                            <div class="dropdown-menu dropdown-menu-end navbar-dropdown-menu navbar-dropdown-menu-borderless"
                                                aria-labelledby="selectThemeDropdown">
                                                <a class="dropdown-item" href="#" data-icon="bi-moon-stars"
                                                    data-value="auto">
                                                    <i class="bi-moon-stars me-2"></i>
                                                    <span class="text-truncate" title="Auto (system default)">Auto
                                                        (system default)</span>
                                                </a>
                                                <a class="dropdown-item" href="#"
                                                    data-icon="bi-brightness-high" data-value="default">
                                                    <i class="bi-brightness-high me-2"></i>
                                                    <span class="text-truncate" title="Default (light mode)">Default
                                                        (light mode)</span>
                                                </a>
                                                <a class="dropdown-item active" href="#" data-icon="bi-moon"
                                                    data-value="dark">
                                                    <i class="bi-moon me-2"></i>
                                                    <span class="text-truncate" title="Dark">Dark</span>
                                                </a>
                                            </div>
                                        </div>

                                        <!-- End Style Switcher -->
                                    </li>

                                    <li class="nav-item">
                                        <!-- Account -->
                                        <div class="dropdown">
                                            <a class="navbar-dropdown-account-wrapper" href="javascript:;"
                                                id="accountNavbarDropdown" data-bs-toggle="dropdown"
                                                aria-expanded="false" data-bs-auto-close="outside"
                                                data-bs-dropdown-animation>
                                                <div class="avatar avatar-sm avatar-circle">
                                                    <img class="avatar-img" src="{{ Auth::user()->image }}"
                                                        alt="Image Description">
                                                    <span
                                                        class="avatar-status avatar-sm-status avatar-status-success"></span>
                                                </div>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-end navbar-dropdown-menu navbar-dropdown-menu-borderless navbar-dropdown-account"
                                                aria-labelledby="accountNavbarDropdown" style="width: 16rem;">
                                                <div class="dropdown-item-text">
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar avatar-sm avatar-circle">
                                                            <img class="avatar-img" src="{{ Auth::user()->image }}"
                                                                alt="Image Description">
                                                        </div>
                                                        <div class="flex-grow-1 ms-3">
                                                            <h5 class="mb-0">{{ Auth::user()->name }}</h5>
                                                            <p class="card-text text-body">{{ Auth::user()->email }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="dropdown-divider"></div>

                                                <a class="dropdown-item" href="{{ route('profile.edit') }}">Profile
                                                    &amp; account</a>
                                                <a class="dropdown-item" href="{{ route('settings') }}">Settings</a>
                                                <a class="dropdown-item" href="{{ route('password.edit') }}">Change
                                                    Password</a>

                                                <div class="dropdown-divider"></div>

                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">Sign
                                                    out</a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                    class="d-none">
                                                    @csrf
                                                </form>
                                            </div>
                                        </div>
                                        <!-- End Account -->
                                    </li>

                                    <li class="nav-item">
                                        <!-- Toggler -->
                                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#navbarDoubleLineContainerNavDropdown"
                                            aria-controls="navbarDoubleLineContainerNavDropdown" aria-expanded="false"
                                            aria-label="Toggle navigation">
                                            <span class="navbar-toggler-default">
                                                <i class="bi-list"></i>
                                            </span>
                                            <span class="navbar-toggler-toggled">
                                                <i class="bi-x"></i>
                                            </span>
                                        </button>
                                        <!-- End Toggler -->
                                    </li>
                                </ul>
                                <!-- End Navbar -->
                            </div>
                            <!-- End Content End -->
                        </div>
                    </div>
                </div>

                <div class="container">
                    <nav class="js-mega-menu flex-grow-1">
                        <!-- Collapse -->
                        <div class="collapse navbar-collapse" id="navbarDoubleLineContainerNavDropdown">
                            <ul class="navbar-nav">
                                <!-- Dashboards -->
                                <li class="nav-item">
                                    <a class="nav-link " href="documentation/{{ route('dashboard') }}"
                                        data-placement="left">
                                        <i class="bi-house-door dropdown-item-icon"></i> Dashboard
                                    </a>
                                </li>
                                <li class="hs-has-sub-menu nav-item">
                                    <a id="PortfolioMegaMenu"
                                        class="hs-mega-menu-invoker nav-link dropdown-toggle active" href="#"
                                        role="button"><i class="bi bi-camera-fill dropdown-item-icon"></i>
                                        Portfolio Manager</a>

                                    <!-- Mega Menu -->
                                    <div class="hs-sub-menu dropdown-menu navbar-dropdown-menu-borderless"
                                        aria-labelledby="PortfolioMegaMenu" style="min-width: 14rem;">
                                        <a class="dropdown-item active" href="">Add Category</a>
                                        <a class="dropdown-item " href="">View Category</a>
                                        <a class="dropdown-item active" href="">Add Portfolio</a>
                                        <a class="dropdown-item " href="">View Portfolio</a>
                                    </div>
                                    <!-- End Mega Menu -->
                                </li>
                                <li class="hs-has-sub-menu nav-item">
                                    <a id="ContactMegaMenu"
                                        class="hs-mega-menu-invoker nav-link dropdown-toggle active" href="#"
                                        role="button"><i class="bi bi-envelope dropdown-item-icon"></i>
                                        Contact Manager</a>

                                    <!-- Mega Menu -->
                                    <div class="hs-sub-menu dropdown-menu navbar-dropdown-menu-borderless"
                                        aria-labelledby="ContactMegaMenu" style="min-width: 14rem;">
                                        <a class="dropdown-item active" href="">Booking</a>
                                        <a class="dropdown-item " href="">Contact Us</a>
                                    </div>
                                    <!-- End Mega Menu -->
                                </li>
                                <li class="hs-has-sub-menu nav-item">
                                    <a id="CityMegaMenu" class="hs-mega-menu-invoker nav-link dropdown-toggle active"
                                        href="#" role="button"><i
                                            class="bi bi-car-front-fill dropdown-item-icon"></i>
                                        City Manager</a>

                                    <!-- Mega Menu -->
                                    <div class="hs-sub-menu dropdown-menu navbar-dropdown-menu-borderless"
                                        aria-labelledby="CityMegaMenu" style="min-width: 14rem;">
                                        <a class="dropdown-item active" href="">Add City</a>
                                        <a class="dropdown-item " href="">View City</a>
                                    </div>
                                    <!-- End Mega Menu -->
                                </li>
                                <li class="hs-has-sub-menu nav-item">
                                    <a id="HomeMegaMenu" class="hs-mega-menu-invoker nav-link dropdown-toggle active"
                                        href="#" role="button"><i
                                            class="bi bi-laptop-fill dropdown-item-icon"></i>
                                        Home Page Manager</a>

                                    <!-- Mega Menu -->
                                    <div class="hs-sub-menu dropdown-menu navbar-dropdown-menu-borderless"
                                        aria-labelledby="HomeMegaMenu" style="min-width: 14rem;">
                                        <a class="dropdown-item active" href="">Add Expertise</a>
                                        <a class="dropdown-item " href="">View Expertise</a>
                                    </div>
                                    <!-- End Mega Menu -->
                                </li>
                                <!-- End Dashboards -->


                            </ul>

                        </div>
                        <!-- End Collapse -->
                    </nav>
                </div>
            </header>
            <!-- End Double Header -->
        </div>
    </div>

    <script src="{{ asset('/public/assets/js/demo.js') }}"></script>

    <!-- END ONLY DEV -->

    <!-- ========== END SECONDARY CONTENTS ========== -->

    <!-- JS Implementing Plugins -->
    <script src="{{ asset('/public/assets/js/vendor.min.js') }}"></script>

    <script src="{{ asset('/public/assets/vendor/chartjs-plugin-datalabels/dist/chartjs-plugin-datalabels.min.js') }}">
    </script>

    <!-- JS Front -->
    <script src="{{ asset('/public/assets/js/theme.min.js') }}"></script>
    <script src="{{ asset('/public/assets/js/hs.theme-appearance-charts.js') }}"></script>


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
                "progressBar": true
            }
            toastr.success("{{ session('message') }}");
        @endif
        @if (Session::has('success'))
            $("#liveToast").addClass("fade");
            $("#liveToast").addClass("show");
            $("#liveToast").removeClass("hide");
            toastr.options = {
                "closeButton": true,
                "progressBar": true
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
                "progressBar": true
            }
            toastr.error("{{ session('error') }}");
        @endif
        @if (Session::has('info'))
            $("#liveToast").addClass("fade");
            $("#liveToast").addClass("show");
            $("#liveToast").removeClass("hide");
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.info("{{ session('info') }}");
        @endif
        @if (Session::has('warning'))
            toastr.options = {
                "closeButton": true,
                "progressBar": true
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

    <!-- JS Plugins Init. -->
    <script>
        (function() {
            localStorage.removeItem('hs_theme')

            window.onload = function() {


                // INITIALIZATION OF NAVBAR VERTICAL ASIDE
                // =======================================================
                new HSSideNav('.js-navbar-vertical-aside').init()


                // INITIALIZATION OF FORM SEARCH
                // =======================================================
                const HSFormSearchInstance = new HSFormSearch('.js-form-search')

                if (HSFormSearchInstance.collection.length) {
                    HSFormSearchInstance.getItem(1).on('close', function(el) {
                        el.classList.remove('top-0')
                    })

                    document.querySelector('.js-form-search-mobile-toggle').addEventListener('click', e => {
                        let dataOptions = JSON.parse(e.currentTarget.getAttribute(
                                'data-hs-form-search-options')),
                            $menu = document.querySelector(dataOptions.dropMenuElement)

                        $menu.classList.add('top-0')
                        $menu.style.left = 0
                    })
                }


                // INITIALIZATION OF BOOTSTRAP DROPDOWN
                // =======================================================
                HSBsDropdown.init()


                // INITIALIZATION OF CHARTJS
                // =======================================================
                HSCore.components.HSChartJS.init('.js-chart')


                // INITIALIZATION OF CHARTJS
                // =======================================================
                HSCore.components.HSChartJS.init('#updatingBarChart')
                const updatingBarChart = HSCore.components.HSChartJS.getItem('updatingBarChart')


                // INITIALIZATION OF SELECT
                // =======================================================
                HSCore.components.HSTomSelect.init('.js-select')

                // INITIALIZATION OF ADD FIELD
                // =======================================================
                new HSAddField('.js-add-field', {
                    addedField: field => {
                        HSCore.components.HSTomSelect.init(field.querySelector('.js-select-dynamic'))
                    }
                })


                // INITIALIZATION OF CLIPBOARD
                // =======================================================
                HSCore.components.HSClipboard.init('.js-clipboard')
            }
        })()
    </script>

    <!-- Style Switcher JS -->

    <script>
        (function() {
            // STYLE SWITCHER
            // =======================================================
            const $dropdownBtn = document.getElementById('selectThemeDropdown') // Dropdowon trigger
            const $variants = document.querySelectorAll(
                `[aria-labelledby="selectThemeDropdown"] [data-icon]`) // All items of the dropdown

            // Function to set active style in the dorpdown menu and set icon for dropdown trigger
            const setActiveStyle = function() {
                $variants.forEach($item => {
                    if ($item.getAttribute('data-value') === HSThemeAppearance.getOriginalAppearance()) {
                        $dropdownBtn.innerHTML = `<i class="${$item.getAttribute('data-icon')}" />`
                        return $item.classList.add('active')
                    }

                    $item.classList.remove('active')
                })
            }

            // Add a click event to all items of the dropdown to set the style
            $variants.forEach(function($item) {
                $item.addEventListener('click', function() {
                    HSThemeAppearance.setAppearance($item.getAttribute('data-value'))
                })
            })

            // Call the setActiveStyle on load page
            setActiveStyle()

            // Add event listener on change style to call the setActiveStyle function
            window.addEventListener('on-hs-appearance-change', function() {
                setActiveStyle()
            })
        })()
    </script>
    <script>
        $(document).on('ready', function() {
            // INITIALIZATION OF DATATABLES
            // =======================================================
            HSCore.components.HSDatatables.init($('#datatable'), {
                dom: 'Bfrtip',
                buttons: [{
                        extend: 'copy',
                        className: 'd-none'
                    },
                    {
                        extend: 'excel',
                        className: 'd-none'
                    },
                    {
                        extend: 'csv',
                        className: 'd-none'
                    },
                    {
                        extend: 'pdf',
                        className: 'd-none'
                    },
                    {
                        extend: 'print',
                        className: 'd-none'
                    },
                ],
                select: {
                    style: 'multi',
                    selector: 'td:first-child input[type="checkbox"]',
                    classMap: {
                        checkAll: '#datatableCheckAll',
                        counter: '#datatableCounter',
                        counterInfo: '#datatableCounterInfo'
                    }
                },
                language: {
                    zeroRecords: '<div class="text-center p-4">' +
                        '<img class="mb-3" src="{{ asset('public/assets/svg/illustrations/oc-error.svg') }}" alt="Image Description" style="width: 10rem;" data-hs-theme-appearance="default">' +
                        '<img class="mb-3" src="{{ asset('public/assets/svg/illustrations-light/oc-error.svg') }}" alt="Image Description" style="width: 10rem;" data-hs-theme-appearance="dark">' +
                        '<p class="mb-0">No data to show</p>' +
                        '</div>'
                }
            })

            const datatable = HSCore.components.HSDatatables.getItem(0)

            $('#export-copy').click(function() {
                datatable.button('.buttons-copy').trigger()
            });

            $('#export-excel').click(function() {
                datatable.button('.buttons-excel').trigger()
            });

            $('#export-csv').click(function() {
                datatable.button('.buttons-csv').trigger()
            });

            $('#export-pdf').click(function() {
                datatable.button('.buttons-pdf').trigger()
            });

            $('#export-print').click(function() {
                datatable.button('.buttons-print').trigger()
            });

            $('.js-datatable-filter').on('change', function() {
                var $this = $(this),
                    elVal = $this.val(),
                    targetColumnIndex = $this.data('target-column-index');

                if (elVal === 'null') elVal = ''

                datatable.column(targetColumnIndex).search(elVal).draw();
            });
        });
    </script>

    <script>
        // Get the current URL
        var currentUrl = window.location.href;

        // Loop through all navigation links
        var links = document.querySelectorAll(".nav-link");
        for (var i = 0; i < links.length; i++) {
            var link = links[i];

            // Check if the link's URL matches the current URL
            if (link.href === currentUrl) {
                // Add the "active" class to the link
                link.classList.add("active");
                break; // Stop the loop after the first match is found
            }
        }
    </script>
<script src="{{ asset('public/assets/build/ckeditor.js') }}"></script>
<script>
    ClassicEditor
        .create(document.querySelector('.editor'), {

            licenseKey: '',




        })
        .then(editor => {
            window.editor = editor;




        })
        .catch(error => {
            console.error('Oops, something went wrong!');
            console.error(
                'Please, report the following error on https://github.com/ckeditor/ckeditor5/issues with the build id and the error stack trace:'
                );
            console.warn('Build id: enwcy1kiklss-aozra0pqpxdy');
            console.error(error);
            s
        });
</script>


    <!-- End Style Switcher JS -->
</body>

</html>
