<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CompareController extends Controller
{
    /**
     * Display the compare page
     */
    public function index()
    {
        $compareIds = session()->get('compare', []);
        $products = Product::whereIn('id', $compareIds)->get();

        return view('products.compare', compact('products'));
    }

    /**
     * Add product to compare list
     */
    public function add(Request $request)
    {
        $validated = $request->validate([
            'product_id' => 'required|exists:products,id'
        ]);

        $compare = session()->get('compare', []);

        // Limit to 3 products
        if (count($compare) >= 3) {
            return response()->json([
                'success' => false,
                'message' => 'Maximum 3 products can be compared'
            ], 400);
        }

        if (!in_array($validated['product_id'], $compare)) {
            $compare[] = $validated['product_id'];
            session()->put('compare', $compare);
        }

        return response()->json([
            'success' => true,
            'message' => 'Product added to compare',
            'compareCount' => count($compare)
        ]);
    }

    /**
     * Remove product from compare list
     */
    public function remove($productId)
    {
        $compare = session()->get('compare', []);
        $compare = array_values(array_diff($compare, [$productId]));
        session()->put('compare', $compare);

        return redirect()->back()->with('success', 'Product removed from compare');
    }

    /**
     * Clear all products from compare list
     */
    public function clear()
    {
        session()->forget('compare');

        return redirect()->back()->with('success', 'Compare list cleared');
    }
}
