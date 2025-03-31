<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\FuncCall;

class Product extends Model
{
    use HasFactory;

    // Tên bảng trong cơ sở dữ liệu
    protected $table = 'products';

    // Các trường có thể gán hàng loạt (Mass Assignment)
    protected $fillable = [
        'name',
        'slug',
        'category_id',
        'author_id',
        'brands_id',
        'price',
        'price_old',
        'sale',
        'active',
        'featured',
        'warranty',
        'number',
        'pay',
        'holiday',
        'view',
        'stock',
        'description',
        'content',
        'description_seo',
        'key_seo',
        'title_seo',
        'avatar',
    ];

    // Các thuộc tính cần ép kiểu
    protected $casts = [
        'price'      => 'decimal:2',
        'price_old'  => 'decimal:2',
        'sale'       => 'integer',
        'active'     => 'boolean',
        'featured'   => 'boolean',
        'view'       => 'integer',
        'stock'      => 'integer',
    ];

    // Quan hệ: Sản phẩm thuộc về danh mục
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    // Quan hệ: Sản phẩm thuộc về admin (người tạo)
    public function author()
    {
        return $this->belongsTo(Admin::class, 'author_id');
    }

    // Quan hệ: Sản phẩm thuộc về thương hiệu (có thể null)
    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brands_id');
    }
    public function images()
    {
        return $this->hasMany(Image::class, 'product_id');
    }
    public function ordersDetails()
    {
        return $this->hasMany(OrderDetail::class, 'product_id');
    }
    public function orders()
    {
        return $this->belongsToMany(Order::class, 'order_details', 'product_id', 'order_id');
    }


    // Kiểm tra sản phẩm có phải là sản phẩm nổi bật không
    public function isFeatured(): bool
    {
        return $this->featured === 1;
    }

    // Lấy giá sau khi giảm
    public function getPriceAfterSale(): float
    {
        if ($this->sale > 0) {
            return $this->price * (1 - $this->sale / 100);
        }
        return $this->price;
    }
}
