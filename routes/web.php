<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('site');
});

Route::get('/adm/home', function () {
    return view('adm/home');
})->middleware(['auth', 'verified'])->name('home');

Route::prefix('adm')->middleware(['auth', 'verified'])->group(function () {
    Route::resource('categorias', CategoriaController::class)->except(['create']);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
