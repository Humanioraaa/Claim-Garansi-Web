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

//landing Page
Route::get('/', function() {
    return view('landing_page');
});

Route::group(['middleware' => 'guestonly'], function () {
    // login register
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'authenticate']);

    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'store']);
});








Route::get('/input', [barangController::class, 'store']);




//Manager
Route::get('/1_manager_dashboard', [ManagerController::class, 'index'])->middleware('manageronly');

Route::get('/managerchart', function() {
    return view('1_manager_chart');
});

Route::get('/rolemanager', function() {
    return view('1_manager_atur_role');
});


//Admin Garansi
Route::get('/2_admingaransi_dashboard', [AdminGaransi_Controller::class, 'index'])->middleware('admingaransionly');


//Administrator
Route::get('/3_administrator_dashboard', [AdministratorController::class, 'index'])->middleware('administratoronly');


//User

Route::get('/service', [UserController::class, 'index']);


Route::get('/service', function() {
    return view('4_user_service');
})->middleware('useronly');


Route::get('/upload', function() {
    return view('4_user_upload');
})->middleware('useronly');

Route::get('/riwayat', function() {
    return view('4_user_riwayat');
})->middleware('useronly');


Route::get('/statuspage', function() {
    return view('4_user_statuspage');
})->middleware('useronly');

Route::get('/faq', function() {
    return view('4_user_faq');
})->middleware('useronly');

Route::get('/contact', function() {
    return view('4_user_contact');
})->middleware('useronly');

Route::get('/about', function() {
    return view('4_user_about');
})->middleware('useronly');


