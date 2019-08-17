<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


// 会員登録API
Route::post('/register', 'Auth\RegisterController@register')->name('register');

// ログインAPI
Route::post('/login', 'Auth\LoginController@login')->name('login');

// ログアウトAPI
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

// ログインユーザ確認
Route::get('/user', function () {
    return Auth::user();
})->name('user');

// 写真投稿
Route::post('/photos', 'PhotoController@create')->name('photo.create');

// 写真一覧
Route::get('/photos', 'PhotoController@index')->name('photo.index');