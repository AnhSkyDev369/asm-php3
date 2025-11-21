<?php
namespace App\Http\Controllers;

use App\Models\TinTuc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TinTucController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    /**
     * III. Controller & Model
     * 2. Tạo Controller: TinTucController
     * -    Chạy lệnh:
     *      +   php artisan make:controller TinTucController --resource
     */

    //  III. Controller & Model 
    // 3. Trong Controller, lấy danh sách tin tức theo điều kiện hiển thị = true
    public function index()
    {
        // Lấy danh sách tin tức theo điều kiện hien_thi = true

        // Sử dụng Query Builder (Làm việc trực tiếp với SQL thuần nhưng có cú pháp PHP)
        // $tin_tucs = DB::table('tin_tucs')
        //     ->where('hien_thi', true)
        //     ->orderBy('id', 'asc')
        //     ->paginate(10);

        //  Sử dụng Eloquent ORM (Cần tạo Model)
        $tin_tucs = TinTuc::where('hien_thi', true)
                        ->orderBy('id', 'desc')
                        ->paginate(10);
        return view('ListTinTuc', compact('tin_tucs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
