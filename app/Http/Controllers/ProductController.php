<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function add_products()
    {
        // Pass the products data to the view
        return view('add-products');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Get the image file
        $image = $request->file('image');
        // Create unique filename
        $imageName = time() . '_' . $image->getClientOriginalName();
        // Move the file to public/images
        $image->move(public_path('images'), $imageName);

        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'image_path' => 'images/' . $imageName,  // This will create a path like 'images/filename.jpg'
        ]);


        return redirect()->route('products.shop');
    }

    public function shop()
    {
        $products = Product::all();
        return view('shop', compact('products'));
    }

    public function order($id)
    {
        $product = Product::find($id);
        return view('order', compact('product'));
    }
}