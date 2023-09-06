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
    Route::get('/admin/list-foundations', [\App\Http\Controllers\WebController::class, 'getListFoundations'])->name("admin-list-foundations");
    Route::get('/admin/list-packages', [\App\Http\Controllers\WebController::class, 'getListPackages'])->name("admin-list-packages");
    Route::get('/admin/list-orders', [\App\Http\Controllers\WebController::class, 'getListOrders'])->name("admin-list-orders");
    Route::get('/admin/list-bankings', [\App\Http\Controllers\WebController::class, 'getListBankings'])->name("admin-list-bankings");
    Route::get('/admin/login', [\App\Http\Controllers\WebController::class, 'getAdminLogin'])->name("admin-login");

