<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SantriController;
use Illuminate\Routing\RedirectController;
use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::get('index', [PageController::class, 'index'])->name('index');
Route::get('sign-up', [PageController::class, 'signUp'])->name('signUp');
Route::post('signin-up', [PageController::class, 'isSignUp'])->name('isSignUp');
Route::post('logging-in', [PageController::class, 'loggingIn'])->name('loggingIn');

// admin musrif
Route::group(['middleware' => 'checkrole:0'], function () {
    Route::get('dashboard', [PageController::class, 'dashboard'])->name('dashboard');
    
    Route::get('mahasantri', [AdminController::class, 'pageSantri'])->name('pageSantri');
    
    Route::get('musrif', [AdminController::class, 'pageMusrif'])->name('pageMusrif');
    
    Route::get('ustadz', [AdminController::class, 'pageUstadz'])->name('pageUstadz');
    Route::post('add-ustadz', [AdminController::class, 'addUstadz'])->name('addUstadz');
    Route::put('edit-ustadz/{id}', [AdminController::class, 'updateUstadz'])->name('updateUstadz');
    Route::delete('delete-ustadz/{id}', [AdminController::class, 'delUstadz'])->name('delUstadz');
    
    Route::get('kegiatan', [AdminController::class, 'pageKegiatan'])->name('pageKegiatan');
    Route::post('add-kegiatan', [AdminController::class, 'addKegiatan'])->name('addKegiatan');
    Route::put('edit-kegiatan/{id}', [AdminController::class, 'updateKegiatan'])->name('updateKegiatan');
    Route::delete('delete-kegiatan/{id}', [AdminController::class, 'delKegiatan'])->name('delKegiatan');

    Route::get('jadwal', [AdminController::class, 'pageJadwal'])->name('pageJadwal');
    Route::get('add-jadwal', [AdminController::class, 'inputJadwal'])->name('inputJadwal');
    Route::post('adding-jadwal', [AdminController::class, 'inputingJadwal'])->name('inputingJadwal');
    Route::put('edit-jadwal/{id}', [AdminController::class, 'updateJadwal'])->name('updateJadwal');
    Route::delete('delete-jadwal/{id}', [AdminController::class, 'delJadwal'])->name('delJadwal');
});

// user santri
Route::group(['middleware' => 'checkrole:1'], function () {
    Route::get('dashboards', [SantriController::class, 'dashboardS'])->name('dashboardS');
    Route::post('absen', [SantriController::class, 'absen'])->name('absen');
});

// 
Route::post('logout', [PageController::class, 'logout']);
// Route::group(['middleware' => 'checkrole:1,2'], function () {
//     Route::get('redirect', [RedirectController::class, 'cek']);
// });
