<?php

namespace App\Http\Controllers;

use App\Models\Ambiente;
use App\Models\Docente;
use Illuminate\Http\Request;
use App\Models\Reserva;
use App\Models\Turma;
use App\Models\Uc;
use Barryvdh\DomPDF\Facade as PDF;

class PdfController extends Controller
{
    public function index(Request $request)
    {
        $tipo = $request->tipo;
        $id = $request->id;

        $agendas = null;
        $docs = null;
        $ambs = null;

        $turmas = Turma::select('id', 'siglaTurma')->distinct()->get();
        $ucs = Uc::select('id', 'siglaUC')->distinct()->get();

        switch ($tipo) {
            case "docente":
                $agendas = Reserva::orderBy('idTurma', 'asc')->get()->where('idDocente', $id);
                $docs = Docente::get()->where('id', $id);
                $pdf = PDF::loadView('partials.pdf', compact(['turmas'], ['agendas'], ['docs'], ['tipo'], ['ucs']));
                foreach ($docs as $doc) {
                    return $pdf->setPaper('a4')->stream($doc->Nome . '_' . $doc->Sobrenome . '.pdf');
                }
                break;
            case "ambiente":
                $agendas = Reserva::orderBy('idTurma', 'asc')->get()->where('idAmbiente', $id);
                $ambs = Ambiente::get()->where('id', $id);
                $pdf = PDF::loadView('partials.pdf', compact(['turmas'], ['agendas'], ['ambs'], ['tipo'], ['ucs']));
                foreach ($ambs as $amb) {
                    return $pdf->setPaper('a4')->stream($amb->Tipo . '_' . $amb->numAmbiente . '.pdf');
                }
                break;
        }
    }
}
