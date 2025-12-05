@extends('layouts.app')

@section('content')
<div class="order-confirm-main mb-5">
    <div class="order-confirm-sub">
        <div class="content">
            <div class="tick-circle">
                <i class="fa fa-check"></i>
            </div>
            <div class="success-message">
                <h3>Your Order ID is: {{ $order->id }}</h3>
                <h4>Your Order has been placed successfully!</h4>
                <p>Your order has been successfully placed. Our team will soon call you to confirm the order.</p>
            </div>
            <div class="home-btn">
                <a href="{{ url('/') }}">
                    <button>Continue Shopping</button>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection