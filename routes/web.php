<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\MantenimientoController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //--------------------------registro_mantenimiento--------------------------
    Route::prefix('registro_mantenimiento')->group(function () {

        //REGISTROS
        Route::get('/', [MantenimientoController::class, 'index'])->name('dashboard');
        Route::post('/', [MantenimientoController::class, 'store'])->name("registro_mantenimiento.post");
        Route::get('/editar/{dispositivo}/{id}', [MantenimientoController::class, 'edit'])->name('editar');
        Route::get('/ver/{dispositivo}/{id}', [MantenimientoController::class, 'ver'])->name('ver');
        Route::put('/registro-mantenimiento/{id}', [MantenimientoController::class, 'update'])->name("registro_mantenimiento.update");

        //EXPORTAR A PDF
        Route::get('/exportar_a_PDF/{dispositivo}/{id}', [MantenimientoController::class, 'pdf_generator_get'])->name('exportar_a_PDF');

        //VISTAS DE REGISTROS
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
    });

    //Ruta Busqueda Dashboard
    Route::get('/search', [MantenimientoController::class, 'search']);

});

//Rutas Administrador
Route::middleware(['auth', 'adminMiddleware'])->group(function () {

    Route::get('/usuarios', [ProfileController::class, 'index'])->name('usuarios');
    Route::delete('/usuario/{id}', [ProfileController::class, 'destroyUser'])->name('usuario.destroyUser');
    Route::patch('/usuario/{id}', [ProfileController::class, 'editUser'])->name('usuario.editUser');

    Route::post('/jefe_informatica', [MantenimientoController::class, 'actualizarJefe'])->name('jefeInformatica.editJefeInformatica');

    
});

//RUTAS EMAIL VERIFY
require __DIR__ . '/auth.php';
