<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KeisController;
use  App\Http\Controllers\InspectionsController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/cases', [KeisController::class, "index"])->name('cases.index');
Route::get('/cases/show/{id}', [KeisController::class, "show"])->name('cases.show');
Route::get('/cases/edit/{id}', [KeisController::class, "edit"])->name('cases.edit');
Route::put('/cases/update/{id}', [KeisController::class, "update"])->name('cases.update');
Route::post('/cases/store', [KeisController::class, "store"])->name('cases.store');

Route::get('/inspections', [InspectionsController::class, "index"])->name('inspections.index');
Route::get('/inspections/show/{id}', [InspectionsController::class, 'show'])->name('inspections.show');
Route::get('/inspections/edit/{id}', [InspectionsController::class, 'edit'])->name('inspections.edit');
Route::put('/inspections/update/{id}', [InspectionsController::class, 'update'])->name('inspections.update');
Route::post('/inspections/store', [InspectionsController::class, "store"])->name('inspections.store');

Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::get('/users/show/{id}', [UserController::class, 'show'])->name('users.show');
Route::get('/users/edit/{id}', [UserController::class, 'edit'])->name('users.edit');
Route::put('/users/update/{id}', [UserController::class, "update"])->name('users.update');
Route::post('/users/store', [UserController::class, "store"])->name('users.store');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
