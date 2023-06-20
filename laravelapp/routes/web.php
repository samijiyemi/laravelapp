<?php

use App\Http\Controllers\FallbackController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Barryvdh\Debugbar\Facades\Debugbar;
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

// Homepage
Route::get("", HomeController::class);

Route::prefix('blog')->group(function () {
    // GET
    Route::get('', [PostController::class, 'index'])->name('blog.index');
    Route::get('/{id}', [PostController::class, 'show'])->name('blog.show');

    // POST
    Route::get('/create', [PostController::class, 'create'])->name('blog.create');
    Route::post('', [PostController::class, 'store'])->name('blog.store');

    // PUT OR PATCH
    Route::get('/{id}/edit', [PostController::class, 'edit'])->name('blog.edit');
    Route::patch('/{id}', [PostController::class, 'update'])->name('blog.update');

    // Delete
    Route::delete('/{id}', [PostController::class, 'destroy'])->name('blog.destroy');
});

// FallBack Controller
Route::fallback(FallbackController::class);
