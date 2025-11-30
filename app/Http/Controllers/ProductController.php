<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $product = Product::with('productImages')->findOrFail($id);

        return view('components.itemdetails', compact('product'));
    }
}
