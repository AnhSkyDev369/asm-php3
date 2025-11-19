<?php
namespace Database\Seeders;

use App\Models\NhanVien;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        //  Sử dụng Factory trực tiếp trong DatabaseSeeder
        /**
         * Tạo dữ liệu tại chỗ, ở đây mặc định tạo 1 nhan viên với thông tin tuỳ chỉnh
         * Không cần tạo Seeder riêng
         * Có thể tạo 1 hoặc nhiều (ví dụ như 10, 100, 1000,...)
         * Không có tổ chức Seeder riêng (fiel riêng), logic tạo dữ liệu nằm trong DatabaseSeeder.php
         */
        NhanVien::factory()->create([
            'ho_ten' => 'Nguyễn Tuấn Anh',
            'email'  => 'anhtuan7899@gmail.com',
            'ngay_sinh' => \Carbon\Carbon::create(2003, 4, 8),
            'gioi_tinh' => true,
            'luong'     => 21000000,
            'phong_ban' => 'IT'
        ]);

        /**
         * Chạy chung từ trên xuống dưới tuần tự tất cả các bảng Seeder
         * Gắn Seeder vào DatabaseSeeder.php
         * Chạy Seeder bằng lệnh:
         *      php artisan db:seed
         */
        // $this->call([
        //     NhanVienSeeder::class,
        // ]);
    }
}
