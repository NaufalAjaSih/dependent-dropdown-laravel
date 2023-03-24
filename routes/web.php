<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CityController;
use App\Http\Controllers\ProvinceController;
use App\Http\Controllers\CityDropdownController;
use App\Http\Controllers\DistrictDropdownController;

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

Route::resource('province', ProvinceController::class);
Route::get('city/getCityList/{id}', CityDropdownController::class)->name('city.getCityList');
Route::get('city/get-district-list/{id}', DistrictDropdownController::class)->name('city.get-district-list');
Route::resource('city', CityController::class);
