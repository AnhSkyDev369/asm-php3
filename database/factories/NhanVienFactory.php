<?php
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\NhanVien>
 */
class NhanVienFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    /**
     * II. Factory & Seeder
     * 1.   Tạo Factory hoặc Seeder để sinh ra 100 bản ghi dữ liệu test cho bảng nhan_viens .
     * -    Tạo Factory cho bảng nhan_viens
     *          + php artisan make:factory NhanVienFactory --model=NhanVien
     *      
     * -    Tạo Seeder cho bảng nhan_viens
     *          + php artisan make:seeder NhanVienSeeder 
     * 
     * -    Dùng cả Seeder + Factory để sinh ra nhiều dữ liệu test tự động (100 bản ghi)
     */
    public function definition(): array
    {
        return [
            'ho_ten'    => $this->faker->name(),
            'email'     => $this->faker->unique()->safeEmail(),
            'ngay_sinh' => $this->faker->date(),
            'gioi_tinh' => $this->faker->boolean(),
            'luong'     => $this->faker->randomFloat(2, 5000000, 30000000),
            'phong_ban' => $this->faker->randomElement(['Nhân sự', 'Kế Toán', 'IT', 'Marketing', 'Kinh doanh']),
        ];
    }
}
