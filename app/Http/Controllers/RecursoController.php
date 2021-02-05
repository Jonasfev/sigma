<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCsvRequest;
use App\Models\Ambiente;
use App\Models\Curso;
use App\Models\Docente;
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

    public function tecindex(){

        $docentes = Docente::get();

        $equips = Equipamento::get();

        $ambientes = Ambiente::get();

        $ucs = Uc::get();

        return view('partials.turmatec', compact(['docentes', 'equips', 'ambientes', 'ucs']));
    }

    public function caiindex(){

        $docentes = Docente::get();

        $equips = Equipamento::get();

        $ambientes = Ambiente::get();

        $ucs = Uc::get();

        return view('partials.turmacai', compact(['docentes', 'equips', 'ambientes', 'ucs']));
    }

    public function create($tipo) {
        
        $ucs = Uc::get();
        $cursos = Curso::get();

        switch($tipo) {
            case 'docente':
                $v = 'partials.cadastrardocente';
                $params = 'ucs';
                break;
            case 'ambiente':
                $v = 'partials.cadastrarambiente';
                $params = 'ucs';
                break;
            case 'equipamento':
                $v = 'partials.cadastrarequipamento';
                $params = '';
                break;
            case 'uc':
                $v = 'partials.cadastraruc';
                $params = '';
                break;
            case 'curso':
                $v = 'partials.cadastrarcurso';
                $params = 'ucs';
                break;
            case 'turma':
                $v = 'partials.cadastrarturma';
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

    public function edit($tipo, $id){

        if($tipo == "docente"){

            if(!$recurso = Docente::find($id)){
                return redirect()->back();
            }
            return view('partials.editar', compact('recurso', 'tipo'));

        } else if ($tipo == "equipamento"){

            if(!$recurso = Equipamento::find($id)){
                return redirect()->back();
            }

            return view('partials.editarequip', compact('recurso', 'tipo'));
                

        } else if ($tipo == "ambiente"){

            if(!$recurso = Ambiente::find($id)){
                return redirect()->back();
            }

            return view('partials.editaramb', compact('recurso', 'tipo'));
                
        }  

    } 

    public function update (Request $request, $id){
        $tipo = $request->tipo;

        if($tipo == "docente"){

            if(!$recurso = Docente::find($id)){
                return redirect()->back();
            }
            

        } else if ($tipo == "equipamento"){

            if(!$recurso = Equipamento::find($id)){
                return redirect()->back();
            }
                

        } else if ($tipo == "ambiente"){

            if(!$recurso = Ambiente::find($id)){
                return redirect()->back();
            }
           
        }

        $recurso->update($request->except('tipo'));

        return redirect()->Route('admin.recursos');
        
    }

    public function destroy($tipo, $id){

        
        if($tipo == "docente"){

            if(!$recurso = Docente::find($id)){
                return redirect()->back();
            }
            

        } else if ($tipo == "equipamento"){

            
            if(!$recurso = Equipamento::find($id)){
              
                return redirect()->back();
            }
                

        } else if ($tipo == "ambiente"){

            if(!$recurso = Ambiente::find($id)){
                return redirect()->back();
            }
           
        }

       

        $recurso->delete();

        return redirect()->Route('admin.recursos');

    }
}
