<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function showCategoryProducts()
    {
        $categories = Category::with('products')->get();

        return view('components.ourmenu', compact('categories'));
    }
}
