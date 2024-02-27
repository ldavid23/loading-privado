<?php

namespace App\Imports;

use App\Models\Juicio;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class JuiciosImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    private $dato;

    public function __construct($dato)
    {
        $this->dato = $dato;
    }
    public function model(array $row)
    {
        // dd($row);
        $id_ficha = $this->dato;
        return new Juicio([
            'IDENTIFICADOR_FICHA' => $id_ficha,
            'DOCUMENTO_APRENDIZ' => $row['numero_de_documento'],
            'NOMBRE' => $row['nombre'],
            'APELLIDO' => $row['apellidos'],
            'ESTADO' => $row['estado'],
            'COMPETENCIA' => $row['competencia'],
            'RESULTADO' => $row['resultado_de_aprendizaje'],
            'JUICIO' => $row['juicio_de_evaluacion'],
        ]);
     
    }
    public function headingRow(): int
    {
        return 13;
    }
}
