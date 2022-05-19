<?php

use App\Http\Controllers\dokterController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\pembayaranController;
use App\Http\Controllers\petugasController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('dokter-get', [dokterController::class, 'get_dokter']);
Route::Post('dokter-create', [dokterController::class, 'create_dokter']);
Route::Post('dokter-edit/{id}', [dokterController::class, 'store_dokter']);
Route::get('dokter-hapus/{id}', [dokterController::class, 'hapus_dokter']);

Route::get('pasien-get', [PasienController::class, 'get_pasien']);
Route::Post('pasien-create', [PasienController::class, 'create_pasien']);
Route::Post('pasien-edit/{id}', [PasienController::class, 'store_pasien']);
Route::get('pasien-hapus/{id}', [PasienController::class, 'hapus_pasien']);

Route::get('pembayaran-get', [pembayaranController::class, 'get_pembayaran']);
Route::Post('pembayaran-create', [pembayaranController::class, 'create_pembayaran']);
Route::Post('pembayaran-edit/{id}', [pembayaranController::class, 'store_pembayaran']);
Route::get('pembayaran-hapus/{id}', [pembayaranController::class, 'hapus_pembayaran']);

Route::get('petugas-get', [petugasController::class, 'get_petugas']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('create', [petugasController::class, 'daftar']);
