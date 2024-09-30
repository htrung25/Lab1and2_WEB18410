<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id(); // Tạo cột id tự động tăng
            $table->string('title'); // Tiêu đề sách
            $table->string('thumbnail'); // Ảnh mô tả
            $table->string('author'); // Tác giả
            $table->string('publisher'); // Nhà xuất bản
            $table->dateTime('publication'); // Ngày xuất bản
            $table->double('price'); // Giá bán
            $table->integer('quantity'); // Số lượng sách
            $table->unsignedBigInteger('category_id'); // Mã loại sách (foreign key)
            $table->timestamps(); // Tạo 2 cột created_at và updated_at

            // Tạo ràng buộc khóa ngoại (foreign key)
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
