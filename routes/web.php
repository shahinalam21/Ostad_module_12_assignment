<?php

use Illuminate\Support\Facades\Route;

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


use App\Http\Controllers\LocationController;
use App\Http\Controllers\TripController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SeatAllocationController;

// Locations
Route::get('/locations', [LocationController::class, 'index']);

// Trips
Route::get('/trips', [TripController::class, 'index']);

// Users
Route::get('/users', [UserController::class, 'index']);

// Seat Allocations
Route::get('/seat-allocations', [SeatAllocationController::class, 'index']);