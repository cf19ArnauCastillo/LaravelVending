<!DOCTYPE html>
<html>
<head>
<title></title>

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

        .preu{
            position: absolute;
            bottom: 30px;
            right: 70px;
            font-size: 80px;
        }
        
        .carril{
            position: absolute;
            font-size: 40px;
            bottom: 10px;
            left: 130px;
            transform: translate(-50%, -50%);
        }

#BarraHTML {
background-color: #A9A9A9;
    padding: 1px;
    position: fixed;
    width: 100%;
z-index: 10000;
    margin-top: -0.4%;
    margin-left: -0.5%;
}
#BarraHTML ul{
   list-style-type: none;
    
   
}
#BarraHTML li{
   display: inline;
   text-align: center;
   margin: 0 0 0 0;
}
#BarraHTML li a {
   padding: 2px 7px 2px 7px;
   text-decoration: none;
}
#BarraHTML li a:hover{
   background-color: #333333;
   color: #ffffff;
}
#texto{
padding: 60px 0 0 0;
}

.logoutbutton{
    position:fixed;
   right:30px;
}
   </style>
</head>

<body>


<div id="BarraHTML">
<ul>
<li><a>Bienvenido Cristian</a></li>
<li><button class="logoutbutton">SALIR</button></li>
</ul>
</div>
<div id="texto">

</div>
@php
$numero = 0;
@endphp
<div class="fila">
    @foreach($productos as $producto)
    @php
    $numero = $numero+1;
    @endphp
    <div class="columna">
        <a href="/detalles/{{$producto['id']}}">
            <img src='{{$producto["imagen"]}}'>
            <div class="preu">{{$producto["precio"]}} €</div>
            <div class="carril">Carril @php echo $numero @endphp</div>
        </a>
    </div>
    @endforeach
</div>
</body>
</html>