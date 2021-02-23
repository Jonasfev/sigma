<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Throwable;

class Reserva extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function importToDb()
    {
        $path = resource_path('arquivos_pendentes/*.csv');

        $g = glob($path);

        foreach (array_slice($g, 0, 1) as $file) {

            $data = array_map('str_getcsv', file($file));
            self::truncate()->delete();


            foreach ($data as $str) {
                $str = str_replace("\"", "", $str);
                $row = explode(";", $str[0]);

                for ($i = 0; $i < sizeof($row); $i++) {
                    if ($row[$i] == '') {
                        $row[$i] = null;
                    }
                }

                try {
                    self::updateOrCreate([
                        'idTurma' => $row[0],
                        'diaSemana' => $row[1],
                        'periodo' => $row[2],
                        'horaInicio' => $row[3],
                        'horaFim' => $row[4],
                        'aula' => $row[5],
                        'turma' => $row[6],
                        'idDocente' => $row[7],
                        'idAmbiente' => $row[8],
                        'idUc' => $row[9],
                        'idEquipamento' => $row[10],
                    ]);
                } catch (Throwable $e) {
                    unlink($file);
                    return redirect()->route('admin.csv')->withErrors("Turma(s) inexistente(s) :(");
                }
            }

            unlink($file);
        }
    }
}
