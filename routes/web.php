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
        
        Route::get('/cadastro', function() {
            return view('partials.cadastrar');
        })->name('cadastrar');
        
        Route::get('/turma', function() {
            return view('partials.turma');
        })->name('turma');
        
        Route::get('/csv', function() {
            return view('partials.csv');
        })->name('csv');
    
    });

});


