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
                                <img src="{{ asset('backend/assets/images/dashboard/dashboard2.png') }}" alt="dasboard">
                            </div>
                        </div>
                    </div>
                </div>
            @endif


        </div>
        <div class="row pb-30">
            <div class="col-lg-6">
                <div class="total-earning-item">
                    <div class="total-earning-heading">
                        <h5 class="title">Total earning </h5>
                        <h4 class="amount cl-1">$ {{ auth()->user()->balance }}</h4>
                    </div>
                    @if (auth()->user()->balance > 0)
                        <div class="d-flex flex-wrap justify-content-between">
                            <div class="item">
                                <div class="cont">
                                    <h4 class="cl-theme">+.3%</h4>
                                    <span class="month">June Profit</span>
                                </div>
                                <div class="thumb">
                                    <img src="{{ asset('backend/assets/images/dashboard/graph1.png') }}" alt="dashboard">
                                </div>
                            </div>
                            <div class="item">
                                <div class="cont">
                                    <h4 class="cl-1">+.12%</h4>
                                    <span class="month">Current Year Profit</span>
                                </div>
                                <div class="thumb">
                                    <img src="{{ asset('backend/assets/images/dashboard/graph2.png') }}" alt="dashboard">
                                </div>
                            </div>
                        </div>
                    @endif
                    <div class="text-center">
                        <a href="#0" class="normal-button">Explore <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="earn-item small-thumbs mb-30">
                    <div class="earn-thumb">
                        <img src="{{ asset('backend/assets/images/dashboard/earn/07.png') }}" alt="dashboard-earn">
                    </div>
                    <div class="earn-content">
                        <h6 class="title">The last Referral Calculation</h6>
                        <ul class="mb--5">
                            <li>
                                <div class="icon">
                                    <img src="{{ asset('backend/assets/images/dashboard/earn/usd.png') }}" alt="dashboard-earn">
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
                        <img src="{{ asset('backend/assets/images/dashboard/earn/01.png') }}" alt="dashboard-earn">
                    </div>
                    <div class="earn-content">
                        <h6 class="title">Active deposits in the amount of</h6>
                        <ul class="mb--5">

                            <li>
                                <div class="icon">
                                    <img src="{{ asset('backend/assets/images/dashboard/earn/btc.png') }}" alt="dashboard-earn">
                                </div>
                                <div class="cont">
                                    <span class="cl-1">{{ $bitconwallet->amount != null ? $bitconwallet->amount : "0.000000" }}</span>
                                    <span class="cl-4">BTC</span>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <img src="{{ asset('backend/assets/images/dashboard/earn/xrp.png') }}" alt="dashboard-earn">
                                </div>
                                <div class="cont">
                                    <span class="cl-1">{{ $ethwallet->amount != null ? $ethwallet->amount : "0.000000" }}</span>
                                    <span class="cl-4">ETH</span>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <img src="{{ asset('backend/assets/images/dashboard/earn/eth.png') }}" alt="dashboard-earn">
                                </div>
                                <div class="cont">
                                    <span class="cl-1">{{ $btcashwallet->amount != null ? $btcashwallet->amount : "0.000000" }}</span>
                                    <span class="cl-4">BCH</span>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <img src="{{ asset('backend/assets/images/dashboard/earn/usd.png') }}" alt="dashboard-earn">
                                </div>
                                <div class="cont">
                                    <span class="cl-1">{{ $usdtwallet->amount != null ? $usdtwallet->amount : "0.000000" }}</span>
                                    <span class="cl-4">USDT</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
