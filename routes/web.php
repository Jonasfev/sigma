<?php

use App\Http\Controllers\CsvController;
use App\Http\Controllers\RecursoController;
use App\Http\Controllers\CadastroController;
use App\Models\csv;
use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return view('partials.login');
})->name('index');

Route::middleware([/*'auth'*/])->group(function() {
    
    Route::name('admin.')->group(function() {
    
        Route::get('/home', function() {
            return view('partials.home');
        })->name('home');

        Route::get('/recursos', [RecursoController::class, 'index'])->name('recursos');
        
        Route::get('/editar/deletar/{tipo?}/{id?}', [RecursoController::class, 'destroy'])->name('deletar');

        Route::get('/editar/{tipo?}/{id?}', [RecursoController::class, 'edit'])->name('editar');

        Route::put('/editar/{id?}', [RecursoController::class, 'update'])->name('update');

        Route::get('/cadastrar/{tipo}', [RecursoController::class, 'create'])->name('cadastrar');   
        
        Route::get('/turmaTec', [RecursoController::class, 'tecindex'])->name('turmaTec');

        Route::get('/turmaCai', [RecursoController::class, 'caiindex'])->name('turmaCai');
    
        Route::get('/opcaoHorario', function() {
            return view('partials.opcaoHorario');
        })->name('opcaoHorario');
        
        Route::get('/csv', [CsvController::class, 'create'])->name('csv');
        Route::post('/csv', [CsvController::class, 'store'])->name('csv.create');

        Route::post('csv/export', [CsvController::class, 'export'])->name('csv.export');
        
    });

});


