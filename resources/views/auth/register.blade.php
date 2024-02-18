@extends('layouts.public')
@section('title', 'Welcome')
@section('content')


    <div class="user-form-area pt-100">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="user-form-item">
                        <x-auth-session-status class="mb-4" :status="session('status')" />
                        <!-- Validation Errors -->
                        <x-auth-validation-errors class="mb-4 mt-4" :errors="$errors" />
                        <a class="logo" href="/">
                            <img src="frontend-assets/img/logo2.png" alt="Logo">
                        </a>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group">
                                <input name="firstName" id="firstName" value="{{ old('firstName') }}" required
                                    type="text" class="form-control" placeholder="Enter your first name">
                            </div>
                            <div class="form-group">
                                <input name="firstName" id="firstName" value="{{ old('lastName') }}" required type="text"
                                    class="form-control" placeholder="Enter your last name">
                            </div>
                            <div class="form-group">
                                <input name="email" id="email" value="{{ old('email') }}" required
                                    class="form-control" placeholder="Enter your email">
                            </div>
                            <div class="form-group">
                                <input name="password" id="password_confirmation" required type="password"
                                    class="form-control" placeholder="Enter your password">
                            </div>
                            <div class="form-group">
                                <input name="password_confirmation" id="password_confirmation" required type="password"
                                    class="form-control" placeholder="Enter your password again">
                            </div>
                            <div class="form-group">
                                <input name="ref" id="ref" type="text" class="form-control"
                                    placeholder="Enter a Referral Code" value={{ $refcode ? $refcode : null }}>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="common-btn">
                                    Sign Up
                                    <span></span>
                                </button>
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
                            <p>Already created an account? <a href="/login">Sign In</a></p>
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
