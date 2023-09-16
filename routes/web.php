<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth', 'multiuser'])->group(function () {
    Route::resource('kategori', KategoriController::class);
    Route::resource('post', PostController::class);
    Route::resource('produk', ProdukController::class);
    Route::resource('users', UserController::class);
});

Auth::routes();

Route::get('/template', function () {
    return view('template');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
