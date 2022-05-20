<style>
       .container{
       width: 100%;
       height: 100%;
       text-align: center;
    }

    .texto{
       font-size:50px;
    }
</style>

@extends('layouts.app')

@section('content')
<div id="texto"  class="container">
<p class="texto">El producte està sortint i el pot recollir per la comporta inferior de la màquina</p>
<p class="texto">Gràcies per la seva compra</p>
<script>
       setTimeout(function() {
           window.location.href = "/home"
       }, 5000);
    </script>
</div>


   @endsection
