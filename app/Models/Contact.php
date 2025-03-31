<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    /**
     * Tên bảng trong cơ sở dữ liệu.
     *
     * @var string
     */
    protected $table = 'contacts';

    /**
     * Các trường có thể gán giá trị hàng loạt.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'title',
        'content',
        'status',
    ];

    /**
     * Truy vấn chỉ lấy các liên hệ chưa xử lý.
     */
    public function scopePending($query)
    {
        return $query->where('status', 0);
    }

    /**
     * Truy vấn chỉ lấy các liên hệ đã xử lý.
     */
    public function scopeProcessed($query)
    {
        return $query->where('status', 1);
    }

    /**
     * Đánh dấu liên hệ là đã xử lý.
     */
    public function markAsProcessed(): void
    {
        $this->update(['status' => 1]);
    }
}