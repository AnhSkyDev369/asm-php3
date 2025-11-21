<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

    /**
     * I. Tạo migration cho bảng nhan_viens với các trường:
     * id
     * ho_ten (string)
     * email (string),unique
     * ngay_sinh (date) 
     * gioi_tinh (boolean) // true: Nam, false: Nữ
     * luong (decimal 10,2)
     * phong_ban (string)
     * 
     * 1.   Tạo bảng nhan_viens với lệnh:
     *          php artisan make:migrate create_nhan_viens_table
     */
    public function up(): void
    {
        Schema::create('nhan_viens', function (Blueprint $table) {
            $table->id();
            $table->string('ho_ten');
            $table->string('email')->unique();
            $table->date('ngay_sinh');
            $table->boolean('gioi_tinh'); // true: Nam, false: Nữ
            $table->decimal('luong', 10, 2);
            $table->string('phong_ban');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nhan_viens');
    }
};
