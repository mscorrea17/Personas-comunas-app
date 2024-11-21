<?php

namespace App\Http\Controllers;

use App\Models\Municipio; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MunicipioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $municipios = DB::table('tb_municipio')
        ->join('tb_departamento', 'tb_municipio.depa_codi', '=', 'tb_departamento.depa_codi')
        ->select('tb_municipio.*', 'tb_departamento.depa_nomb')
        ->get();

    return view('municipios.index', ['municipios' => $municipios]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $departamentos = DB::table('tb_departamento')
        ->orderBy('depa_nomb')
        ->get();
    return view('municipios.new', ['departamentos' => $departamentos]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $municipios = new Municipio();
    $municipios->muni_codi = $request->muni_codi;
    $municipios->muni_nomb = $request->muni_nomb;
    $municipios->depa_codi = $request->depa_codi;
    $municipios->save();

  
    $municipios = DB::table('tb_municipio')
        ->join('tb_departamento', 'tb_municipio.depa_codi', '=', 'tb_departamento.depa_codi')
        ->select('tb_municipio.*', 'tb_departamento.depa_nomb')
        ->get();

    return view('municipios.index', ['municipios' => $municipios]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $municipio = Municipio::find($id);
         $departamentos = DB::table('tb_departamento')
            ->orderBy('depa_nomb')
            ->get();
            return view('municipios.edit', ['municipio' => $municipio, 'departamentos' => $departamentos]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $municipio = Municipio::find($muni_codi);
    $municipio->muni_nomb = $request->muni_nomb;
    $municipio->depa_codi = $request->depa_codi;
    $municipio->save();

    
    $municipios = DB::table('tb_municipio')
        ->join('tb_departamento', 'tb_municipio.depa_codi', '=', 'tb_departamento.depa_codi')
        ->select('tb_municipio.*', 'tb_departamento.depa_nomb')
        ->get();

    
    return view('municipios.index', ['municipios' => $municipios]);
    }

    /**
     * 
     * @param string $id
     * @return \Illuminate\Http\Response
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $municipio = Municipio::find($id);
        $municipio->delete();

        
        $municipios = DB::table('tb_municipio')
            ->join('tb_departamento', 'tb_municipio.depa_codi', '=', 'tb_departamento.depa_codi')
            ->select('tb_municipio.*', 'tb_departamento.depa_nomb')
            ->get();

        return view('municipios.index', ['municipios' => $municipios]);
    }
}
