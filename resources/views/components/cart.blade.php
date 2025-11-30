@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center my-5">
    <div class="p-4 rounded shadow" style="width: 90%; max-width: 1300px; color: #fff;">
        <!-- Cart Table -->
        <div class="table-responsive">
            <table class="table table-borderless align-middle">
                <thead style="border-bottom: 2px solid #333;">
                    <tr>
                        <th scope="col">Item</th>
                        <th scope="col">Unit Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="background-color: #222; border-bottom: 2px solid #333;" class="align-middle">
                        <td>
                            <div class="d-flex justify-content-start align-items-center gap-3">
                                <form method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-danger">X</button>
                                </form>
                                <div class="d-flex gap-3 align-items-center">
                                    <img src="./assets/images/190130-chicken-shwarma-horizontal-1549421250.avif" style="width:55px; height:55px; object-fit:cover;" alt="Item Image">
                                    <p class="mb-0 fw-medium">Chicken Shawarma</p>
                                </div>
                            </div>
                        </td>
                        <td class="fw-medium">Tk. 260</td>
                        <td>
                            <input type="number" value="2" min="1" class="form-control quantity-input" style="width: 70px;">
                        </td>
                        <td class="fw-medium">Tk. 520</td>
                    </tr>
                    <tr style="background-color: #222; border-radius: 8px;">
                        <td>
                            <div class="d-flex justify-content-start align-items-center gap-3">
                                <form method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-danger">X</button>
                                </form>
                                <div class="d-flex gap-3 align-items-center">
                                    <img src="./assets/images/items/2025-10-20 12 58 04.png" style="width:55px; height:55px; object-fit:cover;" alt="Item Image">
                                    <p class="mb-0 fw-medium">Spring Roll</p>
                                </div>
                        </td>
                        <td class="fw-medium">Tk. 180</td>
                        <td>
                            <input type="number" value="1" min="1" class="form-control quantity-input" style="width: 70px;">
                        </td>
                        <td class="fw-medium">Tk. 180</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Bottom Actions -->
        <div class="d-flex flex-column flex-md-row justify-content-between mt-4 gap-3">
            <a href="/" class="btn btn-outline fw-semibold" style="height: 100%; background-color: #F39C12;">Go Back Home</a>

            <div class="p-4 rounded" style="background-color: #222; border: 1px solid #333; width: 100%; max-width: 400px;">
                <h5 class="fw-semibold mb-3">Order Summary</h5>
                <ul class="list-unstyled mb-0">
                    <li class="d-flex justify-content-between py-3 border-bottom">
                        <span>Subtotal:</span>
                        <span>Tk. 700</span>
                    </li>
                    <li class="d-flex justify-content-between py-3 border-bottom">
                        <span>Delivery Charge:</span>
                        <span>Tk. 30</span>
                    </li>
                    <li class="d-flex justify-content-between py-3 border-bottom">
                        <span>VAT:</span>
                        <span>Tk. 20</span>
                    </li>
                    <li class="d-flex justify-content-between py-3 fw-bold fs-5">
                        <span>Grand Total:</span>
                        <span>Tk. 750</span>
                    </li>
                </ul>
                <a href="/checkout" class="btn text-dark w-100 mt-3 fw-bold" style="background: #F39C12;">Proceed To Checkout</a>
            </div>
        </div>

    </div>
</div>
@endsection