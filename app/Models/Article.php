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
        'a_title',
        'a_slug',
        'a_category_id',
        'a_author_id',
        'a_avatar',
        'a_description',
        'a_content',
        'a_view',
        'a_active',
        'a_featured',
        'a_description_seo',
        'a_key_seo',
        'a_title_seo',
    ];

    // Định nghĩa mối quan hệ: Một bài viết thuộc về một danh mục
    public function category()
    {
        return $this->belongsTo(Category::class, 'a_category_id');
    }

    // Định nghĩa mối quan hệ: Một bài viết thuộc về một admin (người tạo)
    public function author()
    {
        return $this->belongsTo(Admin::class, 'a_author_id');
    }

    // Scope: Lọc bài viết đang hoạt động
    public function scopeActive($query)
    {
        return $query->where('a_active', 1);
    }

    // Scope: Lọc bài viết nổi bật
    public function scopeFeatured($query)
    {
        return $query->where('a_featured', 1);
    }
}
