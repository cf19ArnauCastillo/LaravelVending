
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
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
