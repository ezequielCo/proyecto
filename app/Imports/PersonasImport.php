<?php

namespace App\Imports;

use App\Personas;
use Maatwebsite\Excel\Concerns\ToModel;

class PersonasImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Personas([
            //documente que se encarga de hace la manipulacion del archivo

            'nombre' =>$row[0], // fila a
            'apellido' =>$row[1],  // fila b
            'nacionalidad' =>$row[2], //fila c
            'fechaContrato' =>$row[3], ///fila d
            'sexo' =>$row[4], //fila e
           
        ]);
    }
}
