<div class="order-list-section">
    {{-- Header --}}
    <div class="d-flex justify-content-between align-items-center pb-2 mb-3 border-bottom"
        style="border-color: #444;">
        <h1 class="text-uppercase m-0" style="font-size: 18px; color: #f39c12;">
            Past Orders
        </h1>
    </div>
    {{-- Table --}}
    <div class="table-responsive mt-3">
        <table class="table table-dark table-hover align-middle" style="background-color: #222;">
            <thead style="background-color: #111; text-transform: uppercase; font-size: 14px;">
                <tr>
                    <th></th>
                    <th>Phone No</th>
                    <th>Created Date</th>
                    <th>Payment Type</th>
                    <th>Payment Status</th>
                    <th>Order Status</th>
                    <th>Grand Total</th>
                    <th>Order No</th>
                </tr>
            </thead>
            <tbody style="color: #ddd;">
                @forelse ($orders as $order)
                <tr>
                    <td>
                        <a href="javascript:void(0)"
                            class="btn btn-sm order-details-btn"
                            data-id="{{ $order->id }}"
                            style="background-color: #ff8c00; color: #111; font-weight: 700;">
                            <i class="fa fa-eye"></i>
                        </a>
                    </td>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->customer_phone }}</td>
                    <td>{{ $order->created_at->format('M d, Y') }}</td>
                    <td>
                        {{-- Payment Type --}}
                        @if($order->payment_type == 'cod')
                        <span>Cash On Delivery</span>
                        @else
                        <span>Bkash</span>
                        @endif
                    </td>
                    {{-- Payment Status --}}
                    <td>
                        @if($order->payment_status == 'paid')
                        <span class="badge" style="background: #28a745;">Paid</span>
                        @elseif($order->payment_status == 'unpaid')
                        <span class="badge" style="background: #c0392b;">Unpaid</span>
                        @else
                        <span class="badge" style="background: #ff8c00;">Returned</span>
                        @endif
                    </td>
                    {{-- Order Status --}}
                    <td>
                        @if($order->order_status == 'cancelled')
                        <span class="badge" style="background: #c0392b;">Cancelled</span>
                        @elseif($order->order_status == 'delivered')
                        <span class="badge" style="background: #28a745;">Delivered</span>
                        @elseif($order->order_status == 'pending')
                        <span class="badge" style="background: #ff8c00;">Pending</span>
                        @else
                        <span class="badge" style="background: #ff8c00;">Processing</span>
                        @endif
                    </td>
                    <td>Tk. {{ number_format($order->grand_total, 0) }}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="9" class="text-center py-4" style="color: #999;">
                        No orders found.
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
<!-- Order Details Modal -->
<div class="modal fade" id="orderDetailsModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content" style="background:#222; color:white;">
            <div class="modal-header border-0">
                <h4 class="modal-title" style="color:#ff8c00;font-weight:700;">Order Details</h4>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body" id="order-details-body"></div>
        </div>
    </div>
</div>