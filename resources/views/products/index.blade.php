@extends('layouts.app')

@section('title', 'Danh Sách Sản Phẩm')

@section('content')
<div class="container">
    <h1 class="mb-4 text-center">Danh Sách Sản Phẩm</h1>
    <div class="row">
        @foreach($products as $product)
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <img src="{{ $product->image_url }}" class="card-img-top" alt="{{ $product->name }}" style="height: 200px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text">{{ $product->description }}</p>
                    <p class="text-success"><strong>{{ number_format($product->price, 0, ',', '.') }} VND</strong></p>
                    <!-- Liên kết đến chi tiết sản phẩm -->
                    <a href="{{ route('products.show', $product->id) }}" class="btn btn-secondary w-100 mb-2">Xem Chi Tiết</a>
                    <!-- Form thêm vào giỏ hàng -->
                    <form action="{{ route('cart.add') }}" method="POST">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                        <button type="submit" class="btn btn-primary w-100">Thêm vào giỏ hàng</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
