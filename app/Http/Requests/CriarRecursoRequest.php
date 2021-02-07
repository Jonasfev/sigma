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
        

        switch($uri){
            case "/cadastrar/curso":
                $rules = [
                    'tipoCurso' => 'required',
                    'siglaCurso' => 'max:10|required',
                    'nomeCurso' => 'max:100|required',
                    'dataInicioCurso' => 'required',
                    'dataFimCurso' => 'required',
                    'cargaTotalHoras' => 'numeric|size:10000|required',
                ];
                break;

            case "/cadastrar/ambiente":
                $rules = [
                    'tipo' => 'required',
                    'numAmbiente' => 'numeric|size:10000|required',
                    'alunosComportados' => 'numeric|size:100|required',
                ];
                break;

            case "/cadastrar/docente":
                $rules = [
                    'Nome' => 'max:30|required',
                    'Sobrenome' => 'max:100|required',
                    'hmin' => 'required',
                    'hmax' => 'required',
                ];
                break;

            case "/cadastrar/turma":
                $rules = [
                    'idCurso' => 'required',
                    'siglaTurma' => 'max:10|required',
                    'periodo' => 'required',
                    'numAlunos' => 'numeric|size:100|required',
                    'horaEntrada' => 'required',
                    'horaSaida' => 'required',
                ];
                break;

            case "/cadastrar/uc":
                $rules = [
                    'siglaUC' => 'max:10|required',
                    'nomeUC' => 'max:100|required',
                    'aulasSemanais' => 'numeric|size:100|required',
                ];
                break;

            case "/cadastrar/equipamento":
                $rules = [
                    'Nome' => 'max:50|required',
                    'numPatrimonio' => 'numeric|size:1000000000|required',
                ];
                break;
        }

        return $rules;

    }

    public function messages(){
        return [ 
            'required' => '/!\\ Campo requerido /!\\',            
            'numeric' => '/!\\ Valor numérico requerido /!\\',
            'size' => '/!\\ Tamanho inválido /!\\',
            'max' => '/!\\ Quantidade máxima de caracteres excedida /!\\',
        ];
    }
}
