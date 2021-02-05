<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Uc;
use Illuminate\Http\Request;

class CadastroController extends Controller
{
    public function index() {
        
        $ucs = Uc::get();
        $cursos = Curso::get();
        $nuc = 0;
        return view('partials.cadastrar', compact(['ucs', 'nuc', 'cursos']));

    }
}
