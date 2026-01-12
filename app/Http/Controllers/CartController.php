<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display the cart page
     */
    public function index()
    {
        $cart = session()->get('cart', []);
        $cartSubtotal = $this->calculateCartTotal($cart);
        $shippingFee = empty($cart) ? 0 : 10.00; // Flat rate shipping
        $cartTotal = $cartSubtotal + $shippingFee;

        return view('cart.index', compact('cart', 'cartSubtotal', 'cartTotal', 'shippingFee'));
    }

    /**
     * Add product to cart
     */
    public function add(Request $request)
    {
        $validated = $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
            'size' => 'nullable|string',
            'color' => 'nullable|string',
        ]);

        $product = Product::findOrFail($validated['product_id']);
        $cart = session()->get('cart', []);

        // Create unique cart key based on product, size, and color
        $cartKey = $validated['product_id'] . '-' . ($validated['size'] ?? 'default') . '-' . ($validated['color'] ?? 'default');

        if (isset($cart[$cartKey])) {
            $cart[$cartKey]['quantity'] += $validated['quantity'];
        } else {
            $cart[$cartKey] = [
                'product_id' => $product->id,
                'name' => $product->name,
                'slug' => $product->slug,
                'price' => $product->sale_price ?? $product->price,
                'quantity' => $validated['quantity'],
                'size' => $validated['size'] ?? null,
                'color' => $validated['color'] ?? null,
                'image' => $product->image
            ];
        }

        session()->put('cart', $cart);

        return response()->json([
            'success' => true,
            'message' => 'Product added to cart',
            'cartCount' => count($cart),
            'cartHtml' => view('components.cart-mini')->render()
        ]);
    }

    /**
     * Update cart item quantity
     */
    public function update(Request $request, $cartKey)
    {
        $validated = $request->validate([
            'quantity' => 'required|integer|min:1'
        ]);

        $cart = session()->get('cart', []);

        if (isset($cart[$cartKey])) {
            $cart[$cartKey]['quantity'] = $validated['quantity'];
            session()->put('cart', $cart);

            return response()->json([
                'success' => true,
                'message' => 'Cart updated'
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => 'Item not found in cart'
        ], 404);
    }

    /**
     * Remove item from cart
     */
    public function remove($cartKey)
    {
        $cart = session()->get('cart', []);
        unset($cart[$cartKey]);
        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Item removed from cart');
    }

    /**
     * Clear entire cart
     */
    public function clear()
    {
        session()->forget('cart');

        return redirect()->back()->with('success', 'Cart cleared');
    }

    /**
     * Calculate cart total
     */
    private function calculateCartTotal($cart)
    {
        $total = 0;
        foreach ($cart as $item) {
            $total += $item['price'] * $item['quantity'];
        }
        return $total;
    }
}
