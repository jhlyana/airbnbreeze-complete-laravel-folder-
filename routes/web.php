<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\NotificationController;

// Home page with property listings
Route::get('/', [PropertyController::class, 'index'])->name('home');

// Property details page
Route::get('/property/{id}', [PropertyController::class, 'show'])->name('property.show');

// Booking routes
Route::get('/bookings', [BookingController::class, 'index'])->name('bookings.index');
Route::get('/bookings/{id}', [BookingController::class, 'show'])->name('bookings.show');

// Request booking process
Route::post('/property/{id}/book', [BookingController::class, 'book'])->name('bookings.book');
Route::post('/property/{id}/process-booking', [BookingController::class, 'processBooking'])->name('bookings.process');
Route::get('/property/{id}/cancel-request', [BookingController::class, 'cancelRequest'])->name('bookings.cancel-request');

// Cancel existing booking
Route::post('/bookings/{id}/cancel', [BookingController::class, 'cancel'])->name('bookings.cancel');

// Notifications
Route::prefix('notifications')->group(function () {
    Route::get('/', [NotificationController::class, 'index'])->name('notifications.index');
    Route::post('/{id}/read', [NotificationController::class, 'markAsRead'])->name('notifications.markAsRead');
    Route::post('/mark-all-read', [NotificationController::class, 'markAllAsRead'])->name('notifications.markAllAsRead');
    Route::delete('/{id}', [NotificationController::class, 'delete'])->name('notifications.delete');
});

// Favorites page
Route::get('/favorites', function () {
    return view('pages.Favorites');
})->name('favorites');

// About Us page
Route::get('/about', function () {
    return view('pages.AboutUs');
})->name('about');

// Help Center page
Route::get('/help', function () {
    return view('pages.HelpCenter');
})->name('help');

// Fallback route
Route::fallback(function () {
    return view('pages.404');
});