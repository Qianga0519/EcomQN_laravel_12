<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id(); // Khóa chính tự động tăng
            $table->unsignedBigInteger('user_id'); // ID người dùng (khóa ngoại)
            $table->decimal('total', 15, 2); // Tổng số tiền giao dịch
            $table->text('note')->nullable(); // Ghi chú (có thể để trống)
            $table->string('address'); // Địa chỉ giao hàng
            $table->string('phone_number'); // Số điện thoại
            $table->tinyInteger('status')->default(0); // Trạng thái (0: chờ xử lý, 1: hoàn thành)
            $table->timestamps(); // created_at & updated_at
            // Thiết lập khóa ngoại với bảng users
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};