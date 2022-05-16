@extends('layouts.public')
@section('title', 'Trading')
@section('content')

    <!-- component -->
    <section class="pricing-area section-overlay-two pt-100 pb-25">
        <div class="container">
            <div class="section-title two">
                <h3>TRADING PLANS</h3>
            </div>
            <div class="row align-items-center">
                <div class="col-sm-6 col-lg-4">
                    <div class="pricing-item">
                        <h3>Low Yield PLAN (Low Profile Investors)</h3>
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
                        <a class="common-btn" href="{{ route('register') }}">
                            Get Started
                            <span></span>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="pricing-item active">

                        <h3>High-Yield Plan (High Profile Investors)</h3>
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
                        <a class="common-btn two" href="{{ route('register') }}">
                            Get Started
                            <span></span>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 offset-sm-3 offset-lg-0 col-lg-4">
                    <div class="pricing-item">
                        <h3>Insurance Plan</h3>
                        <h4>
                            <span class="one">$</span> 100,000
                            <span class="two">/Month</span>
                        </h4>
                        <ul>
                            <li>Crypto Investment</li>
                            <li>Crypto Insurance</li>
                            <li>10% Referral Bonus</li>
                            <li>Low Maintenance fee</li>
                            <li>3.00% daily</li>
                            <li>50% ROI</li>
                            <li>170 days contract</li>
                            <li>Automatic payout in BTC</li>
                        </ul>
                        <a class="common-btn" href="{{ route('register') }}">
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
                        <a class="common-btn" href="{{ route('register') }}">
                            Get Started
                            <span></span>
                        </a>
                    </div>
                </div>
                <div class="col-sm-6 offset-sm-3 offset-lg-0 col-lg-4">
                    <div class="pricing-item active">
                            <h3>CO Investment Plan</h3>
                            <h4>
                                <span class="one">$</span> 4,000,000
                                <span class="two">/Month</span>
                            </h4>
                            <ul>
                                <li>Crypto Investment</li>
                                <li>Crypto Insurance</li>
                                <li>10% Referral Bonus</li>
                                <li>Low Maintenance fee</li>
                                <li>8.00% daily</li>
                                <li>120% ROI</li>
                                <li>18 days contract</li>
                                <li>Automatic payout in BTC</li>
                            </ul>
                            <a class="common-btn" href="{{ route('register') }}">
                                Get Started
                                <span></span>
                            </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- component End -->

@endsection
