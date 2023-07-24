<?php

use App\Http\Controllers\CurrencyController;
use App\Http\Controllers\PairsController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/currencies', [CurrencyController::class, 'show']);
Route::get('/pairs', [PairsController::class, 'show']);

Route::post('/login', [UserController::class, 'login']);

Route::get('/deleteCurr/{id}', [CurrencyController::class, 'destroy']);
Route::get('/deletePair/{id}', [PairsController::class, 'destroy']);
Route::post('/updatePair/{id}', [PairsController::class, 'update']);
Route::post('/createCurrency', [CurrencyController::class, 'store']);
Route::post('/createPair', [PairsController::class, 'store']);