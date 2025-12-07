<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\Companyprofile;

class OrderController extends Controller
{
    public function proceedToCheckout()
    {
        $userCart = Cart::with('cartItems.product.productImages')->where('user_id', auth()->id())->first();
        $user = auth()->user();

        $cartCount = $userCart?->cartItems->count() ?? 0;

        if ($cartCount == 0) {
            return redirect('/cart')
                ->with('error', 'You cannot checkout with an empty cart.');
        }

        $subtotal = $userCart?->cartItems->sum(fn($item) => $item->quantity * $item->unit_price) ?? 0;

        $vat = CompanyProfile::first()->vat_percentage;
        $vatAmount = ($vat / 100) * $subtotal;

        $grandTotal = $vatAmount +  $subtotal;

        return view('components.checkout', compact('userCart', 'user', 'subtotal', 'vatAmount', 'grandTotal'));
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

        return redirect()->route('order.confirmation', ['order' => $order->id]);
    }

    public function getUserOrders()
    {
        $user = auth()->user();

        $orders = Order::where('user_id', $user->id)->latest()->get();

        return view('components.account.index', compact('orders'));
    }

    public function getOrderDetails($id)
    {
        $order = Order::with('orderItems.product.productImages')->findOrFail($id);

        $vatPercentage = CompanyProfile::first()->vat_percentage;
        $vatAmount = ($vatPercentage / 100) * $order->sub_total;

        return view('components.account.sections.order-details', compact('order', 'vatAmount'));
    }

    public function showConfirmation(Order $order)
    {
        return view('components.order-confirmation', compact('order'));
    }
}
