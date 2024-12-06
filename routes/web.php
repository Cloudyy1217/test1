<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClassController;
//Cách import: use + link trong file cần import\Ten_class đó
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

// php artisan serve (lấy link sever)
// php artisan make:controller Ten_class (tạo class trong app\Http\Controllers\Ten_class)
Route::get('/hoc-laravel', [ClassController::class, 'hello']);
Route::get('/hoc-reactjs', [ClassController::class, 'reactjs']);

Route::get('/trang-chu', [HomeController::class, 'home']);
Route::get('/thanh-vien', [HomeController::class, 'members']);
Route::get('/xoa-thanh-vien/{id}', [HomeController::class, 'deleteMember']);