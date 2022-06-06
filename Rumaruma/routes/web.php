<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/productDetail', function () {
    return view('productDetail');
})->name('productDetail');

Route::get('/success', function () {
    return view('success');
})->name('success');

Route::get('/cart', function () {
    return view('cart');
})->name('cart');

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin/dashboard');

Route::get('/admin/barang', function () {
    return view('admin.barang');
})->name('admin/barang');

Route::get('/admin/add/barang', function () {
    return view('admin.addBarang');
})->name('admin/add/barang');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
