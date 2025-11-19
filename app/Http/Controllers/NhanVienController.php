<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NhanVienController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    /**
     * III. Controller & Model (2)
     * Tạo Controller: NhanVienController
     * Chạy lệnh php artisan make:controller NhanVienController --resource
     */

    //  III. Controller & Model (3)
    //  Trong Controller, lấy danh sách nhân viên sắp xếp theo id từ nhỏ đến lớn.
    public function index()
    {
        // Hiển thị danh sách nhân viên lấy theo id sắp xếp từ nhỏ đến lớn (asc)
        $nhan_viens = DB::table('nhan_viens')
            ->orderBy('id', 'asc')
            ->paginate(10);
        // ->get();
        return view('admin.nhanvien.ListNhanVien', compact('nhan_viens'));
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
