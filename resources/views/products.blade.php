@extends('base')

@section('title', 'Products')

@section('content')
    <section id="products" class="products">
        <h2>Our Products</h2>
        <div class="products-container">
            @foreach($products as $product)
                <div class="product-item">
                    <h3>{{ $product['name'] }}</h3>
                    <p>{{ $product['description'] }}</p>
                    <p>Price: ${{ $product['price'] }}</p>
                </div>
            @endforeach
        </div>
    </section>
@endsection