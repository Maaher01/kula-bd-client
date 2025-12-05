<section class="order-details-section" style="padding: 10px; border-radius: 10px;">
    {{-- Order Info --}}
    <h5>Checkout Date: {{ $order->created_at->format('M d, Y') }}</h5>
    <div class="row">
        <div class="col-md-6">
            <h6>Payment Status: <span>{{ $order->payment_status }}</span></h6>

            @if($order->payment_type == 'cod')
            <h6>Payment Type: Cash On Delivery</h6>
            @else
            <h6>Payment Type: BKash</h6>
            @endif
        </div>
    </div>

    <h6>Order Status: <span>{{ $order->order_status }}</span></h6>
    <h6>Last Update: {{ $order->updated_at->format('M d, Y') }}</h6>

    <hr style="border-top:1px solid #ff8c00; opacity:.7; margin:20px 0;">

    {{-- Customer Info --}}
    <h5 style="color:#ff8c00;">Customer Information</h5>
    <div class="row mt-3">
        <div class="col-12"><strong>Name:</strong> {{ $order->customer_name }}</div>
        <div class="col-12"><strong>Phone No:</strong> {{ $order->customer_phone }}</div>
        <div class="col-12"><strong>Email:</strong> {{ $order->customer_email ?? 'N/A' }}</div>
        <div class="col-12"><strong>Delivery Address:</strong> {{ $order->shipping_address }}</div>
    </div>

    <hr style="border-top:1px solid #444; opacity:.7; margin:20px 0;">

    {{-- Order Items Table --}}
    <div class="table-responsive mb-4">
        <table class="table table-dark table-hover align-middle">
            <thead style="background-color:#111; color:#ff8c00; text-transform:uppercase; font-size:14px;">
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Sale Price</th>
                    <th>Quantity</th>
                </tr>
            </thead>

            <tbody style="color:#ddd;">
                @foreach($order->orderItems as $item)
                <tr>
                    <td>
                        <img src="{{ asset('http://127.0.0.1:8001/uploads/' . $item->product->productImages->first()->image_path) }}"
                            alt="Product Image"
                            style="width:60px; height:auto;">
                    </td>
                    <td>{{ $item->product->name }}</td>
                    <td>৳{{ number_format($item->product->price, 0) }}</td>
                    <td>{{ $item->quantity }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{-- Summary --}}
    <div style="border-top:1px solid #444; padding-top:20px;">
        <h5 style="color:#ff8c00;">Order Summary</h5>
        <div class="row mt-3">
            <div class="col-12"><strong>Sub Total (৳):</strong> {{ number_format($order->sub_total, 0) }}</div>
            <div class="col-12"><strong>Grand Total (৳):</strong>
                <span style="color:#ff8c00;">{{ number_format($order->grand_total, 0) }}</span>
            </div>
        </div>
    </div>

</section>