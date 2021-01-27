<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class csv extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function importToDb(){
        $path = resource_path('arquivos_pendentes/*.csv');

        $g = glob($path);

        foreach (array_slice($g, 0, 1) as $file) {
            
            $data = array_map('str_getcsv', file($file));
            
            foreach ($data as $str) {
                $row = explode(";", $str[0]);
                self::updateOrCreate([
                    'curso'=>$row[0],
                    'periodo'=>$row[1],
                    'diaSemana'=>$row[2],
                    'aula'=>$row[3],
                    'turma'=>$row[4],
                    'uc'=>$row[5],
                    'docente'=>$row[6],
                    'ambiente'=>$row[7],
                ]);
            }

            unlink($file);
        }
    }
}
