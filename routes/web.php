<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PoolController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//Pool Routes
Route::middleware('auth:sanctum')->group(function() {
    Route::post('/pools', [PoolController::class, 'createPool']);
    Route::get('/pools', [PoolController::class, 'listPools']);
    Route::get('/pools/{pool}', [PoolController::class, 'showPool']);
});

require __DIR__.'/auth.php';