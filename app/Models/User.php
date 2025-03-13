<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * Các trường có thể gán hàng loạt (Mass Assignment)
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'u_name',
        'u_email',
        'u_password',
        'u_phone_number',
        'u_avatar',
        'u_active',
        'u_total_pay',
        'u_address',
        'u_about',
        'u_role',
        'u_last_login_at',
    ];

    /**
     * Các trường cần ẩn khi trả về JSON
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'u_password',
        'remember_token',
    ];

    /**
     * Ép kiểu dữ liệu
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'u_email_verified_at' => 'datetime',
            'u_password'          => 'hashed',
            'u_active'            => 'boolean',
            'u_total_pay'         => 'decimal:2',
            'u_last_login_at'     => 'datetime',
        ];
    }

    /**
     * Kiểm tra nếu người dùng có phải là VIP hay không
     */
    public function isVip(): bool
    {
        return $this->role === 'vip';
    }
}
