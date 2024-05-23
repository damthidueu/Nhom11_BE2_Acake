<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Protype;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    // Get new products
    public function getNewProducts()
    {
        $products = Product::orderBy('created_at', 'desc')->get();
        $productsale = Product::where('sales', '>', 50)->get();
        $newProduct = Product::orderBy('created_at', 'desc')->take(4)->get();
        $newProduct2 = Product::orderBy('created_at', 'desc')->skip(4)->take(4)->get();
        $productbest = Product::where('sales', '>', 80)->take(4)->get();
        return view('index', compact('products', 'productsale', 'newProduct', 'newProduct2', 'productbest'));
    }

    // Search products
    public function search(Request $request)
    {
        $perPage = 3;
        $keyword = $request->get('keyword');
        $products = Product::where('pro_name', 'like', '%' . $keyword . '%')
            ->orWhere('description', 'like', '%' . $keyword . '%')
            ->paginate($perPage);
        return view('search', compact('products', 'keyword'));
    }

    // Show products by type
    public function showProductsByType($type_id)
    {
        $perPage = 3;
        $products = Product::where('type_id', $type_id)->paginate($perPage);
        $type_name = Protype::where('type_id', $type_id)->value('type_id');
        return view('typeproduct', compact('products', 'type_id'));
    }

    // Admin - Index products
    public function indexsp()
    {
        $product = Product::all();
        return view('admin.product.indexsp', ['indexsp' => $product]);
    }

    // Admin - Add product form
    public function addsp1()
    {
        $types = Protype::all(); // Fetch all product types from the database
        return view('admin.product.addsp', compact('types'));
    }

    // Admin - Delete product
    public function delete($id)
    {
        $product = Product::find($id);
        $product->delete();
        $product = Product::all();
        return view('admin.product.indexsp', ['indexsp' => $product]);
    }

    // Admin - Edit product form
    public function editsp($id)
    {
        $product = Product::find($id);
        return view('admin.product.editsp', compact('product'));
    }

    // Admin - Update product
    public function editsp1($id, Request $request)
{
    $product = Product::find($id);
    $product->pro_name = $request->input('pro_name');
    $product->type_id = $request->input('type_id');
    $product->price = $request->input('price');

    // Xử lý upload hình ảnh
    if ($request->hasFile('image')) {
        // Xóa hình ảnh cũ nếu có
        if ($product->image && file_exists(public_path('images/' . $product->image))) {
            unlink(public_path('images/' . $product->image));
        }

        // Upload hình ảnh mới
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $imageName);
        $product->image = $imageName;
    }

    $product->description = $request->input('description');
    $product->sales = $request->input('sales');
    $product->update();
    $product = Product::all();
    return view('admin.product.indexsp', ['indexsp' => $product]);
}

    public function addsp2(Request $request)
    {
        // Xác thực dữ liệu đầu vào
        $request->validate([
            'name' => 'required|string|max:255',
            'type_id' => 'required',
            'price' => 'required|numeric',
            'image' => 'required|image',
            'description' => 'required|string',
            'sales' => 'required|integer',
        ]);
    
        // Xử lý upload tệp hình ảnh
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $imagePath = 'images/' . $imageName;
            // Save the image name in the database
        //$imagePath = $imageName;
        } else {
            return back()->withErrors('Image upload failed.');
        }
    
    
            DB::table('products')->insert([
                'pro_name' => $request->name,
                'type_id' => $request->type_id,
                'price' => $request->price,
                'image' => $imagePath,
                'description' => $request->description,
                'sales' => $request->sales,
                
            ]);
        
            // Lấy danh sách sản phẩm sau khi đã thêm và trả về view indexsp
            $products = DB::table('products')->get();
            return view('admin.product.indexsp', ['indexsp' => $products]);
        
    }
    
}
