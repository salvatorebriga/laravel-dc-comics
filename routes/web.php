<?php

use App\Http\Controllers\ComicsController;
use App\Models\Comic;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [ComicsController::class, 'index'])->name('Home');
Route::get('/comics/{id}', [ComicsController::class, 'show'])->name('comics.show');
