<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of products
     */
    public function index()
    {
        $products = Product::paginate(12);

        return view('products.index', compact('products'));
    }

    /**
     * Display the specified product
     */
    public function show($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();

        // Get related products from the same category
        $relatedProducts = Product::where('category', $product->category)
            ->where('id', '!=', $product->id)
            ->take(4)
            ->get();

        return view('products.show', compact('product', 'relatedProducts'));
    }
}
