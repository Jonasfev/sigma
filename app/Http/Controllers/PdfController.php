<?php

namespace App\Http\Controllers;

use App\Models\Ambiente;
use App\Models\Docente;
use Illuminate\Http\Request;
use App\Models\Reserva;
use App\Models\Turma;
use Barryvdh\DomPDF\Facade as PDF;

class PdfController extends Controller
{
    public function index(Request $request)
    {
        $tipo = $request->tipo;
        $id = $request->id;

        $agendas = null;
        $doc = null;
        $amb = null;

        $turmas = Turma::select('id', 'siglaTurma')->distinct()->get();

        switch ($tipo) {
            case "docente":
                $agendas = Reserva::get()->where('idDocente', $id);
                $doc = Docente::get()->where('id', $id);
                $pdf = PDF::loadView('partials.pdf', compact(['turmas'], ['agendas'], ['doc'], ['tipo']));
                return $pdf->setPaper('a4')->stream($doc[0]->Nome . '.pdf');
                break;
            case "ambiente":
                $agendas = Reserva::get()->where('idAmbiente', $id);
                $amb = Ambiente::get()->where('id', $id);
                $pdf = PDF::loadView('partials.pdf', compact(['turmas'], ['agendas'], ['amb'], ['tipo']));
                return $pdf->setPaper('a4')->stream($amb[0]->Tipo . '_' . $amb[0]->numAmbiente . '.pdf');
                break;
        }
    }
}
