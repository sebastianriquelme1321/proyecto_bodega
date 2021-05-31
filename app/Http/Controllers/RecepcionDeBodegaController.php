<?php

namespace App\Http\Controllers;

use App\recepcion_bodega;
use App\documento_tributario;
use App\proovedor;
use App\usuario;
use App\unidad_negocio;
use App\empresa;
use App\centro_costo_gestion;
use App\recurso_unidad_negocio;
use App\recurso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Symfony\Component\VarDumper\Cloner\Data;

class RecepcionDeBodegaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proveedores=Http::get('https://api.3e.cl/api/proveedor?skip=0&take=100');
        $lista_prv=$proveedores->json();
        $lista_final=$lista_prv['data'];

        $empresas=empresa::all();

        $recurso_unidad=recurso_unidad_negocio::RecursoUnidad(1)->get('rec_id');
        
        $lista_finalv2=recurso::Recurso($recurso_unidad)->get();

        //$proveedores = proovedor::get();
      
        return view('recepciondebodega.index',compact('lista_final','empresas','lista_finalv2','recurso_unidad'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\recepcion_bodega  $recepcion_bodega
     * @return \Illuminate\Http\Response
     */
    public function show(recepcion_bodega $recepcion_bodega)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\recepcion_bodega  $recepcion_bodega
     * @return \Illuminate\Http\Response
     */
    public function edit(recepcion_bodega $recepcion_bodega)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\recepcion_bodega  $recepcion_bodega
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, recepcion_bodega $recepcion_bodega)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\recepcion_bodega  $recepcion_bodega
     * @return \Illuminate\Http\Response
     */
    public function destroy(recepcion_bodega $recepcion_bodega)
    {
        //
    }

    public function getUnidadNegocio(Request $empresa)
    {
       
       
      $unidad_negocio=unidad_negocio::recurso($empresa->input('empresa_id'))->get();
       

       return response()->json($unidad_negocio);

    }


    public function getCentroCosto(Request $unidad_n)
    {
       
       
      $centro_costo=centro_costo_gestion::CentroCosto($unidad_n->input('unidadN_id'))->get();

       return response()->json($centro_costo);
    }


     public function getRecurso(Request $unidad_negocio_n)
     {
        $unidad_negocio=unidad_negocio::find($unidad_negocio_n->input('unudadN_id'));
        $recursos=$unidad_negocio->Recurso();

        return response()->json($recursos);

        


     }
}
