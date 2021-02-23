<?php

use App\Http\Controllers\CsvController;
use App\Http\Controllers\RecursoController;
use App\Http\Controllers\HorarioController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [LoginController::class, 'index'])->name('index');

Route::post('/show', [LoginController::class, 'show'])->name('index.show');

Route::get('/visualizaHorario/{id}', [HorarioController::class, 'visualizaHorario'])->name('visualizaHorario');

Route::get('/carregaHorario/{id}', [HorarioController::class, 'carregaHorario'])->name('carregaHorario');

Route::middleware(['auth'])->group(function() {
    
    Route::get('/home', function(){return view('partials.home');})->name('home');
    
    Route::name('admin.')->group(function() {
        
        Route::get('/recursos/{tipo?}', [RecursoController::class, 'index'])->name('recursos');

        Route::post('/recurso/search', [RecursoController::class, 'search'])->name('search');
        
        Route::get('/recursos/show/{id}/{tipo}', [RecursoController::class, 'showSchedule'])->name('recursoSchedule');
        
        Route::delete('/editar/deletar/', [RecursoController::class, 'destroy'])->name('deletar');
        
        Route::get('/editar/{tipo?}/{id?}', [RecursoController::class, 'edit'])->name('editar');
        
        
        
        Route::put('/editar/{id?}', [RecursoController::class, 'update'])->name('update');
        
        Route::get('/cadastrar/{tipo}', [RecursoController::class, 'create'])->name('cadastrar');
        
        Route::post('/cadastrar/{tipo}', [RecursoController::class, 'store'])->name('store');
        
        Route::get('/reservas/{id}', [HorarioController::class, 'carregaReservas'])->name('reservas');
        
        Route::get('/horario/{id}', [HorarioController::class, 'index'])->name('horario');

        Route::post('/horario/store', [HorarioController::class, 'store'])->name('horario.store');

        Route::get('/horario/check/{recId}/{aula}/{recTipo}/{periodo}/{idUC}', [HorarioController::class, 'check'])->name('horario.check');

        Route::get('/horario/checkin/{idUC}/{idRec}/{recTipo}',[HorarioController::class, 'checkin'])->name('horario.checkin');

        Route::get('/csv', [CsvController::class, 'create'])->name('csv');
        
        Route::post('/csv', [CsvController::class, 'store'])->name('csv.create');

        Route::post('csv/export', [CsvController::class, 'export'])->name('csv.export');
        
    });

});

Auth::routes();