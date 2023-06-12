<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\barangController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\AdministratorController;
use App\Http\Controllers\AdminGaransi_Controller;
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


Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate']);

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'store']);


Route::get('/1_manager_dashboard', [ManagerController::class, 'index']);
Route::get('/2_admingaransi_dashboard', [AdminGaransi_Controller::class, 'index']);
Route::get('/3_administrator_dashboard', [AdministratorController::class, 'index']);
Route::get('/service', [UserController::class, 'index']);


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