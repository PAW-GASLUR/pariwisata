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
Route::get('/galeri', function () {
    return view('galeri');
});
Route::get('/informasi', function () {
    return view('informasi');
});



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
