<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\RentalController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [IndexController::class, 'index'])->name('index');


Route::get('/cars', [CarController::class, 'index'])->middleware('auth')->name('cars');
Route::get('/location', [LocationController::class, 'index'])->middleware('auth')->name('locations');

// All rentals by locationID
Route::get('/rentals/{locationID}', [RentalController::class, 'index'])->middleware('auth')->name('rentals');

// Get a rental by its ID
Route::get('/rental/{id}', [RentalController::class, 'view'])->middleware('auth')->name('rental-by-id');

Auth::routes();
