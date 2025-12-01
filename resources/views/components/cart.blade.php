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
                    @foreach($userCart?->cartItems as $cartItem)
                    <tr style="background-color: #222; border-bottom: 2px solid #333;" class="align-middle">
                        <td>
                            <div class="d-flex justify-content-start align-items-center gap-3">
                                <form method="POST" action="{{ route('cart.remove', $cartItem->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">X</button>
                                </form>
                                <div class="d-flex gap-3 align-items-center">
                                    <img src="{{ asset('http://127.0.0.1:8001/uploads/' . $cartItem->product->productImages->first()->image_path) }}" style="width:55px; height:55px; object-fit:cover;" alt="Item Image">
                                    <p class="mb-0 fw-medium">{{ $cartItem->product->name }}</p>
                                </div>
                            </div>
                        </td>
                        <td class="fw-medium">Tk. {{ rtrim(rtrim(number_format($cartItem->unit_price, 2, '.', ''), '0'), '.') }}</td>
                        <td>
                            <input
                                type="number"
                                value="{{ $cartItem->quantity }}"
                                min="1"
                                class="form-control quantity-input"
                                data-id="{{ $cartItem->id }}"
                                style="width: 70px;">
                        </td>
                        <td class="fw-medium" id="item-total">Tk. {{ $cartItem->quantity * $cartItem->unit_price }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Bottom Actions -->
        <div class="d-flex flex-column flex-md-row justify-content-between mt-4 gap-3">
            <a href="/" class="btn btn-outline fw-semibold" style="height: 100%; background-color: #F39C12;">Go Back Home</a>

            <div class="p-4 rounded" style="background-color: #222; border: 1px solid #333; width: 100%; max-width: 400px;">
                <h5 class="fw-semibold mb-3">Order Summary</h5>
                @php
                $subtotal = $userCart?->cartItems->sum(function($item) {
                return $item->quantity * $item->unit_price;
                }) ?? 0;
                @endphp
                <ul class="list-unstyled mb-0">
                    <li class="d-flex justify-content-between py-3 border-bottom">
                        <span>Subtotal:</span>
                        <span id="summary-subtotal">Tk. {{ $subtotal }}</span>
                    </li>
                    <!-- <li class="d-flex justify-content-between py-3 border-bottom">
                        <span>Delivery Charge:</span>
                        <span>Tk. 30</span>
                    </li>
                    <li class="d-flex justify-content-between py-3 border-bottom">
                        <span>VAT:</span>
                        <span>Tk. 20</span>
                    </li> -->
                    <li class="d-flex justify-content-between py-3 fw-bold fs-5">
                        <span>Grand Total:</span>
                        <span id="summary-grandtotal">Tk. {{ $subtotal }}</span>
                    </li>
                </ul>
                <a href="{{ route('checkout.proceed') }}" class="btn text-dark w-100 mt-3 fw-bold" style="background: #F39C12;">Proceed To Checkout</a>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
    $('.quantity-input').on('change', function() {
        let cartItemId = $(this).data('id');
        let newQty = $(this).val();

        $.ajax({
            url: '/cart/update-quantity',
            method: 'POST',
            data: {
                cart_item_id: cartItemId,
                quantity: newQty,
                _token: '{{ csrf_token() }}'
            },
            success: function(res) {
                // Update single item total cell
                $(this).closest('tr').find('#item-total').text("Tk." + res.total);

                $('#summary-subtotal').text("Tk." + res.subtotal);

                let delivery = 0;
                let vat = 0;
                let grandTotal = parseFloat(res.subtotal) + delivery + vat;

                $('#summary-grandtotal').text("Tk. " + grandTotal)
            }.bind(this)
        });
    });
</script>
@endsection