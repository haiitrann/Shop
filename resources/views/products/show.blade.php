@extends('layouts.app')

@section('title', $product->name)

@section('content')
<div class="container mt-4">
    <div class="row">
        <div class="col-md-6">
            <img src="{{ $product->image_url }}" class="img-fluid" alt="{{ $product->name }}">
        </div>
        <div class="col-md-6">
            <h2>{{ $product->name }}</h2>
            <p><strong>Giá: </strong>{{ number_format($product->price, 0, ',', '.') }} VND</p>
            <p><strong>Mô tả: </strong>{{ $product->description }}</p>
            <p><strong>Số lượng: </strong>{{ $product->quantity }}</p>
            <form action="{{ route('cart.add') }}" method="POST">
                @csrf
                <input type="hidden" name="product_id" value="{{ $product->id }}">
                <button type="submit" class="btn btn-primary">Thêm vào giỏ hàng</button>
            </form>
        </div>
    </div>
</div>
@endsection
