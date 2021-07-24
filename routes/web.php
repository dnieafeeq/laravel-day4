<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FailController;
use App\Http\Controllers\KatalogController;

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

Route::resource('/katalog_internal', KatalogController::class);
Route::resource('/katalog_external', KatalogController::class);
Route::get('/dashboard', function () { return view('dashboard'); });
// Route::get('/katalog_internal', function () { return view('katalogs.katalog_internal'); });
// Route::get('/katalog_external', function () { return view('katalogs.katalog_external'); });
Route::get('/crm', function () { return view('pages.dashboards.crm'); });
Route::get('/smarthome', function () { return view('pages.dashboards.smart-home'); });
Route::get('/vr-info', function () { return view('pages.dashboards.vr.vr-info'); });
Route::get('/charts', function () { return view('pages.pages.charts'); });
Route::get('/datatables', function () { return view('pages.applications.datatables'); });



// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

// require __DIR__.'/auth.php';
