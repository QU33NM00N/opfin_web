<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserFormController;

Route::get('/', function () {
    return view('home');
});

Route::post('/register', [UserController::class, 'register']);
Route::post('/logout', [UserController::class, 'logout']);
Route::post('/login', [UserController::class, 'login']);
Route::get('/loginsignup', [UserFormController::class, 'loginsignup'])->name('loginsignup');
Route::get('/login', function () {
    return view('loginsignup'); 
})->name('login');
Route::get('/home', function () {
    return view('home'); 
})->name('home');

Route::post('/form/store', [UserFormController::class, 'store'])->name('form.store');

Route::middleware(['auth'])->group(function () {
    // Main dashboard (loginsignup page)
    Route::get('/loginsignup', [UserFormController::class, 'loginsignup'])->name('loginsignup');

    // Add user form page
    Route::get('/add-user-form', [UserFormController::class, 'showForm'])->name('form.page');

    // Handle form submission
    Route::post('/submit-form', [UserFormController::class, 'store'])->name('form.store');
});

Route::get('/form/{id}/edit', [UserFormController::class, 'edit'])->name('form.edit');
Route::put('/form/{id}', [UserFormController::class, 'update'])->name('form.update');
Route::delete('/form/{id}', [UserFormController::class, 'destroy'])->name('form.destroy');

Route::get('/profile', [ProfileController::class, 'show'])->name('profile');
Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');



    