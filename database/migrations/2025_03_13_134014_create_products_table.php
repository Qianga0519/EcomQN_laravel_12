<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // Khóa chính (Primary Key)

            $table->string('p_name'); // Tên sản phẩm
            $table->string('p_slug')->unique(); // Đường dẫn SEO (duy nhất)

            $table->unsignedBigInteger('p_category_id'); // ID danh mục (Khóa ngoại)
            $table->unsignedBigInteger('p_author_id'); // ID người tạo (Khóa ngoại)
            $table->unsignedBigInteger('p_brands_id')->nullable(); // ID nhà cung cấp (Khóa ngoại, cho phép null)

            $table->decimal('p_price', 10, 2)->default(0.00); // Giá sản phẩm
            $table->decimal('p_price_old', 10, 2)->nullable(); // Giá cũ (nếu có)
            $table->tinyInteger('p_sale')->default(0); // Phần trăm giảm giá (0-100)

            $table->tinyInteger('p_active')->default(1); // Trạng thái (1: Hoạt động, 0: Không hoạt động)
            $table->tinyInteger('p_featured')->default(0); // Sản phẩm nổi bật (1: Có, 0: Không)

            $table->string('p_warranty')->nullable(); // Thời gian bảo hành
            $table->string('p_number', 20)->nullable(); // Số seri sản phẩm
            $table->string('p_pay', 20)->nullable(); // Phương thức thanh toán
            $table->string('p_holiday', 20)->nullable(); // Chương trình khuyến mãi dịp lễ

            $table->integer('p_view')->default(0); // Số lượt xem
            $table->integer('p_stock')->default(0); // Số lượng tồn kho

            $table->text('p_description')->nullable(); // Mô tả ngắn
            $table->longText('p_content')->nullable(); // Nội dung chi tiết


            $table->string('p_avatar')->nullable(); // Ảnh đại diện sản phẩm

            // Trường phục vụ SEO
            $table->text('p_description_seo')->nullable(); // Mô tả ngắn cho SEO
            $table->string('p_key_seo')->nullable(); // Từ khóa SEO
            $table->string('p_title_seo')->nullable(); // Tiêu đề SEO

            $table->timestamps(); // Tạo 2 cột: created_at và updated_at (mốc thời gian)

            // Ràng buộc khóa ngoại (Foreign Key Constraints)
            $table->foreign('p_category_id')->references('id')->on('categories')->onDelete('cascade'); // Liên kết bảng categories
            $table->foreign('p_author_id')->references('id')->on('admins')->onDelete('cascade'); // Liên kết bảng admins
            $table->foreign('p_brands_id')->references('id')->on('brands')->onDelete('set null'); // Liên kết bảng brands
        });
    }

    public function down(): void
    {
        // Xóa bảng nếu rollback
        Schema::dropIfExists('products');
    }
};
