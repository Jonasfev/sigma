<?php

use App\Http\Controllers\CsvController;
use App\Http\Controllers\RecursoController;
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

        Route::get('/editar/{tipo?}/{id?}', [RecursoController::class, 'edit'])->name('editar');

        Route::put('/editar/{id?}', [RecursoController::class, 'update'])->name('update');
       
        Route::get('/cadastro', function() {
            return view('partials.cadastrar');
        })->name('cadastrar');
        
        Route::get('/turmaTec', function() {
            return view('partials.turmatec');
        })->name('turmaTec');

        Route::get('/turmaCai', function() {
            return view('partials.turmacai');
        })->name('turmaCai');
        
        // Route::get('/csv', function() {
        //     return view('partials.csv');
        // })->name('csv');
    
        Route::get('/opcaoHorario', function() {
            return view('partials.opcaoHorario');
        })->name('opcaoHorario');
        
        Route::get('/csv', [CsvController::class, 'create'])->name('csv');
        Route::post('/csv', [CsvController::class, 'store'])->name('csv.create');

        Route::post('csv/export', [CsvController::class, 'export'])->name('csv.export');
        
    });

});


