<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <title>@if($tipo == "docente") @foreach ($docs as $doc) {{$doc->Nome}} @endforeach @elseif($tipo == "ambiente") @foreach ($ambs as $amb) {{$amb->Tipo}} {{$amb->numAmbiente}} @endforeach @endif Horário</title>
</head>
<body>
    <h2>@if($tipo == "docente") Docente: @foreach ($docs as $doc) {{$doc->Nome}} {{$doc->Sobrenome}} @endforeach @elseif($tipo == "ambiente") Ambiente: @foreach ($ambs as $amb) {{$amb->Tipo}} {{$amb->numAmbiente}} @endforeach @endif</h2>
    <hr>
    <table class="table table-sm table-striped text-center align-items-center">
        <thead>
            <tr>
                <th>Turma</th>
                <th>Período</th>
                <th>Dia da Semana</th>
                <th>UC</th>
                <th>Hora Início</th>
                <th width="100">Hora Fim</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($agendas as $agenda)
                <tr>
                    @foreach ($turmas as $turma)
                        @if($agenda->idTurma == $turma->id)<td>{{$turma->siglaTurma}}</td>@endif
                    @endforeach
                    <td class="text-uppercase">{{$agenda->periodo}}</td>
                    <td>{{$agenda->diaSemana}}</td>
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