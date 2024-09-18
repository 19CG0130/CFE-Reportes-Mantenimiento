<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MantenimientoController;

Route::post('/registro_mantenimiento',[MantenimientoController::class, 'store'])->name("registro_mantenimiento.post");
Route::delete('/registro/{id}', [MantenimientoController::class, 'destroy'])->name('registro.destroy');
