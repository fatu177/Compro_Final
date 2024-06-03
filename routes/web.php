<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'HomeController@index')->name('home');
Route::prefix('admin')->group(function () {
    Route::get('/', '\App\Http\Controllers\LoginController@index');
});
