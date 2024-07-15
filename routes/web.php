<?php

use App\Http\Controllers\ComicsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ComicsController::class, 'index'])->name('Home');
Route::get('/comics/create', [ComicsController::class, 'create'])->name('comics.create');
Route::post('/comics', [ComicsController::class, 'store'])->name('comics.store');
Route::get('/comics/{id}', [ComicsController::class, 'show'])->name('comics.show');
Route::get('/comics/{id}/edit', [ComicsController::class, 'edit'])->name('comics.edit');
Route::put('/comics/{id}', [ComicsController::class, 'update'])->name('comics.update');
Route::delete('/comics/{id}', [ComicsController::class, 'destroy'])->name('comics.destroy');
