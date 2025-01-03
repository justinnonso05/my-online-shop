<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function add_products()
    {
        // Pass the products data to the view
        return view('add-products');
    }

    public function shop()
    {
        // Sample data for products
        $products = [
            ['id' => 1, 'name' => 'Product 1', 'description' => 'Description for product 1', 'price' => 100],
            ['id' => 2, 'name' => 'Product 2', 'description' => 'Description for product 2', 'price' => 200],
            ['id' => 3, 'name' => 'Product 3', 'description' => 'Description for product 3', 'price' => 300],
        ];

        // Pass the products data to the view
        return view('shop', compact('products'));
    }
}