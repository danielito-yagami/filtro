<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;
use App\Models\categoria;
use App\Models\producto;
use Illuminate\Support\Facades\Route;

//Generando la vista con todos los productos
Route::get('/', function () {




    //haciendo una consulta con join en laravel
    $productos = producto  ::join('categorias','categorias.id','=','productos.id_categoria')
    ->select('productos.id AS id','productos.nombre AS nombre','productos.descripcion AS descripcion','productos.precio AS precio','productos.imagen AS imagen','categorias.nombre AS categoria')
    ->get();

    $categorias = categoria::all();






    return view('index',compact('productos','categorias'));
});

//Para agregar mas categorias y productos
Route::get('/edit',function(){


    //Para mandar a llamar las categorias

    $categorias = categoria::all();

    return view('edit',compact('categorias'));

});

//Definiendo una nueva ruta para el controlador de productos

Route::post('/producto/p',[ProductoController::class,'productoX']);

Route::resource('categorias',CategoriaController::class);
Route::resource('producto',ProductoController::class);
