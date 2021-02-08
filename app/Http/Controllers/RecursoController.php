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

    public function edit($tipo, $id){

        $ucs = Uc::get();
        $cursos = Curso::get();

        switch($tipo) {
            case 'docente':
                $recurso = Docente::find($id);
                $v = 'partials.editar.docente';
                $params = ['recurso', 'tipo', 'ucs'];
                break;
            case 'ambiente':
                $recurso = Ambiente::find($id);
                $v = 'partials.editar.ambiente';
                $params = ['recurso', 'tipo', 'ucs'];
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
                $v = 'partials.editar.curso';
                $params = ['recurso', 'tipo', 'ucs'];
                break;
            case 'turma':
                $recurso = Turma::find($id);
                $v = 'partials.editar.turma';
                $params = ['recurso', 'tipo', 'cursos'];
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
                $recurso = Docente::find($id);
                break;
            case 'ambiente':
                $recurso = Ambiente::find($id);
                break;
            case 'equipamento':
                $recurso = Equipamento::find($id);
                break;
            case 'uc':
                $recurso = Uc::find($id);
                break;
            case 'curso':
                $recurso = Curso::find($id);
                break;
            case 'turma':
                $recurso = Turma::find($id);
                break;
        }

        if(!$recurso) {
            $r = redirect()->back();
        } else {
            $recurso->update($request->except('tipo'));
            $r = redirect()->Route('admin.recursos');
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
                break;
            case 'ambiente':
                $recurso = Ambiente::find($id);
                break;
            case 'equipamento':
                $recurso = Equipamento::find($id);
                break;
            case 'uc':
                $recurso = Uc::find($id);
                break;
            case 'curso':
                $recurso = Curso::find($id);
                break;
            case 'turma':
                $recurso = Turma::find($id);
                break;
        }

        $recurso->delete();

        return redirect()->Route('admin.recursos');
    }
}