<?php

namespace App\Http\Controllers;

use App\Exports\CSVExport;
use App\Models\csv;
use Illuminate\Auth\Events\Validated;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator as FacadesValidator;
use Illuminate\Validation\Validator as ValidationValidator;
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
    public function store(Request $request){

        $request->validate([
            'csv' => 'mimes:csv,txt',
            'csv' => 'required'
        ]);


        $file = file($request->file('csv')->getRealPath());

        foreach ($file as $linhas){
            $teste = explode(';', $linhas);

            if(sizeof($teste) != 8 ){
                return redirect()->route('admin.csv')->withErrors('Error de arquivo!');
                
            }
        }

        $data = array_slice($file, 1);

        $parts = (array_chunk($data, 5000));

        foreach ($parts as $index => $part) {
            $filename = resource_path('arquivos_pendentes/'.date('y-m-d-H-i-s').$index.'.csv');

            file_put_contents($filename, $part);
        }

        session()->flash('status', 'queued for importing');

        (new csv())->importToDb();

        Storage::delete($filename);

        return redirect()->route('admin.csv');  
          
    }

    public function export() 
    {

        return Excel::download(new CSVExport, 'brenoGay.csv');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\csv  $csv
     * @return \Illuminate\Http\Response
     */
    
}
