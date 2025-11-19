<?php
namespace Database\Seeders;

use App\Models\NhanVien;
use Database\Factories\NhanVienFactory;
use Illuminate\Database\Seeder;

class NhanVienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    /**
     * II. Factory và Seeder (1)
     * Tạo Factory hoặc Seeder để sinh ra 100 bản ghi dữ liệu test cho bảng nhan_viens .
     * 2. Tạo Seeder dùng Factory
     *      php artisan make:seeder NhanVienSeeder
     */
    public function run(): void
    {
        //  Tạo 100 bản ghi dữ liệu test từ Factory + Seeder
        //  Có thể chạy riêng file này với lệnh: 
        //      php artisan db:seed --class=NhanVienSeeder
        NhanVien::factory()->count(100)->create();
    }
}
