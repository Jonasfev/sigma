<?php

namespace App\Http\Controllers;

use App\Models\Turma;
use App\Models\Curso;
use App\Models\Docente;
use App\Models\Equipamento;
use App\Models\Ambiente;
use App\Models\Reserva;
use App\Models\Uc;
use Illuminate\Http\Request;

class HorarioController extends Controller
{
    public function index($id) {

        $turma = Turma::find($id);
        $tipo = Curso::find($turma->idCurso)->tipoCurso;
        $docentes = Docente::get();
        $equips = Equipamento::get();
        $ambientes = Ambiente::get();
        $ucs = Uc::get();
        
        switch ($tipo) {
            case 'CAI': 
                $v = 'partials.turma.cai';
                break;
            case 'TEC': 
                $v = 'partials.turma.tec';
                break;
            case 'FIC':
                // implementar página fic
                break;
        }
        
        return view($v, compact('turma', 'docentes', 'equips', 'ambientes', 'ucs', 'tipo'));

    }

    public function store(Request $request) {

        $turmas = Turma::get();
        $docentes = Docente::get();
        $equip = Equipamento::get();
        $ambientes = Ambiente::get();
        $cursos = Curso::get();
        $ucs = Uc::get();

        Reserva::create($request->except('_token'));

        return redirect()->route('admin.recursos');

    }

}
