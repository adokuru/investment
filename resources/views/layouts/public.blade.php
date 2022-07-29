<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('frontend-assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css" integrity="sha384-zIaWifL2YFF1qaDiAo0JFgsmasocJ/rqu7LKYH8CoBEXqGbb9eO+Xi3s6fQhgFWM" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('frontend-assets/css/meanmenu.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend-assets/css/boxicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend-assets/css/animate.min.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend-assets/css/owl.carousel.min.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend-assets/css/owl.theme.default.min.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend-assets/fonts/flaticon.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend-assets/css/modal-video.min.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend-assets/css/odometer.min.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend-assets/css/style.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend-assets/css/responsive.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend-assets/css/theme-dark.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title') | Allianz Assets Hub</title>
    <link rel="icon" type="image/png" href="/favicon.png">
</head>

<body>
    <div class="loader">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="pre-load">
                    <div class="inner one"></div>
                    <div class="inner two"></div>
                    <div class="inner three"></div>
                </div>
            </div>
        </div>
    </div>


    <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-9 col-lg-8">
                    <div class="left">
                        <ul>
                            <li>
                                <i class='bx bx-mail-send'></i>
                                <a href="mailto:support@allnzonlineassets.org"><span class="__cf_email__" data-cfemail="cfa7aaa3a3a08fa6a1b9aee1aca0a2">support@allnzonlineassets.org</span></a>
                            </li>
                            {{-- <li>
                                <i class='bx bx-phone-call'></i>
                                <a href="tel:+99084211703">+990-8421-1703</a>
                            </li> --}}
                            <li>
                                <i class='bx bx-time'></i>
                                <span>Mon - Fri: 8:00 AM - 9:00 PM</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3 col-lg-4">
                    <div class="right">
                        <ul>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-facebook'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-twitter'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-youtube'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-instagram'></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" target="_blank">
                                    <i class='bx bxl-twitter'></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="navbar-area sticky-top">

        <div class="mobile-nav">
            <a href="/" class="logo">
                <img src="{{ asset('frontend-assets/img/logo.png') }}" alt="Logo">
            </a>
        </div>

        <div class="main-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="/">
                        <img src="{{ asset('frontend-assets/img/logo.png') }}" alt="Logo" style="width:130px">
                    </a>
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="/" class="nav-link">HOME</a>
                            </li>
                            <li class="nav-item">
                                <a href="/about" class="nav-link">ABOUT</a>
                            </li>
                            <li class="nav-item">
                                <a href="/trading" class="nav-link">TRADING</a>
                            </li>
                            <li class="nav-item">
                                <a href="/contact" class="nav-link">CONTACT</a>
                            </li>
                        </ul>
                        @if (Auth::check())
                            <div class="side-nav">
                                <div id="search-overlay" class="block">
                                    <div class="centered">
                                        <div class="text-center">
                                            <a href="/user/dashboard" class="common-btn">
                                                Dashboard
                                                <span></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if (Auth::guest())
                            <div class="side-nav">
                                <div id="search-overlay" class="block">
                                    <div class="centered">
                                        <div class="text-center">
                                            <a href="/register" class="common-btn">
                                                REGISTER
                                                <span></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
							<div class="side-nav">
                                <div id="search-overlay" class="block">
                                    <div class="centered">
                                        <div class="text-center">
                                            <a href="/login" class="common-btn">
                                                LOG IN
                                                <span></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </nav>
            </div>
        </div>
    </div>

    @yield('content')

    <footer class="footer-area pt-100">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="footer-item">
                        <div class="footer-logo">
                            <a class="footer-inva" href="index-2.html">
                                <img src="{{ asset('frontend-assets/img/logo2.png') }}" alt="Logo">
                            </a>
                            <p>Open account for free and start trading now!</p>
                            <ul>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class='bx bxl-facebook'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class='bx bxl-twitter'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class='bx bxl-linkedin'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class='bx bxl-instagram'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class='bx bxl-youtube'></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="footer-item">
                        <div class="footer-link">
                            <h3>Important Links</h3>
                            <ul>
                                <li>
                                    <i class='bx bx-chevron-right'></i>
                                    <a href="/about">About</a>
                                </li>
                                <li>
                                    <i class='bx bx-chevron-right'></i>
                                    <a href="/service">Services</a>
                                </li>
                                <li>
                                    <i class='bx bx-chevron-right'></i>
                                    <a href="/trading">Trading</a>
                                </li>
                                <li>
                                    <i class='bx bx-chevron-right'></i>
                                    <a href="/faq">FAQ</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="footer-item">
                        <div class="footer-hours">
                            <h3>Open Hours</h3>
                            <ul>
                                <li>Monday :- 8:00 - 21:00</li>
                                <li>Tuesday :- 8:00 - 21:00</li>
                                <li>Wednesday :- 8:00 - 21:00</li>
                                <li>Thursday :- 8:00 - 21:00</li>
                                <li>Friday :- 8:00 - 21:00</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="footer-item">
                        <div class="footer-contact">
                            <h3>Contact Info</h3>
                            <ul>
                                <li>
                                    <span>
                                        <i class="fa fa-map-marker" aria-hidden="true"></i> 
                                        Address: 58 Waterloo Street, Glasgow G2 7Da, Scotland.
                                    </span>
                                </li>
                                <li>
                                    <a href="mailto:support@allnzonlineassets.org">
                                        <span>
                                            <i class="fa fa-envelope" aria-hidden="true"></i>
                                            Email: support@allnzonlineassets.org
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <p>Copyright @
                    <script>
                        document.write(new Date().getFullYear())
                    </script> Allianz Assets Hub. All rights reserved
                </p>
                </p>
            </div>
        </div>
        <div class="footer-shape">
            <img src="assets/img/footer-bg.png" alt="Footer">
        </div>
    </footer>


    <div class="go-top">
        <i class="bx bxs-up-arrow-alt"></i>
        <i class="bx bxs-up-arrow-alt"></i>
    </div>


    <script src="{{ asset('frontend-assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('frontend-assets/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('frontend-assets/js/form-validator.min.js') }}"></script>

    <script src="{{ asset('frontend-assets/js/contact-form-script.js') }}"></script>

    <script src="{{ asset('frontend-assets/js/jquery.ajaxchimp.min.js') }}"></script>

    <script src="{{ asset('frontend-assets/js/jquery.meanmenu.js') }}"></script>

    <script src="{{ asset('frontend-assets/js/wow.min.js') }}"></script>

    <script src="{{ asset('frontend-assets/js/owl.carousel.min.js') }}"></script>

    <script src="{{ asset('frontend-assets/js/jquery-modal-video.min.js') }}"></script>

    <script src="{{ asset('frontend-assets/js/odometer.min.js') }}"></script>
    <script src="{{ asset('frontend-assets/js/jquery.appear.min.js') }}"></script>

    <script src="{{ asset('frontend-assets/js/smoothscroll.min.js') }}"></script>

    <script src="{{ asset('frontend-assets/js/custom.js') }}"></script>
</body>

</html>
