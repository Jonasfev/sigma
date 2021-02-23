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

        switch ($uri) {
            case "/cadastrar/curso":
                $rules = [
                    'tipoCurso' => 'required',
                    'siglaCurso' => 'max:10|required',
                    'nomeCurso' => 'required',
                    'dataInicioCurso' => 'required',
                    'dataFimCurso' => 'required',
                    'cargaTotalHoras' => 'digits_between:1,10|required',
                ];
                break;

            case "/cadastrar/ambiente":
                $rules = [
                    'tipo' => 'required',
                    'numAmbiente' => 'digits_between:1,10|required',
                    'alunosComportados' => 'digits_between:1,10|required',
                ];
                break;

            case "/cadastrar/docente":
                $rules = [
                    'Nome' => 'required',
                    'Sobrenome' => 'required',
                    'hmin' => 'digits_between:1,10|required',
                    'hmax' => 'digits_between:1,10|required',
                ];
                break;

            case "/cadastrar/turma":
                $rules = [
                    'idCurso' => 'required',
                    'siglaTurma' => 'max:10|required',
                    'periodo' => 'required',
                    'numAlunos' => 'digits_between:1,10|required',
                    'horaEntrada' => 'required',
                    'horaSaida' => 'required',
                ];
                break;

            case "/cadastrar/uc":
                $rules = [
                    'siglaUC' => 'max:10|required',
                    'nomeUC' => 'required',
                    'aulasSemanais' => 'digits_between:1,10|required',
                ];
                break;

            case "/cadastrar/equips":
                $rules = [
                    'Nome' => 'required',
                    'numPatrimonio' => 'digits_between:1,10|required',
                ];
                break;

            case "/editar/$id":
                if ($tipo == "curso") {
                    $rules = [
                        'tipoCurso' => 'required',
                        'siglaCurso' => 'max:10|required',
                        'nomeCurso' => 'required',
                        'dataInicioCurso' => 'required',
                        'dataFimCurso' => 'required',
                        'cargaTotalHoras' => 'digits_between:1,10|required',
                    ];
                } else if ($tipo == "ambiente") {
                    $rules = [
                        'tipo' => 'required',
                        'numAmbiente' => 'digits_between:1,10|required',
                        'alunosComportados' => 'digits_between:1,10|required',
                    ];
                } else if ($tipo == "docente") {
                    $rules = [
                        'Nome' => 'required',
                        'Sobrenome' => 'required',
                        'hmin' => 'digits_between:1,10|required',
                        'hmax' => 'digits_between:1,10|required',
                    ];
                } else if ($tipo == "turma") {
                    $rules = [
                        'siglaTurma' => 'max:10|required',
                        'periodo' => 'required',
                        'numAlunos' => 'digits_between:1,10|required',
                        'horaEntrada' => 'required',
                        'horaSaida' => 'required',
                    ];
                } else if ($tipo == "uc") {
                    $rules = [
                        'siglaUC' => 'max:10|required',
                        'nomeUC' => 'required',
                        'aulasSemanais' => 'digits_between:1,10|required',
                    ];
                } else if ($tipo == "equips") {
                    $rules = [
                        'Nome' => 'required',
                        'numPatrimonio' => 'digits_between:1,10|required',
                    ];
                }
        }

        return $rules;
    }

    public function messages()
    {
        return [
            //curso-msgs
            'tipoCurso.required' => '/!\\ Tipo do Curso não foi preenchido :( /!\\',
            'siglaCurso.required' => '/!\\ Sigla do Curso não foi preenchida :( /!\\',
            'siglaCurso.max' => '/!\\ Máximo 5 caracteres em Sigla do Curso :( /!\\',
            'nomeCurso.required' => '/!\\ Nome do Curso não foi preenchido :( /!\\',
            'dataInicioCurso.required' => '/!\\ A data Início não foi preenchida :( /!\\',
            'dataFimCurso.required' => '/!\\ A data Fim não foi preenchida :( /!\\',
            'cargaTotalHoras.required' => '/!\\ Carga horária total não foi preenchida :( /!\\',
            'cargaTotalHoras.digits_between' => '/!\\ Quantidade excedida em Carga horária total :( /!\\',

            //ambiente-msgs
            'tipo.required' => '/!\\ Tipo não foi preenchido :( /!\\',
            'numAmbiente.required' => '/!\\ Número do Ambiente não foi preenchido :( /!\\',
            'numAmbiente.digits_between' => '/!\\ Quantidade excedida em Número do Ambiente :( /!\\',
            'alunosComportados.required' => '/!\\ Alunos Comportados não foi preenchido :( /!\\',
            'alunosComportados.digits_between' => '/!\\ Quantidade excedida em Alunos Comportados :( /!\\',

            //docente && equipamento -msgs
            'Nome.required' => '/!\\ Nome não foi preenchido :( /!\\',

            //docente
            'Sobrenome.required' => '/!\\ Sobrenome não foi preenchido :( /!\\',
            'hmin.required' => '/!\\ Horas Mínimas não foi preenchida :( /!\\',
            'hmin.digits_between' => '/!\\ Quantidade excedida em Horas Mínimas :( /!\\',
            'hmax.required' => '/!\\ Horas Máximas não foi preenchida :( /!\\',
            'hmax.digits_between' => '/!\\ Quantidade excedida em Horas Máximas :( /!\\',

            //turma-msgs
            'siglaTurma.required' => '/!\\ Sigla não foi preenchida :( /!\\',
            'siglaTurma.max' => '/!\\ Máximo 5 caracteres em Sigla :( /!\\',
            'periodo.required' => '/!\\ Período não foi preenchido :( /!\\',
            'numAlunos.required' => '/!\\ Nº de alunos não foi preenchido :( /!\\',
            'numAlunos.digits_between' => '/!\\ Quantidade excedida em Nº de alunos :( /!\\',
            'horaEntrada.required' => '/!\\ Hora de Entrada não foi preenchida :( /!\\',
            'horaSaida.required' => '/!\\ Hora de Saída não foi preenchida :( /!\\',

            //uc-msgs
            'siglaUC.required' => '/!\\ Sigla da UC não foi preenchida :( /!\\',
            'siglaUC.max' => '/!\\ Máximo 5 caracteres em Sigla da UC :( /!\\',
            'nomeUC.required' => '/!\\ Nome da UC não foi preenchida :( /!\\',
            'aulasSemanais.required' => '/!\\ Nº de aulas semanais não foi preenchida :( /!\\',
            'aulasSemanais.digits_between' => '/!\\ Quantidade excedida em Nº de aulas semanais :( /!\\',

            //equipamento-msgs
            'numPatrimonio.required' => '/!\\ Nº Patrimônio não foi preenchido :( /!\\',
            'numPatrimonio.digits_between' => '/!\\ Quantidade excedida em Nº Patrimônio :( /!\\',
        ];
    }
}
