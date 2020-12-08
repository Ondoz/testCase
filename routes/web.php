<?php

use GuzzleHttp\Middleware;
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

Auth::routes();
Route::group(['middleware' => ['web', 'auth']], function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::group(['prefix' => 'ajax', 'as' => 'ajax.'], function () {
        Route::Get('/materi', [App\Http\Controllers\MateriController::class, 'get_ajax'])->name('materiGetAll');
        Route::Post('/materi_edit', [App\Http\Controllers\MateriController::class, 'editMateri'])->name('materiEdit');

        Route::Get('/paket', [App\Http\Controllers\PaketController::class, 'get_ajax'])->name('paketGetAll');
        Route::Post('/paket_edit', [App\Http\Controllers\PaketController::class, 'editPaket'])->name('paketEdit');
    });


    Route::Resource('materi', App\Http\Controllers\MateriController::class);
    Route::Resource('paket', App\Http\Controllers\PaketController::class);
});
