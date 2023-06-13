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

//Login
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate']);

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'store']);


Route::get('/1_manager_dashboard', [ManagerController::class, 'index']);
Route::get('/2_admingaransi_dashboard', [AdminGaransi_Controller::class, 'index']);
Route::get('/3_administrator_dashboard', [AdministratorController::class, 'index']);
Route::get('/service', [UserController::class, 'index']);


Route::get('/service', function() {
    return view('4_user_service');
});


Route::get('/input', [barangController::class, 'store']);

//landing Page
Route::get('/home', function() {
    return view('landing_page');
});


//Manager

Route::get('/managerchart', function() {
    return view('1_manager_chart');
});

Route::get('/rolemanager', function() {
    return view('1_manager_atur_role');
});


//User

Route::get('/upload', function() {
    return view('4_user_upload');
});

Route::get('/riwayat', function() {
    return view('4_user_riwayat');
});


Route::get('/statuspage', function() {
    return view('4_user_statuspage');
});

Route::get('/faq', function() {
    return view('4_user_faq');
});

Route::get('/contact', function() {
    return view('4_user_contact');
});

Route::get('/about', function() {
    return view('4_user_about');
});


