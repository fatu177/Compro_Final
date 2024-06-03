<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'HomeController@index')->name('home');
Route::prefix('admin')->group(function () {
    Route::get('/', '\App\Http\Controllers\LoginController@index');
    Route::post('/', '\App\Http\Controllers\LoginController@login')->name('login.post');
    Route::get('/logout', '\App\Http\Controllers\LoginController@logout')->name('logout');
    Route::middleware(['auth'])->group(function () {
        Route::get('/dashboard', '\App\Http\Controllers\DashboardController@index')->name('dashboard');
        Route::resource('/education', '\App\Http\Controllers\EducationController');
    });
});
