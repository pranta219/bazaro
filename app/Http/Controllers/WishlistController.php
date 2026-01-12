<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    public function index()
    {
        $wishlistItems = Wishlist::where('user_id', Auth::id())->with('product')->get();
        return view('wishlist.index', compact('wishlistItems'));
    }

    public function toggle(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
        ]);

        $user = Auth::user();
        $wishlist = Wishlist::where('user_id', $user->id)
            ->where('product_id', $request->product_id)
            ->first();

        if ($wishlist) {
            $wishlist->delete();
            $status = 'removed';
            $message = 'Product removed from wishlist';
        } else {
            Wishlist::create([
                'user_id' => $user->id,
                'product_id' => $request->product_id,
            ]);
            $status = 'added';
            $message = 'Product added to wishlist';
        }

        // Return JSON response for AJAX
        if ($request->wantsJson()) {
            return response()->json([
                'status' => $status,
                'message' => $message,
                'count' => Wishlist::where('user_id', $user->id)->count()
            ]);
        }

        return back()->with('success', $message);
    }
}
