<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\FuncCall;

class Order extends Model
{
    use HasFactory;

    // Tên bảng (nếu không tuân theo quy tắc đặt tên của Laravel)
    protected $table = 'orders';

    // Các trường có thể gán hàng loạt (Mass Assignment)
    protected $fillable = [
        'or_transaction_id',
        'or_user_id',
        'or_total_price',
        'or_status',
    ];

    // Ép kiểu cho các trường
    protected $casts = [
        'or_total_price' => 'decimal:2',
    ];

    // Danh sách trạng thái đơn hàng
    public const STATUS_PENDING   = 'pending';    // Đang chờ xử lý
    public const STATUS_COMPLETED = 'completed';  // Đã hoàn thành
    public const STATUS_CANCELLED = 'cancelled';  // Đã hủy

    /**
     * Kiểm tra đơn hàng đã hoàn thành chưa.
     */
    public function isCompleted(): bool
    {
        return $this->or_status === self::STATUS_COMPLETED;
    }

    /**
     * Quan hệ: Order - Transaction (1-1)
     */
    public function transaction()
    {
        return $this->belongsTo(Transaction::class, 'or_transaction_id');
    }

    /**
     * Quan hệ: Order - User (N-1)
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'or_user_id');
    }
    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class, 'od_order_id');
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'order_details', 'od_order_id', 'od_product_id');
    }

}