<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\DetallesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    if(!isset($cookie['username'])){
        return Redirect::to('http://127.0.0.1:8000/login');
    }else{
        return Redirect::to('http://127.0.0.1:8000/home');
    }
});


Route::get('home', [ProductosController::class, 'getProductos']);

Route::get('detalles/{id}', [DetallesController::class, 'getProducto']);

Route::get('compra', function(){
    return view('compra');
});

Auth::routes();

