<?php

namespace App\Http\Controllers;

use App\Models\Turma;
use App\Models\Curso;
use App\Models\Cursouc;
use App\Models\Docente;
use App\Models\Equipamento;
use App\Models\Ambiente;
use App\Models\Ambienteuc;
use App\Models\Docuc;
use App\Models\Reserva;
use App\Models\Uc;
use Illuminate\Http\Request;

class HorarioController extends Controller
{
    public function index($id) {

        $turma = Turma::find($id);
        $curso = Curso::find($turma->idCurso);
        $tipo = $curso->tipoCurso;
        $ucscurso = Cursouc::get()->where('curso', $turma->idCurso);
        $docentes = [];
        $ambientes = [];
        $ucs = [];
        foreach($ucscurso as $uccurso) {
            array_push($ucs,  Uc::find($uccurso->ucComportada));
            $docscurso =  Docuc::get()->where('ucComportada', $uccurso->ucComportada);
            foreach($docscurso as $doccurso) {
                if(!in_array(Docente::find($doccurso->docente), $docentes)) {
                    array_push($docentes,  Docente::find($doccurso->docente));
                }
            }
            $ambscurso =  Ambienteuc::get()->where('ucComportada', $uccurso->ucComportada);
            foreach($ambscurso as $ambcurso) {
                if(!in_array(Ambiente::find($ambcurso->idAmbiente), $ambientes)) {
                    array_push($ambientes,  Ambiente::find($ambcurso->idAmbiente));
                }
            }
        }
        $equips = Equipamento::get();
        
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

        Reserva::create($request->except('_token'));

        $teste['success'] = true;
        $teste['fail'] = false;
        echo json_encode($request->all());

    }

}
