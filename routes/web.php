<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

use App\Http\Controllers\BookController;

Route::get('/', [BookController::class, 'index'])->name('home');  // Trang chủ
Route::get('/category/{id}', [BookController::class, 'category'])->name('category');  // Sách theo loại
Route::get('/book/{id}', [BookController::class, 'show'])->name('book.show');  // Chi tiết sách
