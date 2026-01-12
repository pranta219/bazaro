<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display the home page with featured products
     */
    public function index()
    {
        // Get featured products for the homepage
        $featuredProducts = Product::where('is_featured', true)
            ->take(8)
            ->get();

        // Get new arrivals (latest products)
        $newArrivals = Product::latest()->take(8)->get();

        // Get deals products (random for now)
        $dealsProducts = Product::inRandomOrder()->take(8)->get();

        return view('home', compact('featuredProducts', 'newArrivals', 'dealsProducts'));
    }
}
