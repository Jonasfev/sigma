<?php

use App\Http\Controllers\CsvController;
use App\Http\Controllers\RecursoController;
use App\Http\Controllers\HorarioController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PdfController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// rota para o login do index/login
Route::get('/', [LoginController::class, 'index'])->name('index');

// rota para mostrar as turmas ja criadas
Route::post('/show', [LoginController::class, 'show'])->name('index.show');

// rota de pesquisa do horario
Route::get('/visualizaHorario/{id}', [HorarioController::class, 'visualizaHorario'])->name('visualizaHorario');

// rota da pagina que carrega horario cadastrado naquela turma
Route::get('/carregaHorario/{id}', [HorarioController::class, 'carregaHorario'])->name('carregaHorario');

// conjunto de rotas só com autenticação
Route::middleware(['auth'])->group(function () {

    // rota para o home
    Route::get('/home', function () {
        return view('partials.home');
    })->name('home');

    // conjunto de rotas admin
    Route::name('admin.')->group(function () {

        // rota que traz os recursos cadastrados
        Route::get('/recursos/{tipo?}', [RecursoController::class, 'index'])->name('recursos');

        // rota de pesquisa do recurso
        Route::post('/recurso/search', [RecursoController::class, 'search'])->name('search');

        // rota para mostrar o horario alocado daquele recurso
        Route::get('/recursos/show/{id}/{tipo}', [RecursoController::class, 'showSchedule'])->name('recursoSchedule');

        // rota para deletar o recurso
        Route::delete('/editar/deletar/', [RecursoController::class, 'destroy'])->name('deletar');

        // rota para editar o recurso
        Route::get('/editar/{tipo?}/{id?}', [RecursoController::class, 'edit'])->name('editar');

        // rota para editar as alterações feitas naquele recurso
        Route::put('/editar/{id?}', [RecursoController::class, 'update'])->name('update');

        // rota para cadastrar o recurso
        Route::get('/cadastrar/{tipo}', [RecursoController::class, 'create'])->name('cadastrar');

        // rota para cadastrar as alterações feitas naquele recurso
        Route::post('/cadastrar/{tipo}', [RecursoController::class, 'store'])->name('store');

        // rota para resgatar as informações daquela turma caso tenha sido salva anteriormente
        Route::get('/reservas/{id}', [HorarioController::class, 'carregaReservas'])->name('reservas');

        // rota para criar a turma em seu id
        Route::get('/horario/{id}', [HorarioController::class, 'index'])->name('horario');

        // rota para armazenar o horario criado
        Route::post('/horario/store', [HorarioController::class, 'store'])->name('horario.store');

        // rota para identificar se há alguma incompatiblidade na criação dos horarios
        Route::get('/horario/check/{recId}/{aula}/{recTipo}/{periodo}/{idUC}', [HorarioController::class, 'check'])->name('horario.check');

        // rota para identificar se há alguma incompatiblidade na criação dos horarios
        Route::get('/horario/checkin/{idUC}/{idRec}/{recTipo}', [HorarioController::class, 'checkin'])->name('horario.checkin');

        // rota do versionamento
        Route::get('/csv', [CsvController::class, 'create'])->name('csv');

        // rota de importação do csv
        Route::post('/csv', [CsvController::class, 'store'])->name('csv.create');

        // rota de exportação do csv
        Route::post('csv/export', [CsvController::class, 'export'])->name('csv.export');

        Route::get('/pdf', [PdfController::class, 'index'])->name('pdf');
    });
});

// usauario atenticado pode acessar essas rotas
Auth::routes();
