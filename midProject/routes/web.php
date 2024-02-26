<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KaryawanController;

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

Route::get('/', [KaryawanController::class, 'view'])->name('show');

Route::get('/create', [KaryawanController::class, 'create'])->name('create');

Route::post('/store', [KaryawanController::class, 'store'])->name('store');

Route::get('/edit/{id}', [KaryawanController::class, 'edit'])->name('edit');

Route::patch('/update/{id}', [KaryawanController::class, 'update'])->name('update');

Route::delete('/delete/{id}',  [KaryawanController::class, 'delete'])->name('delete');
