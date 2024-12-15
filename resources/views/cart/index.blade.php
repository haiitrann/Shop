@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Giỏ hàng</h1>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if(!empty($cart) && count($cart) > 0)
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Hình ảnh</th>
                    <th>Tên sản phẩm</th>
                    <th>Giá</th>
                    <th>Số lượng</th>
                    <th>Tổng cộng</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cart as $id => $item)
                    <tr>
                        <td><img src="{{ $item['image_url'] }}" alt="{{ $item['name'] }}" width="50"></td>
                        <td>{{ $item['name'] }}</td>
                        <td>{{ number_format($item['price'], 0, ',', '.') }} VND</td>
                        <td>{{ $item['quantity'] }}</td>
                        <td>{{ number_format($item['price'] * $item['quantity'], 0, ',', '.') }} VND</td>
                        <td>
                            <form action="{{ route('cart.remove') }}" method="POST">
                                @csrf
                                <input type="hidden" name="product_id" value="{{ $id }}">
                                <button type="submit" class="btn btn-danger">Xóa</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Giỏ hàng của bạn đang trống.</p>
    @endif

    <a href="{{ route('products.index') }}" class="btn btn-primary">Quay lại mua sắm</a>
</div>
@endsection
