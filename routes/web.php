<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\barangController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/service', function() {
    return view('service');
});


Route::get('/input', [barangController::class, 'store']);

Route::get('/upload', function() {
    return view('upload');
});

Route::get('/riwayat', function() {
    return view('riwayat');
});