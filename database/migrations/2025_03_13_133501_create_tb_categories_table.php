<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('tb_categories', function (Blueprint $table) {
            $table->id(); // Khóa chính tự động tăng
            $table->string('c_name', 150); // Tên danh mục
            $table->string('c_slug', 150)->unique(); // Slug danh mục (duy nhất)
            $table->string('c_icon')->nullable(); // Icon danh mục (có thể null)
            $table->string('c_avatar')->nullable(); // Ảnh đại diện (có thể null)
            $table->boolean('c_active')->default(1); // Trạng thái (1: hoạt động, 0: không hoạt động)
            $table->integer('c_total_product')->default(0); // Tổng số sản phẩm trong danh mục
            $table->boolean('c_home')->default(0); // Hiển thị trên trang chủ (0: ẩn, 1: hiện)
            $table->unsignedBigInteger('c_author_id'); // ID admin (tác giả tạo danh mục)
            $table->timestamps(); // created_at & updated_at

            // Thiết lập khóa ngoại liên kết với bảng tb_admins
            $table->foreign('c_author_id')->references('id')->on('tb_admins')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tb_categories');
    }
};