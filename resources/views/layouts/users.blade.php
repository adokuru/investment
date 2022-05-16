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
    <meta name="csrf-token" content="{{ csrf_token() }}">

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
                            <a href="/user/dashboard"><i class="flaticon-man"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="/user/investment-plans"><i class="flaticon-deal"></i>Investment</a>
                        </li>
                        <li>
                            <a href="/user/operations"><i class="flaticon-coin"></i>Operations</a>
                        </li>
                        <li>
                            <a href="/user/deposit"><i class="flaticon-interest"></i>Deposits</a>
                        </li>
                        <li>
                            <a href="/user/withdraw"><i class="flaticon-atm"></i>Withdraw</a>
                        </li>
                        <li>
                            <a href="/user/setting"><i class="flaticon-gears"></i>Settings</a>
                        </li>

                        <li>
                            <a href="/user/ticket"><i class="flaticon-sms"></i>Tickets</a>
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
                                    <img src="{{ 'https://ui-avatars.com/api/?background=0D8ABC&color=fff&name=' . $user->name }}" alt="dashboard">
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
                                        <a href="#"><i class="flaticon-coin"></i><span class="__cf_email__">Total Balance: {{ auth()->user()->balance }}</span> </a>
                                    </li>
                                </ul>
                                <div class="dashboard-header-right d-flex flex-wrap justify-content-center justify-content-sm-between justify-content-lg-end align-items-center">

                                    <ul class="dashboard-right-menus">


                                        <li>
                                            <a href="#0" class="author">
                                                <div class="thumb">
                                                    <img src="{{ 'https://ui-avatars.com/api/?background=0D8ABC&color=fff&name=' . $user->name }}" alt="dashboard">
                                                    <span class="checked">
                                                        <i class="flaticon-checked"></i>
                                                    </span>
                                                </div>
                                                <div class="content">
                                                    <h6 class="title">{{ auth()->user()->name }}</h6>
                                                    <span class="country">Online</span>
                                                </div>
                                            </a>
                                            <div class="notification-area">
                                                <div class="author-header">
                                                    <div class="thumb">
                                                        <img src="{{ 'https://ui-avatars.com/api/?background=0D8ABC&color=fff&name=' . $user->name }}" alt="dashboard">
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
                <div class="container-fluid">

                    <div class="row justify-content-center mt--85 ">
                        @if ($bitconwallet)
                            <div class="col-sm-6 col-lg-3">
                                <div class="dashboard-item">
                                    <div class="dashboard-inner">
                                        <div class="cont">
                                            <span class="title">Balance</span>
                                            <h5 class="amount">{{ $bitconwallet->amount }} BTC</h5>
                                            <h6 class="amount" style="color:#c2c2c2">{{ $bitconwallet->usd_balance }} USD</h6>
                                        </div>
                                        <div class="thumb">
                                            <img src="{{ asset('backend/assets/images/dashboard/dashboard2.png') }}" alt="dasboard">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="col-sm-6 col-lg-3">
                                <div class="dashboard-item">
                                    <div class="dashboard-inner">
                                        <div class="cont">
                                            <span class="title">Activate Account</span>
                                            <form action="{{ route('activate_wallet') }}" method="post">
                                                @csrf
                                                <input type="hidden" name="wallet_type_id" id="wallettype" value="1">
                                                <button type="submit" class="custom-button border-0">Activate BTC</button>
                                            </form>
                                        </div>
                                        <div class="thumb">
                                            <img src="{{ asset('backend/assets/images/dashboard/dashboard2.png') }}" alt="dasboard">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if ($ethwallet)
                            <div class="col-sm-6 col-lg-3">
                                <div class="dashboard-item">
                                    <div class="dashboard-inner">
                                        <div class="cont">
                                            <span class="title">Balance</span>
                                            <h5 class="amount">{{ $ethwallet->amount }} ETH</h5>
                                            <h6 class="amount" style="color:#c2c2c2">{{ $ethwallet->usd_balance }} USD</h6>
                                        </div>
                                        <div class="thumb">
                                            <img src="{{ asset('backend/assets/images/dashboard/dashboard3.png') }}" alt="dasboard">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="col-sm-6 col-lg-3">
                                <div class="dashboard-item">
                                    <div class="dashboard-inner">
                                        <div class="cont">
                                            <span class="title">Activate Account</span>
                                            <form action="{{ route('activate_wallet') }}" method="post">
                                                @csrf
                                                <input type="hidden" name="wallet_type_id" id="wallettype" value="2">
                                                <button type="submit" class="custom-button border-0">Activate ETH</button>
                                            </form>
                                        </div>
                                        <div class="thumb">
                                            <img src="{{ asset('backend/assets/images/dashboard/dashboard3.png') }}" alt="dasboard">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if ($btcashwallet)
                            <div class="col-sm-6 col-lg-3">
                                <div class="dashboard-item">
                                    <div class="dashboard-inner">
                                        <div class="cont">
                                            <span class="title">Balance</span>
                                            <h5 class="amount">{{ $btcashwallet->amount }} BCH</h5>
                                            <h6 class="amount" style="color:#c2c2c2">{{ $btcashwallet->usd_balance }} USD</h6>
                                        </div>
                                        <div class="thumb">
                                            <img src="{{ asset('backend/assets/images/dashboard/dashboard4.png') }}" alt="dasboard">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="col-sm-6 col-lg-3">
                                <div class="dashboard-item">
                                    <div class="dashboard-inner">
                                        <div class="cont">
                                            <span class="title">Activate Account</span>
                                            <form action="{{ route('activate_wallet') }}" method="post">
                                                @csrf
                                                <input type="hidden" name="wallet_type_id" id="wallettype" value="4">
                                                <button type="submit" class="custom-button border-0">Activate BCH</button>
                                            </form>
                                        </div>
                                        <div class="thumb">
                                            <img style="width:42px" src="{{ asset('backend/assets/images/dashboard/dashboard6.png') }}" alt="dasboard">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if ($usdtwallet)
                            <div class="col-sm-6 col-lg-3">
                                <div class="dashboard-item">
                                    <div class="dashboard-inner">
                                        <div class="cont">
                                            <span class="title">Balance</span>
                                            <h5 class="amount">{{ $btcashwallet->amount }} USDT</h5>
                                            <h6 class="amount" style="color:#c2c2c2">{{ $btcashwallet->usd_balance }} USD</h6>
                                        </div>
                                        <div class="thumb">
                                            <img style="width:42px" src="{{ asset('backend/assets/images/dashboard/dashboard5.png') }}" alt="dasboard">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="col-sm-6 col-lg-3">
                                <div class="dashboard-item">
                                    <div class="dashboard-inner">
                                        <div class="cont">
                                            <span class="title">Activate Account</span>
                                            <form action="{{ route('activate_wallet') }}" method="post">
                                                @csrf
                                                <input type="hidden" name="wallet_type_id" id="wallettype" value="3">
                                                <button type="submit" class="custom-button border-0">Activate USDT</button>
                                            </form>
                                        </div>
                                        <div class="thumb">
                                            <img style="width:42px" src="{{ asset('backend/assets/images/dashboard/dashboard5.png') }}" alt="dasboard">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if ($errors->any())
                            <div class="alert alert-danger" role="alert">
                                {{ $errors->first() }}
                            </div>
                        @endif
                        @if (\Session::has('error'))
                            <div class="alert alert-danger" role="alert">
                                <li>{!! \Session::get('error') !!}</li>
                            </div>
                        @endif
                        @if (\Session::has('success'))
                            <div class="alert alert-success" role="alert">
                                <li>{!! \Session::get('success') !!}</li>
                            </div>
                        @endif
                    </div>
                    @yield('content')
                    <div class="container-fluid sticky-bottom">
                        <div class="dashboard-footer">
                            <div class="d-flex flex-wrap justify-content-between m-0-15-none">
                                <div class="left">
                                    &copy;
                                    <script>
                                        document.write(new Date().getFullYear())
                                    </script>
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
    @yield('script')
</body>

</html>
