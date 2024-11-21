<?php

use App\Http\Controllers\ComunaController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

route::get('/comunas',[ComunaController::class, 'index'])->name('comuna.index');
route::post('/comunas',[ComunaController::class, 'store'])->name('comunas.store');
route::get('/comunas/create',[ComunaController::class,'create'])->name('comunas.create');
Route::delete('/comunas/{comuna}',[ComunaController::class,'destroy'])->name('comunas.destroy');
Route::put('/comunas/{comuna}',[ComunaController::class,'update'])->name('comunas.update');
Route::get('/comunas/{comuna}/edit',[ComunaController::class,'edit'])->name('comunas.edit');
//RUTAS PARA DEPARTAMENTO
Route::get('/departamentos', [DepartamentoController::class, 'index'])->name('departamentos.index');
Route::post('/departamentos', [DepartamentoController::class, 'store'])->name('departamentos.store');
Route::get('/departamentos/create', [DepartamentoController::class, 'create'])->name('departamentos.create');
Route::delete('/departamentos/{departamento}', [DepartamentoController::class, 'destroy'])->name('departamentos.destroy');
Route::put('/departamentos/{departamento}', [DepartamentoController::class, 'update'])->name('departamentos.update');
Route::get('/departamentos/{departamento}/edit', [DepartamentoController::class, 'edit'])->name('departamentos.edit');
