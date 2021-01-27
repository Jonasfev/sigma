<?php

namespace App\Http\Controllers;

use App\Exports\CSVExport;
use App\Models\csv;
use Illuminate\Http\Request;
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
        if($request->file('csv')->isValid()){

            $file = file($request->file('csv')->getRealPath());

            $data = array_slice($file, 0);

            $parts = (array_chunk($data, 5000));

            foreach ($parts as $index => $part) {
                $filename = resource_path('arquivos_pendentes/'.date('y-m-d-H-i-s').$index.'.csv');

                file_put_contents($filename, $part);
            }

            session()->flash('status', 'queued for importing');

            (new csv())->importToDb();

            return redirect()->route('admin.csv');
        }  
          

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
