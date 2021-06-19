<?php

use Illuminate\Support\Facades\Route;

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


Route::get('admin/login', function () {
    return view('admin/login');
});



Route::get('/admin/Announcemen', function () {
    return view('admin/adminAnnouncement');
});

Route::get('/admin/editprofile', function () {
    return view('admin/adminEditProfile');
});

Route::get('/admin/home', function () {
    return view('admin/adminHome');
});

Route::get('/admin/userreports', function () {
    return view('admin/adminUserReports');
});

Route::get('/admin/ViewAllTransaction', function () {
    return view('admin/adminViewAllTransaction');
});

Route::get('/admin/ViewAllUserInfo', function () {
    return view('admin/adminViewAllUserInfo');
});



// seller

Route::get('/seller/login', function () {
    return view('seller/login');
});
Route::get('/seller/register', function () {
    return view('seller/sellerRegister');
});
Route::get('/seller/applyforprimeseller', function () {
    return view('seller/applyForPrimeSeller');
});
Route::get('/seller/createsellpost', function () {
    return view('seller/CreateSellPost');
});
Route::get('/seller/myposts', function () {
    return view('seller/myposts');
});
Route::get('/seller/contactsupport', function () {
    return view('seller/sellerContactSupport');
});



// user or buyer
// Route::get('/user/editProfile', function () {
//     return view('user/editProfile');
// });
// Route::get('/user/history', function () {
//     return view('user/history');
// });
// Route::get('/user/register', function () {
//     return view('user/userRegister');
// });
// Route::get('/user/Home', function () {
//     return view('user/userHome');
// });
Route::get('/user/Home', [App\Http\Controllers\UserController::class,'index']);

Route::get('/user/editProfile', [App\Http\Controllers\UserController::class,'edit']);

Route::get('/user/history', [App\Http\Controllers\UserController::class,'history']);

Route::get('/user/register', [App\Http\Controllers\UserController::class,'register']);

Route::get('/user/detailsHistory', [App\Http\Controllers\UserController::class,'detailsHistory'])->name('detailsOrder');
Route::get('/user/follow', [App\Http\Controllers\UserController::class,'follow']);
// Route::get('/user/list', [App\Http\Controllers\UserController::class,'list']);
// Route::get('/user/create', [App\Http\Controllers\UserController::class,'create'] )->name('user.create');
// Route::post('/user/create', [App\Http\Controllers\UserController::class,'insert'] )->name('user.insert');


// Home
Route::get('/home/index', function () {
    return view('home/index');
});
