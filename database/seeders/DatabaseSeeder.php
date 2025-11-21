<?php
namespace Database\Seeders;

use App\Models\TinTuc;
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

        // User::factory(10)->create(); // Tạo dữ liệu kiểu Factory mặc định/tự động 

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]); //   Tạo dữ liệu Factory tuỳ chỉnh/ghi đè

        TinTuc::factory(50)->create();


        /**Sử dụng Factory trực tiếp trong DatabaseSeeder
         * Tạo dữ liệu tại chỗ, ở đây mặc định tạo 1 nhân viên/tin tức với thông tin tuỳ chỉnh.
         * Không cần tạo Seeder riêng
         * Có thể tạo 1 hoặc nhiều (ví dụ như 10, 100, 1000,...)
         * Không có tổ chức Seeder riêng (fiel riêng), logic tạo dữ liệu nằm trong DatabaseSeeder.php
         */

        // NhanVien::factory()->create([
        //     'ho_ten' => 'Nguyễn Tuấn Anh',
        //     'email'  => 'anhtuan7899@gmail.com',
        //     'ngay_sinh' => \Carbon\Carbon::create(2003, 4, 8),
        //     'gioi_tinh' => true,
        //     'luong'     => 21000000,
        //     'phong_ban' => 'IT'
        // ]);

        // TinTuc::factory()->create([
        //     'tieu_de'   => 'Lộ trình học Laravel giảm giá sốc 50%',
        //     'noi_dung'  => 'Lộ trình học PHP LARAVEL & MYSQL TỪ CƠ BẢN ĐẾN NÂNG CAO giảm giá 50% BlackFriday',
        //     'tac_gia'   => 'Anh đẹp trai',
        //     'ngay_dang' => now(),
        //     'hien_thi'  => true,
        // ]);

        /**
         * Chạy chung từ trên xuống dưới tuần tự tất cả các bảng Seeder riêng lẻ bằng cách sử dụng call()
         * Gắn Seeder vào DatabaseSeeder.php
         * Chạy Seeder bằng lệnh:
         *      php artisan db:seed
         */

        //  Sử dụng Seeder class (gọi bằng $this->call())
        /**
         * Có thể tổ chức logic tạo dữ liệu phức tạp, nhiều bước.
         * Gọi nhiều Seeder khác nhau theo thứ tự.
         */
        // $this->call([
        //     NhanVienSeeder::class,
        // ]);

        // $this->call([
        //     TinTucSeeder::class
        // ]);
    }
}
