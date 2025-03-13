<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;

    // Tên bảng tương ứng với model
    protected $table = 'order_details';

    // Các thuộc tính có thể gán hàng loạt (Mass Assignment)
    protected $fillable = [
        'od_order_id',
        'od_product_id',
        'od_quantity',
        'od_price',
        'od_price_old',
        'od_discount',
        'od_warranty',
    ];

    /**
     * Thiết lập quan hệ với model Order (Mối quan hệ Nhiều - Một)
     */
    public function order()
    {
        return $this->belongsTo(Order::class, 'od_order_id');
    }

    /**
     * Thiết lập quan hệ với model Product (Mối quan hệ Nhiều - Một)
     */
    public function product()
    {
        return $this->belongsTo(Product::class, 'od_product_id');
    }
}