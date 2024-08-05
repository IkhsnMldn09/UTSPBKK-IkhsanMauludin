<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NamaTandatgnController;
use App\Http\Controllers\KepalaSuratController;
use App\Http\Controllers\suratKeluarController;
use App\Http\Controllers\suratmasukController;

Route::resource('users', UserController::class);
Route::resource('tanda_tgns',NamaTandatgnController::class);
Route::resource('kepala_surats', KepalaSuratController::class);
Route::resource('surat_keluars', suratkeluarController::class);
Route::resource('surat_masuks', suratmasukController::class);

Route::get('/', function () {
    return view('welcome');
});
