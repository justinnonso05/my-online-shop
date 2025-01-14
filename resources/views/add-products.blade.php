@extends('base')

@section('title', 'Products')

@section('content')
    <section id="add-product" class="add-product">
        <h2>Add New Product</h2>
        <div class="form-container">
            <form action="{{ route ('products.store') }}" method="POST" enctype="multipart/form-data" class="product-form">
                @csrf
                <div class="form-group">
                    <label for="name">Product Name</label>
                    <input type="text" id="name" name="name" required>
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea id="description" name="description" required></textarea>
                </div>

                <div class="form-group">
                    <label for="price">Price ($)</label>
                    <input type="number" id="price" name="price" step="0.01" required>
                </div>

                <div class="form-group">
                    <label for="image">Product Image</label>
                    <div class="image-upload">
                        <input type="file" id="image" name="image" accept="image/*" required>
                    </div>
                </div>

                <button type="submit" class="submit-btn">Add Product</button>
            </form>
        </div>
    </section>
@endsection