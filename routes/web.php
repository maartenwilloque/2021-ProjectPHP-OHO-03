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
    Route::resource('user', 'Admin\UsersController');
});


Route::middleware(['auth'])->prefix('finance')->group(function () {
//    https://www.digitalocean.com/community/tutorials/simple-laravel-crud-with-resource-controllers
    Route::redirect('/','/finance/parameter');
    Route::resource('parameter', 'Finance\ParameterController');
    Route::resource('parameterType', 'Finance\ParameterTypeController');
});


Route::middleware(['auth'])->prefix('approver')->group(function () {
    route::redirect('/', '/approver/expense');
    Route::resource('expense', 'Approver\ExpenseController');
});

Route::middleware(['auth'])->prefix('user')->group(function () {
    Route::redirect('/', 'user');
    Route::view('/', 'user.index');
    Route::get('profile', 'User\ProfileController@edit');
    Route::post('profile', 'User\ProfileController@update');
    Route::get('password', 'User\PasswordController@edit');
    Route::post('password', 'User\PasswordController@update');
});
//--------------------------------------------------------------------------------------------------
