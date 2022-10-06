<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AgamaController;

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

Route::get('/home', function () {
    return view('home');
});

Route::get('blog', [BlogController::class, 'index']);

Route::get('/template', function () {
    return view('template.masterAdminLTE');
});

Route::get('/tabel', function () {
    return view('tabel');
});

Route::get('/form', function () {
    return view('form');
});

// Data Agama
Route::get('addagama', [AgamaController::class, 'create']);
Route::POST('prosesaddagama', [AgamaController::class, 'store']);
