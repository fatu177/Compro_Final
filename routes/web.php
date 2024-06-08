<?php

use App\Http\Middleware\AuthMiddleware;
use Illuminate\Support\Facades\Route;



// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', '\App\Http\Controllers\HomeController@index')->name('home');

Route::prefix('admin')->group(function () {
    Route::get('/', '\App\Http\Controllers\LoginController@index')->name('login');
    Route::post('/', '\App\Http\Controllers\LoginController@login')->name('login.post');

    Route::middleware([AuthMiddleware::class])->group(function () {
        Route::resource('/dashboard', '\App\Http\Controllers\DashboardController');
        Route::resource('/education', '\App\Http\Controllers\EducationController');
        Route::resource('/experience', '\App\Http\Controllers\ExperienceController');
        Route::resource('/skill', '\App\Http\Controllers\SkillController');
        Route::resource('/profile', '\App\Http\Controllers\ProfileController');
        Route::resource('/project', '\App\Http\Controllers\ProjectController');
        Route::post('/logout', '\App\Http\Controllers\LoginController@logout')->name('logout');
    });
});
