<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SantriController;
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

Route::get('sign-up', [PageController::class, 'signUp'])->name('signUp');

Route::get('dashboard', [PageController::class, 'dashboard'])->name('dashboard');

Route::get('talim', [AdminController::class, 'pageTalim'])->name('pageTalim');
Route::get('tashih', [AdminController::class, 'pageTashih'])->name('pageTashih');
Route::get('ustadz', [AdminController::class, 'pageUstadz'])->name('pageUstadz');
Route::get('mahasantri', [AdminController::class, 'pageSantri'])->name('pageSantri');

Route::get('add-talim', [AdminController::class, 'pageAddTalim'])->name('pageAddTalim');

Route::get('dashboards', [PageController::class, 'dashboardS'])->name('dashboardS');

Route::get('santri-talim', [SantriController::class, 'pageTalim'])->name('santri.pageTalim');
Route::get('santri-tashih', [SantriController::class, 'pageTashih'])->name('santri.pageTashih');
