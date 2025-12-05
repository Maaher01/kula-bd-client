@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center my-5">
    <div class="p-4 rounded shadow" style="width: 95%; max-width: 1300px; color: #fff;">

        <form action="{{ route('order.place') }}" method="POST" class="row g-4">
            @csrf
            <!-- ======================= LEFT: BILLING DETAILS FORM ======================= -->
            <div class="col-lg-7">
                <div class="p-4 rounded" style="background-color: #222; border: 1px solid #333;">
                    <h4 class="fw-semibold mb-4">Billing Details</h4>
                    <div class="mb-3">
                        <label class="form-label">Full Name</label>
                        <input type="text" name="customer_name" value="{{ old('name', $user->name ?? '') }}" class="form-control text-white" style="background:#111; border:1px solid #333;" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Phone Number</label>
                        <input type="text" name="customer_phone" value="{{ old('mobile', $user->mobile ?? '') }}" class="form-control text-white" style="background:#111; border:1px solid #333;" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Delivery Address</label>
                        <textarea name="shipping_address" class="form-control text-white" rows="3" style="background:#111; border:1px solid #333;" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Notes</label>
                        <textarea name="note" class="form-control text-white" rows="3" style="background:#111; border:1px solid #333;"></textarea>
                    </div>
                </div>
            </div>
            <!-- ======================= RIGHT: ORDER SUMMARY ======================= -->
            <div class="col-lg-5">
                <!-- ===== TOP LIST: ITEMS WITH IMAGES & TOTALS ===== -->
                <div class="p-4 rounded mb-4" style="background-color: #222; border: 1px solid #333;">
                    <ul class="list-group list-group-flush">
                        @foreach($userCart?->cartItems as $cartItem)
                        <!-- Single Item Start -->
                        <li class="list-group-item d-flex justify-content-between align-items-center"
                            style="background-color: transparent; border-color: #333;">
                            <div class="d-flex gap-4">
                                <img src="{{ asset('http://127.0.0.1:8001/uploads/' . $cartItem->product->productImages->first()->image_path) }}" style="width:55px; height:55px; object-fit:cover;">
                                <div class="d-flex flex-column">
                                    <p class="mb-1">{{ $cartItem->product->name }}</p>
                                    <small class="text-secondary">Qty: {{ $cartItem->quantity }}</small>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-3">
                                <p class="mb-0 fw-medium">Tk. {{ $cartItem->product->price * $cartItem->quantity  }}</p>
                            </div>
                        </li>
                        @endforeach
                        <!-- Single Item End -->
                    </ul>
                </div>
                <!-- ===== BOTTOM LIST: TOTALS + PAYMENT METHODS ===== -->
                <div class="p-4 rounded" style="background-color: #222; border: 1px solid #333;">
                    <h5 class="fw-semibold mb-3">Order Summary</h5>

                    <ul class="list-unstyled mb-3">
                        <li class="d-flex justify-content-between py-2 border-bottom">
                            <span>Subtotal:</span>
                            <span>Tk. {{ $subtotal }}</span>
                        </li>
                        <li class="d-flex justify-content-between py-2 border-bottom">
                            <span>VAT:</span>
                            <span>Tk. {{ $vatAmount }}</span>
                        </li>
                        <li class="d-flex justify-content-between py-3 fw-bold fs-5">
                            <span>Grand Total:</span>
                            <span>Tk. {{ $grandTotal }}</span>
                        </li>
                        <input type="hidden" name="sub_total" value="{{ $subtotal }}">
                        <input type="hidden" name="grand_total" value="{{ $grandTotal }}">
                    </ul>

                    <h6 class="fw-semibold mb-2">Payment Method</h6>

                    <div class="form-check mb-2">
                        <input class="form-check-input" type="radio" name="payment_type" value="cod" checked>
                        <label class="form-check-label" for="cod">
                            Cash On Delivery
                        </label>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div class="form-check mb-4">
                            <input class="form-check-input" type="radio" name="payment_type" value="bkash">
                            <label class="form-check-label" for="gateway">
                                BKash
                            </label>
                        </div>
                        <img src="./assets/images/BKash_logo.jpg" style="width:42px;height:28px;" />
                    </div>
                    <button type="submit" class="btn text-dark w-100 fw-bold py-2" style="background: #F39C12;">
                        Place Order
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection