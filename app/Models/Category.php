<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // Tên bảng
    protected $table = 'categories';

    // Các cột được phép gán giá trị hàng loạt
    protected $fillable = [
        'name',
        'slug',
        'icon',
        'avatar',
        'active',
        'total_product',
        'home',
        'author_id',
    ];

    // Định nghĩa mối quan hệ: Một danh mục thuộc về một admin
    public function author()
    {
        return $this->belongsTo(Admin::class, 'author_id');
    }

    // Định nghĩa mối quan hệ: Một danh mục có nhiều sản phẩm
    public function products()
    {
        return $this->hasMany(Product::class, 'category_id');
    }

    public function articles()
    {
        return $this->hasMany(Article::class, 'a_category_id');
    }
    // Scope lọc danh mục đang hoạt động
    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }

    // Scope lọc danh mục hiển thị trang chủ
    public function scopeHome($query)
    {
        return $query->where('home', 1);
    }
}