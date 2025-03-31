<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('brands', function (Blueprint $table) {
            $table->id(); // Khóa chính tự động tăng
            $table->unsignedBigInteger('admin_id'); // ID của admin tạo brand
            $table->string('name', 150); // Tên nhà cung cấp
            $table->string('website', 255)->nullable(); // Địa chỉ website
            $table->string('logo', 255)->nullable(); // Đường dẫn logo
            $table->boolean('status')->default(1); // Trạng thái (1: Hoạt động, 0: Không hoạt động)
            $table->timestamps(); // created_at & updated_at
            // Khóa ngoại liên kết admin
            $table->foreign('admin_id')->references('id')->on('admins')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('brands');
    }
};