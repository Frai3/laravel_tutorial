<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ControllerContoh;
use App\Http\Controllers\PegawaiController;

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

Route::get('/halo', function () {
    return "Halo Semuanya!";
});

Route::get('/home', [HomeController::class, 'index']);
Route::get('/home/show_html', [HomeController::class, 'show_html']);
Route::get('/home/belajar_blade', [HomeController::class, 'belajar_blade']);
Route::get('/home/penggunaan_layout', [HomeController::class, 'penggunaan_layout']);

Route::get('/home/contoh', [HomeController::class, 'contoh']);
Route::post('/home/contoh', [HomeController::class, 'contoh_post']);

// Route::get('/contoh', [HomeController::class, 'index']);
// Route::get('/contoh/create', [HomeController::class, 'create']);
// Route::post('/contoh/create', [HomeController::class, 'store']);
Route::resource('contoh', ControllerContoh::class);

Route::resource('pegawai', PegawaiController::class);