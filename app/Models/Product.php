<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

        // Các cột được phép mass assignment
        protected $fillable = [
            'name',          // Tên sản phẩm
            'description',   // Mô tả
            'price',         // Giá sản phẩm
            'quantity'       // Số lượng
        ];
}
