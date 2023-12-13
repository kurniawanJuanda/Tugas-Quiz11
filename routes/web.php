<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GolonganController;
use App\Http\Controllers\PelangganController;

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
    return view('home');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

// User Route
Route::get('/user', [UserController::class, 'index'])->name('user');

// Golongan Route
Route::get('/golongan', [GolonganController::class, 'index'])->name('golongan');
Route::get('/golongan/create', [GolonganController::class, 'create']);
Route::post('/golongan', [GolonganController::class, 'store']);
Route::get('/golongan/edit/{id}', [GolonganController::class, 'edit']);
Route::patch('/golongan/{id}', [GolonganController::class, 'update']);
Route::get('/golongan/{id}', [GolonganController::class, 'destroy']);

// Pelanggan Route
Route::get('/pelanggan', [PelangganController::class, 'index'])->name('pelanggan');
Route::get('/pelanggan/create', [PelangganController::class, 'create']);
Route::post('/pelanggan', [PelangganController::class, 'store']);
Route::get('/pelanggan/edit/{id}', [PelangganController::class, 'edit']);
Route::patch('/pelanggan/{id}', [PelangganController::class, 'update']);
Route::get('/pelanggan/{id}', [PelangganController::class, 'destroy']);
