
@extends('layouts.users')

@section('title', 'Dashboard')

@section('breadcrumbs')
<div class="dashboard-hero-content text-white">
    <h3 class="title">Dashboard</h3>
    <ul class="breadcrumb">
        <li>
            <a href="index.html">Home</a>
        </li>
        <li>
            Dashboard
        </li>
    </ul>
</div>
@endsection
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center mt--85 ">
        <div class="col-sm-6 col-lg-3">
            <div class="dashboard-item">
                <div class="dashboard-inner">
                    <div class="cont">
                        <span class="title">Balance</span>
                        <h5 class="amount">0 BTC</h5>
                        <h6 class="amount">0 USD</h6>
                    </div>
                    <div class="thumb">
                        <img src="{{asset('backend/assets/images/dashboard/dashboard2.png')}}" alt="dasboard">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="dashboard-item">
                <div class="dashboard-inner">
                    <div class="cont">
                        <span class="title">Balance</span>
                        <h5 class="amount">0 ETH</h5>
                        <h6 class="amount">0 USD</h6>
                    </div>
                    <div class="thumb">
                        <img src="{{asset('backend/assets/images/dashboard/dashboard3.png')}}" alt="dasboard">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="dashboard-item">
                <div class="dashboard-inner">
                    <div class="cont">
                        <span class="title">Balance</span>
                        <h5 class="amount">0 USDT</h5>
                        <h6 class="amount">0 USD</h6>
                    </div>
                    <div class="thumb">
                        <img src="{{asset('backend/assets/images/dashboard/dashboard4.png')}}" alt="dasboard">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-lg-3">
            <div class="dashboard-item">
                <div class="dashboard-inner">
                    <div class="cont">
                        <span class="title">Balance</span>
                        <h5 class="amount">0 BCH</h5>
                        <h6 class="amount">0 USD</h6>
                    </div>
                    <div class="thumb">
                        <img src="{{asset('backend/assets/images/dashboard/dashboard4.png')}}" alt="dasboard">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row pb-30">
        <div class="col-lg-6">
            <div class="total-earning-item">
                <div class="total-earning-heading">
                    <h5 class="title">Total earning </h5>
                    <h4 class="amount cl-1">$103 458</h4>
                </div>
                <div class="d-flex flex-wrap justify-content-between">
                    <div class="item">
                        <div class="cont">
                            <h4 class="cl-theme">+.3%</h4>
                            <span class="month">August  Profit</span>
                        </div>
                        <div class="thumb">
                            <img src="{{asset('backend/assets/images/dashboard/graph1.png')}}" alt="dashboard">
                        </div>
                    </div>
                    <div class="item">
                        <div class="cont">
                            <h4 class="cl-1">+.12%</h4>
                            <span class="month">Year Profit</span>
                        </div>
                        <div class="thumb">
                            <img src="{{asset('backend/assets/images/dashboard/graph2.png')}}" alt="dashboard">
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <a href="#0" class="normal-button">Explore <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="progress-wrapper mb-30">
                <h5 class="title cl-white">Progress</h5>
                <div class="d-flex flex-wrap m-0-15-20-none">
                    <div class="circle-item">
                        <span class="level">Level(1)</span>
                        <div class="progress1 circle">
                            <strong></strong>
                        </div>
                    </div>
                    <div class="circle-item">
                        <span class="level">ROI Speed</span>
                        <div class="progress2 circle">
                            <strong></strong>
                        </div>
                    </div>
                    <div class="circle-item">
                        <span class="level">ROI Redeemed</span>
                        <div class="progress3 circle">
                            <strong></strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="earn-item mb-30">
                <div class="earn-thumb">
                    <img src="{{asset('backend/assets/images/dashboard/earn/01.png')}}" alt="dashboard-earn">
                </div>
                <div class="earn-content">
                    <h6 class="title">Active deposits in the amount of</h6>
                    <ul class="mb--5">
                      
                        <li>
                            <div class="icon">
                                <img src="{{asset('backend/assets/images/dashboard/earn/btc.png')}}" alt="dashboard-earn">
                            </div>
                            <div class="cont">
                                <span class="cl-1">0.000000</span>
                                <span class="cl-4">BTC</span>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <img src="{{asset('backend/assets/images/dashboard/earn/xrp.png')}}" alt="dashboard-earn">
                            </div>
                            <div class="cont">
                                <span class="cl-1">0.000000</span>
                                <span class="cl-4">ETH</span>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <img src="{{asset('backend/assets/images/dashboard/earn/eth.png')}}" alt="dashboard-earn">
                            </div>
                            <div class="cont">
                                <span class="cl-1">0.000000</span>
                                <span class="cl-4">ETH</span>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <img src="{{asset('backend/assets/images/dashboard/earn/usd.png')}}" alt="dashboard-earn">
                            </div>
                            <div class="cont">
                                <span class="cl-1">0.00000</span>
                                <span class="cl-4">USD</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="earn-item small-thumbs mb-30">
                <div class="earn-thumb">
                    <img src="{{asset('backend/assets/images/dashboard/earn/07.png')}}" alt="dashboard-earn">
                </div>
                <div class="earn-content">
                    <h6 class="title">The last Referral Calculation</h6>
                    <ul class="mb--5">
                        <li>
                            <div class="icon">
                                <img src="{{asset('backend/assets/images/dashboard/earn/usd.png')}}" alt="dashboard-earn">
                            </div>
                            <div class="cont">
                                <span class="cl-1">0.00</span>
                                <span class="cl-4">USD</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection