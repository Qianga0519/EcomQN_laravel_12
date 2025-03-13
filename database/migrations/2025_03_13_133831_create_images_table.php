<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('images', function (Blueprint $table) {
            $table->id(); // Khóa chính tự động tăng
            $table->unsignedBigInteger('im_product_id'); // ID sản phẩm
            $table->string('im_name', 255); // Tên hoặc đường dẫn ảnh
            $table->timestamps(); // created_at & updated_at

            // Khóa ngoại liên kết với bảng products
            $table->foreign('im_product_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('images');
    }
};
