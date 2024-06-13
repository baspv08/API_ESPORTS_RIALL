<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::resource('/equipos', EquiposController::class);
Route::resource('/jugadores', JugadoresController::class);
Route::resource('/partidos', PartidosController::class);
Route::resource('/campeonatos', CampeonatosController::class);
route::resource('/resultados', ResultadosController::class);
