<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\PersonasImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Personas;

class PersonasController extends Controller
{
    //

    public function index()
    {
     

        return view('personas.index');
    }


    public function importExcel(Request $request)
    {
     
        $file = $request->file('file');
        Excel::import(new PersonasImport ,$file);   ///paso mi archivo y lo envio al import




        return back()->with('mensaje','cargado con exito');
      
    }


    public function list()
    {
        //hago consulta simple para enviar a datable en la vista


        $Personas = Personas::all();
        return view('personas.list',compact('Personas'));


    }
}
