<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IKUController;
use App\Http\Controllers\BiroController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PokjaController;
use App\Http\Controllers\KegiatanController;


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

Route::get('/',[HomeController::class, 'index']);

Route::get('/iku', [IKUController::class, 'index']);

Route::get('/kegiatan', [KegiatanController::class, 'index']);

Route::get('/biro', [BiroController::class, 'index']);

Route::get('/pokja', [PokjaController::class, 'index']);