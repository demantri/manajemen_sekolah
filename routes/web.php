<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\MasterdataController;
use App\Http\Controllers\AbsensiController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('layout.template');
// });

Route::get('/absensi_pegawai', [AbsensiController::class, 'absensi_pegawai'])->name('absensi_pegawai');
Route::get('/absensi_murid', [AbsensiController::class, 'absensi_murid'])->name('absensi_murid');

Route::get('/', [DashboardController::class, 'index']);
Route::get('/user', [MasterdataController::class, 'index_user']);
Route::post('/user/save', [MasterdataController::class, 'save_user']);

// siswa
Route::get('/siswa', [MasterdataController::class, 'index_siswa']);
Route::get('/siswa/add', [MasterdataController::class, 'form_siswa']);
Route::post('/siswa/save', [MasterdataController::class, 'save_siswa']);
Route::get('/siswa/{id}/edit', [MasterdataController::class, 'form_edit_siswa']);
Route::post('/siswa/{id}', [MasterdataController::class, 'update_siswa']);
Route::get('/siswa/delete/{id}', [MasterdataController::class, 'delete_siswa']);

// kelas
Route::get('/kelas', [MasterdataController::class, 'index_kelas']);
Route::post('/kelas/save', [MasterdataController::class, 'save_kelas']);
Route::post('/kelas/{id}', [MasterdataController::class, 'update_kelas']);
Route::get('/kelas/delete/{id}', [MasterdataController::class, 'delete_kelas']);

// status
Route::get('/status', [MasterdataController::class, 'index_status']);
Route::post('/status/save', [MasterdataController::class, 'save_status']);
Route::post('/status/{id}', [MasterdataController::class, 'update_status']);
Route::get('/status/delete/{id}', [MasterdataController::class, 'delete_status']);

// tahun_ajaran
Route::get('/tahun_ajaran', [MasterdataController::class, 'index_tahun_ajaran']);
Route::post('/tahun_ajaran/save', [MasterdataController::class, 'save_tahun_ajaran']);
Route::post('/tahun_ajaran/{id}', [MasterdataController::class, 'update_tahun_ajaran']);
Route::get('/tahun_ajaran/delete/{id}', [MasterdataController::class, 'delete_tahun_ajaran']);



Route::get('/guru', [MasterdataController::class, 'index_guru']);


Route::get('/event', [EventController::class, 'index']);
Route::get('/agenda', [EventController::class, 'data']);
