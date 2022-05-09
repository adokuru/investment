@extends('layouts.public')
@section('title', 'Welcome')
@section('content')

    <!-- component -->
    <section class="pricing-area section-overlay-two pt-100 pb-70">
        <div class="container">
            <div class="section-title two">
                <span class="sub-title">Pricing</span>
                <h2>Affordable Pricing Plans</h2>
            </div>
            <div class="row align-items-center">
                <div class="col-sm-6 col-lg-4">
                    <div class="pricing-item">
                        <i class="flaticon-rocket"></i>
                        <h3>Basic Plan</h3>
                        <h4>
                            <span class="one">$</span> 39
                            <span class="two">/Month</span>
                        </h4>
                        <ul>
                            <li>Business Planning</li>
                            <li>Financial Investment</li>
                            <li class="deleted">Lifetime</li>
                            <li class="deleted">24/7 Hours Support</li>
                        </ul>
                        <a class="common-btn two" href="#">
                            Purchase Now
                            <span></span>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="pricing-item active">
                        <i class="flaticon-rocket-1"></i>
                        <h3>Premium Plan</h3>
                        <h4>
                            <span class="one">$</span> 69
                            <span class="two">/Month</span>
                        </h4>
                        <ul>
                            <li>Business Planning</li>
                            <li>Financial Investment</li>
                            <li>Lifetime</li>
                            <li>24/7 Hours Support</li>
                        </ul>
                        <a class="common-btn two" href="#">
                            Purchase Now
                            <span></span>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 offset-sm-3 offset-lg-0 col-lg-4">
                    <div class="pricing-item">
                        <i class="flaticon-rocket-2"></i>
                        <h3>Advanced Plan</h3>
                        <h4>
                            <span class="one">$</span> 99
                            <span class="two">/Month</span>
                        </h4>
                        <ul>
                            <li>Business Planning</li>
                            <li>Financial Investment</li>
                            <li>Lifetime</li>
                            <li>24/7 Hours Support</li>
                        </ul>
                        <a class="common-btn two" href="#">
                            Purchase Now
                            <span></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
