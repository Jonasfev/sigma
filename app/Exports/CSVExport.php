<?php

namespace App\Exports;

use App\Models\csv;
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
        return ['versao', 'curso','periodo','diaSemana', 'aula', 'turma', 'uc', 'docente', 'ambiente'];
    }


    public function collection()
    {
        return csv::all();

    }

    public function map($csv): array
    {
        return [
            $csv->versao,
            $csv->curso,
            $csv->periodo,
            $csv->diaSemana,
            $csv->aula,
            $csv->turma,
            $csv->uc,
            $csv->docente,
            $csv->ambiente,
            
        ];
    }
}
