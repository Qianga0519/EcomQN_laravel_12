<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * T o b ng chi ti t c a đơn h ng
     * id: Khóa chính tự động tăng
     * order_id: Liên kết với orders
     * product_id: Liên kết với products
     * quantity: Số lượng sản phẩm, mặc định là 1
     * price: Giá hiện tại
     * price_old: Giá cũ (nếu có)
     * discount: Phần trăm giảm giá, mặc định là 0
     * warranty: Bảo hành
     * created_at & updated_at: Th i gian t o & c p nh t
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->id(); // Khóa chính tự động tăng
            $table->unsignedBigInteger('order_id'); // Liên kết với orders
            $table->unsignedBigInteger('product_id'); // Liên kết với products
            $table->integer('quantity')->default(1); // Số lượng sản phẩm
            $table->decimal('price', 15, 2); // Giá hiện tại
            $table->decimal('price_old', 15, 2)->nullable(); // Giá cũ (nếu có)
            $table->integer('discount')->default(0); // Phần trăm giảm giá
            $table->string('warranty')->nullable(); // Bảo hành
            $table->timestamps(); // created_at & updated_at

            // Thiết lập khóa ngoại
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations by dropping the 'order_details' table.
     */

    public function down(): void
    {
        Schema::dropIfExists('order_details');
    }
};