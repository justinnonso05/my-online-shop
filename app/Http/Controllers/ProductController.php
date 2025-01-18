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

        // dummy template data
        $dummyProducts = [
            [
                'id' => 1,
                'name' => 'MacBook Pro',
                'description' => 'The latest MacBook Pro with M1 chip, 16GB RAM, and 512GB SSD.',
                'price' => 10.99,
                'image_path' => 'images/lappy1.jpg',
                'is_dummy' => true
            ],
            [
                'id' => 2,
                'name' => 'HP Elitebook',
                'description' => 'The HP Elitebook with Intel i7 processor, 16GB RAM, and 1TB SSD.',
                'price' => 15.99,
                'image_path' => 'images/lappy2.jpg',
                'is_dummy' => true
            ],
            [
                'id' => 3,
                'name' => 'Lenovo laptop',
                'description' => 'The Lenovo laptop with AMD Ryzen 5 processor, 8GB RAM, and 256GB SSD.',               
                'price' => 20.99,
                'image_path' => 'images/lappy3.jpg',
                'is_dummy' => true
            ],
            [
                'id' => 4,
                'name' => 'Apple Mouse',
                'description' => 'Apple Mouse with wireless connectivity and multi-touch surface.',
                'price' => 25.99,
                'image_path' => 'images/mouse.jpg',
                'is_dummy' => true
            ],
        ];

        $products = array_merge($dummyProducts, $products->toArray());

        return view('shop', ['products' => $products]);
    }

    public function order($id)
    {
        $product = Product::find($id);
        return view('order', compact('product'));
    }

    public function dummy_order()
    {
        return view('dummy_order');
    }
}