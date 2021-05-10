<?php

use Illuminate\Support\Facades\Route;
use App\BootGridDataAdminUsers;

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
Auth::routes();
Route::get('logout', 'Auth\LoginController@logout');
Route::redirect('home', '/');
Route::view('/', 'auth.index');



Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::redirect('/','/admin/user');
//    Route::view('/users', 'admin.user');
    Route::resource('user', 'Admin\UsersController');
});


Route::middleware(['auth'])->prefix('finance')->group(function () {
//    route::redirect('/', 'financeFiles');
//    Route::get('records', 'Admin\RecordController@index');
});


Route::middleware(['auth'])->prefix('approver')->group(function () {
//    route::redirect('/', 'approverFiles');
//    Route::get('records', 'Admin\RecordController@index');
});

Route::middleware(['auth'])->prefix('user')->group(function () {
    Route::redirect('/', '/user/profile');
    Route::get('profile', 'User\ProfileController@edit');
    Route::post('profile', 'User\ProfileController@update');
//    Route::get('password', 'User\PasswordController@edit');
//    Route::post('password', 'User\PasswordController@update');
});
//--------------------------------------------------------------------------------------------------
