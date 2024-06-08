<?php



use App\Http\Controllers\KegiatanController;

use App\Http\Controllers\SuratController;

use Illuminate\Support\Facades\Route;



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
    return view('base.dashboard');
});



Route::get('/surat', [SuratController::class, 'index'])->name('surat.index');

Route::get('/surat/create', [SuratController::class, 'create'])->name('surat.create');

Route::post('/surat/store', [SuratController::class, 'store'])->name('surat.store');

Route::get('/surat/edit/{id}', [SuratController::class, 'edit'])->name('surat.edit');

Route::put('/surat/update/{id}', [SuratController::class, 'update'])->name('surat.update');

Route::get('/surat/show', [SuratController::class, 'show'])->name('surat.show');

Route::delete('/surat/destroy/{id}', [SuratController::class, 'destroy'])->name('surat.destroy');



Route::get('/kegiatan', [KegiatanController::class, 'index'])->name('kegiatan.index');

Route::get('/kegiatan/create', [KegiatanController::class, 'create'])->name('kegiatan.create');

Route::post('/kegiatan/store', [KegiatanController::class, 'store'])->name('kegiatan.store');

Route::get('/kegiatan/edit/{id}', [KegiatanController::class, 'edit'])->name('kegiatan.edit');

Route::put('/kegiatan/update/{id}', [KegiatanController::class, 'update'])->name('kegiatan.update');

Route::get('/kegiatan/show', [KegiatanController::class, 'show'])->name('kegiatan.show');

Route::delete('/kegiatan/destroy/{id}', [KegiatanController::class, 'destroy'])->name('kegiatan.destroy');



Route::get('/keterangan', [KeteranganController::class, 'index'])->name('keterangan.index');

Route::get('/keterangan/create', [KeteranganController::class, 'create'])->name('keterangan.create');

Route::post('/keterangan/store', [KeteranganController::class, 'store'])->name('keterangan.store');

Route::get('/keterangan/edit/{id}', [KeteranganController::class, 'edit'])->name('keterangan.edit');

Route::put('/keeterangan/update/{id}', [KeteranganController::class, 'update'])->name('keterangan.update');

Route::get('/keterangan/show', [KeteranganController::class, 'show'])->name('keterangan.show');

Route::delete('/keterangan/destroy/{id}', [KeteranganController::class, 'destroy'])->name('keterangan.destroy');



Route::view('dashboard','base.dashboard');