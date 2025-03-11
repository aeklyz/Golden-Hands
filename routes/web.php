<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\RewardController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ChatbotController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ServiceController::class, 'showCatalog']);
Route::get('/service-catalog', [ServiceController::class, 'showCatalog'])->name('customer.catalog');
Route::get('/service-detail/{serviceName}', [ServiceController::class, 'showServiceDetail']);
Route::get('/faq', function () {
    return view('faq');
})->name('faq');
Route::post('/chat', [ChatbotController::class, 'handle']);

Route::middleware(['auth', 'verified', 'customer'])->group(function () {
    Route::get('/upcomingappointments', [BookingController::class, 'upcomingAppointments'])->name('customer.upcomingappointments');
    Route::get('/previousappointments', [BookingController::class, 'previousAppointments'])->name('customer.previousappointments');

    Route::get('/checkout/{id}', [BookingController::class, 'showCheckout'])->name('customer.checkout');
    Route::get('/cart', [BookingController::class, 'showUnpaid'])->name('customer.cart');

    Route::get('/rewards', [RewardController::class, 'index'])->name('customer.rewards');
    Route::post('/redeem/{id}', [RewardController::class, 'redeem'])->name('customer.redeem');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/bookings', [BookingController::class, 'create'])->name('bookings.create');

    // Handle form submission (POST request)
    Route::post('/bookings', [BookingController::class, 'store'])->name('bookings.store');
    Route::delete('/booking/{booking}', [BookingController::class, 'destroy'])->name('booking.destroy');
});

Route::middleware(['auth', 'staff'])->group(function () {
    Route::get('/staff/history', [BookingController::class, 'staffHistory'])->name('staff.history');
    Route::get('/staff/report', [BookingController::class, 'staffSchedule'])->name('staff.report');
    Route::get('/staff/schedule', [BookingController::class, 'staffSchedule'])->name('staff.schedule');
});

require __DIR__.'/auth.php';
