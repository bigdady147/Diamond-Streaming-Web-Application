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


Route::get('/', [\App\Http\Controllers\WebController::class, 'getDashboard'])->name('dashboard');


//admin
Route::get('/admin', [\App\Http\Controllers\WebController::class, 'getAdminDashboard'])->name('admin');
Route::get('/admin/list-supporters', [\App\Http\Controllers\WebController::class, 'getListSupporter'])->name('admin-list-supporters');

