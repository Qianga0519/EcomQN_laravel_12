<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequest extends FormRequest
{
    /**
     * Xác định quyền truy cập request này
     */
    public function authorize(): bool
    {
        return true; // Cho phép tất cả admin gửi request này
    }

    /**
     * Định nghĩa các quy tắc validation
     */
    public function rules(): array
    {
        return [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ];
    }

    /**
     * Tùy chỉnh thông báo lỗi
     */
    public function messages(): array
    {
        return [
            'email.required' => 'Email required',
            'email.email' => 'Email invalid',
            'password.required' => 'Password required',
            'password.min' => 'Password must be at least 6 characters'
        ];
    }
}
