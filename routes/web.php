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

Route::get('/registro_mantenimiento', function () {
    return view('registroMantenimientos.formularioMantenimiento');
})->middleware(['auth', 'verified'])->name('registro_mantenimiento');

Route::post('/registro_mantenimiento/post', function (Request $request) {
    dd($request->all());
});



require __DIR__.'/auth.php';
