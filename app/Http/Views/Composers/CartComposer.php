<?php

namespace App\Http\Views\Composers;

use Illuminate\View\View;
use App\Models\Cart;

class CartComposer
{
    public function compose(View $view)
    {
        $cartCount = 0;

        if (auth()->check()) {
            $cart = Cart::where('user_id', auth()->id())->first();
            $cartCount = $cart ? $cart->cartItems()->count() : 0;
        }

        $view->with('cartCount', $cartCount);
    }
}
