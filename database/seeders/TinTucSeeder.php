<?php

namespace Database\Seeders;

use App\Models\TinTuc;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TinTucSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    /**
     * II. Factory & Seeder (1)
     * (1). Tạo Factory và Seeder để sinh ra 50 bản ghi dữ liệu test cho bảng tin_tucs .
     * -    Tạo Factory cho bảng tin_tucs
     *      +   php artisan make:factory TinTucFactory --model=TinTuc
     * 
     * -    Tạo Seeder cho bảng tin_tucs
     *      +   php artisan make:seeder TinTucSeeder
     * 
     * -    Dùng cả Factory + Seeder để sinh ra nhiều dữ liệu test (50 bản ghi)
     */
    public function run(): void
    {
        //  Tạo 50 bản ghi dữ liệu test từ Factory + Seeder
        //  Có thể chạy riêng file này với lệnh: 
        //      php artisan db:seed --class=TinTucSeeder
        TinTuc::factory()->count(50)->create();
    }
}
