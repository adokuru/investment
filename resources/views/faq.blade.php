@extends('layouts.public')
@section('title', 'Welcome')
@section('content')

    <div class="page-title-area title-bg-six">
        <div class="title-shape">
            <img src="assets/img/title/title-bg-shape.png" alt="Shape">
        </div>
        {{-- <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="title-content">
                        <h2>FAQ</h2>
                        <ul>
                            <li>
                                <a href="index-2.html">Home</a>
                            </li>
                            <li>
                                <i class='bx bx-chevron-right'></i>
                            </li>
                            <li>
                                <span>FAQ</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>


    <div class="faq-area pt-100 pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="faq-img">
                        <img src="{{ asset('frontend-assets/img/faq-main1.jpg') }}" alt="FAQ">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="faq-item">
                        <ul class="accordion">
                            <li>
                                <a>How do i invest ?</a>
                                <p>To invest, kindly follow these steps…</p>
                                <p>• Select your preferred investment plan.</p>
                                <p>• You will be redirected to the deposit page, where you will make your investment deposit. 
                                Once deposited to the provided wallet address, payment will automatically be confirmed after about 3/3 blockchain confirmations..</p>
                            </li>
                            <li>
                                <a>When do we get our returns ?</a>
                                <p>Wait for the specified time to get your returns in respect to the trading plan you invested on. 
                                   ROI is automatically credited to your wallet and withdrawal is instant.</p>
                            </li>
                            <li>
                                <a>How could any one make a support request ?</a>
                                <p>You can make a support request my sending us a message through our contact form on our contact page and we will attend to you shortly.</p>
                            </li>
                            <li>
                                <a>Can we use bitcoin wallet for free ?</a>
                                <p>Yes you can create a bitcoin wallet for free such as Blockchain, coinbase e.t.c.</p>
                            </li>
                            <li>
                                <a>How to make a passive income with Crypto Trading ?</a>
                                <p>You can make a passive income in forex and crypto trading by letting us manage and grow your investments with the help of our experienced and high profile traders in the financial market.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
