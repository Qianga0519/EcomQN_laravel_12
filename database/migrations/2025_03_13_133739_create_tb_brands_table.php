<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('tb_brands', function (Blueprint $table) {
            $table->id(); // Khóa chính tự động tăng
            $table->unsignedBigInteger('admin_id'); // ID của admin tạo brand
            $table->string('s_name', 150); // Tên nhà cung cấp
            $table->string('c_email', 150)->unique(); // Email (đảm bảo không trùng lặp)
            $table->string('c_phone', 20)->nullable(); // Số điện thoại
            $table->string('c_fax', 50)->nullable(); // Số fax
            $table->string('c_website', 255)->nullable(); // Địa chỉ website
            $table->string('c_logo', 255)->nullable(); // Đường dẫn logo
            $table->boolean('c_status')->default(1); // Trạng thái (1: Hoạt động, 0: Không hoạt động)
            $table->timestamps(); // created_at & updated_at
            // Khóa ngoại liên kết admin
            $table->foreign('admin_id')->references('id')->on('admins')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tb_brands');
    }
};
