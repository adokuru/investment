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
                <input type="hidden" name="amount" value="{{ number_format($amount /  $walletType->value, 6) }}">
                <input type="hidden" name="type" value="{{ $walletType->id }}">
                <input type="hidden" name="currency" value="{{ $walletType->symbol }}">
                <div class="card box-shadow">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal acrypto_addr_title"><span class="acrypto_texts_coin_address">{{ $walletType->name }} Address</span></h4>
                    </div>
                    <div class="card-body">
                        <div class="acrypto_copy_address" data-original-title="Copy Address" data-placement="top" data-toggle="tooltip"><a href="#a"><img class="acrypto_qrcode_image" style="max-width:200px; height:auto; width:auto\9;" alt="qrcode" data-size="200" src="{{ asset($walletType->qrcode) }}" data-original-title="QR Code - Bitcoin address and sum you can scan with a mobile phone camera. Open Bitcoin Wallet, click on camera icon, point the camera at the code, and you're done"
                                    data-placement="bottom" data-toggle="tooltip"></a></div>
                        <h1 class="mt-3 mb-4 pb-1 card-title acrypto_copy_amount" data-original-title="Copy Amount" data-placement="bottom" data-toggle="tooltip" style="cursor: pointer;">
						<span class="acrypto_amount"> {{ number_format($amount /  $walletType->value, 6) }}</span> 
						<small class="text-muted"><span class="acrypto_coinlabel">{{ $walletType->symbol }}</span>
						</small></h1>
                        <div class="lead acrypto_copy_amount acrypto_texts_send" data-original-title="Copy Amount" data-placement="bottom" data-toggle="tooltip" style="cursor: pointer;">
                            Receive ${{ $amount }} (in ONE payment) to:</div>
                            <br/>
                        <h6 class="card-title card-header col-span-6">
                            <a onclick="myFunction()" class="acrypto_wallet_address" style="line-height:1.5; width:100%;" href="#">
                                <span id="copytext" style="font-size:18px">{{ $walletType->address }}</span>
                            </a>
                        </h6>
                        <br>
                        <button type="submit" class=" btn btn-lg btn-block btn-outline-primary item-center" style="white-space:normal; padding:10px">
                            <svg style="width: 30px" class="svg-inline--fa fa-circle-notch fa-w-16 fa-spin" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="circle-notch" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                <path fill="currentColor"
                                    d="M288 39.056v16.659c0 10.804 7.281 20.159 17.686 23.066C383.204 100.434 440 171.518 440 256c0 101.689-82.295 184-184 184-101.689 0-184-82.295-184-184 0-84.47 56.786-155.564 134.312-177.219C216.719 75.874 224 66.517 224 55.712V39.064c0-15.709-14.834-27.153-30.046-23.234C86.603 43.482 7.394 141.206 8.003 257.332c.72 137.052 111.477 246.956 248.531 246.667C393.255 503.711 504 392.788 504 256c0-115.633-79.14-212.779-186.211-240.236C302.678 11.889 288 23.456 288 39.056z">
                                </path>
                            </svg><!-- <i class="fas fa-circle-notch fa-spin"></i> --> &nbsp; I have made payment</button><br>
                        <p class="lead acrypto_texts_intro3" style="font-size:15px; padding-top:14px">If you send any other {{ $walletType->name }} amount, payment system will ignore it!</p>
                    </div>
                </div>
                <input type="hidden" id="acrypto_refresh_" name="acrypto_refresh_" value="1"><button type="submit" class="acrypto_button_refresh btn btn-lg btn-block btn-primary mt-3" style="display:none" data-original-title="Refresh" data-placement="top" data-toggle="tooltip"><svg class="svg-inline--fa fa-sync-alt fa-w-16" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="sync-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                        <path fill="currentColor"
                            d="M370.72 133.28C339.458 104.008 298.888 87.962 255.848 88c-77.458.068-144.328 53.178-162.791 126.85-1.344 5.363-6.122 9.15-11.651 9.15H24.103c-7.498 0-13.194-6.807-11.807-14.176C33.933 94.924 134.813 8 256 8c66.448 0 126.791 26.136 171.315 68.685L463.03 40.97C478.149 25.851 504 36.559 504 57.941V192c0 13.255-10.745 24-24 24H345.941c-21.382 0-32.09-25.851-16.971-40.971l41.75-41.749zM32 296h134.059c21.382 0 32.09 25.851 16.971 40.971l-41.75 41.75c31.262 29.273 71.835 45.319 114.876 45.28 77.418-.07 144.315-53.144 162.787-126.849 1.344-5.363 6.122-9.15 11.651-9.15h57.304c7.498 0 13.194 6.807 11.807 14.176C478.067 417.076 377.187 504 256 504c-66.448 0-126.791-26.136-171.315-68.685L48.97 471.03C33.851 486.149 8 475.441 8 454.059V320c0-13.255 10.745-24 24-24z">
                        </path>
                    </svg><!-- <i class="fas fa-sync-alt"></i> -->&nbsp; Refresh</button>
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

@section('script')

    <script>
        function myFunction() {
            console.log('myFunction');
            /* Get the text field */
            var copyText = document.getElementById("copytext");

            console.log(copyText.innerText);
            /* Copy the text inside the text field */
            navigator.clipboard.writeText(copyText.innerText);

            /* Alert the copied text */
            alert("Copied the text: " + copyText.innerText);
        }
    </script>

@endsection
