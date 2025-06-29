<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlanningController;
use App\Http\Controllers\RealizationController;
use App\Http\Controllers\MasterRegionController;
use App\Http\Controllers\MasterPackageController;
use App\Http\Controllers\MasterSubActivityController;

Route::get('/', function () {
    return view('pages.welcome');
});

Route::resource('master-regions', MasterRegionController::class);

Route::resource('master-sub-activities', MasterSubActivityController::class);

Route::resource('master-packages', MasterPackageController::class);

Route::resource('plannings', PlanningController::class);

Route::resource('realizations', RealizationController::class);
