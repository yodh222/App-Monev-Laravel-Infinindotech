<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.welcome');
});

Route::resource('master-daerahs', \App\Http\Controllers\MasterDaerahController::class);

Route::resource('master-sub-kegiatans', \App\Http\Controllers\MasterSubKegiatanController::class);

Route::resource('master-pakets', \App\Http\Controllers\MasterPaketController::class);

Route::resource('perencanaans', \App\Http\Controllers\PerencanaanController::class);

Route::resource('realisasis', \App\Http\Controllers\RealisasiController::class);