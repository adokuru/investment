@extends('layouts.public')
@section('title', 'Trading')
@section('content')

    <!-- component -->
    <section class="pricing-area section-overlay-two pt-100 pb-25" style="margin-top: 100px;">
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
                            <li>0.07% daily</li>
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
                            <li>0.06% daily</li>
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
                            <li>0.03% daily</li>
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
                            <li>0.08% daily</li>
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
                            <li>0.10% daily</li>
                            <li>18 days contract</li>
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
                        <h3>Mega investment</h3>
                        <h4>
                            <span class="one">$</span> 5,000,000
                            <span class="two">/Month</span>
                        </h4>
                        <ul>
                            <li>Crypto Investment</li>
                            <li>Crypto Insurance</li>
                            <li>10% Referral Bonus</li>
                            <li>Low Maintenance fee</li>
                            <li>0.30% daily</li>
                            <li>170 days contract</li>
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
