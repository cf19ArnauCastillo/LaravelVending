<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function getProductos(){
        $productos = \DB::table('productos')->get();
        $productos = json_decode($productos, true);
        return view('/home', ['productos'=>$productos]);
    }
}
