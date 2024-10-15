<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\MantenimientoController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware('auth','verified')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    

    Route::delete('/usuario/{id}', [ProfileController::class, 'destroyUser'])->name('usuario.destroyUser');
    Route::patch('/usuario/{id}', [ProfileController::class, 'editUser'])->name('usuario.editUser');

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

        // EDITAR
        Route::get('/editar/{dispositivo}/{id}', [MantenimientoController::class, 'edit'])->name('editar');
        Route::get('/ver/{dispositivo}/{id}', [MantenimientoController::class, 'ver'])->name('ver');

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

//RUTAS EMAIL VERIFY


require __DIR__ . '/auth.php';
