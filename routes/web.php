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
Route::get('/contact', [FrontController::class, 'contact'])->name('contact');
Route::get('/references', [FrontController::class, 'references'])->name('references');

Route::post('/send/message', [FrontController::class, 'sendMessage'])->name('sendmessage');
Route::post('/discover', [FrontController::class, 'discover'])->name('discover');
Route::get('/category/{id}/{slug}', [FrontController::class, 'categoryelems'])->name('categoryelems');
Route::get('/mekan/{id}/{slug}', [FrontController::class, 'place_detail'])->name('placedetail');
Route::post('/getproduct', [FrontController::class, 'getproduct'])->name('getproduct');
Route::get('/user_comments', [FrontController::class, 'usercomments'])->name('usercomments');
Route::get('/deletecommentuser/{id}', [FrontController::class, 'deletecommentuser'])->name('deletecommentuser');
Route::get('/sharedplaces', [FrontController::class, 'sharedplaces'])->name('sharedplaces');
Route::get('/deleteplaceuser/{id}', [FrontController::class, 'deleteplaceuser'])->name('deleteplaceuser');
Route::get('/addplaceuser', [FrontController::class, 'addplaceuser'])->name('addplaceuser');
Route::post('/createplaceuser', [FrontController::class, 'createplaceuser'])->name('createplaceuser');
Route::get('/editplaceuser/{id}', [FrontController::class, 'editplaceuser'])->name('editplaceuser');
Route::post('/changeplaceuser', [FrontController::class, 'changeplaceuser'])->name('changeplaceuser');
Route::get('/faq', [FrontController::class, 'faq'])->name('faq_front');
Route::middleware('auth')->prefix('myaccount')->namespace('myaccount')->group(function () {
    Route::get('/', [UserController::class, 'userprofile'])->name('myuserprofile');
});

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

Route::middleware('auth')->prefix('panel')->group(function () {
    Route::middleware('panel')->group(function () {
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
        Route::get('/reviews', [Admin\ReviewController::class, 'index'])->name('reviews');
        Route::get('/reviews/edit/{id}', [Admin\ReviewController::class, 'edit'])->name('reviewedit');
        Route::post('/reviews/editstatus', [Admin\ReviewController::class, 'editstatus'])->name('editstatus');

        Route::prefix("place")->group(function () {
            Route::get('/', [Admin\PlaceController::class, 'index'])->name("adminplacelist");
            Route::get('/add', [Admin\PlaceController::class, 'add'])->name("adminplaceadd");
            Route::post('/create', [Admin\PlaceController::class, 'create'])->name("adminplacecreate");
            Route::get('/destroy/{id}', [Admin\PlaceController::class, 'destroy'])->name("adminplacedestroy");
            Route::get('/edit/{id}', [Admin\PlaceController::class, 'edit'])->name("adminplaceedit");
            Route::post('/update/{id}', [Admin\PlaceController::class, 'update'])->name("adminplaceupdate");
        });
        Route::prefix("faq")->group(function () {
            Route::get('/', [Admin\FaqController::class, 'index'])->name("faqlist");
            Route::get('/add', [Admin\FaqController::class, 'add'])->name("faqadd");
            Route::post('/create', [Admin\FaqController::class, 'create'])->name("faqcreate");
            Route::get('/destroy/{id}', [Admin\FaqController::class, 'destroy'])->name("faqdestroy");
            Route::get('/edit/{id}', [Admin\FaqController::class, 'edit'])->name("faqedit");
            Route::post('/update/{id}', [Admin\FaqController::class, 'update'])->name("faqupdate");
        });
        Route::prefix("images")->group(function () {
            Route::get('/{id}', [Admin\ImageController::class, 'index'])->name("adminimageslist");

            Route::post('/create', [Admin\ImageController::class, 'create'])->name("adminimagescreate");
            Route::get('/destroy/{id}', [Admin\ImageController::class, 'destroy'])->name("adminimagesdestroy");
            Route::get('/edit/{id}', [Admin\ImageController::class, 'edit'])->name("adminimagesedit");
            Route::post('/update/{id}', [Admin\ImageController::class, 'update'])->name("adminimagesupdate");
        });
        Route::prefix("users")->group(function () {
            Route::get('/', [Admin\UserController::class, 'index'])->name("userlist");

            Route::post('/create', [Admin\UserController::class, 'create'])->name("adminimagescreate");
            Route::get('/destroy/{id}', [Admin\UserController::class, 'destroy'])->name("adminimagesdestroy");
            Route::get('/edit/{id}', [Admin\UserController::class, 'edit'])->name("adminimagesedit");
            Route::post('/update/{id}', [Admin\UserController::class, 'update'])->name("adminimagesupdate");
            Route::get('/userrole/{id}', [Admin\UserController::class, 'user_roles'])->name("admin_user_roles");
            Route::get('/deleteuserrole/{user_id}/{role_id}', [Admin\UserController::class, 'delete_user_role'])->name("delete_user_role");
            Route::post('/adduserrole', [Admin\UserController::class, 'add_user_role'])->name("add_user_role");
            Route::get('/edituser/{id}', [Admin\UserController::class, 'edit_user'])->name("edit_user");
            Route::post('/updateuser', [Admin\UserController::class, 'update_user'])->name("update_user");
            Route::get('/deleteuser/{id}', [Admin\UserController::class, 'delete_user'])->name("delete_user");
            Route::get('/showuser/{id}', [Admin\UserController::class, 'show_user'])->name("show_user");
        });

        Route::get('/setting', [Admin\SettingController::class, 'index'])->name("adminsetting");
        Route::post('/setting/update', [Admin\SettingController::class, 'update'])->name("adminsettingupdate");
    });
});

Route::post('/panel/logincheck', [Admin\HomeController::class, 'logincheck'])->name("adminlogincheck");
Route::get('/panel/login', [Admin\HomeController::class, 'login'])->name("adminlogin");
