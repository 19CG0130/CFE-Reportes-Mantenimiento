<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MantenimientoController;

Route::post('/test',[MantenimientoController::class, 'store']);
