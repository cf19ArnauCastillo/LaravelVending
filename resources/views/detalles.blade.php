<style>
       img {
        /* Para que sea responsiva */
        height: 300px;
        width: 30%;
        text-align: center;
    }

    .preu {
        position: absolute;
        bottom: 30px;
        right: 70px;
        font-size: 80px;
    }
    .container{
       width: 100%;
       height: 100%;
       text-align: center;
    }
    table{
      width:100%;
      text-align: center;
    }
</style>
@extends('layouts.app')

@section('content')
</div>
<div id="texto">

</div>
<div class="container">
<img src='{{url($producto["imagen"])}}'>
<table>
   <tr>
      <th>NOM</th>
      <th>PREU</th>
      <th>PAIS</th>
      <th>Kcal/U</th>
   </tr>
   <tr>
      <td>{{$producto["nombre"]}}</td>
      <td>{{$producto["precio"]}}</td>
      <td>{{$producto["pais"]}}</td>
      <td>{{$producto["kcalxunit"]}}</td>
   </tr>
   <tr>
      <th>Kcal/100g</th>
      <th>GREIXOS</th>
      <th>CARBOHIDRATS</th>
      <th>PROTEINES</th>
   </tr>
   <tr>
      <td>{{$producto["kcalxcien"]}}</td>
      <td>{{$producto["grasas"]}}</v>
      <td>{{$producto["carbohidratos"]}}</td>
      <td>{{$producto["proteinas"]}}</td>
   </tr>
</table>
<button href="/home">TORNAR</button>
</div>


   @endsection