<?php

namespace App\Http\Controllers;

use App\Models\Juicio;
use App\Imports\JuiciosImport;
use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\IOFactory;
use Maatwebsite\Excel\Facades\Excel;

class JuicioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $juicios = Juicio::all();
        return view('juicios.importar', compact('juicios'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Juicio $juicio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Juicio $juicio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Juicio $juicio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Juicio $juicio)
    {
        //
    }

    public function import(Request $request){
        $files = $request->file('juiciosEvaluativos');
        $longitud = count($files) - 1;
        for($i = 0; $i <= $longitud; $i++){
            $request->validate(['juiciosEvaluativos'[$i] => 'required | mimes:xls,xlsx']);
            $file = $request->file('juiciosEvaluativos')[$i];
            $spreadsheet = IOFactory::load($file);
            $cellValue = $spreadsheet->getActiveSheet()->getCell('C3')->getValue();
            Excel::import(new JuiciosImport($cellValue), $file);
        }
        return redirect()->route('juicio.index')->with('success', 'juicios Evaluativos Importados exitosamente');
    }
}
