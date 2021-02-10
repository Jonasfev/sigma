<?php

namespace App\Exports;

use App\Models\csv;
use App\Models\Reserva;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class CSVExport implements FromCollection, WithHeadings, WithMapping, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection

    
    */
    public function headings(): array{
        return ['idTurma', 'diaSemana','periodo','horaIncio','horaFim', 'aula', 'turma', 'idUc', 'idDocente', 'idAmbiente', 'idEquipamento'];
    }


    public function collection()
    {
        return Reserva::all();

    }

    public function map($reserva): array
    {
        return [
            $reserva->idTurma,
            $reserva->diaSemana,
            $reserva->periodo,
            $reserva->horaInicio,
            $reserva->horaFim,
            $reserva->aula,
            $reserva->turma,
            $reserva->idDocente,
            $reserva->idAmbiente,
            $reserva->idUc,
            $reserva->idEquipamento,
        ];
    }
}
