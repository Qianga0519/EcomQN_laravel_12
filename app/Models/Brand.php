<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\FuncCall;
use Illuminate\Notifications\Notifiable;

class Brand extends Model
{
    use HasFactory, Notifiable;


    // Tên bảng (nếu không theo chuẩn Laravel)
    protected $table = 'brands';

    // Các trường được phép gán hàng loạt
    protected $fillable = [
        'admin_id',
        's_name',
        'c_email',
        'c_phone',
        'c_fax',
        'c_website',
        'c_logo',
        'c_status',
    ];

    // Kiểu dữ liệu được ép kiểu
    protected $casts = [
        'c_status' => 'boolean',
    ];

    /**
     * Quan hệ: Brand thuộc về một Admin
     */
    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
