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
        'p_name',
        'p_slug',
        'p_category_id',
        'p_author_id',
        'p_brands_id',
        'p_price',
        'p_price_old',
        'p_sale',
        'p_active',
        'p_featured',
        'p_warranty',
        'p_number',
        'p_pay',
        'p_holiday',
        'p_view',
        'p_stock',
        'p_description',
        'p_content',
        'p_description_seo',
        'p_key_seo',
        'p_title_seo',
        'p_avatar',
    ];

    // Các thuộc tính cần ép kiểu
    protected $casts = [
        'p_price'      => 'decimal:2',
        'p_price_old'  => 'decimal:2',
        'p_sale'       => 'integer',
        'p_active'     => 'boolean',
        'p_featured'   => 'boolean',
        'p_view'       => 'integer',
        'p_stock'      => 'integer',
    ];

    // Quan hệ: Sản phẩm thuộc về danh mục
    public function category()
    {
        return $this->belongsTo(Category::class, 'p_category_id');
    }

    // Quan hệ: Sản phẩm thuộc về admin (người tạo)
    public function author()
    {
        return $this->belongsTo(Admin::class, 'p_author_id');
    }

    // Quan hệ: Sản phẩm thuộc về thương hiệu (có thể null)
    public function brand()
    {
        return $this->belongsTo(Brand::class, 'p_brands_id');
    }
    public function images()
    {
        return $this->hasMany(Image::class, 'im_product_id');
    }
    public function ordersDetails()
    {
        return $this->hasMany(OrderDetail::class, 'od_product_id');
    }
    public function orders()
    {
        return $this->belongsToMany(Order::class, 'order_details', 'od_product_id', 'od_order_id');
    }


    // Kiểm tra sản phẩm có phải là sản phẩm nổi bật không
    public function isFeatured(): bool
    {
        return $this->p_featured === 1;
    }

    // Lấy giá sau khi giảm
    public function getPriceAfterSale(): float
    {
        if ($this->p_sale > 0) {
            return $this->p_price * (1 - $this->p_sale / 100);
        }
        return $this->p_price;
    }
}