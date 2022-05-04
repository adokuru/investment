@extends('layouts.public')
@section('title', 'Welcome')
@section('content')


    <div class="page-title-area title-bg-one">
        <div class="title-shape">
            <img src="assets/img/title/title-bg-shape.png" alt="Shape">
        </div>
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="title-content">
                        {{-- <h2 class="text-blue-600">About</h2>
    <ul>
    <li>
    <a class="text-blue-600" href="/">Home</a>
    </li>
    <li>
    <i class='bx bx-chevron-right'></i>
    </li>
    <li>
    <span class="text-blue-600">About</span> --}}
                        </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="about-area section-overlay pt-50 pb-70">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="about-content">
                        <div class="section-title">
                            <span class="sub-title">About</span>
                            <h2>We Are A Trusted Company With <span>25+</span> Years Of Experience</h2>
                            <p>Allianz is a UK registered legal international investment company.
                                The company was created by a group of qualified experts, professional bankers, traders and
                                analysts who specialized in the stock, bond, futures, currencies, forex and binary trading
                                and arbitrage.</p>
                        </div>
                        <p class="about-p">With having more than ten years of extensive practical experiences of
                            combined personal skills, knowledge, talents and collective ambitions for success.</p>


                    </div>
                </div>
                <div class="col-lg-5 pt-50">
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
    </section>


@endsection
