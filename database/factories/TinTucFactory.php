<?php
namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TinTuc>
 */
class TinTucFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    /**
     * II. Factory & Seeder
     * 1.   Tạo Factory và Seeder để sinh ra 50 bản ghi dữ liệu test cho bảng tin_tucs .
     * -    Tạo Factory cho bảng tin_tucs
     *      +   php artisan make:factory TinTucFactory --model=TinTuc
     *
     * -    Tạo Seeder cho bảng tin_tucs
     *      +   php artisan make:seeder TinTucSeeder
     *
     * -    Dùng cả Factory + Seeder để sinh ra nhiều dữ liệu test (50 bản ghi)
     */
    public function definition(): array
    {
        return [
            'tieu_de'   => $this->faker->sentence(6),
            'noi_dung'  => $this->faker->paragraph(10),
            'tac_gia'   => $this->faker->name(),
            'ngay_dang' => Carbon::now()->subDays(rand(1, 60)),
            'hien_thi'  => $this->faker->boolean(90), // Trong đó 90% là true, tức là hiển thị
        ];
    }
}
