<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('ad_name', 50);
            $table->string('ad_email')->unique();
            $table->string('ad_password', 60);
            $table->string('ad_phone_number')->nullable();
            $table->string('ad_avatar')->nullable();
            $table->boolean('ad_active')->default(true);
            $table->enum('ad_role', ['super_admin', 'moderator', 'editor'])->default('moderator'); // Phân quyền
            $table->timestamp('ad_last_login_at')->nullable(); // Theo dõi hoạt động
            $table->foreignId('ad_created_by')->nullable()->constrained('admins')->onDelete('set null'); // Ai tạo
            $table->rememberToken();
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('admins'); // Xóa bảng nếu rollback
    }
};
