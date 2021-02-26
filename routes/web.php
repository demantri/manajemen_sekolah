<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MasterdataController;
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

// Route::get('/', function () {
//     return view('layout.template');
// });

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
Route::get('/kelas/add', [MasterdataController::class, 'form_kelas']);
Route::post('/kelas/save', [MasterdataController::class, 'save_kelas']);
Route::get('/kelas/{id}/edit', [MasterdataController::class, 'form_edit_kelas']);
Route::post('/kelas/{id}', [MasterdataController::class, 'update_kelas']);
Route::get('/kelas/delete/{id}', [MasterdataController::class, 'delete_kelas']);


Route::get('/guru', [MasterdataController::class, 'index_guru']);
