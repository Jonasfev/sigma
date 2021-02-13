<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
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
                $str = str_replace("\""," ",$str);
                $row = explode(";", $str[0]);
    
                self::updateOrCreate([
                    'idTurma'=>$row[0],
                    'diaSemana'=>$row[1],
                    'periodo'=>$row[2],
                    'horaInicio'=>$row[3],
                    'horaFim'=>$row[4],
                    'aula'=>$row[5],
                    'turma'=>$row[6],
                    'idDocente'=>$row[7],
                    'idAmbiente'=>$row[8],
                    'idUc'=>$row[9],
                    'idEquipamento'=>$row[10],            
                ]);
            }

            unlink($file);
        }
    }
}
