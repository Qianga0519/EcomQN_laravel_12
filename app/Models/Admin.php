<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $fillable = [
        'ad_name',
        'ad_email',
        'ad_password',
        'ad_phone_number',
        'ad_avatar',
        'ad_active',
        'ad_role',
        'ad_created_by',
    ];


    protected $hidden = [
        'ad_password',
        'remember_token',
    ];

    protected $casts = [
        'ad_active' => 'boolean',
    ];
    public function products()
    {
        return $this->hasMany(Product::class);
    }
    public function categories()
    {
        return $this->hasMany(Category::class);
    }
    public function article()
    {
        return $this->hasMany(Article::class);
    }
    public function brand()
    {
        return $this->hasMany(Brand::class);
    }
}
