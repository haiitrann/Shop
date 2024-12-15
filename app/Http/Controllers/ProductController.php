<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    
        // Hiển thị form thêm sản phẩm
        public function create()
        {
            return view('products.create');
        }
    // Hiển thị danh sách sản phẩm
    public function index()
    {
        $products = Product::all(); // Lấy tất cả sản phẩm từ cơ sở dữ liệu
        return view('products.index', compact('products')); // Trả về view danh sách sản phẩm
    }

    // Lưu sản phẩm vào cơ sở dữ liệu
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Xử lý hình ảnh nếu có
        $imageUrl = null;
        if ($request->hasFile('image')) {
            $imageUrl = $request->file('image')->store('images', 'public');
        }

        // Lưu sản phẩm vào cơ sở dữ liệu
        Product::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'quantity' => $request->input('quantity'),
            'image_url' => $imageUrl,
        ]);
    }

    // Hiển thị chi tiết sản phẩm
    public function show($id)
    {
        $product = Product::findOrFail($id); // Tìm sản phẩm theo ID, nếu không tìm thấy thì trả về lỗi 404
        return view('products.show', compact('product'));
    }
}
