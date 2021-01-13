<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin as Admin;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PlaceController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MessageController;
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


Route::get('/', [FrontController::class, 'index'])->name('home');
Route::get('/about-us', [FrontController::class, 'aboutus'])->name('aboutus');
Route::get('/faq', [FrontController::class, 'faq'])->name('faq');
Route::get('/contact', [FrontController::class, 'contact'])->name('contact');
Route::get('/references', [FrontController::class, 'references'])->name('references');

Route::post('/send/message', [FrontController::class, 'sendMessage'])->name('sendmessage');
Route::post('/discover', [FrontController::class, 'discover'])->name('discover');
Route::get('/category/{id}/{slug}', [FrontController::class, 'categoryelems'])->name('categoryelems');
Route::middleware('auth')->prefix('myaccount')->namespace('myaccount')->group(function(){
    Route::get('/', [UserController::class, 'userprofile'])->name('myuserprofile');


});

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::middleware('auth')->prefix('panel')->group(function(){
    Route::get('/', [Admin\HomeController::class, 'index'])->name("adminhome");
    Route::get('/logout', [Admin\HomeController::class, 'logout'])->name("adminlogout");
    Route::get('/category', [Admin\CategoryController::class, 'list'])->name("admincategorylist");
    Route::get('/category/add', [Admin\CategoryController::class, 'add'])->name("admincategoryadd");
    Route::post('/category/create', [Admin\CategoryController::class, 'create'])->name("admincategorycreate");
    Route::get('/category/edit/{id}', [Admin\CategoryController::class, 'edit'])->name("admincategoryedit");
    Route::post('/category/update/{id}', [Admin\CategoryController::class, 'update'])->name("admincategoryupdate");
    Route::get('/category/destroy/{id}', [Admin\CategoryController::class, 'destroy'])->name("admincategorydestroy");
    Route::get('/messages', [Admin\MessageController::class, 'messages'])->name('messages');
    Route::get('/message/{id}', [Admin\MessageController::class, 'messagedelete'])->name('adminmessagedelete');
    Route::get('/message/edit/{id}', [Admin\MessageController::class, 'messageedit'])->name('adminmessageedit');
    Route::post('/adminnote/save', [Admin\MessageController::class, 'adminnote'])->name('adminnote');
  
    Route::prefix("place")->group(function(){
        Route::get('/', [Admin\PlaceController::class, 'index'])->name("adminplacelist");
        Route::get('/add', [Admin\PlaceController::class, 'add'])->name("adminplaceadd");
        Route::post('/create', [Admin\PlaceController::class, 'create'])->name("adminplacecreate");
        Route::get('/destroy/{id}', [Admin\PlaceController::class, 'destroy'])->name("adminplacedestroy");
        Route::get('/edit/{id}', [Admin\PlaceController::class, 'edit'])->name("adminplaceedit");
        Route::post('/update/{id}', [Admin\PlaceController::class, 'update'])->name("adminplaceupdate");
       
    });
    Route::prefix("images")->group(function(){
        Route::get('/{id}', [Admin\ImageController::class, 'index'])->name("adminimageslist");

        Route::post('/create', [Admin\ImageController::class, 'create'])->name("adminimagescreate");
        Route::get('/destroy/{id}', [Admin\ImageController::class, 'destroy'])->name("adminimagesdestroy");
        Route::get('/edit/{id}', [Admin\ImageController::class, 'edit'])->name("adminimagesedit");
        Route::post('/update/{id}', [Admin\ImageController::class, 'update'])->name("adminimagesupdate");
    });

    Route::get('/setting', [Admin\SettingController::class, 'index'])->name("adminsetting");
    Route::post('/setting/update', [Admin\SettingController::class, 'update'])->name("adminsettingupdate");
});

Route::post('/panel/logincheck', [Admin\HomeController::class, 'logincheck'])->name("adminlogincheck");
Route::get('/panel/login', [Admin\HomeController::class, 'login'])->name("adminlogin");


