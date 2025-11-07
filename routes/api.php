<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\MessageController;
use Illuminate\Routing\Route;

Route::get('/gallery', [GalleryController::class, 'index']);
Route::post('/contact', [ContactController::class, 'send']);
Route::post('/bookings', [BookingController::class, 'store']);

// Auth
Route::post('/login',[AuthController::class, 'login']);

// Protected Admin Routes

Route::middleware('auth:sanctum')->group(function () {
    // Gallery Admin
    Route::post('/gallery', [GalleryController::class, 'store']);
    Route::post('/gallery{id}', [GalleryController::class, 'destroy']);

    // Bookings Admin
    Route::post('/bookings', [BookingController::class, 'index']);
    Route::put('/bookings/{id}', [BookingController::class, 'update']);

    // Messages Admin
    Route::get('/Messages', [MessageController::class, 'index']);
});