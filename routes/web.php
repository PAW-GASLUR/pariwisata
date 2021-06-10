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

// Route::get('/', function () {
//     return view('wisata');
// });

Route::get('/', [\App\Http\Controllers\WisataController::class,'index'])->name('data');

// Route::get('/galeri', function () {
//     return view('galeri');
// });

Route::get('/galeri', [\App\Http\Controllers\GaleriController::class,'index'])->name('data');

// Route::get('/informasi', function () {
//     return view('informasi');
// });

Route::get('/informasi', [\App\Http\Controllers\InformasiController::class,'index'])->name('data');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
