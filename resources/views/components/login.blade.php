@extends('layouts.app')

@section('content')
<div class="login-wrapper">
    <div class="login-box">
        <h2 class="title">Log In</h2>
        <p class="subtitle">Welcome back! Please login to continue.</p>

        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        @if($errors->any() && !$errors->has('email') && !$errors->has('password'))
        <div class="alert alert-danger">
            {{ $errors->first() }}
        </div>
        @endif

        <!-- Form -->
        <form action="/login" method="POST">
            @csrf

            <!-- Mobile/Email -->
            <div class="input-group">
                <label>Mobile Number</label>
                <div class="input-box">
                    <svg width="20" height="20" fill="#F39C12" viewBox="0 0 24 24">
                        <path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011-.24 11.36 11.36 0 003.55.57 1 1 0 011 1V21a1 1 0 01-1 1A17 17 0 013 5a1 1 0 011-1h3.5a1 1 0 011 1 11.36 11.36 0 00.57 3.55 1 1 0 01-.24 1l-2.21 2.24z" />
                    </svg>
                    <input type="text" name="mobile" value="{{ old('mobile') }}" required placeholder="Enter your mobile number">
                </div>
            </div>

            <!-- Password -->
            <div class="input-group">
                <label>Password</label>
                <div class="input-box">
                    <svg width="20" height="20" fill="#F39C12" viewBox="0 0 24 24">
                        <path d="M17 8V7a5 5 0 00-10 0v1H5v14h14V8h-2zm-8-1a3 3 0 016 0v1H9V7z" />
                    </svg>
                    <input type="password" name="password" required placeholder="Enter your password">
                </div>
            </div>

            <button type="submit" class="btn-login">Login</button>

            <p class="footer-text">
                Don't have an account? <a href="/register">Register</a>
            </p>
        </form>
    </div>
</div>
@endsection