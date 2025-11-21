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
     * I. Tạo migration cho bảng tin_tucs với các trường:
     * id
     * tieu_de (string)
     * noi_dung (text)
     * tac_gia (string) 
     * ngay_dang (datetime) 
     * hien_thi (boolean) // true: hiển thị, false: không hiển thị
     * 
     * 1.   Tạo bảng nhan_viens với lệnh:
     *          php artisan make:migrate create_tin_tucs_table
     * 
     *      Chạy lệnh sau để migrate bảng tin_tucs
     *          php artisan migrate
     */
    public function up(): void
    {
        Schema::create('tin_tucs', function (Blueprint $table) {
            $table->id();
            $table->string('tieu_de');
            $table->text('noi_dung');
            $table->string('tac_gia');
            $table->dateTime('ngay_dang');
            $table->boolean('hien_thi')->default(true);//   True: Hiển thị; False: Không hiển thị
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tin_tucs');
    }
};
