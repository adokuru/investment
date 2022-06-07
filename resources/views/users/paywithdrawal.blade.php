@extends('layouts.users')

@section('title', 'Withdrawal')

@section('breadcrumbs')
    <div class="dashboard-hero-content text-white">
        <h3 class="title">Withdrawal</h3>
        <ul class="breadcrumb">
            <li>
                <a href="/user/dashboard">Home</a>
            </li>
            <li>
                Withdrawal
            </li>
        </ul>
    </div>
@endsection
@section('content')
    <div class="partners">
        <h3 class="main-title">Withdrawal in {{ $walletType->symbol }}</h3>
        <div class="col-12 text-center col-sm-10 offset-sm-1 col-md-8 offset-md-2">
            <form action="{{ route('withdrawal.addDeposit') }}" method="post">
                @csrf
                <input type="hidden" name="amount" value="{{ number_format($amount / $walletType->value, 6) }}">
                <input type="hidden" name="type" value="{{ $walletType->id }}">
                <input type="hidden" name="currency" value="{{ $walletType->symbol }}">
                <div class="card box-shadow">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal acrypto_addr_title"><span class="acrypto_texts_coin_address">{{ $walletType->name }} Address</span></h4>
                    </div>
                    <div class="card-body">

                        <h1 class="mt-3 mb-4 pb-1 card-title acrypto_copy_amount" data-original-title="Copy Amount" data-placement="bottom" data-toggle="tooltip" style="cursor: pointer;">
                            <span class="acrypto_amount"> {{ number_format($amount / $walletType->value, 6) }}</span>
                            <small class="text-muted"><span class="acrypto_coinlabel">{{ $walletType->symbol }}</span>
                            </small>
                        </h1>
                        <div class="lead acrypto_copy_amount acrypto_texts_send" data-original-title="Copy Amount" data-placement="bottom" data-toggle="tooltip" style="cursor: pointer;">
                            Receive ${{ $amount }} (in ONE payment) to:</div>
                        <br />
                        <h6 class="card-title card-header col-span-6">
                            <a onclick="myFunction()" class="acrypto_wallet_address" style="line-height:1.5; width:100%;" href="#">
                                <span id="copytext" style="font-size:18px">{{ $wallet }}</span>
                            </a>
                        </h6>
                        <br>
                        <button type="submit" class="custom-button border-0">
                            <i class="fa fa-send"></i> Send
                        </button>
                    </div>
            </form>
        </div>

    </div>
    <style>
        .tooltip {
            position: relative;
            display: inline-block;
        }

        .tooltip .tooltiptext {
            visibility: hidden;
            width: 140px;
            background-color: #555;
            color: #fff;
            text-align: center;
            border-radius: 6px;
            padding: 5px;
            position: absolute;
            z-index: 1;
            bottom: 150%;
            left: 50%;
            margin-left: -75px;
            opacity: 0;
            transition: opacity 0.3s;
        }

        .tooltip .tooltiptext::after {
            content: "";
            position: absolute;
            top: 100%;
            left: 50%;
            margin-left: -5px;
            border-width: 5px;
            border-style: solid;
            border-color: #555 transparent transparent transparent;
        }

        .tooltip:hover .tooltiptext {
            visibility: visible;
            opacity: 1;
        }
    </style>

@endsection
