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
        'transaction_id',
        'user_id',
        'total_price',
        'status',
    ];

    // Ép kiểu cho các trường
    protected $casts = [
        'total_price' => 'decimal:2',
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
        return $this->status === self::STATUS_COMPLETED;
    }

    /**
     * Quan hệ: Order - Transaction (1-1)
     */
    public function transaction()
    {
        return $this->belongsTo(Transaction::class, 'transaction_id');
    }

    /**
     * Quan hệ: Order - User (N-1)
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class, 'order_id');
    }

    public function products()
    {
        return $this->belongsToMany(Product::class, 'order_details', 'order_id', 'product_id');
    }

}