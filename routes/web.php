<?php

use App\Http\Controllers\NhanVienController;
use App\Http\Controllers\TinTucController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function() {
    return view('admin.dashboard');
});
// IV.  Route & View
// 1.   Khai báo route:/danh-sach-nhan-vien trỏ đến phương thức index của NhanVienController  
Route::get('/danh-sach-nhan-vien', [NhanVienController::class, 'index'])->name('nhanvien.index');

// IV.  Route & View
// 1.   Khai báo route:/danh-sach-tin-tuc trỏ đến phương thức index của TinTucController  
Route::get('/danh-sach-tin-tuc', [TinTucController::class, 'index'])->name('tintuc.index');
