@extends('base')

@section('title', 'Order Product')

@section('content')
    <style>
        main {
            background: var(--primary-light);
        }
        .order-products {
            padding: 2rem;
            color: var(--text-primary);
            width: 100%;
            margin: 0 auto;
            /* margin-top: 70px; */
        }
        
        .order-products h2 {
            text-align: center;
            color: var(--accent);
            margin-bottom: 3rem;
            font-size: 2.5rem;
            margin-top: 80px;
        }
        
        .layout-container {
            display: grid;
            gap: 2rem;
            width: 100%;
            padding: 0 1rem;
        }

        .products-order-container,
        .order-form-container {
            background: var(--primary-dark);
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
        }
        .products-order-container {
            padding: 0px !important;
        }

        .product-item {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
            overflow: hidden;
        }

        .product-item img {
            width: 100%;
            height: auto;
            /* border-radius: 8px; */
            object-fit: cover;
        }

        .product-item h3 {
            color: var(--accent);
            font-size: 1.5rem;
            margin-left: 10px;
        }

        .product-item p {
            color: var(--text-secondary);
            line-height: 1.6;
            margin-left: 10px;
        }

        .product-item p:last-child {
            color: var(--accent);
            font-size: 1.25rem;
            font-weight: 600;
        }

        .order-form {
            display: grid;
            gap: 1.5rem;
            width: 100%;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }

        .form-group label {
            color: var(--text-secondary);
            font-size: 0.9rem;
        }

        .form-group input {
            padding: 0.75rem;
            border: 1px solid var(--text-secondary);
            border-radius: 4px;
            background: var(--primary-light);
            color: var(--text-primary);
            font-size: 1rem;
            transition: all 0.3s ease;
            width: 100%;
        }

        .form-group input:focus {
            outline: none;
            border-color: var(--accent);
            box-shadow: 0 0 0 2px rgba(5, 226, 255, 0.1);
        }

        .card-details {
            display: grid;
            gap: 1rem;
            grid-template-columns: 1fr;
            width: 100%;
        }

        .submit-btn {
            background: var(--accent);
            color: var(--primary-dark);
            padding: 1rem;
            border: none;
            border-radius: 4px;
            font-size: 1rem;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 1rem;
            width: 100%;
        }

        .submit-btn:hover {
            background: #04c2d9;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(5, 226, 255, 0.2);
        }

        .submit-btn:active {
            transform: translateY(0);
        }

        /* Responsive Breakpoints */
        @media (min-width: 968px) {
            .layout-container {
                grid-template-columns: repeat(2, 1fr);
                max-width: 1400px;
                margin: 0 auto;
            }

            .card-details {
                grid-template-columns: 2fr 1fr 1fr;
            }
        }

        @media (max-width: 967px) {
            .order-form-container,
            .order-form {
                width: 100%;
            }
            .order-products {
                padding: 2rem 0.5rem !important;
            }
            .layout-container {
                padding: 0 10px !important;
            }
            
            .products-order-container,
            .order-form-container {
                padding: 1.5rem;
            }
        }

        @media (max-width: 480px) {
            .order-products {
                padding: 1rem;
            }
            
            .layout-container {
                padding: 0 10px !important;
            }
            
            .products-order-container,
            .order-form-container {
                padding: 1rem;
            }

            .order-products h2 {
                font-size: 2rem;
                margin-bottom: 2rem;
            }
        }
    </style>

    <section id="order-products" class="order-products">
        <h2>Order Details</h2>
        <div class="layout-container">
            <div class="products-order-container">
                <div class="product-item">
                    <img src="{{ asset($product->image_path) }}" alt="{{ $product->name }}">
                    <h3>{{ $product->name }}</h3>
                    <p>{{ $product->description }}</p>
                    <p>Price: ${{ $product->price }}</p>
                </div>
            </div>
            
            <div class="order-form-container">
                <form action="#" method="POST" class="order-form">
                    @csrf
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" id="name" name="name" required>  
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" name="phone" required>
                    </div>
                    <div class="form-group">
                        <label for="quantity">Quantity</label>
                        <input type="number" id="quantity" name="quantity" min="1" required>
                    </div>
                    
                    <!-- Payment Information -->
                    <div class="form-group">
                        <label for="card_name">Name on Card</label>
                        <input type="text" id="card_name" name="card_name" required>
                    </div>
                    <div class="card-details">
                        <div class="form-group">
                            <label for="card_number">Card Number</label>
                            <input type="text" id="card_number" name="card_number" 
                                   pattern="[0-9]{16}" placeholder="1234 5678 9012 3456" required>
                        </div>
                        <div class="form-group">
                            <label for="expiry">Expiry</label>
                            <input type="text" id="expiry" name="expiry" 
                                   pattern="(0[1-9]|1[0-2])\/([0-9]{2})" placeholder="MM/YY" required>
                        </div>
                        <div class="form-group">
                            <label for="cvv">CVV</label>
                            <input type="text" id="cvv" name="cvv" 
                                   pattern="[0-9]{3,4}" placeholder="123" required>
                        </div>
                    </div>
                    
                    <button type="submit" class="submit-btn">Place Order</button>
                </form>
            </div>
        </div>
    </section>
@endsection