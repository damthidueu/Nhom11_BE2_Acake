<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Protype;
use App\Models\Rating;

class RatingController extends Controller
{
    public function store(Request $request, $product_id)
    {
        $request->validate([
            'rating' => 'required|integer|min:1|max:5',
             'comment' => 'nullable|string|max:255',
        ]);

        $user = $request->user();
        $rating = Rating::updateOrCreate(
            ['product_id' => $product_id, 'user_id' => $user->id],
            ['rating' => $request->input('rating'),'comment' => $request->input('comment')],
        );
        //route cua cai chi tiet : products.show
        $product = Product::findOrFail($product_id);
        $ratings = Rating::where('product_id', $product_id)->get();
        return redirect()->route('products.show', $product_id)->with('success', 'Cảm ơn bạn đã đánh giá sản phẩm!');
        return view('product.show', compact('product', 'ratings'));
      
    }


  
 



  
}