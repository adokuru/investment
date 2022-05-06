@extends('layouts.public')
@section('title', 'Welcome')
@section('content')


    <div class="user-form-area pt-100">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="user-form-item">
                        <a class="logo" href="index-2.html">
                            {{-- <img src="assets/img/logo-two.png" alt="Logo"> --}}
                        </a>
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Enter your name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Enter your email">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Enter your password">
                            </div>
                            <div class="text-center">
                                <a href="#" class="common-btn">
                                    Sign Up
                                    <span></span>
                                </a>
                            </div>
                            <h4>Or</h4>
                            <ul class="social">
                                <li>
                                    <a href="#" target="_blank">
                                        <i class='bx bxl-facebook'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class='bx bxl-twitter'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class='bx bxl-linkedin'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">
                                        <i class='bx bxl-instagram'></i>
                                    </a>
                                </li>
                            </ul>
                            <p>Already created an account? <a href="/sign-in">Sign In</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="go-top">
        <i class="bx bxs-up-arrow-alt"></i>
        <i class="bx bxs-up-arrow-alt"></i>
    </div>



@endsection
