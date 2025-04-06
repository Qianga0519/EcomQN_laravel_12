<?php


namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\RateLimiter;
use App\Models\Admin;

class AuthAdminController extends Controller
{
    public function getLogin()
    {
        return view('backend.auth.login');
    }

    public function postLogin(AdminRequest $request)
    {
        $credentials = $request->only('email', 'password');
        // $key = 'login_attempts_' . $request->ip(); // Dùng IP để giới hạn số lần thử đăng nhập

        // Kiểm tra số lần đăng nhập thất bại
        // if (RateLimiter::tooManyAttempts($key, 5)) {
        //     return back()->withErrors(['email' => 'Bạn đã thử đăng nhập quá nhiều lần. Hãy thử lại sau 5 phút.']);
        // }

        try {
            if (Auth::guard('admin')->attempt($credentials, $request->has('remember'))) {
                // RateLimiter::clear($key); // Xóa giới hạn nếu đăng nhập thành công
                return redirect()->route('admin.dashboard')->with('success', 'Đăng nhập thành công');
            }

            // RateLimiter::hit($key, 300); // Nếu sai, tăng số lần thử và giữ trong 5 phút

            // Kiểm tra xem email có tồn tại không để thông báo lỗi rõ ràng hơn
            if (!Admin::where('email', $request->email)->exists()) {
                return back()->withErrors(['email' => 'Email không tồn tại trong hệ thống']);
            }

            return back()->withErrors(['password' => 'Mật khẩu không chính xác']);
        } catch (\Exception $e) {
            Log::error('Lỗi đăng nhập Admin: ' . $e->getMessage());
            return back()->with('error', 'Có lỗi xảy ra. Vui lòng thử lại sau.');
        }
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('admin.login');
    }
}