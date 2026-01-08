<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KeisController;
use App\Http\Controllers\InspectionsController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/cases', [KeisController::class, 'index'])->name('cases.index');
Route::get('/cases/{id}', [KeisController::class, 'show'])->name('cases.show');

Route::middleware('role:inspector')->group(function () {
    Route::get('/inspections/view/{username}', [InspectionsController::class, 'index'])->name('inspections.index');

    Route::get('/inspections/{id}', [InspectionsController::class, 'show'])->name('inspections.show');

    Route::get('/inspections/{id}/review', [InspectionsController::class, 'review'])->name('inspections.review');
    Route::put('/inspections/{id}', [InspectionsController::class, 'reviewed'])->name('inspections.reviewed');

});


Route::middleware('role:admin')->group(function () {
    Route::get('/users', [UserController::class, 'index'])->name('users.index');

    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/users', [UserController::class, 'store'])->name('users.store');

    Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');

    Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');

    Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
