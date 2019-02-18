@extends('layouts.master')

@section('content')

    

            
        <div class="row">

            <div class="col-sm-4">

               <img src="https://picsum.photos/200/300/?random" style="height:200px"/>
            </div>
            <div class="col-sm-8">

                <h3>Nombre: {{$producto->nombre}}</h3>
                <h3>Categoría: {{$producto->categoria}}</h3>

                <form action="{{ url('/productos/comprar/' . $producto->id) }}" method="POST">

                        {{method_field('PUT')}}

                        @csrf

                @if ($producto->pendiente==true)
                <button class="btn btn-success" type="submit">Comprado</button>
                @else
                <button class="btn btn-info" type="submit">Comprar</button>
                @endif

                 </form>

                <a class="btn btn-warning" href="{{ url('/productos/edit/' . $producto->id ) }}">
                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                Editar Producto</a><br>
            <a class="btn btn-outline-info" href="{{ action('ProductoController@getIndex') }}">Volver al listado</a>
        

            </div>

           
        </div>



@stop
