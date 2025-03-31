<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // Khóa chính (Primary Key)

            $table->string('name'); // Tên sản phẩm
            $table->string('slug')->unique(); // Đường dẫn SEO (duy nhất)

            $table->unsignedBigInteger('category_id'); // ID danh mục (Khóa ngoại)
            $table->unsignedBigInteger('author_id'); // ID người tạo (Khóa ngoại)
            $table->unsignedBigInteger('brands_id')->nullable(); // ID nhà cung cấp (Khóa ngoại, cho phép null)

            $table->decimal('price', 10, 2)->default(0.00); // Giá sản phẩm
            $table->decimal('price_old', 10, 2)->nullable(); // Giá cũ (nếu có)
            $table->tinyInteger('sale')->default(0); // Phần trăm giảm giá (0-100)

            $table->tinyInteger('active')->default(1); // Trạng thái (1: Hoạt động, 0: Không hoạt động)
            $table->tinyInteger('featured')->default(0); // Sản phẩm nổi bật (1: Có, 0: Không)

            $table->string('warranty')->nullable(); // Thời gian bảo hành
            $table->string('number', 20)->nullable(); // Số seri sản phẩm
            $table->string('pay', 20)->nullable(); // Phương thức thanh toán
            $table->string('holiday', 20)->nullable(); // Chương trình khuyến mãi dịp lễ

            $table->integer('view')->default(0); // Số lượt xem
            $table->integer('stock')->default(0); // Số lượng tồn kho

            $table->text('description')->nullable(); // Mô tả ngắn
            $table->longText('content')->nullable(); // Nội dung chi tiết


            $table->string('avatar')->nullable(); // Ảnh đại diện sản phẩm

            // Trường phục vụ SEO
            $table->text('description_seo')->nullable(); // Mô tả ngắn cho SEO
            $table->string('key_seo')->nullable(); // Từ khóa SEO
            $table->string('title_seo')->nullable(); // Tiêu đề SEO

            $table->timestamps(); // Tạo 2 cột: created_at và updated_at (mốc thời gian)

            // Ràng buộc khóa ngoại (Foreign Key Constraints)
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade'); // Liên kết bảng categories
            $table->foreign('author_id')->references('id')->on('admins')->onDelete('cascade'); // Liên kết bảng admins
            $table->foreign('brands_id')->references('id')->on('brands')->onDelete('set null'); // Liên kết bảng brands
        });
    }

    public function down(): void
    {
        // Xóa bảng nếu rollback
        Schema::dropIfExists('products');
    }
};