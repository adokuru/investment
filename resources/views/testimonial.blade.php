@extends('layouts.public')
@section('title', 'Welcome')
@section('content')


    <div class="page-title-area title-bg-six">
        <div class="title-shape">
            <img src="{{ asset('frontend-assets/img/title/title-bg3.jpg') }}" alt="shape">
        </div>
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="title-content">
                        <h2>Testimonials</h2>
                        <ul>
                            <li>
                                <a href="index-2.html">Home</a>
                            </li>
                            <li>
                                <i class='bx bx-chevron-right'></i>
                            </li>
                            <li>
                                <span>Testimonials</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="testimonials-area five ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="testimonials-item">
                        <i class='bx bxs-quote-right icon'></i>
                        <p>Inva is excellent in their work and I really amazed to see how they managed everything throughout
                            the year without any problem. They has an excellent sense of finance & economy.</p>
                            <img src="{{ asset('frontend-assets/img/testimonials1.jpg') }}" alt="testimonial">
                        <h3>Tom Henry</h3>
                        <span>CEO of Company</span>
                        <ul>
                            <li>
                                <i class='bx bxs-star checked'></i>
                            </li>
                            <li>
                                <i class='bx bxs-star checked'></i>
                            </li>
                            <li>
                                <i class='bx bxs-star checked'></i>
                            </li>
                            <li>
                                <i class='bx bxs-star checked'></i>
                            </li>
                            <li>
                                <i class='bx bxs-star checked'></i>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="testimonials-item">
                        <i class='bx bxs-quote-right icon'></i>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page
                            when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less.</p>
                            <img src="{{ asset('frontend-assets/img/testimonials2.jpg') }}" alt="testimonial">
                        <h3>Jac Jacson</h3>
                        <span>Director</span>
                        <ul>
                            <li>
                                <i class='bx bxs-star checked'></i>
                            </li>
                            <li>
                                <i class='bx bxs-star checked'></i>
                            </li>
                            <li>
                                <i class='bx bxs-star checked'></i>
                            </li>
                            <li>
                                <i class='bx bxs-star checked'></i>
                            </li>
                            <li>
                                <i class='bx bxs-star'></i>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="testimonials-item">
                        <i class='bx bxs-quote-right icon'></i>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                            alteration in some form, by injected humour, or randomised words.</p>
                            <img src="{{ asset('frontend-assets/img/testimonials3.jpg') }}" alt="testimonial">
                        <h3>Micheal Shon</h3>
                        <span>Manager</span>
                        <ul>
                            <li>
                                <i class='bx bxs-star checked'></i>
                            </li>
                            <li>
                                <i class='bx bxs-star checked'></i>
                            </li>
                            <li>
                                <i class='bx bxs-star checked'></i>
                            </li>
                            <li>
                                <i class='bx bxs-star checked'></i>
                            </li>
                            <li>
                                <i class='bx bxs-star'></i>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            {{-- <div class="pagination-area">
                <ul>
                    <li>
                        <a href="#">Prev</a>
                    </li>
                    <li>
                        <a class="active" href="#">1</a>
                    </li>
                    <li>
                        <a href="#">2</a>
                    </li>
                    <li>
                        <a href="#">3</a>
                    </li>
                    <li>
                        <a href="#">Next</a>
                    </li>
                </ul>
            </div> --}}
        </div>
    </section>




@endsection
