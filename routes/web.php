<?php

use App\Http\Controllers\NhanVienController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function() {
    return view('admin.dashboard');
});

Route::get('/danh-sach-nhan-vien', [NhanVienController::class, 'index'])->name('nhanvien.index');