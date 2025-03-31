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
        'order_id',
        'product_id',
        'quantity',
        'price',
        'price_old',
        'discount',
        'warranty',
    ];

    /**
     * Thiết lập quan hệ với model Order (Mối quan hệ Nhiều - Một)
     */
    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id');
    }

    /**
     * Thiết lập quan hệ với model Product (Mối quan hệ Nhiều - Một)
     */
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
