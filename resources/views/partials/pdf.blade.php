<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@if($tipo == "docente") {{$doc[0]->Nome}} @elseif($tipo == "ambiente") {{$amb[0]->Tipo}} {{$amb[0]->numAmbiente}} @endif Horário</title>
</head>
<body>
    <h2>@if($tipo == "docente") Docente: {{$doc[0]->Nome}} @elseif($tipo == "ambiente") Ambiente: {{$amb[0]->Tipo}} {{$amb[0]->numAmbiente}} @endif</h2>
    <ul>
    @foreach ($agendas as $agenda)
        <li>{{$agenda}}</li>
    @endforeach
    </ul>
</body>
</html>