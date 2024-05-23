<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Protype;
use App\Models\Product;
use App\Models\User;
use App\Models\CartItem;

class CartController extends Controller
{
    public function add(Request $request)
    {
        $validatedData = $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
        ]);

        $user = auth()->user();
        $cartItem = $user->cartItems()->where('product_id', $validatedData['product_id'])->first();

        if ($cartItem) {
            $cartItem->quantity += $validatedData['quantity'];
            $cartItem->save();
        } else {
            $cartItem = new CartItem([
                'product_id' => $validatedData['product_id'],
                'quantity' => $validatedData['quantity'],
            ]);
            $user->cartItems()->save($cartItem);
        }

        return redirect()->back()->with('success', 'Product added to cart successfully!');

        session()->put('cartItems', $cartItems);

    }

    public function showCart()
    {
        $cartItems = auth()->user()->cartItems;
        $totalPrice = $cartItems->sum(function($item) {
            return $item->product->price * $item->quantity;
        });
        return view('cart.show', compact('cartItems', 'totalPrice'));
    }
    public function delete(Request $request) {
        $data = $request->get('id');
        $user = auth()->user()->id;
        $delete = CartItem::where('user_id', $user)
                            ->where('product_id',$data)
                            ->delete();
        return redirect()->back();
    }
}