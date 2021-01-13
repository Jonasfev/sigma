<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', function() {
    return view('login');
})->name('index');

Route::get('/home', function() {
    return view('admin.recursos.home');
})->name('home.admin');//->middleware('auth');

Route::get('/cadastro', function() {
    return view('admin.recursos.cadastrar');
})->name('cadastrar.admin');//->middleware('auth');

Route::get('/turma', function() {
    return view('admin.recursos.turma');
})->name('turma.admin');//->middleware('auth');

