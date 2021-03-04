<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <title>@if($tipo == "docente") {{$doc[0]->Nome}} @elseif($tipo == "ambiente") {{$amb[0]->Tipo}} {{$amb[0]->numAmbiente}} @endif Horário</title>
</head>
<body>
    <h2>@if($tipo == "docente") Docente: {{$doc[0]->Nome}} {{$doc[0]->Sobrenome}} @elseif($tipo == "ambiente") Ambiente: {{$amb[0]->Tipo}} {{$amb[0]->numAmbiente}} @endif</h2>
    <hr>
    <table class="table table-sm table-striped text-center align-items-center">
        <thead>
            <tr>
                <th>Período</th>
                <th>Dia da Semana</th>
                <th>Turma</th>
                <th>UC</th>
                <th>Hora Início</th>
                <th width="100">Hora Fim</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($agendas as $agenda)
                <tr>
                    <td class="text-uppercase">{{$agenda->periodo}}</td>
                    <td>{{$agenda->diaSemana}}</td>
                    @foreach ($turmas as $turma)
                        @if($agenda->idTurma == $turma->id)<td>{{$turma->siglaTurma}}</td>@endif
                    @endforeach
                    @foreach ($ucs as $uc)
                        @if($agenda->idUc == $uc->id)<td>{{$uc->siglaUC}}</td>@endif
                    @endforeach
                    <td>{{$agenda->horaInicio}}</td>
                    <td>{{$agenda->horaFim}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>