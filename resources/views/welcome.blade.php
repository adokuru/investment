@extends('layouts.public')
@section('title', 'Investment and Asset Management worldwide')
@section('content')

    <div class="banner-area">
        <div class="banner-slider owl-theme owl-carousel">
            <div class="overlay-banner">
                <div class="banner-item banner-bg-one">
                    <div class="d-table">
                        <div class="d-table-cell">
                            <div class="container">
                                <div class="banner-content">
                                    <h1>Most Trusted Company For Your Business</h1>
                                    <p>We trade on forex, cryptocurrencies, stocks, bonds, futures and commodities with the
                                        best financial experts.</p>
                                    <a class="common-btn" href="#">
                                        Let's Start Now
                                        <span></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="overlay-banner">
                <div class="banner-item banner-bg-two">
                    <div class="d-table">
                        <div class="d-table-cell">
                            <div class="container">
                                <div class="banner-content">
                                    <h1>Your Success Is Our Ultimate Duty</h1>
                                    <p>We trade on forex, cryptocurrencies, stocks, bonds, futures and commodities with the
                                        best financial experts.</p>
                                    <a class="common-btn" href="#">
                                        Let's Start Now
                                        <span></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="overlay-banner">
                <div class="banner-item banner-bg-three">
                    <div class="d-table">
                        <div class="d-table-cell">
                            <div class="container">
                                <div class="banner-content">
                                    <h1>No.1 Investment Company With Experience</h1>
                                    <p>We trade on forex, cryptocurrencies, stocks, bonds, futures and commodities with the
                                        best financial experts.</p>
                                    <a class="common-btn" href="/register">
                                        Let's Start Now
                                        <span></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="logo-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <div class="logo-text">
                        <h3>Company Who Trust Us</h3>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="logo-slider owl-theme owl-carousel">
                        <div class="logo-item">
                            <img src="{{ asset('frontend-assets/img/logo/logo1.png') }}" alt="Logo">
                        </div>
                        <div class="logo-item">
                            <img src="{{ asset('frontend-assets/img/logo/logo2.png') }}" alt="Logo">
                        </div>
                        <div class="logo-item">
                            <img src="{{ asset('frontend-assets/img/logo/logo3.png') }}" alt="Logo">
                        </div>
                        <div class="logo-item">
                            <img src="{{ asset('frontend-assets/img/logo/logo4.png') }}" alt="Logo">
                        </div>
                        <div class="logo-item">
                            <img src="{{ asset('frontend-assets/img/logo/logo5.png') }}" alt="Logo">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="about-area section-overlay pt-100 pb-70">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="about-content">
                        <div class="section-title1">
                            <span class="sub-title1">About</span>
                            <h2>We Are A Trusted Company With <span>25+</span> Years Of Experience</h2>
                            <p>Allianz is a UK registered legal international investment company.
                                The company was created by a group of qualified experts, professional bankers, traders and
                                analysts who specialized in the stock, bond, futures, currencies, forex and binary trading
                                and arbitrage.</p>
                        </div>
                        <p class="about-p">With having more than ten years of extensive practical experiences of
                            combined personal skills, knowledge, talents and collective ambitions for success.</p>
                        <div class="row">
                            <div class="col-sm-6 col-lg-6">
                                <ul>
                                    <li>
                                        <i class="flaticon-medal-of-award"></i>
                                    </li>
                                    <li>
                                        <h3>25+ Years Experience</h3>
                                        <p>we are a registered and licensed company authorized to operate in any part of the
                                            world.</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-sm-6 col-lg-6">
                                <ul>
                                    <li>
                                        <i class="flaticon-star"></i>
                                    </li>
                                    <li>
                                        <h3>Growing Success</h3>
                                        <p>Once you have enrolled in any trading plan, your funds are traded instantly
                                            yielding you profits.</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-sm-6 col-lg-6">
                                <ul>
                                    <li>
                                        <i class="flaticon-insurance"></i>
                                    </li>
                                    <li>
                                        <h3>100% Trusted Company</h3>
                                        <p>All fees are transparent and are paid through your client area.</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-sm-6 col-lg-6">
                                <ul>
                                    <li>
                                        <i class="flaticon-dollars-money-bag-with-a-clock"></i>
                                    </li>
                                    <li>
                                        <h3>Finance Management</h3>
                                        <p>We use one of the most experienced, professional and trusted DDos protection and
                                            mitigation provider.</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <a class="common-btn" href="/service">
                            Explore About Us
                            <span></span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="about-img">
                        <div class="row align-items-end">
                            <div class="col-sm-6 col-lg-6">
                                <img src="{{ asset('frontend-assets/img/about/about1.jpg') }}" alt="About">
                            </div>
                            <div class="col-sm-6 col-lg-6">
                                <img src="{{ asset('frontend-assets/img/about/about2.jpg') }}" alt="About">
                            </div>
                            <div class="col-lg-12">
                                <img src="{{ asset('frontend-assets/img/about/about3.jpg') }}" alt="About">
                            </div>
                        </div>
                        <div class="years">
                            <h3>25+ <br> <span>Years</span></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="services-area pt-100 pb-70">
            <div class="container">
                <div class="section-title">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <span class="sub-title">Our Services</span>
                            <h2>The <span>Services</span> That We Provide For Our Ultimate Clients</h2>
                        </div>
                        <div class="col-lg-6">
                            <p>This is why we have an edge over other trading platforms and why you should choose Allianz to
                                grow and manage your investments.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-lg-4">
                        <div class="services-item card-overlay active">
                            <i class="flaticon-marketing-strategy"></i>
                            <h3>
                                <a href="service-details.html">World Coverage</a>
                            </h3>
                            <p>We have been able to operate in major countries and cities worldwide helping people create
                                wealth
                                and archieving their financial goals.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="services-item card-overlay">
                            <i class="flaticon-dollars-money-bag-with-a-clock"></i>
                            <h3>
                                <a href="service-details.html">Payment Options</a>
                            </h3>
                            <p>We have integrated a few payment gateways while using bitcoin as our major payment gateway
                                because of its general acceptability.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="services-item card-overlay active">
                            <i class="flaticon-strategy-in-a-labyrinth"></i>
                            <h3>
                                <a href="service-details.html">Cross-Platform Trading</a>
                            </h3>
                            <p>We support and provide cross platform trading giving you the right tools to trade through the
                                use
                                of advanced charting technology.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="services-item card-overlay">
                            <i class="flaticon-trend"></i>
                            <h3>
                                <a href="service-details.html">Margin Trading</a>
                            </h3>
                            <p>We offer margin trading, thereby allowing our clients enter into positions larger than their
                                account balance.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="services-item card-overlay active">
                            <i class="flaticon-evaluate"></i>
                            <h3>
                                <a href="service-details.html">Legal Compliance</a>
                            </h3>
                            <p>We conform and abide by the rules,policies,regulations and standards of our regulatory
                                bodies.
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="services-item card-overlay">
                            <i class="flaticon-insurance"></i>
                            <h3>
                                <a href="service-details.html">Active Support</a>
                            </h3>
                            <p>Our support team is always available 24/7 to help you out whenever you require assistance or
                                have
                                questions about the platform.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="pricing-area section-overlay-two pt-100 pb-25">
            <div class="container">
                <div class="section-title two">
                    <h3>TRADING PLANS</h3>
                </div>
                <div class="row align-items-center">
                    <div class="col-sm-6 col-lg-4">
                        <div class="pricing-item">
                            <h3>LOW YIELD PLAN (Low Profile Investors)</h3>
                            <h4>
                                <span class="one">$</span> 10,000
                                <span class="two">/Month</span>
                            </h4>
                            <ul>
                                <li>Crypto Investment</li>
                                <li>Crypto Insurance</li>
                                <li>10% Referral Bonus</li>
                                <li>Low Maintenance fee</li>
                                <li>0.70% daily</li>
                                <li>40% ROI</li>
                                <li>40 days contract</li>
                                <li>Automatic payout in BTC</li>
                            </ul>
                            <a class="common-btn" href="{{route('register')}}">
                                Get Started
                                <span></span>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="pricing-item active">

                            <h3>HIGH-YIELD PLAN (High Profile Investors)</h3>
                            <h4>
                                <span class="one">$</span> 500,000
                                <span class="two">/Month</span>
                            </h4>
                            <ul>
                                <li>Crypto Investment</li>
                                <li>Crypto Insurance</li>
                                <li>10% Referral Bonus</li>
                                <li>Low Maintenance fee</li>
                                <li>6.00% daily</li>
                                <li>60% ROI</li>
                                <li>40 days contract</li>
                                <li>Automatic payout in BTC</li>
                            </ul>
                            <a class="common-btn two" href="{{route('register')}}">
                                Get Started
                                <span></span>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-6 offset-sm-3 offset-lg-0 col-lg-4">
                        <div class="pricing-item">
                            <h3>Crowd-Funding Plan</h3>
                            <h4>
                                <span class="one">$</span> 1,000,000
                                <span class="two">/Month</span>
                            </h4>
                            <ul>
                                <li>Crypto Investment</li>
                                <li>Crypto Insurance</li>
                                <li>10% Referral Bonus</li>
                                <li>Low Maintenance fee</li>
                                <li>8.50% daily</li>
                                <li>150% ROI</li>
                                <li>25 days contract</li>
                                <li>Automatic payout in BTC</li>
                            </ul>
                            <a class="common-btn" href="{{route('register')}}">
                                Get Started
                                <span></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="team-area ptb-100">
            <div class="container">
                <div class="section-title">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <span class="sub-title">Team Members</span>
                            <h2>Meet Our Awesome <span>Team</span> To Whom We Are Dependent</h2>
                        </div>
                        <div class="col-lg-6">
                            <p>To a prospect seeking out a new service provider, the process can be a little overwhelming.
                                It's easy to wonder: Who are the real people behind all the smoke and mirrors?</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-lg-4">
                        <div class="team-item">
                            <div class="top card-overlay">
                                <img src="{{ asset('frontend-assets/img/team/team1.jpg') }}" alt="Team">
                            </div>
                            <div class="bottom">
                                <ul>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-facebook'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-linkedin'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-twitter'></i>
                                        </a>
                                    </li>
                                </ul>
                                <h3>
                                    <a href="team-details.html">David Seek</a>
                                </h3>
                                <span>Cheif Executive</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="team-item">
                            <div class="top card-overlay">
                                <img src="{{ asset('frontend-assets/img/team/team2.jpg') }}" alt="Team">
                            </div>
                            <div class="bottom">
                                <ul>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-facebook'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-linkedin'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-twitter'></i>
                                        </a>
                                    </li>
                                </ul>
                                <h3>
                                    <a href="team-details.html">Angela Carter</a>
                                </h3>
                                <span>Cheif Marketing Researcher</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 offset-sm-3 offset-lg-0 col-lg-4">
                        <div class="team-item">
                            <div class="top card-overlay">
                                <img src="{{ asset('frontend-assets/img/team/team3.jpg') }}" alt="Team">
                            </div>
                            <div class="bottom">
                                <ul>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-facebook'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-linkedin'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class='bx bxl-twitter'></i>
                                        </a>
                                    </li>
                                </ul>
                                <h3>
                                    <a href="team-details.html">Moris James</a>
                                </h3>
                                <span>Cheif Finance Consultant</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <a class="common-btn" href="/team">
                        All Members
                        <span></span>
                    </a>
                </div>
            </div>
        </section>

    @endsection
