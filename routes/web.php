<?php

use App\Http\Controllers\CsvController;
use App\Http\Controllers\RecursoController;
use App\Http\Controllers\HorarioController;
use App\Http\Controllers\CadastroController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AuthenticationController;
use App\Models\csv;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [LoginController::class, 'index'])->name('index');
Route::post('/show', [LoginController::class, 'show'])->name('index.show');
Route::post('/login', [AuthenticationController::class, 'login'])->name('index.login');
Route::get('/logout', [AuthenticationController::class, 'logout'])->name('logout');

Route::get('/search', [LoginController::class, 'search'])->name('index.search');

Route::middleware(['auth'])->group(function() {
    
    Route::name('admin.')->group(function() {
    
        Route::get('/home', function(){return view('partials.home');})->name('home');

        Route::get('/recursos', [RecursoController::class, 'index'])->name('recursos');
        
        Route::delete('/editar/deletar/', [RecursoController::class, 'destroy'])->name('deletar');

        Route::get('/editar/{tipo?}/{id?}', [RecursoController::class, 'edit'])->name('editar');

        Route::put('/editar/{id?}', [RecursoController::class, 'update'])->name('update');

        Route::get('/cadastrar/{tipo}', [RecursoController::class, 'create'])->name('cadastrar');
        
        Route::post('/cadastrar/{tipo}', [RecursoController::class, 'store'])->name('store');

        Route::get('/reservas/{id}', [HorarioController::class, 'carregaReservas'])->name('reservas');

        Route::get('/horario/{id}', [HorarioController::class, 'index'])->name('horario');
        
        Route::post('/horario/store', [HorarioController::class, 'store'])->name('horario.store');

        Route::get('/horario/check/{recId}/{aula}/{recTipo}/{periodo}', [HorarioController::class, 'check'])->name('horario.check');
    
        Route::get('/opcaoHorario', function() {
            return view('partials.opcaoHorario');
        })->name('opcaoHorario');
        
        Route::get('/csv', [CsvController::class, 'create'])->name('csv');
        Route::post('/csv', [CsvController::class, 'store'])->name('csv.create');

        Route::post('csv/export', [CsvController::class, 'export'])->name('csv.export');
        
    });

});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
