<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id(); // Khóa chính tự động tăng
            $table->unsignedBigInteger('transaction_id')->unique(); // Đảm bảo mỗi giao dịch chỉ có 1 đơn hàng
            $table->unsignedBigInteger('user_id'); // ID người dùng (liên kết với users)
            $table->decimal('total_price', 15, 2)->default(0); // Tổng giá trị đơn hàng
            $table->string('status')->default('pending'); // Trạng thái đơn hàng (pending, completed, cancelled)
            $table->timestamps(); // created_at & updated_at

            // Thiết lập khóa ngoại
            $table->foreign('transaction_id')->references('id')->on('transactions')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};