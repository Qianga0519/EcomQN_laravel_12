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
        'tr_user_id',
        'tr_total',
        'tr_note',
        'tr_address',
        'tr_phone_number',
        'tr_status',
    ];

    // Ép kiểu cho các trường
    protected $casts = [
        'tr_total'  => 'decimal:2',
        'tr_status' => 'integer',
    ];

    // Trạng thái giao dịch
    public const STATUS_PENDING = 0;    // Chờ xử lý
    public const STATUS_COMPLETED = 1;  // Đã hoàn thành

    // Liên kết với người dùng (User)
    public function user()
    {
        return $this->belongsTo(User::class, 'tr_user_id');
    }
    public function orders()
    {
        return $this->hasOne(Order::class, 'od_transaction_id');
    }
    // Kiểm tra giao dịch đã hoàn thành chưa
    public function isCompleted(): bool
    {
        return $this->tr_status === self::STATUS_COMPLETED;
    }
}