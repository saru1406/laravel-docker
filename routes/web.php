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

Route::get('/my_page', 'Public\UserController@show')->name('my_page');
Route::get('/my_page/edit', 'Public\UserController@edit')->name('my_page.edit');
Route::patch('/my_page', 'Public\UserController@update')->name('my_page');

Route::prefix('public')->group(function () {
    Route::resource('/bars',Public\BarController::class, ['only'=>['index','show']]);
    Route::resource('/reviews',public\ReviewController::class, ['only'=>['show','store','edit','update','delete']]);
});

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
