<?php

use App\Models\barang;
use App\Models\product;
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

Route::get('/admin/admin', function () {
    return view('admin.admin');
})->name('admin.admin');


Route::get('welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('/admin/admin', function () {
    return view('admin.admin', [
    "barang" => product::all()
    ]);
})->name('admin.admin');
