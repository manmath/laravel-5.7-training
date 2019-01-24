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

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::resource('/department', 'DepartmentController');
    Route::resource('/role', 'RoleController');

    Route::prefix('user')->group(function () {
        Route::get('/', 'UserController@index')->name('user.index');
        Route::get('/create', 'UserController@create')->name('user.create');
    });

    Route::prefix('file')->group(function () {
        Route::get('/', 'FileController@index')->name('file.index');
        Route::get('/upload', 'FileController@create')->name('file.create');
        Route::post('/store', 'FileController@store')->name('file.upload');
    });
});

Auth::routes();
