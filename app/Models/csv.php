<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use function GuzzleHttp\Promise\all;

class csv extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function importToDb(){
        $path = resource_path('arquivos_pendentes/*.csv');

        $g = glob($path);

        foreach (array_slice($g, 0, 1) as $file) {
            
            $data = array_map('str_getcsv', file($file));
            self::truncate()->delete();


           foreach ($data as $str) {
                $row = explode(";", $str[0]);
                
                self::updateOrCreate([
                    'versao'=>$row[0],
                    'curso'=>$row[1],
                    'periodo'=>$row[2],
                    'diaSemana'=>$row[3],
                    'aula'=>$row[4],
                    'turma'=>$row[5],
                    'uc'=>$row[6],
                    'docente'=>$row[7],
                    'ambiente'=>$row[8],
                ]);
            }

            unlink($file);
        }
    }
}
