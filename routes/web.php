<?php

use App\Http\Controllers\admin\LoaiTinController;
use App\Http\Controllers\admin\TheLoaiController;
use App\Http\Controllers\admin\TinTucController;
use App\Http\Controllers\admin\userController;
use App\Http\Controllers\admin\binhluanController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuanTriTinController;
use App\Http\Controllers\tinController;




// Route::get('/dashboard', function () {
// 	return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

// Route::get('download', function () {
// 	return view("download");
// })->middleware('auth');

// Route::get('/quantritin', [QuanTriTinController::class, 'index']);

// Route::get('quantri', function () {
// 	return view("quantri");
// })->middleware('auth', 'Quantri');

// Route::get('dl', function () {
// 	return view("download");
// })->middleware('auth.basic');

Route::get('/', [tinController::class, 'index']);
Route::get('/user', [UsersController::class, 'index']);
Route::get('/loaitin/{id}', [tinController::class, 'loaitin']);
Route::get('/chitiettin/{id}', [tinController::class, 'cttin']);
Route::post('/chitiettin', [tinController::class, 'them_bl'])->middleware('auth');
;






// +++ A D M I N _______________

Route::get('/admin', [TinTucController::class, 'them_tt'])->middleware('auth', 'Quantri');

//  tin tuc
Route::get('/admin/tintuc', [TinTucController::class, 'them_tt'])->middleware('auth', 'Quantri');
Route::post('/admin/tintuc', [TinTucController::class, 'them_tt_'])->name('tt_store')->middleware('auth', 'Quantri');
Route::get('/admin/tintuc/xoa/{id}', [TinTucController::class, 'xoa'])->middleware('auth', 'Quantri');
Route::get('/admin/tintuc_capnhat/{id}', [TinTucController::class, 'capnhat_tt'])->middleware('auth', 'Quantri');
Route::post('/admin/tintuc_capnhat/{id}', [TinTucController::class, 'capnhat_tt_'])->middleware('auth', 'Quantri');


// the loai
Route::get('/admin/theloai', [TheLoaiController::class, 'index']);
Route::post('/admin/theloai', [TheLoaiController::class, 'them_tl']);
Route::get('/admin/theloai/xoa/{id}', [TheLoaiController::class, 'xoa']);
Route::get('/admin/theloai_capnhat/{id}', [TheLoaiController::class, 'capnhat_tl']);
Route::post('/admin/theloai_capnhat/{id}', [TheLoaiController::class, 'capnhat_tl_']);


// loai tin
Route::get('/admin/loaitin', [LoaiTinController::class, 'index'])->middleware('auth', 'Quantri');
Route::post('/admin/loaitin', [LoaiTinController::class, 'them_lt'])->middleware('auth', 'Quantri');
Route::get('/admin/loaitin/xoa/{id}', [LoaiTinController::class, 'xoa'])->middleware('auth', 'Quantri');
Route::get('/admin/loaitin_capnhat/{id}', [LoaiTinController::class, 'capnhat_lt'])->middleware('auth', 'Quantri');
Route::post('/admin/loaitin_capnhat/{id}', [LoaiTinController::class, 'capnhat_lt_'])->middleware('auth', 'Quantri');


// binh luan
Route::get('/admin/binhluan', [binhluanController::class, 'index'])->middleware('auth', 'Quantri');
// Route::post('binhluan', [binhluanController::class, 'them_bl'])->middleware('auth', 'Quantri');

// thanh vien
Route::get('/admin/user', [userController::class, 'index'])->middleware('auth', 'Quantri');
Route::post('/admin/user', [userController::class, 'them_user'])->name('user_store')->middleware('auth', 'Quantri');
Route::get('/admin/user/xoa/{id}', [userController::class, 'xoa_user'])->middleware('auth', 'Quantri');
Route::get('/admin/user_capnhat/{id}', [userController::class, 'capnhat_user'])->middleware('auth', 'Quantri');
Route::post('/admin/user_capnhat/{id}', [userController::class, 'capnhat_user_'])->middleware('auth', 'Quantri');




require __DIR__ . '/auth.php';