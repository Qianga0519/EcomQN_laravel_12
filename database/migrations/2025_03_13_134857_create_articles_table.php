<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->id(); // Khóa chính (Primary Key)

            $table->string('a_title'); // Tiêu đề bài viết
            $table->string('a_slug')->unique(); // Đường dẫn SEO (duy nhất)

            $table->unsignedBigInteger('a_category_id'); // ID danh mục (Khóa ngoại)
            $table->unsignedBigInteger('a_author_id'); // ID người tạo (Khóa ngoại)

            $table->string('a_avatar')->nullable(); // Ảnh đại diện
            $table->text('a_description')->nullable(); // Mô tả ngắn
            $table->longText('a_content')->nullable(); // Nội dung chi tiết

            $table->integer('a_view')->default(0); // Số lượt xem
            $table->tinyInteger('a_active')->default(1); // Trạng thái (1: Hiện, 0: Ẩn)
            $table->tinyInteger('a_featured')->default(0); // Bài viết nổi bật (1: Có, 0: Không)

            // Trường SEO
            $table->text('a_description_seo')->nullable(); // Mô tả SEO
            $table->string('a_key_seo')->nullable(); // Từ khóa SEO
            $table->string('a_title_seo')->nullable(); // Tiêu đề SEO

            $table->timestamps(); // created_at & updated_at

            // Ràng buộc khóa ngoại (Foreign Key Constraints)
            $table->foreign('a_category_id')->references('id')->on('categories')->onDelete('cascade'); // Liên kết bảng categories
            $table->foreign('a_author_id')->references('id')->on('admins')->onDelete('cascade'); // Liên kết bảng admins
        });
    }

    public function down(): void
    {
        // Xóa bảng nếu rollback
        Schema::dropIfExists('articles');
    }
};
