<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Turma;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index() {

        $turmas = Turma::get();
        $cursos = [];

        foreach($turmas as $turma) {
            array_push($cursos, Curso::find($turma->idCurso));
        }

        return view('partials.login', compact('turmas', 'cursos'));

    }

    public function search(Request $request){
        

        
    }
}
