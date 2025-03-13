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
        'c_name',
        'c_slug',
        'c_icon',
        'c_avatar',
        'c_active',
        'c_total_product',
        'c_home',
        'c_author_id',
    ];

    // Định nghĩa mối quan hệ: Một danh mục thuộc về một admin
    public function author()
    {
        return $this->belongsTo(Admin::class, 'c_author_id');
    }

    // Định nghĩa mối quan hệ: Một danh mục có nhiều sản phẩm
    public function products()
    {
        return $this->hasMany(Product::class, 'p_category_id');
    }

    public function articles()
    {
        return $this->hasMany(Article::class, 'a_category_id');
    }
    // Scope lọc danh mục đang hoạt động
    public function scopeActive($query)
    {
        return $query->where('c_active', 1);
    }

    // Scope lọc danh mục hiển thị trang chủ
    public function scopeHome($query)
    {
        return $query->where('c_home', 1);
    }
}