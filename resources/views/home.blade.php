<style type="text/css">
    * {
        box-sizing: border-box;
    }

    .columna {
        float: left;
        position: relative;
        display: inline-block;
        text-align: center;
        width: 33%;
        padding-right: 5px;
    }

    .fila::after {
        content: "";
        clear: both;
        display: table;
    }

    img {
        /* Para que sea responsiva */
        height: 300px;
        width: 80%;
    }

    .preu {
        position: absolute;
        bottom: 30px;
        right: 70px;
        font-size: 80px;
    }

    .carril {
        position: absolute;
        font-size: 40px;
        bottom: 10px;
        left: 130px;
        transform: translate(-50%, -50%);
    }

</style>
@extends('layouts.app')

@section('content')
                    @php
                        $numero = 0;
                    @endphp
                    <div class="card-body">
                        @foreach ($productos as $producto)
                            @php
                                $numero = $numero + 1;
                            @endphp
                            <div class="columna">
                                <a href="/detalles/{{ $producto['id'] }}">
                                    <img src='{{ $producto["imagen"] }}'>
                                    <div class="preu">{{ $producto['precio'] }} €</div>
                                    <div class="carril">Carril @php echo $numero @endphp</div>
                                </a>
                            </div>
                        @endforeach
                    </div>
@endsection
