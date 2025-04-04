<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id(); // Khóa chính tự động tăng
            $table->string('name', 150); // Tên danh mục
            $table->string('slug', 150)->unique(); // Slug danh mục (duy nhất)
            $table->string('icon')->nullable(); // Icon danh mục (có thể null)
            $table->string('avatar')->nullable(); // Ảnh đại diện (có thể null)
            $table->boolean('active')->default(1); // Trạng thái (1: hoạt động, 0: không hoạt động)
            $table->integer('total_product')->default(0); // Tổng số sản phẩm trong danh mục
            $table->boolean('home')->default(0); // Hiển thị trên trang chủ (0: ẩn, 1: hiện)
            $table->unsignedBigInteger('author_id'); // ID admin (tác giả tạo danh mục)
            $table->timestamps(); // created_at & updated_at

            // Thiết lập khóa ngoại liên kết với bảng admins
            $table->foreign('author_id')->references('id')->on('admins')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};