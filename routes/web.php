<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// 管理者ログイン
Route::prefix('admin')->group(function () {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login');
    Route::post('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
    Route::get('/', 'Auth\AdminController@index')->name('admin.index');
});

// 居酒屋ログイン
Route::prefix('bar')->group(function () {
    Route::get('/login', 'Auth\BarLoginController@showLoginForm')->name('bar.login');
    Route::post('/login', 'Auth\BarLoginController@login')->name('bar.login');
    Route::post('/logout', 'Auth\BarLoginController@logout')->name('bar.logout');
    Route::get('/register', 'Auth\BarRegisterController@showRegisterForm')->name('bar.register');
    Route::post('/register', 'Auth\BarRegisterController@register')->name('bar.register');
    Route::get('/', 'Auth\BarController@index')->name('bar.index');
});
