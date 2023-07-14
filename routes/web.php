<?php

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\RoleManager;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\barangController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\ApprovelController;
use App\Http\Controllers\AdminGaransi_Controller;
use App\Http\Controllers\AdministratorController;
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

Route::get('/test-database-connection', function () {
    try {
        $results = DB::select('SELECT * FROM barang');
        // If the query runs successfully, it means the database connection is working.
        // You can also perform other operations on the $results if needed.

        dd($results); // Dump and display the query results
    } catch (Exception $e) {
        // If an exception occurs, it means there is an issue with the database connection.
        dd($e->getMessage()); // Dump and display the error message
    }
});



Route::get('/home', function() {
    return view('landing_page');
});

Route::get('/helpdesk', function() {
    return view('helpdesk-index');
});


//Guest Routes

    Route::get('/', function() {
        return view('landing_page');
    });



    // login register
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'authenticate']);

    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'store']);
    Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');



    Route::middleware('auth', 'guestonly')->group(function () {

        Route::get('/403', function() {
            return view('auth-403');
        });
    });


//Manager

Route::middleware('auth', 'manageronly')->group(function () {

    Route::get('1_manager_dashboard', [ManagerController::class, 'index']);

    Route::get('1_manager_staff', [ManagerController::class, 'staff_stat']);

    Route::get('/1_manager_staffdetail/{id}', [ManagerController::class, 'rerata'])->name('detail');
});



//Admin Garansi

Route::middleware('auth', 'admingaransionly')->group(function () {

        Route::get('/2_admingaransi_dashboard', [AdminGaransi_Controller::class, 'index']);
        Route::get('/2_admingaransi_status', [AdminGaransi_Controller::class,'tampil'])->name('viewkomplain');
        Route::get('/2_admin_garansi_edit/{id}', [AdminGaransi_Controller::class, 'edit'])->name('edit');
        Route::post('/2_admin_garansi_edit/{id}', [AdminGaransi_Controller::class, 'store'])->name('edit_submit');

    });


//Administrator


Route::middleware('auth', 'administratoronly')->group(function () {

    //Dashboard
    Route::get('/3_administrator_dashboard', [AdministratorController::class, 'index']);
    Route::get('/3_administrator_dashboard', [barangController::class, 'show'])->name('barangindex');


    //Rute untuk approving barang
    Route::get('/3_administrator_approving', [barangController::class, 'tampil'])->name('barangindex');
    Route::get('/3_administrator_approving/{barang}/approve', [ApprovelController::class, 'ngeapprove'])->name('barangapproved');
    Route::get('/3_administrator_approving/{barang}/reject', [ApprovelController::class, 'ngereject'])->name('barangreject');
    Route::get('/3_administrator_view', [AdministratorController::class, 'show']);


    Route::get('/test/{id}', [AdministratorController::class, 'test'])->name('test');
    Route::post('/test/{id}', [AdministratorController::class, 'tunjuk'])->name('tunjuk');
});


//User

Route::middleware('auth', 'useronly')->group(function () {

    Route::get('/4_user_service', [UserController::class, 'index']);

    Route::get('/service', function() {
        return view('4_user_service');
    });


    // Rute untuk Upload barang
    Route::get('/4_user_upload', [barangController::class, 'add']);
    Route::post('/4_user_upload', [barangController::class, 'store']);

    // Rute Menu Yang Tersedia di index


    Route::get('/4_user_statuspage', [UserController::class, 'cekstatus'])->name('status');

    Route::get('/faq', function() {
        return view('4_user_faq');
    });

    Route::get('/contact', function() {
        return view('4_user_contact');
    });

    Route::get('/about', function() {
        return view('4_user_about');
    });

    Route::get('/4_user_riwayat', [UserController::class, 'notifikasi'])->name('riwayat');

});
