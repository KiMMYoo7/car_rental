<?php

use Illuminate\Support\Facades\Route;

Route::get('/cars', [App\Http\Controllers\CarController::class, 'index'])->name('cars.index');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/cars/create', [App\Http\Controllers\CarController::class, 'create'])->name('cars.create');
Route::post('/cars/create', [App\Http\Controllers\CarController::class, 'store'])->name('cars.store');
Route::get('/cars/{id}/edit', [App\Http\Controllers\CarController::class, 'edit'])->name('cars.edit');
