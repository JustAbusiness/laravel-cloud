<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    public function index()
    {

        return view('cart.index');
    }

    public function add_to_cart($id)
    {
        $products = Product::findOrFail($id);
        $cartItems = session()->get('cartItems', []);

        if (isset($cartItems[$id])) {
            $cartItems[$id]['quantity']++;
        } else {
            $cartItems[$id] = [
                "name" => $products->name,
                "image_path" => $products->image_path,
                "details" => $products->details,
                "price" => $products->price,
                "quantity" => 1,
                "brand" => $products->brand,

            ];
        }

        session()->put('cartItems', $cartItems);

        return redirect()->back()->with('message', 'Product added successfully');
    }

    public function deleteCart(Request $request)
    {
        if ($request->id) {
            $cartItems = session()->get('cartItems');
            if (isset($cartItems[$request->id])) {
                unset($cartItems[$request->id]);
                session()->put('cartItems', $cartItems);        // Khi xoa 1 sp ko muon những cái khac anh huong
            }
        }

        return redirect()->back()->with('success', 'Delete product successfully');
    }
}