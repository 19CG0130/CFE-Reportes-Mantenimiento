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

    //--------------------------registro_mantenimiento--------------------------
    Route::prefix('registro_mantenimiento')->group(function () {

        //LISTA REGISTROS MANNTENIMIENTOS
        Route::get('/', [MantenimientoController::class, 'index'])
            ->name('dashboard');

        //VISTAS REGISTROS
        Route::get('/equipo_de_computo', function () {
            return view('registroMantenimientos.formularios.equipoComputo');
        })->name('equipo_de_computo');

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

        //REGISTRAR
        Route::post('/', [MantenimientoController::class, 'store'])->name("registro_mantenimiento.post");

        //EDITAR
        Route::get('/editar/{dispositivo}/{id}', function () {
            return view('registroMantenimientos.acciones.editar-equipoComputo');
        })->name('editar');

        //VISUALIZAR
        Route::get('/visualizar/{dispositivo}/{id}', function () {
            return view('registroMantenimientos.acciones.editar-equipoComputo');
        })->name('visualizar');

        //EXPORTAR A PDF
        Route::get('/exportar_a_PDF/{dispositivo}/{id}', [MantenimientoController::class, 'pdf_generator_get'])
            ->name('exportar_a_PDF');
            
    });

    //Ruta Busqueda Dashboard
    Route::get('/search', [MantenimientoController::class, 'search']);

});

//Rutas Administrador
Route::middleware(['auth', 'adminMiddleware'])->group(function () {
    //Tabla Usuarios
    Route::get('/usuarios', [ProfileController::class, 'index'])->name('usuarios');
});

require __DIR__ . '/auth.php';
