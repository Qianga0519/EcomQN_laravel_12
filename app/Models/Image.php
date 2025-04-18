<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    // Tên bảng trong cơ sở dữ liệu
    protected $table = 'images';

    // Các cột có thể gán giá trị
    protected $fillable = [
        'product_id',
        'name',
    ];

    /**
     * Định nghĩa mối quan hệ với model Product
     * Một ảnh thuộc về một sản phẩm
     */
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
