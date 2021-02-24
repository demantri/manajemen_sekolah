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

Route::get('/siswa', [MasterdataController::class, 'index_siswa']);

Route::get('/guru', [MasterdataController::class, 'index_guru']);
