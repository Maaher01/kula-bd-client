<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use App\Models\CartItem;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function getUserCart()
    {
        $userCart = Cart::with('cartItems.product.productImages')
            ->where('user_id', auth()->id())
            ->first();

        $cartCount = $userCart ? $userCart->cartItems->count() : 0;

        return view('components.cart', compact('userCart', 'cartCount'));
    }

    public function addToCart(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'nullable|integer|min:1'
        ]);

        $userId = auth()->id();

        $quantity = $request->quantity ?? 1;

        $cart = Cart::firstOrCreate(['user_id' => $userId]);

        $cartItem = $cart->cartItems()->where('product_id', $request->product_id)->first();

        if ($cartItem) {
            $cartItem->quantity += $quantity;
            $cartItem->save();
        } else {
            $cart->cartItems()->create([
                'product_id' => $request->product_id,
                'quantity' => $quantity,
                'unit_price' => Product::find($request->product_id)->price,
            ]);
        }

        $cartCount = $cart->cartItems()->count();

        return response()->json([
            'success' => true,
            'message' => 'Item Added To Cart Successfully!',
            'cartCount' => $cartCount
        ]);
    }

    public function updateProductQuantity(Request $request)
    {
        $request->validate([
            'cart_item_id' => 'required|exists:cart_items,id',
            'quantity' => 'required|integer|min:1'
        ]);

        $item = CartItem::find($request->cart_item_id);
        $item->quantity = $request->quantity;
        $item->save();

        return response()->json([
            'success' => true,
            'message' => 'Quantity Updated',
            'total' => $item->quantity * $item->unit_price
        ]);
    }

    public function removeProductFromCart($id)
    {
        $cartItem = CartItem::findOrFail($id);
        $cartItem->delete();

        return redirect()->back()->with('success', 'Item removed from cart succesfully!');
    }
}
