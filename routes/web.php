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
Auth::routes();
Route::get('logout', 'Auth\LoginController@logout');
Route::redirect('home', '/');
Route::view('/', 'auth.login');

//--------------------------------------------------------------------------------------------------
//middleware classen nog toe te voegen !
//zie cursus https://itf-laravel.netlify.app/laravel_7/auth.html#protecting-routes
//--------------------------------------------------------------------------------------------------
//Deze kunnen we gebruiken om dingen af te schermen van gewone docenten bijv enkel voor admin
Route::middleware(['auth'])->prefix('admin')->group(function () {
//    route::redirect('/', 'admin files');
//    Route::get('records', 'Admin\RecordController@index');
});

//Deze kunnen we gebruiken om dingen af te schermen van gewone docenten bijv enkel voor finance
Route::middleware(['auth'])->prefix('finance')->group(function () {
//    route::redirect('/', 'financeFiles');
//    Route::get('records', 'Admin\RecordController@index');
});

//Deze kunnen we gebruiken om dingen af te schermen van gewone docenten bijv enkel voor approver
Route::middleware(['auth'])->prefix('approver')->group(function () {
//    route::redirect('/', 'approverFiles');
//    Route::get('records', 'Admin\RecordController@index');
});
Route::middleware(['auth'])->prefix('user')->group(function () {
    Route::redirect('/', 'user/profile');
    Route::get('profile', 'User\ProfileController@edit');
    Route::post('profile', 'User\ProfileController@update');
    Route::get('password', 'User\PasswordController@edit');
    Route::post('password', 'User\PasswordController@update');
});
//--------------------------------------------------------------------------------------------------
