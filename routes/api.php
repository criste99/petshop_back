<?php

use App\Http\Controllers\Api\ComidaController;
use App\Http\Controllers\Api\DueñoController;
use App\Http\Controllers\Api\MascotaController;
use App\Models\Comida;
use App\Models\Dueño;
use App\Models\Mascota;
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

Route::apiResource('/mascota', MascotaController::class)
    ->only(['index', 'show', 'put', 'destroy','store']);

Route::apiResource('/dueno', DueñoController::class)
    ->only(['index', 'show', 'put', 'destroy','store']);

Route::apiResource('/comida', ComidaController::class)
    ->only(['index', 'show', 'put', 'destroy','store']);