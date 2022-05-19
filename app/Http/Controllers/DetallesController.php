<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetallesController extends Controller
{
    public function getProducto($id){
        $producto = \DB::table('productos')->where('id',$id)->first();
        $producto = json_decode(json_encode($producto), true);
        return view('/detalles', ['producto'=>$producto]);
    }
}
