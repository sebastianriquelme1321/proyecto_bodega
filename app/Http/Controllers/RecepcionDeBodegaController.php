<?php

namespace App\Http\Controllers;

use App\recepcion_de_bodega;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RecepcionDeBodegaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $provedores=Http::get('https://api.3e.cl/api/proveedor');
        $lista_provedor=$provedores->json();
        //$datos['empresa'] = recepcion_de_bodega::paginate();        
        return view('recepciondebodega.index',compact('lista_provedor'));
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
     * @param  \App\recepcion_de_bodega  $recepcion_de_bodega
     * @return \Illuminate\Http\Response
     */
    public function show(recepcion_de_bodega $recepcion_de_bodega)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\recepcion_de_bodega  $recepcion_de_bodega
     * @return \Illuminate\Http\Response
     */
    public function edit(recepcion_de_bodega $recepcion_de_bodega)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\recepcion_de_bodega  $recepcion_de_bodega
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, recepcion_de_bodega $recepcion_de_bodega)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\recepcion_de_bodega  $recepcion_de_bodega
     * @return \Illuminate\Http\Response
     */
    public function destroy(recepcion_de_bodega $recepcion_de_bodega)
    {
        //
    }
}
