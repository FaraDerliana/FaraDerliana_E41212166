<?php

use App\Http\Controllers\PariwisataController;
// use App\Models\Pariwisata;
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

Route::get('/', function () {
    return view('create');
});
Route::post('/create', [PariwisataController::class, 'create'])->name('create');

Route::get('/tampildata', [PariwisataController::class, 'tampildata'])->name('tampildata');

Route::get('/delete/{id}', [PariwisataController::class, 'delete'])->name('delete');

Route::get('/tampilupdate/{id}', [PariwisataController::class, 'tampilupdate'])->name('tampilupdate');

Route::post('/update/{id}', [PariwisataController::class, 'update'])->name('update');
