<?php

use App\Http\Controllers\API\SavingsController;

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


Route::get('/get_savings', [SavingsController::class, 'index']);

Route::get('/get_savings_byId/{id}', [SavingsController::class, 'show']);

Route::delete('/get_savings/delete/{id}', [SavingsController::class , 'destroy']);

Route::post('/get_savings' , [SavingsController::class, 'store'] );