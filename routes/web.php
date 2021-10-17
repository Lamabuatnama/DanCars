<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Router;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\beli_cashController;
use App\Http\Controllers\PembeliController;



Route::get('/',[HomeController::class, 'index']);
Route::resource('tambah', MobilController::class);
Route::resource('cash', beli_cashController::class);
Route::resource('pembeli', PembeliController::class);
Route::get('faktur/cash/{cash}', [beli_cashController::class, 'faktur']);


