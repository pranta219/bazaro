@extends('layouts.app')

@section('content')
    <!-- login area start -->
    <div class="aq-login-ptb pt-100 pb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="aq-login-box fix">
                        <div class="row gx-0">
                            <div class="col-lg-6">
                                <div class="aq-login-thumb-wrap custom-hight">
                                    <img src="{{ asset('assets/img/others/login-thumb-1.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="aq-login-wrapper">
                                    <div class="aq-login-top text-center mb-30">
                                        <h3 class="aq-login-title">Log In</h3>
                                        <p>Enter your email and password to log in.</p>
                                    </div>
                                    <div class="aq-login-option">
                                        <form action="{{ route('login.post') }}" method="POST">
                                            @csrf
                                            <div class="aq-login-input-wrapper">
                                                <div class="aq-login-input-box">
                                                    <div class="aq-login-input-title">
                                                        <label>Your Email</label>
                                                    </div>
                                                    <div class="aq-login-input">
                                                        <input type="email" name="email" value="{{ old('email') }}"
                                                            placeholder="email@address.com" required>
                                                    </div>
                                                    @error('email')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="aq-login-input-box">
                                                    <div
                                                        class="aq-login-input-title d-flex align-items-center justify-content-between">
                                                        <label>Password</label>
                                                        <a class="forgot_password" href="#">Forgot Password?</a>
                                                    </div>
                                                    <div class="aq-login-input">
                                                        <input type="password" name="password" placeholder="Password"
                                                            required>
                                                    </div>
                                                    @error('password')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="aq-login-bottom-wrap text-center mb-20">
                                                <button type="submit" class="aq-login-btn w-100 mb-10">Log In</button>
                                                <div class="aq-login-account">
                                                    <span>Don't have an account?</span>
                                                    <a href="{{ route('register') }}">Sign Up</a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- login area end -->
@endsection