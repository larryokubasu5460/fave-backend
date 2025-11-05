<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GalleryController;
use Illuminate\Routing\Route;

Route::get('/gallery', [GalleryController::class, 'index']);
Route::post('/contact', [ContactController::class, 'send']);
Route::post('/bookings', [BookingController::class, 'store']);