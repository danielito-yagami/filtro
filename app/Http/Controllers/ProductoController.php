<?php

namespace App\Http\Controllers;

use App\Models\categoria;
use App\Models\producto;
use Exception;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //Metodo por defecto GET

        //Obteniendo el parametro

        $categoria = request()->input('categorias');

        //echo $categoria;

        if($categoria == 'all'){


            $productos = producto  ::join('categorias','categorias.id','=','productos.id_categoria')
            ->select('productos.id AS id','productos.nombre AS nombre','productos.descripcion AS descripcion','productos.precio AS precio','productos.imagen AS imagen','categorias.nombre AS categoria')
            ->get();

            $categorias = categoria::all();






            return view('index',compact('productos','categorias'));

        }else {

            $productos = producto  ::join('categorias','categorias.id','=','productos.id_categoria')
            ->select('productos.id AS id','productos.nombre AS nombre','productos.descripcion AS descripcion','productos.precio AS precio','productos.imagen AS imagen','categorias.nombre AS categoria')
            ->where('categorias.id','=',$categoria)
            ->get();
            $categorias = categoria::all();






            return view('index',compact('productos','categorias'));

        }

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        //return view('producto.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        //Creando una variable de control
        //Para determinar si se subio una foto o no
        $control ="";

        //Recibiendo los datos del formulario
            $categoria = request()->input('categoria');

            $categoriax =intval($categoria);

            $nombre = request()->input('nombre');
            $precio = request()->input('precio');


            //Convirtiendo el valor de precio a double o decimal en la base de datos

            $preciox = doubleval($precio);

            $descripcion = request()->input('descripcion');
            $img = $request->file('imgx');




            $datos = array(
            'id_categoria'=>$categoriax,
            'nombre'=>$nombre,
            'descripcion'=>$descripcion,
            'precio'=>$preciox,
            'imagen'=>$img);


            //echo $datos['imagen'];





            //return response()->json($datos);
            //Si se subio una imagen

            if(($datos['imagen'] !="") || ($img != null)){

               //Subiendo la imagen al servidor
               $datos['imagen'] = $img->store('uploads/productos','public');
               //echo "funciona";
            }
            //return response()->json($datos);
            //Insertando en la base de datos

            try{

                producto::create($datos);

            }catch(Exception $e){


                $control = "Error al crear el registro";
                echo $control."\n".$e;
                //return redirect("./edit")->with('msj2',"No se ha podido registrar");

                return 1;
            }

            if($control == ''){

                //Significa que no ha entrado el cacth del try y se inserto correctamente se usa sin ajax
                //return redirect("./edit")->with('msj2',"El producto se registro existosamente");

                return 0;

            }

           // return response()->json($datos);




        /*


        $respuesta = categoria::where('id_categoria','=', $nombre)->get(['id','nombre']);
        */




    }

    /**
     * Display the specified resource.
     */
    public function show(producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(producto $producto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, producto $producto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(producto $producto)
    {
        //
    }


    public function productoX(Request $request){






    }
}
