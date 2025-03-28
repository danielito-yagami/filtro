<?php

namespace App\Http\Controllers;

use App\Models\categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Para proteger la ruta

        //return view("index");

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
        //Recibiendo los datos del formulario categoria
        //Recibiendo uno por uno los datos del formulario

        $nombre = request()->input('nombreC');

        //Convirtiendo en minusculas

        $nombre = mb_strtolower($nombre);


        //Creando un arreglo para guardar los datos

        $datos = array('nombre'=>$nombre);

        //Para ver la respuesta

        //Validar que no se repitan los registros

        $respuesta = categoria::where('nombre','=', $nombre)->get(['id','nombre']);



        //Si el array esta en 0 signfica que no hay registro con el nombre ingresado
        if(count($respuesta) == 0){


            //Caso donde se puede insertar el registro

            //Insertando el registro en la base de datos
            categoria::create($datos);
            return redirect('./edit')->with('mensaje',"La categoria: ".$nombre." se ha creado con exito");

        }else{

            //Caso donde si existe ya el registro
            return redirect('./edit')->with('mensaje',"La categoria ya existe");
        }



        //return response()->json($datos);
    }

    /**
     * Display the specified resource.
     */
    public function show(categoria $categoria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(categoria $categoria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, categoria $categoria)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(categoria $categoria)
    {
        //
    }
}
