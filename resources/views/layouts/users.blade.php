<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title') - User Dashboard | Allianz Assets Hub</title>

    <link rel="stylesheet" href="{{ asset('backend/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/odometer.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/owl.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/main.css') }}">
    <link rel="icon" type="image/png" href="/favicon.png">
</head>

<body>
    <div class="main--body dashboard-bg">
        <!--========== Preloader ==========-->
        <div class="loader">
            <div class="loader-inner">
                <div class="loader-line-wrap">
                    <div class="loader-line"></div>
                </div>
                <div class="loader-line-wrap">
                    <div class="loader-line"></div>
                </div>
                <div class="loader-line-wrap">
                    <div class="loader-line"></div>
                </div>
                <div class="loader-line-wrap">
                    <div class="loader-line"></div>
                </div>
                <div class="loader-line-wrap">
                    <div class="loader-line"></div>
                </div>
            </div>
        </div>
        <div class="overlay"></div>
        <!--========== Preloader ==========-->


        <!--=======SideHeader-Section Starts Here=======-->
        <div class="notify-overlay"></div>
        <section class="dashboard-section">
            <div class="side-header oh">
                <div class="cross-header-bar d-xl-none">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <div class="site-header-container">
                    <div class="side-logo">
                        <a href="{{ route('users.dashboard') }}">
                            <img src="{{ asset('frontend-assets/img/logo.png') }}" alt="Logo">
                        </a>
                    </div>
                    <ul class="dashboard-menu">
                        <li>
                            <a href="dashboard.html" class="active"><i class="flaticon-man"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="operations.html"><i class="flaticon-coin"></i>Operations</a>
                        </li>
                        <li>
                            <a href="deposit.html"><i class="flaticon-interest"></i>Deposits</a>
                        </li>
                        <li>
                            <a href="withdraw.html"><i class="flaticon-atm"></i>Withdraw</a>
                        </li>
                        <li>
                            <a href="setting.html"><i class="flaticon-gears"></i>Settings</a>
                        </li>
                        <li>
                            <a href="notification.html"><i class="flaticon-bell"></i>Notifications</a>
                        </li>
                        <li>
                            <a href="ticket.html"><i class="flaticon-sms"></i>Tickets</a>
                        </li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
                                        {{ __('Log out') }}
                                    </a>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="dasboard-body">
                <div class="dashboard-hero">
                    <div class="header-top">
                        <div class="container">
                            <div class="mobile-header d-flex justify-content-between d-lg-none align-items-center">
                                <div class="author">
                                    <img src="{{ asset('backend/assets/images/dashboard/author.png') }}" alt="dashboard">
                                </div>
                                <div class="cross-header-bar">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </div>
                            <div class="mobile-header-content d-lg-flex flex-wrap justify-content-lg-between align-items-center">
                                <ul class="support-area">
                                    <li>
                                        <a href="#"><i class="flaticon-coin"></i><span class="__cf_email__">Total Balance: {{auth()->user()->balance}}</span> </a>
                                    </li>
                                </ul>
                                <div class="dashboard-header-right d-flex flex-wrap justify-content-center justify-content-sm-between justify-content-lg-end align-items-center">
                                    
                                    <ul class="dashboard-right-menus">
                                        
                                        <li>
                                            <a href="#0">
                                                <i class="flaticon-notification"></i>
                                                <span class="number bg-theme">4</span>
                                            </a>
                                            <div class="notification-area">
                                                <div class="notifacation-header d-flex flex-wrap justify-content-between">
                                                    <span>4 New Notifications</span>
                                                    <a href="#0">Clear</a>
                                                </div>
                                                <ul class="notification-body">
                                                    <li>
                                                        <a href="#0">
                                                            <div class="icon">
                                                                <i class="flaticon-man"></i>
                                                            </div>
                                                            <div class="cont">
                                                                <span class="subtitle">New Affiliate Registered</span>
                                                                <span class="info">2 Sec ago</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#0">
                                                            <div class="icon">
                                                                <i class="flaticon-atm"></i>
                                                            </div>
                                                            <div class="cont">
                                                                <span class="subtitle">New deposit completed</span>
                                                                <span class="info">2 Sec ago</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#0">
                                                            <div class="icon">
                                                                <i class="flaticon-wallet"></i>
                                                            </div>
                                                            <div class="cont">
                                                                <span class="subtitle">New Withdraw completed</span>
                                                                <span class="info">2 Sec ago</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#0">
                                                            <div class="icon">
                                                                <i class="flaticon-exchange"></i>
                                                            </div>
                                                            <div class="cont">
                                                                <span class="subtitle">Fund Transfer Completed</span>
                                                                <span class="info">2 Sec ago</span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <div class="notifacation-footer text-center">
                                                    <a href="#0" class="view-all">View All</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#0" class="author">
                                                <div class="thumb">
                                                    <img src="{{ asset('backend/assets/images/dashboard/author.png') }}" alt="dashboard">
                                                    <span class="checked">
                                                        <i class="flaticon-checked"></i>
                                                    </span>
                                                </div>
                                                <div class="content">
                                                    <h6 class="title">{{auth()->user()->name}}</h6>
                                                    <span class="country">Online</span>
                                                </div>
                                            </a>
                                            <div class="notification-area">
                                                <div class="author-header">
                                                    <div class="thumb">
                                                        <img src="{{ asset('backend/assets/images/dashboard/author.png') }}" alt="dashboard">
                                                    </div>
                                                    <h6 class="title">John Doe</h6>
                                                    <a href="#mailto:johndoe@gmail.com"><span class="__cf_email__" data-cfemail="98d2f7f0f6fcf7fdd8fff5f9f1f4b6fbf7f5">[email&#160;protected]</span></a>
                                                </div>
                                                <div class="author-body">
                                                    <ul>
                                                        <li>
                                                            <a href="#0"><i class="far fa-user"></i>Profile</a>
                                                        </li>
                                                        <li>
                                                            <a href="#0"><i class="fas fa-user-edit"></i>Edit Profile</a>
                                                        </li>
                                                        <li>
                                                            <a href="#0"><i class="fas fa-sign-out-alt"></i>Log Out</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    @yield('breadcrumbs')
                </div>
                @yield('content')
                <div class="container-fluid sticky-bottom">
                    <div class="dashboard-footer">
                        <div class="d-flex flex-wrap justify-content-between m-0-15-none">
                            <div class="left">
                                &copy; <script>document.write(new Date().getFullYear())</script>
                                <a href="#0">Allianz Assets Hub</a> | All right reserved.
                            </div>
                            <div class="right">
                                <ul>
                                    <li>
                                        <a href="#0">Terms of use</a>
                                    </li>
                                    <li>
                                        <a href="#0">Privacy policy</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=======SideHeader-Section Ends Here=======-->


    </div>
    <script src="{{ asset('backend/assets/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/modernizr-3.6.0.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/plugins.js') }}"></script>
    <script src="{{ asset('backend/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/magnific-popup.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/odometer.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/viewport.jquery.js') }}"></script>
    <script src="{{ asset('backend/assets/js/nice-select.js') }}"></script>
    <script src="{{ asset('backend/assets/js/owl.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/paroller.js') }}"></script>
    <script src="{{ asset('backend/assets/js/chart.js') }}"></script>
    <script src="{{ asset('backend/assets/js/circle-progress.js') }}"></script>
    <script src="{{ asset('backend/assets/js/main.js') }}"></script>

    <script>
        $('.progress1.circle').circleProgress({
            value: .75,
            fill: {
                gradient: ['#00cca2', '#00cca2']
            },
        }).on('circle-animation-progress', function(event, progress) {
            $(this).find('strong').html(Math.round(75 * progress) + '<i>%</i>');
        });
        $('.progress2.circle').circleProgress({
            value: .90,
            fill: {
                gradient: ['#8d16e8', '#8d16e8']
            },
        }).on('circle-animation-progress', function(event, progress) {
            $(this).find('strong').html(Math.round(90 * progress) + '<i>%</i>');
        });
        $('.progress3.circle').circleProgress({
            value: .85,
            fill: {
                gradient: ['#ef764c', '#ef764c']
            },
        }).on('circle-animation-progress', function(event, progress) {
            $(this).find('strong').html(Math.round(85 * progress) + '<i>%</i>');
        });
    </script>

</body>

</html>
