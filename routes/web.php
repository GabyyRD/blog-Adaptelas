<?php

use App\Http\Controllers\SiteController;
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

Route::get('/', function () {
    return redirect()->route('blog.index');
});

Route::group([
    'middleware' => 'auth',
    'prefix' => '/blog'
], function() {
    Route::get('/', [\App\Http\Controllers\PostController::class, 'index'])->name('blog.index');
    Route::post('/post', [\App\Http\Controllers\PostController::class, 'store'])->name('blog.store');
    Route::delete('/post/{id}', [\App\Http\Controllers\PostController::class, 'destroy'])->name('blog.delete');
    Route::get('/post/{id}', [\App\Http\Controllers\PostController::class, 'edit'])->name('blog.edit');
    Route::put('/post/{id}', [\App\Http\Controllers\PostController::class, 'update'])->name('blog.update');

    Route::get('/profile', [\App\Http\Controllers\ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile', [\App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');

    Route::get('/home', [SiteController::class, 'index'])->name('lista.postagem');
    Route::get('/blog/post/{id}', [SiteController::class, 'post'])->name('blog.post');
});





//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


