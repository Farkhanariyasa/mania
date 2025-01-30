<?php

use App\Http\Controllers\AsetNonTI;
use App\Http\Controllers\AsetTI;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataFeedController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\CampaignController;
use App\Http\Controllers\Pengajuan;
use App\Http\Controllers\KelolaPengguna;
use App\Http\Controllers\KelolaRuangan;
use App\Http\Controllers\KamusMerek;
use App\Http\Controllers\Panduan;

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

Route::redirect('/', 'login');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    // Route for the getting the data feed
    Route::get('/json-data-feed', [DataFeedController::class, 'getDataFeed'])->name('json_data_feed');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/aset-ti', [AsetTI::class, 'index'])->name('aset_ti');
    Route::get('/aset-non-ti', [AsetNonTI::class, 'index'])->name('aset_non_ti');
    Route::get('/pengajuan-updating', [Pengajuan::class, 'index'])->name('pengajuan_updating');
    Route::get('/kelola-pengguna', [KelolaPengguna::class, 'index'])->name('kelola_pengguna');
    Route::get('/kelola-ruangan', [KelolaRuangan::class, 'index'])->name('kelola_ruangan');
    Route::get('/kamus-merek', [KamusMerek::class, 'index'])->name('kamus_merek');

    // panduan
    Route::get('/panduan', [Panduan::class, 'index'])->name('panduan');
});
