<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CuentaController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/cuentas/create',[CuentaController::class, 'store']);
Route::get('/cuentas/list',[CuentaController::class, 'showAll']);
Route::get('/cuentas/get-cuentas/{id}',[CuentaController::class, 'show']);
Route::update('/cuentas/update',[CuentaController::class, 'update']);