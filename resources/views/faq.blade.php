@extends('layouts.public')
@section('title', 'Welcome')
@section('content')

    <div class="page-title-area title-bg-six">
        <div class="title-shape">
            <img src="assets/img/title/title-bg-shape.png" alt="Shape">
        </div>
        <div class="d-table">
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
        </div>
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
                                <a>How does Inva help in business investment permanently?</a>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipsci ng elitr, sed dia mi nonumy eirmod tempor
                                    invi dunt ut labore et dolore magna aliquyam erat, sed diam voluptua</p>
                            </li>
                            <li>
                                <a>How does Inva help in business growth?</a>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipsci ng elitr, sed dia mi nonumy eirmod tempor
                                    invi dunt ut labore et dolore magna aliquyam erat, sed diam voluptua</p>
                            </li>
                            <li>
                                <a>How does Inva help to gain financial goal?</a>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipsci ng elitr, sed dia mi nonumy eirmod tempor
                                    invi dunt ut labore et dolore magna aliquyam erat, sed diam voluptua</p>
                            </li>
                            <li>
                                <a>Can I get financial investment from Inva without interest?</a>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipsci ng elitr, sed dia mi nonumy eirmod tempor
                                    invi dunt ut labore et dolore magna aliquyam erat, sed diam voluptua</p>
                            </li>
                            <li>
                                <a>How does Inva take role in business partnership?</a>
                                <p>Lorem ipsum dolor sit amet, consetetur sadipsci ng elitr, sed dia mi nonumy eirmod tempor
                                    invi dunt ut labore et dolore magna aliquyam erat, sed diam voluptua</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
