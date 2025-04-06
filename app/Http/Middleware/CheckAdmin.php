<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CheckAdmin
{
    public function handle(Request $request, Closure $next): Response
    {
        // Giả sử bạn lưu vai trò trong session hoặc auth
        if (Auth::guard('admin')->check()) {
            return $next($request);
        }

        return redirect('/')->withErrors(['unauthorized' => 'Bạn không có quyền truy cập']);
    }
}
