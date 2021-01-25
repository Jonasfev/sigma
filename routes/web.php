<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return view('partials.login');
})->name('index');

Route::middleware([/*'auth'*/])->group(function() {
    
    Route::name('admin.')->group(function() {
    
        Route::get('/home', function() {
            return view('partials.home');
        })->name('home');

        Route::get('/recursos', function() {
            return view('partials.recursos');
        })->name('recursos');

        Route::get('/editar', function() {
            return view('partials.editar');
        })->name('editar');
        
        Route::get('/cadastro', function() {
            return view('partials.cadastrar');
        })->name('cadastrar');
        
        Route::get('/turmaTec', function() {
            return view('partials.daytec');
        })->name('turmaTec');

        Route::get('/turmaCai', function() {
            return view('partials.daycai');
        })->name('turmaCai');
        
        Route::get('/csv', function() {
            return view('partials.csv');
        })->name('csv');
    
        Route::get('/opcaoHorario', function() {
            return view('partials.opcaoHorario');
        })->name('opcaoHorario');
        
    });

});


