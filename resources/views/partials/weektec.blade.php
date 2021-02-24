@extends('template')

@section('button')
    <a class="btn btn-primary" href="{{Route('index')}}">
        VOLTAR
    </a>
@endsection

@section('content')

{{-- mostra os horarios do tecnico para visualização --}}
<div class="days my-auto h-60 w-100 px-3 d-flex justify-content-around">
    @for ($j = 0; $j < 5; $j++)
        @switch($j)
            @case(0)
                @php
                    $day = "Seg";
                @endphp
            @break
            @case(1)
                @php
                    $day = "Ter";
                @endphp
                @break
            @case(2)
            @php
                $day = "Qua";
                @endphp
            @break
            @case(3)
            @php
                $day = "Qui";
                @endphp
            @break
            @case(4)
            @php
                $day = "Sex";
                @endphp
            @break                            
        @endswitch
        {{-- chama o horario registrado da turma --}}
        <div class="day w-18 h-100 mx-auto d-flex flex-column" id="{{$day}}">
            <h2 class="w-100 text-center">{{$day}}</h2>
            <div class="row d-flex flex-row w-100 mx-auto">
                <div class="h5 mx-auto">A</div>
                <div class="h5 mx-auto">B</div>
            </div>
            <div class="container w-100 d-flex flex-fill p-0 border border-secondary rounded-lg">
                <div class="turma-a border-right border-secondary w-50 h-100">
                    @for ($i = 0; $i < 5; $i++)
                    <div id="aula-{{$j*10+$i+1}}" class="aula w-100 h-20 @if($i < 4) border-bottom @endif border-secondary d-flex flex-column justify-content-center">
                        <div class="mt-1 amb w-100 d-flex justify-content-center">
                            <small></small>
                        </div>
                        <div class="uc my-auto w-100 flex-fill d-flex align-items-center justify-content-center text-center">
                        </div>
                        <div class="doc w-100 mb-1 d-flex align-items-center justify-content-center">
                            <small></small>
                        </div>
                    </div>
                    @endfor
                </div>
                <div class="turma-b border-secondary w-50 h-100">
                    @for ($i = 0; $i < 5; $i++)
                    <div id="aula-{{$j*10+$i+6}}" class="aula w-100 h-20 @if($i < 4) border-bottom @endif border-secondary d-flex flex-column justify-content-center">
                        <div class="mt-1 icon amb w-100 d-flex justify-content-center">
                            <small></small>
                        </div>
                        <div class="uc my-auto w-100 flex-fill d-flex align-items-center justify-content-center text-center">
                        </div>
                        <div class="doc w-100 mb-1 d-flex align-items-center justify-content-center">
                            <small></small>
                        </div>
                    </div>
                    @endfor
                </div>
            </div>
        </div>
    @endfor
</div>
<script>
    constroiHorario({{$turma->id}}, 'TEC');
</script>
@endsection