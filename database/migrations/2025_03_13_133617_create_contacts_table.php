<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id(); // Khóa chính tự động tăng
            $table->string('name', 100); // Tên người liên hệ
            $table->string('email', 150); // Email liên hệ
            $table->string('title', 255); // Tiêu đề liên hệ
            $table->text('content'); // Nội dung liên hệ
            $table->boolean('status')->default(0); // Trạng thái (0: Chưa xử lý, 1: Đã xử lý)
            $table->timestamps(); // created_at & updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};