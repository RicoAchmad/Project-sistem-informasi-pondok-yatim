<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DonaturController;
use App\Http\Controllers\PemasukanController;
use App\Http\Controllers\PengeluaranController;
use App\Http\Controllers\DataAnakAsuhController;


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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

route::group(['prefix' => 'admin' , 'middleware' => ['auth']], function() {
    Route::get('/', function() {
        return view('beranda.index');
    });

    Route::resource('donatur', DonaturController::class);
    Route::resource('pemasukan', PemasukanController::class);
    Route::resource('pengeluaran', PengeluaranController::class);
    Route::resource('anak-asuh', DataAnakAsuhController::class);
});
