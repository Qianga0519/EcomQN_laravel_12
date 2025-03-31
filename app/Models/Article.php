<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    // Tên bảng
    protected $table = 'articles';

    // Các cột được phép gán giá trị hàng loạt
    protected $fillable = [
        'title',
        'slug',
        'category_id',
        'author_id',
        'avatar',
        'description',
        'content',
        'view',
        'active',
        'featured',
        'description_seo',
        'key_seo',
        'title_seo',
    ];

    // Định nghĩa mối quan hệ: Một bài viết thuộc về một danh mục
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    // Định nghĩa mối quan hệ: Một bài viết thuộc về một admin (người tạo)
    public function author()
    {
        return $this->belongsTo(Admin::class, 'author_id');
    }

    // Scope: Lọc bài viết đang hoạt động
    public function scopeActive($query)
    {
        return $query->where('active', 1);
    }

    // Scope: Lọc bài viết nổi bật
    public function scopeFeatured($query)
    {
        return $query->where('featured', 1);
    }
}