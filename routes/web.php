<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin as Admin;
use App\Http\Controllers\Admin\CategoryController;
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

Route::get('/', function () {
    return view('home.index');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware('auth')->prefix('panel')->group(function(){
    Route::get('/', [Admin\HomeController::class, 'index'])->name("adminhome");
    Route::get('/logout', [Admin\HomeController::class, 'logout'])->name("adminlogout");
    Route::get('/category', [Admin\CategoryController::class, 'list'])->name("admincategorylist");
  
});

Route::post('/panel/logincheck', [Admin\HomeController::class, 'logincheck'])->name("adminlogincheck");
Route::get('/panel/login', [Admin\HomeController::class, 'login'])->name("adminlogin");


