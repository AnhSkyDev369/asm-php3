<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TinTuc extends Model
{
    /**
     * III. Controller & Model 
     * (1). Tạo Model: TinTuc
     *- Chạy lệnh: 
     *      +   php artisan make:modelTinTuc
     */
    //  Sau khi tạo Factory cho Model bằng lệnh:
    //  -   php artisan make:factory TinTucFactory --model=TinTuc
    //  Khi đó muốn dùng: TinTuc::factory()->create();
    //  Thì bắt buộc phải useHasFactory để cung cấp thêm cho Model phương thức factory()
    use HasFactory;
}
