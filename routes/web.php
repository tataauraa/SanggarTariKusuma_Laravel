<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\JadwalController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PenariController;

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

Route::resource('jadwal', JadwalController::class);

Route::get('/dashboard', [Controller::class, 'dashboard'])->name('dashboard');

Route::get('/penaris', [PenariController::class, 'index'])->name('penari.index');
Route::get('/penaris/create', [PenariController::class, 'create'])->name('penari.create');
Route::post('/penaris/store', [PenariController::class, 'store'])->name('penari.store');
Route::get('/penaris/edit/{id}', [PenariController::class, 'edit'])->name('penari.edit');
Route::post('/penaris/update/{id}', [PenariController::class, 'update'])->name('penari.update');
Route::get('/penaris/delete/{id}', [PenariController::class, 'delete'])->name('penari.delete');
Route::delete('/penaris/destroy/{id}', [PenariController::class, 'destroy'])->name('penari.destroy');

Route::get('/', function () {
    return view('welcome');
});
