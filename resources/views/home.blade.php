<!DOCTYPE html>
<html>
<style>
table, th, td {
  border:1px solid black;
}
</style>
<body>

<h2>USERNAME <Button>LOG OUT</Button></h2>

<table style="width:100%">
    <tr>
        <th>IMAGEN</th>
        <th>PRECIO</th>
        <th>DETALLES</th>
    </tr>
    @foreach($productos as $producto)
    <tr>
        <th><img src='{{$producto["imagen"]}}'></img></th>
        <th>{{$producto["precio"]}}</th>
        <th><button>DETALLES</button></th>
    </tr>
    @endforeach
</table>
</body>
</html>
