@extends('layouts.users')

@section('title', 'Referrals')

@section('breadcrumbs')
    <div class="dashboard-hero-content text-white">
        <h3 class="title">Referrals</h3>
        <ul class="breadcrumb">
            <li>
                <a href="/user/dashboard">Home</a>
            </li>
            <li>
                Referrals
            </li>
        </ul>
    </div>
@endsection
@section('content')
                    <div class="partners">
                        <h3 class="main-title">Partners</h3>
                        <div class="referral-group">
                            <div class="refers">
                                <div class="referral-links">
                                    <div class="oh">
                                        <div class="referral-left">
                                            <span class="left-icon">
                                                <i class="fas fa-link"></i>
                                            </span>
                                            <h6>Referral Link:</h6>
                                            <div class="copy-button">
                                                <a href="#0" class="custom-button" id="copy">Copy Link</a>
                                            </div>
                                            <input type="text" id="copyLinks" readonly value="{{ Auth::user()->referral_link }}">
                                        </div>
                                    </div>
                                </div>
                            </div>	
                        </div>
                        <div class="row mb-30-none">
                            <div class="col-lg-6">
                                <div class="earn-item mb-30">
                                    <div class="earn-thumb">
                                        <img src="/backend/assets/images/dashboard/earn/03.png" alt="dashboard-earn">
                                    </div>
                                    <div class="earn-content">
                                        <h6 class="title">Earned Referral</h6>
                                        <ul class="mb--5">
                                            <li>
                                                <div class="icon">
                                                    <img src="/backend/assets/images/dashboard/earn/usd.png" alt="dashboard-earn">
                                                </div>
                                                <div class="cont">
                                                    <span class="cl-1">0.00</span>
                                                    <span class="cl-4">USD</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <img src="/backend/assets/images/dashboard/earn/btc.png" alt="dashboard-earn">
                                                </div>
                                                <div class="cont">
                                                    <span class="cl-1">0.000000</span>
                                                    <span class="cl-4">BTC</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <img src="/backend/assets/images/dashboard/earn/xrp.png" alt="dashboard-earn">
                                                </div>
                                                <div class="cont">
                                                    <span class="cl-1">0.000000</span>
                                                    <span class="cl-4">XRP</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <img src="/backend/assets/images/dashboard/earn/eth.png" alt="dashboard-earn">
                                                </div>
                                                <div class="cont">
                                                    <span class="cl-1">0.000000</span>
                                                    <span class="cl-4">ETH</span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="earn-item mb-30">
                                    <div class="earn-thumb">
                                        <img src="/backend/assets/images/dashboard/earn/02.png" alt="dashboard-earn">
                                    </div>
                                    <div class="earn-content partner-content d-flex flex-wrap align-items-start justify-content-between">
                                        <h6 class="title w-100">All partners</h6>
                                        <ul class="mb--5">
                                            <li>
                                                <div class="icon">
                                                    <img src="/backend/assets/images/dashboard/earn/active.png" alt="dashboard-earn">
                                                </div>
                                                <div class="cont">
                                                    <span class="cl-4">Active :</span>
                                                    <span class="cl-1">{{ count(Auth::user()->referrals)  ?? '0' }}</span>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="icon">
                                                    <img src="/backend/assets/images/dashboard/earn/inactive.png" alt="dashboard-earn">
                                                </div>
                                                <div class="cont">
                                                    <span class="cl-4">Inactive :</span>
                                                    <span class="cl-1">0</span>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="total-partner">
                                            <span class="total-title">{{ count(Auth::user()->referrals)  ?? '0' }}</span>
                                            <span>Total</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           </div>
                    </div>
                    <div class="partners">
                        <h3 class="main-title">Your Partners:</h3>
                        <div class="table-wrapper">
                            <table class="transaction-table">
                                <thead>
                                    <tr>
                                        <th>DATE AND TIME</th>
                                        <th>Level</th>
                                        <th>Username</th>
                                        <th>E-mail</th>
                                        <th>payment method</th>
                                        <th>Invested</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <i class="far fa-calendar"></i> Feb 14, 2020 20:53
                                        </td>
                                        <td>
                                            Level1
                                        </td>
                                        <td>
                                            Austin 984
                                        </td>
                                        <td>
                                            <a href="Mailto:dfdfdsafasdfasd@gmail.com">Austin <span class="__cf_email__" data-cfemail="1920212d597e74787075377a7674">[email&#160;protected]</span></a>
                                        </td>
                                        <td>
                                            <img src="/backend/assets/images/dashboard/earn/btc2.png" alt="dashboard-earn"> BTC
                                        </td>
                                        <td>
                                            0.000591
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <i class="far fa-calendar"></i> Feb 14, 2020 20:53
                                        </td>
                                        <td>
                                            Level2
                                        </td>
                                        <td>
                                            Austin 984
                                        </td>
                                        <td>
                                            <a href="Mailto:dfdfdsafasdfasd@gmail.com">Austin <span class="__cf_email__" data-cfemail="023b3a3642656f636b6e2c616d6f">[email&#160;protected]</span></a>
                                        </td>
                                        <td>
                                            <img src="/backend/assets/images/dashboard/earn/dash2.png" alt="dashboard-earn"> BTC
                                        </td>
                                        <td>
                                            0.000591
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <i class="far fa-calendar"></i> Feb 14, 2020 20:53
                                        </td>
                                        <td>
                                            Level3
                                        </td>
                                        <td>
                                            Austin 984
                                        </td>
                                        <td>
                                            <a href="Mailto:dfdfdsafasdfasd@gmail.com">Austin <span class="__cf_email__" data-cfemail="d3eaebe793b4beb2babffdb0bcbe">[email&#160;protected]</span></a>
                                        </td>
                                        <td>
                                            <img src="/backend/assets/images/dashboard/earn/eth3.png" alt="dashboard-earn"> BTC
                                        </td>
                                        <td>
                                            0.000591
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <i class="far fa-calendar"></i> Feb 14, 2020 20:53
                                        </td>
                                        <td>
                                            Level4
                                        </td>
                                        <td>
                                            Austin 984
                                        </td>
                                        <td>
                                            <a href="Mailto:dfdfdsafasdfasd@gmail.com">Austin <span class="__cf_email__" data-cfemail="ab92939febccc6cac2c785c8c4c6">[email&#160;protected]</span></a>
                                        </td>
                                        <td>
                                            <img src="/backend/assets/images/dashboard/earn/eth2.png" alt="dashboard-earn"> BTC
                                        </td>
                                        <td>
                                            0.000591
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <i class="far fa-calendar"></i> Feb 14, 2020 20:53
                                        </td>
                                        <td>
                                            Level5
                                        </td>
                                        <td>
                                            Austin 984
                                        </td>
                                        <td>
                                            <a href="Mailto:dfdfdsafasdfasd@gmail.com">Austin <span class="__cf_email__" data-cfemail="5a63626e1a3d373b333674393537">[email&#160;protected]</span></a>
                                        </td>
                                        <td>
                                            <img src="/backend/assets/images/dashboard/earn/btc2.png" alt="dashboard-earn"> BTC
                                        </td>
                                        <td>
                                            0.000591
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="pagination-area d-flex flex-wrap justify-content-between align-items-center">
                            <div class="pagination-cont">
                                Showing 1 to 5 of 22 entries
                            </div>
                            <ul class="pagination">
                                <li>
                                    <a href="#0"><i class="fas fa-angle-left"></i></a>
                                </li>
                                <li>
                                    <a href="#0">01</a>
                                </li>
                                <li>
                                    <a href="#0" class="active">02</a>
                                </li>
                                <li>
                                    <a href="#0">03</a>
                                </li>
                                <li>
                                    <a href="#0"><i class="fas fa-angle-right"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
@endsection


@section('script')



@endsection
