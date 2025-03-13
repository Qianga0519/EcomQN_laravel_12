<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('tb_transactions', function (Blueprint $table) {
            $table->id(); // Khóa chính tự động tăng
            $table->unsignedBigInteger('tr_user_id'); // ID người dùng (khóa ngoại)
            $table->decimal('tr_total', 15, 2); // Tổng số tiền giao dịch
            $table->text('tr_note')->nullable(); // Ghi chú (có thể để trống)
            $table->string('tr_address'); // Địa chỉ giao hàng
            $table->string('tr_phone'); // Số điện thoại
            $table->tinyInteger('tr_status')->default(0); // Trạng thái (0: chờ xử lý, 1: hoàn thành)
            $table->timestamps(); // created_at & updated_at

            // Thiết lập khóa ngoại với bảng tb_users
            $table->foreign('tr_user_id')->references('id')->on('tb_users')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tb_transactions');
    }
};
