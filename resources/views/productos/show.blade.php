@extends('layouts.master')

@section('content')

    

            
        <div class="row">

            <div class="col-sm-4">

               <img src="https://picsum.photos/200/300/?random" style="height:200px"/>
            </div>
            <div class="col-sm-8">

                <h3>Nombre: {{$producto->nombre}}</h3>
                <h3>Categoría: {{$producto->categoria}}</h3>

                @if ($producto->pendiente==true)
                <a class="btn btn-success" href="">Comprado</a>
                @else
                <a class="btn btn-info" href="">Comprar</a>
                @endif

                <a class="btn btn-warning" href="{{ url('/productos/edit/' . $producto->id ) }}">
                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                Editar Producto</a><br>
            <a class="btn btn-outline-info" href="{{ action('ProductoController@getIndex') }}">Volver al listado</a>

            </div>
        </div>



@stop
