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

