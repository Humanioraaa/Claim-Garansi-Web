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

Route::get('/kontol', function() {
    return view('helpdesk-index');
});



//Route::group(['middleware' => 'guestonly'], function () {});

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









//Manager
Route::get('/1_manager_dashboard', [ManagerController::class, 'index'])->middleware('manageronly');

Route::get('/managerchart', function() {
    return view('1_manager_chart');
})->middleware('manageronly');

Route::get('/1_manager_atur_role',  [RoleManager::class, 'index'])->middleware('manageronly');

    //ganti role
    Route::put('/user_edit/{id}', [UserController::class, 'changerole']);


//Admin Garansi
Route::get('/2_admingaransi_dashboard', [AdminGaransi_Controller::class, 'index'])->middleware('admingaransionly');
Route::get('/2_admingaransi_status', [AdminGaransi_Controller::class,'tampil'])->middleware('admingaransionly')->name('viewkomplain');
// Route::get('/edit', function() {
//     return view('2_admin_garansi_edit');
// });

Route::get('/2_admin_garansi_edit/{id}', [AdminGaransi_Controller::class, 'edit'])->middleware('admingaransionly')->name('edit');
Route::post('/2_admin_garansi_edit/{id}', [AdminGaransi_Controller::class, 'store'])->middleware('admingaransionly')->name('edit_submit');




//Administrator
Route::get('/3_administrator_dashboard', [AdministratorController::class, 'index'])->middleware('administratoronly');
Route::get('/penugasan', function() {
    return view('3_administrator_penugasan');
});

Route::get('/3_administrator_approving', [barangController::class, 'tampil'])->name('barangindex');
Route::get('/3_administrator_approving/{barang}/approve', [ApprovelController::class, 'ngeapprove'])->name('barangapproved');
Route::get('/3_administrator_approving/{barang}/reject', [ApprovelController::class, 'ngereject'])->name('barangreject');


Route::get('/3_administrator_penugasan', [AdministratorController::class, 'index'])->name('nunjuk');
Route::get('/3_administrator_penugasan/{users}', [AdministratorController::class, 'index'])->name('nunjuk');

Route::get('/test/{id}', [AdministratorController::class, 'test'])->name('test');
Route::post('/test/{id}', [AdministratorController::class, 'tunjuk'])->name('tunjuk');
//User
Route::get('/service', function() {
    return view('4_user_service');
})->middleware('useronly');


Route::get('/4_user_service', [UserController::class, 'index'])->middleware('useronly');






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



// Route::get('/4_user_upload', [barangController::class, 'add']);
// Route::post('/4_user_upload', [barangController::class, 'store']);


Route::get('/4_user_upload', [barangController::class, 'add']);
Route::post('/4_user_upload', [barangController::class, 'store']);




