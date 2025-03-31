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
        'name',
        'email',
        'password',
        'phone_number',
        'avatar',
        'active',
        'total_pay',
        'address',
        'about',
        'role',
        'last_login_at',
    ];

    /**
     * Các trường cần ẩn khi trả về JSON
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
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
            'email_verified_at' => 'datetime',
            'password'          => 'hashed',
            'active'            => 'boolean',
            'total_pay'         => 'decimal:2',
            'last_login_at'     => 'datetime',
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
