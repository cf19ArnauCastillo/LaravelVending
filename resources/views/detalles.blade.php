<!DOCTYPE html>
<html>
<head>
<title></title>

<style type="text/css">

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
   <p>{{$producto["imagen"]}}</p>
   <img src='{{url($producto["imagen"])}}'>
   <div class="preu">{{$producto["precio"]}} €</div>
</div>
</body>
</html>