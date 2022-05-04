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
                                <input type="email" class="form-control" placeholder="Enter your email">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Enter your password">
                            </div>
                            <div class="text-center">
                                <a href="#" class="common-btn">
                                    Sign In
                                    <span></span>
                                </a>
                            </div>
                            <ul class="remember align-items-center">
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
                                        <label class="form-check-label" for="defaultCheck2">Remember Me</label>
                                    </div>
                                </li>
                                <li>
                                    <a href="#">Forgot Password?</a>
                                </li>
                            </ul>
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
                            <p>Didn't have an account? <a href="sign-up.html">Sign Up</a></p>
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
