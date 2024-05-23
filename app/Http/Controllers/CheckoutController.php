<?php

namespace App\Http\Controllers;
use App\Models\CartItem;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        $cartItems = CartItem::all();
        $total = 0;

        foreach ($cartItems as $item) {
            $total += $item->product->price * $item->quantity;
        }

        return view('cart.checkout', compact('cartItems', 'total'));
    }
}
