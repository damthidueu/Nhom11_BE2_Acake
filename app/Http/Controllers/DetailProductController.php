<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Protype;
use App\Models\Product;
use App\Models\Rating;
class DetailProductController extends Controller
{
    //theo thoi gian moi nhat
    public function detailProduct($id)
    {
        $product = Product::find($id);
        $relatedProducts = Product::where('type_id', $product->type_id)
        ->where('id', '<>', $id)->take(4)
        ->get();
        $product = Product::findOrFail($id);
        $ratings = Rating::where('product_id', $id)->get();
        return view('productdetail', compact('product','relatedProducts','ratings'));
        
    }

 


}
