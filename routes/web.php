<?php

use App\Http\Controllers\dokterController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\pembayaranController;
use App\Http\Controllers\petugasController;
use App\Models\petugas;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('Pasien', [PasienController::class, 'page'])->name('pasien');
Route::get('Dokter', [dokterController::class, 'page'])->name('dokter');
Route::get('Petugas', [petugasController::class, 'page'])->name('petugas');
Route::get('Pembayaran', [pembayaranController::class, 'page'])->name('pembayaran');


require __DIR__.'/auth.php';
