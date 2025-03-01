<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\DangNhap;
use \App\Http\Controllers\Admin\TrangChuController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/admin', function () {
    return redirect()->route('admin');
});


Route::get('/admin',[DangNhap::class,'dangNhap'])->name('admin');
Route::post('/admin',[DangNhap::class,'kiemTraDangNhap'])->name('kiemTraDangNhap');

Route::middleware(['auth'])->group(function () {
    Route::prefix('admin')->group(function () {

            Route::get('trangchu',[TrangChuController::class,'trangChuAdmin'])->name('trangChuAdmin');

});
});
