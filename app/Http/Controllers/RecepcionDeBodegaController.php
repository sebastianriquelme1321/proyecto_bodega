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
use App\unidad;
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
        $proveedores=Http::get('https://api.3e.cl/api/proveedor?skip=0&take=100'); ///Se accede a la API
        $lista_prv=$proveedores->json();                                           //Se transforma lo obtenido de la API a json
        $lista_final=$lista_prv['data'];                                           //Se selecciona la data del json

        $empresas=empresa::all();                                                  //Se solicita a la base de datos todas las empresas
        
      
        return view('recepciondebodega.index',compact('lista_final','empresas'));  //Se retorna la visa y se le pasan las empresas como tambien los datos de los proveedores 
                                                                                   //obtenidos de la API
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

    public function getUnidadNegocio(Request $empresa) //Funcion que busca las unidades de negocio dependiendo de la empresa seleccionada 
    {
       
       
      $unidad_negocio=unidad_negocio::Unidad($empresa->input('empresa_id'))->get(); //LLamada a la funcion unidad que a su vez realiza la consulta a la base de datos
       

       return response()->json($unidad_negocio);      //Le envía las unidades de neogico a la vista 

    }


    public function getCentroCosto(Request $unidad_n)  //Funcion que busca los centros de costo dependiendo de la unidad de negococio seleccionada
    {
       
       
      $centro_costo=centro_costo_gestion::CentroCosto($unidad_n->input('unidadN_id'))->get(); //LLamada a la funcion CentroCosto que a su vez realiza la consulta a la base de datos

       return response()->json($centro_costo);  //Le envía las unidades de neogico a la vista 

    }


    public function getRecurso(Request $unidad_negocio_n)  //Funcion que busca los recursos de dependiendo de la unidad de negococio seleccionad
    {
       $recurso_unidad=recurso_unidad_negocio::RecursoUnidad($unidad_negocio_n->input('unidadN_id'))->get(); //LLamada a la funcion RecursoUnidad que a su vez realiza la consulta a la base de datos
       $aux = json_decode($recurso_unidad,true);  //Para poder recorrer el json debemos decodificarlo para que quede como un array
       $recurso_final=[];
        foreach($aux as $rec)
        {
              $recurso_final=recurso::Recurso($rec['rec_id'])->get();  //Llamada a la funcion Recurso el cual a su vez realiza la consulta a la base de datos
        }
        return response()->json($recurso_final); //Le envía  los recursos a la vista

    }

    public function getUnidadMedida(Request $recurso) //Funcion que busca la unidad de medida,dependiendo del recurso seleccionado
    {
        $unidad_medida=unidad::UnidadMedida($recurso->input('recurso_id'))->get(); //Llamada a la funcion UnidadMedida la cual realiza la consulta a la base de datos
        return response()->json($unidad_medida);  // Le envía a la vista la unidad de medida correspondiente

    }
    

}
