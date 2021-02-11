<?php

namespace App\Http\Controllers;

use App\Http\Requests\CriarRecursoRequest;
use App\Http\Requests\StoreCsvRequest;
use App\Models\Ambiente;
use App\Models\Ambienteuc;
use App\Models\Curso;
use App\Models\Cursouc;
use App\Models\Docente;
use App\Models\Docuc;
use App\Models\Equipamento;
use App\Models\Reserva;
use App\Models\Turma;
use App\Models\Uc;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class RecursoController extends Controller
{
    
    public function index(){

        $docentes = Docente::get();

        $equip = Equipamento::get();

        $ambientes = Ambiente::get();

        $ucs = Uc::get();

        $cursos = Curso::get();

        $turmas = Turma::get();

        return view('partials.recursos', compact(['docentes', 'equip', 'ambientes', 'ucs', 'cursos', 'turmas']));
    }

    public function create($tipo) {
        
        $ucs = Uc::get();
        $cursos = Curso::get();

        switch($tipo) {
            case 'docente':
                $v = 'partials.cadastrar.docente';
                $params = 'ucs';
                break;
            case 'ambiente':
                $v = 'partials.cadastrar.ambiente';
                $params = 'ucs';
                break;
            case 'equipamento':
                $v = 'partials.cadastrar.equipamento';
                $params = '';
                break;
            case 'uc':
                $v = 'partials.cadastrar.uc';
                $params = '';
                break;
            case 'curso':
                $v = 'partials.cadastrar.curso';
                $params = 'ucs';
                break;
            case 'turma':
                $v = 'partials.cadastrar.turma';
                $params = 'cursos';
                break;
        }

        if($params == '') {
            $r = view($v);
        } else {
            $r = view($v, compact([$params]));
        }

        return $r;

    }

    public function store(CriarRecursoRequest $request, $tipo) {    

        switch($tipo) {
            case 'docente':
                $req = $request->except('_token', 'Nome', 'Sobrenome', 'hmin', 'hmax');

                Docente::create([
                    'Nome' => $request->Nome,
                    'Sobrenome' => $request->Sobrenome,
                    'hmin' => $request->hmin,
                    'hmax' => $request->hmax
                ]);

                $doc_id = Docente::where('Nome', $request->Nome)->where('Sobrenome', $request->Sobrenome)->first()->id;
                foreach($req as $uc){
                    Docuc::create([
                        'docente' => $doc_id,
                        'ucComportada' => $uc
                    ]);
                }
                break;

            case 'ambiente':
                $req = $request->except('_token', 'tipo', 'numAmbiente', 'alunosComportados');
                Ambiente::create([
                    'Tipo' => $request->tipo,
                    'numAmbiente' => $request->numAmbiente,
                    'alunosComportados' => $request->alunosComportados
                ]);

                $amb_id = Ambiente::where('Tipo', $request->tipo)->where('numAmbiente', $request->numAmbiente)->first()->id;

                foreach($req as $uc){
                    Ambienteuc::create([
                        'idAmbiente' => $amb_id,
                        'ucComportada' => $uc
                    ]);
                }
                break;

            case 'equipamento':
                Equipamento::create([
                    'Nome' => $request->Nome,
                    'numPatrimonio' => $request->numPatrimonio
                ]);
                break;

            case 'uc':
                Uc::create([
                    'siglaUc' => $request->siglaUC,
                    'nomeUc' => $request->nomeUC,
                    'cargaSemanal' => 5,
                    'aulasSemanais' => $request->aulasSemanais
                ]);
                break;

            case 'curso':
                $req = $request->except('_token', 'tipoCurso', 'siglaCurso', 'nomeCurso', 'dataInicioCurso', 'dataFimCurso', 'cargaTotalHoras');

                Curso::create([
                    'tipoCurso' => $request->tipoCurso,
                    'siglaCurso' => $request->siglaCurso,
                    'nomeCurso' => $request->nomeCurso,
                    'dataInicioCurso' => $request->dataInicioCurso,
                    'dataFimCurso' => $request->dataFimCurso,
                    'cargaTotalHoras' => $request->cargaTotalHoras
                ]);

                $curso_id = Curso::where('siglaCurso', $request->siglaCurso)->where('nomeCurso', $request->nomeCurso)->first()->id;

                foreach($req as $uc){
                    Cursouc::create([
                        'curso' => $curso_id,
                        'ucComportada' => $uc
                    ]);
                }
                
                break;
            case 'turma':
                Turma::create([
                    'idCurso' => $request->idCurso,
                    'siglaTurma' => $request->siglaTurma,
                    'periodo' => $request->periodo,
                    'numAlunos' => $request->numAlunos,
                    'horaEntrada' => $request->horaEntrada,
                    'horaSaida' => $request->horaSaida,
                ]);
                break;
        }

        return redirect()->route('admin.recursos');

    }

    public function tipoCurso($id){
        dd($id);
        $curso = Curso::find($id);
        echo $curso->tipoCurso;
    }

    public function edit($tipo, $id){

        $ucs = Uc::get();
        $recucs = [];
        switch($tipo) {
            case 'docente':
                $recurso = Docente::find($id);
                $recucs = Docuc::get()->where('docente', $id);
                $v = 'partials.editar.docente';
                $params = ['recurso', 'tipo', 'ucs', 'recucs'];
                break;
            case 'ambiente':
                $recurso = Ambiente::find($id);
                $recucs = Ambienteuc::get()->where('idAmbiente', $id);
                $v = 'partials.editar.ambiente';
                $params = ['recurso', 'tipo', 'ucs', 'recucs'];
                break;
            case 'equipamento':
                $recurso = Equipamento::find($id);
                $v = 'partials.editar.equipamento';
                $params = ['recurso', 'tipo'];
                break;
            case 'uc':
                $recurso = Uc::find($id);
                $v = 'partials.editar.uc';
                $params = ['recurso', 'tipo'];
                break;
            case 'curso':
                $recurso = Curso::find($id);
                $recucs = Cursouc::get()->where('curso', $id);
                $v = 'partials.editar.curso';
                $params = ['recurso', 'tipo', 'ucs', 'recucs'];
                break;
            case 'turma':
                $recurso = Turma::find($id);
                $curso = Curso::find($recurso->idCurso);
                $v = 'partials.editar.turma';
                $params = ['recurso', 'tipo', 'curso'];
                break;
        }

        if(!$recurso) {
            $r = redirect()->back();
        } else {
            $r = view($v, compact($params));
        }

        return $r; 

    } 

    public function update (Request $request, $id){
        $tipo = $request->tipo;
        switch($tipo) {
            case 'docente':
                $req = $request->except('_token', '_method', 'nome', 'sobrenome', 'Hmin', 'Hmax', 'tipo');
                
                foreach(Docuc::get()->where('docente', $id) as $row){
                    $row->delete();
                }
                
                foreach($req as $uc){
                    Docuc::create([
                        'docente' => $id,
                        'ucComportada' => $uc
                    ]);
                }

                $recurso = Docente::find($id);

                if(!$recurso) {
                    $r = redirect()->back();
                } else {
                    $recurso->update([
                        'Nome' => $request->nome,
                        'Sobrenome' => $request->sobrenome,
                        'hMin' => $request->Hmin,
                        'hMax' => $request->Hmax
                    ]);
                    $r = redirect()->Route('admin.recursos');
                }
                break;


            case 'ambiente':
                $req = $request->except('_token', '_method', 'tipo', 'Tipo', 'numAmbiente', 'alunosComportados');
                
                foreach(Ambienteuc::get()->where('idAmbiente', $id) as $row){
                    $row->delete();
                }
                
                foreach($req as $uc){
                    Ambienteuc::create([
                        'idAmbiente' => $id,
                        'ucComportada' => $uc
                    ]);
                }

                $recurso = Ambiente::find($id);

                if(!$recurso) {
                    $r = redirect()->back();
                } else {
                    $recurso->update([
                        'Tipo' => $request->Tipo, 
                        'numAmbiente' => $request->numAmbiente, 'alunosComportados' => $request->alunosComportados
                    ]);
                    $r = redirect()->Route('admin.recursos');
                }
                break;
            case 'equipamento':
                $recurso = Equipamento::find($id);
                $recurso->update([
                    'Nome' => $request->Nome,
                    'numPatrimonio' => $request->numPatrimonio,
                ]);
                $r = redirect()->Route('admin.recursos');
                break;
            case 'uc':
                $recurso = Uc::find($id);
                $recurso->update([
                    'siglaUc' => $request->siglaUC,
                    'nomeUc' => $request->nomeUC,
                    'cargaSemanal' => 5,
                    'aulasSemanais' => $request->aulasSemanais
                ]);
                $r = redirect()->Route('admin.recursos');
                
                break;
            case 'curso':
                $req = $request->except('_token', '_method', 'tipo', 'tipoCurso', 'siglaCurso', 'nomeCurso', 'dataFimCurso', 'dataInicioCurso', 'cargaTotalHoras');
                
                foreach(Cursouc::get()->where('curso', $id) as $row){
                    $row->delete();
                }

                foreach($req as $uc){
                    Cursouc::create([
                        'curso' => $id,
                        'ucComportada' => $uc
                    ]);
                }

                $recurso = Curso::find($id);

                if(!$recurso) {
                    $r = redirect()->back();
                } else {
                    $recurso->update([
                        'tipoCurso' => $request->tipoCurso, 
                        'siglaCurso'=> $request->siglaCurso, 
                        'nomeCurso'=> $request->nomeCurso, 
                        'dataFimCurso'=> $request->dataFimCurso,
                        'dataInicioCurso'=> $request->dataInicioCurso,
                        'cargaTotalHoras' => $request->cargaTotalHoras
                    ]);
                    $r = redirect()->Route('admin.recursos');
                }
                break;
                case 'turma':
                    $recurso = Turma::find($id);
                    $recurso->update([
                        'idCurso' => $request->idCurso,
                        'siglaTurma' => $request->SiglaTurma,
                        'periodo' => $request->periodo,
                        'numAlunos' => $request->numAlunos,
                        'horaEntrada' => $request->horaEntrada,
                        'horaSaida' => $request->horaSaida
                    ]);
                    $r = redirect()->Route('admin.recursos');
                    break;
        }
        return $r;
        
    }

    public function show($tipo, $id){
        return "Tipo: {$tipo}, id: {$id}";
    }

    public function destroy(Request $request){
        $tipo = $request->tipo;
        $id = $request->id;

        switch($tipo) {
            case 'docente':
                $recurso = Docente::find($id);
                foreach(Docuc::get()->where('docente', $id) as $row){
                    $row->delete();
                }
                foreach(Reserva::get()->where('idDocente', $id) as $row){
                    $row->update(['idDocente'=> null]);
                }
                break;
            case 'ambiente':
                $recurso = Ambiente::find($id);
                foreach(Ambienteuc::get()->where('idAmbiente', $id) as $row){
                    $row->delete();
                }
                foreach(Reserva::get()->where('idAmbiente', $id) as $row){
                    $row->update(['idAmbiente'=> null]);
                }
                break;
            case 'equipamento':
                $recurso = Equipamento::find($id);
                foreach(Reserva::get()->where('idEquipamento', $id) as $row){
                    $row->update(['idEquipamento'=> null]);
                }
                break;
            case 'uc':
                $recurso = Uc::find($id);
                foreach(Ambienteuc::get()->where('ucComportada', $id) as $row){
                    $row->delete();
                }
                foreach(Cursouc::get()->where('ucComportada', $id) as $row){
                    $row->delete();
                }
                foreach(Docuc::get()->where('ucComportada', $id) as $row){
                    $row->delete();
                }
                foreach(Reserva::get()->where('idUc', $id) as $row){
                    $row->update(['idUc'=> null]);
                }
                break;
            case 'curso':
                $recurso = Curso::find($id);
                foreach(Cursouc::get()->where('curso', $id) as $row){
                    $row->delete();
                }
                break;
            case 'turma':
                $recurso = Turma::find($id);
                foreach(Reserva::get()->where('idTurma', $id) as $row){
                    $row->delete();
                }
                break;
        }

        $recurso->delete();

        return redirect()->Route('admin.recursos');
    }
}