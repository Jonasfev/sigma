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
            Reserva::updateOrCreate([
                'idTurma' => $request->idTurma,
                'diaSemana' => $request->diaSemana,
                'periodo' => $request->periodo,
                'aula' => $request->aula,
                'turma' => $request->turma,   
            ],[
                'horaInicio' => $request->horaInicio,
                'horaFim' => $request->horaFim,
                'idDocente' => $request->idDocente,
                'idAmbiente' => $request->idAmbiente,
                'idUc' => $request->idUc,
                'idEquipamento' => $request->idEquipamento,
            ]);
    

        $teste['success'] = true;
        $teste['fail'] = false;
        echo json_encode($request->all());

    }    

    public function carregaReservas($id) {
        $reservas = Reserva::get()->where('idTurma', $id);
        $reservas = json_encode($reservas);
        echo $reservas;
    }

    public function check($recId, $aula, $recTipo, $periodo){
        $aulaN = intval(str_replace("aula-", "", $aula));

        if($aulaN <= 5){
            $turma = 'a';
            $diaSemana = "Seg";

        } else if ($aulaN > 5 && $aulaN <= 10){
            $turma = 'b';
            $diaSemana = "Seg";
            $aulaN = $aulaN - 5;

        }else if ($aulaN > 11 && $aulaN <= 15){
            $turma = 'a';
            $diaSemana = "Ter";
            $aulaN = $aulaN - 10;

        }else if ($aulaN > 16 && $aulaN <= 20){
            $turma = 'b';
            $diaSemana = "Ter";
            $aulaN = $aulaN - 15;

        }else if ($aulaN > 21 && $aulaN <= 25){
            $turma = 'a';
            $diaSemana = "Qua";
            $aulaN = $aulaN - 20;

        }else if ($aulaN > 26 && $aulaN <= 30){
            $turma = 'b';
            $diaSemana = "Qua";
            $aulaN = $aulaN - 25;

        }else if ($aulaN > 31 && $aulaN <= 35){
            $turma = 'a';
            $diaSemana = "Qui";
            $aulaN = $aulaN - 30;

        }else if ($aulaN > 36 && $aulaN <= 40){
            $turma = 'b';
            $diaSemana = "Qui";
            $aulaN = $aulaN - 35;

        }else if ($aulaN > 41 && $aulaN <= 45){
            $turma = 'a';
            $diaSemana = "Sex";
            $aulaN = $aulaN - 40;

        } else if ($aulaN > 46 && $aulaN <= 50){
            $turma = 'b';
            $diaSemana = "Sex";
            $aulaN = $aulaN - 45;
 
        } else{
            $turma = null;
            $diaSemana = null;
            $aulaN = null;
        }
        
        $ok['reserva'] = false;
        switch($recTipo){
            case "equipamento":
                forEach(Reserva::get()->where('idEquipamento', $recId)->where('turma', $turma)->where('aula', $aulaN)->where('diaSemana', $diaSemana) as $row){

                    if($row->periodo == $periodo){
                        $ok['periodo'] = $row->periodo;
                        $ok['reserva'] = true;
                        $dateReserva = $row;
                        $sigla =  Turma::where('id', $dateReserva['idTurma'])->get('siglaTurma');
                        $ok['aulaReserva'] = $dateReserva['aula'];
                        $ok['diaReserva'] = $dateReserva['diaSemana'];
                        $ok['turmaReserva'] = $sigla[0]['siglaTurma'];
                    }
                };
            break;

            case "docente":
                forEach(Reserva::get()->where('idDocente', $recId)->where('turma', $turma)->where('aula', $aulaN)->where('diaSemana', $diaSemana) as $row){
                    if($row->periodo == $periodo){
                        $ok['reserva'] = true;
                        $dateReserva = $row;
                        $sigla =  Turma::where('id', $dateReserva['idTurma'])->get('siglaTurma');
                        $ok['aulaReserva'] = $dateReserva['aula'];
                        $ok['diaReserva'] = $dateReserva['diaSemana'];
                        $ok['turmaReserva'] = $sigla[0]['siglaTurma'];
                    }
                };
            break;

            case "ambiente":
                forEach(Reserva::get()->where('idAmbiente', $recId)->where('turma', $turma)->where('aula', $aulaN)->where('diaSemana', $diaSemana) as $row){
                    if($row->periodo == $periodo){
                        $ok['reserva'] = true;
                        $dateReserva = $row;
                        $sigla =  Turma::where('id', $dateReserva['idTurma'])->get('siglaTurma');
                        $ok['aulaReserva'] = $dateReserva['aula'];
                        $ok['diaReserva'] = $dateReserva['diaSemana'];
                        $ok['turmaReserva'] = $sigla[0]['siglaTurma'];
                    }
                };  
            break;
        }
        $ok['rectip'] = $aulaN;
        $ok['turma'] = $turma;
        $ok['diaSemana'] = $diaSemana;

        echo json_encode($ok);

    }
}
