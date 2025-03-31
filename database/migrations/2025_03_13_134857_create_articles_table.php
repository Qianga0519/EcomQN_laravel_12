<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id(); // Khóa chính (Primary Key)

            $table->string('title'); // Tiêu đề bài viết
            $table->string('slug')->unique(); // Đường dẫn SEO (duy nhất)

            $table->unsignedBigInteger('category_id'); // ID danh mục (Khóa ngoại)
            $table->unsignedBigInteger('author_id'); // ID người tạo (Khóa ngoại)

            $table->string('avatar')->nullable(); // Ảnh đại diện
            $table->text('description')->nullable(); // Mô tả ngắn
            $table->longText('content')->nullable(); // Nội dung chi tiết

            $table->integer('view')->default(0); // Số lượt xem
            $table->tinyInteger('active')->default(1); // Trạng thái (1: Hiện, 0: Ẩn)
            $table->tinyInteger('featured')->default(0); // Bài viết nổi bật (1: Có, 0: Không)

            // Trường SEO
            $table->text('description_seo')->nullable(); // Mô tả SEO
            $table->string('key_seo')->nullable(); // Từ khóa SEO
            $table->string('title_seo')->nullable(); // Tiêu đề SEO

            $table->timestamps(); // created_at & updated_at

            // Ràng buộc khóa ngoại (Foreign Key Constraints)
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade'); // Liên kết bảng categories
            $table->foreign('author_id')->references('id')->on('admins')->onDelete('cascade'); // Liên kết bảng admins
        });
    }

    public function down(): void
    {
        // Xóa bảng nếu rollback
        Schema::dropIfExists('articles');
    }
};