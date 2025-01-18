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
                    <img src="{{ asset(is_array($product) ? $product['image_path'] : $product->image_path) }}" alt="{{ is_array($product) ? $product['name'] : $product->name }}">
                    <h3>{{ is_array($product) ? $product['name'] : $product->name }}</h3>
                    <p>{{ is_array($product) ? $product['description'] : $product->description }}</p>
                    <div class="price-order">
                        <p>Price: ${{ is_array($product) ? $product['price'] : $product->price }}</p>
                        @if(!isset($product['is_dummy']))
                            <a href="{{ route('products.order', ['id' => $product['id']]) }}" class="order-btn">Order Now</a>
                        @else
                            <a href="{{ route('products.dummy_order') }}" class="order-btn">Order Now</a>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection