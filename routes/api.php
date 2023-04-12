<?php

use App\Http\Controllers\TiketController;
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


Route::apiResource('tiketing', TiketController::class);

// search by lokasi
Route::get('tiketing/location/{lokasi}', [TiketController::class, 'cariLokasi']);

// search by stadium
Route::get('tiketing/stadium/{stadium}', [TiketController::class, 'cariStadium']);
