<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/w', function () {
    return view('welcome');
});

Route::get('/registros', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/register', [ProfileController::class, 'edit'])->name('profile.edit');
});

Route::get('/usuarios', [ProfileController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('usuarios');



Route::get('/equipo_de_computo', function () {
    return view('registroMantenimientos.formularios.equipoComputo');
})->middleware(['auth', 'verified'])->name('equipo_de_computo');

Route::get('/terminal_portatil', function () {
    return view('registroMantenimientos.formularios.terminalPortatil');
})->middleware(['auth', 'verified'])->name('terminal_portatil');

Route::get('/tablet', function () {
    return view('registroMantenimientos.formularios.tablet');
})->middleware(['auth', 'verified'])->name('tablet');

Route::get('/impresora', function () {
    return view('registroMantenimientos.formularios.impresora');
})->middleware(['auth', 'verified'])->name('impresora');

Route::get('/otro_dispositivo', function () {
    return view('registroMantenimientos.formularios.otroDispositivo');
})->middleware(['auth', 'verified'])->name('otro_dispositivo');

Route::post('/registro_mantenimiento/post', function (Request $request) {
    dd($request->all());
});



require __DIR__.'/auth.php';
