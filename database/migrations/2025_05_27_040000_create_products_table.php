<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('products', function (Blueprint $table) {
        $table->id();                                // 主鍵
        $table->string('name');                      // 商品名稱
        $table->text('description')->nullable();     // 商品描述
        $table->decimal('price',8,2);                // 價格
        $table->string('image_url')->nullable();     // 圖片 URL
        $table->timestamps();                        // created_at, updated_at
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
