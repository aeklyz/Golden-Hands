<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\RewardController;
use App\Http\Controllers\BookingController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ServiceController::class, 'showCatalog'])->name('customer.catalog');
Route::get('/service-catalog', [ServiceController::class, 'showCatalog'])->name('customer.catalog');
Route::get('/service-detail/{serviceName}', [ServiceController::class, 'showServiceDetail']);
Route::get('/faq', function () {
    return view('faq');
})->name('faq');

Route::middleware(['auth', 'verified', 'customer'])->group(function () {

    Route::get('/appointments', function () {
        return view('appointments');
    })->name('customer.appointments');

    Route::get('/rewards', [RewardController::class, 'index'])->name('customer.rewards');
    Route::get('/checkout', [BookingController::class, 'showCheckout'])->name('customer.checkout');
    Route::get('/cart', [RewardController::class, 'index'])->name('customer.cart');

});

Route::middleware(['auth', 'staff'])->group(function () {
    Route::get('/history', [BookingController::class, 'showBookingSchedule'])->name('staff.history');
    Route::get('/report', [BookingController::class, 'showCheckout'])->name('staff.report');
    Route::get('/schedule', [RewardController::class, 'index'])->name('staff.schedule');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
