<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () { return view('dashboard'); });
Route::get('/default', function () { return view('pages.dashboards.default'); });
Route::get('/automotive', function () { return view('pages.dashboards.automotive'); });
Route::get('/crm', function () { return view('pages.dashboards.crm'); });
Route::get('/smarthome', function () { return view('pages.dashboards.smart-home'); });
Route::get('/vr-info', function () { return view('pages.dashboards.vr.vr-info'); });



// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

// require __DIR__.'/auth.php';
