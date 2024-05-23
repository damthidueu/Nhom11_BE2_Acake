<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function create()
    {
        return view('invoice.create');
    }

    public function store(Request $request)
    {
        // Tạo mới hóa đơn
        $hoadon = new HoaDon();
        $hoadon->customer_name = $request->customer_name;
        $hoadon->address = $request->address;
        $hoadon->phone = $request->phone;
        $hoadon->email = $request->email;
        $hoadon->save();

        // Tạo mới chi tiết hóa đơn
        $cartItems = Cart::with('product')->get();
        foreach ($cartItems as $item) {
            $chiTietHoaDon = new ChiTietHoaDon();
            $chiTietHoaDon->hoadon_id = $hoadon->id;
            $chiTietHoaDon->product_id = $item->product->id;
            $chiTietHoaDon->quantity = $item->quantity;
            $chiTietHoaDon->price = $item->product->price;
            $chiTietHoaDon->save();
        }

        // Xóa giỏ hàng
        Cart::truncate();

        // Chuyển hướng đến trang hóa đơn
        return redirect()->route('hoadon.show', ['id' => $hoadon->id]);
    }

    public function show($id)
{
    $hoadon = HoaDon::findOrFail($id);
    return view('hoadon.show', compact('hoadon'));
}
}