@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center my-5">
    <div class="p-4 rounded shadow" style="width: 95%; max-width: 1300px; color: #fff;">

        <div class="row g-4">
            <!-- ======================= LEFT: BILLING DETAILS FORM ======================= -->
            <div class="col-lg-7">
                <div class="p-4 rounded" style="background-color: #222; border: 1px solid #333;">
                    <h4 class="fw-semibold mb-4">Billing Details</h4>

                    <form>
                        <div class="mb-3">
                            <label class="form-label">Full Name</label>
                            <input type="text" class="form-control text-white" style="background:#111; border:1px solid #333;">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Shipping Address</label>
                            <textarea class="form-control text-white" rows="3" style="background:#111; border:1px solid #333;"></textarea>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Phone Number</label>
                            <input type="text" class="form-control text-white" style="background:#111; border:1px solid #333;">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email Address (optional)</label>
                            <input type="email" class="form-control text-white" style="background:#111; border:1px solid #333;">
                        </div>
                    </form>
                </div>
            </div>

            <!-- ======================= RIGHT: ORDER SUMMARY ======================= -->
            <div class="col-lg-5">
                <!-- ===== TOP LIST: ITEMS WITH IMAGES & TOTALS ===== -->
                <div class="p-4 rounded mb-4" style="background-color: #222; border: 1px solid #333;">
                    <ul class="list-group list-group-flush">
                        <!-- Item 1 -->
                        <li class="list-group-item d-flex justify-content-between align-items-center"
                            style="background-color: transparent; border-color: #333;">
                            <div class="d-flex gap-4">
                                <img src="./assets/images/190130-chicken-shwarma-horizontal-1549421250.avif" style="width:55px; height:55px; object-fit:cover;">
                                <div class="d-flex flex-column">
                                    <p class="mb-1">Chicken Shawarma</p>
                                    <small class="text-secondary">Qty: 2</small>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-3">
                                <p class="mb-0 fw-medium">Tk. 520</p>
                            </div>
                        </li>

                        <!-- Item 2 -->
                        <li class="list-group-item d-flex justify-content-between align-items-center"
                            style="background-color: transparent; border-color: #333;">
                            <div class="d-flex gap-4">
                                <img src="./assets/images/items/2025-10-20 12 58 04.png" style="width:55px; height:55px; object-fit:cover;">
                                <div class="d-flex flex-column">
                                    <p class="mb-1">Spring Roll</p>
                                    <small class="text-secondary">Qty: 1</small>
                                </div>
                            </div>
                            <div class="d-flex align-items-center gap-3">
                                <p class="mb-0 fw-medium">Tk. 180</p>
                            </div>
                        </li>

                    </ul>
                </div>

                <!-- ===== BOTTOM LIST: TOTALS + PAYMENT METHODS ===== -->
                <div class="p-4 rounded" style="background-color: #222; border: 1px solid #333;">
                    <h5 class="fw-semibold mb-3">Order Summary</h5>

                    <ul class="list-unstyled mb-3">
                        <li class="d-flex justify-content-between py-2 border-bottom">
                            <span>Subtotal:</span>
                            <span>Tk. 700</span>
                        </li>

                        <li class="d-flex justify-content-between py-2 border-bottom">
                            <span>Delivery Charge:</span>
                            <span>Tk. 30</span>
                        </li>
                        <li class="d-flex justify-content-between py-2 border-bottom">
                            <span>VAT:</span>
                            <span>Tk. 20</span>
                        </li>

                        <li class="d-flex justify-content-between py-3 fw-bold fs-5">
                            <span>Grand Total:</span>
                            <span>Tk. 750</span>
                        </li>
                    </ul>

                    <h6 class="fw-semibold mb-2">Payment Method</h6>

                    <div class="form-check mb-2">
                        <input class="form-check-input" type="radio" name="payment_method" id="cod" checked>
                        <label class="form-check-label" for="cod">
                            Cash On Delivery
                        </label>
                    </div>

                    <div class="form-check mb-4">
                        <input class="form-check-input" type="radio" name="payment_method" id="gateway">
                        <label class="form-check-label" for="gateway">
                            Payment Gateway
                        </label>
                    </div>

                    <button class="btn text-dark w-100 fw-bold py-2" style="background: #F39C12;">
                        Place Order
                    </button>
                </div>

            </div>
        </div>

    </div>
</div>
@endsection