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
use COM;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class RecursoController extends Controller
{

    public function index($tipo)
    {

        $docentes = Docente::orderBy('Nome', 'asc')->get();

        $equips = Equipamento::orderBy('Nome', 'asc')->get();

        $ambientes = Ambiente::orderBy('numAmbiente', 'asc')->get();

        $ucs = Uc::orderBy('siglaUC', 'asc')->get();
        $ucsNome = Uc::orderBy('siglaUC', 'asc')->get('nomeUC');

        $cursos = Curso::orderBy('siglaCurso', 'asc')->get();

        $turmas = Turma::orderBy('siglaTurma', 'asc')->get();

        $pesq = false;

        return view('partials.recursos', compact(['docentes', 'equips', 'ambientes', 'ucs', 'ucsNome', 'cursos', 'turmas', 'tipo', 'pesq']));
    }

    public function search(Request $request)
    {
        $tipo = $request->tipo;

        $pesq = true;

        $docentes = Docente::orderBy('Nome', 'asc')->get();

        $equips = Equipamento::orderBy('Nome', 'asc')->get();

        $ambientes = Ambiente::orderBy('numAmbiente', 'asc')->get();

        $ucs = Uc::orderBy('siglaUC', 'asc')->get();
        $ucsNome = Uc::orderBy('siglaUC', 'asc')->get('nomeUC');

        $cursos = Curso::orderBy('siglaCurso', 'asc')->get();

        $turmas = Turma::orderBy('siglaTurma', 'asc')->get();

        switch ($tipo) {
            case 'uc':
                $ucs = [];
                $param = $request->nome;
                if ($request->nome == null) {
                    return redirect()->route('admin.recursos', ['tipo' => 'uc']);
                }
                if (strlen($param) <= 10) {
                    foreach (Uc::where('siglaUC', 'LIKE', "%{$param}%")->get() as $uc) {
                        array_push($ucs, $uc);
                    }
                }

                $ucsNome = Uc::where('nomeUC', 'LIKE', "%{$param}%")->get();
                foreach ($ucsNome as $ucNome) {
                    if (!in_array(Uc::get()->where('nomeUC', $ucNome->nomeUC), $ucs)) {
                        foreach (Uc::get()->where('nomeUC', $ucNome->nomeUC) as $uc) {
                            if (!in_array($uc, $ucs)) {
                                array_push($ucs, $uc);
                            }
                        }
                    }
                }

                $ucsNome = [];
                foreach ($ucs as $uc) {
                    array_push($ucsNome, Uc::find($uc->id));
                }
                break;

            case 'docente':
                $docentes = [];
                $param = $request->nome;
                if ($request->nome == null) {
                    return redirect()->route('admin.recursos', ['tipo' => 'docente']);
                }

                foreach (Docente::where('Nome', 'LIKE', "%{$param}%")->get() as $docente) {
                    array_push($docentes, $docente);
                }

                $docentesSobrenome = Docente::where('Sobrenome', 'LIKE', "%{$param}%")->get();
                foreach ($docentesSobrenome as $docenteSobrenome) {
                    if (!in_array(Docente::get()->where('Sobrenome', $docenteSobrenome->Sobrenome), $docentes)) {
                        foreach (Docente::get()->where('Sobrenome', $docenteSobrenome->Sobrenome) as $docenteSobrenome) {
                            if (!in_array($docenteSobrenome, $docentes)) {
                                array_push($docentes, $docenteSobrenome);
                            }
                        }
                    }
                }
                break;

            case 'ambiente':
                $ambientes = [];
                $param = $request->nome;
                if ($request->nome == null) {
                    return redirect()->route('admin.recursos', ['tipo' => 'ambiente']);
                }

                foreach (Ambiente::where('Tipo', 'LIKE', "%{$param}%")->get() as $ambiente) {
                    array_push($ambientes, $ambiente);
                }

                $ambientesNum = Ambiente::where('numAmbiente', 'LIKE', "%{$param}%")->get();
                foreach ($ambientesNum as $ambienteNum) {
                    if (!in_array(Ambiente::get()->where('numAmbiente', $ambienteNum->numAmbiente), $ambientes)) {
                        foreach (Ambiente::get()->where('numAmbiente', $ambienteNum->numAmbiente) as $ambienteNum) {
                            if (!in_array($ambienteNum, $ambientes)) {
                                array_push($ambientes, $ambienteNum);
                            }
                        }
                    }
                }
                break;

            case 'equips':
                $equips = [];
                $param = $request->nome;
                if ($request->nome == null) {
                    return redirect()->route('admin.recursos', ['tipo' => 'equips']);
                }

                foreach (Equipamento::where('Nome', 'LIKE', "%{$param}%")->get() as $equip) {
                    array_push($equips, $equip);
                }

                $equipsNum = Equipamento::where('numPatrimonio', 'LIKE', "%{$param}%")->get();
                foreach ($equipsNum as $equipNum) {
                    if (!in_array(Equipamento::get()->where('numPatrimonio', $equipNum->numPatrimonio), $equips)) {
                        foreach (Equipamento::get()->where('numPatrimonio', $equipNum->numPatrimonio) as $equipNum) {
                            if (!in_array($equipNum, $equips)) {
                                array_push($equips, $equipNum);
                            }
                        }
                    }
                }
                break;

            case 'curso':
                $cursos = [];
                $param = $request->nome;
                if ($request->nome == null) {
                    return redirect()->route('admin.recursos', ['tipo' => 'curso']);
                }
                if (strlen($param) <= 10) {
                    foreach (Curso::where('siglaCurso', 'LIKE', "%{$param}%")->get() as $curso) {
                        array_push($cursos, $curso);
                    }
                }

                $cursosNome = Curso::where('nomeCurso', 'LIKE', "%{$param}%")->get();
                foreach ($cursosNome as $cursoNome) {
                    if (!in_array(Curso::get()->where('nomeCurso', $cursoNome->nomeCurso), $cursos)) {
                        foreach (Curso::get()->where('nomeCurso', $cursoNome->nomeCurso) as $curso) {
                            if (!in_array($curso, $cursos)) {
                                array_push($cursos, $curso);
                            }
                        }
                    }
                }
                break;

            case 'turma':
                $turmas = [];
                $param = $request->nome;
                if ($request->nome == null) {
                    return redirect()->route('admin.recursos', ['tipo' => 'turma']);
                }

                foreach (Turma::where('siglaTurma', 'LIKE', "%{$param}%")->get() as $turma) {
                    array_push($turmas, $turma);
                }
                break;
        }

        return view('partials.recursos', compact(['docentes', 'equips', 'ambientes', 'cursos', 'turmas', 'tipo', 'ucs', 'ucsNome', 'pesq', 'param']));
    }

    public function showSchedule($id, $tipo)
    {
        $ok['s1'] = $id;
        $ok['s2'] = $tipo;

        switch ($tipo) {
            case "docente":
                $agenda = Reserva::get()->where('idDocente', $id);
                break;
            case "ambiente":
                $agenda = Reserva::get()->where('idAmbiente', $id);
                break;
            case "equipamento":
                $agenda = Reserva::get()->where('idEquipamento', $id);
                break;
        }

        $turma = Turma::select('id', 'siglaTurma')->distinct()->get();

        $ok['agenda'] = $agenda;
        $ok['turma'] = $turma;

        echo json_encode($ok);
    }

    public function create($tipo)
    {

        $ucs = Uc::orderBy('nomeUC', 'asc')->get();
        $cursos = Curso::orderBy('nomeCurso', 'asc')->get();

        switch ($tipo) {
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

        if ($params == '') {
            $r = view($v);
        } else {
            $r = view($v, compact([$params]));
        }

        return $r;
    }

    public function store(CriarRecursoRequest $request, $tipo)
    {

        switch ($tipo) {
            case 'docente':
                $req = $request->except('_token', 'Nome', 'Sobrenome', 'hmin', 'hmax');

                Docente::create([
                    'Nome' => $request->Nome,
                    'Sobrenome' => $request->Sobrenome,
                    'hmin' => $request->hmin,
                    'hmax' => $request->hmax
                ]);

                $doc_id = Docente::where('Nome', $request->Nome)->where('Sobrenome', $request->Sobrenome)->first()->id;
                foreach ($req as $uc) {
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

                foreach ($req as $uc) {
                    Ambienteuc::create([
                        'idAmbiente' => $amb_id,
                        'ucComportada' => $uc
                    ]);
                }
                break;

            case 'equips':
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

                foreach ($req as $uc) {
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

        return redirect()->route('admin.recursos', ['tipo' => $tipo]);
    }

    public function tipoCurso($id)
    {
        $curso = Curso::find($id);
        echo $curso->tipoCurso;
    }

    public function edit($tipo, $id)
    {

        $ucs = Uc::orderBy('nomeUC', 'asc')->get();
        $recucs = [];
        switch ($tipo) {
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
            case 'equips':
                $tipo = 'equips';
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

        if (!$recurso) {
            $r = redirect()->back();
        } else {
            $r = view($v, compact($params));
        }

        return $r;
    }

    public function update(CriarRecursoRequest $request, $id)
    {
        $tipo = $request->tipo;

        switch ($tipo) {
            case 'docente':
                $req = $request->except('_token', '_method', 'Nome', 'Sobrenome', 'hmin', 'hmax', 'tipo');

                foreach (Docuc::get()->where('docente', $id) as $row) {
                    $row->delete();
                }

                foreach ($req as $uc) {
                    Docuc::create([
                        'docente' => $id,
                        'ucComportada' => $uc
                    ]);
                }

                $recurso = Docente::find($id);

                if (!$recurso) {
                    $r = redirect()->back();
                } else {
                    $recurso->update([
                        'Nome' => $request->Nome,
                        'Sobrenome' => $request->Sobrenome,
                        'hMin' => $request->hmin,
                        'hMax' => $request->hmax
                    ]);
                    $r = redirect()->Route('admin.recursos', ['tipo' => $tipo]);
                }
                break;

            case 'ambiente':
                $req = $request->except('_token', '_method', 'tipo', 'Tipo', 'numAmbiente', 'alunosComportados');

                foreach (Ambienteuc::get()->where('idAmbiente', $id) as $row) {
                    $row->delete();
                }

                foreach ($req as $uc) {
                    Ambienteuc::create([
                        'idAmbiente' => $id,
                        'ucComportada' => $uc
                    ]);
                }

                $recurso = Ambiente::find($id);

                if (!$recurso) {
                    $r = redirect()->back();
                } else {
                    $recurso->update([
                        'Tipo' => $request->Tipo,
                        'numAmbiente' => $request->numAmbiente, 'alunosComportados' => $request->alunosComportados
                    ]);
                    $r = redirect()->Route('admin.recursos', ['tipo' => $tipo]);
                }
                break;

            case 'equips':
                $recurso = Equipamento::find($id);
                $tipo = 'equips';
                $recurso->update([
                    'Nome' => $request->Nome,
                    'numPatrimonio' => $request->numPatrimonio,
                ]);
                $r = redirect()->Route('admin.recursos', ['tipo' => $tipo]);
                break;

            case 'uc':
                $recurso = Uc::find($id);
                $recurso->update([
                    'siglaUc' => $request->siglaUC,
                    'nomeUc' => $request->nomeUC,
                    'cargaSemanal' => 5,
                    'aulasSemanais' => $request->aulasSemanais
                ]);
                $r = redirect()->Route('admin.recursos', ['tipo' => $tipo]);

                break;

            case 'curso':
                $req = $request->except('_token', '_method', 'tipo', 'tipoCurso', 'siglaCurso', 'nomeCurso', 'dataFimCurso', 'dataInicioCurso', 'cargaTotalHoras');

                foreach (Cursouc::get()->where('curso', $id) as $row) {
                    $row->delete();
                }

                foreach ($req as $uc) {
                    Cursouc::create([
                        'curso' => $id,
                        'ucComportada' => $uc
                    ]);
                }

                $recurso = Curso::find($id);

                if (!$recurso) {
                    $r = redirect()->back();
                } else {
                    $recurso->update([
                        'tipoCurso' => $request->tipoCurso,
                        'siglaCurso' => $request->siglaCurso,
                        'nomeCurso' => $request->nomeCurso,
                        'dataFimCurso' => $request->dataFimCurso,
                        'dataInicioCurso' => $request->dataInicioCurso,
                        'cargaTotalHoras' => $request->cargaTotalHoras
                    ]);
                    $r = redirect()->Route('admin.recursos', ['tipo' => $tipo]);
                }
                break;
            case 'turma':
                $recurso = Turma::find($id);
                $recurso->update([
                    'siglaTurma' => $request->siglaTurma,
                    'periodo' => $request->periodo,
                    'numAlunos' => $request->numAlunos,
                    'horaEntrada' => $request->horaEntrada,
                    'horaSaida' => $request->horaSaida
                ]);
                $r = redirect()->Route('admin.recursos', ['tipo' => $tipo]);
                break;
        }
        return $r;
    }

    public function destroy(Request $request)
    {
        $tipo = $request->tipo;
        $id = $request->id;

        switch ($tipo) {
            case 'docente':
                $recurso = Docente::find($id);
                foreach (Docuc::get()->where('docente', $id) as $row) {
                    $row->delete();
                }
                foreach (Reserva::get()->where('idDocente', $id) as $row) {
                    $row->update(['idDocente' => null]);
                }
                break;
            case 'ambiente':
                $recurso = Ambiente::find($id);
                foreach (Ambienteuc::get()->where('idAmbiente', $id) as $row) {
                    $row->delete();
                }
                foreach (Reserva::get()->where('idAmbiente', $id) as $row) {
                    $row->update(['idAmbiente' => null]);
                }
                break;
            case 'equipamento':
                $tipo = 'equips';
                $recurso = Equipamento::find($id);
                foreach (Reserva::get()->where('idEquipamento', $id) as $row) {
                    $row->update(['idEquipamento' => null]);
                }
                break;
            case 'uc':
                $recurso = Uc::find($id);
                foreach (Ambienteuc::get()->where('ucComportada', $id) as $row) {
                    $row->delete();
                }
                foreach (Cursouc::get()->where('ucComportada', $id) as $row) {
                    $row->delete();
                }
                foreach (Docuc::get()->where('ucComportada', $id) as $row) {
                    $row->delete();
                }
                foreach (Reserva::get()->where('idUc', $id) as $row) {
                    $row->update(['idUc' => null]);
                }
                break;
            case 'curso':
                $recurso = Curso::find($id);
                foreach (Cursouc::get()->where('curso', $id) as $row) {
                    $row->delete();
                }
                break;
            case 'turma':
                $recurso = Turma::find($id);
                foreach (Reserva::get()->where('idTurma', $id) as $row) {
                    $row->delete();
                }
                break;
        }

        $recurso->delete();

        return redirect()->Route('admin.recursos', ['tipo' => $tipo]);
    }
}
