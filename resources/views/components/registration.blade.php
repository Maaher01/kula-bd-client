@extends('layouts.app')

@section('content')
<div class="login-wrapper">
    <div class="login-box">
        <h2 class="title">Register</h2>
        <p class="subtitle">Create your account to get started.</p>

        <!-- Display Validation Errors -->
        @if ($errors->any())
        <div class="alert alert-danger mb-4">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ url('/register') }}" method="POST">
            @csrf

            <!-- Name -->
            <div class="input-group">
                <label>Full Name*</label>
                <div class="input-box">
                    <svg width="20" height="20" fill="#F39C12" viewBox="0 0 24 24">
                        <path d="M12 12c2.7 0 5-2.3 5-5s-2.3-5-5-5-5 2.3-5 5 2.3 5 5 5zm0 2c-3.3 0-10 1.7-10 5v3h20v-3c0-3.3-6.7-5-10-5z" />
                    </svg>
                    <input type="text" name="name" value="{{ old('name') }}" required placeholder="Enter your full name">
                </div>
            </div>

            <!-- Email -->
            <div class="input-group">
                <label>Email Address</label>
                <div class="input-box">
                    <svg width="20" height="20" fill="#F39C12" viewBox="0 0 24 24">
                        <path d="M12 13L2 6.76V6a2 2 0 012-2h16a2 2 0 012 2v.76L12 13zm0 2l10-6.24V18a2 2 0 01-2 2H4a2 2 0 01-2-2v-9.24L12 15z" />
                    </svg>
                    <input type="email" name="email" value="{{ old('email') }}" placeholder="Enter your email">
                </div>
            </div>

            <!-- Mobile -->
            <div class="input-group">
                <label>Mobile Number*</label>
                <div class="input-box">
                    <svg width="20" height="20" fill="#F39C12" viewBox="0 0 24 24">
                        <path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011-.24 11.36 11.36 0 003.55.57 1 1 0 011 1V21a1 1 0 01-1 1A17 17 0 013 5a1 1 0 011-1h3.5a1 1 0 011 1 11.36 11.36 0 00.57 3.55 1 1 0 01-.24 1l-2.21 2.24z" />
                    </svg>
                    <input type="text" name="mobile" value="{{ old('mobile') }}" required placeholder="Enter your mobile number">
                </div>
            </div>

            <!-- Password -->
            <div class="input-group">
                <label>Password*</label>
                <div class="input-box">
                    <svg width="20" height="20" fill="#F39C12" viewBox="0 0 24 24">
                        <path d="M17 8V7a5 5 0 00-10 0v1H5v14h14V8h-2zm-8-1a3 3 0 016 0v1H9V7z" />
                    </svg>
                    <input type="password" name="password" required placeholder="Create password">
                </div>
            </div>

            <!-- Confirm Password -->
            <div class="input-group">
                <label>Confirm Password*</label>
                <div class="input-box">
                    <svg width="20" height="20" fill="#F39C12" viewBox="0 0 24 24">
                        <path d="M17 8V7a5 5 0 00-10 0v1H5v14h14V8h-2zm-8-1a3 3 0 016 0v1H9V7z" />
                    </svg>
                    <input type="password" name="password_confirmation" required placeholder="Re-enter password">
                </div>
            </div>

            <button type="submit" class="btn-login">Register</button>

            <p class="footer-text">
                Already have an account? <a href="{{ url('/login') }}">Login</a>
            </p>
        </form>
    </div>
</div>
@endsection