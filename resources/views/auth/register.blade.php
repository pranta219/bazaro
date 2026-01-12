@extends('layouts.app')

@section('content')
    <!-- register area start -->
    <div class="aq-login-ptb pt-100 pb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="aq-login-box fix">
                        <div class="row gx-0">
                            <div class="col-lg-6">
                                <div class="aq-login-thumb-wrap">
                                    <img src="{{ asset('assets/img/others/login-thumb-1.jpg') }}" alt="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="aq-login-wrapper">
                                    <div class="aq-login-top text-center mb-30">
                                        <h3 class="aq-login-title">Sign Up</h3>
                                        <p>Enter your details to create an account.</p>
                                    </div>
                                    <div class="aq-login-option">
                                        <form action="{{ route('register.post') }}" method="POST">
                                            @csrf
                                            <div class="aq-login-input-wrapper">
                                                <div class="aq-login-input-box">
                                                    <div class="aq-login-input-title">
                                                        <label>Your Name <span>*</span></label>
                                                    </div>
                                                    <div class="aq-login-input">
                                                        <input type="text" name="name" value="{{ old('name') }}"
                                                            placeholder="Your Name" required>
                                                    </div>
                                                    @error('name')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="aq-login-input-box">
                                                    <div class="aq-login-input-title">
                                                        <label>Your Email <span>*</span></label>
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
                                                    <div class="aq-login-input-title">
                                                        <label>Password <span>*</span></label>
                                                    </div>
                                                    <div class="aq-login-input">
                                                        <input type="password" name="password" placeholder="Password"
                                                            required>
                                                    </div>
                                                    @error('password')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="aq-login-input-box">
                                                    <div class="aq-login-input-title">
                                                        <label>Confirm Password <span>*</span></label>
                                                    </div>
                                                    <div class="aq-login-input">
                                                        <input type="password" name="password_confirmation"
                                                            placeholder="Confirm Password" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="aq-login-bottom-wrap text-center mb-20">
                                                <button type="submit" class="aq-login-btn w-100 mb-10">Create
                                                    Account</button>
                                                <div class="aq-login-account">
                                                    <span>Already have an account?</span>
                                                    <a href="{{ route('login') }}">Log In</a>
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
    <!-- register area end -->
@endsection