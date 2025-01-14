@extends('base')

@section('title', 'Products')

@section('content')
    <section id="products" class="products">
        <div class="products-head">
            <h1>Our Products</h1>
            <p><a class="add-product-link" href="{{ route('products.add') }}">Add Products</a></p>   
        </div>
        <div class="products-container">
            @foreach($products as $product)
                <div class="product-item">
                    <img src="{{ asset($product->image_path) }}" alt="{{ $product->name }}">
                    <h3>{{ $product->name }}</h3>
                    <p>{{ $product->description }}</p>
                    <div class="price-order">
                        <p>Price: ${{ $product->price }}</p>
                        <a href="{{ route('products.order', $product->id) }}" class="order-btn">Order Now</a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection