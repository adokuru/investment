@extends('layouts.public')
@section('title', 'Welcome')
@section('content')

    <!-- component -->
    <div class="page-title-area title-bg-two">
        <div class="title-shape">
            <img src="assets/img/title/title-bg-shape.png" alt="Shape">
        </div>
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="title-content">
                        <h2>Services</h2>
                        <ul>
                            <li>
                                <a href="index-2.html">Home</a>
                            </li>
                            <li>
                                <i class='bx bx-chevron-right'></i>
                            </li>
                            <li>
                                <span>Services</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="services-area ptb-100 h-96 items-center">
        <div class="container items-center">
            <div class="row grid grid-cols-3">
                <div class="col-sm-3 col-lg-3 rounded-lg">
                    <div class="services-item card-overlay active">
                        <i class="flaticon-marketing-strategy"></i>
                        <h3>
                            <a href="service-details.html">Business Strategy</a>
                        </h3>
                        <p>Lorem ipsum dolor sit amet, conse tetur sadipscing elitr, sed diam nonumy eirm od tempor invidunt
                            ut labore et dolore magna</p>
                        <p>Lorem ipsum dolor sit amet, conse tetur sadipscing elitr, sed diam nonumy eirm od tempor invidunt
                            ut labore et dolore magna</p>
                            <a class="common-btn" href="#">
                                Let's Start Now
                                <span></span>
                            </a>    
                    </div>
                </div>
                <div class="col-sm-3 col-lg-3 rounded-lg">
                    <div class="services-item card-overlay">
                        <i class="flaticon-dollars-money-bag-with-a-clock"></i>
                        <h3>
                            <a href="service-details.html">Investment Planning</a>
                        </h3>
                        <p>Lorem ipsum dolor sit amet, conse tetur sadipscing elitr, sed diam nonumy eirm od tempor invidunt
                            ut labore et dolore magna</p>
                        <a class="common-btn" href="#">
                                    Let's Start Now
                                    <span></span>
                                </a>
                    </div>
                </div>
                <div class="col-sm-3 col-lg-3 rounded-lg">
                    <div class="services-item card-overlay active">
                        <i class="flaticon-strategy-in-a-labyrinth"></i>
                        <h3>
                            <a href="service-details.html">Project Management</a>
                        </h3>
                        <p>Lorem ipsum dolor sit amet, conse tetur sadipscing elitr, sed diam nonumy eirm od tempor invidunt
                            ut labore et dolore magna</p>
                            <a class="common-btn" href="#">
                                Let's Start Now
                                <span></span>
                            </a>
                    </div>
                </div>
            </div>
               
    </section>




@endsection
