<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->string('phone_number')->nullable();
            $table->string('avatar')->nullable();
            $table->boolean('active')->default(true);
            $table->enum('role', ['super_admin', 'moderator', 'editor'])->default('moderator'); // Phân quyền
            $table->timestamp('last_login_at')->nullable(); // Theo dõi hoạt động
            $table->foreignId('created_by')->nullable()->constrained('admins')->onDelete('set null'); // Ai tạo
            $table->rememberToken();
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('admins'); // Xóa bảng nếu rollback
    }
};