@extends('layouts.public')
@section('title', 'Welcome')
@section('content')


    <div class="page-title-area title-bg-two">
        <div class="title-shape">
            <img src="assets/img/title/title-bg-shape.png" alt="Shape">
        </div>
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="title-content">
                        <h2>Service Details</h2>
                        <ul>
                            <li>
                                <a href="index-2.html">Home</a>
                            </li>
                            <li>
                                <i class='bx bx-chevron-right'></i>
                            </li>
                            <li>
                                <span>Service Details</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="service-details-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="widget-area">
                        <div class="services widget-item">
                            <ul>
                                <li>
                                    <a href="#">
                                        Business Strategy
                                        <i class='bx bx-chevron-right'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Investment Planning
                                        <i class='bx bx-chevron-right'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Project Management
                                        <i class='bx bx-chevron-right'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Financial Analysis
                                        <i class='bx bx-chevron-right'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Audit & Evaluation
                                        <i class='bx bx-chevron-right'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Support & Maintain
                                        <i class='bx bx-chevron-right'></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="report widget-item">
                            <ul>
                                <li>
                                    <i class='bx bxs-file-pdf'></i>
                                    <a href="#">Download Report</a>
                                </li>
                                <li>
                                    <i class='bx bx-download'></i>
                                    <a href="#">Download Brochure</a>
                                </li>
                            </ul>
                        </div>
                        <div class="touch widget-item">
                            <h3>Get In Touch</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit</p>
                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <textarea name="your-message" rows="6" class="form-control" placeholder="Message"></textarea>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn common-btn">
                                        Send Message
                                        <span></span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="details-item">
                        <div class="details-img">
                            <h2>Business Strategy</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                                galley of type and scrambled it to make a type specimen book. It has survived not only five
                                centuries, but also the leap into electronic typesetting, remaining essentially unchanged
                            </p>
                            <div class="row">
                                <div class="col-sm-6 col-lg-6">
                                    <img src="assets/img/services/service-details1.jpg" alt="Details">
                                </div>
                                <div class="col-sm-6 col-lg-6">
                                    <img src="assets/img/services/service-details2.jpg" alt="Details">
                                </div>
                            </div>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a
                                page when looking at its layout. The point of using Lorem Ipsum is that it has a
                                more-or-less normal distribution of letters, as opposed to using 'Content here, content
                                here', making it look like readable English. Many desktop publishing packages</p>
                            <ul>
                                <li>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidu</li>
                                <li>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed</li>
                                <li>Eirmod tempor invidu nt ut labore et dolore magna aliquyam erat</li>
                                <li>Diam nonumy eirmod tempor invidu nt ut labore et</li>
                                <li>Labore et dolore magna aliquyam erat, sed diam voluptua</li>
                            </ul>
                            <img src="assets/img/services/service-details3.jpg" alt="Details">
                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                                classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a
                                Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure
                                Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the
                                word in classical literature, discovered the undoubtable source</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>






@endsection
