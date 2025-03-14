<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PoolController;
use App\Http\Controllers\PoolMemberController;
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
Route::middleware('auth')->group(function() {
    Route::post('/pools', [PoolController::class, 'store']); //create new pool
    Route::get('/pools', [PoolController::class, 'index']); //list all pools
    Route::get('/pools/{pool}', [PoolController::class, 'show']); //show a specific pool
    Route::patch('/pools/{pool}/accept/{user}', [PoolController::class, 'acceptRequest']); // Accept join request (pool creator only)
});

//Pool member routes 
Route::post('/pools/{pool}/join', [PoolMemberController::class, 'joinPool']); // Send a join request

require __DIR__.'/auth.php';