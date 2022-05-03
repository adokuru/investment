<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('frontend-assets/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend-assets/css/boxicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend-assets/css/meanmenu.css') }}">

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
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
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
                                <a href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#deb6bbb2b2b19eb7b0a8bff0bdb1b3"><span class="__cf_email__" data-cfemail="cfa7aaa3a3a08fa6a1b9aee1aca0a2">Email&#160;Protected</span></a>
                            </li>
                            <li>
                                <i class='bx bx-phone-call'></i>
                                <a href="tel:+99084211703">+990-8421-1703</a>
                            </li>
                            <li>
                                <i class='bx bx-time'></i>
                                <span>Mon - Sat: 8:00 AM - 7:00 PM</span>
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
            <a href="index-2.html" class="logo">
                <img src="{{ asset('frontend-assets/img/logo2.png') }}" alt="Logo">
            </a>
        </div>

        <div class="main-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="index-2.html">
                        <img src="{{ asset('frontend-assets/img/logo2.png') }}" alt="Logo">
                    </a>
                    <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="about.html" class="nav-link">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="/about" class="nav-link dropdown-toggle">About <i class='bx bx-chevron-down'></i></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link dropdown-toggle">Users <i class='bx bx-chevron-down'></i></a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="sign-in.html" class="nav-link">Sign In</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="sign-up.html" class="nav-link">Sign Up</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="team.html" class="nav-link">Team</a>
                                        {{-- <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                
                                            </li>
                                        </ul> --}}
                                    </li>
                                    <li class="nav-item">
                                        <a href="Pricing.html" class="nav-link">Pricing</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="testimonials.html" class="nav-link">Testimonials</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="faq.html" class="nav-link">FAQ</a>
                                    </li>
                                    {{-- <li class="nav-item">
                                        <a href="404.html" class="nav-link">404 Error Page</a>
                                    </li> --}}
                                    {{-- <li class="nav-item">
                                        <a href="coming-soon.html" class="nav-link">Coming Soon</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="privacy-policy.html" class="nav-link">Privacy Policy</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="terms-conditions.html" class="nav-link">Terms & Conditions</a>
                                    </li> --}}
                                </ul>
                            </li>
                            {{-- <li class="nav-item">
                                <a href="about.html" class="nav-link">About</a>
                            </li> --}}
                            <li class="nav-item">
                            
                                <a href="about.html" class="nav-link">Services</a>
                            
                                {{-- <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="services.html" class="nav-link">Services</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="service-details.html" class="nav-link">Service Details</a>
                                    </li>
                                </ul> --}}
                            </li>
                            <li class="nav-item">
                                <a href="about.html" class="nav-link">Blog</a>
                                {{-- <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="projects.html" class="nav-link">Projects</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="project-details.html" class="nav-link">Project Details</a>
                                    </li>
                                </ul> --}}
                            </li>
                            <li class="nav-item">
                                <a href="about.html" class="nav-link">Contact</a>
                                {{-- <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="blog.html" class="nav-link">Blog</a>
                                    </li> --}}
                                    {{-- <li class="nav-item">
                                        <a href="blog-details.html" class="nav-link">Blog Details</a>
                                    </li> --}}
                                </ul>
                            </li>
                            
                        </ul>
                        <div class="side-nav">
                            <div class="nav-search">
                                <i id="search-btn" class="bx bx-search-alt"></i>
                                <div id="search-overlay" class="block">
                                    <div class="centered">
                                        <div id="search-box">
                                            <i id="close-btn" class="bx bx-x"></i>
                                            <form>
                                                <input type="text" class="form-control" placeholder="Search..." />
                                                <button type="submit" class="btn">Search</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown nav-flag-dropdown">
                                <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="{{ asset('frontend-assets/img/flag1.jpg') }}" alt="Flag">
                                    Eng
                                    <i class='bx bx-chevron-down'></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">
                                        <img src="{{ asset('frontend-assets/img/flag2.jpg') }}" alt="Flag">
                                        Ger
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <img src="{{ asset('frontend-assets/img/flag3.jpg') }}" alt="Flag">
                                        Isr
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <img src="{{ asset('frontend-assets/img/flag4.jpg') }}" alt="Flag">
                                        USA
                                    </a>
                                </div>
                            </div>
                        </div>
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
                                <img src="{{ asset('frontend-assets/img/logo1.png') }}" alt="Logo">
                            </a>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur quaerat quo unde</p>
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
                                    <a href="about.html">About</a>
                                </li>
                                <li>
                                    <i class='bx bx-chevron-right'></i>
                                    <a href="services.html">Services</a>
                                </li>
                                <li>
                                    <i class='bx bx-chevron-right'></i>
                                    <a href="projects.html">Projects</a>
                                </li>
                                <li>
                                    <i class='bx bx-chevron-right'></i>
                                    <a href="blog.html">Blog</a>
                                </li>
                                <li>
                                    <i class='bx bx-chevron-right'></i>
                                    <a href="faq.html">FAQ</a>
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
                                <li>Monday <span>8:00 - 21:00</span></li>
                                <li>Tuesday <span>8:00 - 21:00</span></li>
                                <li>Wednesday <span>8:00 - 21:00</span></li>
                                <li>Thursday <span>8:00 - 21:00</span></li>
                                <li>Sunday <span>8:00 - 21:00</span></li>
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
                                    <i class='bx bxs-location-plus'></i>
                                    <span>113 Inva, White House, New Jercy, USA</span>
                                </li>
                                <li>
                                    <i class='bx bxs-phone-call'></i>
                                    <a href="tel:+0015481592491">+001-548-159-2491</a>
                                    <a href="tel:+0017581458652">+001-758-145-8652</a>
                                </li>
                                <li>
                                    <i class='bx bxs-paper-plane'></i>
                                    <a href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#5d35383131321d34332b3c733e3230"><span class="__cf_email__" data-cfemail="177f727b7b78577e7961763974787a">[email&#160;protected]</span></a>
                                    <a href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#2b42454d446b42455d4a05484446"><span class="__cf_email__" data-cfemail="cfa6a1a9a08fa6a1b9aee1aca0a2">[email&#160;protected]</span></a>
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
                    </script> Allinaz. All rights reserved</p>
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
    <script src="{{ asset('frontend-asset/js/bootstrap.bundle.min.js') }}"></script>

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
