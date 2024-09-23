<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\MantenimientoController;

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //Mostrar Registros de Mantenimientos
    Route::get('/registros', [MantenimientoController::class, 'index'])
        ->name('dashboard');

    //Generar PDF
    Route::get('/pdf_generator', [MantenimientoController::class, 'pdf_generator_get']);

    //Rutas para los formularios de registros mantenimientos
    Route::prefix('registro_mantenimiento')->group(function () {
        Route::get('/equipo_de_computo', function () {
            return view('registroMantenimientos.formularios.equipoComputo');
        })->name('equipo_de_computo');

        Route::get('/edit/equipo_de_computo', function () {
            return view('registroMantenimientos.acciones.computoEdit');
        })->name('edit/equipo_de_computo');

        Route::get('/terminal_portatil', function () {
            return view('registroMantenimientos.formularios.terminalPortatil');
        })->name('terminal_portatil');

        Route::get('/tablet', function () {
            return view('registroMantenimientos.formularios.tablet');
        })->name('tablet');

        Route::get('/impresora', function () {
            return view('registroMantenimientos.formularios.impresora');
        })->name('impresora');

        Route::get('/otro_dispositivo', function () {
            return view('registroMantenimientos.formularios.otroDispositivo');
        })->name('otro_dispositivo');
        
        //Agregar Registro
        Route::post('/',[MantenimientoController::class, 'store'])->name("registro_mantenimiento.post");

    });

    //Ruta Busqueda Dashboard
    Route::get('/search',[MantenimientoController::class, 'search']);

});

//Rutas Administrador
Route::middleware(['auth','adminMiddleware'])->group(function(){
    //Tabla Usuarios
    Route::get('/usuarios', [ProfileController::class, 'index'])->name('usuarios');

});



require __DIR__ . '/auth.php';
