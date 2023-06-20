<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::controller(HomeController::class)->group(function () {
    Route::get("", [HomeController::class, 'index'])->name('home.index');
    Route::get('about', [HomeController::class, 'about'])->name('home.about');
});

Route::controller(BlogController::class)->group(function () {
    Route::get('blog', [BlogController::class, 'index'])->name('blog.index');
});
