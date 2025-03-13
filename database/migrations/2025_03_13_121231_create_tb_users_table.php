<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('tb_users', function (Blueprint $table) {
            $table->id();
            $table->string('phone_number', 15)->unique(); // Số điện thoại duy nhất
            $table->string('avatar')->nullable(); // Ảnh đại diện
            $table->boolean('active')->default(true); // Trạng thái kích hoạt
            $table->string('password', 60); // Mật khẩu mã hóa
            $table->string('name'); // Tên người dùng
            $table->string('email')->unique(); // Email duy nhất
            $table->timestamp('email_verified_at')->nullable(); // Xác thực email
            $table->decimal('total_pay', 15, 2)->default(0); // Tổng tiền thanh toán
            $table->text('address')->nullable(); // Địa chỉ
            $table->text('about')->nullable(); // Giới thiệu
            $table->enum('role', ['user', 'seller', 'vip'])->default('user'); // Vai trò người dùng
            $table->timestamp('last_login_at')->nullable(); // Lần đăng nhập gần nhất
            $table->rememberToken(); // Token duy trì đăng nhập
            $table->timestamps();

            $table->index(['phone_number', 'email']); // Chỉ mục tối ưu
        });


        // Bảng token đặt lại mật khẩu (password_reset_tokens)
        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email', 191)->primary(); // Khóa chính
            $table->string('token')->unique(); // Token duy nhất
            $table->timestamp('created_at')->nullable(); // Ngày tạo
        });

        // Bảng quản lý phiên đăng nhập (sessions)
        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary(); // Khóa chính
            $table->foreignId('user_id')->nullable()
                ->constrained('tb_users') // Sửa lỗi tên bảng
                ->onDelete('cascade'); // Xóa session khi user bị xóa
            $table->string('ip_address', 45)->nullable(); // Địa chỉ IP
            $table->text('user_agent')->nullable(); // Thông tin trình duyệt
            $table->longText('payload'); // Dữ liệu phiên
            $table->integer('last_activity')->index(); // Hoạt động cuối cùng
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sessions');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('tb_users');
    }
};