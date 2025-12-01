<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function proceedToCheckout()
    {
        $userCart = Cart::with('cartItems.product.productImages')->where('user_id', auth()->id())->first();
        $user = auth()->user();

        $subtotal = $userCart?->cartItems->sum(fn($item) => $item->quantity * $item->unit_price) ?? 0;
        $grandTotal = $subtotal;

        return view('components.checkout', compact('userCart', 'user', 'subtotal', 'grandTotal'));
    }

    public function placeOrder(Request $request)
    {
        $request->validate([
            'customer_name' => 'required|string|max:255',
            'shipping_address' => 'required|string|max:500',
            'customer_phone' => 'required|string|max:14',
            'payment_type' => 'required|in:cod,bkash',
            'sub_total' => 'required|numeric',
            'grand_total' => 'required|numeric',
        ]);

        $user = auth()->user();
        $cart = Cart::with('cartItems.product')->where('user_id', $user->id)->first();

        if (!$cart || $cart->cartItems->isEmpty()) {
            return redirect()->back()->with('error', 'Your cart is empty');
        }

        $order = Order::create([
            'user_id' => $user->id,
            'customer_name' => $request->customer_name,
            'shipping_address' => $request->shipping_address,
            'customer_phone' => $request->customer_phone,
            'sub_total' => $request->sub_total,
            'grand_total' => $request->grand_total,
            'payment_type' => $request->payment_type,
            'delivery_charge' => 0,
            'checkout_date' => now(),
            'note' => $request->note,
            'order_status' => 'pending',
            'payment_status' => 'unpaid'
        ]);

        foreach ($cart->cartItems as $item) {
            $order->orderItems()->create([
                'product_id' => $item->product_id,
                'quantity' => $item->quantity,
                'unit_price' => $item->unit_price
            ]);
        }

        $cart->cartItems()->delete();

        return redirect()->with('success', 'Your order has been placed successfully!');
    }
}
