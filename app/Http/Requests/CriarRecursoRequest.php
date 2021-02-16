<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CriarRecursoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $uri = $this->getPathInfo();
        $id = $this->id;
        $tipo = $this->tipo;

        switch($uri){
            case "/cadastrar/curso":
                $rules = [
                    'tipoCurso' => 'required',
                    'siglaCurso' => 'required',
                    'nomeCurso' => 'required',
                    'dataInicioCurso' => 'required',
                    'dataFimCurso' => 'required',
                    'cargaTotalHoras' => 'max:99999|numeric|required',
                ];
                break;

            case "/cadastrar/ambiente":
                $rules = [
                    'tipo' => 'required',
                    'numAmbiente' => 'numeric|required',
                    'alunosComportados' => 'numeric|required',
                ];
                break;

            case "/cadastrar/docente":
                $rules = [
                    'Nome' => 'max:99999|numeric|required',
                    'Sobrenome' => 'max:99999|numeric|required',
                    'hmin' => 'required',
                    'hmax' => 'required',
                ];
                break;

            case "/cadastrar/turma":
                $rules = [
                    'idCurso' => 'required',
                    'siglaTurma' => 'required',
                    'periodo' => 'required',
                    'numAlunos' => 'numeric|required',
                    'horaEntrada' => 'required',
                    'horaSaida' => 'required',
                ];
                break;

            case "/cadastrar/uc":
                $rules = [
                    'siglaUC' => 'required',
                    'nomeUC' => 'required',
                    'aulasSemanais' => 'numeric|required',
                ];
                break;

            case "/cadastrar/equipamento":
                $rules = [
                    'Nome' => 'required',
                    'numPatrimonio' => 'max:9999999999|numeric|required',
                ];
                break;

            case "/editar/$id":
                if($tipo == "curso"){
                    $rules = [
                        'tipoCurso' => 'required',
                        'siglaCurso' => 'required',
                        'nomeCurso' => 'required',
                        'dataInicioCurso' => 'required',
                        'dataFimCurso' => 'required',
                        'cargaTotalHoras' => 'max:99999|numeric|required',
                    ];

                } else if($tipo == "ambiente"){
                    $rules = [
                        'tipo' => 'required',
                        'numAmbiente' => 'numeric|required',
                        'alunosComportados' => 'numeric|required',
                    ];
    
                } else if($tipo == "docente"){
                    $rules = [
                        'Nome' => 'required',
                        'Sobrenome' => 'required',
                        'hmin' => 'max:99999|numeric|required',
                        'hmax' => 'max:99999|numeric|required',
                    ];
    
                } else if($tipo == "turma"){
                    $rules = [
                        'siglaTurma' => 'required',
                        'periodo' => 'required',
                        'numAlunos' => 'numeric|required',
                        'horaEntrada' => 'required',
                        'horaSaida' => 'required',
                    ];
    
                } else if($tipo == "uc"){
                    $rules = [
                        'siglaUC' => 'required',
                        'nomeUC' => 'required',
                        'aulasSemanais' => 'numeric|required',
                    ];

                } else if($tipo == "equipamento"){
                    $rules = [
                        'Nome' => 'required',
                        'numPatrimonio' => 'max:9999999999|numeric|required',
                    ];
                }
        }

        return $rules;

    }

    public function messages(){
        return [ 
            'required' => '/!\\ Campo requerido :attribute /!\\',            
            'numeric' => '/!\\ Valor numérico requerido /!\\',
            'max' => '/!\\ Quantidade máxima de caracteres excedida /!\\',
        ];
    }
}
