<?php

use App\Http\Controllers\ComicsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ComicsController::class, 'index'])->name('Home');
Route::get('/comics/create', [ComicsController::class, 'create'])->name('comics.create');
Route::post('/comics', [ComicsController::class, 'store'])->name('comics.store');
Route::get('/comics/{id}', [ComicsController::class, 'show'])->name('comics.show');
