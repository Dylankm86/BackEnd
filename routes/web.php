<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InstructeurController;
use App\Http\Controllers\VoertuigController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/instructeurs', [InstructeurController::class, 'index'])->name('instructeurs.index');
Route::get('/instructeurs/{instructeur}', [InstructeurController::class, 'show'])->name('instructeurs.show');
Route::get('/voertuigen/{voertuig}/edit', [VoertuigController::class, 'edit'])->name('voertuigen.edit');
Route::put('/voertuigen/{voertuig}', [VoertuigController::class, 'update'])->name('voertuigen.update');
