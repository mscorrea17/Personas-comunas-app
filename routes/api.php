<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ComunaController;
use App\Http\Controllers\Api\MunicipioController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(ComunaController::class)->group(function () {
    Route::get('/comuna', 'index');
    Route::post('/comuna', 'store');
    Route::get('/comuna/{id}', 'show');
    Route::put('/comuna/{id}', 'update');
    Route::delete('/comuna/{id}', 'destroy');
});

Route::controller(MunicipioController::class)->group(function () {
    Route::get('/municipios', 'index'); 
});