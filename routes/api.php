<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\OrderController;
use App\Http\Controllers\API\SupporterController;
use App\Http\Controllers\API\PackagesController;
use App\Http\Controllers\API\FoundationController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::prefix('api')->group(function () {

    //ORDERS API
    Route::post('/orders', [OrderController::class, 'create']);
    Route::put('/orders/{id}', [OrderController::class, 'update']);
    Route::delete('/orders/{id}', [OrderController::class, 'delete']);
    Route::get('/orders', [OrderController::class, 'loadList']);

//SUPPORTERS API
    Route::post('/supporters', [SupporterController::class, 'create']);
    Route::put('/supporters/{id}', [SupporterController::class, 'update']);
    Route::put('/api/supporters-active/{id}', [SupporterController::class, 'changeStatus']);
    Route::delete('/supporters/{id}', [SupporterController::class, 'delete']);
    Route::get('/supporters', [SupporterController::class, 'loadList']);


//FOUNDATIONS API
    Route::post('/foundations', [FoundationController::class, 'create']);
    Route::put('/foundations/{id}', [FoundationController::class, 'update']);
    Route::delete('/foundations/{id}', [FoundationController::class, 'delete']);
    Route::get('/foundations', [FoundationController::class, 'loadList']);


//PACKAGES API
    Route::post('/packages', [PackagesController::class, 'create']);
    Route::put('/packages/{id}', [PackagesController::class, 'update']);
    Route::delete('/packages/{id}', [PackagesController::class, 'delete']);
    Route::get('/packages', [PackagesController::class, 'loadList']);

});
