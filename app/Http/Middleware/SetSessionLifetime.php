<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class SetSessionLifetime
{
    public function handle(Request $request, Closure $next)
    {
        try {
            if (Auth::guard('admin')->check()) {
                // Đặt thời gian sống của session cho admin
                Session::put('lifetime', 60 * 2); // 120 minutes for admin
            } else {
                // Đặt thời gian sống của session cho user
                Session::put('lifetime', 60 * 24); // 1 day for user
            }

            // Thay đổi session lifetime thông qua cấu hình nếu cần thiết
            config(['session.lifetime' => Session::get('lifetime')]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()]);
        }

        return $next($request);
    }
}
