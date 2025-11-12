<?php

use App\Http\Controllers\ImageController;
use App\Http\Controllers\InquiryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PropertyController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/propiedades', [PropertyController::class, 'index']);
Route::get('/contacto/{property_id}', [InquiryController::class, 'create']);
Route::post('/contacto', [InquiryController::class, 'store']);
Route::get('/ver-imagen/{nombreImagen}', [ImageController::class, 'show']);
Route::get('/imagenes/{property_id}', [ImageController::class, 'create']);
Route::post('/imagenes', [ImageController::class, 'store']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
