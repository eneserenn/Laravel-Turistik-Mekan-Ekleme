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
    Route::get('/category/add', [Admin\CategoryController::class, 'add'])->name("admincategoryadd");
    Route::post('/category/create', [Admin\CategoryController::class, 'create'])->name("admincategorycreate");
    Route::get('/category/edit/{id}', [Admin\CategoryController::class, 'edit'])->name("admincategoryedit");
    Route::post('/category/update/{id}', [Admin\CategoryController::class, 'update'])->name("admincategoryupdate");
    Route::get('/category/destroy/{id}', [Admin\CategoryController::class, 'destroy'])->name("admincategorydestroy");
});

Route::post('/panel/logincheck', [Admin\HomeController::class, 'logincheck'])->name("adminlogincheck");
Route::get('/panel/login', [Admin\HomeController::class, 'login'])->name("adminlogin");


