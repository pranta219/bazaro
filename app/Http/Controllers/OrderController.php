<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display checkout page
     */
    public function checkout()
    {
        $cart = session()->get('cart', []);

        if (empty($cart)) {
            return redirect()->route('cart.index')
                ->with('error', 'Your cart is empty');
        }

        $cartSubtotal = $this->calculateCartTotal($cart);
        $shippingFee = 10.00;
        $cartTotal = $cartSubtotal + $shippingFee;

        return view('orders.checkout', compact('cart', 'cartSubtotal', 'cartTotal', 'shippingFee'));
    }

    /**
     * Store a new order
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'shipping_address' => 'required|string',
            'billing_address' => 'nullable|string',
            'notes' => 'nullable|string',
        ]);

        $cart = session()->get('cart', []);

        if (empty($cart)) {
            return redirect()->route('cart.index')
                ->with('error', 'Your cart is empty');
        }

        $subtotal = $this->calculateCartTotal($cart);
        $shippingFee = 10.00;
        $total = $subtotal + $shippingFee;

        // Create order
        $order = Order::create([
            'user_id' => auth()->id(),
            'email' => $validated['email'],
            'total_amount' => $total,
            'status' => 'pending',
            'shipping_address' => $validated['shipping_address'],
            'billing_address' => $validated['billing_address'] ?? $validated['shipping_address'],
            'notes' => $validated['notes'],
        ]);

        // Create order items
        foreach ($cart as $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $item['product_id'],
                'quantity' => $item['quantity'],
                'price' => $item['price'],
                'size' => $item['size'],
                'color' => $item['color'],
            ]);
        }

        // Clear cart after successful order
        session()->forget('cart');

        return redirect()->route('order.success', $order->id)
            ->with('success', 'Order placed successfully!');
    }

    /**
     * Display order success page
     */
    public function success($orderId)
    {
        $order = Order::with('items.product')->findOrFail($orderId);

        // Ensure user can only view their own orders
        if (auth()->check() && $order->user_id !== auth()->id()) {
            abort(403);
        }

        return view('orders.success', compact('order'));
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
