<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

Route::get('/', function () {
    if (auth()->check()) {
        // If the user is authenticated, redirect to profile
        return redirect()->route('profile');
    } else {
        // If not authenticated, redirect to login
        return view('Sign_In');
    }
});

Route::get('/signin', function () {
    return view('Sign_In');
});

Route::get('/faq', function () {
    return view('FAQ');
});

Route::get('/service_visitor', function () {
    return view('ServiceCatalogVisitor');
});

Route::get('/register', function () {
    return view('Register');
});

Route::post('/registration', [RegisteredUserController::class, 'store'])->name('registration');
Route::post('/login', [AuthenticatedSessionController::class, 'store'])->name('login');

// Protected profile route, accessible only by authenticated users
Route::middleware('auth')->group(function () {
    // Profile Overview (Main Profile Page)
    Route::get('/profile', function () {
        return view('Profile', ['user' => auth()->user()]);
    })->name('profile');
    Route::get('/rewards', function () {
        return view('Rewards', ['user' => auth()->user()]);
    })->name('rewards');
    Route::get('/appointments', function () {
        return view('Appointments', ['user' => auth()->user()]);
    })->name('appointments');
    Route::get('/servicecatalogsigned', function () {
        return view('ServiceCatalogSigned', ['user' => auth()->user()]);
    })->name('servicecatalog');
    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
});


require __DIR__.'/auth.php';
