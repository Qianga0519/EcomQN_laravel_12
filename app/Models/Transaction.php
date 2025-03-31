<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    // Tên bảng (nếu không tuân theo quy tắc đặt tên của Laravel)
    protected $table = 'transactions';

    // Các trường có thể gán hàng loạt (Mass Assignment)
    protected $fillable = [
        'user_id',
        'total',
        'note',
        'address',
        'phone_number',
        'status',
    ];

    // Ép kiểu cho các trường
    protected $casts = [
        'total'  => 'decimal:2',
        'status' => 'integer',
    ];

    // Trạng thái giao dịch
    public const STATUS_PENDING = 0;    // Chờ xử lý
    public const STATUS_COMPLETED = 1;  // Đã hoàn thành

    // Liên kết với người dùng (User)
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function orders()
    {
        return $this->hasOne(Order::class, 'transaction_id');
    }
    // Kiểm tra giao dịch đã hoàn thành chưa
    public function isCompleted(): bool
    {
        return $this->status === self::STATUS_COMPLETED;
    }
}