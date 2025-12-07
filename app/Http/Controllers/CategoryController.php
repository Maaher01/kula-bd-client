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
        $categories = Category::with(['products', 'categoryImages'])->get();

        return view('components.ourmenu', compact('categories'));
    }
}
