<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Turma;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index() {

        $turmas = Turma::orderBy('siglaTurma', 'asc')->get();
        $cursos = [];

        foreach($turmas as $turma) {
            array_push($cursos, Curso::find($turma->idCurso));
        }

        $pesq = false;

        return view('partials.login', compact('turmas', 'cursos', 'pesq'));

    }

    public function show(Request $request){
        $turmas = [];
        $param = $request->nomeCurso;

        if($request->nomeCurso == null){
            return redirect()->route('index');
        }
        if(strlen($param) <= 10){
            foreach(Turma::where('siglaTurma', 'LIKE', "%{$param}%")->get() as $turma) {
                array_push($turmas, $turma);
            } 
        } 
 
        $cursos = Curso::where('nomeCurso', 'LIKE', "%{$request->nomeCurso}%")->get();
        foreach($cursos as $curso) {
            if(!in_array(Turma::get()->where('idCurso', $curso->id), $turmas)){
                foreach(Turma::get()->where('idCurso', $curso->id) as $turma) {
                    if(!in_array($turma, $turmas)){
                        array_push($turmas, $turma);
                    }
                }
            }
        }
            
        $cursos = []; 
        foreach($turmas as $turma) {
            array_push($cursos, Curso::find($turma->idCurso));
        }

        $pesq = true;

        return view('partials.login', compact('turmas', 'cursos', 'pesq', 'param'));

    }

}
