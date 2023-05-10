<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormulirController;
use App\Http\Controllers\TiketController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\CheckInController;
use App\Http\Controllers\KonserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tiket', [TiketController::class, 'index']);
Route::resource('formulir', FormulirController::class);

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::get('laporan', [LaporanController::class, 'index']);
Route::post('getLaporan', [LaporanController::class, 'getLaporan'])->name('laporan.getLaporan');
Route::get('laporan/cetak/{from}/{to}/{status}', [LaporanController::class, 'cetakLaporan'])->name('laporan.cetakLaporan');

Route::get('check-in', [CheckInController::class, 'index'])->name('check-in.index');
Route::get('check-in/cari', [CheckInController::class, 'cari'])->name('check-in.cari');
Route::post('check-in/updateStatus/{id}', [CheckInController::class, 'updateStatus'])->name('check-in.updateStatus');

Route::resource('setting-konser', KonserController::class);
