<?php

namespace App\Http\Controllers;

use App\Exports\CSVExport;
use App\Http\Requests\StoreCsvRequest;
use App\Models\csv;
use App\Models\Reserva;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use Maatwebsite\Excel\Facades\Excel;

class CsvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('partials.csv');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * 
     */
    public function store(StoreCsvRequest $request){

        $validated = $request->validated();
        $file = file($request->file('csv')->getPathname());

        if(strcmp($file[0], "sep=;".PHP_EOL)){
            $data = array_slice($file, 2);

        }
        else{
            $data = array_slice($file, 1);
        }


        if ($data == []){
            return redirect()->route('admin.csv')->withErrors(["Arquivo CSV vazio! :´("]);  
        }

        foreach ($data as $linhas){
            $teste = explode(';', $linhas);

            if(sizeof($teste) != 11){
                return redirect()->route('admin.csv')->withErrors('Error de arquivo!');
            }
        }

        $parts = (array_chunk($data, 5000));

        foreach ($parts as $index => $part) {
            $filename = resource_path('arquivos_pendentes/'.date('y-m-d-H-i-s').$index.'.csv');

            file_put_contents($filename, $part);
        }

        session()->flash('status', 'queued for importing');

        (new Reserva())->importToDb();
        
        Storage::delete($filename);

        return redirect()->route('admin.csv');  
          
    }

    public function export(Request $request) 
    {
        $nomeArquivo = $request->input('fileName');

        return Excel::download(new CSVExport, $nomeArquivo.".csv");
        
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\csv  $csv
     * @return \Illuminate\Http\Response
     */
    
}
